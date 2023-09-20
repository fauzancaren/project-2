<?php
class Template_install {
	protected $Vzrhlaxya4x4;
	private $Vinmiu2bsvoi='';
	private $Vcl3pdjxtwek='';
	private $Vgzstlljiooe='';
	private $Ve1ahtrdwymv='';
 
	 function __construct()
	 {
		$this->_ci =&get_instance();
 
		$this->_ci->load->library(array('javascript'));
		
		$Vvziqxj2voir=base_url();
		$this->bootstrap='';
		$this->bootstrap.="<link rel='stylesheet' type='text/css' href='$Vvziqxj2voir/assets/bootstrap-3.3.5/css/bootstrap.css'>";
		$this->bootstrap.=$this->_ci->jquery->script($Vvziqxj2voir.'assets/bootstrap-3.3.5/js/bootstrap.min.js',true);

		$this->jquery="";
		$this->jquery.=$this->_ci->jquery->script($Vvziqxj2voir.'assets/jquery/jquery-1.11.3.min.js',true);
		$this->jquery.=$this->_ci->jquery->script($Vvziqxj2voir.'assets/bootstrap-3.3.5/js/bootstrap.min.js',true);

		$this->mylib=$this->_ci->jquery->script($Vvziqxj2voir.'js/lib.js',true);
	  }

	 function display($Vmwrugtvcipm,$Vlhi02kz1ecz=null)
	 {
		$Vlhi02kz1ecz['jquery']=$this->jquery;
		$Vlhi02kz1ecz['bootstrap']=$this->bootstrap;
		$Vlhi02kz1ecz['mylib']=$this->mylib;
		$Vmwrugtvcipm="install/$Vmwrugtvcipm";
		$Vlhi02kz1ecz['header']=$this->_ci->load->view('install/header',$Vlhi02kz1ecz, true);
		$Vlhi02kz1ecz['footer']=$this->_ci->load->view('install/footer',$Vlhi02kz1ecz, true);
		$Vlhi02kz1ecz['page']=$this->_ci->load->view($Vmwrugtvcipm,$Vlhi02kz1ecz, true);
		$this->_ci->load->view('install/template',$Vlhi02kz1ecz);              
	 }
	 function display_internal($Vmwrugtvcipm,$Vlhi02kz1ecz=null)
	 {
		$this->_ci->load->helper("mylib_helper");
		$Vlhi02kz1ecz['jquery']=$this->jquery;
		$Vlhi02kz1ecz['bootstrap']=$this->bootstrap;
		$Vlhi02kz1ecz['mylib']=$this->mylib;
		$Vlhi02kz1ecz['cid']=cid();
		$Vlhi02kz1ecz['user_id']=user_id();
		$Vlhi02kz1ecz['user_pass']=user_pass();
		$Vmwrugtvcipm="install_in/$Vmwrugtvcipm";
		$Vlhi02kz1ecz['header']=$this->_ci->load->view('install_in/header',$Vlhi02kz1ecz, true);
		$Vlhi02kz1ecz['footer']=$this->_ci->load->view('install_in/footer',$Vlhi02kz1ecz, true);
		$Vlhi02kz1ecz['page']=$this->_ci->load->view($Vmwrugtvcipm,$Vlhi02kz1ecz, true);
		$this->_ci->load->view('install_in/template',$Vlhi02kz1ecz);              
	 }
}
