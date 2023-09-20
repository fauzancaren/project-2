<div id="dlgPriceCust" class="easyui-dialog"  buttons="#tbPriceCust"
	style="width:400px;height:300px;padding:5px 5px;left:100px;top:20px" closed="true" >
	<form id="frmPriceCust" name="frmPriceCust" method="POST">
	<table class="table2" width="100%">
		<?php 
			my_input_tr("Kelompok","cust_type");
			my_input_tr("Harga Jual","sales_price");
			my_input_tr("Id","id");
		?>
	</table>
	</form>
</div>
<div id='tbPriceCust'>
	<?php 
	echo link_button("Save","dlgPriceCust_Save()","save");
	echo link_button("Close","dlgPriceCust_Close()","cancel");
	?>
</div> 
<script language="JavaScript">
	function dgPriceCust_Refresh(){
		$("#dgPriceCust").datagrid("reload");
	}

	function dlgPriceCust_Clear(){
		$("#cust_type").val("");
		$("#sales_price").val("");
		$("#id").val("");
	}
	function dlgPriceCust_Add(){
		var item_no=$("#item_number").val();
		if(item_no==""){alert("Kode Barang belum diisi !");return false;}
		dlgPriceCust_Clear();
		$("#dlgPriceCust").dialog('open').dialog('setTitle','Price Kelompok');
	}
	function dlgPriceCust_Edit(){
		var row = $('#dgPriceCust').datagrid('getSelected');
		if (row){
			var id=row.id;
			if(id==""){alert("Kode baris tidak ada !");return false;}
			xurl=CI_ROOT+'inventory_price_customers/view/'+id;                             
			$.ajax({
				type: "GET", url: xurl,
				success: function(result){
					var result = eval('('+result+')');
					if (result.success){
						$("#cust_type").val(result.cust_type);
						$("#sales_price").val(result.sales_price);
						$("#id").val(result.id);
						$('#dlgPriceCust').dialog('open').dialog('setTitle','Price by Kelompok');
					}
				},
				error: function(msg){$.messager.alert('Info',msg);}
			});       
		}
		
	}
	function dlgPriceCust_Close(){
		$("#dlgPriceCust").dialog("close");
	}
	function dlgPriceCust_Save(){
		if($("#cust_type").val()==""){
            log_err("Isi kode kelompok pelanggan!");return;
        };
		if($("#sales_price").val()=="" || $("#sales_price").val()=="0"){
            log_err("isi harga jual !");return;
        }
        var item_number=$("#item_number").val();
        if(item_number==""){
            log_err("Pilih kode barang dulu !");return;
        }
        loading();    
		url='<?=base_url()?>index.php/inventory_price_customers/save_json/'+item_number;
		$('#frmPriceCust').form('submit',{
			url: url,
			onSubmit: function(){
				return $(this).form('validate');
			},
			success: function(result){
				var result = eval('('+result+')');
				if (result.success){
                    loading_close();
					dlgPriceCust_Close();
					dgPriceCust_Refresh();
				} else {
                    log_msg(results.msg);
				}
			}
		});
 	}
 	function dlgPriceCust_Delete(){
		var item_number=$("#item_number").val();
		if(item_number==""){alert("Kode belum diisi !");return false}
		var row = $('#dgPriceCust').datagrid('getSelected');
        var id=0;
		if (row) id=row.id;
        xurl=CI_ROOT+'inventory_price_customers/delete/'+id;                             
        $.ajax({
            type: "GET",
            url: xurl,
            success: function(msg){
				dlgPriceCust_Close();
				dgPriceCust_Refresh();
            },
            error: function(msg){
                $.messager.alert('Info',msg);
            }
        });         
 	}
	
</script>