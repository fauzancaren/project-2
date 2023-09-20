<?php 
error_reporting(E_ALL);
require_once('db_connect.php');
$db = new DB_CONNECT();
$message="Unknown Error !";
$success=false;
$api_cmd=$_POST['api_cmd'];
if(isset($_GET['api_cmd']))$api_cmd=$_GET['api_cmd'];
$invoice_number=$_POST['invoice_number'];
if($invoice_number=="AUTO" || $invoice_number==""){
    $invoice_number="P".date("ymdHis");
    $s="insert into invoice set invoice_number='$invoice_number',sold_to_customer='CASH',
    invoice_date='".date("Y-m-d H:i:s")."',payment_terms='KREDIT',ship_to_customer='CASH',
    invoice_type='I',amount=0,type_of_invoice='Android' ";
    mysqli_query($db->con,$s);
}
$item_number=$_POST['item_number'];
$quantity=$_POST['quantity'];
$description="";
$unit="Pcs";
$price=0;
$cost=0;
$item_picture="";
$amount=0;
$s="select description,unit_of_measure,retail,cost,item_picture 
from inventory where item_number='$item_number'";
if($query=mysqli_query($db->con,$s)){
    $item=mysqli_fetch_assoc($query);
    $description=$item['description'];
    if($item['unit_of_measure']!="")$unit=$item['unit_of_measure'];
    $price=$item['retail'];
    $cost=$item['cost'];
    $item_picture=$item['item_picture'];
}
$amount=$quantity*$price;
$s="insert into invoice_lineitems  set invoice_number='$invoice_number',item_number='$item_number',
description='$description',unit='$unit',price='$price',quantity='$quantity',amount='$amount' ";
mysqli_query($db->con,$s);

if(!mysqli_error($db->con)){
    $success=true;
    $message="Success";
}

//load lineitems
$dataset=null;
$s="select i.item_number,i.description,i.quantity,i.price,i.unit,i.amount,i.discount,
i.line_number,s.item_picture from invoice_lineitems i 
left join inventory s on s.item_number=i.item_number  
where invoice_number='$invoice_number'";
if($result = mysqli_query($db->con,$s)){
	$dataset=mysqli_fetch_all($result,MYSQLI_ASSOC);
	$success=true;
    $message="Success";
}
$item_count=0;
$total=0;
$s="select count(1) as cnt,sum(amount) as amt from invoice_lineitems where invoice_number='$invoice_number'";
if($result=mysqli_query($db->con,$s)){
    $rst=mysqli_fetch_assoc($result);
    $item_count=$rst['cnt'];
    $total=$rst['amt'];
}
mysqli_query($db->con,"update invoice set amount='$total',total_amount='$total',inv_amount='$total' 
where invoice_number='$invoice_number'");

$data['item_count']=$item_count;
$data['total_amount']=$total;

$data['invoice_number']=$invoice_number;
$data['data']=$dataset;
$data['success']=$success;
$data['message']=$message;
echo json_encode($data);
?>