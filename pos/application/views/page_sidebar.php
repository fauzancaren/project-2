<div class='sidebar-menu' style='color:white'>
    <h1><img src="<?= base_url('images/action_event.png') ?>"> Operasional</h1>
    <ul>
        <li><?=anchor("#","New Nota","onclick='tambah();return false'")?></li>
        <!--<li><?=anchor(base_url("index.php/receive_toko"),"Terima Barang dr pusat","class='link2'")?></li>-->
        <!--<li><?=anchor(base_url("index.php/retur_toko"),"Retur barang ke pusat","class='link2'")?></li>-->
        <!--<li><?=anchor(base_url("index.php/stock_mutasi"),"Kirim barang ke toko lain","class='link2'")?></li>-->
    <!--    <li><?=anchor(base_url("index.php/kas_masuk"),"Kas Masuk (Kas Awal)","class='link2'")?></li>-->
    <!--    <li><?=anchor(base_url("index.php/kas_keluar"),"Kas Keluar","class='link2'")?></li>-->
    </ul>
    <h1><img src="<?=base_url('images/comments.png')?>"> Laporan</h1>
    <ul>
        <li><?=anchor(base_url("index.php/reports/criteria/rangkum"),"Rangkuman Harian","class='link2'")?></li>
        <li><?=anchor(base_url("index.php/reports/criteria/faktur_sum"),"Penjualan Summary","class='link2'")?></li>
        <!--<li><?=anchor(base_url("index.php/reports/criteria/sls_item"),"Penjualan By Item","class='link2'")?></li>-->
        <!--<li><?=anchor(base_url("index.php/reports/criteria/sls_cat"),"Penjualan By Category","class='link2'")?></li>-->
        <!--<li><?=anchor(base_url("index.php/reports/criteria/faktur_cust"),"Penjualan By Customer","class='link2'")?></li>-->
        <!--<li><?=anchor(base_url("index.php/reports/criteria/faktur_slsman"),"Penjualan By Salesman","class='link2'")?></li>-->
        <!--<li><?=anchor(base_url("index.php/reports"),"All Reports","class='link2'")?></li>-->
    </ul>
    <?php if(strtolower(user_id())=="admin") { ?>
    <h1><img src="<?=base_url('images/setup.png')?>"> Tools</h1>
    <ul>
        <li><a href="#" onclick="dlgSetting_Show();return false">Setting</a></li>
        <li><?=anchor(base_url("index.php/customer"),"Daftar Pelanggan","class='link2'")?></li>
        <li><?=anchor(base_url("index.php/inventory"),"Daftar Barang Jasa","class='link2'")?></li>
        <li><?=anchor(base_url("index.php/category"),"Kelompok Barang","class='link2'")?></li>
        <li><?=anchor(base_url("index.php/type_of_payment"),"Termin Pembayaran","class='link2'")?></li>
        <li><?=anchor(base_url("index.php/banks/banks"),"Rekening","class='link2'")?></li>
        <li><a href="#" onclick="dlgOffline_show();return false">Online</a></li>
        <li><a href="#" onclick="update_master();return false;">Update Master</a></li>
        <li><a href="<?=base_url('index.php/login/logout')?>">Logout</a></li>
    </ul>
    <?php } ?>
</div>
