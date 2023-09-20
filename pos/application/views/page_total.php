<table width='100%'>
    <tr>
        <th>Sub Total</th>
        <th>Disc%</th>
        <th>Disc Rp</td>
    </tr>
    <tr>
        <td><?= form_input('sub_total', 0, "readonly id='sub_total'   class='calc_total'   style='width:200px height:100px' ") ?></td>
        <td><?= form_input('disc_nota_prc', 0, "  $AllowChangeDisc id='disc_nota_prc'  
            class='calc_total'   style='width:200px height:100px'") ?>
            <?=link_button('Change Disc.','ChDiscClick()','edit','false')?>
    
        </td>
        <td><?= form_input('disc_nota_rp', 0, "  $AllowChangeDisc id='disc_nota_rp'   class='calc_total'    style='width:200px height:100px' ") ?></td>
    </tr>
    <tr>
        <th>Ppn %</th>
        <th>PPn Rp</th>
        <th>Pembulatan</th>
        <th>Total</th>
    </tr>
    <tr>    
        <td><?= form_input('ppn_prc', 0, "id='ppn_prc'  class='calc_total' style='width:50px'") ?></td>
        <td><?= form_input('ppn_rp', 0, "id='ppn_rp'   class='calc_total'    style='width:100px' ") ?></td>
        <td><?= form_input('pbulat', 0, "id='pbulat'  class='calc_total'  style='width:100px' ") ?></td>
        <td><?= form_input('total_nota', 0, "readonly id='total_nota'   class='calc_total'   style='width:100px' ") ?></td>
        <td><?= link_button('Calc', 'total_nota()', 'sum', 'false') ?></td>
    </tr>
</table>
<script>
    function ChDiscClick(){
        $("#dlgAskSpv").dialog({modal: true}).dialog("open").dialog('setTitle','Masukan login dan password supervisor.');
    }
</script>