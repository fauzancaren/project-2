<?php 
error_reporting(E_ALL);
require_once('db_connect.php');
$db = new DB_CONNECT();
$api_cmd="";
if(isset($_GET['api_cmd']))$api_cmd=$_GET['api_cmd'];
if(isset($_POST['api_cmd']))$api_cmd=$_POST['api_cmd'];

$search="";
if(isset($_GET['search']))$search=$_GET['search'];
if(isset($_POST['search']))$search=$_POST['search'];
$search=urldecode($search);

$agent_id="";
if(isset($_GET['agent_id']))$agent_id=$_GET['agent_id'];
if(isset($_POST['agent_id']))$agent_id=$_POST['agent_id'];

$item_no="";
if(isset($_GET['item_no']))$item_no=$_GET['item_no'];
if(isset($_POST['item_no']))$item_no=$_POST['item_no'];


$limit="";
if(isset($_GET['limit']))$limit=$_GET['limit'];
if(isset($_POST['limit']))$limit=$_POST['limit'];
if($limit=="")$limit="100";

$offset="";
if(isset($_GET['offset']))$offset=$_GET['offset'];
if(isset($_POST['offset']))$offset=$_POST['offset'];
if($offset=="")$offset="0";
$offset=$offset*$limit;


$id=0;
$message="Unknown Error";
$success=false;

$dataset=null;
$sql ="select g.item_number,g.warehouse_code as agent_id,c.company as agent_name,c.street as address,
	'' as distance,g.quantity,c.lat,c.lng
    from inventory_warehouse g
    left join customers c on c.customer_number=g.warehouse_code 
    where item_number='$item_no' and c.company is not null ";	
if($search!=""){
	$sql.=" and c.company like '%".$search."%'";
}
$sql.=" limit $offset,$limit";

$result = mysqli_query($db->con,$sql);		
$message.=" ".mysqli_error($db->con);
if($result){
	$dataset=mysqli_fetch_all($result,MYSQLI_ASSOC);
	$success=true;
	$message="Success";
}
$data['data']=$dataset;

$data['success']=$success;
$data['message']=$message;
echo json_encode($data);

?>