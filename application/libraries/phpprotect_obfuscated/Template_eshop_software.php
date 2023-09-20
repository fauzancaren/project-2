<?php
class Template_eshop_software {
 protected $Vzrhlaxya4x4;
 private $Vhcblz0nz0kc='';
 private $Vbq1k2teszcq='';
 private $Vhfcxvc0cwna='';
 private $Vhxb0w1px32u='';
 function __construct()
 {
    $this->_ci =&get_instance();
     
    
    $this->_ci->load->library(array('javascript','sysvar'));
	$Vvziqxj2voir=base_url();
	$this->bootstrap_only="<link rel='stylesheet' type='text/css' href='$Vvziqxj2voir//assets/bootstrap/css/bootstrap.css'>";
	$this->bootstrap_only.=$this->_ci->jquery->script(base_url().'assets/jquery/jquery-1.11.3.min.js',true);
    $this->bootstrap_only.=$this->_ci->jquery->script(base_url().'assets/bootstrap/js/bootstrap.js',true);
    $this->bootstrap_only.=$this->_ci->jquery->script(base_url().'js/lib.js',true);
    
	$Veajwkc4tbdi=$this->_ci->sysvar->getvar('themes','standard');	
	add_log_ip_address();
}

 function display($Vdngdu13visv,$Vlhi02kz1ecz){
  	$Vlhi02kz1ecz['library_src']=$this->bootstrap_only;
  	$Vlhi02kz1ecz['script_head']='';
	$Vlhi02kz1ecz['file_content']=$Vdngdu13visv;
	$Vlhi02kz1ecz['content']=true;
	$Vlhi02kz1ecz['footer']='eshop_software/footer';
	$this->_ci->load->view("eshop_software/layout",$Vlhi02kz1ecz);		 
 }
 function item($V5bljunjsc1b){
	 
 }
 function filter(){
	 
 }
 
 
 
}
