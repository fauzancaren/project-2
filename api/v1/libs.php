<?php
date_default_timezone_set("Asia/Jakarta");

function item_asm($db,$item){
	$dataset=null;
	$s="select ia.assembly_item_number,ia.assembly_item_number as item_number,
	coalesce(ia.quantity,1) as quantity,i.description 
	from inventory_assembly ia left join inventory i on i.item_number=ia.assembly_item_number 
	where  ia.item_number='$item' ";
	if($q=mysqli_query($db->con,$s)){
		$dataset=mysqli_fetch_all($q,MYSQLI_ASSOC);
	}
	return $dataset;
}
function cust_type($db,$cust_no){
    $ret="";
    if($cust_no!=""){
	if($q=mysqli_query($db->con,"select customer_record_type from customers 
		where customer_number='$cust_no'")){
			if($r=mysqli_fetch_object($q)){
				$ret=$r->customer_record_type;
			}
		}
	}
    return $ret;
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
if(!function_exists('data_comment')){
	function data_comment($db,$item_number){
		$ret=null;		
		$sql ="select cm_username,cm_date,comments,rate_service
		from eshop_comments where item_id='$item_number'";
		$result = mysqli_query($db->con,$sql);		
		if($result){
			$ret=mysqli_fetch_all($result,MYSQLI_ASSOC);
			$success=true;
		} else {
			$message=mysqli_error($db->con);
			$success=false;
		}
		return $ret;
	}
}
if(!function_exists('data_discuss')){
	function data_discuss($db,$item_number){
		$ret=null;		
		$sql ="select cm_username,cm_date,comments,rate_service
		from eshop_comments where item_id='$item_number'";
		$result = mysqli_query($db->con,$sql);		
		if($result){
			$ret=mysqli_fetch_all($result,MYSQLI_ASSOC);
			$success=true;
		} else {
			$message=mysqli_error($db->con);
			$success=false;
		}
		return $ret;
	}
}


if(!function_exists('data_item_like')){
	function data_item_like($db,$item_number){
		$ret=null;		
		$sql ="select item_number,description,retail,disc_prc_1,item_picture,
		special_features,unit_of_measure,cost,
		supplier_number,category 
		from inventory 
		where item_number='$item_number' 
		order by description limit 5";
		$result = mysqli_query($db->con,$sql);		
		if($result){
			$data_item=mysqli_fetch_all($result,MYSQLI_ASSOC);
			$success=true;
			$message="Success";
		} else {
			$message=mysqli_error($db->con);
			$success=false;
		}
	}
}
if(!function_exists('promo_prc')){
	function promo_prc($db,$item_number,$cust_type){
		$ret=0;		
		$sql ="select pd.nilai,pd.nilai2,pd.nilai3 from promosi_disc pd 
		left join promosi_item pi on pi.promosi_code=pd.promosi_code
		where  (CURDATE() between date_from and date_to) 
		and  pi.item_number='$item_number'
		and pd.category='1' and pd.tipe='2' 
		";
		$result = mysqli_query($db->con,$sql);		
		if($result){
			if($rpromo=mysqli_fetch_assoc($result)){
				$disc_prc_1=$rpromo['nilai'];
				if($disc_prc_1>1)$disc_prc_1=round($disc_prc_1/100,4);
				$disc_prc_2=$rpromo['nilai2'];
				if($disc_prc_2>1)$disc_prc_2=round($disc_prc_2/100,4);
				$disc_prc_3=$rpromo['nilai3'];
				if($disc_prc_3>1)$disc_prc_3=round($disc_prc_3/100,4);
				$ret=$disc_prc_1;	//.'+'.$disc_prc_2.'+'.$disc_prc_3;
				$success=true;
				$message="Success";
			}
		} else {
			$message=mysqli_error($db->con);
			$success=false;
		}
		return $ret;
	}
}
if(!function_exists('promo_extra')){
	function promo_extra($db,$item_number){
		$ret=null;		
		$sql ="select pd.promosi_code,pd.category,pd.qty,pd.nilai,pd.issameitem,pd.flag1,pd.flag2 
		from promosi_disc pd 
		left join promosi_item pi on pi.promosi_code=pd.promosi_code
		where  (CURDATE() between date_from and date_to) 
		and  pi.item_number='$item_number'
		and pd.category='2' 
		";
		$result = mysqli_query($db->con,$sql);		
		if($result){
			if($rpromo=mysqli_fetch_assoc($result)){
				$ret=$rpromo; 
				$success=true;
				$message="Success";
			}
		} else {
			$message=mysqli_error($db->con);
			$success=false;
		}
		return $ret;
	}
}



?>