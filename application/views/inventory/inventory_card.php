<p class='title'><b>Stock Transaction</b></p>
<div class='thumbnail'>						 
    <table width='100%' class='box-gradient'>
    <tr><td>Date From</td>
    <td><?=form_input('date_from',date("Y-m-1"),'id=date_from 
        data-options="formatter:format_date,parser:parse_date"
        class="easyui-datetimebox" ');?></td>
    <td>Date To</td>
    <td><?=form_input('date_to',date("Y-m-d 23:59:59"),'id=date_to  
        data-options="formatter:format_date,parser:parse_date"
        class="easyui-datetimebox" ');?></td>
    <td>Gudang: <?=form_input('gudang','','id=gudang');?></td>
    <td><?=link_button('Search','search_cards()','search');?></td>
    </tr>
    </table>    
</div>
<table id="dgCard" class="easyui-datagrid table1"  width='100%' height="300px"
    data-options="
        iconCls: 'icon-edit', fitColumns: true, 
        singleSelect: true,  
        url: '',
        toolbar:'',
    ">
    <thead>
        <tr>
            <th data-options="field:'no_sumber',width:80">Nomor</th>
            <th data-options="field:'tanggal',width:80">Tanggal</th>
            <th data-options="field:'jenis',width:80,align:'left',editor:'text'">Jenis</th>
            <th data-options="field:'qty_masuk',width:80,align:'right',editor:{type:'numberbox',options:{precision:2}}">Qty Masuk</th>
            <th data-options="field:'qty_keluar',width:80,align:'right',editor:{type:'numberbox',options:{precision:2}}">Qty Keluar</th>
            <th data-options="field:'saldo',width:80,align:'right'">Saldo</th>
            <th data-options="field:'gudang',width:80,align:'right'">Gudang</th>
        </tr>
    </thead>
</table>
 