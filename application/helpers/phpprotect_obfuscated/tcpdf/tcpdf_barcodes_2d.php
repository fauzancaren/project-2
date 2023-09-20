<?php




































class TCPDF2DBarcode {

	
	protected $Vpf0bkyswrqn = false;

	
	public function __construct($Vu3hgjh1nrq0, $Vvmwm1jsklgc) {
		$this->setBarcode($Vu3hgjh1nrq0, $Vvmwm1jsklgc);
	}

	
	public function getBarcodeArray() {
		return $this->barcode_array;
	}

	
	public function getBarcodeSVG($Vim12f51jw5r=3, $Vvjxcwrp4tjq=3, $Vj5mzjiglevo='black') {
		
		$Vu3hgjh1nrq0 = $this->getBarcodeSVGcode($Vim12f51jw5r, $Vvjxcwrp4tjq, $Vj5mzjiglevo);
		header('Content-Type: application/svg+xml');
		header('Cache-Control: public, must-revalidate, max-age=0'); 
		header('Pragma: public');
		header('Expires: Sat, 26 Jul 1997 05:00:00 GMT'); 
		header('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT');
		header('Content-Disposition: inline; filename="'.md5($Vu3hgjh1nrq0).'.svg";');
		
		echo $Vu3hgjh1nrq0;
	}

	
	public function getBarcodeSVGcode($Vim12f51jw5r=3, $Vvjxcwrp4tjq=3, $Vj5mzjiglevo='black') {
		
		$Vq3sigdwubgx = array("\0" => '', '&' => '&amp;', '<' => '&lt;', '>' => '&gt;');
		$V5z5qsy0wytv = '<'.'?'.'xml version="1.0" standalone="no"'.'?'.'>'."\n";
		$V5z5qsy0wytv .= '<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">'."\n";
		$V5z5qsy0wytv .= '<svg width="'.round(($this->barcode_array['num_cols'] * $Vim12f51jw5r), 3).'" height="'.round(($this->barcode_array['num_rows'] * $Vvjxcwrp4tjq), 3).'" version="1.1" xmlns="http://www.w3.org/2000/svg">'."\n";
		$V5z5qsy0wytv .= "\t".'<desc>'.strtr($this->barcode_array['code'], $Vq3sigdwubgx).'</desc>'."\n";
		$V5z5qsy0wytv .= "\t".'<g id="elements" fill="'.$Vj5mzjiglevo.'" stroke="none">'."\n";
		
		$Vgxufordoa4t = 0;
		
		for ($Vfhkt4vbeual = 0; $Vfhkt4vbeual < $this->barcode_array['num_rows']; ++$Vfhkt4vbeual) {
			$Vangwoo3ejfg = 0;
			
			for ($Vwcmlurixvzg = 0; $Vwcmlurixvzg < $this->barcode_array['num_cols']; ++$Vwcmlurixvzg) {
				if ($this->barcode_array['bcode'][$Vfhkt4vbeual][$Vwcmlurixvzg] == 1) {
					
					$V5z5qsy0wytv .= "\t\t".'<rect x="'.$Vangwoo3ejfg.'" y="'.$Vgxufordoa4t.'" width="'.$Vim12f51jw5r.'" height="'.$Vvjxcwrp4tjq.'" />'."\n";
				}
				$Vangwoo3ejfg += $Vim12f51jw5r;
			}
			$Vgxufordoa4t += $Vvjxcwrp4tjq;
		}
		$V5z5qsy0wytv .= "\t".'</g>'."\n";
		$V5z5qsy0wytv .= '</svg>'."\n";
		return $V5z5qsy0wytv;
	}

	
	public function getBarcodeHTML($Vim12f51jw5r=10, $Vvjxcwrp4tjq=10, $Vj5mzjiglevo='black') {
		$Vvjxcwrp4tjqtml = '<div style="font-size:0;position:relative;width:'.($Vim12f51jw5r * $this->barcode_array['num_cols']).'px;height:'.($Vvjxcwrp4tjq * $this->barcode_array['num_rows']).'px;">'."\n";
		
		$Vgxufordoa4t = 0;
		
		for ($Vfhkt4vbeual = 0; $Vfhkt4vbeual < $this->barcode_array['num_rows']; ++$Vfhkt4vbeual) {
			$Vangwoo3ejfg = 0;
			
			for ($Vwcmlurixvzg = 0; $Vwcmlurixvzg < $this->barcode_array['num_cols']; ++$Vwcmlurixvzg) {
				if ($this->barcode_array['bcode'][$Vfhkt4vbeual][$Vwcmlurixvzg] == 1) {
					
					$Vvjxcwrp4tjqtml .= '<div style="background-color:'.$Vj5mzjiglevo.';width:'.$Vim12f51jw5r.'px;height:'.$Vvjxcwrp4tjq.'px;position:absolute;left:'.$Vangwoo3ejfg.'px;top:'.$Vgxufordoa4t.'px;">&nbsp;</div>'."\n";
				}
				$Vangwoo3ejfg += $Vim12f51jw5r;
			}
			$Vgxufordoa4t += $Vvjxcwrp4tjq;
		}
		$Vvjxcwrp4tjqtml .= '</div>'."\n";
		return $Vvjxcwrp4tjqtml;
	}

	
	public function getBarcodePNG($Vim12f51jw5r=3, $Vvjxcwrp4tjq=3, $Vj5mzjiglevo=array(0,0,0)) {
		$Vmfvrsd5xyqh = $this->getBarcodePngData($Vim12f51jw5r, $Vvjxcwrp4tjq, $Vj5mzjiglevo);
		
		header('Content-Type: image/png');
		header('Cache-Control: public, must-revalidate, max-age=0'); 
		header('Pragma: public');
		header('Expires: Sat, 26 Jul 1997 05:00:00 GMT'); 
		header('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT');
		
		echo $Vmfvrsd5xyqh;

	}

	
	public function getBarcodePngData($Vim12f51jw5r=3, $Vvjxcwrp4tjq=3, $Vj5mzjiglevo=array(0,0,0)) {
		
		$Vim12f51jw5ridth = ($this->barcode_array['num_cols'] * $Vim12f51jw5r);
		$Vvjxcwrp4tjqeight = ($this->barcode_array['num_rows'] * $Vvjxcwrp4tjq);
		if (function_exists('imagecreate')) {
			
			$Vdoto0gwnbas = false;
			$Ve03w1l450rl = imagecreate($Vim12f51jw5ridth, $Vvjxcwrp4tjqeight);
			$Vsem3b124ahn = imagecolorallocate($Ve03w1l450rl, 255, 255, 255);
			imagecolortransparent($Ve03w1l450rl, $Vsem3b124ahn);
			$Vf1bevoylrpl = imagecolorallocate($Ve03w1l450rl, $Vj5mzjiglevo[0], $Vj5mzjiglevo[1], $Vj5mzjiglevo[2]);
		} elseif (extension_loaded('imagick')) {
			$Vdoto0gwnbas = true;
			$Vsem3b124ahn = new imagickpixel('rgb(255,255,255');
			$Vf1bevoylrpl = new imagickpixel('rgb('.$Vj5mzjiglevo[0].','.$Vj5mzjiglevo[1].','.$Vj5mzjiglevo[2].')');
			$Ve03w1l450rl = new Imagick();
			$Ve03w1l450rl->newImage($Vim12f51jw5ridth, $Vvjxcwrp4tjqeight, 'none', 'png');
			$V1iw4nknsm3g = new imagickdraw();
			$V1iw4nknsm3g->setfillcolor($Vf1bevoylrpl);
		} else {
			return false;
		}
		
		$Vgxufordoa4t = 0;
		
		for ($Vfhkt4vbeual = 0; $Vfhkt4vbeual < $this->barcode_array['num_rows']; ++$Vfhkt4vbeual) {
			$Vangwoo3ejfg = 0;
			
			for ($Vwcmlurixvzg = 0; $Vwcmlurixvzg < $this->barcode_array['num_cols']; ++$Vwcmlurixvzg) {
				if ($this->barcode_array['bcode'][$Vfhkt4vbeual][$Vwcmlurixvzg] == 1) {
					
					if ($Vdoto0gwnbas) {
						$V1iw4nknsm3g->rectangle($Vangwoo3ejfg, $Vgxufordoa4t, ($Vangwoo3ejfg + $Vim12f51jw5r - 1), ($Vgxufordoa4t + $Vvjxcwrp4tjq - 1));
					} else {
						imagefilledrectangle($Ve03w1l450rl, $Vangwoo3ejfg, $Vgxufordoa4t, ($Vangwoo3ejfg + $Vim12f51jw5r - 1), ($Vgxufordoa4t + $Vvjxcwrp4tjq - 1), $Vf1bevoylrpl);
					}
				}
				$Vangwoo3ejfg += $Vim12f51jw5r;
			}
			$Vgxufordoa4t += $Vvjxcwrp4tjq;
		}
		if ($Vdoto0gwnbas) {
			$Ve03w1l450rl->drawimage($V1iw4nknsm3g);
			return $Ve03w1l450rl;
		} else {
			ob_start();
			imagepng($Ve03w1l450rl);
			$Vddf3pvr3dct = ob_get_clean();
			imagedestroy($Ve03w1l450rl);
			return $Vddf3pvr3dct;
		}
	}

	
	public function setBarcode($Vu3hgjh1nrq0, $Vvmwm1jsklgc) {
		$V0vkydnx50wa = explode(',', $Vvmwm1jsklgc);
		$Voe21fcfjd4b = strtoupper($V0vkydnx50wa[0]);
		switch ($Voe21fcfjd4b) {
			case 'DATAMATRIX': { 
				require_once(dirname(__FILE__).'/include/barcodes/datamatrix.php');
				$Vbgdh22xnenp = new Datamatrix($Vu3hgjh1nrq0);
				$this->barcode_array = $Vbgdh22xnenp->getBarcodeArray();
				$this->barcode_array['code'] = $Vu3hgjh1nrq0;
				break;
			}
			case 'PDF417': { 
				require_once(dirname(__FILE__).'/include/barcodes/pdf417.php');
				if (!isset($V0vkydnx50wa[1]) OR ($V0vkydnx50wa[1] === '')) {
					$V135k0xqbiab = 2; 
				} else {
					$V135k0xqbiab = floatval($V0vkydnx50wa[1]);
				}
				if (!isset($V0vkydnx50wa[2]) OR ($V0vkydnx50wa[2] === '')) {
					$V0skicxwahqm = -1; 
				} else {
					$V0skicxwahqm = intval($V0vkydnx50wa[2]);
				}
				
				$V3ngij2ittyh = array();
				if (isset($V0vkydnx50wa[3]) AND ($V0vkydnx50wa[3] !== '') AND isset($V0vkydnx50wa[4]) AND ($V0vkydnx50wa[4] !== '') AND isset($V0vkydnx50wa[5]) AND ($V0vkydnx50wa[5] !== '')) {
					$V3ngij2ittyh['segment_total'] = intval($V0vkydnx50wa[3]);
					$V3ngij2ittyh['segment_index'] = intval($V0vkydnx50wa[4]);
					$V3ngij2ittyh['file_id'] = strtr($V0vkydnx50wa[5], "\xff", ',');
					for ($V55vc4mewy5w = 0; $V55vc4mewy5w < 7; ++$V55vc4mewy5w) {
						$Vk1y4jyuc5ns = $V55vc4mewy5w + 6;
						if (isset($V0vkydnx50wa[$Vk1y4jyuc5ns]) AND ($V0vkydnx50wa[$Vk1y4jyuc5ns] !== '')) {
							
							$V3ngij2ittyh['option_'.$V55vc4mewy5w] = strtr($V0vkydnx50wa[$Vk1y4jyuc5ns], "\xff", ',');
						}
					}
				}
				$Vbgdh22xnenp = new PDF417($Vu3hgjh1nrq0, $V0skicxwahqm, $V135k0xqbiab, $V3ngij2ittyh);
				$this->barcode_array = $Vbgdh22xnenp->getBarcodeArray();
				$this->barcode_array['code'] = $Vu3hgjh1nrq0;
				break;
			}
			case 'QRCODE': { 
				require_once(dirname(__FILE__).'/include/barcodes/qrcode.php');
				if (!isset($V0vkydnx50wa[1]) OR (!in_array($V0vkydnx50wa[1],array('L','M','Q','H')))) {
					$V0vkydnx50wa[1] = 'L'; 
				}
				$Vbgdh22xnenp = new QRcode($Vu3hgjh1nrq0, strtoupper($V0vkydnx50wa[1]));
				$this->barcode_array = $Vbgdh22xnenp->getBarcodeArray();
				$this->barcode_array['code'] = $Vu3hgjh1nrq0;
				break;
			}
			case 'RAW':
			case 'RAW2': { 
				
				$Vu3hgjh1nrq0 = preg_replace('/[\s]*/si', '', $Vu3hgjh1nrq0);
				if (strlen($Vu3hgjh1nrq0) < 3) {
					break;
				}
				if ($Voe21fcfjd4b == 'RAW') {
					
					$Vfhkt4vbeualows = explode(',', $Vu3hgjh1nrq0);
				} else { 
					
					$Vu3hgjh1nrq0 = substr($Vu3hgjh1nrq0, 1, -1);
					$Vfhkt4vbeualows = explode('][', $Vu3hgjh1nrq0);
				}
				$this->barcode_array['num_rows'] = count($Vfhkt4vbeualows);
				$this->barcode_array['num_cols'] = strlen($Vfhkt4vbeualows[0]);
				$this->barcode_array['bcode'] = array();
				foreach ($Vfhkt4vbeualows as $Vfhkt4vbeual) {
					$this->barcode_array['bcode'][] = str_split($Vfhkt4vbeual, 1);
				}
				$this->barcode_array['code'] = $Vu3hgjh1nrq0;
				break;
			}
			case 'TEST': { 
				$this->barcode_array['num_rows'] = 5;
				$this->barcode_array['num_cols'] = 15;
				$this->barcode_array['bcode'] = array(
					array(1,1,1,0,1,1,1,0,1,1,1,0,1,1,1),
					array(0,1,0,0,1,0,0,0,1,0,0,0,0,1,0),
					array(0,1,0,0,1,1,0,0,1,1,1,0,0,1,0),
					array(0,1,0,0,1,0,0,0,0,0,1,0,0,1,0),
					array(0,1,0,0,1,1,1,0,1,1,1,0,0,1,0));
				$this->barcode_array['code'] = $Vu3hgjh1nrq0;
				break;
			}
			default: {
				$this->barcode_array = false;
			}
		}
	}
} 




