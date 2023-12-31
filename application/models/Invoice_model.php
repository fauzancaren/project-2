<?php
class Invoice_model extends CI_Model {

private $primary_key='invoice_number';
private $table_name='invoice';

public $amount_paid=0;
public $amount_paid_giro_belum_cair=0;
public $amount_paid_giro_cair=0;
public $retur_amount=0;
public $crdb_amount=0,	$cr_amount=0,	$db_amount=0;
public $saldo=0;
public $amount=0;
public $sub_total=0;
public $warehouse_code='';
public $disc_amount_1=0;
public $tax=0;
function __construct(){
	parent::__construct();        
      
    $this->load->model("periode_model");
    $this->load->model('jurnal_model');
    $this->load->model('chart_of_accounts_model');
    $this->load->model('company_model');
    $this->load->model('invoice_lineitems_model');
    $this->load->model('payment_model');
    $this->load->model('crdb_model');
    
}
 
function recalc($nomor){	
	if($nomor=='undefined')$nomor=$this->session->userdata('invoice_number');
	$nomor=urldecode($nomor);
    $inv=$this->get_by_id($nomor)->row();	
    if(!$inv)return 0; 

	$getdata=$this->input->get();
	$this->invoice_lineitems_model->check_revenue_acct($nomor,$inv->invoice_type);
	if(isset($getdata["discount"]))$inv->discount=c_($this->input->get("discount"));
	if(isset($getdata["freight"]))$inv->freight=c_($this->input->get("freight"));
	if(isset($getdata["tax"]))$inv->sales_tax_percent=c_($this->input->get("tax"));
	
	$this->sub_total=$this->invoice_lineitems_model->sum_total_price($nomor);
	if($inv->discount=='')$inv->discount=0;
	if($inv->sales_tax_percent=='')$inv->sales_tax_percent=0;
	
	if($inv->discount>1)$inv->discount=$inv->discount/100;
	$this->disc_amount_1=$inv->discount*$this->sub_total;
	
	$this->amount=$this->sub_total-$this->disc_amount_1;
	
	if($inv->sales_tax_percent>1)$inv->sales_tax_percent=$inv->sales_tax_percent/100;
	$this->tax=$inv->sales_tax_percent*$this->amount;
	
	$this->amount=$this->amount+$this->tax;
	
	$this->amount=$this->amount+$inv->freight;
	$this->amount=$this->amount+$inv->other;

	$this->amount_paid=$this->payment_model->total_amount($nomor);
	$this->amount_paid_giro_cair=$this->payment_model->total_amount_giro_cair($nomor);
	$this->amount_paid_giro_belum_cair=$this->payment_model->total_amount_giro_belum_cair($nomor);
	
	$this->retur_amount=$this->total_retur($nomor);

	$this->db_memo=$this->crdb_model->amount_sum($nomor,"SO-DEBIT MEMO");
	$this->cr_memo=$this->crdb_model->amount_sum($nomor,"SO-CREDIT MEMO");
	$this->crdb_amount = $this->db_memo-$this->cr_memo;
	
	$this->saldo=$inv->amount-$this->amount_paid-$this->amount_paid_giro_cair
		-$this->retur_amount
		+$this->crdb_amount;
		
	//typenya integer jadi paka 0=false, -1=true
	if($this->saldo==0 && $this->amount_paid>0){
		$dInv['paid']=-1;
	} else {
		$dInv['paid']=0;			
	}
	$dInv['amount']=$this->amount;
	$dInv['inv_amount']=$this->amount;
	$dInv['subtotal']=$this->sub_total;
	$dInv['saldo_invoice']=$this->saldo;
	$dInv['disc_amount_1']=$this->disc_amount_1;
	$dInv['discount']=$inv->discount;
	$dInv['sales_tax_percent']=$inv->sales_tax_percent;
	$dInv['disc_amount']=$this->disc_amount_1;
	//field posted jgn ikut
	if(isset($dInv['posted']))unset($dInv['posted']);
	
	$this->db->where("invoice_number",$nomor)->update($this->table_name,$dInv);
	
	//echo "Inv: $nomor, Amt: $this->amount, Pay: $this->amount_paid, 
	//	Retur: $this->retur_amount, CrDb: $this->crdb_amount, Saldo: $this->saldo ";
	$this->load->model('sales/promosi_point_model');
	$this->promosi_point_model->recalc_invoice($nomor);

	return $this->saldo;
 
}
	function total_retur($nomor)
	{
		$q=$this->db->query("select sum(amount) as sum_amt from invoice where invoice_type='R' 
			and your_order__='$nomor'")->row();
		if($q){
			return $q->sum_amt;
		} else {
			return 0;
		}
	}
	function paid_amont($faktur){
		return $this->payment_model->total_amount($faktur);
	}
	function retur_amount($faktur){
		return $this->total_retur($faktur);
	}
	function crdb_amount($faktur){
        return $this->crdb_amount;
	}
	
function get_paged_list($limit=10,$offset=0,
$order_column='',$order_type='asc')
{
    $nama='';
    if(isset($_GET['nama'])){
        $nama=$_GET['nama'];
    }
    $this->db->select('i.invoice_number,i.invoice_date,i.sold_to_customer,
        c.company,i.amount');
    $this->db->join('customers c','c.customer_number=i.sold_to_customer','left');
    $this->db->from('invoice i');
    if($nama!='') $this->db->where("c.company like '%$nama%' 
            or i.[invoice number] like '%$nama%'
            ");
    if (empty($order_column)||empty($order_type))
    { 
        $this->db->order_by($this->primary_key,'asc');
    } else {
        $this->db->order_by($order_column,$order_type);
    }
    return $this->db->get('',$limit,$offset);
}
function count_all(){
	return $this->db->count_all($this->table_name);
}

function get_by_id($id){
	 
	$this->db->where($this->primary_key,$id);
	return $this->db->get($this->table_name);
}
function save($data){
	$data['cid']=cid();
	if($data['cid']=='ALL')unset($data['cid']);
	
	$id=$data['invoice_number'];
	if(isset($data['warehouse_code'])){
		$gudang=$data['warehouse_code'];	
		$this->db->query("update invoice_lineitems set warehouse_code='$gudang' 
			where invoice_number='$id'");			
			//unset($data['warehouse_code']);
	} else {
		$r_item=$this->db->query("select warehouse_code from invoice_lineitems 
			where invoice_number='$id' limit 1")->row();
		if($r_item)	{
			$data['warehouse_code']=$r_item->warehouse_code;
		}
	}
	$terms="CASH";
	if(isset($data['payment_terms']))$terms=$data['payment_terms'];
	$due_date=due_date($data['invoice_date'],$terms);
	$data['due_date']=$due_date;
	$data['due_date']= date( 'Y-m-d H:i:s', strtotime($data['due_date']));
	$data['invoice_date']= date('Y-m-d H:i:s', strtotime($data['invoice_date']));
	if(isset($data['due_date']))$data['due_date']= date('Y-m-d H:i:s', strtotime($data['due_date']));
	if(isset($data['amount']))$data['amount']=c_($data['amount']);
	if(isset($data['disc_amount_1']))$data['disc_amount_1']=c_($data['disc_amount_1']);
	if(isset($data['other']))$data['other']=c_($data['other']);
	if(isset($data['freight']))$data['freight']=c_($data['freight']);
	if(isset($data['tax']))$data['tax']=c_($data['tax']);
    if(!isset($data['inv_amount']))$data["inv_amount"]=0;
	if($data['inv_amount']>0 && $data['amount']==0){
		$data['amount']=$data['inv_amount'];
	}	
//	$this->db->insert($this->table_name,$data);
//	echo $this->db->_error_message();
//	return $this->db->insert_id();

	$ok = $this->db->insert($this->table_name,$data);
	invoice_need_update($data['invoice_number']);
	if(isset($data['sold_to_customer'])){
		customer_need_update($data['sold_to_customer']);
	}
	
	
	return $ok;
}
    function save_item($data){
        $ok=$this->invoice_lineitems_model->save($data);
        return $ok;
    }

    
function update($id,$data){
	$data['cid']=cid();
	if($data['cid']=='ALL')unset($data['cid']);
	
	if(isset($data['warehouse_code'])){
		$gudang=$data['warehouse_code'];	
		$this->db->query("update invoice_lineitems set warehouse_code='$gudang' 
			where invoice_number='$id'");			
			//unset($data['warehouse_code']);
	} else {
		$r_item=$this->db->query("select warehouse_code from invoice_lineitems 
			where invoice_number='$id' limit 1")->row();
		if($r_item)	{
			$data['warehouse_code']=$r_item->warehouse_code;
		}
	}
	if(!isset($data['invoice_date'])){
		//what this? jadi ketiban tanggalnya kalo hanya simpan amount
		$data['invoice_date']= date('Y-m-d H:i:s');
		
	}
	if(isset($data['invoice_date'])) {
		$data['invoice_date']= date('Y-m-d H:i:s', strtotime($data['invoice_date']));		
	}
	$data['amount']=isset($data['amount'])?c_($data['amount']):0;
	$data['disc_amount_1']=isset($data['disc_amount_1'])?c_($data['disc_amount_1']):0;	
	$data['other']=isset($data['other'])?c_($data['other']):0;
	$data['freight']=isset($data['freight'])?c_($data['freight']):0;
	$data['tax']=isset($data['tax'])?c_($data['tax']):0;
    if(!isset($data['inv_amount']))$data["inv_amount"]=0;
	if($data['inv_amount']>0 && $data['amount']==0){
		$data['amount']=$data['inv_amount'];
	}
	$terms="CASH";
	if(isset($data['payment_terms']))$terms=$data['payment_terms'];
	$due_date=due_date($data['invoice_date'],$terms);
	$data['due_date']=$due_date;
	$data['due_date']= date( 'Y-m-d H:i:s', strtotime($data['due_date']));
    
	$this->db->where($this->primary_key,$id);
	$ok = $this->db->update($this->table_name,$data);
	
	if(isset($data['sold_to_customer'])){
		customer_need_update($data['sold_to_customer']);
	}
	
	invoice_need_update($data['invoice_number']);
	
		
	return $ok;
}
function delete($id){
   	$this->db->where($this->primary_key,$id);
	$this->db->delete('invoice_lineitems');
	        
	$this->db->where($this->primary_key,$id);
	$this->db->delete($this->table_name);
}

    function add_item($id,$item,$qty){
        $sql="select description,retail,cost,unit_of_measure
            from inventory
            where item_number='".$item."'";
        
        $query=$this->db->query($sql);
        $row = $query->row_array(); 
         
        $data = array('invoice_number' => $id, 'item_number' => $item, 
            'quantity' => $qty,'description'=>$row['description'],
            'price' => $row['retail'],'amount'=>$row['retail']*$qty,
            'unit'=>$row['unit_of_measure']
            );
        $str = $this->db->insert_string('invoice_lineitems', $data);
        $query=$this->db->query($str);
    }
    function del_item($line){
        $query=$this->db->query("delete from invoice_lineitems
            where line_number=".$line);
    }
	function save_item_so($so,$faktur){
		$success=false;
		if($q=$this->sales_order_model->get_items($so)){
			$qty=null;
			$line=null;		$ship=null;
			$gdg=null;		$unit=null;
			foreach($q->result() as $row){
				$qty[]=$row->quantity;
				$line[]=$row->line_number;
				$gdg[]=$row->warehouse_code;
				$unit[]=$row->unit;
				$ship_date=$row->ship_date;
			}
		}
		$success=$this->save_from_so_items($faktur,$qty,$line,$gdg,
			$ship_date,$unit);
		$success=true;
		return $success;
	}
	function save_from_so_items($faktur,$qty_order,$from_so_line,$gudang,
		$ship_date,$qty_unit){
		
		if (!$qty_order) return false;
		
		$this->load->model('sales_order_lineitems_model');
		$this->load->model('inventory_model');
		$this->load->model('invoice_lineitems_model');
		for($i=0;$i<count($qty_order);$i++){
			$line_number=$from_so_line[$i];
			$qty_do=$qty_order[$i];
			
			if($line_number>0){
				if($qty_do>0) {
					$so=$this->sales_order_lineitems_model->get_by_id($line_number)->row();
					$unit="Pcs";
					if($item=$this->inventory_model->get_by_id($so->item_number)->row()){
						$unit=$item->unit_of_measure;
					}
					
					$data['invoice_number']=$faktur;
					$data['item_number']=$so->item_number;
					$data['description']=$so->description;
					$data['unit']=$so->unit;
					if($qty_unit[$i]!=""){
						$data['unit']=$qty_unit[$i];
					}
					if($data['unit']=='')$data['unit']=$unit;
					
					
					
					$data['quantity']=$qty_do;
					$data['price']=$so->price;
					$data['discount']=$so->discount;
					$data['discount_amount']=$so->discount_amount;
					$data['disc_2']=$so->disc_2;
					$data['disc_amount_2']=$so->disc_amount_2;
					$data['disc_3']=$so->disc_3;
					$data['disc_amount_3']=$so->disc_amount_3;
					$data['mu_qty']=$so->mu_qty;
					$data['mu_harga']=$so->mu_harga;
					$data['multi_unit']=$so->multi_unit;
					
					$data['amount']=$data['quantity']*$data['price'];
					$data['warehouse_code']=$gudang;	
					$data['from_line_number']=$line_number;
					$data['from_line_doc']=$so->sales_order_number;
					$data['from_line_type']="SO";
					$data['ship_date']=date('Y-m-d H:i:s', strtotime($ship_date));
					if($line_number>0){
						$line_number_faktur=0;
						$s="select line_number from invoice_lineitems 
						where from_line_number='$line_number' and from_line_doc='$so->sales_order_number'";
						if($q=$this->db->query($s)){
							if($r=$q->row()){
								$line_number_faktur=$r->line_number;
								$data['line_number']=$line_number_faktur;
							}
						}
						if($line_number_faktur==0){
							$s="select line_number from invoice_lineitems 
							where invoice_number='$so->sales_order_number' 
							and item_number='$so->item_number'";
							if($q=$this->db->query($s)){
								if($r=$q->row()){
									$line_number_faktur=$r->line_number;
									$data['line_number']=$line_number_faktur;
								}
							}
							
						}
						
						
					} 
					$this->invoice_lineitems_model->save($data);
					$this->db->query("update sales_order_lineitems set ship_date='".$data['ship_date']."' 
					 where line_number='".$so->line_number."'");
				 }
			}
		}
	}
	function unposting($nomor) {
		$saldo=$this->invoice_model->recalc($nomor);
		$faktur=$this->invoice_model->get_by_id($nomor)->row();
        if(!$faktur){
            echo "Faktur $nomor tidak ada !";
            return false;
        }

		$this->load->model("periode_model");
		if($this->periode_model->closed($faktur->invoice_date)){
			echo "ERR_PERIOD";
			return false;
		}
		// validate jurnal
		$this->load->model('jurnal_model');
		
		if($this->jurnal_model->del_jurnal($nomor)) {
			$sql="update invoice set posted=false where invoice_number='$nomor'";
			$this->db->query($sql);
		} 
	
	}
	function unposting_range_date($date_from,$date_to){
		$this->load->model('jurnal_model');
		$date_from=date('Y-m-d H:i:s', strtotime($date_from));
		$date_to=date('Y-m-d H:i:s', strtotime($date_to));
		$s="select invoice_number 
		from invoice where invoice_type='I' 
		and invoice_date between '$date_from' and '$date_to' and posted=true 
		order by invoice_number";
		$rst_inv_hdr=$this->db->query($s);
		if($rst_inv_hdr){
			foreach ($rst_inv_hdr->result() as $r_inv_hdr) {
				$this->unposting($r_inv_hdr->invoice_number);
				echo "<br>Delete Jurnal: ".$r_inv_hdr->invoice_number;
			}
		}
        if($this->show_finish_message){
        
		echo "<legend>Finish.</legend><div class='alert alert-info'>
		<p>Apabila tidak ada kesalahan silahkan close tab ini.
		<a class='btn btn-primary' href='#' onclick='remove_tab_parent(); return false;'> Close </a>.		
		</p>
		</div>"; 
        
        }
        
	}
	function posting($nomor,$recalc=true) {
	 
		if($recalc) $saldo=$this->recalc($nomor);
		$faktur=$this->get_by_id($nomor)->row();
		$message="";
        if(!$faktur){
            $message="Tidak bisa posting karena nomor faktur tidak ada [$nomor].<br>";
            return $message;
            
            
        }
		if($this->periode_model->closed($faktur->invoice_date)){
			$message="Tidak bisa posting karena periode sudah ditutup.<br>";
			return $message;
		}

		$cid=$this->access->cid;
		$set=$this->company_model->get_by_id($cid)->row();
		 

		$coa_tax=$set->so_tax;
		$coa_freight=$set->so_freight;
		$coa_other=$set->so_other;
		$coa_ar=$set->accounts_receivable;
		$coa_disc=$set->so_discounts_given;
		$coa_sales=$set->inventory_sales;
		$coa_stock=$set->inventory;
		$coa_hpp=$set->inventory_cogs;
		$coa_cash=$set->default_cash_payment_account;
		$amount=nz($faktur->amount);
		if($amount==0){
			$amount=nz($faktur->inv_amount);
		}
		$coa_komisi=$this->sysvar->getvar("COA Hutang Komisi");
		if(c_($coa_cash)==0){
			$coa_cash=$coa_ar;
		}
		$detail=$this->invoice_lineitems_model->get_by_nomor($nomor);
		foreach($detail->result() as $item) {
			$coa_stock_in=$coa_stock;
			$coa_hpp_in=$coa_hpp;
			$coa_sales_in=$coa_sales;
			//-- posting invoice_lineitems
			//-- ambil akun dari master barang
			$q_stok=$this->db->query("select i.sales_account, i.inventory_account, i.cogs_account, i.cost,
				i.cost_from_mfg,c.inventory_account as inventory_account_cat,
				c.cogs_account as cogs_account_cat,c.sales_account as sales_account_cat 
				from inventory i 
				left join inventory_categories c on c.kode=i.category
				where i.item_number='".$item->item_number."'");
			$r_stok=$q_stok->row();
			if($r_stok){
				//coa sales
				$coa_sales2=c_($r_stok->sales_account_cat);	//akun dari categor				
				if($coa_sales2>0){
					if($this->jurnal_model->exist_account_id($coa_sales2)){
						$coa_sales_in=$coa_sales2;
					}
				}
				
				$coa_sales2=c_($r_stok->sales_account);	//akun di set di barang
				if($coa_sales2>0){
					if($this->jurnal_model->exist_account_id($coa_sales2)){
						$coa_sales_in=$coa_sales2;
					}
				}
				$coa_sales2=c_($item->revenue_acct_id);	//akun di set faktur item line
				if($coa_sales2>0){
					if($this->jurnal_model->exist_account_id($coa_sales2)){
						$coa_sales_in=$coa_sales2;
					}
				}
				
				//coa stock
				$coa_stock2=c_($r_stok->inventory_account_cat);
				if($coa_stock2>0){
					$coa_stock_in=$coa_stock2;
				}
				$coa_stock2=c_($r_stok->inventory_account);
				if($coa_stock2>0){
					$coa_stock_in=$coa_stock2;
				}
				//coa hpp
				$coa_hpp2=c_($r_stok->cogs_account_cat);
				if($coa_hpp2>0){
					$coa_hpp_in=$coa_hpp2;
				}
								
				$coa_hpp2=c_($r_stok->cogs_account);
				if($coa_hpp2>0){
					$coa_hpp_in=$coa_hpp2;
				}
				
				if($item->cost==0){
					$item->cost=$r_stok->cost;
					$this->db->query("update invoice_lineitems set cost=".floatval($item->cost)." where line_number=".$item->line_number);
				}
				if($item->cost==0){
					$item->cost=$r_stok->cost_from_mfg;
                    if(c_($item->cost)>0)$item->cost=0;
					$this->db->query("update invoice_lineitems set cost=".c_($item->cost)." where line_number=".$item->line_number);
				}
			}
			$coa_sales_line=c_($item->revenue_acct_id);
			if(c_($coa_sales_line)>0){
				if($this->jurnal_model->exist_account_id($coa_sales_line)){
					$coa_sales_in=$coa_sales_line;
				}
			}
			$coa_inv_line=c_($item->coa2);
			if(c_($coa_inv_line)>0)$coa_stock_in=$coa_inv_line;
			
			$coa_cogs_line=c_($item->coa3);
			if(c_($coa_cogs_line)>0)$coa_cogs_in=$coa_cogs_line;
			
			$sales_amt=$item->price*$item->quantity;
			$disc_amt=$item->discount_amount+$item->disc_amount_2+$item->disc_amount_3;
			$hpp_amt=$item->cost*$item->quantity;
			
			if($hpp_amt>0){
				//-- posting persediaan
				$this->jurnal_model->add_jurnal($faktur->invoice_number,$coa_stock_in, 
					$faktur->invoice_date,0,$hpp_amt,"Inventory",$faktur->comments,$cid,$item->item_number);
				//-- posting hpp
				$this->jurnal_model->add_jurnal($faktur->invoice_number,$coa_hpp_in, 
					$faktur->invoice_date,$hpp_amt,0,"Cogs",$faktur->comments,$cid,$item->item_number);
			}
			//-- posting penjualan
			if(c_($item->coa1amt>0)){
				if(c_($coa_komisi)>0){
					$this->jurnal_model->add_jurnal($faktur->invoice_number,$coa_komisi, 
					$faktur->invoice_date,0,$item->coa1amt,"Sales Komisi",$faktur->comments,$cid,$item->item_number);
					$sales_amt-=$item->coa1amt;									
					
				}
			}
			$this->jurnal_model->add_jurnal($faktur->invoice_number,$coa_sales_in, 
					$faktur->invoice_date,0,$sales_amt,"Sales",$faktur->comments,$cid,$item->item_number);

			if($disc_amt>0){
			//-- posting discount item
				$this->jurnal_model->add_jurnal($faktur->invoice_number,$coa_disc, 
					$faktur->invoice_date,$disc_amt,0,"Sales Discount",$faktur->comments,$cid,$item->item_number);
			} 
		}
		//-- posting piutang
		$coa=$coa_ar;
		$operation="Account Receivable";
		if(strtoupper($faktur->payment_terms)=="CASH" || $faktur->payment_terms==""){
			$coa=$coa_cash;
			$operation="Cash Sales";
			$s="update check_writer set posted=true where voucher in (select no_bukti from payments 
				where invoice_number='$faktur->invoice_number')";
			$this->db->query($s);
		} 
		$this->jurnal_model->add_jurnal($faktur->invoice_number,$coa, 
				$faktur->invoice_date,$amount,0,$operation,$faktur->comments,$cid,$faktur->sold_to_customer);
			
		
		if($faktur->disc_amount!=0){
			$this->jurnal_model->add_jurnal($faktur->invoice_number,$coa_disc, 
				$faktur->invoice_date,$faktur->disc_amount,0,"Sales Discount",$faktur->comments,$cid,$faktur->sold_to_customer);
		}
		if($faktur->tax!=0){
			$this->jurnal_model->add_jurnal($faktur->invoice_number,$coa_tax, 
				$faktur->invoice_date,0,$faktur->tax,"Sales Tax",$faktur->comments,$cid,$faktur->sold_to_customer);					
		}
		if($faktur->freight!=0){
			$this->jurnal_model->add_jurnal($faktur->invoice_number,$coa_freight, 
				$faktur->invoice_date,0,$faktur->freight,"Sales Freight",$faktur->comments,$cid,$faktur->sold_to_customer);					
		}
		if($faktur->other!=0){
			$this->jurnal_model->add_jurnal($faktur->invoice_number,$coa_other, 
				$faktur->invoice_date,0,$faktur->other,"Sales Other",$faktur->comments,$cid,$faktur->sold_to_customer);					
		}
		$msg="";
		// validate jurnal
		if($this->jurnal_model->validate($nomor)) {
			$sql="update invoice set posted=true where invoice_number='$nomor'";
			$this->db->query($sql);
		} else {
			$msg="NOT_BALANCE";
		}
		
	   return $msg;
       
	}
	function posting_range_date($date_from,$date_to){
		$this->load->model('jurnal_model');
		$this->load->model('chart_of_accounts_model');
		$this->load->model('company_model');
		$date_from=date('Y-m-d H:i:s', strtotime($date_from));
		$date_to=date('Y-m-d H:i:s', strtotime($date_to));
		$s="select invoice_number 
		from invoice where invoice_type='I' 
		and invoice_date between '$date_from' and '$date_to' and ifnull(posted,false)=false 
		order by invoice_number";
		$rst_inv_hdr=$this->db->query($s);
		if($rst_inv_hdr){
			foreach ($rst_inv_hdr->result() as $r_inv_hdr) {
				
				echo "<br>Posting...".$r_inv_hdr->invoice_number;
				echo "...".$this->posting($r_inv_hdr->invoice_number);
						
			} // foreach rst_inv_hdr
		} // if rst_inv_hdr
        
        if($this->show_finish_message){
				
		echo "<legend>Finish.</legend><div class='alert alert-info'>
		Apabila ada kesalahan silahkan periksa mungkin seting akun-akun belum benar, 
		atau jurnal tidak balance. Silahkan cek ke nomor bukti yang bersangkutan 
		dan posting secara manual atau ulangi lagi 
		<a class='btn btn-primary' href='#' onclick='window.history.go(-1); return false;'> Go Back </a>.
		<p>&nbsp</p><p>Apabila tidak ada kesalahan silahkan close tab ini.
		<a class='btn btn-primary' href='#' onclick='remove_tab_parent(); return false;'> Close </a>.		
		</p>
		</div>"; 
		}	
	} // posting
	function posting_retur($nomor) {
		$saldo=$this->recalc($nomor);
		$faktur=$this->get_by_id($nomor)->row();
		$message="";
		$this->load->model("periode_model");
		if($this->periode_model->closed($faktur->invoice_date)){
			$message="Tidak bisa posting karena periode sudah ditutup.<br>";
			return $message;
		}
		$this->load->model('jurnal_model');
		$this->load->model('chart_of_accounts_model');
		$this->load->model('company_model');
		$this->load->model('invoice_lineitems_model');

		$cid=$this->access->cid;
		$set=$this->company_model->get_by_id($cid)->row();

		$coa_tax=$set->so_tax;
		$coa_freight=$set->so_freight;
		$coa_other=$set->so_other;
		$coa_ar=$set->accounts_receivable;
		$coa_disc=$set->so_discounts_given;
		$coa_hpp=$set->inventory_cogs;
		$coa_sales=$set->inventory_sales;
		$coa_stock=$set->inventory;
		$coa_hpp=$set->inventory_cogs;
				
		$coa_cash=$set->default_cash_payment_account;
		$coa_komisi=$this->sysvar->getvar("COA Hutang Komisi");
		if(c_($coa_cash)==0){
			$coa_cash=$coa_ar;
		}
		
		$detail=$this->invoice_lineitems_model->get_by_nomor($nomor);
		foreach($detail->result() as $item) {
			//-- posting invoice_lineitems
			
			$coa_stock_in=$coa_stock;
			$coa_hpp_in=$coa_hpp;
			$coa_sales_in=$coa_sales;
			//-- ambil akun dari master barang
			$q_stok=$this->db->query("select i.sales_account, i.inventory_account, i.cogs_account, i.cost,
				i.cost_from_mfg,c.inventory_account as inventory_account_cat,
				c.cogs_account as cogs_account_cat,c.sales_account as sales_account_cat 
				from inventory i 
				left join inventory_categories c on c.kode=i.category
				where i.item_number='".$item->item_number."'");
			$r_stok=$q_stok->row();
				
			if($r_stok){
				//coa sales
				$coa_sales2=c_($r_stok->sales_account_cat);	//akun dari categor				
				if($coa_sales2>0){
					$coa_sales_in=$coa_sales2;
				}
				
				$coa_sales2=c_($r_stok->sales_account);	//akun di set di barang
				if($coa_sales2>0){
					$coa_sales_in=$coa_sales2;
				}
				$coa_sales2=c_($item->revenue_acct_id);	//akun di set faktur item line
				if($coa_sales2>0){
					$coa_sales_in=$coa_sales2;
				}
				
				//coa stock
				$coa_stock2=c_($r_stok->inventory_account_cat);
				if($coa_stock2>0){
					$coa_stock_in=$coa_stock2;
				}
				$coa_stock2=c_($r_stok->inventory_account);
				if($coa_stock2>0){
					$coa_stock_in=$coa_stock2;
				}
				//coa hpp
				$coa_hpp2=c_($r_stok->cogs_account_cat);
				if($coa_hpp2>0){
					$coa_hpp_in=$coa_hpp2;
				}
								
				$coa_hpp2=c_($r_stok->cogs_account);
				if($coa_hpp2>0){
					$coa_hpp_in=$coa_hpp2;
				}
				
				if($item->cost==0){
					$item->cost=$r_stok->cost;
					$this->db->query("update invoice_lineitems set cost=".floatval($item->cost)." where line_number=".$item->line_number);
				}
				if($item->cost==0){
					$item->cost=$r_stok->cost_from_mfg;
                    if(c_($item->cost)>0)$item->cost=0;
					$this->db->query("update invoice_lineitems set cost=".c_($item->cost)." where line_number=".$item->line_number);
				}
			}
			$coa_sales_line=$item->revenue_acct_id;
			if($coa_sales_line!="")$coa_sales=$coa_sales_line;
			$coa_inv_line=$item->coa2;
			if($coa_inv_line!="")$coa_stock=$coa_inv_line;
			$coa_cogs_line=$item->coa3;
			if($coa_cogs_line!="")$coa_cogs=$coa_cogs_line;
			
			//coa global
			if($coa_stock==0){
			    $coa_stock=$set->inventory;
            }
            if($coa_sales==0)$coa_sales=$set->inventory_sales;
            if($coa_cogs==0)$coa_cogs=$set->inventory_cogs;
            
			$sales_amt=$item->price*$item->quantity;
			$disc_amt=$item->discount*$sales_amt;
			$hpp_amt=$item->cost*$item->quantity;
			if($hpp_amt>0){
				//-- posting persediaan
				$this->jurnal_model->add_jurnal($faktur->invoice_number,$coa_stock_in, 
					$faktur->invoice_date,$hpp_amt,0,"Inventory",$faktur->comments,$cid,$item->item_number);
				//-- posting hpp
				$this->jurnal_model->add_jurnal($faktur->invoice_number,$coa_hpp_in, 
					$faktur->invoice_date,0,$hpp_amt,"Cogs",$faktur->comments,$cid,$item->item_number);
			}
			//-- posting penjualan
			if($sales_amt>0){
				$this->jurnal_model->add_jurnal($faktur->invoice_number,$coa_sales_in, 
					$faktur->invoice_date,$sales_amt,0,"Sales",$faktur->comments,$cid,$item->item_number);
			}
			//-- posting discount item
			if($disc_amt>0){
				$this->jurnal_model->add_jurnal($faktur->invoice_number,$coa_disc, 
					$faktur->invoice_date,0,$disc_amt,"Sales Discount",$faktur->comments,$cid,$item->item_number);
			}						
		}
		//-- posting piutang
		$this->jurnal_model->add_jurnal($faktur->invoice_number,$coa_ar, 
			$faktur->invoice_date,0,$faktur->amount,"Account Receivable",$faktur->comments,$cid,$faktur->sold_to_customer);
		if($faktur->disc_amount!=0){
			$this->jurnal_model->add_jurnal($faktur->invoice_number,$coa_disc, 
				$faktur->invoice_date,0,$faktur->disc_amount,"Sales Discount",$faktur->comments,$cid,$faktur->sold_to_customer);
		}
		if($faktur->tax!=0){
			$this->jurnal_model->add_jurnal($faktur->invoice_number,$coa_tax, 
				$faktur->invoice_date,0,$faktur->tax,"Sales Tax",$faktur->comments,$cid,$faktur->sold_to_customer);					
		}
		if($faktur->freight!=0){
			$this->jurnal_model->add_jurnal($faktur->invoice_number,$coa_freight, 
				$faktur->invoice_date,$faktur->freight,0,"Sales Freight",$faktur->comments,$cid,$faktur->sold_to_customer);					
		}
		if($faktur->other!=0){
			$this->jurnal_model->add_jurnal($faktur->invoice_number,$coa_other, 
				$faktur->invoice_date,$faktur->other,0,"Sales Other",$faktur->comments,$cid,$faktur->sold_to_customer);					
		}
		// validate jurnal
		
		
		if($this->jurnal_model->validate($nomor)) {
			$sql="update invoice set posted=true where invoice_number='$nomor'";
			$this->db->query($sql);
		} else {
			$msg="NOT_BALANCE";
		}
		
		
	}	
	function posting_retur_range_date($date_from,$date_to){
		$this->load->model('jurnal_model');
		$this->load->model('chart_of_accounts_model');
		$this->load->model('company_model');
		$date_from=date('Y-m-d H:i:s', strtotime($date_from));
		$date_to=date('Y-m-d H:i:s', strtotime($date_to));
		$s="select invoice_number 
		from invoice where invoice_type='R' 
		and invoice_date between '$date_from' and '$date_to' and ifnull(posted,false)=false 
		order by invoice_number";
		$rst_inv_hdr=$this->db->query($s);
		if($rst_inv_hdr){
			foreach ($rst_inv_hdr->result() as $r_inv_hdr) {
				
				echo "<br>Posting...".$r_inv_hdr->invoice_number;
				$this->posting_retur($r_inv_hdr->invoice_number);
						
			} // foreach rst_inv_hdr
		} // if rst_inv_hdr
        
        if($this->show_finish_message){
		
    		echo "<legend>Finish.</legend><div class='alert alert-info'>
    		Apabila ada kesalahan silahkan periksa mungkin seting akun-akun belum benar, 
    		atau jurnal tidak balance. Silahkan cek ke nomor bukti yang bersangkutan 
    		dan posting secara manual atau ulangi lagi 
    		<a class='btn btn-primary' href='#' onclick='window.history.go(-1); return false;'> Go Back </a>.
    		<p>&nbsp</p><p>Apabila tidak ada kesalahan silahkan close tab ini.
    		<a class='btn btn-primary' href='#' onclick='remove_tab_parent(); return false;'> Close </a>.		
    		</p>
    		</div>"; 
        }			
	} // posting
	function unposting_retur_range_date($date_from,$date_to){
		$this->load->model('jurnal_model');
		$date_from=date('Y-m-d H:i:s', strtotime($date_from));
		$date_to=date('Y-m-d H:i:s', strtotime($date_to));
		$s="select invoice_number 
		from invoice where invoice_type='R' 
		and invoice_date between '$date_from' and '$date_to' and posted=true 
		order by invoice_number";
		$rst_inv_hdr=$this->db->query($s);
		if($rst_inv_hdr){
			foreach ($rst_inv_hdr->result() as $r_inv_hdr) {
				$this->unposting($r_inv_hdr->invoice_number);
				echo "<br>Delete Jurnal: ".$r_inv_hdr->invoice_number;
			}
		}
        if($this->show_finish_message){
				
		echo "<legend>Finish.</legend><div class='alert alert-info'>
		<p>Apabila tidak ada kesalahan silahkan close tab ini.
		<a class='btn btn-primary' href='#' onclick='remove_tab_parent(); return false;'> Close </a>.		
		</p>
		</div>"; 
		
		}
	}
	function nomor_bukti($add=false)
	{
		$key="Invoice Numbering";
		if($add){
		  	$this->sysvar->autonumber_inc($key);
		} else {			
			$no=$this->sysvar->autonumber($key,0,'!FJ~$00001');
			for($i=0;$i<100;$i++){			
				$no=$this->sysvar->autonumber($key,0,'!FJ~$00001');
				$rst=$this->invoice_model->get_by_id($no)->row();
				if($rst){
				  	$this->sysvar->autonumber_inc($key);
				} else {
					break;					
				}
			}
			return $no;
					}
	}	
	function nomor_bukti_do($add=false)
	{
		$key="Delivery Order Numbering";
		if($add){
		  	$this->sysvar->autonumber_inc($key);
		} else {			
			$no=$this->sysvar->autonumber($key,0,'!SJ~$00001');
			for($i=0;$i<100;$i++){			
				$no=$this->sysvar->autonumber($key,0,'!SJ~$00001');
				$rst=$this->invoice_model->get_by_id($no)->row();
				if($rst){
				  	$this->sysvar->autonumber_inc($key);
				} else {
					break;					
				}
			}
			return $no;
			
		}
	}
	function list_do_new($d1,$d2){
		$sql="select i.invoice_number,i.invoice_date,i.sold_to_customer,i.invoice_date,
			i.sold_to_customer, c.company, il.item_number,il.description, 
			il.quantity 
			from invoice i left join invoice_lineitems il 
			on i.invoice_number = il.invoice_number 
			left join inventory s on s.item_number=il.item_number
			left join customers c on c.customer_number=i.sold_to_customer
			where i.invoice_type='D' and i.invoice_date between '$d1' and '$d2'
			and (i.status is null  or i.status=0)";
		return $this->db->query($sql);
	}

} ?>