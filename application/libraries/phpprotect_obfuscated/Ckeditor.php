<?php



class CKEditor
{
	
	const version = '3.6.1';
	
	const timestamp = 'B5GJ5GG';

	
	public $Vszw55zv22fl;
	
	public $Veqh2ob3ab0j = array();
	
	public $Vjmtjbo2axhz = false;
	
	public $Vuq0qwwbziaj = false;
	
	public $Veawyknjksen = array( "rows" => 8, "cols" => 60 );
	
	public $Vq0y5351qcup = "B5GJ5GG";
	
	private $V4dzgq2ahygq = array();
	
	private $Voyk5aiythtz = array();

	
	function __construct($Vszw55zv22fl = null) {
		if (!empty($Vszw55zv22fl)) {
			$this->basePath = $Vszw55zv22fl;
		}
	}

	
	public function editor($Vmtncqebcynw, $Vn5ykvkgiw10 = "", $Veqh2ob3ab0j = array(), $V4dzgq2ahygq = array())
	{
		$Vomk204yc1xg = "";
		foreach ($this->textareaAttributes as $Vzls01jplmeq => $Vf0saxnurylc) {
			$Vomk204yc1xg.= " " . $Vzls01jplmeq . '="' . str_replace('"', '&quot;', $Vf0saxnurylc) . '"';
		}
		$Vctq0aeuuexd = "<textarea name=\"" . $Vmtncqebcynw . "\"" . $Vomk204yc1xg . ">" . htmlspecialchars($Vn5ykvkgiw10) . "</textarea>\n";
		if (!$this->initialized) {
			$Vctq0aeuuexd .= $this->init();
		}

		$V1iksx25hgxq = $this->configSettings($Veqh2ob3ab0j, $V4dzgq2ahygq);

		$Vce1qjrzu2ox = $this->returnGlobalEvents();
		if (!empty($V1iksx25hgxq))
			$Vce1qjrzu2ox .= "CKEDITOR.replace('".$Vmtncqebcynw."', ".$this->jsEncode($V1iksx25hgxq).");";
		else
			$Vce1qjrzu2ox .= "CKEDITOR.replace('".$Vmtncqebcynw."');";

		$Vctq0aeuuexd .= $this->script($Vce1qjrzu2ox);

		if (!$this->returnOutput) {
			print $Vctq0aeuuexd;
			$Vctq0aeuuexd = "";
		}

		return $Vctq0aeuuexd;
	}

	
	public function replace($Vgvh45dlasvt, $Veqh2ob3ab0j = array(), $V4dzgq2ahygq = array())
	{
		$Vctq0aeuuexd = "";
		if (!$this->initialized) {
			$Vctq0aeuuexd .= $this->init();
		}

		$V1iksx25hgxq = $this->configSettings($Veqh2ob3ab0j, $V4dzgq2ahygq);

		$Vce1qjrzu2ox = $this->returnGlobalEvents();
		if (!empty($V1iksx25hgxq)) {
			$Vce1qjrzu2ox .= "CKEDITOR.replace('".$Vgvh45dlasvt."', ".$this->jsEncode($V1iksx25hgxq).");";
		}
		else {
			$Vce1qjrzu2ox .= "CKEDITOR.replace('".$Vgvh45dlasvt."');";
		}
		$Vctq0aeuuexd .= $this->script($Vce1qjrzu2ox);

		if (!$this->returnOutput) {
			print $Vctq0aeuuexd;
			$Vctq0aeuuexd = "";
		}

		return $Vctq0aeuuexd;
	}

	
	public function replaceAll($Vgsthruuvwuw = null)
	{
		$Vctq0aeuuexd = "";
		if (!$this->initialized) {
			$Vctq0aeuuexd .= $this->init();
		}

		$V1iksx25hgxq = $this->configSettings();

		$Vce1qjrzu2ox = $this->returnGlobalEvents();
		if (empty($V1iksx25hgxq)) {
			if (empty($Vgsthruuvwuw)) {
				$Vce1qjrzu2ox .= "CKEDITOR.replaceAll();";
			}
			else {
				$Vce1qjrzu2ox .= "CKEDITOR.replaceAll('".$Vgsthruuvwuw."');";
			}
		}
		else {
			$Vosgd5xpdjdg = "";
			$Vce1qjrzu2ox .= "CKEDITOR.replaceAll( function(textarea, config) {\n";
			if (!empty($Vgsthruuvwuw)) {
				$Vce1qjrzu2ox .= "	var classRegex = new RegExp('(?:^| )' + '". $Vgsthruuvwuw ."' + '(?:$| )');\n";
				$Vce1qjrzu2ox .= "	if (!classRegex.test(textarea.className))\n";
				$Vce1qjrzu2ox .= "		return false;\n";
			}
			$Vce1qjrzu2ox .= "	CKEDITOR.tools.extend(config, ". $this->jsEncode($V1iksx25hgxq) .", true);";
			$Vce1qjrzu2ox .= "} );";

		}

		$Vctq0aeuuexd .= $this->script($Vce1qjrzu2ox);

		if (!$this->returnOutput) {
			print $Vctq0aeuuexd;
			$Vctq0aeuuexd = "";
		}

		return $Vctq0aeuuexd;
	}

	
	public function addEventHandler($Vrk0xgp55nxx, $V5bkptfqd2rz)
	{
		if (!isset($this->events[$Vrk0xgp55nxx])) {
			$this->events[$Vrk0xgp55nxx] = array();
		}
		
		if (!in_array($V5bkptfqd2rz, $this->events[$Vrk0xgp55nxx])) {
			$this->events[$Vrk0xgp55nxx][] = $V5bkptfqd2rz;
		}
	}

	
	public function clearEventHandlers($Vrk0xgp55nxx = null)
	{
		if (!empty($Vrk0xgp55nxx)) {
			$this->events[$Vrk0xgp55nxx] = array();
		}
		else {
			$this->events = array();
		}
	}

	
	public function addGlobalEventHandler($Vrk0xgp55nxx, $V5bkptfqd2rz)
	{
		if (!isset($this->globalEvents[$Vrk0xgp55nxx])) {
			$this->globalEvents[$Vrk0xgp55nxx] = array();
		}
		
		if (!in_array($V5bkptfqd2rz, $this->globalEvents[$Vrk0xgp55nxx])) {
			$this->globalEvents[$Vrk0xgp55nxx][] = $V5bkptfqd2rz;
		}
	}

	
	public function clearGlobalEventHandlers($Vrk0xgp55nxx = null)
	{
		if (!empty($Vrk0xgp55nxx)) {
			$this->globalEvents[$Vrk0xgp55nxx] = array();
		}
		else {
			$this->globalEvents = array();
		}
	}

	
	private function script($Vce1qjrzu2ox)
	{
		$Vctq0aeuuexd = "<script type=\"text/javascript\">";
		$Vctq0aeuuexd .= "//<![CDATA[\n";
		$Vctq0aeuuexd .= $Vce1qjrzu2ox;
		$Vctq0aeuuexd .= "\n//]]>";
		$Vctq0aeuuexd .= "</script>\n";

		return $Vctq0aeuuexd;
	}

	
	private function configSettings($Veqh2ob3ab0j = array(), $V4dzgq2ahygq = array())
	{
		$V1iksx25hgxq = $this->config;
		$V5wfnej1fbpk = $this->events;

		if (is_array($Veqh2ob3ab0j) && !empty($Veqh2ob3ab0j)) {
			$V1iksx25hgxq = array_merge($V1iksx25hgxq, $Veqh2ob3ab0j);
		}

		if (is_array($V4dzgq2ahygq) && !empty($V4dzgq2ahygq)) {
			foreach ($V4dzgq2ahygq as $Vrk0xgp55nxxName => $Vqqxv1tmdjox) {
				if (!isset($V5wfnej1fbpk[$Vrk0xgp55nxxName])) {
					$V5wfnej1fbpk[$Vrk0xgp55nxxName] = array();
				}
				if (!in_array($Vqqxv1tmdjox, $V5wfnej1fbpk[$Vrk0xgp55nxxName])) {
					$V5wfnej1fbpk[$Vrk0xgp55nxxName][] = $Vqqxv1tmdjox;
				}
			}
		}

		if (!empty($V5wfnej1fbpk)) {
			foreach($V5wfnej1fbpk as $Vrk0xgp55nxxName => $Vy2j1n1gkhqu) {
				if (empty($Vy2j1n1gkhqu)) {
					continue;
				}
				else if (count($Vy2j1n1gkhqu) == 1) {
					$V1iksx25hgxq['on'][$Vrk0xgp55nxxName] = '@@'.$Vy2j1n1gkhqu[0];
				}
				else {
					$V1iksx25hgxq['on'][$Vrk0xgp55nxxName] = '@@function (ev){';
					foreach ($Vy2j1n1gkhqu as $Viorgxcre2si => $Vqqxv1tmdjox) {
						$V1iksx25hgxq['on'][$Vrk0xgp55nxxName] .= '('.$Vqqxv1tmdjox.')(ev);';
					}
					$V1iksx25hgxq['on'][$Vrk0xgp55nxxName] .= '}';
				}
			}
		}

		return $V1iksx25hgxq;
	}

	
	private function returnGlobalEvents()
	{
		static $Vapibnlwgyle;
		$Vctq0aeuuexd = "";

		if (!isset($Vapibnlwgyle)) {
			$Vapibnlwgyle = array();
		}

		if (!empty($this->globalEvents)) {
			foreach ($this->globalEvents as $Vrk0xgp55nxxName => $Vy2j1n1gkhqu) {
				foreach ($Vy2j1n1gkhqu as $Viorgxcre2si => $Vqqxv1tmdjox) {
					if (!isset($Vapibnlwgyle[$Vrk0xgp55nxxName])) {
						$Vapibnlwgyle[$Vrk0xgp55nxxName] = array();
					}
					
					if (!in_array($Vqqxv1tmdjox, $Vapibnlwgyle[$Vrk0xgp55nxxName])) {
						$Vctq0aeuuexd .= ($Vqqxv1tmdjox ? "\n" : "") . "CKEDITOR.on('". $Vrk0xgp55nxxName ."', $Vqqxv1tmdjox);";
						$Vapibnlwgyle[$Vrk0xgp55nxxName][] = $Vqqxv1tmdjox;
					}
				}
			}
		}

		return $Vctq0aeuuexd;
	}

	
	private function init()
	{
		static $Vsbdt1iluuum;
		$Vctq0aeuuexd = "";

		if (!empty($Vsbdt1iluuum)) {
			return "";
		}

		if ($this->initialized) {
			$Vsbdt1iluuum = true;
			return "";
		}

		$V3yt0rtng0yi = "";
		$V0t4myzg5q1z = $this->ckeditorPath();

		if (!empty($this->timestamp) && $this->timestamp != "%"."TIMESTAMP%") {
			$V3yt0rtng0yi = '?t=' . $this->timestamp;
		}

		
		if (strpos($V0t4myzg5q1z, '..') !== 0) {
			$Vctq0aeuuexd .= $this->script("window.CKEDITOR_BASEPATH='". $V0t4myzg5q1z ."';");
		}

		$Vctq0aeuuexd .= "<script type=\"text/javascript\" src=\"" . $V0t4myzg5q1z . 'ckeditor.js' . $V3yt0rtng0yi . "\"></script>\n";

		$Vilsubr3k0g5 = "";
		if ($this->timestamp != self::timestamp) {
			$Vilsubr3k0g5 .= ($Vilsubr3k0g5 ? "\n" : "") . "CKEDITOR.timestamp = '". $this->timestamp ."';";
		}
		if ($Vilsubr3k0g5) {
			$Vctq0aeuuexd .= $this->script($Vilsubr3k0g5);
		}

		$Vsbdt1iluuum = $this->initialized = true;

		return $Vctq0aeuuexd;
	}

	
	private function ckeditorPath()
	{
		if (!empty($this->basePath)) {
			return $this->basePath;
		}

		
		if (isset($_SERVER['SCRIPT_FILENAME'])) {
			$Vepjimdmv0eu = dirname($_SERVER['SCRIPT_FILENAME']);
		}
		else {
			
			$Vepjimdmv0eu = realpath( './' ) ;
		}

		
		$Vam00i2pfuyj = dirname($_SERVER['PHP_SELF']);
		$Vhcnn1uxkuth = str_replace("\\", "/", __FILE__);

		if (!$Vam00i2pfuyj || !$Vepjimdmv0eu || !$Vhcnn1uxkuth) {
			return "/ckeditor/";
		}

		$V5mhd0wai51r = substr($Vepjimdmv0eu, 0, strlen($Vepjimdmv0eu) - strlen($Vam00i2pfuyj));
		$Vhcnn1uxkuthUrl = substr($Vhcnn1uxkuth, strlen($V5mhd0wai51r));
		$Vd4hqb3o3ygp = str_replace("ckeditor_php5.php", "", $Vhcnn1uxkuthUrl);

		return $Vd4hqb3o3ygp;
	}

	
	private function jsEncode($Vf0saxnurylc)
	{
		if (is_null($Vf0saxnurylc)) {
			return 'null';
		}
		if (is_bool($Vf0saxnurylc)) {
			return $Vf0saxnurylc ? 'true' : 'false';
		}
		if (is_int($Vf0saxnurylc)) {
			return $Vf0saxnurylc;
		}
		if (is_float($Vf0saxnurylc)) {
			return str_replace(',', '.', $Vf0saxnurylc);
		}
		if (is_array($Vf0saxnurylc) || is_object($Vf0saxnurylc)) {
			if (is_array($Vf0saxnurylc) && (array_keys($Vf0saxnurylc) === range(0,count($Vf0saxnurylc)-1))) {
				return '[' . implode(',', array_map(array($this, 'jsEncode'), $Vf0saxnurylc)) . ']';
			}
			$Vn1yj2ily4df = array();
			foreach ($Vf0saxnurylc as $Vo330cieh5w0 => $Vi1gaflvyuvn){
				$Vn1yj2ily4df[] = $this->jsEncode("{$Vo330cieh5w0}") . ':' . $this->jsEncode($Vi1gaflvyuvn);
			}
			return '{' . implode(',', $Vn1yj2ily4df) . '}';
		}
		
		if (strpos($Vf0saxnurylc, '@@') === 0)
			return substr($Vf0saxnurylc, 2);
		if (strtoupper(substr($Vf0saxnurylc, 0, 9)) == 'CKEDITOR.')
			return $Vf0saxnurylc;

		return '"' . str_replace(array("\\", "/", "\n", "\t", "\r", "\x08", "\x0c", '"'), array('\\\\', '\\/', '\\n', '\\t', '\\r', '\\b', '\\f', '\"'), $Vf0saxnurylc) . '"';
	}
}