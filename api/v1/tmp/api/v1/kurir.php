<?php 
error_reporting(E_ALL);
require_once('db_connect.php');
$db = new DB_CONNECT();

$api_cmd="";
if(isset($_GET['api_cmd']))$api_cmd=$_GET['api_cmd'];
if(isset($_POST['api_cmd']))$api_cmd=$_POST['api_cmd'];

$user_id=$_POST['user_id'];
$tgl=Date('Y-m-d H:i:s');

$success=false;
$message="Unknown Error !";
if($api_cmd=="save"){
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $phone=$_POST['phone'];
    $mode=$_POST['mode'];
    $cnt=0;
    $s="select count(1) as cnt from shipped_via where shipped_via='$nama'";
    if($q=mysqli_query($db->con,$s)){
        if($r=mysqli_fetch_object($q)){
            $cnt=$r->cnt;
        }
    }
    if($mode=="add"){
        $s="insert into shipped_via set shipped_via='$nama',address_1='$alamat',
            telp_1='$phone',ref='$user_id'";
        mysqli_query($db->con,$s);
        $s="insert into user set user_id='$nama',username='$nama',password='123456',
        branch_code='$user_id',address='$alamat',handphone='$phone',userlevel='kurir'";
        mysqli_query($db->con,$s);        
    }
    if($mode=="view"){
        $s="update shipped_via set address_1='$alamat',
            telp_1='$phone',ref='$user_id' where shipped_via='$nama'";
        mysqli_query($db->con,$s);        
    }
    $message=mysqli_error($db->con);
    if($message==""){
        $message="Data sudah disimpan. \n Silahkan refresh untuk memastikan.";
        $success=true;
    }


} else {
    $sql="select * from shipped_via ";
    $result = mysqli_query($db->con,$sql);		
    $dataset=null;
    if($result){
        $success=true;
        $message="Sukses.";
        $dataset=mysqli_fetch_all($result,MYSQLI_ASSOC);
    
    } else {
        $message=mysqli_error($db->con);
    }    
}

$data['data']=$dataset;
$data['success']=$success;
$data['message']=$message;
echo json_encode($data);