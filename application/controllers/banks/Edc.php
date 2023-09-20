<?php if(!defined('BASEPATH')) exit('No direct script access allowd');

class Edc extends CI_Controller {
    private $limit=10;
    private $table_name='credit_card_type';
    private $sql="select * from credit_card_type";
    private $file_view='bank/edc';
    private $primary_key='card_type';
    private $controller='banks/edc';
    
	function __construct()
	{
		parent::__construct();
        
//		if(!$this->access->is_login())redirect(base_url());
		
 		$this->load->helper(array('url','form','mylib_helper','browse_select_helper'));
		$this->load->library('template');
		$this->load->library('form_validation');
		$this->load->model('bank_accounts_model');
		$this->load->model('chart_of_accounts_model');
		$this->load->model('syslog_model');
        $this->load->model('credit_card_type_model');
	}
	function set_defaults($record=NULL){
            $data=data_table($this->table_name,$record);
            $data['mode']='';
            $data['message']='';
            $setcom['dlgBindId']="bank_accounts";
            $setcom['dlgRetFunc']="$('#bank_account').val(row.bank_account_number);";
            $setcom['dlgCols']=array( 
                        array("fieldname"=>"bank_account_number","caption"=>"Rekening#","width"=>"80px"),
                        array("fieldname"=>"bank_name","caption"=>"Nama Bank","width"=>"200px")
                    );          
            $data['lookup_bank']=$this->list_of_values->render($setcom);
                        
            return $data;
	}
	function index()
	{	
		if(!allow_mod2('_60010'))return false;   
        $this->browse();
	}
	function get_posts(){
            $data=  data_table_post($this->table_name);
            return $data;
	}
	function add()
	{
        $model=$this->credit_card_type_model->get_by_id("AUTO")->row();
        $data=$this->set_defaults($model);
        $data['mode']='add';
        $this->template->display_form_input($this->file_view,$data,'');
    }
	function acc_id($account){
		$account=urldecode($account);
		$data=explode(" - ", $account);
		$coa=$this->chart_of_accounts_model->get_by_id($data[0])->row();
		if($coa){
			return $coa->id;
		} else {
			return 0;
		}
	}
	function insert(){
        $data=$this->input->post();                      
        $id=$data[$this->primary_key];
        //unset($data[$this->primary_key]);
        unset($data['mode']);
        $this->credit_card_type_model->save($data);
    	$this->syslog_model->add($id,"edc","add");			
        $message="Success";
   		$this->view($id,$message);		
    }
	function update()
	{
        $data=$this->get_posts();                      
        $id=$data[$this->primary_key];
        unset($data[$this->primary_key]);
        $this->credit_card_type_model->update($id,$data);
    	$this->syslog_model->add($id,"edc","edit");			
        $message="Success";
        
   		$this->view($id,$message);		
	}
	function save(){
		$mode=$this->input->post("mode");
		if($mode=="add"){
			$this->insert();
		} else {
			$this->update();
		}
	}
	function save_json(){
		$data=$this->input->post();
		if($data['bank_account_number']!=""){
			$rek=$data['bank_account_number'];
			if($drow=$this->bank_accounts_model->get_by_id($rek)){
				$this->bank_accounts_model->update($rek,$data);
				$data['success']=true;
			} else {
				$this->bank_accounts_model->save($data);
				$data['success']=true;
			}			
		}
		echo json_encode($data);
	}
	function view($id,$message=null){
		if(!allow_mod2('_60010'))return false;   
		$id=urldecode($id);
		 $data['id']=$id;
		 $model=$this->credit_card_type_model->get_by_id($id)->row();
		 $data=$this->set_defaults($model);
		 $data['mode']='view';
         $data['message']=$message;

         $this->template->display_form_input($this->file_view,$data,'');
	}
	 // validation rules
	function _set_rules(){	
		 $this->form_validation->set_rules($this->primary_key,'Kode', 'required|trim');
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
    function browse($offset=0,$limit=50,$order_column='sales_order_number',$order_type='asc'){
		$data['controller']=$this->controller;
		$data['fields_caption']=array('Kode Edc','Nama EDC','Rek# Bank');
		$data['fields']=array( 'card_type','card_name','bank_account');
		$data['field_key']='card_type';
		$data['caption']='DAFTAR MASTER EDC';

		$this->load->library('search_criteria');
		
		$faa[]=criteria("Kode","sid_number");
		$faa[]=criteria("Nama","sid_nama");
		$data['criteria']=$faa;
        $this->template->display_browse2($data);            
    }
    function browse_data($offset=0,$limit=100,$nama=''){
    	$sql=$this->sql." where 1=1";
        
        $search="";
        if($this->input->get("tb_search")){
            $search=$this->input->get("tb_search");
        }
        
		if($this->input->get('sid_number')!='')$sql.=" and card_type='".$this->input->get('sid_number')."'";	
		if($this->input->get('sid_nama')!='')$sql.=" card_name like '".$this->input->get('sid_nama')."%'";
        
        if($search!='')$sql.=" and (card_name like '%$search%' or card_type like '%$search%')";
		if(multi_company_single_db()){
//			$sql.=" and cid='".cid()."'";
		}
        
        if($this->input->get("page"))$offset=$this->input->get("page");
        if($this->input->get("rows"))$limit=$this->input->get("rows");
        if($offset>0)$offset--;
        $offset=$limit*$offset;
        $sql.=" limit $offset,$limit";
        
        
        
        
        echo datasource($sql);
    }	 
	function delete($id){
		if(!allow_mod2('_60013'))return false;   
		$id=urldecode($id);
		$this->syslog_model->add($id,"banks","delete");
	 	$this->bank_accounts_model->delete($id);
	 	$this->browse();
	}
}
