<?php 
error_reporting(E_ALL);
require_once('db_connect.php');
$db = new DB_CONNECT();
require_once('libs.php');

$message="Unknown Error !";
$success=false;
$api_cmd=$_POST['api_cmd'];
if(isset($_GET['api_cmd']))$api_cmd=$_GET['api_cmd'];
$item_number=$_POST['item_number'];

$uid="";
if(isset($_POST['uid']))$uid=$_POST['uid'];
if(isset($_GET['uid']))$uid=$_GET['uid'];
$cid=cid($db,$uid);

if($api_cmd=="item_delete"){
    $s="delete from inventory where item_number='$item_number' ";
} else {
    if($item_number=="AUTO")$item_number=date("Ymdhis");
    $description=$_POST['description'];
    $unit_of_measure=$_POST['unit_of_measure'];
    $retail=$_POST['retail'];
    $cost=$_POST['cost'];
    $special_features=$_POST['special_features'];
    $item_picture="";
    if(isset($_POST['item_picture']))$item_picture=$_POST['item_picture'];
    $category="";
    if(isset($_POST['category']))$category=$_POST['category'];
    $supplier_number="";
    if(isset($_POST['supplier_number']))$supplier_number=$_POST['supplier_number'];
    $discount="0";
    if(isset($_POST['discount']))$discount=$_POST['discount'];
    
    $rows=0;
    $s="select count(1) as cnt from inventory where item_number='$item_number'";
    if($q=mysqli_query($db->con,$s)){
        if($r=mysqli_fetch_object($q)){
            $rows=$r->cnt;
        }
    }
    $s2="";
    if($rows==0){
        $s="insert into inventory  set item_number='$item_number',";
    } else {
        $s="update inventory set ";
        $s2=" where item_number='$item_number'";
    }
    $s .= "description='$description', 
    retail='$retail',cost='$cost',unit_of_measure='$unit_of_measure', 
    special_features='$special_features'";
    if($category!="")$s.=",category='$category'";
    if($supplier_number!="")$s.=",supplier_number='$supplier_number'";
    if($discount!="")$s.=",disc_prc_1='$discount' ";
    
    if($cid!=""){
        $s.=",cid='$cid' ";
    }
    $s.=$s2;

    //echo $s;

    //,category='$category',supplier_number='$supplier_number',
    //discount='$discount' 
}


mysqli_query($db->con,$s);
if(!mysqli_error($db->con)){
    $success=true;
    $message="Success";
}
$data['nomor']=$item_number;
$data['success']=$success;
$data['message']=$message;
echo json_encode($data);


?>