<?php

class Format {

	
	protected $Vpjnfv14aozh = array();

	
	protected $Vps4rgd5soft = null;

	
	public function factory($Vlhi02kz1ecz, $Vubflrjx3liv = null)
	{
		
		$V2ekmfbjpi31 = __CLASS__;
		return new $V2ekmfbjpi31($Vlhi02kz1ecz, $Vubflrjx3liv);
	}

	
	public function __construct($Vlhi02kz1ecz = null, $Vubflrjx3liv = null)
	{
		get_instance()->load->helper('inflector');

		
		if ($Vubflrjx3liv !== null)
		{
			if (method_exists($this, '_from_' . $Vubflrjx3liv))
			{
				$Vlhi02kz1ecz = call_user_func(array($this, '_from_' . $Vubflrjx3liv), $Vlhi02kz1ecz);
			}

			else
			{
				throw new Exception('Format class does not support conversion from "' . $Vubflrjx3liv . '".');
			}
		}

		$this->_data = $Vlhi02kz1ecz;
	}

	

	public function to_array($Vlhi02kz1ecz = null)
	{
		
		if ($Vlhi02kz1ecz === null and ! func_num_args())
		{
			$Vlhi02kz1ecz = $this->_data;
		}

		$Vyixov5mil3d = array();

		foreach ((array) $Vlhi02kz1ecz as $Vzls01jplmeq => $Vn5ykvkgiw10)
		{
			if (is_object($Vn5ykvkgiw10) or is_array($Vn5ykvkgiw10))
			{
				$Vyixov5mil3d[$Vzls01jplmeq] = $this->to_array($Vn5ykvkgiw10);
			}

			else
			{
				$Vyixov5mil3d[$Vzls01jplmeq] = $Vn5ykvkgiw10;
			}
		}

		return $Vyixov5mil3d;
	}

	
	public function to_xml($Vlhi02kz1ecz = null, $Vxgvb5p1fuq0 = null, $Vqzw1c5wqibb = 'xml')
	{
		if ($Vlhi02kz1ecz === null and ! func_num_args())
		{
			$Vlhi02kz1ecz = $this->_data;
		}

		
		if (ini_get('zend.ze1_compatibility_mode') == 1)
		{
			ini_set('zend.ze1_compatibility_mode', 0);
		}

		if ($Vxgvb5p1fuq0 === null)
		{
			$Vxgvb5p1fuq0 = simplexml_load_string("<?xml version='1.0' encoding='utf-8'?><$Vqzw1c5wqibb />");
		}

		
		if ( ! is_array($Vlhi02kz1ecz) AND ! is_object($Vlhi02kz1ecz))
		{
			$Vlhi02kz1ecz = (array) $Vlhi02kz1ecz;
		}

		foreach ($Vlhi02kz1ecz as $Vzls01jplmeq => $Vn5ykvkgiw10)
		{

			
			if(is_bool($Vn5ykvkgiw10))
			{
				$Vn5ykvkgiw10 = (int) $Vn5ykvkgiw10;
			}

			
			if (is_numeric($Vzls01jplmeq))
			{
				
				$Vzls01jplmeq = (singular($Vqzw1c5wqibb) != $Vqzw1c5wqibb) ? singular($Vqzw1c5wqibb) : 'item';
			}

			
			$Vzls01jplmeq = preg_replace('/[^a-z_\-0-9]/i', '', $Vzls01jplmeq);

			if ($Vzls01jplmeq === '_attributes' && (is_array($Vn5ykvkgiw10) || is_object($Vn5ykvkgiw10)))
			{
				$V2lqebftqhig = $Vn5ykvkgiw10;
				if (is_object($V2lqebftqhig)) $V2lqebftqhig = get_object_vars($V2lqebftqhig);
				
				foreach ($V2lqebftqhig as $Vxsd0dmlqkvk => $Voydy2te5lh3)
				{
					$Vxgvb5p1fuq0->addAttribute($Vxsd0dmlqkvk, $Voydy2te5lh3);
				}
			}
			
			else if (is_array($Vn5ykvkgiw10) || is_object($Vn5ykvkgiw10))
			{
				$Vvgw1ik0yug0 = $Vxgvb5p1fuq0->addChild($Vzls01jplmeq);

				
				$this->to_xml($Vn5ykvkgiw10, $Vvgw1ik0yug0, $Vzls01jplmeq);
			}
			else
			{
				
				$Vn5ykvkgiw10 = htmlspecialchars(html_entity_decode($Vn5ykvkgiw10, ENT_QUOTES, 'UTF-8'), ENT_QUOTES, "UTF-8");

				$Vxgvb5p1fuq0->addChild($Vzls01jplmeq, $Vn5ykvkgiw10);
			}
		}

		return $Vxgvb5p1fuq0->asXML();
	}

	
	public function to_html()
	{
		$Vlhi02kz1ecz = (array)$this->_data;

		
		if (isset($Vlhi02kz1ecz[0]) && is_array($Vlhi02kz1ecz[0]))
		{
			$Vv4yioxcrdls = array_keys($Vlhi02kz1ecz[0]);
		}

		
		else
		{
			$Vv4yioxcrdls = array_keys($Vlhi02kz1ecz);
			$Vlhi02kz1ecz = array($Vlhi02kz1ecz);
		}

		$Vilx3jtuknjp = get_instance();
		$Vilx3jtuknjp->load->library('table');

		$Vilx3jtuknjp->table->set_heading($Vv4yioxcrdls);

		foreach ($Vlhi02kz1ecz as &$Vgr5l53dojok)
		{
			$Vilx3jtuknjp->table->add_row($Vgr5l53dojok);
		}

		return $Vilx3jtuknjp->table->generate();
	}

	
	public function to_csv()
	{
		$Vlhi02kz1ecz = (array)$this->_data;

		
		if (isset($Vlhi02kz1ecz[0]) && is_array($Vlhi02kz1ecz[0]))
		{
			$Vv4yioxcrdls = array_keys($Vlhi02kz1ecz[0]);
		}

		
		else
		{
			$Vv4yioxcrdls = array_keys($Vlhi02kz1ecz);
			$Vlhi02kz1ecz = array($Vlhi02kz1ecz);
		}

		$Vkfk4odv4bg4 = '"'.implode('","', $Vv4yioxcrdls).'"'.PHP_EOL;
		foreach ($Vlhi02kz1ecz as &$Vgr5l53dojok)
		{
            if (is_array($Vgr5l53dojok)) {
                throw new Exception('Format class does not support multi-dimensional arrays');
            } else {
                $Vgr5l53dojok    = str_replace('"', '""', $Vgr5l53dojok); 
                $Vkfk4odv4bg4 .= '"'.implode('","', $Vgr5l53dojok).'"'.PHP_EOL;                
            }

		}

		return $Vkfk4odv4bg4;
	}

	
	public function to_json()
	{
		$Vlebcrwvidqg = isset($Vwa3vss33ot5GET['callback']) ? $Vwa3vss33ot5GET['callback'] : '';
		if ($Vlebcrwvidqg === '')
		{
			return json_encode($this->_data);
		}
		
		else if (preg_match('/^[a-z_\$][a-z0-9\$Vwa3vss33ot5]*(\.[a-z_\$][a-z0-9\$Vwa3vss33ot5]*)*$/i', $Vlebcrwvidqg))
		{
			
			header("Content-Type: application/javascript");
			return $Vlebcrwvidqg . "(" . json_encode($this->_data) . ");";
		}
		else
		{
			
			$this->_data['warning'] = "invalid jsonp callback provided: ".$Vlebcrwvidqg;
			return json_encode($this->_data);
		}
	}

	
	public function to_serialized()
	{
		return serialize($this->_data);
	}

	
	public function to_php()
	{
		return var_export($this->_data, TRUE);
	}

	
	protected function _from_xml($Vy2nerf30x3h)
	{
		return $Vy2nerf30x3h ? (array) simplexml_load_string($Vy2nerf30x3h, 'SimpleXMLElement', LIBXML_NOCDATA) : array();
	}

	
	
	protected function _from_csv($Vy2nerf30x3h)
	{
		$Vlhi02kz1ecz = array();

		
		$Vgr5l53dojoks = explode("\n", trim($Vy2nerf30x3h));
		$Vv4yioxcrdls = explode(',', array_shift($Vgr5l53dojoks));
		foreach ($Vgr5l53dojoks as $Vgr5l53dojok)
		{
			
			$Vlhi02kz1ecz_fields = explode('","', trim(substr($Vgr5l53dojok, 1, -1)));

			if (count($Vlhi02kz1ecz_fields) == count($Vv4yioxcrdls))
			{
				$Vlhi02kz1ecz[] = array_combine($Vv4yioxcrdls, $Vlhi02kz1ecz_fields);
			}
		}

		return $Vlhi02kz1ecz;
	}

	
	private function _from_json($Vy2nerf30x3h)
	{
		return json_decode(trim($Vy2nerf30x3h));
	}

	
	private function _from_serialize($Vy2nerf30x3h)
	{
		return unserialize(trim($Vy2nerf30x3h));
	}

}


