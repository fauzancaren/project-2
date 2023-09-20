<?php





































if ((!isset($_SERVER['DOCUMENT_ROOT'])) OR (empty($_SERVER['DOCUMENT_ROOT']))) {
	if(isset($_SERVER['SCRIPT_FILENAME'])) {
		$_SERVER['DOCUMENT_ROOT'] = str_replace( '\\', '/', substr($_SERVER['SCRIPT_FILENAME'], 0, 0-strlen($_SERVER['PHP_SELF'])));
	} elseif(isset($_SERVER['PATH_TRANSLATED'])) {
		$_SERVER['DOCUMENT_ROOT'] = str_replace( '\\', '/', substr(str_replace('\\\\', '\\', $_SERVER['PATH_TRANSLATED']), 0, 0-strlen($_SERVER['PHP_SELF'])));
	} else {
		
		$_SERVER['DOCUMENT_ROOT'] = '/';
	}
}
$_SERVER['DOCUMENT_ROOT'] = str_replace('//', '/', $_SERVER['DOCUMENT_ROOT']);
if (substr($_SERVER['DOCUMENT_ROOT'], -1) != '/') {
	$_SERVER['DOCUMENT_ROOT'] .= '/';
}


if (!defined('K_TCPDF_EXTERNAL_CONFIG') OR !K_TCPDF_EXTERNAL_CONFIG) {
	
	$Vbxxj3rso20m = array(dirname(__FILE__).'/config/tcpdf_config.php', '/etc/php-tcpdf/tcpdf_config.php', '/etc/tcpdf/tcpdf_config.php', '/etc/tcpdf_config.php');
	foreach ($Vbxxj3rso20m as $Vxn2ace5wzpd) {
		if (@file_exists($Vxn2ace5wzpd) AND is_readable($Vxn2ace5wzpd)) {
			require_once($Vxn2ace5wzpd);
			break;
		}
	}
}

if (!defined('K_PATH_MAIN')) {
	define ('K_PATH_MAIN', dirname(__FILE__).'/');
}

if (!defined('K_PATH_FONTS')) {
	define ('K_PATH_FONTS', K_PATH_MAIN.'fonts/');
}

if (!defined('K_PATH_URL')) {
	$V1gds4eipgwd = K_PATH_MAIN; 
	if (isset($_SERVER['HTTP_HOST']) AND (!empty($_SERVER['HTTP_HOST']))) {
		if(isset($_SERVER['HTTPS']) AND (!empty($_SERVER['HTTPS'])) AND (strtolower($_SERVER['HTTPS']) != 'off')) {
			$V1gds4eipgwd = 'https://';
		} else {
			$V1gds4eipgwd = 'http://';
		}
		$V1gds4eipgwd .= $_SERVER['HTTP_HOST'];
		$V1gds4eipgwd .= str_replace( '\\', '/', substr(K_PATH_MAIN, (strlen($_SERVER['DOCUMENT_ROOT']) - 1)));
	}
	define ('K_PATH_URL', $V1gds4eipgwd);
}

if (!defined('K_PATH_IMAGES')) {
	$Vv0mjahi3hl2 = array(K_PATH_MAIN.'examples/images/', K_PATH_MAIN.'images/', '/usr/share/doc/php-tcpdf/examples/images/', '/usr/share/doc/tcpdf/examples/images/', '/usr/share/doc/php/tcpdf/examples/images/', '/var/www/tcpdf/images/', '/var/www/html/tcpdf/images/', '/usr/local/apache2/htdocs/tcpdf/images/', K_PATH_MAIN);
	foreach ($Vv0mjahi3hl2 as $Vcm3grbbpk23) {
		if (@file_exists($Vcm3grbbpk23)) {
			define ('K_PATH_IMAGES', $Vcm3grbbpk23);
			break;
		}
	}
}

if (!defined('PDF_HEADER_LOGO')) {
	$Vix4e24xjulo = '';
	if (@file_exists(K_PATH_IMAGES.'tcpdf_logo.jpg')) {
		$Vix4e24xjulo = 'tcpdf_logo.jpg';
	}
	define ('PDF_HEADER_LOGO', $Vix4e24xjulo);
}

if (!defined('PDF_HEADER_LOGO_WIDTH')) {
	if (!empty($Vix4e24xjulo)) {
		define ('PDF_HEADER_LOGO_WIDTH', 30);
	} else {
		define ('PDF_HEADER_LOGO_WIDTH', 0);
	}
}

if (!defined('K_PATH_CACHE')) {
	$Vmotim0wfewo = ini_get('upload_tmp_dir') ? ini_get('upload_tmp_dir') : sys_get_temp_dir();
	if (substr($Vmotim0wfewo, -1) != '/') {
		$Vmotim0wfewo .= '/';
	}
	define ('K_PATH_CACHE', $Vmotim0wfewo);
}

if (!defined('K_BLANK_IMAGE')) {
	define ('K_BLANK_IMAGE', '_blank.png');
}

if (!defined('PDF_PAGE_FORMAT')) {
	define ('PDF_PAGE_FORMAT', 'A4');
}

if (!defined('PDF_PAGE_ORIENTATION')) {
	define ('PDF_PAGE_ORIENTATION', 'P');
}

if (!defined('PDF_CREATOR')) {
	define ('PDF_CREATOR', 'TCPDF');
}

if (!defined('PDF_AUTHOR')) {
	define ('PDF_AUTHOR', 'TCPDF');
}

if (!defined('PDF_HEADER_TITLE')) {
	define ('PDF_HEADER_TITLE', 'TCPDF Example');
}

if (!defined('PDF_HEADER_STRING')) {
	define ('PDF_HEADER_STRING', "by Nicola Asuni - Tecnick.com\nwww.tcpdf.org");
}

if (!defined('PDF_UNIT')) {
	define ('PDF_UNIT', 'mm');
}

if (!defined('PDF_MARGIN_HEADER')) {
	define ('PDF_MARGIN_HEADER', 5);
}

if (!defined('PDF_MARGIN_FOOTER')) {
	define ('PDF_MARGIN_FOOTER', 10);
}

if (!defined('PDF_MARGIN_TOP')) {
	define ('PDF_MARGIN_TOP', 27);
}

if (!defined('PDF_MARGIN_BOTTOM')) {
	define ('PDF_MARGIN_BOTTOM', 25);
}

if (!defined('PDF_MARGIN_LEFT')) {
	define ('PDF_MARGIN_LEFT', 15);
}

if (!defined('PDF_MARGIN_RIGHT')) {
	define ('PDF_MARGIN_RIGHT', 15);
}

if (!defined('PDF_FONT_NAME_MAIN')) {
	define ('PDF_FONT_NAME_MAIN', 'helvetica');
}

if (!defined('PDF_FONT_SIZE_MAIN')) {
	define ('PDF_FONT_SIZE_MAIN', 10);
}

if (!defined('PDF_FONT_NAME_DATA')) {
	define ('PDF_FONT_NAME_DATA', 'helvetica');
}

if (!defined('PDF_FONT_SIZE_DATA')) {
	define ('PDF_FONT_SIZE_DATA', 8);
}

if (!defined('PDF_FONT_MONOSPACED')) {
	define ('PDF_FONT_MONOSPACED', 'courier');
}

if (!defined('PDF_IMAGE_SCALE_RATIO')) {
	define ('PDF_IMAGE_SCALE_RATIO', 1.25);
}

if (!defined('HEAD_MAGNIFICATION')) {
	define('HEAD_MAGNIFICATION', 1.1);
}

if (!defined('K_CELL_HEIGHT_RATIO')) {
	define('K_CELL_HEIGHT_RATIO', 1.25);
}

if (!defined('K_TITLE_MAGNIFICATION')) {
	define('K_TITLE_MAGNIFICATION', 1.3);
}

if (!defined('K_SMALL_RATIO')) {
	define('K_SMALL_RATIO', 2/3);
}

if (!defined('K_THAI_TOPCHARS')) {
	define('K_THAI_TOPCHARS', true);
}

if (!defined('K_TCPDF_CALLS_IN_HTML')) {
	define('K_TCPDF_CALLS_IN_HTML', false);
}

if (!defined('K_TCPDF_THROW_EXCEPTION_ERROR')) {
	define('K_TCPDF_THROW_EXCEPTION_ERROR', false);
}

if (!defined('K_TIMEZONE')) {
	define('K_TIMEZONE', @date_default_timezone_get());
}




