 <div class="thumbnail box-gradient">
	<?php
	$min_date=$this->session->userdata("min_date","");
	
	echo link_button('Print', 'print_receive()','print');		
	echo link_button('Delete','delete_receive2()','remove','false');	
    echo link_button('Save', 'simpan()','save');        
    
	if($mode=="view") echo link_button('Refresh','','reload','false',base_url().'index.php/receive_po/view/'.$shipment_id);		
    if($mode=="view") echo link_button('Verify', 'doc_status_verify()','save');       
    
	echo "<div style='float:right'>";
	echo link_button('Help', "load_help('receipt_po')",'help');		
    echo link_button('Close','remove_tab_parent()','cancel');      
    if(!isset($ShowItemCost))$ShowItemCost=false;
	?> 
	</div>
</div>
<div class="thumbnail">	
    <form id='myform' method='post' action='<?=base_url()?>index.php/receive_po/save'>
    
   <table class='table2' width="100%">
       <tr>
           <td>Receipt No:</td><td><strong><?=$shipment_id?></strong>
               <?=form_hidden("shipment_id",$shipment_id)?>                        
           </td>
           <td>Nomor PO:</td><td><strong><a href="#" onclick="view_po('<?=$purchase_order_number?>');return false;"><?=$purchase_order_number?></a></strong></td>
           <td>Receipt By:</td><td><?=$receipt_by?></td>
       </tr>
       <tr>
            <td>Tanggal:</td>
            <td><?=form_input('date_received',
                    $date_received,'id=date_received class="easyui-datetimebox" required
                    data-options="formatter:format_date,parser:parse_date"
                    ');?>
            </td>
            <td>Gudang:</td><td><?php echo form_input('warehouse_code',
                    $warehouse_code,"id='warehouse_code'");?>
               <?=link_button("", "dlgwarehouse_show();return false;","search")?>
            </td>
            
           <td>Surat Jalan#:</td>
           <td><?=form_input('ref1',$ref1,'id=ref1');?></td>
			
       </tr>
       <tr>
            <td>Supplier:</td><td colspan='3'><?=$supplier_info?></td>            
			<td>Doc Status</td><td><?=$doc_status?></td>
       </tr>
       <tr>
            <td>Keterangan</td>
            <td colspan=4><?=form_input('comments',$comments,'id=comments style="width:90%"');?>
            </td>
       </tr>
       <tr>
            <td>Selected by Invoice? <?=$selected?></td>       	
       </tr>

   </table>
   
   </form>
   
<div class="easyui-tabs" style="height:auto;width:100%">
	<div title="Items" style="padding:10px">
	<table id="dgItems" class="easyui-datagrid table"  rownumbers="true" pagination="true"
		data-options="
			toolbar: '#tool-item',
			singleSelect: true,fitColumns: true,
			url: '<?=base_url()?>index.php/receive_po/receive_items/<?=$shipment_id?>'
		">
		<thead>
			<tr>
				<th data-options="field:'item_number',width:80">Item</th>
				<th data-options="field:'description',width:180">Description</th>
				<th data-options="field:'quantity_received',width:80">Qty</th>
				<th data-options="field:'unit',width:50">Unit</th>
                <th data-options="field:'manufacturer',width:80">Merk</th>				
				<th data-options="field:'mu_qty',width:80">M Qty</th>
				<th data-options="field:'multi_unit',width:50">M Unit</th>
				<th data-options="field:'no_urut',width:80">NoUrut</th>
				<th data-options="field:'id',width:50">Id</th>

                <?php if ($ShowItemCost) { ?>
                    <th data-options="<?=col_number('cost',2)?>">Cost</th>
                    <th data-options="<?=col_number('total_amount',2)?>">Total</th>
                    <th data-options="<?=col_number('mu_price',2)?>">M Price</th>
                <?php } ?>
			</tr>
		</thead>
	</table>
	</div>
	<div title="Biaya" style="padding:10px">
		<p>Total Expenses: 0</p>
		<?php include_once("receive_expenses.php"); ?>
	
	</div>
</div>		

<?=$lookup_gudang?>
<div id='tool-item'>
<?=link_button("Delete", "dgItems_Delete();return false;","remove")?>
<?=link_button("Edit", "dgItems_Edit();return false;","edit")?>
<?=link_button("Reload", "dgItems_Refresh();return false;","reload")?>
</div>
<div id='dgItem_Form'class="easyui-dialog" style="width:480px;height:380px;
    padding:10px 20px;left:100px;top:100px" title="Ubah baris item"
     closed="true" buttons="#button-save-item">
     <div class='alert alert-info'>
         Silahkan anda ubah atau edit jumlah quantity yang diterima sebenarnya 
         kemudian klik tombol submit dibawah ini.
     </div>
    </br>Kode Barang:
    </br><input id="dgItem_Form_item_number" style="width:90%" readonly/>
    </br>Nama Barang:
    </br> <input id="dgItem_Form_description" style="width:90%" readonly/>
    </br>Quantity Diterima:
    </br> <input id="dgItem_Form_quantity_received" style="width:90%" />     
</div>
<div id="button-save-item">
    <?=link_button("Submit", "dgItems_Save();return false;","save")?>
</div>
<script language='javascript'>
    var _url=CI_ROOT+"receive_po";
    var _id=0;
    var _nomor="<?=$shipment_id?>";

    function dgItems_Save(){
        if(_id==0){
            alert("Belum pilih baris !");return false;
        }
        param={"item_number":$("#dgItem_Form_item_number").val(),
            "quantity_received":$("#dgItem_Form_quantity_received").val(),
            "mu_qty":$("#dgItem_Form_quantity_received").val(),
            "id":_id,"shipment_id":_nomor
        };
        loading(); 

        $.ajax({
            type: "POST",
            url: _url+'/save_item',
            data: param,
            success: function(result){
                var result = eval('('+result+')');
                if(result.success){
                    $.messager.show({
                        title:'Success',msg:result.msg
                    }); 
                    $("#dgItem_Form").dialog("close");
                    dgItems_Refresh();
                } else {
                    $.messager.show({
                        title:'Error',msg:result.msg
                    });                         
                };
            },
            error: function(msg){alert(msg);}
        });              
    }
    function dgItems_Edit(){
        var row = $('#dgItems').datagrid('getSelected');
		if (!row) {
            alert("Pilih baris !");return false;
        }
        _id=row.id;
        var nomor='<?=$shipment_id?>';
        $('#dgItem_Form_item_number').val(row.item_number);
        $('#dgItem_Form_description').val(row.description);
        $('#dgItem_Form_quantity_received').val(row.quantity_received);
        $("#dgItem_Form").dialog("open");
    }
    function dgItems_Refresh(){
		url=CI_ROOT+"receive_po/receive_items/<?=$shipment_id?>";
		$('#dgItems').datagrid({url:url});
		$("#dgItems").datagrid("reload");
	
    }
    function dgItems_Delete(){
        var nomor="<?=$shipment_id?>";
        var id=0;
        var row = $('#dgItems').datagrid('getSelected');
		if (row)id=row.id;
        if(id==0 || nomor==""){
            alert("Pilih baris dulu !");
            return false;
        }

        $.messager.confirm('Confirm','Are you sure you want to remove this line?',
            function(r){
                if (r){
                    $.ajax({
                            type: "GET",
                            url: _url+'/del_item/'+id+'/'+nomor+'/true',
                            data: "",
                            success: function(result){
                                var result = eval('('+result+')');
                                if(result.success){
                                    $.messager.show({
                                        title:'Success',msg:result.msg
                                    }); 
                                    dgItems_Refresh();
                                } else {
                                    $.messager.show({
                                        title:'Error',msg:result.msg
                                    });                         
                                };
                            },
                            error: function(msg){alert(msg);}
                    });                                 
                }
            })
    }
    function simpan(){
        var valid_date=true;
        var min_date='<?=$min_date?>';
        var tanggal=$('#date_received').datetimebox('getValue'); 
        if(tanggal<min_date){
            valid_date=false;
        }
        //if(!valid_date){alert("Tanggal tidak benar ! Mungkin sudah closing !");return false;}
        
        if($('#shipment_id').val()==''){alert('Isi dulu nomor bukti !');return false;}
        if($('#warehouse_code').val()==''){alert('Pilih kode gudang !');return false;}
        loading();
        $('#myform').submit();
    }


	function view_po(nomor){
		var url="<?=base_url()?>index.php/purchase_order/view/<?=$purchase_order_number?>";
		add_tab_parent("view_po_<?=$purchase_order_number?>",url);
	}
	function print_receive(){
		url="<?=base_url()?>index.php/receive_po/print_bukti/<?=$shipment_id?>";
		window.open(url,'_blank');
	}
	function delete_receive2()
	{
        var nomor="<?=$shipment_id?>";
        $.messager.confirm('Confirm','Are you sure you want to remove this ?'+nomor,
            function(r){
                if(r){
                    loading(); 
                    $.ajax({
                        type: "GET",
                        url: CI_ROOT+"receive_po/delete/"+nomor,
                        data: "",
                        success: function(result){
                            var result = eval('('+result+')');
                            if(result.success){
                                $.messager.show({
                                    title:'Success',msg:result.msg
                                });	
                                remove_tab_parent();
                            } else {
                                $.messager.show({
                                    title:'Error',msg:result.msg
                                });							
                            };
                        },
                        error: function(msg){alert(msg);}
                    }); 		            	
                }
            });
		
	}
	function doc_status_verify(){
            $.ajax({
                    type: "GET",
                    url: "<?=base_url()?>/index.php/receive_po/status/<?=$shipment_id?>/VERIFIED",
                    data: "",
                    success: function(result){
                        var result = eval('('+result+')');
                        if(result.success){
                            $.messager.show({
                                title:'Success',msg:result.msg
                            }); 
                            window.open("<?=base_url('receive_po/view/'.$shipment_id)?>","_self");
                        } else {
                            $.messager.show({
                                title:'Error',msg:result.msg
                            });                         
                        };
                        log_msg(result.msg);
                    },
                    error: function(msg){alert(msg);}
            });                 
	    
	}
		
</script>		
