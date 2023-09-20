<?php 
error_reporting(E_ALL);
require_once('db_connect.php');
$db = new DB_CONNECT();
$message="Unknown Error !";
$success=false;
$api_cmd=$_POST['api_cmd'];
if(isset($_GET['api_cmd']))$api_cmd=$_GET['api_cmd'];
$customer_number=$_POST['customer_number'];
$invoice_number=$_POST['invoice_number'];

$s="update invoice set sold_to_customer='$customer_number',ship_to_customer='$customer_number'
  where invoice_number='$invoice_number'";
mysqli_query($db->con,$s);
if(!mysqli_error($db->con)){
    $success=true;
    $message="Success";
}
$data['success']=$success;
$data['message']=$message;
echo json_encode($data);
?>
