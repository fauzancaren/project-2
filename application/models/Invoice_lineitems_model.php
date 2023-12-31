<?php
class Invoice_lineitems_model extends CI_Model {

private $primary_key='line_number';
private $table_name='invoice_lineitems';
private $invoice_number='';

function __construct(){
	parent::__construct();        
	$this->load->model('inventory_model');
	$this->load->model("inventory_prices_model");
      
}
  
function count_all(){
	return $this->db->count_all($this->table_name);
}
function get_by_id($id){
	$this->db->where($this->primary_key,$id);
	return $this->db->get($this->table_name);
}
function get_by_nomor($nomor){
	$this->db->where("invoice_number",$nomor);
	return $this->db->get($this->table_name);
}

function save($data){
	$this->invoice_number=$data['invoice_number'];
	
	$id=0;
	if(isset($data['line_number']))$id=$data['line_number'];
	$item=$this->inventory_model->get_by_id($data['item_number'])->row();

	if(!isset($data['discount']))$data['discount']=0;
	if($data['discount']=='')$data['discount']=0;
	if($data['discount']>1)$data['discount']=$data['discount']/100;

	if(!isset($data['disc_2']))$data['disc_2']=0;
	if($data['disc_2']=='')$data['disc_2']=0;
	if($data['disc_2']>1)$data['disc_2']=$data['disc_2']/100;

	if(!isset($data['disc_3']))$data['disc_3']=0;
	if($data['disc_3']=='')$data['disc_3']=0;
	if($data['disc_3']>1)$data['disc_3']=$data['disc_3']/100;

	if($data['quantity']=='')$data['quantity']=0;
	if(!isset($data['amount']))$data['amount']=0;
	if($data['amount']=='')$data['amount']=0;
	
	if(!isset($data['price']))$data['price']=0;
	if($data['price']=='')$data['price']=0;
    if(!isset($data['unit']))$data['unit']="Pcs";
	if(!isset($data['mu_qty']))$data['mu_qty']=$data['quantity'];
	if(!isset($data['mu_harga']))$data['mu_harga']=$data['price'];
	if(!isset($data['multi_unit']))$data['multi_unit']=$data['unit'];			

	// apabila default satuan tidak sama dg inputan 
	$lFoundOnPrice=false;
	if($item){
		if($item->unit_of_measure!=$data['unit']) {
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
		if($data['price']==0){
			if($unit['unit_value']<1){	//kalau diseting unitnya kebalik dari 
										//satuan terbesar ke kecil, misal lusin ke pcs
										//isi unit_value adalah 1/12 = 0.083333
				$data['price']=$data['mu_harga']*$unit['unit_value'];
			} else {
				$data['price']=$data['mu_harga']/$unit['unit_value'];
				
			}
		}
		$data['mu_qty']=$data['quantity']*$unit['unit_value'];
		$data['mu_harga']=item_sales_price($data['item_number']);
		$data['multi_unit']=$unit['from_unit'];		
		
	} 
	if(!$lFoundOnPrice ){
		if( $data['unit']==$data['multi_unit']){
			$data['mu_qty']=$data['quantity'];
			$data['mu_harga']=$data['price'];
			$data['multi_unit']=$data['unit'];			
		}
	}	
	if($data['mu_qty']=='')$data['mu_qty']=$data['quantity'];
	if($data['mu_harga']=='')$data['mu_harga']=$data['price'];
	if($data['multi_unit']=='')$data['multi_unit']=$data['unit'];			

	if($item){
		if($data['description']=="") $data['description']=$item->description;
		if(trim($data['unit'])=="") $data['unit']=$item->unit_of_measure;
		if(!isset($data['cost'])){
			$data['cost']=$item->cost;
		} else {
			if($data['cost']==0){
				$data['cost']=$item->cost;				
			}
		}
	}
	if($qinv=$this->db->select("invoice_date")
		->where("invoice_number",$data["invoice_number"])->get("invoice")){
			if($rinv=$qinv->row()){
				$tanggal=$rinv->invoice_date;
			}
		}
	
	
	//echo "Unit: ".$data['unit'].",Qty: ".$data['quantity'].", Price: ".$data['price'];
	//echo ", MUnit: ".$data['multi_unit'].",MQty: ".$data['mu_qty'].", MPrice: ".$data['mu_harga'];
	
	$gross=floatval($data['quantity'])*floatval($data['price']);

	$disc_1=floatval($data['discount']);
	$disc_amount=0;
	if(isset($data['discount_amount']))$disc_amount=floatval($data['discount_amount']);
	if($disc_1>0)$disc_amount=$disc_1*$gross;
	$gross=$gross-$disc_amount;
	
	$disc_2=floatval($data['disc_2']);
	$disc_amount_2=0;
	if(isset($data['disc_amount_2']))$disc_amount_2=floatval($data['disc_amount_2']);
	if($disc_2>0)$disc_amount_2=$disc_2*$gross;
	$gross=$gross-$disc_amount_2;

	$disc_3=floatval($data['disc_3']);
	$disc_amount_3=0;
	if(isset($data['disc_amount_3']))$disc_amount_3=floatval($data['disc_amount_3']);
	if($disc_3>0)	$disc_amount_3=$disc_3*$gross;
	$gross=$gross-$disc_amount_3;
	
	if(isset($data['disc_amount_1a']))unset($data['disc_amount_1a']);
	$data['discount_amount']=$disc_amount;
	$data['disc_2']=floatval($data['disc_2']);
	$data['disc_amount_2']=$disc_amount_2;
	$data['disc_3']=floatval($data['disc_3']);
	$data['disc_amount_3']=$disc_amount_3;
	$data['amount']=$gross;
    
	if(!isset($data['warehouse_code'])) {
		$data["warehouse_code"]="";
		$gudang=$data['warehouse_code'];
	} else {
		$gudang=$data['warehouse_code'];
	}
    if($gudang)$gudang=$this->session->userdata("session_outlet","");
    if($gudang=="")$gudang=$this->session->userdata("default_warehouse");
	if($gudang=="" || $gudang=="UNKNOWN")$gudang=current_gudang();
    if($gudang=="")$gudang="Gudang";
	
	$s2="select warehouse_code from invoice_lineitems 
	where invoice_number='$this->invoice_number' and warehouse_code<>''";
	if($s2=$this->db->query($s2)){
		if($r2=$s2->row()){
			$gudang=$r2->warehouse_code;
		}
	}
	if($gudang=="" || $gudang=="UNKNOWN")$gudang=current_gudang();
	
	$data["warehouse_code"]=$gudang;

    $item_no=$data['item_number']; 

    item_need_update($item_no);
	item_need_update_arsip($item_no, $gudang, $tanggal);

	if(isset($data["coa1"])){
		$data["coa1"]=account_id($data["coa1"]);
		$data["revenue_acct_id"]=$data["coa1"];	
	}
	if(isset($data["coa2"]))$data["coa2"]=account_id($data["coa2"]);
	if(isset($data["coa3"]))$data["coa3"]=account_id($data["coa3"]);
	if($id!="" || $id>0){
		$this->db->where($this->primary_key,$id);
		return $this->db->update($this->table_name,$data);
	} else {
		if(isset($data['line_number']))	unset($data['line_number']);		
		$this->db->insert($this->table_name,$data);
	}
	$line_number = $this->db->insert_id();
	$this->set_no_urut();
		
	return $line_number;
}
	function set_no_urut(){
		$no_urut=0;
		$s="select line_number,no_urut from invoice_lineitems where invoice_number='$this->invoice_number' ";
		if($q=$this->db->query($s)){
			foreach($q->result() as $r){
				$no_urut++;
				if($r->no_urut==''){
					$s="update invoice_lineitems set no_urut='$no_urut' where line_number='$r->line_number' ";
					$this->db->query($s);
				}
			}
		}
	}
function update($id,$data){
	if($data['discount']=='')$data['discount']=0;
	if($data['quantity']=='')$data['quantity']=0;
	if($data['amount']=='')$data['amount']=0;
	if($data['price']=='')$data['price']=0;
	if($unit=exist_unit($data['unit'])){
		$data['mu_qty']=$data['quantity']*$unit['unit_value'];
		$data['mu_harga']=item_sales_price($data['item_number']);
		$data['multi_unit']=$unit['from_unit'];		
	} else {
		$data['mu_qty']=$data['quantity'];
		$data['mu_harga']=$data['price'];
		$data['multi_unit']=$data['unit'];
	}
    $item_no=$data['item_number']; 
    item_need_update($item_no);
	
	$tanggal="";
	$gudang=$data['warehouse_code'];
	if($qinv=$this->db->select("invoice_date")
		->where("invoice_number",$data["invoice_number"])->get("invoice")){
			if($rinv=$qinv->row()){
				$tanggal=$rinv->invoice_date;
			}
		}
	item_need_update_arsip($item_no, $gudang, $tanggal);
	
	if($data['quantity']>"0"){
		$this->db->where($this->primary_key,$id);
		return $this->db->update($this->table_name,$data);
	} else {
		return true;
	}
}
function delete($id){
	$this->db->where($this->primary_key,$id);
	return $this->db->delete($this->table_name);
}
function lineitems($invoice_number){
	$this->db->where('invoice_number',$invoice_number);
	return $this->db->get($this->table_name);
}
function sum_total_price($nomor)
{
	return (double)$this->db->query("select sum(amount) as sum_total_price 
		from invoice_lineitems 
        where invoice_number='".$nomor."'")->row()->sum_total_price;
}
function check_revenue_acct($nomor,$type="I") {

	if($set=$this->db->query("select inventory_sales,inventory_cogs  from preferences 
		where not (inventory_sales='0' or inventory_sales is null)")->row()) {

		$sql="update invoice_lineitems 
		left join inventory i on i.item_number=invoice_lineitems.item_number 
		set revenue_acct_id=sales_account
		where  invoice_number='$nomor'
		and (revenue_acct_id is null or revenue_acct_id='0')";
		$this->db->query($sql);
		
		$sql="update invoice_lineitems set revenue_acct_id='".$set->inventory_sales."' 
			where invoice_number='$nomor' 
			and (revenue_acct_id is null or revenue_acct_id='0')";
			
		$this->db->query($sql);
	}
}

function browse($nomor)
{
	$sql="select p.item_number,i.description,p.quantity 
	,p.unit,p.price,p.discount,p.amount,coa.account,coa.account_description,p.line_number
	from invoice_lineitems p
	left join inventory i on i.item_number=p.item_number
	left join chart_of_accounts coa on coa.id=p.revenue_acct_id
	where invoice_number='$nomor'";
	$this->load->helper('browse_helper');
	return browse_simple($sql,"Data Barang / Jasa",700,null,"dgItem");
}
}
