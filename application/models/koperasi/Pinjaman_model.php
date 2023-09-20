<?php
class Pinjaman_model extends CI_Model {

private $primary_key='no_pinjaman';
private $table_name='kop_pinjaman';
private $_data=null;
	function __construct(){
		parent::__construct();        
	}
	function get_by_id($id){
		$this->db->where($this->primary_key,$id);
		return $this->db->get($this->table_name);
	}

	function save($data){
		$idd=0;
		if(isset($data['payment_no'])){
			$this->_data=$data;
			$this->save_bayar();

		} else {
			if($data['tanggal'])$data['tanggal']= date('Y-m-d H:i:s', strtotime($data['tanggal']));		
			if($data['tanggal_tempo'])$data['tanggal_tempo']= date('Y-m-d H:i:s', strtotime($data['tanggal_tempo']));		
			$data=$this->recalc($data);
			$this->_data=$data;
			$idd=$this->db->insert($this->table_name,$data);
			$this->save_cicilan($data['no_pinjaman']);
	
		}

		return $idd;
	}
	function save_bayar(){
		$data=$this->input->post();
		$payment_no=$this->input->post('payment_no');
		$tanggal_bayar=$this->input->post('tanggal_bayar');
		$bulan_ke=$this->input->post('bulan_ke');
		$tanggal_tagih=$this->input->post('tanggal_tagih');
		$no_pinjaman=$this->input->post('no_pinjaman');
		$no_anggota=$this->input->post('no_anggota');
		$tagihan=$this->input->post('tagihan');
		$denda=$this->input->post('denda');
		$admin=$this->input->post('admin');
		$bayar=$this->input->post('bayar');

		$d['payment_no']=$payment_no;
		///$d['tanggal_bayar']=$tanggal_bayar;
		$d['tanggal_tagih']=$tanggal_tagih;

		$dbayar['no_anggota']=$no_anggota;
		$dbayar['no_pinjaman']=$no_pinjaman;
		$dbayar['bulan_ke']=$bulan_ke;
		$dbayar['tanggal_bayar']=$tanggal_bayar;
		$dbayar['tanggal_tagih']=$tanggal_tagih;
		$dbayar['tagihan']=$tagihan;
		$dbayar['bayar']=$bayar;
		$dbayar['denda']=$denda;
		$dbayar['admin']=$admin;
		$dbayar['payment_no']=$payment_no;
		if($data['mode']=="view"){

		} else {
			$ok = $this->db->insert("kop_cicilan_bayar",$dbayar);
			$ok = $this->db->where("no_pinjaman",$no_pinjaman)
				->where("no_urut",$bulan_ke)
				->update("kop_cicilan",$d);	
		}
		return $ok;
	}
	function update($id,$data){
		if($data['tanggal'])$data['tanggal']= date('Y-m-d H:i:s', strtotime($data['tanggal']));		
		if($data['tanggal_tempo'])$data['tanggal_tempo']= date('Y-m-d H:i:s', strtotime($data['tanggal_tempo']));		
		$data=$this->recalc($data);
		$this->_data=$data;
		$this->db->where($this->primary_key,$id);
		$idd=$this->db->update($this->table_name,$data);

		$this->save_cicilan($id);

		return $idd;
	}
	function delete($kode){
		$this->db->where($this->primary_key,$kode);
		$ok = $this->db->delete($this->table_name);
		$this->db->where("no_pinjaman",$kode)->delete("kop_cicilan");
		return $ok;
	}
	function recalc($data) {
		if($data['jangka_waktu']==0)$data['jangka_waktu']=12;
		if($data['jumlah']==0)$data['jumlah']=$data['jumlah']/$data['jangka_waktu'];
		return $data;
	}
	function save_cicilan($id) {
		$table='kop_cicilan';
		$loan=$this->get_by_id($id)->row();
		if($loan){
			$tanggal=$loan->tanggal;
			$awal=$loan->jumlah;
			$pokok=$loan->angsur_pokok;
			$bunga=$loan->angsur_bunga;
			$jangka_waktu=$loan->jangka_waktu;
			//	return false; 
		} else {
			$tanggal=$this->_data['tanggal'];
			$awal=$this->_data['jumlah'];
			$pokok=$this->_data['angsur_pokok'];
			$bunga=$this->_data['angsur_bunga'];
			$jangka_waktu=$this->_data['jangka_waktu'];
		}
		
		for($i=0;$i<$jangka_waktu-1;$i++) {
			$tanggal = date('Y-m-d', strtotime("+1 months", strtotime($tanggal)));
		
			$data['no_pinjaman']=$id;
			$data['no_urut']=$i+1;
			$data['tanggal_jth_tempo']=$tanggal;
			$data['awal']=$awal;
			$data['pokok']=$pokok;
			$data['bunga']=$bunga;
			$data['angsuran']=$data['pokok']+$data['bunga'];
			$data['akhir']=$awal-$data['angsuran'];
 
			$this->db->where('no_pinjaman',$id);
			$this->db->where('no_urut',$i+1);
			if($this->db->get($table)->row()){
				$this->db->where('no_pinjaman',$id);
				$this->db->where('no_urut',$i+1);
				
				unset($data['no_pinjaman']);
				unset($data['no_urut']);
				$this->db->update($table,$data);
			} else {
				 
				$this->db->insert($table,$data);
			}
			 
			$awal=$data['akhir'];
		}
	}

}
