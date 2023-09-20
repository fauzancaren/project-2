<?php
     $CI =& get_instance();
     $CI->load->model('company_model');
     $model=$CI->company_model->get_by_id($CI->access->cid)->row();
	$date1= date('Y-m-d H:i:s', strtotime($CI->input->post('txtDateFrom')));
	$date2= date('Y-m-d H:i:s', strtotime($CI->input->post('txtDateTo')));
    $salesman = $CI->input->post('text1');
    $pelanggan = $CI->input->post('text2');
    $outlet = $CI->input->post('text3');
	$kode_barang="";
	
?>
<link href="<?php echo base_url();?>/themes/standard/style_print.css" rel="stylesheet">
<table cellspacing="0" cellpadding="1" border="0" width='100%'> 
     <tr>
     	<td colspan='5'><h2>PENJUALAN PER BARANG</h2></td>     	
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
	     			<tr>
	     				<td>Kode Barang</td><td>Nama Barang</td><td>Qty</td><td>Unit</td>
	     				<td>Harga</td><td>Disc%</td><td>Disc Amt</td><td>Jumlah</td>
	     				<td>Tanggal</td><td>Nomor Faktur</td><td>Kode Pelanggan</td><td>Nama Pelanggan</td>
	     				<td>Nomor SO</td><td>Termin</td><td>Salesman</td>
	     			</tr>
	     		</thead>
	     		<tbody>
     			<?php
     			$sql="select il.item_number,il.description,il.price,il.discount, 
     			il.amount,il.discount,il.unit,il.quantity,
				il.discount_amount+il.disc_amount_2+il.disc_amount_3 as discount_amount,
     			i.invoice_date,i.invoice_number,i.sold_to_customer,
     			c.company,i.due_date,i.payment_terms,i.salesman,i.sales_order_number
     			 from invoice i 
				 left join customers c on c.customer_number=i.sold_to_customer
     			 left join invoice_lineitems il on il.invoice_number=i.invoice_number
	            where i.invoice_type='I' and i.invoice_date between '$date1' and '$date2'  
					";

					//and il.quantity<>0 
				if($kode_barang!="")$sql.=" and il.item_number='".$kode_barang."'";
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
				if($outlet!=""){
						$sql.=" and il.warehouse_code='$outlet' ";
				}
				$sql.=" order by il.item_number";
				
     			$rst_so=$CI->db->query($sql)->result();
     			$tbl="";
				$item_new="";	$item_old="";
				$i=0;
				$z_disc_amt=0;
				$z_amt_total=0;
				$z_disc_total=0;
                while($i<count($rst_so)){
					$row=$rst_so[$i];
					$item_new=$row->item_number;	
					$item_old=$item_new;
					$z_qty=0;
					$z_amt=0;
					while ($item_old==$item_new && $i<count($rst_so)) {
						$tbl.="<tr>";
						$tbl.="<td>".$row->item_number."</td>";
						$tbl.="<td>".$row->description."</td>";
						$tbl.="<td align='right'>".number_format($row->quantity,2)."</td>";
						$tbl.="<td>".$row->unit."</td>";
						$tbl.="<td align='right'>".number_format($row->price,2)."</td>";
						$tbl.="<td align='right'>".number_format($row->discount,2)."</td>";
						$tbl.="<td align='right'>".number_format($row->discount_amount,2)."</td>";
						$tbl.="<td align='right'>".number_format($row->amount,2)."</td>";
						
						$tbl.="<td>".$row->invoice_date."</td>";
						$tbl.="<td>".$row->invoice_number."</td>";
						$tbl.="<td>".($row->sold_to_customer)."</td>";
						$tbl.="<td>".$row->company."</td>";
						$tbl.="<td>".$row->sales_order_number."</td>";
						$tbl.="<td>".$row->payment_terms."</td>";
						$tbl.="<td>".$row->salesman."</td>";
						$tbl.="</tr>";
						$amount=$row->amount;
						$z_qty=$z_qty+$row->quantity;
						$z_amt=$z_amt+$amount;
						$z_disc_amt+=$row->discount_amount;

						$z_amt_total+=$amount;
						$z_disc_total+=$row->discount_amount;
						$i++;
						if($i<count($rst_so)){
							$row=$rst_so[$i];
							$item_new=$row->item_number;	
						}
					} 
					$tbl.="
					<thead>
					<tr>
	     				<td>$item_old</td><td></td><td align=right>".number_format($z_qty,2)."</td><td></td>
	     				<td></td><td></td><td align=right>".number_format($z_disc_amt,2)."</td>
						 <td align='right'>".number_format($z_amt,2)."</td>
	     				<td></td><td></td><td></td><td></td>
	     				<td></td><td></td><td></td>
	     			</tr>
					</thead>
					";
					
                };
				$tbl.="
				<thead>
				<tr>
					 <td></td><td>GRAND TOTAL</td><td></td><td></td>
					 <td>Jumlah</td><td></td><td align=right>".number_format($z_disc_total,2)."</td>
					 <td align='right'>".number_format($z_amt_total,2)."</td>
					 <td></td><td></td><td></td><td></td>
					 <td></td><td></td><td></td>
				 </tr>
				</thead>
				";

			   echo $tbl;
				   				   				   
			?>	
				</tbody>
     		</table>
     	
     	</td>
     </tr>
</table>
