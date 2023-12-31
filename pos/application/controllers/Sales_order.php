<?php 

if(!defined('BASEPATH')) exit('No direct script access allowd');

class Sales_order extends CI_Controller {
    private $limit=10;
    private $sql="select i.sales_order_number,i.sales_date,i.due_date,i.amount, 
            i.sold_to_customer,c.company,i.salesman,c.city,i.warehouse_code,i.delivered,
			i.status,i.cid
            from sales_order i
            left join customers c on c.customer_number=i.sold_to_customer";
    private $controller='sales_order';
    private $primary_key='sales_order_number';
    private $file_view='sales/sales_order';
	private $table_name='sales_order';
	private $data_item=null;

	function __construct()
	{
		parent::__construct();        
		//if(!$this->access->is_login())redirect(base_url());
 		$this->load->helper(array('url','form','browse_select','mylib_helper'));
        $this->load->library('sysvar');
        $this->load->library('javascript');
        $this->load->library('template');
		$this->load->library('form_validation');
		$this->load->model('sales_order_model');
		$this->load->model('customer_model');
		$this->load->model('inventory_model');
        $this->load->model('type_of_payment_model');
		$this->load->model('salesman_model');
		$this->load->model('syslog_model'); 
	}
	function nomor_bukti($add=false)
	{
		$key="Sales Order Numbering";
		if($add){
		  	$this->sysvar->autonumber_inc($key);
		} else {			
			$no=$this->sysvar->autonumber($key,0,'!SO~$00001');
			for($i=0;$i<100;$i++){			
				$no=$this->sysvar->autonumber($key,0,'!SO~$00001');
				$rst=$this->sales_order_model->get_by_id($no)->row();
				if($rst){
				  	$this->sysvar->autonumber_inc($key);
				} else {
					break;					
				}
			}
			return $no;
					}
	}
	
	function set_defaults($record=NULL)
	{
            $data=data_table($this->table_name,$record);
            $data['mode']='';
            $data['message']='';
            
            if($record==NULL){
                $data['sales_order_number']="AUTO";    //$this->nomor_bukti();
                $data["payment_terms"]="KREDIT"; 
                $data["salesman"]="OFFICE";
                $data['warehouse_code']=current_gudang();
                $data["sold_to_customer"]="CASH";                
                $data['sales_date']= date("Y-m-d H:i:s");
                $data['due_date']= date("Y-m-d H:i:s");
                
            }    
            
            
			$data['customer_info']=""; 
			$data['cust_type']=""; 
			$data['status_list']=array("0"=>"Draft","1"=>"Open",
			     "2"=>"Close","3"=>"Canceled","4"=>"Pending","5"=>"Auto Close");
			
			$data['allow_add']=allow_mod('_30051');
			$data['allow_edit']=allow_mod('_30052');
			$data['allow_delete']=allow_mod('_30053');
			$data['allow_print']=allow_mod('_30056');
			$data['allow_posting']=allow_mod('_30051');
			$data['allow_approve']=allow_mod('_30057');
            
            $setcom['dlgBindId']="preferences";
            $setcom['dlgRetFunc']="$('#company_name').val(row.company_code);";
            $setcom['dlgCols']=array( 
                        array("fieldname"=>"company_code","caption"=>"Kode","width"=>"80px"),
                        array("fieldname"=>"company_name","caption"=>"Perusahaan","width"=>"200px")
                    );          
            $data['lookup_company_name']=$this->list_of_values->render($setcom);
                
            $setwh['dlgBindId']="warehouse";
            $setwh['dlgRetFunc']="$('#warehouse_code').val(row.location_number);
            $('#bill_to_contact').val(row.company_name);";
            $setwh['dlgCols']=array( 
                    array("fieldname"=>"location_number","caption"=>"Kode","width"=>"80px"),
                    array("fieldname"=>"attention_name","caption"=>"Nama Toko","width"=>"180px"),
                    array("fieldname"=>"company_name","caption"=>"Kode Pers","width"=>"50px"),
                    array("fieldname"=>"company","caption"=>"Perusahaan","width"=>"200px")
                );          
            
            $data['lookup_gudang']=$this->list_of_values->render($setwh);
            
            $setwh['dlgBindId']="salesman";
            $setwh['dlgRetFunc']="$('#salesman').val(row.salesman);";
            $setwh['dlgCols']=array( 
                        array("fieldname"=>"salesman","caption"=>"Salesman","width"=>"180px")
                    );          
            $data['lookup_salesman']=$this->list_of_values->render($setwh);
            
            $setwh['dlgBindId']="type_of_payment";
            $setwh['dlgRetFunc']="$('#payment_terms').val(row.type_of_payment);";
            $setwh['dlgCols']=array( 
                        array("fieldname"=>"type_of_payment","caption"=>"Termin","width"=>"180px")
                    );          
            $data['lookup_payment_terms']=$this->list_of_values->render($setwh);
    
            $data['lookup_customers']=$this->list_of_values->lookup_customers();
			$data['lookup_inventory']=$this->list_of_values->lookup_inventory();
	
			$user_admin=$this->session->userdata("user_admin");
			$data['user_admin']=$user_admin;
			$data['enabled_status']="disabled";
			if(allow_mod('status_so'))$data['enabled_status']='';
			if($user_admin)$data['enabled_status']="";
			$data['min_date']=$this->session->userdata("min_date","");
		
			return $data;
	}
	function index()
	{            
		if (!allow_mod2('_30050'))  exit;
        $this->browse();
	}
	function get_posts(){
            $data=data_table_post($this->table_name);
            return $data;
	}
	function add()
	{
		if (!allow_mod2('_30051'))  exit;
		 $data=$this->set_defaults();
		 $this->_set_rules();
		 if ($this->form_validation->run()=== TRUE){
			$data=$this->get_posts();
			$data['sales_order_number']=$this->nomor_bukti(); 
			$this->sales_order_model->save($data);
			$this->nomor_bukti(true);

            //redirect('/sales_order/view/'.$$data['purchase_order_number'], 'refresh');
		} else {
			$data['mode']='add';
			$data['message']='';
            //$data['sold_to_customer']=$this->input->post('sold_to_customer');
            //$data['customer_list']=$this->customer_model->select_list();
			//$data['salesman_list']=$this->salesman_model->select_list();
            $data['amount']=$this->input->post('amount');
            //$data['payment_terms_list']=$this->type_of_payment_model->select_list();
			$data['mode']='add';			
			$this->template->display_form_input($this->file_view,$data,'');			
		}        
	}
	function save()	{ 
		$data=$this->input->post();
		if(isset($data['sales_date']))$data['sales_date']=date_sql($data['sales_date']);
        $mode=$data['mode'];
        $id=$data['sales_order_number'];           
		if($mode=="add" || $id=="AUTO"){
	        $id=$this->nomor_bukti();
		} 
		 
		$data['sales_order_number']=$id;
		if(isset($data['delivered']))$data['delivered']=$data['delivered'];
		if(isset($data['disc_total_percent']))$data['discount']=$data['disc_total_percent']; 
		if(isset($data['total']))$data['amount']=$data['total']; 
		unset($data['mode']);
		unset($data['sub_total']);
		unset($data['disc_total_percent']);
		unset($data['total']);
		unset($data['cust_type']); 
			/*
			$data['sales_date']=$this->input->post('sales_date');
			$data['sold_to_customer']=$this->input->post('sold_to_customer');
			$data['salesman']=$this->input->post('salesman');
			$data['payment_terms']=$this->input->post('payment_terms');
			$data['due_date']=$this->input->post('due_date');
			$data['comments']=$this->input->post('comments');			
			$data['sales_tax_percent']=$this->input->post('sales_tax_percent');
			*/

	        $this->session->set_userdata('sales_order_number',$id);
			 
		if($mode=="add"){
		    $data["status"]=0;
			$ok=$this->sales_order_model->save($data);
			$this->syslog_model->add($id,"sales_order","add");

		} else {
			$ok=$this->sales_order_model->update($id,$data);
			$this->syslog_model->add($id,"sales_order","edit");

		}
		$this->recalc($id);
		if ($ok){
			if($mode=="add") $this->nomor_bukti(true);
			echo json_encode(array('success'=>true,"msg"=>"Sukses",'sales_order_number'=>$id,"data"=>$data));
		} else {
			echo json_encode(array('success'=>false,'msg'=>'Some errors occured.'));
		}
	}
	function update()
	{
		 $data=$this->set_defaults();
		 $this->_set_rules();
 		 $id=$this->input->post('sales_order_number');
		 if ($this->form_validation->run()=== TRUE){
			$data=$this->get_posts();
			 
			$this->sales_order_model->update($id,$data);
			$this->syslog_model->add($id,"sales_orde","edit");

            $message='Update Success';
		} else {
			$message='Error Update';
		}                
 		$this->view($id,$message);		
	}
	function view($id,$message=null){
		$ajax=false;
		if($this->input->get('json')!=""){
			$ajax=true;
		} else {
			if (!allow_mod2('_30050'))  exit;
		}
		$id=urldecode($id);
		$this->sales_order_model->recalc_ship_qty($id);

		 $data['id']=$id;
		 $model=$this->sales_order_model->get_by_id($id)->row();
		 $data=$this->set_defaults($model);
		 $data['mode']='view';
		 $data['message']=$message;
		 $data['customer_info']=$this->customer_model->info($data['sold_to_customer']);

		 if($ajax){			 
			unset($data['lookup_company_name']);
			unset($data['lookup_gudang']);
			unset($data['lookup_salesman']);
			unset($data['lookup_payment_terms']);
			unset($data['lookup_customers']);
			unset($data['lookup_inventory']);

			$items=$this->items($id,'',true);
			$data['items']=$items;
			$data['sub_total']=$this->db->query("select sum(amount) zamt  
				from sales_order_lineitems where sales_order_number='$id'")->row()->zamt;

			echo json_encode($data);
		 } else {
			$data['customer_list']=$this->customer_model->select_list();  
			$data['salesman_list']=$this->salesman_model->select_list();
			$data['cust_type']=$this->customer_model->customer_type($data['sold_to_customer']);
			$menu='sales/menu_sales_order';
			$this->session->set_userdata('_right_menu',$menu);
			$this->session->set_userdata('sales_order_number',$id);
			$data['payment_terms_list']=$this->type_of_payment_model->select_list();
			   
			$this->template->display_form_input($this->file_view,$data,'');		
		 }

	}
   
	function _set_rules(){	
		 $this->form_validation->set_rules('sales_order_number','Nomor Sales Order', 'required|trim');
		 $this->form_validation->set_rules('sales_date','Tanggal','callback_valid_date');
	}
	 
	function valid_date($str)
	{
	 if(!preg_match('/^[0-9]{4}-[0-9]{2}-[0-9]{2}$/',$str))
	 {
		 $this->form_validation->set_message('valid_date',
		 'Format tanggal salah, seharusnya yyyy-mm-dd');
		 return false;
	 } else {
	 	return true;
	 }
	}
	function search(){$this->browse();}
	
    function browse($offset=0,$limit=50,$order_column='sales_order_number',$order_type='asc'){
		$data['controller']=$this->controller;
		$data['_left_menu_caption']='Search';
		$data['fields_caption']=array('Nomor SO','Tanggal','Tgl Kirim','Jumlah','Nama Customer','Salesman'
			,'Terkirim','Status','Cid');
		$data['fields']=array('sales_order_number','sales_date','due_date','amount'
			,'company','salesman','delivered','status','cid');
					
		if(!$data=set_show_columns($data['controller'],$data)) return false;
			
		$data['field_key']='sales_order_number';
		$data['caption']='DAFTAR SALES ORDER';
        $data['fields_format_numeric']=array("amount");

		$this->load->library('search_criteria');
		
		$faa[]=criteria("Dari","sid_date_from","easyui-datetimebox");
		$faa[]=criteria("S/d","sid_date_to","easyui-datetimebox");
		$faa[]=criteria("Nomor SO","sid_so_number");
		$faa[]=criteria("Pelanggan","sid_cust");
		$faa[]=criteria("Salesman","sid_salesman");
		$faa[]=criteria("Terkirim","sid_delivered");
		$data['criteria']=$faa;
		$this->template->display_browse2($data);
    }
    function browse_data($offset=0,$limit=100,$nama=''){
		$time_start = microtime(true);		
    	$nama=$this->input->get('sid_cust');
		$no=$this->input->get('sid_so_number');
		$salesman=$this->input->get('sid_salesman');
		$delivered=$this->input->get('sid_delivered');
		
		$d1= date( 'Y-m-d H:i:s', strtotime($this->input->get('sid_date_from')));
		$d2= date( 'Y-m-d H:i:s', strtotime($this->input->get('sid_date_to')));
        if($d1<'2000-01-01')$d1=date("Y-m-1");        
        if($d2<'2000-01-01')$d2=date("Y-m-d H:i:s");        
        
        $sql=$this->sql." where 1=1";
        
        $tb_search=$this->input->get("tb_search");
        if($tb_search){
            if($tb_search!="")$no=$tb_search;
        }
		if($no!=''){
			$sql.=" and sales_order_number='".$no."'";
		} else {
			$sql.=" and sales_date between '$d1' and '$d2'";
			if($nama!='')$sql.=" and company like '$nama%'";	
		}
		if ($salesman!="") $sql.=" and salesman='$salesman'";
		if ($delivered!="") $sql.=" and delivered=$delivered";
		if(lock_report_salesman())$sql.=" and i.salesman='".current_salesman()."'";

		if($cust_no=$this->input->get("sid_cust_no")){
			$sql.=" and i.sold_to_customer='$cust_no'";
			$sql.=" ";
		}

		if(multi_company_single_db() && cid()!="ALL"){
			$sql.=" and i.cid='".cid()."'";
		}
		if($order_by = $this->input->get("order_by")){
			$sql.=" order by $order_by";
		}
        //$sql.=" limit $offset,$limit";
		//echo $sql;
		//get script end time
		$time_end = microtime(true);

		//calculate the difference between start and stop
		$time = $time_end - $time_start;

		//echo it 
		//echo "Did whatever in $time seconds\n";
        if($this->input->get("page"))$offset=$this->input->get("page");
        if($this->input->get("rows"))$limit=$this->input->get("rows");
        if($offset>0)$offset--;
        $offset=$limit*$offset;
        $sql.=" limit $offset,$limit";
		    

        echo datasource($sql);
		
		$time_end = microtime(true);

		//calculate the difference between start and stop
		$time = $time_end - $time_start;

		//echo it 
		//echo "Did whatever in $time seconds\n";
		
    }	 
	function delete($id){
		$ret=allow_mod2('_30053',true);
		$id=urldecode($id);
		$this->sales_order_model->delete($id);
		$this->syslog_model->add($id,"sales_order","delete");
		$json=$this->input->get("json");
		if($json){
			echo json_encode($ret);
		} else {
			$this->browse();
		}

	}
	function delete_json($id){
		$success=false;
		$message="Unknown Error";
		$id=urldecode($id);
		$ret=allow_mod2('_30053',true);
		if ($ret){
			$ret=$this->sales_order_model->delete($id);
		    $this->syslog_model->add($id,"sales_order","delete");   
			if($ret==""){
				$success=true;
				$message="Success";
			} else {
				$message=$this->sales_order_model->json_last_error();
			}
		}
		echo json_encode(array("success"=>$success,"msg"=>$message));

	}
    function detail(){
        $data['sales_date']=$this->input->get('sales_date');
        $data['sold_to_customer']=$this->input->get('sold_to_customer');
        $data['payment_terms']=$this->input->get('payment_terms');
        $data['comments']=$this->input->get('comments');
		$data['salesman']=$this->input->get('salesman');
		$data['due_date']=$this->input->get('due_date');
		$data['sales_order_number']=$this->nomor_bukti();	// ambil nomor terbaru
        $this->sales_order_model->save($data);
        $this->nomor_bukti(true);
		header("location: ".base_url()."index.php/sales_order/view/".$data['sales_order_number']);
    }
	function view_detail($nomor){
		$nomor=urldecode($nomor);
            $sql="select p.item_number,p.description,p.quantity 
            ,p.unit,p.price,p.amount,p.line_number
            from sales_order_lineitems p
            left join inventory i on i.item_number=p.item_number
            where sales_order_number='$nomor'";
            echo browse_simple($sql);
    }
	function items($nomor,$type='',$no_echo=false)
	{
		$nomor=urldecode($nomor);
		$sql="select p.item_number,p.description,p.quantity 
		,p.unit,p.price,p.discount,p.amount,p.line_number,p.ship_qty,p.ship_date
		,p.disc_2,p.disc_3,p.multi_unit,p.mu_qty,p.mu_harga,p.no_urut,
		p.warehouse_code,s.salesman
		from sales_order_lineitems p
		left join inventory i on i.item_number=p.item_number
		left join sales_order s on s.sales_order_number=p.sales_order_number
		where p.sales_order_number='$nomor'";
		if($no_echo) {
			return datasource($sql); 
		} else {
			echo datasource($sql);
		}
	}
    function add_item(){
    	$nomor=$this->input->get('sales_order_number');            
        if(!$nomor){
            $data['message']='Nomor SO tidak diisi.!';
			return false;
        }
        $data['sales_order_number']=$nomor;
        
        $this->load->model('inventory_model');
        $data['item_lookup']=$this->inventory_model->item_list();
        $this->load->view('sales/sales_order_add_item',$data);
    }
    function save_item(){
		$this->load->model('inventory_prices_model');
		$this->load->model("sales_order_lineitems_model");
		$this->load->model("sales/promosi_model");


		$id=$this->input->post('line_number');
		if($id!='')$data['line_number']=$id;		
        $item_no=$this->input->post('item_number');
		$so=$this->input->post('so_number');
		if($so==""){
			$so=$this->input->post("sales_order_number");
		}
		if($so=="null")$so="";
		$cmd=$this->input->post("cmd");
		if($cmd=="add_cart"){
			if($so==""){
				$so=$this->nomor_bukti();
				$this->nomor_bukti(true);
			}
		}

        $data['sales_order_number']=$so;
		$data['item_number']=$item_no;
		$data['description']=$this->input->post('description');
		$unit=$this->input->post('unit');
		if($unit==""){
			$unit=$this->input->post("unit_of_measure");
		}
		$cost=$this->input->post('cost');
		if($cost=="")$cost=0;
        $item=$this->inventory_model->get_by_id($data['item_number'])->row();
		if($item){
            $data['description']=$item->description;
			if($unit=="")$unit=$item->unit_of_measure;
			if($cost==0)$cost=$item->cost;
		}
        $qty=$this->input->post('quantity');
		if($qty=="")$qty=1;
		$price=$this->input->post('price');		
		if($price=="")$price=0;
		if($price==0){
			$price=$this->input->post("retail");
		}
		if($price=="")$price=0;

		$amount=$qty*$price;
		$disc1=$this->input->post('discount');
		if($disc1=="")$disc1=0;	if($disc1>1)$disc1=$disc1/100;
		$disc2=$this->input->post('disc_2');
		if($disc2=="")$disc2=0;	if($disc2>1)$disc2=$disc2/100;
		$disc3=$this->input->post('disc_3');
		if($disc3=="")$disc3=0; if($disc3>1)$disc3=$disc3/100;
		$disc_amt_1=$amount*$disc1;
		$amount=$amount-$disc_amt_1;
		$disc_amt_2=$amount*$disc2;
		$amount=$amount-$disc_amt_2;
		$disc_amt_3=$amount*$disc3;
		$amount=$amount-$disc_amt_3;
        $data['cost']=$cost;
		$data['unit']=$unit;
		$data['quantity']=$qty;        
		$data['discount']=$disc1;
		$data['discount_amount']=$disc_amt_1;
		$data['disc_2']=$disc2;
		$data['disc_amount_2']=$disc_amt_2;
		$data['disc_3']=$disc3;
		$data['disc_amount_3']=$disc_amt_3;
		$data['amount']=$amount;
		$data['price']=$price;
		
		// apabila default satuan tidak sama dg inputan 
		$lFoundOnPrice=false;
		if($item) {
		  	if ($item->unit_of_measure!=$data['unit']) {
				if($unit_price=$this->inventory_prices_model->get_by_id($data['item_number'],
					$data['unit'])->row())
				{				 
					$lFoundOnPrice=true;
					if($unit_price->quantity_high>0) $data['mu_qty']=$data['quantity']*$unit_price->quantity_high;
					$data['mu_harga']=$item->cost_from_mfg;
					if($data['mu_harga']==0)$data['mu_harga']=$item->cost;			
					$data['multi_unit']=$item->unit_of_measure;			
				}
			}
		}
		if($unit=exist_unit($data['unit']) && !$lFoundOnPrice ){
			$lFoundOnPrice=true;
			$data['mu_qty']=$data['quantity']*$unit['unit_value'];
			$data['mu_harga']=item_sales_price($data['item_number']);
			$data['multi_unit']=$unit['from_unit'];		
		} 
		if(!$lFoundOnPrice){
			$data['mu_qty']=$data['quantity'];
			$data['mu_harga']=$data['price'];
			$data['multi_unit']=$data['unit'];
		}			
		if($id!=''){
			$ok=$this->sales_order_lineitems_model->update($id,$data);
		} else {
        	$ok=$this->sales_order_lineitems_model->save($data);
		}
		if($qty_extra=$this->promosi_model->promo_qty_extra($item_no,$data['quantity'])){
			if($qty_extra>0){
				$data['description']="***extra ".$data['description'];
				$data["quantity"]=$qty_extra;
				$data['price']=0;				$data['amount']=0;
				$data['discount']=0;			$data['discount_amount']=0;
				$data['disc_2']=0;				$data['disc_amount_2']=0;
				$data['disc_3']=0;				$data['disc_amount_3']=0;
				$this->sales_order_lineitems_model->save($data);
			}
		}
		
		$this->sales_order_model->recalc($so);
		$item_count=0;
		$item_amount=0;
		$sql="select count(1) as cnt,sum(amount) as amt from sales_order_lineitems where sales_order_number='$so'";
		if($q=$this->db->query($sql)){
			$item_count=$q->row()->cnt;
			$item_amount=$q->row()->amt;
		}
		$data["item_count"]=$item_count;
		$data["item_amount"]=$item_amount;
		$data["success"]=$ok;

		if ($ok){
			echo json_encode($data);
		} else {
			echo json_encode(array('msg'=>'Some errors occured.'));
		}
    }        
	function recalc($nomor){
		$nomor=urldecode($nomor);
		$this->sales_order_model->recalc($nomor);
	}
    function delete_item($id=0){
		$id=urldecode($id);
    	if($id==0)$id=$this->input->post('line_number');
        $this->load->model('sales_order_lineitems_model');
        if($this->sales_order_lineitems_model->delete($id)) {
			echo json_encode(array('success'=>true));
		} else {
			echo json_encode(array('msg'=>'Some errors occured.'));
		}
    }        
    function print_so($nomor){
		$nomor=urldecode($nomor);
        $invoice=$this->sales_order_model->get_by_id($nomor)->row();
		 
		$saldo=$this->sales_order_model->recalc($nomor);
		$data['sales_order_number']=$invoice->sales_order_number;
		$data['sales_date']=$invoice->sales_date;
		$data['sold_to_customer']=$invoice->sold_to_customer;
		$data['payment_terms']=$invoice->payment_terms;
		$data['amount']=$invoice->amount;
		$data['sub_total']=$invoice->subtotal;
		$data['discount']=$invoice->discount;
		$data['disc_amount']=$invoice->subtotal*$invoice->discount;
		$data['freight']=$invoice->freight;
		$data['others']=$invoice->other;
		$data['tax']=$invoice->sales_tax_percent;
		$data['tax_amount']=$invoice->sales_tax_percent*($data['sub_total']-$data['disc_amount']);
		$data['comments']=$invoice->comments;
		$data['salesman']=$invoice->salesman;
		$data['due_date']=$invoice->due_date;
		
        $data['content']=load_view('sales/rpt/print_so',$data);
        $this->load->view('pdf_print',$data);
   	}
	function list_open_so($customer){
		$customer=urldecode($customer);
		$sql="select p.sales_order_number,p.sales_date,p.due_date,p.payment_terms,p.salesman,
		 p.sold_to_customer,c.company
		from sales_order  p
		left join customers c on c.customer_number=p.sold_to_customer
		where p.sold_to_customer='$customer'";
		echo browse_simple($sql,'',500,300,'dgSoList');

	}
	function select_so_open($search='',$cust=""){
		$search=urldecode($search);
		$sql="select sales_order_number,sales_date,sold_to_customer,company
		 from sales_order so left join customers c on c.customer_number=so.sold_to_customer
		 where (delivered=false or delivered is null)";
         if($search!="")$sql.=" and sales_order_number='$search'";
         if($cust!="")$sql.=" and sold_to_customer='$cust'";
		 $sql.=" limit 100";
         
            
		echo datasource($sql);
		
	}  
	
	function list_item_for_do($nomor){
		$s="select *,quantity-coalesce(ship_qty,0) as q_sisa  
		from sales_order_lineitems where sales_order_number='$nomor' 
		order by line_number";	
		echo datasource($s,false,"",0,"q_sisa","line_number");
	}

	function list_item_delivery($nomor){
		$nomor=urldecode($nomor);
		$this->load->model('sales_order_lineitems_model');
		$query=$this->db->query("select *
			from sales_order_lineitems where sales_order_number='$nomor'");
		
		$table="
		<p>Silahkan isi quantity pengiriman dikolom [Kirim] dibawah ini</p>
		<table class='table2' width='100%'>
		<thead><tr><th>Item Number</th>
			<th>Description</th>
			<th>Order</th>
			<th>Unit</th>
			<th>Tkirim</th>
			<th>Sisa</th>
			<th>Kirim</th>
			<th>Unit</th>
			<th>Cmd</th>
		</tr></thead>";
		
		$table.="
		<tbody>";
		$row_cnt=0;
		foreach($query->result() as $row){
			$qty_sisa=$row->quantity-$row->ship_qty;
			$q_tkirim=0;
			if($row->ship_qty)$q_tkirim=$row->ship_qty;
			if($qty_sisa>0) {
				$row_cnt++;
				$table.="<tr><td>".$row->item_number."</td><td>".$row->description."</td><td>"
				.$row->quantity."</td><td>".$row->unit."</td>
				<td>".$q_tkirim."</td><td>".$qty_sisa."</td>
				<td><input type='text' name='qty_order[]' style='width:80px' value='' 
				    id='qty_id_$row->line_number' onblur='qty_max($qty_sisa,$row->line_number);return false;'</td>
				<td><input type='text' name='qty_unit[]' style='width:80px' value='' '</td>
				<td><input onclick='cek_this($row->line_number,$qty_sisa);return false' type='checkbox' name='cek[]' style='width:20px;height:20px'  '</td>
				<input type='hidden' name='line_number[]' value='".$row->line_number."'>
				</tr>";
			}
		}
		$table.="</tbody>
		</table>";
		echo $table;		
		if($row_cnt==0){
			$sql="update sales_order set delivered=true where sales_order_number='$nomor'";
			$this->db->query($sql);
		}	 

	}
	function delivery($sales_order_number) {
		$sales_order_number=urldecode($sales_order_number);
		$sql="select i.invoice_number,invoice_date,il.warehouse_code,il.item_number,il.description,il.quantity,il.unit
			from invoice i left join invoice_lineitems il on il.invoice_number=i.invoice_number
			where invoice_type='D' 
			and sales_order_number='$sales_order_number'";
		  
		echo datasource($sql);
	}
	function view_delivery($sales_order_number)
	{             
		$sales_order_number=urldecode($sales_order_number);
		$this->load->model('invoice_model');
		$sql="select distinct invoice_number as nomor_surat_jalan,
			invoice_date as tanggal,sales_order_number,warehouse_code 
			from invoice
			where invoice_type='D' 
			and sales_order_number='$sales_order_number'";
		$data['list_delivery']=browse_simple($sql, 
				"Daftar Pengiriman atas nomor sales order [".$sales_order_number."]"
				, 400, 0, "dgItem", "cmdButtons");
		$sales=$this->sales_order_model->get_by_id($sales_order_number)->row();
		$data['sold_to_customer']=$sales->sold_to_customer;
		$data['customer_info']=$this->customer_model->info($sales->sold_to_customer);
		$data['sales_order_number']=$sales_order_number;
		$this->template->display('sales/list_delivery',$data);            
	}
	function sub_total($nomor){
		$nomor=urldecode($nomor);
		$disc_prc=$_GET['discount'];
		if($disc_prc=='')$disc_prc=0;
		$tax=$_GET['tax'];if($tax=='')$tax=0;
		
		$sql="update sales_order set discount='".$disc_prc."',sales_tax_percent='".$tax
			."',freight='".$_GET['freight']."',other='".$_GET['other']."'
			where sales_order_number='$nomor'";
			
		$rs=$this->db->query($sql);
		$saldo=$this->sales_order_model->recalc($nomor);
		$sub_total=$this->sales_order_model->sub_total;
		$data=array('sub_total'=>$sub_total,'amount'=>$this->sales_order_model->amount,
		'disc_amount_1'=>$this->sales_order_model->disc_amount_1,'tax'=>$this->sales_order_model->tax);
		echo json_encode($data);				
	}
	function find($sales_order_number=''){
		$sales_order_number=urldecode($sales_order_number);
		$query=$this->db->query("select s.sales_order_number,s.sales_date,s.sold_to_customer,
		c.company from sales_order s left join customers c on s.sold_to_customer=c.customer_number");
		echo json_encode($query->row_array());
 	}
	function approve($sales_order_number=''){
		$sales_order_number=urldecode($sales_order_number);
		$sql="update sales_order set status=1
			where sales_order_number='$sales_order_number'";
		
		if($qry=$this->db->query($sql)){
			echo json_encode(array('success'=>true));
		} else {
			echo json_encode(array('success'=>false));
		}
	}			
		
	function print_more(){
		echo "Modul ini belum tersedia !";
	}	
	function cart($nomor){
		$s="select sol.item_number,sol.description,sol.quantity, 
		sol.unit,sol.discount,sol.price, sol.amount, sol.line_number,sol.unit, 
		i.special_features,i.item_picture,i.unit_of_measure 
		from sales_order_lineitems sol left join inventory i on i.item_number=sol.item_number 
		 where sales_order_number='$nomor'";
		echo datasource($s);
	}
	function checkout($nomor_so=""){
		$sales_order_number=$this->input->post("sales_order_number");
		if($nomor_so!="")$sales_order_number=$nomor_so;
		$sold_to_customer=$this->input->post("sold_to_customer");
		$shipped_via=$this->input->post("shipped_via");
		if($sales_order_number==""){
			echo json_encode(array("success"=>false,"msg"=>"Nomor Order tidak ada !"));
			return false;
		}
		if($sold_to_customer==""){
			echo json_encode(array("success"=>false,"msg"=>"Pelanggan tidak terdaftar !"));
			return false;
		}
		if($shipped_via==""){
			echo json_encode(array("success"=>false,"msg"=>"Jasa Pengiriman tidak terdaftar !"));
			return false;
		}
		$data["sales_order_number"]=$sales_order_number;
		$data["sold_to_customer"]=$sold_to_customer;

		$ongkos=0;
		if($shipped_via=="TIKI"){
			$ongkos=5000;
		} else if($shipped_via=="JNE"){
			$ongkos=5000;
		}		
		$data["shipped_via"]=$shipped_via;
		$data["freight"]=$ongkos;

		$data["payment_terms"]="KREDIT";

		$s="select sum(amount) as zamt from sales_order_lineitems 
		where sales_order_number='$sales_order_number'";
		$item_amount=$this->db->query($s)->row()->zamt;


		$amount=$item_amount+$ongkos;
		$data["amount"]=$amount;
		$data['sales_date']= date( 'Y-m-d H:i:s', now());

		if($this->exist($sales_order_number)){
			unset($data['sales_order_number']);
			$result = $this->sales_order_model->update($sales_order_number,$data);

		} else {
			$result = $this->sales_order_model->save($data);

		}
		$data['success']=$result;
		echo json_encode($data);

	}
	function exist($nomor){
		return $this->db->query("select count(1) as cnt from sales_order 
			where sales_order_number='$nomor'")->row()->cnt>0;
	}
}

?>
