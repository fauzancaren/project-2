<p><strong>Data Pembayaran</strong></p>
<table width='100%'>
    <tr>
        <th>Cash</th>
        <th>Kartu Kredit/Debit</th>
        <th>Voucher</th>
        <th>Jumlah</th>
        <th>Kembalian</th>
    </tr>
    <tr>
        <td><?=form_input('pay_cash', 0, "id='pay_cash'   class='calc_total' style='width:100px' ") ?></td>
        <td><?=form_input('pay_card', 0, "id='pay_card'   class='calc_total'  style='width:100px' ") ?>
            <?=link_button('', 'card_info()', 'search') ?>
        </td>
        <td><?=form_input('pay_voucher', 0, "id='pay_voucher'   class='calc_total'  style='width:100px' ") ?>
            <?=link_button('', 'voucher_info()', 'search') ?>
        </td>
        <td><?=form_input('pay_total', 0, "id='pay_total'   class='calc_total'  style='width:100px' ") ?></td>
        <td><?=form_input('kembali', 0, "id='kembali'   class='calc_total'  style='width:100px' ") ?></td>
        <td><?=link_button('Submit', 'pay_nota_bawah()', 'save', 'false') ?></td>
    </tr>
</table>
