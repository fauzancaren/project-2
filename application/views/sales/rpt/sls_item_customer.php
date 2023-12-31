<?php 
	$CI =& get_instance();
	$data['caption']='PENJUALAN PER ITEM CUSTOMER';
	if(!$CI->input->post('cmdPrint')){
		 $data['date_from']=date('Y-m-d 00:00:00');
		 $data['date_to']=date('Y-m-d 23:59:59');
		 $data['select_date']=true;		 
		
		$data['criteria1']=true;
		$data['label1']='Customer';
		$data['text1']='';
         $data['key1']="customer_number";
         $data['fields1'][]=array("customer_number","80","Kode");
         $data['fields1'][]=array("company","180","Nama Customer");
         $data['ctr1']='lookup/query/customers';
		$data['rpt_controller']="sales/rpt/$id";
		$CI->template->display_form_input('criteria',$data,'');
	} else {
		$date_from=$CI->input->post("txtDateFrom");
		$date_to=$CI->input->post("txtDateTo");
		$salesman="";
		
		$sql="select c.company,
		il.item_number,il.description,sum(il.quantity) as z_qty,
		sum(il.amount) as z_amount 
		from invoice_lineitems il  
		left join invoice i on i.invoice_number=il.invoice_number
		left join inventory stk on stk.item_number=il.item_number
		left join customers c on c.customer_number=i.sold_to_customer
		where i.invoice_type in ('I','R') and i.invoice_date between '$date_from' and '$date_to' ";
		
		if($customer=$CI->input->post("text1"))$sql.=" and i.sold_to_customer='$customer'";
		$logged_in=$this->session->userdata('logged_in');

		if($logged_in['flag1']=='1'){
			$salesman=$logged_in['username'];
			$CI->load->model("salesman_model");
			$sql2 = $CI->salesman_model->get_by_user_id_array($salesman);
						
			$CI->load->model("user_model");
			$sql3=$CI->user_model->get_sales_by_spv($logged_in['user_id']);
			if($sql3!=""){
				$sql2=" and i.salesman in ($sql3)";
			}
			$sql.=$sql2;
	
	
		} else {
			if($salesman!="")$sql.=" and i.salesman='" . $salesman . "'";
		}
				
		$sql.=" group by c.company,il.item_number,il.description";
		
		
		$data['content']=browse_select(	
			array('sql'=>$sql,'show_action'=>false,
				"group_by"=>array("company"),
				"fields_sum"=>array("z_qty","z_amount"),
				"hidden"=>array("company")
			)
		);
		 $data['header']=company_header();
		 $data['criteria']="Date From: $date_from - $date_to, Customer: $customer";
		$this->load->view('simple_print.php',$data);    		
		
	}

?>