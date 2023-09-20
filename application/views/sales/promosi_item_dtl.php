<?php 
if(!isset($controller))$controller="promosi_disc";

?>
<h4>Barang promo yang dipilih</h4><span><i>*Silahkan klik item atau kategori barang yang termasuk kedalam kode promosi ini</i></span>
<div title="Items" style="padding:10px">
	<div id='dgItemPromo_tool'  class='box-gradient'>
		<?=link_button("New Item","newItem()","add")?>
		<?=link_button("New Category","newItemCat()","add")?>
		<?=link_button("New Supplier","newItemSupp()","add")?>
		<?=link_button("New Merk","newItemManuf()","add")?>
		<?=link_button("Delete Item","deleteItem()","remove")?>
		<?=link_button("Refresh Item","load_items()","reload")?>
		<?=link_button("New Item (Select)","searchItemIsc()","add")?>
	</div>
	<table id="dgItemPromo" class="easyui-datagrid"  
		style="width:auto;min-height:200px"
		data-options="
			iconCls: 'icon-edit',fitColumns: true, 
			singleSelect: true,
			url: ''
		">
		<thead>
			<tr>
				<th data-options="field:'item_number',width:100">Kode barang</th>
				<th data-options="field:'description',width:180">Nama Barang</th>
				<th data-options="field:'item_type',width:80">Item Type</th>
				<th data-options="field:'id',width:80">Id</th>
				<th data-options="field:'promosi_code',width:80">PrCode</th>

			</tr>
		</thead>
	</table>
</div>
<?=form_input("item_number","","id='item_number' style='display:none'")?>
<?=form_input("category","","id='category' style='display:none'")?>
<?=form_input("supplier_number","","id='supplier_number' style='display:none'")?>
<?=form_input("merk","","id='merk' style='display:none' ")?>
<?php 

echo load_view("inventory/inventory_select_checkbox",array(
	"url_after_selected"=>base_url()."index.php/so/promosi_disc/save_item?promosi_code=",
	"url_reload_item"=>base_url()."index.php/so/promosi_disc/items/$promosi_code",
	"grid_control"=>"dgItemPromo",
	"parent_id"=>"promosi_code"));

?>
<script type="text/javascript">
		var url;
		var controller="<?=$controller?>";
		function hitung(){
			
		}
		function newItemManuf(){
			dlgmerk_show();
		}
		function newItem(){
			dlginventory_show();
		}
		function newItemCat(){
			dlginventory_categories_show();
		}
		function newItemSupp(){
			dlgsuppliers_show();
		}
		function newItem2(){
			$('#dlg').dialog('open').dialog('setTitle','Tambah data barang');
			$('#frmItem').form('clear');
			$('#sales_order_number').val('<?=$promosi_code?>');
			url = '<?=base_url()?>index.php/so/'+controller+'/save_item';
		}
		function deleteItem(){
			var row = $('#dgItemPromo').datagrid('getSelected');
			if (row){
				$.messager.confirm('Confirm','Are you sure you want to remove this line?',function(r){
					if (r){
						url='<?=base_url()?>index.php/so/'+controller+'/delete_item/'+row.id;
						$.post(url,{id:row.id},function(result){
							if (result.success){
								$('#dgItemPromo').datagrid('reload');	// reload the user data
							} else {
								$.messager.show({	// show error message
									title: 'Error',
									msg: result.msg
								});
							}
						},'json');
					}
				});
			}
		}
		
		function dlginventory_find(){
		    xurl=CI_ROOT+'so/'+controller+'/save_item';
		    $.ajax({
		                type: "GET",
		                url: xurl,
		                data:{item_no:$('#item_number').val(),promosi_code:$('#promosi_code').val()},
		                success: function(msg){
							load_items();
		                },
		                error: function(msg){alert(msg);}
		    });
		};
	function load_items(){
		var nomor=$("#promosi_code").val();								
		$('#dgItemPromo').datagrid({url:'<?=base_url()?>index.php/so/'+controller+'/items/'+nomor});
		$("#dgItemPromo").datagrid("reload");
	}

	function dlginventory_categories_find(){
		xurl=CI_ROOT+'so/'+controller+'/save_item';
		$.ajax({
			type: "GET",
			url: xurl,
			data:{item_type:"kode_category",item_no:$('#category').val(),promosi_code:$('#promosi_code').val()},
			success: function(msg){
				load_items();
			},
			error: function(msg){alert(msg);}
		});

	}
	function dlgsuppliers_find(){
		xurl=CI_ROOT+'so/'+controller+'/save_item';
		$.ajax({
			type: "GET",
			url: xurl,
			data:{item_type:"kode_supplier",item_no:$('#supplier_number').val(),promosi_code:$('#promosi_code').val()},
			success: function(msg){
				load_items();
			},
			error: function(msg){alert(msg);}
		});

	}
	function dlgmerk_find(){
		xurl=CI_ROOT+'so/'+controller+'/save_item';
		$.ajax({
			type: "GET",
			url: xurl,
			data:{item_type:"kode_merk",item_no:$('#merk').val(),promosi_code:$('#promosi_code').val()},
			success: function(msg){
				load_items();
			},
			error: function(msg){alert(msg);}
		});

	}


</script>

<?php 
if($mode=="view"){
	echo $lookup_inventory;
	echo $lookup_category;
	echo $lookup_supplier;
	echo $lookup_merk;	
}
?>