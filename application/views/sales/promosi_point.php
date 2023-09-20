<div class="thumbnail box-gradient">
	<?php
		echo link_button("Save","simpan()","save");
		echo link_button('Print', 'cetak()','print');
		echo link_button('Add','','add','false',base_url().'index.php/so/promosi_point/add');		
		echo link_button('Delete','delete()','cut');		
		echo link_button('Search','','search','false',base_url().'index.php/so/promosi_point');		
		echo link_button('Refresh','','reload','false',base_url().'index.php/so/promosi_point/view/'.$promosi_code);		
		echo "<div style='float:right'>";
		echo link_button('Help', 'load_help(\'promosi_point\')','help');		
				
	?>	
	<a href="#" class="easyui-splitbutton" data-options="plain:false,menu:'#mmOptions',iconCls:'icon-tip'">Options</a>
	<div id="mmOptions" style="width:200px;">
		<div onclick="load_help('promosi_point')">Help</div>
		<div>Update</div>
		<div>MaxOn Forum</div>
		<div>About</div>
	</div>
	</div>
</div>
<div class='col-lg-12'>
	<form id="frmMain"  method="post">
	<input type='hidden' name='mode' id='mode'	value='<?=$mode?>'>
	<table class='table'>
	<tr><td>Kode Promosi</td><td><?=form_input("promosi_code",$promosi_code,"id='promosi_code'")?></td>
		<td>Nama Promosi</td><td><?=form_input("description",$description,"id='description' style='width:300px'")?></td></tr>
	<tr><td>Dari Tanggal</td><td><?=form_input_date("date_from",$date_from,"id='date_from' style='width:180px'")?></td>
		<td>Sampai Tanggal</td><td><?=form_input_date("date_to",$date_to,"id='date_to' style='width:180px'")?></td></tr>
	<tr><td>Minimum Belanja</td><td><?=form_input("total_sales",$total_sales,"id='total_sales'")?></td>
		<td>Point Reward</td><td><?=form_input("qty",$qty,"id='qty'")?></td></tr>
	</table>
	</form>
</div>	

<?php
	if($mode=="view"){
		$controller="promosi_point";
		include_once "promosi_item_dtl.php";
		include_once "promosi_cust_dtl.php";
	}
		
?>		 

<script type="text/javascript">
	$().ready(function(){
		load_items();	
        load_item_customer();	
	});


$(document).ready(function() {
	$("#tblItem .deleteLink").on("click",function() {
		var kode=$(this).attr("value");
		var url="<?=base_url()?>index.php/so/promosi_point/delete_item/"+kode;
		var tr = $(this).closest("tr");
		$.ajax({
			type: "GET", url: url,
			success: function(msg){
				tr.css("background-color","#FF3700");
				tr.fadeOut(400, function(){
					tr.remove();
				});
				console.log(msg);
			},
			error: function(msg){console.log(msg);}
		}); 				
		return false;
	});
	$("#tblItem .editLink").on("click",function() {
		var kode=$(this).attr("value");
		$.ajax({
			type: "GET", url: "<?=base_url()?>index.php/so/promosi_point/view_item/"+kode,
			success: function(result){
				var result = eval('('+result+')');
				if (result.success){
					$('#promosi_code_id').val(result.id);
					$("#item_number").val(result.item_number);
					$("#description").val(result.description);
					$("#dgItem").dialog("open");					
				} else {
					log_err(result.msg);
				}
			},
			error: function(msg){console.log(msg);}
		}); 				
	});
	
});


    function simpan(){	
        if($('#promosi_code').val()==''){alert('Isi kode promosi !');return false;}
        if($('#description').val()==''){alert('Isi nama promosi !');return false;}
		url='<?=base_url()?>index.php/so/promosi_point/save';
		$('#frmMain').form('submit',{
			url: url,
			onSubmit: function(){
				return $(this).form('validate');
			},
			success: function(result){
				var result = eval('('+result+')');
				if (result.success){
					var promosi_code=$('#promosi_code').val();
					$('#promosi_code').val(result.promosi_code);
					$('#mode').val('view');
					log_msg('Data sudah tersimpan. Silahkan pilih nama barang');
				} else {
					log_err(result.msg);
				}
			}
		});
    } 
	function close_item(){
		clear_input();
		$("#dgItem").dialog("close");	
	}
	function clear_input(){
		$('#item_number').val('');
		$('#category').val('');
		$('#sub_category').val('');
		$('#supplier_number').val('');
		$('#manufacturer').val('');	
		$('#model').val('');	
	}
	function add_item(){
		$('#dgItem').dialog("open").dialog('setTitle','Pilih Filter Barang');
	} 
	function save_item(){
		var mode=$('#mode').val();
		if(mode=="add"){
			alert("Simpan dulu sebelum tambah item barang !");
			return false;
		}
		url = '<?=base_url()?>index.php/so/promosi_point/save_item';
		$('#promosi_code').val($('#promosi_code').val());
					 
		$('#frmItem').form('submit',{
			url: url,
			onSubmit: function(){
				return $(this).form('validate');
			},
			success: function(result){
				var result = eval('('+result+')');
				if (result.success){
					$("#dgItem").dialog("close");
					$.messager.show({
						title: 'Success',
						msg: 'Success'
					});
					
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
