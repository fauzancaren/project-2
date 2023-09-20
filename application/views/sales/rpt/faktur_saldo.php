<?php
     $CI =& get_instance();
     $CI->load->model('company_model');
     $model=$CI->company_model->get_by_id($CI->access->cid)->row();
	$date1= date('Y-m-d H:i:s', strtotime($CI->input->post('txtDateFrom')));
	$date2= date('Y-m-d H:i:s', strtotime($CI->input->post('txtDateTo')));
    
    $salesman=$CI->input->post("text1");
    $customer=$CI->input->post("text2");
    $outlet=$CI->input->post("text3");
?>
<link href="<?php echo base_url();?>/themes/standard/style_print.css" rel="stylesheet">
<table cellspacing="0" cellpadding="1" border="0" width='100%'> 
     <tr>
     	<td colspan='5'><h2>DAFTAR FAKTUR PENJUALAN</h2></td>     	
     </tr>
     <tr>
     	<td>
     		Criteria: Dari Tanggal: <?=$date1?> s/d : <?=$date2?>
     		Salesman: <?=$salesman?>, Customer: <?=$customer?>, 
     		Outlet: <?=$outlet?>
     	</td>
     </tr>
     <tr>
     	<td colspan="8">
	     		<table class='titem'>
	     		<thead>
	     			<tr><td>Nomor Faktur</td><td>Tanggal</td><td>Kode Pelanggan</td><td>Nama Pelanggan</td>
	     				<td>Nomor SO</td><td>Termin</td><td>Salesman</td><td>Jumlah</td>
						<td>Payment</td><td>Retur</td><td>Cr Memo</td><td>Dr Memo</td>
						<td>Saldo</td><td>Outlet</td><td>Freight</td><td>Other</td><td>Tax</td>
						<td>Disc1</td><td>Disc2</td><td>Disc3</td>
	     			</tr>
	     		</thead>
	     		<tbody>
     			<?php
     			$sql="select i.* from qry_invoice i where invoice_date 
				between '$date1' and '$date2'  ";
				$logged_in=$this->session->userdata('logged_in');
				if($logged_in['flag1']=='1'){
					$salesman=$logged_in['username'];
					$CI->load->model("salesman_model");					
					$CI->load->model("user_model");
					$sql2 = $CI->salesman_model->get_by_user_id_array($salesman);
					$sql3=$CI->user_model->get_sales_by_spv($logged_in['user_id']);
					if($sql3!=""){
						$sql2=" and i.salesman in ($sql3)";
					}
					$sql.=$sql2;

				} else {
					if($salesman!="")$sql.=" and i.salesman='" . $salesman . "'";
				}

                if($customer!=""){
                    $sql.=" and sold_to_customer='$customer'";
                }
                $sql.=" order by invoice_number";
				
				//echo "</br>".$sql; exit;
				
     			$rst_so=$CI->db->query($sql);
     			$tbl="";
				$z_amount=0;		$z_payment=0;
				$z_retur=0;			$z_cr_amount=0;
				$z_db_amount=0;		$z_saldo=0;
                 foreach($rst_so->result() as $row){
					$freight=0;
					$other=0;					$tax=0;
					$disc_amt_1=0;					$disc_amt_2=0;		$disc_amt_3=0;
                    $warehouse_code="";
					$s="select freight,other,tax,disc_amount_1,disc_amount_2,disc_amount_3 
					from invoice where invoice_number='$row->invoice_number'";
					if($q=$this->db->query($s)){
						if($r=$q->row()){
							$freight=$r->freight;
							$other=$r->other;
							$tax=$r->tax;
							$disc_amt_1=$r->disc_amount_1;
							$disc_amt_2=$r->disc_amount_2;
							$disc_amt_3=$r->disc_amount_3;
						}
					}
                    if($q=$CI->db->select("warehouse_code")->where("invoice_number",$row->invoice_number)
                        ->where("warehouse_code<>''")->limit(1)->get("invoice_lineitems")){
                            if($r=$q->row()){
                                $warehouse_code=$r->warehouse_code;
                            }
                        } 
                    if($outlet==$warehouse_code || $outlet==""){
						$amount=$row->amount;
						
						//if($row->amount==0)$amount=$row->inv_amount;
                        $tbl.="<tr>";
                        $tbl.="<td>".$row->invoice_number."</td>";
                        $tbl.="<td>".date("Y-m-d H:i:s",strtotime($row->invoice_date))."</td>";
                        $tbl.="<td>".($row->sold_to_customer)."</td>";
                        $tbl.="<td>".$row->company."</td>";
                        $tbl.="<td>".$row->sales_order_number."</td>";
                        $tbl.="<td>".$row->payment_terms."</td>";
                        $tbl.="<td>".$row->salesman."</td>";
                        $tbl.="<td align='right'>".number_format($amount)."</td>";
                        $tbl.="<td align='right'>".number_format($row->payment)."</td>";
                        $tbl.="<td align='right'>".number_format($row->retur)."</td>";
                        $tbl.="<td align='right'>".number_format($row->cr_amount)."</td>";
                        $tbl.="<td align='right'>".number_format($row->db_amount)."</td>";
    					$saldo=$row->amount-$row->payment-$row->retur-$row->cr_amount+$row->db_amount;
                        $tbl.="<td align='right'>".number_format($saldo)."</td>";
                        $tbl.="<td>$warehouse_code</td>";
						$tbl.="<td>$freight</td><td>$other</td><td>$tax</td>
						<td>$disc_amt_1</td><td>$disc_amt_2</td><td>$disc_amt_3</td> ";
                        $tbl.="</tr>";
    					$z_amount=$z_amount+$amount;
    					$z_payment=$z_payment+$row->payment;
    					$z_retur=$z_retur+$row->retur;
    					$z_cr_amount=$z_cr_amount+$row->cr_amount;
    					$z_db_amount=$z_db_amount+$row->db_amount;
    					$z_saldo=$z_saldo+$saldo;
					}
               };
			   
			   $tbl.="<tr><td><b>TOTAL</b></td><td></td><td></td><td></td>
	     				<td></td><td></td><td></td><td align='right'><b>".number_format($z_amount)."</b></td>
						<td align='right'><b>".number_format($z_payment)."</b></td>
						<td align='right'><b>".number_format($z_retur)."</b></td>
						<td align='right'><b>".number_format($z_cr_amount)."</b></td>
						<td align='right'><b>".number_format($z_db_amount)."</b></td>
						<td align='right'><b>".number_format($z_saldo)."</b></td></tr>";
			   echo $tbl;
				   				   				   
			?>	
				</tbody>
     		</table>
     	
     	</td>
     </tr>
</table>
