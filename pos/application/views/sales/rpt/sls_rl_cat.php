<?php
$CI =& get_instance();
$CI->load->model('company_model');
$model=$CI->company_model->get_by_id($this->access->cid)->row();
$date1= date('Y-m-d H:i:s', strtotime($this->input->post('txtDateFrom')));
$date2= date('Y-m-d H:i:s', strtotime($this->input->post('txtDateTo')));
$category=$this->input->post('text1');
$supplier=$this->input->post('text2');
$sql="select concat(s.category,' - ',c.category) as category_name,
sum(il.quantity) as qty_sale,
sum(il.amount) as amount_sale,sum(il.cost*il.quantity) as amount_cost,
sum(il.amount-(il.cost*il.quantity)) as profit,
(sum(il.amount-(il.cost*il.quantity))/sum(il.amount))*100 as profit_prc
from invoice i 
left join invoice_lineitems il on il.invoice_number=i.invoice_number
left join inventory s on s.item_number=il.item_number
left join inventory_categories c on c.kode=s.category
where i.invoice_type='I' and i.invoice_date between '$date1' and '$date2'  
";
if($category!="")$sql.=" and s.category='$category'";
if($supplier!="")$sql.=" and s.supplier_number='$supplier'";
$sql.=" group by concat(s.category,' - ',c.category)";

$data['content']=browse_select( array('sql'=>$sql,'show_action'=>false,
    "fields_sum"=>array("qty_sale","amount_sale","amount_cost",
    "profit")));
    
$data['caption']='RUGI LABA PENJUALAN PER CATEGORY';
echo load_view('simple_print.php',$data);    

?>
