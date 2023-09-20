<?php 
error_reporting(E_ALL);
require_once('db_connect.php');
$db = new DB_CONNECT();
$api_cmd="";
if(isset($_GET['api_cmd']))$api_cmd=$_GET['api_cmd'];
if(isset($_POST['api_cmd']))$api_cmd=$_POST['api_cmd'];

$search="";
if(isset($_GET['search']))$search=$_GET['search'];
if(isset($_POST['search']))$search=$_POST['search'];
$search=urldecode($search);

$customer_number="";
if(isset($_GET['customer_number']))$customer_number=$_GET['customer_number'];
if(isset($_POST['customer_number']))$customer_number=$_POST['customer_number'];


$limit="";
if(isset($_GET['limit']))$limit=$_GET['limit'];
if(isset($_POST['limit']))$limit=$_POST['limit'];
if($limit=="")$limit="900";

$offset="";
if(isset($_GET['offset']))$offset=$_GET['offset'];
if(isset($_POST['offset']))$offset=$_POST['offset'];
if($offset=="")$offset="0";
$offset=$offset*$limit;


$id=0;
$message="Unknown Error";
$success=false;

$dataset=null;
$sql ="select i.invoice_number,i.invoice_date,i.amount,i.payment_terms,i.comments,i.salesman, 
i.sold_to_customer,c.company
from invoice i left join customers c on c.customer_number=i.sold_to_customer 
	where i.invoice_type='I' and (i.paid is null or i.paid='0') ";	
if($search!=""){
	$sql.=" and c.company like '%".$search."%'";
}
if($customer_number!=""){
	$sql.=" and i.sold_to_customer='$customer_number'";
}
$sql.=" limit $offset,$limit";
$result = mysqli_query($db->con,$sql);		
if($result){
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