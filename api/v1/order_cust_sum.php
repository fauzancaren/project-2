<?php 
error_reporting(E_ALL);
require_once('db_connect.php');
$db = new DB_CONNECT();
require_once("libs.php");

$api_cmd="";
if(isset($_GET['api_cmd']))$api_cmd=$_GET['api_cmd'];
if(isset($_POST['api_cmd']))$api_cmd=$_POST['api_cmd'];

$search="";
if(isset($_GET['search']))$search=$_GET['search'];
if(isset($_POST['search']))$search=$_POST['search'];
$search=urldecode($search);

$merchant="";
if(isset($_GET['user_id']))$merchant=$_GET['user_id'];
if(isset($_POST['user_id']))$merchant=$_POST['user_id'];

$status="";
if(isset($_POST['status']))$status=$_POST['status'];

$limit="";
if(isset($_GET['limit']))$limit=$_GET['limit'];
if(isset($_POST['limit']))$limit=$_POST['limit'];
if($limit=="")$limit="900";

$offset="";
if(isset($_GET['offset']))$offset=$_GET['offset'];
if(isset($_POST['offset']))$offset=$_POST['offset'];
if($offset=="")$offset="0";
$offset=$offset*$limit;

$uid="";
if(isset($_POST['uid']))$uid=$_POST['uid'];
if(isset($_GET['uid']))$uid=$_GET['uid'];
$cid=cid($db,$uid);

$periode="";
if(isset($_POST['periode']))$periode=$_POST['periode'];

$id=0;
$message="Unknown Error";
$success=false;
if($status=="closed")$status="8";
if($status=="new")$status="";
if($status=="delivered")$status="6";
if($status=="order_ready_delivered"){
	$order_ready_delivered="6";
	$status="";
	$kurir=$merchant;
	$merchant="";
} else  if ($api_cmd=="history_kurir") {
	$kurir=$merchant;
} else {
	$order_ready_delivered="";
	$kurir="";
}

$dataset=null;
$sql ="select s.sold_to_customer,c.company,sum(s.amount) as amount 
from sales_order s  
left join customers c on c.customer_number=s.sold_to_customer 
where 1=1";

if($order_ready_delivered!="" && $api_cmd=="new"){
	$sql.=" and s.update_status='$order_ready_delivered'";
	if($merchant!=""){
		$sql.=" and s.warehouse_code='$merchant'";
	}	
} else  if ($api_cmd=="history_kurir") {
	$sql.=" and s.status='8'";
} else {
	if($status!="") {
		$sql.=" and s.status='$status'";	
	} else {
		$sql.=" and s.status not in ('2','6','8')";
	}	
}
if($search!=""){
	$sql.=" and c.company like '%".$search."%'";
}
if($kurir!=""){
	$sql.=" and s.update_by='$kurir'";
}
if($cid!=""){
    $sql.=" and s.cid='$cid' ";
}

$d1="";
$d2="";
if($date_from!="")$periode="";
if($periode!=""){	
	if($periode=="daily" ){
		$d1=date("Y-m-d")." 00:00:00";
		$d2=date("Y-m-d")." 23:59:50";
	} 
	if($periode=="weekly" ){ 
		$d1=date("Y-m-01")." 00:00:00";
		$d2=add_date($d1,7);
	}
	if($periode=="monthly"){
		$d1=date("Y-m-01")." 00:00:00";
		$d2=add_date($d1,31);
	}
	if($periode=="yearly"){
		$d1=date("Y-01-01")." 00:00:00";
		$d2=add_date($d1,360);
	}
} else {
	$d1=$date_from;
	$d2=$date_to;
}
if($d1!=""){
	$sql.=" and s.sales_date between '$d1' and '$d2' ";
}
$sql.=" group by s.sold_to_customer,c.company";

$sql.=" limit $offset,$limit";


$result = mysqli_query($db->con,$sql);		
if($result){
	$dataset=mysqli_fetch_all($result,MYSQLI_ASSOC);
}
$err=mysqli_error($db->con);
if(!$err){
    $success=true;
    $message="Success";
} else {
	$message=$err;
} 

$data['date_from']=$d1;
$data['date_to']=$d2;
$data['data']=$dataset;
$data['success']=$success;
$data['message']=$message;
echo json_encode($data);

?>