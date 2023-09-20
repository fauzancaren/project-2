<?php
class Angsuran_model extends CI_Model {

private $primary_key='id';
private $table_name='kop_cicilan_bayar';
	function __construct(){
		parent::__construct();        
	}
	function get_by_id($id){
		$this->db->where($this->primary_key,$id);
		return $this->db->get($this->table_name);
	}

}
