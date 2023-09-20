<div class='col-sm-12' id='pos_top' style='padding-top: 10px; background: #d6d6d6;'>
    <div class='col-flex'>
        <span class='label_display' style='background:#d6d6d6;margin-bottom:10px; margin-left: 0px;
            color:white;float:right;font-size:24px;border: 0px ;
            min-width:99%;padding: 5px 10px; border-radius: 0px;'>
    <div style="display: flex; justify-content: flex-end;">
  <span style="color: black;">Rp.</span>
  <span class="total" id="ttl_nota" style="margin-left: 5px;">0</span>
</div>
</span>
    </div>
</div>

<div class='col-sm-12' style="background: #d6d6d6;color:white;padding:5px;">
    <span class='glyphicon glyphicon-edit'></span>  <span style='color: black; font-weight: bold;'>: </span>
    <span id='nota' style='font-weight:900'>AUTO</span>
    <span id='nota_tmp'></span>
    <span class='glyphicon glyphicon-time'></span> <span style='color: black; font-weight: bold;'>: </span>
    <span id='tanggal' style='font-weight:900'>
        <?php echo $tanggal; ?>
    </span>
   <span class='glyphicon glyphicon-user' style='font-weight: bold;'></span>  <span style='color: black; font-weight: bold;'>: </span><span id='userid' style='font-weight: bold;'><?= $user_id ?></span>
<span style='color: black; font-weight: bold;'>Customer :</span> <span id='cust' style='font-weight: bold;color:black'>CASH</span>

    <?= link_button('Find', 'dlgcustomers_show();return false', 'search', 'false') ?>
    <span id='cust_name'></span>

    <div style="padding-top:5px;margin-bottom:5px;color: black">
    Type: <?= form_dropdown(
                'cust_type',
                array('Umum', 'Member', 'Tourguide', 'Lain-lain'),
                'Umum',
                "id='cust_type' style='color:black'"
            ) ?>
    Termin: <?= form_dropdown(
                'payment_terms',
                $payment_terms_list,
                'CASH',
                "id='payment_terms' style='color:black'"
            ) ?>
  Qty:<span id='qty_total' style='font-weight:900; color: black;'>1</span>
 Count:<span id='qty_jenis' style='font-weight:900; color: black;'>1</span>

    Spg: <?= form_dropdown(
            'salesman',$salesman_list,$user_id,"id='salesman' style='color:black'"
        )?>
    </div>

    <div style="padding-top:5px;margin-bottom:5px;color:#ffffff">
   <span style='color: black;'>Qty:</span> <?= form_input("qty", "0", "id='qty_top' class='calc_input' style='width:100px;color:black'") ?>
<span class='glyphicon glyphicon-barcode'></span>
<span style='color: black;'>Item:</span> <?php echo form_input("barcode", "", "id='barcode_top' style='width:150px;color:black'"); ?>
<span style='color: black;'>Nomor SO #:</span> <span class='glyphicon glyphicon-barcode'></span>
    <?php echo form_input("nomor_so", "", "id='nomor_so' style='width:150px;color:black'"); ?>
    </div>
</div>

<style>
    /* Add custom CSS styles here */

    /* Change text color to black */
    body,
    p,
    span,
    a {
        color: black;
    }

    /* Update specific elements if needed */
    .label_display,
    #nota,
    #tanggal,
    #userid,
    #cust,
    #cust_name,
    #cust_type,
    #payment_terms,
    #qty_total,
    #qty_jenis,
    #salesman,
    #qty_top,
    #barcode_top,
    #nomor_so {
        color: black;
    }

    /* ... */

</style>
