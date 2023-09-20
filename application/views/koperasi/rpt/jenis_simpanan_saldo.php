<?php 
	$CI =& get_instance();
	$CI->load->helper("browse_select_helper");
	$caption="REKAP JENIS SIMPANAN";
	$data['caption']=$caption;

	$date1= date('Y-m-d H:i:s', strtotime($CI->input->post('txtDateFrom')));
	$date2= date('Y-m-d H:i:s', strtotime($CI->input->post('txtDateTo')));
	$sql="select *	from kop_jenis_simpanan
	";
	$data['content']=browse_select(	array('sql'=>$sql,'show_action'=>false));
	$data['header']=company_header();
	$data['criteria']="Filter:All";
	$this->load->view('simple_print.php',$data);    		
		
?>