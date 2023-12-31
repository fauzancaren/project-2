<?php if(!defined('BASEPATH')) exit('No direct script access allowd');

class Invoice extends CI_Controller {
    private $limit=10;
    private $sql="select i.invoice_number,i.invoice_date,i.amount, 
            c.company,i.salesman,i.warehouse_code
            from invoice i
            left join customers c on c.customer_number=i.sold_to_customer
            where  invoice_type='i' ";
    private $controller='invoice';
    private $primary_key='invoice_number';
    private $file_view='sales/invoice';
    private $table_name='invoice';
	function __construct()
	{
		parent::__construct();        
      
		if(!$this->access->is_login())redirect(base_url());
 		$this->load->helper(array('url','form','browse_select','mylib_helper'));
        $this->load->library('sysvar');
        $this->load->library('javascript');
        $this->load->library('template');
		$this->load->library('form_validation');
		$this->load->model('invoice_model');
		$this->load->model('customer_model');
        $this->load->model('inventory_model');
        $this->load->model('type_of_payment_model');
		$this->load->model('salesman_model');
		$this->load->model('invoice_lineitems_model');
		$this->load->model("payment_model");
		$this->load->model('syslog_model');
        $this->load->model("company_model");
        $this->load->model("shipping_locations_model");
        
	}

    function next_number(){
        $ret=$this->nomor_bukti();
        $tanggal=date("Y-m-d H:i:s");
        if($set_tanggal=$this->session->userdata("set_tanggal")){
            $tanggal=$set_tanggal;
        }
		
        echo json_encode(array("success"=>true,"nomor"=>$ret,"tanggal"=>$tanggal));
    }
	function nomor_bukti($add=false)
	{
		$key="Invoice Numbering";
		if($add){
		  	$this->sysvar->autonumber_inc($key);
		} else {			
			$no=$this->sysvar->autonumber($key,0,'!FJ~$00001');
			for($i=0;$i<100;$i++){			
				$no=$this->sysvar->autonumber($key,0,'!FJ~$00001');
				$rst=$this->invoice_model->get_by_id($no)->row();
				if($rst){
				  	$this->sysvar->autonumber_inc($key);
				} else {
					break;					
				}
			}
			return $no;
					}
	}

	function set_defaults($record=NULL){
		$data=data_table($this->table_name,$record);
 
		$data['mode']='';
		$data['message']='';
        $data['warehouse_code']=$this->access->cid;
		if($record==NULL)$data['invoice_date']= date("Y-m-d");
		if($record==NULL)$data['invoice_number']=$this->nomor_bukti();
        $data['invoice_type']='I';
		 $data['summary_info']='';
		$data['customer_info']='';
		$data['discount_amount']=0;
		$data['tax_amount']=0;
		$data['cust_type']="";
		return $data;
	}
	function index()
	{          
		if (!allow_mod2('_30160'))  exit;
		if(!$this->access->is_login()){
		    redirect(base_url());
			exit;
		}				
        $this->browse();
	}
	function get_posts(){
            $data=data_table_post($this->table_name);
            return $data;
	}
	function add()
	{
		if (!allow_mod2('_30161'))  exit;
		 $data=$this->set_defaults();
		 $this->_set_rules();
		 if ($this->form_validation->run()=== TRUE){
			$data=$this->get_posts(); 
			$data['invoice_number']=$this->nomor_bukti();
			$data['invoice_type']='I';
			
			$this->invoice_model->save($data);
			$this->nomor_bukti(true);
			$id=$data['invoice_number'];
			$this->syslog_model->add($data['invoice_number'],"invoice","add");

            $this->view($id,'Finish');
   		} else {
			$this->load->model('invoice_lineitems_model');                       
			$data['mode']='add';
			$data['message']='';
            $data['sold_to_customer']=$this->input->post('sold_to_customer');
//            $data['customer_list']=$this->customer_model->select_list();
			$data['salesman_list']=$this->salesman_model->select_list();
            $data['amount']=$this->input->post('amount');
            $data['payment_terms_list']=$this->type_of_payment_model->select_list();
			$this->template->display_form_input($this->file_view,$data,'');			
		}
	}
	function save()
	{
		$mode=$this->input->post('mode');
		if($mode=="add"){
	        $id=$this->nomor_bukti();
		} else {
			$id=$this->input->post('invoice_number');			
		}
		$data=$this->input->post();
		$data['invoice_number']=$id;
		$data['invoice_type']='I';
		$data['type_of_invoice']='Simple';
		unset($data['mode']);
		unset($data['cust_type']); 
        $this->session->set_userdata('invoice_number',$id);
		 
		if($mode=="add"){
			$ok=$this->invoice_model->save($data);
			$this->syslog_model->add($id,"invoice","add");

		} else {
			$ok=$this->invoice_model->update($id,$data);			
			$this->syslog_model->add($id,"invoice","edit");

		}
		$this->invoice_model->recalc($id);
		if ($ok){
			if($mode=="add")$this->nomor_bukti(true);
			echo json_encode(array('success'=>true,'invoice_number'=>$id));
		} else {
			echo json_encode(array('msg'=>'Some errors occured.'));
		}
        $this->customer_model->recalc_piutang($id);
	}
	function update()
	{
		 $data=$this->set_defaults();              
		 $this->_set_rules();
 		 $id=$this->input->post('invoice_number');
		 if ($this->form_validation->run()=== TRUE){
			$data=$this->get_posts();
			$data['invoice_type']='I'; 
			$this->invoice_model->update($id,$data);
            $message='Update Success';
			$this->syslog_model->add($id,"invoice","edit");

		} else {
			$message='Error Update';
		}
                
 		$this->view($id,$message);		
	}
	function add_item(){
        	$nomor=$this->input->get('invoice_number');            
            if(!$nomor){
                $data['message']='Nomor faktur tidak diisi.!';
				echo $data['message'];
				return false;
            }
            $data['invoice_number']=$nomor;
            $data['item_lookup']=$this->inventory_model->item_list();
            $this->load->view('sales/invoice_add_item',$data);
   }
    function save_item(){
        $this->load->model('invoice_lineitems_model');
		$this->load->model("sales/promosi_model");
		
        $item_no=$this->input->post('item_number');
		$faktur=$this->input->post('invoice_number_item');
        if(!($item_no||$faktur)){
        	$msg='Kode barang atau nomor faktur tidak diisi !';
        }
		$data=$this->input->post();
		$data['invoice_number']=$faktur; unset($data['invoice_number_item']);
		//var_dump($data);
       	$ok=$this->invoice_lineitems_model->save($data);
		
		if($qty_extra=$this->promosi_model->promo_qty_extra($item_no,$data['quantity'])){
			if($qty_extra>0){
				$data['description']="***extra ".$data['description'];
				$data["quantity"]=$qty_extra;
				$data['price']=0;				$data['amount']=0;
				$data['discount']=0;			$data['discount_amount']=0;
				$data['disc_2']=0;				$data['disc_amount_2']=0;
				$data['disc_3']=0;				$data['disc_amount_3']=0;
				$this->invoice_lineitems_model->save($data);
			}
		}
		
		$this->invoice_model->recalc($faktur);
		if ($ok){
			echo json_encode(array('success'=>true));
		} else {
			echo json_encode(array('msg'=>'Some errors occured.'));
		}
    }        
    function delete_item($id=0){
		$id=urldecode($id);
    	if($id==0)$id=$this->input->post('line_number');
        $this->load->model('invoice_lineitems_model');
        if($this->invoice_lineitems_model->delete($id)) {
			echo json_encode(array('success'=>true));

		} else {
			echo json_encode(array('msg'=>'Some errors occured.'));
		}
    }        
	function view($id,$message=null){
		$id=urldecode($id);
		 $data['id']=$id;
		 $this->invoice_model->recalc($id);
		 $model=$this->invoice_model->get_by_id($id)->row();
		 $data=$this->set_defaults($model);
		 $data['mode']='view';
         $data['message']=$message;
         $data['customer_list']=$this->customer_model->select_list();  
         $data['customer_info']=$this->customer_model->info($data['sold_to_customer']);
		 $data['salesman_list']=$this->salesman_model->select_list();
		 $data['payment_amount']=$this->invoice_model->amount_paid;
		 $data['retur_amount']=$this->invoice_model->retur_amount;
		 $data['crdb_amount']=$this->invoice_model->crdb_amount;
		 $data['saldo']=$this->invoice_model->saldo;
		 $data['amount']=$model->amount;
		 $data['subtotal']=$model->subtotal;
		 $data['discount']=$model->discount;
         $data['cust_type']=$this->customer_model->customer_type($data['sold_to_customer']);
         //$data['payment_terms']=$model->payment_terms;
         //$data['type_of_invoice']=$model->type_of_invoice;
			
		$data['salesman_list']=$this->salesman_model->select_list();
        $data['payment_terms_list']=$this->type_of_payment_model->select_list();
		$data['summary_info']=$this->summary($id);
			
         $menu='sales/menu_invoice';
		 $this->session->set_userdata('_right_menu',$menu);
         $this->session->set_userdata('invoice_number',$id);
         $this->template->display('sales/invoice',$data);                 
	}
	 // validation rules
	function _set_rules(){	
		 $this->form_validation->set_rules('invoice_number','Nomor Faktur', 'required|trim');
		 $this->form_validation->set_rules('invoice_date','Tanggal','callback_valid_date');
		 $this->form_validation->set_rules('sold_to_customer','Pelanggan', 'required|trim');
	}
	 // date_validation callback
	function valid_date($str)
	{
	 if(!preg_match('/^[0-9]{4}-[0-9]{2}-[0-9]{2}$/',$str))
	 {
		 $this->form_validation->set_message('valid_date','Format tanggal salah, seharusnya yyyy-mm-dd');
		 return false;
	 } else {
	 	return true;
	 }
	}
	function search()
	{
		$this->browse();
		
	}
	
    function browse($offset=0,$limit=50,$order_column='sales_order_number',$order_type='asc'){

	
		$data['controller']=$this->controller;
		$data['fields_caption']=array('Nomor Faktur','Tanggal','Jumlah','Nama Customer',
			'Salesman','Gudang');
		$data['fields']=array('invoice_number','invoice_date','amount', 
            'company','salesman','warehouse_code');
		$data['field_key']='invoice_number';
		$data['caption']='DAFTAR FAKTUR PENJUALAN';
		$data['posting_visible']=true;

		$this->load->library('search_criteria');
		
		$faa[]=criteria("Dari","sid_date_from","easyui-datetimebox");
		$faa[]=criteria("S/d","sid_date_to","easyui-datetimebox");
		$faa[]=criteria("Nomor Faktur","sid_number");
		$faa[]=criteria("Pelanggan","sid_cust");
		$faa[]=criteria("Salesman","sid_salesman");
		$faa[]=criteria("Posted","sid_posted");
		
		$data['criteria']=$faa;
        $this->template->display_browse2($data);            
    }
    function browse_data($offset=0,$limit=100,$nama=''){
    	$nama=$this->input->get('sid_cust');
		$no=$this->input->get('sid_number');
		$d1= date( 'Y-m-d H:i:s', strtotime($this->input->get('sid_date_from')));
		$d2= date( 'Y-m-d H:i:s', strtotime($this->input->get('sid_date_to')));
        $sql=$this->sql;
		if($no!=''){
			$sql.=" and invoice_number='".$no."'";
		} else {
			$sql.=" and invoice_date between '$d1' and '$d2'";
			if($nama!='')$sql.=" and company like '$nama%'";	
			if($this->input->get('sid_salesman')!='')$sql.=" and salesman like '".$this->input->get('salesman')."%'";
			if($this->input->get('sid_posted')!=''){
				if($this->input->get('sid_posted')=='1'){
					$sql.=" and posted=true";
				} else {
					$sql.=" and posted=false";				
				}
			}
		}
		if(lock_report_salesman())$sql.=" and i.salesman='".current_salesman()."'";
        //$sql.=" limit $offset,$limit";
        echo datasource($sql);
    }	 
	function amount_paid($faktur){
			$faktur=urldecode($faktur);
			return $this->invoice_model->paid_amont($faktur);}
	function amount_retur($faktur){
			$faktur=urldecode($faktur);
			return $this->invoice_model->retur_amount($faktur);}
	function amount_crdb($faktur){
			$faktur=urldecode($faktur);
			return $this->invoice_model->crdb_amount($faktur);}
	
	function delete($id){
		if (!allow_mod2('_30163',true))  exit;
		$id=urldecode($id);
		$this->load->model("periode_model");
		$this->load->model("invoice_model");
		$q=$this->invoice_model->get_by_id($id);
		if($this->periode_model->closed($q->row()->invoice_date)){
				$message="Periode sudah ditutup tidak bisa dihapus !";
				$this->view($id,$message);
				return false;
		}
		$this->load->model('jurnal_model');
		 
		if($this->jurnal_model->get_by_gl_id($id)->row()) {
			$message="Sudah dijurnal tidak bisa dihapus !";
			$this->view($id,$message);
			return false;
		}
		
		$cnt_pay=$this->db->query("select count(1) as cnt from payments where invoice_number='$id'")->row()->cnt;
		if($cnt_pay){
			$message="Faktur ini sudah ada pembayaran tidak bisa dihapus !";
			$this->view($id,$message);
			return false;
		}

		if ($this->amount_retur($id)>0){
			$message="Faktur ini sudah ada retur tidak bisa dihapus !";
			$this->view($id,$message);
			return false;
		}
		if ($this->amount_crdb($id)>0){
			$message="Faktur ini sudah ada credit memo tidak bisa dihapus !";
			$this->view($id,$message);
			return false;
		}
	 	$this->invoice_model->delete($id);
		$this->syslog_model->add($id,"invoice","delete");

        $this->browse();
	}
    function detail(){
        $data['invoice_date']=isset($_GET['invoice_date'])?$_GET['invoice_date']:'';
        $data['sold_to_customer']=isset($_GET['sold_to_customer'])?$_GET['sold_to_customer']:'';
        $data['payment_terms']=isset($_GET['payment_terms'])?$_GET['payment_terms']:'';
        $data['comments']=isset($_GET['comments'])?$_GET['comments']:'';
		$data['salesman']=isset($_GET['salesman'])?$_GET['salesman']:'';
		$data['invoice_number']=$this->nomor_bukti();	// ambil nomor terbaru
        $this->invoice_model->save($data);
        $this->nomor_bukti(true);
		header("location: ".base_url()."index.php/invoice/view/".$data['invoice_number']);
    }
	function view_detail($nomor){
		$nomor=urldecode($nomor);
        $sql="select p.item_number,i.description,p.quantity 
        ,p.unit,p.price,p.amount,p.line_number
        from invoice_lineitems p
        left join inventory i on i.item_number=p.item_number
        where invoice_number='$nomor'";
        $table=browse_simple($sql);
		$btn=link_button("Addnew", "addnew_item()","edit");
		$btn.=link_button("Remove", "remove_item()","remove");
		$btn.=link_button("Refresh", "refresh_items()","ok");
		$scr="
			<script src=\"".base_url()."js/jquery/jquery-1.8.0.min.js\"></script>
			<script src=\"".base_url()."js/jquery-ui/jquery.easyui.min.js\"></script>
		";
		echo $btn.$table;
		
   }
    function print_faktur($nomor){
		$nomor=urldecode($nomor);
        $invoice=$this->invoice_model->get_by_id($nomor)->row();
		$saldo=$this->invoice_model->recalc($nomor);
		$data['invoice_number']=$invoice->invoice_number;
		$data['invoice_date']=$invoice->invoice_date;
		$data['sold_to_customer']=$invoice->sold_to_customer;
		$data['comments']=$invoice->comments;
		$data['sales_order_number']=$invoice->sales_order_number;
		$data['due_date']=$invoice->due_date;
		$data['amount']=$invoice->amount;
		$data['sub_total']=$invoice->subtotal;
		$data['discount']=$invoice->discount;
		$data['disc_amount']=$invoice->subtotal*$invoice->discount;
		$data['freight']=$invoice->freight;
		$data['others']=$invoice->other;
		$data['tax']=$invoice->sales_tax_percent;
		$data['tax_amount']=$invoice->sales_tax_percent*($data['sub_total']-$data['disc_amount']);
        $data['content']=load_view('sales/rpt/print_faktur',$data);    	
        $this->load->view('pdf_print',$data);    	
    }
	function select_list(){
		
		$q=$this->input->get('q');
		$cst=$this->input->get('cust');
		if($q){
			if($q=='not_paid'){				
				$sql="select invoice_number,invoice_date,due_date,amount,payment_terms
				from invoice 
				where invoice_type='I' and (paid=false or isnull(paid))
				and sold_to_customer='$cst'";
				$query=$this->db->query($sql);
				$i=0;
				$this->load->model('invoice_model');
				$data='';
				foreach($query->result() as $row){
					$saldo=$this->invoice_model->recalc($row->invoice_number);
					$data[$i][]=$row->invoice_number;
					$data[$i][]=$row->invoice_date;
					$data[$i][]=$row->due_date;
					$data[$i][]=$row->payment_terms;
					$data[$i][]=$row->amount;
					$data[$i][]=$saldo;
					$data[$i][]=form_input('bayar[]');
					$data[$i][]=form_hidden('faktur[]',$row->invoice_number);
					$i++;
				}
				
				$this->load->library('browse');
				$header=array('Faktur','Tanggal','Jth Tempo','Termin','Jumlah','Saldo','Bayar');
				$this->browse->set_header($header);
				$this->browse->data($data);
//				$this->browse->add_row(array($row->invoice_number,
//					$row->invoice_date,$row->due_date,$row->payment_terms));
				echo $this->browse->refresh();
			}
		}
	}
	function invoice_not_paid($customer_number){
		$customer_number=urldecode($customer_number);
		$this->load->model('invoice_model');
		$sql="select invoice_number,invoice_date,due_date,amount,payment_terms 
		from invoice
		where invoice_type='I' and (paid=false or isnull(paid))
		and sold_to_customer='$customer_number' 
		";
 
		$query=$this->db->query($sql);
		$i=0;
		$rows[0]='';
		if($query){ 
			foreach($query->result_array() as $row){
				$nomor=$row['invoice_number'];
				$saldo=$this->invoice_model->recalc($nomor);
				if($saldo!=0){
					$row['amount']=number_format($row['amount']);
					$row['saldo']=number_format($saldo);
					$row['bayar']=form_input("bayar[]","","style='width:100px;color:black;text-align:right'");
					$row['invoice_number']=$nomor.form_hidden("faktur[]",$nomor);
					$rows[$i++]=$row;
				}
			};
		}
		$data['total']=$i;
		$data['rows']=$rows;
					
		echo json_encode($data);
	}
		
	function payment($cmd,$faktur){
		$faktur=urldecode($faktur);
		if($cmd=="list"){
	        $sql="select p.no_bukti,p.date_paid,p.how_paid,p.amount_paid 
	        from payments p
	        where p.invoice_number='$faktur'";
	        $table=browse_simple($sql,'Daftar Pembayaran',600,600,'dgPay'); 
			$btn=link_button("Addnew", "addnew_payment()","edit");
			$btn.=link_button("Remove", "remove_payment()","remove");
			$btn.=link_button("Refresh", "refresh_payment()","ok");
			$scr="
				<script src=\"".base_url()."js/jquery/jquery-1.8.0.min.js\"></script>
				<script src=\"".base_url()."js/jquery-ui/jquery.easyui.min.js\"></script>
			";
			echo $btn.$table;
		}
			
	}
	function returx($cmd,$faktur){
		$faktur=urldecode($faktur);
		if($cmd=="list"){
	        $sql="select i.invoice_number as no_retur,i.invoice_date as tanggal,il.item_number,il.description,
	        il.quantity,il.unit,il.line_number
	        from invoice i left join invoice_lineitems il on il.invoice_number=i.invoice_number
	        where i.invoice_type='R' and i.sales_order_number='$faktur'";
	        $table=browse_simple($sql,'Daftar Retur',600,600,'dgRetur'); 
			$btn=link_button("Addnew", "addnew_retur()","edit");
			$btn.=link_button("Remove", "remove_retur()","remove");
			$btn.=link_button("Refresh", "refresh_retur()","ok");
			$scr="
				<script src=\"".base_url()."js/jquery/jquery-1.8.0.min.js\"></script>
				<script src=\"".base_url()."js/jquery-ui/jquery.easyui.min.js\"></script>
			";
			echo $btn.$table;
		}
	}
	function retur($faktur) {
		$faktur=urldecode($faktur);
		$sql="select i.invoice_number,invoice_date,item_number,description,quantity,unit,price,i.amount,il.warehouse_code 
		from invoice i left join invoice_lineitems il on il.invoice_number=i.invoice_number where invoice_type='R'
		and i.your_order__='$faktur' 
		order by i.invoice_number,invoice_date";
		echo datasource($sql);
	}
	function crdb($cmd,$faktur){
		$faktur=urldecode($faktur);
		if($cmd=="list"){
	        $sql="select c.kodecrdb,c.tanggal,c.transtype,c.amount,c.keterangan
	        from crdb_memo c
	        where c.docnumber='$faktur'";
	        $table=browse_simple($sql,'Daftar Cr Dr Memo',600,600,'dgCrDb'); 
			$btn=link_button("Addnew", "addnew_crdb()","edit");
			$btn.=link_button("Remove", "remove_crdb()","remove");
			$btn.=link_button("Refresh", "refresh_crdb()","ok");
			$scr="
				<script src=\"".base_url()."js/jquery/jquery-1.8.0.min.js\"></script>
				<script src=\"".base_url()."js/jquery-ui/jquery.easyui.min.js\"></script>
			";
			echo $btn.$table;
		}
	}
	function jurnal($cmd,$faktur){
		$faktur=urldecode($faktur);
		echo "cmd=".$cmd." faktur=".$faktur;	
	}
	function summary($faktur){
		$faktur=urldecode($faktur);
		$this->load->model('invoice_model');
		$this->invoice_model->recalc($faktur);
		return "<table class='table'><tr><td>Invoice Amount: </td><td>".number_format($this->invoice_model->amount)."</td></tr>"
			."<tr><td>Payment Amount: </td><td>".number_format($this->invoice_model->amount_paid)."</td></tr>"
			."<tr><td>Retur Amount: </td><td>".number_format($this->invoice_model->retur_amount)."</td></tr>"
			."<tr><td>CrDb Amount: </td><td>".number_format($this->invoice_model->crdb_amount)."</td></tr>"
			."<tr><td>Balance Amount: </td><td>".number_format($this->invoice_model->saldo)."</td></tr></table>"; 
	}
	function grafik_penjualan(){
		header('Content-type: application/json');
		$data['label']="Sales By Month";
		$data['data']=$this->trend_penjualan();
		echo json_encode($data);
	}
	function grafik_jual_harian(){
		header('Content-type: application/json');
		$data['label']="Sales Daily";
		$sql="select DATE_FORMAT(`invoice_date`,'%Y%m%d') as prd,
		sum(p.amount) as sum_amount 
		from invoice p
		where invoice_type='I' and year(p.invoice_date)=".date('Y')."
		group by DATE_FORMAT(`invoice_date`,'%Y%m%d')
		order by p.invoice_date asc
		limit 0,31";
		$query=$this->db->query($sql);
		$data2[0]=0;
		foreach($query->result() as $row){
			$prd=$row->prd;
			if($prd=="")$prd="00-00";
			$amount=$row->sum_amount;
			if($amount==null)$amount=0;
			if($amount>0)$amount=round($amount/1000);
			$data2[]=array(substr($prd,0,10),$amount);
		}
		$data['data']=$data2;
		
		echo json_encode($data);
	}
	function trend_penjualan()
	{
		$sql="select DATE_FORMAT(`invoice_date`,'%Y-%m') as prd,
		sum(p.amount) as sum_amount 
		from invoice p
		where invoice_type='I' and year(p.invoice_date)=".date('Y')."
		group by DATE_FORMAT(`invoice_date`,'%Y-%m')
		order by p.invoice_date asc
		limit 0,10";
		$query=$this->db->query($sql);
		$data[0]=0;
		foreach($query->result() as $row){
			$prd=$row->prd;
			if($prd=="")$prd="00-00";
			$amount=$row->sum_amount;
			if($amount==null)$amount=0;
			if($amount>0)$amount=round($amount/1000);
			$data[]=array(substr($prd,0,10),$amount);
		}
		return $data;
	}
	function daftar_saldo(){}
	function daftar_saldo_faktur()
	{
		$sql="select invoice_number,invoice_date,amount,company,due_date  
		from invoice i left join customers c on c.customer_number=i.sold_to_customer
		where invoice_type='I' and due_date>=".date('Y-m-d')."  
		order by invoice_date   		
		limit 5
		";
		echo datasource($sql);
	}
	function omzet_salesman() {
		$sql="select salesman,sum(amount) as jumlah 
		from invoice where invoice_type='I' and year(invoice_date)=".date('Y')." 
		group by salesman order by sum(amount) desc";
		echo datasource($sql);
	}
	function sales_by_category() {
		$sql="select s.category,sum(il.amount) as jumlah 
		from invoice i left join invoice_lineitems il on il.invoice_number=i.invoice_number 
		left join inventory s on s.item_number=il.item_number
		where invoice_type='I' and year(invoice_date)=".date('Y')." 
		group by s.category  order by sum(il.amount) desc limit 10";
		echo datasource($sql);
	}
	function sales_by_item() {
		$sql="select s.description,sum(il.amount) as jumlah 
		from invoice i left join invoice_lineitems il on il.invoice_number=i.invoice_number 
		left join inventory s on s.item_number=il.item_number
		where invoice_type='I' and year(invoice_date)=".date('Y')." 
		group by s.description  order by sum(il.amount) desc limit 20";
		echo datasource($sql);
	}
	function sales_by_customer() {
		$sql="select c.company,sum(i.amount) as jumlah 
		from invoice i left join customers c on c.customer_number=i.sold_to_customer
		where invoice_type='I' and year(invoice_date)=".date('Y')." 
		and i.sold_to_customer<>'CASH'
		group by c.company limit 5";
		echo datasource($sql);
	}
	function items($nomor,$type='')
	{
		$nomor=urldecode($nomor);
		$sql="select p.item_number,i.description,p.quantity,
		p.unit,p.price,p.discount,p.amount,p.line_number,p.revenue_acct_id,coa.account,
		coa.account_description,p.disc_2,p.disc_3,p.cost 
		from invoice_lineitems p
		left join inventory i on i.item_number=p.item_number
		left join chart_of_accounts coa on coa.id=p.revenue_acct_id
		where invoice_number='$nomor'";
		 
		echo datasource($sql);
	}
	function recalc($nomor=''){
		$nomor=urldecode($nomor);
		if($nomor!=''){
			
			$saldo=$this->invoice_model->recalc($nomor);
			
			$sub_total=$this->invoice_model->sub_total;
			$data=array('sub_total'=>$sub_total,'amount'=>$this->invoice_model->amount,
			"retur"=>$this->invoice_model->retur_amount,"crdb"=>$this->invoice_model->crdb_amount,
			"payment"=>$this->invoice_model->amount_paid,"saldo"=>$this->invoice_model->saldo,
			"disc_amount_1"=>$this->invoice_model->disc_amount_1,
			"tax"=>$this->invoice_model->tax);
			echo json_encode($data);				
			
		}
	}
	function customer($cust){
		$cust=urldecode($cust);
		$sql="select invoice_number,invoice_date,salesman,payment_terms,amount
		from invoice where invoice_type='I' and sold_to_customer='$cust'";
		echo datasource($sql);
	}
	function select($customer=''){
		$customer=urldecode($customer);
		$s="select invoice_number,invoice_date,payment_terms from invoice 
		where invoice_type='I'";
		if($customer!="")$s.=" and sold_to_customer='".$customer."'";
	 
		echo datasource($s);
	}
	function list_item($faktur) {
		$faktur=urldecode($faktur);
		$s="select item_number,description,quantity,unit 
		from invoice_lineitems 
		where invoice_number='$faktur'";
		echo datasource($s);
	}
	function unposting($nomor) {
		if (!allow_mod2('_30165'))  exit;
		$nomor=urldecode($nomor);
		$message=$this->invoice_model->unposting($nomor);		
		$this->view($nomor);
	}
	function posting($nomor)
	{
		if (!allow_mod2('_30165'))  exit;
		$nomor=urldecode($nomor);
		$message=$this->invoice_model->posting($nomor);
		$this->view($nomor);
	}
	function find($nomor){
		$nomor=urldecode($nomor);
		$this->load->model('invoice_model');
		$saldo=$this->invoice_model->recalc($nomor);
		$query=$this->invoice_model->get_by_id($nomor)->row();
		$data['invoice_date']=$query->invoice_date;
		$data['amount']=number_format($query->amount);
		$data['saldo']=number_format($saldo);
		
		echo json_encode($data);
		
	}
	function list_crdb($faktur)
	{
		$faktur=urldecode($faktur);
		$sql="select kodecrdb as nomor,tanggal, amount 
			from crdb_memo i
			where docnumber='$faktur'";
		echo datasource($sql);				
			
	}
	function posting_all() {
		$d1= date( 'Y-m-d H:i:s', strtotime($this->input->get('sid_date_from')));
		$d2= date( 'Y-m-d H:i:s', strtotime($this->input->get('sid_date_to')));
		$sql="select distinct invoice_number from invoice"; 
		$sql.=" where invoice_type in ('I') and (posted is null or posted=false) and invoice_date between '$d1' and '$d2'";
		
		if($q=$this->db->query($sql)){
			foreach($q->result() as $r){
				echo "<p>Posting..
				<a href=".base_url()."index.php/invoice/view/".$r->invoice_number."
				class='info_link'>".$r->invoice_number."</a> : ";
				$message=$this->invoice_model->posting($r->invoice_number);
				if($message!=''){
					echo ': '.$message;
				}
				echo "</p>";
			}
		}
		echo "<p>Finish.</p>";
	}	
	function save_pos()
	{
		
		$this->load->model("promosi_model");
		$data=$this->input->post();
        if(!isset($data['items'])){
            echo json_encode(array('success'=>false,'msg'=>'Some errors occured.'));
            return false;
            
        }
        $header=$data['header'];
        $tanggal=date("Y-m-d H:i:s");
        if($set_tanggal=$this->session->userdata("set_tanggal")){
            $tanggal=$set_tanggal;
        }
        //var_dump($tanggal);
        //var_dump(strtotime(date('Y',$tanggal)));
        
        if(date('Y',strtotime($tanggal))=="1970"){	///????
        	$tanggal=date("Y-m-d H:i:s");        	
        	$this->session->set_userdata("set_tanggal",$tanggal);
        }
        if($header["invoice_number"]=="AUTO"){
            $id=$this->nomor_bukti();
            $new=true;
        } else {
            $new=false;
            $id=$header['invoice_number'];
        }
        if($qinv=$this->db->where("invoice_number",$id)->get("invoice")){
            if($rinv=$qinv->row()){
                $tanggal=$rinv->invoice_date;
            }
        }
		$data_head['invoice_number']=$id;
		$data_head['invoice_date']=$tanggal;
		$data_head['sold_to_customer']=$header['cust'];
		
		customer_need_update($data_head['sold_to_customer']);
		
		$data_head['salesman']=user_id();
        $termin=$header['payment_terms'];
        if($termin==''){
            $termin="CASH";
            if($qcust=$this->db->select("payment_terms")->where("customer_number",
                $header['cust'])
                ->get("customers")){
                    if($rcust=$qcust->row()){
                        if($rcust->payment_terms!=""){
                            $termin=$rcust->payment_terms;                        
                        }
                    }
            }
        }
		$employee_id="";
		if(isset($header['salesman'])){
			$employee_id=$header['salesman'];
		}
		$data_head['payment_terms']=$termin;
		$data_head['invoice_type']='I';
		$data_head['type_of_invoice']=$header['cust_type'];
		$data_head['due_date']=$data_head['invoice_date'];
		$data_head['discount']=$header['discount'];
        $data_head['sales_tax_percent']=$header['sales_tax_percent'];
        $data_head['disc_amount_1']=$header['discount_amount'];
        $data_head['tax']=$header['tax'];
        $data_head['amount']=c_($header['amount']);
        $data_head['other']=c_($header['other']);

		$warehouse_code=current_gudang();
		if($warehouse_code=="UNKNOWN")$warehouse_code="";
		if($warehouse_code=="")$warehouse_code=$this->session->userdata("session_outlet","");
		$data_head['warehouse_code']=$warehouse_code;
        
	    if($new){	 
		  $ok=$this->invoice_model->save($data_head);
          $this->nomor_bukti(true);
        } else {
          $ok=$this->invoice_model->update($id,$data_head);            
        }
		if($ok){
			$arItems=$data['items'];
			//arItem.push([td[0],td[1],td[2],q,p,t]);
			//			arItem.push([td[0],td[1],td[2],t[3],q,p,t,d]);	

			$total=0;
			for($i=0;$i<count($arItems);$i++){
				$detail=$arItems[$i];
                $unit="";
                $data_detail['invoice_number']=$id;
                $data_detail['no_urut']=$detail[0];
				$data_detail['item_number']=$detail[1];         
				$data_detail['description']=$detail[2];
                $data_detail['quantity']=$detail[3];
				$data_detail['unit']=$detail[4];                
				$data_detail['price']=c_($detail[5]);
				$data_detail['discount']=$detail[6];
                $data_detail['discount_amount']=c_($detail[7]);
                $data_detail['amount']=c_($detail[8]);
                $data_detail['employee_id']=$detail[9]; //tenant
                $data_detail['from_line_type']=$detail[10];  //ref tenant
                $data_detail['disc_2']=$detail[11]; 
                $data_detail['disc_amount_2']=c_($detail[12]); 
                $data_detail['disc_3']=$detail[13]; 
                $data_detail['disc_amount_3']=c_($detail[14]); 
                $data_detail['disc_amount_ex']=c_($detail[15]);               
                $line_number=$detail[16];
                $data_detail['line_number']=$line_number;
                $data_detail['mu_qty']=c_($detail[17]);
                $data_detail['multi_unit']=$detail[18];
                $data_detail['mu_harga']=c_($detail[19]);
                $data_detail['coa1amt']=c_($detail[20]);
                $data_detail['warehouse_code']=$warehouse_code;
				$data_detail['employee_id']=$employee_id;
                
			    $row_id=$this->invoice_lineitems_model->save($data_detail);

                //$this->inventory_model->recalc($data_detail['item_number']);
				//$data_detail['line_number']=$row_id;
				if($qty_extra=$this->promosi_model->promo_qty_extra($data_detail['item_number'],$data_detail['quantity'])){
					if($qty_extra>0){
						$data_detail['description']="***extra ".$data_detail['description'];
						$data_detail["quantity"]=$qty_extra;
						$data_detail['price']=0;				$data_detail['amount']=0;
						$data_detail['discount']=0;				$data_detail['discount_amount']=0;
						$data_detail['disc_2']=0;				$data_detail['disc_amount_2']=0;
						$data_detail['disc_3']=0;				$data_detail['disc_amount_3']=0;
                        $data_detail['disc_amount_ex']=0;
						$this->invoice_lineitems_model->save($data_detail);
                        $this->inventory_model->recalc($data_detail['item_number']);
					}
				}
								
				$total=$total+$data_detail['amount'];
			}
			//$this->db->where('invoice_number',$id)
			//	->update("invoice",array("paid"=>1,"amount"=>$total));
			
			if(isset($data['payment'])){
					
		        $payment=$data['payment'];
                $tanggal_pay=date("Y-m-d H:i:s");   //tanggal saat ini server
				$this->save_pos_payment($payment,$id,$tanggal);
					    
			}
			if(isset($data['payment_split'])){
				$payment_split=$data['payment_split'];
				$this->save_pos_payment_split($payment_split,$id,$tanggal);
			}
            $this->invoice_model->recalc($id);
            //echo "<br>saldo: ".$this->invoice_model->saldo;
            
            //kembalikan lagi arItems untuk di loading
            $dret=null;
            $q=$this->db->where("invoice_number",$id)
                ->order_by('line_number')->get("invoice_lineitems");
            if($q){
                foreach($q->result_array() as $row){
                    $row['discount']=$row['discount']*100;
                    $dret[]=$row;
                }   
            }
        
			echo json_encode(array('success'=>true,'invoice_number'=>$id,"arItem"=>$dret));
		} else {
			echo json_encode(array('msg'=>'Some errors occured.'));
		}
        
        $this->customer_model->recalc_piutang($data_head['sold_to_customer']);        
	}	
	function save_pos_payment_split($payment_split,$invoice_number,$tanggal){
		for($i=0;$i<count($payment_split);$i++){
			$row=$payment_split[$i];
			$how_paid=$row[0];
			$amount_paid=c_($row[1]);
			$rekening=$row[2];
			$card_voucher_no=$row[3];
			$card_author=$row[4];
			$card_expire=$row[5];
			
			$rec_pay=null;
			
		    $rec_pay["invoice_number"]=$invoice_number;
		    $rec_pay["date_paid"]=$tanggal;						
			$rec_pay["how_paid"]=$how_paid;
			$rec_pay["amount_paid"]=$amount_paid;
			$rec_pay["amount_alloc"]=$amount_paid;
			
			
	    	if($how_paid=="CARD"){
			    $rec_pay["credit_card_type"]=$rekening;
			    $rec_pay["credit_card_number"]=$card_voucher_no;
			    $rec_pay["authorization"]=$card_author;
			    $rec_pay["expiration_date"]=$card_expire;	    		
	    	} else if($how_paid=="VOUCHER"){
			    $rec_pay["credit_card_number"]=$card_voucher_no;
				if(c_($card_author)>0){
					$rec_pay["amount_paid"]=$amount_paid;
					$rec_pay["amount_alloc"]=c_($card_author);					
				}

			} else if($how_paid=="TRANSFER"){
					$rec_pay["credit_card_type"]=$rekening;
					$rec_pay["credit_card_number"]=$card_voucher_no;
					$rec_pay["authorization"]=$card_author;
					$rec_pay["expiration_date"]=$card_expire;	    		
			} else {
	    		unset($rec_pay["credit_card_type"]);
	    		unset($rec_pay["credit_card_number"]);
	    		unset($rec_pay["authorization"]);
	    		unset($rec_pay["expiration_date"]);
	    	}
	    							
			if($amount_paid!=0){
				$this->payment_model->save_pos($rec_pay,false);
			}
		}
	}
	function save_pos_payment($payment,$invoice_number,$tanggal){
        
	    $cash=c_($payment['cash']);
	    $card=c_($payment['card']);
	    $debit=c_($payment['debit']);
	    $voucher=c_($payment['voucher']);
	    
	    $kembali=c_($payment['kembali']);
	    if($kembali>0){   
	      $cash=$cash-$kembali;
	    }
	    $rec_pay["invoice_number"]=$invoice_number;
	    $rec_pay["date_paid"]=$tanggal;
	    $rec_pay["amount_alloc"]=$kembali;
	
	    $rec_pay["how_paid"]="CASH";
	    $rec_pay["amount_paid"]=$cash;
	    if($cash<>0) $this->payment_model->save_pos($rec_pay,false);
	
	    $rec_pay["how_paid"]="VOUCHER";
	    $rec_pay["amount_paid"]=$voucher;
	    $rec_pay["credit_card_number"]=$payment["voucher_no"];
	    
	    if($voucher<>0) $this->payment_model->save_pos($rec_pay,false);
        
	    $rec_pay["how_paid"]="CARD";
	    $rec_pay["amount_paid"]=$card;
	    $rec_pay["credit_card_type"]=$payment["credit_card_type"];
	    $rec_pay["credit_card_number"]=$payment["credit_card_number"];
	    $rec_pay["authorization"]=$payment["authorization"];
	    $rec_pay["expiration_date"]=$payment["expiration_date"];
	    $rec_pay["from_bank"]=$payment["from_bank"];
	    if($card<>0) $this->payment_model->save_pos($rec_pay);
	    
	    $db_pay["amount_paid"]=$debit;
	    $db_pay["invoice_number"]=$invoice_number;
	    $db_pay["date_paid"]=$tanggal;
	    $db_pay["how_paid"]="DEBIT";
	    $db_pay["amount_paid"]=$debit;
	    $db_pay["credit_card_type"]=$payment["credit_card_type"];
	    $db_pay["credit_card_number"]=$payment["credit_card_number"];
	    $db_pay["authorization"]=$payment["authorization"];
	    $db_pay["expiration_date"]=$payment["expiration_date"];
	    $db_pay["from_bank"]=$payment["from_bank"];
	    if($debit<>0) $this->payment_model->save_pos($db_pay);		
	}
	function edit_nota($invoice_number){
		$data['success']=false;
		$data['msg']="Invoice not found !";
        $data['invoice']['company']='';
        $data['invoice']['credit_limit']=0;
        $data['invoice']['credit_balance']=0;
        $data['invoice']['current_balance']=0;                
        $this->invoice_model->recalc($invoice_number);
        //echo "<br>saldo: ".$this->invoice_model->saldo;
		if($q=$this->db->where("invoice_number",$invoice_number)
			->get("invoice")){
			if($r=$q->row()){
				$data['invoice']=(array)$r;
                $data['invoice']['credit_limit']=0;
				$sql="select company,credit_limit,credit_balance from customers 
				    where customer_number='$r->sold_to_customer'";
				if($qcst=$this->db->query($sql)){
				    if($rcst=$qcst->row()){
				        $data['invoice']['company']=$rcst->company;
                        $data['invoice']['credit_limit']=c_($rcst->credit_limit);
                        $data['invoice']['credit_balance']=c_($rcst->credit_balance);
			         }
				}
				if($q=$this->db->where("invoice_number",$invoice_number)
					->order_by("line_number")
					->get("invoice_lineitems")){
						$items=null;
						foreach($q->result() as $r){
							$items[]=$r;
						}
						$data['items']=$items;
				}
				if($q=$this->db->where("invoice_number",$invoice_number)
					->get("payments")){
						$payment=null;
						foreach($q->result() as $r){
							$payment[]=$r;
						}
						$data['payments']=$payment;
				}
				$data['success']=true;
				$data['msg']="Invoice Found.";
			}
		}
        if(!isset($data['invoice']['credit_limit']))$data['invoice']['credit_limit']=0;
        if(!isset($data['invoice']['credit_balance']))$data['invoice']['credit_balance']=0;
        if(!isset($data['invoice']['current_balance']))$data['invoice']['current_balance']=0;
		
		echo json_encode($data);
		
	}
    function print_nota($invoice_number,$reprint=false){
        $ukuran_nota=getvar("ukuran_nota",0);
        if($ukuran_nota==1){
            $this->print_nota_besar($invoice_number,$reprint);
        } else {
            $this->print_nota_kecil($invoice_number,$reprint);
            
        }            
    }
    function print_nota_kecil($invoice_number,$reprint=false){
        $data['success']=false;
        $data['msg']="Invoice not found !";
        $this->invoice_model->recalc($invoice_number);
  
	    $company_code=$this->session->userdata('session_company_code','');
	    if($company_code=="")$company_code=$this->access->cid();
	    
	    $company_name=$this->company_model->company_name($company_code);
	    
	    $nama_toko=$company_name;
	    $alamat="";
	    $telp="";
	    $kota="";
	    $shipping_location=$this->session->userdata('session_outlet','');
	    if($shipping_location=="")$shipping_location=$this->session->userdata('default_warehouse','');
	    if($qgdg=$this->shipping_locations_model->get_by_id($shipping_location)){
	        if($rgdg=$qgdg->row()){
	            if($rgdg->attention_name!="")$nama_toko=$rgdg->attention_name;
	            $alamat=$rgdg->street;
	            $telp=$rgdg->phone;
	            $kota=$rgdg->city;
	        }        
	    }
	    $pembulatan=0;
	    $spg="";
		if($qspg=$this->db->query("select employee_id from invoice_lineitems 
			where invoice_number='$invoice_number' and (employee_id!=null or employee_id<>'')")){
				if($rspg=$qspg->row()){
					$spg=$rspg->employee_id;
				}
			}
	    $item_counter=null;
	    $garis="================================="; 
        if($q=$this->db->where("invoice_number",$invoice_number)
            ->get("invoice")){
                
            if($q->num_rows()==0){
                echo "<h1>Nomor nota [$invoice_number] tidak ada !";
            }
			$header1=getvar("header1");
			$header2=getvar("header2");
			$header3=getvar("header3");
			$footer1=getvar("footer1");
			$footer2=getvar("footer2");
			$footer3=getvar("footer3");
			if($header1!="")$nama_toko=$header1;
			if($header2!="")$alamat=$header2;
			if($header3!="")$kota=$header3;

            if($r=$q->row()){
                $tanggal=$r->invoice_date;
                $kasir=$r->salesman;
                $pembulatan=$r->other;
                
                $data['invoice']=$r;
				
				echo "<table width='100px'>";
				echo "<tr><td colspan='5' align='center'>$nama_toko</td></tr>";
				if($reprint)echo "<tr><td colspan='5' align='center'>*** REPRINT ***</td></tr>";

				echo "<tr><td colspan='5' align='center'>$alamat</td></tr>";
				echo "<tr><td colspan='5' align='center'>$telp</td></tr>";
				if($kota!="")echo "<tr><td colspan='5' align='center'>$kota</td></tr>";
				echo "<tr><td colspan='5'>$garis</td></tr>
				<tr><td>Nota#</td><td colspan='4'>$invoice_number</td></tr>
				<tr><td>Tanggal</td><td colspan='4'>".date("d-M-Y H:i",strtotime($tanggal))."</td></tr>
				<tr><td>Kasir</td><td colspan='4'>$kasir</td></tr>
				<tr><td>Spg</td><td colspan='4'>$spg</td></tr>
				<tr><td colspan='5'>$garis</td></tr>";
                
                if($q=$this->db->where("invoice_number",$invoice_number)
                    ->get("invoice_lineitems")){
                        $total=0;
                        foreach($q->result() as $r){
                            $total+=$r->amount;
                            if($qitem=$this->inventory_model->get_by_id($r->item_number)){
                                if($ritem=$qitem->row()){
                                    if($ritem->type_of_invoice=="0"){
                                        $item_counter[]=$r;
                                    }
                                }
                            }
							$disc_amt=$r->discount_amount+$r->disc_amount_2+$r->disc_amount_3+$r->disc_amount_ex;
																				
							echo "<tr><td colspan='5'>$r->item_number</td></tr>
							<td colspan='5'>$r->description</td></tr>
							<tr><td width=30>".number_format($r->quantity,2)."</td>
							<td>$r->unit &nbsp x</td><td align='right'>".number_format($r->price)."</td>";
							echo "<td>=</td><td align='right'>".number_format($r->amount)."</td>
							</tr>";
							if($disc_amt>0){
								echo "<tr><td colspan='5'>-Disc: ".number_format($disc_amt)."</td></tr>";
							}

                        }
                }
        
				echo "<tr><td colspan='5'>$garis</td></tr>
				<tr><td>Sub Total Rp. </td><td align='right' colspan='4'>".number_format($total)."</td></tr>";
				echo "<tr><td>Pembulatan Rp. </td><td align='right' colspan='4'>".number_format($pembulatan)."</td></tr>";
				echo "<tr><td>TOTAL Rp. </td><td align='right' colspan='4'>".number_format($total+$pembulatan)."</td></tr>";
				echo "<tr><td colspan=4>---Payment Info---</td></tr>";
				$kembali=0;
				$bayar_cash=0;
				$bank_name="";
				$split=false;
				$total_paid=0;
				$voucher_nominal=0;
				$gopay=0;
				$tran_amount=0;
				$tran_bank="";
				$tran_ref="";
				
                if($q=$this->db->where("invoice_number",$invoice_number)
                    ->get("payments")){
                        $cash=0;    $card=0;    $voucher=0;    $rekening="";
                        $total_paid=0;
                        $voucher_no="";
                        foreach($q->result() as $r){
                            $total_paid+=$r->amount_paid;
                            if($r->how_paid=="CASH"){
                                $cash+=$r->amount_paid;
                                if($r->amount_alloc>0){
                                    $bayar_cash+=$r->amount_paid+$r->amount_alloc;
                                    $kembali=$r->amount_alloc;    
                                } else {
                                    $bayar_cash+=$r->amount_paid;
                                    $kembali=0;
                                }
								if($r->amount_paid>0){                        
								    echo "<tr><td>CASH Rp. </td><td align='right' colspan='4'>"
								    	.number_format($r->amount_paid)."</td></tr>";
								}
                                                                
                            }
                            if($r->how_paid=="CARD"){
                            	$split=true;
                                $card+=$r->amount_paid;
								$bank_name="";
                                $rekening=$r->credit_card_type;   
                                if($qbank=$this->db->select("bank_name")->where("bank_account_number",$rekening)
                                    ->get("bank_accounts")){
                                    if($rbank=$qbank->row()){
                                        $bank_name=$rbank->bank_name;
                                    }        
                                }
								if($r->amount_paid>0){
								    echo "<tr><td>CARD Rp. </td><td align='right' colspan='4'>"
								    	.number_format($r->amount_paid)."</td></tr>";
								    echo "<tr><td colspan='4'>-- Rek: $rekening - $bank_name</td><td></td></tr>";    
								}
								
                            }
                            if($r->how_paid=="VOUCHER"){
                            	$split=true;
                                $voucher+=$r->amount_paid;
                                $voucher_no=$r->credit_card_number;
								$voucher_nominal=$r->amount_alloc;
							    echo "<tr><td>VOUCHER Rp. </td><td align='right' colspan='4'>"
							    	.number_format($r->amount_paid)."</td></tr>";
							    if($voucher_no!=""){
							        echo "<tr><td colspan='5'>-- Voucher#: ".($voucher_no).", Nominal: "
						        	.number_format($voucher_nominal)."</td></tr>";
							    }        
                            }
                            if($r->how_paid=="GOPAY"){
                            	$split=true;
                                $gopay+=$r->amount_paid;
                                $gopay_no=$r->credit_card_number;
							    echo "<tr><td>GO-PAY Rp. </td><td align='right' colspan='4'>"
							    	.number_format($r->amount_paid)."</td></tr>";
							    if($gopay_no!=""){
							        echo "<tr><td colspan='5'>-- Ref#: ".($gopay_no)."</td></tr>";
							    }        
                            }
							if($r->how_paid=="TRANSFER"){
                            	$split=true;
                                $tran_amount+=$r->amount_paid;
                                $tran_ref=$r->credit_card_number;
								$tran_bank=$r->credit_card_type;
							    echo "<tr><td>TRANSFER Rp. </td><td align='right' colspan='4'>"
							    	.number_format($r->amount_paid)."</td></tr>";
							    if($tran_bank!=""){
							        echo "<tr><td colspan='5'>-- Bank#: ".($tran_bank)."</td></tr>";
							    }        
                            }

                        }

                        $sisa=$total-$total_paid;

                                                
                }
								
				if($cash>0 && !$split){
					
					echo "
					<tr><td colspan='5'>$garis</td></tr>
					<tr><td>Bayar Cash Rp. </td><td align='right' colspan='4'>".number_format($bayar_cash)."</td></tr>";
					if($kembali>0){        
						echo "
						<tr><td>Kembalian  Rp. </td><td align='right' colspan='4'>".number_format($kembali)."</td></tr>";
					}

				}
				echo "<tr><td>Total Pay Rp. </td><td align='right' colspan='4'>".number_format($total_paid)."</td></tr>";
				//<tr><td colspan='5' align='center'>***Terimakasih***</td></tr>

				echo "<tr><td colspan='5'>$garis</td></tr>";
				$f1="Terimakasih atas kunjungan anda";
				if($footer1!="")$f1=$footer1;
				echo "<tr><td colspan='5' align='center'>$f1</td></tr>";
				$f2="Selamat datang kembali";
				if($footer2!="")$f2=$footer2;
				echo "<tr><td colspan='5' align='center'>$f2</td></tr>";
				$f3=".";
				if($footer3!="")$f3=$footer3;
				echo "<tr><td colspan='5' align='center'>$f3</td></tr>";
				echo "</table>";
                $data['success']=true;
                $data['msg']="Invoice Found.";
            }
        }
        
        
        if($item_counter){
  
		echo "<p>&nbsp</p><p>&nbsp</p><p>&nbsp</p><p>&nbsp</p><p>&nbsp</p><p>&nbsp</p><table width='200px'><tr><td colspan='5' align='center'>*** ITEM COUNTER ***</td></tr>";
            for($i=0;$i<count($item_counter);$i++){
                $r=$item_counter[$i];
                echo "<tr><td colspan='5'>$r->item_number</td></tr>
                <td colspan='5'>$r->description</td></tr>
                <tr><td>$r->quantity</td><td>x</td><td align='right'>".number_format($r->price)."</td>
                <td>=</td><td align='right'>".number_format($r->amount)."</td>
                </tr>";
                
                if($r->discount_amount>0){
                    echo "<tr><td colspan='5'>-Disc: ".number_format($r->discount_amount)."</td></tr>";
                }
                                
            }
            echo "</table><p>&nbsp</p><p>&nbsp</p>";
        }
    }    
    
function print_nota_besar($invoice_number,$reprint=false){
    $data['success']=false;
    $data['msg']="Invoice not found !";
    $this->invoice_model->recalc($invoice_number);
  
    $company_code=$this->session->userdata('session_company_code','');
    if($company_code=="")$company_code=$this->access->cid();
    
    
    $company_name="";
    $nama_toko="";
    $alamat="";
    $telp="";
    $kota="";
    if($qcom=$this->company_model->get_by_id($company_code)){
        if($rcom=$qcom->row()){
            $company_name=$rcom->company_name;
            $nama_toko=$company_name;
            $alamat=$rcom->street;
            $telp=$rcom->phone_number;
            $kota=$rcom->city_state_zip_code;
        }
    }
    $shipping_location=$this->session->userdata('session_outlet','');
    if($shipping_location=="")$shipping_location=$this->session->userdata('default_warehouse','');
    if($qgdg=$this->shipping_locations_model->get_by_id($shipping_location)){
        if($rgdg=$qgdg->row()){
            //if($rgdg->attention_name!="")$nama_toko=$rgdg->attention_name;
            //$alamat=$rgdg->street;
            //$telp=$rgdg->phone;
            //$kota=$rgdg->city;
        }        
    }
    $pembulatan=0;
    
    $item_counter=null;
	$tgl_jth_tempo="";
        $garis="======================================================================================================="; 
        if($q=$this->db->where("invoice_number",$invoice_number)
            ->get("invoice")){
                
            if($q->num_rows()==0){
                echo "<h1>Nomor nota [$invoice_number] tidak ada !";
            }
            if($r=$q->row()){
                $tanggal=date("Y-m-d",strtotime($r->invoice_date));
                $kasir=$r->salesman;
                $pembulatan=$r->other;
                $termin=$r->payment_terms;
				if(strtoupper($termin)!="cash" || $termin!=""){
					$tgl_jth_tempo=date("Y-m-d",strtotime($r->due_date));
				}

            //customer info
            $cust_code="";
            $cust_name="";
            $cust_alamat="";
            $cust_kota="";
            $cust_phone="";
            $cust_contact="";
            if($qcust=$this->db->where("customer_number",$r->sold_to_customer)->get("customers")){
                if($rcust=$qcust->row()){
                    $cust_code=$rcust->customer_number;
                    $cust_name=$rcust->company;
                    $cust_alamat=$rcust->street;
                    $cust_kota=$rcust->city;
                    $cust_phone=$rcust->phone;
                    $cust_contact=$rcust->first_name;
                }
            }
        
                
                $data['invoice']=$r;
    echo "<table  cellpadding=2>";
echo "<tr><td colspan=3><strong>FAKTUR PENJUALAN</strong></td><td colspan=2><strong>$cust_name </strong></td></tr>";
echo "<tr><td colspan=3><strong>$nama_toko</td><td colspan=2>$cust_alamat</td></tr>";
if($reprint)echo "<tr><td  colspan=3 >*** REPRINT ***</td></tr>";
echo "<tr><td colspan=3>$alamat</td>";
//echo "<td colspan=2>$cust_kota - $cust_phone</td></tr>";
echo "<tr><td colspan=3>$telp</td><td>Invoice No.</td><td><b>$invoice_number</b></td></tr>";
echo "<tr><td colspan=3>$kota</td><td>Tanggal</td><td><b>$tanggal</b></td></tr>";
if($tgl_jth_tempo!=""){
//	echo "<tr><td colspan=3>&nbsp</td><td>JthTempo: </td><td><b>$tgl_jth_tempo</b>, Termin: <b>$termin</b></td></tr>";	
}

echo "<td colspan=7><table   cellpadding=2>";
echo "<tr><td colspan=7>$garis</td></tr>";
echo "<tr><td width=50><strong>NO</strong></td><td><strong>NAMA BARANG</strong></td>
<td width=50><strong>QTY</strong></td><td width=50><strong>UNIT</strong></td><td align=right width=90><strong>HARGA</strong></td>
<td width=50 align=right><strong>DISC</strong></td><td width=90 align='right'><strong>JUMLAH</strong></td></tr>";                                                    
echo "<tr><td colspan=7>$garis</td></tr>";

                $no=0;                
                if($q=$this->db->where("invoice_number",$invoice_number)
                    ->get("invoice_lineitems")){
                        $total=0;
                        foreach($q->result() as $r){
                            $total+=$r->amount;
                            if($qitem=$this->inventory_model->get_by_id($r->item_number)){
                                if($ritem=$qitem->row()){
                                    if($ritem->type_of_invoice=="0"){
                                        $item_counter[]=$r;
                                    }
                                }
                            }
                            $no++;
                            $disc_prc=$r->discount;
                            if($disc_prc<1)$disc_prc*=100;
                            $disc2_prc=c_($r->disc_2);
                            if($disc2_prc<1)$disc2_prc*=100;
                            if($disc2_prc>0){
                            	$disc_prc.="+$disc2_prc";
							}
							$disc3_prc=c_($r->disc_3);
							if($disc3_prc<1)$disc3_prc*=100;
                            if($disc3_prc>0){
                            	$disc_prc.="+$disc3_prc";
							}                        
                            $disc_amt=$r->discount_amount+$r->disc_amount_2+$r->disc_amount_3+$r->disc_amount_ex;
                            echo "<tr><td width=10>$no</td>
                            <td>$r->description [$r->item_number]</td>
                            <td>".number_format($r->quantity,2)."</td>
							<td>$r->unit</td><td align='right'>".number_format($r->price)."</td>";
                            echo "<td align='right'>".($disc_prc)."</td>";
                            echo "<td align='right'> ".number_format($r->amount)."</td>";
                            echo "</tr>";    
                        }
                }
                $baris_sisa=10-$no;
                for($ibaris=0;$ibaris<$baris_sisa;$ibaris++){
                    echo "<tr><td>&nbsp</td></tr>";
                }
echo "</table></td>";        

echo "<tr><td colspan=5>$garis</td></tr>";
echo "<tr><td></td><td></td><td></td><td><strong>GRAND TOTAL Rp. </strong></td><td align='right' colspan='4'><strong>".number_format($total+$pembulatan)."</strong></td></tr>";
//echo "<tr><td></td><td></td><td></td><td><strong>---Payment Info---</strong></td></tr>";
$kembali=0;
$bayar_cash=0;
$bank_name="";
$split=false;
$total_paid=0;
$voucher_nominal=0;

    if($q=$this->db->where("invoice_number",$invoice_number)->get("payments")){
            $cash=0;    $card=0;    $voucher=0;    $rekening="";
            $total_paid=0;
            $voucher_no="";
            foreach($q->result() as $r){
                if($r->how_paid=="CASH"){
                    $cash+=$r->amount_paid;
                    if($r->amount_alloc>0){
                        $bayar_cash+=$r->amount_paid+$r->amount_alloc;
                        $kembali=$r->amount_alloc;    
                    } else {
                        $bayar_cash+=$r->amount_paid;
                        $kembali=0;
                    }
                }
                if($r->how_paid=="CARD"){
                    $split=true;
                    $card+=$r->amount_paid;
                    if($rekening==""){
                        $rekening=$r->credit_card_type;   
                        if($qbank=$this->db->select("bank_name")->where("bank_account_number",$rekening)
                            ->get("bank_accounts")){
                            if($rbank=$qbank->row()){
                                $bank_name=$rbank->bank_name;
                            }        
                        }
                    }
                }
                if($r->how_paid=="VOUCHER"){
                                $split=true;
                                $voucher+=$r->amount_paid;
                                $voucher_no=$r->credit_card_number;
								$voucher_nominal=$r->amount_alloc;
								
                            }
                            $total_paid+=$r->amount_paid;
                        }

                        $sisa=$total-$total_paid;

if($cash>0){                        
    echo "<tr><td></td><td></td><td></td><td><strong>CASH Rp. </strong></td><td align='right' >".number_format($cash)."</td></tr>";
}
if($card>0){
    echo "<tr><td></td><td></td><td></td><td><strong>CARD Rp. </strong></td><td align='right'>".number_format($card)."</td></tr>";
if($card>0)echo "<tr><td colspan='4'>-- Rek: $rekening - $bank_name</td></tr>";    
}
if($voucher>0){
    echo "<tr><td></td><td></td><td></td><td><strong>VOUCHER Rp. </strong></td><td align='right'>".number_format($voucher)."</td></tr>";
	if($voucher_no!=""){
		echo "<tr><td></td><td></td><td></td><td>-- Voucher#: ".($voucher_no).", Nominal: " . number_format($voucher_nominal) . "</td></tr>";
    }        
}
                                                
                }
    if($cash>0 && !$split){
        
        echo "
        <tr><td colspan='5'>$garis</td></tr>
        <tr><td></td><td></td><td></td><td>Bayar Cash Rp. </td><td align='right'>".number_format($bayar_cash)."</td></tr>";
        if($kembali>0){        
            echo "
            <tr><td></td><td></td><td></td><td><strong>Kembalian  Rp. </strong></td><td align='right' >".number_format($kembali)."</td></tr>";
        }
    
    }

echo "<tr><td></td><td></td><td></td><td><strong>Total Pay Rp. </strong></td><td align='right' >".number_format($total_paid)."</td></tr>";

echo "<tr><td><strong>Keterangan:</strong></td><td></td><td></td><td></td><td align='right'></td></tr>";
echo "<tr><td colspan=5># Terdapat tambahan 2% setiap bulannya, JIKA pembayaran melebihi tanggal jatuh tempo</td></tr>";
echo "<tr><td colspan=5># Barang yang sudah dibeli tidak dapat ditukar tanpa disertai faktur asli, retur maksimal 7 hari tanggal pembelian.</td></tr>";
echo "<tr><td colspan=5># Faktur yang sudah ditandatangan secara lengkap oleh pelanggan akan menjadi bukti sah bahwa pelanggan telah menerima dan memeriksa jumlah dan harga barang.</td></tr>";
echo "<tr><td>&nbsp</td>";
echo "<tr><td align=center><strong>Tanggal Terima</strong></td><td></td><td align=center><strong>Barang telah dicek</strong></td><td align=center><strong>Barang telah dicek</strong></td><td><strong>Hormat kami</strong></td></tr>";
echo "<tr><td></td><td></td><td align=center><strong>Expedisi</strong></td><td align=center><strong>Gudang</strong></td>";
echo "<tr><td>&nbsp</td>";
echo "<tr><td>&nbsp</td>";
echo "<tr><td>&nbsp</td>";
echo "<tr><td>&nbsp</td>";
echo "<tr><td align=center><strong>Tanda Tangan & Nama</strong></td></tr>";



                $data['success']=true;
                $data['msg']="Invoice Found.";
            }
        }
        
        
    }        
	function new_sales_register() {
		$sql="select il.quantity,il.unit,il.invoice_number,i.invoice_date
		,il.item_number,il.description 
		from invoice i left join invoice_lineitems il on il.invoice_number=i.invoice_number
		where invoice_type='I' and invoice_date between '".date('Y-m-d')."' 
		and '".date("Y-m-d")." 23:59:50' 
		 
		union all 
		
		select sol.quantity,sol.unit,sol.sales_order_number,s.sales_date 
		,sol.item_number,sol.description 
		from sales_order s left join sales_order_lineitems sol 
		on sol.sales_order_number=s.sales_order_number 
		where sales_date between '".date('Y-m-d')."' 
		and '".date("Y-m-d")." 23:59:50' 
		 
		
		";
		echo datasource($sql);
	}
	
	function list_nota_open(){
	    $sql="select invoice_number,invoice_date,
		if(coalesce(amount,0)=0,inv_amount,amount) as amount
		 from invoice 
	    where invoice_type='I' and (paid=0 or paid is null) 
	    and (saldo_invoice>0 or saldo_invoice is null)";
        $sql.=" order by invoice_date desc limit 10";
        
        $list_nota=null;
        if($q=$this->db->query($sql)){
            foreach($q->result_array() as $r){
                $list_nota[]=$r;
            }
        }
        $data['success']=true;
        $data['list_nota']=$list_nota;
        echo json_encode($data);
	}
    function list_nota_open_all(){
    	$d1=date("Y-m-d");
		$d2=date("Y-m-d 23:59:59");
        $sql="select invoice_number,invoice_date,
		if(coalesce(i.amount,0),i.inv_amount,i.amount) as amount,
		i.sold_to_customer,
        i.salesman,c.company from invoice i 
        left join customers c on c.customer_number=i.sold_to_customer 
        where invoice_type='I' and (paid=0 or paid is null) 
        and (saldo_invoice>0 or saldo_invoice is null) 
		and i.invoice_date between '$d1' and '$d2' 
        ";
        $sql.=" order by invoice_date desc limit 100";
        echo datasource($sql);
    }
		
}
