<?php




































require_once(dirname(__FILE__).'/include/tcpdf_filters.php');


class TCPDF_PARSER {

	
	private $Vcwcgc5rzgpt = '';

	
	protected $Va3hk2l0dn0u = array();

	
	protected $Vano2phlfpp5 = array();

	
	private $Vyswh3zsknxo;

	
	private $Vs0eimxu0bip = array(
		'die_for_errors' => false,
		'ignore_filter_decoding_errors' => true,
		'ignore_missing_filter_decoders' => true,
	);



	
	public function __construct($Vmfvrsd5xyqh, $Vs0eimxu0bip=array()) {
		if (empty($Vmfvrsd5xyqh)) {
			$this->Error('Empty PDF data.');
		}
		
		if (($Vxqh2puixt3d = strpos($Vmfvrsd5xyqh, '%PDF-')) === FALSE) {
			$this->Error('Invalid PDF data: missing %PDF header.');
		}
		
		$this->pdfdata = substr($Vmfvrsd5xyqh, $Vxqh2puixt3d);
		
		$V3tiyukhhvjr = strlen($this->pdfdata);
		
		$this->setConfig($Vs0eimxu0bip);
		
		$this->xref = $this->getXrefData();
		
		$this->objects = array();
		foreach ($this->xref['xref'] as $Vcsbphjwgcgf => $Vzl5igrsjgyf) {
			if (!isset($this->objects[$Vcsbphjwgcgf]) AND ($Vzl5igrsjgyf > 0)) {
				
				$this->objects[$Vcsbphjwgcgf] = $this->getIndirectObject($Vcsbphjwgcgf, $Vzl5igrsjgyf, true);
			}
		}
		
		unset($this->pdfdata);
		$this->pdfdata = '';
	}

	
	protected function setConfig($Vs0eimxu0bip) {
		if (isset($Vs0eimxu0bip['die_for_errors'])) {
			$this->cfg['die_for_errors'] = !!$Vs0eimxu0bip['die_for_errors'];
		}
		if (isset($Vs0eimxu0bip['ignore_filter_decoding_errors'])) {
			$this->cfg['ignore_filter_decoding_errors'] = !!$Vs0eimxu0bip['ignore_filter_decoding_errors'];
		}
		if (isset($Vs0eimxu0bip['ignore_missing_filter_decoders'])) {
			$this->cfg['ignore_missing_filter_decoders'] = !!$Vs0eimxu0bip['ignore_missing_filter_decoders'];
		}
	}

	
	public function getParsedData() {
		return array($this->xref, $this->objects);
	}

	
	protected function getXrefData($Vzl5igrsjgyf=0, $Va3hk2l0dn0u=array()) {
		if ($Vzl5igrsjgyf == 0) {
			
			if (preg_match_all('/[\r\n]startxref[\s]*[\r\n]+([0-9]+)[\s]*[\r\n]+%%EOF/i', $this->pdfdata, $Vfw2yccohots, PREG_SET_ORDER, $Vzl5igrsjgyf) == 0) {
				$this->Error('Unable to find startxref');
			}
			$Vfw2yccohots = array_pop($Vfw2yccohots);
			$Vuzdlhzv2jzs = $Vfw2yccohots[1];
		} elseif (strpos($this->pdfdata, 'xref', $Vzl5igrsjgyf) == $Vzl5igrsjgyf) {
			
			$Vuzdlhzv2jzs = $Vzl5igrsjgyf;
		} elseif (preg_match('/([0-9]+[\s][0-9]+[\s]obj)/i', $this->pdfdata, $Vfw2yccohots, PREG_OFFSET_CAPTURE, $Vzl5igrsjgyf)) {
			
			$Vuzdlhzv2jzs = $Vzl5igrsjgyf;
		} elseif (preg_match('/[\r\n]startxref[\s]*[\r\n]+([0-9]+)[\s]*[\r\n]+%%EOF/i', $this->pdfdata, $Vfw2yccohots, PREG_OFFSET_CAPTURE, $Vzl5igrsjgyf)) {
			
			$Vuzdlhzv2jzs = $Vfw2yccohots[1][0];
		} else {
			$this->Error('Unable to find startxref');
		}
		
		if (strpos($this->pdfdata, 'xref', $Vuzdlhzv2jzs) == $Vuzdlhzv2jzs) {
			
			$Va3hk2l0dn0u = $this->decodeXref($Vuzdlhzv2jzs, $Va3hk2l0dn0u);
		} else {
			
			$Va3hk2l0dn0u = $this->decodeXrefStream($Vuzdlhzv2jzs, $Va3hk2l0dn0u);
		}
		if (empty($Va3hk2l0dn0u)) {
			$this->Error('Unable to find xref');
		}
		return $Va3hk2l0dn0u;
	}

	
	protected function decodeXref($Vuzdlhzv2jzs, $Va3hk2l0dn0u=array()) {
		$Vuzdlhzv2jzs += 4; 
		
		$Vzl5igrsjgyf = $Vuzdlhzv2jzs + strspn($this->pdfdata, "\x00\x09\x0a\x0c\x0d\x20", $Vuzdlhzv2jzs);
		
		$Vcsbphjwgcgf_num = 0;
		
		while (preg_match('/([0-9]+)[\x20]([0-9]+)[\x20]?([nf]?)(\r\n|[\x20]?[\r\n])/', $this->pdfdata, $Vfw2yccohots, PREG_OFFSET_CAPTURE, $Vzl5igrsjgyf) > 0) {
			if ($Vfw2yccohots[0][1] != $Vzl5igrsjgyf) {
				
				break;
			}
			$Vzl5igrsjgyf += strlen($Vfw2yccohots[0][0]);
			if ($Vfw2yccohots[3][0] == 'n') {
				
				$Vm2zmliau5ly = $Vcsbphjwgcgf_num.'_'.intval($Vfw2yccohots[2][0]);
				
				if (!isset($Va3hk2l0dn0u['xref'][$Vm2zmliau5ly])) {
					
					$Va3hk2l0dn0u['xref'][$Vm2zmliau5ly] = intval($Vfw2yccohots[1][0]);
				}
				++$Vcsbphjwgcgf_num;
			} elseif ($Vfw2yccohots[3][0] == 'f') {
				++$Vcsbphjwgcgf_num;
			} else {
				
				$Vcsbphjwgcgf_num = intval($Vfw2yccohots[1][0]);
			}
		}
		
		if (preg_match('/trailer[\s]*<<(.*)>>/isU', $this->pdfdata, $Vfw2yccohots, PREG_OFFSET_CAPTURE, $Vzl5igrsjgyf) > 0) {
			$V23qvn1dseod = $Vfw2yccohots[1][0];
			if (!isset($Va3hk2l0dn0u['trailer']) OR empty($Va3hk2l0dn0u['trailer'])) {
				
				$Va3hk2l0dn0u['trailer'] = array();
				
				if (preg_match('/Size[\s]+([0-9]+)/i', $V23qvn1dseod, $Vfw2yccohots) > 0) {
					$Va3hk2l0dn0u['trailer']['size'] = intval($Vfw2yccohots[1]);
				}
				if (preg_match('/Root[\s]+([0-9]+)[\s]+([0-9]+)[\s]+R/i', $V23qvn1dseod, $Vfw2yccohots) > 0) {
					$Va3hk2l0dn0u['trailer']['root'] = intval($Vfw2yccohots[1]).'_'.intval($Vfw2yccohots[2]);
				}
				if (preg_match('/Encrypt[\s]+([0-9]+)[\s]+([0-9]+)[\s]+R/i', $V23qvn1dseod, $Vfw2yccohots) > 0) {
					$Va3hk2l0dn0u['trailer']['encrypt'] = intval($Vfw2yccohots[1]).'_'.intval($Vfw2yccohots[2]);
				}
				if (preg_match('/Info[\s]+([0-9]+)[\s]+([0-9]+)[\s]+R/i', $V23qvn1dseod, $Vfw2yccohots) > 0) {
					$Va3hk2l0dn0u['trailer']['info'] = intval($Vfw2yccohots[1]).'_'.intval($Vfw2yccohots[2]);
				}
				if (preg_match('/ID[\s]*[\[][\s]*[<]([^>]*)[>][\s]*[<]([^>]*)[>]/i', $V23qvn1dseod, $Vfw2yccohots) > 0) {
					$Va3hk2l0dn0u['trailer']['id'] = array();
					$Va3hk2l0dn0u['trailer']['id'][0] = $Vfw2yccohots[1];
					$Va3hk2l0dn0u['trailer']['id'][1] = $Vfw2yccohots[2];
				}
			}
			if (preg_match('/Prev[\s]+([0-9]+)/i', $V23qvn1dseod, $Vfw2yccohots) > 0) {
				
				$Va3hk2l0dn0u = $this->getXrefData(intval($Vfw2yccohots[1]), $Va3hk2l0dn0u);
			}
		} else {
			$this->Error('Unable to find trailer');
		}
		return $Va3hk2l0dn0u;
	}

	
	protected function decodeXrefStream($Vuzdlhzv2jzs, $Va3hk2l0dn0u=array()) {
		
		$Va3hk2l0dn0uobj = $this->getRawObject($Vuzdlhzv2jzs);
		$Va3hk2l0dn0ucrs = $this->getIndirectObject($Va3hk2l0dn0uobj[1], $Vuzdlhzv2jzs, true);
		if (!isset($Va3hk2l0dn0u['trailer']) OR empty($Va3hk2l0dn0u['trailer'])) {
			
			$Va3hk2l0dn0u['trailer'] = array();
			$Vmytflhgvwax = true;
		} else {
			$Vmytflhgvwax = false;
		}
		if (!isset($Va3hk2l0dn0u['xref'])) {
			$Va3hk2l0dn0u['xref'] = array();
		}
		$Vj2z5lejlpbd = false;
		$Vnq1ilgebapv = 0;
		$V2vxymcs5m4f = $Va3hk2l0dn0ucrs[0][1];
		if (!is_array($V2vxymcs5m4f)) {
			$V2vxymcs5m4f = array();
		}
		foreach ($V2vxymcs5m4f as $Vl0q4noiexi4 => $Vz0hmukhwa4z) {
			if (($Vz0hmukhwa4z[0] == '/') AND ($Vz0hmukhwa4z[1] == 'Type') AND (isset($V2vxymcs5m4f[($Vl0q4noiexi4 +1)]) AND ($V2vxymcs5m4f[($Vl0q4noiexi4 +1)][0] == '/') AND ($V2vxymcs5m4f[($Vl0q4noiexi4 +1)][1] == 'XRef'))) {
				$Vj2z5lejlpbd = true;
			} elseif (($Vz0hmukhwa4z[0] == '/') AND ($Vz0hmukhwa4z[1] == 'Index') AND (isset($V2vxymcs5m4f[($Vl0q4noiexi4 +1)]))) {
				
				$Vm2zmliau5ly_first = intval($V2vxymcs5m4f[($Vl0q4noiexi4 +1)][1][0][1]);
				
				$Vm2zmliau5ly_entries = intval($V2vxymcs5m4f[($Vl0q4noiexi4 +1)][1][1][1]);
			} elseif (($Vz0hmukhwa4z[0] == '/') AND ($Vz0hmukhwa4z[1] == 'Prev') AND (isset($V2vxymcs5m4f[($Vl0q4noiexi4 +1)]) AND ($V2vxymcs5m4f[($Vl0q4noiexi4 +1)][0] == 'numeric'))) {
				
				$Vwjfojezvdsw = intval($V2vxymcs5m4f[($Vl0q4noiexi4 +1)][1]);
			} elseif (($Vz0hmukhwa4z[0] == '/') AND ($Vz0hmukhwa4z[1] == 'W') AND (isset($V2vxymcs5m4f[($Vl0q4noiexi4 +1)]))) {
				
				$Vailkgru4whu = array();
				$Vailkgru4whu[0] = intval($V2vxymcs5m4f[($Vl0q4noiexi4 +1)][1][0][1]);
				$Vailkgru4whu[1] = intval($V2vxymcs5m4f[($Vl0q4noiexi4 +1)][1][1][1]);
				$Vailkgru4whu[2] = intval($V2vxymcs5m4f[($Vl0q4noiexi4 +1)][1][2][1]);
			} elseif (($Vz0hmukhwa4z[0] == '/') AND ($Vz0hmukhwa4z[1] == 'DecodeParms') AND (isset($V2vxymcs5m4f[($Vl0q4noiexi4 +1)][1]))) {
				$Vsswtyilpf1r = $V2vxymcs5m4f[($Vl0q4noiexi4 +1)][1];
				foreach ($Vsswtyilpf1r as $Vl0q4noiexi4dc => $Vz0hmukhwa4zdc) {
					if (($Vz0hmukhwa4zdc[0] == '/') AND ($Vz0hmukhwa4zdc[1] == 'Columns') AND (isset($Vsswtyilpf1r[($Vl0q4noiexi4dc +1)]) AND ($Vsswtyilpf1r[($Vl0q4noiexi4dc +1)][0] == 'numeric'))) {
						$Vnq1ilgebapv = intval($Vsswtyilpf1r[($Vl0q4noiexi4dc +1)][1]);
					} elseif (($Vz0hmukhwa4zdc[0] == '/') AND ($Vz0hmukhwa4zdc[1] == 'Predictor') AND (isset($Vsswtyilpf1r[($Vl0q4noiexi4dc +1)]) AND ($Vsswtyilpf1r[($Vl0q4noiexi4dc +1)][0] == 'numeric'))) {
						$V5cmcb3it4r5 = intval($Vsswtyilpf1r[($Vl0q4noiexi4dc +1)][1]);
					}
				}
			} elseif ($Vmytflhgvwax) {
				if (($Vz0hmukhwa4z[0] == '/') AND ($Vz0hmukhwa4z[1] == 'Size') AND (isset($V2vxymcs5m4f[($Vl0q4noiexi4 +1)]) AND ($V2vxymcs5m4f[($Vl0q4noiexi4 +1)][0] == 'numeric'))) {
					$Va3hk2l0dn0u['trailer']['size'] = $V2vxymcs5m4f[($Vl0q4noiexi4 +1)][1];
				} elseif (($Vz0hmukhwa4z[0] == '/') AND ($Vz0hmukhwa4z[1] == 'Root') AND (isset($V2vxymcs5m4f[($Vl0q4noiexi4 +1)]) AND ($V2vxymcs5m4f[($Vl0q4noiexi4 +1)][0] == 'objref'))) {
					$Va3hk2l0dn0u['trailer']['root'] = $V2vxymcs5m4f[($Vl0q4noiexi4 +1)][1];
				} elseif (($Vz0hmukhwa4z[0] == '/') AND ($Vz0hmukhwa4z[1] == 'Info') AND (isset($V2vxymcs5m4f[($Vl0q4noiexi4 +1)]) AND ($V2vxymcs5m4f[($Vl0q4noiexi4 +1)][0] == 'objref'))) {
					$Va3hk2l0dn0u['trailer']['info'] = $V2vxymcs5m4f[($Vl0q4noiexi4 +1)][1];
				} elseif (($Vz0hmukhwa4z[0] == '/') AND ($Vz0hmukhwa4z[1] == 'Encrypt') AND (isset($V2vxymcs5m4f[($Vl0q4noiexi4 +1)]) AND ($V2vxymcs5m4f[($Vl0q4noiexi4 +1)][0] == 'objref'))) {
					$Va3hk2l0dn0u['trailer']['encrypt'] = $V2vxymcs5m4f[($Vl0q4noiexi4 +1)][1];
				} elseif (($Vz0hmukhwa4z[0] == '/') AND ($Vz0hmukhwa4z[1] == 'ID') AND (isset($V2vxymcs5m4f[($Vl0q4noiexi4 +1)]))) {
					$Va3hk2l0dn0u['trailer']['id'] = array();
					$Va3hk2l0dn0u['trailer']['id'][0] = $V2vxymcs5m4f[($Vl0q4noiexi4 +1)][1][0][1];
					$Va3hk2l0dn0u['trailer']['id'][1] = $V2vxymcs5m4f[($Vl0q4noiexi4 +1)][1][1][1];
				}
			}
		}
		
		if ($Vj2z5lejlpbd AND isset($Va3hk2l0dn0ucrs[1][3][0])) {
			
			$V5anheyuxl4d = ($Vnq1ilgebapv + 1);
			
			$Vm1ojehg5dbz = unpack('C*', $Va3hk2l0dn0ucrs[1][3][0]);
			
			$Vm1ojehg5dbz = array_chunk($Vm1ojehg5dbz, $V5anheyuxl4d);
			
			$Vi11fe1ipn3h = array();
			
			$Vhv3hsxjaaqf = array_fill (0, $V5anheyuxl4d, 0);
			
			foreach ($Vm1ojehg5dbz as $Vl0q4noiexi4 => $Vjs4rkfllnin) {
				
				$Vi11fe1ipn3h[$Vl0q4noiexi4] = array();
				
				$V5cmcb3it4r5 = (10 + $Vjs4rkfllnin[0]);
				
				for ($V55vc4mewy5w=1; $V55vc4mewy5w<=$Vnq1ilgebapv; ++$V55vc4mewy5w) {
					
					$Vuaufi3la1vg = ($V55vc4mewy5w - 1);
					$Vjs4rkfllnin_up = $Vhv3hsxjaaqf[$Vuaufi3la1vg];
					if ($V55vc4mewy5w == 1) {
						$Vjs4rkfllnin_left = 0;
						$Vjs4rkfllnin_upleft = 0;
					} else {
						$Vjs4rkfllnin_left = $Vjs4rkfllnin[($V55vc4mewy5w - 1)];
						$Vjs4rkfllnin_upleft = $Vhv3hsxjaaqf[($Vuaufi3la1vg - 1)];
					}
					switch ($V5cmcb3it4r5) {
						case 10: { 
							$Vi11fe1ipn3h[$Vl0q4noiexi4][$Vuaufi3la1vg] = $Vjs4rkfllnin[$V55vc4mewy5w];
							break;
						}
						case 11: { 
							$Vi11fe1ipn3h[$Vl0q4noiexi4][$Vuaufi3la1vg] = (($Vjs4rkfllnin[$V55vc4mewy5w] + $Vjs4rkfllnin_left) & 0xff);
							break;
						}
						case 12: { 
							$Vi11fe1ipn3h[$Vl0q4noiexi4][$Vuaufi3la1vg] = (($Vjs4rkfllnin[$V55vc4mewy5w] + $Vjs4rkfllnin_up) & 0xff);
							break;
						}
						case 13: { 
							$Vi11fe1ipn3h[$Vl0q4noiexi4][$Vuaufi3la1vg] = (($Vjs4rkfllnin[$V55vc4mewy5w] + (($Vjs4rkfllnin_left + $Vjs4rkfllnin_up) / 2)) & 0xff);
							break;
						}
						case 14: { 
							
							$V1yuhsvbtlvr = ($Vjs4rkfllnin_left + $Vjs4rkfllnin_up - $Vjs4rkfllnin_upleft);
							
							$V1yuhsvbtlvra = abs($V1yuhsvbtlvr - $Vjs4rkfllnin_left);
							$V1yuhsvbtlvrb = abs($V1yuhsvbtlvr - $Vjs4rkfllnin_up);
							$V1yuhsvbtlvrc = abs($V1yuhsvbtlvr - $Vjs4rkfllnin_upleft);
							$V1yuhsvbtlvrmin = min($V1yuhsvbtlvra, $V1yuhsvbtlvrb, $V1yuhsvbtlvrc);
							
							switch ($V1yuhsvbtlvrmin) {
								case $V1yuhsvbtlvra: {
									$Vi11fe1ipn3h[$Vl0q4noiexi4][$Vuaufi3la1vg] = (($Vjs4rkfllnin[$V55vc4mewy5w] + $Vjs4rkfllnin_left) & 0xff);
									break;
								}
								case $V1yuhsvbtlvrb: {
									$Vi11fe1ipn3h[$Vl0q4noiexi4][$Vuaufi3la1vg] = (($Vjs4rkfllnin[$V55vc4mewy5w] + $Vjs4rkfllnin_up) & 0xff);
									break;
								}
								case $V1yuhsvbtlvrc: {
									$Vi11fe1ipn3h[$Vl0q4noiexi4][$Vuaufi3la1vg] = (($Vjs4rkfllnin[$V55vc4mewy5w] + $Vjs4rkfllnin_upleft) & 0xff);
									break;
								}
							}
							break;
						}
						default: { 
							$this->Error('Unknown PNG predictor');
							break;
						}
					}
				}
				$Vhv3hsxjaaqf = $Vi11fe1ipn3h[$Vl0q4noiexi4];
			} 
			
			$Vm1ojehg5dbz = array();
			
			foreach ($Vi11fe1ipn3h as $Vl0q4noiexi4 => $Vjs4rkfllnin) {
				
				$Vm1ojehg5dbz[$Vl0q4noiexi4] = array(0, 0, 0);
				if ($Vailkgru4whu[0] == 0) {
					
					$Vm1ojehg5dbz[$Vl0q4noiexi4][0] = 1;
				}
				$V55vc4mewy5w = 0; 
				
				for ($Vwcmlurixvzg = 0; $Vwcmlurixvzg < 3; ++$Vwcmlurixvzg) {
					
					for ($Vpq3acakq35c = 0; $Vpq3acakq35c < $Vailkgru4whu[$Vwcmlurixvzg]; ++$Vpq3acakq35c) {
						if (isset($Vjs4rkfllnin[$V55vc4mewy5w])) {
							$Vm1ojehg5dbz[$Vl0q4noiexi4][$Vwcmlurixvzg] += ($Vjs4rkfllnin[$V55vc4mewy5w] << (($Vailkgru4whu[$Vwcmlurixvzg] - 1 - $Vpq3acakq35c) * 8));
						}
						++$V55vc4mewy5w;
					}
				}
			}
			$Vi11fe1ipn3h = array();
			
			if (isset($Vm2zmliau5ly_first)) {
				$Vcsbphjwgcgf_num = $Vm2zmliau5ly_first;
			} else {
				$Vcsbphjwgcgf_num = 0;
			}
			foreach ($Vm1ojehg5dbz as $Vl0q4noiexi4 => $Vjs4rkfllnin) {
				switch ($Vjs4rkfllnin[0]) {
					case 0: { 
						break;
					}
					case 1: { 
						
						$Vm2zmliau5ly = $Vcsbphjwgcgf_num.'_'.$Vjs4rkfllnin[2];
						
						if (!isset($Va3hk2l0dn0u['xref'][$Vm2zmliau5ly])) {
							
							$Va3hk2l0dn0u['xref'][$Vm2zmliau5ly] = $Vjs4rkfllnin[1];
						}
						break;
					}
					case 2: { 
						
						
						$Vm2zmliau5ly = $Vjs4rkfllnin[1].'_0_'.$Vjs4rkfllnin[2];
						$Va3hk2l0dn0u['xref'][$Vm2zmliau5ly] = -1;
						break;
					}
					default: { 
						break;
					}
				}
				++$Vcsbphjwgcgf_num;
			}
		} 
		if (isset($Vwjfojezvdsw)) {
			
			$Va3hk2l0dn0u = $this->getXrefData($Vwjfojezvdsw, $Va3hk2l0dn0u);
		}
		return $Va3hk2l0dn0u;
	}

	
	protected function getRawObject($Vzl5igrsjgyf=0) {
		$Vcsbphjwgcgftype = ''; 
		$Vcsbphjwgcgfval = ''; 
		
		$Vzl5igrsjgyf += strspn($this->pdfdata, "\x00\x09\x0a\x0c\x0d\x20", $Vzl5igrsjgyf);
		
		$Vwcmlurixvzghar = $this->pdfdata[$Vzl5igrsjgyf];
		
		switch ($Vwcmlurixvzghar) {
			case '%': { 
				
				$Vsr4aoqjw5yi = strcspn($this->pdfdata, "\r\n", $Vzl5igrsjgyf);
				if ($Vsr4aoqjw5yi > 0) {
					$Vzl5igrsjgyf += $Vsr4aoqjw5yi;
					return $this->getRawObject($Vzl5igrsjgyf);
				}
				break;
			}
			case '/': { 
				
				$Vcsbphjwgcgftype = $Vwcmlurixvzghar;
				++$Vzl5igrsjgyf;
				if (preg_match('/^([^\x00\x09\x0a\x0c\x0d\x20\s\x28\x29\x3c\x3e\x5b\x5d\x7b\x7d\x2f\x25]+)/', substr($this->pdfdata, $Vzl5igrsjgyf, 256), $Vfw2yccohots) == 1) {
					$Vcsbphjwgcgfval = $Vfw2yccohots[1]; 
					$Vzl5igrsjgyf += strlen($Vcsbphjwgcgfval);
				}
				break;
			}
			case '(':   
			case ')': { 
				
				$Vcsbphjwgcgftype = $Vwcmlurixvzghar;
				++$Vzl5igrsjgyf;
				$Vtybl2mwl4hb = $Vzl5igrsjgyf;
				if ($Vwcmlurixvzghar == '(') {
					$Vu445zwntix4 = 1;
					while ($Vu445zwntix4 > 0) {
						if (!isset($this->pdfdata{$Vtybl2mwl4hb})) {
							break;
						}
						$Vwcmlurixvzgh = $this->pdfdata{$Vtybl2mwl4hb};
						switch ($Vwcmlurixvzgh) {
							case '\\': { 
								
								++$Vtybl2mwl4hb;
								break;
							}
							case '(': { 
								++$Vu445zwntix4;
								break;
							}
							case ')': { 
								--$Vu445zwntix4;
								break;
							}
						}
						++$Vtybl2mwl4hb;
					}
					$Vcsbphjwgcgfval = substr($this->pdfdata, $Vzl5igrsjgyf, ($Vtybl2mwl4hb - $Vzl5igrsjgyf - 1));
					$Vzl5igrsjgyf = $Vtybl2mwl4hb;
				}
				break;
			}
			case '[':   
			case ']': { 
				
				$Vcsbphjwgcgftype = $Vwcmlurixvzghar;
				++$Vzl5igrsjgyf;
				if ($Vwcmlurixvzghar == '[') {
					
					$Vcsbphjwgcgfval = array();
					do {
						
						$Vfinwzp32dqp = $this->getRawObject($Vzl5igrsjgyf);
						$Vzl5igrsjgyf = $Vfinwzp32dqp[2];
						$Vcsbphjwgcgfval[] = $Vfinwzp32dqp;
					} while ($Vfinwzp32dqp[0] != ']');
					
					array_pop($Vcsbphjwgcgfval);
				}
				break;
			}
			case '<':   
			case '>': { 
				if (isset($this->pdfdata{($Vzl5igrsjgyf + 1)}) AND ($this->pdfdata{($Vzl5igrsjgyf + 1)} == $Vwcmlurixvzghar)) {
					
					$Vcsbphjwgcgftype = $Vwcmlurixvzghar.$Vwcmlurixvzghar;
					$Vzl5igrsjgyf += 2;
					if ($Vwcmlurixvzghar == '<') {
						
						$Vcsbphjwgcgfval = array();
						do {
							
							$Vfinwzp32dqp = $this->getRawObject($Vzl5igrsjgyf);
							$Vzl5igrsjgyf = $Vfinwzp32dqp[2];
							$Vcsbphjwgcgfval[] = $Vfinwzp32dqp;
						} while ($Vfinwzp32dqp[0] != '>>');
						
						array_pop($Vcsbphjwgcgfval);
					}
				} else {
					
					$Vcsbphjwgcgftype = $Vwcmlurixvzghar;
					++$Vzl5igrsjgyf;
					if (($Vwcmlurixvzghar == '<') AND (preg_match('/^([0-9A-Fa-f\x09\x0a\x0c\x0d\x20]+)>/iU', substr($this->pdfdata, $Vzl5igrsjgyf), $Vfw2yccohots) == 1)) {
						
						$Vcsbphjwgcgfval = strtr($Vfw2yccohots[1], "\x09\x0a\x0c\x0d\x20", '');
						$Vzl5igrsjgyf += strlen($Vfw2yccohots[0]);
					} elseif (($Vgxfvprpj3v4 = strpos($this->pdfdata, '>', $Vzl5igrsjgyf)) !== FALSE) {
						$Vzl5igrsjgyf = $Vgxfvprpj3v4 + 1;
                    }
				}
				break;
			}
			default: {
				if (substr($this->pdfdata, $Vzl5igrsjgyf, 6) == 'endobj') {
					
					$Vcsbphjwgcgftype = 'endobj';
					$Vzl5igrsjgyf += 6;
				} elseif (substr($this->pdfdata, $Vzl5igrsjgyf, 4) == 'null') {
					
					$Vcsbphjwgcgftype = 'null';
					$Vzl5igrsjgyf += 4;
					$Vcsbphjwgcgfval = 'null';
				} elseif (substr($this->pdfdata, $Vzl5igrsjgyf, 4) == 'true') {
					
					$Vcsbphjwgcgftype = 'boolean';
					$Vzl5igrsjgyf += 4;
					$Vcsbphjwgcgfval = 'true';
				} elseif (substr($this->pdfdata, $Vzl5igrsjgyf, 5) == 'false') {
					
					$Vcsbphjwgcgftype = 'boolean';
					$Vzl5igrsjgyf += 5;
					$Vcsbphjwgcgfval = 'false';
				} elseif (substr($this->pdfdata, $Vzl5igrsjgyf, 6) == 'stream') {
					
					$Vcsbphjwgcgftype = 'stream';
					$Vzl5igrsjgyf += 6;
					if (preg_match('/^([\r]?[\n])/isU', substr($this->pdfdata, $Vzl5igrsjgyf), $Vfw2yccohots) == 1) {
						$Vzl5igrsjgyf += strlen($Vfw2yccohots[0]);
						if (preg_match('/(endstream)[\x09\x0a\x0c\x0d\x20]/isU', substr($this->pdfdata, $Vzl5igrsjgyf), $Vfw2yccohots, PREG_OFFSET_CAPTURE) == 1) {
							$Vcsbphjwgcgfval = substr($this->pdfdata, $Vzl5igrsjgyf, $Vfw2yccohots[0][1]);
							$Vzl5igrsjgyf += $Vfw2yccohots[1][1];
						}
					}
				} elseif (substr($this->pdfdata, $Vzl5igrsjgyf, 9) == 'endstream') {
					
					$Vcsbphjwgcgftype = 'endstream';
					$Vzl5igrsjgyf += 9;
				} elseif (preg_match('/^([0-9]+)[\s]+([0-9]+)[\s]+R/iU', substr($this->pdfdata, $Vzl5igrsjgyf, 33), $Vfw2yccohots) == 1) {
					
					$Vcsbphjwgcgftype = 'objref';
					$Vzl5igrsjgyf += strlen($Vfw2yccohots[0]);
					$Vcsbphjwgcgfval = intval($Vfw2yccohots[1]).'_'.intval($Vfw2yccohots[2]);
				} elseif (preg_match('/^([0-9]+)[\s]+([0-9]+)[\s]+obj/iU', substr($this->pdfdata, $Vzl5igrsjgyf, 33), $Vfw2yccohots) == 1) {
					
					$Vcsbphjwgcgftype = 'obj';
					$Vcsbphjwgcgfval = intval($Vfw2yccohots[1]).'_'.intval($Vfw2yccohots[2]);
					$Vzl5igrsjgyf += strlen ($Vfw2yccohots[0]);
				} elseif (($Vz2z2xlio304 = strspn($this->pdfdata, '+-.0123456789', $Vzl5igrsjgyf)) > 0) {
					
					$Vcsbphjwgcgftype = 'numeric';
					$Vcsbphjwgcgfval = substr($this->pdfdata, $Vzl5igrsjgyf, $Vz2z2xlio304);
					$Vzl5igrsjgyf += $Vz2z2xlio304;
				}
				break;
			}
		}
		return array($Vcsbphjwgcgftype, $Vcsbphjwgcgfval, $Vzl5igrsjgyf);
	}

	
	protected function getIndirectObject($Vcsbphjwgcgf_ref, $Vzl5igrsjgyf=0, $Vt3nveiddezb=true) {
		$Vcsbphjwgcgf = explode('_', $Vcsbphjwgcgf_ref);
		if (($Vcsbphjwgcgf === false) OR (count($Vcsbphjwgcgf) != 2)) {
			$this->Error('Invalid object reference: '.$Vcsbphjwgcgf);
			return;
		}
		$Vcsbphjwgcgfref = $Vcsbphjwgcgf[0].' '.$Vcsbphjwgcgf[1].' obj';
		
		$Vzl5igrsjgyf += strspn($this->pdfdata, '0', $Vzl5igrsjgyf);
		if (strpos($this->pdfdata, $Vcsbphjwgcgfref, $Vzl5igrsjgyf) != $Vzl5igrsjgyf) {
			
			return array('null', 'null', $Vzl5igrsjgyf);
		}
		
		$Vzl5igrsjgyf += strlen($Vcsbphjwgcgfref);
		
		$Vcsbphjwgcgfdata = array();
		$V55vc4mewy5w = 0; 
		do {
			$V2dwctxuygqj = $Vzl5igrsjgyf;
                        
			$Vfinwzp32dqp = $this->getRawObject($Vzl5igrsjgyf);
			$Vzl5igrsjgyf = $Vfinwzp32dqp[2];
			
			if ($Vt3nveiddezb AND ($Vfinwzp32dqp[0] == 'stream') AND (isset($Vcsbphjwgcgfdata[($V55vc4mewy5w - 1)][0])) AND ($Vcsbphjwgcgfdata[($V55vc4mewy5w - 1)][0] == '<<')) {
				$Vfinwzp32dqp[3] = $this->decodeStream($Vcsbphjwgcgfdata[($V55vc4mewy5w - 1)][1], $Vfinwzp32dqp[1]);
			}
			$Vcsbphjwgcgfdata[$V55vc4mewy5w] = $Vfinwzp32dqp;
			++$V55vc4mewy5w;
		} while (($Vfinwzp32dqp[0] != 'endobj') AND ($Vzl5igrsjgyf != $V2dwctxuygqj));
		
		array_pop($Vcsbphjwgcgfdata);
		
		return $Vcsbphjwgcgfdata;
	}

	
	protected function getObjectVal($Vcsbphjwgcgf) {
		if ($Vcsbphjwgcgf[0] == 'objref') {
			
			if (isset($this->objects[$Vcsbphjwgcgf[1]])) {
				
				return $this->objects[$Vcsbphjwgcgf[1]];
			} elseif (isset($this->xref[$Vcsbphjwgcgf[1]])) {
				
				$this->objects[$Vcsbphjwgcgf[1]] = $this->getIndirectObject($Vcsbphjwgcgf[1], $this->xref[$Vcsbphjwgcgf[1]], false);
				return $this->objects[$Vcsbphjwgcgf[1]];
			}
		}
		return $Vcsbphjwgcgf;
	}

	
	protected function decodeStream($Vu4ab5tgsep4, $Vowu5nc401vr) {
		
		$Vmep2tikmpjl = strlen($Vowu5nc401vr);
		if ($Vmep2tikmpjl <= 0) {
			return array('', array());
		}
		$Vk2xv0lgzv0p = array();
		foreach ($Vu4ab5tgsep4 as $Vl0q4noiexi4 => $Vz0hmukhwa4z) {
			if ($Vz0hmukhwa4z[0] == '/') {
				if (($Vz0hmukhwa4z[1] == 'Length') AND (isset($Vu4ab5tgsep4[($Vl0q4noiexi4 + 1)])) AND ($Vu4ab5tgsep4[($Vl0q4noiexi4 + 1)][0] == 'numeric')) {
					
					$Vjt3djflow34 = intval($Vu4ab5tgsep4[($Vl0q4noiexi4 + 1)][1]);
					if ($Vjt3djflow34 < $Vmep2tikmpjl) {
						$Vowu5nc401vr = substr($Vowu5nc401vr, 0, $Vjt3djflow34);
						$Vmep2tikmpjl = $Vjt3djflow34;
					}
				} elseif (($Vz0hmukhwa4z[1] == 'Filter') AND (isset($Vu4ab5tgsep4[($Vl0q4noiexi4 + 1)]))) {
					
					$Vcsbphjwgcgfval = $this->getObjectVal($Vu4ab5tgsep4[($Vl0q4noiexi4 + 1)]);
					if ($Vcsbphjwgcgfval[0] == '/') {
						
						$Vk2xv0lgzv0p[] = $Vcsbphjwgcgfval[1];
					} elseif ($Vcsbphjwgcgfval[0] == '[') {
						
						foreach ($Vcsbphjwgcgfval[1] as $V5u3a2zfwrld) {
							if ($V5u3a2zfwrld[0] == '/') {
								$Vk2xv0lgzv0p[] = $V5u3a2zfwrld[1];
							}
						}
					}
				}
			}
		}
		
		$V4ztcjprjsmo = array();
		foreach ($Vk2xv0lgzv0p as $Vq5mneg2nyu1) {
			if (in_array($Vq5mneg2nyu1, TCPDF_FILTERS::getAvailableFilters())) {
				try {
					$Vowu5nc401vr = TCPDF_FILTERS::decodeFilter($Vq5mneg2nyu1, $Vowu5nc401vr);
				} catch (Exception $Vs0htpwzsrcc) {
					$Vs0htpwzsrccmsg = $Vs0htpwzsrcc->getMessage();
					if ((($Vs0htpwzsrccmsg[0] == '~') AND !$this->cfg['ignore_missing_filter_decoders'])
						OR (($Vs0htpwzsrccmsg[0] != '~') AND !$this->cfg['ignore_filter_decoding_errors'])) {
						$this->Error($Vs0htpwzsrcc->getMessage());
					}
				}
			} else {
				
				$V4ztcjprjsmo[] = $Vq5mneg2nyu1;
			}
		}
		return array($Vowu5nc401vr, $V4ztcjprjsmo);
	}

	
	public function Error($Vigzdfzehwux) {
		if ($this->cfg['die_for_errors']) {
			die('<strong>TCPDF_PARSER ERROR: </strong>'.$Vigzdfzehwux);
		} else {
			throw new Exception('TCPDF_PARSER ERROR: '.$Vigzdfzehwux);
		}
	}

} 




