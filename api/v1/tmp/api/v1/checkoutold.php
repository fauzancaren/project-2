<?php 
error_reporting(E_ALL);
require_once('db_connect.php');
$db = new DB_CONNECT();
require_once('libs.php');

$api_cmd="";
if(isset($_GET['api_cmd']))$api_cmd=$_GET['api_cmd'];

$user_id="";
if(isset($_GET['user_id']))$user_id=$_GET['user_id'];
if(isset($_POST['user_id']))$user_id=$_POST['user_id'];
$ongkos="";
if(isset($_GET['ongkos']))$ongkos=$_GET['ongkos'];
if(isset($_POST['ongkos']))$ongkos=$_POST['ongkos'];
if($ongkos=="")$ongkos="0";

$total="";
if(isset($_GET['total']))$total=$_GET['total'];
if(isset($_POST['total']))$total=$_POST['total'];
if($total=="")$total="0";

$jasa_kirim="";
if(isset($_GET['jasa_kirim']))$jasa_kirim=$_GET['jasa_kirim'];
if(isset($_POST['jasa_kirim']))$jasa_kirim=$_POST['jasa_kirim'];

$uid="";
if(isset($_POST['uid']))$uid=$_POST['uid'];
if(isset($_GET['uid']))$uid=$_GET['uid'];
$cid=cid($db,$uid);

$sold_to_customer="CASH";
if(isset($_POST['sold_to_customer']))$sold_to_customer=$_POST['sold_to_customer'];

$sales_order_number="";
if(isset($_POST['sales_order_number']))$sales_order_number=$_POST['sales_order_number'];

$table_no="";if(isset($_POST['table_no']))$table_no=$_POST['table_no'];
$salesman="";if(isset($_POST['salesman']))$salesman=$_POST['salesman'];
$gudang="";if(isset($_POST['gudang']))$gudang=$_POST['gudang'];
$terminal="";if(isset($_POST['terminal_id']))$terminal=$_POST['terminal_id'];

$row_item=null;
if(isset($_POST['row']))$row_item=$_POST['row'];

$token="";
$id=0;
$message="Unknown Error";
$success=false;
$amount=0;
$data=null; 
if($row_item){
    if(count($row_item)>0){
        if($sales_order_number==""||$sales_order_number=="AUTO"){
            $sales_order_number = save_so($db, $user_id,$ongkos,$jasa_kirim,$sold_to_customer,
                $cid,$table_no,$terminal);
        } else {
            update_so($db, $user_id,$ongkos,$jasa_kirim,$sold_to_customer,
				$cid,$sales_order_number,$table_no,$terminal);
        }
    }
    if($sales_order_number!=""){
        $amount_item=0;
        for($i=0;$i<count($row_item);$i++){
			//ACC000004~1~2850000~2850000.0~Gudang~admin~119611~0.0~OFFICE~0.0~ ALD - 05 RIGHT 
			//0         1 2       3         4      5     6      7   8      9   `10               11   
			//item_no   qty       amount    agent        line_no    slsmn       description
			//            price                    agent_name   disc       discrp                
			//$row_item[$i]=str_replace('~','-',$row_item[$i]);
            $row_data=explode("~",$row_item[$i]);
            $item_no=$row_data[0];
            $qty=$row_data[1];
			if($qty=="")$qty=1;
            $price=c_($row_data[2]);
			if($price=="")$price=0;
            $amount_item=c_($row_data[3]);
            $agent_id="";
            $agent_name="";
			$gudang="";
            if(count($row_data)>3){
				$agent_id=$row_data[4];
				$gudang=$row_data[4];
			}
			if($gudang=="")$gudang="Gudang";
            if(count($row_data)>4){
				$agent_name=$row_data[5];
			}
            $line_number="";
            if(count($row_data)>5)$line_number=$row_data[6]; 
            $disc="0";
            if(count($row_data)>6)$disc=$row_data[7];
			$salesman=$user_id;
            if(count($row_data)>7)$salesman=$row_data[8];
			$disc_amount="0";
            if(count($row_data)>8)$disc_amount=$row_data[9];
			$description="";
            if(count($row_data)>9)$description=$row_data[10];
			
            save_item($db,$sales_order_number,$item_no,$qty,$price,$amount_item,$agent_id,
                $agent_name,$line_number,$disc,$salesman,$gudang,$disc_amount,$description);
				
            $success=true;
            $message="Success";
        }            
        $s="select sum(amount) as amt from sales_order_lineitems 
        where sales_order_number='$sales_order_number'";  

        if($q=mysqli_query($db->con,$s)){
            if($r=mysqli_fetch_object($q)){
                $amount=$r->amt;
                mysqli_query($db->con,"update sales_order set amount='$amount' 
                where sales_order_number='$sales_order_number'");
            }
        }
        $amount=$amount+$ongkos;
    }
    
}
if($table_no!=""){
    $s="update fb_room set status=1,nota='$sales_order_number' where room_code='$table_no' ";
    mysqli_query($db->con,$s);
}


$data['amount']=$amount;
$data['sales_order_number']=$sales_order_number;
$data['success']=$success;
$data['message']=$message;
echo json_encode($data);

function save_so($db,$user_id,$ongkos,$jasa_kirim,$sold_to_customer,$cid,
	$table_no,$terminal){
    //$sales_order_number="1".date("md").mb_strtoupper(strval(bin2hex(openssl_random_pseudo_bytes(3))));	
	$sales_order_number=date("ymdHis");
    $sales_date=date("Y-m-d H:i:s");
    $amount=0;
    $sql ="insert into sales_order set sales_order_number='$sales_order_number',
    sold_to_customer='$sold_to_customer',ship_to_customer='$sold_to_customer', 
    sales_date='$sales_date',payment_terms='KREDIT',delivered=0,
    status=1,amount=0,salesman='$user_id',freight='$ongkos',shipped_via='$jasa_kirim',cid='$cid',
    type_of_invoice='Simple',source_of_order='maxoneshop',ref1='$table_no',ref2='$terminal' ";
    $q = mysqli_query($db->con,$sql);		
    if(!$q){
        $sales_order_number="";
        echo mysqli_error($db->con);
    }
    return $sales_order_number;
}

function update_so($db,$user_id,$ongkos,$jasa_kirim,$sold_to_customer,$cid,
	$sales_order_number,$table_no,$terminal){
    $sales_date=date("Y-m-d H:i:s");
    $sold_to_customer="CASH";
    $s="select * from sales_order where sales_order_number='$sales_order_number' ";
    if($q=mysqli_query($db->con,$s)){
        if($r=mysqli_fetch_assoc($q)){
            $sales_date=$r['sales_date'];
            $sold_to_customer=$r['sold_to_customer'];
        }
    }
    $amount=0;
    $sql ="UPDATE sales_order set sales_order_number='$sales_order_number',
    sold_to_customer='$sold_to_customer',ship_to_customer='$sold_to_customer', 
    sales_date='$sales_date',payment_terms='KREDIT',
    status=1,amount=0,salesman='$user_id',freight='$ongkos',shipped_via='$jasa_kirim',cid='$cid',
    type_of_invoice='Simple',source_of_order='maxoneshop',ref1='$table_no',ref2='$terminal' 
	where sales_order_number='$sales_order_number'";
    //echo $sql;
	
	$q = mysqli_query($db->con,$sql)
	;		
    if(!$q){
        $sales_order_number="";
        echo mysqli_error($db->con);
    }
     
}
function save_item($db,$sales_order_number,$item_no,$qty,$price,$amount,$agent_id,
	$agent_name,$line_number,$disc,$salesman,$gudang,$disc_amt,$description){
    $item_name=$description;     
    $weight=1;
    $unit="";
    if($row = get_item($db, $item_no)){
		if($item_name=="")$item_name=$row->description;
        if($price=="0"||$price=="")$price=$row->retail;
        if($unit=="")$unit=$row->unit_of_measure;
        $weight=$row->weight;
    }
    if($disc=="null")$disc="0";
    if($disc=="")$disc="0";
    if($disc>1)$disc=$disc/100;
	if($gudang=="")$gudang="Gudang";

    if($line_number==""||$line_number=="0"||$line_number=="null"||$line_number==0){
        $s="insert into sales_order_lineitems set sales_order_number='$sales_order_number',
        item_number='$item_no', description='$item_name',quantity='$qty',
        discount='$disc',discount_amount='$disc_amt',
        unit='$unit',price='$price',amount='$amount',mu_qty='$qty',multi_unit='$unit',mu_harga='$price',
        weight='$weight',warehouse_code='$gudang',employee_id='$salesman'";
    } else {
        //item_number='$item_no', description='$item_name',unit='$unit',
        //,weight='$weight',warehouse_code='$agent_id' ,multi_unit='$unit',
        $s="update sales_order_lineitems set quantity=$qty,
        price='$price',amount='$amount',mu_qty='$qty',mu_harga='$price',
        discount='$disc',discount_amount='$disc_amt',
		warehouse_code='$gudang',employee_id='$salesman'
        where line_number='$line_number' ";
    } 
	//echo $s;
	
    mysqli_query($db->con,$s);
	if($salesman!=""){
		$s="update sales_order set salesman='$salesman' where sales_order_number='$sales_order_number'";
		mysqli_query($db->con,$s);
	}
}
function get_item($db,$item_no){
    $retval=null;
    $s="select description,unit_of_measure,retail,weight from inventory where item_number='$item_no'";
    if($q=mysqli_query($db->con,$s)){
        if($r=mysqli_fetch_object($q)){
            $retval=$r;
        }
    }
    return $retval;
}

?>
