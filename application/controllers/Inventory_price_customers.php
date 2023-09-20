<?php if(!defined('BASEPATH')) exit('No direct script access allowd');

class Inventory_price_customers extends CI_Controller {
    private $limit=10;
    private $table_name='inventory_price_customers';
    private $sql="select  item_no,cust_type,sales_price,id
                from inventory_price_customers
                ";
    private $file_view='inventory/inventory_price_customers';
	function __construct()
	{
		parent::__construct();        
        
		if(!$this->access->is_login())redirect(base_url());
 		$this->load->helper(array('url','form','mylib_helper'));
		$this->load->library('template');
		$this->load->library('form_validation');
		$this->load->model('inventory_price_customers_model');
		$this->load->model('syslog_model');
	}
	function set_defaults($record=NULL){
		$data['mode']='';
		$data['message']='';
		if($record==NULL){
			$data['item_no']='';
			$data['cust_type']='';
			$data['sales_price']='';
            $data['id']='';
		} else {
			$data['item_no']=$record->item_no;
			$data['cust_type']=$record->cust_type;
			$data['sales_price']=$record->sales_price;
            $data['id']=$record->id;
		}
		return $data;
	}
	function index()
	{	
        $this->browse();
	}
	function get_posts(){
		$data['item_no']=$this->input->post('item_no');
		$data['sales_price']=$this->input->post('sales_price');
		$data['cust_type']=$this->input->post('cust_type');
		$data['id']=$this->input->post('id'); 		
		return $data;
	}
	function add()
	{
		 $data=$this->set_defaults();
		 $this->_set_rules();
		 if ($this->form_validation->run()=== TRUE){
			$data=$this->get_posts();
			$id=$this->inventory_price_customers_model->save($data);
	        $data['mode']='view';
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
 		 $id=$this->input->post('id');
		 if ($this->form_validation->run()=== TRUE){
			$data=$this->get_posts();                      
			$this->inventory_price_customers_model->update($id,$data);
	        $message='Update Success';
			$this->syslog_model->add($id,"inventory_price_customers","edit");
	        $this->browse();
		} else {
			$message='Error Update';
     		$this->view($id,$message);		
		}	  
	}
	function save_json($item_no){
		$data=$this->get_posts();
		$id='';
		if(isset($data['id'])){
			$id=$data['id'];
			unset($data['id']);
		}
		$success=false;
		$msg="Unable save record !";
		if($id==''){
			$data['item_no']=$item_no;
			$ok=$this->inventory_price_customers_model->save($data);
		} else {
			unset($data['item_no']);
			$ok=$this->inventory_price_customers_model->update($id,$data);
		}
		if($ok){
			$success=true;
			$msg="";
		}
		echo json_encode(array("success"=>$success,"msg"=>$msg));
	}
	
	function view($id,$message=null){
		$id=urldecode($id);
		 $data['id']=$id;
		 $model=$this->inventory_price_customers_model->get_by_id($id)->row();
		 $data=$this->set_defaults($model);
		 $data['mode']='view';
         $data['message']=$message;
         $this->template->display_form_input('inventory/inventory_price_customers',$data,'');
	}
	 // validation rules
	function _set_rules(){	
		 $this->form_validation->set_rules('item_no','Kode', 'required|trim');
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
	function browse($offset=0,$limit=10,$order_column='company',$order_type='asc')
	{
        $data['caption']='DAFTAR HARGA KELOMPOK PELANGGAN';
		$data['controller']='invenory_price_customers';		
		$data['fields_caption']=array('Kode Barang','Kelompok','Harga Jual','Id');
		$data['fields']=array('item_no','cust_type','sales_price','id');
					
		if(!$data=set_show_columns($data['controller'],$data)) return false;
			
		$data['field_key']='id';
		$this->load->library('search_criteria');
		
		$faa[]=criteria("Kode","sid_id");
		$data['criteria']=$faa;
        $this->template->display_browse2($data);            
    }
    function browse_data($offset=0,$limit=10,$nama=''){
		$sql=$this->sql." where 1=1";
		if($this->input->get('sid_id')!='')$sql.=" and id='".$this->input->get('sid_id')."'";
		if($this->input->get('item_no')!='')$sql.=" and item_no='".$this->input->get('item_no')."'";
        echo datasource($sql);		
    }
	function delete($id){
		$id=urldecode($id);
	 	$this->inventory_price_customers_model->delete($id);
		$this->syslog_model->add($id,"inventory_price_customers","delete");

	 	$this->browse();
	}
	function filter($item='',$cust_type=''){
		$item=urldecode($item);
		$sort = isset($_POST['sort']) ? strval($_POST['sort']) : 'cust_type';
		$sql="select cust_type,sales_price,id,item_no
		from inventory_price_customers  
		where item_no='".$item."' and cust_type like '%$cust_type%' 
		 order by $sort limit 1000 ";
		echo datasource($sql);
	}
}
