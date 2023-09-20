<p class="title"><b>Other Info</b></p>
<table class='table2' width='100%'>
	<tr>
	<td>Kode Barang Supplier </td>
	<td>:</td>
	<td><?php echo form_input('manufacturer_item_number',$manufacturer_item_number);?></td>
	<td>Kode Barang Lama</td>
	<td>:</td>
	<td><?php echo form_input('kode_lama',$kode_lama);?></td>
	</tr>
	<tr>
	<td>Fitur Khusus </td>
	<td>:</td>
	<td colspan="4"><?php echo form_input('special_features',$special_features,"style='width:400px'");?></td>
	</tr>
	<tr>
	<td>Gambar Barang </td>
	<td>:</td>
	<td><?php echo form_input('item_picture',$item_picture,"style='width:200px' id='item_picture'");?></td>
	<td rowspan="8">
		<img id="imgBarang" src="<?=base_url()."/tmp/".$item_picture?>" style="width:200px;height:200px;border:1px solid lightgray">
		</br><?=link_button(lang('picture'), 'upload_gambar();return false;','man')?>                               
	</td>  
	</tr>					
	<tr>
	<td>Pakai Nomor Serial </td>
	<td>:</td>
	<td><?=form_radio('serialized',1,$serialized=='1'?TRUE:FALSE,"style='width:30px'");?>
		Yes <?php echo form_radio('serialized',0,$serialized=='0'?TRUE:FALSE,"style='width:30px'");?>No </td>						 
	</tr>					  
	<tr>
	<td>Weight</td>
	<td>:</td>
	<td><?php echo form_input('weight',$weight);?></td>
	</tr> 
	<tr>
	<td>Weight Unit </td>
	<td>:</td>
	<td><?php echo form_input('weight_unit',$weight_unit);?></td>
	</tr>
	<tr>
	<td>Case Pack </td>
	<td>:</td>
	<td><?php echo form_input('case_pack',$case_pack);?></td>
	</tr>
	<tr>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	</tr>
</table>
