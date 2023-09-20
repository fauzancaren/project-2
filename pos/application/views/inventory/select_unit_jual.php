<div id="tb_search_unit" style="height:auto" class="box-gradient">
    Enter Text: <input  id="search_unit" style='width:100px' name="search_item">
    <?=link_button("Search","searchUnit();return false;","search")?>
    <?=link_button("Select","selectSearchUnit();return false;","save")?>
    <?=link_button("Cancel","dlgSearchUnit_Close();return false;","cancel")?>
</div>

<div id='dlgSearchUnit' class="easyui-dialog" style="padding:5px;width:500px;height:380px;;left:200px;top:100px"
        closed="true" toolbar="#tb_search_unit">
     
        <table id="dgItemSearchUnit" class="easyui-datagrid"  width="100%"
            data-options="
                toolbar: '',fitColumns:true,
                singleSelect: true,
                url: ''
            ">
            <thead>
                <tr>
                    <th data-options="field:'customer_pricing_code',width:150">Unit</th>
                    <th data-options="field:'retail',width:80">Price</th> 
                    <th data-options="field:'quantity_high',width:80">Qty Conv</th> 
                    
                </tr>
            </thead>
        </table>
     
</div>


<script type="text/javascript">

    var qty_conv=0;


    $().ready(function (){
        $('#dgItemSearchUnit').datagrid({
            onDblClickRow:function(){
                var row = $('#dgItemSearchUnit').datagrid('getSelected');
                if (row){
                    selectSearchUnit();
                }       
            }
        });        
    });


        function selectSearchUnit()
        {
            var row = $('#dgItemSearchUnit').datagrid('getSelected');
            if (row){
                console.log(row);
                qty_conv=row.quantity_high;
                if(qty_conv=="")qty_conv=1;
                qty=$("#qty").val();
                if(qty=="")qty=0;
                if(qty_conv==0)qty_conv=1;
                qty=qty*qty_conv;
                $("#m_unit").val(row.customer_pricing_code);		//$("#unit").val()
                $("#m_harga").val(row.retail);		//$("#item_price").val()
                $("#m_qty").val(qty);
                //$('#unit').val();
                //$('#price').val(row.retail);
                $('#dlgSearchUnit').dialog('close');
            }
            
        }
        function searchUnit()
        {
            //$('#dlgSearchUnit').window({left:100,top:window.event.clientY+20});
            $('#dlgSearchUnit').dialog('open')
                .dialog('setTitle','Cari satuan');
            nama=$('#search_unit').val();
            item=$('#barcode').val();
            $('#dgItemSearchUnit').datagrid({url:'<?=base_url()?>index.php/inventory_prices/filter/'+item+'/'+nama});
            $('#dgItemSearchUnit').datagrid('reload');

        }
        function dlgSearchUnit_Close(){
            $("#dlgSearchUnit").dialog("close");
        }       
</script>