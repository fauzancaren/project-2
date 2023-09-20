<?php
$CI =& get_instance();
$CI->load->model('supplier_model');
$sup=$CI->supplier_model->get_by_id($supplier)->row();
     $CI->load->model('company_model');
     $model=$CI->company_model->get_by_id($CI->access->cid)->row();

?>
<table> 
<tr><td colspan=2><b><?=strtoupper($model->company_name)?></b></td><td></td><td><h1>PURCHASE ORDER</h1></td><td></td></tr>
<tr><td colspan=3><?=$model->street?> <?=$model->suite?></td>
	<td rowspan="5">
		<span>
			<b>Kepada Yth,</b></br>
			<?=$sup->supplier_name.' ('.$sup->supplier_number.')'?></br>
			<?=$sup->street?></br>
			<?=$sup->suite.' - '.$sup->city?></br> 
			<?='Phone: '.$sup->phone.' - Fax: '.$sup->fax?></br>
			<?='Up: '.$sup->first_name?></br> 
		</span>
	</td>
</tr>
<tr><td colspan=3><?="Phone: ".$model->phone_number?> <?=$model->fax_number?></td></tr>
<tr><td colspan=3><?=$model->email?></td></tr>
<tr><td>Nomor</td><td><h3><?=$po_number?></h3></td>
	
</tr>      	
<tr><td>Tanggal </td><td><?=$tanggal?></td><td></td></tr>
<tr><td>Termin </td><td><?=$terms?></td><td></td></tr> 
<tr><td></td><td></td></tr>
</table> 
<table cellspacing="0" cellpadding="1" border="1" >
	 
		<tr><th width=50>No</th><th width=100>Kode Barang</th><th width="200">Nama Barang</th>
		<th width="30">Qty</th><th width="30">Unit</th><th>Harga</th>
			<th width="30">Disc%2</th><th width="30">Disc%3</th><th width="30">Disc%</th><th>Jumlah</th>
		</tr>
 
		<?php
	   $sql="select item_number,description,quantity,unit,discount,
			price,total_price,disc_2,disc_3 
				from purchase_order_lineitems i
				where purchase_order_number='".$po_number."'";
		$query=$CI->db->query($sql);

		$tbl="";
		$no=0;
		 foreach($query->result() as $row){
			$no++;
			$disc1=round($row->discount*100,2);
			$disc2=round($row->disc_2*100,2);
			$disc3=round($row->disc_3*100,2);
			$tbl.="<tr><td>$no</td>";
			$tbl.="<td width=100>".$row->item_number."</td>";
			$tbl.="<td>".$row->description."</td>";
			$tbl.="<td width=\"30\" align=\"right\">".number_format($row->quantity)."</td>";
			$tbl.="<td width=\"30\">".$row->unit."</td>";
			$tbl.="<td align=\"right\">".number_format($row->price)."</td>";
			$tbl.="<td width=\"30\" align=\"right\">".number_format($disc1,2)."</td>";
			$tbl.="<td width=\"30\" align=\"right\">".number_format($disc2,2)."</td>";
			$tbl.="<td width=\"30\" align=\"right\">".number_format($disc3,2)."</td>";
			$tbl.="<td align=\"right\">".number_format($row->total_price)."</td>";
			$tbl.="</tr>";
	   };
	   echo $tbl;
		?>
	 
</table> 

<table width="100%">
     <tr><td rowspan=3>Catatan : </td><td><?=$comments?></td>
		<td></td><td></td><td>Sub Total </td><td align="right"><?=number_format($sub_total)?></td></tr>
     <tr><td></td>
		<td>Pajak <?=$tax?> </td><td  align="left"><?=number_format($tax_amount)?></td>
		<td>Discount [<?=$discount?>]</td><td align="right"><?=number_format($disc_amount)?></td>
	</tr>
     <tr><td></td><td>Ongkos </td><td  align="left"><?=number_format($freight)?></td>
		<td>Lain-lain </td><td  align="right"><?=number_format($others)?></td></tr>
     <tr><td></td><td></td><td></td><td></td><td><strong>Jumlah </strong></td><td  align="right"><strong><?=number_format($amount)?></strong></td></tr>
	<tr><td><b>Disetujui Oleh:</b></td><td></td><td></td><td><b>Dibuat Oleh:</b></td></tr>
</table> 