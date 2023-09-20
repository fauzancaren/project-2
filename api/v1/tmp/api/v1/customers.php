<?php 
error_reporting(E_ALL);
require_once('db_connect.php');
$db = new DB_CONNECT();
require_once('libs.php');
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
if($limit=="")$limit="9";

$offset="";
if(isset($_GET['offset']))$offset=$_GET['offset'];
if(isset($_POST['offset']))$offset=$_POST['offset'];
if($offset=="")$offset="0";
$offset=$offset*$limit;

$uid="";
if(isset($_POST['uid']))$uid=$_POST['uid'];
if(isset($_GET['uid']))$uid=$_GET['uid'];
$cid=cid($db,$uid);

$id=0;
$message="Unknown Error";
$success=false;
$dataset=null;
if($api_cmd=="delete"){
	$sql="delete from customers where customer_number='$customer_number'";
	$result = mysqli_query($db->con,$sql);
	$message.=" ".mysqli_error($db->con);
	if($result){
		$success=true;
		$message="Success";
	}
} else {
	$sql ="select customer_number,company,street as address,phone,email,
	customer_record_type
	from customers	where 1=1 ";	
	if($search!=""){
		$sql.=" and (customer_number='$search' or company like '%".$search."%')";
	}
	if($customer_number!=""){
		$sql.=" and customer_number='$customer_number'";
	}
	if($cid!="" && USE_CID){
		$sql.=" and cid='$cid'";
	}

	$sql.=" order by company";

	$sql.=" limit $offset,$limit";

	
	$result = mysqli_query($db->con,$sql);		
	$message.=" ".mysqli_error($db->con);
	if($result){
		$dataset=mysqli_fetch_all($result,MYSQLI_ASSOC);
		$success=true;
		$message="Success";
	}
	$data['data']=$dataset;


}


$data['success']=$success;
$data['message']=$message;
echo json_encode($data);

?>