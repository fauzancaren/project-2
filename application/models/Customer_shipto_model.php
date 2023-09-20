<?php
class Customer_shipto_model extends CI_Model {

	private $primary_key='id';
	private $table_name='customer_shipto';
	public $fields=null;

	function __construct(){
		parent::__construct();
	}
	function get_paged_list($limit=100,$offset=0,$order_column='',$order_type='asc')	{
		$nama='';
		if(isset($_GET['location_code']))$nama=$_GET['location_code'];
		if($nama!='')$this->db->where("location_code like '%$nama%'");
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
		$this->db->where($this->primary_key,$id);
		return $this->db->get($this->table_name);
	}
    function get_by_code($location_code,$customer_number=''){
		$location_code=urldecode($location_code);		
		$customer_number=urldecode($customer_number);
		if($location_code=='')$location_code='unknown';
		$this->db->where("location_code",$location_code);
        //if($customer_number!="")$this->db->where("customer_code",$customer_number);
		return $this->db->get($this->table_name);

    }
	function ship_info($location_code){
		$ret="";
		if($qship=$this->get_by_code($location_code)){
			if($rship=$qship->row()){
				$ret=$rship->alamat.", 
				Phone: ".$rship->telp.", 
				Up: ".$rship->contact;
			}
		}
		return $ret;
	}
	function save($data){
		return $this->db->insert($this->table_name,$data);            
	}
	function update($id,$data){
		$id=urldecode($id);
		$this->db->where($this->primary_key,$id);
		return  $this->db->update($this->table_name,$data);
	}
	function delete($id){
		$id=urldecode($id);
		$this->db->where($this->primary_key,$id);
		$this->db->delete($this->table_name);
	}
	function lookup(){       
        $lookup = $this->list_of_values->render(array(
        	"dlgBindId"=>"customer_shipto","modules"=>"customer_shipto",
        	"dlgRetFunc"=>"			
				$('#ship_to_customer').val(row.location_code);
        	",
            "dlgUrlQuery"=>"customer_shipto/browse_data",
            "dlgBeforeLookup"=>null,
        	"dlgCols"=>array(
                array("fieldname"=>"location_code","caption"=>"Kode","width"=>"80px"),
                array("fieldname"=>"contact","caption"=>"Contact","width"=>"80px"),
                array("fieldname"=>"telp","caption"=>"Telp","width"=>"80px"),
                array("fieldname"=>"alamat","caption"=>"Alamat","width"=>"180px")
        	)
        ));
		return $lookup;
    }	

}

?>