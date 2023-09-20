<?php 
error_reporting(E_ALL);
require_once('db_connect.php');
$db = new DB_CONNECT();
require_once('libs.php');

$api_cmd="";
if(isset($_GET['api_cmd']))$api_cmd=$_GET['api_cmd'];
$kode="";
if(isset($_GET['kode']))$kode=$_GET['kode'];
if(isset($_POST['kode']))$kode=$_POST['kode'];
$uid="";
if(isset($_POST['uid']))$uid=$_POST['uid'];
if(isset($_GET['uid']))$uid=$_GET['uid'];
$cid=cid($db,$uid);
$mode="";
if(isset($_POST['mode']))$mode=$_POST['mode'];

$id=0;
$message="Unknown Error";
$success=false;
$data_history=null;
if($mode=="delete"){
    $s="delete from prefernces where kode='$kode'";
	$result = mysqli_query($db->con,$s);		 
	$message="Success";
	$success=true;	
} else {
	$dataset=null;
	$sql ="select ppt.cust_code,c.company,sum(point) as point_sisa 
    from promosi_point_transactions ppt
    left join customers c on c.customer_number=ppt.cust_code
    where ppt.cust_code='$kode'";
    //echo $sql;
	$result = mysqli_query($db->con,$sql);		

	if($result){
		$dataset=mysqli_fetch_all($result,MYSQLI_ASSOC);
        $data=$dataset;
		$success=true;
		$message="Success";
        $sql="select ref1 as invoice_number,tanggal as invoice_date,amount as inv_amount,
        point from promosi_point_transactions where cust_code='$kode' order by tanggal";
        if($r2=mysqli_query($db->con,$sql)){
            $data_history=mysqli_fetch_all($r2,MYSQLI_ASSOC);
        }
        $data=$dataset[0];
	}
	if(mysqli_error($db->con)){
		$message=mysqli_error($db->con);
	}
}
$data['success']=$success;
$data['message']=$message;

$data['history']=$data_history;
echo json_encode($data);

?>