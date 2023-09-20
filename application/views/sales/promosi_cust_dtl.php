<?php 
if(!isset($controller))$controller="promosi_disc";

?>
<h4>Daftar customer yang dipilih</h4>
<span><i>*Silahkan pilih pelanggan atau kelompok untuk promosi ini</i></span>
<div title="Items" style="padding:10px">
	<div id='dgCust_tool'  class='box-gradient'>
		<?=link_button("New Customer","newItemCust()","add")?>
		<?php //link_button("New Cust Kelompok","newCustCat()","add")?>
		<?=link_button("Delete Item","deleteCustomer()","remove")?>
		<?=link_button("Refresh Item","load_item_customer()","reload")?>
	</div>
	<table id="dgCust" class="easyui-datagrid"  
	style="width:auto;min-height:200px"
	data-options="
			iconCls: 'icon-edit',fitColumns: true, 
			singleSelect: true,
			url: ''
		">
		<thead>
			<tr>
				<th data-options="field:'cust_code',width:100">Kode Cust</th>
				<th data-options="field:'company',width:180">Nama Cust</th>
				<th data-options="field:'line_type',width:80">Line Type</th>
				<th data-options="field:'id',width:80">Id</th>

			</tr>
		</thead>
	</table>
</div>
<?=form_input("cust_code","","id='cust_code' style='display:none'")?>
<?=form_input("company","","id='company' style='display:none'")?>

<script type="text/javascript">
		var url;
		var controller="<?=$controller?>";
		function newItemCust(){
			dlgcustomers_show();
		}
		function newCustCat(){
			dlgcustomer_type_select_show();
		}
		function newCust(){
			$('#dlgCust').dialog('open').dialog('setTitle','Tambah data pelanggan');
			$('#fmCust').form('clear');
			$('#fmCust_promosi_code').val('<?=$promosi_code?>');
			url = '<?=base_url()?>index.php/so/'+controller+'/save_item_customer';
		}
		function saveCustomer(){
			 
			$('#fmCust').form('submit',{
				url: url,
				onSubmit: function(){
					return $(this).form('validate');
				},
				success: function(result){
					var result = eval('('+result+')');
					if (result.success){
						$('#dlgCust').dialog('close');		// close the dialog
						$('#dgCust').datagrid('reload');	// reload the user data
					} else {
						$.messager.show({
							title: 'Error',
							msg: result.msg
						});
					}
				}
			});
		}
		function deleteCustomer(){
			var row = $('#dgCust').datagrid('getSelected');
			if (row){
				$.messager.confirm('Confirm','Are you sure you want to remove this line?',function(r){
					if (r){
						url='<?=base_url()?>index.php/so/'+controller+'/delete_item_customer/'+row.id;
						$.post(url,{id:row.id},function(result){
							if (result.success){
								$('#dgCust').datagrid('reload');	// reload the user data
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
		
		function dlgcustomers_find(){
		    xurl=CI_ROOT+'so/'+controller+'/save_item_customer';
		    $.ajax({
		                type: "GET",
		                url: xurl,
		                data:{customer_number:$('#cust_code').val(),promosi_code:$('#promosi_code').val()},
		                success: function(msg){
							load_item_customer();
		                },
		                error: function(msg){alert(msg);}
		    });
		};
	function load_item_customer(){
		var nomor=$("#promosi_code").val();								
		$('#dgCust').datagrid({url:'<?=base_url()?>index.php/so/'+controller+'/customers/'+nomor});
		$("#dgCust").datagrid("reload");
	}
 

</script>

<?php 
if($mode=="view"){
    echo $lookup_customer; 
    echo $lookup_customer_type;
}
?>