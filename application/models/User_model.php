<?php
class User_model extends CI_Model {

private $primary_key='user_id';
private $table_name='user';

function __construct(){
	parent::__construct();        
	$this->load->model('user_model');
	$this->load->model('modules_groups_model');
	$this->load->model('user_jobs_model');
	$this->load->model('payroll/employee_model');
    
}
function set_defaults($record=null){
	$data=data_table($this->table_name,$record);
	if(isset($data['log_status'])){
		if($data['log_status']=='' || $data['log_status']=='null' || $data['log_status']==null){
			$data['log_status']=0;
		}
	}
	$id=$data['user_id'];
	$data['mode']='';
	$data['message']='';
	$data['id']="";
	$data['joblist']=$this->modules_groups_model->get_all();
	$data['userjobs']=$this->user_jobs_model->list_jobs($id);
	$data['supervisor_list']=array_data_table('user','user_id','username');
	$data['branch_list']=array_data_table('branch','branch_code','branch_name');
	$data['nama_karyawan']=$this->employee_model->get_nama($data['nip']);

	$setting['dlgBindId']="divisions";
	$setting['dlgCols']=array( 
		array("fieldname"=>"div_code","caption"=>"Kode","width"=>"80px"),
		array("fieldname"=>"div_name","caption"=>"Nama Kelompok","width"=>"200px")
	);
	$setting['dlgRetFunc']="$('#divisions_search').val(row.div_code);";
	$data['lookup_division']=$this->list_of_values->render($setting);
		 
	$setting['dlgBindId']="warehouse";
	$setting['dlgCols']=array( 
		array("fieldname"=>"location_number","caption"=>"Gudang","width"=>"80px"),
		array("fieldname"=>"address_type","caption"=>"Jenis","width"=>"200px")
	);
	$setting['dlgRetFunc']="$('#warehouse_search').val(row.location_number);";
	$data['lookup_gudang']=$this->list_of_values->render($setting);
		
	$setting['dlgId']="suppliers";
	$setting['dlgBindId']="suppliers";
	$setting['dlgRetFunc']="$('#item_number').val(row.supplier_number);
		$('#description').val(row.supplier_name);";
	$setting['dlgCols']=array( 
				array("fieldname"=>"supplier_name","caption"=>"Nama","width"=>"280px"),
				array("fieldname"=>"supplier_number","caption"=>"Kode","width"=>"100px")
			);          
	$data['lookup_employee']=$this->list_of_values->render(array(
		"dlgId"=>"employee","dlgBindId"=>"nip",
		"dlgRetFunc"=>"$('#nip').val(row.nip);$('#nama_karyawan').val(row.nama);",
		"dlgCols"=>array(
				array("fieldname"=>"nama","caption"=>"Nama","width"=>"280px"),
				array("fieldname"=>"nip","caption"=>"NIP","width"=>"100px")
		)
	));
	return $data;
}
	function get_paged_list($limit=10,$offset=0,
	$order_column='',$order_type='asc')
	{
                $nama='';
                if(isset($_GET['nama'])){
                    $nama=$_GET['nama'];
                }
                if($nama!='')$this->db->where("username like '%$nama%'");

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
		return $this->db->get($this->table_name);
	}
	function info($id){
		$data=$this->get_by_id($id)->row();
		if(count($data)){    
			$ret='<br/><strong>'.$id.' - '.$data->username.'</strong><br/>'
					.$data->cid.'<br/>';
		} else $ret='';
		return $ret;
	}
	function save($data){
		//$data['cid']=cid();
		return $this->db->insert($this->table_name,$data);
	}
	function update($id,$data){
		//$data['cid']=cid();
		/*
		$jobs=$_POST['jobs'];
		unset($data['jobs']);
		if($jobs){
			$this->load->model('user_jobs_model');
			$data_jobs['jobs']=$jobs;
			$data_jobs['user_id']=$id;
			$this->user_jobs_model->update($id,$data_jobs);
		}
		*/
		$this->db->where($this->primary_key,$id);
		return $this->db->update($this->table_name,$data);
	}
	function delete($id){
		$this->db->where($this->primary_key,$id);
		$this->db->delete($this->table_name);
		$this->user_jobs_model->delete_by_user($id);
	}
	 function get_login_info($user_id)
	 {
		 $this->db->where('user_id', $user_id);
		 $this->db->limit(1);
		 $query = $this->db->get($this->table_name);
		 return ($query->num_rows() > 0) ? $query->row() : FALSE;
	 }
	 function list_user_by_group($group_id){
		$sql="select u.user_id,u.username,u.path_image from user u
			left join user_job uj on uj.user_id=u.user_id 
			where uj.group_id='".$group_id."'";
		return $this->db->query($sql);
	 }
	 
	function roles_list($user_id,$type) {
		$user_id=urldecode($user_id);
		$s="select roles_item,roles_value1,roles_value2,
			description,id 
			from user_roles
			where user_id='$user_id' and roles_type='$type'";
		echo datasource($s);
	}
	function roles_add($data){
		return $this->db->insert("user_roles",$data);
	}
	function roles_delete($id) {
		return $this->db->where("id",$id)->delete("user_roles");		
	}
	function roles_update($id,$data){
		return $this->db->where("id",$id)->update("user_roles",$data);
	}
	function roles_gudang($user_id=""){
		return $this->roles_type($user_id,"2");
	}	
	function roles_division($user_id=""){
		return $this->roles_type($user_id,"1");
	}	
	function roles_type($user_id="",$type='1'){
		$user_id=urldecode($user_id);
		if($user_id=="")$user_id=user_id();
		$s="select roles_item,roles_value1,roles_value2,
			description,id 
			from user_roles
			where user_id='$user_id' and roles_type='$type'";
		$rows=$this->db->query($s);
		$data=array();
		$type="";
		foreach($rows->result() as $row){
			$data[]=$row->roles_item;
		}
		if(count($data)>1) {
			return $data;
		} else {
			if(count($data)){
				return $data[0];
			} else {
				return "";
			}
		}
	}	

	function get_sales_by_spv($user_id){
		$s="select s.salesman  from user u left join salesman s on s.user_id=u.user_id 
			where u.supervisor='$user_id' and s.salesman<>''";
		$sql_in="";
		if($q=$this->db->query($s)){
			foreach($q->result() as $r){
				if($r->salesman!=''){
					$sql_in.="'$r->salesman',";

				}
			}
		}
		if($sql_in!=""){
			$sql_in=substr($sql_in,0,strlen($sql_in)-1);
		}
		if($sql_in!=""){
			$salesman=$user_id;
			if($q2=$this->db->query("select salesman from salesman where user_id='$user_id'")){
				if($r2=$q2->row()){
					$salesman=$r2->salesman;
				}
			}
			$sql_in.=",'$salesman'";
			
		}

		return $sql_in;
	}
}
