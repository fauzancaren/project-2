<?php if(!defined('BASEPATH')) exit('No direct script access allowd');

class Sessionset extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		if(!$this->access->is_login())redirect(base_url());
 		$this->load->helper(array('url','form'));
		$this->load->library('template');
	}
	function index(){
	}
	function save($key="",$value=""){
		$old=$this->session->userdata($key);
		if($key!=""){
			$this->session->set_userdata($key,$value);
		}
		if($value==""){
			if($old=="false"){
				$value="true";
			}else {
				$value="false";
			}
			
			$this->session->set_userdata($key,$value);
		}
		if($key=="sidebar_show"){
			$this->session->set_userdata("header_visible",$value);
		}
		echo "<script>window.history.back();</script>";
	}
	function save_setting(){
	    $data=$this->input->post();
        $gudang=$data['txtGudang'];
        $ukuran_nota=$data['ukuran_nota'];
        putvar("current_gudang",$gudang);
        putvar("ukuran_nota",$ukuran_nota);
        putvar("pembulatan",$data["pembulatan"]);
		
		$data["AllowChangePrice"]=strtolower($data["AllowChangePrice"]);
		if($data["AllowChangePrice"]=="")$data["AllowChangePrice"]="false";
        putvar("AllowChangePrice",$data["AllowChangePrice"]);

		$data["AllowChangeDiscItem"]=strtolower($data["AllowChangeDiscItem"]);
		if($data["AllowChangeDiscItem"]=="")$data["AllowChangeDiscItem"]="false";
        putvar("AllowChangeDiscItem",$data["AllowChangeDiscItem"]);

		$data["IsGabungItem"]=strtolower($data["IsGabungItem"]);
		if($data["IsGabungItem"]=="")$data["IsGabungItem"]="false";
		putvar("IsGabungItem",$data["IsGabungItem"]);

		$data['IsAutoAddRow']=strtolower($data['IsAutoAddRow']);
		if($data['IsAutoAddRow']=="")$data['IsAutoAddRow']="true";
		putvar("IsAutoAddRow",$data['IsAutoAddRow']);
		putvar("header1",$data['header1']);
		putvar("header2",$data['header2']);
		putvar("header3",$data['header3']);
		putvar("footer1",$data['footer1']);
		putvar("footer2",$data['footer2']);
		putvar("footer3",$data['footer3']);


        $this->session->set_userdata("set_tanggal",$data["set_tanggal"]);
        echo json_encode(array("success"=>true));
	}
}
?>
