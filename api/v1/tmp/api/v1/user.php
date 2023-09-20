<?php 
error_reporting(E_ALL);
require_once('db_connect.php');
$db = new DB_CONNECT();
require_once('libs.php');

$api_cmd="";
if(isset($_POST['api_cmd']))$api_cmd=$_POST['api_cmd'];
if(isset($_GET['api_cmd']))$api_cmd=$_GET['api_cmd'];

$user_id="";
if(isset($_POST['user_id']))$user_id=$_POST['user_id'];
if(isset($_GET['user_id']))$user_id=$_GET['user_id'];

if($user_id==""){
    if(isset($_POST['handphone']))$user_id=$_POST['handphone'];
}
$id=0;
$message="Unknown Error or Invalid Account !";
$data=null;
$success=false;
$username='';if(isset($_POST['username']))$username=$_POST['username'];
$email='';if(isset($_POST['email']))$email=$_POST['email'];
$handphone='';if(isset($_POST['handphone']))$handphone=$_POST['handphone'];
$address='';if(isset($_POST['address']))$address=$_POST['address'];
$city='';if(isset($_POST['city']))$city=$_POST['city'];
$kecamatan='';if(isset($_POST['kecamatan']))$kecamatan=$_POST['kecamatan'];
$kode_pos='';if(isset($_POST['kode_pos']))$kode_pos=$_POST['kode_pos'];
$password='';if(isset($_POST['password']))$password=$_POST['password'];
$branch_code='';if(isset($_POST['branch_code']))$branch_code=$_POST['branch_code'];
    
$s ="select * from user where user_id='$user_id'"; 

if($q = mysqli_query($db->con,$s)){
    if($data=mysqli_fetch_assoc($q)){
        $message="Success";
        $success=true;
    }
}  

if($api_cmd=="user_save_add"){       
    //|| $password=="" jgn di validasi karena add otomatis dari facebook user
    if($user_id=="" || $username==""  ){
        $data['success']=false;
        $data['message']="Isi user id, username, password !";
        echo json_encode($data);
        exit;
    }
    $s="insert into user set user_id='$user_id',username='$username',email='$email',password='$password',
    handphone='$handphone',address='$address',city='$city',kecamatan='$kecamatan',kode_pos='$kode_pos', 
    branch_code='$branch_code'";
    if($q=mysqli_query($db->con,$s)){      
        $message="Success";
        $success=true;
        $s="insert into customers set customer_number='$user_id',company='$username',email='$email',
        phone='$handphone',street='$address',city='$city'";
        mysqli_query($db->con,$s);
    } else {
        $message=mysqli_error($db->con);
        $success=false;
        $data=null;
    }
}
if($api_cmd=="user_save") {
    if($data){
        if($user_id=="" || $username==""  ){
            $data['success']=false;
            $data['message']="Isi user id, username, password!";
            echo json_encode($data);
            exit;
        }
        $s="update user set username='$username',email='$email', ";
        if($password!="")$s.="password='$password', ";
        $s.="branch_code='$branch_code',
        handphone='$handphone',address='$address',city='$city',kecamatan='$kecamatan',kode_pos='$kode_pos'
        where user_id='$user_id' ";
        if($q=mysqli_query($db->con,$s)){      
            $message="Success";
            $success=true;
        } else {
            $message=mysqli_error($db->con);
            $success=false;
        }
    } else {
        $message="User Id not found !";
        $success=false;
    } 
}
if($api_cmd=="register"){
    if($user_id=="AUTO"){
        $user_id="K".date("ymdHis");
        $cid="C".$user_id;
        $s="insert into user set user_id='$user_id',username='$username',email='$email',password='$password',
        userlevel='kasir',cid='$cid',handphone='$handphone',address='$address',city='$city',kecamatan='$kecamatan',kode_pos='$kode_pos'";
        mysqli_query($db->con,$s);
 
        $s="insert into customers set customer_number='$user_id',company='$username',email='$email',
        phone='$handphone',street='$address',city='$city',cid='$cid'";
        mysqli_query($db->con,$s);
        
        $s="insert into preferences set company_code='$cid',company_name='$username',street='$address',
        phone_number='$handphone',email='$email'";
        mysqli_query($db->con,$s);

        $s ="select * from user where user_id='$user_id'"; 

        if($q = mysqli_query($db->con,$s)){
            if($data=mysqli_fetch_assoc($q)){
                $message="Success";
                $success=true;
            }
        }
    }
}
$data['success']=$success;
$data['message']=$message;
echo json_encode($data);
?>