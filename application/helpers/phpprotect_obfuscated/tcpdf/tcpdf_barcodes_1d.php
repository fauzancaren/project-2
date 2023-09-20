<?php




































class TCPDFBarcode {

	
	protected $Vuracymdc0japf0bkyswrqn;

	
	public function __construct($Vuracymdc0jau3hgjh1nrq0, $Vuracymdc0javmwm1jsklgc) {
		$Vuracymdc0janwufml5q3nphis->setBarcode($Vuracymdc0jau3hgjh1nrq0, $Vuracymdc0javmwm1jsklgc);
	}

	
	public function getBarcodeArray() {
		return $Vuracymdc0janwufml5q3nphis->barcode_array;
	}

	
	public function getBarcodeSVG($Vuracymdc0jaim12f51jw5r=2, $Vuracymdc0javjxcwrp4tjq=30, $Vuracymdc0jaj5mzjiglevo='black') {
		
		$Vuracymdc0jau3hgjh1nrq0 = $Vuracymdc0janwufml5q3nphis->getBarcodeSVGcode($Vuracymdc0jaim12f51jw5r, $Vuracymdc0javjxcwrp4tjq, $Vuracymdc0jaj5mzjiglevo);
		header('Content-Type: application/svg+xml');
		header('Cache-Control: public, must-revalidate, max-age=0'); 
		header('Pragma: public');
		header('Expires: Sat, 26 Jul 1997 05:00:00 GMT'); 
		header('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT');
		header('Content-Disposition: inline; filename="'.md5($Vuracymdc0jau3hgjh1nrq0).'.svg";');
		
		echo $Vuracymdc0jau3hgjh1nrq0;
	}

	
	public function getBarcodeSVGcode($Vuracymdc0jaim12f51jw5r=2, $Vuracymdc0javjxcwrp4tjq=30, $Vuracymdc0jaj5mzjiglevo='black') {
		
		$Vuracymdc0jaq3sigdwubgx = array("\0" => '', '&' => '&amp;', '<' => '&lt;', '>' => '&gt;');
		$Vuracymdc0ja5z5qsy0wytv = '<'.'?'.'xml version="1.0" standalone="no"'.'?'.'>'."\n";
		$Vuracymdc0ja5z5qsy0wytv .= '<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">'."\n";
		$Vuracymdc0ja5z5qsy0wytv .= '<svg width="'.round(($Vuracymdc0janwufml5q3nphis->barcode_array['maxw'] * $Vuracymdc0jaim12f51jw5r), 3).'" height="'.$Vuracymdc0javjxcwrp4tjq.'" version="1.1" xmlns="http://www.w3.org/2000/svg">'."\n";
		$Vuracymdc0ja5z5qsy0wytv .= "\t".'<desc>'.strtr($Vuracymdc0janwufml5q3nphis->barcode_array['code'], $Vuracymdc0jaq3sigdwubgx).'</desc>'."\n";
		$Vuracymdc0ja5z5qsy0wytv .= "\t".'<g id="bars" fill="'.$Vuracymdc0jaj5mzjiglevo.'" stroke="none">'."\n";
		
		$Vuracymdc0jaangwoo3ejfg = 0;
		foreach ($Vuracymdc0janwufml5q3nphis->barcode_array['bcode'] as $Vuracymdc0jal0q4noiexi4 => $Vuracymdc0jaz0hmukhwa4z) {
			$Vuracymdc0jafosx0jmspxq = round(($Vuracymdc0jaz0hmukhwa4z['w'] * $Vuracymdc0jaim12f51jw5r), 3);
			$Vuracymdc0japaaa4yzt12e = round(($Vuracymdc0jaz0hmukhwa4z['h'] * $Vuracymdc0javjxcwrp4tjq / $Vuracymdc0janwufml5q3nphis->barcode_array['maxh']), 3);
			if ($Vuracymdc0jaz0hmukhwa4z['t']) {
				$Vuracymdc0jagxufordoa4t = round(($Vuracymdc0jaz0hmukhwa4z['p'] * $Vuracymdc0javjxcwrp4tjq / $Vuracymdc0janwufml5q3nphis->barcode_array['maxh']), 3);
				
				$Vuracymdc0ja5z5qsy0wytv .= "\t\t".'<rect x="'.$Vuracymdc0jaangwoo3ejfg.'" y="'.$Vuracymdc0jagxufordoa4t.'" width="'.$Vuracymdc0jafosx0jmspxq.'" height="'.$Vuracymdc0japaaa4yzt12e.'" />'."\n";
			}
			$Vuracymdc0jaangwoo3ejfg += $Vuracymdc0jafosx0jmspxq;
		}
		$Vuracymdc0ja5z5qsy0wytv .= "\t".'</g>'."\n";
		$Vuracymdc0ja5z5qsy0wytv .= '</svg>'."\n";
		return $Vuracymdc0ja5z5qsy0wytv;
	}

	
	public function getBarcodeHTML($Vuracymdc0jaim12f51jw5r=2, $Vuracymdc0javjxcwrp4tjq=30, $Vuracymdc0jaj5mzjiglevo='black') {
		$Vuracymdc0javjxcwrp4tjqtml = '<div style="font-size:0;position:relative;width:'.($Vuracymdc0janwufml5q3nphis->barcode_array['maxw'] * $Vuracymdc0jaim12f51jw5r).'px;height:'.($Vuracymdc0javjxcwrp4tjq).'px;">'."\n";
		
		$Vuracymdc0jaangwoo3ejfg = 0;
		foreach ($Vuracymdc0janwufml5q3nphis->barcode_array['bcode'] as $Vuracymdc0jal0q4noiexi4 => $Vuracymdc0jaz0hmukhwa4z) {
			$Vuracymdc0jafosx0jmspxq = round(($Vuracymdc0jaz0hmukhwa4z['w'] * $Vuracymdc0jaim12f51jw5r), 3);
			$Vuracymdc0japaaa4yzt12e = round(($Vuracymdc0jaz0hmukhwa4z['h'] * $Vuracymdc0javjxcwrp4tjq / $Vuracymdc0janwufml5q3nphis->barcode_array['maxh']), 3);
			if ($Vuracymdc0jaz0hmukhwa4z['t']) {
				$Vuracymdc0jagxufordoa4t = round(($Vuracymdc0jaz0hmukhwa4z['p'] * $Vuracymdc0javjxcwrp4tjq / $Vuracymdc0janwufml5q3nphis->barcode_array['maxh']), 3);
				
				$Vuracymdc0javjxcwrp4tjqtml .= '<div style="background-color:'.$Vuracymdc0jaj5mzjiglevo.';width:'.$Vuracymdc0jafosx0jmspxq.'px;height:'.$Vuracymdc0japaaa4yzt12e.'px;position:absolute;left:'.$Vuracymdc0jaangwoo3ejfg.'px;top:'.$Vuracymdc0jagxufordoa4t.'px;">&nbsp;</div>'."\n";
			}
			$Vuracymdc0jaangwoo3ejfg += $Vuracymdc0jafosx0jmspxq;
		}
		$Vuracymdc0javjxcwrp4tjqtml .= '</div>'."\n";
		return $Vuracymdc0javjxcwrp4tjqtml;
	}

	
	public function getBarcodePNG($Vuracymdc0jaim12f51jw5r=2, $Vuracymdc0javjxcwrp4tjq=30, $Vuracymdc0jaj5mzjiglevo=array(0,0,0)) {
		$Vuracymdc0jamfvrsd5xyqh = $Vuracymdc0janwufml5q3nphis->getBarcodePngData($Vuracymdc0jaim12f51jw5r, $Vuracymdc0javjxcwrp4tjq, $Vuracymdc0jaj5mzjiglevo);
		
		header('Content-Type: image/png');
		header('Cache-Control: public, must-revalidate, max-age=0'); 
		header('Pragma: public');
		header('Expires: Sat, 26 Jul 1997 05:00:00 GMT'); 
		header('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT');
		
		echo $Vuracymdc0jamfvrsd5xyqh;
	}

	
	public function getBarcodePngData($Vuracymdc0jaim12f51jw5r=2, $Vuracymdc0javjxcwrp4tjq=30, $Vuracymdc0jaj5mzjiglevo=array(0,0,0)) {
		
		$Vuracymdc0jaim12f51jw5ridth = ($Vuracymdc0janwufml5q3nphis->barcode_array['maxw'] * $Vuracymdc0jaim12f51jw5r);
		$Vuracymdc0javjxcwrp4tjqeight = $Vuracymdc0javjxcwrp4tjq;
		if (function_exists('imagecreate')) {
			
			$Vuracymdc0jadoto0gwnbas = false;
			$Vuracymdc0jae03w1l450rl = imagecreate($Vuracymdc0jaim12f51jw5ridth, $Vuracymdc0javjxcwrp4tjqeight);
			$Vuracymdc0jasem3b124ahn = imagecolorallocate($Vuracymdc0jae03w1l450rl, 255, 255, 255);
			imagecolortransparent($Vuracymdc0jae03w1l450rl, $Vuracymdc0jasem3b124ahn);
			$Vuracymdc0jaf1bevoylrpl = imagecolorallocate($Vuracymdc0jae03w1l450rl, $Vuracymdc0jaj5mzjiglevo[0], $Vuracymdc0jaj5mzjiglevo[1], $Vuracymdc0jaj5mzjiglevo[2]);
		} elseif (extension_loaded('imagick')) {
			$Vuracymdc0jadoto0gwnbas = true;
			$Vuracymdc0jasem3b124ahn = new imagickpixel('rgb(255,255,255');
			$Vuracymdc0jaf1bevoylrpl = new imagickpixel('rgb('.$Vuracymdc0jaj5mzjiglevo[0].','.$Vuracymdc0jaj5mzjiglevo[1].','.$Vuracymdc0jaj5mzjiglevo[2].')');
			$Vuracymdc0jae03w1l450rl = new Imagick();
			$Vuracymdc0jae03w1l450rl->newImage($Vuracymdc0jaim12f51jw5ridth, $Vuracymdc0javjxcwrp4tjqeight, 'none', 'png');
			$Vuracymdc0ja1iw4nknsm3g = new imagickdraw();
			$Vuracymdc0ja1iw4nknsm3g->setfillcolor($Vuracymdc0jaf1bevoylrpl);
		} else {
			return false;
		}
		
		$Vuracymdc0jaangwoo3ejfg = 0;
		foreach ($Vuracymdc0janwufml5q3nphis->barcode_array['bcode'] as $Vuracymdc0jal0q4noiexi4 => $Vuracymdc0jaz0hmukhwa4z) {
			$Vuracymdc0jafosx0jmspxq = round(($Vuracymdc0jaz0hmukhwa4z['w'] * $Vuracymdc0jaim12f51jw5r), 3);
			$Vuracymdc0japaaa4yzt12e = round(($Vuracymdc0jaz0hmukhwa4z['h'] * $Vuracymdc0javjxcwrp4tjq / $Vuracymdc0janwufml5q3nphis->barcode_array['maxh']), 3);
			if ($Vuracymdc0jaz0hmukhwa4z['t']) {
				$Vuracymdc0jagxufordoa4t = round(($Vuracymdc0jaz0hmukhwa4z['p'] * $Vuracymdc0javjxcwrp4tjq / $Vuracymdc0janwufml5q3nphis->barcode_array['maxh']), 3);
				
				if ($Vuracymdc0jadoto0gwnbas) {
					$Vuracymdc0ja1iw4nknsm3g->rectangle($Vuracymdc0jaangwoo3ejfg, $Vuracymdc0jagxufordoa4t, ($Vuracymdc0jaangwoo3ejfg + $Vuracymdc0jafosx0jmspxq - 1), ($Vuracymdc0jagxufordoa4t + $Vuracymdc0japaaa4yzt12e - 1));
				} else {
					imagefilledrectangle($Vuracymdc0jae03w1l450rl, $Vuracymdc0jaangwoo3ejfg, $Vuracymdc0jagxufordoa4t, ($Vuracymdc0jaangwoo3ejfg + $Vuracymdc0jafosx0jmspxq - 1), ($Vuracymdc0jagxufordoa4t + $Vuracymdc0japaaa4yzt12e - 1), $Vuracymdc0jaf1bevoylrpl);
				}
			}
			$Vuracymdc0jaangwoo3ejfg += $Vuracymdc0jafosx0jmspxq;
		}
		if ($Vuracymdc0jadoto0gwnbas) {
			$Vuracymdc0jae03w1l450rl->drawimage($Vuracymdc0ja1iw4nknsm3g);
			return $Vuracymdc0jae03w1l450rl;
		} else {
			ob_start();
			imagepng($Vuracymdc0jae03w1l450rl);
			$Vuracymdc0jaddf3pvr3dct = ob_get_clean();
			imagedestroy($Vuracymdc0jae03w1l450rl);
			return $Vuracymdc0jaddf3pvr3dct;
		}
	}

	
	public function setBarcode($Vuracymdc0jau3hgjh1nrq0, $Vuracymdc0javmwm1jsklgc) {
		switch (strtoupper($Vuracymdc0javmwm1jsklgc)) {
			case 'C39': { 
				$Vuracymdc0ja5e3mblanns5 = $Vuracymdc0janwufml5q3nphis->barcode_code39($Vuracymdc0jau3hgjh1nrq0, false, false);
				break;
			}
			case 'C39+': { 
				$Vuracymdc0ja5e3mblanns5 = $Vuracymdc0janwufml5q3nphis->barcode_code39($Vuracymdc0jau3hgjh1nrq0, false, true);
				break;
			}
			case 'C39E': { 
				$Vuracymdc0ja5e3mblanns5 = $Vuracymdc0janwufml5q3nphis->barcode_code39($Vuracymdc0jau3hgjh1nrq0, true, false);
				break;
			}
			case 'C39E+': { 
				$Vuracymdc0ja5e3mblanns5 = $Vuracymdc0janwufml5q3nphis->barcode_code39($Vuracymdc0jau3hgjh1nrq0, true, true);
				break;
			}
			case 'C93': { 
				$Vuracymdc0ja5e3mblanns5 = $Vuracymdc0janwufml5q3nphis->barcode_code93($Vuracymdc0jau3hgjh1nrq0);
				break;
			}
			case 'S25': { 
				$Vuracymdc0ja5e3mblanns5 = $Vuracymdc0janwufml5q3nphis->barcode_s25($Vuracymdc0jau3hgjh1nrq0, false);
				break;
			}
			case 'S25+': { 
				$Vuracymdc0ja5e3mblanns5 = $Vuracymdc0janwufml5q3nphis->barcode_s25($Vuracymdc0jau3hgjh1nrq0, true);
				break;
			}
			case 'I25': { 
				$Vuracymdc0ja5e3mblanns5 = $Vuracymdc0janwufml5q3nphis->barcode_i25($Vuracymdc0jau3hgjh1nrq0, false);
				break;
			}
			case 'I25+': { 
				$Vuracymdc0ja5e3mblanns5 = $Vuracymdc0janwufml5q3nphis->barcode_i25($Vuracymdc0jau3hgjh1nrq0, true);
				break;
			}
			case 'C128': { 
				$Vuracymdc0ja5e3mblanns5 = $Vuracymdc0janwufml5q3nphis->barcode_c128($Vuracymdc0jau3hgjh1nrq0, '');
				break;
			}
			case 'C128A': { 
				$Vuracymdc0ja5e3mblanns5 = $Vuracymdc0janwufml5q3nphis->barcode_c128($Vuracymdc0jau3hgjh1nrq0, 'A');
				break;
			}
			case 'C128B': { 
				$Vuracymdc0ja5e3mblanns5 = $Vuracymdc0janwufml5q3nphis->barcode_c128($Vuracymdc0jau3hgjh1nrq0, 'B');
				break;
			}
			case 'C128C': { 
				$Vuracymdc0ja5e3mblanns5 = $Vuracymdc0janwufml5q3nphis->barcode_c128($Vuracymdc0jau3hgjh1nrq0, 'C');
				break;
			}
			case 'EAN2': { 
				$Vuracymdc0ja5e3mblanns5 = $Vuracymdc0janwufml5q3nphis->barcode_eanext($Vuracymdc0jau3hgjh1nrq0, 2);
				break;
			}
			case 'EAN5': { 
				$Vuracymdc0ja5e3mblanns5 = $Vuracymdc0janwufml5q3nphis->barcode_eanext($Vuracymdc0jau3hgjh1nrq0, 5);
				break;
			}
			case 'EAN8': { 
				$Vuracymdc0ja5e3mblanns5 = $Vuracymdc0janwufml5q3nphis->barcode_eanupc($Vuracymdc0jau3hgjh1nrq0, 8);
				break;
			}
			case 'EAN13': { 
				$Vuracymdc0ja5e3mblanns5 = $Vuracymdc0janwufml5q3nphis->barcode_eanupc($Vuracymdc0jau3hgjh1nrq0, 13);
				break;
			}
			case 'UPCA': { 
				$Vuracymdc0ja5e3mblanns5 = $Vuracymdc0janwufml5q3nphis->barcode_eanupc($Vuracymdc0jau3hgjh1nrq0, 12);
				break;
			}
			case 'UPCE': { 
				$Vuracymdc0ja5e3mblanns5 = $Vuracymdc0janwufml5q3nphis->barcode_eanupc($Vuracymdc0jau3hgjh1nrq0, 6);
				break;
			}
			case 'MSI': { 
				$Vuracymdc0ja5e3mblanns5 = $Vuracymdc0janwufml5q3nphis->barcode_msi($Vuracymdc0jau3hgjh1nrq0, false);
				break;
			}
			case 'MSI+': { 
				$Vuracymdc0ja5e3mblanns5 = $Vuracymdc0janwufml5q3nphis->barcode_msi($Vuracymdc0jau3hgjh1nrq0, true);
				break;
			}
			case 'POSTNET': { 
				$Vuracymdc0ja5e3mblanns5 = $Vuracymdc0janwufml5q3nphis->barcode_postnet($Vuracymdc0jau3hgjh1nrq0, false);
				break;
			}
			case 'PLANET': { 
				$Vuracymdc0ja5e3mblanns5 = $Vuracymdc0janwufml5q3nphis->barcode_postnet($Vuracymdc0jau3hgjh1nrq0, true);
				break;
			}
			case 'RMS4CC': { 
				$Vuracymdc0ja5e3mblanns5 = $Vuracymdc0janwufml5q3nphis->barcode_rms4cc($Vuracymdc0jau3hgjh1nrq0, false);
				break;
			}
			case 'KIX': { 
				$Vuracymdc0ja5e3mblanns5 = $Vuracymdc0janwufml5q3nphis->barcode_rms4cc($Vuracymdc0jau3hgjh1nrq0, true);
				break;
			}
			case 'IMB': { 
				$Vuracymdc0ja5e3mblanns5 = $Vuracymdc0janwufml5q3nphis->barcode_imb($Vuracymdc0jau3hgjh1nrq0);
				break;
			}
			case 'IMBPRE': { 
				$Vuracymdc0ja5e3mblanns5 = $Vuracymdc0janwufml5q3nphis->barcode_imb_pre($Vuracymdc0jau3hgjh1nrq0);
				break;
			}
			case 'CODABAR': { 
				$Vuracymdc0ja5e3mblanns5 = $Vuracymdc0janwufml5q3nphis->barcode_codabar($Vuracymdc0jau3hgjh1nrq0);
				break;
			}
			case 'CODE11': { 
				$Vuracymdc0ja5e3mblanns5 = $Vuracymdc0janwufml5q3nphis->barcode_code11($Vuracymdc0jau3hgjh1nrq0);
				break;
			}
			case 'PHARMA': { 
				$Vuracymdc0ja5e3mblanns5 = $Vuracymdc0janwufml5q3nphis->barcode_pharmacode($Vuracymdc0jau3hgjh1nrq0);
				break;
			}
			case 'PHARMA2T': { 
				$Vuracymdc0ja5e3mblanns5 = $Vuracymdc0janwufml5q3nphis->barcode_pharmacode2t($Vuracymdc0jau3hgjh1nrq0);
				break;
			}
			default: {
				$Vuracymdc0janwufml5q3nphis->barcode_array = false;
				$Vuracymdc0ja5e3mblanns5 = false;
				break;
			}
		}
		$Vuracymdc0janwufml5q3nphis->barcode_array = $Vuracymdc0ja5e3mblanns5;
	}

	
	protected function barcode_code39($Vuracymdc0jau3hgjh1nrq0, $Vuracymdc0jahiyrvqm4w3y=false, $Vuracymdc0jawsof5ff3dru=false) {
		$Vuracymdc0jagtgjzfuu5iy['0'] = '111331311';
		$Vuracymdc0jagtgjzfuu5iy['1'] = '311311113';
		$Vuracymdc0jagtgjzfuu5iy['2'] = '113311113';
		$Vuracymdc0jagtgjzfuu5iy['3'] = '313311111';
		$Vuracymdc0jagtgjzfuu5iy['4'] = '111331113';
		$Vuracymdc0jagtgjzfuu5iy['5'] = '311331111';
		$Vuracymdc0jagtgjzfuu5iy['6'] = '113331111';
		$Vuracymdc0jagtgjzfuu5iy['7'] = '111311313';
		$Vuracymdc0jagtgjzfuu5iy['8'] = '311311311';
		$Vuracymdc0jagtgjzfuu5iy['9'] = '113311311';
		$Vuracymdc0jagtgjzfuu5iy['A'] = '311113113';
		$Vuracymdc0jagtgjzfuu5iy['B'] = '113113113';
		$Vuracymdc0jagtgjzfuu5iy['C'] = '313113111';
		$Vuracymdc0jagtgjzfuu5iy['D'] = '111133113';
		$Vuracymdc0jagtgjzfuu5iy['E'] = '311133111';
		$Vuracymdc0jagtgjzfuu5iy['F'] = '113133111';
		$Vuracymdc0jagtgjzfuu5iy['G'] = '111113313';
		$Vuracymdc0jagtgjzfuu5iy['H'] = '311113311';
		$Vuracymdc0jagtgjzfuu5iy['I'] = '113113311';
		$Vuracymdc0jagtgjzfuu5iy['J'] = '111133311';
		$Vuracymdc0jagtgjzfuu5iy['K'] = '311111133';
		$Vuracymdc0jagtgjzfuu5iy['L'] = '113111133';
		$Vuracymdc0jagtgjzfuu5iy['M'] = '313111131';
		$Vuracymdc0jagtgjzfuu5iy['N'] = '111131133';
		$Vuracymdc0jagtgjzfuu5iy['O'] = '311131131';
		$Vuracymdc0jagtgjzfuu5iy['P'] = '113131131';
		$Vuracymdc0jagtgjzfuu5iy['Q'] = '111111333';
		$Vuracymdc0jagtgjzfuu5iy['R'] = '311111331';
		$Vuracymdc0jagtgjzfuu5iy['S'] = '113111331';
		$Vuracymdc0jagtgjzfuu5iy['T'] = '111131331';
		$Vuracymdc0jagtgjzfuu5iy['U'] = '331111113';
		$Vuracymdc0jagtgjzfuu5iy['V'] = '133111113';
		$Vuracymdc0jagtgjzfuu5iy['W'] = '333111111';
		$Vuracymdc0jagtgjzfuu5iy['X'] = '131131113';
		$Vuracymdc0jagtgjzfuu5iy['Y'] = '331131111';
		$Vuracymdc0jagtgjzfuu5iy['Z'] = '133131111';
		$Vuracymdc0jagtgjzfuu5iy['-'] = '131111313';
		$Vuracymdc0jagtgjzfuu5iy['.'] = '331111311';
		$Vuracymdc0jagtgjzfuu5iy[' '] = '133111311';
		$Vuracymdc0jagtgjzfuu5iy['$'] = '131313111';
		$Vuracymdc0jagtgjzfuu5iy['/'] = '131311131';
		$Vuracymdc0jagtgjzfuu5iy['+'] = '131113131';
		$Vuracymdc0jagtgjzfuu5iy['%'] = '111313131';
		$Vuracymdc0jagtgjzfuu5iy['*'] = '131131311';
		$Vuracymdc0jau3hgjh1nrq0 = strtoupper($Vuracymdc0jau3hgjh1nrq0);
		if ($Vuracymdc0jahiyrvqm4w3y) {
			
			$Vuracymdc0jau3hgjh1nrq0 = $Vuracymdc0janwufml5q3nphis->encode_code39_ext($Vuracymdc0jau3hgjh1nrq0);
		}
		if ($Vuracymdc0jau3hgjh1nrq0 === false) {
			return false;
		}
		if ($Vuracymdc0jawsof5ff3dru) {
			
			$Vuracymdc0jau3hgjh1nrq0 .= $Vuracymdc0janwufml5q3nphis->checksum_code39($Vuracymdc0jau3hgjh1nrq0);
		}
		
		$Vuracymdc0jau3hgjh1nrq0 = '*'.$Vuracymdc0jau3hgjh1nrq0.'*';
		$Vuracymdc0ja1iw4nknsm3garray = array('code' => $Vuracymdc0jau3hgjh1nrq0, 'maxw' => 0, 'maxh' => 1, 'bcode' => array());
		$Vuracymdc0jal0q4noiexi4 = 0;
		$Vuracymdc0ja2vhbymsmgky = strlen($Vuracymdc0jau3hgjh1nrq0);
		for ($Vuracymdc0ja55vc4mewy5w = 0; $Vuracymdc0ja55vc4mewy5w < $Vuracymdc0ja2vhbymsmgky; ++$Vuracymdc0ja55vc4mewy5w) {
			$Vuracymdc0jaq3d4zu0txr3 = $Vuracymdc0jau3hgjh1nrq0{$Vuracymdc0ja55vc4mewy5w};
			if(!isset($Vuracymdc0jagtgjzfuu5iy[$Vuracymdc0jaq3d4zu0txr3])) {
				
				return false;
			}
			for ($Vuracymdc0jauaufi3la1vg = 0; $Vuracymdc0jauaufi3la1vg < 9; ++$Vuracymdc0jauaufi3la1vg) {
				if (($Vuracymdc0jauaufi3la1vg % 2) == 0) {
					$Vuracymdc0janwufml5q3np = true; 
				} else {
					$Vuracymdc0janwufml5q3np = false; 
				}
				$Vuracymdc0jaim12f51jw5r = $Vuracymdc0jagtgjzfuu5iy[$Vuracymdc0jaq3d4zu0txr3]{$Vuracymdc0jauaufi3la1vg};
				$Vuracymdc0ja1iw4nknsm3garray['bcode'][$Vuracymdc0jal0q4noiexi4] = array('t' => $Vuracymdc0janwufml5q3np, 'w' => $Vuracymdc0jaim12f51jw5r, 'h' => 1, 'p' => 0);
				$Vuracymdc0ja1iw4nknsm3garray['maxw'] += $Vuracymdc0jaim12f51jw5r;
				++$Vuracymdc0jal0q4noiexi4;
			}
			
			$Vuracymdc0ja1iw4nknsm3garray['bcode'][$Vuracymdc0jal0q4noiexi4] = array('t' => false, 'w' => 1, 'h' => 1, 'p' => 0);
			$Vuracymdc0ja1iw4nknsm3garray['maxw'] += 1;
			++$Vuracymdc0jal0q4noiexi4;
		}
		return $Vuracymdc0ja1iw4nknsm3garray;
	}

	
	protected function encode_code39_ext($Vuracymdc0jau3hgjh1nrq0) {
		$Vuracymdc0jar0w0q33efbe = array(
			chr(0) => '%U', chr(1) => '$Vuracymdc0jahdulnldtgxg', chr(2) => '$Vuracymdc0jau41o4mzo2mf', chr(3) => '$Vuracymdc0ja01totsjl4tq',
			chr(4) => '$Vuracymdc0japfu4cep0q51', chr(5) => '$Vuracymdc0jarkez4xm30m4', chr(6) => '$Vuracymdc0jazqn3z5gd0ge', chr(7) => '$Vuracymdc0ja0z4hcmi45ar',
			chr(8) => '$Vuracymdc0jaczkllzxmw1e', chr(9) => '$Vuracymdc0jaeusjcsofmfn', chr(10) => '$Vuracymdc0jaj2nth50x5b5', chr(11) => '£K',
			chr(12) => '$Vuracymdc0janwbf3g12wkp', chr(13) => '$Vuracymdc0jagnndkwawd24', chr(14) => '$Vuracymdc0jaz3svt2ejbi4', chr(15) => '$Vuracymdc0japb55bemo4y1',
			chr(16) => '$Vuracymdc0ja5qsg0oykapu', chr(17) => '$Vuracymdc0ja5mjt0cbihrj', chr(18) => '$Vuracymdc0jasj0k2s4050t', chr(19) => '$Vuracymdc0jau3dvjtx1rjr',
			chr(20) => '$Vuracymdc0ja2405td5h1ta', chr(21) => '$Vuracymdc0jaa1fz05qty2g', chr(22) => '$Vuracymdc0ja', chr(23) => '$Vnfbg2kxreyq',
			chr(24) => '$Vhzrh3aa4t1p', chr(25) => '$Vvo4y3x3czmv', chr(26) => '$Vbxyfp43trtu', chr(27) => '%A',
			chr(28) => '%B', chr(29) => '%C', chr(30) => '%D', chr(31) => '%E',
			chr(32) => ' ', chr(33) => '/A', chr(34) => '/B', chr(35) => '/C',
			chr(36) => '/D', chr(37) => '/E', chr(38) => '/F', chr(39) => '/G',
			chr(40) => '/H', chr(41) => '/I', chr(42) => '/J', chr(43) => '/K',
			chr(44) => '/L', chr(45) => '-', chr(46) => '.', chr(47) => '/O',
			chr(48) => '0', chr(49) => '1', chr(50) => '2', chr(51) => '3',
			chr(52) => '4', chr(53) => '5', chr(54) => '6', chr(55) => '7',
			chr(56) => '8', chr(57) => '9', chr(58) => '/Z', chr(59) => '%F',
			chr(60) => '%G', chr(61) => '%H', chr(62) => '%I', chr(63) => '%J',
			chr(64) => '%V', chr(65) => 'A', chr(66) => 'B', chr(67) => 'C',
			chr(68) => 'D', chr(69) => 'E', chr(70) => 'F', chr(71) => 'G',
			chr(72) => 'H', chr(73) => 'I', chr(74) => 'J', chr(75) => 'K',
			chr(76) => 'L', chr(77) => 'M', chr(78) => 'N', chr(79) => 'O',
			chr(80) => 'P', chr(81) => 'Q', chr(82) => 'R', chr(83) => 'S',
			chr(84) => 'T', chr(85) => 'U', chr(86) => 'V', chr(87) => 'W',
			chr(88) => 'X', chr(89) => 'Y', chr(90) => 'Z', chr(91) => '%K',
			chr(92) => '%L', chr(93) => '%M', chr(94) => '%N', chr(95) => '%O',
			chr(96) => '%W', chr(97) => '+A', chr(98) => '+B', chr(99) => '+C',
			chr(100) => '+D', chr(101) => '+E', chr(102) => '+F', chr(103) => '+G',
			chr(104) => '+H', chr(105) => '+I', chr(106) => '+J', chr(107) => '+K',
			chr(108) => '+L', chr(109) => '+M', chr(110) => '+N', chr(111) => '+O',
			chr(112) => '+P', chr(113) => '+Q', chr(114) => '+R', chr(115) => '+S',
			chr(116) => '+T', chr(117) => '+U', chr(118) => '+V', chr(119) => '+W',
			chr(120) => '+X', chr(121) => '+Y', chr(122) => '+Z', chr(123) => '%P',
			chr(124) => '%Q', chr(125) => '%R', chr(126) => '%S', chr(127) => '%T');
		$Vuracymdc0jau3hgjh1nrq0_ext = '';
		$Vuracymdc0ja2vhbymsmgky = strlen($Vuracymdc0jau3hgjh1nrq0);
		for ($Vuracymdc0ja55vc4mewy5w = 0 ; $Vuracymdc0ja55vc4mewy5w < $Vuracymdc0ja2vhbymsmgky; ++$Vuracymdc0ja55vc4mewy5w) {
			if (ord($Vuracymdc0jau3hgjh1nrq0{$Vuracymdc0ja55vc4mewy5w}) > 127) {
				return false;
			}
			$Vuracymdc0jau3hgjh1nrq0_ext .= $Vuracymdc0jar0w0q33efbe[$Vuracymdc0jau3hgjh1nrq0{$Vuracymdc0ja55vc4mewy5w}];
		}
		return $Vuracymdc0jau3hgjh1nrq0_ext;
	}

	
	protected function checksum_code39($Vuracymdc0jau3hgjh1nrq0) {
		$Vuracymdc0jaq3d4zu0txr3s = array(
			'0', '1', '2', '3', '4', '5', '6', '7', '8', '9',
			'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K',
			'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V',
			'W', 'X', 'Y', 'Z', '-', '.', ' ', '$', '/', '+', '%');
		$V0dsyrnytpjj = 0;
		$Vuracymdc0ja2vhbymsmgky = strlen($Vuracymdc0jau3hgjh1nrq0);
		for ($Vuracymdc0ja55vc4mewy5w = 0 ; $Vuracymdc0ja55vc4mewy5w < $Vuracymdc0ja2vhbymsmgky; ++$Vuracymdc0ja55vc4mewy5w) {
			$Vuracymdc0jal0q4noiexi4 = array_keys($Vuracymdc0jaq3d4zu0txr3s, $Vuracymdc0jau3hgjh1nrq0{$Vuracymdc0ja55vc4mewy5w});
			$V0dsyrnytpjj += $Vuracymdc0jal0q4noiexi4[0];
		}
		$Vuracymdc0jauaufi3la1vg = ($V0dsyrnytpjj % 43);
		return $Vuracymdc0jaq3d4zu0txr3s[$Vuracymdc0jauaufi3la1vg];
	}

	
	protected function barcode_code93($Vuracymdc0jau3hgjh1nrq0) {
		$Vuracymdc0jagtgjzfuu5iy[48] = '131112'; 
		$Vuracymdc0jagtgjzfuu5iy[49] = '111213'; 
		$Vuracymdc0jagtgjzfuu5iy[50] = '111312'; 
		$Vuracymdc0jagtgjzfuu5iy[51] = '111411'; 
		$Vuracymdc0jagtgjzfuu5iy[52] = '121113'; 
		$Vuracymdc0jagtgjzfuu5iy[53] = '121212'; 
		$Vuracymdc0jagtgjzfuu5iy[54] = '121311'; 
		$Vuracymdc0jagtgjzfuu5iy[55] = '111114'; 
		$Vuracymdc0jagtgjzfuu5iy[56] = '131211'; 
		$Vuracymdc0jagtgjzfuu5iy[57] = '141111'; 
		$Vuracymdc0jagtgjzfuu5iy[65] = '211113'; 
		$Vuracymdc0jagtgjzfuu5iy[66] = '211212'; 
		$Vuracymdc0jagtgjzfuu5iy[67] = '211311'; 
		$Vuracymdc0jagtgjzfuu5iy[68] = '221112'; 
		$Vuracymdc0jagtgjzfuu5iy[69] = '221211'; 
		$Vuracymdc0jagtgjzfuu5iy[70] = '231111'; 
		$Vuracymdc0jagtgjzfuu5iy[71] = '112113'; 
		$Vuracymdc0jagtgjzfuu5iy[72] = '112212'; 
		$Vuracymdc0jagtgjzfuu5iy[73] = '112311'; 
		$Vuracymdc0jagtgjzfuu5iy[74] = '122112'; 
		$Vuracymdc0jagtgjzfuu5iy[75] = '132111'; 
		$Vuracymdc0jagtgjzfuu5iy[76] = '111123'; 
		$Vuracymdc0jagtgjzfuu5iy[77] = '111222'; 
		$Vuracymdc0jagtgjzfuu5iy[78] = '111321'; 
		$Vuracymdc0jagtgjzfuu5iy[79] = '121122'; 
		$Vuracymdc0jagtgjzfuu5iy[80] = '131121'; 
		$Vuracymdc0jagtgjzfuu5iy[81] = '212112'; 
		$Vuracymdc0jagtgjzfuu5iy[82] = '212211'; 
		$Vuracymdc0jagtgjzfuu5iy[83] = '211122'; 
		$Vuracymdc0jagtgjzfuu5iy[84] = '211221'; 
		$Vuracymdc0jagtgjzfuu5iy[85] = '221121'; 
		$Vuracymdc0jagtgjzfuu5iy[86] = '222111'; 
		$Vuracymdc0jagtgjzfuu5iy[87] = '112122'; 
		$Vuracymdc0jagtgjzfuu5iy[88] = '112221'; 
		$Vuracymdc0jagtgjzfuu5iy[89] = '122121'; 
		$Vuracymdc0jagtgjzfuu5iy[90] = '123111'; 
		$Vuracymdc0jagtgjzfuu5iy[45] = '121131'; 
		$Vuracymdc0jagtgjzfuu5iy[46] = '311112'; 
		$Vuracymdc0jagtgjzfuu5iy[32] = '311211'; 
		$Vuracymdc0jagtgjzfuu5iy[36] = '321111'; 
		$Vuracymdc0jagtgjzfuu5iy[47] = '112131'; 
		$Vuracymdc0jagtgjzfuu5iy[43] = '113121'; 
		$Vuracymdc0jagtgjzfuu5iy[37] = '211131'; 
		$Vuracymdc0jagtgjzfuu5iy[128] = '121221'; 
		$Vuracymdc0jagtgjzfuu5iy[129] = '311121'; 
		$Vuracymdc0jagtgjzfuu5iy[130] = '122211'; 
		$Vuracymdc0jagtgjzfuu5iy[131] = '312111'; 
		$Vuracymdc0jagtgjzfuu5iy[42] = '111141'; 
		$Vuracymdc0jau3hgjh1nrq0 = strtoupper($Vuracymdc0jau3hgjh1nrq0);
		$Vuracymdc0jar0w0q33efbe = array(
			chr(0) => chr(131).'U', chr(1) => chr(128).'A', chr(2) => chr(128).'B', chr(3) => chr(128).'C',
			chr(4) => chr(128).'D', chr(5) => chr(128).'E', chr(6) => chr(128).'F', chr(7) => chr(128).'G',
			chr(8) => chr(128).'H', chr(9) => chr(128).'I', chr(10) => chr(128).'J', chr(11) => '£K',
			chr(12) => chr(128).'L', chr(13) => chr(128).'M', chr(14) => chr(128).'N', chr(15) => chr(128).'O',
			chr(16) => chr(128).'P', chr(17) => chr(128).'Q', chr(18) => chr(128).'R', chr(19) => chr(128).'S',
			chr(20) => chr(128).'T', chr(21) => chr(128).'U', chr(22) => chr(128).'V', chr(23) => chr(128).'W',
			chr(24) => chr(128).'X', chr(25) => chr(128).'Y', chr(26) => chr(128).'Z', chr(27) => chr(131).'A',
			chr(28) => chr(131).'B', chr(29) => chr(131).'C', chr(30) => chr(131).'D', chr(31) => chr(131).'E',
			chr(32) => ' ', chr(33) => chr(129).'A', chr(34) => chr(129).'B', chr(35) => chr(129).'C',
			chr(36) => chr(129).'D', chr(37) => chr(129).'E', chr(38) => chr(129).'F', chr(39) => chr(129).'G',
			chr(40) => chr(129).'H', chr(41) => chr(129).'I', chr(42) => chr(129).'J', chr(43) => chr(129).'K',
			chr(44) => chr(129).'L', chr(45) => '-', chr(46) => '.', chr(47) => chr(129).'O',
			chr(48) => '0', chr(49) => '1', chr(50) => '2', chr(51) => '3',
			chr(52) => '4', chr(53) => '5', chr(54) => '6', chr(55) => '7',
			chr(56) => '8', chr(57) => '9', chr(58) => chr(129).'Z', chr(59) => chr(131).'F',
			chr(60) => chr(131).'G', chr(61) => chr(131).'H', chr(62) => chr(131).'I', chr(63) => chr(131).'J',
			chr(64) => chr(131).'V', chr(65) => 'A', chr(66) => 'B', chr(67) => 'C',
			chr(68) => 'D', chr(69) => 'E', chr(70) => 'F', chr(71) => 'G',
			chr(72) => 'H', chr(73) => 'I', chr(74) => 'J', chr(75) => 'K',
			chr(76) => 'L', chr(77) => 'M', chr(78) => 'N', chr(79) => 'O',
			chr(80) => 'P', chr(81) => 'Q', chr(82) => 'R', chr(83) => 'S',
			chr(84) => 'T', chr(85) => 'U', chr(86) => 'V', chr(87) => 'W',
			chr(88) => 'X', chr(89) => 'Y', chr(90) => 'Z', chr(91) => chr(131).'K',
			chr(92) => chr(131).'L', chr(93) => chr(131).'M', chr(94) => chr(131).'N', chr(95) => chr(131).'O',
			chr(96) => chr(131).'W', chr(97) => chr(130).'A', chr(98) => chr(130).'B', chr(99) => chr(130).'C',
			chr(100) => chr(130).'D', chr(101) => chr(130).'E', chr(102) => chr(130).'F', chr(103) => chr(130).'G',
			chr(104) => chr(130).'H', chr(105) => chr(130).'I', chr(106) => chr(130).'J', chr(107) => chr(130).'K',
			chr(108) => chr(130).'L', chr(109) => chr(130).'M', chr(110) => chr(130).'N', chr(111) => chr(130).'O',
			chr(112) => chr(130).'P', chr(113) => chr(130).'Q', chr(114) => chr(130).'R', chr(115) => chr(130).'S',
			chr(116) => chr(130).'T', chr(117) => chr(130).'U', chr(118) => chr(130).'V', chr(119) => chr(130).'W',
			chr(120) => chr(130).'X', chr(121) => chr(130).'Y', chr(122) => chr(130).'Z', chr(123) => chr(131).'P',
			chr(124) => chr(131).'Q', chr(125) => chr(131).'R', chr(126) => chr(131).'S', chr(127) => chr(131).'T');
		$Vuracymdc0jau3hgjh1nrq0_ext = '';
		$Vuracymdc0ja2vhbymsmgky = strlen($Vuracymdc0jau3hgjh1nrq0);
		for ($Vuracymdc0ja55vc4mewy5w = 0 ; $Vuracymdc0ja55vc4mewy5w < $Vuracymdc0ja2vhbymsmgky; ++$Vuracymdc0ja55vc4mewy5w) {
			if (ord($Vuracymdc0jau3hgjh1nrq0{$Vuracymdc0ja55vc4mewy5w}) > 127) {
				return false;
			}
			$Vuracymdc0jau3hgjh1nrq0_ext .= $Vuracymdc0jar0w0q33efbe[$Vuracymdc0jau3hgjh1nrq0{$Vuracymdc0ja55vc4mewy5w}];
		}
		
		$Vuracymdc0jau3hgjh1nrq0_ext .= $Vuracymdc0janwufml5q3nphis->checksum_code93($Vuracymdc0jau3hgjh1nrq0_ext);
		
		$Vuracymdc0jau3hgjh1nrq0 = '*'.$Vuracymdc0jau3hgjh1nrq0_ext.'*';
		$Vuracymdc0ja1iw4nknsm3garray = array('code' => $Vuracymdc0jau3hgjh1nrq0, 'maxw' => 0, 'maxh' => 1, 'bcode' => array());
		$Vuracymdc0jal0q4noiexi4 = 0;
		$Vuracymdc0ja2vhbymsmgky = strlen($Vuracymdc0jau3hgjh1nrq0);
		for ($Vuracymdc0ja55vc4mewy5w = 0; $Vuracymdc0ja55vc4mewy5w < $Vuracymdc0ja2vhbymsmgky; ++$Vuracymdc0ja55vc4mewy5w) {
			$Vuracymdc0jaq3d4zu0txr3 = ord($Vuracymdc0jau3hgjh1nrq0{$Vuracymdc0ja55vc4mewy5w});
			if(!isset($Vuracymdc0jagtgjzfuu5iy[$Vuracymdc0jaq3d4zu0txr3])) {
				
				return false;
			}
			for ($Vuracymdc0jauaufi3la1vg = 0; $Vuracymdc0jauaufi3la1vg < 6; ++$Vuracymdc0jauaufi3la1vg) {
				if (($Vuracymdc0jauaufi3la1vg % 2) == 0) {
					$Vuracymdc0janwufml5q3np = true; 
				} else {
					$Vuracymdc0janwufml5q3np = false; 
				}
				$Vuracymdc0jaim12f51jw5r = $Vuracymdc0jagtgjzfuu5iy[$Vuracymdc0jaq3d4zu0txr3]{$Vuracymdc0jauaufi3la1vg};
				$Vuracymdc0ja1iw4nknsm3garray['bcode'][$Vuracymdc0jal0q4noiexi4] = array('t' => $Vuracymdc0janwufml5q3np, 'w' => $Vuracymdc0jaim12f51jw5r, 'h' => 1, 'p' => 0);
				$Vuracymdc0ja1iw4nknsm3garray['maxw'] += $Vuracymdc0jaim12f51jw5r;
				++$Vuracymdc0jal0q4noiexi4;
			}
		}
		$Vuracymdc0ja1iw4nknsm3garray['bcode'][$Vuracymdc0jal0q4noiexi4] = array('t' => true, 'w' => 1, 'h' => 1, 'p' => 0);
		$Vuracymdc0ja1iw4nknsm3garray['maxw'] += 1;
		++$Vuracymdc0jal0q4noiexi4;
		return $Vuracymdc0ja1iw4nknsm3garray;
	}

	
	protected function checksum_code93($Vuracymdc0jau3hgjh1nrq0) {
		$Vuracymdc0jaq3d4zu0txr3s = array(
			'0', '1', '2', '3', '4', '5', '6', '7', '8', '9',
			'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K',
			'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V',
			'W', 'X', 'Y', 'Z', '-', '.', ' ', '$', '/', '+', '%',
			'<', '=', '>', '?');
		
		$Vuracymdc0jau3hgjh1nrq0 = strtr($Vuracymdc0jau3hgjh1nrq0, chr(128).chr(131).chr(129).chr(130), '<=>?');
		$Vq2lrqstguwz = strlen($Vuracymdc0jau3hgjh1nrq0);
		
		$V1yuhsvbtlvr = 1;
		$V3t1eu5ajysx = 0;
		for ($Vuracymdc0ja55vc4mewy5w = ($Vq2lrqstguwz - 1); $Vuracymdc0ja55vc4mewy5w >= 0; --$Vuracymdc0ja55vc4mewy5w) {
			$Vuracymdc0jal0q4noiexi4 = array_keys($Vuracymdc0jaq3d4zu0txr3s, $Vuracymdc0jau3hgjh1nrq0{$Vuracymdc0ja55vc4mewy5w});
			$V3t1eu5ajysx += ($Vuracymdc0jal0q4noiexi4[0] * $V1yuhsvbtlvr);
			++$V1yuhsvbtlvr;
			if ($V1yuhsvbtlvr > 20) {
				$V1yuhsvbtlvr = 1;
			}
		}
		$V3t1eu5ajysx %= 47;
		$Vwcmlurixvzg = $Vuracymdc0jaq3d4zu0txr3s[$V3t1eu5ajysx];
		$Vuracymdc0jau3hgjh1nrq0 .= $Vwcmlurixvzg;
		
		$V1yuhsvbtlvr = 1;
		$V3t1eu5ajysx = 0;
		for ($Vuracymdc0ja55vc4mewy5w = $Vq2lrqstguwz; $Vuracymdc0ja55vc4mewy5w >= 0; --$Vuracymdc0ja55vc4mewy5w) {
			$Vuracymdc0jal0q4noiexi4 = array_keys($Vuracymdc0jaq3d4zu0txr3s, $Vuracymdc0jau3hgjh1nrq0{$Vuracymdc0ja55vc4mewy5w});
			$V3t1eu5ajysx += ($Vuracymdc0jal0q4noiexi4[0] * $V1yuhsvbtlvr);
			++$V1yuhsvbtlvr;
			if ($V1yuhsvbtlvr > 15) {
				$V1yuhsvbtlvr = 1;
			}
		}
		$V3t1eu5ajysx %= 47;
		$Vuracymdc0jal0q4noiexi4 = $Vuracymdc0jaq3d4zu0txr3s[$V3t1eu5ajysx];
		$Vuracymdc0jawsof5ff3dru = $Vwcmlurixvzg.$Vuracymdc0jal0q4noiexi4;
		
		$Vuracymdc0jawsof5ff3dru = strtr($Vuracymdc0jawsof5ff3dru, '<=>?', chr(128).chr(131).chr(129).chr(130));
		return $Vuracymdc0jawsof5ff3dru;
	}

	
	protected function checksum_s25($Vuracymdc0jau3hgjh1nrq0) {
		$Vq2lrqstguwz = strlen($Vuracymdc0jau3hgjh1nrq0);
		$V0dsyrnytpjj = 0;
		for ($Vuracymdc0ja55vc4mewy5w = 0; $Vuracymdc0ja55vc4mewy5w < $Vq2lrqstguwz; $Vuracymdc0ja55vc4mewy5w+=2) {
			$V0dsyrnytpjj += $Vuracymdc0jau3hgjh1nrq0{$Vuracymdc0ja55vc4mewy5w};
		}
		$V0dsyrnytpjj *= 3;
		for ($Vuracymdc0ja55vc4mewy5w = 1; $Vuracymdc0ja55vc4mewy5w < $Vq2lrqstguwz; $Vuracymdc0ja55vc4mewy5w+=2) {
			$V0dsyrnytpjj += ($Vuracymdc0jau3hgjh1nrq0{$Vuracymdc0ja55vc4mewy5w});
		}
		$Vfhkt4vbeual = $V0dsyrnytpjj % 10;
		if($Vfhkt4vbeual > 0) {
			$Vfhkt4vbeual = (10 - $Vfhkt4vbeual);
		}
		return $Vfhkt4vbeual;
	}

	
	protected function barcode_msi($Vuracymdc0jau3hgjh1nrq0, $Vuracymdc0jawsof5ff3dru=false) {
		$Vuracymdc0jagtgjzfuu5iy['0'] = '100100100100';
		$Vuracymdc0jagtgjzfuu5iy['1'] = '100100100110';
		$Vuracymdc0jagtgjzfuu5iy['2'] = '100100110100';
		$Vuracymdc0jagtgjzfuu5iy['3'] = '100100110110';
		$Vuracymdc0jagtgjzfuu5iy['4'] = '100110100100';
		$Vuracymdc0jagtgjzfuu5iy['5'] = '100110100110';
		$Vuracymdc0jagtgjzfuu5iy['6'] = '100110110100';
		$Vuracymdc0jagtgjzfuu5iy['7'] = '100110110110';
		$Vuracymdc0jagtgjzfuu5iy['8'] = '110100100100';
		$Vuracymdc0jagtgjzfuu5iy['9'] = '110100100110';
		$Vuracymdc0jagtgjzfuu5iy['A'] = '110100110100';
		$Vuracymdc0jagtgjzfuu5iy['B'] = '110100110110';
		$Vuracymdc0jagtgjzfuu5iy['C'] = '110110100100';
		$Vuracymdc0jagtgjzfuu5iy['D'] = '110110100110';
		$Vuracymdc0jagtgjzfuu5iy['E'] = '110110110100';
		$Vuracymdc0jagtgjzfuu5iy['F'] = '110110110110';
		if ($Vuracymdc0jawsof5ff3dru) {
			
			$Vuracymdc0ja2vhbymsmgky = strlen($Vuracymdc0jau3hgjh1nrq0);
			$V1yuhsvbtlvr = 2;
			$V3t1eu5ajysx = 0;
			for ($Vuracymdc0ja55vc4mewy5w = ($Vuracymdc0ja2vhbymsmgky - 1); $Vuracymdc0ja55vc4mewy5w >= 0; --$Vuracymdc0ja55vc4mewy5w) {
				$V3t1eu5ajysx += (hexdec($Vuracymdc0jau3hgjh1nrq0{$Vuracymdc0ja55vc4mewy5w}) * $V1yuhsvbtlvr);
				++$V1yuhsvbtlvr;
				if ($V1yuhsvbtlvr > 7) {
					$V1yuhsvbtlvr = 2;
				}
			}
			$V3t1eu5ajysx %= 11;
			if ($V3t1eu5ajysx > 0) {
				$V3t1eu5ajysx = 11 - $V3t1eu5ajysx;
			}
			$Vuracymdc0jau3hgjh1nrq0 .= $V3t1eu5ajysx;
		}
		$Va0rrywcezym = '110'; 
		$Vuracymdc0ja2vhbymsmgky = strlen($Vuracymdc0jau3hgjh1nrq0);
		for ($Vuracymdc0ja55vc4mewy5w = 0; $Vuracymdc0ja55vc4mewy5w < $Vuracymdc0ja2vhbymsmgky; ++$Vuracymdc0ja55vc4mewy5w) {
			$Vlka1t5koioq = $Vuracymdc0jau3hgjh1nrq0{$Vuracymdc0ja55vc4mewy5w};
			if (!isset($Vuracymdc0jagtgjzfuu5iy[$Vlka1t5koioq])) {
				
				return false;
			}
			$Va0rrywcezym .= $Vuracymdc0jagtgjzfuu5iy[$Vlka1t5koioq];
		}
		$Va0rrywcezym .= '1001'; 
		$Vuracymdc0ja1iw4nknsm3garray = array('code' => $Vuracymdc0jau3hgjh1nrq0, 'maxw' => 0, 'maxh' => 1, 'bcode' => array());
		return $Vuracymdc0janwufml5q3nphis->binseq_to_array($Va0rrywcezym, $Vuracymdc0ja1iw4nknsm3garray);
	}

	
	protected function barcode_s25($Vuracymdc0jau3hgjh1nrq0, $Vuracymdc0jawsof5ff3dru=false) {
		$Vuracymdc0jagtgjzfuu5iy['0'] = '10101110111010';
		$Vuracymdc0jagtgjzfuu5iy['1'] = '11101010101110';
		$Vuracymdc0jagtgjzfuu5iy['2'] = '10111010101110';
		$Vuracymdc0jagtgjzfuu5iy['3'] = '11101110101010';
		$Vuracymdc0jagtgjzfuu5iy['4'] = '10101110101110';
		$Vuracymdc0jagtgjzfuu5iy['5'] = '11101011101010';
		$Vuracymdc0jagtgjzfuu5iy['6'] = '10111011101010';
		$Vuracymdc0jagtgjzfuu5iy['7'] = '10101011101110';
		$Vuracymdc0jagtgjzfuu5iy['8'] = '10101110111010';
		$Vuracymdc0jagtgjzfuu5iy['9'] = '10111010111010';
		if ($Vuracymdc0jawsof5ff3dru) {
			
			$Vuracymdc0jau3hgjh1nrq0 .= $Vuracymdc0janwufml5q3nphis->checksum_s25($Vuracymdc0jau3hgjh1nrq0);
		}
		if((strlen($Vuracymdc0jau3hgjh1nrq0) % 2) != 0) {
			
			$Vuracymdc0jau3hgjh1nrq0 = '0'.$Vuracymdc0jau3hgjh1nrq0;
		}
		$Va0rrywcezym = '11011010';
		$Vuracymdc0ja2vhbymsmgky = strlen($Vuracymdc0jau3hgjh1nrq0);
		for ($Vuracymdc0ja55vc4mewy5w = 0; $Vuracymdc0ja55vc4mewy5w < $Vuracymdc0ja2vhbymsmgky; ++$Vuracymdc0ja55vc4mewy5w) {
			$Vlka1t5koioq = $Vuracymdc0jau3hgjh1nrq0{$Vuracymdc0ja55vc4mewy5w};
			if (!isset($Vuracymdc0jagtgjzfuu5iy[$Vlka1t5koioq])) {
				
				return false;
			}
			$Va0rrywcezym .= $Vuracymdc0jagtgjzfuu5iy[$Vlka1t5koioq];
		}
		$Va0rrywcezym .= '1101011';
		$Vuracymdc0ja1iw4nknsm3garray = array('code' => $Vuracymdc0jau3hgjh1nrq0, 'maxw' => 0, 'maxh' => 1, 'bcode' => array());
		return $Vuracymdc0janwufml5q3nphis->binseq_to_array($Va0rrywcezym, $Vuracymdc0ja1iw4nknsm3garray);
	}

	
	protected function binseq_to_array($Va0rrywcezym, $Vuracymdc0ja1iw4nknsm3garray) {
		$Vq2lrqstguwz = strlen($Va0rrywcezym);
		$Vuracymdc0jaim12f51jw5r = 0;
		$Vuracymdc0jal0q4noiexi4 = 0;
		for ($Vuracymdc0ja55vc4mewy5w = 0; $Vuracymdc0ja55vc4mewy5w < $Vq2lrqstguwz; ++$Vuracymdc0ja55vc4mewy5w) {
			$Vuracymdc0jaim12f51jw5r += 1;
			if (($Vuracymdc0ja55vc4mewy5w == ($Vq2lrqstguwz - 1)) OR (($Vuracymdc0ja55vc4mewy5w < ($Vq2lrqstguwz - 1)) AND ($Va0rrywcezym{$Vuracymdc0ja55vc4mewy5w} != $Va0rrywcezym{($Vuracymdc0ja55vc4mewy5w+1)}))) {
				if ($Va0rrywcezym{$Vuracymdc0ja55vc4mewy5w} == '1') {
					$Vuracymdc0janwufml5q3np = true; 
				} else {
					$Vuracymdc0janwufml5q3np = false; 
				}
				$Vuracymdc0ja1iw4nknsm3garray['bcode'][$Vuracymdc0jal0q4noiexi4] = array('t' => $Vuracymdc0janwufml5q3np, 'w' => $Vuracymdc0jaim12f51jw5r, 'h' => 1, 'p' => 0);
				$Vuracymdc0ja1iw4nknsm3garray['maxw'] += $Vuracymdc0jaim12f51jw5r;
				++$Vuracymdc0jal0q4noiexi4;
				$Vuracymdc0jaim12f51jw5r = 0;
			}
		}
		return $Vuracymdc0ja1iw4nknsm3garray;
	}

	
	protected function barcode_i25($Vuracymdc0jau3hgjh1nrq0, $Vuracymdc0jawsof5ff3dru=false) {
		$Vuracymdc0jagtgjzfuu5iy['0'] = '11221';
		$Vuracymdc0jagtgjzfuu5iy['1'] = '21112';
		$Vuracymdc0jagtgjzfuu5iy['2'] = '12112';
		$Vuracymdc0jagtgjzfuu5iy['3'] = '22111';
		$Vuracymdc0jagtgjzfuu5iy['4'] = '11212';
		$Vuracymdc0jagtgjzfuu5iy['5'] = '21211';
		$Vuracymdc0jagtgjzfuu5iy['6'] = '12211';
		$Vuracymdc0jagtgjzfuu5iy['7'] = '11122';
		$Vuracymdc0jagtgjzfuu5iy['8'] = '21121';
		$Vuracymdc0jagtgjzfuu5iy['9'] = '12121';
		$Vuracymdc0jagtgjzfuu5iy['A'] = '11';
		$Vuracymdc0jagtgjzfuu5iy['Z'] = '21';
		if ($Vuracymdc0jawsof5ff3dru) {
			
			$Vuracymdc0jau3hgjh1nrq0 .= $Vuracymdc0janwufml5q3nphis->checksum_s25($Vuracymdc0jau3hgjh1nrq0);
		}
		if((strlen($Vuracymdc0jau3hgjh1nrq0) % 2) != 0) {
			
			$Vuracymdc0jau3hgjh1nrq0 = '0'.$Vuracymdc0jau3hgjh1nrq0;
		}
		
		$Vuracymdc0jau3hgjh1nrq0 = 'AA'.strtolower($Vuracymdc0jau3hgjh1nrq0).'ZA';

		$Vuracymdc0ja1iw4nknsm3garray = array('code' => $Vuracymdc0jau3hgjh1nrq0, 'maxw' => 0, 'maxh' => 1, 'bcode' => array());
		$Vuracymdc0jal0q4noiexi4 = 0;
		$Vuracymdc0ja2vhbymsmgky = strlen($Vuracymdc0jau3hgjh1nrq0);
		for ($Vuracymdc0ja55vc4mewy5w = 0; $Vuracymdc0ja55vc4mewy5w < $Vuracymdc0ja2vhbymsmgky; $Vuracymdc0ja55vc4mewy5w = ($Vuracymdc0ja55vc4mewy5w + 2)) {
			$Vuracymdc0jaq3d4zu0txr3_bar = $Vuracymdc0jau3hgjh1nrq0{$Vuracymdc0ja55vc4mewy5w};
			$Vuracymdc0jaq3d4zu0txr3_space = $Vuracymdc0jau3hgjh1nrq0{$Vuracymdc0ja55vc4mewy5w+1};
			if((!isset($Vuracymdc0jagtgjzfuu5iy[$Vuracymdc0jaq3d4zu0txr3_bar])) OR (!isset($Vuracymdc0jagtgjzfuu5iy[$Vuracymdc0jaq3d4zu0txr3_space]))) {
				
				return false;
			}
			
			$Va0rrywcezym = '';
			$Vuracymdc0jagtgjzfuu5iylen = strlen($Vuracymdc0jagtgjzfuu5iy[$Vuracymdc0jaq3d4zu0txr3_bar]);
			for ($Vvt20qqut4bu = 0; $Vvt20qqut4bu < $Vuracymdc0jagtgjzfuu5iylen; $Vvt20qqut4bu++){
				$Va0rrywcezym .= $Vuracymdc0jagtgjzfuu5iy[$Vuracymdc0jaq3d4zu0txr3_bar]{$Vvt20qqut4bu} . $Vuracymdc0jagtgjzfuu5iy[$Vuracymdc0jaq3d4zu0txr3_space]{$Vvt20qqut4bu};
			}
			$Va0rrywcezymlen = strlen($Va0rrywcezym);
			for ($Vuracymdc0jauaufi3la1vg = 0; $Vuracymdc0jauaufi3la1vg < $Va0rrywcezymlen; ++$Vuracymdc0jauaufi3la1vg) {
				if (($Vuracymdc0jauaufi3la1vg % 2) == 0) {
					$Vuracymdc0janwufml5q3np = true; 
				} else {
					$Vuracymdc0janwufml5q3np = false; 
				}
				$Vuracymdc0jaim12f51jw5r = $Va0rrywcezym{$Vuracymdc0jauaufi3la1vg};
				$Vuracymdc0ja1iw4nknsm3garray['bcode'][$Vuracymdc0jal0q4noiexi4] = array('t' => $Vuracymdc0janwufml5q3np, 'w' => $Vuracymdc0jaim12f51jw5r, 'h' => 1, 'p' => 0);
				$Vuracymdc0ja1iw4nknsm3garray['maxw'] += $Vuracymdc0jaim12f51jw5r;
				++$Vuracymdc0jal0q4noiexi4;
			}
		}
		return $Vuracymdc0ja1iw4nknsm3garray;
	}

	
	protected function barcode_c128($Vuracymdc0jau3hgjh1nrq0, $Vuracymdc0javmwm1jsklgc='') {
		$Vuracymdc0jagtgjzfuu5iy = array(
			'212222', 
			'222122', 
			'222221', 
			'121223', 
			'121322', 
			'131222', 
			'122213', 
			'122312', 
			'132212', 
			'221213', 
			'221312', 
			'231212', 
			'112232', 
			'122132', 
			'122231', 
			'113222', 
			'123122', 
			'123221', 
			'223211', 
			'221132', 
			'221231', 
			'213212', 
			'223112', 
			'312131', 
			'311222', 
			'321122', 
			'321221', 
			'312212', 
			'322112', 
			'322211', 
			'212123', 
			'212321', 
			'232121', 
			'111323', 
			'131123', 
			'131321', 
			'112313', 
			'132113', 
			'132311', 
			'211313', 
			'231113', 
			'231311', 
			'112133', 
			'112331', 
			'132131', 
			'113123', 
			'113321', 
			'133121', 
			'313121', 
			'211331', 
			'231131', 
			'213113', 
			'213311', 
			'213131', 
			'311123', 
			'311321', 
			'331121', 
			'312113', 
			'312311', 
			'332111', 
			'314111', 
			'221411', 
			'431111', 
			'111224', 
			'111422', 
			'121124', 
			'121421', 
			'141122', 
			'141221', 
			'112214', 
			'112412', 
			'122114', 
			'122411', 
			'142112', 
			'142211', 
			'241211', 
			'221114', 
			'413111', 
			'241112', 
			'134111', 
			'111242', 
			'121142', 
			'121241', 
			'114212', 
			'124112', 
			'124211', 
			'411212', 
			'421112', 
			'421211', 
			'212141', 
			'214121', 
			'412121', 
			'111143', 
			'111341', 
			'131141', 
			'114113', 
			'114311', 
			'411113', 
			'411311', 
			'113141', 
			'114131', 
			'311141', 
			'411131', 
			'211412', 
			'211214', 
			'211232', 
			'233111', 
			'200000'  
		);
		
		$Vuracymdc0jal0q4noiexi4eys_a = ' !"#$%&\'()*+,-./0123456789:;<=>?@ABCDEFGHIJKLMNOPQRSTUVWXYZ[\\]^_';
		$Vuracymdc0jal0q4noiexi4eys_a .= chr(0).chr(1).chr(2).chr(3).chr(4).chr(5).chr(6).chr(7).chr(8).chr(9);
		$Vuracymdc0jal0q4noiexi4eys_a .= chr(10).chr(11).chr(12).chr(13).chr(14).chr(15).chr(16).chr(17).chr(18).chr(19);
		$Vuracymdc0jal0q4noiexi4eys_a .= chr(20).chr(21).chr(22).chr(23).chr(24).chr(25).chr(26).chr(27).chr(28).chr(29);
		$Vuracymdc0jal0q4noiexi4eys_a .= chr(30).chr(31);
		
		$Vuracymdc0jal0q4noiexi4eys_b = ' !"#$%&\'()*+,-./0123456789:;<=>?@ABCDEFGHIJKLMNOPQRSTUVWXYZ[\\]^_`abcdefghijklmnopqrstuvwxyz{|}~'.chr(127);
		
		$Vqkrju134j3l = array(241 => 102, 242 => 97, 243 => 96, 244 => 101);
		$Vhkpgfc3s1ix = array(241 => 102, 242 => 97, 243 => 96, 244 => 100);
		
		$Vuracymdc0jau3hgjh1nrq0_data = array();
		
		$Vq2lrqstguwz = strlen($Vuracymdc0jau3hgjh1nrq0);
		switch(strtoupper($Vuracymdc0javmwm1jsklgc)) {
			case 'A': { 
				$Vvt20qqut4butartid = 103;
				for ($Vuracymdc0ja55vc4mewy5w = 0; $Vuracymdc0ja55vc4mewy5w < $Vq2lrqstguwz; ++$Vuracymdc0ja55vc4mewy5w) {
					$Vuracymdc0jaq3d4zu0txr3 = $Vuracymdc0jau3hgjh1nrq0{$Vuracymdc0ja55vc4mewy5w};
					$Vuracymdc0jaq3d4zu0txr3_id = ord($Vuracymdc0jaq3d4zu0txr3);
					if (($Vuracymdc0jaq3d4zu0txr3_id >= 241) AND ($Vuracymdc0jaq3d4zu0txr3_id <= 244)) {
						$Vuracymdc0jau3hgjh1nrq0_data[] = $Vqkrju134j3l[$Vuracymdc0jaq3d4zu0txr3_id];
					} elseif (($Vuracymdc0jaq3d4zu0txr3_id >= 0) AND ($Vuracymdc0jaq3d4zu0txr3_id <= 95)) {
						$Vuracymdc0jau3hgjh1nrq0_data[] = strpos($Vuracymdc0jal0q4noiexi4eys_a, $Vuracymdc0jaq3d4zu0txr3);
					} else {
						return false;
					}
				}
				break;
			}
			case 'B': { 
				$Vvt20qqut4butartid = 104;
				for ($Vuracymdc0ja55vc4mewy5w = 0; $Vuracymdc0ja55vc4mewy5w < $Vq2lrqstguwz; ++$Vuracymdc0ja55vc4mewy5w) {
					$Vuracymdc0jaq3d4zu0txr3 = $Vuracymdc0jau3hgjh1nrq0{$Vuracymdc0ja55vc4mewy5w};
					$Vuracymdc0jaq3d4zu0txr3_id = ord($Vuracymdc0jaq3d4zu0txr3);
					if (($Vuracymdc0jaq3d4zu0txr3_id >= 241) AND ($Vuracymdc0jaq3d4zu0txr3_id <= 244)) {
						$Vuracymdc0jau3hgjh1nrq0_data[] = $Vhkpgfc3s1ix[$Vuracymdc0jaq3d4zu0txr3_id];
					} elseif (($Vuracymdc0jaq3d4zu0txr3_id >= 32) AND ($Vuracymdc0jaq3d4zu0txr3_id <= 127)) {
						$Vuracymdc0jau3hgjh1nrq0_data[] = strpos($Vuracymdc0jal0q4noiexi4eys_b, $Vuracymdc0jaq3d4zu0txr3);
					} else {
						return false;
					}
				}
				break;
			}
			case 'C': { 
				$Vvt20qqut4butartid = 105;
				if (ord($Vuracymdc0jau3hgjh1nrq0[0]) == 241) {
					$Vuracymdc0jau3hgjh1nrq0_data[] = 102;
					$Vuracymdc0jau3hgjh1nrq0 = substr($Vuracymdc0jau3hgjh1nrq0, 1);
					--$Vq2lrqstguwz;
				}
				if (($Vq2lrqstguwz % 2) != 0) {
					
					return false;
				}
				for ($Vuracymdc0ja55vc4mewy5w = 0; $Vuracymdc0ja55vc4mewy5w < $Vq2lrqstguwz; $Vuracymdc0ja55vc4mewy5w+=2) {
					$Vuracymdc0jagtgjzfuu5iynum = $Vuracymdc0jau3hgjh1nrq0{$Vuracymdc0ja55vc4mewy5w}.$Vuracymdc0jau3hgjh1nrq0{$Vuracymdc0ja55vc4mewy5w+1};
					if (preg_match('/([0-9]{2})/', $Vuracymdc0jagtgjzfuu5iynum) > 0) {
						$Vuracymdc0jau3hgjh1nrq0_data[] = intval($Vuracymdc0jagtgjzfuu5iynum);
					} else {
						return false;
					}
				}
				break;
			}
			default: { 
				
				$Va0rrywcezymuence = array();
				
				$Vq0licy42v1b = array();
				preg_match_all('/([0-9]{4,})/', $Vuracymdc0jau3hgjh1nrq0, $Vq0licy42v1b, PREG_OFFSET_CAPTURE);
				if (isset($Vq0licy42v1b[1]) AND !empty($Vq0licy42v1b[1])) {
					$V1z5c2qvun4h = 0;
					foreach ($Vq0licy42v1b[1] as $Vuracymdc0jaz0hmukhwa4zal) {
						$Vzl5igrsjgyf = $Vuracymdc0jaz0hmukhwa4zal[1];
						if ($Vzl5igrsjgyf > $V1z5c2qvun4h) {
							
							$Va0rrywcezymuence = array_merge($Va0rrywcezymuence, $Vuracymdc0janwufml5q3nphis->get128ABsequence(substr($Vuracymdc0jau3hgjh1nrq0, $V1z5c2qvun4h, ($Vzl5igrsjgyf - $V1z5c2qvun4h))));
						}
						
						$Vvt20qqut4bulen = strlen($Vuracymdc0jaz0hmukhwa4zal[0]);
						if (($Vvt20qqut4bulen % 2) != 0) {
							
							--$Vvt20qqut4bulen;
						}
						$Va0rrywcezymuence[] = array('C', substr($Vuracymdc0jau3hgjh1nrq0, $Vzl5igrsjgyf, $Vvt20qqut4bulen), $Vvt20qqut4bulen);
						$V1z5c2qvun4h = $Vzl5igrsjgyf + $Vvt20qqut4bulen;
					}
					if ($V1z5c2qvun4h < $Vq2lrqstguwz) {
						$Va0rrywcezymuence = array_merge($Va0rrywcezymuence, $Vuracymdc0janwufml5q3nphis->get128ABsequence(substr($Vuracymdc0jau3hgjh1nrq0, $V1z5c2qvun4h)));
					}
				} else {
					
					$Va0rrywcezymuence = array_merge($Va0rrywcezymuence, $Vuracymdc0janwufml5q3nphis->get128ABsequence($Vuracymdc0jau3hgjh1nrq0));
				}
				
				foreach ($Va0rrywcezymuence as $Vuracymdc0jal0q4noiexi4ey => $Va0rrywcezym) {
					switch($Va0rrywcezym[0]) {
						case 'A': {
							if ($Vuracymdc0jal0q4noiexi4ey == 0) {
								$Vvt20qqut4butartid = 103;
							} elseif ($Va0rrywcezymuence[($Vuracymdc0jal0q4noiexi4ey - 1)][0] != 'A') {
								if (($Va0rrywcezym[2] == 1) AND ($Vuracymdc0jal0q4noiexi4ey > 0) AND ($Va0rrywcezymuence[($Vuracymdc0jal0q4noiexi4ey - 1)][0] == 'B') AND (!isset($Va0rrywcezymuence[($Vuracymdc0jal0q4noiexi4ey - 1)][3]))) {
									
									$Vuracymdc0jau3hgjh1nrq0_data[] = 98;
									
									$Va0rrywcezymuence[$Vuracymdc0jal0q4noiexi4ey][3] = true;
								} elseif (!isset($Va0rrywcezymuence[($Vuracymdc0jal0q4noiexi4ey - 1)][3])) {
									$Vuracymdc0jau3hgjh1nrq0_data[] = 101;
								}
							}
							for ($Vuracymdc0ja55vc4mewy5w = 0; $Vuracymdc0ja55vc4mewy5w < $Va0rrywcezym[2]; ++$Vuracymdc0ja55vc4mewy5w) {
								$Vuracymdc0jaq3d4zu0txr3 = $Va0rrywcezym[1]{$Vuracymdc0ja55vc4mewy5w};
								$Vuracymdc0jaq3d4zu0txr3_id = ord($Vuracymdc0jaq3d4zu0txr3);
								if (($Vuracymdc0jaq3d4zu0txr3_id >= 241) AND ($Vuracymdc0jaq3d4zu0txr3_id <= 244)) {
									$Vuracymdc0jau3hgjh1nrq0_data[] = $Vqkrju134j3l[$Vuracymdc0jaq3d4zu0txr3_id];
								} else {
									$Vuracymdc0jau3hgjh1nrq0_data[] = strpos($Vuracymdc0jal0q4noiexi4eys_a, $Vuracymdc0jaq3d4zu0txr3);
								}
							}
							break;
						}
						case 'B': {
							if ($Vuracymdc0jal0q4noiexi4ey == 0) {
								$Vuracymdc0janwufml5q3npmpchr = ord($Va0rrywcezym[1][0]);
								if (($Va0rrywcezym[2] == 1) AND ($Vuracymdc0janwufml5q3npmpchr >= 241) AND ($Vuracymdc0janwufml5q3npmpchr <= 244) AND isset($Va0rrywcezymuence[($Vuracymdc0jal0q4noiexi4ey + 1)]) AND ($Va0rrywcezymuence[($Vuracymdc0jal0q4noiexi4ey + 1)][0] != 'B')) {
									switch ($Va0rrywcezymuence[($Vuracymdc0jal0q4noiexi4ey + 1)][0]) {
										case 'A': {
											$Vvt20qqut4butartid = 103;
											$Va0rrywcezymuence[$Vuracymdc0jal0q4noiexi4ey][0] = 'A';
											$Vuracymdc0jau3hgjh1nrq0_data[] = $Vqkrju134j3l[$Vuracymdc0janwufml5q3npmpchr];
											break;
										}
										case 'C': {
											$Vvt20qqut4butartid = 105;
											$Va0rrywcezymuence[$Vuracymdc0jal0q4noiexi4ey][0] = 'C';
											$Vuracymdc0jau3hgjh1nrq0_data[] = $Vqkrju134j3l[$Vuracymdc0janwufml5q3npmpchr];
											break;
										}
									}
									break;
								} else {
									$Vvt20qqut4butartid = 104;
								}
							} elseif ($Va0rrywcezymuence[($Vuracymdc0jal0q4noiexi4ey - 1)][0] != 'B') {
								if (($Va0rrywcezym[2] == 1) AND ($Vuracymdc0jal0q4noiexi4ey > 0) AND ($Va0rrywcezymuence[($Vuracymdc0jal0q4noiexi4ey - 1)][0] == 'A') AND (!isset($Va0rrywcezymuence[($Vuracymdc0jal0q4noiexi4ey - 1)][3]))) {
									
									$Vuracymdc0jau3hgjh1nrq0_data[] = 98;
									
									$Va0rrywcezymuence[$Vuracymdc0jal0q4noiexi4ey][3] = true;
								} elseif (!isset($Va0rrywcezymuence[($Vuracymdc0jal0q4noiexi4ey - 1)][3])) {
									$Vuracymdc0jau3hgjh1nrq0_data[] = 100;
								}
							}
							for ($Vuracymdc0ja55vc4mewy5w = 0; $Vuracymdc0ja55vc4mewy5w < $Va0rrywcezym[2]; ++$Vuracymdc0ja55vc4mewy5w) {
								$Vuracymdc0jaq3d4zu0txr3 = $Va0rrywcezym[1]{$Vuracymdc0ja55vc4mewy5w};
								$Vuracymdc0jaq3d4zu0txr3_id = ord($Vuracymdc0jaq3d4zu0txr3);
								if (($Vuracymdc0jaq3d4zu0txr3_id >= 241) AND ($Vuracymdc0jaq3d4zu0txr3_id <= 244)) {
									$Vuracymdc0jau3hgjh1nrq0_data[] = $Vhkpgfc3s1ix[$Vuracymdc0jaq3d4zu0txr3_id];
								} else {
									$Vuracymdc0jau3hgjh1nrq0_data[] = strpos($Vuracymdc0jal0q4noiexi4eys_b, $Vuracymdc0jaq3d4zu0txr3);
								}
							}
							break;
						}
						case 'C': {
							if ($Vuracymdc0jal0q4noiexi4ey == 0) {
								$Vvt20qqut4butartid = 105;
							} elseif ($Va0rrywcezymuence[($Vuracymdc0jal0q4noiexi4ey - 1)][0] != 'C') {
								$Vuracymdc0jau3hgjh1nrq0_data[] = 99;
							}
							for ($Vuracymdc0ja55vc4mewy5w = 0; $Vuracymdc0ja55vc4mewy5w < $Va0rrywcezym[2]; $Vuracymdc0ja55vc4mewy5w+=2) {
								$Vuracymdc0jagtgjzfuu5iynum = $Va0rrywcezym[1]{$Vuracymdc0ja55vc4mewy5w}.$Va0rrywcezym[1]{$Vuracymdc0ja55vc4mewy5w+1};
								$Vuracymdc0jau3hgjh1nrq0_data[] = intval($Vuracymdc0jagtgjzfuu5iynum);
							}
							break;
						}
					}
				}
			}
		}
		
		$V0dsyrnytpjj = $Vvt20qqut4butartid;
		foreach ($Vuracymdc0jau3hgjh1nrq0_data as $Vuracymdc0jal0q4noiexi4ey => $Vuracymdc0jaz0hmukhwa4zal) {
			$V0dsyrnytpjj += ($Vuracymdc0jaz0hmukhwa4zal * ($Vuracymdc0jal0q4noiexi4ey + 1));
		}
		
		$Vuracymdc0jau3hgjh1nrq0_data[] = ($V0dsyrnytpjj % 103);
		
		$Vuracymdc0jau3hgjh1nrq0_data[] = 106;
		$Vuracymdc0jau3hgjh1nrq0_data[] = 107;
		
		array_unshift($Vuracymdc0jau3hgjh1nrq0_data, $Vvt20qqut4butartid);
		
		$Vuracymdc0ja1iw4nknsm3garray = array('code' => $Vuracymdc0jau3hgjh1nrq0, 'maxw' => 0, 'maxh' => 1, 'bcode' => array());
		foreach ($Vuracymdc0jau3hgjh1nrq0_data as $Vuracymdc0jaz0hmukhwa4zal) {
			$Va0rrywcezym = $Vuracymdc0jagtgjzfuu5iy[$Vuracymdc0jaz0hmukhwa4zal];
			for ($Vuracymdc0jauaufi3la1vg = 0; $Vuracymdc0jauaufi3la1vg < 6; ++$Vuracymdc0jauaufi3la1vg) {
				if (($Vuracymdc0jauaufi3la1vg % 2) == 0) {
					$Vuracymdc0janwufml5q3np = true; 
				} else {
					$Vuracymdc0janwufml5q3np = false; 
				}
				$Vuracymdc0jaim12f51jw5r = $Va0rrywcezym{$Vuracymdc0jauaufi3la1vg};
				$Vuracymdc0ja1iw4nknsm3garray['bcode'][] = array('t' => $Vuracymdc0janwufml5q3np, 'w' => $Vuracymdc0jaim12f51jw5r, 'h' => 1, 'p' => 0);
				$Vuracymdc0ja1iw4nknsm3garray['maxw'] += $Vuracymdc0jaim12f51jw5r;
			}
		}
		return $Vuracymdc0ja1iw4nknsm3garray;
	}

	
	protected function get128ABsequence($Vuracymdc0jau3hgjh1nrq0) {
		$Vq2lrqstguwz = strlen($Vuracymdc0jau3hgjh1nrq0);
		$Va0rrywcezymuence = array();
		
		$Vq0licy42v1b = array();
		preg_match_all('/([\0-\31])/', $Vuracymdc0jau3hgjh1nrq0, $Vq0licy42v1b, PREG_OFFSET_CAPTURE);
		if (isset($Vq0licy42v1b[1]) AND !empty($Vq0licy42v1b[1])) {
			$V1z5c2qvun4h = 0;
			foreach ($Vq0licy42v1b[1] as $Vuracymdc0jaz0hmukhwa4zal) {
				$Vzl5igrsjgyf = $Vuracymdc0jaz0hmukhwa4zal[1];
				if ($Vzl5igrsjgyf > $V1z5c2qvun4h) {
					
					$Va0rrywcezymuence[] = array('B', substr($Vuracymdc0jau3hgjh1nrq0, $V1z5c2qvun4h, ($Vzl5igrsjgyf - $V1z5c2qvun4h)), ($Vzl5igrsjgyf - $V1z5c2qvun4h));
				}
				
				$Vvt20qqut4bulen = strlen($Vuracymdc0jaz0hmukhwa4zal[0]);
				$Va0rrywcezymuence[] = array('A', substr($Vuracymdc0jau3hgjh1nrq0, $Vzl5igrsjgyf, $Vvt20qqut4bulen), $Vvt20qqut4bulen);
				$V1z5c2qvun4h = $Vzl5igrsjgyf + $Vvt20qqut4bulen;
			}
			if ($V1z5c2qvun4h < $Vq2lrqstguwz) {
				$Va0rrywcezymuence[] = array('B', substr($Vuracymdc0jau3hgjh1nrq0, $V1z5c2qvun4h), ($Vq2lrqstguwz - $V1z5c2qvun4h));
			}
		} else {
			
			$Va0rrywcezymuence[] = array('B', $Vuracymdc0jau3hgjh1nrq0, $Vq2lrqstguwz);
		}
		return $Va0rrywcezymuence;
	}

	
	protected function barcode_eanupc($Vuracymdc0jau3hgjh1nrq0, $Vq2lrqstguwz=13) {
		$Vf5zxbb32ro1 = false;
		if ($Vq2lrqstguwz == 6) {
			$Vq2lrqstguwz = 12; 
			$Vf5zxbb32ro1 = true; 
		}
		$Vuracymdc0jamfvrsd5xyqh_len = $Vq2lrqstguwz - 1;
		
		$Vuracymdc0jau3hgjh1nrq0 = str_pad($Vuracymdc0jau3hgjh1nrq0, $Vuracymdc0jamfvrsd5xyqh_len, '0', STR_PAD_LEFT);
		$Vuracymdc0jau3hgjh1nrq0_len = strlen($Vuracymdc0jau3hgjh1nrq0);
		
		$V0dsyrnytpjj_a = 0;
		for ($Vuracymdc0ja55vc4mewy5w = 1; $Vuracymdc0ja55vc4mewy5w < $Vuracymdc0jamfvrsd5xyqh_len; $Vuracymdc0ja55vc4mewy5w+=2) {
			$V0dsyrnytpjj_a += $Vuracymdc0jau3hgjh1nrq0{$Vuracymdc0ja55vc4mewy5w};
		}
		if ($Vq2lrqstguwz > 12) {
			$V0dsyrnytpjj_a *= 3;
		}
		$V0dsyrnytpjj_b = 0;
		for ($Vuracymdc0ja55vc4mewy5w = 0; $Vuracymdc0ja55vc4mewy5w < $Vuracymdc0jamfvrsd5xyqh_len; $Vuracymdc0ja55vc4mewy5w+=2) {
			$V0dsyrnytpjj_b += ($Vuracymdc0jau3hgjh1nrq0{$Vuracymdc0ja55vc4mewy5w});
		}
		if ($Vq2lrqstguwz < 13) {
			$V0dsyrnytpjj_b *= 3;
		}
		$Vfhkt4vbeual = ($V0dsyrnytpjj_a + $V0dsyrnytpjj_b) % 10;
		if($Vfhkt4vbeual > 0) {
			$Vfhkt4vbeual = (10 - $Vfhkt4vbeual);
		}
		if ($Vuracymdc0jau3hgjh1nrq0_len == $Vuracymdc0jamfvrsd5xyqh_len) {
			
			$Vuracymdc0jau3hgjh1nrq0 .= $Vfhkt4vbeual;
		} elseif ($Vfhkt4vbeual !== intval($Vuracymdc0jau3hgjh1nrq0{$Vuracymdc0jamfvrsd5xyqh_len})) {
			
			return false;
		}
		if ($Vq2lrqstguwz == 12) {
			
			$Vuracymdc0jau3hgjh1nrq0 = '0'.$Vuracymdc0jau3hgjh1nrq0;
			++$Vq2lrqstguwz;
		}
		if ($Vf5zxbb32ro1) {
			
			$Vuracymdc0janwufml5q3npmp = substr($Vuracymdc0jau3hgjh1nrq0, 4, 3);
			if (($Vuracymdc0janwufml5q3npmp == '000') OR ($Vuracymdc0janwufml5q3npmp == '100') OR ($Vuracymdc0janwufml5q3npmp == '200')) {
				
				$Vf5zxbb32ro1_code = substr($Vuracymdc0jau3hgjh1nrq0, 2, 2).substr($Vuracymdc0jau3hgjh1nrq0, 9, 3).substr($Vuracymdc0jau3hgjh1nrq0, 4, 1);
			} else {
				$Vuracymdc0janwufml5q3npmp = substr($Vuracymdc0jau3hgjh1nrq0, 5, 2);
				if ($Vuracymdc0janwufml5q3npmp == '00') {
					
					$Vf5zxbb32ro1_code = substr($Vuracymdc0jau3hgjh1nrq0, 2, 3).substr($Vuracymdc0jau3hgjh1nrq0, 10, 2).'3';
				} else {
					$Vuracymdc0janwufml5q3npmp = substr($Vuracymdc0jau3hgjh1nrq0, 6, 1);
					if ($Vuracymdc0janwufml5q3npmp == '0') {
						
						$Vf5zxbb32ro1_code = substr($Vuracymdc0jau3hgjh1nrq0, 2, 4).substr($Vuracymdc0jau3hgjh1nrq0, 11, 1).'4';
					} else {
						
						$Vf5zxbb32ro1_code = substr($Vuracymdc0jau3hgjh1nrq0, 2, 5).substr($Vuracymdc0jau3hgjh1nrq0, 11, 1);
					}
				}
			}
		}
		
		$Vuracymdc0jau3hgjh1nrq0s = array(
			'A'=>array( 
				'0'=>'0001101',
				'1'=>'0011001',
				'2'=>'0010011',
				'3'=>'0111101',
				'4'=>'0100011',
				'5'=>'0110001',
				'6'=>'0101111',
				'7'=>'0111011',
				'8'=>'0110111',
				'9'=>'0001011'),
			'B'=>array( 
				'0'=>'0100111',
				'1'=>'0110011',
				'2'=>'0011011',
				'3'=>'0100001',
				'4'=>'0011101',
				'5'=>'0111001',
				'6'=>'0000101',
				'7'=>'0010001',
				'8'=>'0001001',
				'9'=>'0010111'),
			'C'=>array( 
				'0'=>'1110010',
				'1'=>'1100110',
				'2'=>'1101100',
				'3'=>'1000010',
				'4'=>'1011100',
				'5'=>'1001110',
				'6'=>'1010000',
				'7'=>'1000100',
				'8'=>'1001000',
				'9'=>'1110100')
		);
		$V1yuhsvbtlvrarities = array(
			'0'=>array('A','A','A','A','A','A'),
			'1'=>array('A','A','B','A','B','B'),
			'2'=>array('A','A','B','B','A','B'),
			'3'=>array('A','A','B','B','B','A'),
			'4'=>array('A','B','A','A','B','B'),
			'5'=>array('A','B','B','A','A','B'),
			'6'=>array('A','B','B','B','A','A'),
			'7'=>array('A','B','A','B','A','B'),
			'8'=>array('A','B','A','B','B','A'),
			'9'=>array('A','B','B','A','B','A')
		);
		$Vf5zxbb32ro1_parities = array();
		$Vf5zxbb32ro1_parities[0] = array(
			'0'=>array('B','B','B','A','A','A'),
			'1'=>array('B','B','A','B','A','A'),
			'2'=>array('B','B','A','A','B','A'),
			'3'=>array('B','B','A','A','A','B'),
			'4'=>array('B','A','B','B','A','A'),
			'5'=>array('B','A','A','B','B','A'),
			'6'=>array('B','A','A','A','B','B'),
			'7'=>array('B','A','B','A','B','A'),
			'8'=>array('B','A','B','A','A','B'),
			'9'=>array('B','A','A','B','A','B')
		);
		$Vf5zxbb32ro1_parities[1] = array(
			'0'=>array('A','A','A','B','B','B'),
			'1'=>array('A','A','B','A','B','B'),
			'2'=>array('A','A','B','B','A','B'),
			'3'=>array('A','A','B','B','B','A'),
			'4'=>array('A','B','A','A','B','B'),
			'5'=>array('A','B','B','A','A','B'),
			'6'=>array('A','B','B','B','A','A'),
			'7'=>array('A','B','A','B','A','B'),
			'8'=>array('A','B','A','B','B','A'),
			'9'=>array('A','B','B','A','B','A')
		);
		$Vuracymdc0jal0q4noiexi4 = 0;
		$Va0rrywcezym = '101'; 
		if ($Vf5zxbb32ro1) {
			$Vuracymdc0ja1iw4nknsm3garray = array('code' => $Vf5zxbb32ro1_code, 'maxw' => 0, 'maxh' => 1, 'bcode' => array());
			$V1yuhsvbtlvr = $Vf5zxbb32ro1_parities[$Vuracymdc0jau3hgjh1nrq0[1]][$Vfhkt4vbeual];
			for ($Vuracymdc0ja55vc4mewy5w = 0; $Vuracymdc0ja55vc4mewy5w < 6; ++$Vuracymdc0ja55vc4mewy5w) {
				$Va0rrywcezym .= $Vuracymdc0jau3hgjh1nrq0s[$V1yuhsvbtlvr[$Vuracymdc0ja55vc4mewy5w]][$Vf5zxbb32ro1_code{$Vuracymdc0ja55vc4mewy5w}];
			}
			$Va0rrywcezym .= '010101'; 
		} else {
			$Vuracymdc0ja1iw4nknsm3garray = array('code' => $Vuracymdc0jau3hgjh1nrq0, 'maxw' => 0, 'maxh' => 1, 'bcode' => array());
			$Vuracymdc0javjxcwrp4tjqalf_len = intval(ceil($Vq2lrqstguwz / 2));
			if ($Vq2lrqstguwz == 8) {
				for ($Vuracymdc0ja55vc4mewy5w = 0; $Vuracymdc0ja55vc4mewy5w < $Vuracymdc0javjxcwrp4tjqalf_len; ++$Vuracymdc0ja55vc4mewy5w) {
					$Va0rrywcezym .= $Vuracymdc0jau3hgjh1nrq0s['A'][$Vuracymdc0jau3hgjh1nrq0{$Vuracymdc0ja55vc4mewy5w}];
				}
			} else {
				$V1yuhsvbtlvr = $V1yuhsvbtlvrarities[$Vuracymdc0jau3hgjh1nrq0[0]];
				for ($Vuracymdc0ja55vc4mewy5w = 1; $Vuracymdc0ja55vc4mewy5w < $Vuracymdc0javjxcwrp4tjqalf_len; ++$Vuracymdc0ja55vc4mewy5w) {
					$Va0rrywcezym .= $Vuracymdc0jau3hgjh1nrq0s[$V1yuhsvbtlvr[$Vuracymdc0ja55vc4mewy5w-1]][$Vuracymdc0jau3hgjh1nrq0{$Vuracymdc0ja55vc4mewy5w}];
				}
			}
			$Va0rrywcezym .= '01010'; 
			for ($Vuracymdc0ja55vc4mewy5w = $Vuracymdc0javjxcwrp4tjqalf_len; $Vuracymdc0ja55vc4mewy5w < $Vq2lrqstguwz; ++$Vuracymdc0ja55vc4mewy5w) {
				$Va0rrywcezym .= $Vuracymdc0jau3hgjh1nrq0s['C'][$Vuracymdc0jau3hgjh1nrq0{$Vuracymdc0ja55vc4mewy5w}];
			}
			$Va0rrywcezym .= '101'; 
		}
		$Vuracymdc0ja2vhbymsmgky = strlen($Va0rrywcezym);
		$Vuracymdc0jaim12f51jw5r = 0;
		for ($Vuracymdc0ja55vc4mewy5w = 0; $Vuracymdc0ja55vc4mewy5w < $Vuracymdc0ja2vhbymsmgky; ++$Vuracymdc0ja55vc4mewy5w) {
			$Vuracymdc0jaim12f51jw5r += 1;
			if (($Vuracymdc0ja55vc4mewy5w == ($Vuracymdc0ja2vhbymsmgky - 1)) OR (($Vuracymdc0ja55vc4mewy5w < ($Vuracymdc0ja2vhbymsmgky - 1)) AND ($Va0rrywcezym{$Vuracymdc0ja55vc4mewy5w} != $Va0rrywcezym{($Vuracymdc0ja55vc4mewy5w+1)}))) {
				if ($Va0rrywcezym{$Vuracymdc0ja55vc4mewy5w} == '1') {
					$Vuracymdc0janwufml5q3np = true; 
				} else {
					$Vuracymdc0janwufml5q3np = false; 
				}
				$Vuracymdc0ja1iw4nknsm3garray['bcode'][$Vuracymdc0jal0q4noiexi4] = array('t' => $Vuracymdc0janwufml5q3np, 'w' => $Vuracymdc0jaim12f51jw5r, 'h' => 1, 'p' => 0);
				$Vuracymdc0ja1iw4nknsm3garray['maxw'] += $Vuracymdc0jaim12f51jw5r;
				++$Vuracymdc0jal0q4noiexi4;
				$Vuracymdc0jaim12f51jw5r = 0;
			}
		}
		return $Vuracymdc0ja1iw4nknsm3garray;
	}

	
	protected function barcode_eanext($Vuracymdc0jau3hgjh1nrq0, $Vq2lrqstguwz=5) {
		
		$Vuracymdc0jau3hgjh1nrq0 = str_pad($Vuracymdc0jau3hgjh1nrq0, $Vq2lrqstguwz, '0', STR_PAD_LEFT);
		
		if ($Vq2lrqstguwz == 2) {
			$Vfhkt4vbeual = $Vuracymdc0jau3hgjh1nrq0 % 4;
		} elseif ($Vq2lrqstguwz == 5) {
			$Vfhkt4vbeual = (3 * ($Vuracymdc0jau3hgjh1nrq0[0] + $Vuracymdc0jau3hgjh1nrq0[2] + $Vuracymdc0jau3hgjh1nrq0[4])) + (9 * ($Vuracymdc0jau3hgjh1nrq0[1] + $Vuracymdc0jau3hgjh1nrq0[3]));
			$Vfhkt4vbeual %= 10;
		} else {
			return false;
		}
		
		$Vuracymdc0jau3hgjh1nrq0s = array(
			'A'=>array( 
				'0'=>'0001101',
				'1'=>'0011001',
				'2'=>'0010011',
				'3'=>'0111101',
				'4'=>'0100011',
				'5'=>'0110001',
				'6'=>'0101111',
				'7'=>'0111011',
				'8'=>'0110111',
				'9'=>'0001011'),
			'B'=>array( 
				'0'=>'0100111',
				'1'=>'0110011',
				'2'=>'0011011',
				'3'=>'0100001',
				'4'=>'0011101',
				'5'=>'0111001',
				'6'=>'0000101',
				'7'=>'0010001',
				'8'=>'0001001',
				'9'=>'0010111')
		);
		$V1yuhsvbtlvrarities = array();
		$V1yuhsvbtlvrarities[2] = array(
			'0'=>array('A','A'),
			'1'=>array('A','B'),
			'2'=>array('B','A'),
			'3'=>array('B','B')
		);
		$V1yuhsvbtlvrarities[5] = array(
			'0'=>array('B','B','A','A','A'),
			'1'=>array('B','A','B','A','A'),
			'2'=>array('B','A','A','B','A'),
			'3'=>array('B','A','A','A','B'),
			'4'=>array('A','B','B','A','A'),
			'5'=>array('A','A','B','B','A'),
			'6'=>array('A','A','A','B','B'),
			'7'=>array('A','B','A','B','A'),
			'8'=>array('A','B','A','A','B'),
			'9'=>array('A','A','B','A','B')
		);
		$V1yuhsvbtlvr = $V1yuhsvbtlvrarities[$Vq2lrqstguwz][$Vfhkt4vbeual];
		$Va0rrywcezym = '1011'; 
		$Va0rrywcezym .= $Vuracymdc0jau3hgjh1nrq0s[$V1yuhsvbtlvr[0]][$Vuracymdc0jau3hgjh1nrq0[0]];
		for ($Vuracymdc0ja55vc4mewy5w = 1; $Vuracymdc0ja55vc4mewy5w < $Vq2lrqstguwz; ++$Vuracymdc0ja55vc4mewy5w) {
			$Va0rrywcezym .= '01'; 
			$Va0rrywcezym .= $Vuracymdc0jau3hgjh1nrq0s[$V1yuhsvbtlvr[$Vuracymdc0ja55vc4mewy5w]][$Vuracymdc0jau3hgjh1nrq0{$Vuracymdc0ja55vc4mewy5w}];
		}
		$Vuracymdc0ja1iw4nknsm3garray = array('code' => $Vuracymdc0jau3hgjh1nrq0, 'maxw' => 0, 'maxh' => 1, 'bcode' => array());
		return $Vuracymdc0janwufml5q3nphis->binseq_to_array($Va0rrywcezym, $Vuracymdc0ja1iw4nknsm3garray);
	}

	
	protected function barcode_postnet($Vuracymdc0jau3hgjh1nrq0, $V1yuhsvbtlvrlanet=false) {
		
		if ($V1yuhsvbtlvrlanet) {
			$Vuracymdc0ja1iw4nknsm3glen = Array(
				0 => Array(1,1,2,2,2),
				1 => Array(2,2,2,1,1),
				2 => Array(2,2,1,2,1),
				3 => Array(2,2,1,1,2),
				4 => Array(2,1,2,2,1),
				5 => Array(2,1,2,1,2),
				6 => Array(2,1,1,2,2),
				7 => Array(1,2,2,2,1),
				8 => Array(1,2,2,1,2),
				9 => Array(1,2,1,2,2)
			);
		} else {
			$Vuracymdc0ja1iw4nknsm3glen = Array(
				0 => Array(2,2,1,1,1),
				1 => Array(1,1,1,2,2),
				2 => Array(1,1,2,1,2),
				3 => Array(1,1,2,2,1),
				4 => Array(1,2,1,1,2),
				5 => Array(1,2,1,2,1),
				6 => Array(1,2,2,1,1),
				7 => Array(2,1,1,1,2),
				8 => Array(2,1,1,2,1),
				9 => Array(2,1,2,1,1)
			);
		}
		$Vuracymdc0ja1iw4nknsm3garray = array('code' => $Vuracymdc0jau3hgjh1nrq0, 'maxw' => 0, 'maxh' => 2, 'bcode' => array());
		$Vuracymdc0jal0q4noiexi4 = 0;
		$Vuracymdc0jau3hgjh1nrq0 = str_replace('-', '', $Vuracymdc0jau3hgjh1nrq0);
		$Vuracymdc0jau3hgjh1nrq0 = str_replace(' ', '', $Vuracymdc0jau3hgjh1nrq0);
		$Vq2lrqstguwz = strlen($Vuracymdc0jau3hgjh1nrq0);
		
		$V0dsyrnytpjj = 0;
		for ($Vuracymdc0ja55vc4mewy5w = 0; $Vuracymdc0ja55vc4mewy5w < $Vq2lrqstguwz; ++$Vuracymdc0ja55vc4mewy5w) {
			$V0dsyrnytpjj += intval($Vuracymdc0jau3hgjh1nrq0{$Vuracymdc0ja55vc4mewy5w});
		}
		$Vwcmlurixvzghkd = ($V0dsyrnytpjj % 10);
		if($Vwcmlurixvzghkd > 0) {
			$Vwcmlurixvzghkd = (10 - $Vwcmlurixvzghkd);
		}
		$Vuracymdc0jau3hgjh1nrq0 .= $Vwcmlurixvzghkd;
		$Vq2lrqstguwz = strlen($Vuracymdc0jau3hgjh1nrq0);
		
		$Vuracymdc0ja1iw4nknsm3garray['bcode'][$Vuracymdc0jal0q4noiexi4++] = array('t' => 1, 'w' => 1, 'h' => 2, 'p' => 0);
		$Vuracymdc0ja1iw4nknsm3garray['bcode'][$Vuracymdc0jal0q4noiexi4++] = array('t' => 0, 'w' => 1, 'h' => 2, 'p' => 0);
		$Vuracymdc0ja1iw4nknsm3garray['maxw'] += 2;
		for ($Vuracymdc0ja55vc4mewy5w = 0; $Vuracymdc0ja55vc4mewy5w < $Vq2lrqstguwz; ++$Vuracymdc0ja55vc4mewy5w) {
			for ($Vuracymdc0jauaufi3la1vg = 0; $Vuracymdc0jauaufi3la1vg < 5; ++$Vuracymdc0jauaufi3la1vg) {
				$Vuracymdc0javjxcwrp4tjq = $Vuracymdc0ja1iw4nknsm3glen[$Vuracymdc0jau3hgjh1nrq0{$Vuracymdc0ja55vc4mewy5w}][$Vuracymdc0jauaufi3la1vg];
				$V1yuhsvbtlvr = floor(1 / $Vuracymdc0javjxcwrp4tjq);
				$Vuracymdc0ja1iw4nknsm3garray['bcode'][$Vuracymdc0jal0q4noiexi4++] = array('t' => 1, 'w' => 1, 'h' => $Vuracymdc0javjxcwrp4tjq, 'p' => $V1yuhsvbtlvr);
				$Vuracymdc0ja1iw4nknsm3garray['bcode'][$Vuracymdc0jal0q4noiexi4++] = array('t' => 0, 'w' => 1, 'h' => 2, 'p' => 0);
				$Vuracymdc0ja1iw4nknsm3garray['maxw'] += 2;
			}
		}
		
		$Vuracymdc0ja1iw4nknsm3garray['bcode'][$Vuracymdc0jal0q4noiexi4++] = array('t' => 1, 'w' => 1, 'h' => 2, 'p' => 0);
		$Vuracymdc0ja1iw4nknsm3garray['maxw'] += 1;
		return $Vuracymdc0ja1iw4nknsm3garray;
	}

	
	protected function barcode_rms4cc($Vuracymdc0jau3hgjh1nrq0, $Vuracymdc0jal0q4noiexi4ix=false) {
		$Vi2wxxjgox4g = !$Vuracymdc0jal0q4noiexi4ix;
		
		
		
		
		
		$Vuracymdc0ja1iw4nknsm3gmode = array(
			'0' => array(3,3,2,2),
			'1' => array(3,4,1,2),
			'2' => array(3,4,2,1),
			'3' => array(4,3,1,2),
			'4' => array(4,3,2,1),
			'5' => array(4,4,1,1),
			'6' => array(3,1,4,2),
			'7' => array(3,2,3,2),
			'8' => array(3,2,4,1),
			'9' => array(4,1,3,2),
			'A' => array(4,1,4,1),
			'B' => array(4,2,3,1),
			'C' => array(3,1,2,4),
			'D' => array(3,2,1,4),
			'E' => array(3,2,2,3),
			'F' => array(4,1,1,4),
			'G' => array(4,1,2,3),
			'H' => array(4,2,1,3),
			'I' => array(1,3,4,2),
			'J' => array(1,4,3,2),
			'K' => array(1,4,4,1),
			'L' => array(2,3,3,2),
			'M' => array(2,3,4,1),
			'N' => array(2,4,3,1),
			'O' => array(1,3,2,4),
			'P' => array(1,4,1,4),
			'Q' => array(1,4,2,3),
			'R' => array(2,3,1,4),
			'S' => array(2,3,2,3),
			'T' => array(2,4,1,3),
			'U' => array(1,1,4,4),
			'V' => array(1,2,3,4),
			'W' => array(1,2,4,3),
			'X' => array(2,1,3,4),
			'Y' => array(2,1,4,3),
			'Z' => array(2,2,3,3)
		);
		$Vuracymdc0jau3hgjh1nrq0 = strtoupper($Vuracymdc0jau3hgjh1nrq0);
		$Vq2lrqstguwz = strlen($Vuracymdc0jau3hgjh1nrq0);
		$Vuracymdc0ja1iw4nknsm3garray = array('code' => $Vuracymdc0jau3hgjh1nrq0, 'maxw' => 0, 'maxh' => 3, 'bcode' => array());
		if ($Vi2wxxjgox4g) {
			
			$V3t1eu5ajysxtable = array(
				'0' => array(1,1),
				'1' => array(1,2),
				'2' => array(1,3),
				'3' => array(1,4),
				'4' => array(1,5),
				'5' => array(1,0),
				'6' => array(2,1),
				'7' => array(2,2),
				'8' => array(2,3),
				'9' => array(2,4),
				'A' => array(2,5),
				'B' => array(2,0),
				'C' => array(3,1),
				'D' => array(3,2),
				'E' => array(3,3),
				'F' => array(3,4),
				'G' => array(3,5),
				'H' => array(3,0),
				'I' => array(4,1),
				'J' => array(4,2),
				'K' => array(4,3),
				'L' => array(4,4),
				'M' => array(4,5),
				'N' => array(4,0),
				'O' => array(5,1),
				'P' => array(5,2),
				'Q' => array(5,3),
				'R' => array(5,4),
				'S' => array(5,5),
				'T' => array(5,0),
				'U' => array(0,1),
				'V' => array(0,2),
				'W' => array(0,3),
				'X' => array(0,4),
				'Y' => array(0,5),
				'Z' => array(0,0)
			);
			$Vfhkt4vbeualow = 0;
			$Vwcmlurixvzgol = 0;
			for ($Vuracymdc0ja55vc4mewy5w = 0; $Vuracymdc0ja55vc4mewy5w < $Vq2lrqstguwz; ++$Vuracymdc0ja55vc4mewy5w) {
				$Vfhkt4vbeualow += $V3t1eu5ajysxtable[$Vuracymdc0jau3hgjh1nrq0{$Vuracymdc0ja55vc4mewy5w}][0];
				$Vwcmlurixvzgol += $V3t1eu5ajysxtable[$Vuracymdc0jau3hgjh1nrq0{$Vuracymdc0ja55vc4mewy5w}][1];
			}
			$Vfhkt4vbeualow %= 6;
			$Vwcmlurixvzgol %= 6;
			$Vwcmlurixvzghk = array_keys($V3t1eu5ajysxtable, array($Vfhkt4vbeualow,$Vwcmlurixvzgol));
			$Vuracymdc0jau3hgjh1nrq0 .= $Vwcmlurixvzghk[0];
			++$Vq2lrqstguwz;
		}
		$Vuracymdc0jal0q4noiexi4 = 0;
		if ($Vi2wxxjgox4g) {
			
			$Vuracymdc0ja1iw4nknsm3garray['bcode'][$Vuracymdc0jal0q4noiexi4++] = array('t' => 1, 'w' => 1, 'h' => 2, 'p' => 0);
			$Vuracymdc0ja1iw4nknsm3garray['bcode'][$Vuracymdc0jal0q4noiexi4++] = array('t' => 0, 'w' => 1, 'h' => 2, 'p' => 0);
			$Vuracymdc0ja1iw4nknsm3garray['maxw'] += 2;
		}
		for ($Vuracymdc0ja55vc4mewy5w = 0; $Vuracymdc0ja55vc4mewy5w < $Vq2lrqstguwz; ++$Vuracymdc0ja55vc4mewy5w) {
			for ($Vuracymdc0jauaufi3la1vg = 0; $Vuracymdc0jauaufi3la1vg < 4; ++$Vuracymdc0jauaufi3la1vg) {
				switch ($Vuracymdc0ja1iw4nknsm3gmode[$Vuracymdc0jau3hgjh1nrq0{$Vuracymdc0ja55vc4mewy5w}][$Vuracymdc0jauaufi3la1vg]) {
					case 1: {
						$V1yuhsvbtlvr = 0;
						$Vuracymdc0javjxcwrp4tjq = 2;
						break;
					}
					case 2: {
						$V1yuhsvbtlvr = 0;
						$Vuracymdc0javjxcwrp4tjq = 3;
						break;
					}
					case 3: {
						$V1yuhsvbtlvr = 1;
						$Vuracymdc0javjxcwrp4tjq = 1;
						break;
					}
					case 4: {
						$V1yuhsvbtlvr = 1;
						$Vuracymdc0javjxcwrp4tjq = 2;
						break;
					}
				}
				$Vuracymdc0ja1iw4nknsm3garray['bcode'][$Vuracymdc0jal0q4noiexi4++] = array('t' => 1, 'w' => 1, 'h' => $Vuracymdc0javjxcwrp4tjq, 'p' => $V1yuhsvbtlvr);
				$Vuracymdc0ja1iw4nknsm3garray['bcode'][$Vuracymdc0jal0q4noiexi4++] = array('t' => 0, 'w' => 1, 'h' => 2, 'p' => 0);
				$Vuracymdc0ja1iw4nknsm3garray['maxw'] += 2;
			}
		}
		if ($Vi2wxxjgox4g) {
			
			$Vuracymdc0ja1iw4nknsm3garray['bcode'][$Vuracymdc0jal0q4noiexi4++] = array('t' => 1, 'w' => 1, 'h' => 3, 'p' => 0);
			$Vuracymdc0ja1iw4nknsm3garray['maxw'] += 1;
		}
		return $Vuracymdc0ja1iw4nknsm3garray;
	}

	
	protected function barcode_codabar($Vuracymdc0jau3hgjh1nrq0) {
		$Vuracymdc0jagtgjzfuu5iy = array(
			'0' => '11111221',
			'1' => '11112211',
			'2' => '11121121',
			'3' => '22111111',
			'4' => '11211211',
			'5' => '21111211',
			'6' => '12111121',
			'7' => '12112111',
			'8' => '12211111',
			'9' => '21121111',
			'-' => '11122111',
			'$' => '11221111',
			':' => '21112121',
			'/' => '21211121',
			'.' => '21212111',
			'+' => '11222221',
			'A' => '11221211',
			'B' => '12121121',
			'C' => '11121221',
			'D' => '11122211'
		);
		$Vuracymdc0ja1iw4nknsm3garray = array('code' => $Vuracymdc0jau3hgjh1nrq0, 'maxw' => 0, 'maxh' => 1, 'bcode' => array());
		$Vuracymdc0jal0q4noiexi4 = 0;
		$Vuracymdc0jaim12f51jw5r = 0;
		$Va0rrywcezym = '';
		$Vuracymdc0jau3hgjh1nrq0 = 'A'.strtoupper($Vuracymdc0jau3hgjh1nrq0).'A';
		$Vq2lrqstguwz = strlen($Vuracymdc0jau3hgjh1nrq0);
		for ($Vuracymdc0ja55vc4mewy5w = 0; $Vuracymdc0ja55vc4mewy5w < $Vq2lrqstguwz; ++$Vuracymdc0ja55vc4mewy5w) {
			if (!isset($Vuracymdc0jagtgjzfuu5iy[$Vuracymdc0jau3hgjh1nrq0{$Vuracymdc0ja55vc4mewy5w}])) {
				return false;
			}
			$Va0rrywcezym = $Vuracymdc0jagtgjzfuu5iy[$Vuracymdc0jau3hgjh1nrq0{$Vuracymdc0ja55vc4mewy5w}];
			for ($Vuracymdc0jauaufi3la1vg = 0; $Vuracymdc0jauaufi3la1vg < 8; ++$Vuracymdc0jauaufi3la1vg) {
				if (($Vuracymdc0jauaufi3la1vg % 2) == 0) {
					$Vuracymdc0janwufml5q3np = true; 
				} else {
					$Vuracymdc0janwufml5q3np = false; 
				}
				$Vuracymdc0jaim12f51jw5r = $Va0rrywcezym{$Vuracymdc0jauaufi3la1vg};
				$Vuracymdc0ja1iw4nknsm3garray['bcode'][$Vuracymdc0jal0q4noiexi4] = array('t' => $Vuracymdc0janwufml5q3np, 'w' => $Vuracymdc0jaim12f51jw5r, 'h' => 1, 'p' => 0);
				$Vuracymdc0ja1iw4nknsm3garray['maxw'] += $Vuracymdc0jaim12f51jw5r;
				++$Vuracymdc0jal0q4noiexi4;
			}
		}
		return $Vuracymdc0ja1iw4nknsm3garray;
	}

	
	protected function barcode_code11($Vuracymdc0jau3hgjh1nrq0) {
		$Vuracymdc0jagtgjzfuu5iy = array(
			'0' => '111121',
			'1' => '211121',
			'2' => '121121',
			'3' => '221111',
			'4' => '112121',
			'5' => '212111',
			'6' => '122111',
			'7' => '111221',
			'8' => '211211',
			'9' => '211111',
			'-' => '112111',
			'S' => '112211'
		);
		$Vuracymdc0ja1iw4nknsm3garray = array('code' => $Vuracymdc0jau3hgjh1nrq0, 'maxw' => 0, 'maxh' => 1, 'bcode' => array());
		$Vuracymdc0jal0q4noiexi4 = 0;
		$Vuracymdc0jaim12f51jw5r = 0;
		$Va0rrywcezym = '';
		$Vq2lrqstguwz = strlen($Vuracymdc0jau3hgjh1nrq0);
		
		$V1yuhsvbtlvr = 1;
		$V3t1eu5ajysx = 0;
		for ($Vuracymdc0ja55vc4mewy5w = ($Vq2lrqstguwz - 1); $Vuracymdc0ja55vc4mewy5w >= 0; --$Vuracymdc0ja55vc4mewy5w) {
			$Vlka1t5koioq = $Vuracymdc0jau3hgjh1nrq0{$Vuracymdc0ja55vc4mewy5w};
			if ($Vlka1t5koioq == '-') {
				$Vvzygft0vfln = 10;
			} else {
				$Vvzygft0vfln = intval($Vlka1t5koioq);
			}
			$V3t1eu5ajysx += ($Vvzygft0vfln * $V1yuhsvbtlvr);
			++$V1yuhsvbtlvr;
			if ($V1yuhsvbtlvr > 10) {
				$V1yuhsvbtlvr = 1;
			}
		}
		$V3t1eu5ajysx %= 11;
		if ($V3t1eu5ajysx == 10) {
			$V3t1eu5ajysx = '-';
		}
		$Vuracymdc0jau3hgjh1nrq0 .= $V3t1eu5ajysx;
		if ($Vq2lrqstguwz > 10) {
			
			$V1yuhsvbtlvr = 1;
			$V3t1eu5ajysx = 0;
			for ($Vuracymdc0ja55vc4mewy5w = $Vq2lrqstguwz; $Vuracymdc0ja55vc4mewy5w >= 0; --$Vuracymdc0ja55vc4mewy5w) {
				$Vlka1t5koioq = $Vuracymdc0jau3hgjh1nrq0{$Vuracymdc0ja55vc4mewy5w};
				if ($Vlka1t5koioq == '-') {
					$Vvzygft0vfln = 10;
				} else {
					$Vvzygft0vfln = intval($Vlka1t5koioq);
				}
				$V3t1eu5ajysx += ($Vvzygft0vfln * $V1yuhsvbtlvr);
				++$V1yuhsvbtlvr;
				if ($V1yuhsvbtlvr > 9) {
					$V1yuhsvbtlvr = 1;
				}
			}
			$V3t1eu5ajysx %= 11;
			$Vuracymdc0jau3hgjh1nrq0 .= $V3t1eu5ajysx;
			++$Vq2lrqstguwz;
		}
		$Vuracymdc0jau3hgjh1nrq0 = 'S'.$Vuracymdc0jau3hgjh1nrq0.'S';
		$Vq2lrqstguwz += 3;
		for ($Vuracymdc0ja55vc4mewy5w = 0; $Vuracymdc0ja55vc4mewy5w < $Vq2lrqstguwz; ++$Vuracymdc0ja55vc4mewy5w) {
			if (!isset($Vuracymdc0jagtgjzfuu5iy[$Vuracymdc0jau3hgjh1nrq0{$Vuracymdc0ja55vc4mewy5w}])) {
				return false;
			}
			$Va0rrywcezym = $Vuracymdc0jagtgjzfuu5iy[$Vuracymdc0jau3hgjh1nrq0{$Vuracymdc0ja55vc4mewy5w}];
			for ($Vuracymdc0jauaufi3la1vg = 0; $Vuracymdc0jauaufi3la1vg < 6; ++$Vuracymdc0jauaufi3la1vg) {
				if (($Vuracymdc0jauaufi3la1vg % 2) == 0) {
					$Vuracymdc0janwufml5q3np = true; 
				} else {
					$Vuracymdc0janwufml5q3np = false; 
				}
				$Vuracymdc0jaim12f51jw5r = $Va0rrywcezym{$Vuracymdc0jauaufi3la1vg};
				$Vuracymdc0ja1iw4nknsm3garray['bcode'][$Vuracymdc0jal0q4noiexi4] = array('t' => $Vuracymdc0janwufml5q3np, 'w' => $Vuracymdc0jaim12f51jw5r, 'h' => 1, 'p' => 0);
				$Vuracymdc0ja1iw4nknsm3garray['maxw'] += $Vuracymdc0jaim12f51jw5r;
				++$Vuracymdc0jal0q4noiexi4;
			}
		}
		return $Vuracymdc0ja1iw4nknsm3garray;
	}

	
	protected function barcode_pharmacode($Vuracymdc0jau3hgjh1nrq0) {
		$Va0rrywcezym = '';
		$Vuracymdc0jau3hgjh1nrq0 = intval($Vuracymdc0jau3hgjh1nrq0);
		while ($Vuracymdc0jau3hgjh1nrq0 > 0) {
			if (($Vuracymdc0jau3hgjh1nrq0 % 2) == 0) {
				$Va0rrywcezym .= '11100';
				$Vuracymdc0jau3hgjh1nrq0 -= 2;
			} else {
				$Va0rrywcezym .= '100';
				$Vuracymdc0jau3hgjh1nrq0 -= 1;
			}
			$Vuracymdc0jau3hgjh1nrq0 /= 2;
		}
		$Va0rrywcezym = substr($Va0rrywcezym, 0, -2);
		$Va0rrywcezym = strrev($Va0rrywcezym);
		$Vuracymdc0ja1iw4nknsm3garray = array('code' => $Vuracymdc0jau3hgjh1nrq0, 'maxw' => 0, 'maxh' => 1, 'bcode' => array());
		return $Vuracymdc0janwufml5q3nphis->binseq_to_array($Va0rrywcezym, $Vuracymdc0ja1iw4nknsm3garray);
	}

	
	protected function barcode_pharmacode2t($Vuracymdc0jau3hgjh1nrq0) {
		$Va0rrywcezym = '';
		$Vuracymdc0jau3hgjh1nrq0 = intval($Vuracymdc0jau3hgjh1nrq0);
		do {
			switch ($Vuracymdc0jau3hgjh1nrq0 % 3) {
				case 0: {
					$Va0rrywcezym .= '3';
					$Vuracymdc0jau3hgjh1nrq0 = ($Vuracymdc0jau3hgjh1nrq0 - 3) / 3;
					break;
				}
				case 1: {
					$Va0rrywcezym .= '1';
					$Vuracymdc0jau3hgjh1nrq0 = ($Vuracymdc0jau3hgjh1nrq0 - 1) / 3;
					break;
				}
				case 2: {
					$Va0rrywcezym .= '2';
					$Vuracymdc0jau3hgjh1nrq0 = ($Vuracymdc0jau3hgjh1nrq0 - 2) / 3;
					break;
				}
			}
		} while($Vuracymdc0jau3hgjh1nrq0 != 0);
		$Va0rrywcezym = strrev($Va0rrywcezym);
		$Vuracymdc0jal0q4noiexi4 = 0;
		$Vuracymdc0ja1iw4nknsm3garray = array('code' => $Vuracymdc0jau3hgjh1nrq0, 'maxw' => 0, 'maxh' => 2, 'bcode' => array());
		$Vq2lrqstguwz = strlen($Va0rrywcezym);
		for ($Vuracymdc0ja55vc4mewy5w = 0; $Vuracymdc0ja55vc4mewy5w < $Vq2lrqstguwz; ++$Vuracymdc0ja55vc4mewy5w) {
			switch ($Va0rrywcezym{$Vuracymdc0ja55vc4mewy5w}) {
				case '1': {
					$V1yuhsvbtlvr = 1;
					$Vuracymdc0javjxcwrp4tjq = 1;
					break;
				}
				case '2': {
					$V1yuhsvbtlvr = 0;
					$Vuracymdc0javjxcwrp4tjq = 1;
					break;
				}
				case '3': {
					$V1yuhsvbtlvr = 0;
					$Vuracymdc0javjxcwrp4tjq = 2;
					break;
				}
			}
			$Vuracymdc0ja1iw4nknsm3garray['bcode'][$Vuracymdc0jal0q4noiexi4++] = array('t' => 1, 'w' => 1, 'h' => $Vuracymdc0javjxcwrp4tjq, 'p' => $V1yuhsvbtlvr);
			$Vuracymdc0ja1iw4nknsm3garray['bcode'][$Vuracymdc0jal0q4noiexi4++] = array('t' => 0, 'w' => 1, 'h' => 2, 'p' => 0);
			$Vuracymdc0ja1iw4nknsm3garray['maxw'] += 2;
		}
		unset($Vuracymdc0ja1iw4nknsm3garray['bcode'][($Vuracymdc0jal0q4noiexi4 - 1)]);
		--$Vuracymdc0ja1iw4nknsm3garray['maxw'];
		return $Vuracymdc0ja1iw4nknsm3garray;
	}

	
	protected function barcode_imb($Vuracymdc0jau3hgjh1nrq0) {
		$Vgtsigwg3v4u = array(4,0,2,6,3,5,1,9,8,7,1,2,0,6,4,8,2,9,5,3,0,1,3,7,4,6,8,9,2,0,5,1,9,4,3,8,6,7,1,2,4,3,9,5,7,8,3,0,2,1,4,0,9,1,7,0,2,4,6,3,7,1,9,5,8);
		$Vswyidjawk4y = array(7,1,9,5,8,0,2,4,6,3,5,8,9,7,3,0,6,1,7,4,6,8,9,2,5,1,7,5,4,3,8,7,6,0,2,5,4,9,3,0,1,6,8,2,0,4,5,9,6,7,5,2,6,3,8,5,1,9,8,7,4,0,2,6,3);
		$Vbjizy3rzr3i = array(3,0,8,11,1,12,8,11,10,6,4,12,2,7,9,6,7,9,2,8,4,0,12,7,10,9,0,7,10,5,7,9,6,8,2,12,1,4,2,0,1,5,4,6,12,1,0,9,4,7,5,10,2,6,9,11,2,12,6,7,5,11,0,3,2);
		$Vamjdkm5rahm = array(2,10,12,5,9,1,5,4,3,9,11,5,10,1,6,3,4,1,10,0,2,11,8,6,1,12,3,8,6,4,4,11,0,6,1,9,11,5,3,7,3,10,7,11,8,2,10,3,5,8,0,3,12,11,8,4,5,1,3,0,7,12,9,8,10);
		$Vuracymdc0jau3hgjh1nrq0_arr = explode('-', $Vuracymdc0jau3hgjh1nrq0);
		$Vuracymdc0janwufml5q3npracking_number = $Vuracymdc0jau3hgjh1nrq0_arr[0];
		if (isset($Vuracymdc0jau3hgjh1nrq0_arr[1])) {
			$Vfhkt4vbeualouting_code = $Vuracymdc0jau3hgjh1nrq0_arr[1];
		} else {
			$Vfhkt4vbeualouting_code = '';
		}
		
		switch (strlen($Vfhkt4vbeualouting_code)) {
			case 0: {
				$Vxjb2p5kkhsh = 0;
				break;
			}
			case 5: {
				$Vxjb2p5kkhsh = bcadd($Vfhkt4vbeualouting_code, '1');
				break;
			}
			case 9: {
				$Vxjb2p5kkhsh = bcadd($Vfhkt4vbeualouting_code, '100001');
				break;
			}
			case 11: {
				$Vxjb2p5kkhsh = bcadd($Vfhkt4vbeualouting_code, '1000100001');
				break;
			}
			default: {
				return false;
				break;
			}
		}
		$Vxjb2p5kkhsh = bcmul($Vxjb2p5kkhsh, 10);
		$Vxjb2p5kkhsh = bcadd($Vxjb2p5kkhsh, $Vuracymdc0janwufml5q3npracking_number[0]);
		$Vxjb2p5kkhsh = bcmul($Vxjb2p5kkhsh, 5);
		$Vxjb2p5kkhsh = bcadd($Vxjb2p5kkhsh, $Vuracymdc0janwufml5q3npracking_number[1]);
		$Vxjb2p5kkhsh .= substr($Vuracymdc0janwufml5q3npracking_number, 2, 18);
		
		$Vxjb2p5kkhsh = $Vuracymdc0janwufml5q3nphis->dec_to_hex($Vxjb2p5kkhsh);
		
		$Vxjb2p5kkhsh = str_pad($Vxjb2p5kkhsh, 26, '0', STR_PAD_LEFT);
		
		$Vxjb2p5kkhsh_arr = chunk_split($Vxjb2p5kkhsh, 2, "\r");
		$Vxjb2p5kkhsh_arr = substr($Vxjb2p5kkhsh_arr, 0, -1);
		$Vxjb2p5kkhsh_arr = explode("\r", $Vxjb2p5kkhsh_arr);
		
		$Vh2hnbobgika = $Vuracymdc0janwufml5q3nphis->imb_crc11fcs($Vxjb2p5kkhsh_arr);
		
		$Vdzzym1entnt = sprintf('%2s', dechex((hexdec($Vxjb2p5kkhsh_arr[0]) << 2) >> 2));
		$Vxjb2p5kkhsh_102bit = $Vdzzym1entnt.substr($Vxjb2p5kkhsh, 2);
		
		$Vuracymdc0jau3hgjh1nrq0words = array();
		$Vuracymdc0jamfvrsd5xyqh = $Vuracymdc0janwufml5q3nphis->hex_to_dec($Vxjb2p5kkhsh_102bit);
		$Vuracymdc0jau3hgjh1nrq0words[0] = bcmod($Vuracymdc0jamfvrsd5xyqh, 636) * 2;
		$Vuracymdc0jamfvrsd5xyqh = bcdiv($Vuracymdc0jamfvrsd5xyqh, 636);
		for ($Vuracymdc0ja55vc4mewy5w = 1; $Vuracymdc0ja55vc4mewy5w < 9; ++$Vuracymdc0ja55vc4mewy5w) {
			$Vuracymdc0jau3hgjh1nrq0words[$Vuracymdc0ja55vc4mewy5w] = bcmod($Vuracymdc0jamfvrsd5xyqh, 1365);
			$Vuracymdc0jamfvrsd5xyqh = bcdiv($Vuracymdc0jamfvrsd5xyqh, 1365);
		}
		$Vuracymdc0jau3hgjh1nrq0words[9] = $Vuracymdc0jamfvrsd5xyqh;
		if (($Vh2hnbobgika >> 10) == 1) {
			$Vuracymdc0jau3hgjh1nrq0words[9] += 659;
		}
		
		$Vuracymdc0janwufml5q3npable2of13 = $Vuracymdc0janwufml5q3nphis->imb_tables(2, 78);
		$Vuracymdc0janwufml5q3npable5of13 = $Vuracymdc0janwufml5q3nphis->imb_tables(5, 1287);
		
		$Vuracymdc0jaq3d4zu0txr3acters = array();
		$V5gvywdmwtcu = 512;
		foreach($Vuracymdc0jau3hgjh1nrq0words as $Vuracymdc0jal0q4noiexi4 => $Vuracymdc0jaz0hmukhwa4zal) {
			if ($Vuracymdc0jaz0hmukhwa4zal <= 1286) {
				$Vuracymdc0jagtgjzfuu5iycode = $Vuracymdc0janwufml5q3npable5of13[$Vuracymdc0jaz0hmukhwa4zal];
			} else {
				$Vuracymdc0jagtgjzfuu5iycode = $Vuracymdc0janwufml5q3npable2of13[($Vuracymdc0jaz0hmukhwa4zal - 1287)];
			}
			if (($Vh2hnbobgika & $V5gvywdmwtcu) > 0) {
				
				$Vuracymdc0jagtgjzfuu5iycode = ((~$Vuracymdc0jagtgjzfuu5iycode) & 8191);
			}
			$Vuracymdc0jaq3d4zu0txr3acters[] = $Vuracymdc0jagtgjzfuu5iycode;
			$V5gvywdmwtcu /= 2;
		}
		$Vuracymdc0jaq3d4zu0txr3acters = array_reverse($Vuracymdc0jaq3d4zu0txr3acters);
		
		$Vuracymdc0jal0q4noiexi4 = 0;
		$Vuracymdc0ja1iw4nknsm3garray = array('code' => $Vuracymdc0jau3hgjh1nrq0, 'maxw' => 0, 'maxh' => 3, 'bcode' => array());
		for ($Vuracymdc0ja55vc4mewy5w = 0; $Vuracymdc0ja55vc4mewy5w < 65; ++$Vuracymdc0ja55vc4mewy5w) {
			$Vkucdbzyugak = (($Vuracymdc0jaq3d4zu0txr3acters[$Vgtsigwg3v4u[$Vuracymdc0ja55vc4mewy5w]] & pow(2, $Vbjizy3rzr3i[$Vuracymdc0ja55vc4mewy5w])) > 0);
			$Vrc2up4ufc0c = (($Vuracymdc0jaq3d4zu0txr3acters[$Vswyidjawk4y[$Vuracymdc0ja55vc4mewy5w]] & pow(2, $Vamjdkm5rahm[$Vuracymdc0ja55vc4mewy5w])) > 0);
			if ($Vkucdbzyugak AND $Vrc2up4ufc0c) {
				
				$V1yuhsvbtlvr = 0;
				$Vuracymdc0javjxcwrp4tjq = 3;
			} elseif ($Vkucdbzyugak) {
				
				$V1yuhsvbtlvr = 0;
				$Vuracymdc0javjxcwrp4tjq = 2;
			} elseif ($Vrc2up4ufc0c) {
				
				$V1yuhsvbtlvr = 1;
				$Vuracymdc0javjxcwrp4tjq = 2;
			} else {
				
				$V1yuhsvbtlvr = 1;
				$Vuracymdc0javjxcwrp4tjq = 1;
			}
			$Vuracymdc0ja1iw4nknsm3garray['bcode'][$Vuracymdc0jal0q4noiexi4++] = array('t' => 1, 'w' => 1, 'h' => $Vuracymdc0javjxcwrp4tjq, 'p' => $V1yuhsvbtlvr);
			$Vuracymdc0ja1iw4nknsm3garray['bcode'][$Vuracymdc0jal0q4noiexi4++] = array('t' => 0, 'w' => 1, 'h' => 2, 'p' => 0);
			$Vuracymdc0ja1iw4nknsm3garray['maxw'] += 2;
		}
		unset($Vuracymdc0ja1iw4nknsm3garray['bcode'][($Vuracymdc0jal0q4noiexi4 - 1)]);
		--$Vuracymdc0ja1iw4nknsm3garray['maxw'];
		return $Vuracymdc0ja1iw4nknsm3garray;
	}

	
	protected function barcode_imb_pre($Vuracymdc0jau3hgjh1nrq0) {
		if (!preg_match('/^[fadtFADT]{65}$/', $Vuracymdc0jau3hgjh1nrq0) == 1) {
			return false;
		}
		$Vuracymdc0jaq3d4zu0txr3acters = str_split(strtolower($Vuracymdc0jau3hgjh1nrq0), 1);
		
		$Vuracymdc0jal0q4noiexi4 = 0;
		$Vuracymdc0ja1iw4nknsm3garray = array('code' => $Vuracymdc0jau3hgjh1nrq0, 'maxw' => 0, 'maxh' => 3, 'bcode' => array());
		for ($Vuracymdc0ja55vc4mewy5w = 0; $Vuracymdc0ja55vc4mewy5w < 65; ++$Vuracymdc0ja55vc4mewy5w) {
			switch($Vuracymdc0jaq3d4zu0txr3acters[$Vuracymdc0ja55vc4mewy5w]) {
				case 'f': {
					
					$V1yuhsvbtlvr = 0;
					$Vuracymdc0javjxcwrp4tjq = 3;
					break;
				}
				case 'a': {
					
					$V1yuhsvbtlvr = 0;
					$Vuracymdc0javjxcwrp4tjq = 2;
					break;
				}
				case 'd': {
					
					$V1yuhsvbtlvr = 1;
					$Vuracymdc0javjxcwrp4tjq = 2;
					break;
				}
				case 't': {
					
					$V1yuhsvbtlvr = 1;
					$Vuracymdc0javjxcwrp4tjq = 1;
					break;
				}
			}
			$Vuracymdc0ja1iw4nknsm3garray['bcode'][$Vuracymdc0jal0q4noiexi4++] = array('t' => 1, 'w' => 1, 'h' => $Vuracymdc0javjxcwrp4tjq, 'p' => $V1yuhsvbtlvr);
			$Vuracymdc0ja1iw4nknsm3garray['bcode'][$Vuracymdc0jal0q4noiexi4++] = array('t' => 0, 'w' => 1, 'h' => 2, 'p' => 0);
			$Vuracymdc0ja1iw4nknsm3garray['maxw'] += 2;
		}
		unset($Vuracymdc0ja1iw4nknsm3garray['bcode'][($Vuracymdc0jal0q4noiexi4 - 1)]);
		--$Vuracymdc0ja1iw4nknsm3garray['maxw'];
		return $Vuracymdc0ja1iw4nknsm3garray;
	}

	
	public function dec_to_hex($Vnfvqy5vi3yz) {
		$Vuracymdc0ja55vc4mewy5w = 0;
		$Vuracymdc0javjxcwrp4tjqex = array();
		if($Vnfvqy5vi3yz == 0) {
			return '00';
		}
		while($Vnfvqy5vi3yz > 0) {
			if($Vnfvqy5vi3yz == 0) {
				array_push($Vuracymdc0javjxcwrp4tjqex, '0');
			} else {
				array_push($Vuracymdc0javjxcwrp4tjqex, strtoupper(dechex(bcmod($Vnfvqy5vi3yz, '16'))));
				$Vnfvqy5vi3yz = bcdiv($Vnfvqy5vi3yz, '16', 0);
			}
		}
		$Vuracymdc0javjxcwrp4tjqex = array_reverse($Vuracymdc0javjxcwrp4tjqex);
		return implode($Vuracymdc0javjxcwrp4tjqex);
	}

	
	public function hex_to_dec($Vuracymdc0javjxcwrp4tjqex) {
		$Vaac1la1kpdy = 0;
		$Vcz1bkiw4u5s = 1;
		$Vq2lrqstguwz = strlen($Vuracymdc0javjxcwrp4tjqex);
		for($V1yuhsvbtlvros = ($Vq2lrqstguwz - 1); $V1yuhsvbtlvros >= 0; --$V1yuhsvbtlvros) {
			$Vaac1la1kpdy = bcadd($Vaac1la1kpdy, bcmul(hexdec($Vuracymdc0javjxcwrp4tjqex{$V1yuhsvbtlvros}), $Vcz1bkiw4u5s));
			$Vcz1bkiw4u5s = bcmul($Vcz1bkiw4u5s, 16);
		}
		return $Vaac1la1kpdy;
	}

	
	protected function imb_crc11fcs($Vuracymdc0jau3hgjh1nrq0_arr) {
		$Vv1cwcjziikn = 0x0F35; 
		$Vh2hnbobgika = 0x07FF; 
		
		$Vuracymdc0jamfvrsd5xyqh = hexdec($Vuracymdc0jau3hgjh1nrq0_arr[0]) << 5;
		for ($V5z5dbszdqxd = 2; $V5z5dbszdqxd < 8; ++$V5z5dbszdqxd) {
			if (($Vh2hnbobgika ^ $Vuracymdc0jamfvrsd5xyqh) & 0x400) {
				$Vh2hnbobgika = ($Vh2hnbobgika << 1) ^ $Vv1cwcjziikn;
			} else {
				$Vh2hnbobgika = ($Vh2hnbobgika << 1);
			}
			$Vh2hnbobgika &= 0x7FF;
			$Vuracymdc0jamfvrsd5xyqh <<= 1;
		}
		
		for ($V4wogxbjjq5y = 1; $V4wogxbjjq5y < 13; ++$V4wogxbjjq5y) {
			$Vuracymdc0jamfvrsd5xyqh = hexdec($Vuracymdc0jau3hgjh1nrq0_arr[$V4wogxbjjq5y]) << 3;
			for ($V5z5dbszdqxd = 0; $V5z5dbszdqxd < 8; ++$V5z5dbszdqxd) {
				if (($Vh2hnbobgika ^ $Vuracymdc0jamfvrsd5xyqh) & 0x400) {
					$Vh2hnbobgika = ($Vh2hnbobgika << 1) ^ $Vv1cwcjziikn;
				} else {
					$Vh2hnbobgika = ($Vh2hnbobgika << 1);
				}
				$Vh2hnbobgika &= 0x7FF;
				$Vuracymdc0jamfvrsd5xyqh <<= 1;
			}
		}
		return $Vh2hnbobgika;
	}

	
	protected function imb_reverse_us($Vqpyayj40vjr) {
		$Vfhkt4vbeualev = 0;
		for ($Vuracymdc0ja55vc4mewy5w = 0; $Vuracymdc0ja55vc4mewy5w < 16; ++$Vuracymdc0ja55vc4mewy5w) {
			$Vfhkt4vbeualev <<= 1;
			$Vfhkt4vbeualev |= ($Vqpyayj40vjr & 1);
			$Vqpyayj40vjr >>= 1;
		}
		return $Vfhkt4vbeualev;
	}

	
	protected function imb_tables($Vgv45dfhsyuh, $Vvt20qqut4buize) {
		$Vuracymdc0janwufml5q3npable = array();
		$V03emxcq4adq = 0; 
		$Vnlwwro2smep = $Vvt20qqut4buize - 1; 
		for ($Vwcmlurixvzgount = 0; $Vwcmlurixvzgount < 8192; ++$Vwcmlurixvzgount) {
			$V5z5dbszdqxd_count = 0;
			for ($V5z5dbszdqxd_index = 0; $V5z5dbszdqxd_index < 13; ++$V5z5dbszdqxd_index) {
				$V5z5dbszdqxd_count += intval(($Vwcmlurixvzgount & (1 << $V5z5dbszdqxd_index)) != 0);
			}
			
			if ($V5z5dbszdqxd_count == $Vgv45dfhsyuh) {
				$Vfhkt4vbeualeverse = ($Vuracymdc0janwufml5q3nphis->imb_reverse_us($Vwcmlurixvzgount) >> 3);
				
				if ($Vfhkt4vbeualeverse >= $Vwcmlurixvzgount) {
					
					
					if ($Vfhkt4vbeualeverse == $Vwcmlurixvzgount) {
						$Vuracymdc0janwufml5q3npable[$Vnlwwro2smep] = $Vwcmlurixvzgount;
						--$Vnlwwro2smep;
					} else {
						$Vuracymdc0janwufml5q3npable[$V03emxcq4adq] = $Vwcmlurixvzgount;
						++$V03emxcq4adq;
						$Vuracymdc0janwufml5q3npable[$V03emxcq4adq] = $Vfhkt4vbeualeverse;
						++$V03emxcq4adq;
					}
				}
			}
		}
		return $Vuracymdc0janwufml5q3npable;
	}

} 



