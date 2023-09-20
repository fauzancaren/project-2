<?php 
error_reporting(E_ALL);
require_once('db_connect.php');
require_once('libs.php');

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

$s ="select * from user where user_id='$user_id'"; 
if($q = mysqli_query($db->con,$s)){
	if($data=mysqli_fetch_assoc($q)){
		$message="Success";
		$success=true;
	}
}

if(!$success){
	$s ="select * from user where handphone='$user_id'"; 
	if($q = mysqli_query($db->con,$s)){
		if($data=mysqli_fetch_assoc($q)){
			$message="Success";
			$success=true;
			$user_id=$data['user_id'];
		}
	}
}
if(!$success){
	$s ="select * from user where email='$user_id'"; 
	if($q = mysqli_query($db->con,$s)){
		if($data=mysqli_fetch_assoc($q)){
			$message="Success";
			$success=true;
			$user_id=$data['user_id'];
		}
	}
}

$sql ="select u.*,customer_record_type as kelompok,c.lat,c.lng
  from user u 
  left join customers c on c.customer_number=u.user_id 
  where user_id='$user_id'";

$result = mysqli_query($db->con,$sql);		
$message.=" ".mysqli_error($db->con);
if($result){
	$data=mysqli_fetch_assoc($result);
	if($data){
		if($data['userlevel']=="kurir"){
			$data['kelompok']="kurir";
		}
		if($password==$data['password']){
			$success=true;
			$token=mb_strtoupper(strval(bin2hex(openssl_random_pseudo_bytes(6))));	
			$message="";
		} else {
			$data=null;
			$success=false;
		}	
	}
} else {
	$success=false;
}


$data['saldo_deposit']=saldo_deposit($db,$user_id);
$data['success']=$success;
$data['message']=$message;
$data['token']=$token;
echo json_encode($data);
?>