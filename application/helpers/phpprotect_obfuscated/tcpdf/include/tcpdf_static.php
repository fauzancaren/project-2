<?php





































class TCPDF_STATIC {

	
	private static $Vqnw2slrhkkg = '6.2.12';

	
	public static $Vqr3fchs513s = '{:ptp:}';

	
	public static $Vsxddcw1unwf = '{:pnp:}';

	
	public static $Vzleyxvfyi11 = '{:ptg:}';

	
	public static $Vebszmg0r3dg = '{:png:}';

	
	public static $V2bz4tdwg22b = '{rsc:';

	
	public static $V2hmhox1wqhi = "\x28\xBF\x4E\x5E\x4E\x75\x8A\x41\x64\x00\x4E\x56\xFF\xFA\x01\x08\x2E\x2E\x00\xB6\xD0\x68\x3E\x80\x2F\x0C\xA9\xFE\x64\x53\x69\x7A";

	
	public static $Vvj3oceqdncu = '/ByteRange[0 ********** ********** **********]';

	
	public static $Vm4miyzphulz = array('MediaBox', 'CropBox', 'BleedBox', 'TrimBox', 'ArtBox');

	

	
	public static function getTCPDFVersion() {
		return self::$Vqnw2slrhkkg;
	}

	
	public static function getTCPDFProducer() {
		return "\x54\x43\x50\x44\x46\x20".self::getTCPDFVersion()."\x20\x28\x68\x74\x74\x70\x3a\x2f\x2f\x77\x77\x77\x2e\x74\x63\x70\x64\x66\x2e\x6f\x72\x67\x29";
	}

	
	public static function set_mqr($Vra0zos1hyyp) {
		if (!defined('PHP_VERSION_ID')) {
			$Vlqcgo2rcpui = PHP_VERSION;
			define('PHP_VERSION_ID', (($Vlqcgo2rcpui[0] * 10000) + ($Vlqcgo2rcpui[2] * 100) + $Vlqcgo2rcpui[4]));
		}
		if (PHP_VERSION_ID < 50300) {
			@set_magic_quotes_runtime($Vra0zos1hyyp);
		}
	}

	
	public static function get_mqr() {
		if (!defined('PHP_VERSION_ID')) {
			$Vlqcgo2rcpui = PHP_VERSION;
			define('PHP_VERSION_ID', (($Vlqcgo2rcpui[0] * 10000) + ($Vlqcgo2rcpui[2] * 100) + $Vlqcgo2rcpui[4]));
		}
		if (PHP_VERSION_ID < 50300) {
			return @get_magic_quotes_runtime();
		}
		return 0;
	}

	
	public static function isValidURL($Vmte2zwu4czl) {
		$Vc4jb1uhxc53 = @get_headers($Vmte2zwu4czl);
    	return (strpos($Vc4jb1uhxc53[0], '200') !== false);
	}

	
	public static function removeSHY($Vg1d0vbcooi4='', $Vumhd4brlo0g=true) {
		$Vg1d0vbcooi4 = preg_replace('/([\\xc2]{1}[\\xad]{1})/', '', $Vg1d0vbcooi4);
		if (!$Vumhd4brlo0g) {
			$Vg1d0vbcooi4 = preg_replace('/([\\xad]{1})/', '', $Vg1d0vbcooi4);
		}
		return $Vg1d0vbcooi4;
	}


	
	public static function getBorderMode($Vthindvefylo, $V55bt0kysqpn='start', $Vlbinojvdc21=true) {
		if ((!$Vlbinojvdc21) OR empty($Vthindvefylo)) {
			return $Vthindvefylo;
		}
		if ($Vthindvefylo == 1) {
			$Vthindvefylo = 'LTRB';
		}
		if (is_string($Vthindvefylo)) {
			
			$Vlpifl4utijy = strlen($Vthindvefylo);
			$V210v21oajw0 = array();
			for ($V55vc4mewy5w = 0; $V55vc4mewy5w < $Vlpifl4utijy; ++$V55vc4mewy5w) {
				$V210v21oajw0[$Vthindvefylo[$V55vc4mewy5w]] = array('cap' => 'square', 'join' => 'miter');
			}
			$Vthindvefylo = $V210v21oajw0;
		}
		foreach ($Vthindvefylo as $Vgffhwoemo4c => $Vovexk3mzujo) {
			switch ($V55bt0kysqpn) {
				case 'start': {
					if (strpos($Vgffhwoemo4c, 'B') !== false) {
						
						$Vkjc5m51sv3l = str_replace('B', '', $Vgffhwoemo4c);
						if (strlen($Vkjc5m51sv3l) > 0) {
							$Vthindvefylo[$Vkjc5m51sv3l] = $Vovexk3mzujo;
						}
						unset($Vthindvefylo[$Vgffhwoemo4c]);
					}
					break;
				}
				case 'middle': {
					if (strpos($Vgffhwoemo4c, 'B') !== false) {
						
						$Vkjc5m51sv3l = str_replace('B', '', $Vgffhwoemo4c);
						if (strlen($Vkjc5m51sv3l) > 0) {
							$Vthindvefylo[$Vkjc5m51sv3l] = $Vovexk3mzujo;
						}
						unset($Vthindvefylo[$Vgffhwoemo4c]);
						$Vgffhwoemo4c = $Vkjc5m51sv3l;
					}
					if (strpos($Vgffhwoemo4c, 'T') !== false) {
						
						$Vkjc5m51sv3l = str_replace('T', '', $Vgffhwoemo4c);
						if (strlen($Vkjc5m51sv3l) > 0) {
							$Vthindvefylo[$Vkjc5m51sv3l] = $Vovexk3mzujo;
						}
						unset($Vthindvefylo[$Vgffhwoemo4c]);
					}
					break;
				}
				case 'end': {
					if (strpos($Vgffhwoemo4c, 'T') !== false) {
						
						$Vkjc5m51sv3l = str_replace('T', '', $Vgffhwoemo4c);
						if (strlen($Vkjc5m51sv3l) > 0) {
							$Vthindvefylo[$Vkjc5m51sv3l] = $Vovexk3mzujo;
						}
						unset($Vthindvefylo[$Vgffhwoemo4c]);
					}
					break;
				}
			}
		}
		return $Vthindvefylo;
	}

	
	public static function empty_string($Vdk4ylr1xvs5) {
		return (is_null($Vdk4ylr1xvs5) OR (is_string($Vdk4ylr1xvs5) AND (strlen($Vdk4ylr1xvs5) == 0)));
	}

	
	public static function getObjFilename($Vvmwm1jsklgc='tmp', $V4xjt304c50w='') {
		return tempnam(K_PATH_CACHE, '__tcpdf_'.$V4xjt304c50w.'_'.$Vvmwm1jsklgc.'_'.md5(TCPDF_STATIC::getRandomSeed()).'_');
	}

	
	public static function _escape($Vvt20qqut4bu) {
		
		return strtr($Vvt20qqut4bu, array(')' => '\\)', '(' => '\\(', '\\' => '\\\\', chr(13) => '\r'));
	}

	
	public static function _escapeXML($Vdk4ylr1xvs5) {
		$V4g1xwziakmj = array("\0" => '', '&' => '&amp;', '<' => '&lt;', '>' => '&gt;');
		$Vdk4ylr1xvs5 = strtr($Vdk4ylr1xvs5, $V4g1xwziakmj);
		return $Vdk4ylr1xvs5;
	}

	
	public static function objclone($Vjqcd42fvg5m) {
		if (($Vjqcd42fvg5m instanceof Imagick) AND (version_compare(phpversion('imagick'), '3.0.1') !== 1)) {
			
			return @$Vjqcd42fvg5m->clone();
		}
		return @clone($Vjqcd42fvg5m);
	}

	
	public static function sendOutputData($Vmfvrsd5xyqh, $Vqfuror45qjm) {
		if (!isset($_SERVER['HTTP_ACCEPT_ENCODING']) OR empty($_SERVER['HTTP_ACCEPT_ENCODING'])) {
			
			header('Content-Length: '.$Vqfuror45qjm);
		}
		echo $Vmfvrsd5xyqh;
	}

	
	public static function replacePageNumAliases($Vwfolue42pzj, $Vch1p1nsheoh, $Vsjpa44qmsau=0) {
		foreach ($Vch1p1nsheoh as $Vsnely5ct1zc) {
			foreach ($Vsnely5ct1zc[3] as $Vudz4oh4qiku) {
				if (strpos($Vwfolue42pzj, $Vudz4oh4qiku) !== false) {
					$Vwfolue42pzj = str_replace($Vudz4oh4qiku, $Vsnely5ct1zc[0], $Vwfolue42pzj);
					$Vsjpa44qmsau += ($Vsnely5ct1zc[2] - $Vsnely5ct1zc[1]);
				}
			}
		}
		return array($Vwfolue42pzj, $Vsjpa44qmsau);
	}

	
	public static function getTimestamp($Vajverddxnay) {
		if (($Vajverddxnay[0] == 'D') AND ($Vajverddxnay[1] == ':')) {
			
			$Vajverddxnay = substr($Vajverddxnay, 2);
		}
		return strtotime($Vajverddxnay);
	}

	
	public static function getFormattedDate($Vmgtcsdbxs1h) {
		return substr_replace(date('YmdHisO', intval($Vmgtcsdbxs1h)), '\'', (0 - 2), 0).'\'';
	}

	
	public static function getRandomSeed($Vvt20qqut4bueed='') {
		$Vdbtxmjq40yo = uniqid(rand().microtime(true), true);
		if (function_exists('posix_getpid')) {
			$Vdbtxmjq40yo .= posix_getpid();
		}
		if (function_exists('openssl_random_pseudo_bytes') AND (strtoupper(substr(PHP_OS, 0, 3)) !== 'WIN')) {
			
			$Vdbtxmjq40yo .= openssl_random_pseudo_bytes(512);
		} else {
			for ($V55vc4mewy5w = 0; $V55vc4mewy5w < 23; ++$V55vc4mewy5w) {
				$Vdbtxmjq40yo .= uniqid('', true);
			}
		}
		return $Vdbtxmjq40yo.$Vvt20qqut4bueed.__FILE__.serialize($_SERVER).microtime(true);
	}

	
	public static function _md5_16($Vdk4ylr1xvs5) {
		return pack('H*', md5($Vdk4ylr1xvs5));
	}

	
	public static function _AES($Vnogyg4rdwft, $Vdvjst2lzhef) {
		
		$Vtbdcorpf2kc = 16 - (strlen($Vdvjst2lzhef) % 16);
		$Vdvjst2lzhef .= str_repeat(chr($Vtbdcorpf2kc), $Vtbdcorpf2kc);
		if (extension_loaded('openssl')) {
			$V55vc4mewy5wv = openssl_random_pseudo_bytes (openssl_cipher_iv_length('aes-256-cbc'));
			$Vdvjst2lzhef = openssl_encrypt($Vdvjst2lzhef, 'aes-256-cbc', $Vnogyg4rdwft, OPENSSL_RAW_DATA, $V55vc4mewy5wv);
			return $V55vc4mewy5wv.substr($Vdvjst2lzhef, 0, -16);
		}
		$V55vc4mewy5wv = mcrypt_create_iv(mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC), MCRYPT_RAND);
		$Vdvjst2lzhef = mcrypt_encrypt(MCRYPT_RIJNDAEL_128, $Vnogyg4rdwft, $Vdvjst2lzhef, MCRYPT_MODE_CBC, $V55vc4mewy5wv);
		$Vdvjst2lzhef = $V55vc4mewy5wv.$Vdvjst2lzhef;
		return $Vdvjst2lzhef;
	}

	
	public static function _AESnopad($Vnogyg4rdwft, $Vdvjst2lzhef) {
		if (extension_loaded('openssl')) {
			$V55vc4mewy5wv = str_repeat("\x00", openssl_cipher_iv_length('aes-256-cbc'));
			$Vdvjst2lzhef = openssl_encrypt($Vdvjst2lzhef, 'aes-256-cbc', $Vnogyg4rdwft, OPENSSL_RAW_DATA, $V55vc4mewy5wv);
			return substr($Vdvjst2lzhef, 0, -16);
		}
		$V55vc4mewy5wv = str_repeat("\x00", mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC));
		$Vdvjst2lzhef = mcrypt_encrypt(MCRYPT_RIJNDAEL_128, $Vnogyg4rdwft, $Vdvjst2lzhef, MCRYPT_MODE_CBC, $V55vc4mewy5wv);
		return $Vdvjst2lzhef;
	}

	
	public static function _RC4($Vnogyg4rdwft, $Vdvjst2lzhef, &$V1z0ktzaeaog, &$V1z0ktzaeaog_c) {
		if (function_exists('mcrypt_encrypt') AND ($V4t5ynycapey = @mcrypt_encrypt(MCRYPT_ARCFOUR, $Vnogyg4rdwft, $Vdvjst2lzhef, MCRYPT_MODE_STREAM, ''))) {
			
			return $V4t5ynycapey;
		}
		if ($V1z0ktzaeaog != $Vnogyg4rdwft) {
			$Vl0q4noiexi4 = str_repeat($Vnogyg4rdwft, ((256 / strlen($Vnogyg4rdwft)) + 1));
			$V5bhfvj4vk5c = range(0, 255);
			$Vuaufi3la1vg = 0;
			for ($V55vc4mewy5w = 0; $V55vc4mewy5w < 256; ++$V55vc4mewy5w) {
				$Vnwufml5q3np = $V5bhfvj4vk5c[$V55vc4mewy5w];
				$Vuaufi3la1vg = ($Vuaufi3la1vg + $Vnwufml5q3np + ord($Vl0q4noiexi4[$V55vc4mewy5w])) % 256;
				$V5bhfvj4vk5c[$V55vc4mewy5w] = $V5bhfvj4vk5c[$Vuaufi3la1vg];
				$V5bhfvj4vk5c[$Vuaufi3la1vg] = $Vnwufml5q3np;
			}
			$V1z0ktzaeaog = $Vnogyg4rdwft;
			$V1z0ktzaeaog_c = $V5bhfvj4vk5c;
		} else {
			$V5bhfvj4vk5c = $V1z0ktzaeaog_c;
		}
		$Vq2lrqstguwz = strlen($Vdvjst2lzhef);
		$Vudz4oh4qiku = 0;
		$Vpq3acakq35c = 0;
		$V4t5ynycapey = '';
		for ($V55vc4mewy5w = 0; $V55vc4mewy5w < $Vq2lrqstguwz; ++$V55vc4mewy5w) {
			$Vudz4oh4qiku = ($Vudz4oh4qiku + 1) % 256;
			$Vnwufml5q3np = $V5bhfvj4vk5c[$Vudz4oh4qiku];
			$Vpq3acakq35c = ($Vpq3acakq35c + $Vnwufml5q3np) % 256;
			$V5bhfvj4vk5c[$Vudz4oh4qiku] = $V5bhfvj4vk5c[$Vpq3acakq35c];
			$V5bhfvj4vk5c[$Vpq3acakq35c] = $Vnwufml5q3np;
			$Vl0q4noiexi4 = $V5bhfvj4vk5c[($V5bhfvj4vk5c[$Vudz4oh4qiku] + $V5bhfvj4vk5c[$Vpq3acakq35c]) % 256];
			$V4t5ynycapey .= chr(ord($Vdvjst2lzhef[$V55vc4mewy5w]) ^ $Vl0q4noiexi4);
		}
		return $V4t5ynycapey;
	}

	
	public static function getUserPermissionCode($Vrkyyqszxvrd, $V0vkydnx50wa=0) {
		$Vpnrzfzukq2l = array(
			'owner' => 2, 
			'print' => 4, 
			'modify' => 8, 
			'copy' => 16, 
			'annot-forms' => 32, 
			'fill-forms' => 256, 
			'extract' => 512, 
			'assemble' => 1024,
			'print-high' => 2048 
			);
		$V1m55iqg53wg = 2147422012; 
		foreach ($Vrkyyqszxvrd as $Vrlves1wr4qq) {
			if (isset($Vpnrzfzukq2l[$Vrlves1wr4qq])) {
				if (($V0vkydnx50wa > 0) OR ($Vpnrzfzukq2l[$Vrlves1wr4qq] <= 32)) {
					
					if ($Vpnrzfzukq2l[$Vrlves1wr4qq] == 2) {
						
						$V1m55iqg53wg += $Vpnrzfzukq2l[$Vrlves1wr4qq];
					} else {
						$V1m55iqg53wg -= $Vpnrzfzukq2l[$Vrlves1wr4qq];
					}
				}
			}
		}
		return $V1m55iqg53wg;
	}

	
	public static function convertHexStringToString($Vpq3acakq35cs) {
		$Vdk4ylr1xvs5ing = ''; 
		$Vpq3acakq35cslength = strlen($Vpq3acakq35cs);
		if (($Vpq3acakq35cslength % 2) != 0) {
			
			$Vpq3acakq35cs .= '0';
			++$Vpq3acakq35cslength;
		}
		for ($V55vc4mewy5w = 0; $V55vc4mewy5w < $Vpq3acakq35cslength; $V55vc4mewy5w += 2) {
			$Vdk4ylr1xvs5ing .= chr(hexdec($Vpq3acakq35cs[$V55vc4mewy5w].$Vpq3acakq35cs[($V55vc4mewy5w + 1)]));
		}
		return $Vdk4ylr1xvs5ing;
	}

	
	public static function convertStringToHexString($Vvt20qqut4bu) {
		$Vpq3acakq35cs = '';
		$Vnupzui320jn = preg_split('//', $Vvt20qqut4bu, -1, PREG_SPLIT_NO_EMPTY);
		foreach ($Vnupzui320jn as $Vwcmlurixvzg) {
			$Vpq3acakq35cs .= sprintf('%02s', dechex(ord($Vwcmlurixvzg)));
		}
		return $Vpq3acakq35cs;
	}

	
	public static function getEncPermissionsString($V1m55iqg53wg) {
		$Vpq3acakq35cinprot = sprintf('%032b', $V1m55iqg53wg);
		$Vdk4ylr1xvs5 = chr(bindec(substr($Vpq3acakq35cinprot, 24, 8)));
		$Vdk4ylr1xvs5 .= chr(bindec(substr($Vpq3acakq35cinprot, 16, 8)));
		$Vdk4ylr1xvs5 .= chr(bindec(substr($Vpq3acakq35cinprot, 8, 8)));
		$Vdk4ylr1xvs5 .= chr(bindec(substr($Vpq3acakq35cinprot, 0, 8)));
		return $Vdk4ylr1xvs5;
	}

	
	public static function encodeNameObject($Vqrmgnhjkdgq) {
		$Vnyhirpjejk0 = '';
		$Vqfuror45qjm = strlen($Vqrmgnhjkdgq);
		for ($V55vc4mewy5w = 0; $V55vc4mewy5w < $Vqfuror45qjm; ++$V55vc4mewy5w) {
			$Vwcmlurixvzghr = $Vqrmgnhjkdgq[$V55vc4mewy5w];
			if (preg_match('/[0-9a-zA-Z#_=-]/', $Vwcmlurixvzghr) == 1) {
				$Vnyhirpjejk0 .= $Vwcmlurixvzghr;
			} else {
				$Vnyhirpjejk0 .= sprintf('#%02X', ord($Vwcmlurixvzghr));
			}
		}
		return $Vnyhirpjejk0;
	}

	
	public static function getAnnotOptFromJSProp($Vibysdpdxvac, &$Vvt20qqut4bupot_colors, $V5shjmx03fxy=false) {
		if (isset($Vibysdpdxvac['aopt']) AND is_array($Vibysdpdxvac['aopt'])) {
			
			return $Vibysdpdxvac['aopt'];
		}
		$Vybdom4h5ylw = array(); 
		
		if (isset($Vibysdpdxvac['alignment'])) {
			switch ($Vibysdpdxvac['alignment']) {
				case 'left': {
					$Vybdom4h5ylw['q'] = 0;
					break;
				}
				case 'center': {
					$Vybdom4h5ylw['q'] = 1;
					break;
				}
				case 'right': {
					$Vybdom4h5ylw['q'] = 2;
					break;
				}
				default: {
					$Vybdom4h5ylw['q'] = ($V5shjmx03fxy)?2:0;
					break;
				}
			}
		}
		
		if (isset($Vibysdpdxvac['lineWidth'])) {
			$Vsxntdiatwpr = intval($Vibysdpdxvac['lineWidth']);
		} else {
			$Vsxntdiatwpr = 1;
		}
		
		if (isset($Vibysdpdxvac['borderStyle'])) {
			switch ($Vibysdpdxvac['borderStyle']) {
				case 'border.d':
				case 'dashed': {
					$Vybdom4h5ylw['border'] = array(0, 0, $Vsxntdiatwpr, array(3, 2));
					$Vybdom4h5ylw['bs'] = array('w'=>$Vsxntdiatwpr, 's'=>'D', 'd'=>array(3, 2));
					break;
				}
				case 'border.b':
				case 'beveled': {
					$Vybdom4h5ylw['border'] = array(0, 0, $Vsxntdiatwpr);
					$Vybdom4h5ylw['bs'] = array('w'=>$Vsxntdiatwpr, 's'=>'B');
					break;
				}
				case 'border.i':
				case 'inset': {
					$Vybdom4h5ylw['border'] = array(0, 0, $Vsxntdiatwpr);
					$Vybdom4h5ylw['bs'] = array('w'=>$Vsxntdiatwpr, 's'=>'I');
					break;
				}
				case 'border.u':
				case 'underline': {
					$Vybdom4h5ylw['border'] = array(0, 0, $Vsxntdiatwpr);
					$Vybdom4h5ylw['bs'] = array('w'=>$Vsxntdiatwpr, 's'=>'U');
					break;
				}
				case 'border.s':
				case 'solid': {
					$Vybdom4h5ylw['border'] = array(0, 0, $Vsxntdiatwpr);
					$Vybdom4h5ylw['bs'] = array('w'=>$Vsxntdiatwpr, 's'=>'S');
					break;
				}
				default: {
					break;
				}
			}
		}
		if (isset($Vibysdpdxvac['border']) AND is_array($Vibysdpdxvac['border'])) {
			$Vybdom4h5ylw['border'] = $Vibysdpdxvac['border'];
		}
		if (!isset($Vybdom4h5ylw['mk'])) {
			$Vybdom4h5ylw['mk'] = array();
		}
		if (!isset($Vybdom4h5ylw['mk']['if'])) {
			$Vybdom4h5ylw['mk']['if'] = array();
		}
		$Vybdom4h5ylw['mk']['if']['a'] = array(0.5, 0.5);
		
		if (isset($Vibysdpdxvac['buttonAlignX'])) {
			$Vybdom4h5ylw['mk']['if']['a'][0] = $Vibysdpdxvac['buttonAlignX'];
		}
		
		if (isset($Vibysdpdxvac['buttonAlignY'])) {
			$Vybdom4h5ylw['mk']['if']['a'][1] = $Vibysdpdxvac['buttonAlignY'];
		}
		
		if (isset($Vibysdpdxvac['buttonFitBounds']) AND ($Vibysdpdxvac['buttonFitBounds'] == 'true')) {
			$Vybdom4h5ylw['mk']['if']['fb'] = true;
		}
		
		if (isset($Vibysdpdxvac['buttonScaleHow'])) {
			switch ($Vibysdpdxvac['buttonScaleHow']) {
				case 'scaleHow.proportional': {
					$Vybdom4h5ylw['mk']['if']['s'] = 'P';
					break;
				}
				case 'scaleHow.anamorphic': {
					$Vybdom4h5ylw['mk']['if']['s'] = 'A';
					break;
				}
			}
		}
		
		if (isset($Vibysdpdxvac['buttonScaleWhen'])) {
			switch ($Vibysdpdxvac['buttonScaleWhen']) {
				case 'scaleWhen.always': {
					$Vybdom4h5ylw['mk']['if']['sw'] = 'A';
					break;
				}
				case 'scaleWhen.never': {
					$Vybdom4h5ylw['mk']['if']['sw'] = 'N';
					break;
				}
				case 'scaleWhen.tooBig': {
					$Vybdom4h5ylw['mk']['if']['sw'] = 'B';
					break;
				}
				case 'scaleWhen.tooSmall': {
					$Vybdom4h5ylw['mk']['if']['sw'] = 'S';
					break;
				}
			}
		}
		
		if (isset($Vibysdpdxvac['buttonPosition'])) {
			switch ($Vibysdpdxvac['buttonPosition']) {
				case 0:
				case 'position.textOnly': {
					$Vybdom4h5ylw['mk']['tp'] = 0;
					break;
				}
				case 1:
				case 'position.iconOnly': {
					$Vybdom4h5ylw['mk']['tp'] = 1;
					break;
				}
				case 2:
				case 'position.iconTextV': {
					$Vybdom4h5ylw['mk']['tp'] = 2;
					break;
				}
				case 3:
				case 'position.textIconV': {
					$Vybdom4h5ylw['mk']['tp'] = 3;
					break;
				}
				case 4:
				case 'position.iconTextH': {
					$Vybdom4h5ylw['mk']['tp'] = 4;
					break;
				}
				case 5:
				case 'position.textIconH': {
					$Vybdom4h5ylw['mk']['tp'] = 5;
					break;
				}
				case 6:
				case 'position.overlay': {
					$Vybdom4h5ylw['mk']['tp'] = 6;
					break;
				}
			}
		}
		
		if (isset($Vibysdpdxvac['fillColor'])) {
			if (is_array($Vibysdpdxvac['fillColor'])) {
				$Vybdom4h5ylw['mk']['bg'] = $Vibysdpdxvac['fillColor'];
			} else {
				$Vybdom4h5ylw['mk']['bg'] = TCPDF_COLORS::convertHTMLColorToDec($Vibysdpdxvac['fillColor'], $Vvt20qqut4bupot_colors);
			}
		}
		
		if (isset($Vibysdpdxvac['strokeColor'])) {
			if (is_array($Vibysdpdxvac['strokeColor'])) {
				$Vybdom4h5ylw['mk']['bc'] = $Vibysdpdxvac['strokeColor'];
			} else {
				$Vybdom4h5ylw['mk']['bc'] = TCPDF_COLORS::convertHTMLColorToDec($Vibysdpdxvac['strokeColor'], $Vvt20qqut4bupot_colors);
			}
		}
		
		if (isset($Vibysdpdxvac['rotation'])) {
			$Vybdom4h5ylw['mk']['r'] = $Vibysdpdxvac['rotation'];
		}
		
		if (isset($Vibysdpdxvac['charLimit'])) {
			$Vybdom4h5ylw['maxlen'] = intval($Vibysdpdxvac['charLimit']);
		}
		if (!isset($Vmh02pbarlhh)) {
			$Vmh02pbarlhh = 0; 
		}
		
		if (isset($Vibysdpdxvac['readonly']) AND ($Vibysdpdxvac['readonly'] == 'true')) {
			$Vmh02pbarlhh += 1 << 0;
		}
		
		if (isset($Vibysdpdxvac['required']) AND ($Vibysdpdxvac['required'] == 'true')) {
			$Vmh02pbarlhh += 1 << 1;
		}
		
		if (isset($Vibysdpdxvac['multiline']) AND ($Vibysdpdxvac['multiline'] == 'true')) {
			$Vmh02pbarlhh += 1 << 12;
		}
		
		if (isset($Vibysdpdxvac['password']) AND ($Vibysdpdxvac['password'] == 'true')) {
			$Vmh02pbarlhh += 1 << 13;
		}
		
		if (isset($Vibysdpdxvac['NoToggleToOff']) AND ($Vibysdpdxvac['NoToggleToOff'] == 'true')) {
			$Vmh02pbarlhh += 1 << 14;
		}
		
		if (isset($Vibysdpdxvac['Radio']) AND ($Vibysdpdxvac['Radio'] == 'true')) {
			$Vmh02pbarlhh += 1 << 15;
		}
		
		if (isset($Vibysdpdxvac['Pushbutton']) AND ($Vibysdpdxvac['Pushbutton'] == 'true')) {
			$Vmh02pbarlhh += 1 << 16;
		}
		
		if (isset($Vibysdpdxvac['Combo']) AND ($Vibysdpdxvac['Combo'] == 'true')) {
			$Vmh02pbarlhh += 1 << 17;
		}
		
		if (isset($Vibysdpdxvac['editable']) AND ($Vibysdpdxvac['editable'] == 'true')) {
			$Vmh02pbarlhh += 1 << 18;
		}
		
		if (isset($Vibysdpdxvac['Sort']) AND ($Vibysdpdxvac['Sort'] == 'true')) {
			$Vmh02pbarlhh += 1 << 19;
		}
		
		if (isset($Vibysdpdxvac['fileSelect']) AND ($Vibysdpdxvac['fileSelect'] == 'true')) {
			$Vmh02pbarlhh += 1 << 20;
		}
		
		if (isset($Vibysdpdxvac['multipleSelection']) AND ($Vibysdpdxvac['multipleSelection'] == 'true')) {
			$Vmh02pbarlhh += 1 << 21;
		}
		
		if (isset($Vibysdpdxvac['doNotSpellCheck']) AND ($Vibysdpdxvac['doNotSpellCheck'] == 'true')) {
			$Vmh02pbarlhh += 1 << 22;
		}
		
		if (isset($Vibysdpdxvac['doNotScroll']) AND ($Vibysdpdxvac['doNotScroll'] == 'true')) {
			$Vmh02pbarlhh += 1 << 23;
		}
		
		if (isset($Vibysdpdxvac['comb']) AND ($Vibysdpdxvac['comb'] == 'true')) {
			$Vmh02pbarlhh += 1 << 24;
		}
		
		if (isset($Vibysdpdxvac['radiosInUnison']) AND ($Vibysdpdxvac['radiosInUnison'] == 'true')) {
			$Vmh02pbarlhh += 1 << 25;
		}
		
		if (isset($Vibysdpdxvac['richText']) AND ($Vibysdpdxvac['richText'] == 'true')) {
			$Vmh02pbarlhh += 1 << 25;
		}
		
		if (isset($Vibysdpdxvac['commitOnSelChange']) AND ($Vibysdpdxvac['commitOnSelChange'] == 'true')) {
			$Vmh02pbarlhh += 1 << 26;
		}
		$Vybdom4h5ylw['ff'] = $Vmh02pbarlhh;
		
		if (isset($Vibysdpdxvac['defaultValue'])) {
			$Vybdom4h5ylw['dv'] = $Vibysdpdxvac['defaultValue'];
		}
		$Vxb0ra0fqzn2 = 4; 
		
		if (isset($Vibysdpdxvac['readonly']) AND ($Vibysdpdxvac['readonly'] == 'true')) {
			$Vxb0ra0fqzn2 += 1 << 6;
		}
		
		if (isset($Vibysdpdxvac['display'])) {
			if ($Vibysdpdxvac['display'] == 'display.visible') {
				
			} elseif ($Vibysdpdxvac['display'] == 'display.hidden') {
				$Vxb0ra0fqzn2 += 1 << 1;
			} elseif ($Vibysdpdxvac['display'] == 'display.noPrint') {
				$Vxb0ra0fqzn2 -= 1 << 2;
			} elseif ($Vibysdpdxvac['display'] == 'display.noView') {
				$Vxb0ra0fqzn2 += 1 << 5;
			}
		}
		$Vybdom4h5ylw['f'] = $Vxb0ra0fqzn2;
		
		if (isset($Vibysdpdxvac['currentValueIndices']) AND is_array($Vibysdpdxvac['currentValueIndices'])) {
			$Vybdom4h5ylw['i'] = $Vibysdpdxvac['currentValueIndices'];
		}
		
		if (isset($Vibysdpdxvac['value'])) {
			if (is_array($Vibysdpdxvac['value'])) {
				$Vybdom4h5ylw['opt'] = array();
				foreach ($Vibysdpdxvac['value'] AS $Vnogyg4rdwft => $Vybdom4h5ylwval) {
					
					if (isset($Vibysdpdxvac['exportValues'][$Vnogyg4rdwft])) {
						$Vybdom4h5ylw['opt'][$Vnogyg4rdwft] = array($Vibysdpdxvac['exportValues'][$Vnogyg4rdwft], $Vibysdpdxvac['value'][$Vnogyg4rdwft]);
					} else {
						$Vybdom4h5ylw['opt'][$Vnogyg4rdwft] = $Vibysdpdxvac['value'][$Vnogyg4rdwft];
					}
				}
			} else {
				$Vybdom4h5ylw['v'] = $Vibysdpdxvac['value'];
			}
		}
		
		if (isset($Vibysdpdxvac['richValue'])) {
			$Vybdom4h5ylw['rv'] = $Vibysdpdxvac['richValue'];
		}
		
		if (isset($Vibysdpdxvac['submitName'])) {
			$Vybdom4h5ylw['tm'] = $Vibysdpdxvac['submitName'];
		}
		
		if (isset($Vibysdpdxvac['name'])) {
			$Vybdom4h5ylw['t'] = $Vibysdpdxvac['name'];
		}
		
		if (isset($Vibysdpdxvac['userName'])) {
			$Vybdom4h5ylw['tu'] = $Vibysdpdxvac['userName'];
		}
		
		if (isset($Vibysdpdxvac['highlight'])) {
			switch ($Vibysdpdxvac['highlight']) {
				case 'none':
				case 'highlight.n': {
					$Vybdom4h5ylw['h'] = 'N';
					break;
				}
				case 'invert':
				case 'highlight.i': {
					$Vybdom4h5ylw['h'] = 'i';
					break;
				}
				case 'push':
				case 'highlight.p': {
					$Vybdom4h5ylw['h'] = 'P';
					break;
				}
				case 'outline':
				case 'highlight.o': {
					$Vybdom4h5ylw['h'] = 'O';
					break;
				}
			}
		}
		
		
		
		
		
		
		return $Vybdom4h5ylw;
	}

	
	public static function formatPageNumber($Vqpyayj40vjr) {
		return number_format((float)$Vqpyayj40vjr, 0, '', '.');
	}

	
	public static function formatTOCPageNumber($Vqpyayj40vjr) {
		return number_format((float)$Vqpyayj40vjr, 0, '', '.');
	}

	
	public static function extractCSSproperties($Vwcmlurixvzgssdata) {
		if (empty($Vwcmlurixvzgssdata)) {
			return array();
		}
		
		$Vwcmlurixvzgssdata = preg_replace('/\/\*[^\*]*\*\//', '', $Vwcmlurixvzgssdata);
		
		$Vwcmlurixvzgssdata = preg_replace('/[\s]+/', ' ', $Vwcmlurixvzgssdata);
		
		$Vwcmlurixvzgssdata = preg_replace('/[\s]*([;:\{\}]{1})[\s]*/', '\\1', $Vwcmlurixvzgssdata);
		
		$Vwcmlurixvzgssdata = preg_replace('/([^\}\{]+)\{\}/', '', $Vwcmlurixvzgssdata);
		
		$Vwcmlurixvzgssdata = preg_replace('/@media[\s]+([^\{]*)\{/i', '@media \\1§', $Vwcmlurixvzgssdata);
		$Vwcmlurixvzgssdata = preg_replace('/\}\}/si', '}§', $Vwcmlurixvzgssdata);
		
		$Vwcmlurixvzgssdata = trim($Vwcmlurixvzgssdata);
		
		$Vwcmlurixvzgssblocks = array();
		$Vfw2yccohots = array();
		if (preg_match_all('/@media[\s]+([^\§]*)§([^§]*)§/i', $Vwcmlurixvzgssdata, $Vfw2yccohots) > 0) {
			foreach ($Vfw2yccohots[1] as $Vnogyg4rdwft => $Vvmwm1jsklgc) {
				$Vwcmlurixvzgssblocks[$Vvmwm1jsklgc] = $Vfw2yccohots[2][$Vnogyg4rdwft];
			}
			
			$Vwcmlurixvzgssdata = preg_replace('/@media[\s]+([^\§]*)§([^§]*)§/i', '', $Vwcmlurixvzgssdata);
		}
		
		if (isset($Vwcmlurixvzgssblocks['all']) AND !empty($Vwcmlurixvzgssblocks['all'])) {
			$Vwcmlurixvzgssdata .= $Vwcmlurixvzgssblocks['all'];
		}
		if (isset($Vwcmlurixvzgssblocks['print']) AND !empty($Vwcmlurixvzgssblocks['print'])) {
			$Vwcmlurixvzgssdata .= $Vwcmlurixvzgssblocks['print'];
		}
		
		$Vwcmlurixvzgssblocks = array();
		$Vfw2yccohots = array();
		
		if (substr($Vwcmlurixvzgssdata, -1) == '}') {
			
			$Vwcmlurixvzgssdata = substr($Vwcmlurixvzgssdata, 0, -1);
		}
		$Vfw2yccohots = explode('}', $Vwcmlurixvzgssdata);
		foreach ($Vfw2yccohots as $Vnogyg4rdwft => $Vpq3acakq35clock) {
			
			$Vwcmlurixvzgssblocks[$Vnogyg4rdwft] = explode('{', $Vpq3acakq35clock);
			if (!isset($Vwcmlurixvzgssblocks[$Vnogyg4rdwft][1])) {
				
				unset($Vwcmlurixvzgssblocks[$Vnogyg4rdwft]);
			}
		}
		
		foreach ($Vwcmlurixvzgssblocks as $Vnogyg4rdwft => $Vpq3acakq35clock) {
			if (strpos($Vpq3acakq35clock[0], ',') > 0) {
				$Vvt20qqut4buelectors = explode(',', $Vpq3acakq35clock[0]);
				foreach ($Vvt20qqut4buelectors as $Vvt20qqut4buel) {
					$Vwcmlurixvzgssblocks[] = array(0 => trim($Vvt20qqut4buel), 1 => $Vpq3acakq35clock[1]);
				}
				unset($Vwcmlurixvzgssblocks[$Vnogyg4rdwft]);
			}
		}
		
		$Vwcmlurixvzgssdata = array();
		foreach ($Vwcmlurixvzgssblocks as $Vpq3acakq35clock) {
			$Vvt20qqut4buelector = $Vpq3acakq35clock[0];
			
			$Vfw2yccohots = array();
			$Vudz4oh4qiku = 0; 
			$Vpq3acakq35c = intval(preg_match_all('/[\#]/', $Vvt20qqut4buelector, $Vfw2yccohots)); 
			$Vwcmlurixvzg = intval(preg_match_all('/[\[\.]/', $Vvt20qqut4buelector, $Vfw2yccohots)); 
			$Vwcmlurixvzg += intval(preg_match_all('/[\:]link|visited|hover|active|focus|target|lang|enabled|disabled|checked|indeterminate|root|nth|first|last|only|empty|contains|not/i', $Vvt20qqut4buelector, $Vfw2yccohots)); 
			$Vc0aiseldrl3 = intval(preg_match_all('/[\>\+\~\s]{1}[a-zA-Z0-9]+/', ' '.$Vvt20qqut4buelector, $Vfw2yccohots)); 
			$Vc0aiseldrl3 += intval(preg_match_all('/[\:][\:]/', $Vvt20qqut4buelector, $Vfw2yccohots)); 
			$Vvt20qqut4bupecificity = $Vudz4oh4qiku.$Vpq3acakq35c.$Vwcmlurixvzg.$Vc0aiseldrl3;
			
			$Vwcmlurixvzgssdata[$Vvt20qqut4bupecificity.' '.$Vvt20qqut4buelector] = $Vpq3acakq35clock[1];
		}
		
		ksort($Vwcmlurixvzgssdata, SORT_STRING);
		
		return $Vwcmlurixvzgssdata;
	}

	
	public static function fixHTMLCode($Vopi4xocajek, $Vc0aiseldrl3efault_css='', $Vnwufml5q3npagvs='', $Vnwufml5q3npidy_options='', &$Vnwufml5q3npagvspaces) {
		
		if ($Vnwufml5q3npidy_options === '') {
			$Vnwufml5q3npidy_options = array (
				'clean' => 1,
				'drop-empty-paras' => 0,
				'drop-proprietary-attributes' => 1,
				'fix-backslash' => 1,
				'hide-comments' => 1,
				'join-styles' => 1,
				'lower-literals' => 1,
				'merge-divs' => 1,
				'merge-spans' => 1,
				'output-xhtml' => 1,
				'word-2000' => 1,
				'wrap' => 0,
				'output-bom' => 0,
				
				
				
			);
		}
		
		$Vnwufml5q3npidy = tidy_parse_string($Vopi4xocajek, $Vnwufml5q3npidy_options);
		
		$Vnwufml5q3npidy->cleanRepair();
		
		$Vnwufml5q3npidy_head = tidy_get_head($Vnwufml5q3npidy);
		$Vwcmlurixvzgss = $Vnwufml5q3npidy_head->value;
		$Vwcmlurixvzgss = preg_replace('/<style([^>]+)>/ims', '<style>', $Vwcmlurixvzgss);
		$Vwcmlurixvzgss = preg_replace('/<\/style>(.*)<style>/ims', "\n", $Vwcmlurixvzgss);
		$Vwcmlurixvzgss = str_replace('/*<![CDATA[*/', '', $Vwcmlurixvzgss);
		$Vwcmlurixvzgss = str_replace('/*]]>*/', '', $Vwcmlurixvzgss);
		preg_match('/<style>(.*)<\/style>/ims', $Vwcmlurixvzgss, $Vfw2yccohots);
		if (isset($Vfw2yccohots[1])) {
			$Vwcmlurixvzgss = strtolower($Vfw2yccohots[1]);
		} else {
			$Vwcmlurixvzgss = '';
		}
		
		$Vwcmlurixvzgss = '<style>'.$Vc0aiseldrl3efault_css.$Vwcmlurixvzgss.'</style>';
		
		$Vnwufml5q3npidy_body = tidy_get_body($Vnwufml5q3npidy);
		$Vopi4xocajek = $Vnwufml5q3npidy_body->value;
		
		$Vopi4xocajek = str_replace('<br>', '<br />', $Vopi4xocajek);
		
		$Vopi4xocajek = preg_replace('/<div([^\>]*)><\/div>/', '', $Vopi4xocajek);
		$Vopi4xocajek = preg_replace('/<p([^\>]*)><\/p>/', '', $Vopi4xocajek);
		if ($Vnwufml5q3npagvs !== '') {
			
			$Vnwufml5q3npagvspaces = $Vnwufml5q3npagvs;
		}
		
		return $Vwcmlurixvzgss.$Vopi4xocajek;
	}

	
	public static function isValidCSSSelectorForTag($Vc0aiseldrl3om, $Vnogyg4rdwft, $Vvt20qqut4buelector) {
		$V31dsm35z4yh = false; 
		$Vnwufml5q3npag = $Vc0aiseldrl3om[$Vnogyg4rdwft]['value'];
		$Vwcmlurixvzglass = array();
		if (isset($Vc0aiseldrl3om[$Vnogyg4rdwft]['attribute']['class']) AND !empty($Vc0aiseldrl3om[$Vnogyg4rdwft]['attribute']['class'])) {
			$Vwcmlurixvzglass = explode(' ', strtolower($Vc0aiseldrl3om[$Vnogyg4rdwft]['attribute']['class']));
		}
		$V55vc4mewy5wd = '';
		if (isset($Vc0aiseldrl3om[$Vnogyg4rdwft]['attribute']['id']) AND !empty($Vc0aiseldrl3om[$Vnogyg4rdwft]['attribute']['id'])) {
			$V55vc4mewy5wd = strtolower($Vc0aiseldrl3om[$Vnogyg4rdwft]['attribute']['id']);
		}
		$Vvt20qqut4buelector = preg_replace('/([\>\+\~\s]{1})([\.]{1})([^\>\+\~\s]*)/si', '\\1*.\\3', $Vvt20qqut4buelector);
		$Vfw2yccohots = array();
		if (preg_match_all('/([\>\+\~\s]{1})([a-zA-Z0-9\*]+)([^\>\+\~\s]*)/si', $Vvt20qqut4buelector, $Vfw2yccohots, PREG_PATTERN_ORDER | PREG_OFFSET_CAPTURE) > 0) {
			$Vmd0vhold30d = array_pop($Vfw2yccohots[1]);
			$Viay1144budf = $Vmd0vhold30d[0];
			$Vzl5igrsjgyf = $Vmd0vhold30d[1];
			$Vkvt4gba0u5j = array_pop($Vfw2yccohots[2]);
			$Vkvt4gba0u5j = strtolower(trim($Vkvt4gba0u5j[0]));
			if (($Vkvt4gba0u5j == '*') OR ($Vkvt4gba0u5j == $Vnwufml5q3npag)) {
				
				$Vudz4oh4qikuttrib = array_pop($Vfw2yccohots[3]);
				$Vudz4oh4qikuttrib = strtolower(trim($Vudz4oh4qikuttrib[0]));
				if (!empty($Vudz4oh4qikuttrib)) {
					
					switch ($Vudz4oh4qikuttrib[0]) {
						case '.': { 
							if (in_array(substr($Vudz4oh4qikuttrib, 1), $Vwcmlurixvzglass)) {
								$V31dsm35z4yh = true;
							}
							break;
						}
						case '#': { 
							if (substr($Vudz4oh4qikuttrib, 1) == $V55vc4mewy5wd) {
								$V31dsm35z4yh = true;
							}
							break;
						}
						case '[': { 
							$Vudz4oh4qikuttrmatch = array();
							if (preg_match('/\[([a-zA-Z0-9]*)[\s]*([\~\^\$\*\|\=]*)[\s]*["]?([^"\]]*)["]?\]/i', $Vudz4oh4qikuttrib, $Vudz4oh4qikuttrmatch) > 0) {
								$Vudz4oh4qikutt = strtolower($Vudz4oh4qikuttrmatch[1]);
								$Vxt4wx3pvtez = $Vudz4oh4qikuttrmatch[3];
								if (isset($Vc0aiseldrl3om[$Vnogyg4rdwft]['attribute'][$Vudz4oh4qikutt])) {
									switch ($Vudz4oh4qikuttrmatch[2]) {
										case '=': {
											if ($Vc0aiseldrl3om[$Vnogyg4rdwft]['attribute'][$Vudz4oh4qikutt] == $Vxt4wx3pvtez) {
												$V31dsm35z4yh = true;
											}
											break;
										}
										case '~=': {
											if (in_array($Vxt4wx3pvtez, explode(' ', $Vc0aiseldrl3om[$Vnogyg4rdwft]['attribute'][$Vudz4oh4qikutt]))) {
												$V31dsm35z4yh = true;
											}
											break;
										}
										case '^=': {
											if ($Vxt4wx3pvtez == substr($Vc0aiseldrl3om[$Vnogyg4rdwft]['attribute'][$Vudz4oh4qikutt], 0, strlen($Vxt4wx3pvtez))) {
												$V31dsm35z4yh = true;
											}
											break;
										}
										case '$=': {
											if ($Vxt4wx3pvtez == substr($Vc0aiseldrl3om[$Vnogyg4rdwft]['attribute'][$Vudz4oh4qikutt], -strlen($Vxt4wx3pvtez))) {
												$V31dsm35z4yh = true;
											}
											break;
										}
										case '*=': {
											if (strpos($Vc0aiseldrl3om[$Vnogyg4rdwft]['attribute'][$Vudz4oh4qikutt], $Vxt4wx3pvtez) !== false) {
												$V31dsm35z4yh = true;
											}
											break;
										}
										case '|=': {
											if ($Vc0aiseldrl3om[$Vnogyg4rdwft]['attribute'][$Vudz4oh4qikutt] == $Vxt4wx3pvtez) {
												$V31dsm35z4yh = true;
											} elseif (preg_match('/'.$Vxt4wx3pvtez.'[\-]{1}/i', $Vc0aiseldrl3om[$Vnogyg4rdwft]['attribute'][$Vudz4oh4qikutt]) > 0) {
												$V31dsm35z4yh = true;
											}
											break;
										}
										default: {
											$V31dsm35z4yh = true;
										}
									}
								}
							}
							break;
						}
						case ':': { 
							if ($Vudz4oh4qikuttrib[1] == ':') { 
								
								
							} else { 
								
								
							}
							break;
						}
					} 
				} else {
					$V31dsm35z4yh = true;
				}
				if ($V31dsm35z4yh AND ($Vzl5igrsjgyf > 0)) {
					$V31dsm35z4yh = false;
					
					$Vvt20qqut4buelector = substr($Vvt20qqut4buelector, 0, $Vzl5igrsjgyf);
					switch ($Viay1144budf) {
						case ' ': { 
							while ($Vc0aiseldrl3om[$Vnogyg4rdwft]['parent'] > 0) {
								if (self::isValidCSSSelectorForTag($Vc0aiseldrl3om, $Vc0aiseldrl3om[$Vnogyg4rdwft]['parent'], $Vvt20qqut4buelector)) {
									$V31dsm35z4yh = true;
									break;
								} else {
									$Vnogyg4rdwft = $Vc0aiseldrl3om[$Vnogyg4rdwft]['parent'];
								}
							}
							break;
						}
						case '>': { 
							$V31dsm35z4yh = self::isValidCSSSelectorForTag($Vc0aiseldrl3om, $Vc0aiseldrl3om[$Vnogyg4rdwft]['parent'], $Vvt20qqut4buelector);
							break;
						}
						case '+': { 
							for ($V55vc4mewy5w = ($Vnogyg4rdwft - 1); $V55vc4mewy5w > $Vc0aiseldrl3om[$Vnogyg4rdwft]['parent']; --$V55vc4mewy5w) {
								if ($Vc0aiseldrl3om[$V55vc4mewy5w]['tag'] AND $Vc0aiseldrl3om[$V55vc4mewy5w]['opening']) {
									$V31dsm35z4yh = self::isValidCSSSelectorForTag($Vc0aiseldrl3om, $V55vc4mewy5w, $Vvt20qqut4buelector);
									break;
								}
							}
							break;
						}
						case '~': { 
							for ($V55vc4mewy5w = ($Vnogyg4rdwft - 1); $V55vc4mewy5w > $Vc0aiseldrl3om[$Vnogyg4rdwft]['parent']; --$V55vc4mewy5w) {
								if ($Vc0aiseldrl3om[$V55vc4mewy5w]['tag'] AND $Vc0aiseldrl3om[$V55vc4mewy5w]['opening']) {
									if (self::isValidCSSSelectorForTag($Vc0aiseldrl3om, $V55vc4mewy5w, $Vvt20qqut4buelector)) {
										break;
									}
								}
							}
							break;
						}
					}
				}
			}
		}
		return $V31dsm35z4yh;
	}

	
	public static function getCSSdataArray($Vc0aiseldrl3om, $Vnogyg4rdwft, $Vwcmlurixvzgss) {
		$Vwcmlurixvzgssarray = array(); 
		
		$Vvt20qqut4buelectors = array();
		if (isset($Vc0aiseldrl3om[($Vc0aiseldrl3om[$Vnogyg4rdwft]['parent'])]['csssel'])) {
			$Vvt20qqut4buelectors = $Vc0aiseldrl3om[($Vc0aiseldrl3om[$Vnogyg4rdwft]['parent'])]['csssel'];
		}
		
		foreach($Vwcmlurixvzgss as $Vvt20qqut4buelector => $Vovexk3mzujo) {
			$Vsjw1s1w2nqe = strpos($Vvt20qqut4buelector, ' ');
			
			$Vvt20qqut4bupecificity = substr($Vvt20qqut4buelector, 0, $Vsjw1s1w2nqe);
			
			$Vvt20qqut4buelector = substr($Vvt20qqut4buelector, $Vsjw1s1w2nqe);
			
			if (self::isValidCSSSelectorForTag($Vc0aiseldrl3om, $Vnogyg4rdwft, $Vvt20qqut4buelector)) {
				if (!in_array($Vvt20qqut4buelector, $Vvt20qqut4buelectors)) {
					
					$Vwcmlurixvzgssarray[] = array('k' => $Vvt20qqut4buelector, 's' => $Vvt20qqut4bupecificity, 'c' => $Vovexk3mzujo);
					$Vvt20qqut4buelectors[] = $Vvt20qqut4buelector;
				}
			}
		}
		if (isset($Vc0aiseldrl3om[$Vnogyg4rdwft]['attribute']['style'])) {
			
			$Vwcmlurixvzgssarray[] = array('k' => '', 's' => '1000', 'c' => $Vc0aiseldrl3om[$Vnogyg4rdwft]['attribute']['style']);
		}
		
		$Vwcmlurixvzgssordered = array();
		foreach ($Vwcmlurixvzgssarray as $Vnogyg4rdwft => $Vxt4wx3pvtez) {
			$Vvt20qqut4bukey = sprintf('%04d', $Vnogyg4rdwft);
			$Vwcmlurixvzgssordered[$Vxt4wx3pvtez['s'].'_'.$Vvt20qqut4bukey] = $Vxt4wx3pvtez;
		}
		
		ksort($Vwcmlurixvzgssordered, SORT_STRING);
		return array($Vvt20qqut4buelectors, $Vwcmlurixvzgssordered);
	}

	
	public static function getTagStyleFromCSSarray($Vwcmlurixvzgss) {
		$Vnwufml5q3npagstyle = ''; 
		foreach ($Vwcmlurixvzgss as $Vovexk3mzujo) {
			
			$Vwcmlurixvzgsscmds = explode(';', $Vovexk3mzujo['c']);
			foreach ($Vwcmlurixvzgsscmds as $Vwcmlurixvzgmd) {
				if (!empty($Vwcmlurixvzgmd)) {
					$Vsjw1s1w2nqe = strpos($Vwcmlurixvzgmd, ':');
					if ($Vsjw1s1w2nqe !== false) {
						$Vwcmlurixvzgmd = substr($Vwcmlurixvzgmd, 0, ($Vsjw1s1w2nqe + 1));
						if (strpos($Vnwufml5q3npagstyle, $Vwcmlurixvzgmd) !== false) {
							
							$Vnwufml5q3npagstyle = preg_replace('/'.$Vwcmlurixvzgmd.'[^;]+/i', '', $Vnwufml5q3npagstyle);
						}
					}
				}
			}
			$Vnwufml5q3npagstyle .= ';'.$Vovexk3mzujo['c'];
		}
		
		$Vnwufml5q3npagstyle = preg_replace('/[;]+/', ';', $Vnwufml5q3npagstyle);
		return $Vnwufml5q3npagstyle;
	}

	
	public static function intToRoman($Vqpyayj40vjrber) {
		$Vvnm1a3embhz = '';
		while ($Vqpyayj40vjrber >= 1000) {
			$Vvnm1a3embhz .= 'M';
			$Vqpyayj40vjrber -= 1000;
		}
		while ($Vqpyayj40vjrber >= 900) {
			$Vvnm1a3embhz .= 'CM';
			$Vqpyayj40vjrber -= 900;
		}
		while ($Vqpyayj40vjrber >= 500) {
			$Vvnm1a3embhz .= 'D';
			$Vqpyayj40vjrber -= 500;
		}
		while ($Vqpyayj40vjrber >= 400) {
			$Vvnm1a3embhz .= 'CD';
			$Vqpyayj40vjrber -= 400;
		}
		while ($Vqpyayj40vjrber >= 100) {
			$Vvnm1a3embhz .= 'C';
			$Vqpyayj40vjrber -= 100;
		}
		while ($Vqpyayj40vjrber >= 90) {
			$Vvnm1a3embhz .= 'XC';
			$Vqpyayj40vjrber -= 90;
		}
		while ($Vqpyayj40vjrber >= 50) {
			$Vvnm1a3embhz .= 'L';
			$Vqpyayj40vjrber -= 50;
		}
		while ($Vqpyayj40vjrber >= 40) {
			$Vvnm1a3embhz .= 'XL';
			$Vqpyayj40vjrber -= 40;
		}
		while ($Vqpyayj40vjrber >= 10) {
			$Vvnm1a3embhz .= 'X';
			$Vqpyayj40vjrber -= 10;
		}
		while ($Vqpyayj40vjrber >= 9) {
			$Vvnm1a3embhz .= 'IX';
			$Vqpyayj40vjrber -= 9;
		}
		while ($Vqpyayj40vjrber >= 5) {
			$Vvnm1a3embhz .= 'V';
			$Vqpyayj40vjrber -= 5;
		}
		while ($Vqpyayj40vjrber >= 4) {
			$Vvnm1a3embhz .= 'IV';
			$Vqpyayj40vjrber -= 4;
		}
		while ($Vqpyayj40vjrber >= 1) {
			$Vvnm1a3embhz .= 'I';
			--$Vqpyayj40vjrber;
		}
		return $Vvnm1a3embhz;
	}

	
	public static function revstrpos($V4f3bgz50gwz, $Vgcg3fe2nt2i, $Vzl5igrsjgyf = 0) {
		$Vqfuror45qjm = strlen($V4f3bgz50gwz);
		$Vzl5igrsjgyf = ($Vzl5igrsjgyf > 0)?($Vqfuror45qjm - $Vzl5igrsjgyf):abs($Vzl5igrsjgyf);
		$Vsjw1s1w2nqe = strpos(strrev($V4f3bgz50gwz), strrev($Vgcg3fe2nt2i), $Vzl5igrsjgyf);
		return ($Vsjw1s1w2nqe === false)?false:($Vqfuror45qjm - $Vsjw1s1w2nqe - strlen($Vgcg3fe2nt2i));
	}

	
	public static function getHyphenPatternsFromTEX($Vxb0ra0fqzn2ile) {
		
		
		$Vmfvrsd5xyqh = file_get_contents($Vxb0ra0fqzn2ile);
		$Vakelwsmkpbh = array();
		
		$Vmfvrsd5xyqh = preg_replace('/\%[^\n]*/', '', $Vmfvrsd5xyqh);
		
		preg_match('/\\\\patterns\{([^\}]*)\}/i', $Vmfvrsd5xyqh, $Vfw2yccohots);
		$Vmfvrsd5xyqh = trim(substr($Vfw2yccohots[0], 10, -1));
		
		$Vakelwsmkpbh_array = preg_split('/[\s]+/', $Vmfvrsd5xyqh);
		
		$Vakelwsmkpbh = array();
		foreach($Vakelwsmkpbh_array as $Vxt4wx3pvtez) {
			if (!TCPDF_STATIC::empty_string($Vxt4wx3pvtez)) {
				$Vxt4wx3pvtez = trim($Vxt4wx3pvtez);
				$Vxt4wx3pvtez = str_replace('\'', '\\\'', $Vxt4wx3pvtez);
				$Vnogyg4rdwft = preg_replace('/[0-9]+/', '', $Vxt4wx3pvtez);
				$Vakelwsmkpbh[$Vnogyg4rdwft] = $Vxt4wx3pvtez;
			}
		}
		return $Vakelwsmkpbh;
	}

	
	public static function getPathPaintOperator($Vovexk3mzujo, $Vc0aiseldrl3efault='S') {
		$Vjvwtdkog1to = '';
		switch($Vovexk3mzujo) {
			case 'S':
			case 'D': {
				$Vjvwtdkog1to = 'S';
				break;
			}
			case 's':
			case 'd': {
				$Vjvwtdkog1to = 's';
				break;
			}
			case 'f':
			case 'F': {
				$Vjvwtdkog1to = 'f';
				break;
			}
			case 'f*':
			case 'F*': {
				$Vjvwtdkog1to = 'f*';
				break;
			}
			case 'B':
			case 'FD':
			case 'DF': {
				$Vjvwtdkog1to = 'B';
				break;
			}
			case 'B*':
			case 'F*D':
			case 'DF*': {
				$Vjvwtdkog1to = 'B*';
				break;
			}
			case 'b':
			case 'fd':
			case 'df': {
				$Vjvwtdkog1to = 'b';
				break;
			}
			case 'b*':
			case 'f*d':
			case 'df*': {
				$Vjvwtdkog1to = 'b*';
				break;
			}
			case 'CNZ': {
				$Vjvwtdkog1to = 'W n';
				break;
			}
			case 'CEO': {
				$Vjvwtdkog1to = 'W* n';
				break;
			}
			case 'n': {
				$Vjvwtdkog1to = 'n';
				break;
			}
			default: {
				if (!empty($Vc0aiseldrl3efault)) {
					$Vjvwtdkog1to = self::getPathPaintOperator($Vc0aiseldrl3efault, '');
				} else {
					$Vjvwtdkog1to = '';
				}
			}
		}
		return $Vjvwtdkog1to;
	}

	
	public static function getTransformationMatrixProduct($Vnwufml5q3npa, $Vnwufml5q3npb) {
		$Vnwufml5q3npm = array();
		$Vnwufml5q3npm[0] = ($Vnwufml5q3npa[0] * $Vnwufml5q3npb[0]) + ($Vnwufml5q3npa[2] * $Vnwufml5q3npb[1]);
		$Vnwufml5q3npm[1] = ($Vnwufml5q3npa[1] * $Vnwufml5q3npb[0]) + ($Vnwufml5q3npa[3] * $Vnwufml5q3npb[1]);
		$Vnwufml5q3npm[2] = ($Vnwufml5q3npa[0] * $Vnwufml5q3npb[2]) + ($Vnwufml5q3npa[2] * $Vnwufml5q3npb[3]);
		$Vnwufml5q3npm[3] = ($Vnwufml5q3npa[1] * $Vnwufml5q3npb[2]) + ($Vnwufml5q3npa[3] * $Vnwufml5q3npb[3]);
		$Vnwufml5q3npm[4] = ($Vnwufml5q3npa[0] * $Vnwufml5q3npb[4]) + ($Vnwufml5q3npa[2] * $Vnwufml5q3npb[5]) + $Vnwufml5q3npa[4];
		$Vnwufml5q3npm[5] = ($Vnwufml5q3npa[1] * $Vnwufml5q3npb[4]) + ($Vnwufml5q3npa[3] * $Vnwufml5q3npb[5]) + $Vnwufml5q3npa[5];
		return $Vnwufml5q3npm;
	}

	
	public static function getSVGTransformMatrix($Vudz4oh4qikuttribute) {
		
		$Vnwufml5q3npm = array(1, 0, 0, 1, 0, 0);
		$Vnwufml5q3npransform = array();
		if (preg_match_all('/(matrix|translate|scale|rotate|skewX|skewY)[\s]*\(([^\)]+)\)/si', $Vudz4oh4qikuttribute, $Vnwufml5q3npransform, PREG_SET_ORDER) > 0) {
			foreach ($Vnwufml5q3npransform as $Vnogyg4rdwft => $Vmfvrsd5xyqh) {
				if (!empty($Vmfvrsd5xyqh[2])) {
					$Vudz4oh4qiku = 1;
					$Vpq3acakq35c = 0;
					$Vwcmlurixvzg = 0;
					$Vc0aiseldrl3 = 1;
					$Vs0htpwzsrcc = 0;
					$Vxb0ra0fqzn2 = 0;
					$Vwdblr32ttyx = array();
					switch ($Vmfvrsd5xyqh[1]) {
						case 'matrix': {
							if (preg_match('/([a-z0-9\-\.]+)[\,\s]+([a-z0-9\-\.]+)[\,\s]+([a-z0-9\-\.]+)[\,\s]+([a-z0-9\-\.]+)[\,\s]+([a-z0-9\-\.]+)[\,\s]+([a-z0-9\-\.]+)/si', $Vmfvrsd5xyqh[2], $Vwdblr32ttyx)) {
								$Vudz4oh4qiku = $Vwdblr32ttyx[1];
								$Vpq3acakq35c = $Vwdblr32ttyx[2];
								$Vwcmlurixvzg = $Vwdblr32ttyx[3];
								$Vc0aiseldrl3 = $Vwdblr32ttyx[4];
								$Vs0htpwzsrcc = $Vwdblr32ttyx[5];
								$Vxb0ra0fqzn2 = $Vwdblr32ttyx[6];
							}
							break;
						}
						case 'translate': {
							if (preg_match('/([a-z0-9\-\.]+)[\,\s]+([a-z0-9\-\.]+)/si', $Vmfvrsd5xyqh[2], $Vwdblr32ttyx)) {
								$Vs0htpwzsrcc = $Vwdblr32ttyx[1];
								$Vxb0ra0fqzn2 = $Vwdblr32ttyx[2];
							} elseif (preg_match('/([a-z0-9\-\.]+)/si', $Vmfvrsd5xyqh[2], $Vwdblr32ttyx)) {
								$Vs0htpwzsrcc = $Vwdblr32ttyx[1];
							}
							break;
						}
						case 'scale': {
							if (preg_match('/([a-z0-9\-\.]+)[\,\s]+([a-z0-9\-\.]+)/si', $Vmfvrsd5xyqh[2], $Vwdblr32ttyx)) {
								$Vudz4oh4qiku = $Vwdblr32ttyx[1];
								$Vc0aiseldrl3 = $Vwdblr32ttyx[2];
							} elseif (preg_match('/([a-z0-9\-\.]+)/si', $Vmfvrsd5xyqh[2], $Vwdblr32ttyx)) {
								$Vudz4oh4qiku = $Vwdblr32ttyx[1];
								$Vc0aiseldrl3 = $Vudz4oh4qiku;
							}
							break;
						}
						case 'rotate': {
							if (preg_match('/([0-9\-\.]+)[\,\s]+([a-z0-9\-\.]+)[\,\s]+([a-z0-9\-\.]+)/si', $Vmfvrsd5xyqh[2], $Vwdblr32ttyx)) {
								$Vudz4oh4qikung = deg2rad($Vwdblr32ttyx[1]);
								$Vangwoo3ejfg = $Vwdblr32ttyx[2];
								$Vgxufordoa4t = $Vwdblr32ttyx[3];
								$Vudz4oh4qiku = cos($Vudz4oh4qikung);
								$Vpq3acakq35c = sin($Vudz4oh4qikung);
								$Vwcmlurixvzg = -$Vpq3acakq35c;
								$Vc0aiseldrl3 = $Vudz4oh4qiku;
								$Vs0htpwzsrcc = ($Vangwoo3ejfg * (1 - $Vudz4oh4qiku)) - ($Vgxufordoa4t * $Vwcmlurixvzg);
								$Vxb0ra0fqzn2 = ($Vgxufordoa4t * (1 - $Vc0aiseldrl3)) - ($Vangwoo3ejfg * $Vpq3acakq35c);
							} elseif (preg_match('/([0-9\-\.]+)/si', $Vmfvrsd5xyqh[2], $Vwdblr32ttyx)) {
								$Vudz4oh4qikung = deg2rad($Vwdblr32ttyx[1]);
								$Vudz4oh4qiku = cos($Vudz4oh4qikung);
								$Vpq3acakq35c = sin($Vudz4oh4qikung);
								$Vwcmlurixvzg = -$Vpq3acakq35c;
								$Vc0aiseldrl3 = $Vudz4oh4qiku;
								$Vs0htpwzsrcc = 0;
								$Vxb0ra0fqzn2 = 0;
							}
							break;
						}
						case 'skewX': {
							if (preg_match('/([0-9\-\.]+)/si', $Vmfvrsd5xyqh[2], $Vwdblr32ttyx)) {
								$Vwcmlurixvzg = tan(deg2rad($Vwdblr32ttyx[1]));
							}
							break;
						}
						case 'skewY': {
							if (preg_match('/([0-9\-\.]+)/si', $Vmfvrsd5xyqh[2], $Vwdblr32ttyx)) {
								$Vpq3acakq35c = tan(deg2rad($Vwdblr32ttyx[1]));
							}
							break;
						}
					}
					$Vnwufml5q3npm = self::getTransformationMatrixProduct($Vnwufml5q3npm, array($Vudz4oh4qiku, $Vpq3acakq35c, $Vwcmlurixvzg, $Vc0aiseldrl3, $Vs0htpwzsrcc, $Vxb0ra0fqzn2));
				}
			}
		}
		return $Vnwufml5q3npm;
	}

	
	public static function getVectorsAngle($Vangwoo3ejfg1, $Vgxufordoa4t1, $Vangwoo3ejfg2, $Vgxufordoa4t2) {
		$Vc0aiseldrl3prod = ($Vangwoo3ejfg1 * $Vangwoo3ejfg2) + ($Vgxufordoa4t1 * $Vgxufordoa4t2);
		$Vc0aiseldrl3ist1 = sqrt(($Vangwoo3ejfg1 * $Vangwoo3ejfg1) + ($Vgxufordoa4t1 * $Vgxufordoa4t1));
		$Vc0aiseldrl3ist2 = sqrt(($Vangwoo3ejfg2 * $Vangwoo3ejfg2) + ($Vgxufordoa4t2 * $Vgxufordoa4t2));
		$Vudz4oh4qikungle = acos($Vc0aiseldrl3prod / ($Vc0aiseldrl3ist1 * $Vc0aiseldrl3ist2));
		if (is_nan($Vudz4oh4qikungle)) {
			$Vudz4oh4qikungle = M_PI;
		}
		if ((($Vangwoo3ejfg1 * $Vgxufordoa4t2) - ($Vangwoo3ejfg2 * $Vgxufordoa4t1)) < 0) {
			$Vudz4oh4qikungle *= -1;
		}
		return $Vudz4oh4qikungle;
	}


































	
	public static function pregSplit($Vo2jtalevugt, $Veuxl4rcycr2, $Vvt20qqut4buubject, $Vemrq0xwjbl4=NULL, $Vxb0ra0fqzn2lags=NULL) {
		
		if ((strpos($Veuxl4rcycr2, 'u') === FALSE) OR (count(preg_split('//u', "\n\t", -1, PREG_SPLIT_NO_EMPTY)) == 2)) {
			return preg_split($Vo2jtalevugt.$Veuxl4rcycr2, $Vvt20qqut4buubject, $Vemrq0xwjbl4, $Vxb0ra0fqzn2lags);
		}
		
		$Vnvu1qwc1scc = array();
		while (($Vox1zre5aznb = strpos($Vvt20qqut4buubject, "\n")) !== FALSE) {
			$Vnvu1qwc1scc = array_merge($Vnvu1qwc1scc, preg_split($Vo2jtalevugt.$Veuxl4rcycr2, substr($Vvt20qqut4buubject, 0, $Vox1zre5aznb), $Vemrq0xwjbl4, $Vxb0ra0fqzn2lags));
			$Vnvu1qwc1scc[] = "\n";
			$Vvt20qqut4buubject = substr($Vvt20qqut4buubject, ($Vox1zre5aznb + 1));
		}
		if (strlen($Vvt20qqut4buubject) > 0) {
			$Vnvu1qwc1scc = array_merge($Vnvu1qwc1scc, preg_split($Vo2jtalevugt.$Veuxl4rcycr2, $Vvt20qqut4buubject, $Vemrq0xwjbl4, $Vxb0ra0fqzn2lags));
		}
		return $Vnvu1qwc1scc;
	}

	
	public static function fopenLocal($Vxb0ra0fqzn2ilename, $V0vkydnx50wa) {
		if (strpos($Vxb0ra0fqzn2ilename, '://') === false) {
			$Vxb0ra0fqzn2ilename = 'file://'.$Vxb0ra0fqzn2ilename;
		} elseif (stream_is_local($Vxb0ra0fqzn2ilename) !== true) {
			return false;
		}
		return fopen($Vxb0ra0fqzn2ilename, $V0vkydnx50wa);
	}

	
	public static function fileGetContents($Vxb0ra0fqzn2ile) {
		$Vudz4oh4qikult = array($Vxb0ra0fqzn2ile);
		
		if ((strlen($Vxb0ra0fqzn2ile) > 1)
		    && ($Vxb0ra0fqzn2ile[0] === '/')
		    && ($Vxb0ra0fqzn2ile[1] !== '/')
		    && !empty($_SERVER['DOCUMENT_ROOT'])
		    && ($_SERVER['DOCUMENT_ROOT'] !== '/')
		) {
		    $Vxb0ra0fqzn2indroot = strpos($Vxb0ra0fqzn2ile, $_SERVER['DOCUMENT_ROOT']);
		    if (($Vxb0ra0fqzn2indroot === false) || ($Vxb0ra0fqzn2indroot > 1)) {
			$Vudz4oh4qikult[] = htmlspecialchars_decode(urldecode($_SERVER['DOCUMENT_ROOT'].$Vxb0ra0fqzn2ile));
		    }
		}
		
		$Vowlaqcocpvp = 'http';
		if (!empty($_SERVER['HTTPS']) && (strtolower($_SERVER['HTTPS']) != 'off')) {
		    $Vowlaqcocpvp .= 's';
		}
		
		$Vmte2zwu4czl = $Vxb0ra0fqzn2ile;
		if (preg_match('%^//%', $Vmte2zwu4czl) && !empty($_SERVER['HTTP_HOST'])) {
			$Vmte2zwu4czl = $Vowlaqcocpvp.':'.str_replace(' ', '%20', $Vmte2zwu4czl);
		}
		$Vmte2zwu4czl = htmlspecialchars_decode($Vmte2zwu4czl);
		$Vudz4oh4qikult[] = $Vmte2zwu4czl;
		
		if (preg_match('%^(https?)://%', $Vmte2zwu4czl)
		    && empty($_SERVER['HTTP_HOST'])
		    && empty($_SERVER['DOCUMENT_ROOT'])
		) {
			$Vmte2zwu4czldata = parse_url($Vmte2zwu4czl);
			if (empty($Vmte2zwu4czldata['query'])) {
				$Vwfux3adstun = $Vowlaqcocpvp.'://'.$_SERVER['HTTP_HOST'];
				if (strpos($Vmte2zwu4czl, $Vwfux3adstun) === 0) {
				    
				    $Vnwufml5q3npmp = str_replace($Vwfux3adstun, $_SERVER['DOCUMENT_ROOT'], $Vmte2zwu4czl);
				    $Vudz4oh4qikult[] = htmlspecialchars_decode(urldecode($Vnwufml5q3npmp));
				}
			}
		}
		
		if (isset($_SERVER['SCRIPT_URI'])
		    && !preg_match('%^(https?|ftp)://%', $Vxb0ra0fqzn2ile)
		    && !preg_match('%^//%', $Vxb0ra0fqzn2ile)
		) {
		    $Vmte2zwu4czldata = @parse_url($_SERVER['SCRIPT_URI']);
		    return $Vmte2zwu4czldata['scheme'].'://'.$Vmte2zwu4czldata['host'].(($Vxb0ra0fqzn2ile[0] == '/') ? '' : '/').$Vxb0ra0fqzn2ile;
		}
		
		$Vudz4oh4qikult = array_unique($Vudz4oh4qikult);
		
		foreach ($Vudz4oh4qikult as $Vcpl1hmqlbox) {
			$Vnvu1qwc1scc = @file_get_contents($Vcpl1hmqlbox);
			if ($Vnvu1qwc1scc !== false) {
			    return $Vnvu1qwc1scc;
			}
			
			if (!ini_get('allow_url_fopen')
				&& function_exists('curl_init')
				&& preg_match('%^(https?|ftp)://%', $Vcpl1hmqlbox)
			) {
				
				$Vwcmlurixvzgrs = curl_init();
				curl_setopt($Vwcmlurixvzgrs, CURLOPT_URL, $Vcpl1hmqlbox);
				curl_setopt($Vwcmlurixvzgrs, CURLOPT_BINARYTRANSFER, true);
				curl_setopt($Vwcmlurixvzgrs, CURLOPT_FAILONERROR, true);
				curl_setopt($Vwcmlurixvzgrs, CURLOPT_RETURNTRANSFER, true);
				if ((ini_get('open_basedir') == '') && (!ini_get('safe_mode'))) {
				    curl_setopt($Vwcmlurixvzgrs, CURLOPT_FOLLOWLOCATION, true);
				}
				curl_setopt($Vwcmlurixvzgrs, CURLOPT_CONNECTTIMEOUT, 5);
				curl_setopt($Vwcmlurixvzgrs, CURLOPT_TIMEOUT, 30);
				curl_setopt($Vwcmlurixvzgrs, CURLOPT_SSL_VERIFYPEER, false);
				curl_setopt($Vwcmlurixvzgrs, CURLOPT_SSL_VERIFYHOST, false);
				curl_setopt($Vwcmlurixvzgrs, CURLOPT_USERAGENT, 'tc-lib-file');
				$Vnvu1qwc1scc = curl_exec($Vwcmlurixvzgrs);
				curl_close($Vwcmlurixvzgrs);
				if ($Vnvu1qwc1scc !== false) {
					return $Vnvu1qwc1scc;
				}
			}
		}
		return false;
	}

    

	
	public static function _getULONG($Vdk4ylr1xvs5, $Vzl5igrsjgyf) {
		$Vz0hmukhwa4z = unpack('Ni', substr($Vdk4ylr1xvs5, $Vzl5igrsjgyf, 4));
		return $Vz0hmukhwa4z['i'];
	}

	
	public static function _getUSHORT($Vdk4ylr1xvs5, $Vzl5igrsjgyf) {
		$Vz0hmukhwa4z = unpack('ni', substr($Vdk4ylr1xvs5, $Vzl5igrsjgyf, 2));
		return $Vz0hmukhwa4z['i'];
	}

	
	public static function _getSHORT($Vdk4ylr1xvs5, $Vzl5igrsjgyf) {
		$Vz0hmukhwa4z = unpack('si', substr($Vdk4ylr1xvs5, $Vzl5igrsjgyf, 2));
		return $Vz0hmukhwa4z['i'];
	}

	
	public static function _getFWORD($Vdk4ylr1xvs5, $Vzl5igrsjgyf) {
		$Vz0hmukhwa4z = self::_getUSHORT($Vdk4ylr1xvs5, $Vzl5igrsjgyf);
		if ($Vz0hmukhwa4z > 0x7fff) {
			$Vz0hmukhwa4z -= 0x10000;
		}
		return $Vz0hmukhwa4z;
	}

	
	public static function _getUFWORD($Vdk4ylr1xvs5, $Vzl5igrsjgyf) {
		$Vz0hmukhwa4z = self::_getUSHORT($Vdk4ylr1xvs5, $Vzl5igrsjgyf);
		return $Vz0hmukhwa4z;
	}

	
	public static function _getFIXED($Vdk4ylr1xvs5, $Vzl5igrsjgyf) {
		
		$Vetludueqmbt = self::_getFWORD($Vdk4ylr1xvs5, $Vzl5igrsjgyf);
		
		$Vxb0ra0fqzn2 = self::_getUSHORT($Vdk4ylr1xvs5, ($Vzl5igrsjgyf + 2));
		$Vz0hmukhwa4z = floatval(''.$Vetludueqmbt.'.'.$Vxb0ra0fqzn2.'');
		return $Vz0hmukhwa4z;
	}

	
	public static function _getBYTE($Vdk4ylr1xvs5, $Vzl5igrsjgyf) {
		$Vz0hmukhwa4z = unpack('Ci', substr($Vdk4ylr1xvs5, $Vzl5igrsjgyf, 1));
		return $Vz0hmukhwa4z['i'];
	}
	
	public static function rfread($Vwfg24pcbp0v, $Vqfuror45qjm) {
		$Vmfvrsd5xyqh = fread($Vwfg24pcbp0v, $Vqfuror45qjm);
		if ($Vmfvrsd5xyqh === false) {
			return false;
		}
		$Vhsrqjqkqaom = ($Vqfuror45qjm - strlen($Vmfvrsd5xyqh));
		if (($Vhsrqjqkqaom > 0) && !feof($Vwfg24pcbp0v)) {
			$Vmfvrsd5xyqh .= self::rfread($Vwfg24pcbp0v, $Vhsrqjqkqaom);
		}
		return $Vmfvrsd5xyqh;
	}

	
	public static function _freadint($Vxb0ra0fqzn2) {
		$Vudz4oh4qiku = unpack('Ni', fread($Vxb0ra0fqzn2, 4));
		return $Vudz4oh4qiku['i'];
	}

	
	
	public static $Vwfolue42pzj_formats = array(
		
		'A0'                     => array( 2383.937,  3370.394), 
		'A1'                     => array( 1683.780,  2383.937), 
		'A2'                     => array( 1190.551,  1683.780), 
		'A3'                     => array(  841.890,  1190.551), 
		'A4'                     => array(  595.276,   841.890), 
		'A5'                     => array(  419.528,   595.276), 
		'A6'                     => array(  297.638,   419.528), 
		'A7'                     => array(  209.764,   297.638), 
		'A8'                     => array(  147.402,   209.764), 
		'A9'                     => array(  104.882,   147.402), 
		'A10'                    => array(   73.701,   104.882), 
		'A11'                    => array(   51.024,    73.701), 
		'A12'                    => array(   36.850,    51.024), 
		
		'B0'                     => array( 2834.646,  4008.189), 
		'B1'                     => array( 2004.094,  2834.646), 
		'B2'                     => array( 1417.323,  2004.094), 
		'B3'                     => array( 1000.630,  1417.323), 
		'B4'                     => array(  708.661,  1000.630), 
		'B5'                     => array(  498.898,   708.661), 
		'B6'                     => array(  354.331,   498.898), 
		'B7'                     => array(  249.449,   354.331), 
		'B8'                     => array(  175.748,   249.449), 
		'B9'                     => array(  124.724,   175.748), 
		'B10'                    => array(   87.874,   124.724), 
		'B11'                    => array(   62.362,    87.874), 
		'B12'                    => array(   42.520,    62.362), 
		
		'C0'                     => array( 2599.370,  3676.535), 
		'C1'                     => array( 1836.850,  2599.370), 
		'C2'                     => array( 1298.268,  1836.850), 
		'C3'                     => array(  918.425,  1298.268), 
		'C4'                     => array(  649.134,   918.425), 
		'C5'                     => array(  459.213,   649.134), 
		'C6'                     => array(  323.150,   459.213), 
		'C7'                     => array(  229.606,   323.150), 
		'C8'                     => array(  161.575,   229.606), 
		'C9'                     => array(  113.386,   161.575), 
		'C10'                    => array(   79.370,   113.386), 
		'C11'                    => array(   56.693,    79.370), 
		'C12'                    => array(   39.685,    56.693), 
		'C76'                    => array(  229.606,   459.213), 
		'DL'                     => array(  311.811,   623.622), 
		'DLE'                    => array(  323.150,   637.795), 
		'DLX'                    => array(  340.158,   666.142), 
		'DLP'                    => array(  280.630,   595.276), 
		
		'E0'                     => array( 2491.654,  3517.795), 
		'E1'                     => array( 1757.480,  2491.654), 
		'E2'                     => array( 1247.244,  1757.480), 
		'E3'                     => array(  878.740,  1247.244), 
		'E4'                     => array(  623.622,   878.740), 
		'E5'                     => array(  439.370,   623.622), 
		'E6'                     => array(  311.811,   439.370), 
		'E7'                     => array(  221.102,   311.811), 
		'E8'                     => array(  155.906,   221.102), 
		'E9'                     => array(  110.551,   155.906), 
		'E10'                    => array(   76.535,   110.551), 
		'E11'                    => array(   53.858,    76.535), 
		'E12'                    => array(   36.850,    53.858), 
		
		'G0'                     => array( 2715.591,  3838.110), 
		'G1'                     => array( 1919.055,  2715.591), 
		'G2'                     => array( 1357.795,  1919.055), 
		'G3'                     => array(  958.110,  1357.795), 
		'G4'                     => array(  677.480,   958.110), 
		'G5'                     => array(  479.055,   677.480), 
		'G6'                     => array(  337.323,   479.055), 
		'G7'                     => array(  238.110,   337.323), 
		'G8'                     => array(  167.244,   238.110), 
		'G9'                     => array(  119.055,   167.244), 
		'G10'                    => array(   82.205,   119.055), 
		'G11'                    => array(   59.528,    82.205), 
		'G12'                    => array(   39.685,    59.528), 
		
		'RA0'                    => array( 2437.795,  3458.268), 
		'RA1'                    => array( 1729.134,  2437.795), 
		'RA2'                    => array( 1218.898,  1729.134), 
		'RA3'                    => array(  864.567,  1218.898), 
		'RA4'                    => array(  609.449,   864.567), 
		'SRA0'                   => array( 2551.181,  3628.346), 
		'SRA1'                   => array( 1814.173,  2551.181), 
		'SRA2'                   => array( 1275.591,  1814.173), 
		'SRA3'                   => array(  907.087,  1275.591), 
		'SRA4'                   => array(  637.795,   907.087), 
		
		'4A0'                    => array( 4767.874,  6740.787), 
		'2A0'                    => array( 3370.394,  4767.874), 
		
		'A2_EXTRA'               => array( 1261.417,  1754.646), 
		'A3+'                    => array(  932.598,  1369.134), 
		'A3_EXTRA'               => array(  912.756,  1261.417), 
		'A3_SUPER'               => array(  864.567,  1440.000), 
		'SUPER_A3'               => array(  864.567,  1380.472), 
		'A4_EXTRA'               => array(  666.142,   912.756), 
		'A4_SUPER'               => array(  649.134,   912.756), 
		'SUPER_A4'               => array(  643.465,  1009.134), 
		'A4_LONG'                => array(  595.276,   986.457), 
		'F4'                     => array(  595.276,   935.433), 
		'SO_B5_EXTRA'            => array(  572.598,   782.362), 
		'A5_EXTRA'               => array(  490.394,   666.142), 
		
		'ANSI_E'                 => array( 2448.000,  3168.000), 
		'ANSI_D'                 => array( 1584.000,  2448.000), 
		'ANSI_C'                 => array( 1224.000,  1584.000), 
		'ANSI_B'                 => array(  792.000,  1224.000), 
		'ANSI_A'                 => array(  612.000,   792.000), 
		
		'USLEDGER'               => array( 1224.000,   792.000), 
		'LEDGER'                 => array( 1224.000,   792.000), 
		'ORGANIZERK'             => array(  792.000,  1224.000), 
		'BIBLE'                  => array(  792.000,  1224.000), 
		'USTABLOID'              => array(  792.000,  1224.000), 
		'TABLOID'                => array(  792.000,  1224.000), 
		'ORGANIZERM'             => array(  612.000,   792.000), 
		'USLETTER'               => array(  612.000,   792.000), 
		'LETTER'                 => array(  612.000,   792.000), 
		'USLEGAL'                => array(  612.000,  1008.000), 
		'LEGAL'                  => array(  612.000,  1008.000), 
		'GOVERNMENTLETTER'       => array(  576.000,   756.000), 
		'GLETTER'                => array(  576.000,   756.000), 
		'JUNIORLEGAL'            => array(  576.000,   360.000), 
		'JLEGAL'                 => array(  576.000,   360.000), 
		
		'QUADDEMY'               => array( 2520.000,  3240.000), 
		'SUPER_B'                => array(  936.000,  1368.000), 
		'QUARTO'                 => array(  648.000,   792.000), 
		'GOVERNMENTLEGAL'        => array(  612.000,   936.000), 
		'FOLIO'                  => array(  612.000,   936.000), 
		'MONARCH'                => array(  522.000,   756.000), 
		'EXECUTIVE'              => array(  522.000,   756.000), 
		'ORGANIZERL'             => array(  396.000,   612.000), 
		'STATEMENT'              => array(  396.000,   612.000), 
		'MEMO'                   => array(  396.000,   612.000), 
		'FOOLSCAP'               => array(  595.440,   936.000), 
		'COMPACT'                => array(  306.000,   486.000), 
		'ORGANIZERJ'             => array(  198.000,   360.000), 
		
		'P1'                     => array( 1587.402,  2437.795), 
		'P2'                     => array( 1218.898,  1587.402), 
		'P3'                     => array(  793.701,  1218.898), 
		'P4'                     => array(  609.449,   793.701), 
		'P5'                     => array(  396.850,   609.449), 
		'P6'                     => array(  303.307,   396.850), 
		
		'ARCH_E'                 => array( 2592.000,  3456.000), 
		'ARCH_E1'                => array( 2160.000,  3024.000), 
		'ARCH_D'                 => array( 1728.000,  2592.000), 
		'BROADSHEET'             => array( 1296.000,  1728.000), 
		'ARCH_C'                 => array( 1296.000,  1728.000), 
		'ARCH_B'                 => array(  864.000,  1296.000), 
		'ARCH_A'                 => array(  648.000,   864.000), 
		
		
		'ANNENV_A2'              => array(  314.640,   414.000), 
		'ANNENV_A6'              => array(  342.000,   468.000), 
		'ANNENV_A7'              => array(  378.000,   522.000), 
		'ANNENV_A8'              => array(  396.000,   584.640), 
		'ANNENV_A10'             => array(  450.000,   692.640), 
		'ANNENV_SLIM'            => array(  278.640,   638.640), 
		
		'COMMENV_N6_1/4'         => array(  252.000,   432.000), 
		'COMMENV_N6_3/4'         => array(  260.640,   468.000), 
		'COMMENV_N8'             => array(  278.640,   540.000), 
		'COMMENV_N9'             => array(  278.640,   638.640), 
		'COMMENV_N10'            => array(  296.640,   684.000), 
		'COMMENV_N11'            => array(  324.000,   746.640), 
		'COMMENV_N12'            => array(  342.000,   792.000), 
		'COMMENV_N14'            => array(  360.000,   828.000), 
		
		'CATENV_N1'              => array(  432.000,   648.000), 
		'CATENV_N1_3/4'          => array(  468.000,   684.000), 
		'CATENV_N2'              => array(  468.000,   720.000), 
		'CATENV_N3'              => array(  504.000,   720.000), 
		'CATENV_N6'              => array(  540.000,   756.000), 
		'CATENV_N7'              => array(  576.000,   792.000), 
		'CATENV_N8'              => array(  594.000,   810.000), 
		'CATENV_N9_1/2'          => array(  612.000,   756.000), 
		'CATENV_N9_3/4'          => array(  630.000,   810.000), 
		'CATENV_N10_1/2'         => array(  648.000,   864.000), 
		'CATENV_N12_1/2'         => array(  684.000,   900.000), 
		'CATENV_N13_1/2'         => array(  720.000,   936.000), 
		'CATENV_N14_1/4'         => array(  810.000,   882.000), 
		'CATENV_N14_1/2'         => array(  828.000,  1044.000), 
		
		'JIS_B0'                 => array( 2919.685,  4127.244), 
		'JIS_B1'                 => array( 2063.622,  2919.685), 
		'JIS_B2'                 => array( 1459.843,  2063.622), 
		'JIS_B3'                 => array( 1031.811,  1459.843), 
		'JIS_B4'                 => array(  728.504,  1031.811), 
		'JIS_B5'                 => array(  515.906,   728.504), 
		'JIS_B6'                 => array(  362.835,   515.906), 
		'JIS_B7'                 => array(  257.953,   362.835), 
		'JIS_B8'                 => array(  181.417,   257.953), 
		'JIS_B9'                 => array(  127.559,   181.417), 
		'JIS_B10'                => array(   90.709,   127.559), 
		'JIS_B11'                => array(   62.362,    90.709), 
		'JIS_B12'                => array(   45.354,    62.362), 
		
		'PA0'                    => array( 2381.102,  3174.803), 
		'PA1'                    => array( 1587.402,  2381.102), 
		'PA2'                    => array( 1190.551,  1587.402), 
		'PA3'                    => array(  793.701,  1190.551), 
		'PA4'                    => array(  595.276,   793.701), 
		'PA5'                    => array(  396.850,   595.276), 
		'PA6'                    => array(  297.638,   396.850), 
		'PA7'                    => array(  198.425,   297.638), 
		'PA8'                    => array(  147.402,   198.425), 
		'PA9'                    => array(   99.213,   147.402), 
		'PA10'                   => array(   73.701,    99.213), 
		
		'PASSPORT_PHOTO'         => array(   99.213,   127.559), 
		'E'                      => array(  233.858,   340.157), 
		'L'                      => array(  252.283,   360.000), 
		'3R'                     => array(  252.283,   360.000), 
		'KG'                     => array(  289.134,   430.866), 
		'4R'                     => array(  289.134,   430.866), 
		'4D'                     => array(  340.157,   430.866), 
		'2L'                     => array(  360.000,   504.567), 
		'5R'                     => array(  360.000,   504.567), 
		'8P'                     => array(  430.866,   575.433), 
		'6R'                     => array(  430.866,   575.433), 
		'6P'                     => array(  575.433,   720.000), 
		'8R'                     => array(  575.433,   720.000), 
		'6PW'                    => array(  575.433,   864.567), 
		'S8R'                    => array(  575.433,   864.567), 
		'4P'                     => array(  720.000,   864.567), 
		'10R'                    => array(  720.000,   864.567), 
		'4PW'                    => array(  720.000,  1080.000), 
		'S10R'                   => array(  720.000,  1080.000), 
		'11R'                    => array(  790.866,  1009.134), 
		'S11R'                   => array(  790.866,  1224.567), 
		'12R'                    => array(  864.567,  1080.000), 
		'S12R'                   => array(  864.567,  1292.598), 
		
		'NEWSPAPER_BROADSHEET'   => array( 2125.984,  1700.787), 
		'NEWSPAPER_BERLINER'     => array( 1332.283,   892.913), 
		'NEWSPAPER_TABLOID'      => array( 1218.898,   793.701), 
		'NEWSPAPER_COMPACT'      => array( 1218.898,   793.701), 
		
		'CREDIT_CARD'            => array(  153.014,   242.646), 
		'BUSINESS_CARD'          => array(  153.014,   242.646), 
		'BUSINESS_CARD_ISO7810'  => array(  153.014,   242.646), 
		'BUSINESS_CARD_ISO216'   => array(  147.402,   209.764), 
		'BUSINESS_CARD_IT'       => array(  155.906,   240.945), 
		'BUSINESS_CARD_UK'       => array(  155.906,   240.945), 
		'BUSINESS_CARD_FR'       => array(  155.906,   240.945), 
		'BUSINESS_CARD_DE'       => array(  155.906,   240.945), 
		'BUSINESS_CARD_ES'       => array(  155.906,   240.945), 
		'BUSINESS_CARD_CA'       => array(  144.567,   252.283), 
		'BUSINESS_CARD_US'       => array(  144.567,   252.283), 
		'BUSINESS_CARD_JP'       => array(  155.906,   257.953), 
		'BUSINESS_CARD_HK'       => array(  153.071,   255.118), 
		'BUSINESS_CARD_AU'       => array(  155.906,   255.118), 
		'BUSINESS_CARD_DK'       => array(  155.906,   255.118), 
		'BUSINESS_CARD_SE'       => array(  155.906,   255.118), 
		'BUSINESS_CARD_RU'       => array(  141.732,   255.118), 
		'BUSINESS_CARD_CZ'       => array(  141.732,   255.118), 
		'BUSINESS_CARD_FI'       => array(  141.732,   255.118), 
		'BUSINESS_CARD_HU'       => array(  141.732,   255.118), 
		'BUSINESS_CARD_IL'       => array(  141.732,   255.118), 
		
		'4SHEET'                 => array( 2880.000,  4320.000), 
		'6SHEET'                 => array( 3401.575,  5102.362), 
		'12SHEET'                => array( 8640.000,  4320.000), 
		'16SHEET'                => array( 5760.000,  8640.000), 
		'32SHEET'                => array(11520.000,  8640.000), 
		'48SHEET'                => array(17280.000,  8640.000), 
		'64SHEET'                => array(23040.000,  8640.000), 
		'96SHEET'                => array(34560.000,  8640.000), 
		
		
		'EN_EMPEROR'             => array( 3456.000,  5184.000), 
		'EN_ANTIQUARIAN'         => array( 2232.000,  3816.000), 
		'EN_GRAND_EAGLE'         => array( 2070.000,  3024.000), 
		'EN_DOUBLE_ELEPHANT'     => array( 1926.000,  2880.000), 
		'EN_ATLAS'               => array( 1872.000,  2448.000), 
		'EN_COLOMBIER'           => array( 1692.000,  2484.000), 
		'EN_ELEPHANT'            => array( 1656.000,  2016.000), 
		'EN_DOUBLE_DEMY'         => array( 1620.000,  2556.000), 
		'EN_IMPERIAL'            => array( 1584.000,  2160.000), 
		'EN_PRINCESS'            => array( 1548.000,  2016.000), 
		'EN_CARTRIDGE'           => array( 1512.000,  1872.000), 
		'EN_DOUBLE_LARGE_POST'   => array( 1512.000,  2376.000), 
		'EN_ROYAL'               => array( 1440.000,  1800.000), 
		'EN_SHEET'               => array( 1404.000,  1692.000), 
		'EN_HALF_POST'           => array( 1404.000,  1692.000), 
		'EN_SUPER_ROYAL'         => array( 1368.000,  1944.000), 
		'EN_DOUBLE_POST'         => array( 1368.000,  2196.000), 
		'EN_MEDIUM'              => array( 1260.000,  1656.000), 
		'EN_DEMY'                => array( 1260.000,  1620.000), 
		'EN_LARGE_POST'          => array( 1188.000,  1512.000), 
		'EN_COPY_DRAUGHT'        => array( 1152.000,  1440.000), 
		'EN_POST'                => array( 1116.000,  1386.000), 
		'EN_CROWN'               => array( 1080.000,  1440.000), 
		'EN_PINCHED_POST'        => array( 1062.000,  1332.000), 
		'EN_BRIEF'               => array(  972.000,  1152.000), 
		'EN_FOOLSCAP'            => array(  972.000,  1224.000), 
		'EN_SMALL_FOOLSCAP'      => array(  954.000,  1188.000), 
		'EN_POTT'                => array(  900.000,  1080.000), 
		
		'BE_GRAND_AIGLE'         => array( 1984.252,  2948.031), 
		'BE_COLOMBIER'           => array( 1757.480,  2409.449), 
		'BE_DOUBLE_CARRE'        => array( 1757.480,  2607.874), 
		'BE_ELEPHANT'            => array( 1746.142,  2182.677), 
		'BE_PETIT_AIGLE'         => array( 1700.787,  2381.102), 
		'BE_GRAND_JESUS'         => array( 1559.055,  2069.291), 
		'BE_JESUS'               => array( 1530.709,  2069.291), 
		'BE_RAISIN'              => array( 1417.323,  1842.520), 
		'BE_GRAND_MEDIAN'        => array( 1303.937,  1714.961), 
		'BE_DOUBLE_POSTE'        => array( 1233.071,  1601.575), 
		'BE_COQUILLE'            => array( 1218.898,  1587.402), 
		'BE_PETIT_MEDIAN'        => array( 1176.378,  1502.362), 
		'BE_RUCHE'               => array( 1020.472,  1303.937), 
		'BE_PROPATRIA'           => array(  977.953,  1218.898), 
		'BE_LYS'                 => array(  898.583,  1125.354), 
		'BE_POT'                 => array(  870.236,  1088.504), 
		'BE_ROSETTE'             => array(  765.354,   983.622), 
		
		'FR_UNIVERS'             => array( 2834.646,  3685.039), 
		'FR_DOUBLE_COLOMBIER'    => array( 2551.181,  3571.654), 
		'FR_GRANDE_MONDE'        => array( 2551.181,  3571.654), 
		'FR_DOUBLE_SOLEIL'       => array( 2267.717,  3401.575), 
		'FR_DOUBLE_JESUS'        => array( 2154.331,  3174.803), 
		'FR_GRAND_AIGLE'         => array( 2125.984,  3004.724), 
		'FR_PETIT_AIGLE'         => array( 1984.252,  2664.567), 
		'FR_DOUBLE_RAISIN'       => array( 1842.520,  2834.646), 
		'FR_JOURNAL'             => array( 1842.520,  2664.567), 
		'FR_COLOMBIER_AFFICHE'   => array( 1785.827,  2551.181), 
		'FR_DOUBLE_CAVALIER'     => array( 1757.480,  2607.874), 
		'FR_CLOCHE'              => array( 1700.787,  2267.717), 
		'FR_SOLEIL'              => array( 1700.787,  2267.717), 
		'FR_DOUBLE_CARRE'        => array( 1587.402,  2551.181), 
		'FR_DOUBLE_COQUILLE'     => array( 1587.402,  2494.488), 
		'FR_JESUS'               => array( 1587.402,  2154.331), 
		'FR_RAISIN'              => array( 1417.323,  1842.520), 
		'FR_CAVALIER'            => array( 1303.937,  1757.480), 
		'FR_DOUBLE_COURONNE'     => array( 1303.937,  2040.945), 
		'FR_CARRE'               => array( 1275.591,  1587.402), 
		'FR_COQUILLE'            => array( 1247.244,  1587.402), 
		'FR_DOUBLE_TELLIERE'     => array( 1247.244,  1927.559), 
		'FR_DOUBLE_CLOCHE'       => array( 1133.858,  1700.787), 
		'FR_DOUBLE_POT'          => array( 1133.858,  1757.480), 
		'FR_ECU'                 => array( 1133.858,  1474.016), 
		'FR_COURONNE'            => array( 1020.472,  1303.937), 
		'FR_TELLIERE'            => array(  963.780,  1247.244), 
		'FR_POT'                 => array(  878.740,  1133.858), 
	);


	
	public static function getPageSizeFromFormat($Vxb0ra0fqzn2ormat) {
		if (isset(self::$Vwfolue42pzj_formats[$Vxb0ra0fqzn2ormat])) {
			return self::$Vwfolue42pzj_formats[$Vxb0ra0fqzn2ormat];
		}
		return self::$Vwfolue42pzj_formats['A4'];
	}

	
	public static function setPageBoxes($Vwfolue42pzj, $Vvmwm1jsklgc, $V3hw2vzo0s1m, $Vqf0w34ohhwd, $Vd0mc3wouw0g, $Vzxe0j145jkt, $Vjhnyu2hhzgk=false, $Vl0q4noiexi4, $Vwfolue42pzjdim=array()) {
		if (!isset($Vwfolue42pzjdim[$Vwfolue42pzj])) {
			
			$Vwfolue42pzjdim[$Vwfolue42pzj] = array();
		}
		if (!in_array($Vvmwm1jsklgc, self::$Vm4miyzphulz)) {
			return;
		}
		if ($Vjhnyu2hhzgk) {
			$Vl0q4noiexi4 = 1;
		}
		$Vwfolue42pzjdim[$Vwfolue42pzj][$Vvmwm1jsklgc]['llx'] = ($V3hw2vzo0s1m * $Vl0q4noiexi4);
		$Vwfolue42pzjdim[$Vwfolue42pzj][$Vvmwm1jsklgc]['lly'] = ($Vqf0w34ohhwd * $Vl0q4noiexi4);
		$Vwfolue42pzjdim[$Vwfolue42pzj][$Vvmwm1jsklgc]['urx'] = ($Vd0mc3wouw0g * $Vl0q4noiexi4);
		$Vwfolue42pzjdim[$Vwfolue42pzj][$Vvmwm1jsklgc]['ury'] = ($Vzxe0j145jkt * $Vl0q4noiexi4);
		return $Vwfolue42pzjdim;
	}

	
	public static function swapPageBoxCoordinates($Vwfolue42pzj, $Vwfolue42pzjdim) {
		foreach (self::$Vm4miyzphulz as $Vvmwm1jsklgc) {
			
			if (isset($Vwfolue42pzjdim[$Vwfolue42pzj][$Vvmwm1jsklgc])) {
				$Vnwufml5q3npmp = $Vwfolue42pzjdim[$Vwfolue42pzj][$Vvmwm1jsklgc]['llx'];
				$Vwfolue42pzjdim[$Vwfolue42pzj][$Vvmwm1jsklgc]['llx'] = $Vwfolue42pzjdim[$Vwfolue42pzj][$Vvmwm1jsklgc]['lly'];
				$Vwfolue42pzjdim[$Vwfolue42pzj][$Vvmwm1jsklgc]['lly'] = $Vnwufml5q3npmp;
				$Vnwufml5q3npmp = $Vwfolue42pzjdim[$Vwfolue42pzj][$Vvmwm1jsklgc]['urx'];
				$Vwfolue42pzjdim[$Vwfolue42pzj][$Vvmwm1jsklgc]['urx'] = $Vwfolue42pzjdim[$Vwfolue42pzj][$Vvmwm1jsklgc]['ury'];
				$Vwfolue42pzjdim[$Vwfolue42pzj][$Vvmwm1jsklgc]['ury'] = $Vnwufml5q3npmp;
			}
		}
		return $Vwfolue42pzjdim;
	}

	
	public static function getPageLayoutMode($V54xu5mmaerf='SinglePage') {
		switch ($V54xu5mmaerf) {
			case 'default':
			case 'single':
			case 'SinglePage': {
				$V54xu5mmaerf_mode = 'SinglePage';
				break;
			}
			case 'continuous':
			case 'OneColumn': {
				$V54xu5mmaerf_mode = 'OneColumn';
				break;
			}
			case 'two':
			case 'TwoColumnLeft': {
				$V54xu5mmaerf_mode = 'TwoColumnLeft';
				break;
			}
			case 'TwoColumnRight': {
				$V54xu5mmaerf_mode = 'TwoColumnRight';
				break;
			}
			case 'TwoPageLeft': {
				$V54xu5mmaerf_mode = 'TwoPageLeft';
				break;
			}
			case 'TwoPageRight': {
				$V54xu5mmaerf_mode = 'TwoPageRight';
				break;
			}
			default: {
				$V54xu5mmaerf_mode = 'SinglePage';
			}
		}
		return $V54xu5mmaerf_mode;
	}

	
	public static function getPageMode($V0vkydnx50wa='UseNone') {
		switch ($V0vkydnx50wa) {
			case 'UseNone': {
				$Vwfolue42pzj_mode = 'UseNone';
				break;
			}
			case 'UseOutlines': {
				$Vwfolue42pzj_mode = 'UseOutlines';
				break;
			}
			case 'UseThumbs': {
				$Vwfolue42pzj_mode = 'UseThumbs';
				break;
			}
			case 'FullScreen': {
				$Vwfolue42pzj_mode = 'FullScreen';
				break;
			}
			case 'UseOC': {
				$Vwfolue42pzj_mode = 'UseOC';
				break;
			}
			case '': {
				$Vwfolue42pzj_mode = 'UseAttachments';
				break;
			}
			default: {
				$Vwfolue42pzj_mode = 'UseNone';
			}
		}
		return $Vwfolue42pzj_mode;
	}


} 




