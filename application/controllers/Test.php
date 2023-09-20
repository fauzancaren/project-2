<?php if(!defined('BASEPATH')) exit('No direct script access allowd');

class Test extends CI_Controller {
	function __construct()
	{
		parent::__construct();
 		$this->load->helper(array('url','form'));
		$this->load->library('template');;
	}
	function index()
	{	
//		var_dump($this->session);
		$data['message']='';
		$this->template->display_form_input('welcome_message',$data,'');
	}
	function printStart(){
		if (isset($_POST['printbc'])){
			$this->printBCode("123456","Aqua Botol",10000,10);
			$zplFile="utama.zpl";
			$sPrinterName="//localhost/ZDesigner GK420t";
			$sPrinterName="//TALAGA/Generic  Text Only";
			copy($zplFile, $sPrinterName);
			unlink($zplFile);
		}
		echo "
		<html>
		<body>
			<form action='' method='post'>
				<input type='submit' name='printbc' value='Print ZPL'>
			</form>
		</body>
		</html>
		";

	}	
	function printBCode($barcode,$name,$price,$qtyPrint){

		//Print at Col1
		$printOne="^XA\n";
		$printOne.="^FWR\n";
		$printOne.="^FO5,20\n";
		$printOne.="^ADN10,8\n";
		$printOne.="^FD".$name."^FS\n";
		$printOne.="^FO10,50^A0,32,25^FDUTAMA^FS\n";
		$printOne.="^ADN18,10\n";
		$printOne.="^FO80,40\n";
		$printOne.="^FDRp.".number_format($price)."^FS\n";
		$printOne.="^FO80,70\n";
		$printOne.="^BY1,2,9\n";
		$printOne.="^BCN,70,N,N,N\n";
		$printOne.="^FO80,70\n";
		$printOne.="^FD".$barcode."^FS\n";
		$printOne.="^FO80,150\n";
		$printOne.="^ADN,18,10\n";
		$printOne.="^FD".$barcode."^FS\n";
		
		
		
		//Print at Col2
		$printTwo="^FWR\n";
		$printTwo.="^FO340,20\n";
		$printTwo.="^ADN10,8\n";
		$printTwo.="^FD".$name."^FS\n";
		$printTwo.="^FO340,50^A0,32,25^FDUTAMA^FS\n";
		$printTwo.="^ADN18,10\n";
		$printTwo.="^FO400,40\n";
		$printTwo.="^FDRp.".number_format($price)."^FS\n";
		$printTwo.="^FO400,70\n";
		$printTwo.="^BY1,2,9\n";
		$printTwo.="^BCN,70,N,N,N\n";
		$printTwo.="^FO420,70\n";
		$printTwo.="^FD".$barcode."^FS\n";
		$printTwo.="^FO400,150\n";
		$printTwo.="^ADN,18,10\n";
		$printTwo.="^FD".$barcode."^FS\n";
		$printTwo.="^XZ\n";
		
		
		//Print at Col1 and Col2 (in one line contains 2 cols)
		$printCat="^XA\n";
		$printCat.="^FWR\n";
		$printCat.="^FO5,20\n";
		$printCat.="^ADN10,8\n";
		$printCat.="^FD".$name."^FS\n";
		$printCat.="^FO10,50^A0,32,25^FDUTAMA^FS\n";
		$printCat.="^ADN18,10\n";
		$printCat.="^FO80,40\n";
		$printCat.="^FDRp.".number_format($price)."^FS\n";
		$printCat.="^FO80,70\n";
		$printCat.="^BY1,2,9\n";
		$printCat.="^BCN,70,N,N,N\n";
		$printCat.="^FO80,70\n";
		$printCat.="^FD".$barcode."^FS\n";
		$printCat.="^FO80,150\n";
		$printCat.="^ADN,18,10\n";
		$printCat.="^FD".$barcode."^FS\n";
		$printCat.="^FO340,20\n";
		$printCat.="^ADN10,8\n";
		$printCat.="^FD".$name."^FS\n";
		$printCat.="^FO340,50^A0,32,25^FDUTAMA^FS\n";
		$printCat.="^ADN18,10\n";
		$printCat.="^FO400,40\n";
		$printCat.="^FDRp.".number_format($price)."^FS\n";
		$printCat.="^FO400,70\n";
		$printCat.="^BY1,2,9\n";
		$printCat.="^BCN,70,N,N,N\n";
		$printCat.="^FO420,70\n";
		$printCat.="^FD".$barcode."^FS\n";
		$printCat.="^FO400,150\n";
		$printCat.="^ADN,18,10\n";
		$printCat.="^FD".$barcode."^FS\n";
		$printCat.="^XZ\n";
		
		if (isset($_SESSION['lastcol'])){
				$lastCol=$_SESSION['lastcol'];
		}else{
			$lastCol=1;
		}
		
		$wantPrn=$qtyPrint;
		$sisa=$wantPrn;
		$alreadyPRN=0;
		
		
		while ( $alreadyPRN < $wantPrn) {
			
		
			switch ($lastCol) {
				case 1:
					if ($sisa>= 2){
						$myfile = fopen("utama.zpl", "a+") or die("Unable to open file!");
						$zplFile="utama.zpl";
						fwrite($myfile, $printCat);
						fclose($myfile);
		
						$alreadyPRN=$alreadyPRN+2;
						$lastCol=1;
						$_SESSION['lastcol']=$lastCol;
					}else {
						$myfile = fopen("utama.zpl", "a+") or die("Unable to open file!");
						$zplFile="utama.zpl";
						fwrite($myfile, $printOne);
						fclose($myfile);
		
						$alreadyPRN++;
						$lastCol=2;
						$_SESSION['lastcol']=$lastCol;
					}
		
					
					$sisa=$sisa-2;
					
					break;
				
				case 2:
						$myfile = fopen("utama.zpl", "a+") or die("Unable to open file!");
						$zplFile="utama.zpl";
						fwrite($myfile, $printTwo);
						fclose($myfile);
		
						$alreadyPRN++;
						$sisa=$wantPrn-1;
						
						$lastCol=1;
						$_SESSION['lastcol']=$lastCol;
						
					break;
				
			}
			
		}
	}
	function KartuStockList($date_from="",$date_to="",$item_number=""){
		$cmd="list";
		$this->load->model("inventory/qry_kartu_stock_union_model");
		$s=$this->qry_kartu_stock_union_model->getSql($cmd,$date_from,$date_to,$item_number);
		if($q=$this->db->query($s)){
			foreach($q->result() as $r){
				echo "<br>$r->item_number,$r->tanggal,$r->jenis,$r->no_sumber,$r->qty_masuk,$r->qty_keluar";
			}
		}
		
	}
	function KartuStockSum($date_from="",$date_to="",$item_number=""){
		$cmd="sum";
		$this->load->model("inventory/qry_kartu_stock_union_model");
		$s=$this->qry_kartu_stock_union_model->getSql($cmd,$date_from,$date_to,$item_number);
		if($q=$this->db->query($s)){
			foreach($q->result() as $r){
				echo "<br>$r->item_number,$r->warehouse_code,$r->jenis,$r->qin,$r->qout";
			}
		}
		
	}
	function halo(){
		echo "HALO";
	}
	function  GetQtyStockGdg($item_number){       
		$this->load->model("inventory/qry_kartu_stock_union_model");
	 	$nqty=$this->qry_kartu_stock_union_model->GetQtyStockGdg($item_number);
  	    echo $nqty;
	}
 
}