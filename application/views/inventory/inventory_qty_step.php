<p class='title'><b>Price by Qty Sold</b></p>
<table id='dgPriceQty' name='dgPriceQty' class="easyui-datagrid table1"  width='100%' height="300px"
	data-options="
		iconCls: 'icon-edit', fitColumns: true,
		singleSelect: true,  
		toolbar:'#dgPriceQty_Tool',">
	<thead>
		<tr>
			<th data-options="field:'min_qty',width:80">Qty Min Sold</th>
			<th data-options="field:'sales_price',width:180">Harga Jual</th>
			<th data-options="field:'id',width:50,align:'right'">Id</th>
		</tr>
	</thead>
</table>
<div id='dgPriceQty_Tool'>
	<?=link_button('Add', 'dlgPriceQty_Add()','add');?>
	<?=link_button('Edit', 'dlgPriceQty_Edit()','edit');?>
	<?=link_button('Delete', 'dlgPriceQty_Delete()','remove');?>
	<?=link_button('Refresh', 'dgPriceQty_Refresh()','reload');?>
</div>
<?php 
echo load_view("inventory/inventory_qty_step_input");
?>
