<?php
class Promosi_model extends CI_Model {

	private $primary_key='promosi_code';
	private $table_name='promosi_disc';
	public $result=null;

	function __construct(){
		parent::__construct();        
        $this->load->model("inventory_model");
        $this->load->model("category_model");
        $this->load->model("supplier_model");
		$this->load->model("sales/promosi_item_model");
        
	}
	function count_all(){
		return $this->db->count_all($this->table_name);
	}
	function get_by_id($id){
		$this->db->where($this->primary_key,$id);
		return $this->db->get($this->table_name);
	}
	function save($data){
		isset($data['flag1'])?$data['flag1']=1:$data['flag1']=0;;
		isset($data['flag2'])?$data['flag2']=1:$data['flag2']=0;
		isset($data['flag3'])?$data['flag3']=1:$data['flag3']=0;
		isset($data['issameitem'])?$data['issameitem']=1:$data['issameitem']=0;
		isset($data['not_active'])?$data['not_active']=1:$data['not_active']=0;
		if(isset($data['disc_prc_1'])){
			if($data['disc_prc_1']=="")$data['disc_prc_1']=0;
		}
		$ok=$this->db->insert($this->table_name,$data);
		$id=$this->db->insert_id();
		return $ok;
	}
	function update($id,$data){
		isset($data['flag1'])?$data['flag1']=1:$data['flag1']=0;;
		isset($data['flag2'])?$data['flag2']=1:$data['flag2']=0;
		isset($data['flag3'])?$data['flag3']=1:$data['flag3']=0;
		isset($data['issameitem'])?$data['issameitem']=1:$data['issameitem']=0;
		isset($data['not_active'])?$data['not_active']=1:$data['not_active']=0;
		if(isset($data['disc_prc_1'])){
			if($data['disc_prc_1']=="")$data['disc_prc_1']=0;
		}
		$this->db->where($this->primary_key,$id);
		return $this->db->update($this->table_name,$data);
	}
	function delete($id){
		$this->db->where($this->primary_key,$id)->delete("promosi_item");
		$this->db->where($this->primary_key,$id);
		$this->db->delete($this->table_name);
	}
	function datalist(){
		$ret['']='- Select -';
		if($query=$this->db->get($this->table_name))
		{
			foreach ($query->result() as $row){
				$ret[$row->kode]=$row->category;
			}
		}			
		return $ret;
	}	
	function discount_save($data){
		$q=$this->db->select("id")->where("cust_no",$data['cust_no'])
			->where("category",$data["cat"])
			->get("inventory_price_customers");
		$d['cust_no']=$data['cust_no'];
		$d['sales_price']=$data['price'];
		$d['disc_prc_to']=$data['disc_prc'];
		$d['disc_amount']=$data['disc_amt'];
		$d['disc_prc_2']=$data['disc_prc_2'];
		$d['disc_prc_3']=$data['disc_prc_3'];
		$d['min_qty']=$data['min_qty'];
		 
		if($q->num_rows()){
			$id=$q->row()->id;
			return $this->db->where("id",$id)->update("inventory_price_customers",$d);
		} else {
			$d['category']=$data['cat'];
			$d['description']=$this->db->where("kode",$d["category"])->get($this->table_name)->row()->category;
			$q=$this->db->insert("inventory_price_customers",$d);
			return $this->db->insert_id();
		}
	}
	function discount_list($cust_no)
	{
		$ret=false;
		$data=array();
		if($q=$this->db->where("cust_no",$cust_no)->get("inventory_price_customers"))
		{
			foreach($q->result() as $row){
				$data[]=array('kode'=>$row->category,
					'category'=>$row->description,
					'price'=>$row->sales_price,
					'disc_prc'=>$row->disc_prc_to,
					'disc_prc_2'=>$row->disc_prc_2,
					'disc_prc_3'=>$row->disc_prc_3,
					'disc_amount'=>$row->disc_amount,
					'min_qty'=>$row->min_qty,
					'id'=>$row->id);
			}
		}
		return $data;
	}
	function discount_delete($rowid){
		return $this->db->where("id",$rowid)->delete("inventory_price_customers");	
	}
	function promo_qty_extra($item_number,$qty_sold){
		$ret=0;
		$sql="select pi.extra_items as extra_qty,pi.min_qty from promosi_item pi 
		left join promosi_disc pd on pd.promosi_code=pi.promosi_code
		where pd.disc_type=2 
		and pi.item_number='$item_number' 
		and (now() between from_date and to_date)";
		
		$sql="select pd.promosi_code,pd.nilai as extra_qty,pd.qty as min_qty,
		pd.issameitem,pd.flag1,pd.flag2 
		from promosi_item pi 
		left join promosi_disc pd on pd.promosi_code=pi.promosi_code 
		where pd.category='2' 
		and pi.item_number='$item_number' 
		and (now() between pd.date_from and pd.date_to)
		";
		$this->result=null;
		if($q=$this->db->query($sql)){
			if($row=$q->row()){
				if($qty_sold>=$row->min_qty){
					$ret=($qty_sold/$row->min_qty)*$row->extra_qty;
					$s="select * from promosi_extra_item where promosi_code='$row->promosi_code'";
					$extra_items=$this->db->query($s)->row_array();
			
					$this->result=array("promosi_code"=>$row->promosi_code,
						"issameitem"=>$row->issameitem,
						"flag1"=>$row->flag1,
						"flag2"=>$row->flag2,
						"extra_qty"=>$row->extra_qty,
						"min_qty"=>$row->min_qty,
						"qty_result"=>$ret,
						"item_free"=>$extra_items
					);

				}
			}
		}
		return $ret;
	}
	function save_item_customer($data){
		$id=0;
		$customer_number=$data['customer_number'];
		$line_type="customer";
		if(isset($data['line_type']))$line_type=$data['line_type'];
		$this->db->where("promosi_code",$data['promosi_code']);
		$this->db->where("cust_code",$customer_number);
		if($q=$this->db->get("promosi_item_customer")){
			if(!$q->num_rows()){
				$data['line_type']=$line_type; 
				if($q2=$this->db->insert("promosi_item_customer",$data)){
					$id = $this->db->insert_id();
				}
			} else {
				$id=$q->row()->id;
			}
		}
		return $id;
	}
	function save_item($data){
		$id=0;
		$item_number=$data['item_number'];
		$item_type="item";
		if(isset($data['item_type']))$item_type=$data['item_type'];
		$this->db->where("promosi_code",$data['promosi_code']);
		$this->db->where("item_number",$item_number);
		if($q=$this->db->get("promosi_item")){
			if(!$q->num_rows()){
				$data['item_type']=$item_type;
				if($item_type=="item"){
					$data['description']=$this->inventory_model->get_description($item_number);
				} else if($item_type=="category"){
					$data['description']=$this->category_model->get_category($item_number);

				} else if($item_type=="supplier"){
					$data['description']=$this->supplier_model->get_supplier_name($item_number);
				} else {
					$data['description']=$data['item_number'];
				}

				if($q2=$this->db->insert("promosi_item",$data)){
					return $this->db->insert_id();
				}
			} else {
				$id=$q->row()->id;
			}
		}
		return $id;
	}
	function delete_item($id){
		$this->db->where("id",$id);
		return $this->db->delete("promosi_item");
	}
	function delete_item_extra($id){
		$this->db->where("id",$id);
		return $this->db->delete("promosi_extra_item");
	}
	function delete_item_customer($id){
		$this->db->where("id",$id);
		return $this->db->delete("promosi_item_customer");
	}
	function today_promo_point(){
		$s="select * from promosi_disc where '".date('Y-m-d H:i:s')."' 
		between date_from and date_to and category='6'";
		return $this->db->query($s);
	}
	function save_item_extra($data){
		$id=0;
		$item_number=$data['item_number'];
		//$item_type="item";
		//if(isset($data['item_type']))$item_type=$data['item_type'];
		$this->db->where("promosi_code",$data['promosi_code']);
		$this->db->where("item_number",$item_number);
		if($q=$this->db->get("promosi_extra_item")){
			if(!$q->num_rows()){
				//$data['item_type']=$item_type;
				//if($item_type=="item"){
				$data['description']=$this->inventory_model->get_description($item_number);
				 

				if($q2=$this->db->insert("promosi_extra_item",$data)){
					return $this->db->insert_id();
				}
			} else {
				$id=$q->row()->id;
			}
		}
		return $id;
	}
}
