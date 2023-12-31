<div class="thumbnail box-gradient">
	<?
	echo link_button('Save', 'save()','save');		
	echo link_button('Print', 'print_item()','print');		
	echo link_button('Add','','add','false',base_url().'index.php/manuf/material/add');		
	echo link_button('Search','','search','false',base_url().'index.php/manuf/material');		
	if($mode=="view") echo link_button('Refresh','','reload','false',base_url().'index.php/manuf/material/view/'.$item_number);		
	echo link_button('Import', 'import_excel()','year');	
	echo "<div style='float:right'>";
	echo link_button('Help', 'load_help(\'material\')','help');		
	?>
	 
	</div>
</div>
<div class="thumbnail">	
	<form id="frmBarang"  method="post">
	<input type='hidden' name='mode' id='mode'	value='<?=$mode?>'>
		<div  class="easyui-tabs" style="width:auto;height:auto;min-height: 500px">
		<div title="Umum" id="box_section" style="padding:10px">
		<table class='table2' width='100%'>
			<tr><td>Item Number</td><td><?=form_input("item_number",$item_number,"id='item_number'")?>
			&nbsp Aktif <?=form_radio('active',1,$active=='1'?TRUE:FALSE).' Yes '
					.form_radio('active',0,$active=='0'?TRUE:FALSE).' No'?>
				</td>
			</tr>
			<tr>
				<td>Nama Barang</td><td><?=form_input("description",$description,"id='description' style='width:200px'")?>
				</td>
			</tr>
			<tr><td>Category</td><td><?=form_dropdown('category',$category_list,$category);?></td>
			</tr>
			<tr><td>Sub Category</td><td><?=form_dropdown('sub_category',$category_list,$sub_category);?></td></tr>
			<tr><td>Satuan</td><td><?=form_input("unit_of_measure",$unit_of_measure,"id='unit_of_measure'")?></td></tr>
			<tr><td>Harga Jual</td><td><?=form_input("retail",$retail,"id='retail'")?></td></tr>
			<tr><td>Cost</td><td><?=form_input("cost",$cost,"id='cost'")?></td></tr>
			<tr><td>Supplier</td><td><?=form_dropdown('supplier_number',$supplier_list,$supplier_number);?></td></tr>
			 <tr>
			   <td>Pakai Nomor Serial </td>
			   <td><?=form_radio('serialized',1,$serialized=='1'?TRUE:FALSE);?>
				 Yes <?php echo form_radio('serialized',0,$serialized=='0'?TRUE:FALSE);?>No </td>
			  </tr>
			     <tr>
			       <td>Fitur Khusus </td>
			       <td colspan="3"><?php echo form_input('special_features',$special_features,"style='width:200px'");?></td>
			      </tr>
			     <tr>
			<tr>
		</table>
		</div>
		<div title='Accounting' style="padding:10px">
		<table class='table2' width='100%'>
			<tr><td>Akun Persediaan</td><td><?=form_input('inventory_account',$inventory_account,"id='inventory_account' style='width:200px'");?>
	         	<?=link_button('',"lookup_coa('inventory_account')",'search')?>
			</td></tr>
		    <tr>
				 <td>Akun Penjualan </td>
				 <td><?php echo form_input('sales_account',$sales_account,"id='sales_account' style='width:200px'");?>
					<?=link_button('',"lookup_coa('sales_account')",'search')?>
				 </td>
		    </tr>
		    <tr>
				 <td>Akun Harga Pokok Persediaan </td>
				 <td><?php echo form_input('cogs_account',$cogs_account,"id='cogs_account' style='width:200px'");?>
					<?=link_button('',"lookup_coa('cogs_account')",'search')?>
				</td>
		    </tr>
		    <tr>
				 <td>Akun Pajak Penjualan </td>
				 <td><?php echo form_input('tax_account',$tax_account,"id='tax_account' style='width:200px'");?>
					<?=link_button('',"lookup_coa('tax_account')",'search')?>			         	
				 </td>
		    </tr>
		</table>
		</div>
		<div title='Gambar'>
		<table class='table2' width='100%'>
		 
			<tr>
			   <td>Gambar Barang </td>
			   <td><?php echo form_input('item_picture',$item_picture,"style='width:200px' id='item_picture'");?></td>
			</tr>
			<tr>
				<td><?php	
					echo link_button("Upload", 'upload_gambar()','thumbnail');		
				?>
				</td>
			   <td>
					<img id="imgBarang" src="<?=base_url()."/tmp/".$item_picture?>" style="width:200px;height:200px;border:1px solid lightgray">
			   </td>  
			</tr>
		</table>
		</div>
		<!-- QUANTITY -->				
		<div title="Quantity" style="padding:10px">
			<? if(isset($qty_gudang))echo $qty_gudang; ?>
		</div>
		</div>
	</form>
</div>	
<div id="dlgGambar" class="easyui-dialog" 
 style="width:300px;height:200px;padding:5px 5px;left:100px;top:50px" closed="true" >
	<div class="thumbnail">
	<?php 
		echo form_open_multipart(base_url()."index.php/inventory/do_upload_picture","id='frmUpload'");
	?>
		<input type="file" name="userfile" id="userfile" size="20" title="Pilih Gambar" stye="float:left" />
		<p></p>
		<input type="button" class='btn btn-primary' value="Submit" onclick="do_upload()">  
		</form>
	</div>
	<div id='error_upload'></div>
</div>

<?=load_view('gl/select_coa_link')?>   	

 <script language='javascript'>
	var url;	
 
  	function save(){
  		if($('#item_number').val()==''){alert('Isi kode barang !');return false;}
  		if($('#description').val()==''){alert('Isi nama barang !');return false;}
  		if($('#unit_of_measure').val()==''){alert('Isi satuan !');return false;}
		url='<?=base_url()?>index.php/manuf/material/save';
			$('#frmBarang').form('submit',{
				url: url,
				onSubmit: function(){
					return $(this).form('validate');
				},
				success: function(result){
					var result = eval('('+result+')');
					if (result.success){
						$('#mode').val('view');
						log_msg('Data sudah tersimpan.');
					} else {
						log_err(result.msg);
					}
				}
			});
  	}
	function upload_gambar()
	{
		$('#dlgGambar').dialog('open').dialog('setTitle','Upload Gambar');
	}
  	function do_upload()
	{
		var xurl='<?=base_url()?>index.php/inventory/do_upload_picture';
			$('#frmUpload').form('submit',{
				url: url,
				onSubmit: function(){
					return $(this).form('validate');
				},
				success: function(result){
					console.log(result);
					var result = eval('('+result+')');
					if (result.success){
						
						//$.messager.show({
						//	title:'Success',msg:'Data sudah tersimpan. Silahkan simpan formulir ini.'
						//});
						
						var upload_data=result.upload_data;
						$('#item_picture').val(upload_data['file_name']);
						$('#dlgGambar').dialog('close');
						save();
						
					} else {
						$('#error_upload').html(result.error);
					}
				}
			});
		 

	}	
</script>