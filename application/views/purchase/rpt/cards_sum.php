	
<?
//var_dump($_POST);
?>
<?
     $CI =& get_instance();
     $CI->load->model('company_model');
     $model=$CI->company_model->get_by_id($CI->access->cid)->row();
	$date1= date('Y-m-d H:i:s', strtotime($CI->input->post('txtDateFrom')));
	$date2= date('Y-m-d H:i:s', strtotime($CI->input->post('txtDateTo')));
	$tampil_saldo_nol= $CI->input->post('text1');
?>
<link href="<?php echo base_url();?>/themes/standard/style_print.css" rel="stylesheet">
<table cellspacing="0" cellpadding="1" border="0" width='800px'> 
     <tr>
     	<td colspan='2'><h2>KARTU HUTANG SUMMARY</h2></td>     	
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
 			<tr>
 				<td>Kode Supplier</td><td>Nama Supplier</td><td>Kota</td>
 				<td>Telp</td><td>Saldo Awal</td><td>Tambah</td><td>Kurang</td><td>Saldo Akhir</td>
 			</tr>
 		</thead>
 		<tbody>
     	<?
     	$sql="select supplier_number,supplier_name,city,phone from suppliers "; 
		$sql.=" order by supplier_name";
        $q_supp=$CI->db->query($sql);
		$tbl="";
		$tot_awal=0;
		$tot_tambah=0;
		$tot_kurang=0;
		$tot_saldo=0;
		foreach($q_supp->result() as $r_supp){

			$sql="select sum(p.amount) as sum_amount  from purchase_order p
			where potype='I' and p.supplier_number='".$r_supp->supplier_number."' 
			and po_date<'$date1'";
			if(multi_company_single_db()){
				$sql.=" and p.cid='".cid()."'";
			}
	        $q=$CI->db->query($sql)->row();
			if($q){
				$sld_awal=$q->sum_amount;
			} else {
				$sld_awal=0;
			}

			$sql="select sum(p.amount_paid) as sum_amount  from payables_payments p
			left join payables py on py.bill_id=p.bill_id
			where py.supplier_number='".$r_supp->supplier_number."' 
			and date_paid<'$date1'";
			if(multi_company_single_db()){
				$sql.=" and p.cid='".cid()."'";
			}
	        $q=$CI->db->query($sql)->row();
			if($q){
				$sld_awal=$sld_awal-$q->sum_amount;
			}

			$sql="select sum(p.amount) as sum_amount  from purchase_order p
			where potype='I' and p.supplier_number='".$r_supp->supplier_number."' 
			and po_date between '$date1' and '$date2'";
			if(multi_company_single_db()){
				$sql.=" and p.cid='".cid()."'";
			}
	        $q=$CI->db->query($sql)->row();
			if($q){
				$mut_tambah=$q->sum_amount;
			} else {
				$mut_tambah=0;
			}
			
			$sql="select sum(p.amount_paid) as sum_amount  from payables_payments p
			left join payables py on py.bill_id=p.bill_id
			where py.supplier_number='".$r_supp->supplier_number."' 
			and date_paid between '$date1' and '$date2'";
			if(multi_company_single_db()){
				$sql.=" and p.cid='".cid()."'";
			}
			 
	        $q=$CI->db->query($sql)->row();
			if($q){
				$mut_kurang=$q->sum_amount;
			} else {
				$mut_kurang=0;
			}
			$saldo=$sld_awal+$mut_tambah-$mut_kurang;
			if($saldo!=0 || $tampil_saldo_nol==1){
	            $tbl.="<tr>";
	            $tbl.="<td>".$r_supp->supplier_number."</td>";
	            $tbl.="<td>".$r_supp->supplier_name."</td>";
	            $tbl.="<td>".$r_supp->city."</td>";
	            $tbl.="<td>".$r_supp->phone."</td>";
	            $tbl.="<td align='right'>".number_format($sld_awal)."</td>";
	            $tbl.="<td align='right'>".number_format($mut_tambah)."</td>";
	            $tbl.="<td align='right'>".number_format($mut_kurang)."</td>";
	            $tbl.="<td align='right'>".number_format($saldo)."</td>";
	            $tbl.="</tr>";
					
				
			}
			$tot_awal+=$sld_awal;
			$tot_tambah+=$mut_tambah;
			$tot_kurang+=$mut_kurang;
			$tot_saldo+=$saldo;
		}
        $tbl.="<tr>";
        $tbl.="<td><strong>TOTAL</strong></td>";
        $tbl.="<td></td>";
        $tbl.="<td></td>";
        $tbl.="<td></td>";
        $tbl.="<td align='right'><strong>".number_format($tot_awal)."</strong></td>";
        $tbl.="<td align='right'><strong>".number_format($tot_tambah)."</strong></td>";
        $tbl.="<td align='right'><strong>".number_format($tot_kurang)."</strong></td>";
        $tbl.="<td align='right'><strong>".number_format($tot_saldo)."</strong></td>";
        $tbl.="</tr>";
  	    
  	    echo $tbl;
		?>
     	

   		</tbody>
   		</table>
     	
     	</td>
     </tr>
</table>



