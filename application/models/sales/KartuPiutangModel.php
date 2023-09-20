<?php 
class KartuPiutangModel extends CI_Model {
    public $group_by_customer=true;
    public $_data=null;
    public $_cmd="";
    public $_date_from="";
    public $_date_to="";
    public $_customer_number="";
    public $_invoice_number="",$_invoice=0, $_payment=0;
    public $_retur=0, $_cr_memo=0, $_db_memo=0, $_saldo=0;
    

    function __construct()
    {
         $this->load->model("customer_model");
    }
    function amount_awal(){
        $amount=0;$invoice=0;
        $s="select sum(amount) as amt1, sum(inv_amount) amt2 from invoice 
        where invoice_type = 'I'  and invoice_date<'$this->_date_from'
        and sold_to_customer='$this->_customer_number'";
        if($q=$this->db->query($s)){
            if($r=$q->row()){
                if($r->amt1==0){
                    $invoice=$r->amt2;
                } else {
                    $invoice=$r->amt1;
                }
            }
        }
        $retur=0;
        $s="select sum(amount) as amt,sum(saldo_invoice) as amt2 
        from invoice where invoice_type='R' 
        and invoice_date<'$this->_date_from' and sold_to_customer='$this->_customer_number' ";
        if($q=$this->db->query($s)){
            if($r=$q->row()){
                $retur=$r->amt;
                if($retur==0 || $retur==""){
                    $retur=$r->amt2;
                }
            }
        }
        $payment=0;
        $s="select sum(p.amount_paid) as amt from payments p 
        left join invoice i on i.invoice_number=p.invoice_number 
        where p.date_paid<'$this->_date_from' and i.sold_to_customer='$this->_customer_number' 
        and i.invoice_type='I'";
        if($q=$this->db->query($s)){
            if($r=$q->row()){
                $payment=$r->amt;
            }
        };
        $cr=0;
        $s="select sum(c.amount) as amt from crdb_memo c 
        left join invoice i on i.invoice_number=c.docnumber 
        where c.tanggal<'$this->_date_from' 
        and c.transtype='SO-CREDIT MEMO' and i.sold_to_customer='$this->_customer_number' ";
        if($q=$this->db->query($s)){
            if($r=$q->row()){
                $cr=$r->amt;
            }
        };
        $db=0;
        $s="select sum(c.amount) as amt from crdb_memo c 
        left join invoice i on i.invoice_number=c.docnumber 
        where c.tanggal<'$this->_date_from' 
        and c.transtype='SO-DEBIT MEMO' and i.sold_to_customer='$this->_customer_number' ";
        if($q=$this->db->query($s)){
            if($r=$q->row()){
                $db=$r->amt;
            }
        };
        $amount=$invoice-$payment-$retur-$cr+$db;
        if ($this->_customer_number=="admin"){
            //echo $amount;exit;

        }


        return $amount; 
        
    }
    function amount_in(){
        $amount=0;$invoice=0;
        $s="select sum(amount) as amt1, sum(inv_amount) amt2 from invoice 
        where invoice_type = 'I'  and invoice_date between '$this->_date_from' and '$this->_date_to'
        and sold_to_customer='$this->_customer_number'";
        if($q=$this->db->query($s)){
            if($r=$q->row()){
                $invoice=$r->amt1;
                if($invoice==0)$invoice=$r->amt2;
            }
        } 
        $db=0;
        $s="select sum(c.amount) as amt from crdb_memo c 
        left join invoice i on i.invoice_number=c.docnumber 
        where c.tanggal<'$this->_date_from' 
        and c.transtype='SO-DEBIT MEMO' and i.sold_to_customer='$this->_customer_number' ";
        if($q=$this->db->query($s)){
            if($r=$q->row()){
                $cr=$r->amt;
            }
        };
        $amount=$invoice+$db;

        return $amount; 
        
    }
    function amount_out(){
        $retur=0;
        $s="select sum(amount) as amt from invoice where invoice_type='R' 
        and invoice_date<'$this->_date_from' and sold_to_customer='$this->_customer_number' ";
        if($q=$this->db->query($s)){
            if($r=$q->row()){
                $retur=$r->amt;
            }
        }
        $payment=0;
        $s="select sum(p.amount_paid) as amt from payments p 
        left join invoice i on i.invoice_number=p.invoice_number 
        where p.date_paid between '$this->_date_from' and '$this->_date_to' and i.sold_to_customer='$this->_customer_number' 
        and i.invoice_type='I'";
        if($q=$this->db->query($s)){
            if($r=$q->row()){
                $payment=$r->amt;
            }
        };
        $cr=0;
        $s="select sum(c.amount) as amt from crdb_memo c 
        left join invoice i on i.invoice_number=c.docnumber 
        where c.tanggal between '$this->_date_from' and '$this->_date_to' 
        and c.transtype='SO-CREDIT MEMO' and i.sold_to_customer='$this->_customer_number' ";
        if($q=$this->db->query($s)){
            if($r=$q->row()){
                $cr=$r->amt;
            }
        };
        $amount=$payment+$retur+$cr;

        return $amount; 
        
    }
    public function load_data($date_from="",$date_to=""){
        $this->_date_from=$date_from;
        $this->_date_to=$date_to;
        $q_cust=$this->customer_model->get_all();
        if($q_cust){
            foreach($q_cust->result() as $r_cust){
                $this->_customer_number=$r_cust->customer_number;
                $awal=$this->amount_awal();
                $in=$this->amount_in();
                $out=$this->amount_out();
                $akhir=$awal+$in-$out;
                $data['customer_number']=$r_cust->customer_number;
                $data['company']=$r_cust->company;
                $data['city']=$r_cust->city;
                $data['phone']=$r_cust->phone;
                $data['street']=$r_cust->street;
                $data['amount_awal']=$awal;
                $data['amount_in']=$in;
                $data['amount_out']=$out;
                $data['amount_akhir']=$akhir;
    
                $this->_data[]=$data;

    
            }  
    
        }
        return $this->_data;
    }
    public function detail(){
        
        $s="select invoice_type AS jenis,invoice_number AS ref,invoice_number AS nobukti,
        invoice_date AS tanggal,amount,inv_amount,sold_to_customer AS customer_number 
        from invoice 
        where sold_to_customer='$this->_customer_number' and invoice_type = 'I' 
        and invoice_date between '$this->_date_from' and '$this->_date_to' ";
        
        
        if($q=$this->db->query($s)){
            foreach($q->result() as $r){
                $data['tanggal']=$r->tanggal;
                $data['jenis']='Invoice';
                $data['no_bukti']=$r->nobukti;
                $data['ref']='';
                if($r->amount>0){
                    $data['debit']=$r->amount;
                } else {
                    $data['debit']=$r->inv_amount;
                }                
                $data['credit']=0;
                $data['saldo']=0;
                $data['bayar']=0;        
                $this->_data[]=$data;
            }
        }

        $s="select invoice_type,invoice_number,invoice_date,amount,inv_amount,saldo_invoice,
        sold_to_customer 
        from invoice where sold_to_customer='$this->_customer_number' and invoice_type = 'R' 
        and invoice_date between '$this->_date_from' and '$this->_date_to' ";
        if($q=$this->db->query($s)){
            foreach($q->result() as $r){
                $data['tanggal']=$r->invoice_date;
                $data['jenis']='Retur';
                $data['no_bukti']=$r->invoice_number;
                $data['ref']='';
                $data['debit']=0;
                $amount=$r->amount;
                if($amount==0 || $amount==""){
                    $amount=abs($r->inv_amount);
                }
                if($amount==0 || $amount==""){
                    $amount=abs($r->saldo_invoice);
                }
                $data['credit']=$amount;
                $data['saldo']=0;
                $data['bayar']=0;        
                $this->_data[]=$data;
            }
        }

        $s="select p.invoice_number,p.no_bukti,p.date_paid,p.amount_paid,i.sold_to_customer 
        from payments p left join invoice i on p.invoice_number = i.invoice_number 
        where p.date_paid between '$this->_date_from'  and '$this->_date_to' 
        and i.sold_to_customer='$this->_customer_number' ";

        if($q=$this->db->query($s)){
            foreach($q->result() as $r){
                $data['tanggal']=$r->date_paid;
                $data['jenis']='Payment';
                $data['no_bukti']=$r->no_bukti;
                $data['ref']=$r->invoice_number;
                $data['debit']=0;
                $data['credit']=$r->amount_paid;
                $data['saldo']=0;
                $data['bayar']=0;        
                $this->_data[]=$data;
            }
        }

        $s="select c.docnumber,c.kodecrdb,c.tanggal,c.amount
        from crdb_memo c left join invoice i on i.invoice_number = c.docnumber
        where tanggal between '$this->_date_from' and '$this->_date_to' 
        and transtype = 'SO-CREDIT MEMO' 
        and i.sold_to_customer='$this->_customer_number' ";
        if($q=$this->db->query($s)){
            foreach($q->result() as $r){
                $data['tanggal']=$r->tanggal;
                $data['jenis']='Credit Memo';
                $data['no_bukti']=$r->kodecrdb;
                $data['ref']=$r->docnumber;
                $data['debit']=0;
                $data['credit']=$r->amount;
                $data['saldo']=0;
                $data['bayar']=0;        
                $this->_data[]=$data;
            }
        }

        $s="select c.docnumber,c.kodecrdb,c.tanggal,c.amount
        from crdb_memo c left join invoice i on i.invoice_number = c.docnumber
        where tanggal between '$this->_date_from' and '$this->_date_to' 
        and c.transtype = 'SO-DEBIT MEMO' 
        and i.sold_to_customer='$this->_customer_number' ";
        if($q=$this->db->query($s)){
            foreach($q->result() as $r){
                $data['tanggal']=$r->tanggal;
                $data['jenis']='Debit Memo';
                $data['no_bukti']=$r->kodecrdb;
                $data['ref']=$r->docnumber;
                $data['debit']=$r->amount;
                $data['credit']=0;
                $data['saldo']=0;
                $data['bayar']=0;        
                $this->_data[]=$data;
            }
        }

        return $this->_data;

    }

								
}