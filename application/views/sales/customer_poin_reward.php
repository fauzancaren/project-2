<div class='thumbnail box-gradient'>
    <?=link_button('Add Point','add_point_show()','add');?>
    <?=link_button('Refresh','reload_point()','reload');?>

</div>
<table id="dgPoint" class="easyui-datagrid" width="100%"
    data-options="iconCls: 'icon-edit',singleSelect: true,fitColumns: true, 
    width: '100%',toolbar: '#',
    url: '<?=base_url()?>index.php/customer/list_poin_reward/<?=$customer_number?>'">
    <thead>
        <tr>
            <th data-options="field:'tanggal', width:'80'">Tanggal</th>
            <th data-options="field:'jenis_transaksi', width:'200'">Jenis</th>
            <th data-options="field:'point', width:'80'">Point</th>
            <th data-options="field:'ref1', width:'80'">Nota</th>
            <th data-options="field:'ref2', width:'80'">Item</th>
            <th data-options="field:'ref3', width:'80'">Outlet</th>
            <th data-options="field:'id',align:'right', width:'80'">Id</th>
        </tr>
    </thead>
</table>
<div id='divPoint' class="easyui-dialog"   
	closed="true" buttons="#divPointButtons" style="left:100px;top:20px;width:600px;height:300px">
	<form id='frmPoint' method='post'> 
        <div style="padding:20px">
            <table class='table2'>
            <tr><td>Tanggal</td><td><input type='text' name='tanggal' id='tanggal'></td></tr>
            <tr><td>Invoice#</td><td><input type='text' name='ref1' id="ref1"></td></tr>
            <tr><td>Point</td><td><input type='text' name='point' id='point'></td></tr>
            <tr><td>Keterangan</td><td><input type='text' name='catatan' id='catatan'></td></tr>


            </table>
        </div>
	</form>
</div>
<div id="divPointButtons" class=''>
	<?=link_button('Save','add_point_save()','save')?>
	<?=link_button('Close','add_point_close()','remove')?>
</div>   

<script>
    function reload_point(){
        $('#dgPoint').datagrid('reload');	// reload the user data
    }
	function add_point_show(){
		$('#divPoint').dialog('open').dialog('setTitle','Tambah /Koreksi Point');
	}
	function add_point_close(){
		$('#divPoint').dialog('close');
	}
	function add_point_save(){
  		if($('#customer_number').val()==''){alert('Isi kode pelanggan !');return false;}
  		url='<?=base_url()?>index.php/customer/add_point';
        $.post(url,{
                customer_number:$('#customer_number').val(), 
                tanggal:$("#tanggal").val(),
                point:$('#point').val(),
                ref1:$("#ref1").val(),
                ref2:$('#catatan').val()
            },function(result){
                if (result.success){
                    $('#dgPoint').datagrid('reload');	// reload the user data
                } else {
                    $.messager.show({	// show error message
                        title: 'Error',
                        msg: result.msg
                });
            }
        },'json');
	}
	function del_point(){
			var row = $('#dgPoint').datagrid('getSelected');
			if (row){
				$.messager.confirm('Confirm','Are you sure you want to remove this line?',function(r){
					if (r){
						url='<?=base_url()?>index.php/customer/shipto_del';
						$.post(url,{line_number:row.id},function(result){
							if (result.success){
								$('#dgPoint').datagrid('reload');	// reload the user data
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