<?php 
error_reporting(E_ALL);
require_once('db_connect.php');
$db = new DB_CONNECT();
$message="Unknown Error !";
$success=false;
$api_cmd=$_POST['api_cmd'];
if(isset($_GET['api_cmd']))$api_cmd=$_GET['api_cmd'];
$invoice_number=$_POST['invoice_number'];
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