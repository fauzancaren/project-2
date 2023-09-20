<?php
date_default_timezone_set("Asia/Jakarta");

function item_asm($db,$item){
	$dataset=null;
	$s="select ia.assembly_item_number,ia.quantity,i.description 
	from inventory_assembly ia left join inventory i on i.item_number=ia.assembly_item_number 
	where  ia.item_number='$item' ";
	if($q=mysqli_query($db->con,$s)){
		$dataset=mysqli_fetch_all($q,MYSQLI_ASSOC);
	}
	return $dataset;
}

function price_cust($db,$ct,$item){
	$retval=0;
	$s="select sales_price from inventory_price_customers where cust_type='$ct' 
	and item_no='$item' ";
	if($q=mysqli_query($db->con,$s)){
		if($r=mysqli_fetch_object($q)){
			$retval=$r->sales_price;
		}
	}
	return $retval;
}
function saldo_deposit($db,$user_id){
    $saldo=0;
    $s="select sum(deposit_amount)-sum(payment_amount) as saldo from check_writer 
    where supplier_number='$user_id'";
    if($q=mysqli_query($db->con,$s)){
        if($r=mysqli_fetch_assoc($q)){
            $saldo=$r['saldo'];
        }
    }
    return $saldo;
}
function cid($db,$user_id){
    $ret="";
    $s="select cid from user where user_id='$user_id'";
    if($q=mysqli_query($db->con,$s)){
        if($r=mysqli_fetch_assoc($q)){
            $ret=$r['cid'];
        }
    }
    if($ret=='ALL')$ret="";
    return $ret;

}
function add_date($givendate,$day=0,$mth=0,$yr=0) {
    $cd = strtotime($givendate);
    $newdate = date('Y-m-d h:i:s', mktime(date('h',$cd),
                date('i',$cd), date('s',$cd), date('m',$cd)+$mth,
                date('d',$cd)+$day, date('Y',$cd)+$yr));
    return $newdate;
}

if(!function_exists('c_')){
    function c_($Vhwsbz520bqc){
        if($Vhwsbz520bqc){
            return str_replace(',','',$Vhwsbz520bqc);                
        } else {
            return 0;
        }
    }
}

?>