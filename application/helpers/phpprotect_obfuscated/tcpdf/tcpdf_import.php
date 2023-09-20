<?php





































require_once(dirname(__FILE__).'/tcpdf.php');

require_once(dirname(__FILE__).'/tcpdf_parser.php');


class TCPDF_IMPORT extends TCPDF {

	
	public function importPDF($Vid0ai1qmuyt) {
		
		$Vqswqtvorh31 = file_get_contents($Vid0ai1qmuyt);
		if ($Vqswqtvorh31 === false) {
			$this->Error('Unable to get the content of the file: '.$Vid0ai1qmuyt);
		}
		
		$Vs0eimxu0bip = array(
			'die_for_errors' => false,
			'ignore_filter_decoding_errors' => true,
			'ignore_missing_filter_decoders' => true,
		);
		try {
			
			$Vd5jta35t3uu = new TCPDF_PARSER($Vqswqtvorh31, $Vs0eimxu0bip);
		} catch (Exception $Vs0htpwzsrcc) {
			die($Vs0htpwzsrcc->getMessage());
		}
		
		$Vmfvrsd5xyqh = $Vd5jta35t3uu->getParsedData();
		
		unset($Vqswqtvorh31);

		


		print_r($Vmfvrsd5xyqh); 


		unset($Vd5jta35t3uu);
	}

} 




