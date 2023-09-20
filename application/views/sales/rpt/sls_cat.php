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
<table cellspacing="0" cellpadding="1" border="0" width='800px'> 
     <tr>
     	<td colspan='2'><h2><?=$model->company_name?></h2></td><td colspan='2'><h2>PENJUALAN PER KELOMPOK BARANG</h2></td>     	
     </tr>
     <tr>
     	<td colspan='2'><?=$model->street?></td><td></td>     	
     </tr>
     <tr>
     	<td colspan='2'><?=$model->suite?></td>     	
     </tr>
     <tr>
     	<td>
     		<?=$model->city_state_zip_code?> - Phone: <?=$model->phone_number?>
     	</td>
     </tr>
     <tr>
     	<td>
     		Criteria: Dari Tanggal: <?=$date1?> s/d : <?=$date2?>
            Salesman: <?=$salesman?>, Customer: <?=$customer?>, 
            Outlet: <?=$outlet?>        
     		
     	</td>
     </tr>
     <tr><td colspan=4 style='border-bottom: black solid 1px'></td></tr>
     <tr>
     	<td colspan="8">
	     		<table class='titem'>
	     		<thead>
	     			<tr>
	     				<td>Termin</td><td>Kode Kelompok</td><td>Category</td><td>Qty</td><td>Jumlah</td>
	     			</tr>
	     		</thead>
	     		<tbody>
     			<?php
     			$sql="select i.payment_terms,stk.category as kode,cat.category, 
     			sum(il.amount) as z_amount,
     			sum(il.quantity) as z_qty
     			 from invoice i left join customers c on c.customer_number=i.sold_to_customer
     			 left join invoice_lineitems il on il.invoice_number=i.invoice_number
     			 left join inventory stk on stk.item_number=il.item_number
     			 left join inventory_categories cat on cat.kode=stk.category
     			 
	            where i.invoice_type='I' and i.invoice_date between '$date1' and '$date2'  ";
                if($customer!="")$sql.=" and i.sold_to_customer='".$customer."'";
                if($outlet!="")$sql.=" and il.warehouse_code='".$outlet."'";
                //if($kode_kelompok_barang!="")$sql.=" and stk.category='".$kode_kelompok_barang."'";
                
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
    			$sql.=" group by i.payment_terms,stk.category,cat.category";
				
                 
                
     			$rst_so=$CI->db->query($sql);
     			$tbl="";
     			$qty_tot=0;
     			$amt_tot=0;
				$term_old="";
				$term_new="";
				$qty_term=0;
				$amt_term=0;
                 foreach($rst_so->result() as $row){
					$term_new=strtoupper($row->payment_terms);
					if($term_old==""){
						$term_old=$term_new;						
					}
					if($term_old!=$term_new){
						$tbl.="<tr><td></td>";
						$tbl.="<td><strong>Sub Total:  $term_old</strong></td>";
						$tbl.="<td></td>";
						$tbl.="<td align='right'><strong>".number_format($qty_term)."</strong></td>";
						$tbl.="<td align='right'><strong>".number_format($amt_term,2)."</strong></td>";
						$tbl.="</tr>";
						$term_old=$term_new;
						$qty_term=0;
						$amt_term=0;
					}
                    $tbl.="<tr>";
                    $tbl.="<td>".$term_new."</td>";
                    $tbl.="<td>".$row->kode."</td>";
                    $tbl.="<td>".$row->category."</td>";
                    $tbl.="<td align='right'>".number_format($row->z_qty)."</td>";
                    $tbl.="<td align='right'>".number_format($row->z_amount,2)."</td>";
                    $tbl.="</tr>";
                    $qty_tot+=$row->z_qty;
                    $amt_tot+=$row->z_amount;
					$qty_term+=$row->z_qty;
					$amt_term+=$row->z_amount;
					
               };
					$tbl.="<tr><td></td>";
					$tbl.="<td><strong>Sub Total:  $term_old</strong></td>";
					$tbl.="<td></td>";
					$tbl.="<td align='right'><strong>".number_format($qty_term)."</strong></td>";
					$tbl.="<td align='right'><strong>".number_format($amt_term,2)."</strong></td>";
					$tbl.="</tr>";

                    $tbl.="<tr><td></td>";
                    $tbl.="<td><strong>TOTAL</strong></td>";
                    $tbl.="<td></td>";
                    $tbl.="<td align='right'><strong>".number_format($qty_tot)."</strong></td>";
                    $tbl.="<td align='right'><strong>".number_format($amt_tot,2)."</strong></td>";
                    $tbl.="</tr>";
               
			   echo $tbl;
				   				   				   
			?>	
				</tbody>
     		</table>
     	
     	</td>
     </tr>
</table>
