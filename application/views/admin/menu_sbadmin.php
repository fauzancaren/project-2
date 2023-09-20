<a href="#mnAdmin" data-toggle="collapse">
<span style='float:left;width:30px;margin-left:5px'><img src="<?=base_url("images/accounts.png")?>"></i></span>
    <p style="color:yellow" ><b>Admin Modules</p></p>
</a>
<div id="mnAdmin" class="collapse">

<li><?=anchor('user','User Login',' class=""');?></li>
<li><?=anchor('jobs','User Job Group',' class=""');?></li>
<li><a class="info_link" href="<?=base_url()?>index.php/company/sales " class="">Penjualan</a></li>
<li><a class="info_link" href="<?=base_url()?>index.php/company/purchase" class="">Pembelian</a></li>
<li><a class="info_link" href="<?=base_url()?>index.php/company/inventory" class="">Inventory</a></li>
<li><a class="info_link" href="<?=base_url()?>index.php/company/gl_link" class="">Link Perkiraan</a></li>
<li><a class="info_link" href="<?=base_url()?>index.php/nomor" class="">Penomoran</a></li>
<li><a class="info_link" href="<?=base_url()?>index.php/company/others" class="">Lain-lain</a></li>
<li><a class="info_link" href="<?=base_url()?>index.php/modules"  class="">Modules</a></li>
<li><?=anchor('company/department','Department','class=""');?></li>
<li><?=anchor('company/division','Division','class=""');?></li>
<li><?=anchor('company','Nama Perusahaan', 'class=""')?></li>
<li><?=anchor('sysvar_data','System Variables', 'class=""')?></li>
<li><?=anchor('admin/themes','Themes', 'class="info_link_no_frame"')?></li>
<li><?=anchor('admin/query','Query Express', 'class=""')?></li>
<li><?=anchor('company/check_db_structure ','Check Database', 'class=""')?></li>
            
</div>
