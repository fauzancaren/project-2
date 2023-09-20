<?php 
error_reporting(E_ALL);
require_once('db_connect.php');
$db = new DB_CONNECT();
require_once('libs.php');

$api_cmd="";
if(isset($_GET['api_cmd']))$api_cmd=$_GET['api_cmd'];
if(isset($_POST['api_cmd']))$api_cmd=$_POST['api_cmd'];

$uid="";
if(isset($_POST['uid']))$uid=$_POST['uid'];
if(isset($_GET['uid']))$uid=$_GET['uid'];
$cid=cid($db,$uid);  

$item_number="";
if(isset($_POST['item_number']))$item_number=$_POST['item_number']; 

$assembly_item_number="";
if(isset($_POST['assembly_item_number']))$assembly_item_number=$_POST['assembly_item_number']; 

$qty="";
if(isset($_POST['qty']))$qty=$_POST['qty']; 
if($qty=="")$qty="0"; 

$default_cost="";
if(isset($_POST['default_cost']))$default_cost=$_POST['default_cost']; 
if($default_cost=="")$default_cost="0";

$id=0;
$message="Unknown Error";
$success=false;
$dataset=null; 

if($api_cmd=="list"){
    $sql ="select a.*,i.description	
        from inventory_assembly	a left join inventory i on i.item_number=a.assembly_item_number 
        where 1=1 ";	 
	if($item_number!=""){
		$sql.=" and a.item_number='$item_number'";
	}
	//if($cid!="")$sql.=" and cid='$cid'";
	$result = mysqli_query($db->con,$sql);		
	$message.=" ".mysqli_error($db->con);
	if($result){
		if($dataset=mysqli_fetch_all($result,MYSQLI_ASSOC)){
            $success=true;
            $message="Success";    
        }
	}
	$data['data']=$dataset;
} else {
    $rows=0;
    $s="select a.*,i.description from inventory_assembly a  
     left join inventory i on i.item_number=a.assembly_item_number 
     where a.item_number='$item_number'  
        and assembly_item_number='$assembly_item_number' ";
    $cnt=0;
    if($q=mysqli_query($db->con,$s)){
        $cnt=mysqli_num_rows($q);
    }
    if($cnt==0){
        $s="insert into inventory_assembly set item_number='$item_number',
            assembly_item_number='$assembly_item_number',quantity='$qty',default_cost='$default_cost' ";
    } else {
        $s="update inventory_assembly set quantity='$qty',default_cost='$default_cost' 
            where item_number='$item_number' and assembly_item_number='$assembly_item_number' ";
    }
    mysqli_query($db->con,$s);
    
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