<?php
$CI =& get_instance();
$CI->load->model('company_model');
$model=$CI->company_model->get_by_id($this->access->cid)->row();
$date1= date('Y-m-d H:i:s', strtotime($this->input->post('txtDateFrom')));
$date2= date('Y-m-d H:i:s', strtotime($this->input->post('txtDateTo')));
$category="";
$supplier="";

		$salesman=$CI->input->post("text1");
		$customer=$CI->input->post("text2");
		$outlet=$CI->input->post("text3");


$sql="select il.invoice_number,i.invoice_date,i.sold_to_customer,c.company,i.payment_terms,
sum(il.quantity) as qty_sale,
sum(il.amount) as amount_sale,sum(il.cost*il.quantity) as amount_cost,
sum(il.amount-(il.cost*il.quantity)) as profit,
(sum(il.amount-(il.cost*il.quantity))/sum(il.amount))*100 as profit_prc
from invoice i 
left join invoice_lineitems il on il.invoice_number=i.invoice_number
left join inventory s on s.item_number=il.item_number
left join customers c on c.customer_number=i.sold_to_customer
where i.invoice_type='I' and i.invoice_date between '$date1' and '$date2'  
";
if($category!="")$sql.=" and s.category='$category'";
if($supplier!="")$sql.=" and s.supplier_number='$supplier'";
 
if($customer!="")$sql.=" and i.sold_to_customer='$customer'";
if($outlet!="")$sql.=" and il.warehouse_code='$outlet'";
$logged_in=$this->session->userdata('logged_in');
if($logged_in['flag1']=='1'){
	$salesman=$logged_in['username'];
	$CI->load->model("salesman_model");
	$salesman_uid="";
	$qs=$CI->salesman_model->get_by_user_id($salesman);
	if($rs=$qs->row()){
		$salesman=$rs->salesman;
	}
	$sql2=" and i.salesman='$salesman'";
	
	$CI->load->model("user_model");
	$sql3=$CI->user_model->get_sales_by_spv($logged_in['user_id']);
	if($sql3!=""){
		$sql2=" and i.salesman in ($sql3)";
	}
	$sql.=$sql2;

} else {
	if($salesman!="")$sql.=" and i.salesman='" . $salesman . "'";
}
$sql.=" group by il.invoice_number,i.invoice_date,i.sold_to_customer,i.payment_terms";

$data['content']=browse_select( array('sql'=>$sql,'show_action'=>false,
    "fields_sum"=>array("qty_sale","amount_sale","amount_cost",
    "profit")));    
    
$data['caption']='RUGI LABA PENJUALAN PER INVOICE';
$data['criteria']="Date From: $date1 - $date2, Customer: $customer, Salesman: $salesman, Outlet: $outlet";

echo load_view('simple_print.php',$data);    

?>
