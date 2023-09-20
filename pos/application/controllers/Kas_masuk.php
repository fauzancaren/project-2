<?php if(!defined('BASEPATH')) exit('No direct script access allowd');

class Kas_masuk extends CI_Controller {
    private $limit=10;
    private $table_name='kas_kasir';
    private $sql="";
    private $file_view='sales/kas_masuk';
    private $primary_key='no_bukti';
    private $controller='kas_masuk';
    private $error_message="";
    
	function __construct()
	{
		parent::__construct();        
        
		if(!$this->access->is_login())redirect(base_url());
 		$this->load->helper(array('url','form','mylib_helper','browse_select'));
        $this->load->library('sysvar');
		$this->load->library('template');
		$this->load->library('form_validation');
		$this->load->model('syslog_model');
        $this->load->library("list_of_values");      
		$this->load->model('kas_kasir_model');
		$this->sql="select no_bukti,jenis_trans,tanggal,
			jumlah, supervisor  from kas_kasir   where jumlah>=0";

	}
	function nomor_bukti($add=false)
	{
		$key="Kas Kasir Masuk Numbering";
		if($add){
		  	$this->sysvar->autonumber_inc($key);
		} else {			
			$no=$this->sysvar->autonumber($key,0,'!KKM~$00001');
			for($i=0;$i<100;$i++){			
				$no=$this->sysvar->autonumber($key,0,'!KKM~$00001');
				$rst=$this->kas_kasir_model->get_by_id($no)->row();
				if($rst){
				    //panggil nomor bukti / addnew langsung increase !
				  	$this->sysvar->autonumber_inc($key);
				} else {
					break;					
				}
			}
			return $no;
	   }
	}
	
	function set_defaults($record=NULL){
            $data=data_table($this->table_name,$record);
            $data['mode']='';
            $data['message']='';
			if($record==NULL){
				$data['tanggal']=date("Y-m-d H:i:s");
				$data['no_bukti']="AUTO";
				$data['kasir']=user_id();
				$data['jenis_trans']='Kas Awal Kasir';
			}
            return $data;
	}
	function index()
	{	
        $this->browse();
	}
	function get_posts(){
        $data=data_table_post($this->table_name);
        return $data;
	}
	function add()
	{
		 $data=$this->set_defaults();
		 $this->_set_rules();
		 if ($this->form_validation->run()=== TRUE){
			$data=$this->get_posts();
			$data['no_bukti']=$this->nomor_bukti();
			$id=$this->kas_kasir_model->save($data);
			$this->nomor_bukti(true);
	        $data['message']='update success';
	        $data['mode']='view';
			$this->syslog_model->add($id,"kas_kasir","add");
	        $this->browse();
		} else {
			$data['mode']='add';
            $this->template->display_form_input($this->file_view,$data,'');
		}
	}
	function update()
	{
		 $data=$this->set_defaults();
		 $this->_set_rules();
 		 $id=$this->input->post($this->primary_key);
		 if ($this->form_validation->run()=== TRUE){
			$data=$this->get_posts();                    
			unset($data['id']);
			$this->inventory_products_model->update($id,$data);
			$message='Update Success';
			$this->syslog_model->add($id,"retur_toko","edit");
			$this->browse();
		} else {
			$message='Error Update';
			$this->view($id,$message);		
		}		
	}
	
	function view($id,$message=null){
		//if(!allow_mod2('retur_toko_view'))return false;   
		$id=urldecode($id);
		 $data['no_bukti']=$id;
		 $model=$this->kas_kasir_model->get_by_id($id)->row();	
		 $data=$this->set_defaults($model);
		 $data['mode']='view';
    	 $this->template->display_form_input($this->file_view,$data);
	}
	 // validation rules
	function _set_rules(){	
		 $this->form_validation->set_rules($this->primary_key,'Nomor Bukti', 'required|trim');
	}
	
	 // date_validation callback
	function valid_date($str)
	{
	 if(!preg_match('/^[0-9]{4}-[0-9]{2}-[0-9]{2}$/',$str))
	 {
		 $this->form_validation->set_message('valid_date',
		 'date format is not valid. yyyy-mm-dd');
		 return false;
	 } else {
	 	return true;
	 }
	}
	function browse($offset=0,$limit=10,$order_column='shipment_id',$order_type='asc')
	{
        $data['caption']='DAFTAR KAS MASUK';
		$data['controller']=$this->controller;		
		$data['fields_caption']=array('Nomor Bukti','Jenis',
		'Tanggal','Jumlah','Supervisor');
		$data['fields']=array('no_bukti','jenis_trans','tanggal',
        'jumlah','supervisor');
					
		if(!$data=set_show_columns($data['controller'],$data)) return false;
			
		$data['field_key']='no_bukti';
		$this->load->library('search_criteria');
		
		$faa[]=criteria("Dari","sid_date_from","easyui-datetimebox");
		$faa[]=criteria("S/d","sid_date_to","easyui-datetimebox");
		$data['criteria']=$faa;
        $this->template->display_browse2($data);            
    }
    function browse_data($offset=0,$limit=10,$nama=''){
		$sql=$this->sql;
//    	$nama=$this->input->get('sid_supplier');
//		$no=$this->input->get('sid_nomor');
		$d1= date( 'Y-m-d H:i:s', strtotime($this->input->get('sid_date_from')));
		$d2= date( 'Y-m-d H:i:s', strtotime($this->input->get('sid_date_to')));
        $search="";
        $sql.=" and tanggal between '$d1' and '$d2'";
                
        if($this->input->get("page"))$offset=$this->input->get("page");
        if($this->input->get("rows"))$limit=$this->input->get("rows");
        if($offset>0)$offset--;
        $offset=$limit*$offset;
        $sql.=" limit $offset,$limit";
        echo datasource($sql);
    }
	function delete($id){
		$id=urldecode($id);
	 	$ok  = $this->kas_kasir_model->delete($id);
		$this->syslog_model->add($id,"kas_kasir","delete");
		if ($ok){
			echo json_encode(array('success'=>true));
		} else {
			echo json_encode(array('msg'=>'Some errors occured.'));
		}
	}
 
	function save() {
        $data=$this->input->post();
        $id=$data['no_bukti'];
        if($id=="AUTO"){
            $id=$this->nomor_bukti();
            $data['no_bukti']=$id;
            $this->nomor_bukti(true);
        }
		$mode="add";
		if(isset($data['mode'])){
			$mode=$data['mode'];unset($data['mode']);
		}
		if($mode=="view"){
			$ok=$this->kas_kasir_model->update($id,$data);		 
		} else {
			$ok=$this->kas_kasir_model->save($data);		 
		}
        $this->syslog_model->add($id,"kas_kasir","save");
        echo json_encode(array('success'=>true,'no_bukti'=>$id));
	} 
    function print_bukti($nomor){
		$nomor=urldecode($nomor);
        $data=$this->kas_kasir_model->get_by_id($nomor)->row();
		$data['content']=load_view('sales/rpt/print_kas_masuk',$data);
        $this->load->view('pdf_print',$data);                
        
    }      
}
