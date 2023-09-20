<?php
class Inventory_qty_step_model extends CI_Model {

private $primary_key='id';
private $table_name='inventory_qty_step';

function __construct(){
	parent::__construct();        

}
	function get_paged_list($limit=10,$offset=0,
	$order_column='',$order_type='asc')
	{
        $nama='';
        if(isset($_GET['nama'])){
            $nama=$_GET['nama'];
        }
        if($nama!='')$this->db->where("class like '%$nama%'");

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
		return $this->db->where($this->primary_key,$id)
			->get($this->table_name);
	}
	function save($data){
        if(isset($data['id']))unset($data['id']);
		return $this->db->insert($this->table_name,$data);
	}
	function update($id,$data){
        if(isset($data['id']))unset($data['id']);
		return $this->db->where($this->primary_key,$id)
			->update($this->table_name,$data);
	}
	function delete($id){
		return $this->db->where($this->primary_key,$id)->delete($this->table_name);
	}

}
