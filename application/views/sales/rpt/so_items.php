<?php
     $CI =& get_instance();
     $CI->load->model('company_model');
     $model=$CI->company_model->get_by_id($CI->access->cid)->row();
	$date1= date('Y-m-d H:i:s', strtotime($CI->input->post('txtDateFrom')));
	$date2= date('Y-m-d H:i:s', strtotime($CI->input->post('txtDateTo')));
    $CI->load->model('sales_order_model');
	$customer=$CI->input->post("text1");
	$salesman=$CI->input->post("text2");
	$category=$CI->input->post("text3");
	$outlet=$CI->input->post("text4");
	
?>
<link href="<?php echo base_url();?>/themes/standard/style_print.css" rel="stylesheet">
<table cellspacing="0" cellpadding="1" border="0" width='100%'> 
     <tr>
     	<td colspan='5'><h2>SALES ORDER BY ITEM NUMBER</h2></td>     	
     </tr>
     <tr>
     	<td>
     		Criteria: Dari Tanggal: <?=$date1?> s/d : <?=$date2?>, Customer: <?=$customer?>
     		,Salesman: <?=$salesman?>, Category: <?=$category?>
     	</td>
     </tr>
     <tr>
     	<td colspan="8">
	     		<table class='titem'>
	     		<thead>
	     			<tr><td>Item Number</td><td>Description</td><td>Category</td>
					<td>Quantity</td><td>Unit</td><td>Price</td>
					<td>Disc%</td><td>Amount</td>
					<td>Ship Qty</td><td>Pend Qty</td>
					<td>Tanggal</td><td>Nomor Sales Order</td><td>Kode Pelanggan</td><td>Nama Pelanggan</td>
	     			<td>Salesman</td><td>Outlet</td> 
	     			</tr>
	     		</thead>
	     		<tbody>
     			<?php
     			$sql="select si.item_number,si.description,si.quantity,si.unit,
					si.price,si.discount,si.amount,si.ship_qty,
					s.sales_date,s.sales_order_number,s.sold_to_customer,
					c.company,s.due_date,s.payment_terms,s.salesman,s.amount,
					b.category,si.warehouse_code
     			 from sales_order s left join customers c on c.customer_number=s.sold_to_customer
				 join sales_order_lineitems si on si.sales_order_number=s.sales_order_number
				 join inventory b on b.item_number=si.item_number
				where s.sales_date between '$date1' and '$date2'  ";

				
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
 
				if($customer!="")$sql.=" and s.sold_to_customer='$customer'";
				if($category!="")$sql.=" and b.category='$category'";
				if($outlet!="")$sql.=" and si.warehouse_code='$outlet'";
     			$rst_so=$CI->db->query($sql);
     			$tbl="";
				$ttl_amount=0;
                 foreach($rst_so->result() as $row){
                    $tbl.="<tr>";
                    $tbl.="<td>".$row->item_number."</td>";
                    $tbl.="<td>".$row->description."</td>";
                    $tbl.="<td>$row->category</td>";
                    $tbl.="<td>".$row->quantity."</td>";
                    $tbl.="<td>".$row->unit."</td>";
                    $tbl.="<td align=right>".number_format($row->price,2)."</td>";
                    $tbl.="<td>".$row->discount."</td>";
                    $tbl.="<td align=right>".number_format($row->amount,2)."</td>";
                    $tbl.="<td>".$row->ship_qty."</td>";
                    $tbl.="<td>".($row->quantity-$row->ship_qty)."</td>";
                    $tbl.="<td>".$row->sales_date."</td>";
                    $tbl.="<td>".$row->sales_order_number."</td>";
                    $tbl.="<td>".($row->sold_to_customer)."</td>";
                    $tbl.="<td>".$row->company."</td>";
                    $tbl.="<td>".$row->salesman."</td>"; 
                    $tbl.="<td>".$row->warehouse_code."</td>"; 
                    $tbl.="</tr>";
					$ttl_amount+=$row->amount;
               };
                    $tbl.="<tr>";
                    $tbl.="<td><b>Total</b></td>";
                    $tbl.="<td></td>";
                    $tbl.="<td></td>";
                    $tbl.="<td></td>";
                    $tbl.="<td></td>";
                    $tbl.="<td></td>";
                    $tbl.="<td></td>";
                    $tbl.="<td align=right><b>".number_format($ttl_amount,2)."</b></td>";
                    $tbl.="<td></td>";
                    $tbl.="<td></td>";
                    $tbl.="<td></td>";
                    $tbl.="<td></td>";
                    $tbl.="<td></td>";
                    $tbl.="<td></td>";
                    $tbl.="<td></td>"; 
                    $tbl.="<td></td>"; 
                    $tbl.="</tr>";
			   
			   echo $tbl;
				   				   				   
			?>	
				</tbody>
     		</table>
     	
     	</td>
     </tr>
</table>
