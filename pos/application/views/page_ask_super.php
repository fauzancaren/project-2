
<div id='dlgAskSpv'  class="easyui-dialog"  closed="true"  buttons="#btnAskSpv" 
style="width:500px;height:400px;padding:10px 10px;">
</br><label>Sebelum melanjutkan silahkan isi userid dan password supervisor
    and dibawah ini:
    </br>Kemudian klik tombol [submit]
</label>
</br><h4>Isi UserId / Supervisor :</h4> 
<?=form_input("dlgAskSpv_User","","id='dlgAskSpv_User' style='width:150px;'")?>
</br></br><h4>Isi Password: </h4>
<?=form_password("dlgAskSpv_Pass","","id='dlgAskSpv_Pass' style='width:150px;'")?>

</div>
<div id="btnAskSpv">
    <?=link_button("CANCEL","dlgAskSpv_Cancel()","cancel");?>
    <?=link_button("SUBMIT","dlgAskSpv_Ok()","save");?>
</div>
<script>
    function dlgAskSpv_Cancel(){
        $("#dlgAskSpv").dialog("close");
    }
    function dlgAskSpv_Ok(){
        var uid=$("#dlgAskSpv_User").val();
        var pwd=$("#dlgAskSpv_Pass").val();
        if(uid=="" || pwd==""){
            alert("Isi userid dan password !");
            return false;
        }
        var param={'uid':uid,'pwd':pwd};
        loading();
        $.ajax({type: "POST",url: CI_ROOT+"/user/accepted",data: param,
			success: function(result){
				loading_close();
				var result = eval('('+result+')');
				if(result.success){					 
					log_err(result.message);
                    $("#dlgAskSpv").dialog("close"); 		
                    lock_input()
                    
				} else {
                    alert(result.message);
                }
			},
			error: function(result){
				loading_close();
				log_err(result);
				return false;
			}			
		}); 		
        
    }
</script>