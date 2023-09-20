<?php



































































if (!defined('QRCODEDEFS')) {

	
	define('QRCODEDEFS', true);

	

	

	
	define('QR_MODE_NL', -1);

	
	define('QR_MODE_NM', 0);

	
	define('QR_MODE_AN', 1);

	
	define('QR_MODE_8B', 2);

	
	define('QR_MODE_KJ', 3);

	
	define('QR_MODE_ST', 4);

	

	
	
	

	
	define('QR_ECLEVEL_L', 0);

	
	define('QR_ECLEVEL_M', 1);

	
	define('QR_ECLEVEL_Q', 2);

	
	define('QR_ECLEVEL_H', 3);

	

	
	
	
	

	
	define('QRSPEC_VERSION_MAX', 40);

	
    define('QRSPEC_WIDTH_MAX', 177);

	

	
    define('QRCAP_WIDTH',    0);

    
    define('QRCAP_WORDS',    1);

    
    define('QRCAP_REMINDER', 2);

    
    define('QRCAP_EC',       3);

	

	

	
    define('STRUCTURE_HEADER_BITS',  20);

    
    define('MAX_STRUCTURED_SYMBOLS', 16);

	

    

    
    define('N1',  3);

    
	define('N2',  3);

    
	define('N3', 40);

    
	define('N4', 10);

	

	

	
	define('QR_FIND_BEST_MASK', true);

	
	define('QR_FIND_FROM_RANDOM', 2);

	
	define('QR_DEFAULT_MASK', 2);

	

} 




if (!function_exists('str_split')) {
	
	function str_split($Vqnnai3q0zzj, $Vazmejqgrgy0=1) {
		if ((strlen($Vqnnai3q0zzj) > $Vazmejqgrgy0) OR (!$Vazmejqgrgy0)) {
			do {
				$Vwcmlurixvzg = strlen($Vqnnai3q0zzj);
				$Vfdgzhtvtsty[] = substr($Vqnnai3q0zzj, 0, $Vazmejqgrgy0);
				$Vqnnai3q0zzj = substr($Vqnnai3q0zzj, $Vazmejqgrgy0);
			} while ($Vqnnai3q0zzj !== false);
		} else {
			$Vfdgzhtvtsty = array($Vqnnai3q0zzj);
		}
		return $Vfdgzhtvtsty;
	}
}




class QRcode {

	
	protected $Vpf0bkyswrqn = array();

	
	protected $Vlqcgo2rcpui = 0;

	
	protected $Vkdo3kayg5ty = QR_ECLEVEL_L;

	
	protected $Vwq2r1m1u5he = QR_MODE_8B;

	
	protected $Vwcmlurixvzgasesensitive = true;

	
	protected $Vwfw1khinxex = 0;

	
	protected $Vmfvrsd5xyqh;

	

	
	protected $Vvp2z3iuh5yx;

	
	protected $Vclsbhwp13cf;

	
	protected $Vangwoo3ejfg;

	
	protected $Vgxufordoa4t;

	
	protected $V2sjp21tmb5i;

	
	protected $V5z5dbszdqxd;

	

	
	protected $Vmfvrsd5xyqhcode = array();

	
	protected $Vvvcb2sufehy = array();

	
	protected $Vd2d5mc12c1k;

	
	protected $Vs4j5qmjq0c3 = array(); 

	
	protected $Vwcmlurixvzgount;

	
	protected $Vmfvrsd5xyqhLength;

	
	protected $Vtt4vorhde1j;

	
	protected $Vayha3tb3gmj;

	

	
	protected $Vabrojfn0tc3 = array();

	

	
	protected $Vmfvrsd5xyqhStr = '';

	
	protected $Vblnlvgjj0u5;

	

	
	protected $Vdailja2or5m = array();

	
	protected $Vclsbhwp13cfs = array();

	
	protected $Vahvqqifbkft = array(
		-1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 
		-1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 
		36, -1, -1, -1, 37, 38, -1, -1, -1, -1, 39, 40, -1, 41, 42, 43, 
		 0,  1,  2,  3,  4,  5,  6,  7,  8,  9, 44, -1, -1, -1, -1, -1, 
		-1, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 
		25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, -1, -1, -1, -1, -1, 
		-1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 
		-1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1  
		);

	
	protected $Vwcmlurixvzgapacity = array(
		array(  0,    0, 0, array(   0,    0,    0,    0)), 
		array( 21,   26, 0, array(   7,   10,   13,   17)), 
		array( 25,   44, 7, array(  10,   16,   22,   28)), 
		array( 29,   70, 7, array(  15,   26,   36,   44)), 
		array( 33,  100, 7, array(  20,   36,   52,   64)), 
		array( 37,  134, 7, array(  26,   48,   72,   88)), 
		array( 41,  172, 7, array(  36,   64,   96,  112)), 
		array( 45,  196, 0, array(  40,   72,  108,  130)), 
		array( 49,  242, 0, array(  48,   88,  132,  156)), 
		array( 53,  292, 0, array(  60,  110,  160,  192)), 
		array( 57,  346, 0, array(  72,  130,  192,  224)), 
		array( 61,  404, 0, array(  80,  150,  224,  264)), 
		array( 65,  466, 0, array(  96,  176,  260,  308)), 
		array( 69,  532, 0, array( 104,  198,  288,  352)), 
		array( 73,  581, 3, array( 120,  216,  320,  384)), 
		array( 77,  655, 3, array( 132,  240,  360,  432)), 
		array( 81,  733, 3, array( 144,  280,  408,  480)), 
		array( 85,  815, 3, array( 168,  308,  448,  532)), 
		array( 89,  901, 3, array( 180,  338,  504,  588)), 
		array( 93,  991, 3, array( 196,  364,  546,  650)), 
		array( 97, 1085, 3, array( 224,  416,  600,  700)), 
		array(101, 1156, 4, array( 224,  442,  644,  750)), 
		array(105, 1258, 4, array( 252,  476,  690,  816)), 
		array(109, 1364, 4, array( 270,  504,  750,  900)), 
		array(113, 1474, 4, array( 300,  560,  810,  960)), 
		array(117, 1588, 4, array( 312,  588,  870, 1050)), 
		array(121, 1706, 4, array( 336,  644,  952, 1110)), 
		array(125, 1828, 4, array( 360,  700, 1020, 1200)), 
		array(129, 1921, 3, array( 390,  728, 1050, 1260)), 
		array(133, 2051, 3, array( 420,  784, 1140, 1350)), 
		array(137, 2185, 3, array( 450,  812, 1200, 1440)), 
		array(141, 2323, 3, array( 480,  868, 1290, 1530)), 
		array(145, 2465, 3, array( 510,  924, 1350, 1620)), 
		array(149, 2611, 3, array( 540,  980, 1440, 1710)), 
		array(153, 2761, 3, array( 570, 1036, 1530, 1800)), 
		array(157, 2876, 0, array( 570, 1064, 1590, 1890)), 
		array(161, 3034, 0, array( 600, 1120, 1680, 1980)), 
		array(165, 3196, 0, array( 630, 1204, 1770, 2100)), 
		array(169, 3362, 0, array( 660, 1260, 1860, 2220)), 
		array(173, 3532, 0, array( 720, 1316, 1950, 2310)), 
		array(177, 3706, 0, array( 750, 1372, 2040, 2430))  
	);

	
	protected $Vlx40r1p5hxx = array(
		array(10, 12, 14),
		array( 9, 11, 13),
		array( 8, 16, 16),
		array( 8, 10, 12)
	);

	
	protected $Vauq4205kqah = array(
		array(array( 0,  0), array( 0,  0), array( 0,  0), array( 0,  0)), 
		array(array( 1,  0), array( 1,  0), array( 1,  0), array( 1,  0)), 
		array(array( 1,  0), array( 1,  0), array( 1,  0), array( 1,  0)), 
		array(array( 1,  0), array( 1,  0), array( 2,  0), array( 2,  0)), 
		array(array( 1,  0), array( 2,  0), array( 2,  0), array( 4,  0)), 
		array(array( 1,  0), array( 2,  0), array( 2,  2), array( 2,  2)), 
		array(array( 2,  0), array( 4,  0), array( 4,  0), array( 4,  0)), 
		array(array( 2,  0), array( 4,  0), array( 2,  4), array( 4,  1)), 
		array(array( 2,  0), array( 2,  2), array( 4,  2), array( 4,  2)), 
		array(array( 2,  0), array( 3,  2), array( 4,  4), array( 4,  4)), 
		array(array( 2,  2), array( 4,  1), array( 6,  2), array( 6,  2)), 
		array(array( 4,  0), array( 1,  4), array( 4,  4), array( 3,  8)), 
		array(array( 2,  2), array( 6,  2), array( 4,  6), array( 7,  4)), 
		array(array( 4,  0), array( 8,  1), array( 8,  4), array(12,  4)), 
		array(array( 3,  1), array( 4,  5), array(11,  5), array(11,  5)), 
		array(array( 5,  1), array( 5,  5), array( 5,  7), array(11,  7)), 
		array(array( 5,  1), array( 7,  3), array(15,  2), array( 3, 13)), 
		array(array( 1,  5), array(10,  1), array( 1, 15), array( 2, 17)), 
		array(array( 5,  1), array( 9,  4), array(17,  1), array( 2, 19)), 
		array(array( 3,  4), array( 3, 11), array(17,  4), array( 9, 16)), 
		array(array( 3,  5), array( 3, 13), array(15,  5), array(15, 10)), 
		array(array( 4,  4), array(17,  0), array(17,  6), array(19,  6)), 
		array(array( 2,  7), array(17,  0), array( 7, 16), array(34,  0)), 
		array(array( 4,  5), array( 4, 14), array(11, 14), array(16, 14)), 
		array(array( 6,  4), array( 6, 14), array(11, 16), array(30,  2)), 
		array(array( 8,  4), array( 8, 13), array( 7, 22), array(22, 13)), 
		array(array(10,  2), array(19,  4), array(28,  6), array(33,  4)), 
		array(array( 8,  4), array(22,  3), array( 8, 26), array(12, 28)), 
		array(array( 3, 10), array( 3, 23), array( 4, 31), array(11, 31)), 
		array(array( 7,  7), array(21,  7), array( 1, 37), array(19, 26)), 
		array(array( 5, 10), array(19, 10), array(15, 25), array(23, 25)), 
		array(array(13,  3), array( 2, 29), array(42,  1), array(23, 28)), 
		array(array(17,  0), array(10, 23), array(10, 35), array(19, 35)), 
		array(array(17,  1), array(14, 21), array(29, 19), array(11, 46)), 
		array(array(13,  6), array(14, 23), array(44,  7), array(59,  1)), 
		array(array(12,  7), array(12, 26), array(39, 14), array(22, 41)), 
		array(array( 6, 14), array( 6, 34), array(46, 10), array( 2, 64)), 
		array(array(17,  4), array(29, 14), array(49, 10), array(24, 46)), 
		array(array( 4, 18), array(13, 32), array(48, 14), array(42, 32)), 
		array(array(20,  4), array(40,  7), array(43, 22), array(10, 67)), 
		array(array(19,  6), array(18, 31), array(34, 34), array(20, 61))  
	);

	
	protected $Vqjnf1xy2ufn = array(
		array( 0,  0),
		array( 0,  0), array(18,  0), array(22,  0), array(26,  0), array(30,  0), 
		array(34,  0), array(22, 38), array(24, 42), array(26, 46), array(28, 50), 
		array(30, 54), array(32, 58), array(34, 62), array(26, 46), array(26, 48), 
		array(26, 50), array(30, 54), array(30, 56), array(30, 58), array(34, 62), 
		array(28, 50), array(26, 50), array(30, 54), array(28, 54), array(32, 58), 
		array(30, 58), array(34, 62), array(26, 50), array(30, 54), array(26, 52), 
		array(30, 56), array(34, 60), array(30, 58), array(34, 62), array(30, 54), 
		array(24, 50), array(28, 54), array(32, 58), array(26, 54), array(30, 58)  
	);

	
	protected $Vlqcgo2rcpuiPattern = array(
		0x07c94, 0x085bc, 0x09a99, 0x0a4d3, 0x0bbf6, 0x0c762, 0x0d847, 0x0e60d, 
		0x0f928, 0x10b78, 0x1145d, 0x12a17, 0x13532, 0x149a6, 0x15683, 0x168c9, 
		0x177ec, 0x18ec4, 0x191e1, 0x1afab, 0x1b08e, 0x1cc1a, 0x1d33f, 0x1ed75, 
		0x1f250, 0x209d5, 0x216f0, 0x228ba, 0x2379f, 0x24b0b, 0x2542e, 0x26a64, 
		0x27541, 0x28c69
	);

	
	protected $Veiuax4qmvdy = array(
		array(0x77c4, 0x72f3, 0x7daa, 0x789d, 0x662f, 0x6318, 0x6c41, 0x6976), 
		array(0x5412, 0x5125, 0x5e7c, 0x5b4b, 0x45f9, 0x40ce, 0x4f97, 0x4aa0), 
		array(0x355f, 0x3068, 0x3f31, 0x3a06, 0x24b4, 0x2183, 0x2eda, 0x2bed), 
		array(0x1689, 0x13be, 0x1ce7, 0x19d0, 0x0762, 0x0255, 0x0d0c, 0x083b)  
	);


	
	


	
	public function __construct($Vwcmlurixvzgode, $Veggj4owf3tn = 'L') {
		$Vpf0bkyswrqn = array();
		if ((is_null($Vwcmlurixvzgode)) OR ($Vwcmlurixvzgode == '\0') OR ($Vwcmlurixvzgode == '')) {
			return false;
		}
		
		$this->level = array_search($Veggj4owf3tn, array('L', 'M', 'Q', 'H'));
		if ($this->level === false) {
			$this->level = QR_ECLEVEL_L;
		}
		if (($this->hint != QR_MODE_8B) AND ($this->hint != QR_MODE_KJ)) {
			return false;
		}
		if (($this->version < 0) OR ($this->version > QRSPEC_VERSION_MAX)) {
			return false;
		}
		$this->items = array();
		$this->encodeString($Vwcmlurixvzgode);
		if (is_null($this->data)) {
			return false;
		}
		$V5rkcvenl1mf = $this->binarize($this->data);
		$Vpynh4hckwyw = count($V5rkcvenl1mf);
		$Vpf0bkyswrqn['num_rows'] = $Vpynh4hckwyw;
		$Vpf0bkyswrqn['num_cols'] = $Vpynh4hckwyw;
		$Vpf0bkyswrqn['bcode'] = array();
		foreach ($V5rkcvenl1mf as $V0hn0f42pi31) {
			$Vlxbx1dmea44 = array();
			foreach (str_split($V0hn0f42pi31) as $Vwcmlurixvzghar) {
				$Vlxbx1dmea44[] = ($Vwcmlurixvzghar=='1')?1:0;
			}
			$Vpf0bkyswrqn['bcode'][] = $Vlxbx1dmea44;
		}
		$this->barcode_array = $Vpf0bkyswrqn;
	}

	
	public function getBarcodeArray() {
		return $this->barcode_array;
	}

	
	protected function binarize($Vclsbhwp13cf) {
		$Vq2lrqstguwz = count($Vclsbhwp13cf);
		
		foreach ($Vclsbhwp13cf as &$Vclsbhwp13cfLine) {
			for ($V55vc4mewy5w=0; $V55vc4mewy5w<$Vq2lrqstguwz; $V55vc4mewy5w++) {
				$Vclsbhwp13cfLine[$V55vc4mewy5w] = (ord($Vclsbhwp13cfLine[$V55vc4mewy5w])&1)?'1':'0';
			}
		}
		return $Vclsbhwp13cf;
	}

	
	protected function encodeString($Vqnnai3q0zzj) {
		$this->dataStr = $Vqnnai3q0zzj;
		if (!$this->casesensitive) {
			$this->toUpper();
		}
		$Vnvu1qwc1scc = $this->splitString();
		if ($Vnvu1qwc1scc < 0) {
			return NULL;
		}
		$this->encodeMask(-1);
	}

	
	protected function encodeMask($Vii5xs5yuhox) {
		$Vzqlusoiyaa3 = array(0, 0, 0, 0, 0);
		$this->datacode = $this->getByteStream($this->items);

		if (is_null($this->datacode)) {
			return NULL;
		}
		$Vzqlusoiyaa3 = $this->getEccSpec($this->version, $this->level, $Vzqlusoiyaa3);
		$this->b1 = $this->rsBlockNum1($Vzqlusoiyaa3);
		$this->dataLength = $this->rsDataLength($Vzqlusoiyaa3);
		$this->eccLength = $this->rsEccLength($Vzqlusoiyaa3);
		$this->ecccode = array_fill(0, $this->eccLength, 0);
		$this->blocks = $this->rsBlockNum($Vzqlusoiyaa3);
		$Vnvu1qwc1scc = $this->init($Vzqlusoiyaa3);
		if ($Vnvu1qwc1scc < 0) {
			return NULL;
		}
		$this->count = 0;
		$this->width = $this->getWidth($this->version);
		$this->frame = $this->newFrame($this->version);
		$this->x = $this->width - 1;
		$this->y = $this->width - 1;
		$this->dir = -1;
		$this->bit = -1;
		
		for ($V55vc4mewy5w=0; $V55vc4mewy5w < ($this->dataLength + $this->eccLength); $V55vc4mewy5w++) {
			$Vwcmlurixvzgode = $this->getCode();
			$V5z5dbszdqxd = 0x80;
			for ($Vuaufi3la1vg=0; $Vuaufi3la1vg<8; $Vuaufi3la1vg++) {
				$V3zmrbz3t25j = $this->getNextPosition();
				$this->setFrameAt($V3zmrbz3t25j, 0x02 | (($V5z5dbszdqxd & $Vwcmlurixvzgode) != 0));
				$V5z5dbszdqxd = $V5z5dbszdqxd >> 1;
			}
		}
		
		$Vuaufi3la1vg = $this->getRemainder($this->version);
		for ($V55vc4mewy5w=0; $V55vc4mewy5w<$Vuaufi3la1vg; $V55vc4mewy5w++) {
			$V3zmrbz3t25j = $this->getNextPosition();
			$this->setFrameAt($V3zmrbz3t25j, 0x02);
		}
		
		$this->runLength = array_fill(0, QRSPEC_WIDTH_MAX + 1, 0);
		if ($Vii5xs5yuhox < 0) {
			if (QR_FIND_BEST_MASK) {
				$Vii5xs5yuhoxed = $this->mask($this->width, $this->frame, $this->level);
			} else {
				$Vii5xs5yuhoxed = $this->makeMask($this->width, $this->frame, (intval(QR_DEFAULT_MASK) % 8), $this->level);
			}
		} else {
			$Vii5xs5yuhoxed = $this->makeMask($this->width, $this->frame, $Vii5xs5yuhox, $this->level);
		}
		if ($Vii5xs5yuhoxed == NULL) {
			return NULL;
		}
		$this->data = $Vii5xs5yuhoxed;
	}

	

	

	
	protected function setFrameAt($Vtpzvzcfn5th, $Vxt4wx3pvtez) {
		$this->frame[$Vtpzvzcfn5th['y']][$Vtpzvzcfn5th['x']] = chr($Vxt4wx3pvtez);
	}

	
	protected function getFrameAt($Vtpzvzcfn5th) {
		return ord($this->frame[$Vtpzvzcfn5th['y']][$Vtpzvzcfn5th['x']]);
	}

	
	protected function getNextPosition() {
		do {
			if ($this->bit == -1) {
				$this->bit = 0;
				return array('x'=>$this->x, 'y'=>$this->y);
			}
			$Vangwoo3ejfg = $this->x;
			$Vgxufordoa4t = $this->y;
			$Vim12f51jw5r = $this->width;
			if ($this->bit == 0) {
				$Vangwoo3ejfg--;
				$this->bit++;
			} else {
				$Vangwoo3ejfg++;
				$Vgxufordoa4t += $this->dir;
				$this->bit--;
			}
			if ($this->dir < 0) {
				if ($Vgxufordoa4t < 0) {
					$Vgxufordoa4t = 0;
					$Vangwoo3ejfg -= 2;
					$this->dir = 1;
					if ($Vangwoo3ejfg == 6) {
						$Vangwoo3ejfg--;
						$Vgxufordoa4t = 9;
					}
				}
			} else {
				if ($Vgxufordoa4t == $Vim12f51jw5r) {
					$Vgxufordoa4t = $Vim12f51jw5r - 1;
					$Vangwoo3ejfg -= 2;
					$this->dir = -1;
					if ($Vangwoo3ejfg == 6) {
						$Vangwoo3ejfg--;
						$Vgxufordoa4t -= 8;
					}
				}
			}
			if (($Vangwoo3ejfg < 0) OR ($Vgxufordoa4t < 0)) {
				return NULL;
			}
			$this->x = $Vangwoo3ejfg;
			$this->y = $Vgxufordoa4t;
		} while(ord($this->frame[$Vgxufordoa4t][$Vangwoo3ejfg]) & 0x80);
		return array('x'=>$Vangwoo3ejfg, 'y'=>$Vgxufordoa4t);
	}

	

	

	
	protected function init($Vzqlusoiyaa3) {
		$Vyyc4y2i5xre = $this->rsDataCodes1($Vzqlusoiyaa3);
		$V15aiufkv3ol = $this->rsEccCodes1($Vzqlusoiyaa3);
		$V1zbfvr4umtc = $this->init_rs(8, 0x11d, 0, 1, $V15aiufkv3ol, 255 - $Vyyc4y2i5xre - $V15aiufkv3ol);
		$V15xkctei4sc = 0;
		$Vmfvrsd5xyqhPos = 0;
		$Vpac4rdchh0u = 0;
		$Vc1boclv4ehu = $this->rsBlockNum1($Vzqlusoiyaa3);
		for ($V55vc4mewy5w=0; $V55vc4mewy5w < $Vc1boclv4ehu; ++$V55vc4mewy5w) {
			$Vrosp5rbbx5x = array_slice($this->ecccode, $Vpac4rdchh0u);
			$this->rsblocks[$V15xkctei4sc] = array();
			$this->rsblocks[$V15xkctei4sc]['dataLength'] = $Vyyc4y2i5xre;
			$this->rsblocks[$V15xkctei4sc]['data'] = array_slice($this->datacode, $Vmfvrsd5xyqhPos);
			$this->rsblocks[$V15xkctei4sc]['eccLength'] = $V15aiufkv3ol;
			$Vrosp5rbbx5x = $this->encode_rs_char($V1zbfvr4umtc, $this->rsblocks[$V15xkctei4sc]['data'], $Vrosp5rbbx5x);
			$this->rsblocks[$V15xkctei4sc]['ecc'] = $Vrosp5rbbx5x;
			$this->ecccode = array_merge(array_slice($this->ecccode,0, $Vpac4rdchh0u), $Vrosp5rbbx5x);
			$Vmfvrsd5xyqhPos += $Vyyc4y2i5xre;
			$Vpac4rdchh0u += $V15aiufkv3ol;
			$V15xkctei4sc++;
		}
		if ($this->rsBlockNum2($Vzqlusoiyaa3) == 0) {
			return 0;
		}
		$Vyyc4y2i5xre = $this->rsDataCodes2($Vzqlusoiyaa3);
		$V15aiufkv3ol = $this->rsEccCodes2($Vzqlusoiyaa3);
		$V1zbfvr4umtc = $this->init_rs(8, 0x11d, 0, 1, $V15aiufkv3ol, 255 - $Vyyc4y2i5xre - $V15aiufkv3ol);
		if ($V1zbfvr4umtc == NULL) {
			return -1;
		}
		$Vc1boclv4ehu = $this->rsBlockNum2($Vzqlusoiyaa3);
		for ($V55vc4mewy5w=0; $V55vc4mewy5w < $Vc1boclv4ehu; ++$V55vc4mewy5w) {
			$Vrosp5rbbx5x = array_slice($this->ecccode, $Vpac4rdchh0u);
			$this->rsblocks[$V15xkctei4sc] = array();
			$this->rsblocks[$V15xkctei4sc]['dataLength'] = $Vyyc4y2i5xre;
			$this->rsblocks[$V15xkctei4sc]['data'] = array_slice($this->datacode, $Vmfvrsd5xyqhPos);
			$this->rsblocks[$V15xkctei4sc]['eccLength'] = $V15aiufkv3ol;
			$Vrosp5rbbx5x = $this->encode_rs_char($V1zbfvr4umtc, $this->rsblocks[$V15xkctei4sc]['data'], $Vrosp5rbbx5x);
			$this->rsblocks[$V15xkctei4sc]['ecc'] = $Vrosp5rbbx5x;
			$this->ecccode = array_merge(array_slice($this->ecccode, 0, $Vpac4rdchh0u), $Vrosp5rbbx5x);
			$Vmfvrsd5xyqhPos += $Vyyc4y2i5xre;
			$Vpac4rdchh0u += $V15aiufkv3ol;
			$V15xkctei4sc++;
		}
		return 0;
	}

	
	protected function getCode() {
		if ($this->count < $this->dataLength) {
			$Vjs4rkfllnin = $this->count % $this->blocks;
			$Vwcmlurixvzgol = $this->count / $this->blocks;
			if ($Vwcmlurixvzgol >= $this->rsblocks[0]['dataLength']) {
				$Vjs4rkfllnin += $this->b1;
			}
			$Vnvu1qwc1scc = $this->rsblocks[$Vjs4rkfllnin]['data'][$Vwcmlurixvzgol];
		} elseif ($this->count < $this->dataLength + $this->eccLength) {
			$Vjs4rkfllnin = ($this->count - $this->dataLength) % $this->blocks;
			$Vwcmlurixvzgol = ($this->count - $this->dataLength) / $this->blocks;
			$Vnvu1qwc1scc = $this->rsblocks[$Vjs4rkfllnin]['ecc'][$Vwcmlurixvzgol];
		} else {
			return 0;
		}
		$this->count++;
		return $Vnvu1qwc1scc;
	}

	

	

	
	 protected function writeFormatInformation($Vvp2z3iuh5yx, &$Vclsbhwp13cf, $Vii5xs5yuhox, $Vkdo3kayg5ty) {
		$V2xociq1fcxb = 0;
		$Vmj4iakllwpw =  $this->getFormatInfo($Vii5xs5yuhox, $Vkdo3kayg5ty);
		for ($V55vc4mewy5w=0; $V55vc4mewy5w<8; ++$V55vc4mewy5w) {
			if ($Vmj4iakllwpw & 1) {
				$V2xociq1fcxb += 2;
				$Vz0hmukhwa4z = 0x85;
			} else {
				$Vz0hmukhwa4z = 0x84;
			}
			$Vclsbhwp13cf[8][$Vvp2z3iuh5yx - 1 - $V55vc4mewy5w] = chr($Vz0hmukhwa4z);
			if ($V55vc4mewy5w < 6) {
				$Vclsbhwp13cf[$V55vc4mewy5w][8] = chr($Vz0hmukhwa4z);
			} else {
				$Vclsbhwp13cf[$V55vc4mewy5w + 1][8] = chr($Vz0hmukhwa4z);
			}
			$Vmj4iakllwpw = $Vmj4iakllwpw >> 1;
		}
		for ($V55vc4mewy5w=0; $V55vc4mewy5w<7; ++$V55vc4mewy5w) {
		if ($Vmj4iakllwpw & 1) {
			$V2xociq1fcxb += 2;
			$Vz0hmukhwa4z = 0x85;
		} else {
			$Vz0hmukhwa4z = 0x84;
		}
		$Vclsbhwp13cf[$Vvp2z3iuh5yx - 7 + $V55vc4mewy5w][8] = chr($Vz0hmukhwa4z);
		if ($V55vc4mewy5w == 0) {
			$Vclsbhwp13cf[8][7] = chr($Vz0hmukhwa4z);
		} else {
			$Vclsbhwp13cf[8][6 - $V55vc4mewy5w] = chr($Vz0hmukhwa4z);
		}
		$Vmj4iakllwpw = $Vmj4iakllwpw >> 1;
		}
		return $V2xociq1fcxb;
	}

	
	 protected function mask0($Vangwoo3ejfg, $Vgxufordoa4t) {
		return ($Vangwoo3ejfg + $Vgxufordoa4t) & 1;
	}

	
	 protected function mask1($Vangwoo3ejfg, $Vgxufordoa4t) {
		return ($Vgxufordoa4t & 1);
	}

	
	 protected function mask2($Vangwoo3ejfg, $Vgxufordoa4t) {
		return ($Vangwoo3ejfg % 3);
	}

	
	 protected function mask3($Vangwoo3ejfg, $Vgxufordoa4t) {
		return ($Vangwoo3ejfg + $Vgxufordoa4t) % 3;
	}

	
	 protected function mask4($Vangwoo3ejfg, $Vgxufordoa4t) {
		return (((int)($Vgxufordoa4t / 2)) + ((int)($Vangwoo3ejfg / 3))) & 1;
	}

	
	 protected function mask5($Vangwoo3ejfg, $Vgxufordoa4t) {
		return (($Vangwoo3ejfg * $Vgxufordoa4t) & 1) + ($Vangwoo3ejfg * $Vgxufordoa4t) % 3;
	}

	
	 protected function mask6($Vangwoo3ejfg, $Vgxufordoa4t) {
		return ((($Vangwoo3ejfg * $Vgxufordoa4t) & 1) + ($Vangwoo3ejfg * $Vgxufordoa4t) % 3) & 1;
	}

	
	 protected function mask7($Vangwoo3ejfg, $Vgxufordoa4t) {
		return ((($Vangwoo3ejfg * $Vgxufordoa4t) % 3) + (($Vangwoo3ejfg + $Vgxufordoa4t) & 1)) & 1;
	}

	
	protected function generateMaskNo($Vii5xs5yuhoxNo, $Vvp2z3iuh5yx, $Vclsbhwp13cf) {
		$V5z5dbszdqxdMask = array_fill(0, $Vvp2z3iuh5yx, array_fill(0, $Vvp2z3iuh5yx, 0));
		for ($Vgxufordoa4t=0; $Vgxufordoa4t<$Vvp2z3iuh5yx; ++$Vgxufordoa4t) {
			for ($Vangwoo3ejfg=0; $Vangwoo3ejfg<$Vvp2z3iuh5yx; ++$Vangwoo3ejfg) {
				if (ord($Vclsbhwp13cf[$Vgxufordoa4t][$Vangwoo3ejfg]) & 0x80) {
					$V5z5dbszdqxdMask[$Vgxufordoa4t][$Vangwoo3ejfg] = 0;
				} else {
					$Vii5xs5yuhoxFunc = call_user_func(array($this, 'mask'.$Vii5xs5yuhoxNo), $Vangwoo3ejfg, $Vgxufordoa4t);
					$V5z5dbszdqxdMask[$Vgxufordoa4t][$Vangwoo3ejfg] = ($Vii5xs5yuhoxFunc == 0)?1:0;
				}
			}
		}
		return $V5z5dbszdqxdMask;
	}

	
	 protected function makeMaskNo($Vii5xs5yuhoxNo, $Vvp2z3iuh5yx, $Vvt20qqut4bu, &$Vc0aiseldrl3, $Vii5xs5yuhoxGenOnly=false) {
		$Vpq3acakq35c = 0;
		$V5z5dbszdqxdMask = array();
		$V5z5dbszdqxdMask = $this->generateMaskNo($Vii5xs5yuhoxNo, $Vvp2z3iuh5yx, $Vvt20qqut4bu, $Vc0aiseldrl3);
		if ($Vii5xs5yuhoxGenOnly) {
			return;
		}
		$Vc0aiseldrl3 = $Vvt20qqut4bu;
		for ($Vgxufordoa4t=0; $Vgxufordoa4t<$Vvp2z3iuh5yx; ++$Vgxufordoa4t) {
			for ($Vangwoo3ejfg=0; $Vangwoo3ejfg<$Vvp2z3iuh5yx; ++$Vangwoo3ejfg) {
				if ($V5z5dbszdqxdMask[$Vgxufordoa4t][$Vangwoo3ejfg] == 1) {
					$Vc0aiseldrl3[$Vgxufordoa4t][$Vangwoo3ejfg] = chr(ord($Vvt20qqut4bu[$Vgxufordoa4t][$Vangwoo3ejfg]) ^ ((int)($V5z5dbszdqxdMask[$Vgxufordoa4t][$Vangwoo3ejfg])));
				}
				$Vpq3acakq35c += (int)(ord($Vc0aiseldrl3[$Vgxufordoa4t][$Vangwoo3ejfg]) & 1);
			}
		}
		return $Vpq3acakq35c;
	}

	
	 protected function makeMask($Vvp2z3iuh5yx, $Vclsbhwp13cf, $Vii5xs5yuhoxNo, $Vkdo3kayg5ty) {
		$Vii5xs5yuhoxed = array_fill(0, $Vvp2z3iuh5yx, str_repeat("\0", $Vvp2z3iuh5yx));
		$this->makeMaskNo($Vii5xs5yuhoxNo, $Vvp2z3iuh5yx, $Vclsbhwp13cf, $Vii5xs5yuhoxed);
		$this->writeFormatInformation($Vvp2z3iuh5yx, $Vii5xs5yuhoxed, $Vii5xs5yuhoxNo, $Vkdo3kayg5ty);
		return $Vii5xs5yuhoxed;
	}

	
	 protected function calcN1N3($Vq2lrqstguwzgth) {
		$Vc0aiseldrl3emerit = 0;
		for ($V55vc4mewy5w=0; $V55vc4mewy5w<$Vq2lrqstguwzgth; ++$V55vc4mewy5w) {
			if ($this->runLength[$V55vc4mewy5w] >= 5) {
				$Vc0aiseldrl3emerit += (N1 + ($this->runLength[$V55vc4mewy5w] - 5));
			}
			if ($V55vc4mewy5w & 1) {
				if (($V55vc4mewy5w >= 3) AND ($V55vc4mewy5w < ($Vq2lrqstguwzgth-2)) AND ($this->runLength[$V55vc4mewy5w] % 3 == 0)) {
					$Vm4kepnqwzv5 = (int)($this->runLength[$V55vc4mewy5w] / 3);
					if (($this->runLength[$V55vc4mewy5w-2] == $Vm4kepnqwzv5)
						AND ($this->runLength[$V55vc4mewy5w-1] == $Vm4kepnqwzv5)
						AND ($this->runLength[$V55vc4mewy5w+1] == $Vm4kepnqwzv5)
						AND ($this->runLength[$V55vc4mewy5w+2] == $Vm4kepnqwzv5)) {
						if (($this->runLength[$V55vc4mewy5w-3] < 0) OR ($this->runLength[$V55vc4mewy5w-3] >= (4 * $Vm4kepnqwzv5))) {
							$Vc0aiseldrl3emerit += N3;
						} elseif ((($V55vc4mewy5w+3) >= $Vq2lrqstguwzgth) OR ($this->runLength[$V55vc4mewy5w+3] >= (4 * $Vm4kepnqwzv5))) {
							$Vc0aiseldrl3emerit += N3;
						}
					}
				}
			}
		}
		return $Vc0aiseldrl3emerit;
	}

	
	 protected function evaluateSymbol($Vvp2z3iuh5yx, $Vclsbhwp13cf) {
		$Vhf5ft54uc5q = 0;
		$Vc0aiseldrl3emerit = 0;
		for ($Vgxufordoa4t=0; $Vgxufordoa4t<$Vvp2z3iuh5yx; ++$Vgxufordoa4t) {
			$Vhf5ft54uc5q = 0;
			$this->runLength[0] = 1;
			$Vclsbhwp13cfY = $Vclsbhwp13cf[$Vgxufordoa4t];
			if ($Vgxufordoa4t > 0) {
				$Vclsbhwp13cfYM = $Vclsbhwp13cf[$Vgxufordoa4t-1];
			}
			for ($Vangwoo3ejfg=0; $Vangwoo3ejfg<$Vvp2z3iuh5yx; ++$Vangwoo3ejfg) {
				if (($Vangwoo3ejfg > 0) AND ($Vgxufordoa4t > 0)) {
					$Vpq3acakq35c22 = ord($Vclsbhwp13cfY[$Vangwoo3ejfg]) & ord($Vclsbhwp13cfY[$Vangwoo3ejfg-1]) & ord($Vclsbhwp13cfYM[$Vangwoo3ejfg]) & ord($Vclsbhwp13cfYM[$Vangwoo3ejfg-1]);
					$Vim12f51jw5r22 = ord($Vclsbhwp13cfY[$Vangwoo3ejfg]) | ord($Vclsbhwp13cfY[$Vangwoo3ejfg-1]) | ord($Vclsbhwp13cfYM[$Vangwoo3ejfg]) | ord($Vclsbhwp13cfYM[$Vangwoo3ejfg-1]);
					if (($Vpq3acakq35c22 | ($Vim12f51jw5r22 ^ 1)) & 1) {
						$Vc0aiseldrl3emerit += N2;
					}
				}
				if (($Vangwoo3ejfg == 0) AND (ord($Vclsbhwp13cfY[$Vangwoo3ejfg]) & 1)) {
					$this->runLength[0] = -1;
					$Vhf5ft54uc5q = 1;
					$this->runLength[$Vhf5ft54uc5q] = 1;
				} elseif ($Vangwoo3ejfg > 0) {
					if ((ord($Vclsbhwp13cfY[$Vangwoo3ejfg]) ^ ord($Vclsbhwp13cfY[$Vangwoo3ejfg-1])) & 1) {
						$Vhf5ft54uc5q++;
						$this->runLength[$Vhf5ft54uc5q] = 1;
					} else {
						$this->runLength[$Vhf5ft54uc5q]++;
					}
				}
			}
			$Vc0aiseldrl3emerit += $this->calcN1N3($Vhf5ft54uc5q+1);
		}
		for ($Vangwoo3ejfg=0; $Vangwoo3ejfg<$Vvp2z3iuh5yx; ++$Vangwoo3ejfg) {
			$Vhf5ft54uc5q = 0;
			$this->runLength[0] = 1;
			for ($Vgxufordoa4t=0; $Vgxufordoa4t<$Vvp2z3iuh5yx; ++$Vgxufordoa4t) {
				if (($Vgxufordoa4t == 0) AND (ord($Vclsbhwp13cf[$Vgxufordoa4t][$Vangwoo3ejfg]) & 1)) {
					$this->runLength[0] = -1;
					$Vhf5ft54uc5q = 1;
					$this->runLength[$Vhf5ft54uc5q] = 1;
				} elseif ($Vgxufordoa4t > 0) {
					if ((ord($Vclsbhwp13cf[$Vgxufordoa4t][$Vangwoo3ejfg]) ^ ord($Vclsbhwp13cf[$Vgxufordoa4t-1][$Vangwoo3ejfg])) & 1) {
						$Vhf5ft54uc5q++;
						$this->runLength[$Vhf5ft54uc5q] = 1;
					} else {
						$this->runLength[$Vhf5ft54uc5q]++;
					}
				}
			}
			$Vc0aiseldrl3emerit += $this->calcN1N3($Vhf5ft54uc5q+1);
		}
		return $Vc0aiseldrl3emerit;
	}

	
	 protected function mask($Vvp2z3iuh5yx, $Vclsbhwp13cf, $Vkdo3kayg5ty) {
		$V3ficldorkiy = PHP_INT_MAX;
		$Vpq3acakq35cestMaskNum = 0;
		$Vpq3acakq35cestMask = array();
		$Vwcmlurixvzghecked_masks = array(0, 1, 2, 3, 4, 5, 6, 7);
		if (QR_FIND_FROM_RANDOM !== false) {
			$V3mxg0rsehab = 8 - (QR_FIND_FROM_RANDOM % 9);
			for ($V55vc4mewy5w = 0; $V55vc4mewy5w <  $V3mxg0rsehab; ++$V55vc4mewy5w) {
				$Vkyl2sxb4iy0 = rand (0, count($Vwcmlurixvzghecked_masks)-1);
				unset($Vwcmlurixvzghecked_masks[$Vkyl2sxb4iy0]);
				$Vwcmlurixvzghecked_masks = array_values($Vwcmlurixvzghecked_masks);
			}
		}
		$Vpq3acakq35cestMask = $Vclsbhwp13cf;
		foreach ($Vwcmlurixvzghecked_masks as $V55vc4mewy5w) {
			$Vii5xs5yuhox = array_fill(0, $Vvp2z3iuh5yx, str_repeat("\0", $Vvp2z3iuh5yx));
			$Vc0aiseldrl3emerit = 0;
			$V2xociq1fcxb = 0;
			$V2xociq1fcxb  = $this->makeMaskNo($V55vc4mewy5w, $Vvp2z3iuh5yx, $Vclsbhwp13cf, $Vii5xs5yuhox);
			$V2xociq1fcxb += $this->writeFormatInformation($Vvp2z3iuh5yx, $Vii5xs5yuhox, $V55vc4mewy5w, $Vkdo3kayg5ty);
			$V2xociq1fcxb  = (int)(100 * $V2xociq1fcxb / ($Vvp2z3iuh5yx * $Vvp2z3iuh5yx));
			$Vc0aiseldrl3emerit = (int)((int)(abs($V2xociq1fcxb - 50) / 5) * N4);
			$Vc0aiseldrl3emerit += $this->evaluateSymbol($Vvp2z3iuh5yx, $Vii5xs5yuhox);
			if ($Vc0aiseldrl3emerit < $V3ficldorkiy) {
				$V3ficldorkiy = $Vc0aiseldrl3emerit;
				$Vpq3acakq35cestMask = $Vii5xs5yuhox;
				$Vpq3acakq35cestMaskNum = $V55vc4mewy5w;
			}
		}
		return $Vpq3acakq35cestMask;
	}

	

	

	
	 protected function isdigitat($Vvt20qqut4butr, $Vsjw1s1w2nqe) {
		if ($Vsjw1s1w2nqe >= strlen($Vvt20qqut4butr)) {
			return false;
		}
		return ((ord($Vvt20qqut4butr[$Vsjw1s1w2nqe]) >= ord('0'))&&(ord($Vvt20qqut4butr[$Vsjw1s1w2nqe]) <= ord('9')));
	}

	
	 protected function isalnumat($Vvt20qqut4butr, $Vsjw1s1w2nqe) {
		if ($Vsjw1s1w2nqe >= strlen($Vvt20qqut4butr)) {
			return false;
		}
		return ($this->lookAnTable(ord($Vvt20qqut4butr[$Vsjw1s1w2nqe])) >= 0);
	}

	
	 protected function identifyMode($Vsjw1s1w2nqe) {
		if ($Vsjw1s1w2nqe >= strlen($this->dataStr)) {
			return QR_MODE_NL;
		}
		$Vwcmlurixvzg = $this->dataStr[$Vsjw1s1w2nqe];
		if ($this->isdigitat($this->dataStr, $Vsjw1s1w2nqe)) {
			return QR_MODE_NM;
		} elseif ($this->isalnumat($this->dataStr, $Vsjw1s1w2nqe)) {
			return QR_MODE_AN;
		} elseif ($this->hint == QR_MODE_KJ) {
			if ($Vsjw1s1w2nqe+1 < strlen($this->dataStr)) {
				$Vc0aiseldrl3 = $this->dataStr[$Vsjw1s1w2nqe+1];
				$Vim12f51jw5rord = (ord($Vwcmlurixvzg) << 8) | ord($Vc0aiseldrl3);
				if (($Vim12f51jw5rord >= 0x8140 && $Vim12f51jw5rord <= 0x9ffc) OR ($Vim12f51jw5rord >= 0xe040 && $Vim12f51jw5rord <= 0xebbf)) {
					return QR_MODE_KJ;
				}
			}
		}
		return QR_MODE_8B;
	}

	
	 protected function eatNum() {
		$Vzjewrnmxdt4 = $this->lengthIndicator(QR_MODE_NM, $this->version);
		$V1yuhsvbtlvr = 0;
		while($this->isdigitat($this->dataStr, $V1yuhsvbtlvr)) {
			$V1yuhsvbtlvr++;
		}
		$Vx3bbct5zd5o = $V1yuhsvbtlvr;
		$V0vkydnx50wa = $this->identifyMode($V1yuhsvbtlvr);
		if ($V0vkydnx50wa == QR_MODE_8B) {
			$Vc0aiseldrl3if = $this->estimateBitsModeNum($Vx3bbct5zd5o) + 4 + $Vzjewrnmxdt4
			+ $this->estimateBitsMode8(1)         
			- $this->estimateBitsMode8($Vx3bbct5zd5o + 1); 
			if ($Vc0aiseldrl3if > 0) {
				return $this->eat8();
			}
		}
		if ($V0vkydnx50wa == QR_MODE_AN) {
			$Vc0aiseldrl3if = $this->estimateBitsModeNum($Vx3bbct5zd5o) + 4 + $Vzjewrnmxdt4
			+ $this->estimateBitsModeAn(1)        
			- $this->estimateBitsModeAn($Vx3bbct5zd5o + 1);
			if ($Vc0aiseldrl3if > 0) {
				return $this->eatAn();
			}
		}
		$this->items = $this->appendNewInputItem($this->items, QR_MODE_NM, $Vx3bbct5zd5o, str_split($this->dataStr));
		return $Vx3bbct5zd5o;
	}

	
	 protected function eatAn() {
		$Vj1lo3zncgjp = $this->lengthIndicator(QR_MODE_AN,  $this->version);
		$Vzjewrnmxdt4 = $this->lengthIndicator(QR_MODE_NM, $this->version);
		$V1yuhsvbtlvr =1 ;
		while($this->isalnumat($this->dataStr, $V1yuhsvbtlvr)) {
			if ($this->isdigitat($this->dataStr, $V1yuhsvbtlvr)) {
				$Vg1ntuknrauk = $V1yuhsvbtlvr;
				while($this->isdigitat($this->dataStr, $Vg1ntuknrauk)) {
					$Vg1ntuknrauk++;
				}
				$Vc0aiseldrl3if = $this->estimateBitsModeAn($V1yuhsvbtlvr) 
				+ $this->estimateBitsModeNum($Vg1ntuknrauk - $V1yuhsvbtlvr) + 4 + $Vzjewrnmxdt4
				- $this->estimateBitsModeAn($Vg1ntuknrauk); 
				if ($Vc0aiseldrl3if < 0) {
					break;
				} else {
					$V1yuhsvbtlvr = $Vg1ntuknrauk;
				}
			} else {
				$V1yuhsvbtlvr++;
			}
		}
		$Vx3bbct5zd5o = $V1yuhsvbtlvr;
		if (!$this->isalnumat($this->dataStr, $V1yuhsvbtlvr)) {
			$Vc0aiseldrl3if = $this->estimateBitsModeAn($Vx3bbct5zd5o) + 4 + $Vj1lo3zncgjp
			+ $this->estimateBitsMode8(1) 
			- $this->estimateBitsMode8($Vx3bbct5zd5o + 1); 
			if ($Vc0aiseldrl3if > 0) {
				return $this->eat8();
			}
		}
		$this->items = $this->appendNewInputItem($this->items, QR_MODE_AN, $Vx3bbct5zd5o, str_split($this->dataStr));
		return $Vx3bbct5zd5o;
	}

	
	 protected function eatKanji() {
		$V1yuhsvbtlvr = 0;
		while($this->identifyMode($V1yuhsvbtlvr) == QR_MODE_KJ) {
			$V1yuhsvbtlvr += 2;
		}
		$this->items = $this->appendNewInputItem($this->items, QR_MODE_KJ, $V1yuhsvbtlvr, str_split($this->dataStr));
		return $Vx3bbct5zd5o;
	}

	
	 protected function eat8() {
		$Vj1lo3zncgjp = $this->lengthIndicator(QR_MODE_AN, $this->version);
		$Vzjewrnmxdt4 = $this->lengthIndicator(QR_MODE_NM, $this->version);
		$V1yuhsvbtlvr = 1;
		$Vmfvrsd5xyqhStrLen = strlen($this->dataStr);
		while($V1yuhsvbtlvr < $Vmfvrsd5xyqhStrLen) {
			$V0vkydnx50wa = $this->identifyMode($V1yuhsvbtlvr);
			if ($V0vkydnx50wa == QR_MODE_KJ) {
				break;
			}
			if ($V0vkydnx50wa == QR_MODE_NM) {
				$Vg1ntuknrauk = $V1yuhsvbtlvr;
				while($this->isdigitat($this->dataStr, $Vg1ntuknrauk)) {
					$Vg1ntuknrauk++;
				}
				$Vc0aiseldrl3if = $this->estimateBitsMode8($V1yuhsvbtlvr) 
				+ $this->estimateBitsModeNum($Vg1ntuknrauk - $V1yuhsvbtlvr) + 4 + $Vzjewrnmxdt4
				- $this->estimateBitsMode8($Vg1ntuknrauk); 
				if ($Vc0aiseldrl3if < 0) {
					break;
				} else {
					$V1yuhsvbtlvr = $Vg1ntuknrauk;
				}
			} elseif ($V0vkydnx50wa == QR_MODE_AN) {
				$Vg1ntuknrauk = $V1yuhsvbtlvr;
				while($this->isalnumat($this->dataStr, $Vg1ntuknrauk)) {
					$Vg1ntuknrauk++;
				}
				$Vc0aiseldrl3if = $this->estimateBitsMode8($V1yuhsvbtlvr)  
				+ $this->estimateBitsModeAn($Vg1ntuknrauk - $V1yuhsvbtlvr) + 4 + $Vj1lo3zncgjp
				- $this->estimateBitsMode8($Vg1ntuknrauk); 
				if ($Vc0aiseldrl3if < 0) {
					break;
				} else {
					$V1yuhsvbtlvr = $Vg1ntuknrauk;
				}
			} else {
				$V1yuhsvbtlvr++;
			}
		}
		$Vx3bbct5zd5o = $V1yuhsvbtlvr;
		$this->items = $this->appendNewInputItem($this->items, QR_MODE_8B, $Vx3bbct5zd5o, str_split($this->dataStr));
		return $Vx3bbct5zd5o;
	}

	
	 protected function splitString() {
		while (strlen($this->dataStr) > 0) {
			$V0vkydnx50wa = $this->identifyMode(0);
			switch ($V0vkydnx50wa) {
				case QR_MODE_NM: {
					$Vq2lrqstguwzgth = $this->eatNum();
					break;
				}
				case QR_MODE_AN: {
					$Vq2lrqstguwzgth = $this->eatAn();
					break;
				}
				case QR_MODE_KJ: {
					if ($Vwq2r1m1u5he == QR_MODE_KJ) {
						$Vq2lrqstguwzgth = $this->eatKanji();
					} else {
						$Vq2lrqstguwzgth = $this->eat8();
					}
					break;
				}
				default: {
					$Vq2lrqstguwzgth = $this->eat8();
					break;
				}
			}
			if ($Vq2lrqstguwzgth == 0) {
				return 0;
			}
			if ($Vq2lrqstguwzgth < 0) {
				return -1;
			}
			$this->dataStr = substr($this->dataStr, $Vq2lrqstguwzgth);
		}
		return 0;
	}

	
	 protected function toUpper() {
		$Vqnnai3q0zzjLen = strlen($this->dataStr);
		$V1yuhsvbtlvr = 0;
		while ($V1yuhsvbtlvr < $Vqnnai3q0zzjLen) {
			$V0vkydnx50wa = $this->identifyMode(substr($this->dataStr, $V1yuhsvbtlvr), $this->hint);
			if ($V0vkydnx50wa == QR_MODE_KJ) {
				$V1yuhsvbtlvr += 2;
			} else {
				if ((ord($this->dataStr[$V1yuhsvbtlvr]) >= ord('a')) AND (ord($this->dataStr[$V1yuhsvbtlvr]) <= ord('z'))) {
					$this->dataStr[$V1yuhsvbtlvr] = chr(ord($this->dataStr[$V1yuhsvbtlvr]) - 32);
				}
				$V1yuhsvbtlvr++;
			}
		}
		return $this->dataStr;
	}

	

	

	
	 protected function newInputItem($V0vkydnx50wa, $Vpynh4hckwyw, $Vmfvrsd5xyqh, $Vpq3acakq35cstream=null) {
		$Vvt20qqut4buetData = array_slice($Vmfvrsd5xyqh, 0, $Vpynh4hckwyw);
		if (count($Vvt20qqut4buetData) < $Vpynh4hckwyw) {
			$Vvt20qqut4buetData = array_merge($Vvt20qqut4buetData, array_fill(0, ($Vpynh4hckwyw - count($Vvt20qqut4buetData)), 0));
		}
		if (!$this->check($V0vkydnx50wa, $Vpynh4hckwyw, $Vvt20qqut4buetData)) {
			return NULL;
		}
		$V55vc4mewy5wnputitem = array();
		$V55vc4mewy5wnputitem['mode'] = $V0vkydnx50wa;
		$V55vc4mewy5wnputitem['size'] = $Vpynh4hckwyw;
		$V55vc4mewy5wnputitem['data'] = $Vvt20qqut4buetData;
		$V55vc4mewy5wnputitem['bstream'] = $Vpq3acakq35cstream;
		return $V55vc4mewy5wnputitem;
	}

	
	 protected function encodeModeNum($V55vc4mewy5wnputitem, $Vlqcgo2rcpui) {
		$Vim12f51jw5rords = (int)($V55vc4mewy5wnputitem['size'] / 3);
		$V55vc4mewy5wnputitem['bstream'] = array();
		$Vxt4wx3pvtez = 0x1;
		$V55vc4mewy5wnputitem['bstream'] = $this->appendNum($V55vc4mewy5wnputitem['bstream'], 4, $Vxt4wx3pvtez);
		$V55vc4mewy5wnputitem['bstream'] = $this->appendNum($V55vc4mewy5wnputitem['bstream'], $this->lengthIndicator(QR_MODE_NM, $Vlqcgo2rcpui), $V55vc4mewy5wnputitem['size']);
		for ($V55vc4mewy5w=0; $V55vc4mewy5w < $Vim12f51jw5rords; ++$V55vc4mewy5w) {
			$Vxt4wx3pvtez  = (ord($V55vc4mewy5wnputitem['data'][$V55vc4mewy5w*3  ]) - ord('0')) * 100;
			$Vxt4wx3pvtez += (ord($V55vc4mewy5wnputitem['data'][$V55vc4mewy5w*3+1]) - ord('0')) * 10;
			$Vxt4wx3pvtez += (ord($V55vc4mewy5wnputitem['data'][$V55vc4mewy5w*3+2]) - ord('0'));
			$V55vc4mewy5wnputitem['bstream'] = $this->appendNum($V55vc4mewy5wnputitem['bstream'], 10, $Vxt4wx3pvtez);
		}
		if ($V55vc4mewy5wnputitem['size'] - $Vim12f51jw5rords * 3 == 1) {
			$Vxt4wx3pvtez = ord($V55vc4mewy5wnputitem['data'][$Vim12f51jw5rords*3]) - ord('0');
			$V55vc4mewy5wnputitem['bstream'] = $this->appendNum($V55vc4mewy5wnputitem['bstream'], 4, $Vxt4wx3pvtez);
		} elseif (($V55vc4mewy5wnputitem['size'] - ($Vim12f51jw5rords * 3)) == 2) {
			$Vxt4wx3pvtez  = (ord($V55vc4mewy5wnputitem['data'][$Vim12f51jw5rords*3  ]) - ord('0')) * 10;
			$Vxt4wx3pvtez += (ord($V55vc4mewy5wnputitem['data'][$Vim12f51jw5rords*3+1]) - ord('0'));
			$V55vc4mewy5wnputitem['bstream'] = $this->appendNum($V55vc4mewy5wnputitem['bstream'], 7, $Vxt4wx3pvtez);
		}
		return $V55vc4mewy5wnputitem;
	}

	
	 protected function encodeModeAn($V55vc4mewy5wnputitem, $Vlqcgo2rcpui) {
		$Vim12f51jw5rords = (int)($V55vc4mewy5wnputitem['size'] / 2);
		$V55vc4mewy5wnputitem['bstream'] = array();
		$V55vc4mewy5wnputitem['bstream'] = $this->appendNum($V55vc4mewy5wnputitem['bstream'], 4, 0x02);
		$V55vc4mewy5wnputitem['bstream'] = $this->appendNum($V55vc4mewy5wnputitem['bstream'], $this->lengthIndicator(QR_MODE_AN, $Vlqcgo2rcpui), $V55vc4mewy5wnputitem['size']);
		for ($V55vc4mewy5w=0; $V55vc4mewy5w < $Vim12f51jw5rords; ++$V55vc4mewy5w) {
			$Vxt4wx3pvtez  = (int)($this->lookAnTable(ord($V55vc4mewy5wnputitem['data'][$V55vc4mewy5w*2])) * 45);
			$Vxt4wx3pvtez += (int)($this->lookAnTable(ord($V55vc4mewy5wnputitem['data'][($V55vc4mewy5w*2)+1])));
			$V55vc4mewy5wnputitem['bstream'] = $this->appendNum($V55vc4mewy5wnputitem['bstream'], 11, $Vxt4wx3pvtez);
		}
		if ($V55vc4mewy5wnputitem['size'] & 1) {
			$Vxt4wx3pvtez = $this->lookAnTable(ord($V55vc4mewy5wnputitem['data'][($Vim12f51jw5rords * 2)]));
			$V55vc4mewy5wnputitem['bstream'] = $this->appendNum($V55vc4mewy5wnputitem['bstream'], 6, $Vxt4wx3pvtez);
		}
		return $V55vc4mewy5wnputitem;
	}

	
	 protected function encodeMode8($V55vc4mewy5wnputitem, $Vlqcgo2rcpui) {
		$V55vc4mewy5wnputitem['bstream'] = array();
		$V55vc4mewy5wnputitem['bstream'] = $this->appendNum($V55vc4mewy5wnputitem['bstream'], 4, 0x4);
		$V55vc4mewy5wnputitem['bstream'] = $this->appendNum($V55vc4mewy5wnputitem['bstream'], $this->lengthIndicator(QR_MODE_8B, $Vlqcgo2rcpui), $V55vc4mewy5wnputitem['size']);
		for ($V55vc4mewy5w=0; $V55vc4mewy5w < $V55vc4mewy5wnputitem['size']; ++$V55vc4mewy5w) {
			$V55vc4mewy5wnputitem['bstream'] = $this->appendNum($V55vc4mewy5wnputitem['bstream'], 8, ord($V55vc4mewy5wnputitem['data'][$V55vc4mewy5w]));
		}
		return $V55vc4mewy5wnputitem;
	}

	
	 protected function encodeModeKanji($V55vc4mewy5wnputitem, $Vlqcgo2rcpui) {
		$V55vc4mewy5wnputitem['bstream'] = array();
		$V55vc4mewy5wnputitem['bstream'] = $this->appendNum($V55vc4mewy5wnputitem['bstream'], 4, 0x8);
		$V55vc4mewy5wnputitem['bstream'] = $this->appendNum($V55vc4mewy5wnputitem['bstream'], $this->lengthIndicator(QR_MODE_KJ, $Vlqcgo2rcpui), (int)($V55vc4mewy5wnputitem['size'] / 2));
		for ($V55vc4mewy5w=0; $V55vc4mewy5w<$V55vc4mewy5wnputitem['size']; $V55vc4mewy5w+=2) {
			$Vxt4wx3pvtez = (ord($V55vc4mewy5wnputitem['data'][$V55vc4mewy5w]) << 8) | ord($V55vc4mewy5wnputitem['data'][$V55vc4mewy5w+1]);
			if ($Vxt4wx3pvtez <= 0x9ffc) {
				$Vxt4wx3pvtez -= 0x8140;
			} else {
				$Vxt4wx3pvtez -= 0xc140;
			}
			$Vvjxcwrp4tjq = ($Vxt4wx3pvtez >> 8) * 0xc0;
			$Vxt4wx3pvtez = ($Vxt4wx3pvtez & 0xff) + $Vvjxcwrp4tjq;
			$V55vc4mewy5wnputitem['bstream'] = $this->appendNum($V55vc4mewy5wnputitem['bstream'], 13, $Vxt4wx3pvtez);
		}
		return $V55vc4mewy5wnputitem;
	}

	
	 protected function encodeModeStructure($V55vc4mewy5wnputitem) {
		$V55vc4mewy5wnputitem['bstream'] = array();
		$V55vc4mewy5wnputitem['bstream'] = $this->appendNum($V55vc4mewy5wnputitem['bstream'], 4, 0x03);
		$V55vc4mewy5wnputitem['bstream'] = $this->appendNum($V55vc4mewy5wnputitem['bstream'], 4, ord($V55vc4mewy5wnputitem['data'][1]) - 1);
		$V55vc4mewy5wnputitem['bstream'] = $this->appendNum($V55vc4mewy5wnputitem['bstream'], 4, ord($V55vc4mewy5wnputitem['data'][0]) - 1);
		$V55vc4mewy5wnputitem['bstream'] = $this->appendNum($V55vc4mewy5wnputitem['bstream'], 8, ord($V55vc4mewy5wnputitem['data'][2]));
		return $V55vc4mewy5wnputitem;
	}

	
	 protected function encodeBitStream($V55vc4mewy5wnputitem, $Vlqcgo2rcpui) {
		$V55vc4mewy5wnputitem['bstream'] = array();
		$Vim12f51jw5rords = $this->maximumWords($V55vc4mewy5wnputitem['mode'], $Vlqcgo2rcpui);
		if ($V55vc4mewy5wnputitem['size'] > $Vim12f51jw5rords) {
			$Vvt20qqut4but1 = $this->newInputItem($V55vc4mewy5wnputitem['mode'], $Vim12f51jw5rords, $V55vc4mewy5wnputitem['data']);
			$Vvt20qqut4but2 = $this->newInputItem($V55vc4mewy5wnputitem['mode'], $V55vc4mewy5wnputitem['size'] - $Vim12f51jw5rords, array_slice($V55vc4mewy5wnputitem['data'], $Vim12f51jw5rords));
			$Vvt20qqut4but1 = $this->encodeBitStream($Vvt20qqut4but1, $Vlqcgo2rcpui);
			$Vvt20qqut4but2 = $this->encodeBitStream($Vvt20qqut4but2, $Vlqcgo2rcpui);
			$V55vc4mewy5wnputitem['bstream'] = array();
			$V55vc4mewy5wnputitem['bstream'] = $this->appendBitstream($V55vc4mewy5wnputitem['bstream'], $Vvt20qqut4but1['bstream']);
			$V55vc4mewy5wnputitem['bstream'] = $this->appendBitstream($V55vc4mewy5wnputitem['bstream'], $Vvt20qqut4but2['bstream']);
		} else {
			switch($V55vc4mewy5wnputitem['mode']) {
				case QR_MODE_NM: {
					$V55vc4mewy5wnputitem = $this->encodeModeNum($V55vc4mewy5wnputitem, $Vlqcgo2rcpui);
					break;
				}
				case QR_MODE_AN: {
					$V55vc4mewy5wnputitem = $this->encodeModeAn($V55vc4mewy5wnputitem, $Vlqcgo2rcpui);
					break;
				}
				case QR_MODE_8B: {
					$V55vc4mewy5wnputitem = $this->encodeMode8($V55vc4mewy5wnputitem, $Vlqcgo2rcpui);
					break;
				}
				case QR_MODE_KJ: {
					$V55vc4mewy5wnputitem = $this->encodeModeKanji($V55vc4mewy5wnputitem, $Vlqcgo2rcpui);
					break;
				}
				case QR_MODE_ST: {
					$V55vc4mewy5wnputitem = $this->encodeModeStructure($V55vc4mewy5wnputitem);
					break;
				}
				default: {
					break;
				}
			}
		}
		return $V55vc4mewy5wnputitem;
	}

	

	

	
	protected function appendNewInputItem($Vblnlvgjj0u5, $V0vkydnx50wa, $Vpynh4hckwyw, $Vmfvrsd5xyqh) {
		$Vz3cecqvz21s = $this->newInputItem($V0vkydnx50wa, $Vpynh4hckwyw, $Vmfvrsd5xyqh);
		if (!empty($Vz3cecqvz21s)) {
			$Vblnlvgjj0u5[] = $Vz3cecqvz21s;
		}
		return $Vblnlvgjj0u5;
	}

	
	 protected function insertStructuredAppendHeader($Vblnlvgjj0u5, $Vpynh4hckwyw, $V55vc4mewy5wndex, $V1yuhsvbtlvrarity) {
		if ($Vpynh4hckwyw > MAX_STRUCTURED_SYMBOLS) {
			return -1;
		}
		if (($V55vc4mewy5wndex <= 0) OR ($V55vc4mewy5wndex > MAX_STRUCTURED_SYMBOLS)) {
			return -1;
		}
		$Vpq3acakq35cuf = array($Vpynh4hckwyw, $V55vc4mewy5wndex, $V1yuhsvbtlvrarity);
		$Vwzjgxnrkslp = $this->newInputItem(QR_MODE_ST, 3, buf);
		array_unshift($Vblnlvgjj0u5, $Vwzjgxnrkslp);
		return $Vblnlvgjj0u5;
	}

	
	 protected function calcParity($Vblnlvgjj0u5) {
		$V1yuhsvbtlvrarity = 0;
		foreach ($Vblnlvgjj0u5 as $V55vc4mewy5wtem) {
			if ($V55vc4mewy5wtem['mode'] != QR_MODE_ST) {
				for ($V55vc4mewy5w=$V55vc4mewy5wtem['size']-1; $V55vc4mewy5w>=0; --$V55vc4mewy5w) {
					$V1yuhsvbtlvrarity ^= $V55vc4mewy5wtem['data'][$V55vc4mewy5w];
				}
			}
		}
		return $V1yuhsvbtlvrarity;
	}

	
	 protected function checkModeNum($Vpynh4hckwyw, $Vmfvrsd5xyqh) {
		for ($V55vc4mewy5w=0; $V55vc4mewy5w<$Vpynh4hckwyw; ++$V55vc4mewy5w) {
			if ((ord($Vmfvrsd5xyqh[$V55vc4mewy5w]) < ord('0')) OR (ord($Vmfvrsd5xyqh[$V55vc4mewy5w]) > ord('9'))){
				return false;
			}
		}
		return true;
	}

	
	protected function lookAnTable($Vwcmlurixvzg) {
		return (($Vwcmlurixvzg > 127)?-1:$this->anTable[$Vwcmlurixvzg]);
	}

	
	 protected function checkModeAn($Vpynh4hckwyw, $Vmfvrsd5xyqh) {
		for ($V55vc4mewy5w=0; $V55vc4mewy5w<$Vpynh4hckwyw; ++$V55vc4mewy5w) {
			if ($this->lookAnTable(ord($Vmfvrsd5xyqh[$V55vc4mewy5w])) == -1) {
				return false;
			}
		}
		return true;
	}

	
	 protected function estimateBitsModeNum($Vpynh4hckwyw) {
		$Vim12f51jw5r = (int)($Vpynh4hckwyw / 3);
		$V5z5dbszdqxds = ($Vim12f51jw5r * 10);
		switch($Vpynh4hckwyw - ($Vim12f51jw5r * 3)) {
			case 1: {
				$V5z5dbszdqxds += 4;
				break;
			}
			case 2: {
				$V5z5dbszdqxds += 7;
				break;
			}
		}
		return $V5z5dbszdqxds;
	}

	
	 protected function estimateBitsModeAn($Vpynh4hckwyw) {
		$V5z5dbszdqxds = (int)($Vpynh4hckwyw * 5.5); 
		if ($Vpynh4hckwyw & 1) {
			$V5z5dbszdqxds += 6;
		}
		return $V5z5dbszdqxds;
	}

	
	 protected function estimateBitsMode8($Vpynh4hckwyw) {
		return (int)($Vpynh4hckwyw * 8);
	}

	
	 protected function estimateBitsModeKanji($Vpynh4hckwyw) {
		return (int)($Vpynh4hckwyw * 6.5); 
	}

	
	 protected function checkModeKanji($Vpynh4hckwyw, $Vmfvrsd5xyqh) {
		if ($Vpynh4hckwyw & 1) {
			return false;
		}
		for ($V55vc4mewy5w=0; $V55vc4mewy5w<$Vpynh4hckwyw; $V55vc4mewy5w+=2) {
			$Vxt4wx3pvtez = (ord($Vmfvrsd5xyqh[$V55vc4mewy5w]) << 8) | ord($Vmfvrsd5xyqh[$V55vc4mewy5w+1]);
			if (($Vxt4wx3pvtez < 0x8140) OR (($Vxt4wx3pvtez > 0x9ffc) AND ($Vxt4wx3pvtez < 0xe040)) OR ($Vxt4wx3pvtez > 0xebbf)) {
				return false;
			}
		}
		return true;
	}

	
	protected function check($V0vkydnx50wa, $Vpynh4hckwyw, $Vmfvrsd5xyqh) {
		if ($Vpynh4hckwyw <= 0) {
			return false;
		}
		switch($V0vkydnx50wa) {
			case QR_MODE_NM: {
				return $this->checkModeNum($Vpynh4hckwyw, $Vmfvrsd5xyqh);
			}
			case QR_MODE_AN: {
				return $this->checkModeAn($Vpynh4hckwyw, $Vmfvrsd5xyqh);
			}
			case QR_MODE_KJ: {
				return $this->checkModeKanji($Vpynh4hckwyw, $Vmfvrsd5xyqh);
			}
			case QR_MODE_8B: {
				return true;
			}
			case QR_MODE_ST: {
				return true;
			}
			default: {
				break;
			}
		}
		return false;
	}

	
	 protected function estimateBitStreamSize($Vblnlvgjj0u5, $Vlqcgo2rcpui) {
		$V5z5dbszdqxds = 0;
		if ($Vlqcgo2rcpui == 0) {
			$Vlqcgo2rcpui = 1;
		}
		foreach ($Vblnlvgjj0u5 as $V55vc4mewy5wtem) {
			switch($V55vc4mewy5wtem['mode']) {
				case QR_MODE_NM: {
					$V5z5dbszdqxds = $this->estimateBitsModeNum($V55vc4mewy5wtem['size']);
					break;
				}
				case QR_MODE_AN: {
					$V5z5dbszdqxds = $this->estimateBitsModeAn($V55vc4mewy5wtem['size']);
					break;
				}
				case QR_MODE_8B: {
					$V5z5dbszdqxds = $this->estimateBitsMode8($V55vc4mewy5wtem['size']);
					break;
				}
				case QR_MODE_KJ: {
					$V5z5dbszdqxds = $this->estimateBitsModeKanji($V55vc4mewy5wtem['size']);
					break;
				}
				case QR_MODE_ST: {
					return STRUCTURE_HEADER_BITS;
				}
				default: {
					return 0;
				}
			}
			$Vx3g4ytafo1a = $this->lengthIndicator($V55vc4mewy5wtem['mode'], $Vlqcgo2rcpui);
			$Vetludueqmbt = 1 << $Vx3g4ytafo1a;
			$Vqpyayj40vjr = (int)(($V55vc4mewy5wtem['size'] + $Vetludueqmbt - 1) / $Vetludueqmbt);
			$V5z5dbszdqxds += $Vqpyayj40vjr * (4 + $Vx3g4ytafo1a);
		}
		return $V5z5dbszdqxds;
	}

	
	 protected function estimateVersion($Vblnlvgjj0u5) {
		$Vlqcgo2rcpui = 0;
		$V1yuhsvbtlvrrev = 0;
		do {
			$V1yuhsvbtlvrrev = $Vlqcgo2rcpui;
			$V5z5dbszdqxds = $this->estimateBitStreamSize($Vblnlvgjj0u5, $V1yuhsvbtlvrrev);
			$Vlqcgo2rcpui = $this->getMinimumVersion((int)(($V5z5dbszdqxds + 7) / 8), $this->level);
			if ($Vlqcgo2rcpui < 0) {
				return -1;
			}
		} while ($Vlqcgo2rcpui > $V1yuhsvbtlvrrev);
		return $Vlqcgo2rcpui;
	}

	
	 protected function lengthOfCode($V0vkydnx50wa, $Vlqcgo2rcpui, $V5z5dbszdqxds) {
		$V1yuhsvbtlvrayload = $V5z5dbszdqxds - 4 - $this->lengthIndicator($V0vkydnx50wa, $Vlqcgo2rcpui);
		switch($V0vkydnx50wa) {
			case QR_MODE_NM: {
				$Vwcmlurixvzghunks = (int)($V1yuhsvbtlvrayload / 10);
				$Vr25ekqb3ftm = $V1yuhsvbtlvrayload - $Vwcmlurixvzghunks * 10;
				$Vpynh4hckwyw = $Vwcmlurixvzghunks * 3;
				if ($Vr25ekqb3ftm >= 7) {
					$Vpynh4hckwyw += 2;
				} elseif ($Vr25ekqb3ftm >= 4) {
					$Vpynh4hckwyw += 1;
				}
				break;
			}
			case QR_MODE_AN: {
				$Vwcmlurixvzghunks = (int)($V1yuhsvbtlvrayload / 11);
				$Vr25ekqb3ftm = $V1yuhsvbtlvrayload - $Vwcmlurixvzghunks * 11;
				$Vpynh4hckwyw = $Vwcmlurixvzghunks * 2;
				if ($Vr25ekqb3ftm >= 6) {
					++$Vpynh4hckwyw;
				}
				break;
			}
			case QR_MODE_8B: {
				$Vpynh4hckwyw = (int)($V1yuhsvbtlvrayload / 8);
				break;
			}
			case QR_MODE_KJ: {
				$Vpynh4hckwyw = (int)(($V1yuhsvbtlvrayload / 13) * 2);
				break;
			}
			case QR_MODE_ST: {
				$Vpynh4hckwyw = (int)($V1yuhsvbtlvrayload / 8);
				break;
			}
			default: {
				$Vpynh4hckwyw = 0;
				break;
			}
		}
		$Vetludueqmbtaxsize = $this->maximumWords($V0vkydnx50wa, $Vlqcgo2rcpui);
		if ($Vpynh4hckwyw < 0) {
			$Vpynh4hckwyw = 0;
		}
		if ($Vpynh4hckwyw > $Vetludueqmbtaxsize) {
			$Vpynh4hckwyw = $Vetludueqmbtaxsize;
		}
		return $Vpynh4hckwyw;
	}

	
	 protected function createBitStream($Vblnlvgjj0u5) {
		$Vcg5r5g1xwdb = 0;
		foreach ($Vblnlvgjj0u5 as $Vnogyg4rdwft => $V55vc4mewy5wtem) {
			$Vblnlvgjj0u5[$Vnogyg4rdwft] = $this->encodeBitStream($V55vc4mewy5wtem, $this->version);
			$V5z5dbszdqxds = count($Vblnlvgjj0u5[$Vnogyg4rdwft]['bstream']);
			$Vcg5r5g1xwdb += $V5z5dbszdqxds;
		}
		return array($Vblnlvgjj0u5, $Vcg5r5g1xwdb);
	}

	
	 protected function convertData($Vblnlvgjj0u5) {
		$Vz0hmukhwa4zer = $this->estimateVersion($Vblnlvgjj0u5);
		if ($Vz0hmukhwa4zer > $this->version) {
			$this->version = $Vz0hmukhwa4zer;
		}
		while (true) {
			$Vwcmlurixvzgbs = $this->createBitStream($Vblnlvgjj0u5);
			$Vblnlvgjj0u5 = $Vwcmlurixvzgbs[0];
			$V5z5dbszdqxds = $Vwcmlurixvzgbs[1];
			if ($V5z5dbszdqxds < 0) {
				return -1;
			}
			$Vz0hmukhwa4zer = $this->getMinimumVersion((int)(($V5z5dbszdqxds + 7) / 8), $this->level);
			if ($Vz0hmukhwa4zer < 0) {
				return -1;
			} elseif ($Vz0hmukhwa4zer > $this->version) {
				$this->version = $Vz0hmukhwa4zer;
			} else {
				break;
			}
		}
		return $Vblnlvgjj0u5;
	}

	
	 protected function appendPaddingBit($Vpq3acakq35cstream) {
	 	if (is_null($Vpq3acakq35cstream)) {
	 		return null;
	 	}
		$V5z5dbszdqxds = count($Vpq3acakq35cstream);
		$Vetludueqmbtaxwords = $this->getDataLength($this->version, $this->level);
		$Vetludueqmbtaxbits = $Vetludueqmbtaxwords * 8;
		if ($Vetludueqmbtaxbits == $V5z5dbszdqxds) {
			return $Vpq3acakq35cstream;
		}
		if ($Vetludueqmbtaxbits - $V5z5dbszdqxds < 5) {
			return $this->appendNum($Vpq3acakq35cstream, $Vetludueqmbtaxbits - $V5z5dbszdqxds, 0);
		}
		$V5z5dbszdqxds += 4;
		$Vim12f51jw5rords = (int)(($V5z5dbszdqxds + 7) / 8);
		$V1yuhsvbtlvradding = array();
		$V1yuhsvbtlvradding = $this->appendNum($V1yuhsvbtlvradding, $Vim12f51jw5rords * 8 - $V5z5dbszdqxds + 4, 0);
		$V1yuhsvbtlvradlen = $Vetludueqmbtaxwords - $Vim12f51jw5rords;
		if ($V1yuhsvbtlvradlen > 0) {
			$V1yuhsvbtlvradbuf = array();
			for ($V55vc4mewy5w=0; $V55vc4mewy5w<$V1yuhsvbtlvradlen; ++$V55vc4mewy5w) {
				$V1yuhsvbtlvradbuf[$V55vc4mewy5w] = ($V55vc4mewy5w&1)?0x11:0xec;
			}
			$V1yuhsvbtlvradding = $this->appendBytes($V1yuhsvbtlvradding, $V1yuhsvbtlvradlen, $V1yuhsvbtlvradbuf);
		}
		return $this->appendBitstream($Vpq3acakq35cstream, $V1yuhsvbtlvradding);
	}

	
	 protected function mergeBitStream($Vblnlvgjj0u5) {
		$Vblnlvgjj0u5 = $this->convertData($Vblnlvgjj0u5);
		if (!is_array($Vblnlvgjj0u5)) {
			return null;
		}
		$Vpq3acakq35cstream = array();
		foreach ($Vblnlvgjj0u5 as $V55vc4mewy5wtem) {
			$Vpq3acakq35cstream = $this->appendBitstream($Vpq3acakq35cstream, $V55vc4mewy5wtem['bstream']);
		}
		return $Vpq3acakq35cstream;
	}

	
	protected function getBitStream($Vblnlvgjj0u5) {
		$Vpq3acakq35cstream = $this->mergeBitStream($Vblnlvgjj0u5);
		return $this->appendPaddingBit($Vpq3acakq35cstream);
	}

	
	protected function getByteStream($Vblnlvgjj0u5) {
		$Vpq3acakq35cstream = $this->getBitStream($Vblnlvgjj0u5);
		return $this->bitstreamToByte($Vpq3acakq35cstream);
	}

	

	

	
	 protected function allocate($Vvt20qqut4buetLength) {
		return array_fill(0, $Vvt20qqut4buetLength, 0);
	}

	
	 protected function newFromNum($V5z5dbszdqxds, $Vqpyayj40vjr) {
		$Vpq3acakq35cstream = $this->allocate($V5z5dbszdqxds);
		$Vii5xs5yuhox = 1 << ($V5z5dbszdqxds - 1);
		for ($V55vc4mewy5w=0; $V55vc4mewy5w<$V5z5dbszdqxds; ++$V55vc4mewy5w) {
			if ($Vqpyayj40vjr & $Vii5xs5yuhox) {
				$Vpq3acakq35cstream[$V55vc4mewy5w] = 1;
			} else {
				$Vpq3acakq35cstream[$V55vc4mewy5w] = 0;
			}
			$Vii5xs5yuhox = $Vii5xs5yuhox >> 1;
		}
		return $Vpq3acakq35cstream;
	}

	
	 protected function newFromBytes($Vpynh4hckwyw, $Vmfvrsd5xyqh) {
		$Vpq3acakq35cstream = $this->allocate($Vpynh4hckwyw * 8);
		$V1yuhsvbtlvr=0;
		for ($V55vc4mewy5w=0; $V55vc4mewy5w<$Vpynh4hckwyw; ++$V55vc4mewy5w) {
			$Vii5xs5yuhox = 0x80;
			for ($Vuaufi3la1vg=0; $Vuaufi3la1vg<8; ++$Vuaufi3la1vg) {
				if ($Vmfvrsd5xyqh[$V55vc4mewy5w] & $Vii5xs5yuhox) {
					$Vpq3acakq35cstream[$V1yuhsvbtlvr] = 1;
				} else {
					$Vpq3acakq35cstream[$V1yuhsvbtlvr] = 0;
				}
				$V1yuhsvbtlvr++;
				$Vii5xs5yuhox = $Vii5xs5yuhox >> 1;
			}
		}
		return $Vpq3acakq35cstream;
	}

	
	 protected function appendBitstream($V5z5dbszdqxdstream, $Vnnunx1uik4w) {
		if ((!is_array($Vnnunx1uik4w)) OR (count($Vnnunx1uik4w) == 0)) {
			return $V5z5dbszdqxdstream;
		}
		if (count($V5z5dbszdqxdstream) == 0) {
			return $Vnnunx1uik4w;
		}
		return array_values(array_merge($V5z5dbszdqxdstream, $Vnnunx1uik4w));
	}

	
	 protected function appendNum($V5z5dbszdqxdstream, $V5z5dbszdqxds, $Vqpyayj40vjr) {
		if ($V5z5dbszdqxds == 0) {
			return 0;
		}
		$Vpq3acakq35c = $this->newFromNum($V5z5dbszdqxds, $Vqpyayj40vjr);
		return $this->appendBitstream($V5z5dbszdqxdstream, $Vpq3acakq35c);
	}

	
	 protected function appendBytes($V5z5dbszdqxdstream, $Vpynh4hckwyw, $Vmfvrsd5xyqh) {
		if ($Vpynh4hckwyw == 0) {
			return 0;
		}
		$Vpq3acakq35c = $this->newFromBytes($Vpynh4hckwyw, $Vmfvrsd5xyqh);
		return $this->appendBitstream($V5z5dbszdqxdstream, $Vpq3acakq35c);
	}

	
	 protected function bitstreamToByte($Vpq3acakq35cstream) {
		if (is_null($Vpq3acakq35cstream)) {
	 		return null;
	 	}
		$Vpynh4hckwyw = count($Vpq3acakq35cstream);
		if ($Vpynh4hckwyw == 0) {
			return array();
		}
		$Vmfvrsd5xyqh = array_fill(0, (int)(($Vpynh4hckwyw + 7) / 8), 0);
		$Vpq3acakq35cytes = (int)($Vpynh4hckwyw / 8);
		$V1yuhsvbtlvr = 0;
		for ($V55vc4mewy5w=0; $V55vc4mewy5w<$Vpq3acakq35cytes; $V55vc4mewy5w++) {
			$Vz0hmukhwa4z = 0;
			for ($Vuaufi3la1vg=0; $Vuaufi3la1vg<8; $Vuaufi3la1vg++) {
				$Vz0hmukhwa4z = $Vz0hmukhwa4z << 1;
				$Vz0hmukhwa4z |= $Vpq3acakq35cstream[$V1yuhsvbtlvr];
				$V1yuhsvbtlvr++;
			}
			$Vmfvrsd5xyqh[$V55vc4mewy5w] = $Vz0hmukhwa4z;
		}
		if ($Vpynh4hckwyw & 7) {
			$Vz0hmukhwa4z = 0;
			for ($Vuaufi3la1vg=0; $Vuaufi3la1vg<($Vpynh4hckwyw & 7); $Vuaufi3la1vg++) {
				$Vz0hmukhwa4z = $Vz0hmukhwa4z << 1;
				$Vz0hmukhwa4z |= $Vpq3acakq35cstream[$V1yuhsvbtlvr];
				$V1yuhsvbtlvr++;
			}
			$Vmfvrsd5xyqh[$Vpq3acakq35cytes] = $Vz0hmukhwa4z;
		}
		return $Vmfvrsd5xyqh;
	}

	

	

	
	 protected function qrstrset($Vvt20qqut4burctab, $Vangwoo3ejfg, $Vgxufordoa4t, $Vntxrvxv4yrb, $Vntxrvxv4yrbLen=false) {
		$Vvt20qqut4burctab[$Vgxufordoa4t] = substr_replace($Vvt20qqut4burctab[$Vgxufordoa4t], ($Vntxrvxv4yrbLen !== false)?substr($Vntxrvxv4yrb,0,$Vntxrvxv4yrbLen):$Vntxrvxv4yrb, $Vangwoo3ejfg, ($Vntxrvxv4yrbLen !== false)?$Vntxrvxv4yrbLen:strlen($Vntxrvxv4yrb));
		return $Vvt20qqut4burctab;
	}

	
	protected function getDataLength($Vlqcgo2rcpui, $Vkdo3kayg5ty) {
		return $this->capacity[$Vlqcgo2rcpui][QRCAP_WORDS] - $this->capacity[$Vlqcgo2rcpui][QRCAP_EC][$Vkdo3kayg5ty];
	}

	
	protected function getECCLength($Vlqcgo2rcpui, $Vkdo3kayg5ty){
		return $this->capacity[$Vlqcgo2rcpui][QRCAP_EC][$Vkdo3kayg5ty];
	}

	
	protected function getWidth($Vlqcgo2rcpui) {
		return $this->capacity[$Vlqcgo2rcpui][QRCAP_WIDTH];
	}

	
	protected function getRemainder($Vlqcgo2rcpui) {
		return $this->capacity[$Vlqcgo2rcpui][QRCAP_REMINDER];
	}

	
	protected function getMinimumVersion($Vpynh4hckwyw, $Vkdo3kayg5ty) {
		for ($V55vc4mewy5w = 1; $V55vc4mewy5w <= QRSPEC_VERSION_MAX; ++$V55vc4mewy5w) {
			$Vim12f51jw5rords = ($this->capacity[$V55vc4mewy5w][QRCAP_WORDS] - $this->capacity[$V55vc4mewy5w][QRCAP_EC][$Vkdo3kayg5ty]);
			if ($Vim12f51jw5rords >= $Vpynh4hckwyw) {
				return $V55vc4mewy5w;
			}
		}
		
		return -1;
	}

	
	protected function lengthIndicator($V0vkydnx50wa, $Vlqcgo2rcpui) {
		if ($V0vkydnx50wa == QR_MODE_ST) {
			return 0;
		}
		if ($Vlqcgo2rcpui <= 9) {
			$Vx3g4ytafo1a = 0;
		} elseif ($Vlqcgo2rcpui <= 26) {
			$Vx3g4ytafo1a = 1;
		} else {
			$Vx3g4ytafo1a = 2;
		}
		return $this->lengthTableBits[$V0vkydnx50wa][$Vx3g4ytafo1a];
	}

	
	protected function maximumWords($V0vkydnx50wa, $Vlqcgo2rcpui) {
		if ($V0vkydnx50wa == QR_MODE_ST) {
			return 3;
		}
		if ($Vlqcgo2rcpui <= 9) {
			$Vx3g4ytafo1a = 0;
		} else if ($Vlqcgo2rcpui <= 26) {
			$Vx3g4ytafo1a = 1;
		} else {
			$Vx3g4ytafo1a = 2;
		}
		$V5z5dbszdqxds = $this->lengthTableBits[$V0vkydnx50wa][$Vx3g4ytafo1a];
		$Vim12f51jw5rords = (1 << $V5z5dbszdqxds) - 1;
		if ($V0vkydnx50wa == QR_MODE_KJ) {
			$Vim12f51jw5rords *= 2; 
		}
		return $Vim12f51jw5rords;
	}

	
	protected function getEccSpec($Vlqcgo2rcpui, $Vkdo3kayg5ty, $Vzqlusoiyaa3) {
		if (count($Vzqlusoiyaa3) < 5) {
			$Vzqlusoiyaa3 = array(0, 0, 0, 0, 0);
		}
		$Vayha3tb3gmj = $this->eccTable[$Vlqcgo2rcpui][$Vkdo3kayg5ty][0];
		$Vpq3acakq35c2 = $this->eccTable[$Vlqcgo2rcpui][$Vkdo3kayg5ty][1];
		$Vmfvrsd5xyqh = $this->getDataLength($Vlqcgo2rcpui, $Vkdo3kayg5ty);
		$Vrosp5rbbx5x = $this->getECCLength($Vlqcgo2rcpui, $Vkdo3kayg5ty);
		if ($Vpq3acakq35c2 == 0) {
			$Vzqlusoiyaa3[0] = $Vayha3tb3gmj;
			$Vzqlusoiyaa3[1] = (int)($Vmfvrsd5xyqh / $Vayha3tb3gmj);
			$Vzqlusoiyaa3[2] = (int)($Vrosp5rbbx5x / $Vayha3tb3gmj);
			$Vzqlusoiyaa3[3] = 0;
			$Vzqlusoiyaa3[4] = 0;
		} else {
			$Vzqlusoiyaa3[0] = $Vayha3tb3gmj;
			$Vzqlusoiyaa3[1] = (int)($Vmfvrsd5xyqh / ($Vayha3tb3gmj + $Vpq3acakq35c2));
			$Vzqlusoiyaa3[2] = (int)($Vrosp5rbbx5x  / ($Vayha3tb3gmj + $Vpq3acakq35c2));
			$Vzqlusoiyaa3[3] = $Vpq3acakq35c2;
			$Vzqlusoiyaa3[4] = $Vzqlusoiyaa3[1] + 1;
		}
		return $Vzqlusoiyaa3;
	}

	
	protected function putAlignmentMarker($Vclsbhwp13cf, $V03mvlmpusuj, $Vrngof4idfho) {
		$Vifkyvm5kynl = array(
			"\xa1\xa1\xa1\xa1\xa1",
			"\xa1\xa0\xa0\xa0\xa1",
			"\xa1\xa0\xa1\xa0\xa1",
			"\xa1\xa0\xa0\xa0\xa1",
			"\xa1\xa1\xa1\xa1\xa1"
			);
		$Vgxufordoa4tStart = $Vrngof4idfho - 2;
		$Vangwoo3ejfgStart = $V03mvlmpusuj - 2;
		for ($Vgxufordoa4t=0; $Vgxufordoa4t < 5; $Vgxufordoa4t++) {
			$Vclsbhwp13cf = $this->qrstrset($Vclsbhwp13cf, $Vangwoo3ejfgStart, $Vgxufordoa4tStart+$Vgxufordoa4t, $Vifkyvm5kynl[$Vgxufordoa4t]);
		}
		return $Vclsbhwp13cf;
	}

	
	 protected function putAlignmentPattern($Vlqcgo2rcpui, $Vclsbhwp13cf, $Vvp2z3iuh5yx) {
		if ($Vlqcgo2rcpui < 2) {
			return $Vclsbhwp13cf;
		}
		$Vc0aiseldrl3 = $this->alignmentPattern[$Vlqcgo2rcpui][1] - $this->alignmentPattern[$Vlqcgo2rcpui][0];
		if ($Vc0aiseldrl3 < 0) {
			$Vim12f51jw5r = 2;
		} else {
			$Vim12f51jw5r = (int)(($Vvp2z3iuh5yx - $this->alignmentPattern[$Vlqcgo2rcpui][0]) / $Vc0aiseldrl3 + 2);
		}
		if ($Vim12f51jw5r * $Vim12f51jw5r - 3 == 1) {
			$Vangwoo3ejfg = $this->alignmentPattern[$Vlqcgo2rcpui][0];
			$Vgxufordoa4t = $this->alignmentPattern[$Vlqcgo2rcpui][0];
			$Vclsbhwp13cf = $this->putAlignmentMarker($Vclsbhwp13cf, $Vangwoo3ejfg, $Vgxufordoa4t);
			return $Vclsbhwp13cf;
		}
		$Vwcmlurixvzgx = $this->alignmentPattern[$Vlqcgo2rcpui][0];
		$Vim12f51jw5ro = $Vim12f51jw5r - 1;
		for ($Vangwoo3ejfg=1; $Vangwoo3ejfg < $Vim12f51jw5ro; ++$Vangwoo3ejfg) {
			$Vclsbhwp13cf = $this->putAlignmentMarker($Vclsbhwp13cf, 6, $Vwcmlurixvzgx);
			$Vclsbhwp13cf = $this->putAlignmentMarker($Vclsbhwp13cf, $Vwcmlurixvzgx,  6);
			$Vwcmlurixvzgx += $Vc0aiseldrl3;
		}
		$Vwcmlurixvzgy = $this->alignmentPattern[$Vlqcgo2rcpui][0];
		for ($Vgxufordoa4t=0; $Vgxufordoa4t < $Vim12f51jw5ro; ++$Vgxufordoa4t) {
			$Vwcmlurixvzgx = $this->alignmentPattern[$Vlqcgo2rcpui][0];
			for ($Vangwoo3ejfg=0; $Vangwoo3ejfg < $Vim12f51jw5ro; ++$Vangwoo3ejfg) {
				$Vclsbhwp13cf = $this->putAlignmentMarker($Vclsbhwp13cf, $Vwcmlurixvzgx, $Vwcmlurixvzgy);
				$Vwcmlurixvzgx += $Vc0aiseldrl3;
			}
			$Vwcmlurixvzgy += $Vc0aiseldrl3;
		}
		return $Vclsbhwp13cf;
	}

	
	protected function getVersionPattern($Vlqcgo2rcpui) {
		if (($Vlqcgo2rcpui < 7) OR ($Vlqcgo2rcpui > QRSPEC_VERSION_MAX)) {
			return 0;
		}
		return $this->versionPattern[($Vlqcgo2rcpui - 7)];
	}

	
	protected function getFormatInfo($Vii5xs5yuhox, $Vkdo3kayg5ty) {
		if (($Vii5xs5yuhox < 0) OR ($Vii5xs5yuhox > 7)) {
			return 0;
		}
		if (($Vkdo3kayg5ty < 0) OR ($Vkdo3kayg5ty > 3)) {
			return 0;
		}
		return $this->formatInfo[$Vkdo3kayg5ty][$Vii5xs5yuhox];
	}

	
	protected function putFinderPattern($Vclsbhwp13cf, $V03mvlmpusuj, $Vrngof4idfho) {
		$Vifkyvm5kynl = array(
		"\xc1\xc1\xc1\xc1\xc1\xc1\xc1",
		"\xc1\xc0\xc0\xc0\xc0\xc0\xc1",
		"\xc1\xc0\xc1\xc1\xc1\xc0\xc1",
		"\xc1\xc0\xc1\xc1\xc1\xc0\xc1",
		"\xc1\xc0\xc1\xc1\xc1\xc0\xc1",
		"\xc1\xc0\xc0\xc0\xc0\xc0\xc1",
		"\xc1\xc1\xc1\xc1\xc1\xc1\xc1"
		);
		for ($Vgxufordoa4t=0; $Vgxufordoa4t < 7; $Vgxufordoa4t++) {
			$Vclsbhwp13cf = $this->qrstrset($Vclsbhwp13cf, $V03mvlmpusuj, ($Vrngof4idfho + $Vgxufordoa4t), $Vifkyvm5kynl[$Vgxufordoa4t]);
		}
		return $Vclsbhwp13cf;
	}

	
	protected function createFrame($Vlqcgo2rcpui) {
		$Vvp2z3iuh5yx = $this->capacity[$Vlqcgo2rcpui][QRCAP_WIDTH];
		$Vclsbhwp13cfLine = str_repeat ("\0", $Vvp2z3iuh5yx);
		$Vclsbhwp13cf = array_fill(0, $Vvp2z3iuh5yx, $Vclsbhwp13cfLine);
		
		$Vclsbhwp13cf = $this->putFinderPattern($Vclsbhwp13cf, 0, 0);
		$Vclsbhwp13cf = $this->putFinderPattern($Vclsbhwp13cf, $Vvp2z3iuh5yx - 7, 0);
		$Vclsbhwp13cf = $this->putFinderPattern($Vclsbhwp13cf, 0, $Vvp2z3iuh5yx - 7);
		
		$Vgxufordoa4tOffset = $Vvp2z3iuh5yx - 7;
		for ($Vgxufordoa4t=0; $Vgxufordoa4t < 7; ++$Vgxufordoa4t) {
			$Vclsbhwp13cf[$Vgxufordoa4t][7] = "\xc0";
			$Vclsbhwp13cf[$Vgxufordoa4t][$Vvp2z3iuh5yx - 8] = "\xc0";
			$Vclsbhwp13cf[$Vgxufordoa4tOffset][7] = "\xc0";
			++$Vgxufordoa4tOffset;
		}
		$Vvt20qqut4buetPattern = str_repeat("\xc0", 8);
		$Vclsbhwp13cf = $this->qrstrset($Vclsbhwp13cf, 0, 7, $Vvt20qqut4buetPattern);
		$Vclsbhwp13cf = $this->qrstrset($Vclsbhwp13cf, $Vvp2z3iuh5yx-8, 7, $Vvt20qqut4buetPattern);
		$Vclsbhwp13cf = $this->qrstrset($Vclsbhwp13cf, 0, $Vvp2z3iuh5yx - 8, $Vvt20qqut4buetPattern);
		
		$Vvt20qqut4buetPattern = str_repeat("\x84", 9);
		$Vclsbhwp13cf = $this->qrstrset($Vclsbhwp13cf, 0, 8, $Vvt20qqut4buetPattern);
		$Vclsbhwp13cf = $this->qrstrset($Vclsbhwp13cf, $Vvp2z3iuh5yx - 8, 8, $Vvt20qqut4buetPattern, 8);
		$Vgxufordoa4tOffset = $Vvp2z3iuh5yx - 8;
		for ($Vgxufordoa4t=0; $Vgxufordoa4t < 8; ++$Vgxufordoa4t,++$Vgxufordoa4tOffset) {
			$Vclsbhwp13cf[$Vgxufordoa4t][8] = "\x84";
			$Vclsbhwp13cf[$Vgxufordoa4tOffset][8] = "\x84";
		}
		
		$Vim12f51jw5ro = $Vvp2z3iuh5yx - 15;
		for ($V55vc4mewy5w=1; $V55vc4mewy5w < $Vim12f51jw5ro; ++$V55vc4mewy5w) {
			$Vclsbhwp13cf[6][7+$V55vc4mewy5w] = chr(0x90 | ($V55vc4mewy5w & 1));
			$Vclsbhwp13cf[7+$V55vc4mewy5w][6] = chr(0x90 | ($V55vc4mewy5w & 1));
		}
		
		$Vclsbhwp13cf = $this->putAlignmentPattern($Vlqcgo2rcpui, $Vclsbhwp13cf, $Vvp2z3iuh5yx);
		
		if ($Vlqcgo2rcpui >= 7) {
			$Vz0hmukhwa4zinf = $this->getVersionPattern($Vlqcgo2rcpui);
			$Vz0hmukhwa4z = $Vz0hmukhwa4zinf;
			for ($Vangwoo3ejfg=0; $Vangwoo3ejfg<6; ++$Vangwoo3ejfg) {
				for ($Vgxufordoa4t=0; $Vgxufordoa4t<3; ++$Vgxufordoa4t) {
					$Vclsbhwp13cf[($Vvp2z3iuh5yx - 11)+$Vgxufordoa4t][$Vangwoo3ejfg] = chr(0x88 | ($Vz0hmukhwa4z & 1));
					$Vz0hmukhwa4z = $Vz0hmukhwa4z >> 1;
				}
			}
			$Vz0hmukhwa4z = $Vz0hmukhwa4zinf;
			for ($Vgxufordoa4t=0; $Vgxufordoa4t<6; ++$Vgxufordoa4t) {
				for ($Vangwoo3ejfg=0; $Vangwoo3ejfg<3; ++$Vangwoo3ejfg) {
					$Vclsbhwp13cf[$Vgxufordoa4t][$Vangwoo3ejfg+($Vvp2z3iuh5yx - 11)] = chr(0x88 | ($Vz0hmukhwa4z & 1));
					$Vz0hmukhwa4z = $Vz0hmukhwa4z >> 1;
				}
			}
		}
		
		$Vclsbhwp13cf[$Vvp2z3iuh5yx - 8][8] = "\x81";
		return $Vclsbhwp13cf;
	}

	
	protected function newFrame($Vlqcgo2rcpui) {
		if (($Vlqcgo2rcpui < 1) OR ($Vlqcgo2rcpui > QRSPEC_VERSION_MAX)) {
			return NULL;
		}
		if (!isset($this->frames[$Vlqcgo2rcpui])) {
			$this->frames[$Vlqcgo2rcpui] = $this->createFrame($Vlqcgo2rcpui);
		}
		if (is_null($this->frames[$Vlqcgo2rcpui])) {
			return NULL;
		}
		return $this->frames[$Vlqcgo2rcpui];
	}

	
	 protected function rsBlockNum($Vzqlusoiyaa3) {
		return ($Vzqlusoiyaa3[0] + $Vzqlusoiyaa3[3]);
	}

	
	 protected function rsBlockNum1($Vzqlusoiyaa3) {
		return $Vzqlusoiyaa3[0];
	}

	
	 protected function rsDataCodes1($Vzqlusoiyaa3) {
		return $Vzqlusoiyaa3[1];
	}

	
	 protected function rsEccCodes1($Vzqlusoiyaa3) {
		return $Vzqlusoiyaa3[2];
	}

	
	 protected function rsBlockNum2($Vzqlusoiyaa3) {
		return $Vzqlusoiyaa3[3];
	}

	
	 protected function rsDataCodes2($Vzqlusoiyaa3) {
		return $Vzqlusoiyaa3[4];
	}

	
	 protected function rsEccCodes2($Vzqlusoiyaa3) {
		return $Vzqlusoiyaa3[2];
	}

	
	 protected function rsDataLength($Vzqlusoiyaa3) {
		return ($Vzqlusoiyaa3[0] * $Vzqlusoiyaa3[1]) + ($Vzqlusoiyaa3[3] * $Vzqlusoiyaa3[4]);
	}

	
	 protected function rsEccLength($Vzqlusoiyaa3) {
		return ($Vzqlusoiyaa3[0] + $Vzqlusoiyaa3[3]) * $Vzqlusoiyaa3[2];
	}

	

	

	
	 protected function init_rs($Vvt20qqut4buymsize, $Vhtrazsdbroe, $Vghgjybj1a2h, $V1yuhsvbtlvrrim, $Vnqrtsm0exbg, $V1yuhsvbtlvrad) {
		foreach ($this->rsitems as $V1zbfvr4umtc) {
			if (($V1zbfvr4umtc['pad'] != $V1yuhsvbtlvrad) OR ($V1zbfvr4umtc['nroots'] != $Vnqrtsm0exbg) OR ($V1zbfvr4umtc['mm'] != $Vvt20qqut4buymsize)
				OR ($V1zbfvr4umtc['gfpoly'] != $Vhtrazsdbroe) OR ($V1zbfvr4umtc['fcr'] != $Vghgjybj1a2h) OR ($V1zbfvr4umtc['prim'] != $V1yuhsvbtlvrrim)) {
				continue;
			}
			return $V1zbfvr4umtc;
		}
		$V1zbfvr4umtc = $this->init_rs_char($Vvt20qqut4buymsize, $Vhtrazsdbroe, $Vghgjybj1a2h, $V1yuhsvbtlvrrim, $Vnqrtsm0exbg, $V1yuhsvbtlvrad);
		array_unshift($this->rsitems, $V1zbfvr4umtc);
		return $V1zbfvr4umtc;
	}

	

	

	
	 protected function modnn($V1zbfvr4umtc, $Vangwoo3ejfg) {
		while ($Vangwoo3ejfg >= $V1zbfvr4umtc['nn']) {
			$Vangwoo3ejfg -= $V1zbfvr4umtc['nn'];
			$Vangwoo3ejfg = ($Vangwoo3ejfg >> $V1zbfvr4umtc['mm']) + ($Vangwoo3ejfg & $V1zbfvr4umtc['nn']);
		}
		return $Vangwoo3ejfg;
	}

	
	protected function init_rs_char($Vvt20qqut4buymsize, $Vhtrazsdbroe, $Vghgjybj1a2h, $V1yuhsvbtlvrrim, $Vnqrtsm0exbg, $V1yuhsvbtlvrad) {
		
		$V1zbfvr4umtc = null;
		
		if (($Vvt20qqut4buymsize < 0) OR ($Vvt20qqut4buymsize > 8)) {
			return $V1zbfvr4umtc;
		}
		if (($Vghgjybj1a2h < 0) OR ($Vghgjybj1a2h >= (1<<$Vvt20qqut4buymsize))) {
			return $V1zbfvr4umtc;
		}
		if (($V1yuhsvbtlvrrim <= 0) OR ($V1yuhsvbtlvrrim >= (1<<$Vvt20qqut4buymsize))) {
			return $V1zbfvr4umtc;
		}
		if (($Vnqrtsm0exbg < 0) OR ($Vnqrtsm0exbg >= (1<<$Vvt20qqut4buymsize))) {
			return $V1zbfvr4umtc;
		}
		if (($V1yuhsvbtlvrad < 0) OR ($V1yuhsvbtlvrad >= ((1<<$Vvt20qqut4buymsize) -1 - $Vnqrtsm0exbg))) {
			return $V1zbfvr4umtc;
		}
		$V1zbfvr4umtc = array();
		$V1zbfvr4umtc['mm'] = $Vvt20qqut4buymsize;
		$V1zbfvr4umtc['nn'] = (1 << $Vvt20qqut4buymsize) - 1;
		$V1zbfvr4umtc['pad'] = $V1yuhsvbtlvrad;
		$V1zbfvr4umtc['alpha_to'] = array_fill(0, ($V1zbfvr4umtc['nn'] + 1), 0);
		$V1zbfvr4umtc['index_of'] = array_fill(0, ($V1zbfvr4umtc['nn'] + 1), 0);
		
		$Vmhagkeaa3h5 =& $V1zbfvr4umtc['nn'];
		$Vnjwhxo3mkkk =& $Vmhagkeaa3h5;
		
		$V1zbfvr4umtc['index_of'][0] = $Vnjwhxo3mkkk; 
		$V1zbfvr4umtc['alpha_to'][$Vnjwhxo3mkkk] = 0; 
		$Vvt20qqut4bur = 1;
		for ($V55vc4mewy5w=0; $V55vc4mewy5w<$V1zbfvr4umtc['nn']; ++$V55vc4mewy5w) {
			$V1zbfvr4umtc['index_of'][$Vvt20qqut4bur] = $V55vc4mewy5w;
			$V1zbfvr4umtc['alpha_to'][$V55vc4mewy5w] = $Vvt20qqut4bur;
			$Vvt20qqut4bur <<= 1;
			if ($Vvt20qqut4bur & (1 << $Vvt20qqut4buymsize)) {
				$Vvt20qqut4bur ^= $Vhtrazsdbroe;
			}
			$Vvt20qqut4bur &= $V1zbfvr4umtc['nn'];
		}
		if ($Vvt20qqut4bur != 1) {
			
			return NULL;
		}
		
		$V1zbfvr4umtc['genpoly'] = array_fill(0, ($Vnqrtsm0exbg + 1), 0);
		$V1zbfvr4umtc['fcr'] = $Vghgjybj1a2h;
		$V1zbfvr4umtc['prim'] = $V1yuhsvbtlvrrim;
		$V1zbfvr4umtc['nroots'] = $Vnqrtsm0exbg;
		$V1zbfvr4umtc['gfpoly'] = $Vhtrazsdbroe;
		
		for ($V55vc4mewy5wprim=1; ($V55vc4mewy5wprim % $V1yuhsvbtlvrrim) != 0; $V55vc4mewy5wprim += $V1zbfvr4umtc['nn']) {
			; 
		}
		$V1zbfvr4umtc['iprim'] = (int)($V55vc4mewy5wprim / $V1yuhsvbtlvrrim);
		$V1zbfvr4umtc['genpoly'][0] = 1;
		for ($V55vc4mewy5w = 0,$V3txo0khhq4d=$Vghgjybj1a2h*$V1yuhsvbtlvrrim; $V55vc4mewy5w < $Vnqrtsm0exbg; $V55vc4mewy5w++, $V3txo0khhq4d += $V1yuhsvbtlvrrim) {
			$V1zbfvr4umtc['genpoly'][$V55vc4mewy5w+1] = 1;
			
			for ($Vuaufi3la1vg = $V55vc4mewy5w; $Vuaufi3la1vg > 0; --$Vuaufi3la1vg) {
				if ($V1zbfvr4umtc['genpoly'][$Vuaufi3la1vg] != 0) {
					$V1zbfvr4umtc['genpoly'][$Vuaufi3la1vg] = $V1zbfvr4umtc['genpoly'][$Vuaufi3la1vg-1] ^ $V1zbfvr4umtc['alpha_to'][$this->modnn($V1zbfvr4umtc, $V1zbfvr4umtc['index_of'][$V1zbfvr4umtc['genpoly'][$Vuaufi3la1vg]] + $V3txo0khhq4d)];
				} else {
					$V1zbfvr4umtc['genpoly'][$Vuaufi3la1vg] = $V1zbfvr4umtc['genpoly'][$Vuaufi3la1vg-1];
				}
			}
			
			$V1zbfvr4umtc['genpoly'][0] = $V1zbfvr4umtc['alpha_to'][$this->modnn($V1zbfvr4umtc, $V1zbfvr4umtc['index_of'][$V1zbfvr4umtc['genpoly'][0]] + $V3txo0khhq4d)];
		}
		
		for ($V55vc4mewy5w = 0; $V55vc4mewy5w <= $Vnqrtsm0exbg; ++$V55vc4mewy5w) {
			$V1zbfvr4umtc['genpoly'][$V55vc4mewy5w] = $V1zbfvr4umtc['index_of'][$V1zbfvr4umtc['genpoly'][$V55vc4mewy5w]];
		}
		return $V1zbfvr4umtc;
	}

	
	 protected function encode_rs_char($V1zbfvr4umtc, $Vmfvrsd5xyqh, $V1yuhsvbtlvrarity) {
		$V5bvfmmsm2qw       =& $V1zbfvr4umtc['mm']; 
		$Vmhagkeaa3h5       =& $V1zbfvr4umtc['nn']; 
		$V4khrm4rbr00 =& $V1zbfvr4umtc['alpha_to']; 
		$V11lheakkn1l =& $V1zbfvr4umtc['index_of']; 
		$Vk0nexbdcfgs  =& $V1zbfvr4umtc['genpoly']; 
		$Vctkgio2h0go   =& $V1zbfvr4umtc['nroots']; 
		$Vfrwkqr1vuds      =& $V1zbfvr4umtc['fcr']; 
		$Vbrjgmzuxbjz     =& $V1zbfvr4umtc['prim']; 
		$Vfwlqxugynfq    =& $V1zbfvr4umtc['iprim']; 
		$Vqpy0fmi2dyi      =& $V1zbfvr4umtc['pad']; 
		$Vnjwhxo3mkkk       =& $Vmhagkeaa3h5;
		$V1yuhsvbtlvrarity = array_fill(0, $Vctkgio2h0go, 0);
		for ($V55vc4mewy5w=0; $V55vc4mewy5w < ($Vmhagkeaa3h5 - $Vctkgio2h0go - $Vqpy0fmi2dyi); $V55vc4mewy5w++) {
			$V0ckdarxzrtp = $V11lheakkn1l[$Vmfvrsd5xyqh[$V55vc4mewy5w] ^ $V1yuhsvbtlvrarity[0]];
			if ($V0ckdarxzrtp != $Vnjwhxo3mkkk) {
				
				
				
				$V0ckdarxzrtp = $this->modnn($V1zbfvr4umtc, $Vmhagkeaa3h5 - $Vk0nexbdcfgs[$Vctkgio2h0go] + $V0ckdarxzrtp);
				for ($Vuaufi3la1vg=1; $Vuaufi3la1vg < $Vctkgio2h0go; ++$Vuaufi3la1vg) {
				$V1yuhsvbtlvrarity[$Vuaufi3la1vg] ^= $V4khrm4rbr00[$this->modnn($V1zbfvr4umtc, $V0ckdarxzrtp + $Vk0nexbdcfgs[($Vctkgio2h0go - $Vuaufi3la1vg)])];
				}
			}
			
			array_shift($V1yuhsvbtlvrarity);
			if ($V0ckdarxzrtp != $Vnjwhxo3mkkk) {
				array_push($V1yuhsvbtlvrarity, $V4khrm4rbr00[$this->modnn($V1zbfvr4umtc, $V0ckdarxzrtp + $Vk0nexbdcfgs[0])]);
			} else {
				array_push($V1yuhsvbtlvrarity, 0);
			}
		}
		return $V1yuhsvbtlvrarity;
	}

} 




