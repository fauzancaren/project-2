<?php
if(!defined('BASEPATH')) exit('No direct script access allowd');

class Promosi_extra extends CI_Controller {
    private $limit=10;
    private $table_name='promosi_disc';
    private $sql="select * from promosi_disc";
    private $file_view='sales/promosi_extra';
    private $primary_key='promosi_code';
    private $controller='so/promosi_extra';

    function __construct()    {
        parent::__construct();        
         
        if(!$this->access->is_login())redirect(base_url());
        $this->load->helper(array('url','form','mylib_helper'));
        $this->load->library('sysvar');
        $this->load->library('template');
        $this->load->library('form_validation');
        $this->load->model('sales/promosi_model');
		$this->load->model('syslog_model');
        $this->load->model('category_model');
		$this->load->model('supplier_model');
		$this->load->model('customer_model');
		$this->load->model('customer_type_model');

    }
    function index(){
        $this->browse();
    }
    function browse($offset=0,$limit=50,$order_column='sales_order_number',$order_type='asc'){
		$this->load->library('search_criteria');
		$data['controller']=$this->controller;
		$data['fields_caption']=array('Nama Promosi','Kode Promosi','Tangal Awal','Tanggal Akhir','Qty Jual','Qty Extra');
		$data['fields']=array('description','promosi_code','date_from','date_to','qty','nilai');
		if(!$data=set_show_columns($data['controller'],$data)) return false; 			
		$data['field_key']='promosi_code';
		$data['caption']='DAFTAR KODE PROMOSI EXTRA QTY';
		$data['posting_visible']=true;		
		$faa[]=criteria("Dari","sid_date_from","easyui-datetimebox");
		$faa[]=criteria("S/d","sid_date_to","easyui-datetimebox");
		$faa[]=criteria("Nomor Bukti","sid_number");
		$faa[]=criteria("Nama Promosi","sid_nama");		
		$data['criteria']=$faa;
        $this->template->display_browse2($data);            
    }
    function browse_data($offset=0,$limit=100,$nama=''){
    	$nama=$this->input->get('sid_nama');
		$kode=$this->input->get('sid_number');
		$d1= date( 'Y-m-d H:i:s', strtotime($this->input->get('sid_date_from')));
		$d2= date( 'Y-m-d H:i:s', strtotime($this->input->get('sid_date_to')));
        $sql=$this->sql." where category='2' ";
        
        $search="";
        if($this->input->get("tb_search")){
            $search=$this->input->get("tb_search");
			if($search!="")$kode=$search;
        }
        
		if($kode!=''){
			$sql.=" and promosi_code='$kode'";
		} else {
//			$sql.="  between '$d1' and '$d2'";
			if($nama!='')$sql.=" and description like '%$nama%'";	
		}
        $sql.=" order by description";

        if($this->input->get("page"))$offset=$this->input->get("page");
        if($this->input->get("rows"))$limit=$this->input->get("rows");
        if($offset>0)$offset--;
        $offset=$limit*$offset;
		$sql.=" limit $offset,$limit";
        echo datasource($sql);    
    }	   
    function indexold()    {   
        $data['caption']="Promosi Item Discount";
        
        $setting['dlgId']="inventory";
        $setting['dlgBindId']="item_number";
        $setting['dlgRetFunc']="$('#item_number').val(row.item_number);
            $('#description').val(row.description);";
        $setting['dlgCols']=array( 
                    array("fieldname"=>"description","caption"=>"Nama Barang","width"=>"280px"),
                    array("fieldname"=>"item_number","caption"=>"Kode","width"=>"100px")
                );          
        $data['lookup_inventory']=$this->list_of_values->render($setting);
        
        $data['lookup_extra_items']=$this->list_of_values->render(array(
            'dlgId'=>'inventory2','dlgBindId'=>'extra_items',
            'dlgRetFunc'=>"$('#extra_items').val(row.item_number);
                $('#extra_item_name').val(row.description);",
            'dlgCols'=>array( 
                    array("fieldname"=>"description","caption"=>"Nama Barang","width"=>"280px"),
                    array("fieldname"=>"item_number","caption"=>"Kode","width"=>"100px")
                )
        ));

        $setting['dlgId']="inventory_categories";
        $setting['dlgBindId']="categories";
        $setting['dlgRetFunc']="$('#item_number').val(row.kode);
            $('#description').val(row.category);";
        $setting['dlgCols']=array( 
                    array("fieldname"=>"category","caption"=>"Category","width"=>"280px"),
                    array("fieldname"=>"kode","caption"=>"Kode","width"=>"100px")
                );          
        $data['lookup_category']=$this->list_of_values->render($setting);

        $setting['dlgId']="suppliers";
        $setting['dlgBindId']="suppliers";
        $setting['dlgRetFunc']="$('#item_number').val(row.supplier_number);
            $('#description').val(row.supplier_name);";
        $setting['dlgCols']=array( 
                    array("fieldname"=>"supplier_name","caption"=>"Nama","width"=>"280px"),
                    array("fieldname"=>"supplier_number","caption"=>"Kode","width"=>"100px")
                );          
        $data['lookup_supplier']=$this->list_of_values->render($setting);
        
        $data['lookup_merk']=$this->list_of_values->render(array(
            "dlgBindId"=>"merk","sysvar_lookup"=>"merk",
            "dlgRetFunc"=>"$('#item_number').val(row.varvalue);
                           $('#description').val(row.keterangan);"
        ));
        $data['lookup_model']=$this->list_of_values->render(array(
            "dlgBindId"=>"model","sysvar_lookup"=>"model",
            "dlgRetFunc"=>"$('#item_number').val(row.varvalue);
                           $('#description').val(row.keterangan);"
        ));
        $data['lookup_member_group']=$this->list_of_values->render(array(
            "dlgBindId"=>"member_group","sysvar_lookup"=>"member_group",
            "dlgRetFunc"=>"$('#member_group').val(row.varvalue);"
        ));
        
                
            
        $this->template->display_form_input($this->file_view,$data);            
    }
    function delete_item($id){
        $data['success']=true;
        if($this->db->where("id",$id)->delete($this->table_name)){
            $data['message']="Sukses.";
        } else {
            $data['success']=false;
            $data['message']="Unknown Error";   //mysql_error();
        }
        echo json_encode($data);
    }
    function load_items($search=""){
        $data['success']=true;        
        $sql="select * from promosi_item ";
        $sql.="where promosi_code='*'";
        if($search!="")$sql.=" and item_number='$search'";
        $sql.=" and disc_type='2'";
        $sql.=" order by from_date desc";
        echo datasource($sql);
    }
    function save(){
		$data=$this->input->post();
		$id=$this->input->post("promosi_code");
        $mode=$data["mode"];	
		unset($data['mode']);
		$data['category']=2;

		if($mode=="add"){
			if($id=="AUTO")	$id=$this->nomor_bukti();							
			$data['promosi_code']=$id;
			$ok=$this->promosi_model->save($data);
			$this->nomor_bukti(true);
			$this->syslog_model->add($id,"promosi_disc","add");

		} else {
			$ok=$this->promosi_model->update($id,$data);				
			$this->syslog_model->add($id,"promosi_disc","edit");

		}
		if($ok){
			echo json_encode(array("success"=>true,"promosi_code"=>$id));
		} else {
			echo json_encode(array("msg"=>"Error ".$this->db->error()));
		}
	}	
    function save_item()   {
        $data=$this->input->post();
		$id=$data['id'];
		unset($data['id']);
        $result['success']=true;
        $data['disc_type']=2;
        $data['description']=substr($data['description'],20);
		$message="Unknown Error!";
		$success=false;
        if(!isset($data['promosi_code']))$data['promosi_code']="*";
		if($id>0){			
			if($q=$this->db->where("id",$id)->update($this->table_name,$data)){
				$success=true;
				$message="Success";
				$result['id']=$id;
			}
		} else {			
			if($q=$this->db->insert($this->table_name,$data)){
				$success=true;
				$message="Success";
				$result['id']=$this->db->insert_id();
			} 
		}
		$result['success']=$success;
		$result['message']=$message;
        echo json_encode($result);
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
    function set_defaults($record=NULL){
		$data['mode']='';
		$data['message']='';
        $data=data_table($this->table_name,$record);

        if($record==NULL){
            $data['date_from']= date("Y-m-d H:i:s");
            $data['date_to']= date("Y-m-d 23:59:59");
			$data['flag1']=0;
			$data['flag2']=1;
			$data['flag3']=0;
			$data['tipe']=2;
			$data['issameitem']=1;
		}
		$data['allow_add']=allow_mod('frmPromosiItem.Add');
		$data['allow_edit']=allow_mod('frmPromosiItem.Edit');
		$data['allow_delete']=allow_mod('frmPromosiItem.Delete');
		$data['lookup_inventory']=$this->inventory_model->lov("inventory");
		$data['lookup_inventory_extra']=$this->inventory_model->lov("inventory_extra");
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
    function _set_rules(){}

    function add()   {
		$data=$this->set_defaults();
		$this->_set_rules();
		 if ($this->form_validation->run()=== TRUE){
			$data=$this->get_posts();
			$this->promosi_model->save($data);
			$data['message']='update success';
			$data['mode']='view';
			$this->browse();
		} else {
            $data['promosi_code']='AUTO';
			$data['mode']='add';
			$data['message']='';
			$data['data']=$data;
			$this->template->display_form_input($this->file_view,$data);			
		}

    }
    function nomor_bukti($add=false)
	{
		$key="Promosi Numbering";
		if($add){
		  	$this->sysvar->autonumber_inc($key);
		} else {			
			$no=$this->sysvar->autonumber($key,0,'!PRM~$00001');
			for($i=0;$i<100;$i++){			
				$no=$this->sysvar->autonumber($key,0,'!PRM~$00001');
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

}
?>
