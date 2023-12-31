<?php 
	$CI =& get_instance();
	$data['caption']='PENJUALAN PER ITEM SUPPLIER';
	if(!$CI->input->post('cmdPrint')){
		 $data['date_from']=date('Y-m-d 00:00:00');
		 $data['date_to']=date('Y-m-d 23:59:59');
		 $data['select_date']=true;		 
		
		$data['criteria1']=true;
		$data['label1']='Supplier';
		$data['text1']='';
         $data['key1']="supplier_number";
         $data['fields1'][]=array("supplier_number","80","Kode");
         $data['fields1'][]=array("supplier_name","180","Nama Supplier");
         $data['ctr1']='lookup/query/suppliers';
		 
		$data['rpt_controller']="sales/rpt/$id";
		$CI->template->display_form_input('criteria',$data,'');
	} else {
		$date_from=$CI->input->post("txtDateFrom");
		$date_to=$CI->input->post("txtDateTo");
		
		$supplier=$CI->input->post("text1");
		$category=$CI->input->post("text2");
		$sistim=$CI->input->post("text3");
		
		$sql="select stk.supplier_number,s.supplier_name,
		il.item_number,il.description,sum(il.quantity) as z_qty,
		sum(il.amount) as z_amount 
		from invoice_lineitems il  
		left join invoice i on i.invoice_number=il.invoice_number
		left join inventory stk on stk.item_number=il.item_number
		left join suppliers s on s.supplier_number=stk.supplier_number
		where i.invoice_type in ('I','R') and i.invoice_date between '$date_from' and '$date_to' ";
		
		if($supplier!="")$sql.=" and stk.supplier_number='$supplier'";
		if($category!="")$sql.=" and stk.category='$category' ";
		if($sistim!="")$sql.=" and i.type_of_payment='$sistim' ";
		
		$sql.=" group by stk.supplier_number,s.supplier_name,il.item_number,il.description";
		
		
		$data['content']=browse_select(	
			array('sql'=>$sql,'show_action'=>false,
				"group_by"=>array("supplier_name"),
				"fields_sum"=>array("z_qty","z_amount")
			)
		);
		 $data['header']=company_header();
		 $data['criteria']="Date From: $date_from - $date_to, Supplier: $supplier";
		$this->load->view('simple_print.php',$data);    		
		
	}

?>