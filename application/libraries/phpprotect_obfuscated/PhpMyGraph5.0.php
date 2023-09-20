<?php




class phpMyGraph {



	
	public static function parseVerticalColumnGraph($Vlhi02kz1ecz, $Vf5zqmgi2wdw = array()) {
		$Vrh1qulr0iaa = self::factory('verticalColumnGraph', $Vlhi02kz1ecz, $Vf5zqmgi2wdw);
		$Vrh1qulr0iaa->parse($Vlhi02kz1ecz, $Vf5zqmgi2wdw);
	}



	
	 public static function parseVerticalLineGraph($Vlhi02kz1ecz, $Vf5zqmgi2wdw = array()) {
		$Vrh1qulr0iaa = self::factory('verticalLineGraph', $Vlhi02kz1ecz, $Vf5zqmgi2wdw);
		$Vrh1qulr0iaa->parse($Vlhi02kz1ecz, $Vf5zqmgi2wdw);
	}



	
	public static function parseVerticalPolygonGraph($Vlhi02kz1ecz, $Vf5zqmgi2wdw = array()) {
		$Vrh1qulr0iaa = self::factory('verticalPolygonGraph', $Vlhi02kz1ecz, $Vf5zqmgi2wdw);
		$Vrh1qulr0iaa->parse($Vlhi02kz1ecz, $Vf5zqmgi2wdw);
	}



	
	public static function parseHorizontalColumnGraph($Vlhi02kz1ecz, $Vf5zqmgi2wdw = array()) {
		$Vrh1qulr0iaa = self::factory('horizontalColumnGraph', $Vlhi02kz1ecz, $Vf5zqmgi2wdw);
		$Vrh1qulr0iaa->parse($Vlhi02kz1ecz, $Vf5zqmgi2wdw);
	}



	
	public static function parseHorizontalLineGraph($Vlhi02kz1ecz, $Vf5zqmgi2wdw = array()) {
		$Vrh1qulr0iaa = self::factory('horizontalLineGraph', $Vlhi02kz1ecz, $Vf5zqmgi2wdw);
		$Vrh1qulr0iaa->parse($Vlhi02kz1ecz, $Vf5zqmgi2wdw);
	}



	
	public static function parseHorizontalPolygonGraph($Vlhi02kz1ecz, $Vf5zqmgi2wdw = array()) {
		$Vrh1qulr0iaa = self::factory('horizontalPolygonGraph', $Vlhi02kz1ecz, $Vf5zqmgi2wdw);
		$Vrh1qulr0iaa->parse($Vlhi02kz1ecz, $Vf5zqmgi2wdw);
	}



	
	public static function parseHorizontalSimpleColumnGraph($Vlhi02kz1ecz, $Vf5zqmgi2wdw = array()) {
		$Vrh1qulr0iaa = self::factory('horizontalSimpleColumnGraph', $Vlhi02kz1ecz, $Vf5zqmgi2wdw);
		$Vrh1qulr0iaa->parse($Vlhi02kz1ecz, $Vf5zqmgi2wdw);
	}	



	
	public static function parseVerticalSimpleColumnGraph($Vlhi02kz1ecz, $Vf5zqmgi2wdw = array()) {
		$Vrh1qulr0iaa = self::factory('verticalSimpleColumnGraph', $Vlhi02kz1ecz, $Vf5zqmgi2wdw);
		$Vrh1qulr0iaa->parse($Vlhi02kz1ecz, $Vf5zqmgi2wdw);
	}	
	


	
	public static function factory($V13hcbqeuapd) {
		if(!class_exists($V13hcbqeuapd)) {
			return false;
		}
		return new $V13hcbqeuapd();
	}
	


} 






interface iGraph {
	public function parse($Vlhi02kz1ecz, $Vf5zqmgi2wdw = array());
}






abstract class graphBase implements iGraph {

	
		
	
	protected $Vywttpn4tk4c;

	
	protected $Vf5zqmgi2wdw;
	


	

	
	public function __construct() {
	}
	


	
	public function parse($Vlhi02kz1ecz, $Vf5zqmgi2wdw=array()) {
	
		
		try {
			
			$this->parseConfig($Vf5zqmgi2wdw);

			
			throw new Exception('Method not implemented');
		}
		catch(Exception $Vzpuzrl4o1i3) {
			
			$this->parseError($Vzpuzrl4o1i3->__toString());
		}
		
		
		$this->parseImage();
	}



		
	public static function getConfigProperties() {
		$Vayr3ltigbuu = array(
			array('name' => 'type', 
				  'description' => 'Type for image output (png, jpg, gif)',
			      'type' => 'arrayValue', 
				  'default' => 'png', 
				  'values' => array('png','jpg','gif'), 
				  'casing' => 'lowercase'),
			array('name' => 'width',
				  'description' => 'Width for image', 
				  'type' => 'numeric', 
				  'default' => 500),
			array('name' => 'height', 
				  'description' => 'Height for image', 
			      'type' => 'numeric', 
				  'default' => 200),
			array('name' => 'background-color', 
				  'description' => 'Background color', 
				  'type' => 'color', 
			      'default' => 'FFFFFF'),
			array('name' => 'background-image', 
				  'description' => 'Background image', 			
				  'type' => 'file', 
				  'default' => ''),
			array('name' => 'title',
				  'description' => 'Title for graph', 			 
				  'type' => 'text', 
				  'default' => ''),
			array('name' => 'title-visible', 
				  'description' => 'Set title visibility', 			
				  'type' => 'boolean', 
				  'default' => true),
			array('name' => 'title-font-size', 
				  'description' => 'Title font size (1, 2, 3, 4, 5, 6)', 			
			      'type' => 'arrayValue', 
				  'default' => 2, 
				  'values' => array(1, 2, 3, 4, 5, 6)),
			array('name' => 'title-color', 
				  'description' => 'Title color (Use HEX)', 			
				  'type' => 'color', 
				  'default' => '000000'),
			array('name' => 'zero-line-visible', 
				  'description' => 'Set zero line visibility', 				
				  'type' => 'boolean', 
				  'default' => true),
			array('name' => 'zero-line-color', 
				  'description' => 'Zero line color', 			
				  'type' => 'color', 
				  'default' => '000000'),
			array('name' => 'zero-line-alpha', 
				  'description' => 'Zero line alpha', 			
				  'type' => 'numeric', 
				  'default' => 0),
			array('name' => 'average-line-visible', 
				  'description' => 'Set average line visibility', 			
				  'type' => 'boolean', 
				  'default' => true),
			array('name' => 'average-line-color', 
				  'description' => 'Average line color (Use HEX)', 			
				  'type' => 'color', 
				  'default' => '0000FF'),
			array('name' => 'average-line-alpha', 
				  'description' => 'Average line alpha', 			
				  'type' => 'numeric', 
				  'default' => 0),
			array('name' => 'key-color', 
				  'description' => 'Key color (Use HEX)', 			
				  'type' => 'color', 
				  'default' => '006699'),
			array('name' => 'key-visible', 
				  'description' => 'Set key visibility', 			
				  'type' => 'boolean', 
				  'default' => true),
			array('name' => 'key-font-size', 
				  'description' => 'Set key font size (1, 2, 3, 4, 5, 6)', 			
				  'type' => 'arrayValue', 
				  'default' => 2, 
				  'values' => array(1, 2, 3, 4, 5, 6)),
			array('name' => 'key-right-align', 
				  'description' => 'Right Align Keys', 			
				  'type' => 'boolean', 
				  'default' => false),
			array('name' => 'label', 
				  'description' => 'Label text',			
				  'type' => 'text', 
				  'default' => ''),
			array('name' => 'label-color', 
				  'description' => 'Label color (Use HEX)',			
				  'type' => 'color', 
				  'default' => '000000'),
			array('name' => 'label-visible', 
				  'description' => 'Set label visibility',			
				  'type' => 'boolean', 
				  'default' => true),
			array('name' => 'label-font-size', 
				  'description' => 'Label font size (1, 2, 3, 4, 5, 6)',			
				  'type' => 'arrayValue', 
				  'default' => 2, 
				  'values' => array(1, 2, 3, 4, 5, 6)),
			array('name' => 'label-right-align', 
				  'description' => 'Right Align Labels', 			
				  'type' => 'boolean', 
				  'default' => false),
			array('name' => 'value-visible', 
				  'description' => 'Set value visibility',			
				  'type' => 'boolean', 
				  'default' => true),
			array('name' => 'value-font-size', 
				  'description' => 'Value font size (1, 2, 3, 4, 5, 6)',			
				  'type' => 'arrayValue', 
				  'default' => 2, 
				  'values' => array(1, 2, 3, 4, 5, 6)),
			array('name' => 'value-color', 
				  'description' => 'Value color (Use HEX)',			
				  'type' => 'color', 
				  'default' => '000000'),
			array('name' => 'value-label-visible', 
				  'description' => 'Set value label visibility',			
				  'type' => 'boolean', 
				  'default' => true),
			array('name' => 'value-label-font-size', 
				  'description' => 'Value label font size',			
				  'type' => 'arrayValue', 
				  'default' => 2, 
				  'values' => array(1, 2, 3, 4, 5, 6)),
			array('name' => 'value-label-color', 
				  'description' => 'Value label color (Use HEX)',			
				  'type' => 'color', 
				  'default' => '006699'),
			array('name' => 'box-border-color', 
				  'description' => 'Box border color (Use HEX)',			
				  'type' => 'color', 
				  'default' => '006699'),
			array('name' => 'box-border-alpha', 
				  'description' => 'Box border alpha',			
				  'type' => 'numeric', 
				  'default' => 0),
			array('name' => 'box-border-visible', 
				  'description' => 'Set box border visibility',			
				  'type' => 'boolean', 
				  'default' => true),
			array('name' => 'box-background-color', 
				  'description' => 'Box background color (Use HEX)',			
				  'type' => 'color', 
				  'default' => 'F1F1F1'),
			array('name' => 'box-background-visible', 
				  'description' => 'Box background visibility',			
				  'type' => 'boolean', 
				  'default' => true),
			array('name' => 'box-background-alpha', 
				  'description' => 'Box background alpha',			
				  'type' => 'numeric', 
				  'default' => 0),
			array('name' => 'column-divider-color', 
				  'description' => 'Column divider color (Use HEX)',			
				  'type' => 'color', 
				  'default' => '000000'),
			array('name' => 'column-divider-alpha', 
				  'description' => 'Column divider alpha',			
				  'type' => 'numeric', 
				  'default' => 100),
			array('name' => 'column-divider-visible', 
				  'description' => 'Set column divider visibility',			
				  'type' => 'boolean', 
				  'default' => true),
			array('name' => 'horizontal-divider-color', 
				  'description' => 'Horizontal divider color (Use HEX)',			
				  'type' => 'color', 
				  'default' => '000000'),
			array('name' => 'horizontal-divider-alpha', 
				  'description' => 'Horizontal divider alpha',			
				  'type' => 'numeric', 
				  'default' => 100),
			array('name' => 'horizontal-divider-visible', 
				  'description' => 'Set horizontal divider visiblity',			
				  'type' => 'boolean', 
				  'default' => true),
			array('name' => 'column-color-random', 
				  'description' => 'Create random column color',			
				  'type' => 'boolean', 
				  'default' => false),
			array('name' => 'column-color', 
				  'description' => 'Column color (Use HEX)',			
				  'type' => 'color', 
				  'default' => '0099CC'),
			array('name' => 'column-alpha', 
				  'description' => 'Column alpha',			
				  'type' => 'numeric', 
				  'default' => 0),
			array('name' => 'column-shadow-alpha', 
				  'description' => 'Column shadow alpha',			
				  'type' => 'numeric', 
				  'default' => 0),
			array('name' => 'column-shadow-color', 
				  'description' => 'Column shadow color (Use HEX)',			
				  'type' => 'color', 
				  'default' => '006699'),
			array('name' => 'column-compare-color', 
				  'description' => 'Compare column color (Use HEX)',			
				  'type' => 'color', 
				  'default' => 'FF0000'),
			array('name' => 'column-compare-shadow-color', 
				  'description' => 'Compare column shadow color (Use HEX)',			
				  'type' => 'color', 
				  'default' => 'FF0000'),
			array('name' => 'file-name', 
				  'description' => 'Filename to parse to',			
				  'type' => 'text', 
				  'default' => NULL),
			array('name' => 'jpg-quality', 
				  'description' => 'JPG output quality',			
				  'type' => 'numeric', 
				  'default' => 60),
			array('name' => 'round-value-range', 
				  'description' => 'Round Range Values',			
				  'type' => 'boolean', 
				  'default' => false)		  
		);
		
		return $Vayr3ltigbuu;
	}



		
	public function getExampleUsage() {
		
		$Vn0pt1jgtqr0 = '<?php';

		
		$Vn0pt1jgtqr0 .= "\t\n";
		$Vn0pt1jgtqr0 .= "\t//Set content-type header\n";
		$Vn0pt1jgtqr0 .= "\theader(\"Content-type: image/png\");\n\n";
		$Vn0pt1jgtqr0 .= "\t//Include phpMyGraph5.0.php\n";
		$Vn0pt1jgtqr0 .= "\tinclude_once('phpMyGraph5.0.php');\n";
		$Vn0pt1jgtqr0 .= "\t\n";
		$Vn0pt1jgtqr0 .= "\t//Set config directives\n";
		$Vn0pt1jgtqr0 .= "\t\$Vf5zqmgi2wdw['title'] = 'Example graph';\n";
		$Vn0pt1jgtqr0 .= "\t\$Vf5zqmgi2wdw['width'] = 500;\n";
		$Vn0pt1jgtqr0 .= "\t\$Vf5zqmgi2wdw['height'] = 250;\n";
		$Vn0pt1jgtqr0 .= "\t\n";
		$Vn0pt1jgtqr0 .= "\t//Set data\n";
		$Vn0pt1jgtqr0 .= "\t\$Vlhi02kz1ecz = array(\n";
		$Vn0pt1jgtqr0 .= "\t	'Jan' => 12,\n";
		$Vn0pt1jgtqr0 .= "\t	'Feb' => 25,\n";
		$Vn0pt1jgtqr0 .= "\t	'Mar' => 0,\n";
		$Vn0pt1jgtqr0 .= "\t	'Apr' => 7,\n";
		$Vn0pt1jgtqr0 .= "\t	'May' => 80,\n";
		$Vn0pt1jgtqr0 .= "\t	'Jun' => 67,\n";
		$Vn0pt1jgtqr0 .= "\t	'Jul' => 45,\n";
		$Vn0pt1jgtqr0 .= "\t	'Aug' => 66,\n";
		$Vn0pt1jgtqr0 .= "\t	'Sep' => 23,\n";
		$Vn0pt1jgtqr0 .= "\t	'Oct' => 23,\n";
		$Vn0pt1jgtqr0 .= "\t	'Nov' => 78,\n";
		$Vn0pt1jgtqr0 .= "\t	'Dec' => 23\n";
		$Vn0pt1jgtqr0 .= "\t);\n";
		$Vn0pt1jgtqr0 .= "\t\n"; 
		
		
		
		$Vn0pt1jgtqr0 .= "	//Create phpMyGraph instance\n";
		$Vn0pt1jgtqr0 .= "	\$Vrh1qulr0iaa = new phpMyGraph();\n";
		$Vn0pt1jgtqr0 .= "\n";
		$Vn0pt1jgtqr0 .= "	//Parse\n";
		$Vn0pt1jgtqr0 .= "	\$Vrh1qulr0iaa->parse".ucfirst(get_class($this))."(\$Vlhi02kz1ecz, \$Vf5zqmgi2wdw);\n";
		
		
		$Vn0pt1jgtqr0 .= '?>';
		
		return highlight_string($Vn0pt1jgtqr0, true);
	}



		
	protected function parseConfig($Vf5zqmgi2wdw) {
		
		$Vayr3ltigbuu = $this->getConfigProperties();
		
		
		if(!is_array($Vf5zqmgi2wdw)) {
			$Vf5zqmgi2wdw = array();
		}
		
		
		foreach($Vayr3ltigbuu as $Vpetowf41xeg) {
		
			
			if(!array_key_exists($Vpetowf41xeg['name'], $Vf5zqmgi2wdw)) {
				$Vf5zqmgi2wdw[$Vpetowf41xeg['name']] = $Vpetowf41xeg['default'];
			}
			
			
			if(array_key_exists('casing', $Vpetowf41xeg)) {
				switch(strtolower($Vpetowf41xeg['casing'])) {
					case 'lower':
					case 'lowercase':
						$Vf5zqmgi2wdw[$Vpetowf41xeg['name']] = 
							strtolower($Vf5zqmgi2wdw[$Vpetowf41xeg['name']]);
						break;
					case 'upper':
					case 'uppercase':
						$Vf5zqmgi2wdw[$Vpetowf41xeg['name']] = 
							strtoupper($Vf5zqmgi2wdw[$Vpetowf41xeg['name']]);
						break;
					default:
						break;
				}
			}
			
			
			switch($Vpetowf41xeg['type']) {
				case 'boolean':
					if($Vf5zqmgi2wdw[$Vpetowf41xeg['name']] === true || 
					   $Vf5zqmgi2wdw[$Vpetowf41xeg['name']] === '1' || 
					   $Vf5zqmgi2wdw[$Vpetowf41xeg['name']] === 1
					 ) {
						$Vf5zqmgi2wdw[$Vpetowf41xeg['name']] = true;
					}
					else {
						$Vf5zqmgi2wdw[$Vpetowf41xeg['name']] = false;
					}
					break;
				case 'color':
					$Vf5zqmgi2wdw[$Vpetowf41xeg['name']] = 
						$this->hex2Rgb($Vf5zqmgi2wdw[$Vpetowf41xeg['name']]);
					break;
				case 'numeric':
					if(!is_numeric($Vf5zqmgi2wdw[$Vpetowf41xeg['name']])) {
						$Vf5zqmgi2wdw[$Vpetowf41xeg['name']] = 
							$Vpetowf41xeg['default'];
					}
					break;
				case 'file':
					if(!empty($Vf5zqmgi2wdw[$Vpetowf41xeg['name']])) {
						if(!file_exists($Vf5zqmgi2wdw[$Vpetowf41xeg['name']])) {
							throw new Exception(sprintf(
								'Could not find file "%s" for use as background.',
								$Vf5zqmgi2wdw[$Vpetowf41xeg['name']]));
						}
					}
					break;
				case 'arrayValue':
					if(!in_array($Vf5zqmgi2wdw[$Vpetowf41xeg['name']], 
						$Vpetowf41xeg['values'])) {
						$Vf5zqmgi2wdw[$Vpetowf41xeg['name']] = 
							$Vpetowf41xeg['default'];
					}
					break;
				default:
					break;
			}
		}
		
		
		$this->cfg = $Vf5zqmgi2wdw;
		
		
		return $this->cfg;
	}



		
	protected function createImage($Vw31s3tn45kg, $Vu0zgweajhgj, $Vsc50uiov32z=false) {
		
		$Vywttpn4tk4c = imagecreatetruecolor($Vw31s3tn45kg, $Vu0zgweajhgj);
		
		
		if($Vsc50uiov32z) {
			imagesavealpha($Vywttpn4tk4c, true);
			$Vxih0flklnxx = imagecolorallocatealpha($Vywttpn4tk4c, 0, 0, 0, 127);
			imagefill($Vywttpn4tk4c, 0, 0, $Vxih0flklnxx);	
		}
		
		
		return $Vywttpn4tk4c;
	}
	


		
	protected function parseImage() {
		
		if(!$this->ip) {
			$this->parseError('$this->ip is not a valid Image resource.');
		}
		if(!empty($this->cfg['file-name'])) {
			
			switch(strtolower($this->cfg['type'])) {
				case 'jpg':
					imagejpeg($this->ip, $this->cfg['file-name'], $this->cfg['jpg-quality']);
				break;
				case 'gif':
					imagegif($this->ip, $this->cfg['file-name']);
				break;
				default:
					imagepng($this->ip, $this->cfg['file-name']);
				break;
			}
			
		}
		else {
			
			
			switch(strtolower($this->cfg['type'])) {
				case 'jpg':
					imagejpeg($this->ip, NULL, $this->cfg['jpg-quality']);
				break;
				case 'gif':
					imagegif($this->ip);
				break;
				default:
					imagepng($this->ip);
				break;
			}			
		}
	}



		
	protected function hex2Rgb($Vu0dn4pv03dg) {
		
		if(empty($Vu0dn4pv03dg)) {
			return NULL;
		}
		
		$V1oactcnwfwe = array();
		
		
		$Vu0dn4pv03dg = str_replace("#", '', $Vu0dn4pv03dg);
		
		
		$V1oactcnwfwe['r'] = hexdec(substr($Vu0dn4pv03dg, 0, 2));
        $V1oactcnwfwe['g'] = hexdec(substr($Vu0dn4pv03dg, 2, 2));
        $V1oactcnwfwe['b'] = hexdec(substr($Vu0dn4pv03dg, 4, 2));		
		
		
		return $V1oactcnwfwe;
	}


	
		
	protected function parseDataStructure($Vlhi02kz1ecz) {
		
		if(!is_array($Vlhi02kz1ecz)) {
			throw new Exception('Provided data is not an array.');
		}
		
		
		$Vxgvb5p1fuq0 = array(
			'cols' => 0,
			'max' => 0,
			'min' => 0,
			'avg' => 0,
			'fakeMax' => 0,
			'fakeMin' => 0,
			'difference' => 0,
			'plusDifference' => 0,
			'minDifference' => 0,
			'plusQuadrantPercentage' => 0,
			'minQuadrantPercentage' => 0,
			'maxKeyLength' => 0,
			'maxValueLength' => 0,
			'data' => $Vlhi02kz1ecz
		);
			
		
		foreach($Vlhi02kz1ecz as $Vzls01jplmeq => $Vn5ykvkgiw10) {
			
			if(!is_numeric($Vn5ykvkgiw10)) {
				throw new Exception(
					'The value of the key "%s" is not numeric.');
			}
			
			
			$Vzls01jplmeqLength = strlen($Vzls01jplmeq);
			if($Vxgvb5p1fuq0['maxKeyLength'] < $Vzls01jplmeqLength) {
				$Vxgvb5p1fuq0['maxKeyLength'] = $Vzls01jplmeqLength;
			}
			
			
			$Vn5ykvkgiw10Length = strlen($Vn5ykvkgiw10);
			
			
			
		}

		
		$Vxgvb5p1fuq0['max'] = max($Vlhi02kz1ecz);
		$Vxgvb5p1fuq0['min'] = min($Vlhi02kz1ecz);
		$Vxgvb5p1fuq0['fakeMax'] = $Vxgvb5p1fuq0['max'] + (($Vxgvb5p1fuq0['max'] / 100) * 10); 
		$Vxgvb5p1fuq0['fakeMin'] = ($Vxgvb5p1fuq0['min'] > 0) ? 0 : ($Vxgvb5p1fuq0['min'] + (($Vxgvb5p1fuq0['min'] / 100) * 10));
		$Vxgvb5p1fuq0['cols'] = count($Vlhi02kz1ecz);
		$Vxgvb5p1fuq0['avg'] = array_sum($Vlhi02kz1ecz) / $Vxgvb5p1fuq0['cols'];
		$Vxgvb5p1fuq0['difference'] = $Vxgvb5p1fuq0['fakeMax'] - $Vxgvb5p1fuq0['fakeMin'];
		$Vxgvb5p1fuq0['plusDifference'] = $Vxgvb5p1fuq0['fakeMax'];
		$Vxgvb5p1fuq0['minDifference'] = 0 - $Vxgvb5p1fuq0['fakeMin'];
		
		
		if( $this->cfg['round-value-range'] ){
			$Vxgvb5p1fuq0['fakeMax'] = round($Vxgvb5p1fuq0['fakeMax']);
			$Vxgvb5p1fuq0['fakeMin'] = round($Vxgvb5p1fuq0['fakeMin']);
		}
		
		
		if($Vxgvb5p1fuq0['maxValueLength'] < strlen($Vxgvb5p1fuq0['fakeMax'])) {
			$Vxgvb5p1fuq0['maxValueLength'] = strlen($Vxgvb5p1fuq0['fakeMax']);
		}
		if($Vxgvb5p1fuq0['maxValueLength'] < strlen($Vxgvb5p1fuq0['fakeMin'])) {
			$Vxgvb5p1fuq0['maxValueLength'] = strlen($Vxgvb5p1fuq0['fakeMin']);
		}
		if($Vxgvb5p1fuq0['maxValueLength'] < strlen(ceil($Vxgvb5p1fuq0['avg']))) {
			$Vxgvb5p1fuq0['maxValueLength'] = strlen(ceil($Vxgvb5p1fuq0['avg']));
		}
		
		
		if($Vxgvb5p1fuq0['fakeMin'] < 0) {
			$Vxgvb5p1fuq0['plusQuadrantPercentage'] = ($Vxgvb5p1fuq0['plusDifference'] / ($Vxgvb5p1fuq0['difference'] / 100));
			$Vxgvb5p1fuq0['minQuadrantPercentage'] = ($Vxgvb5p1fuq0['minDifference'] / ($Vxgvb5p1fuq0['difference'] / 100));
		}
		else {
			$Vxgvb5p1fuq0['plusQuadrantPercentage'] = 100;
			$Vxgvb5p1fuq0['minQuadrantPercentage'] = 0;
		}
		
		
		$Vxgvb5p1fuq0['positiveSectionPercentage'] = $Vxgvb5p1fuq0['plusQuadrantPercentage'];
		$Vxgvb5p1fuq0['negativeSectionPercentage'] = $Vxgvb5p1fuq0['minQuadrantPercentage'];

		
		
		
		
		
		return $Vxgvb5p1fuq0;
	}



		
	protected static function isDataStructure($Vxgvb5p1fuq0) {
		
		$Vn5ykvkgiw10s = array('cols','max','min','avg','maxKeyLength', 'maxValueLength');
		
		if(!is_array($Vxgvb5p1fuq0)) {
			return false;
		}
		
		foreach($Vn5ykvkgiw10s as $Vzls01jplmeq) {
			if(!array_key_exists($Vzls01jplmeq, $Vxgvb5p1fuq0)) {
				return false;
			}
		}
		return true;
	}



		
	protected function compareDataStructures() {
		
		if(func_num_args() < 2) {
			throw new Exception('compareDataStructures needs atleast 2 data structures');
		}
		
		$Vkb20npc4xzx = func_get_args();
		$Vxgvb5p1fuq0 = array(
			'cols' => NULL,
			'max' => 0,
			'min' => 0,
			'avg' => NULL,
			'fakeMax' => 0,
			'fakeMin' => 0,
			'difference' => 0,
			'plusDifference' => 0,
			'minDifference' => 0,
			'plusQuadrantPercentage' => 0,
			'minQuadrantPercentage' => 0,			
			'maxKeyLength' => 0,
			'maxValueLength' => 0,
			'structures' => array()
		);

		
		$Vcrl5mk34lv4 = NULL;
		$Vek0y1ixwfmg = array();
		
		
		foreach($Vkb20npc4xzx as $Vec5hzvzuawo => $Vlhi02kz1eczStructure) {
		
			
			if(is_null($Vxgvb5p1fuq0['cols'])) {
				
				$Vxgvb5p1fuq0['cols'] = $Vlhi02kz1eczStructure['cols'];
			}
			else {
				
				if($Vxgvb5p1fuq0['cols'] != $Vlhi02kz1eczStructure['cols']) {
					throw new Exception(sprintf('Not all datastructures have the same ammount of columns.', $Vec5hzvzuawo));
				}
			}
		
			
			if(!$this->isDataStructure($Vlhi02kz1eczStructure)) {
				throw new Exception(sprintf('Structure "%s" is not a valid datastructure', $Vec5hzvzuawo));
			}
			
			
			if($Vxgvb5p1fuq0['max'] < $Vlhi02kz1eczStructure['max']) {
				$Vxgvb5p1fuq0['max'] = $Vlhi02kz1eczStructure['max'];
			}

			
			if($Vlhi02kz1eczStructure['min'] < $Vxgvb5p1fuq0['min']) {
				$Vxgvb5p1fuq0['min'] = $Vlhi02kz1eczStructure['min'];
			}

			
			if($Vxgvb5p1fuq0['maxKeyLength'] < $Vlhi02kz1eczStructure['maxKeyLength']) {
				$Vxgvb5p1fuq0['maxKeyLength'] = $Vlhi02kz1eczStructure['maxKeyLength'];
			}
			
			
			if($Vxgvb5p1fuq0['maxValueLength'] < $Vlhi02kz1eczStructure['maxValueLength']) {
				$Vxgvb5p1fuq0['maxValueLength'] = $Vlhi02kz1eczStructure['maxValueLength'];
			}			
			
			
			$Vek0y1ixwfmg[] = $Vlhi02kz1eczStructure['avg'];
			
		}
		
		
		$Vxgvb5p1fuq0['fakeMax'] = $Vxgvb5p1fuq0['max'] + (($Vxgvb5p1fuq0['max'] / 100) * 10); 
		$Vxgvb5p1fuq0['fakeMin'] = ($Vxgvb5p1fuq0['min'] > 0) ? 0 : ($Vxgvb5p1fuq0['min'] + (($Vxgvb5p1fuq0['min'] / 100) * 10));
		$Vxgvb5p1fuq0['avg'] = array_sum($Vek0y1ixwfmg) / count($Vek0y1ixwfmg);
		$Vxgvb5p1fuq0['difference'] = $Vxgvb5p1fuq0['fakeMax'] - $Vxgvb5p1fuq0['fakeMin'];
		$Vxgvb5p1fuq0['plusDifference'] = $Vxgvb5p1fuq0['fakeMax'];
		$Vxgvb5p1fuq0['minDifference'] = 0 - $Vxgvb5p1fuq0['fakeMin'];

		
		if($Vxgvb5p1fuq0['fakeMin'] < 0) {
			$Vxgvb5p1fuq0['plusQuadrantPercentage'] = ($Vxgvb5p1fuq0['plusDifference'] / ($Vxgvb5p1fuq0['difference'] / 100));
			$Vxgvb5p1fuq0['minQuadrantPercentage'] = ($Vxgvb5p1fuq0['minDifference'] / ($Vxgvb5p1fuq0['difference'] / 100));
		}
		else {
			$Vxgvb5p1fuq0['plusQuadrantPercentage'] = 100;
			$Vxgvb5p1fuq0['minQuadrantPercentage'] = 0;
		}
		
		
		$Vxgvb5p1fuq0['positiveSectionPercentage'] = $Vxgvb5p1fuq0['plusQuadrantPercentage'];
		$Vxgvb5p1fuq0['negativeSectionPercentage'] = $Vxgvb5p1fuq0['minQuadrantPercentage'];
		
		
		foreach($Vkb20npc4xzx as $Vec5hzvzuawo => $Vlhi02kz1eczStructure) {
			
			
			$Vlhi02kz1eczStructure['fakeMax'] = $Vxgvb5p1fuq0['fakeMax'];
			$Vlhi02kz1eczStructure['fakeMin'] = $Vxgvb5p1fuq0['fakeMin'];
			$Vlhi02kz1eczStructure['avg'] = $Vxgvb5p1fuq0['avg'];
			$Vlhi02kz1eczStructure['difference'] = $Vxgvb5p1fuq0['difference'];
			$Vlhi02kz1eczStructure['plusDifference'] = $Vxgvb5p1fuq0['plusDifference'];
			$Vlhi02kz1eczStructure['minDifference'] = $Vxgvb5p1fuq0['minDifference'];
			$Vlhi02kz1eczStructure['plusQuadrantPercentage'] = $Vxgvb5p1fuq0['plusQuadrantPercentage'];
			$Vlhi02kz1eczStructure['minQuadrantPercentage'] = $Vxgvb5p1fuq0['minQuadrantPercentage'];
			$Vlhi02kz1eczStructure['positiveSectionPercentage'] = $Vxgvb5p1fuq0['positiveSectionPercentage'];
			$Vlhi02kz1eczStructure['negativeSectionPercentage'] = $Vxgvb5p1fuq0['negativeSectionPercentage'];
			
			$Vlhi02kz1eczStructure['min'] = $Vxgvb5p1fuq0['min'];
			$Vlhi02kz1eczStructure['max'] = $Vxgvb5p1fuq0['max'];
			$Vlhi02kz1eczStructure['maxValueLength'] = $Vxgvb5p1fuq0['maxValueLength'];
			$Vlhi02kz1eczStructure['maxKeyLength'] = $Vxgvb5p1fuq0['maxKeyLength'];
			
			

			
			$Vxgvb5p1fuq0['structures'][] = $Vlhi02kz1eczStructure;
			
		}
		
		
		return $Vxgvb5p1fuq0;
	}


	
		
	protected function parseError($Vsgkmtbci2wq) {
		
		$Vrp04dklonim = explode("\n", $Vsgkmtbci2wq);
		$V0cucx40r4vi = count($Vrp04dklonim);
		$Vpzypuhvknjd = imagefontwidth(2);
		$Vaj5jmqc444t = imagefontheight(2);
		$Veqdxoiqv0vq = 0;
		$Vcquyhgeae2j = ceil($Vaj5jmqc444t * $V0cucx40r4vi);
		$Vp1xlxrzyxlv = 0;
		$Vnplkggjnzla = 0;
		$Vsgkmtbci2wqWidth = 0;
		
		
		foreach($Vrp04dklonim as $Vc3ptu2cpooa) {
			$Vsgkmtbci2wqWidth = ceil(strlen($Vc3ptu2cpooa) * $Vpzypuhvknjd);
			if($Veqdxoiqv0vq < $Vsgkmtbci2wqWidth) {
				$Veqdxoiqv0vq = $Vsgkmtbci2wqWidth;
			}
		}
		
		
		$this->ip = $this->createImage($Veqdxoiqv0vq, $Vcquyhgeae2j);
		
		
		$Vq0ufa5c303m = imagecolorallocate($this->ip, 255, 0, 0);
		$V0lf0m1w33n3 = imagecolorallocate($this->ip, 255, 255, 255);
		
		
		imagefilledrectangle($this->ip, 0, 0, $Veqdxoiqv0vq, $Vcquyhgeae2j, $V0lf0m1w33n3);
		
		
		foreach($Vrp04dklonim as $Vc3ptu2cpooa) {
			imagestring($this->ip, 2, $Vp1xlxrzyxlv, $Vnplkggjnzla, $Vc3ptu2cpooa, $Vq0ufa5c303m);
			$Vnplkggjnzla = $Vnplkggjnzla + $Vaj5jmqc444t;
		}
		
	}
	


		
	protected function allocateColor($V1oactcnwfwe, $Vqptk3alkdyh=false) {
		if(!$this->ip) {
			return false;
		}
		if(is_numeric($Vqptk3alkdyh) && $Vqptk3alkdyh > 0) {
			return imagecolorallocatealpha($this->ip, $V1oactcnwfwe['r'], $V1oactcnwfwe['g'], $V1oactcnwfwe['b'], $Vqptk3alkdyh);
		}
		else {
			return imagecolorallocate($this->ip, $V1oactcnwfwe['r'], $V1oactcnwfwe['g'], $V1oactcnwfwe['b']);
		}
	}



		
	protected function generateRandomColor() {
			
			$Vs4gne2wo4hh = rand(70,200);
			$Vhfqpisgb4kv = rand(70,200);
			$V1yenpdfyl1s = rand(70,200);
	
			
			$Vjqzvbpbyed5 = array(
				'forecolor' => array('r'=>$Vs4gne2wo4hh, 'g' => $Vhfqpisgb4kv, 'b' => $V1yenpdfyl1s),
				'backcolor' => array('r'=>$Vs4gne2wo4hh-20, 'g' => $Vhfqpisgb4kv-20, 'b' => $V1yenpdfyl1s-20)
			);
			return $Vjqzvbpbyed5;	
	}



		
	protected function createImageFromFile($Vhcnn1uxkuth) {
		$Vywttpn4tk4c = @imagecreatefromjpeg($Vhcnn1uxkuth);
		if(!$Vywttpn4tk4c) {
			$Vywttpn4tk4c = @imagecreatefromgif($Vhcnn1uxkuth);
		}
		if(!$Vywttpn4tk4c) {
			$Vywttpn4tk4c = @imagecreatefrompng($Vhcnn1uxkuth);
		}
		return $Vywttpn4tk4c;
	}



} 






abstract class verticalGraphBase extends graphBase {



		
	protected function calculateGraph($Vlhi02kz1eczStructure) {
		
		$Vyttwgo5jasl = array();
		
		
		$Vyttwgo5jasl['offset'] = $this->calculateOffset($Vlhi02kz1eczStructure);
		$Vyttwgo5jasl['box'] = $this->calculateGraphBox($Vlhi02kz1eczStructure, $Vyttwgo5jasl);
		$Vyttwgo5jasl['col'] = $this->calculateColumnWidth($Vlhi02kz1eczStructure, $Vyttwgo5jasl);
		$Vyttwgo5jasl['section']['positive'] = $this->calculatePositiveSection($Vlhi02kz1eczStructure, $Vyttwgo5jasl);
		$Vyttwgo5jasl['section']['negative'] = $this->calculateNegativeSection($Vlhi02kz1eczStructure, $Vyttwgo5jasl);
		$Vyttwgo5jasl['zero'] = $this->calculateZero($Vlhi02kz1eczStructure, $Vyttwgo5jasl);
		$Vyttwgo5jasl['average'] = $this->calculateAverage($Vlhi02kz1eczStructure, $Vyttwgo5jasl);
		$Vyttwgo5jasl['title'] = $this->calculateTitle($Vlhi02kz1eczStructure, $Vyttwgo5jasl);		
		$Vyttwgo5jasl['label'] = $this->calculateLabel($Vlhi02kz1eczStructure, $Vyttwgo5jasl);
		$Vyttwgo5jasl['value'] = $this->calculateValueLabels($Vlhi02kz1eczStructure, $Vyttwgo5jasl);
		$Vyttwgo5jasl['columns'] = $this->calculateColumns($Vlhi02kz1eczStructure, $Vyttwgo5jasl);
		
		
		return $Vyttwgo5jasl;
	}



		
	protected function calculateOffset($Vlhi02kz1eczStructure) {
		
		$Vs4gne2wo4hhesult = array(
			'top' => 20,
			'left' => 20,
			'right' => 20,
			'bottom' => 20,
		);
		
		
		if($this->cfg['value-label-visible']) {
			$Vs4gne2wo4hhesult['left'] = 
				($Vlhi02kz1eczStructure['maxValueLength'] * 
				imagefontwidth($this->cfg['value-label-font-size'])) + 
				20;
		}

		
		if($this->cfg['title-visible']) {
			$Vs4gne2wo4hhesult['top'] = 
				($this->cfg['title'] !== '') ? 
				imagefontheight($this->cfg['title-font-size']) + 
				20 : 
				$Vs4gne2wo4hhesult['top'];
		}
		
		
		if($this->cfg['label-visible']) {
			$Vs4gne2wo4hhesult['right'] = 
				($this->cfg['label'] !== '') ? 
				(strlen($this->cfg['label']) * 
				imagefontwidth($this->cfg['label-font-size'])) + 
				20 : 
				$Vs4gne2wo4hhesult['right'];
		}
		
		
		if($this->cfg['key-visible']) {
			$Vs4gne2wo4hhesult['bottom'] = 
				($Vlhi02kz1eczStructure['maxKeyLength'] * 
				imagefontwidth($this->cfg['key-font-size'])) +
				20;
		}		
		
		
		$Vs4gne2wo4hhesult['top'] = ($Vs4gne2wo4hhesult['top'] < 20) ? 20 : $Vs4gne2wo4hhesult['top'];
		$Vs4gne2wo4hhesult['left'] = ($Vs4gne2wo4hhesult['left'] < 20) ? 20 : $Vs4gne2wo4hhesult['left'];
		$Vs4gne2wo4hhesult['right'] = ($Vs4gne2wo4hhesult['right'] < 20) ? 20 : $Vs4gne2wo4hhesult['right'];
		$Vs4gne2wo4hhesult['bottom'] = ($Vs4gne2wo4hhesult['bottom'] < 20) ? 20 : $Vs4gne2wo4hhesult['bottom'];
		
		
		$Vs4gne2wo4hhesult['right'] = ($Vs4gne2wo4hhesult['right'] < $Vs4gne2wo4hhesult['left']) ? $Vs4gne2wo4hhesult['left'] : $Vs4gne2wo4hhesult['right'];
		
		
		return $Vs4gne2wo4hhesult;
	}



		
	protected function calculateGraphBox($Vlhi02kz1eczstructure, $Vyttwgo5jasl) {
		
		$Vs4gne2wo4hhesult = array(
			'x1' => 0,
			'y1' => 0,
			'x2' => 0,
			'y2' => 0,
			'width' => 0,
			'height' => 0
		);

		
		$Vs4gne2wo4hhesult['x1'] = $Vyttwgo5jasl['offset']['left'];
		$Vs4gne2wo4hhesult['y1'] = $Vyttwgo5jasl['offset']['top'];
		$Vs4gne2wo4hhesult['x2'] = 
			$this->cfg['width'] - 
			$Vyttwgo5jasl['offset']['right'];
		$Vs4gne2wo4hhesult['y2'] = 
			$this->cfg['height'] - 
			$Vyttwgo5jasl['offset']['bottom'];
		
		
		$Vs4gne2wo4hhesult['width'] = 
			(($this->cfg['width'] - 
			$Vyttwgo5jasl['offset']['left']) - 
			$Vyttwgo5jasl['offset']['right']);
			
		
		$Vs4gne2wo4hhesult['height'] = 
			(($this->cfg['height'] - 
			$Vyttwgo5jasl['offset']['top']) - 
			$Vyttwgo5jasl['offset']['bottom']);
		
		
		return $Vs4gne2wo4hhesult;
	}



		
	protected function calculateColumnWidth($Vlhi02kz1eczstructure, $Vyttwgo5jasl) {
		
		$Vs4gne2wo4hhesult = array(
			'width' => 0,
			'show' => true
		);

		
		$Vs4gne2wo4hhesult['width'] = 
			$Vyttwgo5jasl['box']['width'] / 
			$Vlhi02kz1eczstructure['cols'];
		
		
		if($Vs4gne2wo4hhesult['width'] < 
			imagefontheight($this->cfg['key-font-size'])) {
			$Vs4gne2wo4hhesult['show'] = false;
		}
		
		
		return $Vs4gne2wo4hhesult;
	
	}


	
		
	protected function calculatePositiveSection($Vlhi02kz1eczstructure, $Vyttwgo5jasl) {
		
		$Vs4gne2wo4hhesult = array(
			'x1' => 0,
			'y1' => 0,
			'x2' => 0,
			'y2' => 0,
			'height' => 0
		);

		if(($Vlhi02kz1eczstructure['fakeMin'] < 0) && 
			($Vlhi02kz1eczstructure['fakeMax'] > 0)) {
			
			$Vs4gne2wo4hhesult['x1'] = $Vyttwgo5jasl['box']['x1'];
			$Vs4gne2wo4hhesult['y1'] = $Vyttwgo5jasl['box']['y1'];
			$Vs4gne2wo4hhesult['x2'] = $Vyttwgo5jasl['box']['x2'];
			$Vs4gne2wo4hhesult['y2'] = 
				(($Vyttwgo5jasl['box']['height'] / 100) * 
				$Vlhi02kz1eczstructure['positiveSectionPercentage']) + 
				$Vyttwgo5jasl['offset']['top'];
			
			
			$Vs4gne2wo4hhesult['height'] = $Vs4gne2wo4hhesult['y2'] - $Vs4gne2wo4hhesult['y1'];
			
		}
		elseif(($Vlhi02kz1eczstructure['fakeMin'] < 0) && 
				($Vlhi02kz1eczstructure['fakeMax'] <= 0)) {
			
			$Vs4gne2wo4hhesult['height'] = 0;
		}
		else {
			
			$Vs4gne2wo4hhesult['x1'] = $Vyttwgo5jasl['box']['x1'];
			$Vs4gne2wo4hhesult['y1'] = $Vyttwgo5jasl['box']['y1'];
			$Vs4gne2wo4hhesult['x2'] = $Vyttwgo5jasl['box']['x2'];
			$Vs4gne2wo4hhesult['y2'] = $Vyttwgo5jasl['box']['y2'];

			
			$Vs4gne2wo4hhesult['height'] = $Vyttwgo5jasl['box']['height'];
		}
		
		
		return $Vs4gne2wo4hhesult;
	
	}


	
		
	protected function calculateNegativeSection($Vlhi02kz1eczstructure, $Vyttwgo5jasl) {
		
		$Vs4gne2wo4hhesult = array(
			'x1' => 0,
			'y1' => 0,
			'x2' => 0,
			'y2' => 0,
			'height' => 0
		);

		if(($Vlhi02kz1eczstructure['fakeMin'] < 0) && 
			($Vlhi02kz1eczstructure['fakeMax'] > 0)) {
			
			$Vs4gne2wo4hhesult['x1'] = $Vyttwgo5jasl['box']['x1'];
			$Vs4gne2wo4hhesult['y1'] = $Vyttwgo5jasl['section']['positive']['y2'];
			$Vs4gne2wo4hhesult['x2'] = $Vyttwgo5jasl['box']['x2'];
			$Vs4gne2wo4hhesult['y2'] = $Vyttwgo5jasl['box']['y2'];
			
			
			$Vs4gne2wo4hhesult['height'] = $Vs4gne2wo4hhesult['y2'] - $Vs4gne2wo4hhesult['y1'];
		}
		elseif(($Vlhi02kz1eczstructure['fakeMin'] < 0) && 
				($Vlhi02kz1eczstructure['fakeMax'] <= 0)) {
			
			$Vs4gne2wo4hhesult['x1'] = $Vyttwgo5jasl['box']['x1'];
			$Vs4gne2wo4hhesult['y1'] = $Vyttwgo5jasl['box']['y1'];
			$Vs4gne2wo4hhesult['x2'] = $Vyttwgo5jasl['box']['x2'];
			$Vs4gne2wo4hhesult['y2'] = $Vyttwgo5jasl['box']['y2'];

			
			$Vs4gne2wo4hhesult['height'] = $Vyttwgo5jasl['box']['height'];
		}
		else {
			
			$Vs4gne2wo4hhesult['height'] = 0;
		}

		
		
		return $Vs4gne2wo4hhesult;
	
	}


	
		
	protected function calculateZero($Vlhi02kz1eczstructure, $Vyttwgo5jasl) {
		
		$Vs4gne2wo4hhesult = array(
			'line' => array(
				'x1' => 0,
				'y1' => 0,
				'x2' => 0,
				'y2' => 0
			),
			'text' => array(
				'x1' => 0,
				'y1' => 0
			)
		);
		
		
		if(($Vlhi02kz1eczstructure['fakeMin'] < 0) && 
			($Vlhi02kz1eczstructure['fakeMax'] > 0)) {
			
			$Vs4gne2wo4hhesult['line']['x1'] = $Vyttwgo5jasl['box']['x1'];
			$Vs4gne2wo4hhesult['line']['y1'] = $Vyttwgo5jasl['section']['negative']['y1'];
			$Vs4gne2wo4hhesult['line']['x2'] = $Vyttwgo5jasl['box']['x2'];
			$Vs4gne2wo4hhesult['line']['y2'] = $Vyttwgo5jasl['section']['negative']['y1'];
			
		}
		elseif(($Vlhi02kz1eczstructure['fakeMin'] < 0) && 
				($Vlhi02kz1eczstructure['fakeMax'] <= 0)) {
			
			$Vs4gne2wo4hhesult['line']['x1'] = $Vyttwgo5jasl['box']['x1'];
			$Vs4gne2wo4hhesult['line']['y1'] = $Vyttwgo5jasl['box']['y1'];
			$Vs4gne2wo4hhesult['line']['x2'] = $Vyttwgo5jasl['box']['x2'];
			$Vs4gne2wo4hhesult['line']['y2'] = $Vyttwgo5jasl['box']['y1'];			
		}
		else {
			
			$Vs4gne2wo4hhesult['line']['x1'] = $Vyttwgo5jasl['box']['x1'];
			$Vs4gne2wo4hhesult['line']['y1'] = $Vyttwgo5jasl['box']['y2'];
			$Vs4gne2wo4hhesult['line']['x2'] = $Vyttwgo5jasl['box']['x2'];
			$Vs4gne2wo4hhesult['line']['y2'] = $Vyttwgo5jasl['box']['y2'];
		}

		$Vs4gne2wo4hhesult['text']['x1'] = 
			$Vyttwgo5jasl['box']['x2'] + 
			imagefontwidth($this->cfg['value-label-font-size']);
		$Vs4gne2wo4hhesult['text']['y1'] = 
			$Vs4gne2wo4hhesult['line']['y2'] - 
			(imagefontheight($this->cfg['value-label-font-size']) / 2);
		
		
		return $Vs4gne2wo4hhesult;
	}


	
		
	protected function calculateAverage($Vlhi02kz1eczstructure, $Vyttwgo5jasl) {
		
		$Vs4gne2wo4hhesult = array(
			'line' => array(
				'x1' => 0,
				'y1' => 0,
				'x2' => 0,
				'y2' => 0
			),
			'text' => array(
				'x1' => 0,
				'y1' => 0
			)
		);

		
		if($Vlhi02kz1eczstructure['avg'] < 0) {
			
			$Vmbcpkkgiuui = 
				($Vyttwgo5jasl['section']['negative']['height'] / 100);
			$Vi0ea53lf342 =  
				(-$Vlhi02kz1eczstructure['avg'] / 
				$Vlhi02kz1eczstructure['minDifference']) * 
				100;
			$V3trgqmpbx0w =  $Vmbcpkkgiuui * $Vi0ea53lf342;			
			
			
			$Vs4gne2wo4hhesult['line']['x1'] = $Vyttwgo5jasl['box']['x1'];
			$Vs4gne2wo4hhesult['line']['y1'] = $Vyttwgo5jasl['zero']['line']['y1'] + $V3trgqmpbx0w;
			$Vs4gne2wo4hhesult['line']['x2'] = $Vyttwgo5jasl['box']['x2'];
			$Vs4gne2wo4hhesult['line']['y2'] = $Vs4gne2wo4hhesult['line']['y1'];
			
			
			$Vs4gne2wo4hhesult['text']['x1'] = 
				($Vyttwgo5jasl['box']['x1'] - 
				(strlen(round($Vlhi02kz1eczstructure['avg'], 2)) * 
				imagefontwidth($this->cfg['value-label-font-size']))) - 
				2;
			$Vs4gne2wo4hhesult['text']['y1'] = 
				$Vs4gne2wo4hhesult['line']['y1'] - 
				(imagefontheight($this->cfg['value-label-font-size']) / 
				2);
		}
		else {
			
			$Vmbcpkkgiuui = 
				($Vyttwgo5jasl['section']['positive']['height'] / 100);
			$Vi0ea53lf342 = ($Vlhi02kz1eczstructure['plusDifference'] > 0) ?
				($Vlhi02kz1eczstructure['avg'] / 
				$Vlhi02kz1eczstructure['plusDifference']) * 
				100 :
				0;
				
			$V3trgqmpbx0w = $Vmbcpkkgiuui * $Vi0ea53lf342;			
			
			
			$Vs4gne2wo4hhesult['line']['x1'] = $Vyttwgo5jasl['box']['x1'];
			$Vs4gne2wo4hhesult['line']['y1'] = $Vyttwgo5jasl['zero']['line']['y1'] - $V3trgqmpbx0w;
			$Vs4gne2wo4hhesult['line']['x2'] = $Vyttwgo5jasl['box']['x2'];
			$Vs4gne2wo4hhesult['line']['y2'] = $Vs4gne2wo4hhesult['line']['y1'];	
			
			
			$Vs4gne2wo4hhesult['text']['x1'] = 
				($Vyttwgo5jasl['box']['x1'] - 
				(strlen(round($Vlhi02kz1eczstructure['avg'],2)) * 
				imagefontwidth($this->cfg['value-label-font-size']))) - 
				2;
			$Vs4gne2wo4hhesult['text']['y1'] = 
				$Vs4gne2wo4hhesult['line']['y1'] - 
				(imagefontheight($this->cfg['value-label-font-size']) / 
				2);
					
		}
		
		
		return $Vs4gne2wo4hhesult;
	}


	
		
	protected function calculateLabel($Vlhi02kz1eczstructure, $Vyttwgo5jasl) {
		
		$Vs4gne2wo4hhesult = array(
			'x1' => 0,
			'y1' => 0
		);

		$Vs4gne2wo4hhesult['x1'] = $Vyttwgo5jasl['box']['x2'] + 4;
		$Vs4gne2wo4hhesult['y1'] = 
			($Vyttwgo5jasl['box']['y1'] - 
			imagefontheight($this->cfg['label-font-size'])) - 
			2;
		
		
		return $Vs4gne2wo4hhesult;
	}


	
		
	protected function calculateTitle($Vlhi02kz1eczstructure, $Vyttwgo5jasl) {
		
		$Vs4gne2wo4hhesult = array(
			'x1' => 0,
			'y1' => 0
		);

		$Vs4gne2wo4hhesult['x1'] = $Vyttwgo5jasl['box']['x1'];
		$Vs4gne2wo4hhesult['y1'] = 
			($Vyttwgo5jasl['offset']['top']/2) - 
			(imagefontheight($this->cfg['title-font-size']) / 
			2);
		
		
		return $Vs4gne2wo4hhesult;
	}


	
		
	protected function calculateValueLabels($Vlhi02kz1eczstructure, $Vyttwgo5jasl) {
		
		$Vs4gne2wo4hhesult = array(
			'min' => array (
				'x1' => 0,
				'y1' => 0
			),
			'max' => array (
				'x1' => 0,
				'y1' => 0
			)
		);

		
		$Vs4gne2wo4hhesult['max']['x1'] = 8;
			
		$Vs4gne2wo4hhesult['max']['y1'] = 
			$Vyttwgo5jasl['box']['y1'] - 
			(imagefontheight($this->cfg['value-label-font-size']) / 
			2);

		
		$Vs4gne2wo4hhesult['min']['x1'] = 8;
		
		$Vs4gne2wo4hhesult['min']['y1'] = 
			$Vyttwgo5jasl['box']['y2'] - 
			(imagefontheight($this->cfg['value-label-font-size']) / 
			2);


		
		return $Vs4gne2wo4hhesult;
	}


	
		
	protected function calculateColumns($Vlhi02kz1eczstructure, $Vyttwgo5jasl) {
		
		$Vec5hzvzuawo = 0;
		$Vcrauiuseg4x = $Vyttwgo5jasl['box']['x1'];
		$Vdcxfjnekf50 = $Vyttwgo5jasl['box']['y1'];
		$Vuxqgcovp0zh = NULL;
		$Vkw4bj0ghkzz = array();
		
		
		foreach($Vlhi02kz1eczstructure['data'] as $Vzls01jplmeq => $Vn5ykvkgiw10) {
			
			
			$Vskinrs5xocd = ($Vyttwgo5jasl['col']['width'] > 8) ? 3 : 0;
			$Vngoi2f0nybx = ($Vyttwgo5jasl['col']['width'] > 8) ? 3 : 0;
			
			
			$Vs4gne2wo4hhesult = array(
				'value' => array(
						'text' => $Vn5ykvkgiw10,
						'x1' => 0,
						'y1' => 0,
					),
				'key' => array(
						'text' => $Vzls01jplmeq,
						'x1' => 0,
						'y1' => 0,
					),
				'fill' => 0,
				'column' => array(
					'x1' => $Vcrauiuseg4x,
					'y1' => $Vyttwgo5jasl['box']['y1'],
					'x2' => $Vcrauiuseg4x + $Vyttwgo5jasl['col']['width'],
					'y2' => $Vyttwgo5jasl['box']['y1'],
					'x3' => $Vcrauiuseg4x + $Vyttwgo5jasl['col']['width'],
					'y3' => $Vyttwgo5jasl['box']['y2'],
					'x4' => $Vcrauiuseg4x,
					'y4' => $Vyttwgo5jasl['box']['y2'],
				),
				'bar' => array(
					'x1' => $Vcrauiuseg4x,
					'y1' => 0, 
					'x2' => $Vcrauiuseg4x + $Vyttwgo5jasl['col']['width'],
					'y2' => 0, 
					'x3' => $Vcrauiuseg4x + $Vyttwgo5jasl['col']['width'],
					'y3' => 0, 
					'x4' => $Vcrauiuseg4x,
					'y4' => 0, 
				),
				'foregroundbar' => array(
					'x1' => $Vcrauiuseg4x + $Vskinrs5xocd,
					'y1' => 0, 
					'x2' => $Vcrauiuseg4x + $Vskinrs5xocd,
					'y2' => 0, 
					'x3' => ($Vcrauiuseg4x + $Vyttwgo5jasl['col']['width']) - ($Vskinrs5xocd * 2),
					'y3' => 0, 
					'x4' => ($Vcrauiuseg4x + $Vyttwgo5jasl['col']['width']) - ($Vskinrs5xocd * 2),
					'y4' => 0, 
				),
				'shadowbar' => array(
					'x1' => $Vcrauiuseg4x + ($Vskinrs5xocd * 2),
					'y1' => 0,
					'x2' => $Vcrauiuseg4x + ($Vskinrs5xocd * 2),
					'y2' => 0,
					'x3' => ($Vcrauiuseg4x + $Vyttwgo5jasl['col']['width']) - $Vskinrs5xocd,
					'y3' => 0,
					'x4' => ($Vcrauiuseg4x + $Vyttwgo5jasl['col']['width']) - $Vskinrs5xocd,
					'y4' => 0,
				),
				'previous' => array(
					'value' => 0,
					'x1' => 0,
					'y1' => 0,
					'x2' => 0,
					'y2' => 0,
					'x3' => 0,
					'y3' => 0,
					'x4' => 0,
					'y4' => 0,
				),
				'line' => array(
					'x1' => 0,
					'y1' => 0,
					'x2' => 0,
					'y2' => 0,
				),
				'poly' => array(
				),
			);
			
			
			
			if(is_null($Vuxqgcovp0zh)) {
				$Vs4gne2wo4hhesult['previous']['value'] = 0;
				$Vs4gne2wo4hhesult['previous']['x1'] = $Vyttwgo5jasl['box']['x1'];
				$Vs4gne2wo4hhesult['previous']['y1'] = $Vyttwgo5jasl['zero']['line']['y1'];
				$Vs4gne2wo4hhesult['previous']['x2'] = $Vyttwgo5jasl['box']['x1'];
				$Vs4gne2wo4hhesult['previous']['y2'] = $Vyttwgo5jasl['zero']['line']['y1'];
				$Vs4gne2wo4hhesult['previous']['x3'] = $Vyttwgo5jasl['box']['x1'];
				$Vs4gne2wo4hhesult['previous']['y3'] = $Vyttwgo5jasl['zero']['line']['y1'];
				$Vs4gne2wo4hhesult['previous']['x4'] = $Vyttwgo5jasl['box']['x1'];
				$Vs4gne2wo4hhesult['previous']['y4'] = $Vyttwgo5jasl['zero']['line']['y1'];
			}
			else {
				
				$Vs4gne2wo4hhesult['previous']['value'] = $Vuxqgcovp0zh['value']['text'];
				$Vs4gne2wo4hhesult['previous']['x1'] = $Vuxqgcovp0zh['bar']['x1'];
				$Vs4gne2wo4hhesult['previous']['y1'] = $Vuxqgcovp0zh['bar']['y1'];
				$Vs4gne2wo4hhesult['previous']['x2'] = $Vuxqgcovp0zh['bar']['x2'];
				$Vs4gne2wo4hhesult['previous']['y2'] = $Vuxqgcovp0zh['bar']['y2'];
				$Vs4gne2wo4hhesult['previous']['x3'] = $Vuxqgcovp0zh['bar']['x3'];
				$Vs4gne2wo4hhesult['previous']['y3'] = $Vuxqgcovp0zh['bar']['y3'];
				$Vs4gne2wo4hhesult['previous']['x4'] = $Vuxqgcovp0zh['bar']['x4'];
				$Vs4gne2wo4hhesult['previous']['y4'] = $Vuxqgcovp0zh['bar']['y4'];
			}
			
			
			
			
			$Vzls01jplmeqX = ($Vyttwgo5jasl['col']['width'] / 2) - (imagefontheight($this->cfg['key-font-size']) / 2);
			$Vs4gne2wo4hhesult['key']['x1'] = $Vcrauiuseg4x + $Vzls01jplmeqX;
			$Vs4gne2wo4hhesult['key']['y1'] = ($Vyttwgo5jasl['box']['y2'] + (strlen($Vzls01jplmeq) * imagefontwidth($this->cfg['key-font-size']))) + 4;
			
			
			if($Vn5ykvkgiw10 < 0) {
			
				
				$Vhlxgi1maptu = ($Vyttwgo5jasl['section']['negative']['height'] / 100);
				$Vqd0s4kjqee3 =  ($Vn5ykvkgiw10 / $Vlhi02kz1eczstructure['minDifference'])  * 100;
				$Vn5ykvkgiw10Height =  $Vhlxgi1maptu * $Vqd0s4kjqee3;
				
				
				$Vs4gne2wo4hhesult['fill'] = floor(-$Vqd0s4kjqee3);
				
				
				$Vs4gne2wo4hhesult['bar']['y1'] =  $Vyttwgo5jasl['zero']['line']['y1'];
				$Vs4gne2wo4hhesult['bar']['y2'] = $Vs4gne2wo4hhesult['bar']['y1'];
				$Vs4gne2wo4hhesult['bar']['y3'] = $Vyttwgo5jasl['zero']['line']['y1'] - $Vn5ykvkgiw10Height;
				$Vs4gne2wo4hhesult['bar']['y4'] = $Vs4gne2wo4hhesult['bar']['y3'];
				
				
				$Vs4gne2wo4hhesult['foregroundbar']['y1'] =  $Vyttwgo5jasl['zero']['line']['y1'];
				$Vs4gne2wo4hhesult['foregroundbar']['y2'] = $Vs4gne2wo4hhesult['foregroundbar']['y1'];
				$Vs4gne2wo4hhesult['foregroundbar']['y3'] = $Vyttwgo5jasl['zero']['line']['y1'] - $Vn5ykvkgiw10Height;
				$Vs4gne2wo4hhesult['foregroundbar']['y4'] = $Vs4gne2wo4hhesult['foregroundbar']['y3'];

				
				$Vs4gne2wo4hhesult['shadowbar']['y1'] =  $Vyttwgo5jasl['zero']['line']['y1'];
				$Vs4gne2wo4hhesult['shadowbar']['y2'] = $Vs4gne2wo4hhesult['shadowbar']['y1'];
				$Vs4gne2wo4hhesult['shadowbar']['y3'] = ($Vyttwgo5jasl['zero']['line']['y1'] - $Vn5ykvkgiw10Height) - $Vngoi2f0nybx;
				$Vs4gne2wo4hhesult['shadowbar']['y4'] = $Vs4gne2wo4hhesult['shadowbar']['y3'];
		
		
			
				
				$Vn5ykvkgiw10Length = strlen($Vn5ykvkgiw10) * imagefontwidth($this->cfg['value-font-size']);
				$Vn5ykvkgiw10Height = imagefontheight($this->cfg['value-font-size']);
				
				$Vs4gne2wo4hhesult['value']['x1'] = $Vcrauiuseg4x + (($Vyttwgo5jasl['col']['width'] / 2) - ($Vn5ykvkgiw10Height / 2));
				
				
				if($Vn5ykvkgiw10Length > $Vyttwgo5jasl['section']['negative']['height']) {
					$Vs4gne2wo4hhesult['value']['y1'] = ($Vyttwgo5jasl['zero']['line']['y1']) - 4;
				}
				else {
					
					if($Vs4gne2wo4hhesult['fill'] < 50) {
						$Vs4gne2wo4hhesult['value']['y1'] = ($Vs4gne2wo4hhesult['bar']['y3'] + $Vn5ykvkgiw10Length) + 2;
					}
					else {
						$Vs4gne2wo4hhesult['value']['y1'] = ($Vyttwgo5jasl['zero']['line']['y1'] + $Vn5ykvkgiw10Length) + 4;
					}
				}
				
				
				if($Vs4gne2wo4hhesult['previous']['value'] < 0) {
					
					$Vs4gne2wo4hhesult['poly'][0] = $Vs4gne2wo4hhesult['bar']['x1'];
					$Vs4gne2wo4hhesult['poly'][1] = $Vs4gne2wo4hhesult['bar']['y1'];
					$Vs4gne2wo4hhesult['poly'][2] = $Vs4gne2wo4hhesult['bar']['x2'];
					$Vs4gne2wo4hhesult['poly'][3] = $Vs4gne2wo4hhesult['bar']['y2'];
					$Vs4gne2wo4hhesult['poly'][4] = $Vs4gne2wo4hhesult['bar']['x3'];
					$Vs4gne2wo4hhesult['poly'][5] = $Vs4gne2wo4hhesult['bar']['y3'];
					$Vs4gne2wo4hhesult['poly'][6] = $Vs4gne2wo4hhesult['bar']['x4'];
					$Vs4gne2wo4hhesult['poly'][7] = $Vs4gne2wo4hhesult['previous']['y3'];
					$Vs4gne2wo4hhesult['poly'][8] = $Vs4gne2wo4hhesult['bar']['x1'];
					$Vs4gne2wo4hhesult['poly'][9] = $Vs4gne2wo4hhesult['previous']['y1'];

					
					$Vs4gne2wo4hhesult['line']['x1'] = $Vs4gne2wo4hhesult['previous']['x3'];
					$Vs4gne2wo4hhesult['line']['y1'] = $Vs4gne2wo4hhesult['previous']['y3'];
					$Vs4gne2wo4hhesult['line']['x2'] = $Vs4gne2wo4hhesult['bar']['x3'];
					$Vs4gne2wo4hhesult['line']['y2'] = $Vs4gne2wo4hhesult['bar']['y3'];
					
					
				}
				else {
					
					$Vs4gne2wo4hhesult['poly'][0] = $Vs4gne2wo4hhesult['bar']['x1'];
					$Vs4gne2wo4hhesult['poly'][1] = $Vs4gne2wo4hhesult['previous']['y2'];
					$Vs4gne2wo4hhesult['poly'][2] = $Vs4gne2wo4hhesult['bar']['x3'];
					$Vs4gne2wo4hhesult['poly'][3] = $Vs4gne2wo4hhesult['bar']['y3'];
					$Vs4gne2wo4hhesult['poly'][4] = $Vs4gne2wo4hhesult['bar']['x2'];
					$Vs4gne2wo4hhesult['poly'][5] = $Vs4gne2wo4hhesult['bar']['y2'];
					$Vs4gne2wo4hhesult['poly'][6] = $Vs4gne2wo4hhesult['bar']['x1'];
					$Vs4gne2wo4hhesult['poly'][7] = $Vs4gne2wo4hhesult['bar']['y2'];
					$Vs4gne2wo4hhesult['poly'][8] = $Vs4gne2wo4hhesult['bar']['x1'];
					$Vs4gne2wo4hhesult['poly'][9] = $Vs4gne2wo4hhesult['previous']['y2'];	
					
					
					$Vs4gne2wo4hhesult['line']['x1'] = $Vs4gne2wo4hhesult['previous']['x2'];
					$Vs4gne2wo4hhesult['line']['y1'] = $Vs4gne2wo4hhesult['previous']['y2'];
					$Vs4gne2wo4hhesult['line']['x2'] = $Vs4gne2wo4hhesult['bar']['x3'];
					$Vs4gne2wo4hhesult['line']['y2'] = $Vs4gne2wo4hhesult['bar']['y3'];		

					
					if ($Vec5hzvzuawo == 0) {
						$Vs4gne2wo4hhesult['line']['y1'] = $Vs4gne2wo4hhesult['line']['y2'];
						$Vs4gne2wo4hhesult['poly'][1] = $Vs4gne2wo4hhesult['poly'][3];
					}								
											
				}
				
			
			}
			else {
				
				
				$Vhlxgi1maptu = ($Vyttwgo5jasl['section']['positive']['height'] / 100);
				$Vqd0s4kjqee3 = 
					($Vlhi02kz1eczstructure['plusDifference'] > 0) ?
						($Vn5ykvkgiw10 / $Vlhi02kz1eczstructure['plusDifference'])  * 100 :
						0;
				$Vn5ykvkgiw10Height =  $Vhlxgi1maptu * $Vqd0s4kjqee3;

				
				$Vs4gne2wo4hhesult['fill'] = $Vqd0s4kjqee3;

				
				$Vs4gne2wo4hhesult['bar']['y1'] =  $Vyttwgo5jasl['zero']['line']['y1'] - $Vn5ykvkgiw10Height;
				$Vs4gne2wo4hhesult['bar']['y2'] = $Vs4gne2wo4hhesult['bar']['y1'];
				$Vs4gne2wo4hhesult['bar']['y3'] = $Vyttwgo5jasl['zero']['line']['y1'];
				$Vs4gne2wo4hhesult['bar']['y4'] = $Vs4gne2wo4hhesult['bar']['y3'];
				
				
				$Vs4gne2wo4hhesult['foregroundbar']['y1'] =  $Vyttwgo5jasl['zero']['line']['y1'] - $Vn5ykvkgiw10Height;
				$Vs4gne2wo4hhesult['foregroundbar']['y2'] = $Vs4gne2wo4hhesult['foregroundbar']['y1'];
				$Vs4gne2wo4hhesult['foregroundbar']['y3'] = $Vyttwgo5jasl['zero']['line']['y1'];
				$Vs4gne2wo4hhesult['foregroundbar']['y4'] = $Vs4gne2wo4hhesult['foregroundbar']['y3'];
				
				
				
				$Vs4gne2wo4hhesult['shadowbar']['y1'] = ($Vn5ykvkgiw10 === 0) ? $Vyttwgo5jasl['zero']['line']['y1'] : ($Vyttwgo5jasl['zero']['line']['y1'] - $Vn5ykvkgiw10Height) - $Vngoi2f0nybx;

				$Vs4gne2wo4hhesult['shadowbar']['y2'] = $Vs4gne2wo4hhesult['foregroundbar']['y1'];
				$Vs4gne2wo4hhesult['shadowbar']['y3'] = $Vyttwgo5jasl['zero']['line']['y1'];
				$Vs4gne2wo4hhesult['shadowbar']['y4'] = $Vs4gne2wo4hhesult['foregroundbar']['y3'];

				
				
				$Vn5ykvkgiw10Length = strlen($Vn5ykvkgiw10) * imagefontwidth($this->cfg['value-font-size']);
				$Vn5ykvkgiw10FontHeight = imagefontheight($this->cfg['value-font-size']);
				
				$Vs4gne2wo4hhesult['value']['x1'] = $Vcrauiuseg4x + (($Vyttwgo5jasl['col']['width'] / 2) - ($Vn5ykvkgiw10FontHeight / 2));

				
				if( ($Vn5ykvkgiw10Length +($Vngoi2f0nybx + 6)) > $Vyttwgo5jasl['section']['positive']['height']) {
					$Vs4gne2wo4hhesult['value']['y1'] = ($Vyttwgo5jasl['zero']['line']['y1'] + $Vn5ykvkgiw10Length) + 6;
				}
				else {
					if($Vs4gne2wo4hhesult['fill'] < 50) {
						$Vs4gne2wo4hhesult['value']['y1'] = ($Vyttwgo5jasl['zero']['line']['y1'] - $Vn5ykvkgiw10Height) - ($Vngoi2f0nybx + 6);
					}
					else {
						$Vs4gne2wo4hhesult['value']['y1'] = ($Vyttwgo5jasl['zero']['line']['y1']) - 6;
						
					}
				}
								
				
				if($Vs4gne2wo4hhesult['previous']['value'] < 0) {
					
					$Vs4gne2wo4hhesult['poly'][0] = $Vs4gne2wo4hhesult['bar']['x1'];
					$Vs4gne2wo4hhesult['poly'][1] = $Vs4gne2wo4hhesult['previous']['y3'];
					$Vs4gne2wo4hhesult['poly'][2] = $Vs4gne2wo4hhesult['bar']['x2'];
					$Vs4gne2wo4hhesult['poly'][3] = $Vs4gne2wo4hhesult['bar']['y2'];
					$Vs4gne2wo4hhesult['poly'][4] = $Vs4gne2wo4hhesult['bar']['x3'];
					$Vs4gne2wo4hhesult['poly'][5] = $Vs4gne2wo4hhesult['bar']['y3'];
					$Vs4gne2wo4hhesult['poly'][6] = $Vs4gne2wo4hhesult['bar']['x4'];
					$Vs4gne2wo4hhesult['poly'][7] = $Vs4gne2wo4hhesult['bar']['y4'];
					$Vs4gne2wo4hhesult['poly'][8] = $Vs4gne2wo4hhesult['bar']['x1'];
					$Vs4gne2wo4hhesult['poly'][9] = $Vs4gne2wo4hhesult['previous']['y2'];

					
					$Vs4gne2wo4hhesult['line']['x1'] = $Vs4gne2wo4hhesult['previous']['x3'];
					$Vs4gne2wo4hhesult['line']['y1'] = $Vs4gne2wo4hhesult['previous']['y3'];
					$Vs4gne2wo4hhesult['line']['x2'] = $Vs4gne2wo4hhesult['bar']['x2'];
					$Vs4gne2wo4hhesult['line']['y2'] = $Vs4gne2wo4hhesult['bar']['y2'];
				}
				else {
					
					$Vs4gne2wo4hhesult['poly'][0] = $Vs4gne2wo4hhesult['bar']['x1'];
					$Vs4gne2wo4hhesult['poly'][1] = $Vs4gne2wo4hhesult['previous']['y2'];
					$Vs4gne2wo4hhesult['poly'][2] = $Vs4gne2wo4hhesult['bar']['x2'];
					$Vs4gne2wo4hhesult['poly'][3] = $Vs4gne2wo4hhesult['bar']['y2'];
					$Vs4gne2wo4hhesult['poly'][4] = $Vs4gne2wo4hhesult['bar']['x3'];
					$Vs4gne2wo4hhesult['poly'][5] = $Vs4gne2wo4hhesult['bar']['y3'];
					$Vs4gne2wo4hhesult['poly'][6] = $Vs4gne2wo4hhesult['bar']['x4'];
					$Vs4gne2wo4hhesult['poly'][7] = $Vs4gne2wo4hhesult['bar']['y4'];
					$Vs4gne2wo4hhesult['poly'][8] = $Vs4gne2wo4hhesult['bar']['x1'];
					$Vs4gne2wo4hhesult['poly'][9] = $Vs4gne2wo4hhesult['previous']['y2'];	

					
					$Vs4gne2wo4hhesult['line']['x1'] = $Vs4gne2wo4hhesult['previous']['x2'];
					$Vs4gne2wo4hhesult['line']['y1'] = $Vs4gne2wo4hhesult['previous']['y2'];
					$Vs4gne2wo4hhesult['line']['x2'] = $Vs4gne2wo4hhesult['bar']['x2'];
					$Vs4gne2wo4hhesult['line']['y2'] = $Vs4gne2wo4hhesult['bar']['y2'];

					
					if ($Vec5hzvzuawo == 0) {
						$Vs4gne2wo4hhesult['line']['y1'] = $Vs4gne2wo4hhesult['line']['y2'];
						$Vs4gne2wo4hhesult['poly'][1] = $Vs4gne2wo4hhesult['poly'][3];
					}								
				}
				
			}

			
			$Vkw4bj0ghkzz[$Vzls01jplmeq] = $Vs4gne2wo4hhesult;
			
			
			$Vuxqgcovp0zh = $Vs4gne2wo4hhesult;
			
			
			$Vcrauiuseg4x = $Vcrauiuseg4x + $Vyttwgo5jasl['col']['width'];
			
			
			$Vec5hzvzuawo++;
		}


		

		
		return $Vkw4bj0ghkzz;
	}



		
	protected function drawImage() {
		
		$this->ip = $this->createImage($this->cfg['width'], $this->cfg['height']);
		
		
		$V0lf0m1w33n3 = $this->allocateColor($this->cfg['background-color']);
		
		
		imagefill($this->ip, 0, 0, $V0lf0m1w33n3);
		
		
		if(!empty($this->cfg['background-image'])) {
			
			if($V1yenpdfyl1sgkImage = $this->createImageFromFile($this->cfg['background-image'])) {
				imagecopy($this->ip, $V1yenpdfyl1sgkImage, 0, 0, 0, 0, $this->cfg['width'], $this->cfg['height']);
			}
		}		
	}
	


		
	protected function drawTitle($Vrh1qulr0iaaPoints) {
		
		if($this->cfg['title-visible']) {
			
			$Vwzz1mjrjfb0 = $this->allocateColor($this->cfg['title-color']);
			
			
			imagestring($this->ip, $this->cfg['title-font-size'], $Vrh1qulr0iaaPoints['title']['x1'], $Vrh1qulr0iaaPoints['title']['y1'], $this->cfg['title'], $Vwzz1mjrjfb0);
		}
	}



		
	protected function drawValueLabels($Vrh1qulr0iaaPoints, $Vlhi02kz1eczStructure) {
		
		if($this->cfg['value-label-visible']) {
			
			$Vn5ykvkgiw10LabelColor = $this->allocateColor($this->cfg['value-label-color']);
			
			if( $this->cfg['label-right-align'] ){
				$Vvsd2pwnc3o4 = str_pad( $Vlhi02kz1eczStructure['fakeMin'], $Vlhi02kz1eczStructure['maxValueLength'], " ", STR_PAD_LEFT);
				$Vgyu1dufpfve = str_pad( $Vlhi02kz1eczStructure['fakeMax'], $Vlhi02kz1eczStructure['maxValueLength'], " ", STR_PAD_LEFT);
			}else{
				$Vvsd2pwnc3o4 = $Vlhi02kz1eczStructure['fakeMin'];
				$Vgyu1dufpfve = $Vlhi02kz1eczStructure['fakeMax'];
			}
			
			
			if($Vlhi02kz1eczStructure['fakeMin'] < 0 && $Vlhi02kz1eczStructure['fakeMax'] <= 0) {
				$Vgyu1dufpfve = "0";
			}
			
			
			
			imagestring($this->ip, $this->cfg['value-label-font-size'], $Vrh1qulr0iaaPoints['value']['min']['x1'], $Vrh1qulr0iaaPoints['value']['min']['y1'], $Vvsd2pwnc3o4, $Vn5ykvkgiw10LabelColor);
			imagestring($this->ip, $this->cfg['value-label-font-size'], $Vrh1qulr0iaaPoints['value']['max']['x1'], $Vrh1qulr0iaaPoints['value']['max']['y1'], $Vgyu1dufpfve, $Vn5ykvkgiw10LabelColor);
			
			
		}			
	
	}



		
	protected function drawBoxBackground($Vrh1qulr0iaaPoints) {
		
		if($this->cfg['box-background-visible']) {
			
			$V1yenpdfyl1soxBackgroundColor = $this->allocateColor($this->cfg['box-background-color'], $this->cfg['box-background-alpha']);
			
			
			imagefilledrectangle($this->ip, $Vrh1qulr0iaaPoints['box']['x1'], $Vrh1qulr0iaaPoints['box']['y1'], $Vrh1qulr0iaaPoints['box']['x2'], $Vrh1qulr0iaaPoints['box']['y2'], $V1yenpdfyl1soxBackgroundColor);
		}
	}



		
	protected function drawHorizontaldividers($Vrh1qulr0iaaPoints) {
		
		if($this->cfg['horizontal-divider-visible']) {
			
			$Vz3fdo42aksi = ($Vrh1qulr0iaaPoints['box']['height'] / 4);
			
			$Vkvzweuxdygz = $this->allocateColor($this->cfg['horizontal-divider-color'], $this->cfg['horizontal-divider-alpha']);
			$Vqptk3alkdyh = $this->allocateColor($this->hex2Rgb('FFFFFF'), 127);
			
			$V53wdqrtrfy2 = array($Vkvzweuxdygz, $Vkvzweuxdygz, $Vqptk3alkdyh, $Vqptk3alkdyh);
			
			imagesetstyle($this->ip, $V53wdqrtrfy2);			
			
			for($Vvmcb2huerp4 = 1; $Vvmcb2huerp4 <= 3; $Vvmcb2huerp4++) {
				
				$Vnplkggjnzla = $Vrh1qulr0iaaPoints['box']['y1'] + ($Vvmcb2huerp4 * $Vz3fdo42aksi);
				
				imageline($this->ip,  $Vrh1qulr0iaaPoints['box']['x1'], $Vnplkggjnzla, $Vrh1qulr0iaaPoints['box']['x2'], $Vnplkggjnzla, IMG_COLOR_STYLED);
			}
		}
	}



		
	protected function drawLabel($Vrh1qulr0iaaPoints) {
		
		if($this->cfg['label-visible']) {
			
			$Vtpwjzxdhgqb = $this->allocateColor($this->cfg['label-color']);
			
			
			imagestring($this->ip, $this->cfg['label-font-size'], $Vrh1qulr0iaaPoints['label']['x1'], $Vrh1qulr0iaaPoints['label']['y1'], $this->cfg['label'], $Vtpwjzxdhgqb);
		}
	}



		
	protected function drawBoxBorder($Vrh1qulr0iaaPoints) {
		
		if($this->cfg['box-border-visible']) {
			
			$V1yenpdfyl1soxBorderColor = $this->allocateColor($this->cfg['box-border-color'], $this->cfg['box-border-alpha']);
			
			
			imagerectangle($this->ip, $Vrh1qulr0iaaPoints['box']['x1'], $Vrh1qulr0iaaPoints['box']['y1'], $Vrh1qulr0iaaPoints['box']['x2'], $Vrh1qulr0iaaPoints['box']['y2'], $V1yenpdfyl1soxBorderColor);
		}
	}



		
	protected function drawAverage($Vrh1qulr0iaaPoints, $Vlhi02kz1eczStructure) {
		
		if($this->cfg['average-line-visible']) {
			
			$Vc42efj0el1w = 
				$this->allocateColor($this->cfg['average-line-color'], 
									 $this->cfg['average-line-alpha']);
			
			
			imageline($this->ip, 
				$Vrh1qulr0iaaPoints['average']['line']['x1'] - 2, 
				$Vrh1qulr0iaaPoints['average']['line']['y1'], 
				$Vrh1qulr0iaaPoints['average']['line']['x2'] + 2, 
				$Vrh1qulr0iaaPoints['average']['line']['y2'], 
				$Vc42efj0el1w);
			
			
			imagestring($this->ip, 2, 
				$Vrh1qulr0iaaPoints['average']['text']['x1'], 
				$Vrh1qulr0iaaPoints['average']['text']['y1'], 
				round($Vlhi02kz1eczStructure['avg'], 2), 
				$Vc42efj0el1w);
		}
	}



		
	protected function drawZero($Vrh1qulr0iaaPoints) {
		
		if($this->cfg['zero-line-visible']) {
			
			
			
				
				
				$Vkvzweuxdygz = 
					$this->allocateColor($this->cfg['zero-line-color'], 
										$this->cfg['zero-line-alpha']);
				
				
				imageline($this->ip, 
					$Vrh1qulr0iaaPoints['zero']['line']['x1'] - 2, 
					$Vrh1qulr0iaaPoints['zero']['line']['y1'], 
					$Vrh1qulr0iaaPoints['zero']['line']['x2'] + 2, 
					$Vrh1qulr0iaaPoints['zero']['line']['y2'], 
					$Vkvzweuxdygz);
				
				
				imagestring($this->ip, 
					$this->cfg['value-label-font-size'], 
					$Vrh1qulr0iaaPoints['zero']['text']['x1'], 
					$Vrh1qulr0iaaPoints['zero']['text']['y1'], 
					0, 
					$Vkvzweuxdygz);
			
		}
	}



		
	public function drawColumns($Vrh1qulr0iaaPoints, $Vlhi02kz1eczStructure, $Vgkictlptq2d = false) {
		
		$Vpmcx1hxfm45 = 1;
		
		
		$Vzls01jplmeqColor = $this->allocateColor($this->cfg['key-color']);
		$Vn5ykvkgiw10Color = $this->allocateColor($this->cfg['value-color']);
		$Vwx2w13t3suy = $this->allocateColor($this->cfg['column-color'], $this->cfg['column-alpha']); 
		$Vmfat1fjvd2l = $this->allocateColor($this->cfg['column-shadow-color'], $this->cfg['column-shadow-alpha']); 
		
		
		foreach($Vrh1qulr0iaaPoints['columns'] as $Vcs0xakgmxzj) {

			
			
			if($this->cfg['column-color-random']) {
				$Vjqzvbpbyed5 = $this->generateRandomColor();
				$Vwx2w13t3suy = $this->allocateColor($Vjqzvbpbyed5['forecolor'], $this->cfg['column-alpha']); 
				$Vmfat1fjvd2l = $this->allocateColor($Vjqzvbpbyed5['backcolor'], $this->cfg['column-shadow-alpha']);
			}
			
			if($Vgkictlptq2d) {
				$Vwx2w13t3suy = $this->allocateColor($this->cfg['column-compare-color'], 0); 
				$Vmfat1fjvd2l = $this->allocateColor($this->cfg['column-compare-shadow-color'], 0); 
			}
			
			
			$this->drawColumn($Vcs0xakgmxzj, $Vwx2w13t3suy, $Vmfat1fjvd2l);
			
			
			if($this->cfg['value-visible']) {
				if($Vrh1qulr0iaaPoints['col']['show']) {
					if(!$Vgkictlptq2d) {
						imagestringup($this->ip, $this->cfg['value-font-size'], $Vcs0xakgmxzj['value']['x1'], $Vcs0xakgmxzj['value']['y1'], $Vcs0xakgmxzj['value']['text'], $Vn5ykvkgiw10Color);
					}
				}
			}
						
			
			if($this->cfg['column-divider-visible']) {
				
				if($Vpmcx1hxfm45!=1) {
					if(!$Vgkictlptq2d) {
						
						$Vhru2ru3qinx = $this->allocateColor($this->cfg['column-divider-color'], $this->cfg['column-divider-alpha']);
						$Vzwskreflexy = $this->allocateColor($this->hex2Rgb('FFFFFF'), 127);
						
						$Vfry3v440svw = array($Vhru2ru3qinx, $Vhru2ru3qinx, $Vzwskreflexy, $Vzwskreflexy);
						
						imagesetstyle($this->ip, $Vfry3v440svw);
						
						imageline($this->ip,  $Vcs0xakgmxzj['column']['x1'], $Vcs0xakgmxzj['column']['y1'], $Vcs0xakgmxzj['column']['x1'], $Vcs0xakgmxzj['column']['y3'], IMG_COLOR_STYLED);
					}
				}
			}
					
				
			
			if($this->cfg['key-visible']) {
				if(!$Vgkictlptq2d) {
					$V1euitijqrod = true;
					if(!$Vrh1qulr0iaaPoints['col']['show']) {
						$V1euitijqrod = (($Vpmcx1hxfm45==1) || ($Vpmcx1hxfm45==$Vlhi02kz1eczStructure['cols']));
					}
					if($V1euitijqrod) {
						imagestringup($this->ip, $this->cfg['key-font-size'], $Vcs0xakgmxzj['key']['x1'], $Vcs0xakgmxzj['key']['y1'], $Vcs0xakgmxzj['key']['text'], $Vzls01jplmeqColor);
					}
				}
			}
											
			
			$Vpmcx1hxfm45++;			
			
		} 
		
	}



		
	protected function drawColumn($Vcs0xakgmxzj, 
								  $Vwx2w13t3suy, 
								  $Vmfat1fjvd2l) {
		throw new Exception('drawColumn is not implemented');
	}



		
	public function parse($Vlhi02kz1ecz, $Vf5zqmgi2wdw = array()){
		try {
			
			$this->parseConfig($Vf5zqmgi2wdw);

			
			$Vlhi02kz1eczStructure = $this->parseDataStructure($Vlhi02kz1ecz);
			
			
			$Vrh1qulr0iaaPoints = $this->calculateGraph($Vlhi02kz1eczStructure);

			
			
			

			
			$this->drawImage();
			$this->drawTitle($Vrh1qulr0iaaPoints);
			$this->drawValueLabels($Vrh1qulr0iaaPoints, $Vlhi02kz1eczStructure);
			$this->drawBoxBackground($Vrh1qulr0iaaPoints);
			$this->drawColumns($Vrh1qulr0iaaPoints, $Vlhi02kz1eczStructure);
			$this->drawHorizontaldividers($Vrh1qulr0iaaPoints);
			$this->drawLabel($Vrh1qulr0iaaPoints);
			$this->drawBoxBorder($Vrh1qulr0iaaPoints);
			$this->drawAverage($Vrh1qulr0iaaPoints, $Vlhi02kz1eczStructure);
			$this->drawZero($Vrh1qulr0iaaPoints);
		}
		catch(Exception $Vzpuzrl4o1i3) {
			
			$this->parseError($Vzpuzrl4o1i3);
		}
		
		
		$this->parseImage();
	}



		
	public function parseCompare($Vlhi02kz1ecz1, $Vlhi02kz1ecz2, $Vf5zqmgi2wdw = array()){
		try {
			
			$this->parseConfig($Vf5zqmgi2wdw);

			
			$Vlhi02kz1eczStructure1 = $this->parseDataStructure($Vlhi02kz1ecz1);
			$Vlhi02kz1eczStructure2 = $this->parseDataStructure($Vlhi02kz1ecz2);
			$Vgkictlptq2d = $this->compareDataStructures($Vlhi02kz1eczStructure1, $Vlhi02kz1eczStructure2);
			
			
			if(count($Vgkictlptq2d['structures'])<0) {
				throw new Exception('Not enough datastructures found');
			}
			
			
			$V4zbr4i0hzcr = $Vgkictlptq2d['structures'][0];
			$Vrh1qulr0iaaPoints = $this->calculateGraph($V4zbr4i0hzcr);
			
			
			$this->cfg['value-visible'] = false;
			$this->cfg['column-alpha'] = 30;
			$this->cfg['column-shadow-alpha'] = 127;
			
			
			$this->drawImage();
			$this->drawTitle($Vrh1qulr0iaaPoints);
			$this->drawValueLabels($Vrh1qulr0iaaPoints, $V4zbr4i0hzcr);
			$this->drawBoxBackground($Vrh1qulr0iaaPoints);
				foreach($Vgkictlptq2d['structures'] as $Vec5hzvzuawo =>  $Vlhi02kz1eczStructure) {
					$Vrh1qulr0iaaPoints2 = $this->calculateGraph($Vlhi02kz1eczStructure);
					$this->drawColumns($Vrh1qulr0iaaPoints2, $Vlhi02kz1eczStructure, ($Vec5hzvzuawo!=1));
				}
			$this->drawHorizontaldividers($Vrh1qulr0iaaPoints);
			$this->drawLabel($Vrh1qulr0iaaPoints);
			$this->drawBoxBorder($Vrh1qulr0iaaPoints);
			$this->drawAverage($Vrh1qulr0iaaPoints, $V4zbr4i0hzcr);
			$this->drawZero($Vrh1qulr0iaaPoints);
			
			
			
		}
		catch(Exception $Vzpuzrl4o1i3) {
			
			$this->parseError($Vzpuzrl4o1i3);
		}
		
		
		$this->parseImage();
	}



		
	public function parseExample(){
		
		$Vf5zqmgi2wdw['title'] = 'Example graph';
		$Vf5zqmgi2wdw['label'] = 'orders';
		
		
		$Vlhi02kz1ecz = array(
			'Jan' => 12,
			'Feb' => 25,
			'Mar' => 0,
			'Apr' => -7,
			'May' => 80,
			'Jun' => 67,
			'Jul' => 45,
			'Aug' => 66,
			'Sep' => -23,
			'Oct' => 23,
			'Nov' => 78,
			'Dec' => 23
		);
		
		
		$this->parse($Vlhi02kz1ecz, $Vf5zqmgi2wdw);

	}



} 







abstract class horizontalGraphBase extends graphBase {



		
	protected function calculateGraph($Vlhi02kz1eczStructure) {
		
		$Vyttwgo5jasl = array();
		
		
		$Vyttwgo5jasl['offset'] = $this->calculateOffset($Vlhi02kz1eczStructure);
		$Vyttwgo5jasl['box'] = $this->calculateGraphBox($Vlhi02kz1eczStructure, $Vyttwgo5jasl);
		$Vyttwgo5jasl['col'] = $this->calculateColumnHeight($Vlhi02kz1eczStructure, $Vyttwgo5jasl);
		$Vyttwgo5jasl['section']['positive'] = $this->calculatePositiveSection($Vlhi02kz1eczStructure, $Vyttwgo5jasl);
		$Vyttwgo5jasl['section']['negative'] = $this->calculateNegativeSection($Vlhi02kz1eczStructure, $Vyttwgo5jasl);
		$Vyttwgo5jasl['zero'] = $this->calculateZero($Vlhi02kz1eczStructure, $Vyttwgo5jasl);
		$Vyttwgo5jasl['average'] = $this->calculateAverage($Vlhi02kz1eczStructure, $Vyttwgo5jasl);
		$Vyttwgo5jasl['title'] = $this->calculateTitle($Vlhi02kz1eczStructure, $Vyttwgo5jasl);		
		$Vyttwgo5jasl['label'] = $this->calculateLabel($Vlhi02kz1eczStructure, $Vyttwgo5jasl);
		$Vyttwgo5jasl['value'] = $this->calculateValueLabels($Vlhi02kz1eczStructure, $Vyttwgo5jasl);
		$Vyttwgo5jasl['columns'] = $this->calculateColumns($Vlhi02kz1eczStructure, $Vyttwgo5jasl);
		
		
		return $Vyttwgo5jasl;
	}



		
	protected function calculateOffset($Vlhi02kz1eczStructure) {
		
		$Vs4gne2wo4hhesult = array(
			'top' => 20,
			'left' => 20,
			'right' => 20,
			'bottom' => 20,
		);
		
		
		if($this->cfg['value-label-visible']) {
			$Vs4gne2wo4hhesult['bottom'] = 
				($Vlhi02kz1eczStructure['maxValueLength'] * 
				imagefontwidth($this->cfg['value-label-font-size'])) + 
				20;
		}

		
		if($this->cfg['title-visible']) {
			$Vs4gne2wo4hhesult['top'] = 
				($this->cfg['title'] !== '') ? 
				imagefontheight($this->cfg['title-font-size']) + 
				20 : 
				$Vs4gne2wo4hhesult['top'];
		}
		
		
		if($this->cfg['label-visible']) {
			$Vs4gne2wo4hhesult['right'] = 
				($this->cfg['label'] !== '') ? 
				(strlen($this->cfg['label']) * 
				imagefontwidth($this->cfg['label-font-size'])) + 
				20 : 
				$Vs4gne2wo4hhesult['right'];
		}
		
		
		if($this->cfg['key-visible']) {
			$Vs4gne2wo4hhesult['left'] = 
				($Vlhi02kz1eczStructure['maxKeyLength'] * 
				imagefontwidth($this->cfg['key-font-size'])) +
				20;
		}		
		
		
		$Vs4gne2wo4hhesult['top'] = ($Vs4gne2wo4hhesult['top'] < 20) ? 20 : $Vs4gne2wo4hhesult['top'];
		$Vs4gne2wo4hhesult['left'] = ($Vs4gne2wo4hhesult['left'] < 20) ? 20 : $Vs4gne2wo4hhesult['left'];
		$Vs4gne2wo4hhesult['right'] = ($Vs4gne2wo4hhesult['right'] < 20) ? 20 : $Vs4gne2wo4hhesult['right'];
		$Vs4gne2wo4hhesult['bottom'] = ($Vs4gne2wo4hhesult['bottom'] < 20) ? 20 : $Vs4gne2wo4hhesult['bottom'];
		
		
		return $Vs4gne2wo4hhesult;
	}



		
	protected function calculateGraphBox($Vlhi02kz1eczstructure, $Vyttwgo5jasl) {
		
		$Vs4gne2wo4hhesult = array(
			'x1' => 0,
			'y1' => 0,
			'x2' => 0,
			'y2' => 0,
			'width' => 0,
			'height' => 0
		);

		
		$Vs4gne2wo4hhesult['x1'] = $Vyttwgo5jasl['offset']['left'];
		$Vs4gne2wo4hhesult['y1'] = $Vyttwgo5jasl['offset']['top'];
		
		$Vs4gne2wo4hhesult['x2'] = 
			$this->cfg['width'] - 
			$Vyttwgo5jasl['offset']['right'];
		$Vs4gne2wo4hhesult['y2'] = 
			$this->cfg['height'] - 
			$Vyttwgo5jasl['offset']['bottom'];
		
		
		$Vs4gne2wo4hhesult['width'] = 
			(($this->cfg['width'] - 
			$Vyttwgo5jasl['offset']['left']) - 
			$Vyttwgo5jasl['offset']['right']);
			
		
		$Vs4gne2wo4hhesult['height'] = 
			(($this->cfg['height'] - 
			$Vyttwgo5jasl['offset']['top']) - 
			$Vyttwgo5jasl['offset']['bottom']);
		
		
		return $Vs4gne2wo4hhesult;
	}



		
	protected function calculateColumnHeight($Vlhi02kz1eczstructure, $Vyttwgo5jasl) {
		
		$Vs4gne2wo4hhesult = array(
			'height' => 0,
			'show' => true
		);

		
		$Vs4gne2wo4hhesult['height'] = 
			$Vyttwgo5jasl['box']['height'] / 
			$Vlhi02kz1eczstructure['cols'];
		
		
		if($Vs4gne2wo4hhesult['height'] < 
			imagefontheight($this->cfg['key-font-size'])) {
			$Vs4gne2wo4hhesult['show'] = false;
		}
		
		
		return $Vs4gne2wo4hhesult;
	
	}


	
		
	protected function calculatePositiveSection($Vlhi02kz1eczstructure, $Vyttwgo5jasl) {
		
		$Vs4gne2wo4hhesult = array(
			'x1' => 0,
			'y1' => 0,
			'x2' => 0,
			'y2' => 0,
			'width' => 0
		);

		if(($Vlhi02kz1eczstructure['fakeMin'] < 0) && 
			($Vlhi02kz1eczstructure['fakeMax'] > 0)) {

			
			$Vs4gne2wo4hhesult['x1'] = $Vyttwgo5jasl['box']['x2'] - (($Vyttwgo5jasl['box']['width'] / 100) * $Vlhi02kz1eczstructure['positiveSectionPercentage']);
			$Vs4gne2wo4hhesult['y1'] = $Vyttwgo5jasl['box']['y1'];
			$Vs4gne2wo4hhesult['x2'] = $Vyttwgo5jasl['box']['x2'];
			$Vs4gne2wo4hhesult['y2'] = $Vyttwgo5jasl['box']['y2'];
			
			
			$Vs4gne2wo4hhesult['width'] = $Vs4gne2wo4hhesult['x2'] - $Vs4gne2wo4hhesult['x1'];
		}
		elseif(($Vlhi02kz1eczstructure['fakeMin'] < 0) && 
				($Vlhi02kz1eczstructure['fakeMax'] <= 0)) {
			
			$Vs4gne2wo4hhesult['width'] = 0;
		}
		else {
			
			$Vs4gne2wo4hhesult['x1'] = $Vyttwgo5jasl['box']['x1'];
			$Vs4gne2wo4hhesult['y1'] = $Vyttwgo5jasl['box']['y1'];
			$Vs4gne2wo4hhesult['x2'] = $Vyttwgo5jasl['box']['x2'];
			$Vs4gne2wo4hhesult['y2'] = $Vyttwgo5jasl['box']['y2'];

			
			$Vs4gne2wo4hhesult['width'] = $Vyttwgo5jasl['box']['width'];
		}
		
		
		return $Vs4gne2wo4hhesult;
	
	}


	
		
	protected function calculateNegativeSection($Vlhi02kz1eczstructure, $Vyttwgo5jasl) {
		
		$Vs4gne2wo4hhesult = array(
			'x1' => 0,
			'y1' => 0,
			'x2' => 0,
			'y2' => 0,
			'width' => 0
		);

		if(($Vlhi02kz1eczstructure['fakeMin'] < 0) && 
			($Vlhi02kz1eczstructure['fakeMax'] > 0)) {
			
			$Vs4gne2wo4hhesult['x1'] = $Vyttwgo5jasl['box']['x1'];
			$Vs4gne2wo4hhesult['y1'] = $Vyttwgo5jasl['box']['y1'];
			$Vs4gne2wo4hhesult['x2'] = $Vyttwgo5jasl['section']['positive']['x1'];
			$Vs4gne2wo4hhesult['y2'] = $Vyttwgo5jasl['box']['y2'];
			
			
			$Vs4gne2wo4hhesult['width'] = $Vs4gne2wo4hhesult['x2'] - $Vs4gne2wo4hhesult['x1'];
		}
		elseif(($Vlhi02kz1eczstructure['fakeMin'] < 0) && 
				($Vlhi02kz1eczstructure['fakeMax'] <= 0)) {
			
			$Vs4gne2wo4hhesult['x1'] = $Vyttwgo5jasl['box']['x1'];
			$Vs4gne2wo4hhesult['y1'] = $Vyttwgo5jasl['box']['y1'];
			$Vs4gne2wo4hhesult['x2'] = $Vyttwgo5jasl['box']['x2'];
			$Vs4gne2wo4hhesult['y2'] = $Vyttwgo5jasl['box']['y2'];

			
			$Vs4gne2wo4hhesult['width'] = $Vyttwgo5jasl['box']['width'];
		}
		else {
			
			$Vs4gne2wo4hhesult['height'] = 0;
		}

		
		
		return $Vs4gne2wo4hhesult;
	
	}


	
		
	protected function calculateZero($Vlhi02kz1eczstructure, $Vyttwgo5jasl) {
		
		$Vs4gne2wo4hhesult = array(
			'line' => array(
				'x1' => 0,
				'y1' => 0,
				'x2' => 0,
				'y2' => 0
			),
			'text' => array(
				'x1' => 0,
				'y1' => 0
			)
		);
		
		
		if(($Vlhi02kz1eczstructure['fakeMin'] < 0) && 
			($Vlhi02kz1eczstructure['fakeMax'] > 0)) {

			
			$Vs4gne2wo4hhesult['line']['x1'] = $Vyttwgo5jasl['section']['positive']['x1'];
			$Vs4gne2wo4hhesult['line']['y1'] = $Vyttwgo5jasl['box']['y1'];
			$Vs4gne2wo4hhesult['line']['x2'] = $Vyttwgo5jasl['section']['positive']['x1'];
			$Vs4gne2wo4hhesult['line']['y2'] = $Vyttwgo5jasl['box']['y2'];
			
		}
		elseif(($Vlhi02kz1eczstructure['fakeMin'] < 0) && 
				($Vlhi02kz1eczstructure['fakeMax'] <= 0)) {
			
			$Vs4gne2wo4hhesult['line']['x1'] = $Vyttwgo5jasl['box']['x2'];
			$Vs4gne2wo4hhesult['line']['y1'] = $Vyttwgo5jasl['box']['y1'];
			$Vs4gne2wo4hhesult['line']['x2'] = $Vyttwgo5jasl['box']['x2'];
			$Vs4gne2wo4hhesult['line']['y2'] = $Vyttwgo5jasl['box']['y2'];			
		}
		else {
			
			$Vs4gne2wo4hhesult['line']['x1'] = $Vyttwgo5jasl['box']['x1'];
			$Vs4gne2wo4hhesult['line']['y1'] = $Vyttwgo5jasl['box']['y1'];
			$Vs4gne2wo4hhesult['line']['x2'] = $Vyttwgo5jasl['box']['x2'];
			$Vs4gne2wo4hhesult['line']['y2'] = $Vyttwgo5jasl['box']['y2'];
		}

		$Vaj5jmqc444t = imagefontheight($this->cfg['value-label-font-size']);
		$Vpzypuhvknjd = imagefontwidth($this->cfg['value-label-font-size']);

		$Vs4gne2wo4hhesult['text']['x1'] = $Vs4gne2wo4hhesult['line']['x2'] - ($Vaj5jmqc444t / 2);
		$Vs4gne2wo4hhesult['text']['y1'] = $Vs4gne2wo4hhesult['line']['y1'] - $Vpzypuhvknjd;
		
		
		return $Vs4gne2wo4hhesult;
	}


	
		
	protected function calculateAverage($Vlhi02kz1eczstructure, $Vyttwgo5jasl) {
		
		$Vs4gne2wo4hhesult = array(
			'line' => array(
				'x1' => 0,
				'y1' => 0,
				'x2' => 0,
				'y2' => 0
			),
			'text' => array(
				'x1' => 0,
				'y1' => 0
			)
		);

		
		if($Vlhi02kz1eczstructure['avg'] < 0) {
			
			$Vmbcpkkgiuui = 
				($Vyttwgo5jasl['section']['negative']['width'] / 100);
			$Vi0ea53lf342 =  
				(-$Vlhi02kz1eczstructure['avg'] / 
				$Vlhi02kz1eczstructure['minDifference']) * 
				100;
			$V3trgqmpbx0w =  $Vmbcpkkgiuui * $Vi0ea53lf342;			
			
			
			$Vs4gne2wo4hhesult['line']['x1'] = $Vyttwgo5jasl['zero']['line']['x1'] - $V3trgqmpbx0w;
			$Vs4gne2wo4hhesult['line']['y1'] = $Vyttwgo5jasl['box']['y1']; 
			$Vs4gne2wo4hhesult['line']['x2'] = $Vs4gne2wo4hhesult['line']['x1'];
			$Vs4gne2wo4hhesult['line']['y2'] = $Vyttwgo5jasl['box']['y2'];
			
			
			$Vs4gne2wo4hhesult['text']['x1'] = $Vs4gne2wo4hhesult['line']['x1'] - (imagefontheight($this->cfg['value-label-font-size']) / 2);
			$Vs4gne2wo4hhesult['text']['y1'] = ($Vyttwgo5jasl['box']['y2'] + (strlen(ceil($Vlhi02kz1eczstructure['avg'])) * imagefontwidth($this->cfg['value-label-font-size']))) + 2;
		}
		else {
			
			$Vmbcpkkgiuui = 
				($Vyttwgo5jasl['section']['positive']['width'] / 100);
			$Vi0ea53lf342 = ($Vlhi02kz1eczstructure['plusDifference'] > 0) ?
				($Vlhi02kz1eczstructure['avg'] / 
				$Vlhi02kz1eczstructure['plusDifference']) * 
				100 :
				0;
				
			$V3trgqmpbx0w = $Vmbcpkkgiuui * $Vi0ea53lf342;			
			
			
			$Vs4gne2wo4hhesult['line']['x1'] = $Vyttwgo5jasl['zero']['line']['x1'] + $V3trgqmpbx0w;;
			$Vs4gne2wo4hhesult['line']['y1'] = $Vyttwgo5jasl['box']['y1'];
			$Vs4gne2wo4hhesult['line']['x2'] = $Vs4gne2wo4hhesult['line']['x1'];
			$Vs4gne2wo4hhesult['line']['y2'] = $Vyttwgo5jasl['box']['y2'];	
			
			
			$Vs4gne2wo4hhesult['text']['x1'] = $Vs4gne2wo4hhesult['line']['x1'] - (imagefontheight($this->cfg['value-label-font-size']) / 2);
			$Vs4gne2wo4hhesult['text']['y1'] = ($Vyttwgo5jasl['box']['y2'] + (strlen(ceil($Vlhi02kz1eczstructure['avg'])) * imagefontwidth($this->cfg['value-label-font-size']))) + 2;
				
		}
		
		
		return $Vs4gne2wo4hhesult;
	}


	
		
	protected function calculateLabel($Vlhi02kz1eczstructure, $Vyttwgo5jasl) {
		
		$Vs4gne2wo4hhesult = array(
			'x1' => 0,
			'y1' => 0
		);

		$Vs4gne2wo4hhesult['x1'] = $Vyttwgo5jasl['box']['x2'] + 4;
		$Vs4gne2wo4hhesult['y1'] = 
			($Vyttwgo5jasl['box']['y1'] - 
			imagefontheight($this->cfg['label-font-size'])) - 
			2;
		
		
		return $Vs4gne2wo4hhesult;
	}


	
		
	protected function calculateTitle($Vlhi02kz1eczstructure, $Vyttwgo5jasl) {
		
		$Vs4gne2wo4hhesult = array(
			'x1' => 0,
			'y1' => 0
		);

		$Vs4gne2wo4hhesult['x1'] = $Vyttwgo5jasl['box']['x1'];
		$Vs4gne2wo4hhesult['y1'] = 
			($Vyttwgo5jasl['offset']['top']/2) - 
			(imagefontheight($this->cfg['title-font-size']) / 
			2);
		
		
		return $Vs4gne2wo4hhesult;
	}


	
		
	protected function calculateValueLabels($Vlhi02kz1eczstructure, $Vyttwgo5jasl) {
		
		$Vs4gne2wo4hhesult = array(
			'min' => array (
				'x1' => 0,
				'y1' => 0
			),
			'max' => array (
				'x1' => 0,
				'y1' => 0
			)
		);
		
		$Vaj5jmqc444t = imagefontheight($this->cfg['value-label-font-size']);
		$Vpzypuhvknjd = imagefontwidth($this->cfg['value-label-font-size']);
		$V4o4hs33otq3 = ($Vpzypuhvknjd * strlen($Vlhi02kz1eczstructure['fakeMax']));
		$V1yrpsh2kyfq = ($Vpzypuhvknjd * strlen($Vlhi02kz1eczstructure['fakeMin']));
		
		
		$Vs4gne2wo4hhesult['max']['x1'] = $Vyttwgo5jasl['box']['x2'] - ($Vaj5jmqc444t / 2);
		$Vs4gne2wo4hhesult['max']['y1'] = ($Vyttwgo5jasl['box']['y2'] + $V4o4hs33otq3) + 4;

		
		$Vs4gne2wo4hhesult['min']['x1'] = $Vyttwgo5jasl['box']['x1'] - ($Vaj5jmqc444t / 2);
		$Vs4gne2wo4hhesult['min']['y1'] = ($Vyttwgo5jasl['box']['y2'] + $V1yrpsh2kyfq) + 4;
		
		
		return $Vs4gne2wo4hhesult;
	}


	
		
	protected function calculateColumns($Vlhi02kz1eczstructure, $Vyttwgo5jasl) {
		
		$Vec5hzvzuawo = 0;
		$Vcrauiuseg4x = $Vyttwgo5jasl['box']['x1'];
		$Vdcxfjnekf50 = $Vyttwgo5jasl['box']['y1'];
		$Vuxqgcovp0zh = NULL;
		$Vkw4bj0ghkzz = array();
		
		
		foreach($Vlhi02kz1eczstructure['data'] as $Vzls01jplmeq => $Vn5ykvkgiw10) {
			
			
			$Vskinrs5xocd = ($Vyttwgo5jasl['col']['height'] > 8) ? 3 : 0;
			$Vngoi2f0nybx = ($Vyttwgo5jasl['col']['height'] > 8) ? 3 : 0;
			
			
			$Vs4gne2wo4hhesult = array(
				'value' => array(
						'text' => $Vn5ykvkgiw10,
						'x1' => 0,
						'y1' => 0,
					),
				'key' => array(
						'text' => $Vzls01jplmeq,
						'x1' => 0,
						'y1' => 0,
					),
				'fill' => 0,
				'column' => array(
					'x1' => $Vyttwgo5jasl['box']['x1'],
					'y1' => $Vdcxfjnekf50,
					'x2' => $Vyttwgo5jasl['box']['x2'],
					'y2' => $Vdcxfjnekf50 + $Vyttwgo5jasl['col']['height'],
					'x3' => $Vyttwgo5jasl['box']['x2'],
					'y3' => $Vdcxfjnekf50 + $Vyttwgo5jasl['col']['height'],
					'x4' => $Vyttwgo5jasl['box']['x1'],
					'y4' => $Vdcxfjnekf50,
				),
				'bar' => array(
					'x1' => 0, 
					'y1' => $Vdcxfjnekf50,
					'x2' => 0, 
					'y2' => $Vdcxfjnekf50,
					'x3' => 0, 
					'y3' => $Vdcxfjnekf50 + $Vyttwgo5jasl['col']['height'],
					'x4' => 0, 
					'y4' => $Vdcxfjnekf50 + $Vyttwgo5jasl['col']['height']
				),
				'foregroundbar' => array(
					'x1' => 0, 
					'y1' => $Vdcxfjnekf50 + $Vskinrs5xocd, 
					'x2' => 0, 
					'y2' => $Vdcxfjnekf50 + $Vskinrs5xocd, 
					'x3' => 0, 
					'y3' => ($Vdcxfjnekf50 + $Vyttwgo5jasl['col']['height']) - ($Vskinrs5xocd * 2),
					'x4' => 0, 
					'y4' => ($Vdcxfjnekf50 + $Vyttwgo5jasl['col']['height']) - ($Vskinrs5xocd * 2) 
				),
				'shadowbar' => array(
					'x1' => 0, 
					'y1' => $Vdcxfjnekf50 + ($Vskinrs5xocd * 2),
					'x2' => 0, 
					'y2' => $Vdcxfjnekf50 + ($Vskinrs5xocd * 2),
					'x3' => 0, 
					'y3' => ($Vdcxfjnekf50 + $Vyttwgo5jasl['col']['height']) - $Vskinrs5xocd,
					'x4' => 0, 
					'y4' => ($Vdcxfjnekf50 + $Vyttwgo5jasl['col']['height']) - $Vskinrs5xocd
				),
				'previous' => array(
					'value' => 0,
					'x1' => 0,
					'y1' => 0,
					'x2' => 0,
					'y2' => 0,
					'x3' => 0,
					'y3' => 0,
					'x4' => 0,
					'y4' => 0,
				),
				'line' => array(
					'x1' => 0,
					'y1' => 0,
					'x2' => 0,
					'y2' => 0,
				),
				'poly' => array(
				),
			);
			
			
			
			if(is_null($Vuxqgcovp0zh)) {
				$Vs4gne2wo4hhesult['previous']['value'] = 0;
				$Vs4gne2wo4hhesult['previous']['x1'] = $Vyttwgo5jasl['zero']['line']['x1'];
				$Vs4gne2wo4hhesult['previous']['y1'] = $Vyttwgo5jasl['box']['y1'];
				$Vs4gne2wo4hhesult['previous']['x2'] = $Vyttwgo5jasl['zero']['line']['x1'];
				$Vs4gne2wo4hhesult['previous']['y2'] = $Vyttwgo5jasl['box']['y1'];
				$Vs4gne2wo4hhesult['previous']['x3'] = $Vyttwgo5jasl['zero']['line']['x1'];
				$Vs4gne2wo4hhesult['previous']['y3'] = $Vyttwgo5jasl['box']['y1'];
				$Vs4gne2wo4hhesult['previous']['x4'] = $Vyttwgo5jasl['zero']['line']['x1'];
				$Vs4gne2wo4hhesult['previous']['y4'] = $Vyttwgo5jasl['box']['y1'];
			}
			else {
				
				$Vs4gne2wo4hhesult['previous']['value'] = $Vuxqgcovp0zh['value']['text'];
				$Vs4gne2wo4hhesult['previous']['x1'] = $Vuxqgcovp0zh['bar']['x1'];
				$Vs4gne2wo4hhesult['previous']['y1'] = $Vuxqgcovp0zh['bar']['y1'];
				$Vs4gne2wo4hhesult['previous']['x2'] = $Vuxqgcovp0zh['bar']['x2'];
				$Vs4gne2wo4hhesult['previous']['y2'] = $Vuxqgcovp0zh['bar']['y2'];
				$Vs4gne2wo4hhesult['previous']['x3'] = $Vuxqgcovp0zh['bar']['x3'];
				$Vs4gne2wo4hhesult['previous']['y3'] = $Vuxqgcovp0zh['bar']['y3'];
				$Vs4gne2wo4hhesult['previous']['x4'] = $Vuxqgcovp0zh['bar']['x4'];
				$Vs4gne2wo4hhesult['previous']['y4'] = $Vuxqgcovp0zh['bar']['y4'];
			}
			
			
			$Vzls01jplmeqX = ($Vyttwgo5jasl['col']['height'] / 2) - (imagefontheight($this->cfg['key-font-size']) / 2);
			$Vs4gne2wo4hhesult['key']['x1'] = 8; 
			$Vs4gne2wo4hhesult['key']['y1'] = $Vdcxfjnekf50 + $Vzls01jplmeqX;
			
			
			
			if($Vn5ykvkgiw10 < 0) {
			
				
				$Vhlxgi1maptu = ($Vyttwgo5jasl['section']['negative']['width'] / 100);
				$Vqd0s4kjqee3 =  ($Vn5ykvkgiw10 / $Vlhi02kz1eczstructure['minDifference'])  * 100;
				$Vn5ykvkgiw10Height =  $Vhlxgi1maptu * $Vqd0s4kjqee3;
				
				
				$Vs4gne2wo4hhesult['fill'] = floor(-$Vqd0s4kjqee3);
				
				
				$Vs4gne2wo4hhesult['bar']['x1'] = $Vyttwgo5jasl['zero']['line']['x1'] + $Vn5ykvkgiw10Height;
				$Vs4gne2wo4hhesult['bar']['x2'] = $Vyttwgo5jasl['zero']['line']['x1']; 
				$Vs4gne2wo4hhesult['bar']['x3'] = $Vyttwgo5jasl['zero']['line']['x1'];
				$Vs4gne2wo4hhesult['bar']['x4'] = $Vs4gne2wo4hhesult['bar']['x1'];
				
				
				$Vs4gne2wo4hhesult['foregroundbar']['x1'] =  $Vyttwgo5jasl['zero']['line']['x1'] + $Vn5ykvkgiw10Height;
				$Vs4gne2wo4hhesult['foregroundbar']['x2'] = $Vs4gne2wo4hhesult['foregroundbar']['x1'];
				$Vs4gne2wo4hhesult['foregroundbar']['x3'] = $Vyttwgo5jasl['zero']['line']['x1'];
				$Vs4gne2wo4hhesult['foregroundbar']['x4'] = $Vs4gne2wo4hhesult['foregroundbar']['x3'];


				
				$Vs4gne2wo4hhesult['shadowbar']['x1'] = ($Vyttwgo5jasl['zero']['line']['x1'] + $Vn5ykvkgiw10Height) + $Vngoi2f0nybx;;
				$Vs4gne2wo4hhesult['shadowbar']['x2'] = $Vs4gne2wo4hhesult['shadowbar']['x1'];
				$Vs4gne2wo4hhesult['shadowbar']['x3'] = $Vyttwgo5jasl['zero']['line']['x1'];
				$Vs4gne2wo4hhesult['shadowbar']['x4'] = $Vs4gne2wo4hhesult['shadowbar']['x3'];
		
			
				
				$Vn5ykvkgiw10Length = strlen($Vn5ykvkgiw10) * imagefontwidth($this->cfg['value-font-size']);
				$Vn5ykvkgiw10Height = imagefontheight($this->cfg['value-font-size']);
				
				
				$Vs4gne2wo4hhesult['value']['y1'] = $Vdcxfjnekf50 + (($Vyttwgo5jasl['col']['height'] / 2) - ($Vn5ykvkgiw10Height / 2));
				
				
				if($Vn5ykvkgiw10Length > $Vyttwgo5jasl['section']['negative']['width']) {
					$Vs4gne2wo4hhesult['value']['x1'] = ($Vyttwgo5jasl['zero']['line']['x1']) + 4;
				}
				else {
					
					if($Vs4gne2wo4hhesult['fill'] < 50) {
						$Vs4gne2wo4hhesult['value']['x1'] = ($Vs4gne2wo4hhesult['bar']['x1'] - $Vn5ykvkgiw10Length) - 4;
					}
					else {
						$Vs4gne2wo4hhesult['value']['x1'] = ($Vyttwgo5jasl['zero']['line']['x1'] - $Vn5ykvkgiw10Length) - 4;
					}
				}
				
				
				if($Vs4gne2wo4hhesult['previous']['value'] < 0) {
					
					
					$Vs4gne2wo4hhesult['poly'][0] = $Vs4gne2wo4hhesult['previous']['x1'];
					$Vs4gne2wo4hhesult['poly'][1] = $Vs4gne2wo4hhesult['bar']['y1'];
					$Vs4gne2wo4hhesult['poly'][2] = $Vs4gne2wo4hhesult['bar']['x4'];
					$Vs4gne2wo4hhesult['poly'][3] = $Vs4gne2wo4hhesult['bar']['y4'];
					$Vs4gne2wo4hhesult['poly'][4] = $Vs4gne2wo4hhesult['bar']['x3'];
					$Vs4gne2wo4hhesult['poly'][5] = $Vs4gne2wo4hhesult['bar']['y3'];
					$Vs4gne2wo4hhesult['poly'][6] = $Vs4gne2wo4hhesult['bar']['x2'];
					$Vs4gne2wo4hhesult['poly'][7] = $Vs4gne2wo4hhesult['bar']['y2'];
					$Vs4gne2wo4hhesult['poly'][8] = $Vs4gne2wo4hhesult['previous']['x1'];
					$Vs4gne2wo4hhesult['poly'][9] = $Vs4gne2wo4hhesult['bar']['y1'];

					
					$Vs4gne2wo4hhesult['line']['x1'] = $Vs4gne2wo4hhesult['previous']['x1'];
					$Vs4gne2wo4hhesult['line']['y1'] = $Vs4gne2wo4hhesult['previous']['y3'];
					$Vs4gne2wo4hhesult['line']['x2'] = $Vs4gne2wo4hhesult['bar']['x4'];
					$Vs4gne2wo4hhesult['line']['y2'] = $Vs4gne2wo4hhesult['bar']['y4'];
				}
				else {
					
					$Vs4gne2wo4hhesult['poly'][0] = $Vs4gne2wo4hhesult['previous']['x2'];
					$Vs4gne2wo4hhesult['poly'][1] = $Vs4gne2wo4hhesult['bar']['y2'];
					$Vs4gne2wo4hhesult['poly'][2] = $Vs4gne2wo4hhesult['bar']['x4'];
					$Vs4gne2wo4hhesult['poly'][3] = $Vs4gne2wo4hhesult['bar']['y4'];
					$Vs4gne2wo4hhesult['poly'][4] = $Vs4gne2wo4hhesult['bar']['x3'];
					$Vs4gne2wo4hhesult['poly'][5] = $Vs4gne2wo4hhesult['bar']['y3'];
					$Vs4gne2wo4hhesult['poly'][6] = $Vs4gne2wo4hhesult['bar']['x2'];
					$Vs4gne2wo4hhesult['poly'][7] = $Vs4gne2wo4hhesult['bar']['y2'];
					$Vs4gne2wo4hhesult['poly'][8] = $Vs4gne2wo4hhesult['previous']['x2'];
					$Vs4gne2wo4hhesult['poly'][9] = $Vs4gne2wo4hhesult['bar']['y2'];	
					
					
					$Vs4gne2wo4hhesult['line']['x1'] = $Vs4gne2wo4hhesult['previous']['x3'];
					$Vs4gne2wo4hhesult['line']['y1'] = $Vs4gne2wo4hhesult['previous']['y3'];
					$Vs4gne2wo4hhesult['line']['x2'] = $Vs4gne2wo4hhesult['bar']['x1'];
					$Vs4gne2wo4hhesult['line']['y2'] = $Vs4gne2wo4hhesult['bar']['y3'];	
					
					
					if ($Vec5hzvzuawo == 0) {
						$Vs4gne2wo4hhesult['line']['x1'] = $Vs4gne2wo4hhesult['line']['x2'];
						$Vs4gne2wo4hhesult['poly'][0] = $Vs4gne2wo4hhesult['poly'][2];
					}								
				}
			
			}
			else {
				
				
				$Vhlxgi1maptu = ($Vyttwgo5jasl['section']['positive']['width'] / 100);
				$Vqd0s4kjqee3 = 
					($Vlhi02kz1eczstructure['plusDifference'] > 0) ?
						($Vn5ykvkgiw10 / $Vlhi02kz1eczstructure['plusDifference'])  * 100 :
						0;
				$Vn5ykvkgiw10Height =  $Vhlxgi1maptu * $Vqd0s4kjqee3;

				
				$Vs4gne2wo4hhesult['fill'] = $Vqd0s4kjqee3;

				
				$Vs4gne2wo4hhesult['bar']['x1'] = $Vyttwgo5jasl['zero']['line']['x1'];
				$Vs4gne2wo4hhesult['bar']['x2'] = $Vs4gne2wo4hhesult['bar']['x1'] + $Vn5ykvkgiw10Height;
				$Vs4gne2wo4hhesult['bar']['x3'] = $Vs4gne2wo4hhesult['bar']['x2'];
				$Vs4gne2wo4hhesult['bar']['x4'] = $Vs4gne2wo4hhesult['bar']['x1'];

				
				
				$Vs4gne2wo4hhesult['foregroundbar']['x1'] =  $Vyttwgo5jasl['zero']['line']['x1'];
				$Vs4gne2wo4hhesult['foregroundbar']['x2'] = $Vs4gne2wo4hhesult['foregroundbar']['x1'];
				$Vs4gne2wo4hhesult['foregroundbar']['x3'] = $Vyttwgo5jasl['zero']['line']['x1'] + $Vn5ykvkgiw10Height;
				$Vs4gne2wo4hhesult['foregroundbar']['x4'] = $Vs4gne2wo4hhesult['foregroundbar']['x3'];
				
				
				$Vs4gne2wo4hhesult['shadowbar']['x1'] = $Vyttwgo5jasl['zero']['line']['x1'];
				$Vs4gne2wo4hhesult['shadowbar']['x2'] = $Vs4gne2wo4hhesult['foregroundbar']['x1'];
				
				$Vs4gne2wo4hhesult['shadowbar']['x3'] = ($Vn5ykvkgiw10 === 0) ? $Vyttwgo5jasl['zero']['line']['x1'] : ($Vyttwgo5jasl['zero']['line']['x1'] + $Vn5ykvkgiw10Height) + $Vngoi2f0nybx;
				$Vs4gne2wo4hhesult['shadowbar']['x4'] = $Vs4gne2wo4hhesult['foregroundbar']['x3'];

				
				
				$Vn5ykvkgiw10Length = strlen($Vn5ykvkgiw10) * imagefontwidth($this->cfg['value-font-size']);
				$Vn5ykvkgiw10FontHeight = imagefontheight($this->cfg['value-font-size']);
				
				
				$Vs4gne2wo4hhesult['value']['y1'] = $Vdcxfjnekf50 + (($Vyttwgo5jasl['col']['height'] / 2) - ($Vn5ykvkgiw10FontHeight / 2));
				
				
				if( ($Vn5ykvkgiw10Length +($Vngoi2f0nybx + 6)) > $Vyttwgo5jasl['section']['positive']['width']) {
					
					$Vs4gne2wo4hhesult['value']['x1'] = ($Vyttwgo5jasl['zero']['line']['x1'] + $Vn5ykvkgiw10Length) + 6;
				}
				else {
					if($Vs4gne2wo4hhesult['fill'] < 50) {
						
						$Vs4gne2wo4hhesult['value']['x1'] = ($Vyttwgo5jasl['zero']['line']['x1'] + $Vn5ykvkgiw10Height) + ($Vngoi2f0nybx + 4);
					}
					else {
						
						$Vs4gne2wo4hhesult['value']['x1'] = ($Vyttwgo5jasl['zero']['line']['x1']) + 4;
					}
				}
						
				
				if($Vs4gne2wo4hhesult['previous']['value'] < 0) {
					
					
					$Vs4gne2wo4hhesult['poly'][0] = $Vs4gne2wo4hhesult['previous']['x1'];
					$Vs4gne2wo4hhesult['poly'][1] = $Vs4gne2wo4hhesult['bar']['y1'];
					$Vs4gne2wo4hhesult['poly'][2] = $Vs4gne2wo4hhesult['bar']['x3'];
					$Vs4gne2wo4hhesult['poly'][3] = $Vs4gne2wo4hhesult['bar']['y3'];
					$Vs4gne2wo4hhesult['poly'][4] = $Vs4gne2wo4hhesult['bar']['x4'];
					$Vs4gne2wo4hhesult['poly'][5] = $Vs4gne2wo4hhesult['bar']['y4'];
					$Vs4gne2wo4hhesult['poly'][6] = $Vs4gne2wo4hhesult['bar']['x1'];
					$Vs4gne2wo4hhesult['poly'][7] = $Vs4gne2wo4hhesult['bar']['y1'];
					$Vs4gne2wo4hhesult['poly'][8] = $Vs4gne2wo4hhesult['previous']['x1'];
					$Vs4gne2wo4hhesult['poly'][9] = $Vs4gne2wo4hhesult['bar']['y1'];

					
					$Vs4gne2wo4hhesult['line']['x1'] = $Vs4gne2wo4hhesult['previous']['x4'];
					$Vs4gne2wo4hhesult['line']['y1'] = $Vs4gne2wo4hhesult['previous']['y4'];
					$Vs4gne2wo4hhesult['line']['x2'] = $Vs4gne2wo4hhesult['bar']['x3'];
					$Vs4gne2wo4hhesult['line']['y2'] = $Vs4gne2wo4hhesult['bar']['y3'];
				}
				else {
					
					
					$Vs4gne2wo4hhesult['poly'][0] = $Vs4gne2wo4hhesult['previous']['x3'];
					$Vs4gne2wo4hhesult['poly'][1] = $Vs4gne2wo4hhesult['bar']['y1'];
					$Vs4gne2wo4hhesult['poly'][2] = $Vs4gne2wo4hhesult['bar']['x3'];
					$Vs4gne2wo4hhesult['poly'][3] = $Vs4gne2wo4hhesult['bar']['y3'];
					$Vs4gne2wo4hhesult['poly'][4] = $Vs4gne2wo4hhesult['bar']['x4'];
					$Vs4gne2wo4hhesult['poly'][5] = $Vs4gne2wo4hhesult['bar']['y4'];
					$Vs4gne2wo4hhesult['poly'][6] = $Vs4gne2wo4hhesult['bar']['x1'];
					$Vs4gne2wo4hhesult['poly'][7] = $Vs4gne2wo4hhesult['bar']['y1'];
					$Vs4gne2wo4hhesult['poly'][8] = $Vs4gne2wo4hhesult['previous']['x3'];
					$Vs4gne2wo4hhesult['poly'][9] = $Vs4gne2wo4hhesult['bar']['y1'];	
					
					
					
					$Vs4gne2wo4hhesult['line']['x1'] = $Vs4gne2wo4hhesult['previous']['x3'];
					$Vs4gne2wo4hhesult['line']['y1'] = $Vs4gne2wo4hhesult['previous']['y3'];
					$Vs4gne2wo4hhesult['line']['x2'] = $Vs4gne2wo4hhesult['bar']['x3'];
					$Vs4gne2wo4hhesult['line']['y2'] = $Vs4gne2wo4hhesult['bar']['y3'];

					
					if ($Vec5hzvzuawo == 0) {
						$Vs4gne2wo4hhesult['line']['x1'] = $Vs4gne2wo4hhesult['line']['x2'];
						$Vs4gne2wo4hhesult['poly'][0] = $Vs4gne2wo4hhesult['poly'][2];
					}								
								
				}
			}

			
			$Vkw4bj0ghkzz[$Vzls01jplmeq] = $Vs4gne2wo4hhesult;
			
			
			$Vuxqgcovp0zh = $Vs4gne2wo4hhesult;
			
			
			
			$Vdcxfjnekf50 = $Vdcxfjnekf50 + $Vyttwgo5jasl['col']['height'];
			
			
			$Vec5hzvzuawo++;
		}


		
		return $Vkw4bj0ghkzz;
	}



		
	protected function drawImage() {
		
		$this->ip = $this->createImage($this->cfg['width'], $this->cfg['height']);
		
		
		$V0lf0m1w33n3 = $this->allocateColor($this->cfg['background-color']);
		
		
		imagefill($this->ip, 0, 0, $V0lf0m1w33n3);
		
		
		if(!empty($this->cfg['background-image'])) {
			
			if($V1yenpdfyl1sgkImage = $this->createImageFromFile($this->cfg['background-image'])) {
				imagecopy($this->ip, $V1yenpdfyl1sgkImage, 0, 0, 0, 0, $this->cfg['width'], $this->cfg['height']);
			}
		}		
	}
	


		
	protected function drawTitle($Vrh1qulr0iaaPoints) {
		
		if($this->cfg['title-visible']) {
			
			$Vwzz1mjrjfb0 = $this->allocateColor($this->cfg['title-color']);
			
			
			imagestring($this->ip, $this->cfg['title-font-size'], $Vrh1qulr0iaaPoints['title']['x1'], $Vrh1qulr0iaaPoints['title']['y1'], $this->cfg['title'], $Vwzz1mjrjfb0);
		}
	}



		
	protected function drawValueLabels($Vrh1qulr0iaaPoints, $Vlhi02kz1eczStructure) {
		
		if($this->cfg['value-label-visible']) {
			
			$Vn5ykvkgiw10LabelColor = $this->allocateColor($this->cfg['value-label-color']);

			
			if( $this->cfg['label-right-align'] ){
				$Vvsd2pwnc3o4 = str_pad( $Vlhi02kz1eczStructure['fakeMin'], $Vlhi02kz1eczStructure['maxValueLength'], " ", STR_PAD_LEFT);
				$Vgyu1dufpfve = str_pad( $Vlhi02kz1eczStructure['fakeMax'], $Vlhi02kz1eczStructure['maxValueLength'], " ", STR_PAD_LEFT);
			}else{
				$Vvsd2pwnc3o4 = $Vlhi02kz1eczStructure['fakeMin'];
				$Vgyu1dufpfve = $Vlhi02kz1eczStructure['fakeMax'];
			}
			
			
			if($Vlhi02kz1eczStructure['fakeMin'] < 0 && $Vlhi02kz1eczStructure['fakeMax'] <= 0) {
				$Vgyu1dufpfve = "0";
			}
			
			
			imagestringup($this->ip, $this->cfg['value-label-font-size'], $Vrh1qulr0iaaPoints['value']['min']['x1'], $Vrh1qulr0iaaPoints['value']['min']['y1'], $Vvsd2pwnc3o4, $Vn5ykvkgiw10LabelColor);
			imagestringup($this->ip, $this->cfg['value-label-font-size'], $Vrh1qulr0iaaPoints['value']['max']['x1'], $Vrh1qulr0iaaPoints['value']['max']['y1'], $Vgyu1dufpfve, $Vn5ykvkgiw10LabelColor);
		}			
	
	}



		
	protected function drawBoxBackground($Vrh1qulr0iaaPoints) {
		
		if($this->cfg['box-background-visible']) {
			
			$V1yenpdfyl1soxBackgroundColor = $this->allocateColor($this->cfg['box-background-color'], $this->cfg['box-background-alpha']);
			
			
			imagefilledrectangle($this->ip, $Vrh1qulr0iaaPoints['box']['x1'], $Vrh1qulr0iaaPoints['box']['y1'], $Vrh1qulr0iaaPoints['box']['x2'], $Vrh1qulr0iaaPoints['box']['y2'], $V1yenpdfyl1soxBackgroundColor);
		}
	}



		
	protected function drawVerticaldividers($Vrh1qulr0iaaPoints) {
		
		if($this->cfg['horizontal-divider-visible']) {
			
			$Vz3fdo42aksi = ($Vrh1qulr0iaaPoints['box']['width'] / 4);
			
			$Vkvzweuxdygz = $this->allocateColor($this->cfg['horizontal-divider-color'], $this->cfg['horizontal-divider-alpha']);
			$Vqptk3alkdyh = $this->allocateColor($this->hex2Rgb('FFFFFF'), 127);
			
			$V53wdqrtrfy2 = array($Vkvzweuxdygz, $Vkvzweuxdygz, $Vqptk3alkdyh, $Vqptk3alkdyh);
			
			imagesetstyle($this->ip, $V53wdqrtrfy2);			
			
			for($Vvmcb2huerp4 = 1; $Vvmcb2huerp4 <= 3; $Vvmcb2huerp4++) {
				
				$Vp1xlxrzyxlv = $Vrh1qulr0iaaPoints['box']['x1'] + ($Vvmcb2huerp4 * $Vz3fdo42aksi);
				
				imageline($this->ip,  $Vp1xlxrzyxlv, $Vrh1qulr0iaaPoints['box']['y1'], $Vp1xlxrzyxlv, $Vrh1qulr0iaaPoints['box']['y2'], IMG_COLOR_STYLED);
			}
		}
	}



		
	protected function drawLabel($Vrh1qulr0iaaPoints) {
		
		if($this->cfg['label-visible']) {
			
			$Vtpwjzxdhgqb = $this->allocateColor($this->cfg['label-color']);
			
			
			imagestring($this->ip, $this->cfg['label-font-size'], $Vrh1qulr0iaaPoints['label']['x1'], $Vrh1qulr0iaaPoints['label']['y1'], $this->cfg['label'], $Vtpwjzxdhgqb);
		}
	}



		
	protected function drawBoxBorder($Vrh1qulr0iaaPoints) {
		
		if($this->cfg['box-border-visible']) {
			
			$V1yenpdfyl1soxBorderColor = $this->allocateColor($this->cfg['box-border-color'], $this->cfg['box-border-alpha']);
			
			
			imagerectangle($this->ip, $Vrh1qulr0iaaPoints['box']['x1'], $Vrh1qulr0iaaPoints['box']['y1'], $Vrh1qulr0iaaPoints['box']['x2'], $Vrh1qulr0iaaPoints['box']['y2'], $V1yenpdfyl1soxBorderColor);
		}
	}



		
	protected function drawAverage($Vrh1qulr0iaaPoints, $Vlhi02kz1eczStructure) {
		
		if($this->cfg['average-line-visible']) {
			
			$Vc42efj0el1w = 
				$this->allocateColor($this->cfg['average-line-color'], 
									 $this->cfg['average-line-alpha']);
			
			
			imageline($this->ip, 
				$Vrh1qulr0iaaPoints['average']['line']['x1'], 
				$Vrh1qulr0iaaPoints['average']['line']['y1'] - 2, 
				$Vrh1qulr0iaaPoints['average']['line']['x2'], 
				$Vrh1qulr0iaaPoints['average']['line']['y2'] + 2, 
				$Vc42efj0el1w);
			
			
			imagestringup($this->ip, 2, 
				$Vrh1qulr0iaaPoints['average']['text']['x1'], 
				$Vrh1qulr0iaaPoints['average']['text']['y1'], 
				ceil($Vlhi02kz1eczStructure['avg']), 
				$Vc42efj0el1w);
		}
	}



		
	protected function drawSections($Vrh1qulr0iaaPoints) {
		$Vcfxrpgals2f = 
			$this->allocateColor($this->hex2Rgb('00FF00'), 
								$this->cfg['zero-line-alpha']);
	
		$Vh0agzberuv5 = 
			$this->allocateColor($this->hex2Rgb('FF0000'), 
								$this->cfg['zero-line-alpha']);
		
		
		imagefilledrectangle($this->ip, $Vrh1qulr0iaaPoints['section']['positive']['x1'], $Vrh1qulr0iaaPoints['section']['positive']['y1'], $Vrh1qulr0iaaPoints['section']['positive']['x2'], $Vrh1qulr0iaaPoints['section']['positive']['y2'], $Vcfxrpgals2f);
		imagefilledrectangle($this->ip, $Vrh1qulr0iaaPoints['section']['negative']['x1'], $Vrh1qulr0iaaPoints['section']['negative']['y1'], $Vrh1qulr0iaaPoints['section']['negative']['x2'], $Vrh1qulr0iaaPoints['section']['negative']['y2'], $Vh0agzberuv5);
	}



		
	protected function drawZero($Vrh1qulr0iaaPoints) {
	
		
		
		if($this->cfg['zero-line-visible']) {
			
			if($Vrh1qulr0iaaPoints['zero']['line']['x1'] != 
				$Vrh1qulr0iaaPoints['box']['x1']) {
				
				
				$Vkvzweuxdygz = 
					$this->allocateColor($this->cfg['zero-line-color'], 
										$this->cfg['zero-line-alpha']);


				
				imageline($this->ip, 
					$Vrh1qulr0iaaPoints['zero']['line']['x1'], 
					$Vrh1qulr0iaaPoints['zero']['line']['y1'] - 2, 
					$Vrh1qulr0iaaPoints['zero']['line']['x2'], 
					$Vrh1qulr0iaaPoints['zero']['line']['y2'] + 2, 
					$Vkvzweuxdygz);
				
				
				imagestringup($this->ip, 
					$this->cfg['value-label-font-size'], 
					$Vrh1qulr0iaaPoints['zero']['text']['x1'], 
					$Vrh1qulr0iaaPoints['zero']['text']['y1'], 
					0, 
					$Vkvzweuxdygz);
			}
		}
	}



		
	protected function drawColumns($Vrh1qulr0iaaPoints, $Vlhi02kz1eczStructure, $Vgkictlptq2d = false) {
		
		$Vpmcx1hxfm45 = 1;
		
		
		$Vzls01jplmeqColor = $this->allocateColor($this->cfg['key-color']);
		$Vn5ykvkgiw10Color = $this->allocateColor($this->cfg['value-color']);
		$Vwx2w13t3suy = $this->allocateColor($this->cfg['column-color'], $this->cfg['column-alpha']); 
		$Vmfat1fjvd2l = $this->allocateColor($this->cfg['column-shadow-color'], $this->cfg['column-shadow-alpha']); 
		
		
		foreach($Vrh1qulr0iaaPoints['columns'] as $Vcs0xakgmxzj) {

			
			
			if($this->cfg['column-color-random']) {
				$Vjqzvbpbyed5 = $this->generateRandomColor();
				$Vwx2w13t3suy = $this->allocateColor($Vjqzvbpbyed5['forecolor'], $this->cfg['column-alpha']); 
				$Vmfat1fjvd2l = $this->allocateColor($Vjqzvbpbyed5['backcolor'], $this->cfg['column-shadow-alpha']);
			}

			if($Vgkictlptq2d) {
				$Vwx2w13t3suy = $this->allocateColor($this->cfg['column-compare-color'], 0); 
				$Vmfat1fjvd2l = $this->allocateColor($this->cfg['column-compare-shadow-color'], 0); 
			}
			
			
			$this->drawColumn($Vcs0xakgmxzj, $Vwx2w13t3suy, $Vmfat1fjvd2l);
			
			
			if($this->cfg['value-visible']) {
				if($Vrh1qulr0iaaPoints['col']['show']) {
					if(!$Vgkictlptq2d) {
						imagestring($this->ip, $this->cfg['value-font-size'], $Vcs0xakgmxzj['value']['x1'], $Vcs0xakgmxzj['value']['y1'], $Vcs0xakgmxzj['value']['text'], $Vn5ykvkgiw10Color);
					}
				}
			}
						
			
			if($this->cfg['column-divider-visible']) {
				
				if($Vpmcx1hxfm45!=1) {
					if(!$Vgkictlptq2d) {
						
						$Vhru2ru3qinx = $this->allocateColor($this->cfg['column-divider-color'], $this->cfg['column-divider-alpha']);
						$Vzwskreflexy = $this->allocateColor($this->hex2Rgb('FFFFFF'), 127);
						
						$Vfry3v440svw = array($Vhru2ru3qinx, $Vhru2ru3qinx, $Vzwskreflexy, $Vzwskreflexy);
						
						imagesetstyle($this->ip, $Vfry3v440svw);
						
						imageline($this->ip,  $Vcs0xakgmxzj['column']['x1'], $Vcs0xakgmxzj['column']['y1'], $Vcs0xakgmxzj['column']['x3'], $Vcs0xakgmxzj['column']['y1'], IMG_COLOR_STYLED);
					}
				}
			}
					
				
			
			if($this->cfg['key-visible']) {
				if(!$Vgkictlptq2d) {
					$V1euitijqrod = true;
					if(!$Vrh1qulr0iaaPoints['col']['show']) {
						$V1euitijqrod = (($Vpmcx1hxfm45==1) || ($Vpmcx1hxfm45==$Vlhi02kz1eczStructure['cols']));
					}
					if($V1euitijqrod) {
						
						if( $this->cfg['key-right-align'] ){
							$Vzls01jplmeqTxt = str_pad( $Vcs0xakgmxzj['key']['text'], $Vlhi02kz1eczStructure['maxKeyLength'], " ", STR_PAD_LEFT);
						}else{
							$Vzls01jplmeqTxt = $Vcs0xakgmxzj['key']['text'];
						}
					
						imagestring($this->ip, $this->cfg['key-font-size'], $Vcs0xakgmxzj['key']['x1'], $Vcs0xakgmxzj['key']['y1'], $Vzls01jplmeqTxt, $Vzls01jplmeqColor);
					
						
					}
				}
			}
											
			
			$Vpmcx1hxfm45++;			
			
		} 
		
	}



		
	protected function drawColumn($Vcs0xakgmxzj, 
								  $Vwx2w13t3suy, 
								  $Vmfat1fjvd2l) {
		throw new Exception('drawColumn is not implemented');
	}



		
	public function parse($Vlhi02kz1ecz, $Vf5zqmgi2wdw = array()){
		try {
			
			$this->parseConfig($Vf5zqmgi2wdw);

			
			$Vlhi02kz1eczStructure = $this->parseDataStructure($Vlhi02kz1ecz);
			
			
			$Vrh1qulr0iaaPoints = $this->calculateGraph($Vlhi02kz1eczStructure);

			
			$this->drawImage();
			$this->drawTitle($Vrh1qulr0iaaPoints);
			$this->drawValueLabels($Vrh1qulr0iaaPoints, $Vlhi02kz1eczStructure);
			$this->drawBoxBackground($Vrh1qulr0iaaPoints);
			$this->drawColumns($Vrh1qulr0iaaPoints, $Vlhi02kz1eczStructure);
			$this->drawVerticaldividers($Vrh1qulr0iaaPoints);
			$this->drawLabel($Vrh1qulr0iaaPoints);
			$this->drawBoxBorder($Vrh1qulr0iaaPoints);
			$this->drawAverage($Vrh1qulr0iaaPoints, $Vlhi02kz1eczStructure);
			$this->drawZero($Vrh1qulr0iaaPoints);
		}
		catch(Exception $Vzpuzrl4o1i3) {
			
			$this->parseError($Vzpuzrl4o1i3);
		}
		
		
		$this->parseImage();
	}



		
	public function parseCompare($Vlhi02kz1ecz1, $Vlhi02kz1ecz2, $Vf5zqmgi2wdw = array()){
		try {
			
			$this->parseConfig($Vf5zqmgi2wdw);

			
			$Vlhi02kz1eczStructure1 = $this->parseDataStructure($Vlhi02kz1ecz1);
			$Vlhi02kz1eczStructure2 = $this->parseDataStructure($Vlhi02kz1ecz2);
			$Vgkictlptq2d = $this->compareDataStructures($Vlhi02kz1eczStructure1, $Vlhi02kz1eczStructure2);
			
			
			if(count($Vgkictlptq2d['structures'])<0) {
				throw new Exception('Not enough datastructures found');
			}
			
			
			$V4zbr4i0hzcr = $Vgkictlptq2d['structures'][0];
			$Vrh1qulr0iaaPoints = $this->calculateGraph($V4zbr4i0hzcr);
			
			
			$this->cfg['value-visible'] = false;
			$this->cfg['column-alpha'] = 30;
			$this->cfg['column-shadow-alpha'] = 127;
			
			
			$this->drawImage();
			$this->drawTitle($Vrh1qulr0iaaPoints);
			$this->drawValueLabels($Vrh1qulr0iaaPoints, $V4zbr4i0hzcr);
			$this->drawBoxBackground($Vrh1qulr0iaaPoints);
				foreach($Vgkictlptq2d['structures'] as $Vec5hzvzuawo =>  $Vlhi02kz1eczStructure) {
					$Vrh1qulr0iaaPoints2 = $this->calculateGraph($Vlhi02kz1eczStructure);
					$this->drawColumns($Vrh1qulr0iaaPoints2, $Vlhi02kz1eczStructure, ($Vec5hzvzuawo!=1));
				}
			$this->drawVerticaldividers($Vrh1qulr0iaaPoints);
			$this->drawLabel($Vrh1qulr0iaaPoints);
			$this->drawBoxBorder($Vrh1qulr0iaaPoints);
			$this->drawAverage($Vrh1qulr0iaaPoints, $V4zbr4i0hzcr);
			$this->drawZero($Vrh1qulr0iaaPoints);
			
			
			
		}
		catch(Exception $Vzpuzrl4o1i3) {
			
			$this->parseError($Vzpuzrl4o1i3);
		}
		
		
		$this->parseImage();
	}



		
	public function parseExample(){
		
		$Vf5zqmgi2wdw['title'] = 'Example graph';
		$Vf5zqmgi2wdw['label'] = 'orders';
		$Vf5zqmgi2wdw['height'] = 400;
		$Vf5zqmgi2wdw['width'] = 300;
		
		
		$Vlhi02kz1ecz = array(
			'Jan' => 12,
			'Feb' => 25,
			'Mar' => 0,
			'Apr' => -7,
			'May' => 80,
			'Jun' => 67,
			'Jul' => 45,
			'Aug' => 66,
			'Sep' => -23,
			'Oct' => 23,
			'Nov' => 78,
			'Dec' => 23
		);
		
		
		$this->parse($Vlhi02kz1ecz, $Vf5zqmgi2wdw);

	}



} 






class horizontalLineGraph extends horizontalGraphBase {



		
	protected function drawColumn($Vcs0xakgmxzj, $Vwx2w13t3suy, $Vmfat1fjvd2l) {
		
		imageline($this->ip, $Vcs0xakgmxzj['line']['x1'], $Vcs0xakgmxzj['line']['y1'], $Vcs0xakgmxzj['line']['x2'], $Vcs0xakgmxzj['line']['y2'], $Vwx2w13t3suy);
	}



} 






class horizontalSimpleColumnGraph extends horizontalGraphBase {



		
	protected function drawColumn($Vcs0xakgmxzj, $Vwx2w13t3suy, $Vmfat1fjvd2l) {
		
		imagefilledrectangle($this->ip, $Vcs0xakgmxzj['bar']['x1'], $Vcs0xakgmxzj['bar']['y1'], $Vcs0xakgmxzj['bar']['x3'], $Vcs0xakgmxzj['bar']['y3'], $Vwx2w13t3suy);	
	}



} 






class horizontalColumnGraph extends horizontalGraphBase {



		
	protected function drawColumn($Vcs0xakgmxzj, $Vwx2w13t3suy, $Vmfat1fjvd2l) {
		
		imagefilledrectangle($this->ip, $Vcs0xakgmxzj['shadowbar']['x1'], $Vcs0xakgmxzj['shadowbar']['y1'], $Vcs0xakgmxzj['shadowbar']['x3'], $Vcs0xakgmxzj['shadowbar']['y3'], $Vmfat1fjvd2l);	
		imagefilledrectangle($this->ip, $Vcs0xakgmxzj['foregroundbar']['x1'], $Vcs0xakgmxzj['foregroundbar']['y1'], $Vcs0xakgmxzj['foregroundbar']['x3'], $Vcs0xakgmxzj['foregroundbar']['y3'], $Vwx2w13t3suy);	
	}



} 






class horizontalPolygonGraph extends horizontalGraphBase {



		
	protected function drawColumn($Vcs0xakgmxzj, $Vwx2w13t3suy, $Vmfat1fjvd2l) {
		
		imagefilledpolygon ($this->ip , $Vcs0xakgmxzj['poly'] , count( $Vcs0xakgmxzj['poly']) / 2 ,$Vwx2w13t3suy);
	}



} 






class verticalLineGraph extends verticalGraphBase {



		
	protected function drawColumn($Vcs0xakgmxzj, $Vwx2w13t3suy, $Vmfat1fjvd2l) {
		
		imageline($this->ip, $Vcs0xakgmxzj['line']['x1'], $Vcs0xakgmxzj['line']['y1'], $Vcs0xakgmxzj['line']['x2'], $Vcs0xakgmxzj['line']['y2'], $Vwx2w13t3suy);
	}



} 






class verticalSimpleColumnGraph extends verticalGraphBase {



		
	protected function drawColumn($Vcs0xakgmxzj, $Vwx2w13t3suy, $Vmfat1fjvd2l) {
		
		imagefilledrectangle($this->ip, $Vcs0xakgmxzj['bar']['x1'], $Vcs0xakgmxzj['bar']['y1'], $Vcs0xakgmxzj['bar']['x3'], $Vcs0xakgmxzj['bar']['y3'], $Vwx2w13t3suy);	
	}



} 






class verticalColumnGraph extends verticalGraphBase {



		
	protected function drawColumn($Vcs0xakgmxzj, $Vwx2w13t3suy, $Vmfat1fjvd2l) {
		
		imagefilledrectangle($this->ip, $Vcs0xakgmxzj['shadowbar']['x1'], $Vcs0xakgmxzj['shadowbar']['y1'], $Vcs0xakgmxzj['shadowbar']['x3'], $Vcs0xakgmxzj['shadowbar']['y3'], $Vmfat1fjvd2l);	
		imagefilledrectangle($this->ip, $Vcs0xakgmxzj['foregroundbar']['x1'], $Vcs0xakgmxzj['foregroundbar']['y1'], $Vcs0xakgmxzj['foregroundbar']['x3'], $Vcs0xakgmxzj['foregroundbar']['y3'], $Vwx2w13t3suy);	
	}



} 






class verticalPolygonGraph extends verticalGraphBase {



		
	protected function drawColumn($Vcs0xakgmxzj, $Vwx2w13t3suy, $Vmfat1fjvd2l) {
		
		imagefilledpolygon ($this->ip , $Vcs0xakgmxzj['poly'] , 5 ,$Vwx2w13t3suy);
	}



} 

?>