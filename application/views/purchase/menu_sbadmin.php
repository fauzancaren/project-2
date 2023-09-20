<a href="#mnPurchase" data-toggle="collapse">
    <span style='float:left;width:30px;margin-left:5px'><img src="<?=base_url("images/stock.png")?>"></i></span>
    <p style="color:yellow" ><b>Purchase Modules</p></p>
</a>

<div id="mnPurchase" class="collapse">
<li><?=anchor('purchase_request','Purchase Requisition');?></li>
<li><?=anchor('purchase_order','Purchase Order');?></li>
<li><?=anchor('purchase_invoice','Faktur Pembelian');?></li>
<li><?=anchor('payables_payments','Pembayaran');?></li>
<li><?=anchor('purchase_retur','Retur Pembelian');?></li>
<li><?=anchor('purchase_dbmemo','Debit Memo');?></li>
<li><?=anchor('purchase_crmemo','Credit Memo');?></li>
<li><?=anchor('po/kontra_bon','Kontra Bon');?></li>
<li><?=anchor('po/umur_barang','Umur Barang')?></li>
<li><?=anchor('po/tracking_harga','Tracking Harga Beli')?></li>
<li><?=anchor('po/profit_sharing','Profit Sharing Konsinyasi');?></li>
<li><?=anchor('po/konsinyasi/create','Create Invoice Konsinyasi');?></li>
<li><?=anchor('supplier','Master Supplier')?></li>
<li><?=anchor('project/project','Master Proyek')?></li>
</div>
