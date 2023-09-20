<?php
echo load_view("aed_button");
?>
<form id="frmPromosi"  method="post">
    <table class='table2' width="100%">
        <tr>
            <td>Kode Promo</td><td><?=form_input('promosi_code',$promosi_code,"id=promosi_code")?></td>
            <td>Nama Promosi</td><td><?=form_input('description',$description,"id='description' style='width:300px'")?></td>
        </tr>
        <tr>
            <td>Tanggal Awal</td>
            <td><?=form_input('date_from',$date_from,'id=date_from 
                class="easyui-datetimebox" required style="width:150px"
                data-options="formatter:format_date,parser:parse_date"')?>
            </td>
            <td>Tanggal Akhir</td>
            <td><?=form_input('date_to',$date_to,'id=date_to 
                class="easyui-datetimebox" required style="width:150px"
                data-options="formatter:format_date,parser:parse_date"')?>
            </td>
        </tr>
        <tr>
            <td>Qty Jual</td><td><?=form_input("qty",$qty,"id='qty' style='width:50px'")?></td>
            <td>Qty Extra</td><td><?=form_input("nilai",$nilai,"id='nilai' style='width:50px'")?>
                <?=form_checkbox("issameitem",$issameitem,($issameitem==0?false:true),"style='width:50px;'")?> Extra adalah barang yg sama
                </br><span style="font-size:small"><i>*apabila ini tidak diceklist isi tabel barang extra bonus dibawah</i></span>
            </td>
        </tr>
		<tr>
			<td>Discount %</td>
			<td colspan=3><?=form_input("disc_prc_1",$disc_prc_1,"id='disc_prc_1'")?>
				<i>*apabila discount diisi tolong qty extra dibuat nol.</p>
			</td>
		</tr>
        <tr>
            <td>

            </td>
            <td>

            </td>
        </tr>
        <tr>
            <td colspan=2><?=form_checkbox("flag2",$flag2,($flag2==0?false:true),"style='width:50px;'")?> Berlaku utk semua pelanggan</td>
            <td colspan=2><?=form_checkbox("flag3",$flag3,($flag3==0?false:true),"style='width:50px;'")?> CASH tidak berlaku</td>
        </tr>
        <tr>
            <td colspan=2><?=form_checkbox("flag1",$flag1,($flag1==0?false:true),"style='width:50px;'")?> Berlaku utk semua barang</td>
        </tr>
    </table>
    <input type='hidden' id='mode' name='mode' value='<?=$mode?>'>

</form>

<?php if($mode=="view"){
    $controller="promosi_disc";
?>
    <div  class="easyui-tabs" style="width:auto;height:auto;min-height: 500px">
    <div title="Items" id="box_section" style="padding:10px">

<?php    include_once "promosi_item_dtl.php"; ?>
    </div>
    <div title="Extra Item" id="box_section" style="padding:10px">
<?php	include_once "promosi_item_extra.php"; ?>
    </div>
    <div title="Pelanggan" id="box_section" style="padding:10px">
<?php     include_once "promosi_cust_dtl.php"; ?>
    </div>
    </div>

<?php
}
?>
<script type="text/javascript">

    var allow_add=<?=$allow_add?>;
    var allow_edit=<?=$allow_edit?>;
    var allow_delete=<?=$allow_delete?>;
    var url;	
	$().ready(function(){
		load_items();	
        load_item_customer();	
        load_extra_items();
	});


    function load_items(){
		var nomor=$("#promosi_code").val();								
		$('#dgItemPromo').datagrid({url:'<?=base_url()?>index.php/so/promosi_disc/items/'+nomor});
		$("#dgItemPromo").datagrid("reload");
	}
    function refresh_aed(){
        display();
    }
	function display(){
		var nomor=$("#promosi_code").val();
		window.open(CI_ROOT+"so/promosi_extra/view/"+nomor,"_self");
	}
    function valid(){
        if($('#promosi_code').val()==''){log_err('Isi kode promosi !');return false;}
        if($('#description').val()==''){log_err('Isi nama promosi !');return false;}
        if($('#nilai').val()==''||$("#nilai").val()=="0"){log_err('Isi Nilai atau pesentase !');return false;}        
		if( ! (allow_add || allow_edit) ) {
			log_msg(ERR_ACCESS_MODULE);
			return false;
		}
        return true;
    }
    function save_aed(){
        
        if(!valid)return false;

		$("#divToolbar").hide();
		
		loading();
		
		url='<?=base_url()?>index.php/so/promosi_extra/save';
        $('#frmPromosi').form('submit',{
            url: url,
            onSubmit: function(){
                return $(this).form('validate');
            },
            success: function(result){
                var result = eval('('+result+')');
                if (result.success){
                    loading_close();
                    $("#divToolbar").show();                    
                    $('#promosi_code').val(result.promosi_code);
                    log_msg('Data sudah tersimpan. Silahkan pilih nama barang2 promosi');
                    display();
                } else {
                    loading_close();
                    log_err(result.msg);
                }
            }
        });

    }

</script>
