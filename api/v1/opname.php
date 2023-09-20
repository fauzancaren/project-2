<?php 
error_reporting(E_ALL);
require_once('db_connect.php');
$db = new DB_CONNECT();
require_once('libs.php');

$api_cmd="";
if(isset($_GET['api_cmd']))$api_cmd=$_GET['api_cmd'];
if(isset($_POST['api_cmd']))$api_cmd=$_POST['api_cmd'];
$kode="";
if(isset($_GET['kode']))$kode=$_GET['kode'];
if(isset($_POST['kode']))$kode=$_POST['kode'];
$uid="";
if(isset($_POST['uid']))$uid=$_POST['uid'];
if(isset($_GET['uid']))$uid=$_GET['uid'];
$cid=cid($db,$uid);

$items=null;
if(isset($_POST['items']))$items=$_POST['items'];
$gudang='Gudang';
if(isset($_POST['gudang']))$gudang=$_POST['gudang'];

$mode="";
if(isset($_POST['mode']))$mode=$_POST['mode'];

$id=0;
$message="Unknown Error";
$success=false;
$limit=100;
$offset=0;

if($api_cmd=="delete"){
    $s="delete from inventory_moving where transfer_id='$kode'";
	$result = mysqli_query($db->con,$s);		 
	$message="Success";
	$success=true;	
} else if($api_cmd=="save") {
	if($items==null){
		$messsage="Baris items belum diisi !";
	} else {
		$nomor="1".date("md").mb_strtoupper(strval(bin2hex(openssl_random_pseudo_bytes(3))));	
		if($kode!="")$nomor=$kode;
		$data['nomor']=$nomor;
		$tanggal=date("Y-m-d H:i:s");

		for($i=0;$i<count($items);$i++){
			$d=explode("~",$items[$i]);
			$item_no=$d[0];
			$qty=$d[1];
			$id=$d[2];
			if($id=="null")$id="";
			if($qty=="")$qty="0";
			if($item_no!=""){
				if($id=="" || $id=="0"){
					$s="insert into inventory_moving set trans_type='ADJ',
						item_number='$item_no',from_qty='$qty',to_qty='$qty',
						from_location='$gudang',to_location='$gudang',
						transfer_id='$nomor',date_trans='$tanggal',trans_by='$uid',cid='$cid'
					";
				} else {
					$s="update inventory_moving set 
					item_number='$item_no',from_qty='$qty',to_qty='$qty' 
					where id='$id' ";					
				}
				$result = mysqli_query($db->con,$s);
			}
			$success=true;			
		}
	}
} else if ($api_cmd=="edit") {
	$sql="select im.item_number,im.item_number as barcode,i.description, 
	i.retail,i.item_picture,i.cost,im.from_qty as qty,im.id as line_number,
	im.from_location as gudang
	from inventory_moving im 
		left join inventory i on i.item_number=im.item_number 
		where transfer_id='$kode' ";
		
	$result = mysqli_query($db->con,$sql);		
	if($result){
		$dataset=mysqli_fetch_all($result,MYSQLI_ASSOC);
		$success=true;
		$message="Success";
	} else {
		$message=mysqli_error($db->con);
	}
	$data['data']=$dataset;
	
} else {
	$sql ="select distinct transfer_id as no_bukti,date_trans as tanggal,
	trans_by as user, comments as keterangan
	from inventory_moving	";
	$sql.=" where trans_type='ADJ' ";	
	if($search!=""){
		$sql.=" and comments like '%".$search."%'";
	}
	if($kode!=""){
		$sql.=" and transfer_id='$kode'";
	}
	if($cid!="")$sql.=" and cid='$cid'";

	$sql.=" order by date_trans";

	$sql.=" limit $offset,$limit";

	$result = mysqli_query($db->con,$sql);		
	$message.=" ".mysqli_error($db->con);
	if($result){
		$dataset=mysqli_fetch_all($result,MYSQLI_ASSOC);
		$success=true;
		$message="Success";
	}
	$data['data']=$dataset;
}

$data['success']=$success;
$data['message']=$message;
echo json_encode($data);

?>