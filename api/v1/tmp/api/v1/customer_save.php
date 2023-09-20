<?php 
error_reporting(E_ALL);
require_once('db_connect.php');
$db = new DB_CONNECT();
require_once("libs.php");

$message="Unknown Error !";
$success=false;
$api_cmd=$_POST['api_cmd'];
if(isset($_GET['api_cmd']))$api_cmd=$_GET['api_cmd'];
$customer_number=$_POST['customer_number'];


$company=$_POST['company'];
$street=$_POST['address'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$customer_record_type="";
if(isset($_POST['customer_record_type']))$customer_record_type=$_POST['customer_record_type'];

$uid="";
if(isset($_POST['uid']))$uid=$_POST['uid'];
if(isset($_GET['uid']))$uid=$_GET['uid'];
$cid=cid($db,$uid);


$rows=0;
$s="select count(1) as cnt from customers where customer_number='$customer_number'";
if($q=mysqli_query($db->con,$s)){
    if($r=mysqli_fetch_object($q)){
        $rows=$r->cnt;
    }
}
$s2="";
if($rows==0){
    if($customer_number=="AUTO")$customer_number=date("ymdHis");
    $s="insert into customers  set customer_number='$customer_number',";
} else {
    $s="update customers set ";
    $s2=" where customer_number='$customer_number'";
}
$s .= "company='$company', customer_record_type='$customer_record_type',
street='$street',email='$email',phone='$phone' ";
if($cid!="")$s.=",cid='$cid'";
$s.=$s2;
mysqli_query($db->con,$s);
if(!mysqli_error($db->con)){
    $success=true;
    $message="Success";
}
$data['success']=$success;
$data['message']=$message;
echo json_encode($data);
?>