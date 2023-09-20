<?php
$CI =& get_instance();
$CI->load->model('supplier_model');
$CI->load->model('payables_model');
$CI->load->model('company_model');
$voucher=$payment->no_bukti;
$bill_id=$payment->bill_id;
$pay=$CI->payables_model->get_by_id($bill_id)->row();

$supplier_number=$pay->supplier_number;
$supplier=$CI->supplier_model->get_by_id($supplier_number)->row();
$model=$CI->company_model->get_by_id($CI->access->cid)->row();
$supplier_info="";
?>
<table >
    <tr><td colspan=2><b><?=strtoupper($model->company_name)?></b></td><td></td>
    <td><h1>BUKTI PEMBAYARAN HUTANG</h1></td><td></td></tr>
    <tr><td colspan=3><?=$model->street?>  </td>
        <td rowspan="5">
            <span>
                <b>Kepada Yth,</b></br>
                <?=$supplier->supplier_name.' ('.$supplier->supplier_number.')'?></br>
                <?=$supplier->street?></br>
                <?=$supplier->suite.' - '.$supplier->city?></br> 
                <?='Phone: '.$supplier->phone.' - Fax: '.$supplier->fax?></br>
                <?='Up: '.$supplier->first_name?></br> 
            </span>
        </td>
    </tr>
    <tr><td colspan=3><?="Phone: ".$model->phone_number?> <?=$model->fax_number?></td></tr>
    <tr><td colspan=3><?=$model->email?></td></tr>

		<tr>
			<td><b>Nomor Bukti: </b></td><td><b><?=$voucher?></b></td>
			<td rowspan='6'><div class='thumbnail' style='width:300px;height:100px'><?=$supplier_info?></div></td>			
		</tr>
		<tr>
			<td>Supplier: </td><td><?=$supplier_number?> - <?=$supplier->supplier_name?></td>
		</tr>
		<tr>
			<td>Tanggal Bayar: </td><td><?=$payment->date_paid?></td>
		</tr>
		<tr>
			<td>Rekening: </td><td><?=$payment->how_paid_account_id?></td>
		</tr>
		<tr>
			<td>Jenis Bayar: </td><td><?=$payment->how_paid?></td>
		</tr>
        <!--
		<tr>
			<td>Jumlah Bayar: </td><td><?=number_format($payment->amount_paid);?></td>
		</tr>
        -->
	</table>
<?php
$sql="select i.purchase_order_number,i.po_date,p.date_paid,i.amount,
p.amount_paid from payables_payments p left join purchase_order i 
on i.purchase_order_number=p.purchase_order_number
where p.no_bukti='$voucher'";
echo "<table border=1 cellpadding=3><thead><tr><td>Faktur#</td><td>Tanggal</td><td>Amount</td><td>Amt Paid</td></tr></thead>";
echo "<tbody>";
if($q=$CI->db->query($sql)){
    foreach($q->result() as $r){
        echo "<tr><td>$r->purchase_order_number</td>
        <td>$r->po_date</td>
        <td>".number_format($r->amount)."</td>
        <td>".number_format($r->amount_paid)."</td><td></td></tr>";
    }
}

echo "</tbody></table>";
?>
