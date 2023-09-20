<?php 
error_reporting(E_ALL);
require_once('db_connect.php');
$db = new DB_CONNECT();
$api_cmd="";
if(isset($_GET['api_cmd']))$api_cmd=$_GET['api_cmd'];
$outlet="";
if(isset($_GET['outlet']))$outlet=$_GET['outlet'];
if(isset($_POST['outlet']))$outlet=$_POST['outlet'];

if($outlet!=""){
	switch ($outlet) {
		case 'C01':
			$outlet="simak";
			break;
		case "C02":
			$outlet="simak2";
			break;
		case "C03":
			$outlet="simak3";
		case "C04":
			$outlet="simak4";
		case "C05":
			$outlet="simak5";
		case "C06":
			$outlet="simak6";
		default:
			# code...
			$outlet="";
			break;
	}
	$outlet=$outlet.".";
}
$id=0;
$message="Success";
$success=true;
$dataset=null;
$s="select distinct pi.item_number,i.description,i.retail,item_picture,p.nilai as discount_text
	from ".$outlet."inventory i join ".$outlet."promosi_item pi on pi.item_number=i.item_number 
	join ".$outlet."promosi_disc p on p.promosi_code=pi.promosi_code 
	order by p.date_to desc";
$s.=" limit 300";

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