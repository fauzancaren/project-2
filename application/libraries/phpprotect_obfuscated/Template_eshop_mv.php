<?php
class Template_eshop_mv {
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
	$this->bootstrap_only.=$this->_ci->jquery->script(base_url().'js/jquery/jquery-1.9.min.js',true);
    $this->bootstrap_only.=$this->_ci->jquery->script(base_url().'assets/bootstrap/js/bootstrap.js',true);
    $this->bootstrap_only.=$this->_ci->jquery->script(base_url().'js/lib.js',true);
    $this->flexslider=$this->_ci->jquery->script(base_url().'assets/flexslider/jquery.flexslider.js',true);
	$Veajwkc4tbdi=$this->_ci->sysvar->getvar('themes','standard');
	
	add_log_ip_address();
}

 function display($Vdngdu13visv,$Vlhi02kz1ecz=null){
  	$Vlhi02kz1ecz['library_src']=$this->bootstrap_only;
  	$Vlhi02kz1ecz['script_head']=$this->flexslider;
	$Vlhi02kz1ecz['file_content']=$Vdngdu13visv;
	$this->_ci->load->view("eshop/layout",$Vlhi02kz1ecz);		 
 }
 
}
