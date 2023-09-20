<?php
$CI =& get_instance();
$CI->load->model('customer_model');
$CI->load->model('payment_model');
$CI->load->model('company_model');
$CI->load->model('invoice_model');
$CI->load->model('check_writer_model');
$voucher=$payment->no_bukti;
$cw=$CI->check_writer_model->get_by_id($voucher)->row();
$trans_type=$cw->trans_type;
$payments=$CI->payment_model->get_by_no_bukti($voucher);
$pay_row=$payments->row();
$invoice_number=$pay_row->invoice_number;
$invoice=$CI->invoice_model->get_by_id($invoice_number)->row();
$customer_number=$invoice->sold_to_customer;
$customer=$CI->customer_model->get_by_id($customer_number)->row();
$model=$CI->company_model->get_by_id($CI->access->cid)->row();
$customer_info="";
?>
<table >
    <tr><td colspan=2><b><?=strtoupper($model->company_name)?></b></td><td></td>
    <td><h1>BUKTI PEMBAYARAN PIUTANG</h1></td><td></td></tr>
    <tr><td colspan=3><?=$model->street?>  </td>
        <td rowspan="5">
            <span>
                <b>Kepada Yth,</b></br>
                <?=$customer->customer_number.' ('.$customer->company.')'?></br>
                <?=$customer->street?></br>
                <?=$customer->suite.' - '.$customer->city?></br> 
                <?='Phone: '.$customer->phone.' - Fax: '.$customer->fax?></br>
                <?='Up: '.$customer->first_name?></br> 
            </span>
        </td>
    </tr>
    <tr><td colspan=3><?="Phone: ".$model->phone_number?> <?=$model->fax_number?></td></tr>
    <tr><td colspan=3><?=$model->email?></td></tr>

		<tr>
			<td><b>Nomor Bukti: </b></td><td><b><?=$voucher?></b></td>
			<td rowspan='6'><div class='thumbnail' style='width:300px;height:100px'><?=$customer_info?></div></td>			
		</tr>
		<tr>
			<td>Customer: </td><td><?=$customer->customer_number?> - <?=$customer->company?></td>
		</tr>
		<tr>
			<td>Tanggal Bayar: </td><td><?=$cw->check_date?></td>
		</tr>
		<tr>
			<td>Rekening: </td><td><?=$cw->account_number?></td>
		</tr>
		<tr>
			<td>Jenis Bayar: </td><td><?=$cw->trans_type?></td>
		</tr>
        <!--
		<tr>
			<td>Jumlah Bayar: </td><td><?=number_format($cw->payment_amount);?></td>
		</tr>
        -->
	</table>
<?php
    $sql="select i.invoice_number,i.invoice_date,p.date_paid,i.amount,
    p.amount_paid from payments p left join invoice i on i.invoice_number=p.invoice_number
    where p.no_bukti='$voucher'";

echo "<table border=1 cellpadding=3><thead><tr><td>Faktur#</td><td>Tanggal</td><td>Amount</td><td>Amt Paid</td></tr></thead>";
echo "<tbody>";
if($q=$CI->db->query($sql)){
    foreach($q->result() as $r){
        echo "<tr><td>$r->invoice_number</td>
        <td>$r->invoice_date</td>
        <td>".number_format($r->amount)."</td>
        <td>".number_format($r->amount_paid)."</td><td></td></tr>";
    }
}

echo "</tbody></table>";
?>
