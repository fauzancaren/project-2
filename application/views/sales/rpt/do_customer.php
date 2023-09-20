<?php
     $CI =& get_instance();
     $CI->load->model('company_model');
     $model=$CI->company_model->get_by_id($CI->access->cid)->row();
	$date1= date('Y-m-d H:i:s', strtotime($CI->input->post('txtDateFrom')));
	$date2= date('Y-m-d H:i:s', strtotime($CI->input->post('txtDateTo')));
	$salesman=$CI->input->post("text1");
	$customer=$CI->input->post("text2");
	$outlet=$CI->input->post("text3");
?>
<link href="<?php echo base_url();?>/themes/standard/style_print.css" rel="stylesheet">
<table cellspacing="0" cellpadding="1" border="0" width='100%'> 
     <tr>
     	<td colspan='5'><h2>DELIVERY BY CUSTOMER</h2></td>     	
     </tr>
     <tr>
     	<td>
     		Criteria: Dari Tanggal: <?=$date1?> s/d : <?=$date2?>, Salesman: <?=$salesman?>, 
     		Customer: <?=$customer?>, Outlet: <?=$outlet?>
     	</td>
     </tr>
     <tr>
     	<td colspan="8">
	     		<table class='titem'>
	     		<thead>
	     			<tr><td>Tanggal</td><td>Nomor DO</td><td>Kode Pelanggan</td><td>Nama Pelanggan</td>
	     				<td>Nomor SO</td><td>Item Number</td><td>Description</td><td>Qty</td>
						<td>Unit</td>
	     			</tr>
	     		</thead>
	     		<tbody>
     			<?php
     			$sql="select i.invoice_date,i.invoice_number,i.sold_to_customer,
     			c.company,i.due_date,i.payment_terms,i.salesman,i.amount,i.sales_order_number,
				il.item_number,il.description,il.quantity,il.unit
     			 from invoice i left join customers c on c.customer_number=i.sold_to_customer
				left join invoice_lineitems il on il.invoice_number=i.invoice_number 
				left join salesman s on s.salesman=i.salesman
	            where i.invoice_type='D' and i.invoice_date between '$date1' and '$date2'  ";
				
				$logged_in=$this->session->userdata('logged_in');
				if($logged_in['flag1']=='1'){
					$sql.=" and s.salesman='".$logged_in['username']."'";
				}
				if($salesman!="")$sql.=" and i.salesman='$salesman'";
				if($customer!="")$sql.=" and i.sold_to_customer='$customer'";
				if($outlet!="")$sql.=" and il.warehouse_code='$outlet'";
				
     			$rst_so=$CI->db->query($sql);
				
     			$tbl="";
				$total=0;
				
                 foreach($rst_so->result() as $row){
                    $tbl.="<tr>";
                    $tbl.="<td>".$row->invoice_date."</td>";
                    $tbl.="<td>".$row->invoice_number."</td>";
                    $tbl.="<td>".($row->sold_to_customer)."</td>";
                    $tbl.="<td>".$row->company."</td>";
                    $tbl.="<td>".$row->sales_order_number."</td>";
                    $tbl.="<td>".$row->item_number."</td>";
                    $tbl.="<td>".$row->description."</td>";
                    $tbl.="<td align='right'>".number_format($row->quantity)."</td>";
                    $tbl.="<td>".$row->unit."</td>";
                    $tbl.="</tr>";
                    $total+=$row->amount;
               };
                $tbl.="<tr>";
                $tbl.="<td><b>TOTAL</b></td>";
                $tbl.="<td></td>";
                $tbl.="<td></td>";
                $tbl.="<td></td>";
                $tbl.="<td></td>";
                $tbl.="<td></td>";
                $tbl.="<td></td>"; 
                $tbl.="<td align='right'><b>".number_format($total)."</b></td>";
                $tbl.="<td></td>";
                $tbl.="</tr>";
                              
			   echo $tbl;
				   				   				   
			?>	
				</tbody>
     		</table>
     	
     	</td>
     </tr>
</table>