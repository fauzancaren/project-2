<div class='alert alert-info'>
<strong>Setting discount promosi barang (EXTRA QTY)</strong>
<p>Dibawah ini adalah data promosi barang, silahkan tambahkan data barang yang
ada promosi dengan klik  tombol <strong>Add</strong> kemudian pilih barang dan klik tombol <strong>Simpan</strong>
</p>
<p>Tombol <strong>Cari</strong> bisa dipakai untuk mencari data promosi yang sudah tersimpan</p>
</div>
<table id="dgItem" class="easyui-datagrid" width="100%"  height="300px"     
    data-options="iconCls: 'icon-edit',fitColumns:true,
    singleSelect: true,toolbar: '#tb',
    url: '<?=base_url()?>index.php/so/promosi_extra/load_items' ">
    <thead>
        <tr>
            <th data-options="field:'item_type'">Type</th>
            <th data-options="field:'item_number'">Item</th>
            <th data-options="field:'description'">Description</th>
            <th data-options="field:'min_qty'">Qty Jual</th>
            <th data-options="field:'extra_qty'">Extra Qty</th>
            <th data-options="field:'extra_items'">Extra Item</th>
            <th data-options="field:'from_date'">Date From</th>
            <th data-options="field:'to_date'">Date To</th>
            <th data-options="field:'time_range'">Time Range</th>
            <th data-options="field:'member_group'">Group</th>
            <th data-options="field:'id'">Line</th>
        </tr>
    </thead>
</table>

<div id="tb" style="height:auto">
    <?php 
        echo "Find: ";
        echo form_input("txtSearchItem","","id = 'txtSearchItem'");    
        echo link_button('Search','load_item()','search');     
        echo link_button('Add', 'add_item()','add');     
        echo link_button('Delete', 'remove_item()','remove');       
        echo link_button('Edit', 'edit_item()','edit');       
        echo link_button('Refresh', 'load_item()','reload');       
        echo link_button('Print', 'print_item()','print');       
        echo link_button('Close', 'remove_tab_parent()','cancel');       
    ?>
</div>
    
<div id='dlgItem' class="easyui-dialog"  
style="width:600px;height:380px;padding:5px 5px"
closed="true" buttons ="#dlgItemTool">

<table class='table2' width='100%'>
<tr>
    <td>Type</td><td> 
    <?php
    $data["item"]="Item";
    $data["category"]="Category";
    $data["supplier"]="Supplier";
    $data["merk"]="Merk";
    $data["model"]="Model";
    
    echo form_dropdown("item_type",$data,"Item","id='item_type'");
    
    ?>
    Item <input id='item_number'/>
    <?=link_button('','select_item()','search')?>        
    </td>
</tr>
<tr><td>Description </td><td><input id='description' style='width:280px'/></td>
</tr>
<tr>
<td>Date From</td>
<td><?php echo form_input('from_date',date("Y-m-d"),'id=from_date 
        class="easyui-datetimebox" required style="width:120px"
        data-options="formatter:format_date,parser:parse_date"
    ');
    ?>
</td>
</tr>
<tr>
<td>Date To</td>
<td><?php
    echo form_input('to_date',date("Y-m-d 23:59:59"),'id=to_date 
        class="easyui-datetimebox" required style="width:120px"
        data-options="formatter:format_date,parser:parse_date"
    ');
    
    ?>
</td>
</tr>
<tr>
    <td>Qty Sold : </td><td><input id='min_qty' style='width:80px'/>
        Extra Qty: <input id='extra_qty' style='width:80px'/>
    </td>
</tr>
<tr>
    <td>Extra Item </td><td><input id='extra_items' style='width:80px'/>
        <?=link_button('','dlgextra_items_show()','search')?>
        <input id='extra_item_name' disable>        
    </td>    
</tr>

<tr>
    <td>Promo Range Jam: </td>
    <td><input id='time_range' style='width:180px'/>
        <br><i style='text-size:small'>*isi dg format seperti (09~10,18~20) artinya berlaku pada jam 9 s/d 10</i>
    </td>
</tr>
<tr>
    <td>Member Group</td>
    <td><input id='member_group' style='width:180px'/>
        <?=link_button('','dlgmember_group_show()','search')?>        
    </td>
</tr>
<tr>
    <td>Row Id</td><td><input id='id' style='width:80px' disabled/></td>
</tr>
</table>
</div>    
<div id='dlgItemTool'>
<?php 
    echo link_button('Save', 'save_item()','save');     
?>    
</div>
<?php 
    echo $lookup_inventory;
    echo $lookup_category;
    echo $lookup_supplier;
    echo $lookup_merk;
    echo $lookup_model;
    echo $lookup_member_group;
    echo $lookup_extra_items;
    
?>
<script language="javascript">
    
    var page=0;

    $().ready(function(){
        void load_item();
    });
    function select_item(){
        var item_type=$("#item_type").val();
        if(item_type=="item"){
            dlgitem_number_show();            
        } else if (item_type=="supplier"){
            dlgsuppliers_show();
        } else if (item_type=='category'){
            dlgcategories_show();
        } else if (item_type=='sub_category'){
            dlgsub_categories_show();
        } else if (item_type=="merk"){
            dlgmerk_show();
        } else if (item_type=="model"){
            dlgmodel_show();
        }
    }
    function add_item() {
		clear_input();
        //$('#dlgItem').window({left:100,top:window.event.clientY+20});
        $('#dlgItem').dialog('open').dialog('setTitle','Pilih');
    }
    function load_item(){
        var search=$("#txtSearchItem").val();
        $('#dgItem').datagrid({url:'<?=base_url()?>index.php/so/promosi_extra/load_items/'+search});
        $('#dgItem').datagrid('reload');
    }
    function edit_item(){
        clear_input();
        $('#dlgItem').dialog('open').dialog('setTitle','Pilih');
        var row = $('#dgItem').datagrid('getSelected');
        if (row){
			$("#id").val(row.id);
			$("#item_number").val(row.item_number);        
			$("#min_qty").val(row.min_qty);
			$("#description").val(row.description);        
			$("#member_group").val(row.member_group);
			$("#disc_prc_1").val(row.disc_prc_1);         
			$("#extra_items").val(row.extra_items)
			$("#disc_prc_2").val(row.disc_prc_2);         
			$("#extra_qty").val(row.extra_qty);
			$("#disc_prc_3").val(row.disc_prc_3);
			//$("#from_date").val(row.from_date);
            $('#from_date').datetimebox('setValue', row.from_date);
			//$("#to_date").val(row.to_date);
            $('#to_date').datetimebox('setValue', row.to_date);
			$("#item_type").val(row.item_type);        
        }       
    }
    function remove_item(){
        if(closed){alert("Tidak bisa ubah jurnal ini karena sudah diclose!");return false;}
        var row = $('#dgItem').datagrid('getSelected');
        if (row){
            $.messager.confirm('Confirm','Are you sure you want to remove this line?',function(r){
                if (r){
                    url='<?=base_url()?>index.php/so/promosi/delete_item/'+row.id;
                    $.post(url,function(result){
                        if (result.success){
                            load_item();
                        } else {
                            $.messager.show({   // show error message
                                title: 'Error',
                                msg: result.msg
                            });
                        }
                    },'json');
                }
            });
        }       
    }
    function clear_input(){
        $("#item_number").val("");        $("#min_qty").val("");
        $("#description").val("");        $("#member_group").val("");
        $("#disc_prc_1").val("");         $("#extra_items").val("")
        $("#disc_prc_2").val("");         $("#extra_qty").val("");
        $("#disc_prc_3").val("");		  $("#id").val("");
    }
    function save_item(){
        loading();
        var d1=$('#from_date').datetimebox('getValue');
        var d2=$('#to_date').datetimebox('getValue');

        var xparam={item_number:$("#item_number").val(),
            description:$("#description").val(),from_date:d1,
            to_date:d2,extra_items:$("#extra_items").val(),
            extra_qty:$("#extra_qty").val(),
            member_group:$("#member_group").val(),item_type:$("#item_type").val(),
            time_range:$("#time_range").val(),min_qty:$("#min_qty").val(),
			id:$("#id").val()};
        console.log(xparam);
        $.ajax({
            type: "POST",data: xparam,url: CI_BASE+"index.php/so/promosi_extra/save",
            success: function(msg){
                console.log(msg);
                var result = eval('('+msg+')');
                if (result.success){
                    loading_close();
                    log_err(result.message);
                    $('#dlgItem').dialog('close');                  
                    load_item();
                    clear_input();
                } else {
                    loading_close();
                    log_msg(result.message);
                }
            },
            error: function(msg){
                loading_close();
                log_msg(msg);
            }
        });         
        
    }
</script>

