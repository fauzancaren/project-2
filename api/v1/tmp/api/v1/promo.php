<?php 
error_reporting(E_ALL);
require_once('db_connect.php');
$db = new DB_CONNECT();
$api_cmd="";
if(isset($_GET['api_cmd']))$api_cmd=$_GET['api_cmd'];

$id=0;
$message="Success";
$success=true;
$s="select distinct pi.item_number,i.description,i.retail,item_picture
	from inventory i join promosi_item pi on pi.item_number=i.item_number 
	join promosi_disc p on p.promosi_code=pi.promosi_code";
$s.=" limit 9";

$result = mysqli_query($db->con,$s);		
$message.=" ".mysqli_error($db->con);
if($result){
	if($dataset=mysqli_fetch_all($result,MYSQLI_ASSOC)){
		$success=true;
		$message="Success";
	}
}
$data['data']=$dataset;
$data['success']=$success;
$data['message']=$message;
echo json_encode($data);

?>