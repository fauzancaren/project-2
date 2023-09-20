<?php 
error_reporting(E_ALL);
require_once('db_connect.php');
$db = new DB_CONNECT();
require_once('libs.php');

$message="Unknown Error !";
$success=false;
$api_cmd=$_POST['api_cmd'];
if(isset($_GET['api_cmd']))$api_cmd=$_GET['api_cmd'];
$kode="";
if(isset($_POST['kode']))$kode=$_POST['kode'];
if($kode=="AUTO")$kode="C".date("Ymdhis");
$category="";
if(isset($_POST['category']))$category=$_POST['category'];

$description=$_POST['description'];
$icon_file="";
if(isset($_POST['icon_file']))$icon_file=$_POST['icon_file'];

$uid="";
if(isset($_POST['uid']))$uid=$_POST['uid'];
if(isset($_GET['uid']))$uid=$_GET['uid'];
$cid=cid($db,$uid);
if($category=="")$category=$description;
$mode="";
if(isset($_POST['mode']))$mode=$_POST['mode']; 

$rows=0;

    $s="select count(1) as cnt from inventory_categories where kode='$kode'";
    if($q=mysqli_query($db->con,$s)){
        if($r=mysqli_fetch_object($q)){
            $rows=$r->cnt;
        }
    }
    $s2="";
    if($rows==0){
        $s="insert into inventory_categories  set kode='$kode',";
    } else {
        $s="update inventory_categories set ";
        $s2=" where kode='$kode'";
    }
    $s .= "category='$category',description='$description'"; 
    if($icon_file!="")$s.=",icon_picture='$icon_file' ";
    if($cid!="")$s.=",cid='$cid' ";
    
    $s.=" $s2";

mysqli_query($db->con,$s);
if(!mysqli_error($db->con)){
    $success=true;
    $message="Success";
} else {
    $message=mysqli_error($db->con);
} 
if($message=="")$message="Unknown Error !";
$data['success']=$success;
$data['message']=$message;
echo json_encode($data);
?>