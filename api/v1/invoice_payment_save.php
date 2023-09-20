<?php 
error_reporting(E_ALL);
require_once('db_connect.php');
$db = new DB_CONNECT();
$message="Unknown Error !";
$success=false;
$api_cmd=$_POST['api_cmd'];
if(isset($_GET['api_cmd']))$api_cmd=$_GET['api_cmd'];
$amount_paid=$_POST['amount_paid'];
$invoice_number=$_POST['invoice_number'];
$how_paid=$_POST['how_paid'];

$s="insert into payments  set invoice_number='$invoice_number', how_paid='$how_paid',
amount_paid='$amount_paid',no_bukti='$invoice_number',date_paid='".date("Y-m-d H:i:s")."'";
mysqli_query($db->con,$s);
if(!mysqli_error($db->con)){
    $success=true;
    $message="Success";
}
mysqli_query($db->con,"update invoice set paid=1 where invoice_number='$invoice_number'");

$data['success']=$success;
$data['message']=$message;
echo json_encode($data);
?>
