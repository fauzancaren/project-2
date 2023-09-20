<?php 
error_reporting(E_ALL);
require_once('db_connect.php');
$db = new DB_CONNECT();
$api_cmd="";
if(isset($_GET['api_cmd']))$api_cmd=$_GET['api_cmd'];
$invoice_number="";
if(isset($_GET['invoice_number']))$invoice_number=$_GET['invoice_number'];
if(isset($_POST['invoice_number']))$invoice_number=$_POST['invoice_number'];

$id=0;
$message="Unknown Error";
$success=false;

$dataset=null;
$sql ="select i.invoice_number,i.invoice_date,i.amount,i.payment_terms,i.comments,i.salesman, 
i.sold_to_customer,c.company
from invoice i left join customers c on c.customer_number=i.sold_to_customer 
where invoice_number='$invoice_number'";

if($result = mysqli_query($db->con,$sql)){
    $dataset=mysqli_fetch_all($result,MYSQLI_ASSOC);
}
if(!mysqli_error($db->con)){
    $success=true;
    $message="Success";
}

$data['data']=$dataset;
$data['success']=$success;
$data['message']=$message;
echo json_encode($data);

?>