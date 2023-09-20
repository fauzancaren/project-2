<?php 
error_reporting(E_ALL);
require_once('db_connect.php');
$db = new DB_CONNECT();
require_once("libs.php");

$api_cmd="";
if(isset($_GET['api_cmd']))$api_cmd=$_GET['api_cmd'];
if(isset($_POST['api_cmd']))$api_cmd=$_POST['api_cmd'];

$search="";
if(isset($_GET['search']))$search=$_GET['search'];
if(isset($_POST['search']))$search=$_POST['search'];
$search=urldecode($search);

$user_id="";
if(isset($_GET['user_id']))$user_id=$_GET['user_id'];
if(isset($_POST['user_id']))$user_id=$_POST['user_id'];

if(isset($_POST['uid']))$user_id=$_POST['user_id'];
if(isset($_GET['uid']))$user_id=$_GET['user_id'];
$cid=cid($db,$user_id);

$limit="";
if(isset($_GET['limit']))$limit=$_GET['limit'];
if(isset($_POST['limit']))$limit=$_POST['limit'];
if($limit=="")$limit="100";

$offset="";
if(isset($_GET['offset']))$offset=$_GET['offset'];
if(isset($_POST['offset']))$offset=$_POST['offset'];
if($offset=="")$offset="0";
$offset=$offset*$limit;

$no_bukti="";
if(isset($_GET['no_bukti']))$no_bukti=$_GET['no_bukti'];
if(isset($_POST['no_bukti']))$no_bukti=$_POST['no_bukti'];


$id=0;
$message="Unknown Error";
$success=false;
$dataset=null;

if($api_cmd=="deposit_list"){
	$sql ="select cw.voucher as no_bukti,cw.check_date as tanggal,
	if(cw.deposit_amount>0,cw.deposit_amount,cw.payment_amount*-1) as jumlah,
	cw.memo,cw.supplier_number as cust_no,c.company
		from check_writer cw
		left join customers c on c.customer_number=cw.supplier_number 
		where 1=1 ";	
	if($search!=""){
		$sql.=" and c.company like '%$search%'";
	}
	if($user_id!=""){
		$sql.=" and cw.supplier_number='$user_id'";
	}
	$sql.=" limit $offset,$limit";

	$result = mysqli_query($db->con,$sql);		
	$message.=" ".mysqli_error($db->con);
	if($result){
		$dataset=mysqli_fetch_all($result,MYSQLI_ASSOC);
		$success=true;
		$message="Success";
	}
}
if($api_cmd=="deposit_delete"){
	$s="delete from check_writer where voucher='$no_bukti' ";
	mysqli_query($db->con,$s);

	if(!mysqli_error($db->con)){
		$success=true;
		$message="Success";
	}

}

if($api_cmd=="deposit"){
	$rows=0;
	$s="select count(1) as cnt from check_writer where voucher='$no_bukti'";
	if($q=mysqli_query($db->con,$s)){
		if($r=mysqli_fetch_object($q)){
			$rows=$r->cnt;
		}
	}
	$tanggal=Date('Y-m-d H:i:s');
	$jumlah=$_POST['jumlah'];
	$bank=$_POST['from_bank'].'-'.$_POST['from_rek'].'-'.$_POST['from_tanggal'].'-'.$_POST['from_nama'];
	$to_rek=$_POST['to_rek'];
	$arek=explode(chr(10),$to_rek);
	if(count($arek)>0){
		$to_bank=trim($arek[0]);
		$to_rek=$arek[1];		
	}
	$payee=$user_id;
	if($q=mysqli_query($db->con,"select username from user where user_id='$user_id'")){
		if($r=mysqli_fetch_assoc($q)){
			$pay=$r['username'];
		}
	}
	$s2="";
	$sf="check_date='$tanggal',supplier_number='$user_id',payee='$payee',
		account_number='$to_rek',memo='deposit $bank'";
	if($jumlah>0){
		if($no_bukti=="")$no_bukti="KM".Date("YmdHis");
		$sf.=",deposit_amount='$jumlah',payment_amount='0',trans_type='Trans In'";
	} else {
		if($no_bukti=="")$no_bukti="KK".Date("YmdHis");
		$pay=abs($jumlah);
		$sf.=",payment_amount='$pay',deposit_amount='0',trans_type='Trans Out'";
	}
	if($rows==0){
		$s="insert into check_writer set $sf,voucher='$no_bukti',from_bank='$bank'";
	} else {
		$s="update check_writer set $sf where voucher='$no_bukti',from_bank='$bank'";
	}
	if($cid!="")$s.=",cid='$cid' ";
	mysqli_query($db->con,$s);

	if(!mysqli_error($db->con)){
		$success=true;
		$message="Success";
	}

}
$saldo=0;
$s="select sum(deposit_amount)-sum(payment_amount) as saldo from check_writer 
where 1=1 ";
if($cid=="") {
	$s.=" and supplier_number='$user_id'";
} else {
	$s.=" and cid='$cid' ";
}
if($q=mysqli_query($db->con,$s)){
	if($r=mysqli_fetch_assoc($q)){
		$saldo=$r['saldo'];
	}
}
$data['saldo']=$saldo;
$data['data']=$dataset;
$data['success']=$success;
$data['message']=$message;
echo json_encode($data);

?>