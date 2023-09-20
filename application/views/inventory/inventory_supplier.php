<p class='title'><b>Supplier Alternate</b></p>
<table id='dgSupp' name='dgSupp' class="easyui-datagrid table1"  width="100%" height="300px"
	data-options="
		iconCls: 'icon-edit', fitColumns: true, 
		singleSelect: true,  
		toolbar:'#dgSupp_Tool'," width="100%">
	<thead>
		<tr>
			<th data-options="field:'supplier_number',width:80">Kode Supplier</th>
			<th data-options="field:'supplier_name',width:80">Nama Supplier</th>
			<th data-options="field:'supplier_item_number',width:80">Kode Barang Supplier</th>
			<th data-options="field:'cost',width:180">Harga Beli</th>
			<th data-options="field:'lead_time',width:80,align:'right'">Lead Time</th>
		</tr>
	</thead>
</table>
<div id='dgSupp_Tool'>
	<?=link_button('Add', 'dlgSupp_Add()','add');?>
	<?=link_button('Edit', 'dlgSupp_Edit()','edit');?>
	<?=link_button('Delete', 'dlgSupp_Delete()','remove');?>
	<?=link_button('Refresh', 'dgSupp_Refresh()','reload');?>
</div>
<?php 
echo load_view("inventory/supplier");
?>