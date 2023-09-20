<?php
class Rpt extends CI_Controller {
	private	$_rpt='koperasi/rpt/view/';
	function __construct()
	{
		parent::__construct();        
         
		if(!$this->access->is_login())redirect(base_url());
        $this->load->helper(array('url'));
        $this->load->library('sysvar');
        $this->load->library('javascript');
        $this->load->library('template');
		$this->load->library('form_validation');

	}
    function view($rptName){
        $this->_rpt.=$rptName;
		$data['date_from']=date('Y-m-d 00:00:00');
		$data['date_to']=date('Y-m-d 23:59:59');
		$data['select_date']=true;
		
	     /* $data['criteria1']=true;
	     $data['label1']='Customer';
	     $data['text1']='';
	     $data['output1']="text1";
	     $data['key1']="customer_number";
	     $data['fields1'][]=array("customer_number","100","Kode");
	     $data['fields1'][]=array("company","180","Nama");
	     $data['ctr1']='customer/select'; */

		
		$data['rpt_controller']=$this->_rpt;
        if($this->input->post('cmdPrint')){
            $this->_rpt=str_replace("/view","",$this->_rpt);
			$this->load->view($this->_rpt);		
        } else {
            $this->template->display_form_input('criteria',$data,'');	
        }	
    }
	function index(){

	}
}
?>
