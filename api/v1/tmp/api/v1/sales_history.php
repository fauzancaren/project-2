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

$customer_number="";
if(isset($_GET['user_id']))$customer_number=$_GET['user_id'];
if(isset($_POST['user_id']))$customer_number=$_POST['user_id'];


$limit="";
if(isset($_GET['limit']))$limit=$_GET['limit'];
if(isset($_POST['limit']))$limit=$_POST['limit'];
if($limit=="")$limit="50";

$offset="";
if(isset($_GET['offset']))$offset=$_GET['offset'];
if(isset($_POST['offset']))$offset=$_POST['offset'];
if($offset=="")$offset="0";
$offset=$offset*$limit;

$uid="";
if(isset($_POST['uid']))$uid=$_POST['uid'];
if(isset($_GET['uid']))$uid=$_GET['uid'];
$cid=cid($db,$uid);

$periode="";
if(isset($_POST['periode']))$periode=$_POST['periode'];
$date_from="";
if(isset($_POST['date_from']))$date_from=$_POST['date_from'];
$date_to="";
if(isset($_POST['date_to']))$date_to=$_POST['date_to'];

$id=0;
$message="Unknown Error";
$success=false;

$dataset=null;
$sql ="select i.sales_order_number as nomor,i.sales_date as tanggal,i.amount as jumlah,i.amount,i.due_date,
i.amount-coalesce(p.sum_paid,0) as saldo,i.status,i.sold_to_customer as cust_no,c.company,
coalesce(p.sum_paid,0) as bayar,how_paid as cara_bayar,i.salesman,'0' as table_no
from sales_order i left join customers c on c.customer_number=i.sold_to_customer
left join (select invoice_number,how_paid,sum(amount_paid) as sum_paid 
    from payments 
	group by invoice_number,how_paid) p on p.invoice_number=i.sales_order_number 
	where 1=1";	
if($search!=""){
	$sql.=" and c.company like '%".$search."%'";
}
if($customer_number!=""){
	$sql.=" and i.sold_to_customer='$customer_number'";
}
if($cid!=""&&USE_CID){
	$sql.=" and i.cid='$cid' ";
}

$d1="";
$d2="";
if($date_from!="")$periode="";
if($periode!=""){	
	if($periode=="daily" ){
		$d1=date("Y-m-d")." 00:00:00";
		$d2=date("Y-m-d")." 23:59:50";
	} 
	if($periode=="weekly" ){ 
		$d1=date("Y-m-01")." 00:00:00";
		$d2=add_date($d1,7);
	}
	if($periode=="monthly"){
		$d1=date("Y-m-01")." 00:00:00";
		$d2=add_date($d1,31);
	}
	if($periode=="yearly"){
		$d1=date("Y-01-01")." 00:00:00";
		$d2=add_date($d1,360);
	}
} else {
	$d1=$date_from;
	$d2=$date_to;
}

if($d1!=""){
	$sql.=" and i.sales_date between '$d1' and '$d2' ";
}
$status="";
if(isset($_POST['status']))$status=$_POST['status'];
if($status!="")$sql.=" and i.status=$status";

$sql.=" order by i.sales_date desc";
$sql.=" limit $offset,$limit";


$result = mysqli_query($db->con,$sql);		
if($result){
	$dataset=mysqli_fetch_all($result,MYSQLI_ASSOC);
}
//status 0-draft,1-open,2-close,3-canceled,4-pending,5-autoclose,6-delivery,
//       7-paid wait checked, 8-paid final
$total=0;
if($dataset){
	$total=0;
	for($i=0;$i<count($dataset);$i++){
		$total+=$dataset[$i]['amount'];
		$dataset[$i]["detail_info"]=get_items($db->con,$dataset[$i]['nomor']);
		$status=$dataset[$i]['status'];
		switch ($status) {
			case '1':
				$status.=" - Tunggu pembayaran";
				break;
			case '6':
				$status.=" - Barang sedang dikirim";
				break;
			case '7':
				$status.=" - Sudah bayar lagi diproses";
				break;
			case '8':
				$status.=" - Order sudah selesai";
				break;
				
			default:
				$status.=" - Order baru";
				break;
		}
		$dataset[$i]['status']=$status;
	}
}
if(!mysqli_error($db->con)){
    $success=true;
    $message="Success";
}
$data['data']=$dataset;
$data['date_from']=$d1;
$data['date_to']=$d2;
$data['total']=$total;
$data['success']=$success;
$data['message']=$message;

echo json_encode($data);

function get_items($db,$nomor){
	$s="";
	if($q=mysqli_query($db,"select  * from sales_order_lineitems where sales_order_number='$nomor'")){
		$r=mysqli_fetch_all($q,MYSQLI_ASSOC);
		for($i=0;$i<count($r);$i++){
			$s=$s."".$r[$i]['description'].",Qty:".$r[$i]['quantity'].",Price:".$r[$i]['price'].",Disc:".$r[$i]['discount']
				.",Amt:".number_format($r[$i]['amount']).", Id:".$r[$i]['line_number']
				.", Sts:".$r[$i]['update_status'].", Kr:".$r[$i]['update_by']
				."\n";
		}
	}
	return $s;
}
?>