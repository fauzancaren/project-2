<?php
$CI =& get_instance();
$CI->load->model('company_model');
$model=$CI->company_model->get_by_id($this->access->cid)->row();
$date1= date('Y-m-d H:i:s', strtotime($this->input->post('txtDateFrom')));
$date2= date('Y-m-d H:i:s', strtotime($this->input->post('txtDateTo')));
$category=$this->input->post('text1');
$supplier=$this->input->post('text2');
$salesman="";

$sql="select il.item_number,s.description,s.retail,
sum(il.quantity) as qty_sale,s.unit_of_measure as unit,
sum(il.amount) as amount_sale,sum(il.cost*il.quantity) as amount_cost,
sum(il.amount-(il.cost*il.quantity)) as profit,
(sum(il.amount-(il.cost*il.quantity))/sum(il.amount))*100 as profit_prc,
s.category,s.supplier_number
from invoice i 
left join invoice_lineitems il on il.invoice_number=i.invoice_number
left join inventory s on s.item_number=il.item_number
where i.invoice_type='I' and i.invoice_date between '$date1' and '$date2'  
";
if($category!="")$sql.=" and s.category='$category'";
if($supplier!="")$sql.=" and s.supplier_number='$supplier'";
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
                
$sql.=" group by il.item_number,s.description,s.retail,s.unit_of_measure,
s.category,s.supplier_number";

$data['content']=browse_select( array('sql'=>$sql,'show_action'=>false,
    "fields_sum"=>array("qty_sale","amount_sale","amount_cost",
    "profit")));
    
$data['caption']='RUGI LABA PENJUALAN PER ITEM';
echo load_view('simple_print.php',$data);    

?>
