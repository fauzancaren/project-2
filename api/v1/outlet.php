<?php 
error_reporting(E_ALL);
require_once('db_connect.php');
$db = new DB_CONNECT();
require_once('libs.php');

$api_cmd="";
if(isset($_GET['api_cmd']))$api_cmd=$_GET['api_cmd'];
$kode="";
if(isset($_GET['kode']))$kode=$_GET['kode'];
if(isset($_POST['kode']))$kode=$_POST['kode'];
$uid="";
if(isset($_POST['uid']))$uid=$_POST['uid'];
if(isset($_GET['uid']))$uid=$_GET['uid'];
$cid=cid($db,$uid);
$mode="";
if(isset($_POST['mode']))$mode=$_POST['mode'];

$id=0;
$message="Unknown Error";
$success=false;
if($mode=="delete"){
    $s="delete from prefernces where kode='$kode'";
	$result = mysqli_query($db->con,$s);		 
	$message="Success";
	$success=true;	
} else {
	$dataset=null;
	$sql ="select company_code,company_name,slogan,street,suite,city_state_zip_code,
    phone_number,fax_number,email,fed_tax_id,cid,file_logo 
	from preferences 
	where 1=1";
	if($kode!=""){
		$sql.=" and company_code='$kode' ";
	}
	if($cid!="" && USE_CID){
		$sql.=" and cid='$cid'";
	}
    //echo $sql;
	$result = mysqli_query($db->con,$sql);		

	if($result){
		$dataset=mysqli_fetch_all($result,MYSQLI_ASSOC);
		$success=true;
		$message="Success";
	}
	if(mysqli_error($db->con)){
		$message=mysqli_error($db->con);
	}
	$data['data']=$dataset;
}
$data['success']=$success;
$data['message']=$message;
echo json_encode($data);

?>