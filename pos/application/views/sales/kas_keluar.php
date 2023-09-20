<div class="thumbnail box-gradient">
	<?php
	echo link_button('Save', 'save_this()','save');		
	echo tool_option("kas_masuk");
	?>
</div>
<?php 
	$readonly="";
	if($mode=="view")$readonly=" readonly";

?>
<div class="thumbnail">	
<form id="myform"  method="post" action="<?=base_url()?>index.php/kas_keluar/save">
<input type='hidden' name='mode' id='mode'	value='<?=$mode?>'>

<?php echo validation_errors(); ?>
   <table class='table' width='100%'>
	<tr>
		<td>Nomor Bukti</td><td>
		<?php
			echo form_input('no_bukti',$no_bukti,"id=no_bukti $readonly");
		?></td>
	</tr>	 
       <tr>
            <td>Jenis Transaksi</td><td>
                <?php echo form_input('jenis_trans',$jenis_trans,"id='jenis_trans'");?>
			</td>
       </tr>
       <tr>
            <td>Tanggal</td><td> 
            <?php echo form_input('tanggal',date("Y-m-d"),'id=tanggal 
             class="easyui-datetimebox" required style="width:120px"
			data-options="formatter:format_date,parser:parse_date"
			');
			?>

        </td>
       </tr>
       <tr>
            <td>Jumlah</td><td><?php echo form_input('jumlah',$jumlah);?></td>
       </tr>
       <tr>
            <td>Supervisor</td>
            <td><?php echo form_input('supervisor',$supervisor,"id='supervisor'");
            	?>
			</td>
       </tr>
       <tr>
            <td>Kasir</td><td><?php echo form_input('kasir',$kasir);?></td>
       </tr>
 
			
   </table>
</form>
<?php 
//echo $lookup_user;
?>    
  
</div>   
<script type="text/javascript">
    function save_this(){
        if($('#no_bukti').val()===''){alert('Isi dulu nomor bukti !');return false;};
        var url='<?=base_url()?>index.php/kas_keluar/save';
        $('#myform').form('submit',{
            url: url,
            onSubmit: function(){
                return $(this).form('validate');
            },
            success: function(result){
                var result = eval('('+result+')');
                if (result.success){
                    remove_tab_parent();
                    log_msg('Data sudah tersimpan. Silahkan pilih nama barang');
                } else {
                    log_err(result.msg);
                }
            }
        });
    }
</script>  

 
 