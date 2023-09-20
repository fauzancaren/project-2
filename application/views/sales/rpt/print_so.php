<?php
         $CI =& get_instance();
         $CI->load->model(array('customer_model','customer_shipto_model'));

         $company=$sold_to_customer;
         $street="";$fax="";$suite="";$phone="";$first_name="";
         $city="";
         if($cst=$CI->customer_model->get_by_id($sold_to_customer)){
              if($rcst=$cst->row()){
                 $company=$rcst->company;
                 $street=$rcst->street;
                 $suite=$rcst->suite;
                 $phone=$rcst->phone;
                 $fax=$rcst->fax;
                 $city=$rcst->city;
                 $first_name=$rcst->first_name;
                 
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
//     if(date("Y",$due_date)<2021){
//          $due_date=due_date($sales_date,$payment_terms);
//    }
          
?>
<table cellspacing="0" cellpadding="1" border="0"> 
     <tr>
          <td rowspan="3">      
               <img src="<?=base_url()?>/assets/php-barcode-master/barcode.php?text=<?=$sales_order_number?>&print=true&size=45" />
          </td>
     </tr>
     
     <tr>
          <td colspan=5><b>SALES ORDER</b></td>
          <td></td><td></td><td></td><td></td><td></td>
     </tr>
     <tr>
          <td colspan=5><b>Nomor: <?=$sales_order_number?></b></td>
     </tr>


     <tr>
     	<td>Tanggal</td><td>: <?=date("Y-m-d",strtotime($sales_date))?></td><td></td>
     	<td colspan="2"><b><?=$sold_to_customer.' ('.$company.')'?></b></td>
     </tr>
     <tr>
     	<td>Termin</td><td>: <b><?=$payment_terms?></b></td></td><td></td>
     	<td colspan="2"><?=$street?></td>
     </tr>
     <tr>
     	<td>Salesman</td><td>: <?=$salesman?></td></td><td></td>
     	<td colspan="2"><?=$suite.' - '.$city?></td>
     </tr>
     <tr>
     	<td>Due Date</td><td>: <?=date("Y-m-d",strtotime($due_date))?></td></td><td></td>
     	<td colspan="2"><?='Phone: '.$phone.' - Fax: '.$fax?></td>
     </tr>
     <tr>
     	<td></td><td></td></td><td></td>
     	<td colspan="2"><?='Up: '.$first_name?></td>
     </tr>
     
     <tr>
     	<td colspan="8">
     	<table border="1" cellpadding="3">
     		<thead>
                    <tr><td>Kode Barang</td><td colspan=3>Nama Barang</td><td width="30">Qty</td>
                         <td width="30">Unit</td><td width=60>Harga</td>
     				<td width="30">Disc%1</td><td width="30">Disc%2</td>
					<td width=60>Jumlah</td>
     			</tr>
     		</thead>
     		<tbody>
     			<?php
		       $sql="select item_number,description,quantity,unit,discount,
						price,amount,disc_2,disc_3
		                from sales_order_lineitems i
		                where sales_order_number='".$sales_order_number."'";
		        $query=$CI->db->query($sql);
                   $tbl="";
                   $tqty=0;
                 foreach($query->result() as $row){
                      $disc1prc=100*$row->discount;                      
                      $disc2prc=100*$row->disc_2;
                    $tbl.="<tr>";
                    $tbl.="<td width=100>".$row->item_number."</td>";
                    $tbl.="<td colspan=3>".$row->description."</td>";
                    $tbl.="<td width=\"30\" align=\"right\">".number_format($row->quantity)."</td>";
                    $tbl.="<td width=\"30\">".$row->unit."</td>";
                    $tbl.="<td  align=\"right\" width=60>".number_format($row->price)."</td>";
                    $tbl.="<td width=\"30\" align=\"right\">".round($disc1prc,2)."</td>";
                    $tbl.="<td width=\"30\" align=\"right\">".round($disc2prc,2)."</td>";
 //                   $tbl.="<td width=\"30\" align=\"right\">".($row->disc_3)."</td>";
                    $tbl.="<td align=\"right\">".number_format($row->amount)."</td>";
                    $tbl.="</tr>";
                    $tqty+=$row->quantity;
               };
               
               $tbl.="
               <tr>
                    <td><b>Catatan: </b></td>
                    <td colspan=3>$comments</td>

                    <td align=right><b>".number_format($tqty)."</b></td>
                    <td></td>
                    <td colspan=3><b>Sub Total</b></td>
                    <td align=right><b>".number_format($sub_total)."</b></td>
               </tr>
               <tr>
                    <td><b>Discount% [$discount]</b></td>
                         <td align=right><b>".number_format($disc_amount)."</b></td>
                    <td><b>Pajak% [$tax]</b></td>
                         <td align=right><b>".number_format($tax_amount)."</b></td>
                    <td><b>Ongkos</b></td>
                         <td align=right><b>".number_format($freight)."</b></td>
                    <td><b>Lain-lain</b></td>
                         <td align=right><b>".number_format($others)."</b></td>
                    <td><b>Jumlah</b></td>
                         <td align=right><b>".number_format($amount)."</b></td>
               </tr> 
               ";
			   echo $tbl;
    			?>
     		</tbody>
     	</table>
     	
     	
     	</td>
     </tr>
     <tr><td><b>MENGETAHUI</b></td><td></td><td></td><td><b>DIBUAT OLEH</b></td><td></td></tr>
</table>
