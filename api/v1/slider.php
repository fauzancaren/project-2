<?php 
error_reporting(E_ALL);
require_once('db_connect.php');
$db = new DB_CONNECT();
$api_cmd="";
if(isset($_GET['api_cmd']))$api_cmd=$_GET['api_cmd'];

$id=0;
$message="Success";
$success=true;
$dataset[]["item_picture"]="slider1.jpg";
$dataset[]["item_picture"]="slider2.jpg";
$dataset[]["item_picture"]="slider3.jpg";
$dataset[]["item_picture"]="slider4.jpg";

$data['data']=$dataset;

$data['success']=$success;
$data['message']=$message;
echo json_encode($data);

?>