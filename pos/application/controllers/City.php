<?php
if(!defined('BASEPATH')) exit('No direct script access allowd');

class City extends CI_Controller {
    private $limit=100;
    private $table_name='city';
    private $file_view='city';
    private $controller='city';
    private $primary_key='city_id';
    private $sql="";

    function __construct()    {
		parent::__construct();        
        
		if(!$this->access->is_login())redirect(base_url());
		$this->load->helper(array('url','form','mylib_helper'));
		$this->load->library(array('sysvar','template','form_validation'));
		if($this->controller=="")$this->controller=$this->file_view;
		if($this->sql=="")$this->sql="select * from ".$this->table_name;
		$this->load->model('city_model');
		$this->fields=$this->city_model->fields;
		$this->load->model('syslog_model');

    }
    function set_defaults($record=NULL){
		$data['mode']='';
		$data['message']='';
		$data=data_table($this->table_name,$record);
		return $data;
    }
    function index()    {	
		$this->browse();
    }
    function get_posts(){
		$data=data_table_post($this->table_name);
		return $data;
    }
    function add()   {
		$data=$this->set_defaults();
		$this->_set_rules();
		 if ($this->form_validation->run()=== TRUE){
			$data=$this->get_posts();
			$this->city_model->save($data);
			$data['message']='update success';
			$data['mode']='view';
			$this->browse();
		} else {
			$data['mode']='add';
			$data['message']='';
			$data['fields']=$this->fields;
			$data['data']=$data;
			$this->template->display_form_input($this->file_view,$data);			
		}
    }
	function save(){
		$data=$this->input->post();
		$id=$this->input->post("city_id");
		$mode=$data["mode"];	unset($data['mode']);
		if($mode=="add"){ 
			$ok=$this->city_model->save($data);
			$this->syslog_model->add($id,"city","add");

		} else {
			$ok=$this->city_model->update($id,$data);				
			$this->syslog_model->add($id,"city","edit");

		}
		if($ok){
			echo json_encode(array("success"=>true));
		} else {
			echo json_encode(array("msg"=>"Error ".show_error("city.save")));
		}
	}	
    function view($id,$message=null)	{
		$id=urldecode($id);
		$message=urldecode($message);
		$data[$this->primary_key]=$id;
		$model=$this->city_model->get_by_id($id)->row();
		$data=$this->set_defaults($model);
		$data['data']=$data;
		
		$data['mode']='view';
		$data['message']=$message;
		$data['fields']=$this->fields;
		$this->template->display_form_input($this->file_view,$data);
    }
     // validation rules
    function _set_rules(){}
    function valid_date($str){
     if(!preg_match('/^[0-9]{4}-[0-9]{2}-[0-9]{2}$/',$str)){
             $this->form_validation->set_message('valid_date',
             'date format is not valid. yyyy-mm-dd');
             return false;
     } else {
            return true;
     }
    }
   function browse($offset=0,$limit=50,$order_column="",$order_type='asc'){
		if($order_column=="")$order_column=$this->primary_key;
		$data['controller']=$this->controller;
		$oFlds=$this->city_model->fields;
		$fields=null;
		$fields_caption=null;
		if(is_array($oFlds)){
			for($i=0;$i<count($oFlds);$i++){
				$oFld=$oFlds[$i];
				if(is_object($oFld)){
					$fields[]=$oFld->name;
				} else {
					$fields[]=$oFld['name'];
				}
				
			}
		}
		
		$data['fields']=$fields;
				
		if(!$data=set_show_columns($data['controller'],$data)) return false;
			
		$data['field_key']=$this->primary_key;
		$data['caption']='DAFTAR KOTA';

		$this->load->library('search_criteria');
		$faa[]=criteria("Nama Kota","sid_nama");
		$data['criteria']=$faa;
        $this->template->display_browse2($data);            
    }
    function browse_data($offset=0,$limit=100,$nama=''){
        $sql=$this->sql.' where 1=1';
        echo datasource($sql);
    }	   
	function delete($id){
		$id=urldecode($id);
	 	$this->city_model->delete($id);
		$this->syslog_model->add($id,"city","delete");

		$this->browse();
	}
	function find($nomor){
		$nomor=urldecode($nomor);
		$query=$this->db->query("select * from $this->table_name where city_id='$nomor'");
		echo json_encode($query->row_array());
 	}	

    function select($search=""){
        
        $search=urldecode($search);
        $sql=$this->sql;

        if($search!=""){
            $sql.=" where (city_id like '$search%' 
                or city_name like '$search%')";
        }
        $sql.=" order by city_id";

        $offset=0; $limit=10;
        if($this->input->post("page"))$offset=$this->input->post("page");
        if($this->input->post("rows"))$limit=$this->input->post("rows");
        if($offset>0)$offset--;
        $offset=$limit*$offset;
        $sql.=" limit $offset,$limit";        
        
        echo datasource($sql);
    }    
    
    
}
?>
