<div id='dlgGopay'  class="easyui-dialog"  closed="true"  buttons="#btnGopay" 
style="width:500px;height:400px;padding:10px 10px;left:200px;top:100px">
    <div class='thumbnailx'>
        <table class='table' width="450px">
        <tr><td><b>Nomor Ref#</b></td><td><?=form_input('credit_card_number',"","id='gopay_no' style='width:200px'")?></td></tr>        
        <tr><td><b>Dibayar Rp.</b></td><td><?=form_input('voucher_amount',"","id='gopay_amount' style='width:200px'")?></td></tr>        
        </table>
    </div>    
</div>
<div id="btnGopay">
    <?=link_button("CANCEL","dlgGopay_Cancel()","cancel");?>
    <?=link_button("SUBMIT","dlgGopay_Ok()","save");?>
</div>


<script language="JavaScript">
    function dlgGopay_Show(){
        $("#dlgGopay").dialog("open").dialog('setTitle','Info Go-Pay');
    }
    function dlgGopay_Cancel(){
        $("#gopay_no").val("");
        $("#dlgGopay").dialog("close");
    }
    function dlgGopay_Ok(){
        var ref=$("#gopay_no").val();
        if(ref==""){
            log_err("Isi nomor ref Go Pay !");
            return false;
        }
        var amount=$("#gopay_amount").val();
        if(amount==""){
        	log_err("Isi nominal  !");return false;
        }
        dlgPaySplit_Gopay_Submit();
        $("#dlgGopay").dialog("close");        
        
    }    
    
</script>