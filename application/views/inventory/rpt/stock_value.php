<?
//var_dump($_POST);
?>
<?
$CI =& get_instance();
if(!$CI->input->post('cmdPrint')){
	$data['criteria1']=true;
	$data['label1']='Kelompok Barang';
	$data['text1']='';
         $data['key1']="kode";
         $data['fields1'][]=array("kode","80","Kode");
         $data['fields1'][]=array("category","180","Kelompok");
         $data['ctr1']='category/select';
	$data['caption']='STOCK VALUE';
	$data['rpt_controller']="inventory/rpt/$id";
	$CI->template->display_form_input('criteria',$data,'');
} else {	
     $CI->load->model('company_model');
     $model=$CI->company_model->get_by_id($CI->access->cid)->row();
	$date1= date('Y-m-d H:i:s', strtotime($CI->input->post('txtDateFrom')));
	$date2= date('Y-m-d H:i:s', strtotime($CI->input->post('txtDateTo')));
	$supplier= $CI->input->post('text1');
?>
<link href="<?php echo base_url();?>/themes/standard/style_print.css" rel="stylesheet">
<table cellspacing="0" cellpadding="1" border="0" width='800px'> 
     <tr>
     	<td colspan='2'><h2><?=$model->company_name?></h2></td><td colspan='2'>
		<h2>DAFTAR STOCK VALUATION</h2></td>     	
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
 			<tr><td>Kode Barang</td><td>Nama Barang</td><td>Kelompok</td>
 				<td>Qty Akhir</td><td>Cost</td><td>Total Cost</td>
 			</tr>
 		</thead>
 		<tbody>
     			<?php
     			$sql="select * from inventory ";
				 if(multi_company_single_db() & cid()!="ALL"){
					 $sql.=" and cid='".cid()."'";
				 }
				 $sql.=" order by description";
				$rst_item=$CI->db->query($sql);
				foreach($rst_item->result() as $row_item){
				?>	
					<tr>
						<td><?=$row_item->item_number?></td>
						<td><?=$row_item->description?></td>
						<td><?=$row_item->category?></td>
						<td><?=$row_item->quantity_in_stock?></td>
						<td><?=$row_item->cost?></td>
						<td><?=$row_item->quantity_in_stock*$row_item->cost?></td>
						
					</tr>
				
				<?php } ?>
   		</tbody>
   		</table>
     	
     	</td>
     </tr>
</table>
<?PHP } ?>