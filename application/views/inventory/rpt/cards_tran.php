<?php 
	 $CI =& get_instance();
	$data['caption']='HISTORY TRANSAKSI BARANG';
	if(!$CI->input->post('cmdPrint')){
		$data['criteria1']=true;
		$data['label1']='Kelompok Barang';
		$data['text1']='';
         $data['key1']="kode";
         $data['fields1'][]=array("kode","80","Kode");
         $data['fields1'][]=array("category","180","Kelompok");
         $data['ctr1']='category/select';
		
		$data['criteria2']=true;
		$data['label2']='Kode Barang';
		$data['text2']='';
         $data['key2']="item_number";
         $data['fields2'][]=array("item_number","80","Kode");
         $data['fields2'][]=array("description","180","Nama Barang");
         $data['ctr2']='inventory/select';
		
		 $data['criteria3']=true;
		 $data['label3']='Gudang';
		 $data['text3']='';
		  $data['key3']="location_number";
		  $data['fields3'][]=array("location_number","80","Gudang");
		  $data['ctr3']='gudang/select';
		
		 $data['date_from']=date('Y-m-d 00:00:00');
		 $data['date_to']=date('Y-m-d 23:59:59');
		 $data['select_date']=true;
		 
		$data['rpt_controller']="inventory/rpt/$id";
		$CI->template->display_form_input('criteria',$data,'');
	} else {
		$date1= date('Y-m-d H:i:s', strtotime($CI->input->post('txtDateFrom')));
		$date2= date('Y-m-d H:i:s', strtotime($CI->input->post('txtDateTo')));
		$cat=$CI->input->post("text1");
		$sql="select i.item_number,i.description,i.category,
			q.tanggal,q.jenis,q.no_sumber,q.qty_masuk,q.qty_keluar,
			q.amount_masuk,q.amount_keluar,q.cost,q.comments
			from inventory i 
			left join qry_kartustock_union q 
			on q.item_number=i.item_number 
			where q.tanggal between '$date1' and '$date2' ";
		if($cat!=""){
			$sql.=" and i.category='$cat'";
		}	
		$sql.="	order by i.item_number";
		
		$kel=""; if($CI->input->post("text1"))$kel=$CI->input->post("text1");
		if($kel!="")$sql.=" and i.category='".$kel."'";
		$item=""; if($CI->input->post('text2'))$item=$CI->input->post('text2');
		if($item!="")$sql.=" and i.item_number='$item'";

		$kelompok= $CI->input->post('text1');
		$gudang=$CI->input->post("text3");
		$item_number=$CI->input->post("text2");

		$CI->load->model("inventory/qry_kartu_stock_union_model");
		$CI->qry_kartu_stock_union_model->_output_tmp=true;
		$CI->qry_kartu_stock_union_model->_gudang=$gudang;
		$CI->qry_kartu_stock_union_model->_item_number=$item_number;
		$CI->qry_kartu_stock_union_model->_category=$kelompok;

		$s=$CI->qry_kartu_stock_union_model->getSql("sum","",$date1);
		$s=$CI->qry_kartu_stock_union_model->getSql("list",$date1,$date2); 				

		$sql="select c.item_number,i.description,i.category,c.txndate,c.document,c.doctype,c.gudang,
		qtyin-qtyout as qty,amountin-amountout as amount
			from tmp_kartu_stock c
			left join inventory i on i.item_number=c.item_number
			order by i.item_number,i.description


		";
		//echo $sql;
		//exit;

		$data['content']=browse_select(array('sql'=>$sql,'show_action'=>false, 'order_by'=>array('item_number'))
		);
		 $data['header']=company_header();
		 $data['criteria']="Kelompok: $kel, Kode Barang: $item";
		$this->load->view('simple_print.php',$data);    		
		
	}

?>