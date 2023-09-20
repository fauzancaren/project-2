<a href="#mnManuf" data-toggle="collapse">
<span style='float:left;width:30px;margin-left:5px'><img src="<?=base_url("images/form.png")?>"></i></span>
    <p style="color:yellow" ><b>Manufacturer Modules</p></p>
</a>
<div id="mnManuf" class="collapse">

<li><?=anchor('manuf/workorder','Work Order (WO)','class=""');?></li>
<li><?=anchor('manuf/work_exec','Work Execute (WOE/SPK)','class=""');?></li>
<li><?=anchor('manuf/mat_release','Material Release (MR)','class=""');?></li>
<li><?=anchor('manuf/receive_prod','Receive Products','class=""');?></li>
<li><?=anchor('manuf/product','Barang Produksi (Products)','class=""')?></li>
<li><?=anchor('manuf/material','Bahan Baku (Materials)','class=""')?></li>
<li><?=anchor('manuf/product_cost','Tenaga Kerja','class=""')?></li>
<li><?=anchor('manuf/dept_prod','Department Produksi','class=""')?></li>
<li><?=anchor('manuf/product_person','Pelaksana','class=""')?></li>
<li><?=anchor('manuf/machine','Mesin Produksi','class=""')?></li>
</div>