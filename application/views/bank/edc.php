<div class="thumbnail box-gradient">
	<?php
	echo link_button('Save', 'save_this();return false;','save');		
	echo link_button('Print', 'print();return false','print');		
	echo "<div style='float:right'>";
    	echo link_button('Help', 'load_help(\'banks\')','help');			
    	?>
    	 
        <?=link_button('Close', 'remove_tab_parent();return false;','cancel'); ?>    
	</div>
</div>
<div class="easyui-tabs" >
	<div title="General" style="padding:10px">
	
		<div class="thumbnail">	
		<form id="myform"  method="post" action="<?=base_url()?>index.php/banks/edc/save">
		<input type='hidden' name='mode' id='mode'	value='<?=$mode?>'>
		<?php echo validation_errors(); ?>
		<table class="table2" width="100%">
			<tr>
				<td>Kode EDC</td>
                <td>
				<?php
				if($mode=='view'){
					echo "<strong>$card_type</strong>";
					echo form_hidden('card_type',$card_type,"id='$card_type'");
				} else { 
					echo form_input('card_type',$card_type,"style='width:200px'");
				}		
				?>
				</td>
            </tr>
            <tr>
        		<td>Nama EDC</td>
                <td><?php echo form_input('card_name',$card_name,"style='width:200px'");?></td>
            </tr>
            <tr>
				<td>Rekening#</td>
                <td> <?=form_input("bank_account",$bank_account,"id='bank_account'")?>
				<?php echo link_button('',"dlgbank_accounts_show()",'search')?>    
				</td>
			</tr>	 
  
		   </table>
		</form>
		</div>
	</div>

	 
</div>

<?php
echo $lookup_bank; 

?>   
  
<script type="text/javascript">
    function save_this(){
        if($('#card_type').val()===''){alert('Isi dulu kode edc !');return false;};
        if($('#card_name').val()===''){alert('Isi dulu nama edc !');return false;};
        if($('#bank_account').val()===''){alert('Pilih kode rekening bank !');return false;};
        $('#myform').submit();
    } 
</script>  

 