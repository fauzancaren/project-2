<?php
     $CI =& get_instance();
     $CI->load->model('company_model');
     $model=$CI->company_model->get_by_id($CI->access->cid)->row();
	$date1= date('Y-m-d H:i:s', strtotime($CI->input->post('txtDateFrom')));
	$date2= date('Y-m-d H:i:s', strtotime($CI->input->post('txtDateTo')));
    $salesman=$CI->input->post("text1");
    $customer=$CI->input->post("text2");
    $outlet=$CI->input->post("text3");
    $category=$CI->input->post("text4");
    $region=$CI->input->post("text5");
   
?>
<link href="<?php echo base_url();?>/themes/standard/style_print.css" rel="stylesheet">
<table cellspacing="0" cellpadding="1" border="0" width='800px'> 
     <tr>
     	<td colspan='2'><h2><?=$model->company_name?></h2></td><td colspan='2'>
     		<h2>PENJUALAN PER WILAYAH, KATEGORI</h2></td>     	
     </tr>
     <tr>
     	<td>
     		Criteria: Dari Tanggal: <?=$date1?> s/d : <?=$date2?>
            Wilayah: <?=$region?>, Category: <?=$category?>        
     		
     	</td>
     </tr>
     <tr><td colspan=4 style='border-bottom: black solid 1px'></td></tr>
     <tr>
     	<td colspan="8">
	     		<table class='titem'>
	     		<thead>
	     			<tr>
	     				<td>Category</td><td>Wilayah</td>
	     				<td align=right>Target</td><td align='right'>Omset</td>
	     				<td align=right>%</td>
	     			</tr>
	     		</thead>
	     		<tbody>
     			<?
     			$sql="select r.region_name,cat.category,
     			sum(il.amount) as z_omset
     			 from invoice i left join customers c on c.customer_number=i.sold_to_customer
     			 left join invoice_lineitems il on il.invoice_number=i.invoice_number
     			 left join inventory stk on stk.item_number=il.item_number
     			 left join inventory_categories cat on cat.kode=stk.category
     			 left join region r on r.region_id=c.region     			 
	            where i.invoice_type='I' and i.invoice_date between '$date1' and '$date2'  ";
                if($customer!="")$sql.=" and i.sold_to_customer='$customer'";
                if($outlet!="")$sql.=" and i.warehouse_code='$outlet'";
                if($category!="")$sql.=" and stk.category='$category'";
                if($region!="")$sql.=" and c.region='$region'";
				$logged_in=$this->session->userdata('logged_in');
				if($logged_in['flag1']=='1'){
					$salesman=$logged_in['username'];
					$CI->load->model("salesman_model");
					$salesman_uid="";
					$qs=$CI->salesman_model->get_by_user_id($salesman);
					if($rs=$qs->row()){
						$salesman=$rs->salesman;
					}
					$sql2=" and i.salesman='$salesman'";
					
					$CI->load->model("user_model");
					$sql3=$CI->user_model->get_sales_by_spv($logged_in['user_id']);
					if($sql3!=""){
						$sql2=" and i.salesman in ($sql3)";
					}
					$sql.=$sql2;

				} else {
					if($salesman!="")$sql.=" and i.salesman='" . $salesman . "'";
				}                
                
    			$sql.=" group by stk.category,r.region_name";
				
                 
                
     			$rst_so=$CI->db->query($sql);
     			$tbl="";
				$total=0;
				$region_new="";
				$region_old="";
				$cat_new="";				$cat_old="";
				$start_header=false;
				$sub_total=0;
                 foreach($rst_so->result() as $row){
                 		
	             	if($cat_old!="".$row->category){
                 		$tbl.="<tr><td colspan=3><b>SUB TOTAL [$cat_old]</b></td><td align=right><b>".number_format($sub_total,2)."</b></td></tr>";
						$cat_old=$row->category;
                 		$start_header=true;
                 		$sub_total=0;
                 	}
                 		
                 		
                 	
                 	
                 	$cat_new=$row->category;
                 	$target=0;
                 	$omset_prc=0;
                 	if($target>0)$omset_prc=$row->z_omset/$target*100;
                    $tbl.="<tr>";
                    $tbl.="<td>$row->category</td>";
                     $tbl.="<td>$row->region_name</td>";
                    $tbl.="<td align='right'>".number_format($target)."</td>";
                    $tbl.="<td align='right'>".number_format($row->z_omset,2)."</td>";
                    $tbl.="<td align='right'>".number_format($omset_prc,2)."</td>";


					$total+=$row->z_omset;
					$sub_total+=$row->z_omset;
					
					if($region_old!=$row->region_name && $start_header){
						//$tbl.="<tr><td colspan=5>SUB TOTAL [$row->region_name]</td></tr>";
                 		//$region_old=$row->region_name;
						//$start_header=false;
					}
                $tbl.="</tr>";
               };
         		$tbl.="<tr><td colspan=3><b>SUB TOTAL [$region_old]</b></td><td align=right><b>".number_format($sub_total,2)."</b></td></tr>";
			   $tbl.="<tr><td><b>TOTAL</b></td><td>.</td><td>.</td>
			   <td align=right><b>".number_format($total,2)."</b></td><td>.</td></tr>";
			   echo $tbl;
				   				   				   
			?>	
				</tbody>
     		</table>
     	
     	</td>
     </tr>
</table>
