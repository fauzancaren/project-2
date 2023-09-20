<?php 
error_reporting(E_ALL);
require_once('db_connect.php');
$db = new DB_CONNECT();
require_once('libs.php');
$message="Unknown Error !";
$success=false;
$api_cmd=$_POST['api_cmd'];
if(isset($_GET['api_cmd']))$api_cmd=$_GET['api_cmd'];

$uid="";
if(isset($_POST['uid']))$uid=$_POST['uid'];
if(isset($_GET['uid']))$uid=$_GET['uid'];
$cid=cid($db,$uid);

$table_no=$_POST['kode'];
$table_name='';
if(isset($_POST['table_name']))$table_name=$_POST['table_name'];
$rows=0;
$s="select count(1) as cnt from fb_room where room_code='$table_no'";
if($q=mysqli_query($db->con,$s)){
    if($r=mysqli_fetch_object($q)){
        $rows=$r->cnt;
    }
}
$s2="";
if($rows==0){
    $s="insert into fb_room set cid='$cid',room_code='$table_no', ";
} else {
    $s="update fb_room set ";
    $s2=" where room_code='$table_no'";
}
$s .= "  room_name='$table_no',RType='table'  $s2";
if($api_cmd=="table_delete"){
    $s="delete from fb_room where room_code='$table_no'";
    $s2="";
}
mysqli_query($db->con,$s);
if(!mysqli_error($db->con)){
    $success=true;
    $message="Success";
} else {
    echo mysqli_error($db->con);
}
$data['success']=$success;
$data['message']=$message;
echo json_encode($data);
?>