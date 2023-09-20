<?php



































class TCPDF_FONTS {

	
	protected static $Vtjog51fyqdp = array();

	
	public static function addTTFfont($V2ibkem4p44j, $V30bqo0jepf5='', $V4bajg5xhoka='', $Vqwgb1lkvfzg=32, $V21kx0kn5th2='', $V2jb4qzr5d0d=3, $V4bajg5xhokaid=1, $Vnjwkryzm330=false, $Vzf44w4bnvh4=false) {
		if (!file_exists($V2ibkem4p44j)) {
			
			return false;
		}
		
		$Vkodzpbdkazx = array();
		
		$Vfz0gvxareg3 = pathinfo($V2ibkem4p44j);
		if (!isset($Vfz0gvxareg3['filename'])) {
			$Vfz0gvxareg3['filename'] = substr($Vfz0gvxareg3['basename'], 0, -(strlen($Vfz0gvxareg3['extension']) + 1));
		}
		$Va5ds32cmdad = strtolower($Vfz0gvxareg3['filename']);
		$Va5ds32cmdad = preg_replace('/[^a-z0-9_]/', '', $Va5ds32cmdad);
		$Vlf3gc3prjyc  = array('bold', 'oblique', 'italic', 'regular');
		$Vch1p1nsheoh = array('b', 'i', 'i', '');
		$Va5ds32cmdad = str_replace($Vlf3gc3prjyc, $Vch1p1nsheoh, $Va5ds32cmdad);
		if (empty($Va5ds32cmdad)) {
			
			$Va5ds32cmdad = 'tcpdffont';
		}
		
		if (empty($V21kx0kn5th2)) {
			$V21kx0kn5th2 = self::_getfontpath();
		}
		
		if (@file_exists($V21kx0kn5th2.$Va5ds32cmdad.'.php')) {
			
			return $Va5ds32cmdad;
		}
		$Vkodzpbdkazx['file'] = $Va5ds32cmdad;
		$Vkodzpbdkazx['ctg'] = $Va5ds32cmdad.'.ctg.z';
		
		$Voc1qigl3k5y = file_get_contents($V2ibkem4p44j);
		$Vkodzpbdkazx['originalsize'] = strlen($Voc1qigl3k5y);
		
		if (empty($V30bqo0jepf5)) {
			if (TCPDF_STATIC::_getULONG($Voc1qigl3k5y, 0) == 0x10000) {
				
				$V30bqo0jepf5 = 'TrueTypeUnicode';
			} elseif (substr($Voc1qigl3k5y, 0, 4) == 'OTTO') {
				
				
				return false;
			} else {
				
				$V30bqo0jepf5 = 'Type1';
			}
		}
		
		switch ($V30bqo0jepf5) {
			case 'CID0CT':
			case 'CID0CS':
			case 'CID0KR':
			case 'CID0JP': {
				$Vkodzpbdkazx['type'] = 'cidfont0';
				break;
			}
			case 'Type1': {
				$Vkodzpbdkazx['type'] = 'Type1';
				if (empty($V4bajg5xhoka) AND (($Vqwgb1lkvfzg & 4) == 0)) {
					$V4bajg5xhoka = 'cp1252';
				}
				break;
			}
			case 'TrueType': {
				$Vkodzpbdkazx['type'] = 'TrueType';
				break;
			}
			case 'TrueTypeUnicode':
			default: {
				$Vkodzpbdkazx['type'] = 'TrueTypeUnicode';
				break;
			}
		}
		
		$Vkodzpbdkazx['enc'] = preg_replace('/[^A-Za-z0-9_\-]/', '', $V4bajg5xhoka);
		$Vkodzpbdkazx['diff'] = '';
		if (($Vkodzpbdkazx['type'] == 'TrueType') OR ($Vkodzpbdkazx['type'] == 'Type1')) {
			if (!empty($V4bajg5xhoka) AND ($V4bajg5xhoka != 'cp1252') AND isset(TCPDF_FONT_DATA::$V4bajg5xhokamap[$V4bajg5xhoka])) {
				
				$V4bajg5xhoka_ref = TCPDF_FONT_DATA::$V4bajg5xhokamap['cp1252'];
				$V4bajg5xhoka_target = TCPDF_FONT_DATA::$V4bajg5xhokamap[$V4bajg5xhoka];
				$Vpkspczcqpag = 0;
				for ($V55vc4mewy5w = 32; $V55vc4mewy5w <= 255; ++$V55vc4mewy5w) {
					if ($V4bajg5xhoka_target[$V55vc4mewy5w] != $V4bajg5xhoka_ref[$V55vc4mewy5w]) {
						if ($V55vc4mewy5w != ($Vpkspczcqpag + 1)) {
							$Vkodzpbdkazx['diff'] .= $V55vc4mewy5w.' ';
						}
						$Vpkspczcqpag = $V55vc4mewy5w;
						$Vkodzpbdkazx['diff'] .= '/'.$V4bajg5xhoka_target[$V55vc4mewy5w].' ';
					}
				}
			}
		}
		
		if ($Vkodzpbdkazx['type'] == 'Type1') {
			
			
			$Vudz4oh4qiku = unpack('Cmarker/Ctype/Vsize', substr($Voc1qigl3k5y, 0, 6));
			if ($Vudz4oh4qiku['marker'] != 128) {
				
				return false;
			}
			$Vkodzpbdkazx['size1'] = $Vudz4oh4qiku['size'];
			$Vmfvrsd5xyqh = substr($Voc1qigl3k5y, 6, $Vkodzpbdkazx['size1']);
			
			$Vudz4oh4qiku = unpack('Cmarker/Ctype/Vsize', substr($Voc1qigl3k5y, (6 + $Vkodzpbdkazx['size1']), 6));
			if ($Vudz4oh4qiku['marker'] != 128) {
				
				return false;
			}
			$Vkodzpbdkazx['size2'] = $Vudz4oh4qiku['size'];
			$V4bajg5xhokarypted = substr($Voc1qigl3k5y, (12 + $Vkodzpbdkazx['size1']), $Vkodzpbdkazx['size2']);
			$Vmfvrsd5xyqh .= $V4bajg5xhokarypted;
			
			$Vkodzpbdkazx['file'] .= '.z';
			$V2n2znk5umlx = TCPDF_STATIC::fopenLocal($V21kx0kn5th2.$Vkodzpbdkazx['file'], 'wb');
			fwrite($V2n2znk5umlx, gzcompress($Vmfvrsd5xyqh));
			fclose($V2n2znk5umlx);
			
			$Vkodzpbdkazx['Flags'] = $Vqwgb1lkvfzg;
			preg_match ('#/FullName[\s]*\(([^\)]*)#', $Voc1qigl3k5y, $Vfw2yccohots);
			$Vkodzpbdkazx['name'] = preg_replace('/[^a-zA-Z0-9_\-]/', '', $Vfw2yccohots[1]);
			preg_match('#/FontBBox[\s]*{([^}]*)#', $Voc1qigl3k5y, $Vfw2yccohots);
			$Vkodzpbdkazx['bbox'] = trim($Vfw2yccohots[1]);
			$Vfxzm3b5ea0n = explode(' ', $Vkodzpbdkazx['bbox']);
			$Vkodzpbdkazx['Ascent'] = intval($Vfxzm3b5ea0n[3]);
			$Vkodzpbdkazx['Descent'] = intval($Vfxzm3b5ea0n[1]);
			preg_match('#/ItalicAngle[\s]*([0-9\+\-]*)#', $Voc1qigl3k5y, $Vfw2yccohots);
			$Vkodzpbdkazx['italicAngle'] = intval($Vfw2yccohots[1]);
			if ($Vkodzpbdkazx['italicAngle'] != 0) {
				$Vkodzpbdkazx['Flags'] |= 64;
			}
			preg_match('#/UnderlinePosition[\s]*([0-9\+\-]*)#', $Voc1qigl3k5y, $Vfw2yccohots);
			$Vkodzpbdkazx['underlinePosition'] = intval($Vfw2yccohots[1]);
			preg_match('#/UnderlineThickness[\s]*([0-9\+\-]*)#', $Voc1qigl3k5y, $Vfw2yccohots);
			$Vkodzpbdkazx['underlineThickness'] = intval($Vfw2yccohots[1]);
			preg_match('#/isFixedPitch[\s]*([^\s]*)#', $Voc1qigl3k5y, $Vfw2yccohots);
			if ($Vfw2yccohots[1] == 'true') {
				$Vkodzpbdkazx['Flags'] |= 1;
			}
			
			$V55vc4mewy5wmap = array();
			if (preg_match_all('#dup[\s]([0-9]+)[\s]*/([^\s]*)[\s]put#sU', $Voc1qigl3k5y, $V1pgsevgi5t1, PREG_SET_ORDER) > 0) {
				foreach ($V1pgsevgi5t1 as $Vz0hmukhwa4z) {
					$V55vc4mewy5wmap[$Vz0hmukhwa4z[2]] = $Vz0hmukhwa4z[1];
				}
			}
			
			$Vfhkt4vbeual = 55665; 
			$V3tuy3pij0xv = 52845;
			$Vhetsuyddb5h = 22719;
			$Vjpzno0qgb5l = strlen($V4bajg5xhokarypted);
			$Vlrzv3z1wjln = '';
			for ($V55vc4mewy5w = 0; $V55vc4mewy5w < $Vjpzno0qgb5l; ++$V55vc4mewy5w) {
				$Vgtgjzfuu5iy = ord($V4bajg5xhokarypted[$V55vc4mewy5w]);
				$Vlrzv3z1wjln .= chr($Vgtgjzfuu5iy ^ ($Vfhkt4vbeual >> 8));
				$Vfhkt4vbeual = ((($Vgtgjzfuu5iy + $Vfhkt4vbeual) * $V3tuy3pij0xv + $Vhetsuyddb5h) % 65536);
			}
			if (preg_match('#/ForceBold[\s]*([^\s]*)#', $Vlrzv3z1wjln, $Vfw2yccohots) > 0) {
				if ($Vfw2yccohots[1] == 'true') {
					$Vkodzpbdkazx['Flags'] |= 0x40000;
				}
			}
			if (preg_match('#/StdVW[\s]*\[([^\]]*)#', $Vlrzv3z1wjln, $Vfw2yccohots) > 0) {
				$Vkodzpbdkazx['StemV'] = intval($Vfw2yccohots[1]);
			} else {
				$Vkodzpbdkazx['StemV'] = 70;
			}
			if (preg_match('#/StdHW[\s]*\[([^\]]*)#', $Vlrzv3z1wjln, $Vfw2yccohots) > 0) {
				$Vkodzpbdkazx['StemH'] = intval($Vfw2yccohots[1]);
			} else {
				$Vkodzpbdkazx['StemH'] = 30;
			}
			if (preg_match('#/BlueValues[\s]*\[([^\]]*)#', $Vlrzv3z1wjln, $Vfw2yccohots) > 0) {
				$Vfxzm3b5ea0n = explode(' ', $Vfw2yccohots[1]);
				if (count($Vfxzm3b5ea0n) >= 6) {
					$Vz0hmukhwa4z1 = intval($Vfxzm3b5ea0n[2]);
					$Vz0hmukhwa4z2 = intval($Vfxzm3b5ea0n[4]);
					if ($Vz0hmukhwa4z1 <= $Vz0hmukhwa4z2) {
						$Vkodzpbdkazx['XHeight'] = $Vz0hmukhwa4z1;
						$Vkodzpbdkazx['CapHeight'] = $Vz0hmukhwa4z2;
					} else {
						$Vkodzpbdkazx['XHeight'] = $Vz0hmukhwa4z2;
						$Vkodzpbdkazx['CapHeight'] = $Vz0hmukhwa4z1;
					}
				} else {
					$Vkodzpbdkazx['XHeight'] = 450;
					$Vkodzpbdkazx['CapHeight'] = 700;
				}
			} else {
				$Vkodzpbdkazx['XHeight'] = 450;
				$Vkodzpbdkazx['CapHeight'] = 700;
			}
			
			if (preg_match('#/lenIV[\s]*([0-9]*)#', $Vlrzv3z1wjln, $Vfw2yccohots) > 0) {
				$Vrusmjjylgtz = intval($Vfw2yccohots[1]);
			} else {
				$Vrusmjjylgtz = 4;
			}
			$Vkodzpbdkazx['Leading'] = 0;
			
			$Vlrzv3z1wjln = substr($Vlrzv3z1wjln, (strpos($Vlrzv3z1wjln, '/CharStrings') + 1));
			preg_match_all('#/([A-Za-z0-9\.]*)[\s][0-9]+[\s]RD[\s](.*)[\s]ND#sU', $Vlrzv3z1wjln, $Vfw2yccohots, PREG_SET_ORDER);
			if (!empty($V4bajg5xhoka) AND isset(TCPDF_FONT_DATA::$V4bajg5xhokamap[$V4bajg5xhoka])) {
				$V4bajg5xhoka_map = TCPDF_FONT_DATA::$V4bajg5xhokamap[$V4bajg5xhoka];
			} else {
				$V4bajg5xhoka_map = false;
			}
			$Vkodzpbdkazx['cw'] = '';
			$Vkodzpbdkazx['MaxWidth'] = 0;
			$Vx5oqwsqgfrv = array();
			foreach ($Vfw2yccohots as $Vl0q4noiexi4 => $Vz0hmukhwa4z) {
				$Vanrq3megkrt = 0;
				if (isset($V55vc4mewy5wmap[$Vz0hmukhwa4z[1]])) {
					$Vanrq3megkrt = $V55vc4mewy5wmap[$Vz0hmukhwa4z[1]];
				} elseif ($V4bajg5xhoka_map !== false) {
					$Vanrq3megkrt = array_search($Vz0hmukhwa4z[1], $V4bajg5xhoka_map);
					if ($Vanrq3megkrt === false) {
						$Vanrq3megkrt = 0;
					} elseif ($Vanrq3megkrt > 1000) {
						$Vanrq3megkrt -= 1000;
					}
				}
				
				$Vfhkt4vbeual = 4330; 
				$V3tuy3pij0xv = 52845;
				$Vhetsuyddb5h = 22719;
				$Vqbqg0leiyed = $Vz0hmukhwa4z[2];
				$V2vhbymsmgky = strlen($Vqbqg0leiyed);
				$Vnrxhdqhm0ve = array();
				for ($V55vc4mewy5w = 0; $V55vc4mewy5w < $V2vhbymsmgky; ++$V55vc4mewy5w) {
					$Vgtgjzfuu5iy = ord($Vqbqg0leiyed[$V55vc4mewy5w]);
					$Vnrxhdqhm0ve[] = ($Vgtgjzfuu5iy ^ ($Vfhkt4vbeual >> 8));
					$Vfhkt4vbeual = ((($Vgtgjzfuu5iy + $Vfhkt4vbeual) * $V3tuy3pij0xv + $Vhetsuyddb5h) % 65536);
				}
				
				$Vqbqg0leiyedec = array();
				$V3walx2wjo4c = 0;
				$V55vc4mewy5w = $Vrusmjjylgtz;
				while ($V55vc4mewy5w < $V2vhbymsmgky) {
					if ($Vnrxhdqhm0ve[$V55vc4mewy5w] < 32) {
						$Vqbqg0leiyedec[$V3walx2wjo4c] = $Vnrxhdqhm0ve[$V55vc4mewy5w];
						if (($V3walx2wjo4c > 0) AND ($Vqbqg0leiyedec[$V3walx2wjo4c] == 13)) {
							
							$Vx5oqwsqgfrv[$Vanrq3megkrt] = $Vqbqg0leiyedec[($V3walx2wjo4c - 1)];
						}
						++$V55vc4mewy5w;
					} elseif (($Vnrxhdqhm0ve[$V55vc4mewy5w] >= 32) AND ($Vnrxhdqhm0ve[$V55vc4mewy5w] <= 246)) {
						$Vqbqg0leiyedec[$V3walx2wjo4c] = ($Vnrxhdqhm0ve[$V55vc4mewy5w] - 139);
						++$V55vc4mewy5w;
					} elseif (($Vnrxhdqhm0ve[$V55vc4mewy5w] >= 247) AND ($Vnrxhdqhm0ve[$V55vc4mewy5w] <= 250)) {
						$Vqbqg0leiyedec[$V3walx2wjo4c] = ((($Vnrxhdqhm0ve[$V55vc4mewy5w] - 247) * 256) + $Vnrxhdqhm0ve[($V55vc4mewy5w + 1)] + 108);
						$V55vc4mewy5w += 2;
					} elseif (($Vnrxhdqhm0ve[$V55vc4mewy5w] >= 251) AND ($Vnrxhdqhm0ve[$V55vc4mewy5w] <= 254)) {
						$Vqbqg0leiyedec[$V3walx2wjo4c] = ((-($Vnrxhdqhm0ve[$V55vc4mewy5w] - 251) * 256) - $Vnrxhdqhm0ve[($V55vc4mewy5w + 1)] - 108);
						$V55vc4mewy5w += 2;
					} elseif ($Vnrxhdqhm0ve[$V55vc4mewy5w] == 255) {
						$V1ncuzyawkrn = chr($Vnrxhdqhm0ve[($V55vc4mewy5w + 1)]).chr($Vnrxhdqhm0ve[($V55vc4mewy5w + 2)]).chr($Vnrxhdqhm0ve[($V55vc4mewy5w + 3)]).chr($Vnrxhdqhm0ve[($V55vc4mewy5w + 4)]);
						$Vz0hmukhwa4zsval = unpack('li', $V1ncuzyawkrn);
						$Vqbqg0leiyedec[$V3walx2wjo4c] = $Vz0hmukhwa4zsval['i'];
						$V55vc4mewy5w += 5;
					}
					++$V3walx2wjo4c;
				}
			} 
			$Vkodzpbdkazx['MissingWidth'] = $Vx5oqwsqgfrv[0];
			$Vkodzpbdkazx['MaxWidth'] = $Vkodzpbdkazx['MissingWidth'];
			$Vkodzpbdkazx['AvgWidth'] = 0;
			
			for ($Vanrq3megkrt = 0; $Vanrq3megkrt <= 255; ++$Vanrq3megkrt) {
				if (isset($Vx5oqwsqgfrv[$Vanrq3megkrt])) {
					if ($Vx5oqwsqgfrv[$Vanrq3megkrt] > $Vkodzpbdkazx['MaxWidth']) {
						$Vkodzpbdkazx['MaxWidth'] = $Vx5oqwsqgfrv[$Vanrq3megkrt];
					}
					$Vkodzpbdkazx['AvgWidth'] += $Vx5oqwsqgfrv[$Vanrq3megkrt];
					$Vkodzpbdkazx['cw'] .= ','.$Vanrq3megkrt.'=>'.$Vx5oqwsqgfrv[$Vanrq3megkrt];
				} else {
					$Vkodzpbdkazx['cw'] .= ','.$Vanrq3megkrt.'=>'.$Vkodzpbdkazx['MissingWidth'];
				}
			}
			$Vkodzpbdkazx['AvgWidth'] = round($Vkodzpbdkazx['AvgWidth'] / count($Vx5oqwsqgfrv));
		} else {
			
			$Vzl5igrsjgyf = 0; 
			if (TCPDF_STATIC::_getULONG($Voc1qigl3k5y, $Vzl5igrsjgyf) != 0x10000) {
				
				return false;
			}
			if ($Vkodzpbdkazx['type'] != 'cidfont0') {
				if ($Vzf44w4bnvh4) {
					
					symlink($V2ibkem4p44j, $V21kx0kn5th2.$Vkodzpbdkazx['file']);
				} else {
					
					$Vkodzpbdkazx['file'] .= '.z';
					$V2n2znk5umlx = TCPDF_STATIC::fopenLocal($V21kx0kn5th2.$Vkodzpbdkazx['file'], 'wb');
					fwrite($V2n2znk5umlx, gzcompress($Voc1qigl3k5y));
					fclose($V2n2znk5umlx);
				}
			}
			$Vzl5igrsjgyf += 4;
			
			$V3moem4whahn = TCPDF_STATIC::_getUSHORT($Voc1qigl3k5y, $Vzl5igrsjgyf);
			$Vzl5igrsjgyf += 2;
			
			$Vzl5igrsjgyf += 6;
			
			$Vntfufcb4vaz = array();
			
			for ($V55vc4mewy5w = 0; $V55vc4mewy5w < $V3moem4whahn; ++$V55vc4mewy5w) {
				
				$Vxpg0kmcipfu = substr($Voc1qigl3k5y, $Vzl5igrsjgyf, 4);
				$Vzl5igrsjgyf += 4;
				$Vntfufcb4vaz[$Vxpg0kmcipfu] = array();
				$Vntfufcb4vaz[$Vxpg0kmcipfu]['checkSum'] = TCPDF_STATIC::_getULONG($Voc1qigl3k5y, $Vzl5igrsjgyf);
				$Vzl5igrsjgyf += 4;
				$Vntfufcb4vaz[$Vxpg0kmcipfu]['offset'] = TCPDF_STATIC::_getULONG($Voc1qigl3k5y, $Vzl5igrsjgyf);
				$Vzl5igrsjgyf += 4;
				$Vntfufcb4vaz[$Vxpg0kmcipfu]['length'] = TCPDF_STATIC::_getULONG($Voc1qigl3k5y, $Vzl5igrsjgyf);
				$Vzl5igrsjgyf += 4;
			}
			
			$Vzl5igrsjgyf = $Vntfufcb4vaz['head']['offset'] + 12;
			if (TCPDF_STATIC::_getULONG($Voc1qigl3k5y, $Vzl5igrsjgyf) != 0x5F0F3CF5) {
				
				return false;
			}
			$Vzl5igrsjgyf += 4;
			$Vzl5igrsjgyf += 2; 
			
			$Vkodzpbdkazx['unitsPerEm'] = TCPDF_STATIC::_getUSHORT($Voc1qigl3k5y, $Vzl5igrsjgyf);
			$Vzl5igrsjgyf += 2;
			
			$Vvpbfwtle32p = (1000 / $Vkodzpbdkazx['unitsPerEm']);
			$Vzl5igrsjgyf += 16; 
			$V2yru1wghjaj = round(TCPDF_STATIC::_getFWORD($Voc1qigl3k5y, $Vzl5igrsjgyf) * $Vvpbfwtle32p);
			$Vzl5igrsjgyf += 2;
			$Vtnj1fee0yl5 = round(TCPDF_STATIC::_getFWORD($Voc1qigl3k5y, $Vzl5igrsjgyf) * $Vvpbfwtle32p);
			$Vzl5igrsjgyf += 2;
			$Varsf13ijr1a = round(TCPDF_STATIC::_getFWORD($Voc1qigl3k5y, $Vzl5igrsjgyf) * $Vvpbfwtle32p);
			$Vzl5igrsjgyf += 2;
			$Vu4ra0c3hn41 = round(TCPDF_STATIC::_getFWORD($Voc1qigl3k5y, $Vzl5igrsjgyf) * $Vvpbfwtle32p);
			$Vzl5igrsjgyf += 2;
			$Vkodzpbdkazx['bbox'] = ''.$V2yru1wghjaj.' '.$Vtnj1fee0yl5.' '.$Varsf13ijr1a.' '.$Vu4ra0c3hn41.'';
			$Vyg14kzcjqtr = TCPDF_STATIC::_getUSHORT($Voc1qigl3k5y, $Vzl5igrsjgyf);
			$Vzl5igrsjgyf += 2;
			
			$Vkodzpbdkazx['Flags'] = $Vqwgb1lkvfzg;
			if (($Vyg14kzcjqtr & 2) == 2) {
				
				$Vkodzpbdkazx['Flags'] |= 64;
			}
			
			$Vzl5igrsjgyf = $Vntfufcb4vaz['head']['offset'] + 50;
			$Vzc2mmakcuvq = (TCPDF_STATIC::_getSHORT($Voc1qigl3k5y, $Vzl5igrsjgyf) == 0);
			$Vzl5igrsjgyf += 2;
			
			$V55vc4mewy5wndexToLoc = array();
			$Vzl5igrsjgyf = $Vntfufcb4vaz['loca']['offset'];
			if ($Vzc2mmakcuvq) {
				
				$Vsmrjmvwzsz4 = floor($Vntfufcb4vaz['loca']['length'] / 2); 
				for ($V55vc4mewy5w = 0; $V55vc4mewy5w < $Vsmrjmvwzsz4; ++$V55vc4mewy5w) {
					$V55vc4mewy5wndexToLoc[$V55vc4mewy5w] = TCPDF_STATIC::_getUSHORT($Voc1qigl3k5y, $Vzl5igrsjgyf) * 2;
					if (isset($V55vc4mewy5wndexToLoc[($V55vc4mewy5w - 1)]) && ($V55vc4mewy5wndexToLoc[$V55vc4mewy5w] == $V55vc4mewy5wndexToLoc[($V55vc4mewy5w - 1)])) {
						
						unset($V55vc4mewy5wndexToLoc[($V55vc4mewy5w - 1)]);
					}
					$Vzl5igrsjgyf += 2;
				}
			} else {
				
				$Vsmrjmvwzsz4 = floor($Vntfufcb4vaz['loca']['length'] / 4); 
				for ($V55vc4mewy5w = 0; $V55vc4mewy5w < $Vsmrjmvwzsz4; ++$V55vc4mewy5w) {
					$V55vc4mewy5wndexToLoc[$V55vc4mewy5w] = TCPDF_STATIC::_getULONG($Voc1qigl3k5y, $Vzl5igrsjgyf);
					if (isset($V55vc4mewy5wndexToLoc[($V55vc4mewy5w - 1)]) && ($V55vc4mewy5wndexToLoc[$V55vc4mewy5w] == $V55vc4mewy5wndexToLoc[($V55vc4mewy5w - 1)])) {
						
						unset($V55vc4mewy5wndexToLoc[($V55vc4mewy5w - 1)]);
					}
					$Vzl5igrsjgyf += 4;
				}
			}
			
			$Vzl5igrsjgyf = $Vntfufcb4vaz['cmap']['offset'] + 2;
			$Vwjmou3wakyp = TCPDF_STATIC::_getUSHORT($Voc1qigl3k5y, $Vzl5igrsjgyf);
			$Vzl5igrsjgyf += 2;
			$V4bajg5xhokaodingTables = array();
			for ($V55vc4mewy5w = 0; $V55vc4mewy5w < $Vwjmou3wakyp; ++$V55vc4mewy5w) {
				$V4bajg5xhokaodingTables[$V55vc4mewy5w]['platformID'] = TCPDF_STATIC::_getUSHORT($Voc1qigl3k5y, $Vzl5igrsjgyf);
				$Vzl5igrsjgyf += 2;
				$V4bajg5xhokaodingTables[$V55vc4mewy5w]['encodingID'] = TCPDF_STATIC::_getUSHORT($Voc1qigl3k5y, $Vzl5igrsjgyf);
				$Vzl5igrsjgyf += 2;
				$V4bajg5xhokaodingTables[$V55vc4mewy5w]['offset'] = TCPDF_STATIC::_getULONG($Voc1qigl3k5y, $Vzl5igrsjgyf);
				$Vzl5igrsjgyf += 4;
			}
			
			$Vzl5igrsjgyf = $Vntfufcb4vaz['OS/2']['offset'];
			$Vzl5igrsjgyf += 2; 
			
			$Vkodzpbdkazx['AvgWidth'] = round(TCPDF_STATIC::_getFWORD($Voc1qigl3k5y, $Vzl5igrsjgyf) * $Vvpbfwtle32p);
			$Vzl5igrsjgyf += 2;
			
			$Vdyem1oapktg = round(TCPDF_STATIC::_getUFWORD($Voc1qigl3k5y, $Vzl5igrsjgyf) * $Vvpbfwtle32p);
			
			$Vkodzpbdkazx['StemV'] = round((70 * $Vdyem1oapktg) / 400);
			$Vkodzpbdkazx['StemH'] = round((30 * $Vdyem1oapktg) / 400);
			$Vzl5igrsjgyf += 2;
			$Vzl5igrsjgyf += 2; 
			$Vrnnwdkcznch = TCPDF_STATIC::_getSHORT($Voc1qigl3k5y, $Vzl5igrsjgyf);
			$Vzl5igrsjgyf += 2;
			if ($Vrnnwdkcznch == 2) {
				
				return false;
			}
			
			$Vkodzpbdkazx['name'] = '';
			$Vzl5igrsjgyf = $Vntfufcb4vaz['name']['offset'];
			$Vzl5igrsjgyf += 2; 
			
			$Vatxlheapfus = TCPDF_STATIC::_getUSHORT($Voc1qigl3k5y, $Vzl5igrsjgyf);
			$Vzl5igrsjgyf += 2;
			
			$Vqh0jphii5cf = TCPDF_STATIC::_getUSHORT($Voc1qigl3k5y, $Vzl5igrsjgyf);
			$Vzl5igrsjgyf += 2;
			for ($V55vc4mewy5w = 0; $V55vc4mewy5w < $Vatxlheapfus; ++$V55vc4mewy5w) {
				$Vzl5igrsjgyf += 6; 
				
				$Vrwfslly5xw1 = TCPDF_STATIC::_getUSHORT($Voc1qigl3k5y, $Vzl5igrsjgyf);
				$Vzl5igrsjgyf += 2;
				if ($Vrwfslly5xw1 == 6) {
					
					$Varaor2bek1x = TCPDF_STATIC::_getUSHORT($Voc1qigl3k5y, $Vzl5igrsjgyf);
					$Vzl5igrsjgyf += 2;
					
					$Vlf15ebkvnmw = TCPDF_STATIC::_getUSHORT($Voc1qigl3k5y, $Vzl5igrsjgyf);
					$Vzl5igrsjgyf += 2;
					$Vzl5igrsjgyf = ($Vntfufcb4vaz['name']['offset'] + $Vqh0jphii5cf + $Vlf15ebkvnmw);
					$Vkodzpbdkazx['name'] = substr($Voc1qigl3k5y, $Vzl5igrsjgyf, $Varaor2bek1x);
					$Vkodzpbdkazx['name'] = preg_replace('/[^a-zA-Z0-9_\-]/', '', $Vkodzpbdkazx['name']);
					break;
				} else {
					$Vzl5igrsjgyf += 4; 
				}
			}
			if (empty($Vkodzpbdkazx['name'])) {
				$Vkodzpbdkazx['name'] = $Va5ds32cmdad;
			}
			
			$Vzl5igrsjgyf = $Vntfufcb4vaz['post']['offset'];
			$Vzl5igrsjgyf += 4; 
			$Vkodzpbdkazx['italicAngle'] = TCPDF_STATIC::_getFIXED($Voc1qigl3k5y, $Vzl5igrsjgyf);
			$Vzl5igrsjgyf += 4;
			$Vkodzpbdkazx['underlinePosition'] = round(TCPDF_STATIC::_getFWORD($Voc1qigl3k5y, $Vzl5igrsjgyf) * $Vvpbfwtle32p);
			$Vzl5igrsjgyf += 2;
			$Vkodzpbdkazx['underlineThickness'] = round(TCPDF_STATIC::_getFWORD($Voc1qigl3k5y, $Vzl5igrsjgyf) * $Vvpbfwtle32p);
			$Vzl5igrsjgyf += 2;
			$V55vc4mewy5wsFixedPitch = (TCPDF_STATIC::_getULONG($Voc1qigl3k5y, $Vzl5igrsjgyf) == 0) ? false : true;
			$Vzl5igrsjgyf += 2;
			if ($V55vc4mewy5wsFixedPitch) {
				$Vkodzpbdkazx['Flags'] |= 1;
			}
			
			$Vzl5igrsjgyf = $Vntfufcb4vaz['hhea']['offset'];
			$Vzl5igrsjgyf += 4; 
			
			$Vkodzpbdkazx['Ascent'] = round(TCPDF_STATIC::_getFWORD($Voc1qigl3k5y, $Vzl5igrsjgyf) * $Vvpbfwtle32p);
			$Vzl5igrsjgyf += 2;
			
			$Vkodzpbdkazx['Descent'] = round(TCPDF_STATIC::_getFWORD($Voc1qigl3k5y, $Vzl5igrsjgyf) * $Vvpbfwtle32p);
			$Vzl5igrsjgyf += 2;
			
			$Vkodzpbdkazx['Leading'] = round(TCPDF_STATIC::_getFWORD($Voc1qigl3k5y, $Vzl5igrsjgyf) * $Vvpbfwtle32p);
			$Vzl5igrsjgyf += 2;
			
			$Vkodzpbdkazx['MaxWidth'] = round(TCPDF_STATIC::_getUFWORD($Voc1qigl3k5y, $Vzl5igrsjgyf) * $Vvpbfwtle32p);
			$Vzl5igrsjgyf += 2;
			$Vzl5igrsjgyf += 22; 
			
			$V4ykpva4borc = TCPDF_STATIC::_getUSHORT($Voc1qigl3k5y, $Vzl5igrsjgyf);
			
			$Vzl5igrsjgyf = $Vntfufcb4vaz['maxp']['offset'];
			$Vzl5igrsjgyf += 4; 
			
			$Vysb3fcf4aqk = TCPDF_STATIC::_getUSHORT($Voc1qigl3k5y, $Vzl5igrsjgyf);
			
			$Vttwd5zxuug5 = array();
			foreach ($V4bajg5xhokaodingTables as $V4bajg5xhokatable) {
				
				if (($V4bajg5xhokatable['platformID'] == $V2jb4qzr5d0d) AND ($V4bajg5xhokatable['encodingID'] == $V4bajg5xhokaid)) {
					$Vzl5igrsjgyf = $Vntfufcb4vaz['cmap']['offset'] + $V4bajg5xhokatable['offset'];
					$Vmj4iakllwpw = TCPDF_STATIC::_getUSHORT($Voc1qigl3k5y, $Vzl5igrsjgyf);
					$Vzl5igrsjgyf += 2;
					switch ($Vmj4iakllwpw) {
						case 0: { 
							$Vzl5igrsjgyf += 4; 
							for ($Vwcmlurixvzg = 0; $Vwcmlurixvzg < 256; ++$Vwcmlurixvzg) {
								$Vqdeou2vhybv = TCPDF_STATIC::_getBYTE($Voc1qigl3k5y, $Vzl5igrsjgyf);
								$Vttwd5zxuug5[$Vwcmlurixvzg] = $Vqdeou2vhybv;
								++$Vzl5igrsjgyf;
							}
							break;
						}
						case 2: { 
							$Vzl5igrsjgyf += 4; 
							$Vbobyr2afd5o = 0;
							for ($V55vc4mewy5w = 0; $V55vc4mewy5w < 256; ++$V55vc4mewy5w) {
								
								$Vpmzgkixoe14[$V55vc4mewy5w] = (TCPDF_STATIC::_getUSHORT($Voc1qigl3k5y, $Vzl5igrsjgyf) / 8);
								$Vzl5igrsjgyf += 2;
								if ($Vbobyr2afd5o < $Vpmzgkixoe14[$V55vc4mewy5w]) {
									$Vbobyr2afd5o = $Vpmzgkixoe14[$V55vc4mewy5w];
								}
							}
							
							++$Vbobyr2afd5o;
							
							$Vascb051ljzh = array();
							$Vkptp2cfsgv3 = 0;
							for ($Vl0q4noiexi4 = 0; $Vl0q4noiexi4 < $Vbobyr2afd5o; ++$Vl0q4noiexi4) {
								$Vascb051ljzh[$Vl0q4noiexi4]['firstCode'] = TCPDF_STATIC::_getUSHORT($Voc1qigl3k5y, $Vzl5igrsjgyf);
								$Vzl5igrsjgyf += 2;
								$Vascb051ljzh[$Vl0q4noiexi4]['entryCount'] = TCPDF_STATIC::_getUSHORT($Voc1qigl3k5y, $Vzl5igrsjgyf);
								$Vzl5igrsjgyf += 2;
								$Vascb051ljzh[$Vl0q4noiexi4]['idDelta'] = TCPDF_STATIC::_getUSHORT($Voc1qigl3k5y, $Vzl5igrsjgyf);
								$Vzl5igrsjgyf += 2;
								$Vascb051ljzh[$Vl0q4noiexi4]['idRangeOffset'] = TCPDF_STATIC::_getUSHORT($Voc1qigl3k5y, $Vzl5igrsjgyf);
								$Vzl5igrsjgyf += 2;
								$Vascb051ljzh[$Vl0q4noiexi4]['idRangeOffset'] -= (2 + (($Vbobyr2afd5o - $Vl0q4noiexi4 - 1) * 8));
								$Vascb051ljzh[$Vl0q4noiexi4]['idRangeOffset'] /= 2;
								$Vkptp2cfsgv3 += $Vascb051ljzh[$Vl0q4noiexi4]['entryCount'];
							}
							for ($Vl0q4noiexi4 = 0; $Vl0q4noiexi4 < $Vkptp2cfsgv3; ++$Vl0q4noiexi4) {
								$Vqdeou2vhybvlyphIndexArray[$Vl0q4noiexi4] = TCPDF_STATIC::_getUSHORT($Voc1qigl3k5y, $Vzl5igrsjgyf);
								$Vzl5igrsjgyf += 2;
							}
							for ($V55vc4mewy5w = 0; $V55vc4mewy5w < 256; ++$V55vc4mewy5w) {
								$Vl0q4noiexi4 = $Vpmzgkixoe14[$V55vc4mewy5w];
								if ($Vl0q4noiexi4 == 0) {
									
									$Vwcmlurixvzg = $V55vc4mewy5w;
									$Vqdeou2vhybv = $Vqdeou2vhybvlyphIndexArray[0];
									$Vttwd5zxuug5[$Vwcmlurixvzg] = $Vqdeou2vhybv;
								} else {
									
									$Veodxmglttep = $Vascb051ljzh[$Vl0q4noiexi4]['firstCode'];
									$Vvxc1koe1acg = $Veodxmglttep + $Vascb051ljzh[$Vl0q4noiexi4]['entryCount'];
									for ($Vuaufi3la1vg = $Veodxmglttep; $Vuaufi3la1vg < $Vvxc1koe1acg; ++$Vuaufi3la1vg) {
										
										$Vwcmlurixvzg = (($V55vc4mewy5w << 8) + $Vuaufi3la1vg);
										$V55vc4mewy5wdRangeOffset = ($Vascb051ljzh[$Vl0q4noiexi4]['idRangeOffset'] + $Vuaufi3la1vg - $Vascb051ljzh[$Vl0q4noiexi4]['firstCode']);
										$Vqdeou2vhybv = ($Vqdeou2vhybvlyphIndexArray[$V55vc4mewy5wdRangeOffset] + $Vascb051ljzh[$Vl0q4noiexi4]['idDelta']) % 65536;
										if ($Vqdeou2vhybv < 0) {
											$Vqdeou2vhybv = 0;
										}
										$Vttwd5zxuug5[$Vwcmlurixvzg] = $Vqdeou2vhybv;
									}
								}
							}
							break;
						}
						case 4: { 
							$Vqfuror45qjm = TCPDF_STATIC::_getUSHORT($Voc1qigl3k5y, $Vzl5igrsjgyf);
							$Vzl5igrsjgyf += 2;
							$Vzl5igrsjgyf += 2; 
							$V3pcjsoxo1bb = floor(TCPDF_STATIC::_getUSHORT($Voc1qigl3k5y, $Vzl5igrsjgyf) / 2);
							$Vzl5igrsjgyf += 2;
							$Vzl5igrsjgyf += 6; 
							$V1p3d5r2ha2t = array(); 
							for ($Vl0q4noiexi4 = 0; $Vl0q4noiexi4 < $V3pcjsoxo1bb; ++$Vl0q4noiexi4) {
								$V1p3d5r2ha2t[$Vl0q4noiexi4] = TCPDF_STATIC::_getUSHORT($Voc1qigl3k5y, $Vzl5igrsjgyf);
								$Vzl5igrsjgyf += 2;
							}
							$Vzl5igrsjgyf += 2; 
							$Vrnuvlff0buc = array(); 
							for ($Vl0q4noiexi4 = 0; $Vl0q4noiexi4 < $V3pcjsoxo1bb; ++$Vl0q4noiexi4) {
								$Vrnuvlff0buc[$Vl0q4noiexi4] = TCPDF_STATIC::_getUSHORT($Voc1qigl3k5y, $Vzl5igrsjgyf);
								$Vzl5igrsjgyf += 2;
							}
							$V55vc4mewy5wdDelta = array(); 
							for ($Vl0q4noiexi4 = 0; $Vl0q4noiexi4 < $V3pcjsoxo1bb; ++$Vl0q4noiexi4) {
								$V55vc4mewy5wdDelta[$Vl0q4noiexi4] = TCPDF_STATIC::_getUSHORT($Voc1qigl3k5y, $Vzl5igrsjgyf);
								$Vzl5igrsjgyf += 2;
							}
							$V55vc4mewy5wdRangeOffset = array(); 
							for ($Vl0q4noiexi4 = 0; $Vl0q4noiexi4 < $V3pcjsoxo1bb; ++$Vl0q4noiexi4) {
								$V55vc4mewy5wdRangeOffset[$Vl0q4noiexi4] = TCPDF_STATIC::_getUSHORT($Voc1qigl3k5y, $Vzl5igrsjgyf);
								$Vzl5igrsjgyf += 2;
							}
							$Vqdeou2vhybvidlen = (floor($Vqfuror45qjm / 2) - 8 - (4 * $V3pcjsoxo1bb));
							$Vqdeou2vhybvlyphIdArray = array(); 
							for ($Vl0q4noiexi4 = 0; $Vl0q4noiexi4 < $Vqdeou2vhybvidlen; ++$Vl0q4noiexi4) {
								$Vqdeou2vhybvlyphIdArray[$Vl0q4noiexi4] = TCPDF_STATIC::_getUSHORT($Voc1qigl3k5y, $Vzl5igrsjgyf);
								$Vzl5igrsjgyf += 2;
							}
							for ($Vl0q4noiexi4 = 0; $Vl0q4noiexi4 < $V3pcjsoxo1bb; ++$Vl0q4noiexi4) {
								for ($Vwcmlurixvzg = $Vrnuvlff0buc[$Vl0q4noiexi4]; $Vwcmlurixvzg <= $V1p3d5r2ha2t[$Vl0q4noiexi4]; ++$Vwcmlurixvzg) {
									if ($V55vc4mewy5wdRangeOffset[$Vl0q4noiexi4] == 0) {
										$Vqdeou2vhybv = ($V55vc4mewy5wdDelta[$Vl0q4noiexi4] + $Vwcmlurixvzg) % 65536;
									} else {
										$Vqdeou2vhybvid = (floor($V55vc4mewy5wdRangeOffset[$Vl0q4noiexi4] / 2) + ($Vwcmlurixvzg - $Vrnuvlff0buc[$Vl0q4noiexi4]) - ($V3pcjsoxo1bb - $Vl0q4noiexi4));
										$Vqdeou2vhybv = ($Vqdeou2vhybvlyphIdArray[$Vqdeou2vhybvid] + $V55vc4mewy5wdDelta[$Vl0q4noiexi4]) % 65536;
									}
									if ($Vqdeou2vhybv < 0) {
										$Vqdeou2vhybv = 0;
									}
									$Vttwd5zxuug5[$Vwcmlurixvzg] = $Vqdeou2vhybv;
								}
							}
							break;
						}
						case 6: { 
							$Vzl5igrsjgyf += 4; 
							$Vlw4eb1kn2ou = TCPDF_STATIC::_getUSHORT($Voc1qigl3k5y, $Vzl5igrsjgyf);
							$Vzl5igrsjgyf += 2;
							$V3kicou2vrht = TCPDF_STATIC::_getUSHORT($Voc1qigl3k5y, $Vzl5igrsjgyf);
							$Vzl5igrsjgyf += 2;
							for ($Vl0q4noiexi4 = 0; $Vl0q4noiexi4 < $V3kicou2vrht; ++$Vl0q4noiexi4) {
								$Vwcmlurixvzg = ($Vl0q4noiexi4 + $Vlw4eb1kn2ou);
								$Vqdeou2vhybv = TCPDF_STATIC::_getUSHORT($Voc1qigl3k5y, $Vzl5igrsjgyf);
								$Vzl5igrsjgyf += 2;
								$Vttwd5zxuug5[$Vwcmlurixvzg] = $Vqdeou2vhybv;
							}
							break;
						}
						case 8: { 
							$Vzl5igrsjgyf += 10; 
							for ($Vl0q4noiexi4 = 0; $Vl0q4noiexi4 < 8192; ++$Vl0q4noiexi4) {
								$V55vc4mewy5ws32[$Vl0q4noiexi4] = TCPDF_STATIC::_getBYTE($Voc1qigl3k5y, $Vzl5igrsjgyf);
								++$Vzl5igrsjgyf;
							}
							$Vktsq0grt2bh = TCPDF_STATIC::_getULONG($Voc1qigl3k5y, $Vzl5igrsjgyf);
							$Vzl5igrsjgyf += 4;
							for ($V55vc4mewy5w = 0; $V55vc4mewy5w < $Vktsq0grt2bh; ++$V55vc4mewy5w) {
								$Vxgeut2tb3oi = TCPDF_STATIC::_getULONG($Voc1qigl3k5y, $Vzl5igrsjgyf);
								$Vzl5igrsjgyf += 4;
								$V33zanb5ndp2 = TCPDF_STATIC::_getULONG($Voc1qigl3k5y, $Vzl5igrsjgyf);
								$Vzl5igrsjgyf += 4;
								$V0vksnjondyf = TCPDF_STATIC::_getULONG($Voc1qigl3k5y, $Vzl5igrsjgyf);
								$Vzl5igrsjgyf += 4;
								for ($Vl0q4noiexi4 = $Vxgeut2tb3oi; $Vl0q4noiexi4 <= $V33zanb5ndp2; ++$Vl0q4noiexi4) {
									$V55vc4mewy5ws32idx = floor($Vwcmlurixvzg / 8);
									if ((isset($V55vc4mewy5ws32[$V55vc4mewy5ws32idx])) AND (($V55vc4mewy5ws32[$V55vc4mewy5ws32idx] & (1 << (7 - ($Vwcmlurixvzg % 8)))) == 0)) {
										$Vwcmlurixvzg = $Vl0q4noiexi4;
									} else {
										
										
										
										
										$Vwcmlurixvzg = ((55232 + ($Vl0q4noiexi4 >> 10)) << 10) + (0xDC00 + ($Vl0q4noiexi4 & 0x3FF)) -56613888;
									}
									$Vttwd5zxuug5[$Vwcmlurixvzg] = 0;
									++$V0vksnjondyf;
								}
							}
							break;
						}
						case 10: { 
							$Vzl5igrsjgyf += 10; 
							$Vxgeut2tb3oi = TCPDF_STATIC::_getULONG($Voc1qigl3k5y, $Vzl5igrsjgyf);
							$Vzl5igrsjgyf += 4;
							$Vfrgmjlshamg = TCPDF_STATIC::_getULONG($Voc1qigl3k5y, $Vzl5igrsjgyf);
							$Vzl5igrsjgyf += 4;
							for ($Vl0q4noiexi4 = 0; $Vl0q4noiexi4 < $Vfrgmjlshamg; ++$Vl0q4noiexi4) {
								$Vwcmlurixvzg = ($Vl0q4noiexi4 + $Vxgeut2tb3oi);
								$Vqdeou2vhybv = TCPDF_STATIC::_getUSHORT($Voc1qigl3k5y, $Vzl5igrsjgyf);
								$Vttwd5zxuug5[$Vwcmlurixvzg] = $Vqdeou2vhybv;
								$Vzl5igrsjgyf += 2;
							}
							break;
						}
						case 12: { 
							$Vzl5igrsjgyf += 10; 
							$Vktsq0grt2bh = TCPDF_STATIC::_getULONG($Voc1qigl3k5y, $Vzl5igrsjgyf);
							$Vzl5igrsjgyf += 4;
							for ($Vl0q4noiexi4 = 0; $Vl0q4noiexi4 < $Vktsq0grt2bh; ++$Vl0q4noiexi4) {
								$Vxgeut2tb3oi = TCPDF_STATIC::_getULONG($Voc1qigl3k5y, $Vzl5igrsjgyf);
								$Vzl5igrsjgyf += 4;
								$V33zanb5ndp2 = TCPDF_STATIC::_getULONG($Voc1qigl3k5y, $Vzl5igrsjgyf);
								$Vzl5igrsjgyf += 4;
								$V3tiey0f03za = TCPDF_STATIC::_getULONG($Voc1qigl3k5y, $Vzl5igrsjgyf);
								$Vzl5igrsjgyf += 4;
								for ($Vwcmlurixvzg = $Vxgeut2tb3oi; $Vwcmlurixvzg <= $V33zanb5ndp2; ++$Vwcmlurixvzg) {
									$Vttwd5zxuug5[$Vwcmlurixvzg] = $V3tiey0f03za;
									++$V3tiey0f03za;
								}
							}
							break;
						}
						case 13: { 
							
							break;
						}
						case 14: { 
							
							break;
						}
					}
				}
			}
			if (!isset($Vttwd5zxuug5[0])) {
				$Vttwd5zxuug5[0] = 0;
			}
			
			$Vzl5igrsjgyf = ($Vntfufcb4vaz['glyf']['offset'] + $V55vc4mewy5wndexToLoc[$Vttwd5zxuug5[120]] + 4);
			$Vtnj1fee0yl5 = TCPDF_STATIC::_getFWORD($Voc1qigl3k5y, $Vzl5igrsjgyf);
			$Vzl5igrsjgyf += 4;
			$Vu4ra0c3hn41 = TCPDF_STATIC::_getFWORD($Voc1qigl3k5y, $Vzl5igrsjgyf);
			$Vzl5igrsjgyf += 2;
			$Vkodzpbdkazx['XHeight'] = round(($Vu4ra0c3hn41 - $Vtnj1fee0yl5) * $Vvpbfwtle32p);
			
			$Vzl5igrsjgyf = ($Vntfufcb4vaz['glyf']['offset'] + $V55vc4mewy5wndexToLoc[$Vttwd5zxuug5[72]] + 4);
			$Vtnj1fee0yl5 = TCPDF_STATIC::_getFWORD($Voc1qigl3k5y, $Vzl5igrsjgyf);
			$Vzl5igrsjgyf += 4;
			$Vu4ra0c3hn41 = TCPDF_STATIC::_getFWORD($Voc1qigl3k5y, $Vzl5igrsjgyf);
			$Vzl5igrsjgyf += 2;
			$Vkodzpbdkazx['CapHeight'] = round(($Vu4ra0c3hn41 - $Vtnj1fee0yl5) * $Vvpbfwtle32p);
			
			$Vwcmlurixvzgw = array();
			$Vzl5igrsjgyf = $Vntfufcb4vaz['hmtx']['offset'];
			for ($V55vc4mewy5w = 0 ; $V55vc4mewy5w < $V4ykpva4borc; ++$V55vc4mewy5w) {
				$Vwcmlurixvzgw[$V55vc4mewy5w] = round(TCPDF_STATIC::_getUFWORD($Voc1qigl3k5y, $Vzl5igrsjgyf) * $Vvpbfwtle32p);
				$Vzl5igrsjgyf += 4; 
			}
			if ($V4ykpva4borc < $Vysb3fcf4aqk) {
				
				$Vwcmlurixvzgw = array_pad($Vwcmlurixvzgw, $Vysb3fcf4aqk, $Vwcmlurixvzgw[($V4ykpva4borc - 1)]);
			}
			$Vkodzpbdkazx['MissingWidth'] = $Vwcmlurixvzgw[0];
			$Vkodzpbdkazx['cw'] = '';
			$Vkodzpbdkazx['cbbox'] = '';
			for ($Vanrq3megkrt = 0; $Vanrq3megkrt <= 65535; ++$Vanrq3megkrt) {
				if (isset($Vttwd5zxuug5[$Vanrq3megkrt])) {
					if (isset($Vwcmlurixvzgw[$Vttwd5zxuug5[$Vanrq3megkrt]])) {
						$Vkodzpbdkazx['cw'] .= ','.$Vanrq3megkrt.'=>'.$Vwcmlurixvzgw[$Vttwd5zxuug5[$Vanrq3megkrt]];
					}
					if ($Vnjwkryzm330 AND isset($V55vc4mewy5wndexToLoc[$Vttwd5zxuug5[$Vanrq3megkrt]])) {
						$Vzl5igrsjgyf = ($Vntfufcb4vaz['glyf']['offset'] + $V55vc4mewy5wndexToLoc[$Vttwd5zxuug5[$Vanrq3megkrt]]);
						$V2yru1wghjaj = round(TCPDF_STATIC::_getFWORD($Voc1qigl3k5y, $Vzl5igrsjgyf + 2) * $Vvpbfwtle32p);
						$Vtnj1fee0yl5 = round(TCPDF_STATIC::_getFWORD($Voc1qigl3k5y, $Vzl5igrsjgyf + 4) * $Vvpbfwtle32p);
						$Varsf13ijr1a = round(TCPDF_STATIC::_getFWORD($Voc1qigl3k5y, $Vzl5igrsjgyf + 6) * $Vvpbfwtle32p);
						$Vu4ra0c3hn41 = round(TCPDF_STATIC::_getFWORD($Voc1qigl3k5y, $Vzl5igrsjgyf + 8) * $Vvpbfwtle32p);
						$Vkodzpbdkazx['cbbox'] .= ','.$Vanrq3megkrt.'=>array('.$V2yru1wghjaj.','.$Vtnj1fee0yl5.','.$Varsf13ijr1a.','.$Vu4ra0c3hn41.')';
					}
				}
			}
		} 
		if (($Vkodzpbdkazx['type'] == 'TrueTypeUnicode') AND (count($Vttwd5zxuug5) == 256)) {
			$Vkodzpbdkazx['type'] = 'TrueType';
		}
		
		$Vfhetkfb0oae = '<'.'?'.'php'."\n";
		$Vfhetkfb0oae .= '// TCPDF FONT FILE DESCRIPTION'."\n";
		$Vfhetkfb0oae .= '$Vvmwm1jsklgc=\''.$Vkodzpbdkazx['type'].'\';'."\n";
		$Vfhetkfb0oae .= '$Vqrmgnhjkdgq=\''.$Vkodzpbdkazx['name'].'\';'."\n";
		$Vfhetkfb0oae .= '$V25xquvj3upn='.$Vkodzpbdkazx['underlinePosition'].';'."\n";
		$Vfhetkfb0oae .= '$Vco54vf4gvhq='.$Vkodzpbdkazx['underlineThickness'].';'."\n";
		if ($Vkodzpbdkazx['MissingWidth'] > 0) {
			$Vfhetkfb0oae .= '$Vupjyej5fuuj='.$Vkodzpbdkazx['MissingWidth'].';'."\n";
		} else {
			$Vfhetkfb0oae .= '$Vupjyej5fuuj='.$Vkodzpbdkazx['AvgWidth'].';'."\n";
		}
		$Vfhetkfb0oae .= '$Vsjpa44qmsau=\''.$Vkodzpbdkazx['diff'].'\';'."\n";
		if ($Vkodzpbdkazx['type'] == 'Type1') {
			
			$Vfhetkfb0oae .= '$V4bajg5xhoka=\''.$Vkodzpbdkazx['enc'].'\';'."\n";
			$Vfhetkfb0oae .= '$Vjluyuwumvof=\''.$Vkodzpbdkazx['file'].'\';'."\n";
			$Vfhetkfb0oae .= '$Vnqszvvswrzo='.$Vkodzpbdkazx['size1'].';'."\n";
			$Vfhetkfb0oae .= '$Vuycu2cgbrby='.$Vkodzpbdkazx['size2'].';'."\n";
		} else {
			$Vfhetkfb0oae .= '$V02did3m0bxt='.$Vkodzpbdkazx['originalsize'].';'."\n";
			if ($Vkodzpbdkazx['type'] == 'cidfont0') {
				
				switch ($V30bqo0jepf5) {
					case 'CID0JP': {
						$Vfhetkfb0oae .= '// Japanese'."\n";
						$Vfhetkfb0oae .= '$V4bajg5xhoka=\'UniJIS-UTF16-H\';'."\n";
						$Vfhetkfb0oae .= '$Vanrq3megkrtinfo=array(\'Registry\'=>\'Adobe\', \'Ordering\'=>\'Japan1\',\'Supplement\'=>5);'."\n";
						$Vfhetkfb0oae .= 'include(dirname(__FILE__).\'/uni2cid_aj16.php\');'."\n";
						break;
					}
					case 'CID0KR': {
						$Vfhetkfb0oae .= '// Korean'."\n";
						$Vfhetkfb0oae .= '$V4bajg5xhoka=\'UniKS-UTF16-H\';'."\n";
						$Vfhetkfb0oae .= '$Vanrq3megkrtinfo=array(\'Registry\'=>\'Adobe\', \'Ordering\'=>\'Korea1\',\'Supplement\'=>0);'."\n";
						$Vfhetkfb0oae .= 'include(dirname(__FILE__).\'/uni2cid_ak12.php\');'."\n";
						break;
					}
					case 'CID0CS': {
						$Vfhetkfb0oae .= '// Chinese Simplified'."\n";
						$Vfhetkfb0oae .= '$V4bajg5xhoka=\'UniGB-UTF16-H\';'."\n";
						$Vfhetkfb0oae .= '$Vanrq3megkrtinfo=array(\'Registry\'=>\'Adobe\', \'Ordering\'=>\'GB1\',\'Supplement\'=>2);'."\n";
						$Vfhetkfb0oae .= 'include(dirname(__FILE__).\'/uni2cid_ag15.php\');'."\n";
						break;
					}
					case 'CID0CT':
					default: {
						$Vfhetkfb0oae .= '// Chinese Traditional'."\n";
						$Vfhetkfb0oae .= '$V4bajg5xhoka=\'UniCNS-UTF16-H\';'."\n";
						$Vfhetkfb0oae .= '$Vanrq3megkrtinfo=array(\'Registry\'=>\'Adobe\', \'Ordering\'=>\'CNS1\',\'Supplement\'=>0);'."\n";
						$Vfhetkfb0oae .= 'include(dirname(__FILE__).\'/uni2cid_aj16.php\');'."\n";
						break;
					}
				}
			} else {
				
				$Vfhetkfb0oae .= '$V4bajg5xhoka=\''.$Vkodzpbdkazx['enc'].'\';'."\n";
				$Vfhetkfb0oae .= '$Vjluyuwumvof=\''.$Vkodzpbdkazx['file'].'\';'."\n";
				$Vfhetkfb0oae .= '$Vttwd5zxuug5=\''.$Vkodzpbdkazx['ctg'].'\';'."\n";
				
				$Vanrq3megkrttogidmap = str_pad('', 131072, "\x00"); 
				foreach ($Vttwd5zxuug5 as $Vanrq3megkrt => $Vqdeou2vhybvid) {
					$Vanrq3megkrttogidmap = self::updateCIDtoGIDmap($Vanrq3megkrttogidmap, $Vanrq3megkrt, $Vttwd5zxuug5[$Vanrq3megkrt]);
				}
				
				$V2n2znk5umlx = TCPDF_STATIC::fopenLocal($V21kx0kn5th2.$Vkodzpbdkazx['ctg'], 'wb');
				fwrite($V2n2znk5umlx, gzcompress($Vanrq3megkrttogidmap));
				fclose($V2n2znk5umlx);
			}
		}
		$Vfhetkfb0oae .= '$V0v4vummvoal=array(';
		$Vfhetkfb0oae .= '\'Flags\'=>'.$Vkodzpbdkazx['Flags'].',';
		$Vfhetkfb0oae .= '\'FontBBox\'=>\'['.$Vkodzpbdkazx['bbox'].']\',';
		$Vfhetkfb0oae .= '\'ItalicAngle\'=>'.$Vkodzpbdkazx['italicAngle'].',';
		$Vfhetkfb0oae .= '\'Ascent\'=>'.$Vkodzpbdkazx['Ascent'].',';
		$Vfhetkfb0oae .= '\'Descent\'=>'.$Vkodzpbdkazx['Descent'].',';
		$Vfhetkfb0oae .= '\'Leading\'=>'.$Vkodzpbdkazx['Leading'].',';
		$Vfhetkfb0oae .= '\'CapHeight\'=>'.$Vkodzpbdkazx['CapHeight'].',';
		$Vfhetkfb0oae .= '\'XHeight\'=>'.$Vkodzpbdkazx['XHeight'].',';
		$Vfhetkfb0oae .= '\'StemV\'=>'.$Vkodzpbdkazx['StemV'].',';
		$Vfhetkfb0oae .= '\'StemH\'=>'.$Vkodzpbdkazx['StemH'].',';
		$Vfhetkfb0oae .= '\'AvgWidth\'=>'.$Vkodzpbdkazx['AvgWidth'].',';
		$Vfhetkfb0oae .= '\'MaxWidth\'=>'.$Vkodzpbdkazx['MaxWidth'].',';
		$Vfhetkfb0oae .= '\'MissingWidth\'=>'.$Vkodzpbdkazx['MissingWidth'].'';
		$Vfhetkfb0oae .= ');'."\n";
		if (!empty($Vkodzpbdkazx['cbbox'])) {
			$Vfhetkfb0oae .= '$Vwcmlurixvzgbbox=array('.substr($Vkodzpbdkazx['cbbox'], 1).');'."\n";
		}
		$Vfhetkfb0oae .= '$Vwcmlurixvzgw=array('.substr($Vkodzpbdkazx['cw'], 1).');'."\n";
		$Vfhetkfb0oae .= '// --- EOF ---'."\n";
		
		$V2n2znk5umlx = TCPDF_STATIC::fopenLocal($V21kx0kn5th2.$Va5ds32cmdad.'.php', 'w');
		fwrite($V2n2znk5umlx, $Vfhetkfb0oae);
		fclose($V2n2znk5umlx);
		
		return $Va5ds32cmdad;
	}

	
	public static function _getTTFtableChecksum($Vntfufcb4vaz, $Vqfuror45qjm) {
		$V0dsyrnytpjj = 0;
		$Vmn4d4ffinjg = ($Vqfuror45qjm / 4);
		$Vzl5igrsjgyf = 0;
		for ($V55vc4mewy5w = 0; $V55vc4mewy5w < $Vmn4d4ffinjg; ++$V55vc4mewy5w) {
			$Vz0hmukhwa4z = unpack('Ni', substr($Vntfufcb4vaz, $Vzl5igrsjgyf, 4));
			$V0dsyrnytpjj += $Vz0hmukhwa4z['i'];
			$Vzl5igrsjgyf += 4;
		}
		$V0dsyrnytpjj = unpack('Ni', pack('N', $V0dsyrnytpjj));
		return $V0dsyrnytpjj['i'];
	}

	
	public static function _getTrueTypeFontSubset($Voc1qigl3k5y, $Vr5hrnrkn2un) {
		ksort($Vr5hrnrkn2un);
		$Vzl5igrsjgyf = 0; 
		if (TCPDF_STATIC::_getULONG($Voc1qigl3k5y, $Vzl5igrsjgyf) != 0x10000) {
			
			return $Voc1qigl3k5y;
		}
		$Vzl5igrsjgyf += 4;
		
		$V3moem4whahn = TCPDF_STATIC::_getUSHORT($Voc1qigl3k5y, $Vzl5igrsjgyf);
		$Vzl5igrsjgyf += 2;
		
		$Vzl5igrsjgyf += 6;
		
		$Vntfufcb4vaz = array();
		
		for ($V55vc4mewy5w = 0; $V55vc4mewy5w < $V3moem4whahn; ++$V55vc4mewy5w) {
			
			$Vxpg0kmcipfu = substr($Voc1qigl3k5y, $Vzl5igrsjgyf, 4);
			$Vzl5igrsjgyf += 4;
			$Vntfufcb4vaz[$Vxpg0kmcipfu] = array();
			$Vntfufcb4vaz[$Vxpg0kmcipfu]['checkSum'] = TCPDF_STATIC::_getULONG($Voc1qigl3k5y, $Vzl5igrsjgyf);
			$Vzl5igrsjgyf += 4;
			$Vntfufcb4vaz[$Vxpg0kmcipfu]['offset'] = TCPDF_STATIC::_getULONG($Voc1qigl3k5y, $Vzl5igrsjgyf);
			$Vzl5igrsjgyf += 4;
			$Vntfufcb4vaz[$Vxpg0kmcipfu]['length'] = TCPDF_STATIC::_getULONG($Voc1qigl3k5y, $Vzl5igrsjgyf);
			$Vzl5igrsjgyf += 4;
		}
		
		$Vzl5igrsjgyf = $Vntfufcb4vaz['head']['offset'] + 12;
		if (TCPDF_STATIC::_getULONG($Voc1qigl3k5y, $Vzl5igrsjgyf) != 0x5F0F3CF5) {
			
			return $Voc1qigl3k5y;
		}
		$Vzl5igrsjgyf += 4;
		
		$Vzl5igrsjgyf = $Vntfufcb4vaz['head']['offset'] + 50;
		$Vzc2mmakcuvq = (TCPDF_STATIC::_getSHORT($Voc1qigl3k5y, $Vzl5igrsjgyf) == 0);
		$Vzl5igrsjgyf += 2;
		
		$V55vc4mewy5wndexToLoc = array();
		$Vzl5igrsjgyf = $Vntfufcb4vaz['loca']['offset'];
		if ($Vzc2mmakcuvq) {
			
			$Vsmrjmvwzsz4 = floor($Vntfufcb4vaz['loca']['length'] / 2); 
			for ($V55vc4mewy5w = 0; $V55vc4mewy5w < $Vsmrjmvwzsz4; ++$V55vc4mewy5w) {
				$V55vc4mewy5wndexToLoc[$V55vc4mewy5w] = TCPDF_STATIC::_getUSHORT($Voc1qigl3k5y, $Vzl5igrsjgyf) * 2;
				$Vzl5igrsjgyf += 2;
			}
		} else {
			
			$Vsmrjmvwzsz4 = ($Vntfufcb4vaz['loca']['length'] / 4); 
			for ($V55vc4mewy5w = 0; $V55vc4mewy5w < $Vsmrjmvwzsz4; ++$V55vc4mewy5w) {
				$V55vc4mewy5wndexToLoc[$V55vc4mewy5w] = TCPDF_STATIC::_getULONG($Voc1qigl3k5y, $Vzl5igrsjgyf);
				$Vzl5igrsjgyf += 4;
			}
		}
		
		$Vu2ccwvkdeza = array(); 
		$Vu2ccwvkdeza[0] = true; 
		$Vzl5igrsjgyf = $Vntfufcb4vaz['cmap']['offset'] + 2;
		$Vwjmou3wakyp = TCPDF_STATIC::_getUSHORT($Voc1qigl3k5y, $Vzl5igrsjgyf);
		$Vzl5igrsjgyf += 2;
		$V4bajg5xhokaodingTables = array();
		for ($V55vc4mewy5w = 0; $V55vc4mewy5w < $Vwjmou3wakyp; ++$V55vc4mewy5w) {
			$V4bajg5xhokaodingTables[$V55vc4mewy5w]['platformID'] = TCPDF_STATIC::_getUSHORT($Voc1qigl3k5y, $Vzl5igrsjgyf);
			$Vzl5igrsjgyf += 2;
			$V4bajg5xhokaodingTables[$V55vc4mewy5w]['encodingID'] = TCPDF_STATIC::_getUSHORT($Voc1qigl3k5y, $Vzl5igrsjgyf);
			$Vzl5igrsjgyf += 2;
			$V4bajg5xhokaodingTables[$V55vc4mewy5w]['offset'] = TCPDF_STATIC::_getULONG($Voc1qigl3k5y, $Vzl5igrsjgyf);
			$Vzl5igrsjgyf += 4;
		}
		foreach ($V4bajg5xhokaodingTables as $V4bajg5xhokatable) {
			
			$Vzl5igrsjgyf = $Vntfufcb4vaz['cmap']['offset'] + $V4bajg5xhokatable['offset'];
			$Vmj4iakllwpw = TCPDF_STATIC::_getUSHORT($Voc1qigl3k5y, $Vzl5igrsjgyf);
			$Vzl5igrsjgyf += 2;
			switch ($Vmj4iakllwpw) {
				case 0: { 
					$Vzl5igrsjgyf += 4; 
					for ($Vwcmlurixvzg = 0; $Vwcmlurixvzg < 256; ++$Vwcmlurixvzg) {
						if (isset($Vr5hrnrkn2un[$Vwcmlurixvzg])) {
							$Vqdeou2vhybv = TCPDF_STATIC::_getBYTE($Voc1qigl3k5y, $Vzl5igrsjgyf);
							$Vu2ccwvkdeza[$Vqdeou2vhybv] = true;
						}
						++$Vzl5igrsjgyf;
					}
					break;
				}
				case 2: { 
					$Vzl5igrsjgyf += 4; 
					$Vbobyr2afd5o = 0;
					for ($V55vc4mewy5w = 0; $V55vc4mewy5w < 256; ++$V55vc4mewy5w) {
						
						$Vpmzgkixoe14[$V55vc4mewy5w] = (TCPDF_STATIC::_getUSHORT($Voc1qigl3k5y, $Vzl5igrsjgyf) / 8);
						$Vzl5igrsjgyf += 2;
						if ($Vbobyr2afd5o < $Vpmzgkixoe14[$V55vc4mewy5w]) {
							$Vbobyr2afd5o = $Vpmzgkixoe14[$V55vc4mewy5w];
						}
					}
					
					++$Vbobyr2afd5o;
					
					$Vascb051ljzh = array();
					$Vkptp2cfsgv3 = 0;
					for ($Vl0q4noiexi4 = 0; $Vl0q4noiexi4 < $Vbobyr2afd5o; ++$Vl0q4noiexi4) {
						$Vascb051ljzh[$Vl0q4noiexi4]['firstCode'] = TCPDF_STATIC::_getUSHORT($Voc1qigl3k5y, $Vzl5igrsjgyf);
						$Vzl5igrsjgyf += 2;
						$Vascb051ljzh[$Vl0q4noiexi4]['entryCount'] = TCPDF_STATIC::_getUSHORT($Voc1qigl3k5y, $Vzl5igrsjgyf);
						$Vzl5igrsjgyf += 2;
						$Vascb051ljzh[$Vl0q4noiexi4]['idDelta'] = TCPDF_STATIC::_getUSHORT($Voc1qigl3k5y, $Vzl5igrsjgyf);
						$Vzl5igrsjgyf += 2;
						$Vascb051ljzh[$Vl0q4noiexi4]['idRangeOffset'] = TCPDF_STATIC::_getUSHORT($Voc1qigl3k5y, $Vzl5igrsjgyf);
						$Vzl5igrsjgyf += 2;
						$Vascb051ljzh[$Vl0q4noiexi4]['idRangeOffset'] -= (2 + (($Vbobyr2afd5o - $Vl0q4noiexi4 - 1) * 8));
						$Vascb051ljzh[$Vl0q4noiexi4]['idRangeOffset'] /= 2;
						$Vkptp2cfsgv3 += $Vascb051ljzh[$Vl0q4noiexi4]['entryCount'];
					}
					for ($Vl0q4noiexi4 = 0; $Vl0q4noiexi4 < $Vkptp2cfsgv3; ++$Vl0q4noiexi4) {
						$Vqdeou2vhybvlyphIndexArray[$Vl0q4noiexi4] = TCPDF_STATIC::_getUSHORT($Voc1qigl3k5y, $Vzl5igrsjgyf);
						$Vzl5igrsjgyf += 2;
					}
					for ($V55vc4mewy5w = 0; $V55vc4mewy5w < 256; ++$V55vc4mewy5w) {
						$Vl0q4noiexi4 = $Vpmzgkixoe14[$V55vc4mewy5w];
						if ($Vl0q4noiexi4 == 0) {
							
							$Vwcmlurixvzg = $V55vc4mewy5w;
							if (isset($Vr5hrnrkn2un[$Vwcmlurixvzg])) {
								$Vqdeou2vhybv = $Vqdeou2vhybvlyphIndexArray[0];
								$Vu2ccwvkdeza[$Vqdeou2vhybv] = true;
							}
						} else {
							
							$Veodxmglttep = $Vascb051ljzh[$Vl0q4noiexi4]['firstCode'];
							$Vvxc1koe1acg = $Veodxmglttep + $Vascb051ljzh[$Vl0q4noiexi4]['entryCount'];
							for ($Vuaufi3la1vg = $Veodxmglttep; $Vuaufi3la1vg < $Vvxc1koe1acg; ++$Vuaufi3la1vg) {
								
								$Vwcmlurixvzg = (($V55vc4mewy5w << 8) + $Vuaufi3la1vg);
								if (isset($Vr5hrnrkn2un[$Vwcmlurixvzg])) {
									$V55vc4mewy5wdRangeOffset = ($Vascb051ljzh[$Vl0q4noiexi4]['idRangeOffset'] + $Vuaufi3la1vg - $Vascb051ljzh[$Vl0q4noiexi4]['firstCode']);
									$Vqdeou2vhybv = ($Vqdeou2vhybvlyphIndexArray[$V55vc4mewy5wdRangeOffset] + $Vascb051ljzh[$Vl0q4noiexi4]['idDelta']) % 65536;
									if ($Vqdeou2vhybv < 0) {
										$Vqdeou2vhybv = 0;
									}
									$Vu2ccwvkdeza[$Vqdeou2vhybv] = true;
								}
							}
						}
					}
					break;
				}
				case 4: { 
					$Vqfuror45qjm = TCPDF_STATIC::_getUSHORT($Voc1qigl3k5y, $Vzl5igrsjgyf);
					$Vzl5igrsjgyf += 2;
					$Vzl5igrsjgyf += 2; 
					$V3pcjsoxo1bb = floor(TCPDF_STATIC::_getUSHORT($Voc1qigl3k5y, $Vzl5igrsjgyf) / 2);
					$Vzl5igrsjgyf += 2;
					$Vzl5igrsjgyf += 6; 
					$V1p3d5r2ha2t = array(); 
					for ($Vl0q4noiexi4 = 0; $Vl0q4noiexi4 < $V3pcjsoxo1bb; ++$Vl0q4noiexi4) {
						$V1p3d5r2ha2t[$Vl0q4noiexi4] = TCPDF_STATIC::_getUSHORT($Voc1qigl3k5y, $Vzl5igrsjgyf);
						$Vzl5igrsjgyf += 2;
					}
					$Vzl5igrsjgyf += 2; 
					$Vrnuvlff0buc = array(); 
					for ($Vl0q4noiexi4 = 0; $Vl0q4noiexi4 < $V3pcjsoxo1bb; ++$Vl0q4noiexi4) {
						$Vrnuvlff0buc[$Vl0q4noiexi4] = TCPDF_STATIC::_getUSHORT($Voc1qigl3k5y, $Vzl5igrsjgyf);
						$Vzl5igrsjgyf += 2;
					}
					$V55vc4mewy5wdDelta = array(); 
					for ($Vl0q4noiexi4 = 0; $Vl0q4noiexi4 < $V3pcjsoxo1bb; ++$Vl0q4noiexi4) {
						$V55vc4mewy5wdDelta[$Vl0q4noiexi4] = TCPDF_STATIC::_getUSHORT($Voc1qigl3k5y, $Vzl5igrsjgyf);
						$Vzl5igrsjgyf += 2;
					}
					$V55vc4mewy5wdRangeOffset = array(); 
					for ($Vl0q4noiexi4 = 0; $Vl0q4noiexi4 < $V3pcjsoxo1bb; ++$Vl0q4noiexi4) {
						$V55vc4mewy5wdRangeOffset[$Vl0q4noiexi4] = TCPDF_STATIC::_getUSHORT($Voc1qigl3k5y, $Vzl5igrsjgyf);
						$Vzl5igrsjgyf += 2;
					}
					$Vqdeou2vhybvidlen = (floor($Vqfuror45qjm / 2) - 8 - (4 * $V3pcjsoxo1bb));
					$Vqdeou2vhybvlyphIdArray = array(); 
					for ($Vl0q4noiexi4 = 0; $Vl0q4noiexi4 < $Vqdeou2vhybvidlen; ++$Vl0q4noiexi4) {
						$Vqdeou2vhybvlyphIdArray[$Vl0q4noiexi4] = TCPDF_STATIC::_getUSHORT($Voc1qigl3k5y, $Vzl5igrsjgyf);
						$Vzl5igrsjgyf += 2;
					}
					for ($Vl0q4noiexi4 = 0; $Vl0q4noiexi4 < $V3pcjsoxo1bb; ++$Vl0q4noiexi4) {
						for ($Vwcmlurixvzg = $Vrnuvlff0buc[$Vl0q4noiexi4]; $Vwcmlurixvzg <= $V1p3d5r2ha2t[$Vl0q4noiexi4]; ++$Vwcmlurixvzg) {
							if (isset($Vr5hrnrkn2un[$Vwcmlurixvzg])) {
								if ($V55vc4mewy5wdRangeOffset[$Vl0q4noiexi4] == 0) {
									$Vqdeou2vhybv = ($V55vc4mewy5wdDelta[$Vl0q4noiexi4] + $Vwcmlurixvzg) % 65536;
								} else {
									$Vqdeou2vhybvid = (floor($V55vc4mewy5wdRangeOffset[$Vl0q4noiexi4] / 2) + ($Vwcmlurixvzg - $Vrnuvlff0buc[$Vl0q4noiexi4]) - ($V3pcjsoxo1bb - $Vl0q4noiexi4));
									$Vqdeou2vhybv = ($Vqdeou2vhybvlyphIdArray[$Vqdeou2vhybvid] + $V55vc4mewy5wdDelta[$Vl0q4noiexi4]) % 65536;
								}
								if ($Vqdeou2vhybv < 0) {
									$Vqdeou2vhybv = 0;
								}
								$Vu2ccwvkdeza[$Vqdeou2vhybv] = true;
							}
						}
					}	
					break;
				}
				case 6: { 
					$Vzl5igrsjgyf += 4; 
					$Vlw4eb1kn2ou = TCPDF_STATIC::_getUSHORT($Voc1qigl3k5y, $Vzl5igrsjgyf);
					$Vzl5igrsjgyf += 2;
					$V3kicou2vrht = TCPDF_STATIC::_getUSHORT($Voc1qigl3k5y, $Vzl5igrsjgyf);
					$Vzl5igrsjgyf += 2;
					for ($Vl0q4noiexi4 = 0; $Vl0q4noiexi4 < $V3kicou2vrht; ++$Vl0q4noiexi4) {
						$Vwcmlurixvzg = ($Vl0q4noiexi4 + $Vlw4eb1kn2ou);
						if (isset($Vr5hrnrkn2un[$Vwcmlurixvzg])) {
							$Vqdeou2vhybv = TCPDF_STATIC::_getUSHORT($Voc1qigl3k5y, $Vzl5igrsjgyf);
							$Vu2ccwvkdeza[$Vqdeou2vhybv] = true;
						}
						$Vzl5igrsjgyf += 2;
					}
					break;
				}
				case 8: { 
					$Vzl5igrsjgyf += 10; 
					for ($Vl0q4noiexi4 = 0; $Vl0q4noiexi4 < 8192; ++$Vl0q4noiexi4) {
						$V55vc4mewy5ws32[$Vl0q4noiexi4] = TCPDF_STATIC::_getBYTE($Voc1qigl3k5y, $Vzl5igrsjgyf);
						++$Vzl5igrsjgyf;
					}
					$Vktsq0grt2bh = TCPDF_STATIC::_getULONG($Voc1qigl3k5y, $Vzl5igrsjgyf);
					$Vzl5igrsjgyf += 4;
					for ($V55vc4mewy5w = 0; $V55vc4mewy5w < $Vktsq0grt2bh; ++$V55vc4mewy5w) {
						$Vxgeut2tb3oi = TCPDF_STATIC::_getULONG($Voc1qigl3k5y, $Vzl5igrsjgyf);
						$Vzl5igrsjgyf += 4;
						$V33zanb5ndp2 = TCPDF_STATIC::_getULONG($Voc1qigl3k5y, $Vzl5igrsjgyf);
						$Vzl5igrsjgyf += 4;
						$V0vksnjondyf = TCPDF_STATIC::_getULONG($Voc1qigl3k5y, $Vzl5igrsjgyf);
						$Vzl5igrsjgyf += 4;
						for ($Vl0q4noiexi4 = $Vxgeut2tb3oi; $Vl0q4noiexi4 <= $V33zanb5ndp2; ++$Vl0q4noiexi4) {
							$V55vc4mewy5ws32idx = floor($Vwcmlurixvzg / 8);
							if ((isset($V55vc4mewy5ws32[$V55vc4mewy5ws32idx])) AND (($V55vc4mewy5ws32[$V55vc4mewy5ws32idx] & (1 << (7 - ($Vwcmlurixvzg % 8)))) == 0)) {
								$Vwcmlurixvzg = $Vl0q4noiexi4;
							} else {
								
								
								
								
								$Vwcmlurixvzg = ((55232 + ($Vl0q4noiexi4 >> 10)) << 10) + (0xDC00 + ($Vl0q4noiexi4 & 0x3FF)) -56613888;
							}
							if (isset($Vr5hrnrkn2un[$Vwcmlurixvzg])) {
								$Vu2ccwvkdeza[$V0vksnjondyf] = true;
							}
							++$V0vksnjondyf;
						}
					}
					break;
				}
				case 10: { 
					$Vzl5igrsjgyf += 10; 
					$Vxgeut2tb3oi = TCPDF_STATIC::_getULONG($Voc1qigl3k5y, $Vzl5igrsjgyf);
					$Vzl5igrsjgyf += 4;
					$Vfrgmjlshamg = TCPDF_STATIC::_getULONG($Voc1qigl3k5y, $Vzl5igrsjgyf);
					$Vzl5igrsjgyf += 4;
					for ($Vl0q4noiexi4 = 0; $Vl0q4noiexi4 < $Vfrgmjlshamg; ++$Vl0q4noiexi4) {
						$Vwcmlurixvzg = ($Vl0q4noiexi4 + $Vxgeut2tb3oi);
						if (isset($Vr5hrnrkn2un[$Vwcmlurixvzg])) {
							$Vqdeou2vhybv = TCPDF_STATIC::_getUSHORT($Voc1qigl3k5y, $Vzl5igrsjgyf);
							$Vu2ccwvkdeza[$Vqdeou2vhybv] = true;
						}
						$Vzl5igrsjgyf += 2;
					}
					break;
				}
				case 12: { 
					$Vzl5igrsjgyf += 10; 
					$Vktsq0grt2bh = TCPDF_STATIC::_getULONG($Voc1qigl3k5y, $Vzl5igrsjgyf);
					$Vzl5igrsjgyf += 4;
					for ($Vl0q4noiexi4 = 0; $Vl0q4noiexi4 < $Vktsq0grt2bh; ++$Vl0q4noiexi4) {
						$Vxgeut2tb3oi = TCPDF_STATIC::_getULONG($Voc1qigl3k5y, $Vzl5igrsjgyf);
						$Vzl5igrsjgyf += 4;
						$V33zanb5ndp2 = TCPDF_STATIC::_getULONG($Voc1qigl3k5y, $Vzl5igrsjgyf);
						$Vzl5igrsjgyf += 4;
						$V3tiey0f03za = TCPDF_STATIC::_getULONG($Voc1qigl3k5y, $Vzl5igrsjgyf);
						$Vzl5igrsjgyf += 4;
						for ($Vwcmlurixvzg = $Vxgeut2tb3oi; $Vwcmlurixvzg <= $V33zanb5ndp2; ++$Vwcmlurixvzg) {
							if (isset($Vr5hrnrkn2un[$Vwcmlurixvzg])) {
								$Vu2ccwvkdeza[$V3tiey0f03za] = true;
							}
							++$V3tiey0f03za;
						}
					}
					break;
				}
				case 13: { 
					
					break;
				}
				case 14: { 
					
					break;
				}
			}
		}
		
		$Vacxmgj4wgth = $Vu2ccwvkdeza;
		while (!empty($Vacxmgj4wgth)) {
			$Vukk1ibpnkmv = $Vacxmgj4wgth;
			$Vacxmgj4wgth = array();
			foreach ($Vukk1ibpnkmv as $Vl0q4noiexi4ey => $Vz0hmukhwa4zal) {
				if (isset($V55vc4mewy5wndexToLoc[$Vl0q4noiexi4ey])) {
					$Vzl5igrsjgyf = ($Vntfufcb4vaz['glyf']['offset'] + $V55vc4mewy5wndexToLoc[$Vl0q4noiexi4ey]);
					$V2zw23aposaa = TCPDF_STATIC::_getSHORT($Voc1qigl3k5y, $Vzl5igrsjgyf);
					$Vzl5igrsjgyf += 2;
					if ($V2zw23aposaa < 0) { 
						$Vzl5igrsjgyf += 8; 
						do {
							$Vqwgb1lkvfzg = TCPDF_STATIC::_getUSHORT($Voc1qigl3k5y, $Vzl5igrsjgyf);
							$Vzl5igrsjgyf += 2;
							$Vqdeou2vhybvlyphIndex = TCPDF_STATIC::_getUSHORT($Voc1qigl3k5y, $Vzl5igrsjgyf);
							$Vzl5igrsjgyf += 2;
							if (!isset($Vu2ccwvkdeza[$Vqdeou2vhybvlyphIndex])) {
								
								$Vacxmgj4wgth[$Vqdeou2vhybvlyphIndex] = true;
							}
							
							if ($Vqwgb1lkvfzg & 1) {
								$Vzl5igrsjgyf += 4;
							} else {
								$Vzl5igrsjgyf += 2;
							}
							if ($Vqwgb1lkvfzg & 8) {
								$Vzl5igrsjgyf += 2;
							} elseif ($Vqwgb1lkvfzg & 64) {
								$Vzl5igrsjgyf += 4;
							} elseif ($Vqwgb1lkvfzg & 128) {
								$Vzl5igrsjgyf += 8;
							}
						} while ($Vqwgb1lkvfzg & 32);
					}
				}
			}
			$Vu2ccwvkdeza += $Vacxmgj4wgth;
		}
		
		ksort($Vu2ccwvkdeza);
		
		$Vqdeou2vhybvlyf = '';
		$Vlflhbsoqmh5 = '';
		$Vzl5igrsjgyf = 0;
		$Vqdeou2vhybvlyf_offset = $Vntfufcb4vaz['glyf']['offset'];
		for ($V55vc4mewy5w = 0; $V55vc4mewy5w < $Vsmrjmvwzsz4; ++$V55vc4mewy5w) {
			if (isset($Vu2ccwvkdeza[$V55vc4mewy5w])) {
				$Vqfuror45qjm = ($V55vc4mewy5wndexToLoc[($V55vc4mewy5w + 1)] - $V55vc4mewy5wndexToLoc[$V55vc4mewy5w]);
				$Vqdeou2vhybvlyf .= substr($Voc1qigl3k5y, ($Vqdeou2vhybvlyf_offset + $V55vc4mewy5wndexToLoc[$V55vc4mewy5w]), $Vqfuror45qjm);
			} else {
				$Vqfuror45qjm = 0;
			}
			if ($Vzc2mmakcuvq) {
				$Vlflhbsoqmh5 .= pack('n', floor($Vzl5igrsjgyf / 2));
			} else {
				$Vlflhbsoqmh5 .= pack('N', $Vzl5igrsjgyf);
			}
			$Vzl5igrsjgyf += $Vqfuror45qjm;
		}
		
		
		$Vntfufcb4vaz_names = array ('head', 'hhea', 'hmtx', 'maxp', 'cvt ', 'fpgm', 'prep'); 
		
		$Vzl5igrsjgyf = 12;
		foreach ($Vntfufcb4vaz as $Vxpg0kmcipfu => $Vz0hmukhwa4zal) {
			if (in_array($Vxpg0kmcipfu, $Vntfufcb4vaz_names)) {
				$Vntfufcb4vaz[$Vxpg0kmcipfu]['data'] = substr($Voc1qigl3k5y, $Vntfufcb4vaz[$Vxpg0kmcipfu]['offset'], $Vntfufcb4vaz[$Vxpg0kmcipfu]['length']);
				if ($Vxpg0kmcipfu == 'head') {
					
					$Vntfufcb4vaz[$Vxpg0kmcipfu]['data'] = substr($Vntfufcb4vaz[$Vxpg0kmcipfu]['data'], 0, 8)."\x0\x0\x0\x0".substr($Vntfufcb4vaz[$Vxpg0kmcipfu]['data'], 12);
				}
				$Vrtfgexvs0sl = 4 - ($Vntfufcb4vaz[$Vxpg0kmcipfu]['length'] % 4);
				if ($Vrtfgexvs0sl != 4) {
					
					$Vntfufcb4vaz[$Vxpg0kmcipfu]['length'] += $Vrtfgexvs0sl;
					$Vntfufcb4vaz[$Vxpg0kmcipfu]['data'] .= str_repeat("\x0", $Vrtfgexvs0sl);
				}
				$Vntfufcb4vaz[$Vxpg0kmcipfu]['offset'] = $Vzl5igrsjgyf;
				$Vzl5igrsjgyf += $Vntfufcb4vaz[$Vxpg0kmcipfu]['length'];
				
				
			} else {
				unset($Vntfufcb4vaz[$Vxpg0kmcipfu]);
			}
		}
		
		$Vntfufcb4vaz['loca']['data'] = $Vlflhbsoqmh5;
		$Vntfufcb4vaz['loca']['length'] = strlen($Vlflhbsoqmh5);
		$Vrtfgexvs0sl = 4 - ($Vntfufcb4vaz['loca']['length'] % 4);
		if ($Vrtfgexvs0sl != 4) {
			
			$Vntfufcb4vaz['loca']['length'] += $Vrtfgexvs0sl;
			$Vntfufcb4vaz['loca']['data'] .= str_repeat("\x0", $Vrtfgexvs0sl);
		}
		$Vntfufcb4vaz['loca']['offset'] = $Vzl5igrsjgyf;
		$Vntfufcb4vaz['loca']['checkSum'] = self::_getTTFtableChecksum($Vntfufcb4vaz['loca']['data'], $Vntfufcb4vaz['loca']['length']);
		$Vzl5igrsjgyf += $Vntfufcb4vaz['loca']['length'];
		
		$Vntfufcb4vaz['glyf']['data'] = $Vqdeou2vhybvlyf;
		$Vntfufcb4vaz['glyf']['length'] = strlen($Vqdeou2vhybvlyf);
		$Vrtfgexvs0sl = 4 - ($Vntfufcb4vaz['glyf']['length'] % 4);
		if ($Vrtfgexvs0sl != 4) {
			
			$Vntfufcb4vaz['glyf']['length'] += $Vrtfgexvs0sl;
			$Vntfufcb4vaz['glyf']['data'] .= str_repeat("\x0", $Vrtfgexvs0sl);
		}
		$Vntfufcb4vaz['glyf']['offset'] = $Vzl5igrsjgyf;
		$Vntfufcb4vaz['glyf']['checkSum'] = self::_getTTFtableChecksum($Vntfufcb4vaz['glyf']['data'], $Vntfufcb4vaz['glyf']['length']);
		
		$Voc1qigl3k5y = '';
		$Voc1qigl3k5y .= pack('N', 0x10000); 
		$V3moem4whahn = count($Vntfufcb4vaz);
		$Voc1qigl3k5y .= pack('n', $V3moem4whahn); 
		$Vlk11l53wzxg = floor(log($V3moem4whahn, 2));
		$Vlf3gc3prjycRange = pow(2, $Vlk11l53wzxg) * 16;
		$Vfhkt4vbeualangeShift = ($V3moem4whahn * 16) - $Vlf3gc3prjycRange;
		$Voc1qigl3k5y .= pack('n', $Vlf3gc3prjycRange); 
		$Voc1qigl3k5y .= pack('n', $Vlk11l53wzxg); 
		$Voc1qigl3k5y .= pack('n', $Vfhkt4vbeualangeShift); 
		$Vzl5igrsjgyf = ($V3moem4whahn * 16);
		foreach ($Vntfufcb4vaz as $Vxpg0kmcipfu => $Vmfvrsd5xyqh) {
			$Voc1qigl3k5y .= $Vxpg0kmcipfu; 
			$Voc1qigl3k5y .= pack('N', $Vmfvrsd5xyqh['checkSum']); 
			$Voc1qigl3k5y .= pack('N', ($Vmfvrsd5xyqh['offset'] + $Vzl5igrsjgyf)); 
			$Voc1qigl3k5y .= pack('N', $Vmfvrsd5xyqh['length']); 
		}
		foreach ($Vntfufcb4vaz as $Vmfvrsd5xyqh) {
			$Voc1qigl3k5y .= $Vmfvrsd5xyqh['data'];
		}
		
		$VwcmlurixvzgheckSumAdjustment = 0xB1B0AFBA - self::_getTTFtableChecksum($Voc1qigl3k5y, strlen($Voc1qigl3k5y));
		$Voc1qigl3k5y = substr($Voc1qigl3k5y, 0, $Vntfufcb4vaz['head']['offset'] + 8).pack('N', $VwcmlurixvzgheckSumAdjustment).substr($Voc1qigl3k5y, $Vntfufcb4vaz['head']['offset'] + 12);
		return $Voc1qigl3k5y;
	}

	
	public static function _putfontwidths($Voc1qigl3k5y, $Vanrq3megkrtoffset=0) {
		ksort($Voc1qigl3k5y['cw']);
		$Vfhkt4vbeualangeid = 0;
		$Vfhkt4vbeualange = array();
		$Vnkso2pjhuwr = -2;
		$Vrypfyj2lufy = -1;
		$V55vc4mewy5wnterval = false;
		
		foreach ($Voc1qigl3k5y['cw'] as $Vanrq3megkrt => $Vvp2z3iuh5yx) {
			$Vanrq3megkrt -= $Vanrq3megkrtoffset;
			if ($Voc1qigl3k5y['subset'] AND (!isset($Voc1qigl3k5y['subsetchars'][$Vanrq3megkrt]))) {
				
				continue;
			}
			if ($Vvp2z3iuh5yx != $Voc1qigl3k5y['dw']) {
				if ($Vanrq3megkrt == ($Vnkso2pjhuwr + 1)) {
					
					if ($Vvp2z3iuh5yx == $Vrypfyj2lufy) {
						if ($Vvp2z3iuh5yx == $Vfhkt4vbeualange[$Vfhkt4vbeualangeid][0]) {
							$Vfhkt4vbeualange[$Vfhkt4vbeualangeid][] = $Vvp2z3iuh5yx;
						} else {
							array_pop($Vfhkt4vbeualange[$Vfhkt4vbeualangeid]);
							
							$Vfhkt4vbeualangeid = $Vnkso2pjhuwr;
							$Vfhkt4vbeualange[$Vfhkt4vbeualangeid] = array();
							$Vfhkt4vbeualange[$Vfhkt4vbeualangeid][] = $Vrypfyj2lufy;
							$Vfhkt4vbeualange[$Vfhkt4vbeualangeid][] = $Vvp2z3iuh5yx;
						}
						$V55vc4mewy5wnterval = true;
						$Vfhkt4vbeualange[$Vfhkt4vbeualangeid]['interval'] = true;
					} else {
						if ($V55vc4mewy5wnterval) {
							
							$Vfhkt4vbeualangeid = $Vanrq3megkrt;
							$Vfhkt4vbeualange[$Vfhkt4vbeualangeid] = array();
							$Vfhkt4vbeualange[$Vfhkt4vbeualangeid][] = $Vvp2z3iuh5yx;
						} else {
							$Vfhkt4vbeualange[$Vfhkt4vbeualangeid][] = $Vvp2z3iuh5yx;
						}
						$V55vc4mewy5wnterval = false;
					}
				} else {
					
					$Vfhkt4vbeualangeid = $Vanrq3megkrt;
					$Vfhkt4vbeualange[$Vfhkt4vbeualangeid] = array();
					$Vfhkt4vbeualange[$Vfhkt4vbeualangeid][] = $Vvp2z3iuh5yx;
					$V55vc4mewy5wnterval = false;
				}
				$Vnkso2pjhuwr = $Vanrq3megkrt;
				$Vrypfyj2lufy = $Vvp2z3iuh5yx;
			}
		}
		
		$V3pp30vqegev = -1;
		$Vnnu4fudssrf = -1;
		$Vbvngbhr1xxd = false;
		foreach ($Vfhkt4vbeualange as $Vl0q4noiexi4 => $Vyyion2b004t) {
			$Vwcmlurixvzgws = count($Vyyion2b004t);
			if (($Vl0q4noiexi4 == $Vnnu4fudssrf) AND (!$Vbvngbhr1xxd) AND ((!isset($Vyyion2b004t['interval'])) OR ($Vwcmlurixvzgws < 4))) {
				if (isset($Vfhkt4vbeualange[$Vl0q4noiexi4]['interval'])) {
					unset($Vfhkt4vbeualange[$Vl0q4noiexi4]['interval']);
				}
				$Vfhkt4vbeualange[$V3pp30vqegev] = array_merge($Vfhkt4vbeualange[$V3pp30vqegev], $Vfhkt4vbeualange[$Vl0q4noiexi4]);
				unset($Vfhkt4vbeualange[$Vl0q4noiexi4]);
			} else {
				$V3pp30vqegev = $Vl0q4noiexi4;
			}
			$Vnnu4fudssrf = $Vl0q4noiexi4 + $Vwcmlurixvzgws;
			if (isset($Vyyion2b004t['interval'])) {
				if ($Vwcmlurixvzgws > 3) {
					$Vbvngbhr1xxd = true;
				} else {
					$Vbvngbhr1xxd = false;
				}
				if (isset($Vfhkt4vbeualange[$Vl0q4noiexi4]['interval'])) {
					unset($Vfhkt4vbeualange[$Vl0q4noiexi4]['interval']);
				}
				--$Vnnu4fudssrf;
			} else {
				$Vbvngbhr1xxd = false;
			}
		}
		
		$Vim12f51jw5r = '';
		foreach ($Vfhkt4vbeualange as $Vl0q4noiexi4 => $Vyyion2b004t) {
			if (count(array_count_values($Vyyion2b004t)) == 1) {
				
				$Vim12f51jw5r .= ' '.$Vl0q4noiexi4.' '.($Vl0q4noiexi4 + count($Vyyion2b004t) - 1).' '.$Vyyion2b004t[0];
			} else {
				
				$Vim12f51jw5r .= ' '.$Vl0q4noiexi4.' [ '.implode(' ', $Vyyion2b004t).' ]';
			}
		}
		return '/W ['.$Vim12f51jw5r.' ]';
	}




	
	public static function updateCIDtoGIDmap($Vpjfi4jxk0kd, $Vanrq3megkrt, $Vqdeou2vhybvid) {
		if (($Vanrq3megkrt >= 0) AND ($Vanrq3megkrt <= 0xFFFF) AND ($Vqdeou2vhybvid >= 0)) {
			if ($Vqdeou2vhybvid > 0xFFFF) {
				$Vqdeou2vhybvid -= 0x10000;
			}
			$Vpjfi4jxk0kd[($Vanrq3megkrt * 2)] = chr($Vqdeou2vhybvid >> 8);
			$Vpjfi4jxk0kd[(($Vanrq3megkrt * 2) + 1)] = chr($Vqdeou2vhybvid & 0xFF);
		}
		return $Vpjfi4jxk0kd;
	}

	
	public static function _getfontpath() {
		if (!defined('K_PATH_FONTS') AND is_dir($Vrc5y4iuwfob = realpath(dirname(__FILE__).'/../fonts'))) {
			if (substr($Vrc5y4iuwfob, -1) != '/') {
				$Vrc5y4iuwfob .= '/';
			}
			define('K_PATH_FONTS', $Vrc5y4iuwfob);
		}
		return defined('K_PATH_FONTS') ? K_PATH_FONTS : '';
	}



	
	public static function getFontFullPath($Vjluyuwumvof, $Voc1qigl3k5ydir=false) {
		$V2ibkem4p44j = '';
		
		if (($Voc1qigl3k5ydir !== false) AND @file_exists($Voc1qigl3k5ydir.$Vjluyuwumvof)) {
			$V2ibkem4p44j = $Voc1qigl3k5ydir.$Vjluyuwumvof;
		} elseif (@file_exists(self::_getfontpath().$Vjluyuwumvof)) {
			$V2ibkem4p44j = self::_getfontpath().$Vjluyuwumvof;
		} elseif (@file_exists($Vjluyuwumvof)) {
			$V2ibkem4p44j = $Vjluyuwumvof;
		}
		return $V2ibkem4p44j;
	}




	
	public static function getFontRefSize($Vpynh4hckwyw, $Vfhkt4vbeualefsize=12) {
		switch ($Vpynh4hckwyw) {
			case 'xx-small': {
				$Vpynh4hckwyw = ($Vfhkt4vbeualefsize - 4);
				break;
			}
			case 'x-small': {
				$Vpynh4hckwyw = ($Vfhkt4vbeualefsize - 3);
				break;
			}
			case 'small': {
				$Vpynh4hckwyw = ($Vfhkt4vbeualefsize - 2);
				break;
			}
			case 'medium': {
				$Vpynh4hckwyw = $Vfhkt4vbeualefsize;
				break;
			}
			case 'large': {
				$Vpynh4hckwyw = ($Vfhkt4vbeualefsize + 2);
				break;
			}
			case 'x-large': {
				$Vpynh4hckwyw = ($Vfhkt4vbeualefsize + 4);
				break;
			}
			case 'xx-large': {
				$Vpynh4hckwyw = ($Vfhkt4vbeualefsize + 6);
				break;
			}
			case 'smaller': {
				$Vpynh4hckwyw = ($Vfhkt4vbeualefsize - 3);
				break;
			}
			case 'larger': {
				$Vpynh4hckwyw = ($Vfhkt4vbeualefsize + 3);
				break;
			}
		}
		return $Vpynh4hckwyw;
	}



















































	
	public static function unichr($Vwcmlurixvzg, $Vumhd4brlo0g=true) {
		if (!$Vumhd4brlo0g) {
			return chr($Vwcmlurixvzg);
		} elseif ($Vwcmlurixvzg <= 0x7F) {
			
			return chr($Vwcmlurixvzg);
		} elseif ($Vwcmlurixvzg <= 0x7FF) {
			
			return chr(0xC0 | $Vwcmlurixvzg >> 6).chr(0x80 | $Vwcmlurixvzg & 0x3F);
		} elseif ($Vwcmlurixvzg <= 0xFFFF) {
			
			return chr(0xE0 | $Vwcmlurixvzg >> 12).chr(0x80 | $Vwcmlurixvzg >> 6 & 0x3F).chr(0x80 | $Vwcmlurixvzg & 0x3F);
		} elseif ($Vwcmlurixvzg <= 0x10FFFF) {
			
			return chr(0xF0 | $Vwcmlurixvzg >> 18).chr(0x80 | $Vwcmlurixvzg >> 12 & 0x3F).chr(0x80 | $Vwcmlurixvzg >> 6 & 0x3F).chr(0x80 | $Vwcmlurixvzg & 0x3F);
		} else {
			return '';
		}
	}

	
	public static function unichrUnicode($Vwcmlurixvzg) {
		return self::unichr($Vwcmlurixvzg, true);
	}

	
	public static function unichrASCII($Vwcmlurixvzg) {
		return self::unichr($Vwcmlurixvzg, false);
	}

	
	public static function arrUTF8ToUTF16BE($Vumhd4brlo0g, $V3i2v2p4s0wu=false) {
		$V2c4heltowai = ''; 
		if ($V3i2v2p4s0wu) {
			$V2c4heltowai .= "\xFE\xFF"; 
		}
		foreach ($Vumhd4brlo0g as $Vwcmlurixvzghar) {
			if ($Vwcmlurixvzghar == 0x200b) {
				
			} elseif ($Vwcmlurixvzghar == 0xFFFD) {
				$V2c4heltowai .= "\xFF\xFD"; 
			} elseif ($Vwcmlurixvzghar < 0x10000) {
				$V2c4heltowai .= chr($Vwcmlurixvzghar >> 0x08);
				$V2c4heltowai .= chr($Vwcmlurixvzghar & 0xFF);
			} else {
				$Vwcmlurixvzghar -= 0x10000;
				$Vim12f51jw5r1 = 0xD800 | ($Vwcmlurixvzghar >> 0x0a);
				$Vim12f51jw5r2 = 0xDC00 | ($Vwcmlurixvzghar & 0x3FF);
				$V2c4heltowai .= chr($Vim12f51jw5r1 >> 0x08);
				$V2c4heltowai .= chr($Vim12f51jw5r1 & 0xFF);
				$V2c4heltowai .= chr($Vim12f51jw5r2 >> 0x08);
				$V2c4heltowai .= chr($Vim12f51jw5r2 & 0xFF);
			}
		}
		return $V2c4heltowai;
	}

	
	public static function UTF8ArrayToUniArray($V435t14pmilx, $V55vc4mewy5wsunicode=true) {
		if ($V55vc4mewy5wsunicode) {
			return array_map(array('TCPDF_FONTS', 'unichrUnicode'), $V435t14pmilx);
		}
		return array_map(array('TCPDF_FONTS', 'unichrASCII'), $V435t14pmilx);
	}

	
	public static function UTF8ArrSubString($V1qh4mwv3ta1, $Vbg5krdrsuyy='', $V2lhjwg4rnas='', $Vumhd4brlo0g=true) {
		if (strlen($Vbg5krdrsuyy) == 0) {
			$Vbg5krdrsuyy = 0;
		}
		if (strlen($V2lhjwg4rnas) == 0) {
			$V2lhjwg4rnas = count($V1qh4mwv3ta1);
		}
		$Vqnnai3q0zzj = '';
		for ($V55vc4mewy5w = $Vbg5krdrsuyy; $V55vc4mewy5w < $V2lhjwg4rnas; ++$V55vc4mewy5w) {
			$Vqnnai3q0zzj .= self::unichr($V1qh4mwv3ta1[$V55vc4mewy5w], $Vumhd4brlo0g);
		}
		return $Vqnnai3q0zzj;
	}

	
	public static function UniArrSubString($Vtmvuaq2pmol, $Vbg5krdrsuyy='', $V2lhjwg4rnas='') {
		if (strlen($Vbg5krdrsuyy) == 0) {
			$Vbg5krdrsuyy = 0;
		}
		if (strlen($V2lhjwg4rnas) == 0) {
			$V2lhjwg4rnas = count($Vtmvuaq2pmol);
		}
		$Vqnnai3q0zzj = '';
		for ($V55vc4mewy5w=$Vbg5krdrsuyy; $V55vc4mewy5w < $V2lhjwg4rnas; ++$V55vc4mewy5w) {
			$Vqnnai3q0zzj .= $Vtmvuaq2pmol[$V55vc4mewy5w];
		}
		return $Vqnnai3q0zzj;
	}

	
	public static function UTF8ArrToLatin1Arr($Vumhd4brlo0g) {
		$Vd3hw3b3u104 = array(); 
		foreach ($Vumhd4brlo0g as $Vwcmlurixvzghar) {
			if ($Vwcmlurixvzghar < 256) {
				$Vd3hw3b3u104[] = $Vwcmlurixvzghar;
			} elseif (array_key_exists($Vwcmlurixvzghar, TCPDF_FONT_DATA::$Vk5uvbf12qne)) {
				
				$Vd3hw3b3u104[] = TCPDF_FONT_DATA::$Vk5uvbf12qne[$Vwcmlurixvzghar];
			} elseif ($Vwcmlurixvzghar == 0xFFFD) {
				
			} else {
				$Vd3hw3b3u104[] = 63; 
			}
		}
		return $Vd3hw3b3u104;
	}

	
	public static function UTF8ArrToLatin1($Vumhd4brlo0g) {
		$V2c4heltowai = ''; 
		foreach ($Vumhd4brlo0g as $Vwcmlurixvzghar) {
			if ($Vwcmlurixvzghar < 256) {
				$V2c4heltowai .= chr($Vwcmlurixvzghar);
			} elseif (array_key_exists($Vwcmlurixvzghar, TCPDF_FONT_DATA::$Vk5uvbf12qne)) {
				
				$V2c4heltowai .= chr(TCPDF_FONT_DATA::$Vk5uvbf12qne[$Vwcmlurixvzghar]);
			} elseif ($Vwcmlurixvzghar == 0xFFFD) {
				
			} else {
				$V2c4heltowai .= '?';
			}
		}
		return $V2c4heltowai;
	}

	
	public static function uniord($Veauadwmqz3q) {
		if (!isset(self::$Vtjog51fyqdp[$Veauadwmqz3q])) {
			self::$Vtjog51fyqdp[$Veauadwmqz3q] = self::getUniord($Veauadwmqz3q);
		}
		return self::$Vtjog51fyqdp[$Veauadwmqz3q];
	}

	
	public static function getUniord($Veauadwmqz3q) {
		if (function_exists('mb_convert_encoding')) {
			list(, $Vwcmlurixvzghar) = @unpack('N', mb_convert_encoding($Veauadwmqz3q, 'UCS-4BE', 'UTF-8'));
			if ($Vwcmlurixvzghar >= 0) {
				return $Vwcmlurixvzghar;
			}
		}
		$Vz1lbqikr4om = array(); 
		$Vwcmlurixvzgountbytes = 0;
		$Vswgxax0kujf = 1; 
		$Vqfuror45qjm = strlen($Veauadwmqz3q);
		for ($V55vc4mewy5w = 0; $V55vc4mewy5w < $Vqfuror45qjm; ++$V55vc4mewy5w) {
			$Vwcmlurixvzghar = ord($Veauadwmqz3q[$V55vc4mewy5w]); 
			if ($Vwcmlurixvzgountbytes == 0) { 
				if ($Vwcmlurixvzghar <= 0x7F) {
					return $Vwcmlurixvzghar; 
				} elseif (($Vwcmlurixvzghar >> 0x05) == 0x06) { 
					$Vz1lbqikr4om[] = ($Vwcmlurixvzghar - 0xC0) << 0x06;
					++$Vwcmlurixvzgountbytes;
					$Vswgxax0kujf = 2;
				} elseif (($Vwcmlurixvzghar >> 0x04) == 0x0E) { 
					$Vz1lbqikr4om[] = ($Vwcmlurixvzghar - 0xE0) << 0x0C;
					++$Vwcmlurixvzgountbytes;
					$Vswgxax0kujf = 3;
				} elseif (($Vwcmlurixvzghar >> 0x03) == 0x1E) { 
					$Vz1lbqikr4om[] = ($Vwcmlurixvzghar - 0xF0) << 0x12;
					++$Vwcmlurixvzgountbytes;
					$Vswgxax0kujf = 4;
				} else {
					
					return 0xFFFD;
				}
			} elseif (($Vwcmlurixvzghar >> 0x06) == 0x02) { 
				$Vz1lbqikr4om[] = $Vwcmlurixvzghar - 0x80;
				++$Vwcmlurixvzgountbytes;
				if ($Vwcmlurixvzgountbytes == $Vswgxax0kujf) {
					
					$Vwcmlurixvzghar = $Vz1lbqikr4om[0];
					for ($Vuaufi3la1vg = 1; $Vuaufi3la1vg < $Vswgxax0kujf; ++$Vuaufi3la1vg) {
						$Vwcmlurixvzghar += ($Vz1lbqikr4om[$Vuaufi3la1vg] << (($Vswgxax0kujf - $Vuaufi3la1vg - 1) * 0x06));
					}
					if ((($Vwcmlurixvzghar >= 0xD800) AND ($Vwcmlurixvzghar <= 0xDFFF)) OR ($Vwcmlurixvzghar >= 0x10FFFF)) {
						
						
						
						
						return 0xFFFD; 
					} else {
						return $Vwcmlurixvzghar;
					}
				}
			} else {
				
				return 0xFFFD;
			}
		}
		return 0xFFFD;
	}

	
	public static function UTF8StringToArray($Vdk4ylr1xvs5, $V55vc4mewy5wsunicode=true, &$Vwcmlurixvzgurrentfont) {
		if ($V55vc4mewy5wsunicode) {
			
			$Vwcmlurixvzghars = TCPDF_STATIC::pregSplit('//','u', $Vdk4ylr1xvs5, -1, PREG_SPLIT_NO_EMPTY);
			$Vwcmlurixvzgarr = array_map(array('TCPDF_FONTS', 'uniord'), $Vwcmlurixvzghars);
		} else {
			$Vwcmlurixvzghars = str_split($Vdk4ylr1xvs5);
			$Vwcmlurixvzgarr = array_map('ord', $Vwcmlurixvzghars);
		}
		$Vwcmlurixvzgurrentfont['subsetchars'] += array_fill_keys($Vwcmlurixvzgarr, true);
		return $Vwcmlurixvzgarr;
	}

	
	public static function UTF8ToLatin1($Vdk4ylr1xvs5, $V55vc4mewy5wsunicode=true, &$Vwcmlurixvzgurrentfont) {
		$Vumhd4brlo0g = self::UTF8StringToArray($Vdk4ylr1xvs5, $V55vc4mewy5wsunicode, $Vwcmlurixvzgurrentfont); 
		return self::UTF8ArrToLatin1($Vumhd4brlo0g);
	}

	
	public static function UTF8ToUTF16BE($Vdk4ylr1xvs5, $V3i2v2p4s0wu=false, $V55vc4mewy5wsunicode=true, &$Vwcmlurixvzgurrentfont) {
		if (!$V55vc4mewy5wsunicode) {
			return $Vdk4ylr1xvs5; 
		}
		$Vumhd4brlo0g = self::UTF8StringToArray($Vdk4ylr1xvs5, $V55vc4mewy5wsunicode, $Vwcmlurixvzgurrentfont); 
		return self::arrUTF8ToUTF16BE($Vumhd4brlo0g, $V3i2v2p4s0wu);
	}

	
	public static function utf8StrRev($Vdk4ylr1xvs5, $V3i2v2p4s0wu=false, $V5vh55bxdbzh=false, $V55vc4mewy5wsunicode=true, &$Vwcmlurixvzgurrentfont) {
		return self::utf8StrArrRev(self::UTF8StringToArray($Vdk4ylr1xvs5, $V55vc4mewy5wsunicode, $Vwcmlurixvzgurrentfont), $Vdk4ylr1xvs5, $V3i2v2p4s0wu, $V5vh55bxdbzh, $V55vc4mewy5wsunicode, $Vwcmlurixvzgurrentfont);
	}

	
	public static function utf8StrArrRev($Vudz4oh4qikurr, $Vdk4ylr1xvs5='', $V3i2v2p4s0wu=false, $V5vh55bxdbzh=false, $V55vc4mewy5wsunicode=true, &$Vwcmlurixvzgurrentfont) {
		return self::arrUTF8ToUTF16BE(self::utf8Bidi($Vudz4oh4qikurr, $Vdk4ylr1xvs5, $V5vh55bxdbzh, $V55vc4mewy5wsunicode, $Vwcmlurixvzgurrentfont), $V3i2v2p4s0wu);
	}

	
	public static function utf8Bidi($V435t14pmilx, $Vdk4ylr1xvs5='', $V5vh55bxdbzh=false, $V55vc4mewy5wsunicode=true, &$Vwcmlurixvzgurrentfont) {
		
		$Vbih44jbzdvt = 0;
		
		$Vjsy2g223gnc = 0;
		if (TCPDF_STATIC::empty_string($Vdk4ylr1xvs5)) {
			
			$Vdk4ylr1xvs5 = self::UTF8ArrSubString($V435t14pmilx, '', '', $V55vc4mewy5wsunicode);
		}
		
		if (preg_match(TCPDF_FONT_DATA::$V1qlc5uzzthd, $Vdk4ylr1xvs5)) {
			$Vudz4oh4qikurabic = true;
		} else {
			$Vudz4oh4qikurabic = false;
		}
		
		if (!($V5vh55bxdbzh OR $Vudz4oh4qikurabic OR preg_match(TCPDF_FONT_DATA::$V5l4vgidgziv, $Vdk4ylr1xvs5))) {
			return $V435t14pmilx;
		}

		
		$Vui3s204nwaw = count($V435t14pmilx);

		if ($V5vh55bxdbzh == 'R') {
			$Vbih44jbzdvt = 1;
		} elseif ($V5vh55bxdbzh == 'L') {
			$Vbih44jbzdvt = 0;
		} else {
			
			
			for ($V55vc4mewy5w=0; $V55vc4mewy5w < $Vui3s204nwaw; ++$V55vc4mewy5w) {
				$Vvmwm1jsklgc = TCPDF_FONT_DATA::$Vhs5e1neecd2[$V435t14pmilx[$V55vc4mewy5w]];
				if ($Vvmwm1jsklgc == 'L') {
					$Vbih44jbzdvt = 0;
					break;
				} elseif (($Vvmwm1jsklgc == 'AL') OR ($Vvmwm1jsklgc == 'R')) {
					$Vbih44jbzdvt = 1;
					break;
				}
			}
		}

		
		$Vwcmlurixvzgel = $Vbih44jbzdvt;
		
		$Vmomynchnadl = 'N';
		$Vfhkt4vbeualemember = array();
		
		$Vjh3m3iu3ko3 = $Vbih44jbzdvt % 2 ? 'R' : 'L';
		$Vy03dibdaayh = $Vjh3m3iu3ko3;

		
		$Vwcmlurixvzghardata = Array();

		
		
		for ($V55vc4mewy5w=0; $V55vc4mewy5w < $Vui3s204nwaw; ++$V55vc4mewy5w) {
			if ($V435t14pmilx[$V55vc4mewy5w] == TCPDF_FONT_DATA::$V4gabzzgjutk) {
				
				
				
				$Vv4v32qabq1g = $Vwcmlurixvzgel + ($Vwcmlurixvzgel % 2) + 1;
				if ($Vv4v32qabq1g < 62) {
					$Vfhkt4vbeualemember[] = array('num' => TCPDF_FONT_DATA::$V4gabzzgjutk, 'cel' => $Vwcmlurixvzgel, 'dos' => $Vmomynchnadl);
					$Vwcmlurixvzgel = $Vv4v32qabq1g;
					$Vmomynchnadl = 'N';
					$Vjh3m3iu3ko3 = $Vy03dibdaayh;
					$Vy03dibdaayh = $Vwcmlurixvzgel % 2 ? 'R' : 'L';
				}
			} elseif ($V435t14pmilx[$V55vc4mewy5w] == TCPDF_FONT_DATA::$Vrr0l1xox3fu) {
				
				
				
				$Vv4v32qabq1g = $Vwcmlurixvzgel + 2 - ($Vwcmlurixvzgel % 2);
				if ( $Vv4v32qabq1g < 62 ) {
					$Vfhkt4vbeualemember[] = array('num' => TCPDF_FONT_DATA::$Vrr0l1xox3fu, 'cel' => $Vwcmlurixvzgel, 'dos' => $Vmomynchnadl);
					$Vwcmlurixvzgel = $Vv4v32qabq1g;
					$Vmomynchnadl = 'N';
					$Vjh3m3iu3ko3 = $Vy03dibdaayh;
					$Vy03dibdaayh = $Vwcmlurixvzgel % 2 ? 'R' : 'L';
				}
			} elseif ($V435t14pmilx[$V55vc4mewy5w] == TCPDF_FONT_DATA::$Veuon5fjde0m) {
				
				
				
				$Vv4v32qabq1g = $Vwcmlurixvzgel + ($Vwcmlurixvzgel % 2) + 1;
				if ($Vv4v32qabq1g < 62) {
					$Vfhkt4vbeualemember[] = array('num' => TCPDF_FONT_DATA::$Veuon5fjde0m, 'cel' => $Vwcmlurixvzgel, 'dos' => $Vmomynchnadl);
					$Vwcmlurixvzgel = $Vv4v32qabq1g;
					$Vmomynchnadl = 'R';
					$Vjh3m3iu3ko3 = $Vy03dibdaayh;
					$Vy03dibdaayh = $Vwcmlurixvzgel % 2 ? 'R' : 'L';
				}
			} elseif ($V435t14pmilx[$V55vc4mewy5w] == TCPDF_FONT_DATA::$Vyhp1xadz31t) {
				
				
				
				$Vv4v32qabq1g = $Vwcmlurixvzgel + 2 - ($Vwcmlurixvzgel % 2);
				if ( $Vv4v32qabq1g < 62 ) {
					$Vfhkt4vbeualemember[] = array('num' => TCPDF_FONT_DATA::$Vyhp1xadz31t, 'cel' => $Vwcmlurixvzgel, 'dos' => $Vmomynchnadl);
					$Vwcmlurixvzgel = $Vv4v32qabq1g;
					$Vmomynchnadl = 'L';
					$Vjh3m3iu3ko3 = $Vy03dibdaayh;
					$Vy03dibdaayh = $Vwcmlurixvzgel % 2 ? 'R' : 'L';
				}
			} elseif ($V435t14pmilx[$V55vc4mewy5w] == TCPDF_FONT_DATA::$V35bixtg1qux) {
				
				if (count($Vfhkt4vbeualemember)) {
					$Vpkspczcqpag = count($Vfhkt4vbeualemember ) - 1;
					if (($Vfhkt4vbeualemember[$Vpkspczcqpag]['num'] == TCPDF_FONT_DATA::$V4gabzzgjutk) OR
						($Vfhkt4vbeualemember[$Vpkspczcqpag]['num'] == TCPDF_FONT_DATA::$Vrr0l1xox3fu) OR
						($Vfhkt4vbeualemember[$Vpkspczcqpag]['num'] == TCPDF_FONT_DATA::$Veuon5fjde0m) OR
						($Vfhkt4vbeualemember[$Vpkspczcqpag]['num'] == TCPDF_FONT_DATA::$Vyhp1xadz31t)) {
						$Vo0gtfq1cn4d = array_pop($Vfhkt4vbeualemember);
						$Vwcmlurixvzgel = $Vo0gtfq1cn4d['cel'];
						$Vmomynchnadl = $Vo0gtfq1cn4d['dos'];
						$Vjh3m3iu3ko3 = $Vy03dibdaayh;
						$Vy03dibdaayh = ($Vwcmlurixvzgel > $Vo0gtfq1cn4d['cel'] ? $Vwcmlurixvzgel : $Vo0gtfq1cn4d['cel']) % 2 ? 'R' : 'L';
					}
				}
			} elseif (($V435t14pmilx[$V55vc4mewy5w] != TCPDF_FONT_DATA::$V4gabzzgjutk) AND
							 ($V435t14pmilx[$V55vc4mewy5w] != TCPDF_FONT_DATA::$Vrr0l1xox3fu) AND
							 ($V435t14pmilx[$V55vc4mewy5w] != TCPDF_FONT_DATA::$Veuon5fjde0m) AND
							 ($V435t14pmilx[$V55vc4mewy5w] != TCPDF_FONT_DATA::$Vyhp1xadz31t) AND
							 ($V435t14pmilx[$V55vc4mewy5w] != TCPDF_FONT_DATA::$V35bixtg1qux)) {
				
				
				
				if ($Vmomynchnadl != 'N') {
					$Vwcmlurixvzghardir = $Vmomynchnadl;
				} else {
					if (isset(TCPDF_FONT_DATA::$Vhs5e1neecd2[$V435t14pmilx[$V55vc4mewy5w]])) {
						$Vwcmlurixvzghardir = TCPDF_FONT_DATA::$Vhs5e1neecd2[$V435t14pmilx[$V55vc4mewy5w]];
					} else {
						$Vwcmlurixvzghardir = 'L';
					}
				}
				
				$Vwcmlurixvzghardata[] = array('char' => $V435t14pmilx[$V55vc4mewy5w], 'level' => $Vwcmlurixvzgel, 'type' => $Vwcmlurixvzghardir, 'sor' => $Vjh3m3iu3ko3, 'eor' => $Vy03dibdaayh);
			}
		} 

		
		
		

		
		
		
		$Vui3s204nwaw = count($Vwcmlurixvzghardata);

		
		$Vapgs5hypqxd = -1; 
		$Vt0su0laq1wy = 0; 
		for ($V55vc4mewy5w=0; $V55vc4mewy5w < $Vui3s204nwaw; ++$V55vc4mewy5w) {
			if ($Vwcmlurixvzghardata[$V55vc4mewy5w]['type'] == 'NSM') {
				if ($Vt0su0laq1wy) {
					$Vwcmlurixvzghardata[$V55vc4mewy5w]['type'] = $Vwcmlurixvzghardata[$V55vc4mewy5w]['sor'];
				} elseif ($V55vc4mewy5w > 0) {
					$Vwcmlurixvzghardata[$V55vc4mewy5w]['type'] = $Vwcmlurixvzghardata[($V55vc4mewy5w-1)]['type'];
				}
			}
			if ($Vwcmlurixvzghardata[$V55vc4mewy5w]['level'] != $Vapgs5hypqxd) {
				$Vt0su0laq1wy = 0;
			} else {
				++$Vt0su0laq1wy;
			}
			$Vapgs5hypqxd = $Vwcmlurixvzghardata[$V55vc4mewy5w]['level'];
		}

		
		$Vapgs5hypqxd = -1;
		$Vt0su0laq1wy = 0;
		for ($V55vc4mewy5w=0; $V55vc4mewy5w < $Vui3s204nwaw; ++$V55vc4mewy5w) {
			if ($Vwcmlurixvzghardata[$V55vc4mewy5w]['char'] == 'EN') {
				for ($Vuaufi3la1vg=$Vt0su0laq1wy; $Vuaufi3la1vg >= 0; $Vuaufi3la1vg--) {
					if ($Vwcmlurixvzghardata[$Vuaufi3la1vg]['type'] == 'AL') {
						$Vwcmlurixvzghardata[$V55vc4mewy5w]['type'] = 'AN';
					} elseif (($Vwcmlurixvzghardata[$Vuaufi3la1vg]['type'] == 'L') OR ($Vwcmlurixvzghardata[$Vuaufi3la1vg]['type'] == 'R')) {
						break;
					}
				}
			}
			if ($Vwcmlurixvzghardata[$V55vc4mewy5w]['level'] != $Vapgs5hypqxd) {
				$Vt0su0laq1wy = 0;
			} else {
				++$Vt0su0laq1wy;
			}
			$Vapgs5hypqxd = $Vwcmlurixvzghardata[$V55vc4mewy5w]['level'];
		}

		
		for ($V55vc4mewy5w=0; $V55vc4mewy5w < $Vui3s204nwaw; ++$V55vc4mewy5w) {
			if ($Vwcmlurixvzghardata[$V55vc4mewy5w]['type'] == 'AL') {
				$Vwcmlurixvzghardata[$V55vc4mewy5w]['type'] = 'R';
			}
		}

		
		$Vapgs5hypqxd = -1;
		$Vt0su0laq1wy = 0;
		for ($V55vc4mewy5w=0; $V55vc4mewy5w < $Vui3s204nwaw; ++$V55vc4mewy5w) {
			if (($Vt0su0laq1wy > 0) AND (($V55vc4mewy5w+1) < $Vui3s204nwaw) AND ($Vwcmlurixvzghardata[($V55vc4mewy5w+1)]['level'] == $Vapgs5hypqxd)) {
				if (($Vwcmlurixvzghardata[$V55vc4mewy5w]['type'] == 'ES') AND ($Vwcmlurixvzghardata[($V55vc4mewy5w-1)]['type'] == 'EN') AND ($Vwcmlurixvzghardata[($V55vc4mewy5w+1)]['type'] == 'EN')) {
					$Vwcmlurixvzghardata[$V55vc4mewy5w]['type'] = 'EN';
				} elseif (($Vwcmlurixvzghardata[$V55vc4mewy5w]['type'] == 'CS') AND ($Vwcmlurixvzghardata[($V55vc4mewy5w-1)]['type'] == 'EN') AND ($Vwcmlurixvzghardata[($V55vc4mewy5w+1)]['type'] == 'EN')) {
					$Vwcmlurixvzghardata[$V55vc4mewy5w]['type'] = 'EN';
				} elseif (($Vwcmlurixvzghardata[$V55vc4mewy5w]['type'] == 'CS') AND ($Vwcmlurixvzghardata[($V55vc4mewy5w-1)]['type'] == 'AN') AND ($Vwcmlurixvzghardata[($V55vc4mewy5w+1)]['type'] == 'AN')) {
					$Vwcmlurixvzghardata[$V55vc4mewy5w]['type'] = 'AN';
				}
			}
			if ($Vwcmlurixvzghardata[$V55vc4mewy5w]['level'] != $Vapgs5hypqxd) {
				$Vt0su0laq1wy = 0;
			} else {
				++$Vt0su0laq1wy;
			}
			$Vapgs5hypqxd = $Vwcmlurixvzghardata[$V55vc4mewy5w]['level'];
		}

		
		$Vapgs5hypqxd = -1;
		$Vt0su0laq1wy = 0;
		for ($V55vc4mewy5w=0; $V55vc4mewy5w < $Vui3s204nwaw; ++$V55vc4mewy5w) {
			if ($Vwcmlurixvzghardata[$V55vc4mewy5w]['type'] == 'ET') {
				if (($Vt0su0laq1wy > 0) AND ($Vwcmlurixvzghardata[($V55vc4mewy5w-1)]['type'] == 'EN')) {
					$Vwcmlurixvzghardata[$V55vc4mewy5w]['type'] = 'EN';
				} else {
					$Vuaufi3la1vg = $V55vc4mewy5w+1;
					while (($Vuaufi3la1vg < $Vui3s204nwaw) AND ($Vwcmlurixvzghardata[$Vuaufi3la1vg]['level'] == $Vapgs5hypqxd)) {
						if ($Vwcmlurixvzghardata[$Vuaufi3la1vg]['type'] == 'EN') {
							$Vwcmlurixvzghardata[$V55vc4mewy5w]['type'] = 'EN';
							break;
						} elseif ($Vwcmlurixvzghardata[$Vuaufi3la1vg]['type'] != 'ET') {
							break;
						}
						++$Vuaufi3la1vg;
					}
				}
			}
			if ($Vwcmlurixvzghardata[$V55vc4mewy5w]['level'] != $Vapgs5hypqxd) {
				$Vt0su0laq1wy = 0;
			} else {
				++$Vt0su0laq1wy;
			}
			$Vapgs5hypqxd = $Vwcmlurixvzghardata[$V55vc4mewy5w]['level'];
		}

		
		$Vapgs5hypqxd = -1;
		$Vt0su0laq1wy = 0;
		for ($V55vc4mewy5w=0; $V55vc4mewy5w < $Vui3s204nwaw; ++$V55vc4mewy5w) {
			if (($Vwcmlurixvzghardata[$V55vc4mewy5w]['type'] == 'ET') OR ($Vwcmlurixvzghardata[$V55vc4mewy5w]['type'] == 'ES') OR ($Vwcmlurixvzghardata[$V55vc4mewy5w]['type'] == 'CS')) {
				$Vwcmlurixvzghardata[$V55vc4mewy5w]['type'] = 'ON';
			}
			if ($Vwcmlurixvzghardata[$V55vc4mewy5w]['level'] != $Vapgs5hypqxd) {
				$Vt0su0laq1wy = 0;
			} else {
				++$Vt0su0laq1wy;
			}
			$Vapgs5hypqxd = $Vwcmlurixvzghardata[$V55vc4mewy5w]['level'];
		}

		
		$Vapgs5hypqxd = -1;
		$Vt0su0laq1wy = 0;
		for ($V55vc4mewy5w=0; $V55vc4mewy5w < $Vui3s204nwaw; ++$V55vc4mewy5w) {
			if ($Vwcmlurixvzghardata[$V55vc4mewy5w]['char'] == 'EN') {
				for ($Vuaufi3la1vg=$Vt0su0laq1wy; $Vuaufi3la1vg >= 0; $Vuaufi3la1vg--) {
					if ($Vwcmlurixvzghardata[$Vuaufi3la1vg]['type'] == 'L') {
						$Vwcmlurixvzghardata[$V55vc4mewy5w]['type'] = 'L';
					} elseif ($Vwcmlurixvzghardata[$Vuaufi3la1vg]['type'] == 'R') {
						break;
					}
				}
			}
			if ($Vwcmlurixvzghardata[$V55vc4mewy5w]['level'] != $Vapgs5hypqxd) {
				$Vt0su0laq1wy = 0;
			} else {
				++$Vt0su0laq1wy;
			}
			$Vapgs5hypqxd = $Vwcmlurixvzghardata[$V55vc4mewy5w]['level'];
		}

		
		$Vapgs5hypqxd = -1;
		$Vt0su0laq1wy = 0;
		for ($V55vc4mewy5w=0; $V55vc4mewy5w < $Vui3s204nwaw; ++$V55vc4mewy5w) {
			if (($Vt0su0laq1wy > 0) AND (($V55vc4mewy5w+1) < $Vui3s204nwaw) AND ($Vwcmlurixvzghardata[($V55vc4mewy5w+1)]['level'] == $Vapgs5hypqxd)) {
				if (($Vwcmlurixvzghardata[$V55vc4mewy5w]['type'] == 'N') AND ($Vwcmlurixvzghardata[($V55vc4mewy5w-1)]['type'] == 'L') AND ($Vwcmlurixvzghardata[($V55vc4mewy5w+1)]['type'] == 'L')) {
					$Vwcmlurixvzghardata[$V55vc4mewy5w]['type'] = 'L';
				} elseif (($Vwcmlurixvzghardata[$V55vc4mewy5w]['type'] == 'N') AND
				 (($Vwcmlurixvzghardata[($V55vc4mewy5w-1)]['type'] == 'R') OR ($Vwcmlurixvzghardata[($V55vc4mewy5w-1)]['type'] == 'EN') OR ($Vwcmlurixvzghardata[($V55vc4mewy5w-1)]['type'] == 'AN')) AND
				 (($Vwcmlurixvzghardata[($V55vc4mewy5w+1)]['type'] == 'R') OR ($Vwcmlurixvzghardata[($V55vc4mewy5w+1)]['type'] == 'EN') OR ($Vwcmlurixvzghardata[($V55vc4mewy5w+1)]['type'] == 'AN'))) {
					$Vwcmlurixvzghardata[$V55vc4mewy5w]['type'] = 'R';
				} elseif ($Vwcmlurixvzghardata[$V55vc4mewy5w]['type'] == 'N') {
					
					$Vwcmlurixvzghardata[$V55vc4mewy5w]['type'] = $Vwcmlurixvzghardata[$V55vc4mewy5w]['sor'];
				}
			} elseif (($Vt0su0laq1wy == 0) AND (($V55vc4mewy5w+1) < $Vui3s204nwaw) AND ($Vwcmlurixvzghardata[($V55vc4mewy5w+1)]['level'] == $Vapgs5hypqxd)) {
				
				if (($Vwcmlurixvzghardata[$V55vc4mewy5w]['type'] == 'N') AND ($Vwcmlurixvzghardata[$V55vc4mewy5w]['sor'] == 'L') AND ($Vwcmlurixvzghardata[($V55vc4mewy5w+1)]['type'] == 'L')) {
					$Vwcmlurixvzghardata[$V55vc4mewy5w]['type'] = 'L';
				} elseif (($Vwcmlurixvzghardata[$V55vc4mewy5w]['type'] == 'N') AND
				 (($Vwcmlurixvzghardata[$V55vc4mewy5w]['sor'] == 'R') OR ($Vwcmlurixvzghardata[$V55vc4mewy5w]['sor'] == 'EN') OR ($Vwcmlurixvzghardata[$V55vc4mewy5w]['sor'] == 'AN')) AND
				 (($Vwcmlurixvzghardata[($V55vc4mewy5w+1)]['type'] == 'R') OR ($Vwcmlurixvzghardata[($V55vc4mewy5w+1)]['type'] == 'EN') OR ($Vwcmlurixvzghardata[($V55vc4mewy5w+1)]['type'] == 'AN'))) {
					$Vwcmlurixvzghardata[$V55vc4mewy5w]['type'] = 'R';
				} elseif ($Vwcmlurixvzghardata[$V55vc4mewy5w]['type'] == 'N') {
					
					$Vwcmlurixvzghardata[$V55vc4mewy5w]['type'] = $Vwcmlurixvzghardata[$V55vc4mewy5w]['sor'];
				}
			} elseif (($Vt0su0laq1wy > 0) AND ((($V55vc4mewy5w+1) == $Vui3s204nwaw) OR (($V55vc4mewy5w+1) < $Vui3s204nwaw) AND ($Vwcmlurixvzghardata[($V55vc4mewy5w+1)]['level'] != $Vapgs5hypqxd))) {
				
				if (($Vwcmlurixvzghardata[$V55vc4mewy5w]['type'] == 'N') AND ($Vwcmlurixvzghardata[($V55vc4mewy5w-1)]['type'] == 'L') AND ($Vwcmlurixvzghardata[$V55vc4mewy5w]['eor'] == 'L')) {
					$Vwcmlurixvzghardata[$V55vc4mewy5w]['type'] = 'L';
				} elseif (($Vwcmlurixvzghardata[$V55vc4mewy5w]['type'] == 'N') AND
				 (($Vwcmlurixvzghardata[($V55vc4mewy5w-1)]['type'] == 'R') OR ($Vwcmlurixvzghardata[($V55vc4mewy5w-1)]['type'] == 'EN') OR ($Vwcmlurixvzghardata[($V55vc4mewy5w-1)]['type'] == 'AN')) AND
				 (($Vwcmlurixvzghardata[$V55vc4mewy5w]['eor'] == 'R') OR ($Vwcmlurixvzghardata[$V55vc4mewy5w]['eor'] == 'EN') OR ($Vwcmlurixvzghardata[$V55vc4mewy5w]['eor'] == 'AN'))) {
					$Vwcmlurixvzghardata[$V55vc4mewy5w]['type'] = 'R';
				} elseif ($Vwcmlurixvzghardata[$V55vc4mewy5w]['type'] == 'N') {
					
					$Vwcmlurixvzghardata[$V55vc4mewy5w]['type'] = $Vwcmlurixvzghardata[$V55vc4mewy5w]['sor'];
				}
			} elseif ($Vwcmlurixvzghardata[$V55vc4mewy5w]['type'] == 'N') {
				
				$Vwcmlurixvzghardata[$V55vc4mewy5w]['type'] = $Vwcmlurixvzghardata[$V55vc4mewy5w]['sor'];
			}
			if ($Vwcmlurixvzghardata[$V55vc4mewy5w]['level'] != $Vapgs5hypqxd) {
				$Vt0su0laq1wy = 0;
			} else {
				++$Vt0su0laq1wy;
			}
			$Vapgs5hypqxd = $Vwcmlurixvzghardata[$V55vc4mewy5w]['level'];
		}

		
		
		for ($V55vc4mewy5w=0; $V55vc4mewy5w < $Vui3s204nwaw; ++$V55vc4mewy5w) {
			$V2xk2c5rhqt1 = $Vwcmlurixvzghardata[$V55vc4mewy5w]['level'] % 2;
			if ($V2xk2c5rhqt1) {
				if (($Vwcmlurixvzghardata[$V55vc4mewy5w]['type'] == 'L') OR ($Vwcmlurixvzghardata[$V55vc4mewy5w]['type'] == 'AN') OR ($Vwcmlurixvzghardata[$V55vc4mewy5w]['type'] == 'EN')) {
					$Vwcmlurixvzghardata[$V55vc4mewy5w]['level'] += 1;
				}
			} else {
				if ($Vwcmlurixvzghardata[$V55vc4mewy5w]['type'] == 'R') {
					$Vwcmlurixvzghardata[$V55vc4mewy5w]['level'] += 1;
				} elseif (($Vwcmlurixvzghardata[$V55vc4mewy5w]['type'] == 'AN') OR ($Vwcmlurixvzghardata[$V55vc4mewy5w]['type'] == 'EN')) {
					$Vwcmlurixvzghardata[$V55vc4mewy5w]['level'] += 2;
				}
			}
			$Vjsy2g223gnc = max($Vwcmlurixvzghardata[$V55vc4mewy5w]['level'],$Vjsy2g223gnc);
		}

		
		
		
		
		
		for ($V55vc4mewy5w=0; $V55vc4mewy5w < $Vui3s204nwaw; ++$V55vc4mewy5w) {
			if (($Vwcmlurixvzghardata[$V55vc4mewy5w]['type'] == 'B') OR ($Vwcmlurixvzghardata[$V55vc4mewy5w]['type'] == 'S')) {
				$Vwcmlurixvzghardata[$V55vc4mewy5w]['level'] = $Vbih44jbzdvt;
			} elseif ($Vwcmlurixvzghardata[$V55vc4mewy5w]['type'] == 'WS') {
				$Vuaufi3la1vg = $V55vc4mewy5w+1;
				while ($Vuaufi3la1vg < $Vui3s204nwaw) {
					if ((($Vwcmlurixvzghardata[$Vuaufi3la1vg]['type'] == 'B') OR ($Vwcmlurixvzghardata[$Vuaufi3la1vg]['type'] == 'S')) OR
						(($Vuaufi3la1vg == ($Vui3s204nwaw-1)) AND ($Vwcmlurixvzghardata[$Vuaufi3la1vg]['type'] == 'WS'))) {
						$Vwcmlurixvzghardata[$V55vc4mewy5w]['level'] = $Vbih44jbzdvt;
						break;
					} elseif ($Vwcmlurixvzghardata[$Vuaufi3la1vg]['type'] != 'WS') {
						break;
					}
					++$Vuaufi3la1vg;
				}
			}
		}

		
		
		if ($Vudz4oh4qikurabic) {
			$V2lhjwg4rnasedletter = array(1569,1570,1571,1572,1573,1575,1577,1583,1584,1585,1586,1608,1688);
			$Vudz4oh4qikulfletter = array(1570,1571,1573,1575);
			$Vwcmlurixvzghardata2 = $Vwcmlurixvzghardata;
			$Vkdrdal0mezt = false;
			$VwcmlurixvzgharAL = array();
			$Vangwoo3ejfg = 0;
			for ($V55vc4mewy5w=0; $V55vc4mewy5w < $Vui3s204nwaw; ++$V55vc4mewy5w) {
				if ((TCPDF_FONT_DATA::$Vhs5e1neecd2[$Vwcmlurixvzghardata[$V55vc4mewy5w]['char']] == 'AL') OR ($Vwcmlurixvzghardata[$V55vc4mewy5w]['char'] == 32) OR ($Vwcmlurixvzghardata[$V55vc4mewy5w]['char'] == 8204)) {
					$VwcmlurixvzgharAL[$Vangwoo3ejfg] = $Vwcmlurixvzghardata[$V55vc4mewy5w];
					$VwcmlurixvzgharAL[$Vangwoo3ejfg]['i'] = $V55vc4mewy5w;
					$Vwcmlurixvzghardata[$V55vc4mewy5w]['x'] = $Vangwoo3ejfg;
					++$Vangwoo3ejfg;
				}
			}
			$Vbqnuudvecta = $Vangwoo3ejfg;
			for ($V55vc4mewy5w=0; $V55vc4mewy5w < $Vui3s204nwaw; ++$V55vc4mewy5w) {
				$Vq04jhuav3ux = $Vwcmlurixvzghardata[$V55vc4mewy5w];
				if ($V55vc4mewy5w > 0) {
					$Vrg4ylhatgzk = $Vwcmlurixvzghardata[($V55vc4mewy5w-1)];
				} else {
					$Vrg4ylhatgzk = false;
				}
				if (($V55vc4mewy5w+1) < $Vui3s204nwaw) {
					$V0zvbgntg4zd = $Vwcmlurixvzghardata[($V55vc4mewy5w+1)];
				} else {
					$V0zvbgntg4zd = false;
				}
				if (TCPDF_FONT_DATA::$Vhs5e1neecd2[$Vq04jhuav3ux['char']] == 'AL') {
					$Vangwoo3ejfg = $Vq04jhuav3ux['x'];
					if ($Vangwoo3ejfg > 0) {
						$Vrg4ylhatgzk = $VwcmlurixvzgharAL[($Vangwoo3ejfg-1)];
					} else {
						$Vrg4ylhatgzk = false;
					}
					if (($Vangwoo3ejfg+1) < $Vbqnuudvecta) {
						$V0zvbgntg4zd = $VwcmlurixvzgharAL[($Vangwoo3ejfg+1)];
					} else {
						$V0zvbgntg4zd = false;
					}
					
					if (($Vrg4ylhatgzk !== false) AND ($Vrg4ylhatgzk['char'] == 1604) AND (in_array($Vq04jhuav3ux['char'], $Vudz4oh4qikulfletter))) {
						$Vudz4oh4qikurabicarr = TCPDF_FONT_DATA::$Vz0q1tnxblfu;
						$Vkdrdal0mezt = true;
						if ($Vangwoo3ejfg > 1) {
							$Vrg4ylhatgzk = $VwcmlurixvzgharAL[($Vangwoo3ejfg-2)];
						} else {
							$Vrg4ylhatgzk = false;
						}
					} else {
						$Vudz4oh4qikurabicarr = TCPDF_FONT_DATA::$Vrycd3etloef;
						$Vkdrdal0mezt = false;
					}
					if (($Vrg4ylhatgzk !== false) AND ($V0zvbgntg4zd !== false) AND
						((TCPDF_FONT_DATA::$Vhs5e1neecd2[$Vrg4ylhatgzk['char']] == 'AL') OR (TCPDF_FONT_DATA::$Vhs5e1neecd2[$Vrg4ylhatgzk['char']] == 'NSM')) AND
						((TCPDF_FONT_DATA::$Vhs5e1neecd2[$V0zvbgntg4zd['char']] == 'AL') OR (TCPDF_FONT_DATA::$Vhs5e1neecd2[$V0zvbgntg4zd['char']] == 'NSM')) AND
						($Vrg4ylhatgzk['type'] == $Vq04jhuav3ux['type']) AND
						($V0zvbgntg4zd['type'] == $Vq04jhuav3ux['type']) AND
						($V0zvbgntg4zd['char'] != 1567)) {
						if (in_array($Vrg4ylhatgzk['char'], $V2lhjwg4rnasedletter)) {
							if (isset($Vudz4oh4qikurabicarr[$Vq04jhuav3ux['char']][2])) {
								
								$Vwcmlurixvzghardata2[$V55vc4mewy5w]['char'] = $Vudz4oh4qikurabicarr[$Vq04jhuav3ux['char']][2];
							}
						} else {
							if (isset($Vudz4oh4qikurabicarr[$Vq04jhuav3ux['char']][3])) {
								
								$Vwcmlurixvzghardata2[$V55vc4mewy5w]['char'] = $Vudz4oh4qikurabicarr[$Vq04jhuav3ux['char']][3];
							}
						}
					} elseif (($V0zvbgntg4zd !== false) AND
						((TCPDF_FONT_DATA::$Vhs5e1neecd2[$V0zvbgntg4zd['char']] == 'AL') OR (TCPDF_FONT_DATA::$Vhs5e1neecd2[$V0zvbgntg4zd['char']] == 'NSM')) AND
						($V0zvbgntg4zd['type'] == $Vq04jhuav3ux['type']) AND
						($V0zvbgntg4zd['char'] != 1567)) {
						if (isset($Vudz4oh4qikurabicarr[$Vwcmlurixvzghardata[$V55vc4mewy5w]['char']][2])) {
							
							$Vwcmlurixvzghardata2[$V55vc4mewy5w]['char'] = $Vudz4oh4qikurabicarr[$Vq04jhuav3ux['char']][2];
						}
					} elseif ((($Vrg4ylhatgzk !== false) AND
						((TCPDF_FONT_DATA::$Vhs5e1neecd2[$Vrg4ylhatgzk['char']] == 'AL') OR (TCPDF_FONT_DATA::$Vhs5e1neecd2[$Vrg4ylhatgzk['char']] == 'NSM')) AND
						($Vrg4ylhatgzk['type'] == $Vq04jhuav3ux['type'])) OR
						(($V0zvbgntg4zd !== false) AND ($V0zvbgntg4zd['char'] == 1567))) {
						
						if (($V55vc4mewy5w > 1) AND ($Vq04jhuav3ux['char'] == 1607) AND
							($Vwcmlurixvzghardata[$V55vc4mewy5w-1]['char'] == 1604) AND
							($Vwcmlurixvzghardata[$V55vc4mewy5w-2]['char'] == 1604)) {
							
							
							$Vwcmlurixvzghardata2[$V55vc4mewy5w-2]['char'] = false;
							$Vwcmlurixvzghardata2[$V55vc4mewy5w-1]['char'] = false;
							$Vwcmlurixvzghardata2[$V55vc4mewy5w]['char'] = 65010;
						} else {
							if (($Vrg4ylhatgzk !== false) AND in_array($Vrg4ylhatgzk['char'], $V2lhjwg4rnasedletter)) {
								if (isset($Vudz4oh4qikurabicarr[$Vq04jhuav3ux['char']][0])) {
									
									$Vwcmlurixvzghardata2[$V55vc4mewy5w]['char'] = $Vudz4oh4qikurabicarr[$Vq04jhuav3ux['char']][0];
								}
							} else {
								if (isset($Vudz4oh4qikurabicarr[$Vq04jhuav3ux['char']][1])) {
									
									$Vwcmlurixvzghardata2[$V55vc4mewy5w]['char'] = $Vudz4oh4qikurabicarr[$Vq04jhuav3ux['char']][1];
								}
							}
						}
					} elseif (isset($Vudz4oh4qikurabicarr[$Vq04jhuav3ux['char']][0])) {
						
						$Vwcmlurixvzghardata2[$V55vc4mewy5w]['char'] = $Vudz4oh4qikurabicarr[$Vq04jhuav3ux['char']][0];
					}
					
					if ($Vkdrdal0mezt) {
						
						$Vwcmlurixvzghardata2[($VwcmlurixvzgharAL[($Vangwoo3ejfg-1)]['i'])]['char'] = false;
					}
				} 
			} 
			
			for ($V55vc4mewy5w = 0; $V55vc4mewy5w < ($Vui3s204nwaw-1); ++$V55vc4mewy5w) {
				if (($Vwcmlurixvzghardata2[$V55vc4mewy5w]['char'] == 1617) AND (isset(TCPDF_FONT_DATA::$Vvt5o5a0fqeq[($Vwcmlurixvzghardata2[$V55vc4mewy5w+1]['char'])]))) {
					
					if (isset($Vwcmlurixvzgurrentfont['cw'][(TCPDF_FONT_DATA::$Vvt5o5a0fqeq[($Vwcmlurixvzghardata2[$V55vc4mewy5w+1]['char'])])])) {
						$Vwcmlurixvzghardata2[$V55vc4mewy5w]['char'] = false;
						$Vwcmlurixvzghardata2[$V55vc4mewy5w+1]['char'] = TCPDF_FONT_DATA::$Vvt5o5a0fqeq[($Vwcmlurixvzghardata2[$V55vc4mewy5w+1]['char'])];
					}
				}
			}
			
			foreach ($Vwcmlurixvzghardata2 as $Vl0q4noiexi4ey => $Vz0hmukhwa4zalue) {
				if ($Vz0hmukhwa4zalue['char'] === false) {
					unset($Vwcmlurixvzghardata2[$Vl0q4noiexi4ey]);
				}
			}
			$Vwcmlurixvzghardata = array_values($Vwcmlurixvzghardata2);
			$Vui3s204nwaw = count($Vwcmlurixvzghardata);
			unset($Vwcmlurixvzghardata2);
			unset($Vudz4oh4qikurabicarr);
			unset($Vkdrdal0mezt);
			unset($VwcmlurixvzgharAL);
		}

		
		for ($Vuaufi3la1vg=$Vjsy2g223gnc; $Vuaufi3la1vg > 0; $Vuaufi3la1vg--) {
			$Vvfuc22rkxku = Array();
			$Vfhkt4vbeualevarr = Array();
			$Voztybilsetm = false;
			for ($V55vc4mewy5w=0; $V55vc4mewy5w < $Vui3s204nwaw; ++$V55vc4mewy5w) {
				if ($Vwcmlurixvzghardata[$V55vc4mewy5w]['level'] >= $Vuaufi3la1vg) {
					$Voztybilsetm = true;
					if (isset(TCPDF_FONT_DATA::$Vcsyybmz5twi[$Vwcmlurixvzghardata[$V55vc4mewy5w]['char']])) {
						
						$Vwcmlurixvzghardata[$V55vc4mewy5w]['char'] = TCPDF_FONT_DATA::$Vcsyybmz5twi[$Vwcmlurixvzghardata[$V55vc4mewy5w]['char']];
					}
					$Vfhkt4vbeualevarr[] = $Vwcmlurixvzghardata[$V55vc4mewy5w];
				} else {
					if ($Voztybilsetm) {
						$Vfhkt4vbeualevarr = array_reverse($Vfhkt4vbeualevarr);
						$Vvfuc22rkxku = array_merge($Vvfuc22rkxku, $Vfhkt4vbeualevarr);
						$Vfhkt4vbeualevarr = Array();
						$Voztybilsetm = false;
					}
					$Vvfuc22rkxku[] = $Vwcmlurixvzghardata[$V55vc4mewy5w];
				}
			}
			if ($Voztybilsetm) {
				$Vfhkt4vbeualevarr = array_reverse($Vfhkt4vbeualevarr);
				$Vvfuc22rkxku = array_merge($Vvfuc22rkxku, $Vfhkt4vbeualevarr);
			}
			$Vwcmlurixvzghardata = $Vvfuc22rkxku;
		}
		$Vvfuc22rkxku = array();
		foreach ($Vwcmlurixvzghardata as $Vqbqg0leiyed) {
			$Vvfuc22rkxku[] = $Vqbqg0leiyed['char'];
			
			$Vwcmlurixvzgurrentfont['subsetchars'][$Vqbqg0leiyed['char']] = true;
		}
		return $Vvfuc22rkxku;
	}

} 




