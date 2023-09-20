<?php 
error_reporting(E_ALL);
require_once('../db_connect.php');
$db = new DB_CONNECT();
$api_cmd="";
if(isset($_GET['api_cmd']))$api_cmd=$_GET['api_cmd'];
$user_id="";
if(isset($_GET['user_id']))$user_id=$_GET['user_id'];
if(isset($_POST['user_id']))$user_id=$_POST['user_id'];
$password="";
if(isset($_GET['password']))$password=$_GET['password'];
if(isset($_POST['password']))$password=$_POST['password'];

$token="";
$id=0;
$message="Unknown Error";
$success=false;

$data=null;
$sql ="select * from user where user_id='$user_id'";
$result = mysqli_query($db->con,$sql);		
$message.=" ".mysqli_error($db->con);
if($result){
	$data=mysqli_fetch_assoc($result);
	if($data){
		if($password==$data['password']){
			$success=true;
			$token=mb_strtoupper(strval(bin2hex(openssl_random_pseudo_bytes(6))));	
			$message="";
		} else {
			$data=null;
		}	
	}
}
$data['success']=$success;
$data['message']=$message;
$data['token']=$token;
echo json_encode($data);
?>