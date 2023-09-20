<?php
    $d1= date('Y-m-d H:i:s', strtotime($this->input->post('txtDateFrom')));
    $d2= date('Y-m-d H:i:s', strtotime($this->input->post('txtDateTo')));
	$cust=$this->input->post("text1");
	$outlet=$this->input->post("text2");

	$data['caption']="DAFTAR NOTA DETAIL";
	$sql="select i.invoice_number,i.invoice_date,i.sold_to_customer
	,c.company,i.payment_terms
	,il.item_number,il.description,il.quantity,il.unit,il.discount,il.amount
	,il.mu_qty,il.multi_unit  
	from invoice i left join invoice_lineitems il on il.invoice_number=i.invoice_number
	left join customers c on c.customer_number=i.sold_to_customer
	where i.invoice_type='I' and i.invoice_date between '$d1' and '$d2' ";
	
	//	left join payments p on p.invoice_number=i.invoice_number
	
	if($cust!=""){
		$sql.=" and i.sold_to_customer='$cust' ";
	}
	if($outlet!=""){
		$sql.=" and i.warehouse_code='$outlet' ";
	}
	$sql.=" order by i.invoice_date";
	
	
	$data['content']=browse_select(	array('sql'=>$sql,'show_action'=>false,
	'fields_sum'=>array('amount')));
 	$data['header']=company_header();
	$data['criteria']="Criteria : $d1 s/d $d2, Customer: $cust, Outlet: $outlet ";
	$this->load->view('simple_print.php',$data);    	
		
		
		


