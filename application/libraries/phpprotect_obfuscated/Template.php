<?php
class Template {
 protected $Vzrhlaxya4x4;
 private $Vhcblz0nz0kc='';
 private $Vbq1k2teszcq='';
 private $Vhfcxvc0cwna='';
 private $V510z13uoedj='';
 private $Vcl3pdjxtwek='';
 private $Vhxb0w1px32u='';
 public $Vspz41cuxe4d=false;
 private $Veajwkc4tbdi="standard";
 
 function _cjs($V0urgekm0f1f,$Vjjs4zj3lcnf=true){
	 return $this->_ci->jquery->script(base_url().$V0urgekm0f1f,$Vjjs4zj3lcnf);
 }
 function __construct()
 {
    $this->_ci =&get_instance();
    $this->_ci->load->library(array('javascript',"sysvar","upgrade"));
	
	$Veajwkc4tbdi=$this->_ci->sysvar->getvar('themes','standard');
	if($Veajwkc4tbdi==""){
		$Veajwkc4tbdi="standard";
	}
	$this->themes=$Veajwkc4tbdi;
	
	$Vux0gi01vnny="8";	
	
	$Vvziqxj2voir=base_url();
	$this->bootstrap='
	<link rel="stylesheet" type="text/css" href=".base_url()."assets/bootstrap-3.3.5/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="'.base_url().'themes/'.$Veajwkc4tbdi.'/style.css">
		';
	$this->bootstrap_only ="<link rel='stylesheet' type='text/css' href='".base_url()."assets/bootstrap-3.3.5/css/bootstrap.css'>";
	$this->bootstrap_only.=$this->_cjs('assets/jquery/jquery-1.11.3.min.js',true);
    $this->bootstrap_only.=$this->_cjs('assets/bootstrap-3.3.5/js/bootstrap.min.js',true);
    $this->bootstrap_only.=$this->_cjs('js/lib.js?v=11',true);
	
	$this->library_src =$this->_cjs('assets/jquery/jquery-1.11.3.min.js',true);
    $this->library_src.=$this->_cjs('assets/bootstrap-3.3.5/js/bootstrap.min.js',true);
    $this->library_src.=$this->_cjs('assets/datepicker/bootstrap-datepicker.js',true);
	if($this->themes!="admin"){
		$this->library_src.=$this->_cjs('assets/jquery-easyui-1.4.3/jquery.easyui.min.js',true);
		$this->library_src.=$this->_cjs('assets/jquery-easyui-1.4.3/plugins/jquery.edatagrid.js',true);
	}


	$this->library_src.=$this->_cjs('js/autocomplete/jquery.autocomplete.min.js',true);
    $this->library_src.=$this->_cjs('js/jquery.formatNumber.js',true);
    $this->library_src.=$this->_cjs('assets/maphilight-master/jquery.maphilight.min.js',true);
    $this->library_src.=$this->_cjs('js/lib_error.js',true);
    $this->library_src.=$this->_cjs('js/lib.js?v=12',true);
    $this->library_src.=$this->_cjs('js/lib_input.js?v=11',true);

    $this->flexslider=$this->_cjs('assets/flexslider/jquery.flexslider.js',true);
	
  
	$this->script_head='
	<link rel="stylesheet" type="text/css" href="'.base_url().'assets/fontawesome/css/font-awesome.min.css">	
	<link rel="stylesheet" type="text/css" href="'.base_url().'assets/bootstrap-3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="'.base_url().'js/autocomplete/jquery.autocomplete.css">
	';
	if($this->themes!="admin"){
		$this->script_head.='<link rel="stylesheet" type="text/css" href="'.base_url().'assets/jquery-easyui-1.4.3/themes/'.$Veajwkc4tbdi.'/easyui.css">';
		$this->script_head.='<link rel="stylesheet" type="text/css" href="'.base_url().'assets/jquery-easyui-1.4.3/themes/icon.css">';
		$this->script_head.='<link rel="stylesheet" type="text/css" href="'.base_url().'themes/'.$Veajwkc4tbdi.'/style.css">';		
	}
	$this->script_head.='<link rel="stylesheet" type="text/css" href="'.base_url().'assets/datepicker/datepicker.css">';
	



	if($this->themes!="admin"){
		$this->script_head.='<link rel="stylesheet" type="text/css" href="'.base_url().'assets/jquery-easyui-1.4.3/themes/'.$Veajwkc4tbdi.'/easyui.css">';
		$this->jquery_easyui.='<link rel="stylesheet" type="text/css" href="'.base_url().'assets/jquery-easyui-1.4.3/themes/icon.css">';
		$this->jquery_easyui.='<script type="text/javascript" charset="utf-8" src="'.base_url().'asset/jquery/jquery-1.11.3.min.js"></script>';
		$this->jquery_easyui.='<script type="text/javascript" charset="utf-8" src="'.base_url().'assets/jquery-easyui-1.4.3/jquery.easyui.min.js"></script>';
	}
	
    
    
    
    $this->dont_load_js=false;
	
}
function display_main_config(){
    $Vipcpduya3mo=$this->config->item("default_home");
    if($Vipcpduya3mo)$Vdngdu13visv=$Vipcpduya3mo;
    $Vlhi02kz1ecz["sidebar_show"]=false;
    $Vlhi02kz1ecz['hide_menu_header']=true;
    $Vlhi02kz1ecz['_content']=$this->_ci->load->view($Vdngdu13visv,$Vlhi02kz1ecz, true);
    $this->_ci->load->view('template/standard/template',$Vlhi02kz1ecz);                         
}
function display_main($Vdngdu13visv="",$Vlhi02kz1ecz=null){
	
	if($Vdngdu13visv=="")$Vdngdu13visv='blank';
	
	$Vlhi02kz1ecz['title']="MaxOn ERP Online";
	$Vlhi02kz1ecz['library_src']=$this->library_src;
	$Vlhi02kz1ecz['script_head']=$this->script_head;
	$Vlhi02kz1ecz['body_class']='bg1';
	$Vlhi02kz1ecz['user_id']=$this->_ci->access->user_id();
    
    $Vlhi02kz1ecz['company_code']=$this->_ci->session->userdata('session_company_code','');
    if($Vlhi02kz1ecz['company_code']=="")$this->_ci->session->userdata('company_code','');
    if($Vlhi02kz1ecz['company_code']=="")$Vlhi02kz1ecz['company_code']=$this->_ci->access->cid();
    if($Vlhi02kz1ecz['company_code']=="ALL")$this->_ci->session->userdata('company_code','');
    
    
    $this->_ci->load->model("company_model");
    $Vlhi02kz1ecz['company_list']=$this->_ci->company_model->datalist();
    $this->_ci->load->model("shipping_locations_model");
    $Vlhi02kz1ecz['shipping_location']=$this->_ci->session->userdata('session_outlet','');
    if($Vlhi02kz1ecz['shipping_location']=="")$Vlhi02kz1ecz['shipping_location']=$this->_ci->session->userdata('default_warehouse','');
    $Vlhi02kz1ecz['shipping_location_list']=$this->_ci->shipping_locations_model->select_list();
    
    $Viyda1dwxc0c=$this->_ci->session->userdata('header_visible');
    if($Viyda1dwxc0c){
        $Vlhi02kz1ecz['_header']='';
    } else {
        $Vlhi02kz1ecz['_header']=$this->_ci->load->view('template/standard/header',$Vlhi02kz1ecz, true);
    }
    if($Vzahhljalzd1=$this->_ci->session->userdata("hide_menu_header")){
        $Vlhi02kz1ecz["hide_menu_header"]=$Vzahhljalzd1;
    }
    if($V0urgekm0f1ftop_background_process=$this->_ci->session->userdata("stop_background_process")){
        $Vlhi02kz1ecz["stop_background_process"]=$V0urgekm0f1ftop_background_process;        
    } else {
        $Vlhi02kz1ecz["stop_background_process"]="false";
    }

	
	$Vlhi02kz1ecz['_footer']=$this->_ci->load->view('template/standard/footer',$Vlhi02kz1ecz, true);
	$Vlhi02kz1ecz['google_ads_visible']=$this->_ci->sysvar->getvar('google_ads_visible','true');
	if(isset($Vlhi02kz1ecz['_right_menu'])){
		$Vmzcqv41deu4=$Vlhi02kz1ecz['_right_menu'];
		$Vlhi02kz1ecz['_right_menu']=$this->_ci->load->view($Vmzcqv41deu4,$Vlhi02kz1ecz, true);
	} else {
		$Vlhi02kz1ecz['_right_menu']='';
	}				
	$Vmzcqv41deu4=$this->_ci->session->userdata('_right_menu');
	if($Vmzcqv41deu4 != ''){	
		$Vlhi02kz1ecz['_right_menu']=$this->_ci->load->view($Vmzcqv41deu4,$Vlhi02kz1ecz, true);
	}
	$Vmzcqv41deu4=$this->_ci->session->userdata('_left_menu');
	if($Vmzcqv41deu4!='') {
		$Vskzyhvuqp4p=APPPATH."/view/$Vmzcqv41deu4.php";
		
			$Vlhi02kz1ecz['_left_menu']=$this->_ci->load->view($Vmzcqv41deu4,$Vlhi02kz1ecz, true);
		
	}
	$Vlhi02kz1ecz['_left_menu_caption']=$this->_ci->session->userdata('_left_menu_caption');
    
    
    
    
	if($Vdngdu13visv==$Vmzcqv41deu4){
		    
		$Vzqkvxpzho35=$Vmzcqv41deu4."_dashboard";
        
        if($Vdngdu13visv=="pos/menu"){
                
            $Vceprxyhagcw=$this->_ci->sysvar->getvar('folder_pos');
            
            if($Vceprxyhagcw<>""){
                $Vdngdu13visv=$Vceprxyhagcw;
                $Vzqkvxpzho35=$Vdngdu13visv."_dashboard";
            }
            $Vlhi02kz1ecz["sidebar_show"]=false;
            $Vlhi02kz1ecz['hide_menu_header']=true;
            $Vlhi02kz1ecz['header_show']=false;
            $Vlhi02kz1ecz['_content']=$this->_ci->load->view($Vzqkvxpzho35,$Vlhi02kz1ecz, true);                                   
        } else {
        
    		if(file_exists(APPPATH."views/$Vzqkvxpzho35.php")){
    			$Vlhi02kz1ecz['_content']=$this->_ci->load->view($Vzqkvxpzho35,$Vlhi02kz1ecz, true);						
    		} else {
    			$Vlhi02kz1ecz['_content']="Dashboard view not found! <br>".$Vzqkvxpzho35;
    		}
    		$V0urgekm0f1fsd=$this->_ci->session->userdata("sidebar_show");
    		if($V0urgekm0f1fsd=="false"){
    			$Vlhi02kz1ecz["sidebar_show"]=false;
    		}
		
        }
		
	} else {
		if($Vdngdu13visv=="welcome_message"){
			$Vlhi02kz1ecz["sidebar_show"]=false;
			$Vlhi02kz1ecz['hide_menu_header']=true;
			$Vlhi02kz1ecz['_left_menu']=load_view("menu_tree");
		}  
		$Vlhi02kz1ecz['_content']=$this->_ci->load->view($Vdngdu13visv,$Vlhi02kz1ecz, true);
	}  			
	
	if($Vzahhljalzd1=$this->_ci->session->userdata("hide_menu_header")){
		$Vlhi02kz1ecz["hide_menu_header"]=$Vzahhljalzd1;
	}
	$Vlhi02kz1ecz['themes']=getvar("themes");

	if($this->themes=="admin"){
		$this->_ci->load->view('template/admin-lte/home',$Vlhi02kz1ecz);              				
	} else {
		$this->_ci->load->view('template/standard/template',$Vlhi02kz1ecz);              				
	}
}
 function display($Vdngdu13visv,$Vlhi02kz1ecz=null)
 {
	if($Vdngdu13visv=="")$Vdngdu13visv='blank';
	$Vlhi02kz1ecz['body_class']='';

    
	
	

	
				
		if(!isset($Vlhi02kz1ecz['user_id']))$Vlhi02kz1ecz['user_id']=$this->_ci->access->user_id();
		if(!is_ajax()){
			$Vlhi02kz1ecz['library_src']=$this->library_src;
			$Vlhi02kz1ecz['script_head']=$this->script_head;  
		}
		if(!isset($Vlhi02kz1ecz['ajaxed']))$Vlhi02kz1ecz['ajaxed']=true;
		$Viyda1dwxc0c=$this->_ci->session->userdata('header_visible');
		if($Viyda1dwxc0c){
			$Vlhi02kz1ecz['_header']='';
		} else {
			$Vlhi02kz1ecz['_header']=$this->_ci->load->view('template/standard/header',$Vlhi02kz1ecz, true);
		}
		
		$Vlhi02kz1ecz['_footer']=$this->_ci->load->view('template/standard/footer',$Vlhi02kz1ecz, true);

		$V0urgekm0f1fql="select distinct controller,method,param1 from sys_log_run 
		where user_id='".$this->_ci->access->user_id()."' order by id desc limit 10 ";
		$Vce2vhxzp34i=base_url()."/index.php/".$Vdngdu13visv;

		add_log_run($Vce2vhxzp34i);
		$Vlhi02kz1ecz['sys_log_run']=view_syslog();

		if($Vdngdu13visv=="pos/menu")$Vlhi02kz1ecz['sidebar_show']=false;

		if(isset($Vlhi02kz1ecz['_right_menu'])){
				$Vmzcqv41deu4=$Vlhi02kz1ecz['_right_menu'];
				$Vlhi02kz1ecz['_right_menu']=$this->_ci->load->view($Vmzcqv41deu4,$Vlhi02kz1ecz, true);
		} else {
			$Vlhi02kz1ecz['_right_menu']='';
		}				
		
		$Vmzcqv41deu4=$this->_ci->session->userdata('_right_menu');
		if($Vmzcqv41deu4!=''){	
			$Vskzyhvuqp4p=APPPATH.$Vmzcqv41deu4;
			if(file_exists($Vskzyhvuqp4p)){			
				$Vlhi02kz1ecz['_right_menu']=$this->_ci->load->view($Vmzcqv41deu4,$Vlhi02kz1ecz, true);
			}
		}
		$Vmzcqv41deu4=$this->_ci->session->userdata('_left_menu');
		if($Vmzcqv41deu4!='') {
			$Vskzyhvuqp4p=APPPATH.$Vmzcqv41deu4;
			if(file_exists($Vskzyhvuqp4p)){			
				$Vlhi02kz1ecz['_left_menu']=$this->_ci->load->view($Vmzcqv41deu4,$Vlhi02kz1ecz, true);
			}
		}
		$Vlhi02kz1ecz['_left_menu_caption']=$this->_ci->session->userdata('_left_menu_caption');
        if($V0urgekm0f1ftop_background_process=$this->_ci->session->userdata("stop_background_process")){
            $Vlhi02kz1ecz["stop_background_process"]=$V0urgekm0f1ftop_background_process;        
        } else {
            $Vlhi02kz1ecz["stop_background_process"]="false";
        }
        

		if($Vdngdu13visv==$Vmzcqv41deu4){
			
			if($Vdngdu13visv=="pos/menu"){
				$Vlhi02kz1ecz["sidebar_show"]=false;
				$Vlhi02kz1ecz["header_show"]=false;
				$Vlhi02kz1ecz['hide_menu_header']=true;				
			}
			
			$Vzqkvxpzho35=$Vmzcqv41deu4."_dashboard";

			if(file_exists(APPPATH."views/$Vzqkvxpzho35.php")){
				$Vlhi02kz1ecz['body_class']='';
				$Vlhi02kz1ecz['_content']=$this->_ci->load->view($Vzqkvxpzho35,$Vlhi02kz1ecz, true);						
			} else {
				$Vlhi02kz1ecz['_content']="Dashboard view not found! <br>".$Vzqkvxpzho35;
			}
		} else {
			if($Vdngdu13visv=="welcome_message"){
				$Vlhi02kz1ecz["sidebar_show"]=false;
				$Vlhi02kz1ecz['body_class']='';
				$Vlhi02kz1ecz['hide_menu_header']=true;
			}  
			$Vlhi02kz1ecz['_content']=$this->_ci->load->view($Vdngdu13visv,$Vlhi02kz1ecz, true);
		} 			
		if($Vlhi02kz1ecz['_right_menu']=='')$Vlhi02kz1ecz['sidebar_show']=false;
        
		if($Vzahhljalzd1=$this->_ci->session->userdata("hide_menu_header")){
			$Vlhi02kz1ecz["hide_menu_header"]=$Vzahhljalzd1;
		}
		if($this->themes=="admin"){
			$Vlhi02kz1ecz['_page']=$Vdngdu13visv;
			$this->_ci->load->view('template/admin-lte/page',$Vlhi02kz1ecz);              	

			
		} else {
			$this->_ci->load->view('template/standard/template',$Vlhi02kz1ecz);              
		}

	
 }
 function display_single($Vdngdu13visv,$Vlhi02kz1ecz=null) {
  	$Vlhi02kz1ecz['library_src']=$this->library_src;
  	$Vlhi02kz1ecz['script_head']=$this->script_head;
	$Vlhi02kz1ecz['bootstrap_only']=$this->bootstrap_only;
	
	if($Vdngdu13visv=="")$Vdngdu13visv='blank';
	$this->_ci->load->view($Vdngdu13visv,$Vlhi02kz1ecz);
 }
 function display_website($Vdngdu13visv,$Vlhi02kz1ecz=null){
  	$Vlhi02kz1ecz['library_src']=$this->library_src;
  	$Vlhi02kz1ecz['script_head']=$this->script_head;
	$Vlhi02kz1ecz['file_content']=$Vdngdu13visv;	
	$this->_ci->load->view("template/website/template_articles",$Vlhi02kz1ecz);	
 }
  function display_login($Vdngdu13visv,$Vlhi02kz1ecz=null) {
	$Vhcblz0nz0kc='
		<script type="text/javascript" charset="utf-8" 
		src="'.base_url().'assets/jquery/jquery-1.11.3.min.js"></script>
		<script type="text/javascript" charset="utf-8" 
		src="'.base_url().'assets/jquery-easyui-1.4.3/jquery.easyui.min.js"></script>
	';
	
	$Vbq1k2teszcq='
	<link rel="stylesheet" type="text/css" href="'.base_url().'assets/fontawesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="'.base_url().'assets/bootstrap-3.3.5/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="'.base_url().'themes/standard/style.css">
	';
  	$Vlhi02kz1ecz['library_src']=$this->library_src;
  	$Vlhi02kz1ecz['script_head']=$this->script_head;
		
	$this->_ci->load->view($Vdngdu13visv,$Vlhi02kz1ecz);
 }

 function display_form_input($Vdngdu13visv,$Vlhi02kz1ecz=null,$Vdngdu13visv_right=null)
 {
	
	if(!is_ajax()){
		$Vlhi02kz1ecz['library_src']=$this->library_src;
		$Vlhi02kz1ecz['script_head']=$this->script_head;        
	 	$Vlhi02kz1ecz['jquery_easyui']=$this->jquery_easyui;	
	}
	$Vlhi02kz1ecz['ajaxed']=true;
    $Vlhi02kz1ecz['dont_load_js']=$this->dont_load_js;
		




		$this->display($Vdngdu13visv,$Vlhi02kz1ecz);


 }
 
 function display_browse2($Vlhi02kz1ecz=null){
     
    if(session_company_code()=="" || session_outlet()=="" ){
    		
    	 $Vcumgxqvcgrm=$this->_ci->config->item("check_outlet_active");
		if($V5z34jpxgc1a=$this->_ci->session->userdata("global_module")){
			if($V5z34jpxgc1a=="sekolah"){
				$Vcumgxqvcgrm=false;
			}
		}
		if($Vcumgxqvcgrm){				
			 if($this->_ci->config->item("multi_company")){
		         msgbox("Perusahaan yang aktif belum dipilih ! 
		            <br>Silahkan pilih perusahaan dan outlet yang aktif untuk session saat ini 
		            ada disebelah kanan kemudian klik tombol [SUBMIT]");
					
		         return false;						 	
			 }
		}
    }        
     
	$Vlhi02kz1ecz['body_class']='panel-body';
	$Vlhi02kz1ecz['print_visible']=true;
    $Vlhi02kz1ecz['dont_load_js']=$this->dont_load_js;
    
	if(isset($Vlhi02kz1ecz['view_mode'])){
		$Vtwuicult053=$Vlhi02kz1ecz['view_mode'];
	} else {
		$Vtwuicult053="";
	}
	if(!is_ajax()){
		$Vlhi02kz1ecz['library_src']=$this->library_src;
		$Vlhi02kz1ecz['script_head']=$this->script_head;
			if($Vtwuicult053<>""){
			$this->_ci->load->view('/'.$Vtwuicult053,$Vlhi02kz1ecz);	
		} else {
			if(getvar("themes")=="admin"){
				$Vlhi02kz1ecz['_left_menu']=load_view("menu_tree");
				$Vlhi02kz1ecz["_page"]="template/admin-lte/browse";
				$this->_ci->load->view('template/admin-lte/page',$Vlhi02kz1ecz);				

			}  else {
				$this->_ci->load->view('template/standard/template_browse',$Vlhi02kz1ecz);				

			}
		}
	
	} else {
		echo json_encode($Vlhi02kz1ecz);
	}
 }
 function display_browse($Vlhi02kz1ecz=null)
 {
 	$Vlhi02kz1ecz['jquery_easyui']=$this->jquery_easyui;
    $this->display_browse2($Vlhi02kz1ecz);
 }
 function display_browse2_old($Vlhi02kz1ecz)
 {
     $Vlhi02kz1ecz['search']='';
     if(isset($_GET['search']))$Vlhi02kz1ecz['search']=$_GET['search'];
     $Vlhi02kz1ecz['message']='Ready';
 	 $Vlhi02kz1ecz['jquery_easyui']=$this->jquery_easyui;
  
	 if(!$this->is_ajax())
	 {
        $Vlhi02kz1ecz['library_src']=$this->library_src;
        $Vlhi02kz1ecz['script_head']=$this->script_head;
		$Vlhi02kz1ecz['_header']=$this->_ci->load->view('template/standard/header',$Vlhi02kz1ecz, true);
		$Vlhi02kz1ecz['_content']=$this->_ci->load->view('template/standard/template_browse',$Vlhi02kz1ecz, true);
		$Vlhi02kz1ecz['_footer']=$this->_ci->load->view('template/standard/footer',$Vlhi02kz1ecz, true);
		$Vlhi02kz1ecz['sys_log_run']=syslog();		
		$Vlhi02kz1ecz['body_class']='body-child';
		$this->_ci->load->view('template/standard/template',$Vlhi02kz1ecz);
	 } 	 else 	 {
        $Vlhi02kz1ecz['library_src']=$this->library_src;
        $Vlhi02kz1ecz['script_head']=$this->script_head;
		
	    $this->_ci->load->view('template/standard/template_browse',$Vlhi02kz1ecz);
	 }
 }
 function display_table($Vdngdu13visv,$Vlhi02kz1ecz=null) {
    $Vlhi02kz1ecz['message']='Ready';
	  
	 if(!$this->is_ajax())
	 {	
	  	$Vlhi02kz1ecz['library_src']=$this->library_src;
	  	$Vlhi02kz1ecz['script_head']=$this->script_head;
        $Vlhi02kz1ecz['_left_menu']='';
		if(isset($Vlhi02kz1ecz['_right_menu'])){
			$Vmzcqv41deu4=$Vlhi02kz1ecz['_right_menu'];
			$Vlhi02kz1ecz['_right_menu']=$this->_ci->load->view($Vmzcqv41deu4,$Vlhi02kz1ecz, true);
		} else {
		   $Vlhi02kz1ecz['_right_menu']='';
		}				
    	$Vmzcqv41deu4=$this->_ci->session->userdata('_right_menu');
        if($Vmzcqv41deu4!='')$Vlhi02kz1ecz['_right_menu']=$this->_ci->load->view($Vmzcqv41deu4,$Vlhi02kz1ecz, true);
		$Vlhi02kz1ecz['_header']=$this->_ci->load->view('template/standard/header',$Vlhi02kz1ecz, true);
		$Vlhi02kz1ecz['_footer']=$this->_ci->load->view('template/standard/footer',$Vlhi02kz1ecz, true);
		$this->_ci->load->view('template/standard/browse',$Vlhi02kz1ecz);              
	 } else {
		 $this->_ci->load->view($Vdngdu13visv,$Vlhi02kz1ecz);
	 }
 }
 function print_out($Vdngdu13visv,$Vlhi02kz1ecz=null){
    $this->_ci->load->view('simple_print.php',$Vlhi02kz1ecz);
 }
 function is_ajax()
 {
 	return (
	 $this->_ci->input->server('HTTP_X_REQUESTED_WITH')&&
	 ($this->_ci->input->server('HTTP_X_REQUESTED_WITH')=='XMLHttpRequest'));
 }
function template_table($V2ekmfbjpi31='hor-minimalist-b'){
$Vpcrkkvizdkb = array (
            'table_open'          => '<table class="'.$V2ekmfbjpi31.'" border="0" cellpadding="4" cellspacing="0">',

            'heading_row_start'   => '<tr>',
            'heading_row_end'     => '</tr>',
            'heading_cell_start'  => '<th>',
            'heading_cell_end'    => '</th>',

            'row_start'           => '<tr>',
            'row_end'             => '</tr>',
            'cell_start'          => '<td>',
            'cell_end'            => '</td>',

            'row_alt_start'       => '<tr>',
            'row_alt_end'         => '</tr>',
            'cell_alt_start'      => '<td>',
            'cell_alt_end'        => '</td>',

            'table_close'         => '</table>'
      );
        return $Vpcrkkvizdkb;

}
function browse_sql($V0urgekm0f1fql){
	$Vlhi02kz1ecz['message']='';
    $Vlhi02kz1ecz['library_src']=$this->library_src;
    $Vlhi02kz1ecz['script_head']=$this->script_head;
 	$Vmzcqv41deu4=$this->_ci->session->userdata('_left_menu');
    $Vlhi02kz1ecz['_left_menu']=$Vmzcqv41deu4==''?'':$this->_ci->load->view($Vmzcqv41deu4,$Vlhi02kz1ecz, true);
 	$Vmzcqv41deu4=$this->_ci->session->userdata('_right_menu');
    $Vlhi02kz1ecz['_right_menu']=$Vmzcqv41deu4==''?'':$this->_ci->load->view($Vmzcqv41deu4,$Vlhi02kz1ecz, true);
	$Vlhi02kz1ecz['_header']=$this->_ci->load->view('template/standard/header',$Vlhi02kz1ecz, true);
	$Vlhi02kz1ecz['_footer']=$this->_ci->load->view('template/standard/footer',$Vlhi02kz1ecz, true);
	$Vlhi02kz1ecz['_content']=browse_simple($V0urgekm0f1fql);
	$this->_ci->load->view('template/standard/template.php',$Vlhi02kz1ecz);
}

 function pos($Vdngdu13visv,$Vlhi02kz1ecz=null)
 {
	  	$Vlhi02kz1ecz['library_src']=$this->library_src;
	  	$Vlhi02kz1ecz['script_head']=$this->script_head;
		$Vlhi02kz1ecz['_header']=$this->_ci->load->view('template/pos/header',$Vlhi02kz1ecz, true);
		$Vlhi02kz1ecz['_footer']=$this->_ci->load->view('template/pos/footer',$Vlhi02kz1ecz, true);
		$this->_ci->load->view('template/pos/template',$Vlhi02kz1ecz);              
	 
 }
 	function display_lte_admin($Vmwrugtvcipm,$Vlhi02kz1ecz=null){
		$this->_ci->load->view('template/admin-lte/home',$Vlhi02kz1ecz);              
 	} 
 
}
