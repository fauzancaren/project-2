<div id="dlgPriceQty" class="easyui-dialog"  buttons="#tbPriceQty"
	style="width:400px;height:300px;padding:5px 5px;left:100px;top:20px" closed="true" >
	<form id="frmPriceQty" name="frmPriceQty" method="POST">
	<table class="table2" width="100%">
		<?php 
			my_input_tr("Qty Min Sold","min_qty");
			my_input_tr("Harga Jual","sales_price");
			my_input_tr("Id","id");
		?>
	</table>
	</form>
</div>
<div id='tbPriceQty'>
	<?php 
	echo link_button("Save","dlgPriceQty_Save()","save");
	echo link_button("Close","dlgPriceQty_Close()","cancel");
	?>
</div> 
<script language="JavaScript">
	function dgPriceQty_Refresh(){
		$("#dgPriceQty").datagrid("reload");
	}
	function dlgPriceQty_Clear(){
		$("#min_qty").val("");
		$("#sales_price").val("");
		$("#id").val("");
	}
	function dlgPriceQty_Add(){
		var item_no=$("#item_number").val();
		if(item_no==""){alert("Kode Barang belum diisi !");return false;}
		dlgPriceQty_Clear();
		$("#dlgPriceQty").dialog('open').dialog('setTitle','Price by Qty');
	}
	function dlgPriceQty_Edit(){
		var row = $('#dgPriceQty').datagrid('getSelected');
		if (row){
			var id=row.id;
			if(id==""){alert("Kode baris tidak ada !");return false;}
			xurl=CI_ROOT+'inventory_qty_step/view/'+id;                             
			$.ajax({
				type: "GET", url: xurl,
				success: function(result){
					var result = eval('('+result+')');
					if (result.success){
						$("#min_qty").val(result.min_qty);
						$("#sales_price").val(result.sales_price);
						$("#id").val(result.id);
						$('#dlgPriceQty').dialog('open').dialog('setTitle','Price by Qty');
					}
				},
				error: function(msg){$.messager.alert('Info',msg);}
			});       
		}
		
	}
	function dlgPriceQty_Close(){
		$("#dlgPriceQty").dialog("close");
	}
	function dlgPriceQty_Save(){
		if($("#min_qty").val()=="" || $("#min_qty").val()=="0"){
            log_err("Isi Quantity Minimum!");return false;
        };
        var item_number=$("#item_number").val();
        if(item_number==""){
            log_err("Pilih kode barang dulu !");return false;
        }
        loading();    
		url='<?=base_url()?>index.php/inventory_qty_step/save_json/'+item_number;
		$('#frmPriceQty').form('submit',{
			url: url,
			onSubmit: function(){
				return $(this).form('validate');
			},
			success: function(result){
				var result = eval('('+result+')');
				if (result.success){
                    loading_close();
					dlgPriceQty_Close();
					dgPriceQty_Refresh();
				} else {
                    log_msg(results.msg);
				}
			}
		});
 	}
 	function dlgPriceQty_Delete(){
		var item_number=$("#item_number").val();
		if(item_number==""){alert("Kode belum diisi !");return false}
		var row = $('#dgPriceQty').datagrid('getSelected');
        var id=0;
		if (row) id=row.id;
        xurl=CI_ROOT+'inventory_qty_step/delete/'+id;                             
        $.ajax({
            type: "GET",
            url: xurl,
            success: function(msg){
				dlgPriceQty_Close();
				dgPriceQty_Refresh();
            },
            error: function(msg){
                $.messager.alert('Info',msg);
            }
        });         
 	}
	
</script>