<?php 
error_reporting(E_ALL);
require_once('db_connect.php');
$db = new DB_CONNECT();
require_once("libs.php");

$message="Unknown Error !";
$success=false;
$api_cmd=$_POST['api_cmd'];
if(isset($_GET['api_cmd']))$api_cmd=$_GET['api_cmd'];
$supplier_number=$_POST['supplier_number'];
$supplier_name=$_POST['supplier_name'];
$street=$_POST['street'];
$phone=$_POST['phone'];
$email=$_POST['email'];

$uid="";
if(isset($_POST['uid']))$uid=$_POST['uid'];
if(isset($_GET['uid']))$uid=$_GET['uid'];
$cid=cid($db,$uid);


$rows=0;
$s="select count(1) as cnt from suppliers where supplier_number='$supplier_number'";
if($q=mysqli_query($db->con,$s)){
    if($r=mysqli_fetch_object($q)){
        $rows=$r->cnt;
    }
}
$s2="";
if($rows==0){
    if($supplier_number=="AUTO")$supplier_number=date('ymdHis');
    $s="insert into suppliers  set supplier_number='$supplier_number',";
} else {
    $s="update suppliers set ";
    $s2=" where supplier_number='$supplier_number'";
}
$s .= "supplier_name='$supplier_name', 
street='$street',email='$email',phone='$phone' ";
if($cid!="")$s.=",cid='$cid' ";

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