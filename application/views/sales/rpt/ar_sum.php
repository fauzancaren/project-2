<?php
     $CI =& get_instance();
     $CI->load->model('company_model');
     $model=$CI->company_model->get_by_id($CI->access->cid)->row();
	$date1= date('Y-m-d H:i:s', strtotime($CI->input->post('txtDateFrom')));
	$date2= date('Y-m-d H:i:s', strtotime($CI->input->post('txtDateTo')));
    $CI->load->model('sales_order_model');
	$CI->load->model("sales/KartuPiutangModel");
	$data = $CI->KartuPiutangModel->load_data($date1,$date2); 
	if($data==null){
	   echo "<p>no data found !</p>";
	   exit;
	}


?>
<link href="<?php echo base_url();?>/themes/standard/style_print.css" rel="stylesheet">
<table cellspacing="0" cellpadding="1" border="0" width='800px'> 
     <tr>
     	<td colspan='2'><h2><?=$model->company_name?></h2></td><td colspan='2'><h2>DAFTAR PIUTANG PELANGGAN</h2></td>     	
     </tr>
     <tr>
     	<td>
     		Criteria: Dari Tanggal: <?=$date1?> s/d : <?=$date2?>
     	</td>
     </tr>
     <tr><td colspan=4 style='border-bottom: black solid 1px'></td></tr>
     <tr>
     	<td colspan="8">
	     		<table class='titem'>
	     		<thead>
	     			<tr><td>Kode</td><td>Pelanggan</td><td>Awal</td><td>Debit</td><td>Credit</td>
					<td>Saldo</td>
	     			</tr>
	     		</thead>
	     		<tbody>
     			<?php
				 $tbl="";
				$z_awal_tot=0; 	$z_db_tot=0; 	$z_cr_tot=0;	$z_akhir_tot=0;
				
				for($i=0;$i<count($data);$i++) {
					$awal=$data[$i]['amount_awal'];
					$db=$data[$i]['amount_in'];
					$cr=$data[$i]['amount_out'];
					$akhir=$data[$i]['amount_akhir'];
					if($akhir!=0){
						$z_awal_tot=$z_awal_tot+$awal;
						$z_db_tot=$z_db_tot+$db;
						$z_cr_tot=$z_cr_tot+$cr;
						$z_akhir_tot=$z_akhir_tot+$akhir;
						   
						$tbl.="<tr>";
						$tbl.="<td>".$data[$i]['customer_number']."</td>";
						$tbl.="<td>".$data[$i]['company']."</td>";
						$tbl.="<td align='right'>".number_format($awal)."</td>";
						$tbl.="<td align='right'>".number_format($db)."</td>";
						$tbl.="<td align='right'>".number_format($cr)."</td>";
						$tbl.="<td align='right'>".number_format($akhir)."</td>";
						$tbl.="</tr>";
					}

				};
				$tbl.="<tr>";
				$tbl.="<td><strong>TOTAL</strong></td>";
				$tbl.="<td></td>";
				$tbl.="<td align='right'><strong>".number_format($z_awal_tot)."</strong></td>";
				$tbl.="<td align='right'><strong>".number_format($z_db_tot)."</strong></td>";
				$tbl.="<td align='right'><strong>".number_format($z_cr_tot)."</strong></td>";
				$tbl.="<td align='right'><strong>".number_format($z_akhir_tot)."</strong></td>";
				$tbl.="</tr>";
				 
				
			   echo $tbl;
				   				   				   
			?>	
				</tbody>
     		</table>
     	
     	</td>
     </tr>
</table>
