<div id='dlgNotaOpen' class="easyui-dialog" style="width:800px;height:550px;
    padding:10px 20px;left:10px;top:20px" closed="true" 
    buttons="#btnNotaOpen" modal='true'>
    
    <table id="dgNotaOpen" class="easyui-datagrid "  title="Daftar Nota Open"
        data-options="iconCls: 'icon-edit',pagination:true,pageSize:10,
            singleSelect: true, fitColumns: true
        ">
        <thead>
            <tr>
                <th data-options="field:'invoice_number',width:80">Nota#</th>
                <th data-options="field:'invoice_date',width:80">Tanggal</th>
                <th data-options="field:'salesman',width:80">Salesman</th>
                <th data-options="field:'sold_to_customer',width:80">Kode Cust</th>
                <th data-options="field:'company',width:180">Customer</th>
                <th data-options="<?=col_number('amount',2)?>">Amount</th>
            </tr>
        </thead>
    </table>
    
    
</div>
<div id="btnNotaOpen">
    <?=link_button("Close","dlgNotaOpen_Close();return false;","cancel","false");?>
</div>
<script language="JavaScript">

    $().ready(function (){
        $('#dgNotaOpen').datagrid({
            onClickRow:function(){
                dlgNotaOpen_Select();
            }
        });        
    });


    function dlgNotaOpen_Show(){
        $("#dlgNotaOpen").dialog("open").dialog('setTitle','Daftar Nota Open');               
        var _url="<?=base_url()?>index.php/invoice/list_nota_open_all";
        $("#dgNotaOpen").datagrid({url: _url});
    }
    function dlgNotaOpen_Close(){
        $("#dlgNotaOpen").dialog("close");
    }
    function dlgNotaOpen_Select(){
        var row = $('#dgNotaOpen').datagrid('getSelected');
        if (row){
            edit_nota(row.invoice_number);
            $('#dlgNotaOpen').dialog('close');
        }       
    }

</script>