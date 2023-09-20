<?php 
error_reporting(E_ALL);
require_once('db_connect.php');
$db = new DB_CONNECT();
$message="Unknown Error !";
$success=false;
$api_cmd=$_POST['api_cmd'];
if(isset($_GET['api_cmd']))$api_cmd=$_GET['api_cmd'];
$line_number=$_POST['line_number'];
$quantity=$_POST['quantity'];
$invoice_number=$_POST['invoice_number'];

if($api_cmd=="order_save_line"){
    $s="update invoice_lineitems set quantity='$quantity',amount=price*$quantity 
    where line_number='$line_number'";
    mysqli_query($db->con,$s);
}
if($api_cmd=="order_delete_line"){
    $s="delete from invoice_lineitems where line_number='$line_number'";
    mysqli_query($db->con,$s);
}

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
$data['data']=$dataset;

$item_count=0;
$total=0;
$s="select count(1) as cnt,sum(amount) as amt from invoice_lineitems where invoice_number='$invoice_number'";
if($result=mysqli_query($db->con,$s)){
    $rst=mysqli_fetch_assoc($result);
    $item_count=$rst['cnt'];
    $total=$rst['amt'];
}
$data['item_count']=$item_count;
$data['total_amount']=$total;
$data['line_number']=$line_number;

$data['success']=$success;
$data['message']=$message;
echo json_encode($data);
?>
