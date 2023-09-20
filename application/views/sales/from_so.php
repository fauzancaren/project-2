<legend>DAFTAR SALES ORDER</legend>
<div id='divMsg' class='alert alert-warning'></div>
<div class="alert alert-info">
	Silahkan pilih kriteria tanggal dibawah ini kemudian klik tombol REFRESH.
	Dan pilih nomor-nomor SO yang akan dibuatkan FAKTUR INVOICE dan tekan 
	tombol PROSES setelah memilih nomor-nomor SO.
	<?php
	$date_from=date("Y-m-1");
	$date_to=date("Y-m-d 23:59:59"); 
	echo "<table class='table2'><tr><td><b>Dari Tanggal</b></td>
		<td><b>Sampai Tanggal</b></td> 
		</tr>";
	echo "<tr><td>".form_input('txtDateFrom',$date_from,'id="txtDateFrom" 
			 class="easyui-datetimebox" required style="width:140px"
			data-options="formatter:format_date,parser:parse_date" 
			')."</td>";
	echo "  <td>";
	echo form_input('txtDateTo',$date_to,'id="txtDateTo" 
			 class="easyui-datetimebox" required style="width:140px"
			data-options="formatter:format_date,parser:parse_date"');
	echo "</td>";
	echo "<td>".link_button(" REFRESH ", "load_data();return false","reload")
		.link_button(" PROSES ", "proses();return false","save") 
		.link_button(" CLOSE ", "close_me();return false","cancel")		
		."</td>
	</tr></table>";

	?>
	<form id='frmMain' name='frmMain' method='POST'>
		<table id="dgMain" class="easyui-datagrid table"  data-options="
				iconCls: 'icon-save',fitColumns: true,
				singleSelect: false, toolbar: '#tbMain',
				url: ''
			">
			<thead>
				<tr>
					<th field="ck" checkbox="true"></th>
					<th data-options="field:'sales_order_number',width:80">Nomor SO#</th>
					<th data-options="field:'sales_date',width:80">Tanggal</th>
					<th data-options="field:'sold_to_customer',width:180">Customer</th>
					<th data-options="field:'payment_terms',width:50">Termin</th>
					<?=col_number2("amount","Amount")?>
					<th data-options="field:'comments',width:150">Keterangan</th>
				</tr>
			</thead>
		</table>
		
	</form>
</div>

<script language="JavaScript">
	function load_data(){
		var d1=$("#txtDateFrom").datetimebox("getValue");
		var d2=$("#txtDateTo").datetimebox("getValue");
		var q=$("#jenis").val();
		var unposted=$("#txtUnposted:checked").val();
		if(unposted!=1)unposted=0;
		var _url=CI_ROOT+"so/invoice/load_so?d1="+d1+"&d2="+d2;
		$('#dgMain').datagrid({url: _url});
		$("#divMsg").fadeOut('slow');
		$('#divMsg').html('<br>Loading...');
	}
	function proses(){
		xurl=CI_ROOT+'so/invoice/create_invoice_from_so';                        
		var ids = [];
		var rows = $('#dgMain').datagrid('getSelections');
 		if(rows){
 			//console.log(rows);
 			loading();
			$("#divMsg").fadeIn('slow');
			for(var i=0; i<rows.length; i++){
	 			var _data={'row':rows[i]};
				$.ajax({
					type: "POST",	url: xurl, data: _data,
					success: function(result){
					try {
							loading_close();
							var result = eval('('+result+')');
							if(result.success){
								$("#divMsg").append(result.message);
							} else {
							    $("#divMsg").append(result.message);
							};
						} catch (exception) {		
	                            $("#divMsg").append(result.message);
						}
					},
					error: function(msg){$("#divMsg").append("Error baris ini !");}
				});         
	 						    
			    
			}
 		}
 		
 	}
 	
 		 
	function close_me(){
		remove_tab_parent();		
	}
</script>