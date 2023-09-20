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
<table cellspacing="0" cellpadding="1" border="0" font-size="10"> 
          
     <tr>
          <td colspan=2 align=center ><b>SALES ORDER</b></td>
     </tr>

     <tr>
          <td colspan=2 width="50" align=center>               
               <img src="<?=base_url()?>/assets/php-barcode-master/barcode.php?text=<?=$sales_order_number?>&print=true&size=45" />
          </td>
     </tr>
     
     <tr>
          <td colspan=2 align=center><b>Nomor: <?=$sales_order_number?></b></td>
     </tr>
     <tr>
     	<td align=center>Tanggal : <?=date("Y-m-d",strtotime($sales_date))?></td>
     </tr>
     <tr>
     	<td align=center>Termin : <?=$payment_terms?></td>
     </tr>
     <tr>
     	<td align=center>Salesman : <?=$salesman?></td>
     </tr>
     </tr>
     <tr>
          <td align=center >=====================</td>
     </tr>
     <tr>
          <td align=center style="font-size:14px"> <b>Struk ini </b></td>
     </tr>
     <tr>
          <td align=center style="font-size:14px">  <b>bukan bukti pembayaran  </b></td>
     </tr>
     
</table>
