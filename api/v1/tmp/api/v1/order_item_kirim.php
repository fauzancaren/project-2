<?php 
error_reporting(E_ALL);
require_once('db_connect.php');
$db = new DB_CONNECT();

$api_cmd="";
if(isset($_GET['api_cmd']))$api_cmd=$_GET['api_cmd'];
if(isset($_POST['api_cmd']))$api_cmd=$_POST['api_cmd'];

$user_id=$_POST['user_id'];
$line="";
if(isset($_POST["lineid"]))$line=$_POST['lineid'];
$kurir="";
if(isset($_POST['kurir']))$kurir=$_POST['kurir'];
$order_no="";
if(isset($_POST['order_no']))$order_no=$_POST['order_no'];
$tgl=Date('Y-m-d H:i:s');
$success=false;
$message="Unknown Error !";
if($api_cmd=="delivered" && $line!=""){
    $sql="update sales_order_lineitems set update_status='8' where line_number='$line'";
    $result = mysqli_query($db->con,$sql);		
    if($result){
        $success=true;
        $message="Sukses, barang sudah sampai tujuan.";
        $s="select count(1) as cnt from sales_order_lineitems 
        where sales_order_number='$order_no' and update_status='6'";
        if($q=mysqli_query($db->con,$s)){
            if($r=mysqli_fetch_assoc($q)){
                $cnt=$r['cnt'];
                if($cnt==0){
                    $s="update sales_order set status='8' where sales_order_number='$order_no' ";
                    mysqli_query($db->con,$s);    
                }
            }
        }
    } else {
        $message=mysqli_error($db->con);
   }  
} else {
    $sql="update sales_order_lineitems set shipped=true,ship_date='$tgl',
    ship_qty=quantity,
    update_status='6',update_by='$kurir',update_date='$tgl'
    where line_number='$line'";
   $result = mysqli_query($db->con,$sql);		
   if($result){
       $success=true;
       $message="Sukses, barang siap dikirim.";
       $s="select count(1) as cnt from sales_order_lineitems 
       where sales_order_number='$order_no' and update_status is null";
       if($q=mysqli_query($db->con,$s)){
           if($r=mysqli_fetch_assoc($q)){
               $cnt=$r['cnt'];
               if($cnt==0){
                   $s="update sales_order set status='6' where sales_order_number='$order_no' ";
                   mysqli_query($db->con,$s);
   
               }
           }
       }
   } else {
        $message=mysqli_error($db->con);
   }
}
$data['success']=$success;
$data['message']=$message;
echo json_encode($data);
