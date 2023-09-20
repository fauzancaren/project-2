<?php 
error_reporting(E_ALL);
require_once('db_connect.php');
$db = new DB_CONNECT();
$api_cmd="";
if(isset($_GET['api_cmd']))$api_cmd=$_GET['api_cmd'];
if(isset($_POST['api_cmd']))$api_cmd=$_POST['api_cmd'];
$items=null;
if(isset($_POST['items']))$items=$_POST['items'];
$qty=0;
if(isset($_POST['qty']))$qty=$_POST['qty'];

$item_no="";
if(isset($_GET['item_no']))$item_no=$_GET['item_no'];

$sitems="";
for($i=0;$i<count($items);$i++){
	if($i==count($items)-1){
		$sitems.="'".$items[$i]."'";		
	} else {
		$sitems.="'".$items[$i]."',";
	}
}

$id=0;
$message="Unknown Error";
$success=false;

$dataset=null;
$sql ="select i.item_number,i.description,i.retail,i.item_picture,c.category,0 as qty,i.weight  
	from inventory i left join inventory_categories c on c.kode=i.category 
	where 1=1 ";
if($sitems!=""){
	$sql.=" and i.item_number in ($sitems)";
}

if($item_no!=""){
	$sql.=" and i.item_number in ('$item_no')";
}

$result = mysqli_query($db->con,$sql);		
if($result){
	if ($dataset=mysqli_fetch_all($result,MYSQLI_ASSOC)){
		$success=true;
		$message="Success";
		for($i=0;$i<count($dataset);$i++){
			$dataset[$i]['qty']=$qty[$i];
		}
	}
} else {
	$message.=" ".mysqli_error($db->con);
}
$data['data']=$dataset;

$data['success']=$success;
$data['message']=$message;
echo json_encode($data);

?>