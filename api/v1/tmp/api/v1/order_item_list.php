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

$merchant="";
if(isset($_GET['user_id']))$merchant=$_GET['user_id'];
if(isset($_POST['user_id']))$merchant=$_POST['user_id'];

$status="";
if(isset($_POST['status']))$status=$_POST['status'];

$limit="";
if(isset($_GET['limit']))$limit=$_GET['limit'];
if(isset($_POST['limit']))$limit=$_POST['limit'];
if($limit=="")$limit="900";

$offset="";
if(isset($_GET['offset']))$offset=$_GET['offset'];
if(isset($_POST['offset']))$offset=$_POST['offset'];
if($offset=="")$offset="0";
$offset=$offset*$limit;

$uid="";
if(isset($_POST['uid']))$uid=$_POST['uid'];
if(isset($_GET['uid']))$uid=$_GET['uid'];
$cid=cid($db,$uid);

$line_number="";
if(isset($_POST['line_number']))$line_number=$_POST['line_number'];
if(isset($_GET['line_number']))$line_number=$_GET['line_number'];

$id=0;
$message="Unknown Error";
$success=false;
if($status=="closed")$status="8";
if($status=="new")$status="";
if($status=="delivered")$status="6";
if($status=="order_ready_delivered"){
	$order_ready_delivered="6";
	$status="";
	$kurir=$merchant;
	$merchant="";
} else  if ($api_cmd=="history_kurir") {
	$kurir=$merchant;
} else {
	$order_ready_delivered="";
	$kurir="";
}

$dataset=null;

if($api_cmd=="delete" && $line_number!=""){
	$sql="delete from sales_order_lineitems where line_number='$line_number'";
	$result = mysqli_query($db->con,$sql);		
	$err=mysqli_error($db->con);
	if(!$err){
		$success=true;
		$message="Success";
	} else {
		$message=$err;
	}

} else {
	$sql ="select i.sales_order_number as nomor,i.sales_date as tanggal,i.amount as jumlah,
	i.amount-coalesce(p.sum_paid,0) as saldo,i.status,
	i.sold_to_customer as cust_no,c.company as cust_name,c.street as cust_address,c.phone as cust_phone,
	coalesce(p.sum_paid,0) as bayar,how_paid as cara_bayar,
	sol.item_number as item_no,sol.description as item_name,sol.quantity ,sol.price,
	sol.amount,sol.update_status,sol.update_by,sol.update_date,sol.warehouse_code as merchant,
	sol.line_number as lineid,sol.line_number as id,sol.line_number
	from sales_order i left join customers c on c.customer_number=i.sold_to_customer
	left join (select invoice_number,how_paid,sum(amount_paid) as sum_paid 
		from payments group by invoice_number,how_paid) p on p.invoice_number=i.sales_order_number
	left join sales_order_lineitems sol on sol.sales_order_number=i.sales_order_number 
		where 1=1";

	if($order_ready_delivered!="" && $api_cmd=="new"){
		$sql.=" and sol.update_status='$order_ready_delivered'";
		if($merchant!=""){
			$sql.=" and sol.warehouse_code='$merchant'";
		}	
	} else  if ($api_cmd=="history_kurir") {
		$sql.=" and i.status='8'";
	} else {
		if($status!="") {
			$sql.=" and i.status='$status'";	
		} else {
			$sql.=" and i.status not in ('2','6','8')";
		}	
	}
	if($search!=""){
		$sql.=" and c.company like '%".$search."%'";
	}
	if($kurir!=""){
		$sql.=" and sol.update_by='$kurir'";
	}
	$sql.=" order by i.sales_date desc";

	$sql.=" limit $offset,$limit";

	$result = mysqli_query($db->con,$sql);		
	if($result){
		$dataset=mysqli_fetch_all($result,MYSQLI_ASSOC);
	}
	//status 0-draft,1-open,2-close,3-canceled,4-pending,5-autoclose,6-delivery,
	//       7-paid wait checked, 8-paid final

	if($dataset){
		for($i=0;$i<count($dataset);$i++){
			$status=$dataset[$i]['status'];
			$status_row=$dataset[$i]['update_status'];
			switch ($status) {
				case '1':
					$status.=" - Tunggu pembayaran";
					break;
				case '6':
					if($status_row=='6'){
						$status.=" - Barang dikirim (complete)";
					} else {
						$status.=" - Barang dikirim (not complete)";
					}
					
					break;
				case '7':
					$status.=" - Sudah bayar";
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
	$err=mysqli_error($db->con);
	if(!$err){
		$success=true;
		$message="Success";
	} else {
		$message=$err;
	}

}
$data['sql']=$sql;
$data['data']=$dataset;
$data['success']=$success;
$data['message']=$message;
echo json_encode($data);

?>