<?php 
error_reporting(E_ALL);
require_once('db_connect.php');
$db = new DB_CONNECT();
$api_cmd="";
if(isset($_GET['api_cmd']))$api_cmd=$_GET['api_cmd'];
$jasa_kirim="";
if(isset($_GET['jasa_kirim']))$jasa_kirim=$_GET['jasa_kirim'];
if(isset($_POST['jasa_kirim']))$jasa_kirim=$_POST['jasa_kirim'];
$kecamatan="";
if(isset($_GET['kecamatan']))$kecamatan=$_GET['kecamatan'];
if(isset($_POST['kecamatan']))$kecamatan=$_POST['kecamatan'];
$kode_pos="";
if(isset($_GET['kode_pos']))$kode_pos=$_GET['kode_pos'];
if(isset($_POST['kode_pos']))$kode_pos=$_POST['kode_pos'];
$berat=1;
if(isset($_GET['berat']))$berat=$_GET['berat'];
if(isset($_POST['berat']))$berat=$_POST['berat'];
$tarif=0;
$ongkos=0;

$id=0;
$message="Unknown Error";
$success=false;

$data_item=null;
$sql ="select tarif from ongkos_kirim where jasa_kirim='$jasa_kirim' 
and kecamatan='$kecamatan'";
$result = mysqli_query($db->con,$sql);		
$message.=" ".mysqli_error($db->con);
if($result){
    $data=mysqli_fetch_array($result,MYSQLI_ASSOC);
    $success=true;
    $tarif=$data['tarif'];
}
if($tarif==0)$tarif=1000;
$data['ongkos']=$tarif*$berat;
$data['success']=$success;
$data['message']=$message;
echo json_encode($data);

?>