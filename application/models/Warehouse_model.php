<?php
class Warehouse_model extends CI_Model {

private $primary_key='location_number';
private $table_name='shipping_locations';

function __construct(){
	parent::__construct();        
        
    
}
	function save($data){
		$data['cid']=cid();
		if($data['cid']=='ALL')unset($data['cid']);
		return $this->db->insert($this->table_name,$data);
	}
	function update($id,$data){
		$data['cid']=cid();
		if($data['cid']=='ALL')unset($data['cid']);
		$this->db->where($this->primary_key,$id);
		return $this->db->update($this->table_name,$data);
	}
	function delete($kode){
		$this->db->where($this->primary_key,$kode);
		return $this->db->delete($this->table_name);
	}
	function lookup(){
		$query=$this->db->query("select location_number from ".$this->table_name);
		$ret=array();$ret['']='- Select -';
 		foreach ($query->result() as $row){$ret[$row->location_number]=$row->location_number;}		 
		return $ret;
	}
	function get_by_id($id){
		$this->db->where($this->primary_key,$id);
		return $this->db->get($this->table_name);
	}
	function loadlist(){
		return $this->db->order_by("no_urut")->get($this->table_name);
	}
	
}
