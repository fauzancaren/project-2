<?php
class Promosi_item_model extends CI_Model {

	private $primary_key='id';
	private $table_name='promosi_item';

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
	function exist($promosi_code,$item_number) {
		$s="select count(1) as cnt from promosi_item 
		where promosi_code='$promosi_code' and item_number = '$item_number' ";
		
		$cnt=$this->db->query($s)->row()->cnt;
		if($cnt==0){
			$s="select category,supplier_number,model,manufacturer 
			from inventory where item_number='$item_number'";
			$category="";
			$supplier_number="";
			$model="";
			$merk="";
			if($r=$this->db->query($s)->row()){
				$category=$r->category;
				$supplier_number=$r->supplier_number;
				$model=$r->model;
				$merk=$r->manufacturer;
			}
			if($supplier_number!="" && $cnt==0){
				$item_number=$supplier_number;
				$s="select count(1) as cnt from promosi_item 
				where promosi_code='$promosi_code' and '$item_number' 
				and line_type='kode_supplier' ";
				$cnt=$this->db->query($s)->row()->cnt;				
			}
			if($model!="" && $cnt==0){
				$item_number=$model;
				$s="select count(1) as cnt from promosi_item 
				where promosi_code='$promosi_code' and '$item_number' 
				and line_type='kode_model' ";
				$cnt=$this->db->query($s)->row()->cnt;				
			}
			if($merk!="" && $cnt==0){
				$item_number=$merk;
				$s="select count(1) as cnt from promosi_item 
				where promosi_code='$promosi_code' and '$item_number' 
				and line_type='kode_merk' ";
				$cnt=$this->db->query($s)->row()->cnt;				
			}
			
			if($category!="" && $cnt==0){
				$item_number=$category;
				$s="select count(1) as cnt from promosi_item 
				where promosi_code='$promosi_code' and '$item_number' 
				and line_type='kode_category' ";
				$cnt=$this->db->query($s)->row()->cnt;
				
			}
			
		}
		return $cnt;
	}
}
