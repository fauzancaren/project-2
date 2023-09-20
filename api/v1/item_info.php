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
$ctype=cust_type($db,$customer);

$id=0;
$message="Unknown Error";
$success=false;

$data_item=null;
$sql ="select i.item_number,i.description,i.retail,i.disc_prc_1,i.disc_prc_1 as discount,
concat(i.disc_prc_1,'+',i.disc_prc_2,'+',i.disc_prc_3) as disc_prc_text,
i.item_picture,i.special_features,i.weight,i.unit_of_measure,
i.cost,i.cost_from_mfg,i.category,i.supplier_number,
i.allowchangeprice as allow_change_price,i.allowchangedisc as allow_change_disc,
ic.category as category_name,s.supplier_name,i.quantity_in_stock as qty,
i.assembly
from inventory i 
left join inventory_categories ic on ic.kode=i.category
left join suppliers s on s.supplier_number=i.supplier_number
where item_number='$item_number'";

$result = mysqli_query($db->con,$sql);		
$message.=" ".mysqli_error($db->con);
if($result){
	$data_item=mysqli_fetch_all($result,MYSQLI_ASSOC);
	if(count($data_item)>0 && $ctype!=""){
		$data_item[0]['price_cust']=price_cust($db,$ctype,$item_number);
	}
	if(count($data_item)>0){
		if($data_item[0]['assembly']){
			$data_item[0]['data_asm']=item_asm($db,$item_number);			
		}		
		$disc_prc_1=promo_prc($db,$item_number,$ctype);
		if($disc_prc_1>0){
			$data_item[0]['disc_prc_1']=$disc_prc_1;			
			$data_item[0]['discount']=$disc_prc_1;
		}
	}
	$message="Success";
	$success=true;
}
$data['data_item']=$data_item;
$data['data_comment']=data_comment($db,$item_number);
$data['data_discuss']=data_discuss($db,$item_number);
$data['data_item_like']=data_item_like($db,$item_number);
$data['data_promo']=promo_extra($db,$item_number);
$data['success']=$success;
$data['message']=$message;
echo json_encode($data);

?>