<?php
date_default_timezone_set("Asia/Jakarta");
//echo gmdate("Y-m-d H:i:s", time()+60*60*7);
date_default_timezone_set('Asia/Jakarta');
$tanggal = date("Y-M-d H:i:s");
if ($set_tanggal = $this->session->userdata("set_tanggal")) {
    $tanggal = $set_tanggal;
}
$lAllowChangeDiscItem=strtolower(getvar("AllowChangeDiscItem","true"));
if($lAllowChangeDiscItem=="false"){
    $AllowChangeDisc="readonly";
} else {
    $AllowChangeDisc="";
}
$lAllowChangePrice=strtolower(getvar("AllowChangePrice","true"));
if($lAllowChangePrice=="false"){
    $AllowChangePrice="readonly";
} else {
    $AllowChangePrice="";
}
$is_gabung_item=getvar("IsGabungItem","false");
if($is_gabung_item=="")$is_gabung_item="false";

$IsAutoAddRow=getvar("IsAutoAddRow","false");
if($IsAutoAddRow=="")$IsAutoAddRow="false";

//$tanggal = date("d F Y");
//echo $tanggal;
/*
if($this->session->userdata('pos')==''){
	echo "<p>Belum ada session yang aktif untuk user anda, silahkan bikin terlebih dahulu.</p>";
	echo "<p><a href='".base_url()."index.php/pos/new_session'>Buat Session Baru</a></p>";
} else {
*/

///	header('Location: http://'.base_url().'index.php/pos');
//}
$ukuran_nota = getvar("ukuran_nota", 0);
if ($ukuran_nota == "") $ukuran_nota = 0;
if ($ukuran_nota == 1) {
    $width_nota = 800;
} else {
    $width_nota = 500;
    $width_nota = 300;
}
$user_id = user_id();
if ($pembulatan == "") $pembulatan = 0;

?>
<input type='hidden' id='debit' name='debit'>

<div class='row' style='background: #d6d6d6; width: 100vw; height: 100vh;'>

    <div class='col-md-12'>
        <div class='col-md-2 col-sm-2 col-xs-3 sidebar'>
            <div class='col-md-12'>
                <a href="<?= base_url() ?>" target="_blank">
                    <img src="<?= base_url('images/logo_maxon.png') ?>" style="max-width: 100%;" width='100%'>
                </a>
            </div>
            <div class='col-md-8'>
                <div class='row nama_toko'>
                    <?php include_once "page_toko.php"; ?>
                </div>
                <div class='row'>
                    <?php include_once "page_sidebar.php"; ?>
                </div>
            </div>
        </div>
        <div class='col-md-7 col-xs-6 ' style="padding:5px;">
            <div class='pos'>
                <div class='pos-content'>
                    <div class='col-md-12'>
                        <div class='row'>
                            <?php include_once "page_top.php"; ?>
                        </div>
                        <div class='row thumbnail'>
                            <div class='nota col-md-12' id="divNota" style="overflow:scroll; height: 320px"></div>
                        </div>
                        <div class='row' style="border:1px solid lightgray;padding:2px">
                            <div class="col-md-10">
                                <?php include_once "page_tool_row.php"; ?>
                                <?php include_once "page_total.php"; ?>
                            </div>
                            <!--<div class="col-md-2">-->
                            <!--    <div class="thumbnail" style="height:80px;width:100px">Picture</div>-->
                            <!--</div>-->
                        </div>
                        <div class='row thumbnail' style="background: #d6d6d6; display:none">
                            <?php include_once "page_bayar.php"; ?>
                        </div>
                        <div class='row thumbnail' style="color:white;background: #d6d6d6;">
                            <p><span id='msg-box-wrap'>Ready..</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class='col-md-3 col-xs-3 sidebar' style="background: #d6d6d6;padding:2px;">
            <!--<div class='thumbnail' style="height: 200px;" >-->
            <!--    <p><strong>Daftar Nota Open </strong>-->
            <!--        <?= link_button("Show All", "dlgNotaOpen_show();return false;", "search") ?>-->
            <!--    </p>-->
            <!--    <div id="divNotaOpenLoading" style="display:none">-->
            <!--        <img src="<?= base_url("images/loading_little.gif") ?>">-->
            <!--    </div>-->
            <!--    <div id='divNotaOpen'>-->
            <!--    </div>-->
            <!--</div>-->
            <div class='thumbnail'>
                <?php include_once "input_barang.php"; ?>
            </div>
            <div class="thumbnailx" id="divButtons" style="padding: 5px">
        <div class="button-container">
            <?php include_once "page_button_pos.php"; ?>
        </div>
    </div>
            
        </div>
    </div>
    <div id='dlgNotaPrint' class="easyui-dialog" closed="true" buttons="#btnPrint" style="width:<?= $width_nota ?>px;height:600px;padding:5px 5px;left:100px;top:20px">
        <div id='divNotaPrint' style="padding:10px; font-family: 'Arial';"></div>
    </div>
    <div id="btnPrint">
        <?= link_button("Close", "print_close()", "cancel", "false"); ?>
        <?= link_button("Cetak", "print_nota()", "print", "false"); ?>
    </div>

<?php
    echo $lov_customers;
    echo $lov_inventory;

    include_once "payment.php";
    include_once "setting.php";
    include_once "card_payment.php";
    include_once "transfer_payment.php";
    include_once "voucher_payment.php";
    include_once "cash_payment.php";
    include_once "gopay_payment.php";
    include_once "split_payment.php";
    include_once "inventory/select_unit_jual.php";
    include_once "offline.php";
    //include_once "menu_reports.php";
    //include_once "nota_open.php";
    include_once "page_nota_open.php";
    include_once "page_ask_super.php";
    
?>

<div id="dlgMain" name='dlgMain' class="easyui-dialog" 
    style="width:1000px;height:600px;padding:5px;left:10px;top:10px" closed="true">
    <div class="easyui-tabs" id="tt" style="padding:3px;min-height:600px"></div>
</div>

<script type='text/javascript' language="JavaScript">
    var base_url = '<?= base_url() ?>';
    var url_cat = '<?= base_url() ?>index.php/inventory/pos_category/';
    var url_item_filter = '<?= base_url() ?>index.php/inventory/pos_items_filter/';
    var url_list_barang = '<?= base_url() ?>index.php/inventory/pos_items/';
    var url_save_pos = "<?= base_url() ?>index.php/invoice/save_pos";
    var url_edit_nota = "<?= base_url() ?>index.php/invoice/edit_nota/";
    var url_print_nota = "<?= base_url() ?>index.php/invoice/print_nota/";
    var url_nota = "<?= base_url() ?>index.php/invoice/";
    var nama_toko = "<?= $nama_toko ?>";
    var alamat = "<?= $street ?>";
    var telp = "<?= $phone_number ?>";
    var kota = "<?= $city_state_zip_code ?>";
    var url_item_find = '<?= base_url() ?>index.php/inventory/find/';
    var tanggal = "<?= str_pad(date("Y-m-d H:i:s"), 10, "&nbsp") ?>";
    var kasir = "<?= str_pad(user_id(), 10, "&nbsp") ?>";
    var trun = 0;
    var ukuran_nota = <?= $ukuran_nota ?>;
    var pembulatan = <?= $pembulatan ?>;
    var is_gabung_item=<?=$is_gabung_item?>;
    var IsAutoAddRow=<?=$IsAutoAddRow?>;
    var user_id="<?=user_id()?>";


    $(document).ready(function() {

        tambah();

        $(".link2").click(function(event) {
            event.preventDefault();
            $("#dlgMenuProcess").dialog("close");
            $("#dlgMain").dialog("open").dialog('setTitle', 'Dialog');
            var url = $(this).attr('href');
            console.log(url);
            var n = url.lastIndexOf("/");
            var j = url.lastIndexOf("#");
            if (j > 0) {
                var title = url.substr(j + 1);
            } else {
                var title = url.substr(n + 1);
            }
            add_tab_parent(title, url);
        });
      //  run_timer();
       // run_timer_replicate();
    });
</script>

<style>
        .button-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-gap: 10px;
            margin-bottom: 20px;
        }

        .button {
            width: 100px;
            height: 80px;
            margin: 5px;
            text-align: center;
            background-color: lightblue;
            border: none;
            border-radius: 5px;
        }
    </style>