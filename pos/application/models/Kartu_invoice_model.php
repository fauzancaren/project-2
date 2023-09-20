<?php
class Kartu_invoice_model extends CI_Model {

	public $_invoice_number="",$_sold_to_customer="",$_salesman="";
	public $_date_from="",$_date_to="";
	public $_order_by="";

	function __construct(){
		parent::__construct();          
	    
	}
	function load_data(){
		$data=null;
		$s="SELECT i.invoice_date,i.invoice_number,ucase(i.sold_to_customer) as sold_to_customer,
		c.company,i.due_date,i.payment_terms,i.salesman, 
		IF((COALESCE(`i`.`amount`,0) = 0),i.inv_amount,i.amount) AS amount,
		i.sales_order_number,0 as payment,
		0 as `retur`,0 as cr_amount,0 as db_amount
		FROM invoice i
		LEFT JOIN customers c ON c.customer_number=i.sold_to_customer
		WHERE i.invoice_type='I'";
		if($this->_invoice_number!="")$s.=" and i.invoice_number='$this->_invoice_number' ";
		if($this->_date_from!="")$s.=" and i.invoice_date>'$this->_date_from' ";
		if($this->_date_to!="")$s.=" and i.invoice_date<'$this->_date_to' ";
		if($this->_sold_to_customer!="")$s.=" and i.sold_to_customer='$this->_sold_to_customer' ";
		if($this->_salesman!="")$s.=" and i.salesman='$this->_salesman' ";
		if($this->_order_by!="")$s.=" order by $this->_order_by ";
		if($q=$this->db->query($s)){
			foreach($q->result() as $r){
				$this->_invoice_number=$r->invoice_number;
				$this->_sold_to_customer=$r->sold_to_customer;				
				$d=(array)$r;
				$this->_date_from="";
				$this->_date_to="";
				$this->_salesman="";
				$this->_sold_to_customer="";
				$d['payment']=$this->payment();
				$d['retur']=$this->retur();
				$d['cr_amount']=$this->cr_memo();
				$d['db_amount']=$this->db_memo();
				$data[]=(object)$d;
			}
		}
		return $data;
	}
	function payment(){
		$s="select sum(p.amount_paid) as z_amt from payments p  
		join invoice i on i.invoice_number=p.invoice_number
		 where 1=1 ";
		if($this->_invoice_number!="")$s.=" and p.invoice_number='$this->_invoice_number' ";
		if($this->_date_from!="")$s.=" and p.date_paid>'$this->_date_from' ";
		if($this->_date_to!="")$s.=" and p.date_paid<'$this->_date_to' ";
		if($this->_sold_to_customer!="")$s.=" and i.sold_to_customer='$this->_sold_to_customer' ";
		if($this->_salesman!="")$s.=" and i.salesman='$this->_salesman' ";
		$amt=0;
		if($q=$this->db->query($s)){
			if($r=$q->row()){
				$amt=$r->z_amt;
			}
		}
		return $amt;
	}
	function retur(){
		$s="select sum(if(coalesce(i.amount,0)=0,i.inv_amount,i.amount)) as z_amt 
		from invoice i where i.invoice_type='R' ";
		if($this->_invoice_number!="")$s.=" and i.your_order__='$this->_invoice_number' ";
		if($this->_date_from!="")$s.=" and i.invoice_date>'$this->_date_from' ";
		if($this->_date_to!="")$s.=" and i.invoice_date<'$this->_date_to' ";
		if($this->_sold_to_customer!="")$s.=" and i.sold_to_customer='$this->_sold_to_customer' ";
		if($this->_salesman!="")$s.=" and i.salesman='$this->_salesman' ";
		$amt=0;
		if($q=$this->db->query($s)){
			if($r=$q->row()){
				$amt=$r->z_amt;
			}
		}
		return $amt;

	}
	function cr_memo(){
		$s="select sum(c.amount) as z_amt from crdb_memo c 
		where transtype='SO-CREDIT MEMO' ";
		if($this->_invoice_number!="")$s.=" and c.docnumber='$this->_invoice_number' ";
		if($this->_date_from!="")$s.=" and c.tanggal>'$this->_date_from' ";
		if($this->_date_to!="")$s.=" and c.tanggal<'$this->_date_to' ";

		$amt=0;
		if($q=$this->db->query($s)){
			if($r=$q->row()){
				$amt=$r->z_amt;
			}
		}
		return $amt;
	}
	function db_memo(){
		$s="select sum(c.amount) as z_amt from crdb_memo c 
		where transtype='SO-DEBIT MEMO' ";
		if($this->_invoice_number!="")$s.=" and c.docnumber='$this->_invoice_number' ";
		if($this->_date_from!="")$s.=" and c.tanggal>'$this->_date_from' ";
		if($this->_date_to!="")$s.=" and c.tanggal<'$this->_date_to' ";

		$amt=0;
		if($q=$this->db->query($s)){
			if($r=$q->row()){
				$amt=$r->z_amt;
			}
		}
		return $amt;

	}

}
