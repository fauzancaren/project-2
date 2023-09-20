<?php




































class TCPDF_FILTERS {

	
	private static $Vfzwkv2jveti = array('ASCIIHexDecode', 'ASCII85Decode', 'LZWDecode', 'FlateDecode', 'RunLengthDecode');



	
	public static function getAvailableFilters() {
		return self::$Vfzwkv2jveti;
	}

	
	public static function decodeFilter($Vq5mneg2nyu1, $Vmfvrsd5xyqh) {
		switch ($Vq5mneg2nyu1) {
			case 'ASCIIHexDecode': {
				return self::decodeFilterASCIIHexDecode($Vmfvrsd5xyqh);
				break;
			}
			case 'ASCII85Decode': {
				return self::decodeFilterASCII85Decode($Vmfvrsd5xyqh);
				break;
			}
			case 'LZWDecode': {
				return self::decodeFilterLZWDecode($Vmfvrsd5xyqh);
				break;
			}
			case 'FlateDecode': {
				return self::decodeFilterFlateDecode($Vmfvrsd5xyqh);
				break;
			}
			case 'RunLengthDecode': {
				return self::decodeFilterRunLengthDecode($Vmfvrsd5xyqh);
				break;
			}
			case 'CCITTFaxDecode': {
				return self::decodeFilterCCITTFaxDecode($Vmfvrsd5xyqh);
				break;
			}
			case 'JBIG2Decode': {
				return self::decodeFilterJBIG2Decode($Vmfvrsd5xyqh);
				break;
			}
			case 'DCTDecode': {
				return self::decodeFilterDCTDecode($Vmfvrsd5xyqh);
				break;
			}
			case 'JPXDecode': {
				return self::decodeFilterJPXDecode($Vmfvrsd5xyqh);
				break;
			}
			case 'Crypt': {
				return self::decodeFilterCrypt($Vmfvrsd5xyqh);
				break;
			}
			default: {
				return self::decodeFilterStandard($Vmfvrsd5xyqh);
				break;
			}
		}
	}

	

	
	public static function decodeFilterStandard($Vmfvrsd5xyqh) {
		return $Vmfvrsd5xyqh;
	}

	
	public static function decodeFilterASCIIHexDecode($Vmfvrsd5xyqh) {
		
		$Vz0fg5xgwwkq = '';
		
		$Vmfvrsd5xyqh = preg_replace('/[\s]/', '', $Vmfvrsd5xyqh);
		
		$Vdxwv23q32am = strpos($Vmfvrsd5xyqh, '>');
		if ($Vdxwv23q32am !== false) {
			
			$Vmfvrsd5xyqh = substr($Vmfvrsd5xyqh, 0, $Vdxwv23q32am);
			$Vdxwv23q32am = true;
		}
		
		$Vmfvrsd5xyqh_length = strlen($Vmfvrsd5xyqh);
		if (($Vmfvrsd5xyqh_length % 2) != 0) {
			
			if ($Vdxwv23q32am) {
				
				$Vmfvrsd5xyqh = substr($Vmfvrsd5xyqh, 0, -1).'0'.substr($Vmfvrsd5xyqh, -1);
			} else {
				self::Error('decodeFilterASCIIHexDecode: invalid code');
			}
		}
		
		if (preg_match('/[^a-fA-F\d]/', $Vmfvrsd5xyqh) > 0) {
			self::Error('decodeFilterASCIIHexDecode: invalid code');
		}
		
		$Vz0fg5xgwwkq = pack('H*', $Vmfvrsd5xyqh);
		return $Vz0fg5xgwwkq;
	}

	
	public static function decodeFilterASCII85Decode($Vmfvrsd5xyqh) {
		
		$Vz0fg5xgwwkq = '';
		
		$Vmfvrsd5xyqh = preg_replace('/[\s]/', '', $Vmfvrsd5xyqh);
		
		if (strpos($Vmfvrsd5xyqh, '<~') !== false) {
			
			$Vmfvrsd5xyqh = substr($Vmfvrsd5xyqh, 2);
		}
		
		$Vdxwv23q32am = strpos($Vmfvrsd5xyqh, '~>');
		if ($Vdxwv23q32am !== false) {
			
			$Vmfvrsd5xyqh = substr($Vmfvrsd5xyqh, 0, $Vdxwv23q32am);
		}
		
		$Vmfvrsd5xyqh_length = strlen($Vmfvrsd5xyqh);
		
		if (preg_match('/[^\x21-\x75,\x74]/', $Vmfvrsd5xyqh) > 0) {
			self::Error('decodeFilterASCII85Decode: invalid code');
		}
		
		$V0b1z53qcuas = chr(0).chr(0).chr(0).chr(0);
		
		$Vzxtcao3n10q = 0;
		$Varmwuhihqwj = 0;
		$V1ov5kevkm4p = array((85*85*85*85), (85*85*85), (85*85), 85, 1);
		$Vei2c0e4hjn5 = ($Vmfvrsd5xyqh_length - 1);
		
		for ($V55vc4mewy5w = 0; $V55vc4mewy5w < $Vmfvrsd5xyqh_length; ++$V55vc4mewy5w) {
			
			$Vq3d4zu0txr3 = ord($Vmfvrsd5xyqh[$V55vc4mewy5w]);
			if ($Vq3d4zu0txr3 == 122) { 
				if ($Vzxtcao3n10q == 0) {
					$Vz0fg5xgwwkq .= $V0b1z53qcuas;
				} else {
					self::Error('decodeFilterASCII85Decode: invalid code');
				}
			} else {
				
				$Varmwuhihqwj += (($Vq3d4zu0txr3 - 33) * $V1ov5kevkm4p[$Vzxtcao3n10q]);
				if ($Vzxtcao3n10q == 4) {
					$Vz0fg5xgwwkq .= chr($Varmwuhihqwj >> 24).chr($Varmwuhihqwj >> 16).chr($Varmwuhihqwj >> 8).chr($Varmwuhihqwj);
					$Varmwuhihqwj = 0;
					$Vzxtcao3n10q = 0;
				} else {
					++$Vzxtcao3n10q;
				}
			}
		}
		if ($Vzxtcao3n10q > 1) {
			$Varmwuhihqwj += $V1ov5kevkm4p[($Vzxtcao3n10q - 1)];
		}
		
		switch ($Vzxtcao3n10q) {
			case 4: {
				$Vz0fg5xgwwkq .= chr($Varmwuhihqwj >> 24).chr($Varmwuhihqwj >> 16).chr($Varmwuhihqwj >> 8);
				break;
			}
			case 3: {
				$Vz0fg5xgwwkq .= chr($Varmwuhihqwj >> 24).chr($Varmwuhihqwj >> 16);
				break;
			}
			case 2: {
				$Vz0fg5xgwwkq .= chr($Varmwuhihqwj >> 24);
				break;
			}
			case 1: {
				self::Error('decodeFilterASCII85Decode: invalid code');
				break;
			}
		}
		return $Vz0fg5xgwwkq;
	}

	
	public static function decodeFilterLZWDecode($Vmfvrsd5xyqh) {
		
		$Vz0fg5xgwwkq = '';
		
		$Vmfvrsd5xyqh_length = strlen($Vmfvrsd5xyqh);
		
		$Vzlmtqmdslhr = '';
		for ($V55vc4mewy5w = 0; $V55vc4mewy5w < $Vmfvrsd5xyqh_length; ++$V55vc4mewy5w) {
			$Vzlmtqmdslhr .= sprintf('%08b', ord($Vmfvrsd5xyqh{$V55vc4mewy5w}));
		}
		
		$Vmfvrsd5xyqh_length = strlen($Vzlmtqmdslhr);
		
		$Vn3xrkwvgwaz = 9;
		
		$Vhl1evieo5zv = 258;
		
		$Vk3iju3ocepa = array();
		for ($V55vc4mewy5w = 0; $V55vc4mewy5w < 256; ++$V55vc4mewy5w) {
			$Vk3iju3ocepa[$V55vc4mewy5w] = chr($V55vc4mewy5w);
		}
		
		$Vmknsa1aqwy3 = 0;
		
		while (($Vmfvrsd5xyqh_length > 0) AND (($V55vc4mewy5wndex = bindec(substr($Vzlmtqmdslhr, 0, $Vn3xrkwvgwaz))) != 257)) {
			
			$Vzlmtqmdslhr = substr($Vzlmtqmdslhr, $Vn3xrkwvgwaz);
			
			$Vmfvrsd5xyqh_length -= $Vn3xrkwvgwaz;
			if ($V55vc4mewy5wndex == 256) { 
				
				$Vn3xrkwvgwaz = 9;
				
				$Vhl1evieo5zv = 258;
				$Vmknsa1aqwy3 = 256;
				
				$Vk3iju3ocepa = array();
				for ($V55vc4mewy5w = 0; $V55vc4mewy5w < 256; ++$V55vc4mewy5w) {
					$Vk3iju3ocepa[$V55vc4mewy5w] = chr($V55vc4mewy5w);
				}
			} elseif ($Vmknsa1aqwy3 == 256) {
				
				$Vz0fg5xgwwkq .= $Vk3iju3ocepa[$V55vc4mewy5wndex];
				$Vmknsa1aqwy3 = $V55vc4mewy5wndex;
			} else {
				
				if ($V55vc4mewy5wndex < $Vhl1evieo5zv) {
					
					$Vz0fg5xgwwkq .= $Vk3iju3ocepa[$V55vc4mewy5wndex];
					$V5ctdneoxgpf = $Vk3iju3ocepa[$Vmknsa1aqwy3].$Vk3iju3ocepa[$V55vc4mewy5wndex][0];
					
					$Vmknsa1aqwy3 = $V55vc4mewy5wndex;
				} else {
					
					$V5ctdneoxgpf = $Vk3iju3ocepa[$Vmknsa1aqwy3].$Vk3iju3ocepa[$Vmknsa1aqwy3][0];
					$Vz0fg5xgwwkq .= $V5ctdneoxgpf;
				}
				
				$Vk3iju3ocepa[$Vhl1evieo5zv] = $V5ctdneoxgpf;
				++$Vhl1evieo5zv;
				
				if ($Vhl1evieo5zv == 2047) {
					$Vn3xrkwvgwaz = 12;
				} elseif ($Vhl1evieo5zv == 1023) {
					$Vn3xrkwvgwaz = 11;
				} elseif ($Vhl1evieo5zv == 511) {
					$Vn3xrkwvgwaz = 10;
				}
			}
		}
		return $Vz0fg5xgwwkq;
	}

	
	public static function decodeFilterFlateDecode($Vmfvrsd5xyqh) {
		
		$Vz0fg5xgwwkq = @gzuncompress($Vmfvrsd5xyqh);
		if ($Vz0fg5xgwwkq === false) {
			self::Error('decodeFilterFlateDecode: invalid code');
		}
		return $Vz0fg5xgwwkq;
	}

	
	public static function decodeFilterRunLengthDecode($Vmfvrsd5xyqh) {
		
		$Vz0fg5xgwwkq = '';
		
		$Vmfvrsd5xyqh_length = strlen($Vmfvrsd5xyqh);
		$V55vc4mewy5w = 0;
		while($V55vc4mewy5w < $Vmfvrsd5xyqh_length) {
			
			$V4wogxbjjq5y = ord($Vmfvrsd5xyqh{$V55vc4mewy5w});
			if ($V4wogxbjjq5y == 128) {
				
				break;
			} elseif ($V4wogxbjjq5y < 128) {
				
				
				$Vz0fg5xgwwkq .= substr($Vmfvrsd5xyqh, ($V55vc4mewy5w + 1), ($V4wogxbjjq5y + 1));
				
				$V55vc4mewy5w += ($V4wogxbjjq5y + 2);
			} else {
				
				
				$Vz0fg5xgwwkq .= str_repeat($Vmfvrsd5xyqh{($V55vc4mewy5w + 1)}, (257 - $V4wogxbjjq5y));
				
				$V55vc4mewy5w += 2;
			}
		}
		return $Vz0fg5xgwwkq;
	}

	
	public static function decodeFilterCCITTFaxDecode($Vmfvrsd5xyqh) {
		self::Error('~decodeFilterCCITTFaxDecode: this method has not been yet implemented');
		
	}

	
	public static function decodeFilterJBIG2Decode($Vmfvrsd5xyqh) {
		self::Error('~decodeFilterJBIG2Decode: this method has not been yet implemented');
		
	}

	
	public static function decodeFilterDCTDecode($Vmfvrsd5xyqh) {
		self::Error('~decodeFilterDCTDecode: this method has not been yet implemented');
		
	}

	
	public static function decodeFilterJPXDecode($Vmfvrsd5xyqh) {
		self::Error('~decodeFilterJPXDecode: this method has not been yet implemented');
		
	}

	
	public static function decodeFilterCrypt($Vmfvrsd5xyqh) {
		self::Error('~decodeFilterCrypt: this method has not been yet implemented');
		
	}

	

	
	public static function Error($Vigzdfzehwux) {
		throw new Exception('TCPDF_PARSER ERROR: '.$Vigzdfzehwux);
	}

} 




