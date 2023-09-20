<?php 
error_reporting(E_ALL);
require_once('db_connect.php');
$db = new DB_CONNECT();
require_once('libs.php');

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

$item_number="";
if(isset($_POST['item_number']))$item_number=$_POST['item_number']; 
if(isset($_GET['item_number']))$item_number=$_GET['item_number']; 

$min_qty="";
if(isset($_POST['min_qty']))$min_qty=$_POST['min_qty']; 
if(isset($_GET['min_qty']))$min_qty=$_GET['min_qty']; 
if($min_qty=="")$min_qty="0";

$sales_price="";
if(isset($_POST['sales_price']))$sales_price=$_POST['sales_price']; 
if($sales_price=="")$sales_price="0";

$description="";
if(isset($_POST['description']))$description=$_POST['description']; 

$disc_prc="";
if(isset($_POST['disc_prc']))$disc_prc=$_POST['disc_prc']; 
if($disc_prc=="")$disc_prc="0";

$id=0;
$message="Unknown Error";
$success=false;
$dataset=null; 

if($api_cmd=="list"){
    $sql ="select *	from inventory_qty_step where 1=1 ";	 
	if($item_number!=""){
		$sql.=" and item_no='$item_number'";
	}	
	$result = mysqli_query($db->con,$sql);		
	$message.=" ".mysqli_error($db->con);
	if($result){
		if($dataset=mysqli_fetch_all($result,MYSQLI_ASSOC)){
            $success=true;
            $message="Success";    
        }
	}
	$data['data']=$dataset;
} else if ($api_cmd=="price"){ 
    $sql ="select *	from inventory_qty_step where 1=1 ";	 
	if($item_number!=""){
		$sql.=" and item_no='$item_number'";
	}	
	if($min_qty!="0")$sql.=" and min_qty<='$min_qty'";
	$sql.=" order by min_qty 	";
	$result = mysqli_query($db->con,$sql);		
	$message.=" ".mysqli_error($db->con);
	if($result){
		if($dataset=mysqli_fetch_all($result,MYSQLI_ASSOC)){
            $success=true;
            $message="Success";
			$data['return_value']=$dataset[0]['sales_price'];			
			
        }
	}

} else if ($api_cmd=="delete") {
	$id=$_POST['id'];
	if($id==""){
		$id="0";		
	}
	$s="delete from inventory_qty_step where id='$id' ";
	if($r=mysqli_query($db->con,$s)){
		$success=true;
		$message="Success";
		
	}
} else {
    $rows=0;
    $s="select * from inventory_qty_step where item_no='$item_number' 
        and min_qty='$min_qty' ";
    $cnt=0;
    if($q=mysqli_query($db->con,$s)){
        $cnt=mysqli_num_rows($q);
    }
    if($cnt==0){
        $s="insert into inventory_qty_step 
            set item_no='$item_number',min_qty='$min_qty',sales_price='$sales_price'  ";
    } else {
        $s="update inventory_qty_step set sales_price='$sales_price'  
            where item_no='$item_number' and min_qty='$min_qty' ";
    }
    mysqli_query($db->con,$s);
	$message.=" ".mysqli_error($db->con);
    
    if(!mysqli_error($db->con)){
        $success=true;
        $message="Success";
    }
}

$data['data']=$dataset;
$data['success']=$success;
$data['message']=$message;
echo json_encode($data);

?>