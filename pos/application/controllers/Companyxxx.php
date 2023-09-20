<?php
if(!defined('BASEPATH')) exit('No direct script access allowd');

class Company extends CI_Controller {
    private $limit=10;
    private $table_name='preferences';
    private $sql="select company_code,company_name,street,city_state_zip_code,phone_number,
    	fax_number,email
                from preferences
                ";
    private $file_view='admin/company';
    private $primary_key='company_code';
    private $controller='company';
	private $sql_error=array();

    function __construct()    {
            parent::__construct();
		 
            
			 if(!$this->access->is_login()){
				 
				redirect(base_url());
			}  
			
            $this->load->helper(array('url','form','mylib_helper'));
	        $this->load->library('sysvar');
            $this->load->library('template');
            $this->load->library('form_validation');
            $this->load->model('company_model');
            $this->load->model('chart_of_accounts_model');
			$this->load->model('syslog_model');
			$this->load->library("form_builder");
    }
    function set_defaults($record=NULL){
            $data['mode']='';
            $data['message']='';
            $data=data_table($this->table_name,$record);
             return $data;
    }
    function index()    {	
		if (!allow_mod2('_00000'))	exit;
        $this->browse();
		
    }
    function get_posts(){
		if($this->input->post()){
            $data=$this->input->post();
		} else {
            $data=data_table_post($this->table_name);			
		}
            return $data;
    }
    function add()   {
		if (!allow_mod2('_00000'))	exit;
             $data=$this->set_defaults();
             $this->_set_rules();
             if ($this->form_validation->run()=== TRUE){
                    $data=$this->get_posts();
                    $this->company_model->save($data);
		            $data['message']='update success';
		            $data['mode']='view';
					$this->syslog_model->add($data['company_code'],"company","edit");

		            $this->browse();
            } else {
                    $data['mode']='add';
                    $data['message']='';
                    $this->template->display_form_input($this->file_view,$data,'company_menu');			
            }
    }
    function update()   {

             $data=$this->set_defaults();
             $this->_set_rules();
             $id=$this->input->post('company_code');
             if ($this->form_validation->run()=== TRUE){
                    $data=$this->get_posts();
					unset($data['company_code']);
                    $this->company_model->update($id,$data);
                    $message='Update Success';
					$this->syslog_model->add($id,"company","edit");

                    $this->browse();
            } else {
                    $message='Error Update';
		            $this->view($id,$message);		
            }
    }

    function view($id,$message=null)	{
		if (!allow_mod2('_00000'))	exit;
		$id=urldecode($id);
		 $data['id']=$id;
		 if($id=="ALL" || $id==""){
			 //bila all ambil saja yang paling atas
			 $id=$this->db->select("company_code")->get("preferences")->row()->company_code;
		 }
		 $model=$this->company_model->get_by_id($id)->row();
		 $data=$this->set_defaults($model);
		 $data['mode']='view';
		 $data['message']=$message;
		$this->template->display_form_input($this->file_view,$data,'company_menu');
    }
     // validation rules
    function _set_rules(){	
             $this->form_validation->set_rules('company_code','Kode', 'required|trim');
             $this->form_validation->set_rules('company_name','Nama', 'required');
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
   function browse($offset=0,$limit=50,$order_column='sales_order_number',$order_type='asc'){

		$data['controller']='company';
		$data['fields_caption']=array('Kode','Nama Perusahaan','Alamat','Kota','Telp','Fax','Email');
		$data['fields']=array('company_code','company_name','street','city_state_zip_code','phone_number',
    	'fax_number','email');
		$data['field_key']='company_code';
		$data['caption']='DAFTAR KODE PERUSAHAAN';

		$this->load->library('search_criteria');
		$faa[]=criteria("Nama Perusahaan","sid_nama");
		$data['criteria']=$faa;
        $this->template->display_browse2($data);            
    }
    function browse_data($offset=0,$limit=100,$nama=''){
        $sql=$this->sql.' where 1=1';
		if($this->input->get('sid_nama')!='')$sql.=" company_name like '".$this->input->get('sid_nama')."%'";
        echo datasource($sql);
    }	   
	function deletex($id){
		if (!allow_mod2('_00000'))	exit;
		$id=urldecode($id);
	 	$this->company_model->delete($id);
		$this->syslog_model->add($id,"company","delete");

	 	$this->browse();
	}
	function find($nomor){
		$nomor=urldecode($nomor);
		$query=$this->db->query("select company_name from preferences where company_code='$nomor'");
		echo json_encode($query->row_array());
 	}
	function acc_id($account){
		$account=urldecode($account);
		$data=explode(" - ", $account);
		$coa=$this->chart_of_accounts_model->get_by_id($data[0])->row();
		if($coa){
			return $coa->id;
		} else {
			return 0;
		}
	}
	function gl_link(){
		if($this->input->post('cmdSave')){

			$data['accounts_payable']=$this->acc_id($this->input->post('accounts_payable'));
			$data['po_freight']=$this->acc_id($this->input->post('po_freight'));
			$data['po_other']=$this->acc_id($this->input->post('po_other'));
			$data['po_tax']=$this->acc_id($this->input->post('po_tax'));
			$data['po_discounts_taken']=$this->acc_id($this->input->post('po_discounts_taken'));
			$data['supplier_credit_account_number']=$this->acc_id($this->input->post('supplier_credit_account_number'));
			$data['inventory_sales']=$this->acc_id($this->input->post('inventory_sales'));
			$data['inventory']=$this->acc_id($this->input->post('inventory'));
			$data['inventory_cogs']=$this->acc_id($this->input->post('inventory_cogs'));
			$data['accounts_receivable']=$this->acc_id($this->input->post('accounts_receivable'));
			$data['so_freight']=$this->acc_id($this->input->post('so_freight'));
			$data['so_other']=$this->acc_id($this->input->post('so_other'));
			$data['so_tax']=$this->acc_id($this->input->post('so_tax'));
			$data['so_discounts_given']=$this->acc_id($this->input->post('so_discounts_given'));
			$data['customer_credit_account_number']=$this->acc_id($this->input->post('customer_credit_account_number'));
			$data['default_cash_payment_account']=$this->acc_id($this->input->post('default_cash_payment_account'));
			$data['earning_account']=$this->acc_id($this->input->post('earning_account'));
			$data['year_earning_account']=$this->acc_id($this->input->post('year_earning_account'));
			$data['historical_balance_account']=$this->acc_id($this->input->post('historical_balance_account'));
			$data['default_bank_account_number']=$this->acc_id($this->input->post('default_bank_account_number'));
			$data['default_credit_card_account']=$this->acc_id($this->input->post('default_credit_card_account'));
			 
			$this->company_model->update($this->access->cid,$data);


			$this->sysvar->save('COA Uang Muka Pembelian',$this->acc_id($this->input->post('txtUangMukaBeli')));
			$this->sysvar->save('COA Retur Penjualan',$this->acc_id($this->input->post('txtReturJual')));
			$this->sysvar->save('COA Item Out Others',$this->acc_id($this->input->post('txtCoaItemOut')));
			$this->sysvar->save('COA Item In Others',$this->acc_id($this->input->post('txtCoaItemIn')));
			$this->sysvar->save('COA Item Adjustment',$this->acc_id($this->input->post('txtCoaItemAdj')));
			$this->sysvar->save('COA Uang Muka Penjualan',$this->acc_id($this->input->post('txtUangMukaJual')));
			$this->sysvar->save('CoaChargeCreditCard',$this->acc_id($this->input->post('txtChargeCC')));
			$this->sysvar->save('CoaPromo',$this->acc_id($this->input->post('txtPromo')));
			$this->sysvar->save('CoaGift',$this->acc_id($this->input->post('txtGift')));

		}	
		 
		$set=$this->company_model->get_by_id($this->access->cid)->row();
	 
		$data['accounts_payable']=account($set->accounts_payable);
		$data['po_freight']=account($set->po_freight);
		$data['po_other']=account($set->po_other);
		$data['po_tax']=account($set->po_tax);
		$data['po_discounts_taken']=account($set->po_discounts_taken);
		$data['supplier_credit_account_number']=account($set->supplier_credit_account_number);
		$data['inventory_sales']=account($set->inventory_sales);
		$data['inventory']=account($set->inventory);
		$data['inventory_cogs']=account($set->inventory_cogs);
		$data['accounts_receivable']=account($set->accounts_receivable);
		$data['so_freight']=account($set->so_freight);
		$data['so_other']=account($set->so_other);
		$data['so_tax']=account($set->so_tax);
		$data['so_discounts_given']=account($set->so_discounts_given);
		$data['customer_credit_account_number']=account($set->customer_credit_account_number);
		$data['default_cash_payment_account']=account($set->default_cash_payment_account);
		$data['earning_account']=account($set->earning_account);
		$data['year_earning_account']=account($set->year_earning_account);
		$data['historical_balance_account']=account($set->historical_balance_account);
		$data['default_bank_account_number']=account($set->default_bank_account_number);
		$data['default_credit_card_account']=account($set->default_credit_card_account);

		$data['txtUangMukaBeli']=account($this->sysvar->getvar('COA Uang Muka Pembelian'));
		$data['txtReturJual']=account($this->sysvar->getvar('COA Retur Penjualan'));
		$data['txtCoaItemOut']=account($this->sysvar->getvar('COA Item Out Others'));
		$data['txtCoaItemIn']=account($this->sysvar->getvar('COA Item In Others'));
		$data['txtCoaItemAdj']=account($this->sysvar->getvar('COA Item Adjustment'));
		$data['txtUangMukaJual']=account($this->sysvar->getvar('COA Uang Muka Penjualan'));
		$data['txtChargeCC']=account($this->sysvar->getvar('CoaChargeCreditCard'));
		$data['txtPromo']=account($this->sysvar->getvar('CoaPromo'));
		$data['txtGift']=account($this->sysvar->getvar('CoaGift'));
		
        $this->template->display_form_input('admin/gl_link',$data);		
	   			
	}
	function purchase(){
		$data['a']='';
        $this->template->display_form_input('admin/purchase',$data);		
	}
	function sales(){
		$data['a']='';
        $this->template->display_form_input('admin/sales',$data);		
	}
	function inventory(){
		$this->load->library("crud");
		$unit=new $this->crud();
		$unit->set_sql("select * from unit_of_measure");
		$unit->set_name("company_inventory_unit");
		$unit->title="Unit Of Measure";
		$unit->table_input="unit_of_measure";
		$unit->fnc_edit="
			$('#from_unit').val(row.from_unit);
			$('#to_unit').val(row.to_unit);
			$('#to_unit').val(row.to_unit);
			$('#unit_value').val(row.unit_value);
			$('#id').val(row.id);
			$('#mode').val('edit');
			";
			
		$data['unit']=$unit->render();
        $this->template->display_form_input('admin/inventory',$data);		
	}
	function others(){
		$data['a']='';
        $this->template->display_form_input('admin/others',$data);		
	}
	function department(){
		$data['caption']="DEPARTMENTS";		
		$this->template->display("admin/department",$data);
	}
   function department_add(){
		$this->load->model('department_model');
		$data = $this->input->post(NULL, TRUE); //getallpost			
		$ok=$this->department_model->save($data);
		if ($ok){echo json_encode(array('success'=>true));} else {echo json_encode(array('msg'=>'Some errors occured.'));}   	
   }
   function department_delete($kode){
   		$kode=htmlspecialchars_decode($kode);
		$this->load->model('department_model');
		$ok=$this->department_model->delete($kode);
		if ($ok){echo json_encode(array('success'=>true));} else {echo json_encode(array('msg'=>'Some errors occured.'));}   	
   }
	function division(){
		$data['caption']="DIVISI";		
		$this->template->display("admin/division",$data);
	}
   function division_add(){
		$this->load->model('division_model');
		$data = $this->input->post(NULL, TRUE); //getallpost			
		$ok=$this->division_model->save($data);
		if ($ok){echo json_encode(array('success'=>true));} else {echo json_encode(array('msg'=>'Some errors occured.'));}   	
   }
   function division_delete($kode){
		$kode=urldecode($kode);
		$this->load->model('division_model');
		$ok=$this->division_model->delete($kode);
		if ($ok){echo json_encode(array('success'=>true));} else {echo json_encode(array('msg'=>'Some errors occured.'));}   	
   }
	function branch(){
		$data['caption']="CABANG";		
		$this->template->display("admin/branch",$data);
	}
   function branch_add(){
		$this->load->model('branch_model');
		$data = $this->input->post(NULL, TRUE); //getallpost			
		$ok=$this->branch_model->save($data);
		if ($ok){echo json_encode(array('success'=>true));} else {echo json_encode(array('msg'=>'Some errors occured.'));}   	
   }
   function branch_delete($kode){
		$kode=urldecode($kode);
		$this->load->model('branch_model');
		$ok=$this->branch_model->delete($kode);
		if ($ok){echo json_encode(array('success'=>true));} else {echo json_encode(array('msg'=>'Some errors occured.'));}   	
   }
	function wilayah(){
		$data['caption']="WILAYAH PEMASARAN SALESMAN";		
		$this->template->display("admin/wilayah",$data);
	}
   function wilayah_add(){
		$this->load->model('wilayah_model');
		$data = $this->input->post(NULL, TRUE); //getallpost			
		$ok=$this->wilayah_model->save($data);
		if ($ok){echo json_encode(array('success'=>true));} else {echo json_encode(array('msg'=>'Some errors occured.'));}   	
   }
   function wilayah_delete($kode){
		$kode=urldecode($kode);
		$this->load->model('wilayah_model');
		$ok=$this->wilayah_model->delete($kode);
		if ($ok){echo json_encode(array('success'=>true));} else {echo json_encode(array('msg'=>'Some errors occured.'));}   	
   }	
   function new_folder($company)
   {
	   $company=urldecode($company);
	   $company=str_replace(" ","",$company);
	   	$s='Loading data...';
		$base_folder=__DIR__;
		$root_folder=$base_folder.DIRECTORY_SEPARATOR."..".DIRECTORY_SEPARATOR."..".DIRECTORY_SEPARATOR;
		$base_folder=$root_folder."company".DIRECTORY_SEPARATOR;
		$com_folder=$base_folder.$company;
	   if($folder_exist = @opendir($com_folder))
	   {
		   $data[]="Your company [$company] is exist, cannot continue.!"; 
	   } else {
			$data[]=$s."OK";
			$s='Creating new folder...';
		   if(mkdir($com_folder, 0700))
		   {
				$data[]=$s."OK";

				$s='Copying sample company...';		
				$source=$base_folder."company.zip";
				$dest=$base_folder.DIRECTORY_SEPARATOR.$company.DIRECTORY_SEPARATOR."company.zip";
				//if(copy($source,$dest)){
					$data[]=$s."OK";
				//}
				$ok=false;
				$s='Extracting...';
				$zip = new ZipArchive;
				if ($zip->open($source) === TRUE) {
					$zip->extractTo($com_folder);
					$zip->close();
					$data[]=$s."OK";
					$ok=true;
				} else {
					$data[]=$s."ERROR";
				}
				if($ok){
					$ok=false;
					$s='Installing New Database...';
					$this->load->dbforge();
					$db_name=$company;
					$ok=$this->dbforge->create_database($db_name);
					$data[]=$s."OK";
					
				}
				if($ok){
					$s='Building Database...';
					$dsn2 = 'mysql://root:@localhost/'.$company;
					$db2= $this->load->database($dsn2, true);
					$file_sql=$root_folder.DIRECTORY_SEPARATOR."simak.sql";
					$ok=$this->execute_sql_file($file_sql,$db2);
					if($ok){
						$data[]=$s."OK";
					} else {
						$data[]=$s."ERROR";						
					}
				}
				if($ok){
					$ok=false;
					$s='Building default setting...';
					if($ok=$this->execute_def_set($db2)){
						$data[]=$s."OK";
					} else {
						$data[]=$s."ERROR";
					}
				}
				if($ok){
					$s="Writing configuration..";
					if($ok=$this->write_config($com_folder,$company)){
						$data[]=$s."OK";
					} else {
						$data[]=$s."ERROR";
					}
				}
				if($ok){
					$data[]='Finish.';
				} else {
					$data[]='Not Finish. Error reporting...!!!';					
				}
		   } else {
				$data[]="Error create new folder [$company], cannot continue.!"; 			   
		   }
	   }
		echo json_encode(array("success"=>true,'data'=>$data,
		"company"=>$company,"sql_error"=>$this->sql_error));

	   
   }
   function execute_def_set($db)
   {
	   return true;
   }
   function write_config($folder,$company)
   {
	   $ok=false;
	   $file_conf_db=$folder.DIRECTORY_SEPARATOR."application".
			DIRECTORY_SEPARATOR."config".DIRECTORY_SEPARATOR."database.php";
		$this->load->helper("file");
		if($data=read_file($file_conf_db))
		{
			$data=str_replace("simak",$company,$data);
			$ok=write_file($file_conf_db,$data);
		}
	   $file_conf_route=$folder.DIRECTORY_SEPARATOR."application".
			DIRECTORY_SEPARATOR."config".DIRECTORY_SEPARATOR."routes.php";
		$this->load->helper("file");
		if($data=read_file($file_conf_route))
		{
			$data=str_replace("frontend/home","login",$data);
			$ok=write_file($file_conf_route,$data);
		}
		return $ok;
   }
   function execute_sql_file($file_sql,$db)
   {
		$this->load->helper("file");
	   $ok=false;
	   $sql = read_file($file_sql);
	   $sqls = explode(';', $sql);
	   $err=array();
		array_pop($sqls);
		foreach($sqls as $statement){
			$statment = $statement . ";";
			$ok=$db->query($statement);  
			if(!$ok){
				$err[]=mysql_error();
			}
		}
		//$this->sql_error=$err;
		return $ok;
   }
   function toko_add(){
		$data = $this->input->post(NULL, TRUE); //getallpost			
		$data['code_company']=$data['company_code_item'];
		unset($data['company_code_item']);
		if ($this->db->insert('toko_master',$data)){
			echo json_encode(array('success'=>true));
		} else {
			echo json_encode(array('msg'=>'Some errors occured.'));
		}   	
   }
   function toko($cmd=""){
   		if($cmd=='browse_json'){
   			echo datasource('select * from toko_master');
   		}
   }
   function select_databases(){
	$data['message']='';
	$data['company_code']=$this->session->userdata("company_code","");
	$data['multi_company']=$this->config->item('multi_company');

	if($this->access->is_login()){            
		//$this->upgrade->process(); //dipinahkn ke seting checkdb
		$user_id=user_id();
		$session_id=$this->session->userdata("__ci_last_regenerate");        
		$this->db->query("update `user` set session_id='$session_id',logged_in='1'   
			where user_id='$user_id' ");
										
		$this->welcome();       
	} else {
		$this->template->display_single("databases",$data);
	}
}
function open_database(){
		
	$data['multi_company']=$this->config->item('multi_company');
	$data["company_code"]=$this->session->userdata("company_code","");
	$data["session_outlet"]=$this->session->userdata("session_outlet","");
	$data["warehouse_code"]=$data["session_outlet"];        
	
	$submit_value=$this->input->post("submit");
	
	
	if($submit_value=="Change Password"){
		header("location:".base_url()."index.php/login/change_password"); 
	} else if($submit_value=="Create User"){
		header("location:".base_url()."index.php/login/create_user"); 
	} else {
	   //$this->form_validation->set_rules('user_id', 'User Id', 'trim|required|xss_clean');
	   $this->form_validation->set_rules('password', 'Password', 'trim|required|callback_check_database');
	   if($this->form_validation->run()) {
			header("location:".base_url()."index.php"); 
	   } else {
			$data["message"]="UserID atau Password salah ! 
			<br>Atau belum pilih database perusahaan.";    
			$data['message']=validation_errors();        
			$this->template->display_single("databases",$data);
	   }
   }            
}


function check_database($password)  {
   
   $this->load->model('user','',TRUE);
	   
   $password=urldecode($password);
   $user_id=urldecode($this->input->post('user_id'));
   $company_code=$this->input->post("company_code");       
   $warehouse_code=$this->input->post("warehouse_code");       
   if(multi_company_single_db()){
		$cid=cid($user_id);
		if($cid!="")$company_code=$cid;
   }
   
   $result = $this->user->login($user_id, $password);
   
   if($result)  {
			
		my_log("LOGIN","",$user_id);     
	   
	   $single_login=getvar("SingleLogin","");
	   if($single_login==1){
		   //lima kali klik kebuka session admin
		   
		   $cnt=$this->session->userdata("admin_login_count",0);
		   if($cnt==null)$cnt=0;
		   
		   if($cnt==5 && $user_id=="admin"){
			   $this->session->set_userdata("admin_login_count",0);
			   
		   } else {
			   if($user_id=="admin") {
				   $cnt++;
				   $this->session->set_userdata("admin_login_count",$cnt);
			   }
			   
			   if($quser=$this->db->query("select logged_in from `user` where user_id='$user_id'")){
				   if($ruser=$quser->row()){
					   if($ruser->logged_in==1){
							$this->form_validation->set_message('check_database', "User $user_id sedang aktif ! Anda tidak bisa login dengan user ini. 
								Atau hubungi Administrator untuk unlock.");
						   return false;
					   }
				   }
			   }                   
		   }
	   }
	   
	 $sess_array = array();
	 
	 foreach($result->result() as $row) {
	   $sess_array = (array)$row;
	   if($company_code==null || $company_code==""){
		   $company_code=$sess_array['cid'];
	   } 
	   unset($sess_array['password']);
	   
	   $this->session->set_userdata('logged_in', $sess_array);
	   
		// check if this user as admin for backend application ?
		$user_admin=$this->user_jobs_model->is_job("ADM",$user_id);
		$this->session->set_userdata("user_admin",$user_admin);
		// warehouse roles
		$default_warehouse_list=$this->user_model->roles_gudang($user_id);
		if(is_array($default_warehouse_list)){
			if(count($default_warehouse_list)==0){
				$default_warehouse="";
			} else if ( count($default_warehouse_list)==1 ) {
				$default_warehouse=$default_warehouse_list[0];
			} else {
				$default_warehouse="MULTI";
			}
		} else {
			$default_warehouse=$default_warehouse_list; 
		}
		$this->session->set_userdata("default_warehouse",$default_warehouse);
		$this->session->set_userdata("default_warehouse_list",$default_warehouse_list);
		
		
		// item division roles 
		$default_division_list=$this->user_model->roles_division($user_id);
		$default_division="";
		if(is_array($default_division_list)){
			if(count($default_division_list)==0){
				$default_division="";
			} else if ( count($default_division_list)==1 ) {
				$default_division=$default_division_list[0];
			} else {
				$default_division="MULTI";
			}
		} else {
			$default_division=$default_division_list;   
		}
		$this->session->set_userdata("default_division",$default_division);
		$this->session->set_userdata("default_division_list",$default_division_list);
		
		
		$this->periode_model->current_periode();
		$min_date=$this->periode_model->start_date();
		$max_date=$this->periode_model->end_date();
		$min_date="2018-01-01";
		$max_date="2018-12-01";
		$this->session->set_userdata("min_date",$min_date);
		$this->session->set_userdata("max_date",$max_date);           
	   $this->session->set_userdata("session_outlet",$warehouse_code);
	   $this->session->set_userdata("default_warehouse",$warehouse_code);
	   
	   if($warehouse_code!=""){
		   if($qgdg=$this->db->query("select company_name from shipping_locations 
				   where location_number='$warehouse_code'")){
				   if($rgdg=$qgdg->row()){
						   if(!multi_company_single_db()){
							if($rgdg->company_name)$company_code=$rgdg->company_name;

						}

						   $default_warehouse=$warehouse_code;
						   $this->session->set_userdata("default_warehouse",$default_warehouse);
			   }
		   }
	   
	   }
	   
	   
	   $this->session->set_userdata("company_code",$company_code);
	   $this->session->set_userdata("session_company_code",$company_code);
			
	 }


	 return true;
	 
	 
   } else {
	 $this->form_validation->set_message('check_database', "Password salah atau user belum diaktifkan ! Hubungi Administrator.");
	 return false;
   }
}   
}
?>
