<?php
if(!defined('BASEPATH')) exit('No direct script access allowd');

class Promosi_point extends CI_Controller {
    private $limit=10;
    private $table_name='promosi_disc';
    private $sql=""; 
    private $file_view='sales/promosi_point';
    private $primary_key='id';
    private $controller='so/promosi_point';

    function __construct()    {
		parent::__construct();        
         
		if(!$this->access->is_login())redirect(base_url());
		$this->load->helper(array('url','form','mylib_helper'));
		$this->load->library('sysvar');
		$this->load->library('template');
		$this->load->library('form_validation');
		$this->load->model('inventory_model');
		$this->load->model('sales/promosi_model');
		$this->load->model('sales/promosi_item_model');
		$this->load->library('list_of_values');
		$this->load->model('category_model');
		$this->load->model('supplier_model');
		$this->load->model('customer_model');
		$this->load->model('customer_type_model');

		$this->sql="select * from promosi_disc";
    }
	function nomor_bukti($add=false)
	{
		$key="Promosi Numbering";
		if($add){
		  	$this->sysvar->autonumber_inc($key);
		} else {			
			$no=$this->sysvar->autonumber($key,0,'!PR~$00001');
			for($i=0;$i<100;$i++){			
				$no=$this->sysvar->autonumber($key,0,'!PR~$00001');
				$rst=$this->promosi_model->get_by_id($no)->row();
				if($rst){
				  	$this->sysvar->autonumber_inc($key);
				} else {
					break;					
				}
			}
			return $no;
		}
	}
	
	function set_defaults($record=NULL)
	{
		$data=data_table($this->table_name,$record);
		$data['mode']='';
		$data['message']='';
		if($record==NULL)$data['promosi_code']=$this->nomor_bukti();
		
		$data['lookup_inventory']=$this->list_of_values->lookup_inventory();
		$data['lookup_category']=$this->category_model->lookup();
		$data['lookup_supplier']=$this->supplier_model->lookup();
		$data['lookup_merk']=$this->inventory_model->lookup_merk();
		$data['lookup_customer']=$this->customer_model->lookup();
		$data['lookup_customer_type']=$this->customer_type_model->lookup();
		
		return $data;
	}
	function get_posts(){
		$data=data_table_post($this->table_name);
		return $data;
	}
	
    function index(){	
        $this->browse();
    }
 	function add()
	{
		 $data=$this->set_defaults();
		 
		 $this->_set_rules();
		 if ($this->form_validation->run()=== TRUE){
			$data=$this->get_posts();
			$data['promosi_code']=$this->nomor_bukti(); 
			$this->promosi_model->save($data);
			$this->nomor_bukti(true);
		} else {
			$data['mode']='add';
			$data['message']='';
			$this->template->display_form_input($this->file_view,$data,'');			
		}        
	}
	
	function delete_items($id){
		$data['success']=true;
		if($this->db->where("id",$id)->delete($this->table_name)){
			$data['message']="Sukses.";
		} else {
			$data['success']=false;
			$data['message']=$this->db->display_error();
		}
		echo json_encode($data);
	}
	function items($nomor){
		$sql="select * from promosi_item where promosi_code='$nomor' order by id";
		echo datasource($sql);
	}
    function load_items($page=0){
		$data['success']=true;
		$promosi_code=$this->input->get('promosi_code');
		$description=$this->input->get("description");
		$date_from=$this->input->get('date_from');
		$date_to=$this->input->get('date_to');
		$category=$this->input->get('category');
		$nilai=$this->input->get('nilai');
		$qty=$this->input->get('qty');
		
		$items=$this->input->get('items');
		
		$this->db->limit(100,$page*100);
		$this->db->where('category',6);
		$this->db->where('promosi_code',$promosi_code);
		$sql="select p.item_number,
		if(s.description=null,c.category,s.description) as description,
		p.id 
		from promosi_item p 
		left join inventory s on s.item_number=p.item_number
		left join inventory_categories c on c.kode=p.item_number 
		left join suppliers sup on sup.supplier_number=p.item_number";

		if($q=$this->db->query($sql)){
			$data['data']=$q->result_array();
		} else {
			$data['success']=false;
			$data['message']=$this->db->display_error();
		}
		echo json_encode($data);
    }
    function save()   {
		$mode=$this->input->post('mode');
		if($mode=="add"){
	        $id=$this->nomor_bukti();
		} else {
			$id=$this->input->post('promosi_code');			
		}
		$data=$this->input->post();
		$data['promosi_code']=$id;
		$data['category']=6;
		unset($data['mode']);
		if($mode=="add"){
			$ok=$this->promosi_model->save($data);
		} else {
			$ok=$this->promosi_model->update($id,$data);
		}
		if ($ok){
			if($mode=="add") $this->nomor_bukti(true);
			echo json_encode(array('success'=>true,'promosi_code'=>$id));
		} else {
			echo json_encode(array('success'=>false,'msg'=>$this->db->display_error()));
		}
    }
	function update()
	{
		 $data=$this->set_defaults();
		 $this->_set_rules();
 		 $id=$this->input->post('promosi_code');
		 if ($this->form_validation->run()=== TRUE){
			$data=$this->get_posts();			 
			$this->promosi_model->update($id,$data);
            $message='Update Success';
		} else {
			$message='Error Update';
		}                
 		$this->view($id,$message);		
	}
	function view($id,$message=null)	{
		$id=urldecode($id);
		$message=urldecode($message);
		$model=$this->promosi_model->get_by_id($id)->row();
		$data=$this->set_defaults($model);
		$data[$this->primary_key]=$id;
		$data['mode']='view';
		$data['message']=$message;
		$this->template->display_form_input($this->file_view,$data);
    }
 
   
	function _set_rules(){	
		 $this->form_validation->set_rules('promosi_code','Promosi code', 'required|trim');
	}
	 
	function valid_date($str)
	{
	 if(!preg_match('/^[0-9]{4}-[0-9]{2}-[0-9]{2}$/',$str))
	 {
		 $this->form_validation->set_message('from_date',
		 'Format tanggal salah, seharusnya yyyy-mm-dd');
		 return false;
	 } else {
	 	return true;
	 }
	}
	function search(){$this->browse();}
	
    function browse($offset=0,$limit=50,$order_column='promosi_code',$order_type='asc'){
		$data['controller']=$this->controller;
		$data['_left_menu_caption']='Search';
		$data['fields_caption']=array('Kode Promo','Nama Promosi','Tgl Awal','Tgl Akhir');
		$data['fields']=array('promosi_code','description','date_from','date_to');
		$data['field_key']='promosi_code';
		$data['caption']='DAFTAR KODE PROMOSI';

		$this->load->library('search_criteria');
		
		$faa[]=criteria("Dari","sid_date_from","easyui-datetimebox");
		$faa[]=criteria("S/d","sid_date_to","easyui-datetimebox");
		$faa[]=criteria("Promosi Code","sid_code");
		$data['criteria']=$faa;
		$this->template->display_browse2($data);
    }
    function browse_data($offset=0,$limit=100,$nama=''){
    	$nama_promo=$this->input->get('sid_nama');
		$no=$this->input->get('sid_nama');
		$d1= date( 'Y-m-d H:i:s', strtotime($this->input->get('sid_date_from')));
		$d2= date( 'Y-m-d H:i:s', strtotime($this->input->get('sid_date_to')));
        $sql=$this->sql." where category='6' ";
		if($no!=''){
			$sql.=" and promosi_code='$no'";
		} else {
			$sql.=" and date_from between '$d1' and '$d2'";
		}
//        $sql.=" limit $offset,$limit";
        if($this->input->get("page"))$offset=$this->input->get("page");
        if($this->input->get("rows"))$limit=$this->input->get("rows");
        if($offset>0)$offset--;

        $offset=10*$offset;
        $sql.=" limit $offset,$limit";


        echo datasource($sql);
    }	 
	function delete($id){
		$id=urldecode($id);
	 	$this->promosi_model->delete($id);
        $this->browse();
	}
    function detail(){
        $data['promsoi_code']=$this->input->get('promosi_code');
        $this->promosi_model->save($data);
		header("location: ".base_url()."index.php/so/promosi_point/view/".$data['promosi_code']);
    }
	function view_detail($nomor){
		$nomor=urldecode($nomor);
		$sql="select d.item_number,d.description
		from promosi_item d
		where promosi_code='$nomor'";
		echo browse_simple($sql);
    }
    function add_item(){
    	$nomor=$this->input->get('promsoi_code');            
        if(!$nomor){
            $data['message']='Kode promosi tidak diisi.!';
			return false;
        }
        $data['promosi_code']=$nomor;
        $this->load->view('so/promosi_point',$data);
    }
	function save_item(){
		$id=0;
		$success=false;
		$item_number=$this->input->get("item_no");
		$promosi_code=$this->input->get("promosi_code");
		$item_type="item";
		if($itype=$this->input->get("item_type")){
			$item_type=$itype;
		}
		if($item_number && $promosi_code){
			$data['item_number']=$item_number;
			$data['promosi_code']=$promosi_code;
			$data['line_type']=$item_type;
			$data['item_type']=$item_type;
			$id= $this->promosi_model->save_item($data);	
		}
		if($id>0)$success=true;
		echo json_encode(array("success"=>$success,"id"=>$id));
	}
	function delete_item($id){
		$id=urldecode($id);
		 $ok=$this->promosi_model->delete_item($id);
		 echo json_encode(array("success"=>$ok));
	}
	function customers($nomor){
		$sql="select pic.cust_code,c.company,pic.line_type,pic.id 
		from promosi_item_customer pic 
		left join customers c on c.customer_number=pic.cust_code 
		where pic.promosi_code='$nomor' order by pic.id";
		echo datasource($sql);
	}
	function delete_item_customer($id){
		$id=urldecode($id);
		 $ok=$this->promosi_model->delete_item_customer($id);
		 echo json_encode(array("success"=>$ok));
	}
	function save_item_customer(){
		$this->save_customer();
	}
	function save_customer(){
		$id=0;
		$success=false;
		$customer_number=$this->input->get("customer_number");
		$promosi_code=$this->input->get("promosi_code");
		$item_type="customer";
		if($itype=$this->input->get("line_type")){
			$item_type=$itype;
		}
		if($customer_number && $promosi_code){
			$data['cust_code']=$customer_number;
			$data['promosi_code']=$promosi_code;
			$data['line_type']=$item_type;
			$id= $this->promosi_model->save_item_customer($data);	
		}
		if($id>0)$success=true;
		echo json_encode(array("success"=>$success,"id"=>$id));
	}
	
}
?>
