<?php 
error_reporting(E_ALL && E_WARNING);
require_once('db_connect.php');
$db = new DB_CONNECT();
require_once("libs.php");
$api_cmd=$_POST['api_cmd'];
$user_id="";
if(isset($_POST['user_id']))$user_id=$_POST['user_id'];
$cid="";
if(isset($_POST['cid']))$cid=$_POST['cid'];
$uid="";
if(isset($_POST['uid']))$uid=$_POST['uid'];
if($uid==="")$uid=$user_id;
if($cid=="")$cid=cid($db,$uid);

$success=true;
$message="Success";
$company="";
$server_ip="";
$server_uid="";
$server_pass="";
$server_token="";
$outlet_name="";
$outlet_id="";
$outlet_owner="";
$outlet_phone="";
$outlet_address="";

$has_info=false;
$invoice_number_outstand=""; 
$s="select * from preferences where 1=1 ";
if($cid!="")$s.=" and company_code='$cid'"; 
if($q=mysqli_query($db->con,$s)){
    if($r=mysqli_fetch_assoc($q)){
        $outlet_name=$r['company_name'];
        $company=$outlet_name;
        $outlet_owner=$r['invoice_contact'];
        $outlet_phone=$r['phone_number'];
        $outlet_address=$r['street'].', '.$r['suite'];
        $outlet_id=$r['company_code'];
        $has_info=$r['has_info']==1;
        $invoice_number=$r['invoice_number_outstand'];
    }
}

$data['server_ip']=$server_ip;
$data['server_uid']=$server_uid;
$data['server_pass']=$server_pass;
$data['server_token']=$server_token;
$data['outlet_name']=$outlet_name;
$data['outlet_id']=$outlet_id;
$data['outlet_owner']=$outlet_owner;
$data['outlet_phone']=$outlet_phone;
$data['phone']=$outlet_phone;
$data['outlet_address']=$outlet_address;

$data['api_cmd']=$api_cmd;
$data['success']=$success;
$data['message']=$message;

$rekening="0000000000";
$rek_bank="Bank Central Asia";
$rek_nama="Nama Pemilik";
$rek_cabang="Purwakarta"; 


$s="select * from bank_accounts where cid='$cid' ";
    if($q=mysqli_query($db->con,$s)){
        if($r=mysqli_fetch_assoc($q)){
            $rekening=$r['bank_account_number'];
            $rek_bank=$r['bank_name'];
            $rek_nama=$r['contact_name'];
            $rek_cabang=$r['city'];
        }
    }


$data['rekening']=$rekening;
$data['rek_bank']=$rek_bank;
$data['rek_nama']=$rek_nama;
$data['rek_cabang']=$rek_cabang;

$imgInfo="work.png";
$title="Info Tagihan";
$sub_title="Tagihan Bulanan";
$message="<p>Sewa bulanan aplikasi anda tagihannya sudah tersedia</p> 
    <p>Silahkan lakukan pembayaran sebelum tanggal jatuh tempo.</p> ";
$data['has_info']=$has_info;
$data['invoice_number_outstand']=$invoice_number_outstand;
$data['imgInfo']=$imgInfo;
$data['title']=$title;
$data['sub_title']=$sub_title;
$data['message']=$message;

echo json_encode($data);
?>