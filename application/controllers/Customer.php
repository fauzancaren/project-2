<?php if(!defined('BASEPATH')) exit('No direct script access allowd');

class Customer extends CI_Controller {
    private $limit=10;
    private $offset=0;
    private $table_name='customers';
	private $sql=""; 

	function __construct()
	{
		parent::__construct();        
        
		//if(!$this->access->is_login())header("location:".base_url());
 		$this->load->helper(array('url','form','browse_select','mylib_helper'));
		$this->load->library('template');
		$this->load->library('form_validation');
		$this->load->model('customer_model');
        $this->load->model('chart_of_accounts_model');
        $this->load->model('type_of_payment_model');
        $this->load->model('salesman_model');
		$this->load->library("list_of_values");
        $this->load->model('syslog_model');

		$this->sql="select *  from customers ";
		
	}
	function set_defaults($record=NULL){
		$data=data_table("customers",$record,true); 
		$data['mode']='';
		$data['message']='';
		if($record==null){
			$data['customer_number']='AUTO';
		}  

		$setting['dlgBindId']="payment_terms";
		$setting['dlgCols']=array( 
			array("fieldname"=>"type_of_payment","caption"=>"Termin","width"=>"280px")
		);
		$setting['dlgRetFunc']="$('#payment_terms').val(row.type_of_payment);";
		$data['lookup_termin']=$this->list_of_values->render($setting);

		$setting['dlgBindId']="salesman";
		$setting['dlgCols']=array( 
			array("fieldname"=>"salesman","caption"=>"Salesman","width"=>"280px")
		);
		$setting['dlgRetFunc']="$('#salesman').val(row.salesman);";
		$data['lookup_salesman']=$this->list_of_values->render($setting);
		
		$setting['dlgBindId']="city";
		$setting['dlgCols']=array( 
			array("fieldname"=>"city_id","caption"=>"Kode","width"=>"80px"),
			array("fieldname"=>"city_name","caption"=>"Kota","width"=>"200px")
		);
		$setting['dlgRetFunc']="$('#city').val(row.city_id+' - '+row.city_name);";
		$data['lookup_city']=$this->list_of_values->render($setting);

		$setting['dlgBindId']="country";
		$setting['dlgCols']=array( 
			array("fieldname"=>"country_id","caption"=>"Kode","width"=>"80px"),
			array("fieldname"=>"country_name","caption"=>"Negara","width"=>"200px")
		);
		$setting['dlgRetFunc']="$('#country').val(row.country_id+' - '+row.country_name);";
		$data['lookup_country']=$this->list_of_values->render($setting);

		$setting['dlgBindId']="region";
		$setting['dlgCols']=array( 
			array("fieldname"=>"region_id","caption"=>"Kode","width"=>"80px"),
			array("fieldname"=>"region_name","caption"=>"Nama Wilayah","width"=>"200px")
		);
		$setting['dlgRetFunc']="$('#region').val(row.region_id);";
		$data['lookup_region']=$this->list_of_values->render($setting);

		$setting['dlgBindId']="customer_record_type";
		$setting['dlgCols']=array( 
			array("fieldname"=>"type_id","caption"=>"Kode","width"=>"80px"),
			array("fieldname"=>"type_name","caption"=>"Nama Kelompok","width"=>"200px")
		);
		$setting['dlgRetFunc']="$('#customer_record_type').val(row.type_id+' - '+row.type_name);";
		$data['lookup_cust_type']=$this->list_of_values->render($setting);
		
		return $data;
	}
	function index()
	{	
		if (!allow_mod2('_30010'))  exit;
        $this->browse();
	}
	function get_posts(){
        $data=data_table_post($this->table_name);
		return $data;
	}
	function add()
	{
		if (!allow_mod2('_30011'))  exit;
		$data=$this->set_defaults();
		$data['active']=true;	
	 	$this->_set_rules();
		$data['mode']='add';
		$data['label_next_number']=$this->nomor();
        $this->template->display_form_input('sales/customer',$data);
	}
	
	function nomor($add=false)
	{
		$key="Customer Numbering";
		if($add){
		  	$this->sysvar->autonumber_inc($key);
		} else {			
			$no=$this->sysvar->autonumber($key,0,'!1~$00001');
			for($i=0;$i<10;$i++){			
				$no=$this->sysvar->autonumber($key,0,'!1~$00001');
				$rst=$this->customer_model->get_by_id($no)->row();
				if($rst){
				  	$this->sysvar->autonumber_inc($key);
				} else {
					break;					
				}
			}
			return $no;			
		}
	}
	function save(){
		$data=$this->input->post();
		$mode="add";
		if(isset($data['mode']))$mode=$data["mode"];
	 	unset($data['mode']);
		$id=$this->input->post("customer_number");
		if($id=="AUTO"||$id==""||$mode=="add"){
			$id=$this->nomor();
		}
		$data['finance_charge_acct']=$this->acc_id($data['finance_charge_acct']);	
		if($mode=="add"){ 
			$data['customer_number']=$id;
			$ok=$this->customer_model->save($data);
			$this->syslog_model->add($id,$this->table_name,$mode);
			$this->nomor(true);
		} else {
			$ok=$this->customer_model->update($id,$data);				
			$this->syslog_model->add($id,$this->table_name,"edit");
		}
		if($ok){
			echo json_encode(array("success"=>true,"customer_number"=>$id));
		} else {
			echo json_encode(array("msg"=>"Error ".show_error('customer.save')));
		}
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
        
	function update()
	{
		 $data=$this->set_defaults();
		 $this->_set_rules();
 		 $id=$this->input->post('customer_number');
		$data['finance_charge_acct']=$this->acc_id($data['finance_charge_acct']);	
		 if ($this->form_validation->run()=== TRUE){
			$data=$this->get_posts();
			$this->customer_model->update($id,$data);
            $message='Success';
            $this->browse();
		} else {
            $message='Error';
     		$this->view($id,$message);		
		}
	}
	
	function view($id="",$message=null){
		if (!allow_mod2('_30010'))  exit;
		 $id=urldecode($id);
		 if($id==""){
			 $this->add();
		 } else {	 
			 $model=$this->customer_model->get_by_id($id)->row();
			 $data=$this->set_defaults($model);
			 $data['id']=$id;
			 $data['mode']='view';
			 $data['message']=$message;
			 $data['finance_charge_acct']=account($data['finance_charge_acct']);
			 $this->template->display_form_input('sales/customer',$data);
		}
	}
	 // validation rules
	function _set_rules(){	
		 $this->form_validation->set_rules('customer_number','Customer Number', 'required|trim');
		 $this->form_validation->set_rules('company','Customer Name',	 'required');
	}
 	function search(){$this->browse();}
 	       
	function browse($offset=0,$limit=10,$order_column='company',$order_type='asc')
	{
        $data['caption']='DAFTAR MASTER PELANGGAN';
        
		$data['controller']='customer';		
		$data['fields_caption']=array('Nama Pelanggan','Kode','Salesman','Telp','Termin','Wilayah','Kota','Fax','Kelompok');
		$data['fields']=array('company','customer_number','salesman','phone','payment_terms','region','city','fax','customer_record_type');
					
		if(!$data=set_show_columns($data['controller'],$data)) return false;
			
		$data['field_key']='customer_number';
		
		$this->load->library('search_criteria');
		
		$faa[]=criteria("Nama","sid_cust");
		$faa[]=criteria("Kode","sid_kode");
		$faa[]=criteria("Salesman","sid_sales");
		$faa[]=criteria("Kota","sid_city");
		$data['list_info_visible']=true;
		$data['criteria']=$faa;
		$data['import_visible']=true;
        $this->template->display_browse2($data);            
    }
    function browse_data($offset=0,$limit=10,$nama=''){
		$sql=$this->sql." where 1=1";
		if(lock_report_salesman())$sql.=" and salesman='".current_salesman()."'";
		if($this->input->get('sid_kode')!='')$sql.=" and customer_number like '".$this->input->get('sid_kode')."%'";
		if($this->input->get('sid_cust')!='')$sql.=" and company like '".$this->input->get('sid_cust')."%'";
		if($this->input->get('sid_sales')!='')$sql.=" and salesman='".$this->input->get('salesman')."'";
		if($this->input->get('sid_city')!='')$sql.=" and city='".$this->input->get('city')."'";
        
        if($this->input->get('tb_search')!='')$sql.=" and (company like '%".$this->input->get('tb_search')
            ."%' or customer_number like '%".$this->input->get('tb_search')."%')";
        
        $search="";
        if($this->input->get("tb_search")){
            $search=$this->input->get("tb_search");
        } 
		if(multi_company_single_db() && cid()!="ALL"){
			$sql.=" and cid='".cid()."'";
		}
		$sql.=" order by company";
		
        if($this->input->get("page"))$offset=$this->input->get("page");
        if($this->input->get("rows"))$limit=$this->input->get("rows");
        if($this->input->post("page"))$offset=$this->input->post("page");
        if($this->input->post("rows"))$limit=$this->input->post("rows");
        if($offset>0)$offset--;
        $offset=$limit*$offset;
        $sql.=" limit $offset,$limit";
		
        echo datasource($sql);		
    }
    function delete_json($id){
		if (! allow_mod2('_30013',true)) return false;
		$id=urldecode($id);
		$message="Unknown Error";
		$success=false;
		if($this->customer_model->before_delete($id)){
			$ret=$this->customer_model->delete($id);
			$this->syslog_model->add($id,$this->table_name,"delete");
			if($ret==""){
				$success=true;
				$message="Data sudah dihapus.";
			} else {
				$message=$ret;
			}
		} 
		$message2=$this->customer_model->last_error_message();
		if($message2!="")$message=$message2;
		
		echo json_encode(array("success"=>$success,"msg"=>$message));						
	}  
	function delete($id){
		if (! allow_mod2('_30013',true)) return false;
		$id=urldecode($id);
		if($this->customer_model->before_delete($id)){
			$ret=$this->customer_model->delete($id);
			$this->syslog_model->add($id,$this->table_name,"delete");
			if($ret==""){
				$this->syslog_model->add($id,"customer","delete");			
				$this->browse();
			} else {
				echo json_encode(array("success"=>false,"msg"=>$ret));			
			}
		}
		else {
				echo json_encode(array("success"=>false,"msg"=>$this->customer_model->last_error_message()));						
		}
	}
	function grafik_saldo2(){
		header('Content-type: application/json');
		$data['label']="Saldo Piutang";
		$data['data']=$this->customer_model->saldo_piutang_summary();
		echo json_encode($data);
	}
	function grafik_saldo3(){
		header('Content-type: application/json');
		$data['label']="Saldo Piutang";
		$data=$this->customer_model->saldo_piutang_summary();
		//$data2[]=null;
		//for($i=0;$i<count($data);$i++){
		//	$data2[]=array('label'=>$data[$i][0],'data'=>$data[$i][1]);
		//}
		echo json_encode($data);
	
	}
	function grafik_saldo(){


		$phpgraph = $this->load->library('PhpGraph');		
		$cfg['width'] = 800;
		$cfg['height'] = 200;
		$cfg['compare'] = false;
		$cfg['disable-values']=1;
		$chart_type='vertical-simple-column-graph';
		$data=$this->customer_model->saldo_piutang_summary();
		$file="tmp/".$chart_type.".png";
		$this->phpgraph->create_graph($cfg, $data,$chart_type,'Saldo Piutang Pelanggan',$file);
		echo '<img src="'.base_url().'/'.$file.'"/>';
		echo '*Display only top ten customer';
		
		
		
	}	

    function select($search=""){
        
        $search=urldecode($search);
        $sql=$this->sql;

        if($search!=""){
            $sql.=" where (customer_number like '$search%' 
                or company like '$search%')";
        }
        $sql.=" order by company";

        $offset=0; $limit=10;
        if($this->input->post("page"))$offset=$this->input->post("page");
        if($this->input->post("rows"))$limit=$this->input->post("rows");
        if($offset>0)$offset--;
        $offset=$limit*$offset;
        $sql.=" limit $offset,$limit";        
        
        echo datasource($sql);
    }
    
	function filter($search=''){
		$search=urldecode($search);
		echo datasource('select company,customer_number from customers');
	}
	function list_shipto($search=''){
		$search=urldecode($search);
		$sql="select location_code,contact,telp,alamat,kota,id	
		from customer_shipto 
		where customer_code='$search'";
		echo datasource($sql);
	}
	function shipto_add($cust){
		$cust=urldecode($cust);
		$data=$this->input->post();
		$data['customer_code']=$cust;
		if($this->customer_model->shipto_add($data)){
			echo json_encode(array("success"=>true));
		} else {
			echo json_encode(array("msg"=>"Error ".show_error('shipto_add')));
		}
	}
	function shipto_del(){
		$id=$this->input->post('line_number');
		if($this->customer_model->shipto_del($id)){
			echo json_encode(array("success"=>true));
		} else {
			echo json_encode(array("msg"=>"Error ".show_error('shipto_del')));
		}
	}
	function kartu_piutang($customer_number)
	{
		$customer_number=urldecode($customer_number);
		$date_from= $this->input->get('d1');
		$date_from=  date('Y-m-d H:i:s', strtotime($date_from));
		$date_to= $this->input->get('d2');
		$date_to = date('Y-m-d H:i:s', strtotime($date_to));
		
		$sql="select sum(amount) as saldo from qry_kartu_piutang 
			where customer_number='$customer_number' 
			and tanggal<'$date_from'";

        $query=$this->db->query($sql);
		$awal=$query->row()->saldo;
		$rows[0]=array("no_bukti"=>"SALDO","tanggal"=>"SALDO","jenis"=>"SALDO","jumlah"=>0,
			"saldo"=>number_format($awal));

		$sql="select no_bukti,tanggal,jenis,amount as jumlah
			from qry_kartu_piutang
			where customer_number='$customer_number' 
			and tanggal between '$date_from' and '$date_to' order by tanggal";

        $query=$this->db->query($sql);
		 
        $i=1;
		if($query)foreach($query->result_array() as $row) {
			$awal=$awal+$row['jumlah'];
			$row['jumlah']=number_format($row['jumlah']);
			$row["saldo"]=number_format($awal);
			$rows[$i++]=$row;
		};	
        $data['total']=$i;
        $data['rows']=$rows;
                    
        echo json_encode($data);

	}	
	function list_info($offset=0){
		if(isset($_GET['offset'])){
			$offset=$_GET['offset'];
		}
		$data['offset']=$offset;
		$this->load->library('search_criteria');

		$faa[]=criteria("Kode","sid_kode");
		$faa[]=criteria("Nama","sid_cust");
		$faa[]=criteria("Kota","sid_city");
		$faa[]=criteria("Kota","sid_sales");
	
		$data['criteria']=$faa;
		$data['criteria_text']=criteria_text($faa);
		$data['sid_kode']=$this->session->userdata('sid_kode');
		$data['sid_cust']=$this->session->userdata('sid_cust');
		$data['sid_city']=$this->session->userdata('sid_city');
		$data['sid_sales']=$this->session->userdata('sid_sales');
		
		$this->template->display_form_input('sales/info_list',$data);	
	}	
	function import_customer(){
		if(!$this->input->post()){
			$data['caption']="IMPORT DATA MASTER CUSTOMER";
			$this->template->display("sales/import_customer",$data);
		} else {
			$this->import_customer_run();
		}
	}
	function input_col($colname){
		$c=0;
		if($this->input->post($colname)!=""){
			$c=65-ord(strtoupper($this->input->post($colname)));
		}
		return abs($c);
	}
	function import_customer_run(){
		$c_kode=$this->input_col('kode');
		$c_nama=$this->input_col('nama');
		$c_alamat1=$this->input_col('alamat1');
		$c_alamat2=$this->input_col('alamat2');
		$c_kota=$this->input_col('kota');
		$c_wilayah=$this->input_col('wilayah');
		$c_provinsi=$this->input_col('provinsi');
		$c_negara=$this->input_col('negara');
		$c_telpon=$this->input_col('telpon');
		$c_fax=$this->input_col('fax');
		$c_hp=$this->input_col('hp');
		$c_salesman=$this->input_col('salesman');
		$c_kelompok=$this->input_col('kelompok');
		$c_kontak=$this->input_col('kontak');
		$c_email=$this->input_col('email');
        $c_tgl_tagih=$this->input_col('tgl_tagih');
        $c_credit_limit=$this->input_col('credit_limit');
        $c_payment_terms=$this->input_col('payment_terms');
        $c_saldo=$this->input_col('saldo');
        
		$filename=$_FILES["file_excel"]["tmp_name"];
		if($_FILES["file_excel"]["size"] > 0)
		{
			$file = fopen($filename, "r");
			$i=0;
			$ok=false;
			$this->db->trans_begin();
            $emapData = fgetcsv($file, 10000, chr(9));
            $total_piutang=0;
			while (($emapData = fgetcsv($file, 10000, chr(9))) !== FALSE)
			{
				//print_r($emapData[$c_kode]);
				//exit();
				$kode=$emapData[$c_kode];
				if(! ($kode == null or $kode == "" or $kode == "kode" ) ) {
					$i=1;
					$data["customer_number"]=$kode;
					if($c_nama>0)$data["company"]=$emapData[$c_nama];
					if($c_alamat1>0)$data["street"]=$emapData[$c_alamat1];
					if($c_alamat2>0)$data["suite"]=$emapData[$c_alamat2];
					if($c_kota>0)$data["city"]=$emapData[$c_kota];
					if($c_wilayah>0)$data["region"]=$emapData[$c_wilayah];
					//if($c_provinsi>0)$data["province"]=$emapData[$c_provinsi];
					if($c_negara>0)$data["country"]=$emapData[$c_negara];
					if($c_telpon>0)$data["phone"]=$emapData[$c_telpon];
					if($c_fax>0)$data["fax"]=$emapData[$c_fax];
					if($c_hp>0)$data["other_phone"]=$emapData[$c_hp];
					if($c_salesman>0)$data["salesman"]=$emapData[$c_salesman];
					if($c_kelompok>0)$data["customer_record_type"]=$emapData[$c_kelompok];
					if($c_kontak>0)$data["first_name"]=$emapData[$c_kontak];
					if($c_email>0)$data["email"]=$emapData[$c_email];
                    if($c_tgl_tagih>0)$data["tgl_tagih"]=$emapData[$c_tgl_tagih];
                    if($c_credit_limit>0)$data["credit_limit"]=c_($emapData[$c_credit_limit]);
                    if($c_payment_terms>0)$data["payment_terms"]=$emapData[$c_payment_terms];
                    if($c_saldo>0){
                        $data['credit_balance']=c_($emapData[$c_saldo]);
                        $total_piutang+=c_($emapData[$c_saldo]);                        
                    }
                    
					$data["create_by"]=user_id();
					$data['active']="1";
					if($this->customer_model->exist($kode)){
						unset($data['customer_number']);
						$ok=$this->customer_model->update($kode,$data)==1;
						echo "Update: ".$kode."</br>";
					} else {
						$ok=$this->customer_model->save($data)==1;
						echo "Insert: ".$kode."</br>";
					}
                    if($c_saldo>0){
                        $this->create_saldo_awal($kode,c_($emapData[$c_saldo]));
                    }
                    
				}
			}
			if ($this->db->trans_status() === FALSE)
			{
				$this->db->trans_rollback();
			}
			else
			{
				$this->db->trans_commit();
			}			
			fclose($file);
			if ($ok){echo json_encode(array("success"=>true));} else {echo json_encode(array('msg'=>'Some errors occured.'));}   	
		}
        if($this->input->post("chkUpdateCoaPiutang")){
            $this->update_saldo_coa($total_piutang);
        }

		echo "<div class='alert alert-success'>FINISH.</div>";
	}

    function create_saldo_awal($customer_number,$saldo){
        $this->load->model("invoice_model");
        $coa_piutang=0;
        if($qpref=$this->db->select("accounts_receivable    ")->get("preferences")){
            if($rpref=$qpref->row()){
                $coa_piutang=$rpref->accounts_receivable;
            }
        }
        if($qcust=$this->db->select("finance_charge_acct")->where("customer_number",$customer_number)->get("customers")){
            if($rcust=$qcust->row()){
                if($rcust->finance_charge_acct>0){
                    $coa_piutang=$rcust->finance_charge_acct;
                }
            }
        }
        $nomor_bukti="SALDO-$customer_number";
        $data['invoice_date']=date("Y-m-1");
        $data['invoice_number']=$nomor_bukti;
        $data['invoice_type']='I';        
        $data['sold_to_customer']=$customer_number;
        $data['payment_terms']="KREDIT";
        $data['due_date']=$data['invoice_date'];
        $data['comments']="SALDO AWAL";
        $data['salesman']='OFFICE';
        $data['account_id']=$coa_piutang;
        $data['amount']=$saldo;
        $data['saldo_invoice']=$saldo;
        $data['inv_amount']=$saldo;
        $data['warehouse_code']=current_gudang();
        $data['type_of_invoice']='Simple';
        
        $this->invoice_model->save($data);
        
        $detail['invoice_number']=$nomor_bukti;
        $detail['item_number']="SALDO";
        $detail['description']="SALDO";
        $detail['quantity']=1;
        $detail["price"]=$saldo;
        $detail['amount']=$saldo;
        $detail['warehouse_code']=current_gudang();
        
        $this->invoice_model->save_item($detail);
    }
    function update_saldo_coa($amount){
        $coa_piutang=0;
        if($qpref=$this->db->select("accounts_receivable")->get("preferences")){
            if($rpref=$qpref->row()){
                $coa_piutang=$rpref->accounts_receivable;
            }
        }
        $s="update chart_of_accounts set beginning_balance='$amount' where id='$coa_piutang'";
        $this->db->query($s);
    }
	
	function info($cust_no){
		$s="";
		if($row=$this->db->select("customer_number,company,street,suite,
				phone,fax,city,country,first_name")
				->where("customer_number",$cust_no)->get("customers")->row())
		{
			$s="<p><strong>$row->company [ $row->customer_number ] </strong></p>
			<p>$row->city - Ph/Fax: $row->phone / $row->fax </p>
			<p>Atn: $row->first_name</p>";
		}
		echo $s;
	}
    function rpt($id="",$d1="",$d2="",$rek=""){
		 $data['date_from']=date('Y-m-d 00:00:00');
         if($d1!="")$data["date_from"]=$d1;
		 $data['date_to']=date('Y-m-d 23:59:59');
         if($d2!="")$data["date_to"]=$d2;
		 $data['select_date']=true;
    	 switch ($id) {
			 case 'mutasi':
				 $data['criteria1']=true;
				 $data['label1']='Rekening';
				 $data['text1']='';
				 break;			 
			 default:
				 break;
		 }
		 $rpt='customer/rpt/'.$id;
		 $data['rpt_controller']=$rpt;
		 
		if(!$this->input->post('cmdPrint')){
			$this->template->display_form_input('criteria',$data,'');
		} else {
			$this->load->view('sales/rpt/'.$id);
		}
   }	
   function list_poin_reward($cust_code){
	   $s="select * from promosi_point_transactions where cust_code='$cust_code' ";
	   echo datasource($s);
   }
   	
	
}
