<p class='title'><b>Price by Customer Type</b></p>
<table id='dgPriceCust' name='dgPricecust' class="easyui-datagrid table1"  width='100%' height="300px"
	data-options="
		iconCls: 'icon-edit', fitColumns: true,
		singleSelect: true,  
		toolbar:'#dgPriceCust_Tool',">
	<thead>
		<tr>
			<th data-options="field:'cust_type',width:80">Kelompok</th>
			<th data-options="field:'sales_price',width:180">Harga Jual</th>
			<th data-options="field:'id',width:50,align:'right'">Id</th>
		</tr>
	</thead>
</table>
<div id='dgPriceCust_Tool'>
	<?=link_button('Add', 'dlgPriceCust_Add()','add');?>
	<?=link_button('Edit', 'dlgPriceCust_Edit()','edit');?>
	<?=link_button('Delete', 'dlgPriceCust_Delete()','remove');?>
	<?=link_button('Refresh', 'dgPriceCust_Refresh()','reload');?>
</div>
<?php 
echo load_view("inventory/inventory_price_customers_input");
?>
