<div class='thumbnail'>
    <form method="post">
    <table class='table2' width='100%'>
    <tr><td>Date From</td>
    <td><?=form_input('date_from',date("Y-m-d"),'id=date_from 
    class="easyui-datetimebox" style="width:150px"
    data-options="formatter:format_date,parser:parse_date"');?></td>
    <td>Date To</td>
    <td><?=form_input('date_to',date("Y-m-d 23:59:59"),'id=date_to  
    class="easyui-datetimebox" style="width:150px"
    data-options="formatter:format_date,parser:parse_date"');?></td>
    <td><?=link_button('Search','search_cards()','search');?></td>
    </tr>
    </table>
    </form>
</div>
<table id="dgCard" class="easyui-datagrid"  width='100%'
    data-options="
        iconCls: 'icon-edit',fitColumns: true, 
        singleSelect: true,  width: '100%',
        url: '',toolbar:'',
    ">
    <thead>
        <tr>
            <th data-options="field:'no_bukti',width:100">Nomor</th>
            <th data-options="field:'tanggal',width:80">Tanggal</th>
            <th data-options="field:'jenis',width:80,align:'left',editor:'text'">Jenis</th>
            <th data-options="field:'jumlah',width:80,align:'right',editor:{type:'numberbox',options:{precision:2}}">Jumlah</th>
            <th data-options="field:'saldo',width:80,align:'right',editor:{type:'numberbox',options:{precision:2}}">Saldo</th>
        </tr>
    </thead>
</table>
<script>
    
	function search_cards()
	{
	    var cust=$("#customer_number").val();
		var d1=$("#date_from").datebox('getValue');
		var d2=$("#date_to").datebox('getValue');
	 
		var xurl='<?=base_url()?>index.php/customer/kartu_piutang/'+cust+'?d1='+d1+'&d2='+d2;
		console.log(xurl);
		$('#dgCard').datagrid({url:xurl});
		$('#dgCard').datagrid('reload');
	}
</script>