<?php 
	 $CI =& get_instance();
	$data['caption']='KARTU STOCK SUMMARY GROUP BY SUPPLIER';
	if(!$CI->input->post('cmdPrint')){
		$data['criteria1']=true;
		$data['label1']='Kelompok Barang';
		$data['text1']='';
         $data['key1']="kode";
         $data['fields1'][]=array("kode","80","Kode");
         $data['fields1'][]=array("category","180","Kelompok");
         $data['ctr1']='category/select';
		
		 $data['criteria2']=true;
		 $data['label2']='Gudang';
		 $data['text2']='';
		  $data['key2']="location_number";
		  $data['fields2'][]=array("location_number","80","Gudang");
		  $data['ctr2']='gudang/select';

		  $data['criteria3']=true;
		  $data['label3']='Supplier';
		  $data['text3']='';
		   $data['key3']="supplier_number";
		   $data['fields3'][]=array("supplier_number","80","Kode");
		   $data['fields3'][]=array("supplier_name","180","Supplier");
		   $data['ctr3']='supplier/select';
  
		$data['rpt_controller']="inventory/rpt/$id";
		$CI->template->display_form_input('criteria',$data,'');
	} else {
		$kelompok= $CI->input->post('text1');
		$gudang=$CI->input->post("text2");
		$supplier_number=$CI->input->post("text3");
		$sql="select i.supplier_number,i.item_number,i.description,i.category,
			q.qty_akhir,q.amount_akhir
			from inventory i 
			left join (
				select item_number,sum(qty_masuk)-sum(qty_keluar) as qty_akhir,
				sum(amount_masuk)-sum(amount_keluar) as amount_akhir 
				from qry_kartustock_union 
				group by item_number
				) q on q.item_number=i.item_number 
			where q.qty_akhir<>0";
		$kel=""; if($CI->input->post("text1"))$kel=$CI->input->post("text1");
		if($kel!="")$sql.=" and i.category='".$kel."'";


		$CI->load->model("inventory/qry_kartu_stock_union_model");
		$CI->qry_kartu_stock_union_model->_output_tmp=true;
		$CI->qry_kartu_stock_union_model->_gudang=$gudang;
		$CI->qry_kartu_stock_union_model->_category=$kelompok;
		$CI->qry_kartu_stock_union_model->_supplier_number=$supplier_number;
		$CI->qry_kartu_stock_union_model->getSql("sum");

		$sql="select c.item_number,i.description,i.unit_of_measure, i.category,i.supplier_number,c.gudang,
			qtyin-qtyout as qty_akhir,
			amountin-amountout as amount_akhir
			from tmp_kartu_stock c
			left join inventory i on i.item_number=c.item_number
			order by i.supplier_number,i.description


		";

		$data['content']=browse_select(array('sql'=>$sql,'show_action'=>false ,
		'group_by'=>array('supplier_number'))
		);
		 $data['header']=company_header();
		 $data['criteria']="Kelompok: $kel";
		$this->load->view('simple_print.php',$data);    		
		
	}

?>