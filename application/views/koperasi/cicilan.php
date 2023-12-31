<table id="dgCicil" class="easyui-datagrid" style="width:auto;"
	data-options="iconCls: 'icon-edit',singleSelect: true,toolbar: '#tbCicil',
	url: '<?=base_url()?>index.php/koperasi/pinjaman/cicilan/list/<?=$no_pinjaman?>'">
	<thead>
		<tr>
			<th data-options="field:'no_urut', width:'80'">Ke</th>
			<th data-options="field:'tanggal_jth_tempo', width:'80'">Tanggal Jth Tempo</th>
			<th data-options="<?=col_number("awal")?>">Awal</th>
			<th data-options="<?=col_number("pokok")?>">Pokok</th>
			<th data-options="<?=col_number("bunga")?>">Bunga</th>
			<th data-options="<?=col_number("angsuran")?>">Angsuran</th>
			<th data-options="<?=col_number("akhir")?>">Akhir</th>
			<th data-options="field:'payment_no', width:'80'">Nomor Bayar</th>
			<th data-options="field:'comments', width:'80'">Catatan</th>
			<th data-options="field:'no_pinjaman', width:'80'">Nomor Pinjaman</th>
			<th data-options="field:'id', width:'80'">Id</th>
		</tr>
	</thead>
</table>
	
<div id="tbCicil">
	<?=link_button("Tambah","add_cicil()","add")?>
	<?=link_button("Edit","edit_cicil()","edit")?>
	<?=link_button("Hapus","del_cicil()","remove")?>
	<?=link_button("Refresh","load_cicil()","reload")?>
</div>	


<div id='dlgCicil'class="easyui-dialog" icon='icon-edit' style="width:500px;height:380px;padding:10px 20px"  
	closed="true" buttons="#tbDlgCicil">
	<form method="post" id="frmCicil">
		<table style='width:100%'>
			<tr>
				<td>Tanggal Jth Tempo</td><td><?=form_input("tanggal_jth_tempo")?></td>
			</tr>
			<tr>
				<td>Saldo Awal</td><td><?=form_input("awal")?></td>
			</tr>
			<tr>
				<td>Pokok</td><td><?=form_input("pokok")?></td>
			</tr>
			<tr>
				<td>Bunga</td><td><?=form_input("bunga")?></td>
			</tr>
			<tr>
				<td>Angsuran</td><td><?=form_input("angsuran")?></td>
			</tr>
			<tr>
				<td>Saldo Akhir</td><td><?=form_input("akhir")?></td>
			</tr>
			<tr>
				<td>Nomor Bayar</td><td><?=form_input("payment_no")?></td>
			</tr>
			<tr>
				<td>Catatan</td><td><?=form_input("comments")?></td>
			</tr>
			<tr>
				<td>Nomor Pinjaman</td><td><?=form_input("no_pinjaman")?></td>
			</tr>
		</table>		
		<input type='hidden' id='id_cicil' name='id'>
		<input type='hidden' id='loan_number_cicil' name='no_pinjaman' value='<?=$no_pinjaman?>'>
	</form>
</div>
<div id="tbDlgCicil">
	<?=link_button("Save","save_cicil()","save")?>
</div>	

<script language="JavaScript">
	function add_cicil() {
		$('#dlgCicil').dialog('open').dialog('setTitle','Cicilan');
	}
	function save_cicil() {
        if($('#no_pinjaman').val()===''){alert('Isi dulu nomor pinjaman !');return false;};

		url='<?=base_url()?>index.php/koperasi/pinjaman/save';
		$('#frmCicil').form('submit',{
			url: url,
			onSubmit: function(){
				return $(this).form('validate');
			},
			success: function(result){
				var result = eval('('+result+')');
				if (result.success){
					load_cicil();
					$('#dlgCicil').dialog('close');				
					$('#frmCicil').each(function(){ this.reset(); });
					log_msg('Data sudah tersimpan.');
				} else {
					log_err(result.msg);
				}
			}
		});	
	}
	function edit_cicil()	{
		var row = $('#dgCicil').datagrid('getSelected');
		if (row){
			$('#id_cicil').val(row.id);
			$('[name=company]').val(row.company);
			$('[name=startdate]').val(row.startdate);
			$('[name=finishdate]').val(row.finishdate);
			$('[name=firstposition]').val(row.firstposition);
			$('[name=endposition]').val(row.endposition);
			$('[name=place]').val(row.place);
			$('[name=lastsalary]').val(row.lastsalary);
			$('[name=supervisor]').val(row.supervisor);
			$('[name=referencename]').val(row.referencename);
			$('[name=referencephone]').val(row.referencephone);
			$('[name=reasontoleave]').val(row.reasontoleave);
			$('[name=employeeid]').val(row.employeeid);
			
			$('#dlgEdu').dialog('open').dialog('setTitle','Pendidikan');
		}
	}
	function load_cicil()	{
		no_pinjaman='<?=$no_pinjaman?>';
		xurl='<?=base_url()?>index.php/koperasi/pinjaman/cicilan/list/'+no_pinjaman;
		$('#dgCicil').datagrid({url:xurl});
	}
	function del_cicil()	{
		var row = $('#dgCicil').datagrid('getSelected');
	 
		if (row){
			url='<?=base_url()?>index.php/koperasi/pinjaman/delete/'+row.id;
			$.ajax({
				type: "GET", url: url,
				success: function(msg){
					load_cicil();
				},
				error: function(msg){alert(msg);}
			});
		}
	}
</script>