<?php
class Customer_model extends CI_Model {

private $primary_key='customer_number';
private $table_name='customers';
private $error_message="";
private $message="";

function __construct(){
	parent::__construct();        
        
	$error_message[]="";
}
function before_delete($id){
	$retval=false;
	$retval=$this->has_trans($id)>0;
	return $retval;
}
function has_trans($id){
	$retval=false;
	if($q=$this->db->query("select count(1) as cnt from invoice where sold_to_customer='$id'")){
		if($q->row()->cnt>0){
			$this->error_message[]="Masih ada transaksi untuk customer ini !";
		} else {
			$retval=true;			
		}
	}
	return $retval;
}
function last_error_message(){
	return $this->error_message();
}
function error_message(){
	$message="";
	if(is_array($this->error_message)){
		for($i=0;$i<count($this->error_message);$i++){
			$message.=$this->error_message[$i]."</br>";
		}	
	}
	return $message;

}
function message_text(){
	return $this->message;
} 

function customer_list(){
        $query=$this->db->query("select customer_number,company from customers");
        $ret=array();
        $ret['']='- Select Customer -';
        foreach ($query->result() as $row)
        {
                $ret[$row->customer_number]=$row->company;
        }		 
        return $ret;
}
function select_list(){return $this->customer_list();}

	function get_paged_list($limit=10,$offset=0,
	$order_column='',$order_type='asc')
	{
                $nama='';
                if(isset($_GET['nama'])){
                    $nama=$_GET['nama'];
                }
                if($nama!='')$this->db->where("company like '%$nama%'");

		if (empty($order_column)||empty($order_type))
		$this->db->order_by($this->primary_key,'asc');
		else
		$this->db->order_by($order_column,$order_type);
		return $this->db->get($this->table_name,$limit,$offset);
	}
	function count_all(){
		return $this->db->count_all($this->table_name);
	}
	function get_all(){
		return $this->db->order_by("company")->get($this->table_name);
	}
	function get_by_id($id){
		customer_need_update($id);
		$this->db->where($this->primary_key,$id);
		return $this->db->get($this->table_name);
	}
	function info($id){
		$data=$this->get_by_id($id)->row();
		if($data){    
			$ret='<strong>'.$id.' - '.$data->company.'</strong><br/>'
					.$data->street.' - '.$data->city;
		} else $ret='';
		return $ret;
	}
	function customer_type($id){
		if($row=$this->db->select("customer_record_type")
			->where("customer_number",$id)->get("customers")
			->row()){
			return $row->customer_record_type;
		} else {
			return "";
		}
	}
	function save($data){
		$data['cid']=cid();
		if($data['cid']=='ALL')unset($data['cid']);
        	
		$data = $this->valid_input($data);
        $id=$data['customer_number'];
			
        if(isset($data["customer_record_type"])){
            $type=explode(" - ",$data['customer_record_type']);
            if(count($type)>1)$data['customer_record_type']=$type[0];
        }
        if(isset($data['current_balance'])){
            $data['current_balance']=c_($data['current_balance']);
        }
        if(isset($data["credit_limit"])){
            $data["credit_limit"]=c_($data['credit_limit']);
        }
        if(isset($data["credit_balance"])){
            $data["credit_balance"]=c_($data['credit_limit'])-c_($data['credit_balance']);
		}
		
		if(isset($data['tgl_tagih'])){
			if($data['tgl_tagih']=='')$data['tgl_tagih']=0;
		}
		if(isset($data['discount_percent'])){
			if($data['discount_percent']=='')$data['discount_percent']='0';
		}
		if(isset($data['markup_percent'])){
			if($data['markup_percent']=='')$data['markup_percent']='0';
		}
		

        customer_need_update($id);
		
		$ok = $this->db->insert($this->table_name,$data);            
		//return $this->db->insert_id();
		$this->add_merchant($id);

		return $ok;
	}
	function valid_input($data){
		if(isset($data['tgl_tagih']))if($data['tgl_tagih']=='')$data['tgl_tagih']=0;
		if(isset($data['disc_prc_2']))if($data['disc_prc_2']=='')$data['disc_prc_2']=0;
		if(isset($data['disc_prc_3']))if($data['disc_prc_3']=='')$data['disc_prc_3']=0;
		if(isset($data['discount_amount']))if($data['discount_amount']=='')$data['discount_amount']=0;
		if(isset($data['markup_amount']))if($data['markup_amount']=='')$data['markup_amount']=0;
		if(isset($data['disc_min_qty']))if($data['disc_min_qty']=='')$data['disc_min_qty']=0;

		return $data;
	}
	function update($id,$data){
		$data['cid']=cid();
		if($data['cid']=='ALL')unset($data['cid']);
		$data = $this->valid_input($data);
	    $credit_limit=0;
		if(isset($data['credit_limit']))$credit_limit=$data['credit_limit'];
		if($q=$this->db->query("select credit_limit from customers where customer_number='$id' ")){
			if($r=$q->row()){
				$credit_limit=$r->credit_limit;
			}
		}
        if(isset($data["customer_record_type"])){
            $type=explode(" - ",$data['customer_record_type']);
            if(count($type)>1)$data['customer_record_type']=$type[0];
        }
		$current_balance=0;
        if(isset($data['current_balance'])){
            $data['current_balance']=$this->saldo_piutang($id);
			$current_balance=$data['current_balance'];
        }
        if(isset($data["credit_limit"])){
            $data["credit_limit"]=c_($data['credit_limit']);
        }
        if(isset($data["credit_balance"])){
            $data["credit_balance"]=c_($credit_limit)-c_($current_balance);
        }
		if(isset($data['discount_percent'])){
			if($data['discount_percent']=='')$data['discount_percent']='0';
		}
		if(isset($data['markup_percent'])){
			if($data['markup_percent']=='')$data['markup_percent']='0';
		}
		if(isset($data['join_date'])){
			if($data['join_date']=="")unset($data['join_date']);
		}
		if(isset($data['expire_date'])){
			if($data['expire_date']=="")unset($data['expire_date']);
		}
		
        customer_need_update($id);
        
		$this->db->where($this->primary_key,$id);
		$ok =$this->db->update($this->table_name,$data);
		
		$this->add_merchant($id);
		return $ok;
	}
	function add_merchant($id){
		//apabila customer_record_type==merchant bikin gudang baru
		if($row=$this->db->where("customer_number",$id)->get("customers")
			->row()){
				if ($row->customer_record_type=="merchant"){
					$this->load->model("shipping_locations_model");
					$data['location_number']=$id;
					$data['address_type']="Merchant";
					$data['company_name']=$row->company;
					$data['street']=$row->street;
					$data['city']=$row->city;
					$data['state']=$row->state;
					$data['country']=$row->country;
					$data['attention_name']=$row->first_name;
					$data['phone']=$row->phone;
					$data['loc_name']=$row->company;
					$this->shipping_locations_model->save($data);
				}
		
			}
	}
	function exist_customer_transaction($id){
		$ret="";
		if($rcnt=$this->db->select("count(1) as cnt")->where("sold_to_customer",$id)
			->get("sales_order")->row()){
			if($rcnt->cnt){
				$ret="Masih ada transaksi sales order !";				
			}
			return $ret;
		}
		
		if($cnt=$this->db->select("count(1) as cnt")->where("sold_to_customer",$id)
			->get("invoice")->row()->cnt){
			$ret="Masih ada transaksi faktur atau surat jalan !";
			return $ret;
		}
	}
	function delete($id){
		$id=urldecode($id);
		
		customer_need_update($id);
		
		$ret=$this->exist_customer_transaction($id);
		if($ret==""){
			$this->db->where($this->primary_key,$id);
			$this->db->delete($this->table_name);
		} 
		return $ret;
	}
	function saldo_piutang_summary()
	{
		$sql="select c.company,sum(f.amount) as sum_amount 
		from invoice f
		left join customers c on c.customer_number=f.sold_to_customer
		where invoice_type='I' and c.customer_number<>'cash' 
		and year(invoice_date)=".date("Y")."
		group by c.company
		order by sum(f.amount) desc limit 5";
        $data=null;
		$query=$this->db->query($sql);
		foreach($query->result() as $row){
			$supp=$row->company;
			if($supp=="")$supp="Unknown";
			 
			$amount=$row->sum_amount;
			if($amount==null)$amount=0;
			if($amount>0)$amount=round($amount/1000);
			$data[]=array(substr($supp,0,10),$amount);
		}
		if(!$data)$data[]=array("0",0);
		return $data;
	}
	function shipto_add($data){           
		return $this->db->insert("customer_shipto",$data);            
	}
	
	function shipto_del($id){           
		$this->db->where("id",$id);
		return $this->db->delete("customer_shipto");
	}
	function list_travel(){
		$ret['']='- Select -';
		if($query=$this->db->query("select customer_number,company
			from customers order by company")) {
			foreach ($query->result() as $row){
				$ret[$row->customer_number]=$row->company;
			}		 
		}
		return $ret;
	}
	function exist($id){
	   return $this->db->count_all($this->table_name." where customer_number='".$id."'")>0;
	}
	function convert_from_ls_cust_master($cust_id){
		$this->load->model("leasing/cust_master_model");
		$this->cust_master_model->convert_to_customer($cust_id);
	}	
	function get_company($customer_number){
		$ret="";
		$this->db->select("company")->where("customer_number",$customer_number);
		if($row=$this->db->get($this->table_name)->row()){
			$ret=$row->company;
		}
		return $ret;
	}
    function lookup(){        
        return $this->list_of_values->lookup_customers();
        
    }	
    function saldo_piutang($customer_number){
        $current_balance=0;
        $sql="select sum(amount) as saldo from qry_kartu_piutang 
            where customer_number='$customer_number'";
        if($q=$this->db->query($sql)){
            if($r=$q->row()){
                $current_balance=$r->saldo;
            }
        }    
        return $current_balance;
    }
    function recalc_piutang($customer_number){
    	$this->message.=",recalc_piutang($customer_number)";
        $credit_limit=0;
        $credit_balance=0;
        $current_balance=0;
        if($q=$this->db->select("current_balance,credit_balance,credit_limit")
            ->where("customer_number",$customer_number)->get("customers")){
            if($r=$q->row()){
                $current_balance=c_($r->current_balance);
                $credit_limit=c_($r->credit_limit);
                $credit_balance=c_($r->credit_balance);
            }
        }		
        $current_balance=$this->saldo_piutang($customer_number);
		$data['current_balance']=$current_balance;
		$data['credit_balance']=$credit_limit-$current_balance;		
        $this->update($customer_number,$data);
    }
    function update_saldo($customer_number,$amount,$amount_old=0,$add=true){
        $credit_limit=0;
        $credit_balance=0;
        $current_balance=0;
        if($q=$this->db->select("current_balance,credit_balance,credit_limit")
            ->where("customer_number",$customer_number)->get("customers")){
            if($r=$q->row()){
                $current_balance=c_($r->current_balance);
                $credit_limit=c_($r->credit_limit);
                $credit_balance=c_($r->credit_balance);
            }
        }
        if($credit_balance==0 && $credit_limit>0){
            //$credit_balance=$credit_limit; //nanti dulu credit balance manual saja
        }
        if($add){
            $current_balance+=$amount;
            $credit_balance-=$amount;
        } else {
            $current_balance-=$amount_old;
            $current_balance+=$amount;
            $credit_balance+=$amount_old;
            $credit_balance-=$amount;
        }
                
        $data["current_balance"]=$current_balance;
        $data["credit_balance"]=$credit_balance;
        $this->db->where("customer_number",$customer_number);
        return $this->db->update("customers",$data);
    }    
    function next_customer_recalc(){
    	
    }
}
