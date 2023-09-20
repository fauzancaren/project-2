<?php if(!defined('BASEPATH')) exit('No direct script access allowd');

class Customer_shipto extends CI_Controller {
    private $limit=10;
    private $table_name='customer_shipto';
    private $sql="select * from customer_shipto where 1=1 ";

	function __construct()
	{
		parent::__construct();        
		if(!$this->access->is_login())redirect(base_url());
 		$this->load->helper(array('url','form','browse_select','mylib_helper'));
		$this->load->library('template');
		$this->load->library('form_validation');
		$this->load->model('syslog_model');
        $this->load->model('customer_shipto_model');
	}
	function set_defaults($record=NULL){
		$data['mode']='';
		$data['message']='';
		$data=data_table($this->table_name,$record);		
		return $data;
	}
	function index()
	{	
        $this->browse();
	}
	function get_posts(){
		$data=$this->input->post();
		return $data;
	}
	function add()
	{
		$data=$this->set_defaults();
		 		
	    $this->_set_rules();
		if ($this->form_validation->run()=== TRUE){
			$data=$this->get_posts();
			unset($data['mode']);
			$id=$this->customer_shipto_model->save($data);
			$message='update success';
			$this->syslog_model->add($id,"customer_shipto","add");
			msgbox("Data sudah disimpan.","Customer Shipto",true);
		} else {
			$data['mode']='add';
			$this->template->display_form_input('sales/customer_shipto',$data,'');
		}
	}
	function update()
	{	 
		 $data=$this->set_defaults(); 
		 $this->_set_rules();
 		 $id=$this->input->post('id');
		 if ($this->form_validation->run()=== TRUE){
			$data=$this->get_posts();                      
			unset($data['mode']);
			$this->customer_shipto_model->update($id,$data);
			$message='Update Success';
			$this->syslog_model->add($id,"customer_shipto","edit");
			msgbox("Data sudah disimpan.","Customer Shipto",true);
		} else {
			$message='Error Update';
			msgbox($message,"Customer Shipto",true);
		}	  
	}
	function save(){
		$mode=$this->input->post('mode');
		if($mode=="add"){
			$this->add();
		} else {
			$this->update();
		}
	}
	function view($id,$message=null){
		$id=urldecode($id);
		 $data['id']=$id;
		 $model=$this->customer_shipto_model->get_by_id($id)->row();
		 $data=$this->set_defaults($model);
		 $data['mode']='view';
		 $data['message']=$message;
		 $this->template->display_form_input('sales/customer_shipto',$data,'');
	}
	 // validation rules
	function _set_rules(){	
		 $this->form_validation->set_rules('location_code','Location Code', 'required|trim');
	}
	
	function search(){
        $this->browse();
    }
	
	function browse($offset=0,$limit=10,$order_column='location_code',$order_type='asc')
	{
        $data['caption']="DAFTAR SHIPTO CUSTOMER";
		$data['controller']='customer_shipto';
		$data['fields_caption']=array('Location Code','Nama','Telp','Kota','Alamat');
		$data['fields']=array('location_code','contact','telp','kota','alamat');
					
		if(!$data=set_show_columns($data['controller'],$data)) return false;
			
		$data['field_key']='id';
		
		$this->load->library('search_criteria');
		$faa[]=criteria("Nama","sid_contact");
		$data['criteria']=$faa;
        $this->template->display_browse2($data);
    }
    function browse_data($offset=0,$limit=10,$nama=''){
        $search=$this->input->get('sid_contact');
        if($search=="")$search=$this->input->get("tb_search");
        if($search!=""){
			$this->sql=$this->sql." and (contact like '%$search%' 
				or alamat like '%$search%')";
		}
		if($this->input->get("page"))$offset=$this->input->get("page");
        if($this->input->get("rows"))$limit=$this->input->get("rows");
        if($offset>0)$offset--;
        $offset=$limit*$offset;
        $this->sql.=" limit $offset,$limit";
		
        echo datasource($this->sql);       
    }        
	function delete($id){
		$id=urldecode($id);
	 	$this->salesman_model->delete($id);
		$this->syslog_model->add($id,"customer_shipto","delete");
	 	$this->browse();
	}
}
