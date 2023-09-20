<?php
class Template_eshop {
 protected $Vzrhlaxya4x4;
 private $Vhcblz0nz0kc='';
 private $Vbq1k2teszcq='';
 private $Vhfcxvc0cwna='';
 private $Vhxb0w1px32u='';
 public $Vvzuezsvduja="eshop";		
  
 function __construct()
 {
    $this->_ci =&get_instance();
     
    $this->_ci->load->library(array('javascript','sysvar'));
	$Vvziqxj2voir=base_url();
	$this->bootstrap_only="<link rel='stylesheet' type='text/css' href='$Vvziqxj2voir/assets/bootstrap/css/bootstrap.css'>";
	$this->bootstrap_only.=$this->_ci->jquery->script(base_url().'assets/jquery/jquery-1.11.3.min.js',true);
    $this->bootstrap_only.=$this->_ci->jquery->script(base_url().'assets/bootstrap/js/bootstrap.js',true);
    $this->bootstrap_only.=$this->_ci->jquery->script(base_url().'js/lib.js',true);
    $this->flexslider=$this->_ci->jquery->script(base_url().'assets/flexslider/jquery.flexslider.js',true);
	$Veajwkc4tbdi=$this->_ci->sysvar->getvar('themes','standard');	
	add_log_ip_address();
}
 function display_main($Vdngdu13visv,$Vlhi02kz1ecz){
	$Vlhi02kz1ecz['folder_view']=$this->folder_view; 
  	$Vlhi02kz1ecz['library_src']=$this->bootstrap_only;
  	$Vlhi02kz1ecz['script_head']=$this->flexslider;
	$Vlhi02kz1ecz['footer']='footer';
	$Vlhi02kz1ecz['folder_view']=$this->folder_view;
	$Vlhi02kz1ecz['category_menus']='eshop/widget_category';
	$Vlhi02kz1ecz['widget_brand']='eshop/widget_brand';
	$Vlhi02kz1ecz['google_ads']='google_ads';
	$Vlhi02kz1ecz['widget_ym']='widget_ym';
    $Vlhi02kz1ecz['categories_menu']="eshop/category_list";
	$Vlhi02kz1ecz['widget_testimoni']='eshop/widget_testimoni';
    $Vlhi02kz1ecz['promo']="eshop/category";
	if($Vdngdu13visv=="home"){
		$Vlhi02kz1ecz['slider']='slider';
	}	
	$Vlhi02kz1ecz['menu']='widget_menu';
	
	$this->_ci->load->view("eshop/template/layout_home",$Vlhi02kz1ecz);		 
 }

 function display($Vdngdu13visv,$Vlhi02kz1ecz){
	$Vlhi02kz1ecz['folder_view']=$this->folder_view; 
  	$Vlhi02kz1ecz['library_src']=$this->bootstrap_only;
  	$Vlhi02kz1ecz['script_head']=$this->flexslider;
	$Vlhi02kz1ecz['file_content']=$this->folder_view.'/'.$Vdngdu13visv;
	$Vlhi02kz1ecz['content']=true;
	$Vlhi02kz1ecz['footer']='footer';
	$Vlhi02kz1ecz['folder_view']=$this->folder_view;
	$Vlhi02kz1ecz['menu']='widget_menu';
	$this->_ci->load->view("eshop/template/layout",$Vlhi02kz1ecz);		 
 }
 function item($V5bljunjsc1b){
	 
 }
 function filter(){
	 
 }
 
 
 
}
