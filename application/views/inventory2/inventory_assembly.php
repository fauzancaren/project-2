<p class='title'><b>Assembly Material</b></p>
<table id='dgAsm' name='dgAsm' class="easyui-datagrid table1"  width='100%' height="300px"
	data-options="
		iconCls: 'icon-edit', fitColumns: true,
		singleSelect: true,  
		toolbar:'#dgAsm_Tool',">
	<thead>
		<tr>
			<th data-options="field:'assembly_item_number',width:80">Item Number</th>
			<th data-options="field:'description',width:180">Description</th>
			<th data-options="field:'quantity',width:80,align:'right'">Qty</th>
			<th data-options="field:'default_cost',width:80,align:'right'">Cost</th>
			<th data-options="field:'comment',width:180,align:'left'">Keterangan</th>
		</tr>
	</thead>
</table>
<div id='dgAsm_Tool'>
	<?=link_button('Add', 'dlgAsm_Add()','add');?>
	<?=link_button('Edit', 'dlgAsm_Edit()','edit');?>
	<?=link_button('Delete', 'dlgAsm_Delete()','remove');?>
	<?=link_button('Refresh', 'dgAsm_Refresh()','reload');?>
</div>
<?php 
echo load_view("inventory/assembly");
?>
