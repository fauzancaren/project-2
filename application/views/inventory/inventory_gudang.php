<p class="title"><b>Stock by Warehouse</b></p>
<table id="dgGudang" class="easyui-datagrid table1"  width='100%' height="300px"
    data-options="
        iconCls: 'icon-edit', fitColumns: true, 
        singleSelect: true,  toolbar: '#tbQtyGudang',                            
    ">
    <thead>
        <tr>
            <th data-options="field:'warehouse_code',width:80">Gudang</th>
            <th data-options="field:'quantity',width:80,align:'right',editor:{type:'numberbox',options:{precision:2}}">Quantity</th>
            <th data-options="field:'description',width:80">Keterangan</th>
            <th data-options="field:'create_by',width:80">Crt By</th>
            <th data-options="field:'create_date',width:80">Crt Date</th>
            <th data-options="field:'update_by',width:80">Upd By</th>
            <th data-options="field:'update_date',width:80">Upd Date</th>
            <th data-options="field:'id',width:80,align:'left',editor:'text'">Id</th>
        </tr>
    </thead>
</table>

<div id='tbQtyGudang'>
	<?php
		echo link_button('Refresh','refresh_qty_gudang()','reload');						
	?>
	<script>
		function refresh_qty_gudang(){
			$("#dgGudang").datagrid("reload");
		}
	</script>
</div>

