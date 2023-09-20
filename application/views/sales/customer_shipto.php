<table id="dgShipTo" class="easyui-datagrid" width="100%"
    data-options="iconCls: 'icon-edit',singleSelect: true,fitColumns: true, 
        width: '100%',toolbar: '#tbShipTo',
        url: '<?=base_url()?>index.php/customer/list_shipto/<?=$customer_number?>'">
    <thead>
        <tr>
            <th data-options="field:'location_code', width:'80'">Kode</th>
            <th data-options="field:'alamat', width:'200'">Alamat</th>
            <th data-options="field:'kota', width:'80'">Kota</th>
            <th data-options="field:'kode_pos', width:'80'">Kode Pos</th>
            <th data-options="field:'telp', width:'80'">Telp</th>
            <th data-options="field:'fax', width:'80'">Fax</th>
            <th data-options="field:'contact', width:'80'">Kontak</th>
            <th data-options="field:'id',align:'right', width:'80'">Line</th>
        </tr>
    </thead>
</table>

 
<div id="tbShipTo" class='box-gradient'>
	<?=link_button('Add','add_shipto()','add')?>
	<?=link_button('Edit','edit_shipto()','edit')?>
	<?=link_button('Delete','del_shipto()','remove')?>
</div>

<div id='divShipTo'class="easyui-dialog"   
	closed="true" buttons="#divShipToButtons" style="left:100px;top:20px">
	<form id='frmShipTo' method='post'><table class='table2' width='100%'>
		<tr><td>Location Code</td><td><input type='text' name='location_code' id='location_code'></td></tr>
		<tr><td>Alamat</td><td><input type='text' name='alamat' style="width:300px"></td></tr>
		<tr><td>Kota</td><td><input type='text' name='kota'></td></tr>
		<tr><td>Kode Pos</td><td><input type='text' name='kode_pos'></td></tr>
		<tr><td>Telp</td><td><input type='text' name='telp'></td></tr>
		<tr><td>Fax</td><td><input type='text' name='fax'></td></tr>
		<tr><td>Kontak</td><td><input type='text' name='contact'></td></tr>
	</form></table>
</div>
<div id="divShipToButtons" class='box-gradientx'>
	<?=link_button('Save','add_shipto_save()','save')?>
	<?=link_button('Close','add_shipto_close()','back')?>
</div>   

<script>
    
	function add_shipto(){
		$('#divShipTo').dialog('open').dialog('setTitle','Tambah Ship To');
	}
	function add_shipto_close(){
		$('#divShipTo').dialog('close');
	}
	function add_shipto_save(){
  		if($('#customer_number').val()==''){alert('Isi kode pelanggan !');return false;}
  		url='<?=base_url()?>index.php/customer/shipto_add/<?=$customer_number?>';
  		$("#frmShipTo").form('submit',{
  			url:url,
  			onSubmit:function(){return $(this).form('validate');},
  			success:function(result){
  				var result=eval('('+result+')');
		  		if(result.success){
		  			add_shipto_close();
		  			$('#dgShipTo').datagrid('reload'); 
		  		} else {$.messager.show({title:'Error',msg:result.msg});}
	  		}
  		});	
	}
	function del_shipto(){
			var row = $('#dgShipTo').datagrid('getSelected');
			if (row){
				$.messager.confirm('Confirm','Are you sure you want to remove this line?',function(r){
					if (r){
						url='<?=base_url()?>index.php/customer/shipto_del';
						$.post(url,{line_number:row.id},function(result){
							if (result.success){
								$('#dgShipTo').datagrid('reload');	// reload the user data
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
</script>