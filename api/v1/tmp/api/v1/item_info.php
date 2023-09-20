<?php 
error_reporting(E_ALL);
require_once('db_connect.php');
$db = new DB_CONNECT();
require_once("libs.php");

$api_cmd="";
if(isset($_GET['api_cmd']))$api_cmd=$_GET['api_cmd'];
$item_number="";
if(isset($_GET['item_number']))$item_number=$_GET['item_number'];
if(isset($_POST['item_number']))$item_number=$_POST['item_number'];
$uid="";
if(isset($_POST['uid']))$uid=$_POST['uid'];

$customer="";
if(isset($_POST['customer']))$customer=$_POST['customer'];
$ctype="";
if($customer!=""){
	if($q=mysqli_query($db->con,"select customer_record_type from customers 
		where customer_number='$customer'")){
			if($r=mysqli_fetch_object($q)){
				$ctype=$r->customer_record_type;
			}
		}
}

$id=0;
$message="Unknown Error";
$success=false;

$data_item=null;
$sql ="select i.item_number,i.description,i.retail,i.disc_prc_1,i.disc_prc_1 as discount,
concat(i.disc_prc_1,'+',i.disc_prc_2,'+',i.disc_prc_3) as disc_prc_text,
i.item_picture,i.special_features,i.weight,i.unit_of_measure,
i.cost,i.cost_from_mfg,i.category,i.supplier_number,
i.allowchangeprice as allow_change_price,i.allowchangedisc as allow_change_disc,
ic.category as category_name,s.supplier_name,i.quantity_in_stock as qty 
from inventory i 
left join inventory_categories ic on ic.kode=i.category
left join suppliers s on s.supplier_number=i.supplier_number
where item_number='$item_number'";


$result = mysqli_query($db->con,$sql);		
$message.=" ".mysqli_error($db->con);
if($result){
	$data_item=mysqli_fetch_all($result,MYSQLI_ASSOC);
	if(Count($data_item)&&$ctype!=""){
		$data_item[0]['price_cust']=price_cust($db,$ctype,$item_number);
	}
	$success=true;
}
$data['data_item']=$data_item;

$data_comment=null;
$sql ="select cm_username,cm_date,comments,rate_service
from eshop_comments where item_id='$item_number'";
$result = mysqli_query($db->con,$sql);		
$message.=" ".mysqli_error($db->con);
if($result){
	$data_comment=mysqli_fetch_all($result,MYSQLI_ASSOC);
	$success=true;
}
$data['data_comment']=$data_comment;


$data_discuss=null;
$sql ="select cm_username,cm_date,comments,rate_service
from eshop_comments where item_id='$item_number'";
$result = mysqli_query($db->con,$sql);		
$message.=" ".mysqli_error($db->con);
if($result){
	$data_discuss=mysqli_fetch_all($result,MYSQLI_ASSOC);
	$success=true;
}
$data['data_discuss']=$data_discuss;

$data_item_like=null;
$sql ="select item_number,description,retail,disc_prc_1,item_picture,
special_features,unit_of_measure,cost,
supplier_number,category 
from inventory where item_number='$item_number' order by description limit 5";
$result = mysqli_query($db->con,$sql);		
$message.=" ".mysqli_error($db->con);
if($result){
	$data_item=mysqli_fetch_all($result,MYSQLI_ASSOC);
	$success=true;
	$message="Success";
}
$data['data_item_like']=$data_item;
if($uid=="agus"){
	$data["mode"]="edit";
}


$data['success']=$success;
$data['message']=$message;
echo json_encode($data);

?>