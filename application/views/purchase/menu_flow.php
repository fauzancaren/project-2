<img src="<?=base_url()?>images/purchase.png" usemap="#mapdata" class="map">
<map id="mapdata" name="mapdata">
<area shape="circle" alt="Supplier" coords="70,56,31" href="<?=base_url()?>index.php/supplier" class="info_link" title="Supplier" />
<area shape="circle" alt="" coords="172,55,29" href="<?=base_url()?>index.php/purchase_order" class="info_link" title="Purchase Order"  />
<area shape="circle" alt="" coords="275,55,30" href="<?=base_url()?>index.php/receive_po" class="info_link"  title="Receive Item PO" />
<area shape="circle" alt="" coords="368,55,29"href="<?=base_url()?>index.php/purchase_invoice" class="info_link"  title="Invoice" />
<area shape="circle" alt="" coords="471,53,30" href="<?=base_url()?>index.php/payables_payments" class="info_link"  title="Payment" />
<area shape="circle" alt="" coords="163,212,31"href="<?=base_url()?>index.php/purchase_retur" class="info_link"  title="Retur" />
<area shape="circle" alt="" coords="271,212,31" href="<?=base_url()?>index.php/purchase_dbmemo" class="info_link"  title="Debit Memo" />
<area shape="circle" alt="" coords="92,323,30" href="<?=base_url()?>index.php/inventory" class="info_link"  title="Inventory" />
<area shape="circle" alt="" coords="221,322,29" href="<?=base_url()?>index.php/shipping_locations" class="info_link"  title="Warehouse" />
<area shape="circle" alt="" coords="470,317,29" href="<?=base_url()?>index.php/jurnal" class="info_link" title="General Ledger" />
<area shape="circle" alt="Purchase Request" coords="70,212,30" href="<?=base_url()?>index.php/purchase_request" class="info_link" title="Purchase Request" />
<area shape="circle" alt="Project" coords="338,320,30" href="<?=base_url()?>index.php/project/project" class="info_link"  title="Proyek" />
<area shape="default" nohref="nohref" alt="" />
</map>

<script>
$().ready(function(){
	$('.map').maphilight({fade: false});
});	
</script>


<script type="text/javascript" src="<?=base_url()?>assets/maphilight-master/jquery.maphilight.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/flot/excanvas.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/flot/jquery.flot.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/flot/jquery.flot.categories.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/flot/jquery.flot.pie.js"></script>


