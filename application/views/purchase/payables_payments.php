<div class="thumbnail box-gradient">
	<?php
	   $min_date=$this->session->userdata("min_date","");
	
	echo link_button('Save', 'save_pay()','save');		
	echo link_button('Print', 'print_pay()','print');		
	echo link_button('Add','','add','true',base_url().'index.php/payables_payments/add');		
	echo link_button('Search','','search','true',base_url().'index.php/payables_payments');		
	echo link_button('Delete','','cut','true',base_url().'index.php/payables_payments/delete/'.$no_bukti);		
    echo link_button('Pilih Kontra Bon','select_kontra_bon()','search');      
    
    echo "<div style='float:right'>";    
	echo link_button('Help', 'load_help(\'payables_payments\')','help');		
    echo link_button('Close','remove_tab_parent()','cancel');      
	
	?> 
	</div>
</div>
<div class="thumbnail box-gradient">	
	<form id='frmAddPay' method="post">
		<input type='hidden' name='mode' id='mode'	value='<?=$mode?>'>
		<?php echo validation_errors(); ?>
		<table class="table2" width="100%">
		    <?=form_hidden('purchase_order_number',$purchase_order_number,'id="purchase_order_number"')?>
		    <tr><td colspan="2"><h1>Silahkan input pembayaran untuk faktur: <?=$purchase_order_number?></h1></td></tr>
		    <tr><td>Nomor: </td><td><?=form_input('no_bukti',$no_bukti,"id='no_bukti")?>*nomor sementara</td></tr>
		    <tr><td>Tanggal: </td><td><?=form_input('date_paid',$date_paid,"id='date_paid'")?></td></tr>
		    <tr><td>Jenis Bayar:</td><td><?=form_dropdown('how_paid',
		            array('Cash'=>'Cash','Giro'=>'Giro','Transfer'=>'Transfer'),$how_paid,"id='how_paid")?></td></tr>
		    <tr><td>Jumlah Bayar: </td><td><?=form_input('amount_paid',$amount_paid,"id='amount_paid")?></td></tr>
		    <tr><td></td><td></td></tr>
		    <tr><td></td><td></td></tr>
		    <tr><td>Saldo Tagihan Rp.</td><td><strong><?=number_format($saldo)?></strong></td></tr>
		</table>
	</form>
</div>