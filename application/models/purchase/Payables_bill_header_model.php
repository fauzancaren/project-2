<?php
class Payables_bill_header_model extends CI_Model {
private $primary_key='nomor';
private $table_name='payables_bill_header';
public $_data=null;
	function __construct(){
		parent::__construct();        
       
	}	 
	function get_paged_list($limit=10,$offset=0,$order_column='',$order_type='asc')
	{
	    $nama='';
	    if(isset($_GET['nama'])) $nama=$_GET['nama'];
	    $this->db->select('nomor,tanggal,tgl_jth_tempo,supplier_number,supplier_name');
	    $this->db->from($this->table_name);
	    if($nama!='') $this->db->where("supplier_number like '%$nama%' 
	            or nomor like '%$nama%'
	            ");
	    if (empty($order_column)||empty($order_type))
	    { 
	        $this->db->order_by($this->primary_key,'asc');
	    } else {
	        $this->db->order_by($order_column,$order_type);
	    }
	    return $this->db->get('',$limit,$offset);
	}
	function count_all(){
		return $this->db->count_all($this->table_name);
	}
	function get_by_id($id){
		$this->db->where($this->primary_key,$id);
		return $this->db->get($this->table_name);
	}
	function save($data){
		if($data['tanggal'])$data['tanggal']= date('Y-m-d H:i:s', strtotime($data['tanggal']));
		if(isset($data['tgl_jth_tempo'])){
			$data['tgl_jth_tempo']=due_date($data['tanggal'],$data['termin']);
		}
		$data['cid']=cid();
		if(isset($data['amount'])){
			if($data['amount']=='')$data['amount']='0';
		}
		$this->_data=$data;
		return $this->db->insert($this->table_name,$data);
	}
	function update($id,$data){
		if($data['tanggal'])$data['tanggal']= date('Y-m-d H:i:s', strtotime($data['tanggal']));
		if(isset($data['tgl_jth_tempo'])){
			$data['tgl_jth_tempo']=due_date($data['tanggal'],$data['termin']);
			$data['tgl_jth_tempo']= date('Y-m-d H:i:s', strtotime($data['tgl_jth_tempo']));
		}
		$data['cid']=cid();
		if(isset($data['amount'])){
			if($data['amount']=='')$data['amount']='0';
		}
		$this->db->where($this->primary_key,$id);
		$ok=$this->db->update($this->table_name,$data);
		$this->recalc($id);
		$this->_data=$data;
		return $ok;
	}
	function delete($id){	
		$this->db->where($this->primary_key,$id);
		$this->db->delete('payables_bill_detail');        
		$this->db->where($this->primary_key,$id);
		return $this->db->delete($this->table_name);
	}
	function recalc($id){
		$total=$this->db->query("select sum(jumlah) as z from payables_bill_detail 
		where nomor='$id'")->row()->z;
		if($total=='')$total=0;
		$this->db->query("update payables_bill_header set amount='$total' where nomor='$id'");
		$this->_data['total']=$total;
		return true;
	}
}	 
