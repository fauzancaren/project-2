<?php
     $CI =& get_instance();
     $CI->load->model('company_model');
     $model=$CI->company_model->get_by_id($CI->access->cid)->row();
	$date1= date('Y-m-d H:i:s', strtotime($CI->input->post('txtDateFrom')));
	$date2= date('Y-m-d H:i:s', strtotime($CI->input->post('txtDateTo')));
    $CI->load->model('sales_order_model');
	$customer_number=$CI->input->post("text1");
	$salesman=$CI->input->post("text2");
	$category=$CI->input->post("text3");
	
?>
<link href="<?php echo base_url();?>/themes/standard/style_print.css" rel="stylesheet">
<table cellspacing="0" cellpadding="1" border="0" width='100%'> 
     <tr>
     	<td colspan='5'><h2>SO -> DO -> FAKTUR -> ITEM</h2></td>     	
     </tr>
     <tr>
     	<td>
     		Criteria: Dari Tanggal: <?=$date1?> s/d : <?=$date2?>, Customer: <?=$customer_number?> 
     	</td>
     </tr>
     <tr>
     	<td colspan="8">
	     		<table class='titem'>
	     		<thead>
                 <tr><td colspan=2>SALES ORDER</td>
                        <td colspan=3>SO ITEM</td>
                        <td colspan=4>DELIVERY</td>
                        <td colspan=5>FAKTUR</td>
                        <td colspan=4>DO GUDANG</td>
                     </tr>
	     			<tr><td>Nomor SO#</td><td>Tanggal</td>
                              <td>Item Number</td><td>Description</td><td>Quantity</td>
                              <td>DO#</td><td>Tanggal</td><td>Gudang</td><td>Qty</td> 
	        				<td>Faktur#</td><td>Tanggal</td><td>Qty</td><td>Amount</td>
                              <td>DO Gdg#</td><td>Tanggal</td><td>Gudang</td><td>Qty</td> 
                         </tr>
	     		</thead>
	     		<tbody>
     			<?php
     			$sql="SELECT distinct so.sales_order_number,so.sales_date,sol.item_number, sol.description,sol.quantity, 
                    d.invoice_type, 
                    d.invoice_number AS nomor_do,d.invoice_date AS tanggal_do, dol.warehouse_code AS gudang_do, 
                         dol.quantity AS qty_do, 
                    f.invoice_number AS nomor_faktur,f.invoice_date AS tanggal_faktur, 
                    fi.quantity AS qty_faktur,fi.amount AS amount_faktur,
                    dg.invoice_number as nomor_dog,dg.invoice_date as tanggal_dog,dgl.warehouse_code as gudang_dog,
                         dgl.quantity as qty_dog
                    FROM sales_order AS so
                    LEFT JOIN sales_order_lineitems sol ON sol.sales_order_number=so.sales_order_number
                    LEFT JOIN invoice_lineitems dol ON dol.from_line_number=sol.line_number
                    LEFT JOIN invoice d ON d.invoice_number=dol.invoice_number and d.invoice_type='D'
                    LEFT JOIN invoice_lineitems fi ON fi.serial_number=sol.sales_order_number 
                              and fi.item_number=sol.item_number
                    LEFT JOIN invoice f ON f.invoice_number=fi.invoice_number and f.invoice_type='I'
                    LEFT JOIN invoice dg ON dg.your_order__=so.sales_order_number and dg.invoice_type='X'
                    LEFT JOIN invoice_lineitems dgl ON dgl.invoice_number=dg.invoice_number 
                              and dgl.item_number=sol.item_number

				where so.sales_date between '$date1' and '$date2'  ";
               ///    echo $sql;exit;

                   // $sql="select * from  qry_so_item_do_faktur where sales_date between '$date1' and '$date2'  ";
                if ($customer_number!="")$sql.=" customer_number='$customer_number' ";
                $sql.=" order by sales_date";
				
     			$rst_so=$CI->db->query($sql);
     			$tbl="";
                 foreach($rst_so->result() as $row){
                    $tbl="<tr><td>$row->sales_order_number</td>";
                    $tbl.="<td>".substr($row->sales_date,5,6)."</td>";
                    $tbl.="<td>$row->item_number</td>";
                    $tbl.="<td>".substr($row->description,0,20)."</td>";
                    $tbl.="<td>$row->quantity</td>";
                    $tbl.="<td>$row->nomor_do</td>";
                    $tbl.="<td>".substr($row->tanggal_do,5,6)."</td>";
                    $tbl.="<td>$row->gudang_do</td>";
                    $tbl.="<td>$row->qty_do</td>";
                    $tbl.="<td>$row->nomor_faktur</td>";
                    $tbl.="<td>".substr($row->tanggal_faktur,5,6)."</td>";
                    $tbl.="<td>$row->qty_faktur</td>";
                    $tbl.="<td>$row->amount_faktur</td>";
                    $tbl.="<td>$row->nomor_dog</td>";
                    $tbl.="<td>".substr($row->tanggal_dog,5,6)."</td>";
                    $tbl.="<td>$row->gudang_dog</td>";
                    $tbl.="<td>$row->qty_dog</td>";

                    $tbl.="</tr>";

                    echo $tbl;

               };
				   				   				   
			?>	
				</tbody>
     		</table>
     	
     	</td>
     </tr>
</table>
