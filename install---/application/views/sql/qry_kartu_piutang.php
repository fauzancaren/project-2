<?php
 
$table="qry_kartu_piutang";
	
$sql="CREATE  VIEW qry_kartu_piutang AS
   select invoice_type as jenis, sales_order_number as ref,invoice_number as no_bukti
  ,invoice_date as tanggal,amount,sold_to_customer as customer_number
   From invoice
  where invoice_type='I'

  Union All
  select invoice_type, your_order__,invoice_number, invoice_date,-1*abs(amount),sold_to_customer
  From invoice
  where invoice_type='R'

  Union All
  select 'P' as jenis,p.invoice_number,p.no_bukti, p.date_paid, p.amount_paid*-1, i.sold_to_customer
  from payments p
  left join invoice i on p.invoice_number=i.invoice_number
  where p.how_paid<>'1'
  
  Union All
  select 'P' as jenis,p.invoice_number,p.no_bukti, p.date_paid, p.amount_paid*-1, i.sold_to_customer
  from payments p
  left join invoice i on p.invoice_number=i.invoice_number
  left join check_writer cw on cw.voucher=p.no_bukti
  where p.how_paid='1' and cw.cleared=1
  
  

  Union All
  select 'C' as jenis,docnumber,kodecrdb,tanggal,-1*c.amount,i.sold_to_customer
  from crdb_memo c
  left join invoice i on i.invoice_number=c.docnumber
  where transtype='SO-CREDIT MEMO' and invoice_type='I'

  Union All
  select 'C' as jenis,docnumber,kodecrdb,tanggal,-1*c.amount,i.sold_to_customer
  from crdb_memo c
  left join invoice i on i.invoice_number=c.docnumber
  where transtype='SO-DEBIT MEMO' and invoice_type='I'
";
if(mysqli_query($link,$sql))$msg .="<br>-$table..OK";else $msg .="<br>-$table..<br>ERROR -" . mysqli_error($link);

$table="qry_daftar_piutang";

$sql="
CREATE        view qry_daftar_piutang as
 select i.invoice_number,invoice_date,sold_to_customer,payment_terms,salesman,
 tax,freight,other,i.uang_muka*-1 as UangMuka,i.inv_amount,
 invoice_date+p.days as JatuhTempo,
 ( 
    select date_paid from payments 
    where invoice_number=i.invoice_number limit 1
	 ) last_pay_date,
 datediff(invoice_date+p.days,now()) as JTDays,
 pay.amount*-1 as PayAmt,
 ret.amount*-1 as Retur,
 crdb.amount*-1 as CrMemo,
 crdb2.amount as DbMemo ,i.ship_to_customer,i.comments,
 if(i.paid,0,1) as unpaid_invoice_count
 from invoice i
 left join type_of_payment p on i.payment_terms=p.type_of_payment
 left join (
    select docnumber,sum(amount) as amount
    From CRDB_Memo
    where transtype='SO-CREDIT MEMO'
    group by docnumber
    ) crdb on crdb.docnumber=i.invoice_number
 left join (
    select your_order__,sum(inv_amount) as amount
    From invoice
    where invoice_type='R'
    group by your_order__
    ) ret on ret.your_order__=i.invoice_number
 left join (
    select invoice_number,sum(amount_paid) as amount
    From payments
    group by invoice_number
    ) pay on pay.invoice_number=i.invoice_number
 left join (
    select docnumber,sum(amount) as amount
    From crdb_memo
    where transtype='SO-DEBIT MEMO'
    group by docnumber
    ) crdb2 on crdb2.docnumber=i.invoice_number
 where invoice_type='I'
 and ltrim(upper(i.payment_terms)) not in ('','CASH','KONTAN','TUNAI')

";
if(mysqli_query($link,$sql))$msg .="<br>-$table..OK";else $msg .="<br>-$table..<br>ERROR -" . mysqli_error($link);

?>