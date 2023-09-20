<?php 
error_reporting(E_ALL);
require_once('tcpdf/tcpdf.php');
require_once('db_connect.php');
$db = new DB_CONNECT();

$userid="";
if(isset($_GET['userid']))$userid=$_GET['userid'];
if(isset($_POST['userid']))$userid=$_POST['userid'];
if($userid=="")$userid="guest";

$tahun="";
if(isset($_GET['tahun']))$tahun=$_GET['tahun'];
if(isset($_POST['tahun']))$tahun=$_POST['tahun'];
if($tahun=="")$tahun=date("Y");

$bulan="";
if(isset($_GET['bulan']))$bulan=$_GET['bulan'];
if(isset($_POST['bulan']))$tahun=$_POST['bulan'];
if($bulan=="")$bulan=date("m");

$message="Unknown Error";
$success=false;
$amonth=array("","Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");


// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Andri Andriana');
$pdf->SetTitle('Informasi Anggota');
//$pdf->SetSubject('TCPDF Tutorial');
//$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// remove default header/footer
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);

// set auto page breaks
//$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
$pdf->SetAutoPageBreak(FALSE);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
	require_once(dirname(__FILE__).'/lang/eng.php');
	$pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// add a page
$pdf->AddPage();


$pdf->SetY(3);
// set font
$pdf->SetFont('courier', 'B', 10);
// set some text to print
$pdf->Write(0, "INFO AKUN - ANGGOTA KOPKAR POLYRAMA");
$pdf->SetFont('courier', '', 10);
/*

$s="select * from kp_user where userid='$userid' ";
if($q=mysqli_query($db->con,$s)){
	if($r=mysqli_fetch_object($q)){
		$pdf->Write(0,"\n Bulan    : ".$amonth[$bulan]." - $tahun") ;
		$pdf->Write(0,"\n Register : ".$r->userid);
		$pdf->Write(0,"\n Nama     : ".$r->username);
		$pdf->Write(0,"\n Dept     : ".$r->dept);
		$pdf->Write(0,"\n Divisi   : ".$r->sub);
		$pdf->Write(0,"\n Level    : ".$r->level);
	}
}
$pdf->SetFont('courier', 'B', 10);
$pdf->Write(0,"\n\nA. POTONGAN KOPERASI");
$pdf->SetFont('courier', '', 10);

$data=null;
$sql="select  if(j.nama is null,t.jenis,j.nama)  as jenis,t.jumlah,
sj.catatan as keterangan,t.jenis as kode_jenis
from kp_trans_sum t 
left join kp_jenis_tran j on j.kode=t.jenis 
left join kp_trans_sum_pinjam sj on sj.userid=t.userid and sj.jenis=t.jenis and sj.tahun=t.tahun and sj.bulan=t.bulan
where t.userid='$userid' and t.line_type=0 and t.tahun=$tahun 
and t.bulan=$bulan  and j.hidden=0
order by j.no_urut";

$result = mysqli_query($db->con,$sql);		
$message.=" ".mysqli_error($db->con);
$data[]=array("jenis"=>"ITEM","jumlah"=>"POTONGAN","keterangan"=>"DETAIL PINJAMAN");
if($result){
	// Fetch all
	if($data2=mysqli_fetch_all($result,MYSQLI_ASSOC)){
		$success=true;
		$message="Success data sudah diload.";
		
		for($i=0;$i<count($data2);$i++){
			$jenis=$data2[$i]['kode_jenis'];
			if($data2[$i]['jenis']=='DIFF')$data2[$i]['jumlah']=-1*$data2[$i]['jumlah'];
			$data2[$i]['jumlah']=number_format($data2[$i]['jumlah']);
			 
			$data[]=$data2[$i];
		}
	}
	// Free result set
	mysqli_free_result($result);
}
for($i=0;$i<count($data);$i++){
	$txt="\n ".str_pad($data[$i]['jenis'],15)." "
	.str_pad($data[$i]['jumlah'],10, " ", STR_PAD_LEFT).' '
	.str_pad($data[$i]['keterangan'],20);
	$pdf->Write(0,$txt);
}

$pdf->SetFont('courier', 'B', 10);
$pdf->Write(0,"\n\nB. SALDO SIMPANAN");
$pdf->SetFont('courier', '', 10);

$sql="select if(j.nama is null,t.jenis,j.nama)  as jenis,0 as jumlah_awal,t.jumlah,t.keterangan
from kp_trans_sum t 
left join kp_jenis_tran j on j.kode=t.jenis 
where t.userid='$userid' and t.line_type=1 and t.tahun=$tahun 
and t.bulan=$bulan  and t.jumlah<>0 order by j.no_urut";

//echo '<p>'.$sql.'</p>';
$bulan_last=$bulan-1;
$tahun_last=$tahun;
if($bulan_last==0){
	$bulan_last=12;
	$tahun_last--;
}
$result = mysqli_query($db->con,$sql);		
$message.=" ".mysqli_error($db->con);
$data=null;
$data[]=array("jenis"=>"ITEM","jumlah_awal"=>"Dec_".($tahun-1),"jumlah"=>$amonth[$bulan]."_".$tahun,"keterangan"=>"CATATAN");
$data[]=array("jenis"=>"POKOK","jumlah_awal"=>"0","jumlah"=>"0","keterangan"=>"");
$data[]=array("jenis"=>"WAJIB","jumlah_awal"=>"0","jumlah"=>"0","keterangan"=>"");
$data[]=array("jenis"=>"SUKARELA","jumlah_awal"=>"0","jumlah"=>"0","keterangan"=>"");
$data[]=array("jenis"=>"TAPENDIK","jumlah_awal"=>"0","jumlah"=>"0","keterangan"=>"");
$data[]=array("jenis"=>"TOTAL","jumlah_awal"=>"0","jumlah"=>"0","keterangan"=>"");
if($result){
	// Fetch all
	if($data2=mysqli_fetch_all($result,MYSQLI_ASSOC)){
		$success=true;
		$message="Success data sudah diload.";
		for($i=0;$i<count($data2);$i++){
			$data2[$i]['jumlah_awal']=number_format($data2[$i]['jumlah_awal'],2);
			$data2[$i]['jumlah']=number_format($data2[$i]['jumlah']);
			$jenis=$data2[$i]['jenis'];
			$jumlah=$data2[$i]['jumlah'];
			switch ($jenis) {
				case 'POKOK':
					$data[1]['jumlah']=$jumlah; 					
					break;
				case 'POKOK AWAL TAHUN':
					$data[1]['jumlah_awal']=$jumlah;
					break;
				case 'WAJIB':
					$data[2]['jumlah']=$jumlah;
					break;
				case 'WAJIB AWAL TAHUN':
					$data[2]['jumlah_awal']=$jumlah;
					break;
				case 'SUKARELA':
					$data[3]['jumlah']=$jumlah;
					break;
				case 'SUKARELA AWAL TAHUN':
					$data[3]['jumlah_awal']=$jumlah;
					break;
				case 'TAPENDIK1':
					$data[4]['jumlah']=$jumlah;
					break;
				case 'TAPENDIK AWAL TAHUN':
					$data[4]['jumlah_awal']=$jumlah;
					break;
				case 'TOTAL':
					$data[5]['jumlah']=$jumlah;
					break;
				case 'TOTAL AWAL TAHUN':
					$data[5]['jumlah_awal']=$jumlah;
					break;
											
				default:
					# code...
					break;
			}
		}
	}
}

// ---------------------------------------------------------
for($i=0;$i<count($data);$i++){
	$txt="\n ".str_pad($data[$i]['jenis'],15)." "
	.str_pad($data[$i]['jumlah_awal'],10, " ", STR_PAD_LEFT).' '
	.str_pad($data[$i]['jumlah'],10, " ", STR_PAD_LEFT).' '
	.str_pad($data[$i]['keterangan'],20);
	$pdf->Write(0,$txt);
}
$pdf->SetFont('courier', 'B', 10);
$pdf->Write(0,"\n\nC. SISA HASIL USAHA");
$pdf->SetFont('courier', '', 10);
$sql="select if(j.nama is null,t.jenis,j.nama) as jenis,t.jumlah, t.jumlah_akhir 
from kp_shu t 
left join kp_jenis_tran j on j.kode=t.jenis 
where t.userid='$userid' and t.tahun=$tahun   and j.hidden=0
order by j.no_urut ";

//echo '<p>'.$sql.'</p>';

$result = mysqli_query($db->con,$sql);		
$message.=" ".mysqli_error($db->con);
$data=null;
$data[]=array("jenis"=>"ITEM","jumlah"=>$tahun-2,"jumlah_akhir"=>$tahun-1,"keterangan"=>"CATATAN");
if($result){
	// Fetch all
	if($data2=mysqli_fetch_all($result,MYSQLI_ASSOC)){
		$success=true;
		$message="Success data sudah diload.";
		for($i=0;$i<count($data2);$i++){
			$data2[$i]['jumlah']=number_format($data2[$i]['jumlah']);
			$data2[$i]['jumlah_akhir']=number_format($data2[$i]['jumlah_akhir']);
			//ditambahin
			$data2[$i]['jumlah_akhir']=$data2[$i]['jumlah'];
			$data2[$i]['jumlah']=0;
		
			$data[]=$data2[$i];
		}
	}
}
for($i=0;$i<count($data);$i++){
	$txt="\n ".str_pad($data[$i]['jenis'],15)." "
	.str_pad($data[$i]['jumlah'],10, " ", STR_PAD_LEFT).' '
	.str_pad($data[$i]['jumlah_akhir'],10, " ", STR_PAD_LEFT).' '
	.str_pad($data[$i]['keterangan'],20);
	$pdf->Write(0,$txt);
}
*/

$pdf->SetFont('courier', 'B', 10);
$pdf->Write(0,"\n\nD. CATATAN");
$pdf->SetFont('courier', 'N', 10);
$tgl_gen=date("Y-m-d H:i:s");
$txt="\n* Jika Ada Ketidak Sesuaian Harap Segera Menghubungi Admin Kopkar
\rPolyrama Secepatnya dan Yang Akan Menjadi Data Acuan/Final 
\rAdalah Data Hasil Rekonsiliasi Manual Berdasarkan Atas Tanda Bukti Yang Valid .	
\r* Total As Per Sallary Akan Muncul Setelah Koperasi Menerima 
\rData Aktual Potongan Dari FAC  dan Di Upload ke System	
\nGenerate Date: $tgl_gen 
";
$pdf->Write(0,$txt);

//Close and output PDF document
$pdf->Output('info.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+



?>