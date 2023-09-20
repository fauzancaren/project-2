<?php
$list_rekening=$this->bank_accounts_model->select_edc();
?>

<div id='dlgTran'  class="easyui-dialog"  closed="true"  buttons="#btnTran" 
style="width:500px;height:400px;padding:10px 10px;left:200px;top:100px">
    <div class='thumbnailx'>
        <table class='table' width="450px">
        <tr><td>Rekening Penerima *</td><td><?=form_dropdown('dlgTran_rek',$list_rekening,'',"id='dlgTran_rek' style='width:200px'")?></td></tr>
        <tr><td>Jumlah Transfer </td><td><?=form_input('dlgTran_amount',"","id='dlgTran_amount' style='width:200px'")?></td></tr>
        <tr><td>Dari Bank </td><td><?=form_input('dlgTran_bank',"","id='dlgTran_bank' style='width:200px'")?></td></tr>
        <tr><td>Referensi </td><td><?=form_input('dlgTran_ref',"","id='dlgTran_ref' style='width:200px'")?></td></tr>
        <tr><td>Pemilik </td><td><?=form_input('dlgTran_owner',"","id='dlgTran_owner' style='width:200px'")?></td></tr>
        <tr><td colspan=3><i>* Harus diisi</i></td></tr>
        <tr><td><?=form_input("dlgTran_flag1","","id='dlgTran_flag1' disabled style='width:50px'")?></td></tr>
        </table>
    </div>    
</div>
<div id="btnTran">
    <?=link_button("CANCEL","dlgTran_Cancel()","cancel");?>
    <?=link_button("SUBMIT","dlgTran_Submit()","save");?>
</div>
