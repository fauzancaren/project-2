<?php
class Promosi_point_model extends CI_Model {

	private $primary_key='promosi_code';
	private $table_name='promosi_disc';

	function __construct(){
		parent::__construct();        
		$this->load->model('sales/promosi_model');
		$this->load->model('sales/promosi_item_model');
		$this->load->model('sales/promosi_customer_model');
		$this->load->model('invoice_lineitems_model');
        
	}
	function count_all(){
		return $this->db->count_all($this->table_name);
	}
	function get_by_id($id){
		$this->db->where($this->primary_key,$id);
		return $this->db->get($this->table_name);
	}
	function save($data){
		$this->db->insert($this->table_name,$data);
		return $this->db->insert_id();
	}
	function update($id,$data){
		$this->db->where($this->primary_key,$id);
		$this->db->update($this->table_name,$data);
	}
	function delete($id){
		$this->db->where($this->primary_key,$id);
		$this->db->delete($this->table_name);
	}
	function datalist(){
		$ret['']='- Select -';
		$this->db->where("category",6);
		if($query=$this->db->get($this->table_name))
		{
			foreach ($query->result() as $row){
				$ret[$row->promosi_code]=$row->description;
			}
		}			
		return $ret;
	}	
	function recalc_invoice($invoice_number,$debug=false){
		$retval=false;
		$gudang=cid();
		if(!$fkt=$this->invoice_model->get_by_id($invoice_number)->row()){
			//not found 
			return $retval;
		}
		$gudang=$fkt->warehouse_code;
		if(!$cst=$this->customer_model->get_by_id($fkt->sold_to_customer)->row()){
			//not found
			return $retval;
		}
		if(!$promoq=$this->promosi_model->today_promo_point()){
			//not found 
			return $retval;
		}
		
		foreach($promoq->result() as $promo){
			if($debug)echo "</br>PromoCode: $promo->promosi_code, MaxSales: $promo->total_sales, Qty: $promo->qty";
			$ok=false;
			$all_item=$promo->flag1;
			$all_cust=$promo->flag2;
			$exclude_cash=$promo->flag3;
			$amount=$fkt->amount;
			$item_number="";
			//level 1: cari customer
			if(!$all_cust){
				$ok = $this->promosi_customer_model
					  ->exist($promo->promosi_code, $fkt->sold_to_customer);
			}
			//level 2: cari item 
			if(!$all_item){
				$amount_item=0;
				if($qfkt_item=$this->invoice_lineitems_model->get_by_nomor($invoice_number)){
					foreach($qfkt_item->result() as $fkt_item){
						if($gudang=='')$gudang=$fkt_item->warehouse_code;	
						if($debug)echo "<br>Faktur: $invoice_number, Item: $fkt_item->item_number, 
							- $fkt_item->description,$fkt_item->line_number, 
							Amount: $fkt_item->amount, Gudang: $fkt_item->warehouse_code";
						if($this->promosi_item_model
							->exist($promo->promosi_code,$fkt_item->item_number)) 
						{
							$amount_item=$amount_item+$fkt_item->amount;	
							$item_number=$fkt_item->item_number;
							if($debug)echo ", found: promo: $promo->promosi_code, AmtItem: $amount_item";
						}
						
					}
				}
				if($amount_item>0){
					$ok=true;
					$amount=$amount_item;
				}
			}
			// level 3: jika bukan customer CASH
			if($exclude_cash && strtolower($this->sold_to_customer)=="cash"){
				$retval=false;
			}
			
			if($ok){
				//calc
				$point=0;
				if($amount>0 && $promo->total_sales>0){
					$point=round($amount/$promo->total_sales,0,PHP_ROUND_HALF_DOWN);
					if($point<1)$point=0;
					$point=$point*$promo->qty;
				}
				if($point>0){
								
					$data['ref1']=$invoice_number;
					$data['tanggal']=$fkt->invoice_date;
					$data['cust_code']=$fkt->sold_to_customer;
					$data['jenis_transaksi']='reward';
					$data['point']=$point;
					$data['ref1']=$invoice_number;
					$data['ref2']=$item_number;
					$data['ref3']=$gudang;
					$data['amount']=$amount;
					if($q=$this->db->where("ref1",$invoice_number)
						->get('promosi_point_transactions')){
							if($r=$q->row()){
								$retval = $this->db->where("ref1",$invoice_number)
								->update("promosi_point_transactions",$data);
							} else {
								$retval = $this->db->insert("promosi_point_transactions",$data);								
							}
						}
				}
			}
			
		}
		return $retval;
	}
} 