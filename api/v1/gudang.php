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

$kode="";
if(isset($_GET['kode']))$kode=$_GET['kode'];
if(isset($_POST['kode']))$kode=$_POST['kode'];

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
	$sql="delete from shipping_locations where location_number='$kode'";
	$result = mysqli_query($db->con,$sql);
	$message.=" ".mysqli_error($db->con);
	if($result){
		$success=true;
		$message="Success";
	}
} else {
	$dataset=null;
	$sql ="select location_number as gudang 
		from shipping_locations	where 1=1 ";	
	if($search!=""){
		$sql.=" and (location_number='$search' or location_number like '%".$search."%')";
	}
	if($kode!=""){
		$sql.=" and location_number='$kode'";
	}
	if($cid!="" && USE_CID)$sql.=" and cid='$cid' ";

	$sql.=" order by location_number";

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