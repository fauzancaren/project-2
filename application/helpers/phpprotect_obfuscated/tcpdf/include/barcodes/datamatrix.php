<?php





































if (!defined('DATAMATRIXDEFS')) {

	
	define('DATAMATRIXDEFS', true);

	

} 





define('ENC_ASCII', 0);


define('ENC_C40', 1);


define('ENC_TXT', 2);


define('ENC_X12', 3);


define('ENC_EDF', 4);


define('ENC_BASE256', 5);


define('ENC_ASCII_EXT', 6);


define('ENC_ASCII_NUM', 7);


class Datamatrix {

	
	protected $Vpf0bkyswrqn = array();

	
	protected $V0jmusdjmacn = ENC_ASCII;

	
	protected $Vag2darwyox1 = array(
		
		array(0x00a,0x00a,0x008,0x008,0x00a,0x00a,0x008,0x008,0x001,0x001,0x001,0x003,0x005,0x001,0x003,0x005), 
		array(0x00c,0x00c,0x00a,0x00a,0x00c,0x00c,0x00a,0x00a,0x001,0x001,0x001,0x005,0x007,0x001,0x005,0x007), 
		array(0x00e,0x00e,0x00c,0x00c,0x00e,0x00e,0x00c,0x00c,0x001,0x001,0x001,0x008,0x00a,0x001,0x008,0x00a), 
		array(0x010,0x010,0x00e,0x00e,0x010,0x010,0x00e,0x00e,0x001,0x001,0x001,0x00c,0x00c,0x001,0x00c,0x00c), 
		array(0x012,0x012,0x010,0x010,0x012,0x012,0x010,0x010,0x001,0x001,0x001,0x012,0x00e,0x001,0x012,0x00e), 
		array(0x014,0x014,0x012,0x012,0x014,0x014,0x012,0x012,0x001,0x001,0x001,0x016,0x012,0x001,0x016,0x012), 
		array(0x016,0x016,0x014,0x014,0x016,0x016,0x014,0x014,0x001,0x001,0x001,0x01e,0x014,0x001,0x01e,0x014), 
		array(0x018,0x018,0x016,0x016,0x018,0x018,0x016,0x016,0x001,0x001,0x001,0x024,0x018,0x001,0x024,0x018), 
		array(0x01a,0x01a,0x018,0x018,0x01a,0x01a,0x018,0x018,0x001,0x001,0x001,0x02c,0x01c,0x001,0x02c,0x01c), 
		array(0x020,0x020,0x01c,0x01c,0x010,0x010,0x00e,0x00e,0x002,0x002,0x004,0x03e,0x024,0x001,0x03e,0x024), 
		array(0x024,0x024,0x020,0x020,0x012,0x012,0x010,0x010,0x002,0x002,0x004,0x056,0x02a,0x001,0x056,0x02a), 
		array(0x028,0x028,0x024,0x024,0x014,0x014,0x012,0x012,0x002,0x002,0x004,0x072,0x030,0x001,0x072,0x030), 
		array(0x02c,0x02c,0x028,0x028,0x016,0x016,0x014,0x014,0x002,0x002,0x004,0x090,0x038,0x001,0x090,0x038), 
		array(0x030,0x030,0x02c,0x02c,0x018,0x018,0x016,0x016,0x002,0x002,0x004,0x0ae,0x044,0x001,0x0ae,0x044), 
		array(0x034,0x034,0x030,0x030,0x01a,0x01a,0x018,0x018,0x002,0x002,0x004,0x0cc,0x054,0x002,0x066,0x02a), 
		array(0x040,0x040,0x038,0x038,0x010,0x010,0x00e,0x00e,0x004,0x004,0x010,0x118,0x070,0x002,0x08c,0x038), 
		array(0x048,0x048,0x040,0x040,0x012,0x012,0x010,0x010,0x004,0x004,0x010,0x170,0x090,0x004,0x05c,0x024), 
		array(0x050,0x050,0x048,0x048,0x014,0x014,0x012,0x012,0x004,0x004,0x010,0x1c8,0x0c0,0x004,0x072,0x030), 
		array(0x058,0x058,0x050,0x050,0x016,0x016,0x014,0x014,0x004,0x004,0x010,0x240,0x0e0,0x004,0x090,0x038), 
		array(0x060,0x060,0x058,0x058,0x018,0x018,0x016,0x016,0x004,0x004,0x010,0x2b8,0x110,0x004,0x0ae,0x044), 
		array(0x068,0x068,0x060,0x060,0x01a,0x01a,0x018,0x018,0x004,0x004,0x010,0x330,0x150,0x006,0x088,0x038), 
		array(0x078,0x078,0x06c,0x06c,0x014,0x014,0x012,0x012,0x006,0x006,0x024,0x41a,0x198,0x006,0x0af,0x044), 
		array(0x084,0x084,0x078,0x078,0x016,0x016,0x014,0x014,0x006,0x006,0x024,0x518,0x1f0,0x008,0x0a3,0x03e), 
		array(0x090,0x090,0x084,0x084,0x018,0x018,0x016,0x016,0x006,0x006,0x024,0x616,0x26c,0x00a,0x09c,0x03e), 
		
		array(0x008,0x012,0x006,0x010,0x008,0x012,0x006,0x010,0x001,0x001,0x001,0x005,0x007,0x001,0x005,0x007), 
		array(0x008,0x020,0x006,0x01c,0x008,0x010,0x006,0x00e,0x001,0x002,0x002,0x00a,0x00b,0x001,0x00a,0x00b), 
		array(0x00c,0x01a,0x00a,0x018,0x00c,0x01a,0x00a,0x018,0x001,0x001,0x001,0x010,0x00e,0x001,0x010,0x00e), 
		array(0x00c,0x024,0x00a,0x020,0x00c,0x012,0x00a,0x010,0x001,0x002,0x002,0x00c,0x012,0x001,0x00c,0x012), 
		array(0x010,0x024,0x00e,0x020,0x010,0x012,0x00e,0x010,0x001,0x002,0x002,0x020,0x018,0x001,0x020,0x018), 
		array(0x010,0x030,0x00e,0x02c,0x010,0x018,0x00e,0x016,0x001,0x002,0x002,0x031,0x01c,0x001,0x031,0x01c)  
	);

	
	protected $Vj0cc2foerz0 = array(ENC_C40 => 'C40', ENC_TXT => 'TXT', ENC_X12 =>'X12');

	
	protected $Vzaciyiv43uw = array(
		'C40' => array( 
			'S1'=>0x00,'S2'=>0x01,'S3'=>0x02,0x20=>0x03,0x30=>0x04,0x31=>0x05,0x32=>0x06,0x33=>0x07,0x34=>0x08,0x35=>0x09, 
			0x36=>0x0a,0x37=>0x0b,0x38=>0x0c,0x39=>0x0d,0x41=>0x0e,0x42=>0x0f,0x43=>0x10,0x44=>0x11,0x45=>0x12,0x46=>0x13, 
			0x47=>0x14,0x48=>0x15,0x49=>0x16,0x4a=>0x17,0x4b=>0x18,0x4c=>0x19,0x4d=>0x1a,0x4e=>0x1b,0x4f=>0x1c,0x50=>0x1d, 
			0x51=>0x1e,0x52=>0x1f,0x53=>0x20,0x54=>0x21,0x55=>0x22,0x56=>0x23,0x57=>0x24,0x58=>0x25,0x59=>0x26,0x5a=>0x27),
		'TXT' => array( 
			'S1'=>0x00,'S2'=>0x01,'S3'=>0x02,0x20=>0x03,0x30=>0x04,0x31=>0x05,0x32=>0x06,0x33=>0x07,0x34=>0x08,0x35=>0x09, 
			0x36=>0x0a,0x37=>0x0b,0x38=>0x0c,0x39=>0x0d,0x61=>0x0e,0x62=>0x0f,0x63=>0x10,0x64=>0x11,0x65=>0x12,0x66=>0x13, 
			0x67=>0x14,0x68=>0x15,0x69=>0x16,0x6a=>0x17,0x6b=>0x18,0x6c=>0x19,0x6d=>0x1a,0x6e=>0x1b,0x6f=>0x1c,0x70=>0x1d, 
			0x71=>0x1e,0x72=>0x1f,0x73=>0x20,0x74=>0x21,0x75=>0x22,0x76=>0x23,0x77=>0x24,0x78=>0x25,0x79=>0x26,0x7a=>0x27),
		'SH1' => array( 
			0x00=>0x00,0x01=>0x01,0x02=>0x02,0x03=>0x03,0x04=>0x04,0x05=>0x05,0x06=>0x06,0x07=>0x07,0x08=>0x08,0x09=>0x09, 
			0x0a=>0x0a,0x0b=>0x0b,0x0c=>0x0c,0x0d=>0x0d,0x0e=>0x0e,0x0f=>0x0f,0x10=>0x10,0x11=>0x11,0x12=>0x12,0x13=>0x13, 
			0x14=>0x14,0x15=>0x15,0x16=>0x16,0x17=>0x17,0x18=>0x18,0x19=>0x19,0x1a=>0x1a,0x1b=>0x1b,0x1c=>0x1c,0x1d=>0x1d, 
			0x1e=>0x1e,0x1f=>0x1f),                                                                                        
		'SH2' => array( 
			0x21=>0x00,0x22=>0x01,0x23=>0x02,0x24=>0x03,0x25=>0x04,0x26=>0x05,0x27=>0x06,0x28=>0x07,0x29=>0x08,0x2a=>0x09, 
			0x2b=>0x0a,0x2c=>0x0b,0x2d=>0x0c,0x2e=>0x0d,0x2f=>0x0e,0x3a=>0x0f,0x3b=>0x10,0x3c=>0x11,0x3d=>0x12,0x3e=>0x13, 
			0x3f=>0x14,0x40=>0x15,0x5b=>0x16,0x5c=>0x17,0x5d=>0x18,0x5e=>0x19,0x5f=>0x1a,'F1'=>0x1b,'US'=>0x1e),           
		'S3C' => array( 
			0x60=>0x00,0x61=>0x01,0x62=>0x02,0x63=>0x03,0x64=>0x04,0x65=>0x05,0x66=>0x06,0x67=>0x07,0x68=>0x08,0x69=>0x09, 
			0x6a=>0x0a,0x6b=>0x0b,0x6c=>0x0c,0x6d=>0x0d,0x6e=>0x0e,0x6f=>0x0f,0x70=>0x10,0x71=>0x11,0x72=>0x12,0x73=>0x13, 
			0x74=>0x14,0x75=>0x15,0x76=>0x16,0x77=>0x17,0x78=>0x18,0x79=>0x19,0x7a=>0x1a,0x7b=>0x1b,0x7c=>0x1c,0x7d=>0x1d, 
			0x7e=>0x1e,0x7f=>0x1f),
		'S3T' => array( 
			0x60=>0x00,0x41=>0x01,0x42=>0x02,0x43=>0x03,0x44=>0x04,0x45=>0x05,0x46=>0x06,0x47=>0x07,0x48=>0x08,0x49=>0x09, 
			0x4a=>0x0a,0x4b=>0x0b,0x4c=>0x0c,0x4d=>0x0d,0x4e=>0x0e,0x4f=>0x0f,0x50=>0x10,0x51=>0x11,0x52=>0x12,0x53=>0x13, 
			0x54=>0x14,0x55=>0x15,0x56=>0x16,0x57=>0x17,0x58=>0x18,0x59=>0x19,0x5a=>0x1a,0x7b=>0x1b,0x7c=>0x1c,0x7d=>0x1d, 
			0x7e=>0x1e,0x7f=>0x1f),                                                                                        
		'X12' => array( 
			0x0d=>0x00,0x2a=>0x01,0x3e=>0x02,0x20=>0x03,0x30=>0x04,0x31=>0x05,0x32=>0x06,0x33=>0x07,0x34=>0x08,0x35=>0x09, 
			0x36=>0x0a,0x37=>0x0b,0x38=>0x0c,0x39=>0x0d,0x41=>0x0e,0x42=>0x0f,0x43=>0x10,0x44=>0x11,0x45=>0x12,0x46=>0x13, 
			0x47=>0x14,0x48=>0x15,0x49=>0x16,0x4a=>0x17,0x4b=>0x18,0x4c=>0x19,0x4d=>0x1a,0x4e=>0x1b,0x4f=>0x1c,0x50=>0x1d, 
			0x51=>0x1e,0x52=>0x1f,0x53=>0x20,0x54=>0x21,0x55=>0x22,0x56=>0x23,0x57=>0x24,0x58=>0x25,0x59=>0x26,0x5a=>0x27) 
		);



	
	public function __construct($Vu3hgjh1nrq0) {
		$Vpf0bkyswrqn = array();
		if ((is_null($Vu3hgjh1nrq0)) OR ($Vu3hgjh1nrq0 == '\0') OR ($Vu3hgjh1nrq0 == '')) {
			return false;
		}
		
		$V5k0cete3fo0 = $this->getHighLevelEncoding($Vu3hgjh1nrq0);
		
		$Vnjiat0fbuv1 = count($V5k0cete3fo0);
		
		if ($Vnjiat0fbuv1 > 1558) {
			return false;
		}
		
		foreach ($this->symbattr as $Vdbw0ztt4mjv) {
			if ($Vdbw0ztt4mjv[11] >= $Vnjiat0fbuv1) {
				break;
			}
		}
		if ($Vdbw0ztt4mjv[11] < $Vnjiat0fbuv1) {
			
			return false;
		} elseif ($Vdbw0ztt4mjv[11] > $Vnjiat0fbuv1) {
			
			if ((($Vdbw0ztt4mjv[11] - $Vnjiat0fbuv1) > 1) AND ($V5k0cete3fo0[($Vnjiat0fbuv1 - 1)] != 254)) {
				if ($this->last_enc == ENC_EDF) {
					
					$V5k0cete3fo0[] = 124;
					++$Vnjiat0fbuv1;
				} elseif (($this->last_enc != ENC_ASCII) AND ($this->last_enc != ENC_BASE256)) {
					
					$V5k0cete3fo0[] = 254;
					++$Vnjiat0fbuv1;
				}
			}
			if ($Vdbw0ztt4mjv[11] > $Vnjiat0fbuv1) {
				
				$V5k0cete3fo0[] = 129;
				++$Vnjiat0fbuv1;
				
				for ($V55vc4mewy5w = $Vnjiat0fbuv1; $V55vc4mewy5w < $Vdbw0ztt4mjv[11]; ++$V55vc4mewy5w) {
					$V5k0cete3fo0[] = $this->get253StateCodeword(129, $V55vc4mewy5w);
				}
			}
		}
		
		$V5k0cete3fo0 = $this->getErrorCorrection($V5k0cete3fo0, $Vdbw0ztt4mjv[13], $Vdbw0ztt4mjv[14], $Vdbw0ztt4mjv[15]);
		
		$Vzgvtgeec3o5 = array_fill(0, ($Vdbw0ztt4mjv[2] * $Vdbw0ztt4mjv[3]), 0);
		
		$Vyo1mhznc2ep = $this->getPlacementMap($Vdbw0ztt4mjv[2], $Vdbw0ztt4mjv[3]);
		
		$Vzgvtgeec3o5 = array();
		$V55vc4mewy5w = 0;
		
		$Vd1j10r2qoj5 = ($Vdbw0ztt4mjv[4] - 1);
		
		$V5lqypczgn3y = ($Vdbw0ztt4mjv[5] - 1);
		
		for ($Vev141cus5ld = 0; $Vev141cus5ld < $Vdbw0ztt4mjv[9]; ++$Vev141cus5ld) {
			
			for ($Vfhkt4vbeual = 0; $Vfhkt4vbeual < $Vdbw0ztt4mjv[4]; ++$Vfhkt4vbeual) {
				
				$Vfhkt4vbeualow = (($Vev141cus5ld * $Vdbw0ztt4mjv[4]) + $Vfhkt4vbeual);
				
				for ($Vlpkeje3pikc = 0; $Vlpkeje3pikc < $Vdbw0ztt4mjv[8]; ++$Vlpkeje3pikc) {
					
					for ($Vwcmlurixvzg = 0; $Vwcmlurixvzg < $Vdbw0ztt4mjv[5]; ++$Vwcmlurixvzg) {
						
						$Vwcmlurixvzgol = (($Vlpkeje3pikc * $Vdbw0ztt4mjv[5]) + $Vwcmlurixvzg);
						
						if ($Vfhkt4vbeual == 0) {
							
							if ($Vwcmlurixvzg % 2) {
								$Vzgvtgeec3o5[$Vfhkt4vbeualow][$Vwcmlurixvzgol] = 0;
							} else {
								$Vzgvtgeec3o5[$Vfhkt4vbeualow][$Vwcmlurixvzgol] = 1;
							}
						} elseif ($Vfhkt4vbeual == $Vd1j10r2qoj5) {
							
							$Vzgvtgeec3o5[$Vfhkt4vbeualow][$Vwcmlurixvzgol] = 1;
						} elseif ($Vwcmlurixvzg == 0) {
							
							$Vzgvtgeec3o5[$Vfhkt4vbeualow][$Vwcmlurixvzgol] = 1;
						} elseif ($Vwcmlurixvzg == $V5lqypczgn3y) {
							
							if ($Vfhkt4vbeual % 2) {
								$Vzgvtgeec3o5[$Vfhkt4vbeualow][$Vwcmlurixvzgol] = 1;
							} else {
								$Vzgvtgeec3o5[$Vfhkt4vbeualow][$Vwcmlurixvzgol] = 0;
							}
						} else { 
							if ($Vyo1mhznc2ep[$V55vc4mewy5w] < 2) {
								$Vzgvtgeec3o5[$Vfhkt4vbeualow][$Vwcmlurixvzgol] = $Vyo1mhznc2ep[$V55vc4mewy5w];
							} else {
								
								$V5k0cete3fo0_id = (floor($Vyo1mhznc2ep[$V55vc4mewy5w] / 10) - 1);
								
								$V5k0cete3fo0_bit = pow(2, (8 - ($Vyo1mhznc2ep[$V55vc4mewy5w] % 10)));
								$Vzgvtgeec3o5[$Vfhkt4vbeualow][$Vwcmlurixvzgol] = (($V5k0cete3fo0[$V5k0cete3fo0_id] & $V5k0cete3fo0_bit) == 0) ? 0 : 1;
							}
							++$V55vc4mewy5w;
						}
					}
				}
			}
		}
		$this->barcode_array['num_rows'] = $Vdbw0ztt4mjv[0];
		$this->barcode_array['num_cols'] = $Vdbw0ztt4mjv[1];
		$this->barcode_array['bcode'] = $Vzgvtgeec3o5;
	}

	
	public function getBarcodeArray() {
		return $this->barcode_array;
	}

	
	protected function getGFProduct($Vudz4oh4qiku, $Vpq3acakq35c, $V52dmdahvum3, $Vudz4oh4qikulog, $Vlrj3j2lgsaa) {
		if (($Vudz4oh4qiku == 0) OR ($Vpq3acakq35c == 0)) {
			return 0;
		}
		return ($Vudz4oh4qikulog[($V52dmdahvum3[$Vudz4oh4qiku] + $V52dmdahvum3[$Vpq3acakq35c]) % ($Vlrj3j2lgsaa - 1)]);
	}

	
	protected function getErrorCorrection($Vknbum3vupz1, $Vajzpau1bgs3, $Vnjiat0fbuv1, $Vyjzfymh0lgu, $Vlrj3j2lgsaa=256, $Vbfbingym4hy=301) {
		
		$V52dmdahvum3[0] = 0;
		$Vudz4oh4qikulog[0] = 1;
		for ($V55vc4mewy5w = 1; $V55vc4mewy5w < $Vlrj3j2lgsaa; ++$V55vc4mewy5w) {
			$Vudz4oh4qikulog[$V55vc4mewy5w] = ($Vudz4oh4qikulog[($V55vc4mewy5w - 1)] * 2);
			if ($Vudz4oh4qikulog[$V55vc4mewy5w] >= $Vlrj3j2lgsaa) {
				$Vudz4oh4qikulog[$V55vc4mewy5w] ^= $Vbfbingym4hy;
			}
			$V52dmdahvum3[$Vudz4oh4qikulog[$V55vc4mewy5w]] = $V55vc4mewy5w;
		}
		ksort($V52dmdahvum3);
		
		$Vwcmlurixvzg = array_fill(0, ($Vyjzfymh0lgu + 1), 0);
		$Vwcmlurixvzg[0] = 1;
		for ($V55vc4mewy5w = 1; $V55vc4mewy5w <= $Vyjzfymh0lgu; ++$V55vc4mewy5w) {
			$Vwcmlurixvzg[$V55vc4mewy5w] = $Vwcmlurixvzg[($V55vc4mewy5w-1)];
			for ($Vuaufi3la1vg = ($V55vc4mewy5w - 1); $Vuaufi3la1vg >= 1; --$Vuaufi3la1vg) {
				$Vwcmlurixvzg[$Vuaufi3la1vg] = $Vwcmlurixvzg[($Vuaufi3la1vg - 1)] ^ $this->getGFProduct($Vwcmlurixvzg[$Vuaufi3la1vg], $Vudz4oh4qikulog[$V55vc4mewy5w], $V52dmdahvum3, $Vudz4oh4qikulog, $Vlrj3j2lgsaa);
			}
			$Vwcmlurixvzg[0] = $this->getGFProduct($Vwcmlurixvzg[0], $Vudz4oh4qikulog[$V55vc4mewy5w], $V52dmdahvum3, $Vudz4oh4qikulog, $Vlrj3j2lgsaa);
		}
		ksort($Vwcmlurixvzg);
		
		$Vzwddnu2pudn = ($Vajzpau1bgs3 * $Vnjiat0fbuv1);
		
		$Vukfoa2hwk1u = ($Vajzpau1bgs3 * $Vyjzfymh0lgu);
		
		for ($Vpq3acakq35c = 0; $Vpq3acakq35c < $Vajzpau1bgs3; ++$Vpq3acakq35c) {
			
			$Vpq3acakq35clock = array();
			for ($Vgv45dfhsyuh = $Vpq3acakq35c; $Vgv45dfhsyuh < $Vzwddnu2pudn; $Vgv45dfhsyuh += $Vajzpau1bgs3) {
				$Vpq3acakq35clock[] = $Vknbum3vupz1[$Vgv45dfhsyuh];
			}
			
			$Vyjn1genq2dv = array_fill(0, ($Vyjzfymh0lgu + 1), 0);
			
			for ($V55vc4mewy5w = 0; $V55vc4mewy5w < $Vnjiat0fbuv1; ++$V55vc4mewy5w) {
				$Vl0q4noiexi4 = ($Vyjn1genq2dv[0] ^ $Vpq3acakq35clock[$V55vc4mewy5w]);
				for ($Vuaufi3la1vg = 0; $Vuaufi3la1vg < $Vyjzfymh0lgu; ++$Vuaufi3la1vg) {
					$Vyjn1genq2dv[$Vuaufi3la1vg] = ($Vyjn1genq2dv[($Vuaufi3la1vg + 1)] ^ $this->getGFProduct($Vl0q4noiexi4, $Vwcmlurixvzg[($Vyjzfymh0lgu - $Vuaufi3la1vg - 1)], $V52dmdahvum3, $Vudz4oh4qikulog, $Vlrj3j2lgsaa));
				}
			}
			
			$Vuaufi3la1vg = 0;
			for ($V55vc4mewy5w = $Vpq3acakq35c; $V55vc4mewy5w < $Vukfoa2hwk1u; $V55vc4mewy5w += $Vajzpau1bgs3) {
				$Vknbum3vupz1[($Vzwddnu2pudn + $V55vc4mewy5w)] = $Vyjn1genq2dv[$Vuaufi3la1vg];
				++$Vuaufi3la1vg;
			}
		}
		
		ksort($Vknbum3vupz1);
		return $Vknbum3vupz1;
	}

	
	protected function get253StateCodeword($V5k0cete3fo0pad, $V5k0cete3fo0pos) {
		$Vrtfgexvs0sl = ($V5k0cete3fo0pad + (((149 * $V5k0cete3fo0pos) % 253) + 1));
		if ($Vrtfgexvs0sl > 254) {
			$Vrtfgexvs0sl -= 254;
		}
		return $Vrtfgexvs0sl;
	}

	
	protected function get255StateCodeword($V5k0cete3fo0pad, $V5k0cete3fo0pos) {
		$Vrtfgexvs0sl = ($V5k0cete3fo0pad + (((149 * $V5k0cete3fo0pos) % 255) + 1));
		if ($Vrtfgexvs0sl > 255) {
			$Vrtfgexvs0sl -= 256;
		}
		return $Vrtfgexvs0sl;
	}

	
	protected function isCharMode($Vwcmlurixvzghr, $V0vkydnx50wa) {
		$Vgmf5biidbmw = false;
		switch ($V0vkydnx50wa) {
			case ENC_ASCII: { 
				$Vgmf5biidbmw = (($Vwcmlurixvzghr >= 0) AND ($Vwcmlurixvzghr <= 127));
				break;
			}
			case ENC_C40: { 
				$Vgmf5biidbmw = (($Vwcmlurixvzghr == 32) OR (($Vwcmlurixvzghr >= 48) AND ($Vwcmlurixvzghr <= 57)) OR (($Vwcmlurixvzghr >= 65) AND ($Vwcmlurixvzghr <= 90)));
				break;
			}
			case ENC_TXT: { 
				$Vgmf5biidbmw = (($Vwcmlurixvzghr == 32) OR (($Vwcmlurixvzghr >= 48) AND ($Vwcmlurixvzghr <= 57)) OR (($Vwcmlurixvzghr >= 97) AND ($Vwcmlurixvzghr <= 122)));
				break;
			}
			case ENC_X12: { 
				$Vgmf5biidbmw = (($Vwcmlurixvzghr == 13) OR ($Vwcmlurixvzghr == 42) OR ($Vwcmlurixvzghr == 62));
				break;
			}
			case ENC_EDF: { 
				$Vgmf5biidbmw = (($Vwcmlurixvzghr >= 32) AND ($Vwcmlurixvzghr <= 94));
				break;
			}
			case ENC_BASE256: { 
				$Vgmf5biidbmw = (($Vwcmlurixvzghr == 232) OR ($Vwcmlurixvzghr == 233) OR ($Vwcmlurixvzghr == 234) OR ($Vwcmlurixvzghr == 241));
				break;
			}
			case ENC_ASCII_EXT: { 
				$Vgmf5biidbmw = (($Vwcmlurixvzghr >= 128) AND ($Vwcmlurixvzghr <= 255));
				break;
			}
			case ENC_ASCII_NUM: { 
				$Vgmf5biidbmw = (($Vwcmlurixvzghr >= 48) AND ($Vwcmlurixvzghr <= 57));
				break;
			}
		}
		return $Vgmf5biidbmw;
	}

	
	protected function lookAheadTest($Vmfvrsd5xyqh, $Vsjw1s1w2nqe, $V0vkydnx50wa) {
		$Vmfvrsd5xyqh_length = strlen($Vmfvrsd5xyqh);
		if ($Vsjw1s1w2nqe >= $Vmfvrsd5xyqh_length) {
			return $V0vkydnx50wa;
		}
		$Vwcmlurixvzgharscount = 0; 
		
		if ($V0vkydnx50wa == ENC_ASCII) {
			$Vgv45dfhsyuhumch = array(0, 1, 1, 1, 1, 1.25);
		} else {
			$Vgv45dfhsyuhumch = array(1, 2, 2, 2, 2, 2.25);
			$Vgv45dfhsyuhumch[$V0vkydnx50wa] = 0;
		}
		while (true) {
			
			if (($Vsjw1s1w2nqe + $Vwcmlurixvzgharscount) == $Vmfvrsd5xyqh_length) {
				if ($Vgv45dfhsyuhumch[ENC_ASCII] <= ceil(min($Vgv45dfhsyuhumch[ENC_C40], $Vgv45dfhsyuhumch[ENC_TXT], $Vgv45dfhsyuhumch[ENC_X12], $Vgv45dfhsyuhumch[ENC_EDF], $Vgv45dfhsyuhumch[ENC_BASE256]))) {
					return ENC_ASCII;
				}
				if ($Vgv45dfhsyuhumch[ENC_BASE256] < ceil(min($Vgv45dfhsyuhumch[ENC_ASCII], $Vgv45dfhsyuhumch[ENC_C40], $Vgv45dfhsyuhumch[ENC_TXT], $Vgv45dfhsyuhumch[ENC_X12], $Vgv45dfhsyuhumch[ENC_EDF]))) {
					return ENC_BASE256;
				}
				if ($Vgv45dfhsyuhumch[ENC_EDF] < ceil(min($Vgv45dfhsyuhumch[ENC_ASCII], $Vgv45dfhsyuhumch[ENC_C40], $Vgv45dfhsyuhumch[ENC_TXT], $Vgv45dfhsyuhumch[ENC_X12], $Vgv45dfhsyuhumch[ENC_BASE256]))) {
					return ENC_EDF;
				}
				if ($Vgv45dfhsyuhumch[ENC_TXT] < ceil(min($Vgv45dfhsyuhumch[ENC_ASCII], $Vgv45dfhsyuhumch[ENC_C40], $Vgv45dfhsyuhumch[ENC_X12], $Vgv45dfhsyuhumch[ENC_EDF], $Vgv45dfhsyuhumch[ENC_BASE256]))) {
					return ENC_TXT;
				}
				if ($Vgv45dfhsyuhumch[ENC_X12] < ceil(min($Vgv45dfhsyuhumch[ENC_ASCII], $Vgv45dfhsyuhumch[ENC_C40], $Vgv45dfhsyuhumch[ENC_TXT], $Vgv45dfhsyuhumch[ENC_EDF], $Vgv45dfhsyuhumch[ENC_BASE256]))) {
					return ENC_X12;
				}
				return ENC_C40;
			}
			
			$Vwcmlurixvzghr = ord($Vmfvrsd5xyqh[$Vsjw1s1w2nqe + $Vwcmlurixvzgharscount]);
			$Vwcmlurixvzgharscount++;
			
			if ($this->isCharMode($Vwcmlurixvzghr, ENC_ASCII_NUM)) {
				$Vgv45dfhsyuhumch[ENC_ASCII] += (1 / 2);
			} elseif ($this->isCharMode($Vwcmlurixvzghr, ENC_ASCII_EXT)) {
				$Vgv45dfhsyuhumch[ENC_ASCII] = ceil($Vgv45dfhsyuhumch[ENC_ASCII]);
				$Vgv45dfhsyuhumch[ENC_ASCII] += 2;
			} else {
				$Vgv45dfhsyuhumch[ENC_ASCII] = ceil($Vgv45dfhsyuhumch[ENC_ASCII]);
				$Vgv45dfhsyuhumch[ENC_ASCII] += 1;
			}
			
			if ($this->isCharMode($Vwcmlurixvzghr, ENC_C40)) {
				$Vgv45dfhsyuhumch[ENC_C40] += (2 / 3);
			} elseif ($this->isCharMode($Vwcmlurixvzghr, ENC_ASCII_EXT)) {
				$Vgv45dfhsyuhumch[ENC_C40] += (8 / 3);
			} else {
				$Vgv45dfhsyuhumch[ENC_C40] += (4 / 3);
			}
			
			if ($this->isCharMode($Vwcmlurixvzghr, ENC_TXT)) {
				$Vgv45dfhsyuhumch[ENC_TXT] += (2 / 3);
			} elseif ($this->isCharMode($Vwcmlurixvzghr, ENC_ASCII_EXT)) {
				$Vgv45dfhsyuhumch[ENC_TXT] += (8 / 3);
			} else {
				$Vgv45dfhsyuhumch[ENC_TXT] += (4 / 3);
			}
			
			if ($this->isCharMode($Vwcmlurixvzghr, ENC_X12) OR $this->isCharMode($Vwcmlurixvzghr, ENC_C40)) {
				$Vgv45dfhsyuhumch[ENC_X12] += (2 / 3);
			} elseif ($this->isCharMode($Vwcmlurixvzghr, ENC_ASCII_EXT)) {
				$Vgv45dfhsyuhumch[ENC_X12] += (13 / 3);
			} else {
				$Vgv45dfhsyuhumch[ENC_X12] += (10 / 3);
			}
			
			if ($this->isCharMode($Vwcmlurixvzghr, ENC_EDF)) {
				$Vgv45dfhsyuhumch[ENC_EDF] += (3 / 4);
			} elseif ($this->isCharMode($Vwcmlurixvzghr, ENC_ASCII_EXT)) {
				$Vgv45dfhsyuhumch[ENC_EDF] += (17 / 4);
			} else {
				$Vgv45dfhsyuhumch[ENC_EDF] += (13 / 4);
			}
			
			if ($this->isCharMode($Vwcmlurixvzghr, ENC_BASE256)) {
				$Vgv45dfhsyuhumch[ENC_BASE256] += 4;
			} else {
				$Vgv45dfhsyuhumch[ENC_BASE256] += 1;
			}
			
			if ($Vwcmlurixvzgharscount >= 4) {
				if (($Vgv45dfhsyuhumch[ENC_ASCII] + 1) <= min($Vgv45dfhsyuhumch[ENC_C40], $Vgv45dfhsyuhumch[ENC_TXT], $Vgv45dfhsyuhumch[ENC_X12], $Vgv45dfhsyuhumch[ENC_EDF], $Vgv45dfhsyuhumch[ENC_BASE256])) {
					return ENC_ASCII;
				}
				if ((($Vgv45dfhsyuhumch[ENC_BASE256] + 1) <= $Vgv45dfhsyuhumch[ENC_ASCII])
					OR (($Vgv45dfhsyuhumch[ENC_BASE256] + 1) < min($Vgv45dfhsyuhumch[ENC_C40], $Vgv45dfhsyuhumch[ENC_TXT], $Vgv45dfhsyuhumch[ENC_X12], $Vgv45dfhsyuhumch[ENC_EDF]))) {
					return ENC_BASE256;
				}
				if (($Vgv45dfhsyuhumch[ENC_EDF] + 1) < min($Vgv45dfhsyuhumch[ENC_ASCII], $Vgv45dfhsyuhumch[ENC_C40], $Vgv45dfhsyuhumch[ENC_TXT], $Vgv45dfhsyuhumch[ENC_X12], $Vgv45dfhsyuhumch[ENC_BASE256])) {
					return ENC_EDF;
				}
				if (($Vgv45dfhsyuhumch[ENC_TXT] + 1) < min($Vgv45dfhsyuhumch[ENC_ASCII], $Vgv45dfhsyuhumch[ENC_C40], $Vgv45dfhsyuhumch[ENC_X12], $Vgv45dfhsyuhumch[ENC_EDF], $Vgv45dfhsyuhumch[ENC_BASE256])) {
					return ENC_TXT;
				}
				if (($Vgv45dfhsyuhumch[ENC_X12] + 1) < min($Vgv45dfhsyuhumch[ENC_ASCII], $Vgv45dfhsyuhumch[ENC_C40], $Vgv45dfhsyuhumch[ENC_TXT], $Vgv45dfhsyuhumch[ENC_EDF], $Vgv45dfhsyuhumch[ENC_BASE256])) {
					return ENC_X12;
				}
				if (($Vgv45dfhsyuhumch[ENC_C40] + 1) < min($Vgv45dfhsyuhumch[ENC_ASCII], $Vgv45dfhsyuhumch[ENC_TXT], $Vgv45dfhsyuhumch[ENC_EDF], $Vgv45dfhsyuhumch[ENC_BASE256])) {
					if ($Vgv45dfhsyuhumch[ENC_C40] < $Vgv45dfhsyuhumch[ENC_X12]) {
						return ENC_C40;
					}
					if ($Vgv45dfhsyuhumch[ENC_C40] == $Vgv45dfhsyuhumch[ENC_X12]) {
						$Vl0q4noiexi4 = ($Vsjw1s1w2nqe + $Vwcmlurixvzgharscount + 1);
						while ($Vl0q4noiexi4 < $Vmfvrsd5xyqh_length) {
							$V5hcw40y3ni3 = ord($Vmfvrsd5xyqh{$Vl0q4noiexi4});
							if ($this->isCharMode($V5hcw40y3ni3, ENC_X12)) {
								return ENC_X12;
							} elseif (!($this->isCharMode($V5hcw40y3ni3, ENC_X12) OR $this->isCharMode($V5hcw40y3ni3, ENC_C40))) {
								break;
							}
							++$Vl0q4noiexi4;
						}
						return ENC_C40;
					}
				}
			}
		} 
	}

	
	protected function getSwitchEncodingCodeword($V0vkydnx50wa) {
		switch ($V0vkydnx50wa) {
			case ENC_ASCII: { 
				$V5k0cete3fo0 = 254;
				if ($this->last_enc == ENC_EDF) {
					$V5k0cete3fo0 = 124;
				}
				break;
			}
			case ENC_C40: { 
				$V5k0cete3fo0 = 230;
				break;
			}
			case ENC_TXT: { 
				$V5k0cete3fo0 = 239;
				break;
			}
			case ENC_X12: { 
				$V5k0cete3fo0 = 238;
				break;
			}
			case ENC_EDF: { 
				$V5k0cete3fo0 = 240;
				break;
			}
			case ENC_BASE256: { 
				$V5k0cete3fo0 = 231;
				break;
			}
		}
		return $V5k0cete3fo0;
	}

	
	protected function getMaxDataCodewords($Vgv45dfhsyuhumcw) {
		foreach ($this->symbattr as $Vl0q4noiexi4ey => $Vaavawur03hj) {
			if ($Vaavawur03hj[11] >= $Vgv45dfhsyuhumcw) {
				return $Vaavawur03hj[11];
			}
		}
		return 0;
	}

	
	protected function getHighLevelEncoding($Vmfvrsd5xyqh) {
		
		$V4bajg5xhoka = ENC_ASCII; 
		$Vsjw1s1w2nqe = 0; 
		$V5k0cete3fo0 = array(); 
		$V5k0cete3fo0_num = 0; 
		$Vmfvrsd5xyqh_length = strlen($Vmfvrsd5xyqh); 
		while ($Vsjw1s1w2nqe < $Vmfvrsd5xyqh_length) {
			
			$this->last_enc = $V4bajg5xhoka;
			switch ($V4bajg5xhoka) {
				case ENC_ASCII: { 
					if (($Vmfvrsd5xyqh_length > 1) AND ($Vsjw1s1w2nqe < ($Vmfvrsd5xyqh_length - 1)) AND ($this->isCharMode(ord($Vmfvrsd5xyqh[$Vsjw1s1w2nqe]), ENC_ASCII_NUM) AND $this->isCharMode(ord($Vmfvrsd5xyqh[$Vsjw1s1w2nqe + 1]), ENC_ASCII_NUM))) {
						
						$V5k0cete3fo0[] = (intval(substr($Vmfvrsd5xyqh, $Vsjw1s1w2nqe, 2)) + 130);
						++$V5k0cete3fo0_num;
						$Vsjw1s1w2nqe += 2;
					} else {
						
						$Vgv45dfhsyuhewenc = $this->lookAheadTest($Vmfvrsd5xyqh, $Vsjw1s1w2nqe, $V4bajg5xhoka);
						if ($Vgv45dfhsyuhewenc != $V4bajg5xhoka) {
							
							$V4bajg5xhoka = $Vgv45dfhsyuhewenc;
							$V5k0cete3fo0[] = $this->getSwitchEncodingCodeword($V4bajg5xhoka);
							++$V5k0cete3fo0_num;
						} else {
							
							$Vwcmlurixvzghr = ord($Vmfvrsd5xyqh[$Vsjw1s1w2nqe]);
							++$Vsjw1s1w2nqe;
							if ($this->isCharMode($Vwcmlurixvzghr, ENC_ASCII_EXT)) {
								
								$V5k0cete3fo0[] = 235;
								$V5k0cete3fo0[] = ($Vwcmlurixvzghr - 127);
								$V5k0cete3fo0_num += 2;
							} else {
								
								$V5k0cete3fo0[] = ($Vwcmlurixvzghr + 1);
								++$V5k0cete3fo0_num;
							}
						}
					}
					break;
				}
				case ENC_C40 :   
				case ENC_TXT :   
				case ENC_X12 : { 
					$Vsj2wscixkzm = array();
					$V1yuhsvbtlvr = 0;
					$Vxtjhlvbya23 = $Vsjw1s1w2nqe;
					
					$Vruxws4qks3z = $this->chset_id[$V4bajg5xhoka];
					
					$Vwcmlurixvzgharset = $this->chset[$Vruxws4qks3z];
					do {
						
						$Vwcmlurixvzghr = ord($Vmfvrsd5xyqh[$Vxtjhlvbya23]);
						++$Vxtjhlvbya23;
						
						if ($Vwcmlurixvzghr & 0x80) {
							if ($V4bajg5xhoka == ENC_X12) {
								return false;
							}
							$Vwcmlurixvzghr = ($Vwcmlurixvzghr & 0x7f);
							$Vsj2wscixkzm[] = 1; 
							$Vsj2wscixkzm[] = 30; 
							$V1yuhsvbtlvr += 2;
						}
						if (isset($Vwcmlurixvzgharset[$Vwcmlurixvzghr])) {
							$Vsj2wscixkzm[] = $Vwcmlurixvzgharset[$Vwcmlurixvzghr];
							++$V1yuhsvbtlvr;
						} else {
							if (isset($this->chset['SH1'][$Vwcmlurixvzghr])) {
								$Vsj2wscixkzm[] = 0; 
								$V11t35ta5oal = $this->chset['SH1'];
							} elseif (isset($Vwcmlurixvzghr, $this->chset['SH2'][$Vwcmlurixvzghr])) {
								$Vsj2wscixkzm[] = 1; 
								$V11t35ta5oal = $this->chset['SH2'];
							} elseif (($V4bajg5xhoka == ENC_C40) AND isset($this->chset['S3C'][$Vwcmlurixvzghr])) {
								$Vsj2wscixkzm[] = 2; 
								$V11t35ta5oal = $this->chset['S3C'];
							} elseif (($V4bajg5xhoka == ENC_TXT) AND isset($this->chset['S3T'][$Vwcmlurixvzghr])) {
								$Vsj2wscixkzm[] = 2; 
								$V11t35ta5oal = $this->chset['S3T'];
							} else {
								return false;
							}
							$Vsj2wscixkzm[] = $V11t35ta5oal[$Vwcmlurixvzghr];
							$V1yuhsvbtlvr += 2;
						}
						if ($V1yuhsvbtlvr >= 3) {
							$Vwcmlurixvzg1 = array_shift($Vsj2wscixkzm);
							$Vwcmlurixvzg2 = array_shift($Vsj2wscixkzm);
							$Vwcmlurixvzg3 = array_shift($Vsj2wscixkzm);
							$V1yuhsvbtlvr -= 3;
							$V3p0tae11ldw = ((1600 * $Vwcmlurixvzg1) + (40 * $Vwcmlurixvzg2) + $Vwcmlurixvzg3 + 1);
							$V5k0cete3fo0[] = ($V3p0tae11ldw >> 8);
							$V5k0cete3fo0[] = ($V3p0tae11ldw % 256);
							$V5k0cete3fo0_num += 2;
							$Vsjw1s1w2nqe = $Vxtjhlvbya23;
							
							$Vgv45dfhsyuhewenc = $this->lookAheadTest($Vmfvrsd5xyqh, $Vsjw1s1w2nqe, $V4bajg5xhoka);
							if ($Vgv45dfhsyuhewenc != $V4bajg5xhoka) {
								
								$V4bajg5xhoka = $Vgv45dfhsyuhewenc;
								if ($V4bajg5xhoka != ENC_ASCII) {
									
									$V5k0cete3fo0[] = $this->getSwitchEncodingCodeword(ENC_ASCII);
									++$V5k0cete3fo0_num;
								}
								$V5k0cete3fo0[] = $this->getSwitchEncodingCodeword($V4bajg5xhoka);
								++$V5k0cete3fo0_num;
								$Vsjw1s1w2nqe -= $V1yuhsvbtlvr;
								$V1yuhsvbtlvr = 0;
								break;
							}
						}
					} while (($V1yuhsvbtlvr > 0) AND ($Vxtjhlvbya23 < $Vmfvrsd5xyqh_length));
					
					if ($V1yuhsvbtlvr > 0) {
						
						$V5k0cete3fo0r = ($this->getMaxDataCodewords($V5k0cete3fo0_num) - $V5k0cete3fo0_num);
						if (($V5k0cete3fo0r == 1) AND ($V1yuhsvbtlvr == 1)) {
							
							$Vwcmlurixvzg1 = array_shift($Vsj2wscixkzm);
							--$V1yuhsvbtlvr;
							$V5k0cete3fo0[] = ($Vwcmlurixvzghr + 1);
							++$V5k0cete3fo0_num;
							$Vsjw1s1w2nqe = $Vxtjhlvbya23;
							$V4bajg5xhoka = ENC_ASCII;
							$this->last_enc = $V4bajg5xhoka;
						} elseif (($V5k0cete3fo0r == 2) AND ($V1yuhsvbtlvr == 1)) {
							
							$Vwcmlurixvzg1 = array_shift($Vsj2wscixkzm);
							--$V1yuhsvbtlvr;
							$V5k0cete3fo0[] = 254;
							$V5k0cete3fo0[] = ($Vwcmlurixvzghr + 1);
							$V5k0cete3fo0_num += 2;
							$Vsjw1s1w2nqe = $Vxtjhlvbya23;
							$V4bajg5xhoka = ENC_ASCII;
							$this->last_enc = $V4bajg5xhoka;
						} elseif (($V5k0cete3fo0r == 2) AND ($V1yuhsvbtlvr == 2)) {
							
							$Vwcmlurixvzg1 = array_shift($Vsj2wscixkzm);
							$Vwcmlurixvzg2 = array_shift($Vsj2wscixkzm);
							$V1yuhsvbtlvr -= 2;
							$V3p0tae11ldw = ((1600 * $Vwcmlurixvzg1) + (40 * $Vwcmlurixvzg2) + 1);
							$V5k0cete3fo0[] = ($V3p0tae11ldw >> 8);
							$V5k0cete3fo0[] = ($V3p0tae11ldw % 256);
							$V5k0cete3fo0_num += 2;
							$Vsjw1s1w2nqe = $Vxtjhlvbya23;
							$V4bajg5xhoka = ENC_ASCII;
							$this->last_enc = $V4bajg5xhoka;
						} else {
							
							if ($V4bajg5xhoka != ENC_ASCII) {
								$V4bajg5xhoka = ENC_ASCII;
								$this->last_enc = $V4bajg5xhoka;
								$V5k0cete3fo0[] = $this->getSwitchEncodingCodeword($V4bajg5xhoka);
								++$V5k0cete3fo0_num;
								$Vsjw1s1w2nqe = ($Vxtjhlvbya23 - $V1yuhsvbtlvr);
							}
						}
					}
					break;
				}
				case ENC_EDF: { 
					
					$Vsj2wscixkzm = array();
					$Vxtjhlvbya23 = $Vsjw1s1w2nqe;
					$Vo0sgo52vm0b = 0;
					$Vgv45dfhsyuhewenc = $V4bajg5xhoka;
					do {
						
						$Vwcmlurixvzghr = ord($Vmfvrsd5xyqh[$Vxtjhlvbya23]);
						if ($this->isCharMode($Vwcmlurixvzghr, ENC_EDF)) {
							++$Vxtjhlvbya23;
							$Vsj2wscixkzm[] = $Vwcmlurixvzghr;
							++$Vo0sgo52vm0b;
						}
						if (($Vo0sgo52vm0b == 4) OR ($Vxtjhlvbya23 == $Vmfvrsd5xyqh_length) OR !$this->isCharMode($Vwcmlurixvzghr, ENC_EDF)) {
							if (($Vxtjhlvbya23 == $Vmfvrsd5xyqh_length) AND ($Vo0sgo52vm0b < 3)) {
								$V4bajg5xhoka = ENC_ASCII;
								$V5k0cete3fo0[] = $this->getSwitchEncodingCodeword($V4bajg5xhoka);
								++$V5k0cete3fo0_num;
								break;
							}
							if ($Vo0sgo52vm0b < 4) {
								
								$Vsj2wscixkzm[] = 0x1f;
								++$Vo0sgo52vm0b;
								
								for ($V55vc4mewy5w = $Vo0sgo52vm0b; $V55vc4mewy5w < 4; ++$V55vc4mewy5w) {
									$Vsj2wscixkzm[] = 0;
								}
								$V4bajg5xhoka = ENC_ASCII;
								$this->last_enc = $V4bajg5xhoka;
							}
							
							$Vvo4kwth4r2o = (($Vsj2wscixkzm[0] & 0x3F) << 2) + (($Vsj2wscixkzm[1] & 0x30) >> 4);
							if ($Vvo4kwth4r2o > 0) {
								$V5k0cete3fo0[] = $Vvo4kwth4r2o;
								$V5k0cete3fo0_num++;
							}
							$Vvo4kwth4r2o= (($Vsj2wscixkzm[1] & 0x0F) << 4) + (($Vsj2wscixkzm[2] & 0x3C) >> 2);
							if ($Vvo4kwth4r2o > 0) {
								$V5k0cete3fo0[] = $Vvo4kwth4r2o;
								$V5k0cete3fo0_num++;
							}
							$Vvo4kwth4r2o = (($Vsj2wscixkzm[2] & 0x03) << 6) + ($Vsj2wscixkzm[3] & 0x3F);
							if ($Vvo4kwth4r2o > 0) {
								$V5k0cete3fo0[] = $Vvo4kwth4r2o;
								$V5k0cete3fo0_num++;
							}
							$Vsj2wscixkzm = array();
							$Vsjw1s1w2nqe = $Vxtjhlvbya23;
							$Vo0sgo52vm0b = 0;
							if ($V4bajg5xhoka == ENC_ASCII) {
								break; 
							}
						}
					} while ($Vxtjhlvbya23 < $Vmfvrsd5xyqh_length);
					break;
				}
				case ENC_BASE256: { 
					
					$Vsj2wscixkzm = array();
					$Vo0sgo52vm0b = 0;
					while (($Vsjw1s1w2nqe < $Vmfvrsd5xyqh_length) AND ($Vo0sgo52vm0b <= 1555)) {
						$Vgv45dfhsyuhewenc = $this->lookAheadTest($Vmfvrsd5xyqh, $Vsjw1s1w2nqe, $V4bajg5xhoka);
						if ($Vgv45dfhsyuhewenc != $V4bajg5xhoka) {
							
							$V4bajg5xhoka = $Vgv45dfhsyuhewenc;
							break; 
						} else {
							
							$Vwcmlurixvzghr = ord($Vmfvrsd5xyqh[$Vsjw1s1w2nqe]);
							++$Vsjw1s1w2nqe;
							$Vsj2wscixkzm[] = $Vwcmlurixvzghr;
							++$Vo0sgo52vm0b;
						}
					}
					
					if ($Vo0sgo52vm0b <= 249) {
						$V5k0cete3fo0[] = $this->get255StateCodeword($Vo0sgo52vm0b, ($V5k0cete3fo0_num + 1));
						++$V5k0cete3fo0_num;
					} else {
						$V5k0cete3fo0[] = $this->get255StateCodeword((floor($Vo0sgo52vm0b / 250) + 249), ($V5k0cete3fo0_num + 1));
						$V5k0cete3fo0[] = $this->get255StateCodeword(($Vo0sgo52vm0b % 250), ($V5k0cete3fo0_num + 2));
						$V5k0cete3fo0_num += 2;
					}
					if (!empty($Vsj2wscixkzm)) {
						
						foreach ($Vsj2wscixkzm as $V1yuhsvbtlvr => $Vwcmlurixvzght) {
							$V5k0cete3fo0[] = $this->get255StateCodeword($Vwcmlurixvzght, ($V5k0cete3fo0_num + $V1yuhsvbtlvr + 1));
						}
					}
					break;
				}
			} 
		} 
		return $V5k0cete3fo0;
	}

	
	protected function placeModule($Vhovaaabktuu, $Vgv45dfhsyuhrow, $Vyjzfymh0lguol, $Vfhkt4vbeualow, $Vwcmlurixvzgol, $Vwcmlurixvzghr, $Vpq3acakq35cit) {
		if ($Vfhkt4vbeualow < 0) {
			$Vfhkt4vbeualow += $Vgv45dfhsyuhrow;
			$Vwcmlurixvzgol += (4 - (($Vgv45dfhsyuhrow + 4) % 8));
		}
		if ($Vwcmlurixvzgol < 0) {
			$Vwcmlurixvzgol += $Vyjzfymh0lguol;
			$Vfhkt4vbeualow += (4 - (($Vyjzfymh0lguol + 4) % 8));
		}
		$Vhovaaabktuu[(($Vfhkt4vbeualow * $Vyjzfymh0lguol) + $Vwcmlurixvzgol)] = ((10 * $Vwcmlurixvzghr) + $Vpq3acakq35cit);
		return $Vhovaaabktuu;
	}

	
	protected function placeUtah($Vhovaaabktuu, $Vgv45dfhsyuhrow, $Vyjzfymh0lguol, $Vfhkt4vbeualow, $Vwcmlurixvzgol, $Vwcmlurixvzghr) {
		$Vhovaaabktuu = $this->placeModule($Vhovaaabktuu, $Vgv45dfhsyuhrow, $Vyjzfymh0lguol, $Vfhkt4vbeualow-2, $Vwcmlurixvzgol-2, $Vwcmlurixvzghr, 1);
		$Vhovaaabktuu = $this->placeModule($Vhovaaabktuu, $Vgv45dfhsyuhrow, $Vyjzfymh0lguol, $Vfhkt4vbeualow-2, $Vwcmlurixvzgol-1, $Vwcmlurixvzghr, 2);
		$Vhovaaabktuu = $this->placeModule($Vhovaaabktuu, $Vgv45dfhsyuhrow, $Vyjzfymh0lguol, $Vfhkt4vbeualow-1, $Vwcmlurixvzgol-2, $Vwcmlurixvzghr, 3);
		$Vhovaaabktuu = $this->placeModule($Vhovaaabktuu, $Vgv45dfhsyuhrow, $Vyjzfymh0lguol, $Vfhkt4vbeualow-1, $Vwcmlurixvzgol-1, $Vwcmlurixvzghr, 4);
		$Vhovaaabktuu = $this->placeModule($Vhovaaabktuu, $Vgv45dfhsyuhrow, $Vyjzfymh0lguol, $Vfhkt4vbeualow-1, $Vwcmlurixvzgol,   $Vwcmlurixvzghr, 5);
		$Vhovaaabktuu = $this->placeModule($Vhovaaabktuu, $Vgv45dfhsyuhrow, $Vyjzfymh0lguol, $Vfhkt4vbeualow,   $Vwcmlurixvzgol-2, $Vwcmlurixvzghr, 6);
		$Vhovaaabktuu = $this->placeModule($Vhovaaabktuu, $Vgv45dfhsyuhrow, $Vyjzfymh0lguol, $Vfhkt4vbeualow,   $Vwcmlurixvzgol-1, $Vwcmlurixvzghr, 7);
		$Vhovaaabktuu = $this->placeModule($Vhovaaabktuu, $Vgv45dfhsyuhrow, $Vyjzfymh0lguol, $Vfhkt4vbeualow,   $Vwcmlurixvzgol,   $Vwcmlurixvzghr, 8);
		return $Vhovaaabktuu;
	}

	
	protected function placeCornerA($Vhovaaabktuu, $Vgv45dfhsyuhrow, $Vyjzfymh0lguol, $Vwcmlurixvzghr) {
		$Vhovaaabktuu = $this->placeModule($Vhovaaabktuu, $Vgv45dfhsyuhrow, $Vyjzfymh0lguol, $Vgv45dfhsyuhrow-1, 0,       $Vwcmlurixvzghr, 1);
		$Vhovaaabktuu = $this->placeModule($Vhovaaabktuu, $Vgv45dfhsyuhrow, $Vyjzfymh0lguol, $Vgv45dfhsyuhrow-1, 1,       $Vwcmlurixvzghr, 2);
		$Vhovaaabktuu = $this->placeModule($Vhovaaabktuu, $Vgv45dfhsyuhrow, $Vyjzfymh0lguol, $Vgv45dfhsyuhrow-1, 2,       $Vwcmlurixvzghr, 3);
		$Vhovaaabktuu = $this->placeModule($Vhovaaabktuu, $Vgv45dfhsyuhrow, $Vyjzfymh0lguol, 0,       $Vyjzfymh0lguol-2, $Vwcmlurixvzghr, 4);
		$Vhovaaabktuu = $this->placeModule($Vhovaaabktuu, $Vgv45dfhsyuhrow, $Vyjzfymh0lguol, 0,       $Vyjzfymh0lguol-1, $Vwcmlurixvzghr, 5);
		$Vhovaaabktuu = $this->placeModule($Vhovaaabktuu, $Vgv45dfhsyuhrow, $Vyjzfymh0lguol, 1,       $Vyjzfymh0lguol-1, $Vwcmlurixvzghr, 6);
		$Vhovaaabktuu = $this->placeModule($Vhovaaabktuu, $Vgv45dfhsyuhrow, $Vyjzfymh0lguol, 2,       $Vyjzfymh0lguol-1, $Vwcmlurixvzghr, 7);
		$Vhovaaabktuu = $this->placeModule($Vhovaaabktuu, $Vgv45dfhsyuhrow, $Vyjzfymh0lguol, 3,       $Vyjzfymh0lguol-1, $Vwcmlurixvzghr, 8);
		return $Vhovaaabktuu;
	}

	
	protected function placeCornerB($Vhovaaabktuu, $Vgv45dfhsyuhrow, $Vyjzfymh0lguol, $Vwcmlurixvzghr) {
		$Vhovaaabktuu = $this->placeModule($Vhovaaabktuu, $Vgv45dfhsyuhrow, $Vyjzfymh0lguol, $Vgv45dfhsyuhrow-3, 0,       $Vwcmlurixvzghr, 1);
		$Vhovaaabktuu = $this->placeModule($Vhovaaabktuu, $Vgv45dfhsyuhrow, $Vyjzfymh0lguol, $Vgv45dfhsyuhrow-2, 0,       $Vwcmlurixvzghr, 2);
		$Vhovaaabktuu = $this->placeModule($Vhovaaabktuu, $Vgv45dfhsyuhrow, $Vyjzfymh0lguol, $Vgv45dfhsyuhrow-1, 0,       $Vwcmlurixvzghr, 3);
		$Vhovaaabktuu = $this->placeModule($Vhovaaabktuu, $Vgv45dfhsyuhrow, $Vyjzfymh0lguol, 0,       $Vyjzfymh0lguol-4, $Vwcmlurixvzghr, 4);
		$Vhovaaabktuu = $this->placeModule($Vhovaaabktuu, $Vgv45dfhsyuhrow, $Vyjzfymh0lguol, 0,       $Vyjzfymh0lguol-3, $Vwcmlurixvzghr, 5);
		$Vhovaaabktuu = $this->placeModule($Vhovaaabktuu, $Vgv45dfhsyuhrow, $Vyjzfymh0lguol, 0,       $Vyjzfymh0lguol-2, $Vwcmlurixvzghr, 6);
		$Vhovaaabktuu = $this->placeModule($Vhovaaabktuu, $Vgv45dfhsyuhrow, $Vyjzfymh0lguol, 0,       $Vyjzfymh0lguol-1, $Vwcmlurixvzghr, 7);
		$Vhovaaabktuu = $this->placeModule($Vhovaaabktuu, $Vgv45dfhsyuhrow, $Vyjzfymh0lguol, 1,       $Vyjzfymh0lguol-1, $Vwcmlurixvzghr, 8);
		return $Vhovaaabktuu;
	}

	
	protected function placeCornerC($Vhovaaabktuu, $Vgv45dfhsyuhrow, $Vyjzfymh0lguol, $Vwcmlurixvzghr) {
		$Vhovaaabktuu = $this->placeModule($Vhovaaabktuu, $Vgv45dfhsyuhrow, $Vyjzfymh0lguol, $Vgv45dfhsyuhrow-3, 0,       $Vwcmlurixvzghr, 1);
		$Vhovaaabktuu = $this->placeModule($Vhovaaabktuu, $Vgv45dfhsyuhrow, $Vyjzfymh0lguol, $Vgv45dfhsyuhrow-2, 0,       $Vwcmlurixvzghr, 2);
		$Vhovaaabktuu = $this->placeModule($Vhovaaabktuu, $Vgv45dfhsyuhrow, $Vyjzfymh0lguol, $Vgv45dfhsyuhrow-1, 0,       $Vwcmlurixvzghr, 3);
		$Vhovaaabktuu = $this->placeModule($Vhovaaabktuu, $Vgv45dfhsyuhrow, $Vyjzfymh0lguol, 0,       $Vyjzfymh0lguol-2, $Vwcmlurixvzghr, 4);
		$Vhovaaabktuu = $this->placeModule($Vhovaaabktuu, $Vgv45dfhsyuhrow, $Vyjzfymh0lguol, 0,       $Vyjzfymh0lguol-1, $Vwcmlurixvzghr, 5);
		$Vhovaaabktuu = $this->placeModule($Vhovaaabktuu, $Vgv45dfhsyuhrow, $Vyjzfymh0lguol, 1,       $Vyjzfymh0lguol-1, $Vwcmlurixvzghr, 6);
		$Vhovaaabktuu = $this->placeModule($Vhovaaabktuu, $Vgv45dfhsyuhrow, $Vyjzfymh0lguol, 2,       $Vyjzfymh0lguol-1, $Vwcmlurixvzghr, 7);
		$Vhovaaabktuu = $this->placeModule($Vhovaaabktuu, $Vgv45dfhsyuhrow, $Vyjzfymh0lguol, 3,       $Vyjzfymh0lguol-1, $Vwcmlurixvzghr, 8);
		return $Vhovaaabktuu;
	}

	
	protected function placeCornerD($Vhovaaabktuu, $Vgv45dfhsyuhrow, $Vyjzfymh0lguol, $Vwcmlurixvzghr) {
		$Vhovaaabktuu = $this->placeModule($Vhovaaabktuu, $Vgv45dfhsyuhrow, $Vyjzfymh0lguol, $Vgv45dfhsyuhrow-1, 0,       $Vwcmlurixvzghr, 1);
		$Vhovaaabktuu = $this->placeModule($Vhovaaabktuu, $Vgv45dfhsyuhrow, $Vyjzfymh0lguol, $Vgv45dfhsyuhrow-1, $Vyjzfymh0lguol-1, $Vwcmlurixvzghr, 2);
		$Vhovaaabktuu = $this->placeModule($Vhovaaabktuu, $Vgv45dfhsyuhrow, $Vyjzfymh0lguol, 0,       $Vyjzfymh0lguol-3, $Vwcmlurixvzghr, 3);
		$Vhovaaabktuu = $this->placeModule($Vhovaaabktuu, $Vgv45dfhsyuhrow, $Vyjzfymh0lguol, 0,       $Vyjzfymh0lguol-2, $Vwcmlurixvzghr, 4);
		$Vhovaaabktuu = $this->placeModule($Vhovaaabktuu, $Vgv45dfhsyuhrow, $Vyjzfymh0lguol, 0,       $Vyjzfymh0lguol-1, $Vwcmlurixvzghr, 5);
		$Vhovaaabktuu = $this->placeModule($Vhovaaabktuu, $Vgv45dfhsyuhrow, $Vyjzfymh0lguol, 1,       $Vyjzfymh0lguol-3, $Vwcmlurixvzghr, 6);
		$Vhovaaabktuu = $this->placeModule($Vhovaaabktuu, $Vgv45dfhsyuhrow, $Vyjzfymh0lguol, 1,       $Vyjzfymh0lguol-2, $Vwcmlurixvzghr, 7);
		$Vhovaaabktuu = $this->placeModule($Vhovaaabktuu, $Vgv45dfhsyuhrow, $Vyjzfymh0lguol, 1,       $Vyjzfymh0lguol-1, $Vwcmlurixvzghr, 8);
		return $Vhovaaabktuu;
	}

	
	protected function getPlacementMap($Vgv45dfhsyuhrow, $Vyjzfymh0lguol) {
		
		$Vhovaaabktuu = array_fill(0, ($Vgv45dfhsyuhrow * $Vyjzfymh0lguol), 0);
		
		$Vwcmlurixvzghr = 1;
		$Vfhkt4vbeualow = 4;
		$Vwcmlurixvzgol = 0;
		do {
			
			if (($Vfhkt4vbeualow == $Vgv45dfhsyuhrow) AND ($Vwcmlurixvzgol == 0)) {
				$Vhovaaabktuu = $this->placeCornerA($Vhovaaabktuu, $Vgv45dfhsyuhrow, $Vyjzfymh0lguol, $Vwcmlurixvzghr);
				++$Vwcmlurixvzghr;
			}
			if (($Vfhkt4vbeualow == ($Vgv45dfhsyuhrow - 2)) AND ($Vwcmlurixvzgol == 0) AND ($Vyjzfymh0lguol % 4)) {
				$Vhovaaabktuu = $this->placeCornerB($Vhovaaabktuu, $Vgv45dfhsyuhrow, $Vyjzfymh0lguol, $Vwcmlurixvzghr);
				++$Vwcmlurixvzghr;
			}
			if (($Vfhkt4vbeualow == ($Vgv45dfhsyuhrow - 2)) AND ($Vwcmlurixvzgol == 0) AND (($Vyjzfymh0lguol % 8) == 4)) {
				$Vhovaaabktuu = $this->placeCornerC($Vhovaaabktuu, $Vgv45dfhsyuhrow, $Vyjzfymh0lguol, $Vwcmlurixvzghr);
				++$Vwcmlurixvzghr;
			}
			if (($Vfhkt4vbeualow == ($Vgv45dfhsyuhrow + 4)) AND ($Vwcmlurixvzgol == 2) AND (!($Vyjzfymh0lguol % 8))) {
				$Vhovaaabktuu = $this->placeCornerD($Vhovaaabktuu, $Vgv45dfhsyuhrow, $Vyjzfymh0lguol, $Vwcmlurixvzghr);
				++$Vwcmlurixvzghr;
			}
			
			do {
				if (($Vfhkt4vbeualow < $Vgv45dfhsyuhrow) AND ($Vwcmlurixvzgol >= 0) AND (!$Vhovaaabktuu[(($Vfhkt4vbeualow * $Vyjzfymh0lguol) + $Vwcmlurixvzgol)])) {
					$Vhovaaabktuu = $this->placeUtah($Vhovaaabktuu, $Vgv45dfhsyuhrow, $Vyjzfymh0lguol, $Vfhkt4vbeualow, $Vwcmlurixvzgol, $Vwcmlurixvzghr);
					++$Vwcmlurixvzghr;
				}
				$Vfhkt4vbeualow -= 2;
				$Vwcmlurixvzgol += 2;
			} while (($Vfhkt4vbeualow >= 0) AND ($Vwcmlurixvzgol < $Vyjzfymh0lguol));
			++$Vfhkt4vbeualow;
			$Vwcmlurixvzgol += 3;
			
			do {
				if (($Vfhkt4vbeualow >= 0) AND ($Vwcmlurixvzgol < $Vyjzfymh0lguol) AND (!$Vhovaaabktuu[(($Vfhkt4vbeualow * $Vyjzfymh0lguol) + $Vwcmlurixvzgol)])) {
					$Vhovaaabktuu = $this->placeUtah($Vhovaaabktuu, $Vgv45dfhsyuhrow, $Vyjzfymh0lguol, $Vfhkt4vbeualow, $Vwcmlurixvzgol, $Vwcmlurixvzghr);
					++$Vwcmlurixvzghr;
				}
				$Vfhkt4vbeualow += 2;
				$Vwcmlurixvzgol -= 2;
			} while (($Vfhkt4vbeualow < $Vgv45dfhsyuhrow) AND ($Vwcmlurixvzgol >= 0));
			$Vfhkt4vbeualow += 3;
			++$Vwcmlurixvzgol;
			
		} while (($Vfhkt4vbeualow < $Vgv45dfhsyuhrow) OR ($Vwcmlurixvzgol < $Vyjzfymh0lguol));
		
		if (!$Vhovaaabktuu[(($Vgv45dfhsyuhrow * $Vyjzfymh0lguol) - 1)]) {
			$Vhovaaabktuu[(($Vgv45dfhsyuhrow * $Vyjzfymh0lguol) - 1)] = 1;
			$Vhovaaabktuu[(($Vgv45dfhsyuhrow * $Vyjzfymh0lguol) - $Vyjzfymh0lguol - 2)] = 1;
		}
		return $Vhovaaabktuu;
	}

} 



