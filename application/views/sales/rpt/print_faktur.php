<?php
     $CI =& get_instance();
	 $CI->load->model(array('customer_model','customer_shipto_model'));
     $cst=$CI->customer_model->get_by_id($sold_to_customer)->row();
	 $cmd="";
	 if(isset($_GET['cmd']))$cmd=$_GET['cmd'];

	 $company=$sold_to_customer;
	 $street="";$fax="";$suite="";$phone="";$first_name="";
	 $city="";
	 if($cst=$CI->customer_model->get_by_id($sold_to_customer)){
		  if($rcst=$cst->row()){
			 $company=$rcst->company;
			 $street=$rcst->street;
			 $suite=$rcst->suite;
			 $phone=$rcst->phone;
			 $fax=$rcst->fax;
			 $city=$rcst->city;
			 $first_name=$rcst->first_name;
			 
		  }
	  }
	  if($sold_to_customer!=$ship_to_customer){
		   if($cst_ship=$CI->customer_shipto_model->get_by_code(
			  $ship_to_customer,$sold_to_customer)){
			  if($rcst_ship=$cst_ship->row()){ 
				 if($rcst_ship->alamat!="")$street=$rcst_ship->alamat;
				 if($rcst_ship->contact!="")$first_name=$rcst_ship->contact;
				 if($rcst_ship->kota!="")$city=$rcst_ship->kota;
				 if($rcst_ship->telp!="")$phone=$rcst_ship->telp;
				 
			  }
		   }
	  }		 

	  if ($cmd=="sj"){
		echo "<h1>SURAT JALAN</h2>";
	  } else {
		echo "<h1>FAKTUR PENJUALAN</h2>";
	  }
?>
 
<table cellspacing="0" cellpadding="1" border="0"> 
	<tr>
		<th>Nomor</th><th><?=$invoice_number?></th>
		<th>Kepada Yth,</th><th></th>
		
	</tr>
     <tr>
     	<td>Tanggal</td><td><?=date("d-m-Y",strtotime($invoice_date))?></td>
     	<td><?=$sold_to_customer.' ('.$company.')'?></td>
     </tr>
     <tr>
     	<td>Ref#</td><td><?=$sales_order_number?></td>
     	<td><?=$street?></td>
     </tr>
     <tr>
     	<td>Jatuh Tempo</td><td colspan=1><?=date("d-m-Y",strtotime($due_date))?></td>
     	<td><?=$suite.' - '.$city?></td>
     </tr>
     <tr>
     	<td>Salesman</td><td><?=$salesman?></td>
     	<td><?='Phone: '.$phone.' - Fax: '.$fax?></td>
     </tr>
     <tr>
     	<td></td><td></td>
     	<td><?='Up: '.$first_name?></td>
     </tr>
     <tr>
     	<td colspan="8">
     	<table border="1" cellpadding="3">
     		<thead>
     			<tr>
     				<td>Kode Barang</td><td width="200">Nama Barang</td>
					<td width="30">Qty</td><td width="30">Unit</td>
     				<td>Harga</td><td width="30">Disc1</td><td width="30">Disc2</td><td width="30">Disc3</td><td>Jumlah</td>
     			</tr>
     		</theadx>
     		<tbody>
     		   <?
		       $sql="select item_number,description,quantity,unit,discount,
					price,amount,disc_2,disc_3 
		                from invoice_lineitems i
		                where invoice_number='".$invoice_number."'";
		        $query=$CI->db->query($sql);

     			$tbl="";
                 foreach($query->result() as $row){
                    $tbl.="<tr>";
                    $tbl.="<td>".$row->item_number."</td>";
                    $tbl.="<td width=\"200\">".$row->description."</td>";
                    $tbl.="<td width=\"30\" align=\"right\">".number_format($row->quantity)."</td>";
                    $tbl.="<td width=\"30\">".$row->unit."</td>";
                    $tbl.="<td align=\"right\">".number_format($row->price)."</td>";
                    $tbl.="<td width=\"30\" align=\"right\">".number_format($row->discount,2)."</td>";
                    $tbl.="<td width=\"30\" align=\"right\">".number_format($row->disc_2,2)."</td>";
                    $tbl.="<td width=\"30\" align=\"right\">".number_format($row->disc_3,2)."</td>";
                    $tbl.="<td align=\"right\">".number_format($row->amount)."</td>";
                    $tbl.="</tr>";
               };
			   echo $tbl;
    		   ?>
     		</tbody>
     	</table>
     	
     	
     	</td>
     </tr>
     <tr><td colspan=2>Catatan: <?=$comments?></td><td></td><td>Sub Total</td><td align="right"><?=number_format($sub_total)?></td></tr>
     <tr>
	 <td rowspan=5 colspan=2>
	 <?php 
	 $s="select * from payments where invoice_number='$invoice_number'";
	 if($qpay=$this->db->query($s)){
		 $ttl_bayar=0;
		 $st="<table border=1 cellpadding=2><tr><th>Nomor</th><th>Tanggal Bayar</th><th align=right>Jumlah Bayar</th>
		 <th>Cara</th></tr>";
		 foreach($qpay->result() as $r){
			 $ttl_bayar+=$r->amount_paid;
			$st.="<tr><td>$r->no_bukti</td><td>$r->date_paid</td>
			<td align=right>".number_format($r->amount_paid,2)."</td><td>$r->how_paid</td></tr>";
		 }
		 $st.="<tr><th colspan=2>Jumlah Pembayaran</th>
		 <th align=right>".number_format($ttl_bayar,2)."</th><th></th></tr>";
		 $st.="<tr><th colspan=2>Sisa Tagih</th>
		 <th align=right>".number_format($amount-$ttl_bayar,2)."</th><th></th></tr>";		 
		 $st.="</table>";
	 } 
	 if($st!=""){
		 echo $st;
	 }
	 ?>
	 </td>
	 
	 <td></td><td>Discount <?=$discount?></td><td align="right"><?=number_format($disc_amount)?></td></tr>
     <tr><td></td><td>Pajak <?=$tax?></td><td align="right"><?=number_format($tax_amount)?></td></tr>
     <tr><td></td><td>Ongkos</td><td align="right"><?=number_format($freight)?></td></tr>
     <tr><td></td><td>Lain-lain</td><td align="right"><?=number_format($others)?></td></tr>
     <tr><td></td><th>Jumlah</th><th align="right"><?=number_format($amount)?></th></tr>
	 <tr><td></td></tr>
	 <tr><td></td></tr>
	 <tr><td></td></tr>
	 <tr><td></td></tr>
	 <tr><td><b>Customer</b></td><td><b>MOD</b></td><td><b>Ass/Spv Cashier</b></td><td><b>Driver</b>
	 </td><td><b>Petugas CS</b></td></tr>
	 <tr><td>&nbsp;</td></tr>
	 <tr><td>&nbsp;</td></tr>
	 <tr><td>&nbsp;</td></tr>
	 <tr><td>&nbsp;</td></tr>
	 <tr><td>------------</td><td>------------</td><td>------------</td>
	 <td>------------</td><td>------------</td></tr>
</table>
