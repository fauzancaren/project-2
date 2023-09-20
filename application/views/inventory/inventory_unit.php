<p class='title'><b>Multi Unit Prices</b></p>
<table id='dgUnitPrice' name='dgUnitPrice' class="easyui-datagrid table1"  
	data-options="
		iconCls: 'icon-edit', fitColumns: true,
		singleSelect: true,  
		
		toolbar:'#dgUnitPrice_Tool',
	" 
	width="100%" height="300px">
	<thead>
		<tr>
			<th data-options="field:'customer_pricing_code',width:80">Satuan</th>
			<th data-options="field:'quantity_low',width:80,align:'right'">Qty Low</th>
			<th data-options="field:'quantity_high',width:80,align:'right'">Qty High</th>
			<th data-options="field:'retail',width:80,align:'right'">Harga Jual</th>
			<th data-options="field:'cost',width:80,align:'right'">Harga Beli</th>
			<th data-options="field:'date_from',width:80">Date From</th>
			<th data-options="field:'date_to',width:80">Date To</th>
			<th data-options="field:'qty_last',width:80">Qty Last</th>
			<th data-options="field:'calc_date',width:80">Calc Update</th>
			<th data-options="field:'date_to',width:80">Date To</th>
		</tr>
	</thead>
</table>
<div id='dgUnitPrice_Tool'>
	<?=link_button('Add', 'dlgUnitPrice_Add()','add');?>
	<?=link_button('Edit', 'dlgUnitPrice_Edit()','edit');?>
	<?=link_button('Delete', 'dlgUnitPrice_Delete()','remove');?>
	<?=link_button('Refresh', 'dgUnitPrice_Refresh()','reload');?>
</div>
<?php echo load_view("inventory/unit_price");
?>
