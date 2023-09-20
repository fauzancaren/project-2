<?php 
error_reporting(E_ALL);
require_once('db_connect.php');
$db = new DB_CONNECT();
require_once('libs.php');
$api_cmd="";
if(isset($_GET['api_cmd']))$api_cmd=$_GET['api_cmd'];
if(isset($_POST['api_cmd']))$api_cmd=$_POST['api_cmd'];

$search="";
if(isset($_GET['search']))$search=$_GET['search'];
if(isset($_POST['search']))$search=$_POST['search'];
$search=urldecode($search);

$item_number="";
if(isset($_GET['item_number']))$item_number=$_GET['item_number'];
if(isset($_POST['item_number']))$item_number=$_POST['item_number'];
$item_number=urldecode($item_number);

$category="";
if(isset($_GET['category']))$category=$_GET['category'];
if(isset($_POST['category']))$category=$_POST['category'];

$uid="";
if(isset($_POST['uid']))$uid=$_POST['uid'];
if(isset($_GET['uid']))$uid=$_GET['uid'];
$cid=cid($db,$uid);


$limit="";
if(isset($_GET['limit']))$limit=$_GET['limit'];
if(isset($_POST['limit']))$limit=$_POST['limit'];
if($limit=="")$limit="10";

$offset="";
if(isset($_GET['offset']))$offset=$_GET['offset'];
if(isset($_POST['offset']))$offset=$_POST['offset'];
if($offset=="")$offset="0";
$offset=$offset*$limit;

$customer_type="";
if(isset($_POST['customer_type']))$customer_type=$_POST['customer_type'];

$id=0;
$message="Unknown Error";
$success=false;

$dataset=null;
$sql ="select i.item_number,i.description,i.retail,i.item_picture,
	c.category,i.weight,i.unit_of_measure,i.cost,i.disc_prc_1 as discount,
	i.quantity_in_stock as qty,i.assembly"; 
$sql.="	from inventory i ";
$sql.="	left join inventory_categories c on c.kode=i.category "; 
$sql.="	where 1=1 ";	
if($item_number!=""){
	$sql.=" and i.item_number='$item_number' ";
}
if($search!=""){
	$sql.=" and (i.description like '%$search%' or i.item_number='$search')";
}
if($category!=""){
	$sql.=" and c.kode='$category'";
}
if($cid!="" && USE_CID){
	$sql.=" and i.cid='$cid'";
} 
$sql.=" order by i.description";
//echo $sql;
$sql.=" limit $offset,$limit";
$data['data_asm']=null;
$result = mysqli_query($db->con,$sql);		
$message.=" ".mysqli_error($db->con);
if($result){
	$dataset=mysqli_fetch_all($result,MYSQLI_ASSOC);
	for($i=0;$i<count($dataset);$i++){
		$item_number=$dataset[$i]['item_number'];
		$dataset[$i]['cust_price']=price_cust($db,$customer_type,$item_number);
		//$dataset[$i]['data_asm']=item_asm($db,$item_number);
	}
	$success=true;
	$message="Success";
}
$data['success']=$success;
$data['message']=$message;
$data['data']=$dataset;

echo json_encode($data);

?>