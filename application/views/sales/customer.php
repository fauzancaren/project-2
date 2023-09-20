<div class="thumbnail box-gradient">
	<?php
	echo link_button('Save', 'save();return false;','save');		
	echo link_button('Print', 'print()','print');		
	echo link_button('Delete', 'hapus()','remove');		
	echo link_button('Refresh','','reload','false',base_url().'index.php/customer/view/'.$customer_number);		
	
	echo "<div style='float:right'>";
	echo link_button('Help', 'load_help(\'customer\')','help');		
	
	?> 
		<?=link_button('Close', 'remove_tab_parent();return false;','cancel')?>		
	
	</div>
</div>
<div class="thumbnail">	
<form id="myform"  method="post" role="form">
<input type='hidden' name='mode' id='mode'	value='<?=$mode?>'>
<?php 
echo validation_errors(); 
$readonly="";
?>
<div class="easyui-tabs">
	<div title="General" style="padding:10px">
		<table class="table2" width="100%">
    <tr>
        <td>Kode *
			<?php 
				if($mode=="add"){
					echo "<span style='text-color:lightgray;font-size:8px'><br/><i>Next Number: $label_next_number</i></span>";
				}
			?>
		</td> 
        <td><?php
            if($mode=='view'){
               $readonly=" readonly";
            }  
            echo form_input('customer_number',$customer_number,"id='customer_number' $readonly");
            ?>
        </td>
        <td colspan=2 width=100>
            Aktif <?=form_radio('active',1,$active=='1'?TRUE:FALSE,"style='width:30px'");?>Yes 
            <?php echo form_radio('active',0,$active=='0'?TRUE:FALSE,"style='width:30px'");?>No
            
        </td>
  </tr>
	   <tr>
         <td>Nama* </td>       
         <td ><?=form_input('company',$company,'style="width:250px" id=company');?>
         </td>		 
		  <td>Salesman *</td><td>
				<? echo form_input('salesman',$salesman,"id='salesman'");?>
                 <?=link_button("", "dlgsalesman_show()","search","false","","Cari salesman")?>
                 <?=link_button("", "add_salesman();return false;","add")?>
			</td>
       <tr>
         <td>Alamat*</td>
         <td colspan="4"><?php echo form_input('street',
                        $street,'style="width:90%"');?></td>
       </tr>
	   <tr>
	     <td>&nbsp;</td>
	   
	     <td colspan="4"><?php echo form_input('suite',
                        $suite,'style="width:90%"');?></td>
       </tr>
	<tr><td>Kontak Person : </td><td colspan=3>
         	Mr/Mrs <?=form_input("salutation",$salutation,"style='width:40px'")
         	."First Name ".form_input("first_name",$first_name)
			."Midle ".form_input("middle_initial",$middle_initial,"style='width:50px'")
			."Last ".form_input("last_name",$last_name);?></td>
	</tr>
	<tr>
         <td>Email</td><td><?=form_input('email',$email);?></td>
         <td>Kode Pos</td><td><?php echo form_input('zip_postal_code',$zip_postal_code);?></td>
  	</tr>
  	<tr>
         <td>Kota</td><td><?php echo form_input('city',$city,"id=city");?>
             <?=link_button("", "dlgcity_show()","search","false","","Cari kota")?>
             <?=link_button("", "add_city();return false;","add")?>
		 </td>
         <td>Faximile</td>
         <td><?php echo form_input('fax',$fax);?></td>
       </tr>
       <tr>
         <td>Telphon*</td>
         <td><?php echo form_input('phone',$phone);?></td>
		 <td>Negara</td>
		 <td><?php echo form_input('country',$country,"id=country");?>
             <?=link_button("", "dlgcountry_show()","search","false","","Cari negara")?>
             <?=link_button("", "add_country();return false;","add")?>
		 </td>

  		</tr>
		  <td>Handphone</td>
		  <td><?=form_input('other_phone',$other_phone,'id=other_phone')?></td>
		<tr>

		</tr>  
  		<tr>
         <td>Wilayah</td><td><?php echo form_input('region',$region,"id=region");?>
              <?=link_button("", "dlgregion_show()","search","false","","Cari wilayah")?>
             <?=link_button("", "add_region();return false;","add")?>

		 </td>
			 <td>Lat/Lng</td><td><?php echo form_input('lat',$lat,"style='width:50px'");?>
			 <?php echo form_input('lng',$lng,"style='width:50px'");?></td>
       </tr>

			<tr><td>Kelompok* </td>
			 <td><?php echo form_input('customer_record_type',$customer_record_type,"id=customer_record_type");?>
                 <?=link_button("", "dlgcustomer_record_type_show()","search","false","","Cari kelompok customer")?>
                 <?=link_button("", "add_cust_type();return false","add")?>
			 </td>
			 
<!--			 <td>Sales Type/Price List</td><td><?=form_input('pricing_type',$pricing_type);?></td>
-->
			<td>Tgl Gabung</td><td><?=form_input('join_date',$join_date);?></td>
		</tr>
		<tr>
			<td>Tanggal Tagih</td><td><?=form_input('tgl_tagih',$tgl_tagih);?></td>
			<td>Tgl Expire</td><td><?=form_input('expire_date',$expire_date);?></td>
		</tr>
		 <tr>
		     <td>Credit Limit</td><td><?=form_input('credit_limit',number_format($credit_limit,2));?></td>
			 <td>Termin Jual</td><td><?=form_input('payment_terms',$payment_terms,"id='payment_terms'");?>
                 <?=link_button("", "dlgpayment_terms_show()","search","false","","Cari termin")?>
                 <?=link_button("", "add_payment();return false;","add")?>
			 </td>
		   </tr>
		   <tr>
                <td>Current Balance</td><td><?=form_input('current_balance',number_format($current_balance,2));?></td>                
				<td>Credit Balance</td><td><?=form_input('credit_balance',number_format($credit_balance,2));?></td>
		   </tr>
	   
      </table>
      </div>
	<div title="Sales" style="padding:10px">
		<table class="table" width="100%">
		   <tr>
			<td>Discount % (1+2+3)</td><td>
			<?php
			echo form_input('discount_percent',$discount_percent,"style='width:50px'");
			echo "+".form_input('disc_prc_2',$disc_prc_2,"style='width:50px'");
			echo "+".form_input('disc_prc_3',$disc_prc_3,"style='width:50px'");
			
			?></td>
			<td>Mark Up %</td><td><?=form_input('markup_percent',$markup_percent);?></td>
		   </tr>
		   <tr>
			<td>Discount Amount</td><td><?=form_input('discount_amount',$discount_amount);?></td>
			<td>Mark Up Amount</td><td><?=form_input('markup_amount',$markup_amount);?></td>
		   </tr>
		   <tr>
			<td>Discount Qty Sold</td><td><?=form_input('disc_min_qty',$disc_min_qty);?></td>
			<td>Discount Category</td><td> 
             <?=link_button("", "dlgCustomerDisc()","add","false","","Cari discount")?>
    		</td>
		   </tr>
		   <tr>
			 <td>Akun Piutang </td>
			 <td colspan="6"><?=form_input('finance_charge_acct',$finance_charge_acct,"id='finance_charge_acct' style='width:300px'");?>
             <?=link_button("", "lookup_coa('finance_charge_acct')","search","false","","Cari kode perkiraan")?>
             <?=link_button("", "add_coa();return false;","add")?>
		   </tr>
		   <tr>
			<td>Catatan</td><td colspan='6'><?=form_input('comments',$comments,"style='width:300px'");?></td>
		   </tr>
		   <tr>
			<td>Kirim Via</td><td><?=form_input('shipped_via',$shipped_via);?></td>
			<td>NPWP</td><td><?=form_input('npwp',$npwp);?></td>
			</tr>       	
		</table>
	</div>

   </form>

<!-- SHIPTO -->
	<div title="Ship To" style="padding:10px">
		<?php include_once "customer_shipto.php"; ?>
	</div>
<!-- CARDS -->				
	<div title="Cards" style="padding:10px">
		<?php include_once "customer_card.php"; ?>
	</div>
	<div title='Poin Reward' style='padding:10px'>
		<?php include_once 'customer_poin_reward.php';?>
	</div>

    
</div>   

<?=load_view('gl/select_coa_link')?> 
  
 
<?=$lookup_country?>
<?=$lookup_city?>
<?=$lookup_salesman?>  	
<?=$lookup_termin?>  	
<?=$lookup_region?>  	
<?=$lookup_cust_type?>  	


<script>

			 
	function  add_region(){
		var url=CI_ROOT+"region/browse";
		add_tab_parent("Region",url);
	}  
	function  add_country(){
		var url=CI_ROOT+"country/browse";
		add_tab_parent("Country",url);
	}  
	function  add_cust_type(){
		var url=CI_ROOT+"customer_type/browse";
		add_tab_parent("Customer Type",url);
	}  
	function  add_salesman(){
		var url=CI_ROOT+"salesman/browse";
		add_tab_parent("Salesman",url);
	}  
	function  add_payment(){
		var url=CI_ROOT+"type_of_payment/browse";
		add_tab_parent("Termin",url);
	}  
	function  add_coa(){
		var url=CI_ROOT+"coa/browse";
		add_tab_parent("Coa",url);
	}  
	function add_city(){
		var url=CI_ROOT+"city/browse";
		add_tab_parent("City",url)
	}
  	function save(){
  		if($('#customer_number').val()==''){alert('Isi kode pelanggan !');return false;}
  		if($('#company').val()==''){alert('Isi nama pelanggan !');return false;}
  		if($('#salesman').val()==''){alert('Isi nama salesman !');return false;}
		url='<?=base_url()?>index.php/customer/save';
			$('#myform').form('submit',{
				url: url,
				onSubmit: function(){
					return $(this).form('validate');
				},
				success: function(result){
					var result = eval('('+result+')');
					if (result.success){
						$("#mode").val("view");
						$("#customer_number").val(result.customer_number);
						log_msg('Data sudah tersimpan. Kode: ' + result.customer_number);
						remove_tab_parent();
					} else {
						log_err(result.msg);
					}
				}
			});
  	}	
	function dlgCustomerDisc(){
		var cust_no='<?=$customer_number?>';
		if(cust_no==""){alert("Kode customer belum dipilih !");return false;}
		var url=CI_BASE+"index.php/category/discount/show/"+cust_no;
		add_tab_parent("disc_cat_"+cust_no,url);
	}
	function hapus(){
		var no=$("#customer_number").val();
		if(no==""){
			log_msg("Kode pelanggan tidak ada !"); return false;
		}
		$.messager.confirm('Confirm','Are you sure you want to remove this?',function(r){
		if (r){
			url='<?=base_url()?>index.php/customer/delete_json/'+no;
			$.post(url,{customer_number:no},
			function(result){
				if (result.success){
					remove_tab_parent();
				} else {
					$.messager.show({	// show error message
						title: 'Error',
						msg: result.msg
					});
				}
			},'json');
		}
		});

	}
	function dlgsalesman_find(){

	}
</script>	
   