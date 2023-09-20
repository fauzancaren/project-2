<?php
     $CI =& get_instance();
     $CI->load->model('company_model');
	 $CI->load->model("customer_model");
	 $CI->load->model("sales/KartuPiutangModel");
	$model=$CI->company_model->get_by_id($CI->access->cid)->row();
	$date1= date('Y-m-d H:i:s', strtotime($CI->input->post('txtDateFrom')));
	$date2= date('Y-m-d H:i:s', strtotime($CI->input->post('txtDateTo')));
	$kode=$CI->input->post('text1');
	if($kode==""){
		msgbox("Kode pelanggan harus dipilih !");
		exit;
	}
    $CI->load->model('sales_order_model');
?>
<link href="<?php echo base_url();?>/themes/standard/style_print.css" rel="stylesheet">
<table cellspacing="0" cellpadding="1" border="0" width='800px'> 
     <tr>
     	<td colspan='2'><h2><?=$model->company_name?></h2></td><td colspan='2'><h2>KARTU PIUTANG PELANGGAN</h2></td>     	
     </tr>
     <tr>
     	<td>
     		Criteria: Dari Tanggal: <?=$date1?> s/d : <?=$date2?>, Customer: <?=$kode?>
     	</td>
     </tr>
     <tr><td colspan=4 style='border-bottom: black solid 1px'></td></tr>
     <tr>
     	<td colspan="8">
     			<?php
				 $_data=null;
				 $customer_number="";
				 $company="";
				 $street="";
				 $phone="";
				 if($q=$CI->customer_model->get_by_id($kode)){
					 if($r=$q->row()){
						 $customer_number=$kode;
						 $company=$r->company;
						 $street=$r->street;
						 $phone=$r->phone;
						 $CI->KartuPiutangModel->_date_from=$date1;
						 $CI->KartuPiutangModel->_customer_number=$kode;
						 $awal=$CI->KartuPiutangModel->amount_awal();
						 $data['tanggal']="2000-01-01";
						 $data['jenis']='SALDO';
						 $data['no_bukti']='SALDO';
						 $data['ref']='';
						 $data['debit']=0;
						 $data['credit']=0;
						 $data['saldo']=$awal;
						 $data['bayar']=0;
						 $_data[]=$data;

					 }
				 }
				 $CI->KartuPiutangModel->_customer_number=$kode;
				 $CI->KartuPiutangModel->_date_from=$date1;
				 $CI->KartuPiutangModel->_date_to=$date2;
				 $data=$CI->KartuPiutangModel->detail(); 

				 if($data!=null){
					$_data=array_merge($_data,$data);
				 }
				 if($_data!=null){
					uksort($_data,function($a,$b){
						return $a['tanggal']<=$b['tanggal'];
					  });
					//arsort($_data);
				 }
				
				if($_data==null){
					echo 'No data found !';
					exit;
				}

				$tbl=""; 
					$tbl.="	<h3>$customer_number - $company</h3> 		
						<table class='titem'>
						<thead>
							<tr><td>Tanggal</td>
								<td>No Bukti</td><td>Jenis</td><td>Ref</td><td>Debit</td><td>Credit</td>
								<td>Saldo</td><td>J Bayar</td>
							</tr>
						</thead>
						<tbody>
					"; 
					$saldo=0; 	$z_db=0;	$z_cr=0;	$z_jumlah=0;
					for($i=0;$i<count($_data);$i++){
						$db=$_data[$i]['debit'];
						$cr=$_data[$i]['credit'];
						$saldo=$_data[$i]['saldo'];
						if($saldo==0)$saldo=$db-$cr;
						$jbayar=$_data[$i]['bayar'];
						$z_db=$z_db+$db;
						$z_cr=$z_cr+$cr;
						$z_jumlah=$z_jumlah+$saldo;

						$tbl.="<tr>";
						$tbl.="<td>".$_data[$i]['tanggal']."</td>";
						$tbl.="<td>".$_data[$i]['no_bukti']."</td>";
						$tbl.="<td>".$_data[$i]['jenis']."</td>";
						$tbl.="<td>".$_data[$i]['ref']."</td>";
						$tbl.="<td align='right'>".number_format($db)."</td>";
						$tbl.="<td align='right'>".number_format($cr)."</td>";
						$tbl.="<td align='right'>".number_format($z_jumlah)."</td>";
						$tbl.="<td>".$jbayar."</td>";
						$tbl.="</tr>";	
					}
				

					$tbl.="<tr>";
					$tbl.="<td><h4>SALDO</h4></td>";
					$tbl.="<td></td>";
					$tbl.="<td></td>";
					$tbl.="<td></td>";
					$tbl.="<td align='right'><h4>".number_format($z_db)."</h4></td>";
					$tbl.="<td align='right'><h4>".number_format($z_cr)."</h4></td>";
					$tbl.="<td align='right'><h4>".number_format($z_jumlah)."</h4></td>";
					$tbl.="<td></td>";
					$tbl.="</tr>";

					$tbl.="		</tbody>
						</table>";
					
				
			   echo $tbl;
				   				   				   
			?>	
     	
     	</td>
     </tr>
</table>
