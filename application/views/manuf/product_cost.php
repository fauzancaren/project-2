<div class="col-md-12">
	<div class="thumbnail">
	<?php
	echo link_button('Save', 'save()','save');		
	if($mode=="view") echo link_button('Refresh','','reload','false',
		base_url().'index.php/manuf/product_cost/view/'.$item_number);		
	//echo link_button('Print', 'print_item()','print');		
	//echo link_button('Add','','add','false',base_url().'index.php/manuf/product_cost/add');		
	//echo link_button('Search','','search','false',base_url().'index.php/manuf/product_cost');	
	?>
	<div style="float:right">	
	 
	<?=link_button('Help', 'load_help()','help');?>		
	<?=link_button("Close", "remove_tab_parent()","cancel")?>
	</div>

	<script type="text/javascript">
		function load_help() {
			window.parent.$("#help").load("<?=base_url()?>index.php/help/load/product_cost");
		}
	</script>
	
</div>
<div class="thumbnail">	
	<form id="frmBarang"  method="post">
	<input type='hidden' name='mode' id='mode'	value='<?=$mode?>'>
	<table>
		<tbody>
			<tr><td>Item Number</td>
				<td><?=form_input("item_number",$item_number,"id='item_number'")?></td>
			</tr>

			<tr><td>Nama Jasa</td><td><?=form_input("description",$description,"id='description' style='width:200px'")?>
				</td>
			</tr>
			<tr>
				<td>Aktif</td>
				<td> <?=form_radio('active',1,$active=='1'?TRUE:FALSE,"style='width:50px'").' Yes '
					.form_radio('active',0,$active=='0'?TRUE:FALSE,"style='width:50px'").' No'?>
				</td>		
			</tr>
			<tr><td>Category</td><td><?=form_dropdown('category',$category_list,$category);?></td>
			</tr>
			<tr><td>Sub Category</td><td><?=form_dropdown('sub_category',$category_list,$sub_category);?></td></tr>
			<tr><td>Satuan</td><td><?=form_input("unit_of_measure",$unit_of_measure,"id='unit_of_measure'")?></td></tr>
			<tr><td>Cost</td><td><?=form_input("cost",$cost,"id='cost'")?></td></tr>
			<tr><td>Supplier</td><td><?=form_dropdown('supplier_number',$supplier_list,$supplier_number);?></td></tr>
			
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
		</tbody>
	</table>
	</form>
</div>	

<div title="Quantity" style="padding:10px">
	
</div>

<?=load_view('gl/select_coa_link')?>   	

 <script language='javascript'>
	var url;	
 
  	function save(){
  		if($('#item_number').val()==''){alert('Isi kode barang !');return false;}
  		if($('#description').val()==''){alert('Isi nama barang !');return false;}
  		if($('#unit_of_measure').val()==''){alert('Isi satuan !');return false;}
		url='<?=base_url()?>index.php/manuf/product_cost/save';
			$('#frmBarang').form('submit',{
				url: url,
				onSubmit: function(){
					return $(this).form('validate');
				},
				success: function(result){
					var result = eval('('+result+')');
					if (result.success){
						$('#mode').val('view');
						$.messager.show({
							title:'Success',msg:'Data sudah tersimpan.'
						});
						log_err("Data sudah tersimpan");
					} else {
						$.messager.show({
							title:'Error',msg:result.msg
						});
						log_err(result);
					}
				}
			});
  	}

</script>