#!/usr/bin/php -q
<?php




































if (php_sapi_name() != 'cli') {
  echo 'You need to run this command from console.';
  exit(1);
}

$Vttrwxblxcte = array(realpath(dirname(__FILE__).'/../tcpdf.php'), '/usr/share/php/tcpdf/tcpdf.php', '/usr/share/tcpdf/tcpdf.php', '/usr/share/php-tcpdf/tcpdf.php', '/var/www/tcpdf/tcpdf.php', '/var/www/html/tcpdf/tcpdf.php', '/usr/local/apache2/htdocs/tcpdf/tcpdf.php');
foreach ($Vttrwxblxcte as $Vtzzke54xxma) {
	if (@file_exists($Vtzzke54xxma)) {
		require_once($Vtzzke54xxma);
		break;
	}
}


function showHelp() {
	$Vgwttsu2e2dj = <<<EOD
tcpdf_addfont - command line tool to convert fonts for the TCPDF library.

Usage: tcpdf_addfont.php [ options ] -i fontfile[,fontfile]...

Options:

	-t
	--type      Font type. Leave empty for autodetect mode.
	            Valid values are:
					TrueTypeUnicode
					TrueType
					Type1
					CID0JP = CID-0 Japanese
					CID0KR = CID-0 Korean
					CID0CS = CID-0 Chinese Simplified
					CID0CT = CID-0 Chinese Traditional

	-e
	--enc       Name of the encoding table to use. Leave empty for
	            default mode. Omit this parameter for TrueType Unicode
	            and symbolic fonts like Symbol or ZapfDingBats.

	-f
	--flags     Unsigned 32-bit integer containing flags specifying
	            various characteristics of the font (PDF32000:2008 -
	            9.8.2 Font Descriptor Flags): +1 for fixed font; +4 for
	            symbol or +32 for non-symbol; +64 for italic. Fixed and
	            Italic mode are generally autodetected so you have to
	            set it to 32 = non-symbolic font (default) or 4 =
	            symbolic font.

	-o
	--outpath   Output path for generated font files (must be writeable
	            by the web server). Leave empty for default font folder.

	-p
	--platid    Platform ID for CMAP table to extract (when building a
	            Unicode font for Windows this value should be 3, for
	            Macintosh should be 1).

	-n
	--encid     Encoding ID for CMAP table to extract (when building a
	            Unicode font for Windows this value should be 1, for
	            Macintosh should be 0). When Platform ID is 3, legal
	            values for Encoding ID are: 0=Symbol, 1=Unicode,
	            2=ShiftJIS, 3=PRC, 4=Big5, 5=Wansung, 6=Johab,
	            7=Reserved, 8=Reserved, 9=Reserved, 10=UCS-4.

	-b
	--addcbbox  Includes the character bounding box information on the
	            php font file.

	-l
	--link      Link to system font instead of copying the font data #
	            (not transportable) - Note: do not work with Type1 fonts.

	-i
	--fonts     Comma-separated list of input font files.

	-h
	--help      Display this help and exit.
EOD;
	echo $Vgwttsu2e2dj."\n\n";
	exit(0);
}


array_shift($argv);


if (!is_array($argv)) {
  showHelp();
}


$Vpnrzfzukq2l = array('type'=>'', 'enc'=>'', 'flags'=>32, 'outpath'=>K_PATH_FONTS, 'platid'=>3, 'encid'=>1, 'addcbbox'=>false, 'link'=>false);


$Vpyabcakgylu = '';
$Vpyabcakgylu .= 't:';
$Vpyabcakgylu .= 'e:';
$Vpyabcakgylu .= 'f:';
$Vpyabcakgylu .= 'o:';
$Vpyabcakgylu .= 'p:';
$Vpyabcakgylu .= 'n:';
$Vpyabcakgylu .= 'b';
$Vpyabcakgylu .= 'l';
$Vpyabcakgylu .= 'i:';
$Vpyabcakgylu .= 'h';


$Vuw2notrlcqc = array();
$Vuw2notrlcqc[] = 'type:';
$Vuw2notrlcqc[] = 'enc:';
$Vuw2notrlcqc[] = 'flags:';
$Vuw2notrlcqc[] = 'outpath:';
$Vuw2notrlcqc[] = 'platid:';
$Vuw2notrlcqc[] = 'encid:';
$Vuw2notrlcqc[] = 'addcbbox';
$Vuw2notrlcqc[] = 'link';
$Vuw2notrlcqc[] = 'fonts:';
$Vuw2notrlcqc[] = 'help';


$Vbuzjoo0plfi = getopt($Vpyabcakgylu, $Vuw2notrlcqc);


foreach ($Vbuzjoo0plfi as $Vybdom4h5ylw => $Vxt4wx3pvtez) {
	switch ($Vybdom4h5ylw) {
		case 't':
		case 'type': {
			if (in_array($Vxt4wx3pvtez, array('TrueTypeUnicode', 'TrueType', 'Type1', 'CID0JP', 'CID0KR', 'CID0CS', 'CID0CT'))) {
				$Vpnrzfzukq2l['type'] = $Vxt4wx3pvtez;
			}
			break;
		}
		case 'e':
		case 'enc': {
			$Vpnrzfzukq2l['enc'] = $Vxt4wx3pvtez;
			break;
		}
		case 'f':
		case 'flags': {
			$Vpnrzfzukq2l['flags'] = intval($Vxt4wx3pvtez);
			break;
		}
		case 'o':
		case 'outpath': {
			$Vpnrzfzukq2l['outpath'] = realpath($Vxt4wx3pvtez);
			if (substr($Vpnrzfzukq2l['outpath'], -1) != '/') {
				$Vpnrzfzukq2l['outpath'] .= '/';
			}
			break;
		}
		case 'p':
		case 'platid': {
			$Vpnrzfzukq2l['platid'] = min(max(1, intval($Vxt4wx3pvtez)), 3);
			break;
		}
		case 'n':
		case 'encid': {
			$Vpnrzfzukq2l['encid'] = min(max(0, intval($Vxt4wx3pvtez)), 10);
			break;
		}
		case 'b':
		case 'addcbbox': {
			$Vpnrzfzukq2l['addcbbox'] = true;
			break;
		}
		case 'l':
		case 'link': {
			$Vpnrzfzukq2l['link'] = true;
			break;
		}
		case 'i':
		case 'fonts': {
			$Vpnrzfzukq2l['fonts'] = explode(',', $Vxt4wx3pvtez);
			break;
		}
		case 'h':
		case 'help':
		default: {
			showHelp();
			break;
		}
	} 
} 

if (empty($Vpnrzfzukq2l['fonts'])) {
	echo "ERROR: missing input fonts (try --help for usage)\n\n";
	exit(2);
}


if (!is_dir($Vpnrzfzukq2l['outpath']) OR !is_writable($Vpnrzfzukq2l['outpath'])) {
	echo "ERROR: Can't write to ".$Vpnrzfzukq2l['outpath']."\n\n";
	exit(3);
}

echo "\n>>> Converting fonts for TCPDF:\n";

echo '*** Output dir set to '.$Vpnrzfzukq2l['outpath']."\n";


$Vpkf5z2jgnkq = false;

foreach ($Vpnrzfzukq2l['fonts'] as $Voc1qigl3k5y) {
	$Voc1qigl3k5yfile = realpath($Voc1qigl3k5y);
	$Voc1qigl3k5yname = TCPDF_FONTS::addTTFfont($Voc1qigl3k5yfile, $Vpnrzfzukq2l['type'], $Vpnrzfzukq2l['enc'], $Vpnrzfzukq2l['flags'], $Vpnrzfzukq2l['outpath'], $Vpnrzfzukq2l['platid'], $Vpnrzfzukq2l['encid'], $Vpnrzfzukq2l['addcbbox'], $Vpnrzfzukq2l['link']);
	if ($Voc1qigl3k5yname === false) {
		$Vpkf5z2jgnkq = true;
		echo "--- ERROR: can't add ".$Voc1qigl3k5y."\n";
	} else {
		echo "+++ OK   : ".$Voc1qigl3k5yfile.' added as '.$Voc1qigl3k5yname."\n";
	}
}

if ($Vpkf5z2jgnkq) {
	echo "--- Process completed with ERRORS!\n\n";
	exit(4);
}

echo ">>> Process successfully completed!\n\n";
exit(0);




