<a href="#mnInventory" data-toggle="collapse">
    <span style='float:left;width:30px;margin-left:5px'><img src="<?=base_url("images/warning.gif")?>"></i></span>
    <p style="color:yellow" ><b>Inventory Modules</p></p>
</a>
<div id="mnInventory" class="collapse">

<li><?=anchor('receive_po','Terima Barang PO','class=""');?></li>
<li><?=anchor('receive','Terima Barang Non PO','class=""');?></li>
<li><?=anchor('delivery','Pengeluaran Barang Lainnya','class=""');?></li>
<li><?=anchor('delivery_gudang','Kirim barang ke toko','class=""');?></li>
<li><?=anchor('receive_toko','Terima barang dari gudang/toko','class=""');?></li>
<li><?=anchor('retur_toko','Retur barang dari toko','class=""');?></li>
<li><?=anchor('stock_mutasi','Mutasi Stock','class=""');?></li>
<li><?=anchor('stock_opname','Stock Opname','class=""');?></li>
<li><?=anchor('stock_adjust','Adjustment Stock','class=""');?></li>
<li><?=anchor('inventory/closing','Closing Stock','class=""');?></li>
<li><?=anchor('stock/master/update_qty_all','Update Qty Master','class=""');?></li>
<li><?=anchor('purchase_request','Purchase Request','class=""');?></li>
<li><?=anchor('inventory','Master Barang','class=""')?></li>
<li><?=anchor('category','Kategori Barang','class=""')?></li>
<li><?=anchor('inventory_class','Kelas Barang','class=""')?></li>
<li><?=anchor('shipping_locations','Master Gudang','class=""')?></li>
<li><?=anchor('customer_type','Price By CustomerType','class=""');?></li>
<li><?=anchor('project/project','Project Code','class=""');?></li>
</div>