<?php 
error_reporting(E_ALL);
require_once('db_connect.php');
$db = new DB_CONNECT();


$json = json_decode(file_get_contents('php://input'),true);
$api_cmd="";
if(isset($json['api_cmd']))$api_cmd=$json['api_cmd'];


$name = $json["name"]; //within square bracket should be same as Utils.imageName & Utils.image
$image = $json["image"];

$response = array();
$decodedImage = base64_decode("$image");
$file="../../tmp/".$name.".jpg";
$return = file_put_contents($file, $decodedImage);

if($return !== false){
    $response['icon_file']=$name.".jpg";
    $response['success'] = true;
    if($api_cmd=="category"){
        $category=$json['category'];
        $s="update inventory_categories set icon_picture='$name.jpg' 
        where kode='$category'";
    } else {
        $item_number=$json['item_number'];    
        $s="update inventory set item_picture='$name.jpg' 
        where item_number='$item_number'";
    }

    mysqli_query($db->con,$s);
    $response['message'] = "Image Uploaded Successfully ".mysqli_error($db->con);
}else{
    $response['success'] = false;
    $response['message'] = "Image Uploaded Failed";
}

echo json_encode($response);
?>