<?php 

	$CI =& get_instance();
	$data['caption']='DAFTAR BARANG TIDAK BERGERAK';
	if(!$CI->input->post('cmdPrint')){

		$data['criteria1']=true;
		$data['label1']='Kelompok Barang';
		$data['text1']='';
         $data['key1']="kode";
         $data['fields1'][]=array("kode","80","Kode");
         $data['fields1'][]=array("category","180","Kelompok");
         $data['ctr1']='category/select';

		 $data['criteria2']=true;
		 $data['label2']='Merk';
		 $data['text2']='';

		 $data['criteria3']=true;
		 $data['label3']='x Day Not Sale';
		 $data['text3']='30';

		$data['rpt_controller']="inventory/rpt/$id";
		$CI->template->display_form_input('criteria',$data,'');
	} else {
	
		echo "<link href='".base_url()."/themes/standard/style_print.css' rel='stylesheet'>";
		$kel=$CI->input->post("text1");
		$merk=$CI->input->post('text2');
		$nday=$CI->input->post('text3');
   
		$sql="select i.item_number,i.description,i.category,
		i.quantity_in_stock as qty,i.cost,i.quantity_in_stock*i.cost as amount
			from inventory i 
			where 1=1 ";		
		if($kel!="")$sql.=" and i.category='".$kel."'";
		if($merk!="")$sql.=" and i.manufacturer='$merk'";
		$sql.=" order by description ";
		
		 if($kel==""){
		 	echo "<b>Kelompok barang harus dipilih !";
			 exit;
		 }

		 echo company_header();
		 echo "<h1>Laporan Barang Tidak Terjual</h1>";
		 echo "Criteria : Category: ".$kel;
		 
		echo "<table border=1><thead><tr><th>item_number</th><th>Description</th>
			<th>Category</th><th>Qty</th><th align='right'>Cost</th><th align='right'>Total</th>
			<th>Last Date Sale</th><th>Days</th><th>Merk</th></tr></thead>
			<tbody>
		";
		if($q=$CI->db->query($sql)){
			foreach($q->result() as $row){
				$supplier_number="";
				$manufacturer="";			
				$last_date="";
				$s="select i.invoice_date,s.manufacturer,s.supplier_number 
				from invoice i 
				left join invoice_lineitems il on il.invoice_number=i.invoice_number 
				left join inventory s on s.item_number=il.item_number
				where i.invoice_type='I' and il.item_number='$row->item_number' ";
				$s.="order by i.invoice_date desc limit 1";
				
				if($q2=$CI->db->query($s)){
					if($r2=$q2->row()){
						$last_date=$r2->invoice_date;
						$manufacturer=$r2->manufacturer;
						$supplier_number=$r2->supplier_number;
					}
				}
				if($last_date){
					$date1 = $last_date;
					$date2 = date("Y-m-d");
					
					$diff = abs(strtotime($date2) - strtotime($date1));
					
					$years = floor($diff / (365*60*60*24));
					$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
					$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

// tampilkan hanya penjualan 3 bulan kebelakang								
//					if($months>3) {}	
					$lOk=true;
					if($days<$nday && $nday>0){
						$lOk=false;
					}
					if($lOk){
					
						echo " 
							<tr><td>$row->item_number</td><td>$row->description</td>
							<td>$row->category</td><td>$row->qty</td><td align='right'>".number_format($row->cost)."</td>
							<td align='right'>".number_format($row->amount)."</td>
							<td>".date("Y-m-d",strtotime($last_date))."</td>
							<td>$days</th><td>$manufacturer</td></tr>
						";

					}
					
					
				}
			}
		}
		echo "</tbody></table>";
		
		
	}
	
?>