<?php 
	$CI =& get_instance();
	$data['caption']='PENJUALAN PER TERMIN FAKTUR';
	if(!$CI->input->post('cmdPrint')){
		 $data['date_from']=date('Y-m-d 00:00:00');
		 $data['date_to']=date('Y-m-d 23:59:59');
		 $data['select_date']=true;		 
		$CI->template->display_form_input('criteria',$data,'');
	} else {
		$date_from=$CI->input->post("txtDateFrom");
		$date_to=$CI->input->post("txtDateTo");
		$salesman=$CI->input->post("text1");
		$customer=$CI->input->post("text2");
		$outlet=$CI->input->post("text3");
		$termin=$CI->input->post("text4");
		
		$sql="select i.invoice_number,i.invoice_date,i.sold_to_customer,
		c.company,i.payment_terms,i.salesman,i.amount,
		if(i.payment_terms='CASH',i.amount,0) as cash,
		if(i.payment_terms='CASH',0,i.amount) as kredit				
		from  invoice i left join customers c on c.customer_number=i.sold_to_customer
		where i.invoice_type in ('I','R') and i.invoice_date between '$date_from' and '$date_to' ";
		
		if($customer!="")$sql.=" and i.sold_to_customer='$customer'";
		if($outlet!="")$sql.=" and i.warehouse_code='$outlet'";
		if($termin!="")$sql.=" and i.payment_terms='$termin'";
		$logged_in=$this->session->userdata('logged_in');
		if($logged_in['flag1']=='1'){
			$salesman=$logged_in['username'];
			$CI->load->model("salesman_model");
			$salesman_uid="";
			$qs=$CI->salesman_model->get_by_user_id($salesman);
			if($rs=$qs->row()){
				$salesman=$rs->salesman;
			}
			$sql2=" and i.salesman='$salesman'";
			
			$CI->load->model("user_model");
			$sql3=$CI->user_model->get_sales_by_spv($logged_in['user_id']);
			if($sql3!=""){
				$sql2=" and i.salesman in ($sql3)";
			}
			$sql.=$sql2;

		} else {
			if($salesman!="")$sql.=" and i.salesman='" . $salesman . "'";
		}		
		$sql.="		order by i.invoice_number";
		
		$data['content']=browse_select(	
			array('sql'=>$sql,'show_action'=>false,
				"fields_sum"=>array("amount","cash","kredit")
			)
		);
		 $data['header']=company_header();
		 $data['criteria']="Date From: $date_from - $date_to, Customer: $customer, Salesman: $salesman, Outlet: $outlet, Termin: $termin";
		$this->load->view('simple_print.php',$data);    		
		
	}

?>