<?php
     $CI =& get_instance();
	 $CI->load->model(array('customer_model','customer_shipto_model'));
     $cst=$CI->customer_model->get_by_id($sold_to_customer)->row();

	  $CI->load->model('company_model');
     $model=$CI->company_model->get_by_id($CI->access->cid)->row();

	 $company=$sold_to_customer;
	 $street="";$fax="";$suite="";$phone="";$first_name="";
	 $city="";
if ($cst = $CI->customer_model->get_by_id($sold_to_customer)) {
    if ($rcst = $cst->row()) {
        $company = $rcst->company;
        $street = $rcst->street;
        $suite = $rcst->suite;
        $phone = $rcst->phone;
        $fax = $rcst->fax;
        $city = $rcst->city;
        $first_name = $rcst->first_name;
        
        // Check if npwp has data
        $npwp = $rcst->npwp ? $rcst->npwp : 123456789;
    }
}

	  if($sold_to_customer!=$ship_to_customer){
		   if($cst_ship=$CI->customer_shipto_model->get_by_code(
			  $ship_to_customer,$sold_to_customer)){
			  if($rcst_ship=$cst_ship->row()){ 
				 if($rcst_ship->alamat!="")$street=$rcst_ship->alamat;
				 if($rcst_ship->contact!="")$first_name=$rcst_ship->contact;
				 if($rcst_ship->kota!="")$city=$rcst_ship->kota;
				 if($rcst_ship->telp!="")$phone=$rcst_ship->telp;
				 
			  }
		   }
	  }		 

?>



<table cellspacing="1" cellpadding="1" border="1"> 
	 
	<tr>
		<th colspan="3"><h1 align="center"><font size="5"> FAKTUR PAJAK </font></h1></th>
	</tr>	
	
	
	<tr>
		<th>Kode dan Nomer Seri Faktur Pajak</th>
		<th colspan="3">: blm ada inputan untuk tabel no faktur</th>
	</tr>
	<tr>
		<th colspan="3">Pengusaha Kena Pajak</th>
	</tr>
	<tr>
		<th>Nama</th>
		<td colspan=3><b>: <?=strtoupper($model->company_name)?></b></td>
	</tr>
	<tr>
		<th>Alamat</th>
		<td colspan=3>: <?=$model->street?> <?=$model->suite?></td>
	</tr>
	<tr>
		<th>NPWP</th>
		<td colspan=3>: <?=$model->fed_tax_id?></td>
	</tr>
	<tr>
		<th colspan="3">Pembelian Kena Pajak/Penerima Jasa Kena Pajak</th>
	</tr>
	<tr>
		<th>Nama</th>
		<td colspan=3>: <?=$company?></td>
	</tr>
	<tr>
		<th>Alamat</th>
		<td colspan=3>: <?=$street?></td>
	</tr>
	<tr>
		<th>NPWP</th>
		<td colspan=3>: <?=$npwp?></td>
	</tr>
	

	<td colspan="8">
     	<table border="1" cellpadding="3">
     		<thead>
     			<tr>
     				<td width="30">No.</td><td>Nama Barang Kena Pajak/Jasa Kena Pajak</td><td>Harga Jual/Pengantaran/Uang Muka/Termin</td>
     			</tr>
     		</theadx>
     		<tbody>
     		   <?
		       $sql="select item_number,description,quantity,unit,discount,
					price,amount,disc_2,disc_3 
		                from invoice_lineitems i
		                where invoice_number='".$invoice_number."'";
		        $query=$CI->db->query($sql);

     			$tbl="";
                 foreach($query->result() as $row){
                    $tbl.="<tr>";
							$tbl.="<td width=\"30\"></td>";
                    $tbl.="<td>".$row->item_number." ".$row->description." </br>
                    ".number_format($row->price)."X".number_format($row->quantity)."  ".number_format($row->discount,2)." ".number_format($row->disc_2,2)." ".number_format($row->disc_3,2)."

                    </td>";
                    
                    $tbl.="<td align=\"right\">".number_format($row->amount)."</td>";
                    $tbl.="</tr>";
               };
			   echo $tbl;
    		   ?>
     		</tbody>
     		<tr>
				<th colspan="2">Harga Jual/Pengantaran/Uang Muka/Termin</th>
				<td align="right"><?=number_format($sub_total)?></td>
			</tr>
			<tr>
				<th colspan="2">Dikurangi Potongan Harga</th>
				<td align="right"><?=number_format($disc_amount)?></td>
			</tr>
			<?php 
	 $s="select * from payments where invoice_number='$invoice_number'";
	 if($qpay=$this->db->query($s)){
		 $ttl_bayar=0;
		 $st="<tr border=1>";
		 foreach($qpay->result() as $r){
			 $ttl_bayar+=$r->amount_paid;
		 }
		 $st.="<tr><th colspan=2>Dikurangi Uang Muka yang Telah Diterima</th>
		 <th align=right>".number_format($ttl_bayar)."</th></tr>";
		 $st.="<tr><th colspan=2>Dasar Pengenaan Pajak</th>
		 <th align=right>".number_format($amount-$ttl_bayar)."</th></tr>";		 
	 } 
	 if($st!=""){
		 echo $st;
	 }
	 ?>
	 		<tr>
				<th colspan="2">Total PPn <?=$tax?></th>
				<td align="right"><?=number_format($tax_amount)?></td>
			</tr>
	<tr><th>Jumlah</th><th align="right"><?=number_format($amount)?></th></tr>
 

 	<table cellspacing="1" cellpadding="1" border="0">
 		<tr>
	  	<td rowspan="6">
	  		<table cellspacing="1" cellpadding="1" border="1">
	  		<h1><b>Pajak Penjualan Atas Barang Mewah</b></h1>

	  	<tr><td>Tarif</td><td>DPP</td><td>PPn BM</td></tr>
 		<tr><td>...%</td><td>Rp.........</td><td>Rp.........</td></tr>
 		<tr><td>...%</td><td>Rp.........</td><td>Rp.........</td></tr>
 		<tr><td>...%</td><td>Rp.........</td><td>Rp.........</td></tr>
 		<tr><td>...%</td><td>Rp.........</td><td>Rp.........</td></tr>
 		<tr><td colspan="2"><b>Jumlah</b></td><td><b>Rp.........</b></td></tr>
	  	</table>

	  </td>
     	<th align="center"><?=$model->city_state_zip_code?>, <?=date("d-m-Y",strtotime($invoice_date))?></th>
     </tr>
     <tr><td>&nbsp;</td></tr>
	 <tr><td>&nbsp;</td></tr>
	 <tr><td>&nbsp;</td></tr>

 	  <tr>
     	<td align="center">------------</td>
     </tr>
	 	<td align="center">Nama</td>
     </tr>
 	</table>
 	
</table>

<th>*)Coret yang tidak perlu


