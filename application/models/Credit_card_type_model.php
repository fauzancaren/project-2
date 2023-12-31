<?php
class Credit_card_type_model extends CI_Model {

private $primary_key='card_type';
private $table_name='credit_card_type';

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
                if($nama!='')$this->db->where("category like '%$nama%'");

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
		$id=urldecode($id);
		rekening_need_update($id);
		
		$this->db->where($this->primary_key,$id);
		return $this->db->get($this->table_name);
	}
	function get_by_account($id){
		$this->db->where("account_id",$id);
		return $this->db->get($this->table_name);		
	}
    function get_account_id($account_number){
        $ret=0;
        if($q=$this->get_by_id($account_number)){
            if($r=$q->row()){
                $ret=$r->account_id;
            }
        }
        return $ret;
    }
	function save($data){
        $id="";
        if(isset($data[$this->primary_key]))$id=$data[$this->primary_key];
		//$data['cid']=cid();
		//if($data['cid']=='ALL')unset($data['cid']);
		$this->db->insert($this->table_name,$data);
		//return $this->db->insert_id();
        return $id;
	}
	function update($id,$data){        
		$this->db->where($this->primary_key,$id);
		$this->db->update($this->table_name,$data);
	}
 
	function delete($id){
		$id=urldecode($id);		
		$this->db->where($this->primary_key,$id);
		$this->db->delete($this->table_name);
	}
 
    
    function select_edc(){
        $ret[""]="--Pilih Rekening--";
        $sql="select bank_account_number,bank_name,org_id 
            from bank_accounts 
            where has_edc=1 and org_id='".current_company()."' 
            order by bank_name";
        if($q=$this->db->query($sql)){
            foreach($q->result() as $row){
                $ret[$row->bank_account_number]="$row->bank_name - $row->bank_account_number - $row->org_id";
            }
        }
        return $ret;
    }
 
	
}
?>