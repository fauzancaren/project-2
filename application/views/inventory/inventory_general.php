<p class='title'><b>General</b></p>
<table class='table2' width='100%'>
	<tr>
		<td>Harga Jual</td>
		<td>:</td>
		<td><?php echo form_input('retail',$retail,"id='retail'");
		$extra="";if($themes=="admin")$extra ="data-target='#dlgjual' data-toggle='modal' ";
		echo link_button('','dlgJualShow()','sum',"title='Hitungan harga jual beli margin'",'','','','',$extra);
		?> </td>
		<td>Harga Beli</td>
		<td>:</td>
		<td><?php 
	 	if($ShowItemCost){
			echo form_input('cost_from_mfg',$cost_from_mfg,"id='cost_from_mfg'");
		 }
		?> </td>
	</tr>
	<tr>
		<td>Harga Pokok </td>
		<td>:</td>
		<td><?php 
			 	if($ShowItemCost){
					echo form_input('cost',$cost,"id='cost'");
				 }
		?> </td>

		<td>Unit</td>
		<td>:</td>
		<td><?php 
		echo form_input('unit_of_measure',$unit_of_measure);
		?> </td>
	</tr>
	<tr>
		<td>Margin % </td>
		<td>:</td>
		<td><?php echo form_input('margin',$margin,"id='margin'");?> </td>

		<td>Barcode</td>
		<td>:</td>
		<td><?php echo form_input('barcode',$barcode,"id='barcode'");?> </td>
	</tr>
	<tr>
		<td>Merk</td>
		<td>:</td>
		<td><?php echo form_input('manufacturer',$manufacturer);?> </td>

		<td>Model</td>
		<td>:</td>
		<td><?php echo form_input('model',$model);?> </td>					       
	</tr>
	<tr>
		<td>Maximum Qty</td>
		<td>:</td>
		<td><?php echo form_input('quantity_on_back_order',$quantity_on_back_order);?> </td>

		<td>Minimum Qty</td>
		<td>:</td>
		<td><?php echo form_input('reorder_quantity',$reorder_quantity);?> </td>
	</tr>
	<tr>
		<td>Qty Semua Gudang</td>
		<td>:</td>
		<td><?php echo form_input('quantity_in_stock',$quantity_in_stock);?> </td>

		<td>Qty dlm pesanan</td>
		<td>:</td>
		<td><?php echo form_input('quantity_on_order',$quantity_on_order);?> </td>
	</tr>						
	<tr>
		<td>
			Multiple Style 
		</td><td>:</td>
		<td>
			<?=form_radio('style',1,$style=='1'?TRUE:FALSE,"style='width:30px'");?>	Yes 
			<?=form_radio('style',0,$style=='0'?TRUE:FALSE,"style='width:30px'");?> No 
		</td> 
		<td>Tgl TrAkhir Masuk</td><td>:</td><td><?php echo form_input('last_inventory_date',$last_inventory_date);?></td>
	</tr>

	<tr>
		<td>
			Item Multi Unit
		</td><td>:</td>
		<td>
			<?=form_radio('multiple_pricing',1,$multiple_pricing=='1'?TRUE:FALSE,"style='width:30px'");?> Yes 
			<?=form_radio('multiple_pricing',0,$multiple_pricing=='0'?TRUE:FALSE,"style='width:30px'");?>No 
		</td>
		<td>Disc1 % (Sale)</td><td>:</td><td><?php echo form_input('disc_prc_1',$disc_prc_1);?></td>
		 
		 
	</tr>
	<tr>
		<td>
			Barang kena pajak
		</td><td>:</td>
		<td> 
			<?=form_radio('taxable',1,$taxable=='1'?TRUE:FALSE,"style='width:30px'");?> Yes 
			<?=form_radio('taxable',0,$taxable=='0'?TRUE:FALSE,"style='width:30px'");?>No 
		</td>
		<td>Disc2 % (Sale)</td><td>:</td><td><?php echo form_input('disc_prc_2',$disc_prc_2);?></td>
		  
	</tr>
	<tr>
		<td>
			Boleh ubah harga barang
		</td><td>:</td>
		<td> 
			<?=form_radio('allowchangeprice',1,$allowchangeprice=='1'?TRUE:FALSE,"style='width:30px'");?> Yes 
			<?=form_radio('allowchangeprice',0,$allowchangeprice=='0'?TRUE:FALSE,"style='width:30px'");?>No 
		</td>
		<td>Disc3 % (Sale)</td><td>:</td><td><?php echo form_input('disc_prc_3',$disc_prc_3);?></td>
		  
	</tr>
	<tr>
		<td>
			Boleh ubah harga diskon
		</td><td>:</td>
		<td> 
			<?=form_radio('allowchangedisc',1,$allowchangedisc=='1'?TRUE:FALSE,"style='width:30px'");?> Yes 
			<?=form_radio('allowchangedisc',0,$allowchangedisc=='0'?TRUE:FALSE,"style='width:30px'");?>No 
		</td>
		  
	</tr>
	<tr>
		<td>
			Item Assembly /Paket
		</td><td>:</td>
		<td> 
			<?=form_radio('assembly',1,$assembly=='1'?TRUE:FALSE,"style='width:30px'");?> Yes 
			<?=form_radio('assembly',0,$assembly=='0'?TRUE:FALSE,"style='width:30px'");?>No 
		</td>
		  
	</tr>
	


</table>
