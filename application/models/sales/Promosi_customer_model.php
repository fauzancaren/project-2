<?php
class Promosi_customer_model extends CI_Model {

	private $primary_key='id';
	private $table_name='promosi_item_customer';

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
		$ok=$this->db->insert($this->table_name,$data);
		$id=$this->db->insert_id();
		return $ok;
	}
	function update($id,$data){
		$this->db->where($this->primary_key,$id);
		return $this->db->update($this->table_name,$data);
	}
	function delete($id){
		$this->db->where($this->primary_key,$id);
		$this->db->delete($this->table_name);
	}	 
	function exist($promosi_code,$cust_code) {
		$s="select count(1) as cnt from promosi_item_customer 
		where promosi_code='$promosi_code' and cust_code='$cust_code' ";
		return $this->db->query($s)->row()->cnt>0;
	}
}
