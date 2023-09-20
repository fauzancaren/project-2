<p class='title'><b>Promosi</b></p>
<table id="dgPromo" class="easyui-datagrid table1"  width='100%' height="300px"
    data-options="
        iconCls: 'icon-edit', fitColumns: true, 
        singleSelect: true,  
        toolbar:'',
    ">
    <thead>
        <tr>
            <th data-options="field:'promosi_code',width:70">Promo Code</th>
            <th data-options="field:'description',width:180">Keterangan Promo</th>
            <th data-options="field:'category',width:30">Category</th>
            <th data-options="field:'tipe',width:30">Type</th>
            <th data-options="field:'nilai',width:50,align:'right',
                editor:{type:'numberbox',options:{precision:2}}">Nilai %/Rp</th>
            <th data-options="field:'date_from',width:80">Date From</th>
            <th data-options="field:'date_to',width:80">Date To</th>
        </tr>
    </thead>
</table>

