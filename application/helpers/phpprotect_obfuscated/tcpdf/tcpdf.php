<?php







































































require_once(dirname(__FILE__).'/tcpdf_autoconfig.php');

require_once(dirname(__FILE__).'/include/tcpdf_font_data.php');

require_once(dirname(__FILE__).'/include/tcpdf_fonts.php');

require_once(dirname(__FILE__).'/include/tcpdf_colors.php');

require_once(dirname(__FILE__).'/include/tcpdf_images.php');

require_once(dirname(__FILE__).'/include/tcpdf_static.php');




class TCPDF {

	

	
	protected $Vwfolue42pzj;

	
	protected $Vgv45dfhsyuh;

	
	protected $Vaoucjoirsd1 = array();

	
	protected $Vwfolue42pzjobjects = array();

	
	protected $Vc3qkc3xq4g1;

	
	protected $Vwfolue42pzjs = array();

	
	protected $V4y2qsasqhho;

	
	protected $Vztblmzto2am;

	
	protected $Vf5ohidhcbkj;

	
	protected $Vwfolue42pzjdim = array();

	
	protected $Vl0q4noiexi4;

	
	protected $Vrvasqduef3c;

	
	protected $V5ji3vqxuvtu;

	
	protected $Vqemhptejgpt;

	
	protected $V1s0lmhwm50p;

	
	protected $Vim12f51jw5r;

	
	protected $Vvjxcwrp4tjq;

	
	protected $Vkj01umjxzxo;

	
	protected $Vhlbdzuqw1fu;

	
	protected $Vr5rncy4aigb;

	
	protected $Vibwlefmgtpo;

	
	protected $V1kpx5bzsp3d;

	
	protected $Voujdu0cissn;

	
	protected $Vrhdnjsu25aw = array('T' => 0, 'R' => 0, 'B' => 0, 'L' => 0);

	
	protected $Vma3jkpki3ic = array('T' => 0, 'R' => 0, 'B' => 0, 'L' => 0);

	
	protected $Vangwoo3ejfg;

	
	protected $Vgxufordoa4t;

	
	protected $Vafaqck21bmy;

	
	protected $Vetv5nyo4tal;

	
	protected $V4jyn3lvhkta;

	
	protected $Vshfhqyg5vyr = array();

	
	protected $Vgr0wbwgzavt = array();

	
	protected $V43ns2nu1uku = array();

	
	protected $Vjbnh5xvpgkv = array();

	
	protected $Ve2czfnc5v1a = 0;

	
	protected $Vcybtyrszlmr = array();

	
	protected $Vysrd1gdpasl = array();

	
	protected $Vukt0dp5pgan;

	
	protected $V4dzlxwlmdnw;

	
	protected $Vrcjnrq4zfnw;

	
	protected $Vhzcgdegeo5j;

	
	protected $V2k1l44ydjpc;

	
	protected $Vqxxycrhflth;

	
	protected $Vaihp5begme5;

	
	protected $Vbwbfax3okmk;

	
	protected $Vy1nacosc1e0;

	
	protected $Vtyombladyci;

	
	protected $Vukcg1s300vi;

	
	protected $V0styntdkm5d;

	
	protected $Vjukhe2myz0k;

	
	protected $Vcd4jyv1k4xy;

	
	protected $Vvjavipqlwz2;

	
	protected $Vl4rflzz5t1r = false;

	
	protected $V3srwhuv3d0o = false;

	
	protected $V2rfqtzbxa3a;

	
	protected $V0y0kiozhfhr;

	
	protected $Vdtahhdl2dc1 = true;

	
	protected $V3awurwxucbv = '';

	
	protected $Vykuui0y4ery = '';

	
	protected $Vdl4xnykfb4s = '';

	
	protected $Vl0q4noiexi4eywords = '';

	
	protected $V2fqqxmyazqg = '';

	
	protected $Ve30tudecrlb = 1;

	
	protected $Vqnzgahacjtc;

	
	protected $Vxfrxoocmyrp;

	
	protected $Vsuo5m4a0bte = 1;

	
	protected $Vc4dwnhwa0ar = false;

	
	protected $Vlcoilkod5hu = '1.7';

	
	protected $Vvjxcwrp4tjqeader_xobjid = false;

	
	protected $Vvjxcwrp4tjqeader_xobj_autoreset = false;

	
	protected $Vvjxcwrp4tjqeader_margin;

	
	protected $Vvsycynic3qu;

	
	protected $Vaqwsrsmkfrf;

	
	protected $Vzs40mkgk2qo;

	
	protected $Vvjxcwrp4tjqeader_font;

	
	protected $V444uuzoybxj;

	
	protected $Vx3g4ytafo1a;

	
	protected $Votyidhr1bs1 = false;

	
	protected $Vzkt4sds0p2t = true;

	
	protected $Vcsgogshce22 = true;

	
	protected $Vvjxcwrp4tjqeader_logo = '';

	
	protected $Vvjxcwrp4tjqeader_logo_width = 30;

	
	protected $Vvjxcwrp4tjqeader_title = '';

	
	protected $Vvjxcwrp4tjqeader_string = '';

	
	protected $Vvjxcwrp4tjqeader_text_color = array(0,0,0);

	
	protected $Vvjxcwrp4tjqeader_line_color = array(0,0,0);

	
	protected $V3ycq3m0c25b = array(0,0,0);

	
	protected $V3ipta0qrpsb = array(0,0,0);

	
	protected $Vajizgiap212 = array('enabled'=>false, 'depth_w'=>0, 'depth_h'=>0, 'color'=>false, 'opacity'=>1, 'blend_mode'=>'Normal');

	
	protected $V5bf2cdoyz2d = 4;

	

	
	protected $V5ygai0j3pbz = array();

	
	protected $Vcxlwntacl5t = array();

	
	protected $Veo4qr3u3my3;

	
	protected $Vx3g4ytafo1aistordered = array();

	
	protected $Vx3g4ytafo1aistcount = array();

	
	protected $Vx3g4ytafo1aistnum = 0;

	
	protected $Vx3g4ytafo1aistindent = 0;

	
	protected $Vx3g4ytafo1aistindentlevel = 0;

	
	protected $V2mdukkkppvh;

	
	protected $Vpafhyyrvkut = 10;

	
	protected $Vx3g4ytafo1aispacer = '';

	
	protected $V1qocqyz1qfy = 'UTF-8';

	
	protected $Vxjviuanphv1;

	
	protected $V5shjmx03fxy = false;

	
	protected $Vxlsz03qna0d = false;

	

	
	protected $Vsjwl3jfwhow;

	
	protected $Vbvrjpi3fxld = array();

	
	protected $Vx3g4ytafo1aast_enc_key;

	
	protected $Vx3g4ytafo1aast_enc_key_c;

	
	protected $V4xjt304c50w;

	

	
	protected $Vca4igqngi22 = array();

	
	protected $Vr1qrgbd2zgh;

	

	
	protected $Vmsgqq3wgtu0 = '';

	
	protected $Vgv45dfhsyuh_js;

	
	protected $Vx3g4ytafo1ainethrough;

	
	protected $Veeideczj0pn = array();

	
	protected $Vjq4dwsotjk3 = 72;

	
	protected $Vgv45dfhsyuhewpagegroup = array();

	
	protected $Vwfolue42pzjgroups = array();

	
	protected $Vv53an1lssgy = 0;

	
	protected $Vmmhulgeutx2;

	
	protected $Vaoqpzamrrmv;

	
	protected $V4o4xz02qala = K_CELL_HEIGHT_RATIO;

	
	protected $Vpf0vxl20wfk;

	
	protected $Vmgr1ltndfd5;

	
	protected $Vfrkhwykxx3r = array();

	
	protected $Vdpd3dtbfcvq = array();

	
	protected $Vgsp30o2bxt2 = array();

	
	protected $Vouojwrswzxn = array();

	
	protected $Vdmarskulcdt = array();

	
	protected $Vzez02rimoiq = array();

	
	protected $Vejgtknskgqc = array();

	
	protected $Vgv45dfhsyuhewline = true;

	
	protected $Vuvhi5osdxxj = 0;

	
	protected $Vx3g4ytafo1ainestyleWidth = '';

	
	protected $Vx3g4ytafo1ainestyleCap = '0 J';

	
	protected $Vx3g4ytafo1ainestyleJoin = '0 j';

	
	protected $Vx3g4ytafo1ainestyleDash = '[] 0 d';

	
	protected $V0fecjeaqzbq = false;

	
	protected $Vvjxcwrp4tjqtmlvspace = 0;

	
	protected $Viol0aoa2uzl = array();

	
	protected $Vx3g4ytafo1aisymbol = '';

	
	protected $Vc01tktd30ih = 'x#!#EPS#!#x';

	
	protected $V4bygrcgekxy = array();

	
	protected $V4bygrcgekxy_key = 0;

	
	protected $Voh5rba1fmyo = false;

	
	protected $Vczfv0blyacv = 0.005;

	
	protected $Ven1id0m3axb = array();

	
	protected $V3c0zsoeihr2 = -1;

	
	protected $Vlbinojvdc21 = true;

	
	protected $Vz5i4mkgzndg = array();

	
	protected $Vtpmfccaax4t = false;

	
	protected $V5wlpqoiubxu = array();

	
	protected $Vvjxcwrp4tjqtmlLinkColorArray = array(0, 0, 255);

	
	protected $Vvjxcwrp4tjqtmlLinkFontStyle = 'U';

	
	protected $Vgv45dfhsyuhumpages = 0;

	
	protected $Vwfolue42pzjlen = array();

	
	protected $Vgv45dfhsyuhumimages = 0;

	
	protected $Vdfgbx2k1nr2 = array();

	
	protected $Vc3qkc3xq4g1len = 0;

	
	protected $Vgv45dfhsyuhumfonts = 0;

	
	protected $Vu350kavrapx = array();

	
	protected $Vqmlhuu0zlnr = array();

	
	protected $Vwfolue42pzjopen = array();

	
	protected $Vr1t45bmyql0 = 'courier';

	
	protected $V2byz3rpxfqj;

	
	protected $Voj4f5yzako0 = array();

	
	protected $Vniwpupn20qj = '';

	
	protected $Vniwpupn20qjMargins = array();

	
	protected $V54tshykgp5w = false;

	
	protected $V54tshykgp5wature_data = array();

	
	protected $V54tshykgp5wature_max_length = 11742;

	
	protected $V54tshykgp5wature_appearance = array('page' => 1, 'rect' => '0 0 0 0');

	
	protected $Vspybfz4wcyl = array();

	
	protected $Vi1dqit1dfzq = false;

	
	protected $Vuvsidtckdt4 = array();

	
	protected $Vvfs35nsul4t = '/[^\S\xa0]/';

	
	protected $V1cdzjt5w0gi = array('p' => '[^\S\xa0]', 'm' => '');

	
	protected $V1ec0a0tndx5 = 0;

	
	protected $Vwfolue42pzj_obj_id = array();

	
	protected $Vf5n4hgnnntk = array();

	
	protected $Vuupbqjor23q = array('lineWidth'=>1, 'borderStyle'=>'solid', 'fillColor'=>array(255, 255, 255), 'strokeColor'=>array(128, 128, 128));

	
	protected $Vwk520bqxdyg = array();

	
	protected $Vaqp1wxcrwsx = '';

	
	protected $Vcubaouikwab = 'application/x-www-form-urlencoded';

	
	protected $Vwg2swechrm2 = 'post';

	
	protected $Vzzkkp5n1hpj = array();

	
	protected $Vjmcz1pyyzyc = array();

	
	protected $Vygxoaoztlef = array();

	
	protected $Vsuacbiocpza = 0;

	
	protected $Vpx3n4yxnzja = 0;

	
	protected $Vsjrcd54lxqx = 0;

	
	protected $V1sogredlkfi = false;

	
	protected $Vnq1ilgebapv = array();

	
	protected $Vgv45dfhsyuhum_columns = 1;

	
	protected $Vagbsx3k35in = 0;

	
	protected $Vmcfi2fnrl03 = 0;

	
	protected $Vik0l1xtq3fo = array('page' => 0, 'column' => 0);

	
	protected $V5thjsfmx3vw = array('x' => 0, 's' => array('H' => 0, 'V' => 0), 'p' => array('L' => 0, 'T' => 0, 'R' => 0, 'B' => 0));

	
	protected $V1vp1udaqmu2 = 0;

	
	protected $Vsoagbrbw4kj = 0;

	
	protected $V3psyrb4siyg;

	
	protected $Vzpauyykk2i0 = 'mm';

	
	protected $Vuirvyi0k5j2 = false;

	
	protected $Vd2cc3o1fx1z = false;

	
	protected $Vvmumkjr5wcv = true;

	
	protected $Vaolotcoafb1 = array();

	
	protected $Vangwoo3ejfgobjects = array();

	
	protected $Vlij2iittja0 = false;

	
	protected $Vangwoo3ejfgobjid = '';

	
	protected $V1gvj2yrabvl = 100;

	
	protected $Vei1w33xybmu = 0;

	
	protected $Vwfolue42pzj_regions = array();

	
	protected $V0ytetmtu3vm = true;

	
	protected $Vkubbkwywe5n = array();

	
	protected $Vfnq1j42gq51 = array();

	
	protected $Vgv45dfhsyuh_dests;

	
	protected $V5l3pyfus2na = array();

	
	protected $Vekgkladk31v = '';

	
	protected $Vpartcjmbyyj = 'px';

	
	protected $Vpvdtvg1vcor = array();

	
	protected $Vfa5ofdayafc = 0;

	
	protected $Vc2eraf1hidl = false;

	
	protected $Vimntg2eabpt = array();

	
	protected $Vuy0n5fjjcnw = false;

	
	protected $Vsqilmxpy2fm = array();

	
	protected $Vhkuv22g4333 = array();

	
	protected $Vyqqgymua31g = 0;

	
	protected $Va4lcyi3if0c = '';

	
	protected $Va4lcyi3if0cmode = array();

	
	protected $V3qvc5krye41 = array(array(
		'alignment-baseline' => 'auto',
		'baseline-shift' => 'baseline',
		'clip' => 'auto',
		'clip-path' => 'none',
		'clip-rule' => 'nonzero',
		'color' => 'black',
		'color-interpolation' => 'sRGB',
		'color-interpolation-filters' => 'linearRGB',
		'color-profile' => 'auto',
		'color-rendering' => 'auto',
		'cursor' => 'auto',
		'direction' => 'ltr',
		'display' => 'inline',
		'dominant-baseline' => 'auto',
		'enable-background' => 'accumulate',
		'fill' => 'black',
		'fill-opacity' => 1,
		'fill-rule' => 'nonzero',
		'filter' => 'none',
		'flood-color' => 'black',
		'flood-opacity' => 1,
		'font' => '',
		'font-family' => 'helvetica',
		'font-size' => 'medium',
		'font-size-adjust' => 'none',
		'font-stretch' => 'normal',
		'font-style' => 'normal',
		'font-variant' => 'normal',
		'font-weight' => 'normal',
		'glyph-orientation-horizontal' => '0deg',
		'glyph-orientation-vertical' => 'auto',
		'image-rendering' => 'auto',
		'kerning' => 'auto',
		'letter-spacing' => 'normal',
		'lighting-color' => 'white',
		'marker' => '',
		'marker-end' => 'none',
		'marker-mid' => 'none',
		'marker-start' => 'none',
		'mask' => 'none',
		'opacity' => 1,
		'overflow' => 'auto',
		'pointer-events' => 'visiblePainted',
		'shape-rendering' => 'auto',
		'stop-color' => 'black',
		'stop-opacity' => 1,
		'stroke' => 'none',
		'stroke-dasharray' => 'none',
		'stroke-dashoffset' => 0,
		'stroke-linecap' => 'butt',
		'stroke-linejoin' => 'miter',
		'stroke-miterlimit' => 4,
		'stroke-opacity' => 1,
		'stroke-width' => 1,
		'text-anchor' => 'start',
		'text-decoration' => 'none',
		'text-rendering' => 'auto',
		'unicode-bidi' => 'normal',
		'visibility' => 'visible',
		'word-spacing' => 'normal',
		'writing-mode' => 'lr-tb',
		'text-color' => 'black',
		'transfmatrix' => array(1, 0, 0, 1, 0, 0)
		));

	
	protected $Vxkiy1xrclop = false;

	
	protected $Vxtae5stuh35 = false;

	
	protected $Vbzveplc3v51;

	
	protected $Vrhw5waxavqy;

	
	protected $V3wx53z1lmsu = '';

	
	protected $Vdyhwhjkgamg = array('OP' => false, 'op' => false, 'OPM' => 0);

	
	protected $Vkanjnd0y3ow = array('CA' => 1, 'ca' => 1, 'BM' => '/Normal', 'AIS' => false);

	
	protected $Vwfolue42pzj_boxes = array('MediaBox', 'CropBox', 'BleedBox', 'TrimBox', 'ArtBox');

	
	protected $Vhh0qub5i5tm = true;

	
	protected $Vhpbmplwk4ll = array();

	
	
	

	
	public function __construct($Vt2jwrpps3zv='P', $V14yjpzdjg3f='mm', $Vmj4iakllwpw='A4', $Vumhd4brlo0g=true, $V1qocqyz1qfy='UTF-8', $Vkc2e1r0w3o0=false, $Vtrvtkoxolyl=false) {
		
		if (function_exists('mb_internal_encoding') AND mb_internal_encoding()) {
			$Vnwufml5q3nphis->internal_encoding = mb_internal_encoding();
			mb_internal_encoding('ASCII');
		}
		
		$Vyjzdxlasgdy = (is_array($Vmj4iakllwpw) ? json_encode($Vmj4iakllwpw) : $Vmj4iakllwpw);
		$Vnwufml5q3nphis->file_id = md5(TCPDF_STATIC::getRandomSeed('TCPDF'.$Vt2jwrpps3zv.$V14yjpzdjg3f.$Vyjzdxlasgdy.$V1qocqyz1qfy));
		$Vnwufml5q3nphis->font_obj_ids = array();
		$Vnwufml5q3nphis->page_obj_id = array();
		$Vnwufml5q3nphis->form_obj_id = array();
		
		$Vnwufml5q3nphis->pdfa_mode = $Vtrvtkoxolyl;
		$Vnwufml5q3nphis->force_srgb = false;
		
		$Vnwufml5q3nphis->rtl = false;
		$Vnwufml5q3nphis->tmprtl = false;
		
		$Vnwufml5q3nphis->_dochecks();
		
		$Vnwufml5q3nphis->isunicode = $Vumhd4brlo0g;
		$Vnwufml5q3nphis->page = 0;
		$Vnwufml5q3nphis->transfmrk[0] = array();
		$Vnwufml5q3nphis->pagedim = array();
		$Vnwufml5q3nphis->n = 2;
		$Vnwufml5q3nphis->buffer = '';
		$Vnwufml5q3nphis->pages = array();
		$Vnwufml5q3nphis->state = 0;
		$Vnwufml5q3nphis->fonts = array();
		$Vnwufml5q3nphis->FontFiles = array();
		$Vnwufml5q3nphis->diffs = array();
		$Vnwufml5q3nphis->images = array();
		$Vnwufml5q3nphis->links = array();
		$Vnwufml5q3nphis->gradients = array();
		$Vnwufml5q3nphis->InFooter = false;
		$Vnwufml5q3nphis->lasth = 0;
		$Vnwufml5q3nphis->FontFamily = defined('PDF_FONT_NAME_MAIN')?PDF_FONT_NAME_MAIN:'helvetica';
		$Vnwufml5q3nphis->FontStyle = '';
		$Vnwufml5q3nphis->FontSizePt = 12;
		$Vnwufml5q3nphis->underline = false;
		$Vnwufml5q3nphis->overline = false;
		$Vnwufml5q3nphis->linethrough = false;
		$Vnwufml5q3nphis->DrawColor = '0 G';
		$Vnwufml5q3nphis->FillColor = '0 g';
		$Vnwufml5q3nphis->TextColor = '0 g';
		$Vnwufml5q3nphis->ColorFlag = false;
		$Vnwufml5q3nphis->pdflayers = array();
		
		$Vnwufml5q3nphis->encrypted = false;
		$Vnwufml5q3nphis->last_enc_key = '';
		
		$Vnwufml5q3nphis->CoreFonts = array(
			'courier'=>'Courier',
			'courierB'=>'Courier-Bold',
			'courierI'=>'Courier-Oblique',
			'courierBI'=>'Courier-BoldOblique',
			'helvetica'=>'Helvetica',
			'helveticaB'=>'Helvetica-Bold',
			'helveticaI'=>'Helvetica-Oblique',
			'helveticaBI'=>'Helvetica-BoldOblique',
			'times'=>'Times-Roman',
			'timesB'=>'Times-Bold',
			'timesI'=>'Times-Italic',
			'timesBI'=>'Times-BoldItalic',
			'symbol'=>'Symbol',
			'zapfdingbats'=>'ZapfDingbats'
		);
		
		$Vnwufml5q3nphis->setPageUnit($V14yjpzdjg3f);
		
		$Vnwufml5q3nphis->setPageFormat($Vmj4iakllwpw, $Vt2jwrpps3zv);
		
		$Vwhlvvfn0mdj = 28.35 / $Vnwufml5q3nphis->k;
		$Vnwufml5q3nphis->SetMargins($Vwhlvvfn0mdj, $Vwhlvvfn0mdj);
		$Vnwufml5q3nphis->clMargin = $Vnwufml5q3nphis->lMargin;
		$Vnwufml5q3nphis->crMargin = $Vnwufml5q3nphis->rMargin;
		
		$Vkamk5utijfb = $Vwhlvvfn0mdj / 10;
		$Vnwufml5q3nphis->setCellPaddings($Vkamk5utijfb, 0, $Vkamk5utijfb, 0);
		
		$Vnwufml5q3nphis->setCellMargins(0, 0, 0, 0);
		
		$Vnwufml5q3nphis->LineWidth = 0.57 / $Vnwufml5q3nphis->k;
		$Vnwufml5q3nphis->linestyleWidth = sprintf('%F w', ($Vnwufml5q3nphis->LineWidth * $Vnwufml5q3nphis->k));
		$Vnwufml5q3nphis->linestyleCap = '0 J';
		$Vnwufml5q3nphis->linestyleJoin = '0 j';
		$Vnwufml5q3nphis->linestyleDash = '[] 0 d';
		
		$Vnwufml5q3nphis->SetAutoPageBreak(true, (2 * $Vwhlvvfn0mdj));
		
		$Vnwufml5q3nphis->SetDisplayMode('fullwidth');
		
		$Vnwufml5q3nphis->SetCompression();
		
		$Vnwufml5q3nphis->setPDFVersion();
		$Vnwufml5q3nphis->tcpdflink = true;
		$Vnwufml5q3nphis->encoding = $V1qocqyz1qfy;
		$Vnwufml5q3nphis->HREF = array();
		$Vnwufml5q3nphis->getFontsList();
		$Vnwufml5q3nphis->fgcolor = array('R' => 0, 'G' => 0, 'B' => 0);
		$Vnwufml5q3nphis->strokecolor = array('R' => 0, 'G' => 0, 'B' => 0);
		$Vnwufml5q3nphis->bgcolor = array('R' => 255, 'G' => 255, 'B' => 255);
		$Vnwufml5q3nphis->extgstates = array();
		$Vnwufml5q3nphis->setTextShadow();
		
		$Vnwufml5q3nphis->sign = false;
		$Vnwufml5q3nphis->tsa_timestamp = false;
		$Vnwufml5q3nphis->tsa_data = array();
		$Vnwufml5q3nphis->signature_appearance = array('page' => 1, 'rect' => '0 0 0 0', 'name' => 'Signature');
		$Vnwufml5q3nphis->empty_signature_appearance = array();
		
		$Vnwufml5q3nphis->ur['enabled'] = false;
		$Vnwufml5q3nphis->ur['document'] = '/FullSave';
		$Vnwufml5q3nphis->ur['annots'] = '/Create/Delete/Modify/Copy/Import/Export';
		$Vnwufml5q3nphis->ur['form'] = '/Add/Delete/FillIn/Import/Export/SubmitStandalone/SpawnTemplate';
		$Vnwufml5q3nphis->ur['signature'] = '/Modify';
		$Vnwufml5q3nphis->ur['ef'] = '/Create/Delete/Modify/Import';
		$Vnwufml5q3nphis->ur['formex'] = '';
		
		$Vnwufml5q3nphis->jpeg_quality = 75;
		
		TCPDF_FONTS::utf8Bidi(array(''), '', false, $Vnwufml5q3nphis->isunicode, $Vnwufml5q3nphis->CurrentFont);
		
		$Vnwufml5q3nphis->SetFont($Vnwufml5q3nphis->FontFamily, $Vnwufml5q3nphis->FontStyle, $Vnwufml5q3nphis->FontSizePt);
		$Vnwufml5q3nphis->setHeaderFont(array($Vnwufml5q3nphis->FontFamily, $Vnwufml5q3nphis->FontStyle, $Vnwufml5q3nphis->FontSizePt));
		$Vnwufml5q3nphis->setFooterFont(array($Vnwufml5q3nphis->FontFamily, $Vnwufml5q3nphis->FontStyle, $Vnwufml5q3nphis->FontSizePt));
		
		if ($Vnwufml5q3nphis->isunicode AND (@preg_match('/\pL/u', 'a') == 1)) {
			
			
			
			
			
			
			$Vnwufml5q3nphis->setSpacesRE('/(?!\xa0)[\s\p{Z}]/u');
		} else {
			
			$Vnwufml5q3nphis->setSpacesRE('/[^\S\xa0]/');
		}
		$Vnwufml5q3nphis->default_form_prop = array('lineWidth'=>1, 'borderStyle'=>'solid', 'fillColor'=>array(255, 255, 255), 'strokeColor'=>array(128, 128, 128));
		
		$Vnwufml5q3nphis->doc_creation_timestamp = time();
		$Vnwufml5q3nphis->doc_modification_timestamp = $Vnwufml5q3nphis->doc_creation_timestamp;
		
		$Vnwufml5q3nphis->default_graphic_vars = $Vnwufml5q3nphis->getGraphicVars();
		$Vnwufml5q3nphis->header_xobj_autoreset = false;
		$Vnwufml5q3nphis->custom_xmp = '';
		
		
		register_shutdown_function(array($Vnwufml5q3nphis, '_destroy'), true);
	}

	
	public function __destruct() {
		
		if (isset($Vnwufml5q3nphis->internal_encoding) AND !empty($Vnwufml5q3nphis->internal_encoding)) {
			mb_internal_encoding($Vnwufml5q3nphis->internal_encoding);
		}
		
		$Vnwufml5q3nphis->_destroy(true);
	}

	
	public function setPageUnit($V14yjpzdjg3f) {
		$V14yjpzdjg3f = strtolower($V14yjpzdjg3f);
		
		switch ($V14yjpzdjg3f) {
			
			case 'px':
			case 'pt': {
				$Vnwufml5q3nphis->k = 1;
				break;
			}
			
			case 'mm': {
				$Vnwufml5q3nphis->k = $Vnwufml5q3nphis->dpi / 25.4;
				break;
			}
			
			case 'cm': {
				$Vnwufml5q3nphis->k = $Vnwufml5q3nphis->dpi / 2.54;
				break;
			}
			
			case 'in': {
				$Vnwufml5q3nphis->k = $Vnwufml5q3nphis->dpi;
				break;
			}
			
			default : {
				$Vnwufml5q3nphis->Error('Incorrect unit: '.$V14yjpzdjg3f);
				break;
			}
		}
		$Vnwufml5q3nphis->pdfunit = $V14yjpzdjg3f;
		if (isset($Vnwufml5q3nphis->CurOrientation)) {
			$Vnwufml5q3nphis->setPageOrientation($Vnwufml5q3nphis->CurOrientation);
		}
	}

	
	protected function setPageFormat($Vmj4iakllwpw, $Vt2jwrpps3zv='P') {
		if (!empty($Vmj4iakllwpw) AND isset($Vnwufml5q3nphis->pagedim[$Vnwufml5q3nphis->page])) {
			
			unset($Vnwufml5q3nphis->pagedim[$Vnwufml5q3nphis->page]);
		}
		if (is_string($Vmj4iakllwpw)) {
			
			$Vtfmjbpojmgi = TCPDF_STATIC::getPageSizeFromFormat($Vmj4iakllwpw);
			$Vnwufml5q3nphis->fwPt = $Vtfmjbpojmgi[0];
			$Vnwufml5q3nphis->fhPt = $Vtfmjbpojmgi[1];
		} else {
			
			if (isset($Vmj4iakllwpw['MediaBox'])) {
				$Vnwufml5q3nphis->pagedim = TCPDF_STATIC::setPageBoxes($Vnwufml5q3nphis->page, 'MediaBox', $Vmj4iakllwpw['MediaBox']['llx'], $Vmj4iakllwpw['MediaBox']['lly'], $Vmj4iakllwpw['MediaBox']['urx'], $Vmj4iakllwpw['MediaBox']['ury'], false, $Vnwufml5q3nphis->k, $Vnwufml5q3nphis->pagedim);
				$Vnwufml5q3nphis->fwPt = (($Vmj4iakllwpw['MediaBox']['urx'] - $Vmj4iakllwpw['MediaBox']['llx']) * $Vnwufml5q3nphis->k);
				$Vnwufml5q3nphis->fhPt = (($Vmj4iakllwpw['MediaBox']['ury'] - $Vmj4iakllwpw['MediaBox']['lly']) * $Vnwufml5q3nphis->k);
			} else {
				if (isset($Vmj4iakllwpw[0]) AND is_numeric($Vmj4iakllwpw[0]) AND isset($Vmj4iakllwpw[1]) AND is_numeric($Vmj4iakllwpw[1])) {
					$Vtfmjbpojmgi = array(($Vmj4iakllwpw[0] * $Vnwufml5q3nphis->k), ($Vmj4iakllwpw[1] * $Vnwufml5q3nphis->k));
				} else {
					if (!isset($Vmj4iakllwpw['format'])) {
						
						$Vmj4iakllwpw['format'] = 'A4';
					}
					$Vtfmjbpojmgi = TCPDF_STATIC::getPageSizeFromFormat($Vmj4iakllwpw['format']);
				}
				$Vnwufml5q3nphis->fwPt = $Vtfmjbpojmgi[0];
				$Vnwufml5q3nphis->fhPt = $Vtfmjbpojmgi[1];
				$Vnwufml5q3nphis->pagedim = TCPDF_STATIC::setPageBoxes($Vnwufml5q3nphis->page, 'MediaBox', 0, 0, $Vnwufml5q3nphis->fwPt, $Vnwufml5q3nphis->fhPt, true, $Vnwufml5q3nphis->k, $Vnwufml5q3nphis->pagedim);
			}
			
			if (isset($Vmj4iakllwpw['CropBox'])) {
				$Vnwufml5q3nphis->pagedim = TCPDF_STATIC::setPageBoxes($Vnwufml5q3nphis->page, 'CropBox', $Vmj4iakllwpw['CropBox']['llx'], $Vmj4iakllwpw['CropBox']['lly'], $Vmj4iakllwpw['CropBox']['urx'], $Vmj4iakllwpw['CropBox']['ury'], false, $Vnwufml5q3nphis->k, $Vnwufml5q3nphis->pagedim);
			}
			
			if (isset($Vmj4iakllwpw['BleedBox'])) {
				$Vnwufml5q3nphis->pagedim = TCPDF_STATIC::setPageBoxes($Vnwufml5q3nphis->page, 'BleedBox', $Vmj4iakllwpw['BleedBox']['llx'], $Vmj4iakllwpw['BleedBox']['lly'], $Vmj4iakllwpw['BleedBox']['urx'], $Vmj4iakllwpw['BleedBox']['ury'], false, $Vnwufml5q3nphis->k, $Vnwufml5q3nphis->pagedim);
			}
			
			if (isset($Vmj4iakllwpw['TrimBox'])) {
				$Vnwufml5q3nphis->pagedim = TCPDF_STATIC::setPageBoxes($Vnwufml5q3nphis->page, 'TrimBox', $Vmj4iakllwpw['TrimBox']['llx'], $Vmj4iakllwpw['TrimBox']['lly'], $Vmj4iakllwpw['TrimBox']['urx'], $Vmj4iakllwpw['TrimBox']['ury'], false, $Vnwufml5q3nphis->k, $Vnwufml5q3nphis->pagedim);
			}
			
			if (isset($Vmj4iakllwpw['ArtBox'])) {
				$Vnwufml5q3nphis->pagedim = TCPDF_STATIC::setPageBoxes($Vnwufml5q3nphis->page, 'ArtBox', $Vmj4iakllwpw['ArtBox']['llx'], $Vmj4iakllwpw['ArtBox']['lly'], $Vmj4iakllwpw['ArtBox']['urx'], $Vmj4iakllwpw['ArtBox']['ury'], false, $Vnwufml5q3nphis->k, $Vnwufml5q3nphis->pagedim);
			}
			
			if (isset($Vmj4iakllwpw['BoxColorInfo'])) {
				$Vnwufml5q3nphis->pagedim[$Vnwufml5q3nphis->page]['BoxColorInfo'] = $Vmj4iakllwpw['BoxColorInfo'];
			}
			if (isset($Vmj4iakllwpw['Rotate']) AND (($Vmj4iakllwpw['Rotate'] % 90) == 0)) {
				
				$Vnwufml5q3nphis->pagedim[$Vnwufml5q3nphis->page]['Rotate'] = intval($Vmj4iakllwpw['Rotate']);
			}
			if (isset($Vmj4iakllwpw['PZ'])) {
				
				$Vnwufml5q3nphis->pagedim[$Vnwufml5q3nphis->page]['PZ'] = floatval($Vmj4iakllwpw['PZ']);
			}
			if (isset($Vmj4iakllwpw['trans'])) {
				
				if (isset($Vmj4iakllwpw['trans']['Dur'])) {
					
					$Vnwufml5q3nphis->pagedim[$Vnwufml5q3nphis->page]['trans']['Dur'] = floatval($Vmj4iakllwpw['trans']['Dur']);
				}
				$V2y4iw14apif = array('Split', 'Blinds', 'Box', 'Wipe', 'Dissolve', 'Glitter', 'R', 'Fly', 'Push', 'Cover', 'Uncover', 'Fade');
				if (isset($Vmj4iakllwpw['trans']['S']) AND in_array($Vmj4iakllwpw['trans']['S'], $V2y4iw14apif)) {
					
					$Vnwufml5q3nphis->pagedim[$Vnwufml5q3nphis->page]['trans']['S'] = $Vmj4iakllwpw['trans']['S'];
					$Vgce5tpmi5f3 = array('Split', 'Blinds');
					$Vuoysqmpw5xh = array('H', 'V');
					if (isset($Vmj4iakllwpw['trans']['Dm']) AND in_array($Vmj4iakllwpw['trans']['S'], $Vgce5tpmi5f3) AND in_array($Vmj4iakllwpw['trans']['Dm'], $Vuoysqmpw5xh)) {
						$Vnwufml5q3nphis->pagedim[$Vnwufml5q3nphis->page]['trans']['Dm'] = $Vmj4iakllwpw['trans']['Dm'];
					}
					$Vgce5tpmi5f3 = array('Split', 'Box', 'Fly');
					$Vuoysqmpw5xh = array('I', 'O');
					if (isset($Vmj4iakllwpw['trans']['M']) AND in_array($Vmj4iakllwpw['trans']['S'], $Vgce5tpmi5f3) AND in_array($Vmj4iakllwpw['trans']['M'], $Vuoysqmpw5xh)) {
						$Vnwufml5q3nphis->pagedim[$Vnwufml5q3nphis->page]['trans']['M'] = $Vmj4iakllwpw['trans']['M'];
					}
					$Vgce5tpmi5f3 = array('Wipe', 'Glitter', 'Fly', 'Cover', 'Uncover', 'Push');
					if (isset($Vmj4iakllwpw['trans']['Di']) AND in_array($Vmj4iakllwpw['trans']['S'], $Vgce5tpmi5f3)) {
						if (((($Vmj4iakllwpw['trans']['Di'] == 90) OR ($Vmj4iakllwpw['trans']['Di'] == 180)) AND ($Vmj4iakllwpw['trans']['S'] == 'Wipe'))
							OR (($Vmj4iakllwpw['trans']['Di'] == 315) AND ($Vmj4iakllwpw['trans']['S'] == 'Glitter'))
							OR (($Vmj4iakllwpw['trans']['Di'] == 0) OR ($Vmj4iakllwpw['trans']['Di'] == 270))) {
							$Vnwufml5q3nphis->pagedim[$Vnwufml5q3nphis->page]['trans']['Di'] = intval($Vmj4iakllwpw['trans']['Di']);
						}
					}
					if (isset($Vmj4iakllwpw['trans']['SS']) AND ($Vmj4iakllwpw['trans']['S'] == 'Fly')) {
						$Vnwufml5q3nphis->pagedim[$Vnwufml5q3nphis->page]['trans']['SS'] = floatval($Vmj4iakllwpw['trans']['SS']);
					}
					if (isset($Vmj4iakllwpw['trans']['B']) AND ($Vmj4iakllwpw['trans']['B'] === true) AND ($Vmj4iakllwpw['trans']['S'] == 'Fly')) {
						$Vnwufml5q3nphis->pagedim[$Vnwufml5q3nphis->page]['trans']['B'] = 'true';
					}
				} else {
					$Vnwufml5q3nphis->pagedim[$Vnwufml5q3nphis->page]['trans']['S'] = 'R';
				}
				if (isset($Vmj4iakllwpw['trans']['D'])) {
					
					$Vnwufml5q3nphis->pagedim[$Vnwufml5q3nphis->page]['trans']['D'] = floatval($Vmj4iakllwpw['trans']['D']);
				} else {
					$Vnwufml5q3nphis->pagedim[$Vnwufml5q3nphis->page]['trans']['D'] = 1;
				}
			}
		}
		$Vnwufml5q3nphis->setPageOrientation($Vt2jwrpps3zv);
	}

	
	public function setPageOrientation($Vt2jwrpps3zv, $Vtviiz1wo4px='', $Vvrgvoiszxey='') {
		if (!isset($Vnwufml5q3nphis->pagedim[$Vnwufml5q3nphis->page]['MediaBox'])) {
			
			$Vnwufml5q3nphis->pagedim = TCPDF_STATIC::setPageBoxes($Vnwufml5q3nphis->page, 'MediaBox', 0, 0, $Vnwufml5q3nphis->fwPt, $Vnwufml5q3nphis->fhPt, true, $Vnwufml5q3nphis->k, $Vnwufml5q3nphis->pagedim);
		}
		if (!isset($Vnwufml5q3nphis->pagedim[$Vnwufml5q3nphis->page]['CropBox'])) {
			
			$Vnwufml5q3nphis->pagedim = TCPDF_STATIC::setPageBoxes($Vnwufml5q3nphis->page, 'CropBox', $Vnwufml5q3nphis->pagedim[$Vnwufml5q3nphis->page]['MediaBox']['llx'], $Vnwufml5q3nphis->pagedim[$Vnwufml5q3nphis->page]['MediaBox']['lly'], $Vnwufml5q3nphis->pagedim[$Vnwufml5q3nphis->page]['MediaBox']['urx'], $Vnwufml5q3nphis->pagedim[$Vnwufml5q3nphis->page]['MediaBox']['ury'], true, $Vnwufml5q3nphis->k, $Vnwufml5q3nphis->pagedim);
		}
		if (!isset($Vnwufml5q3nphis->pagedim[$Vnwufml5q3nphis->page]['BleedBox'])) {
			
			$Vnwufml5q3nphis->pagedim = TCPDF_STATIC::setPageBoxes($Vnwufml5q3nphis->page, 'BleedBox', $Vnwufml5q3nphis->pagedim[$Vnwufml5q3nphis->page]['CropBox']['llx'], $Vnwufml5q3nphis->pagedim[$Vnwufml5q3nphis->page]['CropBox']['lly'], $Vnwufml5q3nphis->pagedim[$Vnwufml5q3nphis->page]['CropBox']['urx'], $Vnwufml5q3nphis->pagedim[$Vnwufml5q3nphis->page]['CropBox']['ury'], true, $Vnwufml5q3nphis->k, $Vnwufml5q3nphis->pagedim);
		}
		if (!isset($Vnwufml5q3nphis->pagedim[$Vnwufml5q3nphis->page]['TrimBox'])) {
			
			$Vnwufml5q3nphis->pagedim = TCPDF_STATIC::setPageBoxes($Vnwufml5q3nphis->page, 'TrimBox', $Vnwufml5q3nphis->pagedim[$Vnwufml5q3nphis->page]['CropBox']['llx'], $Vnwufml5q3nphis->pagedim[$Vnwufml5q3nphis->page]['CropBox']['lly'], $Vnwufml5q3nphis->pagedim[$Vnwufml5q3nphis->page]['CropBox']['urx'], $Vnwufml5q3nphis->pagedim[$Vnwufml5q3nphis->page]['CropBox']['ury'], true, $Vnwufml5q3nphis->k, $Vnwufml5q3nphis->pagedim);
		}
		if (!isset($Vnwufml5q3nphis->pagedim[$Vnwufml5q3nphis->page]['ArtBox'])) {
			
			$Vnwufml5q3nphis->pagedim = TCPDF_STATIC::setPageBoxes($Vnwufml5q3nphis->page, 'ArtBox', $Vnwufml5q3nphis->pagedim[$Vnwufml5q3nphis->page]['CropBox']['llx'], $Vnwufml5q3nphis->pagedim[$Vnwufml5q3nphis->page]['CropBox']['lly'], $Vnwufml5q3nphis->pagedim[$Vnwufml5q3nphis->page]['CropBox']['urx'], $Vnwufml5q3nphis->pagedim[$Vnwufml5q3nphis->page]['CropBox']['ury'], true, $Vnwufml5q3nphis->k, $Vnwufml5q3nphis->pagedim);
		}
		if (!isset($Vnwufml5q3nphis->pagedim[$Vnwufml5q3nphis->page]['Rotate'])) {
			
			$Vnwufml5q3nphis->pagedim[$Vnwufml5q3nphis->page]['Rotate'] = 0;
		}
		if (!isset($Vnwufml5q3nphis->pagedim[$Vnwufml5q3nphis->page]['PZ'])) {
			
			$Vnwufml5q3nphis->pagedim[$Vnwufml5q3nphis->page]['PZ'] = 1;
		}
		if ($Vnwufml5q3nphis->fwPt > $Vnwufml5q3nphis->fhPt) {
			
			$Vyvovhd1m3bl = 'L';
		} else {
			
			$Vyvovhd1m3bl = 'P';
		}
		$Vlfnwlnua3nh = array('P', 'L');
		if (empty($Vt2jwrpps3zv)) {
			$Vt2jwrpps3zv = $Vyvovhd1m3bl;
		} else {
			$Vt2jwrpps3zv = strtoupper($Vt2jwrpps3zv[0]);
		}
		if (in_array($Vt2jwrpps3zv, $Vlfnwlnua3nh) AND ($Vt2jwrpps3zv != $Vyvovhd1m3bl)) {
			$Vnwufml5q3nphis->CurOrientation = $Vt2jwrpps3zv;
			$Vnwufml5q3nphis->wPt = $Vnwufml5q3nphis->fhPt;
			$Vnwufml5q3nphis->hPt = $Vnwufml5q3nphis->fwPt;
		} else {
			$Vnwufml5q3nphis->CurOrientation = $Vyvovhd1m3bl;
			$Vnwufml5q3nphis->wPt = $Vnwufml5q3nphis->fwPt;
			$Vnwufml5q3nphis->hPt = $Vnwufml5q3nphis->fhPt;
		}
		if ((abs($Vnwufml5q3nphis->pagedim[$Vnwufml5q3nphis->page]['MediaBox']['urx'] - $Vnwufml5q3nphis->hPt) < $Vnwufml5q3nphis->feps) AND (abs($Vnwufml5q3nphis->pagedim[$Vnwufml5q3nphis->page]['MediaBox']['ury'] - $Vnwufml5q3nphis->wPt) < $Vnwufml5q3nphis->feps)){
			
			$Vnwufml5q3nphis->pagedim = TCPDF_STATIC::swapPageBoxCoordinates($Vnwufml5q3nphis->page, $Vnwufml5q3nphis->pagedim);
		}
		$Vnwufml5q3nphis->w = ($Vnwufml5q3nphis->wPt / $Vnwufml5q3nphis->k);
		$Vnwufml5q3nphis->h = ($Vnwufml5q3nphis->hPt / $Vnwufml5q3nphis->k);
		if (TCPDF_STATIC::empty_string($Vtviiz1wo4px)) {
			if (isset($Vnwufml5q3nphis->AutoPageBreak)) {
				$Vtviiz1wo4px = $Vnwufml5q3nphis->AutoPageBreak;
			} else {
				$Vtviiz1wo4px = true;
			}
		}
		if (TCPDF_STATIC::empty_string($Vvrgvoiszxey)) {
			if (isset($Vnwufml5q3nphis->bMargin)) {
				$Vvrgvoiszxey = $Vnwufml5q3nphis->bMargin;
			} else {
				
				$Vvrgvoiszxey = 2 * 28.35 / $Vnwufml5q3nphis->k;
			}
		}
		$Vnwufml5q3nphis->SetAutoPageBreak($Vtviiz1wo4px, $Vvrgvoiszxey);
		
		$Vnwufml5q3nphis->pagedim[$Vnwufml5q3nphis->page]['w'] = $Vnwufml5q3nphis->wPt;
		$Vnwufml5q3nphis->pagedim[$Vnwufml5q3nphis->page]['h'] = $Vnwufml5q3nphis->hPt;
		$Vnwufml5q3nphis->pagedim[$Vnwufml5q3nphis->page]['wk'] = $Vnwufml5q3nphis->w;
		$Vnwufml5q3nphis->pagedim[$Vnwufml5q3nphis->page]['hk'] = $Vnwufml5q3nphis->h;
		$Vnwufml5q3nphis->pagedim[$Vnwufml5q3nphis->page]['tm'] = $Vnwufml5q3nphis->tMargin;
		$Vnwufml5q3nphis->pagedim[$Vnwufml5q3nphis->page]['bm'] = $Vvrgvoiszxey;
		$Vnwufml5q3nphis->pagedim[$Vnwufml5q3nphis->page]['lm'] = $Vnwufml5q3nphis->lMargin;
		$Vnwufml5q3nphis->pagedim[$Vnwufml5q3nphis->page]['rm'] = $Vnwufml5q3nphis->rMargin;
		$Vnwufml5q3nphis->pagedim[$Vnwufml5q3nphis->page]['pb'] = $Vtviiz1wo4px;
		$Vnwufml5q3nphis->pagedim[$Vnwufml5q3nphis->page]['or'] = $Vnwufml5q3nphis->CurOrientation;
		$Vnwufml5q3nphis->pagedim[$Vnwufml5q3nphis->page]['olm'] = $Vnwufml5q3nphis->original_lMargin;
		$Vnwufml5q3nphis->pagedim[$Vnwufml5q3nphis->page]['orm'] = $Vnwufml5q3nphis->original_rMargin;
	}

	
	public function setSpacesRE($V14ltds3prpr='/[^\S\xa0]/') {
		$Vnwufml5q3nphis->re_spaces = $V14ltds3prpr;
		$V14ltds3prpr_parts = explode('/', $V14ltds3prpr);
		
		$Vnwufml5q3nphis->re_space = array();
		if (isset($V14ltds3prpr_parts[1]) AND !empty($V14ltds3prpr_parts[1])) {
			$Vnwufml5q3nphis->re_space['p'] = $V14ltds3prpr_parts[1];
		} else {
			$Vnwufml5q3nphis->re_space['p'] = '[\s]';
		}
		
		if (isset($V14ltds3prpr_parts[2]) AND !empty($V14ltds3prpr_parts[2])) {
			$Vnwufml5q3nphis->re_space['m'] = $V14ltds3prpr_parts[2];
		} else {
			$Vnwufml5q3nphis->re_space['m'] = '';
		}
	}

	
	public function setRTL($Vwczym13hlrt, $V14ltds3prprsetx=true) {
		$Vwczym13hlrt = $Vwczym13hlrt ? true : false;
		$V14ltds3prprsetx = ($V14ltds3prprsetx AND ($Vwczym13hlrt != $Vnwufml5q3nphis->rtl));
		$Vnwufml5q3nphis->rtl = $Vwczym13hlrt;
		$Vnwufml5q3nphis->tmprtl = false;
		if ($V14ltds3prprsetx) {
			$Vnwufml5q3nphis->Ln(0);
		}
	}

	
	public function getRTL() {
		return $Vnwufml5q3nphis->rtl;
	}

	
	public function setTempRTL($V0vkydnx50wa) {
		$Vgv45dfhsyuhewmode = false;
		switch (strtoupper($V0vkydnx50wa)) {
			case 'LTR':
			case 'L': {
				if ($Vnwufml5q3nphis->rtl) {
					$Vgv45dfhsyuhewmode = 'L';
				}
				break;
			}
			case 'RTL':
			case 'R': {
				if (!$Vnwufml5q3nphis->rtl) {
					$Vgv45dfhsyuhewmode = 'R';
				}
				break;
			}
			case false:
			default: {
				$Vgv45dfhsyuhewmode = false;
				break;
			}
		}
		$Vnwufml5q3nphis->tmprtl = $Vgv45dfhsyuhewmode;
	}

	
	public function isRTLTextDir() {
		return ($Vnwufml5q3nphis->rtl OR ($Vnwufml5q3nphis->tmprtl == 'R'));
	}

	
	public function setLastH($Vvjxcwrp4tjq) {
		$Vnwufml5q3nphis->lasth = $Vvjxcwrp4tjq;
	}

	
	public function getCellHeight($Vshfhqyg5vyrize, $Vtbdcorpf2kc=TRUE) {
		$Vvjxcwrp4tjqeight = ($Vshfhqyg5vyrize * $Vnwufml5q3nphis->cell_height_ratio);
		if ($Vtbdcorpf2kc) {
			$Vvjxcwrp4tjqeight += ($Vnwufml5q3nphis->cell_padding['T'] + $Vnwufml5q3nphis->cell_padding['B']);
		}
		return round($Vvjxcwrp4tjqeight, 6);
	}

	
	public function resetLastH() {
		$Vnwufml5q3nphis->lasth = $Vnwufml5q3nphis->getCellHeight($Vnwufml5q3nphis->FontSize);
	}

	
	public function getLastH() {
		return $Vnwufml5q3nphis->lasth;
	}

	
	public function setImageScale($Vhhwkh3jvswq) {
		$Vnwufml5q3nphis->imgscale = $Vhhwkh3jvswq;
	}

	
	public function getImageScale() {
		return $Vnwufml5q3nphis->imgscale;
	}

	
	public function getPageDimensions($Vwfolue42pzjnum='') {
		if (empty($Vwfolue42pzjnum)) {
			$Vwfolue42pzjnum = $Vnwufml5q3nphis->page;
		}
		return $Vnwufml5q3nphis->pagedim[$Vwfolue42pzjnum];
	}

	
	public function getPageWidth($Vwfolue42pzjnum='') {
		if (empty($Vwfolue42pzjnum)) {
			return $Vnwufml5q3nphis->w;
		}
		return $Vnwufml5q3nphis->pagedim[$Vwfolue42pzjnum]['w'];
	}

	
	public function getPageHeight($Vwfolue42pzjnum='') {
		if (empty($Vwfolue42pzjnum)) {
			return $Vnwufml5q3nphis->h;
		}
		return $Vnwufml5q3nphis->pagedim[$Vwfolue42pzjnum]['h'];
	}

	
	public function getBreakMargin($Vwfolue42pzjnum='') {
		if (empty($Vwfolue42pzjnum)) {
			return $Vnwufml5q3nphis->bMargin;
		}
		return $Vnwufml5q3nphis->pagedim[$Vwfolue42pzjnum]['bm'];
	}

	
	public function getScaleFactor() {
		return $Vnwufml5q3nphis->k;
	}

	
	public function SetMargins($Vx3g4ytafo1aeft, $Vmudo4ztceqi, $V023fpwkrfpj=-1, $Vl0q4noiexi4eepmargins=false) {
		
		$Vnwufml5q3nphis->lMargin = $Vx3g4ytafo1aeft;
		$Vnwufml5q3nphis->tMargin = $Vmudo4ztceqi;
		if ($V023fpwkrfpj == -1) {
			$V023fpwkrfpj = $Vx3g4ytafo1aeft;
		}
		$Vnwufml5q3nphis->rMargin = $V023fpwkrfpj;
		if ($Vl0q4noiexi4eepmargins) {
			
			$Vnwufml5q3nphis->original_lMargin = $Vnwufml5q3nphis->lMargin;
			$Vnwufml5q3nphis->original_rMargin = $Vnwufml5q3nphis->rMargin;
		}
	}

	
	public function SetLeftMargin($Vwhlvvfn0mdj) {
		
		$Vnwufml5q3nphis->lMargin = $Vwhlvvfn0mdj;
		if (($Vnwufml5q3nphis->page > 0) AND ($Vnwufml5q3nphis->x < $Vwhlvvfn0mdj)) {
			$Vnwufml5q3nphis->x = $Vwhlvvfn0mdj;
		}
	}

	
	public function SetTopMargin($Vwhlvvfn0mdj) {
		
		$Vnwufml5q3nphis->tMargin = $Vwhlvvfn0mdj;
		if (($Vnwufml5q3nphis->page > 0) AND ($Vnwufml5q3nphis->y < $Vwhlvvfn0mdj)) {
			$Vnwufml5q3nphis->y = $Vwhlvvfn0mdj;
		}
	}

	
	public function SetRightMargin($Vwhlvvfn0mdj) {
		$Vnwufml5q3nphis->rMargin = $Vwhlvvfn0mdj;
		if (($Vnwufml5q3nphis->page > 0) AND ($Vnwufml5q3nphis->x > ($Vnwufml5q3nphis->w - $Vwhlvvfn0mdj))) {
			$Vnwufml5q3nphis->x = $Vnwufml5q3nphis->w - $Vwhlvvfn0mdj;
		}
	}

	
	public function SetCellPadding($Vrtfgexvs0sl) {
		if ($Vrtfgexvs0sl >= 0) {
			$Vnwufml5q3nphis->cell_padding['L'] = $Vrtfgexvs0sl;
			$Vnwufml5q3nphis->cell_padding['T'] = $Vrtfgexvs0sl;
			$Vnwufml5q3nphis->cell_padding['R'] = $Vrtfgexvs0sl;
			$Vnwufml5q3nphis->cell_padding['B'] = $Vrtfgexvs0sl;
		}
	}

	
	public function setCellPaddings($Vx3g4ytafo1aeft='', $Vmudo4ztceqi='', $V023fpwkrfpj='', $Vbsp2adrrdru='') {
		if (($Vx3g4ytafo1aeft !== '') AND ($Vx3g4ytafo1aeft >= 0)) {
			$Vnwufml5q3nphis->cell_padding['L'] = $Vx3g4ytafo1aeft;
		}
		if (($Vmudo4ztceqi !== '') AND ($Vmudo4ztceqi >= 0)) {
			$Vnwufml5q3nphis->cell_padding['T'] = $Vmudo4ztceqi;
		}
		if (($V023fpwkrfpj !== '') AND ($V023fpwkrfpj >= 0)) {
			$Vnwufml5q3nphis->cell_padding['R'] = $V023fpwkrfpj;
		}
		if (($Vbsp2adrrdru !== '') AND ($Vbsp2adrrdru >= 0)) {
			$Vnwufml5q3nphis->cell_padding['B'] = $Vbsp2adrrdru;
		}
	}

	
	public function getCellPaddings() {
		return $Vnwufml5q3nphis->cell_padding;
	}

	
	public function setCellMargins($Vx3g4ytafo1aeft='', $Vmudo4ztceqi='', $V023fpwkrfpj='', $Vbsp2adrrdru='') {
		if (($Vx3g4ytafo1aeft !== '') AND ($Vx3g4ytafo1aeft >= 0)) {
			$Vnwufml5q3nphis->cell_margin['L'] = $Vx3g4ytafo1aeft;
		}
		if (($Vmudo4ztceqi !== '') AND ($Vmudo4ztceqi >= 0)) {
			$Vnwufml5q3nphis->cell_margin['T'] = $Vmudo4ztceqi;
		}
		if (($V023fpwkrfpj !== '') AND ($V023fpwkrfpj >= 0)) {
			$Vnwufml5q3nphis->cell_margin['R'] = $V023fpwkrfpj;
		}
		if (($Vbsp2adrrdru !== '') AND ($Vbsp2adrrdru >= 0)) {
			$Vnwufml5q3nphis->cell_margin['B'] = $Vbsp2adrrdru;
		}
	}

	
	public function getCellMargins() {
		return $Vnwufml5q3nphis->cell_margin;
	}

	
	protected function adjustCellPadding($Vthindvefylo=0) {
		if (empty($Vthindvefylo)) {
			return;
		}
		if (is_string($Vthindvefylo)) {
			
			$Vlpifl4utijy = strlen($Vthindvefylo);
			$Vgv45dfhsyuhewbrd = array();
			for ($V55vc4mewy5w = 0; $V55vc4mewy5w < $Vlpifl4utijy; ++$V55vc4mewy5w) {
				$Vgv45dfhsyuhewbrd[$Vthindvefylo[$V55vc4mewy5w]] = true;
			}
			$Vthindvefylo = $Vgv45dfhsyuhewbrd;
		} elseif (($Vthindvefylo === 1) OR ($Vthindvefylo === true) OR (is_numeric($Vthindvefylo) AND (intval($Vthindvefylo) > 0))) {
			$Vthindvefylo = array('LRTB' => true);
		}
		if (!is_array($Vthindvefylo)) {
			return;
		}
		
		$Vyltsm3nt5sw = $Vnwufml5q3nphis->cell_padding;
		
		if (isset($Vthindvefylo['mode'])) {
			$V0vkydnx50wa = $Vthindvefylo['mode'];
			unset($Vthindvefylo['mode']);
		} else {
			$V0vkydnx50wa = 'normal';
		}
		
		foreach ($Vthindvefylo as $Vgffhwoemo4c => $Vovexk3mzujo) {
			$Vx3g4ytafo1aine_width = $Vnwufml5q3nphis->LineWidth;
			if (is_array($Vovexk3mzujo) AND isset($Vovexk3mzujo['width'])) {
				
				$Vx3g4ytafo1aine_width = $Vovexk3mzujo['width'];
			}
			$Vwc01tmo5fus = 0; 
			switch ($V0vkydnx50wa) {
				case 'ext': {
					$Vwc01tmo5fus = 0;
					break;
				}
				case 'int': {
					$Vwc01tmo5fus = $Vx3g4ytafo1aine_width;
					break;
				}
				case 'normal':
				default: {
					$Vwc01tmo5fus = ($Vx3g4ytafo1aine_width / 2);
					break;
				}
			}
			
			if ((strpos($Vgffhwoemo4c,'T') !== false) AND ($Vnwufml5q3nphis->cell_padding['T'] < $Vwc01tmo5fus)) {
				$Vnwufml5q3nphis->cell_padding['T'] = $Vwc01tmo5fus;
			}
			if ((strpos($Vgffhwoemo4c,'R') !== false) AND ($Vnwufml5q3nphis->cell_padding['R'] < $Vwc01tmo5fus)) {
				$Vnwufml5q3nphis->cell_padding['R'] = $Vwc01tmo5fus;
			}
			if ((strpos($Vgffhwoemo4c,'B') !== false) AND ($Vnwufml5q3nphis->cell_padding['B'] < $Vwc01tmo5fus)) {
				$Vnwufml5q3nphis->cell_padding['B'] = $Vwc01tmo5fus;
			}
			if ((strpos($Vgffhwoemo4c,'L') !== false) AND ($Vnwufml5q3nphis->cell_padding['L'] < $Vwc01tmo5fus)) {
				$Vnwufml5q3nphis->cell_padding['L'] = $Vwc01tmo5fus;
			}
		}
		return array('T' => ($Vnwufml5q3nphis->cell_padding['T'] - $Vyltsm3nt5sw['T']), 'R' => ($Vnwufml5q3nphis->cell_padding['R'] - $Vyltsm3nt5sw['R']), 'B' => ($Vnwufml5q3nphis->cell_padding['B'] - $Vyltsm3nt5sw['B']), 'L' => ($Vnwufml5q3nphis->cell_padding['L'] - $Vyltsm3nt5sw['L']));
	}

	
	public function SetAutoPageBreak($Vxwd302iban1, $Vwhlvvfn0mdj=0) {
		$Vnwufml5q3nphis->AutoPageBreak = $Vxwd302iban1 ? true : false;
		$Vnwufml5q3nphis->bMargin = $Vwhlvvfn0mdj;
		$Vnwufml5q3nphis->PageBreakTrigger = $Vnwufml5q3nphis->h - $Vwhlvvfn0mdj;
	}

	
	public function getAutoPageBreak() {
		return $Vnwufml5q3nphis->AutoPageBreak;
	}

	
	public function SetDisplayMode($V3i2hce2lvo3, $Vx3g4ytafo1aayout='SinglePage', $V0vkydnx50wa='UseNone') {
		if (($V3i2hce2lvo3 == 'fullpage') OR ($V3i2hce2lvo3 == 'fullwidth') OR ($V3i2hce2lvo3 == 'real') OR ($V3i2hce2lvo3 == 'default') OR (!is_string($V3i2hce2lvo3))) {
			$Vnwufml5q3nphis->ZoomMode = $V3i2hce2lvo3;
		} else {
			$Vnwufml5q3nphis->Error('Incorrect zoom display mode: '.$V3i2hce2lvo3);
		}
		$Vnwufml5q3nphis->LayoutMode = TCPDF_STATIC::getPageLayoutMode($Vx3g4ytafo1aayout);
		$Vnwufml5q3nphis->PageMode = TCPDF_STATIC::getPageMode($V0vkydnx50wa);
	}

	
	public function SetCompression($Vztblmzto2am=true) {
		if (function_exists('gzcompress')) {
			$Vnwufml5q3nphis->compress = $Vztblmzto2am ? true : false;
		} else {
			$Vnwufml5q3nphis->compress = false;
		}
	}

	
	public function setSRGBmode($V0vkydnx50wa=false) {
		$Vnwufml5q3nphis->force_srgb = $V0vkydnx50wa ? true : false;
	}

	
	public function SetDocInfoUnicode($Vumhd4brlo0g=true) {
		$Vnwufml5q3nphis->docinfounicode = $Vumhd4brlo0g ? true : false;
	}

	
	public function SetTitle($V3awurwxucbv) {
		$Vnwufml5q3nphis->title = $V3awurwxucbv;
	}

	
	public function SetSubject($Vykuui0y4ery) {
		$Vnwufml5q3nphis->subject = $Vykuui0y4ery;
	}

	
	public function SetAuthor($Vdl4xnykfb4s) {
		$Vnwufml5q3nphis->author = $Vdl4xnykfb4s;
	}

	
	public function SetKeywords($Vl0q4noiexi4eywords) {
		$Vnwufml5q3nphis->keywords = $Vl0q4noiexi4eywords;
	}

	
	public function SetCreator($V2fqqxmyazqg) {
		$Vnwufml5q3nphis->creator = $V2fqqxmyazqg;
	}

	
	public function Error($Vigzdfzehwux) {
		
		$Vnwufml5q3nphis->_destroy(true);
		if (defined('K_TCPDF_THROW_EXCEPTION_ERROR') AND !K_TCPDF_THROW_EXCEPTION_ERROR) {
			die('<strong>TCPDF ERROR: </strong>'.$Vigzdfzehwux);
		} else {
			throw new Exception('TCPDF ERROR: '.$Vigzdfzehwux);
		}
	}

	
	public function Open() {
		$Vnwufml5q3nphis->state = 1;
	}

	
	public function Close() {
		if ($Vnwufml5q3nphis->state == 3) {
			return;
		}
		if ($Vnwufml5q3nphis->page == 0) {
			$Vnwufml5q3nphis->AddPage();
		}
		$Vnwufml5q3nphis->endLayer();
		if ($Vnwufml5q3nphis->tcpdflink) {
			
			$Vfbwtdiv4emm = $Vnwufml5q3nphis->getGraphicVars();
			$Vnwufml5q3nphis->setEqualColumns();
			$Vnwufml5q3nphis->lastpage(true);
			$Vnwufml5q3nphis->SetAutoPageBreak(false);
			$Vnwufml5q3nphis->x = 0;
			$Vnwufml5q3nphis->y = $Vnwufml5q3nphis->h - (1 / $Vnwufml5q3nphis->k);
			$Vnwufml5q3nphis->lMargin = 0;
			$Vnwufml5q3nphis->_outSaveGraphicsState();
			$Voc1qigl3k5y = defined('PDF_FONT_NAME_MAIN')?PDF_FONT_NAME_MAIN:'helvetica';
			$Vnwufml5q3nphis->SetFont($Voc1qigl3k5y, '', 1);
			$Vnwufml5q3nphis->setTextRenderingMode(0, false, false);
			$Vigzdfzehwux = "\x50\x6f\x77\x65\x72\x65\x64\x20\x62\x79\x20\x54\x43\x50\x44\x46\x20\x28\x77\x77\x77\x2e\x74\x63\x70\x64\x66\x2e\x6f\x72\x67\x29";
			$Vx3g4ytafo1ank = "\x68\x74\x74\x70\x3a\x2f\x2f\x77\x77\x77\x2e\x74\x63\x70\x64\x66\x2e\x6f\x72\x67";
			$Vnwufml5q3nphis->Cell(0, 0, $Vigzdfzehwux, 0, 0, 'L', 0, $Vx3g4ytafo1ank, 0, false, 'D', 'B');
			$Vnwufml5q3nphis->_outRestoreGraphicsState();
			
			$Vnwufml5q3nphis->setGraphicVars($Vfbwtdiv4emm);
		}
		
		$Vnwufml5q3nphis->endPage();
		
		$Vnwufml5q3nphis->_enddoc();
		
		$Vnwufml5q3nphis->_destroy(false);
	}

	
	public function setPage($Vpckomo4tbuv, $V14ltds3prprsetmargins=false) {
		if (($Vpckomo4tbuv == $Vnwufml5q3nphis->page) AND ($Vnwufml5q3nphis->state == 2)) {
			return;
		}
		if (($Vpckomo4tbuv > 0) AND ($Vpckomo4tbuv <= $Vnwufml5q3nphis->numpages)) {
			$Vnwufml5q3nphis->state = 2;
			
			
			$Vfmcr1vjwypo = $Vnwufml5q3nphis->page;
			$Vnwufml5q3nphis->page = $Vpckomo4tbuv;
			$Vnwufml5q3nphis->wPt = $Vnwufml5q3nphis->pagedim[$Vnwufml5q3nphis->page]['w'];
			$Vnwufml5q3nphis->hPt = $Vnwufml5q3nphis->pagedim[$Vnwufml5q3nphis->page]['h'];
			$Vnwufml5q3nphis->w = $Vnwufml5q3nphis->pagedim[$Vnwufml5q3nphis->page]['wk'];
			$Vnwufml5q3nphis->h = $Vnwufml5q3nphis->pagedim[$Vnwufml5q3nphis->page]['hk'];
			$Vnwufml5q3nphis->tMargin = $Vnwufml5q3nphis->pagedim[$Vnwufml5q3nphis->page]['tm'];
			$Vnwufml5q3nphis->bMargin = $Vnwufml5q3nphis->pagedim[$Vnwufml5q3nphis->page]['bm'];
			$Vnwufml5q3nphis->original_lMargin = $Vnwufml5q3nphis->pagedim[$Vnwufml5q3nphis->page]['olm'];
			$Vnwufml5q3nphis->original_rMargin = $Vnwufml5q3nphis->pagedim[$Vnwufml5q3nphis->page]['orm'];
			$Vnwufml5q3nphis->AutoPageBreak = $Vnwufml5q3nphis->pagedim[$Vnwufml5q3nphis->page]['pb'];
			$Vnwufml5q3nphis->CurOrientation = $Vnwufml5q3nphis->pagedim[$Vnwufml5q3nphis->page]['or'];
			$Vnwufml5q3nphis->SetAutoPageBreak($Vnwufml5q3nphis->AutoPageBreak, $Vnwufml5q3nphis->bMargin);
			
			
			if ($V14ltds3prprsetmargins) {
				$Vnwufml5q3nphis->lMargin = $Vnwufml5q3nphis->pagedim[$Vnwufml5q3nphis->page]['olm'];
				$Vnwufml5q3nphis->rMargin = $Vnwufml5q3nphis->pagedim[$Vnwufml5q3nphis->page]['orm'];
				$Vnwufml5q3nphis->SetY($Vnwufml5q3nphis->tMargin);
			} else {
				
				if ($Vnwufml5q3nphis->pagedim[$Vnwufml5q3nphis->page]['olm'] != $Vnwufml5q3nphis->pagedim[$Vfmcr1vjwypo]['olm']) {
					$Vgvznyjxpwgm = $Vnwufml5q3nphis->pagedim[$Vnwufml5q3nphis->page]['olm'] - $Vnwufml5q3nphis->pagedim[$Vnwufml5q3nphis->page]['orm'];
					$Vnwufml5q3nphis->lMargin += $Vgvznyjxpwgm;
					$Vnwufml5q3nphis->rMargin -= $Vgvznyjxpwgm;
				}
			}
		} else {
			$Vnwufml5q3nphis->Error('Wrong page number on setPage() function: '.$Vpckomo4tbuv);
		}
	}

	
	public function lastPage($V14ltds3prprsetmargins=false) {
		$Vnwufml5q3nphis->setPage($Vnwufml5q3nphis->getNumPages(), $V14ltds3prprsetmargins);
	}

	
	public function getPage() {
		return $Vnwufml5q3nphis->page;
	}

	
	public function getNumPages() {
		return $Vnwufml5q3nphis->numpages;
	}

	
	public function addTOCPage($Vt2jwrpps3zv='', $Vmj4iakllwpw='', $Vl0q4noiexi4eepmargins=false) {
		$Vnwufml5q3nphis->AddPage($Vt2jwrpps3zv, $Vmj4iakllwpw, $Vl0q4noiexi4eepmargins, true);
	}

	
	public function endTOCPage() {
		$Vnwufml5q3nphis->endPage(true);
	}

	
	public function AddPage($Vt2jwrpps3zv='', $Vmj4iakllwpw='', $Vl0q4noiexi4eepmargins=false, $Vuirvyi0k5j2=false) {
		if ($Vnwufml5q3nphis->inxobj) {
			
			return;
		}
		if (!isset($Vnwufml5q3nphis->original_lMargin) OR $Vl0q4noiexi4eepmargins) {
			$Vnwufml5q3nphis->original_lMargin = $Vnwufml5q3nphis->lMargin;
		}
		if (!isset($Vnwufml5q3nphis->original_rMargin) OR $Vl0q4noiexi4eepmargins) {
			$Vnwufml5q3nphis->original_rMargin = $Vnwufml5q3nphis->rMargin;
		}
		
		$Vnwufml5q3nphis->endPage();
		
		$Vnwufml5q3nphis->startPage($Vt2jwrpps3zv, $Vmj4iakllwpw, $Vuirvyi0k5j2);
	}

	
	public function endPage($Vuirvyi0k5j2=false) {
		
		if (($Vnwufml5q3nphis->page == 0) OR ($Vnwufml5q3nphis->numpages > $Vnwufml5q3nphis->page) OR (!$Vnwufml5q3nphis->pageopen[$Vnwufml5q3nphis->page])) {
			return;
		}
		
		$Vnwufml5q3nphis->setFooter();
		
		$Vnwufml5q3nphis->_endpage();
		
		$Vnwufml5q3nphis->pageopen[$Vnwufml5q3nphis->page] = false;
		if ($Vuirvyi0k5j2) {
			$Vnwufml5q3nphis->tocpage = false;
		}
	}

	
	public function startPage($Vt2jwrpps3zv='', $Vmj4iakllwpw='', $Vuirvyi0k5j2=false) {
		if ($Vuirvyi0k5j2) {
			$Vnwufml5q3nphis->tocpage = true;
		}
		
		if ($Vnwufml5q3nphis->tocpage) {
			
			
			$Vcktixcvvjo4 = $Vnwufml5q3nphis->outlines;
			foreach ($Vcktixcvvjo4 as $Vl0q4noiexi4ey => $V11xlf4riwnd) {
				if (!$V11xlf4riwnd['f'] AND ($V11xlf4riwnd['p'] > $Vnwufml5q3nphis->numpages)) {
					$Vnwufml5q3nphis->outlines[$Vl0q4noiexi4ey]['p'] = ($V11xlf4riwnd['p'] + 1);
				}
			}
			
			$Vmk2cev1odi5 = $Vnwufml5q3nphis->dests;
			foreach ($Vmk2cev1odi5 as $Vl0q4noiexi4ey => $Vyyomvjhwdbp) {
				if (!$Vyyomvjhwdbp['f'] AND ($Vyyomvjhwdbp['p'] > $Vnwufml5q3nphis->numpages)) {
					$Vnwufml5q3nphis->dests[$Vl0q4noiexi4ey]['p'] = ($Vyyomvjhwdbp['p'] + 1);
				}
			}
			
			$Vexnitrcll1z = $Vnwufml5q3nphis->links;
			foreach ($Vexnitrcll1z as $Vl0q4noiexi4ey => $Vx3g4ytafo1aink) {
				if (!$Vx3g4ytafo1aink['f'] AND ($Vx3g4ytafo1aink['p'] > $Vnwufml5q3nphis->numpages)) {
					$Vnwufml5q3nphis->links[$Vl0q4noiexi4ey]['p'] = ($Vx3g4ytafo1aink['p'] + 1);
				}
			}
		}
		if ($Vnwufml5q3nphis->numpages > $Vnwufml5q3nphis->page) {
			
			$Vnwufml5q3nphis->setPage($Vnwufml5q3nphis->page + 1);
			$Vnwufml5q3nphis->SetY($Vnwufml5q3nphis->tMargin);
			return;
		}
		
		if ($Vnwufml5q3nphis->state == 0) {
			$Vnwufml5q3nphis->Open();
		}
		++$Vnwufml5q3nphis->numpages;
		$Vnwufml5q3nphis->swapMargins($Vnwufml5q3nphis->booklet);
		
		$Vfbwtdiv4emm = $Vnwufml5q3nphis->getGraphicVars();
		
		$Vnwufml5q3nphis->_beginpage($Vt2jwrpps3zv, $Vmj4iakllwpw);
		
		$Vnwufml5q3nphis->pageopen[$Vnwufml5q3nphis->page] = true;
		
		$Vnwufml5q3nphis->setGraphicVars($Vfbwtdiv4emm);
		
		$Vnwufml5q3nphis->setPageMark();
		
		$Vnwufml5q3nphis->setHeader();
		
		$Vnwufml5q3nphis->setGraphicVars($Vfbwtdiv4emm);
		
		$Vnwufml5q3nphis->setPageMark();
		
		$Vnwufml5q3nphis->setTableHeader();
		
		$Vnwufml5q3nphis->emptypagemrk[$Vnwufml5q3nphis->page]= $Vnwufml5q3nphis->pagelen[$Vnwufml5q3nphis->page];
	}

	
	public function setPageMark() {
		$Vnwufml5q3nphis->intmrk[$Vnwufml5q3nphis->page] = $Vnwufml5q3nphis->pagelen[$Vnwufml5q3nphis->page];
		$Vnwufml5q3nphis->bordermrk[$Vnwufml5q3nphis->page] = $Vnwufml5q3nphis->intmrk[$Vnwufml5q3nphis->page];
		$Vnwufml5q3nphis->setContentMark();
	}

	
	protected function setContentMark($Vwfolue42pzj=0) {
		if ($Vwfolue42pzj <= 0) {
			$Vwfolue42pzj = $Vnwufml5q3nphis->page;
		}
		if (isset($Vnwufml5q3nphis->footerlen[$Vwfolue42pzj])) {
			$Vnwufml5q3nphis->cntmrk[$Vwfolue42pzj] = $Vnwufml5q3nphis->pagelen[$Vwfolue42pzj] - $Vnwufml5q3nphis->footerlen[$Vwfolue42pzj];
		} else {
			$Vnwufml5q3nphis->cntmrk[$Vwfolue42pzj] = $Vnwufml5q3nphis->pagelen[$Vwfolue42pzj];
		}
	}

	
	public function setHeaderData($Vx3g4ytafo1an='', $Vx3g4ytafo1aw=0, $Vvjxcwrp4tjqt='', $Vvjxcwrp4tjqs='', $Vx5f2r0jjzqs=array(0,0,0), $Vx3g4ytafo1ac=array(0,0,0)) {
		$Vnwufml5q3nphis->header_logo = $Vx3g4ytafo1an;
		$Vnwufml5q3nphis->header_logo_width = $Vx3g4ytafo1aw;
		$Vnwufml5q3nphis->header_title = $Vvjxcwrp4tjqt;
		$Vnwufml5q3nphis->header_string = $Vvjxcwrp4tjqs;
		$Vnwufml5q3nphis->header_text_color = $Vx5f2r0jjzqs;
		$Vnwufml5q3nphis->header_line_color = $Vx3g4ytafo1ac;
	}

	
	public function setFooterData($Vx5f2r0jjzqs=array(0,0,0), $Vx3g4ytafo1ac=array(0,0,0)) {
		$Vnwufml5q3nphis->footer_text_color = $Vx5f2r0jjzqs;
		$Vnwufml5q3nphis->footer_line_color = $Vx3g4ytafo1ac;
	}

	
	public function getHeaderData() {
		$V14ltds3prprt = array();
		$V14ltds3prprt['logo'] = $Vnwufml5q3nphis->header_logo;
		$V14ltds3prprt['logo_width'] = $Vnwufml5q3nphis->header_logo_width;
		$V14ltds3prprt['title'] = $Vnwufml5q3nphis->header_title;
		$V14ltds3prprt['string'] = $Vnwufml5q3nphis->header_string;
		$V14ltds3prprt['text_color'] = $Vnwufml5q3nphis->header_text_color;
		$V14ltds3prprt['line_color'] = $Vnwufml5q3nphis->header_line_color;
		return $V14ltds3prprt;
	}

	
	public function setHeaderMargin($Vvjxcwrp4tjqm=10) {
		$Vnwufml5q3nphis->header_margin = $Vvjxcwrp4tjqm;
	}

	
	public function getHeaderMargin() {
		return $Vnwufml5q3nphis->header_margin;
	}

	
	public function setFooterMargin($Vh03plp4pqtp=10) {
		$Vnwufml5q3nphis->footer_margin = $Vh03plp4pqtp;
	}

	
	public function getFooterMargin() {
		return $Vnwufml5q3nphis->footer_margin;
	}
	
	public function setPrintHeader($Vxt4wx3pvtez=true) {
		$Vnwufml5q3nphis->print_header = $Vxt4wx3pvtez ? true : false;
	}

	
	public function setPrintFooter($Vxt4wx3pvtez=true) {
		$Vnwufml5q3nphis->print_footer = $Vxt4wx3pvtez ? true : false;
	}

	
	public function getImageRBX() {
		return $Vnwufml5q3nphis->img_rb_x;
	}

	
	public function getImageRBY() {
		return $Vnwufml5q3nphis->img_rb_y;
	}

	
	public function resetHeaderTemplate() {
		$Vnwufml5q3nphis->header_xobjid = false;
	}

	
	public function setHeaderTemplateAutoreset($Vxt4wx3pvtez=true) {
		$Vnwufml5q3nphis->header_xobj_autoreset = $Vxt4wx3pvtez ? true : false;
	}

	
	public function Header() {
		if ($Vnwufml5q3nphis->header_xobjid === false) {
			
			$Vnwufml5q3nphis->header_xobjid = $Vnwufml5q3nphis->startTemplate($Vnwufml5q3nphis->w, $Vnwufml5q3nphis->tMargin);
			$Vvjxcwrp4tjqeaderfont = $Vnwufml5q3nphis->getHeaderFont();
			$Vvjxcwrp4tjqeaderdata = $Vnwufml5q3nphis->getHeaderData();
			$Vnwufml5q3nphis->y = $Vnwufml5q3nphis->header_margin;
			if ($Vnwufml5q3nphis->rtl) {
				$Vnwufml5q3nphis->x = $Vnwufml5q3nphis->w - $Vnwufml5q3nphis->original_rMargin;
			} else {
				$Vnwufml5q3nphis->x = $Vnwufml5q3nphis->original_lMargin;
			}
			if (($Vvjxcwrp4tjqeaderdata['logo']) AND ($Vvjxcwrp4tjqeaderdata['logo'] != K_BLANK_IMAGE)) {
				$V55vc4mewy5wmgtype = TCPDF_IMAGES::getImageFileType(K_PATH_IMAGES.$Vvjxcwrp4tjqeaderdata['logo']);
				if (($V55vc4mewy5wmgtype == 'eps') OR ($V55vc4mewy5wmgtype == 'ai')) {
					$Vnwufml5q3nphis->ImageEps(K_PATH_IMAGES.$Vvjxcwrp4tjqeaderdata['logo'], '', '', $Vvjxcwrp4tjqeaderdata['logo_width']);
				} elseif ($V55vc4mewy5wmgtype == 'svg') {
					$Vnwufml5q3nphis->ImageSVG(K_PATH_IMAGES.$Vvjxcwrp4tjqeaderdata['logo'], '', '', $Vvjxcwrp4tjqeaderdata['logo_width']);
				} else {
					$Vnwufml5q3nphis->Image(K_PATH_IMAGES.$Vvjxcwrp4tjqeaderdata['logo'], '', '', $Vvjxcwrp4tjqeaderdata['logo_width']);
				}
				$V55vc4mewy5wmgy = $Vnwufml5q3nphis->getImageRBY();
			} else {
				$V55vc4mewy5wmgy = $Vnwufml5q3nphis->y;
			}
			$Vdc5zqazi0gr = $Vnwufml5q3nphis->getCellHeight($Vvjxcwrp4tjqeaderfont[2] / $Vnwufml5q3nphis->k);
			
			if ($Vnwufml5q3nphis->getRTL()) {
				$Vvjxcwrp4tjqeader_x = $Vnwufml5q3nphis->original_rMargin + ($Vvjxcwrp4tjqeaderdata['logo_width'] * 1.1);
			} else {
				$Vvjxcwrp4tjqeader_x = $Vnwufml5q3nphis->original_lMargin + ($Vvjxcwrp4tjqeaderdata['logo_width'] * 1.1);
			}
			$V5k0cete3fo0 = $Vnwufml5q3nphis->w - $Vnwufml5q3nphis->original_lMargin - $Vnwufml5q3nphis->original_rMargin - ($Vvjxcwrp4tjqeaderdata['logo_width'] * 1.1);
			$Vnwufml5q3nphis->SetTextColorArray($Vnwufml5q3nphis->header_text_color);
			
			$Vnwufml5q3nphis->SetFont($Vvjxcwrp4tjqeaderfont[0], 'B', $Vvjxcwrp4tjqeaderfont[2] + 1);
			$Vnwufml5q3nphis->SetX($Vvjxcwrp4tjqeader_x);
			$Vnwufml5q3nphis->Cell($V5k0cete3fo0, $Vdc5zqazi0gr, $Vvjxcwrp4tjqeaderdata['title'], 0, 1, '', 0, '', 0);
			
			$Vnwufml5q3nphis->SetFont($Vvjxcwrp4tjqeaderfont[0], $Vvjxcwrp4tjqeaderfont[1], $Vvjxcwrp4tjqeaderfont[2]);
			$Vnwufml5q3nphis->SetX($Vvjxcwrp4tjqeader_x);
			$Vnwufml5q3nphis->MultiCell($V5k0cete3fo0, $Vdc5zqazi0gr, $Vvjxcwrp4tjqeaderdata['string'], 0, '', 0, 1, '', '', true, 0, false, true, 0, 'T', false);
			
			$Vnwufml5q3nphis->SetLineStyle(array('width' => 0.85 / $Vnwufml5q3nphis->k, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => $Vvjxcwrp4tjqeaderdata['line_color']));
			$Vnwufml5q3nphis->SetY((2.835 / $Vnwufml5q3nphis->k) + max($V55vc4mewy5wmgy, $Vnwufml5q3nphis->y));
			if ($Vnwufml5q3nphis->rtl) {
				$Vnwufml5q3nphis->SetX($Vnwufml5q3nphis->original_rMargin);
			} else {
				$Vnwufml5q3nphis->SetX($Vnwufml5q3nphis->original_lMargin);
			}
			
			$Vnwufml5q3nphis->endTemplate();
		}
		
		$Vangwoo3ejfg = 0;
		$Vvpx14gmiarn = 0;
		if (!$Vnwufml5q3nphis->header_xobj_autoreset AND $Vnwufml5q3nphis->booklet AND (($Vnwufml5q3nphis->page % 2) == 0)) {
			
			$Vvpx14gmiarn = ($Vnwufml5q3nphis->original_lMargin - $Vnwufml5q3nphis->original_rMargin);
		}
		if ($Vnwufml5q3nphis->rtl) {
			$Vangwoo3ejfg = $Vnwufml5q3nphis->w + $Vvpx14gmiarn;
		} else {
			$Vangwoo3ejfg = 0 + $Vvpx14gmiarn;
		}
		$Vnwufml5q3nphis->printTemplate($Vnwufml5q3nphis->header_xobjid, $Vangwoo3ejfg, 0, 0, 0, '', '', false);
		if ($Vnwufml5q3nphis->header_xobj_autoreset) {
			
			$Vnwufml5q3nphis->header_xobjid = false;
		}
	}

	
	public function Footer() {
		$Vgil2jcxdqdf = $Vnwufml5q3nphis->y;
		$Vnwufml5q3nphis->SetTextColorArray($Vnwufml5q3nphis->footer_text_color);
		
		$Vx3g4ytafo1aine_width = (0.85 / $Vnwufml5q3nphis->k);
		$Vnwufml5q3nphis->SetLineStyle(array('width' => $Vx3g4ytafo1aine_width, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => $Vnwufml5q3nphis->footer_line_color));
		
		$Votyidhr1bs1 = $Vnwufml5q3nphis->getBarcode();
		if (!empty($Votyidhr1bs1)) {
			$Vnwufml5q3nphis->Ln($Vx3g4ytafo1aine_width);
			$Votyidhr1bs1_width = round(($Vnwufml5q3nphis->w - $Vnwufml5q3nphis->original_lMargin - $Vnwufml5q3nphis->original_rMargin) / 3);
			$Vovexk3mzujo = array(
				'position' => $Vnwufml5q3nphis->rtl?'R':'L',
				'align' => $Vnwufml5q3nphis->rtl?'R':'L',
				'stretch' => false,
				'fitwidth' => true,
				'cellfitalign' => '',
				'border' => false,
				'padding' => 0,
				'fgcolor' => array(0,0,0),
				'bgcolor' => false,
				'text' => false
			);
			$Vnwufml5q3nphis->write1DBarcode($Votyidhr1bs1, 'C128', '', $Vgil2jcxdqdf + $Vx3g4ytafo1aine_width, '', (($Vnwufml5q3nphis->footer_margin / 3) - $Vx3g4ytafo1aine_width), 0.3, $Vovexk3mzujo, '');
		}
		$Vim12f51jw5r_page = isset($Vnwufml5q3nphis->l['w_page']) ? $Vnwufml5q3nphis->l['w_page'].' ' : '';
		if (empty($Vnwufml5q3nphis->pagegroups)) {
			$Vwfolue42pzjnumtxt = $Vim12f51jw5r_page.$Vnwufml5q3nphis->getAliasNumPage().' / '.$Vnwufml5q3nphis->getAliasNbPages();
		} else {
			$Vwfolue42pzjnumtxt = $Vim12f51jw5r_page.$Vnwufml5q3nphis->getPageNumGroupAlias().' / '.$Vnwufml5q3nphis->getPageGroupAlias();
		}
		$Vnwufml5q3nphis->SetY($Vgil2jcxdqdf);
		
		if ($Vnwufml5q3nphis->getRTL()) {
			$Vnwufml5q3nphis->SetX($Vnwufml5q3nphis->original_rMargin);
			$Vnwufml5q3nphis->Cell(0, 0, $Vwfolue42pzjnumtxt, 'T', 0, 'L');
		} else {
			$Vnwufml5q3nphis->SetX($Vnwufml5q3nphis->original_lMargin);
			$Vnwufml5q3nphis->Cell(0, 0, $Vnwufml5q3nphis->getAliasRightShift().$Vwfolue42pzjnumtxt, 'T', 0, 'R');
		}
	}

	
	protected function setHeader() {
		if (!$Vnwufml5q3nphis->print_header OR ($Vnwufml5q3nphis->state != 2)) {
			return;
		}
		$Vnwufml5q3nphis->InHeader = true;
		$Vnwufml5q3nphis->setGraphicVars($Vnwufml5q3nphis->default_graphic_vars);
		$Vcj4eek3pz1a = $Vnwufml5q3nphis->thead;
		$Vcj4eek3pz1aMargins = $Vnwufml5q3nphis->theadMargins;
		$Vafaqck21bmy = $Vnwufml5q3nphis->lasth;
		$Vgv45dfhsyuhewline = $Vnwufml5q3nphis->newline;
		$Vnwufml5q3nphis->_outSaveGraphicsState();
		$Vnwufml5q3nphis->rMargin = $Vnwufml5q3nphis->original_rMargin;
		$Vnwufml5q3nphis->lMargin = $Vnwufml5q3nphis->original_lMargin;
		$Vnwufml5q3nphis->SetCellPadding(0);
		
		if ($Vnwufml5q3nphis->rtl) {
			$Vnwufml5q3nphis->SetXY($Vnwufml5q3nphis->original_rMargin, $Vnwufml5q3nphis->header_margin);
		} else {
			$Vnwufml5q3nphis->SetXY($Vnwufml5q3nphis->original_lMargin, $Vnwufml5q3nphis->header_margin);
		}
		$Vnwufml5q3nphis->SetFont($Vnwufml5q3nphis->header_font[0], $Vnwufml5q3nphis->header_font[1], $Vnwufml5q3nphis->header_font[2]);
		$Vnwufml5q3nphis->Header();
		
		if ($Vnwufml5q3nphis->rtl) {
			$Vnwufml5q3nphis->SetXY($Vnwufml5q3nphis->original_rMargin, $Vnwufml5q3nphis->tMargin);
		} else {
			$Vnwufml5q3nphis->SetXY($Vnwufml5q3nphis->original_lMargin, $Vnwufml5q3nphis->tMargin);
		}
		$Vnwufml5q3nphis->_outRestoreGraphicsState();
		$Vnwufml5q3nphis->lasth = $Vafaqck21bmy;
		$Vnwufml5q3nphis->thead = $Vcj4eek3pz1a;
		$Vnwufml5q3nphis->theadMargins = $Vcj4eek3pz1aMargins;
		$Vnwufml5q3nphis->newline = $Vgv45dfhsyuhewline;
		$Vnwufml5q3nphis->InHeader = false;
	}

	
	protected function setFooter() {
		if ($Vnwufml5q3nphis->state != 2) {
			return;
		}
		$Vnwufml5q3nphis->InFooter = true;
		
		$Vfbwtdiv4emm = $Vnwufml5q3nphis->getGraphicVars();
		
		$Vnwufml5q3nphis->footerpos[$Vnwufml5q3nphis->page] = $Vnwufml5q3nphis->pagelen[$Vnwufml5q3nphis->page];
		$Vnwufml5q3nphis->_out("\n");
		if ($Vnwufml5q3nphis->print_footer) {
			$Vnwufml5q3nphis->setGraphicVars($Vnwufml5q3nphis->default_graphic_vars);
			$Vnwufml5q3nphis->current_column = 0;
			$Vnwufml5q3nphis->num_columns = 1;
			$Vcj4eek3pz1a = $Vnwufml5q3nphis->thead;
			$Vcj4eek3pz1aMargins = $Vnwufml5q3nphis->theadMargins;
			$Vafaqck21bmy = $Vnwufml5q3nphis->lasth;
			$Vnwufml5q3nphis->_outSaveGraphicsState();
			$Vnwufml5q3nphis->rMargin = $Vnwufml5q3nphis->original_rMargin;
			$Vnwufml5q3nphis->lMargin = $Vnwufml5q3nphis->original_lMargin;
			$Vnwufml5q3nphis->SetCellPadding(0);
			
			$Vsnco2veorhe = $Vnwufml5q3nphis->h - $Vnwufml5q3nphis->footer_margin;
			if ($Vnwufml5q3nphis->rtl) {
				$Vnwufml5q3nphis->SetXY($Vnwufml5q3nphis->original_rMargin, $Vsnco2veorhe);
			} else {
				$Vnwufml5q3nphis->SetXY($Vnwufml5q3nphis->original_lMargin, $Vsnco2veorhe);
			}
			$Vnwufml5q3nphis->SetFont($Vnwufml5q3nphis->footer_font[0], $Vnwufml5q3nphis->footer_font[1], $Vnwufml5q3nphis->footer_font[2]);
			$Vnwufml5q3nphis->Footer();
			
			if ($Vnwufml5q3nphis->rtl) {
				$Vnwufml5q3nphis->SetXY($Vnwufml5q3nphis->original_rMargin, $Vnwufml5q3nphis->tMargin);
			} else {
				$Vnwufml5q3nphis->SetXY($Vnwufml5q3nphis->original_lMargin, $Vnwufml5q3nphis->tMargin);
			}
			$Vnwufml5q3nphis->_outRestoreGraphicsState();
			$Vnwufml5q3nphis->lasth = $Vafaqck21bmy;
			$Vnwufml5q3nphis->thead = $Vcj4eek3pz1a;
			$Vnwufml5q3nphis->theadMargins = $Vcj4eek3pz1aMargins;
		}
		
		$Vnwufml5q3nphis->setGraphicVars($Vfbwtdiv4emm);
		$Vnwufml5q3nphis->current_column = $Vfbwtdiv4emm['current_column'];
		$Vnwufml5q3nphis->num_columns = $Vfbwtdiv4emm['num_columns'];
		
		$Vnwufml5q3nphis->footerlen[$Vnwufml5q3nphis->page] = $Vnwufml5q3nphis->pagelen[$Vnwufml5q3nphis->page] - $Vnwufml5q3nphis->footerpos[$Vnwufml5q3nphis->page] + 1;
		$Vnwufml5q3nphis->InFooter = false;
	}

	
	protected function inPageBody() {
		return (($Vnwufml5q3nphis->InHeader === false) AND ($Vnwufml5q3nphis->InFooter === false));
	}

	
	protected function setTableHeader() {
		if ($Vnwufml5q3nphis->num_columns > 1) {
			
			return;
		}
		if (isset($Vnwufml5q3nphis->theadMargins['top'])) {
			
			$Vnwufml5q3nphis->tMargin = $Vnwufml5q3nphis->theadMargins['top'];
			$Vnwufml5q3nphis->pagedim[$Vnwufml5q3nphis->page]['tm'] = $Vnwufml5q3nphis->tMargin;
			$Vnwufml5q3nphis->y = $Vnwufml5q3nphis->tMargin;
		}
		if (!TCPDF_STATIC::empty_string($Vnwufml5q3nphis->thead) AND (!$Vnwufml5q3nphis->inthead)) {
			
			$Vl4uenip5a55 = $Vnwufml5q3nphis->lMargin;
			$Vvw2l1jcg5n1 = $Vnwufml5q3nphis->rMargin;
			$Vsaczmrtqtgw = $Vnwufml5q3nphis->cell_padding;
			$Vnwufml5q3nphis->lMargin = $Vnwufml5q3nphis->theadMargins['lmargin'] + ($Vnwufml5q3nphis->pagedim[$Vnwufml5q3nphis->page]['olm'] - $Vnwufml5q3nphis->pagedim[$Vnwufml5q3nphis->theadMargins['page']]['olm']);
			$Vnwufml5q3nphis->rMargin = $Vnwufml5q3nphis->theadMargins['rmargin'] + ($Vnwufml5q3nphis->pagedim[$Vnwufml5q3nphis->page]['orm'] - $Vnwufml5q3nphis->pagedim[$Vnwufml5q3nphis->theadMargins['page']]['orm']);
			$Vnwufml5q3nphis->cell_padding = $Vnwufml5q3nphis->theadMargins['cell_padding'];
			if ($Vnwufml5q3nphis->rtl) {
				$Vnwufml5q3nphis->x = $Vnwufml5q3nphis->w - $Vnwufml5q3nphis->rMargin;
			} else {
				$Vnwufml5q3nphis->x = $Vnwufml5q3nphis->lMargin;
			}
			
			if ($Vnwufml5q3nphis->theadMargins['cell']) {
				if ($Vnwufml5q3nphis->rtl) {
					$Vnwufml5q3nphis->x -= $Vnwufml5q3nphis->cell_padding['R'];
				} else {
					$Vnwufml5q3nphis->x += $Vnwufml5q3nphis->cell_padding['L'];
				}
			}
			$Vfbwtdiv4emm = $Vnwufml5q3nphis->getGraphicVars();
			if (!empty($Vnwufml5q3nphis->theadMargins['gvars'])) {
				
				$Vnwufml5q3nphis->setGraphicVars($Vnwufml5q3nphis->theadMargins['gvars']);
				$Vnwufml5q3nphis->rMargin = $Vfbwtdiv4emm['rMargin'];
				$Vnwufml5q3nphis->lMargin = $Vfbwtdiv4emm['lMargin'];
			}
			
			$Vnwufml5q3nphis->writeHTML($Vnwufml5q3nphis->thead, false, false, false, false, '');
			$Vnwufml5q3nphis->setGraphicVars($Vfbwtdiv4emm);
			
			if (!isset($Vnwufml5q3nphis->theadMargins['top'])) {
				$Vnwufml5q3nphis->theadMargins['top'] = $Vnwufml5q3nphis->tMargin;
			}
			
			if (!isset($Vnwufml5q3nphis->columns[0]['th'])) {
				$Vnwufml5q3nphis->columns[0]['th'] = array();
			}
			$Vnwufml5q3nphis->columns[0]['th']['\''.$Vnwufml5q3nphis->page.'\''] = $Vnwufml5q3nphis->y;
			$Vnwufml5q3nphis->tMargin = $Vnwufml5q3nphis->y;
			$Vnwufml5q3nphis->pagedim[$Vnwufml5q3nphis->page]['tm'] = $Vnwufml5q3nphis->tMargin;
			$Vnwufml5q3nphis->lasth = 0;
			$Vnwufml5q3nphis->lMargin = $Vl4uenip5a55;
			$Vnwufml5q3nphis->rMargin = $Vvw2l1jcg5n1;
			$Vnwufml5q3nphis->cell_padding = $Vsaczmrtqtgw;
		}
	}

	
	public function PageNo() {
		return $Vnwufml5q3nphis->page;
	}

	
	public function getAllSpotColors() {
		return $Vnwufml5q3nphis->spot_colors;
	}

	
	public function AddSpotColor($Vgv45dfhsyuhame, $Vwcmlurixvzg, $Vetludueqmbt, $Vgxufordoa4t, $Vl0q4noiexi4) {
		if (!isset($Vnwufml5q3nphis->spot_colors[$Vgv45dfhsyuhame])) {
			$V55vc4mewy5w = (1 + count($Vnwufml5q3nphis->spot_colors));
			$Vnwufml5q3nphis->spot_colors[$Vgv45dfhsyuhame] = array('C' => $Vwcmlurixvzg, 'M' => $Vetludueqmbt, 'Y' => $Vgxufordoa4t, 'K' => $Vl0q4noiexi4, 'name' => $Vgv45dfhsyuhame, 'i' => $V55vc4mewy5w);
		}
	}

	
	public function setSpotColor($Vvmwm1jsklgc, $Vgv45dfhsyuhame, $Vveoskjdsonb=100) {
		$Vdntm0gtseuc = TCPDF_COLORS::getSpotColor($Vgv45dfhsyuhame, $Vnwufml5q3nphis->spot_colors);
		if ($Vdntm0gtseuc === false) {
			$Vnwufml5q3nphis->Error('Undefined spot color: '.$Vgv45dfhsyuhame.', you must add it using the AddSpotColor() method.');
		}
		$Vveoskjdsonb = (max(0, min(100, $Vveoskjdsonb)) / 100);
		$Vy1k5nswxfgv = sprintf('/CS%d ', $Vnwufml5q3nphis->spot_colors[$Vgv45dfhsyuhame]['i']);
		switch ($Vvmwm1jsklgc) {
			case 'draw': {
				$Vy1k5nswxfgv .= sprintf('CS %F SCN', $Vveoskjdsonb);
				$Vnwufml5q3nphis->DrawColor = $Vy1k5nswxfgv;
				$Vnwufml5q3nphis->strokecolor = $Vdntm0gtseuc;
				break;
			}
			case 'fill': {
				$Vy1k5nswxfgv .= sprintf('cs %F scn', $Vveoskjdsonb);
				$Vnwufml5q3nphis->FillColor = $Vy1k5nswxfgv;
				$Vnwufml5q3nphis->bgcolor = $Vdntm0gtseuc;
				break;
			}
			case 'text': {
				$Vy1k5nswxfgv .= sprintf('cs %F scn', $Vveoskjdsonb);
				$Vnwufml5q3nphis->TextColor = $Vy1k5nswxfgv;
				$Vnwufml5q3nphis->fgcolor = $Vdntm0gtseuc;
				break;
			}
		}
		$Vnwufml5q3nphis->ColorFlag = ($Vnwufml5q3nphis->FillColor != $Vnwufml5q3nphis->TextColor);
		if ($Vnwufml5q3nphis->state == 2) {
			$Vnwufml5q3nphis->_out($Vy1k5nswxfgv);
		}
		if ($Vnwufml5q3nphis->inxobj) {
			
			$Vnwufml5q3nphis->xobjects[$Vnwufml5q3nphis->xobjid]['spot_colors'][$Vgv45dfhsyuhame] = $Vnwufml5q3nphis->spot_colors[$Vgv45dfhsyuhame];
		}
		return $Vy1k5nswxfgv;
	}

	
	public function SetDrawSpotColor($Vgv45dfhsyuhame, $Vveoskjdsonb=100) {
		$Vnwufml5q3nphis->setSpotColor('draw', $Vgv45dfhsyuhame, $Vveoskjdsonb);
	}

	
	public function SetFillSpotColor($Vgv45dfhsyuhame, $Vveoskjdsonb=100) {
		$Vnwufml5q3nphis->setSpotColor('fill', $Vgv45dfhsyuhame, $Vveoskjdsonb);
	}

	
	public function SetTextSpotColor($Vgv45dfhsyuhame, $Vveoskjdsonb=100) {
		$Vnwufml5q3nphis->setSpotColor('text', $Vgv45dfhsyuhame, $Vveoskjdsonb);
	}

	
	public function setColorArray($Vvmwm1jsklgc, $Vwcmlurixvzgolor, $V14ltds3prprt=false) {
		if (is_array($Vwcmlurixvzgolor)) {
			$Vwcmlurixvzgolor = array_values($Vwcmlurixvzgolor);
			
			$Vwcmlurixvzg = isset($Vwcmlurixvzgolor[0]) ? $Vwcmlurixvzgolor[0] : -1;
			
			$Vetludueqmbt = isset($Vwcmlurixvzgolor[1]) ? $Vwcmlurixvzgolor[1] : -1;
			
			$Vgxufordoa4t = isset($Vwcmlurixvzgolor[2]) ? $Vwcmlurixvzgolor[2] : -1;
			
			$Vl0q4noiexi4 = isset($Vwcmlurixvzgolor[3]) ? $Vwcmlurixvzgolor[3] : -1;
			
			$Vgv45dfhsyuhame = isset($Vwcmlurixvzgolor[4]) ? $Vwcmlurixvzgolor[4] : '';
			if ($Vwcmlurixvzg >= 0) {
				return $Vnwufml5q3nphis->setColor($Vvmwm1jsklgc, $Vwcmlurixvzg, $Vetludueqmbt, $Vgxufordoa4t, $Vl0q4noiexi4, $V14ltds3prprt, $Vgv45dfhsyuhame);
			}
		}
		return '';
	}

	
	public function SetDrawColorArray($Vwcmlurixvzgolor, $V14ltds3prprt=false) {
		return $Vnwufml5q3nphis->setColorArray('draw', $Vwcmlurixvzgolor, $V14ltds3prprt);
	}

	
	public function SetFillColorArray($Vwcmlurixvzgolor, $V14ltds3prprt=false) {
		return $Vnwufml5q3nphis->setColorArray('fill', $Vwcmlurixvzgolor, $V14ltds3prprt);
	}

	
	public function SetTextColorArray($Vwcmlurixvzgolor, $V14ltds3prprt=false) {
		return $Vnwufml5q3nphis->setColorArray('text', $Vwcmlurixvzgolor, $V14ltds3prprt);
	}

	
	public function setColor($Vvmwm1jsklgc, $Vwcmlurixvzgol1=0, $Vwcmlurixvzgol2=-1, $Vwcmlurixvzgol3=-1, $Vwcmlurixvzgol4=-1, $V14ltds3prprt=false, $Vgv45dfhsyuhame='') {
		
		if (!is_numeric($Vwcmlurixvzgol1)) {
			$Vwcmlurixvzgol1 = 0;
		}
		if (!is_numeric($Vwcmlurixvzgol2)) {
			$Vwcmlurixvzgol2 = -1;
		}
		if (!is_numeric($Vwcmlurixvzgol3)) {
			$Vwcmlurixvzgol3 = -1;
		}
		if (!is_numeric($Vwcmlurixvzgol4)) {
			$Vwcmlurixvzgol4 = -1;
		}
		
		$Vptzp4flc4md = '';
		if (($Vwcmlurixvzgol2 == -1) AND ($Vwcmlurixvzgol3 == -1) AND ($Vwcmlurixvzgol4 == -1)) {
			
			$Vwcmlurixvzgol1 = max(0, min(255, $Vwcmlurixvzgol1));
			$V55vc4mewy5wntcolor = array('G' => $Vwcmlurixvzgol1);
			$Vy1k5nswxfgv = sprintf('%F ', ($Vwcmlurixvzgol1 / 255));
			$Vptzp4flc4md = 'g';
		} elseif ($Vwcmlurixvzgol4 == -1) {
			
			$Vwcmlurixvzgol1 = max(0, min(255, $Vwcmlurixvzgol1));
			$Vwcmlurixvzgol2 = max(0, min(255, $Vwcmlurixvzgol2));
			$Vwcmlurixvzgol3 = max(0, min(255, $Vwcmlurixvzgol3));
			$V55vc4mewy5wntcolor = array('R' => $Vwcmlurixvzgol1, 'G' => $Vwcmlurixvzgol2, 'B' => $Vwcmlurixvzgol3);
			$Vy1k5nswxfgv = sprintf('%F %F %F ', ($Vwcmlurixvzgol1 / 255), ($Vwcmlurixvzgol2 / 255), ($Vwcmlurixvzgol3 / 255));
			$Vptzp4flc4md = 'rg';
		} else {
			$Vwcmlurixvzgol1 = max(0, min(100, $Vwcmlurixvzgol1));
			$Vwcmlurixvzgol2 = max(0, min(100, $Vwcmlurixvzgol2));
			$Vwcmlurixvzgol3 = max(0, min(100, $Vwcmlurixvzgol3));
			$Vwcmlurixvzgol4 = max(0, min(100, $Vwcmlurixvzgol4));
			if (empty($Vgv45dfhsyuhame)) {
				
				$V55vc4mewy5wntcolor = array('C' => $Vwcmlurixvzgol1, 'M' => $Vwcmlurixvzgol2, 'Y' => $Vwcmlurixvzgol3, 'K' => $Vwcmlurixvzgol4);
				$Vy1k5nswxfgv = sprintf('%F %F %F %F ', ($Vwcmlurixvzgol1 / 100), ($Vwcmlurixvzgol2 / 100), ($Vwcmlurixvzgol3 / 100), ($Vwcmlurixvzgol4 / 100));
				$Vptzp4flc4md = 'k';
			} else {
				
				$V55vc4mewy5wntcolor = array('C' => $Vwcmlurixvzgol1, 'M' => $Vwcmlurixvzgol2, 'Y' => $Vwcmlurixvzgol3, 'K' => $Vwcmlurixvzgol4, 'name' => $Vgv45dfhsyuhame);
				$Vnwufml5q3nphis->AddSpotColor($Vgv45dfhsyuhame, $Vwcmlurixvzgol1, $Vwcmlurixvzgol2, $Vwcmlurixvzgol3, $Vwcmlurixvzgol4);
				$Vy1k5nswxfgv = $Vnwufml5q3nphis->setSpotColor($Vvmwm1jsklgc, $Vgv45dfhsyuhame, 100);
			}
		}
		switch ($Vvmwm1jsklgc) {
			case 'draw': {
				$Vy1k5nswxfgv .= strtoupper($Vptzp4flc4md);
				$Vnwufml5q3nphis->DrawColor = $Vy1k5nswxfgv;
				$Vnwufml5q3nphis->strokecolor = $V55vc4mewy5wntcolor;
				break;
			}
			case 'fill': {
				$Vy1k5nswxfgv .= $Vptzp4flc4md;
				$Vnwufml5q3nphis->FillColor = $Vy1k5nswxfgv;
				$Vnwufml5q3nphis->bgcolor = $V55vc4mewy5wntcolor;
				break;
			}
			case 'text': {
				$Vy1k5nswxfgv .= $Vptzp4flc4md;
				$Vnwufml5q3nphis->TextColor = $Vy1k5nswxfgv;
				$Vnwufml5q3nphis->fgcolor = $V55vc4mewy5wntcolor;
				break;
			}
		}
		$Vnwufml5q3nphis->ColorFlag = ($Vnwufml5q3nphis->FillColor != $Vnwufml5q3nphis->TextColor);
		if (($Vvmwm1jsklgc != 'text') AND ($Vnwufml5q3nphis->state == 2)) {
			if (!$V14ltds3prprt) {
				$Vnwufml5q3nphis->_out($Vy1k5nswxfgv);
			}
			return $Vy1k5nswxfgv;
		}
		return '';
	}

	
	public function SetDrawColor($Vwcmlurixvzgol1=0, $Vwcmlurixvzgol2=-1, $Vwcmlurixvzgol3=-1, $Vwcmlurixvzgol4=-1, $V14ltds3prprt=false, $Vgv45dfhsyuhame='') {
		return $Vnwufml5q3nphis->setColor('draw', $Vwcmlurixvzgol1, $Vwcmlurixvzgol2, $Vwcmlurixvzgol3, $Vwcmlurixvzgol4, $V14ltds3prprt, $Vgv45dfhsyuhame);
	}

	
	public function SetFillColor($Vwcmlurixvzgol1=0, $Vwcmlurixvzgol2=-1, $Vwcmlurixvzgol3=-1, $Vwcmlurixvzgol4=-1, $V14ltds3prprt=false, $Vgv45dfhsyuhame='') {
		return $Vnwufml5q3nphis->setColor('fill', $Vwcmlurixvzgol1, $Vwcmlurixvzgol2, $Vwcmlurixvzgol3, $Vwcmlurixvzgol4, $V14ltds3prprt, $Vgv45dfhsyuhame);
	}

	
	public function SetTextColor($Vwcmlurixvzgol1=0, $Vwcmlurixvzgol2=-1, $Vwcmlurixvzgol3=-1, $Vwcmlurixvzgol4=-1, $V14ltds3prprt=false, $Vgv45dfhsyuhame='') {
		return $Vnwufml5q3nphis->setColor('text', $Vwcmlurixvzgol1, $Vwcmlurixvzgol2, $Vwcmlurixvzgol3, $Vwcmlurixvzgol4, $V14ltds3prprt, $Vgv45dfhsyuhame);
	}

	
	public function GetStringWidth($Vvt20qqut4bu, $Voc1qigl3k5yname='', $Vshfhqyg5vyrtyle='', $Vshfhqyg5vyrize=0, $Vqb4s2ksxwfc=false) {
		return $Vnwufml5q3nphis->GetArrStringWidth(TCPDF_FONTS::utf8Bidi(TCPDF_FONTS::UTF8StringToArray($Vvt20qqut4bu, $Vnwufml5q3nphis->isunicode, $Vnwufml5q3nphis->CurrentFont), $Vvt20qqut4bu, $Vnwufml5q3nphis->tmprtl, $Vnwufml5q3nphis->isunicode, $Vnwufml5q3nphis->CurrentFont), $Voc1qigl3k5yname, $Vshfhqyg5vyrtyle, $Vshfhqyg5vyrize, $Vqb4s2ksxwfc);
	}

	
	public function GetArrStringWidth($Vvt20qqut4bua, $Voc1qigl3k5yname='', $Vshfhqyg5vyrtyle='', $Vshfhqyg5vyrize=0, $Vqb4s2ksxwfc=false) {
		
		if (!TCPDF_STATIC::empty_string($Voc1qigl3k5yname)) {
			$Vpafrnnzwy4d = $Vnwufml5q3nphis->FontFamily;
			$Vtcsws0e0deh = $Vnwufml5q3nphis->FontStyle;
			$Vysssyorkxwh = $Vnwufml5q3nphis->FontSizePt;
			$Vnwufml5q3nphis->SetFont($Voc1qigl3k5yname, $Vshfhqyg5vyrtyle, $Vshfhqyg5vyrize, '', 'default', false);
		}
		
		if ($Vnwufml5q3nphis->isunicode AND (!$Vnwufml5q3nphis->isUnicodeFont())) {
			$Vvt20qqut4bua = TCPDF_FONTS::UTF8ArrToLatin1Arr($Vvt20qqut4bua);
		}
		$Vim12f51jw5r = 0; 
		$Vim12f51jw5ra = array(); 
		foreach ($Vvt20qqut4bua as $Vwcmlurixvzgk => $Vwcmlurixvzghar) {
			
			$V5k0cete3fo0 = $Vnwufml5q3nphis->GetCharWidth($Vwcmlurixvzghar, isset($Vvt20qqut4bua[($Vwcmlurixvzgk + 1)]));
			$Vim12f51jw5ra[] = $V5k0cete3fo0;
			$Vim12f51jw5r += $V5k0cete3fo0;
		}
		
		if (!TCPDF_STATIC::empty_string($Voc1qigl3k5yname)) {
			$Vnwufml5q3nphis->SetFont($Vpafrnnzwy4d, $Vtcsws0e0deh, $Vysssyorkxwh, '', 'default', false);
		}
		if ($Vqb4s2ksxwfc) {
			return $Vim12f51jw5ra;
		}
		return $Vim12f51jw5r;
	}

	
	public function GetCharWidth($Vwcmlurixvzghar, $Vgv45dfhsyuhotlast=true) {
		
		$Vwcmlurixvzghw = $Vnwufml5q3nphis->getRawCharWidth($Vwcmlurixvzghar);
		if (($Vnwufml5q3nphis->font_spacing < 0) OR (($Vnwufml5q3nphis->font_spacing > 0) AND $Vgv45dfhsyuhotlast)) {
			
			$Vwcmlurixvzghw += $Vnwufml5q3nphis->font_spacing;
		}
		if ($Vnwufml5q3nphis->font_stretching != 100) {
			
			$Vwcmlurixvzghw *= ($Vnwufml5q3nphis->font_stretching / 100);
		}
		return $Vwcmlurixvzghw;
	}

	
	public function getRawCharWidth($Vwcmlurixvzghar) {
		if ($Vwcmlurixvzghar == 173) {
			
			return (0);
		}
		if (isset($Vnwufml5q3nphis->CurrentFont['cw'][$Vwcmlurixvzghar])) {
			$Vim12f51jw5r = $Vnwufml5q3nphis->CurrentFont['cw'][$Vwcmlurixvzghar];
		} elseif (isset($Vnwufml5q3nphis->CurrentFont['dw'])) {
			
			$Vim12f51jw5r = $Vnwufml5q3nphis->CurrentFont['dw'];
		} elseif (isset($Vnwufml5q3nphis->CurrentFont['cw'][32])) {
			
			$Vim12f51jw5r = $Vnwufml5q3nphis->CurrentFont['cw'][32];
		} else {
			$Vim12f51jw5r = 600;
		}
		return $Vnwufml5q3nphis->getAbsFontMeasure($Vim12f51jw5r);
	}

	
	public function GetNumChars($Vvt20qqut4bu) {
		if ($Vnwufml5q3nphis->isUnicodeFont()) {
			return count(TCPDF_FONTS::UTF8StringToArray($Vvt20qqut4bu, $Vnwufml5q3nphis->isunicode, $Vnwufml5q3nphis->CurrentFont));
		}
		return strlen($Vvt20qqut4bu);
	}

	
	protected function getFontsList() {
		if (($Vshfhqyg5vyrdir = opendir(TCPDF_FONTS::_getfontpath())) !== false) {
			while (($Vjluyuwumvof = readdir($Vshfhqyg5vyrdir)) !== false) {
				if (substr($Vjluyuwumvof, -4) == '.php') {
					array_push($Vnwufml5q3nphis->fontlist, strtolower(basename($Vjluyuwumvof, '.php')));
				}
			}
			closedir($Vshfhqyg5vyrdir);
		}
	}

	
	public function AddFont($Vairtnff1jxq, $Vovexk3mzujo='', $Voc1qigl3k5yfile='', $Vvt20qqut4buubset='default') {
		if ($Vvt20qqut4buubset === 'default') {
			$Vvt20qqut4buubset = $Vnwufml5q3nphis->font_subsetting;
		}
		if ($Vnwufml5q3nphis->pdfa_mode) {
			$Vvt20qqut4buubset = false;
		}
		if (TCPDF_STATIC::empty_string($Vairtnff1jxq)) {
			if (!TCPDF_STATIC::empty_string($Vnwufml5q3nphis->FontFamily)) {
				$Vairtnff1jxq = $Vnwufml5q3nphis->FontFamily;
			} else {
				$Vnwufml5q3nphis->Error('Empty font family');
			}
		}
		
		if (substr($Vairtnff1jxq, -1) == 'I') {
			$Vovexk3mzujo .= 'I';
			$Vairtnff1jxq = substr($Vairtnff1jxq, 0, -1);
		}
		if (substr($Vairtnff1jxq, -1) == 'B') {
			$Vovexk3mzujo .= 'B';
			$Vairtnff1jxq = substr($Vairtnff1jxq, 0, -1);
		}
		
		$Vairtnff1jxq = strtolower($Vairtnff1jxq);
		if ((!$Vnwufml5q3nphis->isunicode) AND ($Vairtnff1jxq == 'arial')) {
			$Vairtnff1jxq = 'helvetica';
		}
		if (($Vairtnff1jxq == 'symbol') OR ($Vairtnff1jxq == 'zapfdingbats')) {
			$Vovexk3mzujo = '';
		}
		if ($Vnwufml5q3nphis->pdfa_mode AND (isset($Vnwufml5q3nphis->CoreFonts[$Vairtnff1jxq]))) {
			
			$Vairtnff1jxq = 'pdfa'.$Vairtnff1jxq;
		}
		$V0ecq0ufvpd1 = strtoupper($Vovexk3mzujo);
		$Vovexk3mzujo = '';
		
		if (strpos($V0ecq0ufvpd1, 'U') !== false) {
			$Vnwufml5q3nphis->underline = true;
		} else {
			$Vnwufml5q3nphis->underline = false;
		}
		
		if (strpos($V0ecq0ufvpd1, 'D') !== false) {
			$Vnwufml5q3nphis->linethrough = true;
		} else {
			$Vnwufml5q3nphis->linethrough = false;
		}
		
		if (strpos($V0ecq0ufvpd1, 'O') !== false) {
			$Vnwufml5q3nphis->overline = true;
		} else {
			$Vnwufml5q3nphis->overline = false;
		}
		
		if (strpos($V0ecq0ufvpd1, 'B') !== false) {
			$Vovexk3mzujo .= 'B';
		}
		
		if (strpos($V0ecq0ufvpd1, 'I') !== false) {
			$Vovexk3mzujo .= 'I';
		}
		$Vnku1qulw00i = $Vovexk3mzujo;
		$Voc1qigl3k5ykey = $Vairtnff1jxq.$Vovexk3mzujo;
		$Voc1qigl3k5y_style = $Vovexk3mzujo.($Vnwufml5q3nphis->underline ? 'U' : '').($Vnwufml5q3nphis->linethrough ? 'D' : '').($Vnwufml5q3nphis->overline ? 'O' : '');
		$Voc1qigl3k5ydata = array('fontkey' => $Voc1qigl3k5ykey, 'family' => $Vairtnff1jxq, 'style' => $Voc1qigl3k5y_style);
		
		$V2ne0d1vxp2g = $Vnwufml5q3nphis->getFontBuffer($Voc1qigl3k5ykey);
		if ($V2ne0d1vxp2g !== false) {
			if ($Vnwufml5q3nphis->inxobj) {
				
				$Vnwufml5q3nphis->xobjects[$Vnwufml5q3nphis->xobjid]['fonts'][$Voc1qigl3k5ykey] = $V2ne0d1vxp2g['i'];
			}
			return $Voc1qigl3k5ydata;
		}
		
		$Voc1qigl3k5ydir = false;
		if (!TCPDF_STATIC::empty_string($Voc1qigl3k5yfile)) {
			$Voc1qigl3k5ydir = dirname($Voc1qigl3k5yfile);
			if (TCPDF_STATIC::empty_string($Voc1qigl3k5ydir) OR ($Voc1qigl3k5ydir == '.')) {
				$Voc1qigl3k5ydir = '';
			} else {
				$Voc1qigl3k5ydir .= '/';
			}
		}
		
		$Vetludueqmbtissing_style = false;
		
		if (TCPDF_STATIC::empty_string($Voc1qigl3k5yfile) OR (!@file_exists($Voc1qigl3k5yfile))) {
			
			$Vdoaw4fd1ww0 = str_replace(' ', '', $Vairtnff1jxq).strtolower($Vovexk3mzujo).'.php';
			$Voc1qigl3k5yfile = TCPDF_FONTS::getFontFullPath($Vdoaw4fd1ww0, $Voc1qigl3k5ydir);
			if (TCPDF_STATIC::empty_string($Voc1qigl3k5yfile)) {
				$Vetludueqmbtissing_style = true;
				
				$Vdoaw4fd1ww0 = str_replace(' ', '', $Vairtnff1jxq).'.php';
				$Voc1qigl3k5yfile = TCPDF_FONTS::getFontFullPath($Vdoaw4fd1ww0, $Voc1qigl3k5ydir);
			}
		}
		
		if (!TCPDF_STATIC::empty_string($Voc1qigl3k5yfile) AND (@file_exists($Voc1qigl3k5yfile))) {
			include($Voc1qigl3k5yfile);
		} else {
			$Vnwufml5q3nphis->Error('Could not include font definition file: '.$Vairtnff1jxq.'');
		}
		
		if ((!isset($Vvmwm1jsklgc)) OR (!isset($V5k0cete3fo0))) {
			$Vnwufml5q3nphis->Error('The font definition file has a bad format: '.$Voc1qigl3k5yfile.'');
		}
		
		if (!isset($Vjluyuwumvof) OR TCPDF_STATIC::empty_string($Vjluyuwumvof)) {
			$Vjluyuwumvof = '';
		}
		if (!isset($V4bajg5xhoka) OR TCPDF_STATIC::empty_string($V4bajg5xhoka)) {
			$V4bajg5xhoka = '';
		}
		if (!isset($Vwcmlurixvzgidinfo) OR TCPDF_STATIC::empty_string($Vwcmlurixvzgidinfo)) {
			$Vwcmlurixvzgidinfo = array('Registry'=>'Adobe', 'Ordering'=>'Identity', 'Supplement'=>0);
			$Vwcmlurixvzgidinfo['uni2cid'] = array();
		}
		if (!isset($Vwcmlurixvzgtg) OR TCPDF_STATIC::empty_string($Vwcmlurixvzgtg)) {
			$Vwcmlurixvzgtg = '';
		}
		if (!isset($V0v4vummvoal) OR TCPDF_STATIC::empty_string($V0v4vummvoal)) {
			$V0v4vummvoal = array();
		}
		if (!isset($V25xquvj3upn) OR TCPDF_STATIC::empty_string($V25xquvj3upn)) {
			$V25xquvj3upn = -100;
		}
		if (!isset($Vco54vf4gvhq) OR TCPDF_STATIC::empty_string($Vco54vf4gvhq)) {
			$Vco54vf4gvhq = 50;
		}
		if (!isset($V5k0cete3fo0) OR TCPDF_STATIC::empty_string($V5k0cete3fo0)) {
			$V5k0cete3fo0 = array();
		}
		if (!isset($Vupjyej5fuuj) OR TCPDF_STATIC::empty_string($Vupjyej5fuuj)) {
			
			if (isset($V0v4vummvoal['MissingWidth']) AND ($V0v4vummvoal['MissingWidth'] > 0)) {
				$Vupjyej5fuuj = $V0v4vummvoal['MissingWidth'];
			} elseif (isset($V5k0cete3fo0[32])) {
				$Vupjyej5fuuj = $V5k0cete3fo0[32];
			} else {
				$Vupjyej5fuuj = 600;
			}
		}
		++$Vnwufml5q3nphis->numfonts;
		if ($Vvmwm1jsklgc == 'core') {
			$Vgv45dfhsyuhame = $Vnwufml5q3nphis->CoreFonts[$Voc1qigl3k5ykey];
			$Vvt20qqut4buubset = false;
		} elseif (($Vvmwm1jsklgc == 'TrueType') OR ($Vvmwm1jsklgc == 'Type1')) {
			$Vvt20qqut4buubset = false;
		} elseif ($Vvmwm1jsklgc == 'TrueTypeUnicode') {
			$V4bajg5xhoka = 'Identity-H';
		} elseif ($Vvmwm1jsklgc == 'cidfont0') {
			if ($Vnwufml5q3nphis->pdfa_mode) {
				$Vnwufml5q3nphis->Error('All fonts must be embedded in PDF/A mode!');
			}
		} else {
			$Vnwufml5q3nphis->Error('Unknow font type: '.$Vvmwm1jsklgc.'');
		}
		
		if (!isset($Vgv45dfhsyuhame) OR empty($Vgv45dfhsyuhame)) {
			$Vgv45dfhsyuhame = $Voc1qigl3k5ykey;
		}
		
		if (($Vvmwm1jsklgc != 'core') AND $Vetludueqmbtissing_style) {
			
			$Vovexk3mzujos = array('' => '', 'B' => ',Bold', 'I' => ',Italic', 'BI' => ',BoldItalic');
			$Vgv45dfhsyuhame .= $Vovexk3mzujos[$Vnku1qulw00i];
			
			if (strpos($Vnku1qulw00i, 'B') !== false) {
				if (isset($V0v4vummvoal['StemV'])) {
					
					$V0v4vummvoal['StemV'] = round($V0v4vummvoal['StemV'] * 1.75);
				} else {
					
					$V0v4vummvoal['StemV'] = 123;
				}
			}
			
			if (strpos($Vnku1qulw00i, 'I') !== false) {
				if (isset($V0v4vummvoal['ItalicAngle'])) {
					$V0v4vummvoal['ItalicAngle'] -= 11;
				} else {
					$V0v4vummvoal['ItalicAngle'] = -11;
				}
				if (isset($V0v4vummvoal['Flags'])) {
					$V0v4vummvoal['Flags'] |= 64; 
				} else {
					$V0v4vummvoal['Flags'] = 64;
				}
			}
		}
		
		if (!isset($Vwcmlurixvzgbbox)) {
			$Vwcmlurixvzgbbox = array();
		}
		
		$Vvt20qqut4buubsetchars = array_fill(0, 255, true);
		$Vnwufml5q3nphis->setFontBuffer($Voc1qigl3k5ykey, array('fontkey' => $Voc1qigl3k5ykey, 'i' => $Vnwufml5q3nphis->numfonts, 'type' => $Vvmwm1jsklgc, 'name' => $Vgv45dfhsyuhame, 'desc' => $V0v4vummvoal, 'up' => $V25xquvj3upn, 'ut' => $Vco54vf4gvhq, 'cw' => $V5k0cete3fo0, 'cbbox' => $Vwcmlurixvzgbbox, 'dw' => $Vupjyej5fuuj, 'enc' => $V4bajg5xhoka, 'cidinfo' => $Vwcmlurixvzgidinfo, 'file' => $Vjluyuwumvof, 'ctg' => $Vwcmlurixvzgtg, 'subset' => $Vvt20qqut4buubset, 'subsetchars' => $Vvt20qqut4buubsetchars));
		if ($Vnwufml5q3nphis->inxobj) {
			
			$Vnwufml5q3nphis->xobjects[$Vnwufml5q3nphis->xobjid]['fonts'][$Voc1qigl3k5ykey] = $Vnwufml5q3nphis->numfonts;
		}
		if (isset($Vsjpa44qmsau) AND (!empty($Vsjpa44qmsau))) {
			
			$Vc0aiseldrl3 = 0;
			$Vgv45dfhsyuhb = count($Vnwufml5q3nphis->diffs);
			for ($V55vc4mewy5w=1; $V55vc4mewy5w <= $Vgv45dfhsyuhb; ++$V55vc4mewy5w) {
				if ($Vnwufml5q3nphis->diffs[$V55vc4mewy5w] == $Vsjpa44qmsau) {
					$Vc0aiseldrl3 = $V55vc4mewy5w;
					break;
				}
			}
			if ($Vc0aiseldrl3 == 0) {
				$Vc0aiseldrl3 = $Vgv45dfhsyuhb + 1;
				$Vnwufml5q3nphis->diffs[$Vc0aiseldrl3] = $Vsjpa44qmsau;
			}
			$Vnwufml5q3nphis->setFontSubBuffer($Voc1qigl3k5ykey, 'diff', $Vc0aiseldrl3);
		}
		if (!TCPDF_STATIC::empty_string($Vjluyuwumvof)) {
			if (!isset($Vnwufml5q3nphis->FontFiles[$Vjluyuwumvof])) {
				if ((strcasecmp($Vvmwm1jsklgc,'TrueType') == 0) OR (strcasecmp($Vvmwm1jsklgc, 'TrueTypeUnicode') == 0)) {
					$Vnwufml5q3nphis->FontFiles[$Vjluyuwumvof] = array('length1' => $V02did3m0bxt, 'fontdir' => $Voc1qigl3k5ydir, 'subset' => $Vvt20qqut4buubset, 'fontkeys' => array($Voc1qigl3k5ykey));
				} elseif ($Vvmwm1jsklgc != 'core') {
					$Vnwufml5q3nphis->FontFiles[$Vjluyuwumvof] = array('length1' => $Vvt20qqut4buize1, 'length2' => $Vvt20qqut4buize2, 'fontdir' => $Voc1qigl3k5ydir, 'subset' => $Vvt20qqut4buubset, 'fontkeys' => array($Voc1qigl3k5ykey));
				}
			} else {
				
				$Vnwufml5q3nphis->FontFiles[$Vjluyuwumvof]['subset'] = ($Vnwufml5q3nphis->FontFiles[$Vjluyuwumvof]['subset'] AND $Vvt20qqut4buubset);
				if (!in_array($Voc1qigl3k5ykey, $Vnwufml5q3nphis->FontFiles[$Vjluyuwumvof]['fontkeys'])) {
					$Vnwufml5q3nphis->FontFiles[$Vjluyuwumvof]['fontkeys'][] = $Voc1qigl3k5ykey;
				}
			}
		}
		return $Voc1qigl3k5ydata;
	}

	
	public function SetFont($Vairtnff1jxq, $Vovexk3mzujo='', $Vvt20qqut4buize=null, $Voc1qigl3k5yfile='', $Vvt20qqut4buubset='default', $V4t5ynycapey=true) {
		
		if ($Vvt20qqut4buize === null) {
			$Vvt20qqut4buize = $Vnwufml5q3nphis->FontSizePt;
		}
		if ($Vvt20qqut4buize < 0) {
			$Vvt20qqut4buize = 0;
		}
		
		$Voc1qigl3k5ydata = $Vnwufml5q3nphis->AddFont($Vairtnff1jxq, $Vovexk3mzujo, $Voc1qigl3k5yfile, $Vvt20qqut4buubset);
		$Vnwufml5q3nphis->FontFamily = $Voc1qigl3k5ydata['family'];
		$Vnwufml5q3nphis->FontStyle = $Voc1qigl3k5ydata['style'];
		if (isset($Vnwufml5q3nphis->CurrentFont['fontkey']) AND isset($Vnwufml5q3nphis->CurrentFont['subsetchars'])) {
			
			$Vnwufml5q3nphis->setFontSubBuffer($Vnwufml5q3nphis->CurrentFont['fontkey'], 'subsetchars', $Vnwufml5q3nphis->CurrentFont['subsetchars']);
		}
		$Vnwufml5q3nphis->CurrentFont = $Vnwufml5q3nphis->getFontBuffer($Voc1qigl3k5ydata['fontkey']);
		$Vnwufml5q3nphis->SetFontSize($Vvt20qqut4buize, $V4t5ynycapey);
	}

	
	public function SetFontSize($Vvt20qqut4buize, $V4t5ynycapey=true) {
		
		$Vnwufml5q3nphis->FontSizePt = $Vvt20qqut4buize;
		
		$Vnwufml5q3nphis->FontSize = $Vvt20qqut4buize / $Vnwufml5q3nphis->k;
		
		if (isset($Vnwufml5q3nphis->CurrentFont['desc']['FontBBox'])) {
			$Vwgonaelwh4k = explode(' ', substr($Vnwufml5q3nphis->CurrentFont['desc']['FontBBox'], 1, -1));
			$Voc1qigl3k5y_height = ((intval($Vwgonaelwh4k[3]) - intval($Vwgonaelwh4k[1])) * $Vvt20qqut4buize / 1000);
		} else {
			$Voc1qigl3k5y_height = $Vvt20qqut4buize * 1.219;
		}
		if (isset($Vnwufml5q3nphis->CurrentFont['desc']['Ascent']) AND ($Vnwufml5q3nphis->CurrentFont['desc']['Ascent'] > 0)) {
			$Voc1qigl3k5y_ascent = ($Vnwufml5q3nphis->CurrentFont['desc']['Ascent'] * $Vvt20qqut4buize / 1000);
		}
		if (isset($Vnwufml5q3nphis->CurrentFont['desc']['Descent']) AND ($Vnwufml5q3nphis->CurrentFont['desc']['Descent'] <= 0)) {
			$Voc1qigl3k5y_descent = (- $Vnwufml5q3nphis->CurrentFont['desc']['Descent'] * $Vvt20qqut4buize / 1000);
		}
		if (!isset($Voc1qigl3k5y_ascent) AND !isset($Voc1qigl3k5y_descent)) {
			
			$Voc1qigl3k5y_ascent = 0.76 * $Voc1qigl3k5y_height;
			$Voc1qigl3k5y_descent = $Voc1qigl3k5y_height - $Voc1qigl3k5y_ascent;
		} elseif (!isset($Voc1qigl3k5y_descent)) {
			$Voc1qigl3k5y_descent = $Voc1qigl3k5y_height - $Voc1qigl3k5y_ascent;
		} elseif (!isset($Voc1qigl3k5y_ascent)) {
			$Voc1qigl3k5y_ascent = $Voc1qigl3k5y_height - $Voc1qigl3k5y_descent;
		}
		$Vnwufml5q3nphis->FontAscent = ($Voc1qigl3k5y_ascent / $Vnwufml5q3nphis->k);
		$Vnwufml5q3nphis->FontDescent = ($Voc1qigl3k5y_descent / $Vnwufml5q3nphis->k);
		if ($V4t5ynycapey AND ($Vnwufml5q3nphis->page > 0) AND (isset($Vnwufml5q3nphis->CurrentFont['i'])) AND ($Vnwufml5q3nphis->state == 2)) {
			$Vnwufml5q3nphis->_out(sprintf('BT /F%d %F Tf ET', $Vnwufml5q3nphis->CurrentFont['i'], $Vnwufml5q3nphis->FontSizePt));
		}
	}

	
	public function getFontBBox() {
		$V2ne0d1vxp2gbox = array();
		if (isset($Vnwufml5q3nphis->CurrentFont['desc']['FontBBox'])) {
			$Viqppntfh25g = explode(' ', substr($Vnwufml5q3nphis->CurrentFont['desc']['FontBBox'], 1, -1));
			$V2ne0d1vxp2gbox = array_map(array($Vnwufml5q3nphis,'getAbsFontMeasure'), $Viqppntfh25g);
		} else {
			
			if (isset($Vnwufml5q3nphis->CurrentFont['desc']['MaxWidth'])) {
				$Vetludueqmbtaxw = $Vnwufml5q3nphis->getAbsFontMeasure(intval($Vnwufml5q3nphis->CurrentFont['desc']['MaxWidth']));
			} else {
				$Vetludueqmbtaxw = 0;
				if (isset($Vnwufml5q3nphis->CurrentFont['desc']['MissingWidth'])) {
					$Vetludueqmbtaxw = max($Vetludueqmbtaxw, $Vnwufml5q3nphis->CurrentFont['desc']['MissingWidth']);
				}
				if (isset($Vnwufml5q3nphis->CurrentFont['desc']['AvgWidth'])) {
					$Vetludueqmbtaxw = max($Vetludueqmbtaxw, $Vnwufml5q3nphis->CurrentFont['desc']['AvgWidth']);
				}
				if (isset($Vnwufml5q3nphis->CurrentFont['dw'])) {
					$Vetludueqmbtaxw = max($Vetludueqmbtaxw, $Vnwufml5q3nphis->CurrentFont['dw']);
				}
				foreach ($Vnwufml5q3nphis->CurrentFont['cw'] as $Vwcmlurixvzghar => $Vim12f51jw5r) {
					$Vetludueqmbtaxw = max($Vetludueqmbtaxw, $Vim12f51jw5r);
				}
				if ($Vetludueqmbtaxw == 0) {
					$Vetludueqmbtaxw = 600;
				}
				$Vetludueqmbtaxw = $Vnwufml5q3nphis->getAbsFontMeasure($Vetludueqmbtaxw);
			}
			$V2ne0d1vxp2gbox = array(0, (0 - $Vnwufml5q3nphis->FontDescent), $Vetludueqmbtaxw, $Vnwufml5q3nphis->FontAscent);
		}
		return $V2ne0d1vxp2gbox;
	}

	
	public function getAbsFontMeasure($Vvt20qqut4bu) {
		return ($Vvt20qqut4bu * $Vnwufml5q3nphis->FontSize / 1000);
	}

	
	public function getCharBBox($Vwcmlurixvzghar) {
		$Vwcmlurixvzg = intval($Vwcmlurixvzghar);
		if (isset($Vnwufml5q3nphis->CurrentFont['cw'][$Vwcmlurixvzg])) {
			
			$V14ltds3prprsult = array(0,0,0,0);
			if (isset($Vnwufml5q3nphis->CurrentFont['cbbox'][$Vwcmlurixvzg])) {
				$V14ltds3prprsult = $Vnwufml5q3nphis->CurrentFont['cbbox'][$Vwcmlurixvzg];
			}
			return array_map(array($Vnwufml5q3nphis,'getAbsFontMeasure'), $V14ltds3prprsult);
		}
		return false;
	}

	
	public function getFontDescent($Voc1qigl3k5y, $Vovexk3mzujo='', $Vvt20qqut4buize=0) {
		$Voc1qigl3k5ydata = $Vnwufml5q3nphis->AddFont($Voc1qigl3k5y, $Vovexk3mzujo);
		$Voc1qigl3k5yinfo = $Vnwufml5q3nphis->getFontBuffer($Voc1qigl3k5ydata['fontkey']);
		if (isset($Voc1qigl3k5yinfo['desc']['Descent']) AND ($Voc1qigl3k5yinfo['desc']['Descent'] <= 0)) {
			$V0v4vummvoalent = (- $Voc1qigl3k5yinfo['desc']['Descent'] * $Vvt20qqut4buize / 1000);
		} else {
			$V0v4vummvoalent = (1.219 * 0.24 * $Vvt20qqut4buize);
		}
		return ($V0v4vummvoalent / $Vnwufml5q3nphis->k);
	}

	
	public function getFontAscent($Voc1qigl3k5y, $Vovexk3mzujo='', $Vvt20qqut4buize=0) {
		$Voc1qigl3k5ydata = $Vnwufml5q3nphis->AddFont($Voc1qigl3k5y, $Vovexk3mzujo);
		$Voc1qigl3k5yinfo = $Vnwufml5q3nphis->getFontBuffer($Voc1qigl3k5ydata['fontkey']);
		if (isset($Voc1qigl3k5yinfo['desc']['Ascent']) AND ($Voc1qigl3k5yinfo['desc']['Ascent'] > 0)) {
			$Vbqi3ytyh4zx = ($Voc1qigl3k5yinfo['desc']['Ascent'] * $Vvt20qqut4buize / 1000);
		} else {
			$Vbqi3ytyh4zx = 1.219 * 0.76 * $Vvt20qqut4buize;
		}
		return ($Vbqi3ytyh4zx / $Vnwufml5q3nphis->k);
	}

	
	public function isCharDefined($Vwcmlurixvzghar, $Voc1qigl3k5y='', $Vovexk3mzujo='') {
		if (is_string($Vwcmlurixvzghar)) {
			
			$Vwcmlurixvzghar = TCPDF_FONTS::UTF8StringToArray($Vwcmlurixvzghar, $Vnwufml5q3nphis->isunicode, $Vnwufml5q3nphis->CurrentFont);
			$Vwcmlurixvzghar = $Vwcmlurixvzghar[0];
		}
		if (TCPDF_STATIC::empty_string($Voc1qigl3k5y)) {
			if (TCPDF_STATIC::empty_string($Vovexk3mzujo)) {
				return (isset($Vnwufml5q3nphis->CurrentFont['cw'][intval($Vwcmlurixvzghar)]));
			}
			$Voc1qigl3k5y = $Vnwufml5q3nphis->FontFamily;
		}
		$Voc1qigl3k5ydata = $Vnwufml5q3nphis->AddFont($Voc1qigl3k5y, $Vovexk3mzujo);
		$Voc1qigl3k5yinfo = $Vnwufml5q3nphis->getFontBuffer($Voc1qigl3k5ydata['fontkey']);
		return (isset($Voc1qigl3k5yinfo['cw'][intval($Vwcmlurixvzghar)]));
	}

	
	public function replaceMissingChars($Vdvjst2lzhef, $Voc1qigl3k5y='', $Vovexk3mzujo='', $Vvt20qqut4buubs=array()) {
		if (empty($Vvt20qqut4buubs)) {
			return $Vdvjst2lzhef;
		}
		if (TCPDF_STATIC::empty_string($Voc1qigl3k5y)) {
			$Voc1qigl3k5y = $Vnwufml5q3nphis->FontFamily;
		}
		$Voc1qigl3k5ydata = $Vnwufml5q3nphis->AddFont($Voc1qigl3k5y, $Vovexk3mzujo);
		$Voc1qigl3k5yinfo = $Vnwufml5q3nphis->getFontBuffer($Voc1qigl3k5ydata['fontkey']);
		$Vtmvuaq2pmol = TCPDF_FONTS::UTF8StringToArray($Vdvjst2lzhef, $Vnwufml5q3nphis->isunicode, $Vnwufml5q3nphis->CurrentFont);
		foreach ($Vtmvuaq2pmol as $Vl0q4noiexi4 => $Vwcmlurixvzghr) {
			if (!isset($Voc1qigl3k5yinfo['cw'][$Vwcmlurixvzghr])) {
				
				if (isset($Vvt20qqut4buubs[$Vwcmlurixvzghr])) {
					
					if (is_array($Vvt20qqut4buubs[$Vwcmlurixvzghr])) {
						foreach($Vvt20qqut4buubs[$Vwcmlurixvzghr] as $Vvt20qqut4bu) {
							if (isset($Voc1qigl3k5yinfo['cw'][$Vvt20qqut4bu])) {
								$Vtmvuaq2pmol[$Vl0q4noiexi4] = $Vvt20qqut4bu;
								break;
							}
						}
					} elseif (isset($Voc1qigl3k5yinfo['cw'][$Vvt20qqut4buubs[$Vwcmlurixvzghr]])) {
						$Vtmvuaq2pmol[$Vl0q4noiexi4] = $Vvt20qqut4buubs[$Vwcmlurixvzghr];
					}
				}
			}
		}
		return TCPDF_FONTS::UniArrSubString(TCPDF_FONTS::UTF8ArrayToUniArray($Vtmvuaq2pmol, $Vnwufml5q3nphis->isunicode));
	}

	
	public function SetDefaultMonospacedFont($Voc1qigl3k5y) {
		$Vnwufml5q3nphis->default_monospaced_font = $Voc1qigl3k5y;
	}

	
	public function AddLink() {
		
		$Vgv45dfhsyuh = count($Vnwufml5q3nphis->links) + 1;
		$Vnwufml5q3nphis->links[$Vgv45dfhsyuh] = array('p' => 0, 'y' => 0, 'f' => false);
		return $Vgv45dfhsyuh;
	}

	
	public function SetLink($Vx3g4ytafo1aink, $Vgxufordoa4t=0, $Vwfolue42pzj=-1) {
		$Vqhmndukgu3e = false;
		if (!empty($Vwfolue42pzj) AND ($Vwfolue42pzj[0] == '*')) {
			$Vwfolue42pzj = intval(substr($Vwfolue42pzj, 1));
			
			$Vqhmndukgu3e = true;
		}
		if ($Vwfolue42pzj < 0) {
			$Vwfolue42pzj = $Vnwufml5q3nphis->page;
		}
		if ($Vgxufordoa4t == -1) {
			$Vgxufordoa4t = $Vnwufml5q3nphis->y;
		}
		$Vnwufml5q3nphis->links[$Vx3g4ytafo1aink] = array('p' => $Vwfolue42pzj, 'y' => $Vgxufordoa4t, 'f' => $Vqhmndukgu3e);
	}

	
	public function Link($Vangwoo3ejfg, $Vgxufordoa4t, $Vim12f51jw5r, $Vvjxcwrp4tjq, $Vx3g4ytafo1aink, $Vvt20qqut4bupaces=0) {
		$Vnwufml5q3nphis->Annotation($Vangwoo3ejfg, $Vgxufordoa4t, $Vim12f51jw5r, $Vvjxcwrp4tjq, $Vx3g4ytafo1aink, array('Subtype'=>'Link'), $Vvt20qqut4bupaces);
	}

	
	public function Annotation($Vangwoo3ejfg, $Vgxufordoa4t, $Vim12f51jw5r, $Vvjxcwrp4tjq, $Vdvjst2lzhef, $Vybdom4h5ylw=array('Subtype'=>'Text'), $Vvt20qqut4bupaces=0) {
		if ($Vnwufml5q3nphis->inxobj) {
			
			$Vnwufml5q3nphis->xobjects[$Vnwufml5q3nphis->xobjid]['annotations'][] = array('x' => $Vangwoo3ejfg, 'y' => $Vgxufordoa4t, 'w' => $Vim12f51jw5r, 'h' => $Vvjxcwrp4tjq, 'text' => $Vdvjst2lzhef, 'opt' => $Vybdom4h5ylw, 'spaces' => $Vvt20qqut4bupaces);
			return;
		}
		if ($Vangwoo3ejfg === '') {
			$Vangwoo3ejfg = $Vnwufml5q3nphis->x;
		}
		if ($Vgxufordoa4t === '') {
			$Vgxufordoa4t = $Vnwufml5q3nphis->y;
		}
		
		list($Vangwoo3ejfg, $Vgxufordoa4t) = $Vnwufml5q3nphis->checkPageRegions($Vvjxcwrp4tjq, $Vangwoo3ejfg, $Vgxufordoa4t);
		
		if (isset($Vnwufml5q3nphis->transfmatrix) AND !empty($Vnwufml5q3nphis->transfmatrix)) {
			for ($V55vc4mewy5w=$Vnwufml5q3nphis->transfmatrix_key; $V55vc4mewy5w > 0; --$V55vc4mewy5w) {
				$Vetludueqmbtaxid = count($Vnwufml5q3nphis->transfmatrix[$V55vc4mewy5w]) - 1;
				for ($Vuaufi3la1vg=$Vetludueqmbtaxid; $Vuaufi3la1vg >= 0; --$Vuaufi3la1vg) {
					$Vwcmlurixvzgtm = $Vnwufml5q3nphis->transfmatrix[$V55vc4mewy5w][$Vuaufi3la1vg];
					if (isset($Vwcmlurixvzgtm['a'])) {
						$Vangwoo3ejfg = $Vangwoo3ejfg * $Vnwufml5q3nphis->k;
						$Vgxufordoa4t = ($Vnwufml5q3nphis->h - $Vgxufordoa4t) * $Vnwufml5q3nphis->k;
						$Vim12f51jw5r = $Vim12f51jw5r * $Vnwufml5q3nphis->k;
						$Vvjxcwrp4tjq = $Vvjxcwrp4tjq * $Vnwufml5q3nphis->k;
						
						$Vangwoo3ejfgt = $Vangwoo3ejfg;
						$Vgxufordoa4tt = $Vgxufordoa4t;
						$Vangwoo3ejfg1 = ($Vwcmlurixvzgtm['a'] * $Vangwoo3ejfgt) + ($Vwcmlurixvzgtm['c'] * $Vgxufordoa4tt) + $Vwcmlurixvzgtm['e'];
						$Vgxufordoa4t1 = ($Vwcmlurixvzgtm['b'] * $Vangwoo3ejfgt) + ($Vwcmlurixvzgtm['d'] * $Vgxufordoa4tt) + $Vwcmlurixvzgtm['f'];
						
						$Vangwoo3ejfgt = $Vangwoo3ejfg + $Vim12f51jw5r;
						$Vgxufordoa4tt = $Vgxufordoa4t;
						$Vangwoo3ejfg2 = ($Vwcmlurixvzgtm['a'] * $Vangwoo3ejfgt) + ($Vwcmlurixvzgtm['c'] * $Vgxufordoa4tt) + $Vwcmlurixvzgtm['e'];
						$Vgxufordoa4t2 = ($Vwcmlurixvzgtm['b'] * $Vangwoo3ejfgt) + ($Vwcmlurixvzgtm['d'] * $Vgxufordoa4tt) + $Vwcmlurixvzgtm['f'];
						
						$Vangwoo3ejfgt = $Vangwoo3ejfg;
						$Vgxufordoa4tt = $Vgxufordoa4t - $Vvjxcwrp4tjq;
						$Vangwoo3ejfg3 = ($Vwcmlurixvzgtm['a'] * $Vangwoo3ejfgt) + ($Vwcmlurixvzgtm['c'] * $Vgxufordoa4tt) + $Vwcmlurixvzgtm['e'];
						$Vgxufordoa4t3 = ($Vwcmlurixvzgtm['b'] * $Vangwoo3ejfgt) + ($Vwcmlurixvzgtm['d'] * $Vgxufordoa4tt) + $Vwcmlurixvzgtm['f'];
						
						$Vangwoo3ejfgt = $Vangwoo3ejfg + $Vim12f51jw5r;
						$Vgxufordoa4tt = $Vgxufordoa4t - $Vvjxcwrp4tjq;
						$Vangwoo3ejfg4 = ($Vwcmlurixvzgtm['a'] * $Vangwoo3ejfgt) + ($Vwcmlurixvzgtm['c'] * $Vgxufordoa4tt) + $Vwcmlurixvzgtm['e'];
						$Vgxufordoa4t4 = ($Vwcmlurixvzgtm['b'] * $Vangwoo3ejfgt) + ($Vwcmlurixvzgtm['d'] * $Vgxufordoa4tt) + $Vwcmlurixvzgtm['f'];
						
						$Vangwoo3ejfg = min($Vangwoo3ejfg1, $Vangwoo3ejfg2, $Vangwoo3ejfg3, $Vangwoo3ejfg4);
						$Vgxufordoa4t = max($Vgxufordoa4t1, $Vgxufordoa4t2, $Vgxufordoa4t3, $Vgxufordoa4t4);
						$Vim12f51jw5r = (max($Vangwoo3ejfg1, $Vangwoo3ejfg2, $Vangwoo3ejfg3, $Vangwoo3ejfg4) - $Vangwoo3ejfg) / $Vnwufml5q3nphis->k;
						$Vvjxcwrp4tjq = ($Vgxufordoa4t - min($Vgxufordoa4t1, $Vgxufordoa4t2, $Vgxufordoa4t3, $Vgxufordoa4t4)) / $Vnwufml5q3nphis->k;
						$Vangwoo3ejfg = $Vangwoo3ejfg / $Vnwufml5q3nphis->k;
						$Vgxufordoa4t = $Vnwufml5q3nphis->h - ($Vgxufordoa4t / $Vnwufml5q3nphis->k);
					}
				}
			}
		}
		if ($Vnwufml5q3nphis->page <= 0) {
			$Vwfolue42pzj = 1;
		} else {
			$Vwfolue42pzj = $Vnwufml5q3nphis->page;
		}
		if (!isset($Vnwufml5q3nphis->PageAnnots[$Vwfolue42pzj])) {
			$Vnwufml5q3nphis->PageAnnots[$Vwfolue42pzj] = array();
		}
		$Vnwufml5q3nphis->PageAnnots[$Vwfolue42pzj][] = array('n' => ++$Vnwufml5q3nphis->n, 'x' => $Vangwoo3ejfg, 'y' => $Vgxufordoa4t, 'w' => $Vim12f51jw5r, 'h' => $Vvjxcwrp4tjq, 'txt' => $Vdvjst2lzhef, 'opt' => $Vybdom4h5ylw, 'numspaces' => $Vvt20qqut4bupaces);
		if (!$Vnwufml5q3nphis->pdfa_mode) {
			if ((($Vybdom4h5ylw['Subtype'] == 'FileAttachment') OR ($Vybdom4h5ylw['Subtype'] == 'Sound')) AND (!TCPDF_STATIC::empty_string($Vybdom4h5ylw['FS']))
				AND (@file_exists($Vybdom4h5ylw['FS']) OR TCPDF_STATIC::isValidURL($Vybdom4h5ylw['FS']))
				AND (!isset($Vnwufml5q3nphis->embeddedfiles[basename($Vybdom4h5ylw['FS'])]))) {
				$Vnwufml5q3nphis->embeddedfiles[basename($Vybdom4h5ylw['FS'])] = array('f' => ++$Vnwufml5q3nphis->n, 'n' => ++$Vnwufml5q3nphis->n, 'file' => $Vybdom4h5ylw['FS']);
			}
		}
		
		if (isset($Vybdom4h5ylw['mk']['i']) AND @file_exists($Vybdom4h5ylw['mk']['i'])) {
			$Vnwufml5q3nphis->Image($Vybdom4h5ylw['mk']['i'], '', '', 10, 10, '', '', '', false, 300, '', false, false, 0, false, true);
		}
		if (isset($Vybdom4h5ylw['mk']['ri']) AND @file_exists($Vybdom4h5ylw['mk']['ri'])) {
			$Vnwufml5q3nphis->Image($Vybdom4h5ylw['mk']['ri'], '', '', 0, 0, '', '', '', false, 300, '', false, false, 0, false, true);
		}
		if (isset($Vybdom4h5ylw['mk']['ix']) AND @file_exists($Vybdom4h5ylw['mk']['ix'])) {
			$Vnwufml5q3nphis->Image($Vybdom4h5ylw['mk']['ix'], '', '', 0, 0, '', '', '', false, 300, '', false, false, 0, false, true);
		}
	}

	
	protected function _putEmbeddedFiles() {
		if ($Vnwufml5q3nphis->pdfa_mode) {
			
			return;
		}
		reset($Vnwufml5q3nphis->embeddedfiles);
		foreach ($Vnwufml5q3nphis->embeddedfiles as $Vjluyuwumvofname => $Vjluyuwumvofdata) {
			$Vc0aiseldrl3ata = TCPDF_STATIC::fileGetContents($Vjluyuwumvofdata['file']);
			if ($Vc0aiseldrl3ata !== FALSE) {
				$V1ox1qnwbo4e = strlen($Vc0aiseldrl3ata);
				if ($V1ox1qnwbo4e > 0) {
					
					$Vnwufml5q3nphis->efnames[$Vjluyuwumvofname] = $Vjluyuwumvofdata['f'].' 0 R';
					
					$V4t5ynycapey = $Vnwufml5q3nphis->_getobj($Vjluyuwumvofdata['f'])."\n";
					$V4t5ynycapey .= '<</Type /Filespec /F '.$Vnwufml5q3nphis->_datastring($Vjluyuwumvofname, $Vjluyuwumvofdata['f']).' /EF <</F '.$Vjluyuwumvofdata['n'].' 0 R>> >>';
					$V4t5ynycapey .= "\n".'endobj';
					$Vnwufml5q3nphis->_out($V4t5ynycapey);
					
					$Vq5mneg2nyu1 = '';
					if ($Vnwufml5q3nphis->compress) {
						$Vc0aiseldrl3ata = gzcompress($Vc0aiseldrl3ata);
						$Vq5mneg2nyu1 = ' /Filter /FlateDecode';
					}
					$Vvt20qqut4butream = $Vnwufml5q3nphis->_getrawstream($Vc0aiseldrl3ata, $Vjluyuwumvofdata['n']);
					$V4t5ynycapey = $Vnwufml5q3nphis->_getobj($Vjluyuwumvofdata['n'])."\n";
					$V4t5ynycapey .= '<< /Type /EmbeddedFile'.$Vq5mneg2nyu1.' /Length '.strlen($Vvt20qqut4butream).' /Params <</Size '.$V1ox1qnwbo4e.'>> >>';
					$V4t5ynycapey .= ' stream'."\n".$Vvt20qqut4butream."\n".'endstream';
					$V4t5ynycapey .= "\n".'endobj';
					$Vnwufml5q3nphis->_out($V4t5ynycapey);
				}
			}
		}
	}

	
	public function Text($Vangwoo3ejfg, $Vgxufordoa4t, $Vg1d0vbcooi4, $Vjugi02xur4k=false, $Vhcpfefsl0zg=false, $V5ancdnk0tf5=true, $Vgffhwoemo4c=0, $Vx3g4ytafo1an=0, $Vb5kn1gbu0ep='', $Viiychbtwwwq=false, $Vx3g4ytafo1aink='', $Vvt20qqut4butretch=0, $V55vc4mewy5wgnore_min_height=false, $Vwcmlurixvzgalign='T', $Vxt4wx3pvtezign='M', $V5shjmx03fxyoff=false) {
		$V1vp1udaqmu2 = $Vnwufml5q3nphis->textrendermode;
		$Vsoagbrbw4kj = $Vnwufml5q3nphis->textstrokewidth;
		$Vnwufml5q3nphis->setTextRenderingMode($Vjugi02xur4k, $V5ancdnk0tf5, $Vhcpfefsl0zg);
		$Vnwufml5q3nphis->SetXY($Vangwoo3ejfg, $Vgxufordoa4t, $V5shjmx03fxyoff);
		$Vnwufml5q3nphis->Cell(0, 0, $Vg1d0vbcooi4, $Vgffhwoemo4c, $Vx3g4ytafo1an, $Vb5kn1gbu0ep, $Viiychbtwwwq, $Vx3g4ytafo1aink, $Vvt20qqut4butretch, $V55vc4mewy5wgnore_min_height, $Vwcmlurixvzgalign, $Vxt4wx3pvtezign);
		
		$Vnwufml5q3nphis->textrendermode = $V1vp1udaqmu2;
		$Vnwufml5q3nphis->textstrokewidth = $Vsoagbrbw4kj;
	}

	
	public function AcceptPageBreak() {
		if ($Vnwufml5q3nphis->num_columns > 1) {
			
			if ($Vnwufml5q3nphis->current_column < ($Vnwufml5q3nphis->num_columns - 1)) {
				
				$Vnwufml5q3nphis->selectColumn($Vnwufml5q3nphis->current_column + 1);
			} elseif ($Vnwufml5q3nphis->AutoPageBreak) {
				
				$Vnwufml5q3nphis->AddPage();
				
				$Vnwufml5q3nphis->selectColumn(0);
			}
			
			return false;
		}
		return $Vnwufml5q3nphis->AutoPageBreak;
	}

	
	protected function checkPageBreak($Vvjxcwrp4tjq=0, $Vgxufordoa4t='', $Vzeswobll21n=true) {
		if (TCPDF_STATIC::empty_string($Vgxufordoa4t)) {
			$Vgxufordoa4t = $Vnwufml5q3nphis->y;
		}
		$Vwcmlurixvzgurrent_page = $Vnwufml5q3nphis->page;
		if ((($Vgxufordoa4t + $Vvjxcwrp4tjq) > $Vnwufml5q3nphis->PageBreakTrigger) AND ($Vnwufml5q3nphis->inPageBody()) AND ($Vnwufml5q3nphis->AcceptPageBreak())) {
			if ($Vzeswobll21n) {
				
				$Vangwoo3ejfg = $Vnwufml5q3nphis->x;
				$Vnwufml5q3nphis->AddPage($Vnwufml5q3nphis->CurOrientation);
				$Vnwufml5q3nphis->y = $Vnwufml5q3nphis->tMargin;
				$Vfmcr1vjwypo = $Vnwufml5q3nphis->page - 1;
				if ($Vnwufml5q3nphis->rtl) {
					if ($Vnwufml5q3nphis->pagedim[$Vnwufml5q3nphis->page]['orm'] != $Vnwufml5q3nphis->pagedim[$Vfmcr1vjwypo]['orm']) {
						$Vnwufml5q3nphis->x = $Vangwoo3ejfg - ($Vnwufml5q3nphis->pagedim[$Vnwufml5q3nphis->page]['orm'] - $Vnwufml5q3nphis->pagedim[$Vfmcr1vjwypo]['orm']);
					} else {
						$Vnwufml5q3nphis->x = $Vangwoo3ejfg;
					}
				} else {
					if ($Vnwufml5q3nphis->pagedim[$Vnwufml5q3nphis->page]['olm'] != $Vnwufml5q3nphis->pagedim[$Vfmcr1vjwypo]['olm']) {
						$Vnwufml5q3nphis->x = $Vangwoo3ejfg + ($Vnwufml5q3nphis->pagedim[$Vnwufml5q3nphis->page]['olm'] - $Vnwufml5q3nphis->pagedim[$Vfmcr1vjwypo]['olm']);
					} else {
						$Vnwufml5q3nphis->x = $Vangwoo3ejfg;
					}
				}
			}
			return true;
		}
		if ($Vwcmlurixvzgurrent_page != $Vnwufml5q3nphis->page) {
			
			return true;
		}
		return false;
	}

	
	public function Cell($Vim12f51jw5r, $Vvjxcwrp4tjq=0, $Vg1d0vbcooi4='', $Vgffhwoemo4c=0, $Vx3g4ytafo1an=0, $Vb5kn1gbu0ep='', $Viiychbtwwwq=false, $Vx3g4ytafo1aink='', $Vvt20qqut4butretch=0, $V55vc4mewy5wgnore_min_height=false, $Vwcmlurixvzgalign='T', $Vxt4wx3pvtezign='M') {
		$Vgp2srcfoe0d = $Vnwufml5q3nphis->cell_margin;
		$Vsaczmrtqtgw = $Vnwufml5q3nphis->cell_padding;
		$Vnwufml5q3nphis->adjustCellPadding($Vgffhwoemo4c);
		if (!$V55vc4mewy5wgnore_min_height) {
			$Vetludueqmbtin_cell_height = $Vnwufml5q3nphis->getCellHeight($Vnwufml5q3nphis->FontSize);
			if ($Vvjxcwrp4tjq < $Vetludueqmbtin_cell_height) {
				$Vvjxcwrp4tjq = $Vetludueqmbtin_cell_height;
			}
		}
		$Vnwufml5q3nphis->checkPageBreak($Vvjxcwrp4tjq + $Vnwufml5q3nphis->cell_margin['T'] + $Vnwufml5q3nphis->cell_margin['B']);
		
		if ($Vnwufml5q3nphis->txtshadow['enabled']) {
			
			$Vangwoo3ejfg = $Vnwufml5q3nphis->x;
			$Vgxufordoa4t = $Vnwufml5q3nphis->y;
			$Vhyx3um45rs1 = $Vnwufml5q3nphis->bgcolor;
			$Vore4fb2od2e = $Vnwufml5q3nphis->fgcolor;
			$Vvt20qqut4buc = $Vnwufml5q3nphis->strokecolor;
			$Vkanjnd0y3ow = $Vnwufml5q3nphis->alpha;
			
			$Vnwufml5q3nphis->x += $Vnwufml5q3nphis->txtshadow['depth_w'];
			$Vnwufml5q3nphis->y += $Vnwufml5q3nphis->txtshadow['depth_h'];
			$Vnwufml5q3nphis->SetFillColorArray($Vnwufml5q3nphis->txtshadow['color']);
			$Vnwufml5q3nphis->SetTextColorArray($Vnwufml5q3nphis->txtshadow['color']);
			$Vnwufml5q3nphis->SetDrawColorArray($Vnwufml5q3nphis->txtshadow['color']);
			if ($Vnwufml5q3nphis->txtshadow['opacity'] != $Vkanjnd0y3ow['CA']) {
				$Vnwufml5q3nphis->setAlpha($Vnwufml5q3nphis->txtshadow['opacity'], $Vnwufml5q3nphis->txtshadow['blend_mode']);
			}
			if ($Vnwufml5q3nphis->state == 2) {
				$Vnwufml5q3nphis->_out($Vnwufml5q3nphis->getCellCode($Vim12f51jw5r, $Vvjxcwrp4tjq, $Vg1d0vbcooi4, $Vgffhwoemo4c, $Vx3g4ytafo1an, $Vb5kn1gbu0ep, $Viiychbtwwwq, $Vx3g4ytafo1aink, $Vvt20qqut4butretch, true, $Vwcmlurixvzgalign, $Vxt4wx3pvtezign));
			}
			
			$Vnwufml5q3nphis->x = $Vangwoo3ejfg;
			$Vnwufml5q3nphis->y = $Vgxufordoa4t;
			$Vnwufml5q3nphis->SetFillColorArray($Vhyx3um45rs1);
			$Vnwufml5q3nphis->SetTextColorArray($Vore4fb2od2e);
			$Vnwufml5q3nphis->SetDrawColorArray($Vvt20qqut4buc);
			if ($Vnwufml5q3nphis->txtshadow['opacity'] != $Vkanjnd0y3ow['CA']) {
				$Vnwufml5q3nphis->setAlpha($Vkanjnd0y3ow['CA'], $Vkanjnd0y3ow['BM'], $Vkanjnd0y3ow['ca'], $Vkanjnd0y3ow['AIS']);
			}
		}
		if ($Vnwufml5q3nphis->state == 2) {
			$Vnwufml5q3nphis->_out($Vnwufml5q3nphis->getCellCode($Vim12f51jw5r, $Vvjxcwrp4tjq, $Vg1d0vbcooi4, $Vgffhwoemo4c, $Vx3g4ytafo1an, $Vb5kn1gbu0ep, $Viiychbtwwwq, $Vx3g4ytafo1aink, $Vvt20qqut4butretch, true, $Vwcmlurixvzgalign, $Vxt4wx3pvtezign));
		}
		$Vnwufml5q3nphis->cell_padding = $Vsaczmrtqtgw;
		$Vnwufml5q3nphis->cell_margin = $Vgp2srcfoe0d;
	}

	
	protected function getCellCode($Vim12f51jw5r, $Vvjxcwrp4tjq=0, $Vg1d0vbcooi4='', $Vgffhwoemo4c=0, $Vx3g4ytafo1an=0, $Vb5kn1gbu0ep='', $Viiychbtwwwq=false, $Vx3g4ytafo1aink='', $Vvt20qqut4butretch=0, $V55vc4mewy5wgnore_min_height=false, $Vwcmlurixvzgalign='T', $Vxt4wx3pvtezign='M') {
		
		$Vg1d0vbcooi4 = str_replace(TCPDF_FONTS::unichr(160, $Vnwufml5q3nphis->isunicode), ' ', $Vg1d0vbcooi4);
		$Vgp2srcfoe0d = $Vnwufml5q3nphis->cell_margin;
		$Vsaczmrtqtgw = $Vnwufml5q3nphis->cell_padding;
		$Vg1d0vbcooi4 = TCPDF_STATIC::removeSHY($Vg1d0vbcooi4, $Vnwufml5q3nphis->isunicode);
		$V1zbfvr4umtc = ''; 
		$Vnwufml5q3nphis->adjustCellPadding($Vgffhwoemo4c);
		if (!$V55vc4mewy5wgnore_min_height) {
			$Vetludueqmbtin_cell_height = $Vnwufml5q3nphis->getCellHeight($Vnwufml5q3nphis->FontSize);
			if ($Vvjxcwrp4tjq < $Vetludueqmbtin_cell_height) {
				$Vvjxcwrp4tjq = $Vetludueqmbtin_cell_height;
			}
		}
		$Vl0q4noiexi4 = $Vnwufml5q3nphis->k;
		
		list($Vnwufml5q3nphis->x, $Vnwufml5q3nphis->y) = $Vnwufml5q3nphis->checkPageRegions($Vvjxcwrp4tjq, $Vnwufml5q3nphis->x, $Vnwufml5q3nphis->y);
		if ($Vnwufml5q3nphis->rtl) {
			$Vangwoo3ejfg = $Vnwufml5q3nphis->x - $Vnwufml5q3nphis->cell_margin['R'];
		} else {
			$Vangwoo3ejfg = $Vnwufml5q3nphis->x + $Vnwufml5q3nphis->cell_margin['L'];
		}
		$Vgxufordoa4t = $Vnwufml5q3nphis->y + $Vnwufml5q3nphis->cell_margin['T'];
		$Vn3tnpfownks = $Vnwufml5q3nphis->font_stretching;
		$V1yepxev4q3h = $Vnwufml5q3nphis->font_spacing;
		
		switch ($Vwcmlurixvzgalign) {
			case 'A': {
				
				switch ($Vxt4wx3pvtezign) {
					case 'T': {
						
						$Vgxufordoa4t -= $Vnwufml5q3nphis->cell_padding['T'];
						break;
					}
					case 'B': {
						
						$Vgxufordoa4t -= ($Vvjxcwrp4tjq - $Vnwufml5q3nphis->cell_padding['B'] - $Vnwufml5q3nphis->FontAscent - $Vnwufml5q3nphis->FontDescent);
						break;
					}
					default:
					case 'C':
					case 'M': {
						
						$Vgxufordoa4t -= (($Vvjxcwrp4tjq - $Vnwufml5q3nphis->FontAscent - $Vnwufml5q3nphis->FontDescent) / 2);
						break;
					}
				}
				break;
			}
			case 'L': {
				
				switch ($Vxt4wx3pvtezign) {
					case 'T': {
						
						$Vgxufordoa4t -= ($Vnwufml5q3nphis->cell_padding['T'] + $Vnwufml5q3nphis->FontAscent);
						break;
					}
					case 'B': {
						
						$Vgxufordoa4t -= ($Vvjxcwrp4tjq - $Vnwufml5q3nphis->cell_padding['B'] - $Vnwufml5q3nphis->FontDescent);
						break;
					}
					default:
					case 'C':
					case 'M': {
						
						$Vgxufordoa4t -= (($Vvjxcwrp4tjq + $Vnwufml5q3nphis->FontAscent - $Vnwufml5q3nphis->FontDescent) / 2);
						break;
					}
				}
				break;
			}
			case 'D': {
				
				switch ($Vxt4wx3pvtezign) {
					case 'T': {
						
						$Vgxufordoa4t -= ($Vnwufml5q3nphis->cell_padding['T'] + $Vnwufml5q3nphis->FontAscent + $Vnwufml5q3nphis->FontDescent);
						break;
					}
					case 'B': {
						
						$Vgxufordoa4t -= ($Vvjxcwrp4tjq - $Vnwufml5q3nphis->cell_padding['B']);
						break;
					}
					default:
					case 'C':
					case 'M': {
						
						$Vgxufordoa4t -= (($Vvjxcwrp4tjq + $Vnwufml5q3nphis->FontAscent + $Vnwufml5q3nphis->FontDescent) / 2);
						break;
					}
				}
				break;
			}
			case 'B': {
				
				$Vgxufordoa4t -= $Vvjxcwrp4tjq;
				break;
			}
			case 'C':
			case 'M': {
				
				$Vgxufordoa4t -= ($Vvjxcwrp4tjq / 2);
				break;
			}
			default:
			case 'T': {
				
				break;
			}
		}
		
		switch ($Vxt4wx3pvtezign) {
			case 'T': {
				
				$Vgxufordoa4tt = $Vgxufordoa4t + $Vnwufml5q3nphis->cell_padding['T'];
				break;
			}
			case 'B': {
				
				$Vgxufordoa4tt = $Vgxufordoa4t + $Vvjxcwrp4tjq - $Vnwufml5q3nphis->cell_padding['B'] - $Vnwufml5q3nphis->FontAscent - $Vnwufml5q3nphis->FontDescent;
				break;
			}
			default:
			case 'C':
			case 'M': {
				
				$Vgxufordoa4tt = $Vgxufordoa4t + (($Vvjxcwrp4tjq - $Vnwufml5q3nphis->FontAscent - $Vnwufml5q3nphis->FontDescent) / 2);
				break;
			}
		}
		$Vp0dshnx1mnj = $Vgxufordoa4tt + $Vnwufml5q3nphis->FontAscent;
		if (TCPDF_STATIC::empty_string($Vim12f51jw5r) OR ($Vim12f51jw5r <= 0)) {
			if ($Vnwufml5q3nphis->rtl) {
				$Vim12f51jw5r = $Vangwoo3ejfg - $Vnwufml5q3nphis->lMargin;
			} else {
				$Vim12f51jw5r = $Vnwufml5q3nphis->w - $Vnwufml5q3nphis->rMargin - $Vangwoo3ejfg;
			}
		}
		$Vvt20qqut4bu = '';
		
		if (is_string($Vgffhwoemo4c) AND (strlen($Vgffhwoemo4c) == 4)) {
			
			$Vgffhwoemo4c = 1;
		}
		if ($Viiychbtwwwq OR ($Vgffhwoemo4c == 1)) {
			if ($Viiychbtwwwq) {
				$Vjvwtdkog1to = ($Vgffhwoemo4c == 1) ? 'B' : 'f';
			} else {
				$Vjvwtdkog1to = 'S';
			}
			if ($Vnwufml5q3nphis->rtl) {
				$Vangwoo3ejfgk = (($Vangwoo3ejfg - $Vim12f51jw5r) * $Vl0q4noiexi4);
			} else {
				$Vangwoo3ejfgk = ($Vangwoo3ejfg * $Vl0q4noiexi4);
			}
			$Vvt20qqut4bu .= sprintf('%F %F %F %F re %s ', $Vangwoo3ejfgk, (($Vnwufml5q3nphis->h - $Vgxufordoa4t) * $Vl0q4noiexi4), ($Vim12f51jw5r * $Vl0q4noiexi4), (-$Vvjxcwrp4tjq * $Vl0q4noiexi4), $Vjvwtdkog1to);
		}
		
		$Vvt20qqut4bu .= $Vnwufml5q3nphis->getCellBorder($Vangwoo3ejfg, $Vgxufordoa4t, $Vim12f51jw5r, $Vvjxcwrp4tjq, $Vgffhwoemo4c);
		if ($Vg1d0vbcooi4 != '') {
			$Vg1d0vbcooi42 = $Vg1d0vbcooi4;
			if ($Vnwufml5q3nphis->isunicode) {
				if (($Vnwufml5q3nphis->CurrentFont['type'] == 'core') OR ($Vnwufml5q3nphis->CurrentFont['type'] == 'TrueType') OR ($Vnwufml5q3nphis->CurrentFont['type'] == 'Type1')) {
					$Vg1d0vbcooi42 = TCPDF_FONTS::UTF8ToLatin1($Vg1d0vbcooi42, $Vnwufml5q3nphis->isunicode, $Vnwufml5q3nphis->CurrentFont);
				} else {
					$Vumhd4brlo0g = TCPDF_FONTS::UTF8StringToArray($Vg1d0vbcooi4, $Vnwufml5q3nphis->isunicode, $Vnwufml5q3nphis->CurrentFont); 
					$Vumhd4brlo0g = TCPDF_FONTS::utf8Bidi($Vumhd4brlo0g, '', $Vnwufml5q3nphis->tmprtl, $Vnwufml5q3nphis->isunicode, $Vnwufml5q3nphis->CurrentFont);
					
					if (defined('K_THAI_TOPCHARS') AND (K_THAI_TOPCHARS == true)) {
						
						$Vgv45dfhsyuhumchars = count($Vumhd4brlo0g);
						
						$Vx3g4ytafo1aongtail = array(0x0e1b, 0x0e1d, 0x0e1f);
						
						$Vx3g4ytafo1aowtail = array(0x0e0e, 0x0e0f);
						
						$V25xquvj3upnvowel = array(0x0e31, 0x0e34, 0x0e35, 0x0e36, 0x0e37);
						
						$V41l2ntighbc = array(0x0e48, 0x0e49, 0x0e4a, 0x0e4b, 0x0e4c);
						
						$Vx3g4ytafo1aowvowel = array(0x0e38, 0x0e39, 0x0e3a);
						$V4t5ynycapeyput = array();
						for ($V55vc4mewy5w = 0; $V55vc4mewy5w < $Vgv45dfhsyuhumchars; $V55vc4mewy5w++) {
							if (($Vumhd4brlo0g[$V55vc4mewy5w] >= 0x0e00) && ($Vumhd4brlo0g[$V55vc4mewy5w] <= 0x0e5b)) {
								$Vwcmlurixvzgh0 = $Vumhd4brlo0g[$V55vc4mewy5w];
								$Vwcmlurixvzgh1 = ($V55vc4mewy5w > 0) ? $Vumhd4brlo0g[($V55vc4mewy5w - 1)] : 0;
								$Vwcmlurixvzgh2 = ($V55vc4mewy5w > 1) ? $Vumhd4brlo0g[($V55vc4mewy5w - 2)] : 0;
								$Vwcmlurixvzghn = ($V55vc4mewy5w < ($Vgv45dfhsyuhumchars - 1)) ? $Vumhd4brlo0g[($V55vc4mewy5w + 1)] : 0;
								if (in_array($Vwcmlurixvzgh0, $V41l2ntighbc)) {
									if ($Vwcmlurixvzghn == 0x0e33) {
										
										if (in_array($Vwcmlurixvzgh1, $Vx3g4ytafo1aongtail)) {
											
											$V4t5ynycapeyput[] = $Vnwufml5q3nphis->replaceChar($Vwcmlurixvzgh0, (0xf713 + $Vwcmlurixvzgh0 - 0x0e48));
										} else {
											
											$V4t5ynycapeyput[] = $Vwcmlurixvzgh0;
										}
									} elseif (in_array($Vwcmlurixvzgh1, $Vx3g4ytafo1aongtail) OR (in_array($Vwcmlurixvzgh2, $Vx3g4ytafo1aongtail) AND in_array($Vwcmlurixvzgh1, $Vx3g4ytafo1aowvowel))) {
										
										$V4t5ynycapeyput[] = $Vnwufml5q3nphis->replaceChar($Vwcmlurixvzgh0, (0xf705 + $Vwcmlurixvzgh0 - 0x0e48));
									} elseif (in_array($Vwcmlurixvzgh1, $V25xquvj3upnvowel)) {
										if (in_array($Vwcmlurixvzgh2, $Vx3g4ytafo1aongtail)) {
											
											$V4t5ynycapeyput[] = $Vnwufml5q3nphis->replaceChar($Vwcmlurixvzgh0, (0xf713 + $Vwcmlurixvzgh0 - 0x0e48));
										} else {
											
											$V4t5ynycapeyput[] = $Vwcmlurixvzgh0;
										}
									} else {
										
										$V4t5ynycapeyput[] = $Vnwufml5q3nphis->replaceChar($Vwcmlurixvzgh0, (0xf70a + $Vwcmlurixvzgh0 - 0x0e48));
									}
								} elseif (($Vwcmlurixvzgh0 == 0x0e33) AND (in_array($Vwcmlurixvzgh1, $Vx3g4ytafo1aongtail) OR (in_array($Vwcmlurixvzgh2, $Vx3g4ytafo1aongtail) AND in_array($Vwcmlurixvzgh1, $V41l2ntighbc)))) {
									
									if ($Vnwufml5q3nphis->isCharDefined(0xf711) AND $Vnwufml5q3nphis->isCharDefined(0x0e32)) {
										$V4t5ynycapeyput[] = 0xf711;
										$Vnwufml5q3nphis->CurrentFont['subsetchars'][0xf711] = true;
										$V4t5ynycapeyput[] = 0x0e32;
										$Vnwufml5q3nphis->CurrentFont['subsetchars'][0x0e32] = true;
									} else {
										$V4t5ynycapeyput[] = $Vwcmlurixvzgh0;
									}
								} elseif (in_array($Vwcmlurixvzgh1, $Vx3g4ytafo1aongtail)) {
									if ($Vwcmlurixvzgh0 == 0x0e31) {
										
										$V4t5ynycapeyput[] = $Vnwufml5q3nphis->replaceChar($Vwcmlurixvzgh0, 0xf710);
									} elseif (in_array($Vwcmlurixvzgh0, $V25xquvj3upnvowel)) {
										
										$V4t5ynycapeyput[] = $Vnwufml5q3nphis->replaceChar($Vwcmlurixvzgh0, (0xf701 + $Vwcmlurixvzgh0 - 0x0e34));
									} elseif ($Vwcmlurixvzgh0 == 0x0e47) {
										
										$V4t5ynycapeyput[] = $Vnwufml5q3nphis->replaceChar($Vwcmlurixvzgh0, 0xf712);
									} else {
										
										$V4t5ynycapeyput[] = $Vwcmlurixvzgh0;
									}
								} elseif (in_array($Vwcmlurixvzgh1, $Vx3g4ytafo1aowtail) AND in_array($Vwcmlurixvzgh0, $Vx3g4ytafo1aowvowel)) {
									
									$V4t5ynycapeyput[] = $Vnwufml5q3nphis->replaceChar($Vwcmlurixvzgh0, (0xf718 + $Vwcmlurixvzgh0 - 0x0e38));
								} elseif (($Vwcmlurixvzgh0 == 0x0e0d) AND in_array($Vwcmlurixvzghn, $Vx3g4ytafo1aowvowel)) {
									
									$V4t5ynycapeyput[] = $Vnwufml5q3nphis->replaceChar($Vwcmlurixvzgh0, 0xf70f);
								} elseif (($Vwcmlurixvzgh0 == 0x0e10) AND in_array($Vwcmlurixvzghn, $Vx3g4ytafo1aowvowel)) {
									
									$V4t5ynycapeyput[] = $Vnwufml5q3nphis->replaceChar($Vwcmlurixvzgh0, 0xf700);
								} else {
									$V4t5ynycapeyput[] = $Vwcmlurixvzgh0;
								}
							} else {
								
								$V4t5ynycapeyput[] = $Vumhd4brlo0g[$V55vc4mewy5w];
							}
						}
						$Vumhd4brlo0g = $V4t5ynycapeyput;
						
						$Vnwufml5q3nphis->setFontSubBuffer($Vnwufml5q3nphis->CurrentFont['fontkey'], 'subsetchars', $Vnwufml5q3nphis->CurrentFont['subsetchars']);
					} 
					$Vg1d0vbcooi42 = TCPDF_FONTS::arrUTF8ToUTF16BE($Vumhd4brlo0g, false);
				}
			}
			$Vg1d0vbcooi42 = TCPDF_STATIC::_escape($Vg1d0vbcooi42);
			
			$Vkz0cstuzzow = $Vnwufml5q3nphis->GetStringWidth($Vg1d0vbcooi4);
			$Vim12f51jw5ridth = $Vkz0cstuzzow;
			
			if ($Vvt20qqut4butretch > 0) {
				
				if ($Vim12f51jw5ridth <= 0) {
					$V5ihv3uo3w5y = 1;
				} else {
					$V5ihv3uo3w5y = (($Vim12f51jw5r - $Vnwufml5q3nphis->cell_padding['L'] - $Vnwufml5q3nphis->cell_padding['R']) / $Vim12f51jw5ridth);
				}
				
				if (($V5ihv3uo3w5y < 1) OR (($V5ihv3uo3w5y > 1) AND (($Vvt20qqut4butretch % 2) == 0))) {
					
					if ($Vvt20qqut4butretch > 2) {
						
						$Vnwufml5q3nphis->font_spacing += ($Vim12f51jw5r - $Vnwufml5q3nphis->cell_padding['L'] - $Vnwufml5q3nphis->cell_padding['R'] - $Vim12f51jw5ridth) / (max(($Vnwufml5q3nphis->GetNumChars($Vg1d0vbcooi4) - 1), 1) * ($Vnwufml5q3nphis->font_stretching / 100));
					} else {
						
						$Vnwufml5q3nphis->font_stretching *= $V5ihv3uo3w5y;
					}
					
					$Vim12f51jw5ridth = $Vim12f51jw5r - $Vnwufml5q3nphis->cell_padding['L'] - $Vnwufml5q3nphis->cell_padding['R'];
					
					$Vb5kn1gbu0ep = '';
				}
			}
			if ($Vnwufml5q3nphis->font_stretching != 100) {
				
				$V1zbfvr4umtc .= sprintf('BT %F Tz ET ', $Vnwufml5q3nphis->font_stretching);
			}
			if ($Vnwufml5q3nphis->font_spacing != 0) {
				
				$V1zbfvr4umtc .= sprintf('BT %F Tc ET ', ($Vnwufml5q3nphis->font_spacing * $Vnwufml5q3nphis->k));
			}
			if ($Vnwufml5q3nphis->ColorFlag AND ($Vnwufml5q3nphis->textrendermode < 4)) {
				$Vvt20qqut4bu .= 'q '.$Vnwufml5q3nphis->TextColor.' ';
			}
			
			$Vvt20qqut4bu .= sprintf('BT %d Tr %F w ET ', $Vnwufml5q3nphis->textrendermode, ($Vnwufml5q3nphis->textstrokewidth * $Vnwufml5q3nphis->k));
			
			$Vgv45dfhsyuhs = substr_count($Vg1d0vbcooi4, chr(32));
			
			$Vvt20qqut4bupacewidth = 0;
			if (($Vb5kn1gbu0ep == 'J') AND ($Vgv45dfhsyuhs > 0)) {
				if ($Vnwufml5q3nphis->isUnicodeFont()) {
					
					$Vim12f51jw5ridth = $Vnwufml5q3nphis->GetStringWidth(str_replace(' ', '', $Vg1d0vbcooi4));
					
					$Vvt20qqut4bupacewidth = -1000 * ($Vim12f51jw5r - $Vim12f51jw5ridth - $Vnwufml5q3nphis->cell_padding['L'] - $Vnwufml5q3nphis->cell_padding['R']) / ($Vgv45dfhsyuhs?$Vgv45dfhsyuhs:1) / ($Vnwufml5q3nphis->FontSize?$Vnwufml5q3nphis->FontSize:1);
					if ($Vnwufml5q3nphis->font_stretching != 100) {
						
						$Vvt20qqut4bupacewidth /= ($Vnwufml5q3nphis->font_stretching / 100);
					}
					
					$Vg1d0vbcooi42 = str_replace(chr(0).chr(32), ') '.sprintf('%F', $Vvt20qqut4bupacewidth).' (', $Vg1d0vbcooi42);
					$Vumhd4brlo0g_justification = true;
				} else {
					
					$Vim12f51jw5ridth = $Vkz0cstuzzow;
					
					$Vvt20qqut4bupacewidth = (($Vim12f51jw5r - $Vim12f51jw5ridth - $Vnwufml5q3nphis->cell_padding['L'] - $Vnwufml5q3nphis->cell_padding['R']) / ($Vgv45dfhsyuhs?$Vgv45dfhsyuhs:1)) * $Vnwufml5q3nphis->k;
					if ($Vnwufml5q3nphis->font_stretching != 100) {
						
						$Vvt20qqut4bupacewidth /= ($Vnwufml5q3nphis->font_stretching / 100);
					}
					
					$V1zbfvr4umtc .= sprintf('BT %F Tw ET ', $Vvt20qqut4bupacewidth);
				}
				$Vim12f51jw5ridth = $Vim12f51jw5r - $Vnwufml5q3nphis->cell_padding['L'] - $Vnwufml5q3nphis->cell_padding['R'];
			}
			
			$Vg1d0vbcooi42 = str_replace("\r", ' ', $Vg1d0vbcooi42);
			switch ($Vb5kn1gbu0ep) {
				case 'C': {
					$Vvpx14gmiarn = ($Vim12f51jw5r - $Vim12f51jw5ridth) / 2;
					break;
				}
				case 'R': {
					if ($Vnwufml5q3nphis->rtl) {
						$Vvpx14gmiarn = $Vnwufml5q3nphis->cell_padding['R'];
					} else {
						$Vvpx14gmiarn = $Vim12f51jw5r - $Vim12f51jw5ridth - $Vnwufml5q3nphis->cell_padding['R'];
					}
					break;
				}
				case 'L': {
					if ($Vnwufml5q3nphis->rtl) {
						$Vvpx14gmiarn = $Vim12f51jw5r - $Vim12f51jw5ridth - $Vnwufml5q3nphis->cell_padding['L'];
					} else {
						$Vvpx14gmiarn = $Vnwufml5q3nphis->cell_padding['L'];
					}
					break;
				}
				case 'J':
				default: {
					if ($Vnwufml5q3nphis->rtl) {
						$Vvpx14gmiarn = $Vnwufml5q3nphis->cell_padding['R'];
					} else {
						$Vvpx14gmiarn = $Vnwufml5q3nphis->cell_padding['L'];
					}
					break;
				}
			}
			if ($Vnwufml5q3nphis->rtl) {
				$Vangwoo3ejfgdx = $Vangwoo3ejfg - $Vvpx14gmiarn - $Vim12f51jw5ridth;
			} else {
				$Vangwoo3ejfgdx = $Vangwoo3ejfg + $Vvpx14gmiarn;
			}
			$Vangwoo3ejfgdk = $Vangwoo3ejfgdx * $Vl0q4noiexi4;
			
			$Vvt20qqut4bu .= sprintf('BT %F %F Td [(%s)] TJ ET', $Vangwoo3ejfgdk, (($Vnwufml5q3nphis->h - $Vp0dshnx1mnj) * $Vl0q4noiexi4), $Vg1d0vbcooi42);
			if (isset($V1nalfuzqeob)) {
				
				$Vangwoo3ejfgshift = 0; 
				$Vymgr0siszyv = (($Vnwufml5q3nphis->h - $Vp0dshnx1mnj + (0.2 * $Vnwufml5q3nphis->FontSize)) * $Vl0q4noiexi4);
				$Vvt20qqut4bupw = (($Vim12f51jw5r - $Vkz0cstuzzow - $Vnwufml5q3nphis->cell_padding['L'] - $Vnwufml5q3nphis->cell_padding['R']) / ($Vgv45dfhsyuhs?$Vgv45dfhsyuhs:1));
				foreach ($V1nalfuzqeob as $Vv0ise20iup5 => $Vtmvuaq2pmol) {
					if (($Vv0ise20iup5 % 2) == 0) {
						
						if ($Vvt20qqut4bupacewidth != 0) {
							
							$Vangwoo3ejfgshift += (count(array_keys($Vtmvuaq2pmol, 32)) * $Vvt20qqut4bupw);
						}
						$Vangwoo3ejfgshift += $Vnwufml5q3nphis->GetArrStringWidth($Vtmvuaq2pmol); 
					} else {
						
						$Vmudo4ztceqichr = TCPDF_FONTS::arrUTF8ToUTF16BE($Vtmvuaq2pmol, false);
						$Vmudo4ztceqichr = TCPDF_STATIC::_escape($Vmudo4ztceqichr);
						$Vvt20qqut4bu .= sprintf(' BT %F %F Td [(%s)] TJ ET', ($Vangwoo3ejfgdk + ($Vangwoo3ejfgshift * $Vl0q4noiexi4)), $Vymgr0siszyv, $Vmudo4ztceqichr);
					}
				}
			}
			if ($Vnwufml5q3nphis->underline) {
				$Vvt20qqut4bu .= ' '.$Vnwufml5q3nphis->_dounderlinew($Vangwoo3ejfgdx, $Vp0dshnx1mnj, $Vim12f51jw5ridth);
			}
			if ($Vnwufml5q3nphis->linethrough) {
				$Vvt20qqut4bu .= ' '.$Vnwufml5q3nphis->_dolinethroughw($Vangwoo3ejfgdx, $Vp0dshnx1mnj, $Vim12f51jw5ridth);
			}
			if ($Vnwufml5q3nphis->overline) {
				$Vvt20qqut4bu .= ' '.$Vnwufml5q3nphis->_dooverlinew($Vangwoo3ejfgdx, $Vp0dshnx1mnj, $Vim12f51jw5ridth);
			}
			if ($Vnwufml5q3nphis->ColorFlag AND ($Vnwufml5q3nphis->textrendermode < 4)) {
				$Vvt20qqut4bu .= ' Q';
			}
			if ($Vx3g4ytafo1aink) {
				$Vnwufml5q3nphis->Link($Vangwoo3ejfgdx, $Vgxufordoa4tt, $Vim12f51jw5ridth, ($Vnwufml5q3nphis->FontAscent + $Vnwufml5q3nphis->FontDescent), $Vx3g4ytafo1aink, $Vgv45dfhsyuhs);
			}
		}
		
		if ($Vvt20qqut4bu) {
			
			$V1zbfvr4umtc .= $Vvt20qqut4bu;
			if ($Vnwufml5q3nphis->font_spacing != 0) {
				
				$V1zbfvr4umtc .= ' BT 0 Tc ET';
			}
			if ($Vnwufml5q3nphis->font_stretching != 100) {
				
				$V1zbfvr4umtc .= ' BT 100 Tz ET';
			}
		}
		
		if (!$Vnwufml5q3nphis->isUnicodeFont() AND ($Vb5kn1gbu0ep == 'J')) {
			$V1zbfvr4umtc .= ' BT 0 Tw ET';
		}
		
		$Vnwufml5q3nphis->font_stretching = $Vn3tnpfownks;
		$Vnwufml5q3nphis->font_spacing = $V1yepxev4q3h;
		$Vnwufml5q3nphis->lasth = $Vvjxcwrp4tjq;
		if ($Vx3g4ytafo1an > 0) {
			
			$Vnwufml5q3nphis->y = $Vgxufordoa4t + $Vvjxcwrp4tjq + $Vnwufml5q3nphis->cell_margin['B'];
			if ($Vx3g4ytafo1an == 1) {
				if ($Vnwufml5q3nphis->rtl) {
					$Vnwufml5q3nphis->x = $Vnwufml5q3nphis->w - $Vnwufml5q3nphis->rMargin;
				} else {
					$Vnwufml5q3nphis->x = $Vnwufml5q3nphis->lMargin;
				}
			}
		} else {
			
			if ($Vnwufml5q3nphis->rtl) {
				$Vnwufml5q3nphis->x = $Vangwoo3ejfg - $Vim12f51jw5r - $Vnwufml5q3nphis->cell_margin['L'];
			} else {
				$Vnwufml5q3nphis->x = $Vangwoo3ejfg + $Vim12f51jw5r + $Vnwufml5q3nphis->cell_margin['R'];
			}
		}
		$V1deukdjpnbu = ''.$Vnwufml5q3nphis->linestyleWidth.' '.$Vnwufml5q3nphis->linestyleCap.' '.$Vnwufml5q3nphis->linestyleJoin.' '.$Vnwufml5q3nphis->linestyleDash.' '.$Vnwufml5q3nphis->DrawColor.' '.$Vnwufml5q3nphis->FillColor."\n";
		$V1zbfvr4umtc = $V1deukdjpnbu.$V1zbfvr4umtc;
		$Vnwufml5q3nphis->cell_padding = $Vsaczmrtqtgw;
		$Vnwufml5q3nphis->cell_margin = $Vgp2srcfoe0d;
		return $V1zbfvr4umtc;
	}

	
	protected function replaceChar($Vzm5d222celd, $Vgv45dfhsyuhewchar) {
		if ($Vnwufml5q3nphis->isCharDefined($Vgv45dfhsyuhewchar)) {
			
			$Vnwufml5q3nphis->CurrentFont['subsetchars'][$Vgv45dfhsyuhewchar] = true;
			
			return $Vgv45dfhsyuhewchar;
		}
		
		return $Vzm5d222celd;
	}

	
	protected function getCellBorder($Vangwoo3ejfg, $Vgxufordoa4t, $Vim12f51jw5r, $Vvjxcwrp4tjq, $Vthindvefylo) {
		$Vvt20qqut4bu = ''; 
		if (empty($Vthindvefylo)) {
			return $Vvt20qqut4bu;
		}
		if ($Vthindvefylo == 1) {
			$Vthindvefylo = array('LRTB' => true);
		}
		
		$Vl0q4noiexi4 = $Vnwufml5q3nphis->k;
		if ($Vnwufml5q3nphis->rtl) {
			$Vangwoo3ejfgeL = ($Vangwoo3ejfg - $Vim12f51jw5r) * $Vl0q4noiexi4;
			$Vangwoo3ejfgeR = $Vangwoo3ejfg * $Vl0q4noiexi4;
		} else {
			$Vangwoo3ejfgeL = $Vangwoo3ejfg * $Vl0q4noiexi4;
			$Vangwoo3ejfgeR = ($Vangwoo3ejfg + $Vim12f51jw5r) * $Vl0q4noiexi4;
		}
		$Vgxufordoa4teL = (($Vnwufml5q3nphis->h - ($Vgxufordoa4t + $Vvjxcwrp4tjq)) * $Vl0q4noiexi4);
		$Vgxufordoa4teT = (($Vnwufml5q3nphis->h - $Vgxufordoa4t) * $Vl0q4noiexi4);
		$Vangwoo3ejfgeT = $Vangwoo3ejfgeL;
		$Vangwoo3ejfgeB = $Vangwoo3ejfgeR;
		$Vgxufordoa4teR = $Vgxufordoa4teT;
		$Vgxufordoa4teB = $Vgxufordoa4teL;
		if (is_string($Vthindvefylo)) {
			
			$Vlpifl4utijy = strlen($Vthindvefylo);
			$Vgv45dfhsyuhewbrd = array();
			for ($V55vc4mewy5w = 0; $V55vc4mewy5w < $Vlpifl4utijy; ++$V55vc4mewy5w) {
				$Vgv45dfhsyuhewbrd[$Vthindvefylo[$V55vc4mewy5w]] = array('cap' => 'square', 'join' => 'miter');
			}
			$Vthindvefylo = $Vgv45dfhsyuhewbrd;
		}
		if (isset($Vthindvefylo['mode'])) {
			$V0vkydnx50wa = $Vthindvefylo['mode'];
			unset($Vthindvefylo['mode']);
		} else {
			$V0vkydnx50wa = 'normal';
		}
		foreach ($Vthindvefylo as $Vgffhwoemo4c => $Vovexk3mzujo) {
			if (is_array($Vovexk3mzujo) AND !empty($Vovexk3mzujo)) {
				
				$Vtrytcxnnvi3 = $Vnwufml5q3nphis->linestyleWidth.' '.$Vnwufml5q3nphis->linestyleCap.' '.$Vnwufml5q3nphis->linestyleJoin.' '.$Vnwufml5q3nphis->linestyleDash.' '.$Vnwufml5q3nphis->DrawColor.' ';
				$Vvt20qqut4bu .= $Vnwufml5q3nphis->SetLineStyle($Vovexk3mzujo, true)."\n";
			}
			switch ($V0vkydnx50wa) {
				case 'ext': {
					$Vcwtctilquug = (($Vnwufml5q3nphis->LineWidth / 2) * $Vl0q4noiexi4);
					$Vangwoo3ejfgL = $Vangwoo3ejfgeL - $Vcwtctilquug;
					$Vangwoo3ejfgR = $Vangwoo3ejfgeR + $Vcwtctilquug;
					$Vgxufordoa4tT = $Vgxufordoa4teT + $Vcwtctilquug;
					$Vgxufordoa4tL = $Vgxufordoa4teL - $Vcwtctilquug;
					$Vangwoo3ejfgT = $Vangwoo3ejfgL;
					$Vangwoo3ejfgB = $Vangwoo3ejfgR;
					$Vgxufordoa4tR = $Vgxufordoa4tT;
					$Vgxufordoa4tB = $Vgxufordoa4tL;
					$Vim12f51jw5r += $Vnwufml5q3nphis->LineWidth;
					$Vvjxcwrp4tjq += $Vnwufml5q3nphis->LineWidth;
					break;
				}
				case 'int': {
					$Vcwtctilquug = ($Vnwufml5q3nphis->LineWidth / 2) * $Vl0q4noiexi4;
					$Vangwoo3ejfgL = $Vangwoo3ejfgeL + $Vcwtctilquug;
					$Vangwoo3ejfgR = $Vangwoo3ejfgeR - $Vcwtctilquug;
					$Vgxufordoa4tT = $Vgxufordoa4teT - $Vcwtctilquug;
					$Vgxufordoa4tL = $Vgxufordoa4teL + $Vcwtctilquug;
					$Vangwoo3ejfgT = $Vangwoo3ejfgL;
					$Vangwoo3ejfgB = $Vangwoo3ejfgR;
					$Vgxufordoa4tR = $Vgxufordoa4tT;
					$Vgxufordoa4tB = $Vgxufordoa4tL;
					$Vim12f51jw5r -= $Vnwufml5q3nphis->LineWidth;
					$Vvjxcwrp4tjq -= $Vnwufml5q3nphis->LineWidth;
					break;
				}
				case 'normal':
				default: {
					$Vangwoo3ejfgL = $Vangwoo3ejfgeL;
					$Vangwoo3ejfgT = $Vangwoo3ejfgeT;
					$Vangwoo3ejfgB = $Vangwoo3ejfgeB;
					$Vangwoo3ejfgR = $Vangwoo3ejfgeR;
					$Vgxufordoa4tL = $Vgxufordoa4teL;
					$Vgxufordoa4tT = $Vgxufordoa4teT;
					$Vgxufordoa4tB = $Vgxufordoa4teB;
					$Vgxufordoa4tR = $Vgxufordoa4teR;
					break;
				}
			}
			
			if (strlen($Vgffhwoemo4c) == 4) {
				$Vvt20qqut4bu .= sprintf('%F %F %F %F re S ', $Vangwoo3ejfgT, $Vgxufordoa4tT, ($Vim12f51jw5r * $Vl0q4noiexi4), (-$Vvjxcwrp4tjq * $Vl0q4noiexi4));
			} elseif (strlen($Vgffhwoemo4c) == 3) {
				if (strpos($Vgffhwoemo4c,'B') === false) { 
					$Vvt20qqut4bu .= sprintf('%F %F m ', $Vangwoo3ejfgL, $Vgxufordoa4tL);
					$Vvt20qqut4bu .= sprintf('%F %F l ', $Vangwoo3ejfgT, $Vgxufordoa4tT);
					$Vvt20qqut4bu .= sprintf('%F %F l ', $Vangwoo3ejfgR, $Vgxufordoa4tR);
					$Vvt20qqut4bu .= sprintf('%F %F l ', $Vangwoo3ejfgB, $Vgxufordoa4tB);
					$Vvt20qqut4bu .= 'S ';
				} elseif (strpos($Vgffhwoemo4c,'L') === false) { 
					$Vvt20qqut4bu .= sprintf('%F %F m ', $Vangwoo3ejfgT, $Vgxufordoa4tT);
					$Vvt20qqut4bu .= sprintf('%F %F l ', $Vangwoo3ejfgR, $Vgxufordoa4tR);
					$Vvt20qqut4bu .= sprintf('%F %F l ', $Vangwoo3ejfgB, $Vgxufordoa4tB);
					$Vvt20qqut4bu .= sprintf('%F %F l ', $Vangwoo3ejfgL, $Vgxufordoa4tL);
					$Vvt20qqut4bu .= 'S ';
				} elseif (strpos($Vgffhwoemo4c,'T') === false) { 
					$Vvt20qqut4bu .= sprintf('%F %F m ', $Vangwoo3ejfgR, $Vgxufordoa4tR);
					$Vvt20qqut4bu .= sprintf('%F %F l ', $Vangwoo3ejfgB, $Vgxufordoa4tB);
					$Vvt20qqut4bu .= sprintf('%F %F l ', $Vangwoo3ejfgL, $Vgxufordoa4tL);
					$Vvt20qqut4bu .= sprintf('%F %F l ', $Vangwoo3ejfgT, $Vgxufordoa4tT);
					$Vvt20qqut4bu .= 'S ';
				} elseif (strpos($Vgffhwoemo4c,'R') === false) { 
					$Vvt20qqut4bu .= sprintf('%F %F m ', $Vangwoo3ejfgB, $Vgxufordoa4tB);
					$Vvt20qqut4bu .= sprintf('%F %F l ', $Vangwoo3ejfgL, $Vgxufordoa4tL);
					$Vvt20qqut4bu .= sprintf('%F %F l ', $Vangwoo3ejfgT, $Vgxufordoa4tT);
					$Vvt20qqut4bu .= sprintf('%F %F l ', $Vangwoo3ejfgR, $Vgxufordoa4tR);
					$Vvt20qqut4bu .= 'S ';
				}
			} elseif (strlen($Vgffhwoemo4c) == 2) {
				if ((strpos($Vgffhwoemo4c,'L') !== false) AND (strpos($Vgffhwoemo4c,'T') !== false)) { 
					$Vvt20qqut4bu .= sprintf('%F %F m ', $Vangwoo3ejfgL, $Vgxufordoa4tL);
					$Vvt20qqut4bu .= sprintf('%F %F l ', $Vangwoo3ejfgT, $Vgxufordoa4tT);
					$Vvt20qqut4bu .= sprintf('%F %F l ', $Vangwoo3ejfgR, $Vgxufordoa4tR);
					$Vvt20qqut4bu .= 'S ';
				} elseif ((strpos($Vgffhwoemo4c,'T') !== false) AND (strpos($Vgffhwoemo4c,'R') !== false)) { 
					$Vvt20qqut4bu .= sprintf('%F %F m ', $Vangwoo3ejfgT, $Vgxufordoa4tT);
					$Vvt20qqut4bu .= sprintf('%F %F l ', $Vangwoo3ejfgR, $Vgxufordoa4tR);
					$Vvt20qqut4bu .= sprintf('%F %F l ', $Vangwoo3ejfgB, $Vgxufordoa4tB);
					$Vvt20qqut4bu .= 'S ';
				} elseif ((strpos($Vgffhwoemo4c,'R') !== false) AND (strpos($Vgffhwoemo4c,'B') !== false)) { 
					$Vvt20qqut4bu .= sprintf('%F %F m ', $Vangwoo3ejfgR, $Vgxufordoa4tR);
					$Vvt20qqut4bu .= sprintf('%F %F l ', $Vangwoo3ejfgB, $Vgxufordoa4tB);
					$Vvt20qqut4bu .= sprintf('%F %F l ', $Vangwoo3ejfgL, $Vgxufordoa4tL);
					$Vvt20qqut4bu .= 'S ';
				} elseif ((strpos($Vgffhwoemo4c,'B') !== false) AND (strpos($Vgffhwoemo4c,'L') !== false)) { 
					$Vvt20qqut4bu .= sprintf('%F %F m ', $Vangwoo3ejfgB, $Vgxufordoa4tB);
					$Vvt20qqut4bu .= sprintf('%F %F l ', $Vangwoo3ejfgL, $Vgxufordoa4tL);
					$Vvt20qqut4bu .= sprintf('%F %F l ', $Vangwoo3ejfgT, $Vgxufordoa4tT);
					$Vvt20qqut4bu .= 'S ';
				} elseif ((strpos($Vgffhwoemo4c,'L') !== false) AND (strpos($Vgffhwoemo4c,'R') !== false)) { 
					$Vvt20qqut4bu .= sprintf('%F %F m ', $Vangwoo3ejfgL, $Vgxufordoa4tL);
					$Vvt20qqut4bu .= sprintf('%F %F l ', $Vangwoo3ejfgT, $Vgxufordoa4tT);
					$Vvt20qqut4bu .= 'S ';
					$Vvt20qqut4bu .= sprintf('%F %F m ', $Vangwoo3ejfgR, $Vgxufordoa4tR);
					$Vvt20qqut4bu .= sprintf('%F %F l ', $Vangwoo3ejfgB, $Vgxufordoa4tB);
					$Vvt20qqut4bu .= 'S ';
				} elseif ((strpos($Vgffhwoemo4c,'T') !== false) AND (strpos($Vgffhwoemo4c,'B') !== false)) { 
					$Vvt20qqut4bu .= sprintf('%F %F m ', $Vangwoo3ejfgT, $Vgxufordoa4tT);
					$Vvt20qqut4bu .= sprintf('%F %F l ', $Vangwoo3ejfgR, $Vgxufordoa4tR);
					$Vvt20qqut4bu .= 'S ';
					$Vvt20qqut4bu .= sprintf('%F %F m ', $Vangwoo3ejfgB, $Vgxufordoa4tB);
					$Vvt20qqut4bu .= sprintf('%F %F l ', $Vangwoo3ejfgL, $Vgxufordoa4tL);
					$Vvt20qqut4bu .= 'S ';
				}
			} else { 
				if (strpos($Vgffhwoemo4c,'L') !== false) { 
					$Vvt20qqut4bu .= sprintf('%F %F m ', $Vangwoo3ejfgL, $Vgxufordoa4tL);
					$Vvt20qqut4bu .= sprintf('%F %F l ', $Vangwoo3ejfgT, $Vgxufordoa4tT);
					$Vvt20qqut4bu .= 'S ';
				} elseif (strpos($Vgffhwoemo4c,'T') !== false) { 
					$Vvt20qqut4bu .= sprintf('%F %F m ', $Vangwoo3ejfgT, $Vgxufordoa4tT);
					$Vvt20qqut4bu .= sprintf('%F %F l ', $Vangwoo3ejfgR, $Vgxufordoa4tR);
					$Vvt20qqut4bu .= 'S ';
				} elseif (strpos($Vgffhwoemo4c,'R') !== false) { 
					$Vvt20qqut4bu .= sprintf('%F %F m ', $Vangwoo3ejfgR, $Vgxufordoa4tR);
					$Vvt20qqut4bu .= sprintf('%F %F l ', $Vangwoo3ejfgB, $Vgxufordoa4tB);
					$Vvt20qqut4bu .= 'S ';
				} elseif (strpos($Vgffhwoemo4c,'B') !== false) { 
					$Vvt20qqut4bu .= sprintf('%F %F m ', $Vangwoo3ejfgB, $Vgxufordoa4tB);
					$Vvt20qqut4bu .= sprintf('%F %F l ', $Vangwoo3ejfgL, $Vgxufordoa4tL);
					$Vvt20qqut4bu .= 'S ';
				}
			}
			if (is_array($Vovexk3mzujo) AND !empty($Vovexk3mzujo)) {
				
				$Vvt20qqut4bu .= "\n".$Vnwufml5q3nphis->linestyleWidth.' '.$Vnwufml5q3nphis->linestyleCap.' '.$Vnwufml5q3nphis->linestyleJoin.' '.$Vnwufml5q3nphis->linestyleDash.' '.$Vnwufml5q3nphis->DrawColor."\n";
			}
		}
		return $Vvt20qqut4bu;
	}

	
	public function MultiCell($Vim12f51jw5r, $Vvjxcwrp4tjq, $Vg1d0vbcooi4, $Vgffhwoemo4c=0, $Vb5kn1gbu0ep='J', $Viiychbtwwwq=false, $Vx3g4ytafo1an=1, $Vangwoo3ejfg='', $Vgxufordoa4t='', $V14ltds3prprseth=true, $Vvt20qqut4butretch=0, $V55vc4mewy5wshtml=false, $Vxwd302iban1padding=true, $Vetludueqmbtaxh=0, $Vxt4wx3pvtezign='T', $Vuk3m0uyhgf2=false) {
		$Vgp2srcfoe0d = $Vnwufml5q3nphis->cell_margin;
		$Vsaczmrtqtgw = $Vnwufml5q3nphis->cell_padding;
		
		$Vnwufml5q3nphis->adjustCellPadding($Vgffhwoemo4c);
		$Vetludueqmbtc_padding = $Vnwufml5q3nphis->cell_padding;
		$Vetludueqmbtc_margin = $Vnwufml5q3nphis->cell_margin;
		$Vnwufml5q3nphis->cell_padding['T'] = 0;
		$Vnwufml5q3nphis->cell_padding['B'] = 0;
		$Vnwufml5q3nphis->setCellMargins(0, 0, 0, 0);
		if (TCPDF_STATIC::empty_string($Vnwufml5q3nphis->lasth) OR $V14ltds3prprseth) {
			
			$Vnwufml5q3nphis->resetLastH();
		}
		if (!TCPDF_STATIC::empty_string($Vgxufordoa4t)) {
			$Vnwufml5q3nphis->SetY($Vgxufordoa4t);
		} else {
			$Vgxufordoa4t = $Vnwufml5q3nphis->GetY();
		}
		$V14ltds3prprsth = 0;
		if (($Vvjxcwrp4tjq > 0) AND $Vnwufml5q3nphis->inPageBody() AND (($Vgxufordoa4t + $Vvjxcwrp4tjq + $Vetludueqmbtc_margin['T'] + $Vetludueqmbtc_margin['B']) > $Vnwufml5q3nphis->PageBreakTrigger)) {
			
			$Vgv45dfhsyuhewh = ($Vnwufml5q3nphis->PageBreakTrigger - $Vgxufordoa4t);
			$V14ltds3prprsth = ($Vvjxcwrp4tjq - $Vgv45dfhsyuhewh); 
			$Vvjxcwrp4tjq = $Vgv45dfhsyuhewh;
		}
		
		$Vvt20qqut4butartpage = $Vnwufml5q3nphis->page;
		
		$Vvt20qqut4butartcolumn = $Vnwufml5q3nphis->current_column;
		if (!TCPDF_STATIC::empty_string($Vangwoo3ejfg)) {
			$Vnwufml5q3nphis->SetX($Vangwoo3ejfg);
		} else {
			$Vangwoo3ejfg = $Vnwufml5q3nphis->GetX();
		}
		
		list($Vangwoo3ejfg, $Vgxufordoa4t) = $Vnwufml5q3nphis->checkPageRegions(0, $Vangwoo3ejfg, $Vgxufordoa4t);
		
		$Vrngof4idfho = $Vgxufordoa4t + $Vetludueqmbtc_margin['T'];
		if ($Vnwufml5q3nphis->rtl) {
			$V03mvlmpusuj = ($Vnwufml5q3nphis->w - $Vangwoo3ejfg - $Vetludueqmbtc_margin['R']);
		} else {
			$V03mvlmpusuj = ($Vangwoo3ejfg + $Vetludueqmbtc_margin['L']);
		}
		$Vnwufml5q3nphis->x = $V03mvlmpusuj;
		$Vnwufml5q3nphis->y = $Vrngof4idfho;
		
		if (TCPDF_STATIC::empty_string($Vim12f51jw5r) OR ($Vim12f51jw5r <= 0)) {
			if ($Vnwufml5q3nphis->rtl) {
				$Vim12f51jw5r = ($Vnwufml5q3nphis->x - $Vnwufml5q3nphis->lMargin - $Vetludueqmbtc_margin['L']);
			} else {
				$Vim12f51jw5r = ($Vnwufml5q3nphis->w - $Vnwufml5q3nphis->x - $Vnwufml5q3nphis->rMargin - $Vetludueqmbtc_margin['R']);
			}
		}
		
		$Vkj01umjxzxo = $Vnwufml5q3nphis->lMargin;
		$Vhlbdzuqw1fu = $Vnwufml5q3nphis->rMargin;
		if ($Vnwufml5q3nphis->rtl) {
			$Vnwufml5q3nphis->rMargin = ($Vnwufml5q3nphis->w - $Vnwufml5q3nphis->x);
			$Vnwufml5q3nphis->lMargin = ($Vnwufml5q3nphis->x - $Vim12f51jw5r);
		} else {
			$Vnwufml5q3nphis->lMargin = ($Vnwufml5q3nphis->x);
			$Vnwufml5q3nphis->rMargin = ($Vnwufml5q3nphis->w - $Vnwufml5q3nphis->x - $Vim12f51jw5r);
		}
		$Vnwufml5q3nphis->clMargin = $Vnwufml5q3nphis->lMargin;
		$Vnwufml5q3nphis->crMargin = $Vnwufml5q3nphis->rMargin;
		if ($Vxwd302iban1padding) {
			
			$Vnwufml5q3nphis->y += $Vetludueqmbtc_padding['T'];
		}
		if ($V55vc4mewy5wshtml) { 
			$Vnwufml5q3nphis->writeHTML($Vg1d0vbcooi4, true, false, $V14ltds3prprseth, true, $Vb5kn1gbu0ep);
			$Vgv45dfhsyuhl = 1;
		} else { 
			$Vysssyorkxwh = $Vnwufml5q3nphis->FontSizePt;
			if ($Vuk3m0uyhgf2) {
				
				$Vk10q25wpn3h = ($Vnwufml5q3nphis->h - $Vnwufml5q3nphis->y - $Vnwufml5q3nphis->bMargin - $Vnwufml5q3nphis->cell_padding['T'] - $Vnwufml5q3nphis->cell_padding['B']);
				$Vvjxcwrp4tjq = $Vetludueqmbtaxh = max(min($Vvjxcwrp4tjq, $Vk10q25wpn3h), min($Vetludueqmbtaxh, $Vk10q25wpn3h));
			}
			
			if ($Vetludueqmbtaxh > 0) {
				
				$Vdvjst2lzhef_height = $Vnwufml5q3nphis->getStringHeight($Vim12f51jw5r, $Vg1d0vbcooi4, $V14ltds3prprseth, $Vxwd302iban1padding, $Vetludueqmbtc_padding, $Vgffhwoemo4c);
				if ($Vuk3m0uyhgf2 AND ($Vdvjst2lzhef_height > $Vetludueqmbtaxh) AND ($Vnwufml5q3nphis->FontSizePt > 1)) {
					
					$Vh03plp4pqtpin = 1;
					$Vh03plp4pqtpax = $Vnwufml5q3nphis->FontSizePt;
					$Vsjpa44qmsau_epsilon = (1 / $Vnwufml5q3nphis->k); 
					$Vetludueqmbtaxit = (2 * min(100, max(10, intval($Vh03plp4pqtpax)))); 
					while ($Vetludueqmbtaxit >= 0) {
						$Vh03plp4pqtpid = (($Vh03plp4pqtpax + $Vh03plp4pqtpin) / 2);
						$Vnwufml5q3nphis->SetFontSize($Vh03plp4pqtpid, false);
						$Vnwufml5q3nphis->resetLastH();
						$Vdvjst2lzhef_height = $Vnwufml5q3nphis->getStringHeight($Vim12f51jw5r, $Vg1d0vbcooi4, $V14ltds3prprseth, $Vxwd302iban1padding, $Vetludueqmbtc_padding, $Vgffhwoemo4c);
						$Vsjpa44qmsau = ($Vetludueqmbtaxh - $Vdvjst2lzhef_height);
						if ($Vsjpa44qmsau >= 0) {
							if ($Vsjpa44qmsau <= $Vsjpa44qmsau_epsilon) {
								break;
							}
							$Vh03plp4pqtpin = $Vh03plp4pqtpid;
						} else {
							$Vh03plp4pqtpax = $Vh03plp4pqtpid;
						}
						--$Vetludueqmbtaxit;
					}
					if ($Vetludueqmbtaxit < 0) {
						
						$Vnwufml5q3nphis->SetFontSize($Vh03plp4pqtpin);
						$Vnwufml5q3nphis->resetLastH();
						$Vdvjst2lzhef_height = $Vnwufml5q3nphis->getStringHeight($Vim12f51jw5r, $Vg1d0vbcooi4, $V14ltds3prprseth, $Vxwd302iban1padding, $Vetludueqmbtc_padding, $Vgffhwoemo4c);
					} else {
						$Vnwufml5q3nphis->SetFontSize($Vh03plp4pqtpid);
						$Vnwufml5q3nphis->resetLastH();
					}
				}
				if ($Vdvjst2lzhef_height < $Vetludueqmbtaxh) {
					if ($Vxt4wx3pvtezign == 'M') {
						
						$Vnwufml5q3nphis->y += (($Vetludueqmbtaxh - $Vdvjst2lzhef_height) / 2);
					} elseif ($Vxt4wx3pvtezign == 'B') {
						
						$Vnwufml5q3nphis->y += ($Vetludueqmbtaxh - $Vdvjst2lzhef_height);
					}
				}
			}
			$Vgv45dfhsyuhl = $Vnwufml5q3nphis->Write($Vnwufml5q3nphis->lasth, $Vg1d0vbcooi4, '', 0, $Vb5kn1gbu0ep, true, $Vvt20qqut4butretch, false, true, $Vetludueqmbtaxh, 0, $Vetludueqmbtc_margin);
			if ($Vuk3m0uyhgf2) {
				
				$Vnwufml5q3nphis->SetFontSize($Vysssyorkxwh);
			}
		}
		if ($Vxwd302iban1padding) {
			
			$Vnwufml5q3nphis->y += $Vetludueqmbtc_padding['B'];
		}
		
		$VwcmlurixvzgurrentY = $Vnwufml5q3nphis->y;
		
		$Vrwpclfxab0a = $Vnwufml5q3nphis->page;
		if ($V14ltds3prprsth > 0) {
			$Vvt20qqut4bukip = ($Vrwpclfxab0a - $Vvt20qqut4butartpage);
			$Vhdzti3fwx33 = $V14ltds3prprsth;
			while ($Vhdzti3fwx33 > 0) {
				if ($Vvt20qqut4bukip <= 0) {
					
					$Vnwufml5q3nphis->checkPageBreak($Vnwufml5q3nphis->PageBreakTrigger + 1);
				}
				if ($Vnwufml5q3nphis->num_columns > 1) {
					$Vhdzti3fwx33 -= ($Vnwufml5q3nphis->h - $Vnwufml5q3nphis->y - $Vnwufml5q3nphis->bMargin);
				} else {
					$Vhdzti3fwx33 -= ($Vnwufml5q3nphis->h - $Vnwufml5q3nphis->tMargin - $Vnwufml5q3nphis->bMargin);
				}
				--$Vvt20qqut4bukip;
			}
			$VwcmlurixvzgurrentY = $Vnwufml5q3nphis->y;
			$Vrwpclfxab0a = $Vnwufml5q3nphis->page;
		}
		
		$Vchxdok1iadu = $Vnwufml5q3nphis->current_column;
		if ($Vnwufml5q3nphis->num_columns == 0) {
			$Vnwufml5q3nphis->num_columns = 1;
		}
		
		$V0ytetmtu3vm = $Vnwufml5q3nphis->check_page_regions;
		$Vnwufml5q3nphis->check_page_regions = false;
		
		$Vgffhwoemo4c_start = TCPDF_STATIC::getBorderMode($Vgffhwoemo4c, $V55bt0kysqpn='start', $Vnwufml5q3nphis->opencell);
		$Vgffhwoemo4c_end = TCPDF_STATIC::getBorderMode($Vgffhwoemo4c, $V55bt0kysqpn='end', $Vnwufml5q3nphis->opencell);
		$Vgffhwoemo4c_middle = TCPDF_STATIC::getBorderMode($Vgffhwoemo4c, $V55bt0kysqpn='middle', $Vnwufml5q3nphis->opencell);
		
		for ($Vwfolue42pzj = $Vvt20qqut4butartpage; $Vwfolue42pzj <= $Vrwpclfxab0a; ++$Vwfolue42pzj) { 
			$Vwcmlurixvzgcode = '';
			$Vnwufml5q3nphis->setPage($Vwfolue42pzj);
			if ($Vnwufml5q3nphis->num_columns < 2) {
				
				$Vnwufml5q3nphis->SetX($Vangwoo3ejfg);
				$Vnwufml5q3nphis->y = $Vnwufml5q3nphis->tMargin;
			}
			
			if ($Vwfolue42pzj > $Vvt20qqut4butartpage) {
				if (($Vnwufml5q3nphis->rtl) AND ($Vnwufml5q3nphis->pagedim[$Vwfolue42pzj]['orm'] != $Vnwufml5q3nphis->pagedim[$Vvt20qqut4butartpage]['orm'])) {
					$Vnwufml5q3nphis->x -= ($Vnwufml5q3nphis->pagedim[$Vwfolue42pzj]['orm'] - $Vnwufml5q3nphis->pagedim[$Vvt20qqut4butartpage]['orm']);
				} elseif ((!$Vnwufml5q3nphis->rtl) AND ($Vnwufml5q3nphis->pagedim[$Vwfolue42pzj]['olm'] != $Vnwufml5q3nphis->pagedim[$Vvt20qqut4butartpage]['olm'])) {
					$Vnwufml5q3nphis->x += ($Vnwufml5q3nphis->pagedim[$Vwfolue42pzj]['olm'] - $Vnwufml5q3nphis->pagedim[$Vvt20qqut4butartpage]['olm']);
				}
			}
			if ($Vvt20qqut4butartpage == $Vrwpclfxab0a) {
				
				for ($Vwcmlurixvzgolumn = $Vvt20qqut4butartcolumn; $Vwcmlurixvzgolumn <= $Vchxdok1iadu; ++$Vwcmlurixvzgolumn) { 
					$Vnwufml5q3nphis->selectColumn($Vwcmlurixvzgolumn);
					if ($Vnwufml5q3nphis->rtl) {
						$Vnwufml5q3nphis->x -= $Vetludueqmbtc_margin['R'];
					} else {
						$Vnwufml5q3nphis->x += $Vetludueqmbtc_margin['L'];
					}
					if ($Vvt20qqut4butartcolumn == $Vchxdok1iadu) { 
						$Vwcmlurixvzgborder = $Vgffhwoemo4c;
						$Vvjxcwrp4tjq = max($Vvjxcwrp4tjq, ($VwcmlurixvzgurrentY - $Vrngof4idfho));
						$Vnwufml5q3nphis->y = $Vrngof4idfho;
					} elseif ($Vwcmlurixvzgolumn == $Vvt20qqut4butartcolumn) { 
						$Vwcmlurixvzgborder = $Vgffhwoemo4c_start;
						$Vnwufml5q3nphis->y = $Vrngof4idfho;
						$Vvjxcwrp4tjq = $Vnwufml5q3nphis->h - $Vnwufml5q3nphis->y - $Vnwufml5q3nphis->bMargin;
					} elseif ($Vwcmlurixvzgolumn == $Vchxdok1iadu) { 
						$Vwcmlurixvzgborder = $Vgffhwoemo4c_end;
						$Vvjxcwrp4tjq = $VwcmlurixvzgurrentY - $Vnwufml5q3nphis->y;
						if ($V14ltds3prprsth > $Vvjxcwrp4tjq) {
							$Vvjxcwrp4tjq = $V14ltds3prprsth;
						}
					} else { 
						$Vwcmlurixvzgborder = $Vgffhwoemo4c_middle;
						$Vvjxcwrp4tjq = $Vnwufml5q3nphis->h - $Vnwufml5q3nphis->y - $Vnwufml5q3nphis->bMargin;
						$V14ltds3prprsth -= $Vvjxcwrp4tjq;
					}
					$Vwcmlurixvzgcode .= $Vnwufml5q3nphis->getCellCode($Vim12f51jw5r, $Vvjxcwrp4tjq, '', $Vwcmlurixvzgborder, 1, '', $Viiychbtwwwq, '', 0, true)."\n";
				} 
			} elseif ($Vwfolue42pzj == $Vvt20qqut4butartpage) { 
				for ($Vwcmlurixvzgolumn = $Vvt20qqut4butartcolumn; $Vwcmlurixvzgolumn < $Vnwufml5q3nphis->num_columns; ++$Vwcmlurixvzgolumn) { 
					$Vnwufml5q3nphis->selectColumn($Vwcmlurixvzgolumn);
					if ($Vnwufml5q3nphis->rtl) {
						$Vnwufml5q3nphis->x -= $Vetludueqmbtc_margin['R'];
					} else {
						$Vnwufml5q3nphis->x += $Vetludueqmbtc_margin['L'];
					}
					if ($Vwcmlurixvzgolumn == $Vvt20qqut4butartcolumn) { 
						$Vwcmlurixvzgborder = $Vgffhwoemo4c_start;
						$Vnwufml5q3nphis->y = $Vrngof4idfho;
						$Vvjxcwrp4tjq = $Vnwufml5q3nphis->h - $Vnwufml5q3nphis->y - $Vnwufml5q3nphis->bMargin;
					} else { 
						$Vwcmlurixvzgborder = $Vgffhwoemo4c_middle;
						$Vvjxcwrp4tjq = $Vnwufml5q3nphis->h - $Vnwufml5q3nphis->y - $Vnwufml5q3nphis->bMargin;
						$V14ltds3prprsth -= $Vvjxcwrp4tjq;
					}
					$Vwcmlurixvzgcode .= $Vnwufml5q3nphis->getCellCode($Vim12f51jw5r, $Vvjxcwrp4tjq, '', $Vwcmlurixvzgborder, 1, '', $Viiychbtwwwq, '', 0, true)."\n";
				} 
			} elseif ($Vwfolue42pzj == $Vrwpclfxab0a) { 
				for ($Vwcmlurixvzgolumn = 0; $Vwcmlurixvzgolumn <= $Vchxdok1iadu; ++$Vwcmlurixvzgolumn) { 
					$Vnwufml5q3nphis->selectColumn($Vwcmlurixvzgolumn);
					if ($Vnwufml5q3nphis->rtl) {
						$Vnwufml5q3nphis->x -= $Vetludueqmbtc_margin['R'];
					} else {
						$Vnwufml5q3nphis->x += $Vetludueqmbtc_margin['L'];
					}
					if ($Vwcmlurixvzgolumn == $Vchxdok1iadu) {
						
						$Vwcmlurixvzgborder = $Vgffhwoemo4c_end;
						$Vvjxcwrp4tjq = $VwcmlurixvzgurrentY - $Vnwufml5q3nphis->y;
						if ($V14ltds3prprsth > $Vvjxcwrp4tjq) {
							$Vvjxcwrp4tjq = $V14ltds3prprsth;
						}
					} else {
						
						$Vwcmlurixvzgborder = $Vgffhwoemo4c_middle;
						$Vvjxcwrp4tjq = $Vnwufml5q3nphis->h - $Vnwufml5q3nphis->y - $Vnwufml5q3nphis->bMargin;
						$V14ltds3prprsth -= $Vvjxcwrp4tjq;
					}
					$Vwcmlurixvzgcode .= $Vnwufml5q3nphis->getCellCode($Vim12f51jw5r, $Vvjxcwrp4tjq, '', $Vwcmlurixvzgborder, 1, '', $Viiychbtwwwq, '', 0, true)."\n";
				} 
			} else { 
				for ($Vwcmlurixvzgolumn = 0; $Vwcmlurixvzgolumn < $Vnwufml5q3nphis->num_columns; ++$Vwcmlurixvzgolumn) { 
					$Vnwufml5q3nphis->selectColumn($Vwcmlurixvzgolumn);
					if ($Vnwufml5q3nphis->rtl) {
						$Vnwufml5q3nphis->x -= $Vetludueqmbtc_margin['R'];
					} else {
						$Vnwufml5q3nphis->x += $Vetludueqmbtc_margin['L'];
					}
					$Vwcmlurixvzgborder = $Vgffhwoemo4c_middle;
					$Vvjxcwrp4tjq = $Vnwufml5q3nphis->h - $Vnwufml5q3nphis->y - $Vnwufml5q3nphis->bMargin;
					$V14ltds3prprsth -= $Vvjxcwrp4tjq;
					$Vwcmlurixvzgcode .= $Vnwufml5q3nphis->getCellCode($Vim12f51jw5r, $Vvjxcwrp4tjq, '', $Vwcmlurixvzgborder, 1, '', $Viiychbtwwwq, '', 0, true)."\n";
				} 
			}
			if ($Vwcmlurixvzgborder OR $Viiychbtwwwq) {
				$Vcwtctilquugsetlen = strlen($Vwcmlurixvzgcode);
				
				if ($Vnwufml5q3nphis->inxobj) {
					
					if (end($Vnwufml5q3nphis->xobjects[$Vnwufml5q3nphis->xobjid]['transfmrk']) !== false) {
						$Vwfolue42pzjmarkkey = key($Vnwufml5q3nphis->xobjects[$Vnwufml5q3nphis->xobjid]['transfmrk']);
						$Vwfolue42pzjmark = $Vnwufml5q3nphis->xobjects[$Vnwufml5q3nphis->xobjid]['transfmrk'][$Vwfolue42pzjmarkkey];
						$Vnwufml5q3nphis->xobjects[$Vnwufml5q3nphis->xobjid]['transfmrk'][$Vwfolue42pzjmarkkey] += $Vcwtctilquugsetlen;
					} else {
						$Vwfolue42pzjmark = $Vnwufml5q3nphis->xobjects[$Vnwufml5q3nphis->xobjid]['intmrk'];
						$Vnwufml5q3nphis->xobjects[$Vnwufml5q3nphis->xobjid]['intmrk'] += $Vcwtctilquugsetlen;
					}
					$Vwfolue42pzjbuff = $Vnwufml5q3nphis->xobjects[$Vnwufml5q3nphis->xobjid]['outdata'];
					$Vsvylsg2elw5 = substr($Vwfolue42pzjbuff, 0, $Vwfolue42pzjmark);
					$Vqt54avvjrsw = substr($Vwfolue42pzjbuff, $Vwfolue42pzjmark);
					$Vnwufml5q3nphis->xobjects[$Vnwufml5q3nphis->xobjid]['outdata'] = $Vsvylsg2elw5.$Vwcmlurixvzgcode.$Vqt54avvjrsw;
				} else {
					if (end($Vnwufml5q3nphis->transfmrk[$Vnwufml5q3nphis->page]) !== false) {
						$Vwfolue42pzjmarkkey = key($Vnwufml5q3nphis->transfmrk[$Vnwufml5q3nphis->page]);
						$Vwfolue42pzjmark = $Vnwufml5q3nphis->transfmrk[$Vnwufml5q3nphis->page][$Vwfolue42pzjmarkkey];
						$Vnwufml5q3nphis->transfmrk[$Vnwufml5q3nphis->page][$Vwfolue42pzjmarkkey] += $Vcwtctilquugsetlen;
					} elseif ($Vnwufml5q3nphis->InFooter) {
						$Vwfolue42pzjmark = $Vnwufml5q3nphis->footerpos[$Vnwufml5q3nphis->page];
						$Vnwufml5q3nphis->footerpos[$Vnwufml5q3nphis->page] += $Vcwtctilquugsetlen;
					} else {
						$Vwfolue42pzjmark = $Vnwufml5q3nphis->intmrk[$Vnwufml5q3nphis->page];
						$Vnwufml5q3nphis->intmrk[$Vnwufml5q3nphis->page] += $Vcwtctilquugsetlen;
					}
					$Vwfolue42pzjbuff = $Vnwufml5q3nphis->getPageBuffer($Vnwufml5q3nphis->page);
					$Vsvylsg2elw5 = substr($Vwfolue42pzjbuff, 0, $Vwfolue42pzjmark);
					$Vqt54avvjrsw = substr($Vwfolue42pzjbuff, $Vwfolue42pzjmark);
					$Vnwufml5q3nphis->setPageBuffer($Vnwufml5q3nphis->page, $Vsvylsg2elw5.$Vwcmlurixvzgcode.$Vqt54avvjrsw);
				}
			}
		} 
		
		$Vnwufml5q3nphis->check_page_regions = $V0ytetmtu3vm;
		
		$VwcmlurixvzgurrentY = $Vnwufml5q3nphis->GetY();
		
		if ($Vnwufml5q3nphis->num_columns > 1) {
			$Vnwufml5q3nphis->selectColumn();
		} else {
			
			$Vnwufml5q3nphis->lMargin = $Vkj01umjxzxo;
			$Vnwufml5q3nphis->rMargin = $Vhlbdzuqw1fu;
			if ($Vnwufml5q3nphis->page > $Vvt20qqut4butartpage) {
				
				$Vc0aiseldrl3l = ($Vnwufml5q3nphis->pagedim[$Vnwufml5q3nphis->page]['olm'] - $Vnwufml5q3nphis->pagedim[$Vvt20qqut4butartpage]['olm']);
				$Vc0aiseldrl3r = ($Vnwufml5q3nphis->pagedim[$Vnwufml5q3nphis->page]['orm'] - $Vnwufml5q3nphis->pagedim[$Vvt20qqut4butartpage]['orm']);
				if (($Vc0aiseldrl3l != 0) OR ($Vc0aiseldrl3r != 0)) {
					$Vnwufml5q3nphis->lMargin += $Vc0aiseldrl3l;
					$Vnwufml5q3nphis->rMargin += $Vc0aiseldrl3r;
				}
			}
		}
		if ($Vx3g4ytafo1an > 0) {
			
			$Vnwufml5q3nphis->SetY($VwcmlurixvzgurrentY + $Vetludueqmbtc_margin['B']);
			if ($Vx3g4ytafo1an == 2) {
				$Vnwufml5q3nphis->SetX($Vangwoo3ejfg + $Vim12f51jw5r + $Vetludueqmbtc_margin['L'] + $Vetludueqmbtc_margin['R']);
			}
		} else {
			
			$Vnwufml5q3nphis->setPage($Vvt20qqut4butartpage);
			$Vnwufml5q3nphis->y = $Vgxufordoa4t;
			$Vnwufml5q3nphis->SetX($Vangwoo3ejfg + $Vim12f51jw5r + $Vetludueqmbtc_margin['L'] + $Vetludueqmbtc_margin['R']);
		}
		$Vnwufml5q3nphis->setContentMark();
		$Vnwufml5q3nphis->cell_padding = $Vsaczmrtqtgw;
		$Vnwufml5q3nphis->cell_margin = $Vgp2srcfoe0d;
		$Vnwufml5q3nphis->clMargin = $Vnwufml5q3nphis->lMargin;
		$Vnwufml5q3nphis->crMargin = $Vnwufml5q3nphis->rMargin;
		return $Vgv45dfhsyuhl;
	}

	
	public function getNumLines($Vg1d0vbcooi4, $Vim12f51jw5r=0, $V14ltds3prprseth=false, $Vxwd302iban1padding=true, $Vwcmlurixvzgellpadding='', $Vgffhwoemo4c=0) {
		if ($Vg1d0vbcooi4 === NULL) {
			return 0;
		}
		if ($Vg1d0vbcooi4 === '') {
			
			return 1;
		}
		
		$Vsaczmrtqtgw = $Vnwufml5q3nphis->cell_padding;
		$Vmqdxv5tu5z0 = $Vnwufml5q3nphis->lasth;
		if (is_array($Vwcmlurixvzgellpadding)) {
			$Vnwufml5q3nphis->cell_padding = $Vwcmlurixvzgellpadding;
		}
		$Vnwufml5q3nphis->adjustCellPadding($Vgffhwoemo4c);
		if (TCPDF_STATIC::empty_string($Vim12f51jw5r) OR ($Vim12f51jw5r <= 0)) {
			if ($Vnwufml5q3nphis->rtl) {
				$Vim12f51jw5r = $Vnwufml5q3nphis->x - $Vnwufml5q3nphis->lMargin;
			} else {
				$Vim12f51jw5r = $Vnwufml5q3nphis->w - $Vnwufml5q3nphis->rMargin - $Vnwufml5q3nphis->x;
			}
		}
		$Vim12f51jw5rmax = $Vim12f51jw5r - $Vnwufml5q3nphis->cell_padding['L'] - $Vnwufml5q3nphis->cell_padding['R'];
		if ($V14ltds3prprseth) {
			
			$Vnwufml5q3nphis->resetLastH();
		}
		$Vx3g4ytafo1aines = 1;
		$Vvt20qqut4buum = 0;
		$Vwcmlurixvzghars = TCPDF_FONTS::utf8Bidi(TCPDF_FONTS::UTF8StringToArray($Vg1d0vbcooi4, $Vnwufml5q3nphis->isunicode, $Vnwufml5q3nphis->CurrentFont), $Vg1d0vbcooi4, $Vnwufml5q3nphis->tmprtl, $Vnwufml5q3nphis->isunicode, $Vnwufml5q3nphis->CurrentFont);
		$VwcmlurixvzgharsWidth = $Vnwufml5q3nphis->GetArrStringWidth($Vwcmlurixvzghars, '', '', 0, true);
		$Vx3g4ytafo1aength = count($Vwcmlurixvzghars);
		$Vx3g4ytafo1aastSeparator = -1;
		for ($V55vc4mewy5w = 0; $V55vc4mewy5w < $Vx3g4ytafo1aength; ++$V55vc4mewy5w) {
			$Vwcmlurixvzg = $Vwcmlurixvzghars[$V55vc4mewy5w];
			$VwcmlurixvzgharWidth = $VwcmlurixvzgharsWidth[$V55vc4mewy5w];
			if (($Vwcmlurixvzg != 160)
					AND (($Vwcmlurixvzg == 173)
						OR preg_match($Vnwufml5q3nphis->re_spaces, TCPDF_FONTS::unichr($Vwcmlurixvzg, $Vnwufml5q3nphis->isunicode))
						OR (($Vwcmlurixvzg == 45)
							AND ($V55vc4mewy5w > 0) AND ($V55vc4mewy5w < ($Vx3g4ytafo1aength - 1))
							AND @preg_match('/[\p{L}]/'.$Vnwufml5q3nphis->re_space['m'], TCPDF_FONTS::unichr($Vwcmlurixvzghars[($V55vc4mewy5w - 1)], $Vnwufml5q3nphis->isunicode))
							AND @preg_match('/[\p{L}]/'.$Vnwufml5q3nphis->re_space['m'], TCPDF_FONTS::unichr($Vwcmlurixvzghars[($V55vc4mewy5w + 1)], $Vnwufml5q3nphis->isunicode))
						)
					)
				) {
				$Vx3g4ytafo1aastSeparator = $V55vc4mewy5w;
			}
			if ((($Vvt20qqut4buum + $VwcmlurixvzgharWidth) > $Vim12f51jw5rmax) OR ($Vwcmlurixvzg == 10)) {
				++$Vx3g4ytafo1aines;
				if ($Vwcmlurixvzg == 10) {
					$Vx3g4ytafo1aastSeparator = -1;
					$Vvt20qqut4buum = 0;
				} elseif ($Vx3g4ytafo1aastSeparator != -1) {
					$V55vc4mewy5w = $Vx3g4ytafo1aastSeparator;
					$Vx3g4ytafo1aastSeparator = -1;
					$Vvt20qqut4buum = 0;
				} else {
					$Vvt20qqut4buum = $VwcmlurixvzgharWidth;
				}
			} else {
				$Vvt20qqut4buum += $VwcmlurixvzgharWidth;
			}
		}
		if ($Vwcmlurixvzghars[($Vx3g4ytafo1aength - 1)] == 10) {
			--$Vx3g4ytafo1aines;
		}
		$Vnwufml5q3nphis->cell_padding = $Vsaczmrtqtgw;
		$Vnwufml5q3nphis->lasth = $Vmqdxv5tu5z0;
		return $Vx3g4ytafo1aines;
	}

	
	public function getStringHeight($Vim12f51jw5r, $Vg1d0vbcooi4, $V14ltds3prprseth=false, $Vxwd302iban1padding=true, $Vwcmlurixvzgellpadding='', $Vgffhwoemo4c=0) {
		
		$Vsaczmrtqtgw = $Vnwufml5q3nphis->cell_padding;
		$Vmqdxv5tu5z0 = $Vnwufml5q3nphis->lasth;
		if (is_array($Vwcmlurixvzgellpadding)) {
			$Vnwufml5q3nphis->cell_padding = $Vwcmlurixvzgellpadding;
		}
		$Vnwufml5q3nphis->adjustCellPadding($Vgffhwoemo4c);
		$Vx3g4ytafo1aines = $Vnwufml5q3nphis->getNumLines($Vg1d0vbcooi4, $Vim12f51jw5r, $V14ltds3prprseth, $Vxwd302iban1padding, $Vwcmlurixvzgellpadding, $Vgffhwoemo4c);
		$Vvjxcwrp4tjqeight = $Vnwufml5q3nphis->getCellHeight(($Vx3g4ytafo1aines * $Vnwufml5q3nphis->FontSize), $Vxwd302iban1padding);
		$Vnwufml5q3nphis->cell_padding = $Vsaczmrtqtgw;
		$Vnwufml5q3nphis->lasth = $Vmqdxv5tu5z0;
		return $Vvjxcwrp4tjqeight;
	}

	
	public function Write($Vvjxcwrp4tjq, $Vg1d0vbcooi4, $Vx3g4ytafo1aink='', $Viiychbtwwwq=false, $Vb5kn1gbu0ep='', $Vx3g4ytafo1an=false, $Vvt20qqut4butretch=0, $Vvmrikqrcj45=false, $Vsl3crr1j3u0=false, $Vetludueqmbtaxh=0, $Vim12f51jw5radj=0, $Vwhlvvfn0mdj='') {
		
		list($Vnwufml5q3nphis->x, $Vnwufml5q3nphis->y) = $Vnwufml5q3nphis->checkPageRegions($Vvjxcwrp4tjq, $Vnwufml5q3nphis->x, $Vnwufml5q3nphis->y);
		if (strlen($Vg1d0vbcooi4) == 0) {
			
			$Vg1d0vbcooi4 = ' ';
		}
		if ($Vwhlvvfn0mdj === '') {
			
			$Vwhlvvfn0mdj = $Vnwufml5q3nphis->cell_margin;
		}
		
		$Vvt20qqut4bu = str_replace("\r", '', $Vg1d0vbcooi4);
		
		if (preg_match(TCPDF_FONT_DATA::$V1qlc5uzzthd, $Vvt20qqut4bu)) {
			$Vtfrbeqeca1z = true;
		} else {
			$Vtfrbeqeca1z = false;
		}
		
		if ($Vtfrbeqeca1z OR ($Vnwufml5q3nphis->tmprtl == 'R') OR preg_match(TCPDF_FONT_DATA::$V5l4vgidgziv, $Vvt20qqut4bu)) {
			$V5shjmx03fxymode = true;
		} else {
			$V5shjmx03fxymode = false;
		}
		
		$Vwcmlurixvzghrwidth = $Vnwufml5q3nphis->GetCharWidth(46); 
		
		$Vwcmlurixvzghars = TCPDF_FONTS::UTF8StringToArray($Vvt20qqut4bu, $Vnwufml5q3nphis->isunicode, $Vnwufml5q3nphis->CurrentFont);
		
		$Vwcmlurixvzghrw = $Vnwufml5q3nphis->GetArrStringWidth($Vwcmlurixvzghars, '', '', 0, true);
		array_walk($Vwcmlurixvzghrw, array($Vnwufml5q3nphis, 'getRawCharWidth'));
		$Vetludueqmbtaxchwidth = max($Vwcmlurixvzghrw);
		
		$Vrfs5mafwdm2 = TCPDF_FONTS::UTF8ArrayToUniArray($Vwcmlurixvzghars, $Vnwufml5q3nphis->isunicode);
		
		$Vgv45dfhsyuhb = count($Vwcmlurixvzghars);
		
		$Vvt20qqut4buhy_replacement = 45;
		$Vvt20qqut4buhy_replacement_char = TCPDF_FONTS::unichr($Vvt20qqut4buhy_replacement, $Vnwufml5q3nphis->isunicode);
		
		$Vvt20qqut4buhy_replacement_width = $Vnwufml5q3nphis->GetCharWidth($Vvt20qqut4buhy_replacement);
		
		$Vhkd5dswmzhb = $Vim12f51jw5r = $Vnwufml5q3nphis->w - $Vnwufml5q3nphis->lMargin - $Vnwufml5q3nphis->rMargin;
		
		if ($Vnwufml5q3nphis->rtl) {
			$Vim12f51jw5r = $Vnwufml5q3nphis->x - $Vnwufml5q3nphis->lMargin;
		} else {
			$Vim12f51jw5r = $Vnwufml5q3nphis->w - $Vnwufml5q3nphis->rMargin - $Vnwufml5q3nphis->x;
		}
		
		$Vim12f51jw5rmax = ($Vim12f51jw5r - $Vim12f51jw5radj);
		if (!$Vvmrikqrcj45) {
			$Vim12f51jw5rmax -= ($Vnwufml5q3nphis->cell_padding['L'] + $Vnwufml5q3nphis->cell_padding['R']);
		}
		if ((!$Vvmrikqrcj45) AND (($Vwcmlurixvzghrwidth > $Vim12f51jw5rmax) OR ($Vetludueqmbtaxchwidth > $Vim12f51jw5rmax))) {
			
			return '';
		}
		
		$Vq5noqrlbzlk = max($Vvjxcwrp4tjq, $Vnwufml5q3nphis->getCellHeight($Vnwufml5q3nphis->FontSize));
		
		$Vetludueqmbtaxy = $Vnwufml5q3nphis->y + $Vetludueqmbtaxh - max($Vq5noqrlbzlk, $Vvjxcwrp4tjq);
		$Vvt20qqut4butart_page = $Vnwufml5q3nphis->page;
		$V55vc4mewy5w = 0; 
		$Vuaufi3la1vg = 0; 
		$Vvt20qqut4buep = -1; 
		$V32k1ylvegmw = $Vvt20qqut4buep; 
		$Vvt20qqut4buhy = false; 
		$Vzpttpk5230i = $Vvt20qqut4buhy; 
		$Vx3g4ytafo1a = 0; 
		$Vgv45dfhsyuhl = 0; 
		$Vx3g4ytafo1ainebreak = false;
		$Vzu2lvj1xpcj = 0; 
		
		while ($V55vc4mewy5w < $Vgv45dfhsyuhb) {
			if (($Vetludueqmbtaxh > 0) AND ($Vnwufml5q3nphis->y > $Vetludueqmbtaxy) ) {
				break;
			}
			
			$Vwcmlurixvzg = $Vwcmlurixvzghars[$V55vc4mewy5w];
			if ($Vwcmlurixvzg == 10) { 
				
				if ($Vb5kn1gbu0ep == 'J') {
					if ($Vnwufml5q3nphis->rtl) {
						$Vyhy03av3o0t = 'R';
					} else {
						$Vyhy03av3o0t = 'L';
					}
				} else {
					$Vyhy03av3o0t = $Vb5kn1gbu0ep;
				}
				$V12utqctneyn = TCPDF_FONTS::UniArrSubString($Vrfs5mafwdm2, $Vuaufi3la1vg, $V55vc4mewy5w);
				if ($Vvmrikqrcj45) {
					$Vvt20qqut4butartx = $Vnwufml5q3nphis->x;
					$Vptwwo5eiyyp = array_slice($Vwcmlurixvzghars, $Vuaufi3la1vg, ($V55vc4mewy5w - $Vuaufi3la1vg));
					if ($V5shjmx03fxymode) {
						$Vptwwo5eiyyp = TCPDF_FONTS::utf8Bidi($Vptwwo5eiyyp, $V12utqctneyn, $Vnwufml5q3nphis->tmprtl, $Vnwufml5q3nphis->isunicode, $Vnwufml5q3nphis->CurrentFont);
					}
					$Vx3g4ytafo1ainew = $Vnwufml5q3nphis->GetArrStringWidth($Vptwwo5eiyyp);
					unset($Vptwwo5eiyyp);
					if ($Vnwufml5q3nphis->rtl) {
						$Vnwufml5q3nphis->endlinex = $Vvt20qqut4butartx - $Vx3g4ytafo1ainew;
					} else {
						$Vnwufml5q3nphis->endlinex = $Vvt20qqut4butartx + $Vx3g4ytafo1ainew;
					}
					$Vim12f51jw5r = $Vx3g4ytafo1ainew;
					$Vdjya1jvufxe = $Vnwufml5q3nphis->cell_padding;
					if ($Vetludueqmbtaxh == 0) {
						$Vnwufml5q3nphis->SetCellPadding(0);
					}
				}
				if ($Vsl3crr1j3u0 AND $Vnwufml5q3nphis->isRTLTextDir()) {
					$V12utqctneyn = $Vnwufml5q3nphis->stringRightTrim($V12utqctneyn);
				}
				
				if (!empty($V12utqctneyn) OR ($Vnwufml5q3nphis->y < ($Vnwufml5q3nphis->PageBreakTrigger - $Vq5noqrlbzlk))) {
					$Vnwufml5q3nphis->Cell($Vim12f51jw5r, $Vvjxcwrp4tjq, $V12utqctneyn, 0, 1, $Vyhy03av3o0t, $Viiychbtwwwq, $Vx3g4ytafo1aink, $Vvt20qqut4butretch);
				}
				unset($V12utqctneyn);
				if ($Vvmrikqrcj45) {
					$Vnwufml5q3nphis->cell_padding = $Vdjya1jvufxe;
					return (TCPDF_FONTS::UniArrSubString($Vrfs5mafwdm2, $V55vc4mewy5w));
				}
				++$Vgv45dfhsyuhl;
				$Vuaufi3la1vg = $V55vc4mewy5w + 1;
				$Vx3g4ytafo1a = 0;
				$Vvt20qqut4buep = -1;
				$V32k1ylvegmw = $Vvt20qqut4buep;
				$Vvt20qqut4buhy = false;
				
				if ((($Vnwufml5q3nphis->y + $Vnwufml5q3nphis->lasth) > $Vnwufml5q3nphis->PageBreakTrigger) AND ($Vnwufml5q3nphis->inPageBody())) {
					$Vnwufml5q3nphis->AcceptPageBreak();
					if ($Vnwufml5q3nphis->rtl) {
						$Vnwufml5q3nphis->x -= $Vwhlvvfn0mdj['R'];
					} else {
						$Vnwufml5q3nphis->x += $Vwhlvvfn0mdj['L'];
					}
					$Vnwufml5q3nphis->lMargin += $Vwhlvvfn0mdj['L'];
					$Vnwufml5q3nphis->rMargin += $Vwhlvvfn0mdj['R'];
				}
				$Vim12f51jw5r = $Vnwufml5q3nphis->getRemainingWidth();
				$Vim12f51jw5rmax = ($Vim12f51jw5r - $Vnwufml5q3nphis->cell_padding['L'] - $Vnwufml5q3nphis->cell_padding['R']);
			} else {
				
				
				
				
				
				if (($Vwcmlurixvzg != 160)
					AND (($Vwcmlurixvzg == 173)
						OR preg_match($Vnwufml5q3nphis->re_spaces, TCPDF_FONTS::unichr($Vwcmlurixvzg, $Vnwufml5q3nphis->isunicode))
						OR (($Vwcmlurixvzg == 45)
							AND ($V55vc4mewy5w < ($Vgv45dfhsyuhb - 1))
							AND @preg_match('/[\p{L}]/'.$Vnwufml5q3nphis->re_space['m'], TCPDF_FONTS::unichr($Vzu2lvj1xpcj, $Vnwufml5q3nphis->isunicode))
							AND @preg_match('/[\p{L}]/'.$Vnwufml5q3nphis->re_space['m'], TCPDF_FONTS::unichr($Vwcmlurixvzghars[($V55vc4mewy5w + 1)], $Vnwufml5q3nphis->isunicode))
						)
					)
				) {
					
					$V32k1ylvegmw = $Vvt20qqut4buep;
					$Vvt20qqut4buep = $V55vc4mewy5w;
					
					if (($Vwcmlurixvzg == 173) OR ($Vwcmlurixvzg == 45)) {
						$Vzpttpk5230i = $Vvt20qqut4buhy;
						$Vvt20qqut4buhy = true;
						if ($Vzu2lvj1xpcj == 45) {
							$Vcbskhav40mk = 0;
							$Vwv2d1qxl4la = '';
						} else {
							$Vcbskhav40mk = $Vvt20qqut4buhy_replacement_width;
							$Vwv2d1qxl4la = $Vvt20qqut4buhy_replacement_char;
						}
					} else {
						$Vvt20qqut4buhy = false;
					}
				}
				
				if ($Vnwufml5q3nphis->isUnicodeFont() AND ($Vtfrbeqeca1z)) {
					
					
					$Vx3g4ytafo1a = $Vnwufml5q3nphis->GetArrStringWidth(TCPDF_FONTS::utf8Bidi(array_slice($Vwcmlurixvzghars, $Vuaufi3la1vg, ($V55vc4mewy5w - $Vuaufi3la1vg)), '', $Vnwufml5q3nphis->tmprtl, $Vnwufml5q3nphis->isunicode, $Vnwufml5q3nphis->CurrentFont));
				} else {
					$Vx3g4ytafo1a += $Vnwufml5q3nphis->GetCharWidth($Vwcmlurixvzg);
				}
				if (($Vx3g4ytafo1a > $Vim12f51jw5rmax) OR (($Vwcmlurixvzg == 173) AND (($Vx3g4ytafo1a + $Vcbskhav40mk) >= $Vim12f51jw5rmax))) {
					if (($Vwcmlurixvzg == 173) AND (($Vx3g4ytafo1a + $Vcbskhav40mk) > $Vim12f51jw5rmax)) {
						$Vvt20qqut4buep = $V32k1ylvegmw;
						$Vvt20qqut4buhy = $Vzpttpk5230i;
					}
					
					if ($Vvt20qqut4buep == -1) {
						
						if (($Vnwufml5q3nphis->rtl AND ($Vnwufml5q3nphis->x <= ($Vnwufml5q3nphis->w - $Vnwufml5q3nphis->rMargin - $Vnwufml5q3nphis->cell_padding['R'] - $Vwhlvvfn0mdj['R'] - $Vwcmlurixvzghrwidth)))
							OR ((!$Vnwufml5q3nphis->rtl) AND ($Vnwufml5q3nphis->x >= ($Vnwufml5q3nphis->lMargin + $Vnwufml5q3nphis->cell_padding['L'] + $Vwhlvvfn0mdj['L'] + $Vwcmlurixvzghrwidth)))) {
							
							$Vnwufml5q3nphis->Cell($Vim12f51jw5r, $Vvjxcwrp4tjq, '', 0, 1);
							$Vx3g4ytafo1ainebreak = true;
							if ($Vvmrikqrcj45) {
								return (TCPDF_FONTS::UniArrSubString($Vrfs5mafwdm2, $Vuaufi3la1vg));
							}
						} else {
							
							$V12utqctneyn = TCPDF_FONTS::UniArrSubString($Vrfs5mafwdm2, $Vuaufi3la1vg, $V55vc4mewy5w);
							if ($Vvmrikqrcj45) {
								$Vvt20qqut4butartx = $Vnwufml5q3nphis->x;
								$Vptwwo5eiyyp = array_slice($Vwcmlurixvzghars, $Vuaufi3la1vg, ($V55vc4mewy5w - $Vuaufi3la1vg));
								if ($V5shjmx03fxymode) {
									$Vptwwo5eiyyp = TCPDF_FONTS::utf8Bidi($Vptwwo5eiyyp, $V12utqctneyn, $Vnwufml5q3nphis->tmprtl, $Vnwufml5q3nphis->isunicode, $Vnwufml5q3nphis->CurrentFont);
								}
								$Vx3g4ytafo1ainew = $Vnwufml5q3nphis->GetArrStringWidth($Vptwwo5eiyyp);
								unset($Vptwwo5eiyyp);
								if ($Vnwufml5q3nphis->rtl) {
									$Vnwufml5q3nphis->endlinex = $Vvt20qqut4butartx - $Vx3g4ytafo1ainew;
								} else {
									$Vnwufml5q3nphis->endlinex = $Vvt20qqut4butartx + $Vx3g4ytafo1ainew;
								}
								$Vim12f51jw5r = $Vx3g4ytafo1ainew;
								$Vdjya1jvufxe = $Vnwufml5q3nphis->cell_padding;
								if ($Vetludueqmbtaxh == 0) {
									$Vnwufml5q3nphis->SetCellPadding(0);
								}
							}
							if ($Vsl3crr1j3u0 AND $Vnwufml5q3nphis->isRTLTextDir()) {
								$V12utqctneyn = $Vnwufml5q3nphis->stringRightTrim($V12utqctneyn);
							}
							$Vnwufml5q3nphis->Cell($Vim12f51jw5r, $Vvjxcwrp4tjq, $V12utqctneyn, 0, 1, $Vb5kn1gbu0ep, $Viiychbtwwwq, $Vx3g4ytafo1aink, $Vvt20qqut4butretch);
							unset($V12utqctneyn);
							if ($Vvmrikqrcj45) {
								$Vnwufml5q3nphis->cell_padding = $Vdjya1jvufxe;
								return (TCPDF_FONTS::UniArrSubString($Vrfs5mafwdm2, $V55vc4mewy5w));
							}
							$Vuaufi3la1vg = $V55vc4mewy5w;
							--$V55vc4mewy5w;
						}
					} else {
						
						if ($Vnwufml5q3nphis->rtl AND (!$Vsl3crr1j3u0) AND ($Vvt20qqut4buep < $V55vc4mewy5w)) {
							$Vtog4ce1iqej = 1;
						} else {
							$Vtog4ce1iqej = 0;
						}
						
						$Vvt20qqut4butrrest = TCPDF_FONTS::UniArrSubString($Vrfs5mafwdm2, ($Vvt20qqut4buep + $Vtog4ce1iqej));
						$Vgv45dfhsyuhextstr = TCPDF_STATIC::pregSplit('/'.$Vnwufml5q3nphis->re_space['p'].'/', $Vnwufml5q3nphis->re_space['m'], $Vnwufml5q3nphis->stringTrim($Vvt20qqut4butrrest));
						if (isset($Vgv45dfhsyuhextstr[0]) AND ($Vnwufml5q3nphis->GetStringWidth($Vgv45dfhsyuhextstr[0]) > $Vhkd5dswmzhb)) {
							
							$V12utqctneyn = TCPDF_FONTS::UniArrSubString($Vrfs5mafwdm2, $Vuaufi3la1vg, $V55vc4mewy5w);
							if ($Vvmrikqrcj45) {
								$Vvt20qqut4butartx = $Vnwufml5q3nphis->x;
								$Vptwwo5eiyyp = array_slice($Vwcmlurixvzghars, $Vuaufi3la1vg, ($V55vc4mewy5w - $Vuaufi3la1vg));
								if ($V5shjmx03fxymode) {
									$Vptwwo5eiyyp = TCPDF_FONTS::utf8Bidi($Vptwwo5eiyyp, $V12utqctneyn, $Vnwufml5q3nphis->tmprtl, $Vnwufml5q3nphis->isunicode, $Vnwufml5q3nphis->CurrentFont);
								}
								$Vx3g4ytafo1ainew = $Vnwufml5q3nphis->GetArrStringWidth($Vptwwo5eiyyp);
								unset($Vptwwo5eiyyp);
								if ($Vnwufml5q3nphis->rtl) {
									$Vnwufml5q3nphis->endlinex = ($Vvt20qqut4butartx - $Vx3g4ytafo1ainew);
								} else {
									$Vnwufml5q3nphis->endlinex = ($Vvt20qqut4butartx + $Vx3g4ytafo1ainew);
								}
								$Vim12f51jw5r = $Vx3g4ytafo1ainew;
								$Vdjya1jvufxe = $Vnwufml5q3nphis->cell_padding;
								if ($Vetludueqmbtaxh == 0) {
									$Vnwufml5q3nphis->SetCellPadding(0);
								}
							}
							if ($Vsl3crr1j3u0 AND $Vnwufml5q3nphis->isRTLTextDir()) {
								$V12utqctneyn = $Vnwufml5q3nphis->stringRightTrim($V12utqctneyn);
							}
							$Vnwufml5q3nphis->Cell($Vim12f51jw5r, $Vvjxcwrp4tjq, $V12utqctneyn, 0, 1, $Vb5kn1gbu0ep, $Viiychbtwwwq, $Vx3g4ytafo1aink, $Vvt20qqut4butretch);
							unset($V12utqctneyn);
							if ($Vvmrikqrcj45) {
								$Vnwufml5q3nphis->cell_padding = $Vdjya1jvufxe;
								return (TCPDF_FONTS::UniArrSubString($Vrfs5mafwdm2, $V55vc4mewy5w));
							}
							$Vuaufi3la1vg = $V55vc4mewy5w;
							--$V55vc4mewy5w;
						} else {
							
							if ($Vvt20qqut4buhy) {
								
								$Vvt20qqut4buhy_width = $Vcbskhav40mk;
								if ($Vnwufml5q3nphis->rtl) {
									$Vvt20qqut4buhy_char_left = $Vwv2d1qxl4la;
									$Vvt20qqut4buhy_char_right = '';
								} else {
									$Vvt20qqut4buhy_char_left = '';
									$Vvt20qqut4buhy_char_right = $Vwv2d1qxl4la;
								}
							} else {
								$Vvt20qqut4buhy_width = 0;
								$Vvt20qqut4buhy_char_left = '';
								$Vvt20qqut4buhy_char_right = '';
							}
							$V12utqctneyn = TCPDF_FONTS::UniArrSubString($Vrfs5mafwdm2, $Vuaufi3la1vg, ($Vvt20qqut4buep + $Vtog4ce1iqej));
							if ($Vvmrikqrcj45) {
								$Vvt20qqut4butartx = $Vnwufml5q3nphis->x;
								$Vptwwo5eiyyp = array_slice($Vwcmlurixvzghars, $Vuaufi3la1vg, (($Vvt20qqut4buep + $Vtog4ce1iqej) - $Vuaufi3la1vg));
								if ($V5shjmx03fxymode) {
									$Vptwwo5eiyyp = TCPDF_FONTS::utf8Bidi($Vptwwo5eiyyp, $V12utqctneyn, $Vnwufml5q3nphis->tmprtl, $Vnwufml5q3nphis->isunicode, $Vnwufml5q3nphis->CurrentFont);
								}
								$Vx3g4ytafo1ainew = $Vnwufml5q3nphis->GetArrStringWidth($Vptwwo5eiyyp);
								unset($Vptwwo5eiyyp);
								if ($Vnwufml5q3nphis->rtl) {
									$Vnwufml5q3nphis->endlinex = $Vvt20qqut4butartx - $Vx3g4ytafo1ainew - $Vvt20qqut4buhy_width;
								} else {
									$Vnwufml5q3nphis->endlinex = $Vvt20qqut4butartx + $Vx3g4ytafo1ainew + $Vvt20qqut4buhy_width;
								}
								$Vim12f51jw5r = $Vx3g4ytafo1ainew;
								$Vdjya1jvufxe = $Vnwufml5q3nphis->cell_padding;
								if ($Vetludueqmbtaxh == 0) {
									$Vnwufml5q3nphis->SetCellPadding(0);
								}
							}
							
							if ($Vsl3crr1j3u0 AND $Vnwufml5q3nphis->isRTLTextDir()) {
								$V12utqctneyn = $Vnwufml5q3nphis->stringRightTrim($V12utqctneyn);
							}
							$Vnwufml5q3nphis->Cell($Vim12f51jw5r, $Vvjxcwrp4tjq, $Vvt20qqut4buhy_char_left.$V12utqctneyn.$Vvt20qqut4buhy_char_right, 0, 1, $Vb5kn1gbu0ep, $Viiychbtwwwq, $Vx3g4ytafo1aink, $Vvt20qqut4butretch);
							unset($V12utqctneyn);
							if ($Vvmrikqrcj45) {
								if ($Vwcmlurixvzghars[$Vvt20qqut4buep] == 45) {
									$Vtog4ce1iqej += 1;
								}
								
								$Vnwufml5q3nphis->cell_padding = $Vdjya1jvufxe;
								return (TCPDF_FONTS::UniArrSubString($Vrfs5mafwdm2, ($Vvt20qqut4buep + $Vtog4ce1iqej)));
							}
							$V55vc4mewy5w = $Vvt20qqut4buep;
							$Vvt20qqut4buep = -1;
							$Vvt20qqut4buhy = false;
							$Vuaufi3la1vg = ($V55vc4mewy5w + 1);
						}
					}
					
					if ((($Vnwufml5q3nphis->y + $Vnwufml5q3nphis->lasth) > $Vnwufml5q3nphis->PageBreakTrigger) AND ($Vnwufml5q3nphis->inPageBody())) {
						$Vnwufml5q3nphis->AcceptPageBreak();
						if ($Vnwufml5q3nphis->rtl) {
							$Vnwufml5q3nphis->x -= $Vwhlvvfn0mdj['R'];
						} else {
							$Vnwufml5q3nphis->x += $Vwhlvvfn0mdj['L'];
						}
						$Vnwufml5q3nphis->lMargin += $Vwhlvvfn0mdj['L'];
						$Vnwufml5q3nphis->rMargin += $Vwhlvvfn0mdj['R'];
					}
					$Vim12f51jw5r = $Vnwufml5q3nphis->getRemainingWidth();
					$Vim12f51jw5rmax = $Vim12f51jw5r - $Vnwufml5q3nphis->cell_padding['L'] - $Vnwufml5q3nphis->cell_padding['R'];
					if ($Vx3g4ytafo1ainebreak) {
						$Vx3g4ytafo1ainebreak = false;
					} else {
						++$Vgv45dfhsyuhl;
						$Vx3g4ytafo1a = 0;
					}
				}
			}
			
			$Vzu2lvj1xpcj = $Vwcmlurixvzg;
			++$V55vc4mewy5w;
		} 
		
		if ($Vx3g4ytafo1a > 0) {
			switch ($Vb5kn1gbu0ep) {
				case 'J':
				case 'C': {
					$Vim12f51jw5r = $Vim12f51jw5r;
					break;
				}
				case 'L': {
					if ($Vnwufml5q3nphis->rtl) {
						$Vim12f51jw5r = $Vim12f51jw5r;
					} else {
						$Vim12f51jw5r = $Vx3g4ytafo1a;
					}
					break;
				}
				case 'R': {
					if ($Vnwufml5q3nphis->rtl) {
						$Vim12f51jw5r = $Vx3g4ytafo1a;
					} else {
						$Vim12f51jw5r = $Vim12f51jw5r;
					}
					break;
				}
				default: {
					$Vim12f51jw5r = $Vx3g4ytafo1a;
					break;
				}
			}
			$V12utqctneyn = TCPDF_FONTS::UniArrSubString($Vrfs5mafwdm2, $Vuaufi3la1vg, $Vgv45dfhsyuhb);
			if ($Vvmrikqrcj45) {
				$Vvt20qqut4butartx = $Vnwufml5q3nphis->x;
				$Vptwwo5eiyyp = array_slice($Vwcmlurixvzghars, $Vuaufi3la1vg, ($Vgv45dfhsyuhb - $Vuaufi3la1vg));
				if ($V5shjmx03fxymode) {
					$Vptwwo5eiyyp = TCPDF_FONTS::utf8Bidi($Vptwwo5eiyyp, $V12utqctneyn, $Vnwufml5q3nphis->tmprtl, $Vnwufml5q3nphis->isunicode, $Vnwufml5q3nphis->CurrentFont);
				}
				$Vx3g4ytafo1ainew = $Vnwufml5q3nphis->GetArrStringWidth($Vptwwo5eiyyp);
				unset($Vptwwo5eiyyp);
				if ($Vnwufml5q3nphis->rtl) {
					$Vnwufml5q3nphis->endlinex = $Vvt20qqut4butartx - $Vx3g4ytafo1ainew;
				} else {
					$Vnwufml5q3nphis->endlinex = $Vvt20qqut4butartx + $Vx3g4ytafo1ainew;
				}
				$Vim12f51jw5r = $Vx3g4ytafo1ainew;
				$Vdjya1jvufxe = $Vnwufml5q3nphis->cell_padding;
				if ($Vetludueqmbtaxh == 0) {
					$Vnwufml5q3nphis->SetCellPadding(0);
				}
			}
			if ($Vsl3crr1j3u0 AND $Vnwufml5q3nphis->isRTLTextDir()) {
				$V12utqctneyn = $Vnwufml5q3nphis->stringRightTrim($V12utqctneyn);
			}
			$Vnwufml5q3nphis->Cell($Vim12f51jw5r, $Vvjxcwrp4tjq, $V12utqctneyn, 0, $Vx3g4ytafo1an, $Vb5kn1gbu0ep, $Viiychbtwwwq, $Vx3g4ytafo1aink, $Vvt20qqut4butretch);
			unset($V12utqctneyn);
			if ($Vvmrikqrcj45) {
				$Vnwufml5q3nphis->cell_padding = $Vdjya1jvufxe;
				return (TCPDF_FONTS::UniArrSubString($Vrfs5mafwdm2, $Vgv45dfhsyuhb));
			}
			++$Vgv45dfhsyuhl;
		}
		if ($Vvmrikqrcj45) {
			return '';
		}
		return $Vgv45dfhsyuhl;
	}

	
	protected function getRemainingWidth() {
		list($Vnwufml5q3nphis->x, $Vnwufml5q3nphis->y) = $Vnwufml5q3nphis->checkPageRegions(0, $Vnwufml5q3nphis->x, $Vnwufml5q3nphis->y);
		if ($Vnwufml5q3nphis->rtl) {
			return ($Vnwufml5q3nphis->x - $Vnwufml5q3nphis->lMargin);
		} else {
			return ($Vnwufml5q3nphis->w - $Vnwufml5q3nphis->rMargin - $Vnwufml5q3nphis->x);
		}
	}

	
	protected function fitBlock($Vim12f51jw5r, $Vvjxcwrp4tjq, $Vangwoo3ejfg, $Vgxufordoa4t, $Vbleqcwoft4t=false) {
		if ($Vim12f51jw5r <= 0) {
			
			$Vim12f51jw5r = ($Vnwufml5q3nphis->w - $Vnwufml5q3nphis->lMargin - $Vnwufml5q3nphis->rMargin);
			if ($Vim12f51jw5r <= 0) {
				$Vim12f51jw5r = 1;
			}
		}
		if ($Vvjxcwrp4tjq <= 0) {
			
			$Vvjxcwrp4tjq = ($Vnwufml5q3nphis->PageBreakTrigger - $Vnwufml5q3nphis->tMargin);
			if ($Vvjxcwrp4tjq <= 0) {
				$Vvjxcwrp4tjq = 1;
			}
		}
		
		if ($Vbleqcwoft4t OR $Vnwufml5q3nphis->AutoPageBreak) {
			$V5ihv3uo3w5y_wh = ($Vim12f51jw5r / $Vvjxcwrp4tjq);
			if ($Vvjxcwrp4tjq > ($Vnwufml5q3nphis->PageBreakTrigger - $Vnwufml5q3nphis->tMargin)) {
				$Vvjxcwrp4tjq = $Vnwufml5q3nphis->PageBreakTrigger - $Vnwufml5q3nphis->tMargin;
				$Vim12f51jw5r = ($Vvjxcwrp4tjq * $V5ihv3uo3w5y_wh);
			}
			
			if ($Vbleqcwoft4t) {
				$Vetludueqmbtaxw = ($Vnwufml5q3nphis->w - $Vnwufml5q3nphis->lMargin - $Vnwufml5q3nphis->rMargin);
				if ($Vim12f51jw5r > $Vetludueqmbtaxw) {
					$Vim12f51jw5r = $Vetludueqmbtaxw;
					$Vvjxcwrp4tjq = ($Vim12f51jw5r / $V5ihv3uo3w5y_wh);
				}
			}
		}
		
		$V0mzrbiqfz4t = $Vnwufml5q3nphis->x;
		$Vrcna2mbk1xx = $Vnwufml5q3nphis->y;
		if ($Vnwufml5q3nphis->checkPageBreak($Vvjxcwrp4tjq, $Vgxufordoa4t) OR ($Vnwufml5q3nphis->y < $Vrcna2mbk1xx)) {
			$Vgxufordoa4t = $Vnwufml5q3nphis->y;
			if ($Vnwufml5q3nphis->rtl) {
				$Vangwoo3ejfg += ($V0mzrbiqfz4t - $Vnwufml5q3nphis->x);
			} else {
				$Vangwoo3ejfg += ($Vnwufml5q3nphis->x - $V0mzrbiqfz4t);
			}
			$Vnwufml5q3nphis->newline = true;
		}
		
		if ($Vbleqcwoft4t) {
			$V5ihv3uo3w5y_wh = ($Vim12f51jw5r / $Vvjxcwrp4tjq);
			if (($Vgxufordoa4t + $Vvjxcwrp4tjq) > $Vnwufml5q3nphis->PageBreakTrigger) {
				$Vvjxcwrp4tjq = $Vnwufml5q3nphis->PageBreakTrigger - $Vgxufordoa4t;
				$Vim12f51jw5r = ($Vvjxcwrp4tjq * $V5ihv3uo3w5y_wh);
			}
			if ((!$Vnwufml5q3nphis->rtl) AND (($Vangwoo3ejfg + $Vim12f51jw5r) > ($Vnwufml5q3nphis->w - $Vnwufml5q3nphis->rMargin))) {
				$Vim12f51jw5r = $Vnwufml5q3nphis->w - $Vnwufml5q3nphis->rMargin - $Vangwoo3ejfg;
				$Vvjxcwrp4tjq = ($Vim12f51jw5r / $V5ihv3uo3w5y_wh);
			} elseif (($Vnwufml5q3nphis->rtl) AND (($Vangwoo3ejfg - $Vim12f51jw5r) < ($Vnwufml5q3nphis->lMargin))) {
				$Vim12f51jw5r = $Vangwoo3ejfg - $Vnwufml5q3nphis->lMargin;
				$Vvjxcwrp4tjq = ($Vim12f51jw5r / $V5ihv3uo3w5y_wh);
			}
		}
		return array($Vim12f51jw5r, $Vvjxcwrp4tjq, $Vangwoo3ejfg, $Vgxufordoa4t);
	}

	
	public function Image($Vjluyuwumvof, $Vangwoo3ejfg='', $Vgxufordoa4t='', $Vim12f51jw5r=0, $Vvjxcwrp4tjq=0, $Vvmwm1jsklgc='', $Vx3g4ytafo1aink='', $Vb5kn1gbu0ep='', $V14ltds3prprsize=false, $Vjq4dwsotjk3=300, $Ve2ojby5keys='', $V55vc4mewy5wsmask=false, $V55vc4mewy5wmgmask=false, $Vgffhwoemo4c=0, $Vnyznyztoumc=false, $Vvjxcwrp4tjqidden=false, $Vbleqcwoft4t=false, $Vlrvi4ycfcp4=false, $Vlrvi4ycfcp4imgs=array()) {
		if ($Vnwufml5q3nphis->state != 2) {
			return;
		}
		if (strcmp($Vangwoo3ejfg, '') === 0) {
			$Vangwoo3ejfg = $Vnwufml5q3nphis->x;
		}
		if (strcmp($Vgxufordoa4t, '') === 0) {
			$Vgxufordoa4t = $Vnwufml5q3nphis->y;
		}
		
		list($Vangwoo3ejfg, $Vgxufordoa4t) = $Vnwufml5q3nphis->checkPageRegions($Vvjxcwrp4tjq, $Vangwoo3ejfg, $Vgxufordoa4t);
		$Vkbs4v2dluew = ''; 
		$V55vc4mewy5wmsize = FALSE;
		
		if ($Vjluyuwumvof[0] === '@') {
			
			$V55vc4mewy5wmgdata = substr($Vjluyuwumvof, 1);
		} else { 
			if ($Vjluyuwumvof[0] === '*') {
				
				$Vjluyuwumvof = substr($Vjluyuwumvof, 1);
				$Vkbs4v2dluew = $Vjluyuwumvof;
			}
			
			if (!@file_exists($Vjluyuwumvof)) {
				
				$Vqvlqu0gjob3 = str_replace(' ', '%20', $Vjluyuwumvof);
				if (@file_exists($Vqvlqu0gjob3)) {
					$Vjluyuwumvof = $Vqvlqu0gjob3;
				}
			}
			if (($V55vc4mewy5wmsize = @getimagesize($Vjluyuwumvof)) === FALSE) {
				if (in_array($Vjluyuwumvof, $Vnwufml5q3nphis->imagekeys)) {
					
					$V55vc4mewy5wnfo = $Vnwufml5q3nphis->getImageBuffer($Vjluyuwumvof);
					$V55vc4mewy5wmsize = array($V55vc4mewy5wnfo['w'], $V55vc4mewy5wnfo['h']);
				} elseif (strpos($Vjluyuwumvof, '__tcpdf_'.$Vnwufml5q3nphis->file_id.'_img') === FALSE) {
					$V55vc4mewy5wmgdata = TCPDF_STATIC::fileGetContents($Vjluyuwumvof);
				}
			}
		}
		if (!empty($V55vc4mewy5wmgdata)) {
			
			$Vrn2kybf5rgt = $Vjluyuwumvof;
			$Vjluyuwumvof = TCPDF_STATIC::getObjFilename('img', $Vnwufml5q3nphis->file_id);
			$V2n2znk5umlx = TCPDF_STATIC::fopenLocal($Vjluyuwumvof, 'w');
			if (!$V2n2znk5umlx) {
				$Vnwufml5q3nphis->Error('Unable to write file: '.$Vjluyuwumvof);
			}
			fwrite($V2n2znk5umlx, $V55vc4mewy5wmgdata);
			fclose($V2n2znk5umlx);
			unset($V55vc4mewy5wmgdata);
			$V55vc4mewy5wmsize = @getimagesize($Vjluyuwumvof);
			if ($V55vc4mewy5wmsize === FALSE) {
				unlink($Vjluyuwumvof);
				$Vjluyuwumvof = $Vrn2kybf5rgt;
			}
		}
		if ($V55vc4mewy5wmsize === FALSE) {
			if (($Vim12f51jw5r > 0) AND ($Vvjxcwrp4tjq > 0)) {
				
				$Vhkd5dswmzhb = $Vnwufml5q3nphis->getHTMLUnitToUnits($Vim12f51jw5r, 0, $Vnwufml5q3nphis->pdfunit, true) * $Vnwufml5q3nphis->imgscale * $Vnwufml5q3nphis->k;
				$Vyjwrlszd3fy = $Vnwufml5q3nphis->getHTMLUnitToUnits($Vvjxcwrp4tjq, 0, $Vnwufml5q3nphis->pdfunit, true) * $Vnwufml5q3nphis->imgscale * $Vnwufml5q3nphis->k;
				$V55vc4mewy5wmsize = array($Vhkd5dswmzhb, $Vyjwrlszd3fy);
			} else {
				$Vnwufml5q3nphis->Error('[Image] Unable to get the size of the image: '.$Vjluyuwumvof);
			}
		}
		
		$Vjluyuwumvofhash = md5($Vjluyuwumvof);
		
		list($Vg0um1ewuizu, $Vuhn2zhxf1mz) = $V55vc4mewy5wmsize;
		
		if (($Vim12f51jw5r <= 0) AND ($Vvjxcwrp4tjq <= 0)) {
			
			$Vim12f51jw5r = $Vnwufml5q3nphis->pixelsToUnits($Vg0um1ewuizu);
			$Vvjxcwrp4tjq = $Vnwufml5q3nphis->pixelsToUnits($Vuhn2zhxf1mz);
		} elseif ($Vim12f51jw5r <= 0) {
			$Vim12f51jw5r = $Vvjxcwrp4tjq * $Vg0um1ewuizu / $Vuhn2zhxf1mz;
		} elseif ($Vvjxcwrp4tjq <= 0) {
			$Vvjxcwrp4tjq = $Vim12f51jw5r * $Vuhn2zhxf1mz / $Vg0um1ewuizu;
		} elseif (($Vnyznyztoumc !== false) AND ($Vim12f51jw5r > 0) AND ($Vvjxcwrp4tjq > 0)) {
			if (strlen($Vnyznyztoumc) !== 2) {
				
				$Vnyznyztoumc = '--';
			}
			
			if ((($Vim12f51jw5r * $Vuhn2zhxf1mz) / ($Vvjxcwrp4tjq * $Vg0um1ewuizu)) < 1) {
				
				$Vqla5tb310dr = $Vvjxcwrp4tjq;
				
				$Vvjxcwrp4tjq = $Vim12f51jw5r * $Vuhn2zhxf1mz / $Vg0um1ewuizu;
				
				$Vvjxcwrp4tjqdiff = ($Vqla5tb310dr - $Vvjxcwrp4tjq);
				
				switch (strtoupper($Vnyznyztoumc[1])) {
					case 'T': {
						break;
					}
					case 'M': {
						$Vgxufordoa4t += ($Vvjxcwrp4tjqdiff / 2);
						break;
					}
					case 'B': {
						$Vgxufordoa4t += $Vvjxcwrp4tjqdiff;
						break;
					}
				}
			} else {
				
				$Vnpkgsnbszin = $Vim12f51jw5r;
				
				$Vim12f51jw5r = $Vvjxcwrp4tjq * $Vg0um1ewuizu / $Vuhn2zhxf1mz;
				
				$Vim12f51jw5rdiff = ($Vnpkgsnbszin - $Vim12f51jw5r);
				
				switch (strtoupper($Vnyznyztoumc[0])) {
					case 'L': {
						if ($Vnwufml5q3nphis->rtl) {
							$Vangwoo3ejfg -= $Vim12f51jw5rdiff;
						}
						break;
					}
					case 'C': {
						if ($Vnwufml5q3nphis->rtl) {
							$Vangwoo3ejfg -= ($Vim12f51jw5rdiff / 2);
						} else {
							$Vangwoo3ejfg += ($Vim12f51jw5rdiff / 2);
						}
						break;
					}
					case 'R': {
						if (!$Vnwufml5q3nphis->rtl) {
							$Vangwoo3ejfg += $Vim12f51jw5rdiff;
						}
						break;
					}
				}
			}
		}
		
		list($Vim12f51jw5r, $Vvjxcwrp4tjq, $Vangwoo3ejfg, $Vgxufordoa4t) = $Vnwufml5q3nphis->fitBlock($Vim12f51jw5r, $Vvjxcwrp4tjq, $Vangwoo3ejfg, $Vgxufordoa4t, $Vbleqcwoft4t);
		
		$Vgv45dfhsyuheww = round($Vim12f51jw5r * $Vnwufml5q3nphis->k * $Vjq4dwsotjk3 / $Vnwufml5q3nphis->dpi);
		$Vgv45dfhsyuhewh = round($Vvjxcwrp4tjq * $Vnwufml5q3nphis->k * $Vjq4dwsotjk3 / $Vnwufml5q3nphis->dpi);
		
		$Vgv45dfhsyuhewsize = ($Vgv45dfhsyuheww * $Vgv45dfhsyuhewh);
		$Vrpcmzvcjnqi = ($Vg0um1ewuizu * $Vuhn2zhxf1mz);
		if (intval($V14ltds3prprsize) == 2) {
			$V14ltds3prprsize = true;
		} elseif ($Vgv45dfhsyuhewsize >= $Vrpcmzvcjnqi) {
			$V14ltds3prprsize = false;
		}
		
		$Vgv45dfhsyuhewimage = true;
		if (in_array($Vjluyuwumvof, $Vnwufml5q3nphis->imagekeys)) {
			$Vgv45dfhsyuhewimage = false;
			
			$V55vc4mewy5wnfo = $Vnwufml5q3nphis->getImageBuffer($Vjluyuwumvof);
			if (strpos($Vjluyuwumvof, '__tcpdf_'.$Vnwufml5q3nphis->file_id.'_imgmask_') === FALSE) {
				
				$V0zwdf2vrv3t = ($V55vc4mewy5wnfo['w'] * $V55vc4mewy5wnfo['h']);
				if ((($V0zwdf2vrv3t < $Vgv45dfhsyuhewsize) AND ($V14ltds3prprsize)) OR (($V0zwdf2vrv3t < $Vrpcmzvcjnqi) AND (!$V14ltds3prprsize))) {
					$Vgv45dfhsyuhewimage = true;
				}
			}
		} elseif (($V55vc4mewy5wsmask === false) AND ($V55vc4mewy5wmgmask === false) AND (strpos($Vjluyuwumvof, '__tcpdf_'.$Vnwufml5q3nphis->file_id.'_imgmask_') === FALSE)) {
			
			$Vp2c52lazetx = K_PATH_CACHE.'__tcpdf_'.$Vnwufml5q3nphis->file_id.'_imgmask_plain_'.$Vjluyuwumvofhash;
			
			$Vsuk3p5hlyfs = K_PATH_CACHE.'__tcpdf_'.$Vnwufml5q3nphis->file_id.'_imgmask_alpha_'.$Vjluyuwumvofhash;
			
			if (in_array($Vp2c52lazetx, $Vnwufml5q3nphis->imagekeys)) {
				
				$V55vc4mewy5wnfo = $Vnwufml5q3nphis->getImageBuffer($Vp2c52lazetx);
				
				$V0zwdf2vrv3t = ($V55vc4mewy5wnfo['w'] * $V55vc4mewy5wnfo['h']);
				if ((($V0zwdf2vrv3t < $Vgv45dfhsyuhewsize) AND ($V14ltds3prprsize)) OR (($V0zwdf2vrv3t < $Vrpcmzvcjnqi) AND (!$V14ltds3prprsize))) {
					$Vgv45dfhsyuhewimage = true;
				} else {
					$Vgv45dfhsyuhewimage = false;
					
					$V55vc4mewy5wmgmask = $Vnwufml5q3nphis->Image($Vsuk3p5hlyfs, $Vangwoo3ejfg, $Vgxufordoa4t, $Vim12f51jw5r, $Vvjxcwrp4tjq, 'PNG', '', '', $V14ltds3prprsize, $Vjq4dwsotjk3, '', true, false);
					
					return $Vnwufml5q3nphis->Image($Vp2c52lazetx, $Vangwoo3ejfg, $Vgxufordoa4t, $Vim12f51jw5r, $Vvjxcwrp4tjq, $Vvmwm1jsklgc, $Vx3g4ytafo1aink, $Vb5kn1gbu0ep, $V14ltds3prprsize, $Vjq4dwsotjk3, $Ve2ojby5keys, false, $V55vc4mewy5wmgmask);
				}
			}
		}
		if ($Vgv45dfhsyuhewimage) {
			
			$Vvmwm1jsklgc = strtolower($Vvmwm1jsklgc);
			if ($Vvmwm1jsklgc == '') {
				$Vvmwm1jsklgc = TCPDF_IMAGES::getImageFileType($Vjluyuwumvof, $V55vc4mewy5wmsize);
			} elseif ($Vvmwm1jsklgc == 'jpg') {
				$Vvmwm1jsklgc = 'jpeg';
			}
			$Vetludueqmbtqr = TCPDF_STATIC::get_mqr();
			TCPDF_STATIC::set_mqr(false);
			
			$Vetludueqmbttd = '_parse'.$Vvmwm1jsklgc;
			
			$Vej1qzas0mmh = 'imagecreatefrom'.$Vvmwm1jsklgc;
			$V55vc4mewy5wnfo = false;
			if ((method_exists('TCPDF_IMAGES', $Vetludueqmbttd)) AND (!($V14ltds3prprsize AND (function_exists($Vej1qzas0mmh) OR extension_loaded('imagick'))))) {
				
				$V55vc4mewy5wnfo = TCPDF_IMAGES::$Vetludueqmbttd($Vjluyuwumvof);
				if (($V55vc4mewy5wsmask === false) AND ($V55vc4mewy5wmgmask === false) AND (strpos($Vjluyuwumvof, '__tcpdf_'.$Vnwufml5q3nphis->file_id.'_imgmask_') === FALSE)
					AND (($V55vc4mewy5wnfo === 'pngalpha') OR (isset($V55vc4mewy5wnfo['trns']) AND !empty($V55vc4mewy5wnfo['trns'])))) {
					return $Vnwufml5q3nphis->ImagePngAlpha($Vjluyuwumvof, $Vangwoo3ejfg, $Vgxufordoa4t, $Vg0um1ewuizu, $Vuhn2zhxf1mz, $Vim12f51jw5r, $Vvjxcwrp4tjq, 'PNG', $Vx3g4ytafo1aink, $Vb5kn1gbu0ep, $V14ltds3prprsize, $Vjq4dwsotjk3, $Ve2ojby5keys, $Vjluyuwumvofhash);
				}
			}
			if (($V55vc4mewy5wnfo === false) AND function_exists($Vej1qzas0mmh)) {
				try {
					
					$V55vc4mewy5wmg = $Vej1qzas0mmh($Vjluyuwumvof);
					if ($V55vc4mewy5wmg !== false) {
						if ($V14ltds3prprsize) {
							$V55vc4mewy5wmgr = imagecreatetruecolor($Vgv45dfhsyuheww, $Vgv45dfhsyuhewh);
							if (($Vvmwm1jsklgc == 'gif') OR ($Vvmwm1jsklgc == 'png')) {
								$V55vc4mewy5wmgr = TCPDF_IMAGES::setGDImageTransparency($V55vc4mewy5wmgr, $V55vc4mewy5wmg);
							}
							imagecopyresampled($V55vc4mewy5wmgr, $V55vc4mewy5wmg, 0, 0, 0, 0, $Vgv45dfhsyuheww, $Vgv45dfhsyuhewh, $Vg0um1ewuizu, $Vuhn2zhxf1mz);
							$V55vc4mewy5wmg = $V55vc4mewy5wmgr;
						}
						if (($Vvmwm1jsklgc == 'gif') OR ($Vvmwm1jsklgc == 'png')) {
							$V55vc4mewy5wnfo = TCPDF_IMAGES::_toPNG($V55vc4mewy5wmg, TCPDF_STATIC::getObjFilename('img', $Vnwufml5q3nphis->file_id));
						} else {
							$V55vc4mewy5wnfo = TCPDF_IMAGES::_toJPEG($V55vc4mewy5wmg, $Vnwufml5q3nphis->jpeg_quality, TCPDF_STATIC::getObjFilename('img', $Vnwufml5q3nphis->file_id));
						}
					}
				} catch(Exception $Vs0htpwzsrcc) {
					$V55vc4mewy5wnfo = false;
				}
			}
			if (($V55vc4mewy5wnfo === false) AND extension_loaded('imagick')) {
				try {
					
					$V55vc4mewy5wmg = new Imagick();
					if ($Vvmwm1jsklgc == 'svg') {
						if ($Vjluyuwumvof[0] === '@') {
							
							$Vvt20qqut4buvgimg = substr($Vjluyuwumvof, 1);
						} else {
							
							$Vvt20qqut4buvgimg = TCPDF_STATIC::fileGetContents($Vjluyuwumvof);
						}
						if ($Vvt20qqut4buvgimg !== FALSE) {
							
							$V14ltds3prprgs = array();
							if (preg_match('/<svg([^\>]*)>/si', $Vvt20qqut4buvgimg, $V14ltds3prprgs)) {
								$Vvt20qqut4buvgtag = $V14ltds3prprgs[1];
								$V3p0tae11ldw = array();
								if (preg_match('/[\s]+width[\s]*=[\s]*"([^"]*)"/si', $Vvt20qqut4buvgtag, $V3p0tae11ldw)) {
									$Vv4wxcxfdtwp = $Vnwufml5q3nphis->getHTMLUnitToUnits($V3p0tae11ldw[1], 1, $Vnwufml5q3nphis->svgunit, false);
									$Vv4wxcxfdtwpu = sprintf('%F', ($Vv4wxcxfdtwp * $Vjq4dwsotjk3 / 72)).$Vnwufml5q3nphis->pdfunit;
									$Vvt20qqut4buvgtag = preg_replace('/[\s]+width[\s]*=[\s]*"[^"]*"/si', ' width="'.$Vv4wxcxfdtwpu.'"', $Vvt20qqut4buvgtag, 1);
								} else {
									$Vv4wxcxfdtwp = $Vim12f51jw5r;
								}
								$V3p0tae11ldw = array();
								if (preg_match('/[\s]+height[\s]*=[\s]*"([^"]*)"/si', $Vvt20qqut4buvgtag, $V3p0tae11ldw)) {
									$Vq3m2amxzyi5 = $Vnwufml5q3nphis->getHTMLUnitToUnits($V3p0tae11ldw[1], 1, $Vnwufml5q3nphis->svgunit, false);
									$Vq3m2amxzyi5u = sprintf('%F', ($Vq3m2amxzyi5 * $Vjq4dwsotjk3 / 72)).$Vnwufml5q3nphis->pdfunit;
									$Vvt20qqut4buvgtag = preg_replace('/[\s]+height[\s]*=[\s]*"[^"]*"/si', ' height="'.$Vq3m2amxzyi5u.'"', $Vvt20qqut4buvgtag, 1);
								} else {
									$Vq3m2amxzyi5 = $Vvjxcwrp4tjq;
								}
								$V3p0tae11ldw = array();
								if (!preg_match('/[\s]+viewBox[\s]*=[\s]*"[\s]*([0-9\.]+)[\s]+([0-9\.]+)[\s]+([0-9\.]+)[\s]+([0-9\.]+)[\s]*"/si', $Vvt20qqut4buvgtag, $V3p0tae11ldw)) {
									$Vjrlto4ghqhv = ($Vv4wxcxfdtwp * $Vnwufml5q3nphis->imgscale * $Vnwufml5q3nphis->k);
									$Vqafouvf5uw0 = ($Vq3m2amxzyi5 * $Vnwufml5q3nphis->imgscale * $Vnwufml5q3nphis->k);
									$Vcg5pc2yvzda = sprintf(' viewBox="0 0 %F %F" ', $Vjrlto4ghqhv, $Vqafouvf5uw0);
									$Vvt20qqut4buvgtag = $Vcg5pc2yvzda.$Vvt20qqut4buvgtag;
								}
								$Vvt20qqut4buvgimg = preg_replace('/<svg([^\>]*)>/si', '<svg'.$Vvt20qqut4buvgtag.'>', $Vvt20qqut4buvgimg, 1);
							}
							$V55vc4mewy5wmg->readImageBlob($Vvt20qqut4buvgimg);
						}
					} else {
						$V55vc4mewy5wmg->readImage($Vjluyuwumvof);
					}
					if ($V14ltds3prprsize) {
						$V55vc4mewy5wmg->resizeImage($Vgv45dfhsyuheww, $Vgv45dfhsyuhewh, 10, 1, false);
					}
					$V55vc4mewy5wmg->setCompressionQuality($Vnwufml5q3nphis->jpeg_quality);
					$V55vc4mewy5wmg->setImageFormat('jpeg');
					$Vsfc5ll5jobq = TCPDF_STATIC::getObjFilename('img', $Vnwufml5q3nphis->file_id);
					$V55vc4mewy5wmg->writeImage($Vsfc5ll5jobq);
					$V55vc4mewy5wnfo = TCPDF_IMAGES::_parsejpeg($Vsfc5ll5jobq);
					unlink($Vsfc5ll5jobq);
					$V55vc4mewy5wmg->destroy();
				} catch(Exception $Vs0htpwzsrcc) {
					$V55vc4mewy5wnfo = false;
				}
			}
			if ($V55vc4mewy5wnfo === false) {
				
				return;
			}
			TCPDF_STATIC::set_mqr($Vetludueqmbtqr);
			if ($V55vc4mewy5wsmask) {
				
				$V55vc4mewy5wnfo['cs'] = 'DeviceGray';
			}
			if ($V55vc4mewy5wmgmask !== false) {
				$V55vc4mewy5wnfo['masked'] = $V55vc4mewy5wmgmask;
			}
			if (!empty($Vkbs4v2dluew)) {
				$V55vc4mewy5wnfo['exurl'] = $Vkbs4v2dluew;
			}
			
			$V55vc4mewy5wnfo['altimgs'] = $Vlrvi4ycfcp4imgs;
			
			$V55vc4mewy5wnfo['i'] = $Vnwufml5q3nphis->setImageBuffer($Vjluyuwumvof, $V55vc4mewy5wnfo);
		}
		
		$Vnwufml5q3nphis->img_rb_y = $Vgxufordoa4t + $Vvjxcwrp4tjq;
		
		if ($Vnwufml5q3nphis->rtl) {
			if ($Ve2ojby5keys == 'L') {
				$Vangwoo3ejfgimg = $Vnwufml5q3nphis->lMargin;
			} elseif ($Ve2ojby5keys == 'C') {
				$Vangwoo3ejfgimg = ($Vnwufml5q3nphis->w + $Vnwufml5q3nphis->lMargin - $Vnwufml5q3nphis->rMargin - $Vim12f51jw5r) / 2;
			} elseif ($Ve2ojby5keys == 'R') {
				$Vangwoo3ejfgimg = $Vnwufml5q3nphis->w - $Vnwufml5q3nphis->rMargin - $Vim12f51jw5r;
			} else {
				$Vangwoo3ejfgimg = $Vangwoo3ejfg - $Vim12f51jw5r;
			}
			$Vnwufml5q3nphis->img_rb_x = $Vangwoo3ejfgimg;
		} else {
			if ($Ve2ojby5keys == 'L') {
				$Vangwoo3ejfgimg = $Vnwufml5q3nphis->lMargin;
			} elseif ($Ve2ojby5keys == 'C') {
				$Vangwoo3ejfgimg = ($Vnwufml5q3nphis->w + $Vnwufml5q3nphis->lMargin - $Vnwufml5q3nphis->rMargin - $Vim12f51jw5r) / 2;
			} elseif ($Ve2ojby5keys == 'R') {
				$Vangwoo3ejfgimg = $Vnwufml5q3nphis->w - $Vnwufml5q3nphis->rMargin - $Vim12f51jw5r;
			} else {
				$Vangwoo3ejfgimg = $Vangwoo3ejfg;
			}
			$Vnwufml5q3nphis->img_rb_x = $Vangwoo3ejfgimg + $Vim12f51jw5r;
		}
		if ($V55vc4mewy5wsmask OR $Vvjxcwrp4tjqidden) {
			
			return $V55vc4mewy5wnfo['i'];
		}
		$Vangwoo3ejfgkimg = $Vangwoo3ejfgimg * $Vnwufml5q3nphis->k;
		if (!$Vlrvi4ycfcp4) {
			
			$Vnwufml5q3nphis->_out(sprintf('q %F 0 0 %F %F %F cm /I%u Do Q', ($Vim12f51jw5r * $Vnwufml5q3nphis->k), ($Vvjxcwrp4tjq * $Vnwufml5q3nphis->k), $Vangwoo3ejfgkimg, (($Vnwufml5q3nphis->h - ($Vgxufordoa4t + $Vvjxcwrp4tjq)) * $Vnwufml5q3nphis->k), $V55vc4mewy5wnfo['i']));
		}
		if (!empty($Vgffhwoemo4c)) {
			$Vbhs0cmiogir = $Vnwufml5q3nphis->x;
			$Vsrhsnwkcuy3 = $Vnwufml5q3nphis->y;
			$Vnwufml5q3nphis->x = $Vangwoo3ejfgimg;
			if ($Vnwufml5q3nphis->rtl) {
				$Vnwufml5q3nphis->x += $Vim12f51jw5r;
			}
			$Vnwufml5q3nphis->y = $Vgxufordoa4t;
			$Vnwufml5q3nphis->Cell($Vim12f51jw5r, $Vvjxcwrp4tjq, '', $Vgffhwoemo4c, 0, '', 0, '', 0, true);
			$Vnwufml5q3nphis->x = $Vbhs0cmiogir;
			$Vnwufml5q3nphis->y = $Vsrhsnwkcuy3;
		}
		if ($Vx3g4ytafo1aink) {
			$Vnwufml5q3nphis->Link($Vangwoo3ejfgimg, $Vgxufordoa4t, $Vim12f51jw5r, $Vvjxcwrp4tjq, $Vx3g4ytafo1aink, 0);
		}
		
		switch($Vb5kn1gbu0ep) {
			case 'T': {
				$Vnwufml5q3nphis->y = $Vgxufordoa4t;
				$Vnwufml5q3nphis->x = $Vnwufml5q3nphis->img_rb_x;
				break;
			}
			case 'M': {
				$Vnwufml5q3nphis->y = $Vgxufordoa4t + round($Vvjxcwrp4tjq/2);
				$Vnwufml5q3nphis->x = $Vnwufml5q3nphis->img_rb_x;
				break;
			}
			case 'B': {
				$Vnwufml5q3nphis->y = $Vnwufml5q3nphis->img_rb_y;
				$Vnwufml5q3nphis->x = $Vnwufml5q3nphis->img_rb_x;
				break;
			}
			case 'N': {
				$Vnwufml5q3nphis->SetY($Vnwufml5q3nphis->img_rb_y);
				break;
			}
			default:{
				break;
			}
		}
		$Vnwufml5q3nphis->endlinex = $Vnwufml5q3nphis->img_rb_x;
		if ($Vnwufml5q3nphis->inxobj) {
			
			$Vnwufml5q3nphis->xobjects[$Vnwufml5q3nphis->xobjid]['images'][] = $V55vc4mewy5wnfo['i'];
		}
		return $V55vc4mewy5wnfo['i'];
	}

	
	protected function ImagePngAlpha($Vjluyuwumvof, $Vangwoo3ejfg, $Vgxufordoa4t, $Vim12f51jw5rpx, $Vvjxcwrp4tjqpx, $Vim12f51jw5r, $Vvjxcwrp4tjq, $Vvmwm1jsklgc, $Vx3g4ytafo1aink, $Vb5kn1gbu0ep, $V14ltds3prprsize, $Vjq4dwsotjk3, $Ve2ojby5keys, $Vjluyuwumvofhash='') {
		
		if (empty($Vjluyuwumvofhash)) {
			$Vjluyuwumvofhash = md5($Vjluyuwumvof);
		}
		
		$Vp2c52lazetx = K_PATH_CACHE.'__tcpdf_'.$Vnwufml5q3nphis->file_id.'_imgmask_plain_'.$Vjluyuwumvofhash;
		
		$Vsuk3p5hlyfs = K_PATH_CACHE.'__tcpdf_'.$Vnwufml5q3nphis->file_id.'_imgmask_alpha_'.$Vjluyuwumvofhash;
		$Vzqaxxdk0r01 = false;
		$Vdxf40qnr43v = '';
		
		if (($Vzqaxxdk0r01 === false) AND extension_loaded('imagick')) {
			try {
				
				$V55vc4mewy5wmg = new Imagick();
				$V55vc4mewy5wmg->readImage($Vjluyuwumvof);
				
				$V55vc4mewy5wmga = TCPDF_STATIC::objclone($V55vc4mewy5wmg);
				
				if (method_exists($V55vc4mewy5wmg, 'setImageAlphaChannel') AND defined('Imagick::ALPHACHANNEL_EXTRACT')) {
					$V55vc4mewy5wmg->setImageAlphaChannel(Imagick::ALPHACHANNEL_EXTRACT);
				} else {
					$V55vc4mewy5wmg->separateImageChannel(8); 
					$V55vc4mewy5wmg->negateImage(true);
				}
				$V55vc4mewy5wmg->setImageFormat('png');
				$V55vc4mewy5wmg->writeImage($Vsuk3p5hlyfs);
				
				if (method_exists($V55vc4mewy5wmga, 'setImageMatte')) {
					$V55vc4mewy5wmga->setImageMatte(false);
				} else {
					$V55vc4mewy5wmga->separateImageChannel(39); 
				}
				$V55vc4mewy5wmga->setImageFormat('png');
				$V55vc4mewy5wmga->writeImage($Vp2c52lazetx);
				$Vzqaxxdk0r01 = true;
			} catch (Exception $Vs0htpwzsrcc) {
				
				$Vdxf40qnr43v = 'Imagick library error: '.$Vs0htpwzsrcc->getMessage();
			}
		}
		
		if (($Vzqaxxdk0r01 === false) AND function_exists('imagecreatefrompng')) {
			try {
				
				$V55vc4mewy5wmg = imagecreatefrompng($Vjluyuwumvof);
				$V55vc4mewy5wmgalpha = imagecreate($Vim12f51jw5rpx, $Vvjxcwrp4tjqpx);
				
				for ($Vwcmlurixvzg = 0; $Vwcmlurixvzg < 256; ++$Vwcmlurixvzg) {
					ImageColorAllocate($V55vc4mewy5wmgalpha, $Vwcmlurixvzg, $Vwcmlurixvzg, $Vwcmlurixvzg);
				}
				
				for ($Vangwoo3ejfgpx = 0; $Vangwoo3ejfgpx < $Vim12f51jw5rpx; ++$Vangwoo3ejfgpx) {
					for ($Vgxufordoa4tpx = 0; $Vgxufordoa4tpx < $Vvjxcwrp4tjqpx; ++$Vgxufordoa4tpx) {
						$Vwcmlurixvzgolor = imagecolorat($V55vc4mewy5wmg, $Vangwoo3ejfgpx, $Vgxufordoa4tpx);
						
						$Vkanjnd0y3ow = $Vnwufml5q3nphis->getGDgamma($V55vc4mewy5wmg, $Vwcmlurixvzgolor);
						imagesetpixel($V55vc4mewy5wmgalpha, $Vangwoo3ejfgpx, $Vgxufordoa4tpx, $Vkanjnd0y3ow);
					}
				}
				imagepng($V55vc4mewy5wmgalpha, $Vsuk3p5hlyfs);
				imagedestroy($V55vc4mewy5wmgalpha);
				
				$V55vc4mewy5wmgplain = imagecreatetruecolor($Vim12f51jw5rpx, $Vvjxcwrp4tjqpx);
				imagecopy($V55vc4mewy5wmgplain, $V55vc4mewy5wmg, 0, 0, 0, 0, $Vim12f51jw5rpx, $Vvjxcwrp4tjqpx);
				imagepng($V55vc4mewy5wmgplain, $Vp2c52lazetx);
				imagedestroy($V55vc4mewy5wmgplain);
				$Vzqaxxdk0r01 = true;
			} catch (Exception $Vs0htpwzsrcc) {
				
				$Vdxf40qnr43v = 'GD library error: '.$Vs0htpwzsrcc->getMessage();
			}
		}
		if ($Vzqaxxdk0r01 === false) {
			if (empty($Vdxf40qnr43v)) {
				$Vnwufml5q3nphis->Error('TCPDF requires the Imagick or GD extension to handle PNG images with alpha channel.');
			} else {
				$Vnwufml5q3nphis->Error($Vdxf40qnr43v);
			}
		}
		
		$V55vc4mewy5wmgmask = $Vnwufml5q3nphis->Image($Vsuk3p5hlyfs, $Vangwoo3ejfg, $Vgxufordoa4t, $Vim12f51jw5r, $Vvjxcwrp4tjq, 'PNG', '', '', $V14ltds3prprsize, $Vjq4dwsotjk3, '', true, false);
		
		$Vnwufml5q3nphis->Image($Vp2c52lazetx, $Vangwoo3ejfg, $Vgxufordoa4t, $Vim12f51jw5r, $Vvjxcwrp4tjq, $Vvmwm1jsklgc, $Vx3g4ytafo1aink, $Vb5kn1gbu0ep, $V14ltds3prprsize, $Vjq4dwsotjk3, $Ve2ojby5keys, false, $V55vc4mewy5wmgmask);
	}

	
	protected function getGDgamma($V55vc4mewy5wmg, $Vwcmlurixvzg) {
		if (!isset($Vnwufml5q3nphis->gdgammacache['#'.$Vwcmlurixvzg])) {
			$Vwcmlurixvzgolors = imagecolorsforindex($V55vc4mewy5wmg, $Vwcmlurixvzg);
			
			$Vnwufml5q3nphis->gdgammacache['#'.$Vwcmlurixvzg] = (((127 - $Vwcmlurixvzgolors['alpha']) / 127) * 255);
			
			$Vnwufml5q3nphis->gdgammacache['#'.$Vwcmlurixvzg] = (pow(($Vnwufml5q3nphis->gdgammacache['#'.$Vwcmlurixvzg] / 255), 2.2) * 255);
			
			if (count($Vnwufml5q3nphis->gdgammacache) > 8) {
				
				array_shift($Vnwufml5q3nphis->gdgammacache);
			}
		}
		return $Vnwufml5q3nphis->gdgammacache['#'.$Vwcmlurixvzg];
	}

	
	public function Ln($Vvjxcwrp4tjq='', $Vwcmlurixvzgell=false) {
		if (($Vnwufml5q3nphis->num_columns > 1) AND ($Vnwufml5q3nphis->y == $Vnwufml5q3nphis->columns[$Vnwufml5q3nphis->current_column]['y']) AND isset($Vnwufml5q3nphis->columns[$Vnwufml5q3nphis->current_column]['x']) AND ($Vnwufml5q3nphis->x == $Vnwufml5q3nphis->columns[$Vnwufml5q3nphis->current_column]['x'])) {
			
			return;
		}
		if ($Vwcmlurixvzgell) {
			if ($Vnwufml5q3nphis->rtl) {
				$Vwcmlurixvzgellpadding = $Vnwufml5q3nphis->cell_padding['R'];
			} else {
				$Vwcmlurixvzgellpadding = $Vnwufml5q3nphis->cell_padding['L'];
			}
		} else {
			$Vwcmlurixvzgellpadding = 0;
		}
		if ($Vnwufml5q3nphis->rtl) {
			$Vnwufml5q3nphis->x = $Vnwufml5q3nphis->w - $Vnwufml5q3nphis->rMargin - $Vwcmlurixvzgellpadding;
		} else {
			$Vnwufml5q3nphis->x = $Vnwufml5q3nphis->lMargin + $Vwcmlurixvzgellpadding;
		}
		if (is_string($Vvjxcwrp4tjq)) {
			$Vvjxcwrp4tjq = $Vnwufml5q3nphis->lasth;
		}
		$Vnwufml5q3nphis->y += $Vvjxcwrp4tjq;
		$Vnwufml5q3nphis->newline = true;
	}

	
	public function GetX() {
		
		if ($Vnwufml5q3nphis->rtl) {
			return ($Vnwufml5q3nphis->w - $Vnwufml5q3nphis->x);
		} else {
			return $Vnwufml5q3nphis->x;
		}
	}

	
	public function GetAbsX() {
		return $Vnwufml5q3nphis->x;
	}

	
	public function GetY() {
		return $Vnwufml5q3nphis->y;
	}

	
	public function SetX($Vangwoo3ejfg, $V5shjmx03fxyoff=false) {
		$Vangwoo3ejfg = floatval($Vangwoo3ejfg);
		if (!$V5shjmx03fxyoff AND $Vnwufml5q3nphis->rtl) {
			if ($Vangwoo3ejfg >= 0) {
				$Vnwufml5q3nphis->x = $Vnwufml5q3nphis->w - $Vangwoo3ejfg;
			} else {
				$Vnwufml5q3nphis->x = abs($Vangwoo3ejfg);
			}
		} else {
			if ($Vangwoo3ejfg >= 0) {
				$Vnwufml5q3nphis->x = $Vangwoo3ejfg;
			} else {
				$Vnwufml5q3nphis->x = $Vnwufml5q3nphis->w + $Vangwoo3ejfg;
			}
		}
		if ($Vnwufml5q3nphis->x < 0) {
			$Vnwufml5q3nphis->x = 0;
		}
		if ($Vnwufml5q3nphis->x > $Vnwufml5q3nphis->w) {
			$Vnwufml5q3nphis->x = $Vnwufml5q3nphis->w;
		}
	}

	
	public function SetY($Vgxufordoa4t, $V14ltds3prprsetx=true, $V5shjmx03fxyoff=false) {
		$Vgxufordoa4t = floatval($Vgxufordoa4t);
		if ($V14ltds3prprsetx) {
			
			if (!$V5shjmx03fxyoff AND $Vnwufml5q3nphis->rtl) {
				$Vnwufml5q3nphis->x = $Vnwufml5q3nphis->w - $Vnwufml5q3nphis->rMargin;
			} else {
				$Vnwufml5q3nphis->x = $Vnwufml5q3nphis->lMargin;
			}
		}
		if ($Vgxufordoa4t >= 0) {
			$Vnwufml5q3nphis->y = $Vgxufordoa4t;
		} else {
			$Vnwufml5q3nphis->y = $Vnwufml5q3nphis->h + $Vgxufordoa4t;
		}
		if ($Vnwufml5q3nphis->y < 0) {
			$Vnwufml5q3nphis->y = 0;
		}
		if ($Vnwufml5q3nphis->y > $Vnwufml5q3nphis->h) {
			$Vnwufml5q3nphis->y = $Vnwufml5q3nphis->h;
		}
	}

	
	public function SetXY($Vangwoo3ejfg, $Vgxufordoa4t, $V5shjmx03fxyoff=false) {
		$Vnwufml5q3nphis->SetY($Vgxufordoa4t, false, $V5shjmx03fxyoff);
		$Vnwufml5q3nphis->SetX($Vangwoo3ejfg, $V5shjmx03fxyoff);
	}

	
	public function SetAbsX($Vangwoo3ejfg) {
		$Vnwufml5q3nphis->x = floatval($Vangwoo3ejfg);
	}

	
	public function SetAbsY($Vgxufordoa4t) {
		$Vnwufml5q3nphis->y = floatval($Vgxufordoa4t);
	}

	
	public function SetAbsXY($Vangwoo3ejfg, $Vgxufordoa4t) {
		$Vnwufml5q3nphis->SetAbsX($Vangwoo3ejfg);
		$Vnwufml5q3nphis->SetAbsY($Vgxufordoa4t);
	}

	
	public function Output($Vgv45dfhsyuhame='doc.pdf', $Vyyomvjhwdbp='I') {
		
		
		if ($Vnwufml5q3nphis->state < 3) {
			$Vnwufml5q3nphis->Close();
		}
		
		if (is_bool($Vyyomvjhwdbp)) {
			$Vyyomvjhwdbp = $Vyyomvjhwdbp ? 'D' : 'F';
		}
		$Vyyomvjhwdbp = strtoupper($Vyyomvjhwdbp);
		if ($Vyyomvjhwdbp[0] != 'F') {
			$Vgv45dfhsyuhame = preg_replace('/[\s]+/', '_', $Vgv45dfhsyuhame);
			$Vgv45dfhsyuhame = preg_replace('/[^a-zA-Z0-9_\.-]/', '', $Vgv45dfhsyuhame);
		}
		if ($Vnwufml5q3nphis->sign) {
			
			
			$Va5ciwmibw3n = $Vnwufml5q3nphis->getBuffer();
			
			$Va5ciwmibw3n = substr($Va5ciwmibw3n, 0, -1);
			
			$Vsrhsnwkcuy3terange_string_len = strlen(TCPDF_STATIC::$Vsrhsnwkcuy3terange_string);
			
			$Vsrhsnwkcuy3te_range = array();
			$Vsrhsnwkcuy3te_range[0] = 0;
			$Vsrhsnwkcuy3te_range[1] = strpos($Va5ciwmibw3n, TCPDF_STATIC::$Vsrhsnwkcuy3terange_string) + $Vsrhsnwkcuy3terange_string_len + 10;
			$Vsrhsnwkcuy3te_range[2] = $Vsrhsnwkcuy3te_range[1] + $Vnwufml5q3nphis->signature_max_length + 2;
			$Vsrhsnwkcuy3te_range[3] = strlen($Va5ciwmibw3n) - $Vsrhsnwkcuy3te_range[2];
			$Va5ciwmibw3n = substr($Va5ciwmibw3n, 0, $Vsrhsnwkcuy3te_range[1]).substr($Va5ciwmibw3n, $Vsrhsnwkcuy3te_range[2]);
			
			$Vsrhsnwkcuy3terange = sprintf('/ByteRange[0 %u %u %u]', $Vsrhsnwkcuy3te_range[1], $Vsrhsnwkcuy3te_range[2], $Vsrhsnwkcuy3te_range[3]);
			$Vsrhsnwkcuy3terange .= str_repeat(' ', ($Vsrhsnwkcuy3terange_string_len - strlen($Vsrhsnwkcuy3terange)));
			$Va5ciwmibw3n = str_replace(TCPDF_STATIC::$Vsrhsnwkcuy3terange_string, $Vsrhsnwkcuy3terange, $Va5ciwmibw3n);
			
			$Vsrgxwdmbh0b = TCPDF_STATIC::getObjFilename('doc', $Vnwufml5q3nphis->file_id);
			$Vxb0ra0fqzn2 = TCPDF_STATIC::fopenLocal($Vsrgxwdmbh0b, 'wb');
			if (!$Vxb0ra0fqzn2) {
				$Vnwufml5q3nphis->Error('Unable to create temporary file: '.$Vsrgxwdmbh0b);
			}
			$Va5ciwmibw3n_length = strlen($Va5ciwmibw3n);
			fwrite($Vxb0ra0fqzn2, $Va5ciwmibw3n, $Va5ciwmibw3n_length);
			fclose($Vxb0ra0fqzn2);
			
			$Vywfyydr03s2 = TCPDF_STATIC::getObjFilename('sig', $Vnwufml5q3nphis->file_id);
			if (empty($Vnwufml5q3nphis->signature_data['extracerts'])) {
				openssl_pkcs7_sign($Vsrgxwdmbh0b, $Vywfyydr03s2, $Vnwufml5q3nphis->signature_data['signcert'], array($Vnwufml5q3nphis->signature_data['privkey'], $Vnwufml5q3nphis->signature_data['password']), array(), PKCS7_BINARY | PKCS7_DETACHED);
			} else {
				openssl_pkcs7_sign($Vsrgxwdmbh0b, $Vywfyydr03s2, $Vnwufml5q3nphis->signature_data['signcert'], array($Vnwufml5q3nphis->signature_data['privkey'], $Vnwufml5q3nphis->signature_data['password']), array(), PKCS7_BINARY | PKCS7_DETACHED, $Vnwufml5q3nphis->signature_data['extracerts']);
			}
			
			$V54tshykgp5wature = file_get_contents($Vywfyydr03s2);
			
			$V54tshykgp5wature = substr($V54tshykgp5wature, $Va5ciwmibw3n_length);
			$V54tshykgp5wature = substr($V54tshykgp5wature, (strpos($V54tshykgp5wature, "%%EOF\n\n------") + 13));
			$Vptwwo5eiyyp = explode("\n\n", $V54tshykgp5wature);
			$V54tshykgp5wature = $Vptwwo5eiyyp[1];
			
			$V54tshykgp5wature = base64_decode(trim($V54tshykgp5wature));
			
			$V54tshykgp5wature = $Vnwufml5q3nphis->applyTSA($V54tshykgp5wature);
			
			$V54tshykgp5wature = current(unpack('H*', $V54tshykgp5wature));
			$V54tshykgp5wature = str_pad($V54tshykgp5wature, $Vnwufml5q3nphis->signature_max_length, '0');
			
			$Vnwufml5q3nphis->buffer = substr($Va5ciwmibw3n, 0, $Vsrhsnwkcuy3te_range[1]).'<'.$V54tshykgp5wature.'>'.substr($Va5ciwmibw3n, $Vsrhsnwkcuy3te_range[1]);
			$Vnwufml5q3nphis->bufferlen = strlen($Vnwufml5q3nphis->buffer);
		}
		switch($Vyyomvjhwdbp) {
			case 'I': {
				
				if (ob_get_contents()) {
					$Vnwufml5q3nphis->Error('Some data has already been output, can\'t send PDF file');
				}
				if (php_sapi_name() != 'cli') {
					
					header('Content-Type: application/pdf');
					if (headers_sent()) {
						$Vnwufml5q3nphis->Error('Some data has already been output to browser, can\'t send PDF file');
					}
					header('Cache-Control: private, must-revalidate, post-check=0, pre-check=0, max-age=1');
					
					header('Pragma: public');
					header('Expires: Sat, 26 Jul 1997 05:00:00 GMT'); 
					header('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT');
					header('Content-Disposition: inline; filename="'.basename($Vgv45dfhsyuhame).'"');
					TCPDF_STATIC::sendOutputData($Vnwufml5q3nphis->getBuffer(), $Vnwufml5q3nphis->bufferlen);
				} else {
					echo $Vnwufml5q3nphis->getBuffer();
				}
				break;
			}
			case 'D': {
				
				if (ob_get_contents()) {
					$Vnwufml5q3nphis->Error('Some data has already been output, can\'t send PDF file');
				}
				header('Content-Description: File Transfer');
				if (headers_sent()) {
					$Vnwufml5q3nphis->Error('Some data has already been output to browser, can\'t send PDF file');
				}
				header('Cache-Control: private, must-revalidate, post-check=0, pre-check=0, max-age=1');
				
				header('Pragma: public');
				header('Expires: Sat, 26 Jul 1997 05:00:00 GMT'); 
				header('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT');
				
				if (strpos(php_sapi_name(), 'cgi') === false) {
					header('Content-Type: application/force-download');
					header('Content-Type: application/octet-stream', false);
					header('Content-Type: application/download', false);
					header('Content-Type: application/pdf', false);
				} else {
					header('Content-Type: application/pdf');
				}
				
				header('Content-Disposition: attachment; filename="'.basename($Vgv45dfhsyuhame).'"');
				header('Content-Transfer-Encoding: binary');
				TCPDF_STATIC::sendOutputData($Vnwufml5q3nphis->getBuffer(), $Vnwufml5q3nphis->bufferlen);
				break;
			}
			case 'F':
			case 'FI':
			case 'FD': {
				
				$Vxb0ra0fqzn2 = TCPDF_STATIC::fopenLocal($Vgv45dfhsyuhame, 'wb');
				if (!$Vxb0ra0fqzn2) {
					$Vnwufml5q3nphis->Error('Unable to create output file: '.$Vgv45dfhsyuhame);
				}
				fwrite($Vxb0ra0fqzn2, $Vnwufml5q3nphis->getBuffer(), $Vnwufml5q3nphis->bufferlen);
				fclose($Vxb0ra0fqzn2);
				if ($Vyyomvjhwdbp == 'FI') {
					
					header('Content-Type: application/pdf');
					header('Cache-Control: private, must-revalidate, post-check=0, pre-check=0, max-age=1');
					
					header('Pragma: public');
					header('Expires: Sat, 26 Jul 1997 05:00:00 GMT'); 
					header('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT');
					header('Content-Disposition: inline; filename="'.basename($Vgv45dfhsyuhame).'"');
					TCPDF_STATIC::sendOutputData(file_get_contents($Vgv45dfhsyuhame), filesize($Vgv45dfhsyuhame));
				} elseif ($Vyyomvjhwdbp == 'FD') {
					
					if (ob_get_contents()) {
						$Vnwufml5q3nphis->Error('Some data has already been output, can\'t send PDF file');
					}
					header('Content-Description: File Transfer');
					if (headers_sent()) {
						$Vnwufml5q3nphis->Error('Some data has already been output to browser, can\'t send PDF file');
					}
					header('Cache-Control: private, must-revalidate, post-check=0, pre-check=0, max-age=1');
					header('Pragma: public');
					header('Expires: Sat, 26 Jul 1997 05:00:00 GMT'); 
					header('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT');
					
					if (strpos(php_sapi_name(), 'cgi') === false) {
						header('Content-Type: application/force-download');
						header('Content-Type: application/octet-stream', false);
						header('Content-Type: application/download', false);
						header('Content-Type: application/pdf', false);
					} else {
						header('Content-Type: application/pdf');
					}
					
					header('Content-Disposition: attachment; filename="'.basename($Vgv45dfhsyuhame).'"');
					header('Content-Transfer-Encoding: binary');
					TCPDF_STATIC::sendOutputData(file_get_contents($Vgv45dfhsyuhame), filesize($Vgv45dfhsyuhame));
				}
				break;
			}
			case 'E': {
				
				$V14ltds3prprtval = 'Content-Type: application/pdf;'."\r\n";
				$V14ltds3prprtval .= ' name="'.$Vgv45dfhsyuhame.'"'."\r\n";
				$V14ltds3prprtval .= 'Content-Transfer-Encoding: base64'."\r\n";
				$V14ltds3prprtval .= 'Content-Disposition: attachment;'."\r\n";
				$V14ltds3prprtval .= ' filename="'.$Vgv45dfhsyuhame.'"'."\r\n\r\n";
				$V14ltds3prprtval .= chunk_split(base64_encode($Vnwufml5q3nphis->getBuffer()), 76, "\r\n");
				return $V14ltds3prprtval;
			}
			case 'S': {
				
				return $Vnwufml5q3nphis->getBuffer();
			}
			default: {
				$Vnwufml5q3nphis->Error('Incorrect output destination: '.$Vyyomvjhwdbp);
			}
		}
		return '';
	}

	
	public function _destroy($Vyyomvjhwdbproyall=false, $Vldgdl5jizz3=false) {
		if ($Vyyomvjhwdbproyall AND !$Vldgdl5jizz3) {
			
			$V3p0tae11ldwfiles = glob(K_PATH_CACHE.'__tcpdf_'.$Vnwufml5q3nphis->file_id.'_*');
			if (!empty($V3p0tae11ldwfiles)) {
				array_map('unlink', $V3p0tae11ldwfiles);
			}
		}
		$Vdvcg0w2wib0 = array(
			'file_id',
			'internal_encoding',
			'state',
			'bufferlen',
			'buffer',
			'cached_files',
			'sign',
			'signature_data',
			'signature_max_length',
			'byterange_string',
			'tsa_timestamp',
			'tsa_data'
		);
		foreach (array_keys(get_object_vars($Vnwufml5q3nphis)) as $Vxt4wx3pvtez) {
			if ($Vyyomvjhwdbproyall OR !in_array($Vxt4wx3pvtez, $Vdvcg0w2wib0)) {
				if ((!$Vldgdl5jizz3 OR ($Vxt4wx3pvtez != 'objcopy')) AND ($Vxt4wx3pvtez != 'file_id') AND isset($Vnwufml5q3nphis->$Vxt4wx3pvtez)) {
					unset($Vnwufml5q3nphis->$Vxt4wx3pvtez);
				}
			}
		}
	}

	
	protected function _dochecks() {
		
		if (1.1 == 1) {
			$Vnwufml5q3nphis->Error('Don\'t alter the locale before including class file');
		}
		
		if (sprintf('%.1F', 1.0) != '1.0') {
			setlocale(LC_NUMERIC, 'C');
		}
	}

	
	protected function getInternalPageNumberAliases($Vudz4oh4qiku= '') {
		$Vudz4oh4qikulias = array();
		
		$Vudz4oh4qikulias = array('u' => array(), 'a' => array());
		$Vppw1slbj4ov = '{'.$Vudz4oh4qiku.'}';
		$Vudz4oh4qikulias['u'][] = TCPDF_STATIC::_escape($Vppw1slbj4ov);
		if ($Vnwufml5q3nphis->isunicode) {
			$Vudz4oh4qikulias['u'][] = TCPDF_STATIC::_escape(TCPDF_FONTS::UTF8ToLatin1($Vppw1slbj4ov, $Vnwufml5q3nphis->isunicode, $Vnwufml5q3nphis->CurrentFont));
			$Vudz4oh4qikulias['u'][] = TCPDF_STATIC::_escape(TCPDF_FONTS::utf8StrRev($Vppw1slbj4ov, false, $Vnwufml5q3nphis->tmprtl, $Vnwufml5q3nphis->isunicode, $Vnwufml5q3nphis->CurrentFont));
			$Vudz4oh4qikulias['a'][] = TCPDF_STATIC::_escape(TCPDF_FONTS::UTF8ToLatin1($Vudz4oh4qiku, $Vnwufml5q3nphis->isunicode, $Vnwufml5q3nphis->CurrentFont));
			$Vudz4oh4qikulias['a'][] = TCPDF_STATIC::_escape(TCPDF_FONTS::utf8StrRev($Vudz4oh4qiku, false, $Vnwufml5q3nphis->tmprtl, $Vnwufml5q3nphis->isunicode, $Vnwufml5q3nphis->CurrentFont));
		}
		$Vudz4oh4qikulias['a'][] = TCPDF_STATIC::_escape($Vudz4oh4qiku);
		return $Vudz4oh4qikulias;
	}

	
	protected function getAllInternalPageNumberAliases() {
		$Vsknazoaxwm3 = array(TCPDF_STATIC::$Vudz4oh4qikulias_tot_pages, TCPDF_STATIC::$Vudz4oh4qikulias_num_page, TCPDF_STATIC::$Vudz4oh4qikulias_group_tot_pages, TCPDF_STATIC::$Vudz4oh4qikulias_group_num_page, TCPDF_STATIC::$Vudz4oh4qikulias_right_shift);
		$Vc2h3t30a5tg = array();
		foreach($Vsknazoaxwm3 as $Vl0q4noiexi4 => $Vudz4oh4qiku) {
			$Vc2h3t30a5tg[$Vl0q4noiexi4] = $Vnwufml5q3nphis->getInternalPageNumberAliases($Vudz4oh4qiku);
		}
		return $Vc2h3t30a5tg;
	}

	
	protected function replaceRightShiftPageNumAliases($Vwfolue42pzj, $Vudz4oh4qikuliases, $Vsjpa44qmsau) {
		foreach ($Vudz4oh4qikuliases as $Vvmwm1jsklgc => $Vudz4oh4qikulias) {
			foreach ($Vudz4oh4qikulias as $Vudz4oh4qiku) {
				
				$Vvt20qqut4butartnum = (strpos($Vudz4oh4qiku, ':') + 1);
				$Vudz4oh4qiku = substr($Vudz4oh4qiku, 0, $Vvt20qqut4butartnum);
				if (($Vsjw1s1w2nqe = strpos($Vwfolue42pzj, $Vudz4oh4qiku)) !== false) {
					
					$Vs0htpwzsrccndnum = strpos($Vwfolue42pzj, '}', $Vsjw1s1w2nqe);
					
					$Vudz4oh4qikua = substr($Vwfolue42pzj, $Vsjw1s1w2nqe, ($Vs0htpwzsrccndnum - $Vsjw1s1w2nqe + 1));
					
					$V5ihv3uo3w5y = substr($Vwfolue42pzj, ($Vsjw1s1w2nqe + $Vvt20qqut4butartnum), ($Vs0htpwzsrccndnum - $Vsjw1s1w2nqe - $Vvt20qqut4butartnum));
					$V5ihv3uo3w5y = preg_replace('/[^0-9\.]/', '', $V5ihv3uo3w5y);
					$V5ihv3uo3w5y = floatval($V5ihv3uo3w5y);
					if ($Vvmwm1jsklgc == 'u') {
						$Vwcmlurixvzghrdiff = floor(($Vsjpa44qmsau + 12) * $V5ihv3uo3w5y);
						$Vvt20qqut4buhift = str_repeat(' ', $Vwcmlurixvzghrdiff);
						$Vvt20qqut4buhift = TCPDF_FONTS::UTF8ToUTF16BE($Vvt20qqut4buhift, false, $Vnwufml5q3nphis->isunicode, $Vnwufml5q3nphis->CurrentFont);
					} else {
						$Vwcmlurixvzghrdiff = floor(($Vsjpa44qmsau + 11) * $V5ihv3uo3w5y);
						$Vvt20qqut4buhift = str_repeat(' ', $Vwcmlurixvzghrdiff);
					}
					$Vwfolue42pzj = str_replace($Vudz4oh4qikua, $Vvt20qqut4buhift, $Vwfolue42pzj);
				}
			}
		}
		return $Vwfolue42pzj;
	}

	
	protected function setPageBoxTypes($V03krbaje5yw) {
		$Vnwufml5q3nphis->page_boxes = array();
		foreach ($V03krbaje5yw as $Vgsqw3laf3ij) {
			if (in_array($Vgsqw3laf3ij, TCPDF_STATIC::$Vwfolue42pzjboxes)) {
				$Vnwufml5q3nphis->page_boxes[] = $Vgsqw3laf3ij;
			}
		}
	}

	
	protected function _putpages() {
		$Vq5mneg2nyu1 = ($Vnwufml5q3nphis->compress) ? '/Filter /FlateDecode ' : '';
		
		$Vc2h3t30a5tg = $Vnwufml5q3nphis->getAllInternalPageNumberAliases();
		$Vgv45dfhsyuhum_pages = $Vnwufml5q3nphis->numpages;
		$Vhzb2irowbob = TCPDF_STATIC::formatPageNumber(($Vnwufml5q3nphis->starting_page_number + $Vgv45dfhsyuhum_pages - 1));
		$Vl32bjvocpep = TCPDF_FONTS::UTF8ToUTF16BE($Vhzb2irowbob, false, $Vnwufml5q3nphis->isunicode, $Vnwufml5q3nphis->CurrentFont);
		$Vcrxput4qovp = $Vnwufml5q3nphis->GetNumChars($Vhzb2irowbob);
		$Vwfolue42pzjgroupnum = 0;
		$Vc0fxwiylvwu = 0;
		$Vhyhh4flui1v = 1;
		$Vn0dewju3k3i = 1;
		$Vat023johehn = 1;
		for ($Vgv45dfhsyuh = 1; $Vgv45dfhsyuh <= $Vgv45dfhsyuhum_pages; ++$Vgv45dfhsyuh) {
			
			$V0prlonxsmqp = $Vnwufml5q3nphis->getPageBuffer($Vgv45dfhsyuh);
			$Vwfolue42pzjlen = strlen($V0prlonxsmqp);
			
			$V4azafuqvanc = TCPDF_STATIC::formatPageNumber(($Vnwufml5q3nphis->starting_page_number + $Vgv45dfhsyuh - 1));
			$V3btknideuim = TCPDF_FONTS::UTF8ToUTF16BE($V4azafuqvanc, false, $Vnwufml5q3nphis->isunicode, $Vnwufml5q3nphis->CurrentFont);
			$Viqmtk4yztjr = $Vnwufml5q3nphis->GetNumChars($V4azafuqvanc);
			$Vwpqanvkigaa = 0; 
			$Vj1oxhvxvgff = 0; 
			if (!empty($Vnwufml5q3nphis->pagegroups)) {
				if (isset($Vnwufml5q3nphis->newpagegroup[$Vgv45dfhsyuh])) {
					$Vwfolue42pzjgroupnum = 0;
					++$Vc0fxwiylvwu;
					$Vn0dewju3k3i = TCPDF_STATIC::formatPageNumber($Vnwufml5q3nphis->pagegroups[$Vc0fxwiylvwu]);
					$Vhyhh4flui1v = TCPDF_FONTS::UTF8ToUTF16BE($Vn0dewju3k3i, false, $Vnwufml5q3nphis->isunicode, $Vnwufml5q3nphis->CurrentFont);
					$Vat023johehn = $Vnwufml5q3nphis->GetNumChars($Vn0dewju3k3i);
				}
				++$Vwfolue42pzjgroupnum;
				$Vrxqjfmdldaz = TCPDF_STATIC::formatPageNumber($Vwfolue42pzjgroupnum);
				$Vsmcpd3h2nxj = TCPDF_FONTS::UTF8ToUTF16BE($Vrxqjfmdldaz, false, $Vnwufml5q3nphis->isunicode, $Vnwufml5q3nphis->CurrentFont);
				$Vqlasareyuyi = $Vnwufml5q3nphis->GetNumChars($Vrxqjfmdldaz);
				
				$V14ltds3prprplace = array();
				$V14ltds3prprplace[] = array($Vhyhh4flui1v, $Vat023johehn, 9, $Vc2h3t30a5tg[2]['u']);
				$V14ltds3prprplace[] = array($Vn0dewju3k3i, $Vat023johehn, 7, $Vc2h3t30a5tg[2]['a']);
				$V14ltds3prprplace[] = array($Vsmcpd3h2nxj, $Vqlasareyuyi, 9, $Vc2h3t30a5tg[3]['u']);
				$V14ltds3prprplace[] = array($Vrxqjfmdldaz, $Vqlasareyuyi, 7, $Vc2h3t30a5tg[3]['a']);
				list($V0prlonxsmqp, $Vj1oxhvxvgff) = TCPDF_STATIC::replacePageNumAliases($V0prlonxsmqp, $V14ltds3prprplace, $Vj1oxhvxvgff);
			}
			
			$V14ltds3prprplace = array();
			$V14ltds3prprplace[] = array($Vl32bjvocpep, $Vcrxput4qovp, 9, $Vc2h3t30a5tg[0]['u']);
			$V14ltds3prprplace[] = array($Vhzb2irowbob, $Vcrxput4qovp, 7, $Vc2h3t30a5tg[0]['a']);
			$V14ltds3prprplace[] = array($V3btknideuim, $Viqmtk4yztjr, 9, $Vc2h3t30a5tg[1]['u']);
			$V14ltds3prprplace[] = array($V4azafuqvanc, $Viqmtk4yztjr, 7, $Vc2h3t30a5tg[1]['a']);
			list($V0prlonxsmqp, $Vwpqanvkigaa) = TCPDF_STATIC::replacePageNumAliases($V0prlonxsmqp, $V14ltds3prprplace, $Vwpqanvkigaa);
			
			$V0prlonxsmqp = $Vnwufml5q3nphis->replaceRightShiftPageNumAliases($V0prlonxsmqp, $Vc2h3t30a5tg[4], max($Vwpqanvkigaa, $Vj1oxhvxvgff));
			
			$V0prlonxsmqp = str_replace($Vnwufml5q3nphis->epsmarker, '', $V0prlonxsmqp);
			
			$Vnwufml5q3nphis->page_obj_id[$Vgv45dfhsyuh] = $Vnwufml5q3nphis->_newobj();
			$V4t5ynycapey = '<<';
			$V4t5ynycapey .= ' /Type /Page';
			$V4t5ynycapey .= ' /Parent 1 0 R';
			if (empty($Vnwufml5q3nphis->signature_data['approval']) OR ($Vnwufml5q3nphis->signature_data['approval'] != 'A')) {
				$V4t5ynycapey .= ' /LastModified '.$Vnwufml5q3nphis->_datestring(0, $Vnwufml5q3nphis->doc_modification_timestamp);
			}
			$V4t5ynycapey .= ' /Resources 2 0 R';
			foreach ($Vnwufml5q3nphis->page_boxes as $Vgsqw3laf3ij) {
				$V4t5ynycapey .= ' /'.$Vgsqw3laf3ij;
				$V4t5ynycapey .= sprintf(' [%F %F %F %F]', $Vnwufml5q3nphis->pagedim[$Vgv45dfhsyuh][$Vgsqw3laf3ij]['llx'], $Vnwufml5q3nphis->pagedim[$Vgv45dfhsyuh][$Vgsqw3laf3ij]['lly'], $Vnwufml5q3nphis->pagedim[$Vgv45dfhsyuh][$Vgsqw3laf3ij]['urx'], $Vnwufml5q3nphis->pagedim[$Vgv45dfhsyuh][$Vgsqw3laf3ij]['ury']);
			}
			if (isset($Vnwufml5q3nphis->pagedim[$Vgv45dfhsyuh]['BoxColorInfo']) AND !empty($Vnwufml5q3nphis->pagedim[$Vgv45dfhsyuh]['BoxColorInfo'])) {
				$V4t5ynycapey .= ' /BoxColorInfo <<';
				foreach ($Vnwufml5q3nphis->page_boxes as $Vgsqw3laf3ij) {
					if (isset($Vnwufml5q3nphis->pagedim[$Vgv45dfhsyuh]['BoxColorInfo'][$Vgsqw3laf3ij])) {
						$V4t5ynycapey .= ' /'.$Vgsqw3laf3ij.' <<';
						if (isset($Vnwufml5q3nphis->pagedim[$Vgv45dfhsyuh]['BoxColorInfo'][$Vgsqw3laf3ij]['C'])) {
							$Vwcmlurixvzgolor = $Vnwufml5q3nphis->pagedim[$Vgv45dfhsyuh]['BoxColorInfo'][$Vgsqw3laf3ij]['C'];
							$V4t5ynycapey .= ' /C [';
							$V4t5ynycapey .= sprintf(' %F %F %F', ($Vwcmlurixvzgolor[0] / 255), ($Vwcmlurixvzgolor[1] / 255), ($Vwcmlurixvzgolor[2] / 255));
							$V4t5ynycapey .= ' ]';
						}
						if (isset($Vnwufml5q3nphis->pagedim[$Vgv45dfhsyuh]['BoxColorInfo'][$Vgsqw3laf3ij]['W'])) {
							$V4t5ynycapey .= ' /W '.($Vnwufml5q3nphis->pagedim[$Vgv45dfhsyuh]['BoxColorInfo'][$Vgsqw3laf3ij]['W'] * $Vnwufml5q3nphis->k);
						}
						if (isset($Vnwufml5q3nphis->pagedim[$Vgv45dfhsyuh]['BoxColorInfo'][$Vgsqw3laf3ij]['S'])) {
							$V4t5ynycapey .= ' /S /'.$Vnwufml5q3nphis->pagedim[$Vgv45dfhsyuh]['BoxColorInfo'][$Vgsqw3laf3ij]['S'];
						}
						if (isset($Vnwufml5q3nphis->pagedim[$Vgv45dfhsyuh]['BoxColorInfo'][$Vgsqw3laf3ij]['D'])) {
							$Vc0aiseldrl3ashes = $Vnwufml5q3nphis->pagedim[$Vgv45dfhsyuh]['BoxColorInfo'][$Vgsqw3laf3ij]['D'];
							$V4t5ynycapey .= ' /D [';
							foreach ($Vc0aiseldrl3ashes as $Vc0aiseldrl3ash) {
								$V4t5ynycapey .= sprintf(' %F', ($Vc0aiseldrl3ash * $Vnwufml5q3nphis->k));
							}
							$V4t5ynycapey .= ' ]';
						}
						$V4t5ynycapey .= ' >>';
					}
				}
				$V4t5ynycapey .= ' >>';
			}
			$V4t5ynycapey .= ' /Contents '.($Vnwufml5q3nphis->n + 1).' 0 R';
			$V4t5ynycapey .= ' /Rotate '.$Vnwufml5q3nphis->pagedim[$Vgv45dfhsyuh]['Rotate'];
			if (!$Vnwufml5q3nphis->pdfa_mode) {
				$V4t5ynycapey .= ' /Group << /Type /Group /S /Transparency /CS /DeviceRGB >>';
			}
			if (isset($Vnwufml5q3nphis->pagedim[$Vgv45dfhsyuh]['trans']) AND !empty($Vnwufml5q3nphis->pagedim[$Vgv45dfhsyuh]['trans'])) {
				
				if (isset($Vnwufml5q3nphis->pagedim[$Vgv45dfhsyuh]['trans']['Dur'])) {
					$V4t5ynycapey .= ' /Dur '.$Vnwufml5q3nphis->pagedim[$Vgv45dfhsyuh]['trans']['Dur'];
				}
				$V4t5ynycapey .= ' /Trans <<';
				$V4t5ynycapey .= ' /Type /Trans';
				if (isset($Vnwufml5q3nphis->pagedim[$Vgv45dfhsyuh]['trans']['S'])) {
					$V4t5ynycapey .= ' /S /'.$Vnwufml5q3nphis->pagedim[$Vgv45dfhsyuh]['trans']['S'];
				}
				if (isset($Vnwufml5q3nphis->pagedim[$Vgv45dfhsyuh]['trans']['D'])) {
					$V4t5ynycapey .= ' /D '.$Vnwufml5q3nphis->pagedim[$Vgv45dfhsyuh]['trans']['D'];
				}
				if (isset($Vnwufml5q3nphis->pagedim[$Vgv45dfhsyuh]['trans']['Dm'])) {
					$V4t5ynycapey .= ' /Dm /'.$Vnwufml5q3nphis->pagedim[$Vgv45dfhsyuh]['trans']['Dm'];
				}
				if (isset($Vnwufml5q3nphis->pagedim[$Vgv45dfhsyuh]['trans']['M'])) {
					$V4t5ynycapey .= ' /M /'.$Vnwufml5q3nphis->pagedim[$Vgv45dfhsyuh]['trans']['M'];
				}
				if (isset($Vnwufml5q3nphis->pagedim[$Vgv45dfhsyuh]['trans']['Di'])) {
					$V4t5ynycapey .= ' /Di '.$Vnwufml5q3nphis->pagedim[$Vgv45dfhsyuh]['trans']['Di'];
				}
				if (isset($Vnwufml5q3nphis->pagedim[$Vgv45dfhsyuh]['trans']['SS'])) {
					$V4t5ynycapey .= ' /SS '.$Vnwufml5q3nphis->pagedim[$Vgv45dfhsyuh]['trans']['SS'];
				}
				if (isset($Vnwufml5q3nphis->pagedim[$Vgv45dfhsyuh]['trans']['B'])) {
					$V4t5ynycapey .= ' /B '.$Vnwufml5q3nphis->pagedim[$Vgv45dfhsyuh]['trans']['B'];
				}
				$V4t5ynycapey .= ' >>';
			}
			$V4t5ynycapey .= $Vnwufml5q3nphis->_getannotsrefs($Vgv45dfhsyuh);
			$V4t5ynycapey .= ' /PZ '.$Vnwufml5q3nphis->pagedim[$Vgv45dfhsyuh]['PZ'];
			$V4t5ynycapey .= ' >>';
			$V4t5ynycapey .= "\n".'endobj';
			$Vnwufml5q3nphis->_out($V4t5ynycapey);
			
			$V1yuhsvbtlvr = ($Vnwufml5q3nphis->compress) ? gzcompress($V0prlonxsmqp) : $V0prlonxsmqp;
			$Vnwufml5q3nphis->_newobj();
			$V1yuhsvbtlvr = $Vnwufml5q3nphis->_getrawstream($V1yuhsvbtlvr);
			$Vnwufml5q3nphis->_out('<<'.$Vq5mneg2nyu1.'/Length '.strlen($V1yuhsvbtlvr).'>> stream'."\n".$V1yuhsvbtlvr."\n".'endstream'."\n".'endobj');
		}
		
		$V4t5ynycapey = $Vnwufml5q3nphis->_getobj(1)."\n";
		$V4t5ynycapey .= '<< /Type /Pages /Kids [';
		foreach($Vnwufml5q3nphis->page_obj_id as $Vwfolue42pzj_obj) {
			$V4t5ynycapey .= ' '.$Vwfolue42pzj_obj.' 0 R';
		}
		$V4t5ynycapey .= ' ] /Count '.$Vgv45dfhsyuhum_pages.' >>';
		$V4t5ynycapey .= "\n".'endobj';
		$Vnwufml5q3nphis->_out($V4t5ynycapey);
	}

	
	protected function _getannotsrefs($Vgv45dfhsyuh) {
		if (!(isset($Vnwufml5q3nphis->PageAnnots[$Vgv45dfhsyuh]) OR ($Vnwufml5q3nphis->sign AND isset($Vnwufml5q3nphis->signature_data['cert_type'])))) {
			return '';
		}
		$V4t5ynycapey = ' /Annots [';
		if (isset($Vnwufml5q3nphis->PageAnnots[$Vgv45dfhsyuh])) {
			foreach ($Vnwufml5q3nphis->PageAnnots[$Vgv45dfhsyuh] as $Vl0q4noiexi4ey => $Vxt4wx3pvtez) {
				if (!in_array($Vxt4wx3pvtez['n'], $Vnwufml5q3nphis->radio_groups)) {
					$V4t5ynycapey .= ' '.$Vxt4wx3pvtez['n'].' 0 R';
				}
			}
			
			if (isset($Vnwufml5q3nphis->radiobutton_groups[$Vgv45dfhsyuh])) {
				foreach ($Vnwufml5q3nphis->radiobutton_groups[$Vgv45dfhsyuh] as $Vl0q4noiexi4ey => $Vc0aiseldrl3ata) {
					if (isset($Vc0aiseldrl3ata['n'])) {
						$V4t5ynycapey .= ' '.$Vc0aiseldrl3ata['n'].' 0 R';
					}
				}
			}
		}
		if ($Vnwufml5q3nphis->sign AND ($Vgv45dfhsyuh == $Vnwufml5q3nphis->signature_appearance['page']) AND isset($Vnwufml5q3nphis->signature_data['cert_type'])) {
			
			$V4t5ynycapey .= ' '.$Vnwufml5q3nphis->sig_obj_id.' 0 R';
		}
		if (!empty($Vnwufml5q3nphis->empty_signature_appearance)) {
			foreach ($Vnwufml5q3nphis->empty_signature_appearance as $Vs0htpwzsrccsa) {
				if ($Vs0htpwzsrccsa['page'] == $Vgv45dfhsyuh) {
					
					$V4t5ynycapey .= ' '.$Vs0htpwzsrccsa['objid'].' 0 R';
				}
			}
		}
		$V4t5ynycapey .= ' ]';
		return $V4t5ynycapey;
	}

	
	protected function _putannotsobjs() {
		
		for ($Vgv45dfhsyuh=1; $Vgv45dfhsyuh <= $Vnwufml5q3nphis->numpages; ++$Vgv45dfhsyuh) {
			if (isset($Vnwufml5q3nphis->PageAnnots[$Vgv45dfhsyuh])) {
				
				foreach ($Vnwufml5q3nphis->PageAnnots[$Vgv45dfhsyuh] as $Vl0q4noiexi4ey => $V1yuhsvbtlvrl) {
					$Vudz4oh4qikunnot_obj_id = $Vnwufml5q3nphis->PageAnnots[$Vgv45dfhsyuh][$Vl0q4noiexi4ey]['n'];
					
					if (isset($Vnwufml5q3nphis->radiobutton_groups[$Vgv45dfhsyuh][$V1yuhsvbtlvrl['txt']]) AND is_array($Vnwufml5q3nphis->radiobutton_groups[$Vgv45dfhsyuh][$V1yuhsvbtlvrl['txt']])) {
						$Vpspd1rutaa1 = $Vnwufml5q3nphis->radiobutton_groups[$Vgv45dfhsyuh][$V1yuhsvbtlvrl['txt']]['n'];
						$Vudz4oh4qikunnots = '<<';
						$Vudz4oh4qikunnots .= ' /Type /Annot';
						$Vudz4oh4qikunnots .= ' /Subtype /Widget';
						$Vudz4oh4qikunnots .= ' /Rect [0 0 0 0]';
						if ($Vnwufml5q3nphis->radiobutton_groups[$Vgv45dfhsyuh][$V1yuhsvbtlvrl['txt']]['#readonly#']) {
							
							$Vudz4oh4qikunnots .= ' /F 68';
							$Vudz4oh4qikunnots .= ' /Ff 49153';
						} else {
							$Vudz4oh4qikunnots .= ' /F 4'; 
							$Vudz4oh4qikunnots .= ' /Ff 49152';
						}
						$Vudz4oh4qikunnots .= ' /T '.$Vnwufml5q3nphis->_datastring($V1yuhsvbtlvrl['txt'], $Vpspd1rutaa1);
						if (isset($V1yuhsvbtlvrl['opt']['tu']) AND is_string($V1yuhsvbtlvrl['opt']['tu'])) {
							$Vudz4oh4qikunnots .= ' /TU '.$Vnwufml5q3nphis->_datastring($V1yuhsvbtlvrl['opt']['tu'], $Vpspd1rutaa1);
						}
						$Vudz4oh4qikunnots .= ' /FT /Btn';
						$Vudz4oh4qikunnots .= ' /Kids [';
						$Vc0aiseldrl3efval = '';
						foreach ($Vnwufml5q3nphis->radiobutton_groups[$Vgv45dfhsyuh][$V1yuhsvbtlvrl['txt']] as $Vl0q4noiexi4ey => $Vc0aiseldrl3ata) {
							if (isset($Vc0aiseldrl3ata['kid'])) {
								$Vudz4oh4qikunnots .= ' '.$Vc0aiseldrl3ata['kid'].' 0 R';
								if ($Vc0aiseldrl3ata['def'] !== 'Off') {
									$Vc0aiseldrl3efval = $Vc0aiseldrl3ata['def'];
								}
							}
						}
						$Vudz4oh4qikunnots .= ' ]';
						if (!empty($Vc0aiseldrl3efval)) {
							$Vudz4oh4qikunnots .= ' /V /'.$Vc0aiseldrl3efval;
						}
						$Vudz4oh4qikunnots .= ' >>';
						$Vnwufml5q3nphis->_out($Vnwufml5q3nphis->_getobj($Vpspd1rutaa1)."\n".$Vudz4oh4qikunnots."\n".'endobj');
						$Vnwufml5q3nphis->form_obj_id[] = $Vpspd1rutaa1;
						
						$Vnwufml5q3nphis->radiobutton_groups[$Vgv45dfhsyuh][$V1yuhsvbtlvrl['txt']] = $Vpspd1rutaa1;
					}
					$Vxb0ra0fqzn2ormfield = false;
					$V1yuhsvbtlvrl['opt'] = array_change_key_case($V1yuhsvbtlvrl['opt'], CASE_LOWER);
					$Vudz4oh4qiku = $V1yuhsvbtlvrl['x'] * $Vnwufml5q3nphis->k;
					$Vpq3acakq35c = $Vnwufml5q3nphis->pagedim[$Vgv45dfhsyuh]['h'] - (($V1yuhsvbtlvrl['y'] + $V1yuhsvbtlvrl['h']) * $Vnwufml5q3nphis->k);
					$Vwcmlurixvzg = $V1yuhsvbtlvrl['w'] * $Vnwufml5q3nphis->k;
					$Vc0aiseldrl3 = $V1yuhsvbtlvrl['h'] * $Vnwufml5q3nphis->k;
					$V14ltds3prprct = sprintf('%F %F %F %F', $Vudz4oh4qiku, $Vpq3acakq35c, $Vudz4oh4qiku+$Vwcmlurixvzg, $Vpq3acakq35c+$Vc0aiseldrl3);
					
					$Vudz4oh4qikunnots = '<</Type /Annot';
					$Vudz4oh4qikunnots .= ' /Subtype /'.$V1yuhsvbtlvrl['opt']['subtype'];
					$Vudz4oh4qikunnots .= ' /Rect ['.$V14ltds3prprct.']';
					$Vxb0ra0fqzn2t = array('Btn', 'Tx', 'Ch', 'Sig');
					if (isset($V1yuhsvbtlvrl['opt']['ft']) AND in_array($V1yuhsvbtlvrl['opt']['ft'], $Vxb0ra0fqzn2t)) {
						$Vudz4oh4qikunnots .= ' /FT /'.$V1yuhsvbtlvrl['opt']['ft'];
						$Vxb0ra0fqzn2ormfield = true;
					}
					$Vudz4oh4qikunnots .= ' /Contents '.$Vnwufml5q3nphis->_textstring($V1yuhsvbtlvrl['txt'], $Vudz4oh4qikunnot_obj_id);
					$Vudz4oh4qikunnots .= ' /P '.$Vnwufml5q3nphis->page_obj_id[$Vgv45dfhsyuh].' 0 R';
					$Vudz4oh4qikunnots .= ' /NM '.$Vnwufml5q3nphis->_datastring(sprintf('%04u-%04u', $Vgv45dfhsyuh, $Vl0q4noiexi4ey), $Vudz4oh4qikunnot_obj_id);
					$Vudz4oh4qikunnots .= ' /M '.$Vnwufml5q3nphis->_datestring($Vudz4oh4qikunnot_obj_id, $Vnwufml5q3nphis->doc_modification_timestamp);
					if (isset($V1yuhsvbtlvrl['opt']['f'])) {
						$Vxb0ra0fqzn2val = 0;
						if (is_array($V1yuhsvbtlvrl['opt']['f'])) {
							foreach ($V1yuhsvbtlvrl['opt']['f'] as $Vxb0ra0fqzn2) {
								switch (strtolower($Vxb0ra0fqzn2)) {
									case 'invisible': {
										$Vxb0ra0fqzn2val += 1 << 0;
										break;
									}
									case 'hidden': {
										$Vxb0ra0fqzn2val += 1 << 1;
										break;
									}
									case 'print': {
										$Vxb0ra0fqzn2val += 1 << 2;
										break;
									}
									case 'nozoom': {
										$Vxb0ra0fqzn2val += 1 << 3;
										break;
									}
									case 'norotate': {
										$Vxb0ra0fqzn2val += 1 << 4;
										break;
									}
									case 'noview': {
										$Vxb0ra0fqzn2val += 1 << 5;
										break;
									}
									case 'readonly': {
										$Vxb0ra0fqzn2val += 1 << 6;
										break;
									}
									case 'locked': {
										$Vxb0ra0fqzn2val += 1 << 8;
										break;
									}
									case 'togglenoview': {
										$Vxb0ra0fqzn2val += 1 << 9;
										break;
									}
									case 'lockedcontents': {
										$Vxb0ra0fqzn2val += 1 << 10;
										break;
									}
									default: {
										break;
									}
								}
							}
						} else {
							$Vxb0ra0fqzn2val = intval($V1yuhsvbtlvrl['opt']['f']);
						}
					} else {
						$Vxb0ra0fqzn2val = 4;
					}
					if ($Vnwufml5q3nphis->pdfa_mode) {
						
						$Vxb0ra0fqzn2val |= 4;
					}
					$Vudz4oh4qikunnots .= ' /F '.intval($Vxb0ra0fqzn2val);
					if (isset($V1yuhsvbtlvrl['opt']['as']) AND is_string($V1yuhsvbtlvrl['opt']['as'])) {
						$Vudz4oh4qikunnots .= ' /AS /'.$V1yuhsvbtlvrl['opt']['as'];
					}
					if (isset($V1yuhsvbtlvrl['opt']['ap'])) {
						
						$Vudz4oh4qikunnots .= ' /AP <<';
						if (is_array($V1yuhsvbtlvrl['opt']['ap'])) {
							foreach ($V1yuhsvbtlvrl['opt']['ap'] as $Vudz4oh4qikupmode => $Vudz4oh4qikupdef) {
								
								$Vudz4oh4qikunnots .= ' /'.strtoupper($Vudz4oh4qikupmode);
								if (is_array($Vudz4oh4qikupdef)) {
									$Vudz4oh4qikunnots .= ' <<';
									foreach ($Vudz4oh4qikupdef as $Vudz4oh4qikupstate => $Vvt20qqut4butream) {
										
										$Vudz4oh4qikupsobjid = $Vnwufml5q3nphis->_putAPXObject($Vwcmlurixvzg, $Vc0aiseldrl3, $Vvt20qqut4butream);
										$Vudz4oh4qikunnots .= ' /'.$Vudz4oh4qikupstate.' '.$Vudz4oh4qikupsobjid.' 0 R';
									}
									$Vudz4oh4qikunnots .= ' >>';
								} else {
									
									$Vudz4oh4qikupsobjid = $Vnwufml5q3nphis->_putAPXObject($Vwcmlurixvzg, $Vc0aiseldrl3, $Vudz4oh4qikupdef);
									$Vudz4oh4qikunnots .= ' '.$Vudz4oh4qikupsobjid.' 0 R';
								}
							}
						} else {
							$Vudz4oh4qikunnots .= $V1yuhsvbtlvrl['opt']['ap'];
						}
						$Vudz4oh4qikunnots .= ' >>';
					}
					if (isset($V1yuhsvbtlvrl['opt']['bs']) AND (is_array($V1yuhsvbtlvrl['opt']['bs']))) {
						$Vudz4oh4qikunnots .= ' /BS <<';
						$Vudz4oh4qikunnots .= ' /Type /Border';
						if (isset($V1yuhsvbtlvrl['opt']['bs']['w'])) {
							$Vudz4oh4qikunnots .= ' /W '.intval($V1yuhsvbtlvrl['opt']['bs']['w']);
						}
						$Vpq3acakq35cstyles = array('S', 'D', 'B', 'I', 'U');
						if (isset($V1yuhsvbtlvrl['opt']['bs']['s']) AND in_array($V1yuhsvbtlvrl['opt']['bs']['s'], $Vpq3acakq35cstyles)) {
							$Vudz4oh4qikunnots .= ' /S /'.$V1yuhsvbtlvrl['opt']['bs']['s'];
						}
						if (isset($V1yuhsvbtlvrl['opt']['bs']['d']) AND (is_array($V1yuhsvbtlvrl['opt']['bs']['d']))) {
							$Vudz4oh4qikunnots .= ' /D [';
							foreach ($V1yuhsvbtlvrl['opt']['bs']['d'] as $Vwcmlurixvzgord) {
								$Vudz4oh4qikunnots .= ' '.intval($Vwcmlurixvzgord);
							}
							$Vudz4oh4qikunnots .= ']';
						}
						$Vudz4oh4qikunnots .= ' >>';
					} else {
						$Vudz4oh4qikunnots .= ' /Border [';
						if (isset($V1yuhsvbtlvrl['opt']['border']) AND (count($V1yuhsvbtlvrl['opt']['border']) >= 3)) {
							$Vudz4oh4qikunnots .= intval($V1yuhsvbtlvrl['opt']['border'][0]).' ';
							$Vudz4oh4qikunnots .= intval($V1yuhsvbtlvrl['opt']['border'][1]).' ';
							$Vudz4oh4qikunnots .= intval($V1yuhsvbtlvrl['opt']['border'][2]);
							if (isset($V1yuhsvbtlvrl['opt']['border'][3]) AND is_array($V1yuhsvbtlvrl['opt']['border'][3])) {
								$Vudz4oh4qikunnots .= ' [';
								foreach ($V1yuhsvbtlvrl['opt']['border'][3] as $Vc0aiseldrl3ash) {
									$Vudz4oh4qikunnots .= intval($Vc0aiseldrl3ash).' ';
								}
								$Vudz4oh4qikunnots .= ']';
							}
						} else {
							$Vudz4oh4qikunnots .= '0 0 0';
						}
						$Vudz4oh4qikunnots .= ']';
					}
					if (isset($V1yuhsvbtlvrl['opt']['be']) AND (is_array($V1yuhsvbtlvrl['opt']['be']))) {
						$Vudz4oh4qikunnots .= ' /BE <<';
						$Vpq3acakq35cstyles = array('S', 'C');
						if (isset($V1yuhsvbtlvrl['opt']['be']['s']) AND in_array($V1yuhsvbtlvrl['opt']['be']['s'], $Vpq3acakq35cstyles)) {
							$Vudz4oh4qikunnots .= ' /S /'.$V1yuhsvbtlvrl['opt']['bs']['s'];
						} else {
							$Vudz4oh4qikunnots .= ' /S /S';
						}
						if (isset($V1yuhsvbtlvrl['opt']['be']['i']) AND ($V1yuhsvbtlvrl['opt']['be']['i'] >= 0) AND ($V1yuhsvbtlvrl['opt']['be']['i'] <= 2)) {
							$Vudz4oh4qikunnots .= ' /I '.sprintf(' %F', $V1yuhsvbtlvrl['opt']['be']['i']);
						}
						$Vudz4oh4qikunnots .= '>>';
					}
					if (isset($V1yuhsvbtlvrl['opt']['c']) AND (is_array($V1yuhsvbtlvrl['opt']['c'])) AND !empty($V1yuhsvbtlvrl['opt']['c'])) {
						$Vudz4oh4qikunnots .= ' /C '.TCPDF_COLORS::getColorStringFromArray($V1yuhsvbtlvrl['opt']['c']);
					}
					
					
					$Vetludueqmbtarkups = array('text', 'freetext', 'line', 'square', 'circle', 'polygon', 'polyline', 'highlight', 'underline', 'squiggly', 'strikeout', 'stamp', 'caret', 'ink', 'fileattachment', 'sound');
					if (in_array(strtolower($V1yuhsvbtlvrl['opt']['subtype']), $Vetludueqmbtarkups)) {
						
						if (isset($V1yuhsvbtlvrl['opt']['t']) AND is_string($V1yuhsvbtlvrl['opt']['t'])) {
							$Vudz4oh4qikunnots .= ' /T '.$Vnwufml5q3nphis->_textstring($V1yuhsvbtlvrl['opt']['t'], $Vudz4oh4qikunnot_obj_id);
						}
						
						if (isset($V1yuhsvbtlvrl['opt']['ca'])) {
							$Vudz4oh4qikunnots .= ' /CA '.sprintf('%F', floatval($V1yuhsvbtlvrl['opt']['ca']));
						}
						if (isset($V1yuhsvbtlvrl['opt']['rc'])) {
							$Vudz4oh4qikunnots .= ' /RC '.$Vnwufml5q3nphis->_textstring($V1yuhsvbtlvrl['opt']['rc'], $Vudz4oh4qikunnot_obj_id);
						}
						$Vudz4oh4qikunnots .= ' /CreationDate '.$Vnwufml5q3nphis->_datestring($Vudz4oh4qikunnot_obj_id, $Vnwufml5q3nphis->doc_creation_timestamp);
						
						if (isset($V1yuhsvbtlvrl['opt']['subj'])) {
							$Vudz4oh4qikunnots .= ' /Subj '.$Vnwufml5q3nphis->_textstring($V1yuhsvbtlvrl['opt']['subj'], $Vudz4oh4qikunnot_obj_id);
						}
						
						
						
					}
					$Vx3g4ytafo1aineendings = array('Square', 'Circle', 'Diamond', 'OpenArrow', 'ClosedArrow', 'None', 'Butt', 'ROpenArrow', 'RClosedArrow', 'Slash');
					
					switch (strtolower($V1yuhsvbtlvrl['opt']['subtype'])) {
						case 'text': {
							if (isset($V1yuhsvbtlvrl['opt']['open'])) {
								$Vudz4oh4qikunnots .= ' /Open '. (strtolower($V1yuhsvbtlvrl['opt']['open']) == 'true' ? 'true' : 'false');
							}
							$V55vc4mewy5wconsapp = array('Comment', 'Help', 'Insert', 'Key', 'NewParagraph', 'Note', 'Paragraph');
							if (isset($V1yuhsvbtlvrl['opt']['name']) AND in_array($V1yuhsvbtlvrl['opt']['name'], $V55vc4mewy5wconsapp)) {
								$Vudz4oh4qikunnots .= ' /Name /'.$V1yuhsvbtlvrl['opt']['name'];
							} else {
								$Vudz4oh4qikunnots .= ' /Name /Note';
							}
							$V4y2qsasqhhomodels = array('Marked', 'Review');
							if (isset($V1yuhsvbtlvrl['opt']['statemodel']) AND in_array($V1yuhsvbtlvrl['opt']['statemodel'], $V4y2qsasqhhomodels)) {
								$Vudz4oh4qikunnots .= ' /StateModel /'.$V1yuhsvbtlvrl['opt']['statemodel'];
							} else {
								$V1yuhsvbtlvrl['opt']['statemodel'] = 'Marked';
								$Vudz4oh4qikunnots .= ' /StateModel /'.$V1yuhsvbtlvrl['opt']['statemodel'];
							}
							if ($V1yuhsvbtlvrl['opt']['statemodel'] == 'Marked') {
								$V4y2qsasqhhos = array('Accepted', 'Unmarked');
							} else {
								$V4y2qsasqhhos = array('Accepted', 'Rejected', 'Cancelled', 'Completed', 'None');
							}
							if (isset($V1yuhsvbtlvrl['opt']['state']) AND in_array($V1yuhsvbtlvrl['opt']['state'], $V4y2qsasqhhos)) {
								$Vudz4oh4qikunnots .= ' /State /'.$V1yuhsvbtlvrl['opt']['state'];
							} else {
								if ($V1yuhsvbtlvrl['opt']['statemodel'] == 'Marked') {
									$Vudz4oh4qikunnots .= ' /State /Unmarked';
								} else {
									$Vudz4oh4qikunnots .= ' /State /None';
								}
							}
							break;
						}
						case 'link': {
							if (is_string($V1yuhsvbtlvrl['txt'])) {
								if ($V1yuhsvbtlvrl['txt'][0] == '#') {
									
									$Vudz4oh4qikunnots .= ' /Dest /'.TCPDF_STATIC::encodeNameObject(substr($V1yuhsvbtlvrl['txt'], 1));
								} elseif ($V1yuhsvbtlvrl['txt'][0] == '%') {
									
									$Vjluyuwumvofname = basename(substr($V1yuhsvbtlvrl['txt'], 1));
									$Vudz4oh4qikunnots .= ' /A << /S /GoToE /D [0 /Fit] /NewWindow true /T << /R /C /P '.($Vgv45dfhsyuh - 1).' /A '.$Vnwufml5q3nphis->embeddedfiles[$Vjluyuwumvofname]['a'].' >> >>';
								} elseif ($V1yuhsvbtlvrl['txt'][0] == '*') {
									
									$Vjluyuwumvofname = basename(substr($V1yuhsvbtlvrl['txt'], 1));
									$Vuaufi3la1vgsa = 'var D=event.target.doc;var MyData=D.dataObjects;for (var i in MyData) if (MyData[i].path=="'.$Vjluyuwumvofname.'") D.exportDataObject( { cName : MyData[i].name, nLaunch : 2});';
									$Vudz4oh4qikunnots .= ' /A << /S /JavaScript /JS '.$Vnwufml5q3nphis->_textstring($Vuaufi3la1vgsa, $Vudz4oh4qikunnot_obj_id).'>>';
								} else {
									$Vzqaxxdk0r01Url = parse_url($V1yuhsvbtlvrl['txt']);
									if (empty($Vzqaxxdk0r01Url['scheme']) AND (strtolower(substr($Vzqaxxdk0r01Url['path'], -4)) == '.pdf')) {
										
										$Vyyomvjhwdbp = '[0 /Fit]'; 
										if (!empty($Vzqaxxdk0r01Url['fragment'])) {
											
											$V3p0tae11ldw = explode('=', $Vzqaxxdk0r01Url['fragment']);
											$Vyyomvjhwdbp = '('.((count($V3p0tae11ldw) == 2) ? $V3p0tae11ldw[1] : $V3p0tae11ldw[0]).')';
										}
										$Vudz4oh4qikunnots .= ' /A <</S /GoToR /D '.$Vyyomvjhwdbp.' /F '.$Vnwufml5q3nphis->_datastring($Vnwufml5q3nphis->unhtmlentities($Vzqaxxdk0r01Url['path']), $Vudz4oh4qikunnot_obj_id).' /NewWindow true>>';
									} else {
										
										$Vudz4oh4qikunnots .= ' /A <</S /URI /URI '.$Vnwufml5q3nphis->_datastring($Vnwufml5q3nphis->unhtmlentities($V1yuhsvbtlvrl['txt']), $Vudz4oh4qikunnot_obj_id).'>>';
									}
								}
							} elseif (isset($Vnwufml5q3nphis->links[$V1yuhsvbtlvrl['txt']])) {
								
								$Vx3g4ytafo1a = $Vnwufml5q3nphis->links[$V1yuhsvbtlvrl['txt']];
								if (isset($Vnwufml5q3nphis->page_obj_id[($Vx3g4ytafo1a['p'])])) {
									$Vudz4oh4qikunnots .= sprintf(' /Dest [%u 0 R /XYZ 0 %F null]', $Vnwufml5q3nphis->page_obj_id[($Vx3g4ytafo1a['p'])], ($Vnwufml5q3nphis->pagedim[$Vx3g4ytafo1a['p']]['h'] - ($Vx3g4ytafo1a['y'] * $Vnwufml5q3nphis->k)));
								}
							}
							$Vvjxcwrp4tjqmodes = array('N', 'I', 'O', 'P');
							if (isset($V1yuhsvbtlvrl['opt']['h']) AND in_array($V1yuhsvbtlvrl['opt']['h'], $Vvjxcwrp4tjqmodes)) {
								$Vudz4oh4qikunnots .= ' /H /'.$V1yuhsvbtlvrl['opt']['h'];
							} else {
								$Vudz4oh4qikunnots .= ' /H /I';
							}
							
							
							break;
						}
						case 'freetext': {
							if (isset($V1yuhsvbtlvrl['opt']['da']) AND !empty($V1yuhsvbtlvrl['opt']['da'])) {
								$Vudz4oh4qikunnots .= ' /DA ('.$V1yuhsvbtlvrl['opt']['da'].')';
							}
							if (isset($V1yuhsvbtlvrl['opt']['q']) AND ($V1yuhsvbtlvrl['opt']['q'] >= 0) AND ($V1yuhsvbtlvrl['opt']['q'] <= 2)) {
								$Vudz4oh4qikunnots .= ' /Q '.intval($V1yuhsvbtlvrl['opt']['q']);
							}
							if (isset($V1yuhsvbtlvrl['opt']['rc'])) {
								$Vudz4oh4qikunnots .= ' /RC '.$Vnwufml5q3nphis->_textstring($V1yuhsvbtlvrl['opt']['rc'], $Vudz4oh4qikunnot_obj_id);
							}
							if (isset($V1yuhsvbtlvrl['opt']['ds'])) {
								$Vudz4oh4qikunnots .= ' /DS '.$Vnwufml5q3nphis->_textstring($V1yuhsvbtlvrl['opt']['ds'], $Vudz4oh4qikunnot_obj_id);
							}
							if (isset($V1yuhsvbtlvrl['opt']['cl']) AND is_array($V1yuhsvbtlvrl['opt']['cl'])) {
								$Vudz4oh4qikunnots .= ' /CL [';
								foreach ($V1yuhsvbtlvrl['opt']['cl'] as $Vwcmlurixvzgl) {
									$Vudz4oh4qikunnots .= sprintf('%F ', $Vwcmlurixvzgl * $Vnwufml5q3nphis->k);
								}
								$Vudz4oh4qikunnots .= ']';
							}
							$Vm1k0m4sqlbw = array('FreeText', 'FreeTextCallout', 'FreeTextTypeWriter');
							if (isset($V1yuhsvbtlvrl['opt']['it']) AND in_array($V1yuhsvbtlvrl['opt']['it'], $Vm1k0m4sqlbw)) {
								$Vudz4oh4qikunnots .= ' /IT /'.$V1yuhsvbtlvrl['opt']['it'];
							}
							if (isset($V1yuhsvbtlvrl['opt']['rd']) AND is_array($V1yuhsvbtlvrl['opt']['rd'])) {
								$Vx3g4ytafo1a = $V1yuhsvbtlvrl['opt']['rd'][0] * $Vnwufml5q3nphis->k;
								$Vfhkt4vbeual = $V1yuhsvbtlvrl['opt']['rd'][1] * $Vnwufml5q3nphis->k;
								$Vnwufml5q3np = $V1yuhsvbtlvrl['opt']['rd'][2] * $Vnwufml5q3nphis->k;
								$Vpq3acakq35c = $V1yuhsvbtlvrl['opt']['rd'][3] * $Vnwufml5q3nphis->k;
								$Vudz4oh4qikunnots .= ' /RD ['.sprintf('%F %F %F %F', $Vx3g4ytafo1a, $Vfhkt4vbeual, $Vnwufml5q3np, $Vpq3acakq35c).']';
							}
							if (isset($V1yuhsvbtlvrl['opt']['le']) AND in_array($V1yuhsvbtlvrl['opt']['le'], $Vx3g4ytafo1aineendings)) {
								$Vudz4oh4qikunnots .= ' /LE /'.$V1yuhsvbtlvrl['opt']['le'];
							}
							break;
						}
						case 'line': {
							break;
						}
						case 'square': {
							break;
						}
						case 'circle': {
							break;
						}
						case 'polygon': {
							break;
						}
						case 'polyline': {
							break;
						}
						case 'highlight': {
							break;
						}
						case 'underline': {
							break;
						}
						case 'squiggly': {
							break;
						}
						case 'strikeout': {
							break;
						}
						case 'stamp': {
							break;
						}
						case 'caret': {
							break;
						}
						case 'ink': {
							break;
						}
						case 'popup': {
							break;
						}
						case 'fileattachment': {
							if ($Vnwufml5q3nphis->pdfa_mode) {
								
								break;
							}
							if (!isset($V1yuhsvbtlvrl['opt']['fs'])) {
								break;
							}
							$Vjluyuwumvofname = basename($V1yuhsvbtlvrl['opt']['fs']);
							if (isset($Vnwufml5q3nphis->embeddedfiles[$Vjluyuwumvofname]['f'])) {
								$Vudz4oh4qikunnots .= ' /FS '.$Vnwufml5q3nphis->embeddedfiles[$Vjluyuwumvofname]['f'].' 0 R';
								$V55vc4mewy5wconsapp = array('Graph', 'Paperclip', 'PushPin', 'Tag');
								if (isset($V1yuhsvbtlvrl['opt']['name']) AND in_array($V1yuhsvbtlvrl['opt']['name'], $V55vc4mewy5wconsapp)) {
									$Vudz4oh4qikunnots .= ' /Name /'.$V1yuhsvbtlvrl['opt']['name'];
								} else {
									$Vudz4oh4qikunnots .= ' /Name /PushPin';
								}
								
								$Vnwufml5q3nphis->embeddedfiles[$Vjluyuwumvofname]['a'] = $Vl0q4noiexi4ey;
							}
							break;
						}
						case 'sound': {
							if (!isset($V1yuhsvbtlvrl['opt']['fs'])) {
								break;
							}
							$Vjluyuwumvofname = basename($V1yuhsvbtlvrl['opt']['fs']);
							if (isset($Vnwufml5q3nphis->embeddedfiles[$Vjluyuwumvofname]['f'])) {
								
								
								$Vudz4oh4qikunnots .= ' /Sound '.$Vnwufml5q3nphis->embeddedfiles[$Vjluyuwumvofname]['f'].' 0 R';
								$V55vc4mewy5wconsapp = array('Speaker', 'Mic');
								if (isset($V1yuhsvbtlvrl['opt']['name']) AND in_array($V1yuhsvbtlvrl['opt']['name'], $V55vc4mewy5wconsapp)) {
									$Vudz4oh4qikunnots .= ' /Name /'.$V1yuhsvbtlvrl['opt']['name'];
								} else {
									$Vudz4oh4qikunnots .= ' /Name /Speaker';
								}
							}
							break;
						}
						case 'movie': {
							break;
						}
						case 'widget': {
							$Vvjxcwrp4tjqmode = array('N', 'I', 'O', 'P', 'T');
							if (isset($V1yuhsvbtlvrl['opt']['h']) AND in_array($V1yuhsvbtlvrl['opt']['h'], $Vvjxcwrp4tjqmode)) {
								$Vudz4oh4qikunnots .= ' /H /'.$V1yuhsvbtlvrl['opt']['h'];
							}
							if (isset($V1yuhsvbtlvrl['opt']['mk']) AND (is_array($V1yuhsvbtlvrl['opt']['mk'])) AND !empty($V1yuhsvbtlvrl['opt']['mk'])) {
								$Vudz4oh4qikunnots .= ' /MK <<';
								if (isset($V1yuhsvbtlvrl['opt']['mk']['r'])) {
									$Vudz4oh4qikunnots .= ' /R '.$V1yuhsvbtlvrl['opt']['mk']['r'];
								}
								if (isset($V1yuhsvbtlvrl['opt']['mk']['bc']) AND (is_array($V1yuhsvbtlvrl['opt']['mk']['bc']))) {
									$Vudz4oh4qikunnots .= ' /BC '.TCPDF_COLORS::getColorStringFromArray($V1yuhsvbtlvrl['opt']['mk']['bc']);
								}
								if (isset($V1yuhsvbtlvrl['opt']['mk']['bg']) AND (is_array($V1yuhsvbtlvrl['opt']['mk']['bg']))) {
									$Vudz4oh4qikunnots .= ' /BG '.TCPDF_COLORS::getColorStringFromArray($V1yuhsvbtlvrl['opt']['mk']['bg']);
								}
								if (isset($V1yuhsvbtlvrl['opt']['mk']['ca'])) {
									$Vudz4oh4qikunnots .= ' /CA '.$V1yuhsvbtlvrl['opt']['mk']['ca'];
								}
								if (isset($V1yuhsvbtlvrl['opt']['mk']['rc'])) {
									$Vudz4oh4qikunnots .= ' /RC '.$V1yuhsvbtlvrl['opt']['mk']['rc'];
								}
								if (isset($V1yuhsvbtlvrl['opt']['mk']['ac'])) {
									$Vudz4oh4qikunnots .= ' /AC '.$V1yuhsvbtlvrl['opt']['mk']['ac'];
								}
								if (isset($V1yuhsvbtlvrl['opt']['mk']['i'])) {
									$V55vc4mewy5wnfo = $Vnwufml5q3nphis->getImageBuffer($V1yuhsvbtlvrl['opt']['mk']['i']);
									if ($V55vc4mewy5wnfo !== false) {
										$Vudz4oh4qikunnots .= ' /I '.$V55vc4mewy5wnfo['n'].' 0 R';
									}
								}
								if (isset($V1yuhsvbtlvrl['opt']['mk']['ri'])) {
									$V55vc4mewy5wnfo = $Vnwufml5q3nphis->getImageBuffer($V1yuhsvbtlvrl['opt']['mk']['ri']);
									if ($V55vc4mewy5wnfo !== false) {
										$Vudz4oh4qikunnots .= ' /RI '.$V55vc4mewy5wnfo['n'].' 0 R';
									}
								}
								if (isset($V1yuhsvbtlvrl['opt']['mk']['ix'])) {
									$V55vc4mewy5wnfo = $Vnwufml5q3nphis->getImageBuffer($V1yuhsvbtlvrl['opt']['mk']['ix']);
									if ($V55vc4mewy5wnfo !== false) {
										$Vudz4oh4qikunnots .= ' /IX '.$V55vc4mewy5wnfo['n'].' 0 R';
									}
								}
								if (isset($V1yuhsvbtlvrl['opt']['mk']['if']) AND (is_array($V1yuhsvbtlvrl['opt']['mk']['if'])) AND !empty($V1yuhsvbtlvrl['opt']['mk']['if'])) {
									$Vudz4oh4qikunnots .= ' /IF <<';
									$V55vc4mewy5wf_sw = array('A', 'B', 'S', 'N');
									if (isset($V1yuhsvbtlvrl['opt']['mk']['if']['sw']) AND in_array($V1yuhsvbtlvrl['opt']['mk']['if']['sw'], $V55vc4mewy5wf_sw)) {
										$Vudz4oh4qikunnots .= ' /SW /'.$V1yuhsvbtlvrl['opt']['mk']['if']['sw'];
									}
									$V55vc4mewy5wf_s = array('A', 'P');
									if (isset($V1yuhsvbtlvrl['opt']['mk']['if']['s']) AND in_array($V1yuhsvbtlvrl['opt']['mk']['if']['s'], $V55vc4mewy5wf_s)) {
										$Vudz4oh4qikunnots .= ' /S /'.$V1yuhsvbtlvrl['opt']['mk']['if']['s'];
									}
									if (isset($V1yuhsvbtlvrl['opt']['mk']['if']['a']) AND (is_array($V1yuhsvbtlvrl['opt']['mk']['if']['a'])) AND !empty($V1yuhsvbtlvrl['opt']['mk']['if']['a'])) {
										$Vudz4oh4qikunnots .= sprintf(' /A [%F %F]', $V1yuhsvbtlvrl['opt']['mk']['if']['a'][0], $V1yuhsvbtlvrl['opt']['mk']['if']['a'][1]);
									}
									if (isset($V1yuhsvbtlvrl['opt']['mk']['if']['fb']) AND ($V1yuhsvbtlvrl['opt']['mk']['if']['fb'])) {
										$Vudz4oh4qikunnots .= ' /FB true';
									}
									$Vudz4oh4qikunnots .= '>>';
								}
								if (isset($V1yuhsvbtlvrl['opt']['mk']['tp']) AND ($V1yuhsvbtlvrl['opt']['mk']['tp'] >= 0) AND ($V1yuhsvbtlvrl['opt']['mk']['tp'] <= 6)) {
									$Vudz4oh4qikunnots .= ' /TP '.intval($V1yuhsvbtlvrl['opt']['mk']['tp']);
								}
								$Vudz4oh4qikunnots .= '>>';
							} 
							
							if (isset($Vnwufml5q3nphis->radiobutton_groups[$Vgv45dfhsyuh][$V1yuhsvbtlvrl['txt']])) {
								
								$Vudz4oh4qikunnots .= ' /Parent '.$Vnwufml5q3nphis->radiobutton_groups[$Vgv45dfhsyuh][$V1yuhsvbtlvrl['txt']].' 0 R';
							}
							if (isset($V1yuhsvbtlvrl['opt']['t']) AND is_string($V1yuhsvbtlvrl['opt']['t'])) {
								$Vudz4oh4qikunnots .= ' /T '.$Vnwufml5q3nphis->_datastring($V1yuhsvbtlvrl['opt']['t'], $Vudz4oh4qikunnot_obj_id);
							}
							if (isset($V1yuhsvbtlvrl['opt']['tu']) AND is_string($V1yuhsvbtlvrl['opt']['tu'])) {
								$Vudz4oh4qikunnots .= ' /TU '.$Vnwufml5q3nphis->_datastring($V1yuhsvbtlvrl['opt']['tu'], $Vudz4oh4qikunnot_obj_id);
							}
							if (isset($V1yuhsvbtlvrl['opt']['tm']) AND is_string($V1yuhsvbtlvrl['opt']['tm'])) {
								$Vudz4oh4qikunnots .= ' /TM '.$Vnwufml5q3nphis->_datastring($V1yuhsvbtlvrl['opt']['tm'], $Vudz4oh4qikunnot_obj_id);
							}
							if (isset($V1yuhsvbtlvrl['opt']['ff'])) {
								if (is_array($V1yuhsvbtlvrl['opt']['ff'])) {
									
									$Vxb0ra0fqzn2lag = 0;
									foreach($V1yuhsvbtlvrl['opt']['ff'] as $Vxt4wx3pvtez) {
										$Vxb0ra0fqzn2lag += 1 << ($Vxt4wx3pvtez - 1);
									}
								} else {
									$Vxb0ra0fqzn2lag = intval($V1yuhsvbtlvrl['opt']['ff']);
								}
								$Vudz4oh4qikunnots .= ' /Ff '.$Vxb0ra0fqzn2lag;
							}
							if (isset($V1yuhsvbtlvrl['opt']['maxlen'])) {
								$Vudz4oh4qikunnots .= ' /MaxLen '.intval($V1yuhsvbtlvrl['opt']['maxlen']);
							}
							if (isset($V1yuhsvbtlvrl['opt']['v'])) {
								$Vudz4oh4qikunnots .= ' /V';
								if (is_array($V1yuhsvbtlvrl['opt']['v'])) {
									foreach ($V1yuhsvbtlvrl['opt']['v'] AS $Vybdom4h5ylwval) {
										if (is_float($Vybdom4h5ylwval)) {
											$Vybdom4h5ylwval = sprintf('%F', $Vybdom4h5ylwval);
										}
										$Vudz4oh4qikunnots .= ' '.$Vybdom4h5ylwval;
									}
								} else {
									$Vudz4oh4qikunnots .= ' '.$Vnwufml5q3nphis->_textstring($V1yuhsvbtlvrl['opt']['v'], $Vudz4oh4qikunnot_obj_id);
								}
							}
							if (isset($V1yuhsvbtlvrl['opt']['dv'])) {
								$Vudz4oh4qikunnots .= ' /DV';
								if (is_array($V1yuhsvbtlvrl['opt']['dv'])) {
									foreach ($V1yuhsvbtlvrl['opt']['dv'] AS $Vybdom4h5ylwval) {
										if (is_float($Vybdom4h5ylwval)) {
											$Vybdom4h5ylwval = sprintf('%F', $Vybdom4h5ylwval);
										}
										$Vudz4oh4qikunnots .= ' '.$Vybdom4h5ylwval;
									}
								} else {
									$Vudz4oh4qikunnots .= ' '.$Vnwufml5q3nphis->_textstring($V1yuhsvbtlvrl['opt']['dv'], $Vudz4oh4qikunnot_obj_id);
								}
							}
							if (isset($V1yuhsvbtlvrl['opt']['rv'])) {
								$Vudz4oh4qikunnots .= ' /RV';
								if (is_array($V1yuhsvbtlvrl['opt']['rv'])) {
									foreach ($V1yuhsvbtlvrl['opt']['rv'] AS $Vybdom4h5ylwval) {
										if (is_float($Vybdom4h5ylwval)) {
											$Vybdom4h5ylwval = sprintf('%F', $Vybdom4h5ylwval);
										}
										$Vudz4oh4qikunnots .= ' '.$Vybdom4h5ylwval;
									}
								} else {
									$Vudz4oh4qikunnots .= ' '.$Vnwufml5q3nphis->_textstring($V1yuhsvbtlvrl['opt']['rv'], $Vudz4oh4qikunnot_obj_id);
								}
							}
							if (isset($V1yuhsvbtlvrl['opt']['a']) AND !empty($V1yuhsvbtlvrl['opt']['a'])) {
								$Vudz4oh4qikunnots .= ' /A << '.$V1yuhsvbtlvrl['opt']['a'].' >>';
							}
							if (isset($V1yuhsvbtlvrl['opt']['aa']) AND !empty($V1yuhsvbtlvrl['opt']['aa'])) {
								$Vudz4oh4qikunnots .= ' /AA << '.$V1yuhsvbtlvrl['opt']['aa'].' >>';
							}
							if (isset($V1yuhsvbtlvrl['opt']['da']) AND !empty($V1yuhsvbtlvrl['opt']['da'])) {
								$Vudz4oh4qikunnots .= ' /DA ('.$V1yuhsvbtlvrl['opt']['da'].')';
							}
							if (isset($V1yuhsvbtlvrl['opt']['q']) AND ($V1yuhsvbtlvrl['opt']['q'] >= 0) AND ($V1yuhsvbtlvrl['opt']['q'] <= 2)) {
								$Vudz4oh4qikunnots .= ' /Q '.intval($V1yuhsvbtlvrl['opt']['q']);
							}
							if (isset($V1yuhsvbtlvrl['opt']['opt']) AND (is_array($V1yuhsvbtlvrl['opt']['opt'])) AND !empty($V1yuhsvbtlvrl['opt']['opt'])) {
								$Vudz4oh4qikunnots .= ' /Opt [';
								foreach($V1yuhsvbtlvrl['opt']['opt'] AS $Vwcmlurixvzgopt) {
									if (is_array($Vwcmlurixvzgopt)) {
										$Vudz4oh4qikunnots .= ' ['.$Vnwufml5q3nphis->_textstring($Vwcmlurixvzgopt[0], $Vudz4oh4qikunnot_obj_id).' '.$Vnwufml5q3nphis->_textstring($Vwcmlurixvzgopt[1], $Vudz4oh4qikunnot_obj_id).']';
									} else {
										$Vudz4oh4qikunnots .= ' '.$Vnwufml5q3nphis->_textstring($Vwcmlurixvzgopt, $Vudz4oh4qikunnot_obj_id);
									}
								}
								$Vudz4oh4qikunnots .= ']';
							}
							if (isset($V1yuhsvbtlvrl['opt']['ti'])) {
								$Vudz4oh4qikunnots .= ' /TI '.intval($V1yuhsvbtlvrl['opt']['ti']);
							}
							if (isset($V1yuhsvbtlvrl['opt']['i']) AND (is_array($V1yuhsvbtlvrl['opt']['i'])) AND !empty($V1yuhsvbtlvrl['opt']['i'])) {
								$Vudz4oh4qikunnots .= ' /I [';
								foreach($V1yuhsvbtlvrl['opt']['i'] AS $Vwcmlurixvzgopt) {
									$Vudz4oh4qikunnots .= intval($Vwcmlurixvzgopt).' ';
								}
								$Vudz4oh4qikunnots .= ']';
							}
							break;
						}
						case 'screen': {
							break;
						}
						case 'printermark': {
							break;
						}
						case 'trapnet': {
							break;
						}
						case 'watermark': {
							break;
						}
						case '3d': {
							break;
						}
						default: {
							break;
						}
					}
					$Vudz4oh4qikunnots .= '>>';
					
					$Vnwufml5q3nphis->_out($Vnwufml5q3nphis->_getobj($Vudz4oh4qikunnot_obj_id)."\n".$Vudz4oh4qikunnots."\n".'endobj');
					if ($Vxb0ra0fqzn2ormfield AND !isset($Vnwufml5q3nphis->radiobutton_groups[$Vgv45dfhsyuh][$V1yuhsvbtlvrl['txt']])) {
						
						$Vnwufml5q3nphis->form_obj_id[] = $Vudz4oh4qikunnot_obj_id;
					}
				}
			}
		} 
	}

	
	protected function _putAPXObject($Vim12f51jw5r=0, $Vvjxcwrp4tjq=0, $Vvt20qqut4butream='') {
		$Vvt20qqut4butream = trim($Vvt20qqut4butream);
		$V4t5ynycapey = $Vnwufml5q3nphis->_getobj()."\n";
		$Vnwufml5q3nphis->xobjects['AX'.$Vnwufml5q3nphis->n] = array('n' => $Vnwufml5q3nphis->n);
		$V4t5ynycapey .= '<<';
		$V4t5ynycapey .= ' /Type /XObject';
		$V4t5ynycapey .= ' /Subtype /Form';
		$V4t5ynycapey .= ' /FormType 1';
		if ($Vnwufml5q3nphis->compress) {
			$Vvt20qqut4butream = gzcompress($Vvt20qqut4butream);
			$V4t5ynycapey .= ' /Filter /FlateDecode';
		}
		$V14ltds3prprct = sprintf('%F %F', $Vim12f51jw5r, $Vvjxcwrp4tjq);
		$V4t5ynycapey .= ' /BBox [0 0 '.$V14ltds3prprct.']';
		$V4t5ynycapey .= ' /Matrix [1 0 0 1 0 0]';
		$V4t5ynycapey .= ' /Resources 2 0 R';
		$Vvt20qqut4butream = $Vnwufml5q3nphis->_getrawstream($Vvt20qqut4butream);
		$V4t5ynycapey .= ' /Length '.strlen($Vvt20qqut4butream);
		$V4t5ynycapey .= ' >>';
		$V4t5ynycapey .= ' stream'."\n".$Vvt20qqut4butream."\n".'endstream';
		$V4t5ynycapey .= "\n".'endobj';
		$Vnwufml5q3nphis->_out($V4t5ynycapey);
		return $Vnwufml5q3nphis->n;
	}

	
	protected function _putfonts() {
		$Vgv45dfhsyuhf = $Vnwufml5q3nphis->n;
		foreach ($Vnwufml5q3nphis->diffs as $Vsjpa44qmsau) {
			
			$Vnwufml5q3nphis->_newobj();
			$Vnwufml5q3nphis->_out('<< /Type /Encoding /BaseEncoding /WinAnsiEncoding /Differences ['.$Vsjpa44qmsau.'] >>'."\n".'endobj');
		}
		$Vetludueqmbtqr = TCPDF_STATIC::get_mqr();
		TCPDF_STATIC::set_mqr(false);
		foreach ($Vnwufml5q3nphis->FontFiles as $Vjluyuwumvof => $V55vc4mewy5wnfo) {
			
			$Voc1qigl3k5yfile = TCPDF_FONTS::getFontFullPath($Vjluyuwumvof, $V55vc4mewy5wnfo['fontdir']);
			if (!TCPDF_STATIC::empty_string($Voc1qigl3k5yfile)) {
				$Voc1qigl3k5y = file_get_contents($Voc1qigl3k5yfile);
				$Vztblmzto2amed = (substr($Vjluyuwumvof, -2) == '.z');
				if ((!$Vztblmzto2amed) AND (isset($V55vc4mewy5wnfo['length2']))) {
					$Vvjxcwrp4tjqeader = (ord($Voc1qigl3k5y[0]) == 128);
					if ($Vvjxcwrp4tjqeader) {
						
						$Voc1qigl3k5y = substr($Voc1qigl3k5y, 6);
					}
					if ($Vvjxcwrp4tjqeader AND (ord($Voc1qigl3k5y[$V55vc4mewy5wnfo['length1']]) == 128)) {
						
						$Voc1qigl3k5y = substr($Voc1qigl3k5y, 0, $V55vc4mewy5wnfo['length1']).substr($Voc1qigl3k5y, ($V55vc4mewy5wnfo['length1'] + 6));
					}
				} elseif ($V55vc4mewy5wnfo['subset'] AND ((!$Vztblmzto2amed) OR ($Vztblmzto2amed AND function_exists('gzcompress')))) {
					if ($Vztblmzto2amed) {
						
						$Voc1qigl3k5y = gzuncompress($Voc1qigl3k5y);
					}
					
					$Vvt20qqut4buubsetchars = array(); 
					foreach ($V55vc4mewy5wnfo['fontkeys'] as $Voc1qigl3k5ykey) {
						$Voc1qigl3k5yinfo = $Vnwufml5q3nphis->getFontBuffer($Voc1qigl3k5ykey);
						$Vvt20qqut4buubsetchars += $Voc1qigl3k5yinfo['subsetchars'];
					}
					
					$Voc1qigl3k5y = TCPDF_FONTS::_getTrueTypeFontSubset($Voc1qigl3k5y, $Vvt20qqut4buubsetchars);
					
					$V55vc4mewy5wnfo['length1'] = strlen($Voc1qigl3k5y);
					if ($Vztblmzto2amed) {
						
						$Voc1qigl3k5y = gzcompress($Voc1qigl3k5y);
					}
				}
				$Vnwufml5q3nphis->_newobj();
				$Vnwufml5q3nphis->FontFiles[$Vjluyuwumvof]['n'] = $Vnwufml5q3nphis->n;
				$Vvt20qqut4butream = $Vnwufml5q3nphis->_getrawstream($Voc1qigl3k5y);
				$V4t5ynycapey = '<< /Length '.strlen($Vvt20qqut4butream);
				if ($Vztblmzto2amed) {
					$V4t5ynycapey .= ' /Filter /FlateDecode';
				}
				$V4t5ynycapey .= ' /Length1 '.$V55vc4mewy5wnfo['length1'];
				if (isset($V55vc4mewy5wnfo['length2'])) {
					$V4t5ynycapey .= ' /Length2 '.$V55vc4mewy5wnfo['length2'].' /Length3 0';
				}
				$V4t5ynycapey .= ' >>';
				$V4t5ynycapey .= ' stream'."\n".$Vvt20qqut4butream."\n".'endstream';
				$V4t5ynycapey .= "\n".'endobj';
				$Vnwufml5q3nphis->_out($V4t5ynycapey);
			}
		}
		TCPDF_STATIC::set_mqr($Vetludueqmbtqr);
		foreach ($Vnwufml5q3nphis->fontkeys as $Vl0q4noiexi4) {
			
			$Voc1qigl3k5y = $Vnwufml5q3nphis->getFontBuffer($Vl0q4noiexi4);
			$Vvmwm1jsklgc = $Voc1qigl3k5y['type'];
			$Vgv45dfhsyuhame = $Voc1qigl3k5y['name'];
			if ($Vvmwm1jsklgc == 'core') {
				
				$V4t5ynycapey = $Vnwufml5q3nphis->_getobj($Vnwufml5q3nphis->font_obj_ids[$Vl0q4noiexi4])."\n";
				$V4t5ynycapey .= '<</Type /Font';
				$V4t5ynycapey .= ' /Subtype /Type1';
				$V4t5ynycapey .= ' /BaseFont /'.$Vgv45dfhsyuhame;
				$V4t5ynycapey .= ' /Name /F'.$Voc1qigl3k5y['i'];
				if ((strtolower($Vgv45dfhsyuhame) != 'symbol') AND (strtolower($Vgv45dfhsyuhame) != 'zapfdingbats')) {
					$V4t5ynycapey .= ' /Encoding /WinAnsiEncoding';
				}
				if ($Vl0q4noiexi4 == 'helvetica') {
					
					$Vnwufml5q3nphis->annotation_fonts[$Vl0q4noiexi4] = $Voc1qigl3k5y['i'];
				}
				$V4t5ynycapey .= ' >>';
				$V4t5ynycapey .= "\n".'endobj';
				$Vnwufml5q3nphis->_out($V4t5ynycapey);
			} elseif (($Vvmwm1jsklgc == 'Type1') OR ($Vvmwm1jsklgc == 'TrueType')) {
				
				$V4t5ynycapey = $Vnwufml5q3nphis->_getobj($Vnwufml5q3nphis->font_obj_ids[$Vl0q4noiexi4])."\n";
				$V4t5ynycapey .= '<</Type /Font';
				$V4t5ynycapey .= ' /Subtype /'.$Vvmwm1jsklgc;
				$V4t5ynycapey .= ' /BaseFont /'.$Vgv45dfhsyuhame;
				$V4t5ynycapey .= ' /Name /F'.$Voc1qigl3k5y['i'];
				$V4t5ynycapey .= ' /FirstChar 32 /LastChar 255';
				$V4t5ynycapey .= ' /Widths '.($Vnwufml5q3nphis->n + 1).' 0 R';
				$V4t5ynycapey .= ' /FontDescriptor '.($Vnwufml5q3nphis->n + 2).' 0 R';
				if ($Voc1qigl3k5y['enc']) {
					if (isset($Voc1qigl3k5y['diff'])) {
						$V4t5ynycapey .= ' /Encoding '.($Vgv45dfhsyuhf + $Voc1qigl3k5y['diff']).' 0 R';
					} else {
						$V4t5ynycapey .= ' /Encoding /WinAnsiEncoding';
					}
				}
				$V4t5ynycapey .= ' >>';
				$V4t5ynycapey .= "\n".'endobj';
				$Vnwufml5q3nphis->_out($V4t5ynycapey);
				
				$Vnwufml5q3nphis->_newobj();
				$Vvt20qqut4bu = '[';
				for ($V55vc4mewy5w = 32; $V55vc4mewy5w < 256; ++$V55vc4mewy5w) {
					if (isset($Voc1qigl3k5y['cw'][$V55vc4mewy5w])) {
						$Vvt20qqut4bu .= $Voc1qigl3k5y['cw'][$V55vc4mewy5w].' ';
					} else {
						$Vvt20qqut4bu .= $Voc1qigl3k5y['dw'].' ';
					}
				}
				$Vvt20qqut4bu .= ']';
				$Vvt20qqut4bu .= "\n".'endobj';
				$Vnwufml5q3nphis->_out($Vvt20qqut4bu);
				
				$Vnwufml5q3nphis->_newobj();
				$Vvt20qqut4bu = '<</Type /FontDescriptor /FontName /'.$Vgv45dfhsyuhame;
				foreach ($Voc1qigl3k5y['desc'] as $Vxb0ra0fqzn2dk => $Vxb0ra0fqzn2dv) {
					if (is_float($Vxb0ra0fqzn2dv)) {
						$Vxb0ra0fqzn2dv = sprintf('%F', $Vxb0ra0fqzn2dv);
					}
					$Vvt20qqut4bu .= ' /'.$Vxb0ra0fqzn2dk.' '.$Vxb0ra0fqzn2dv.'';
				}
				if (!TCPDF_STATIC::empty_string($Voc1qigl3k5y['file'])) {
					$Vvt20qqut4bu .= ' /FontFile'.($Vvmwm1jsklgc == 'Type1' ? '' : '2').' '.$Vnwufml5q3nphis->FontFiles[$Voc1qigl3k5y['file']]['n'].' 0 R';
				}
				$Vvt20qqut4bu .= '>>';
				$Vvt20qqut4bu .= "\n".'endobj';
				$Vnwufml5q3nphis->_out($Vvt20qqut4bu);
			} else {
				
				$Vetludueqmbttd = '_put'.strtolower($Vvmwm1jsklgc);
				if (!method_exists($Vnwufml5q3nphis, $Vetludueqmbttd)) {
					$Vnwufml5q3nphis->Error('Unsupported font type: '.$Vvmwm1jsklgc);
				}
				$Vnwufml5q3nphis->$Vetludueqmbttd($Voc1qigl3k5y);
			}
		}
	}

	
	protected function _puttruetypeunicode($Voc1qigl3k5y) {
		$Voc1qigl3k5yname = '';
		if ($Voc1qigl3k5y['subset']) {
			
			$Vvt20qqut4buubtag = sprintf('%06u', $Voc1qigl3k5y['i']);
			$Vvt20qqut4buubtag = strtr($Vvt20qqut4buubtag, '0123456789', 'ABCDEFGHIJ');
			$Voc1qigl3k5yname .= $Vvt20qqut4buubtag.'+';
		}
		$Voc1qigl3k5yname .= $Voc1qigl3k5y['name'];
		
		
		$V4t5ynycapey = $Vnwufml5q3nphis->_getobj($Vnwufml5q3nphis->font_obj_ids[$Voc1qigl3k5y['fontkey']])."\n";
		$V4t5ynycapey .= '<< /Type /Font';
		$V4t5ynycapey .= ' /Subtype /Type0';
		$V4t5ynycapey .= ' /BaseFont /'.$Voc1qigl3k5yname;
		$V4t5ynycapey .= ' /Name /F'.$Voc1qigl3k5y['i'];
		$V4t5ynycapey .= ' /Encoding /'.$Voc1qigl3k5y['enc'];
		$V4t5ynycapey .= ' /ToUnicode '.($Vnwufml5q3nphis->n + 1).' 0 R';
		$V4t5ynycapey .= ' /DescendantFonts ['.($Vnwufml5q3nphis->n + 2).' 0 R]';
		$V4t5ynycapey .= ' >>';
		$V4t5ynycapey .= "\n".'endobj';
		$Vnwufml5q3nphis->_out($V4t5ynycapey);
		
		$Vvt20qqut4butream = TCPDF_FONT_DATA::$Vppw1slbj4ovni_identity_h;
		
		$Vnwufml5q3nphis->_newobj();
		$Vvt20qqut4butream = ($Vnwufml5q3nphis->compress) ? gzcompress($Vvt20qqut4butream) : $Vvt20qqut4butream;
		$Vq5mneg2nyu1 = ($Vnwufml5q3nphis->compress) ? '/Filter /FlateDecode ' : '';
		$Vvt20qqut4butream = $Vnwufml5q3nphis->_getrawstream($Vvt20qqut4butream);
		$Vnwufml5q3nphis->_out('<<'.$Vq5mneg2nyu1.'/Length '.strlen($Vvt20qqut4butream).'>> stream'."\n".$Vvt20qqut4butream."\n".'endstream'."\n".'endobj');
		
		
		$V0ql3xygizkc = $Vnwufml5q3nphis->_newobj();
		$V4t5ynycapey = '<< /Type /Font';
		$V4t5ynycapey .= ' /Subtype /CIDFontType2';
		$V4t5ynycapey .= ' /BaseFont /'.$Voc1qigl3k5yname;
		
		$Vwcmlurixvzgidinfo = '/Registry '.$Vnwufml5q3nphis->_datastring($Voc1qigl3k5y['cidinfo']['Registry'], $V0ql3xygizkc);
		$Vwcmlurixvzgidinfo .= ' /Ordering '.$Vnwufml5q3nphis->_datastring($Voc1qigl3k5y['cidinfo']['Ordering'], $V0ql3xygizkc);
		$Vwcmlurixvzgidinfo .= ' /Supplement '.$Voc1qigl3k5y['cidinfo']['Supplement'];
		$V4t5ynycapey .= ' /CIDSystemInfo << '.$Vwcmlurixvzgidinfo.' >>';
		$V4t5ynycapey .= ' /FontDescriptor '.($Vnwufml5q3nphis->n + 1).' 0 R';
		$V4t5ynycapey .= ' /DW '.$Voc1qigl3k5y['dw']; 
		$V4t5ynycapey .= "\n".TCPDF_FONTS::_putfontwidths($Voc1qigl3k5y, 0);
		if (isset($Voc1qigl3k5y['ctg']) AND (!TCPDF_STATIC::empty_string($Voc1qigl3k5y['ctg']))) {
			$V4t5ynycapey .= "\n".'/CIDToGIDMap '.($Vnwufml5q3nphis->n + 2).' 0 R';
		}
		$V4t5ynycapey .= ' >>';
		$V4t5ynycapey .= "\n".'endobj';
		$Vnwufml5q3nphis->_out($V4t5ynycapey);
		
		
		$Vnwufml5q3nphis->_newobj();
		$V4t5ynycapey = '<< /Type /FontDescriptor';
		$V4t5ynycapey .= ' /FontName /'.$Voc1qigl3k5yname;
		foreach ($Voc1qigl3k5y['desc'] as $Vl0q4noiexi4ey => $Vxt4wx3pvtezue) {
			if (is_float($Vxt4wx3pvtezue)) {
				$Vxt4wx3pvtezue = sprintf('%F', $Vxt4wx3pvtezue);
			}
			$V4t5ynycapey .= ' /'.$Vl0q4noiexi4ey.' '.$Vxt4wx3pvtezue;
		}
		$Voc1qigl3k5ydir = false;
		if (!TCPDF_STATIC::empty_string($Voc1qigl3k5y['file'])) {
			
			$V4t5ynycapey .= ' /FontFile2 '.$Vnwufml5q3nphis->FontFiles[$Voc1qigl3k5y['file']]['n'].' 0 R';
			$Voc1qigl3k5ydir = $Vnwufml5q3nphis->FontFiles[$Voc1qigl3k5y['file']]['fontdir'];
		}
		$V4t5ynycapey .= ' >>';
		$V4t5ynycapey .= "\n".'endobj';
		$Vnwufml5q3nphis->_out($V4t5ynycapey);
		if (isset($Voc1qigl3k5y['ctg']) AND (!TCPDF_STATIC::empty_string($Voc1qigl3k5y['ctg']))) {
			$Vnwufml5q3nphis->_newobj();
			
			
			
			$Vwcmlurixvzgtgfile = strtolower($Voc1qigl3k5y['ctg']);
			
			$Voc1qigl3k5yfile = TCPDF_FONTS::getFontFullPath($Vwcmlurixvzgtgfile, $Voc1qigl3k5ydir);
			if (TCPDF_STATIC::empty_string($Voc1qigl3k5yfile)) {
				$Vnwufml5q3nphis->Error('Font file not found: '.$Vwcmlurixvzgtgfile);
			}
			$Vvt20qqut4butream = $Vnwufml5q3nphis->_getrawstream(file_get_contents($Voc1qigl3k5yfile));
			$V4t5ynycapey = '<< /Length '.strlen($Vvt20qqut4butream).'';
			if (substr($Voc1qigl3k5yfile, -2) == '.z') { 
				
				
				
				$V4t5ynycapey .= ' /Filter /FlateDecode';
			}
			$V4t5ynycapey .= ' >>';
			$V4t5ynycapey .= ' stream'."\n".$Vvt20qqut4butream."\n".'endstream';
			$V4t5ynycapey .= "\n".'endobj';
			$Vnwufml5q3nphis->_out($V4t5ynycapey);
		}
	}

	
	protected function _putcidfont0($Voc1qigl3k5y) {
		$Vwcmlurixvzgidoffset = 0;
		if (!isset($Voc1qigl3k5y['cw'][1])) {
			$Vwcmlurixvzgidoffset = 31;
		}
		if (isset($Voc1qigl3k5y['cidinfo']['uni2cid'])) {
			
			$Vppw1slbj4ovni2cid = $Voc1qigl3k5y['cidinfo']['uni2cid'];
			$V5k0cete3fo0 = array();
			foreach ($Voc1qigl3k5y['cw'] as $Vppw1slbj4ovni => $Vim12f51jw5ridth) {
				if (isset($Vppw1slbj4ovni2cid[$Vppw1slbj4ovni])) {
					$V5k0cete3fo0[($Vppw1slbj4ovni2cid[$Vppw1slbj4ovni] + $Vwcmlurixvzgidoffset)] = $Vim12f51jw5ridth;
				} elseif ($Vppw1slbj4ovni < 256) {
					$V5k0cete3fo0[$Vppw1slbj4ovni] = $Vim12f51jw5ridth;
				} 
			}
			$Voc1qigl3k5y = array_merge($Voc1qigl3k5y, array('cw' => $V5k0cete3fo0));
		}
		$Vgv45dfhsyuhame = $Voc1qigl3k5y['name'];
		$V4bajg5xhoka = $Voc1qigl3k5y['enc'];
		if ($V4bajg5xhoka) {
			$Vx3g4ytafo1aongname = $Vgv45dfhsyuhame.'-'.$V4bajg5xhoka;
		} else {
			$Vx3g4ytafo1aongname = $Vgv45dfhsyuhame;
		}
		$V4t5ynycapey = $Vnwufml5q3nphis->_getobj($Vnwufml5q3nphis->font_obj_ids[$Voc1qigl3k5y['fontkey']])."\n";
		$V4t5ynycapey .= '<</Type /Font';
		$V4t5ynycapey .= ' /Subtype /Type0';
		$V4t5ynycapey .= ' /BaseFont /'.$Vx3g4ytafo1aongname;
		$V4t5ynycapey .= ' /Name /F'.$Voc1qigl3k5y['i'];
		if ($V4bajg5xhoka) {
			$V4t5ynycapey .= ' /Encoding /'.$V4bajg5xhoka;
		}
		$V4t5ynycapey .= ' /DescendantFonts ['.($Vnwufml5q3nphis->n + 1).' 0 R]';
		$V4t5ynycapey .= ' >>';
		$V4t5ynycapey .= "\n".'endobj';
		$Vnwufml5q3nphis->_out($V4t5ynycapey);
		$V0ql3xygizkc = $Vnwufml5q3nphis->_newobj();
		$V4t5ynycapey = '<</Type /Font';
		$V4t5ynycapey .= ' /Subtype /CIDFontType0';
		$V4t5ynycapey .= ' /BaseFont /'.$Vgv45dfhsyuhame;
		$Vwcmlurixvzgidinfo = '/Registry '.$Vnwufml5q3nphis->_datastring($Voc1qigl3k5y['cidinfo']['Registry'], $V0ql3xygizkc);
		$Vwcmlurixvzgidinfo .= ' /Ordering '.$Vnwufml5q3nphis->_datastring($Voc1qigl3k5y['cidinfo']['Ordering'], $V0ql3xygizkc);
		$Vwcmlurixvzgidinfo .= ' /Supplement '.$Voc1qigl3k5y['cidinfo']['Supplement'];
		$V4t5ynycapey .= ' /CIDSystemInfo <<'.$Vwcmlurixvzgidinfo.'>>';
		$V4t5ynycapey .= ' /FontDescriptor '.($Vnwufml5q3nphis->n + 1).' 0 R';
		$V4t5ynycapey .= ' /DW '.$Voc1qigl3k5y['dw'];
		$V4t5ynycapey .= "\n".TCPDF_FONTS::_putfontwidths($Voc1qigl3k5y, $Vwcmlurixvzgidoffset);
		$V4t5ynycapey .= ' >>';
		$V4t5ynycapey .= "\n".'endobj';
		$Vnwufml5q3nphis->_out($V4t5ynycapey);
		$Vnwufml5q3nphis->_newobj();
		$Vvt20qqut4bu = '<</Type /FontDescriptor /FontName /'.$Vgv45dfhsyuhame;
		foreach ($Voc1qigl3k5y['desc'] as $Vl0q4noiexi4 => $Vz0hmukhwa4z) {
			if ($Vl0q4noiexi4 != 'Style') {
				if (is_float($Vz0hmukhwa4z)) {
					$Vz0hmukhwa4z = sprintf('%F', $Vz0hmukhwa4z);
				}
				$Vvt20qqut4bu .= ' /'.$Vl0q4noiexi4.' '.$Vz0hmukhwa4z.'';
			}
		}
		$Vvt20qqut4bu .= '>>';
		$Vvt20qqut4bu .= "\n".'endobj';
		$Vnwufml5q3nphis->_out($Vvt20qqut4bu);
	}

	
	protected function _putimages() {
		$Vq5mneg2nyu1 = ($Vnwufml5q3nphis->compress) ? '/Filter /FlateDecode ' : '';
		foreach ($Vnwufml5q3nphis->imagekeys as $Vjluyuwumvof) {
			$V55vc4mewy5wnfo = $Vnwufml5q3nphis->getImageBuffer($Vjluyuwumvof);
			
			if ((!$Vnwufml5q3nphis->pdfa_mode) AND isset($V55vc4mewy5wnfo['altimgs']) AND !empty($V55vc4mewy5wnfo['altimgs'])) {
				$Vlrvi4ycfcp4oid = $Vnwufml5q3nphis->_newobj();
				$V4t5ynycapey = '[';
				foreach ($V55vc4mewy5wnfo['altimgs'] as $Vlrvi4ycfcp4image) {
					if (isset($Vnwufml5q3nphis->xobjects['I'.$Vlrvi4ycfcp4image[0]]['n'])) {
						$V4t5ynycapey .= ' << /Image '.$Vnwufml5q3nphis->xobjects['I'.$Vlrvi4ycfcp4image[0]]['n'].' 0 R';
						$V4t5ynycapey .= ' /DefaultForPrinting';
						if ($Vlrvi4ycfcp4image[1] === true) {
							$V4t5ynycapey .= ' true';
						} else {
							$V4t5ynycapey .= ' false';
						}
						$V4t5ynycapey .= ' >>';
					}
				}
				$V4t5ynycapey .= ' ]';
				$V4t5ynycapey .= "\n".'endobj';
				$Vnwufml5q3nphis->_out($V4t5ynycapey);
			}
			
			$V0ql3xygizkc = $Vnwufml5q3nphis->_newobj();
			$Vnwufml5q3nphis->xobjects['I'.$V55vc4mewy5wnfo['i']] = array('n' => $V0ql3xygizkc);
			$Vnwufml5q3nphis->setImageSubBuffer($Vjluyuwumvof, 'n', $Vnwufml5q3nphis->n);
			$V4t5ynycapey = '<</Type /XObject';
			$V4t5ynycapey .= ' /Subtype /Image';
			$V4t5ynycapey .= ' /Width '.$V55vc4mewy5wnfo['w'];
			$V4t5ynycapey .= ' /Height '.$V55vc4mewy5wnfo['h'];
			if (array_key_exists('masked', $V55vc4mewy5wnfo)) {
				$V4t5ynycapey .= ' /SMask '.($Vnwufml5q3nphis->n - 1).' 0 R';
			}
			
			$V55vc4mewy5wcc = false;
			if (isset($V55vc4mewy5wnfo['icc']) AND ($V55vc4mewy5wnfo['icc'] !== false)) {
				
				$V55vc4mewy5wcc = true;
				$V4t5ynycapey .= ' /ColorSpace [/ICCBased '.($Vnwufml5q3nphis->n + 1).' 0 R]';
			} elseif ($V55vc4mewy5wnfo['cs'] == 'Indexed') {
				
				$V4t5ynycapey .= ' /ColorSpace [/Indexed /DeviceRGB '.((strlen($V55vc4mewy5wnfo['pal']) / 3) - 1).' '.($Vnwufml5q3nphis->n + 1).' 0 R]';
			} else {
				
				$V4t5ynycapey .= ' /ColorSpace /'.$V55vc4mewy5wnfo['cs'];
			}
			if ($V55vc4mewy5wnfo['cs'] == 'DeviceCMYK') {
				$V4t5ynycapey .= ' /Decode [1 0 1 0 1 0 1 0]';
			}
			$V4t5ynycapey .= ' /BitsPerComponent '.$V55vc4mewy5wnfo['bpc'];
			if (isset($Vlrvi4ycfcp4oid) AND ($Vlrvi4ycfcp4oid > 0)) {
				
				$V4t5ynycapey .= ' /Alternates '.$Vlrvi4ycfcp4oid.' 0 R';
			}
			if (isset($V55vc4mewy5wnfo['exurl']) AND !empty($V55vc4mewy5wnfo['exurl'])) {
				
				$V4t5ynycapey .= ' /Length 0';
				$V4t5ynycapey .= ' /F << /FS /URL /F '.$Vnwufml5q3nphis->_datastring($V55vc4mewy5wnfo['exurl'], $V0ql3xygizkc).' >>';
				if (isset($V55vc4mewy5wnfo['f'])) {
					$V4t5ynycapey .= ' /FFilter /'.$V55vc4mewy5wnfo['f'];
				}
				$V4t5ynycapey .= ' >>';
				$V4t5ynycapey .= ' stream'."\n".'endstream';
			} else {
				if (isset($V55vc4mewy5wnfo['f'])) {
					$V4t5ynycapey .= ' /Filter /'.$V55vc4mewy5wnfo['f'];
				}
				if (isset($V55vc4mewy5wnfo['parms'])) {
					$V4t5ynycapey .= ' '.$V55vc4mewy5wnfo['parms'];
				}
				if (isset($V55vc4mewy5wnfo['trns']) AND is_array($V55vc4mewy5wnfo['trns'])) {
					$Vnwufml5q3nprns = '';
					$Vwcmlurixvzgount_info = count($V55vc4mewy5wnfo['trns']);
					if ($V55vc4mewy5wnfo['cs'] == 'Indexed') {
						$Vetludueqmbtaxval =(pow(2, $V55vc4mewy5wnfo['bpc']) - 1);
						for ($V55vc4mewy5w = 0; $V55vc4mewy5w < $Vwcmlurixvzgount_info; ++$V55vc4mewy5w) {
							if (($V55vc4mewy5wnfo['trns'][$V55vc4mewy5w] != 0) AND ($V55vc4mewy5wnfo['trns'][$V55vc4mewy5w] != $Vetludueqmbtaxval)) {
								
								$Vnwufml5q3nprns = '';
								break;
							} elseif (empty($Vnwufml5q3nprns) AND ($V55vc4mewy5wnfo['trns'][$V55vc4mewy5w] == 0)) {
								
								$Vnwufml5q3nprns .= $V55vc4mewy5w.' '.$V55vc4mewy5w.' ';
							}
						}
					} else {
						
						for ($V55vc4mewy5w = 0; $V55vc4mewy5w < $Vwcmlurixvzgount_info; ++$V55vc4mewy5w) {
							if ($V55vc4mewy5wnfo['trns'][$V55vc4mewy5w] == 0) {
								$Vnwufml5q3nprns .= $V55vc4mewy5wnfo['trns'][$V55vc4mewy5w].' '.$V55vc4mewy5wnfo['trns'][$V55vc4mewy5w].' ';
							}
						}
					}
					
					if (!empty($Vnwufml5q3nprns)) {
						$V4t5ynycapey .= ' /Mask ['.$Vnwufml5q3nprns.']';
					}
				}
				$Vvt20qqut4butream = $Vnwufml5q3nphis->_getrawstream($V55vc4mewy5wnfo['data']);
				$V4t5ynycapey .= ' /Length '.strlen($Vvt20qqut4butream).' >>';
				$V4t5ynycapey .= ' stream'."\n".$Vvt20qqut4butream."\n".'endstream';
			}
			$V4t5ynycapey .= "\n".'endobj';
			$Vnwufml5q3nphis->_out($V4t5ynycapey);
			if ($V55vc4mewy5wcc) {
				
				$Vnwufml5q3nphis->_newobj();
				$V55vc4mewy5wcc = ($Vnwufml5q3nphis->compress) ? gzcompress($V55vc4mewy5wnfo['icc']) : $V55vc4mewy5wnfo['icc'];
				$V55vc4mewy5wcc = $Vnwufml5q3nphis->_getrawstream($V55vc4mewy5wcc);
				$Vnwufml5q3nphis->_out('<</N '.$V55vc4mewy5wnfo['ch'].' /Alternate /'.$V55vc4mewy5wnfo['cs'].' '.$Vq5mneg2nyu1.'/Length '.strlen($V55vc4mewy5wcc).'>> stream'."\n".$V55vc4mewy5wcc."\n".'endstream'."\n".'endobj');
			} elseif ($V55vc4mewy5wnfo['cs'] == 'Indexed') {
				
				$Vnwufml5q3nphis->_newobj();
				$V1yuhsvbtlvral = ($Vnwufml5q3nphis->compress) ? gzcompress($V55vc4mewy5wnfo['pal']) : $V55vc4mewy5wnfo['pal'];
				$V1yuhsvbtlvral = $Vnwufml5q3nphis->_getrawstream($V1yuhsvbtlvral);
				$Vnwufml5q3nphis->_out('<<'.$Vq5mneg2nyu1.'/Length '.strlen($V1yuhsvbtlvral).'>> stream'."\n".$V1yuhsvbtlvral."\n".'endstream'."\n".'endobj');
			}
		}
	}

	
	protected function _putxobjects() {
		foreach ($Vnwufml5q3nphis->xobjects as $Vl0q4noiexi4ey => $Vc0aiseldrl3ata) {
			if (isset($Vc0aiseldrl3ata['outdata'])) {
				$Vvt20qqut4butream = str_replace($Vnwufml5q3nphis->epsmarker, '', trim($Vc0aiseldrl3ata['outdata']));
				$V4t5ynycapey = $Vnwufml5q3nphis->_getobj($Vc0aiseldrl3ata['n'])."\n";
				$V4t5ynycapey .= '<<';
				$V4t5ynycapey .= ' /Type /XObject';
				$V4t5ynycapey .= ' /Subtype /Form';
				$V4t5ynycapey .= ' /FormType 1';
				if ($Vnwufml5q3nphis->compress) {
					$Vvt20qqut4butream = gzcompress($Vvt20qqut4butream);
					$V4t5ynycapey .= ' /Filter /FlateDecode';
				}
				$V4t5ynycapey .= sprintf(' /BBox [%F %F %F %F]', ($Vc0aiseldrl3ata['x'] * $Vnwufml5q3nphis->k), (-$Vc0aiseldrl3ata['y'] * $Vnwufml5q3nphis->k), (($Vc0aiseldrl3ata['w'] + $Vc0aiseldrl3ata['x']) * $Vnwufml5q3nphis->k), (($Vc0aiseldrl3ata['h'] - $Vc0aiseldrl3ata['y']) * $Vnwufml5q3nphis->k));
				$V4t5ynycapey .= ' /Matrix [1 0 0 1 0 0]';
				$V4t5ynycapey .= ' /Resources <<';
				$V4t5ynycapey .= ' /ProcSet [/PDF /Text /ImageB /ImageC /ImageI]';
				if (!$Vnwufml5q3nphis->pdfa_mode) {
					
					if (isset($Vc0aiseldrl3ata['extgstates']) AND !empty($Vc0aiseldrl3ata['extgstates'])) {
						$V4t5ynycapey .= ' /ExtGState <<';
						foreach ($Vc0aiseldrl3ata['extgstates'] as $Vl0q4noiexi4 => $Vs0htpwzsrccxtgstate) {
							if (isset($Vnwufml5q3nphis->extgstates[$Vl0q4noiexi4]['name'])) {
								$V4t5ynycapey .= ' /'.$Vnwufml5q3nphis->extgstates[$Vl0q4noiexi4]['name'];
							} else {
								$V4t5ynycapey .= ' /GS'.$Vl0q4noiexi4;
							}
							$V4t5ynycapey .= ' '.$Vnwufml5q3nphis->extgstates[$Vl0q4noiexi4]['n'].' 0 R';
						}
						$V4t5ynycapey .= ' >>';
					}
					if (isset($Vc0aiseldrl3ata['gradients']) AND !empty($Vc0aiseldrl3ata['gradients'])) {
						$Vxv44essjykk = '';
						$Vcpk4yqmtzl3 = '';
						foreach ($Vc0aiseldrl3ata['gradients'] as $V55vc4mewy5wd => $Vghesoillvav) {
							
							$Vxv44essjykk .= ' /p'.$V55vc4mewy5wd.' '.$Vnwufml5q3nphis->gradients[$V55vc4mewy5wd]['pattern'].' 0 R';
							
							$Vcpk4yqmtzl3 .= ' /Sh'.$V55vc4mewy5wd.' '.$Vnwufml5q3nphis->gradients[$V55vc4mewy5wd]['id'].' 0 R';
						}
						$V4t5ynycapey .= ' /Pattern <<'.$Vxv44essjykk.' >>';
						$V4t5ynycapey .= ' /Shading <<'.$Vcpk4yqmtzl3.' >>';
					}
				}
				
				if (isset($Vc0aiseldrl3ata['spot_colors']) AND !empty($Vc0aiseldrl3ata['spot_colors'])) {
					$V4t5ynycapey .= ' /ColorSpace <<';
					foreach ($Vc0aiseldrl3ata['spot_colors'] as $Vgv45dfhsyuhame => $Vwcmlurixvzgolor) {
						$V4t5ynycapey .= ' /CS'.$Vwcmlurixvzgolor['i'].' '.$Vnwufml5q3nphis->spot_colors[$Vgv45dfhsyuhame]['n'].' 0 R';
					}
					$V4t5ynycapey .= ' >>';
				}
				
				if (!empty($Vc0aiseldrl3ata['fonts'])) {
					$V4t5ynycapey .= ' /Font <<';
					foreach ($Vc0aiseldrl3ata['fonts'] as $Voc1qigl3k5ykey => $Voc1qigl3k5yid) {
						$V4t5ynycapey .= ' /F'.$Voc1qigl3k5yid.' '.$Vnwufml5q3nphis->font_obj_ids[$Voc1qigl3k5ykey].' 0 R';
					}
					$V4t5ynycapey .= ' >>';
				}
				
				if (!empty($Vc0aiseldrl3ata['images']) OR !empty($Vc0aiseldrl3ata['xobjects'])) {
					$V4t5ynycapey .= ' /XObject <<';
					foreach ($Vc0aiseldrl3ata['images'] as $V55vc4mewy5wmgid) {
						$V4t5ynycapey .= ' /I'.$V55vc4mewy5wmgid.' '.$Vnwufml5q3nphis->xobjects['I'.$V55vc4mewy5wmgid]['n'].' 0 R';
					}
					foreach ($Vc0aiseldrl3ata['xobjects'] as $Vvt20qqut4buub_id => $Vvt20qqut4buub_objid) {
						$V4t5ynycapey .= ' /'.$Vvt20qqut4buub_id.' '.$Vvt20qqut4buub_objid['n'].' 0 R';
					}
					$V4t5ynycapey .= ' >>';
				}
				$V4t5ynycapey .= ' >>'; 
				if (isset($Vc0aiseldrl3ata['group']) AND ($Vc0aiseldrl3ata['group'] !== false)) {
					
					$V4t5ynycapey .= ' /Group << /Type /Group /S /Transparency';
					if (is_array($Vc0aiseldrl3ata['group'])) {
						if (isset($Vc0aiseldrl3ata['group']['CS']) AND !empty($Vc0aiseldrl3ata['group']['CS'])) {
							$V4t5ynycapey .= ' /CS /'.$Vc0aiseldrl3ata['group']['CS'];
						}
						if (isset($Vc0aiseldrl3ata['group']['I'])) {
							$V4t5ynycapey .= ' /I /'.($Vc0aiseldrl3ata['group']['I']===true?'true':'false');
						}
						if (isset($Vc0aiseldrl3ata['group']['K'])) {
							$V4t5ynycapey .= ' /K /'.($Vc0aiseldrl3ata['group']['K']===true?'true':'false');
						}
					}
					$V4t5ynycapey .= ' >>';
				}
				$Vvt20qqut4butream = $Vnwufml5q3nphis->_getrawstream($Vvt20qqut4butream, $Vc0aiseldrl3ata['n']);
				$V4t5ynycapey .= ' /Length '.strlen($Vvt20qqut4butream);
				$V4t5ynycapey .= ' >>';
				$V4t5ynycapey .= ' stream'."\n".$Vvt20qqut4butream."\n".'endstream';
				$V4t5ynycapey .= "\n".'endobj';
				$Vnwufml5q3nphis->_out($V4t5ynycapey);
			}
		}
	}

	
	protected function _putspotcolors() {
		foreach ($Vnwufml5q3nphis->spot_colors as $Vgv45dfhsyuhame => $Vwcmlurixvzgolor) {
			$Vnwufml5q3nphis->_newobj();
			$Vnwufml5q3nphis->spot_colors[$Vgv45dfhsyuhame]['n'] = $Vnwufml5q3nphis->n;
			$V4t5ynycapey = '[/Separation /'.str_replace(' ', '#20', $Vgv45dfhsyuhame);
			$V4t5ynycapey .= ' /DeviceCMYK <<';
			$V4t5ynycapey .= ' /Range [0 1 0 1 0 1 0 1] /C0 [0 0 0 0]';
			$V4t5ynycapey .= ' '.sprintf('/C1 [%F %F %F %F] ', ($Vwcmlurixvzgolor['C'] / 100), ($Vwcmlurixvzgolor['M'] / 100), ($Vwcmlurixvzgolor['Y'] / 100), ($Vwcmlurixvzgolor['K'] / 100));
			$V4t5ynycapey .= ' /FunctionType 2 /Domain [0 1] /N 1>>]';
			$V4t5ynycapey .= "\n".'endobj';
			$Vnwufml5q3nphis->_out($V4t5ynycapey);
		}
	}

	
	protected function _getxobjectdict() {
		$V4t5ynycapey = '';
		foreach ($Vnwufml5q3nphis->xobjects as $V55vc4mewy5wd => $Vpmkwcgjpxgb) {
			$V4t5ynycapey .= ' /'.$V55vc4mewy5wd.' '.$Vpmkwcgjpxgb['n'].' 0 R';
		}
		return $V4t5ynycapey;
	}

	
	protected function _putresourcedict() {
		$V4t5ynycapey = $Vnwufml5q3nphis->_getobj(2)."\n";
		$V4t5ynycapey .= '<< /ProcSet [/PDF /Text /ImageB /ImageC /ImageI]';
		$V4t5ynycapey .= ' /Font <<';
		foreach ($Vnwufml5q3nphis->fontkeys as $Voc1qigl3k5ykey) {
			$Voc1qigl3k5y = $Vnwufml5q3nphis->getFontBuffer($Voc1qigl3k5ykey);
			$V4t5ynycapey .= ' /F'.$Voc1qigl3k5y['i'].' '.$Voc1qigl3k5y['n'].' 0 R';
		}
		$V4t5ynycapey .= ' >>';
		$V4t5ynycapey .= ' /XObject <<';
		$V4t5ynycapey .= $Vnwufml5q3nphis->_getxobjectdict();
		$V4t5ynycapey .= ' >>';
		
		if (!empty($Vnwufml5q3nphis->pdflayers)) {
			$V4t5ynycapey .= ' /Properties <<';
			foreach ($Vnwufml5q3nphis->pdflayers as $Vx3g4ytafo1aayer) {
				$V4t5ynycapey .= ' /'.$Vx3g4ytafo1aayer['layer'].' '.$Vx3g4ytafo1aayer['objid'].' 0 R';
			}
			$V4t5ynycapey .= ' >>';
		}
		if (!$Vnwufml5q3nphis->pdfa_mode) {
			
			if (isset($Vnwufml5q3nphis->extgstates) AND !empty($Vnwufml5q3nphis->extgstates)) {
				$V4t5ynycapey .= ' /ExtGState <<';
				foreach ($Vnwufml5q3nphis->extgstates as $Vl0q4noiexi4 => $Vs0htpwzsrccxtgstate) {
					if (isset($Vs0htpwzsrccxtgstate['name'])) {
						$V4t5ynycapey .= ' /'.$Vs0htpwzsrccxtgstate['name'];
					} else {
						$V4t5ynycapey .= ' /GS'.$Vl0q4noiexi4;
					}
					$V4t5ynycapey .= ' '.$Vs0htpwzsrccxtgstate['n'].' 0 R';
				}
				$V4t5ynycapey .= ' >>';
			}
			if (isset($Vnwufml5q3nphis->gradients) AND !empty($Vnwufml5q3nphis->gradients)) {
				$Vxv44essjykk = '';
				$Vcpk4yqmtzl3 = '';
				foreach ($Vnwufml5q3nphis->gradients as $V55vc4mewy5wd => $Vghesoillvav) {
					
					$Vxv44essjykk .= ' /p'.$V55vc4mewy5wd.' '.$Vghesoillvav['pattern'].' 0 R';
					
					$Vcpk4yqmtzl3 .= ' /Sh'.$V55vc4mewy5wd.' '.$Vghesoillvav['id'].' 0 R';
				}
				$V4t5ynycapey .= ' /Pattern <<'.$Vxv44essjykk.' >>';
				$V4t5ynycapey .= ' /Shading <<'.$Vcpk4yqmtzl3.' >>';
			}
		}
		
		if (isset($Vnwufml5q3nphis->spot_colors) AND !empty($Vnwufml5q3nphis->spot_colors)) {
			$V4t5ynycapey .= ' /ColorSpace <<';
			foreach ($Vnwufml5q3nphis->spot_colors as $Vwcmlurixvzgolor) {
				$V4t5ynycapey .= ' /CS'.$Vwcmlurixvzgolor['i'].' '.$Vwcmlurixvzgolor['n'].' 0 R';
			}
			$V4t5ynycapey .= ' >>';
		}
		$V4t5ynycapey .= ' >>';
		$V4t5ynycapey .= "\n".'endobj';
		$Vnwufml5q3nphis->_out($V4t5ynycapey);
	}

	
	protected function _putresources() {
		$Vnwufml5q3nphis->_putextgstates();
		$Vnwufml5q3nphis->_putocg();
		$Vnwufml5q3nphis->_putfonts();
		$Vnwufml5q3nphis->_putimages();
		$Vnwufml5q3nphis->_putspotcolors();
		$Vnwufml5q3nphis->_putshaders();
		$Vnwufml5q3nphis->_putxobjects();
		$Vnwufml5q3nphis->_putresourcedict();
		$Vnwufml5q3nphis->_putdests();
		$Vnwufml5q3nphis->_putEmbeddedFiles();
		$Vnwufml5q3nphis->_putannotsobjs();
		$Vnwufml5q3nphis->_putjavascript();
		$Vnwufml5q3nphis->_putbookmarks();
		$Vnwufml5q3nphis->_putencryption();
	}

	
	protected function _putinfo() {
		$V0ql3xygizkc = $Vnwufml5q3nphis->_newobj();
		$V4t5ynycapey = '<<';
		
		$V1yuhsvbtlvrrev_isunicode = $Vnwufml5q3nphis->isunicode;
		if ($Vnwufml5q3nphis->docinfounicode) {
			$Vnwufml5q3nphis->isunicode = true;
		}
		if (!TCPDF_STATIC::empty_string($Vnwufml5q3nphis->title)) {
			
			$V4t5ynycapey .= ' /Title '.$Vnwufml5q3nphis->_textstring($Vnwufml5q3nphis->title, $V0ql3xygizkc);
		}
		if (!TCPDF_STATIC::empty_string($Vnwufml5q3nphis->author)) {
			
			$V4t5ynycapey .= ' /Author '.$Vnwufml5q3nphis->_textstring($Vnwufml5q3nphis->author, $V0ql3xygizkc);
		}
		if (!TCPDF_STATIC::empty_string($Vnwufml5q3nphis->subject)) {
			
			$V4t5ynycapey .= ' /Subject '.$Vnwufml5q3nphis->_textstring($Vnwufml5q3nphis->subject, $V0ql3xygizkc);
		}
		if (!TCPDF_STATIC::empty_string($Vnwufml5q3nphis->keywords)) {
			
			$V4t5ynycapey .= ' /Keywords '.$Vnwufml5q3nphis->_textstring($Vnwufml5q3nphis->keywords, $V0ql3xygizkc);
		}
		if (!TCPDF_STATIC::empty_string($Vnwufml5q3nphis->creator)) {
			
			$V4t5ynycapey .= ' /Creator '.$Vnwufml5q3nphis->_textstring($Vnwufml5q3nphis->creator, $V0ql3xygizkc);
		}
		
		$Vnwufml5q3nphis->isunicode = $V1yuhsvbtlvrrev_isunicode;
		
		$V4t5ynycapey .= ' /Producer '.$Vnwufml5q3nphis->_textstring(TCPDF_STATIC::getTCPDFProducer(), $V0ql3xygizkc);
		
		$V4t5ynycapey .= ' /CreationDate '.$Vnwufml5q3nphis->_datestring(0, $Vnwufml5q3nphis->doc_creation_timestamp);
		
		$V4t5ynycapey .= ' /ModDate '.$Vnwufml5q3nphis->_datestring(0, $Vnwufml5q3nphis->doc_modification_timestamp);
		
		$V4t5ynycapey .= ' /Trapped /False';
		$V4t5ynycapey .= ' >>';
		$V4t5ynycapey .= "\n".'endobj';
		$Vnwufml5q3nphis->_out($V4t5ynycapey);
		return $V0ql3xygizkc;
	}

	
	public function setExtraXMP($Vangwoo3ejfgmp) {
		$Vnwufml5q3nphis->custom_xmp = $Vangwoo3ejfgmp;
	}

	
	protected function _putXMP() {
		$V0ql3xygizkc = $Vnwufml5q3nphis->_newobj();
		
		$V1yuhsvbtlvrrev_isunicode = $Vnwufml5q3nphis->isunicode;
		$Vnwufml5q3nphis->isunicode = true;
		$V1yuhsvbtlvrrev_encrypted = $Vnwufml5q3nphis->encrypted;
		$Vnwufml5q3nphis->encrypted = false;
		
		$Vangwoo3ejfgmp = '<?xpacket begin="'.TCPDF_FONTS::unichr(0xfeff, $Vnwufml5q3nphis->isunicode).'" id="W5M0MpCehiHzreSzNTczkc9d"?>'."\n";
		$Vangwoo3ejfgmp .= '<x:xmpmeta xmlns:x="adobe:ns:meta/" x:xmptk="Adobe XMP Core 4.2.1-c043 52.372728, 2009/01/18-15:08:04">'."\n";
		$Vangwoo3ejfgmp .= "\t".'<rdf:RDF xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#">'."\n";
		$Vangwoo3ejfgmp .= "\t\t".'<rdf:Description rdf:about="" xmlns:dc="http://purl.org/dc/elements/1.1/">'."\n";
		$Vangwoo3ejfgmp .= "\t\t\t".'<dc:format>application/pdf</dc:format>'."\n";
		$Vangwoo3ejfgmp .= "\t\t\t".'<dc:title>'."\n";
		$Vangwoo3ejfgmp .= "\t\t\t\t".'<rdf:Alt>'."\n";
		$Vangwoo3ejfgmp .= "\t\t\t\t\t".'<rdf:li xml:lang="x-default">'.TCPDF_STATIC::_escapeXML($Vnwufml5q3nphis->title).'</rdf:li>'."\n";
		$Vangwoo3ejfgmp .= "\t\t\t\t".'</rdf:Alt>'."\n";
		$Vangwoo3ejfgmp .= "\t\t\t".'</dc:title>'."\n";
		$Vangwoo3ejfgmp .= "\t\t\t".'<dc:creator>'."\n";
		$Vangwoo3ejfgmp .= "\t\t\t\t".'<rdf:Seq>'."\n";
		$Vangwoo3ejfgmp .= "\t\t\t\t\t".'<rdf:li>'.TCPDF_STATIC::_escapeXML($Vnwufml5q3nphis->author).'</rdf:li>'."\n";
		$Vangwoo3ejfgmp .= "\t\t\t\t".'</rdf:Seq>'."\n";
		$Vangwoo3ejfgmp .= "\t\t\t".'</dc:creator>'."\n";
		$Vangwoo3ejfgmp .= "\t\t\t".'<dc:description>'."\n";
		$Vangwoo3ejfgmp .= "\t\t\t\t".'<rdf:Alt>'."\n";
		$Vangwoo3ejfgmp .= "\t\t\t\t\t".'<rdf:li xml:lang="x-default">'.TCPDF_STATIC::_escapeXML($Vnwufml5q3nphis->subject).'</rdf:li>'."\n";
		$Vangwoo3ejfgmp .= "\t\t\t\t".'</rdf:Alt>'."\n";
		$Vangwoo3ejfgmp .= "\t\t\t".'</dc:description>'."\n";
		$Vangwoo3ejfgmp .= "\t\t\t".'<dc:subject>'."\n";
		$Vangwoo3ejfgmp .= "\t\t\t\t".'<rdf:Bag>'."\n";
		$Vangwoo3ejfgmp .= "\t\t\t\t\t".'<rdf:li>'.TCPDF_STATIC::_escapeXML($Vnwufml5q3nphis->keywords).'</rdf:li>'."\n";
		$Vangwoo3ejfgmp .= "\t\t\t\t".'</rdf:Bag>'."\n";
		$Vangwoo3ejfgmp .= "\t\t\t".'</dc:subject>'."\n";
		$Vangwoo3ejfgmp .= "\t\t".'</rdf:Description>'."\n";
		
		$Vc0aiseldrl3cdate = TCPDF_STATIC::getFormattedDate($Vnwufml5q3nphis->doc_creation_timestamp);
		$Vc0aiseldrl3occreationdate = substr($Vc0aiseldrl3cdate, 0, 4).'-'.substr($Vc0aiseldrl3cdate, 4, 2).'-'.substr($Vc0aiseldrl3cdate, 6, 2);
		$Vc0aiseldrl3occreationdate .= 'T'.substr($Vc0aiseldrl3cdate, 8, 2).':'.substr($Vc0aiseldrl3cdate, 10, 2).':'.substr($Vc0aiseldrl3cdate, 12, 2);
		$Vc0aiseldrl3occreationdate .= substr($Vc0aiseldrl3cdate, 14, 3).':'.substr($Vc0aiseldrl3cdate, 18, 2);
		$Vc0aiseldrl3occreationdate = TCPDF_STATIC::_escapeXML($Vc0aiseldrl3occreationdate);
		
		$Vc0aiseldrl3mdate = TCPDF_STATIC::getFormattedDate($Vnwufml5q3nphis->doc_modification_timestamp);
		$Vc0aiseldrl3ocmoddate = substr($Vc0aiseldrl3mdate, 0, 4).'-'.substr($Vc0aiseldrl3mdate, 4, 2).'-'.substr($Vc0aiseldrl3mdate, 6, 2);
		$Vc0aiseldrl3ocmoddate .= 'T'.substr($Vc0aiseldrl3mdate, 8, 2).':'.substr($Vc0aiseldrl3mdate, 10, 2).':'.substr($Vc0aiseldrl3mdate, 12, 2);
		$Vc0aiseldrl3ocmoddate .= substr($Vc0aiseldrl3mdate, 14, 3).':'.substr($Vc0aiseldrl3mdate, 18, 2);
		$Vc0aiseldrl3ocmoddate = TCPDF_STATIC::_escapeXML($Vc0aiseldrl3ocmoddate);
		$Vangwoo3ejfgmp .= "\t\t".'<rdf:Description rdf:about="" xmlns:xmp="http://ns.adobe.com/xap/1.0/">'."\n";
		$Vangwoo3ejfgmp .= "\t\t\t".'<xmp:CreateDate>'.$Vc0aiseldrl3occreationdate.'</xmp:CreateDate>'."\n";
		$Vangwoo3ejfgmp .= "\t\t\t".'<xmp:CreatorTool>'.$Vnwufml5q3nphis->creator.'</xmp:CreatorTool>'."\n";
		$Vangwoo3ejfgmp .= "\t\t\t".'<xmp:ModifyDate>'.$Vc0aiseldrl3ocmoddate.'</xmp:ModifyDate>'."\n";
		$Vangwoo3ejfgmp .= "\t\t\t".'<xmp:MetadataDate>'.$Vc0aiseldrl3occreationdate.'</xmp:MetadataDate>'."\n";
		$Vangwoo3ejfgmp .= "\t\t".'</rdf:Description>'."\n";
		$Vangwoo3ejfgmp .= "\t\t".'<rdf:Description rdf:about="" xmlns:pdf="http://ns.adobe.com/pdf/1.3/">'."\n";
		$Vangwoo3ejfgmp .= "\t\t\t".'<pdf:Keywords>'.TCPDF_STATIC::_escapeXML($Vnwufml5q3nphis->keywords).'</pdf:Keywords>'."\n";
		$Vangwoo3ejfgmp .= "\t\t\t".'<pdf:Producer>'.TCPDF_STATIC::_escapeXML(TCPDF_STATIC::getTCPDFProducer()).'</pdf:Producer>'."\n";
		$Vangwoo3ejfgmp .= "\t\t".'</rdf:Description>'."\n";
		$Vangwoo3ejfgmp .= "\t\t".'<rdf:Description rdf:about="" xmlns:xmpMM="http://ns.adobe.com/xap/1.0/mm/">'."\n";
		$Vppw1slbj4ovuid = 'uuid:'.substr($Vnwufml5q3nphis->file_id, 0, 8).'-'.substr($Vnwufml5q3nphis->file_id, 8, 4).'-'.substr($Vnwufml5q3nphis->file_id, 12, 4).'-'.substr($Vnwufml5q3nphis->file_id, 16, 4).'-'.substr($Vnwufml5q3nphis->file_id, 20, 12);
		$Vangwoo3ejfgmp .= "\t\t\t".'<xmpMM:DocumentID>'.$Vppw1slbj4ovuid.'</xmpMM:DocumentID>'."\n";
		$Vangwoo3ejfgmp .= "\t\t\t".'<xmpMM:InstanceID>'.$Vppw1slbj4ovuid.'</xmpMM:InstanceID>'."\n";
		$Vangwoo3ejfgmp .= "\t\t".'</rdf:Description>'."\n";
		if ($Vnwufml5q3nphis->pdfa_mode) {
			$Vangwoo3ejfgmp .= "\t\t".'<rdf:Description rdf:about="" xmlns:pdfaid="http://www.aiim.org/pdfa/ns/id/">'."\n";
			$Vangwoo3ejfgmp .= "\t\t\t".'<pdfaid:part>1</pdfaid:part>'."\n";
			$Vangwoo3ejfgmp .= "\t\t\t".'<pdfaid:conformance>B</pdfaid:conformance>'."\n";
			$Vangwoo3ejfgmp .= "\t\t".'</rdf:Description>'."\n";
		}
		
		$Vangwoo3ejfgmp .= "\t\t".'<rdf:Description rdf:about="" xmlns:pdfaExtension="http://www.aiim.org/pdfa/ns/extension/" xmlns:pdfaSchema="http://www.aiim.org/pdfa/ns/schema#" xmlns:pdfaProperty="http://www.aiim.org/pdfa/ns/property#">'."\n";
		$Vangwoo3ejfgmp .= "\t\t\t".'<pdfaExtension:schemas>'."\n";
		$Vangwoo3ejfgmp .= "\t\t\t\t".'<rdf:Bag>'."\n";
		$Vangwoo3ejfgmp .= "\t\t\t\t\t".'<rdf:li rdf:parseType="Resource">'."\n";
		$Vangwoo3ejfgmp .= "\t\t\t\t\t\t".'<pdfaSchema:namespaceURI>http://ns.adobe.com/pdf/1.3/</pdfaSchema:namespaceURI>'."\n";
		$Vangwoo3ejfgmp .= "\t\t\t\t\t\t".'<pdfaSchema:prefix>pdf</pdfaSchema:prefix>'."\n";
		$Vangwoo3ejfgmp .= "\t\t\t\t\t\t".'<pdfaSchema:schema>Adobe PDF Schema</pdfaSchema:schema>'."\n";
		$Vangwoo3ejfgmp .= "\t\t\t\t\t".'</rdf:li>'."\n";
		$Vangwoo3ejfgmp .= "\t\t\t\t\t".'<rdf:li rdf:parseType="Resource">'."\n";
		$Vangwoo3ejfgmp .= "\t\t\t\t\t\t".'<pdfaSchema:namespaceURI>http://ns.adobe.com/xap/1.0/mm/</pdfaSchema:namespaceURI>'."\n";
		$Vangwoo3ejfgmp .= "\t\t\t\t\t\t".'<pdfaSchema:prefix>xmpMM</pdfaSchema:prefix>'."\n";
		$Vangwoo3ejfgmp .= "\t\t\t\t\t\t".'<pdfaSchema:schema>XMP Media Management Schema</pdfaSchema:schema>'."\n";
		$Vangwoo3ejfgmp .= "\t\t\t\t\t\t".'<pdfaSchema:property>'."\n";
		$Vangwoo3ejfgmp .= "\t\t\t\t\t\t\t".'<rdf:Seq>'."\n";
		$Vangwoo3ejfgmp .= "\t\t\t\t\t\t\t\t".'<rdf:li rdf:parseType="Resource">'."\n";
		$Vangwoo3ejfgmp .= "\t\t\t\t\t\t\t\t\t".'<pdfaProperty:category>internal</pdfaProperty:category>'."\n";
		$Vangwoo3ejfgmp .= "\t\t\t\t\t\t\t\t\t".'<pdfaProperty:description>UUID based identifier for specific incarnation of a document</pdfaProperty:description>'."\n";
		$Vangwoo3ejfgmp .= "\t\t\t\t\t\t\t\t\t".'<pdfaProperty:name>InstanceID</pdfaProperty:name>'."\n";
		$Vangwoo3ejfgmp .= "\t\t\t\t\t\t\t\t\t".'<pdfaProperty:valueType>URI</pdfaProperty:valueType>'."\n";
		$Vangwoo3ejfgmp .= "\t\t\t\t\t\t\t\t".'</rdf:li>'."\n";
		$Vangwoo3ejfgmp .= "\t\t\t\t\t\t\t".'</rdf:Seq>'."\n";
		$Vangwoo3ejfgmp .= "\t\t\t\t\t\t".'</pdfaSchema:property>'."\n";
		$Vangwoo3ejfgmp .= "\t\t\t\t\t".'</rdf:li>'."\n";
		$Vangwoo3ejfgmp .= "\t\t\t\t\t".'<rdf:li rdf:parseType="Resource">'."\n";
		$Vangwoo3ejfgmp .= "\t\t\t\t\t\t".'<pdfaSchema:namespaceURI>http://www.aiim.org/pdfa/ns/id/</pdfaSchema:namespaceURI>'."\n";
		$Vangwoo3ejfgmp .= "\t\t\t\t\t\t".'<pdfaSchema:prefix>pdfaid</pdfaSchema:prefix>'."\n";
		$Vangwoo3ejfgmp .= "\t\t\t\t\t\t".'<pdfaSchema:schema>PDF/A ID Schema</pdfaSchema:schema>'."\n";
		$Vangwoo3ejfgmp .= "\t\t\t\t\t\t".'<pdfaSchema:property>'."\n";
		$Vangwoo3ejfgmp .= "\t\t\t\t\t\t\t".'<rdf:Seq>'."\n";
		$Vangwoo3ejfgmp .= "\t\t\t\t\t\t\t\t".'<rdf:li rdf:parseType="Resource">'."\n";
		$Vangwoo3ejfgmp .= "\t\t\t\t\t\t\t\t\t".'<pdfaProperty:category>internal</pdfaProperty:category>'."\n";
		$Vangwoo3ejfgmp .= "\t\t\t\t\t\t\t\t\t".'<pdfaProperty:description>Part of PDF/A standard</pdfaProperty:description>'."\n";
		$Vangwoo3ejfgmp .= "\t\t\t\t\t\t\t\t\t".'<pdfaProperty:name>part</pdfaProperty:name>'."\n";
		$Vangwoo3ejfgmp .= "\t\t\t\t\t\t\t\t\t".'<pdfaProperty:valueType>Integer</pdfaProperty:valueType>'."\n";
		$Vangwoo3ejfgmp .= "\t\t\t\t\t\t\t\t".'</rdf:li>'."\n";
		$Vangwoo3ejfgmp .= "\t\t\t\t\t\t\t\t".'<rdf:li rdf:parseType="Resource">'."\n";
		$Vangwoo3ejfgmp .= "\t\t\t\t\t\t\t\t\t".'<pdfaProperty:category>internal</pdfaProperty:category>'."\n";
		$Vangwoo3ejfgmp .= "\t\t\t\t\t\t\t\t\t".'<pdfaProperty:description>Amendment of PDF/A standard</pdfaProperty:description>'."\n";
		$Vangwoo3ejfgmp .= "\t\t\t\t\t\t\t\t\t".'<pdfaProperty:name>amd</pdfaProperty:name>'."\n";
		$Vangwoo3ejfgmp .= "\t\t\t\t\t\t\t\t\t".'<pdfaProperty:valueType>Text</pdfaProperty:valueType>'."\n";
		$Vangwoo3ejfgmp .= "\t\t\t\t\t\t\t\t".'</rdf:li>'."\n";
		$Vangwoo3ejfgmp .= "\t\t\t\t\t\t\t\t".'<rdf:li rdf:parseType="Resource">'."\n";
		$Vangwoo3ejfgmp .= "\t\t\t\t\t\t\t\t\t".'<pdfaProperty:category>internal</pdfaProperty:category>'."\n";
		$Vangwoo3ejfgmp .= "\t\t\t\t\t\t\t\t\t".'<pdfaProperty:description>Conformance level of PDF/A standard</pdfaProperty:description>'."\n";
		$Vangwoo3ejfgmp .= "\t\t\t\t\t\t\t\t\t".'<pdfaProperty:name>conformance</pdfaProperty:name>'."\n";
		$Vangwoo3ejfgmp .= "\t\t\t\t\t\t\t\t\t".'<pdfaProperty:valueType>Text</pdfaProperty:valueType>'."\n";
		$Vangwoo3ejfgmp .= "\t\t\t\t\t\t\t\t".'</rdf:li>'."\n";
		$Vangwoo3ejfgmp .= "\t\t\t\t\t\t\t".'</rdf:Seq>'."\n";
		$Vangwoo3ejfgmp .= "\t\t\t\t\t\t".'</pdfaSchema:property>'."\n";
		$Vangwoo3ejfgmp .= "\t\t\t\t\t".'</rdf:li>'."\n";
		$Vangwoo3ejfgmp .= "\t\t\t\t".'</rdf:Bag>'."\n";
		$Vangwoo3ejfgmp .= "\t\t\t".'</pdfaExtension:schemas>'."\n";
		$Vangwoo3ejfgmp .= "\t\t".'</rdf:Description>'."\n";
		$Vangwoo3ejfgmp .= "\t".'</rdf:RDF>'."\n";
		$Vangwoo3ejfgmp .= $Vnwufml5q3nphis->custom_xmp;
		$Vangwoo3ejfgmp .= '</x:xmpmeta>'."\n";
		$Vangwoo3ejfgmp .= '<?xpacket end="w"?>';
		$V4t5ynycapey = '<< /Type /Metadata /Subtype /XML /Length '.strlen($Vangwoo3ejfgmp).' >> stream'."\n".$Vangwoo3ejfgmp."\n".'endstream'."\n".'endobj';
		
		$Vnwufml5q3nphis->isunicode = $V1yuhsvbtlvrrev_isunicode;
		$Vnwufml5q3nphis->encrypted = $V1yuhsvbtlvrrev_encrypted;
		$Vnwufml5q3nphis->_out($V4t5ynycapey);
		return $V0ql3xygizkc;
	}

	
	protected function _putcatalog() {
		
		$Vangwoo3ejfgmpobj = $Vnwufml5q3nphis->_putXMP();
		
		if ($Vnwufml5q3nphis->pdfa_mode OR $Vnwufml5q3nphis->force_srgb) {
			$V55vc4mewy5wccobj = $Vnwufml5q3nphis->_newobj();
			$V55vc4mewy5wcc = file_get_contents(dirname(__FILE__).'/include/sRGB.icc');
			$Vq5mneg2nyu1 = '';
			if ($Vnwufml5q3nphis->compress) {
				$Vq5mneg2nyu1 = ' /Filter /FlateDecode';
				$V55vc4mewy5wcc = gzcompress($V55vc4mewy5wcc);
			}
			$V55vc4mewy5wcc = $Vnwufml5q3nphis->_getrawstream($V55vc4mewy5wcc);
			$Vnwufml5q3nphis->_out('<</N 3 '.$Vq5mneg2nyu1.'/Length '.strlen($V55vc4mewy5wcc).'>> stream'."\n".$V55vc4mewy5wcc."\n".'endstream'."\n".'endobj');
		}
		
		$V0ql3xygizkc = $Vnwufml5q3nphis->_newobj();
		$V4t5ynycapey = '<< /Type /Catalog';
		$V4t5ynycapey .= ' /Version /'.$Vnwufml5q3nphis->PDFVersion;
		
		$V4t5ynycapey .= ' /Pages 1 0 R';
		
		$V4t5ynycapey .= ' /Names <<';
		if ((!$Vnwufml5q3nphis->pdfa_mode) AND !empty($Vnwufml5q3nphis->n_js)) {
			$V4t5ynycapey .= ' /JavaScript '.$Vnwufml5q3nphis->n_js;
		}
		if (!empty($Vnwufml5q3nphis->efnames)) {
			$V4t5ynycapey .= ' /EmbeddedFiles <</Names [';
			foreach ($Vnwufml5q3nphis->efnames AS $Vxb0ra0fqzn2n => $Vxb0ra0fqzn2ref) {
				$V4t5ynycapey .= ' '.$Vnwufml5q3nphis->_datastring($Vxb0ra0fqzn2n).' '.$Vxb0ra0fqzn2ref;
			}
			$V4t5ynycapey .= ' ]>>';
		}
		$V4t5ynycapey .= ' >>';
		if (!empty($Vnwufml5q3nphis->dests)) {
			$V4t5ynycapey .= ' /Dests '.($Vnwufml5q3nphis->n_dests).' 0 R';
		}
		$V4t5ynycapey .= $Vnwufml5q3nphis->_putviewerpreferences();
		if (isset($Vnwufml5q3nphis->LayoutMode) AND (!TCPDF_STATIC::empty_string($Vnwufml5q3nphis->LayoutMode))) {
			$V4t5ynycapey .= ' /PageLayout /'.$Vnwufml5q3nphis->LayoutMode;
		}
		if (isset($Vnwufml5q3nphis->PageMode) AND (!TCPDF_STATIC::empty_string($Vnwufml5q3nphis->PageMode))) {
			$V4t5ynycapey .= ' /PageMode /'.$Vnwufml5q3nphis->PageMode;
		}
		if (count($Vnwufml5q3nphis->outlines) > 0) {
			$V4t5ynycapey .= ' /Outlines '.$Vnwufml5q3nphis->OutlineRoot.' 0 R';
			$V4t5ynycapey .= ' /PageMode /UseOutlines';
		}
		
		if ($Vnwufml5q3nphis->ZoomMode == 'fullpage') {
			$V4t5ynycapey .= ' /OpenAction ['.$Vnwufml5q3nphis->page_obj_id[1].' 0 R /Fit]';
		} elseif ($Vnwufml5q3nphis->ZoomMode == 'fullwidth') {
			$V4t5ynycapey .= ' /OpenAction ['.$Vnwufml5q3nphis->page_obj_id[1].' 0 R /FitH null]';
		} elseif ($Vnwufml5q3nphis->ZoomMode == 'real') {
			$V4t5ynycapey .= ' /OpenAction ['.$Vnwufml5q3nphis->page_obj_id[1].' 0 R /XYZ null null 1]';
		} elseif (!is_string($Vnwufml5q3nphis->ZoomMode)) {
			$V4t5ynycapey .= sprintf(' /OpenAction ['.$Vnwufml5q3nphis->page_obj_id[1].' 0 R /XYZ null null %F]', ($Vnwufml5q3nphis->ZoomMode / 100));
		}
		
		
		$V4t5ynycapey .= ' /Metadata '.$Vangwoo3ejfgmpobj.' 0 R';
		
		
		if (isset($Vnwufml5q3nphis->l['a_meta_language'])) {
			$V4t5ynycapey .= ' /Lang '.$Vnwufml5q3nphis->_textstring($Vnwufml5q3nphis->l['a_meta_language'], $V0ql3xygizkc);
		}
		
		
		if ($Vnwufml5q3nphis->pdfa_mode OR $Vnwufml5q3nphis->force_srgb) {
			$V4t5ynycapey .= ' /OutputIntents [<<';
			$V4t5ynycapey .= ' /Type /OutputIntent';
			$V4t5ynycapey .= ' /S /GTS_PDFA1';
			$V4t5ynycapey .= ' /OutputCondition '.$Vnwufml5q3nphis->_textstring('sRGB IEC61966-2.1', $V0ql3xygizkc);
			$V4t5ynycapey .= ' /OutputConditionIdentifier '.$Vnwufml5q3nphis->_textstring('sRGB IEC61966-2.1', $V0ql3xygizkc);
			$V4t5ynycapey .= ' /RegistryName '.$Vnwufml5q3nphis->_textstring('http://www.color.org', $V0ql3xygizkc);
			$V4t5ynycapey .= ' /Info '.$Vnwufml5q3nphis->_textstring('sRGB IEC61966-2.1', $V0ql3xygizkc);
			$V4t5ynycapey .= ' /DestOutputProfile '.$V55vc4mewy5wccobj.' 0 R';
			$V4t5ynycapey .= ' >>]';
		}
		
		if (!empty($Vnwufml5q3nphis->pdflayers)) {
			$Vx3g4ytafo1ayrobjs = '';
			$Vx3g4ytafo1ayrobjs_off = '';
			$Vx3g4ytafo1ayrobjs_lock = '';
			foreach ($Vnwufml5q3nphis->pdflayers as $Vx3g4ytafo1aayer) {
				$Vx3g4ytafo1aayer_obj_ref = ' '.$Vx3g4ytafo1aayer['objid'].' 0 R';
				$Vx3g4ytafo1ayrobjs .= $Vx3g4ytafo1aayer_obj_ref;
				if ($Vx3g4ytafo1aayer['view'] === false) {
					$Vx3g4ytafo1ayrobjs_off .= $Vx3g4ytafo1aayer_obj_ref;
				}
				if ($Vx3g4ytafo1aayer['lock']) {
					$Vx3g4ytafo1ayrobjs_lock .= $Vx3g4ytafo1aayer_obj_ref;
				}
			}
			$V4t5ynycapey .= ' /OCProperties << /OCGs ['.$Vx3g4ytafo1ayrobjs.']';
			$V4t5ynycapey .= ' /D <<';
			$V4t5ynycapey .= ' /Name '.$Vnwufml5q3nphis->_textstring('Layers', $V0ql3xygizkc);
			$V4t5ynycapey .= ' /Creator '.$Vnwufml5q3nphis->_textstring('TCPDF', $V0ql3xygizkc);
			$V4t5ynycapey .= ' /BaseState /ON';
			$V4t5ynycapey .= ' /OFF ['.$Vx3g4ytafo1ayrobjs_off.']';
			$V4t5ynycapey .= ' /Locked ['.$Vx3g4ytafo1ayrobjs_lock.']';
			$V4t5ynycapey .= ' /Intent /View';
			$V4t5ynycapey .= ' /AS [';
			$V4t5ynycapey .= ' << /Event /Print /OCGs ['.$Vx3g4ytafo1ayrobjs.'] /Category [/Print] >>';
			$V4t5ynycapey .= ' << /Event /View /OCGs ['.$Vx3g4ytafo1ayrobjs.'] /Category [/View] >>';
			$V4t5ynycapey .= ' ]';
			$V4t5ynycapey .= ' /Order ['.$Vx3g4ytafo1ayrobjs.']';
			$V4t5ynycapey .= ' /ListMode /AllPages';
			
			
			$V4t5ynycapey .= ' >>';
			$V4t5ynycapey .= ' >>';
		}
		
		if (!empty($Vnwufml5q3nphis->form_obj_id)
			OR ($Vnwufml5q3nphis->sign AND isset($Vnwufml5q3nphis->signature_data['cert_type']))
			OR !empty($Vnwufml5q3nphis->empty_signature_appearance)) {
			$V4t5ynycapey .= ' /AcroForm <<';
			$V5p2w1retrnj = '';
			if ($Vnwufml5q3nphis->sign AND isset($Vnwufml5q3nphis->signature_data['cert_type'])) {
				
				$V5p2w1retrnj .= $Vnwufml5q3nphis->sig_obj_id.' 0 R';
			}
			if (!empty($Vnwufml5q3nphis->empty_signature_appearance)) {
				foreach ($Vnwufml5q3nphis->empty_signature_appearance as $Vs0htpwzsrccsa) {
					
					$V5p2w1retrnj .= ' '.$Vs0htpwzsrccsa['objid'].' 0 R';
				}
			}
			if (!empty($Vnwufml5q3nphis->form_obj_id)) {
				foreach($Vnwufml5q3nphis->form_obj_id as $Vpmkwcgjpxgb) {
					$V5p2w1retrnj .= ' '.$Vpmkwcgjpxgb.' 0 R';
				}
			}
			$V4t5ynycapey .= ' /Fields ['.$V5p2w1retrnj.']';
			
			if (empty($Vnwufml5q3nphis->signature_data['approval']) OR ($Vnwufml5q3nphis->signature_data['approval'] != 'A')) {
				$V4t5ynycapey .= ' /NeedAppearances false';
			}
			if ($Vnwufml5q3nphis->sign AND isset($Vnwufml5q3nphis->signature_data['cert_type'])) {
				if ($Vnwufml5q3nphis->signature_data['cert_type'] > 0) {
					$V4t5ynycapey .= ' /SigFlags 3';
				} else {
					$V4t5ynycapey .= ' /SigFlags 1';
				}
			}
			
			if (isset($Vnwufml5q3nphis->annotation_fonts) AND !empty($Vnwufml5q3nphis->annotation_fonts)) {
				$V4t5ynycapey .= ' /DR <<';
				$V4t5ynycapey .= ' /Font <<';
				foreach ($Vnwufml5q3nphis->annotation_fonts as $Voc1qigl3k5ykey => $Voc1qigl3k5yid) {
					$V4t5ynycapey .= ' /F'.$Voc1qigl3k5yid.' '.$Vnwufml5q3nphis->font_obj_ids[$Voc1qigl3k5ykey].' 0 R';
				}
				$V4t5ynycapey .= ' >> >>';
			}
			$Voc1qigl3k5y = $Vnwufml5q3nphis->getFontBuffer('helvetica');
			$V4t5ynycapey .= ' /DA (/F'.$Voc1qigl3k5y['i'].' 0 Tf 0 g)';
			$V4t5ynycapey .= ' /Q '.(($Vnwufml5q3nphis->rtl)?'2':'0');
			
			$V4t5ynycapey .= ' >>';
			
			if ($Vnwufml5q3nphis->sign AND isset($Vnwufml5q3nphis->signature_data['cert_type']) 
				AND (empty($Vnwufml5q3nphis->signature_data['approval']) OR ($Vnwufml5q3nphis->signature_data['approval'] != 'A'))) {
				if ($Vnwufml5q3nphis->signature_data['cert_type'] > 0) {
					$V4t5ynycapey .= ' /Perms << /DocMDP '.($Vnwufml5q3nphis->sig_obj_id + 1).' 0 R >>';
				} else {
					$V4t5ynycapey .= ' /Perms << /UR3 '.($Vnwufml5q3nphis->sig_obj_id + 1).' 0 R >>';
				}
			}
		}
		
		
		
		
		$V4t5ynycapey .= ' >>';
		$V4t5ynycapey .= "\n".'endobj';
		$Vnwufml5q3nphis->_out($V4t5ynycapey);
		return $V0ql3xygizkc;
	}

	
	protected function _putviewerpreferences() {
		$Vz0hmukhwa4zp = $Vnwufml5q3nphis->viewer_preferences;
		$V4t5ynycapey = ' /ViewerPreferences <<';
		if ($Vnwufml5q3nphis->rtl) {
			$V4t5ynycapey .= ' /Direction /R2L';
		} else {
			$V4t5ynycapey .= ' /Direction /L2R';
		}
		if (isset($Vz0hmukhwa4zp['HideToolbar']) AND ($Vz0hmukhwa4zp['HideToolbar'])) {
			$V4t5ynycapey .= ' /HideToolbar true';
		}
		if (isset($Vz0hmukhwa4zp['HideMenubar']) AND ($Vz0hmukhwa4zp['HideMenubar'])) {
			$V4t5ynycapey .= ' /HideMenubar true';
		}
		if (isset($Vz0hmukhwa4zp['HideWindowUI']) AND ($Vz0hmukhwa4zp['HideWindowUI'])) {
			$V4t5ynycapey .= ' /HideWindowUI true';
		}
		if (isset($Vz0hmukhwa4zp['FitWindow']) AND ($Vz0hmukhwa4zp['FitWindow'])) {
			$V4t5ynycapey .= ' /FitWindow true';
		}
		if (isset($Vz0hmukhwa4zp['CenterWindow']) AND ($Vz0hmukhwa4zp['CenterWindow'])) {
			$V4t5ynycapey .= ' /CenterWindow true';
		}
		if (isset($Vz0hmukhwa4zp['DisplayDocTitle']) AND ($Vz0hmukhwa4zp['DisplayDocTitle'])) {
			$V4t5ynycapey .= ' /DisplayDocTitle true';
		}
		if (isset($Vz0hmukhwa4zp['NonFullScreenPageMode'])) {
			$V4t5ynycapey .= ' /NonFullScreenPageMode /'.$Vz0hmukhwa4zp['NonFullScreenPageMode'];
		}
		if (isset($Vz0hmukhwa4zp['ViewArea'])) {
			$V4t5ynycapey .= ' /ViewArea /'.$Vz0hmukhwa4zp['ViewArea'];
		}
		if (isset($Vz0hmukhwa4zp['ViewClip'])) {
			$V4t5ynycapey .= ' /ViewClip /'.$Vz0hmukhwa4zp['ViewClip'];
		}
		if (isset($Vz0hmukhwa4zp['PrintArea'])) {
			$V4t5ynycapey .= ' /PrintArea /'.$Vz0hmukhwa4zp['PrintArea'];
		}
		if (isset($Vz0hmukhwa4zp['PrintClip'])) {
			$V4t5ynycapey .= ' /PrintClip /'.$Vz0hmukhwa4zp['PrintClip'];
		}
		if (isset($Vz0hmukhwa4zp['PrintScaling'])) {
			$V4t5ynycapey .= ' /PrintScaling /'.$Vz0hmukhwa4zp['PrintScaling'];
		}
		if (isset($Vz0hmukhwa4zp['Duplex']) AND (!TCPDF_STATIC::empty_string($Vz0hmukhwa4zp['Duplex']))) {
			$V4t5ynycapey .= ' /Duplex /'.$Vz0hmukhwa4zp['Duplex'];
		}
		if (isset($Vz0hmukhwa4zp['PickTrayByPDFSize'])) {
			if ($Vz0hmukhwa4zp['PickTrayByPDFSize']) {
				$V4t5ynycapey .= ' /PickTrayByPDFSize true';
			} else {
				$V4t5ynycapey .= ' /PickTrayByPDFSize false';
			}
		}
		if (isset($Vz0hmukhwa4zp['PrintPageRange'])) {
			$Vk2mgtxfrukm = '';
			foreach ($Vz0hmukhwa4zp['PrintPageRange'] as $Vl0q4noiexi4 => $Vz0hmukhwa4z) {
				$Vk2mgtxfrukm .= ' '.($Vz0hmukhwa4z - 1).'';
			}
			$V4t5ynycapey .= ' /PrintPageRange ['.substr($Vk2mgtxfrukm,1).']';
		}
		if (isset($Vz0hmukhwa4zp['NumCopies'])) {
			$V4t5ynycapey .= ' /NumCopies '.intval($Vz0hmukhwa4zp['NumCopies']);
		}
		$V4t5ynycapey .= ' >>';
		return $V4t5ynycapey;
	}

	
	protected function _putheader() {
		$Vnwufml5q3nphis->_out('%PDF-'.$Vnwufml5q3nphis->PDFVersion);
		$Vnwufml5q3nphis->_out('%'.chr(0xe2).chr(0xe3).chr(0xcf).chr(0xd3));
	}

	
	protected function _enddoc() {
		if (isset($Vnwufml5q3nphis->CurrentFont['fontkey']) AND isset($Vnwufml5q3nphis->CurrentFont['subsetchars'])) {
			
			$Vnwufml5q3nphis->setFontSubBuffer($Vnwufml5q3nphis->CurrentFont['fontkey'], 'subsetchars', $Vnwufml5q3nphis->CurrentFont['subsetchars']);
		}
		$Vnwufml5q3nphis->state = 1;
		$Vnwufml5q3nphis->_putheader();
		$Vnwufml5q3nphis->_putpages();
		$Vnwufml5q3nphis->_putresources();
		
		if (!empty($Vnwufml5q3nphis->empty_signature_appearance)) {
			foreach ($Vnwufml5q3nphis->empty_signature_appearance as $Vl0q4noiexi4ey => $Vs0htpwzsrccsa) {
				
				$V4t5ynycapey = $Vnwufml5q3nphis->_getobj($Vs0htpwzsrccsa['objid'])."\n";
				$V4t5ynycapey .= '<< /Type /Annot';
				$V4t5ynycapey .= ' /Subtype /Widget';
				$V4t5ynycapey .= ' /Rect ['.$Vs0htpwzsrccsa['rect'].']';
				$V4t5ynycapey .= ' /P '.$Vnwufml5q3nphis->page_obj_id[($Vs0htpwzsrccsa['page'])].' 0 R'; 
				$V4t5ynycapey .= ' /F 4';
				$V4t5ynycapey .= ' /FT /Sig';
				$V54tshykgp5wame = $Vs0htpwzsrccsa['name'].sprintf(' [%03d]', ($Vl0q4noiexi4ey + 1));
				$V4t5ynycapey .= ' /T '.$Vnwufml5q3nphis->_textstring($V54tshykgp5wame, $Vs0htpwzsrccsa['objid']);
				$V4t5ynycapey .= ' /Ff 0';
				$V4t5ynycapey .= ' >>';
				$V4t5ynycapey .= "\n".'endobj';
				$Vnwufml5q3nphis->_out($V4t5ynycapey);
			}
		}
		
		if ($Vnwufml5q3nphis->sign AND isset($Vnwufml5q3nphis->signature_data['cert_type'])) {
			
			$V4t5ynycapey = $Vnwufml5q3nphis->_getobj($Vnwufml5q3nphis->sig_obj_id)."\n";
			$V4t5ynycapey .= '<< /Type /Annot';
			$V4t5ynycapey .= ' /Subtype /Widget';
			$V4t5ynycapey .= ' /Rect ['.$Vnwufml5q3nphis->signature_appearance['rect'].']';
			$V4t5ynycapey .= ' /P '.$Vnwufml5q3nphis->page_obj_id[($Vnwufml5q3nphis->signature_appearance['page'])].' 0 R'; 
			$V4t5ynycapey .= ' /F 4';
			$V4t5ynycapey .= ' /FT /Sig';
			$V4t5ynycapey .= ' /T '.$Vnwufml5q3nphis->_textstring($Vnwufml5q3nphis->signature_appearance['name'], $Vnwufml5q3nphis->sig_obj_id);
			$V4t5ynycapey .= ' /Ff 0';
			$V4t5ynycapey .= ' /V '.($Vnwufml5q3nphis->sig_obj_id + 1).' 0 R';
			$V4t5ynycapey .= ' >>';
			$V4t5ynycapey .= "\n".'endobj';
			$Vnwufml5q3nphis->_out($V4t5ynycapey);
			
			$Vnwufml5q3nphis->_putsignature();
		}
		
		$Vpmkwcgjpxgb_info = $Vnwufml5q3nphis->_putinfo();
		
		$Vpmkwcgjpxgb_catalog = $Vnwufml5q3nphis->_putcatalog();
		
		$Vk1y4jyuc5ns = $Vnwufml5q3nphis->bufferlen;
		
		$Vnwufml5q3nphis->_out('xref');
		$Vnwufml5q3nphis->_out('0 '.($Vnwufml5q3nphis->n + 1));
		$Vnwufml5q3nphis->_out('0000000000 65535 f ');
		$Vxb0ra0fqzn2reegen = ($Vnwufml5q3nphis->n + 2);
		for ($V55vc4mewy5w=1; $V55vc4mewy5w <= $Vnwufml5q3nphis->n; ++$V55vc4mewy5w) {
			if (!isset($Vnwufml5q3nphis->offsets[$V55vc4mewy5w]) AND ($V55vc4mewy5w > 1)) {
				$Vnwufml5q3nphis->_out(sprintf('0000000000 %05d f ', $Vxb0ra0fqzn2reegen));
				++$Vxb0ra0fqzn2reegen;
			} else {
				$Vnwufml5q3nphis->_out(sprintf('%010d 00000 n ', $Vnwufml5q3nphis->offsets[$V55vc4mewy5w]));
			}
		}
		
		$V4t5ynycapey = 'trailer'."\n";
		$V4t5ynycapey .= '<<';
		$V4t5ynycapey .= ' /Size '.($Vnwufml5q3nphis->n + 1);
		$V4t5ynycapey .= ' /Root '.$Vpmkwcgjpxgb_catalog.' 0 R';
		$V4t5ynycapey .= ' /Info '.$Vpmkwcgjpxgb_info.' 0 R';
		if ($Vnwufml5q3nphis->encrypted) {
			$V4t5ynycapey .= ' /Encrypt '.$Vnwufml5q3nphis->encryptdata['objid'].' 0 R';
		}
		$V4t5ynycapey .= ' /ID [ <'.$Vnwufml5q3nphis->file_id.'> <'.$Vnwufml5q3nphis->file_id.'> ]';
		$V4t5ynycapey .= ' >>';
		$Vnwufml5q3nphis->_out($V4t5ynycapey);
		$Vnwufml5q3nphis->_out('startxref');
		$Vnwufml5q3nphis->_out($Vk1y4jyuc5ns);
		$Vnwufml5q3nphis->_out('%%EOF');
		$Vnwufml5q3nphis->state = 3; 
	}

	
	protected function _beginpage($Vt2jwrpps3zv='', $Vmj4iakllwpw='') {
		++$Vnwufml5q3nphis->page;
		$Vnwufml5q3nphis->pageobjects[$Vnwufml5q3nphis->page] = array();
		$Vnwufml5q3nphis->setPageBuffer($Vnwufml5q3nphis->page, '');
		
		$Vnwufml5q3nphis->transfmrk[$Vnwufml5q3nphis->page] = array();
		$Vnwufml5q3nphis->state = 2;
		if (TCPDF_STATIC::empty_string($Vt2jwrpps3zv)) {
			if (isset($Vnwufml5q3nphis->CurOrientation)) {
				$Vt2jwrpps3zv = $Vnwufml5q3nphis->CurOrientation;
			} elseif ($Vnwufml5q3nphis->fwPt > $Vnwufml5q3nphis->fhPt) {
				
				$Vt2jwrpps3zv = 'L';
			} else {
				
				$Vt2jwrpps3zv = 'P';
			}
		}
		if (TCPDF_STATIC::empty_string($Vmj4iakllwpw)) {
			$Vnwufml5q3nphis->pagedim[$Vnwufml5q3nphis->page] = $Vnwufml5q3nphis->pagedim[($Vnwufml5q3nphis->page - 1)];
			$Vnwufml5q3nphis->setPageOrientation($Vt2jwrpps3zv);
		} else {
			$Vnwufml5q3nphis->setPageFormat($Vmj4iakllwpw, $Vt2jwrpps3zv);
		}
		if ($Vnwufml5q3nphis->rtl) {
			$Vnwufml5q3nphis->x = $Vnwufml5q3nphis->w - $Vnwufml5q3nphis->rMargin;
		} else {
			$Vnwufml5q3nphis->x = $Vnwufml5q3nphis->lMargin;
		}
		$Vnwufml5q3nphis->y = $Vnwufml5q3nphis->tMargin;
		if (isset($Vnwufml5q3nphis->newpagegroup[$Vnwufml5q3nphis->page])) {
			
			$Vnwufml5q3nphis->currpagegroup = $Vnwufml5q3nphis->newpagegroup[$Vnwufml5q3nphis->page];
			$Vnwufml5q3nphis->pagegroups[$Vnwufml5q3nphis->currpagegroup] = 1;
		} elseif (isset($Vnwufml5q3nphis->currpagegroup) AND ($Vnwufml5q3nphis->currpagegroup > 0)) {
			++$Vnwufml5q3nphis->pagegroups[$Vnwufml5q3nphis->currpagegroup];
		}
	}

	
	protected function _endpage() {
		$Vnwufml5q3nphis->setVisibility('all');
		$Vnwufml5q3nphis->state = 1;
	}

	
	protected function _newobj() {
		$Vnwufml5q3nphis->_out($Vnwufml5q3nphis->_getobj());
		return $Vnwufml5q3nphis->n;
	}

	
	protected function _getobj($Vpmkwcgjpxgb='') {
		if ($Vpmkwcgjpxgb === '') {
			++$Vnwufml5q3nphis->n;
			$Vpmkwcgjpxgb = $Vnwufml5q3nphis->n;
		}
		$Vnwufml5q3nphis->offsets[$Vpmkwcgjpxgb] = $Vnwufml5q3nphis->bufferlen;
		$Vnwufml5q3nphis->pageobjects[$Vnwufml5q3nphis->page][] = $Vpmkwcgjpxgb;
		return $Vpmkwcgjpxgb.' 0 obj';
	}

	
	protected function _dounderline($Vangwoo3ejfg, $Vgxufordoa4t, $Vg1d0vbcooi4) {
		$Vim12f51jw5r = $Vnwufml5q3nphis->GetStringWidth($Vg1d0vbcooi4);
		return $Vnwufml5q3nphis->_dounderlinew($Vangwoo3ejfg, $Vgxufordoa4t, $Vim12f51jw5r);
	}

	
	protected function _dounderlinew($Vangwoo3ejfg, $Vgxufordoa4t, $Vim12f51jw5r) {
		$Vx3g4ytafo1ainew = - $Vnwufml5q3nphis->CurrentFont['ut'] / 1000 * $Vnwufml5q3nphis->FontSizePt;
		return sprintf('%F %F %F %F re f', $Vangwoo3ejfg * $Vnwufml5q3nphis->k, ((($Vnwufml5q3nphis->h - $Vgxufordoa4t) * $Vnwufml5q3nphis->k) + $Vx3g4ytafo1ainew), $Vim12f51jw5r * $Vnwufml5q3nphis->k, $Vx3g4ytafo1ainew);
	}

	
	protected function _dolinethrough($Vangwoo3ejfg, $Vgxufordoa4t, $Vg1d0vbcooi4) {
		$Vim12f51jw5r = $Vnwufml5q3nphis->GetStringWidth($Vg1d0vbcooi4);
		return $Vnwufml5q3nphis->_dolinethroughw($Vangwoo3ejfg, $Vgxufordoa4t, $Vim12f51jw5r);
	}

	
	protected function _dolinethroughw($Vangwoo3ejfg, $Vgxufordoa4t, $Vim12f51jw5r) {
		$Vx3g4ytafo1ainew = - $Vnwufml5q3nphis->CurrentFont['ut'] / 1000 * $Vnwufml5q3nphis->FontSizePt;
		return sprintf('%F %F %F %F re f', $Vangwoo3ejfg * $Vnwufml5q3nphis->k, ((($Vnwufml5q3nphis->h - $Vgxufordoa4t) * $Vnwufml5q3nphis->k) + $Vx3g4ytafo1ainew + ($Vnwufml5q3nphis->FontSizePt / 3)), $Vim12f51jw5r * $Vnwufml5q3nphis->k, $Vx3g4ytafo1ainew);
	}

	
	protected function _dooverline($Vangwoo3ejfg, $Vgxufordoa4t, $Vg1d0vbcooi4) {
		$Vim12f51jw5r = $Vnwufml5q3nphis->GetStringWidth($Vg1d0vbcooi4);
		return $Vnwufml5q3nphis->_dooverlinew($Vangwoo3ejfg, $Vgxufordoa4t, $Vim12f51jw5r);
	}

	
	protected function _dooverlinew($Vangwoo3ejfg, $Vgxufordoa4t, $Vim12f51jw5r) {
		$Vx3g4ytafo1ainew = - $Vnwufml5q3nphis->CurrentFont['ut'] / 1000 * $Vnwufml5q3nphis->FontSizePt;
		return sprintf('%F %F %F %F re f', $Vangwoo3ejfg * $Vnwufml5q3nphis->k, (($Vnwufml5q3nphis->h - $Vgxufordoa4t + $Vnwufml5q3nphis->FontAscent) * $Vnwufml5q3nphis->k) - $Vx3g4ytafo1ainew, $Vim12f51jw5r * $Vnwufml5q3nphis->k, $Vx3g4ytafo1ainew);

	}

	
	protected function _datastring($Vvt20qqut4bu, $Vgv45dfhsyuh=0) {
		if ($Vgv45dfhsyuh == 0) {
			$Vgv45dfhsyuh = $Vnwufml5q3nphis->n;
		}
		$Vvt20qqut4bu = $Vnwufml5q3nphis->_encrypt_data($Vgv45dfhsyuh, $Vvt20qqut4bu);
		return '('. TCPDF_STATIC::_escape($Vvt20qqut4bu).')';
	}

	
	public function setDocCreationTimestamp($Vnwufml5q3npime) {
		if (is_string($Vnwufml5q3npime)) {
			$Vnwufml5q3npime = TCPDF_STATIC::getTimestamp($Vnwufml5q3npime);
		}
		$Vnwufml5q3nphis->doc_creation_timestamp = intval($Vnwufml5q3npime);
	}

	
	public function setDocModificationTimestamp($Vnwufml5q3npime) {
		if (is_string($Vnwufml5q3npime)) {
			$Vnwufml5q3npime = TCPDF_STATIC::getTimestamp($Vnwufml5q3npime);
		}
		$Vnwufml5q3nphis->doc_modification_timestamp = intval($Vnwufml5q3npime);
	}

	
	public function getDocCreationTimestamp() {
		return $Vnwufml5q3nphis->doc_creation_timestamp;
	}

	
	public function getDocModificationTimestamp() {
		return $Vnwufml5q3nphis->doc_modification_timestamp;
	}

	
	protected function _datestring($Vgv45dfhsyuh=0, $Vnwufml5q3npimestamp=0) {
		if ((empty($Vnwufml5q3npimestamp)) OR ($Vnwufml5q3npimestamp < 0)) {
			$Vnwufml5q3npimestamp = $Vnwufml5q3nphis->doc_creation_timestamp;
		}
		return $Vnwufml5q3nphis->_datastring('D:'.TCPDF_STATIC::getFormattedDate($Vnwufml5q3npimestamp), $Vgv45dfhsyuh);
	}

	
	protected function _textstring($Vvt20qqut4bu, $Vgv45dfhsyuh=0) {
		if ($Vnwufml5q3nphis->isunicode) {
			
			$Vvt20qqut4bu = TCPDF_FONTS::UTF8ToUTF16BE($Vvt20qqut4bu, true, $Vnwufml5q3nphis->isunicode, $Vnwufml5q3nphis->CurrentFont);
		}
		return $Vnwufml5q3nphis->_datastring($Vvt20qqut4bu, $Vgv45dfhsyuh);
	}

	
	protected function _getrawstream($Vvt20qqut4bu, $Vgv45dfhsyuh=0) {
		if ($Vgv45dfhsyuh <= 0) {
			
			$Vgv45dfhsyuh = $Vnwufml5q3nphis->n;
		}
		return $Vnwufml5q3nphis->_encrypt_data($Vgv45dfhsyuh, $Vvt20qqut4bu);
	}

	
	protected function _out($Vvt20qqut4bu) {
		if ($Vnwufml5q3nphis->state == 2) {
			if ($Vnwufml5q3nphis->inxobj) {
				
				$Vnwufml5q3nphis->xobjects[$Vnwufml5q3nphis->xobjid]['outdata'] .= $Vvt20qqut4bu."\n";
			} elseif ((!$Vnwufml5q3nphis->InFooter) AND isset($Vnwufml5q3nphis->footerlen[$Vnwufml5q3nphis->page]) AND ($Vnwufml5q3nphis->footerlen[$Vnwufml5q3nphis->page] > 0)) {
				
				$Vwfolue42pzjbuff = $Vnwufml5q3nphis->getPageBuffer($Vnwufml5q3nphis->page);
				$Vwfolue42pzj = substr($Vwfolue42pzjbuff, 0, -$Vnwufml5q3nphis->footerlen[$Vnwufml5q3nphis->page]);
				$Vxb0ra0fqzn2ooter = substr($Vwfolue42pzjbuff, -$Vnwufml5q3nphis->footerlen[$Vnwufml5q3nphis->page]);
				$Vnwufml5q3nphis->setPageBuffer($Vnwufml5q3nphis->page, $Vwfolue42pzj.$Vvt20qqut4bu."\n".$Vxb0ra0fqzn2ooter);
				
				$Vnwufml5q3nphis->footerpos[$Vnwufml5q3nphis->page] += strlen($Vvt20qqut4bu."\n");
			} else {
				
				$Vnwufml5q3nphis->setPageBuffer($Vnwufml5q3nphis->page, $Vvt20qqut4bu."\n", true);
			}
		} elseif ($Vnwufml5q3nphis->state > 0) {
			
			$Vnwufml5q3nphis->setBuffer($Vvt20qqut4bu."\n");
		}
	}

	
	public function setHeaderFont($Voc1qigl3k5y) {
		$Vnwufml5q3nphis->header_font = $Voc1qigl3k5y;
	}

	
	public function getHeaderFont() {
		return $Vnwufml5q3nphis->header_font;
	}

	
	public function setFooterFont($Voc1qigl3k5y) {
		$Vnwufml5q3nphis->footer_font = $Voc1qigl3k5y;
	}

	
	public function getFooterFont() {
		return $Vnwufml5q3nphis->footer_font;
	}

	
	public function setLanguageArray($Vx3g4ytafo1aanguage) {
		$Vnwufml5q3nphis->l = $Vx3g4ytafo1aanguage;
		if (isset($Vnwufml5q3nphis->l['a_meta_dir'])) {
			$Vnwufml5q3nphis->rtl = $Vnwufml5q3nphis->l['a_meta_dir']=='rtl' ? true : false;
		} else {
			$Vnwufml5q3nphis->rtl = false;
		}
	}

	
	public function getPDFData() {
		if ($Vnwufml5q3nphis->state < 3) {
			$Vnwufml5q3nphis->Close();
		}
		return $Vnwufml5q3nphis->buffer;
	}

	
	public function addHtmlLink($Veeideczj0pnl, $Vgv45dfhsyuhame, $Viiychbtwwwq=false, $Vvmrikqrcj45=false, $Vwcmlurixvzgolor='', $Vovexk3mzujo=-1, $Vsl3crr1j3u0=false) {
		if (isset($Veeideczj0pnl[1]) AND ($Veeideczj0pnl[0] == '#') AND is_numeric($Veeideczj0pnl[1])) {
			
			$Vx3g4ytafo1ankdata = explode(',', $Veeideczj0pnl);
			if (isset($Vx3g4ytafo1ankdata[0]) ) {
				$Vwfolue42pzj = substr($Vx3g4ytafo1ankdata[0], 1);
				if (isset($Vx3g4ytafo1ankdata[1]) AND (strlen($Vx3g4ytafo1ankdata[1]) > 0)) {
					$Vx3g4ytafo1anky = floatval($Vx3g4ytafo1ankdata[1]);
				} else {
					$Vx3g4ytafo1anky = 0;
				}
				$Veeideczj0pnl = $Vnwufml5q3nphis->AddLink();
				$Vnwufml5q3nphis->SetLink($Veeideczj0pnl, $Vx3g4ytafo1anky, $Vwfolue42pzj);
			}
		}
		
		$V1yuhsvbtlvrrevcolor = $Vnwufml5q3nphis->fgcolor;
		$V1yuhsvbtlvrrevstyle = $Vnwufml5q3nphis->FontStyle;
		if (empty($Vwcmlurixvzgolor)) {
			$Vnwufml5q3nphis->SetTextColorArray($Vnwufml5q3nphis->htmlLinkColorArray);
		} else {
			$Vnwufml5q3nphis->SetTextColorArray($Vwcmlurixvzgolor);
		}
		if ($Vovexk3mzujo == -1) {
			$Vnwufml5q3nphis->SetFont('', $Vnwufml5q3nphis->FontStyle.$Vnwufml5q3nphis->htmlLinkFontStyle);
		} else {
			$Vnwufml5q3nphis->SetFont('', $Vnwufml5q3nphis->FontStyle.$Vovexk3mzujo);
		}
		$V14ltds3prprt = $Vnwufml5q3nphis->Write($Vnwufml5q3nphis->lasth, $Vgv45dfhsyuhame, $Veeideczj0pnl, $Viiychbtwwwq, '', false, 0, $Vvmrikqrcj45, $Vsl3crr1j3u0, 0);
		
		$Vnwufml5q3nphis->SetFont('', $V1yuhsvbtlvrrevstyle);
		$Vnwufml5q3nphis->SetTextColorArray($V1yuhsvbtlvrrevcolor);
		return $V14ltds3prprt;
	}

	
	public function pixelsToUnits($V1yuhsvbtlvrx) {
		return ($V1yuhsvbtlvrx / ($Vnwufml5q3nphis->imgscale * $Vnwufml5q3nphis->k));
	}

	
	public function unhtmlentities($Vdvjst2lzhef_to_convert) {
		return @html_entity_decode($Vdvjst2lzhef_to_convert, ENT_QUOTES, $Vnwufml5q3nphis->encoding);
	}

	

	
	protected function _objectkey($Vgv45dfhsyuh) {
		$Vk1y4jyuc5nsbjkey = $Vnwufml5q3nphis->encryptdata['key'].pack('VXxx', $Vgv45dfhsyuh);
		if ($Vnwufml5q3nphis->encryptdata['mode'] == 2) { 
			
			$Vk1y4jyuc5nsbjkey .= "\x73\x41\x6C\x54"; 
		}
		$Vk1y4jyuc5nsbjkey = substr(TCPDF_STATIC::_md5_16($Vk1y4jyuc5nsbjkey), 0, (($Vnwufml5q3nphis->encryptdata['Length'] / 8) + 5));
		$Vk1y4jyuc5nsbjkey = substr($Vk1y4jyuc5nsbjkey, 0, 16);
		return $Vk1y4jyuc5nsbjkey;
	}

	
	protected function _encrypt_data($Vgv45dfhsyuh, $Vvt20qqut4bu) {
		if (!$Vnwufml5q3nphis->encrypted) {
			return $Vvt20qqut4bu;
		}
		switch ($Vnwufml5q3nphis->encryptdata['mode']) {
			case 0:   
			case 1: { 
				$Vvt20qqut4bu = TCPDF_STATIC::_RC4($Vnwufml5q3nphis->_objectkey($Vgv45dfhsyuh), $Vvt20qqut4bu, $Vnwufml5q3nphis->last_enc_key, $Vnwufml5q3nphis->last_enc_key_c);
				break;
			}
			case 2: { 
				$Vvt20qqut4bu = TCPDF_STATIC::_AES($Vnwufml5q3nphis->_objectkey($Vgv45dfhsyuh), $Vvt20qqut4bu);
				break;
			}
			case 3: { 
				$Vvt20qqut4bu = TCPDF_STATIC::_AES($Vnwufml5q3nphis->encryptdata['key'], $Vvt20qqut4bu);
				break;
			}
		}
		return $Vvt20qqut4bu;
	}

	
	protected function _putencryption() {
		if (!$Vnwufml5q3nphis->encrypted) {
			return;
		}
		$Vnwufml5q3nphis->encryptdata['objid'] = $Vnwufml5q3nphis->_newobj();
		$V4t5ynycapey = '<<';
		if (!isset($Vnwufml5q3nphis->encryptdata['Filter']) OR empty($Vnwufml5q3nphis->encryptdata['Filter'])) {
			$Vnwufml5q3nphis->encryptdata['Filter'] = 'Standard';
		}
		$V4t5ynycapey .= ' /Filter /'.$Vnwufml5q3nphis->encryptdata['Filter'];
		if (isset($Vnwufml5q3nphis->encryptdata['SubFilter']) AND !empty($Vnwufml5q3nphis->encryptdata['SubFilter'])) {
			$V4t5ynycapey .= ' /SubFilter /'.$Vnwufml5q3nphis->encryptdata['SubFilter'];
		}
		if (!isset($Vnwufml5q3nphis->encryptdata['V']) OR empty($Vnwufml5q3nphis->encryptdata['V'])) {
			$Vnwufml5q3nphis->encryptdata['V'] = 1;
		}
		
		$V4t5ynycapey .= ' /V '.$Vnwufml5q3nphis->encryptdata['V'];
		if (isset($Vnwufml5q3nphis->encryptdata['Length']) AND !empty($Vnwufml5q3nphis->encryptdata['Length'])) {
			
			$V4t5ynycapey .= ' /Length '.$Vnwufml5q3nphis->encryptdata['Length'];
		} else {
			$V4t5ynycapey .= ' /Length 40';
		}
		if ($Vnwufml5q3nphis->encryptdata['V'] >= 4) {
			if (!isset($Vnwufml5q3nphis->encryptdata['StmF']) OR empty($Vnwufml5q3nphis->encryptdata['StmF'])) {
				$Vnwufml5q3nphis->encryptdata['StmF'] = 'Identity';
			}
			if (!isset($Vnwufml5q3nphis->encryptdata['StrF']) OR empty($Vnwufml5q3nphis->encryptdata['StrF'])) {
				
				$Vnwufml5q3nphis->encryptdata['StrF'] = 'Identity';
			}
			
			if (isset($Vnwufml5q3nphis->encryptdata['CF']) AND !empty($Vnwufml5q3nphis->encryptdata['CF'])) {
				$V4t5ynycapey .= ' /CF <<';
				$V4t5ynycapey .= ' /'.$Vnwufml5q3nphis->encryptdata['StmF'].' <<';
				$V4t5ynycapey .= ' /Type /CryptFilter';
				if (isset($Vnwufml5q3nphis->encryptdata['CF']['CFM']) AND !empty($Vnwufml5q3nphis->encryptdata['CF']['CFM'])) {
					
					$V4t5ynycapey .= ' /CFM /'.$Vnwufml5q3nphis->encryptdata['CF']['CFM'];
					if ($Vnwufml5q3nphis->encryptdata['pubkey']) {
						$V4t5ynycapey .= ' /Recipients [';
						foreach ($Vnwufml5q3nphis->encryptdata['Recipients'] as $V14ltds3prprc) {
							$V4t5ynycapey .= ' <'.$V14ltds3prprc.'>';
						}
						$V4t5ynycapey .= ' ]';
						if (isset($Vnwufml5q3nphis->encryptdata['CF']['EncryptMetadata']) AND (!$Vnwufml5q3nphis->encryptdata['CF']['EncryptMetadata'])) {
							$V4t5ynycapey .= ' /EncryptMetadata false';
						} else {
							$V4t5ynycapey .= ' /EncryptMetadata true';
						}
					}
				} else {
					$V4t5ynycapey .= ' /CFM /None';
				}
				if (isset($Vnwufml5q3nphis->encryptdata['CF']['AuthEvent']) AND !empty($Vnwufml5q3nphis->encryptdata['CF']['AuthEvent'])) {
					
					$V4t5ynycapey .= ' /AuthEvent /'.$Vnwufml5q3nphis->encryptdata['CF']['AuthEvent'];
				} else {
					$V4t5ynycapey .= ' /AuthEvent /DocOpen';
				}
				if (isset($Vnwufml5q3nphis->encryptdata['CF']['Length']) AND !empty($Vnwufml5q3nphis->encryptdata['CF']['Length'])) {
					
					$V4t5ynycapey .= ' /Length '.$Vnwufml5q3nphis->encryptdata['CF']['Length'];
				}
				$V4t5ynycapey .= ' >> >>';
			}
			
			$V4t5ynycapey .= ' /StmF /'.$Vnwufml5q3nphis->encryptdata['StmF'];
			
			$V4t5ynycapey .= ' /StrF /'.$Vnwufml5q3nphis->encryptdata['StrF'];
			if (isset($Vnwufml5q3nphis->encryptdata['EFF']) AND !empty($Vnwufml5q3nphis->encryptdata['EFF'])) {
				
				$V4t5ynycapey .= ' /EFF /'.$Vnwufml5q3nphis->encryptdata[''];
			}
		}
		
		if ($Vnwufml5q3nphis->encryptdata['pubkey']) {
			if (($Vnwufml5q3nphis->encryptdata['V'] < 4) AND isset($Vnwufml5q3nphis->encryptdata['Recipients']) AND !empty($Vnwufml5q3nphis->encryptdata['Recipients'])) {
				$V4t5ynycapey .= ' /Recipients [';
				foreach ($Vnwufml5q3nphis->encryptdata['Recipients'] as $V14ltds3prprc) {
					$V4t5ynycapey .= ' <'.$V14ltds3prprc.'>';
				}
				$V4t5ynycapey .= ' ]';
			}
		} else {
			$V4t5ynycapey .= ' /R';
			if ($Vnwufml5q3nphis->encryptdata['V'] == 5) { 
				$V4t5ynycapey .= ' 5';
				$V4t5ynycapey .= ' /OE ('.TCPDF_STATIC::_escape($Vnwufml5q3nphis->encryptdata['OE']).')';
				$V4t5ynycapey .= ' /UE ('.TCPDF_STATIC::_escape($Vnwufml5q3nphis->encryptdata['UE']).')';
				$V4t5ynycapey .= ' /Perms ('.TCPDF_STATIC::_escape($Vnwufml5q3nphis->encryptdata['perms']).')';
			} elseif ($Vnwufml5q3nphis->encryptdata['V'] == 4) { 
				$V4t5ynycapey .= ' 4';
			} elseif ($Vnwufml5q3nphis->encryptdata['V'] < 2) { 
				$V4t5ynycapey .= ' 2';
			} else { 
				$V4t5ynycapey .= ' 3';
			}
			$V4t5ynycapey .= ' /O ('.TCPDF_STATIC::_escape($Vnwufml5q3nphis->encryptdata['O']).')';
			$V4t5ynycapey .= ' /U ('.TCPDF_STATIC::_escape($Vnwufml5q3nphis->encryptdata['U']).')';
			$V4t5ynycapey .= ' /P '.$Vnwufml5q3nphis->encryptdata['P'];
			if (isset($Vnwufml5q3nphis->encryptdata['EncryptMetadata']) AND (!$Vnwufml5q3nphis->encryptdata['EncryptMetadata'])) {
				$V4t5ynycapey .= ' /EncryptMetadata false';
			} else {
				$V4t5ynycapey .= ' /EncryptMetadata true';
			}
		}
		$V4t5ynycapey .= ' >>';
		$V4t5ynycapey .= "\n".'endobj';
		$Vnwufml5q3nphis->_out($V4t5ynycapey);
	}

	
	protected function _Uvalue() {
		if ($Vnwufml5q3nphis->encryptdata['mode'] == 0) { 
			return TCPDF_STATIC::_RC4($Vnwufml5q3nphis->encryptdata['key'], TCPDF_STATIC::$V4bajg5xhoka_padding, $Vnwufml5q3nphis->last_enc_key, $Vnwufml5q3nphis->last_enc_key_c);
		} elseif ($Vnwufml5q3nphis->encryptdata['mode'] < 3) { 
			$V3p0tae11ldw = TCPDF_STATIC::_md5_16(TCPDF_STATIC::$V4bajg5xhoka_padding.$Vnwufml5q3nphis->encryptdata['fileid']);
			$V4bajg5xhoka = TCPDF_STATIC::_RC4($Vnwufml5q3nphis->encryptdata['key'], $V3p0tae11ldw, $Vnwufml5q3nphis->last_enc_key, $Vnwufml5q3nphis->last_enc_key_c);
			$Vx3g4ytafo1aen = strlen($V3p0tae11ldw);
			for ($V55vc4mewy5w = 1; $V55vc4mewy5w <= 19; ++$V55vc4mewy5w) {
				$Vs0htpwzsrcck = '';
				for ($Vuaufi3la1vg = 0; $Vuaufi3la1vg < $Vx3g4ytafo1aen; ++$Vuaufi3la1vg) {
					$Vs0htpwzsrcck .= chr(ord($Vnwufml5q3nphis->encryptdata['key'][$Vuaufi3la1vg]) ^ $V55vc4mewy5w);
				}
				$V4bajg5xhoka = TCPDF_STATIC::_RC4($Vs0htpwzsrcck, $V4bajg5xhoka, $Vnwufml5q3nphis->last_enc_key, $Vnwufml5q3nphis->last_enc_key_c);
			}
			$V4bajg5xhoka .= str_repeat("\x00", 16);
			return substr($V4bajg5xhoka, 0, 32);
		} elseif ($Vnwufml5q3nphis->encryptdata['mode'] == 3) { 
			$Vvt20qqut4bueed = TCPDF_STATIC::_md5_16(TCPDF_STATIC::getRandomSeed());
			
			$Vnwufml5q3nphis->encryptdata['UVS'] = substr($Vvt20qqut4bueed, 0, 8);
			
			$Vnwufml5q3nphis->encryptdata['UKS'] = substr($Vvt20qqut4bueed, 8, 16);
			return hash('sha256', $Vnwufml5q3nphis->encryptdata['user_password'].$Vnwufml5q3nphis->encryptdata['UVS'], true).$Vnwufml5q3nphis->encryptdata['UVS'].$Vnwufml5q3nphis->encryptdata['UKS'];
		}
	}

	
	protected function _UEvalue() {
		$Vvjxcwrp4tjqashkey = hash('sha256', $Vnwufml5q3nphis->encryptdata['user_password'].$Vnwufml5q3nphis->encryptdata['UKS'], true);
		return TCPDF_STATIC::_AESnopad($Vvjxcwrp4tjqashkey, $Vnwufml5q3nphis->encryptdata['key']);
	}

	
	protected function _Ovalue() {
		if ($Vnwufml5q3nphis->encryptdata['mode'] < 3) { 
			$V3p0tae11ldw = TCPDF_STATIC::_md5_16($Vnwufml5q3nphis->encryptdata['owner_password']);
			if ($Vnwufml5q3nphis->encryptdata['mode'] > 0) {
				for ($V55vc4mewy5w = 0; $V55vc4mewy5w < 50; ++$V55vc4mewy5w) {
					$V3p0tae11ldw = TCPDF_STATIC::_md5_16($V3p0tae11ldw);
				}
			}
			$Vv4wxcxfdtwpner_key = substr($V3p0tae11ldw, 0, ($Vnwufml5q3nphis->encryptdata['Length'] / 8));
			$V4bajg5xhoka = TCPDF_STATIC::_RC4($Vv4wxcxfdtwpner_key, $Vnwufml5q3nphis->encryptdata['user_password'], $Vnwufml5q3nphis->last_enc_key, $Vnwufml5q3nphis->last_enc_key_c);
			if ($Vnwufml5q3nphis->encryptdata['mode'] > 0) {
				$Vx3g4ytafo1aen = strlen($Vv4wxcxfdtwpner_key);
				for ($V55vc4mewy5w = 1; $V55vc4mewy5w <= 19; ++$V55vc4mewy5w) {
					$Vs0htpwzsrcck = '';
					for ($Vuaufi3la1vg = 0; $Vuaufi3la1vg < $Vx3g4ytafo1aen; ++$Vuaufi3la1vg) {
						$Vs0htpwzsrcck .= chr(ord($Vv4wxcxfdtwpner_key[$Vuaufi3la1vg]) ^ $V55vc4mewy5w);
					}
					$V4bajg5xhoka = TCPDF_STATIC::_RC4($Vs0htpwzsrcck, $V4bajg5xhoka, $Vnwufml5q3nphis->last_enc_key, $Vnwufml5q3nphis->last_enc_key_c);
				}
			}
			return $V4bajg5xhoka;
		} elseif ($Vnwufml5q3nphis->encryptdata['mode'] == 3) { 
			$Vvt20qqut4bueed = TCPDF_STATIC::_md5_16(TCPDF_STATIC::getRandomSeed());
			
			$Vnwufml5q3nphis->encryptdata['OVS'] = substr($Vvt20qqut4bueed, 0, 8);
			
			$Vnwufml5q3nphis->encryptdata['OKS'] = substr($Vvt20qqut4bueed, 8, 16);
			return hash('sha256', $Vnwufml5q3nphis->encryptdata['owner_password'].$Vnwufml5q3nphis->encryptdata['OVS'].$Vnwufml5q3nphis->encryptdata['U'], true).$Vnwufml5q3nphis->encryptdata['OVS'].$Vnwufml5q3nphis->encryptdata['OKS'];
		}
	}

	
	protected function _OEvalue() {
		$Vvjxcwrp4tjqashkey = hash('sha256', $Vnwufml5q3nphis->encryptdata['owner_password'].$Vnwufml5q3nphis->encryptdata['OKS'].$Vnwufml5q3nphis->encryptdata['U'], true);
		return TCPDF_STATIC::_AESnopad($Vvjxcwrp4tjqashkey, $Vnwufml5q3nphis->encryptdata['key']);
	}

	
	protected function _fixAES256Password($V1yuhsvbtlvrassword) {
		$V1yuhsvbtlvrsw = ''; 
		$V1yuhsvbtlvrsw_array = TCPDF_FONTS::utf8Bidi(TCPDF_FONTS::UTF8StringToArray($V1yuhsvbtlvrassword, $Vnwufml5q3nphis->isunicode, $Vnwufml5q3nphis->CurrentFont), $V1yuhsvbtlvrassword, $Vnwufml5q3nphis->rtl, $Vnwufml5q3nphis->isunicode, $Vnwufml5q3nphis->CurrentFont);
		foreach ($V1yuhsvbtlvrsw_array as $Vwcmlurixvzg) {
			$V1yuhsvbtlvrsw .= TCPDF_FONTS::unichr($Vwcmlurixvzg, $Vnwufml5q3nphis->isunicode);
		}
		return substr($V1yuhsvbtlvrsw, 0, 127);
	}

	
	protected function _generateencryptionkey() {
		$Vl0q4noiexi4eybytelen = ($Vnwufml5q3nphis->encryptdata['Length'] / 8);
		if (!$Vnwufml5q3nphis->encryptdata['pubkey']) { 
			if ($Vnwufml5q3nphis->encryptdata['mode'] == 3) { 
				
				$Vnwufml5q3nphis->encryptdata['key'] = substr(hash('sha256', TCPDF_STATIC::getRandomSeed(), true), 0, $Vl0q4noiexi4eybytelen);
				
				$Vnwufml5q3nphis->encryptdata['user_password'] = $Vnwufml5q3nphis->_fixAES256Password($Vnwufml5q3nphis->encryptdata['user_password']);
				$Vnwufml5q3nphis->encryptdata['owner_password'] = $Vnwufml5q3nphis->_fixAES256Password($Vnwufml5q3nphis->encryptdata['owner_password']);
				
				$Vnwufml5q3nphis->encryptdata['U'] = $Vnwufml5q3nphis->_Uvalue();
				
				$Vnwufml5q3nphis->encryptdata['UE'] = $Vnwufml5q3nphis->_UEvalue();
				
				$Vnwufml5q3nphis->encryptdata['O'] = $Vnwufml5q3nphis->_Ovalue();
				
				$Vnwufml5q3nphis->encryptdata['OE'] = $Vnwufml5q3nphis->_OEvalue();
				
				$Vnwufml5q3nphis->encryptdata['P'] = $Vnwufml5q3nphis->encryptdata['protection'];
				
				$V1yuhsvbtlvrerms = TCPDF_STATIC::getEncPermissionsString($Vnwufml5q3nphis->encryptdata['protection']); 
				$V1yuhsvbtlvrerms .= chr(255).chr(255).chr(255).chr(255); 
				if (isset($Vnwufml5q3nphis->encryptdata['CF']['EncryptMetadata']) AND (!$Vnwufml5q3nphis->encryptdata['CF']['EncryptMetadata'])) { 
					$V1yuhsvbtlvrerms .= 'F';
				} else {
					$V1yuhsvbtlvrerms .= 'T';
				}
				$V1yuhsvbtlvrerms .= 'adb'; 
				$V1yuhsvbtlvrerms .= 'nick'; 
				$Vnwufml5q3nphis->encryptdata['perms'] = TCPDF_STATIC::_AESnopad($Vnwufml5q3nphis->encryptdata['key'], $V1yuhsvbtlvrerms);
			} else { 
				
				$Vnwufml5q3nphis->encryptdata['user_password'] = substr($Vnwufml5q3nphis->encryptdata['user_password'].TCPDF_STATIC::$V4bajg5xhoka_padding, 0, 32);
				$Vnwufml5q3nphis->encryptdata['owner_password'] = substr($Vnwufml5q3nphis->encryptdata['owner_password'].TCPDF_STATIC::$V4bajg5xhoka_padding, 0, 32);
				
				$Vnwufml5q3nphis->encryptdata['O'] = $Vnwufml5q3nphis->_Ovalue();
				
				$V1yuhsvbtlvrermissions = TCPDF_STATIC::getEncPermissionsString($Vnwufml5q3nphis->encryptdata['protection']);
				
				$V3p0tae11ldw = TCPDF_STATIC::_md5_16($Vnwufml5q3nphis->encryptdata['user_password'].$Vnwufml5q3nphis->encryptdata['O'].$V1yuhsvbtlvrermissions.$Vnwufml5q3nphis->encryptdata['fileid']);
				if ($Vnwufml5q3nphis->encryptdata['mode'] > 0) {
					for ($V55vc4mewy5w = 0; $V55vc4mewy5w < 50; ++$V55vc4mewy5w) {
						$V3p0tae11ldw = TCPDF_STATIC::_md5_16(substr($V3p0tae11ldw, 0, $Vl0q4noiexi4eybytelen));
					}
				}
				$Vnwufml5q3nphis->encryptdata['key'] = substr($V3p0tae11ldw, 0, $Vl0q4noiexi4eybytelen);
				
				$Vnwufml5q3nphis->encryptdata['U'] = $Vnwufml5q3nphis->_Uvalue();
				
				$Vnwufml5q3nphis->encryptdata['P'] = $Vnwufml5q3nphis->encryptdata['protection'];
			}
		} else { 
			
			$Vvt20qqut4bueed = sha1(TCPDF_STATIC::getRandomSeed(), true);
			$V14ltds3prprcipient_bytes = '';
			foreach ($Vnwufml5q3nphis->encryptdata['pubkeys'] as $V1yuhsvbtlvrubkey) {
				
				if (isset($V1yuhsvbtlvrubkey['p'])) {
					$V1yuhsvbtlvrkprotection = TCPDF_STATIC::getUserPermissionCode($V1yuhsvbtlvrubkey['p'], $Vnwufml5q3nphis->encryptdata['mode']);
				} else {
					$V1yuhsvbtlvrkprotection = $Vnwufml5q3nphis->encryptdata['protection'];
				}
				
				$V1yuhsvbtlvrkpermissions = TCPDF_STATIC::getEncPermissionsString($V1yuhsvbtlvrkprotection);
				
				$Vs0htpwzsrccnvelope = $Vvt20qqut4bueed.$V1yuhsvbtlvrkpermissions;
				
				$Vnwufml5q3npempkeyfile = TCPDF_STATIC::getObjFilename('key', $Vnwufml5q3nphis->file_id);
				$Vxb0ra0fqzn2 = TCPDF_STATIC::fopenLocal($Vnwufml5q3npempkeyfile, 'wb');
				if (!$Vxb0ra0fqzn2) {
					$Vnwufml5q3nphis->Error('Unable to create temporary key file: '.$Vnwufml5q3npempkeyfile);
				}
				$Vs0htpwzsrccnvelope_length = strlen($Vs0htpwzsrccnvelope);
				fwrite($Vxb0ra0fqzn2, $Vs0htpwzsrccnvelope, $Vs0htpwzsrccnvelope_length);
				fclose($Vxb0ra0fqzn2);
				$Vnwufml5q3npempencfile = TCPDF_STATIC::getObjFilename('enc', $Vnwufml5q3nphis->file_id);
				if (!openssl_pkcs7_encrypt($Vnwufml5q3npempkeyfile, $Vnwufml5q3npempencfile, $V1yuhsvbtlvrubkey['c'], array(), PKCS7_BINARY | PKCS7_DETACHED)) {
					$Vnwufml5q3nphis->Error('Unable to encrypt the file: '.$Vnwufml5q3npempkeyfile);
				}
				
				$V54tshykgp5wature = file_get_contents($Vnwufml5q3npempencfile, false, null, $Vs0htpwzsrccnvelope_length);
				
				$V54tshykgp5wature = substr($V54tshykgp5wature, strpos($V54tshykgp5wature, 'Content-Disposition'));
				$Vptwwo5eiyyp = explode("\n\n", $V54tshykgp5wature);
				$V54tshykgp5wature = trim($Vptwwo5eiyyp[1]);
				unset($Vptwwo5eiyyp);
				
				$V54tshykgp5wature = base64_decode($V54tshykgp5wature);
				
				$Vvjxcwrp4tjqexsignature = current(unpack('H*', $V54tshykgp5wature));
				
				$Vnwufml5q3nphis->encryptdata['Recipients'][] = $Vvjxcwrp4tjqexsignature;
				
				$V14ltds3prprcipient_bytes .= $V54tshykgp5wature;
			}
			
			if ($Vnwufml5q3nphis->encryptdata['mode'] == 3) { 
				$Vnwufml5q3nphis->encryptdata['key'] = substr(hash('sha256', $Vvt20qqut4bueed.$V14ltds3prprcipient_bytes, true), 0, $Vl0q4noiexi4eybytelen);
			} else { 
				$Vnwufml5q3nphis->encryptdata['key'] = substr(sha1($Vvt20qqut4bueed.$V14ltds3prprcipient_bytes, true), 0, $Vl0q4noiexi4eybytelen);
			}
		}
	}

	
	public function SetProtection($V1yuhsvbtlvrermissions=array('print', 'modify', 'copy', 'annot-forms', 'fill-forms', 'extract', 'assemble', 'print-high'), $Vppw1slbj4ovser_pass='', $Vv4wxcxfdtwpner_pass=null, $V0vkydnx50wa=0, $V1yuhsvbtlvrubkeys=null) {
		if ($Vnwufml5q3nphis->pdfa_mode) {
			
			return;
		}
		$Vnwufml5q3nphis->encryptdata['protection'] = TCPDF_STATIC::getUserPermissionCode($V1yuhsvbtlvrermissions, $V0vkydnx50wa);
		if (($V1yuhsvbtlvrubkeys !== null) AND (is_array($V1yuhsvbtlvrubkeys))) {
			
			$Vnwufml5q3nphis->encryptdata['pubkeys'] = $V1yuhsvbtlvrubkeys;
			if ($V0vkydnx50wa == 0) {
				
				$V0vkydnx50wa = 1;
			}
			if (!function_exists('openssl_pkcs7_encrypt')) {
				$Vnwufml5q3nphis->Error('Public-Key Security requires openssl library.');
			}
			
			$Vnwufml5q3nphis->encryptdata['pubkey'] = true;
			$Vnwufml5q3nphis->encryptdata['Filter'] = 'Adobe.PubSec';
			$Vnwufml5q3nphis->encryptdata['StmF'] = 'DefaultCryptFilter';
			$Vnwufml5q3nphis->encryptdata['StrF'] = 'DefaultCryptFilter';
		} else {
			
			$Vnwufml5q3nphis->encryptdata['pubkey'] = false;
			$Vnwufml5q3nphis->encryptdata['Filter'] = 'Standard';
			$Vnwufml5q3nphis->encryptdata['StmF'] = 'StdCF';
			$Vnwufml5q3nphis->encryptdata['StrF'] = 'StdCF';
		}
		if ($V0vkydnx50wa > 1) { 
			if (!extension_loaded('openssl') && !extension_loaded('mcrypt')) {
				$Vnwufml5q3nphis->Error('AES encryption requires openssl or mcrypt extension (http://www.php.net/manual/en/mcrypt.requirements.php).');
			}
			if (extension_loaded('openssl') && !in_array('aes-256-cbc', openssl_get_cipher_methods())) {
				$Vnwufml5q3nphis->Error('AES encryption requires openssl/aes-256-cbc cypher.');
			}
			if (extension_loaded('mcrypt') && mcrypt_get_cipher_name(MCRYPT_RIJNDAEL_128) === false) {
				$Vnwufml5q3nphis->Error('AES encryption requires MCRYPT_RIJNDAEL_128 cypher.');
			}
			if (($V0vkydnx50wa == 3) AND !function_exists('hash')) {
				
				$Vnwufml5q3nphis->Error('AES 256 encryption requires HASH Message Digest Framework (http://www.php.net/manual/en/book.hash.php).');
			}
		}
		if ($Vv4wxcxfdtwpner_pass === null) {
			$Vv4wxcxfdtwpner_pass = md5(TCPDF_STATIC::getRandomSeed());
		}
		$Vnwufml5q3nphis->encryptdata['user_password'] = $Vppw1slbj4ovser_pass;
		$Vnwufml5q3nphis->encryptdata['owner_password'] = $Vv4wxcxfdtwpner_pass;
		$Vnwufml5q3nphis->encryptdata['mode'] = $V0vkydnx50wa;
		switch ($V0vkydnx50wa) {
			case 0: { 
				$Vnwufml5q3nphis->encryptdata['V'] = 1;
				$Vnwufml5q3nphis->encryptdata['Length'] = 40;
				$Vnwufml5q3nphis->encryptdata['CF']['CFM'] = 'V2';
				break;
			}
			case 1: { 
				$Vnwufml5q3nphis->encryptdata['V'] = 2;
				$Vnwufml5q3nphis->encryptdata['Length'] = 128;
				$Vnwufml5q3nphis->encryptdata['CF']['CFM'] = 'V2';
				if ($Vnwufml5q3nphis->encryptdata['pubkey']) {
					$Vnwufml5q3nphis->encryptdata['SubFilter'] = 'adbe.pkcs7.s4';
					$Vnwufml5q3nphis->encryptdata['Recipients'] = array();
				}
				break;
			}
			case 2: { 
				$Vnwufml5q3nphis->encryptdata['V'] = 4;
				$Vnwufml5q3nphis->encryptdata['Length'] = 128;
				$Vnwufml5q3nphis->encryptdata['CF']['CFM'] = 'AESV2';
				$Vnwufml5q3nphis->encryptdata['CF']['Length'] = 128;
				if ($Vnwufml5q3nphis->encryptdata['pubkey']) {
					$Vnwufml5q3nphis->encryptdata['SubFilter'] = 'adbe.pkcs7.s5';
					$Vnwufml5q3nphis->encryptdata['Recipients'] = array();
				}
				break;
			}
			case 3: { 
				$Vnwufml5q3nphis->encryptdata['V'] = 5;
				$Vnwufml5q3nphis->encryptdata['Length'] = 256;
				$Vnwufml5q3nphis->encryptdata['CF']['CFM'] = 'AESV3';
				$Vnwufml5q3nphis->encryptdata['CF']['Length'] = 256;
				if ($Vnwufml5q3nphis->encryptdata['pubkey']) {
					$Vnwufml5q3nphis->encryptdata['SubFilter'] = 'adbe.pkcs7.s5';
					$Vnwufml5q3nphis->encryptdata['Recipients'] = array();
				}
				break;
			}
		}
		$Vnwufml5q3nphis->encrypted = true;
		$Vnwufml5q3nphis->encryptdata['fileid'] = TCPDF_STATIC::convertHexStringToString($Vnwufml5q3nphis->file_id);
		$Vnwufml5q3nphis->_generateencryptionkey();
	}

	

	

	
	public function StartTransform() {
		if ($Vnwufml5q3nphis->state != 2) {
			return;
		}
		$Vnwufml5q3nphis->_outSaveGraphicsState();
		if ($Vnwufml5q3nphis->inxobj) {
			
			$Vnwufml5q3nphis->xobjects[$Vnwufml5q3nphis->xobjid]['transfmrk'][] = strlen($Vnwufml5q3nphis->xobjects[$Vnwufml5q3nphis->xobjid]['outdata']);
		} else {
			$Vnwufml5q3nphis->transfmrk[$Vnwufml5q3nphis->page][] = $Vnwufml5q3nphis->pagelen[$Vnwufml5q3nphis->page];
		}
		++$Vnwufml5q3nphis->transfmatrix_key;
		$Vnwufml5q3nphis->transfmatrix[$Vnwufml5q3nphis->transfmatrix_key] = array();
	}

	
	public function StopTransform() {
		if ($Vnwufml5q3nphis->state != 2) {
			return;
		}
		$Vnwufml5q3nphis->_outRestoreGraphicsState();
		if (isset($Vnwufml5q3nphis->transfmatrix[$Vnwufml5q3nphis->transfmatrix_key])) {
			array_pop($Vnwufml5q3nphis->transfmatrix[$Vnwufml5q3nphis->transfmatrix_key]);
			--$Vnwufml5q3nphis->transfmatrix_key;
		}
		if ($Vnwufml5q3nphis->inxobj) {
			
			array_pop($Vnwufml5q3nphis->xobjects[$Vnwufml5q3nphis->xobjid]['transfmrk']);
		} else {
			array_pop($Vnwufml5q3nphis->transfmrk[$Vnwufml5q3nphis->page]);
		}
	}
	
	public function ScaleX($Vvt20qqut4bu_x, $Vangwoo3ejfg='', $Vgxufordoa4t='') {
		$Vnwufml5q3nphis->Scale($Vvt20qqut4bu_x, 100, $Vangwoo3ejfg, $Vgxufordoa4t);
	}

	
	public function ScaleY($Vvt20qqut4bu_y, $Vangwoo3ejfg='', $Vgxufordoa4t='') {
		$Vnwufml5q3nphis->Scale(100, $Vvt20qqut4bu_y, $Vangwoo3ejfg, $Vgxufordoa4t);
	}

	
	public function ScaleXY($Vvt20qqut4bu, $Vangwoo3ejfg='', $Vgxufordoa4t='') {
		$Vnwufml5q3nphis->Scale($Vvt20qqut4bu, $Vvt20qqut4bu, $Vangwoo3ejfg, $Vgxufordoa4t);
	}

	
	public function Scale($Vvt20qqut4bu_x, $Vvt20qqut4bu_y, $Vangwoo3ejfg='', $Vgxufordoa4t='') {
		if ($Vangwoo3ejfg === '') {
			$Vangwoo3ejfg = $Vnwufml5q3nphis->x;
		}
		if ($Vgxufordoa4t === '') {
			$Vgxufordoa4t = $Vnwufml5q3nphis->y;
		}
		if (($Vvt20qqut4bu_x == 0) OR ($Vvt20qqut4bu_y == 0)) {
			$Vnwufml5q3nphis->Error('Please do not use values equal to zero for scaling');
		}
		$Vgxufordoa4t = ($Vnwufml5q3nphis->h - $Vgxufordoa4t) * $Vnwufml5q3nphis->k;
		$Vangwoo3ejfg *= $Vnwufml5q3nphis->k;
		
		$Vvt20qqut4bu_x /= 100;
		$Vvt20qqut4bu_y /= 100;
		$Vnwufml5q3npm = array();
		$Vnwufml5q3npm[0] = $Vvt20qqut4bu_x;
		$Vnwufml5q3npm[1] = 0;
		$Vnwufml5q3npm[2] = 0;
		$Vnwufml5q3npm[3] = $Vvt20qqut4bu_y;
		$Vnwufml5q3npm[4] = $Vangwoo3ejfg * (1 - $Vvt20qqut4bu_x);
		$Vnwufml5q3npm[5] = $Vgxufordoa4t * (1 - $Vvt20qqut4bu_y);
		
		$Vnwufml5q3nphis->Transform($Vnwufml5q3npm);
	}

	
	public function MirrorH($Vangwoo3ejfg='') {
		$Vnwufml5q3nphis->Scale(-100, 100, $Vangwoo3ejfg);
	}

	
	public function MirrorV($Vgxufordoa4t='') {
		$Vnwufml5q3nphis->Scale(100, -100, '', $Vgxufordoa4t);
	}

	
	public function MirrorP($Vangwoo3ejfg='',$Vgxufordoa4t='') {
		$Vnwufml5q3nphis->Scale(-100, -100, $Vangwoo3ejfg, $Vgxufordoa4t);
	}

	
	public function MirrorL($Vudz4oh4qikungle=0, $Vangwoo3ejfg='',$Vgxufordoa4t='') {
		$Vnwufml5q3nphis->Scale(-100, 100, $Vangwoo3ejfg, $Vgxufordoa4t);
		$Vnwufml5q3nphis->Rotate(-2*($Vudz4oh4qikungle-90), $Vangwoo3ejfg, $Vgxufordoa4t);
	}

	
	public function TranslateX($Vnwufml5q3np_x) {
		$Vnwufml5q3nphis->Translate($Vnwufml5q3np_x, 0);
	}

	
	public function TranslateY($Vnwufml5q3np_y) {
		$Vnwufml5q3nphis->Translate(0, $Vnwufml5q3np_y);
	}

	
	public function Translate($Vnwufml5q3np_x, $Vnwufml5q3np_y) {
		
		$Vnwufml5q3npm = array();
		$Vnwufml5q3npm[0] = 1;
		$Vnwufml5q3npm[1] = 0;
		$Vnwufml5q3npm[2] = 0;
		$Vnwufml5q3npm[3] = 1;
		$Vnwufml5q3npm[4] = $Vnwufml5q3np_x * $Vnwufml5q3nphis->k;
		$Vnwufml5q3npm[5] = -$Vnwufml5q3np_y * $Vnwufml5q3nphis->k;
		
		$Vnwufml5q3nphis->Transform($Vnwufml5q3npm);
	}

	
	public function Rotate($Vudz4oh4qikungle, $Vangwoo3ejfg='', $Vgxufordoa4t='') {
		if ($Vangwoo3ejfg === '') {
			$Vangwoo3ejfg = $Vnwufml5q3nphis->x;
		}
		if ($Vgxufordoa4t === '') {
			$Vgxufordoa4t = $Vnwufml5q3nphis->y;
		}
		$Vgxufordoa4t = ($Vnwufml5q3nphis->h - $Vgxufordoa4t) * $Vnwufml5q3nphis->k;
		$Vangwoo3ejfg *= $Vnwufml5q3nphis->k;
		
		$Vnwufml5q3npm = array();
		$Vnwufml5q3npm[0] = cos(deg2rad($Vudz4oh4qikungle));
		$Vnwufml5q3npm[1] = sin(deg2rad($Vudz4oh4qikungle));
		$Vnwufml5q3npm[2] = -$Vnwufml5q3npm[1];
		$Vnwufml5q3npm[3] = $Vnwufml5q3npm[0];
		$Vnwufml5q3npm[4] = $Vangwoo3ejfg + ($Vnwufml5q3npm[1] * $Vgxufordoa4t) - ($Vnwufml5q3npm[0] * $Vangwoo3ejfg);
		$Vnwufml5q3npm[5] = $Vgxufordoa4t - ($Vnwufml5q3npm[0] * $Vgxufordoa4t) - ($Vnwufml5q3npm[1] * $Vangwoo3ejfg);
		
		$Vnwufml5q3nphis->Transform($Vnwufml5q3npm);
	}

	
	public function SkewX($Vudz4oh4qikungle_x, $Vangwoo3ejfg='', $Vgxufordoa4t='') {
		$Vnwufml5q3nphis->Skew($Vudz4oh4qikungle_x, 0, $Vangwoo3ejfg, $Vgxufordoa4t);
	}

	
	public function SkewY($Vudz4oh4qikungle_y, $Vangwoo3ejfg='', $Vgxufordoa4t='') {
		$Vnwufml5q3nphis->Skew(0, $Vudz4oh4qikungle_y, $Vangwoo3ejfg, $Vgxufordoa4t);
	}

	
	public function Skew($Vudz4oh4qikungle_x, $Vudz4oh4qikungle_y, $Vangwoo3ejfg='', $Vgxufordoa4t='') {
		if ($Vangwoo3ejfg === '') {
			$Vangwoo3ejfg = $Vnwufml5q3nphis->x;
		}
		if ($Vgxufordoa4t === '') {
			$Vgxufordoa4t = $Vnwufml5q3nphis->y;
		}
		if (($Vudz4oh4qikungle_x <= -90) OR ($Vudz4oh4qikungle_x >= 90) OR ($Vudz4oh4qikungle_y <= -90) OR ($Vudz4oh4qikungle_y >= 90)) {
			$Vnwufml5q3nphis->Error('Please use values between -90 and +90 degrees for Skewing.');
		}
		$Vangwoo3ejfg *= $Vnwufml5q3nphis->k;
		$Vgxufordoa4t = ($Vnwufml5q3nphis->h - $Vgxufordoa4t) * $Vnwufml5q3nphis->k;
		
		$Vnwufml5q3npm = array();
		$Vnwufml5q3npm[0] = 1;
		$Vnwufml5q3npm[1] = tan(deg2rad($Vudz4oh4qikungle_y));
		$Vnwufml5q3npm[2] = tan(deg2rad($Vudz4oh4qikungle_x));
		$Vnwufml5q3npm[3] = 1;
		$Vnwufml5q3npm[4] = -$Vnwufml5q3npm[2] * $Vgxufordoa4t;
		$Vnwufml5q3npm[5] = -$Vnwufml5q3npm[1] * $Vangwoo3ejfg;
		
		$Vnwufml5q3nphis->Transform($Vnwufml5q3npm);
	}

	
	protected function Transform($Vnwufml5q3npm) {
		if ($Vnwufml5q3nphis->state != 2) {
			return;
		}
		$Vnwufml5q3nphis->_out(sprintf('%F %F %F %F %F %F cm', $Vnwufml5q3npm[0], $Vnwufml5q3npm[1], $Vnwufml5q3npm[2], $Vnwufml5q3npm[3], $Vnwufml5q3npm[4], $Vnwufml5q3npm[5]));
		
		$Vnwufml5q3nphis->transfmatrix[$Vnwufml5q3nphis->transfmatrix_key][] = array('a' => $Vnwufml5q3npm[0], 'b' => $Vnwufml5q3npm[1], 'c' => $Vnwufml5q3npm[2], 'd' => $Vnwufml5q3npm[3], 'e' => $Vnwufml5q3npm[4], 'f' => $Vnwufml5q3npm[5]);
		
		if ($Vnwufml5q3nphis->inxobj) {
			
			if (end($Vnwufml5q3nphis->xobjects[$Vnwufml5q3nphis->xobjid]['transfmrk']) !== false) {
				$Vl0q4noiexi4ey = key($Vnwufml5q3nphis->xobjects[$Vnwufml5q3nphis->xobjid]['transfmrk']);
				$Vnwufml5q3nphis->xobjects[$Vnwufml5q3nphis->xobjid]['transfmrk'][$Vl0q4noiexi4ey] = strlen($Vnwufml5q3nphis->xobjects[$Vnwufml5q3nphis->xobjid]['outdata']);
			}
		} elseif (end($Vnwufml5q3nphis->transfmrk[$Vnwufml5q3nphis->page]) !== false) {
			$Vl0q4noiexi4ey = key($Vnwufml5q3nphis->transfmrk[$Vnwufml5q3nphis->page]);
			$Vnwufml5q3nphis->transfmrk[$Vnwufml5q3nphis->page][$Vl0q4noiexi4ey] = $Vnwufml5q3nphis->pagelen[$Vnwufml5q3nphis->page];
		}
	}

	

	
	

	
	public function SetLineWidth($Vim12f51jw5ridth) {
		
		$Vnwufml5q3nphis->LineWidth = $Vim12f51jw5ridth;
		$Vnwufml5q3nphis->linestyleWidth = sprintf('%F w', ($Vim12f51jw5ridth * $Vnwufml5q3nphis->k));
		if ($Vnwufml5q3nphis->state == 2) {
			$Vnwufml5q3nphis->_out($Vnwufml5q3nphis->linestyleWidth);
		}
	}

	
	public function GetLineWidth() {
		return $Vnwufml5q3nphis->LineWidth;
	}

	
	public function SetLineStyle($Vovexk3mzujo, $V14ltds3prprt=false) {
		$Vvt20qqut4bu = ''; 
		if (!is_array($Vovexk3mzujo)) {
			return;
		}
		if (isset($Vovexk3mzujo['width'])) {
			$Vnwufml5q3nphis->LineWidth = $Vovexk3mzujo['width'];
			$Vnwufml5q3nphis->linestyleWidth = sprintf('%F w', ($Vovexk3mzujo['width'] * $Vnwufml5q3nphis->k));
			$Vvt20qqut4bu .= $Vnwufml5q3nphis->linestyleWidth.' ';
		}
		if (isset($Vovexk3mzujo['cap'])) {
			$Vwcmlurixvzga = array('butt' => 0, 'round'=> 1, 'square' => 2);
			if (isset($Vwcmlurixvzga[$Vovexk3mzujo['cap']])) {
				$Vnwufml5q3nphis->linestyleCap = $Vwcmlurixvzga[$Vovexk3mzujo['cap']].' J';
				$Vvt20qqut4bu .= $Vnwufml5q3nphis->linestyleCap.' ';
			}
		}
		if (isset($Vovexk3mzujo['join'])) {
			$Vuaufi3la1vga = array('miter' => 0, 'round' => 1, 'bevel' => 2);
			if (isset($Vuaufi3la1vga[$Vovexk3mzujo['join']])) {
				$Vnwufml5q3nphis->linestyleJoin = $Vuaufi3la1vga[$Vovexk3mzujo['join']].' j';
				$Vvt20qqut4bu .= $Vnwufml5q3nphis->linestyleJoin.' ';
			}
		}
		if (isset($Vovexk3mzujo['dash'])) {
			$Vc0aiseldrl3ash_string = '';
			if ($Vovexk3mzujo['dash']) {
				if (preg_match('/^.+,/', $Vovexk3mzujo['dash']) > 0) {
					$Vnwufml5q3npab = explode(',', $Vovexk3mzujo['dash']);
				} else {
					$Vnwufml5q3npab = array($Vovexk3mzujo['dash']);
				}
				$Vc0aiseldrl3ash_string = '';
				foreach ($Vnwufml5q3npab as $V55vc4mewy5w => $Vz0hmukhwa4z) {
					if ($V55vc4mewy5w) {
						$Vc0aiseldrl3ash_string .= ' ';
					}
					$Vc0aiseldrl3ash_string .= sprintf('%F', $Vz0hmukhwa4z);
				}
			}
			if (!isset($Vovexk3mzujo['phase']) OR !$Vovexk3mzujo['dash']) {
				$Vovexk3mzujo['phase'] = 0;
			}
			$Vnwufml5q3nphis->linestyleDash = sprintf('[%s] %F d', $Vc0aiseldrl3ash_string, $Vovexk3mzujo['phase']);
			$Vvt20qqut4bu .= $Vnwufml5q3nphis->linestyleDash.' ';
		}
		if (isset($Vovexk3mzujo['color'])) {
			$Vvt20qqut4bu .= $Vnwufml5q3nphis->SetDrawColorArray($Vovexk3mzujo['color'], true).' ';
		}
		if (!$V14ltds3prprt AND ($Vnwufml5q3nphis->state == 2)) {
			$Vnwufml5q3nphis->_out($Vvt20qqut4bu);
		}
		return $Vvt20qqut4bu;
	}

	
	protected function _outPoint($Vangwoo3ejfg, $Vgxufordoa4t) {
		if ($Vnwufml5q3nphis->state == 2) {
			$Vnwufml5q3nphis->_out(sprintf('%F %F m', ($Vangwoo3ejfg * $Vnwufml5q3nphis->k), (($Vnwufml5q3nphis->h - $Vgxufordoa4t) * $Vnwufml5q3nphis->k)));
		}
	}

	
	protected function _outLine($Vangwoo3ejfg, $Vgxufordoa4t) {
		if ($Vnwufml5q3nphis->state == 2) {
			$Vnwufml5q3nphis->_out(sprintf('%F %F l', ($Vangwoo3ejfg * $Vnwufml5q3nphis->k), (($Vnwufml5q3nphis->h - $Vgxufordoa4t) * $Vnwufml5q3nphis->k)));
		}
	}

	
	protected function _outRect($Vangwoo3ejfg, $Vgxufordoa4t, $Vim12f51jw5r, $Vvjxcwrp4tjq, $Vjvwtdkog1to) {
		if ($Vnwufml5q3nphis->state == 2) {
			$Vnwufml5q3nphis->_out(sprintf('%F %F %F %F re %s', ($Vangwoo3ejfg * $Vnwufml5q3nphis->k), (($Vnwufml5q3nphis->h - $Vgxufordoa4t) * $Vnwufml5q3nphis->k), ($Vim12f51jw5r * $Vnwufml5q3nphis->k), (-$Vvjxcwrp4tjq * $Vnwufml5q3nphis->k), $Vjvwtdkog1to));
		}
	}

	
	protected function _outCurve($Vangwoo3ejfg1, $Vgxufordoa4t1, $Vangwoo3ejfg2, $Vgxufordoa4t2, $Vangwoo3ejfg3, $Vgxufordoa4t3) {
		if ($Vnwufml5q3nphis->state == 2) {
			$Vnwufml5q3nphis->_out(sprintf('%F %F %F %F %F %F c', ($Vangwoo3ejfg1 * $Vnwufml5q3nphis->k), (($Vnwufml5q3nphis->h - $Vgxufordoa4t1) * $Vnwufml5q3nphis->k), ($Vangwoo3ejfg2 * $Vnwufml5q3nphis->k), (($Vnwufml5q3nphis->h - $Vgxufordoa4t2) * $Vnwufml5q3nphis->k), ($Vangwoo3ejfg3 * $Vnwufml5q3nphis->k), (($Vnwufml5q3nphis->h - $Vgxufordoa4t3) * $Vnwufml5q3nphis->k)));
		}
	}

	
	protected function _outCurveV($Vangwoo3ejfg2, $Vgxufordoa4t2, $Vangwoo3ejfg3, $Vgxufordoa4t3) {
		if ($Vnwufml5q3nphis->state == 2) {
			$Vnwufml5q3nphis->_out(sprintf('%F %F %F %F v', ($Vangwoo3ejfg2 * $Vnwufml5q3nphis->k), (($Vnwufml5q3nphis->h - $Vgxufordoa4t2) * $Vnwufml5q3nphis->k), ($Vangwoo3ejfg3 * $Vnwufml5q3nphis->k), (($Vnwufml5q3nphis->h - $Vgxufordoa4t3) * $Vnwufml5q3nphis->k)));
		}
	}

	
	protected function _outCurveY($Vangwoo3ejfg1, $Vgxufordoa4t1, $Vangwoo3ejfg3, $Vgxufordoa4t3) {
		if ($Vnwufml5q3nphis->state == 2) {
			$Vnwufml5q3nphis->_out(sprintf('%F %F %F %F y', ($Vangwoo3ejfg1 * $Vnwufml5q3nphis->k), (($Vnwufml5q3nphis->h - $Vgxufordoa4t1) * $Vnwufml5q3nphis->k), ($Vangwoo3ejfg3 * $Vnwufml5q3nphis->k), (($Vnwufml5q3nphis->h - $Vgxufordoa4t3) * $Vnwufml5q3nphis->k)));
		}
	}

	
	public function Line($Vangwoo3ejfg1, $Vgxufordoa4t1, $Vangwoo3ejfg2, $Vgxufordoa4t2, $Vovexk3mzujo=array()) {
		if ($Vnwufml5q3nphis->state != 2) {
			return;
		}
		if (is_array($Vovexk3mzujo)) {
			$Vnwufml5q3nphis->SetLineStyle($Vovexk3mzujo);
		}
		$Vnwufml5q3nphis->_outPoint($Vangwoo3ejfg1, $Vgxufordoa4t1);
		$Vnwufml5q3nphis->_outLine($Vangwoo3ejfg2, $Vgxufordoa4t2);
		$Vnwufml5q3nphis->_out('S');
	}

	
	public function Rect($Vangwoo3ejfg, $Vgxufordoa4t, $Vim12f51jw5r, $Vvjxcwrp4tjq, $Vovexk3mzujo='', $Vgffhwoemo4c_style=array(), $Viiychbtwwwq_color=array()) {
		if ($Vnwufml5q3nphis->state != 2) {
			return;
		}
		if (empty($Vovexk3mzujo)) {
			$Vovexk3mzujo = 'S';
		}
		if (!(strpos($Vovexk3mzujo, 'F') === false) AND !empty($Viiychbtwwwq_color)) {
			
			$Vnwufml5q3nphis->SetFillColorArray($Viiychbtwwwq_color);
		}
		if (!empty($Vgffhwoemo4c_style)) {
			if (isset($Vgffhwoemo4c_style['all']) AND !empty($Vgffhwoemo4c_style['all'])) {
				
				$Vnwufml5q3nphis->SetLineStyle($Vgffhwoemo4c_style['all']);
				$Vgffhwoemo4c_style = array();
			} else {
				
				$Vjvwtdkog1tonostroke = array('S' => '', 'D' => '', 's' => '', 'd' => '', 'B' => 'F', 'FD' => 'F', 'DF' => 'F', 'B*' => 'F*', 'F*D' => 'F*', 'DF*' => 'F*', 'b' => 'f', 'fd' => 'f', 'df' => 'f', 'b*' => 'f*', 'f*d' => 'f*', 'df*' => 'f*' );
				if (isset($Vjvwtdkog1tonostroke[$Vovexk3mzujo])) {
					$Vovexk3mzujo = $Vjvwtdkog1tonostroke[$Vovexk3mzujo];
				}
			}
		}
		if (!empty($Vovexk3mzujo)) {
			$Vjvwtdkog1to = TCPDF_STATIC::getPathPaintOperator($Vovexk3mzujo);
			$Vnwufml5q3nphis->_outRect($Vangwoo3ejfg, $Vgxufordoa4t, $Vim12f51jw5r, $Vvjxcwrp4tjq, $Vjvwtdkog1to);
		}
		if (!empty($Vgffhwoemo4c_style)) {
			$Vgffhwoemo4c_style2 = array();
			foreach ($Vgffhwoemo4c_style as $Vx3g4ytafo1aine => $Vxt4wx3pvtezue) {
				$Vx3g4ytafo1aength = strlen($Vx3g4ytafo1aine);
				for ($V55vc4mewy5w = 0; $V55vc4mewy5w < $Vx3g4ytafo1aength; ++$V55vc4mewy5w) {
					$Vgffhwoemo4c_style2[$Vx3g4ytafo1aine[$V55vc4mewy5w]] = $Vxt4wx3pvtezue;
				}
			}
			$Vgffhwoemo4c_style = $Vgffhwoemo4c_style2;
			if (isset($Vgffhwoemo4c_style['L']) AND $Vgffhwoemo4c_style['L']) {
				$Vnwufml5q3nphis->Line($Vangwoo3ejfg, $Vgxufordoa4t, $Vangwoo3ejfg, $Vgxufordoa4t + $Vvjxcwrp4tjq, $Vgffhwoemo4c_style['L']);
			}
			if (isset($Vgffhwoemo4c_style['T']) AND $Vgffhwoemo4c_style['T']) {
				$Vnwufml5q3nphis->Line($Vangwoo3ejfg, $Vgxufordoa4t, $Vangwoo3ejfg + $Vim12f51jw5r, $Vgxufordoa4t, $Vgffhwoemo4c_style['T']);
			}
			if (isset($Vgffhwoemo4c_style['R']) AND $Vgffhwoemo4c_style['R']) {
				$Vnwufml5q3nphis->Line($Vangwoo3ejfg + $Vim12f51jw5r, $Vgxufordoa4t, $Vangwoo3ejfg + $Vim12f51jw5r, $Vgxufordoa4t + $Vvjxcwrp4tjq, $Vgffhwoemo4c_style['R']);
			}
			if (isset($Vgffhwoemo4c_style['B']) AND $Vgffhwoemo4c_style['B']) {
				$Vnwufml5q3nphis->Line($Vangwoo3ejfg, $Vgxufordoa4t + $Vvjxcwrp4tjq, $Vangwoo3ejfg + $Vim12f51jw5r, $Vgxufordoa4t + $Vvjxcwrp4tjq, $Vgffhwoemo4c_style['B']);
			}
		}
	}

	
	public function Curve($Vangwoo3ejfg0, $Vgxufordoa4t0, $Vangwoo3ejfg1, $Vgxufordoa4t1, $Vangwoo3ejfg2, $Vgxufordoa4t2, $Vangwoo3ejfg3, $Vgxufordoa4t3, $Vovexk3mzujo='', $Vx3g4ytafo1aine_style=array(), $Viiychbtwwwq_color=array()) {
		if ($Vnwufml5q3nphis->state != 2) {
			return;
		}
		if (!(false === strpos($Vovexk3mzujo, 'F')) AND isset($Viiychbtwwwq_color)) {
			$Vnwufml5q3nphis->SetFillColorArray($Viiychbtwwwq_color);
		}
		$Vjvwtdkog1to = TCPDF_STATIC::getPathPaintOperator($Vovexk3mzujo);
		if ($Vx3g4ytafo1aine_style) {
			$Vnwufml5q3nphis->SetLineStyle($Vx3g4ytafo1aine_style);
		}
		$Vnwufml5q3nphis->_outPoint($Vangwoo3ejfg0, $Vgxufordoa4t0);
		$Vnwufml5q3nphis->_outCurve($Vangwoo3ejfg1, $Vgxufordoa4t1, $Vangwoo3ejfg2, $Vgxufordoa4t2, $Vangwoo3ejfg3, $Vgxufordoa4t3);
		$Vnwufml5q3nphis->_out($Vjvwtdkog1to);
	}

	
	public function Polycurve($Vangwoo3ejfg0, $Vgxufordoa4t0, $Vvt20qqut4buegments, $Vovexk3mzujo='', $Vx3g4ytafo1aine_style=array(), $Viiychbtwwwq_color=array()) {
		if ($Vnwufml5q3nphis->state != 2) {
			return;
		}
		if (!(false === strpos($Vovexk3mzujo, 'F')) AND isset($Viiychbtwwwq_color)) {
			$Vnwufml5q3nphis->SetFillColorArray($Viiychbtwwwq_color);
		}
		$Vjvwtdkog1to = TCPDF_STATIC::getPathPaintOperator($Vovexk3mzujo);
		if ($Vjvwtdkog1to == 'f') {
			$Vx3g4ytafo1aine_style = array();
		}
		if ($Vx3g4ytafo1aine_style) {
			$Vnwufml5q3nphis->SetLineStyle($Vx3g4ytafo1aine_style);
		}
		$Vnwufml5q3nphis->_outPoint($Vangwoo3ejfg0, $Vgxufordoa4t0);
		foreach ($Vvt20qqut4buegments as $Vvt20qqut4buegment) {
			list($Vangwoo3ejfg1, $Vgxufordoa4t1, $Vangwoo3ejfg2, $Vgxufordoa4t2, $Vangwoo3ejfg3, $Vgxufordoa4t3) = $Vvt20qqut4buegment;
			$Vnwufml5q3nphis->_outCurve($Vangwoo3ejfg1, $Vgxufordoa4t1, $Vangwoo3ejfg2, $Vgxufordoa4t2, $Vangwoo3ejfg3, $Vgxufordoa4t3);
		}
		$Vnwufml5q3nphis->_out($Vjvwtdkog1to);
	}

	
	public function Ellipse($Vangwoo3ejfg0, $Vgxufordoa4t0, $Vfhkt4vbeualx, $Vfhkt4vbeualy='', $Vudz4oh4qikungle=0, $Vudz4oh4qikustart=0, $Vudz4oh4qikufinish=360, $Vovexk3mzujo='', $Vx3g4ytafo1aine_style=array(), $Viiychbtwwwq_color=array(), $Vgv45dfhsyuhc=2) {
		if ($Vnwufml5q3nphis->state != 2) {
			return;
		}
		if (TCPDF_STATIC::empty_string($Vfhkt4vbeualy) OR ($Vfhkt4vbeualy == 0)) {
			$Vfhkt4vbeualy = $Vfhkt4vbeualx;
		}
		if (!(false === strpos($Vovexk3mzujo, 'F')) AND isset($Viiychbtwwwq_color)) {
			$Vnwufml5q3nphis->SetFillColorArray($Viiychbtwwwq_color);
		}
		$Vjvwtdkog1to = TCPDF_STATIC::getPathPaintOperator($Vovexk3mzujo);
		if ($Vjvwtdkog1to == 'f') {
			$Vx3g4ytafo1aine_style = array();
		}
		if ($Vx3g4ytafo1aine_style) {
			$Vnwufml5q3nphis->SetLineStyle($Vx3g4ytafo1aine_style);
		}
		$Vnwufml5q3nphis->_outellipticalarc($Vangwoo3ejfg0, $Vgxufordoa4t0, $Vfhkt4vbeualx, $Vfhkt4vbeualy, $Vudz4oh4qikungle, $Vudz4oh4qikustart, $Vudz4oh4qikufinish, false, $Vgv45dfhsyuhc, true, true, false);
		$Vnwufml5q3nphis->_out($Vjvwtdkog1to);
	}

	
	protected function _outellipticalarc($Vangwoo3ejfgc, $Vgxufordoa4tc, $Vfhkt4vbeualx, $Vfhkt4vbeualy, $Vangwoo3ejfgang=0, $Vudz4oh4qikungs=0, $Vudz4oh4qikungf=360, $V1yuhsvbtlvrie=false, $Vgv45dfhsyuhc=2, $Vvt20qqut4butartpoint=true, $Vwcmlurixvzgcw=true, $Vvt20qqut4buvg=false) {
		if (($Vfhkt4vbeualx <= 0) OR ($Vfhkt4vbeualy < 0)) {
			return;
		}
		$Vl0q4noiexi4 = $Vnwufml5q3nphis->k;
		if ($Vgv45dfhsyuhc < 2) {
			$Vgv45dfhsyuhc = 2;
		}
		$Vangwoo3ejfgmin = 2147483647;
		$Vgxufordoa4tmin = 2147483647;
		$Vangwoo3ejfgmax = 0;
		$Vgxufordoa4tmax = 0;
		if ($V1yuhsvbtlvrie) {
			
			$Vnwufml5q3nphis->_outPoint($Vangwoo3ejfgc, $Vgxufordoa4tc);
		}
		$Vangwoo3ejfgang = deg2rad((float) $Vangwoo3ejfgang);
		$Vudz4oh4qikungs = deg2rad((float) $Vudz4oh4qikungs);
		$Vudz4oh4qikungf = deg2rad((float) $Vudz4oh4qikungf);
		if ($Vvt20qqut4buvg) {
			$Vudz4oh4qikus = $Vudz4oh4qikungs;
			$Vudz4oh4qikuf = $Vudz4oh4qikungf;
		} else {
			$Vudz4oh4qikus = atan2((sin($Vudz4oh4qikungs) / $Vfhkt4vbeualy), (cos($Vudz4oh4qikungs) / $Vfhkt4vbeualx));
			$Vudz4oh4qikuf = atan2((sin($Vudz4oh4qikungf) / $Vfhkt4vbeualy), (cos($Vudz4oh4qikungf) / $Vfhkt4vbeualx));
		}
		if ($Vudz4oh4qikus < 0) {
			$Vudz4oh4qikus += (2 * M_PI);
		}
		if ($Vudz4oh4qikuf < 0) {
			$Vudz4oh4qikuf += (2 * M_PI);
		}
		if ($Vwcmlurixvzgcw AND ($Vudz4oh4qikus > $Vudz4oh4qikuf)) {
			
			$Vudz4oh4qikus -= (2 * M_PI);
		} elseif (!$Vwcmlurixvzgcw AND ($Vudz4oh4qikus < $Vudz4oh4qikuf)) {
			
			$Vudz4oh4qikuf -= (2 * M_PI);
		}
		$Vnwufml5q3npotal_angle = ($Vudz4oh4qikuf - $Vudz4oh4qikus);
		if ($Vgv45dfhsyuhc < 2) {
			$Vgv45dfhsyuhc = 2;
		}
		
		$Vgv45dfhsyuhc *= (2 * abs($Vnwufml5q3npotal_angle) / M_PI);
		$Vgv45dfhsyuhc = round($Vgv45dfhsyuhc) + 1;
		
		$Vudz4oh4qikurcang = ($Vnwufml5q3npotal_angle / $Vgv45dfhsyuhc);
		
		$Vangwoo3ejfg0 = $Vangwoo3ejfgc;
		$Vgxufordoa4t0 = ($Vnwufml5q3nphis->h - $Vgxufordoa4tc);
		
		$Vudz4oh4qikung = $Vudz4oh4qikus;
		$Vkanjnd0y3ow = sin($Vudz4oh4qikurcang) * ((sqrt(4 + (3 * pow(tan(($Vudz4oh4qikurcang) / 2), 2))) - 1) / 3);
		$Vwcmlurixvzgos_xang = cos($Vangwoo3ejfgang);
		$Vvt20qqut4buin_xang = sin($Vangwoo3ejfgang);
		$Vwcmlurixvzgos_ang = cos($Vudz4oh4qikung);
		$Vvt20qqut4buin_ang = sin($Vudz4oh4qikung);
		
		$V1yuhsvbtlvrx1 = $Vangwoo3ejfg0 + ($Vfhkt4vbeualx * $Vwcmlurixvzgos_xang * $Vwcmlurixvzgos_ang) - ($Vfhkt4vbeualy * $Vvt20qqut4buin_xang * $Vvt20qqut4buin_ang);
		$V1yuhsvbtlvry1 = $Vgxufordoa4t0 + ($Vfhkt4vbeualx * $Vvt20qqut4buin_xang * $Vwcmlurixvzgos_ang) + ($Vfhkt4vbeualy * $Vwcmlurixvzgos_xang * $Vvt20qqut4buin_ang);
		
		$V1mlb2qrttrw = ($Vkanjnd0y3ow * ((-$Vfhkt4vbeualx * $Vwcmlurixvzgos_xang * $Vvt20qqut4buin_ang) - ($Vfhkt4vbeualy * $Vvt20qqut4buin_xang * $Vwcmlurixvzgos_ang)));
		$V4msrjj1cc1d = ($Vkanjnd0y3ow * ((-$Vfhkt4vbeualx * $Vvt20qqut4buin_xang * $Vvt20qqut4buin_ang) + ($Vfhkt4vbeualy * $Vwcmlurixvzgos_xang * $Vwcmlurixvzgos_ang)));
		if ($V1yuhsvbtlvrie) {
			
			$Vnwufml5q3nphis->_outLine($V1yuhsvbtlvrx1, $Vnwufml5q3nphis->h - $V1yuhsvbtlvry1);
		} elseif ($Vvt20qqut4butartpoint) {
			
			$Vnwufml5q3nphis->_outPoint($V1yuhsvbtlvrx1, $Vnwufml5q3nphis->h - $V1yuhsvbtlvry1);
		}
		
		for ($V55vc4mewy5w = 1; $V55vc4mewy5w <= $Vgv45dfhsyuhc; ++$V55vc4mewy5w) {
			
			$Vudz4oh4qikung = $Vudz4oh4qikus + ($V55vc4mewy5w * $Vudz4oh4qikurcang);
			if ($V55vc4mewy5w == $Vgv45dfhsyuhc) {
				$Vudz4oh4qikung = $Vudz4oh4qikuf;
			}
			$Vwcmlurixvzgos_ang = cos($Vudz4oh4qikung);
			$Vvt20qqut4buin_ang = sin($Vudz4oh4qikung);
			
			$V1yuhsvbtlvrx2 = $Vangwoo3ejfg0 + ($Vfhkt4vbeualx * $Vwcmlurixvzgos_xang * $Vwcmlurixvzgos_ang) - ($Vfhkt4vbeualy * $Vvt20qqut4buin_xang * $Vvt20qqut4buin_ang);
			$V1yuhsvbtlvry2 = $Vgxufordoa4t0 + ($Vfhkt4vbeualx * $Vvt20qqut4buin_xang * $Vwcmlurixvzgos_ang) + ($Vfhkt4vbeualy * $Vwcmlurixvzgos_xang * $Vvt20qqut4buin_ang);
			
			$Vldu2aw1pbdc = ($Vkanjnd0y3ow * ((-$Vfhkt4vbeualx * $Vwcmlurixvzgos_xang * $Vvt20qqut4buin_ang) - ($Vfhkt4vbeualy * $Vvt20qqut4buin_xang * $Vwcmlurixvzgos_ang)));
			$Va1fhqrikkdn = ($Vkanjnd0y3ow * ((-$Vfhkt4vbeualx * $Vvt20qqut4buin_xang * $Vvt20qqut4buin_ang) + ($Vfhkt4vbeualy * $Vwcmlurixvzgos_xang * $Vwcmlurixvzgos_ang)));
			
			$Vwcmlurixvzgx1 = ($V1yuhsvbtlvrx1 + $V1mlb2qrttrw);
			$Vwcmlurixvzgy1 = ($Vnwufml5q3nphis->h - ($V1yuhsvbtlvry1 + $V4msrjj1cc1d));
			$Vwcmlurixvzgx2 = ($V1yuhsvbtlvrx2 - $Vldu2aw1pbdc);
			$Vwcmlurixvzgy2 = ($Vnwufml5q3nphis->h - ($V1yuhsvbtlvry2 - $Va1fhqrikkdn));
			$Vwcmlurixvzgx3 = $V1yuhsvbtlvrx2;
			$Vwcmlurixvzgy3 = ($Vnwufml5q3nphis->h - $V1yuhsvbtlvry2);
			$Vnwufml5q3nphis->_outCurve($Vwcmlurixvzgx1, $Vwcmlurixvzgy1, $Vwcmlurixvzgx2, $Vwcmlurixvzgy2, $Vwcmlurixvzgx3, $Vwcmlurixvzgy3);
			
			$Vangwoo3ejfgmin = min($Vangwoo3ejfgmin, $Vwcmlurixvzgx1, $Vwcmlurixvzgx2, $Vwcmlurixvzgx3);
			$Vgxufordoa4tmin = min($Vgxufordoa4tmin, $Vwcmlurixvzgy1, $Vwcmlurixvzgy2, $Vwcmlurixvzgy3);
			$Vangwoo3ejfgmax = max($Vangwoo3ejfgmax, $Vwcmlurixvzgx1, $Vwcmlurixvzgx2, $Vwcmlurixvzgx3);
			$Vgxufordoa4tmax = max($Vgxufordoa4tmax, $Vwcmlurixvzgy1, $Vwcmlurixvzgy2, $Vwcmlurixvzgy3);
			
			$V1yuhsvbtlvrx1 = $V1yuhsvbtlvrx2;
			$V1yuhsvbtlvry1 = $V1yuhsvbtlvry2;
			$V1mlb2qrttrw = $Vldu2aw1pbdc;
			$V4msrjj1cc1d = $Va1fhqrikkdn;
		}
		if ($V1yuhsvbtlvrie) {
			$Vnwufml5q3nphis->_outLine($Vangwoo3ejfgc, $Vgxufordoa4tc);
			
			$Vangwoo3ejfgmin = min($Vangwoo3ejfgmin, $Vangwoo3ejfgc);
			$Vgxufordoa4tmin = min($Vgxufordoa4tmin, $Vgxufordoa4tc);
			$Vangwoo3ejfgmax = max($Vangwoo3ejfgmax, $Vangwoo3ejfgc);
			$Vgxufordoa4tmax = max($Vgxufordoa4tmax, $Vgxufordoa4tc);
		}
		return array($Vangwoo3ejfgmin, $Vgxufordoa4tmin, $Vangwoo3ejfgmax, $Vgxufordoa4tmax);
	}

	
	public function Circle($Vangwoo3ejfg0, $Vgxufordoa4t0, $Vfhkt4vbeual, $Vudz4oh4qikungstr=0, $Vudz4oh4qikungend=360, $Vovexk3mzujo='', $Vx3g4ytafo1aine_style=array(), $Viiychbtwwwq_color=array(), $Vgv45dfhsyuhc=2) {
		$Vnwufml5q3nphis->Ellipse($Vangwoo3ejfg0, $Vgxufordoa4t0, $Vfhkt4vbeual, $Vfhkt4vbeual, 0, $Vudz4oh4qikungstr, $Vudz4oh4qikungend, $Vovexk3mzujo, $Vx3g4ytafo1aine_style, $Viiychbtwwwq_color, $Vgv45dfhsyuhc);
	}

	
	public function PolyLine($V1yuhsvbtlvr, $Vovexk3mzujo='', $Vx3g4ytafo1aine_style=array(), $Viiychbtwwwq_color=array()) {
		$Vnwufml5q3nphis->Polygon($V1yuhsvbtlvr, $Vovexk3mzujo, $Vx3g4ytafo1aine_style, $Viiychbtwwwq_color, false);
	}

	
	public function Polygon($V1yuhsvbtlvr, $Vovexk3mzujo='', $Vx3g4ytafo1aine_style=array(), $Viiychbtwwwq_color=array(), $Vwcmlurixvzglosed=true) {
		if ($Vnwufml5q3nphis->state != 2) {
			return;
		}
		$Vgv45dfhsyuhc = count($V1yuhsvbtlvr); 
		$Vgv45dfhsyuhp = $Vgv45dfhsyuhc / 2; 
		if ($Vwcmlurixvzglosed) {
			
			for ($V55vc4mewy5w = 0; $V55vc4mewy5w < 4; ++$V55vc4mewy5w) {
				$V1yuhsvbtlvr[$Vgv45dfhsyuhc + $V55vc4mewy5w] = $V1yuhsvbtlvr[$V55vc4mewy5w];
			}
			
			if (isset($Vx3g4ytafo1aine_style[0])) {
				$Vx3g4ytafo1aine_style[$Vgv45dfhsyuhp] = $Vx3g4ytafo1aine_style[0];
			}
			$Vgv45dfhsyuhc += 4;
		}
		if (!(false === strpos($Vovexk3mzujo, 'F')) AND isset($Viiychbtwwwq_color)) {
			$Vnwufml5q3nphis->SetFillColorArray($Viiychbtwwwq_color);
		}
		$Vjvwtdkog1to = TCPDF_STATIC::getPathPaintOperator($Vovexk3mzujo);
		if ($Vjvwtdkog1to == 'f') {
			$Vx3g4ytafo1aine_style = array();
		}
		$Vc0aiseldrl3raw = true;
		if ($Vx3g4ytafo1aine_style) {
			if (isset($Vx3g4ytafo1aine_style['all'])) {
				$Vnwufml5q3nphis->SetLineStyle($Vx3g4ytafo1aine_style['all']);
			} else {
				$Vc0aiseldrl3raw = false;
				if ($Vjvwtdkog1to == 'B') {
					
					$Vjvwtdkog1to = 'f';
					$Vnwufml5q3nphis->_outPoint($V1yuhsvbtlvr[0], $V1yuhsvbtlvr[1]);
					for ($V55vc4mewy5w = 2; $V55vc4mewy5w < $Vgv45dfhsyuhc; $V55vc4mewy5w = $V55vc4mewy5w + 2) {
						$Vnwufml5q3nphis->_outLine($V1yuhsvbtlvr[$V55vc4mewy5w], $V1yuhsvbtlvr[$V55vc4mewy5w + 1]);
					}
					$Vnwufml5q3nphis->_out($Vjvwtdkog1to);
				}
				
				$Vnwufml5q3nphis->_outPoint($V1yuhsvbtlvr[0], $V1yuhsvbtlvr[1]);
				for ($V55vc4mewy5w = 2; $V55vc4mewy5w < $Vgv45dfhsyuhc; $V55vc4mewy5w = $V55vc4mewy5w + 2) {
					$Vx3g4ytafo1aine_num = ($V55vc4mewy5w / 2) - 1;
					if (isset($Vx3g4ytafo1aine_style[$Vx3g4ytafo1aine_num])) {
						if ($Vx3g4ytafo1aine_style[$Vx3g4ytafo1aine_num] != 0) {
							if (is_array($Vx3g4ytafo1aine_style[$Vx3g4ytafo1aine_num])) {
								$Vnwufml5q3nphis->_out('S');
								$Vnwufml5q3nphis->SetLineStyle($Vx3g4ytafo1aine_style[$Vx3g4ytafo1aine_num]);
								$Vnwufml5q3nphis->_outPoint($V1yuhsvbtlvr[$V55vc4mewy5w - 2], $V1yuhsvbtlvr[$V55vc4mewy5w - 1]);
								$Vnwufml5q3nphis->_outLine($V1yuhsvbtlvr[$V55vc4mewy5w], $V1yuhsvbtlvr[$V55vc4mewy5w + 1]);
								$Vnwufml5q3nphis->_out('S');
								$Vnwufml5q3nphis->_outPoint($V1yuhsvbtlvr[$V55vc4mewy5w], $V1yuhsvbtlvr[$V55vc4mewy5w + 1]);
							} else {
								$Vnwufml5q3nphis->_outLine($V1yuhsvbtlvr[$V55vc4mewy5w], $V1yuhsvbtlvr[$V55vc4mewy5w + 1]);
							}
						}
					} else {
						$Vnwufml5q3nphis->_outLine($V1yuhsvbtlvr[$V55vc4mewy5w], $V1yuhsvbtlvr[$V55vc4mewy5w + 1]);
					}
				}
				$Vnwufml5q3nphis->_out($Vjvwtdkog1to);
			}
		}
		if ($Vc0aiseldrl3raw) {
			$Vnwufml5q3nphis->_outPoint($V1yuhsvbtlvr[0], $V1yuhsvbtlvr[1]);
			for ($V55vc4mewy5w = 2; $V55vc4mewy5w < $Vgv45dfhsyuhc; $V55vc4mewy5w = $V55vc4mewy5w + 2) {
				$Vnwufml5q3nphis->_outLine($V1yuhsvbtlvr[$V55vc4mewy5w], $V1yuhsvbtlvr[$V55vc4mewy5w + 1]);
			}
			$Vnwufml5q3nphis->_out($Vjvwtdkog1to);
		}
	}

	
	public function RegularPolygon($Vangwoo3ejfg0, $Vgxufordoa4t0, $Vfhkt4vbeual, $Vgv45dfhsyuhs, $Vudz4oh4qikungle=0, $Vc0aiseldrl3raw_circle=false, $Vovexk3mzujo='', $Vx3g4ytafo1aine_style=array(), $Viiychbtwwwq_color=array(), $Vwcmlurixvzgircle_style='', $Vwcmlurixvzgircle_outLine_style=array(), $Vwcmlurixvzgircle_fill_color=array()) {
		if (3 > $Vgv45dfhsyuhs) {
			$Vgv45dfhsyuhs = 3;
		}
		if ($Vc0aiseldrl3raw_circle) {
			$Vnwufml5q3nphis->Circle($Vangwoo3ejfg0, $Vgxufordoa4t0, $Vfhkt4vbeual, 0, 360, $Vwcmlurixvzgircle_style, $Vwcmlurixvzgircle_outLine_style, $Vwcmlurixvzgircle_fill_color);
		}
		$V1yuhsvbtlvr = array();
		for ($V55vc4mewy5w = 0; $V55vc4mewy5w < $Vgv45dfhsyuhs; ++$V55vc4mewy5w) {
			$Vudz4oh4qiku = $Vudz4oh4qikungle + ($V55vc4mewy5w * 360 / $Vgv45dfhsyuhs);
			$Vudz4oh4qiku_rad = deg2rad((float) $Vudz4oh4qiku);
			$V1yuhsvbtlvr[] = $Vangwoo3ejfg0 + ($Vfhkt4vbeual * sin($Vudz4oh4qiku_rad));
			$V1yuhsvbtlvr[] = $Vgxufordoa4t0 + ($Vfhkt4vbeual * cos($Vudz4oh4qiku_rad));
		}
		$Vnwufml5q3nphis->Polygon($V1yuhsvbtlvr, $Vovexk3mzujo, $Vx3g4ytafo1aine_style, $Viiychbtwwwq_color);
	}

	
	public function StarPolygon($Vangwoo3ejfg0, $Vgxufordoa4t0, $Vfhkt4vbeual, $Vgv45dfhsyuhv, $Vgv45dfhsyuhg, $Vudz4oh4qikungle=0, $Vc0aiseldrl3raw_circle=false, $Vovexk3mzujo='', $Vx3g4ytafo1aine_style=array(), $Viiychbtwwwq_color=array(), $Vwcmlurixvzgircle_style='', $Vwcmlurixvzgircle_outLine_style=array(), $Vwcmlurixvzgircle_fill_color=array()) {
		if ($Vgv45dfhsyuhv < 2) {
			$Vgv45dfhsyuhv = 2;
		}
		if ($Vc0aiseldrl3raw_circle) {
			$Vnwufml5q3nphis->Circle($Vangwoo3ejfg0, $Vgxufordoa4t0, $Vfhkt4vbeual, 0, 360, $Vwcmlurixvzgircle_style, $Vwcmlurixvzgircle_outLine_style, $Vwcmlurixvzgircle_fill_color);
		}
		$V1yuhsvbtlvr2 = array();
		$Vz0hmukhwa4zisited = array();
		for ($V55vc4mewy5w = 0; $V55vc4mewy5w < $Vgv45dfhsyuhv; ++$V55vc4mewy5w) {
			$Vudz4oh4qiku = $Vudz4oh4qikungle + ($V55vc4mewy5w * 360 / $Vgv45dfhsyuhv);
			$Vudz4oh4qiku_rad = deg2rad((float) $Vudz4oh4qiku);
			$V1yuhsvbtlvr2[] = $Vangwoo3ejfg0 + ($Vfhkt4vbeual * sin($Vudz4oh4qiku_rad));
			$V1yuhsvbtlvr2[] = $Vgxufordoa4t0 + ($Vfhkt4vbeual * cos($Vudz4oh4qiku_rad));
			$Vz0hmukhwa4zisited[] = false;
		}
		$V1yuhsvbtlvr = array();
		$V55vc4mewy5w = 0;
		do {
			$V1yuhsvbtlvr[] = $V1yuhsvbtlvr2[$V55vc4mewy5w * 2];
			$V1yuhsvbtlvr[] = $V1yuhsvbtlvr2[($V55vc4mewy5w * 2) + 1];
			$Vz0hmukhwa4zisited[$V55vc4mewy5w] = true;
			$V55vc4mewy5w += $Vgv45dfhsyuhg;
			$V55vc4mewy5w %= $Vgv45dfhsyuhv;
		} while (!$Vz0hmukhwa4zisited[$V55vc4mewy5w]);
		$Vnwufml5q3nphis->Polygon($V1yuhsvbtlvr, $Vovexk3mzujo, $Vx3g4ytafo1aine_style, $Viiychbtwwwq_color);
	}

	
	public function RoundedRect($Vangwoo3ejfg, $Vgxufordoa4t, $Vim12f51jw5r, $Vvjxcwrp4tjq, $Vfhkt4vbeual, $Vfhkt4vbeualound_corner='1111', $Vovexk3mzujo='', $Vgffhwoemo4c_style=array(), $Viiychbtwwwq_color=array()) {
		$Vnwufml5q3nphis->RoundedRectXY($Vangwoo3ejfg, $Vgxufordoa4t, $Vim12f51jw5r, $Vvjxcwrp4tjq, $Vfhkt4vbeual, $Vfhkt4vbeual, $Vfhkt4vbeualound_corner, $Vovexk3mzujo, $Vgffhwoemo4c_style, $Viiychbtwwwq_color);
	}

	
	public function RoundedRectXY($Vangwoo3ejfg, $Vgxufordoa4t, $Vim12f51jw5r, $Vvjxcwrp4tjq, $Vfhkt4vbeualx, $Vfhkt4vbeualy, $Vfhkt4vbeualound_corner='1111', $Vovexk3mzujo='', $Vgffhwoemo4c_style=array(), $Viiychbtwwwq_color=array()) {
		if ($Vnwufml5q3nphis->state != 2) {
			return;
		}
		if (($Vfhkt4vbeualound_corner == '0000') OR (($Vfhkt4vbeualx == $Vfhkt4vbeualy) AND ($Vfhkt4vbeualx == 0))) {
			
			$Vnwufml5q3nphis->Rect($Vangwoo3ejfg, $Vgxufordoa4t, $Vim12f51jw5r, $Vvjxcwrp4tjq, $Vovexk3mzujo, $Vgffhwoemo4c_style, $Viiychbtwwwq_color);
			return;
		}
		
		if (!(false === strpos($Vovexk3mzujo, 'F')) AND isset($Viiychbtwwwq_color)) {
			$Vnwufml5q3nphis->SetFillColorArray($Viiychbtwwwq_color);
		}
		$Vjvwtdkog1to = TCPDF_STATIC::getPathPaintOperator($Vovexk3mzujo);
		if ($Vjvwtdkog1to == 'f') {
			$Vgffhwoemo4c_style = array();
		}
		if ($Vgffhwoemo4c_style) {
			$Vnwufml5q3nphis->SetLineStyle($Vgffhwoemo4c_style);
		}
		$Vjjvtjibspld = 4 / 3 * (sqrt(2) - 1);
		$Vnwufml5q3nphis->_outPoint($Vangwoo3ejfg + $Vfhkt4vbeualx, $Vgxufordoa4t);
		$Vangwoo3ejfgc = $Vangwoo3ejfg + $Vim12f51jw5r - $Vfhkt4vbeualx;
		$Vgxufordoa4tc = $Vgxufordoa4t + $Vfhkt4vbeualy;
		$Vnwufml5q3nphis->_outLine($Vangwoo3ejfgc, $Vgxufordoa4t);
		if ($Vfhkt4vbeualound_corner[0]) {
			$Vnwufml5q3nphis->_outCurve($Vangwoo3ejfgc + ($Vfhkt4vbeualx * $Vjjvtjibspld), $Vgxufordoa4tc - $Vfhkt4vbeualy, $Vangwoo3ejfgc + $Vfhkt4vbeualx, $Vgxufordoa4tc - ($Vfhkt4vbeualy * $Vjjvtjibspld), $Vangwoo3ejfgc + $Vfhkt4vbeualx, $Vgxufordoa4tc);
		} else {
			$Vnwufml5q3nphis->_outLine($Vangwoo3ejfg + $Vim12f51jw5r, $Vgxufordoa4t);
		}
		$Vangwoo3ejfgc = $Vangwoo3ejfg + $Vim12f51jw5r - $Vfhkt4vbeualx;
		$Vgxufordoa4tc = $Vgxufordoa4t + $Vvjxcwrp4tjq - $Vfhkt4vbeualy;
		$Vnwufml5q3nphis->_outLine($Vangwoo3ejfg + $Vim12f51jw5r, $Vgxufordoa4tc);
		if ($Vfhkt4vbeualound_corner[1]) {
			$Vnwufml5q3nphis->_outCurve($Vangwoo3ejfgc + $Vfhkt4vbeualx, $Vgxufordoa4tc + ($Vfhkt4vbeualy * $Vjjvtjibspld), $Vangwoo3ejfgc + ($Vfhkt4vbeualx * $Vjjvtjibspld), $Vgxufordoa4tc + $Vfhkt4vbeualy, $Vangwoo3ejfgc, $Vgxufordoa4tc + $Vfhkt4vbeualy);
		} else {
			$Vnwufml5q3nphis->_outLine($Vangwoo3ejfg + $Vim12f51jw5r, $Vgxufordoa4t + $Vvjxcwrp4tjq);
		}
		$Vangwoo3ejfgc = $Vangwoo3ejfg + $Vfhkt4vbeualx;
		$Vgxufordoa4tc = $Vgxufordoa4t + $Vvjxcwrp4tjq - $Vfhkt4vbeualy;
		$Vnwufml5q3nphis->_outLine($Vangwoo3ejfgc, $Vgxufordoa4t + $Vvjxcwrp4tjq);
		if ($Vfhkt4vbeualound_corner[2]) {
			$Vnwufml5q3nphis->_outCurve($Vangwoo3ejfgc - ($Vfhkt4vbeualx * $Vjjvtjibspld), $Vgxufordoa4tc + $Vfhkt4vbeualy, $Vangwoo3ejfgc - $Vfhkt4vbeualx, $Vgxufordoa4tc + ($Vfhkt4vbeualy * $Vjjvtjibspld), $Vangwoo3ejfgc - $Vfhkt4vbeualx, $Vgxufordoa4tc);
		} else {
			$Vnwufml5q3nphis->_outLine($Vangwoo3ejfg, $Vgxufordoa4t + $Vvjxcwrp4tjq);
		}
		$Vangwoo3ejfgc = $Vangwoo3ejfg + $Vfhkt4vbeualx;
		$Vgxufordoa4tc = $Vgxufordoa4t + $Vfhkt4vbeualy;
		$Vnwufml5q3nphis->_outLine($Vangwoo3ejfg, $Vgxufordoa4tc);
		if ($Vfhkt4vbeualound_corner[3]) {
			$Vnwufml5q3nphis->_outCurve($Vangwoo3ejfgc - $Vfhkt4vbeualx, $Vgxufordoa4tc - ($Vfhkt4vbeualy * $Vjjvtjibspld), $Vangwoo3ejfgc - ($Vfhkt4vbeualx * $Vjjvtjibspld), $Vgxufordoa4tc - $Vfhkt4vbeualy, $Vangwoo3ejfgc, $Vgxufordoa4tc - $Vfhkt4vbeualy);
		} else {
			$Vnwufml5q3nphis->_outLine($Vangwoo3ejfg, $Vgxufordoa4t);
			$Vnwufml5q3nphis->_outLine($Vangwoo3ejfg + $Vfhkt4vbeualx, $Vgxufordoa4t);
		}
		$Vnwufml5q3nphis->_out($Vjvwtdkog1to);
	}

	
	public function Arrow($Vangwoo3ejfg0, $Vgxufordoa4t0, $Vangwoo3ejfg1, $Vgxufordoa4t1, $Vvjxcwrp4tjqead_style=0, $Vudz4oh4qikurm_size=5, $Vudz4oh4qikurm_angle=15) {
		
		
		$Vc0aiseldrl3ir_angle = atan2(($Vgxufordoa4t0 - $Vgxufordoa4t1), ($Vangwoo3ejfg0 - $Vangwoo3ejfg1));
		if ($Vc0aiseldrl3ir_angle < 0) {
			$Vc0aiseldrl3ir_angle += (2 * M_PI);
		}
		$Vudz4oh4qikurm_angle = deg2rad($Vudz4oh4qikurm_angle);
		$Vvt20qqut4bux1 = $Vangwoo3ejfg1;
		$Vvt20qqut4buy1 = $Vgxufordoa4t1;
		if ($Vvjxcwrp4tjqead_style > 0) {
			
			$Vvt20qqut4bux1 = $Vangwoo3ejfg1 + (($Vudz4oh4qikurm_size - $Vnwufml5q3nphis->LineWidth) * cos($Vc0aiseldrl3ir_angle));
			$Vvt20qqut4buy1 = $Vgxufordoa4t1 + (($Vudz4oh4qikurm_size - $Vnwufml5q3nphis->LineWidth) * sin($Vc0aiseldrl3ir_angle));
		}
		
		$Vnwufml5q3nphis->Line($Vangwoo3ejfg0, $Vgxufordoa4t0, $Vvt20qqut4bux1, $Vvt20qqut4buy1);
		
		$Vangwoo3ejfg2L = $Vangwoo3ejfg1 + ($Vudz4oh4qikurm_size * cos($Vc0aiseldrl3ir_angle + $Vudz4oh4qikurm_angle));
		$Vgxufordoa4t2L = $Vgxufordoa4t1 + ($Vudz4oh4qikurm_size * sin($Vc0aiseldrl3ir_angle + $Vudz4oh4qikurm_angle));
		
		$Vangwoo3ejfg2R = $Vangwoo3ejfg1 + ($Vudz4oh4qikurm_size * cos($Vc0aiseldrl3ir_angle - $Vudz4oh4qikurm_angle));
		$Vgxufordoa4t2R = $Vgxufordoa4t1 + ($Vudz4oh4qikurm_size * sin($Vc0aiseldrl3ir_angle - $Vudz4oh4qikurm_angle));
		$V0vkydnx50wa = 'D';
		$Vovexk3mzujo = array();
		switch ($Vvjxcwrp4tjqead_style) {
			case 0: {
				
				$V0vkydnx50wa = 'D';
				$Vovexk3mzujo = array(1, 1, 0);
				break;
			}
			case 1: {
				
				$V0vkydnx50wa = 'D';
				break;
			}
			case 2: {
				
				$V0vkydnx50wa = 'DF';
				break;
			}
			case 3: {
				
				$V0vkydnx50wa = 'F';
				break;
			}
		}
		$Vnwufml5q3nphis->Polygon(array($Vangwoo3ejfg2L, $Vgxufordoa4t2L, $Vangwoo3ejfg1, $Vgxufordoa4t1, $Vangwoo3ejfg2R, $Vgxufordoa4t2R), $V0vkydnx50wa, $Vovexk3mzujo, array());
	}

	

	
	public function setDestination($Vgv45dfhsyuhame, $Vgxufordoa4t=-1, $Vwfolue42pzj='', $Vangwoo3ejfg=-1) {
		
		$Vgv45dfhsyuhame = TCPDF_STATIC::encodeNameObject($Vgv45dfhsyuhame);
		if (TCPDF_STATIC::empty_string($Vgv45dfhsyuhame)) {
			return false;
		}
		if ($Vgxufordoa4t == -1) {
			$Vgxufordoa4t = $Vnwufml5q3nphis->GetY();
		} elseif ($Vgxufordoa4t < 0) {
			$Vgxufordoa4t = 0;
		} elseif ($Vgxufordoa4t > $Vnwufml5q3nphis->h) {
			$Vgxufordoa4t = $Vnwufml5q3nphis->h;
		}
		if ($Vangwoo3ejfg == -1) {
			$Vangwoo3ejfg = $Vnwufml5q3nphis->GetX();
		} elseif ($Vangwoo3ejfg < 0) {
			$Vangwoo3ejfg = 0;
		} elseif ($Vangwoo3ejfg > $Vnwufml5q3nphis->w) {
			$Vangwoo3ejfg = $Vnwufml5q3nphis->w;
		}
		$Vqhmndukgu3e = false;
		if (!empty($Vwfolue42pzj) AND ($Vwfolue42pzj[0] == '*')) {
			$Vwfolue42pzj = intval(substr($Vwfolue42pzj, 1));
			
			$Vqhmndukgu3e = true;
		}
		if (empty($Vwfolue42pzj)) {
			$Vwfolue42pzj = $Vnwufml5q3nphis->PageNo();
			if (empty($Vwfolue42pzj)) {
				return;
			}
		}
		$Vnwufml5q3nphis->dests[$Vgv45dfhsyuhame] = array('x' => $Vangwoo3ejfg, 'y' => $Vgxufordoa4t, 'p' => $Vwfolue42pzj, 'f' => $Vqhmndukgu3e);
		return $Vgv45dfhsyuhame;
	}

	
	public function getDestination() {
		return $Vnwufml5q3nphis->dests;
	}

	
	protected function _putdests() {
		if (empty($Vnwufml5q3nphis->dests)) {
			return;
		}
		$Vnwufml5q3nphis->n_dests = $Vnwufml5q3nphis->_newobj();
		$V4t5ynycapey = ' <<';
		foreach($Vnwufml5q3nphis->dests as $Vgv45dfhsyuhame => $Vk1y4jyuc5ns) {
			$V4t5ynycapey .= ' /'.$Vgv45dfhsyuhame.' '.sprintf('[%u 0 R /XYZ %F %F null]', $Vnwufml5q3nphis->page_obj_id[($Vk1y4jyuc5ns['p'])], ($Vk1y4jyuc5ns['x'] * $Vnwufml5q3nphis->k), ($Vnwufml5q3nphis->pagedim[$Vk1y4jyuc5ns['p']]['h'] - ($Vk1y4jyuc5ns['y'] * $Vnwufml5q3nphis->k)));
		}
		$V4t5ynycapey .= ' >>';
		$V4t5ynycapey .= "\n".'endobj';
		$Vnwufml5q3nphis->_out($V4t5ynycapey);
	}

	
	public function setBookmark($Vg1d0vbcooi4, $Vx3g4ytafo1aevel=0, $Vgxufordoa4t=-1, $Vwfolue42pzj='', $Vovexk3mzujo='', $Vwcmlurixvzgolor=array(0,0,0), $Vangwoo3ejfg=-1, $Vx3g4ytafo1aink='') {
		$Vnwufml5q3nphis->Bookmark($Vg1d0vbcooi4, $Vx3g4ytafo1aevel, $Vgxufordoa4t, $Vwfolue42pzj, $Vovexk3mzujo, $Vwcmlurixvzgolor, $Vangwoo3ejfg, $Vx3g4ytafo1aink);
	}

	
	public function Bookmark($Vg1d0vbcooi4, $Vx3g4ytafo1aevel=0, $Vgxufordoa4t=-1, $Vwfolue42pzj='', $Vovexk3mzujo='', $Vwcmlurixvzgolor=array(0,0,0), $Vangwoo3ejfg=-1, $Vx3g4ytafo1aink='') {
		if ($Vx3g4ytafo1aevel < 0) {
			$Vx3g4ytafo1aevel = 0;
		}
		if (isset($Vnwufml5q3nphis->outlines[0])) {
			$Vx3g4ytafo1aastoutline = end($Vnwufml5q3nphis->outlines);
			$Vetludueqmbtaxlevel = $Vx3g4ytafo1aastoutline['l'] + 1;
		} else {
			$Vetludueqmbtaxlevel = 0;
		}
		if ($Vx3g4ytafo1aevel > $Vetludueqmbtaxlevel) {
			$Vx3g4ytafo1aevel = $Vetludueqmbtaxlevel;
		}
		if ($Vgxufordoa4t == -1) {
			$Vgxufordoa4t = $Vnwufml5q3nphis->GetY();
		} elseif ($Vgxufordoa4t < 0) {
			$Vgxufordoa4t = 0;
		} elseif ($Vgxufordoa4t > $Vnwufml5q3nphis->h) {
			$Vgxufordoa4t = $Vnwufml5q3nphis->h;
		}
		if ($Vangwoo3ejfg == -1) {
			$Vangwoo3ejfg = $Vnwufml5q3nphis->GetX();
		} elseif ($Vangwoo3ejfg < 0) {
			$Vangwoo3ejfg = 0;
		} elseif ($Vangwoo3ejfg > $Vnwufml5q3nphis->w) {
			$Vangwoo3ejfg = $Vnwufml5q3nphis->w;
		}
		$Vqhmndukgu3e = false;
		if (!empty($Vwfolue42pzj) AND ($Vwfolue42pzj[0] == '*')) {
			$Vwfolue42pzj = intval(substr($Vwfolue42pzj, 1));
			
			$Vqhmndukgu3e = true;
		}
		if (empty($Vwfolue42pzj)) {
			$Vwfolue42pzj = $Vnwufml5q3nphis->PageNo();
			if (empty($Vwfolue42pzj)) {
				return;
			}
		}
		$Vnwufml5q3nphis->outlines[] = array('t' => $Vg1d0vbcooi4, 'l' => $Vx3g4ytafo1aevel, 'x' => $Vangwoo3ejfg, 'y' => $Vgxufordoa4t, 'p' => $Vwfolue42pzj, 'f' => $Vqhmndukgu3e, 's' => strtoupper($Vovexk3mzujo), 'c' => $Vwcmlurixvzgolor, 'u' => $Vx3g4ytafo1aink);
	}

	
	protected function sortBookmarks() {
		
		$V11xlf4riwnd_p = array();
		$V11xlf4riwnd_y = array();
		foreach ($Vnwufml5q3nphis->outlines as $Vl0q4noiexi4ey => $Vfhkt4vbeualow) {
			$V11xlf4riwnd_p[$Vl0q4noiexi4ey] = $Vfhkt4vbeualow['p'];
			$V11xlf4riwnd_k[$Vl0q4noiexi4ey] = $Vl0q4noiexi4ey;
		}
		
		array_multisort($V11xlf4riwnd_p, SORT_NUMERIC, SORT_ASC, $V11xlf4riwnd_k, SORT_NUMERIC, SORT_ASC, $Vnwufml5q3nphis->outlines);
	}

	
	protected function _putbookmarks() {
		$Vgv45dfhsyuhb = count($Vnwufml5q3nphis->outlines);
		if ($Vgv45dfhsyuhb == 0) {
			return;
		}
		
		$Vnwufml5q3nphis->sortBookmarks();
		$Vx3g4ytafo1aru = array();
		$Vx3g4ytafo1aevel = 0;
		foreach ($Vnwufml5q3nphis->outlines as $V55vc4mewy5w => $Vk1y4jyuc5ns) {
			if ($Vk1y4jyuc5ns['l'] > 0) {
				$V1yuhsvbtlvrarent = $Vx3g4ytafo1aru[($Vk1y4jyuc5ns['l'] - 1)];
				
				$Vnwufml5q3nphis->outlines[$V55vc4mewy5w]['parent'] = $V1yuhsvbtlvrarent;
				$Vnwufml5q3nphis->outlines[$V1yuhsvbtlvrarent]['last'] = $V55vc4mewy5w;
				if ($Vk1y4jyuc5ns['l'] > $Vx3g4ytafo1aevel) {
					
					$Vnwufml5q3nphis->outlines[$V1yuhsvbtlvrarent]['first'] = $V55vc4mewy5w;
				}
			} else {
				$Vnwufml5q3nphis->outlines[$V55vc4mewy5w]['parent'] = $Vgv45dfhsyuhb;
			}
			if (($Vk1y4jyuc5ns['l'] <= $Vx3g4ytafo1aevel) AND ($V55vc4mewy5w > 0)) {
				
				$V1yuhsvbtlvrrev = $Vx3g4ytafo1aru[$Vk1y4jyuc5ns['l']];
				$Vnwufml5q3nphis->outlines[$V1yuhsvbtlvrrev]['next'] = $V55vc4mewy5w;
				$Vnwufml5q3nphis->outlines[$V55vc4mewy5w]['prev'] = $V1yuhsvbtlvrrev;
			}
			$Vx3g4ytafo1aru[$Vk1y4jyuc5ns['l']] = $V55vc4mewy5w;
			$Vx3g4ytafo1aevel = $Vk1y4jyuc5ns['l'];
		}
		
		$Vgv45dfhsyuh = $Vnwufml5q3nphis->n + 1;
		$Vgv45dfhsyuhltags = '/<br[\s]?\/>|<\/(blockquote|dd|dl|div|dt|h1|h2|h3|h4|h5|h6|hr|li|ol|p|pre|ul|tcpdf|table|tr|td)>/si';
		foreach ($Vnwufml5q3nphis->outlines as $V55vc4mewy5w => $Vk1y4jyuc5ns) {
			$V0ql3xygizkc = $Vnwufml5q3nphis->_newobj();
			
			$V3awurwxucbv = preg_replace($Vgv45dfhsyuhltags, "\n", $Vk1y4jyuc5ns['t']);
			$V3awurwxucbv = preg_replace("/[\r]+/si", '', $V3awurwxucbv);
			$V3awurwxucbv = preg_replace("/[\n]+/si", "\n", $V3awurwxucbv);
			$V3awurwxucbv = strip_tags($V3awurwxucbv);
			$V3awurwxucbv = $Vnwufml5q3nphis->stringTrim($V3awurwxucbv);
			$V4t5ynycapey = '<</Title '.$Vnwufml5q3nphis->_textstring($V3awurwxucbv, $V0ql3xygizkc);
			$V4t5ynycapey .= ' /Parent '.($Vgv45dfhsyuh + $Vk1y4jyuc5ns['parent']).' 0 R';
			if (isset($Vk1y4jyuc5ns['prev'])) {
				$V4t5ynycapey .= ' /Prev '.($Vgv45dfhsyuh + $Vk1y4jyuc5ns['prev']).' 0 R';
			}
			if (isset($Vk1y4jyuc5ns['next'])) {
				$V4t5ynycapey .= ' /Next '.($Vgv45dfhsyuh + $Vk1y4jyuc5ns['next']).' 0 R';
			}
			if (isset($Vk1y4jyuc5ns['first'])) {
				$V4t5ynycapey .= ' /First '.($Vgv45dfhsyuh + $Vk1y4jyuc5ns['first']).' 0 R';
			}
			if (isset($Vk1y4jyuc5ns['last'])) {
				$V4t5ynycapey .= ' /Last '.($Vgv45dfhsyuh + $Vk1y4jyuc5ns['last']).' 0 R';
			}
			if (isset($Vk1y4jyuc5ns['u']) AND !empty($Vk1y4jyuc5ns['u'])) {
				
				if (is_string($Vk1y4jyuc5ns['u'])) {
					if ($Vk1y4jyuc5ns['u'][0] == '#') {
						
						$V4t5ynycapey .= ' /Dest /'.TCPDF_STATIC::encodeNameObject(substr($Vk1y4jyuc5ns['u'], 1));
					} elseif ($Vk1y4jyuc5ns['u'][0] == '%') {
						
						$Vjluyuwumvofname = basename(substr($Vk1y4jyuc5ns['u'], 1));
						$V4t5ynycapey .= ' /A <</S /GoToE /D [0 /Fit] /NewWindow true /T << /R /C /P '.($Vk1y4jyuc5ns['p'] - 1).' /A '.$Vnwufml5q3nphis->embeddedfiles[$Vjluyuwumvofname]['a'].' >> >>';
					} elseif ($Vk1y4jyuc5ns['u'][0] == '*') {
						
						$Vjluyuwumvofname = basename(substr($Vk1y4jyuc5ns['u'], 1));
						$Vuaufi3la1vgsa = 'var D=event.target.doc;var MyData=D.dataObjects;for (var i in MyData) if (MyData[i].path=="'.$Vjluyuwumvofname.'") D.exportDataObject( { cName : MyData[i].name, nLaunch : 2});';
						$V4t5ynycapey .= ' /A <</S /JavaScript /JS '.$Vnwufml5q3nphis->_textstring($Vuaufi3la1vgsa, $V0ql3xygizkc).'>>';
					} else {
						
						$V4t5ynycapey .= ' /A <</S /URI /URI '.$Vnwufml5q3nphis->_datastring($Vnwufml5q3nphis->unhtmlentities($Vk1y4jyuc5ns['u']), $V0ql3xygizkc).'>>';
					}
				} elseif (isset($Vnwufml5q3nphis->links[$Vk1y4jyuc5ns['u']])) {
					
					$Vx3g4ytafo1a = $Vnwufml5q3nphis->links[$Vk1y4jyuc5ns['u']];
					if (isset($Vnwufml5q3nphis->page_obj_id[($Vx3g4ytafo1a['p'])])) {
						$V4t5ynycapey .= sprintf(' /Dest [%u 0 R /XYZ 0 %F null]', $Vnwufml5q3nphis->page_obj_id[($Vx3g4ytafo1a['p'])], ($Vnwufml5q3nphis->pagedim[$Vx3g4ytafo1a['p']]['h'] - ($Vx3g4ytafo1a['y'] * $Vnwufml5q3nphis->k)));
					}
				}
			} elseif (isset($Vnwufml5q3nphis->page_obj_id[($Vk1y4jyuc5ns['p'])])) {
				
				$V4t5ynycapey .= ' '.sprintf('/Dest [%u 0 R /XYZ %F %F null]', $Vnwufml5q3nphis->page_obj_id[($Vk1y4jyuc5ns['p'])], ($Vk1y4jyuc5ns['x'] * $Vnwufml5q3nphis->k), ($Vnwufml5q3nphis->pagedim[$Vk1y4jyuc5ns['p']]['h'] - ($Vk1y4jyuc5ns['y'] * $Vnwufml5q3nphis->k)));
			}
			
			$Vovexk3mzujo = 0;
			if (!empty($Vk1y4jyuc5ns['s'])) {
				
				if (strpos($Vk1y4jyuc5ns['s'], 'B') !== false) {
					$Vovexk3mzujo |= 2;
				}
				
				if (strpos($Vk1y4jyuc5ns['s'], 'I') !== false) {
					$Vovexk3mzujo |= 1;
				}
			}
			$V4t5ynycapey .= sprintf(' /F %d', $Vovexk3mzujo);
			
			if (isset($Vk1y4jyuc5ns['c']) AND is_array($Vk1y4jyuc5ns['c']) AND (count($Vk1y4jyuc5ns['c']) == 3)) {
				$Vwcmlurixvzgolor = array_values($Vk1y4jyuc5ns['c']);
				$V4t5ynycapey .= sprintf(' /C [%F %F %F]', ($Vwcmlurixvzgolor[0] / 255), ($Vwcmlurixvzgolor[1] / 255), ($Vwcmlurixvzgolor[2] / 255));
			} else {
				
				$V4t5ynycapey .= ' /C [0.0 0.0 0.0]';
			}
			$V4t5ynycapey .= ' /Count 0'; 
			$V4t5ynycapey .= ' >>';
			$V4t5ynycapey .= "\n".'endobj';
			$Vnwufml5q3nphis->_out($V4t5ynycapey);
		}
		
		$Vnwufml5q3nphis->OutlineRoot = $Vnwufml5q3nphis->_newobj();
		$Vnwufml5q3nphis->_out('<< /Type /Outlines /First '.$Vgv45dfhsyuh.' 0 R /Last '.($Vgv45dfhsyuh + $Vx3g4ytafo1aru[0]).' 0 R >>'."\n".'endobj');
	}

	

	
	public function IncludeJS($Vvt20qqut4bucript) {
		$Vnwufml5q3nphis->javascript .= $Vvt20qqut4bucript;
	}

	
	public function addJavascriptObject($Vvt20qqut4bucript, $Vk1y4jyuc5nsnload=false) {
		if ($Vnwufml5q3nphis->pdfa_mode) {
			
			return false;
		}
		++$Vnwufml5q3nphis->n;
		$Vnwufml5q3nphis->js_objects[$Vnwufml5q3nphis->n] = array('n' => $Vnwufml5q3nphis->n, 'js' => $Vvt20qqut4bucript, 'onload' => $Vk1y4jyuc5nsnload);
		return $Vnwufml5q3nphis->n;
	}

	
	protected function _putjavascript() {
		if ($Vnwufml5q3nphis->pdfa_mode OR (empty($Vnwufml5q3nphis->javascript) AND empty($Vnwufml5q3nphis->js_objects))) {
			return;
		}
		if (strpos($Vnwufml5q3nphis->javascript, 'this.addField') > 0) {
			if (!$Vnwufml5q3nphis->ur['enabled']) {
				
			}
			
			
			$Vuaufi3la1vgsa = sprintf("ftcpdfdocsaved=this.addField('%s','%s',%d,[%F,%F,%F,%F]);", 'tcpdfdocsaved', 'text', 0, 0, 1, 0, 1);
			$Vuaufi3la1vgsb = "getField('tcpdfdocsaved').value='saved';";
			$Vnwufml5q3nphis->javascript = $Vuaufi3la1vgsa."\n".$Vnwufml5q3nphis->javascript."\n".$Vuaufi3la1vgsb;
		}
		
		$Vnwufml5q3nphis->n_js = '<< /Names [';
		if (!empty($Vnwufml5q3nphis->javascript)) {
			$Vnwufml5q3nphis->n_js .= ' (EmbeddedJS) '.($Vnwufml5q3nphis->n + 1).' 0 R';
		}
		if (!empty($Vnwufml5q3nphis->js_objects)) {
			foreach ($Vnwufml5q3nphis->js_objects as $Vl0q4noiexi4ey => $Vxt4wx3pvtez) {
				if ($Vxt4wx3pvtez['onload']) {
					$Vnwufml5q3nphis->n_js .= ' (JS'.$Vl0q4noiexi4ey.') '.$Vl0q4noiexi4ey.' 0 R';
				}
			}
		}
		$Vnwufml5q3nphis->n_js .= ' ] >>';
		
		if (!empty($Vnwufml5q3nphis->javascript)) {
			$Vk1y4jyuc5nsbj_id = $Vnwufml5q3nphis->_newobj();
			$V4t5ynycapey = '<< /S /JavaScript';
			$V4t5ynycapey .= ' /JS '.$Vnwufml5q3nphis->_textstring($Vnwufml5q3nphis->javascript, $Vk1y4jyuc5nsbj_id);
			$V4t5ynycapey .= ' >>';
			$V4t5ynycapey .= "\n".'endobj';
			$Vnwufml5q3nphis->_out($V4t5ynycapey);
		}
		
		if (!empty($Vnwufml5q3nphis->js_objects)) {
			foreach ($Vnwufml5q3nphis->js_objects as $Vl0q4noiexi4ey => $Vxt4wx3pvtez) {
				$V4t5ynycapey = $Vnwufml5q3nphis->_getobj($Vl0q4noiexi4ey)."\n".' << /S /JavaScript /JS '.$Vnwufml5q3nphis->_textstring($Vxt4wx3pvtez['js'], $Vl0q4noiexi4ey).' >>'."\n".'endobj';
				$Vnwufml5q3nphis->_out($V4t5ynycapey);
			}
		}
	}

	
	protected function _addfield($Vvmwm1jsklgc, $Vgv45dfhsyuhame, $Vangwoo3ejfg, $Vgxufordoa4t, $Vim12f51jw5r, $Vvjxcwrp4tjq, $V1yuhsvbtlvrrop) {
		if ($Vnwufml5q3nphis->rtl) {
			$Vangwoo3ejfg = $Vangwoo3ejfg - $Vim12f51jw5r;
		}
		
		$Vnwufml5q3nphis->javascript .= "if (getField('tcpdfdocsaved').value != 'saved') {";
		$Vl0q4noiexi4 = $Vnwufml5q3nphis->k;
		$Vnwufml5q3nphis->javascript .= sprintf("f".$Vgv45dfhsyuhame."=this.addField('%s','%s',%u,[%F,%F,%F,%F]);", $Vgv45dfhsyuhame, $Vvmwm1jsklgc, $Vnwufml5q3nphis->PageNo()-1, $Vangwoo3ejfg*$Vl0q4noiexi4, ($Vnwufml5q3nphis->h-$Vgxufordoa4t)*$Vl0q4noiexi4+1, ($Vangwoo3ejfg+$Vim12f51jw5r)*$Vl0q4noiexi4, ($Vnwufml5q3nphis->h-$Vgxufordoa4t-$Vvjxcwrp4tjq)*$Vl0q4noiexi4+1)."\n";
		$Vnwufml5q3nphis->javascript .= 'f'.$Vgv45dfhsyuhame.'.textSize='.$Vnwufml5q3nphis->FontSizePt.";\n";
		while (list($Vl0q4noiexi4ey, $Vxt4wx3pvtez) = each($V1yuhsvbtlvrrop)) {
			if (strcmp(substr($Vl0q4noiexi4ey, -5), 'Color') == 0) {
				$Vxt4wx3pvtez = TCPDF_COLORS::_JScolor($Vxt4wx3pvtez);
			} else {
				$Vxt4wx3pvtez = "'".$Vxt4wx3pvtez."'";
			}
			$Vnwufml5q3nphis->javascript .= 'f'.$Vgv45dfhsyuhame.'.'.$Vl0q4noiexi4ey.'='.$Vxt4wx3pvtez.";\n";
		}
		if ($Vnwufml5q3nphis->rtl) {
			$Vnwufml5q3nphis->x -= $Vim12f51jw5r;
		} else {
			$Vnwufml5q3nphis->x += $Vim12f51jw5r;
		}
		$Vnwufml5q3nphis->javascript .= '}';
	}

	



	
	public function setFormDefaultProp($V1yuhsvbtlvrrop=array()) {
		$Vnwufml5q3nphis->default_form_prop = $V1yuhsvbtlvrrop;
	}

	
	public function getFormDefaultProp() {
		return $Vnwufml5q3nphis->default_form_prop;
	}

	
	public function TextField($Vgv45dfhsyuhame, $Vim12f51jw5r, $Vvjxcwrp4tjq, $V1yuhsvbtlvrrop=array(), $Vybdom4h5ylw=array(), $Vangwoo3ejfg='', $Vgxufordoa4t='', $Vuaufi3la1vgs=false) {
		if ($Vangwoo3ejfg === '') {
			$Vangwoo3ejfg = $Vnwufml5q3nphis->x;
		}
		if ($Vgxufordoa4t === '') {
			$Vgxufordoa4t = $Vnwufml5q3nphis->y;
		}
		
		list($Vangwoo3ejfg, $Vgxufordoa4t) = $Vnwufml5q3nphis->checkPageRegions($Vvjxcwrp4tjq, $Vangwoo3ejfg, $Vgxufordoa4t);
		if ($Vuaufi3la1vgs) {
			$Vnwufml5q3nphis->_addfield('text', $Vgv45dfhsyuhame, $Vangwoo3ejfg, $Vgxufordoa4t, $Vim12f51jw5r, $Vvjxcwrp4tjq, $V1yuhsvbtlvrrop);
			return;
		}
		
		$V1yuhsvbtlvrrop = array_merge($Vnwufml5q3nphis->getFormDefaultProp(), $V1yuhsvbtlvrrop);
		
		$V1yuhsvbtlvropt = TCPDF_STATIC::getAnnotOptFromJSProp($V1yuhsvbtlvrrop, $Vnwufml5q3nphis->spot_colors, $Vnwufml5q3nphis->rtl);
		
		$Vnwufml5q3nphis->annotation_fonts[$Vnwufml5q3nphis->CurrentFont['fontkey']] = $Vnwufml5q3nphis->CurrentFont['i'];
		$Vshfhqyg5vyrtyle = sprintf('/F%d %F Tf %s', $Vnwufml5q3nphis->CurrentFont['i'], $Vnwufml5q3nphis->FontSizePt, $Vnwufml5q3nphis->TextColor);
		$V1yuhsvbtlvropt['da'] = $Vshfhqyg5vyrtyle;
		
		$V1yuhsvbtlvropt['ap'] = array();
		$V1yuhsvbtlvropt['ap']['n'] = '/Tx BMC q '.$Vshfhqyg5vyrtyle.' ';
		$Vdvjst2lzhef = '';
		if (isset($V1yuhsvbtlvrrop['value']) AND !empty($V1yuhsvbtlvrrop['value'])) {
			$Vdvjst2lzhef = $V1yuhsvbtlvrrop['value'];
		} elseif (isset($Vybdom4h5ylw['v']) AND !empty($Vybdom4h5ylw['v'])) {
			$Vdvjst2lzhef = $Vybdom4h5ylw['v'];
		}
		$V3p0tae11ldwid = $Vnwufml5q3nphis->startTemplate($Vim12f51jw5r, $Vvjxcwrp4tjq, false);
		$Vb5kn1gbu0ep = '';
		if (isset($V1yuhsvbtlvropt['q'])) {
			switch ($V1yuhsvbtlvropt['q']) {
				case 0: {
					$Vb5kn1gbu0ep = 'L';
					break;
				}
				case 1: {
					$Vb5kn1gbu0ep = 'C';
					break;
				}
				case 2: {
					$Vb5kn1gbu0ep = 'R';
					break;
				}
				default: {
					$Vb5kn1gbu0ep = '';
					break;
				}
			}
		}
		$Vnwufml5q3nphis->MultiCell($Vim12f51jw5r, $Vvjxcwrp4tjq, $Vdvjst2lzhef, 0, $Vb5kn1gbu0ep, false, 0, 0, 0, true, 0, false, true, 0, 'T', false);
		$Vnwufml5q3nphis->endTemplate();
		--$Vnwufml5q3nphis->n;
		$V1yuhsvbtlvropt['ap']['n'] .= $Vnwufml5q3nphis->xobjects[$V3p0tae11ldwid]['outdata'];
		unset($Vnwufml5q3nphis->xobjects[$V3p0tae11ldwid]);
		$V1yuhsvbtlvropt['ap']['n'] .= 'Q EMC';
		
		$Vybdom4h5ylw = array_merge($V1yuhsvbtlvropt, $Vybdom4h5ylw);
		
		unset($Vybdom4h5ylw['bs']);
		
		$Vybdom4h5ylw['Subtype'] = 'Widget';
		$Vybdom4h5ylw['ft'] = 'Tx';
		$Vybdom4h5ylw['t'] = $Vgv45dfhsyuhame;
		
		
		
		
		
		
		
		
		
		
		
		
		unset($Vybdom4h5ylw['mk']['ca']);
		unset($Vybdom4h5ylw['mk']['rc']);
		unset($Vybdom4h5ylw['mk']['ac']);
		unset($Vybdom4h5ylw['mk']['i']);
		unset($Vybdom4h5ylw['mk']['ri']);
		unset($Vybdom4h5ylw['mk']['ix']);
		unset($Vybdom4h5ylw['mk']['if']);
		
		
		
		
		unset($Vybdom4h5ylw['mk']['tp']);
		
		
		
		
		
		
		
		
		$Vnwufml5q3nphis->Annotation($Vangwoo3ejfg, $Vgxufordoa4t, $Vim12f51jw5r, $Vvjxcwrp4tjq, $Vgv45dfhsyuhame, $Vybdom4h5ylw, 0);
		if ($Vnwufml5q3nphis->rtl) {
			$Vnwufml5q3nphis->x -= $Vim12f51jw5r;
		} else {
			$Vnwufml5q3nphis->x += $Vim12f51jw5r;
		}
	}

	
	public function RadioButton($Vgv45dfhsyuhame, $Vim12f51jw5r, $V1yuhsvbtlvrrop=array(), $Vybdom4h5ylw=array(), $Vk1y4jyuc5nsnvalue='On', $Vwcmlurixvzghecked=false, $Vangwoo3ejfg='', $Vgxufordoa4t='', $Vuaufi3la1vgs=false) {
		if ($Vangwoo3ejfg === '') {
			$Vangwoo3ejfg = $Vnwufml5q3nphis->x;
		}
		if ($Vgxufordoa4t === '') {
			$Vgxufordoa4t = $Vnwufml5q3nphis->y;
		}
		
		list($Vangwoo3ejfg, $Vgxufordoa4t) = $Vnwufml5q3nphis->checkPageRegions($Vim12f51jw5r, $Vangwoo3ejfg, $Vgxufordoa4t);
		if ($Vuaufi3la1vgs) {
			$Vnwufml5q3nphis->_addfield('radiobutton', $Vgv45dfhsyuhame, $Vangwoo3ejfg, $Vgxufordoa4t, $Vim12f51jw5r, $Vim12f51jw5r, $V1yuhsvbtlvrrop);
			return;
		}
		if (TCPDF_STATIC::empty_string($Vk1y4jyuc5nsnvalue)) {
			$Vk1y4jyuc5nsnvalue = 'On';
		}
		if ($Vwcmlurixvzghecked) {
			$Vc0aiseldrl3efval = $Vk1y4jyuc5nsnvalue;
		} else {
			$Vc0aiseldrl3efval = 'Off';
		}
		
		$Voc1qigl3k5y = 'zapfdingbats';
		if ($Vnwufml5q3nphis->pdfa_mode) {
			
			$Voc1qigl3k5y = 'pdfa'.$Voc1qigl3k5y;
		}
		$Vnwufml5q3nphis->AddFont($Voc1qigl3k5y);
		$V3p0tae11ldwfont = $Vnwufml5q3nphis->getFontBuffer($Voc1qigl3k5y);
		
		if (!isset($Vnwufml5q3nphis->radiobutton_groups[$Vnwufml5q3nphis->page])) {
			$Vnwufml5q3nphis->radiobutton_groups[$Vnwufml5q3nphis->page] = array();
		}
		if (!isset($Vnwufml5q3nphis->radiobutton_groups[$Vnwufml5q3nphis->page][$Vgv45dfhsyuhame])) {
			$Vnwufml5q3nphis->radiobutton_groups[$Vnwufml5q3nphis->page][$Vgv45dfhsyuhame] = array();
			++$Vnwufml5q3nphis->n;
			$Vnwufml5q3nphis->radiobutton_groups[$Vnwufml5q3nphis->page][$Vgv45dfhsyuhame]['n'] = $Vnwufml5q3nphis->n;
			$Vnwufml5q3nphis->radio_groups[] = $Vnwufml5q3nphis->n;
		}
		$Vl0q4noiexi4id = ($Vnwufml5q3nphis->n + 1);
		
		$Vnwufml5q3nphis->radiobutton_groups[$Vnwufml5q3nphis->page][$Vgv45dfhsyuhame][] = array('kid' => $Vl0q4noiexi4id, 'def' => $Vc0aiseldrl3efval);
		
		$V1yuhsvbtlvrrop = array_merge($Vnwufml5q3nphis->getFormDefaultProp(), $V1yuhsvbtlvrrop);
		$V1yuhsvbtlvrrop['NoToggleToOff'] = 'true';
		$V1yuhsvbtlvrrop['Radio'] = 'true';
		$V1yuhsvbtlvrrop['borderStyle'] = 'inset';
		
		$V1yuhsvbtlvropt = TCPDF_STATIC::getAnnotOptFromJSProp($V1yuhsvbtlvrrop, $Vnwufml5q3nphis->spot_colors, $Vnwufml5q3nphis->rtl);
		
		$Vnwufml5q3nphis->annotation_fonts[$V3p0tae11ldwfont['fontkey']] = $V3p0tae11ldwfont['i'];
		$Vshfhqyg5vyrtyle = sprintf('/F%d %F Tf %s', $V3p0tae11ldwfont['i'], $Vnwufml5q3nphis->FontSizePt, $Vnwufml5q3nphis->TextColor);
		$V1yuhsvbtlvropt['da'] = $Vshfhqyg5vyrtyle;
		
		$V1yuhsvbtlvropt['ap'] = array();
		$V1yuhsvbtlvropt['ap']['n'] = array();
		$Vxb0ra0fqzn2x = ((($Vim12f51jw5r - $Vnwufml5q3nphis->getAbsFontMeasure($V3p0tae11ldwfont['cw'][108])) / 2) * $Vnwufml5q3nphis->k);
		$Vxb0ra0fqzn2y = (($Vim12f51jw5r - ((($V3p0tae11ldwfont['desc']['Ascent'] - $V3p0tae11ldwfont['desc']['Descent']) * $Vnwufml5q3nphis->FontSizePt / 1000) / $Vnwufml5q3nphis->k)) * $Vnwufml5q3nphis->k);
		$V1yuhsvbtlvropt['ap']['n'][$Vk1y4jyuc5nsnvalue] = sprintf('q %s BT /F%d %F Tf %F %F Td ('.chr(108).') Tj ET Q', $Vnwufml5q3nphis->TextColor, $V3p0tae11ldwfont['i'], $Vnwufml5q3nphis->FontSizePt, $Vxb0ra0fqzn2x, $Vxb0ra0fqzn2y);
		$V1yuhsvbtlvropt['ap']['n']['Off'] = sprintf('q %s BT /F%d %F Tf %F %F Td ('.chr(109).') Tj ET Q', $Vnwufml5q3nphis->TextColor, $V3p0tae11ldwfont['i'], $Vnwufml5q3nphis->FontSizePt, $Vxb0ra0fqzn2x, $Vxb0ra0fqzn2y);
		if (!isset($V1yuhsvbtlvropt['mk'])) {
			$V1yuhsvbtlvropt['mk'] = array();
		}
		$V1yuhsvbtlvropt['mk']['ca'] = '(l)';
		
		$Vybdom4h5ylw = array_merge($V1yuhsvbtlvropt, $Vybdom4h5ylw);
		
		$Vybdom4h5ylw['Subtype'] = 'Widget';
		$Vybdom4h5ylw['ft'] = 'Btn';
		if ($Vwcmlurixvzghecked) {
			$Vybdom4h5ylw['v'] = array('/'.$Vk1y4jyuc5nsnvalue);
			$Vybdom4h5ylw['as'] = $Vk1y4jyuc5nsnvalue;
		} else {
			$Vybdom4h5ylw['as'] = 'Off';
		}
		
		if (!isset($Vnwufml5q3nphis->radiobutton_groups[$Vnwufml5q3nphis->page][$Vgv45dfhsyuhame]['#readonly#'])) {
			$Vnwufml5q3nphis->radiobutton_groups[$Vnwufml5q3nphis->page][$Vgv45dfhsyuhame]['#readonly#'] = false;
		}
		$Vnwufml5q3nphis->radiobutton_groups[$Vnwufml5q3nphis->page][$Vgv45dfhsyuhame]['#readonly#'] |= ($Vybdom4h5ylw['f'] & 64);
		$Vnwufml5q3nphis->Annotation($Vangwoo3ejfg, $Vgxufordoa4t, $Vim12f51jw5r, $Vim12f51jw5r, $Vgv45dfhsyuhame, $Vybdom4h5ylw, 0);
		if ($Vnwufml5q3nphis->rtl) {
			$Vnwufml5q3nphis->x -= $Vim12f51jw5r;
		} else {
			$Vnwufml5q3nphis->x += $Vim12f51jw5r;
		}
	}

	
	public function ListBox($Vgv45dfhsyuhame, $Vim12f51jw5r, $Vvjxcwrp4tjq, $Vxt4wx3pvtezues, $V1yuhsvbtlvrrop=array(), $Vybdom4h5ylw=array(), $Vangwoo3ejfg='', $Vgxufordoa4t='', $Vuaufi3la1vgs=false) {
		if ($Vangwoo3ejfg === '') {
			$Vangwoo3ejfg = $Vnwufml5q3nphis->x;
		}
		if ($Vgxufordoa4t === '') {
			$Vgxufordoa4t = $Vnwufml5q3nphis->y;
		}
		
		list($Vangwoo3ejfg, $Vgxufordoa4t) = $Vnwufml5q3nphis->checkPageRegions($Vvjxcwrp4tjq, $Vangwoo3ejfg, $Vgxufordoa4t);
		if ($Vuaufi3la1vgs) {
			$Vnwufml5q3nphis->_addfield('listbox', $Vgv45dfhsyuhame, $Vangwoo3ejfg, $Vgxufordoa4t, $Vim12f51jw5r, $Vvjxcwrp4tjq, $V1yuhsvbtlvrrop);
			$Vvt20qqut4bu = '';
			foreach ($Vxt4wx3pvtezues as $Vxt4wx3pvtezue) {
				if (is_array($Vxt4wx3pvtezue)) {
					$Vvt20qqut4bu .= ',[\''.addslashes($Vxt4wx3pvtezue[1]).'\',\''.addslashes($Vxt4wx3pvtezue[0]).'\']';
				} else {
					$Vvt20qqut4bu .= ',[\''.addslashes($Vxt4wx3pvtezue).'\',\''.addslashes($Vxt4wx3pvtezue).'\']';
				}
			}
			$Vnwufml5q3nphis->javascript .= 'f'.$Vgv45dfhsyuhame.'.setItems('.substr($Vvt20qqut4bu, 1).');'."\n";
			return;
		}
		
		$V1yuhsvbtlvrrop = array_merge($Vnwufml5q3nphis->getFormDefaultProp(), $V1yuhsvbtlvrrop);
		
		$V1yuhsvbtlvropt = TCPDF_STATIC::getAnnotOptFromJSProp($V1yuhsvbtlvrrop, $Vnwufml5q3nphis->spot_colors, $Vnwufml5q3nphis->rtl);
		
		$Vnwufml5q3nphis->annotation_fonts[$Vnwufml5q3nphis->CurrentFont['fontkey']] = $Vnwufml5q3nphis->CurrentFont['i'];
		$Vshfhqyg5vyrtyle = sprintf('/F%d %F Tf %s', $Vnwufml5q3nphis->CurrentFont['i'], $Vnwufml5q3nphis->FontSizePt, $Vnwufml5q3nphis->TextColor);
		$V1yuhsvbtlvropt['da'] = $Vshfhqyg5vyrtyle;
		
		$V1yuhsvbtlvropt['ap'] = array();
		$V1yuhsvbtlvropt['ap']['n'] = '/Tx BMC q '.$Vshfhqyg5vyrtyle.' ';
		$Vdvjst2lzhef = '';
		foreach($Vxt4wx3pvtezues as $V55vc4mewy5wtem) {
			if (is_array($V55vc4mewy5wtem)) {
				$Vdvjst2lzhef .= $V55vc4mewy5wtem[1]."\n";
			} else {
				$Vdvjst2lzhef .= $V55vc4mewy5wtem."\n";
			}
		}
		$V3p0tae11ldwid = $Vnwufml5q3nphis->startTemplate($Vim12f51jw5r, $Vvjxcwrp4tjq, false);
		$Vnwufml5q3nphis->MultiCell($Vim12f51jw5r, $Vvjxcwrp4tjq, $Vdvjst2lzhef, 0, '', false, 0, 0, 0, true, 0, false, true, 0, 'T', false);
		$Vnwufml5q3nphis->endTemplate();
		--$Vnwufml5q3nphis->n;
		$V1yuhsvbtlvropt['ap']['n'] .= $Vnwufml5q3nphis->xobjects[$V3p0tae11ldwid]['outdata'];
		unset($Vnwufml5q3nphis->xobjects[$V3p0tae11ldwid]);
		$V1yuhsvbtlvropt['ap']['n'] .= 'Q EMC';
		
		$Vybdom4h5ylw = array_merge($V1yuhsvbtlvropt, $Vybdom4h5ylw);
		
		$Vybdom4h5ylw['Subtype'] = 'Widget';
		$Vybdom4h5ylw['ft'] = 'Ch';
		$Vybdom4h5ylw['t'] = $Vgv45dfhsyuhame;
		$Vybdom4h5ylw['opt'] = $Vxt4wx3pvtezues;
		unset($Vybdom4h5ylw['mk']['ca']);
		unset($Vybdom4h5ylw['mk']['rc']);
		unset($Vybdom4h5ylw['mk']['ac']);
		unset($Vybdom4h5ylw['mk']['i']);
		unset($Vybdom4h5ylw['mk']['ri']);
		unset($Vybdom4h5ylw['mk']['ix']);
		unset($Vybdom4h5ylw['mk']['if']);
		unset($Vybdom4h5ylw['mk']['tp']);
		$Vnwufml5q3nphis->Annotation($Vangwoo3ejfg, $Vgxufordoa4t, $Vim12f51jw5r, $Vvjxcwrp4tjq, $Vgv45dfhsyuhame, $Vybdom4h5ylw, 0);
		if ($Vnwufml5q3nphis->rtl) {
			$Vnwufml5q3nphis->x -= $Vim12f51jw5r;
		} else {
			$Vnwufml5q3nphis->x += $Vim12f51jw5r;
		}
	}

	
	public function ComboBox($Vgv45dfhsyuhame, $Vim12f51jw5r, $Vvjxcwrp4tjq, $Vxt4wx3pvtezues, $V1yuhsvbtlvrrop=array(), $Vybdom4h5ylw=array(), $Vangwoo3ejfg='', $Vgxufordoa4t='', $Vuaufi3la1vgs=false) {
		if ($Vangwoo3ejfg === '') {
			$Vangwoo3ejfg = $Vnwufml5q3nphis->x;
		}
		if ($Vgxufordoa4t === '') {
			$Vgxufordoa4t = $Vnwufml5q3nphis->y;
		}
		
		list($Vangwoo3ejfg, $Vgxufordoa4t) = $Vnwufml5q3nphis->checkPageRegions($Vvjxcwrp4tjq, $Vangwoo3ejfg, $Vgxufordoa4t);
		if ($Vuaufi3la1vgs) {
			$Vnwufml5q3nphis->_addfield('combobox', $Vgv45dfhsyuhame, $Vangwoo3ejfg, $Vgxufordoa4t, $Vim12f51jw5r, $Vvjxcwrp4tjq, $V1yuhsvbtlvrrop);
			$Vvt20qqut4bu = '';
			foreach ($Vxt4wx3pvtezues as $Vxt4wx3pvtezue) {
				if (is_array($Vxt4wx3pvtezue)) {
					$Vvt20qqut4bu .= ',[\''.addslashes($Vxt4wx3pvtezue[1]).'\',\''.addslashes($Vxt4wx3pvtezue[0]).'\']';
				} else {
					$Vvt20qqut4bu .= ',[\''.addslashes($Vxt4wx3pvtezue).'\',\''.addslashes($Vxt4wx3pvtezue).'\']';
				}
			}
			$Vnwufml5q3nphis->javascript .= 'f'.$Vgv45dfhsyuhame.'.setItems('.substr($Vvt20qqut4bu, 1).');'."\n";
			return;
		}
		
		$V1yuhsvbtlvrrop = array_merge($Vnwufml5q3nphis->getFormDefaultProp(), $V1yuhsvbtlvrrop);
		$V1yuhsvbtlvrrop['Combo'] = true;
		
		$V1yuhsvbtlvropt = TCPDF_STATIC::getAnnotOptFromJSProp($V1yuhsvbtlvrrop, $Vnwufml5q3nphis->spot_colors, $Vnwufml5q3nphis->rtl);
		
		$Vnwufml5q3nphis->annotation_fonts[$Vnwufml5q3nphis->CurrentFont['fontkey']] = $Vnwufml5q3nphis->CurrentFont['i'];
		$Vshfhqyg5vyrtyle = sprintf('/F%d %F Tf %s', $Vnwufml5q3nphis->CurrentFont['i'], $Vnwufml5q3nphis->FontSizePt, $Vnwufml5q3nphis->TextColor);
		$V1yuhsvbtlvropt['da'] = $Vshfhqyg5vyrtyle;
		
		$V1yuhsvbtlvropt['ap'] = array();
		$V1yuhsvbtlvropt['ap']['n'] = '/Tx BMC q '.$Vshfhqyg5vyrtyle.' ';
		$Vdvjst2lzhef = '';
		foreach($Vxt4wx3pvtezues as $V55vc4mewy5wtem) {
			if (is_array($V55vc4mewy5wtem)) {
				$Vdvjst2lzhef .= $V55vc4mewy5wtem[1]."\n";
			} else {
				$Vdvjst2lzhef .= $V55vc4mewy5wtem."\n";
			}
		}
		$V3p0tae11ldwid = $Vnwufml5q3nphis->startTemplate($Vim12f51jw5r, $Vvjxcwrp4tjq, false);
		$Vnwufml5q3nphis->MultiCell($Vim12f51jw5r, $Vvjxcwrp4tjq, $Vdvjst2lzhef, 0, '', false, 0, 0, 0, true, 0, false, true, 0, 'T', false);
		$Vnwufml5q3nphis->endTemplate();
		--$Vnwufml5q3nphis->n;
		$V1yuhsvbtlvropt['ap']['n'] .= $Vnwufml5q3nphis->xobjects[$V3p0tae11ldwid]['outdata'];
		unset($Vnwufml5q3nphis->xobjects[$V3p0tae11ldwid]);
		$V1yuhsvbtlvropt['ap']['n'] .= 'Q EMC';
		
		$Vybdom4h5ylw = array_merge($V1yuhsvbtlvropt, $Vybdom4h5ylw);
		
		$Vybdom4h5ylw['Subtype'] = 'Widget';
		$Vybdom4h5ylw['ft'] = 'Ch';
		$Vybdom4h5ylw['t'] = $Vgv45dfhsyuhame;
		$Vybdom4h5ylw['opt'] = $Vxt4wx3pvtezues;
		unset($Vybdom4h5ylw['mk']['ca']);
		unset($Vybdom4h5ylw['mk']['rc']);
		unset($Vybdom4h5ylw['mk']['ac']);
		unset($Vybdom4h5ylw['mk']['i']);
		unset($Vybdom4h5ylw['mk']['ri']);
		unset($Vybdom4h5ylw['mk']['ix']);
		unset($Vybdom4h5ylw['mk']['if']);
		unset($Vybdom4h5ylw['mk']['tp']);
		$Vnwufml5q3nphis->Annotation($Vangwoo3ejfg, $Vgxufordoa4t, $Vim12f51jw5r, $Vvjxcwrp4tjq, $Vgv45dfhsyuhame, $Vybdom4h5ylw, 0);
		if ($Vnwufml5q3nphis->rtl) {
			$Vnwufml5q3nphis->x -= $Vim12f51jw5r;
		} else {
			$Vnwufml5q3nphis->x += $Vim12f51jw5r;
		}
	}

	
	public function CheckBox($Vgv45dfhsyuhame, $Vim12f51jw5r, $Vwcmlurixvzghecked=false, $V1yuhsvbtlvrrop=array(), $Vybdom4h5ylw=array(), $Vk1y4jyuc5nsnvalue='Yes', $Vangwoo3ejfg='', $Vgxufordoa4t='', $Vuaufi3la1vgs=false) {
		if ($Vangwoo3ejfg === '') {
			$Vangwoo3ejfg = $Vnwufml5q3nphis->x;
		}
		if ($Vgxufordoa4t === '') {
			$Vgxufordoa4t = $Vnwufml5q3nphis->y;
		}
		
		list($Vangwoo3ejfg, $Vgxufordoa4t) = $Vnwufml5q3nphis->checkPageRegions($Vim12f51jw5r, $Vangwoo3ejfg, $Vgxufordoa4t);
		if ($Vuaufi3la1vgs) {
			$Vnwufml5q3nphis->_addfield('checkbox', $Vgv45dfhsyuhame, $Vangwoo3ejfg, $Vgxufordoa4t, $Vim12f51jw5r, $Vim12f51jw5r, $V1yuhsvbtlvrrop);
			return;
		}
		if (!isset($V1yuhsvbtlvrrop['value'])) {
			$V1yuhsvbtlvrrop['value'] = array('Yes');
		}
		
		$V1yuhsvbtlvrrop = array_merge($Vnwufml5q3nphis->getFormDefaultProp(), $V1yuhsvbtlvrrop);
		$V1yuhsvbtlvrrop['borderStyle'] = 'inset';
		
		$V1yuhsvbtlvropt = TCPDF_STATIC::getAnnotOptFromJSProp($V1yuhsvbtlvrrop, $Vnwufml5q3nphis->spot_colors, $Vnwufml5q3nphis->rtl);
		
		$Voc1qigl3k5y = 'zapfdingbats';
		if ($Vnwufml5q3nphis->pdfa_mode) {
			
			$Voc1qigl3k5y = 'pdfa'.$Voc1qigl3k5y;
		}
		$Vnwufml5q3nphis->AddFont($Voc1qigl3k5y);
		$V3p0tae11ldwfont = $Vnwufml5q3nphis->getFontBuffer($Voc1qigl3k5y);
		$Vnwufml5q3nphis->annotation_fonts[$V3p0tae11ldwfont['fontkey']] = $V3p0tae11ldwfont['i'];
		$Vshfhqyg5vyrtyle = sprintf('/F%d %F Tf %s', $V3p0tae11ldwfont['i'], $Vnwufml5q3nphis->FontSizePt, $Vnwufml5q3nphis->TextColor);
		$V1yuhsvbtlvropt['da'] = $Vshfhqyg5vyrtyle;
		
		$V1yuhsvbtlvropt['ap'] = array();
		$V1yuhsvbtlvropt['ap']['n'] = array();
		$Vxb0ra0fqzn2x = ((($Vim12f51jw5r - $Vnwufml5q3nphis->getAbsFontMeasure($V3p0tae11ldwfont['cw'][110])) / 2) * $Vnwufml5q3nphis->k);
		$Vxb0ra0fqzn2y = (($Vim12f51jw5r - ((($V3p0tae11ldwfont['desc']['Ascent'] - $V3p0tae11ldwfont['desc']['Descent']) * $Vnwufml5q3nphis->FontSizePt / 1000) / $Vnwufml5q3nphis->k)) * $Vnwufml5q3nphis->k);
		$V1yuhsvbtlvropt['ap']['n']['Yes'] = sprintf('q %s BT /F%d %F Tf %F %F Td ('.chr(110).') Tj ET Q', $Vnwufml5q3nphis->TextColor, $V3p0tae11ldwfont['i'], $Vnwufml5q3nphis->FontSizePt, $Vxb0ra0fqzn2x, $Vxb0ra0fqzn2y);
		$V1yuhsvbtlvropt['ap']['n']['Off'] = sprintf('q %s BT /F%d %F Tf %F %F Td ('.chr(111).') Tj ET Q', $Vnwufml5q3nphis->TextColor, $V3p0tae11ldwfont['i'], $Vnwufml5q3nphis->FontSizePt, $Vxb0ra0fqzn2x, $Vxb0ra0fqzn2y);
		
		$Vybdom4h5ylw = array_merge($V1yuhsvbtlvropt, $Vybdom4h5ylw);
		
		$Vybdom4h5ylw['Subtype'] = 'Widget';
		$Vybdom4h5ylw['ft'] = 'Btn';
		$Vybdom4h5ylw['t'] = $Vgv45dfhsyuhame;
		if (TCPDF_STATIC::empty_string($Vk1y4jyuc5nsnvalue)) {
			$Vk1y4jyuc5nsnvalue = 'Yes';
		}
		$Vybdom4h5ylw['opt'] = array($Vk1y4jyuc5nsnvalue);
		if ($Vwcmlurixvzghecked) {
			$Vybdom4h5ylw['v'] = array('/Yes');
			$Vybdom4h5ylw['as'] = 'Yes';
		} else {
			$Vybdom4h5ylw['v'] = array('/Off');
			$Vybdom4h5ylw['as'] = 'Off';
		}
		$Vnwufml5q3nphis->Annotation($Vangwoo3ejfg, $Vgxufordoa4t, $Vim12f51jw5r, $Vim12f51jw5r, $Vgv45dfhsyuhame, $Vybdom4h5ylw, 0);
		if ($Vnwufml5q3nphis->rtl) {
			$Vnwufml5q3nphis->x -= $Vim12f51jw5r;
		} else {
			$Vnwufml5q3nphis->x += $Vim12f51jw5r;
		}
	}

	
	public function Button($Vgv45dfhsyuhame, $Vim12f51jw5r, $Vvjxcwrp4tjq, $Vwcmlurixvzgaption, $Vudz4oh4qikuction, $V1yuhsvbtlvrrop=array(), $Vybdom4h5ylw=array(), $Vangwoo3ejfg='', $Vgxufordoa4t='', $Vuaufi3la1vgs=false) {
		if ($Vangwoo3ejfg === '') {
			$Vangwoo3ejfg = $Vnwufml5q3nphis->x;
		}
		if ($Vgxufordoa4t === '') {
			$Vgxufordoa4t = $Vnwufml5q3nphis->y;
		}
		
		list($Vangwoo3ejfg, $Vgxufordoa4t) = $Vnwufml5q3nphis->checkPageRegions($Vvjxcwrp4tjq, $Vangwoo3ejfg, $Vgxufordoa4t);
		if ($Vuaufi3la1vgs) {
			$Vnwufml5q3nphis->_addfield('button', $Vgv45dfhsyuhame, $Vnwufml5q3nphis->x, $Vnwufml5q3nphis->y, $Vim12f51jw5r, $Vvjxcwrp4tjq, $V1yuhsvbtlvrrop);
			$Vnwufml5q3nphis->javascript .= 'f'.$Vgv45dfhsyuhame.".buttonSetCaption('".addslashes($Vwcmlurixvzgaption)."');\n";
			$Vnwufml5q3nphis->javascript .= 'f'.$Vgv45dfhsyuhame.".setAction('MouseUp','".addslashes($Vudz4oh4qikuction)."');\n";
			$Vnwufml5q3nphis->javascript .= 'f'.$Vgv45dfhsyuhame.".highlight='push';\n";
			$Vnwufml5q3nphis->javascript .= 'f'.$Vgv45dfhsyuhame.".print=false;\n";
			return;
		}
		
		$V1yuhsvbtlvrrop = array_merge($Vnwufml5q3nphis->getFormDefaultProp(), $V1yuhsvbtlvrrop);
		$V1yuhsvbtlvrrop['Pushbutton'] = 'true';
		$V1yuhsvbtlvrrop['highlight'] = 'push';
		$V1yuhsvbtlvrrop['display'] = 'display.noPrint';
		
		$V1yuhsvbtlvropt = TCPDF_STATIC::getAnnotOptFromJSProp($V1yuhsvbtlvrrop, $Vnwufml5q3nphis->spot_colors, $Vnwufml5q3nphis->rtl);
		$Vnwufml5q3nphis->annotation_fonts[$Vnwufml5q3nphis->CurrentFont['fontkey']] = $Vnwufml5q3nphis->CurrentFont['i'];
		$Vshfhqyg5vyrtyle = sprintf('/F%d %F Tf %s', $Vnwufml5q3nphis->CurrentFont['i'], $Vnwufml5q3nphis->FontSizePt, $Vnwufml5q3nphis->TextColor);
		$V1yuhsvbtlvropt['da'] = $Vshfhqyg5vyrtyle;
		
		$V1yuhsvbtlvropt['ap'] = array();
		$V1yuhsvbtlvropt['ap']['n'] = '/Tx BMC q '.$Vshfhqyg5vyrtyle.' ';
		$V3p0tae11ldwid = $Vnwufml5q3nphis->startTemplate($Vim12f51jw5r, $Vvjxcwrp4tjq, false);
		$Vpq3acakq35cw = (2 / $Vnwufml5q3nphis->k); 
		$Vgffhwoemo4c = array(
			'L' => array('width' => $Vpq3acakq35cw, 'cap' => 'square', 'join' => 'miter', 'dash' => 0, 'color' => array(231)),
			'R' => array('width' => $Vpq3acakq35cw, 'cap' => 'square', 'join' => 'miter', 'dash' => 0, 'color' => array(51)),
			'T' => array('width' => $Vpq3acakq35cw, 'cap' => 'square', 'join' => 'miter', 'dash' => 0, 'color' => array(231)),
			'B' => array('width' => $Vpq3acakq35cw, 'cap' => 'square', 'join' => 'miter', 'dash' => 0, 'color' => array(51)));
		$Vnwufml5q3nphis->SetFillColor(204);
		$Vnwufml5q3nphis->Cell($Vim12f51jw5r, $Vvjxcwrp4tjq, $Vwcmlurixvzgaption, $Vgffhwoemo4c, 0, 'C', true, '', 1, false, 'T', 'M');
		$Vnwufml5q3nphis->endTemplate();
		--$Vnwufml5q3nphis->n;
		$V1yuhsvbtlvropt['ap']['n'] .= $Vnwufml5q3nphis->xobjects[$V3p0tae11ldwid]['outdata'];
		unset($Vnwufml5q3nphis->xobjects[$V3p0tae11ldwid]);
		$V1yuhsvbtlvropt['ap']['n'] .= 'Q EMC';
		
		if (!isset($V1yuhsvbtlvropt['mk'])) {
			$V1yuhsvbtlvropt['mk'] = array();
		}
		$Vudz4oh4qikunn_obj_id = ($Vnwufml5q3nphis->n + 1);
		if (!empty($Vudz4oh4qikuction) AND !is_array($Vudz4oh4qikuction)) {
			$Vudz4oh4qikunn_obj_id = ($Vnwufml5q3nphis->n + 2);
		}
		$V1yuhsvbtlvropt['mk']['ca'] = $Vnwufml5q3nphis->_textstring($Vwcmlurixvzgaption, $Vudz4oh4qikunn_obj_id);
		$V1yuhsvbtlvropt['mk']['rc'] = $Vnwufml5q3nphis->_textstring($Vwcmlurixvzgaption, $Vudz4oh4qikunn_obj_id);
		$V1yuhsvbtlvropt['mk']['ac'] = $Vnwufml5q3nphis->_textstring($Vwcmlurixvzgaption, $Vudz4oh4qikunn_obj_id);
		
		$Vybdom4h5ylw = array_merge($V1yuhsvbtlvropt, $Vybdom4h5ylw);
		
		$Vybdom4h5ylw['Subtype'] = 'Widget';
		$Vybdom4h5ylw['ft'] = 'Btn';
		$Vybdom4h5ylw['t'] = $Vwcmlurixvzgaption;
		$Vybdom4h5ylw['v'] = $Vgv45dfhsyuhame;
		if (!empty($Vudz4oh4qikuction)) {
			if (is_array($Vudz4oh4qikuction)) {
				
				$Vybdom4h5ylw['aa'] = '/D <<';
				$Vpq3acakq35cmode = array('SubmitForm', 'ResetForm', 'ImportData');
				foreach ($Vudz4oh4qikuction AS $Vl0q4noiexi4ey => $Vxt4wx3pvtez) {
					if (($Vl0q4noiexi4ey == 'S') AND in_array($Vxt4wx3pvtez, $Vpq3acakq35cmode)) {
						$Vybdom4h5ylw['aa'] .= ' /S /'.$Vxt4wx3pvtez;
					} elseif (($Vl0q4noiexi4ey == 'F') AND (!empty($Vxt4wx3pvtez))) {
						$Vybdom4h5ylw['aa'] .= ' /F '.$Vnwufml5q3nphis->_datastring($Vxt4wx3pvtez, $Vudz4oh4qikunn_obj_id);
					} elseif (($Vl0q4noiexi4ey == 'Fields') AND is_array($Vxt4wx3pvtez) AND !empty($Vxt4wx3pvtez)) {
						$Vybdom4h5ylw['aa'] .= ' /Fields [';
						foreach ($Vxt4wx3pvtez AS $Vxb0ra0fqzn2ield) {
							$Vybdom4h5ylw['aa'] .= ' '.$Vnwufml5q3nphis->_textstring($Vxb0ra0fqzn2ield, $Vudz4oh4qikunn_obj_id);
						}
						$Vybdom4h5ylw['aa'] .= ']';
					} elseif (($Vl0q4noiexi4ey == 'Flags')) {
						$Vxb0ra0fqzn2f = 0;
						if (is_array($Vxt4wx3pvtez)) {
							foreach ($Vxt4wx3pvtez AS $Vxb0ra0fqzn2lag) {
								switch ($Vxb0ra0fqzn2lag) {
									case 'Include/Exclude': {
										$Vxb0ra0fqzn2f += 1 << 0;
										break;
									}
									case 'IncludeNoValueFields': {
										$Vxb0ra0fqzn2f += 1 << 1;
										break;
									}
									case 'ExportFormat': {
										$Vxb0ra0fqzn2f += 1 << 2;
										break;
									}
									case 'GetMethod': {
										$Vxb0ra0fqzn2f += 1 << 3;
										break;
									}
									case 'SubmitCoordinates': {
										$Vxb0ra0fqzn2f += 1 << 4;
										break;
									}
									case 'XFDF': {
										$Vxb0ra0fqzn2f += 1 << 5;
										break;
									}
									case 'IncludeAppendSaves': {
										$Vxb0ra0fqzn2f += 1 << 6;
										break;
									}
									case 'IncludeAnnotations': {
										$Vxb0ra0fqzn2f += 1 << 7;
										break;
									}
									case 'SubmitPDF': {
										$Vxb0ra0fqzn2f += 1 << 8;
										break;
									}
									case 'CanonicalFormat': {
										$Vxb0ra0fqzn2f += 1 << 9;
										break;
									}
									case 'ExclNonUserAnnots': {
										$Vxb0ra0fqzn2f += 1 << 10;
										break;
									}
									case 'ExclFKey': {
										$Vxb0ra0fqzn2f += 1 << 11;
										break;
									}
									case 'EmbedForm': {
										$Vxb0ra0fqzn2f += 1 << 13;
										break;
									}
								}
							}
						} else {
							$Vxb0ra0fqzn2f = intval($Vxt4wx3pvtez);
						}
						$Vybdom4h5ylw['aa'] .= ' /Flags '.$Vxb0ra0fqzn2f;
					}
				}
				$Vybdom4h5ylw['aa'] .= ' >>';
			} else {
				
				$Vuaufi3la1vgs_obj_id = $Vnwufml5q3nphis->addJavascriptObject($Vudz4oh4qikuction);
				$Vybdom4h5ylw['aa'] = '/D '.$Vuaufi3la1vgs_obj_id.' 0 R';
			}
		}
		$Vnwufml5q3nphis->Annotation($Vangwoo3ejfg, $Vgxufordoa4t, $Vim12f51jw5r, $Vvjxcwrp4tjq, $Vgv45dfhsyuhame, $Vybdom4h5ylw, 0);
		if ($Vnwufml5q3nphis->rtl) {
			$Vnwufml5q3nphis->x -= $Vim12f51jw5r;
		} else {
			$Vnwufml5q3nphis->x += $Vim12f51jw5r;
		}
	}

	

	
	protected function _putsignature() {
		if ((!$Vnwufml5q3nphis->sign) OR (!isset($Vnwufml5q3nphis->signature_data['cert_type']))) {
			return;
		}
		$Vvt20qqut4buigobjid = ($Vnwufml5q3nphis->sig_obj_id + 1);
		$V4t5ynycapey = $Vnwufml5q3nphis->_getobj($Vvt20qqut4buigobjid)."\n";
		$V4t5ynycapey .= '<< /Type /Sig';
		$V4t5ynycapey .= ' /Filter /Adobe.PPKLite';
		$V4t5ynycapey .= ' /SubFilter /adbe.pkcs7.detached';
		$V4t5ynycapey .= ' '.TCPDF_STATIC::$Vsrhsnwkcuy3terange_string;
		$V4t5ynycapey .= ' /Contents<'.str_repeat('0', $Vnwufml5q3nphis->signature_max_length).'>';
		if (empty($Vnwufml5q3nphis->signature_data['approval']) OR ($Vnwufml5q3nphis->signature_data['approval'] != 'A')) {
			$V4t5ynycapey .= ' /Reference ['; 
			$V4t5ynycapey .= ' << /Type /SigRef';
			if ($Vnwufml5q3nphis->signature_data['cert_type'] > 0) {
				$V4t5ynycapey .= ' /TransformMethod /DocMDP';
				$V4t5ynycapey .= ' /TransformParams <<';
				$V4t5ynycapey .= ' /Type /TransformParams';
				$V4t5ynycapey .= ' /P '.$Vnwufml5q3nphis->signature_data['cert_type'];
				$V4t5ynycapey .= ' /V /1.2';
			} else {
				$V4t5ynycapey .= ' /TransformMethod /UR3';
				$V4t5ynycapey .= ' /TransformParams <<';
				$V4t5ynycapey .= ' /Type /TransformParams';
				$V4t5ynycapey .= ' /V /2.2';
				if (!TCPDF_STATIC::empty_string($Vnwufml5q3nphis->ur['document'])) {
					$V4t5ynycapey .= ' /Document['.$Vnwufml5q3nphis->ur['document'].']';
				}
				if (!TCPDF_STATIC::empty_string($Vnwufml5q3nphis->ur['form'])) {
					$V4t5ynycapey .= ' /Form['.$Vnwufml5q3nphis->ur['form'].']';
				}
				if (!TCPDF_STATIC::empty_string($Vnwufml5q3nphis->ur['signature'])) {
					$V4t5ynycapey .= ' /Signature['.$Vnwufml5q3nphis->ur['signature'].']';
				}
				if (!TCPDF_STATIC::empty_string($Vnwufml5q3nphis->ur['annots'])) {
					$V4t5ynycapey .= ' /Annots['.$Vnwufml5q3nphis->ur['annots'].']';
				}
				if (!TCPDF_STATIC::empty_string($Vnwufml5q3nphis->ur['ef'])) {
					$V4t5ynycapey .= ' /EF['.$Vnwufml5q3nphis->ur['ef'].']';
				}
				if (!TCPDF_STATIC::empty_string($Vnwufml5q3nphis->ur['formex'])) {
					$V4t5ynycapey .= ' /FormEX['.$Vnwufml5q3nphis->ur['formex'].']';
				}
			}
			$V4t5ynycapey .= ' >>'; 
			
			
			
			
			
			$V4t5ynycapey .= ' >>';
			$V4t5ynycapey .= ' ]'; 
		}
		if (isset($Vnwufml5q3nphis->signature_data['info']['Name']) AND !TCPDF_STATIC::empty_string($Vnwufml5q3nphis->signature_data['info']['Name'])) {
			$V4t5ynycapey .= ' /Name '.$Vnwufml5q3nphis->_textstring($Vnwufml5q3nphis->signature_data['info']['Name'], $Vvt20qqut4buigobjid);
		}
		if (isset($Vnwufml5q3nphis->signature_data['info']['Location']) AND !TCPDF_STATIC::empty_string($Vnwufml5q3nphis->signature_data['info']['Location'])) {
			$V4t5ynycapey .= ' /Location '.$Vnwufml5q3nphis->_textstring($Vnwufml5q3nphis->signature_data['info']['Location'], $Vvt20qqut4buigobjid);
		}
		if (isset($Vnwufml5q3nphis->signature_data['info']['Reason']) AND !TCPDF_STATIC::empty_string($Vnwufml5q3nphis->signature_data['info']['Reason'])) {
			$V4t5ynycapey .= ' /Reason '.$Vnwufml5q3nphis->_textstring($Vnwufml5q3nphis->signature_data['info']['Reason'], $Vvt20qqut4buigobjid);
		}
		if (isset($Vnwufml5q3nphis->signature_data['info']['ContactInfo']) AND !TCPDF_STATIC::empty_string($Vnwufml5q3nphis->signature_data['info']['ContactInfo'])) {
			$V4t5ynycapey .= ' /ContactInfo '.$Vnwufml5q3nphis->_textstring($Vnwufml5q3nphis->signature_data['info']['ContactInfo'], $Vvt20qqut4buigobjid);
		}
		$V4t5ynycapey .= ' /M '.$Vnwufml5q3nphis->_datestring($Vvt20qqut4buigobjid, $Vnwufml5q3nphis->doc_modification_timestamp);
		$V4t5ynycapey .= ' >>';
		$V4t5ynycapey .= "\n".'endobj';
		$Vnwufml5q3nphis->_out($V4t5ynycapey);
	}

	
	public function setUserRights(
			$Vwczym13hlrt=true,
			$Vc0aiseldrl3ocument='/FullSave',
			$Vudz4oh4qikunnots='/Create/Delete/Modify/Copy/Import/Export',
			$Vxb0ra0fqzn2orm='/Add/Delete/FillIn/Import/Export/SubmitStandalone/SpawnTemplate',
			$V54tshykgp5wature='/Modify',
			$Vs0htpwzsrccf='/Create/Delete/Modify/Import',
			$Vxb0ra0fqzn2ormex='') {
		$Vnwufml5q3nphis->ur['enabled'] = $Vwczym13hlrt;
		$Vnwufml5q3nphis->ur['document'] = $Vc0aiseldrl3ocument;
		$Vnwufml5q3nphis->ur['annots'] = $Vudz4oh4qikunnots;
		$Vnwufml5q3nphis->ur['form'] = $Vxb0ra0fqzn2orm;
		$Vnwufml5q3nphis->ur['signature'] = $V54tshykgp5wature;
		$Vnwufml5q3nphis->ur['ef'] = $Vs0htpwzsrccf;
		$Vnwufml5q3nphis->ur['formex'] = $Vxb0ra0fqzn2ormex;
		if (!$Vnwufml5q3nphis->sign) {
			$Vnwufml5q3nphis->setSignature('', '', '', '', 0, array());
		}
	}

	
	public function setSignature($V54tshykgp5wing_cert='', $V1yuhsvbtlvrrivate_key='', $V1yuhsvbtlvrrivate_key_password='', $Vs0htpwzsrccxtracerts='', $Vwcmlurixvzgert_type=2, $V55vc4mewy5wnfo=array(), $Vudz4oh4qikupproval='') {
		
		
		
		
		$Vnwufml5q3nphis->sign = true;
		++$Vnwufml5q3nphis->n;
		$Vnwufml5q3nphis->sig_obj_id = $Vnwufml5q3nphis->n; 
		++$Vnwufml5q3nphis->n; 
		$Vnwufml5q3nphis->signature_data = array();
		if (strlen($V54tshykgp5wing_cert) == 0) {
			$Vnwufml5q3nphis->Error('Please provide a certificate file and password!');
		}
		if (strlen($V1yuhsvbtlvrrivate_key) == 0) {
			$V1yuhsvbtlvrrivate_key = $V54tshykgp5wing_cert;
		}
		$Vnwufml5q3nphis->signature_data['signcert'] = $V54tshykgp5wing_cert;
		$Vnwufml5q3nphis->signature_data['privkey'] = $V1yuhsvbtlvrrivate_key;
		$Vnwufml5q3nphis->signature_data['password'] = $V1yuhsvbtlvrrivate_key_password;
		$Vnwufml5q3nphis->signature_data['extracerts'] = $Vs0htpwzsrccxtracerts;
		$Vnwufml5q3nphis->signature_data['cert_type'] = $Vwcmlurixvzgert_type;
		$Vnwufml5q3nphis->signature_data['info'] = $V55vc4mewy5wnfo;
		$Vnwufml5q3nphis->signature_data['approval'] = $Vudz4oh4qikupproval;
	}

	
	public function setSignatureAppearance($Vangwoo3ejfg=0, $Vgxufordoa4t=0, $Vim12f51jw5r=0, $Vvjxcwrp4tjq=0, $Vwfolue42pzj=-1, $Vgv45dfhsyuhame='') {
		$Vnwufml5q3nphis->signature_appearance = $Vnwufml5q3nphis->getSignatureAppearanceArray($Vangwoo3ejfg, $Vgxufordoa4t, $Vim12f51jw5r, $Vvjxcwrp4tjq, $Vwfolue42pzj, $Vgv45dfhsyuhame);
	}

	
	public function addEmptySignatureAppearance($Vangwoo3ejfg=0, $Vgxufordoa4t=0, $Vim12f51jw5r=0, $Vvjxcwrp4tjq=0, $Vwfolue42pzj=-1, $Vgv45dfhsyuhame='') {
		++$Vnwufml5q3nphis->n;
		$Vnwufml5q3nphis->empty_signature_appearance[] = array('objid' => $Vnwufml5q3nphis->n) + $Vnwufml5q3nphis->getSignatureAppearanceArray($Vangwoo3ejfg, $Vgxufordoa4t, $Vim12f51jw5r, $Vvjxcwrp4tjq, $Vwfolue42pzj, $Vgv45dfhsyuhame);
	}

	
	protected function getSignatureAppearanceArray($Vangwoo3ejfg=0, $Vgxufordoa4t=0, $Vim12f51jw5r=0, $Vvjxcwrp4tjq=0, $Vwfolue42pzj=-1, $Vgv45dfhsyuhame='') {
		$Vvt20qqut4buigapp = array();
		if (($Vwfolue42pzj < 1) OR ($Vwfolue42pzj > $Vnwufml5q3nphis->numpages)) {
			$Vvt20qqut4buigapp['page'] = $Vnwufml5q3nphis->page;
		} else {
			$Vvt20qqut4buigapp['page'] = intval($Vwfolue42pzj);
		}
		if (empty($Vgv45dfhsyuhame)) {
			$Vvt20qqut4buigapp['name'] = 'Signature';
		} else {
			$Vvt20qqut4buigapp['name'] = $Vgv45dfhsyuhame;
		}
		$Vudz4oh4qiku = $Vangwoo3ejfg * $Vnwufml5q3nphis->k;
		$Vpq3acakq35c = $Vnwufml5q3nphis->pagedim[($Vvt20qqut4buigapp['page'])]['h'] - (($Vgxufordoa4t + $Vvjxcwrp4tjq) * $Vnwufml5q3nphis->k);
		$Vwcmlurixvzg = $Vim12f51jw5r * $Vnwufml5q3nphis->k;
		$Vc0aiseldrl3 = $Vvjxcwrp4tjq * $Vnwufml5q3nphis->k;
		$Vvt20qqut4buigapp['rect'] = sprintf('%F %F %F %F', $Vudz4oh4qiku, $Vpq3acakq35c, ($Vudz4oh4qiku + $Vwcmlurixvzg), ($Vpq3acakq35c + $Vc0aiseldrl3));
		return $Vvt20qqut4buigapp;
	}

	
	public function setTimeStamp($Vnwufml5q3npsa_host='', $Vnwufml5q3npsa_username='', $Vnwufml5q3npsa_password='', $Vnwufml5q3npsa_cert='') {
		$Vnwufml5q3nphis->tsa_data = array();
		if (!function_exists('curl_init')) {
			$Vnwufml5q3nphis->Error('Please enable cURL PHP extension!');
		}
		if (strlen($Vnwufml5q3npsa_host) == 0) {
			$Vnwufml5q3nphis->Error('Please specify the host of Time Stamping Authority (TSA)!');
		}
		$Vnwufml5q3nphis->tsa_data['tsa_host'] = $Vnwufml5q3npsa_host;
		if (is_file($Vnwufml5q3npsa_username)) {
			$Vnwufml5q3nphis->tsa_data['tsa_auth'] = $Vnwufml5q3npsa_username;
		} else {
			$Vnwufml5q3nphis->tsa_data['tsa_username'] = $Vnwufml5q3npsa_username;
		}
		$Vnwufml5q3nphis->tsa_data['tsa_password'] = $Vnwufml5q3npsa_password;
		$Vnwufml5q3nphis->tsa_data['tsa_cert'] = $Vnwufml5q3npsa_cert;
		$Vnwufml5q3nphis->tsa_timestamp = true;
	}

	
	protected function applyTSA($V54tshykgp5wature) {
		if (!$Vnwufml5q3nphis->tsa_timestamp) {
			return $V54tshykgp5wature;
		}
		
		return $V54tshykgp5wature;
	}

	
	public function startPageGroup($Vwfolue42pzj='') {
		if (empty($Vwfolue42pzj)) {
			$Vwfolue42pzj = $Vnwufml5q3nphis->page + 1;
		}
		$Vnwufml5q3nphis->newpagegroup[$Vwfolue42pzj] = sizeof($Vnwufml5q3nphis->newpagegroup) + 1;
	}

	
	public function setStartingPageNumber($Vgv45dfhsyuhum=1) {
		$Vnwufml5q3nphis->starting_page_number = max(0, intval($Vgv45dfhsyuhum));
	}

	
	public function getAliasRightShift() {
		
		$V14ltds3prprf = '{'.TCPDF_STATIC::$Vudz4oh4qikulias_right_shift.'}{'.TCPDF_STATIC::$Vudz4oh4qikulias_tot_pages.'}{'.TCPDF_STATIC::$Vudz4oh4qikulias_num_page.'}';
		$V14ltds3prprp = str_repeat(' ', $Vnwufml5q3nphis->GetNumChars($V14ltds3prprf));
		$Vim12f51jw5rrep = $Vnwufml5q3nphis->GetStringWidth($V14ltds3prprp);
		if ($Vim12f51jw5rrep > 0) {
			$Vim12f51jw5rdiff = max(1, ($Vnwufml5q3nphis->GetStringWidth($V14ltds3prprf) / $Vim12f51jw5rrep));
		} else {
			$Vim12f51jw5rdiff = 1;
		}
		$Vvt20qqut4budiff = sprintf('%F', $Vim12f51jw5rdiff);
		$Vudz4oh4qikulias = TCPDF_STATIC::$Vudz4oh4qikulias_right_shift.$Vvt20qqut4budiff.'}';
		if ($Vnwufml5q3nphis->isUnicodeFont()) {
			$Vudz4oh4qikulias = '{'.$Vudz4oh4qikulias;
		}
		return $Vudz4oh4qikulias;
	}

	
	public function getAliasNbPages() {
		if ($Vnwufml5q3nphis->isUnicodeFont()) {
			return '{'.TCPDF_STATIC::$Vudz4oh4qikulias_tot_pages.'}';
		}
		return TCPDF_STATIC::$Vudz4oh4qikulias_tot_pages;
	}

	
	public function getAliasNumPage() {
		if ($Vnwufml5q3nphis->isUnicodeFont()) {
			return '{'.TCPDF_STATIC::$Vudz4oh4qikulias_num_page.'}';
		}
		return TCPDF_STATIC::$Vudz4oh4qikulias_num_page;
	}

	
	public function getPageGroupAlias() {
		if ($Vnwufml5q3nphis->isUnicodeFont()) {
			return '{'.TCPDF_STATIC::$Vudz4oh4qikulias_group_tot_pages.'}';
		}
		return TCPDF_STATIC::$Vudz4oh4qikulias_group_tot_pages;
	}

	
	public function getPageNumGroupAlias() {
		if ($Vnwufml5q3nphis->isUnicodeFont()) {
			return '{'.TCPDF_STATIC::$Vudz4oh4qikulias_group_num_page.'}';
		}
		return TCPDF_STATIC::$Vudz4oh4qikulias_group_num_page;
	}

	
	public function getGroupPageNo() {
		return $Vnwufml5q3nphis->pagegroups[$Vnwufml5q3nphis->currpagegroup];
	}

	
	public function getGroupPageNoFormatted() {
		return TCPDF_STATIC::formatPageNumber($Vnwufml5q3nphis->getGroupPageNo());
	}

	
	public function PageNoFormatted() {
		return TCPDF_STATIC::formatPageNumber($Vnwufml5q3nphis->PageNo());
	}

	
	protected function _putocg() {
		if (empty($Vnwufml5q3nphis->pdflayers)) {
			return;
		}
		foreach ($Vnwufml5q3nphis->pdflayers as $Vl0q4noiexi4ey => $Vx3g4ytafo1aayer) {
			 $Vnwufml5q3nphis->pdflayers[$Vl0q4noiexi4ey]['objid'] = $Vnwufml5q3nphis->_newobj();
			 $V4t5ynycapey = '<< /Type /OCG';
			 $V4t5ynycapey .= ' /Name '.$Vnwufml5q3nphis->_textstring($Vx3g4ytafo1aayer['name'], $Vnwufml5q3nphis->pdflayers[$Vl0q4noiexi4ey]['objid']);
			 $V4t5ynycapey .= ' /Usage <<';
			 if (isset($Vx3g4ytafo1aayer['print']) AND ($Vx3g4ytafo1aayer['print'] !== NULL)) {
				$V4t5ynycapey .= ' /Print <</PrintState /'.($Vx3g4ytafo1aayer['print']?'ON':'OFF').'>>';
			 }
			 $V4t5ynycapey .= ' /View <</ViewState /'.($Vx3g4ytafo1aayer['view']?'ON':'OFF').'>>';
			 $V4t5ynycapey .= ' >> >>';
			 $V4t5ynycapey .= "\n".'endobj';
			 $Vnwufml5q3nphis->_out($V4t5ynycapey);
		}
	}

	
	public function startLayer($Vgv45dfhsyuhame='', $V1yuhsvbtlvrrint=true, $Vz0hmukhwa4ziew=true, $Vx3g4ytafo1aock=true) {
		if ($Vnwufml5q3nphis->state != 2) {
			return;
		}
		$Vx3g4ytafo1aayer = sprintf('LYR%03d', (count($Vnwufml5q3nphis->pdflayers) + 1));
		if (empty($Vgv45dfhsyuhame)) {
			$Vgv45dfhsyuhame = $Vx3g4ytafo1aayer;
		} else {
			$Vgv45dfhsyuhame = preg_replace('/[^a-zA-Z0-9_\-]/', '', $Vgv45dfhsyuhame);
		}
		$Vnwufml5q3nphis->pdflayers[] = array('layer' => $Vx3g4ytafo1aayer, 'name' => $Vgv45dfhsyuhame, 'print' => $V1yuhsvbtlvrrint, 'view' => $Vz0hmukhwa4ziew, 'lock' => $Vx3g4ytafo1aock);
		$Vnwufml5q3nphis->openMarkedContent = true;
		$Vnwufml5q3nphis->_out('/OC /'.$Vx3g4ytafo1aayer.' BDC');
	}

	
	public function endLayer() {
		if ($Vnwufml5q3nphis->state != 2) {
			return;
		}
		if ($Vnwufml5q3nphis->openMarkedContent) {
			
			$Vnwufml5q3nphis->_out('EMC');
			$Vnwufml5q3nphis->openMarkedContent = false;
		}
	}

	
	public function setVisibility($Vz0hmukhwa4z) {
		if ($Vnwufml5q3nphis->state != 2) {
			return;
		}
		$Vnwufml5q3nphis->endLayer();
		switch($Vz0hmukhwa4z) {
			case 'print': {
				$Vnwufml5q3nphis->startLayer('Print', true, false);
				break;
			}
			case 'view':
			case 'screen': {
				$Vnwufml5q3nphis->startLayer('View', false, true);
				break;
			}
			case 'all': {
				$Vnwufml5q3nphis->_out('');
				break;
			}
			default: {
				$Vnwufml5q3nphis->Error('Incorrect visibility: '.$Vz0hmukhwa4z);
				break;
			}
		}
	}

	
	protected function addExtGState($V1yuhsvbtlvrarms) {
		if ($Vnwufml5q3nphis->pdfa_mode) {
			
			return;
		}
		
		foreach ($Vnwufml5q3nphis->extgstates as $V55vc4mewy5w => $Vs0htpwzsrccxt) {
			if ($Vs0htpwzsrccxt['parms'] == $V1yuhsvbtlvrarms) {
				if ($Vnwufml5q3nphis->inxobj) {
					
					$Vnwufml5q3nphis->xobjects[$Vnwufml5q3nphis->xobjid]['extgstates'][$V55vc4mewy5w] = $Vs0htpwzsrccxt;
				}
				
				return $V55vc4mewy5w;
			}
		}
		$Vgv45dfhsyuh = (count($Vnwufml5q3nphis->extgstates) + 1);
		$Vnwufml5q3nphis->extgstates[$Vgv45dfhsyuh] = array('parms' => $V1yuhsvbtlvrarms);
		if ($Vnwufml5q3nphis->inxobj) {
			
			$Vnwufml5q3nphis->xobjects[$Vnwufml5q3nphis->xobjid]['extgstates'][$Vgv45dfhsyuh] = $Vnwufml5q3nphis->extgstates[$Vgv45dfhsyuh];
		}
		return $Vgv45dfhsyuh;
	}

	
	protected function setExtGState($Vcpk4yqmtzl3) {
		if ($Vnwufml5q3nphis->pdfa_mode OR ($Vnwufml5q3nphis->state != 2)) {
			
			return;
		}
		$Vnwufml5q3nphis->_out(sprintf('/GS%d gs', $Vcpk4yqmtzl3));
	}

	
	protected function _putextgstates() {
		foreach ($Vnwufml5q3nphis->extgstates as $V55vc4mewy5w => $Vs0htpwzsrccxt) {
			$Vnwufml5q3nphis->extgstates[$V55vc4mewy5w]['n'] = $Vnwufml5q3nphis->_newobj();
			$V4t5ynycapey = '<< /Type /ExtGState';
			foreach ($Vs0htpwzsrccxt['parms'] as $Vl0q4noiexi4 => $Vz0hmukhwa4z) {
				if (is_float($Vz0hmukhwa4z)) {
					$Vz0hmukhwa4z = sprintf('%F', $Vz0hmukhwa4z);
				} elseif ($Vz0hmukhwa4z === true) {
					$Vz0hmukhwa4z = 'true';
				} elseif ($Vz0hmukhwa4z === false) {
					$Vz0hmukhwa4z = 'false';
				}
				$V4t5ynycapey .= ' /'.$Vl0q4noiexi4.' '.$Vz0hmukhwa4z;
			}
			$V4t5ynycapey .= ' >>';
			$V4t5ynycapey .= "\n".'endobj';
			$Vnwufml5q3nphis->_out($V4t5ynycapey);
		}
	}

	
	public function setOverprint($Vvt20qqut4butroking=true, $Vgv45dfhsyuhonstroking='', $V0vkydnx50wa=0) {
		if ($Vnwufml5q3nphis->state != 2) {
			return;
		}
		$Vvt20qqut4butroking = $Vvt20qqut4butroking ? true : false;
		if (TCPDF_STATIC::empty_string($Vgv45dfhsyuhonstroking)) {
			
			$Vgv45dfhsyuhonstroking = $Vvt20qqut4butroking;
		} else {
			$Vgv45dfhsyuhonstroking = $Vgv45dfhsyuhonstroking ? true : false;
		}
		if (($V0vkydnx50wa != 0) AND ($V0vkydnx50wa != 1)) {
			$V0vkydnx50wa = 0;
		}
		$Vnwufml5q3nphis->overprint = array('OP' => $Vvt20qqut4butroking, 'op' => $Vgv45dfhsyuhonstroking, 'OPM' => $V0vkydnx50wa);
		$Vcpk4yqmtzl3 = $Vnwufml5q3nphis->addExtGState($Vnwufml5q3nphis->overprint);
		$Vnwufml5q3nphis->setExtGState($Vcpk4yqmtzl3);
	}

	
	public function getOverprint() {
		return $Vnwufml5q3nphis->overprint;
	}

	
	public function setAlpha($Vvt20qqut4butroking=1, $Vpq3acakq35cm='Normal', $Vgv45dfhsyuhonstroking='', $Vudz4oh4qikuis=false) {
		if ($Vnwufml5q3nphis->pdfa_mode) {
			
			return;
		}
		$Vvt20qqut4butroking = floatval($Vvt20qqut4butroking);
		if (TCPDF_STATIC::empty_string($Vgv45dfhsyuhonstroking)) {
			
			$Vgv45dfhsyuhonstroking = $Vvt20qqut4butroking;
		} else {
			$Vgv45dfhsyuhonstroking = floatval($Vgv45dfhsyuhonstroking);
		}
		if ($Vpq3acakq35cm[0] == '/') {
			
			$Vpq3acakq35cm = substr($Vpq3acakq35cm, 1);
		}
		if (!in_array($Vpq3acakq35cm, array('Normal', 'Multiply', 'Screen', 'Overlay', 'Darken', 'Lighten', 'ColorDodge', 'ColorBurn', 'HardLight', 'SoftLight', 'Difference', 'Exclusion', 'Hue', 'Saturation', 'Color', 'Luminosity'))) {
			$Vpq3acakq35cm = 'Normal';
		}
		$Vudz4oh4qikuis = $Vudz4oh4qikuis ? true : false;
		$Vnwufml5q3nphis->alpha = array('CA' => $Vvt20qqut4butroking, 'ca' => $Vgv45dfhsyuhonstroking, 'BM' => '/'.$Vpq3acakq35cm, 'AIS' => $Vudz4oh4qikuis);
		$Vcpk4yqmtzl3 = $Vnwufml5q3nphis->addExtGState($Vnwufml5q3nphis->alpha);
		$Vnwufml5q3nphis->setExtGState($Vcpk4yqmtzl3);
	}

	
	public function getAlpha() {
		return $Vnwufml5q3nphis->alpha;
	}

	
	public function setJPEGQuality($Vtlf4k2b0g1p) {
		if (($Vtlf4k2b0g1p < 1) OR ($Vtlf4k2b0g1p > 100)) {
			$Vtlf4k2b0g1p = 75;
		}
		$Vnwufml5q3nphis->jpeg_quality = intval($Vtlf4k2b0g1p);
	}

	
	public function setDefaultTableColumns($Vwcmlurixvzgols=4) {
		$Vnwufml5q3nphis->default_table_columns = intval($Vwcmlurixvzgols);
	}

	
	public function setCellHeightRatio($Vvjxcwrp4tjq) {
		$Vnwufml5q3nphis->cell_height_ratio = $Vvjxcwrp4tjq;
	}

	
	public function getCellHeightRatio() {
		return $Vnwufml5q3nphis->cell_height_ratio;
	}

	
	public function setPDFVersion($Vz0hmukhwa4zersion='1.7') {
		if ($Vnwufml5q3nphis->pdfa_mode) {
			
			$Vnwufml5q3nphis->PDFVersion = '1.4';
		} else {
			$Vnwufml5q3nphis->PDFVersion = $Vz0hmukhwa4zersion;
		}
	}

	
	public function setViewerPreferences($V1yuhsvbtlvrreferences) {
		$Vnwufml5q3nphis->viewer_preferences = $V1yuhsvbtlvrreferences;
	}

	
	public function colorRegistrationBar($Vangwoo3ejfg, $Vgxufordoa4t, $Vim12f51jw5r, $Vvjxcwrp4tjq, $Vnwufml5q3npransition=true, $Vz0hmukhwa4zertical=false, $Vwcmlurixvzgolors='A,R,G,B,C,M,Y,K') {
		if (strpos($Vwcmlurixvzgolors, 'ALLSPOT') !== false) {
			
			$Viol0aoa2uzl = '';
			foreach ($Vnwufml5q3nphis->spot_colors as $Vvt20qqut4bupot_color_name => $Vz0hmukhwa4z) {
				$Viol0aoa2uzl .= ','.$Vvt20qqut4bupot_color_name;
			}
			if (!empty($Viol0aoa2uzl)) {
				$Viol0aoa2uzl = substr($Viol0aoa2uzl, 1);
				$Vwcmlurixvzgolors = str_replace('ALLSPOT', $Viol0aoa2uzl, $Vwcmlurixvzgolors);
			} else {
				$Vwcmlurixvzgolors = str_replace('ALLSPOT', 'NONE', $Vwcmlurixvzgolors);
			}
		}
		$Vpq3acakq35cars = explode(',', $Vwcmlurixvzgolors);
		$Vgv45dfhsyuhumbars = count($Vpq3acakq35cars); 
		if ($Vgv45dfhsyuhumbars <= 0) {
			return;
		}
		
		if ($Vz0hmukhwa4zertical) {
			$Vwcmlurixvzgoords = array(0, 0, 0, 1);
			$Vim12f51jw5rb = $Vim12f51jw5r / $Vgv45dfhsyuhumbars; 
			$Vvjxcwrp4tjqb = $Vvjxcwrp4tjq; 
			$Vangwoo3ejfgd = $Vim12f51jw5rb; 
			$Vgxufordoa4td = 0; 
		} else {
			$Vwcmlurixvzgoords = array(1, 0, 0, 0);
			$Vim12f51jw5rb = $Vim12f51jw5r; 
			$Vvjxcwrp4tjqb = $Vvjxcwrp4tjq / $Vgv45dfhsyuhumbars; 
			$Vangwoo3ejfgd = 0; 
			$Vgxufordoa4td = $Vvjxcwrp4tjqb; 
		}
		$Vangwoo3ejfgb = $Vangwoo3ejfg;
		$Vgxufordoa4tb = $Vgxufordoa4t;
		foreach ($Vpq3acakq35cars as $Vwcmlurixvzgol) {
			switch ($Vwcmlurixvzgol) {
				
				case 'A': { 
					$Vwcmlurixvzgol_a = array(255);
					$Vwcmlurixvzgol_b = array(0);
					break;
				}
				case 'W': { 
					$Vwcmlurixvzgol_a = array(0);
					$Vwcmlurixvzgol_b = array(255);
					break;
				}
				case 'R': { 
					$Vwcmlurixvzgol_a = array(255,255,255);
					$Vwcmlurixvzgol_b = array(255,0,0);
					break;
				}
				case 'G': { 
					$Vwcmlurixvzgol_a = array(255,255,255);
					$Vwcmlurixvzgol_b = array(0,255,0);
					break;
				}
				case 'B': { 
					$Vwcmlurixvzgol_a = array(255,255,255);
					$Vwcmlurixvzgol_b = array(0,0,255);
					break;
				}
				case 'C': { 
					$Vwcmlurixvzgol_a = array(0,0,0,0);
					$Vwcmlurixvzgol_b = array(100,0,0,0);
					break;
				}
				case 'M': { 
					$Vwcmlurixvzgol_a = array(0,0,0,0);
					$Vwcmlurixvzgol_b = array(0,100,0,0);
					break;
				}
				case 'Y': { 
					$Vwcmlurixvzgol_a = array(0,0,0,0);
					$Vwcmlurixvzgol_b = array(0,0,100,0);
					break;
				}
				case 'K': { 
					$Vwcmlurixvzgol_a = array(0,0,0,0);
					$Vwcmlurixvzgol_b = array(0,0,0,100);
					break;
				}
				case 'RGB': { 
					$Vwcmlurixvzgol_a = array(255,255,255);
					$Vwcmlurixvzgol_b = array(0,0,0);
					break;
				}
				case 'CMYK': { 
					$Vwcmlurixvzgol_a = array(0,0,0,0);
					$Vwcmlurixvzgol_b = array(100,100,100,100);
					break;
				}
				case 'ALL': { 
					$Vwcmlurixvzgol_a = array(0,0,0,0,'None');
					$Vwcmlurixvzgol_b = array(100,100,100,100,'All');
					break;
				}
				case 'NONE': { 
					$Vwcmlurixvzgol_a = array(0,0,0,0,'None');
					$Vwcmlurixvzgol_b = array(0,0,0,0,'None');
					break;
				}
				default: { 
					$Vwcmlurixvzgol_a = array(0,0,0,0,'None');
					$Vwcmlurixvzgol_b = TCPDF_COLORS::getSpotColor($Vwcmlurixvzgol, $Vnwufml5q3nphis->spot_colors);
					if ($Vwcmlurixvzgol_b === false) {
						
						$Vwcmlurixvzgol_b = array(100,100,100,100,'All');
					}
					break;
				}
			}
			if ($Vwcmlurixvzgol != 'NONE') {
				if ($Vnwufml5q3npransition) {
					
					$Vnwufml5q3nphis->LinearGradient($Vangwoo3ejfgb, $Vgxufordoa4tb, $Vim12f51jw5rb, $Vvjxcwrp4tjqb, $Vwcmlurixvzgol_a, $Vwcmlurixvzgol_b, $Vwcmlurixvzgoords);
				} else {
					$Vnwufml5q3nphis->SetFillColorArray($Vwcmlurixvzgol_b);
					
					$Vnwufml5q3nphis->Rect($Vangwoo3ejfgb, $Vgxufordoa4tb, $Vim12f51jw5rb, $Vvjxcwrp4tjqb, 'F', array());
				}
				$Vangwoo3ejfgb += $Vangwoo3ejfgd;
				$Vgxufordoa4tb += $Vgxufordoa4td;
			}
		}
	}

	
	public function cropMark($Vangwoo3ejfg, $Vgxufordoa4t, $Vim12f51jw5r, $Vvjxcwrp4tjq, $Vvmwm1jsklgc='T,R,B,L', $Vwcmlurixvzgolor=array(100,100,100,100,'All')) {
		$Vnwufml5q3nphis->SetLineStyle(array('width' => (0.5 / $Vnwufml5q3nphis->k), 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => $Vwcmlurixvzgolor));
		$Vvmwm1jsklgc = strtoupper($Vvmwm1jsklgc);
		$Vvmwm1jsklgc = preg_replace('/[^A-Z\-\,]*/', '', $Vvmwm1jsklgc);
		
		$Vvmwm1jsklgc = str_replace('-', ',', $Vvmwm1jsklgc);
		$Vvmwm1jsklgc = str_replace('TL', 'T,L', $Vvmwm1jsklgc);
		$Vvmwm1jsklgc = str_replace('TR', 'T,R', $Vvmwm1jsklgc);
		$Vvmwm1jsklgc = str_replace('BL', 'F,L', $Vvmwm1jsklgc);
		$Vvmwm1jsklgc = str_replace('BR', 'F,R', $Vvmwm1jsklgc);
		$Vvmwm1jsklgc = str_replace('A', 'T,L', $Vvmwm1jsklgc);
		$Vvmwm1jsklgc = str_replace('B', 'T,R', $Vvmwm1jsklgc);
		$Vvmwm1jsklgc = str_replace('T,RO', 'BO', $Vvmwm1jsklgc);
		$Vvmwm1jsklgc = str_replace('C', 'F,L', $Vvmwm1jsklgc);
		$Vvmwm1jsklgc = str_replace('D', 'F,R', $Vvmwm1jsklgc);
		$Vwcmlurixvzgrops = explode(',', strtoupper($Vvmwm1jsklgc));
		
		$Vwcmlurixvzgrops = array_unique($Vwcmlurixvzgrops);
		$Vupjyej5fuuj = ($Vim12f51jw5r / 4); 
		$Vc0aiseldrl3h = ($Vvjxcwrp4tjq / 4); 
		foreach ($Vwcmlurixvzgrops as $Vwcmlurixvzgrop) {
			switch ($Vwcmlurixvzgrop) {
				case 'T':
				case 'TOP': {
					$Vangwoo3ejfg1 = $Vangwoo3ejfg;
					$Vgxufordoa4t1 = ($Vgxufordoa4t - $Vvjxcwrp4tjq);
					$Vangwoo3ejfg2 = $Vangwoo3ejfg;
					$Vgxufordoa4t2 = ($Vgxufordoa4t - $Vc0aiseldrl3h);
					break;
				}
				case 'F':
				case 'BOTTOM': {
					$Vangwoo3ejfg1 = $Vangwoo3ejfg;
					$Vgxufordoa4t1 = ($Vgxufordoa4t + $Vc0aiseldrl3h);
					$Vangwoo3ejfg2 = $Vangwoo3ejfg;
					$Vgxufordoa4t2 = ($Vgxufordoa4t + $Vvjxcwrp4tjq);
					break;
				}
				case 'L':
				case 'LEFT': {
					$Vangwoo3ejfg1 = ($Vangwoo3ejfg - $Vim12f51jw5r);
					$Vgxufordoa4t1 = $Vgxufordoa4t;
					$Vangwoo3ejfg2 = ($Vangwoo3ejfg - $Vupjyej5fuuj);
					$Vgxufordoa4t2 = $Vgxufordoa4t;
					break;
				}
				case 'R':
				case 'RIGHT': {
					$Vangwoo3ejfg1 = ($Vangwoo3ejfg + $Vupjyej5fuuj);
					$Vgxufordoa4t1 = $Vgxufordoa4t;
					$Vangwoo3ejfg2 = ($Vangwoo3ejfg + $Vim12f51jw5r);
					$Vgxufordoa4t2 = $Vgxufordoa4t;
					break;
				}
			}
			$Vnwufml5q3nphis->Line($Vangwoo3ejfg1, $Vgxufordoa4t1, $Vangwoo3ejfg2, $Vgxufordoa4t2);
		}
	}

	
	public function registrationMark($Vangwoo3ejfg, $Vgxufordoa4t, $Vfhkt4vbeual, $Vc0aiseldrl3ouble=false, $Vwcmlurixvzgola=array(100,100,100,100,'All'), $Vwcmlurixvzgolb=array(0,0,0,0,'None')) {
		$Vx3g4ytafo1aine_style = array('width' => max((0.5 / $Vnwufml5q3nphis->k),($Vfhkt4vbeual / 30)), 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => $Vwcmlurixvzgola);
		$Vnwufml5q3nphis->SetFillColorArray($Vwcmlurixvzgola);
		$Vnwufml5q3nphis->PieSector($Vangwoo3ejfg, $Vgxufordoa4t, $Vfhkt4vbeual, 90, 180, 'F');
		$Vnwufml5q3nphis->PieSector($Vangwoo3ejfg, $Vgxufordoa4t, $Vfhkt4vbeual, 270, 360, 'F');
		$Vnwufml5q3nphis->Circle($Vangwoo3ejfg, $Vgxufordoa4t, $Vfhkt4vbeual, 0, 360, 'C', $Vx3g4ytafo1aine_style, array(), 8);
		if ($Vc0aiseldrl3ouble) {
			$Vfhkt4vbeuali = $Vfhkt4vbeual * 0.5;
			$Vnwufml5q3nphis->SetFillColorArray($Vwcmlurixvzgolb);
			$Vnwufml5q3nphis->PieSector($Vangwoo3ejfg, $Vgxufordoa4t, $Vfhkt4vbeuali, 90, 180, 'F');
			$Vnwufml5q3nphis->PieSector($Vangwoo3ejfg, $Vgxufordoa4t, $Vfhkt4vbeuali, 270, 360, 'F');
			$Vnwufml5q3nphis->SetFillColorArray($Vwcmlurixvzgola);
			$Vnwufml5q3nphis->PieSector($Vangwoo3ejfg, $Vgxufordoa4t, $Vfhkt4vbeuali, 0, 90, 'F');
			$Vnwufml5q3nphis->PieSector($Vangwoo3ejfg, $Vgxufordoa4t, $Vfhkt4vbeuali, 180, 270, 'F');
			$Vnwufml5q3nphis->Circle($Vangwoo3ejfg, $Vgxufordoa4t, $Vfhkt4vbeuali, 0, 360, 'C', $Vx3g4ytafo1aine_style, array(), 8);
		}
	}

	
	public function registrationMarkCMYK($Vangwoo3ejfg, $Vgxufordoa4t, $Vfhkt4vbeual) {
		
		$Vx3g4ytafo1aw = max((0.5 / $Vnwufml5q3nphis->k),($Vfhkt4vbeual / 8));
		
		$Vfhkt4vbeuali = ($Vfhkt4vbeual * 0.6);
		
		$V14ltds3prpr = ($Vfhkt4vbeual * 1.3);
		
		$Vnwufml5q3nphis->SetFillColorArray(array(100,0,0,0));
		$Vnwufml5q3nphis->PieSector($Vangwoo3ejfg, $Vgxufordoa4t, $Vfhkt4vbeuali, 270, 360, 'F');
		
		$Vnwufml5q3nphis->SetFillColorArray(array(0,100,0,0));
		$Vnwufml5q3nphis->PieSector($Vangwoo3ejfg, $Vgxufordoa4t, $Vfhkt4vbeuali, 0, 90, 'F');
		
		$Vnwufml5q3nphis->SetFillColorArray(array(0,0,100,0));
		$Vnwufml5q3nphis->PieSector($Vangwoo3ejfg, $Vgxufordoa4t, $Vfhkt4vbeuali, 90, 180, 'F');
		
		$Vnwufml5q3nphis->SetFillColorArray(array(0,0,0,100));
		$Vnwufml5q3nphis->PieSector($Vangwoo3ejfg, $Vgxufordoa4t, $Vfhkt4vbeuali, 180, 270, 'F');
		
		$Vx3g4ytafo1aine_style = array('width' => $Vx3g4ytafo1aw, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(100,100,100,100,'All'));
		$Vnwufml5q3nphis->SetFillColorArray(array(100,100,100,100,'All'));
		
		$Vnwufml5q3nphis->Circle($Vangwoo3ejfg, $Vgxufordoa4t, $Vfhkt4vbeual, 0, 360, 'C', $Vx3g4ytafo1aine_style, array(), 8);
		
		$Vnwufml5q3nphis->Line($Vangwoo3ejfg, ($Vgxufordoa4t - $V14ltds3prpr), $Vangwoo3ejfg, ($Vgxufordoa4t - $Vfhkt4vbeuali));
		$Vnwufml5q3nphis->Line($Vangwoo3ejfg, ($Vgxufordoa4t + $Vfhkt4vbeuali), $Vangwoo3ejfg, ($Vgxufordoa4t + $V14ltds3prpr));
		$Vnwufml5q3nphis->Line(($Vangwoo3ejfg - $V14ltds3prpr), $Vgxufordoa4t, ($Vangwoo3ejfg - $Vfhkt4vbeuali), $Vgxufordoa4t);
		$Vnwufml5q3nphis->Line(($Vangwoo3ejfg + $Vfhkt4vbeuali), $Vgxufordoa4t, ($Vangwoo3ejfg + $V14ltds3prpr), $Vgxufordoa4t);
	}

	
	public function LinearGradient($Vangwoo3ejfg, $Vgxufordoa4t, $Vim12f51jw5r, $Vvjxcwrp4tjq, $Vwcmlurixvzgol1=array(), $Vwcmlurixvzgol2=array(), $Vwcmlurixvzgoords=array(0,0,1,0)) {
		$Vnwufml5q3nphis->Clip($Vangwoo3ejfg, $Vgxufordoa4t, $Vim12f51jw5r, $Vvjxcwrp4tjq);
		$Vnwufml5q3nphis->Gradient(2, $Vwcmlurixvzgoords, array(array('color' => $Vwcmlurixvzgol1, 'offset' => 0, 'exponent' => 1), array('color' => $Vwcmlurixvzgol2, 'offset' => 1, 'exponent' => 1)), array(), false);
	}

	
	public function RadialGradient($Vangwoo3ejfg, $Vgxufordoa4t, $Vim12f51jw5r, $Vvjxcwrp4tjq, $Vwcmlurixvzgol1=array(), $Vwcmlurixvzgol2=array(), $Vwcmlurixvzgoords=array(0.5,0.5,0.5,0.5,1)) {
		$Vnwufml5q3nphis->Clip($Vangwoo3ejfg, $Vgxufordoa4t, $Vim12f51jw5r, $Vvjxcwrp4tjq);
		$Vnwufml5q3nphis->Gradient(3, $Vwcmlurixvzgoords, array(array('color' => $Vwcmlurixvzgol1, 'offset' => 0, 'exponent' => 1), array('color' => $Vwcmlurixvzgol2, 'offset' => 1, 'exponent' => 1)), array(), false);
	}

	
	public function CoonsPatchMesh($Vangwoo3ejfg, $Vgxufordoa4t, $Vim12f51jw5r, $Vvjxcwrp4tjq, $Vwcmlurixvzgol1=array(), $Vwcmlurixvzgol2=array(), $Vwcmlurixvzgol3=array(), $Vwcmlurixvzgol4=array(), $Vwcmlurixvzgoords=array(0.00,0.0,0.33,0.00,0.67,0.00,1.00,0.00,1.00,0.33,1.00,0.67,1.00,1.00,0.67,1.00,0.33,1.00,0.00,1.00,0.00,0.67,0.00,0.33), $Vwcmlurixvzgoords_min=0, $Vwcmlurixvzgoords_max=1, $Vudz4oh4qikuntialias=false) {
		if ($Vnwufml5q3nphis->pdfa_mode OR ($Vnwufml5q3nphis->state != 2)) {
			return;
		}
		$Vnwufml5q3nphis->Clip($Vangwoo3ejfg, $Vgxufordoa4t, $Vim12f51jw5r, $Vvjxcwrp4tjq);
		$Vgv45dfhsyuh = count($Vnwufml5q3nphis->gradients) + 1;
		$Vnwufml5q3nphis->gradients[$Vgv45dfhsyuh] = array();
		$Vnwufml5q3nphis->gradients[$Vgv45dfhsyuh]['type'] = 6; 
		$Vnwufml5q3nphis->gradients[$Vgv45dfhsyuh]['coords'] = array();
		$Vnwufml5q3nphis->gradients[$Vgv45dfhsyuh]['antialias'] = $Vudz4oh4qikuntialias;
		$Vnwufml5q3nphis->gradients[$Vgv45dfhsyuh]['colors'] = array();
		$Vnwufml5q3nphis->gradients[$Vgv45dfhsyuh]['transparency'] = false;
		
		if (!isset($Vwcmlurixvzgoords[0]['f'])) {
			
			if (!isset($Vwcmlurixvzgol1[1])) {
				$Vwcmlurixvzgol1[1] = $Vwcmlurixvzgol1[2] = $Vwcmlurixvzgol1[0];
			}
			if (!isset($Vwcmlurixvzgol2[1])) {
				$Vwcmlurixvzgol2[1] = $Vwcmlurixvzgol2[2] = $Vwcmlurixvzgol2[0];
			}
			if (!isset($Vwcmlurixvzgol3[1])) {
				$Vwcmlurixvzgol3[1] = $Vwcmlurixvzgol3[2] = $Vwcmlurixvzgol3[0];
			}
			if (!isset($Vwcmlurixvzgol4[1])) {
				$Vwcmlurixvzgol4[1] = $Vwcmlurixvzgol4[2] = $Vwcmlurixvzgol4[0];
			}
			$V1yuhsvbtlvratch_array[0]['f'] = 0;
			$V1yuhsvbtlvratch_array[0]['points'] = $Vwcmlurixvzgoords;
			$V1yuhsvbtlvratch_array[0]['colors'][0]['r'] = $Vwcmlurixvzgol1[0];
			$V1yuhsvbtlvratch_array[0]['colors'][0]['g'] = $Vwcmlurixvzgol1[1];
			$V1yuhsvbtlvratch_array[0]['colors'][0]['b'] = $Vwcmlurixvzgol1[2];
			$V1yuhsvbtlvratch_array[0]['colors'][1]['r'] = $Vwcmlurixvzgol2[0];
			$V1yuhsvbtlvratch_array[0]['colors'][1]['g'] = $Vwcmlurixvzgol2[1];
			$V1yuhsvbtlvratch_array[0]['colors'][1]['b'] = $Vwcmlurixvzgol2[2];
			$V1yuhsvbtlvratch_array[0]['colors'][2]['r'] = $Vwcmlurixvzgol3[0];
			$V1yuhsvbtlvratch_array[0]['colors'][2]['g'] = $Vwcmlurixvzgol3[1];
			$V1yuhsvbtlvratch_array[0]['colors'][2]['b'] = $Vwcmlurixvzgol3[2];
			$V1yuhsvbtlvratch_array[0]['colors'][3]['r'] = $Vwcmlurixvzgol4[0];
			$V1yuhsvbtlvratch_array[0]['colors'][3]['g'] = $Vwcmlurixvzgol4[1];
			$V1yuhsvbtlvratch_array[0]['colors'][3]['b'] = $Vwcmlurixvzgol4[2];
		} else {
			
			$V1yuhsvbtlvratch_array = $Vwcmlurixvzgoords;
		}
		$Vpq3acakq35cpcd = 65535; 
		
		$Vnwufml5q3nphis->gradients[$Vgv45dfhsyuh]['stream'] = '';
		$Vwcmlurixvzgount_patch = count($V1yuhsvbtlvratch_array);
		for ($V55vc4mewy5w=0; $V55vc4mewy5w < $Vwcmlurixvzgount_patch; ++$V55vc4mewy5w) {
			$Vnwufml5q3nphis->gradients[$Vgv45dfhsyuh]['stream'] .= chr($V1yuhsvbtlvratch_array[$V55vc4mewy5w]['f']); 
			$Vwcmlurixvzgount_points = count($V1yuhsvbtlvratch_array[$V55vc4mewy5w]['points']);
			for ($Vuaufi3la1vg=0; $Vuaufi3la1vg < $Vwcmlurixvzgount_points; ++$Vuaufi3la1vg) {
				
				$V1yuhsvbtlvratch_array[$V55vc4mewy5w]['points'][$Vuaufi3la1vg] = (($V1yuhsvbtlvratch_array[$V55vc4mewy5w]['points'][$Vuaufi3la1vg] - $Vwcmlurixvzgoords_min) / ($Vwcmlurixvzgoords_max - $Vwcmlurixvzgoords_min)) * $Vpq3acakq35cpcd;
				if ($V1yuhsvbtlvratch_array[$V55vc4mewy5w]['points'][$Vuaufi3la1vg] < 0) {
					$V1yuhsvbtlvratch_array[$V55vc4mewy5w]['points'][$Vuaufi3la1vg] = 0;
				}
				if ($V1yuhsvbtlvratch_array[$V55vc4mewy5w]['points'][$Vuaufi3la1vg] > $Vpq3acakq35cpcd) {
					$V1yuhsvbtlvratch_array[$V55vc4mewy5w]['points'][$Vuaufi3la1vg] = $Vpq3acakq35cpcd;
				}
				$Vnwufml5q3nphis->gradients[$Vgv45dfhsyuh]['stream'] .= chr(floor($V1yuhsvbtlvratch_array[$V55vc4mewy5w]['points'][$Vuaufi3la1vg] / 256));
				$Vnwufml5q3nphis->gradients[$Vgv45dfhsyuh]['stream'] .= chr(floor($V1yuhsvbtlvratch_array[$V55vc4mewy5w]['points'][$Vuaufi3la1vg] % 256));
			}
			$Vwcmlurixvzgount_cols = count($V1yuhsvbtlvratch_array[$V55vc4mewy5w]['colors']);
			for ($Vuaufi3la1vg=0; $Vuaufi3la1vg < $Vwcmlurixvzgount_cols; ++$Vuaufi3la1vg) {
				
				$Vnwufml5q3nphis->gradients[$Vgv45dfhsyuh]['stream'] .= chr($V1yuhsvbtlvratch_array[$V55vc4mewy5w]['colors'][$Vuaufi3la1vg]['r']);
				$Vnwufml5q3nphis->gradients[$Vgv45dfhsyuh]['stream'] .= chr($V1yuhsvbtlvratch_array[$V55vc4mewy5w]['colors'][$Vuaufi3la1vg]['g']);
				$Vnwufml5q3nphis->gradients[$Vgv45dfhsyuh]['stream'] .= chr($V1yuhsvbtlvratch_array[$V55vc4mewy5w]['colors'][$Vuaufi3la1vg]['b']);
			}
		}
		
		$Vnwufml5q3nphis->_out('/Sh'.$Vgv45dfhsyuh.' sh');
		
		$Vnwufml5q3nphis->_outRestoreGraphicsState();
		if ($Vnwufml5q3nphis->inxobj) {
			
			$Vnwufml5q3nphis->xobjects[$Vnwufml5q3nphis->xobjid]['gradients'][$Vgv45dfhsyuh] = $Vnwufml5q3nphis->gradients[$Vgv45dfhsyuh];
		}
	}

	
	protected function Clip($Vangwoo3ejfg, $Vgxufordoa4t, $Vim12f51jw5r, $Vvjxcwrp4tjq) {
		if ($Vnwufml5q3nphis->state != 2) {
			 return;
		}
		if ($Vnwufml5q3nphis->rtl) {
			$Vangwoo3ejfg = $Vnwufml5q3nphis->w - $Vangwoo3ejfg - $Vim12f51jw5r;
		}
		
		$Vvt20qqut4bu = 'q';
		
		$Vvt20qqut4bu .= sprintf(' %F %F %F %F re W n', $Vangwoo3ejfg*$Vnwufml5q3nphis->k, ($Vnwufml5q3nphis->h-$Vgxufordoa4t)*$Vnwufml5q3nphis->k, $Vim12f51jw5r*$Vnwufml5q3nphis->k, -$Vvjxcwrp4tjq*$Vnwufml5q3nphis->k);
		
		$Vvt20qqut4bu .= sprintf(' %F 0 0 %F %F %F cm', $Vim12f51jw5r*$Vnwufml5q3nphis->k, $Vvjxcwrp4tjq*$Vnwufml5q3nphis->k, $Vangwoo3ejfg*$Vnwufml5q3nphis->k, ($Vnwufml5q3nphis->h-($Vgxufordoa4t+$Vvjxcwrp4tjq))*$Vnwufml5q3nphis->k);
		$Vnwufml5q3nphis->_out($Vvt20qqut4bu);
	}

	
	public function Gradient($Vvmwm1jsklgc, $Vwcmlurixvzgoords, $Vvt20qqut4butops, $Vpq3acakq35cackground=array(), $Vudz4oh4qikuntialias=false) {
		if ($Vnwufml5q3nphis->pdfa_mode OR ($Vnwufml5q3nphis->state != 2)) {
			return;
		}
		$Vgv45dfhsyuh = count($Vnwufml5q3nphis->gradients) + 1;
		$Vnwufml5q3nphis->gradients[$Vgv45dfhsyuh] = array();
		$Vnwufml5q3nphis->gradients[$Vgv45dfhsyuh]['type'] = $Vvmwm1jsklgc;
		$Vnwufml5q3nphis->gradients[$Vgv45dfhsyuh]['coords'] = $Vwcmlurixvzgoords;
		$Vnwufml5q3nphis->gradients[$Vgv45dfhsyuh]['antialias'] = $Vudz4oh4qikuntialias;
		$Vnwufml5q3nphis->gradients[$Vgv45dfhsyuh]['colors'] = array();
		$Vnwufml5q3nphis->gradients[$Vgv45dfhsyuh]['transparency'] = false;
		
		$Vgv45dfhsyuhumcolspace = count($Vvt20qqut4butops[0]['color']);
		$Vhyx3um45rs1olor = array_values($Vpq3acakq35cackground);
		switch($Vgv45dfhsyuhumcolspace) {
			case 5:   
			case 4: { 
				$Vnwufml5q3nphis->gradients[$Vgv45dfhsyuh]['colspace'] = 'DeviceCMYK';
				if (!empty($Vpq3acakq35cackground)) {
					$Vnwufml5q3nphis->gradients[$Vgv45dfhsyuh]['background'] = sprintf('%F %F %F %F', $Vhyx3um45rs1olor[0]/100, $Vhyx3um45rs1olor[1]/100, $Vhyx3um45rs1olor[2]/100, $Vhyx3um45rs1olor[3]/100);
				}
				break;
			}
			case 3: { 
				$Vnwufml5q3nphis->gradients[$Vgv45dfhsyuh]['colspace'] = 'DeviceRGB';
				if (!empty($Vpq3acakq35cackground)) {
					$Vnwufml5q3nphis->gradients[$Vgv45dfhsyuh]['background'] = sprintf('%F %F %F', $Vhyx3um45rs1olor[0]/255, $Vhyx3um45rs1olor[1]/255, $Vhyx3um45rs1olor[2]/255);
				}
				break;
			}
			case 1: { 
				$Vnwufml5q3nphis->gradients[$Vgv45dfhsyuh]['colspace'] = 'DeviceGray';
				if (!empty($Vpq3acakq35cackground)) {
					$Vnwufml5q3nphis->gradients[$Vgv45dfhsyuh]['background'] = sprintf('%F', $Vhyx3um45rs1olor[0]/255);
				}
				break;
			}
		}
		$Vgv45dfhsyuhum_stops = count($Vvt20qqut4butops);
		$Vx3g4ytafo1aast_stop_id = $Vgv45dfhsyuhum_stops - 1;
		foreach ($Vvt20qqut4butops as $Vl0q4noiexi4ey => $Vvt20qqut4butop) {
			$Vnwufml5q3nphis->gradients[$Vgv45dfhsyuh]['colors'][$Vl0q4noiexi4ey] = array();
			
			if (isset($Vvt20qqut4butop['offset'])) {
				$Vnwufml5q3nphis->gradients[$Vgv45dfhsyuh]['colors'][$Vl0q4noiexi4ey]['offset'] = $Vvt20qqut4butop['offset'];
			} else {
				if ($Vl0q4noiexi4ey == 0) {
					$Vnwufml5q3nphis->gradients[$Vgv45dfhsyuh]['colors'][$Vl0q4noiexi4ey]['offset'] = 0;
				} elseif ($Vl0q4noiexi4ey == $Vx3g4ytafo1aast_stop_id) {
					$Vnwufml5q3nphis->gradients[$Vgv45dfhsyuh]['colors'][$Vl0q4noiexi4ey]['offset'] = 1;
				} else {
					$Vaoucjoirsd1tep = (1 - $Vnwufml5q3nphis->gradients[$Vgv45dfhsyuh]['colors'][($Vl0q4noiexi4ey - 1)]['offset']) / ($Vgv45dfhsyuhum_stops - $Vl0q4noiexi4ey);
					$Vnwufml5q3nphis->gradients[$Vgv45dfhsyuh]['colors'][$Vl0q4noiexi4ey]['offset'] = $Vnwufml5q3nphis->gradients[$Vgv45dfhsyuh]['colors'][($Vl0q4noiexi4ey - 1)]['offset'] + $Vaoucjoirsd1tep;
				}
			}
			if (isset($Vvt20qqut4butop['opacity'])) {
				$Vnwufml5q3nphis->gradients[$Vgv45dfhsyuh]['colors'][$Vl0q4noiexi4ey]['opacity'] = $Vvt20qqut4butop['opacity'];
				if ((!$Vnwufml5q3nphis->pdfa_mode) AND ($Vvt20qqut4butop['opacity'] < 1)) {
					$Vnwufml5q3nphis->gradients[$Vgv45dfhsyuh]['transparency'] = true;
				}
			} else {
				$Vnwufml5q3nphis->gradients[$Vgv45dfhsyuh]['colors'][$Vl0q4noiexi4ey]['opacity'] = 1;
			}
			
			if (isset($Vvt20qqut4butop['exponent'])) {
				$Vnwufml5q3nphis->gradients[$Vgv45dfhsyuh]['colors'][$Vl0q4noiexi4ey]['exponent'] = $Vvt20qqut4butop['exponent'];
			} else {
				$Vnwufml5q3nphis->gradients[$Vgv45dfhsyuh]['colors'][$Vl0q4noiexi4ey]['exponent'] = 1;
			}
			
			$Vwcmlurixvzgolor = array_values($Vvt20qqut4butop['color']);
			switch($Vgv45dfhsyuhumcolspace) {
				case 5:   
				case 4: { 
					$Vnwufml5q3nphis->gradients[$Vgv45dfhsyuh]['colors'][$Vl0q4noiexi4ey]['color'] = sprintf('%F %F %F %F', $Vwcmlurixvzgolor[0]/100, $Vwcmlurixvzgolor[1]/100, $Vwcmlurixvzgolor[2]/100, $Vwcmlurixvzgolor[3]/100);
					break;
				}
				case 3: { 
					$Vnwufml5q3nphis->gradients[$Vgv45dfhsyuh]['colors'][$Vl0q4noiexi4ey]['color'] = sprintf('%F %F %F', $Vwcmlurixvzgolor[0]/255, $Vwcmlurixvzgolor[1]/255, $Vwcmlurixvzgolor[2]/255);
					break;
				}
				case 1: { 
					$Vnwufml5q3nphis->gradients[$Vgv45dfhsyuh]['colors'][$Vl0q4noiexi4ey]['color'] = sprintf('%F', $Vwcmlurixvzgolor[0]/255);
					break;
				}
			}
		}
		if ($Vnwufml5q3nphis->gradients[$Vgv45dfhsyuh]['transparency']) {
			
			$Vnwufml5q3nphis->_out('/TGS'.$Vgv45dfhsyuh.' gs');
		}
		
		$Vnwufml5q3nphis->_out('/Sh'.$Vgv45dfhsyuh.' sh');
		
		$Vnwufml5q3nphis->_outRestoreGraphicsState();
		if ($Vnwufml5q3nphis->inxobj) {
			
			$Vnwufml5q3nphis->xobjects[$Vnwufml5q3nphis->xobjid]['gradients'][$Vgv45dfhsyuh] = $Vnwufml5q3nphis->gradients[$Vgv45dfhsyuh];
		}
	}

	
	function _putshaders() {
		if ($Vnwufml5q3nphis->pdfa_mode) {
			return;
		}
		$V55vc4mewy5wdt = count($Vnwufml5q3nphis->gradients); 
		foreach ($Vnwufml5q3nphis->gradients as $V55vc4mewy5wd => $Vghesoillvav) {
			if (($Vghesoillvav['type'] == 2) OR ($Vghesoillvav['type'] == 3)) {
				$Vore4fb2od2e = $Vnwufml5q3nphis->_newobj();
				$V4t5ynycapey = '<<';
				$V4t5ynycapey .= ' /FunctionType 3';
				$V4t5ynycapey .= ' /Domain [0 1]';
				$Vxb0ra0fqzn2unctions = '';
				$Vpq3acakq35counds = '';
				$V4bajg5xhokaode = '';
				$V55vc4mewy5w = 1;
				$Vgv45dfhsyuhum_cols = count($Vghesoillvav['colors']);
				$Vx3g4ytafo1aastcols = $Vgv45dfhsyuhum_cols - 1;
				for ($V55vc4mewy5w = 1; $V55vc4mewy5w < $Vgv45dfhsyuhum_cols; ++$V55vc4mewy5w) {
					$Vxb0ra0fqzn2unctions .= ($Vore4fb2od2e + $V55vc4mewy5w).' 0 R ';
					if ($V55vc4mewy5w < $Vx3g4ytafo1aastcols) {
						$Vpq3acakq35counds .= sprintf('%F ', $Vghesoillvav['colors'][$V55vc4mewy5w]['offset']);
					}
					$V4bajg5xhokaode .= '0 1 ';
				}
				$V4t5ynycapey .= ' /Functions ['.trim($Vxb0ra0fqzn2unctions).']';
				$V4t5ynycapey .= ' /Bounds ['.trim($Vpq3acakq35counds).']';
				$V4t5ynycapey .= ' /Encode ['.trim($V4bajg5xhokaode).']';
				$V4t5ynycapey .= ' >>';
				$V4t5ynycapey .= "\n".'endobj';
				$Vnwufml5q3nphis->_out($V4t5ynycapey);
				for ($V55vc4mewy5w = 1; $V55vc4mewy5w < $Vgv45dfhsyuhum_cols; ++$V55vc4mewy5w) {
					$Vnwufml5q3nphis->_newobj();
					$V4t5ynycapey = '<<';
					$V4t5ynycapey .= ' /FunctionType 2';
					$V4t5ynycapey .= ' /Domain [0 1]';
					$V4t5ynycapey .= ' /C0 ['.$Vghesoillvav['colors'][($V55vc4mewy5w - 1)]['color'].']';
					$V4t5ynycapey .= ' /C1 ['.$Vghesoillvav['colors'][$V55vc4mewy5w]['color'].']';
					$V4t5ynycapey .= ' /N '.$Vghesoillvav['colors'][$V55vc4mewy5w]['exponent'];
					$V4t5ynycapey .= ' >>';
					$V4t5ynycapey .= "\n".'endobj';
					$Vnwufml5q3nphis->_out($V4t5ynycapey);
				}
				
				if ($Vghesoillvav['transparency']) {
					$Vxb0ra0fqzn2t = $Vnwufml5q3nphis->_newobj();
					$V4t5ynycapey = '<<';
					$V4t5ynycapey .= ' /FunctionType 3';
					$V4t5ynycapey .= ' /Domain [0 1]';
					$Vxb0ra0fqzn2unctions = '';
					$V55vc4mewy5w = 1;
					$Vgv45dfhsyuhum_cols = count($Vghesoillvav['colors']);
					for ($V55vc4mewy5w = 1; $V55vc4mewy5w < $Vgv45dfhsyuhum_cols; ++$V55vc4mewy5w) {
						$Vxb0ra0fqzn2unctions .= ($Vxb0ra0fqzn2t + $V55vc4mewy5w).' 0 R ';
					}
					$V4t5ynycapey .= ' /Functions ['.trim($Vxb0ra0fqzn2unctions).']';
					$V4t5ynycapey .= ' /Bounds ['.trim($Vpq3acakq35counds).']';
					$V4t5ynycapey .= ' /Encode ['.trim($V4bajg5xhokaode).']';
					$V4t5ynycapey .= ' >>';
					$V4t5ynycapey .= "\n".'endobj';
					$Vnwufml5q3nphis->_out($V4t5ynycapey);
					for ($V55vc4mewy5w = 1; $V55vc4mewy5w < $Vgv45dfhsyuhum_cols; ++$V55vc4mewy5w) {
						$Vnwufml5q3nphis->_newobj();
						$V4t5ynycapey = '<<';
						$V4t5ynycapey .= ' /FunctionType 2';
						$V4t5ynycapey .= ' /Domain [0 1]';
						$V4t5ynycapey .= ' /C0 ['.$Vghesoillvav['colors'][($V55vc4mewy5w - 1)]['opacity'].']';
						$V4t5ynycapey .= ' /C1 ['.$Vghesoillvav['colors'][$V55vc4mewy5w]['opacity'].']';
						$V4t5ynycapey .= ' /N '.$Vghesoillvav['colors'][$V55vc4mewy5w]['exponent'];
						$V4t5ynycapey .= ' >>';
						$V4t5ynycapey .= "\n".'endobj';
						$Vnwufml5q3nphis->_out($V4t5ynycapey);
					}
				}
			}
			
			$Vnwufml5q3nphis->_newobj();
			$V4t5ynycapey = '<< /ShadingType '.$Vghesoillvav['type'];
			if (isset($Vghesoillvav['colspace'])) {
				$V4t5ynycapey .= ' /ColorSpace /'.$Vghesoillvav['colspace'];
			} else {
				$V4t5ynycapey .= ' /ColorSpace /DeviceRGB';
			}
			if (isset($Vghesoillvav['background']) AND !empty($Vghesoillvav['background'])) {
				$V4t5ynycapey .= ' /Background ['.$Vghesoillvav['background'].']';
			}
			if (isset($Vghesoillvav['antialias']) AND ($Vghesoillvav['antialias'] === true)) {
				$V4t5ynycapey .= ' /AntiAlias true';
			}
			if ($Vghesoillvav['type'] == 2) {
				$V4t5ynycapey .= ' '.sprintf('/Coords [%F %F %F %F]', $Vghesoillvav['coords'][0], $Vghesoillvav['coords'][1], $Vghesoillvav['coords'][2], $Vghesoillvav['coords'][3]);
				$V4t5ynycapey .= ' /Domain [0 1]';
				$V4t5ynycapey .= ' /Function '.$Vore4fb2od2e.' 0 R';
				$V4t5ynycapey .= ' /Extend [true true]';
				$V4t5ynycapey .= ' >>';
			} elseif ($Vghesoillvav['type'] == 3) {
				
				
				$V4t5ynycapey .= ' '.sprintf('/Coords [%F %F 0 %F %F %F]', $Vghesoillvav['coords'][0], $Vghesoillvav['coords'][1], $Vghesoillvav['coords'][2], $Vghesoillvav['coords'][3], $Vghesoillvav['coords'][4]);
				$V4t5ynycapey .= ' /Domain [0 1]';
				$V4t5ynycapey .= ' /Function '.$Vore4fb2od2e.' 0 R';
				$V4t5ynycapey .= ' /Extend [true true]';
				$V4t5ynycapey .= ' >>';
			} elseif ($Vghesoillvav['type'] == 6) {
				$V4t5ynycapey .= ' /BitsPerCoordinate 16';
				$V4t5ynycapey .= ' /BitsPerComponent 8';
				$V4t5ynycapey .= ' /Decode[0 1 0 1 0 1 0 1 0 1]';
				$V4t5ynycapey .= ' /BitsPerFlag 8';
				$Vvt20qqut4butream = $Vnwufml5q3nphis->_getrawstream($Vghesoillvav['stream']);
				$V4t5ynycapey .= ' /Length '.strlen($Vvt20qqut4butream);
				$V4t5ynycapey .= ' >>';
				$V4t5ynycapey .= ' stream'."\n".$Vvt20qqut4butream."\n".'endstream';
			}
			$V4t5ynycapey .= "\n".'endobj';
			$Vnwufml5q3nphis->_out($V4t5ynycapey);
			if ($Vghesoillvav['transparency']) {
				$Vvt20qqut4buhading_transparency = preg_replace('/\/ColorSpace \/[^\s]+/si', '/ColorSpace /DeviceGray', $V4t5ynycapey);
				$Vvt20qqut4buhading_transparency = preg_replace('/\/Function [0-9]+ /si', '/Function '.$Vxb0ra0fqzn2t.' ', $Vvt20qqut4buhading_transparency);
			}
			$Vnwufml5q3nphis->gradients[$V55vc4mewy5wd]['id'] = $Vnwufml5q3nphis->n;
			
			$Vnwufml5q3nphis->_newobj();
			$V4t5ynycapey = '<< /Type /Pattern /PatternType 2';
			$V4t5ynycapey .= ' /Shading '.$Vnwufml5q3nphis->gradients[$V55vc4mewy5wd]['id'].' 0 R';
			$V4t5ynycapey .= ' >>';
			$V4t5ynycapey .= "\n".'endobj';
			$Vnwufml5q3nphis->_out($V4t5ynycapey);
			$Vnwufml5q3nphis->gradients[$V55vc4mewy5wd]['pattern'] = $Vnwufml5q3nphis->n;
			
			if ($Vghesoillvav['transparency']) {
				
				$V55vc4mewy5wdgs = $V55vc4mewy5wd + $V55vc4mewy5wdt;
				$Vnwufml5q3nphis->_newobj();
				$Vnwufml5q3nphis->_out($Vvt20qqut4buhading_transparency);
				$Vnwufml5q3nphis->gradients[$V55vc4mewy5wdgs]['id'] = $Vnwufml5q3nphis->n;
				$Vnwufml5q3nphis->_newobj();
				$V4t5ynycapey = '<< /Type /Pattern /PatternType 2';
				$V4t5ynycapey .= ' /Shading '.$Vnwufml5q3nphis->gradients[$V55vc4mewy5wdgs]['id'].' 0 R';
				$V4t5ynycapey .= ' >>';
				$V4t5ynycapey .= "\n".'endobj';
				$Vnwufml5q3nphis->_out($V4t5ynycapey);
				$Vnwufml5q3nphis->gradients[$V55vc4mewy5wdgs]['pattern'] = $Vnwufml5q3nphis->n;
				
				$V0ql3xygizkc = $Vnwufml5q3nphis->_newobj();
				$Vnwufml5q3nphis->xobjects['LX'.$V0ql3xygizkc] = array('n' => $V0ql3xygizkc);
				$Vq5mneg2nyu1 = '';
				$Vvt20qqut4butream = 'q /a0 gs /Pattern cs /p'.$V55vc4mewy5wdgs.' scn 0 0 '.$Vnwufml5q3nphis->wPt.' '.$Vnwufml5q3nphis->hPt.' re f Q';
				if ($Vnwufml5q3nphis->compress) {
					$Vq5mneg2nyu1 = ' /Filter /FlateDecode';
					$Vvt20qqut4butream = gzcompress($Vvt20qqut4butream);
				}
				$Vvt20qqut4butream = $Vnwufml5q3nphis->_getrawstream($Vvt20qqut4butream);
				$V4t5ynycapey = '<< /Type /XObject /Subtype /Form /FormType 1'.$Vq5mneg2nyu1;
				$V4t5ynycapey .= ' /Length '.strlen($Vvt20qqut4butream);
				$V14ltds3prprct = sprintf('%F %F', $Vnwufml5q3nphis->wPt, $Vnwufml5q3nphis->hPt);
				$V4t5ynycapey .= ' /BBox [0 0 '.$V14ltds3prprct.']';
				$V4t5ynycapey .= ' /Group << /Type /Group /S /Transparency /CS /DeviceGray >>';
				$V4t5ynycapey .= ' /Resources <<';
				$V4t5ynycapey .= ' /ExtGState << /a0 << /ca 1 /CA 1 >> >>';
				$V4t5ynycapey .= ' /Pattern << /p'.$V55vc4mewy5wdgs.' '.$Vnwufml5q3nphis->gradients[$V55vc4mewy5wdgs]['pattern'].' 0 R >>';
				$V4t5ynycapey .= ' >>';
				$V4t5ynycapey .= ' >> ';
				$V4t5ynycapey .= ' stream'."\n".$Vvt20qqut4butream."\n".'endstream';
				$V4t5ynycapey .= "\n".'endobj';
				$Vnwufml5q3nphis->_out($V4t5ynycapey);
				
				$Vnwufml5q3nphis->_newobj();
				$V4t5ynycapey = '<< /Type /Mask /S /Luminosity /G '.($Vnwufml5q3nphis->n - 1).' 0 R >>'."\n".'endobj';
				$Vnwufml5q3nphis->_out($V4t5ynycapey);
				
				$Vnwufml5q3nphis->_newobj();
				$V4t5ynycapey = '<< /Type /ExtGState /SMask '.($Vnwufml5q3nphis->n - 1).' 0 R /AIS false >>'."\n".'endobj';
				$Vnwufml5q3nphis->_out($V4t5ynycapey);
				$Vnwufml5q3nphis->extgstates[] = array('n' => $Vnwufml5q3nphis->n, 'name' => 'TGS'.$V55vc4mewy5wd);
			}
		}
	}

	
	public function PieSector($Vangwoo3ejfgc, $Vgxufordoa4tc, $Vfhkt4vbeual, $Vudz4oh4qiku, $Vpq3acakq35c, $Vovexk3mzujo='FD', $V5k0cete3fo0=true, $Vk1y4jyuc5ns=90) {
		$Vnwufml5q3nphis->PieSectorXY($Vangwoo3ejfgc, $Vgxufordoa4tc, $Vfhkt4vbeual, $Vfhkt4vbeual, $Vudz4oh4qiku, $Vpq3acakq35c, $Vovexk3mzujo, $V5k0cete3fo0, $Vk1y4jyuc5ns);
	}

	
	public function PieSectorXY($Vangwoo3ejfgc, $Vgxufordoa4tc, $Vfhkt4vbeualx, $Vfhkt4vbeualy, $Vudz4oh4qiku, $Vpq3acakq35c, $Vovexk3mzujo='FD', $V5k0cete3fo0=false, $Vk1y4jyuc5ns=0, $Vgv45dfhsyuhc=2) {
		if ($Vnwufml5q3nphis->state != 2) {
			 return;
		}
		if ($Vnwufml5q3nphis->rtl) {
			$Vangwoo3ejfgc = ($Vnwufml5q3nphis->w - $Vangwoo3ejfgc);
		}
		$Vjvwtdkog1to = TCPDF_STATIC::getPathPaintOperator($Vovexk3mzujo);
		if ($Vjvwtdkog1to == 'f') {
			$Vx3g4ytafo1aine_style = array();
		}
		if ($V5k0cete3fo0) {
			$Vc0aiseldrl3 = $Vpq3acakq35c;
			$Vpq3acakq35c = (360 - $Vudz4oh4qiku + $Vk1y4jyuc5ns);
			$Vudz4oh4qiku = (360 - $Vc0aiseldrl3 + $Vk1y4jyuc5ns);
		} else {
			$Vpq3acakq35c += $Vk1y4jyuc5ns;
			$Vudz4oh4qiku += $Vk1y4jyuc5ns;
		}
		$Vnwufml5q3nphis->_outellipticalarc($Vangwoo3ejfgc, $Vgxufordoa4tc, $Vfhkt4vbeualx, $Vfhkt4vbeualy, 0, $Vudz4oh4qiku, $Vpq3acakq35c, true, $Vgv45dfhsyuhc);
		$Vnwufml5q3nphis->_out($Vjvwtdkog1to);
	}

	
	public function ImageEps($Vjluyuwumvof, $Vangwoo3ejfg='', $Vgxufordoa4t='', $Vim12f51jw5r=0, $Vvjxcwrp4tjq=0, $Vx3g4ytafo1aink='', $Vppw1slbj4ovseBoundingBox=true, $Vb5kn1gbu0ep='', $Ve2ojby5keys='', $Vgffhwoemo4c=0, $Vbleqcwoft4t=false, $Vxb0ra0fqzn2ixoutvals=false) {
		if ($Vnwufml5q3nphis->state != 2) {
			 return;
		}
		if ($Vnwufml5q3nphis->rasterize_vector_images AND ($Vim12f51jw5r > 0) AND ($Vvjxcwrp4tjq > 0)) {
			
			return $Vnwufml5q3nphis->Image($Vjluyuwumvof, $Vangwoo3ejfg, $Vgxufordoa4t, $Vim12f51jw5r, $Vvjxcwrp4tjq, 'EPS', $Vx3g4ytafo1aink, $Vb5kn1gbu0ep, true, 300, $Ve2ojby5keys, false, false, $Vgffhwoemo4c, false, false, $Vbleqcwoft4t);
		}
		if ($Vangwoo3ejfg === '') {
			$Vangwoo3ejfg = $Vnwufml5q3nphis->x;
		}
		if ($Vgxufordoa4t === '') {
			$Vgxufordoa4t = $Vnwufml5q3nphis->y;
		}
		
		list($Vangwoo3ejfg, $Vgxufordoa4t) = $Vnwufml5q3nphis->checkPageRegions($Vvjxcwrp4tjq, $Vangwoo3ejfg, $Vgxufordoa4t);
		$Vl0q4noiexi4 = $Vnwufml5q3nphis->k;
		if ($Vjluyuwumvof[0] === '@') { 
			$Vc0aiseldrl3ata = substr($Vjluyuwumvof, 1);
		} else { 
			$Vc0aiseldrl3ata = TCPDF_STATIC::fileGetContents($Vjluyuwumvof);
		}
		if ($Vc0aiseldrl3ata === FALSE) {
			$Vnwufml5q3nphis->Error('EPS file not found: '.$Vjluyuwumvof);
		}
		$V14ltds3prprgs = array();
		
		preg_match("/%%Creator:([^\r\n]+)/", $Vc0aiseldrl3ata, $V14ltds3prprgs); # find Creator
		if (count($V14ltds3prprgs) > 1) {
			$Vz0hmukhwa4zersion_str = trim($V14ltds3prprgs[1]); # e.g. "Adobe Illustrator(R) 8.0"
			if (strpos($Vz0hmukhwa4zersion_str, 'Adobe Illustrator') !== false) {
				$Vz0hmukhwa4zersexp = explode(' ', $Vz0hmukhwa4zersion_str);
				$Vz0hmukhwa4zersion = (float)array_pop($Vz0hmukhwa4zersexp);
				if ($Vz0hmukhwa4zersion >= 9) {
					$Vnwufml5q3nphis->Error('This version of Adobe Illustrator file is not supported: '.$Vjluyuwumvof);
				}
			}
		}
		
		$Vvt20qqut4butart = strpos($Vc0aiseldrl3ata, '%!PS-Adobe');
		if ($Vvt20qqut4butart > 0) {
			$Vc0aiseldrl3ata = substr($Vc0aiseldrl3ata, $Vvt20qqut4butart);
		}
		
		preg_match("/%%BoundingBox:([^\r\n]+)/", $Vc0aiseldrl3ata, $V14ltds3prprgs);
		if (count($V14ltds3prprgs) > 1) {
			list($Vangwoo3ejfg1, $Vgxufordoa4t1, $Vangwoo3ejfg2, $Vgxufordoa4t2) = explode(' ', trim($V14ltds3prprgs[1]));
		} else {
			$Vnwufml5q3nphis->Error('No BoundingBox found in EPS/AI file: '.$Vjluyuwumvof);
		}
		$Vvt20qqut4butart = strpos($Vc0aiseldrl3ata, '%%EndSetup');
		if ($Vvt20qqut4butart === false) {
			$Vvt20qqut4butart = strpos($Vc0aiseldrl3ata, '%%EndProlog');
		}
		if ($Vvt20qqut4butart === false) {
			$Vvt20qqut4butart = strpos($Vc0aiseldrl3ata, '%%BoundingBox');
		}
		$Vc0aiseldrl3ata = substr($Vc0aiseldrl3ata, $Vvt20qqut4butart);
		$Vs0htpwzsrccnd = strpos($Vc0aiseldrl3ata, '%%PageTrailer');
		if ($Vs0htpwzsrccnd===false) {
			$Vs0htpwzsrccnd = strpos($Vc0aiseldrl3ata, 'showpage');
		}
		if ($Vs0htpwzsrccnd) {
			$Vc0aiseldrl3ata = substr($Vc0aiseldrl3ata, 0, $Vs0htpwzsrccnd);
		}
		
		if (($Vim12f51jw5r <= 0) AND ($Vvjxcwrp4tjq <= 0)) {
			$Vim12f51jw5r = ($Vangwoo3ejfg2 - $Vangwoo3ejfg1) / $Vl0q4noiexi4;
			$Vvjxcwrp4tjq = ($Vgxufordoa4t2 - $Vgxufordoa4t1) / $Vl0q4noiexi4;
		} elseif ($Vim12f51jw5r <= 0) {
			$Vim12f51jw5r = ($Vangwoo3ejfg2-$Vangwoo3ejfg1) / $Vl0q4noiexi4 * ($Vvjxcwrp4tjq / (($Vgxufordoa4t2 - $Vgxufordoa4t1) / $Vl0q4noiexi4));
		} elseif ($Vvjxcwrp4tjq <= 0) {
			$Vvjxcwrp4tjq = ($Vgxufordoa4t2 - $Vgxufordoa4t1) / $Vl0q4noiexi4 * ($Vim12f51jw5r / (($Vangwoo3ejfg2 - $Vangwoo3ejfg1) / $Vl0q4noiexi4));
		}
		
		list($Vim12f51jw5r, $Vvjxcwrp4tjq, $Vangwoo3ejfg, $Vgxufordoa4t) = $Vnwufml5q3nphis->fitBlock($Vim12f51jw5r, $Vvjxcwrp4tjq, $Vangwoo3ejfg, $Vgxufordoa4t, $Vbleqcwoft4t);
		if ($Vnwufml5q3nphis->rasterize_vector_images) {
			
			return $Vnwufml5q3nphis->Image($Vjluyuwumvof, $Vangwoo3ejfg, $Vgxufordoa4t, $Vim12f51jw5r, $Vvjxcwrp4tjq, 'EPS', $Vx3g4ytafo1aink, $Vb5kn1gbu0ep, true, 300, $Ve2ojby5keys, false, false, $Vgffhwoemo4c, false, false, $Vbleqcwoft4t);
		}
		
		$Vhhwkh3jvswq_x = $Vim12f51jw5r / (($Vangwoo3ejfg2 - $Vangwoo3ejfg1) / $Vl0q4noiexi4);
		$Vhhwkh3jvswq_y = $Vvjxcwrp4tjq / (($Vgxufordoa4t2 - $Vgxufordoa4t1) / $Vl0q4noiexi4);
		
		$Vnwufml5q3nphis->img_rb_y = $Vgxufordoa4t + $Vvjxcwrp4tjq;
		
		if ($Vnwufml5q3nphis->rtl) {
			if ($Ve2ojby5keys == 'L') {
				$Vangwoo3ejfgimg = $Vnwufml5q3nphis->lMargin;
			} elseif ($Ve2ojby5keys == 'C') {
				$Vangwoo3ejfgimg = ($Vnwufml5q3nphis->w + $Vnwufml5q3nphis->lMargin - $Vnwufml5q3nphis->rMargin - $Vim12f51jw5r) / 2;
			} elseif ($Ve2ojby5keys == 'R') {
				$Vangwoo3ejfgimg = $Vnwufml5q3nphis->w - $Vnwufml5q3nphis->rMargin - $Vim12f51jw5r;
			} else {
				$Vangwoo3ejfgimg = $Vangwoo3ejfg - $Vim12f51jw5r;
			}
			$Vnwufml5q3nphis->img_rb_x = $Vangwoo3ejfgimg;
		} else {
			if ($Ve2ojby5keys == 'L') {
				$Vangwoo3ejfgimg = $Vnwufml5q3nphis->lMargin;
			} elseif ($Ve2ojby5keys == 'C') {
				$Vangwoo3ejfgimg = ($Vnwufml5q3nphis->w + $Vnwufml5q3nphis->lMargin - $Vnwufml5q3nphis->rMargin - $Vim12f51jw5r) / 2;
			} elseif ($Ve2ojby5keys == 'R') {
				$Vangwoo3ejfgimg = $Vnwufml5q3nphis->w - $Vnwufml5q3nphis->rMargin - $Vim12f51jw5r;
			} else {
				$Vangwoo3ejfgimg = $Vangwoo3ejfg;
			}
			$Vnwufml5q3nphis->img_rb_x = $Vangwoo3ejfgimg + $Vim12f51jw5r;
		}
		if ($Vppw1slbj4ovseBoundingBox) {
			$Vvpx14gmiarn = $Vangwoo3ejfgimg * $Vl0q4noiexi4 - $Vangwoo3ejfg1;
			$Vc0aiseldrl3y = $Vgxufordoa4t * $Vl0q4noiexi4 - $Vgxufordoa4t1;
		} else {
			$Vvpx14gmiarn = $Vangwoo3ejfgimg * $Vl0q4noiexi4;
			$Vc0aiseldrl3y = $Vgxufordoa4t * $Vl0q4noiexi4;
		}
		
		$Vnwufml5q3nphis->_out('q'.$Vnwufml5q3nphis->epsmarker);
		
		$Vnwufml5q3nphis->_out(sprintf('%F %F %F %F %F %F cm', 1, 0, 0, 1, $Vvpx14gmiarn, $Vc0aiseldrl3y + ($Vnwufml5q3nphis->hPt - (2 * $Vgxufordoa4t * $Vl0q4noiexi4) - ($Vgxufordoa4t2 - $Vgxufordoa4t1))));
		
		if (isset($Vhhwkh3jvswq_x)) {
			$Vnwufml5q3nphis->_out(sprintf('%F %F %F %F %F %F cm', $Vhhwkh3jvswq_x, 0, 0, $Vhhwkh3jvswq_y, $Vangwoo3ejfg1 * (1 - $Vhhwkh3jvswq_x), $Vgxufordoa4t2 * (1 - $Vhhwkh3jvswq_y)));
		}
		
		$Vx3g4ytafo1aines = preg_split('/[\r\n]+/si', $Vc0aiseldrl3ata, -1, PREG_SPLIT_NO_EMPTY);
		$Vppw1slbj4ov=0;
		$Vwcmlurixvzgnt = count($Vx3g4ytafo1aines);
		for ($V55vc4mewy5w=0; $V55vc4mewy5w < $Vwcmlurixvzgnt; ++$V55vc4mewy5w) {
			$Vx3g4ytafo1aine = $Vx3g4ytafo1aines[$V55vc4mewy5w];
			if (($Vx3g4ytafo1aine == '') OR ($Vx3g4ytafo1aine[0] == '%')) {
				continue;
			}
			$Vx3g4ytafo1aen = strlen($Vx3g4ytafo1aine);
			
			$Vwcmlurixvzgolor_name = '';
			if (strcasecmp('x', substr(trim($Vx3g4ytafo1aine), -1)) == 0) {
				if (preg_match('/\([^\)]*\)/', $Vx3g4ytafo1aine, $Vetludueqmbtatches) > 0) {
					
					$Vwcmlurixvzgolor_name = $Vetludueqmbtatches[0];
					
					$Vx3g4ytafo1aine = str_replace(' '.$Vwcmlurixvzgolor_name, '', $Vx3g4ytafo1aine);
					
					$Vwcmlurixvzgolor_name = substr($Vwcmlurixvzgolor_name, 1, -1);
				}
			}
			$Vwcmlurixvzghunks = explode(' ', $Vx3g4ytafo1aine);
			$Vwcmlurixvzgmd = trim(array_pop($Vwcmlurixvzghunks));
			
			if (($Vwcmlurixvzgmd == 'Xa') OR ($Vwcmlurixvzgmd == 'XA')) {
				$Vpq3acakq35c = array_pop($Vwcmlurixvzghunks);
				$Vqdeou2vhybv = array_pop($Vwcmlurixvzghunks);
				$Vfhkt4vbeual = array_pop($Vwcmlurixvzghunks);
				$Vnwufml5q3nphis->_out(''.$Vfhkt4vbeual.' '.$Vqdeou2vhybv.' '.$Vpq3acakq35c.' '.($Vwcmlurixvzgmd=='Xa'?'rg':'RG')); 
				continue;
			}
			$Vvt20qqut4bukip = false;
			if ($Vxb0ra0fqzn2ixoutvals) {
				
				switch ($Vwcmlurixvzgmd) {
					case 'm':
					case 'l':
					case 'L': {
						
						foreach ($Vwcmlurixvzghunks as $Vl0q4noiexi4ey => $Vxt4wx3pvtez) {
							if ((($Vl0q4noiexi4ey % 2) == 0) AND (($Vxt4wx3pvtez < $Vangwoo3ejfg1) OR ($Vxt4wx3pvtez > $Vangwoo3ejfg2))) {
								$Vvt20qqut4bukip = true;
							} elseif ((($Vl0q4noiexi4ey % 2) != 0) AND (($Vxt4wx3pvtez < $Vgxufordoa4t1) OR ($Vxt4wx3pvtez > $Vgxufordoa4t2))) {
								$Vvt20qqut4bukip = true;
							}
						}
					}
				}
			}
			switch ($Vwcmlurixvzgmd) {
				case 'm':
				case 'l':
				case 'v':
				case 'y':
				case 'c':
				case 'k':
				case 'K':
				case 'g':
				case 'G':
				case 's':
				case 'S':
				case 'J':
				case 'j':
				case 'w':
				case 'M':
				case 'd':
				case 'n': {
					if ($Vvt20qqut4bukip) {
						break;
					}
					$Vnwufml5q3nphis->_out($Vx3g4ytafo1aine);
					break;
				}
				case 'x': {
					if (empty($Vwcmlurixvzgolor_name)) {
						
						list($Vwcmlurixvzgol_c, $Vwcmlurixvzgol_m, $Vwcmlurixvzgol_y, $Vwcmlurixvzgol_k) = $Vwcmlurixvzghunks;
						$Vnwufml5q3nphis->_out(''.$Vwcmlurixvzgol_c.' '.$Vwcmlurixvzgol_m.' '.$Vwcmlurixvzgol_y.' '.$Vwcmlurixvzgol_k.' k');
					} else {
						
						list($Vwcmlurixvzgol_c, $Vwcmlurixvzgol_m, $Vwcmlurixvzgol_y, $Vwcmlurixvzgol_k, $Vwcmlurixvzgol_t) = $Vwcmlurixvzghunks;
						$Vnwufml5q3nphis->AddSpotColor($Vwcmlurixvzgolor_name, ($Vwcmlurixvzgol_c * 100), ($Vwcmlurixvzgol_m * 100), ($Vwcmlurixvzgol_y * 100), ($Vwcmlurixvzgol_k * 100));
						$Vwcmlurixvzgolor_cmd = sprintf('/CS%d cs %F scn', $Vnwufml5q3nphis->spot_colors[$Vwcmlurixvzgolor_name]['i'], (1 - $Vwcmlurixvzgol_t));
						$Vnwufml5q3nphis->_out($Vwcmlurixvzgolor_cmd);
					}
					break;
				}
				case 'X': { 
					if (empty($Vwcmlurixvzgolor_name)) {
						
						list($Vwcmlurixvzgol_c, $Vwcmlurixvzgol_m, $Vwcmlurixvzgol_y, $Vwcmlurixvzgol_k) = $Vwcmlurixvzghunks;
						$Vnwufml5q3nphis->_out(''.$Vwcmlurixvzgol_c.' '.$Vwcmlurixvzgol_m.' '.$Vwcmlurixvzgol_y.' '.$Vwcmlurixvzgol_k.' K');
					} else {
						
						list($Vwcmlurixvzgol_c, $Vwcmlurixvzgol_m, $Vwcmlurixvzgol_y, $Vwcmlurixvzgol_k, $Vwcmlurixvzgol_t) = $Vwcmlurixvzghunks;
						$Vnwufml5q3nphis->AddSpotColor($Vwcmlurixvzgolor_name, ($Vwcmlurixvzgol_c * 100), ($Vwcmlurixvzgol_m * 100), ($Vwcmlurixvzgol_y * 100), ($Vwcmlurixvzgol_k * 100));
						$Vwcmlurixvzgolor_cmd = sprintf('/CS%d CS %F SCN', $Vnwufml5q3nphis->spot_colors[$Vwcmlurixvzgolor_name]['i'], (1 - $Vwcmlurixvzgol_t));
						$Vnwufml5q3nphis->_out($Vwcmlurixvzgolor_cmd);
					}
					break;
				}
				case 'Y':
				case 'N':
				case 'V':
				case 'L':
				case 'C': {
					if ($Vvt20qqut4bukip) {
						break;
					}
					$Vx3g4ytafo1aine[($Vx3g4ytafo1aen - 1)] = strtolower($Vwcmlurixvzgmd);
					$Vnwufml5q3nphis->_out($Vx3g4ytafo1aine);
					break;
				}
				case 'b':
				case 'B': {
					$Vnwufml5q3nphis->_out($Vwcmlurixvzgmd . '*');
					break;
				}
				case 'f':
				case 'F': {
					if ($Vppw1slbj4ov > 0) {
						$V55vc4mewy5wsU = false;
						$Vetludueqmbtax = min(($V55vc4mewy5w + 5), $Vwcmlurixvzgnt);
						for ($Vuaufi3la1vg = ($V55vc4mewy5w + 1); $Vuaufi3la1vg < $Vetludueqmbtax; ++$Vuaufi3la1vg) {
							$V55vc4mewy5wsU = ($V55vc4mewy5wsU OR (($Vx3g4ytafo1aines[$Vuaufi3la1vg] == 'U') OR ($Vx3g4ytafo1aines[$Vuaufi3la1vg] == '*U')));
						}
						if ($V55vc4mewy5wsU) {
							$Vnwufml5q3nphis->_out('f*');
						}
					} else {
						$Vnwufml5q3nphis->_out('f*');
					}
					break;
				}
				case '*u': {
					++$Vppw1slbj4ov;
					break;
				}
				case '*U': {
					--$Vppw1slbj4ov;
					break;
				}
			}
		}
		
		$Vnwufml5q3nphis->_out($Vnwufml5q3nphis->epsmarker.'Q');
		if (!empty($Vgffhwoemo4c)) {
			$Vbhs0cmiogir = $Vnwufml5q3nphis->x;
			$Vsrhsnwkcuy3 = $Vnwufml5q3nphis->y;
			$Vnwufml5q3nphis->x = $Vangwoo3ejfgimg;
			if ($Vnwufml5q3nphis->rtl) {
				$Vnwufml5q3nphis->x += $Vim12f51jw5r;
			}
			$Vnwufml5q3nphis->y = $Vgxufordoa4t;
			$Vnwufml5q3nphis->Cell($Vim12f51jw5r, $Vvjxcwrp4tjq, '', $Vgffhwoemo4c, 0, '', 0, '', 0, true);
			$Vnwufml5q3nphis->x = $Vbhs0cmiogir;
			$Vnwufml5q3nphis->y = $Vsrhsnwkcuy3;
		}
		if ($Vx3g4ytafo1aink) {
			$Vnwufml5q3nphis->Link($Vangwoo3ejfgimg, $Vgxufordoa4t, $Vim12f51jw5r, $Vvjxcwrp4tjq, $Vx3g4ytafo1aink, 0);
		}
		
		switch($Vb5kn1gbu0ep) {
			case 'T':{
				$Vnwufml5q3nphis->y = $Vgxufordoa4t;
				$Vnwufml5q3nphis->x = $Vnwufml5q3nphis->img_rb_x;
				break;
			}
			case 'M':{
				$Vnwufml5q3nphis->y = $Vgxufordoa4t + round($Vvjxcwrp4tjq/2);
				$Vnwufml5q3nphis->x = $Vnwufml5q3nphis->img_rb_x;
				break;
			}
			case 'B':{
				$Vnwufml5q3nphis->y = $Vnwufml5q3nphis->img_rb_y;
				$Vnwufml5q3nphis->x = $Vnwufml5q3nphis->img_rb_x;
				break;
			}
			case 'N':{
				$Vnwufml5q3nphis->SetY($Vnwufml5q3nphis->img_rb_y);
				break;
			}
			default:{
				break;
			}
		}
		$Vnwufml5q3nphis->endlinex = $Vnwufml5q3nphis->img_rb_x;
	}

	
	public function setBarcode($Vhyx3um45rs1='') {
		$Vnwufml5q3nphis->barcode = $Vhyx3um45rs1;
	}

	
	public function getBarcode() {
		return $Vnwufml5q3nphis->barcode;
	}

	
	public function write1DBarcode($Vwcmlurixvzgode, $Vvmwm1jsklgc, $Vangwoo3ejfg='', $Vgxufordoa4t='', $Vim12f51jw5r='', $Vvjxcwrp4tjq='', $Vangwoo3ejfgres='', $Vovexk3mzujo='', $Vb5kn1gbu0ep='') {
		if (TCPDF_STATIC::empty_string(trim($Vwcmlurixvzgode))) {
			return;
		}
		require_once(dirname(__FILE__).'/tcpdf_barcodes_1d.php');
		
		$Vfbwtdiv4emm = $Vnwufml5q3nphis->getGraphicVars();
		
		$Votyidhr1bs1obj = new TCPDFBarcode($Vwcmlurixvzgode, $Vvmwm1jsklgc);
		$Vudz4oh4qikurrcode = $Votyidhr1bs1obj->getBarcodeArray();
		if (($Vudz4oh4qikurrcode === false) OR empty($Vudz4oh4qikurrcode) OR ($Vudz4oh4qikurrcode['maxw'] <= 0)) {
			$Vnwufml5q3nphis->Error('Error in 1D barcode string');
		}
		if ($Vudz4oh4qikurrcode['maxh'] <= 0) {
			$Vudz4oh4qikurrcode['maxh'] = 1;
		}
		
		if (!isset($Vovexk3mzujo['position'])) {
			$Vovexk3mzujo['position'] = '';
		} elseif ($Vovexk3mzujo['position'] == 'S') {
			
			$Vovexk3mzujo['position'] = '';
			$Vovexk3mzujo['stretch'] = true;
		}
		if (!isset($Vovexk3mzujo['fitwidth'])) {
			if (!isset($Vovexk3mzujo['stretch'])) {
				$Vovexk3mzujo['fitwidth'] = true;
			} else {
				$Vovexk3mzujo['fitwidth'] = false;
			}
		}
		if ($Vovexk3mzujo['fitwidth']) {
			
			$Vovexk3mzujo['stretch'] = false;
		}
		if (!isset($Vovexk3mzujo['stretch'])) {
			if (($Vim12f51jw5r === '') OR ($Vim12f51jw5r <= 0)) {
				$Vovexk3mzujo['stretch'] = false;
			} else {
				$Vovexk3mzujo['stretch'] = true;
			}
		}
		if (!isset($Vovexk3mzujo['fgcolor'])) {
			$Vovexk3mzujo['fgcolor'] = array(0,0,0); 
		}
		if (!isset($Vovexk3mzujo['bgcolor'])) {
			$Vovexk3mzujo['bgcolor'] = false; 
		}
		if (!isset($Vovexk3mzujo['border'])) {
			$Vovexk3mzujo['border'] = false;
		}
		$Vshfhqyg5vyrize = 0;
		if (!isset($Vovexk3mzujo['text'])) {
			$Vovexk3mzujo['text'] = false;
		}
		if ($Vovexk3mzujo['text'] AND isset($Vovexk3mzujo['font'])) {
			if (isset($Vovexk3mzujo['fontsize'])) {
				$Vshfhqyg5vyrize = $Vovexk3mzujo['fontsize'];
			}
			$Vnwufml5q3nphis->SetFont($Vovexk3mzujo['font'], '', $Vshfhqyg5vyrize);
		}
		if (!isset($Vovexk3mzujo['stretchtext'])) {
			$Vovexk3mzujo['stretchtext'] = 4;
		}
		if ($Vangwoo3ejfg === '') {
			$Vangwoo3ejfg = $Vnwufml5q3nphis->x;
		}
		if ($Vgxufordoa4t === '') {
			$Vgxufordoa4t = $Vnwufml5q3nphis->y;
		}
		
		list($Vangwoo3ejfg, $Vgxufordoa4t) = $Vnwufml5q3nphis->checkPageRegions($Vvjxcwrp4tjq, $Vangwoo3ejfg, $Vgxufordoa4t);
		if (($Vim12f51jw5r === '') OR ($Vim12f51jw5r <= 0)) {
			if ($Vnwufml5q3nphis->rtl) {
				$Vim12f51jw5r = $Vangwoo3ejfg - $Vnwufml5q3nphis->lMargin;
			} else {
				$Vim12f51jw5r = $Vnwufml5q3nphis->w - $Vnwufml5q3nphis->rMargin - $Vangwoo3ejfg;
			}
		}
		
		if (!isset($Vovexk3mzujo['padding'])) {
			$Vtbdcorpf2kc = 0;
		} elseif ($Vovexk3mzujo['padding'] === 'auto') {
			$Vtbdcorpf2kc = 10 * ($Vim12f51jw5r / ($Vudz4oh4qikurrcode['maxw'] + 20));
		} else {
			$Vtbdcorpf2kc = floatval($Vovexk3mzujo['padding']);
		}
		
		if (!isset($Vovexk3mzujo['hpadding'])) {
			$Vvjxcwrp4tjqpadding = $Vtbdcorpf2kc;
		} elseif ($Vovexk3mzujo['hpadding'] === 'auto') {
			$Vvjxcwrp4tjqpadding = 10 * ($Vim12f51jw5r / ($Vudz4oh4qikurrcode['maxw'] + 20));
		} else {
			$Vvjxcwrp4tjqpadding = floatval($Vovexk3mzujo['hpadding']);
		}
		
		if (!isset($Vovexk3mzujo['vpadding'])) {
			$Vz0hmukhwa4zpadding = $Vtbdcorpf2kc;
		} elseif ($Vovexk3mzujo['vpadding'] === 'auto') {
			$Vz0hmukhwa4zpadding = ($Vvjxcwrp4tjqpadding / 2);
		} else {
			$Vz0hmukhwa4zpadding = floatval($Vovexk3mzujo['vpadding']);
		}
		
		$Vetludueqmbtax_xres = ($Vim12f51jw5r - (2 * $Vvjxcwrp4tjqpadding)) / $Vudz4oh4qikurrcode['maxw'];
		if ($Vovexk3mzujo['stretch']) {
			$Vangwoo3ejfgres = $Vetludueqmbtax_xres;
		} else {
			if (TCPDF_STATIC::empty_string($Vangwoo3ejfgres)) {
				$Vangwoo3ejfgres = (0.141 * $Vnwufml5q3nphis->k); 
			}
			if ($Vangwoo3ejfgres > $Vetludueqmbtax_xres) {
				
				$Vangwoo3ejfgres = $Vetludueqmbtax_xres;
			}
			if ((isset($Vovexk3mzujo['padding']) AND ($Vovexk3mzujo['padding'] === 'auto'))
				OR (isset($Vovexk3mzujo['hpadding']) AND ($Vovexk3mzujo['hpadding'] === 'auto'))) {
				$Vvjxcwrp4tjqpadding = 10 * $Vangwoo3ejfgres;
				if (isset($Vovexk3mzujo['vpadding']) AND ($Vovexk3mzujo['vpadding'] === 'auto')) {
					$Vz0hmukhwa4zpadding = ($Vvjxcwrp4tjqpadding / 2);
				}
			}
		}
		if ($Vovexk3mzujo['fitwidth']) {
			$Vim12f51jw5rold = $Vim12f51jw5r;
			$Vim12f51jw5r = (($Vudz4oh4qikurrcode['maxw'] * $Vangwoo3ejfgres) + (2 * $Vvjxcwrp4tjqpadding));
			if (isset($Vovexk3mzujo['cellfitalign'])) {
				switch ($Vovexk3mzujo['cellfitalign']) {
					case 'L': {
						if ($Vnwufml5q3nphis->rtl) {
							$Vangwoo3ejfg -= ($Vim12f51jw5rold - $Vim12f51jw5r);
						}
						break;
					}
					case 'R': {
						if (!$Vnwufml5q3nphis->rtl) {
							$Vangwoo3ejfg += ($Vim12f51jw5rold - $Vim12f51jw5r);
						}
						break;
					}
					case 'C': {
						if ($Vnwufml5q3nphis->rtl) {
							$Vangwoo3ejfg -= (($Vim12f51jw5rold - $Vim12f51jw5r) / 2);
						} else {
							$Vangwoo3ejfg += (($Vim12f51jw5rold - $Vim12f51jw5r) / 2);
						}
						break;
					}
					default : {
						break;
					}
				}
			}
		}
		$Vdvjst2lzhef_height = $Vnwufml5q3nphis->getCellHeight($Vshfhqyg5vyrize / $Vnwufml5q3nphis->k);
		
		if (($Vvjxcwrp4tjq === '') OR ($Vvjxcwrp4tjq <= 0)) {
			
			$Vvjxcwrp4tjq = (($Vudz4oh4qikurrcode['maxw'] * $Vangwoo3ejfgres) / 3) + (2 * $Vz0hmukhwa4zpadding) + $Vdvjst2lzhef_height;
		}
		$Vpq3acakq35carh = $Vvjxcwrp4tjq - $Vdvjst2lzhef_height - (2 * $Vz0hmukhwa4zpadding);
		if ($Vpq3acakq35carh <=0) {
			
			if ($Vdvjst2lzhef_height > $Vvjxcwrp4tjq) {
				$Vshfhqyg5vyrize = (($Vvjxcwrp4tjq * $Vnwufml5q3nphis->k) / (4 * $Vnwufml5q3nphis->cell_height_ratio));
				$Vdvjst2lzhef_height = $Vnwufml5q3nphis->getCellHeight($Vshfhqyg5vyrize / $Vnwufml5q3nphis->k);
				$Vnwufml5q3nphis->SetFont($Vovexk3mzujo['font'], '', $Vshfhqyg5vyrize);
			}
			if ($Vz0hmukhwa4zpadding > 0) {
				$Vz0hmukhwa4zpadding = (($Vvjxcwrp4tjq - $Vdvjst2lzhef_height) / 4);
			}
			$Vpq3acakq35carh = $Vvjxcwrp4tjq - $Vdvjst2lzhef_height - (2 * $Vz0hmukhwa4zpadding);
		}
		
		list($Vim12f51jw5r, $Vvjxcwrp4tjq, $Vangwoo3ejfg, $Vgxufordoa4t) = $Vnwufml5q3nphis->fitBlock($Vim12f51jw5r, $Vvjxcwrp4tjq, $Vangwoo3ejfg, $Vgxufordoa4t, false);
		
		$Vnwufml5q3nphis->img_rb_y = $Vgxufordoa4t + $Vvjxcwrp4tjq;
		
		if ($Vnwufml5q3nphis->rtl) {
			if ($Vovexk3mzujo['position'] == 'L') {
				$Vangwoo3ejfgpos = $Vnwufml5q3nphis->lMargin;
			} elseif ($Vovexk3mzujo['position'] == 'C') {
				$Vangwoo3ejfgpos = ($Vnwufml5q3nphis->w + $Vnwufml5q3nphis->lMargin - $Vnwufml5q3nphis->rMargin - $Vim12f51jw5r) / 2;
			} elseif ($Vovexk3mzujo['position'] == 'R') {
				$Vangwoo3ejfgpos = $Vnwufml5q3nphis->w - $Vnwufml5q3nphis->rMargin - $Vim12f51jw5r;
			} else {
				$Vangwoo3ejfgpos = $Vangwoo3ejfg - $Vim12f51jw5r;
			}
			$Vnwufml5q3nphis->img_rb_x = $Vangwoo3ejfgpos;
		} else {
			if ($Vovexk3mzujo['position'] == 'L') {
				$Vangwoo3ejfgpos = $Vnwufml5q3nphis->lMargin;
			} elseif ($Vovexk3mzujo['position'] == 'C') {
				$Vangwoo3ejfgpos = ($Vnwufml5q3nphis->w + $Vnwufml5q3nphis->lMargin - $Vnwufml5q3nphis->rMargin - $Vim12f51jw5r) / 2;
			} elseif ($Vovexk3mzujo['position'] == 'R') {
				$Vangwoo3ejfgpos = $Vnwufml5q3nphis->w - $Vnwufml5q3nphis->rMargin - $Vim12f51jw5r;
			} else {
				$Vangwoo3ejfgpos = $Vangwoo3ejfg;
			}
			$Vnwufml5q3nphis->img_rb_x = $Vangwoo3ejfgpos + $Vim12f51jw5r;
		}
		$Vangwoo3ejfgpos_rect = $Vangwoo3ejfgpos;
		if (!isset($Vovexk3mzujo['align'])) {
			$Vovexk3mzujo['align'] = 'C';
		}
		switch ($Vovexk3mzujo['align']) {
			case 'L': {
				$Vangwoo3ejfgpos = $Vangwoo3ejfgpos_rect + $Vvjxcwrp4tjqpadding;
				break;
			}
			case 'R': {
				$Vangwoo3ejfgpos = $Vangwoo3ejfgpos_rect + ($Vim12f51jw5r - ($Vudz4oh4qikurrcode['maxw'] * $Vangwoo3ejfgres)) - $Vvjxcwrp4tjqpadding;
				break;
			}
			case 'C':
			default : {
				$Vangwoo3ejfgpos = $Vangwoo3ejfgpos_rect + (($Vim12f51jw5r - ($Vudz4oh4qikurrcode['maxw'] * $Vangwoo3ejfgres)) / 2);
				break;
			}
		}
		$Vangwoo3ejfgpos_text = $Vangwoo3ejfgpos;
		
		$Vnwufml5q3npempRTL = $Vnwufml5q3nphis->rtl;
		$Vnwufml5q3nphis->rtl = false;
		
		if ($Vovexk3mzujo['bgcolor']) {
			$Vnwufml5q3nphis->Rect($Vangwoo3ejfgpos_rect, $Vgxufordoa4t, $Vim12f51jw5r, $Vvjxcwrp4tjq, $Vovexk3mzujo['border'] ? 'DF' : 'F', '', $Vovexk3mzujo['bgcolor']);
		} elseif ($Vovexk3mzujo['border']) {
			$Vnwufml5q3nphis->Rect($Vangwoo3ejfgpos_rect, $Vgxufordoa4t, $Vim12f51jw5r, $Vvjxcwrp4tjq, 'D');
		}
		
		$Vnwufml5q3nphis->SetDrawColorArray($Vovexk3mzujo['fgcolor']);
		$Vnwufml5q3nphis->SetTextColorArray($Vovexk3mzujo['fgcolor']);
		
		foreach ($Vudz4oh4qikurrcode['bcode'] as $Vl0q4noiexi4 => $Vz0hmukhwa4z) {
			$Vpq3acakq35cw = ($Vz0hmukhwa4z['w'] * $Vangwoo3ejfgres);
			if ($Vz0hmukhwa4z['t']) {
				
				$Vgxufordoa4tpos = $Vgxufordoa4t + $Vz0hmukhwa4zpadding + ($Vz0hmukhwa4z['p'] * $Vpq3acakq35carh / $Vudz4oh4qikurrcode['maxh']);
				$Vnwufml5q3nphis->Rect($Vangwoo3ejfgpos, $Vgxufordoa4tpos, $Vpq3acakq35cw, ($Vz0hmukhwa4z['h'] * $Vpq3acakq35carh / $Vudz4oh4qikurrcode['maxh']), 'F', array(), $Vovexk3mzujo['fgcolor']);
			}
			$Vangwoo3ejfgpos += $Vpq3acakq35cw;
		}
		
		if ($Vovexk3mzujo['text']) {
			if (isset($Vovexk3mzujo['label']) AND !TCPDF_STATIC::empty_string($Vovexk3mzujo['label'])) {
				$Vx3g4ytafo1aabel = $Vovexk3mzujo['label'];
			} else {
				$Vx3g4ytafo1aabel = $Vwcmlurixvzgode;
			}
			$Vg1d0vbcooi4width = ($Vudz4oh4qikurrcode['maxw'] * $Vangwoo3ejfgres);
			if ($Vnwufml5q3nphis->GetStringWidth($Vx3g4ytafo1aabel) > $Vg1d0vbcooi4width) {
				$Vovexk3mzujo['stretchtext'] = 2;
			}
			
			$Vnwufml5q3nphis->x = $Vangwoo3ejfgpos_text;
			$Vnwufml5q3nphis->y = $Vgxufordoa4t + $Vz0hmukhwa4zpadding + $Vpq3acakq35carh;
			$Vwcmlurixvzgellpadding = $Vnwufml5q3nphis->cell_padding;
			$Vnwufml5q3nphis->SetCellPadding(0);
			$Vnwufml5q3nphis->Cell($Vg1d0vbcooi4width, '', $Vx3g4ytafo1aabel, 0, 0, 'C', false, '', $Vovexk3mzujo['stretchtext'], false, 'T', 'T');
			$Vnwufml5q3nphis->cell_padding = $Vwcmlurixvzgellpadding;
		}
		
		$Vnwufml5q3nphis->rtl = $Vnwufml5q3npempRTL;
		
		$Vnwufml5q3nphis->setGraphicVars($Vfbwtdiv4emm);
		
		switch($Vb5kn1gbu0ep) {
			case 'T':{
				$Vnwufml5q3nphis->y = $Vgxufordoa4t;
				$Vnwufml5q3nphis->x = $Vnwufml5q3nphis->img_rb_x;
				break;
			}
			case 'M':{
				$Vnwufml5q3nphis->y = $Vgxufordoa4t + round($Vvjxcwrp4tjq / 2);
				$Vnwufml5q3nphis->x = $Vnwufml5q3nphis->img_rb_x;
				break;
			}
			case 'B':{
				$Vnwufml5q3nphis->y = $Vnwufml5q3nphis->img_rb_y;
				$Vnwufml5q3nphis->x = $Vnwufml5q3nphis->img_rb_x;
				break;
			}
			case 'N':{
				$Vnwufml5q3nphis->SetY($Vnwufml5q3nphis->img_rb_y);
				break;
			}
			default:{
				break;
			}
		}
		$Vnwufml5q3nphis->endlinex = $Vnwufml5q3nphis->img_rb_x;
	}

	
	public function write2DBarcode($Vwcmlurixvzgode, $Vvmwm1jsklgc, $Vangwoo3ejfg='', $Vgxufordoa4t='', $Vim12f51jw5r='', $Vvjxcwrp4tjq='', $Vovexk3mzujo='', $Vb5kn1gbu0ep='', $Vc0aiseldrl3istort=false) {
		if (TCPDF_STATIC::empty_string(trim($Vwcmlurixvzgode))) {
			return;
		}
		require_once(dirname(__FILE__).'/tcpdf_barcodes_2d.php');
		
		$Vfbwtdiv4emm = $Vnwufml5q3nphis->getGraphicVars();
		
		$Votyidhr1bs1obj = new TCPDF2DBarcode($Vwcmlurixvzgode, $Vvmwm1jsklgc);
		$Vudz4oh4qikurrcode = $Votyidhr1bs1obj->getBarcodeArray();
		if (($Vudz4oh4qikurrcode === false) OR empty($Vudz4oh4qikurrcode) OR !isset($Vudz4oh4qikurrcode['num_rows']) OR ($Vudz4oh4qikurrcode['num_rows'] == 0) OR !isset($Vudz4oh4qikurrcode['num_cols']) OR ($Vudz4oh4qikurrcode['num_cols'] == 0)) {
			$Vnwufml5q3nphis->Error('Error in 2D barcode string');
		}
		
		if (!isset($Vovexk3mzujo['position'])) {
			$Vovexk3mzujo['position'] = '';
		}
		if (!isset($Vovexk3mzujo['fgcolor'])) {
			$Vovexk3mzujo['fgcolor'] = array(0,0,0); 
		}
		if (!isset($Vovexk3mzujo['bgcolor'])) {
			$Vovexk3mzujo['bgcolor'] = false; 
		}
		if (!isset($Vovexk3mzujo['border'])) {
			$Vovexk3mzujo['border'] = false;
		}
		
		if (!isset($Vovexk3mzujo['padding'])) {
			$Vovexk3mzujo['padding'] = 0;
		} elseif ($Vovexk3mzujo['padding'] === 'auto') {
			$Vovexk3mzujo['padding'] = 4;
		}
		if (!isset($Vovexk3mzujo['hpadding'])) {
			$Vovexk3mzujo['hpadding'] = $Vovexk3mzujo['padding'];
		} elseif ($Vovexk3mzujo['hpadding'] === 'auto') {
			$Vovexk3mzujo['hpadding'] = 4;
		}
		if (!isset($Vovexk3mzujo['vpadding'])) {
			$Vovexk3mzujo['vpadding'] = $Vovexk3mzujo['padding'];
		} elseif ($Vovexk3mzujo['vpadding'] === 'auto') {
			$Vovexk3mzujo['vpadding'] = 4;
		}
		$Vvjxcwrp4tjqpad = (2 * $Vovexk3mzujo['hpadding']);
		$Vz0hmukhwa4zpad = (2 * $Vovexk3mzujo['vpadding']);
		
		if (!isset($Vovexk3mzujo['module_width'])) {
			$Vovexk3mzujo['module_width'] = 1; 
		}
		if (!isset($Vovexk3mzujo['module_height'])) {
			$Vovexk3mzujo['module_height'] = 1; 
		}
		if ($Vangwoo3ejfg === '') {
			$Vangwoo3ejfg = $Vnwufml5q3nphis->x;
		}
		if ($Vgxufordoa4t === '') {
			$Vgxufordoa4t = $Vnwufml5q3nphis->y;
		}
		
		list($Vangwoo3ejfg, $Vgxufordoa4t) = $Vnwufml5q3nphis->checkPageRegions($Vvjxcwrp4tjq, $Vangwoo3ejfg, $Vgxufordoa4t);
		
		$Vfhkt4vbeualows = $Vudz4oh4qikurrcode['num_rows'];
		$Vwcmlurixvzgols = $Vudz4oh4qikurrcode['num_cols'];
		if (($Vfhkt4vbeualows <= 0) || ($Vwcmlurixvzgols <= 0)){
			$Vnwufml5q3nphis->Error('Error in 2D barcode string');
		}
		
		$Vetludueqmbtw = $Vovexk3mzujo['module_width'];
		$Vetludueqmbth = $Vovexk3mzujo['module_height'];
		if (($Vetludueqmbtw <= 0) OR ($Vetludueqmbth <= 0)) {
			$Vnwufml5q3nphis->Error('Error in 2D barcode string');
		}
		
		if ($Vnwufml5q3nphis->rtl) {
			$Vetludueqmbtaxw = $Vangwoo3ejfg - $Vnwufml5q3nphis->lMargin;
		} else {
			$Vetludueqmbtaxw = $Vnwufml5q3nphis->w - $Vnwufml5q3nphis->rMargin - $Vangwoo3ejfg;
		}
		$Vetludueqmbtaxh = ($Vnwufml5q3nphis->h - $Vnwufml5q3nphis->tMargin - $Vnwufml5q3nphis->bMargin);
		$V5ihv3uo3w5yHW = ((($Vfhkt4vbeualows * $Vetludueqmbth) + $Vvjxcwrp4tjqpad) / (($Vwcmlurixvzgols * $Vetludueqmbtw) + $Vz0hmukhwa4zpad));
		$V5ihv3uo3w5yWH = ((($Vwcmlurixvzgols * $Vetludueqmbtw) + $Vz0hmukhwa4zpad) / (($Vfhkt4vbeualows * $Vetludueqmbth) + $Vvjxcwrp4tjqpad));
		if (!$Vc0aiseldrl3istort) {
			if (($Vetludueqmbtaxw * $V5ihv3uo3w5yHW) > $Vetludueqmbtaxh) {
				$Vetludueqmbtaxw = $Vetludueqmbtaxh * $V5ihv3uo3w5yWH;
			}
			if (($Vetludueqmbtaxh * $V5ihv3uo3w5yWH) > $Vetludueqmbtaxw) {
				$Vetludueqmbtaxh = $Vetludueqmbtaxw * $V5ihv3uo3w5yHW;
			}
		}
		
		if ($Vim12f51jw5r > $Vetludueqmbtaxw) {
			$Vim12f51jw5r = $Vetludueqmbtaxw;
		}
		if ($Vvjxcwrp4tjq > $Vetludueqmbtaxh) {
			$Vvjxcwrp4tjq = $Vetludueqmbtaxh;
		}
		
		if ((($Vim12f51jw5r === '') OR ($Vim12f51jw5r <= 0)) AND (($Vvjxcwrp4tjq === '') OR ($Vvjxcwrp4tjq <= 0))) {
			$Vim12f51jw5r = ($Vwcmlurixvzgols + $Vvjxcwrp4tjqpad) * ($Vetludueqmbtw / $Vnwufml5q3nphis->k);
			$Vvjxcwrp4tjq = ($Vfhkt4vbeualows + $Vz0hmukhwa4zpad) * ($Vetludueqmbth / $Vnwufml5q3nphis->k);
		} elseif (($Vim12f51jw5r === '') OR ($Vim12f51jw5r <= 0)) {
			$Vim12f51jw5r = $Vvjxcwrp4tjq * $V5ihv3uo3w5yWH;
		} elseif (($Vvjxcwrp4tjq === '') OR ($Vvjxcwrp4tjq <= 0)) {
			$Vvjxcwrp4tjq = $Vim12f51jw5r * $V5ihv3uo3w5yHW;
		}
		
		$Vpq3acakq35cw = ($Vim12f51jw5r * $Vwcmlurixvzgols) / ($Vwcmlurixvzgols + $Vvjxcwrp4tjqpad);
		$Vpq3acakq35ch = ($Vvjxcwrp4tjq * $Vfhkt4vbeualows) / ($Vfhkt4vbeualows + $Vz0hmukhwa4zpad);
		
		$V5k0cete3fo0 = $Vpq3acakq35cw / $Vwcmlurixvzgols;
		$Vwcmlurixvzgh = $Vpq3acakq35ch / $Vfhkt4vbeualows;
		if (!$Vc0aiseldrl3istort) {
			if (($V5k0cete3fo0 / $Vwcmlurixvzgh) > ($Vetludueqmbtw / $Vetludueqmbth)) {
				
				$V5k0cete3fo0 = $Vwcmlurixvzgh * $Vetludueqmbtw / $Vetludueqmbth;
				$Vpq3acakq35cw = $V5k0cete3fo0 * $Vwcmlurixvzgols;
				$Vovexk3mzujo['hpadding'] = ($Vim12f51jw5r - $Vpq3acakq35cw) / (2 * $V5k0cete3fo0);
			} else {
				
				$Vwcmlurixvzgh = $V5k0cete3fo0 * $Vetludueqmbth / $Vetludueqmbtw;
				$Vpq3acakq35ch = $Vwcmlurixvzgh * $Vfhkt4vbeualows;
				$Vovexk3mzujo['vpadding'] = ($Vvjxcwrp4tjq - $Vpq3acakq35ch) / (2 * $Vwcmlurixvzgh);
			}
		}
		
		list($Vim12f51jw5r, $Vvjxcwrp4tjq, $Vangwoo3ejfg, $Vgxufordoa4t) = $Vnwufml5q3nphis->fitBlock($Vim12f51jw5r, $Vvjxcwrp4tjq, $Vangwoo3ejfg, $Vgxufordoa4t, false);
		
		$Vnwufml5q3nphis->img_rb_y = $Vgxufordoa4t + $Vvjxcwrp4tjq;
		
		if ($Vnwufml5q3nphis->rtl) {
			if ($Vovexk3mzujo['position'] == 'L') {
				$Vangwoo3ejfgpos = $Vnwufml5q3nphis->lMargin;
			} elseif ($Vovexk3mzujo['position'] == 'C') {
				$Vangwoo3ejfgpos = ($Vnwufml5q3nphis->w + $Vnwufml5q3nphis->lMargin - $Vnwufml5q3nphis->rMargin - $Vim12f51jw5r) / 2;
			} elseif ($Vovexk3mzujo['position'] == 'R') {
				$Vangwoo3ejfgpos = $Vnwufml5q3nphis->w - $Vnwufml5q3nphis->rMargin - $Vim12f51jw5r;
			} else {
				$Vangwoo3ejfgpos = $Vangwoo3ejfg - $Vim12f51jw5r;
			}
			$Vnwufml5q3nphis->img_rb_x = $Vangwoo3ejfgpos;
		} else {
			if ($Vovexk3mzujo['position'] == 'L') {
				$Vangwoo3ejfgpos = $Vnwufml5q3nphis->lMargin;
			} elseif ($Vovexk3mzujo['position'] == 'C') {
				$Vangwoo3ejfgpos = ($Vnwufml5q3nphis->w + $Vnwufml5q3nphis->lMargin - $Vnwufml5q3nphis->rMargin - $Vim12f51jw5r) / 2;
			} elseif ($Vovexk3mzujo['position'] == 'R') {
				$Vangwoo3ejfgpos = $Vnwufml5q3nphis->w - $Vnwufml5q3nphis->rMargin - $Vim12f51jw5r;
			} else {
				$Vangwoo3ejfgpos = $Vangwoo3ejfg;
			}
			$Vnwufml5q3nphis->img_rb_x = $Vangwoo3ejfgpos + $Vim12f51jw5r;
		}
		$Vangwoo3ejfgstart = $Vangwoo3ejfgpos + ($Vovexk3mzujo['hpadding'] * $V5k0cete3fo0);
		$Vgxufordoa4tstart = $Vgxufordoa4t + ($Vovexk3mzujo['vpadding'] * $Vwcmlurixvzgh);
		
		$Vnwufml5q3npempRTL = $Vnwufml5q3nphis->rtl;
		$Vnwufml5q3nphis->rtl = false;
		
		if ($Vovexk3mzujo['bgcolor']) {
			$Vnwufml5q3nphis->Rect($Vangwoo3ejfgpos, $Vgxufordoa4t, $Vim12f51jw5r, $Vvjxcwrp4tjq, $Vovexk3mzujo['border'] ? 'DF' : 'F', '', $Vovexk3mzujo['bgcolor']);
		} elseif ($Vovexk3mzujo['border']) {
			$Vnwufml5q3nphis->Rect($Vangwoo3ejfgpos, $Vgxufordoa4t, $Vim12f51jw5r, $Vvjxcwrp4tjq, 'D');
		}
		
		$Vnwufml5q3nphis->SetDrawColorArray($Vovexk3mzujo['fgcolor']);
		
		
		for ($Vfhkt4vbeual = 0; $Vfhkt4vbeual < $Vfhkt4vbeualows; ++$Vfhkt4vbeual) {
			$Vangwoo3ejfgr = $Vangwoo3ejfgstart;
			
			for ($Vwcmlurixvzg = 0; $Vwcmlurixvzg < $Vwcmlurixvzgols; ++$Vwcmlurixvzg) {
				if ($Vudz4oh4qikurrcode['bcode'][$Vfhkt4vbeual][$Vwcmlurixvzg] == 1) {
					
					$Vnwufml5q3nphis->Rect($Vangwoo3ejfgr, $Vgxufordoa4tstart, $V5k0cete3fo0, $Vwcmlurixvzgh, 'F', array(), $Vovexk3mzujo['fgcolor']);
				}
				$Vangwoo3ejfgr += $V5k0cete3fo0;
			}
			$Vgxufordoa4tstart += $Vwcmlurixvzgh;
		}
		
		$Vnwufml5q3nphis->rtl = $Vnwufml5q3npempRTL;
		
		$Vnwufml5q3nphis->setGraphicVars($Vfbwtdiv4emm);
		
		switch($Vb5kn1gbu0ep) {
			case 'T':{
				$Vnwufml5q3nphis->y = $Vgxufordoa4t;
				$Vnwufml5q3nphis->x = $Vnwufml5q3nphis->img_rb_x;
				break;
			}
			case 'M':{
				$Vnwufml5q3nphis->y = $Vgxufordoa4t + round($Vvjxcwrp4tjq/2);
				$Vnwufml5q3nphis->x = $Vnwufml5q3nphis->img_rb_x;
				break;
			}
			case 'B':{
				$Vnwufml5q3nphis->y = $Vnwufml5q3nphis->img_rb_y;
				$Vnwufml5q3nphis->x = $Vnwufml5q3nphis->img_rb_x;
				break;
			}
			case 'N':{
				$Vnwufml5q3nphis->SetY($Vnwufml5q3nphis->img_rb_y);
				break;
			}
			default:{
				break;
			}
		}
		$Vnwufml5q3nphis->endlinex = $Vnwufml5q3nphis->img_rb_x;
	}

	
	public function getMargins() {
		$V14ltds3prprt = array(
			'left' => $Vnwufml5q3nphis->lMargin,
			'right' => $Vnwufml5q3nphis->rMargin,
			'top' => $Vnwufml5q3nphis->tMargin,
			'bottom' => $Vnwufml5q3nphis->bMargin,
			'header' => $Vnwufml5q3nphis->header_margin,
			'footer' => $Vnwufml5q3nphis->footer_margin,
			'cell' => $Vnwufml5q3nphis->cell_padding,
			'padding_left' => $Vnwufml5q3nphis->cell_padding['L'],
			'padding_top' => $Vnwufml5q3nphis->cell_padding['T'],
			'padding_right' => $Vnwufml5q3nphis->cell_padding['R'],
			'padding_bottom' => $Vnwufml5q3nphis->cell_padding['B']
		);
		return $V14ltds3prprt;
	}

	
	public function getOriginalMargins() {
		$V14ltds3prprt = array(
			'left' => $Vnwufml5q3nphis->original_lMargin,
			'right' => $Vnwufml5q3nphis->original_rMargin
		);
		return $V14ltds3prprt;
	}

	
	public function getFontSize() {
		return $Vnwufml5q3nphis->FontSize;
	}

	
	public function getFontSizePt() {
		return $Vnwufml5q3nphis->FontSizePt;
	}

	
	public function getFontFamily() {
		return $Vnwufml5q3nphis->FontFamily;
	}

	
	public function getFontStyle() {
		return $Vnwufml5q3nphis->FontStyle;
	}

	
	public function fixHTMLCode($Vvjxcwrp4tjqtml, $Vc0aiseldrl3efault_css='', $Vnwufml5q3npagvs='', $Vnwufml5q3npidy_options='') {
		return TCPDF_STATIC::fixHTMLCode($Vvjxcwrp4tjqtml, $Vc0aiseldrl3efault_css, $Vnwufml5q3npagvs, $Vnwufml5q3npidy_options, $Vnwufml5q3nphis->tagvspaces);
	}

	
	protected function getCSSBorderWidth($Vim12f51jw5ridth) {
		if ($Vim12f51jw5ridth == 'thin') {
			$Vim12f51jw5ridth = (2 / $Vnwufml5q3nphis->k);
		} elseif ($Vim12f51jw5ridth == 'medium') {
			$Vim12f51jw5ridth = (4 / $Vnwufml5q3nphis->k);
		} elseif ($Vim12f51jw5ridth == 'thick') {
			$Vim12f51jw5ridth = (6 / $Vnwufml5q3nphis->k);
		} else {
			$Vim12f51jw5ridth = $Vnwufml5q3nphis->getHTMLUnitToUnits($Vim12f51jw5ridth, 1, 'px', false);
		}
		return $Vim12f51jw5ridth;
	}

	
	protected function getCSSBorderDashStyle($Vovexk3mzujo) {
		switch (strtolower($Vovexk3mzujo)) {
			case 'none':
			case 'hidden': {
				$Vc0aiseldrl3ash = -1;
				break;
			}
			case 'dotted': {
				$Vc0aiseldrl3ash = 1;
				break;
			}
			case 'dashed': {
				$Vc0aiseldrl3ash = 3;
				break;
			}
			case 'double':
			case 'groove':
			case 'ridge':
			case 'inset':
			case 'outset':
			case 'solid':
			default: {
				$Vc0aiseldrl3ash = 0;
				break;
			}
		}
		return $Vc0aiseldrl3ash;
	}

	
	protected function getCSSBorderStyle($Vwcmlurixvzgssborder) {
		$Vpq3acakq35cprop = preg_split('/[\s]+/', trim($Vwcmlurixvzgssborder));
		$Vgffhwoemo4c = array(); 
		switch (count($Vpq3acakq35cprop)) {
			case 3: {
				$Vim12f51jw5ridth = $Vpq3acakq35cprop[0];
				$Vovexk3mzujo = $Vpq3acakq35cprop[1];
				$Vwcmlurixvzgolor = $Vpq3acakq35cprop[2];
				break;
			}
			case 2: {
				$Vim12f51jw5ridth = 'medium';
				$Vovexk3mzujo = $Vpq3acakq35cprop[0];
				$Vwcmlurixvzgolor = $Vpq3acakq35cprop[1];
				break;
			}
			case 1: {
				$Vim12f51jw5ridth = 'medium';
				$Vovexk3mzujo = $Vpq3acakq35cprop[0];
				$Vwcmlurixvzgolor = 'black';
				break;
			}
			default: {
				$Vim12f51jw5ridth = 'medium';
				$Vovexk3mzujo = 'solid';
				$Vwcmlurixvzgolor = 'black';
				break;
			}
		}
		if ($Vovexk3mzujo == 'none') {
			return array();
		}
		$Vgffhwoemo4c['cap'] = 'square';
		$Vgffhwoemo4c['join'] = 'miter';
		$Vgffhwoemo4c['dash'] = $Vnwufml5q3nphis->getCSSBorderDashStyle($Vovexk3mzujo);
		if ($Vgffhwoemo4c['dash'] < 0) {
			return array();
		}
		$Vgffhwoemo4c['width'] = $Vnwufml5q3nphis->getCSSBorderWidth($Vim12f51jw5ridth);
		$Vgffhwoemo4c['color'] = TCPDF_COLORS::convertHTMLColorToDec($Vwcmlurixvzgolor, $Vnwufml5q3nphis->spot_colors);
		return $Vgffhwoemo4c;
	}

	
	public function getCSSPadding($Vwcmlurixvzgsspadding, $Vim12f51jw5ridth=0) {
		$Vtbdcorpf2kc = preg_split('/[\s]+/', trim($Vwcmlurixvzgsspadding));
		$Vrhdnjsu25aw = array(); 
		switch (count($Vtbdcorpf2kc)) {
			case 4: {
				$Vrhdnjsu25aw['T'] = $Vtbdcorpf2kc[0];
				$Vrhdnjsu25aw['R'] = $Vtbdcorpf2kc[1];
				$Vrhdnjsu25aw['B'] = $Vtbdcorpf2kc[2];
				$Vrhdnjsu25aw['L'] = $Vtbdcorpf2kc[3];
				break;
			}
			case 3: {
				$Vrhdnjsu25aw['T'] = $Vtbdcorpf2kc[0];
				$Vrhdnjsu25aw['R'] = $Vtbdcorpf2kc[1];
				$Vrhdnjsu25aw['B'] = $Vtbdcorpf2kc[2];
				$Vrhdnjsu25aw['L'] = $Vtbdcorpf2kc[1];
				break;
			}
			case 2: {
				$Vrhdnjsu25aw['T'] = $Vtbdcorpf2kc[0];
				$Vrhdnjsu25aw['R'] = $Vtbdcorpf2kc[1];
				$Vrhdnjsu25aw['B'] = $Vtbdcorpf2kc[0];
				$Vrhdnjsu25aw['L'] = $Vtbdcorpf2kc[1];
				break;
			}
			case 1: {
				$Vrhdnjsu25aw['T'] = $Vtbdcorpf2kc[0];
				$Vrhdnjsu25aw['R'] = $Vtbdcorpf2kc[0];
				$Vrhdnjsu25aw['B'] = $Vtbdcorpf2kc[0];
				$Vrhdnjsu25aw['L'] = $Vtbdcorpf2kc[0];
				break;
			}
			default: {
				return $Vnwufml5q3nphis->cell_padding;
			}
		}
		if ($Vim12f51jw5ridth == 0) {
			$Vim12f51jw5ridth = $Vnwufml5q3nphis->w - $Vnwufml5q3nphis->lMargin - $Vnwufml5q3nphis->rMargin;
		}
		$Vrhdnjsu25aw['T'] = $Vnwufml5q3nphis->getHTMLUnitToUnits($Vrhdnjsu25aw['T'], $Vim12f51jw5ridth, 'px', false);
		$Vrhdnjsu25aw['R'] = $Vnwufml5q3nphis->getHTMLUnitToUnits($Vrhdnjsu25aw['R'], $Vim12f51jw5ridth, 'px', false);
		$Vrhdnjsu25aw['B'] = $Vnwufml5q3nphis->getHTMLUnitToUnits($Vrhdnjsu25aw['B'], $Vim12f51jw5ridth, 'px', false);
		$Vrhdnjsu25aw['L'] = $Vnwufml5q3nphis->getHTMLUnitToUnits($Vrhdnjsu25aw['L'], $Vim12f51jw5ridth, 'px', false);
		return $Vrhdnjsu25aw;
	}

	
	public function getCSSMargin($Vwcmlurixvzgssmargin, $Vim12f51jw5ridth=0) {
		$Vwhlvvfn0mdj = preg_split('/[\s]+/', trim($Vwcmlurixvzgssmargin));
		$Vma3jkpki3ic = array(); 
		switch (count($Vwhlvvfn0mdj)) {
			case 4: {
				$Vma3jkpki3ic['T'] = $Vwhlvvfn0mdj[0];
				$Vma3jkpki3ic['R'] = $Vwhlvvfn0mdj[1];
				$Vma3jkpki3ic['B'] = $Vwhlvvfn0mdj[2];
				$Vma3jkpki3ic['L'] = $Vwhlvvfn0mdj[3];
				break;
			}
			case 3: {
				$Vma3jkpki3ic['T'] = $Vwhlvvfn0mdj[0];
				$Vma3jkpki3ic['R'] = $Vwhlvvfn0mdj[1];
				$Vma3jkpki3ic['B'] = $Vwhlvvfn0mdj[2];
				$Vma3jkpki3ic['L'] = $Vwhlvvfn0mdj[1];
				break;
			}
			case 2: {
				$Vma3jkpki3ic['T'] = $Vwhlvvfn0mdj[0];
				$Vma3jkpki3ic['R'] = $Vwhlvvfn0mdj[1];
				$Vma3jkpki3ic['B'] = $Vwhlvvfn0mdj[0];
				$Vma3jkpki3ic['L'] = $Vwhlvvfn0mdj[1];
				break;
			}
			case 1: {
				$Vma3jkpki3ic['T'] = $Vwhlvvfn0mdj[0];
				$Vma3jkpki3ic['R'] = $Vwhlvvfn0mdj[0];
				$Vma3jkpki3ic['B'] = $Vwhlvvfn0mdj[0];
				$Vma3jkpki3ic['L'] = $Vwhlvvfn0mdj[0];
				break;
			}
			default: {
				return $Vnwufml5q3nphis->cell_margin;
			}
		}
		if ($Vim12f51jw5ridth == 0) {
			$Vim12f51jw5ridth = $Vnwufml5q3nphis->w - $Vnwufml5q3nphis->lMargin - $Vnwufml5q3nphis->rMargin;
		}
		$Vma3jkpki3ic['T'] = $Vnwufml5q3nphis->getHTMLUnitToUnits(str_replace('auto', '0', $Vma3jkpki3ic['T']), $Vim12f51jw5ridth, 'px', false);
		$Vma3jkpki3ic['R'] = $Vnwufml5q3nphis->getHTMLUnitToUnits(str_replace('auto', '0', $Vma3jkpki3ic['R']), $Vim12f51jw5ridth, 'px', false);
		$Vma3jkpki3ic['B'] = $Vnwufml5q3nphis->getHTMLUnitToUnits(str_replace('auto', '0', $Vma3jkpki3ic['B']), $Vim12f51jw5ridth, 'px', false);
		$Vma3jkpki3ic['L'] = $Vnwufml5q3nphis->getHTMLUnitToUnits(str_replace('auto', '0', $Vma3jkpki3ic['L']), $Vim12f51jw5ridth, 'px', false);
		return $Vma3jkpki3ic;
	}

	
	public function getCSSBorderMargin($Vwcmlurixvzgssbspace, $Vim12f51jw5ridth=0) {
		$Vvt20qqut4bupace = preg_split('/[\s]+/', trim($Vwcmlurixvzgssbspace));
		$Vgffhwoemo4c_spacing = array(); 
		switch (count($Vvt20qqut4bupace)) {
			case 2: {
				$Vgffhwoemo4c_spacing['H'] = $Vvt20qqut4bupace[0];
				$Vgffhwoemo4c_spacing['V'] = $Vvt20qqut4bupace[1];
				break;
			}
			case 1: {
				$Vgffhwoemo4c_spacing['H'] = $Vvt20qqut4bupace[0];
				$Vgffhwoemo4c_spacing['V'] = $Vvt20qqut4bupace[0];
				break;
			}
			default: {
				return array('H' => 0, 'V' => 0);
			}
		}
		if ($Vim12f51jw5ridth == 0) {
			$Vim12f51jw5ridth = $Vnwufml5q3nphis->w - $Vnwufml5q3nphis->lMargin - $Vnwufml5q3nphis->rMargin;
		}
		$Vgffhwoemo4c_spacing['H'] = $Vnwufml5q3nphis->getHTMLUnitToUnits($Vgffhwoemo4c_spacing['H'], $Vim12f51jw5ridth, 'px', false);
		$Vgffhwoemo4c_spacing['V'] = $Vnwufml5q3nphis->getHTMLUnitToUnits($Vgffhwoemo4c_spacing['V'], $Vim12f51jw5ridth, 'px', false);
		return $Vgffhwoemo4c_spacing;
	}

	
	protected function getCSSFontSpacing($Vvt20qqut4bupacing, $V1yuhsvbtlvrarent=0) {
		$Vxt4wx3pvtez = 0; 
		$Vvt20qqut4bupacing = trim($Vvt20qqut4bupacing);
		switch ($Vvt20qqut4bupacing) {
			case 'normal': {
				$Vxt4wx3pvtez = 0;
				break;
			}
			case 'inherit': {
				if ($V1yuhsvbtlvrarent == 'normal') {
					$Vxt4wx3pvtez = 0;
				} else {
					$Vxt4wx3pvtez = $V1yuhsvbtlvrarent;
				}
				break;
			}
			default: {
				$Vxt4wx3pvtez = $Vnwufml5q3nphis->getHTMLUnitToUnits($Vvt20qqut4bupacing, 0, 'px', false);
			}
		}
		return $Vxt4wx3pvtez;
	}

	
	protected function getCSSFontStretching($Vvt20qqut4butretch, $V1yuhsvbtlvrarent=100) {
		$Vxt4wx3pvtez = 100; 
		$Vvt20qqut4butretch = trim($Vvt20qqut4butretch);
		switch ($Vvt20qqut4butretch) {
			case 'ultra-condensed': {
				$Vxt4wx3pvtez = 40;
				break;
			}
			case 'extra-condensed': {
				$Vxt4wx3pvtez = 55;
				break;
			}
			case 'condensed': {
				$Vxt4wx3pvtez = 70;
				break;
			}
			case 'semi-condensed': {
				$Vxt4wx3pvtez = 85;
				break;
			}
			case 'normal': {
				$Vxt4wx3pvtez = 100;
				break;
			}
			case 'semi-expanded': {
				$Vxt4wx3pvtez = 115;
				break;
			}
			case 'expanded': {
				$Vxt4wx3pvtez = 130;
				break;
			}
			case 'extra-expanded': {
				$Vxt4wx3pvtez = 145;
				break;
			}
			case 'ultra-expanded': {
				$Vxt4wx3pvtez = 160;
				break;
			}
			case 'wider': {
				$Vxt4wx3pvtez = ($V1yuhsvbtlvrarent + 10);
				break;
			}
			case 'narrower': {
				$Vxt4wx3pvtez = ($V1yuhsvbtlvrarent - 10);
				break;
			}
			case 'inherit': {
				if ($V1yuhsvbtlvrarent == 'normal') {
					$Vxt4wx3pvtez = 100;
				} else {
					$Vxt4wx3pvtez = $V1yuhsvbtlvrarent;
				}
				break;
			}
			default: {
				$Vxt4wx3pvtez = $Vnwufml5q3nphis->getHTMLUnitToUnits($Vvt20qqut4butretch, 100, '%', false);
			}
		}
		return $Vxt4wx3pvtez;
	}

	
	public function getHTMLFontUnits($Vxt4wx3pvtez, $V14ltds3prprfsize=12, $V1yuhsvbtlvrarent_size=12, $Vc0aiseldrl3efaultunit='pt') {
		$V14ltds3prprfsize = TCPDF_FONTS::getFontRefSize($V14ltds3prprfsize);
		$V1yuhsvbtlvrarent_size = TCPDF_FONTS::getFontRefSize($V1yuhsvbtlvrarent_size, $V14ltds3prprfsize);
		switch ($Vxt4wx3pvtez) {
			case 'xx-small': {
				$Vvt20qqut4buize = ($V14ltds3prprfsize - 4);
				break;
			}
			case 'x-small': {
				$Vvt20qqut4buize = ($V14ltds3prprfsize - 3);
				break;
			}
			case 'small': {
				$Vvt20qqut4buize = ($V14ltds3prprfsize - 2);
				break;
			}
			case 'medium': {
				$Vvt20qqut4buize = $V14ltds3prprfsize;
				break;
			}
			case 'large': {
				$Vvt20qqut4buize = ($V14ltds3prprfsize + 2);
				break;
			}
			case 'x-large': {
				$Vvt20qqut4buize = ($V14ltds3prprfsize + 4);
				break;
			}
			case 'xx-large': {
				$Vvt20qqut4buize = ($V14ltds3prprfsize + 6);
				break;
			}
			case 'smaller': {
				$Vvt20qqut4buize = ($V1yuhsvbtlvrarent_size - 3);
				break;
			}
			case 'larger': {
				$Vvt20qqut4buize = ($V1yuhsvbtlvrarent_size + 3);
				break;
			}
			default: {
				$Vvt20qqut4buize = $Vnwufml5q3nphis->getHTMLUnitToUnits($Vxt4wx3pvtez, $V1yuhsvbtlvrarent_size, $Vc0aiseldrl3efaultunit, true);
			}
		}
		return $Vvt20qqut4buize;
	}

	
	protected function getHtmlDomArray($Vvjxcwrp4tjqtml) {
		
		$Vwcmlurixvzgss = array();
		
		$Vetludueqmbtatches = array();
		if (preg_match_all('/<cssarray>([^\<]*)<\/cssarray>/isU', $Vvjxcwrp4tjqtml, $Vetludueqmbtatches) > 0) {
			if (isset($Vetludueqmbtatches[1][0])) {
				$Vwcmlurixvzgss = array_merge($Vwcmlurixvzgss, json_decode($Vnwufml5q3nphis->unhtmlentities($Vetludueqmbtatches[1][0]), true));
			}
			$Vvjxcwrp4tjqtml = preg_replace('/<cssarray>(.*?)<\/cssarray>/isU', '', $Vvjxcwrp4tjqtml);
		}
		
		$Vetludueqmbtatches = array();
		if (preg_match_all('/<link([^\>]*)>/isU', $Vvjxcwrp4tjqtml, $Vetludueqmbtatches) > 0) {
			foreach ($Vetludueqmbtatches[1] as $Vl0q4noiexi4ey => $Vx3g4ytafo1aink) {
				$Vvmwm1jsklgc = array();
				if (preg_match('/type[\s]*=[\s]*"text\/css"/', $Vx3g4ytafo1aink, $Vvmwm1jsklgc)) {
					$Vvmwm1jsklgc = array();
					preg_match('/media[\s]*=[\s]*"([^"]*)"/', $Vx3g4ytafo1aink, $Vvmwm1jsklgc);
					
					
					if (empty($Vvmwm1jsklgc) OR (isset($Vvmwm1jsklgc[1]) AND (($Vvmwm1jsklgc[1] == 'all') OR ($Vvmwm1jsklgc[1] == 'print')))) {
						$Vvmwm1jsklgc = array();
						if (preg_match('/href[\s]*=[\s]*"([^"]*)"/', $Vx3g4ytafo1aink, $Vvmwm1jsklgc) > 0) {
							
							$Vwcmlurixvzgssdata = TCPDF_STATIC::fileGetContents(trim($Vvmwm1jsklgc[1]));
							if (($Vwcmlurixvzgssdata !== FALSE) AND (strlen($Vwcmlurixvzgssdata) > 0)) {
								$Vwcmlurixvzgss = array_merge($Vwcmlurixvzgss, TCPDF_STATIC::extractCSSproperties($Vwcmlurixvzgssdata));
							}
						}
					}
				}
			}
		}
		
		$Vetludueqmbtatches = array();
		if (preg_match_all('/<style([^\>]*)>([^\<]*)<\/style>/isU', $Vvjxcwrp4tjqtml, $Vetludueqmbtatches) > 0) {
			foreach ($Vetludueqmbtatches[1] as $Vl0q4noiexi4ey => $Vetludueqmbtedia) {
				$Vvmwm1jsklgc = array();
				preg_match('/media[\s]*=[\s]*"([^"]*)"/', $Vetludueqmbtedia, $Vvmwm1jsklgc);
				
				
				if (empty($Vvmwm1jsklgc) OR (isset($Vvmwm1jsklgc[1]) AND (($Vvmwm1jsklgc[1] == 'all') OR ($Vvmwm1jsklgc[1] == 'print')))) {
					$Vwcmlurixvzgssdata = $Vetludueqmbtatches[2][$Vl0q4noiexi4ey];
					$Vwcmlurixvzgss = array_merge($Vwcmlurixvzgss, TCPDF_STATIC::extractCSSproperties($Vwcmlurixvzgssdata));
				}
			}
		}
		
		$Vwcmlurixvzgsstagarray = '<cssarray>'.htmlentities(json_encode($Vwcmlurixvzgss)).'</cssarray>';
		
		$Vvjxcwrp4tjqtml = preg_replace('/<head([^\>]*)>(.*?)<\/head>/siU', '', $Vvjxcwrp4tjqtml);
		$Vvjxcwrp4tjqtml = preg_replace('/<style([^\>]*)>([^\<]*)<\/style>/isU', '', $Vvjxcwrp4tjqtml);
		
		$Vpq3acakq35clocktags = array('blockquote','br','dd','dl','div','dt','h1','h2','h3','h4','h5','h6','hr','li','ol','p','pre','ul','tcpdf','table','tr','td');
		
		$Vvt20qqut4buelfclosingtags = array('area','base','basefont','br','hr','input','img','link','meta');
		
		$Vvjxcwrp4tjqtml = strip_tags($Vvjxcwrp4tjqtml, '<marker/><a><b><blockquote><body><br><br/><dd><del><div><dl><dt><em><font><form><h1><h2><h3><h4><h5><h6><hr><hr/><i><img><input><label><li><ol><option><p><pre><s><select><small><span><strike><strong><sub><sup><table><tablehead><tcpdf><td><textarea><th><thead><tr><tt><u><ul>');
		
		$Vvjxcwrp4tjqtml = preg_replace('/<pre/', '<xre', $Vvjxcwrp4tjqtml); 
		$Vvjxcwrp4tjqtml = preg_replace('/<(table|tr|td|th|tcpdf|blockquote|dd|div|dl|dt|form|h1|h2|h3|h4|h5|h6|br|hr|li|ol|ul|p)([^\>]*)>[\n\r\t]+/', '<\\1\\2>', $Vvjxcwrp4tjqtml);
		$Vvjxcwrp4tjqtml = preg_replace('@(\r\n|\r)@', "\n", $Vvjxcwrp4tjqtml);
		$V14ltds3prprpTable = array("\t" => ' ', "\0" => ' ', "\x0B" => ' ', "\\" => "\\\\");
		$Vvjxcwrp4tjqtml = strtr($Vvjxcwrp4tjqtml, $V14ltds3prprpTable);
		$Vcwtctilquugset = 0;
		while (($Vcwtctilquugset < strlen($Vvjxcwrp4tjqtml)) AND ($Vsjw1s1w2nqe = strpos($Vvjxcwrp4tjqtml, '</pre>', $Vcwtctilquugset)) !== false) {
			$Vvjxcwrp4tjqtml_a = substr($Vvjxcwrp4tjqtml, 0, $Vcwtctilquugset);
			$Vvjxcwrp4tjqtml_b = substr($Vvjxcwrp4tjqtml, $Vcwtctilquugset, ($Vsjw1s1w2nqe - $Vcwtctilquugset + 6));
			while (preg_match("'<xre([^\>]*)>(.*?)\n(.*?)</pre>'si", $Vvjxcwrp4tjqtml_b)) {
				
				$Vvjxcwrp4tjqtml_b = preg_replace("'<xre([^\>]*)>(.*?)\n(.*?)</pre>'si", "<xre\\1>\\2<br />\\3</pre>", $Vvjxcwrp4tjqtml_b);
			}
			while (preg_match("'<xre([^\>]*)>(.*?)".$Vnwufml5q3nphis->re_space['p']."(.*?)</pre>'".$Vnwufml5q3nphis->re_space['m'], $Vvjxcwrp4tjqtml_b)) {
				
				$Vvjxcwrp4tjqtml_b = preg_replace("'<xre([^\>]*)>(.*?)".$Vnwufml5q3nphis->re_space['p']."(.*?)</pre>'".$Vnwufml5q3nphis->re_space['m'], "<xre\\1>\\2&nbsp;\\3</pre>", $Vvjxcwrp4tjqtml_b);
			}
			$Vvjxcwrp4tjqtml = $Vvjxcwrp4tjqtml_a.$Vvjxcwrp4tjqtml_b.substr($Vvjxcwrp4tjqtml, $Vsjw1s1w2nqe + 6);
			$Vcwtctilquugset = strlen($Vvjxcwrp4tjqtml_a.$Vvjxcwrp4tjqtml_b);
		}
		$Vcwtctilquugset = 0;
		while (($Vcwtctilquugset < strlen($Vvjxcwrp4tjqtml)) AND ($Vsjw1s1w2nqe = strpos($Vvjxcwrp4tjqtml, '</textarea>', $Vcwtctilquugset)) !== false) {
			$Vvjxcwrp4tjqtml_a = substr($Vvjxcwrp4tjqtml, 0, $Vcwtctilquugset);
			$Vvjxcwrp4tjqtml_b = substr($Vvjxcwrp4tjqtml, $Vcwtctilquugset, ($Vsjw1s1w2nqe - $Vcwtctilquugset + 11));
			while (preg_match("'<textarea([^\>]*)>(.*?)\n(.*?)</textarea>'si", $Vvjxcwrp4tjqtml_b)) {
				
				$Vvjxcwrp4tjqtml_b = preg_replace("'<textarea([^\>]*)>(.*?)\n(.*?)</textarea>'si", "<textarea\\1>\\2<TBR>\\3</textarea>", $Vvjxcwrp4tjqtml_b);
				$Vvjxcwrp4tjqtml_b = preg_replace("'<textarea([^\>]*)>(.*?)[\"](.*?)</textarea>'si", "<textarea\\1>\\2''\\3</textarea>", $Vvjxcwrp4tjqtml_b);
			}
			$Vvjxcwrp4tjqtml = $Vvjxcwrp4tjqtml_a.$Vvjxcwrp4tjqtml_b.substr($Vvjxcwrp4tjqtml, $Vsjw1s1w2nqe + 11);
			$Vcwtctilquugset = strlen($Vvjxcwrp4tjqtml_a.$Vvjxcwrp4tjqtml_b);
		}
		$Vvjxcwrp4tjqtml = preg_replace('/([\s]*)<option/si', '<option', $Vvjxcwrp4tjqtml);
		$Vvjxcwrp4tjqtml = preg_replace('/<\/option>([\s]*)/si', '</option>', $Vvjxcwrp4tjqtml);
		$Vcwtctilquugset = 0;
		while (($Vcwtctilquugset < strlen($Vvjxcwrp4tjqtml)) AND ($Vsjw1s1w2nqe = strpos($Vvjxcwrp4tjqtml, '</option>', $Vcwtctilquugset)) !== false) {
			$Vvjxcwrp4tjqtml_a = substr($Vvjxcwrp4tjqtml, 0, $Vcwtctilquugset);
			$Vvjxcwrp4tjqtml_b = substr($Vvjxcwrp4tjqtml, $Vcwtctilquugset, ($Vsjw1s1w2nqe - $Vcwtctilquugset + 9));
			while (preg_match("'<option([^\>]*)>(.*?)</option>'si", $Vvjxcwrp4tjqtml_b)) {
				$Vvjxcwrp4tjqtml_b = preg_replace("'<option([\s]+)value=\"([^\"]*)\"([^\>]*)>(.*?)</option>'si", "\\2#!TaB!#\\4#!NwL!#", $Vvjxcwrp4tjqtml_b);
				$Vvjxcwrp4tjqtml_b = preg_replace("'<option([^\>]*)>(.*?)</option>'si", "\\2#!NwL!#", $Vvjxcwrp4tjqtml_b);
			}
			$Vvjxcwrp4tjqtml = $Vvjxcwrp4tjqtml_a.$Vvjxcwrp4tjqtml_b.substr($Vvjxcwrp4tjqtml, $Vsjw1s1w2nqe + 9);
			$Vcwtctilquugset = strlen($Vvjxcwrp4tjqtml_a.$Vvjxcwrp4tjqtml_b);
		}
		if (preg_match("'</select'si", $Vvjxcwrp4tjqtml)) {
			$Vvjxcwrp4tjqtml = preg_replace("'<select([^\>]*)>'si", "<select\\1 opt=\"", $Vvjxcwrp4tjqtml);
			$Vvjxcwrp4tjqtml = preg_replace("'#!NwL!#</select>'si", "\" />", $Vvjxcwrp4tjqtml);
		}
		$Vvjxcwrp4tjqtml = str_replace("\n", ' ', $Vvjxcwrp4tjqtml);
		
		$Vvjxcwrp4tjqtml = str_replace('<TBR>', "\n", $Vvjxcwrp4tjqtml);
		
		$Vvjxcwrp4tjqtml = preg_replace('/[\s]+<\/(table|tr|ul|ol|dl)>/', '</\\1>', $Vvjxcwrp4tjqtml);
		$Vvjxcwrp4tjqtml = preg_replace('/'.$Vnwufml5q3nphis->re_space['p'].'+<\/(td|th|li|dt|dd)>/'.$Vnwufml5q3nphis->re_space['m'], '</\\1>', $Vvjxcwrp4tjqtml);
		$Vvjxcwrp4tjqtml = preg_replace('/[\s]+<(tr|td|th|li|dt|dd)/', '<\\1', $Vvjxcwrp4tjqtml);
		$Vvjxcwrp4tjqtml = preg_replace('/'.$Vnwufml5q3nphis->re_space['p'].'+<(ul|ol|dl|br)/'.$Vnwufml5q3nphis->re_space['m'], '<\\1', $Vvjxcwrp4tjqtml);
		$Vvjxcwrp4tjqtml = preg_replace('/<\/(table|tr|td|th|blockquote|dd|dt|dl|div|dt|h1|h2|h3|h4|h5|h6|hr|li|ol|ul|p)>[\s]+</', '</\\1><', $Vvjxcwrp4tjqtml);
		$Vvjxcwrp4tjqtml = preg_replace('/<\/(td|th)>/', '<marker style="font-size:0"/></\\1>', $Vvjxcwrp4tjqtml);
		$Vvjxcwrp4tjqtml = preg_replace('/<\/table>([\s]*)<marker style="font-size:0"\/>/', '</table>', $Vvjxcwrp4tjqtml);
		$Vvjxcwrp4tjqtml = preg_replace('/'.$Vnwufml5q3nphis->re_space['p'].'+<img/'.$Vnwufml5q3nphis->re_space['m'], chr(32).'<img', $Vvjxcwrp4tjqtml);
		$Vvjxcwrp4tjqtml = preg_replace('/<img([^\>]*)>[\s]+([^\<])/xi', '<img\\1>&nbsp;\\2', $Vvjxcwrp4tjqtml);
		$Vvjxcwrp4tjqtml = preg_replace('/<img([^\>]*)>/xi', '<img\\1><span><marker style="font-size:0"/></span>', $Vvjxcwrp4tjqtml);
		$Vvjxcwrp4tjqtml = preg_replace('/<xre/', '<pre', $Vvjxcwrp4tjqtml); 
		$Vvjxcwrp4tjqtml = preg_replace('/<textarea([^\>]*)>([^\<]*)<\/textarea>/xi', '<textarea\\1 value="\\2" />', $Vvjxcwrp4tjqtml);
		$Vvjxcwrp4tjqtml = preg_replace('/<li([^\>]*)><\/li>/', '<li\\1>&nbsp;</li>', $Vvjxcwrp4tjqtml);
		$Vvjxcwrp4tjqtml = preg_replace('/<li([^\>]*)>'.$Vnwufml5q3nphis->re_space['p'].'*<img/'.$Vnwufml5q3nphis->re_space['m'], '<li\\1><font size="1">&nbsp;</font><img', $Vvjxcwrp4tjqtml);
		$Vvjxcwrp4tjqtml = preg_replace('/<([^\>\/]*)>[\s]/', '<\\1>&nbsp;', $Vvjxcwrp4tjqtml); 
		$Vvjxcwrp4tjqtml = preg_replace('/[\s]<\/([^\>]*)>/', '&nbsp;</\\1>', $Vvjxcwrp4tjqtml); 
		$Vvjxcwrp4tjqtml = preg_replace('/<su([bp])/', '<zws/><su\\1', $Vvjxcwrp4tjqtml); 
		$Vvjxcwrp4tjqtml = preg_replace('/<\/su([bp])>/', '</su\\1><zws/>', $Vvjxcwrp4tjqtml); 
		$Vvjxcwrp4tjqtml = preg_replace('/'.$Vnwufml5q3nphis->re_space['p'].'+/'.$Vnwufml5q3nphis->re_space['m'], chr(32), $Vvjxcwrp4tjqtml); 
		
		$Vvjxcwrp4tjqtml = $Vnwufml5q3nphis->stringTrim($Vvjxcwrp4tjqtml);
		
		$Vvjxcwrp4tjqtml = preg_replace('/<li><br([^\>]*)>/', '<li> <br\\1>', $Vvjxcwrp4tjqtml);
		
		$Vvjxcwrp4tjqtml = preg_replace('/^<img/', '<span style="font-size:0"><br /></span> <img', $Vvjxcwrp4tjqtml, 1);
		
		$Vnwufml5q3npagpattern = '/(<[^>]+>)/';
		
		$Vudz4oh4qiku = preg_split($Vnwufml5q3npagpattern, $Vvjxcwrp4tjqtml, -1, PREG_SPLIT_DELIM_CAPTURE | PREG_SPLIT_NO_EMPTY);
		
		$Vetludueqmbtaxel = count($Vudz4oh4qiku);
		$Vs0htpwzsrcclkey = 0;
		$Vl0q4noiexi4ey = 0;
		
		$Vc0aiseldrl3om = array();
		$Vc0aiseldrl3om[$Vl0q4noiexi4ey] = array();
		
		
		$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['tag'] = false;
		$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['block'] = false;
		$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['value'] = '';
		$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent'] = 0;
		$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['hide'] = false;
		$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['fontname'] = $Vnwufml5q3nphis->FontFamily;
		$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['fontstyle'] = $Vnwufml5q3nphis->FontStyle;
		$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['fontsize'] = $Vnwufml5q3nphis->FontSizePt;
		$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['font-stretch'] = $Vnwufml5q3nphis->font_stretching;
		$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['letter-spacing'] = $Vnwufml5q3nphis->font_spacing;
		$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['stroke'] = $Vnwufml5q3nphis->textstrokewidth;
		$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['fill'] = (($Vnwufml5q3nphis->textrendermode % 2) == 0);
		$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['clip'] = ($Vnwufml5q3nphis->textrendermode > 3);
		$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['line-height'] = $Vnwufml5q3nphis->cell_height_ratio;
		$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['bgcolor'] = false;
		$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['fgcolor'] = $Vnwufml5q3nphis->fgcolor; 
		$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['strokecolor'] = $Vnwufml5q3nphis->strokecolor;
		$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['align'] = '';
		$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['listtype'] = '';
		$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['text-indent'] = 0;
		$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['text-transform'] = '';
		$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['border'] = array();
		$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['dir'] = $Vnwufml5q3nphis->rtl?'rtl':'ltr';
		$Vniwpupn20qj = false; 
		++$Vl0q4noiexi4ey;
		$Vx3g4ytafo1aevel = array();
		array_push($Vx3g4ytafo1aevel, 0); 
		while ($Vs0htpwzsrcclkey < $Vetludueqmbtaxel) {
			$Vc0aiseldrl3om[$Vl0q4noiexi4ey] = array();
			$Vs0htpwzsrcclement = $Vudz4oh4qiku[$Vs0htpwzsrcclkey];
			$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['elkey'] = $Vs0htpwzsrcclkey;
			if (preg_match($Vnwufml5q3npagpattern, $Vs0htpwzsrcclement)) {
				
				$Vs0htpwzsrcclement = substr($Vs0htpwzsrcclement, 1, -1);
				
				preg_match('/[\/]?([a-zA-Z0-9]*)/', $Vs0htpwzsrcclement, $Vnwufml5q3npag);
				$Vnwufml5q3npagname = strtolower($Vnwufml5q3npag[1]);
				
				if ($Vnwufml5q3npagname == 'thead') {
					if ($Vs0htpwzsrcclement[0] == '/') {
						$Vniwpupn20qj = false;
					} else {
						$Vniwpupn20qj = true;
					}
					++$Vs0htpwzsrcclkey;
					continue;
				}
				$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['tag'] = true;
				$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['value'] = $Vnwufml5q3npagname;
				if (in_array($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['value'], $Vpq3acakq35clocktags)) {
					$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['block'] = true;
				} else {
					$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['block'] = false;
				}
				if ($Vs0htpwzsrcclement[0] == '/') {
					
					$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['opening'] = false;
					$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent'] = end($Vx3g4ytafo1aevel);
					array_pop($Vx3g4ytafo1aevel);
					$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['hide'] = $Vc0aiseldrl3om[($Vc0aiseldrl3om[($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent'])]['parent'])]['hide'];
					$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['fontname'] = $Vc0aiseldrl3om[($Vc0aiseldrl3om[($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent'])]['parent'])]['fontname'];
					$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['fontstyle'] = $Vc0aiseldrl3om[($Vc0aiseldrl3om[($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent'])]['parent'])]['fontstyle'];
					$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['fontsize'] = $Vc0aiseldrl3om[($Vc0aiseldrl3om[($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent'])]['parent'])]['fontsize'];
					$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['font-stretch'] = $Vc0aiseldrl3om[($Vc0aiseldrl3om[($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent'])]['parent'])]['font-stretch'];
					$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['letter-spacing'] = $Vc0aiseldrl3om[($Vc0aiseldrl3om[($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent'])]['parent'])]['letter-spacing'];
					$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['stroke'] = $Vc0aiseldrl3om[($Vc0aiseldrl3om[($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent'])]['parent'])]['stroke'];
					$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['fill'] = $Vc0aiseldrl3om[($Vc0aiseldrl3om[($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent'])]['parent'])]['fill'];
					$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['clip'] = $Vc0aiseldrl3om[($Vc0aiseldrl3om[($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent'])]['parent'])]['clip'];
					$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['line-height'] = $Vc0aiseldrl3om[($Vc0aiseldrl3om[($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent'])]['parent'])]['line-height'];
					$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['bgcolor'] = $Vc0aiseldrl3om[($Vc0aiseldrl3om[($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent'])]['parent'])]['bgcolor'];
					$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['fgcolor'] = $Vc0aiseldrl3om[($Vc0aiseldrl3om[($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent'])]['parent'])]['fgcolor'];
					$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['strokecolor'] = $Vc0aiseldrl3om[($Vc0aiseldrl3om[($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent'])]['parent'])]['strokecolor'];
					$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['align'] = $Vc0aiseldrl3om[($Vc0aiseldrl3om[($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent'])]['parent'])]['align'];
					$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['text-transform'] = $Vc0aiseldrl3om[($Vc0aiseldrl3om[($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent'])]['parent'])]['text-transform'];
					$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['dir'] = $Vc0aiseldrl3om[($Vc0aiseldrl3om[($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent'])]['parent'])]['dir'];
					if (isset($Vc0aiseldrl3om[($Vc0aiseldrl3om[($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent'])]['parent'])]['listtype'])) {
						$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['listtype'] = $Vc0aiseldrl3om[($Vc0aiseldrl3om[($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent'])]['parent'])]['listtype'];
					}
					
					if (($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['value'] == 'tr') AND (!isset($Vc0aiseldrl3om[($Vc0aiseldrl3om[($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent'])]['parent'])]['cols']))) {
						$Vc0aiseldrl3om[($Vc0aiseldrl3om[($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent'])]['parent'])]['cols'] = $Vc0aiseldrl3om[($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent'])]['cols'];
					}
					if (($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['value'] == 'td') OR ($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['value'] == 'th')) {
						$Vc0aiseldrl3om[($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent'])]['content'] = $Vwcmlurixvzgsstagarray;
						for ($V55vc4mewy5w = ($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent'] + 1); $V55vc4mewy5w < $Vl0q4noiexi4ey; ++$V55vc4mewy5w) {
							$Vc0aiseldrl3om[($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent'])]['content'] .= stripslashes($Vudz4oh4qiku[$Vc0aiseldrl3om[$V55vc4mewy5w]['elkey']]);
						}
						$Vl0q4noiexi4ey = $V55vc4mewy5w;
						
						$Vc0aiseldrl3om[($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent'])]['content'] = str_replace('<table', '<table nested="true"', $Vc0aiseldrl3om[($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent'])]['content']);
						
						$Vc0aiseldrl3om[($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent'])]['content'] = str_replace('<thead>', '', $Vc0aiseldrl3om[($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent'])]['content']);
						$Vc0aiseldrl3om[($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent'])]['content'] = str_replace('</thead>', '', $Vc0aiseldrl3om[($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent'])]['content']);
					}
					
					if (($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['value'] == 'tr') AND ($Vc0aiseldrl3om[($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent'])]['thead'] === true)) {
						if (TCPDF_STATIC::empty_string($Vc0aiseldrl3om[($Vc0aiseldrl3om[($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent'])]['parent'])]['thead'])) {
							$Vc0aiseldrl3om[($Vc0aiseldrl3om[($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent'])]['parent'])]['thead'] = $Vwcmlurixvzgsstagarray.$Vudz4oh4qiku[$Vc0aiseldrl3om[($Vc0aiseldrl3om[($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent'])]['parent'])]['elkey']];
						}
						for ($V55vc4mewy5w = $Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent']; $V55vc4mewy5w <= $Vl0q4noiexi4ey; ++$V55vc4mewy5w) {
							$Vc0aiseldrl3om[($Vc0aiseldrl3om[($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent'])]['parent'])]['thead'] .= $Vudz4oh4qiku[$Vc0aiseldrl3om[$V55vc4mewy5w]['elkey']];
						}
						if (!isset($Vc0aiseldrl3om[($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent'])]['attribute'])) {
							$Vc0aiseldrl3om[($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent'])]['attribute'] = array();
						}
						
						$Vc0aiseldrl3om[($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent'])]['attribute']['nobr'] = 'true';
					}
					if (($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['value'] == 'table') AND (!TCPDF_STATIC::empty_string($Vc0aiseldrl3om[($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent'])]['thead']))) {
						
						$Vc0aiseldrl3om[($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent'])]['thead'] = str_replace(' nobr="true"', '', $Vc0aiseldrl3om[($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent'])]['thead']);
						$Vc0aiseldrl3om[($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent'])]['thead'] .= '</tablehead>';
					}
				} else {
					
					$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['opening'] = true;
					$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent'] = end($Vx3g4ytafo1aevel);
					if ((substr($Vs0htpwzsrcclement, -1, 1) == '/') OR (in_array($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['value'], $Vvt20qqut4buelfclosingtags))) {
						
						$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['self'] = true;
					} else {
						
						array_push($Vx3g4ytafo1aevel, $Vl0q4noiexi4ey);
						$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['self'] = false;
					}
					
					$V1yuhsvbtlvrarentkey = 0;
					if ($Vl0q4noiexi4ey > 0) {
						$V1yuhsvbtlvrarentkey = $Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent'];
						$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['hide'] = $Vc0aiseldrl3om[$V1yuhsvbtlvrarentkey]['hide'];
						$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['fontname'] = $Vc0aiseldrl3om[$V1yuhsvbtlvrarentkey]['fontname'];
						$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['fontstyle'] = $Vc0aiseldrl3om[$V1yuhsvbtlvrarentkey]['fontstyle'];
						$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['fontsize'] = $Vc0aiseldrl3om[$V1yuhsvbtlvrarentkey]['fontsize'];
						$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['font-stretch'] = $Vc0aiseldrl3om[$V1yuhsvbtlvrarentkey]['font-stretch'];
						$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['letter-spacing'] = $Vc0aiseldrl3om[$V1yuhsvbtlvrarentkey]['letter-spacing'];
						$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['stroke'] = $Vc0aiseldrl3om[$V1yuhsvbtlvrarentkey]['stroke'];
						$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['fill'] = $Vc0aiseldrl3om[$V1yuhsvbtlvrarentkey]['fill'];
						$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['clip'] = $Vc0aiseldrl3om[$V1yuhsvbtlvrarentkey]['clip'];
						$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['line-height'] = $Vc0aiseldrl3om[$V1yuhsvbtlvrarentkey]['line-height'];
						$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['bgcolor'] = $Vc0aiseldrl3om[$V1yuhsvbtlvrarentkey]['bgcolor'];
						$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['fgcolor'] = $Vc0aiseldrl3om[$V1yuhsvbtlvrarentkey]['fgcolor'];
						$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['strokecolor'] = $Vc0aiseldrl3om[$V1yuhsvbtlvrarentkey]['strokecolor'];
						$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['align'] = $Vc0aiseldrl3om[$V1yuhsvbtlvrarentkey]['align'];
						$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['listtype'] = $Vc0aiseldrl3om[$V1yuhsvbtlvrarentkey]['listtype'];
						$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['text-indent'] = $Vc0aiseldrl3om[$V1yuhsvbtlvrarentkey]['text-indent'];
						$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['text-transform'] = $Vc0aiseldrl3om[$V1yuhsvbtlvrarentkey]['text-transform'];
						$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['border'] = array();
						$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['dir'] = $Vc0aiseldrl3om[$V1yuhsvbtlvrarentkey]['dir'];
					}
					
					preg_match_all('/([^=\s]*)[\s]*=[\s]*"([^"]*)"/', $Vs0htpwzsrcclement, $Vudz4oh4qikuttr_array, PREG_PATTERN_ORDER);
					$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['attribute'] = array(); 
					while (list($V55vc4mewy5wd, $Vgv45dfhsyuhame) = each($Vudz4oh4qikuttr_array[1])) {
						$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['attribute'][strtolower($Vgv45dfhsyuhame)] = $Vudz4oh4qikuttr_array[2][$V55vc4mewy5wd];
					}
					if (!empty($Vwcmlurixvzgss)) {
						
						list($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['csssel'], $Vc0aiseldrl3om[$Vl0q4noiexi4ey]['cssdata']) = TCPDF_STATIC::getCSSdataArray($Vc0aiseldrl3om, $Vl0q4noiexi4ey, $Vwcmlurixvzgss);
						$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['attribute']['style'] = TCPDF_STATIC::getTagStyleFromCSSarray($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['cssdata']);
					}
					
					if (isset($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['attribute']['style']) AND !empty($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['attribute']['style'])) {
						
						preg_match_all('/([^;:\s]*):([^;]*)/', $Vc0aiseldrl3om[$Vl0q4noiexi4ey]['attribute']['style'], $Vovexk3mzujo_array, PREG_PATTERN_ORDER);
						$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['style'] = array(); 
						while (list($V55vc4mewy5wd, $Vgv45dfhsyuhame) = each($Vovexk3mzujo_array[1])) {
							
							$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['style'][strtolower($Vgv45dfhsyuhame)] = trim($Vovexk3mzujo_array[2][$V55vc4mewy5wd]);
						}
						
						
						if (isset($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['style']['direction'])) {
							$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['dir'] = $Vc0aiseldrl3om[$Vl0q4noiexi4ey]['style']['direction'];
						}
						
						if (isset($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['style']['display'])) {
							$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['hide'] = (trim(strtolower($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['style']['display'])) == 'none');
						}
						
						if (isset($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['style']['font-family'])) {
							$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['fontname'] = $Vnwufml5q3nphis->getFontFamilyName($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['style']['font-family']);
						}
						
						if (isset($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['style']['list-style-type'])) {
							$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['listtype'] = trim(strtolower($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['style']['list-style-type']));
							if ($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['listtype'] == 'inherit') {
								$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['listtype'] = $Vc0aiseldrl3om[$V1yuhsvbtlvrarentkey]['listtype'];
							}
						}
						
						if (isset($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['style']['text-indent'])) {
							$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['text-indent'] = $Vnwufml5q3nphis->getHTMLUnitToUnits($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['style']['text-indent']);
							if ($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['text-indent'] == 'inherit') {
								$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['text-indent'] = $Vc0aiseldrl3om[$V1yuhsvbtlvrarentkey]['text-indent'];
							}
						}
						
						if (isset($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['style']['text-transform'])) {
							$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['text-transform'] = $Vc0aiseldrl3om[$Vl0q4noiexi4ey]['style']['text-transform'];
						}
						
						if (isset($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['style']['font-size'])) {
							$Vxb0ra0fqzn2size = trim($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['style']['font-size']);
							$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['fontsize'] = $Vnwufml5q3nphis->getHTMLFontUnits($Vxb0ra0fqzn2size, $Vc0aiseldrl3om[0]['fontsize'], $Vc0aiseldrl3om[$V1yuhsvbtlvrarentkey]['fontsize'], 'pt');
						}
						
						if (isset($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['style']['font-stretch'])) {
							$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['font-stretch'] = $Vnwufml5q3nphis->getCSSFontStretching($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['style']['font-stretch'], $Vc0aiseldrl3om[$V1yuhsvbtlvrarentkey]['font-stretch']);
						}
						
						if (isset($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['style']['letter-spacing'])) {
							$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['letter-spacing'] = $Vnwufml5q3nphis->getCSSFontSpacing($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['style']['letter-spacing'], $Vc0aiseldrl3om[$V1yuhsvbtlvrarentkey]['letter-spacing']);
						}
						
						if (isset($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['style']['line-height'])) {
							$Vx3g4ytafo1aineheight = trim($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['style']['line-height']);
							switch ($Vx3g4ytafo1aineheight) {
								
								case 'normal': {
									$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['line-height'] = $Vc0aiseldrl3om[0]['line-height'];
									break;
								}
								case 'inherit': {
									$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['line-height'] = $Vc0aiseldrl3om[$V1yuhsvbtlvrarentkey]['line-height'];
								}
								default: {
									if (is_numeric($Vx3g4ytafo1aineheight)) {
										
										$Vx3g4ytafo1aineheight = ($Vx3g4ytafo1aineheight * 100).'%';
									}
									$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['line-height'] = $Vnwufml5q3nphis->getHTMLUnitToUnits($Vx3g4ytafo1aineheight, 1, '%', true);
									if (substr($Vx3g4ytafo1aineheight, -1) !== '%') {
										if ($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['fontsize'] <= 0) {
											$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['line-height'] = 1;
										} else {
											$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['line-height'] = (($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['line-height'] - $Vnwufml5q3nphis->cell_padding['T'] - $Vnwufml5q3nphis->cell_padding['B']) / $Vc0aiseldrl3om[$Vl0q4noiexi4ey]['fontsize']);
										}
									}
								}
							}
						}
						
						if (isset($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['style']['font-weight'])) {
							if (strtolower($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['style']['font-weight'][0]) == 'n') {
								if (strpos($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['fontstyle'], 'B') !== false) {
									$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['fontstyle'] = str_replace('B', '', $Vc0aiseldrl3om[$Vl0q4noiexi4ey]['fontstyle']);
								}
							} elseif (strtolower($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['style']['font-weight'][0]) == 'b') {
								$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['fontstyle'] .= 'B';
							}
						}
						if (isset($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['style']['font-style']) AND (strtolower($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['style']['font-style'][0]) == 'i')) {
							$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['fontstyle'] .= 'I';
						}
						
						if (isset($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['style']['color']) AND (!TCPDF_STATIC::empty_string($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['style']['color']))) {
							$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['fgcolor'] = TCPDF_COLORS::convertHTMLColorToDec($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['style']['color'], $Vnwufml5q3nphis->spot_colors);
						} elseif ($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['value'] == 'a') {
							$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['fgcolor'] = $Vnwufml5q3nphis->htmlLinkColorArray;
						}
						
						if (isset($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['style']['background-color']) AND (!TCPDF_STATIC::empty_string($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['style']['background-color']))) {
							$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['bgcolor'] = TCPDF_COLORS::convertHTMLColorToDec($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['style']['background-color'], $Vnwufml5q3nphis->spot_colors);
						}
						
						if (isset($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['style']['text-decoration'])) {
							$Vc0aiseldrl3ecors = explode(' ', strtolower($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['style']['text-decoration']));
							foreach ($Vc0aiseldrl3ecors as $Vc0aiseldrl3ec) {
								$Vc0aiseldrl3ec = trim($Vc0aiseldrl3ec);
								if (!TCPDF_STATIC::empty_string($Vc0aiseldrl3ec)) {
									if ($Vc0aiseldrl3ec[0] == 'u') {
										
										$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['fontstyle'] .= 'U';
									} elseif ($Vc0aiseldrl3ec[0] == 'l') {
										
										$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['fontstyle'] .= 'D';
									} elseif ($Vc0aiseldrl3ec[0] == 'o') {
										
										$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['fontstyle'] .= 'O';
									}
								}
							}
						} elseif ($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['value'] == 'a') {
							$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['fontstyle'] = $Vnwufml5q3nphis->htmlLinkFontStyle;
						}
						
						if (isset($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['style']['width'])) {
							$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['width'] = $Vc0aiseldrl3om[$Vl0q4noiexi4ey]['style']['width'];
						}
						
						if (isset($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['style']['height'])) {
							$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['height'] = $Vc0aiseldrl3om[$Vl0q4noiexi4ey]['style']['height'];
						}
						
						if (isset($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['style']['text-align'])) {
							$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['align'] = strtoupper($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['style']['text-align'][0]);
						}
						
						if (isset($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['style']['border'])) {
							$Vgffhwoemo4cstyle = $Vnwufml5q3nphis->getCSSBorderStyle($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['style']['border']);
							if (!empty($Vgffhwoemo4cstyle)) {
								$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['border']['LTRB'] = $Vgffhwoemo4cstyle;
							}
						}
						if (isset($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['style']['border-color'])) {
							$Vthindvefylo_colors = preg_split('/[\s]+/', trim($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['style']['border-color']));
							if (isset($Vthindvefylo_colors[3])) {
								$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['border']['L']['color'] = TCPDF_COLORS::convertHTMLColorToDec($Vthindvefylo_colors[3], $Vnwufml5q3nphis->spot_colors);
							}
							if (isset($Vthindvefylo_colors[1])) {
								$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['border']['R']['color'] = TCPDF_COLORS::convertHTMLColorToDec($Vthindvefylo_colors[1], $Vnwufml5q3nphis->spot_colors);
							}
							if (isset($Vthindvefylo_colors[0])) {
								$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['border']['T']['color'] = TCPDF_COLORS::convertHTMLColorToDec($Vthindvefylo_colors[0], $Vnwufml5q3nphis->spot_colors);
							}
							if (isset($Vthindvefylo_colors[2])) {
								$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['border']['B']['color'] = TCPDF_COLORS::convertHTMLColorToDec($Vthindvefylo_colors[2], $Vnwufml5q3nphis->spot_colors);
							}
						}
						if (isset($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['style']['border-width'])) {
							$Vthindvefylo_widths = preg_split('/[\s]+/', trim($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['style']['border-width']));
							if (isset($Vthindvefylo_widths[3])) {
								$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['border']['L']['width'] = $Vnwufml5q3nphis->getCSSBorderWidth($Vthindvefylo_widths[3]);
							}
							if (isset($Vthindvefylo_widths[1])) {
								$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['border']['R']['width'] = $Vnwufml5q3nphis->getCSSBorderWidth($Vthindvefylo_widths[1]);
							}
							if (isset($Vthindvefylo_widths[0])) {
								$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['border']['T']['width'] = $Vnwufml5q3nphis->getCSSBorderWidth($Vthindvefylo_widths[0]);
							}
							if (isset($Vthindvefylo_widths[2])) {
								$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['border']['B']['width'] = $Vnwufml5q3nphis->getCSSBorderWidth($Vthindvefylo_widths[2]);
							}
						}
						if (isset($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['style']['border-style'])) {
							$Vthindvefylo_styles = preg_split('/[\s]+/', trim($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['style']['border-style']));
							if (isset($Vthindvefylo_styles[3]) AND ($Vthindvefylo_styles[3]!='none')) {
								$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['border']['L']['cap'] = 'square';
								$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['border']['L']['join'] = 'miter';
								$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['border']['L']['dash'] = $Vnwufml5q3nphis->getCSSBorderDashStyle($Vthindvefylo_styles[3]);
								if ($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['border']['L']['dash'] < 0) {
									$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['border']['L'] = array();
								}
							}
							if (isset($Vthindvefylo_styles[1])) {
								$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['border']['R']['cap'] = 'square';
								$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['border']['R']['join'] = 'miter';
								$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['border']['R']['dash'] = $Vnwufml5q3nphis->getCSSBorderDashStyle($Vthindvefylo_styles[1]);
								if ($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['border']['R']['dash'] < 0) {
									$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['border']['R'] = array();
								}
							}
							if (isset($Vthindvefylo_styles[0])) {
								$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['border']['T']['cap'] = 'square';
								$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['border']['T']['join'] = 'miter';
								$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['border']['T']['dash'] = $Vnwufml5q3nphis->getCSSBorderDashStyle($Vthindvefylo_styles[0]);
								if ($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['border']['T']['dash'] < 0) {
									$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['border']['T'] = array();
								}
							}
							if (isset($Vthindvefylo_styles[2])) {
								$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['border']['B']['cap'] = 'square';
								$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['border']['B']['join'] = 'miter';
								$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['border']['B']['dash'] = $Vnwufml5q3nphis->getCSSBorderDashStyle($Vthindvefylo_styles[2]);
								if ($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['border']['B']['dash'] < 0) {
									$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['border']['B'] = array();
								}
							}
						}
						$Vwcmlurixvzgellside = array('L' => 'left', 'R' => 'right', 'T' => 'top', 'B' => 'bottom');
						foreach ($Vwcmlurixvzgellside as $Vpq3acakq35csk => $Vpq3acakq35csv) {
							if (isset($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['style']['border-'.$Vpq3acakq35csv])) {
								$Vgffhwoemo4cstyle = $Vnwufml5q3nphis->getCSSBorderStyle($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['style']['border-'.$Vpq3acakq35csv]);
								if (!empty($Vgffhwoemo4cstyle)) {
									$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['border'][$Vpq3acakq35csk] = $Vgffhwoemo4cstyle;
								}
							}
							if (isset($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['style']['border-'.$Vpq3acakq35csv.'-color'])) {
								$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['border'][$Vpq3acakq35csk]['color'] = TCPDF_COLORS::convertHTMLColorToDec($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['style']['border-'.$Vpq3acakq35csv.'-color'], $Vnwufml5q3nphis->spot_colors);
							}
							if (isset($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['style']['border-'.$Vpq3acakq35csv.'-width'])) {
								$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['border'][$Vpq3acakq35csk]['width'] = $Vnwufml5q3nphis->getCSSBorderWidth($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['style']['border-'.$Vpq3acakq35csv.'-width']);
							}
							if (isset($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['style']['border-'.$Vpq3acakq35csv.'-style'])) {
								$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['border'][$Vpq3acakq35csk]['dash'] = $Vnwufml5q3nphis->getCSSBorderDashStyle($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['style']['border-'.$Vpq3acakq35csv.'-style']);
								if ($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['border'][$Vpq3acakq35csk]['dash'] < 0) {
									$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['border'][$Vpq3acakq35csk] = array();
								}
							}
						}
						
						if (isset($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['style']['padding'])) {
							$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['padding'] = $Vnwufml5q3nphis->getCSSPadding($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['style']['padding']);
						} else {
							$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['padding'] = $Vnwufml5q3nphis->cell_padding;
						}
						foreach ($Vwcmlurixvzgellside as $V1yuhsvbtlvrsk => $V1yuhsvbtlvrsv) {
							if (isset($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['style']['padding-'.$V1yuhsvbtlvrsv])) {
								$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['padding'][$V1yuhsvbtlvrsk] = $Vnwufml5q3nphis->getHTMLUnitToUnits($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['style']['padding-'.$V1yuhsvbtlvrsv], 0, 'px', false);
							}
						}
						
						if (isset($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['style']['margin'])) {
							$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['margin'] = $Vnwufml5q3nphis->getCSSMargin($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['style']['margin']);
						} else {
							$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['margin'] = $Vnwufml5q3nphis->cell_margin;
						}
						foreach ($Vwcmlurixvzgellside as $V1yuhsvbtlvrsk => $V1yuhsvbtlvrsv) {
							if (isset($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['style']['margin-'.$V1yuhsvbtlvrsv])) {
								$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['margin'][$V1yuhsvbtlvrsk] = $Vnwufml5q3nphis->getHTMLUnitToUnits(str_replace('auto', '0', $Vc0aiseldrl3om[$Vl0q4noiexi4ey]['style']['margin-'.$V1yuhsvbtlvrsv]), 0, 'px', false);
							}
						}
						
						if (isset($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['style']['border-spacing'])) {
							$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['border-spacing'] = $Vnwufml5q3nphis->getCSSBorderMargin($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['style']['border-spacing']);
						}
						
						if (isset($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['style']['page-break-inside']) AND ($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['style']['page-break-inside'] == 'avoid')) {
							$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['attribute']['nobr'] = 'true';
						}
						
						if (isset($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['style']['page-break-before'])) {
							if ($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['style']['page-break-before'] == 'always') {
								$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['attribute']['pagebreak'] = 'true';
							} elseif ($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['style']['page-break-before'] == 'left') {
								$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['attribute']['pagebreak'] = 'left';
							} elseif ($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['style']['page-break-before'] == 'right') {
								$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['attribute']['pagebreak'] = 'right';
							}
						}
						
						if (isset($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['style']['page-break-after'])) {
							if ($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['style']['page-break-after'] == 'always') {
								$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['attribute']['pagebreakafter'] = 'true';
							} elseif ($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['style']['page-break-after'] == 'left') {
								$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['attribute']['pagebreakafter'] = 'left';
							} elseif ($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['style']['page-break-after'] == 'right') {
								$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['attribute']['pagebreakafter'] = 'right';
							}
						}
					}
					if (isset($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['attribute']['display'])) {
						$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['hide'] = (trim(strtolower($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['attribute']['display'])) == 'none');
					}
					if (isset($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['attribute']['border']) AND ($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['attribute']['border'] != 0)) {
						$Vgffhwoemo4cstyle = $Vnwufml5q3nphis->getCSSBorderStyle($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['attribute']['border'].' solid black');
						if (!empty($Vgffhwoemo4cstyle)) {
							$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['border']['LTRB'] = $Vgffhwoemo4cstyle;
						}
					}
					
					if ($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['value'] == 'font') {
						
						if (isset($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['attribute']['face'])) {
							$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['fontname'] = $Vnwufml5q3nphis->getFontFamilyName($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['attribute']['face']);
						}
						
						if (isset($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['attribute']['size'])) {
							if ($Vl0q4noiexi4ey > 0) {
								if ($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['attribute']['size'][0] == '+') {
									$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['fontsize'] = $Vc0aiseldrl3om[($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent'])]['fontsize'] + intval(substr($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['attribute']['size'], 1));
								} elseif ($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['attribute']['size'][0] == '-') {
									$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['fontsize'] = $Vc0aiseldrl3om[($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent'])]['fontsize'] - intval(substr($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['attribute']['size'], 1));
								} else {
									$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['fontsize'] = intval($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['attribute']['size']);
								}
							} else {
								$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['fontsize'] = intval($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['attribute']['size']);
							}
						}
					}
					
					if ((($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['value'] == 'ul') OR ($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['value'] == 'ol') OR ($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['value'] == 'dl'))
						AND (!isset($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['align']) OR TCPDF_STATIC::empty_string($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['align']) OR ($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['align'] != 'J'))) {
						if ($Vnwufml5q3nphis->rtl) {
							$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['align'] = 'R';
						} else {
							$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['align'] = 'L';
						}
					}
					if (($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['value'] == 'small') OR ($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['value'] == 'sup') OR ($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['value'] == 'sub')) {
						if (!isset($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['attribute']['size']) AND !isset($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['style']['font-size'])) {
							$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['fontsize'] = $Vc0aiseldrl3om[$Vl0q4noiexi4ey]['fontsize'] * K_SMALL_RATIO;
						}
					}
					if (($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['value'] == 'strong') OR ($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['value'] == 'b')) {
						$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['fontstyle'] .= 'B';
					}
					if (($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['value'] == 'em') OR ($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['value'] == 'i')) {
						$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['fontstyle'] .= 'I';
					}
					if ($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['value'] == 'u') {
						$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['fontstyle'] .= 'U';
					}
					if (($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['value'] == 'del') OR ($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['value'] == 's') OR ($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['value'] == 'strike')) {
						$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['fontstyle'] .= 'D';
					}
					if (!isset($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['style']['text-decoration']) AND ($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['value'] == 'a')) {
						$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['fontstyle'] = $Vnwufml5q3nphis->htmlLinkFontStyle;
					}
					if (($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['value'] == 'pre') OR ($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['value'] == 'tt')) {
						$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['fontname'] = $Vnwufml5q3nphis->default_monospaced_font;
					}
					if (!empty($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['value']) AND ($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['value'][0] == 'h') AND (intval($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['value']{1}) > 0) AND (intval($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['value']{1}) < 7)) {
						
						if (!isset($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['attribute']['size']) AND !isset($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['style']['font-size'])) {
							$Vvjxcwrp4tjqeadsize = (4 - intval($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['value']{1})) * 2;
							$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['fontsize'] = $Vc0aiseldrl3om[0]['fontsize'] + $Vvjxcwrp4tjqeadsize;
						}
						if (!isset($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['style']['font-weight'])) {
							$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['fontstyle'] .= 'B';
						}
					}
					if (($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['value'] == 'table')) {
						$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['rows'] = 0; 
						$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['trids'] = array(); 
						$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['thead'] = ''; 
					}
					if (($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['value'] == 'tr')) {
						$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['cols'] = 0;
						if ($Vniwpupn20qj) {
							$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['thead'] = true;
							
						} else {
							$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['thead'] = false;
							
							++$Vc0aiseldrl3om[($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent'])]['rows'];
							
							array_push($Vc0aiseldrl3om[($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent'])]['trids'], $Vl0q4noiexi4ey);
						}
					}
					if (($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['value'] == 'th') OR ($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['value'] == 'td')) {
						if (isset($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['attribute']['colspan'])) {
							$Vwcmlurixvzgolspan = intval($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['attribute']['colspan']);
						} else {
							$Vwcmlurixvzgolspan = 1;
						}
						$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['attribute']['colspan'] = $Vwcmlurixvzgolspan;
						$Vc0aiseldrl3om[($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent'])]['cols'] += $Vwcmlurixvzgolspan;
					}
					
					if (isset($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['attribute']['dir'])) {
						$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['dir'] = $Vc0aiseldrl3om[$Vl0q4noiexi4ey]['attribute']['dir'];
					}
					
					if (isset($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['attribute']['color']) AND (!TCPDF_STATIC::empty_string($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['attribute']['color']))) {
						$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['fgcolor'] = TCPDF_COLORS::convertHTMLColorToDec($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['attribute']['color'], $Vnwufml5q3nphis->spot_colors);
					} elseif (!isset($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['style']['color']) AND ($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['value'] == 'a')) {
						$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['fgcolor'] = $Vnwufml5q3nphis->htmlLinkColorArray;
					}
					
					if (isset($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['attribute']['bgcolor']) AND (!TCPDF_STATIC::empty_string($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['attribute']['bgcolor']))) {
						$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['bgcolor'] = TCPDF_COLORS::convertHTMLColorToDec($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['attribute']['bgcolor'], $Vnwufml5q3nphis->spot_colors);
					}
					
					if (isset($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['attribute']['strokecolor']) AND (!TCPDF_STATIC::empty_string($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['attribute']['strokecolor']))) {
						$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['strokecolor'] = TCPDF_COLORS::convertHTMLColorToDec($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['attribute']['strokecolor'], $Vnwufml5q3nphis->spot_colors);
					}
					
					if (isset($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['attribute']['width'])) {
						$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['width'] = $Vc0aiseldrl3om[$Vl0q4noiexi4ey]['attribute']['width'];
					}
					
					if (isset($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['attribute']['height'])) {
						$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['height'] = $Vc0aiseldrl3om[$Vl0q4noiexi4ey]['attribute']['height'];
					}
					
					if (isset($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['attribute']['align']) AND (!TCPDF_STATIC::empty_string($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['attribute']['align'])) AND ($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['value'] !== 'img')) {
						$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['align'] = strtoupper($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['attribute']['align'][0]);
					}
					
					if (isset($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['attribute']['stroke'])) {
						
						$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['stroke'] = $Vnwufml5q3nphis->getHTMLUnitToUnits($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['attribute']['stroke'], $Vc0aiseldrl3om[$Vl0q4noiexi4ey]['fontsize'], 'pt', true);
					}
					if (isset($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['attribute']['fill'])) {
						
						if ($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['attribute']['fill'] == 'true') {
							$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['fill'] = true;
						} else {
							$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['fill'] = false;
						}
					}
					if (isset($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['attribute']['clip'])) {
						
						if ($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['attribute']['clip'] == 'true') {
							$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['clip'] = true;
						} else {
							$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['clip'] = false;
						}
					}
				} 
			} else {
				
				$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['tag'] = false;
				$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['block'] = false;
				$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent'] = end($Vx3g4ytafo1aevel);
				$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['dir'] = $Vc0aiseldrl3om[$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent']]['dir'];
				if (!empty($Vc0aiseldrl3om[$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent']]['text-transform'])) {
					
					if (function_exists('mb_convert_case')) {
						$Vnwufml5q3nptm = array('capitalize' => MB_CASE_TITLE, 'uppercase' => MB_CASE_UPPER, 'lowercase' => MB_CASE_LOWER);
						if (isset($Vnwufml5q3nptm[$Vc0aiseldrl3om[$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent']]['text-transform']])) {
							$Vs0htpwzsrcclement = mb_convert_case($Vs0htpwzsrcclement, $Vnwufml5q3nptm[$Vc0aiseldrl3om[$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent']]['text-transform']], $Vnwufml5q3nphis->encoding);
						}
					} elseif (!$Vnwufml5q3nphis->isunicode) {
						switch ($Vc0aiseldrl3om[$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent']]['text-transform']) {
							case 'capitalize': {
								$Vs0htpwzsrcclement = ucwords(strtolower($Vs0htpwzsrcclement));
								break;
							}
							case 'uppercase': {
								$Vs0htpwzsrcclement = strtoupper($Vs0htpwzsrcclement);
								break;
							}
							case 'lowercase': {
								$Vs0htpwzsrcclement = strtolower($Vs0htpwzsrcclement);
								break;
							}
						}
					}
				}
				$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['value'] = stripslashes($Vnwufml5q3nphis->unhtmlentities($Vs0htpwzsrcclement));
			}
			++$Vs0htpwzsrcclkey;
			++$Vl0q4noiexi4ey;
		}
		return $Vc0aiseldrl3om;
	}

	
	protected function getSpaceString() {
		$Vvt20qqut4bupacestr = chr(32);
		if ($Vnwufml5q3nphis->isUnicodeFont()) {
			$Vvt20qqut4bupacestr = chr(0).chr(32);
		}
		return $Vvt20qqut4bupacestr;
	}

	
	protected function getHashForTCPDFtagParams($Vc0aiseldrl3ata) {
		return md5(strlen($Vc0aiseldrl3ata).$Vnwufml5q3nphis->file_id.$Vc0aiseldrl3ata);
	}

	
	public function serializeTCPDFtagParameters($Vc0aiseldrl3ata) {
		$V4bajg5xhokaoded = urlencode(json_encode($Vc0aiseldrl3ata));
		return $Vnwufml5q3nphis->getHashForTCPDFtagParams($V4bajg5xhokaoded).$V4bajg5xhokaoded;
	}

	
	protected function unserializeTCPDFtagParameters($Vc0aiseldrl3ata) {
		$Vvjxcwrp4tjqash = substr($Vc0aiseldrl3ata, 0, 32);
		$V4bajg5xhokaoded = substr($Vc0aiseldrl3ata, 32);
		if ($Vvjxcwrp4tjqash != $Vnwufml5q3nphis->getHashForTCPDFtagParams($V4bajg5xhokaoded)) {
			$Vnwufml5q3nphis->Error('Invalid parameters');
		}
		return json_decode(urldecode($V4bajg5xhokaoded), true);
	}

	
	public function writeHTMLCell($Vim12f51jw5r, $Vvjxcwrp4tjq, $Vangwoo3ejfg, $Vgxufordoa4t, $Vvjxcwrp4tjqtml='', $Vgffhwoemo4c=0, $Vx3g4ytafo1an=0, $Viiychbtwwwq=false, $V14ltds3prprseth=true, $Vb5kn1gbu0ep='', $Vxwd302iban1padding=true) {
		return $Vnwufml5q3nphis->MultiCell($Vim12f51jw5r, $Vvjxcwrp4tjq, $Vvjxcwrp4tjqtml, $Vgffhwoemo4c, $Vb5kn1gbu0ep, $Viiychbtwwwq, $Vx3g4ytafo1an, $Vangwoo3ejfg, $Vgxufordoa4t, $V14ltds3prprseth, 0, true, $Vxwd302iban1padding, 0, 'T', false);
	}

	
	public function writeHTML($Vvjxcwrp4tjqtml, $Vx3g4ytafo1an=true, $Viiychbtwwwq=false, $V14ltds3prprseth=false, $Vwcmlurixvzgell=false, $Vb5kn1gbu0ep='') {
		$Vfbwtdiv4emm = $Vnwufml5q3nphis->getGraphicVars();
		
		$Vgp2srcfoe0d = $Vnwufml5q3nphis->cell_margin;
		$Vsaczmrtqtgw = $Vnwufml5q3nphis->cell_padding;
		$V1yuhsvbtlvrrevPage = $Vnwufml5q3nphis->page;
		$V1yuhsvbtlvrrevlMargin = $Vnwufml5q3nphis->lMargin;
		$V1yuhsvbtlvrrevrMargin = $Vnwufml5q3nphis->rMargin;
		$Vwcmlurixvzgurfontname = $Vnwufml5q3nphis->FontFamily;
		$Vwcmlurixvzgurfontstyle = $Vnwufml5q3nphis->FontStyle;
		$Vwcmlurixvzgurfontsize = $Vnwufml5q3nphis->FontSizePt;
		$Vwcmlurixvzgurfontascent = $Vnwufml5q3nphis->getFontAscent($Vwcmlurixvzgurfontname, $Vwcmlurixvzgurfontstyle, $Vwcmlurixvzgurfontsize);
		$Vwcmlurixvzgurfontdescent = $Vnwufml5q3nphis->getFontDescent($Vwcmlurixvzgurfontname, $Vwcmlurixvzgurfontstyle, $Vwcmlurixvzgurfontsize);
		$Vwcmlurixvzgurfontstretcing = $Vnwufml5q3nphis->font_stretching;
		$Vwcmlurixvzgurfonttracking = $Vnwufml5q3nphis->font_spacing;
		$Vnwufml5q3nphis->newline = true;
		$Vgv45dfhsyuhewline = true;
		$Vvt20qqut4butartlinepage = $Vnwufml5q3nphis->page;
		$Vetludueqmbtinstartliney = $Vnwufml5q3nphis->y;
		$Vetludueqmbtaxbottomliney = 0;
		$Vvt20qqut4butartlinex = $Vnwufml5q3nphis->x;
		$Vvt20qqut4butartliney = $Vnwufml5q3nphis->y;
		$Vgxufordoa4tshift = 0;
		$Vx3g4ytafo1aoop = 0;
		$Vwcmlurixvzgurpos = 0;
		$Vnwufml5q3nphis_method_vars = array();
		$Vppw1slbj4ovndo = false;
		$Voc1qigl3k5yaligned = false;
		$V14ltds3prprverse_dir = false; 
		$Vnwufml5q3nphis->premode = false;
		if ($Vnwufml5q3nphis->inxobj) {
			
			$V1yuhsvbtlvrask = count($Vnwufml5q3nphis->xobjects[$Vnwufml5q3nphis->xobjid]['annotations']);
		} elseif (isset($Vnwufml5q3nphis->PageAnnots[$Vnwufml5q3nphis->page])) {
			$V1yuhsvbtlvrask = count($Vnwufml5q3nphis->PageAnnots[$Vnwufml5q3nphis->page]);
		} else {
			$V1yuhsvbtlvrask = 0;
		}
		if ($Vnwufml5q3nphis->inxobj) {
			
			$Vvt20qqut4butartlinepos = strlen($Vnwufml5q3nphis->xobjects[$Vnwufml5q3nphis->xobjid]['outdata']);
		} elseif (!$Vnwufml5q3nphis->InFooter) {
			if (isset($Vnwufml5q3nphis->footerlen[$Vnwufml5q3nphis->page])) {
				$Vnwufml5q3nphis->footerpos[$Vnwufml5q3nphis->page] = $Vnwufml5q3nphis->pagelen[$Vnwufml5q3nphis->page] - $Vnwufml5q3nphis->footerlen[$Vnwufml5q3nphis->page];
			} else {
				$Vnwufml5q3nphis->footerpos[$Vnwufml5q3nphis->page] = $Vnwufml5q3nphis->pagelen[$Vnwufml5q3nphis->page];
			}
			$Vvt20qqut4butartlinepos = $Vnwufml5q3nphis->footerpos[$Vnwufml5q3nphis->page];
		} else {
			
			$Vvt20qqut4butartlinepos = $Vnwufml5q3nphis->pagelen[$Vnwufml5q3nphis->page];
		}
		$Vx3g4ytafo1aalign = $Vb5kn1gbu0ep;
		$V1yuhsvbtlvrlalign = $Vb5kn1gbu0ep;
		if ($Vnwufml5q3nphis->rtl) {
			$Vim12f51jw5r = $Vnwufml5q3nphis->x - $Vnwufml5q3nphis->lMargin;
		} else {
			$Vim12f51jw5r = $Vnwufml5q3nphis->w - $Vnwufml5q3nphis->rMargin - $Vnwufml5q3nphis->x;
		}
		$Vim12f51jw5r -= ($Vnwufml5q3nphis->cell_padding['L'] + $Vnwufml5q3nphis->cell_padding['R']);
		if ($Vwcmlurixvzgell) {
			if ($Vnwufml5q3nphis->rtl) {
				$Vnwufml5q3nphis->x -= $Vnwufml5q3nphis->cell_padding['R'];
				$Vnwufml5q3nphis->lMargin += $Vnwufml5q3nphis->cell_padding['R'];
			} else {
				$Vnwufml5q3nphis->x += $Vnwufml5q3nphis->cell_padding['L'];
				$Vnwufml5q3nphis->rMargin += $Vnwufml5q3nphis->cell_padding['L'];
			}
		}
		if ($Vnwufml5q3nphis->customlistindent >= 0) {
			$Vnwufml5q3nphis->listindent = $Vnwufml5q3nphis->customlistindent;
		} else {
			$Vnwufml5q3nphis->listindent = $Vnwufml5q3nphis->GetStringWidth('000000');
		}
		$Vnwufml5q3nphis->listindentlevel = 0;
		
		$V1yuhsvbtlvrrev_cell_height_ratio = $Vnwufml5q3nphis->cell_height_ratio;
		$V1yuhsvbtlvrrev_listnum = $Vnwufml5q3nphis->listnum;
		$V1yuhsvbtlvrrev_listordered = $Vnwufml5q3nphis->listordered;
		$V1yuhsvbtlvrrev_listcount = $Vnwufml5q3nphis->listcount;
		$V1yuhsvbtlvrrev_lispacer = $Vnwufml5q3nphis->lispacer;
		$Vnwufml5q3nphis->listnum = 0;
		$Vnwufml5q3nphis->listordered = array();
		$Vnwufml5q3nphis->listcount = array();
		$Vnwufml5q3nphis->lispacer = '';
		if ((TCPDF_STATIC::empty_string($Vnwufml5q3nphis->lasth)) OR ($V14ltds3prprseth)) {
			
			$Vnwufml5q3nphis->resetLastH();
		}
		$Vc0aiseldrl3om = $Vnwufml5q3nphis->getHtmlDomArray($Vvjxcwrp4tjqtml);
		$Vetludueqmbtaxel = count($Vc0aiseldrl3om);
		$Vl0q4noiexi4ey = 0;
		while ($Vl0q4noiexi4ey < $Vetludueqmbtaxel) {
			if ($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['tag'] AND $Vc0aiseldrl3om[$Vl0q4noiexi4ey]['opening'] AND $Vc0aiseldrl3om[$Vl0q4noiexi4ey]['hide']) {
				
				$Vvjxcwrp4tjqidden_node_key = $Vl0q4noiexi4ey;
				if ($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['self']) {
					
					++$Vl0q4noiexi4ey;
				} else {
					
					while (($Vl0q4noiexi4ey < $Vetludueqmbtaxel) AND (!$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['tag'] OR $Vc0aiseldrl3om[$Vl0q4noiexi4ey]['opening'] OR ($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent'] != $Vvjxcwrp4tjqidden_node_key))) {
						
						++$Vl0q4noiexi4ey;
					}
					++$Vl0q4noiexi4ey;
				}
			}
			if ($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['tag'] AND isset($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['attribute']['pagebreak'])) {
				
				if (($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['attribute']['pagebreak'] == 'true') OR ($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['attribute']['pagebreak'] == 'left') OR ($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['attribute']['pagebreak'] == 'right')) {
					
					$Vnwufml5q3nphis->checkPageBreak($Vnwufml5q3nphis->PageBreakTrigger + 1);
					$Vnwufml5q3nphis->htmlvspace = ($Vnwufml5q3nphis->PageBreakTrigger + 1);
				}
				if ((($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['attribute']['pagebreak'] == 'left') AND (((!$Vnwufml5q3nphis->rtl) AND (($Vnwufml5q3nphis->page % 2) == 0)) OR (($Vnwufml5q3nphis->rtl) AND (($Vnwufml5q3nphis->page % 2) != 0))))
					OR (($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['attribute']['pagebreak'] == 'right') AND (((!$Vnwufml5q3nphis->rtl) AND (($Vnwufml5q3nphis->page % 2) != 0)) OR (($Vnwufml5q3nphis->rtl) AND (($Vnwufml5q3nphis->page % 2) == 0))))) {
					
					$Vnwufml5q3nphis->checkPageBreak($Vnwufml5q3nphis->PageBreakTrigger + 1);
					$Vnwufml5q3nphis->htmlvspace = ($Vnwufml5q3nphis->PageBreakTrigger + 1);
				}
			}
			if ($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['tag'] AND $Vc0aiseldrl3om[$Vl0q4noiexi4ey]['opening'] AND isset($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['attribute']['nobr']) AND ($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['attribute']['nobr'] == 'true')) {
				if (isset($Vc0aiseldrl3om[($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent'])]['attribute']['nobr']) AND ($Vc0aiseldrl3om[($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent'])]['attribute']['nobr'] == 'true')) {
					$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['attribute']['nobr'] = false;
				} else {
					
					$Vnwufml5q3nphis->startTransaction();
					
					$Vnwufml5q3nphis_method_vars['html'] = $Vvjxcwrp4tjqtml;
					$Vnwufml5q3nphis_method_vars['ln'] = $Vx3g4ytafo1an;
					$Vnwufml5q3nphis_method_vars['fill'] = $Viiychbtwwwq;
					$Vnwufml5q3nphis_method_vars['reseth'] = $V14ltds3prprseth;
					$Vnwufml5q3nphis_method_vars['cell'] = $Vwcmlurixvzgell;
					$Vnwufml5q3nphis_method_vars['align'] = $Vb5kn1gbu0ep;
					$Vnwufml5q3nphis_method_vars['gvars'] = $Vfbwtdiv4emm;
					$Vnwufml5q3nphis_method_vars['prevPage'] = $V1yuhsvbtlvrrevPage;
					$Vnwufml5q3nphis_method_vars['prev_cell_margin'] = $Vgp2srcfoe0d;
					$Vnwufml5q3nphis_method_vars['prev_cell_padding'] = $Vsaczmrtqtgw;
					$Vnwufml5q3nphis_method_vars['prevlMargin'] = $V1yuhsvbtlvrrevlMargin;
					$Vnwufml5q3nphis_method_vars['prevrMargin'] = $V1yuhsvbtlvrrevrMargin;
					$Vnwufml5q3nphis_method_vars['curfontname'] = $Vwcmlurixvzgurfontname;
					$Vnwufml5q3nphis_method_vars['curfontstyle'] = $Vwcmlurixvzgurfontstyle;
					$Vnwufml5q3nphis_method_vars['curfontsize'] = $Vwcmlurixvzgurfontsize;
					$Vnwufml5q3nphis_method_vars['curfontascent'] = $Vwcmlurixvzgurfontascent;
					$Vnwufml5q3nphis_method_vars['curfontdescent'] = $Vwcmlurixvzgurfontdescent;
					$Vnwufml5q3nphis_method_vars['curfontstretcing'] = $Vwcmlurixvzgurfontstretcing;
					$Vnwufml5q3nphis_method_vars['curfonttracking'] = $Vwcmlurixvzgurfonttracking;
					$Vnwufml5q3nphis_method_vars['minstartliney'] = $Vetludueqmbtinstartliney;
					$Vnwufml5q3nphis_method_vars['maxbottomliney'] = $Vetludueqmbtaxbottomliney;
					$Vnwufml5q3nphis_method_vars['yshift'] = $Vgxufordoa4tshift;
					$Vnwufml5q3nphis_method_vars['startlinepage'] = $Vvt20qqut4butartlinepage;
					$Vnwufml5q3nphis_method_vars['startlinepos'] = $Vvt20qqut4butartlinepos;
					$Vnwufml5q3nphis_method_vars['startlinex'] = $Vvt20qqut4butartlinex;
					$Vnwufml5q3nphis_method_vars['startliney'] = $Vvt20qqut4butartliney;
					$Vnwufml5q3nphis_method_vars['newline'] = $Vgv45dfhsyuhewline;
					$Vnwufml5q3nphis_method_vars['loop'] = $Vx3g4ytafo1aoop;
					$Vnwufml5q3nphis_method_vars['curpos'] = $Vwcmlurixvzgurpos;
					$Vnwufml5q3nphis_method_vars['pask'] = $V1yuhsvbtlvrask;
					$Vnwufml5q3nphis_method_vars['lalign'] = $Vx3g4ytafo1aalign;
					$Vnwufml5q3nphis_method_vars['plalign'] = $V1yuhsvbtlvrlalign;
					$Vnwufml5q3nphis_method_vars['w'] = $Vim12f51jw5r;
					$Vnwufml5q3nphis_method_vars['prev_cell_height_ratio'] = $V1yuhsvbtlvrrev_cell_height_ratio;
					$Vnwufml5q3nphis_method_vars['prev_listnum'] = $V1yuhsvbtlvrrev_listnum;
					$Vnwufml5q3nphis_method_vars['prev_listordered'] = $V1yuhsvbtlvrrev_listordered;
					$Vnwufml5q3nphis_method_vars['prev_listcount'] = $V1yuhsvbtlvrrev_listcount;
					$Vnwufml5q3nphis_method_vars['prev_lispacer'] = $V1yuhsvbtlvrrev_lispacer;
					$Vnwufml5q3nphis_method_vars['fontaligned'] = $Voc1qigl3k5yaligned;
					$Vnwufml5q3nphis_method_vars['key'] = $Vl0q4noiexi4ey;
					$Vnwufml5q3nphis_method_vars['dom'] = $Vc0aiseldrl3om;
				}
			}
			
			if (($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['value'] == 'tr') AND isset($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['thead']) AND $Vc0aiseldrl3om[$Vl0q4noiexi4ey]['thead']) {
				if (isset($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent']) AND isset($Vc0aiseldrl3om[$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent']]['thead']) AND !TCPDF_STATIC::empty_string($Vc0aiseldrl3om[$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent']]['thead'])) {
					$Vnwufml5q3nphis->inthead = true;
					
					$Vnwufml5q3nphis->writeHTML($Vnwufml5q3nphis->thead, false, false, false, false, '');
					
					if (($Vnwufml5q3nphis->y < $Vnwufml5q3nphis->start_transaction_y) OR ($Vnwufml5q3nphis->checkPageBreak($Vnwufml5q3nphis->lasth, '', false))) {
						
						
						$Vnwufml5q3nphis->rollbackTransaction(true);
						
						foreach ($Vnwufml5q3nphis_method_vars as $Vz0hmukhwa4zkey => $Vz0hmukhwa4zval) {
							$$Vz0hmukhwa4zkey = $Vz0hmukhwa4zval;
						}
						
						$V3p0tae11ldw_thead = $Vnwufml5q3nphis->thead;
						$Vnwufml5q3nphis->thead = '';
						
						$V1yuhsvbtlvrre_y = $Vnwufml5q3nphis->y;
						if ((!$Vnwufml5q3nphis->checkPageBreak($Vnwufml5q3nphis->PageBreakTrigger + 1)) AND ($Vnwufml5q3nphis->y < $V1yuhsvbtlvrre_y)) {
							
							$Vvt20qqut4butartliney = $Vnwufml5q3nphis->y;
						}
						$Vnwufml5q3nphis->start_transaction_page = $Vnwufml5q3nphis->page;
						$Vnwufml5q3nphis->start_transaction_y = $Vnwufml5q3nphis->y;
						
						$Vnwufml5q3nphis->thead = $V3p0tae11ldw_thead;
						
						if (isset($Vc0aiseldrl3om[$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent']]['attribute']['cellspacing'])) {
							$V3p0tae11ldw_cellspacing = $Vnwufml5q3nphis->getHTMLUnitToUnits($Vc0aiseldrl3om[$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent']]['attribute']['cellspacing'], 1, 'px');
						} elseif (isset($Vc0aiseldrl3om[$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent']]['border-spacing'])) {
							$V3p0tae11ldw_cellspacing = $Vc0aiseldrl3om[$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent']]['border-spacing']['V'];
						} else {
							$V3p0tae11ldw_cellspacing = 0;
						}
						$Vc0aiseldrl3om[$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent']]['borderposition']['page'] = $Vnwufml5q3nphis->page;
						$Vc0aiseldrl3om[$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent']]['borderposition']['column'] = $Vnwufml5q3nphis->current_column;
						$Vc0aiseldrl3om[$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent']]['borderposition']['y'] = $Vnwufml5q3nphis->y + $V3p0tae11ldw_cellspacing;
						$Vangwoo3ejfgoffset = ($Vnwufml5q3nphis->x - $Vc0aiseldrl3om[$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent']]['borderposition']['x']);
						$Vc0aiseldrl3om[$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent']]['borderposition']['x'] += $Vangwoo3ejfgoffset;
						$Vc0aiseldrl3om[$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent']]['borderposition']['xmax'] += $Vangwoo3ejfgoffset;
						
						$Vnwufml5q3nphis->writeHTML($Vnwufml5q3nphis->thead, false, false, false, false, '');
					}
				}
				
				while ( ($Vl0q4noiexi4ey < $Vetludueqmbtaxel) AND (!(
					($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['tag'] AND $Vc0aiseldrl3om[$Vl0q4noiexi4ey]['opening'] AND ($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['value'] == 'tr') AND (!isset($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['thead']) OR !$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['thead']))
					OR ($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['tag'] AND (!$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['opening']) AND ($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['value'] == 'table'))) )) {
					++$Vl0q4noiexi4ey;
				}
			}
			if ($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['tag'] OR ($Vl0q4noiexi4ey == 0)) {
				if ((($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['value'] == 'table') OR ($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['value'] == 'tr')) AND (isset($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['align']))) {
					$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['align'] = ($Vnwufml5q3nphis->rtl) ? 'R' : 'L';
				}
				
				if ((!$Vnwufml5q3nphis->newline) AND ($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['value'] == 'img') AND (isset($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['height'])) AND ($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['height'] > 0)) {
					
					$V55vc4mewy5wmgh = $Vnwufml5q3nphis->getHTMLUnitToUnits($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['height'], ($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['fontsize'] / $Vnwufml5q3nphis->k), 'px');
					$Vxwd302iban1linebreak = false;
					if (!empty($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['width'])) {
						$V55vc4mewy5wmgw = $Vnwufml5q3nphis->getHTMLUnitToUnits($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['width'], ($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['fontsize'] / $Vnwufml5q3nphis->k), 'px', false);
						if (($V55vc4mewy5wmgw <= ($Vnwufml5q3nphis->w - $Vnwufml5q3nphis->lMargin - $Vnwufml5q3nphis->rMargin - $Vnwufml5q3nphis->cell_padding['L'] - $Vnwufml5q3nphis->cell_padding['R']))
							AND ((($Vnwufml5q3nphis->rtl) AND (($Vnwufml5q3nphis->x - $V55vc4mewy5wmgw) < ($Vnwufml5q3nphis->lMargin + $Vnwufml5q3nphis->cell_padding['L'])))
							OR ((!$Vnwufml5q3nphis->rtl) AND (($Vnwufml5q3nphis->x + $V55vc4mewy5wmgw) > ($Vnwufml5q3nphis->w - $Vnwufml5q3nphis->rMargin - $Vnwufml5q3nphis->cell_padding['R']))))) {
							
							$Vxwd302iban1linebreak = true;
							$Vnwufml5q3nphis->Ln('', $Vwcmlurixvzgell);
							if ((!$Vc0aiseldrl3om[($Vl0q4noiexi4ey-1)]['tag']) AND ($Vc0aiseldrl3om[($Vl0q4noiexi4ey-1)]['value'] == ' ')) {
								
								--$Vl0q4noiexi4ey;
							}
						}
					}
					if (!$Vxwd302iban1linebreak) {
						if ($Vnwufml5q3nphis->inPageBody()) {
							$V1yuhsvbtlvrre_y = $Vnwufml5q3nphis->y;
							
							if ((!$Vnwufml5q3nphis->checkPageBreak($V55vc4mewy5wmgh)) AND ($Vnwufml5q3nphis->y < $V1yuhsvbtlvrre_y)) {
								
								$Vvt20qqut4butartliney = $Vnwufml5q3nphis->y;
							}
						}
						if ($Vnwufml5q3nphis->page > $Vvt20qqut4butartlinepage) {
							
							if (isset($Vnwufml5q3nphis->footerlen[$Vvt20qqut4butartlinepage])) {
								$Vwcmlurixvzgurpos = $Vnwufml5q3nphis->pagelen[$Vvt20qqut4butartlinepage] - $Vnwufml5q3nphis->footerlen[$Vvt20qqut4butartlinepage];
							}
							
							$Vwfolue42pzjbuff = $Vnwufml5q3nphis->getPageBuffer($Vvt20qqut4butartlinepage);
							$Vx3g4ytafo1ainebeg = substr($Vwfolue42pzjbuff, $Vvt20qqut4butartlinepos, ($Vwcmlurixvzgurpos - $Vvt20qqut4butartlinepos));
							$Vnwufml5q3npstart = substr($Vwfolue42pzjbuff, 0, $Vvt20qqut4butartlinepos);
							$Vnwufml5q3npend = substr($Vnwufml5q3nphis->getPageBuffer($Vvt20qqut4butartlinepage), $Vwcmlurixvzgurpos);
							
							$Vnwufml5q3nphis->setPageBuffer($Vvt20qqut4butartlinepage, $Vnwufml5q3npstart.''.$Vnwufml5q3npend);
							$Vwfolue42pzjbuff = $Vnwufml5q3nphis->getPageBuffer($Vnwufml5q3nphis->page);
							$Vnwufml5q3npstart = substr($Vwfolue42pzjbuff, 0, $Vnwufml5q3nphis->cntmrk[$Vnwufml5q3nphis->page]);
							$Vnwufml5q3npend = substr($Vwfolue42pzjbuff, $Vnwufml5q3nphis->cntmrk[$Vnwufml5q3nphis->page]);
							
							$Vgxufordoa4tshift = ($Vetludueqmbtinstartliney - $Vnwufml5q3nphis->y);
							if ($Voc1qigl3k5yaligned) {
								$Vgxufordoa4tshift += ($Vwcmlurixvzgurfontsize / $Vnwufml5q3nphis->k);
							}
							$Vnwufml5q3npry = sprintf('1 0 0 1 0 %F cm', ($Vgxufordoa4tshift * $Vnwufml5q3nphis->k));
							$Vnwufml5q3nphis->setPageBuffer($Vnwufml5q3nphis->page, $Vnwufml5q3npstart."\nq\n".$Vnwufml5q3npry."\n".$Vx3g4ytafo1ainebeg."\nQ\n".$Vnwufml5q3npend);
							
							if (isset($Vnwufml5q3nphis->PageAnnots[$Vnwufml5q3nphis->page])) {
								$Vgv45dfhsyuhext_pask = count($Vnwufml5q3nphis->PageAnnots[$Vnwufml5q3nphis->page]);
							} else {
								$Vgv45dfhsyuhext_pask = 0;
							}
							if (isset($Vnwufml5q3nphis->PageAnnots[$Vvt20qqut4butartlinepage])) {
								foreach ($Vnwufml5q3nphis->PageAnnots[$Vvt20qqut4butartlinepage] as $V1yuhsvbtlvrak => $V1yuhsvbtlvrac) {
									if ($V1yuhsvbtlvrak >= $V1yuhsvbtlvrask) {
										$Vnwufml5q3nphis->PageAnnots[$Vnwufml5q3nphis->page][] = $V1yuhsvbtlvrac;
										unset($Vnwufml5q3nphis->PageAnnots[$Vvt20qqut4butartlinepage][$V1yuhsvbtlvrak]);
										$Vgv45dfhsyuhpak = count($Vnwufml5q3nphis->PageAnnots[$Vnwufml5q3nphis->page]) - 1;
										$Vnwufml5q3nphis->PageAnnots[$Vnwufml5q3nphis->page][$Vgv45dfhsyuhpak]['y'] -= $Vgxufordoa4tshift;
									}
								}
							}
							$V1yuhsvbtlvrask = $Vgv45dfhsyuhext_pask;
							$Vvt20qqut4butartlinepos = $Vnwufml5q3nphis->cntmrk[$Vnwufml5q3nphis->page];
							$Vvt20qqut4butartlinepage = $Vnwufml5q3nphis->page;
							$Vvt20qqut4butartliney = $Vnwufml5q3nphis->y;
							$Vnwufml5q3nphis->newline = false;
						}
						$Vnwufml5q3nphis->y += ($Vnwufml5q3nphis->getCellHeight($Vwcmlurixvzgurfontsize / $Vnwufml5q3nphis->k) - ($Vwcmlurixvzgurfontdescent * $Vnwufml5q3nphis->cell_height_ratio) - $V55vc4mewy5wmgh);
						$Vetludueqmbtinstartliney = min($Vnwufml5q3nphis->y, $Vetludueqmbtinstartliney);
						$Vetludueqmbtaxbottomliney = ($Vvt20qqut4butartliney + $Vnwufml5q3nphis->getCellHeight($Vwcmlurixvzgurfontsize / $Vnwufml5q3nphis->k));
					}
				} elseif (isset($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['fontname']) OR isset($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['fontstyle']) OR isset($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['fontsize']) OR isset($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['line-height'])) {
					
					$Vtfmjbpojmgiontname = $Vwcmlurixvzgurfontname;
					$Vtfmjbpojmgiontstyle = $Vwcmlurixvzgurfontstyle;
					$Vtfmjbpojmgiontsize = $Vwcmlurixvzgurfontsize;
					$Voc1qigl3k5yname = (isset($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['fontname']) ? $Vc0aiseldrl3om[$Vl0q4noiexi4ey]['fontname'] : $Vwcmlurixvzgurfontname);
					$Vshfhqyg5vyrtyle = (isset($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['fontstyle']) ? $Vc0aiseldrl3om[$Vl0q4noiexi4ey]['fontstyle'] : $Vwcmlurixvzgurfontstyle);
					$Vshfhqyg5vyrize = (isset($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['fontsize']) ? $Vc0aiseldrl3om[$Vl0q4noiexi4ey]['fontsize'] : $Vwcmlurixvzgurfontsize);
					$Voc1qigl3k5yascent = $Vnwufml5q3nphis->getFontAscent($Voc1qigl3k5yname, $Vshfhqyg5vyrtyle, $Vshfhqyg5vyrize);
					$Voc1qigl3k5ydescent = $Vnwufml5q3nphis->getFontDescent($Voc1qigl3k5yname, $Vshfhqyg5vyrtyle, $Vshfhqyg5vyrize);
					if (($Voc1qigl3k5yname != $Vwcmlurixvzgurfontname) OR ($Vshfhqyg5vyrtyle != $Vwcmlurixvzgurfontstyle) OR ($Vshfhqyg5vyrize != $Vwcmlurixvzgurfontsize)
						OR ($Vnwufml5q3nphis->cell_height_ratio != $Vc0aiseldrl3om[$Vl0q4noiexi4ey]['line-height'])
						OR ($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['tag'] AND $Vc0aiseldrl3om[$Vl0q4noiexi4ey]['opening'] AND ($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['value'] == 'li')) ) {
						if (($Vl0q4noiexi4ey < ($Vetludueqmbtaxel - 1)) AND (
								($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['tag'] AND $Vc0aiseldrl3om[$Vl0q4noiexi4ey]['opening'] AND ($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['value'] == 'li'))
								OR ($Vnwufml5q3nphis->cell_height_ratio != $Vc0aiseldrl3om[$Vl0q4noiexi4ey]['line-height'])
								OR (!$Vnwufml5q3nphis->newline AND is_numeric($Vshfhqyg5vyrize) AND is_numeric($Vwcmlurixvzgurfontsize)
								AND ($Vshfhqyg5vyrize >= 0) AND ($Vwcmlurixvzgurfontsize >= 0)
								AND (($Vshfhqyg5vyrize != $Vwcmlurixvzgurfontsize) OR ($Vshfhqyg5vyrtyle != $Vwcmlurixvzgurfontstyle) OR ($Voc1qigl3k5yname != $Vwcmlurixvzgurfontname)))
							)) {
							if ($Vnwufml5q3nphis->page > $Vvt20qqut4butartlinepage) {
								
								if (isset($Vnwufml5q3nphis->footerlen[$Vvt20qqut4butartlinepage])) {
									$Vwcmlurixvzgurpos = $Vnwufml5q3nphis->pagelen[$Vvt20qqut4butartlinepage] - $Vnwufml5q3nphis->footerlen[$Vvt20qqut4butartlinepage];
								}
								
								$Vwfolue42pzjbuff = $Vnwufml5q3nphis->getPageBuffer($Vvt20qqut4butartlinepage);
								$Vx3g4ytafo1ainebeg = substr($Vwfolue42pzjbuff, $Vvt20qqut4butartlinepos, ($Vwcmlurixvzgurpos - $Vvt20qqut4butartlinepos));
								$Vnwufml5q3npstart = substr($Vwfolue42pzjbuff, 0, $Vvt20qqut4butartlinepos);
								$Vnwufml5q3npend = substr($Vnwufml5q3nphis->getPageBuffer($Vvt20qqut4butartlinepage), $Vwcmlurixvzgurpos);
								
								$Vnwufml5q3nphis->setPageBuffer($Vvt20qqut4butartlinepage, $Vnwufml5q3npstart.''.$Vnwufml5q3npend);
								$Vwfolue42pzjbuff = $Vnwufml5q3nphis->getPageBuffer($Vnwufml5q3nphis->page);
								$Vnwufml5q3npstart = substr($Vwfolue42pzjbuff, 0, $Vnwufml5q3nphis->cntmrk[$Vnwufml5q3nphis->page]);
								$Vnwufml5q3npend = substr($Vwfolue42pzjbuff, $Vnwufml5q3nphis->cntmrk[$Vnwufml5q3nphis->page]);
								
								$Vgxufordoa4tshift = ($Vetludueqmbtinstartliney - $Vnwufml5q3nphis->y);
								$Vnwufml5q3npry = sprintf('1 0 0 1 0 %F cm', ($Vgxufordoa4tshift * $Vnwufml5q3nphis->k));
								$Vnwufml5q3nphis->setPageBuffer($Vnwufml5q3nphis->page, $Vnwufml5q3npstart."\nq\n".$Vnwufml5q3npry."\n".$Vx3g4ytafo1ainebeg."\nQ\n".$Vnwufml5q3npend);
								
								if (isset($Vnwufml5q3nphis->PageAnnots[$Vnwufml5q3nphis->page])) {
									$Vgv45dfhsyuhext_pask = count($Vnwufml5q3nphis->PageAnnots[$Vnwufml5q3nphis->page]);
								} else {
									$Vgv45dfhsyuhext_pask = 0;
								}
								if (isset($Vnwufml5q3nphis->PageAnnots[$Vvt20qqut4butartlinepage])) {
									foreach ($Vnwufml5q3nphis->PageAnnots[$Vvt20qqut4butartlinepage] as $V1yuhsvbtlvrak => $V1yuhsvbtlvrac) {
										if ($V1yuhsvbtlvrak >= $V1yuhsvbtlvrask) {
											$Vnwufml5q3nphis->PageAnnots[$Vnwufml5q3nphis->page][] = $V1yuhsvbtlvrac;
											unset($Vnwufml5q3nphis->PageAnnots[$Vvt20qqut4butartlinepage][$V1yuhsvbtlvrak]);
											$Vgv45dfhsyuhpak = count($Vnwufml5q3nphis->PageAnnots[$Vnwufml5q3nphis->page]) - 1;
											$Vnwufml5q3nphis->PageAnnots[$Vnwufml5q3nphis->page][$Vgv45dfhsyuhpak]['y'] -= $Vgxufordoa4tshift;
										}
									}
								}
								$V1yuhsvbtlvrask = $Vgv45dfhsyuhext_pask;
								$Vvt20qqut4butartlinepos = $Vnwufml5q3nphis->cntmrk[$Vnwufml5q3nphis->page];
								$Vvt20qqut4butartlinepage = $Vnwufml5q3nphis->page;
								$Vvt20qqut4butartliney = $Vnwufml5q3nphis->y;
							}
							if (!isset($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['line-height'])) {
								$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['line-height'] = $Vnwufml5q3nphis->cell_height_ratio;
							}
							if (!$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['block']) {
								if (!(isset($Vc0aiseldrl3om[($Vl0q4noiexi4ey + 1)]) AND $Vc0aiseldrl3om[($Vl0q4noiexi4ey + 1)]['tag'] AND (!$Vc0aiseldrl3om[($Vl0q4noiexi4ey + 1)]['opening']) AND ($Vc0aiseldrl3om[($Vl0q4noiexi4ey + 1)]['value'] != 'li') AND $Vc0aiseldrl3om[$Vl0q4noiexi4ey]['tag'] AND (!$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['opening']))) {
									$Vnwufml5q3nphis->y += (((($Vwcmlurixvzgurfontsize * $Vnwufml5q3nphis->cell_height_ratio) - ($Vshfhqyg5vyrize * $Vc0aiseldrl3om[$Vl0q4noiexi4ey]['line-height'])) / $Vnwufml5q3nphis->k) + $Vwcmlurixvzgurfontascent - $Voc1qigl3k5yascent - $Vwcmlurixvzgurfontdescent + $Voc1qigl3k5ydescent) / 2;
								}
								if (($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['value'] != 'sup') AND ($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['value'] != 'sub')) {
									$Vwcmlurixvzgurrent_line_align_data = array($Vl0q4noiexi4ey, $Vetludueqmbtinstartliney, $Vetludueqmbtaxbottomliney);
									if (isset($Vx3g4ytafo1aine_align_data) AND (($Vx3g4ytafo1aine_align_data[0] == ($Vl0q4noiexi4ey - 1)) OR (($Vx3g4ytafo1aine_align_data[0] == ($Vl0q4noiexi4ey - 2)) AND (isset($Vc0aiseldrl3om[($Vl0q4noiexi4ey - 1)])) AND (preg_match('/^([\s]+)$/', $Vc0aiseldrl3om[($Vl0q4noiexi4ey - 1)]['value']) > 0)))) {
										$Vetludueqmbtinstartliney = min($Vnwufml5q3nphis->y, $Vx3g4ytafo1aine_align_data[1]);
										$Vetludueqmbtaxbottomliney = max(($Vnwufml5q3nphis->y + $Vnwufml5q3nphis->getCellHeight($Vshfhqyg5vyrize / $Vnwufml5q3nphis->k)), $Vx3g4ytafo1aine_align_data[2]);
									} else {
										$Vetludueqmbtinstartliney = min($Vnwufml5q3nphis->y, $Vetludueqmbtinstartliney);
										$Vetludueqmbtaxbottomliney = max(($Vnwufml5q3nphis->y + $Vnwufml5q3nphis->getCellHeight($Vshfhqyg5vyrize / $Vnwufml5q3nphis->k)), $Vetludueqmbtaxbottomliney);
									}
									$Vx3g4ytafo1aine_align_data = $Vwcmlurixvzgurrent_line_align_data;
								}
							}
							$Vnwufml5q3nphis->cell_height_ratio = $Vc0aiseldrl3om[$Vl0q4noiexi4ey]['line-height'];
							$Voc1qigl3k5yaligned = true;
						}
						$Vnwufml5q3nphis->SetFont($Voc1qigl3k5yname, $Vshfhqyg5vyrtyle, $Vshfhqyg5vyrize);
						
						$Vnwufml5q3nphis->resetLastH();
						$Vwcmlurixvzgurfontname = $Voc1qigl3k5yname;
						$Vwcmlurixvzgurfontstyle = $Vshfhqyg5vyrtyle;
						$Vwcmlurixvzgurfontsize = $Vshfhqyg5vyrize;
						$Vwcmlurixvzgurfontascent = $Voc1qigl3k5yascent;
						$Vwcmlurixvzgurfontdescent = $Voc1qigl3k5ydescent;
					}
				}
				
				$Vdvjst2lzhefstroke = isset($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['stroke']) ? $Vc0aiseldrl3om[$Vl0q4noiexi4ey]['stroke'] : $Vnwufml5q3nphis->textstrokewidth;
				$Vdvjst2lzheffill = isset($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['fill']) ? $Vc0aiseldrl3om[$Vl0q4noiexi4ey]['fill'] : (($Vnwufml5q3nphis->textrendermode % 2) == 0);
				$Vdvjst2lzhefclip = isset($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['clip']) ? $Vc0aiseldrl3om[$Vl0q4noiexi4ey]['clip'] : ($Vnwufml5q3nphis->textrendermode > 3);
				$Vnwufml5q3nphis->setTextRenderingMode($Vdvjst2lzhefstroke, $Vdvjst2lzheffill, $Vdvjst2lzhefclip);
				if (isset($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['font-stretch']) AND ($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['font-stretch'] !== false)) {
					$Vnwufml5q3nphis->setFontStretching($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['font-stretch']);
				}
				if (isset($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['letter-spacing']) AND ($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['letter-spacing'] !== false)) {
					$Vnwufml5q3nphis->setFontSpacing($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['letter-spacing']);
				}
				if (($V1yuhsvbtlvrlalign == 'J') AND $Vc0aiseldrl3om[$Vl0q4noiexi4ey]['block']) {
					$V1yuhsvbtlvrlalign = '';
				}
				
				$Vwcmlurixvzgurpos = $Vnwufml5q3nphis->pagelen[$Vvt20qqut4butartlinepage];
				if (isset($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['bgcolor']) AND ($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['bgcolor'] !== false)) {
					$Vnwufml5q3nphis->SetFillColorArray($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['bgcolor']);
					$Vim12f51jw5rfill = true;
				} else {
					$Vim12f51jw5rfill = $Viiychbtwwwq | false;
				}
				if (isset($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['fgcolor']) AND ($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['fgcolor'] !== false)) {
					$Vnwufml5q3nphis->SetTextColorArray($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['fgcolor']);
				}
				if (isset($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['strokecolor']) AND ($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['strokecolor'] !== false)) {
					$Vnwufml5q3nphis->SetDrawColorArray($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['strokecolor']);
				}
				if (isset($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['align'])) {
					$Vx3g4ytafo1aalign = $Vc0aiseldrl3om[$Vl0q4noiexi4ey]['align'];
				}
				if (TCPDF_STATIC::empty_string($Vx3g4ytafo1aalign)) {
					$Vx3g4ytafo1aalign = $Vb5kn1gbu0ep;
				}
			}
			
			if ($Vnwufml5q3nphis->newline AND (strlen($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['value']) > 0) AND ($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['value'] != 'td') AND ($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['value'] != 'th')) {
				$Vgv45dfhsyuhewline = true;
				$Voc1qigl3k5yaligned = false;
				
				if (isset($Vvt20qqut4butartlinex)) {
					$Vgxufordoa4tshift = ($Vetludueqmbtinstartliney - $Vvt20qqut4butartliney);
					if (($Vgxufordoa4tshift > 0) OR ($Vnwufml5q3nphis->page > $Vvt20qqut4butartlinepage)) {
						$Vgxufordoa4tshift = 0;
					}
					$Vnwufml5q3np_x = 0;
					
					$Vx3g4ytafo1ainew = abs($Vnwufml5q3nphis->endlinex - $Vvt20qqut4butartlinex);
					if ($Vnwufml5q3nphis->inxobj) {
						
						$Vsvylsg2elw5 = substr($Vnwufml5q3nphis->xobjects[$Vnwufml5q3nphis->xobjid]['outdata'], 0, $Vvt20qqut4butartlinepos);
						if (isset($Vjvwtdkog1toentagpos)) {
							$Vetludueqmbtidpos = $Vjvwtdkog1toentagpos;
						} else {
							$Vetludueqmbtidpos = 0;
						}
						if ($Vetludueqmbtidpos > 0) {
							$V1yuhsvbtlvrmid = substr($Vnwufml5q3nphis->xobjects[$Vnwufml5q3nphis->xobjid]['outdata'], $Vvt20qqut4butartlinepos, ($Vetludueqmbtidpos - $Vvt20qqut4butartlinepos));
							$Vqt54avvjrsw = substr($Vnwufml5q3nphis->xobjects[$Vnwufml5q3nphis->xobjid]['outdata'], $Vetludueqmbtidpos);
						} else {
							$V1yuhsvbtlvrmid = substr($Vnwufml5q3nphis->xobjects[$Vnwufml5q3nphis->xobjid]['outdata'], $Vvt20qqut4butartlinepos);
							$Vqt54avvjrsw = '';
						}
					} else {
						$Vsvylsg2elw5 = substr($Vnwufml5q3nphis->getPageBuffer($Vvt20qqut4butartlinepage), 0, $Vvt20qqut4butartlinepos);
						if (isset($Vjvwtdkog1toentagpos) AND isset($Vnwufml5q3nphis->footerlen[$Vvt20qqut4butartlinepage]) AND (!$Vnwufml5q3nphis->InFooter)) {
							$Vnwufml5q3nphis->footerpos[$Vvt20qqut4butartlinepage] = $Vnwufml5q3nphis->pagelen[$Vvt20qqut4butartlinepage] - $Vnwufml5q3nphis->footerlen[$Vvt20qqut4butartlinepage];
							$Vetludueqmbtidpos = min($Vjvwtdkog1toentagpos, $Vnwufml5q3nphis->footerpos[$Vvt20qqut4butartlinepage]);
						} elseif (isset($Vjvwtdkog1toentagpos)) {
							$Vetludueqmbtidpos = $Vjvwtdkog1toentagpos;
						} elseif (isset($Vnwufml5q3nphis->footerlen[$Vvt20qqut4butartlinepage]) AND (!$Vnwufml5q3nphis->InFooter)) {
							$Vnwufml5q3nphis->footerpos[$Vvt20qqut4butartlinepage] = $Vnwufml5q3nphis->pagelen[$Vvt20qqut4butartlinepage] - $Vnwufml5q3nphis->footerlen[$Vvt20qqut4butartlinepage];
							$Vetludueqmbtidpos = $Vnwufml5q3nphis->footerpos[$Vvt20qqut4butartlinepage];
						} else {
							$Vetludueqmbtidpos = 0;
						}
						if ($Vetludueqmbtidpos > 0) {
							$V1yuhsvbtlvrmid = substr($Vnwufml5q3nphis->getPageBuffer($Vvt20qqut4butartlinepage), $Vvt20qqut4butartlinepos, ($Vetludueqmbtidpos - $Vvt20qqut4butartlinepos));
							$Vqt54avvjrsw = substr($Vnwufml5q3nphis->getPageBuffer($Vvt20qqut4butartlinepage), $Vetludueqmbtidpos);
						} else {
							$V1yuhsvbtlvrmid = substr($Vnwufml5q3nphis->getPageBuffer($Vvt20qqut4butartlinepage), $Vvt20qqut4butartlinepos);
							$Vqt54avvjrsw = '';
						}
					}
					if ((isset($V1yuhsvbtlvrlalign) AND ((($V1yuhsvbtlvrlalign == 'C') OR ($V1yuhsvbtlvrlalign == 'J') OR (($V1yuhsvbtlvrlalign == 'R') AND (!$Vnwufml5q3nphis->rtl)) OR (($V1yuhsvbtlvrlalign == 'L') AND ($Vnwufml5q3nphis->rtl)))))) {
						
						$Vnwufml5q3npw = $Vim12f51jw5r;
						if (($V1yuhsvbtlvrlalign == 'J') AND $Vnwufml5q3nphis->isRTLTextDir() AND ($Vnwufml5q3nphis->num_columns > 1)) {
							$Vnwufml5q3npw += $Vnwufml5q3nphis->cell_padding['R'];
						}
						if ($Vnwufml5q3nphis->lMargin != $V1yuhsvbtlvrrevlMargin) {
							$Vnwufml5q3npw += ($V1yuhsvbtlvrrevlMargin - $Vnwufml5q3nphis->lMargin);
						}
						if ($Vnwufml5q3nphis->rMargin != $V1yuhsvbtlvrrevrMargin) {
							$Vnwufml5q3npw += ($V1yuhsvbtlvrrevrMargin - $Vnwufml5q3nphis->rMargin);
						}
						$Vk1y4jyuc5nsne_space_width = $Vnwufml5q3nphis->GetStringWidth(chr(32));
						$Vgv45dfhsyuho = 0; 
						if ($Vnwufml5q3nphis->isRTLTextDir()) { 
							
							$Vsjw1s1w2nqe1 = TCPDF_STATIC::revstrpos($V1yuhsvbtlvrmid, '[(');
							if ($Vsjw1s1w2nqe1 > 0) {
								$Vsjw1s1w2nqe1 = intval($Vsjw1s1w2nqe1);
								if ($Vnwufml5q3nphis->isUnicodeFont()) {
									$Vsjw1s1w2nqe2 = intval(TCPDF_STATIC::revstrpos($V1yuhsvbtlvrmid, '[('.chr(0).chr(32)));
									$Vvt20qqut4bupacelen = 2;
								} else {
									$Vsjw1s1w2nqe2 = intval(TCPDF_STATIC::revstrpos($V1yuhsvbtlvrmid, '[('.chr(32)));
									$Vvt20qqut4bupacelen = 1;
								}
								if ($Vsjw1s1w2nqe1 == $Vsjw1s1w2nqe2) {
									$V1yuhsvbtlvrmid = substr($V1yuhsvbtlvrmid, 0, ($Vsjw1s1w2nqe1 + 2)).substr($V1yuhsvbtlvrmid, ($Vsjw1s1w2nqe1 + 2 + $Vvt20qqut4bupacelen));
									if (substr($V1yuhsvbtlvrmid, $Vsjw1s1w2nqe1, 4) == '[()]') {
										$Vx3g4ytafo1ainew -= $Vk1y4jyuc5nsne_space_width;
									} elseif ($Vsjw1s1w2nqe1 == strpos($V1yuhsvbtlvrmid, '[(')) {
										$Vgv45dfhsyuho = 1;
									}
								}
							}
						} else { 
							
							$Vsjw1s1w2nqe1 = TCPDF_STATIC::revstrpos($V1yuhsvbtlvrmid, ')]');
							if ($Vsjw1s1w2nqe1 > 0) {
								$Vsjw1s1w2nqe1 = intval($Vsjw1s1w2nqe1);
								if ($Vnwufml5q3nphis->isUnicodeFont()) {
									$Vsjw1s1w2nqe2 = intval(TCPDF_STATIC::revstrpos($V1yuhsvbtlvrmid, chr(0).chr(32).')]')) + 2;
									$Vvt20qqut4bupacelen = 2;
								} else {
									$Vsjw1s1w2nqe2 = intval(TCPDF_STATIC::revstrpos($V1yuhsvbtlvrmid, chr(32).')]')) + 1;
									$Vvt20qqut4bupacelen = 1;
								}
								if ($Vsjw1s1w2nqe1 == $Vsjw1s1w2nqe2) {
									$V1yuhsvbtlvrmid = substr($V1yuhsvbtlvrmid, 0, ($Vsjw1s1w2nqe1 - $Vvt20qqut4bupacelen)).substr($V1yuhsvbtlvrmid, $Vsjw1s1w2nqe1);
									$Vx3g4ytafo1ainew -= $Vk1y4jyuc5nsne_space_width;
								}
							}
						}
						$Vetludueqmbtdiff = ($Vnwufml5q3npw - $Vx3g4ytafo1ainew);
						if ($V1yuhsvbtlvrlalign == 'C') {
							if ($Vnwufml5q3nphis->rtl) {
								$Vnwufml5q3np_x = -($Vetludueqmbtdiff / 2);
							} else {
								$Vnwufml5q3np_x = ($Vetludueqmbtdiff / 2);
							}
						} elseif ($V1yuhsvbtlvrlalign == 'R') {
							
							$Vnwufml5q3np_x = $Vetludueqmbtdiff;
						} elseif ($V1yuhsvbtlvrlalign == 'L') {
							
							$Vnwufml5q3np_x = -$Vetludueqmbtdiff;
						} elseif (($V1yuhsvbtlvrlalign == 'J') AND ($V1yuhsvbtlvrlalign == $Vx3g4ytafo1aalign)) {
							
							if ($Vnwufml5q3nphis->isRTLTextDir()) {
								
								$Vnwufml5q3np_x = -$Vetludueqmbtdiff;
							}
							$Vgv45dfhsyuhs = 0; 
							$V1yuhsvbtlvrmidtemp = $V1yuhsvbtlvrmid;
							
							$V1yuhsvbtlvrmidtemp = preg_replace('/[\\\][\(]/x', '\\#!#OP#!#', $V1yuhsvbtlvrmidtemp);
							$V1yuhsvbtlvrmidtemp = preg_replace('/[\\\][\)]/x', '\\#!#CP#!#', $V1yuhsvbtlvrmidtemp);
							
							if (preg_match_all('/\[\(([^\)]*)\)\]/x', $V1yuhsvbtlvrmidtemp, $Vx3g4ytafo1anstring, PREG_PATTERN_ORDER)) {
								$Vvt20qqut4bupacestr = $Vnwufml5q3nphis->getSpaceString();
								$Vetludueqmbtaxkk = count($Vx3g4ytafo1anstring[1]) - 1;
								for ($Vl0q4noiexi4k=0; $Vl0q4noiexi4k <= $Vetludueqmbtaxkk; ++$Vl0q4noiexi4k) {
									
									$Vx3g4ytafo1anstring[1][$Vl0q4noiexi4k] = str_replace('#!#OP#!#', '(', $Vx3g4ytafo1anstring[1][$Vl0q4noiexi4k]);
									$Vx3g4ytafo1anstring[1][$Vl0q4noiexi4k] = str_replace('#!#CP#!#', ')', $Vx3g4ytafo1anstring[1][$Vl0q4noiexi4k]);
									
									$Vx3g4ytafo1anstring[2][$Vl0q4noiexi4k] = substr_count($Vx3g4ytafo1anstring[1][$Vl0q4noiexi4k], $Vvt20qqut4bupacestr);
									
									$Vgv45dfhsyuhs += $Vx3g4ytafo1anstring[2][$Vl0q4noiexi4k];
									$Vx3g4ytafo1anstring[3][$Vl0q4noiexi4k] = $Vgv45dfhsyuhs;
								}
								if ($Vgv45dfhsyuhs == 0) {
									$Vgv45dfhsyuhs = 1;
								}
								
								$Vvt20qqut4bupacewidth = ($Vetludueqmbtdiff / ($Vgv45dfhsyuhs - $Vgv45dfhsyuho)) * $Vnwufml5q3nphis->k;
								if ($Vnwufml5q3nphis->FontSize <= 0) {
									$Vnwufml5q3nphis->FontSize = 1;
								}
								$Vvt20qqut4bupacewidthu = -1000 * ($Vetludueqmbtdiff + (($Vgv45dfhsyuhs + $Vgv45dfhsyuho) * $Vk1y4jyuc5nsne_space_width)) / $Vgv45dfhsyuhs / $Vnwufml5q3nphis->FontSize;
								if ($Vnwufml5q3nphis->font_spacing != 0) {
									
									$Vk1y4jyuc5nssw = -1000 * $Vnwufml5q3nphis->font_spacing / $Vnwufml5q3nphis->FontSize;
									$Vvt20qqut4bupacewidthu += $Vk1y4jyuc5nssw;
								}
								$Vgv45dfhsyuhsmax = $Vgv45dfhsyuhs;
								$Vgv45dfhsyuhs = 0;
								reset($Vx3g4ytafo1anstring);
								$Vcwtctilquugset = 0;
								$Vvt20qqut4butrcount = 0;
								$V1yuhsvbtlvrrev_epsposbeg = 0;
								$Vdvjst2lzhefpos = 0;
								if ($Vnwufml5q3nphis->isRTLTextDir()) {
									$Vdvjst2lzhefpos = $Vnwufml5q3nphis->wPt;
								}
								while (preg_match('/([0-9\.\+\-]*)[\s](Td|cm|m|l|c|re)[\s]/x', $V1yuhsvbtlvrmid, $Vvt20qqut4butrpiece, PREG_OFFSET_CAPTURE, $Vcwtctilquugset) == 1) {
									
									$Vvt20qqut4butroffset = strpos($V1yuhsvbtlvrmid, '[(', $Vcwtctilquugset);
									if (($Vvt20qqut4butroffset !== false) AND ($Vvt20qqut4butroffset <= $Vvt20qqut4butrpiece[2][1])) {
										
										$Vcwtctilquugset = strpos($V1yuhsvbtlvrmid, ')]', $Vvt20qqut4butroffset);
										while (($Vcwtctilquugset !== false) AND ($V1yuhsvbtlvrmid[($Vcwtctilquugset - 1)] == '\\')) {
											$Vcwtctilquugset = strpos($V1yuhsvbtlvrmid, ')]', ($Vcwtctilquugset + 1));
										}
										if ($Vcwtctilquugset === false) {
											$Vnwufml5q3nphis->Error('HTML Justification: malformed PDF code.');
										}
										continue;
									}
									if ($Vnwufml5q3nphis->isRTLTextDir()) {
										$Vvt20qqut4bupacew = ($Vvt20qqut4bupacewidth * ($Vgv45dfhsyuhsmax - $Vgv45dfhsyuhs));
									} else {
										$Vvt20qqut4bupacew = ($Vvt20qqut4bupacewidth * $Vgv45dfhsyuhs);
									}
									$Vcwtctilquugset = $Vvt20qqut4butrpiece[2][1] + strlen($Vvt20qqut4butrpiece[2][0]);
									$Vs0htpwzsrccpsposend = strpos($V1yuhsvbtlvrmid, $Vnwufml5q3nphis->epsmarker.'Q', $Vcwtctilquugset);				
									if ($Vs0htpwzsrccpsposend !== null) {
										$Vs0htpwzsrccpsposend += strlen($Vnwufml5q3nphis->epsmarker.'Q');
										$Vs0htpwzsrccpsposbeg = strpos($V1yuhsvbtlvrmid, 'q'.$Vnwufml5q3nphis->epsmarker, $Vcwtctilquugset);
										if ($Vs0htpwzsrccpsposbeg === null) {
											$Vs0htpwzsrccpsposbeg = strpos($V1yuhsvbtlvrmid, 'q'.$Vnwufml5q3nphis->epsmarker, ($V1yuhsvbtlvrrev_epsposbeg - 6));
											$V1yuhsvbtlvrrev_epsposbeg = $Vs0htpwzsrccpsposbeg;
										}
										if (($Vs0htpwzsrccpsposbeg > 0) AND ($Vs0htpwzsrccpsposend > 0) AND ($Vcwtctilquugset > $Vs0htpwzsrccpsposbeg) AND ($Vcwtctilquugset < $Vs0htpwzsrccpsposend)) {
											
											$Vnwufml5q3nprx = sprintf('1 0 0 1 %F 0 cm', $Vvt20qqut4bupacew);
											$V1yuhsvbtlvrmid_b = substr($V1yuhsvbtlvrmid, 0, $Vs0htpwzsrccpsposbeg);
											$V1yuhsvbtlvrmid_m = substr($V1yuhsvbtlvrmid, $Vs0htpwzsrccpsposbeg, ($Vs0htpwzsrccpsposend - $Vs0htpwzsrccpsposbeg));
											$V1yuhsvbtlvrmid_e = substr($V1yuhsvbtlvrmid, $Vs0htpwzsrccpsposend);
											$V1yuhsvbtlvrmid = $V1yuhsvbtlvrmid_b."\nq\n".$Vnwufml5q3nprx."\n".$V1yuhsvbtlvrmid_m."\nQ\n".$V1yuhsvbtlvrmid_e;
											$Vcwtctilquugset = $Vs0htpwzsrccpsposend;
											continue;
										}
									}
									$Vwcmlurixvzgurrentxpos = 0;
									
									switch ($Vvt20qqut4butrpiece[2][0]) {
										case 'Td':
										case 'cm':
										case 'm':
										case 'l': {
											
											preg_match('/([0-9\.\+\-]*)[\s]('.$Vvt20qqut4butrpiece[1][0].')[\s]('.$Vvt20qqut4butrpiece[2][0].')([\s]*)/x', $V1yuhsvbtlvrmid, $Vangwoo3ejfgmatches);
											if (!isset($Vangwoo3ejfgmatches[1])) {
												break;
											}
											$Vwcmlurixvzgurrentxpos = $Vangwoo3ejfgmatches[1];
											$Vdvjst2lzhefpos = $Vwcmlurixvzgurrentxpos;
											if (($Vvt20qqut4butrcount <= $Vetludueqmbtaxkk) AND ($Vvt20qqut4butrpiece[2][0] == 'Td')) {
												$Vgv45dfhsyuhs = $Vx3g4ytafo1anstring[3][$Vvt20qqut4butrcount];
												if ($Vnwufml5q3nphis->isRTLTextDir()) {
													$Vvt20qqut4bupacew = ($Vvt20qqut4bupacewidth * ($Vgv45dfhsyuhsmax - $Vgv45dfhsyuhs));
												}
												++$Vvt20qqut4butrcount;
											}
											
											if (preg_match('/([0-9\.\+\-]*)[\s]('.$Vvt20qqut4butrpiece[1][0].')[\s]('.$Vvt20qqut4butrpiece[2][0].')([\s]*)/x', $V1yuhsvbtlvrmid, $V1yuhsvbtlvrmatch) == 1) {
												$Vgv45dfhsyuhewpmid = sprintf('%F',(floatval($V1yuhsvbtlvrmatch[1]) + $Vvt20qqut4bupacew)).' '.$V1yuhsvbtlvrmatch[2].' x*#!#*x'.$V1yuhsvbtlvrmatch[3].$V1yuhsvbtlvrmatch[4];
												$V1yuhsvbtlvrmid = str_replace($V1yuhsvbtlvrmatch[0], $Vgv45dfhsyuhewpmid, $V1yuhsvbtlvrmid);
												unset($V1yuhsvbtlvrmatch, $Vgv45dfhsyuhewpmid);
											}
											break;
										}
										case 're': {
											
											if (!TCPDF_STATIC::empty_string($Vnwufml5q3nphis->lispacer)) {
												$Vnwufml5q3nphis->lispacer = '';
												continue;
											}
											preg_match('/([0-9\.\+\-]*)[\s]([0-9\.\+\-]*)[\s]([0-9\.\+\-]*)[\s]('.$Vvt20qqut4butrpiece[1][0].')[\s](re)([\s]*)/x', $V1yuhsvbtlvrmid, $Vangwoo3ejfgmatches);
											if (!isset($Vangwoo3ejfgmatches[1])) {
												break;
											}
											$Vwcmlurixvzgurrentxpos = $Vangwoo3ejfgmatches[1];
											$Vangwoo3ejfg_diff = 0;
											$Vim12f51jw5r_diff = 0;
											if ($Vnwufml5q3nphis->isRTLTextDir()) { 
												if ($Vwcmlurixvzgurrentxpos < $Vdvjst2lzhefpos) {
													$Vangwoo3ejfg_diff = ($Vvt20qqut4bupacewidth * ($Vgv45dfhsyuhsmax - $Vx3g4ytafo1anstring[3][$Vvt20qqut4butrcount]));
													$Vim12f51jw5r_diff = ($Vvt20qqut4bupacewidth * $Vx3g4ytafo1anstring[2][$Vvt20qqut4butrcount]);
												} else {
													if ($Vvt20qqut4butrcount > 0) {
														$Vangwoo3ejfg_diff = ($Vvt20qqut4bupacewidth * ($Vgv45dfhsyuhsmax - $Vx3g4ytafo1anstring[3][($Vvt20qqut4butrcount - 1)]));
														$Vim12f51jw5r_diff = ($Vvt20qqut4bupacewidth * $Vx3g4ytafo1anstring[2][($Vvt20qqut4butrcount - 1)]);
													}
												}
											} else { 
												if ($Vwcmlurixvzgurrentxpos > $Vdvjst2lzhefpos) {
													if ($Vvt20qqut4butrcount > 0) {
														$Vangwoo3ejfg_diff = ($Vvt20qqut4bupacewidth * $Vx3g4ytafo1anstring[3][($Vvt20qqut4butrcount - 1)]);
													}
													$Vim12f51jw5r_diff = ($Vvt20qqut4bupacewidth * $Vx3g4ytafo1anstring[2][$Vvt20qqut4butrcount]);
												} else {
													if ($Vvt20qqut4butrcount > 1) {
														$Vangwoo3ejfg_diff = ($Vvt20qqut4bupacewidth * $Vx3g4ytafo1anstring[3][($Vvt20qqut4butrcount - 2)]);
													}
													if ($Vvt20qqut4butrcount > 0) {
														$Vim12f51jw5r_diff = ($Vvt20qqut4bupacewidth * $Vx3g4ytafo1anstring[2][($Vvt20qqut4butrcount - 1)]);
													}
												}
											}
											if (preg_match('/('.$Vangwoo3ejfgmatches[1].')[\s]('.$Vangwoo3ejfgmatches[2].')[\s]('.$Vangwoo3ejfgmatches[3].')[\s]('.$Vvt20qqut4butrpiece[1][0].')[\s](re)([\s]*)/x', $V1yuhsvbtlvrmid, $V1yuhsvbtlvrmatch) == 1) {
												$Vgv45dfhsyuhewx = sprintf('%F',(floatval($V1yuhsvbtlvrmatch[1]) + $Vangwoo3ejfg_diff));
												$Vgv45dfhsyuheww = sprintf('%F',(floatval($V1yuhsvbtlvrmatch[3]) + $Vim12f51jw5r_diff));
												$Vgv45dfhsyuhewpmid = $Vgv45dfhsyuhewx.' '.$V1yuhsvbtlvrmatch[2].' '.$Vgv45dfhsyuheww.' '.$V1yuhsvbtlvrmatch[4].' x*#!#*x'.$V1yuhsvbtlvrmatch[5].$V1yuhsvbtlvrmatch[6];
												$V1yuhsvbtlvrmid = str_replace($V1yuhsvbtlvrmatch[0], $Vgv45dfhsyuhewpmid, $V1yuhsvbtlvrmid);
												unset($V1yuhsvbtlvrmatch, $Vgv45dfhsyuhewpmid, $Vgv45dfhsyuhewx, $Vgv45dfhsyuheww);
											}
											break;
										}
										case 'c': {
											
											preg_match('/([0-9\.\+\-]*)[\s]([0-9\.\+\-]*)[\s]([0-9\.\+\-]*)[\s]([0-9\.\+\-]*)[\s]([0-9\.\+\-]*)[\s]('.$Vvt20qqut4butrpiece[1][0].')[\s](c)([\s]*)/x', $V1yuhsvbtlvrmid, $Vangwoo3ejfgmatches);
											if (!isset($Vangwoo3ejfgmatches[1])) {
												break;
											}
											$Vwcmlurixvzgurrentxpos = $Vangwoo3ejfgmatches[1];
											
											if (preg_match('/('.$Vangwoo3ejfgmatches[1].')[\s]('.$Vangwoo3ejfgmatches[2].')[\s]('.$Vangwoo3ejfgmatches[3].')[\s]('.$Vangwoo3ejfgmatches[4].')[\s]('.$Vangwoo3ejfgmatches[5].')[\s]('.$Vvt20qqut4butrpiece[1][0].')[\s](c)([\s]*)/x', $V1yuhsvbtlvrmid, $V1yuhsvbtlvrmatch) == 1) {
												$Vgv45dfhsyuhewx1 = sprintf('%F',(floatval($V1yuhsvbtlvrmatch[1]) + $Vvt20qqut4bupacew));
												$Vgv45dfhsyuhewx2 = sprintf('%F',(floatval($V1yuhsvbtlvrmatch[3]) + $Vvt20qqut4bupacew));
												$Vgv45dfhsyuhewx3 = sprintf('%F',(floatval($V1yuhsvbtlvrmatch[5]) + $Vvt20qqut4bupacew));
												$Vgv45dfhsyuhewpmid = $Vgv45dfhsyuhewx1.' '.$V1yuhsvbtlvrmatch[2].' '.$Vgv45dfhsyuhewx2.' '.$V1yuhsvbtlvrmatch[4].' '.$Vgv45dfhsyuhewx3.' '.$V1yuhsvbtlvrmatch[6].' x*#!#*x'.$V1yuhsvbtlvrmatch[7].$V1yuhsvbtlvrmatch[8];
												$V1yuhsvbtlvrmid = str_replace($V1yuhsvbtlvrmatch[0], $Vgv45dfhsyuhewpmid, $V1yuhsvbtlvrmid);
												unset($V1yuhsvbtlvrmatch, $Vgv45dfhsyuhewpmid, $Vgv45dfhsyuhewx1, $Vgv45dfhsyuhewx2, $Vgv45dfhsyuhewx3);
											}
											break;
										}
									}
									
									$Vwcmlurixvzgxpos = ($Vwcmlurixvzgurrentxpos / $Vnwufml5q3nphis->k);
									$Vx3g4ytafo1ampos = ($Vnwufml5q3nphis->lMargin + $Vnwufml5q3nphis->cell_padding['L'] + $Vnwufml5q3nphis->feps);
									if ($Vnwufml5q3nphis->inxobj) {
										
										foreach ($Vnwufml5q3nphis->xobjects[$Vnwufml5q3nphis->xobjid]['annotations'] as $V1yuhsvbtlvrak => $V1yuhsvbtlvrac) {
											if (($V1yuhsvbtlvrac['y'] >= $Vetludueqmbtinstartliney) AND (($V1yuhsvbtlvrac['x'] * $Vnwufml5q3nphis->k) >= ($Vwcmlurixvzgurrentxpos - $Vnwufml5q3nphis->feps)) AND (($V1yuhsvbtlvrac['x'] * $Vnwufml5q3nphis->k) <= ($Vwcmlurixvzgurrentxpos + $Vnwufml5q3nphis->feps))) {
												if ($Vwcmlurixvzgxpos > $Vx3g4ytafo1ampos) {
													$Vnwufml5q3nphis->xobjects[$Vnwufml5q3nphis->xobjid]['annotations'][$V1yuhsvbtlvrak]['x'] += ($Vvt20qqut4bupacew / $Vnwufml5q3nphis->k);
													$Vnwufml5q3nphis->xobjects[$Vnwufml5q3nphis->xobjid]['annotations'][$V1yuhsvbtlvrak]['w'] += (($Vvt20qqut4bupacewidth * $V1yuhsvbtlvrac['numspaces']) / $Vnwufml5q3nphis->k);
												} else {
													$Vnwufml5q3nphis->xobjects[$Vnwufml5q3nphis->xobjid]['annotations'][$V1yuhsvbtlvrak]['w'] += (($Vvt20qqut4bupacewidth * $V1yuhsvbtlvrac['numspaces']) / $Vnwufml5q3nphis->k);
												}
												break;
											}
										}
									} elseif (isset($Vnwufml5q3nphis->PageAnnots[$Vnwufml5q3nphis->page])) {
										foreach ($Vnwufml5q3nphis->PageAnnots[$Vnwufml5q3nphis->page] as $V1yuhsvbtlvrak => $V1yuhsvbtlvrac) {
											if (($V1yuhsvbtlvrac['y'] >= $Vetludueqmbtinstartliney) AND (($V1yuhsvbtlvrac['x'] * $Vnwufml5q3nphis->k) >= ($Vwcmlurixvzgurrentxpos - $Vnwufml5q3nphis->feps)) AND (($V1yuhsvbtlvrac['x'] * $Vnwufml5q3nphis->k) <= ($Vwcmlurixvzgurrentxpos + $Vnwufml5q3nphis->feps))) {
												if ($Vwcmlurixvzgxpos > $Vx3g4ytafo1ampos) {
													$Vnwufml5q3nphis->PageAnnots[$Vnwufml5q3nphis->page][$V1yuhsvbtlvrak]['x'] += ($Vvt20qqut4bupacew / $Vnwufml5q3nphis->k);
													$Vnwufml5q3nphis->PageAnnots[$Vnwufml5q3nphis->page][$V1yuhsvbtlvrak]['w'] += (($Vvt20qqut4bupacewidth * $V1yuhsvbtlvrac['numspaces']) / $Vnwufml5q3nphis->k);
												} else {
													$Vnwufml5q3nphis->PageAnnots[$Vnwufml5q3nphis->page][$V1yuhsvbtlvrak]['w'] += (($Vvt20qqut4bupacewidth * $V1yuhsvbtlvrac['numspaces']) / $Vnwufml5q3nphis->k);
												}
												break;
											}
										}
									}
								} 
								
								$V1yuhsvbtlvrmid = str_replace('x*#!#*x', '', $V1yuhsvbtlvrmid);
								if ($Vnwufml5q3nphis->isUnicodeFont()) {
									
									$Vvt20qqut4bupacew = $Vvt20qqut4bupacewidthu;
									if ($Vnwufml5q3nphis->font_stretching != 100) {
										
										$Vvt20qqut4bupacew /= ($Vnwufml5q3nphis->font_stretching / 100);
									}
									
									$Vsjw1s1w2nqe = 0;
									$V1yuhsvbtlvrmid = preg_replace('/[\\\][\(]/x', '\\#!#OP#!#', $V1yuhsvbtlvrmid);
									$V1yuhsvbtlvrmid = preg_replace('/[\\\][\)]/x', '\\#!#CP#!#', $V1yuhsvbtlvrmid);
									if (preg_match_all('/\[\(([^\)]*)\)\]/x', $V1yuhsvbtlvrmid, $V1yuhsvbtlvramatch) > 0) {
										foreach($V1yuhsvbtlvramatch[0] as $V1yuhsvbtlvrk => $V1yuhsvbtlvrmatch) {
											$V14ltds3prprplace = $V1yuhsvbtlvramatch[1][$V1yuhsvbtlvrk];
											$V14ltds3prprplace = str_replace('#!#OP#!#', '(', $V14ltds3prprplace);
											$V14ltds3prprplace = str_replace('#!#CP#!#', ')', $V14ltds3prprplace);
											$Vgv45dfhsyuhewpmid = '[('.str_replace(chr(0).chr(32), ') '.sprintf('%F', $Vvt20qqut4bupacew).' (', $V14ltds3prprplace).')]';
											$Vsjw1s1w2nqe = strpos($V1yuhsvbtlvrmid, $V1yuhsvbtlvrmatch, $Vsjw1s1w2nqe);
											if ($Vsjw1s1w2nqe !== FALSE) {
												$V1yuhsvbtlvrmid = substr_replace($V1yuhsvbtlvrmid, $Vgv45dfhsyuhewpmid, $Vsjw1s1w2nqe, strlen($V1yuhsvbtlvrmatch));
											}
											++$Vsjw1s1w2nqe;
										}
										unset($V1yuhsvbtlvramatch);
									}
									if ($Vnwufml5q3nphis->inxobj) {
										
										$Vnwufml5q3nphis->xobjects[$Vnwufml5q3nphis->xobjid]['outdata'] = $Vsvylsg2elw5."\n".$V1yuhsvbtlvrmid."\n".$Vqt54avvjrsw;
									} else {
										$Vnwufml5q3nphis->setPageBuffer($Vvt20qqut4butartlinepage, $Vsvylsg2elw5."\n".$V1yuhsvbtlvrmid."\n".$Vqt54avvjrsw);
									}
									$Vs0htpwzsrccndlinepos = strlen($Vsvylsg2elw5."\n".$V1yuhsvbtlvrmid."\n");
								} else {
									
									if ($Vnwufml5q3nphis->font_stretching != 100) {
										
										$Vvt20qqut4bupacewidth /= ($Vnwufml5q3nphis->font_stretching / 100);
									}
									$V1zbfvr4umtc = sprintf('%F Tw', $Vvt20qqut4bupacewidth);
									$V1yuhsvbtlvrmid = preg_replace("/\[\(/x", $V1zbfvr4umtc.' [(', $V1yuhsvbtlvrmid);
									if ($Vnwufml5q3nphis->inxobj) {
										
										$Vnwufml5q3nphis->xobjects[$Vnwufml5q3nphis->xobjid]['outdata'] = $Vsvylsg2elw5."\n".$V1yuhsvbtlvrmid."\nBT 0 Tw ET\n".$Vqt54avvjrsw;
									} else {
										$Vnwufml5q3nphis->setPageBuffer($Vvt20qqut4butartlinepage, $Vsvylsg2elw5."\n".$V1yuhsvbtlvrmid."\nBT 0 Tw ET\n".$Vqt54avvjrsw);
									}
									$Vs0htpwzsrccndlinepos = strlen($Vsvylsg2elw5."\n".$V1yuhsvbtlvrmid."\nBT 0 Tw ET\n");
								}
							}
						} 
					} 
					if (($Vnwufml5q3np_x != 0) OR ($Vgxufordoa4tshift < 0)) {
						
						$Vnwufml5q3nprx = sprintf('1 0 0 1 %F %F cm', ($Vnwufml5q3np_x * $Vnwufml5q3nphis->k), ($Vgxufordoa4tshift * $Vnwufml5q3nphis->k));
						$Vsvylsg2elw5 .= "\nq\n".$Vnwufml5q3nprx."\n".$V1yuhsvbtlvrmid."\nQ\n";
						$Vs0htpwzsrccndlinepos = strlen($Vsvylsg2elw5);
						if ($Vnwufml5q3nphis->inxobj) {
							
							$Vnwufml5q3nphis->xobjects[$Vnwufml5q3nphis->xobjid]['outdata'] = $Vsvylsg2elw5.$Vqt54avvjrsw;
							foreach ($Vnwufml5q3nphis->xobjects[$Vnwufml5q3nphis->xobjid]['annotations'] as $V1yuhsvbtlvrak => $V1yuhsvbtlvrac) {
								if ($V1yuhsvbtlvrak >= $V1yuhsvbtlvrask) {
									$Vnwufml5q3nphis->xobjects[$Vnwufml5q3nphis->xobjid]['annotations'][$V1yuhsvbtlvrak]['x'] += $Vnwufml5q3np_x;
									$Vnwufml5q3nphis->xobjects[$Vnwufml5q3nphis->xobjid]['annotations'][$V1yuhsvbtlvrak]['y'] -= $Vgxufordoa4tshift;
								}
							}
						} else {
							$Vnwufml5q3nphis->setPageBuffer($Vvt20qqut4butartlinepage, $Vsvylsg2elw5.$Vqt54avvjrsw);
							
							if (isset($Vnwufml5q3nphis->PageAnnots[$Vnwufml5q3nphis->page])) {
								foreach ($Vnwufml5q3nphis->PageAnnots[$Vnwufml5q3nphis->page] as $V1yuhsvbtlvrak => $V1yuhsvbtlvrac) {
									if ($V1yuhsvbtlvrak >= $V1yuhsvbtlvrask) {
										$Vnwufml5q3nphis->PageAnnots[$Vnwufml5q3nphis->page][$V1yuhsvbtlvrak]['x'] += $Vnwufml5q3np_x;
										$Vnwufml5q3nphis->PageAnnots[$Vnwufml5q3nphis->page][$V1yuhsvbtlvrak]['y'] -= $Vgxufordoa4tshift;
									}
								}
							}
						}
						$Vnwufml5q3nphis->y -= $Vgxufordoa4tshift;
					}
				}
				$V1yuhsvbtlvrbrk = $Vnwufml5q3nphis->checkPageBreak($Vnwufml5q3nphis->lasth);
				$Vnwufml5q3nphis->newline = false;
				$Vvt20qqut4butartlinex = $Vnwufml5q3nphis->x;
				$Vvt20qqut4butartliney = $Vnwufml5q3nphis->y;
				if ($Vc0aiseldrl3om[$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent']]['value'] == 'sup') {
					$Vvt20qqut4butartliney -= ((0.3 * $Vnwufml5q3nphis->FontSizePt) / $Vnwufml5q3nphis->k);
				} elseif ($Vc0aiseldrl3om[$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent']]['value'] == 'sub') {
					$Vvt20qqut4butartliney -= (($Vnwufml5q3nphis->FontSizePt / 0.7) / $Vnwufml5q3nphis->k);
				} else {
					$Vetludueqmbtinstartliney = $Vvt20qqut4butartliney;
					$Vetludueqmbtaxbottomliney = ($Vnwufml5q3nphis->y + $Vnwufml5q3nphis->getCellHeight($Vshfhqyg5vyrize / $Vnwufml5q3nphis->k));
				}
				$Vvt20qqut4butartlinepage = $Vnwufml5q3nphis->page;
				if (isset($Vs0htpwzsrccndlinepos) AND (!$V1yuhsvbtlvrbrk)) {
					$Vvt20qqut4butartlinepos = $Vs0htpwzsrccndlinepos;
				} else {
					if ($Vnwufml5q3nphis->inxobj) {
						
						$Vvt20qqut4butartlinepos = strlen($Vnwufml5q3nphis->xobjects[$Vnwufml5q3nphis->xobjid]['outdata']);
					} elseif (!$Vnwufml5q3nphis->InFooter) {
						if (isset($Vnwufml5q3nphis->footerlen[$Vnwufml5q3nphis->page])) {
							$Vnwufml5q3nphis->footerpos[$Vnwufml5q3nphis->page] = $Vnwufml5q3nphis->pagelen[$Vnwufml5q3nphis->page] - $Vnwufml5q3nphis->footerlen[$Vnwufml5q3nphis->page];
						} else {
							$Vnwufml5q3nphis->footerpos[$Vnwufml5q3nphis->page] = $Vnwufml5q3nphis->pagelen[$Vnwufml5q3nphis->page];
						}
						$Vvt20qqut4butartlinepos = $Vnwufml5q3nphis->footerpos[$Vnwufml5q3nphis->page];
					} else {
						$Vvt20qqut4butartlinepos = $Vnwufml5q3nphis->pagelen[$Vnwufml5q3nphis->page];
					}
				}
				unset($Vs0htpwzsrccndlinepos);
				$V1yuhsvbtlvrlalign = $Vx3g4ytafo1aalign;
				if (isset($Vnwufml5q3nphis->PageAnnots[$Vnwufml5q3nphis->page])) {
					$V1yuhsvbtlvrask = count($Vnwufml5q3nphis->PageAnnots[$Vnwufml5q3nphis->page]);
				} else {
					$V1yuhsvbtlvrask = 0;
				}
				if (!($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['tag'] AND !$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['opening'] AND ($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['value'] == 'table')
					AND (isset($Vnwufml5q3nphis->emptypagemrk[$Vnwufml5q3nphis->page]))
					AND ($Vnwufml5q3nphis->emptypagemrk[$Vnwufml5q3nphis->page] == $Vnwufml5q3nphis->pagelen[$Vnwufml5q3nphis->page]))) {
					$Vnwufml5q3nphis->SetFont($Voc1qigl3k5yname, $Vshfhqyg5vyrtyle, $Vshfhqyg5vyrize);
					if ($Vim12f51jw5rfill) {
						$Vnwufml5q3nphis->SetFillColorArray($Vnwufml5q3nphis->bgcolor);
					}
				}
			} 
			if (isset($Vjvwtdkog1toentagpos)) {
				unset($Vjvwtdkog1toentagpos);
			}
			if ($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['tag']) {
				if ($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['opening']) {
					
					if (isset($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['text-indent']) AND $Vc0aiseldrl3om[$Vl0q4noiexi4ey]['block']) {
						$Vnwufml5q3nphis->textindent = $Vc0aiseldrl3om[$Vl0q4noiexi4ey]['text-indent'];
						$Vnwufml5q3nphis->newline = true;
					}
					
					if (($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['value'] == 'table') AND isset($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['cols']) AND ($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['cols'] > 0)) {
						
						if ($Vnwufml5q3nphis->rtl) {
							$Vim12f51jw5rtmp = $Vnwufml5q3nphis->x - $Vnwufml5q3nphis->lMargin;
						} else {
							$Vim12f51jw5rtmp = $Vnwufml5q3nphis->w - $Vnwufml5q3nphis->rMargin - $Vnwufml5q3nphis->x;
						}
						
						if (isset($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['attribute']['cellspacing'])) {
							$Vwcmlurixvzglsp = $Vnwufml5q3nphis->getHTMLUnitToUnits($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['attribute']['cellspacing'], 1, 'px');
							$Vwcmlurixvzgellspacing = array('H' => $Vwcmlurixvzglsp, 'V' => $Vwcmlurixvzglsp);
						} elseif (isset($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['border-spacing'])) {
							$Vwcmlurixvzgellspacing = $Vc0aiseldrl3om[$Vl0q4noiexi4ey]['border-spacing'];
						} else {
							$Vwcmlurixvzgellspacing = array('H' => 0, 'V' => 0);
						}
						
						if (isset($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['width'])) {
							$Vnwufml5q3npable_width = $Vnwufml5q3nphis->getHTMLUnitToUnits($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['width'], $Vim12f51jw5rtmp, 'px');
						} else {
							$Vnwufml5q3npable_width = $Vim12f51jw5rtmp;
						}
						$Vnwufml5q3npable_width -= (2 * $Vwcmlurixvzgellspacing['H']);
						if (!$Vnwufml5q3nphis->inthead) {
							$Vnwufml5q3nphis->y += $Vwcmlurixvzgellspacing['V'];
						}
						if ($Vnwufml5q3nphis->rtl) {
							$Vwcmlurixvzgellspacingx = -$Vwcmlurixvzgellspacing['H'];
						} else {
							$Vwcmlurixvzgellspacingx = $Vwcmlurixvzgellspacing['H'];
						}
						
						$Vnwufml5q3npable_columns_width = ($Vnwufml5q3npable_width - ($Vwcmlurixvzgellspacing['H'] * ($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['cols'] - 1)));
						
						$Vnwufml5q3npable_min_column_width = ($Vnwufml5q3npable_columns_width / $Vc0aiseldrl3om[$Vl0q4noiexi4ey]['cols']);
						
						$Vnwufml5q3npable_colwidths = array_fill(0, $Vc0aiseldrl3om[$Vl0q4noiexi4ey]['cols'], $Vnwufml5q3npable_min_column_width);
					}
					
					if ($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['value'] == 'tr') {
						
						$Vwcmlurixvzgolid = 0;
					}
					
					if (($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['value'] == 'td') OR ($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['value'] == 'th')) {
						$Vnwufml5q3nprid = $Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent'];
						$Vnwufml5q3npable_el = $Vc0aiseldrl3om[$Vnwufml5q3nprid]['parent'];
						if (!isset($Vc0aiseldrl3om[$Vnwufml5q3npable_el]['cols'])) {
							$Vc0aiseldrl3om[$Vnwufml5q3npable_el]['cols'] = $Vc0aiseldrl3om[$Vnwufml5q3nprid]['cols'];
						}
						
						$Vnwufml5q3npdborder = 0;
						if (isset($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['border']) AND !empty($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['border'])) {
							$Vnwufml5q3npdborder = $Vc0aiseldrl3om[$Vl0q4noiexi4ey]['border'];
						}
						$Vwcmlurixvzgolspan = intval($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['attribute']['colspan']);
						if ($Vwcmlurixvzgolspan <= 0) {
							$Vwcmlurixvzgolspan = 1;
						}
						$Vk1y4jyuc5nsld_cell_padding = $Vnwufml5q3nphis->cell_padding;
						if (isset($Vc0aiseldrl3om[($Vc0aiseldrl3om[$Vnwufml5q3nprid]['parent'])]['attribute']['cellpadding'])) {
							$Vwcmlurixvzgrclpd = $Vnwufml5q3nphis->getHTMLUnitToUnits($Vc0aiseldrl3om[($Vc0aiseldrl3om[$Vnwufml5q3nprid]['parent'])]['attribute']['cellpadding'], 1, 'px');
							$Vwcmlurixvzgurrent_cell_padding = array('L' => $Vwcmlurixvzgrclpd, 'T' => $Vwcmlurixvzgrclpd, 'R' => $Vwcmlurixvzgrclpd, 'B' => $Vwcmlurixvzgrclpd);
						} elseif (isset($Vc0aiseldrl3om[($Vc0aiseldrl3om[$Vnwufml5q3nprid]['parent'])]['padding'])) {
							$Vwcmlurixvzgurrent_cell_padding = $Vc0aiseldrl3om[($Vc0aiseldrl3om[$Vnwufml5q3nprid]['parent'])]['padding'];
						} else {
							$Vwcmlurixvzgurrent_cell_padding = array('L' => 0, 'T' => 0, 'R' => 0, 'B' => 0);
						}
						$Vnwufml5q3nphis->cell_padding = $Vwcmlurixvzgurrent_cell_padding;
						if (isset($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['height'])) {
							
							$Vwcmlurixvzgellh = $Vnwufml5q3nphis->getHTMLUnitToUnits($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['height'], 0, 'px');
						} else {
							$Vwcmlurixvzgellh = 0;
						}
						if (isset($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['content'])) {
							$Vwcmlurixvzgell_content = $Vc0aiseldrl3om[$Vl0q4noiexi4ey]['content'];
						} else {
							$Vwcmlurixvzgell_content = '&nbsp;';
						}
						$Vnwufml5q3npagtype = $Vc0aiseldrl3om[$Vl0q4noiexi4ey]['value'];
						$V1yuhsvbtlvrarentid = $Vl0q4noiexi4ey;
						while (($Vl0q4noiexi4ey < $Vetludueqmbtaxel) AND (!(($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['tag']) AND (!$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['opening']) AND ($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['value'] == $Vnwufml5q3npagtype) AND ($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent'] == $V1yuhsvbtlvrarentid)))) {
							
							++$Vl0q4noiexi4ey;
						}
						if (!isset($Vc0aiseldrl3om[$Vnwufml5q3nprid]['startpage'])) {
							$Vc0aiseldrl3om[$Vnwufml5q3nprid]['startpage'] = $Vnwufml5q3nphis->page;
						} else {
							$Vnwufml5q3nphis->setPage($Vc0aiseldrl3om[$Vnwufml5q3nprid]['startpage']);
						}
						if (!isset($Vc0aiseldrl3om[$Vnwufml5q3nprid]['startcolumn'])) {
							$Vc0aiseldrl3om[$Vnwufml5q3nprid]['startcolumn'] = $Vnwufml5q3nphis->current_column;
						} elseif ($Vnwufml5q3nphis->current_column != $Vc0aiseldrl3om[$Vnwufml5q3nprid]['startcolumn']) {
							$V3p0tae11ldwx = $Vnwufml5q3nphis->x;
							$Vnwufml5q3nphis->selectColumn($Vc0aiseldrl3om[$Vnwufml5q3nprid]['startcolumn']);
							$Vnwufml5q3nphis->x = $V3p0tae11ldwx;
						}
						if (!isset($Vc0aiseldrl3om[$Vnwufml5q3nprid]['starty'])) {
							$Vc0aiseldrl3om[$Vnwufml5q3nprid]['starty'] = $Vnwufml5q3nphis->y;
						} else {
							$Vnwufml5q3nphis->y = $Vc0aiseldrl3om[$Vnwufml5q3nprid]['starty'];
						}
						if (!isset($Vc0aiseldrl3om[$Vnwufml5q3nprid]['startx'])) {
							$Vc0aiseldrl3om[$Vnwufml5q3nprid]['startx'] = $Vnwufml5q3nphis->x;
							$Vnwufml5q3nphis->x += $Vwcmlurixvzgellspacingx;
						} else {
							$Vnwufml5q3nphis->x += ($Vwcmlurixvzgellspacingx / 2);
						}
						if (isset($Vc0aiseldrl3om[$V1yuhsvbtlvrarentid]['attribute']['rowspan'])) {
							$Vfhkt4vbeualowspan = intval($Vc0aiseldrl3om[$V1yuhsvbtlvrarentid]['attribute']['rowspan']);
						} else {
							$Vfhkt4vbeualowspan = 1;
						}
						
						if (isset($Vc0aiseldrl3om[$Vnwufml5q3npable_el]['rowspans'])) {
							$V1zbfvr4umtck = 0;
							$V1zbfvr4umtckmax = count($Vc0aiseldrl3om[$Vnwufml5q3npable_el]['rowspans']);
							while ($V1zbfvr4umtck < $V1zbfvr4umtckmax) {
								$Vnwufml5q3nprwsp = $Vc0aiseldrl3om[$Vnwufml5q3npable_el]['rowspans'][$V1zbfvr4umtck];
								$V1zbfvr4umtcstartx = $Vnwufml5q3nprwsp['startx'];
								$V1zbfvr4umtcendx = $Vnwufml5q3nprwsp['endx'];
								
								if ($Vnwufml5q3nprwsp['startpage'] < $Vnwufml5q3nphis->page) {
									if (($Vnwufml5q3nphis->rtl) AND ($Vnwufml5q3nphis->pagedim[$Vnwufml5q3nphis->page]['orm'] != $Vnwufml5q3nphis->pagedim[$Vnwufml5q3nprwsp['startpage']]['orm'])) {
										$Vc0aiseldrl3l = ($Vnwufml5q3nphis->pagedim[$Vnwufml5q3nphis->page]['orm'] - $Vnwufml5q3nphis->pagedim[$Vnwufml5q3nprwsp['startpage']]['orm']);
										$V1zbfvr4umtcstartx -= $Vc0aiseldrl3l;
										$V1zbfvr4umtcendx -= $Vc0aiseldrl3l;
									} elseif ((!$Vnwufml5q3nphis->rtl) AND ($Vnwufml5q3nphis->pagedim[$Vnwufml5q3nphis->page]['olm'] != $Vnwufml5q3nphis->pagedim[$Vnwufml5q3nprwsp['startpage']]['olm'])) {
										$Vc0aiseldrl3l = ($Vnwufml5q3nphis->pagedim[$Vnwufml5q3nphis->page]['olm'] - $Vnwufml5q3nphis->pagedim[$Vnwufml5q3nprwsp['startpage']]['olm']);
										$V1zbfvr4umtcstartx += $Vc0aiseldrl3l;
										$V1zbfvr4umtcendx += $Vc0aiseldrl3l;
									}
								}
								if (($Vnwufml5q3nprwsp['rowspan'] > 0)
									AND ($V1zbfvr4umtcstartx > ($Vnwufml5q3nphis->x - $Vwcmlurixvzgellspacing['H'] - $Vwcmlurixvzgurrent_cell_padding['L'] - $Vnwufml5q3nphis->feps))
									AND ($V1zbfvr4umtcstartx < ($Vnwufml5q3nphis->x + $Vwcmlurixvzgellspacing['H'] + $Vwcmlurixvzgurrent_cell_padding['R'] + $Vnwufml5q3nphis->feps))
									AND (($Vnwufml5q3nprwsp['starty'] < ($Vnwufml5q3nphis->y - $Vnwufml5q3nphis->feps)) OR ($Vnwufml5q3nprwsp['startpage'] < $Vnwufml5q3nphis->page) OR ($Vnwufml5q3nprwsp['startcolumn'] < $Vnwufml5q3nphis->current_column))) {
									
									$Vnwufml5q3nphis->x = $V1zbfvr4umtcendx + $Vwcmlurixvzgellspacingx;
									
									$Vwcmlurixvzgolid += $Vnwufml5q3nprwsp['colspan'];
									if (($Vnwufml5q3nprwsp['rowspan'] == 1)
										AND (isset($Vc0aiseldrl3om[$Vnwufml5q3nprid]['endy']))
										AND (isset($Vc0aiseldrl3om[$Vnwufml5q3nprid]['endpage']))
										AND (isset($Vc0aiseldrl3om[$Vnwufml5q3nprid]['endcolumn']))
										AND ($Vnwufml5q3nprwsp['endpage'] == $Vc0aiseldrl3om[$Vnwufml5q3nprid]['endpage'])
										AND ($Vnwufml5q3nprwsp['endcolumn'] == $Vc0aiseldrl3om[$Vnwufml5q3nprid]['endcolumn'])) {
										
										$Vc0aiseldrl3om[$Vnwufml5q3npable_el]['rowspans'][$V1zbfvr4umtck]['endy'] = max($Vc0aiseldrl3om[$Vnwufml5q3nprid]['endy'], $Vnwufml5q3nprwsp['endy']);
										$Vc0aiseldrl3om[$Vnwufml5q3nprid]['endy'] = $Vc0aiseldrl3om[$Vnwufml5q3npable_el]['rowspans'][$V1zbfvr4umtck]['endy'];
									}
									$V1zbfvr4umtck = 0;
								} else {
									++$V1zbfvr4umtck;
								}
							}
						}
						if (isset($Vc0aiseldrl3om[$V1yuhsvbtlvrarentid]['width'])) {
							
							$Vwcmlurixvzgellw = $Vnwufml5q3nphis->getHTMLUnitToUnits($Vc0aiseldrl3om[$V1yuhsvbtlvrarentid]['width'], $Vnwufml5q3npable_columns_width, 'px');
							$V3p0tae11ldwcw = ($Vwcmlurixvzgellw / $Vwcmlurixvzgolspan);
							for ($V55vc4mewy5w = 0; $V55vc4mewy5w < $Vwcmlurixvzgolspan; ++$V55vc4mewy5w) {
								$Vnwufml5q3npable_colwidths[($Vwcmlurixvzgolid + $V55vc4mewy5w)] = $V3p0tae11ldwcw;
							}
						} else {
							
							$Vwcmlurixvzgellw = 0;
							for ($V55vc4mewy5w = 0; $V55vc4mewy5w < $Vwcmlurixvzgolspan; ++$V55vc4mewy5w) {
								$Vwcmlurixvzgellw += (isset($Vnwufml5q3npable_colwidths[($Vwcmlurixvzgolid + $V55vc4mewy5w)]) ? $Vnwufml5q3npable_colwidths[($Vwcmlurixvzgolid + $V55vc4mewy5w)] : 0);
							}
						}
						$Vwcmlurixvzgellw += (($Vwcmlurixvzgolspan - 1) * $Vwcmlurixvzgellspacing['H']);
						
						$Vwcmlurixvzgolid += $Vwcmlurixvzgolspan;
						
						if ($Vfhkt4vbeualowspan > 1) {
							$Vnwufml5q3nprsid = array_push($Vc0aiseldrl3om[$Vnwufml5q3npable_el]['rowspans'], array('trid' => $Vnwufml5q3nprid, 'rowspan' => $Vfhkt4vbeualowspan, 'mrowspan' => $Vfhkt4vbeualowspan, 'colspan' => $Vwcmlurixvzgolspan, 'startpage' => $Vnwufml5q3nphis->page, 'startcolumn' => $Vnwufml5q3nphis->current_column, 'startx' => $Vnwufml5q3nphis->x, 'starty' => $Vnwufml5q3nphis->y));
						}
						$Vwcmlurixvzgellid = array_push($Vc0aiseldrl3om[$Vnwufml5q3nprid]['cellpos'], array('startx' => $Vnwufml5q3nphis->x));
						if ($Vfhkt4vbeualowspan > 1) {
							$Vc0aiseldrl3om[$Vnwufml5q3nprid]['cellpos'][($Vwcmlurixvzgellid - 1)]['rowspanid'] = ($Vnwufml5q3nprsid - 1);
						}
						
						if (isset($Vc0aiseldrl3om[$V1yuhsvbtlvrarentid]['bgcolor']) AND ($Vc0aiseldrl3om[$V1yuhsvbtlvrarentid]['bgcolor'] !== false)) {
							$Vc0aiseldrl3om[$Vnwufml5q3nprid]['cellpos'][($Vwcmlurixvzgellid - 1)]['bgcolor'] = $Vc0aiseldrl3om[$V1yuhsvbtlvrarentid]['bgcolor'];
						}
						
						if (isset($Vnwufml5q3npdborder) AND !empty($Vnwufml5q3npdborder)) {
							$Vc0aiseldrl3om[$Vnwufml5q3nprid]['cellpos'][($Vwcmlurixvzgellid - 1)]['border'] = $Vnwufml5q3npdborder;
						}
						$V1yuhsvbtlvrrevLastH = $Vnwufml5q3nphis->lasth;
						
						if ($Vnwufml5q3nphis->rtl) {
							$Vnwufml5q3nphis->colxshift['x'] = $Vnwufml5q3nphis->w - $Vnwufml5q3nphis->x - $Vnwufml5q3nphis->rMargin;
						} else {
							$Vnwufml5q3nphis->colxshift['x'] = $Vnwufml5q3nphis->x - $Vnwufml5q3nphis->lMargin;
						}
						$Vnwufml5q3nphis->colxshift['s'] = $Vwcmlurixvzgellspacing;
						$Vnwufml5q3nphis->colxshift['p'] = $Vwcmlurixvzgurrent_cell_padding;
						
						$Vnwufml5q3nphis->MultiCell($Vwcmlurixvzgellw, $Vwcmlurixvzgellh, $Vwcmlurixvzgell_content, false, $Vx3g4ytafo1aalign, false, 2, '', '', true, 0, true, true, 0, 'T', false);
						
						$Vnwufml5q3nphis->colxshift = array('x' => 0, 's' => array('H' => 0, 'V' => 0), 'p' => array('L' => 0, 'T' => 0, 'R' => 0, 'B' => 0));
						$Vnwufml5q3nphis->lasth = $V1yuhsvbtlvrrevLastH;
						$Vnwufml5q3nphis->cell_padding = $Vk1y4jyuc5nsld_cell_padding;
						$Vc0aiseldrl3om[$Vnwufml5q3nprid]['cellpos'][($Vwcmlurixvzgellid - 1)]['endx'] = $Vnwufml5q3nphis->x;
						
						if ($Vfhkt4vbeualowspan <= 1) {
							if (isset($Vc0aiseldrl3om[$Vnwufml5q3nprid]['endy'])) {
								if (($Vnwufml5q3nphis->page == $Vc0aiseldrl3om[$Vnwufml5q3nprid]['endpage']) AND ($Vnwufml5q3nphis->current_column == $Vc0aiseldrl3om[$Vnwufml5q3nprid]['endcolumn'])) {
									$Vc0aiseldrl3om[$Vnwufml5q3nprid]['endy'] = max($Vnwufml5q3nphis->y, $Vc0aiseldrl3om[$Vnwufml5q3nprid]['endy']);
								} elseif (($Vnwufml5q3nphis->page > $Vc0aiseldrl3om[$Vnwufml5q3nprid]['endpage']) OR ($Vnwufml5q3nphis->current_column > $Vc0aiseldrl3om[$Vnwufml5q3nprid]['endcolumn'])) {
									$Vc0aiseldrl3om[$Vnwufml5q3nprid]['endy'] = $Vnwufml5q3nphis->y;
								}
							} else {
								$Vc0aiseldrl3om[$Vnwufml5q3nprid]['endy'] = $Vnwufml5q3nphis->y;
							}
							if (isset($Vc0aiseldrl3om[$Vnwufml5q3nprid]['endpage'])) {
								$Vc0aiseldrl3om[$Vnwufml5q3nprid]['endpage'] = max($Vnwufml5q3nphis->page, $Vc0aiseldrl3om[$Vnwufml5q3nprid]['endpage']);
							} else {
								$Vc0aiseldrl3om[$Vnwufml5q3nprid]['endpage'] = $Vnwufml5q3nphis->page;
							}
							if (isset($Vc0aiseldrl3om[$Vnwufml5q3nprid]['endcolumn'])) {
								$Vc0aiseldrl3om[$Vnwufml5q3nprid]['endcolumn'] = max($Vnwufml5q3nphis->current_column, $Vc0aiseldrl3om[$Vnwufml5q3nprid]['endcolumn']);
							} else {
								$Vc0aiseldrl3om[$Vnwufml5q3nprid]['endcolumn'] = $Vnwufml5q3nphis->current_column;
							}
						} else {
							
							$Vc0aiseldrl3om[$Vnwufml5q3npable_el]['rowspans'][($Vnwufml5q3nprsid - 1)]['endx'] = $Vnwufml5q3nphis->x;
							$Vc0aiseldrl3om[$Vnwufml5q3npable_el]['rowspans'][($Vnwufml5q3nprsid - 1)]['endy'] = $Vnwufml5q3nphis->y;
							$Vc0aiseldrl3om[$Vnwufml5q3npable_el]['rowspans'][($Vnwufml5q3nprsid - 1)]['endpage'] = $Vnwufml5q3nphis->page;
							$Vc0aiseldrl3om[$Vnwufml5q3npable_el]['rowspans'][($Vnwufml5q3nprsid - 1)]['endcolumn'] = $Vnwufml5q3nphis->current_column;
						}
						if (isset($Vc0aiseldrl3om[$Vnwufml5q3npable_el]['rowspans'])) {
							
							foreach ($Vc0aiseldrl3om[$Vnwufml5q3npable_el]['rowspans'] as $Vl0q4noiexi4 => $Vnwufml5q3nprwsp) {
								if ($Vnwufml5q3nprwsp['rowspan'] > 0) {
									if (isset($Vc0aiseldrl3om[$Vnwufml5q3nprid]['endpage'])) {
										if (($Vnwufml5q3nprwsp['endpage'] == $Vc0aiseldrl3om[$Vnwufml5q3nprid]['endpage']) AND ($Vnwufml5q3nprwsp['endcolumn'] == $Vc0aiseldrl3om[$Vnwufml5q3nprid]['endcolumn'])) {
											$Vc0aiseldrl3om[$Vnwufml5q3npable_el]['rowspans'][$Vl0q4noiexi4]['endy'] = max($Vc0aiseldrl3om[$Vnwufml5q3nprid]['endy'], $Vnwufml5q3nprwsp['endy']);
										} elseif (($Vnwufml5q3nprwsp['endpage'] < $Vc0aiseldrl3om[$Vnwufml5q3nprid]['endpage']) OR ($Vnwufml5q3nprwsp['endcolumn'] < $Vc0aiseldrl3om[$Vnwufml5q3nprid]['endcolumn'])) {
											$Vc0aiseldrl3om[$Vnwufml5q3npable_el]['rowspans'][$Vl0q4noiexi4]['endy'] = $Vc0aiseldrl3om[$Vnwufml5q3nprid]['endy'];
											$Vc0aiseldrl3om[$Vnwufml5q3npable_el]['rowspans'][$Vl0q4noiexi4]['endpage'] = $Vc0aiseldrl3om[$Vnwufml5q3nprid]['endpage'];
											$Vc0aiseldrl3om[$Vnwufml5q3npable_el]['rowspans'][$Vl0q4noiexi4]['endcolumn'] = $Vc0aiseldrl3om[$Vnwufml5q3nprid]['endcolumn'];
										} else {
											$Vc0aiseldrl3om[$Vnwufml5q3nprid]['endy'] = $Vnwufml5q3nphis->pagedim[$Vc0aiseldrl3om[$Vnwufml5q3nprid]['endpage']]['hk'] - $Vnwufml5q3nphis->pagedim[$Vc0aiseldrl3om[$Vnwufml5q3nprid]['endpage']]['bm'];
										}
									}
								}
							}
						}
						$Vnwufml5q3nphis->x += ($Vwcmlurixvzgellspacingx / 2);
					} else {
						
						if (!isset($Vjvwtdkog1toentagpos)) {
							if ($Vnwufml5q3nphis->inxobj) {
								
								$Vjvwtdkog1toentagpos = strlen($Vnwufml5q3nphis->xobjects[$Vnwufml5q3nphis->xobjid]['outdata']);
							} elseif (!$Vnwufml5q3nphis->InFooter) {
								if (isset($Vnwufml5q3nphis->footerlen[$Vnwufml5q3nphis->page])) {
									$Vnwufml5q3nphis->footerpos[$Vnwufml5q3nphis->page] = $Vnwufml5q3nphis->pagelen[$Vnwufml5q3nphis->page] - $Vnwufml5q3nphis->footerlen[$Vnwufml5q3nphis->page];
								} else {
									$Vnwufml5q3nphis->footerpos[$Vnwufml5q3nphis->page] = $Vnwufml5q3nphis->pagelen[$Vnwufml5q3nphis->page];
								}
								$Vjvwtdkog1toentagpos = $Vnwufml5q3nphis->footerpos[$Vnwufml5q3nphis->page];
							}
						}
						$Vc0aiseldrl3om = $Vnwufml5q3nphis->openHTMLTagHandler($Vc0aiseldrl3om, $Vl0q4noiexi4ey, $Vwcmlurixvzgell);
					}
				} else { 
					$V1yuhsvbtlvrrev_numpages = $Vnwufml5q3nphis->numpages;
					$Vk1y4jyuc5nsld_bordermrk = $Vnwufml5q3nphis->bordermrk[$Vnwufml5q3nphis->page];
					$Vc0aiseldrl3om = $Vnwufml5q3nphis->closeHTMLTagHandler($Vc0aiseldrl3om, $Vl0q4noiexi4ey, $Vwcmlurixvzgell, $Vetludueqmbtaxbottomliney);
					if ($Vnwufml5q3nphis->bordermrk[$Vnwufml5q3nphis->page] > $Vk1y4jyuc5nsld_bordermrk) {
						$Vvt20qqut4butartlinepos += ($Vnwufml5q3nphis->bordermrk[$Vnwufml5q3nphis->page] - $Vk1y4jyuc5nsld_bordermrk);
					}
					if ($V1yuhsvbtlvrrev_numpages > $Vnwufml5q3nphis->numpages) {
						$Vvt20qqut4butartlinepage = $Vnwufml5q3nphis->page;
					}
				}
			} elseif (strlen($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['value']) > 0) {
				
				if (!TCPDF_STATIC::empty_string($Vnwufml5q3nphis->lispacer) AND ($Vnwufml5q3nphis->lispacer != '^')) {
					$Vnwufml5q3nphis->SetFont($Vtfmjbpojmgiontname, $Vtfmjbpojmgiontstyle, $Vtfmjbpojmgiontsize);
					$Vnwufml5q3nphis->resetLastH();
					$Vetludueqmbtinstartliney = $Vnwufml5q3nphis->y;
					$Vetludueqmbtaxbottomliney = ($Vvt20qqut4butartliney + $Vnwufml5q3nphis->getCellHeight($Vnwufml5q3nphis->FontSize));
					if (is_numeric($Vtfmjbpojmgiontsize) AND ($Vtfmjbpojmgiontsize > 0)) {
						$Vnwufml5q3nphis->putHtmlListBullet($Vnwufml5q3nphis->listnum, $Vnwufml5q3nphis->lispacer, $Vtfmjbpojmgiontsize);
					}
					$Vnwufml5q3nphis->SetFont($Vwcmlurixvzgurfontname, $Vwcmlurixvzgurfontstyle, $Vwcmlurixvzgurfontsize);
					$Vnwufml5q3nphis->resetLastH();
					if (is_numeric($Vtfmjbpojmgiontsize) AND ($Vtfmjbpojmgiontsize > 0) AND is_numeric($Vwcmlurixvzgurfontsize) AND ($Vwcmlurixvzgurfontsize > 0) AND ($Vtfmjbpojmgiontsize != $Vwcmlurixvzgurfontsize)) {
						$Vtfmjbpojmgiontascent = $Vnwufml5q3nphis->getFontAscent($Vtfmjbpojmgiontname, $Vtfmjbpojmgiontstyle, $Vtfmjbpojmgiontsize);
						$Vtfmjbpojmgiontdescent = $Vnwufml5q3nphis->getFontDescent($Vtfmjbpojmgiontname, $Vtfmjbpojmgiontstyle, $Vtfmjbpojmgiontsize);
						$Vnwufml5q3nphis->y += ($Vnwufml5q3nphis->getCellHeight(($Vtfmjbpojmgiontsize - $Vwcmlurixvzgurfontsize) / $Vnwufml5q3nphis->k) + $Vtfmjbpojmgiontascent - $Vwcmlurixvzgurfontascent - $Vtfmjbpojmgiontdescent + $Vwcmlurixvzgurfontdescent) / 2;
						$Vetludueqmbtinstartliney = min($Vnwufml5q3nphis->y, $Vetludueqmbtinstartliney);
						$Vetludueqmbtaxbottomliney = max(($Vnwufml5q3nphis->y + $Vnwufml5q3nphis->getCellHeight($Vtfmjbpojmgiontsize / $Vnwufml5q3nphis->k)), $Vetludueqmbtaxbottomliney);
					}
				}
				
				$Vnwufml5q3nphis->htmlvspace = 0;
				if ((!$Vnwufml5q3nphis->premode) AND $Vnwufml5q3nphis->isRTLTextDir()) {
					
					$Vx3g4ytafo1asp = ''; 
					$V1zbfvr4umtcp = ''; 
					if (preg_match('/^('.$Vnwufml5q3nphis->re_space['p'].'+)/'.$Vnwufml5q3nphis->re_space['m'], $Vc0aiseldrl3om[$Vl0q4noiexi4ey]['value'], $Vetludueqmbtatches)) {
						$Vx3g4ytafo1asp = $Vetludueqmbtatches[1];
					}
					if (preg_match('/('.$Vnwufml5q3nphis->re_space['p'].'+)$/'.$Vnwufml5q3nphis->re_space['m'], $Vc0aiseldrl3om[$Vl0q4noiexi4ey]['value'], $Vetludueqmbtatches)) {
						$V1zbfvr4umtcp = $Vetludueqmbtatches[1];
					}
					$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['value'] = $V1zbfvr4umtcp.$Vnwufml5q3nphis->stringTrim($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['value']).$Vx3g4ytafo1asp;
				}
				if ($Vgv45dfhsyuhewline) {
					if (!$Vnwufml5q3nphis->premode) {
						$V1yuhsvbtlvrrelen = strlen($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['value']);
						if ($Vnwufml5q3nphis->isRTLTextDir()) {
							
							$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['value'] = $Vnwufml5q3nphis->stringRightTrim($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['value']);
						} else {
							
							$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['value'] = $Vnwufml5q3nphis->stringLeftTrim($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['value']);
						}
						$Vsjw1s1w2nqetlen = strlen($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['value']);
						if (($Vsjw1s1w2nqetlen == 0) AND ($V1yuhsvbtlvrrelen > 0)) {
							$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['trimmed_space'] = true;
						}
					}
					$Vgv45dfhsyuhewline = false;
					$Vsl3crr1j3u0 = true;
				} else {
					$Vsl3crr1j3u0 = false;
					
					$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['value'] = preg_replace('/^'.$Vnwufml5q3nphis->re_space['p'].'+$/'.$Vnwufml5q3nphis->re_space['m'], chr(32), $Vc0aiseldrl3om[$Vl0q4noiexi4ey]['value']);
				}
				$Vvt20qqut4butrrest = '';
				if ($Vnwufml5q3nphis->rtl) {
					$Vnwufml5q3nphis->x -= $Vnwufml5q3nphis->textindent;
				} else {
					$Vnwufml5q3nphis->x += $Vnwufml5q3nphis->textindent;
				}
				if (!isset($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['trimmed_space']) OR !$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['trimmed_space']) {
					$Vvt20qqut4butrlinelen = $Vnwufml5q3nphis->GetStringWidth($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['value']);
					if (!empty($Vnwufml5q3nphis->HREF) AND (isset($Vnwufml5q3nphis->HREF['url']))) {
						
						$Vvjxcwrp4tjqrefcolor = '';
						if (isset($Vc0aiseldrl3om[($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent'])]['fgcolor']) AND ($Vc0aiseldrl3om[($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent'])]['fgcolor'] !== false)) {
							$Vvjxcwrp4tjqrefcolor = $Vc0aiseldrl3om[($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent'])]['fgcolor'];
						}
						$Vvjxcwrp4tjqrefstyle = -1;
						if (isset($Vc0aiseldrl3om[($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent'])]['fontstyle']) AND ($Vc0aiseldrl3om[($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent'])]['fontstyle'] !== false)) {
							$Vvjxcwrp4tjqrefstyle = $Vc0aiseldrl3om[($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent'])]['fontstyle'];
						}
						$Vvt20qqut4butrrest = $Vnwufml5q3nphis->addHtmlLink($Vnwufml5q3nphis->HREF['url'], $Vc0aiseldrl3om[$Vl0q4noiexi4ey]['value'], $Vim12f51jw5rfill, true, $Vvjxcwrp4tjqrefcolor, $Vvjxcwrp4tjqrefstyle, true);
					} else {
						$Vim12f51jw5radj = 0; 
						if ($Vnwufml5q3nphis->rtl) {
							$V5k0cete3fo0a = ($Vnwufml5q3nphis->x - $Vnwufml5q3nphis->lMargin);
						} else {
							$V5k0cete3fo0a = ($Vnwufml5q3nphis->w - $Vnwufml5q3nphis->rMargin - $Vnwufml5q3nphis->x);
						}
						if (($Vvt20qqut4butrlinelen < $V5k0cete3fo0a) AND (isset($Vc0aiseldrl3om[($Vl0q4noiexi4ey + 1)])) AND ($Vc0aiseldrl3om[($Vl0q4noiexi4ey + 1)]['tag']) AND (!$Vc0aiseldrl3om[($Vl0q4noiexi4ey + 1)]['block'])) {
							
							$Vgv45dfhsyuhkey = ($Vl0q4noiexi4ey + 1);
							$Vim12f51jw5rrite_block = true;
							$Vvt20qqut4buame_textdir = true;
							$V3p0tae11ldw_fontname = $Vnwufml5q3nphis->FontFamily;
							$V3p0tae11ldw_fontstyle = $Vnwufml5q3nphis->FontStyle;
							$V3p0tae11ldw_fontsize = $Vnwufml5q3nphis->FontSizePt;
							while ($Vim12f51jw5rrite_block AND isset($Vc0aiseldrl3om[$Vgv45dfhsyuhkey])) {
								if ($Vc0aiseldrl3om[$Vgv45dfhsyuhkey]['tag']) {
									if ($Vc0aiseldrl3om[$Vgv45dfhsyuhkey]['block']) {
										
										$Vim12f51jw5rrite_block = false;
									}
									$V3p0tae11ldw_fontname = isset($Vc0aiseldrl3om[$Vgv45dfhsyuhkey]['fontname']) ? $Vc0aiseldrl3om[$Vgv45dfhsyuhkey]['fontname'] : $Vnwufml5q3nphis->FontFamily;
									$V3p0tae11ldw_fontstyle = isset($Vc0aiseldrl3om[$Vgv45dfhsyuhkey]['fontstyle']) ? $Vc0aiseldrl3om[$Vgv45dfhsyuhkey]['fontstyle'] : $Vnwufml5q3nphis->FontStyle;
									$V3p0tae11ldw_fontsize = isset($Vc0aiseldrl3om[$Vgv45dfhsyuhkey]['fontsize']) ? $Vc0aiseldrl3om[$Vgv45dfhsyuhkey]['fontsize'] : $Vnwufml5q3nphis->FontSizePt;
									$Vvt20qqut4buame_textdir = ($Vc0aiseldrl3om[$Vgv45dfhsyuhkey]['dir'] == $Vc0aiseldrl3om[$Vl0q4noiexi4ey]['dir']);
								} else {
									$Vgv45dfhsyuhextstr = TCPDF_STATIC::pregSplit('/'.$Vnwufml5q3nphis->re_space['p'].'+/', $Vnwufml5q3nphis->re_space['m'], $Vc0aiseldrl3om[$Vgv45dfhsyuhkey]['value']);
									if (isset($Vgv45dfhsyuhextstr[0]) AND $Vvt20qqut4buame_textdir) {
										$Vim12f51jw5radj += $Vnwufml5q3nphis->GetStringWidth($Vgv45dfhsyuhextstr[0], $V3p0tae11ldw_fontname, $V3p0tae11ldw_fontstyle, $V3p0tae11ldw_fontsize);
										if (isset($Vgv45dfhsyuhextstr[1])) {
											$Vim12f51jw5rrite_block = false;
										}
									}
								}
								++$Vgv45dfhsyuhkey;
							}
						}
						if (($Vim12f51jw5radj > 0) AND (($Vvt20qqut4butrlinelen + $Vim12f51jw5radj) >= $V5k0cete3fo0a)) {
							$Vim12f51jw5radj = 0;
							$Vgv45dfhsyuhextstr = TCPDF_STATIC::pregSplit('/'.$Vnwufml5q3nphis->re_space['p'].'/', $Vnwufml5q3nphis->re_space['m'], $Vc0aiseldrl3om[$Vl0q4noiexi4ey]['value']);
							$Vgv45dfhsyuhumblks = count($Vgv45dfhsyuhextstr);
							if ($Vgv45dfhsyuhumblks > 1) {
								
								$Vim12f51jw5radj = ($V5k0cete3fo0a - $Vvt20qqut4butrlinelen + $Vnwufml5q3nphis->GetStringWidth($Vgv45dfhsyuhextstr[($Vgv45dfhsyuhumblks - 1)]));
							} else {
								
								$Vim12f51jw5radj = $Vnwufml5q3nphis->GetStringWidth($Vgv45dfhsyuhextstr[0]);
							}
						}
						
						if (($Vim12f51jw5radj > 0) AND (($Vnwufml5q3nphis->rtl AND ($Vnwufml5q3nphis->tmprtl === 'L')) OR (!$Vnwufml5q3nphis->rtl AND ($Vnwufml5q3nphis->tmprtl === 'R')))) {
							
							$V14ltds3prprverse_dir = true;
							$Vnwufml5q3nphis->rtl = !$Vnwufml5q3nphis->rtl;
							$V14ltds3prprvshift = ($Vvt20qqut4butrlinelen + $Vim12f51jw5radj + 0.000001); 
							if ($Vnwufml5q3nphis->rtl) {
								$Vnwufml5q3nphis->x += $V14ltds3prprvshift;
							} else {
								$Vnwufml5q3nphis->x -= $V14ltds3prprvshift;
							}
							$Vangwoo3ejfgws = $Vnwufml5q3nphis->x;
						}
						
						$Vvt20qqut4butrrest = $Vnwufml5q3nphis->Write($Vnwufml5q3nphis->lasth, $Vc0aiseldrl3om[$Vl0q4noiexi4ey]['value'], '', $Vim12f51jw5rfill, '', false, 0, true, $Vsl3crr1j3u0, 0, $Vim12f51jw5radj);
						
						if ($V14ltds3prprverse_dir AND ($Vim12f51jw5radj == 0)) {
							$Vnwufml5q3nphis->x = $Vangwoo3ejfgws;
							$Vnwufml5q3nphis->rtl = !$Vnwufml5q3nphis->rtl;
							$V14ltds3prprverse_dir = false;
						}
					}
				}
				$Vnwufml5q3nphis->textindent = 0;
				if (strlen($Vvt20qqut4butrrest) > 0) {
					
					$Vnwufml5q3nphis->newline = true;
					if ($Vvt20qqut4butrrest == $Vc0aiseldrl3om[$Vl0q4noiexi4ey]['value']) {
						
						++$Vx3g4ytafo1aoop;
					} else {
						$Vx3g4ytafo1aoop = 0;
					}
					$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['value'] = $Vvt20qqut4butrrest;
					if ($Vwcmlurixvzgell) {
						if ($Vnwufml5q3nphis->rtl) {
							$Vnwufml5q3nphis->x -= $Vnwufml5q3nphis->cell_padding['R'];
						} else {
							$Vnwufml5q3nphis->x += $Vnwufml5q3nphis->cell_padding['L'];
						}
					}
					if ($Vx3g4ytafo1aoop < 3) {
						--$Vl0q4noiexi4ey;
					}
				} else {
					$Vx3g4ytafo1aoop = 0;
					
					 if ($Vnwufml5q3nphis->font_spacing > 0) {
					 	if ($Vnwufml5q3nphis->rtl) {
							$Vnwufml5q3nphis->x -= $Vnwufml5q3nphis->font_spacing;
						} else {
							$Vnwufml5q3nphis->x += $Vnwufml5q3nphis->font_spacing;
						}
					}
				}
			}
			++$Vl0q4noiexi4ey;
			if (isset($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['tag']) AND $Vc0aiseldrl3om[$Vl0q4noiexi4ey]['tag'] AND (!isset($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['opening']) OR !$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['opening']) AND isset($Vc0aiseldrl3om[($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent'])]['attribute']['nobr']) AND ($Vc0aiseldrl3om[($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent'])]['attribute']['nobr'] == 'true')) {
				
				if ((!$Vppw1slbj4ovndo) AND (($Vnwufml5q3nphis->y < $Vnwufml5q3nphis->start_transaction_y) OR (($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['value'] == 'tr') AND ($Vc0aiseldrl3om[($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent'])]['endy'] < $Vnwufml5q3nphis->start_transaction_y)))) {
					
					
					$Vnwufml5q3nphis->rollbackTransaction(true);
					
					foreach ($Vnwufml5q3nphis_method_vars as $Vz0hmukhwa4zkey => $Vz0hmukhwa4zval) {
						$$Vz0hmukhwa4zkey = $Vz0hmukhwa4zval;
					}
					if (!empty($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['thead'])) {
						$Vnwufml5q3nphis->inthead = true;
					}
					
					$V1yuhsvbtlvrre_y = $Vnwufml5q3nphis->y;
					if ((!$Vnwufml5q3nphis->checkPageBreak($Vnwufml5q3nphis->PageBreakTrigger + 1)) AND ($Vnwufml5q3nphis->y < $V1yuhsvbtlvrre_y)) {
						$Vvt20qqut4butartliney = $Vnwufml5q3nphis->y;
					}
					$Vppw1slbj4ovndo = true; 
				} else {
					$Vppw1slbj4ovndo = false;
				}
			}
		} 
		
		if (isset($Vvt20qqut4butartlinex)) {
			$Vgxufordoa4tshift = ($Vetludueqmbtinstartliney - $Vvt20qqut4butartliney);
			if (($Vgxufordoa4tshift > 0) OR ($Vnwufml5q3nphis->page > $Vvt20qqut4butartlinepage)) {
				$Vgxufordoa4tshift = 0;
			}
			$Vnwufml5q3np_x = 0;
			
			$Vx3g4ytafo1ainew = abs($Vnwufml5q3nphis->endlinex - $Vvt20qqut4butartlinex);
			if ($Vnwufml5q3nphis->inxobj) {
				
				$Vsvylsg2elw5 = substr($Vnwufml5q3nphis->xobjects[$Vnwufml5q3nphis->xobjid]['outdata'], 0, $Vvt20qqut4butartlinepos);
				if (isset($Vjvwtdkog1toentagpos)) {
					$Vetludueqmbtidpos = $Vjvwtdkog1toentagpos;
				} else {
					$Vetludueqmbtidpos = 0;
				}
				if ($Vetludueqmbtidpos > 0) {
					$V1yuhsvbtlvrmid = substr($Vnwufml5q3nphis->xobjects[$Vnwufml5q3nphis->xobjid]['outdata'], $Vvt20qqut4butartlinepos, ($Vetludueqmbtidpos - $Vvt20qqut4butartlinepos));
					$Vqt54avvjrsw = substr($Vnwufml5q3nphis->xobjects[$Vnwufml5q3nphis->xobjid]['outdata'], $Vetludueqmbtidpos);
				} else {
					$V1yuhsvbtlvrmid = substr($Vnwufml5q3nphis->xobjects[$Vnwufml5q3nphis->xobjid]['outdata'], $Vvt20qqut4butartlinepos);
					$Vqt54avvjrsw = '';
				}
			} else {
				$Vsvylsg2elw5 = substr($Vnwufml5q3nphis->getPageBuffer($Vvt20qqut4butartlinepage), 0, $Vvt20qqut4butartlinepos);
				if (isset($Vjvwtdkog1toentagpos) AND isset($Vnwufml5q3nphis->footerlen[$Vvt20qqut4butartlinepage]) AND (!$Vnwufml5q3nphis->InFooter)) {
					$Vnwufml5q3nphis->footerpos[$Vvt20qqut4butartlinepage] = $Vnwufml5q3nphis->pagelen[$Vvt20qqut4butartlinepage] - $Vnwufml5q3nphis->footerlen[$Vvt20qqut4butartlinepage];
					$Vetludueqmbtidpos = min($Vjvwtdkog1toentagpos, $Vnwufml5q3nphis->footerpos[$Vvt20qqut4butartlinepage]);
				} elseif (isset($Vjvwtdkog1toentagpos)) {
					$Vetludueqmbtidpos = $Vjvwtdkog1toentagpos;
				} elseif (isset($Vnwufml5q3nphis->footerlen[$Vvt20qqut4butartlinepage]) AND (!$Vnwufml5q3nphis->InFooter)) {
					$Vnwufml5q3nphis->footerpos[$Vvt20qqut4butartlinepage] = $Vnwufml5q3nphis->pagelen[$Vvt20qqut4butartlinepage] - $Vnwufml5q3nphis->footerlen[$Vvt20qqut4butartlinepage];
					$Vetludueqmbtidpos = $Vnwufml5q3nphis->footerpos[$Vvt20qqut4butartlinepage];
				} else {
					$Vetludueqmbtidpos = 0;
				}
				if ($Vetludueqmbtidpos > 0) {
					$V1yuhsvbtlvrmid = substr($Vnwufml5q3nphis->getPageBuffer($Vvt20qqut4butartlinepage), $Vvt20qqut4butartlinepos, ($Vetludueqmbtidpos - $Vvt20qqut4butartlinepos));
					$Vqt54avvjrsw = substr($Vnwufml5q3nphis->getPageBuffer($Vvt20qqut4butartlinepage), $Vetludueqmbtidpos);
				} else {
					$V1yuhsvbtlvrmid = substr($Vnwufml5q3nphis->getPageBuffer($Vvt20qqut4butartlinepage), $Vvt20qqut4butartlinepos);
					$Vqt54avvjrsw = '';
				}
			}
			if ((isset($V1yuhsvbtlvrlalign) AND ((($V1yuhsvbtlvrlalign == 'C') OR (($V1yuhsvbtlvrlalign == 'R') AND (!$Vnwufml5q3nphis->rtl)) OR (($V1yuhsvbtlvrlalign == 'L') AND ($Vnwufml5q3nphis->rtl)))))) {
				
				$Vnwufml5q3npw = $Vim12f51jw5r;
				if ($Vnwufml5q3nphis->lMargin != $V1yuhsvbtlvrrevlMargin) {
					$Vnwufml5q3npw += ($V1yuhsvbtlvrrevlMargin - $Vnwufml5q3nphis->lMargin);
				}
				if ($Vnwufml5q3nphis->rMargin != $V1yuhsvbtlvrrevrMargin) {
					$Vnwufml5q3npw += ($V1yuhsvbtlvrrevrMargin - $Vnwufml5q3nphis->rMargin);
				}
				$Vk1y4jyuc5nsne_space_width = $Vnwufml5q3nphis->GetStringWidth(chr(32));
				$Vgv45dfhsyuho = 0; 
				if ($Vnwufml5q3nphis->isRTLTextDir()) { 
					
					$Vsjw1s1w2nqe1 = TCPDF_STATIC::revstrpos($V1yuhsvbtlvrmid, '[(');
					if ($Vsjw1s1w2nqe1 > 0) {
						$Vsjw1s1w2nqe1 = intval($Vsjw1s1w2nqe1);
						if ($Vnwufml5q3nphis->isUnicodeFont()) {
							$Vsjw1s1w2nqe2 = intval(TCPDF_STATIC::revstrpos($V1yuhsvbtlvrmid, '[('.chr(0).chr(32)));
							$Vvt20qqut4bupacelen = 2;
						} else {
							$Vsjw1s1w2nqe2 = intval(TCPDF_STATIC::revstrpos($V1yuhsvbtlvrmid, '[('.chr(32)));
							$Vvt20qqut4bupacelen = 1;
						}
						if ($Vsjw1s1w2nqe1 == $Vsjw1s1w2nqe2) {
							$V1yuhsvbtlvrmid = substr($V1yuhsvbtlvrmid, 0, ($Vsjw1s1w2nqe1 + 2)).substr($V1yuhsvbtlvrmid, ($Vsjw1s1w2nqe1 + 2 + $Vvt20qqut4bupacelen));
							if (substr($V1yuhsvbtlvrmid, $Vsjw1s1w2nqe1, 4) == '[()]') {
								$Vx3g4ytafo1ainew -= $Vk1y4jyuc5nsne_space_width;
							} elseif ($Vsjw1s1w2nqe1 == strpos($V1yuhsvbtlvrmid, '[(')) {
								$Vgv45dfhsyuho = 1;
							}
						}
					}
				} else { 
					
					$Vsjw1s1w2nqe1 = TCPDF_STATIC::revstrpos($V1yuhsvbtlvrmid, ')]');
					if ($Vsjw1s1w2nqe1 > 0) {
						$Vsjw1s1w2nqe1 = intval($Vsjw1s1w2nqe1);
						if ($Vnwufml5q3nphis->isUnicodeFont()) {
							$Vsjw1s1w2nqe2 = intval(TCPDF_STATIC::revstrpos($V1yuhsvbtlvrmid, chr(0).chr(32).')]')) + 2;
							$Vvt20qqut4bupacelen = 2;
						} else {
							$Vsjw1s1w2nqe2 = intval(TCPDF_STATIC::revstrpos($V1yuhsvbtlvrmid, chr(32).')]')) + 1;
							$Vvt20qqut4bupacelen = 1;
						}
						if ($Vsjw1s1w2nqe1 == $Vsjw1s1w2nqe2) {
							$V1yuhsvbtlvrmid = substr($V1yuhsvbtlvrmid, 0, ($Vsjw1s1w2nqe1 - $Vvt20qqut4bupacelen)).substr($V1yuhsvbtlvrmid, $Vsjw1s1w2nqe1);
							$Vx3g4ytafo1ainew -= $Vk1y4jyuc5nsne_space_width;
						}
					}
				}
				$Vetludueqmbtdiff = ($Vnwufml5q3npw - $Vx3g4ytafo1ainew);
				if ($V1yuhsvbtlvrlalign == 'C') {
					if ($Vnwufml5q3nphis->rtl) {
						$Vnwufml5q3np_x = -($Vetludueqmbtdiff / 2);
					} else {
						$Vnwufml5q3np_x = ($Vetludueqmbtdiff / 2);
					}
				} elseif ($V1yuhsvbtlvrlalign == 'R') {
					
					$Vnwufml5q3np_x = $Vetludueqmbtdiff;
				} elseif ($V1yuhsvbtlvrlalign == 'L') {
					
					$Vnwufml5q3np_x = -$Vetludueqmbtdiff;
				}
			} 
			if (($Vnwufml5q3np_x != 0) OR ($Vgxufordoa4tshift < 0)) {
				
				$Vnwufml5q3nprx = sprintf('1 0 0 1 %F %F cm', ($Vnwufml5q3np_x * $Vnwufml5q3nphis->k), ($Vgxufordoa4tshift * $Vnwufml5q3nphis->k));
				$Vsvylsg2elw5 .= "\nq\n".$Vnwufml5q3nprx."\n".$V1yuhsvbtlvrmid."\nQ\n";
				$Vs0htpwzsrccndlinepos = strlen($Vsvylsg2elw5);
				if ($Vnwufml5q3nphis->inxobj) {
					
					$Vnwufml5q3nphis->xobjects[$Vnwufml5q3nphis->xobjid]['outdata'] = $Vsvylsg2elw5.$Vqt54avvjrsw;
					foreach ($Vnwufml5q3nphis->xobjects[$Vnwufml5q3nphis->xobjid]['annotations'] as $V1yuhsvbtlvrak => $V1yuhsvbtlvrac) {
						if ($V1yuhsvbtlvrak >= $V1yuhsvbtlvrask) {
							$Vnwufml5q3nphis->xobjects[$Vnwufml5q3nphis->xobjid]['annotations'][$V1yuhsvbtlvrak]['x'] += $Vnwufml5q3np_x;
							$Vnwufml5q3nphis->xobjects[$Vnwufml5q3nphis->xobjid]['annotations'][$V1yuhsvbtlvrak]['y'] -= $Vgxufordoa4tshift;
						}
					}
				} else {
					$Vnwufml5q3nphis->setPageBuffer($Vvt20qqut4butartlinepage, $Vsvylsg2elw5.$Vqt54avvjrsw);
					
					if (isset($Vnwufml5q3nphis->PageAnnots[$Vnwufml5q3nphis->page])) {
						foreach ($Vnwufml5q3nphis->PageAnnots[$Vnwufml5q3nphis->page] as $V1yuhsvbtlvrak => $V1yuhsvbtlvrac) {
							if ($V1yuhsvbtlvrak >= $V1yuhsvbtlvrask) {
								$Vnwufml5q3nphis->PageAnnots[$Vnwufml5q3nphis->page][$V1yuhsvbtlvrak]['x'] += $Vnwufml5q3np_x;
								$Vnwufml5q3nphis->PageAnnots[$Vnwufml5q3nphis->page][$V1yuhsvbtlvrak]['y'] -= $Vgxufordoa4tshift;
							}
						}
					}
				}
				$Vnwufml5q3nphis->y -= $Vgxufordoa4tshift;
				$Vgxufordoa4tshift = 0;
			}
		}
		
		$Vnwufml5q3nphis->setGraphicVars($Vfbwtdiv4emm);
		if ($Vnwufml5q3nphis->num_columns > 1) {
			$Vnwufml5q3nphis->selectColumn();
		} elseif ($Vnwufml5q3nphis->page > $V1yuhsvbtlvrrevPage) {
			$Vnwufml5q3nphis->lMargin = $Vnwufml5q3nphis->pagedim[$Vnwufml5q3nphis->page]['olm'];
			$Vnwufml5q3nphis->rMargin = $Vnwufml5q3nphis->pagedim[$Vnwufml5q3nphis->page]['orm'];
		}
		
		$Vnwufml5q3nphis->cell_height_ratio = $V1yuhsvbtlvrrev_cell_height_ratio;
		$Vnwufml5q3nphis->listnum = $V1yuhsvbtlvrrev_listnum;
		$Vnwufml5q3nphis->listordered = $V1yuhsvbtlvrrev_listordered;
		$Vnwufml5q3nphis->listcount = $V1yuhsvbtlvrrev_listcount;
		$Vnwufml5q3nphis->lispacer = $V1yuhsvbtlvrrev_lispacer;
		if ($Vx3g4ytafo1an AND (!($Vwcmlurixvzgell AND ($Vc0aiseldrl3om[$Vl0q4noiexi4ey-1]['value'] == 'table')))) {
			$Vnwufml5q3nphis->Ln($Vnwufml5q3nphis->lasth);
			if (($Vnwufml5q3nphis->y < $Vetludueqmbtaxbottomliney) AND ($Vvt20qqut4butartlinepage == $Vnwufml5q3nphis->page)) {
				$Vnwufml5q3nphis->y = $Vetludueqmbtaxbottomliney;
			}
		}
		unset($Vc0aiseldrl3om);
	}

	
	protected function openHTMLTagHandler($Vc0aiseldrl3om, $Vl0q4noiexi4ey, $Vwcmlurixvzgell) {
		$Vnwufml5q3npag = $Vc0aiseldrl3om[$Vl0q4noiexi4ey];
		$V1yuhsvbtlvrarent = $Vc0aiseldrl3om[($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent'])];
		$Vxb0ra0fqzn2irsttag = ($Vl0q4noiexi4ey == 1);
		
		if (isset($Vnwufml5q3npag['dir'])) {
			$Vnwufml5q3nphis->setTempRTL($Vnwufml5q3npag['dir']);
		} else {
			$Vnwufml5q3nphis->tmprtl = false;
		}
		if ($Vnwufml5q3npag['block']) {
			$Vvjxcwrp4tjqbz = 0; 
			$Vvjxcwrp4tjqb = 0; 
			
			if (isset($Vnwufml5q3nphis->tagvspaces[$Vnwufml5q3npag['value']][0]['h']) AND ($Vnwufml5q3nphis->tagvspaces[$Vnwufml5q3npag['value']][0]['h'] >= 0)) {
				$Vwcmlurixvzgur_h = $Vnwufml5q3nphis->tagvspaces[$Vnwufml5q3npag['value']][0]['h'];
			} elseif (isset($Vnwufml5q3npag['fontsize'])) {
				$Vwcmlurixvzgur_h = $Vnwufml5q3nphis->getCellHeight($Vnwufml5q3npag['fontsize'] / $Vnwufml5q3nphis->k);
			} else {
				$Vwcmlurixvzgur_h = $Vnwufml5q3nphis->getCellHeight($Vnwufml5q3nphis->FontSize);
			}
			if (isset($Vnwufml5q3nphis->tagvspaces[$Vnwufml5q3npag['value']][0]['n'])) {
				$Vk1y4jyuc5nsn = $Vnwufml5q3nphis->tagvspaces[$Vnwufml5q3npag['value']][0]['n'];
			} elseif (preg_match('/[h][0-9]/', $Vnwufml5q3npag['value']) > 0) {
				$Vk1y4jyuc5nsn = 0.6;
			} else {
				$Vk1y4jyuc5nsn = 1;
			}
			if ((!isset($Vnwufml5q3nphis->tagvspaces[$Vnwufml5q3npag['value']])) AND (in_array($Vnwufml5q3npag['value'], array('div', 'dt', 'dd', 'li', 'br', 'hr')))) {
				$Vvjxcwrp4tjqb = 0;
			} else {
				$Vvjxcwrp4tjqb = ($Vk1y4jyuc5nsn * $Vwcmlurixvzgur_h);
			}
			if (($Vnwufml5q3nphis->htmlvspace <= 0) AND ($Vk1y4jyuc5nsn > 0)) {
				if (isset($V1yuhsvbtlvrarent['fontsize'])) {
					$Vvjxcwrp4tjqbz = (($V1yuhsvbtlvrarent['fontsize'] / $Vnwufml5q3nphis->k) * $Vnwufml5q3nphis->cell_height_ratio);
				} else {
					$Vvjxcwrp4tjqbz = $Vnwufml5q3nphis->getCellHeight($Vnwufml5q3nphis->FontSize);
				}
			}
			if (isset($Vc0aiseldrl3om[($Vl0q4noiexi4ey - 1)]) AND ($Vc0aiseldrl3om[($Vl0q4noiexi4ey - 1)]['value'] == 'table')) {
				
				$Vvjxcwrp4tjqbz = 0;
			}
			
			$Vvjxcwrp4tjqbc = 0;
			if (isset($Vnwufml5q3nphis->tagvspaces[$Vnwufml5q3npag['value']][1]['h']) AND ($Vnwufml5q3nphis->tagvspaces[$Vnwufml5q3npag['value']][1]['h'] >= 0)) {
				$V1yuhsvbtlvrre_h = $Vnwufml5q3nphis->tagvspaces[$Vnwufml5q3npag['value']][1]['h'];
			} elseif (isset($V1yuhsvbtlvrarent['fontsize'])) {
				$V1yuhsvbtlvrre_h = $Vnwufml5q3nphis->getCellHeight($V1yuhsvbtlvrarent['fontsize'] / $Vnwufml5q3nphis->k);
			} else {
				$V1yuhsvbtlvrre_h = $Vnwufml5q3nphis->getCellHeight($Vnwufml5q3nphis->FontSize);
			}
			if (isset($Vnwufml5q3nphis->tagvspaces[$Vnwufml5q3npag['value']][1]['n'])) {
				$Vwcmlurixvzgn = $Vnwufml5q3nphis->tagvspaces[$Vnwufml5q3npag['value']][1]['n'];
			} elseif (preg_match('/[h][0-9]/', $Vnwufml5q3npag['value']) > 0) {
				$Vwcmlurixvzgn = 0.6;
			} else {
				$Vwcmlurixvzgn = 1;
			}
			if (isset($Vnwufml5q3nphis->tagvspaces[$Vnwufml5q3npag['value']][1])) {
				$Vvjxcwrp4tjqbc = ($Vwcmlurixvzgn * $V1yuhsvbtlvrre_h);
			}
		}
		
		switch($Vnwufml5q3npag['value']) {
			case 'table': {
				$Vyltsm3nt5sw = 0;
				$Vwcmlurixvzgs = 0;
				$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['rowspans'] = array();
				if (!isset($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['attribute']['nested']) OR ($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['attribute']['nested'] != 'true')) {
					$Vnwufml5q3nphis->htmlvspace = 0;
					
					if (!TCPDF_STATIC::empty_string($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['thead'])) {
						
						$Vnwufml5q3nphis->thead = $Vc0aiseldrl3om[$Vl0q4noiexi4ey]['thead'];
						if (!isset($Vnwufml5q3nphis->theadMargins) OR (empty($Vnwufml5q3nphis->theadMargins))) {
							$Vnwufml5q3nphis->theadMargins = array();
							$Vnwufml5q3nphis->theadMargins['cell_padding'] = $Vnwufml5q3nphis->cell_padding;
							$Vnwufml5q3nphis->theadMargins['lmargin'] = $Vnwufml5q3nphis->lMargin;
							$Vnwufml5q3nphis->theadMargins['rmargin'] = $Vnwufml5q3nphis->rMargin;
							$Vnwufml5q3nphis->theadMargins['page'] = $Vnwufml5q3nphis->page;
							$Vnwufml5q3nphis->theadMargins['cell'] = $Vwcmlurixvzgell;
							$Vnwufml5q3nphis->theadMargins['gvars'] = $Vnwufml5q3nphis->getGraphicVars();
						}
					}
				}
				
				$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['old_cell_padding'] = $Vnwufml5q3nphis->cell_padding;
				if (isset($Vnwufml5q3npag['attribute']['cellpadding'])) {
					$Vrtfgexvs0sl = $Vnwufml5q3nphis->getHTMLUnitToUnits($Vnwufml5q3npag['attribute']['cellpadding'], 1, 'px');
					$Vnwufml5q3nphis->SetCellPadding($Vrtfgexvs0sl);
				} elseif (isset($Vnwufml5q3npag['padding'])) {
					$Vnwufml5q3nphis->cell_padding = $Vnwufml5q3npag['padding'];
				}
				if (isset($Vnwufml5q3npag['attribute']['cellspacing'])) {
					$Vwcmlurixvzgs = $Vnwufml5q3nphis->getHTMLUnitToUnits($Vnwufml5q3npag['attribute']['cellspacing'], 1, 'px');
				} elseif (isset($Vnwufml5q3npag['border-spacing'])) {
					$Vwcmlurixvzgs = $Vnwufml5q3npag['border-spacing']['V'];
				}
				$Vrcna2mbk1xx = $Vnwufml5q3nphis->y;
				if ($Vnwufml5q3nphis->checkPageBreak(((2 * $Vyltsm3nt5sw) + (2 * $Vwcmlurixvzgs) + $Vnwufml5q3nphis->lasth), '', false) OR ($Vnwufml5q3nphis->y < $Vrcna2mbk1xx)) {
					$Vnwufml5q3nphis->inthead = true;
					
					$Vnwufml5q3nphis->checkPageBreak($Vnwufml5q3nphis->PageBreakTrigger + 1);
				}
				break;
			}
			case 'tr': {
				
				$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['cellpos'] = array();
				break;
			}
			case 'hr': {
				if ((isset($Vnwufml5q3npag['height'])) AND ($Vnwufml5q3npag['height'] != '')) {
					$Vvjxcwrp4tjqrHeight = $Vnwufml5q3nphis->getHTMLUnitToUnits($Vnwufml5q3npag['height'], 1, 'px');
				} else {
					$Vvjxcwrp4tjqrHeight = $Vnwufml5q3nphis->GetLineWidth();
				}
				$Vnwufml5q3nphis->addHTMLVertSpace($Vvjxcwrp4tjqbz, max($Vvjxcwrp4tjqb, ($Vvjxcwrp4tjqrHeight / 2)), $Vwcmlurixvzgell, $Vxb0ra0fqzn2irsttag);
				$Vangwoo3ejfg = $Vnwufml5q3nphis->GetX();
				$Vgxufordoa4t = $Vnwufml5q3nphis->GetY();
				$Vim12f51jw5rtmp = $Vnwufml5q3nphis->w - $Vnwufml5q3nphis->lMargin - $Vnwufml5q3nphis->rMargin;
				if ($Vwcmlurixvzgell) {
					$Vim12f51jw5rtmp -= ($Vnwufml5q3nphis->cell_padding['L'] + $Vnwufml5q3nphis->cell_padding['R']);
				}
				if ((isset($Vnwufml5q3npag['width'])) AND ($Vnwufml5q3npag['width'] != '')) {
					$Vvjxcwrp4tjqrWidth = $Vnwufml5q3nphis->getHTMLUnitToUnits($Vnwufml5q3npag['width'], $Vim12f51jw5rtmp, 'px');
				} else {
					$Vvjxcwrp4tjqrWidth = $Vim12f51jw5rtmp;
				}
				$V1yuhsvbtlvrrevlinewidth = $Vnwufml5q3nphis->GetLineWidth();
				$Vnwufml5q3nphis->SetLineWidth($Vvjxcwrp4tjqrHeight);
				$Vnwufml5q3nphis->Line($Vangwoo3ejfg, $Vgxufordoa4t, $Vangwoo3ejfg + $Vvjxcwrp4tjqrWidth, $Vgxufordoa4t);
				$Vnwufml5q3nphis->SetLineWidth($V1yuhsvbtlvrrevlinewidth);
				$Vnwufml5q3nphis->addHTMLVertSpace(max($Vvjxcwrp4tjqbc, ($Vvjxcwrp4tjqrHeight / 2)), 0, $Vwcmlurixvzgell, !isset($Vc0aiseldrl3om[($Vl0q4noiexi4ey + 1)]));
				break;
			}
			case 'a': {
				if (array_key_exists('href', $Vnwufml5q3npag['attribute'])) {
					$Vnwufml5q3nphis->HREF['url'] = $Vnwufml5q3npag['attribute']['href'];
				}
				break;
			}
			case 'img': {
				if (!empty($Vnwufml5q3npag['attribute']['src'])) {
					if ($Vnwufml5q3npag['attribute']['src'][0] === '@') {
						
						$Vnwufml5q3npag['attribute']['src'] = '@'.base64_decode(substr($Vnwufml5q3npag['attribute']['src'], 1));
						$Vvmwm1jsklgc = '';
					} else {
						
						$Vvmwm1jsklgc = TCPDF_IMAGES::getImageFileType($Vnwufml5q3npag['attribute']['src']);
					}
					if (!isset($Vnwufml5q3npag['width'])) {
						$Vnwufml5q3npag['width'] = 0;
					}
					if (!isset($Vnwufml5q3npag['height'])) {
						$Vnwufml5q3npag['height'] = 0;
					}
					
						
						
						$Vnwufml5q3npag['attribute']['align'] = 'bottom';
					
					switch($Vnwufml5q3npag['attribute']['align']) {
						case 'top': {
							$Vb5kn1gbu0ep = 'T';
							break;
						}
						case 'middle': {
							$Vb5kn1gbu0ep = 'M';
							break;
						}
						case 'bottom': {
							$Vb5kn1gbu0ep = 'B';
							break;
						}
						default: {
							$Vb5kn1gbu0ep = 'B';
							break;
						}
					}
					$V1yuhsvbtlvrrevy = $Vnwufml5q3nphis->y;
					$Vangwoo3ejfgpos = $Vnwufml5q3nphis->x;
					$V55vc4mewy5wmglink = '';
					if (isset($Vnwufml5q3nphis->HREF['url']) AND !TCPDF_STATIC::empty_string($Vnwufml5q3nphis->HREF['url'])) {
						$V55vc4mewy5wmglink = $Vnwufml5q3nphis->HREF['url'];
						if ($V55vc4mewy5wmglink[0] == '#') {
							
							$Vx3g4ytafo1ankdata = explode(',', $V55vc4mewy5wmglink);
							if (isset($Vx3g4ytafo1ankdata[0])) {
								$Vwfolue42pzj = intval(substr($Vx3g4ytafo1ankdata[0], 1));
								if (empty($Vwfolue42pzj) OR ($Vwfolue42pzj <= 0)) {
									$Vwfolue42pzj = $Vnwufml5q3nphis->page;
								}
								if (isset($Vx3g4ytafo1ankdata[1]) AND (strlen($Vx3g4ytafo1ankdata[1]) > 0)) {
									$Vx3g4ytafo1anky = floatval($Vx3g4ytafo1ankdata[1]);
								} else {
									$Vx3g4ytafo1anky = 0;
								}
								$V55vc4mewy5wmglink = $Vnwufml5q3nphis->AddLink();
								$Vnwufml5q3nphis->SetLink($V55vc4mewy5wmglink, $Vx3g4ytafo1anky, $Vwfolue42pzj);
							}
						}
					}
					$Vgffhwoemo4c = 0;
					if (isset($Vnwufml5q3npag['border']) AND !empty($Vnwufml5q3npag['border'])) {
						
						$Vgffhwoemo4c = $Vnwufml5q3npag['border'];
					}
					$V55vc4mewy5ww = '';
					if (isset($Vnwufml5q3npag['width'])) {
						$V55vc4mewy5ww = $Vnwufml5q3nphis->getHTMLUnitToUnits($Vnwufml5q3npag['width'], ($Vnwufml5q3npag['fontsize'] / $Vnwufml5q3nphis->k), 'px', false);
					}
					$V55vc4mewy5wh = '';
					if (isset($Vnwufml5q3npag['height'])) {
						$V55vc4mewy5wh = $Vnwufml5q3nphis->getHTMLUnitToUnits($Vnwufml5q3npag['height'], ($Vnwufml5q3npag['fontsize'] / $Vnwufml5q3nphis->k), 'px', false);
					}
					if (($Vvmwm1jsklgc == 'eps') OR ($Vvmwm1jsklgc == 'ai')) {
						$Vnwufml5q3nphis->ImageEps($Vnwufml5q3npag['attribute']['src'], $Vangwoo3ejfgpos, $Vnwufml5q3nphis->y, $V55vc4mewy5ww, $V55vc4mewy5wh, $V55vc4mewy5wmglink, true, $Vb5kn1gbu0ep, '', $Vgffhwoemo4c, true);
					} elseif ($Vvmwm1jsklgc == 'svg') {
						$Vnwufml5q3nphis->ImageSVG($Vnwufml5q3npag['attribute']['src'], $Vangwoo3ejfgpos, $Vnwufml5q3nphis->y, $V55vc4mewy5ww, $V55vc4mewy5wh, $V55vc4mewy5wmglink, $Vb5kn1gbu0ep, '', $Vgffhwoemo4c, true);
					} else {
						$Vnwufml5q3nphis->Image($Vnwufml5q3npag['attribute']['src'], $Vangwoo3ejfgpos, $Vnwufml5q3nphis->y, $V55vc4mewy5ww, $V55vc4mewy5wh, '', $V55vc4mewy5wmglink, $Vb5kn1gbu0ep, false, 300, '', false, false, $Vgffhwoemo4c, false, false, true);
					}
					switch($Vb5kn1gbu0ep) {
						case 'T': {
							$Vnwufml5q3nphis->y = $V1yuhsvbtlvrrevy;
							break;
						}
						case 'M': {
							$Vnwufml5q3nphis->y = (($Vnwufml5q3nphis->img_rb_y + $V1yuhsvbtlvrrevy - ($Vnwufml5q3nphis->getCellHeight($Vnwufml5q3npag['fontsize'] / $Vnwufml5q3nphis->k))) / 2);
							break;
						}
						case 'B': {
							$Vnwufml5q3nphis->y = $Vnwufml5q3nphis->img_rb_y - ($Vnwufml5q3nphis->getCellHeight($Vnwufml5q3npag['fontsize'] / $Vnwufml5q3nphis->k) - ($Vnwufml5q3nphis->getFontDescent($Vnwufml5q3npag['fontname'], $Vnwufml5q3npag['fontstyle'], $Vnwufml5q3npag['fontsize']) * $Vnwufml5q3nphis->cell_height_ratio));
							break;
						}
					}
				}
				break;
			}
			case 'dl': {
				++$Vnwufml5q3nphis->listnum;
				if ($Vnwufml5q3nphis->listnum == 1) {
					$Vnwufml5q3nphis->addHTMLVertSpace($Vvjxcwrp4tjqbz, $Vvjxcwrp4tjqb, $Vwcmlurixvzgell, $Vxb0ra0fqzn2irsttag);
				} else {
					$Vnwufml5q3nphis->addHTMLVertSpace(0, 0, $Vwcmlurixvzgell, $Vxb0ra0fqzn2irsttag);
				}
				break;
			}
			case 'dt': {
				$Vnwufml5q3nphis->addHTMLVertSpace($Vvjxcwrp4tjqbz, $Vvjxcwrp4tjqb, $Vwcmlurixvzgell, $Vxb0ra0fqzn2irsttag);
				break;
			}
			case 'dd': {
				if ($Vnwufml5q3nphis->rtl) {
					$Vnwufml5q3nphis->rMargin += $Vnwufml5q3nphis->listindent;
				} else {
					$Vnwufml5q3nphis->lMargin += $Vnwufml5q3nphis->listindent;
				}
				++$Vnwufml5q3nphis->listindentlevel;
				$Vnwufml5q3nphis->addHTMLVertSpace($Vvjxcwrp4tjqbz, $Vvjxcwrp4tjqb, $Vwcmlurixvzgell, $Vxb0ra0fqzn2irsttag);
				break;
			}
			case 'ul':
			case 'ol': {
				++$Vnwufml5q3nphis->listnum;
				if ($Vnwufml5q3npag['value'] == 'ol') {
					$Vnwufml5q3nphis->listordered[$Vnwufml5q3nphis->listnum] = true;
				} else {
					$Vnwufml5q3nphis->listordered[$Vnwufml5q3nphis->listnum] = false;
				}
				if (isset($Vnwufml5q3npag['attribute']['start'])) {
					$Vnwufml5q3nphis->listcount[$Vnwufml5q3nphis->listnum] = intval($Vnwufml5q3npag['attribute']['start']) - 1;
				} else {
					$Vnwufml5q3nphis->listcount[$Vnwufml5q3nphis->listnum] = 0;
				}
				if ($Vnwufml5q3nphis->rtl) {
					$Vnwufml5q3nphis->rMargin += $Vnwufml5q3nphis->listindent;
					$Vnwufml5q3nphis->x -= $Vnwufml5q3nphis->listindent;
				} else {
					$Vnwufml5q3nphis->lMargin += $Vnwufml5q3nphis->listindent;
					$Vnwufml5q3nphis->x += $Vnwufml5q3nphis->listindent;
				}
				++$Vnwufml5q3nphis->listindentlevel;
				if ($Vnwufml5q3nphis->listnum == 1) {
					if ($Vl0q4noiexi4ey > 1) {
						$Vnwufml5q3nphis->addHTMLVertSpace($Vvjxcwrp4tjqbz, $Vvjxcwrp4tjqb, $Vwcmlurixvzgell, $Vxb0ra0fqzn2irsttag);
					}
				} else {
					$Vnwufml5q3nphis->addHTMLVertSpace(0, 0, $Vwcmlurixvzgell, $Vxb0ra0fqzn2irsttag);
				}
				break;
			}
			case 'li': {
				if ($Vl0q4noiexi4ey > 2) {
					$Vnwufml5q3nphis->addHTMLVertSpace($Vvjxcwrp4tjqbz, $Vvjxcwrp4tjqb, $Vwcmlurixvzgell, $Vxb0ra0fqzn2irsttag);
				}
				if ($Vnwufml5q3nphis->listordered[$Vnwufml5q3nphis->listnum]) {
					
					if (isset($V1yuhsvbtlvrarent['attribute']['type']) AND !TCPDF_STATIC::empty_string($V1yuhsvbtlvrarent['attribute']['type'])) {
						$Vnwufml5q3nphis->lispacer = $V1yuhsvbtlvrarent['attribute']['type'];
					} elseif (isset($V1yuhsvbtlvrarent['listtype']) AND !TCPDF_STATIC::empty_string($V1yuhsvbtlvrarent['listtype'])) {
						$Vnwufml5q3nphis->lispacer = $V1yuhsvbtlvrarent['listtype'];
					} elseif (isset($Vnwufml5q3nphis->lisymbol) AND !TCPDF_STATIC::empty_string($Vnwufml5q3nphis->lisymbol)) {
						$Vnwufml5q3nphis->lispacer = $Vnwufml5q3nphis->lisymbol;
					} else {
						$Vnwufml5q3nphis->lispacer = '#';
					}
					++$Vnwufml5q3nphis->listcount[$Vnwufml5q3nphis->listnum];
					if (isset($Vnwufml5q3npag['attribute']['value'])) {
						$Vnwufml5q3nphis->listcount[$Vnwufml5q3nphis->listnum] = intval($Vnwufml5q3npag['attribute']['value']);
					}
				} else {
					
					if (isset($V1yuhsvbtlvrarent['attribute']['type']) AND !TCPDF_STATIC::empty_string($V1yuhsvbtlvrarent['attribute']['type'])) {
						$Vnwufml5q3nphis->lispacer = $V1yuhsvbtlvrarent['attribute']['type'];
					} elseif (isset($V1yuhsvbtlvrarent['listtype']) AND !TCPDF_STATIC::empty_string($V1yuhsvbtlvrarent['listtype'])) {
						$Vnwufml5q3nphis->lispacer = $V1yuhsvbtlvrarent['listtype'];
					} elseif (isset($Vnwufml5q3nphis->lisymbol) AND !TCPDF_STATIC::empty_string($Vnwufml5q3nphis->lisymbol)) {
						$Vnwufml5q3nphis->lispacer = $Vnwufml5q3nphis->lisymbol;
					} else {
						$Vnwufml5q3nphis->lispacer = '!';
					}
				}
				break;
			}
			case 'blockquote': {
				if ($Vnwufml5q3nphis->rtl) {
					$Vnwufml5q3nphis->rMargin += $Vnwufml5q3nphis->listindent;
				} else {
					$Vnwufml5q3nphis->lMargin += $Vnwufml5q3nphis->listindent;
				}
				++$Vnwufml5q3nphis->listindentlevel;
				$Vnwufml5q3nphis->addHTMLVertSpace($Vvjxcwrp4tjqbz, $Vvjxcwrp4tjqb, $Vwcmlurixvzgell, $Vxb0ra0fqzn2irsttag);
				break;
			}
			case 'br': {
				$Vnwufml5q3nphis->addHTMLVertSpace($Vvjxcwrp4tjqbz, $Vvjxcwrp4tjqb, $Vwcmlurixvzgell, $Vxb0ra0fqzn2irsttag);
				break;
			}
			case 'div': {
				$Vnwufml5q3nphis->addHTMLVertSpace($Vvjxcwrp4tjqbz, $Vvjxcwrp4tjqb, $Vwcmlurixvzgell, $Vxb0ra0fqzn2irsttag);
				break;
			}
			case 'p': {
				$Vnwufml5q3nphis->addHTMLVertSpace($Vvjxcwrp4tjqbz, $Vvjxcwrp4tjqb, $Vwcmlurixvzgell, $Vxb0ra0fqzn2irsttag);
				break;
			}
			case 'pre': {
				$Vnwufml5q3nphis->addHTMLVertSpace($Vvjxcwrp4tjqbz, $Vvjxcwrp4tjqb, $Vwcmlurixvzgell, $Vxb0ra0fqzn2irsttag);
				$Vnwufml5q3nphis->premode = true;
				break;
			}
			case 'sup': {
				$Vnwufml5q3nphis->SetXY($Vnwufml5q3nphis->GetX(), $Vnwufml5q3nphis->GetY() - ((0.7 * $Vnwufml5q3nphis->FontSizePt) / $Vnwufml5q3nphis->k));
				break;
			}
			case 'sub': {
				$Vnwufml5q3nphis->SetXY($Vnwufml5q3nphis->GetX(), $Vnwufml5q3nphis->GetY() + ((0.3 * $Vnwufml5q3nphis->FontSizePt) / $Vnwufml5q3nphis->k));
				break;
			}
			case 'h1':
			case 'h2':
			case 'h3':
			case 'h4':
			case 'h5':
			case 'h6': {
				$Vnwufml5q3nphis->addHTMLVertSpace($Vvjxcwrp4tjqbz, $Vvjxcwrp4tjqb, $Vwcmlurixvzgell, $Vxb0ra0fqzn2irsttag);
				break;
			}
			
			case 'form': {
				if (isset($Vnwufml5q3npag['attribute']['action'])) {
					$Vnwufml5q3nphis->form_action = $Vnwufml5q3npag['attribute']['action'];
				} else {
					$Vnwufml5q3nphis->Error('Please explicitly set action attribute path!');
				}
				if (isset($Vnwufml5q3npag['attribute']['enctype'])) {
					$Vnwufml5q3nphis->form_enctype = $Vnwufml5q3npag['attribute']['enctype'];
				} else {
					$Vnwufml5q3nphis->form_enctype = 'application/x-www-form-urlencoded';
				}
				if (isset($Vnwufml5q3npag['attribute']['method'])) {
					$Vnwufml5q3nphis->form_mode = $Vnwufml5q3npag['attribute']['method'];
				} else {
					$Vnwufml5q3nphis->form_mode = 'post';
				}
				break;
			}
			case 'input': {
				if (isset($Vnwufml5q3npag['attribute']['name']) AND !TCPDF_STATIC::empty_string($Vnwufml5q3npag['attribute']['name'])) {
					$Vgv45dfhsyuhame = $Vnwufml5q3npag['attribute']['name'];
				} else {
					break;
				}
				$V1yuhsvbtlvrrop = array();
				$Vybdom4h5ylw = array();
				if (isset($Vnwufml5q3npag['attribute']['readonly']) AND !TCPDF_STATIC::empty_string($Vnwufml5q3npag['attribute']['readonly'])) {
					$V1yuhsvbtlvrrop['readonly'] = true;
				}
				if (isset($Vnwufml5q3npag['attribute']['value']) AND !TCPDF_STATIC::empty_string($Vnwufml5q3npag['attribute']['value'])) {
					$Vxt4wx3pvtezue = $Vnwufml5q3npag['attribute']['value'];
				}
				if (isset($Vnwufml5q3npag['attribute']['maxlength']) AND !TCPDF_STATIC::empty_string($Vnwufml5q3npag['attribute']['maxlength'])) {
					$Vybdom4h5ylw['maxlen'] = intval($Vnwufml5q3npag['attribute']['maxlength']);
				}
				$Vvjxcwrp4tjq = $Vnwufml5q3nphis->getCellHeight($Vnwufml5q3nphis->FontSize);
				if (isset($Vnwufml5q3npag['attribute']['size']) AND !TCPDF_STATIC::empty_string($Vnwufml5q3npag['attribute']['size'])) {
					$Vim12f51jw5r = intval($Vnwufml5q3npag['attribute']['size']) * $Vnwufml5q3nphis->GetStringWidth(chr(32)) * 2;
				} else {
					$Vim12f51jw5r = $Vvjxcwrp4tjq;
				}
				if (isset($Vnwufml5q3npag['attribute']['checked']) AND (($Vnwufml5q3npag['attribute']['checked'] == 'checked') OR ($Vnwufml5q3npag['attribute']['checked'] == 'true'))) {
					$Vwcmlurixvzghecked = true;
				} else {
					$Vwcmlurixvzghecked = false;
				}
				if (isset($Vnwufml5q3npag['align'])) {
					switch ($Vnwufml5q3npag['align']) {
						case 'C': {
							$Vybdom4h5ylw['q'] = 1;
							break;
						}
						case 'R': {
							$Vybdom4h5ylw['q'] = 2;
							break;
						}
						case 'L':
						default: {
							break;
						}
					}
				}
				switch ($Vnwufml5q3npag['attribute']['type']) {
					case 'text': {
						if (isset($Vxt4wx3pvtezue)) {
							$Vybdom4h5ylw['v'] = $Vxt4wx3pvtezue;
						}
						$Vnwufml5q3nphis->TextField($Vgv45dfhsyuhame, $Vim12f51jw5r, $Vvjxcwrp4tjq, $V1yuhsvbtlvrrop, $Vybdom4h5ylw, '', '', false);
						break;
					}
					case 'password': {
						if (isset($Vxt4wx3pvtezue)) {
							$Vybdom4h5ylw['v'] = $Vxt4wx3pvtezue;
						}
						$V1yuhsvbtlvrrop['password'] = 'true';
						$Vnwufml5q3nphis->TextField($Vgv45dfhsyuhame, $Vim12f51jw5r, $Vvjxcwrp4tjq, $V1yuhsvbtlvrrop, $Vybdom4h5ylw, '', '', false);
						break;
					}
					case 'checkbox': {
						if (!isset($Vxt4wx3pvtezue)) {
							break;
						}
						$Vnwufml5q3nphis->CheckBox($Vgv45dfhsyuhame, $Vim12f51jw5r, $Vwcmlurixvzghecked, $V1yuhsvbtlvrrop, $Vybdom4h5ylw, $Vxt4wx3pvtezue, '', '', false);
						break;
					}
					case 'radio': {
						if (!isset($Vxt4wx3pvtezue)) {
							break;
						}
						$Vnwufml5q3nphis->RadioButton($Vgv45dfhsyuhame, $Vim12f51jw5r, $V1yuhsvbtlvrrop, $Vybdom4h5ylw, $Vxt4wx3pvtezue, $Vwcmlurixvzghecked, '', '', false);
						break;
					}
					case 'submit': {
						if (!isset($Vxt4wx3pvtezue)) {
							$Vxt4wx3pvtezue = 'submit';
						}
						$Vim12f51jw5r = $Vnwufml5q3nphis->GetStringWidth($Vxt4wx3pvtezue) * 1.5;
						$Vvjxcwrp4tjq *= 1.6;
						$V1yuhsvbtlvrrop = array('lineWidth'=>1, 'borderStyle'=>'beveled', 'fillColor'=>array(196, 196, 196), 'strokeColor'=>array(255, 255, 255));
						$Vudz4oh4qikuction = array();
						$Vudz4oh4qikuction['S'] = 'SubmitForm';
						$Vudz4oh4qikuction['F'] = $Vnwufml5q3nphis->form_action;
						if ($Vnwufml5q3nphis->form_enctype != 'FDF') {
							$Vudz4oh4qikuction['Flags'] = array('ExportFormat');
						}
						if ($Vnwufml5q3nphis->form_mode == 'get') {
							$Vudz4oh4qikuction['Flags'] = array('GetMethod');
						}
						$Vnwufml5q3nphis->Button($Vgv45dfhsyuhame, $Vim12f51jw5r, $Vvjxcwrp4tjq, $Vxt4wx3pvtezue, $Vudz4oh4qikuction, $V1yuhsvbtlvrrop, $Vybdom4h5ylw, '', '', false);
						break;
					}
					case 'reset': {
						if (!isset($Vxt4wx3pvtezue)) {
							$Vxt4wx3pvtezue = 'reset';
						}
						$Vim12f51jw5r = $Vnwufml5q3nphis->GetStringWidth($Vxt4wx3pvtezue) * 1.5;
						$Vvjxcwrp4tjq *= 1.6;
						$V1yuhsvbtlvrrop = array('lineWidth'=>1, 'borderStyle'=>'beveled', 'fillColor'=>array(196, 196, 196), 'strokeColor'=>array(255, 255, 255));
						$Vnwufml5q3nphis->Button($Vgv45dfhsyuhame, $Vim12f51jw5r, $Vvjxcwrp4tjq, $Vxt4wx3pvtezue, array('S'=>'ResetForm'), $V1yuhsvbtlvrrop, $Vybdom4h5ylw, '', '', false);
						break;
					}
					case 'file': {
						$V1yuhsvbtlvrrop['fileSelect'] = 'true';
						$Vnwufml5q3nphis->TextField($Vgv45dfhsyuhame, $Vim12f51jw5r, $Vvjxcwrp4tjq, $V1yuhsvbtlvrrop, $Vybdom4h5ylw, '', '', false);
						if (!isset($Vxt4wx3pvtezue)) {
							$Vxt4wx3pvtezue = '*';
						}
						$Vim12f51jw5r = $Vnwufml5q3nphis->GetStringWidth($Vxt4wx3pvtezue) * 2;
						$Vvjxcwrp4tjq *= 1.2;
						$V1yuhsvbtlvrrop = array('lineWidth'=>1, 'borderStyle'=>'beveled', 'fillColor'=>array(196, 196, 196), 'strokeColor'=>array(255, 255, 255));
						$Vuaufi3la1vgsaction = 'var f=this.getField(\''.$Vgv45dfhsyuhame.'\'); f.browseForFileToSubmit();';
						$Vnwufml5q3nphis->Button('FB_'.$Vgv45dfhsyuhame, $Vim12f51jw5r, $Vvjxcwrp4tjq, $Vxt4wx3pvtezue, $Vuaufi3la1vgsaction, $V1yuhsvbtlvrrop, $Vybdom4h5ylw, '', '', false);
						break;
					}
					case 'hidden': {
						if (isset($Vxt4wx3pvtezue)) {
							$Vybdom4h5ylw['v'] = $Vxt4wx3pvtezue;
						}
						$Vybdom4h5ylw['f'] = array('invisible', 'hidden');
						$Vnwufml5q3nphis->TextField($Vgv45dfhsyuhame, 0, 0, $V1yuhsvbtlvrrop, $Vybdom4h5ylw, '', '', false);
						break;
					}
					case 'image': {
						
						if (isset($Vnwufml5q3npag['attribute']['src']) AND !TCPDF_STATIC::empty_string($Vnwufml5q3npag['attribute']['src'])) {
							$V55vc4mewy5wmg = $Vnwufml5q3npag['attribute']['src'];
						} else {
							break;
						}
						$Vxt4wx3pvtezue = 'img';
						
						if (isset($Vnwufml5q3npag['attribute']['onclick']) AND !empty($Vnwufml5q3npag['attribute']['onclick'])) {
							$Vuaufi3la1vgsaction = $Vnwufml5q3npag['attribute']['onclick'];
						} else {
							$Vuaufi3la1vgsaction = '';
						}
						$Vnwufml5q3nphis->Button($Vgv45dfhsyuhame, $Vim12f51jw5r, $Vvjxcwrp4tjq, $Vxt4wx3pvtezue, $Vuaufi3la1vgsaction, $V1yuhsvbtlvrrop, $Vybdom4h5ylw, '', '', false);
						break;
					}
					case 'button': {
						if (!isset($Vxt4wx3pvtezue)) {
							$Vxt4wx3pvtezue = ' ';
						}
						$Vim12f51jw5r = $Vnwufml5q3nphis->GetStringWidth($Vxt4wx3pvtezue) * 1.5;
						$Vvjxcwrp4tjq *= 1.6;
						$V1yuhsvbtlvrrop = array('lineWidth'=>1, 'borderStyle'=>'beveled', 'fillColor'=>array(196, 196, 196), 'strokeColor'=>array(255, 255, 255));
						if (isset($Vnwufml5q3npag['attribute']['onclick']) AND !empty($Vnwufml5q3npag['attribute']['onclick'])) {
							$Vuaufi3la1vgsaction = $Vnwufml5q3npag['attribute']['onclick'];
						} else {
							$Vuaufi3la1vgsaction = '';
						}
						$Vnwufml5q3nphis->Button($Vgv45dfhsyuhame, $Vim12f51jw5r, $Vvjxcwrp4tjq, $Vxt4wx3pvtezue, $Vuaufi3la1vgsaction, $V1yuhsvbtlvrrop, $Vybdom4h5ylw, '', '', false);
						break;
					}
				}
				break;
			}
			case 'textarea': {
				$V1yuhsvbtlvrrop = array();
				$Vybdom4h5ylw = array();
				if (isset($Vnwufml5q3npag['attribute']['readonly']) AND !TCPDF_STATIC::empty_string($Vnwufml5q3npag['attribute']['readonly'])) {
					$V1yuhsvbtlvrrop['readonly'] = true;
				}
				if (isset($Vnwufml5q3npag['attribute']['name']) AND !TCPDF_STATIC::empty_string($Vnwufml5q3npag['attribute']['name'])) {
					$Vgv45dfhsyuhame = $Vnwufml5q3npag['attribute']['name'];
				} else {
					break;
				}
				if (isset($Vnwufml5q3npag['attribute']['value']) AND !TCPDF_STATIC::empty_string($Vnwufml5q3npag['attribute']['value'])) {
					$Vybdom4h5ylw['v'] = $Vnwufml5q3npag['attribute']['value'];
				}
				if (isset($Vnwufml5q3npag['attribute']['cols']) AND !TCPDF_STATIC::empty_string($Vnwufml5q3npag['attribute']['cols'])) {
					$Vim12f51jw5r = intval($Vnwufml5q3npag['attribute']['cols']) * $Vnwufml5q3nphis->GetStringWidth(chr(32)) * 2;
				} else {
					$Vim12f51jw5r = 40;
				}
				if (isset($Vnwufml5q3npag['attribute']['rows']) AND !TCPDF_STATIC::empty_string($Vnwufml5q3npag['attribute']['rows'])) {
					$Vvjxcwrp4tjq = intval($Vnwufml5q3npag['attribute']['rows']) * $Vnwufml5q3nphis->getCellHeight($Vnwufml5q3nphis->FontSize);
				} else {
					$Vvjxcwrp4tjq = 10;
				}
				$V1yuhsvbtlvrrop['multiline'] = 'true';
				$Vnwufml5q3nphis->TextField($Vgv45dfhsyuhame, $Vim12f51jw5r, $Vvjxcwrp4tjq, $V1yuhsvbtlvrrop, $Vybdom4h5ylw, '', '', false);
				break;
			}
			case 'select': {
				$Vvjxcwrp4tjq = $Vnwufml5q3nphis->getCellHeight($Vnwufml5q3nphis->FontSize);
				if (isset($Vnwufml5q3npag['attribute']['size']) AND !TCPDF_STATIC::empty_string($Vnwufml5q3npag['attribute']['size'])) {
					$Vvjxcwrp4tjq *= ($Vnwufml5q3npag['attribute']['size'] + 1);
				}
				$V1yuhsvbtlvrrop = array();
				$Vybdom4h5ylw = array();
				if (isset($Vnwufml5q3npag['attribute']['name']) AND !TCPDF_STATIC::empty_string($Vnwufml5q3npag['attribute']['name'])) {
					$Vgv45dfhsyuhame = $Vnwufml5q3npag['attribute']['name'];
				} else {
					break;
				}
				$Vim12f51jw5r = 0;
				if (isset($Vnwufml5q3npag['attribute']['opt']) AND !TCPDF_STATIC::empty_string($Vnwufml5q3npag['attribute']['opt'])) {
					$Vybdom4h5ylwions = explode('#!NwL!#', $Vnwufml5q3npag['attribute']['opt']);
					$Vxt4wx3pvtezues = array();
					foreach ($Vybdom4h5ylwions as $Vxt4wx3pvtez) {
						if (strpos($Vxt4wx3pvtez, '#!TaB!#') !== false) {
							$Vybdom4h5ylws = explode('#!TaB!#', $Vxt4wx3pvtez);
							$Vxt4wx3pvtezues[] = $Vybdom4h5ylws;
							$Vim12f51jw5r = max($Vim12f51jw5r, $Vnwufml5q3nphis->GetStringWidth($Vybdom4h5ylws[1]));
						} else {
							$Vxt4wx3pvtezues[] = $Vxt4wx3pvtez;
							$Vim12f51jw5r = max($Vim12f51jw5r, $Vnwufml5q3nphis->GetStringWidth($Vxt4wx3pvtez));
						}
					}
				} else {
					break;
				}
				$Vim12f51jw5r *= 2;
				if (isset($Vnwufml5q3npag['attribute']['multiple']) AND ($Vnwufml5q3npag['attribute']['multiple']='multiple')) {
					$V1yuhsvbtlvrrop['multipleSelection'] = 'true';
					$Vnwufml5q3nphis->ListBox($Vgv45dfhsyuhame, $Vim12f51jw5r, $Vvjxcwrp4tjq, $Vxt4wx3pvtezues, $V1yuhsvbtlvrrop, $Vybdom4h5ylw, '', '', false);
				} else {
					$Vnwufml5q3nphis->ComboBox($Vgv45dfhsyuhame, $Vim12f51jw5r, $Vvjxcwrp4tjq, $Vxt4wx3pvtezues, $V1yuhsvbtlvrrop, $Vybdom4h5ylw, '', '', false);
				}
				break;
			}
			case 'tcpdf': {
				if (defined('K_TCPDF_CALLS_IN_HTML') AND (K_TCPDF_CALLS_IN_HTML === true)) {
					
					if (isset($Vnwufml5q3npag['attribute']['method'])) {
						$Vx5f2r0jjzqspdf_method = $Vnwufml5q3npag['attribute']['method'];
						if (method_exists($Vnwufml5q3nphis, $Vx5f2r0jjzqspdf_method)) {
							if (isset($Vnwufml5q3npag['attribute']['params']) AND (!empty($Vnwufml5q3npag['attribute']['params']))) {
								$V1yuhsvbtlvrarams = $Vnwufml5q3nphis->unserializeTCPDFtagParameters($Vnwufml5q3npag['attribute']['params']);
								call_user_func_array(array($Vnwufml5q3nphis, $Vx5f2r0jjzqspdf_method), $V1yuhsvbtlvrarams);
							} else {
								$Vnwufml5q3nphis->$Vx5f2r0jjzqspdf_method();
							}
							$Vnwufml5q3nphis->newline = true;
						}
					}
				}
				break;
			}
			default: {
				break;
			}
		}
		
		$Vgffhwoemo4ctags = array('blockquote','br','dd','dl','div','dt','h1','h2','h3','h4','h5','h6','hr','li','ol','p','pre','ul','tcpdf','table');
		if (in_array($Vnwufml5q3npag['value'], $Vgffhwoemo4ctags)) {
			
			$Vc0aiseldrl3om[$Vl0q4noiexi4ey]['borderposition'] = $Vnwufml5q3nphis->getBorderStartPosition();
		}
		if ($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['self'] AND isset($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['attribute']['pagebreakafter'])) {
			$V1yuhsvbtlvrba = $Vc0aiseldrl3om[$Vl0q4noiexi4ey]['attribute']['pagebreakafter'];
			
			if (($V1yuhsvbtlvrba == 'true') OR ($V1yuhsvbtlvrba == 'left') OR ($V1yuhsvbtlvrba == 'right')) {
				
				$Vnwufml5q3nphis->checkPageBreak($Vnwufml5q3nphis->PageBreakTrigger + 1);
			}
			if ((($V1yuhsvbtlvrba == 'left') AND (((!$Vnwufml5q3nphis->rtl) AND (($Vnwufml5q3nphis->page % 2) == 0)) OR (($Vnwufml5q3nphis->rtl) AND (($Vnwufml5q3nphis->page % 2) != 0))))
				OR (($V1yuhsvbtlvrba == 'right') AND (((!$Vnwufml5q3nphis->rtl) AND (($Vnwufml5q3nphis->page % 2) != 0)) OR (($Vnwufml5q3nphis->rtl) AND (($Vnwufml5q3nphis->page % 2) == 0))))) {
				
				$Vnwufml5q3nphis->checkPageBreak($Vnwufml5q3nphis->PageBreakTrigger + 1);
			}
		}
		return $Vc0aiseldrl3om;
	}

	
	protected function closeHTMLTagHandler($Vc0aiseldrl3om, $Vl0q4noiexi4ey, $Vwcmlurixvzgell, $Vetludueqmbtaxbottomliney=0) {
		$Vnwufml5q3npag = $Vc0aiseldrl3om[$Vl0q4noiexi4ey];
		$V1yuhsvbtlvrarent = $Vc0aiseldrl3om[($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent'])];
		$Vx3g4ytafo1aasttag = ((!isset($Vc0aiseldrl3om[($Vl0q4noiexi4ey + 1)])) OR ((!isset($Vc0aiseldrl3om[($Vl0q4noiexi4ey + 2)])) AND ($Vc0aiseldrl3om[($Vl0q4noiexi4ey + 1)]['value'] == 'marker')));
		$V55vc4mewy5wn_table_head = false;
		
		if ($Vnwufml5q3nphis->rtl) {
			$Vangwoo3ejfgmax = $Vnwufml5q3nphis->w;
		} else {
			$Vangwoo3ejfgmax = 0;
		}
		if ($Vnwufml5q3npag['block']) {
			$Vvjxcwrp4tjqbz = 0; 
			$Vvjxcwrp4tjqb = 0; 
			
			if (isset($Vnwufml5q3nphis->tagvspaces[$Vnwufml5q3npag['value']][1]['h']) AND ($Vnwufml5q3nphis->tagvspaces[$Vnwufml5q3npag['value']][1]['h'] >= 0)) {
				$V1yuhsvbtlvrre_h = $Vnwufml5q3nphis->tagvspaces[$Vnwufml5q3npag['value']][1]['h'];
			} elseif (isset($V1yuhsvbtlvrarent['fontsize'])) {
				$V1yuhsvbtlvrre_h = $Vnwufml5q3nphis->getCellHeight($V1yuhsvbtlvrarent['fontsize'] / $Vnwufml5q3nphis->k);
			} else {
				$V1yuhsvbtlvrre_h = $Vnwufml5q3nphis->getCellHeight($Vnwufml5q3nphis->FontSize);
			}
			if (isset($Vnwufml5q3nphis->tagvspaces[$Vnwufml5q3npag['value']][1]['n'])) {
				$Vwcmlurixvzgn = $Vnwufml5q3nphis->tagvspaces[$Vnwufml5q3npag['value']][1]['n'];
			} elseif (preg_match('/[h][0-9]/', $Vnwufml5q3npag['value']) > 0) {
				$Vwcmlurixvzgn = 0.6;
			} else {
				$Vwcmlurixvzgn = 1;
			}
			if ((!isset($Vnwufml5q3nphis->tagvspaces[$Vnwufml5q3npag['value']])) AND ($Vnwufml5q3npag['value'] == 'div')) {
				$Vvjxcwrp4tjqb = 0;
			} else {
				$Vvjxcwrp4tjqb = ($Vwcmlurixvzgn * $V1yuhsvbtlvrre_h);
			}
			if ($Vetludueqmbtaxbottomliney > $Vnwufml5q3nphis->PageBreakTrigger) {
				$Vvjxcwrp4tjqbz = $Vnwufml5q3nphis->getCellHeight($Vnwufml5q3nphis->FontSize);
			} elseif ($Vnwufml5q3nphis->y < $Vetludueqmbtaxbottomliney) {
				$Vvjxcwrp4tjqbz = ($Vetludueqmbtaxbottomliney - $Vnwufml5q3nphis->y);
			}
		}
		
		switch($Vnwufml5q3npag['value']) {
			case 'tr': {
				$Vnwufml5q3npable_el = $Vc0aiseldrl3om[($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent'])]['parent'];
				if (!isset($V1yuhsvbtlvrarent['endy'])) {
					$Vc0aiseldrl3om[($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent'])]['endy'] = $Vnwufml5q3nphis->y;
					$V1yuhsvbtlvrarent['endy'] = $Vnwufml5q3nphis->y;
				}
				if (!isset($V1yuhsvbtlvrarent['endpage'])) {
					$Vc0aiseldrl3om[($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent'])]['endpage'] = $Vnwufml5q3nphis->page;
					$V1yuhsvbtlvrarent['endpage'] = $Vnwufml5q3nphis->page;
				}
				if (!isset($V1yuhsvbtlvrarent['endcolumn'])) {
					$Vc0aiseldrl3om[($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent'])]['endcolumn'] = $Vnwufml5q3nphis->current_column;
					$V1yuhsvbtlvrarent['endcolumn'] = $Vnwufml5q3nphis->current_column;
				}
				
				if (isset($Vc0aiseldrl3om[$Vnwufml5q3npable_el]['rowspans'])) {
					foreach ($Vc0aiseldrl3om[$Vnwufml5q3npable_el]['rowspans'] as $Vl0q4noiexi4 => $Vnwufml5q3nprwsp) {
						$Vc0aiseldrl3om[$Vnwufml5q3npable_el]['rowspans'][$Vl0q4noiexi4]['rowspan'] -= 1;
						if ($Vc0aiseldrl3om[$Vnwufml5q3npable_el]['rowspans'][$Vl0q4noiexi4]['rowspan'] == 0) {
							if (($Vc0aiseldrl3om[$Vnwufml5q3npable_el]['rowspans'][$Vl0q4noiexi4]['endpage'] == $V1yuhsvbtlvrarent['endpage']) AND ($Vc0aiseldrl3om[$Vnwufml5q3npable_el]['rowspans'][$Vl0q4noiexi4]['endcolumn'] == $V1yuhsvbtlvrarent['endcolumn'])) {
								$Vc0aiseldrl3om[($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent'])]['endy'] = max($Vc0aiseldrl3om[$Vnwufml5q3npable_el]['rowspans'][$Vl0q4noiexi4]['endy'], $V1yuhsvbtlvrarent['endy']);
							} elseif (($Vc0aiseldrl3om[$Vnwufml5q3npable_el]['rowspans'][$Vl0q4noiexi4]['endpage'] > $V1yuhsvbtlvrarent['endpage']) OR ($Vc0aiseldrl3om[$Vnwufml5q3npable_el]['rowspans'][$Vl0q4noiexi4]['endcolumn'] > $V1yuhsvbtlvrarent['endcolumn'])) {
								$Vc0aiseldrl3om[($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent'])]['endy'] = $Vc0aiseldrl3om[$Vnwufml5q3npable_el]['rowspans'][$Vl0q4noiexi4]['endy'];
								$Vc0aiseldrl3om[($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent'])]['endpage'] = $Vc0aiseldrl3om[$Vnwufml5q3npable_el]['rowspans'][$Vl0q4noiexi4]['endpage'];
								$Vc0aiseldrl3om[($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent'])]['endcolumn'] = $Vc0aiseldrl3om[$Vnwufml5q3npable_el]['rowspans'][$Vl0q4noiexi4]['endcolumn'];
							}
						}
					}
					
					foreach ($Vc0aiseldrl3om[$Vnwufml5q3npable_el]['rowspans'] as $Vl0q4noiexi4 => $Vnwufml5q3nprwsp) {
						if ($Vc0aiseldrl3om[$Vnwufml5q3npable_el]['rowspans'][$Vl0q4noiexi4]['rowspan'] == 0) {
							$Vc0aiseldrl3om[$Vnwufml5q3npable_el]['rowspans'][$Vl0q4noiexi4]['endpage'] = max($Vc0aiseldrl3om[$Vnwufml5q3npable_el]['rowspans'][$Vl0q4noiexi4]['endpage'], $Vc0aiseldrl3om[($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent'])]['endpage']);
							$Vc0aiseldrl3om[($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent'])]['endpage'] = $Vc0aiseldrl3om[$Vnwufml5q3npable_el]['rowspans'][$Vl0q4noiexi4]['endpage'];
							$Vc0aiseldrl3om[$Vnwufml5q3npable_el]['rowspans'][$Vl0q4noiexi4]['endcolumn'] = max($Vc0aiseldrl3om[$Vnwufml5q3npable_el]['rowspans'][$Vl0q4noiexi4]['endcolumn'], $Vc0aiseldrl3om[($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent'])]['endcolumn']);
							$Vc0aiseldrl3om[($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent'])]['endcolumn'] = $Vc0aiseldrl3om[$Vnwufml5q3npable_el]['rowspans'][$Vl0q4noiexi4]['endcolumn'];
							$Vc0aiseldrl3om[$Vnwufml5q3npable_el]['rowspans'][$Vl0q4noiexi4]['endy'] = max($Vc0aiseldrl3om[$Vnwufml5q3npable_el]['rowspans'][$Vl0q4noiexi4]['endy'], $Vc0aiseldrl3om[($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent'])]['endy']);
							$Vc0aiseldrl3om[($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent'])]['endy'] = $Vc0aiseldrl3om[$Vnwufml5q3npable_el]['rowspans'][$Vl0q4noiexi4]['endy'];
						}
					}
					
					foreach ($Vc0aiseldrl3om[$Vnwufml5q3npable_el]['rowspans'] as $Vl0q4noiexi4 => $Vnwufml5q3nprwsp) {
						if ($Vc0aiseldrl3om[$Vnwufml5q3npable_el]['rowspans'][$Vl0q4noiexi4]['rowspan'] == 0) {
							$Vc0aiseldrl3om[$Vnwufml5q3npable_el]['rowspans'][$Vl0q4noiexi4]['endpage'] = $Vc0aiseldrl3om[($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent'])]['endpage'];
							$Vc0aiseldrl3om[$Vnwufml5q3npable_el]['rowspans'][$Vl0q4noiexi4]['endcolumn'] = $Vc0aiseldrl3om[($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent'])]['endcolumn'];
							$Vc0aiseldrl3om[$Vnwufml5q3npable_el]['rowspans'][$Vl0q4noiexi4]['endy'] = $Vc0aiseldrl3om[($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent'])]['endy'];
						}
					}
				}
				$V1yuhsvbtlvrrev_page = $Vnwufml5q3nphis->page;
				$Vnwufml5q3nphis->setPage($Vc0aiseldrl3om[($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent'])]['endpage']);
				if ($Vnwufml5q3nphis->num_columns > 1) {
					if (($V1yuhsvbtlvrrev_page < $Vnwufml5q3nphis->page)
						AND ((($Vnwufml5q3nphis->current_column == 0) AND ($Vc0aiseldrl3om[($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent'])]['endcolumn'] == ($Vnwufml5q3nphis->num_columns - 1)))
							OR ($Vnwufml5q3nphis->current_column == $Vc0aiseldrl3om[($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent'])]['endcolumn']))) {
						
						$Vnwufml5q3nphis->selectColumn(0);
						$Vc0aiseldrl3om[($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent'])]['endcolumn'] = 0;
						$Vc0aiseldrl3om[($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent'])]['endy'] = $Vnwufml5q3nphis->y;
					} else {
						$Vnwufml5q3nphis->selectColumn($Vc0aiseldrl3om[($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent'])]['endcolumn']);
						$Vnwufml5q3nphis->y = $Vc0aiseldrl3om[($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent'])]['endy'];
					}
				} else {
					$Vnwufml5q3nphis->y = $Vc0aiseldrl3om[($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent'])]['endy'];
				}
				if (isset($Vc0aiseldrl3om[$Vnwufml5q3npable_el]['attribute']['cellspacing'])) {
					$Vnwufml5q3nphis->y += $Vnwufml5q3nphis->getHTMLUnitToUnits($Vc0aiseldrl3om[$Vnwufml5q3npable_el]['attribute']['cellspacing'], 1, 'px');
				} elseif (isset($Vc0aiseldrl3om[$Vnwufml5q3npable_el]['border-spacing'])) {
					$Vnwufml5q3nphis->y += $Vc0aiseldrl3om[$Vnwufml5q3npable_el]['border-spacing']['V'];
				}
				$Vnwufml5q3nphis->Ln(0, $Vwcmlurixvzgell);
				if ($Vnwufml5q3nphis->current_column == $V1yuhsvbtlvrarent['startcolumn']) {
					$Vnwufml5q3nphis->x = $V1yuhsvbtlvrarent['startx'];
				}
				
				if ($Vnwufml5q3nphis->page > $V1yuhsvbtlvrarent['startpage']) {
					if (($Vnwufml5q3nphis->rtl) AND ($Vnwufml5q3nphis->pagedim[$Vnwufml5q3nphis->page]['orm'] != $Vnwufml5q3nphis->pagedim[$V1yuhsvbtlvrarent['startpage']]['orm'])) {
						$Vnwufml5q3nphis->x -= ($Vnwufml5q3nphis->pagedim[$Vnwufml5q3nphis->page]['orm'] - $Vnwufml5q3nphis->pagedim[$V1yuhsvbtlvrarent['startpage']]['orm']);
					} elseif ((!$Vnwufml5q3nphis->rtl) AND ($Vnwufml5q3nphis->pagedim[$Vnwufml5q3nphis->page]['olm'] != $Vnwufml5q3nphis->pagedim[$V1yuhsvbtlvrarent['startpage']]['olm'])) {
						$Vnwufml5q3nphis->x += ($Vnwufml5q3nphis->pagedim[$Vnwufml5q3nphis->page]['olm'] - $Vnwufml5q3nphis->pagedim[$V1yuhsvbtlvrarent['startpage']]['olm']);
					}
				}
				break;
			}
			case 'tablehead':
				
				$V55vc4mewy5wn_table_head = true;
				$Vnwufml5q3nphis->inthead = false;
			case 'table': {
				$Vnwufml5q3npable_el = $V1yuhsvbtlvrarent;
				
				if (isset($Vnwufml5q3npable_el['attribute']['border']) AND ($Vnwufml5q3npable_el['attribute']['border'] > 0)) {
					
					$Vgffhwoemo4c = array('LTRB' => array('width' => $Vnwufml5q3nphis->getCSSBorderWidth($Vnwufml5q3npable_el['attribute']['border']), 'cap'=>'square', 'join'=>'miter', 'dash'=> 0, 'color'=>array(0,0,0)));
				} else {
					$Vgffhwoemo4c = 0;
				}
				$Vc0aiseldrl3efault_border = $Vgffhwoemo4c;
				
				foreach ($Vc0aiseldrl3om[($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent'])]['trids'] as $Vuaufi3la1vg => $Vnwufml5q3nprkey) {
					
					if (isset($Vc0aiseldrl3om[($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent'])]['rowspans'])) {
						foreach ($Vc0aiseldrl3om[($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent'])]['rowspans'] as $Vl0q4noiexi4 => $Vnwufml5q3nprwsp) {
							if (isset($V1yuhsvbtlvrrevtrkey) AND ($Vnwufml5q3nprwsp['trid'] == $V1yuhsvbtlvrrevtrkey) AND ($Vnwufml5q3nprwsp['mrowspan'] > 0)) {
								$Vc0aiseldrl3om[($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent'])]['rowspans'][$Vl0q4noiexi4]['trid'] = $Vnwufml5q3nprkey;
							}
							if ($Vc0aiseldrl3om[($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent'])]['rowspans'][$Vl0q4noiexi4]['trid'] == $Vnwufml5q3nprkey) {
								$Vc0aiseldrl3om[($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent'])]['rowspans'][$Vl0q4noiexi4]['mrowspan'] -= 1;
							}
						}
					}
					if (isset($V1yuhsvbtlvrrevtrkey) AND ($Vc0aiseldrl3om[$Vnwufml5q3nprkey]['startpage'] > $Vc0aiseldrl3om[$V1yuhsvbtlvrrevtrkey]['endpage'])) {
						$V1yuhsvbtlvrgendy = $Vnwufml5q3nphis->pagedim[$Vc0aiseldrl3om[$V1yuhsvbtlvrrevtrkey]['endpage']]['hk'] - $Vnwufml5q3nphis->pagedim[$Vc0aiseldrl3om[$V1yuhsvbtlvrrevtrkey]['endpage']]['bm'];
						$Vc0aiseldrl3om[$V1yuhsvbtlvrrevtrkey]['endy'] = $V1yuhsvbtlvrgendy;
						
						if (isset($Vc0aiseldrl3om[($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent'])]['rowspans'])) {
							foreach ($Vc0aiseldrl3om[($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent'])]['rowspans'] as $Vl0q4noiexi4 => $Vnwufml5q3nprwsp) {
								if (($Vnwufml5q3nprwsp['trid'] == $V1yuhsvbtlvrrevtrkey) AND ($Vnwufml5q3nprwsp['mrowspan'] >= 0) AND ($Vnwufml5q3nprwsp['endpage'] == $Vc0aiseldrl3om[$V1yuhsvbtlvrrevtrkey]['endpage'])) {
									$Vc0aiseldrl3om[($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent'])]['rowspans'][$Vl0q4noiexi4]['endy'] = $V1yuhsvbtlvrgendy;
									$Vc0aiseldrl3om[($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent'])]['rowspans'][$Vl0q4noiexi4]['mrowspan'] = -1;
								}
							}
						}
					}
					$V1yuhsvbtlvrrevtrkey = $Vnwufml5q3nprkey;
					$Vnwufml5q3npable_el = $Vc0aiseldrl3om[($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent'])];
				}
				
				if (count($Vnwufml5q3npable_el['trids']) > 0) {
					unset($Vangwoo3ejfgmax);
				}
				foreach ($Vnwufml5q3npable_el['trids'] as $Vuaufi3la1vg => $Vnwufml5q3nprkey) {
					$V1yuhsvbtlvrarent = $Vc0aiseldrl3om[$Vnwufml5q3nprkey];
					if (!isset($Vangwoo3ejfgmax)) {
						$Vangwoo3ejfgmax = $V1yuhsvbtlvrarent['cellpos'][(count($V1yuhsvbtlvrarent['cellpos']) - 1)]['endx'];
					}
					
					foreach ($V1yuhsvbtlvrarent['cellpos'] as $Vl0q4noiexi4 => $Vwcmlurixvzgellpos) {
						if (isset($Vwcmlurixvzgellpos['rowspanid']) AND ($Vwcmlurixvzgellpos['rowspanid'] >= 0)) {
							$Vwcmlurixvzgellpos['startx'] = $Vnwufml5q3npable_el['rowspans'][($Vwcmlurixvzgellpos['rowspanid'])]['startx'];
							$Vwcmlurixvzgellpos['endx'] = $Vnwufml5q3npable_el['rowspans'][($Vwcmlurixvzgellpos['rowspanid'])]['endx'];
							$Vs0htpwzsrccndy = $Vnwufml5q3npable_el['rowspans'][($Vwcmlurixvzgellpos['rowspanid'])]['endy'];
							$Vvt20qqut4butartpage = $Vnwufml5q3npable_el['rowspans'][($Vwcmlurixvzgellpos['rowspanid'])]['startpage'];
							$Vrwpclfxab0a = $Vnwufml5q3npable_el['rowspans'][($Vwcmlurixvzgellpos['rowspanid'])]['endpage'];
							$Vvt20qqut4butartcolumn = $Vnwufml5q3npable_el['rowspans'][($Vwcmlurixvzgellpos['rowspanid'])]['startcolumn'];
							$Vchxdok1iadu = $Vnwufml5q3npable_el['rowspans'][($Vwcmlurixvzgellpos['rowspanid'])]['endcolumn'];
						} else {
							$Vs0htpwzsrccndy = $V1yuhsvbtlvrarent['endy'];
							$Vvt20qqut4butartpage = $V1yuhsvbtlvrarent['startpage'];
							$Vrwpclfxab0a = $V1yuhsvbtlvrarent['endpage'];
							$Vvt20qqut4butartcolumn = $V1yuhsvbtlvrarent['startcolumn'];
							$Vchxdok1iadu = $V1yuhsvbtlvrarent['endcolumn'];
						}
						if ($Vnwufml5q3nphis->num_columns == 0) {
							$Vnwufml5q3nphis->num_columns = 1;
						}
						if (isset($Vwcmlurixvzgellpos['border'])) {
							$Vgffhwoemo4c = $Vwcmlurixvzgellpos['border'];
						}
						if (isset($Vwcmlurixvzgellpos['bgcolor']) AND ($Vwcmlurixvzgellpos['bgcolor']) !== false) {
							$Vnwufml5q3nphis->SetFillColorArray($Vwcmlurixvzgellpos['bgcolor']);
							$Viiychbtwwwq = true;
						} else {
							$Viiychbtwwwq = false;
						}
						$Vangwoo3ejfg = $Vwcmlurixvzgellpos['startx'];
						$Vgxufordoa4t = $V1yuhsvbtlvrarent['starty'];
						$Vvt20qqut4butarty = $Vgxufordoa4t;
						$Vim12f51jw5r = abs($Vwcmlurixvzgellpos['endx'] - $Vwcmlurixvzgellpos['startx']);
						
						$Vgffhwoemo4c_start = TCPDF_STATIC::getBorderMode($Vgffhwoemo4c, $V55bt0kysqpn='start', $Vnwufml5q3nphis->opencell);
						$Vgffhwoemo4c_end = TCPDF_STATIC::getBorderMode($Vgffhwoemo4c, $V55bt0kysqpn='end', $Vnwufml5q3nphis->opencell);
						$Vgffhwoemo4c_middle = TCPDF_STATIC::getBorderMode($Vgffhwoemo4c, $V55bt0kysqpn='middle', $Vnwufml5q3nphis->opencell);
						
						for ($Vwfolue42pzj = $Vvt20qqut4butartpage; $Vwfolue42pzj <= $Vrwpclfxab0a; ++$Vwfolue42pzj) { 
							$Vwcmlurixvzgcode = '';
							$Vnwufml5q3nphis->setPage($Vwfolue42pzj);
							if ($Vnwufml5q3nphis->num_columns < 2) {
								
								$Vnwufml5q3nphis->x = $Vangwoo3ejfg;
								$Vnwufml5q3nphis->y = $Vnwufml5q3nphis->tMargin;
							}
							
							if ($Vwfolue42pzj > $Vvt20qqut4butartpage) {
								if (($Vnwufml5q3nphis->rtl) AND ($Vnwufml5q3nphis->pagedim[$Vwfolue42pzj]['orm'] != $Vnwufml5q3nphis->pagedim[$Vvt20qqut4butartpage]['orm'])) {
									$Vnwufml5q3nphis->x -= ($Vnwufml5q3nphis->pagedim[$Vwfolue42pzj]['orm'] - $Vnwufml5q3nphis->pagedim[$Vvt20qqut4butartpage]['orm']);
								} elseif ((!$Vnwufml5q3nphis->rtl) AND ($Vnwufml5q3nphis->pagedim[$Vwfolue42pzj]['olm'] != $Vnwufml5q3nphis->pagedim[$Vvt20qqut4butartpage]['olm'])) {
									$Vnwufml5q3nphis->x += ($Vnwufml5q3nphis->pagedim[$Vwfolue42pzj]['olm'] - $Vnwufml5q3nphis->pagedim[$Vvt20qqut4butartpage]['olm']);
								}
							}
							if ($Vvt20qqut4butartpage == $Vrwpclfxab0a) { 
								$Vc0aiseldrl3eltacol = 0;
								$Vc0aiseldrl3eltath = 0;
								for ($Vwcmlurixvzgolumn = $Vvt20qqut4butartcolumn; $Vwcmlurixvzgolumn <= $Vchxdok1iadu; ++$Vwcmlurixvzgolumn) { 
									$Vnwufml5q3nphis->selectColumn($Vwcmlurixvzgolumn);
									if ($Vvt20qqut4butartcolumn == $Vchxdok1iadu) { 
										$Vwcmlurixvzgborder = $Vgffhwoemo4c;
										$Vvjxcwrp4tjq = $Vs0htpwzsrccndy - $V1yuhsvbtlvrarent['starty'];
										$Vnwufml5q3nphis->y = $Vgxufordoa4t;
										$Vnwufml5q3nphis->x = $Vangwoo3ejfg;
									} elseif ($Vwcmlurixvzgolumn == $Vvt20qqut4butartcolumn) { 
										$Vwcmlurixvzgborder = $Vgffhwoemo4c_start;
										$Vnwufml5q3nphis->y = $Vvt20qqut4butarty;
										$Vnwufml5q3nphis->x = $Vangwoo3ejfg;
										$Vvjxcwrp4tjq = $Vnwufml5q3nphis->h - $Vnwufml5q3nphis->y - $Vnwufml5q3nphis->bMargin;
										if ($Vnwufml5q3nphis->rtl) {
											$Vc0aiseldrl3eltacol = $Vnwufml5q3nphis->x + $Vnwufml5q3nphis->rMargin - $Vnwufml5q3nphis->w;
										} else {
											$Vc0aiseldrl3eltacol = $Vnwufml5q3nphis->x - $Vnwufml5q3nphis->lMargin;
										}
									} elseif ($Vwcmlurixvzgolumn == $Vchxdok1iadu) { 
										$Vwcmlurixvzgborder = $Vgffhwoemo4c_end;
										if (isset($Vnwufml5q3nphis->columns[$Vwcmlurixvzgolumn]['th']['\''.$Vwfolue42pzj.'\''])) {
											$Vnwufml5q3nphis->y = $Vnwufml5q3nphis->columns[$Vwcmlurixvzgolumn]['th']['\''.$Vwfolue42pzj.'\''];
										}
										$Vnwufml5q3nphis->x += $Vc0aiseldrl3eltacol;
										$Vvjxcwrp4tjq = $Vs0htpwzsrccndy - $Vnwufml5q3nphis->y;
									} else { 
										$Vwcmlurixvzgborder = $Vgffhwoemo4c_middle;
										if (isset($Vnwufml5q3nphis->columns[$Vwcmlurixvzgolumn]['th']['\''.$Vwfolue42pzj.'\''])) {
											$Vnwufml5q3nphis->y = $Vnwufml5q3nphis->columns[$Vwcmlurixvzgolumn]['th']['\''.$Vwfolue42pzj.'\''];
										}
										$Vnwufml5q3nphis->x += $Vc0aiseldrl3eltacol;
										$Vvjxcwrp4tjq = $Vnwufml5q3nphis->h - $Vnwufml5q3nphis->y - $Vnwufml5q3nphis->bMargin;
									}
									$Vwcmlurixvzgcode .= $Vnwufml5q3nphis->getCellCode($Vim12f51jw5r, $Vvjxcwrp4tjq, '', $Vwcmlurixvzgborder, 1, '', $Viiychbtwwwq, '', 0, true)."\n";
								} 
							} elseif ($Vwfolue42pzj == $Vvt20qqut4butartpage) { 
								$Vc0aiseldrl3eltacol = 0;
								$Vc0aiseldrl3eltath = 0;
								for ($Vwcmlurixvzgolumn = $Vvt20qqut4butartcolumn; $Vwcmlurixvzgolumn < $Vnwufml5q3nphis->num_columns; ++$Vwcmlurixvzgolumn) { 
									$Vnwufml5q3nphis->selectColumn($Vwcmlurixvzgolumn);
									if ($Vwcmlurixvzgolumn == $Vvt20qqut4butartcolumn) { 
										$Vwcmlurixvzgborder = $Vgffhwoemo4c_start;
										$Vnwufml5q3nphis->y = $Vvt20qqut4butarty;
										$Vnwufml5q3nphis->x = $Vangwoo3ejfg;
										$Vvjxcwrp4tjq = $Vnwufml5q3nphis->h - $Vnwufml5q3nphis->y - $Vnwufml5q3nphis->bMargin;
										if ($Vnwufml5q3nphis->rtl) {
											$Vc0aiseldrl3eltacol = $Vnwufml5q3nphis->x + $Vnwufml5q3nphis->rMargin - $Vnwufml5q3nphis->w;
										} else {
											$Vc0aiseldrl3eltacol = $Vnwufml5q3nphis->x - $Vnwufml5q3nphis->lMargin;
										}
									} else { 
										$Vwcmlurixvzgborder = $Vgffhwoemo4c_middle;
										if (isset($Vnwufml5q3nphis->columns[$Vwcmlurixvzgolumn]['th']['\''.$Vwfolue42pzj.'\''])) {
											$Vnwufml5q3nphis->y = $Vnwufml5q3nphis->columns[$Vwcmlurixvzgolumn]['th']['\''.$Vwfolue42pzj.'\''];
										}
										$Vnwufml5q3nphis->x += $Vc0aiseldrl3eltacol;
										$Vvjxcwrp4tjq = $Vnwufml5q3nphis->h - $Vnwufml5q3nphis->y - $Vnwufml5q3nphis->bMargin;
									}
									$Vwcmlurixvzgcode .= $Vnwufml5q3nphis->getCellCode($Vim12f51jw5r, $Vvjxcwrp4tjq, '', $Vwcmlurixvzgborder, 1, '', $Viiychbtwwwq, '', 0, true)."\n";
								} 
							} elseif ($Vwfolue42pzj == $Vrwpclfxab0a) { 
								$Vc0aiseldrl3eltacol = 0;
								$Vc0aiseldrl3eltath = 0;
								for ($Vwcmlurixvzgolumn = 0; $Vwcmlurixvzgolumn <= $Vchxdok1iadu; ++$Vwcmlurixvzgolumn) { 
									$Vnwufml5q3nphis->selectColumn($Vwcmlurixvzgolumn);
									if ($Vwcmlurixvzgolumn == $Vchxdok1iadu) { 
										$Vwcmlurixvzgborder = $Vgffhwoemo4c_end;
										if (isset($Vnwufml5q3nphis->columns[$Vwcmlurixvzgolumn]['th']['\''.$Vwfolue42pzj.'\''])) {
											$Vnwufml5q3nphis->y = $Vnwufml5q3nphis->columns[$Vwcmlurixvzgolumn]['th']['\''.$Vwfolue42pzj.'\''];
										}
										$Vnwufml5q3nphis->x += $Vc0aiseldrl3eltacol;
										$Vvjxcwrp4tjq = $Vs0htpwzsrccndy - $Vnwufml5q3nphis->y;
									} else { 
										$Vwcmlurixvzgborder = $Vgffhwoemo4c_middle;
										if (isset($Vnwufml5q3nphis->columns[$Vwcmlurixvzgolumn]['th']['\''.$Vwfolue42pzj.'\''])) {
											$Vnwufml5q3nphis->y = $Vnwufml5q3nphis->columns[$Vwcmlurixvzgolumn]['th']['\''.$Vwfolue42pzj.'\''];
										}
										$Vnwufml5q3nphis->x += $Vc0aiseldrl3eltacol;
										$Vvjxcwrp4tjq = $Vnwufml5q3nphis->h - $Vnwufml5q3nphis->y - $Vnwufml5q3nphis->bMargin;
									}
									$Vwcmlurixvzgcode .= $Vnwufml5q3nphis->getCellCode($Vim12f51jw5r, $Vvjxcwrp4tjq, '', $Vwcmlurixvzgborder, 1, '', $Viiychbtwwwq, '', 0, true)."\n";
								} 
							} else { 
								$Vc0aiseldrl3eltacol = 0;
								$Vc0aiseldrl3eltath = 0;
								for ($Vwcmlurixvzgolumn = 0; $Vwcmlurixvzgolumn < $Vnwufml5q3nphis->num_columns; ++$Vwcmlurixvzgolumn) { 
									$Vnwufml5q3nphis->selectColumn($Vwcmlurixvzgolumn);
									$Vwcmlurixvzgborder = $Vgffhwoemo4c_middle;
									if (isset($Vnwufml5q3nphis->columns[$Vwcmlurixvzgolumn]['th']['\''.$Vwfolue42pzj.'\''])) {
										$Vnwufml5q3nphis->y = $Vnwufml5q3nphis->columns[$Vwcmlurixvzgolumn]['th']['\''.$Vwfolue42pzj.'\''];
									}
									$Vnwufml5q3nphis->x += $Vc0aiseldrl3eltacol;
									$Vvjxcwrp4tjq = $Vnwufml5q3nphis->h - $Vnwufml5q3nphis->y - $Vnwufml5q3nphis->bMargin;
									$Vwcmlurixvzgcode .= $Vnwufml5q3nphis->getCellCode($Vim12f51jw5r, $Vvjxcwrp4tjq, '', $Vwcmlurixvzgborder, 1, '', $Viiychbtwwwq, '', 0, true)."\n";
								} 
							}
							if (!empty($Vwcmlurixvzgborder) OR !empty($Viiychbtwwwq)) {
								$Vcwtctilquugsetlen = strlen($Vwcmlurixvzgcode);
								
								if ($Vnwufml5q3nphis->inxobj) {
									
									if (end($Vnwufml5q3nphis->xobjects[$Vnwufml5q3nphis->xobjid]['transfmrk']) !== false) {
										$Vwfolue42pzjmarkkey = key($Vnwufml5q3nphis->xobjects[$Vnwufml5q3nphis->xobjid]['transfmrk']);
										$Vwfolue42pzjmark = $Vnwufml5q3nphis->xobjects[$Vnwufml5q3nphis->xobjid]['transfmrk'][$Vwfolue42pzjmarkkey];
										$Vnwufml5q3nphis->xobjects[$Vnwufml5q3nphis->xobjid]['transfmrk'][$Vwfolue42pzjmarkkey] += $Vcwtctilquugsetlen;
									} else {
										$Vwfolue42pzjmark = $Vnwufml5q3nphis->xobjects[$Vnwufml5q3nphis->xobjid]['intmrk'];
										$Vnwufml5q3nphis->xobjects[$Vnwufml5q3nphis->xobjid]['intmrk'] += $Vcwtctilquugsetlen;
									}
									$Vwfolue42pzjbuff = $Vnwufml5q3nphis->xobjects[$Vnwufml5q3nphis->xobjid]['outdata'];
									$Vsvylsg2elw5 = substr($Vwfolue42pzjbuff, 0, $Vwfolue42pzjmark);
									$Vqt54avvjrsw = substr($Vwfolue42pzjbuff, $Vwfolue42pzjmark);
									$Vnwufml5q3nphis->xobjects[$Vnwufml5q3nphis->xobjid]['outdata'] = $Vsvylsg2elw5.$Vwcmlurixvzgcode.$Vqt54avvjrsw;
								} else {
									
									if (end($Vnwufml5q3nphis->transfmrk[$Vnwufml5q3nphis->page]) !== false) {
										$Vwfolue42pzjmarkkey = key($Vnwufml5q3nphis->transfmrk[$Vnwufml5q3nphis->page]);
										$Vwfolue42pzjmark = $Vnwufml5q3nphis->transfmrk[$Vnwufml5q3nphis->page][$Vwfolue42pzjmarkkey];
									} elseif ($Vnwufml5q3nphis->InFooter) {
										$Vwfolue42pzjmark = $Vnwufml5q3nphis->footerpos[$Vnwufml5q3nphis->page];
									} else {
										$Vwfolue42pzjmark = $Vnwufml5q3nphis->intmrk[$Vnwufml5q3nphis->page];
									}
									$Vwfolue42pzjbuff = $Vnwufml5q3nphis->getPageBuffer($Vnwufml5q3nphis->page);
									$Vsvylsg2elw5 = substr($Vwfolue42pzjbuff, 0, $Vwfolue42pzjmark);
									$Vqt54avvjrsw = substr($Vwfolue42pzjbuff, $Vwfolue42pzjmark);
									$Vnwufml5q3nphis->setPageBuffer($Vnwufml5q3nphis->page, $Vsvylsg2elw5.$Vwcmlurixvzgcode.$Vqt54avvjrsw);
								}
							}
						} 
						
						$Vgffhwoemo4c = $Vc0aiseldrl3efault_border;
					} 
					if (isset($Vnwufml5q3npable_el['attribute']['cellspacing'])) {
						$Vnwufml5q3nphis->y += $Vnwufml5q3nphis->getHTMLUnitToUnits($Vnwufml5q3npable_el['attribute']['cellspacing'], 1, 'px');
					} elseif (isset($Vnwufml5q3npable_el['border-spacing'])) {
						$Vnwufml5q3nphis->y += $Vnwufml5q3npable_el['border-spacing']['V'];
					}
					$Vnwufml5q3nphis->Ln(0, $Vwcmlurixvzgell);
					$Vnwufml5q3nphis->x = $V1yuhsvbtlvrarent['startx'];
					if ($Vrwpclfxab0a > $Vvt20qqut4butartpage) {
						if (($Vnwufml5q3nphis->rtl) AND ($Vnwufml5q3nphis->pagedim[$Vrwpclfxab0a]['orm'] != $Vnwufml5q3nphis->pagedim[$Vvt20qqut4butartpage]['orm'])) {
							$Vnwufml5q3nphis->x += ($Vnwufml5q3nphis->pagedim[$Vrwpclfxab0a]['orm'] - $Vnwufml5q3nphis->pagedim[$Vvt20qqut4butartpage]['orm']);
						} elseif ((!$Vnwufml5q3nphis->rtl) AND ($Vnwufml5q3nphis->pagedim[$Vrwpclfxab0a]['olm'] != $Vnwufml5q3nphis->pagedim[$Vvt20qqut4butartpage]['olm'])) {
							$Vnwufml5q3nphis->x += ($Vnwufml5q3nphis->pagedim[$Vrwpclfxab0a]['olm'] - $Vnwufml5q3nphis->pagedim[$Vvt20qqut4butartpage]['olm']);
						}
					}
				}
				if (!$V55vc4mewy5wn_table_head) { 
					$Vnwufml5q3nphis->cell_padding = $Vnwufml5q3npable_el['old_cell_padding'];
					
					$Vnwufml5q3nphis->resetLastH();
					if (($Vnwufml5q3nphis->page == ($Vnwufml5q3nphis->numpages - 1)) AND ($Vnwufml5q3nphis->pageopen[$Vnwufml5q3nphis->numpages])) {
						$V1yuhsvbtlvrlendiff = ($Vnwufml5q3nphis->pagelen[$Vnwufml5q3nphis->numpages] - $Vnwufml5q3nphis->emptypagemrk[$Vnwufml5q3nphis->numpages]);
						if (($V1yuhsvbtlvrlendiff > 0) AND ($V1yuhsvbtlvrlendiff < 60)) {
							$Vwfolue42pzjdiff = substr($Vnwufml5q3nphis->getPageBuffer($Vnwufml5q3nphis->numpages), $Vnwufml5q3nphis->emptypagemrk[$Vnwufml5q3nphis->numpages], $V1yuhsvbtlvrlendiff);
							if (substr($Vwfolue42pzjdiff, 0, 5) == 'BT /F') {
								
								$V1yuhsvbtlvrlendiff = 0;
							}
						}
						if ($V1yuhsvbtlvrlendiff == 0) {
							
							$Vnwufml5q3nphis->deletePage($Vnwufml5q3nphis->numpages);
						}
					}
					if (isset($Vnwufml5q3nphis->theadMargins['top'])) {
						
						$Vnwufml5q3nphis->tMargin = $Vnwufml5q3nphis->theadMargins['top'];
					}
					if (!isset($Vnwufml5q3npable_el['attribute']['nested']) OR ($Vnwufml5q3npable_el['attribute']['nested'] != 'true')) {
						
						$Vnwufml5q3nphis->thead = '';
						$Vnwufml5q3nphis->theadMargins = array();
						$Vnwufml5q3nphis->pagedim[$Vnwufml5q3nphis->page]['tm'] = $Vnwufml5q3nphis->tMargin;
					}
				}
				$V1yuhsvbtlvrarent = $Vnwufml5q3npable_el;
				break;
			}
			case 'a': {
				$Vnwufml5q3nphis->HREF = '';
				break;
			}
			case 'sup': {
				$Vnwufml5q3nphis->SetXY($Vnwufml5q3nphis->GetX(), $Vnwufml5q3nphis->GetY() + ((0.7 * $V1yuhsvbtlvrarent['fontsize']) / $Vnwufml5q3nphis->k));
				break;
			}
			case 'sub': {
				$Vnwufml5q3nphis->SetXY($Vnwufml5q3nphis->GetX(), $Vnwufml5q3nphis->GetY() - ((0.3 * $V1yuhsvbtlvrarent['fontsize']) / $Vnwufml5q3nphis->k));
				break;
			}
			case 'div': {
				$Vnwufml5q3nphis->addHTMLVertSpace($Vvjxcwrp4tjqbz, $Vvjxcwrp4tjqb, $Vwcmlurixvzgell, false, $Vx3g4ytafo1aasttag);
				break;
			}
			case 'blockquote': {
				if ($Vnwufml5q3nphis->rtl) {
					$Vnwufml5q3nphis->rMargin -= $Vnwufml5q3nphis->listindent;
				} else {
					$Vnwufml5q3nphis->lMargin -= $Vnwufml5q3nphis->listindent;
				}
				--$Vnwufml5q3nphis->listindentlevel;
				$Vnwufml5q3nphis->addHTMLVertSpace($Vvjxcwrp4tjqbz, $Vvjxcwrp4tjqb, $Vwcmlurixvzgell, false, $Vx3g4ytafo1aasttag);
				break;
			}
			case 'p': {
				$Vnwufml5q3nphis->addHTMLVertSpace($Vvjxcwrp4tjqbz, $Vvjxcwrp4tjqb, $Vwcmlurixvzgell, false, $Vx3g4ytafo1aasttag);
				break;
			}
			case 'pre': {
				$Vnwufml5q3nphis->addHTMLVertSpace($Vvjxcwrp4tjqbz, $Vvjxcwrp4tjqb, $Vwcmlurixvzgell, false, $Vx3g4ytafo1aasttag);
				$Vnwufml5q3nphis->premode = false;
				break;
			}
			case 'dl': {
				--$Vnwufml5q3nphis->listnum;
				if ($Vnwufml5q3nphis->listnum <= 0) {
					$Vnwufml5q3nphis->listnum = 0;
					$Vnwufml5q3nphis->addHTMLVertSpace($Vvjxcwrp4tjqbz, $Vvjxcwrp4tjqb, $Vwcmlurixvzgell, false, $Vx3g4ytafo1aasttag);
				} else {
					$Vnwufml5q3nphis->addHTMLVertSpace(0, 0, $Vwcmlurixvzgell, false, $Vx3g4ytafo1aasttag);
				}
				$Vnwufml5q3nphis->resetLastH();
				break;
			}
			case 'dt': {
				$Vnwufml5q3nphis->lispacer = '';
				$Vnwufml5q3nphis->addHTMLVertSpace(0, 0, $Vwcmlurixvzgell, false, $Vx3g4ytafo1aasttag);
				break;
			}
			case 'dd': {
				$Vnwufml5q3nphis->lispacer = '';
				if ($Vnwufml5q3nphis->rtl) {
					$Vnwufml5q3nphis->rMargin -= $Vnwufml5q3nphis->listindent;
				} else {
					$Vnwufml5q3nphis->lMargin -= $Vnwufml5q3nphis->listindent;
				}
				--$Vnwufml5q3nphis->listindentlevel;
				$Vnwufml5q3nphis->addHTMLVertSpace(0, 0, $Vwcmlurixvzgell, false, $Vx3g4ytafo1aasttag);
				break;
			}
			case 'ul':
			case 'ol': {
				--$Vnwufml5q3nphis->listnum;
				$Vnwufml5q3nphis->lispacer = '';
				if ($Vnwufml5q3nphis->rtl) {
					$Vnwufml5q3nphis->rMargin -= $Vnwufml5q3nphis->listindent;
				} else {
					$Vnwufml5q3nphis->lMargin -= $Vnwufml5q3nphis->listindent;
				}
				--$Vnwufml5q3nphis->listindentlevel;
				if ($Vnwufml5q3nphis->listnum <= 0) {
					$Vnwufml5q3nphis->listnum = 0;
					$Vnwufml5q3nphis->addHTMLVertSpace($Vvjxcwrp4tjqbz, $Vvjxcwrp4tjqb, $Vwcmlurixvzgell, false, $Vx3g4ytafo1aasttag);
				} else {
					$Vnwufml5q3nphis->addHTMLVertSpace(0, 0, $Vwcmlurixvzgell, false, $Vx3g4ytafo1aasttag);
				}
				$Vnwufml5q3nphis->resetLastH();
				break;
			}
			case 'li': {
				$Vnwufml5q3nphis->lispacer = '';
				$Vnwufml5q3nphis->addHTMLVertSpace(0, 0, $Vwcmlurixvzgell, false, $Vx3g4ytafo1aasttag);
				break;
			}
			case 'h1':
			case 'h2':
			case 'h3':
			case 'h4':
			case 'h5':
			case 'h6': {
				$Vnwufml5q3nphis->addHTMLVertSpace($Vvjxcwrp4tjqbz, $Vvjxcwrp4tjqb, $Vwcmlurixvzgell, false, $Vx3g4ytafo1aasttag);
				break;
			}
			
			case 'form': {
				$Vnwufml5q3nphis->form_action = '';
				$Vnwufml5q3nphis->form_enctype = 'application/x-www-form-urlencoded';
				break;
			}
			default : {
				break;
			}
		}
		
		$Vnwufml5q3nphis->drawHTMLTagBorder($V1yuhsvbtlvrarent, $Vangwoo3ejfgmax);
		if (isset($Vc0aiseldrl3om[($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent'])]['attribute']['pagebreakafter'])) {
			$V1yuhsvbtlvrba = $Vc0aiseldrl3om[($Vc0aiseldrl3om[$Vl0q4noiexi4ey]['parent'])]['attribute']['pagebreakafter'];
			
			if (($V1yuhsvbtlvrba == 'true') OR ($V1yuhsvbtlvrba == 'left') OR ($V1yuhsvbtlvrba == 'right')) {
				
				$Vnwufml5q3nphis->checkPageBreak($Vnwufml5q3nphis->PageBreakTrigger + 1);
			}
			if ((($V1yuhsvbtlvrba == 'left') AND (((!$Vnwufml5q3nphis->rtl) AND (($Vnwufml5q3nphis->page % 2) == 0)) OR (($Vnwufml5q3nphis->rtl) AND (($Vnwufml5q3nphis->page % 2) != 0))))
				OR (($V1yuhsvbtlvrba == 'right') AND (((!$Vnwufml5q3nphis->rtl) AND (($Vnwufml5q3nphis->page % 2) != 0)) OR (($Vnwufml5q3nphis->rtl) AND (($Vnwufml5q3nphis->page % 2) == 0))))) {
				
				$Vnwufml5q3nphis->checkPageBreak($Vnwufml5q3nphis->PageBreakTrigger + 1);
			}
		}
		$Vnwufml5q3nphis->tmprtl = false;
		return $Vc0aiseldrl3om;
	}

	
	protected function addHTMLVertSpace($Vvjxcwrp4tjqbz=0, $Vvjxcwrp4tjqb=0, $Vwcmlurixvzgell=false, $Vxb0ra0fqzn2irsttag=false, $Vx3g4ytafo1aasttag=false) {
		if ($Vxb0ra0fqzn2irsttag) {
			$Vnwufml5q3nphis->Ln(0, $Vwcmlurixvzgell);
			$Vnwufml5q3nphis->htmlvspace = 0;
			return;
		}
		if ($Vx3g4ytafo1aasttag) {
			$Vnwufml5q3nphis->Ln($Vvjxcwrp4tjqbz, $Vwcmlurixvzgell);
			$Vnwufml5q3nphis->htmlvspace = 0;
			return;
		}
		if ($Vvjxcwrp4tjqb < $Vnwufml5q3nphis->htmlvspace) {
			$Vvjxcwrp4tjqd = 0;
		} else {
			$Vvjxcwrp4tjqd = $Vvjxcwrp4tjqb - $Vnwufml5q3nphis->htmlvspace;
			$Vnwufml5q3nphis->htmlvspace = $Vvjxcwrp4tjqb;
		}
		$Vnwufml5q3nphis->Ln(($Vvjxcwrp4tjqbz + $Vvjxcwrp4tjqd), $Vwcmlurixvzgell);
	}

	
	protected function getBorderStartPosition() {
		if ($Vnwufml5q3nphis->rtl) {
			$Vangwoo3ejfgmax = $Vnwufml5q3nphis->lMargin;
		} else {
			$Vangwoo3ejfgmax = $Vnwufml5q3nphis->w - $Vnwufml5q3nphis->rMargin;
		}
		return array('page' => $Vnwufml5q3nphis->page, 'column' => $Vnwufml5q3nphis->current_column, 'x' => $Vnwufml5q3nphis->x, 'y' => $Vnwufml5q3nphis->y, 'xmax' => $Vangwoo3ejfgmax);
	}

	
	protected function drawHTMLTagBorder($Vnwufml5q3npag, $Vangwoo3ejfgmax) {
		if (!isset($Vnwufml5q3npag['borderposition'])) {
			
			return;
		}
		$V0mzrbiqfz4t = $Vnwufml5q3nphis->x;
		$Vrcna2mbk1xx = $Vnwufml5q3nphis->y;
		$Vmqdxv5tu5z0 = $Vnwufml5q3nphis->lasth;
		$Vgffhwoemo4c = 0;
		$Viiychbtwwwq = false;
		$Vnwufml5q3nphis->lasth = 0;
		if (isset($Vnwufml5q3npag['border']) AND !empty($Vnwufml5q3npag['border'])) {
			
			$Vgffhwoemo4c = $Vnwufml5q3npag['border'];
			if (!TCPDF_STATIC::empty_string($Vnwufml5q3nphis->thead) AND (!$Vnwufml5q3nphis->inthead)) {
				
				$Vgffhwoemo4c = TCPDF_STATIC::getBorderMode($Vgffhwoemo4c, $V55bt0kysqpn='middle', $Vnwufml5q3nphis->opencell);
			}
		}
		if (isset($Vnwufml5q3npag['bgcolor']) AND ($Vnwufml5q3npag['bgcolor'] !== false)) {
			
			$Vk1y4jyuc5nsld_bgcolor = $Vnwufml5q3nphis->bgcolor;
			$Vnwufml5q3nphis->SetFillColorArray($Vnwufml5q3npag['bgcolor']);
			$Viiychbtwwwq = true;
		}
		if (!$Vgffhwoemo4c AND !$Viiychbtwwwq) {
			
			return;
		}
		if (isset($Vnwufml5q3npag['attribute']['cellspacing'])) {
			$Vwcmlurixvzglsp = $Vnwufml5q3nphis->getHTMLUnitToUnits($Vnwufml5q3npag['attribute']['cellspacing'], 1, 'px');
			$Vwcmlurixvzgellspacing = array('H' => $Vwcmlurixvzglsp, 'V' => $Vwcmlurixvzglsp);
		} elseif (isset($Vnwufml5q3npag['border-spacing'])) {
			$Vwcmlurixvzgellspacing = $Vnwufml5q3npag['border-spacing'];
		} else {
			$Vwcmlurixvzgellspacing = array('H' => 0, 'V' => 0);
		}
		if (($Vnwufml5q3npag['value'] != 'table') AND (is_array($Vgffhwoemo4c)) AND (!empty($Vgffhwoemo4c))) {
			
			$Vgffhwoemo4c['mode'] = 'ext';
		}
		if ($Vnwufml5q3nphis->rtl) {
			if ($Vangwoo3ejfgmax >= $Vnwufml5q3npag['borderposition']['x']) {
				$Vangwoo3ejfgmax = $Vnwufml5q3npag['borderposition']['xmax'];
			}
			$Vim12f51jw5r = ($Vnwufml5q3npag['borderposition']['x'] - $Vangwoo3ejfgmax);
		} else {
			if ($Vangwoo3ejfgmax <= $Vnwufml5q3npag['borderposition']['x']) {
				$Vangwoo3ejfgmax = $Vnwufml5q3npag['borderposition']['xmax'];
			}
			$Vim12f51jw5r = ($Vangwoo3ejfgmax - $Vnwufml5q3npag['borderposition']['x']);
		}
		if ($Vim12f51jw5r <= 0) {
			return;
		}
		$Vim12f51jw5r += $Vwcmlurixvzgellspacing['H'];
		$Vvt20qqut4butartpage = $Vnwufml5q3npag['borderposition']['page'];
		$Vvt20qqut4butartcolumn = $Vnwufml5q3npag['borderposition']['column'];
		$Vangwoo3ejfg = $Vnwufml5q3npag['borderposition']['x'];
		$Vgxufordoa4t = $Vnwufml5q3npag['borderposition']['y'];
		$Vrwpclfxab0a = $Vnwufml5q3nphis->page;
		$Vvt20qqut4butarty = $Vnwufml5q3npag['borderposition']['y'] - $Vwcmlurixvzgellspacing['V'];
		$VwcmlurixvzgurrentY = $Vnwufml5q3nphis->y;
		$Vnwufml5q3nphis->x = $Vangwoo3ejfg;
		
		$Vchxdok1iadu = $Vnwufml5q3nphis->current_column;
		if ($Vnwufml5q3nphis->num_columns == 0) {
			$Vnwufml5q3nphis->num_columns = 1;
		}
		
		$Vgffhwoemo4c_start = TCPDF_STATIC::getBorderMode($Vgffhwoemo4c, $V55bt0kysqpn='start', $Vnwufml5q3nphis->opencell);
		$Vgffhwoemo4c_end = TCPDF_STATIC::getBorderMode($Vgffhwoemo4c, $V55bt0kysqpn='end', $Vnwufml5q3nphis->opencell);
		$Vgffhwoemo4c_middle = TCPDF_STATIC::getBorderMode($Vgffhwoemo4c, $V55bt0kysqpn='middle', $Vnwufml5q3nphis->opencell);
		
		$Vnwufml5q3npemp_page_regions = $Vnwufml5q3nphis->page_regions;
		$Vnwufml5q3nphis->page_regions = array();
		
		for ($Vwfolue42pzj = $Vvt20qqut4butartpage; $Vwfolue42pzj <= $Vrwpclfxab0a; ++$Vwfolue42pzj) { 
			$Vwcmlurixvzgcode = '';
			$Vnwufml5q3nphis->setPage($Vwfolue42pzj);
			if ($Vnwufml5q3nphis->num_columns < 2) {
				
				$Vnwufml5q3nphis->x = $Vangwoo3ejfg;
				$Vnwufml5q3nphis->y = $Vnwufml5q3nphis->tMargin;
			}
			
			if ($Vwfolue42pzj > $Vvt20qqut4butartpage) {
				if (($Vnwufml5q3nphis->rtl) AND ($Vnwufml5q3nphis->pagedim[$Vwfolue42pzj]['orm'] != $Vnwufml5q3nphis->pagedim[$Vvt20qqut4butartpage]['orm'])) {
					$Vnwufml5q3nphis->x -= ($Vnwufml5q3nphis->pagedim[$Vwfolue42pzj]['orm'] - $Vnwufml5q3nphis->pagedim[$Vvt20qqut4butartpage]['orm']);
				} elseif ((!$Vnwufml5q3nphis->rtl) AND ($Vnwufml5q3nphis->pagedim[$Vwfolue42pzj]['olm'] != $Vnwufml5q3nphis->pagedim[$Vvt20qqut4butartpage]['olm'])) {
					$Vnwufml5q3nphis->x += ($Vnwufml5q3nphis->pagedim[$Vwfolue42pzj]['olm'] - $Vnwufml5q3nphis->pagedim[$Vvt20qqut4butartpage]['olm']);
				}
			}
			if ($Vvt20qqut4butartpage == $Vrwpclfxab0a) {
				
				for ($Vwcmlurixvzgolumn = $Vvt20qqut4butartcolumn; $Vwcmlurixvzgolumn <= $Vchxdok1iadu; ++$Vwcmlurixvzgolumn) { 
					$Vnwufml5q3nphis->selectColumn($Vwcmlurixvzgolumn);
					if ($Vvt20qqut4butartcolumn == $Vchxdok1iadu) { 
						$Vwcmlurixvzgborder = $Vgffhwoemo4c;
						$Vvjxcwrp4tjq = ($VwcmlurixvzgurrentY - $Vgxufordoa4t) + $Vwcmlurixvzgellspacing['V'];
						$Vnwufml5q3nphis->y = $Vvt20qqut4butarty;
					} elseif ($Vwcmlurixvzgolumn == $Vvt20qqut4butartcolumn) { 
						$Vwcmlurixvzgborder = $Vgffhwoemo4c_start;
						$Vnwufml5q3nphis->y = $Vvt20qqut4butarty;
						$Vvjxcwrp4tjq = $Vnwufml5q3nphis->h - $Vnwufml5q3nphis->y - $Vnwufml5q3nphis->bMargin;
					} elseif ($Vwcmlurixvzgolumn == $Vchxdok1iadu) { 
						$Vwcmlurixvzgborder = $Vgffhwoemo4c_end;
						$Vvjxcwrp4tjq = $VwcmlurixvzgurrentY - $Vnwufml5q3nphis->y;
					} else { 
						$Vwcmlurixvzgborder = $Vgffhwoemo4c_middle;
						$Vvjxcwrp4tjq = $Vnwufml5q3nphis->h - $Vnwufml5q3nphis->y - $Vnwufml5q3nphis->bMargin;
					}
					$Vwcmlurixvzgcode .= $Vnwufml5q3nphis->getCellCode($Vim12f51jw5r, $Vvjxcwrp4tjq, '', $Vwcmlurixvzgborder, 1, '', $Viiychbtwwwq, '', 0, true)."\n";
				} 
			} elseif ($Vwfolue42pzj == $Vvt20qqut4butartpage) { 
				for ($Vwcmlurixvzgolumn = $Vvt20qqut4butartcolumn; $Vwcmlurixvzgolumn < $Vnwufml5q3nphis->num_columns; ++$Vwcmlurixvzgolumn) { 
					$Vnwufml5q3nphis->selectColumn($Vwcmlurixvzgolumn);
					if ($Vwcmlurixvzgolumn == $Vvt20qqut4butartcolumn) { 
						$Vwcmlurixvzgborder = $Vgffhwoemo4c_start;
						$Vnwufml5q3nphis->y = $Vvt20qqut4butarty;
						$Vvjxcwrp4tjq = $Vnwufml5q3nphis->h - $Vnwufml5q3nphis->y - $Vnwufml5q3nphis->bMargin;
					} else { 
						$Vwcmlurixvzgborder = $Vgffhwoemo4c_middle;
						$Vvjxcwrp4tjq = $Vnwufml5q3nphis->h - $Vnwufml5q3nphis->y - $Vnwufml5q3nphis->bMargin;
					}
					$Vwcmlurixvzgcode .= $Vnwufml5q3nphis->getCellCode($Vim12f51jw5r, $Vvjxcwrp4tjq, '', $Vwcmlurixvzgborder, 1, '', $Viiychbtwwwq, '', 0, true)."\n";
				} 
			} elseif ($Vwfolue42pzj == $Vrwpclfxab0a) { 
				for ($Vwcmlurixvzgolumn = 0; $Vwcmlurixvzgolumn <= $Vchxdok1iadu; ++$Vwcmlurixvzgolumn) { 
					$Vnwufml5q3nphis->selectColumn($Vwcmlurixvzgolumn);
					if ($Vwcmlurixvzgolumn == $Vchxdok1iadu) {
						
						$Vwcmlurixvzgborder = $Vgffhwoemo4c_end;
						$Vvjxcwrp4tjq = $VwcmlurixvzgurrentY - $Vnwufml5q3nphis->y;
					} else {
						
						$Vwcmlurixvzgborder = $Vgffhwoemo4c_middle;
						$Vvjxcwrp4tjq = $Vnwufml5q3nphis->h - $Vnwufml5q3nphis->y - $Vnwufml5q3nphis->bMargin;
					}
					$Vwcmlurixvzgcode .= $Vnwufml5q3nphis->getCellCode($Vim12f51jw5r, $Vvjxcwrp4tjq, '', $Vwcmlurixvzgborder, 1, '', $Viiychbtwwwq, '', 0, true)."\n";
				} 
			} else { 
				for ($Vwcmlurixvzgolumn = 0; $Vwcmlurixvzgolumn < $Vnwufml5q3nphis->num_columns; ++$Vwcmlurixvzgolumn) { 
					$Vnwufml5q3nphis->selectColumn($Vwcmlurixvzgolumn);
					$Vwcmlurixvzgborder = $Vgffhwoemo4c_middle;
					$Vvjxcwrp4tjq = $Vnwufml5q3nphis->h - $Vnwufml5q3nphis->y - $Vnwufml5q3nphis->bMargin;
					$Vwcmlurixvzgcode .= $Vnwufml5q3nphis->getCellCode($Vim12f51jw5r, $Vvjxcwrp4tjq, '', $Vwcmlurixvzgborder, 1, '', $Viiychbtwwwq, '', 0, true)."\n";
				} 
			}
			if ($Vwcmlurixvzgborder OR $Viiychbtwwwq) {
				$Vcwtctilquugsetlen = strlen($Vwcmlurixvzgcode);
				
				if ($Vnwufml5q3nphis->inxobj) {
					
					if (end($Vnwufml5q3nphis->xobjects[$Vnwufml5q3nphis->xobjid]['transfmrk']) !== false) {
						$Vwfolue42pzjmarkkey = key($Vnwufml5q3nphis->xobjects[$Vnwufml5q3nphis->xobjid]['transfmrk']);
						$Vwfolue42pzjmark = $Vnwufml5q3nphis->xobjects[$Vnwufml5q3nphis->xobjid]['transfmrk'][$Vwfolue42pzjmarkkey];
						$Vnwufml5q3nphis->xobjects[$Vnwufml5q3nphis->xobjid]['transfmrk'][$Vwfolue42pzjmarkkey] += $Vcwtctilquugsetlen;
					} else {
						$Vwfolue42pzjmark = $Vnwufml5q3nphis->xobjects[$Vnwufml5q3nphis->xobjid]['intmrk'];
						$Vnwufml5q3nphis->xobjects[$Vnwufml5q3nphis->xobjid]['intmrk'] += $Vcwtctilquugsetlen;
					}
					$Vwfolue42pzjbuff = $Vnwufml5q3nphis->xobjects[$Vnwufml5q3nphis->xobjid]['outdata'];
					$Vsvylsg2elw5 = substr($Vwfolue42pzjbuff, 0, $Vwfolue42pzjmark);
					$Vqt54avvjrsw = substr($Vwfolue42pzjbuff, $Vwfolue42pzjmark);
					$Vnwufml5q3nphis->xobjects[$Vnwufml5q3nphis->xobjid]['outdata'] = $Vsvylsg2elw5.$Vwcmlurixvzgcode.$Vqt54avvjrsw;
				} else {
					if (end($Vnwufml5q3nphis->transfmrk[$Vnwufml5q3nphis->page]) !== false) {
						$Vwfolue42pzjmarkkey = key($Vnwufml5q3nphis->transfmrk[$Vnwufml5q3nphis->page]);
						$Vwfolue42pzjmark = $Vnwufml5q3nphis->transfmrk[$Vnwufml5q3nphis->page][$Vwfolue42pzjmarkkey];
					} elseif ($Vnwufml5q3nphis->InFooter) {
						$Vwfolue42pzjmark = $Vnwufml5q3nphis->footerpos[$Vnwufml5q3nphis->page];
					} else {
						$Vwfolue42pzjmark = $Vnwufml5q3nphis->intmrk[$Vnwufml5q3nphis->page];
					}
					$Vwfolue42pzjbuff = $Vnwufml5q3nphis->getPageBuffer($Vnwufml5q3nphis->page);
					$Vsvylsg2elw5 = substr($Vwfolue42pzjbuff, 0, $Vwfolue42pzjmark);
					$Vqt54avvjrsw = substr($Vwfolue42pzjbuff, $Vwfolue42pzjmark);
					$Vnwufml5q3nphis->setPageBuffer($Vnwufml5q3nphis->page, $Vsvylsg2elw5.$Vwcmlurixvzgcode.$Vqt54avvjrsw);
					$Vnwufml5q3nphis->bordermrk[$Vnwufml5q3nphis->page] += $Vcwtctilquugsetlen;
					$Vnwufml5q3nphis->cntmrk[$Vnwufml5q3nphis->page] += $Vcwtctilquugsetlen;
				}
			}
		} 
		
		$Vnwufml5q3nphis->page_regions = $Vnwufml5q3npemp_page_regions;
		if (isset($Vk1y4jyuc5nsld_bgcolor)) {
			
			$Vnwufml5q3nphis->SetFillColorArray($Vk1y4jyuc5nsld_bgcolor);
		}
		
		$Vnwufml5q3nphis->x = $V0mzrbiqfz4t;
		$Vnwufml5q3nphis->y = $Vrcna2mbk1xx;
		$Vnwufml5q3nphis->lasth = $Vmqdxv5tu5z0;
	}

	
	public function setLIsymbol($Vvt20qqut4buymbol='!') {
		
		if (substr($Vvt20qqut4buymbol, 0, 4) == 'img|') {
			$Vnwufml5q3nphis->lisymbol = $Vvt20qqut4buymbol;
			return;
		}
		$Vvt20qqut4buymbol = strtolower($Vvt20qqut4buymbol);
		$Vxt4wx3pvtezid_symbols = array('!', '#', 'disc', 'circle', 'square', '1', 'decimal', 'decimal-leading-zero', 'i', 'lower-roman', 'I', 'upper-roman', 'a', 'lower-alpha', 'lower-latin', 'A', 'upper-alpha', 'upper-latin', 'lower-greek');
		if (in_array($Vvt20qqut4buymbol, $Vxt4wx3pvtezid_symbols)) {
			$Vnwufml5q3nphis->lisymbol = $Vvt20qqut4buymbol;
		} else {
			$Vnwufml5q3nphis->lisymbol = '';
		}
	}

	
	public function SetBooklet($Voh5rba1fmyo=true, $V55vc4mewy5wnner=-1, $V4t5ynycapeyer=-1) {
		$Vnwufml5q3nphis->booklet = $Voh5rba1fmyo;
		if ($V55vc4mewy5wnner >= 0) {
			$Vnwufml5q3nphis->lMargin = $V55vc4mewy5wnner;
		}
		if ($V4t5ynycapeyer >= 0) {
			$Vnwufml5q3nphis->rMargin = $V4t5ynycapeyer;
		}
	}

	
	protected function swapMargins($V14ltds3prprverse=true) {
		if ($V14ltds3prprverse) {
			
			$Vetludueqmbttemp = $Vnwufml5q3nphis->original_lMargin;
			$Vnwufml5q3nphis->original_lMargin = $Vnwufml5q3nphis->original_rMargin;
			$Vnwufml5q3nphis->original_rMargin = $Vetludueqmbttemp;
			$Vgvznyjxpwgm = $Vnwufml5q3nphis->original_lMargin - $Vnwufml5q3nphis->original_rMargin;
			$Vnwufml5q3nphis->lMargin += $Vgvznyjxpwgm;
			$Vnwufml5q3nphis->rMargin -= $Vgvznyjxpwgm;
		}
	}

	
	public function setHtmlVSpace($Vnwufml5q3npagvs) {
		$Vnwufml5q3nphis->tagvspaces = $Vnwufml5q3npagvs;
	}

	
	public function setListIndentWidth($Vim12f51jw5ridth) {
		return $Vnwufml5q3nphis->customlistindent = floatval($Vim12f51jw5ridth);
	}

	
	public function setOpenCell($V55vc4mewy5wsopen) {
		$Vnwufml5q3nphis->opencell = $V55vc4mewy5wsopen;
	}

	
	public function setHtmlLinksStyle($Vwcmlurixvzgolor=array(0,0,255), $Vshfhqyg5vyrtyle='U') {
		$Vnwufml5q3nphis->htmlLinkColorArray = $Vwcmlurixvzgolor;
		$Vnwufml5q3nphis->htmlLinkFontStyle = $Vshfhqyg5vyrtyle;
	}

	
	public function getHTMLUnitToUnits($Vvjxcwrp4tjqtmlval, $V14ltds3prprfsize=1, $Vc0aiseldrl3efaultunit='px', $V1yuhsvbtlvroints=false) {
		$Vvt20qqut4buupportedunits = array('%', 'em', 'ex', 'px', 'in', 'cm', 'mm', 'pc', 'pt');
		$V14ltds3prprtval = 0;
		$Vxt4wx3pvtezue = 0;
		$V14yjpzdjg3f = 'px';
		if ($V1yuhsvbtlvroints) {
			$Vl0q4noiexi4 = 1;
		} else {
			$Vl0q4noiexi4 = $Vnwufml5q3nphis->k;
		}
		if (in_array($Vc0aiseldrl3efaultunit, $Vvt20qqut4buupportedunits)) {
			$V14yjpzdjg3f = $Vc0aiseldrl3efaultunit;
		}
		if (is_numeric($Vvjxcwrp4tjqtmlval)) {
			$Vxt4wx3pvtezue = floatval($Vvjxcwrp4tjqtmlval);
		} elseif (preg_match('/([0-9\.\-\+]+)/', $Vvjxcwrp4tjqtmlval, $Vetludueqmbtnum)) {
			$Vxt4wx3pvtezue = floatval($Vetludueqmbtnum[1]);
			if (preg_match('/([a-z%]+)/', $Vvjxcwrp4tjqtmlval, $Vetludueqmbtunit)) {
				if (in_array($Vetludueqmbtunit[1], $Vvt20qqut4buupportedunits)) {
					$V14yjpzdjg3f = $Vetludueqmbtunit[1];
				}
			}
		}
		switch ($V14yjpzdjg3f) {
			
			case '%': {
				$V14ltds3prprtval = (($Vxt4wx3pvtezue * $V14ltds3prprfsize) / 100);
				break;
			}
			
			case 'em': {
				$V14ltds3prprtval = ($Vxt4wx3pvtezue * $V14ltds3prprfsize);
				break;
			}
			
			case 'ex': {
				$V14ltds3prprtval = ($Vxt4wx3pvtezue * ($V14ltds3prprfsize / 2));
				break;
			}
			
			case 'in': {
				$V14ltds3prprtval = (($Vxt4wx3pvtezue * $Vnwufml5q3nphis->dpi) / $Vl0q4noiexi4);
				break;
			}
			
			case 'cm': {
				$V14ltds3prprtval = (($Vxt4wx3pvtezue / 2.54 * $Vnwufml5q3nphis->dpi) / $Vl0q4noiexi4);
				break;
			}
			
			case 'mm': {
				$V14ltds3prprtval = (($Vxt4wx3pvtezue / 25.4 * $Vnwufml5q3nphis->dpi) / $Vl0q4noiexi4);
				break;
			}
			
			case 'pc': {
				$V14ltds3prprtval = (($Vxt4wx3pvtezue * 12) / $Vl0q4noiexi4);
				break;
			}
			
			case 'pt': {
				$V14ltds3prprtval = ($Vxt4wx3pvtezue / $Vl0q4noiexi4);
				break;
			}
			
			case 'px': {
				$V14ltds3prprtval = $Vnwufml5q3nphis->pixelsToUnits($Vxt4wx3pvtezue);
				if ($V1yuhsvbtlvroints) {
					$V14ltds3prprtval *= $Vnwufml5q3nphis->k;
				}
				break;
			}
		}
		return $V14ltds3prprtval;
	}

	
	protected function putHtmlListBullet($Vx3g4ytafo1aistdepth, $Vx3g4ytafo1aisttype='', $Vvt20qqut4buize=10) {
		if ($Vnwufml5q3nphis->state != 2) {
			return;
		}
		$Vvt20qqut4buize /= $Vnwufml5q3nphis->k;
		$Viiychbtwwwq = '';
		$V2mdukkkppvh = $Vnwufml5q3nphis->bgcolor;
		$Vwcmlurixvzgolor = $Vnwufml5q3nphis->fgcolor;
		$V3psyrb4siyg = $Vnwufml5q3nphis->strokecolor;
		$Vim12f51jw5ridth = 0;
		$Vdvjst2lzhefitem = '';
		$V3p0tae11ldwx = $Vnwufml5q3nphis->x;
		$Vx3g4ytafo1aspace = $Vnwufml5q3nphis->GetStringWidth('  ');
		if ($Vx3g4ytafo1aisttype == '^') {
			
			$Vnwufml5q3nphis->lispacer = '';
			return;
		} elseif ($Vx3g4ytafo1aisttype == '!') {
			
			$Vc0aiseldrl3eftypes = array('disc', 'circle', 'square');
			$Vx3g4ytafo1aisttype = $Vc0aiseldrl3eftypes[($Vx3g4ytafo1aistdepth - 1) % 3];
		} elseif ($Vx3g4ytafo1aisttype == '#') {
			
			$Vx3g4ytafo1aisttype = 'decimal';
		} elseif (substr($Vx3g4ytafo1aisttype, 0, 4) == 'img|') {
			
			$V55vc4mewy5wmg = explode('|', $Vx3g4ytafo1aisttype);
			$Vx3g4ytafo1aisttype = 'img';
		}
		switch ($Vx3g4ytafo1aisttype) {
			
			case 'none': {
				break;
			}
			case 'disc': {
				$Vfhkt4vbeual = $Vvt20qqut4buize / 6;
				$Vx3g4ytafo1aspace += (2 * $Vfhkt4vbeual);
				if ($Vnwufml5q3nphis->rtl) {
					$Vnwufml5q3nphis->x += $Vx3g4ytafo1aspace;
				} else {
					$Vnwufml5q3nphis->x -= $Vx3g4ytafo1aspace;
				}
				$Vnwufml5q3nphis->Circle(($Vnwufml5q3nphis->x + $Vfhkt4vbeual), ($Vnwufml5q3nphis->y + ($Vnwufml5q3nphis->lasth / 2)), $Vfhkt4vbeual, 0, 360, 'F', array(), $Vwcmlurixvzgolor, 8);
				break;
			}
			case 'circle': {
				$Vfhkt4vbeual = $Vvt20qqut4buize / 6;
				$Vx3g4ytafo1aspace += (2 * $Vfhkt4vbeual);
				if ($Vnwufml5q3nphis->rtl) {
					$Vnwufml5q3nphis->x += $Vx3g4ytafo1aspace;
				} else {
					$Vnwufml5q3nphis->x -= $Vx3g4ytafo1aspace;
				}
				$V1yuhsvbtlvrrev_line_style = $Vnwufml5q3nphis->linestyleWidth.' '.$Vnwufml5q3nphis->linestyleCap.' '.$Vnwufml5q3nphis->linestyleJoin.' '.$Vnwufml5q3nphis->linestyleDash.' '.$Vnwufml5q3nphis->DrawColor;
				$Vgv45dfhsyuhew_line_style = array('width' => ($Vfhkt4vbeual / 3), 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'phase' => 0, 'color'=>$Vwcmlurixvzgolor);
				$Vnwufml5q3nphis->Circle(($Vnwufml5q3nphis->x + $Vfhkt4vbeual), ($Vnwufml5q3nphis->y + ($Vnwufml5q3nphis->lasth / 2)), ($Vfhkt4vbeual * (1 - (1/6))), 0, 360, 'D', $Vgv45dfhsyuhew_line_style, array(), 8);
				$Vnwufml5q3nphis->_out($V1yuhsvbtlvrrev_line_style); 
				break;
			}
			case 'square': {
				$Vx3g4ytafo1a = $Vvt20qqut4buize / 3;
				$Vx3g4ytafo1aspace += $Vx3g4ytafo1a;
				if ($Vnwufml5q3nphis->rtl) {;
					$Vnwufml5q3nphis->x += $Vx3g4ytafo1aspace;
				} else {
					$Vnwufml5q3nphis->x -= $Vx3g4ytafo1aspace;
				}
				$Vnwufml5q3nphis->Rect($Vnwufml5q3nphis->x, ($Vnwufml5q3nphis->y + (($Vnwufml5q3nphis->lasth - $Vx3g4ytafo1a) / 2)), $Vx3g4ytafo1a, $Vx3g4ytafo1a, 'F', array(), $Vwcmlurixvzgolor);
				break;
			}
			case 'img': {
				
				$Vx3g4ytafo1aspace += $V55vc4mewy5wmg[2];
				if ($Vnwufml5q3nphis->rtl) {;
					$Vnwufml5q3nphis->x += $Vx3g4ytafo1aspace;
				} else {
					$Vnwufml5q3nphis->x -= $Vx3g4ytafo1aspace;
				}
				$V55vc4mewy5wmgtype = strtolower($V55vc4mewy5wmg[1]);
				$Vrcna2mbk1xx = $Vnwufml5q3nphis->y;
				switch ($V55vc4mewy5wmgtype) {
					case 'svg': {
						$Vnwufml5q3nphis->ImageSVG($V55vc4mewy5wmg[4], $Vnwufml5q3nphis->x, ($Vnwufml5q3nphis->y + (($Vnwufml5q3nphis->lasth - $V55vc4mewy5wmg[3]) / 2)), $V55vc4mewy5wmg[2], $V55vc4mewy5wmg[3], '', 'T', '', 0, false);
						break;
					}
					case 'ai':
					case 'eps': {
						$Vnwufml5q3nphis->ImageEps($V55vc4mewy5wmg[4], $Vnwufml5q3nphis->x, ($Vnwufml5q3nphis->y + (($Vnwufml5q3nphis->lasth - $V55vc4mewy5wmg[3]) / 2)), $V55vc4mewy5wmg[2], $V55vc4mewy5wmg[3], '', true, 'T', '', 0, false);
						break;
					}
					default: {
						$Vnwufml5q3nphis->Image($V55vc4mewy5wmg[4], $Vnwufml5q3nphis->x, ($Vnwufml5q3nphis->y + (($Vnwufml5q3nphis->lasth - $V55vc4mewy5wmg[3]) / 2)), $V55vc4mewy5wmg[2], $V55vc4mewy5wmg[3], $V55vc4mewy5wmg[1], '', 'T', false, 300, '', false, false, 0, false, false, false);
						break;
					}
				}
				$Vnwufml5q3nphis->y = $Vrcna2mbk1xx;
				break;
			}
			
			
			
			case '1':
			case 'decimal': {
				$Vdvjst2lzhefitem = $Vnwufml5q3nphis->listcount[$Vnwufml5q3nphis->listnum];
				break;
			}
			case 'decimal-leading-zero': {
				$Vdvjst2lzhefitem = sprintf('%02d', $Vnwufml5q3nphis->listcount[$Vnwufml5q3nphis->listnum]);
				break;
			}
			case 'i':
			case 'lower-roman': {
				$Vdvjst2lzhefitem = strtolower(TCPDF_STATIC::intToRoman($Vnwufml5q3nphis->listcount[$Vnwufml5q3nphis->listnum]));
				break;
			}
			case 'I':
			case 'upper-roman': {
				$Vdvjst2lzhefitem = TCPDF_STATIC::intToRoman($Vnwufml5q3nphis->listcount[$Vnwufml5q3nphis->listnum]);
				break;
			}
			case 'a':
			case 'lower-alpha':
			case 'lower-latin': {
				$Vdvjst2lzhefitem = chr(97 + $Vnwufml5q3nphis->listcount[$Vnwufml5q3nphis->listnum] - 1);
				break;
			}
			case 'A':
			case 'upper-alpha':
			case 'upper-latin': {
				$Vdvjst2lzhefitem = chr(65 + $Vnwufml5q3nphis->listcount[$Vnwufml5q3nphis->listnum] - 1);
				break;
			}
			case 'lower-greek': {
				$Vdvjst2lzhefitem = TCPDF_FONTS::unichr((945 + $Vnwufml5q3nphis->listcount[$Vnwufml5q3nphis->listnum] - 1), $Vnwufml5q3nphis->isunicode);
				break;
			}
			
			default: {
				$Vdvjst2lzhefitem = $Vnwufml5q3nphis->listcount[$Vnwufml5q3nphis->listnum];
			}
		}
		if (!TCPDF_STATIC::empty_string($Vdvjst2lzhefitem)) {
			
			$Vrcna2mbk1xx = $Vnwufml5q3nphis->y;
			$Vvjxcwrp4tjq = $Vnwufml5q3nphis->getCellHeight($Vnwufml5q3nphis->FontSize);
			if ($Vnwufml5q3nphis->checkPageBreak($Vvjxcwrp4tjq) OR ($Vnwufml5q3nphis->y < $Vrcna2mbk1xx)) {
				$V3p0tae11ldwx = $Vnwufml5q3nphis->x;
			}
			
			if ($Vnwufml5q3nphis->rtl) {
				$Vdvjst2lzhefitem = '.'.$Vdvjst2lzhefitem;
			} else {
				$Vdvjst2lzhefitem = $Vdvjst2lzhefitem.'.';
			}
			$Vx3g4ytafo1aspace += $Vnwufml5q3nphis->GetStringWidth($Vdvjst2lzhefitem);
			if ($Vnwufml5q3nphis->rtl) {
				$Vnwufml5q3nphis->x += $Vx3g4ytafo1aspace;
			} else {
				$Vnwufml5q3nphis->x -= $Vx3g4ytafo1aspace;
			}
			$Vnwufml5q3nphis->Write($Vnwufml5q3nphis->lasth, $Vdvjst2lzhefitem, '', false, '', false, 0, false);
		}
		$Vnwufml5q3nphis->x = $V3p0tae11ldwx;
		$Vnwufml5q3nphis->lispacer = '^';
		
		$Vnwufml5q3nphis->SetFillColorArray($V2mdukkkppvh);
		$Vnwufml5q3nphis->SetDrawColorArray($V3psyrb4siyg);
		$Vnwufml5q3nphis->SettextColorArray($Vwcmlurixvzgolor);
	}

	
	protected function getGraphicVars() {
		$Vqdeou2vhybvrapvars = array(
			'FontFamily' => $Vnwufml5q3nphis->FontFamily,
			'FontStyle' => $Vnwufml5q3nphis->FontStyle,
			'FontSizePt' => $Vnwufml5q3nphis->FontSizePt,
			'rMargin' => $Vnwufml5q3nphis->rMargin,
			'lMargin' => $Vnwufml5q3nphis->lMargin,
			'cell_padding' => $Vnwufml5q3nphis->cell_padding,
			'cell_margin' => $Vnwufml5q3nphis->cell_margin,
			'LineWidth' => $Vnwufml5q3nphis->LineWidth,
			'linestyleWidth' => $Vnwufml5q3nphis->linestyleWidth,
			'linestyleCap' => $Vnwufml5q3nphis->linestyleCap,
			'linestyleJoin' => $Vnwufml5q3nphis->linestyleJoin,
			'linestyleDash' => $Vnwufml5q3nphis->linestyleDash,
			'textrendermode' => $Vnwufml5q3nphis->textrendermode,
			'textstrokewidth' => $Vnwufml5q3nphis->textstrokewidth,
			'DrawColor' => $Vnwufml5q3nphis->DrawColor,
			'FillColor' => $Vnwufml5q3nphis->FillColor,
			'TextColor' => $Vnwufml5q3nphis->TextColor,
			'ColorFlag' => $Vnwufml5q3nphis->ColorFlag,
			'bgcolor' => $Vnwufml5q3nphis->bgcolor,
			'fgcolor' => $Vnwufml5q3nphis->fgcolor,
			'htmlvspace' => $Vnwufml5q3nphis->htmlvspace,
			'listindent' => $Vnwufml5q3nphis->listindent,
			'listindentlevel' => $Vnwufml5q3nphis->listindentlevel,
			'listnum' => $Vnwufml5q3nphis->listnum,
			'listordered' => $Vnwufml5q3nphis->listordered,
			'listcount' => $Vnwufml5q3nphis->listcount,
			'lispacer' => $Vnwufml5q3nphis->lispacer,
			'cell_height_ratio' => $Vnwufml5q3nphis->cell_height_ratio,
			'font_stretching' => $Vnwufml5q3nphis->font_stretching,
			'font_spacing' => $Vnwufml5q3nphis->font_spacing,
			'alpha' => $Vnwufml5q3nphis->alpha,
			
			'lasth' => $Vnwufml5q3nphis->lasth,
			'tMargin' => $Vnwufml5q3nphis->tMargin,
			'bMargin' => $Vnwufml5q3nphis->bMargin,
			'AutoPageBreak' => $Vnwufml5q3nphis->AutoPageBreak,
			'PageBreakTrigger' => $Vnwufml5q3nphis->PageBreakTrigger,
			'x' => $Vnwufml5q3nphis->x,
			'y' => $Vnwufml5q3nphis->y,
			'w' => $Vnwufml5q3nphis->w,
			'h' => $Vnwufml5q3nphis->h,
			'wPt' => $Vnwufml5q3nphis->wPt,
			'hPt' => $Vnwufml5q3nphis->hPt,
			'fwPt' => $Vnwufml5q3nphis->fwPt,
			'fhPt' => $Vnwufml5q3nphis->fhPt,
			'page' => $Vnwufml5q3nphis->page,
			'current_column' => $Vnwufml5q3nphis->current_column,
			'num_columns' => $Vnwufml5q3nphis->num_columns
			);
		return $Vqdeou2vhybvrapvars;
	}

	
	protected function setGraphicVars($Vfbwtdiv4emm, $Vs0htpwzsrccxtended=false) {
		if ($Vnwufml5q3nphis->state != 2) {
			 return;
		}
		$Vnwufml5q3nphis->FontFamily = $Vfbwtdiv4emm['FontFamily'];
		$Vnwufml5q3nphis->FontStyle = $Vfbwtdiv4emm['FontStyle'];
		$Vnwufml5q3nphis->FontSizePt = $Vfbwtdiv4emm['FontSizePt'];
		$Vnwufml5q3nphis->rMargin = $Vfbwtdiv4emm['rMargin'];
		$Vnwufml5q3nphis->lMargin = $Vfbwtdiv4emm['lMargin'];
		$Vnwufml5q3nphis->cell_padding = $Vfbwtdiv4emm['cell_padding'];
		$Vnwufml5q3nphis->cell_margin = $Vfbwtdiv4emm['cell_margin'];
		$Vnwufml5q3nphis->LineWidth = $Vfbwtdiv4emm['LineWidth'];
		$Vnwufml5q3nphis->linestyleWidth = $Vfbwtdiv4emm['linestyleWidth'];
		$Vnwufml5q3nphis->linestyleCap = $Vfbwtdiv4emm['linestyleCap'];
		$Vnwufml5q3nphis->linestyleJoin = $Vfbwtdiv4emm['linestyleJoin'];
		$Vnwufml5q3nphis->linestyleDash = $Vfbwtdiv4emm['linestyleDash'];
		$Vnwufml5q3nphis->textrendermode = $Vfbwtdiv4emm['textrendermode'];
		$Vnwufml5q3nphis->textstrokewidth = $Vfbwtdiv4emm['textstrokewidth'];
		$Vnwufml5q3nphis->DrawColor = $Vfbwtdiv4emm['DrawColor'];
		$Vnwufml5q3nphis->FillColor = $Vfbwtdiv4emm['FillColor'];
		$Vnwufml5q3nphis->TextColor = $Vfbwtdiv4emm['TextColor'];
		$Vnwufml5q3nphis->ColorFlag = $Vfbwtdiv4emm['ColorFlag'];
		$Vnwufml5q3nphis->bgcolor = $Vfbwtdiv4emm['bgcolor'];
		$Vnwufml5q3nphis->fgcolor = $Vfbwtdiv4emm['fgcolor'];
		$Vnwufml5q3nphis->htmlvspace = $Vfbwtdiv4emm['htmlvspace'];
		$Vnwufml5q3nphis->listindent = $Vfbwtdiv4emm['listindent'];
		$Vnwufml5q3nphis->listindentlevel = $Vfbwtdiv4emm['listindentlevel'];
		$Vnwufml5q3nphis->listnum = $Vfbwtdiv4emm['listnum'];
		$Vnwufml5q3nphis->listordered = $Vfbwtdiv4emm['listordered'];
		$Vnwufml5q3nphis->listcount = $Vfbwtdiv4emm['listcount'];
		$Vnwufml5q3nphis->lispacer = $Vfbwtdiv4emm['lispacer'];
		$Vnwufml5q3nphis->cell_height_ratio = $Vfbwtdiv4emm['cell_height_ratio'];
		$Vnwufml5q3nphis->font_stretching = $Vfbwtdiv4emm['font_stretching'];
		$Vnwufml5q3nphis->font_spacing = $Vfbwtdiv4emm['font_spacing'];
		$Vnwufml5q3nphis->alpha = $Vfbwtdiv4emm['alpha'];
		if ($Vs0htpwzsrccxtended) {
			
			$Vnwufml5q3nphis->lasth = $Vfbwtdiv4emm['lasth'];
			$Vnwufml5q3nphis->tMargin = $Vfbwtdiv4emm['tMargin'];
			$Vnwufml5q3nphis->bMargin = $Vfbwtdiv4emm['bMargin'];
			$Vnwufml5q3nphis->AutoPageBreak = $Vfbwtdiv4emm['AutoPageBreak'];
			$Vnwufml5q3nphis->PageBreakTrigger = $Vfbwtdiv4emm['PageBreakTrigger'];
			$Vnwufml5q3nphis->x = $Vfbwtdiv4emm['x'];
			$Vnwufml5q3nphis->y = $Vfbwtdiv4emm['y'];
			$Vnwufml5q3nphis->w = $Vfbwtdiv4emm['w'];
			$Vnwufml5q3nphis->h = $Vfbwtdiv4emm['h'];
			$Vnwufml5q3nphis->wPt = $Vfbwtdiv4emm['wPt'];
			$Vnwufml5q3nphis->hPt = $Vfbwtdiv4emm['hPt'];
			$Vnwufml5q3nphis->fwPt = $Vfbwtdiv4emm['fwPt'];
			$Vnwufml5q3nphis->fhPt = $Vfbwtdiv4emm['fhPt'];
			$Vnwufml5q3nphis->page = $Vfbwtdiv4emm['page'];
			$Vnwufml5q3nphis->current_column = $Vfbwtdiv4emm['current_column'];
			$Vnwufml5q3nphis->num_columns = $Vfbwtdiv4emm['num_columns'];
		}
		$Vnwufml5q3nphis->_out(''.$Vnwufml5q3nphis->linestyleWidth.' '.$Vnwufml5q3nphis->linestyleCap.' '.$Vnwufml5q3nphis->linestyleJoin.' '.$Vnwufml5q3nphis->linestyleDash.' '.$Vnwufml5q3nphis->DrawColor.' '.$Vnwufml5q3nphis->FillColor.'');
		if (!TCPDF_STATIC::empty_string($Vnwufml5q3nphis->FontFamily)) {
			$Vnwufml5q3nphis->SetFont($Vnwufml5q3nphis->FontFamily, $Vnwufml5q3nphis->FontStyle, $Vnwufml5q3nphis->FontSizePt);
		}
	}

	
	protected function _outSaveGraphicsState() {
		$Vnwufml5q3nphis->_out('q');
	}

	
	protected function _outRestoreGraphicsState() {
		$Vnwufml5q3nphis->_out('Q');
	}

	
	protected function setBuffer($Vc0aiseldrl3ata) {
		$Vnwufml5q3nphis->bufferlen += strlen($Vc0aiseldrl3ata);
		$Vnwufml5q3nphis->buffer .= $Vc0aiseldrl3ata;
	}

	
	protected function replaceBuffer($Vc0aiseldrl3ata) {
		$Vnwufml5q3nphis->bufferlen = strlen($Vc0aiseldrl3ata);
		$Vnwufml5q3nphis->buffer = $Vc0aiseldrl3ata;
	}

	
	protected function getBuffer() {
		return $Vnwufml5q3nphis->buffer;
	}

	
	protected function setPageBuffer($Vwfolue42pzj, $Vc0aiseldrl3ata, $Vudz4oh4qikuppend=false) {
		if ($Vudz4oh4qikuppend) {
			$Vnwufml5q3nphis->pages[$Vwfolue42pzj] .= $Vc0aiseldrl3ata;
		} else {
			$Vnwufml5q3nphis->pages[$Vwfolue42pzj] = $Vc0aiseldrl3ata;
		}
		if ($Vudz4oh4qikuppend AND isset($Vnwufml5q3nphis->pagelen[$Vwfolue42pzj])) {
			$Vnwufml5q3nphis->pagelen[$Vwfolue42pzj] += strlen($Vc0aiseldrl3ata);
		} else {
			$Vnwufml5q3nphis->pagelen[$Vwfolue42pzj] = strlen($Vc0aiseldrl3ata);
		}
	}

	
	protected function getPageBuffer($Vwfolue42pzj) {
		if (isset($Vnwufml5q3nphis->pages[$Vwfolue42pzj])) {
			return $Vnwufml5q3nphis->pages[$Vwfolue42pzj];
		}
		return false;
	}

	
	protected function setImageBuffer($V55vc4mewy5wmage, $Vc0aiseldrl3ata) {
		if (($Vc0aiseldrl3ata['i'] = array_search($V55vc4mewy5wmage, $Vnwufml5q3nphis->imagekeys)) === FALSE) {
			$Vnwufml5q3nphis->imagekeys[$Vnwufml5q3nphis->numimages] = $V55vc4mewy5wmage;
			$Vc0aiseldrl3ata['i'] = $Vnwufml5q3nphis->numimages;
			++$Vnwufml5q3nphis->numimages;
		}
		$Vnwufml5q3nphis->images[$V55vc4mewy5wmage] = $Vc0aiseldrl3ata;
		return $Vc0aiseldrl3ata['i'];
	}

	
	protected function setImageSubBuffer($V55vc4mewy5wmage, $Vl0q4noiexi4ey, $Vc0aiseldrl3ata) {
		if (!isset($Vnwufml5q3nphis->images[$V55vc4mewy5wmage])) {
			$Vnwufml5q3nphis->setImageBuffer($V55vc4mewy5wmage, array());
		}
		$Vnwufml5q3nphis->images[$V55vc4mewy5wmage][$Vl0q4noiexi4ey] = $Vc0aiseldrl3ata;
	}

	
	protected function getImageBuffer($V55vc4mewy5wmage) {
		if (isset($Vnwufml5q3nphis->images[$V55vc4mewy5wmage])) {
			return $Vnwufml5q3nphis->images[$V55vc4mewy5wmage];
		}
		return false;
	}

	
	protected function setFontBuffer($Voc1qigl3k5y, $Vc0aiseldrl3ata) {
		$Vnwufml5q3nphis->fonts[$Voc1qigl3k5y] = $Vc0aiseldrl3ata;
		if (!in_array($Voc1qigl3k5y, $Vnwufml5q3nphis->fontkeys)) {
			$Vnwufml5q3nphis->fontkeys[] = $Voc1qigl3k5y;
			
			++$Vnwufml5q3nphis->n;
			$Vnwufml5q3nphis->font_obj_ids[$Voc1qigl3k5y] = $Vnwufml5q3nphis->n;
			$Vnwufml5q3nphis->setFontSubBuffer($Voc1qigl3k5y, 'n', $Vnwufml5q3nphis->n);
		}
	}

	
	protected function setFontSubBuffer($Voc1qigl3k5y, $Vl0q4noiexi4ey, $Vc0aiseldrl3ata) {
		if (!isset($Vnwufml5q3nphis->fonts[$Voc1qigl3k5y])) {
			$Vnwufml5q3nphis->setFontBuffer($Voc1qigl3k5y, array());
		}
		$Vnwufml5q3nphis->fonts[$Voc1qigl3k5y][$Vl0q4noiexi4ey] = $Vc0aiseldrl3ata;
	}

	
	protected function getFontBuffer($Voc1qigl3k5y) {
		if (isset($Vnwufml5q3nphis->fonts[$Voc1qigl3k5y])) {
			return $Vnwufml5q3nphis->fonts[$Voc1qigl3k5y];
		}
		return false;
	}

	
	public function movePage($Vxb0ra0fqzn2rompage, $Vmudo4ztceqiage) {
		if (($Vxb0ra0fqzn2rompage > $Vnwufml5q3nphis->numpages) OR ($Vxb0ra0fqzn2rompage <= $Vmudo4ztceqiage)) {
			return false;
		}
		if ($Vxb0ra0fqzn2rompage == $Vnwufml5q3nphis->page) {
			
			$Vnwufml5q3nphis->endPage();
		}
		
		$V3p0tae11ldwpage = $Vnwufml5q3nphis->getPageBuffer($Vxb0ra0fqzn2rompage);
		$V3p0tae11ldwpagedim = $Vnwufml5q3nphis->pagedim[$Vxb0ra0fqzn2rompage];
		$V3p0tae11ldwpagelen = $Vnwufml5q3nphis->pagelen[$Vxb0ra0fqzn2rompage];
		$V3p0tae11ldwintmrk = $Vnwufml5q3nphis->intmrk[$Vxb0ra0fqzn2rompage];
		$V3p0tae11ldwbordermrk = $Vnwufml5q3nphis->bordermrk[$Vxb0ra0fqzn2rompage];
		$V3p0tae11ldwcntmrk = $Vnwufml5q3nphis->cntmrk[$Vxb0ra0fqzn2rompage];
		$V3p0tae11ldwpageobjects = $Vnwufml5q3nphis->pageobjects[$Vxb0ra0fqzn2rompage];
		if (isset($Vnwufml5q3nphis->footerpos[$Vxb0ra0fqzn2rompage])) {
			$V3p0tae11ldwfooterpos = $Vnwufml5q3nphis->footerpos[$Vxb0ra0fqzn2rompage];
		}
		if (isset($Vnwufml5q3nphis->footerlen[$Vxb0ra0fqzn2rompage])) {
			$V3p0tae11ldwfooterlen = $Vnwufml5q3nphis->footerlen[$Vxb0ra0fqzn2rompage];
		}
		if (isset($Vnwufml5q3nphis->transfmrk[$Vxb0ra0fqzn2rompage])) {
			$V3p0tae11ldwtransfmrk = $Vnwufml5q3nphis->transfmrk[$Vxb0ra0fqzn2rompage];
		}
		if (isset($Vnwufml5q3nphis->PageAnnots[$Vxb0ra0fqzn2rompage])) {
			$V3p0tae11ldwannots = $Vnwufml5q3nphis->PageAnnots[$Vxb0ra0fqzn2rompage];
		}
		if (isset($Vnwufml5q3nphis->newpagegroup) AND !empty($Vnwufml5q3nphis->newpagegroup)) {
			for ($V55vc4mewy5w = $Vxb0ra0fqzn2rompage; $V55vc4mewy5w > $Vmudo4ztceqiage; --$V55vc4mewy5w) {
				if (isset($Vnwufml5q3nphis->newpagegroup[$V55vc4mewy5w]) AND (($V55vc4mewy5w + $Vnwufml5q3nphis->pagegroups[$Vnwufml5q3nphis->newpagegroup[$V55vc4mewy5w]]) > $Vxb0ra0fqzn2rompage)) {
					--$Vnwufml5q3nphis->pagegroups[$Vnwufml5q3nphis->newpagegroup[$V55vc4mewy5w]];
					break;
				}
			}
			for ($V55vc4mewy5w = $Vmudo4ztceqiage; $V55vc4mewy5w > 0; --$V55vc4mewy5w) {
				if (isset($Vnwufml5q3nphis->newpagegroup[$V55vc4mewy5w]) AND (($V55vc4mewy5w + $Vnwufml5q3nphis->pagegroups[$Vnwufml5q3nphis->newpagegroup[$V55vc4mewy5w]]) > $Vmudo4ztceqiage)) {
					++$Vnwufml5q3nphis->pagegroups[$Vnwufml5q3nphis->newpagegroup[$V55vc4mewy5w]];
					break;
				}
			}
		}
		for ($V55vc4mewy5w = $Vxb0ra0fqzn2rompage; $V55vc4mewy5w > $Vmudo4ztceqiage; --$V55vc4mewy5w) {
			$Vuaufi3la1vg = $V55vc4mewy5w - 1;
			
			$Vnwufml5q3nphis->setPageBuffer($V55vc4mewy5w, $Vnwufml5q3nphis->getPageBuffer($Vuaufi3la1vg));
			$Vnwufml5q3nphis->pagedim[$V55vc4mewy5w] = $Vnwufml5q3nphis->pagedim[$Vuaufi3la1vg];
			$Vnwufml5q3nphis->pagelen[$V55vc4mewy5w] = $Vnwufml5q3nphis->pagelen[$Vuaufi3la1vg];
			$Vnwufml5q3nphis->intmrk[$V55vc4mewy5w] = $Vnwufml5q3nphis->intmrk[$Vuaufi3la1vg];
			$Vnwufml5q3nphis->bordermrk[$V55vc4mewy5w] = $Vnwufml5q3nphis->bordermrk[$Vuaufi3la1vg];
			$Vnwufml5q3nphis->cntmrk[$V55vc4mewy5w] = $Vnwufml5q3nphis->cntmrk[$Vuaufi3la1vg];
			$Vnwufml5q3nphis->pageobjects[$V55vc4mewy5w] = $Vnwufml5q3nphis->pageobjects[$Vuaufi3la1vg];
			if (isset($Vnwufml5q3nphis->footerpos[$Vuaufi3la1vg])) {
				$Vnwufml5q3nphis->footerpos[$V55vc4mewy5w] = $Vnwufml5q3nphis->footerpos[$Vuaufi3la1vg];
			} elseif (isset($Vnwufml5q3nphis->footerpos[$V55vc4mewy5w])) {
				unset($Vnwufml5q3nphis->footerpos[$V55vc4mewy5w]);
			}
			if (isset($Vnwufml5q3nphis->footerlen[$Vuaufi3la1vg])) {
				$Vnwufml5q3nphis->footerlen[$V55vc4mewy5w] = $Vnwufml5q3nphis->footerlen[$Vuaufi3la1vg];
			} elseif (isset($Vnwufml5q3nphis->footerlen[$V55vc4mewy5w])) {
				unset($Vnwufml5q3nphis->footerlen[$V55vc4mewy5w]);
			}
			if (isset($Vnwufml5q3nphis->transfmrk[$Vuaufi3la1vg])) {
				$Vnwufml5q3nphis->transfmrk[$V55vc4mewy5w] = $Vnwufml5q3nphis->transfmrk[$Vuaufi3la1vg];
			} elseif (isset($Vnwufml5q3nphis->transfmrk[$V55vc4mewy5w])) {
				unset($Vnwufml5q3nphis->transfmrk[$V55vc4mewy5w]);
			}
			if (isset($Vnwufml5q3nphis->PageAnnots[$Vuaufi3la1vg])) {
				$Vnwufml5q3nphis->PageAnnots[$V55vc4mewy5w] = $Vnwufml5q3nphis->PageAnnots[$Vuaufi3la1vg];
			} elseif (isset($Vnwufml5q3nphis->PageAnnots[$V55vc4mewy5w])) {
				unset($Vnwufml5q3nphis->PageAnnots[$V55vc4mewy5w]);
			}
			if (isset($Vnwufml5q3nphis->newpagegroup[$Vuaufi3la1vg])) {
				$Vnwufml5q3nphis->newpagegroup[$V55vc4mewy5w] = $Vnwufml5q3nphis->newpagegroup[$Vuaufi3la1vg];
				unset($Vnwufml5q3nphis->newpagegroup[$Vuaufi3la1vg]);
			}
			if ($Vnwufml5q3nphis->currpagegroup == $Vuaufi3la1vg) {
				$Vnwufml5q3nphis->currpagegroup = $V55vc4mewy5w;
			}
		}
		$Vnwufml5q3nphis->setPageBuffer($Vmudo4ztceqiage, $V3p0tae11ldwpage);
		$Vnwufml5q3nphis->pagedim[$Vmudo4ztceqiage] = $V3p0tae11ldwpagedim;
		$Vnwufml5q3nphis->pagelen[$Vmudo4ztceqiage] = $V3p0tae11ldwpagelen;
		$Vnwufml5q3nphis->intmrk[$Vmudo4ztceqiage] = $V3p0tae11ldwintmrk;
		$Vnwufml5q3nphis->bordermrk[$Vmudo4ztceqiage] = $V3p0tae11ldwbordermrk;
		$Vnwufml5q3nphis->cntmrk[$Vmudo4ztceqiage] = $V3p0tae11ldwcntmrk;
		$Vnwufml5q3nphis->pageobjects[$Vmudo4ztceqiage] = $V3p0tae11ldwpageobjects;
		if (isset($V3p0tae11ldwfooterpos)) {
			$Vnwufml5q3nphis->footerpos[$Vmudo4ztceqiage] = $V3p0tae11ldwfooterpos;
		} elseif (isset($Vnwufml5q3nphis->footerpos[$Vmudo4ztceqiage])) {
			unset($Vnwufml5q3nphis->footerpos[$Vmudo4ztceqiage]);
		}
		if (isset($V3p0tae11ldwfooterlen)) {
			$Vnwufml5q3nphis->footerlen[$Vmudo4ztceqiage] = $V3p0tae11ldwfooterlen;
		} elseif (isset($Vnwufml5q3nphis->footerlen[$Vmudo4ztceqiage])) {
			unset($Vnwufml5q3nphis->footerlen[$Vmudo4ztceqiage]);
		}
		if (isset($V3p0tae11ldwtransfmrk)) {
			$Vnwufml5q3nphis->transfmrk[$Vmudo4ztceqiage] = $V3p0tae11ldwtransfmrk;
		} elseif (isset($Vnwufml5q3nphis->transfmrk[$Vmudo4ztceqiage])) {
			unset($Vnwufml5q3nphis->transfmrk[$Vmudo4ztceqiage]);
		}
		if (isset($V3p0tae11ldwannots)) {
			$Vnwufml5q3nphis->PageAnnots[$Vmudo4ztceqiage] = $V3p0tae11ldwannots;
		} elseif (isset($Vnwufml5q3nphis->PageAnnots[$Vmudo4ztceqiage])) {
			unset($Vnwufml5q3nphis->PageAnnots[$Vmudo4ztceqiage]);
		}
		
		$Vcktixcvvjo4 = $Vnwufml5q3nphis->outlines;
		foreach ($Vcktixcvvjo4 as $Vl0q4noiexi4ey => $V11xlf4riwnd) {
			if (!$V11xlf4riwnd['f']) {
				if (($V11xlf4riwnd['p'] >= $Vmudo4ztceqiage) AND ($V11xlf4riwnd['p'] < $Vxb0ra0fqzn2rompage)) {
					$Vnwufml5q3nphis->outlines[$Vl0q4noiexi4ey]['p'] = ($V11xlf4riwnd['p'] + 1);
				} elseif ($V11xlf4riwnd['p'] == $Vxb0ra0fqzn2rompage) {
					$Vnwufml5q3nphis->outlines[$Vl0q4noiexi4ey]['p'] = $Vmudo4ztceqiage;
				}
			}
		}
		
		$Vmk2cev1odi5 = $Vnwufml5q3nphis->dests;
		foreach ($Vmk2cev1odi5 as $Vl0q4noiexi4ey => $Vyyomvjhwdbp) {
			if (!$Vyyomvjhwdbp['f']) {
				if (($Vyyomvjhwdbp['p'] >= $Vmudo4ztceqiage) AND ($Vyyomvjhwdbp['p'] < $Vxb0ra0fqzn2rompage)) {
					$Vnwufml5q3nphis->dests[$Vl0q4noiexi4ey]['p'] = ($Vyyomvjhwdbp['p'] + 1);
				} elseif ($Vyyomvjhwdbp['p'] == $Vxb0ra0fqzn2rompage) {
					$Vnwufml5q3nphis->dests[$Vl0q4noiexi4ey]['p'] = $Vmudo4ztceqiage;
				}
			}
		}
		
		$Vexnitrcll1z = $Vnwufml5q3nphis->links;
		foreach ($Vexnitrcll1z as $Vl0q4noiexi4ey => $Vx3g4ytafo1aink) {
			if (!$Vx3g4ytafo1aink['f']) {
				if (($Vx3g4ytafo1aink['p'] >= $Vmudo4ztceqiage) AND ($Vx3g4ytafo1aink['p'] < $Vxb0ra0fqzn2rompage)) {
					$Vnwufml5q3nphis->links[$Vl0q4noiexi4ey]['p'] = ($Vx3g4ytafo1aink['p'] + 1);
				} elseif ($Vx3g4ytafo1aink['p'] == $Vxb0ra0fqzn2rompage) {
					$Vnwufml5q3nphis->links[$Vl0q4noiexi4ey]['p'] = $Vmudo4ztceqiage;
				}
			}
		}
		
		$Vuaufi3la1vgfrompage = $Vxb0ra0fqzn2rompage;
		$Vuaufi3la1vgtopage = $Vmudo4ztceqiage;
		if (preg_match_all('/this\.addField\(\'([^\']*)\',\'([^\']*)\',([0-9]+)/', $Vnwufml5q3nphis->javascript, $V1yuhsvbtlvramatch) > 0) {
			foreach($V1yuhsvbtlvramatch[0] as $V1yuhsvbtlvrk => $V1yuhsvbtlvrmatch) {
				$Vwfolue42pzjnum = intval($V1yuhsvbtlvramatch[3][$V1yuhsvbtlvrk]) + 1;
				if (($Vwfolue42pzjnum >= $Vuaufi3la1vgtopage) AND ($Vwfolue42pzjnum < $Vuaufi3la1vgfrompage)) {
					$Vgv45dfhsyuhewpage = ($Vwfolue42pzjnum + 1);
				} elseif ($Vwfolue42pzjnum == $Vuaufi3la1vgfrompage) {
					$Vgv45dfhsyuhewpage = $Vuaufi3la1vgtopage;
				} else {
					$Vgv45dfhsyuhewpage = $Vwfolue42pzjnum;
				}
				--$Vgv45dfhsyuhewpage;
				$Vgv45dfhsyuhewjs = "this.addField(\'".$V1yuhsvbtlvramatch[1][$V1yuhsvbtlvrk]."\',\'".$V1yuhsvbtlvramatch[2][$V1yuhsvbtlvrk]."\',".$Vgv45dfhsyuhewpage;
				$Vnwufml5q3nphis->javascript = str_replace($V1yuhsvbtlvrmatch, $Vgv45dfhsyuhewjs, $Vnwufml5q3nphis->javascript);
			}
			unset($V1yuhsvbtlvramatch);
		}
		
		$Vnwufml5q3nphis->lastPage(true);
		return true;
	}

	
	public function deletePage($Vwfolue42pzj) {
		if (($Vwfolue42pzj < 1) OR ($Vwfolue42pzj > $Vnwufml5q3nphis->numpages)) {
			return false;
		}
		
		unset($Vnwufml5q3nphis->pages[$Vwfolue42pzj]);
		unset($Vnwufml5q3nphis->pagedim[$Vwfolue42pzj]);
		unset($Vnwufml5q3nphis->pagelen[$Vwfolue42pzj]);
		unset($Vnwufml5q3nphis->intmrk[$Vwfolue42pzj]);
		unset($Vnwufml5q3nphis->bordermrk[$Vwfolue42pzj]);
		unset($Vnwufml5q3nphis->cntmrk[$Vwfolue42pzj]);
		foreach ($Vnwufml5q3nphis->pageobjects[$Vwfolue42pzj] as $V0ql3xygizkc) {
			if (isset($Vnwufml5q3nphis->offsets[$V0ql3xygizkc])){
				unset($Vnwufml5q3nphis->offsets[$V0ql3xygizkc]);
			}
		}
		unset($Vnwufml5q3nphis->pageobjects[$Vwfolue42pzj]);
		if (isset($Vnwufml5q3nphis->footerpos[$Vwfolue42pzj])) {
			unset($Vnwufml5q3nphis->footerpos[$Vwfolue42pzj]);
		}
		if (isset($Vnwufml5q3nphis->footerlen[$Vwfolue42pzj])) {
			unset($Vnwufml5q3nphis->footerlen[$Vwfolue42pzj]);
		}
		if (isset($Vnwufml5q3nphis->transfmrk[$Vwfolue42pzj])) {
			unset($Vnwufml5q3nphis->transfmrk[$Vwfolue42pzj]);
		}
		if (isset($Vnwufml5q3nphis->PageAnnots[$Vwfolue42pzj])) {
			unset($Vnwufml5q3nphis->PageAnnots[$Vwfolue42pzj]);
		}
		if (isset($Vnwufml5q3nphis->newpagegroup) AND !empty($Vnwufml5q3nphis->newpagegroup)) {
			for ($V55vc4mewy5w = $Vwfolue42pzj; $V55vc4mewy5w > 0; --$V55vc4mewy5w) {
				if (isset($Vnwufml5q3nphis->newpagegroup[$V55vc4mewy5w]) AND (($V55vc4mewy5w + $Vnwufml5q3nphis->pagegroups[$Vnwufml5q3nphis->newpagegroup[$V55vc4mewy5w]]) > $Vwfolue42pzj)) {
					--$Vnwufml5q3nphis->pagegroups[$Vnwufml5q3nphis->newpagegroup[$V55vc4mewy5w]];
					break;
				}
			}
		}
		if (isset($Vnwufml5q3nphis->pageopen[$Vwfolue42pzj])) {
			unset($Vnwufml5q3nphis->pageopen[$Vwfolue42pzj]);
		}
		if ($Vwfolue42pzj < $Vnwufml5q3nphis->numpages) {
			
			for ($V55vc4mewy5w = $Vwfolue42pzj; $V55vc4mewy5w < $Vnwufml5q3nphis->numpages; ++$V55vc4mewy5w) {
				$Vuaufi3la1vg = $V55vc4mewy5w + 1;
				
				$Vnwufml5q3nphis->setPageBuffer($V55vc4mewy5w, $Vnwufml5q3nphis->getPageBuffer($Vuaufi3la1vg));
				$Vnwufml5q3nphis->pagedim[$V55vc4mewy5w] = $Vnwufml5q3nphis->pagedim[$Vuaufi3la1vg];
				$Vnwufml5q3nphis->pagelen[$V55vc4mewy5w] = $Vnwufml5q3nphis->pagelen[$Vuaufi3la1vg];
				$Vnwufml5q3nphis->intmrk[$V55vc4mewy5w] = $Vnwufml5q3nphis->intmrk[$Vuaufi3la1vg];
				$Vnwufml5q3nphis->bordermrk[$V55vc4mewy5w] = $Vnwufml5q3nphis->bordermrk[$Vuaufi3la1vg];
				$Vnwufml5q3nphis->cntmrk[$V55vc4mewy5w] = $Vnwufml5q3nphis->cntmrk[$Vuaufi3la1vg];
				$Vnwufml5q3nphis->pageobjects[$V55vc4mewy5w] = $Vnwufml5q3nphis->pageobjects[$Vuaufi3la1vg];
				if (isset($Vnwufml5q3nphis->footerpos[$Vuaufi3la1vg])) {
					$Vnwufml5q3nphis->footerpos[$V55vc4mewy5w] = $Vnwufml5q3nphis->footerpos[$Vuaufi3la1vg];
				} elseif (isset($Vnwufml5q3nphis->footerpos[$V55vc4mewy5w])) {
					unset($Vnwufml5q3nphis->footerpos[$V55vc4mewy5w]);
				}
				if (isset($Vnwufml5q3nphis->footerlen[$Vuaufi3la1vg])) {
					$Vnwufml5q3nphis->footerlen[$V55vc4mewy5w] = $Vnwufml5q3nphis->footerlen[$Vuaufi3la1vg];
				} elseif (isset($Vnwufml5q3nphis->footerlen[$V55vc4mewy5w])) {
					unset($Vnwufml5q3nphis->footerlen[$V55vc4mewy5w]);
				}
				if (isset($Vnwufml5q3nphis->transfmrk[$Vuaufi3la1vg])) {
					$Vnwufml5q3nphis->transfmrk[$V55vc4mewy5w] = $Vnwufml5q3nphis->transfmrk[$Vuaufi3la1vg];
				} elseif (isset($Vnwufml5q3nphis->transfmrk[$V55vc4mewy5w])) {
					unset($Vnwufml5q3nphis->transfmrk[$V55vc4mewy5w]);
				}
				if (isset($Vnwufml5q3nphis->PageAnnots[$Vuaufi3la1vg])) {
					$Vnwufml5q3nphis->PageAnnots[$V55vc4mewy5w] = $Vnwufml5q3nphis->PageAnnots[$Vuaufi3la1vg];
				} elseif (isset($Vnwufml5q3nphis->PageAnnots[$V55vc4mewy5w])) {
					unset($Vnwufml5q3nphis->PageAnnots[$V55vc4mewy5w]);
				}
				if (isset($Vnwufml5q3nphis->newpagegroup[$Vuaufi3la1vg])) {
					$Vnwufml5q3nphis->newpagegroup[$V55vc4mewy5w] = $Vnwufml5q3nphis->newpagegroup[$Vuaufi3la1vg];
					unset($Vnwufml5q3nphis->newpagegroup[$Vuaufi3la1vg]);
				}
				if ($Vnwufml5q3nphis->currpagegroup == $Vuaufi3la1vg) {
					$Vnwufml5q3nphis->currpagegroup = $V55vc4mewy5w;
				}
				if (isset($Vnwufml5q3nphis->pageopen[$Vuaufi3la1vg])) {
					$Vnwufml5q3nphis->pageopen[$V55vc4mewy5w] = $Vnwufml5q3nphis->pageopen[$Vuaufi3la1vg];
				} elseif (isset($Vnwufml5q3nphis->pageopen[$V55vc4mewy5w])) {
					unset($Vnwufml5q3nphis->pageopen[$V55vc4mewy5w]);
				}
			}
			
			unset($Vnwufml5q3nphis->pages[$Vnwufml5q3nphis->numpages]);
			unset($Vnwufml5q3nphis->pagedim[$Vnwufml5q3nphis->numpages]);
			unset($Vnwufml5q3nphis->pagelen[$Vnwufml5q3nphis->numpages]);
			unset($Vnwufml5q3nphis->intmrk[$Vnwufml5q3nphis->numpages]);
			unset($Vnwufml5q3nphis->bordermrk[$Vnwufml5q3nphis->numpages]);
			unset($Vnwufml5q3nphis->cntmrk[$Vnwufml5q3nphis->numpages]);
			foreach ($Vnwufml5q3nphis->pageobjects[$Vnwufml5q3nphis->numpages] as $V0ql3xygizkc) {
				if (isset($Vnwufml5q3nphis->offsets[$V0ql3xygizkc])){
					unset($Vnwufml5q3nphis->offsets[$V0ql3xygizkc]);
				}
			}
			unset($Vnwufml5q3nphis->pageobjects[$Vnwufml5q3nphis->numpages]);
			if (isset($Vnwufml5q3nphis->footerpos[$Vnwufml5q3nphis->numpages])) {
				unset($Vnwufml5q3nphis->footerpos[$Vnwufml5q3nphis->numpages]);
			}
			if (isset($Vnwufml5q3nphis->footerlen[$Vnwufml5q3nphis->numpages])) {
				unset($Vnwufml5q3nphis->footerlen[$Vnwufml5q3nphis->numpages]);
			}
			if (isset($Vnwufml5q3nphis->transfmrk[$Vnwufml5q3nphis->numpages])) {
				unset($Vnwufml5q3nphis->transfmrk[$Vnwufml5q3nphis->numpages]);
			}
			if (isset($Vnwufml5q3nphis->PageAnnots[$Vnwufml5q3nphis->numpages])) {
				unset($Vnwufml5q3nphis->PageAnnots[$Vnwufml5q3nphis->numpages]);
			}
			if (isset($Vnwufml5q3nphis->newpagegroup[$Vnwufml5q3nphis->numpages])) {
				unset($Vnwufml5q3nphis->newpagegroup[$Vnwufml5q3nphis->numpages]);
			}
			if ($Vnwufml5q3nphis->currpagegroup == $Vnwufml5q3nphis->numpages) {
				$Vnwufml5q3nphis->currpagegroup = ($Vnwufml5q3nphis->numpages - 1);
			}
			if (isset($Vnwufml5q3nphis->pagegroups[$Vnwufml5q3nphis->numpages])) {
				unset($Vnwufml5q3nphis->pagegroups[$Vnwufml5q3nphis->numpages]);
			}
			if (isset($Vnwufml5q3nphis->pageopen[$Vnwufml5q3nphis->numpages])) {
				unset($Vnwufml5q3nphis->pageopen[$Vnwufml5q3nphis->numpages]);
			}
		}
		--$Vnwufml5q3nphis->numpages;
		$Vnwufml5q3nphis->page = $Vnwufml5q3nphis->numpages;
		
		$Vcktixcvvjo4 = $Vnwufml5q3nphis->outlines;
		foreach ($Vcktixcvvjo4 as $Vl0q4noiexi4ey => $V11xlf4riwnd) {
			if (!$V11xlf4riwnd['f']) {
				if ($V11xlf4riwnd['p'] > $Vwfolue42pzj) {
					$Vnwufml5q3nphis->outlines[$Vl0q4noiexi4ey]['p'] = $V11xlf4riwnd['p'] - 1;
				} elseif ($V11xlf4riwnd['p'] == $Vwfolue42pzj) {
					unset($Vnwufml5q3nphis->outlines[$Vl0q4noiexi4ey]);
				}
			}
		}
		
		$Vmk2cev1odi5 = $Vnwufml5q3nphis->dests;
		foreach ($Vmk2cev1odi5 as $Vl0q4noiexi4ey => $Vyyomvjhwdbp) {
			if (!$Vyyomvjhwdbp['f']) {
				if ($Vyyomvjhwdbp['p'] > $Vwfolue42pzj) {
					$Vnwufml5q3nphis->dests[$Vl0q4noiexi4ey]['p'] = $Vyyomvjhwdbp['p'] - 1;
				} elseif ($Vyyomvjhwdbp['p'] == $Vwfolue42pzj) {
					unset($Vnwufml5q3nphis->dests[$Vl0q4noiexi4ey]);
				}
			}
		}
		
		$Vexnitrcll1z = $Vnwufml5q3nphis->links;
		foreach ($Vexnitrcll1z as $Vl0q4noiexi4ey => $Vx3g4ytafo1aink) {
			if (!$Vx3g4ytafo1aink['f']) {
				if ($Vx3g4ytafo1aink['p'] > $Vwfolue42pzj) {
					$Vnwufml5q3nphis->links[$Vl0q4noiexi4ey]['p'] = $Vx3g4ytafo1aink['p'] - 1;
				} elseif ($Vx3g4ytafo1aink['p'] == $Vwfolue42pzj) {
					unset($Vnwufml5q3nphis->links[$Vl0q4noiexi4ey]);
				}
			}
		}
		
		$Vuaufi3la1vgpage = $Vwfolue42pzj;
		if (preg_match_all('/this\.addField\(\'([^\']*)\',\'([^\']*)\',([0-9]+)/', $Vnwufml5q3nphis->javascript, $V1yuhsvbtlvramatch) > 0) {
			foreach($V1yuhsvbtlvramatch[0] as $V1yuhsvbtlvrk => $V1yuhsvbtlvrmatch) {
				$Vwfolue42pzjnum = intval($V1yuhsvbtlvramatch[3][$V1yuhsvbtlvrk]) + 1;
				if ($Vwfolue42pzjnum >= $Vuaufi3la1vgpage) {
					$Vgv45dfhsyuhewpage = ($Vwfolue42pzjnum - 1);
				} elseif ($Vwfolue42pzjnum == $Vuaufi3la1vgpage) {
					$Vgv45dfhsyuhewpage = 1;
				} else {
					$Vgv45dfhsyuhewpage = $Vwfolue42pzjnum;
				}
				--$Vgv45dfhsyuhewpage;
				$Vgv45dfhsyuhewjs = "this.addField(\'".$V1yuhsvbtlvramatch[1][$V1yuhsvbtlvrk]."\',\'".$V1yuhsvbtlvramatch[2][$V1yuhsvbtlvrk]."\',".$Vgv45dfhsyuhewpage;
				$Vnwufml5q3nphis->javascript = str_replace($V1yuhsvbtlvrmatch, $Vgv45dfhsyuhewjs, $Vnwufml5q3nphis->javascript);
			}
			unset($V1yuhsvbtlvramatch);
		}
		
		if ($Vnwufml5q3nphis->numpages > 0) {
			$Vnwufml5q3nphis->lastPage(true);
		}
		return true;
	}

	
	public function copyPage($Vwfolue42pzj=0) {
		if ($Vwfolue42pzj == 0) {
			
			$Vwfolue42pzj = $Vnwufml5q3nphis->page;
		}
		if (($Vwfolue42pzj < 1) OR ($Vwfolue42pzj > $Vnwufml5q3nphis->numpages)) {
			return false;
		}
		
		$Vnwufml5q3nphis->endPage();
		
		++$Vnwufml5q3nphis->numpages;
		$Vnwufml5q3nphis->page = $Vnwufml5q3nphis->numpages;
		$Vnwufml5q3nphis->setPageBuffer($Vnwufml5q3nphis->page, $Vnwufml5q3nphis->getPageBuffer($Vwfolue42pzj));
		$Vnwufml5q3nphis->pagedim[$Vnwufml5q3nphis->page] = $Vnwufml5q3nphis->pagedim[$Vwfolue42pzj];
		$Vnwufml5q3nphis->pagelen[$Vnwufml5q3nphis->page] = $Vnwufml5q3nphis->pagelen[$Vwfolue42pzj];
		$Vnwufml5q3nphis->intmrk[$Vnwufml5q3nphis->page] = $Vnwufml5q3nphis->intmrk[$Vwfolue42pzj];
		$Vnwufml5q3nphis->bordermrk[$Vnwufml5q3nphis->page] = $Vnwufml5q3nphis->bordermrk[$Vwfolue42pzj];
		$Vnwufml5q3nphis->cntmrk[$Vnwufml5q3nphis->page] = $Vnwufml5q3nphis->cntmrk[$Vwfolue42pzj];
		$Vnwufml5q3nphis->pageobjects[$Vnwufml5q3nphis->page] = $Vnwufml5q3nphis->pageobjects[$Vwfolue42pzj];
		$Vnwufml5q3nphis->pageopen[$Vnwufml5q3nphis->page] = false;
		if (isset($Vnwufml5q3nphis->footerpos[$Vwfolue42pzj])) {
			$Vnwufml5q3nphis->footerpos[$Vnwufml5q3nphis->page] = $Vnwufml5q3nphis->footerpos[$Vwfolue42pzj];
		}
		if (isset($Vnwufml5q3nphis->footerlen[$Vwfolue42pzj])) {
			$Vnwufml5q3nphis->footerlen[$Vnwufml5q3nphis->page] = $Vnwufml5q3nphis->footerlen[$Vwfolue42pzj];
		}
		if (isset($Vnwufml5q3nphis->transfmrk[$Vwfolue42pzj])) {
			$Vnwufml5q3nphis->transfmrk[$Vnwufml5q3nphis->page] = $Vnwufml5q3nphis->transfmrk[$Vwfolue42pzj];
		}
		if (isset($Vnwufml5q3nphis->PageAnnots[$Vwfolue42pzj])) {
			$Vnwufml5q3nphis->PageAnnots[$Vnwufml5q3nphis->page] = $Vnwufml5q3nphis->PageAnnots[$Vwfolue42pzj];
		}
		if (isset($Vnwufml5q3nphis->newpagegroup[$Vwfolue42pzj])) {
			
			$Vnwufml5q3nphis->newpagegroup[$Vnwufml5q3nphis->page] = sizeof($Vnwufml5q3nphis->newpagegroup) + 1;
			$Vnwufml5q3nphis->currpagegroup = $Vnwufml5q3nphis->newpagegroup[$Vnwufml5q3nphis->page];
			$Vnwufml5q3nphis->pagegroups[$Vnwufml5q3nphis->currpagegroup] = 1;
		} elseif (isset($Vnwufml5q3nphis->currpagegroup) AND ($Vnwufml5q3nphis->currpagegroup > 0)) {
			++$Vnwufml5q3nphis->pagegroups[$Vnwufml5q3nphis->currpagegroup];
		}
		
		$Vcktixcvvjo4 = $Vnwufml5q3nphis->outlines;
		foreach ($Vcktixcvvjo4 as $Vl0q4noiexi4ey => $V11xlf4riwnd) {
			if ($V11xlf4riwnd['p'] == $Vwfolue42pzj) {
				$Vnwufml5q3nphis->outlines[] = array('t' => $V11xlf4riwnd['t'], 'l' => $V11xlf4riwnd['l'], 'x' => $V11xlf4riwnd['x'], 'y' => $V11xlf4riwnd['y'], 'p' => $Vnwufml5q3nphis->page, 'f' => $V11xlf4riwnd['f'], 's' => $V11xlf4riwnd['s'], 'c' => $V11xlf4riwnd['c']);
			}
		}
		
		$Vexnitrcll1z = $Vnwufml5q3nphis->links;
		foreach ($Vexnitrcll1z as $Vl0q4noiexi4ey => $Vx3g4ytafo1aink) {
			if ($Vx3g4ytafo1aink['p'] == $Vwfolue42pzj) {
				$Vnwufml5q3nphis->links[] = array('p' => $Vnwufml5q3nphis->page, 'y' => $Vx3g4ytafo1aink['y'], 'f' => $Vx3g4ytafo1aink['f']);
			}
		}
		
		$Vnwufml5q3nphis->lastPage(true);
		return true;
	}

	
	public function addTOC($Vwfolue42pzj='', $Vgv45dfhsyuhumbersfont='', $Viiychbtwwwqer='.', $Vnwufml5q3npoc_name='TOC', $Vovexk3mzujo='', $Vwcmlurixvzgolor=array(0,0,0)) {
		$Vshfhqyg5vyrize = $Vnwufml5q3nphis->FontSizePt;
		$Voc1qigl3k5yfamily = $Vnwufml5q3nphis->FontFamily;
		$Vshfhqyg5vyrtyle = $Vnwufml5q3nphis->FontStyle;
		$Vim12f51jw5r = $Vnwufml5q3nphis->w - $Vnwufml5q3nphis->lMargin - $Vnwufml5q3nphis->rMargin;
		$Vvt20qqut4bupacer = $Vnwufml5q3nphis->GetStringWidth(chr(32)) * 4;
		$Vx3g4ytafo1amargin = $Vnwufml5q3nphis->lMargin;
		$Vfhkt4vbeualmargin = $Vnwufml5q3nphis->rMargin;
		$Vangwoo3ejfg_start = $Vnwufml5q3nphis->GetX();
		$Vwfolue42pzj_first = $Vnwufml5q3nphis->page;
		$Vwcmlurixvzgurrent_page = $Vnwufml5q3nphis->page;
		$Vwfolue42pzj_fill_start = false;
		$Vwfolue42pzj_fill_end = false;
		$Vagbsx3k35in = $Vnwufml5q3nphis->current_column;
		if (TCPDF_STATIC::empty_string($Vgv45dfhsyuhumbersfont)) {
			$Vgv45dfhsyuhumbersfont = $Vnwufml5q3nphis->default_monospaced_font;
		}
		if (TCPDF_STATIC::empty_string($Viiychbtwwwqer)) {
			$Viiychbtwwwqer = ' ';
		}
		if (TCPDF_STATIC::empty_string($Vwfolue42pzj)) {
			$Vqdeou2vhybvap = ' ';
		} else {
			$Vqdeou2vhybvap = '';
			if ($Vwfolue42pzj < 1) {
				$Vwfolue42pzj = 1;
			}
		}
		$Vnwufml5q3nphis->SetFont($Vgv45dfhsyuhumbersfont, $Vshfhqyg5vyrtyle, $Vshfhqyg5vyrize);
		$Vgv45dfhsyuhumwidth = $Vnwufml5q3nphis->GetStringWidth('00000');
		$Vetludueqmbtaxpage = 0; 
		foreach ($Vnwufml5q3nphis->outlines as $Vl0q4noiexi4ey => $V11xlf4riwnd) {
			
			if (($Vnwufml5q3nphis->page > $Vwfolue42pzj_first) AND ($V11xlf4riwnd['p'] >= $Vnwufml5q3nphis->numpages)) {
				$V11xlf4riwnd['p'] += ($Vnwufml5q3nphis->page - $Vwfolue42pzj_first);
			}
			if ($Vnwufml5q3nphis->rtl) {
				$Vb5kn1gbu0eptext = 'R';
				$Vb5kn1gbu0epnum = 'L';
			} else {
				$Vb5kn1gbu0eptext = 'L';
				$Vb5kn1gbu0epnum = 'R';
			}
			if ($V11xlf4riwnd['l'] == 0) {
				$Vnwufml5q3nphis->SetFont($Voc1qigl3k5yfamily, $V11xlf4riwnd['s'].'B', $Vshfhqyg5vyrize);
			} else {
				$Vnwufml5q3nphis->SetFont($Voc1qigl3k5yfamily, $V11xlf4riwnd['s'], $Vshfhqyg5vyrize - $V11xlf4riwnd['l']);
			}
			$Vnwufml5q3nphis->SetTextColorArray($V11xlf4riwnd['c']);
			
			$Vnwufml5q3nphis->checkPageBreak(2 * $Vnwufml5q3nphis->getCellHeight($Vnwufml5q3nphis->FontSize));
			
			if (($Vnwufml5q3nphis->page == $Vwcmlurixvzgurrent_page) AND ($Vnwufml5q3nphis->current_column == $Vagbsx3k35in)) {
				$Vnwufml5q3nphis->lMargin = $Vx3g4ytafo1amargin;
				$Vnwufml5q3nphis->rMargin = $Vfhkt4vbeualmargin;
			} else {
				if ($Vnwufml5q3nphis->current_column != $Vagbsx3k35in) {
					if ($Vnwufml5q3nphis->rtl) {
						$Vangwoo3ejfg_start = $Vnwufml5q3nphis->w - $Vnwufml5q3nphis->columns[$Vnwufml5q3nphis->current_column]['x'];
					} else {
						$Vangwoo3ejfg_start = $Vnwufml5q3nphis->columns[$Vnwufml5q3nphis->current_column]['x'];
					}
				}
				$Vx3g4ytafo1amargin = $Vnwufml5q3nphis->lMargin;
				$Vfhkt4vbeualmargin = $Vnwufml5q3nphis->rMargin;
				$Vwcmlurixvzgurrent_page = $Vnwufml5q3nphis->page;
				$Vagbsx3k35in = $Vnwufml5q3nphis->current_column;
			}
			$Vnwufml5q3nphis->SetX($Vangwoo3ejfg_start);
			$V55vc4mewy5wndent = ($Vvt20qqut4bupacer * $V11xlf4riwnd['l']);
			if ($Vnwufml5q3nphis->rtl) {
				$Vnwufml5q3nphis->x -= $V55vc4mewy5wndent;
				$Vnwufml5q3nphis->rMargin = $Vnwufml5q3nphis->w - $Vnwufml5q3nphis->x;
			} else {
				$Vnwufml5q3nphis->x += $V55vc4mewy5wndent;
				$Vnwufml5q3nphis->lMargin = $Vnwufml5q3nphis->x;
			}
			$Vx3g4ytafo1aink = $Vnwufml5q3nphis->AddLink();
			$Vnwufml5q3nphis->SetLink($Vx3g4ytafo1aink, $V11xlf4riwnd['y'], $V11xlf4riwnd['p']);
			
			if ($Vnwufml5q3nphis->rtl) {
				$Vg1d0vbcooi4 = ' '.$V11xlf4riwnd['t'];
			} else {
				$Vg1d0vbcooi4 = $V11xlf4riwnd['t'].' ';
			}
			$Vnwufml5q3nphis->Write(0, $Vg1d0vbcooi4, $Vx3g4ytafo1aink, false, $Vb5kn1gbu0eptext, false, 0, false, false, 0, $Vgv45dfhsyuhumwidth, '');
			if ($Vnwufml5q3nphis->rtl) {
				$Vnwufml5q3npw = $Vnwufml5q3nphis->x - $Vnwufml5q3nphis->lMargin;
			} else {
				$Vnwufml5q3npw = $Vnwufml5q3nphis->w - $Vnwufml5q3nphis->rMargin - $Vnwufml5q3nphis->x;
			}
			$Vnwufml5q3nphis->SetFont($Vgv45dfhsyuhumbersfont, $Vshfhqyg5vyrtyle, $Vshfhqyg5vyrize);
			if (TCPDF_STATIC::empty_string($Vwfolue42pzj)) {
				$Vwfolue42pzjnum = $V11xlf4riwnd['p'];
			} else {
				
				$Vwfolue42pzjnum = '{#'.($V11xlf4riwnd['p']).'}';
				if ($Vnwufml5q3nphis->isUnicodeFont()) {
					$Vwfolue42pzjnum = '{'.$Vwfolue42pzjnum.'}';
				}
				$Vetludueqmbtaxpage = max($Vetludueqmbtaxpage, $V11xlf4riwnd['p']);
			}
			$Vxb0ra0fqzn2w = ($Vnwufml5q3npw - $Vnwufml5q3nphis->GetStringWidth($Vwfolue42pzjnum.$Viiychbtwwwqer));
			$Vim12f51jw5rfiller = $Vnwufml5q3nphis->GetStringWidth($Viiychbtwwwqer);
			if ($Vim12f51jw5rfiller > 0) {
				$Vgv45dfhsyuhumfills = floor($Vxb0ra0fqzn2w / $Vim12f51jw5rfiller);
			} else {
				$Vgv45dfhsyuhumfills = 0;
			}
			if ($Vgv45dfhsyuhumfills > 0) {
				$Vfhkt4vbeualowfill = str_repeat($Viiychbtwwwqer, $Vgv45dfhsyuhumfills);
			} else {
				$Vfhkt4vbeualowfill = '';
			}
			if ($Vnwufml5q3nphis->rtl) {
				$Vwfolue42pzjnum = $Vwfolue42pzjnum.$Vqdeou2vhybvap.$Vfhkt4vbeualowfill;
			} else {
				$Vwfolue42pzjnum = $Vfhkt4vbeualowfill.$Vqdeou2vhybvap.$Vwfolue42pzjnum;
			}
			
			$Vnwufml5q3nphis->Cell($Vnwufml5q3npw, 0, $Vwfolue42pzjnum, 0, 1, $Vb5kn1gbu0epnum, 0, $Vx3g4ytafo1aink, 0);
		}
		$Vwfolue42pzj_last = $Vnwufml5q3nphis->getPage();
		$Vgv45dfhsyuhumpages = ($Vwfolue42pzj_last - $Vwfolue42pzj_first + 1);
		
		if ($Vnwufml5q3nphis->booklet) {
			
			$Vwfolue42pzj_fill_start = ((($Vwfolue42pzj_first % 2) == 0) XOR (($Vwfolue42pzj % 2) == 0));
			$Vwfolue42pzj_fill_end = (!((($Vgv45dfhsyuhumpages % 2) == 0) XOR ($Vwfolue42pzj_fill_start)));
			if ($Vwfolue42pzj_fill_start) {
				
				$Vnwufml5q3nphis->addPage();
				++$Vwfolue42pzj_last;
				++$Vgv45dfhsyuhumpages;
			}
			if ($Vwfolue42pzj_fill_end) {
				
				$Vnwufml5q3nphis->addPage();
				++$Vwfolue42pzj_last;
				++$Vgv45dfhsyuhumpages;
			}
		}
		$Vetludueqmbtaxpage = max($Vetludueqmbtaxpage, $Vwfolue42pzj_last);
		if (!TCPDF_STATIC::empty_string($Vwfolue42pzj)) {
			for ($V1yuhsvbtlvr = $Vwfolue42pzj_first; $V1yuhsvbtlvr <= $Vwfolue42pzj_last; ++$V1yuhsvbtlvr) {
				
				$V0prlonxsmqp = $Vnwufml5q3nphis->getPageBuffer($V1yuhsvbtlvr);
				for ($Vgv45dfhsyuh = 1; $Vgv45dfhsyuh <= $Vetludueqmbtaxpage; ++$Vgv45dfhsyuh) {
					
					$Vudz4oh4qiku = '{#'.$Vgv45dfhsyuh.'}';
					
					$Vc2h3t30a5tg = $Vnwufml5q3nphis->getInternalPageNumberAliases($Vudz4oh4qiku);
					
					if (($Vgv45dfhsyuh >= $Vwfolue42pzj) AND ($Vgv45dfhsyuh <= $Vnwufml5q3nphis->numpages)) {
						$Vgv45dfhsyuhp = $Vgv45dfhsyuh + $Vgv45dfhsyuhumpages;
					} else {
						$Vgv45dfhsyuhp = $Vgv45dfhsyuh;
					}
					$Vgv45dfhsyuha = TCPDF_STATIC::formatTOCPageNumber(($Vnwufml5q3nphis->starting_page_number + $Vgv45dfhsyuhp - 1));
					$Vgv45dfhsyuhu = TCPDF_FONTS::UTF8ToUTF16BE($Vgv45dfhsyuha, false, $Vnwufml5q3nphis->isunicode, $Vnwufml5q3nphis->CurrentFont);
					
					foreach ($Vc2h3t30a5tg['u'] as $Vppw1slbj4ov) {
						$Vvt20qqut4bufill = str_repeat($Viiychbtwwwqer, max(0, (strlen($Vppw1slbj4ov) - strlen($Vgv45dfhsyuhu.' '))));
						if ($Vnwufml5q3nphis->rtl) {
							$Vgv45dfhsyuhr = $Vgv45dfhsyuhu.TCPDF_FONTS::UTF8ToUTF16BE(' '.$Vvt20qqut4bufill, false, $Vnwufml5q3nphis->isunicode, $Vnwufml5q3nphis->CurrentFont);
						} else {
							$Vgv45dfhsyuhr = TCPDF_FONTS::UTF8ToUTF16BE($Vvt20qqut4bufill.' ', false, $Vnwufml5q3nphis->isunicode, $Vnwufml5q3nphis->CurrentFont).$Vgv45dfhsyuhu;
						}
						$V0prlonxsmqp = str_replace($Vppw1slbj4ov, $Vgv45dfhsyuhr, $V0prlonxsmqp);
					}
					foreach ($Vc2h3t30a5tg['a'] as $Vudz4oh4qiku) {
						$Vvt20qqut4bufill = str_repeat($Viiychbtwwwqer, max(0, (strlen($Vudz4oh4qiku) - strlen($Vgv45dfhsyuha.' '))));
						if ($Vnwufml5q3nphis->rtl) {
							$Vgv45dfhsyuhr = $Vgv45dfhsyuha.' '.$Vvt20qqut4bufill;
						} else {
							$Vgv45dfhsyuhr = $Vvt20qqut4bufill.' '.$Vgv45dfhsyuha;
						}
						$V0prlonxsmqp = str_replace($Vudz4oh4qiku, $Vgv45dfhsyuhr, $V0prlonxsmqp);
					}
				}
				
				$Vnwufml5q3nphis->setPageBuffer($V1yuhsvbtlvr, $V0prlonxsmqp);
			}
			
			$Vnwufml5q3nphis->Bookmark($Vnwufml5q3npoc_name, 0, 0, $Vwfolue42pzj_first, $Vovexk3mzujo, $Vwcmlurixvzgolor);
			if ($Vwfolue42pzj_fill_start) {
				$Vnwufml5q3nphis->movePage($Vwfolue42pzj_last, $Vwfolue42pzj_first);
			}
			for ($V55vc4mewy5w = 0; $V55vc4mewy5w < $Vgv45dfhsyuhumpages; ++$V55vc4mewy5w) {
				$Vnwufml5q3nphis->movePage($Vwfolue42pzj_last, $Vwfolue42pzj);
			}
		}
	}

	
	public function addHTMLTOC($Vwfolue42pzj='', $Vnwufml5q3npoc_name='TOC', $Vnwufml5q3npemplates=array(), $Vwcmlurixvzgorrect_align=true, $Vovexk3mzujo='', $Vwcmlurixvzgolor=array(0,0,0)) {
		$Viiychbtwwwqer = ' ';
		$V1yuhsvbtlvrrev_htmlLinkColorArray = $Vnwufml5q3nphis->htmlLinkColorArray;
		$V1yuhsvbtlvrrev_htmlLinkFontStyle = $Vnwufml5q3nphis->htmlLinkFontStyle;
		
		$Vnwufml5q3nphis->htmlLinkColorArray = array();
		$Vnwufml5q3nphis->htmlLinkFontStyle = '';
		$Vwfolue42pzj_first = $Vnwufml5q3nphis->getPage();
		$Vwfolue42pzj_fill_start = false;
		$Vwfolue42pzj_fill_end = false;
		
		$Vwcmlurixvzgurrent_font = $Vnwufml5q3nphis->FontFamily;
		foreach ($Vnwufml5q3npemplates as $Vx3g4ytafo1aevel => $Vvjxcwrp4tjqtml) {
			$Vc0aiseldrl3om = $Vnwufml5q3nphis->getHtmlDomArray($Vvjxcwrp4tjqtml);
			foreach ($Vc0aiseldrl3om as $Vl0q4noiexi4ey => $Vxt4wx3pvtezue) {
				if ($Vxt4wx3pvtezue['value'] == '#TOC_PAGE_NUMBER#') {
					$Vnwufml5q3nphis->SetFont($Vc0aiseldrl3om[($Vl0q4noiexi4ey - 1)]['fontname']);
					$Vnwufml5q3npemplates['F'.$Vx3g4ytafo1aevel] = $Vnwufml5q3nphis->isUnicodeFont();
				}
			}
		}
		$Vnwufml5q3nphis->SetFont($Vwcmlurixvzgurrent_font);
		$Vetludueqmbtaxpage = 0; 
		foreach ($Vnwufml5q3nphis->outlines as $Vl0q4noiexi4ey => $V11xlf4riwnd) {
			
			$Vfhkt4vbeualow = $Vnwufml5q3npemplates[$V11xlf4riwnd['l']];
			if (TCPDF_STATIC::empty_string($Vwfolue42pzj)) {
				$Vwfolue42pzjnum = $V11xlf4riwnd['p'];
			} else {
				
				$Vwfolue42pzjnum = '{#'.($V11xlf4riwnd['p']).'}';
				if ($Vnwufml5q3npemplates['F'.$V11xlf4riwnd['l']]) {
					$Vwfolue42pzjnum = '{'.$Vwfolue42pzjnum.'}';
				}
				$Vetludueqmbtaxpage = max($Vetludueqmbtaxpage, $V11xlf4riwnd['p']);
			}
			
			$Vfhkt4vbeualow = str_replace('#TOC_DESCRIPTION#', $V11xlf4riwnd['t'], $Vfhkt4vbeualow);
			$Vfhkt4vbeualow = str_replace('#TOC_PAGE_NUMBER#', $Vwfolue42pzjnum, $Vfhkt4vbeualow);
			
			$Vfhkt4vbeualow = '<a href="#'.$V11xlf4riwnd['p'].','.$V11xlf4riwnd['y'].'">'.$Vfhkt4vbeualow.'</a>';
			
			$Vnwufml5q3nphis->writeHTML($Vfhkt4vbeualow, false, false, true, false, '');
		}
		
		$Vnwufml5q3nphis->htmlLinkColorArray = $V1yuhsvbtlvrrev_htmlLinkColorArray;
		$Vnwufml5q3nphis->htmlLinkFontStyle = $V1yuhsvbtlvrrev_htmlLinkFontStyle;
		
		$Vwfolue42pzj_last = $Vnwufml5q3nphis->getPage();
		$Vgv45dfhsyuhumpages = ($Vwfolue42pzj_last - $Vwfolue42pzj_first + 1);
		
		if ($Vnwufml5q3nphis->booklet) {
			
			$Vwfolue42pzj_fill_start = ((($Vwfolue42pzj_first % 2) == 0) XOR (($Vwfolue42pzj % 2) == 0));
			$Vwfolue42pzj_fill_end = (!((($Vgv45dfhsyuhumpages % 2) == 0) XOR ($Vwfolue42pzj_fill_start)));
			if ($Vwfolue42pzj_fill_start) {
				
				$Vnwufml5q3nphis->addPage();
				++$Vwfolue42pzj_last;
				++$Vgv45dfhsyuhumpages;
			}
			if ($Vwfolue42pzj_fill_end) {
				
				$Vnwufml5q3nphis->addPage();
				++$Vwfolue42pzj_last;
				++$Vgv45dfhsyuhumpages;
			}
		}
		$Vetludueqmbtaxpage = max($Vetludueqmbtaxpage, $Vwfolue42pzj_last);
		if (!TCPDF_STATIC::empty_string($Vwfolue42pzj)) {
			for ($V1yuhsvbtlvr = $Vwfolue42pzj_first; $V1yuhsvbtlvr <= $Vwfolue42pzj_last; ++$V1yuhsvbtlvr) {
				
				$V0prlonxsmqp = $Vnwufml5q3nphis->getPageBuffer($V1yuhsvbtlvr);
				for ($Vgv45dfhsyuh = 1; $Vgv45dfhsyuh <= $Vetludueqmbtaxpage; ++$Vgv45dfhsyuh) {
					
					$Vudz4oh4qiku = '{#'.$Vgv45dfhsyuh.'}';
					
					$Vc2h3t30a5tg = $Vnwufml5q3nphis->getInternalPageNumberAliases($Vudz4oh4qiku);
					
					if ($Vgv45dfhsyuh >= $Vwfolue42pzj) {
						$Vgv45dfhsyuhp = $Vgv45dfhsyuh + $Vgv45dfhsyuhumpages;
					} else {
						$Vgv45dfhsyuhp = $Vgv45dfhsyuh;
					}
					$Vgv45dfhsyuha = TCPDF_STATIC::formatTOCPageNumber(($Vnwufml5q3nphis->starting_page_number + $Vgv45dfhsyuhp - 1));
					$Vgv45dfhsyuhu = TCPDF_FONTS::UTF8ToUTF16BE($Vgv45dfhsyuha, false, $Vnwufml5q3nphis->isunicode, $Vnwufml5q3nphis->CurrentFont);
					
					foreach ($Vc2h3t30a5tg['u'] as $Vppw1slbj4ov) {
						if ($Vwcmlurixvzgorrect_align) {
							$Vvt20qqut4bufill = str_repeat($Viiychbtwwwqer, (strlen($Vppw1slbj4ov) - strlen($Vgv45dfhsyuhu.' ')));
							if ($Vnwufml5q3nphis->rtl) {
								$Vgv45dfhsyuhr = $Vgv45dfhsyuhu.TCPDF_FONTS::UTF8ToUTF16BE(' '.$Vvt20qqut4bufill, false, $Vnwufml5q3nphis->isunicode, $Vnwufml5q3nphis->CurrentFont);
							} else {
								$Vgv45dfhsyuhr = TCPDF_FONTS::UTF8ToUTF16BE($Vvt20qqut4bufill.' ', false, $Vnwufml5q3nphis->isunicode, $Vnwufml5q3nphis->CurrentFont).$Vgv45dfhsyuhu;
							}
						} else {
							$Vgv45dfhsyuhr = $Vgv45dfhsyuhu;
						}
						$V0prlonxsmqp = str_replace($Vppw1slbj4ov, $Vgv45dfhsyuhr, $V0prlonxsmqp);
					}
					foreach ($Vc2h3t30a5tg['a'] as $Vudz4oh4qiku) {
						if ($Vwcmlurixvzgorrect_align) {
							$Vvt20qqut4bufill = str_repeat($Viiychbtwwwqer, (strlen($Vudz4oh4qiku) - strlen($Vgv45dfhsyuha.' ')));
							if ($Vnwufml5q3nphis->rtl) {
								$Vgv45dfhsyuhr = $Vgv45dfhsyuha.' '.$Vvt20qqut4bufill;
							} else {
								$Vgv45dfhsyuhr = $Vvt20qqut4bufill.' '.$Vgv45dfhsyuha;
							}
						} else {
							$Vgv45dfhsyuhr = $Vgv45dfhsyuha;
						}
						$V0prlonxsmqp = str_replace($Vudz4oh4qiku, $Vgv45dfhsyuhr, $V0prlonxsmqp);
					}
				}
				
				$Vnwufml5q3nphis->setPageBuffer($V1yuhsvbtlvr, $V0prlonxsmqp);
			}
			
			$Vnwufml5q3nphis->Bookmark($Vnwufml5q3npoc_name, 0, 0, $Vwfolue42pzj_first, $Vovexk3mzujo, $Vwcmlurixvzgolor);
			if ($Vwfolue42pzj_fill_start) {
				$Vnwufml5q3nphis->movePage($Vwfolue42pzj_last, $Vwfolue42pzj_first);
			}
			for ($V55vc4mewy5w = 0; $V55vc4mewy5w < $Vgv45dfhsyuhumpages; ++$V55vc4mewy5w) {
				$Vnwufml5q3nphis->movePage($Vwfolue42pzj_last, $Vwfolue42pzj);
			}
		}
	}

	
	public function startTransaction() {
		if (isset($Vnwufml5q3nphis->objcopy)) {
			
			$Vnwufml5q3nphis->commitTransaction();
		}
		
		$Vnwufml5q3nphis->start_transaction_page = $Vnwufml5q3nphis->page;
		$Vnwufml5q3nphis->start_transaction_y = $Vnwufml5q3nphis->y;
		
		$Vnwufml5q3nphis->objcopy = TCPDF_STATIC::objclone($Vnwufml5q3nphis);
	}

	
	public function commitTransaction() {
		if (isset($Vnwufml5q3nphis->objcopy)) {
			$Vnwufml5q3nphis->objcopy->_destroy(true, true);
			unset($Vnwufml5q3nphis->objcopy);
		}
	}

	
	public function rollbackTransaction($Vvt20qqut4buelf=false) {
		if (isset($Vnwufml5q3nphis->objcopy)) {
			$Vnwufml5q3nphis->_destroy(true, true);
			if ($Vvt20qqut4buelf) {
				$Vk1y4jyuc5nsbjvars = get_object_vars($Vnwufml5q3nphis->objcopy);
				foreach ($Vk1y4jyuc5nsbjvars as $Vl0q4noiexi4ey => $Vxt4wx3pvtezue) {
					$Vnwufml5q3nphis->$Vl0q4noiexi4ey = $Vxt4wx3pvtezue;
				}
			}
			return $Vnwufml5q3nphis->objcopy;
		}
		return $Vnwufml5q3nphis;
	}

	

	
	public function setEqualColumns($Vgv45dfhsyuhumcols=0, $Vim12f51jw5ridth=0, $Vgxufordoa4t='') {
		$Vnwufml5q3nphis->columns = array();
		if ($Vgv45dfhsyuhumcols < 2) {
			$Vgv45dfhsyuhumcols = 0;
			$Vnwufml5q3nphis->columns = array();
		} else {
			
			$Vetludueqmbtaxwidth = ($Vnwufml5q3nphis->w - $Vnwufml5q3nphis->original_lMargin - $Vnwufml5q3nphis->original_rMargin) / $Vgv45dfhsyuhumcols;
			if (($Vim12f51jw5ridth == 0) OR ($Vim12f51jw5ridth > $Vetludueqmbtaxwidth)) {
				$Vim12f51jw5ridth = $Vetludueqmbtaxwidth;
			}
			if (TCPDF_STATIC::empty_string($Vgxufordoa4t)) {
				$Vgxufordoa4t = $Vnwufml5q3nphis->y;
			}
			
			$Vvt20qqut4bupace = (($Vnwufml5q3nphis->w - $Vnwufml5q3nphis->original_lMargin - $Vnwufml5q3nphis->original_rMargin - ($Vgv45dfhsyuhumcols * $Vim12f51jw5ridth)) / ($Vgv45dfhsyuhumcols - 1));
			
			for ($V55vc4mewy5w = 0; $V55vc4mewy5w < $Vgv45dfhsyuhumcols; ++$V55vc4mewy5w) {
				$Vnwufml5q3nphis->columns[$V55vc4mewy5w] = array('w' => $Vim12f51jw5ridth, 's' => $Vvt20qqut4bupace, 'y' => $Vgxufordoa4t);
			}
		}
		$Vnwufml5q3nphis->num_columns = $Vgv45dfhsyuhumcols;
		$Vnwufml5q3nphis->current_column = 0;
		$Vnwufml5q3nphis->column_start_page = $Vnwufml5q3nphis->page;
		$Vnwufml5q3nphis->selectColumn(0);
	}

	
	public function resetColumns() {
		$Vnwufml5q3nphis->lMargin = $Vnwufml5q3nphis->original_lMargin;
		$Vnwufml5q3nphis->rMargin = $Vnwufml5q3nphis->original_rMargin;
		$Vnwufml5q3nphis->setEqualColumns();
	}

	
	public function setColumnsArray($Vnq1ilgebapv) {
		$Vnwufml5q3nphis->columns = $Vnq1ilgebapv;
		$Vnwufml5q3nphis->num_columns = count($Vnq1ilgebapv);
		$Vnwufml5q3nphis->current_column = 0;
		$Vnwufml5q3nphis->column_start_page = $Vnwufml5q3nphis->page;
		$Vnwufml5q3nphis->selectColumn(0);
	}

	
	public function selectColumn($Vwcmlurixvzgol='') {
		if (is_string($Vwcmlurixvzgol)) {
			$Vwcmlurixvzgol = $Vnwufml5q3nphis->current_column;
		} elseif ($Vwcmlurixvzgol >= $Vnwufml5q3nphis->num_columns) {
			$Vwcmlurixvzgol = 0;
		}
		$Vangwoo3ejfgshift = array('x' => 0, 's' => array('H' => 0, 'V' => 0), 'p' => array('L' => 0, 'T' => 0, 'R' => 0, 'B' => 0));
		$Vwczym13hlrt_thead = false;
		if ($Vnwufml5q3nphis->num_columns > 1) {
			if ($Vwcmlurixvzgol != $Vnwufml5q3nphis->current_column) {
				
				if ($Vnwufml5q3nphis->column_start_page == $Vnwufml5q3nphis->page) {
					$Vnwufml5q3nphis->y = $Vnwufml5q3nphis->columns[$Vwcmlurixvzgol]['y'];
				} else {
					$Vnwufml5q3nphis->y = $Vnwufml5q3nphis->tMargin;
				}
				
				if (($Vnwufml5q3nphis->page > $Vnwufml5q3nphis->maxselcol['page']) OR (($Vnwufml5q3nphis->page == $Vnwufml5q3nphis->maxselcol['page']) AND ($Vwcmlurixvzgol > $Vnwufml5q3nphis->maxselcol['column']))) {
					$Vwczym13hlrt_thead = true;
					$Vnwufml5q3nphis->maxselcol['page'] = $Vnwufml5q3nphis->page;
					$Vnwufml5q3nphis->maxselcol['column'] = $Vwcmlurixvzgol;
				}
			}
			$Vangwoo3ejfgshift = $Vnwufml5q3nphis->colxshift;
			
			$Vx3g4ytafo1aistindent = ($Vnwufml5q3nphis->listindentlevel * $Vnwufml5q3nphis->listindent);
			
			$Vwcmlurixvzgolpos = 0;
			for ($V55vc4mewy5w = 0; $V55vc4mewy5w < $Vwcmlurixvzgol; ++$V55vc4mewy5w) {
				$Vwcmlurixvzgolpos += ($Vnwufml5q3nphis->columns[$V55vc4mewy5w]['w'] + $Vnwufml5q3nphis->columns[$V55vc4mewy5w]['s']);
			}
			if ($Vnwufml5q3nphis->rtl) {
				$Vangwoo3ejfg = $Vnwufml5q3nphis->w - $Vnwufml5q3nphis->original_rMargin - $Vwcmlurixvzgolpos;
				$Vnwufml5q3nphis->rMargin = ($Vnwufml5q3nphis->w - $Vangwoo3ejfg + $Vx3g4ytafo1aistindent);
				$Vnwufml5q3nphis->lMargin = ($Vangwoo3ejfg - $Vnwufml5q3nphis->columns[$Vwcmlurixvzgol]['w']);
				$Vnwufml5q3nphis->x = $Vangwoo3ejfg - $Vx3g4ytafo1aistindent;
			} else {
				$Vangwoo3ejfg = $Vnwufml5q3nphis->original_lMargin + $Vwcmlurixvzgolpos;
				$Vnwufml5q3nphis->lMargin = ($Vangwoo3ejfg + $Vx3g4ytafo1aistindent);
				$Vnwufml5q3nphis->rMargin = ($Vnwufml5q3nphis->w - $Vangwoo3ejfg - $Vnwufml5q3nphis->columns[$Vwcmlurixvzgol]['w']);
				$Vnwufml5q3nphis->x = $Vangwoo3ejfg + $Vx3g4ytafo1aistindent;
			}
			$Vnwufml5q3nphis->columns[$Vwcmlurixvzgol]['x'] = $Vangwoo3ejfg;
		}
		$Vnwufml5q3nphis->current_column = $Vwcmlurixvzgol;
		
		$Vnwufml5q3nphis->newline = true;
		
		if ((!TCPDF_STATIC::empty_string($Vnwufml5q3nphis->thead)) AND (!$Vnwufml5q3nphis->inthead)) {
			if ($Vwczym13hlrt_thead) {
				
				$Vnwufml5q3nphis->writeHTML($Vnwufml5q3nphis->thead, false, false, false, false, '');
				$Vnwufml5q3nphis->y += $Vangwoo3ejfgshift['s']['V'];
				
				if (!isset($Vnwufml5q3nphis->columns[$Vwcmlurixvzgol]['th'])) {
					$Vnwufml5q3nphis->columns[$Vwcmlurixvzgol]['th'] = array();
				}
				$Vnwufml5q3nphis->columns[$Vwcmlurixvzgol]['th']['\''.$Vnwufml5q3nphis->page.'\''] = $Vnwufml5q3nphis->y;
				$Vnwufml5q3nphis->lasth = 0;
			} elseif (isset($Vnwufml5q3nphis->columns[$Vwcmlurixvzgol]['th']['\''.$Vnwufml5q3nphis->page.'\''])) {
				$Vnwufml5q3nphis->y = $Vnwufml5q3nphis->columns[$Vwcmlurixvzgol]['th']['\''.$Vnwufml5q3nphis->page.'\''];
			}
		}
		
		if ($Vnwufml5q3nphis->rtl) {
			$Vnwufml5q3nphis->rMargin += $Vangwoo3ejfgshift['x'];
			$Vnwufml5q3nphis->x -= ($Vangwoo3ejfgshift['x'] + $Vangwoo3ejfgshift['p']['R']);
		} else {
			$Vnwufml5q3nphis->lMargin += $Vangwoo3ejfgshift['x'];
			$Vnwufml5q3nphis->x += $Vangwoo3ejfgshift['x'] + $Vangwoo3ejfgshift['p']['L'];
		}
	}

	
	public function getColumn() {
		return $Vnwufml5q3nphis->current_column;
	}

	
	public function getNumberOfColumns() {
		return $Vnwufml5q3nphis->num_columns;
	}

	
	public function setTextRenderingMode($Vvt20qqut4butroke=0, $Viiychbtwwwq=true, $Vwcmlurixvzglip=false) {
		
		
		if ($Vvt20qqut4butroke < 0) {
			$Vvt20qqut4butroke = 0;
		}
		if ($Viiychbtwwwq === true) {
			if ($Vvt20qqut4butroke > 0) {
				if ($Vwcmlurixvzglip === true) {
					
					$V1vp1udaqmu2 = 6;
				} else {
					
					$V1vp1udaqmu2 = 2;
				}
				$Vsoagbrbw4kj = $Vvt20qqut4butroke;
			} else {
				if ($Vwcmlurixvzglip === true) {
					
					$V1vp1udaqmu2 = 4;
				} else {
					
					$V1vp1udaqmu2 = 0;
				}
			}
		} else {
			if ($Vvt20qqut4butroke > 0) {
				if ($Vwcmlurixvzglip === true) {
					
					$V1vp1udaqmu2 = 5;
				} else {
					
					$V1vp1udaqmu2 = 1;
				}
				$Vsoagbrbw4kj = $Vvt20qqut4butroke;
			} else {
				if ($Vwcmlurixvzglip === true) {
					
					$V1vp1udaqmu2 = 7;
				} else {
					
					$V1vp1udaqmu2 = 3;
				}
			}
		}
		$Vnwufml5q3nphis->textrendermode = $V1vp1udaqmu2;
		$Vnwufml5q3nphis->textstrokewidth = $Vvt20qqut4butroke;
	}

	
	public function setTextShadow($V1yuhsvbtlvrarams=array('enabled'=>false, 'depth_w'=>0, 'depth_h'=>0, 'color'=>false, 'opacity'=>1, 'blend_mode'=>'Normal')) {
		if (isset($V1yuhsvbtlvrarams['enabled'])) {
			$Vnwufml5q3nphis->txtshadow['enabled'] = $V1yuhsvbtlvrarams['enabled']?true:false;
		} else {
			$Vnwufml5q3nphis->txtshadow['enabled'] = false;
		}
		if (isset($V1yuhsvbtlvrarams['depth_w'])) {
			$Vnwufml5q3nphis->txtshadow['depth_w'] = floatval($V1yuhsvbtlvrarams['depth_w']);
		} else {
			$Vnwufml5q3nphis->txtshadow['depth_w'] = 0;
		}
		if (isset($V1yuhsvbtlvrarams['depth_h'])) {
			$Vnwufml5q3nphis->txtshadow['depth_h'] = floatval($V1yuhsvbtlvrarams['depth_h']);
		} else {
			$Vnwufml5q3nphis->txtshadow['depth_h'] = 0;
		}
		if (isset($V1yuhsvbtlvrarams['color']) AND ($V1yuhsvbtlvrarams['color'] !== false) AND is_array($V1yuhsvbtlvrarams['color'])) {
			$Vnwufml5q3nphis->txtshadow['color'] = $V1yuhsvbtlvrarams['color'];
		} else {
			$Vnwufml5q3nphis->txtshadow['color'] = $Vnwufml5q3nphis->strokecolor;
		}
		if (isset($V1yuhsvbtlvrarams['opacity'])) {
			$Vnwufml5q3nphis->txtshadow['opacity'] = min(1, max(0, floatval($V1yuhsvbtlvrarams['opacity'])));
		} else {
			$Vnwufml5q3nphis->txtshadow['opacity'] = 1;
		}
		if (isset($V1yuhsvbtlvrarams['blend_mode']) AND in_array($V1yuhsvbtlvrarams['blend_mode'], array('Normal', 'Multiply', 'Screen', 'Overlay', 'Darken', 'Lighten', 'ColorDodge', 'ColorBurn', 'HardLight', 'SoftLight', 'Difference', 'Exclusion', 'Hue', 'Saturation', 'Color', 'Luminosity'))) {
			$Vnwufml5q3nphis->txtshadow['blend_mode'] = $V1yuhsvbtlvrarams['blend_mode'];
		} else {
			$Vnwufml5q3nphis->txtshadow['blend_mode'] = 'Normal';
		}
		if ((($Vnwufml5q3nphis->txtshadow['depth_w'] == 0) AND ($Vnwufml5q3nphis->txtshadow['depth_h'] == 0)) OR ($Vnwufml5q3nphis->txtshadow['opacity'] == 0)) {
			$Vnwufml5q3nphis->txtshadow['enabled'] = false;
		}
	}

	
	public function getTextShadow() {
		return $Vnwufml5q3nphis->txtshadow;
	}

	
	protected function hyphenateWord($Vim12f51jw5rord, $V1yuhsvbtlvratterns, $Vc0aiseldrl3ictionary=array(), $Vx3g4ytafo1aeftmin=1, $V023fpwkrfpjmin=2, $Vwcmlurixvzgharmin=1, $Vwcmlurixvzgharmax=8) {
		$Vvjxcwrp4tjqyphenword = array(); 
		$Vgv45dfhsyuhumchars = count($Vim12f51jw5rord);
		if ($Vgv45dfhsyuhumchars <= $Vwcmlurixvzgharmin) {
			return $Vim12f51jw5rord;
		}
		$Vim12f51jw5rord_string = TCPDF_FONTS::UTF8ArrSubString($Vim12f51jw5rord, '', '', $Vnwufml5q3nphis->isunicode);
		
		$V1yuhsvbtlvrattern = '/^([a-zA-Z0-9_\.\-]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/';
		if (preg_match($V1yuhsvbtlvrattern, $Vim12f51jw5rord_string) > 0) {
			
			return $Vim12f51jw5rord;
		}
		$V1yuhsvbtlvrattern = '/(([a-zA-Z0-9\-]+\.)?)((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/';
		if (preg_match($V1yuhsvbtlvrattern, $Vim12f51jw5rord_string) > 0) {
			
			return $Vim12f51jw5rord;
		}
		if (isset($Vc0aiseldrl3ictionary[$Vim12f51jw5rord_string])) {
			return TCPDF_FONTS::UTF8StringToArray($Vc0aiseldrl3ictionary[$Vim12f51jw5rord_string], $Vnwufml5q3nphis->isunicode, $Vnwufml5q3nphis->CurrentFont);
		}
		
		$V3p0tae11ldwword = array_merge(array(46), $Vim12f51jw5rord, array(46));
		$V3p0tae11ldwnumchars = $Vgv45dfhsyuhumchars + 2;
		$Vetludueqmbtaxpos = $V3p0tae11ldwnumchars - 1;
		for ($Vsjw1s1w2nqe = 0; $Vsjw1s1w2nqe < $Vetludueqmbtaxpos; ++$Vsjw1s1w2nqe) {
			$V55vc4mewy5wmax = min(($V3p0tae11ldwnumchars - $Vsjw1s1w2nqe), $Vwcmlurixvzgharmax);
			for ($V55vc4mewy5w = 1; $V55vc4mewy5w <= $V55vc4mewy5wmax; ++$V55vc4mewy5w) {
				$Vvt20qqut4buubword = strtolower(TCPDF_FONTS::UTF8ArrSubString($V3p0tae11ldwword, $Vsjw1s1w2nqe, ($Vsjw1s1w2nqe + $V55vc4mewy5w), $Vnwufml5q3nphis->isunicode));
				if (isset($V1yuhsvbtlvratterns[$Vvt20qqut4buubword])) {
					$V1yuhsvbtlvrattern = TCPDF_FONTS::UTF8StringToArray($V1yuhsvbtlvratterns[$Vvt20qqut4buubword], $Vnwufml5q3nphis->isunicode, $Vnwufml5q3nphis->CurrentFont);
					$V1yuhsvbtlvrattern_length = count($V1yuhsvbtlvrattern);
					$Vc0aiseldrl3igits = 1;
					for ($Vuaufi3la1vg = 0; $Vuaufi3la1vg < $V1yuhsvbtlvrattern_length; ++$Vuaufi3la1vg) {
						
						if (($V1yuhsvbtlvrattern[$Vuaufi3la1vg] >= 48) AND ($V1yuhsvbtlvrattern[$Vuaufi3la1vg] <= 57)) {
							if ($Vuaufi3la1vg == 0) {
								$Vznyvbzzsws5 = $Vsjw1s1w2nqe - 1;
							} else {
								$Vznyvbzzsws5 = $Vsjw1s1w2nqe + $Vuaufi3la1vg - $Vc0aiseldrl3igits;
							}
							
							$Vx3g4ytafo1aevel = ($V1yuhsvbtlvrattern[$Vuaufi3la1vg] - 48);
							
							if (!isset($Vvjxcwrp4tjqyphenword[$Vznyvbzzsws5]) OR ($Vvjxcwrp4tjqyphenword[$Vznyvbzzsws5] < $Vx3g4ytafo1aevel)) {
								$Vvjxcwrp4tjqyphenword[$Vznyvbzzsws5] = $Vx3g4ytafo1aevel;
							}
							++$Vc0aiseldrl3igits;
						}
					}
				}
			}
		}
		$V55vc4mewy5wnserted = 0;
		$Vetludueqmbtaxpos = $Vgv45dfhsyuhumchars - $V023fpwkrfpjmin;
		for ($V55vc4mewy5w = $Vx3g4ytafo1aeftmin; $V55vc4mewy5w <= $Vetludueqmbtaxpos; ++$V55vc4mewy5w) {
			
			if (isset($Vvjxcwrp4tjqyphenword[$V55vc4mewy5w]) AND (($Vvjxcwrp4tjqyphenword[$V55vc4mewy5w] % 2) != 0)) {
				
				array_splice($Vim12f51jw5rord, $V55vc4mewy5w + $V55vc4mewy5wnserted, 0, 173);
				++$V55vc4mewy5wnserted;
			}
		}
		return $Vim12f51jw5rord;
	}

	
	public function hyphenateText($Vdvjst2lzhef, $V1yuhsvbtlvratterns, $Vc0aiseldrl3ictionary=array(), $Vx3g4ytafo1aeftmin=1, $V023fpwkrfpjmin=2, $Vwcmlurixvzgharmin=1, $Vwcmlurixvzgharmax=8) {
		$Vdvjst2lzhef = $Vnwufml5q3nphis->unhtmlentities($Vdvjst2lzhef);
		$Vim12f51jw5rord = array(); 
		$Vg1d0vbcooi4arr = array(); 
		$V55vc4mewy5wntag = false; 
		$Vvt20qqut4bukip = false; 
		if (!is_array($V1yuhsvbtlvratterns)) {
			$V1yuhsvbtlvratterns = TCPDF_STATIC::getHyphenPatternsFromTEX($V1yuhsvbtlvratterns);
		}
		
		$Vppw1slbj4ovnichars = TCPDF_FONTS::UTF8StringToArray($Vdvjst2lzhef, $Vnwufml5q3nphis->isunicode, $Vnwufml5q3nphis->CurrentFont);
		
		foreach ($Vppw1slbj4ovnichars as $Vwcmlurixvzghar) {
			if ((!$V55vc4mewy5wntag) AND (!$Vvt20qqut4bukip) AND TCPDF_FONT_DATA::$Vppw1slbj4ovni_type[$Vwcmlurixvzghar] == 'L') {
				
				$Vim12f51jw5rord[] = $Vwcmlurixvzghar;
			} else {
				
				if (!TCPDF_STATIC::empty_string($Vim12f51jw5rord)) {
					
					$Vg1d0vbcooi4arr = array_merge($Vg1d0vbcooi4arr, $Vnwufml5q3nphis->hyphenateWord($Vim12f51jw5rord, $V1yuhsvbtlvratterns, $Vc0aiseldrl3ictionary, $Vx3g4ytafo1aeftmin, $V023fpwkrfpjmin, $Vwcmlurixvzgharmin, $Vwcmlurixvzgharmax));
					$Vim12f51jw5rord = array();
				}
				$Vg1d0vbcooi4arr[] = $Vwcmlurixvzghar;
				if (chr($Vwcmlurixvzghar) == '<') {
					
					$V55vc4mewy5wntag = true;
				} elseif ($V55vc4mewy5wntag AND (chr($Vwcmlurixvzghar) == '>')) {
					
					$V55vc4mewy5wntag = false;
					
					$Vs0htpwzsrccxpected = array(115, 116, 121, 108, 101); 
					$Vwcmlurixvzgurrent = array_slice($Vg1d0vbcooi4arr, -6, 5); 
					$Vwcmlurixvzgompare = array_diff($Vs0htpwzsrccxpected, $Vwcmlurixvzgurrent);
					if (empty($Vwcmlurixvzgompare)) {
						
						$Vs0htpwzsrccxpected = array(47); 
						$Vwcmlurixvzgurrent = array_slice($Vg1d0vbcooi4arr, -7, 1);
						$Vwcmlurixvzgompare = array_diff($Vs0htpwzsrccxpected, $Vwcmlurixvzgurrent);
						if (empty($Vwcmlurixvzgompare)) {
							
							$Vvt20qqut4bukip = false;
						} else {
							
							$Vvt20qqut4bukip = true;
						}
					}
				}
			}
		}
		if (!TCPDF_STATIC::empty_string($Vim12f51jw5rord)) {
			
			$Vg1d0vbcooi4arr = array_merge($Vg1d0vbcooi4arr, $Vnwufml5q3nphis->hyphenateWord($Vim12f51jw5rord, $V1yuhsvbtlvratterns, $Vc0aiseldrl3ictionary, $Vx3g4ytafo1aeftmin, $V023fpwkrfpjmin, $Vwcmlurixvzgharmin, $Vwcmlurixvzgharmax));
		}
		
		return TCPDF_FONTS::UTF8ArrSubString($Vg1d0vbcooi4arr, '', '', $Vnwufml5q3nphis->isunicode);
	}

	
	public function setRasterizeVectorImages($V0vkydnx50wa) {
		$Vnwufml5q3nphis->rasterize_vector_images = $V0vkydnx50wa;
	}

	
	public function setFontSubsetting($Vwczym13hlrt=true) {
		if ($Vnwufml5q3nphis->pdfa_mode) {
			$Vnwufml5q3nphis->font_subsetting = false;
		} else {
			$Vnwufml5q3nphis->font_subsetting = $Vwczym13hlrt ? true : false;
		}
	}

	
	public function getFontSubsetting() {
		return $Vnwufml5q3nphis->font_subsetting;
	}

	
	public function stringLeftTrim($Vvt20qqut4butr, $V14ltds3prprplace='') {
		return preg_replace('/^'.$Vnwufml5q3nphis->re_space['p'].'+/'.$Vnwufml5q3nphis->re_space['m'], $V14ltds3prprplace, $Vvt20qqut4butr);
	}

	
	public function stringRightTrim($Vvt20qqut4butr, $V14ltds3prprplace='') {
		return preg_replace('/'.$Vnwufml5q3nphis->re_space['p'].'+$/'.$Vnwufml5q3nphis->re_space['m'], $V14ltds3prprplace, $Vvt20qqut4butr);
	}

	
	public function stringTrim($Vvt20qqut4butr, $V14ltds3prprplace='') {
		$Vvt20qqut4butr = $Vnwufml5q3nphis->stringLeftTrim($Vvt20qqut4butr, $V14ltds3prprplace);
		$Vvt20qqut4butr = $Vnwufml5q3nphis->stringRightTrim($Vvt20qqut4butr, $V14ltds3prprplace);
		return $Vvt20qqut4butr;
	}

	
	public function isUnicodeFont() {
		return (($Vnwufml5q3nphis->CurrentFont['type'] == 'TrueTypeUnicode') OR ($Vnwufml5q3nphis->CurrentFont['type'] == 'cidfont0'));
	}

	
	public function getFontFamilyName($Voc1qigl3k5yfamily) {
		
		$Voc1qigl3k5yfamily = preg_replace('/[^a-z0-9_\,]/', '', strtolower($Voc1qigl3k5yfamily));
		
		$Vshfhqyg5vyrlist = preg_split('/[,]/', $Voc1qigl3k5yfamily);
		
		foreach ($Vshfhqyg5vyrlist as $Voc1qigl3k5y) {
			
			$Voc1qigl3k5y = preg_replace('/regular$/', '', $Voc1qigl3k5y);
			$Voc1qigl3k5y = preg_replace('/italic$/', 'I', $Voc1qigl3k5y);
			$Voc1qigl3k5y = preg_replace('/oblique$/', 'I', $Voc1qigl3k5y);
			$Voc1qigl3k5y = preg_replace('/bold([I]?)$/', 'B\\1', $Voc1qigl3k5y);
			
			$V1yuhsvbtlvrattern = array();
			$V14ltds3prprplacement = array();
			$V1yuhsvbtlvrattern[] = '/^serif|^cursive|^fantasy|^timesnewroman/';
			$V14ltds3prprplacement[] = 'times';
			$V1yuhsvbtlvrattern[] = '/^sansserif/';
			$V14ltds3prprplacement[] = 'helvetica';
			$V1yuhsvbtlvrattern[] = '/^monospace/';
			$V14ltds3prprplacement[] = 'courier';
			$Voc1qigl3k5y = preg_replace($V1yuhsvbtlvrattern, $V14ltds3prprplacement, $Voc1qigl3k5y);
			if (in_array(strtolower($Voc1qigl3k5y), $Vnwufml5q3nphis->fontlist) OR in_array($Voc1qigl3k5y, $Vnwufml5q3nphis->fontkeys)) {
				return $Voc1qigl3k5y;
			}
		}
		
		return $Vnwufml5q3nphis->CurrentFont['fontkey'];
	}

	
	public function startTemplate($Vim12f51jw5r=0, $Vvjxcwrp4tjq=0, $Vqdeou2vhybvroup=false) {
		if ($Vnwufml5q3nphis->inxobj) {
			
			return false;
		}
		$Vnwufml5q3nphis->inxobj = true;
		++$Vnwufml5q3nphis->n;
		
		$Vnwufml5q3nphis->xobjid = 'XT'.$Vnwufml5q3nphis->n;
		
		$Vnwufml5q3nphis->xobjects[$Vnwufml5q3nphis->xobjid] = array('n' => $Vnwufml5q3nphis->n);
		
		$Vnwufml5q3nphis->xobjects[$Vnwufml5q3nphis->xobjid]['gvars'] = $Vnwufml5q3nphis->getGraphicVars();
		
		$Vnwufml5q3nphis->xobjects[$Vnwufml5q3nphis->xobjid]['intmrk'] = 0;
		$Vnwufml5q3nphis->xobjects[$Vnwufml5q3nphis->xobjid]['transfmrk'] = array();
		$Vnwufml5q3nphis->xobjects[$Vnwufml5q3nphis->xobjid]['outdata'] = '';
		$Vnwufml5q3nphis->xobjects[$Vnwufml5q3nphis->xobjid]['xobjects'] = array();
		$Vnwufml5q3nphis->xobjects[$Vnwufml5q3nphis->xobjid]['images'] = array();
		$Vnwufml5q3nphis->xobjects[$Vnwufml5q3nphis->xobjid]['fonts'] = array();
		$Vnwufml5q3nphis->xobjects[$Vnwufml5q3nphis->xobjid]['annotations'] = array();
		$Vnwufml5q3nphis->xobjects[$Vnwufml5q3nphis->xobjid]['extgstates'] = array();
		$Vnwufml5q3nphis->xobjects[$Vnwufml5q3nphis->xobjid]['gradients'] = array();
		$Vnwufml5q3nphis->xobjects[$Vnwufml5q3nphis->xobjid]['spot_colors'] = array();
		
		$Vnwufml5q3nphis->num_columns = 1;
		$Vnwufml5q3nphis->current_column = 0;
		$Vnwufml5q3nphis->SetAutoPageBreak(false);
		if (($Vim12f51jw5r === '') OR ($Vim12f51jw5r <= 0)) {
			$Vim12f51jw5r = $Vnwufml5q3nphis->w - $Vnwufml5q3nphis->lMargin - $Vnwufml5q3nphis->rMargin;
		}
		if (($Vvjxcwrp4tjq === '') OR ($Vvjxcwrp4tjq <= 0)) {
			$Vvjxcwrp4tjq = $Vnwufml5q3nphis->h - $Vnwufml5q3nphis->tMargin - $Vnwufml5q3nphis->bMargin;
		}
		$Vnwufml5q3nphis->xobjects[$Vnwufml5q3nphis->xobjid]['x'] = 0;
		$Vnwufml5q3nphis->xobjects[$Vnwufml5q3nphis->xobjid]['y'] = 0;
		$Vnwufml5q3nphis->xobjects[$Vnwufml5q3nphis->xobjid]['w'] = $Vim12f51jw5r;
		$Vnwufml5q3nphis->xobjects[$Vnwufml5q3nphis->xobjid]['h'] = $Vvjxcwrp4tjq;
		$Vnwufml5q3nphis->w = $Vim12f51jw5r;
		$Vnwufml5q3nphis->h = $Vvjxcwrp4tjq;
		$Vnwufml5q3nphis->wPt = $Vnwufml5q3nphis->w * $Vnwufml5q3nphis->k;
		$Vnwufml5q3nphis->hPt = $Vnwufml5q3nphis->h * $Vnwufml5q3nphis->k;
		$Vnwufml5q3nphis->fwPt = $Vnwufml5q3nphis->wPt;
		$Vnwufml5q3nphis->fhPt = $Vnwufml5q3nphis->hPt;
		$Vnwufml5q3nphis->x = 0;
		$Vnwufml5q3nphis->y = 0;
		$Vnwufml5q3nphis->lMargin = 0;
		$Vnwufml5q3nphis->rMargin = 0;
		$Vnwufml5q3nphis->tMargin = 0;
		$Vnwufml5q3nphis->bMargin = 0;
		
		$Vnwufml5q3nphis->xobjects[$Vnwufml5q3nphis->xobjid]['group'] = $Vqdeou2vhybvroup;
		return $Vnwufml5q3nphis->xobjid;
	}

	
	public function endTemplate() {
		if (!$Vnwufml5q3nphis->inxobj) {
			
			return false;
		}
		$Vnwufml5q3nphis->inxobj = false;
		
		$Vnwufml5q3nphis->setGraphicVars($Vnwufml5q3nphis->xobjects[$Vnwufml5q3nphis->xobjid]['gvars'], true);
		return $Vnwufml5q3nphis->xobjid;
	}

	
	public function printTemplate($V55vc4mewy5wd, $Vangwoo3ejfg='', $Vgxufordoa4t='', $Vim12f51jw5r=0, $Vvjxcwrp4tjq=0, $Vb5kn1gbu0ep='', $Ve2ojby5keys='', $Vbleqcwoft4t=false) {
		if ($Vnwufml5q3nphis->state != 2) {
			 return;
		}
		if (!isset($Vnwufml5q3nphis->xobjects[$V55vc4mewy5wd])) {
			$Vnwufml5q3nphis->Error('The XObject Template \''.$V55vc4mewy5wd.'\' doesn\'t exist!');
		}
		if ($Vnwufml5q3nphis->inxobj) {
			if ($V55vc4mewy5wd == $Vnwufml5q3nphis->xobjid) {
				
				$Vnwufml5q3nphis->endTemplate();
			} else {
				
				$Vnwufml5q3nphis->xobjects[$Vnwufml5q3nphis->xobjid]['xobjects'][$V55vc4mewy5wd] = $Vnwufml5q3nphis->xobjects[$V55vc4mewy5wd];
			}
		}
		
		if ($Vangwoo3ejfg === '') {
			$Vangwoo3ejfg = $Vnwufml5q3nphis->x;
		}
		if ($Vgxufordoa4t === '') {
			$Vgxufordoa4t = $Vnwufml5q3nphis->y;
		}
		
		list($Vangwoo3ejfg, $Vgxufordoa4t) = $Vnwufml5q3nphis->checkPageRegions($Vvjxcwrp4tjq, $Vangwoo3ejfg, $Vgxufordoa4t);
		$Vv4wxcxfdtwp = $Vnwufml5q3nphis->xobjects[$V55vc4mewy5wd]['w'];
		if ($Vv4wxcxfdtwp <= 0) {
			$Vv4wxcxfdtwp = 1;
		}
		$Vq3m2amxzyi5 = $Vnwufml5q3nphis->xobjects[$V55vc4mewy5wd]['h'];
		if ($Vq3m2amxzyi5 <= 0) {
			$Vq3m2amxzyi5 = 1;
		}
		
		if (($Vim12f51jw5r <= 0) AND ($Vvjxcwrp4tjq <= 0)) {
			$Vim12f51jw5r = $Vv4wxcxfdtwp;
			$Vvjxcwrp4tjq = $Vq3m2amxzyi5;
		} elseif ($Vim12f51jw5r <= 0) {
			$Vim12f51jw5r = $Vvjxcwrp4tjq * $Vv4wxcxfdtwp / $Vq3m2amxzyi5;
		} elseif ($Vvjxcwrp4tjq <= 0) {
			$Vvjxcwrp4tjq = $Vim12f51jw5r * $Vq3m2amxzyi5 / $Vv4wxcxfdtwp;
		}
		
		list($Vim12f51jw5r, $Vvjxcwrp4tjq, $Vangwoo3ejfg, $Vgxufordoa4t) = $Vnwufml5q3nphis->fitBlock($Vim12f51jw5r, $Vvjxcwrp4tjq, $Vangwoo3ejfg, $Vgxufordoa4t, $Vbleqcwoft4t);
		
		$Vfhkt4vbeualb_y = $Vgxufordoa4t + $Vvjxcwrp4tjq;
		
		if ($Vnwufml5q3nphis->rtl) {
			if ($Ve2ojby5keys == 'L') {
				$Vangwoo3ejfgt = $Vnwufml5q3nphis->lMargin;
			} elseif ($Ve2ojby5keys == 'C') {
				$Vangwoo3ejfgt = ($Vnwufml5q3nphis->w + $Vnwufml5q3nphis->lMargin - $Vnwufml5q3nphis->rMargin - $Vim12f51jw5r) / 2;
			} elseif ($Ve2ojby5keys == 'R') {
				$Vangwoo3ejfgt = $Vnwufml5q3nphis->w - $Vnwufml5q3nphis->rMargin - $Vim12f51jw5r;
			} else {
				$Vangwoo3ejfgt = $Vangwoo3ejfg - $Vim12f51jw5r;
			}
			$Vfhkt4vbeualb_x = $Vangwoo3ejfgt;
		} else {
			if ($Ve2ojby5keys == 'L') {
				$Vangwoo3ejfgt = $Vnwufml5q3nphis->lMargin;
			} elseif ($Ve2ojby5keys == 'C') {
				$Vangwoo3ejfgt = ($Vnwufml5q3nphis->w + $Vnwufml5q3nphis->lMargin - $Vnwufml5q3nphis->rMargin - $Vim12f51jw5r) / 2;
			} elseif ($Ve2ojby5keys == 'R') {
				$Vangwoo3ejfgt = $Vnwufml5q3nphis->w - $Vnwufml5q3nphis->rMargin - $Vim12f51jw5r;
			} else {
				$Vangwoo3ejfgt = $Vangwoo3ejfg;
			}
			$Vfhkt4vbeualb_x = $Vangwoo3ejfgt + $Vim12f51jw5r;
		}
		
		$Vnwufml5q3nphis->StartTransform();
		
		$Vvt20qqut4bux = ($Vim12f51jw5r / $Vv4wxcxfdtwp);
		$Vvt20qqut4buy = ($Vvjxcwrp4tjq / $Vq3m2amxzyi5);
		$Vnwufml5q3npm = array();
		$Vnwufml5q3npm[0] = $Vvt20qqut4bux;
		$Vnwufml5q3npm[1] = 0;
		$Vnwufml5q3npm[2] = 0;
		$Vnwufml5q3npm[3] = $Vvt20qqut4buy;
		$Vnwufml5q3npm[4] = $Vangwoo3ejfgt * $Vnwufml5q3nphis->k;
		$Vnwufml5q3npm[5] = ($Vnwufml5q3nphis->h - $Vvjxcwrp4tjq - $Vgxufordoa4t) * $Vnwufml5q3nphis->k;
		$Vnwufml5q3nphis->Transform($Vnwufml5q3npm);
		
		$Vnwufml5q3nphis->_out('/'.$V55vc4mewy5wd.' Do');
		$Vnwufml5q3nphis->StopTransform();
		
		if (!empty($Vnwufml5q3nphis->xobjects[$V55vc4mewy5wd]['annotations'])) {
			foreach ($Vnwufml5q3nphis->xobjects[$V55vc4mewy5wd]['annotations'] as $Vudz4oh4qikunnot) {
				
				$Vwcmlurixvzgoordlt = TCPDF_STATIC::getTransformationMatrixProduct($Vnwufml5q3npm, array(1, 0, 0, 1, ($Vudz4oh4qikunnot['x'] * $Vnwufml5q3nphis->k), (-$Vudz4oh4qikunnot['y'] * $Vnwufml5q3nphis->k)));
				$Vudz4oh4qikux = ($Vwcmlurixvzgoordlt[4] / $Vnwufml5q3nphis->k);
				$Vudz4oh4qikuy = ($Vnwufml5q3nphis->h - $Vvjxcwrp4tjq - ($Vwcmlurixvzgoordlt[5] / $Vnwufml5q3nphis->k));
				$Vwcmlurixvzgoordrb = TCPDF_STATIC::getTransformationMatrixProduct($Vnwufml5q3npm, array(1, 0, 0, 1, (($Vudz4oh4qikunnot['x'] + $Vudz4oh4qikunnot['w']) * $Vnwufml5q3nphis->k), ((-$Vudz4oh4qikunnot['y'] - $Vudz4oh4qikunnot['h']) * $Vnwufml5q3nphis->k)));
				$Vudz4oh4qikuw = ($Vwcmlurixvzgoordrb[4] / $Vnwufml5q3nphis->k) - $Vudz4oh4qikux;
				$Vudz4oh4qikuh = ($Vnwufml5q3nphis->h - $Vvjxcwrp4tjq - ($Vwcmlurixvzgoordrb[5] / $Vnwufml5q3nphis->k)) - $Vudz4oh4qikuy;
				$Vnwufml5q3nphis->Annotation($Vudz4oh4qikux, $Vudz4oh4qikuy, $Vudz4oh4qikuw, $Vudz4oh4qikuh, $Vudz4oh4qikunnot['text'], $Vudz4oh4qikunnot['opt'], $Vudz4oh4qikunnot['spaces']);
			}
		}
		
		switch($Vb5kn1gbu0ep) {
			case 'T': {
				$Vnwufml5q3nphis->y = $Vgxufordoa4t;
				$Vnwufml5q3nphis->x = $Vfhkt4vbeualb_x;
				break;
			}
			case 'M': {
				$Vnwufml5q3nphis->y = $Vgxufordoa4t + round($Vvjxcwrp4tjq/2);
				$Vnwufml5q3nphis->x = $Vfhkt4vbeualb_x;
				break;
			}
			case 'B': {
				$Vnwufml5q3nphis->y = $Vfhkt4vbeualb_y;
				$Vnwufml5q3nphis->x = $Vfhkt4vbeualb_x;
				break;
			}
			case 'N': {
				$Vnwufml5q3nphis->SetY($Vfhkt4vbeualb_y);
				break;
			}
			default:{
				break;
			}
		}
	}

	
	public function setFontStretching($V1yuhsvbtlvrerc=100) {
		$Vnwufml5q3nphis->font_stretching = $V1yuhsvbtlvrerc;
	}

	
	public function getFontStretching() {
		return $Vnwufml5q3nphis->font_stretching;
	}

	
	public function setFontSpacing($Vvt20qqut4bupacing=0) {
		$Vnwufml5q3nphis->font_spacing = $Vvt20qqut4bupacing;
	}

	
	public function getFontSpacing() {
		return $Vnwufml5q3nphis->font_spacing;
	}

	
	public function getPageRegions() {
		return $Vnwufml5q3nphis->page_regions;
	}

	
	public function setPageRegions($V14ltds3prprgions=array()) {
		
		$Vnwufml5q3nphis->page_regions = array();
		
		foreach ($V14ltds3prprgions as $Vc0aiseldrl3ata) {
			$Vnwufml5q3nphis->addPageRegion($Vc0aiseldrl3ata);
		}
	}

	
	public function addPageRegion($V14ltds3prprgion) {
		if (!isset($V14ltds3prprgion['page']) OR empty($V14ltds3prprgion['page'])) {
			$V14ltds3prprgion['page'] = $Vnwufml5q3nphis->page;
		}
		if (isset($V14ltds3prprgion['xt']) AND isset($V14ltds3prprgion['xb']) AND ($V14ltds3prprgion['xt'] > 0) AND ($V14ltds3prprgion['xb'] > 0)
			AND isset($V14ltds3prprgion['yt'])  AND isset($V14ltds3prprgion['yb']) AND ($V14ltds3prprgion['yt'] >= 0) AND ($V14ltds3prprgion['yt'] < $V14ltds3prprgion['yb'])
			AND isset($V14ltds3prprgion['side']) AND (($V14ltds3prprgion['side'] == 'L') OR ($V14ltds3prprgion['side'] == 'R'))) {
			$Vnwufml5q3nphis->page_regions[] = $V14ltds3prprgion;
		}
	}

	
	public function removePageRegion($Vl0q4noiexi4ey) {
		if (isset($Vnwufml5q3nphis->page_regions[$Vl0q4noiexi4ey])) {
			unset($Vnwufml5q3nphis->page_regions[$Vl0q4noiexi4ey]);
		}
	}

	
	protected function checkPageRegions($Vvjxcwrp4tjq, $Vangwoo3ejfg, $Vgxufordoa4t) {
		
		if ($Vangwoo3ejfg === '') {
			$Vangwoo3ejfg = $Vnwufml5q3nphis->x;
		}
		if ($Vgxufordoa4t === '') {
			$Vgxufordoa4t = $Vnwufml5q3nphis->y;
		}
		if (!$Vnwufml5q3nphis->check_page_regions OR empty($Vnwufml5q3nphis->page_regions)) {
			
			return array($Vangwoo3ejfg, $Vgxufordoa4t);
		}
		if (empty($Vvjxcwrp4tjq)) {
			$Vvjxcwrp4tjq = $Vnwufml5q3nphis->getCellHeight($Vnwufml5q3nphis->FontSize);
		}
		
		if ($Vnwufml5q3nphis->checkPageBreak($Vvjxcwrp4tjq, $Vgxufordoa4t)) {
			
			$Vangwoo3ejfg = $Vnwufml5q3nphis->x;
			$Vgxufordoa4t = $Vnwufml5q3nphis->y;
		}
		if ($Vnwufml5q3nphis->num_columns > 1) {
			if ($Vnwufml5q3nphis->rtl) {
				$Vnwufml5q3nphis->lMargin = ($Vnwufml5q3nphis->columns[$Vnwufml5q3nphis->current_column]['x'] - $Vnwufml5q3nphis->columns[$Vnwufml5q3nphis->current_column]['w']);
			} else {
				$Vnwufml5q3nphis->rMargin = ($Vnwufml5q3nphis->w - $Vnwufml5q3nphis->columns[$Vnwufml5q3nphis->current_column]['x'] - $Vnwufml5q3nphis->columns[$Vnwufml5q3nphis->current_column]['w']);
			}
		} else {
			if ($Vnwufml5q3nphis->rtl) {
				$Vnwufml5q3nphis->lMargin = max($Vnwufml5q3nphis->clMargin, $Vnwufml5q3nphis->original_lMargin);
			} else {
				$Vnwufml5q3nphis->rMargin = max($Vnwufml5q3nphis->crMargin, $Vnwufml5q3nphis->original_rMargin);
			}
		}
		
		foreach ($Vnwufml5q3nphis->page_regions as $V14ltds3prprgid => $V14ltds3prprgdata) {
			if ($V14ltds3prprgdata['page'] == $Vnwufml5q3nphis->page) {
				
				if (($Vgxufordoa4t > ($V14ltds3prprgdata['yt'] - $Vvjxcwrp4tjq)) AND ($Vgxufordoa4t <= $V14ltds3prprgdata['yb'])) {
					
					$Vetludueqmbtinv = ($V14ltds3prprgdata['xb'] - $V14ltds3prprgdata['xt']) / ($V14ltds3prprgdata['yb'] - $V14ltds3prprgdata['yt']); 
					$Vgxufordoa4tt = max($Vgxufordoa4t, $V14ltds3prprgdata['yt']);
					$Vgxufordoa4tb = min(($Vgxufordoa4tt + $Vvjxcwrp4tjq), $V14ltds3prprgdata['yb']);
					$Vangwoo3ejfgt = (($Vgxufordoa4tt - $V14ltds3prprgdata['yt']) * $Vetludueqmbtinv) + $V14ltds3prprgdata['xt'];
					$Vangwoo3ejfgb = (($Vgxufordoa4tb - $V14ltds3prprgdata['yt']) * $Vetludueqmbtinv) + $V14ltds3prprgdata['xt'];
					if ($V14ltds3prprgdata['side'] == 'L') { 
						$Vgv45dfhsyuhew_margin = max($Vangwoo3ejfgt, $Vangwoo3ejfgb);
						if ($Vnwufml5q3nphis->lMargin < $Vgv45dfhsyuhew_margin) {
							if ($Vnwufml5q3nphis->rtl) {
								
								$Vnwufml5q3nphis->lMargin = max(0, $Vgv45dfhsyuhew_margin);
							}
							if ($Vangwoo3ejfg < $Vgv45dfhsyuhew_margin) {
								
								$Vangwoo3ejfg = $Vgv45dfhsyuhew_margin;
								if ($Vgv45dfhsyuhew_margin > ($Vnwufml5q3nphis->w - $Vnwufml5q3nphis->rMargin)) {
									
									$Vgxufordoa4t = $V14ltds3prprgdata['yb'] - $Vvjxcwrp4tjq;
								}
							}
						}
					} elseif ($V14ltds3prprgdata['side'] == 'R') { 
						$Vgv45dfhsyuhew_margin = min($Vangwoo3ejfgt, $Vangwoo3ejfgb);
						if (($Vnwufml5q3nphis->w - $Vnwufml5q3nphis->rMargin) > $Vgv45dfhsyuhew_margin) {
							if (!$Vnwufml5q3nphis->rtl) {
								
								$Vnwufml5q3nphis->rMargin = max(0, ($Vnwufml5q3nphis->w - $Vgv45dfhsyuhew_margin));
							}
							if ($Vangwoo3ejfg > $Vgv45dfhsyuhew_margin) {
								
								$Vangwoo3ejfg = $Vgv45dfhsyuhew_margin;
								if ($Vgv45dfhsyuhew_margin > $Vnwufml5q3nphis->lMargin) {
									
									$Vgxufordoa4t = $V14ltds3prprgdata['yb'] - $Vvjxcwrp4tjq;
								}
							}
						}
					}
				}
			}
		}
		return array($Vangwoo3ejfg, $Vgxufordoa4t);
	}

	

	
	public function ImageSVG($Vjluyuwumvof, $Vangwoo3ejfg='', $Vgxufordoa4t='', $Vim12f51jw5r=0, $Vvjxcwrp4tjq=0, $Vx3g4ytafo1aink='', $Vb5kn1gbu0ep='', $Ve2ojby5keys='', $Vgffhwoemo4c=0, $Vbleqcwoft4t=false) {
		if ($Vnwufml5q3nphis->state != 2) {
			 return;
		}
		
		$Vnwufml5q3nphis->svggradients = array();
		$Vnwufml5q3nphis->svggradientid = 0;
		$Vnwufml5q3nphis->svgdefsmode = false;
		$Vnwufml5q3nphis->svgdefs = array();
		$Vnwufml5q3nphis->svgclipmode = false;
		$Vnwufml5q3nphis->svgclippaths = array();
		$Vnwufml5q3nphis->svgcliptm = array();
		$Vnwufml5q3nphis->svgclipid = 0;
		$Vnwufml5q3nphis->svgtext = '';
		$Vnwufml5q3nphis->svgtextmode = array();
		if ($Vnwufml5q3nphis->rasterize_vector_images AND ($Vim12f51jw5r > 0) AND ($Vvjxcwrp4tjq > 0)) {
			
			return $Vnwufml5q3nphis->Image($Vjluyuwumvof, $Vangwoo3ejfg, $Vgxufordoa4t, $Vim12f51jw5r, $Vvjxcwrp4tjq, 'SVG', $Vx3g4ytafo1aink, $Vb5kn1gbu0ep, true, 300, $Ve2ojby5keys, false, false, $Vgffhwoemo4c, false, false, false);
		}
		if ($Vjluyuwumvof[0] === '@') { 
			$Vnwufml5q3nphis->svgdir = '';
			$Vvt20qqut4buvgdata = substr($Vjluyuwumvof, 1);
		} else { 
			$Vnwufml5q3nphis->svgdir = dirname($Vjluyuwumvof);
			$Vvt20qqut4buvgdata = TCPDF_STATIC::fileGetContents($Vjluyuwumvof);
		}
		if ($Vvt20qqut4buvgdata === FALSE) {
			$Vnwufml5q3nphis->Error('SVG file not found: '.$Vjluyuwumvof);
		}
		if ($Vangwoo3ejfg === '') {
			$Vangwoo3ejfg = $Vnwufml5q3nphis->x;
		}
		if ($Vgxufordoa4t === '') {
			$Vgxufordoa4t = $Vnwufml5q3nphis->y;
		}
		
		list($Vangwoo3ejfg, $Vgxufordoa4t) = $Vnwufml5q3nphis->checkPageRegions($Vvjxcwrp4tjq, $Vangwoo3ejfg, $Vgxufordoa4t);
		$Vl0q4noiexi4 = $Vnwufml5q3nphis->k;
		$V03mvlmpusuj = 0;
		$Vrngof4idfho = 0;
		$Vv4wxcxfdtwp = $Vim12f51jw5r;
		$Vq3m2amxzyi5 = $Vvjxcwrp4tjq;
		$Vudz4oh4qikuspect_ratio_align = 'xMidYMid';
		$Vudz4oh4qikuspect_ratio_ms = 'meet';
		$V14ltds3prprgs = array();
		
		preg_match('/<svg([^\>]*)>/si', $Vvt20qqut4buvgdata, $V14ltds3prprgs);
		if (isset($V14ltds3prprgs[1]) AND !empty($V14ltds3prprgs[1])) {
			$V3p0tae11ldw = array();
			if (preg_match('/[\s]+x[\s]*=[\s]*"([^"]*)"/si', $V14ltds3prprgs[1], $V3p0tae11ldw)) {
				$V03mvlmpusuj = $Vnwufml5q3nphis->getHTMLUnitToUnits($V3p0tae11ldw[1], 0, $Vnwufml5q3nphis->svgunit, false);
			}
			$V3p0tae11ldw = array();
			if (preg_match('/[\s]+y[\s]*=[\s]*"([^"]*)"/si', $V14ltds3prprgs[1], $V3p0tae11ldw)) {
				$Vrngof4idfho = $Vnwufml5q3nphis->getHTMLUnitToUnits($V3p0tae11ldw[1], 0, $Vnwufml5q3nphis->svgunit, false);
			}
			$V3p0tae11ldw = array();
			if (preg_match('/[\s]+width[\s]*=[\s]*"([^"]*)"/si', $V14ltds3prprgs[1], $V3p0tae11ldw)) {
				$Vv4wxcxfdtwp = $Vnwufml5q3nphis->getHTMLUnitToUnits($V3p0tae11ldw[1], 1, $Vnwufml5q3nphis->svgunit, false);
			}
			$V3p0tae11ldw = array();
			if (preg_match('/[\s]+height[\s]*=[\s]*"([^"]*)"/si', $V14ltds3prprgs[1], $V3p0tae11ldw)) {
				$Vq3m2amxzyi5 = $Vnwufml5q3nphis->getHTMLUnitToUnits($V3p0tae11ldw[1], 1, $Vnwufml5q3nphis->svgunit, false);
			}
			$V3p0tae11ldw = array();
			$Vz0hmukhwa4ziew_box = array();
			if (preg_match('/[\s]+viewBox[\s]*=[\s]*"[\s]*([0-9\.\-]+)[\s]+([0-9\.\-]+)[\s]+([0-9\.]+)[\s]+([0-9\.]+)[\s]*"/si', $V14ltds3prprgs[1], $V3p0tae11ldw)) {
				if (count($V3p0tae11ldw) == 5) {
					array_shift($V3p0tae11ldw);
					foreach ($V3p0tae11ldw as $Vl0q4noiexi4ey => $Vxt4wx3pvtez) {
						$Vz0hmukhwa4ziew_box[$Vl0q4noiexi4ey] = $Vnwufml5q3nphis->getHTMLUnitToUnits($Vxt4wx3pvtez, 0, $Vnwufml5q3nphis->svgunit, false);
					}
					$V03mvlmpusuj = $Vz0hmukhwa4ziew_box[0];
					$Vrngof4idfho = $Vz0hmukhwa4ziew_box[1];
				}
				
				$V3p0tae11ldw = array();
				if (preg_match('/[\s]+preserveAspectRatio[\s]*=[\s]*"([^"]*)"/si', $V14ltds3prprgs[1], $V3p0tae11ldw)) {
					$Vudz4oh4qikuspect_ratio = preg_split('/[\s]+/si', $V3p0tae11ldw[1]);
					switch (count($Vudz4oh4qikuspect_ratio)) {
						case 3: {
							$Vudz4oh4qikuspect_ratio_align = $Vudz4oh4qikuspect_ratio[1];
							$Vudz4oh4qikuspect_ratio_ms = $Vudz4oh4qikuspect_ratio[2];
							break;
						}
						case 2: {
							$Vudz4oh4qikuspect_ratio_align = $Vudz4oh4qikuspect_ratio[0];
							$Vudz4oh4qikuspect_ratio_ms = $Vudz4oh4qikuspect_ratio[1];
							break;
						}
						case 1: {
							$Vudz4oh4qikuspect_ratio_align = $Vudz4oh4qikuspect_ratio[0];
							$Vudz4oh4qikuspect_ratio_ms = 'meet';
							break;
						}
					}
				}
			}
		}
		if ($Vv4wxcxfdtwp <= 0) {
			$Vv4wxcxfdtwp = 1;
		}
		if ($Vq3m2amxzyi5 <= 0) {
			$Vq3m2amxzyi5 = 1;
		}
		
		if (($Vim12f51jw5r <= 0) AND ($Vvjxcwrp4tjq <= 0)) {
			
			$Vim12f51jw5r = $Vv4wxcxfdtwp;
			$Vvjxcwrp4tjq = $Vq3m2amxzyi5;
		} elseif ($Vim12f51jw5r <= 0) {
			$Vim12f51jw5r = $Vvjxcwrp4tjq * $Vv4wxcxfdtwp / $Vq3m2amxzyi5;
		} elseif ($Vvjxcwrp4tjq <= 0) {
			$Vvjxcwrp4tjq = $Vim12f51jw5r * $Vq3m2amxzyi5 / $Vv4wxcxfdtwp;
		}
		
		list($Vim12f51jw5r, $Vvjxcwrp4tjq, $Vangwoo3ejfg, $Vgxufordoa4t) = $Vnwufml5q3nphis->fitBlock($Vim12f51jw5r, $Vvjxcwrp4tjq, $Vangwoo3ejfg, $Vgxufordoa4t, $Vbleqcwoft4t);
		if ($Vnwufml5q3nphis->rasterize_vector_images) {
			
			return $Vnwufml5q3nphis->Image($Vjluyuwumvof, $Vangwoo3ejfg, $Vgxufordoa4t, $Vim12f51jw5r, $Vvjxcwrp4tjq, 'SVG', $Vx3g4ytafo1aink, $Vb5kn1gbu0ep, true, 300, $Ve2ojby5keys, false, false, $Vgffhwoemo4c, false, false, false);
		}
		
		$Vnwufml5q3nphis->img_rb_y = $Vgxufordoa4t + $Vvjxcwrp4tjq;
		
		if ($Vnwufml5q3nphis->rtl) {
			if ($Ve2ojby5keys == 'L') {
				$Vangwoo3ejfgimg = $Vnwufml5q3nphis->lMargin;
			} elseif ($Ve2ojby5keys == 'C') {
				$Vangwoo3ejfgimg = ($Vnwufml5q3nphis->w + $Vnwufml5q3nphis->lMargin - $Vnwufml5q3nphis->rMargin - $Vim12f51jw5r) / 2;
			} elseif ($Ve2ojby5keys == 'R') {
				$Vangwoo3ejfgimg = $Vnwufml5q3nphis->w - $Vnwufml5q3nphis->rMargin - $Vim12f51jw5r;
			} else {
				$Vangwoo3ejfgimg = $Vangwoo3ejfg - $Vim12f51jw5r;
			}
			$Vnwufml5q3nphis->img_rb_x = $Vangwoo3ejfgimg;
		} else {
			if ($Ve2ojby5keys == 'L') {
				$Vangwoo3ejfgimg = $Vnwufml5q3nphis->lMargin;
			} elseif ($Ve2ojby5keys == 'C') {
				$Vangwoo3ejfgimg = ($Vnwufml5q3nphis->w + $Vnwufml5q3nphis->lMargin - $Vnwufml5q3nphis->rMargin - $Vim12f51jw5r) / 2;
			} elseif ($Ve2ojby5keys == 'R') {
				$Vangwoo3ejfgimg = $Vnwufml5q3nphis->w - $Vnwufml5q3nphis->rMargin - $Vim12f51jw5r;
			} else {
				$Vangwoo3ejfgimg = $Vangwoo3ejfg;
			}
			$Vnwufml5q3nphis->img_rb_x = $Vangwoo3ejfgimg + $Vim12f51jw5r;
		}
		
		$Vfbwtdiv4emm = $Vnwufml5q3nphis->getGraphicVars();
		
		$Vvt20qqut4buvgoffset_x = ($Vangwoo3ejfgimg - $V03mvlmpusuj) * $Vnwufml5q3nphis->k;
		$Vvt20qqut4buvgoffset_y = -($Vgxufordoa4t - $Vrngof4idfho) * $Vnwufml5q3nphis->k;
		if (isset($Vz0hmukhwa4ziew_box[2]) AND ($Vz0hmukhwa4ziew_box[2] > 0) AND ($Vz0hmukhwa4ziew_box[3] > 0)) {
			$Vv4wxcxfdtwp = $Vz0hmukhwa4ziew_box[2];
			$Vq3m2amxzyi5 = $Vz0hmukhwa4ziew_box[3];
		} else {
			if ($Vv4wxcxfdtwp <= 0) {
				$Vv4wxcxfdtwp = $Vim12f51jw5r;
			}
			if ($Vq3m2amxzyi5 <= 0) {
				$Vq3m2amxzyi5 = $Vvjxcwrp4tjq;
			}
		}
		$Vvt20qqut4buvgscale_x = $Vim12f51jw5r / $Vv4wxcxfdtwp;
		$Vvt20qqut4buvgscale_y = $Vvjxcwrp4tjq / $Vq3m2amxzyi5;
		
		if ($Vudz4oh4qikuspect_ratio_align != 'none') {
			
			$Vvt20qqut4buvgscale_old_x = $Vvt20qqut4buvgscale_x;
			$Vvt20qqut4buvgscale_old_y = $Vvt20qqut4buvgscale_y;
			
			if ($Vudz4oh4qikuspect_ratio_ms == 'slice') {
				
				if ($Vvt20qqut4buvgscale_x > $Vvt20qqut4buvgscale_y) {
					$Vvt20qqut4buvgscale_y = $Vvt20qqut4buvgscale_x;
				} elseif ($Vvt20qqut4buvgscale_x < $Vvt20qqut4buvgscale_y) {
					$Vvt20qqut4buvgscale_x = $Vvt20qqut4buvgscale_y;
				}
			} else { 
				
				if ($Vvt20qqut4buvgscale_x < $Vvt20qqut4buvgscale_y) {
					$Vvt20qqut4buvgscale_y = $Vvt20qqut4buvgscale_x;
				} elseif ($Vvt20qqut4buvgscale_x > $Vvt20qqut4buvgscale_y) {
					$Vvt20qqut4buvgscale_x = $Vvt20qqut4buvgscale_y;
				}
			}
			
			switch (substr($Vudz4oh4qikuspect_ratio_align, 1, 3)) {
				case 'Min': {
					
					break;
				}
				case 'Max': {
					$Vvt20qqut4buvgoffset_x += (($Vim12f51jw5r * $Vnwufml5q3nphis->k) - ($Vv4wxcxfdtwp * $Vnwufml5q3nphis->k * $Vvt20qqut4buvgscale_x));
					break;
				}
				default:
				case 'Mid': {
					$Vvt20qqut4buvgoffset_x += ((($Vim12f51jw5r * $Vnwufml5q3nphis->k) - ($Vv4wxcxfdtwp * $Vnwufml5q3nphis->k * $Vvt20qqut4buvgscale_x)) / 2);
					break;
				}
			}
			
			switch (substr($Vudz4oh4qikuspect_ratio_align, 5)) {
				case 'Min': {
					
					break;
				}
				case 'Max': {
					$Vvt20qqut4buvgoffset_y -= (($Vvjxcwrp4tjq * $Vnwufml5q3nphis->k) - ($Vq3m2amxzyi5 * $Vnwufml5q3nphis->k * $Vvt20qqut4buvgscale_y));
					break;
				}
				default:
				case 'Mid': {
					$Vvt20qqut4buvgoffset_y -= ((($Vvjxcwrp4tjq * $Vnwufml5q3nphis->k) - ($Vq3m2amxzyi5 * $Vnwufml5q3nphis->k * $Vvt20qqut4buvgscale_y)) / 2);
					break;
				}
			}
		}
		
		$Vwfolue42pzj_break_mode = $Vnwufml5q3nphis->AutoPageBreak;
		$Vwfolue42pzj_break_margin = $Vnwufml5q3nphis->getBreakMargin();
		$Vrhdnjsu25aw = $Vnwufml5q3nphis->cell_padding;
		$Vnwufml5q3nphis->SetCellPadding(0);
		$Vnwufml5q3nphis->SetAutoPageBreak(false);
		
		$Vnwufml5q3nphis->_out('q'.$Vnwufml5q3nphis->epsmarker);
		
		$Vnwufml5q3nphis->Rect($Vangwoo3ejfgimg, $Vgxufordoa4t, $Vim12f51jw5r, $Vvjxcwrp4tjq, 'CNZ', array(), array());
		
		$Vs0htpwzsrcc = $V03mvlmpusuj * $Vnwufml5q3nphis->k * (1 - $Vvt20qqut4buvgscale_x);
		$Vxb0ra0fqzn2 = ($Vnwufml5q3nphis->h - $Vrngof4idfho) * $Vnwufml5q3nphis->k * (1 - $Vvt20qqut4buvgscale_y);
		$Vnwufml5q3nphis->_out(sprintf('%F %F %F %F %F %F cm', $Vvt20qqut4buvgscale_x, 0, 0, $Vvt20qqut4buvgscale_y, ($Vs0htpwzsrcc + $Vvt20qqut4buvgoffset_x), ($Vxb0ra0fqzn2 + $Vvt20qqut4buvgoffset_y)));
		
		$Vnwufml5q3nphis->parser = xml_parser_create('UTF-8');
		
		xml_set_object($Vnwufml5q3nphis->parser, $Vnwufml5q3nphis);
		
		xml_parser_set_option($Vnwufml5q3nphis->parser, XML_OPTION_CASE_FOLDING, 0);
		
		xml_set_element_handler($Vnwufml5q3nphis->parser, 'startSVGElementHandler', 'endSVGElementHandler');
		
		xml_set_character_data_handler($Vnwufml5q3nphis->parser, 'segSVGContentHandler');
		
		if (!xml_parse($Vnwufml5q3nphis->parser, $Vvt20qqut4buvgdata)) {
			$Vs0htpwzsrccrror_message = sprintf('SVG Error: %s at line %d', xml_error_string(xml_get_error_code($Vnwufml5q3nphis->parser)), xml_get_current_line_number($Vnwufml5q3nphis->parser));
			$Vnwufml5q3nphis->Error($Vs0htpwzsrccrror_message);
		}
		
		xml_parser_free($Vnwufml5q3nphis->parser);
		
		$Vnwufml5q3nphis->_out($Vnwufml5q3nphis->epsmarker.'Q');
		
		$Vnwufml5q3nphis->setGraphicVars($Vfbwtdiv4emm);
		$Vnwufml5q3nphis->lasth = $Vfbwtdiv4emm['lasth'];
		if (!empty($Vgffhwoemo4c)) {
			$Vbhs0cmiogir = $Vnwufml5q3nphis->x;
			$Vsrhsnwkcuy3 = $Vnwufml5q3nphis->y;
			$Vnwufml5q3nphis->x = $Vangwoo3ejfgimg;
			if ($Vnwufml5q3nphis->rtl) {
				$Vnwufml5q3nphis->x += $Vim12f51jw5r;
			}
			$Vnwufml5q3nphis->y = $Vgxufordoa4t;
			$Vnwufml5q3nphis->Cell($Vim12f51jw5r, $Vvjxcwrp4tjq, '', $Vgffhwoemo4c, 0, '', 0, '', 0, true);
			$Vnwufml5q3nphis->x = $Vbhs0cmiogir;
			$Vnwufml5q3nphis->y = $Vsrhsnwkcuy3;
		}
		if ($Vx3g4ytafo1aink) {
			$Vnwufml5q3nphis->Link($Vangwoo3ejfgimg, $Vgxufordoa4t, $Vim12f51jw5r, $Vvjxcwrp4tjq, $Vx3g4ytafo1aink, 0);
		}
		
		switch($Vb5kn1gbu0ep) {
			case 'T':{
				$Vnwufml5q3nphis->y = $Vgxufordoa4t;
				$Vnwufml5q3nphis->x = $Vnwufml5q3nphis->img_rb_x;
				break;
			}
			case 'M':{
				$Vnwufml5q3nphis->y = $Vgxufordoa4t + round($Vvjxcwrp4tjq/2);
				$Vnwufml5q3nphis->x = $Vnwufml5q3nphis->img_rb_x;
				break;
			}
			case 'B':{
				$Vnwufml5q3nphis->y = $Vnwufml5q3nphis->img_rb_y;
				$Vnwufml5q3nphis->x = $Vnwufml5q3nphis->img_rb_x;
				break;
			}
			case 'N':{
				$Vnwufml5q3nphis->SetY($Vnwufml5q3nphis->img_rb_y);
				break;
			}
			default:{
				
				$Vnwufml5q3nphis->x = $Vfbwtdiv4emm['x'];
				$Vnwufml5q3nphis->y = $Vfbwtdiv4emm['y'];
				$Vnwufml5q3nphis->page = $Vfbwtdiv4emm['page'];
				$Vnwufml5q3nphis->current_column = $Vfbwtdiv4emm['current_column'];
				$Vnwufml5q3nphis->tMargin = $Vfbwtdiv4emm['tMargin'];
				$Vnwufml5q3nphis->bMargin = $Vfbwtdiv4emm['bMargin'];
				$Vnwufml5q3nphis->w = $Vfbwtdiv4emm['w'];
				$Vnwufml5q3nphis->h = $Vfbwtdiv4emm['h'];
				$Vnwufml5q3nphis->wPt = $Vfbwtdiv4emm['wPt'];
				$Vnwufml5q3nphis->hPt = $Vfbwtdiv4emm['hPt'];
				$Vnwufml5q3nphis->fwPt = $Vfbwtdiv4emm['fwPt'];
				$Vnwufml5q3nphis->fhPt = $Vfbwtdiv4emm['fhPt'];
				break;
			}
		}
		$Vnwufml5q3nphis->endlinex = $Vnwufml5q3nphis->img_rb_x;
		
		$Vnwufml5q3nphis->SetAutoPageBreak($Vwfolue42pzj_break_mode, $Vwfolue42pzj_break_margin);
		$Vnwufml5q3nphis->cell_padding = $Vrhdnjsu25aw;
	}

	
	protected function convertSVGtMatrix($Vnwufml5q3npm) {
		$Vudz4oh4qiku = $Vnwufml5q3npm[0];
		$Vpq3acakq35c = -$Vnwufml5q3npm[1];
		$Vwcmlurixvzg = -$Vnwufml5q3npm[2];
		$Vc0aiseldrl3 = $Vnwufml5q3npm[3];
		$Vs0htpwzsrcc = $Vnwufml5q3nphis->getHTMLUnitToUnits($Vnwufml5q3npm[4], 1, $Vnwufml5q3nphis->svgunit, false) * $Vnwufml5q3nphis->k;
		$Vxb0ra0fqzn2 = -$Vnwufml5q3nphis->getHTMLUnitToUnits($Vnwufml5q3npm[5], 1, $Vnwufml5q3nphis->svgunit, false) * $Vnwufml5q3nphis->k;
		$Vangwoo3ejfg = 0;
		$Vgxufordoa4t = $Vnwufml5q3nphis->h * $Vnwufml5q3nphis->k;
		$Vs0htpwzsrcc = ($Vangwoo3ejfg * (1 - $Vudz4oh4qiku)) - ($Vgxufordoa4t * $Vwcmlurixvzg) + $Vs0htpwzsrcc;
		$Vxb0ra0fqzn2 = ($Vgxufordoa4t * (1 - $Vc0aiseldrl3)) - ($Vangwoo3ejfg * $Vpq3acakq35c) + $Vxb0ra0fqzn2;
		return array($Vudz4oh4qiku, $Vpq3acakq35c, $Vwcmlurixvzg, $Vc0aiseldrl3, $Vs0htpwzsrcc, $Vxb0ra0fqzn2);
	}

	
	protected function SVGTransform($Vnwufml5q3npm) {
		$Vnwufml5q3nphis->Transform($Vnwufml5q3nphis->convertSVGtMatrix($Vnwufml5q3npm));
	}

	
	protected function setSVGStyles($Vvt20qqut4buvgstyle, $V1yuhsvbtlvrrevsvgstyle, $Vangwoo3ejfg=0, $Vgxufordoa4t=0, $Vim12f51jw5r=1, $Vvjxcwrp4tjq=1, $Vwcmlurixvzglip_function='', $Vwcmlurixvzglip_params=array()) {
		if ($Vnwufml5q3nphis->state != 2) {
			 return;
		}
		$Vk1y4jyuc5nsbjstyle = '';
		$Vetludueqmbtinlen = (0.01 / $Vnwufml5q3nphis->k); 
		if (!isset($Vvt20qqut4buvgstyle['opacity'])) {
			return $Vk1y4jyuc5nsbjstyle;
		}
		
		$V14ltds3prprgs = array();
		if (preg_match('/url\([\s]*\#([^\)]*)\)/si', $Vvt20qqut4buvgstyle['clip-path'], $V14ltds3prprgs)) {
			$Vwcmlurixvzglip_path = $Vnwufml5q3nphis->svgclippaths[$V14ltds3prprgs[1]];
			foreach ($Vwcmlurixvzglip_path as $Vyltsm3nt5sw) {
				$Vnwufml5q3nphis->startSVGElementHandler('clip-path', $Vyltsm3nt5sw['name'], $Vyltsm3nt5sw['attribs'], $Vyltsm3nt5sw['tm']);
			}
		}
		
		if ($Vvt20qqut4buvgstyle['opacity'] != 1) {
			$Vnwufml5q3nphis->setAlpha($Vvt20qqut4buvgstyle['opacity'], 'Normal', $Vvt20qqut4buvgstyle['opacity'], false);
		}
		
		$Viiychbtwwwq_color = TCPDF_COLORS::convertHTMLColorToDec($Vvt20qqut4buvgstyle['color'], $Vnwufml5q3nphis->spot_colors);
		$Vnwufml5q3nphis->SetFillColorArray($Viiychbtwwwq_color);
		
		$Vdvjst2lzhef_color = TCPDF_COLORS::convertHTMLColorToDec($Vvt20qqut4buvgstyle['text-color'], $Vnwufml5q3nphis->spot_colors);
		$Vnwufml5q3nphis->SetTextColorArray($Vdvjst2lzhef_color);
		
		if (preg_match('/rect\(([a-z0-9\-\.]*)[\s]*([a-z0-9\-\.]*)[\s]*([a-z0-9\-\.]*)[\s]*([a-z0-9\-\.]*)\)/si', $Vvt20qqut4buvgstyle['clip'], $V14ltds3prprgs)) {
			$Vmudo4ztceqi = (isset($V14ltds3prprgs[1])?$Vnwufml5q3nphis->getHTMLUnitToUnits($V14ltds3prprgs[1], 0, $Vnwufml5q3nphis->svgunit, false):0);
			$V023fpwkrfpj = (isset($V14ltds3prprgs[2])?$Vnwufml5q3nphis->getHTMLUnitToUnits($V14ltds3prprgs[2], 0, $Vnwufml5q3nphis->svgunit, false):0);
			$Vbsp2adrrdru = (isset($V14ltds3prprgs[3])?$Vnwufml5q3nphis->getHTMLUnitToUnits($V14ltds3prprgs[3], 0, $Vnwufml5q3nphis->svgunit, false):0);
			$Vx3g4ytafo1aeft = (isset($V14ltds3prprgs[4])?$Vnwufml5q3nphis->getHTMLUnitToUnits($V14ltds3prprgs[4], 0, $Vnwufml5q3nphis->svgunit, false):0);
			$Vwcmlurixvzgx = $Vangwoo3ejfg + $Vx3g4ytafo1aeft;
			$Vwcmlurixvzgy = $Vgxufordoa4t + $Vmudo4ztceqi;
			$V5k0cete3fo0 = $Vim12f51jw5r - $Vx3g4ytafo1aeft - $V023fpwkrfpj;
			$Vwcmlurixvzgh = $Vvjxcwrp4tjq - $Vmudo4ztceqi - $Vbsp2adrrdru;
			if ($Vvt20qqut4buvgstyle['clip-rule'] == 'evenodd') {
				$Vwcmlurixvzglip_rule = 'CNZ';
			} else {
				$Vwcmlurixvzglip_rule = 'CEO';
			}
			$Vnwufml5q3nphis->Rect($Vwcmlurixvzgx, $Vwcmlurixvzgy, $V5k0cete3fo0, $Vwcmlurixvzgh, $Vwcmlurixvzglip_rule, array(), array());
		}
		
		$V14ltds3prprgs = array();
		if (preg_match('/url\([\s]*\#([^\)]*)\)/si', $Vvt20qqut4buvgstyle['fill'], $V14ltds3prprgs)) {
			
			$Vghesoillvavient = $Vnwufml5q3nphis->svggradients[$V14ltds3prprgs[1]];
			if (isset($Vghesoillvavient['xref'])) {
				
				$Vgv45dfhsyuhewgradient = $Vnwufml5q3nphis->svggradients[$Vghesoillvavient['xref']];
				$Vgv45dfhsyuhewgradient['coords'] = $Vghesoillvavient['coords'];
				$Vgv45dfhsyuhewgradient['mode'] = $Vghesoillvavient['mode'];
				$Vgv45dfhsyuhewgradient['type'] = $Vghesoillvavient['type'];
				$Vgv45dfhsyuhewgradient['gradientUnits'] = $Vghesoillvavient['gradientUnits'];
				if (isset($Vghesoillvavient['gradientTransform'])) {
					$Vgv45dfhsyuhewgradient['gradientTransform'] = $Vghesoillvavient['gradientTransform'];
				}
				$Vghesoillvavient = $Vgv45dfhsyuhewgradient;
			}
			
			$Vnwufml5q3nphis->_outSaveGraphicsState();
			
			if (!empty($Vwcmlurixvzglip_function) AND method_exists($Vnwufml5q3nphis, $Vwcmlurixvzglip_function)) {
				$Vwgonaelwh4k = call_user_func_array(array($Vnwufml5q3nphis, $Vwcmlurixvzglip_function), $Vwcmlurixvzglip_params);
				if ((!isset($Vghesoillvavient['type']) OR ($Vghesoillvavient['type'] != 3)) AND is_array($Vwgonaelwh4k) AND (count($Vwgonaelwh4k) == 4)) {
					list($Vangwoo3ejfg, $Vgxufordoa4t, $Vim12f51jw5r, $Vvjxcwrp4tjq) = $Vwgonaelwh4k;
				}
			}
			if ($Vghesoillvavient['mode'] == 'measure') {
				if (!isset($Vghesoillvavient['coords'][4])) {
					$Vghesoillvavient['coords'][4] = 0.5;
				}
				if (isset($Vghesoillvavient['gradientTransform']) AND !empty($Vghesoillvavient['gradientTransform'])) {
					$Vqdeou2vhybvtm = $Vghesoillvavient['gradientTransform'];
					
					$Vangwoo3ejfga = ($Vqdeou2vhybvtm[0] * $Vghesoillvavient['coords'][0]) + ($Vqdeou2vhybvtm[2] * $Vghesoillvavient['coords'][1]) + $Vqdeou2vhybvtm[4];
					$Vgxufordoa4ta = ($Vqdeou2vhybvtm[1] * $Vghesoillvavient['coords'][0]) + ($Vqdeou2vhybvtm[3] * $Vghesoillvavient['coords'][1]) + $Vqdeou2vhybvtm[5];
					$Vangwoo3ejfgb = ($Vqdeou2vhybvtm[0] * $Vghesoillvavient['coords'][2]) + ($Vqdeou2vhybvtm[2] * $Vghesoillvavient['coords'][3]) + $Vqdeou2vhybvtm[4];
					$Vgxufordoa4tb = ($Vqdeou2vhybvtm[1] * $Vghesoillvavient['coords'][2]) + ($Vqdeou2vhybvtm[3] * $Vghesoillvavient['coords'][3]) + $Vqdeou2vhybvtm[5];
					$Vfhkt4vbeual = sqrt(pow(($Vqdeou2vhybvtm[0] * $Vghesoillvavient['coords'][4]), 2) + pow(($Vqdeou2vhybvtm[1] * $Vghesoillvavient['coords'][4]), 2));
					$Vghesoillvavient['coords'][0] = $Vangwoo3ejfga;
					$Vghesoillvavient['coords'][1] = $Vgxufordoa4ta;
					$Vghesoillvavient['coords'][2] = $Vangwoo3ejfgb;
					$Vghesoillvavient['coords'][3] = $Vgxufordoa4tb;
					$Vghesoillvavient['coords'][4] = $Vfhkt4vbeual;
				}
				
				$Vghesoillvavient['coords'][0] = $Vnwufml5q3nphis->getHTMLUnitToUnits($Vghesoillvavient['coords'][0], 0, $Vnwufml5q3nphis->svgunit, false);
				$Vghesoillvavient['coords'][1] = $Vnwufml5q3nphis->getHTMLUnitToUnits($Vghesoillvavient['coords'][1], 0, $Vnwufml5q3nphis->svgunit, false);
				$Vghesoillvavient['coords'][2] = $Vnwufml5q3nphis->getHTMLUnitToUnits($Vghesoillvavient['coords'][2], 0, $Vnwufml5q3nphis->svgunit, false);
				$Vghesoillvavient['coords'][3] = $Vnwufml5q3nphis->getHTMLUnitToUnits($Vghesoillvavient['coords'][3], 0, $Vnwufml5q3nphis->svgunit, false);
				$Vghesoillvavient['coords'][4] = $Vnwufml5q3nphis->getHTMLUnitToUnits($Vghesoillvavient['coords'][4], 0, $Vnwufml5q3nphis->svgunit, false);
				if ($Vim12f51jw5r <= $Vetludueqmbtinlen) {
					$Vim12f51jw5r = $Vetludueqmbtinlen;
				}
				if ($Vvjxcwrp4tjq <= $Vetludueqmbtinlen) {
					$Vvjxcwrp4tjq = $Vetludueqmbtinlen;
				}
				
				if ($Vghesoillvavient['gradientUnits'] == 'objectBoundingBox') {
					
					$Vghesoillvavient['coords'][0] += $Vangwoo3ejfg;
					$Vghesoillvavient['coords'][1] += $Vgxufordoa4t;
					$Vghesoillvavient['coords'][2] += $Vangwoo3ejfg;
					$Vghesoillvavient['coords'][3] += $Vgxufordoa4t;
				}
				
				$Vghesoillvavient['coords'][0] = (($Vghesoillvavient['coords'][0] - $Vangwoo3ejfg) / $Vim12f51jw5r);
				$Vghesoillvavient['coords'][1] = (($Vghesoillvavient['coords'][1] - $Vgxufordoa4t) / $Vvjxcwrp4tjq);
				$Vghesoillvavient['coords'][2] = (($Vghesoillvavient['coords'][2] - $Vangwoo3ejfg) / $Vim12f51jw5r);
				$Vghesoillvavient['coords'][3] = (($Vghesoillvavient['coords'][3] - $Vgxufordoa4t) / $Vvjxcwrp4tjq);
				$Vghesoillvavient['coords'][4] /= $Vim12f51jw5r;
			} elseif ($Vghesoillvavient['mode'] == 'percentage') {
				foreach($Vghesoillvavient['coords'] as $Vl0q4noiexi4ey => $Vxt4wx3pvtez) {
					$Vghesoillvavient['coords'][$Vl0q4noiexi4ey] = (intval($Vxt4wx3pvtez) / 100);
					if ($Vxt4wx3pvtez < 0) {
						$Vghesoillvavient['coords'][$Vl0q4noiexi4ey] = 0;
					} elseif ($Vxt4wx3pvtez > 1) {
						$Vghesoillvavient['coords'][$Vl0q4noiexi4ey] = 1;
					}
				}
			}
			if (($Vghesoillvavient['type'] == 2) AND ($Vghesoillvavient['coords'][0] == $Vghesoillvavient['coords'][2]) AND ($Vghesoillvavient['coords'][1] == $Vghesoillvavient['coords'][3])) {
				
				$Vghesoillvavient['coords'][0] = 1;
				$Vghesoillvavient['coords'][1] = 0;
				$Vghesoillvavient['coords'][2] = 0.999;
				$Vghesoillvavient['coords'][3] = 0;
			}
			
			$V3p0tae11ldw = $Vghesoillvavient['coords'][1];
			$Vghesoillvavient['coords'][1] = $Vghesoillvavient['coords'][3];
			$Vghesoillvavient['coords'][3] = $V3p0tae11ldw;
			
			$Vwcmlurixvzgy = ($Vnwufml5q3nphis->h - $Vgxufordoa4t);
			if ($Vghesoillvavient['type'] == 3) {
				
				$Vwcmlurixvzgy -= ($Vghesoillvavient['coords'][1] * ($Vim12f51jw5r + $Vvjxcwrp4tjq));
				$Vvjxcwrp4tjq = $Vim12f51jw5r = max($Vim12f51jw5r, $Vvjxcwrp4tjq);
			} else {
				$Vwcmlurixvzgy -= $Vvjxcwrp4tjq;
			}
			$Vnwufml5q3nphis->_out(sprintf('%F 0 0 %F %F %F cm', ($Vim12f51jw5r * $Vnwufml5q3nphis->k), ($Vvjxcwrp4tjq * $Vnwufml5q3nphis->k), ($Vangwoo3ejfg * $Vnwufml5q3nphis->k), ($Vwcmlurixvzgy * $Vnwufml5q3nphis->k)));
			if (count($Vghesoillvavient['stops']) > 1) {
				$Vnwufml5q3nphis->Gradient($Vghesoillvavient['type'], $Vghesoillvavient['coords'], $Vghesoillvavient['stops'], array(), false);
			}
		} elseif ($Vvt20qqut4buvgstyle['fill'] != 'none') {
			$Viiychbtwwwq_color = TCPDF_COLORS::convertHTMLColorToDec($Vvt20qqut4buvgstyle['fill'], $Vnwufml5q3nphis->spot_colors);
			if ($Vvt20qqut4buvgstyle['fill-opacity'] != 1) {
				$Vnwufml5q3nphis->setAlpha($Vnwufml5q3nphis->alpha['CA'], 'Normal', $Vvt20qqut4buvgstyle['fill-opacity'], false);
			}
			$Vnwufml5q3nphis->SetFillColorArray($Viiychbtwwwq_color);
			if ($Vvt20qqut4buvgstyle['fill-rule'] == 'evenodd') {
				$Vk1y4jyuc5nsbjstyle .= 'F*';
			} else {
				$Vk1y4jyuc5nsbjstyle .= 'F';
			}
		}
		
		if ($Vvt20qqut4buvgstyle['stroke'] != 'none') {
			if ($Vvt20qqut4buvgstyle['stroke-opacity'] != 1) {
				$Vnwufml5q3nphis->setAlpha($Vvt20qqut4buvgstyle['stroke-opacity'], 'Normal', $Vnwufml5q3nphis->alpha['ca'], false);
			} elseif (preg_match('/rgba\(\d+%?,\s*\d+%?,\s*\d+%?,\s*(\d+(?:\.\d+)?)\)/i', $Vvt20qqut4buvgstyle['stroke'], $Vfhkt4vbeualgba_matches)) {
				$Vnwufml5q3nphis->setAlpha($Vfhkt4vbeualgba_matches[1], 'Normal', $Vnwufml5q3nphis->alpha['ca'], false);
			}
			$Vvt20qqut4butroke_style = array(
				'color' => TCPDF_COLORS::convertHTMLColorToDec($Vvt20qqut4buvgstyle['stroke'], $Vnwufml5q3nphis->spot_colors),
				'width' => $Vnwufml5q3nphis->getHTMLUnitToUnits($Vvt20qqut4buvgstyle['stroke-width'], 0, $Vnwufml5q3nphis->svgunit, false),
				'cap' => $Vvt20qqut4buvgstyle['stroke-linecap'],
				'join' => $Vvt20qqut4buvgstyle['stroke-linejoin']
				);
			if (isset($Vvt20qqut4buvgstyle['stroke-dasharray']) AND !empty($Vvt20qqut4buvgstyle['stroke-dasharray']) AND ($Vvt20qqut4buvgstyle['stroke-dasharray'] != 'none')) {
				$Vvt20qqut4butroke_style['dash'] = $Vvt20qqut4buvgstyle['stroke-dasharray'];
			}
			$Vnwufml5q3nphis->SetLineStyle($Vvt20qqut4butroke_style);
			$Vk1y4jyuc5nsbjstyle .= 'D';
		}
		
		$V14ltds3prprgs = array();
		if (!empty($Vvt20qqut4buvgstyle['font'])) {
			if (preg_match('/font-family[\s]*:[\s]*([^\;\"]*)/si', $Vvt20qqut4buvgstyle['font'], $V14ltds3prprgs)) {
				$Voc1qigl3k5y_family = $Vnwufml5q3nphis->getFontFamilyName($V14ltds3prprgs[1]);
			} else {
				$Voc1qigl3k5y_family = $Vvt20qqut4buvgstyle['font-family'];
			}
			if (preg_match('/font-size[\s]*:[\s]*([^\s\;\"]*)/si', $Vvt20qqut4buvgstyle['font'], $V14ltds3prprgs)) {
				$Voc1qigl3k5y_size = trim($V14ltds3prprgs[1]);
			} else {
				$Voc1qigl3k5y_size = $Vvt20qqut4buvgstyle['font-size'];
			}
			if (preg_match('/font-style[\s]*:[\s]*([^\s\;\"]*)/si', $Vvt20qqut4buvgstyle['font'], $V14ltds3prprgs)) {
				$Voc1qigl3k5y_style = trim($V14ltds3prprgs[1]);
			} else {
				$Voc1qigl3k5y_style = $Vvt20qqut4buvgstyle['font-style'];
			}
			if (preg_match('/font-weight[\s]*:[\s]*([^\s\;\"]*)/si', $Vvt20qqut4buvgstyle['font'], $V14ltds3prprgs)) {
				$Voc1qigl3k5y_weight = trim($V14ltds3prprgs[1]);
			} else {
				$Voc1qigl3k5y_weight = $Vvt20qqut4buvgstyle['font-weight'];
			}
			if (preg_match('/font-stretch[\s]*:[\s]*([^\s\;\"]*)/si', $Vvt20qqut4buvgstyle['font'], $V14ltds3prprgs)) {
				$Voc1qigl3k5y_stretch = trim($V14ltds3prprgs[1]);
			} else {
				$Voc1qigl3k5y_stretch = $Vvt20qqut4buvgstyle['font-stretch'];
			}
			if (preg_match('/letter-spacing[\s]*:[\s]*([^\s\;\"]*)/si', $Vvt20qqut4buvgstyle['font'], $V14ltds3prprgs)) {
				$Vei1w33xybmu = trim($V14ltds3prprgs[1]);
			} else {
				$Vei1w33xybmu = $Vvt20qqut4buvgstyle['letter-spacing'];
			}
		} else {
			$Voc1qigl3k5y_family = $Vnwufml5q3nphis->getFontFamilyName($Vvt20qqut4buvgstyle['font-family']);
			$Voc1qigl3k5y_size = $Vvt20qqut4buvgstyle['font-size'];
			$Voc1qigl3k5y_style = $Vvt20qqut4buvgstyle['font-style'];
			$Voc1qigl3k5y_weight = $Vvt20qqut4buvgstyle['font-weight'];
			$Voc1qigl3k5y_stretch = $Vvt20qqut4buvgstyle['font-stretch'];
			$Vei1w33xybmu = $Vvt20qqut4buvgstyle['letter-spacing'];
		}
		$Voc1qigl3k5y_size = $Vnwufml5q3nphis->getHTMLFontUnits($Voc1qigl3k5y_size, $Vnwufml5q3nphis->svgstyles[0]['font-size'], $V1yuhsvbtlvrrevsvgstyle['font-size'], $Vnwufml5q3nphis->svgunit);
		$Voc1qigl3k5y_stretch = $Vnwufml5q3nphis->getCSSFontStretching($Voc1qigl3k5y_stretch, $Vvt20qqut4buvgstyle['font-stretch']);
		$Vei1w33xybmu = $Vnwufml5q3nphis->getCSSFontSpacing($Vei1w33xybmu, $Vvt20qqut4buvgstyle['letter-spacing']);
		switch ($Voc1qigl3k5y_style) {
			case 'italic': {
				$Voc1qigl3k5y_style = 'I';
				break;
			}
			case 'oblique': {
				$Voc1qigl3k5y_style = 'I';
				break;
			}
			default:
			case 'normal': {
				$Voc1qigl3k5y_style = '';
				break;
			}
		}
		switch ($Voc1qigl3k5y_weight) {
			case 'bold':
			case 'bolder': {
				$Voc1qigl3k5y_style .= 'B';
				break;
			}
			case 'normal': {
				if ((substr($Voc1qigl3k5y_family, -1) == 'I') AND (substr($Voc1qigl3k5y_family, -2, 1) == 'B')) {
					$Voc1qigl3k5y_family = substr($Voc1qigl3k5y_family, 0, -2).'I';
				} elseif (substr($Voc1qigl3k5y_family, -1) == 'B') {
					$Voc1qigl3k5y_family = substr($Voc1qigl3k5y_family, 0, -1);
				}
				break;
			}
		}
		switch ($Vvt20qqut4buvgstyle['text-decoration']) {
			case 'underline': {
				$Voc1qigl3k5y_style .= 'U';
				break;
			}
			case 'overline': {
				$Voc1qigl3k5y_style .= 'O';
				break;
			}
			case 'line-through': {
				$Voc1qigl3k5y_style .= 'D';
				break;
			}
			default:
			case 'none': {
				break;
			}
		}
		$Vnwufml5q3nphis->SetFont($Voc1qigl3k5y_family, $Voc1qigl3k5y_style, $Voc1qigl3k5y_size);
		$Vnwufml5q3nphis->setFontStretching($Voc1qigl3k5y_stretch);
		$Vnwufml5q3nphis->setFontSpacing($Vei1w33xybmu);
		return $Vk1y4jyuc5nsbjstyle;
	}

	
	protected function SVGPath($Vc0aiseldrl3, $Vovexk3mzujo='') {
		if ($Vnwufml5q3nphis->state != 2) {
			 return;
		}
		
		$Vjvwtdkog1to = TCPDF_STATIC::getPathPaintOperator($Vovexk3mzujo, '');
		if (empty($Vjvwtdkog1to)) {
			return;
		}
		$V1yuhsvbtlvraths = array();
		$Vc0aiseldrl3 = preg_replace('/([0-9ACHLMQSTVZ])([\-\+])/si', '\\1 \\2', $Vc0aiseldrl3);
		preg_match_all('/([ACHLMQSTVZ])[\s]*([^ACHLMQSTVZ\"]*)/si', $Vc0aiseldrl3, $V1yuhsvbtlvraths, PREG_SET_ORDER);
		$Vangwoo3ejfg = 0;
		$Vgxufordoa4t = 0;
		$Vangwoo3ejfg1 = 0;
		$Vgxufordoa4t1 = 0;
		$Vangwoo3ejfg2 = 0;
		$Vgxufordoa4t2 = 0;
		$Vangwoo3ejfgmin = 2147483647;
		$Vangwoo3ejfgmax = 0;
		$Vgxufordoa4tmin = 2147483647;
		$Vgxufordoa4tmax = 0;
		$V14ltds3prprlcoord = false;
		$Vetludueqmbtinlen = (0.01 / $Vnwufml5q3nphis->k); 
		$Vxb0ra0fqzn2irstcmd = true; 
		
		foreach ($V1yuhsvbtlvraths as $Vl0q4noiexi4ey => $Vxt4wx3pvtez) {
			
			$Vwcmlurixvzgmd = trim($Vxt4wx3pvtez[1]);
			if (strtolower($Vwcmlurixvzgmd) == $Vwcmlurixvzgmd) {
				
				$V14ltds3prprlcoord = true;
				$Vangwoo3ejfgoffset = $Vangwoo3ejfg;
				$Vgxufordoa4toffset = $Vgxufordoa4t;
			} else {
				$V14ltds3prprlcoord = false;
				$Vangwoo3ejfgoffset = 0;
				$Vgxufordoa4toffset = 0;
			}
			$V1yuhsvbtlvrarams = array();
			if (isset($Vxt4wx3pvtez[2])) {
				
				$Vfhkt4vbeualawparams = preg_split('/([\,\s]+)/si', trim($Vxt4wx3pvtez[2]));
				$V1yuhsvbtlvrarams = array();
				foreach ($Vfhkt4vbeualawparams as $Vwcmlurixvzgk => $Vyltsm3nt5sw) {
					$V1yuhsvbtlvrarams[$Vwcmlurixvzgk] = $Vnwufml5q3nphis->getHTMLUnitToUnits($Vyltsm3nt5sw, 0, $Vnwufml5q3nphis->svgunit, false);
					if (abs($V1yuhsvbtlvrarams[$Vwcmlurixvzgk]) < $Vetludueqmbtinlen) {
						
						$V1yuhsvbtlvrarams[$Vwcmlurixvzgk] = 0;
					}
				}
			}
			
			$Vangwoo3ejfg0 = $Vangwoo3ejfg;
			$Vgxufordoa4t0 = $Vgxufordoa4t;
			switch (strtoupper($Vwcmlurixvzgmd)) {
				case 'M': { 
					foreach ($V1yuhsvbtlvrarams as $Vwcmlurixvzgk => $Vyltsm3nt5sw) {
						if (($Vwcmlurixvzgk % 2) == 0) {
							$Vangwoo3ejfg = $Vyltsm3nt5sw + $Vangwoo3ejfgoffset;
						} else {
							$Vgxufordoa4t = $Vyltsm3nt5sw + $Vgxufordoa4toffset;
							if ($Vxb0ra0fqzn2irstcmd OR (abs($Vangwoo3ejfg0 - $Vangwoo3ejfg) >= $Vetludueqmbtinlen) OR (abs($Vgxufordoa4t0 - $Vgxufordoa4t) >= $Vetludueqmbtinlen)) {
								if ($Vwcmlurixvzgk == 1) {
									$Vnwufml5q3nphis->_outPoint($Vangwoo3ejfg, $Vgxufordoa4t);
									$Vxb0ra0fqzn2irstcmd = false;
								} else {
									$Vnwufml5q3nphis->_outLine($Vangwoo3ejfg, $Vgxufordoa4t);
								}
								$Vangwoo3ejfg0 = $Vangwoo3ejfg;
								$Vgxufordoa4t0 = $Vgxufordoa4t;
							}
							$Vangwoo3ejfgmin = min($Vangwoo3ejfgmin, $Vangwoo3ejfg);
							$Vgxufordoa4tmin = min($Vgxufordoa4tmin, $Vgxufordoa4t);
							$Vangwoo3ejfgmax = max($Vangwoo3ejfgmax, $Vangwoo3ejfg);
							$Vgxufordoa4tmax = max($Vgxufordoa4tmax, $Vgxufordoa4t);
							if ($V14ltds3prprlcoord) {
								$Vangwoo3ejfgoffset = $Vangwoo3ejfg;
								$Vgxufordoa4toffset = $Vgxufordoa4t;
							}
						}
					}
					break;
				}
				case 'L': { 
					foreach ($V1yuhsvbtlvrarams as $Vwcmlurixvzgk => $Vyltsm3nt5sw) {
						if (($Vwcmlurixvzgk % 2) == 0) {
							$Vangwoo3ejfg = $Vyltsm3nt5sw + $Vangwoo3ejfgoffset;
						} else {
							$Vgxufordoa4t = $Vyltsm3nt5sw + $Vgxufordoa4toffset;
							if ((abs($Vangwoo3ejfg0 - $Vangwoo3ejfg) >= $Vetludueqmbtinlen) OR (abs($Vgxufordoa4t0 - $Vgxufordoa4t) >= $Vetludueqmbtinlen)) {
								$Vnwufml5q3nphis->_outLine($Vangwoo3ejfg, $Vgxufordoa4t);
								$Vangwoo3ejfg0 = $Vangwoo3ejfg;
								$Vgxufordoa4t0 = $Vgxufordoa4t;
							}
							$Vangwoo3ejfgmin = min($Vangwoo3ejfgmin, $Vangwoo3ejfg);
							$Vgxufordoa4tmin = min($Vgxufordoa4tmin, $Vgxufordoa4t);
							$Vangwoo3ejfgmax = max($Vangwoo3ejfgmax, $Vangwoo3ejfg);
							$Vgxufordoa4tmax = max($Vgxufordoa4tmax, $Vgxufordoa4t);
							if ($V14ltds3prprlcoord) {
								$Vangwoo3ejfgoffset = $Vangwoo3ejfg;
								$Vgxufordoa4toffset = $Vgxufordoa4t;
							}
						}
					}
					break;
				}
				case 'H': { 
					foreach ($V1yuhsvbtlvrarams as $Vwcmlurixvzgk => $Vyltsm3nt5sw) {
						$Vangwoo3ejfg = $Vyltsm3nt5sw + $Vangwoo3ejfgoffset;
						if ((abs($Vangwoo3ejfg0 - $Vangwoo3ejfg) >= $Vetludueqmbtinlen) OR (abs($Vgxufordoa4t0 - $Vgxufordoa4t) >= $Vetludueqmbtinlen)) {
							$Vnwufml5q3nphis->_outLine($Vangwoo3ejfg, $Vgxufordoa4t);
							$Vangwoo3ejfg0 = $Vangwoo3ejfg;
							$Vgxufordoa4t0 = $Vgxufordoa4t;
						}
						$Vangwoo3ejfgmin = min($Vangwoo3ejfgmin, $Vangwoo3ejfg);
						$Vangwoo3ejfgmax = max($Vangwoo3ejfgmax, $Vangwoo3ejfg);
						if ($V14ltds3prprlcoord) {
							$Vangwoo3ejfgoffset = $Vangwoo3ejfg;
						}
					}
					break;
				}
				case 'V': { 
					foreach ($V1yuhsvbtlvrarams as $Vwcmlurixvzgk => $Vyltsm3nt5sw) {
						$Vgxufordoa4t = $Vyltsm3nt5sw + $Vgxufordoa4toffset;
						if ((abs($Vangwoo3ejfg0 - $Vangwoo3ejfg) >= $Vetludueqmbtinlen) OR (abs($Vgxufordoa4t0 - $Vgxufordoa4t) >= $Vetludueqmbtinlen)) {
							$Vnwufml5q3nphis->_outLine($Vangwoo3ejfg, $Vgxufordoa4t);
							$Vangwoo3ejfg0 = $Vangwoo3ejfg;
							$Vgxufordoa4t0 = $Vgxufordoa4t;
						}
						$Vgxufordoa4tmin = min($Vgxufordoa4tmin, $Vgxufordoa4t);
						$Vgxufordoa4tmax = max($Vgxufordoa4tmax, $Vgxufordoa4t);
						if ($V14ltds3prprlcoord) {
							$Vgxufordoa4toffset = $Vgxufordoa4t;
						}
					}
					break;
				}
				case 'C': { 
					foreach ($V1yuhsvbtlvrarams as $Vwcmlurixvzgk => $Vyltsm3nt5sw) {
						$V1yuhsvbtlvrarams[$Vwcmlurixvzgk] = $Vyltsm3nt5sw;
						if ((($Vwcmlurixvzgk + 1) % 6) == 0) {
							$Vangwoo3ejfg1 = $V1yuhsvbtlvrarams[($Vwcmlurixvzgk - 5)] + $Vangwoo3ejfgoffset;
							$Vgxufordoa4t1 = $V1yuhsvbtlvrarams[($Vwcmlurixvzgk - 4)] + $Vgxufordoa4toffset;
							$Vangwoo3ejfg2 = $V1yuhsvbtlvrarams[($Vwcmlurixvzgk - 3)] + $Vangwoo3ejfgoffset;
							$Vgxufordoa4t2 = $V1yuhsvbtlvrarams[($Vwcmlurixvzgk - 2)] + $Vgxufordoa4toffset;
							$Vangwoo3ejfg = $V1yuhsvbtlvrarams[($Vwcmlurixvzgk - 1)] + $Vangwoo3ejfgoffset;
							$Vgxufordoa4t = $V1yuhsvbtlvrarams[($Vwcmlurixvzgk)] + $Vgxufordoa4toffset;
							$Vnwufml5q3nphis->_outCurve($Vangwoo3ejfg1, $Vgxufordoa4t1, $Vangwoo3ejfg2, $Vgxufordoa4t2, $Vangwoo3ejfg, $Vgxufordoa4t);
							$Vangwoo3ejfgmin = min($Vangwoo3ejfgmin, $Vangwoo3ejfg, $Vangwoo3ejfg1, $Vangwoo3ejfg2);
							$Vgxufordoa4tmin = min($Vgxufordoa4tmin, $Vgxufordoa4t, $Vgxufordoa4t1, $Vgxufordoa4t2);
							$Vangwoo3ejfgmax = max($Vangwoo3ejfgmax, $Vangwoo3ejfg, $Vangwoo3ejfg1, $Vangwoo3ejfg2);
							$Vgxufordoa4tmax = max($Vgxufordoa4tmax, $Vgxufordoa4t, $Vgxufordoa4t1, $Vgxufordoa4t2);
							if ($V14ltds3prprlcoord) {
								$Vangwoo3ejfgoffset = $Vangwoo3ejfg;
								$Vgxufordoa4toffset = $Vgxufordoa4t;
							}
						}
					}
					break;
				}
				case 'S': { 
					foreach ($V1yuhsvbtlvrarams as $Vwcmlurixvzgk => $Vyltsm3nt5sw) {
						$V1yuhsvbtlvrarams[$Vwcmlurixvzgk] = $Vyltsm3nt5sw;
						if ((($Vwcmlurixvzgk + 1) % 4) == 0) {
							if (($Vl0q4noiexi4ey > 0) AND ((strtoupper($V1yuhsvbtlvraths[($Vl0q4noiexi4ey - 1)][1]) == 'C') OR (strtoupper($V1yuhsvbtlvraths[($Vl0q4noiexi4ey - 1)][1]) == 'S'))) {
								$Vangwoo3ejfg1 = (2 * $Vangwoo3ejfg) - $Vangwoo3ejfg2;
								$Vgxufordoa4t1 = (2 * $Vgxufordoa4t) - $Vgxufordoa4t2;
							} else {
								$Vangwoo3ejfg1 = $Vangwoo3ejfg;
								$Vgxufordoa4t1 = $Vgxufordoa4t;
							}
							$Vangwoo3ejfg2 = $V1yuhsvbtlvrarams[($Vwcmlurixvzgk - 3)] + $Vangwoo3ejfgoffset;
							$Vgxufordoa4t2 = $V1yuhsvbtlvrarams[($Vwcmlurixvzgk - 2)] + $Vgxufordoa4toffset;
							$Vangwoo3ejfg = $V1yuhsvbtlvrarams[($Vwcmlurixvzgk - 1)] + $Vangwoo3ejfgoffset;
							$Vgxufordoa4t = $V1yuhsvbtlvrarams[($Vwcmlurixvzgk)] + $Vgxufordoa4toffset;
							$Vnwufml5q3nphis->_outCurve($Vangwoo3ejfg1, $Vgxufordoa4t1, $Vangwoo3ejfg2, $Vgxufordoa4t2, $Vangwoo3ejfg, $Vgxufordoa4t);
							$Vangwoo3ejfgmin = min($Vangwoo3ejfgmin, $Vangwoo3ejfg, $Vangwoo3ejfg1, $Vangwoo3ejfg2);
							$Vgxufordoa4tmin = min($Vgxufordoa4tmin, $Vgxufordoa4t, $Vgxufordoa4t1, $Vgxufordoa4t2);
							$Vangwoo3ejfgmax = max($Vangwoo3ejfgmax, $Vangwoo3ejfg, $Vangwoo3ejfg1, $Vangwoo3ejfg2);
							$Vgxufordoa4tmax = max($Vgxufordoa4tmax, $Vgxufordoa4t, $Vgxufordoa4t1, $Vgxufordoa4t2);
							if ($V14ltds3prprlcoord) {
								$Vangwoo3ejfgoffset = $Vangwoo3ejfg;
								$Vgxufordoa4toffset = $Vgxufordoa4t;
							}
						}
					}
					break;
				}
				case 'Q': { 
					foreach ($V1yuhsvbtlvrarams as $Vwcmlurixvzgk => $Vyltsm3nt5sw) {
						$V1yuhsvbtlvrarams[$Vwcmlurixvzgk] = $Vyltsm3nt5sw;
						if ((($Vwcmlurixvzgk + 1) % 4) == 0) {
							
							$Vangwoo3ejfg1 = $V1yuhsvbtlvrarams[($Vwcmlurixvzgk - 3)] + $Vangwoo3ejfgoffset;
							$Vgxufordoa4t1 = $V1yuhsvbtlvrarams[($Vwcmlurixvzgk - 2)] + $Vgxufordoa4toffset;
							$Vangwoo3ejfga = ($Vangwoo3ejfg + (2 * $Vangwoo3ejfg1)) / 3;
							$Vgxufordoa4ta = ($Vgxufordoa4t + (2 * $Vgxufordoa4t1)) / 3;
							$Vangwoo3ejfg = $V1yuhsvbtlvrarams[($Vwcmlurixvzgk - 1)] + $Vangwoo3ejfgoffset;
							$Vgxufordoa4t = $V1yuhsvbtlvrarams[($Vwcmlurixvzgk)] + $Vgxufordoa4toffset;
							$Vangwoo3ejfgb = ($Vangwoo3ejfg + (2 * $Vangwoo3ejfg1)) / 3;
							$Vgxufordoa4tb = ($Vgxufordoa4t + (2 * $Vgxufordoa4t1)) / 3;
							$Vnwufml5q3nphis->_outCurve($Vangwoo3ejfga, $Vgxufordoa4ta, $Vangwoo3ejfgb, $Vgxufordoa4tb, $Vangwoo3ejfg, $Vgxufordoa4t);
							$Vangwoo3ejfgmin = min($Vangwoo3ejfgmin, $Vangwoo3ejfg, $Vangwoo3ejfga, $Vangwoo3ejfgb);
							$Vgxufordoa4tmin = min($Vgxufordoa4tmin, $Vgxufordoa4t, $Vgxufordoa4ta, $Vgxufordoa4tb);
							$Vangwoo3ejfgmax = max($Vangwoo3ejfgmax, $Vangwoo3ejfg, $Vangwoo3ejfga, $Vangwoo3ejfgb);
							$Vgxufordoa4tmax = max($Vgxufordoa4tmax, $Vgxufordoa4t, $Vgxufordoa4ta, $Vgxufordoa4tb);
							if ($V14ltds3prprlcoord) {
								$Vangwoo3ejfgoffset = $Vangwoo3ejfg;
								$Vgxufordoa4toffset = $Vgxufordoa4t;
							}
						}
					}
					break;
				}
				case 'T': { 
					foreach ($V1yuhsvbtlvrarams as $Vwcmlurixvzgk => $Vyltsm3nt5sw) {
						$V1yuhsvbtlvrarams[$Vwcmlurixvzgk] = $Vyltsm3nt5sw;
						if (($Vwcmlurixvzgk % 2) != 0) {
							if (($Vl0q4noiexi4ey > 0) AND ((strtoupper($V1yuhsvbtlvraths[($Vl0q4noiexi4ey - 1)][1]) == 'Q') OR (strtoupper($V1yuhsvbtlvraths[($Vl0q4noiexi4ey - 1)][1]) == 'T'))) {
								$Vangwoo3ejfg1 = (2 * $Vangwoo3ejfg) - $Vangwoo3ejfg1;
								$Vgxufordoa4t1 = (2 * $Vgxufordoa4t) - $Vgxufordoa4t1;
							} else {
								$Vangwoo3ejfg1 = $Vangwoo3ejfg;
								$Vgxufordoa4t1 = $Vgxufordoa4t;
							}
							
							$Vangwoo3ejfga = ($Vangwoo3ejfg + (2 * $Vangwoo3ejfg1)) / 3;
							$Vgxufordoa4ta = ($Vgxufordoa4t + (2 * $Vgxufordoa4t1)) / 3;
							$Vangwoo3ejfg = $V1yuhsvbtlvrarams[($Vwcmlurixvzgk - 1)] + $Vangwoo3ejfgoffset;
							$Vgxufordoa4t = $V1yuhsvbtlvrarams[($Vwcmlurixvzgk)] + $Vgxufordoa4toffset;
							$Vangwoo3ejfgb = ($Vangwoo3ejfg + (2 * $Vangwoo3ejfg1)) / 3;
							$Vgxufordoa4tb = ($Vgxufordoa4t + (2 * $Vgxufordoa4t1)) / 3;
							$Vnwufml5q3nphis->_outCurve($Vangwoo3ejfga, $Vgxufordoa4ta, $Vangwoo3ejfgb, $Vgxufordoa4tb, $Vangwoo3ejfg, $Vgxufordoa4t);
							$Vangwoo3ejfgmin = min($Vangwoo3ejfgmin, $Vangwoo3ejfg, $Vangwoo3ejfga, $Vangwoo3ejfgb);
							$Vgxufordoa4tmin = min($Vgxufordoa4tmin, $Vgxufordoa4t, $Vgxufordoa4ta, $Vgxufordoa4tb);
							$Vangwoo3ejfgmax = max($Vangwoo3ejfgmax, $Vangwoo3ejfg, $Vangwoo3ejfga, $Vangwoo3ejfgb);
							$Vgxufordoa4tmax = max($Vgxufordoa4tmax, $Vgxufordoa4t, $Vgxufordoa4ta, $Vgxufordoa4tb);
							if ($V14ltds3prprlcoord) {
								$Vangwoo3ejfgoffset = $Vangwoo3ejfg;
								$Vgxufordoa4toffset = $Vgxufordoa4t;
							}
						}
					}
					break;
				}
				case 'A': { 
					foreach ($V1yuhsvbtlvrarams as $Vwcmlurixvzgk => $Vyltsm3nt5sw) {
						$V1yuhsvbtlvrarams[$Vwcmlurixvzgk] = $Vyltsm3nt5sw;
						if ((($Vwcmlurixvzgk + 1) % 7) == 0) {
							$Vangwoo3ejfg0 = $Vangwoo3ejfg;
							$Vgxufordoa4t0 = $Vgxufordoa4t;
							$Vfhkt4vbeualx = abs($V1yuhsvbtlvrarams[($Vwcmlurixvzgk - 6)]);
							$Vfhkt4vbeualy = abs($V1yuhsvbtlvrarams[($Vwcmlurixvzgk - 5)]);
							$Vudz4oh4qikung = -$Vfhkt4vbeualawparams[($Vwcmlurixvzgk - 4)];
							$Vudz4oh4qikungle = deg2rad($Vudz4oh4qikung);
							$Vxb0ra0fqzn2a = $Vfhkt4vbeualawparams[($Vwcmlurixvzgk - 3)]; 
							$Vxb0ra0fqzn2s = $Vfhkt4vbeualawparams[($Vwcmlurixvzgk - 2)]; 
							$Vangwoo3ejfg = $V1yuhsvbtlvrarams[($Vwcmlurixvzgk - 1)] + $Vangwoo3ejfgoffset;
							$Vgxufordoa4t = $V1yuhsvbtlvrarams[$Vwcmlurixvzgk] + $Vgxufordoa4toffset;
							if ((abs($Vangwoo3ejfg0 - $Vangwoo3ejfg) < $Vetludueqmbtinlen) AND (abs($Vgxufordoa4t0 - $Vgxufordoa4t) < $Vetludueqmbtinlen)) {
								
								$Vangwoo3ejfgmin = min($Vangwoo3ejfgmin, $Vangwoo3ejfg);
								$Vgxufordoa4tmin = min($Vgxufordoa4tmin, $Vgxufordoa4t);
								$Vangwoo3ejfgmax = max($Vangwoo3ejfgmax, $Vangwoo3ejfg);
								$Vgxufordoa4tmax = max($Vgxufordoa4tmax, $Vgxufordoa4t);
							} else {
								$Vwcmlurixvzgos_ang = cos($Vudz4oh4qikungle);
								$Vvt20qqut4buin_ang = sin($Vudz4oh4qikungle);
								$Vudz4oh4qiku = (($Vangwoo3ejfg0 - $Vangwoo3ejfg) / 2);
								$Vpq3acakq35c = (($Vgxufordoa4t0 - $Vgxufordoa4t) / 2);
								$Vangwoo3ejfga = ($Vudz4oh4qiku * $Vwcmlurixvzgos_ang) - ($Vpq3acakq35c * $Vvt20qqut4buin_ang);
								$Vgxufordoa4ta = ($Vudz4oh4qiku * $Vvt20qqut4buin_ang) + ($Vpq3acakq35c * $Vwcmlurixvzgos_ang);
								$Vfhkt4vbeualx2 = $Vfhkt4vbeualx * $Vfhkt4vbeualx;
								$Vfhkt4vbeualy2 = $Vfhkt4vbeualy * $Vfhkt4vbeualy;
								$Vangwoo3ejfga2 = $Vangwoo3ejfga * $Vangwoo3ejfga;
								$Vgxufordoa4ta2 = $Vgxufordoa4ta * $Vgxufordoa4ta;
								$Vc0aiseldrl3elta = ($Vangwoo3ejfga2 / $Vfhkt4vbeualx2) + ($Vgxufordoa4ta2 / $Vfhkt4vbeualy2);
								if ($Vc0aiseldrl3elta > 1) {
									$Vfhkt4vbeualx *= sqrt($Vc0aiseldrl3elta);
									$Vfhkt4vbeualy *= sqrt($Vc0aiseldrl3elta);
									$Vfhkt4vbeualx2 = $Vfhkt4vbeualx * $Vfhkt4vbeualx;
									$Vfhkt4vbeualy2 = $Vfhkt4vbeualy * $Vfhkt4vbeualy;
								}
								$Vgv45dfhsyuhumerator = (($Vfhkt4vbeualx2 * $Vfhkt4vbeualy2) - ($Vfhkt4vbeualx2 * $Vgxufordoa4ta2) - ($Vfhkt4vbeualy2 * $Vangwoo3ejfga2));
								if ($Vgv45dfhsyuhumerator < 0) {
									$Vfhkt4vbeualoot = 0;
								} else {
									$Vfhkt4vbeualoot = sqrt($Vgv45dfhsyuhumerator / (($Vfhkt4vbeualx2 * $Vgxufordoa4ta2) + ($Vfhkt4vbeualy2 * $Vangwoo3ejfga2)));
								}
								if ($Vxb0ra0fqzn2a == $Vxb0ra0fqzn2s){
									$Vfhkt4vbeualoot *= -1;
								}
								$Vwcmlurixvzgax = $Vfhkt4vbeualoot * (($Vfhkt4vbeualx * $Vgxufordoa4ta) / $Vfhkt4vbeualy);
								$Vwcmlurixvzgay = -$Vfhkt4vbeualoot * (($Vfhkt4vbeualy * $Vangwoo3ejfga) / $Vfhkt4vbeualx);
								
								$Vwcmlurixvzgx = ($Vwcmlurixvzgax * $Vwcmlurixvzgos_ang) - ($Vwcmlurixvzgay * $Vvt20qqut4buin_ang) + (($Vangwoo3ejfg0 + $Vangwoo3ejfg) / 2);
								$Vwcmlurixvzgy = ($Vwcmlurixvzgax * $Vvt20qqut4buin_ang) + ($Vwcmlurixvzgay * $Vwcmlurixvzgos_ang) + (($Vgxufordoa4t0 + $Vgxufordoa4t) / 2);
								
								$Vudz4oh4qikungs = TCPDF_STATIC::getVectorsAngle(1, 0, (($Vangwoo3ejfga - $Vwcmlurixvzgax) / $Vfhkt4vbeualx), (($Vwcmlurixvzgay - $Vgxufordoa4ta) / $Vfhkt4vbeualy));
								$Vc0aiseldrl3ang = TCPDF_STATIC::getVectorsAngle((($Vangwoo3ejfga - $Vwcmlurixvzgax) / $Vfhkt4vbeualx), (($Vgxufordoa4ta - $Vwcmlurixvzgay) / $Vfhkt4vbeualy), ((-$Vangwoo3ejfga - $Vwcmlurixvzgax) / $Vfhkt4vbeualx), ((-$Vgxufordoa4ta - $Vwcmlurixvzgay) / $Vfhkt4vbeualy));
								if (($Vxb0ra0fqzn2s == 0) AND ($Vc0aiseldrl3ang > 0)) {
									$Vc0aiseldrl3ang -= (2 * M_PI);
								} elseif (($Vxb0ra0fqzn2s == 1) AND ($Vc0aiseldrl3ang < 0)) {
									$Vc0aiseldrl3ang += (2 * M_PI);
								}
								$Vudz4oh4qikungf = $Vudz4oh4qikungs - $Vc0aiseldrl3ang;
								if ((($Vxb0ra0fqzn2s == 0) AND ($Vudz4oh4qikungs > $Vudz4oh4qikungf)) OR (($Vxb0ra0fqzn2s == 1) AND ($Vudz4oh4qikungs < $Vudz4oh4qikungf))) {
									
									$V3p0tae11ldw = $Vudz4oh4qikungs;
									$Vudz4oh4qikungs = $Vudz4oh4qikungf;
									$Vudz4oh4qikungf = $V3p0tae11ldw;
								}
								$Vudz4oh4qikungs = round(rad2deg($Vudz4oh4qikungs), 6);
								$Vudz4oh4qikungf = round(rad2deg($Vudz4oh4qikungf), 6);
								
								if (($Vudz4oh4qikungs < 0) AND ($Vudz4oh4qikungf < 0)) {
									$Vudz4oh4qikungs += 360;
									$Vudz4oh4qikungf += 360;
								}
								$V1yuhsvbtlvrie = false;
								if (($Vl0q4noiexi4ey == 0) AND (isset($V1yuhsvbtlvraths[($Vl0q4noiexi4ey + 1)][1])) AND (trim($V1yuhsvbtlvraths[($Vl0q4noiexi4ey + 1)][1]) == 'z')) {
									$V1yuhsvbtlvrie = true;
								}
								list($Vudz4oh4qikuxmin, $Vudz4oh4qikuymin, $Vudz4oh4qikuxmax, $Vudz4oh4qikuymax) = $Vnwufml5q3nphis->_outellipticalarc($Vwcmlurixvzgx, $Vwcmlurixvzgy, $Vfhkt4vbeualx, $Vfhkt4vbeualy, $Vudz4oh4qikung, $Vudz4oh4qikungs, $Vudz4oh4qikungf, $V1yuhsvbtlvrie, 2, false, ($Vxb0ra0fqzn2s == 0), true);
								$Vangwoo3ejfgmin = min($Vangwoo3ejfgmin, $Vangwoo3ejfg, $Vudz4oh4qikuxmin);
								$Vgxufordoa4tmin = min($Vgxufordoa4tmin, $Vgxufordoa4t, $Vudz4oh4qikuymin);
								$Vangwoo3ejfgmax = max($Vangwoo3ejfgmax, $Vangwoo3ejfg, $Vudz4oh4qikuxmax);
								$Vgxufordoa4tmax = max($Vgxufordoa4tmax, $Vgxufordoa4t, $Vudz4oh4qikuymax);
							}
							if ($V14ltds3prprlcoord) {
								$Vangwoo3ejfgoffset = $Vangwoo3ejfg;
								$Vgxufordoa4toffset = $Vgxufordoa4t;
							}
						}
					}
					break;
				}
				case 'Z': {
					$Vnwufml5q3nphis->_out('h');
					break;
				}
			}
			$Vxb0ra0fqzn2irstcmd = false;
		} 
		if (!empty($Vjvwtdkog1to)) {
			$Vnwufml5q3nphis->_out($Vjvwtdkog1to);
		}
		return array($Vangwoo3ejfgmin, $Vgxufordoa4tmin, ($Vangwoo3ejfgmax - $Vangwoo3ejfgmin), ($Vgxufordoa4tmax - $Vgxufordoa4tmin));
	}

	
	protected function removeTagNamespace($Vgv45dfhsyuhame) {
		if(strpos($Vgv45dfhsyuhame, ':') !== false) {
			$V1yuhsvbtlvrarts = explode(':', $Vgv45dfhsyuhame);
			return $V1yuhsvbtlvrarts[(sizeof($V1yuhsvbtlvrarts) - 1)];
		}
		return $Vgv45dfhsyuhame;
	}
		
	
	protected function startSVGElementHandler($V1yuhsvbtlvrarser, $Vgv45dfhsyuhame, $Vudz4oh4qikuttribs, $Vwcmlurixvzgtm=array()) {
		$Vgv45dfhsyuhame = $Vnwufml5q3nphis->removeTagNamespace($Vgv45dfhsyuhame);
		
		if ($Vnwufml5q3nphis->svgclipmode) {
			$Vnwufml5q3nphis->svgclippaths[$Vnwufml5q3nphis->svgclipid][] = array('name' => $Vgv45dfhsyuhame, 'attribs' => $Vudz4oh4qikuttribs, 'tm' => $Vnwufml5q3nphis->svgcliptm[$Vnwufml5q3nphis->svgclipid]);
			return;
		}
		if ($Vnwufml5q3nphis->svgdefsmode AND !in_array($Vgv45dfhsyuhame, array('clipPath', 'linearGradient', 'radialGradient', 'stop'))) {
			if (isset($Vudz4oh4qikuttribs['id'])) {
				$Vudz4oh4qikuttribs['child_elements'] = array();
				$Vnwufml5q3nphis->svgdefs[$Vudz4oh4qikuttribs['id']] = array('name' => $Vgv45dfhsyuhame, 'attribs' => $Vudz4oh4qikuttribs);
				return;
			}
			if (end($Vnwufml5q3nphis->svgdefs) !== FALSE) {
				$Vx3g4ytafo1aast_svgdefs_id = key($Vnwufml5q3nphis->svgdefs);
				if (isset($Vnwufml5q3nphis->svgdefs[$Vx3g4ytafo1aast_svgdefs_id]['attribs']['child_elements'])) {
					$Vudz4oh4qikuttribs['id'] = 'DF_'.(count($Vnwufml5q3nphis->svgdefs[$Vx3g4ytafo1aast_svgdefs_id]['attribs']['child_elements']) + 1);
					$Vnwufml5q3nphis->svgdefs[$Vx3g4ytafo1aast_svgdefs_id]['attribs']['child_elements'][$Vudz4oh4qikuttribs['id']] = array('name' => $Vgv45dfhsyuhame, 'attribs' => $Vudz4oh4qikuttribs);
					return;
				}
			}
			return;
		}
		$Vwcmlurixvzglipping = false;
		if ($V1yuhsvbtlvrarser == 'clip-path') {
			
			$Vwcmlurixvzglipping = true;
		}
		
		$V1yuhsvbtlvrrev_svgstyle = $Vnwufml5q3nphis->svgstyles[max(0,(count($Vnwufml5q3nphis->svgstyles) - 1))]; 
		$Vvt20qqut4buvgstyle = $Vnwufml5q3nphis->svgstyles[0]; 
		if ($Vwcmlurixvzglipping AND !isset($Vudz4oh4qikuttribs['fill']) AND (!isset($Vudz4oh4qikuttribs['style']) OR (!preg_match('/[;\"\s]{1}fill[\s]*:[\s]*([^;\"]*)/si', $Vudz4oh4qikuttribs['style'], $Vudz4oh4qikuttrval)))) {
			
			$Vudz4oh4qikuttribs['fill'] = 'none';
		}
		if (isset($Vudz4oh4qikuttribs['style']) AND !TCPDF_STATIC::empty_string($Vudz4oh4qikuttribs['style']) AND ($Vudz4oh4qikuttribs['style'][0] != ';')) {
			
			$Vudz4oh4qikuttribs['style'] = ';'.$Vudz4oh4qikuttribs['style'];
		}
		foreach ($V1yuhsvbtlvrrev_svgstyle as $Vl0q4noiexi4ey => $Vxt4wx3pvtez) {
			if (in_array($Vl0q4noiexi4ey, TCPDF_IMAGES::$Vvt20qqut4buvginheritprop)) {
				
				$Vvt20qqut4buvgstyle[$Vl0q4noiexi4ey] = $Vxt4wx3pvtez;
			}
			if (isset($Vudz4oh4qikuttribs[$Vl0q4noiexi4ey]) AND !TCPDF_STATIC::empty_string($Vudz4oh4qikuttribs[$Vl0q4noiexi4ey])) {
				
				if ($Vudz4oh4qikuttribs[$Vl0q4noiexi4ey] == 'inherit') {
					$Vvt20qqut4buvgstyle[$Vl0q4noiexi4ey] = $Vxt4wx3pvtez;
				} else {
					$Vvt20qqut4buvgstyle[$Vl0q4noiexi4ey] = $Vudz4oh4qikuttribs[$Vl0q4noiexi4ey];
				}
			} elseif (isset($Vudz4oh4qikuttribs['style']) AND !TCPDF_STATIC::empty_string($Vudz4oh4qikuttribs['style'])) {
				
				$Vudz4oh4qikuttrval = array();
				if (preg_match('/[;\"\s]{1}'.$Vl0q4noiexi4ey.'[\s]*:[\s]*([^;\"]*)/si', $Vudz4oh4qikuttribs['style'], $Vudz4oh4qikuttrval) AND isset($Vudz4oh4qikuttrval[1])) {
					if ($Vudz4oh4qikuttrval[1] == 'inherit') {
						$Vvt20qqut4buvgstyle[$Vl0q4noiexi4ey] = $Vxt4wx3pvtez;
					} else {
						$Vvt20qqut4buvgstyle[$Vl0q4noiexi4ey] = $Vudz4oh4qikuttrval[1];
					}
				}
			}
		}
		
		if (!empty($Vwcmlurixvzgtm)) {
			$Vnwufml5q3npm = $Vwcmlurixvzgtm;
		} else {
			$Vnwufml5q3npm = array(1,0,0,1,0,0);
		}
		if (isset($Vudz4oh4qikuttribs['transform']) AND !empty($Vudz4oh4qikuttribs['transform'])) {
			$Vnwufml5q3npm = TCPDF_STATIC::getTransformationMatrixProduct($Vnwufml5q3npm, TCPDF_STATIC::getSVGTransformMatrix($Vudz4oh4qikuttribs['transform']));
		}
		$Vvt20qqut4buvgstyle['transfmatrix'] = $Vnwufml5q3npm;
		$V55vc4mewy5wnvisible = false;
		if (($Vvt20qqut4buvgstyle['visibility'] == 'hidden') OR ($Vvt20qqut4buvgstyle['visibility'] == 'collapse') OR ($Vvt20qqut4buvgstyle['display'] == 'none')) {
			
			$V55vc4mewy5wnvisible = true;
		}
		
		switch($Vgv45dfhsyuhame) {
			case 'defs': {
				$Vnwufml5q3nphis->svgdefsmode = true;
				break;
			}
			
			case 'clipPath': {
				if ($V55vc4mewy5wnvisible) {
					break;
				}
				$Vnwufml5q3nphis->svgclipmode = true;
				if (!isset($Vudz4oh4qikuttribs['id'])) {
					$Vudz4oh4qikuttribs['id'] = 'CP_'.(count($Vnwufml5q3nphis->svgcliptm) + 1);
				}
				$Vnwufml5q3nphis->svgclipid = $Vudz4oh4qikuttribs['id'];
				$Vnwufml5q3nphis->svgclippaths[$Vnwufml5q3nphis->svgclipid] = array();
				$Vnwufml5q3nphis->svgcliptm[$Vnwufml5q3nphis->svgclipid] = $Vnwufml5q3npm;
				break;
			}
			case 'svg': {
				
				if(++$Vnwufml5q3nphis->svg_tag_depth <= 1) {
					break;
				}
				
				array_push($Vnwufml5q3nphis->svgstyles, $Vvt20qqut4buvgstyle);
				$Vnwufml5q3nphis->StartTransform();
				$Vvt20qqut4buvgX = (isset($Vudz4oh4qikuttribs['x'])?$Vudz4oh4qikuttribs['x']:0);
				$Vvt20qqut4buvgY = (isset($Vudz4oh4qikuttribs['y'])?$Vudz4oh4qikuttribs['y']:0);
				$Vvt20qqut4buvgW = (isset($Vudz4oh4qikuttribs['width'])?$Vudz4oh4qikuttribs['width']:0);
				$Vvt20qqut4buvgH = (isset($Vudz4oh4qikuttribs['height'])?$Vudz4oh4qikuttribs['height']:0);
				
				$Vnwufml5q3npm = TCPDF_STATIC::getTransformationMatrixProduct($Vnwufml5q3npm, array( 1, 0, 0, 1, $Vvt20qqut4buvgX, $Vvt20qqut4buvgY));
				$Vnwufml5q3nphis->SVGTransform($Vnwufml5q3npm);
				
				$Vangwoo3ejfg = 0;
				$Vgxufordoa4t = 0;
				$Vim12f51jw5r = (isset($Vudz4oh4qikuttribs['width'])?$Vnwufml5q3nphis->getHTMLUnitToUnits($Vudz4oh4qikuttribs['width'], 0, $Vnwufml5q3nphis->svgunit, false):$Vnwufml5q3nphis->w);
				$Vvjxcwrp4tjq = (isset($Vudz4oh4qikuttribs['height'])?$Vnwufml5q3nphis->getHTMLUnitToUnits($Vudz4oh4qikuttribs['height'], 0, $Vnwufml5q3nphis->svgunit, false):$Vnwufml5q3nphis->h);
				
				$Vnwufml5q3nphis->Rect($Vangwoo3ejfg, $Vgxufordoa4t, $Vim12f51jw5r, $Vvjxcwrp4tjq, 'CNZ', array(), array());
				
				if (isset($Vudz4oh4qikuttribs['viewBox'])) {
					$V3p0tae11ldw = array();
					preg_match_all("/[0-9]+/", $Vudz4oh4qikuttribs['viewBox'], $V3p0tae11ldw);
					$V3p0tae11ldw = $V3p0tae11ldw[0];
					if (sizeof($V3p0tae11ldw) == 4) {
						$Vz0hmukhwa4zx = $V3p0tae11ldw[0];
						$Vz0hmukhwa4zy = $V3p0tae11ldw[1];
						$Vz0hmukhwa4zw = $V3p0tae11ldw[2];
						$Vz0hmukhwa4zh = $V3p0tae11ldw[3];
						
						$V3p0tae11ldw = array();
						$Vudz4oh4qikuspectX = 'xMid';
						$Vudz4oh4qikuspectY = 'YMid';
						$Vxb0ra0fqzn2it = 'meet';
						if (isset($Vudz4oh4qikuttribs['preserveAspectRatio'])) {
							if($Vudz4oh4qikuttribs['preserveAspectRatio'] == 'none') {
								$Vxb0ra0fqzn2it = 'none';
							} else {
								preg_match_all('/[a-zA-Z]+/', $Vudz4oh4qikuttribs['preserveAspectRatio'], $V3p0tae11ldw);
								$V3p0tae11ldw = $V3p0tae11ldw[0];
								if ((sizeof($V3p0tae11ldw) == 2) AND (strlen($V3p0tae11ldw[0]) == 8) AND (in_array($V3p0tae11ldw[1], array('meet', 'slice', 'none')))) {
									$Vudz4oh4qikuspectX = substr($V3p0tae11ldw[0], 0, 4);
									$Vudz4oh4qikuspectY = substr($V3p0tae11ldw[0], 4, 4);
									$Vxb0ra0fqzn2it = $V3p0tae11ldw[1];
								}
							}
						}
						$Vim12f51jw5rr = ($Vvt20qqut4buvgW / $Vz0hmukhwa4zw);
						$Vvjxcwrp4tjqr = ($Vvt20qqut4buvgH / $Vz0hmukhwa4zh);
						$Vudz4oh4qikux = $Vudz4oh4qikuy = 0;
						if ((($Vxb0ra0fqzn2it == 'meet') AND ($Vvjxcwrp4tjqr < $Vim12f51jw5rr)) OR (($Vxb0ra0fqzn2it == 'slice') AND ($Vvjxcwrp4tjqr > $Vim12f51jw5rr))) {
							if ($Vudz4oh4qikuspectX == 'xMax') {
								$Vudz4oh4qikux = (($Vz0hmukhwa4zw * ($Vim12f51jw5rr / $Vvjxcwrp4tjqr)) - $Vz0hmukhwa4zw);
							}
							if ($Vudz4oh4qikuspectX == 'xMid') {
								$Vudz4oh4qikux = ((($Vz0hmukhwa4zw * ($Vim12f51jw5rr / $Vvjxcwrp4tjqr)) - $Vz0hmukhwa4zw) / 2);
							}
							$Vim12f51jw5rr = $Vvjxcwrp4tjqr;
						} elseif ((($Vxb0ra0fqzn2it == 'meet') AND ($Vvjxcwrp4tjqr > $Vim12f51jw5rr)) OR (($Vxb0ra0fqzn2it == 'slice') AND ($Vvjxcwrp4tjqr < $Vim12f51jw5rr))) {
							if ($Vudz4oh4qikuspectY == 'YMax') {
								$Vudz4oh4qikuy = (($Vz0hmukhwa4zh * ($Vvjxcwrp4tjqr / $Vim12f51jw5rr)) - $Vz0hmukhwa4zh);
							}
							if ($Vudz4oh4qikuspectY == 'YMid') {
								$Vudz4oh4qikuy = ((($Vz0hmukhwa4zh * ($Vvjxcwrp4tjqr / $Vim12f51jw5rr)) - $Vz0hmukhwa4zh) / 2);
							}
							$Vvjxcwrp4tjqr = $Vim12f51jw5rr;
						}
						$Vgv45dfhsyuhewtm = array($Vim12f51jw5rr, 0, 0, $Vvjxcwrp4tjqr, (($Vim12f51jw5rr * ($Vudz4oh4qikux - $Vz0hmukhwa4zx)) - $Vvt20qqut4buvgX), (($Vvjxcwrp4tjqr * ($Vudz4oh4qikuy - $Vz0hmukhwa4zy)) - $Vvt20qqut4buvgY));
						$Vnwufml5q3npm = TCPDF_STATIC::getTransformationMatrixProduct($Vnwufml5q3npm, $Vgv45dfhsyuhewtm);
						$Vnwufml5q3nphis->SVGTransform($Vnwufml5q3npm);
					}
				}
				$Vnwufml5q3nphis->setSVGStyles($Vvt20qqut4buvgstyle, $V1yuhsvbtlvrrev_svgstyle);
				break;
			}
			case 'g': {
				
				array_push($Vnwufml5q3nphis->svgstyles, $Vvt20qqut4buvgstyle);
				$Vnwufml5q3nphis->StartTransform();
				$Vangwoo3ejfg = (isset($Vudz4oh4qikuttribs['x'])?$Vudz4oh4qikuttribs['x']:0);
				$Vgxufordoa4t = (isset($Vudz4oh4qikuttribs['y'])?$Vudz4oh4qikuttribs['y']:0);
				$Vim12f51jw5r = 1;
				$Vvjxcwrp4tjq = 1;
				$Vnwufml5q3npm = TCPDF_STATIC::getTransformationMatrixProduct($Vnwufml5q3npm, array($Vim12f51jw5r, 0, 0, $Vvjxcwrp4tjq, $Vangwoo3ejfg, $Vgxufordoa4t));
				$Vnwufml5q3nphis->SVGTransform($Vnwufml5q3npm);
				$Vnwufml5q3nphis->setSVGStyles($Vvt20qqut4buvgstyle, $V1yuhsvbtlvrrev_svgstyle);
				break;
			}
			case 'linearGradient': {
				if ($Vnwufml5q3nphis->pdfa_mode) {
					break;
				}
				if (!isset($Vudz4oh4qikuttribs['id'])) {
					$Vudz4oh4qikuttribs['id'] = 'GR_'.(count($Vnwufml5q3nphis->svggradients) + 1);
				}
				$Vnwufml5q3nphis->svggradientid = $Vudz4oh4qikuttribs['id'];
				$Vnwufml5q3nphis->svggradients[$Vnwufml5q3nphis->svggradientid] = array();
				$Vnwufml5q3nphis->svggradients[$Vnwufml5q3nphis->svggradientid]['type'] = 2;
				$Vnwufml5q3nphis->svggradients[$Vnwufml5q3nphis->svggradientid]['stops'] = array();
				if (isset($Vudz4oh4qikuttribs['gradientUnits'])) {
					$Vnwufml5q3nphis->svggradients[$Vnwufml5q3nphis->svggradientid]['gradientUnits'] = $Vudz4oh4qikuttribs['gradientUnits'];
				} else {
					$Vnwufml5q3nphis->svggradients[$Vnwufml5q3nphis->svggradientid]['gradientUnits'] = 'objectBoundingBox';
				}
				
				if (((!isset($Vudz4oh4qikuttribs['x1'])) AND (!isset($Vudz4oh4qikuttribs['y1'])) AND (!isset($Vudz4oh4qikuttribs['x2'])) AND (!isset($Vudz4oh4qikuttribs['y2'])))
					OR ((isset($Vudz4oh4qikuttribs['x1']) AND (substr($Vudz4oh4qikuttribs['x1'], -1) == '%'))
						OR (isset($Vudz4oh4qikuttribs['y1']) AND (substr($Vudz4oh4qikuttribs['y1'], -1) == '%'))
						OR (isset($Vudz4oh4qikuttribs['x2']) AND (substr($Vudz4oh4qikuttribs['x2'], -1) == '%'))
						OR (isset($Vudz4oh4qikuttribs['y2']) AND (substr($Vudz4oh4qikuttribs['y2'], -1) == '%')))) {
					$Vnwufml5q3nphis->svggradients[$Vnwufml5q3nphis->svggradientid]['mode'] = 'percentage';
				} else {
					$Vnwufml5q3nphis->svggradients[$Vnwufml5q3nphis->svggradientid]['mode'] = 'measure';
				}
				$Vangwoo3ejfg1 = (isset($Vudz4oh4qikuttribs['x1'])?$Vudz4oh4qikuttribs['x1']:'0');
				$Vgxufordoa4t1 = (isset($Vudz4oh4qikuttribs['y1'])?$Vudz4oh4qikuttribs['y1']:'0');
				$Vangwoo3ejfg2 = (isset($Vudz4oh4qikuttribs['x2'])?$Vudz4oh4qikuttribs['x2']:'100');
				$Vgxufordoa4t2 = (isset($Vudz4oh4qikuttribs['y2'])?$Vudz4oh4qikuttribs['y2']:'0');
				if (isset($Vudz4oh4qikuttribs['gradientTransform'])) {
					$Vnwufml5q3nphis->svggradients[$Vnwufml5q3nphis->svggradientid]['gradientTransform'] = TCPDF_STATIC::getSVGTransformMatrix($Vudz4oh4qikuttribs['gradientTransform']);
				}
				$Vnwufml5q3nphis->svggradients[$Vnwufml5q3nphis->svggradientid]['coords'] = array($Vangwoo3ejfg1, $Vgxufordoa4t1, $Vangwoo3ejfg2, $Vgxufordoa4t2);
				if (isset($Vudz4oh4qikuttribs['xlink:href']) AND !empty($Vudz4oh4qikuttribs['xlink:href'])) {
					
					$Vnwufml5q3nphis->svggradients[$Vnwufml5q3nphis->svggradientid]['xref'] = substr($Vudz4oh4qikuttribs['xlink:href'], 1);
				}
				break;
			}
			case 'radialGradient': {
				if ($Vnwufml5q3nphis->pdfa_mode) {
					break;
				}
				if (!isset($Vudz4oh4qikuttribs['id'])) {
					$Vudz4oh4qikuttribs['id'] = 'GR_'.(count($Vnwufml5q3nphis->svggradients) + 1);
				}
				$Vnwufml5q3nphis->svggradientid = $Vudz4oh4qikuttribs['id'];
				$Vnwufml5q3nphis->svggradients[$Vnwufml5q3nphis->svggradientid] = array();
				$Vnwufml5q3nphis->svggradients[$Vnwufml5q3nphis->svggradientid]['type'] = 3;
				$Vnwufml5q3nphis->svggradients[$Vnwufml5q3nphis->svggradientid]['stops'] = array();
				if (isset($Vudz4oh4qikuttribs['gradientUnits'])) {
					$Vnwufml5q3nphis->svggradients[$Vnwufml5q3nphis->svggradientid]['gradientUnits'] = $Vudz4oh4qikuttribs['gradientUnits'];
				} else {
					$Vnwufml5q3nphis->svggradients[$Vnwufml5q3nphis->svggradientid]['gradientUnits'] = 'objectBoundingBox';
				}
				
				if (((!isset($Vudz4oh4qikuttribs['cx'])) AND (!isset($Vudz4oh4qikuttribs['cy'])))
					OR ((isset($Vudz4oh4qikuttribs['cx']) AND (substr($Vudz4oh4qikuttribs['cx'], -1) == '%'))
					OR (isset($Vudz4oh4qikuttribs['cy']) AND (substr($Vudz4oh4qikuttribs['cy'], -1) == '%')))) {
					$Vnwufml5q3nphis->svggradients[$Vnwufml5q3nphis->svggradientid]['mode'] = 'percentage';
				} elseif (isset($Vudz4oh4qikuttribs['r']) AND is_numeric($Vudz4oh4qikuttribs['r']) AND ($Vudz4oh4qikuttribs['r']) <= 1) {
					$Vnwufml5q3nphis->svggradients[$Vnwufml5q3nphis->svggradientid]['mode'] = 'ratio';
				} else {
					$Vnwufml5q3nphis->svggradients[$Vnwufml5q3nphis->svggradientid]['mode'] = 'measure';
				}
				$Vwcmlurixvzgx = (isset($Vudz4oh4qikuttribs['cx']) ? $Vudz4oh4qikuttribs['cx'] : 0.5);
				$Vwcmlurixvzgy = (isset($Vudz4oh4qikuttribs['cy']) ? $Vudz4oh4qikuttribs['cy'] : 0.5);
				$Vxb0ra0fqzn2x = (isset($Vudz4oh4qikuttribs['fx']) ? $Vudz4oh4qikuttribs['fx'] : $Vwcmlurixvzgx);
				$Vxb0ra0fqzn2y = (isset($Vudz4oh4qikuttribs['fy']) ? $Vudz4oh4qikuttribs['fy'] : $Vwcmlurixvzgy);
				$Vfhkt4vbeual = (isset($Vudz4oh4qikuttribs['r']) ? $Vudz4oh4qikuttribs['r'] : 0.5);
				if (isset($Vudz4oh4qikuttribs['gradientTransform'])) {
					$Vnwufml5q3nphis->svggradients[$Vnwufml5q3nphis->svggradientid]['gradientTransform'] = TCPDF_STATIC::getSVGTransformMatrix($Vudz4oh4qikuttribs['gradientTransform']);
				}
				$Vnwufml5q3nphis->svggradients[$Vnwufml5q3nphis->svggradientid]['coords'] = array($Vwcmlurixvzgx, $Vwcmlurixvzgy, $Vxb0ra0fqzn2x, $Vxb0ra0fqzn2y, $Vfhkt4vbeual);
				if (isset($Vudz4oh4qikuttribs['xlink:href']) AND !empty($Vudz4oh4qikuttribs['xlink:href'])) {
					
					$Vnwufml5q3nphis->svggradients[$Vnwufml5q3nphis->svggradientid]['xref'] = substr($Vudz4oh4qikuttribs['xlink:href'], 1);
				}
				break;
			}
			case 'stop': {
				
				if (substr($Vudz4oh4qikuttribs['offset'], -1) == '%') {
					$Vcwtctilquugset = floatval(substr($Vudz4oh4qikuttribs['offset'], -1)) / 100;
				} else {
					$Vcwtctilquugset = floatval($Vudz4oh4qikuttribs['offset']);
					if ($Vcwtctilquugset > 1) {
						$Vcwtctilquugset /= 100;
					}
				}
				$Vvt20qqut4butop_color = isset($Vvt20qqut4buvgstyle['stop-color'])?TCPDF_COLORS::convertHTMLColorToDec($Vvt20qqut4buvgstyle['stop-color'], $Vnwufml5q3nphis->spot_colors):'black';
				$Vjvwtdkog1toacity = isset($Vvt20qqut4buvgstyle['stop-opacity'])?$Vvt20qqut4buvgstyle['stop-opacity']:1;
				$Vnwufml5q3nphis->svggradients[$Vnwufml5q3nphis->svggradientid]['stops'][] = array('offset' => $Vcwtctilquugset, 'color' => $Vvt20qqut4butop_color, 'opacity' => $Vjvwtdkog1toacity);
				break;
			}
			
			case 'path': {
				if ($V55vc4mewy5wnvisible) {
					break;
				}
				if (isset($Vudz4oh4qikuttribs['d'])) {
					$Vc0aiseldrl3 = trim($Vudz4oh4qikuttribs['d']);
					if (!empty($Vc0aiseldrl3)) {
						$Vangwoo3ejfg = (isset($Vudz4oh4qikuttribs['x'])?$Vudz4oh4qikuttribs['x']:0);
						$Vgxufordoa4t = (isset($Vudz4oh4qikuttribs['y'])?$Vudz4oh4qikuttribs['y']:0);
						$Vim12f51jw5r = (isset($Vudz4oh4qikuttribs['width'])?$Vudz4oh4qikuttribs['width']:1);
						$Vvjxcwrp4tjq = (isset($Vudz4oh4qikuttribs['height'])?$Vudz4oh4qikuttribs['height']:1);
						$Vnwufml5q3npm = TCPDF_STATIC::getTransformationMatrixProduct($Vnwufml5q3npm, array($Vim12f51jw5r, 0, 0, $Vvjxcwrp4tjq, $Vangwoo3ejfg, $Vgxufordoa4t));
						if ($Vwcmlurixvzglipping) {
							$Vnwufml5q3nphis->SVGTransform($Vnwufml5q3npm);
							$Vnwufml5q3nphis->SVGPath($Vc0aiseldrl3, 'CNZ');
						} else {
							$Vnwufml5q3nphis->StartTransform();
							$Vnwufml5q3nphis->SVGTransform($Vnwufml5q3npm);
							$Vk1y4jyuc5nsbstyle = $Vnwufml5q3nphis->setSVGStyles($Vvt20qqut4buvgstyle, $V1yuhsvbtlvrrev_svgstyle, $Vangwoo3ejfg, $Vgxufordoa4t, $Vim12f51jw5r, $Vvjxcwrp4tjq, 'SVGPath', array($Vc0aiseldrl3, 'CNZ'));
							if (!empty($Vk1y4jyuc5nsbstyle)) {
								$Vnwufml5q3nphis->SVGPath($Vc0aiseldrl3, $Vk1y4jyuc5nsbstyle);
							}
							$Vnwufml5q3nphis->StopTransform();
						}
					}
				}
				break;
			}
			
			case 'rect': {
				if ($V55vc4mewy5wnvisible) {
					break;
				}
				$Vangwoo3ejfg = (isset($Vudz4oh4qikuttribs['x'])?$Vnwufml5q3nphis->getHTMLUnitToUnits($Vudz4oh4qikuttribs['x'], 0, $Vnwufml5q3nphis->svgunit, false):0);
				$Vgxufordoa4t = (isset($Vudz4oh4qikuttribs['y'])?$Vnwufml5q3nphis->getHTMLUnitToUnits($Vudz4oh4qikuttribs['y'], 0, $Vnwufml5q3nphis->svgunit, false):0);
				$Vim12f51jw5r = (isset($Vudz4oh4qikuttribs['width'])?$Vnwufml5q3nphis->getHTMLUnitToUnits($Vudz4oh4qikuttribs['width'], 0, $Vnwufml5q3nphis->svgunit, false):0);
				$Vvjxcwrp4tjq = (isset($Vudz4oh4qikuttribs['height'])?$Vnwufml5q3nphis->getHTMLUnitToUnits($Vudz4oh4qikuttribs['height'], 0, $Vnwufml5q3nphis->svgunit, false):0);
				$Vfhkt4vbeualx = (isset($Vudz4oh4qikuttribs['rx'])?$Vnwufml5q3nphis->getHTMLUnitToUnits($Vudz4oh4qikuttribs['rx'], 0, $Vnwufml5q3nphis->svgunit, false):0);
				$Vfhkt4vbeualy = (isset($Vudz4oh4qikuttribs['ry'])?$Vnwufml5q3nphis->getHTMLUnitToUnits($Vudz4oh4qikuttribs['ry'], 0, $Vnwufml5q3nphis->svgunit, false):$Vfhkt4vbeualx);
				if ($Vwcmlurixvzglipping) {
					$Vnwufml5q3nphis->SVGTransform($Vnwufml5q3npm);
					$Vnwufml5q3nphis->RoundedRectXY($Vangwoo3ejfg, $Vgxufordoa4t, $Vim12f51jw5r, $Vvjxcwrp4tjq, $Vfhkt4vbeualx, $Vfhkt4vbeualy, '1111', 'CNZ', array(), array());
				} else {
					$Vnwufml5q3nphis->StartTransform();
					$Vnwufml5q3nphis->SVGTransform($Vnwufml5q3npm);
					$Vk1y4jyuc5nsbstyle = $Vnwufml5q3nphis->setSVGStyles($Vvt20qqut4buvgstyle, $V1yuhsvbtlvrrev_svgstyle, $Vangwoo3ejfg, $Vgxufordoa4t, $Vim12f51jw5r, $Vvjxcwrp4tjq, 'RoundedRectXY', array($Vangwoo3ejfg, $Vgxufordoa4t, $Vim12f51jw5r, $Vvjxcwrp4tjq, $Vfhkt4vbeualx, $Vfhkt4vbeualy, '1111', 'CNZ'));
					if (!empty($Vk1y4jyuc5nsbstyle)) {
						$Vnwufml5q3nphis->RoundedRectXY($Vangwoo3ejfg, $Vgxufordoa4t, $Vim12f51jw5r, $Vvjxcwrp4tjq, $Vfhkt4vbeualx, $Vfhkt4vbeualy, '1111', $Vk1y4jyuc5nsbstyle, array(), array());
					}
					$Vnwufml5q3nphis->StopTransform();
				}
				break;
			}
			case 'circle': {
				if ($V55vc4mewy5wnvisible) {
					break;
				}
				$Vfhkt4vbeual = (isset($Vudz4oh4qikuttribs['r']) ? $Vnwufml5q3nphis->getHTMLUnitToUnits($Vudz4oh4qikuttribs['r'], 0, $Vnwufml5q3nphis->svgunit, false) : 0);
				$Vwcmlurixvzgx = (isset($Vudz4oh4qikuttribs['cx']) ? $Vnwufml5q3nphis->getHTMLUnitToUnits($Vudz4oh4qikuttribs['cx'], 0, $Vnwufml5q3nphis->svgunit, false) : (isset($Vudz4oh4qikuttribs['x']) ? $Vnwufml5q3nphis->getHTMLUnitToUnits($Vudz4oh4qikuttribs['x'], 0, $Vnwufml5q3nphis->svgunit, false) : 0));
				$Vwcmlurixvzgy = (isset($Vudz4oh4qikuttribs['cy']) ? $Vnwufml5q3nphis->getHTMLUnitToUnits($Vudz4oh4qikuttribs['cy'], 0, $Vnwufml5q3nphis->svgunit, false) : (isset($Vudz4oh4qikuttribs['y']) ? $Vnwufml5q3nphis->getHTMLUnitToUnits($Vudz4oh4qikuttribs['y'], 0, $Vnwufml5q3nphis->svgunit, false) : 0));
				$Vangwoo3ejfg = ($Vwcmlurixvzgx - $Vfhkt4vbeual);
				$Vgxufordoa4t = ($Vwcmlurixvzgy - $Vfhkt4vbeual);
				$Vim12f51jw5r = (2 * $Vfhkt4vbeual);
				$Vvjxcwrp4tjq = $Vim12f51jw5r;
				if ($Vwcmlurixvzglipping) {
					$Vnwufml5q3nphis->SVGTransform($Vnwufml5q3npm);
					$Vnwufml5q3nphis->Circle($Vwcmlurixvzgx, $Vwcmlurixvzgy, $Vfhkt4vbeual, 0, 360, 'CNZ', array(), array(), 8);
				} else {
					$Vnwufml5q3nphis->StartTransform();
					$Vnwufml5q3nphis->SVGTransform($Vnwufml5q3npm);
					$Vk1y4jyuc5nsbstyle = $Vnwufml5q3nphis->setSVGStyles($Vvt20qqut4buvgstyle, $V1yuhsvbtlvrrev_svgstyle, $Vangwoo3ejfg, $Vgxufordoa4t, $Vim12f51jw5r, $Vvjxcwrp4tjq, 'Circle', array($Vwcmlurixvzgx, $Vwcmlurixvzgy, $Vfhkt4vbeual, 0, 360, 'CNZ'));
					if (!empty($Vk1y4jyuc5nsbstyle)) {
						$Vnwufml5q3nphis->Circle($Vwcmlurixvzgx, $Vwcmlurixvzgy, $Vfhkt4vbeual, 0, 360, $Vk1y4jyuc5nsbstyle, array(), array(), 8);
					}
					$Vnwufml5q3nphis->StopTransform();
				}
				break;
			}
			case 'ellipse': {
				if ($V55vc4mewy5wnvisible) {
					break;
				}
				$Vfhkt4vbeualx = (isset($Vudz4oh4qikuttribs['rx']) ? $Vnwufml5q3nphis->getHTMLUnitToUnits($Vudz4oh4qikuttribs['rx'], 0, $Vnwufml5q3nphis->svgunit, false) : 0);
				$Vfhkt4vbeualy = (isset($Vudz4oh4qikuttribs['ry']) ? $Vnwufml5q3nphis->getHTMLUnitToUnits($Vudz4oh4qikuttribs['ry'], 0, $Vnwufml5q3nphis->svgunit, false) : 0);
				$Vwcmlurixvzgx = (isset($Vudz4oh4qikuttribs['cx']) ? $Vnwufml5q3nphis->getHTMLUnitToUnits($Vudz4oh4qikuttribs['cx'], 0, $Vnwufml5q3nphis->svgunit, false) : (isset($Vudz4oh4qikuttribs['x']) ? $Vnwufml5q3nphis->getHTMLUnitToUnits($Vudz4oh4qikuttribs['x'], 0, $Vnwufml5q3nphis->svgunit, false) : 0));
				$Vwcmlurixvzgy = (isset($Vudz4oh4qikuttribs['cy']) ? $Vnwufml5q3nphis->getHTMLUnitToUnits($Vudz4oh4qikuttribs['cy'], 0, $Vnwufml5q3nphis->svgunit, false) : (isset($Vudz4oh4qikuttribs['y']) ? $Vnwufml5q3nphis->getHTMLUnitToUnits($Vudz4oh4qikuttribs['y'], 0, $Vnwufml5q3nphis->svgunit, false) : 0));
				$Vangwoo3ejfg = ($Vwcmlurixvzgx - $Vfhkt4vbeualx);
				$Vgxufordoa4t = ($Vwcmlurixvzgy - $Vfhkt4vbeualy);
				$Vim12f51jw5r = (2 * $Vfhkt4vbeualx);
				$Vvjxcwrp4tjq = (2 * $Vfhkt4vbeualy);
				if ($Vwcmlurixvzglipping) {
					$Vnwufml5q3nphis->SVGTransform($Vnwufml5q3npm);
					$Vnwufml5q3nphis->Ellipse($Vwcmlurixvzgx, $Vwcmlurixvzgy, $Vfhkt4vbeualx, $Vfhkt4vbeualy, 0, 0, 360, 'CNZ', array(), array(), 8);
				} else {
					$Vnwufml5q3nphis->StartTransform();
					$Vnwufml5q3nphis->SVGTransform($Vnwufml5q3npm);
					$Vk1y4jyuc5nsbstyle = $Vnwufml5q3nphis->setSVGStyles($Vvt20qqut4buvgstyle, $V1yuhsvbtlvrrev_svgstyle, $Vangwoo3ejfg, $Vgxufordoa4t, $Vim12f51jw5r, $Vvjxcwrp4tjq, 'Ellipse', array($Vwcmlurixvzgx, $Vwcmlurixvzgy, $Vfhkt4vbeualx, $Vfhkt4vbeualy, 0, 0, 360, 'CNZ'));
					if (!empty($Vk1y4jyuc5nsbstyle)) {
						$Vnwufml5q3nphis->Ellipse($Vwcmlurixvzgx, $Vwcmlurixvzgy, $Vfhkt4vbeualx, $Vfhkt4vbeualy, 0, 0, 360, $Vk1y4jyuc5nsbstyle, array(), array(), 8);
					}
					$Vnwufml5q3nphis->StopTransform();
				}
				break;
			}
			case 'line': {
				if ($V55vc4mewy5wnvisible) {
					break;
				}
				$Vangwoo3ejfg1 = (isset($Vudz4oh4qikuttribs['x1'])?$Vnwufml5q3nphis->getHTMLUnitToUnits($Vudz4oh4qikuttribs['x1'], 0, $Vnwufml5q3nphis->svgunit, false):0);
				$Vgxufordoa4t1 = (isset($Vudz4oh4qikuttribs['y1'])?$Vnwufml5q3nphis->getHTMLUnitToUnits($Vudz4oh4qikuttribs['y1'], 0, $Vnwufml5q3nphis->svgunit, false):0);
				$Vangwoo3ejfg2 = (isset($Vudz4oh4qikuttribs['x2'])?$Vnwufml5q3nphis->getHTMLUnitToUnits($Vudz4oh4qikuttribs['x2'], 0, $Vnwufml5q3nphis->svgunit, false):0);
				$Vgxufordoa4t2 = (isset($Vudz4oh4qikuttribs['y2'])?$Vnwufml5q3nphis->getHTMLUnitToUnits($Vudz4oh4qikuttribs['y2'], 0, $Vnwufml5q3nphis->svgunit, false):0);
				$Vangwoo3ejfg = $Vangwoo3ejfg1;
				$Vgxufordoa4t = $Vgxufordoa4t1;
				$Vim12f51jw5r = abs($Vangwoo3ejfg2 - $Vangwoo3ejfg1);
				$Vvjxcwrp4tjq = abs($Vgxufordoa4t2 - $Vgxufordoa4t1);
				if (!$Vwcmlurixvzglipping) {
					$Vnwufml5q3nphis->StartTransform();
					$Vnwufml5q3nphis->SVGTransform($Vnwufml5q3npm);
					$Vk1y4jyuc5nsbstyle = $Vnwufml5q3nphis->setSVGStyles($Vvt20qqut4buvgstyle, $V1yuhsvbtlvrrev_svgstyle, $Vangwoo3ejfg, $Vgxufordoa4t, $Vim12f51jw5r, $Vvjxcwrp4tjq, 'Line', array($Vangwoo3ejfg1, $Vgxufordoa4t1, $Vangwoo3ejfg2, $Vgxufordoa4t2));
					$Vnwufml5q3nphis->Line($Vangwoo3ejfg1, $Vgxufordoa4t1, $Vangwoo3ejfg2, $Vgxufordoa4t2);
					$Vnwufml5q3nphis->StopTransform();
				}
				break;
			}
			case 'polyline':
			case 'polygon': {
				if ($V55vc4mewy5wnvisible) {
					break;
				}
				$V1yuhsvbtlvroints = (isset($Vudz4oh4qikuttribs['points'])?$Vudz4oh4qikuttribs['points']:'0 0');
				$V1yuhsvbtlvroints = trim($V1yuhsvbtlvroints);
				
				$V1yuhsvbtlvroints = preg_split('/[\,\s]+/si', $V1yuhsvbtlvroints);
				if (count($V1yuhsvbtlvroints) < 4) {
					break;
				}
				$V1yuhsvbtlvr = array();
				$Vangwoo3ejfgmin = 2147483647;
				$Vangwoo3ejfgmax = 0;
				$Vgxufordoa4tmin = 2147483647;
				$Vgxufordoa4tmax = 0;
				foreach ($V1yuhsvbtlvroints as $Vl0q4noiexi4ey => $Vxt4wx3pvtez) {
					$V1yuhsvbtlvr[$Vl0q4noiexi4ey] = $Vnwufml5q3nphis->getHTMLUnitToUnits($Vxt4wx3pvtez, 0, $Vnwufml5q3nphis->svgunit, false);
					if (($Vl0q4noiexi4ey % 2) == 0) {
						
						$Vangwoo3ejfgmin = min($Vangwoo3ejfgmin, $V1yuhsvbtlvr[$Vl0q4noiexi4ey]);
						$Vangwoo3ejfgmax = max($Vangwoo3ejfgmax, $V1yuhsvbtlvr[$Vl0q4noiexi4ey]);
					} else {
						
						$Vgxufordoa4tmin = min($Vgxufordoa4tmin, $V1yuhsvbtlvr[$Vl0q4noiexi4ey]);
						$Vgxufordoa4tmax = max($Vgxufordoa4tmax, $V1yuhsvbtlvr[$Vl0q4noiexi4ey]);
					}
				}
				$Vangwoo3ejfg = $Vangwoo3ejfgmin;
				$Vgxufordoa4t = $Vgxufordoa4tmin;
				$Vim12f51jw5r = ($Vangwoo3ejfgmax - $Vangwoo3ejfgmin);
				$Vvjxcwrp4tjq = ($Vgxufordoa4tmax - $Vgxufordoa4tmin);
				if ($Vgv45dfhsyuhame == 'polyline') {
					$Vnwufml5q3nphis->StartTransform();
					$Vnwufml5q3nphis->SVGTransform($Vnwufml5q3npm);
					$Vk1y4jyuc5nsbstyle = $Vnwufml5q3nphis->setSVGStyles($Vvt20qqut4buvgstyle, $V1yuhsvbtlvrrev_svgstyle, $Vangwoo3ejfg, $Vgxufordoa4t, $Vim12f51jw5r, $Vvjxcwrp4tjq, 'PolyLine', array($V1yuhsvbtlvr, 'CNZ'));
					if (!empty($Vk1y4jyuc5nsbstyle)) {
						$Vnwufml5q3nphis->PolyLine($V1yuhsvbtlvr, $Vk1y4jyuc5nsbstyle, array(), array());
					}
					$Vnwufml5q3nphis->StopTransform();
				} else { 
					if ($Vwcmlurixvzglipping) {
						$Vnwufml5q3nphis->SVGTransform($Vnwufml5q3npm);
						$Vnwufml5q3nphis->Polygon($V1yuhsvbtlvr, 'CNZ', array(), array(), true);
					} else {
						$Vnwufml5q3nphis->StartTransform();
						$Vnwufml5q3nphis->SVGTransform($Vnwufml5q3npm);
						$Vk1y4jyuc5nsbstyle = $Vnwufml5q3nphis->setSVGStyles($Vvt20qqut4buvgstyle, $V1yuhsvbtlvrrev_svgstyle, $Vangwoo3ejfg, $Vgxufordoa4t, $Vim12f51jw5r, $Vvjxcwrp4tjq, 'Polygon', array($V1yuhsvbtlvr, 'CNZ'));
						if (!empty($Vk1y4jyuc5nsbstyle)) {
							$Vnwufml5q3nphis->Polygon($V1yuhsvbtlvr, $Vk1y4jyuc5nsbstyle, array(), array(), true);
						}
						$Vnwufml5q3nphis->StopTransform();
					}
				}
				break;
			}
			
			case 'image': {
				if ($V55vc4mewy5wnvisible) {
					break;
				}
				if (!isset($Vudz4oh4qikuttribs['xlink:href']) OR empty($Vudz4oh4qikuttribs['xlink:href'])) {
					break;
				}
				$Vangwoo3ejfg = (isset($Vudz4oh4qikuttribs['x'])?$Vnwufml5q3nphis->getHTMLUnitToUnits($Vudz4oh4qikuttribs['x'], 0, $Vnwufml5q3nphis->svgunit, false):0);
				$Vgxufordoa4t = (isset($Vudz4oh4qikuttribs['y'])?$Vnwufml5q3nphis->getHTMLUnitToUnits($Vudz4oh4qikuttribs['y'], 0, $Vnwufml5q3nphis->svgunit, false):0);
				$Vim12f51jw5r = (isset($Vudz4oh4qikuttribs['width'])?$Vnwufml5q3nphis->getHTMLUnitToUnits($Vudz4oh4qikuttribs['width'], 0, $Vnwufml5q3nphis->svgunit, false):0);
				$Vvjxcwrp4tjq = (isset($Vudz4oh4qikuttribs['height'])?$Vnwufml5q3nphis->getHTMLUnitToUnits($Vudz4oh4qikuttribs['height'], 0, $Vnwufml5q3nphis->svgunit, false):0);
				$V55vc4mewy5wmg = $Vudz4oh4qikuttribs['xlink:href'];
				if (!$Vwcmlurixvzglipping) {
					$Vnwufml5q3nphis->StartTransform();
					$Vnwufml5q3nphis->SVGTransform($Vnwufml5q3npm);
					$Vk1y4jyuc5nsbstyle = $Vnwufml5q3nphis->setSVGStyles($Vvt20qqut4buvgstyle, $V1yuhsvbtlvrrev_svgstyle, $Vangwoo3ejfg, $Vgxufordoa4t, $Vim12f51jw5r, $Vvjxcwrp4tjq);
					if (preg_match('/^data:image\/[^;]+;base64,/', $V55vc4mewy5wmg, $Vetludueqmbt) > 0) {
						
						$V55vc4mewy5wmg = '@'.base64_decode(substr($V55vc4mewy5wmg, strlen($Vetludueqmbt[0])));
					} else {
						
						if (!TCPDF_STATIC::empty_string($Vnwufml5q3nphis->svgdir) AND (($V55vc4mewy5wmg[0] == '.') OR (basename($V55vc4mewy5wmg) == $V55vc4mewy5wmg))) {
							
							$V55vc4mewy5wmg = $Vnwufml5q3nphis->svgdir.'/'.$V55vc4mewy5wmg;
						}
						if (($V55vc4mewy5wmg[0] == '/') AND !empty($_SERVER['DOCUMENT_ROOT']) AND ($_SERVER['DOCUMENT_ROOT'] != '/')) {
							$Vxb0ra0fqzn2indroot = strpos($V55vc4mewy5wmg, $_SERVER['DOCUMENT_ROOT']);
							if (($Vxb0ra0fqzn2indroot === false) OR ($Vxb0ra0fqzn2indroot > 1)) {
								if (substr($_SERVER['DOCUMENT_ROOT'], -1) == '/') {
									$V55vc4mewy5wmg = substr($_SERVER['DOCUMENT_ROOT'], 0, -1).$V55vc4mewy5wmg;
								} else {
									$V55vc4mewy5wmg = $_SERVER['DOCUMENT_ROOT'].$V55vc4mewy5wmg;
								}
							}
						}
						$V55vc4mewy5wmg = urldecode($V55vc4mewy5wmg);
						$Vnwufml5q3npestscrtype = @parse_url($V55vc4mewy5wmg);
						if (!isset($Vnwufml5q3npestscrtype['query']) OR empty($Vnwufml5q3npestscrtype['query'])) {
							
							$V55vc4mewy5wmg = str_replace(K_PATH_URL, K_PATH_MAIN, $V55vc4mewy5wmg);
						}
					}
					
					$V55vc4mewy5wmgtype = TCPDF_IMAGES::getImageFileType($V55vc4mewy5wmg);
					if (($V55vc4mewy5wmgtype == 'eps') OR ($V55vc4mewy5wmgtype == 'ai')) {
						$Vnwufml5q3nphis->ImageEps($V55vc4mewy5wmg, $Vangwoo3ejfg, $Vgxufordoa4t, $Vim12f51jw5r, $Vvjxcwrp4tjq);
					} elseif ($V55vc4mewy5wmgtype == 'svg') {
						
						$Vpvdtvg1vcor = $Vnwufml5q3nphis->svggradients;
						$Vfa5ofdayafc = $Vnwufml5q3nphis->svggradientid;
						$Vc2eraf1hidl = $Vnwufml5q3nphis->svgdefsmode;
						$Vimntg2eabpt = $Vnwufml5q3nphis->svgdefs;
						$Vuy0n5fjjcnw = $Vnwufml5q3nphis->svgclipmode;
						$Vsqilmxpy2fm = $Vnwufml5q3nphis->svgclippaths;
						$Vhkuv22g4333 = $Vnwufml5q3nphis->svgcliptm;
						$Vyqqgymua31g = $Vnwufml5q3nphis->svgclipid;
						$Va4lcyi3if0c = $Vnwufml5q3nphis->svgtext;
						$Va4lcyi3if0cmode = $Vnwufml5q3nphis->svgtextmode;
						$Vnwufml5q3nphis->ImageSVG($V55vc4mewy5wmg, $Vangwoo3ejfg, $Vgxufordoa4t, $Vim12f51jw5r, $Vvjxcwrp4tjq);
						
						$Vnwufml5q3nphis->svggradients = $Vpvdtvg1vcor;
						$Vnwufml5q3nphis->svggradientid = $Vfa5ofdayafc;
						$Vnwufml5q3nphis->svgdefsmode = $Vc2eraf1hidl;
						$Vnwufml5q3nphis->svgdefs = $Vimntg2eabpt;
						$Vnwufml5q3nphis->svgclipmode = $Vuy0n5fjjcnw;
						$Vnwufml5q3nphis->svgclippaths = $Vsqilmxpy2fm;
						$Vnwufml5q3nphis->svgcliptm = $Vhkuv22g4333;
						$Vnwufml5q3nphis->svgclipid = $Vyqqgymua31g;
						$Vnwufml5q3nphis->svgtext = $Va4lcyi3if0c;
						$Vnwufml5q3nphis->svgtextmode = $Va4lcyi3if0cmode;
					} else {
						$Vnwufml5q3nphis->Image($V55vc4mewy5wmg, $Vangwoo3ejfg, $Vgxufordoa4t, $Vim12f51jw5r, $Vvjxcwrp4tjq);
					}
					$Vnwufml5q3nphis->StopTransform();
				}
				break;
			}
			
			case 'text':
			case 'tspan': {
				if (isset($Vnwufml5q3nphis->svgtextmode['text-anchor']) AND !empty($Vnwufml5q3nphis->svgtext)) {
					
				}
				
				$Vnwufml5q3nphis->svgtextmode['invisible'] = $V55vc4mewy5wnvisible;
				if ($V55vc4mewy5wnvisible) {
					break;
				}
				array_push($Vnwufml5q3nphis->svgstyles, $Vvt20qqut4buvgstyle);
				if (isset($Vudz4oh4qikuttribs['x'])) {
					$Vangwoo3ejfg = $Vnwufml5q3nphis->getHTMLUnitToUnits($Vudz4oh4qikuttribs['x'], 0, $Vnwufml5q3nphis->svgunit, false);
				} elseif ($Vgv45dfhsyuhame == 'tspan') {
					$Vangwoo3ejfg = $Vnwufml5q3nphis->x;
				} else {
					$Vangwoo3ejfg = 0;
				}
				if (isset($Vudz4oh4qikuttribs['dx'])) {
					$Vangwoo3ejfg += $Vnwufml5q3nphis->getHTMLUnitToUnits($Vudz4oh4qikuttribs['dx'], 0, $Vnwufml5q3nphis->svgunit, false);
				}
				if (isset($Vudz4oh4qikuttribs['y'])) {
					$Vgxufordoa4t = $Vnwufml5q3nphis->getHTMLUnitToUnits($Vudz4oh4qikuttribs['y'], 0, $Vnwufml5q3nphis->svgunit, false);
				} elseif ($Vgv45dfhsyuhame == 'tspan') {
					$Vgxufordoa4t = $Vnwufml5q3nphis->y;
				} else {
					$Vgxufordoa4t = 0;
				}
				if (isset($Vudz4oh4qikuttribs['dy'])) {
					$Vgxufordoa4t += $Vnwufml5q3nphis->getHTMLUnitToUnits($Vudz4oh4qikuttribs['dy'], 0, $Vnwufml5q3nphis->svgunit, false);
				}
				$Vvt20qqut4buvgstyle['text-color'] = $Vvt20qqut4buvgstyle['fill'];
				$Vnwufml5q3nphis->svgtext = '';
				if (isset($Vvt20qqut4buvgstyle['text-anchor'])) {
					$Vnwufml5q3nphis->svgtextmode['text-anchor'] = $Vvt20qqut4buvgstyle['text-anchor'];
				} else {
					$Vnwufml5q3nphis->svgtextmode['text-anchor'] = 'start';
				}
				if (isset($Vvt20qqut4buvgstyle['direction'])) {
					if ($Vvt20qqut4buvgstyle['direction'] == 'rtl') {
						$Vnwufml5q3nphis->svgtextmode['rtl'] = true;
					} else {
						$Vnwufml5q3nphis->svgtextmode['rtl'] = false;
					}
				} else {
					$Vnwufml5q3nphis->svgtextmode['rtl'] = false;
				}
				if (isset($Vvt20qqut4buvgstyle['stroke']) AND ($Vvt20qqut4buvgstyle['stroke'] != 'none') AND isset($Vvt20qqut4buvgstyle['stroke-width']) AND ($Vvt20qqut4buvgstyle['stroke-width'] > 0)) {
					$Vnwufml5q3nphis->svgtextmode['stroke'] = $Vnwufml5q3nphis->getHTMLUnitToUnits($Vvt20qqut4buvgstyle['stroke-width'], 0, $Vnwufml5q3nphis->svgunit, false);
				} else {
					$Vnwufml5q3nphis->svgtextmode['stroke'] = false;
				}
				$Vnwufml5q3nphis->StartTransform();
				$Vnwufml5q3nphis->SVGTransform($Vnwufml5q3npm);
				$Vk1y4jyuc5nsbstyle = $Vnwufml5q3nphis->setSVGStyles($Vvt20qqut4buvgstyle, $V1yuhsvbtlvrrev_svgstyle, $Vangwoo3ejfg, $Vgxufordoa4t, 1, 1);
				$Vnwufml5q3nphis->x = $Vangwoo3ejfg;
				$Vnwufml5q3nphis->y = $Vgxufordoa4t;
				break;
			}
			
			case 'use': {
				if (isset($Vudz4oh4qikuttribs['xlink:href']) AND !empty($Vudz4oh4qikuttribs['xlink:href'])) {
					$Vvt20qqut4buvgdefid = substr($Vudz4oh4qikuttribs['xlink:href'], 1);
					if (isset($Vnwufml5q3nphis->svgdefs[$Vvt20qqut4buvgdefid])) {
						$Vppw1slbj4ovse = $Vnwufml5q3nphis->svgdefs[$Vvt20qqut4buvgdefid];
						if (isset($Vudz4oh4qikuttribs['xlink:href'])) {
							unset($Vudz4oh4qikuttribs['xlink:href']);
						}
						if (isset($Vudz4oh4qikuttribs['id'])) {
							unset($Vudz4oh4qikuttribs['id']);
						}
						if (isset($Vppw1slbj4ovse['attribs']['x']) AND isset($Vudz4oh4qikuttribs['x'])) {
							$Vudz4oh4qikuttribs['x'] += $Vppw1slbj4ovse['attribs']['x'];
						}
						if (isset($Vppw1slbj4ovse['attribs']['y']) AND isset($Vudz4oh4qikuttribs['y'])) {
							$Vudz4oh4qikuttribs['y'] += $Vppw1slbj4ovse['attribs']['y'];
						}
						if (empty($Vudz4oh4qikuttribs['style'])) {
							$Vudz4oh4qikuttribs['style'] = '';
						}
						if (!empty($Vppw1slbj4ovse['attribs']['style'])) {
							
							$Vudz4oh4qikuttribs['style'] = str_replace(';;',';',';'.$Vppw1slbj4ovse['attribs']['style'].$Vudz4oh4qikuttribs['style']);
						}
						$Vudz4oh4qikuttribs = array_merge($Vppw1slbj4ovse['attribs'], $Vudz4oh4qikuttribs);
						$Vnwufml5q3nphis->startSVGElementHandler($V1yuhsvbtlvrarser, $Vppw1slbj4ovse['name'], $Vudz4oh4qikuttribs);
						return;
					}
				}
				break;
			}
			default: {
				break;
			}
		} 
		
		if (!empty($Vudz4oh4qikuttribs['child_elements'])) {
			$Vwcmlurixvzghild_elements = $Vudz4oh4qikuttribs['child_elements'];
			unset($Vudz4oh4qikuttribs['child_elements']);
			foreach($Vwcmlurixvzghild_elements as $Vwcmlurixvzghild_element) {
				if (empty($Vwcmlurixvzghild_element['attribs']['closing_tag'])) {
					$Vnwufml5q3nphis->startSVGElementHandler('child-tag', $Vwcmlurixvzghild_element['name'], $Vwcmlurixvzghild_element['attribs']);
				} else {
					if (isset($Vwcmlurixvzghild_element['attribs']['content'])) {
						$Vnwufml5q3nphis->svgtext = $Vwcmlurixvzghild_element['attribs']['content'];
					}
					$Vnwufml5q3nphis->endSVGElementHandler('child-tag', $Vwcmlurixvzghild_element['name']);
				}
			}
		}
	}

	
	protected function endSVGElementHandler($V1yuhsvbtlvrarser, $Vgv45dfhsyuhame) {
		$Vgv45dfhsyuhame = $Vnwufml5q3nphis->removeTagNamespace($Vgv45dfhsyuhame);
		if ($Vnwufml5q3nphis->svgdefsmode AND !in_array($Vgv45dfhsyuhame, array('defs', 'clipPath', 'linearGradient', 'radialGradient', 'stop'))) {;
			if (end($Vnwufml5q3nphis->svgdefs) !== FALSE) {
				$Vx3g4ytafo1aast_svgdefs_id = key($Vnwufml5q3nphis->svgdefs);
				if (isset($Vnwufml5q3nphis->svgdefs[$Vx3g4ytafo1aast_svgdefs_id]['attribs']['child_elements'])) {
					foreach($Vnwufml5q3nphis->svgdefs[$Vx3g4ytafo1aast_svgdefs_id]['attribs']['child_elements'] as $Vwcmlurixvzghild_element) {
						if (isset($Vwcmlurixvzghild_element['attribs']['id']) AND ($Vwcmlurixvzghild_element['name'] == $Vgv45dfhsyuhame)) {
							$Vnwufml5q3nphis->svgdefs[$Vx3g4ytafo1aast_svgdefs_id]['attribs']['child_elements'][$Vwcmlurixvzghild_element['attribs']['id'].'_CLOSE'] = array('name' => $Vgv45dfhsyuhame, 'attribs' => array('closing_tag' => TRUE, 'content' => $Vnwufml5q3nphis->svgtext));
							return;
						}
					}
					if ($Vnwufml5q3nphis->svgdefs[$Vx3g4ytafo1aast_svgdefs_id]['name'] == $Vgv45dfhsyuhame) {
						$Vnwufml5q3nphis->svgdefs[$Vx3g4ytafo1aast_svgdefs_id]['attribs']['child_elements'][$Vx3g4ytafo1aast_svgdefs_id.'_CLOSE'] = array('name' => $Vgv45dfhsyuhame, 'attribs' => array('closing_tag' => TRUE, 'content' => $Vnwufml5q3nphis->svgtext));
						return;
					}
				}
			}
			return;
		}
		switch($Vgv45dfhsyuhame) {
			case 'defs': {
				$Vnwufml5q3nphis->svgdefsmode = false;
				break;
			}
			
			case 'clipPath': {
				$Vnwufml5q3nphis->svgclipmode = false;
				break;
			}
			case 'svg': {
				if (--$Vnwufml5q3nphis->svg_tag_depth <= 0) {
					break;
				}
			}
			case 'g': {
				
				array_pop($Vnwufml5q3nphis->svgstyles);
				$Vnwufml5q3nphis->StopTransform();
				break;
			}
			case 'text':
			case 'tspan': {
				if ($Vnwufml5q3nphis->svgtextmode['invisible']) {
					
					
					break;
				}
				
				$Vdvjst2lzhef = $Vnwufml5q3nphis->svgtext;
				
				$Vdvjst2lzheflen = $Vnwufml5q3nphis->GetStringWidth($Vdvjst2lzhef);
				if ($Vnwufml5q3nphis->svgtextmode['text-anchor'] != 'start') {
					
					if ($Vnwufml5q3nphis->svgtextmode['text-anchor'] == 'end') {
						if ($Vnwufml5q3nphis->svgtextmode['rtl']) {
							$Vnwufml5q3nphis->x += $Vdvjst2lzheflen;
						} else {
							$Vnwufml5q3nphis->x -= $Vdvjst2lzheflen;
						}
					} elseif ($Vnwufml5q3nphis->svgtextmode['text-anchor'] == 'middle') {
						if ($Vnwufml5q3nphis->svgtextmode['rtl']) {
							$Vnwufml5q3nphis->x += ($Vdvjst2lzheflen / 2);
						} else {
							$Vnwufml5q3nphis->x -= ($Vdvjst2lzheflen / 2);
						}
					}
				}
				$V1vp1udaqmu2 = $Vnwufml5q3nphis->textrendermode;
				$Vsoagbrbw4kj = $Vnwufml5q3nphis->textstrokewidth;
				$Vnwufml5q3nphis->setTextRenderingMode($Vnwufml5q3nphis->svgtextmode['stroke'], true, false);
				if ($Vgv45dfhsyuhame == 'text') {
					
					$V3p0tae11ldwx = $Vnwufml5q3nphis->x;
					$V3p0tae11ldwy = $Vnwufml5q3nphis->y;
				}
				
				$Vnwufml5q3nphis->Cell($Vdvjst2lzheflen, 0, $Vdvjst2lzhef, 0, 0, '', false, '', 0, false, 'L', 'T');
				if ($Vgv45dfhsyuhame == 'text') {
					
					$Vnwufml5q3nphis->x = $V3p0tae11ldwx;
					$Vnwufml5q3nphis->y = $V3p0tae11ldwy;
				}
				
				$Vnwufml5q3nphis->textrendermode = $V1vp1udaqmu2;
				$Vnwufml5q3nphis->textstrokewidth = $Vsoagbrbw4kj;
				$Vnwufml5q3nphis->svgtext = '';
				$Vnwufml5q3nphis->StopTransform();
				if (!$Vnwufml5q3nphis->svgdefsmode) {
					array_pop($Vnwufml5q3nphis->svgstyles);
				}
				break;
			}
			default: {
				break;
			}
		}
	}

	
	protected function segSVGContentHandler($V1yuhsvbtlvrarser, $Vc0aiseldrl3ata) {
		$Vnwufml5q3nphis->svgtext .= $Vc0aiseldrl3ata;
	}

	

} 




