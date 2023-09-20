<?php 
error_reporting(E_ALL);
require_once('db_connect.php');
$db = new DB_CONNECT();
require_once("libs.php");

$api_cmd="";
if(isset($_GET['api_cmd']))$api_cmd=$_GET['api_cmd'];
if(isset($_POST['api_cmd']))$api_cmd=$_POST['api_cmd'];

$search="";
if(isset($_GET['search']))$search=$_GET['search'];
if(isset($_POST['search']))$search=$_POST['search'];
$search=urldecode($search);

$table_no="";
if(isset($_GET['kode']))$salesman=$_GET['kode'];
if(isset($_POST['kode']))$salesman=$_POST['kode'];


$uid="";
if(isset($_POST['uid']))$uid=$_POST['uid'];
if(isset($_GET['uid']))$uid=$_GET['uid'];
$cid=cid($db,$uid);

$limit="";
if(isset($_GET['limit']))$limit=$_GET['limit'];
if(isset($_POST['limit']))$limit=$_POST['limit'];
if($limit=="")$limit="100";

$offset="";
if(isset($_GET['offset']))$offset=$_GET['offset'];
if(isset($_POST['offset']))$offset=$_POST['offset'];
if($offset=="")$offset="0";
$offset=$offset*$limit;


$id=0;
$message="Unknown Error";
$success=false;

$dataset=null;
$sql ="select *,f.room_code as table_no from fb_room f where 1=1 ";	
if($search!=""){
	$sql.=" and room_name like '%".$search."%'";
}
if($table_no!=""){
	$sql.=" and room_code='$table_no'";
}
if($cid!="" && USE_CID)$sql.=" and f.cid='$cid' ";

$sql.=" order by f.room_code";
$sql.=" limit $offset,$limit";

$result = mysqli_query($db->con,$sql);		
$message=mysqli_error($db->con);
if($result){
	$dataset=mysqli_fetch_all($result,MYSQLI_ASSOC);
	$success=true;
	$message="Success";
}
if($dataset!=null){
	if(count($dataset)==0){
		$dataset=null;
		$success=false;
	}
}
$data['success']=$success;
$data['message']=$message;
$data['data']=$dataset;

echo json_encode($data);

?>