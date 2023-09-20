<div class="thumbnail box-gradient">
	<?php
	$themes=getvar('themes');	
	echo link_button(lang('save'), 'save();return false;','save');		
	echo link_button(lang('print'), 'print_item();return false;','print');		
	if($mode=="view") {
		echo link_button('Delete', 'delete_item();return false;','remove');	
		echo link_button(lang('refresh'),'','reload','false',base_url().'index.php/inventory/view/'.$item_number);		
	}
//	echo link_button('Saldo', 'add_tab_parent(\'saldo_stock\',\''.base_url('index.php/inventory/saldo_stock').'\');','lock');		
	echo link_button('Barcode', 'print_barcode();return false;','print');		
//	echo link_button('Akun', "view_akun();",'form');		
	echo "<div style='float:right'>";
	echo link_button(lang('help'), 'load_help(\'inventory\');return false;','help');	
	?>
	 
    <?=link_button('Close','remove_tab_parent()','cancel');?>      	
	</div>
</div>
		


<div class="thumbnailx">	
	<form id="frmBarang"  method="post">
		<input type='hidden' name='mode' id='mode'	value='<?=$mode?>'>

	     <div class='boxx6'>
	       <div id='box_section' class='section_show'>
		    <table class='table2' width='100%'>     
			<tr><td>Item Number</td><td>:</td>
	        <td colspan='5'>  
	            <?php
	            if($mode=='add'){
	                $item_number="AUTO";                    
                    $readonly="";
	            } else {
	                $readonly="readonly"; 
	            }		
	            echo form_input('item_number',$item_number,"id='item_number' $readonly 
				onkeyup='onchange_item();return false'");
                echo " Category : ";
				echo form_input('category',$category," id='category' style='width:80px'");
				$extra="";if($themes=="admin")$extra ="data-target='#dlginventory_categories' data-toggle='modal' ";
                echo link_button('','dlginventory_categories_show()','search','false','','','','',$extra);
                echo link_button('Add','add_category();return false;','add','false','','','','btn-sb btn-success-sb'); 

				echo " Sub : ";
				echo form_input('sub_category',$sub_category," id='sub_category' style='width:80px'");
				$extra="";if($themes=="admin")$extra ="data-target='#dlginventory_sub_categories' data-toggle='modal' ";				
                echo link_button('','dlginventory_sub_categories_ex_show()','search','false','','','','',$extra);
                
                ?>        
	            
	       </td>       
	       </tr>
	       <tr><td>Description</td>
	       <td>:</td>
	       <td colspan=4><?php echo form_input('description',$description,
					'style="width:500px"');?></td>
	      </tr>
	     <tr>
	       <td>Supplier</td>
	       <td>:</td>
	       <td colspan=5><?
			echo form_input('supplier_number',$supplier_number," id='supplier_number' style='width:20%'");
			$extra="";if($themes=="admin")$extra ="data-target='#dlgsuppliers' data-toggle='modal' ";
			echo link_button('Pilih','dlgsuppliers_show()','search','false','','','','',$extra);
			echo " ".form_input('supplier_name',$supplier_name," id='supplier_name' disabled style='width:200px'");
			echo link_button(lang('add'),'add_supplier();return false;','add','false','','','','btn-sb btn-success-sb');			
		   ?> </td>
	      </tr>
		  <tr>
	       <td>Active </td><td>:</td>
		   <td> 
		   		<?=form_radio('active',1,$active=='1'?TRUE:FALSE,"style='width:25px'");?>&nbsp&nbsp Yes 
			 	<?=form_radio('active',0,$active=='0'?TRUE:FALSE,"style='width:25px'");?>&nbsp&nbsp No 
			</td>
			<td>Divisi</td>
			<td>:</td>
			<td>
				<?php 
					echo form_input('division',$division,"id='division' style='width:50px'");
					echo link_button('Pilih','dlgdivisions_show()','search');

					echo " Sistim : ".form_input('type_of_invoice',$type_of_invoice,"id='type_of_invoice' style='width:50px'");
					$extra="";if($themes=="admin")$extra ="data-target='#dlgtype_of_invoice' data-toggle='modal' ";				
					echo link_button('','dlgtype_of_invoice_show()',"search",'false','','','','',$extra);
                
				?>
			</td>
		  </tr>
		  <tr>
			<td colspan=6>
				<?php
				echo " Class : ".form_input('class',$class,"id='class'");      
				$extra="";if($themes=="admin")$extra ="data-target='#dlgcolour' data-toggle='modal' ";
				echo link_button('','dlginventory_class_show()','search','false','','','','',$extra);
				echo link_button(lang('add'),'add_class();return false;','add','false','','','','btn-sb btn-success-sb');			
				
				echo " Colour : ";
				echo form_input("colour",$colour,"id='colour' style='width:50px'");
				$extra="";if($themes=="admin")$extra ="data-target='#dlgcolour' data-toggle='modal' ";
				echo link_button('','dlgcolour_show()','search','false','','','','',$extra);
				//echo link_button(lang('add'),'add_colour();return false;','add','false','','','','btn-sb btn-success-sb');			

				echo " Size: ";            
				echo form_input("size",$size,"id='size'  style='width:50px'");
				$extra="";if($themes=="admin")$extra ="data-target='#dlgsize' data-toggle='modal' ";
				echo link_button('','dlgsize_show()','search','false','','','','',$extra);
				//echo link_button(lang('add'),'add_size();return false;','add','false','','','','btn-sb btn-success-sb');			
				
				?>         
			</td>
		  </tr>
	</table>	
			<div>
			<div id="main-tab"  class="easyui-tabs" style="width:auto;height:auto;min-height: 500px">
				<div title="Umum" id="box_section" style="padding:10px">
					<!-- GENERAL INFO -->
					<?php include "inventory_general.php"; ?>
				</div>
				<div title="Active Promo" style="padding:5px">
					<!-- PROMOTION -->
					<?php include "inventory_promo.php"; ?>	
				</div>
				<div title="Akuntansi" id='box_section' style="padding:10px;" class='section_hide'>
					<!-- LINK ACCOUNT-->
					<?php include "inventory_akun.php"; ?>			  
			   </div>
				<div  title="Lain-lain"  id='box_section' style="padding:10px;" class='section_hide'>
					<!-- OTHER -->
					<?php include "inventory_other.php"; ?>
				</div>
				<div title="Qty Tiap Gudang" style="padding:10px">
					<!-- QUANTITY GUDANG-->				
					<?php include "inventory_gudang.php"; ?>
				</div>
				<div title="Cards" style="padding:10px">
					<!-- CARDS -->				
					<?php include "inventory_card.php"; ?>					
				</div>
				<div title='Satuan'>
					<!-- MULTI UNIT -->
					<?php include "inventory_unit.php"; ?>
				</div>
				<div title='Price by Customer'>
					<!-- SUPPLIER -->
					<?php include "inventory_price_customers.php"; ?>
				</div>
				<div title='Price by Quantity'>
					<!-- SUPPLIER -->
					<?php include "inventory_qty_step.php"; ?>
				</div>

				<div title='Assembly'>
					<!-- ASSEMBLY -->
					<?php include "inventory_assembly.php"; ?>
				</div>
				<div title='Suppliers'>
					<!-- SUPPLIER -->
					<?php include "inventory_supplier.php"; ?>
				</div>
			</div>
		</div>  
	</form>
</div>	

<?php 
echo $lookup_class;
echo $lookup_po_type;
echo $lookup_colour;
echo $lookup_size;
echo $lookup_division;
echo $lookup_category;
echo $lookup_sub_category;
echo load_view("inventory/calc_sales_price");
echo $lookup_suppliers;
include_once "inventory_barcode.php";
include_once "inventory_picture.php"; 
include_once "inventory_excel.php";
?>

<script language='javascript'>
	var url="";	
	var _item_number=$("#item_number").val();
	var _themes='<?=getvar('themes')?>';

	$(document).ready(function(){
		if(_themes!="admin"){
		  $('#main-tab').tabs({
			border:true,
			onSelect:function(title){
				if(title=="Active Promo"){
					load_promo();
				}
				if(title=="Qty Tiap Gudang"){
					load_qty_gudang();
				}
				if(title=="Price by Customer"){
					load_price_customer();
				}
				if(title=="Price by Quantity"){
					load_price_quantity();
				}
				if(title=="Assembly"){
					load_assembly();
				}
				if(title=="Satuan"){
					load_unit_price();
				}
				if(title=="Suppliers"){
					load_supplier();
				}
			}
		  }); 
		}
	});
	function view_akun(){
		var item_number=$("#item_number").val();
		if(item_number=="" || item_number=="AUTO"){
			log_msg("Kode barang belum diisi !");
			return;
		}
		load_form('inventory/inventory_akun',{'item_number':item_number});
	}
	function load_form(file_php,param){
		var divOutput=$("div").closest("div");
		var id=$("#item_number").val();
		var vUrl="<?=base_url()?>index.php/LoadView/show?f="+file_php;
		var s="";
		var dlgId="dlg"+file_php;
		dlgId = dlgId.replace("/","");
		var width="80%";
		var height="70%"
		var title="Dialog";
		if($("#"+dlgId).html()){
			eval(""+dlgId+"_show();");
			return;
		}
		loading();
		$.ajax({
			url: vUrl, data: param,
			success: function(result){
				s = "<!-- DIALOG: "+dlgId+" -->";
				s = s + "\r <div id='"+dlgId+"' class='modal fade' role='dialog' >";
	   			s = s + "\r <div class='modal-dialog' role='document' ";
				s = s + "\r      style='width:"+width+";height:"+height+";'>";
				s = s + "\r 	<div class='modal-content' >";
				s = s + "\r   		<div class='modal-header'>";
				s = s + "\r      		<h3 class='modal-title' id='"+dlgId+"Label'>"+title+"</h3>";
				s = s + "\r   		</div>";
				s = s + "\r   		<div class='modal-body' style='overflow:scroll;height:80%'>";  
				s = s + "\r " +			result;
				s = s + "\r    		</div>"; //modal-body 
				s = s + "\r      	<div class='modal-footer'>";
				s = s + "\r       		<button type='button' class='btn-sb btn-success-sb' data-dismiss='modal'> Submit </button>";
				s = s + "\r       		<button type='button' class='btn-sb btn-danger-sb' data-dismiss='modal'> Close </button>";
				s = s + "\r   	 	</div>";
				s = s + "\r 	</div>"; //modal-content
				s = s + "\r </div>"; //modal-dialog
				s = s + "\r </div>"; //modal 
				s = s + "\r <script>";
				s = s + "\r $().ready(function(){";
				s = s + "\r 	"+dlgId+"_show();";
				s = s + "\r });";
				s = s + "\r function "+dlgId+"_show(){";
				s = s + "\r 	$('#"+dlgId+"').modal('toggle')";
				s = s + "\r };";
				s = s + "\r <\/script>";
				$("body").append(s);
				loading_close();
			},
			error: function(xhr, ajaxOptions, thrownError) {
				log_err(xhr.responseText);
				loading_close();
			}
		})
	}
	function load_supplier(){
		var vUrl=CI_ROOT+"inventory/supplier_list/"+_item_number;
		$('#dgSupp').datagrid({url:vUrl});
	}
	function load_unit_price(){
		var vUrl=CI_ROOT+"inventory/unit_price_list/"+_item_number;
		$('#dgUnitPrice').datagrid({url:vUrl});
	}
	function load_qty_gudang(){
		var vUrl=CI_ROOT+"inventory/qty_gudang2/"+_item_number;
		$('#dgGudang').datagrid({url:vUrl});
	}
	function load_promo(){
		var vUrl=CI_ROOT+"inventory/promo/"+_item_number;
		$('#dgPromo').datagrid({url:vUrl});
	}
	function load_assembly(){
		var vUrl=CI_ROOT+"inventory/assembly_list/"+_item_number;
		$('#dgAsm').datagrid({url:vUrl});
	}
	function load_price_customer(){
		var vUrl=CI_ROOT+"inventory_price_customers/browse_data/?item_no="+_item_number;
		$('#dgPriceCust').datagrid({url:vUrl});
	}
	function load_price_quantity(){
		var vUrl=CI_ROOT+"inventory_qty_step/browse_data/?item_no="+_item_number;
		$('#dgPriceQty').datagrid({url:vUrl});
	}
	function dlginventory_sub_categories_ex_show() {
		cat=$("#category").val();
		if(cat==""){
			alert("Pilih kategori terlebih dahulu !");return false;
		}
		$('#dlginventory_sub_categories').dialog('open').dialog('setTitle','Daftar Pilihan');
		search_id=$('#dlginventory_sub_categories_search_id').val();
		$('#dginventory_sub_categories').datagrid({url:'<?=base_url()?>index.php/lookup/query/inventory_sub_categories/'+search_id+'?parent_id='+cat});
		$('#dginventory_sub_categories').datagrid('reload');
	}
 function save(){
 if($('#item_number').val()==''){log_err('Isi kode barang !');return false;}
 if($('#frmBarang input[name=description]').val()==''){log_err('Isi nama barang !');return false;}
 if($('#frmBarang input[name=description]').val()=="SOLID 0100013 BDN DL SLIDING LC 202 DS-40 SN"){log_err('Nama Barang Sudah Ada !');return false;}
 if($('#frmBarang input[name=description]').val()=="SOLID 0100032 BDN AL-SWING LC 516 AL-30MM US32D"){log_err('Nama Barang Sudah Ada !');return false;}
 if($('#frmBarang input[name=description]').val()=="SOLID 0100037 BDN AL-PELOR LC 517 AL-30MM US32D"){log_err('Nama Barang Sudah Ada !');return false;}
 if($('#frmBarang input[name=description]').val()=="SOLID 0100051 BDN SWING LC 111 WL-40 US32D"){log_err('Nama Barang Sudah Ada !');return false;}
 if($('#frmBarang input[name=description]').val()=="SOLID 0100056 BDN PELOR LC 112 WL-40 US32D"){log_err('Nama Barang Sudah Ada !');return false;}
 if($('#frmBarang input[name=description]').val()=="SOLID 0100074 BDN PELOR LC 122 WL-60 US32D"){log_err('Nama Barang Sudah Ada !');return false;}
 if($('#frmBarang input[name=description]').val()=="SOLID 0100104 DBL CYLNDR SECU DC 02-60 SCR US26"){log_err('Nama Barang Sudah Ada !');return false;}
 if($('#frmBarang input[name=description]').val()=="SOLID 0100124 WC CYLNDR KW 00-60 US26D"){log_err('Nama Barang Sudah Ada !');return false;}
 if($('#frmBarang input[name=description]').val()=="SOLID 0100128 WC CYLNDR KW 03-60 US26D"){log_err('Nama Barang Sudah Ada !');return false;}
 if($('#frmBarang input[name=description]').val()=="SOLID 0190214 DBL CYLNDR MK DC 02-60 MK US26D"){log_err('Nama Barang Sudah Ada !');return false;}
 if($('#frmBarang input[name=description]').val()=="SOLID 0190215 DBL CYLNDR MK DC 02-60 MK BL"){log_err('Nama Barang Sudah Ada !');return false;}
 if($('#frmBarang input[name=description]').val()=="SOLID 0190224 KNOB CYLNDR MK KC 01-60 MK US26D"){log_err('Nama Barang Sudah Ada !');return false;}
 if($('#frmBarang input[name=description]').val()=="SOLID 0190228 KNOB CYLNDR KC 04-60 MK US26D"){log_err('Nama Barang Sudah Ada !');return false;}

  		if($('#unit_of_measure').val()==''){log_err('Isi satuan !');return false;}
		url='<?=base_url()?>index.php/inventory/save';
			$('#frmBarang').form('submit',{
				url: url,
				onSubmit: function(){
					return $(this).form('validate');
				},
				success: function(result){
					var result = eval('('+result+')');
					if (result.success){
					    $("#item_number").val(result.item_number);
						$('#mode').val('view');
						remove_tab_parent();
						log_msg('Data sudah tersimpan.');
					} else {
						log_err(result.msg);
					}
				}
			});
  	}
  	function print_item(){
            txtNo=$("#item_number").val(); 
            window.open("<?=base_url().'index.php/inventory/print_item/'?>"+txtNo,"new");  		
  	}
  	function unit_price(){
		txtNo=$("#item_number").val(); 
		if(txtNo==""){alert("Isi kode barang !");return false}
		dlgUnitPrice_Add();
  	}
  	function item_assembly(){
            txtNo=$("#item_number").val(); 
            window.open("<?=base_url().'index.php/inventory/assembly/'?>"+txtNo,"_self");  		
  	}
  	function others_supplier(){
            txtNo=$("#item_number").val(); 
            window.open("<?=base_url().'index.php/inventory/supplier/'?>"+txtNo,"_self");  		
  	}
  	function qty_gudang(){
            txtNo=$("#item_number").val(); 
            window.open("<?=base_url().'index.php/inventory/qty_gudang/'?>"+txtNo,"_self");  		
  	}
  	function do_upload()
	{
		var xurl='<?=base_url()?>index.php/inventory/do_upload_picture';
			$('#frmUpload').form('submit',{
				url: url,
				onSubmit: function(){
					return $(this).form('validate');
				},
				success: function(result){
					console.log(result);
					var result = eval('('+result+')');
					if (result.success){
						//$.messager.show({
						//	title:'Success',msg:'Data sudah tersimpan. Silahkan simpan formulir ini.'
						//});
						var upload_data=result.upload_data;
						$('#item_picture').val(upload_data['file_name']);
						$('#dlgGambar').dialog('close');
						save();
						
					} else {
						$('#error_upload').html(result.error);
					}
				}
			});
		 	}
	function upload_gambar()
	{
		$('#dlgGambar').dialog('open').dialog('setTitle','Upload Gambar');
	}
	function search_cards()
	{
		var d1=$("#date_from").datebox('getValue');
		var d2=$("#date_to").datebox('getValue');
		var gudang=$("#gudang").val();		
		var xurl='<?=base_url()?>index.php/inventory/kartu_stock/<?=$item_number?>?d1='+d1+'&d2='+d2+"&gudang="+gudang;
		///console.log(xurl);
		$('#dgCard').datagrid({url:xurl});
		//$('#dgCard').datagrid('reload');
	}
	function dgUnitPrice_Refresh(){
		var url='<?=base_url()?>index.php/inventory/unit_price_list/<?=$item_number?>'
		$('#dgUnitPrice').datagrid({url:url});
	}
	function dgSupp_Refresh(){
		var url='<?=base_url()?>index.php/inventory/supplier_list/<?=$item_number?>'
		$('#dgSupp').datagrid({url:url});
	}
	function dgAsm_Refresh(){
		var url='<?=base_url()?>index.php/inventory/assembly_list/<?=$item_number?>'
		$('#dgAsm').datagrid({url:url});
	}
	
	function import_excel(){
		$("#dlgExcel").dialog("open");
	}
	function dlgExcelSubmit(){
		var xurl='<?=base_url()?>index.php/inventory/import_excel';
		$('#dlgExcelForm').form('submit',{
			url: url, onSubmit: function(){
				return $(this).form('validate');
			},
			success: function(result){
				console.log(result);
				var result = eval('('+result+')');
				if (result.success){
					$('#dlgExcel').dialog('close')
					log_msg("Data sudah diimport, periksa data table search.");
				} else {
					log_err(result.msg);
				}
			}
		});
	}
	function add_category()
	{
		void add_tab_parent("add_category","<?=base_url()?>index.php/category");
	}
	function add_supplier()
	{
		void add_tab_parent("add_supplier","<?=base_url()?>index.php/supplier/add");		
	}
	function print_barcode()
	{
		$("#dlgPrintBarcode").dialog('open').dialog('setTitle','Print Barcode');

	}
	function print_barcode_action(){
		var terminal=$("#txtTerminalId").val();
		var qty=$("#txtBarQty").val();
		var col=$("#txtBarCol").val();
		var ukuran=$("#txtBarSize").val();
		if(qty=="0")qty=1;
		item_number=$("#item_number").val();
		if(item_number==""){alert("Pilih kode barang !");return false;}
		if (terminal==""){
			window.open("<?=base_url().'index.php/inventory/print_barcode/'?>"+item_number+"/"+qty+"/"+ukuran,"_barcode");  		
		} else {
			var url=CI_ROOT+'inventory/print_barcode_add';
				loading();
				$.get(url,{item_number:item_number,qty:qty,ukuran:ukuran,terminal:terminal,col:col},function(result){
					if (result.success){
						log_msg(result.msg);
						loading_close(); 
						$("#dlgPrintBarcode").dialog("close");
					} else {
						log_err(result.msg)
					}
				},'json');			
		}
	}
	function add_satuan()
	{
		void add_tab_parent("add_satuan","<?=base_url()?>index.php/company/inventory");		
	}
	function add_class() {
		add_tab_parent("inventory_class",CI_ROOT+"inventory_class");
	}
	function print_barcode_close(){
		$("#dlgPrintBarcode").dialog('close');
	}
	function delete_item(){
		var item_number=$("#item_number").val();
		if(item_number==""){
			log_msg("Isi kode barang!");
			return;
		}
		$.messager.confirm('Confirm','Are you sure you want to remove this?',function(r){
			if (r){
				url='<?=base_url()?>index.php/inventory/delete/'+item_number;
				loading();
				$.get(url,{item_number:item_number,json:true},function(result){
					if (result.success){
						log_msg(result.msg);
						loading_close();
						remove_tab_parent();
					} else {
						log_err(result.msg)
					}
				},'json');
			}
		});
	}
	function onchange_item(){
		var item_number=$('#item_number').val();
		var url=CI_ROOT+"inventory/last_item_no";
		$.get(url,{item_number:item_number},function(result){
			if (result.success){
				var no="<b>"+result.item_number + "</b>-" + result.description;
				window.parent.$("#msg-box-wrap").html("LastNo# "+no);
			} else {
				window.parent.$("#msg-box-wrap").html("LastNo# empty");
			}
		},'json');
	}
</script>
