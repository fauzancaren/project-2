<?php
class Salesman_model extends CI_Model {

private $primary_key='salesman';
private $table_name='salesman';
public $fields=null;
public $_data=null;
public $_salestype, $_user_id,$_wilayah, $_lock_report ;


function __construct(){
	parent::__construct();        
	add_field('salesman','user_id');
}
	function get_paged_list($limit=10,$offset=0,
	$order_column='',$order_type='asc')
	{
                $nama='';
                if(isset($_GET['salesman'])){
                    $nama=$_GET['salesman'];
                }
                if($nama!='')$this->db->where("salesman like '%$nama%'");

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
		$this->db->where($this->primary_key,$id);
		$_data=$this->db->get($this->table_name);
		if($r=$_data->row()){
			$_salestype=$r->salestype;
			$_user_id=$r->user_id;
			$_wilayah=$r->wilayah;
			$_lock_report=$r->lock_report;
		}
		return $_data;
	}
	function get_by_user_id($salesman){
		$this->db->where("user_id",$salesman);
		return $this->db->get($this->table_name);
	}
	function get_by_user_id_array($user_id){
		$qs=$this->get_by_user_id($user_id);
		$salesman=$user_id;
		$sql2=" and i.salesman='$user_id'";
		if($qs->num_rows()>1){
			$sql_in="";
			foreach($qs->result() as $qsr){
				$sql_in.="'$qsr->salesman',";
			}
			if($sql_in!=""){
				$sql_in=substr($sql_in,0,strlen($sql_in)-1);
			}
			if($sql_in!=""){
				$sql_in.=",'$salesman'";
			}
			$sql2=" and i.salesman in ($sql_in)";	
		} else {
			if($rs=$qs->row())$salesman=$rs->salesman;
			$sql2=" and i.salesman='$salesman'";							
		}

		return $sql2;
	}
	function save($data){
		$data['cid']=cid();
		if($data['cid']=='ALL')unset($data['cid']);
		$this->db->insert($this->table_name,$data);
		return $this->db->insert_id();
	}
	function update($id,$data){
		$data['cid']=cid();
		if($data['cid']=='ALL')unset($data['cid']);
		$this->db->where($this->primary_key,$id);
		$this->db->update($this->table_name,$data);
	}
	function delete($id){
		$this->db->where($this->primary_key,$id);
		$this->db->delete($this->table_name);
	}
	function select_list()
	{
        $query=$this->db->query("select salesman from salesman");
        $ret=array();$ret['']='- Select -';
        foreach ($query->result() as $row){$ret[$row->salesman]=$row->salesman;}		 
        return $ret;
	}	
	
    function lookup(){        
        $lookup = $this->list_of_values->render(array(
        	"dlgBindId"=>"salesman","modules"=>"salesman",
        	"dlgRetFunc"=>"			
				$('#salesman').val(row.salesman);
                $('#collector').val(row.collector);
        	",
        	"dlgCols"=>array(
                array("fieldname"=>"salesman","caption"=>"Salesman","width"=>"180px")
        	)
        ));
		return $lookup;
        
    }	


	
}
