<?php
    $CI =& get_instance();
    $CI->load->model('company_model');
     $model=$CI->company_model->get_by_id($CI->access->cid)->row();
	$date1= date('Y-m-d H:i:s', strtotime($CI->input->post('txtDateFrom')));
	$date2= date('Y-m-d H:i:s', strtotime($CI->input->post('txtDateTo')));
    $CI->load->model('sales_order_model');
	$salesman="";
?>
<link href="<?php echo base_url();?>/themes/standard/style_print.css" rel="stylesheet">
<table cellspacing="0" cellpadding="1" border="0" width='100%'> 
     <tr>
     	<td colspan='5'><h2>OUTSTANDING SALES ORDER</h2></td>     	
     </tr>
     <tr>
     	<td>
     		Criteria: Dari Tanggal: <?=$date1?> s/d : <?=$date2?>
     	</td>
     </tr>
     <tr>
     	<td colspan="8">
	     		<table class='titem'>
	     		<thead>
	     			<tr><td>Tanggal</td><td>Nomor Sales Order</td><td>Kode Pelanggan</td><td>Nama Pelanggan</td>
	     				<td>Jatuh Tempo</td><td>Termin</td><td>Salesman</td><td>Jumlah</td>
	     			</tr>
	     		</thead>
	     		<tbody>
     			<?php
     			$sql="select s.sales_date,s.sales_order_number,s.sold_to_customer,
     			c.company,s.due_date,s.payment_terms,s.salesman,s.amount
     			 from sales_order s left join customers c on c.customer_number=s.sold_to_customer
	            where (s.delivered=false or s.delivered is null) and s.sales_date between '$date1' and '$date2'  ";

				
				$logged_in=$this->session->userdata('logged_in');
				if($logged_in['flag1']=='1'){
					$salesman=$logged_in['username'];
					$CI->load->model("salesman_model");
					$salesman_uid="";
					$qs=$CI->salesman_model->get_by_user_id($salesman);
					if($rs=$qs->row()){
						$salesman=$rs->salesman;
					}
					$sql2=" and s.salesman='$salesman'";
					
					$CI->load->model("user_model");
					$sql3=$CI->user_model->get_sales_by_spv($logged_in['user_id']);
					if($sql3!=""){
						$sql2=" and s.salesman in ($sql3)";
					}
					$sql.=$sql2;

				} else {
					if($salesman!="")$sql.=" and s.salesman='" . $salesman . "'";
				}
				
     			$rst_so=$CI->db->query($sql);
     			$tbl="";
                 foreach($rst_so->result() as $row){
                    $tbl.="<tr>";
                    $tbl.="<td>".$row->sales_date."</td>";
                    $tbl.="<td>".$row->sales_order_number."</td>";
                    $tbl.="<td>".($row->sold_to_customer)."</td>";
                    $tbl.="<td>".$row->company."</td>";
                    $tbl.="<td>".$row->due_date."</td>";
                    $tbl.="<td>".$row->payment_terms."</td>";
                    $tbl.="<td>".$row->salesman."</td>";
                    $tbl.="<td align='right'>".number_format($row->amount)."</td>";
                    $tbl.="</tr>";
               };
			   echo $tbl;
				   				   				   
			?>	
				</tbody>
     		</table>
     	
     	</td>
     </tr>
</table>
