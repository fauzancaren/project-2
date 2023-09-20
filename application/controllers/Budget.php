<?php if(!defined('BASEPATH')) exit('No direct script access allowd');

class Budget extends CI_Controller {
    private $sql="select * from budget ";
    private $file_view='gl/budget';
	function __construct()
	{
		parent::__construct();        
       
		if(!$this->access->is_login())redirect(base_url());
 		$this->load->helper(array('url','form','mylib_helper'));
		$this->load->library('template');
		$this->load->library('form_validation');
        $this->load->model('budget_model');
		$this->load->model('syslog_model');

	} 
	function index()
	{	
		$data['fiscal_year']=date("Y");
		$this->template->display("gl/budget",$data);
		
	}
	function load($coa_type){
		$data['fiscal_year']=date("Y");
		$data['coa_type']=$coa_type;
		if($coa_type==4){
			$data['jenis_akun']="PENDAPATAN";
		} else if ($coa_type==5){
				$data['jenis_akun']="HARGA POKOK PENJUALAN";
		} else if ($coa_type==6){
			$data['jenis_akun']="BIAYA OPERASIONAL";
		} else if ($coa_type==8) {
			$data['jenis_akun']="PENDAPATAN/BEBAN LAINNYA";
		} else if ($coa_type==9) {
			$data['jenis_akun']="EBITDA";
		} else if ($coa_type==10) {
			$data['jenis_akun']="PRODUKSI";
		}
		$this->template->display("gl/budget_month",$data);			
	}
	function load_data($coa_type){
		$sql="select * from budget where coa_type='$coa_type' order by no_urut";
        echo datasource($sql);
	}
	function load_data_1($coa_type,$fiscal_year,$parent_id){
		$ket=$this->budget_model->get_by_id($parent_id)->row()->keterangan;
		$data['fiscal_year']=date("Y");
		$data['coa_type']=$coa_type;
		$data['coa_group']=$parent_id;
		$data['jenis_akun']=$ket;
		if($ket=="NA MNK") {
			$this->template->display("gl/budget_na",$data);					
		} else {
			$this->template->display("gl/budget_month_1",$data);		
		}		
	}
	function load_data_1ex($parent_id){
		$sql="select * from budget where coa_group='$parent_id'
			order by no_urut";
        echo datasource($sql);				
	}
	function load_data_an($parent_id){
		$sql="select * from mnk_an where parent_id='$parent_id'
			order by no_urut";
        echo datasource($sql);				
	}
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
	function set_defaults($record=NULL){
            
		$data=data_table($this->table_name,$record);
		$data['mode']='';
		$data['message']='';
		$data['account_number_list']=$this->bank_accounts_model->account_number_list();
		return $data;
	}
	
	function browse($offset=0,$limit=50,$order_column='purchase_order_number',$order_type='asc'){
		//var_dump($_GET);
		$header=array('Nomor','Tanggal','Jumlah','Supplier','Supplier Name','Kota','Toko');
		$caption="DAFTAR FAKTUR PEMBELIAN";
		$data['_content']=browse("select purchase_order_number, 
			po_date, amount, 
			i.supplier_number,c.supplier_name,c.city,i.warehouse_code
			from purchase_order i
			left join suppliers c on c.supplier_number=i.supplier_number
			where potype='i' and warehouse_code='".$this->access->cid."'
			",$caption,'beli'
			,$offset,$limit,$order_column,$order_type,$header
				
			);
		$this->template->display_browse('template_browse',$data);
	}
	function get_posts(){
		$data[$this->primary_key]=$this->input->post($this->primary_key);
		return $data;
	}

	function add()
	{
		if(!allow_mod2('_10011'))return false;   
		 $data=$this->set_defaults();
		 $this->_set_rules();
		 if ($this->form_validation->run()=== TRUE){
			$data=$this->get_posts();
			$id=$this->chart_of_accounts_model->save($data);
            $data['message']='update success';
            $data['mode']='view';
			$this->syslog_model->add($id,"coa","add");

            $this->browse();
		} else {
			$data['mode']='add';
	        $this->template->display_form_input($this->file_view,$data,'');
		}
	}
    function save(){
		$data=$this->input->post();
		$id=$this->budget_model->save($data);
		if ($id){
			echo json_encode(array('success'=>true,'id'=>$id));
		} else {
			echo json_encode(array('success'=>false,'msg'=>'Some errors occured.'));
		}
    }    
    function delete($id){
		$id=urldecode($id);
	 	if($this->budget_model->delete($id)){
			echo json_encode(array('success'=>true,'id'=>$id));
		} else {
			echo json_encode(array('success'=>false,'msg'=>'Some errors occured.'));
		}
	}
    function save_an(){
		$data=$this->input->post();
		$id=$this->budget_model->save_an($data);
		if ($id){
			echo json_encode(array('success'=>true,'id'=>$id));
		} else {
			echo json_encode(array('success'=>false,'msg'=>'Some errors occured.'));
		}
    }    
    function delete_an($id){
		$id=urldecode($id);
	 	if($this->budget_model->delete_an($id)){
			echo json_encode(array('success'=>true,'id'=>$id));
		} else {
			echo json_encode(array('success'=>false,'msg'=>'Some errors occured.'));
		}
	}
	function view($id,$message=null){
		if(!allow_mod2('_10010'))return false;   
		$id=urldecode($id);
		$message=urldecode($message);
		 $data['id']=$id;
		 $rst=$this->chart_of_accounts_model->get_by_id($id)->row();
		 if(count($rst)){
            $data=$this->set_defaults($rst);
            $data['db_or_cr']=$rst->db_or_cr;
            $data['h_or_d']='1';
         }
		 $data['mode']='view';
         $data['message']=$message;
         $data['account_type_list']=$this->chart_of_accounts_model->account_type_list();
		 $data['group_type_list']=$this->chart_of_accounts_model->group_type_list();
         $this->template->display_form_input($this->file_view,$data,'');
	}        
	function update()
	{
		 $data=$this->set_defaults();
		 $this->_set_rules();
 		 $id=$this->input->post('account');
		 if ($this->form_validation->run()=== TRUE){
			$data=$this->get_posts(); 
			unset($data['h_or_d']);                     
			$this->chart_of_accounts_model->update($id,$data);
            $message='Update Success';
			$this->syslog_model->add($id,"coa","edit");

            $this->browse();
		} else {
			$message='Error Update';
     		$this->view($id,$message);		
		}	  	
	      
	}
}
