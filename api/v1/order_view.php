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

$nomor="";
if(isset($_POST['nomor']))$nomor=$_POST['nomor'];
if(isset($_GET['nomor']))$nomor=$_GET['nomor'];
$id=0;
$message="Unknown Error";
$success=false; 
$data_header=null;

if($api_cmd=="delete"){
    $s="delete from sales_order_lineitems where sales_order_number='$nomor'";
    mysqli_query($db->con,$s);
    $s="delete from sales_order where sales_order_number='$nomor'";
    mysqli_query($db->con,$s);
    $s="delete from sales_order where sales_order_number='$nomor'";
    mysqli_query($db->con,$s);

    if(!mysqli_error($db->con)){
        $success=true;
        $message="Success";
    }
    $s="delete from payments where invoice_number='$nomor'";
    mysqli_query($db->con,$s);
    
} else {
    $sql ="select i.sales_order_number,i.sales_date,i.amount,i.due_date,
    i.amount-coalesce(p.sum_paid,0) as saldo,i.status,i.sold_to_customer,c.company,
    coalesce(p.sum_paid,0) as bayar,i.payment_terms,i.salesman,
    c.company,c.street,c.suite,c.phone,c.city,'0' as table_no
    from sales_order i left join customers c on c.customer_number=i.sold_to_customer
    left join (select invoice_number,how_paid,sum(amount_paid) as sum_paid 
        from payments group by invoice_number,how_paid) p on p.invoice_number=i.sales_order_number 
        where 1=1";	
    if($nomor!=""){
        $sql.=" and i.sales_order_number='$nomor' ";
    }
    if($search!=""){
        $sql.=" and c.company like '%".$search."%'";
    }
    if($customer_number!=""){
        $sql.=" and i.sold_to_customer='$customer_number'";
    }
    if($cid!=""){
        $sql.=" and i.cid='$cid' ";
    } 
    $status="";
    if(isset($_POST['status']))$status=$_POST['status'];
    if($status!="")$sql.=" and i.status=$status";
    
    $sql.=" order by i.sales_date desc";
    $sql.=" limit $offset,$limit";
    //echo $sql;
    
    $result = mysqli_query($db->con,$sql);		
    if($result){
        $data_header=mysqli_fetch_assoc($result);
    }
     
    if(!mysqli_error($db->con)){
        $success=true;
        $message="Success";
    }
    $data_detail=null;
    $sql="select sol.item_number as barcode,sol.item_number,sol.description,i.description as nama_barang,
    sol.price as retail,sol.discount,sol.discount_amount,
    sol.unit as unit_of_measure,i.special_features,sol.quantity as qty,sol.cost,
    i.item_picture,sol.discount,i.weight,sol.line_number,sol.warehouse_code as gudang,
	sol.employee_id as salesman
    from sales_order_lineitems sol left join inventory i on i.item_number=sol.item_number
    where sol.sales_order_number = '$nomor' ";
    if($result=mysqli_query($db->con,$sql)){
        $data_detail=mysqli_fetch_all($result,MYSQLI_ASSOC);
    }
    $data_payment=null;
    $sql="select * from payments where invoice_number='$nomor' ";
    if($result=mysqli_query($db->con,$sql)){
        $data_payment=mysqli_fetch_all($result,MYSQLI_ASSOC);
    }
    $data['data_header']=$data_header;
    $data['data_detail']=$data_detail;
    $data['data_payment']=$data_payment;
     
}

$data['success']=$success;
$data['message']=$message;
echo json_encode($data);
 
?>