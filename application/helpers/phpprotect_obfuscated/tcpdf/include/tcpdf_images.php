<?php





































class TCPDF_IMAGES {

	
	public static $Vovn1psnfk1s = array('clip-rule', 'color', 'color-interpolation', 'color-interpolation-filters', 'color-profile', 'color-rendering', 'cursor', 'direction', 'display', 'fill', 'fill-opacity', 'fill-rule', 'font', 'font-family', 'font-size', 'font-size-adjust', 'font-stretch', 'font-style', 'font-variant', 'font-weight', 'glyph-orientation-horizontal', 'glyph-orientation-vertical', 'image-rendering', 'kerning', 'letter-spacing', 'marker', 'marker-end', 'marker-mid', 'marker-start', 'pointer-events', 'shape-rendering', 'stroke', 'stroke-dasharray', 'stroke-dashoffset', 'stroke-linecap', 'stroke-linejoin', 'stroke-miterlimit', 'stroke-opacity', 'stroke-width', 'text-anchor', 'text-rendering', 'visibility', 'word-spacing', 'writing-mode');



	
	public static function getImageFileType($Vzkdgzwu4ubz, $V1oyuuw2kl4h=array()) {
		$Vvmwm1jsklgc = '';
		if (isset($V1oyuuw2kl4h['mime']) AND !empty($V1oyuuw2kl4h['mime'])) {
			$Vigttjpzjdr2 = explode('/', $V1oyuuw2kl4h['mime']);
			if ((count($Vigttjpzjdr2) > 1) AND ($Vigttjpzjdr2[0] == 'image') AND (!empty($Vigttjpzjdr2[1]))) {
				$Vvmwm1jsklgc = strtolower(trim($Vigttjpzjdr2[1]));
			}
		}
		if (empty($Vvmwm1jsklgc)) {
			$Vuat2s3vfkeo = pathinfo($Vzkdgzwu4ubz);
			if (isset($Vuat2s3vfkeo['extension']) AND (!TCPDF_STATIC::empty_string($Vuat2s3vfkeo['extension']))) {
				$Vvmwm1jsklgc = strtolower(trim($Vuat2s3vfkeo['extension']));
			}
		}
		if ($Vvmwm1jsklgc == 'jpg') {
			$Vvmwm1jsklgc = 'jpeg';
		}
		return $Vvmwm1jsklgc;
	}

	
	public static function setGDImageTransparency($Vdytqlhi3iur, $Vvxdxzauywdb) {
		
		$Vb24k1y1y415 = array('red' => 255, 'green' => 255, 'blue' => 255);
		
		$Vcgbaq2hup3r = imagecolortransparent($Vvxdxzauywdb);
		$Vea0ipbcj10r = imagecolorstotal($Vvxdxzauywdb);
		if (($Vcgbaq2hup3r >= 0) AND ($Vcgbaq2hup3r < $Vea0ipbcj10r)) {
			
			$Vb24k1y1y415 = imagecolorsforindex($Vvxdxzauywdb, $Vcgbaq2hup3r);
		}
		$Vcgbaq2hup3r = imagecolorallocate($Vdytqlhi3iur, $Vb24k1y1y415['red'], $Vb24k1y1y415['green'], $Vb24k1y1y415['blue']);
		imagefill($Vdytqlhi3iur, 0, 0, $Vcgbaq2hup3r);
		imagecolortransparent($Vdytqlhi3iur, $Vcgbaq2hup3r);
		return $Vdytqlhi3iur;
	}

	
	public static function _toPNG($Vvxdxzauywdb, $Vscebjqvat0m) {
		
		imageinterlace($Vvxdxzauywdb, 0);
		
		imagepng($Vvxdxzauywdb, $Vscebjqvat0m);
		
		imagedestroy($Vvxdxzauywdb);
		
		$Veimme4iy001 = self::_parsepng($Vscebjqvat0m);
		
		unlink($Vscebjqvat0m);
		return $Veimme4iy001;
	}

	
	public static function _toJPEG($Vvxdxzauywdb, $Vtlf4k2b0g1p, $Vscebjqvat0m) {
		imagejpeg($Vvxdxzauywdb, $Vscebjqvat0m, $Vtlf4k2b0g1p);
		imagedestroy($Vvxdxzauywdb);
		$Veimme4iy001 = self::_parsejpeg($Vscebjqvat0m);
		
		unlink($Vscebjqvat0m);
		return $Veimme4iy001;
	}

	
	public static function _parsejpeg($Vjluyuwumvof) {
		
		if (!@file_exists($Vjluyuwumvof)) {
			
			$Vqvlqu0gjob3 = str_replace(' ', '%20', $Vjluyuwumvof);
			if (@file_exists($Vqvlqu0gjob3)) {
				$Vjluyuwumvof = $Vqvlqu0gjob3;
			}
		}
		$Vudz4oh4qiku = getimagesize($Vjluyuwumvof);
		if (empty($Vudz4oh4qiku)) {
			
			return false;
		}
		if ($Vudz4oh4qiku[2] != 2) {
			
			return false;
		}
		
		$Vqmktusayb4d = isset($Vudz4oh4qiku['bits']) ? intval($Vudz4oh4qiku['bits']) : 8;
		
		if (!isset($Vudz4oh4qiku['channels'])) {
			$Vqhlfdaeglai = 3;
		} else {
			$Vqhlfdaeglai = intval($Vudz4oh4qiku['channels']);
		}
		
		switch ($Vqhlfdaeglai) {
			case 1: {
				$Vwcmiyedky0m = 'DeviceGray';
				break;
			}
			case 3: {
				$Vwcmiyedky0m = 'DeviceRGB';
				break;
			}
			case 4: {
				$Vwcmiyedky0m = 'DeviceCMYK';
				break;
			}
			default: {
				$Vqhlfdaeglai = 3;
				$Vwcmiyedky0m = 'DeviceRGB';
				break;
			}
		}
		
		$Vmfvrsd5xyqh = file_get_contents($Vjluyuwumvof);
		
		$Vxfbmk2rwmll = array();
		$Vzl5igrsjgyf = 0;
		while (($Vsjw1s1w2nqe = strpos($Vmfvrsd5xyqh, "ICC_PROFILE\0", $Vzl5igrsjgyf)) !== false) {
			
			$Vqfuror45qjm = (TCPDF_STATIC::_getUSHORT($Vmfvrsd5xyqh, ($Vsjw1s1w2nqe - 2)) - 16);
			
			$Vfer5vjhuys4 = max(1, ord($Vmfvrsd5xyqh[($Vsjw1s1w2nqe + 12)]));
			
			$V0gwupkjp11w = max(1, ord($Vmfvrsd5xyqh[($Vsjw1s1w2nqe + 13)]));
			
			$Vxfbmk2rwmll[($Vfer5vjhuys4 - 1)] = substr($Vmfvrsd5xyqh, ($Vsjw1s1w2nqe + 14), $Vqfuror45qjm);
			
			$Vzl5igrsjgyf = ($Vsjw1s1w2nqe + 14 + $Vqfuror45qjm);
		}
		
		if (count($Vxfbmk2rwmll) > 0) {
			ksort($Vxfbmk2rwmll);
			$Vxfbmk2rwmll = implode('', $Vxfbmk2rwmll);
			if ((ord($Vxfbmk2rwmll[36]) != 0x61) OR (ord($Vxfbmk2rwmll[37]) != 0x63) OR (ord($Vxfbmk2rwmll[38]) != 0x73) OR (ord($Vxfbmk2rwmll[39]) != 0x70)) {
				
				$Vxfbmk2rwmll = false;
			}
		} else {
			$Vxfbmk2rwmll = false;
		}
		return array('w' => $Vudz4oh4qiku[0], 'h' => $Vudz4oh4qiku[1], 'ch' => $Vqhlfdaeglai, 'icc' => $Vxfbmk2rwmll, 'cs' => $Vwcmiyedky0m, 'bpc' => $Vqmktusayb4d, 'f' => 'DCTDecode', 'data' => $Vmfvrsd5xyqh);
	}

	
	public static function _parsepng($Vjluyuwumvof) {
		$Vxb0ra0fqzn2 = @fopen($Vjluyuwumvof, 'rb');
		if ($Vxb0ra0fqzn2 === false) {
			
			return false;
		}
		
		if (fread($Vxb0ra0fqzn2, 8) != chr(137).'PNG'.chr(13).chr(10).chr(26).chr(10)) {
			
			return false;
		}
		
		fread($Vxb0ra0fqzn2, 4);
		if (fread($Vxb0ra0fqzn2, 4) != 'IHDR') {
			
			return false;
		}
		$Vim12f51jw5r = TCPDF_STATIC::_freadint($Vxb0ra0fqzn2);
		$Vvjxcwrp4tjq = TCPDF_STATIC::_freadint($Vxb0ra0fqzn2);
		$Vqmktusayb4d = ord(fread($Vxb0ra0fqzn2, 1));
		$Vk3lydjynpac = ord(fread($Vxb0ra0fqzn2, 1));
		if ($Vk3lydjynpac == 0) {
			$Vwcmiyedky0m = 'DeviceGray';
		} elseif ($Vk3lydjynpac == 2) {
			$Vwcmiyedky0m = 'DeviceRGB';
		} elseif ($Vk3lydjynpac == 3) {
			$Vwcmiyedky0m = 'Indexed';
		} else {
			
			fclose($Vxb0ra0fqzn2);
			return 'pngalpha';
		}
		if (ord(fread($Vxb0ra0fqzn2, 1)) != 0) {
			
			fclose($Vxb0ra0fqzn2);
			return false;
		}
		if (ord(fread($Vxb0ra0fqzn2, 1)) != 0) {
			
			fclose($Vxb0ra0fqzn2);
			return false;
		}
		if (ord(fread($Vxb0ra0fqzn2, 1)) != 0) {
			
			fclose($Vxb0ra0fqzn2);
			return false;
		}
		fread($Vxb0ra0fqzn2, 4);
		$Vqhlfdaeglai = ($Vk3lydjynpac == 2 ? 3 : 1);
		$V55pyfz3j3yu = '/DecodeParms << /Predictor 15 /Colors '.$Vqhlfdaeglai.' /BitsPerComponent '.$Vqmktusayb4d.' /Columns '.$Vim12f51jw5r.' >>';
		
		$Vejbfekov02p = '';
		$Vxx0c01hki3r = '';
		$Vmfvrsd5xyqh = '';
		$Vxfbmk2rwmll = false;
		$Vgv45dfhsyuh = TCPDF_STATIC::_freadint($Vxb0ra0fqzn2);
		do {
			$Vvmwm1jsklgc = fread($Vxb0ra0fqzn2, 4);
			if ($Vvmwm1jsklgc == 'PLTE') {
				
				$Vejbfekov02p = TCPDF_STATIC::rfread($Vxb0ra0fqzn2, $Vgv45dfhsyuh);
				fread($Vxb0ra0fqzn2, 4);
			} elseif ($Vvmwm1jsklgc == 'tRNS') {
				
				$Vnwufml5q3np = TCPDF_STATIC::rfread($Vxb0ra0fqzn2, $Vgv45dfhsyuh);
				if ($Vk3lydjynpac == 0) { 
					$Vxx0c01hki3r = array(ord($Vnwufml5q3np[1]));
				} elseif ($Vk3lydjynpac == 2) { 
					$Vxx0c01hki3r = array(ord($Vnwufml5q3np[1]), ord($Vnwufml5q3np[3]), ord($Vnwufml5q3np[5]));
				} else { 
					if ($Vgv45dfhsyuh > 0) {
						$Vxx0c01hki3r = array();
						for ($V55vc4mewy5w = 0; $V55vc4mewy5w < $Vgv45dfhsyuh; ++ $V55vc4mewy5w) {
							$Vxx0c01hki3r[] = ord($Vnwufml5q3np{$V55vc4mewy5w});
						}
					}
				}
				fread($Vxb0ra0fqzn2, 4);
			} elseif ($Vvmwm1jsklgc == 'IDAT') {
				
				$Vmfvrsd5xyqh .= TCPDF_STATIC::rfread($Vxb0ra0fqzn2, $Vgv45dfhsyuh);
				fread($Vxb0ra0fqzn2, 4);
			} elseif ($Vvmwm1jsklgc == 'iCCP') {
				
				$Vq2lrqstguwz = 0;
				while ((ord(fread($Vxb0ra0fqzn2, 1)) != 0) AND ($Vq2lrqstguwz < 80)) {
					++$Vq2lrqstguwz;
				}
				
				if (ord(fread($Vxb0ra0fqzn2, 1)) != 0) {
					
					fclose($Vxb0ra0fqzn2);
					return false;
				}
				
				$Vxfbmk2rwmll = TCPDF_STATIC::rfread($Vxb0ra0fqzn2, ($Vgv45dfhsyuh - $Vq2lrqstguwz - 2));
				
				$Vxfbmk2rwmll = gzuncompress($Vxfbmk2rwmll);
				fread($Vxb0ra0fqzn2, 4);
			} elseif ($Vvmwm1jsklgc == 'IEND') {
				break;
			} else {
				TCPDF_STATIC::rfread($Vxb0ra0fqzn2, $Vgv45dfhsyuh + 4);
			}
			$Vgv45dfhsyuh = TCPDF_STATIC::_freadint($Vxb0ra0fqzn2);
		} while ($Vgv45dfhsyuh);
		if (($Vwcmiyedky0m == 'Indexed') AND (empty($Vejbfekov02p))) {
			
			fclose($Vxb0ra0fqzn2);
			return false;
		}
		fclose($Vxb0ra0fqzn2);
		return array('w' => $Vim12f51jw5r, 'h' => $Vvjxcwrp4tjq, 'ch' => $Vqhlfdaeglai, 'icc' => $Vxfbmk2rwmll, 'cs' => $Vwcmiyedky0m, 'bpc' => $Vqmktusayb4d, 'f' => 'FlateDecode', 'parms' => $V55pyfz3j3yu, 'pal' => $Vejbfekov02p, 'trns' => $Vxx0c01hki3r, 'data' => $Vmfvrsd5xyqh);
	}

} 




