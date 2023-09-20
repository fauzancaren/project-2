<?php
class Inventory_price_customers_model extends CI_Model {

private $primary_key='id';
private $table_name='inventory_price_customers';

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
        $found=false;
        if(isset($data['id'])){
            $id=$data['id'];
            unset($data['id']);
        }
        if($q=$this->db->where('item_no',$data['item_no'])
            ->where('cust_type',$data['cust_type'])
            ->get($this->table_name)){
                if($r=$q->row()){
                    $id=$r->id;
                    $found=true;
                }

            }
        if($found){
            unset($data['item_no']);
            unset($data['cust_type']);
            return $this->update($id,$data);
        } else {
            return $this->db->insert($this->table_name,$data);
        }
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
