<?php
     $CI =& get_instance();
     $CI->load->model('company_model');
     $model=$CI->company_model->get_by_id($CI->access->cid)->row();
	$date1= date('Y-m-d H:i:s', strtotime($CI->input->post('txtDateFrom')));
	$date2= date('Y-m-d H:i:s', strtotime($CI->input->post('txtDateTo')));
	$supplier= $CI->input->post('text1');
	$category = $CI->input->post('text2');
	$sistim = $CI->input->post('text3');
	$gudang = $CI->input->post('text4');
	
	
?>
<link href="<?=base_url('/themes/standard/style_print.css');?>" rel="stylesheet">
<table cellspacing="0" cellpadding="1" border="0" width='100%'> 
     <tr>
     	<td colspan='2'><h2>PO AND RECEIVE LIST</h2></td>     	
     </tr>
     <tr>
     	<td>
     		Criteria: Dari Tanggal: <?=$date1?> s/d : <?=$date2?> Supplier: <?=$supplier?>
     		Gudang: <?=$gudang?>, Sistim: <?=$sistim?>, Category: <?=$category?>
     	</td>
     </tr>
     <tr>
     	<td colspan="8">
 		<table class='titem'>
 		<thead>
 			<tr><th>Nomor PO#</th><th>Tanggal</th>
 				<th>Kode Supplier</th><th>Nama Supplier</th>
 				<td>Jumlah</th><th>Received?</th>
 				<th>Nomor Recv#</th><th>Tgl Recv</th><th>Gudang</th> 
 			</tr>
 		</thead>
 		<tbody>
     			<?php
						    $potype=getvar("PoType","O");

	 		       $sql="select p.purchase_order_number,p.po_date,p.terms,p.supplier_number,
	 		        s.supplier_name,p.amount,p.received,s.city,s.phone,p.due_date,
	 		        ip.shipment_id,ip.date_received,ip.recv_amount,ip.warehouse_code,ip.recv_qty
	                from purchase_order p
	                left join suppliers s on s.supplier_number=p.supplier_number
	                left join (select purchase_order_number,shipment_id,warehouse_code,
	                	concat(year(date_received),'-',month(date_received),'-',day(date_received)) as date_received,
	                	sum(total_amount) as recv_amount,sum(quantity_received) as recv_qty
	                	from inventory_products 
	                	group by purchase_order_number,shipment_id,warehouse_code,
	                	concat(year(date_received),'-',month(date_received),'-',day(date_received))
	                	
	                	
					) ip on ip.purchase_order_number=p.purchase_order_number
	                where p.potype='$potype' and p.po_date between '$date1' and '$date2'";
					
					if($supplier!="")$sql.=" and p.supplier_number='$supplier'"; 
					
					if($gudang!="")$sql.=" and p.warehouse_code='$gudang' ";
					
					if($sistim!="")$sql.=" and p.type_of_invoice='$sistim' "; 
	                $sql.=" order by p.purchase_order_number";
	                
	                
			        $query=$CI->db->query($sql);
	
	     			$tbl="";
	     			$total_po=0;
	     			$total_recv=0;
					 $total_recv_qty=0;
	                 foreach($query->result() as $row){
	                    $tbl="<tr>";
	                    $tbl.="<td>".$row->purchase_order_number."</td>";
	                    $tbl.="<td>".$row->po_date."</td>";
	                    $tbl.="<td>".$row->supplier_number."</td>";
	                    $tbl.="<td>".$row->supplier_name."</td>";
	                    $tbl.="<td align='right'>".number_format($row->amount,2)."</td>";
	                    $tbl.="<td>".$row->received."</td>";
	                    	                    
	                    $tbl.="<td>".($row->shipment_id)."</td>";
	                    $tbl.="<td>$row->date_received</td>";
	                    $tbl.="<td>".$row->warehouse_code."</td>";
	                    //$tbl.="<td align='right'>".number_format($row->recv_qty,2)."</td>";
	                    $tbl.="</tr>";
						echo $tbl;						 
						$total_po+=$row->amount;
						$total_recv+=$row->recv_amount;
						$total_recv_qty+=$row->recv_qty;

               		};
	                    $tbl="<tr>";
	                    $tbl.="<td>TOTAL</td>";
	                    $tbl.="<td></td>";
	                    $tbl.="<td></td>";
	                    $tbl.="<td></td>";
	                    $tbl.="<td align='right'>".number_format($total_po,2)."</td>";
	                    $tbl.="<td></td>";	                    	                    
	                    $tbl.="<td></td>";
	                    $tbl.="<td></td>";
	                    $tbl.="<td></td>";
	                   // $tbl.="<td align='right'>".number_format($total_recv_qty,2)."</td>";
	                    $tbl.="</tr>";
						echo $tbl;
					
		?>

   		</tbody>
   		</table>
     	
     	</td>
     </tr>
</table>
