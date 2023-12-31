<div class="thumbnail box-gradient">
	<?php
	    $min_date=$this->session->userdata("min_date","");	
		echo link_button('Save', 'save_this()','save');		
		echo link_button('Print', 'print_receive()','print');		
		if($posted) {
			echo link_button('UnPosting','unpost()','cut');		
		} else {
			echo link_button('Posting', 'posting()','ok');		
		}

		echo "<div style='float:right'>";
	?>
	 
	</div>
</div>
<div class="thumbnail">	
<div class="easyui-tabs">
<div title="Umum" id="pur-tab">
	<form id="frmItem" method='post' >
		<table class='table2' width='100%'>
			<tr>
				<td>Nomor Bukti</td><td>
					<?php echo form_input('shipment_id',$shipment_id,"id=shipment_id"); ?>
				</td>
			</tr>	 
			<tr>
					<td>Tanggal</td><td><?php echo form_input('date_received',$date_received,'id=date_received ,
						class="easyui-datetimebox" required 
						data-options="formatter:format_date,parser:parse_date"
					');?>
					</td>
			</tr>
			<tr>
				<td>Gudang</td>
				<td><?php 
						echo form_input('warehouse_code',$warehouse_code,"id='warehouse_code'");
						echo link_button('',"dlgwarehouse_show()","search");
					?>
				</td>
			</tr>
			<tr>
					<td>WO Number</td><td><?php echo form_input('purchase_order_number',$purchase_order_number,'id=wo_number');?>
						<?=link_button('','dlgwork_order_show()','search');?>						
					</td>
			</tr>
			<tr>
					<td>Catatan</td><td><?php echo form_input('comments',$comments,'id=comments style="width:400px"');?></td>
			</tr>
		</table>
	</form>
<!-- LINEITEMS -->	
	<div id='dgItem' class="box-gradient">
		<?=load_view('manuf/select_wo_items.php')?>
	</div>

<div id='divItem' style='display:<?=$mode=="add"?"":""?>'>
	<table id="dg" class="easyui-datagrid"  width='100%'
		data-options="
			iconCls: 'icon-edit', fitColumns: true, 
			singleSelect: true,
			toolbar: '#tb',
			url: '<?=base_url()?>index.php/manuf/receive_prod/items/<?=$shipment_id?>'
		">
		<thead>
			<tr>
				<th data-options="field:'item_number',width:80">Kode Barang</th>
				<th data-options="field:'description',width:150">Nama Barang</th>
				<th data-options="field:'quantity_received',width:50,align:'right',editor:{type:'numberbox',options:{precision:2}}">Qty</th>
				<th data-options="field:'unit',width:50,align:'left',editor:'text'">Satuan</th>
				<th data-options="field:'cost',width:50,align:'right',editor:{type:'numberbox',options:{precision:2}}">Cost</th>
				<th data-options="field:'total_amount',width:50,align:'right',editor:{type:'numberbox',options:{precision:2}}">Total</th>
				<th data-options="field:'line_number',width:30,align:'right'">Line</th>
			</tr>
		</thead>
	</table>
</div>	
</div>
<!-- JURNAL -->
<div title="Jurnal" id="jur-tab">
	<?php 
		echo load_view("gl/jurnal_view",array("gl_id"=>$shipment_id));
	?>
</div>
</div>

<!-- LINEITEMS -->
</div>
 
<?php 
	echo $workorder_list;
	echo $inventory_list;
	echo $warehouse_list;

?>

 <script language='javascript'>
 	var grid_output="dg";
	var url_save_item = '<?=base_url()?>index.php/manuf/receive_prod/save_item';
	var url_load_item = url_detail();
	var url_del_item  = '<?=base_url()?>index.php/manuf/receive_prod/del_item';

    function url_detail(){
	 	var nomor=$('#shipment_id').val();
    	$('#ref_number').val(nomor);
    	return ('<?=base_url()?>index.php/manuf/receive_prod/items/'+nomor+'/json');
    }
	function print_receive(){
		nomor=$("#shipment_id").val();
		url="<?=base_url()?>index.php/manuf/receive_prod/print_bukti/"+nomor;
		window.open(url,'_blank');
	}
	function save_this(){
        var valid_date=true;
        var min_date='<?=$min_date?>';
        var tanggal=$('#date_received').datetimebox('getValue'); 
        if(tanggal<min_date){
            valid_date=false;
        }
        if(!valid_date){alert("Tanggal tidak benar ! Mungkin sudah closing !");return false;}
		 
	}
	function posting(){
		var no=$('#shipment_id').val();
		if(no=="" || no=="AUTO"){
			log_msg("Pilih nomor !");
			return false;
		}
		var url='<?=base_url()?>index.php/manuf/receive_prod/posting/'+no;
				$.get(url,null,function(result){
					if (result.success){
						window.open(CI_BASE+"index.php/manuf/receive_prod/view/"+no,"_self");
					} else {
						$.messager.show({	// show error message
							title: 'Error',
							msg: result.msg
						});
					}
				},'json');

	}
	function unpost(){
		var no=$('#shipment_id').val();
		if(no=="" || no=="AUTO"){
			log_msg("Pilih nomor !");
			return false;
		}
		var url='<?=base_url()?>index.php/manuf/receive_prod/unposting/'+no;
				$.get(url,null,function(result){
					if (result.success){
						window.open(CI_BASE+"index.php/manuf/receive_prod/view/"+no,"_self");
					} else {
						$.messager.show({	// show error message
							title: 'Error',
							msg: result.msg
						});
					}
				},'json');

	}	    
 </script>
