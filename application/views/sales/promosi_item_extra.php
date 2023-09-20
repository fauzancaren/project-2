<?php 
if(!isset($controller))$controller="promosi_extra";

?>
<h4>Barang extra bonus yang dipilih</h4>
<span><i>*Apabila seting tidak dipakai barang yang sama silahkan isi barang extra bonus pilihan dibawah ini</i></span>
<div title="Items" style="padding:10px">
	<div id='dgItemPromoExtra_tool'  class='box-gradient'>
		<?=link_button("New Item","new_extra_item()","add")?>
		<?=link_button("Delete Item","delete_extra_items()","remove")?>
		<?=link_button("Refresh Item","load_extra_items()","reload")?>
	</div>
	<table id="dgItemPromoExtra" class="easyui-datagrid"  
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
				<th data-options="field:'id',width:80">Id</th>
				<th data-options="field:'promosi_code',width:80">PrCode</th>

			</tr>
		</thead>
	</table>
</div>
<?=form_input("item_number","","id='item_number' style='display:none'")?>

<script type="text/javascript">
		var url;
		var controller="<?=$controller?>";
		function new_extra_item(){
			dlginventory_extra_show();
		}
		function newItem2(){
			$('#dlg').dialog('open').dialog('setTitle','Tambah data barang');
			$('#frmItem').form('clear');
			$('#sales_order_number').val('<?=$promosi_code?>');
			url = '<?=base_url()?>index.php/so/'+controller+'/save_item';
		}
		function delete_extra_items(){
			var row = $('#dgItemPromoExtra').datagrid('getSelected');
			if (row){
				$.messager.confirm('Confirm','Are you sure you want to remove this line?',function(r){
					if (r){
						url='<?=base_url()?>index.php/so/'+controller+'/delete_item_extra/'+row.id;
						$.post(url,{id:row.id},function(result){
							if (result.success){
								$('#dgItemPromoExtra').datagrid('reload');	// reload the user data
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
		
		function dlginventory_extra_find(){
		    xurl=CI_ROOT+'so/'+controller+'/save_item_extra';
		    $.ajax({
		                type: "GET",
		                url: xurl,
		                data:{item_no:$('#item_number').val(),promosi_code:$('#promosi_code').val()},
		                success: function(msg){
							load_extra_items();
		                },
		                error: function(msg){alert(msg);}
		    });
		};
	function load_extra_items(){
		var nomor=$("#promosi_code").val();								
		$('#dgItemPromoExtra').datagrid({url:'<?=base_url()?>index.php/so/'+controller+'/items_extra/'+nomor});
		$("#dgItemPromoExtra").datagrid("reload");
	}
 


</script>

<?php 
if($mode=="view"){
	echo $lookup_inventory_extra;
}
?>