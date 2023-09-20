<a href="#mnBank" data-toggle="collapse">
<span style='float:left;width:30px;margin-left:5px'><img src="<?=base_url("images/lightbulb.gif")?>"></i></span>
    <p style="color:yellow" ><b>Bank Modules</p></p>
</a>
<div id="mnBank" class="collapse">

<li><?=anchor('banks/banks','Nomor RekeNing Kas/Bank','class=""')?></li>
<li><?=anchor('cash_in','Kas/Bank Masuk','class=""');?></li>
<li><?=anchor('cash_out','Kas/Bank Keluar','class=""');?></li>
<li><?=anchor('cash_mutasi','Mutasi Rekening','class=""');?></li>
<li><?=anchor('payables_payments','Bayar Hutang','class=""');?></li>
<li><?=anchor('payment','Terima Piutang','class=""');?></li>
<li><?=anchor(base_url("index.php/banks/giro/masuk_not_cleared"),'Daftar Giro Masuk - Gantung','class=""  ');?></li>
<li><?=anchor(base_url("index.php/banks/giro/keluar_not_cleared"),'Daftar Giro Keluar - Gantung','class=""  ');?></li>            
<li><?=anchor(base_url().'index.php/sales_retur','Retur Penjualan','class=""  ');?></li>
<li><?=anchor(base_url().'index.php/sales_crmemo','Kredit Memo Piutang','class=""');?></li>
<li><?=anchor(base_url().'index.php/sales_dbmemo','Debit Memo Piutang','class=""');?></li>
<li><?=anchor('purchase_retur','Retur Pembelian','class=""');?></li>
<li><?=anchor('purchase_dbmemo','Debit Memo Hutang','class=""');?></li>
<li><?=anchor('purchase_crmemo','Credit Memo Hutang','class=""');?></li>
<li><?=anchor('banks/rekon','Rekonsiliasi','class=""');?></li>
</div>