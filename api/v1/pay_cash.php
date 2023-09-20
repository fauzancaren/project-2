<?php 
error_reporting(E_ALL);
require_once('db_connect.php');
require_once('libs.php');

$db = new DB_CONNECT();
$api_cmd="";
if(isset($_GET['api_cmd']))$api_cmd=$_GET['api_cmd'];
if(isset($_POST['api_cmd']))$api_cmd=$_POST['api_cmd'];

$user_id="";
if(isset($_GET['user_id']))$user_id=$_GET['user_id'];
if(isset($_POST['user_id']))$user_id=$_POST['user_id'];

$uid="";
if(isset($_POST['uid']))$uid=$_POST['uid'];
if(isset($_GET['uid']))$uid=$_GET['uid'];
$cid=cid($db,$uid); 
if($user_id=="")$user_id=$uid;

$bayar="";
if(isset($_POST['bayar']))$bayar=$_POST['bayar'];
if($bayar=="")$bayar="0";

$faktur=$_POST['nomor'];


$id=0;
$message="Unknown Error";
$success=false;
$dataset=null;
$rFaktur=null;
$sold_to_customer=$user_id;
$table_no="";
$rows=0;
$s="select * from sales_order where sales_order_number='$faktur'";
if($q=mysqli_query($db->con,$s))$rFaktur=mysqli_fetch_object($q);
if(!$rFaktur){
	$data['success']=false;
	$data['message']="Nomor order atau faktur [$faktur] tidak ditemukan!";
	$sold_to_customer=$rFaktur['sold_to_customer'];
	$table_no=$rFaktur['ref1'];
	echo json_encode($data);
	exit;
}
		
$tanggal=Date('Y-m-d H:i:s');
$amount=$rFaktur->amount;
$account_number="CASH";
$supplier_number=$user_id;
$payee=$user_id;
if($q=mysqli_query($db->con,"select username from user where user_id='$user_id'")){
	if($r=mysqli_fetch_assoc($q)){
		$pay=$r['username'];
	}
}
//save to check_writer
$no_bukti="CK".Date("YmdHis");
$s2="";
$sf="";

if($sold_to_customer==""){
	$sf="supplier_number='$user_id',";
} else {
	$sf="supplier_number='$sold_to_customer',";
}
$sf.="check_date='$tanggal',payee='$payee',
	account_number='$account_number',memo='deposit payment $user_id'";
$sf.=",deposit_amount='$amount',payment_amount='0',trans_type='Cash In'";
$s="insert into check_writer set $sf,voucher='$no_bukti'";
mysqli_query($db->con,$s);

if(!mysqli_error($db->con)){
	$success=true;
	$message="Success";
}
//save to payments
//status 0-draft,1-open,2-close,3-canceled,4-pending,5-autoclose,6-delivery,
//       7-paid wait checked, 8-paid final
$s="insert into payments set no_bukti='$no_bukti',invoice_number='$faktur',date_paid='$tanggal',
how_paid='Cash',amount_paid='$amount'";
mysqli_query($db->con,$s); 

$s="update sales_order set saldo=amount-$amount,status='7',sales_date='$tanggal' 
	where sales_order_number='$faktur'";
mysqli_query($db->con,$s);

if($table_no!=""){
    $s="update fb_room set status=0,nota='' where room_code='$table_no' ";
    mysqli_query($db->con,$s);
}
$data['saldo']=saldo_deposit($db,$user_id);
$data['data']=$dataset;
$data['success']=$success;
$data['message']=$message;
echo json_encode($data);

?>