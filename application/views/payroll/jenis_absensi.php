<div class="thumbnail box-gradient">
	<?
	echo link_button('Save', 'save_this()','save');		
	echo link_button('Print', 'print_this()','print');		
	echo link_button('Add','','add','false',base_url().'index.php/payroll/jenis_absensi/add');		
	echo link_button('Search','','search','false',base_url().'index.php/payroll/jenis_absensi');		
	
	echo "<div style='float:right'>";
	echo link_button('Help', 'load_help(\'jenis_absensi\')','help');		
	
	?>
	 
	
	</div>
	
</div>
<div class="thumbnail">	
<form id="frmJenis"  method="post">
	<input type='hidden' name='mode' id='mode'	value='<?=$mode?>'>
	<?php echo validation_errors(); ?>
   <table class='table2' width='100%'>
	<tr>
		<td>Kode</td>
		<td><?php
		if($mode=='view'){
			echo "<strong>$kode</strong>";
			echo form_hidden('kode',$kode,"id=kode");
		} else { 
			echo form_input('kode',$kode,"id=kode");
		}		
		?></td>
	</tr>	 
       <tr><td>Keterangan</td><td colspan="4"><?=form_input('keterangan',$keterangan,"id=keterangan style='width:400px'");?></td></tr>
   </table>
   </form>
    
</div>   
<script type="text/javascript">
    function save_this(){
        if($('#kode').val()===''){alert('Isi kode !');return false;};

		url='<?=base_url()?>index.php/payroll/jenis_absensi/save';
		loading();
			$('#frmJenis').form('submit',{
				url: url,
				onSubmit: function(){
					return $(this).form('validate');
				},
				success: function(result){
					loading_close();
					var result = eval('('+result+')');
					if (result.success){
						$('#kode').val(result.status);
						$('#mode').val('view');
						$.messager.show({
							title:'Success',msg:'Data sudah tersimpan.'
						});
						remove_tab_parent();
					} else {
						loading_close();
						$.messager.show({
							title: 'Error',
							msg: result.msg
						});
					}
				}
			});
        
        
        
    }
</script>  

 
 