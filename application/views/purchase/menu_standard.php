<div style="margin:10px 0;"></div>
<ul class="easyui-tree">
    <li >
        <span><strong>Purchase Modules</strong></span>
        <ul >
            <li data-options="state:'closed'"  class='treeview'>
            	<span>Operation</span>
            	<ul class="sidebar-menu" data-widget="tree">
                    <?php include_once "menu_operation.php"; ?>
				</ul>
			</li>
            <li data-options="state:'closed'"><span>Master</span><ul>
				<li><?=anchor('supplier/add','Tambah Kode Supplier','class="info_link link2"')?></li>
				<li><?=anchor('supplier','Cari Master Supplier','class="info_link link2"')?></li>
				<li><?=anchor('project/project','Daftar Proyek','class="info_link link2"')?></li>
            </ul></li>
            
        </ul>
    </li>
</ul>
