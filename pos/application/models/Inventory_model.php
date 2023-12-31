<?php
class Inventory_model extends CI_Model {

    private $primary_key='item_number';
    private $table_name='inventory';
    private $zzz_item_count=0;
    private $date_from='', $date_to='';
    private $cost=0,$retail=0;
    private $message="";
    
	function __construct(){
		parent::__construct();        
    	$this->load->model("inventory_assembly_model");
    	$this->load->model("replicate_model");
	}
	function lov($bind_id,$other=""){
		$this->load->library("list_of_values");
		$setting['dlgBindId']=$bind_id;
		$setting['dlgRetFunc']="$('#".$bind_id."').val(row.item_number);";
		if($other!=""){
			$setting['dlgRetFunc']=$setting['dlgRetFunc']."$('#$other').val(row.item_number);";
		}
		$setting['dlgCols']=array( 
					array("fieldname"=>"item_number","caption"=>"Kode","width"=>"80px"),
					array("fieldname"=>"description","caption"=>"Nama Barang","width"=>"200px")
				);			
		$setting['dlgUrlQuery']="inventory/browse_data";
		return $this->list_of_values->render($setting);
	}
	
    function lookup($offset=0,$limit=20,$order_column='item_number',$order_type='asc'){
        $search='';
        if(isset($_GET['search']))$search=$_GET['search'];
        $sql="select item_number,description,retail,unit_of_measure as unit
           ,category 
            from inventory";
        if($search!=""){
           $sql=$sql." where (item_number like '%".$search."%' 
                or description like '%".$search."%')";
        }
        if(isset($_GET['search'])){
           echo browse_select($sql,'Search','inventory/lookup'
                   ,'item_number',$offset,$limit,$order_column,$order_type);
        } else {
           return browse_select($sql,'Search','inventory/lookup'
                   ,'item_number',$offset,$limit,$order_column,$order_type);
        }
    }
    function lookup_by_class($param=null){
    	$extra_ret_func="";
		$class="";
    	if(isset($param["dlgRetFunc"]))$extra_ret_func=$param["dlgRetFunc"];
		if(isset($param['class']))$class=$param["class"];
		
        $lookup = $this->list_of_values->render(array(
        	"dlgBindId"=>"inventory",
        	"dlgUrlQuery"=>"inventory/browse_data",
       		'show_checkbox'=>false,
       		'show_check1'=>true,'check1_title'=>"Supplier",'check1_field'=>'supplier_number',
        	"dlgRetFunc"=>"			
				$('#item_number').val(row.item_number);
				$('#description').val(row.description);
				$('#retail').html(row.retail);
				$('#price').html(row.cost_from_mfg);
				$('#unit').html(row.unit_of_measure);
				$('#cost').val(row.cost);
				if(row.cost==0){
					$('#cost').val(row.cost_from_mfg);
				}
				$extra_ret_func
				find();
        	",
        	"dlgCols"=>array(
                array("fieldname"=>"item_number","caption"=>"Kode","width"=>"80px"),
                array("fieldname"=>"description","caption"=>"Nama Barang","width"=>"180px"),
                array("fieldname"=>"quantity_in_stock","caption"=>"Qty","width"=>"80px"),
                array("fieldname"=>"unit_of_measure","caption"=>"Unit","width"=>"80px"),
                array("fieldname"=>"retail","caption"=>"H Jual","width"=>"80px"),
                array("fieldname"=>"qty_last","caption"=>"Qty2","width"=>"80px"),
                array("fieldname"=>"customer_pricing_code","caption"=>"Unit2","width"=>"80px"),
                array("fieldname"=>"cost_from_mfg","caption"=>"H Beli","width"=>"80px"),        	        		
                array("fieldname"=>"cost","caption"=>"H Pokok","width"=>"80px"),        	        		
                array("fieldname"=>"category","caption"=>"Category","width"=>"80px"),
                array("fieldname"=>"supplier_number","caption"=>"Supplier","width"=>"80px"),
                array("fieldname"=>"supplier_name","caption"=>"Supplier Name","width"=>"80px"),
                array("fieldname"=>"kode_lama","caption"=>"Kode Lama","width"=>"80px")
        	)
        ));
		return $lookup;
    }
    function lookup_merk(){
    	$extra_ret_func="";
		$class="";		
        $lookup = $this->list_of_values->render(array(
        	"dlgBindId"=>"merk",
        	"dlgUrlQuery"=>"inventory/manufacturer",
       		'show_checkbox'=>false,
       		'show_check1'=>true,'check1_title'=>"Supplier",'check1_field'=>'supplier_number',
        	"dlgRetFunc"=>"			
				$('#merk').val(row.manufacturer);
				$extra_ret_func
        	",
        	"dlgCols"=>array(
                array("fieldname"=>"manufacturer","caption"=>"Merk","width"=>"80px")
        	)
        ));
		return $lookup;
    }
    
    function select_items($limit=10,$offset=0,$order_column='',$order_type='asc'){
         $nama='';
        if(isset($_GET['nama'])) $nama=$_GET['nama'];
         
        $this->db->select('description,item_number,retail');
        $this->db->from('inventory i');
        if($nama!='') $this->db->where("description like '%$nama%'
            or item_number='$nama'");
        if (empty($order_column)||empty($order_type))
        { 
            $this->db->order_by($this->primary_key,'asc');
        } else {
            $this->db->order_by($order_column,$order_type);
        }
        return $this->db->get('',$limit,$offset);
    }
    function get_paged_list($limit=10,$offset=0,
    $order_column='',$order_type='asc')
    {
        $nama='';
        if(isset($_GET['nama'])){
            $nama=$_GET['nama'];
        }
        $this->db->select('item_number,description,category,s.supplier_name,retail,cost');
        $this->db->join('suppliers s','i.supplier_number=s.supplier_number','left');
        if($nama!='') $this->db->where("description like '%$nama%'");
        if (empty($order_column)||empty($order_type))
        { 
            $this->db->order_by($this->primary_key,'asc');
        } else {
            $this->db->order_by($order_column,$order_type);
        }
        return $this->db->get($this->table_name." i",$limit,$offset);
    }
    function count_all(){
    	return $this->db->count_all($this->table_name);
    }
    function get_by_id($id){
    	
		item_need_update($id);
		
    	$this->db->where($this->primary_key,$id);
    	return $this->db->get($this->table_name);
    }
    function get_description($item_number){
        if($q=$this->get_by_id($item_number)){
            if($r=$q->row()){
                return $r->description;
            }
        }
        return "";
    }
    
    function exist($id){
       return $this->db->count_all($this->table_name." where item_number='".$id."'")>0;
    }
    function save($data,$id=""){
		$data['cid']=cid();
		if($data['cid']=='ALL')unset($data['cid']);
    	if(isset($data['active']))$data['active']=='1'?$data['active']=true:$data['active']=false;
    	if(isset($data['serialized']))$data['serialized']=='1'?$data['serialized']=true:$data['serialized']=false;
    	if(isset($data['assembly']))$data['assembly']=='1'?$data['assembly']=true:$data['assembly']=false;
    	if(isset($data['taxable']))$data['taxable']=='1'?$data['taxable']=true:$data['taxable']=false;
    	if(isset($data['multiple_pricing']))$data['multiple_pricing']=='1'?$data['multiple_pricing']=true:$data['multiple_pricing']=false;
    	if(isset($data['style']))$data['style']=='1'?$data['style']=true:$data['style']=false;
        if(isset($data['last_order_date']))if($data['last_order_date']=='')$data['last_order_date']='1900-01-01';
        if(isset($data['expected_delivery']))if($data['expected_delivery']=='')$data['expected_delivery']='1900-01-01';
        if(isset($data['last_inventory_date']))if($data['last_inventory_date']=='')$data['last_inventory_date']='1900-01-01';
        if(isset($data['retail']))$data['retail']=c_($data['retail']);
        $cost=0;
        if(isset($data['cost'])){
            $data['cost']=c_($data['cost']);
            $cost=$data['cost'];
        }
        if(isset($data['cost_from_mfg'])){
			$data['cost_from_mfg']=c_($data['cost_from_mfg']);
			if(isset($data['cost']) && $data['cost']==0)$data['cost']=$data['cost_from_mfg'];
		}
		
        if(isset($data['quantity_in_stock']))$data['quantity_in_stock']=c_($data['quantity_in_stock']);
        if(isset($data['class']))if($data['class']=='')$data['class']='Stock Item';        
        if(isset($data['unit_of_measure']))if($data['unit_of_measure']=='')$data['unit_of_measure']='PCS';        
    	if(isset($data['allowchangeprice']))$data['allowchangeprice']=='1'?$data['allowchangeprice']=true:$data['allowchangeprice']=false;
    	if(isset($data['allowchangedisc']))$data['allowchangedisc']=='1'?$data['allowchangedisc']=true:$data['allowchangedisc']=false;
    	
		if($id==""){
	    	$ok=$this->db->insert($this->table_name,$data);
	    	$id=$data['item_number'];			
		} else {
	    	$this->db->where($this->primary_key,$id);
	    	$ok=$this->db->update($this->table_name,$data);			
		}
        item_need_update($id);
//		$this->replicate_model->inventory($item_no);
        if($cost==0){
            $this->inventory_assembly_model->recalc_cost($id);
        }

    	return $ok;
    }
    function update($id,$data){
		$data['cid']=cid();
		if($data['cid']=='ALL')unset($data['cid']);
    	$ok = $this->save($data,$id);
		return $ok;
		
    	if(isset($data['active']))$data['active']=='1'?$data['active']=true:$data['active']=false;
    	if(isset($data['serialized']))$data['serialized']=='1'?$data['serialized']=true:$data['serialized']=false;
    	if(isset($data['assembly']))$data['assembly']=='1'?$data['assembly']=true:$data['assembly']=false;
    	if(isset($data['multiple_pricing']))$data['multiple_pricing']=='1'?$data['multiple_pricing']=true:$data['multiple_pricing']=false;
    	if(isset($data['style']))$data['style']=='1'?$data['style']=true:$data['style']=false;
        if(isset($data['last_order_date']))if($data['last_order_date']=='')$data['last_order_date']='1900-01-01';
        if(isset($data['expected_delivery']))if($data['expected_delivery']=='')$data['expected_delivery']='1900-01-01';
        if(isset($data['last_inventory_date']))if($data['last_inventory_date']=='')$data['last_inventory_date']='1900-01-01';
        if(isset($data['retail']))$data['retail']=c_($data['retail']);
        if(isset($data['cost']))$data['cost']=c_($data['cost']);
        if(isset($data['cost_from_mfg'])){
			$data['cost_from_mfg']=c_($data['cost_from_mfg']);
			if(isset($data['cost']) && $data['cost']==0)$data['cost']=$data['cost_from_mfg'];
		}
		
        if(isset($data['quantity_in_stock']))$data['quantity_in_stock']=c_($data['quantity_in_stock']);
        if(isset($data['class']))if($data['class']=='')$data['class']='Stock';        
    	if(isset($data['allowchangeprice']))$data['allowchangeprice']=='1'?$data['allowchangeprice']=true:$data['allowchangeprice']=false;
    	if(isset($data['allowchangedisc']))$data['allowchangedisc']=='1'?$data['allowchangedisc']=true:$data['allowchangedisc']=false;

        $item_no=$id; item_need_update($item_no);
        
    	return $ok;
    }
	function exist_transaction($id){
		$ret="";
		if($cnt=$this->db->select("count(1) as cnt")->where("item_number",$id)
			->get("sales_order_lineitems")->row()->cnt){
			$ret="Masih ada transaksi sales order !";
			return $ret;
		}
		
		if($cnt=$this->db->select("count(1) as cnt")->where("item_number",$id)
			->get("invoice_lineitems")->row()->cnt){
			$ret="Masih ada transaksi faktur atau surat jalan !";
			return $ret;
		}
		if($cnt=$this->db->select("count(1) as cnt")->where("item_number",$id)
			->get("inventory_products")->row()->cnt){
			$ret="Masih ada transaksi keluar masuk barang !";
			return $ret;
		}
		if($cnt=$this->db->select("count(1) as cnt")->where("item_number",$id)
			->get("inventory_moving")->row()->cnt){
			$ret="Masih ada transaksi adjustmen atau transfer !";
			return $ret;
		}
		
	}

	function delete($id){
		$id=urldecode($id);
		item_need_update($id);
		$ret=$this->exist_transaction($id);
		if($ret==""){
			$this->db->where($this->primary_key,$id);
			$this->db->delete($this->table_name);
		}
		return $ret;
	}
	function item_list_all(){
		$query=$this->db->query("select item_number,description,retail,
			cost,cost_from_mfg,supplier_number
            from inventory order by description");
		$ret=array();
 		foreach ($query->result_array() as $row)
		{
			$ret[]=$row;
		}		 
		return $ret;
	}
	function item_list(){
		$query=$this->db->query("select item_number,description
                     from inventory order by description");
		$ret=array();
		$ret['']='- Select -';
 		foreach ($query->result() as $row)
		{
			$ret[$row->item_number]=$row->description.' - '.$row->item_number;
		}		 
		return $ret;
	}
	function class_list(){
		$query=$this->db->query("select 0 as kode,class  as item_class from inventory_class");
		$ret=array();
		$ret['']='- Select Class -';
		$ret['Stock']='Stock';
 		foreach ($query->result() as $row)
		{
			$ret[$row->item_class]=$row->item_class;
		}		 
		return $ret;
	}
 
	function category_list(){
		$query=$this->db->query("select kode,category from inventory_categories");
		$ret=array();
		$ret['']='- Select Category -';
 		foreach ($query->result() as $row)
		{
			$ret[$row->kode]=$row->category;
		}		 
		return $ret;
	}
	function brand_list_object(){
		$query=$this->db->query("select distinct manufacturer  as brand from inventory");
		$ret=array();
 		foreach ($query->result() as $row)
		{
			$ret[]=$row;
		}		 
		return $ret;
	}
	
	function category_list_object(){
		$query=$this->db->query("select kode,category from inventory_categories");
		$ret=array();
 		foreach ($query->result() as $row)
		{
			$ret[]=$row;
		}		 
		return $ret;
	}
	function item_list_object(){
		$query=$this->db->query("select item_number,description,special_features,item_picture,
		retail
		from inventory");
		$ret=array();
 		foreach ($query->result() as $row)
		{
			$ret[]=$row;
		}		 
		return $ret;
	}
	
	function paling_laku_old()
	{
		$sql="select il.item_number,il.description,sum(il.quantity) as sum_qty 
		from invoice_lineitems il left join invoice i on i.invoice_number=il.invoice_number
		where i.invoice_type='I' 
		group by il.item_number,il.description
		order by sum(il.quantity) desc
		limit 0,10";
		$query=$this->db->query($sql);
		foreach($query->result() as $row){
			$item=$row->item_number;		//. ' - '.$row->description;
			if($item=="")$item="Unknown";
			$qty=$row->sum_qty;
			if($qty==null)$qty=0;
			$data[$item]=$qty;
		}
		//var_dump($data);
		return $data;
	}
	function paling_laku()
	{
		$sql="select il.item_number,il.description,sum(il.quantity) as sum_qty 
		from invoice_lineitems il left join invoice i on i.invoice_number=il.invoice_number
		where i.invoice_type='I' 
		group by il.item_number,il.description
		order by sum(il.quantity) desc
		limit 0,10";
		$query=$this->db->query($sql);
		foreach($query->result() as $row){
			$item=$row->description; //$row->item_number;		//. ' - '.$row->description;
			if($item=="")$item="Unknown";
			$qty=$row->sum_qty;
			if($qty==null)$qty=0;
			$data[]=array(substr($item,0,10),$qty);
		}
		//var_dump($data);
		return $data;
	}

	function minimum_stock()
	{
		$sql="select i.item_number,i.description,i.reorder_quantity,i.quantity_in_stock 
		from inventory i
		limit 0,10";
		$query=$this->db->query($sql);
		foreach($query->result() as $row){
			$item=$row->item_number;	//. ' - '.$row->description;
			if($item=="")$item="Unknown";
			$qty=$row->quantity_in_stock;
			if($qty==null)$qty=0;
			$data[]=array(substr($item,0,10),$qty);
		}
		return $data;
	}
	function minimum_stock_old()
	{
		$sql="select i.item_number,i.description,i.reorder_quantity,i.quantity_in_stock 
		from inventory i
		limit 0,10";
		$query=$this->db->query($sql);
		foreach($query->result() as $row){
			$item=$row->item_number;	//. ' - '.$row->description;
			if($item=="")$item="Unknown";
			$qty=$row->quantity_in_stock;
			if($qty==null)$qty=0;
			$data[$item]=$qty;
		}
		return $data;
	}
	function po_not_received()
	{
		$sql="select pol.item_number,pol.descripton,pol.quantity,pol.qty_recvd 
		from purchase_lineitems pol
		limit 0,10";
		$query=$this->db->query($sql);
		foreach($query->result() as $row){
			$item=$row->item_number;	//. ' - '.$row->description;
			if($item=="")$item="Unknown";
			$qty=$row->quantity_in_stock;
			if($qty==null)$qty=0;
			$data[$item]=$qty;
		}
		return $data;
	}
	
	function sisa_stock()
	{
		$sql="select i.item_number,i.descripton,i.minimum,i.quantity_in_stock 
		from inventory i
		limit 0,10";
		$query=$this->db->query($sql);
		foreach($query->result() as $row){
			$item=$row->item_number;	//. ' - '.$row->description;
			if($item=="")$item="Unknown";
			$qty=$row->quantity_in_stock;
			if($qty==null)$qty=0;
			$data[$item]=$qty;
		}
		return $data;
	}
	function quantity_in_stock($item_number)
	{
		$sql="select sum(qty_masuk)-sum(qty_keluar) as qty from qry_kartustock_union 
		where item_number='$item_number'";
		$query=$this->db->query($sql);		
		return $query->row()->qty;
	}
	function qty_gudang($item_number,$gudang)
	{
		$qty=0;
		if($q=$this->db->select('quantity')->where('item_number',$item_number)
			->where('warehouse_code',$gudang)->get('inventory_warehouse')
		)
		{
			if($row=$q->row())$qty=$row->quantity;
		}
		return $qty;
	}
	function sales_discount($item,$cust,$min_qty=0)
	{
		$disc=0;	$disc_prc=0;	$disc_amt=0;
		if($q=$this->db->select("category")->where("item_number",$item)
		->get("inventory"))
		{
			if($cat_row=$q->row()){
				$cat=$cat_row->category;
				if($min_qty>1){
					$this->db->order_by("min_qty_sold");
				}
				$disc_prc=0;
				if($q=$this->db->where("cust_no",$cust)
					->where("category",$cat)->get("inventory_price_customers"))
				{
					$item_disc="";
					$dprc=0;
					foreach($q->result() as $row){
					 
						if($disc_prc==0 and $min_qty >= $row->min_qty){
							$disc_prc=$row->disc_prc_to;
							$disc_amt=$row->disc_amount;
							if($disc_amt>0) {
								$disc=$disc_amt;
							} else {
								if($disc_prc>=1)$disc_prc=floatval($disc_prc/100);

								if($row->disc_prc_2>0){
									$dprc=$row->disc_prc_2;
									if($dprc>=1)$dprc=floatval($dprc/100);
									$disc_prc.="+".$dprc;
								}
								if($row->disc_prc_3>0){
									$dprc=$row->disc_prc_3;
									if($dprc>=1)$dprc=floatval($dprc/100);
									$disc_prc.="+".$dprc;
								}
								$disc=$disc_prc;
							}
						}
					}

				}
			}
		}
		
		$cust_disc="";
		if($disc_prc==0 and $disc_amt==0){
			if($q=$this->db->select("discount_percent,disc_prc_2,disc_prc_3")
				->where("customer_number",$cust)->get("customers"))
			{
					if($r=$q->row()){
						if($r->discount_percent>0)$cust_disc.=$r->discount_percent;
						if($r->disc_prc_2>0)$cust_disc.="+".$r->disc_prc_2;
						if($r->disc_prc_3>0)$cust_disc.="+".$r->disc_prc_3;
					}
			}
			if($cust_disc!="")$disc=$cust_disc;
		}
		
		return $disc;
	}
	function get_qty_gudang($item_no,$gudang){
		$sql="select quantity from inventory_warehouse 
			where item_number='$item_no' and warehouse_code='$gudang'";
		if($q=$this->db->query($sql)){
			if($r=$q->row()){
				return $r->quantity;
			}
		}
		return 0;
	}	
    function next_item_recalc($isDelete=false){
        $ret="";
        if($q=$this->db->get("zzz_item_need_update")){
            $this->zzz_item_count=$q->num_rows();
            if($r=$q->row()){
                $ret=$r->item_no;
                if($isDelete){
                    $this->db->where("id",$r->id)->delete("zzz_item_need_update");
                }
            }
        }
        return $ret;
    }
    function recalc($item_number="",$tahun="",$bulan="",$display_echo=false){
    		
        if($item_number=="")$item_number=$this->next_item_recalc();
        if($item_number=="") {
            $this->message.="\r inventory_model: next item_number is empty";
            return false;        
        }

		
        $this->message.="\r Inventory_model->Recalc($item_number,$tahun,$bulan), ";        
    	$this->inventory_assembly_model->recalc_cost($item_number);
        $this->recalc_stock_arsip($item_number,$tahun,$bulan);        
        $this->recalc_stock_gudang($item_number,$tahun,$bulan);
        $this->recalc_stock_unit($item_number);    
		//	$this->replicate_model->inventory($item_number);
		if($display_echo) echo $this->message;
    }    
	function convert_kode_lama(){
		$cnt=0;
		if($q=$this->db->query("select id,item_number,shipment_id from inventory_products 
			where length(item_number)<11 and update_status!=2 and length(item_number)>2 limit 1")){
				if($r=$q->row()){
					$s="select item_number,description from inventory where kode_lama='$r->item_number' ";
					//echo $s;
					
					if($q2=$this->db->query($s)){
						if($r2=$q2->row()){
							$this->db->where("item_number","".$r->item_number)->update("inventory_products",
								array("item_number"=>$r2->item_number,
								"description"=>$r2->description,"update_status"=>2));
							$this->message.="\r convert_kode_lama($r->item_number,$r->shipment_id,$r2->item_number)";	
							$cnt=1;
						}	else {
							//tidak ada konversinya
							$this->message.="\r convert_kode_lama($r->item_number) not found !";
							$this->db->where("item_number",''.$r->item_number)->update("inventory_products",array("update_status"=>2));						
						}
					} 
				}
		}
		if($cnt==0){
			if($q=$this->db->query("select line_number,item_number,invoice_number 
				from invoice_lineitems 
				where length(item_number)<11 and update_status!=2 
				and length(item_number)>2 limit 1")){
					if($r=$q->row()){
						$s="select item_number,description from inventory where kode_lama='$r->item_number' ";
						if($q2=$this->db->query($s)){
							if($r2=$q2->row()){
								$this->db->where("item_number","".$r->item_number)->update("invoice_lineitems",
									array("item_number"=>$r2->item_number,
									"update_status"=>2));
								$this->message.="\r convert_kode_lama_invoice($r->item_number,$r->invoice_number,$r2->item_number)";	
								$cnt=1;
							} else {
								//tidak ada konversinya
								$this->message.="\r convert_kode_lama($r->item_number) not found !";
								$this->db->where("item_number",''.$r->item_number)->update("invoice_lineitems",array("update_status"=>2));
							}
						}
					}
			}
			
		}
		
		
	}
    function show_message(){
       echo $this->message; 
    }
    function message_text(){
       return $this->message; 
    }
    function recalc_stock_arsip_gudang(){
    	$item_no="";
		if($q=$this->db->query("select * from zzz_item_need_update_arsip limit 1")){
			if($r=$q->row()){
				$item_no=$r->item_no;
				$tanggal=$r->tanggal;
				$gudang=$r->gudang;
				$id=$r->id;
			}
		}
		if($item_no=="")return false;
		$this->db->query("delete from zzz_item_need_update_arsip where id='$id' ");
		$this->recalc_stock_arsip_gudang_run($item_no, $gudang, $tanggal);
		
    }
	function recalc_stock_arsip_gudang_run($item_number,$gudang,$tanggal){
		$tanggal=date("Y-m-d",strtotime($tanggal));
    	$tanggal2=date("Y-m-d 23:59:59",strtotime($tanggal));
		$this->message.="\r recalc_stock_arsip_gudang_run($item_number,$gudang,$tanggal)";
		
		$s="select * from qry_kartustock_union where item_number='$item_number' 
			and tanggal between '$tanggal' and '$tanggal2' ";
        $data=null;    
		if($qs=$this->db->query($s)){
			foreach($qs->result() as $r){
                $jenis=strtolower($r->jenis);
				$gudang=$r->gudang;
				$qty=$r->qty_masuk-$r->qty_keluar;
                $field="";
                if($jenis=="faktur jual kontan")$field="qty_jual";                
                if($jenis=="po"){
                	$field="qty_recv_po";
				}
                if($jenis=="purchase")$field="qty_po";
                if($jenis=="qty_awal")$field=$jenis;
                if($jenis=="qty_akhir")$field=$jenis;                
                if($jenis=="qty_beli")$field="qty_beli";
                if($jenis=="retur beli kredit")$field="qty_retur_beli";                
                if($jenis=="etc_in")$field="qty_recv_etc";
                if($jenis=="surat jalan")$field="qty_do";
                if($jenis=="retur jual")$field="qty_retur_jual";
                if($jenis=="etc_out")$field="qty_delivery_etc";
                if($jenis=="adjustment")$field="qty_adjust";
                if($jenis=="transfer")$field="qty_mutasi";
                
                if($field=="")$field=$jenis;
                
                if($jenis=="faktur beli kredit")$field="qty_beli";
                
                if($field==""){
                    $this->message.= "<br>Unknown field [$jenis]";
                } else {
                	if(!isset($data[$gudang][$field])){
			            $data[$gudang]['item_number']=$item_number;
			            $data[$gudang]['tanggal']=$tanggal;
                		$data[$gudang][$field]=0;
                	}
                    $data[$gudang][$field]+=$qty;
                }                                    					
			}
			if($data){
				foreach ($data as $key => $value){
					$gdg=$key;
                    $data_stk=$value;
                    var_dump($value);
					$data_stk['gudang']=$key;
					$id=0;
					if($qbb=$this->db->query("select id from inventory_beg_bal_gudang 
						where item_number='$item_number' and gudang='$gdg' and tanggal='$tanggal' ")){
						if($rbb=$qbb->row()){
							$id=$rbb->id;
						}
					}	
					if($id==0){
						$this->db->insert("inventory_beg_bal_gudang",$data_stk);
					} else {							
						$this->db->where("id",$id)->update("inventory_beg_bal_gudang",$data_stk);
					}
				}
			}
			
		}		
	}
    function recalc_stock_arsip($item_number='',$tahun="",$bulan=""){
        if($tahun!=""){
            $item_no=$item_number;
        } else {
            $data=null;
            if($item_number!=""){
                $this->db->where("item_no",$item_number);
            }
            if($q=$this->db->limit(1)->get("zzz_stock_arsip")){
                $data=(array)$q->row();
            }
            if(!$data)return false;
            $tahun=$data["year_arc"];
            $bulan=$data["month_arc"];
            $item_no=$data["item_no"];        
            $id=$data["id"];
        } 
        $this->db->where("item_no",$item_no)->where("year_arc",$tahun)
            ->where("month_arc",$bulan)->delete("zzz_stock_arsip");
        
        if($item_no!=""){
            $this->add_arsip($item_no,$tahun,$bulan);
        }
        return true;
        
    }
    function add_arsip($item_no,$tahun,$bulan){
            
        $cnt=$this->db->query("select count(1) as cnt from zzz_stock_arsip")->row()->cnt;
        
        $this->message.= "\r recalc_stock_arsip($item_no,$tahun,$bulan), antrian: $cnt";        
        
        $tanggal=$tahun."-".$bulan."-1";
        $tgl_awal=date("Y-m-d", strtotime($tanggal)); 
        $this->date_from=$tgl_awal;

        $tanggal=date("Y-m-t", strtotime($tanggal));
        $this->date_to=$tanggal;
        
        $qty_awal=$this->qty_awal($item_no,$tgl_awal);

        //qty_awal dan qty_akhir
        $data_tran=null;
        $sql="select gudang,sum(qty_masuk) q_in,sum(qty_keluar) q_out 
            from qry_kartustock_union where item_number='$item_no' 
            and tanggal<'$tgl_awal' group by gudang";
        if($qawal=$this->db->query($sql)){
            foreach($qawal->result() as $rawal){
                $gudang=strtoupper($rawal->gudang);
                $data_tran[$gudang]['qty_awal']=$rawal->q_in-$rawal->q_out;
                $data_tran[$gudang]['qty_akhir']=$rawal->q_in-$rawal->q_out;                
            }
        }       
                
        $sql="select * from qry_kartustock_union where item_number='$item_no' 
             and year(tanggal)=$tahun and month(tanggal)=$bulan";
        $qtran=$this->db->query($sql);
        
        if($qtran){
            foreach($qtran->result() as $rtran){
                $qty=$rtran->qty_masuk-$rtran->qty_keluar;
                $jenis=strtolower($rtran->jenis);
                $gudang=strtoupper($rtran->gudang);
                if(!isset($data_tran[$gudang][$jenis]))$data_tran[$gudang][$jenis]=0;
                $data_tran[$gudang][$jenis]+=$qty;                
                if(!isset($data_tran[$gudang]['qty_akhir']))$data_tran[$gudang]['qty_akhir']=0;
                $data_tran[$gudang]['qty_akhir']+=$qty;
                
            }
        }
       
        $sql="select sum(qty_masuk) as z_qty_masuk, sum(qty_keluar) as z_qty_keluar 
            from qry_kartustock_union where item_number='$item_no' 
            and year(tanggal)=$tahun 
            and month(tanggal)=$bulan";
            
        $qty_masuk=0;
        $qty_keluar=0;
        if($rQty=$this->db->query($sql)){
            if($rQty2=$rQty->row()){
                $qty_masuk=$rQty2->z_qty_masuk;
                $qty_keluar=$rQty2->z_qty_keluar;                
            }
        }
        $qty_trans=$qty_masuk-$qty_keluar;
        $qty_akhir=$qty_awal+$qty_trans;
        
        $qty_z=$qty_awal+$qty_akhir+$qty_trans;
        
        if($data_tran){
            $data_tran_po=$this->qty_po_tran($item_no,$tahun,$bulan);
            if(!$data_tran_po)$data_tran_po=array();
            
            $data_tran_beli=$this->qty_beli_tran($item_no,$tahun,$bulan);
            if(!$data_tran_beli)$data_tran_beli=array();
            
            $data_tran_beli_retur=$this->qty_beli_tran_retur($item_no,$tahun,$bulan);
            if(!$data_tran_beli_retur)$data_tran_beli_retur=array();

            $data_tran_so=$this->qty_so_tran($item_no,$tahun,$bulan);
            if(!$data_tran_so)$data_tran_so=array();
            
            $data_tran_recv_toko=$this->qty_recv_toko_tran($item_no,$tahun,$bulan);
            if(!$data_tran_recv_toko)$data_tran_recv_toko=array();
                        
            $data_tran_retur_toko=$this->qty_retur_toko_tran($item_no,$tahun,$bulan);
            if(!$data_tran_retur_toko)$data_tran_retur_toko=array();

            $data_tran_rolling_masuk=$this->qty_rolling_masuk_tran($item_no,$tahun,$bulan);
            if(!$data_tran_rolling_masuk)$data_tran_rolling_masuk=array();

            $data_tran_rolling_keluar=$this->qty_rolling_keluar_tran($item_no,$tahun,$bulan);
            if(!$data_tran_rolling_keluar)$data_tran_rolling_keluar=array();

            $data_tran=array_merge_recursive ($data_tran,$data_tran_po,$data_tran_beli,
                $data_tran_beli_retur,$data_tran_so,$data_tran_recv_toko,$data_tran_retur_toko,
                $data_tran_rolling_masuk,$data_tran_rolling_keluar);
            
            $this->add_arsip_data_tran($item_no,$tahun,$bulan,$data_tran,$qty_awal,$qty_akhir);
        }
        //qty_po
        
        //qty_beli
        
        
        $this->add_arsip_data($item_no, $tahun, $bulan,$qty_awal,$qty_akhir,$qty_trans, 
            $qty_masuk,$qty_keluar);
            
            
    }
    function qty_beli_tran_retur($item_no,$tahun,$bulan){
        $s="select sum(il.quantity) as z_qty,il.warehouse_code from purchase_order_lineitems il 
        left join purchase_order i on i.purchase_order_number=il.purchase_order_number 
        where year(po_date)='$tahun' and month(po_date)='$bulan' and potype='R' and il.item_number='$item_no'
        group by il.warehouse_code";
        $data_tran=null;
        if($qpo=$this->db->query($s)){
            foreach($qpo->result() as $rpo){
                $gudang=strtoupper($rpo->warehouse_code);
                $data_tran[$gudang]=array("qty_retur_beli"=>$rpo->z_qty);
            }
        }
        return $data_tran;
    }

    function qty_beli_tran($item_no,$tahun,$bulan){
        $s="select sum(il.quantity) as z_qty,il.warehouse_code from purchase_order_lineitems il 
        left join purchase_order i on i.purchase_order_number=il.purchase_order_number 
        where year(po_date)='$tahun' and month(po_date)='$bulan' and potype='I' and il.item_number='$item_no'
        group by il.warehouse_code";
        $data_tran=null;
        if($qpo=$this->db->query($s)){
            foreach($qpo->result() as $rpo){
                $gudang=strtoupper($rpo->warehouse_code);                
                $data_tran[$gudang]=array("qty_beli"=>$rpo->z_qty);
            }
        }
        return $data_tran;
    }
        
    function qty_po_tran($item_no,$tahun,$bulan){
	    $potype=getvar("PoType","O");

        $s="select sum(il.quantity) as z_qty,il.warehouse_code from purchase_order_lineitems il 
        left join purchase_order i on i.purchase_order_number=il.purchase_order_number 
        where year(po_date)='$tahun' and month(po_date)='$bulan' and potype='$potype' and il.item_number='$item_no'
        group by il.warehouse_code";
        $data_tran=null;
        if($qpo=$this->db->query($s)){
            foreach($qpo->result() as $rpo){
                $gudang=strtoupper($rpo->warehouse_code);
                $data_tran[$gudang]=array("purchase"=>$rpo->z_qty);
            }
        }
        return $data_tran;
    }
    function qty_so_tran($item_no,$tahun,$bulan){
        $s="select sum(il.quantity) as z_qty,il.warehouse_code from sales_order_lineitems il 
        left join sales_order i on i.sales_order_number=il.sales_order_number 
        where year(sales_date)='$tahun' and month(sales_date)='$bulan' and il.item_number='$item_no'
        group by il.warehouse_code";
        $data_tran=null;
        if($qpo=$this->db->query($s)){
            foreach($qpo->result() as $rpo){
            	$gudang=strtoupper($rpo->warehouse_code);
                $data_tran[$gudang]=array("qty_so"=>$rpo->z_qty);
            }
        }
        return $data_tran;
    }
   function qty_recv_toko_tran($item_no,$tahun,$bulan){
       $retval=0;
       $s="select ip.warehouse_code,sum(ip.quantity_received) as z_qty from inventory_products ip
       where ip.item_number='$item_no' and year(ip.date_received)='$tahun' 
            and month(ip.date_received)='$bulan'
            and ip.receipt_type='ETC_IN' and ip.doc_type='3' 
            group by ip.warehouse_code ";
        $data_tran=null;
        if($qpo=$this->db->query($s)){
            foreach($qpo->result() as $rpo){
            	$gudang=strtoupper($rpo->warehouse_code);
                $data_tran[$gudang]=array("qty_recv_toko"=>$rpo->z_qty);
            }
        }
        return $data_tran;
  }

     function qty_retur_toko_tran($item_no,$tahun,$bulan){
       $retval=0;
       $s="select ip.warehouse_code,sum(ip.quantity_received) as z_qty from inventory_products ip
       where ip.item_number='$item_no' and year(ip.date_received)='$tahun' 
            and month(ip.date_received)='$bulan'
            and ip.receipt_type='ETC_OUT' and ip.doc_type='2' 
            group by ip.warehouse_code ";
        $data_tran=null;
        if($qpo=$this->db->query($s)){
            foreach($qpo->result() as $rpo){
            	$gudang=strtoupper($rpo->warehouse_code);                
                $data_tran[$gudang]=array("qty_retur_toko"=>$rpo->z_qty);
            }
        }
        return $data_tran;
  }
        
    function get_last_cost($item_number=""){
        $cost=0;
        $s="select il.price from purchase_order_lineitems il left join purchase_order i 
            on i.purchase_order_number=il.purchase_order_number 
            where il.item_number='$item_number' and i.potype='I' and il.price>0
            and i.po_date<='$this->date_to' order by i.po_date desc limit 1";
            
        if($q=$this->db->query($s)){
            if($r=$q->row()){
                $cost=$r->price;
            }
        }
        if($cost==0){
            if($q=$this->db->select("cost,cost_from_mfg,retail")->where("item_number",$item_number)
                ->get("inventory")){
            
                if($r=$q->row()){
                    $cost=$r->cost;
                    if($cost==0)$cost=$r->cost_from_mfg;
                    $this->retail=$r->retail;
                }        
            }
        }
        $this->cost=$cost;
        return $cost;
    }  
    function get_last_retail(){
        return $this->retail;
    }
    function add_arsip_data_tran($item_no,$tahun,$bulan,$data_tran,$qty_awal,$qty_akhir){
        
        $this->message.=",add_arsip_data_tran(): save OK";
        
        $tanggal=$tahun."-".$bulan."-1";
        $tgl_awal=date("Y-m-d", strtotime($tanggal)); 
        $tanggal=date("Y-m-t", strtotime($tanggal));
        
        $tgl_awal=$this->date_from;
        $tanggal=$this->date_to;
        
        $cost=$this->get_last_cost($item_no);
        $retail=$this->get_last_retail();
          
//        $data['qty_akhir']=$qty_akhir;
        foreach ($data_tran as $gudang => $item) {
            $data=null;    
            $data['gudang']=$gudang;
            $data['item_number']=$item_no;
            $data['tanggal']=$tanggal;
            $data['qty_jual']=0;                $data['qty_retur_beli']=0;
            $data['qty_recv_po']=0;             $data['qty_recv_etc']=0;
            $data['qty_po']=0;                  $data['qty_do']=0;
            $data['qty_awal']=0;                $data['qty_retur_jual']=0;
            $data['qty_akhir']=0;               $data['qty_delivery_etc']=0;
            $data['qty_beli']=0;                $data['qty_adjust']=0;
            $data['qty_mutasi']=0;              $data['qty_adjust']=0;
                        
            foreach($item as $jenis=>$qty){
                $jenis=strtolower($jenis);
                $field="";
                if($jenis=="faktur jual kontan")$field="qty_jual";                
                if($jenis=="po")$field="qty_recv_po";
                if($jenis=="purchase")$field="qty_po";
                if($jenis=="qty_awal")$field=$jenis;
                if($jenis=="qty_akhir")$field=$jenis;                
                if($jenis=="qty_beli" )$field="qty_beli";
                if($jenis=="retur beli kredit")$field="qty_retur_beli";                
                if($jenis=="etc_in")$field="qty_recv_etc";
                if($jenis=="surat jalan")$field="qty_do";
                if($jenis=="retur jual")$field="qty_retur_jual";
                if($jenis=="etc_out")$field="qty_delivery_etc";
                if($jenis=="adjustment")$field="qty_adjust";
                if($jenis=="transfer")$field="qty_mutasi";
                
                if($field=="")$field=$jenis;
                
                if($jenis=="faktur beli kredit")$field="qty_beli";
                
                if($field==""){
                    $this->message.= "<br>Unknown field [$jenis]";
                } else {
                    $data[$field]=$qty;
                }                                    
            }
            $data['cost']=$cost;
            $data['retail']=$retail;
            $sql="select * from inventory_beg_bal_gudang where item_number='$item_no' and tanggal='$tanggal' 
                and gudang='$gudang'";
            if($qibbg=$this->db->query($sql)){
                if($qibbg->num_rows()){
                    //unset($data['gudang']);
                    //unset($data['item_number']);
                    //unset($data['tanggal']);
                    if($ribbg=$qibbg->row()){
                        $id=$ribbg->id;
                        //$this->db->where("id",$id)->update("inventory_beg_bal_gudang",$data);
                                                
                    }
                } else {
                    //$this->db->insert("inventory_beg_bal_gudang",$data);                    
                    
                }
            }
        }
    }
    function add_arsip_data($item_no,$tahun,$bulan,$qty_awal,$qty_akhir,$qty_trans, 
        $qty_masuk,$qty_keluar){
            
         $tanggal=$tahun."-".$bulan."-1";
        $tgl_awal=date("Y-m-d", strtotime($tanggal)); 

        $tanggal=date("Y-m-t", strtotime($tanggal));
        
        $qty_z=$qty_awal+$qty_akhir+$qty_trans;
 
        $sql="select  * from inventory_beginning_balance where item_number='$item_no' 
            and year(tanggal)=$tahun and month(tanggal)=$bulan";

                    
        $data['ttlqty_awal']=$qty_awal;
        $data['ttlqty_akhir']=$qty_akhir;
        $data['ttlqty_trans']=$qty_trans;
        $data['qtyin']=$qty_masuk;
        $data['qtyout']=$qty_keluar;
        $data['item_number']=$item_no;
        $data['tanggal']=$tanggal;
                            
        if($beg_q=$this->db->query($sql)){
            if($beg_r=$beg_q->row()){
                unset($data['tanggal']);
                unset($data['item_number']);
                if($qty_z!=0){
                    $this->db->where("id",$beg_r->id)
                    ->update("inventory_beginning_balance",$data);                                
                }
            } else {
                if($qty_z!=0){
                    $this->db->insert("inventory_beginning_balance",$data);
                }
            }
        }           
    }

    function recalc_stock_unit($item_number){
    	
		//return false;
		$this->message.=", recalc_stock_unit()";
				
        $s="select unit,sum(qty) as z_qty from qs_stock_unit 
        where item_number='$item_number' and tran_type in ('PO','I','ADJ') 
        group by unit" ;
        if($q=$this->db->query($s)){
            foreach($q->result() as $r){
                $data["qty_last"]=$r->z_qty;
                $data["calc_date"]=date("Y-m-d H:i:s");
                $data["update_date"]=$data["calc_date"];
                $data["update_by"]=user_id();
                $data["warehouse_code"]=current_gudang();
                $this->db->where("item_number",$item_number)->where("customer_pricing_code",$r->unit)
                    ->update("inventory_prices",$data);
            }
        }
    }
        
    function recalc_stock_gudang($item_number="",$tahun="",$bulan=""){
        	
        ///return false;
        if($item_number==""){
            $this->message.= "<br> recalc_stock_gudang(): item_number is blank ";
            return false;
        }        
        $this->message.= "\r recalc_stock_gudang(): antri: ".$this->zzz_item_count;
        $sql="select * from q_stock_gudang where item_number='$item_number' ";
        

        $uid=user_id();
        $tgl=date("Y-m-d H:i:s");
        $description="";    
        $cost=0;        
        $manufacturer="";
        $model="";
        if($q=$this->db->where("item_number",$item_number)->get("inventory")){
            if($r=$q->row()){
                $description=$r->description;
                $cost=$r->cost;
                $manufacturer=$r->manufacturer;
                $model=$r->model;
            }
        }
        if($q=$this->db->query($sql)){
            $tot=0;
            $qty=0;
            $sgdg="";
            foreach($q->result() as $r){
                $sgdg.="'$r->gudang',";
                if(isset($r->qty)){
                    $qty=$r->qty;

                } else {
                    $qty=$r->qin-$r->qout;

                }
                $tot+=$qty;
                $this->message.= ",".$r->gudang."=".$qty;
                
                $s="select id from inventory_warehouse 
                    where item_number='$item_number' and warehouse_code='$r->gudang'";
                if($qgd=$this->db->query($s)){
                    if($qgd->num_rows()>0){
                        $id=$qgd->row()->id;
                        $s="update inventory_warehouse set quantity='$qty',
                        update_date='$tgl',update_by='$uid' where id='$id' ";
                        $this->db->query($s);
                        
                    } else {
                        $this->db->insert("inventory_warehouse",array("item_number"=>$item_number,
                            "warehouse_code"=>$r->gudang,"quantity"=>$qty,"create_date"=>$tgl,
                            "create_by"=>$uid,"description"=>$description,
                            "cost"=>$cost,"manufacturer"=>$manufacturer,"model"=>$model));
                    }
                }    
            }
            $this->db->where('item_number',$item_number)->update("inventory",
                array("quantity_in_stock"=>$tot));   
            $sgdg.="''";
            $s="update inventory_warehouse set quantity=0 where item_number='$item_number'
            and warehouse_code not in ($sgdg)";
            $this->db->query($s);
                
        }        
    }
    
   function qty_po($item_number="",$date1,$date2,$supplier="",$outlet="",$category="",$sistim=""){
       $retval=0;
       $s="select sum(quantity) as qty from purchase_order_lineitems pol
       inner join purchase_order p on p.purchase_order_number=pol.purchase_order_number
       inner join inventory i on i.item_number=pol.item_number
       where p.po_date between '$date1' and '$date2' 
       and p.potype='O' ";
       if($item_number!="")$s.=" and pol.item_number='$item_number'";
       if($supplier!="")$s.=" and p.supplier_number='$supplier'";
       if($category!="")$s.=" and i.category='$category'";
       if($outlet!="")$s.=" and pol.warehouse_code='$outlet'";
       if($sistim!="")$s.=" and i.type_of_invoice='$sistim'";    
       if($q=$this->db->query($s)){
           if($row=$q->row()){
               $retval=$row->qty;
           }
       }
       return $retval;
   }
   function qty_recv($item_number="",$date1,$date2,$supplier="",$outlet="",$category="",$sistim=""){
       $retval=0;
       $s="select sum(quantity_received) as qty from inventory_products ip
       inner join purchase_order p on p.purchase_order_number=ip.purchase_order_number
       inner join inventory i on i.item_number=ip.item_number
       where ip.date_received between '$date1' and '$date2' 
       and ip.receipt_type='PO' ";
       if($item_number!="")$s.=" and ip.item_number='$item_number'";
       if($supplier!="")$s.=" and p.supplier_number='$supplier'";
       if($category!="")$s.=" and i.category='$category'";
       if($outlet!="")$s.=" and ip.warehouse_code='$outlet'";
       if($sistim!="")$s.=" and i.type_of_invoice='$sistim'";    
       if($q=$this->db->query($s)){
           if($row=$q->row()){
               $retval=$row->qty;
           }
       }
       
       return $retval;
  }
  
   function qty_recv_toko($item_number="",$date1,$date2,$supplier="",$outlet="",$category="",$sistim=""){
       $retval=0;
       $s="select sum(quantity_received) as qty from inventory_products ip
       inner join inventory i on i.item_number=ip.item_number
       where ip.date_received between '$date1' and '$date2' 
       and ip.receipt_type='ETC_IN' and doc_type='3' ";
       if($item_number!="")$s.=" and ip.item_number='$item_number'";
       if($supplier!="")$s.=" and i.supplier_number='$supplier'";
       if($category!="")$s.=" and i.category='$category'";
       if($outlet!="")$s.=" and ip.warehouse_code='$outlet'";
       if($sistim!="")$s.=" and i.type_of_invoice='$sistim'";    
       if($q=$this->db->query($s)){
           if($row=$q->row()){
               $retval=$row->qty;
           }
       }
       
       return $retval;
  }
   function qty_recv_toko_gab($item_number="",$date1,$date2,$supplier="",$outlet="",$category="",$sistim=""){
       $retval['qty']=0;
       $retval['amount']=0;
       $s="select sum(quantity_received) as qty,
       sum(quantity_received*i.cost_from_mfg) as amount 
       from inventory_products ip
       inner join inventory i on i.item_number=ip.item_number
       where ip.date_received between '$date1' and '$date2' 
       and ip.receipt_type='ETC_IN' and doc_type='3' ";
       if($item_number!="")$s.=" and ip.item_number='$item_number'";
       if($supplier!="")$s.=" and i.supplier_number='$supplier'";
       if($category!="")$s.=" and i.category='$category'";
       if($outlet!="")$s.=" and ip.warehouse_code='$outlet'";
       if($sistim!="")$s.=" and i.type_of_invoice='$sistim'";    

      if($q=$this->db->query($s)){
           if($row=$q->row()){
               $retval['qty']=$row->qty;
               $retval['amount']=$row->amount;
           }
       }
       
       return $retval;
  }
   function qty_retur_toko($item_number="",$date1,$date2,$supplier="",$outlet="",$category="",$sistim=""){
       $retval=0;
       $s="select sum(quantity) as qty 
       from invoice_lineitems ip
       inner join invoice inv on inv.invoice_number=ip.invoice_number
       inner join inventory i on i.item_number=ip.item_number
       where inv.invoice_date between '$date1' and '$date2' 
       and inv.invoice_type='R' ";
       if($item_number!="")$s.=" and ip.item_number='$item_number'";       
       if($supplier!="")$s.=" and i.supplier_number='$supplier'";
       if($category!="")$s.=" and i.category='$category'";
       if($outlet!="")$s.=" and ip.warehouse_code='$outlet'";
       if($sistim!="")$s.=" and i.type_of_invoice='$sistim'";    
       
       if($q=$this->db->query($s)){
           if($row=$q->row()){
               $retval=$row->qty;
           }
       }
       
       return $retval;
       
   }
      
   function qty_retur_toko_gab($item_number="",$date1,$date2,$supplier="",$outlet="",$category="",$sistim=""){
       $retval['qty']=0;
       $retval['amount']=0;
       $s="select sum(quantity_received) as qty,
       sum(quantity_received*i.cost_from_mfg) as amount 
       from inventory_products ip
       inner join inventory i on i.item_number=ip.item_number
       where ip.date_received between '$date1' and '$date2' 
       and ip.receipt_type='ETC_OUT' and doc_type='2' ";
       if($item_number!="")$s.=" and ip.item_number='$item_number'";       
       if($supplier!="")$s.=" and i.supplier_number='$supplier'";
       if($category!="")$s.=" and i.category='$category'";
       if($outlet!="")$s.=" and ip.warehouse_code='$outlet'";
       if($sistim!="")$s.=" and i.type_of_invoice='$sistim'";    

       if($q=$this->db->query($s)){
           if($row=$q->row()){
               $retval['qty']=$row->qty;
               $retval['amount']=$row->amount;
           }
       }
       
       return $retval;
       
   }
      function qty_jual($item_number="",$date1,$date2,$supplier="",$outlet="",$category="",$sistim=""){
       $retval=0;
       $s="select sum(quantity) as qty from invoice_lineitems ip
       inner join invoice inv on inv.invoice_number=ip.invoice_number
       inner join inventory i on i.item_number=ip.item_number
       where inv.invoice_date between '$date1' and '$date2' 
       and inv.invoice_type='I' ";
       if($item_number!="")$s.=" and ip.item_number='$item_number'";
       if($supplier!="")$s.=" and i.supplier_number='$supplier'";
       if($category!="")$s.=" and i.category='$category'";
       if($outlet!="")$s.=" and ip.warehouse_code='$outlet'";
       if($sistim!="")$s.=" and i.type_of_invoice='$sistim'";    
       
       
      if($q=$this->db->query($s)){
           if($row=$q->row()){
               $retval=$row->qty;
           }
       }
       
       return $retval;
              
   }
      function qty_jual_gab($item_number="",$date1,$date2,$supplier="",$outlet="",$category="",$sistim=""){
       $retval['qty']=0;
       $retval['amount']=0;
       
       $s="select sum(quantity) as qty,
       sum(quantity*i.retail) as amount,
       sum(quantity*i.cost_from_mfg) as amount_cost
        from invoice_lineitems ip
       inner join invoice inv on inv.invoice_number=ip.invoice_number
       inner join inventory i on i.item_number=ip.item_number
       where inv.invoice_date between '$date1' and '$date2' 
       and inv.invoice_type='I' ";
       if($item_number!="")$s.=" and ip.item_number='$item_number'";
       if($supplier!="")$s.=" and i.supplier_number='$supplier'";
       if($category!="")$s.=" and i.category='$category'";
       if($outlet!="")$s.=" and ip.warehouse_code='$outlet'";
       if($sistim!="")$s.=" and i.type_of_invoice='$sistim'";    
       
       
       if($q=$this->db->query($s)){
           if($row=$q->row()){
               $retval['qty']=$row->qty;
               $retval['amount']=$row->amount;
               $retval['amount_cost']=$row->amount_cost;
           }
       }
       
       return $retval;
              
   }

      function qty_rk($item_number,$date1,$date2,$supplier="",$outlet="",$category="",$sistim=""){
       $retval=0;
              return $retval;
       
   }
      function qty_awal($item_number="",$date1,$date2="",$supplier="",$outlet="",$category="",$sistim=""){
       $retval=0;
       $s="select sum(qty_masuk) q_in,sum(qty_keluar) q_out 
        from qry_kartustock_union q 
        left join inventory i on i.item_number=q.item_number
            where tanggal<'$date1'";
       if($item_number!="")$s.=" and q.item_number='$item_number'";     
       if($supplier!="")$s.=" and i.supplier_number='$supplier'";
       if($category!="")$s.=" and i.category='$category'";
       if($outlet!="")$s.=" and q.gudang='$outlet'";
       if($sistim!="")$s.=" and i.type_of_invoice='$sistim'";    
       
       
       if($q=$this->db->query($s)){
           if($row=$q->row()){
               $retval=$row->q_in-$row->q_out;
           }
       }
                        
      return $retval;
    }    
      function qty_akhir($item_number="",$date2,$supplier="",$outlet="",$category="",$sistim=""){
       $retval=0;
       $s="select sum(qty_masuk) q_in,sum(qty_keluar) q_out 
        from qry_kartustock_union q 
        left join inventory i on i.item_number=q.item_number
            where tanggal<'$date2'";
       if($item_number!="")$s.=" and q.item_number='$item_number'";     
       if($supplier!="")$s.=" and i.supplier_number='$supplier'";
       if($category!="")$s.=" and i.category='$category'";
       if($outlet!="")$s.=" and q.gudang='$outlet'";
       if($sistim!="")$s.=" and i.type_of_invoice='$sistim'";    
       
       
      if($q=$this->db->query($s)){
           if($row=$q->row()){
               $retval=$row->q_in-$row->q_out;
           }
       }
                        
      return $retval;
    }    
        
   function qty_beli_gab($item_number="",$date1,$date2,$supplier="",$outlet="",$category="",$sistim=""){       
       $retval['qty']=0;
       $retval['amount']=0;
       $trm=$this->qty_recv_toko_gab($item_number,$date1, $date2,$supplier,$outlet,$category,$sistim);
       $ret=$this->qty_retur_toko_gab($item_number,$date1, $date2,$supplier,$outlet,$category,$sistim);
       $retval['qty']=$trm['qty']-$ret['qty'];
       $retval['amount']=$trm['amount']-$ret['amount'];
       return $retval;       
   }
   function qty_hilang_gab($item_number="",$date1,$date2,$supplier="",$outlet="",$category="",$sistim=""){
       $retval['qty']=0;
       $retval['amount']=0;
       $s="select sum(to_qty) as qty,
       sum(to_qty*i.cost_from_mfg) as amount 
       from inventory_moving ip
       inner join inventory i on i.item_number=ip.item_number
       where ip.date_trans between '$date1' and '$date2' 
       and ip.trans_type='ADJ' and ip.to_qty<0";
       if($item_number!="")$s.=" and ip.item_number='$item_number'";
       if($supplier!="")$s.=" and i.supplier_number='$supplier'";
       if($category!="")$s.=" and i.category='$category'";
       if($outlet!="")$s.=" and ip.from_location='$outlet'";
       if($sistim!="")$s.=" and i.type_of_invoice='$sistim'";    
       
       
       if($q=$this->db->query($s)){
           if($row=$q->row()){
               $retval['qty']=$row->qty;
               $retval['amount']=$row->amount;
           }
       }
       
       return $retval;
  }
   function qty_adj_plus_gab($item_number="",$date1,$date2,$supplier="",$outlet="",$category="",$sistim=""){
       $retval['qty']=0;
       $retval['amount']=0;
       $s="select sum(to_qty) as qty,
       sum(to_qty*i.cost_from_mfg) as amount 
       from inventory_moving ip
       inner join inventory i on i.item_number=ip.item_number
       where ip.date_trans between '$date1' and '$date2' 
       and ip.trans_type='ADJ' and ip.to_qty>0  and ip.doc_type<>'1'";
       if($item_number!="")$s.=" and ip.item_number='$item_number'";
       if($supplier!="")$s.=" and i.supplier_number='$supplier'";
       if($category!="")$s.=" and i.category='$category'";
       if($outlet!="")$s.=" and ip.from_location='$outlet'";
       if($sistim!="")$s.=" and i.type_of_invoice='$sistim'";    
              
       
       if($q=$this->db->query($s)){
           if($row=$q->row()){
               $retval['qty']=$row->qty;
               $retval['amount']=$row->amount;
           }
       }
       
       return $retval;
  }
   function qty_adj_min_gab($item_number="",$date1,$date2,$supplier="",$outlet="",$category="",$sistim=""){
       $retval['qty']=0;
       $retval['amount']=0;
       $s="select sum(to_qty) as qty,
       sum(to_qty*i.cost_from_mfg) as amount 
       from inventory_moving ip
       inner join inventory i on i.item_number=ip.item_number
       where ip.date_trans between '$date1' and '$date2' 
       and ip.trans_type='ADJ' and ip.to_qty<0 and ip.doc_type<>'1' ";
       if($item_number!="")$s.=" and ip.item_number='$item_number'";
       if($supplier!="")$s.=" and i.supplier_number='$supplier'";
       if($category!="")$s.=" and i.category='$category'";
       if($outlet!="")$s.=" and ip.from_location='$outlet'";
       if($sistim!="")$s.=" and i.type_of_invoice='$sistim'";    
              
       
       if($q=$this->db->query($s)){
           if($row=$q->row()){
               $retval['qty']=$row->qty;
               $retval['amount']=$row->amount;
           }
       }
       
       return $retval;
  }
   
      function qty_adjust($item_number="",$date1,$date2,$supplier="",$outlet="",$category="",$sistim=""){
           $retval=0;
           $s="select sum(to_qty) as qty from inventory_moving ip
           inner join inventory i on i.item_number=ip.item_number
           where ip.trans_type='ADJ' and  ip.date_trans between '$date1' and '$date2'  ";
           if($item_number!="")$s.=" and ip.item_number='$item_number'";
           if($supplier!="")$s.=" and i.supplier_number='$supplier'";
           if($category!="")$s.=" and i.category='$category'";
           if($outlet!="")$s.=" and ip.from_location='$outlet'";
           if($sistim!="")$s.=" and i.type_of_invoice='$sistim'";    
           
           
           if($q=$this->db->query($s)){
               if($row=$q->row()){
                   $retval=$row->qty;
               }
           }
           
           return $retval;
    }
      function qty_rolling_keluar_tran($item_number="",$tahun,$bulan){
           $retval=0;
           $s="select ip.from_location,sum(to_qty) as z_qty from inventory_moving ip
           where ip.doc_type='ROLLING' and ip.from_location<>ip.to_location and  year(ip.date_trans)='$tahun' 
           and month(ip.date_trans)='$bulan' 
           group by ip.from_location ";
           
        $data_tran=null;
        if($qpo=$this->db->query($s)){
            foreach($qpo->result() as $rpo){
                $data_tran[$rpo->from_location]=array("qty_roling_keluar"=>$rpo->z_qty);
            }
        }
        return $data_tran;
           
    }
      function qty_rolling_masuk_tran($item_number="",$tahun,$bulan){
           $retval=0;
           $s="select ip.to_location,sum(to_qty) as z_qty from inventory_moving ip
           where ip.doc_type='ROLLING' and  ip.from_location<>ip.to_location and  year(ip.date_trans)='$tahun' 
           and month(ip.date_trans)='$bulan' 
           group by ip.to_location ";
           
        $data_tran=null;
        if($qpo=$this->db->query($s)){
            foreach($qpo->result() as $rpo){
                $data_tran[$rpo->to_location]=array("qty_roling_masuk"=>$rpo->z_qty);
            }
        }
        return $data_tran;
           
    }
        
   
      function qty_rolling_masuk($item_number="",$date1,$date2,$supplier="",$outlet="",$category="",$sistim=""){
           $retval=0;
           $s="select sum(quantity_received) as qty 
           from inventory_products ip
           inner join inventory i on i.item_number=ip.item_number
           where ip.date_received between '$date1' and '$date2' 
           and ip.receipt_type='ETC_OUT' and doc_type in ('1','2') ";
           if($item_number!="")$s.=" and ip.item_number='$item_number'";       
           if($supplier!="")$s.=" and i.supplier_number='$supplier'";
           if($category!="")$s.=" and i.category='$category'";
           if($outlet!="")$s.=" and ip.warehouse_code='$outlet'";
           if($sistim!="")$s.=" and i.type_of_invoice='$sistim'";    
           
           
           if($q=$this->db->query($s)){
               if($row=$q->row()){
                   $retval=$row->qty;
               }
           }
           
           return $retval;
    }
   
      function qty_rolling_keluar($item_number="",$date1,$date2,$supplier="",$outlet="",$category="",$sistim=""){
           $retval=0;
           $s="select sum(quantity_received) as qty 
           from inventory_products ip
           inner join inventory i on i.item_number=ip.item_number
           where ip.date_received between '$date1' and '$date2' 
           and ip.receipt_type='ETC_OUT' and doc_type in ('1','2') ";
           if($item_number!="")$s.=" and ip.item_number='$item_number'";       
           if($supplier!="")$s.=" and i.supplier_number='$supplier'";
           if($category!="")$s.=" and i.category='$category'";
           if($outlet!="")$s.=" and ip.warehouse_code='$outlet'";
       if($sistim!="")$s.=" and i.type_of_invoice='$sistim'";    
           
           
           if($q=$this->db->query($s)){
               if($row=$q->row()){
                   $retval=$row->qty;
               }
           }
               
           return $retval;
    }
	function trx_data_sj($from_gudang){

		$msg="";
		$db="kagum_";
		$db_sumber="";
		$db_target="";
		if($q=$this->db->select("company_name")->where("location_number",$from_gudang)->get("shipping_locations"))
		{
			if($r=$q->row())
			{
				$db.=$r->company_name;
				$db_sumber=$r->company_name;
			}	
		}
		if($q=$this->db->select("company_name")->where("location_number",$from_gudang)->get("shipping_locations"))
		{
			if($r=$q->row())
			{
				$db_target=$r->company_name;
			}	
		}
		if($from_gudang==current_gudang()){
			return false;
		}
		if($db_sumber==$db_target){
			return false;
		}
		$dsn = 'mysqli://root:atl24nta@localhost/'.$db;				
		$otherdb = $this->load->database($dsn, TRUE); // the TRUE paramater tells CI that you'd like to return the database object.
		$otherdb->where("supplier_number",current_gudang());
		$otherdb->where("warehouse_code",$from_gudang);
		$otherdb->where("receipt_type","ETC_OUT");
		$otherdb->where("selected",null);
		$otherdb->limit(10);
		$query = $otherdb->get('inventory_products');
		if($query){
			foreach($query->result_array() as $row)
			{
				$id=$row['id'];
				$sql="update inventory_products set selected=1 where id='$id'";
				$otherdb->query($sql);
				unset($row['id']);
				$this->db->insert("inventory_products",$row);
				
			}
			$msg="trx_data_sj...";
		}
		return $msg;
	}
    function hpp_calc($item_number,$cost_new,$qty_new){
        if($item_number=='' || c_($cost_new)==0 || c_($qty_new)==0) {
            return false;
        }
        $cost_old=0;
        $qty_old=0;
        $cost_from_mfg=0;
        if($q=$this->db->select("cost,cost_from_mfg,quantity_in_stock")
            ->where("item_number",$item_number)->get("inventory")){
            if($r=$q->row()){
                $cost_old=$r->cost;
                if($cost_old==0)$cost_old=$r->cost_from_mfg;
                $qty_old=$r->quantity_in_stock;                
                if($cost_old==0)$cost_old=$cost_new;
                if($r->cost_from_mfg==0)$cost_from_mfg=$cost_old;
            }    
        }
		$cost=0;
        if($qty_old+$qty_new>0){
        	if($qty_old==0)$qty_old=1;
	        $cost=round((($cost_old*$qty_old)+($cost_new*$qty_new))/($qty_old+$qty_new),4);
        	
        }    
        if($cost>0){
//        	$dup['cost']=$cost;
			
            $this->db->where("item_number",$item_number)->update("inventory",
                array("cost"=>$cost));
        }
    }
}
