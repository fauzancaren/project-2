<?php 
	 $CI =& get_instance();
	if(!$CI->input->post('cmdPrint')){
		$data['criteria1']=true;
		$data['label1']='Kelompok Barang';
		$data['text1']='';
         $data['key1']="kode";
         $data['fields1'][]=array("kode","80","Kode");
         $data['fields1'][]=array("category","180","Kelompok");
         $data['ctr1']='category/select';

		$data['caption']="DAFTAR MASTER BARANG WITH COST";
		$data['rpt_controller']="inventory/rpt/$id";
		$CI->template->display_form_input('criteria',$data,'');
	} else {
		$data['caption']="DAFTAR MASTER BARANG WITH COST";
		$sql="select item_number,description,retail as harga_jual,
			cost_from_mfg as harga_beli,cost,quantity_in_stock as quantity, 
			
			unit_of_measure as unit,supplier_number,category
			FROM inventory i where 1=1";
		$kel=""; if($CI->input->post("text1"))$kel=$CI->input->post("text1");
		if($kel!="")$sql.=" and category='".$kel."'";
		$data['content']=browse_select(	array('sql'=>$sql,'show_action'=>false,
			'number_format'=>array("quantity"))
		);
		 $data['header']=company_header();
		 $data['criteria']="Kelompok: $kel";
		$this->load->view('simple_print.php',$data);    		
		
	}

?>