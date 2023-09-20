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

$faktur=$_POST['nomor'];

$id=0;
$message="Unknown Error";
$success=false;
$dataset=null;
$rFaktur=null;

$rows=0;
$s="select * from sales_order where sales_order_number='$faktur'";
if($q=mysqli_query($db->con,$s))$rFaktur=mysqli_fetch_object($q);
if(!$rFaktur){
	$data['success']=false;
	$data['message']="Nomor order atau faktur tidak ditemukan!";
	echo json_encode($data);
	exit;
}
		
$tanggal=Date('Y-m-d H:i:s');
$amount=$rFaktur->amount;
$table_no=$rFaktur['ref1'];
$account_number="DEPOSIT";
$supplier_number=$user_id;
$payee=$user_id;
if($q=mysqli_query($db->con,"select username from user where user_id='$user_id'")){
	if($r=mysqli_fetch_assoc($q)){
		$pay=$r['username'];
	}
}
//save to check_writer
$no_bukti="DK".Date("YmdHis");
$s2="";
$sf="check_date='$tanggal',supplier_number='$user_id',payee='$payee',
	account_number='$account_number',memo='deposit payment $user_id'";
$sf.=",deposit_amount='0',payment_amount='$amount',trans_type='Cash Out'";
$s="insert into check_writer set $sf,voucher='$no_bukti'";
mysqli_query($db->con,$s);

if(!mysqli_error($db->con)){
	$success=true;
	$message="Success";
}
//save to payments
//status 0-draft,1-open,2-close,3-canceled,4-pending,5-autoclose,6-delivery,
//       7-paid wait checked, 8-paid final
$s="insert into payments set invoice_number='$faktur',no_bukti='$no_bukti',date_paid='$tanggal',
how_paid='Deposit',amount_paid='$amount'";
mysqli_query($db->con,$s);
$s="update sales_order set saldo=amount-$amount,status='7' where sales_order_number='$faktur'";
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