<?php 
$header1=getvar("header1","Header 1");
$header2=getvar("header2","Header 2");
$header3=getvar("header3","Header 3");
$footer1=getvar("footer1","Footer 1");
$footer2=getvar("footer2","Footer 2");
$footer3=getvar("footer3","Footer 3");
?>

<div id='dlgSet' class="easyui-dialog" style="width:600px;height:450px;
    padding:10px 20px;left:100px;top:20px" closed="true" 
    buttons="#btnDlgSet" modal='true'>
    <form action="" method="post" id="frmSet" name="frmSet">
        
    <table width='100%' class='table'>
    <tr>
        <td><strong>Header 1</strong></td>
        <td>
            <input type='text' name='header1' id='header1' value='<?=$header1?>' style="width:98%">
        </td>
    </tr>
    <tr>
        <td><strong>Header 2</strong></td>
        <td>
            <input type='text' name='header2' id='header2' value='<?=$header2?>' style="width:98%">
        </td>
    </tr>
    <tr>
        <td><strong>Header 3</strong></td>
        <td>
            <input type='text' name='header3' id='header3' value='<?=$header3?>' style="width:98%">
        </td>
    </tr>
    <tr>
        <td><strong>Footer 1</strong></td>
        <td>
            <input type='text' name='footer1' id='footer1' value='<?=$footer1?>' style="width:98%">
        </td>
    </tr>
    <tr>
        <td><strong>Footer 2</strong></td>
        <td>
            <input type='text' name='footer2' id='footer2' value='<?=$footer2?>' style="width:98%">
        </td>
    </tr>
    <tr>
        <td><strong>Footer 3</strong></td>
        <td>
            <input type='text' name='footer3' id='footer3' value='<?=$footer3?>' style="width:98%">
        </td>
    </tr>
    <tr><td><strong>Gudang Aktif </strong></td>
       <td><input  type='text' name='txtGudang' id='txtGudang' 
       value="<?=$default_warehouse?>">
       </br><i>*setting gudang user ada di menu->setting->user->warehose</i>
       </td>
    </tr>
    <tr>
        <td><strong>Ukuran Kertas Nota</strong></td>
        <td>
            <input type='text' name='ukuran_nota' id='ukuran_nota' value='<?=$ukuran_nota?>'>
            </br><i>*Ukuran nota: 0 - Kecil, 1 - Besar</i>
        </td>
    </tr>
    <tr>
        <td><strong>Ubah Tanggal</strong></td>
        <td>
        <input type='text' name='set_tanggal' id='set_tanggal' 
            value='<?=$tanggal?>' 
            class="easyui-datetimebox" 
                required style="width:250px"
                data-options="formatter:format_date,parser:parse_date">
        </br><i>*Ubah tanggal aktif untuk sistim kasir. Berlaku untuk session komputer ini untuk sehari.</i>        
        </td>
    </tr>
    <tr>
        <td><strong>Pembulatan</strong></td>
        <td><input name='pembulatan' value='<?=$pembulatan?>' type='text' id='pembulatan'></td>
    </tr>
    <tr>
        <td><strong>Bolehkan Kasir Ubah Harga</strong></td>
        <td><input name='AllowChangePrice' value='<?=$lAllowChangePrice?>' type='text' id='AllowChangePrice'></td>
    </tr>
    <tr>
        <td><strong>Bolehkan Kasir Ubah Discount</strong></td>
        <td><input name='AllowChangeDiscItem' value='<?=$lAllowChangeDiscItem?>' type='text' id='AllowChangeDiscItem'></td>
    </tr>
    <tr>
        <td><strong>Gabung Qty Item Sama</strong></td>
        <td><input name='IsGabungItem' value='<?=$is_gabung_item?>' type='text' id='IsGabungItem'></td>
    </tr>
    <tr>
        <td><strong>Tidak perlu click AddItem</strong></td>
        <td><input name='IsAutoAddRow' value='<?=$IsAutoAddRow?>' type='text' id='IsAutoAddRow'></td>
    </tr>
    
    </table>

    </form>
    
</div>
<div id="btnDlgSet">
    <?=link_button("Simpan","save_setting()","save","false");?>
</div>
<script language="JavaScript">
    function dlgSetting_Show(){
        if(user_id.toLowerCase()=="admin"){
            $("#dlgSet").dialog("open").dialog('setTitle','Setting');       
        } else {
            alert("Hanya user admin yg bisa ubah seting !");
        }
        
    }
    function save_setting(){
        var _url_save_setting="<?=base_url('index.php/sessionset/save_setting')?>";
        $('#frmSet').form('submit',{
            url: _url_save_setting,
            onSubmit: function(){
                return $(this).form('validate');
            },
            success: function(result){
                var result = eval('('+result+')');
                if (result.success){
                    window.open("<?=base_url('index.php')?>","_self");                                 
                } else {
                    $.messager.show({
                        title: 'Error',
                        msg: result.msg
                    });
                }
            }
        });
    }

</script>