<?php 
error_reporting(E_ALL);
require_once('db_connect.php');
$db = new DB_CONNECT();
$message="Unknown Error !";
$success=false;
$api_cmd=$_POST['api_cmd'];
if(isset($_GET['api_cmd']))$api_cmd=$_GET['api_cmd'];
$salesman=$_POST['salesman'];
$rows=0;
$s="select count(1) as cnt from salesman where salesman='$salesman'";
if($q=mysqli_query($db->con,$s)){
    if($r=mysqli_fetch_object($q)){
        $rows=$r->cnt;
    }
}
$s2="";
if($rows==0){
    $s="insert into salesman  set salesman='$salesman'";
} else {
    $s="update salesman set salesman='$salesman' ";
    $s2=" where salesman='$salesman'";
}
$s .= "  $s2";
if($api_cmd=="waiter_delete"){
    $s2="";
    $s="delete from salesman where salesman='$salesman'";
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