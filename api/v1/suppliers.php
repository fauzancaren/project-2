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

$supplier_number="";
if(isset($_GET['supplier_number']))$supplier_number=$_GET['supplier_number'];
if(isset($_POST['supplier_number']))$supplier_number=$_POST['supplier_number'];


$limit="";
if(isset($_GET['limit']))$limit=$_GET['limit'];
if(isset($_POST['limit']))$limit=$_POST['limit'];
if($limit=="")$limit="100";

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
if($api_cmd=="delete"){
	$sql="delete from suppliers where supplier_number='$supplier_number'";
	$result = mysqli_query($db->con,$sql);
	$message.=" ".mysqli_error($db->con);
	if($result){
		$success=true;
		$message="Success";
	}
} else {
	$dataset=null;
	$sql ="select supplier_number,supplier_name,street,phone,email
		from suppliers	where 1=1 ";	
	if($search!=""){
		$sql.=" and (supplier_number='$search' or supplier_name like '%".$search."%')";
	}
	if($supplier_number!=""){
		$sql.=" and supplier_number='$supplier_number'";
	}
	if($cid!="")$sql.=" and cid='$cid' ";

	$sql.=" order by supplier_name";

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