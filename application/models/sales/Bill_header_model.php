<?php
class Bill_header_model extends CI_Model {

private $primary_key='bill_id';
private $table_name='bill_header';
	function __construct(){
		parent::__construct();        
	}
	function count_all(){
		return $this->db->count_all($this->table_name);
	}
	function get_by_id($id){
		$this->db->where($this->primary_key,$id);
		return $this->db->get($this->table_name);
	}
	function save($data){
		if($data['bill_date'])$data['bill_date']= date('Y-m-d H:i:s', strtotime($data['bill_date']));
		if(isset($data['date_to']))$data['date_to']= date('Y-m-d H:i:s', strtotime($data['date_to']));
		$data['cid']=cid();
		return $this->db->insert($this->table_name,$data);
	}
	function update($id,$data){
        if($data['bill_date'])$data['bill_date']= date('Y-m-d H:i:s', strtotime($data['bill_date']));
        if(isset($data['date_to']))$data['date_to']= date('Y-m-d H:i:s', strtotime($data['date_to']));
		if($data['amount']=='')$data['amount']=0;
		$data['cid']=cid();
		$this->db->where($this->primary_key,$id);
		$ok=$this->db->update($this->table_name,$data);
		$this->recalc($id);
		return $ok;
	}
	function delete($id){	
		$this->db->where($this->primary_key,$id);
		$this->db->delete('bill_detail');        
		$this->db->where($this->primary_key,$id);
		return $this->db->delete($this->table_name);
	}
	function recalc($id){
		$total=$this->db->query("select sum(amount) as z from bill_detail where bill_id='$id'")->row()->z;
		if($total=="")$total=0;		
		$this->db->query("update bill_header set amount='$total' where bill_id='$id'");
		return true;
	}
}	 
