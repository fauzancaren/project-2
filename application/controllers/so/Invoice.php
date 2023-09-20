<?php if(!defined('BASEPATH')) exit('No direct script access allowd');

class Invoice extends CI_Controller {
    private $limit=10;	
	function __construct()
	{
		parent::__construct();        
        
		if(!$this->access->is_login())redirect(base_url());
 		$this->load->helper(array('url','form','browse_select','mylib_helper'));
        $this->load->library(array('sysvar','javascript','template','list_of_values'));
		$this->load->library('form_validation');
		$this->load->model(array('sysvar_model','sales/service_order_model',
			'customer_model','syslog_model','inventory_model',));
		 
	}
	function from_so(){
		if($data=$this->input->post()){
			for($i=0;$i<count($data);$i++){
				$nomor_so=$data[$i]['sales_order_number'];
				if($nomor_so!=""){
					$this->from_so_save($nomor_so);
				}
			}
		}
		else {
			echo $this->template->display("sales/from_so");			
		}
	}
	function from_so_save($sales_order_number){
		
	}
	function load_so(){
		$d1=$this->input->get("d1");
		$d2=$this->input->get("d2");
		if($d1!="" && $d2!=""){
			$s="select sales_order_number,sales_date,sold_to_customer,amount,
			payment_terms 
						
			from sales_order 
			where sales_date between '$d1' and '$d2'
			order by sales_date";
			echo datasource($s);
		}
	}
	function create_invoice_from_so($sales_order_number=""){
		if($sales_order_number==""){
			$data=$this->input->post("row");
			$sales_order_number=$data['sales_order_number'];
		}
		$this->load->model("sales_order_model");
		$ok=$this->sales_order_model->create_invoice_from_so($sales_order_number);
		if($ok){
			$message="$sales_order_number... Success</br>";
			$success=true;
		} else {
			$message="Error</br>";
			$success=false;
		}
		
		$data['message']=$message;
		$data['success']=$success;
		echo json_encode($data);
	}
}

?>
