<?php
     $CI =& get_instance();
     $CI->load->model('company_model');
     $model=$CI->company_model->get_by_id($CI->access->cid)->row();
	$date1= date('Y-m-d H:i:s', strtotime($CI->input->post('txtDateFrom')));
	$date2= date('Y-m-d H:i:s', strtotime($CI->input->post('txtDateTo')));
	$category=$CI->input->post('text1');
    $outlet=$CI->input->post("text2");
	$supplier=$CI->input->post("text3");
	$sistim=$CI->input->post("text4");
	$salesman="";
   
?>
<link href="<?php echo base_url();?>/themes/standard/style_print.css" rel="stylesheet">
<table cellspacing="0" cellpadding="1" border="0" width='100%'> 
     <tr>
     	<td colspan='5'><h2>PENJUALAN PER BARANG</h2></td>     	
     </tr>
     <tr>
     	<td>
     		Criteria: Dari Tanggal: <?=$date1?> s/d : <?=$date2?>
     		Category: <?=$category?>, Outlet: <?=$outlet?>, Supplier: <?=$supplier?>, Sistim: <?=$sistim?>
     	</td>
     </tr>
     <tr>
     	<td colspan="8">
	     		<table class='titem'>
	     		<thead>
	     			<tr>
	     				<td>Kode Barang</td><td>Nama Barang</td><td>Qty</td><td>Unit</td>
	     				<td>M Qty</td><td>M Unit</td>
	     				<td>Harga</td><td>Jumlah</td><td>Discount</td><td>Category</td>
	     				<!--
	     				<td>Category</td><td>Sub Category</td>
	     				<td>Suppplier</td><td>Sistim</td>
	     				-->
	     			</tr>
	     		</thead>
	     		<tbody>
     			<?php
     			$sql="select il.item_number,il.description,stk.retail,stk.category, 
     			sum(il.quantity) as z_qty, stk.unit_of_measure,
     			sum(il.amount) as z_amount,stk.category,stk.sub_category,stk.supplier_number,
				cat.category as category_name,
     			stk.type_of_invoice,sum(il.mu_qty) as m_qty,il.multi_unit,
				 sum(il.discount_amount+il.disc_amount_2+il.disc_amount_3) as z_disc_amt
     			 from invoice i left join customers c on c.customer_number=i.sold_to_customer
     			 left join invoice_lineitems il on il.invoice_number=i.invoice_number
     			 left join inventory stk on stk.item_number=il.item_number
				 left join inventory_categories cat on cat.kode=stk.category
	            where i.invoice_type='I' and i.invoice_date between '$date1' and '$date2'  
				";
				if($category!="")$sql.=" and stk.category='$category'";
                if($outlet!="")$sql.=" and il.warehouse_code='$outlet'";
                if($supplier!="")$sql.=" and stk.supplier_number='$supplier'";
				if($sistim!="")$sql.=" and stk.type_of_invoice='$sistim'";

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

				$sql.=" group by il.description,il.item_number,stk.retail,
				    stk.unit_of_measure,stk.category,stk.sub_category,
					stk.type_of_invoice,il.multi_unit";
				$sql.=" order by il.description";
     			$q_so=$CI->db->query($sql);
                
                $z_qty=0;
                $z_amt=0;
                $tbl="";
                $item_new="";   $item_old="";
                $i=0;
                $total=0;
				$z_disc_amt=0;
                
                
                foreach($q_so->result() as $row){
                	$m_unit="";
                	$m_unit=$row->unit_of_measure;
                	if($row->m_qty>0){
                		$m_unit=$row->multi_unit;
                	}
					$tbl.="<tr>";
					$tbl.="<td>".$row->item_number."</td>";
					$tbl.="<td>".$row->description."</td>";
					$tbl.="<td align='right'>".number_format($row->z_qty)."</td>";
					$tbl.="<td>".$row->unit_of_measure."</td>";
					$tbl.="<td align='right'>".number_format($row->m_qty)."</td>";
					$tbl.="<td>$m_unit</td>";
					
                    $tbl.="<td align='right'>".number_format($row->retail)."</td>";
					$tbl.="<td align='right'>".number_format($row->z_amount,2)."</td>";
					$tbl.="<td align='right'>".number_format($row->z_disc_amt,2)."</td>";
                    $tbl.="<td>$row->category-$row->category_name</td>";
//                    $tbl.="<td>".$row->sub_category."</td>";
//                    $tbl.="<td>".$row->supplier_number."</td>";
//                    $tbl.="<td>".$row->type_of_invoice."</td>";
					$tbl.="</tr>";
					
					$z_qty=$z_qty+$row->z_qty;
					$z_amt=$z_amt+$row->z_amount;
                    $total+=$row->z_amount;
					$z_disc_amt+=$row->z_disc_amt;
                }
			    echo $tbl;
               
                $tbl="<tr>";
                $tbl.="<td><b>TOTAL</b></td>";
                $tbl.="<td></td>";
                $tbl.="<td align='right'>$z_qty</td>";
                $tbl.="<td></td>";
                $tbl.="<td></td>";
                $tbl.="<td></td>";
                $tbl.="<td align='right'></td>";
                $tbl.="<td align='right'><b>".number_format($total,2)."</b>	</td>";
                $tbl.="<td align='right'><b>".number_format($z_disc_amt,2)."</b>	</td>";
  //              $tbl.="<td></td>";
//                $tbl.="<td></td>";
                $tbl.="<td></td>";
                $tbl.="</tr>";
                
                echo $tbl;  
				   				   				   
			?>	
				</tbody>
     		</table>
     	
     	</td>
     </tr>
</table>
