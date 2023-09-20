<?php
class Template_frontend {
 protected $Vzrhlaxya4x4;
 private $Vce1qjrzu2ox='';
 private $Vwa4wa0ldkyd='';
 function __construct()
 {
    $this->_ci =&get_instance();
     
    $this->_ci->load->library(array('sysvar'));
	$this->css="<link rel='stylesheet' type='text/css' href='".base_url()."assets/bootstrap/css/bootstrap.css'>";
	$this->js="<script src='".base_url()."assets/jquery/jquery-1.11.3.min.js'></script>";
    $this->js.="<script src='".base_url()."assets/bootstrap/js/bootstrap.js'></script>";
    $this->js.="<script src='".base_url()."js/lib.js'></script>";
	$Veajwkc4tbdi=$this->_ci->sysvar->getvar('themes','standard');
	
	add_log_ip_address();
}

 function display($Vdngdu13visv,$Vlhi02kz1ecz=null){
  	$Vlhi02kz1ecz['library_src']=$this->js;
  	$Vlhi02kz1ecz['script_head']=$this->css;
	$Vlhi02kz1ecz['file_content']=$Vdngdu13visv;
	$this->_ci->load->view("template/frontend/layout",$Vlhi02kz1ecz);		 
 }
 
}
