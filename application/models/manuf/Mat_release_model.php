<?php
class Mat_release_model extends CI_Model {

private $primary_key='mat_rel_no';
private $table_name='mat_release_header';

function __construct(){
	parent::__construct();        
      
}
	function get_paged_list($limit=10,$offset=0,
	$order_column='mat_rel_no',$order_type='asc')
	{
		if (empty($order_column)||empty($order_type))
		$this->db->order_by($this->primary_key,'asc');
		else
		$this->db->order_by($order_column,$order_type);
		return $this->db->get($this->table_name,$limit,$offset);
	}
	function count_all(){
		return $this->db->count_all($this->table_name);
	}
	function get_by_id($id){
		$this->db->where($this->primary_key,$id);
		$ok=$this->db->get($this->table_name);
		return $ok;
	}
	function save($data){
		$data['date_rel']= date( 'Y-m-d H:i:s', strtotime($data['date_rel']));
		return $this->db->insert($this->table_name,$data);
	}
	function update($id,$data){
		$data['date_rel']= date( 'Y-m-d H:i:s', strtotime($data['date_rel']));
		$this->db->where($this->primary_key,$id);
		return $this->db->update($this->table_name,$data);
	}
	function delete($id){

		$this->db->where("mat_rel_no",$id);
		$this->db->delete("mat_release_detail");

		$this->db->where($this->primary_key,$id);
		return $this->db->delete($this->table_name);
		
	}
	function update_item_release($mat_rel_no) {
		$ok=false;
		$woe_no='';
		if($q=$this->get_by_id($mat_rel_no)){
			$row=$q->row();
			$woe_no=$row->exec_number;
			if($woe_no!=''){
				$this->load->model('manuf/work_exec_detail_model');
				$this->load->model('inventory_assembly_model');
				$this->load->model('manuf/mat_release_detail_model');
				$gudang=$row->warehouse;
				$this->mat_release_detail_model->delete_by_number($mat_rel_no);
				
				if($qexec=$this->work_exec_detail_model->lineitems($woe_no)) {
					foreach($qexec->result() as $rexec) {
						$exec_item=$rexec->item_number;
						$exec_qty=$rexec->quantity;
						$exec_unit=$rexec->unit;
						if($qasm=$this->inventory_assembly_model->get_by_parent($exec_item)){
							foreach($qasm->result() as $rasm){
								$asm_item=$rasm->assembly_item_number;
								$asm_qty=$rasm->quantity;
								$asm_unit=$rasm->unit;
								$cost=$rasm->default_cost;
								
								$data['mat_rel_no']=$mat_rel_no;
								$data['item_number']=$asm_item;
								$data['description']='';
								$data['cost']=$cost;
								$data['quantity']=$asm_qty*$exec_qty;
								$data['unit']=$asm_unit;
								$data['warehouse']=$gudang;
								$data['line_exec_no']=$rexec->id;
								if( ! $this->mat_release_detail_model->exist_item($mat_rel_no,$asm_item) ) {
									$this->mat_release_detail_model->save($data);
								} else {
								
								}
								$ok=true;
							}
						}
					}
				}
				
			}
		}
		return $ok;
	}
	function posting($nomor){
		//persediaan dalam proses produksi      Debit
		//persediaan bahan baku                          Credit
		$cid=$this->access->cid;
//                $cid=cid();		
		$set=$this->company_model->get_by_id($cid)->row();

		$coa_hpp=$set->inventory_cogs;
		$coa_stock=$set->inventory;
		$coa_stock_wip=getvar('COA Stock WIP',0);

		$s="select d.*,h.date_rel,h.warehouse,h.comments,h.wo_number,h.exec_number,h.person
		from mat_release_detail d 
		left join mat_release_header h on h.mat_rel_no=d.mat_rel_no 
		where h.mat_rel_no='$nomor'";
		$gl_id=$nomor;
		$date="";
		if($q=$this->db->query($s)){
			foreach($q->result() as $r){
				if($date=="")$date=$r->date_rel;
				$account_id=$coa_stock_wip;
				$debit=$r->amount;
				$credit=0;
				$operation="Material Release WIP";
				$source=$r->comments;
				$cid=$r->item_number;
				$ref=$r->warehouse;

				$this->jurnal_model->add_jurnal($gl_id,$account_id,$date,$debit,$credit,
					$operation,$source,$cid,$ref);

				$account_id=$coa_stock;
				$debit=0;
				$credit=$r->amount;	
				$operation="Material Release Bahan Baku";

				$this->jurnal_model->add_jurnal($gl_id,$account_id,$date,$debit,$credit,
					$operation,$source,$cid,$ref);

			}
		}
		return true;				
	}
	function unposting($nomor){
		$this->db->query("delete from gl_transactions where gl_id='$nomor'");
		$success=$this->db->query("update mat_release_header set posted=0 where mat_rel_no='$nomor'");
		return $success;
	}

}
