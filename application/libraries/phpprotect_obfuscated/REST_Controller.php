<?php defined('BASEPATH') OR exit('No direct script access allowed');


abstract class REST_Controller extends CI_Controller
{
	
	protected $Vr3x5g1h1lox = NULL;

	
	protected $Vre1yh05sn2a = array();

	
	protected $Vzc4b5ak1zch = array('get', 'delete', 'post', 'put', 'options', 'patch', 'head');

	
	protected $Vfpajvrgde23 = NULL;

	
	protected $Vk3b0k2wbztk = NULL;

	
	protected $Vbqj2j2qtmqa = NULL;

	
	protected $Vo0sodfxec3t = array();

	
	protected $Vdb4djqymuev = array();

	
	protected $Vs2mh0wyoiah = '';	

	
	protected $Vvc5ohzciznq = array();

	
	protected $Vxcsjwbzxg1k = array();

	
	protected $Vdjeadogj2ku = array();

	
	protected $V0wk12ghnzsk = array();

	
	protected $Vqt1xa4ijsow = array();

	
	protected $Vxohfizd2ejk = array();

	
	protected $V25f4fur1mul = TRUE;

	
	protected $Vdr4hctmduwp = FALSE;

	
	protected $Vy0mcap4ggpx = '';

	
	protected $Vzkk2qkybcrp = '';	
	
	
	protected $V4ipg2j1ubjc = '';		

	
	protected $Vso1acofxzbx = array(
		'xml' => 'application/xml',
		'json' => 'application/json',
		'jsonp' => 'application/javascript',
		'serialized' => 'application/vnd.php.serialized',
		'php' => 'text/plain',
		'html' => 'text/html',
		'csv' => 'application/csv'
	);
	
	
	protected $Vcmjjow2emf3;

	
	protected function early_checks()
	{

	}

	
	public function __construct()
	{
		parent::__construct();

		
		$this->_start_rtime = microtime(TRUE);		

		
		$this->request = new stdClass();
		$this->response = new stdClass();
		$this->rest = new stdClass();

		$this->_zlib_oc = @ini_get('zlib.output_compression');

		
		$this->load->config('rest');

		
		$this->request = new stdClass();

		
		if ($this->config->item('rest_ip_blacklist_enabled'))
		{
			$this->_check_blacklist_auth();
		}

		
		$this->request->ssl = $this->_detect_ssl();

		
		$this->request->method = $this->_detect_method();

		
		if ( ! isset($this->{'_'.$this->request->method.'_args'}))
		{
			$this->{'_'.$this->request->method.'_args'} = array();
		}

		
		$this->_get_args = array_merge($this->_get_args, $this->uri->ruri_to_assoc());

		
		$this->load->library('format');

		
		$this->request->format = $this->_detect_input_format();

		
		$this->request->body = NULL;

		$this->{'_parse_' . $this->request->method}();

		
		if ($this->request->format and $this->request->body)
		{
			$this->request->body = $this->format->factory($this->request->body, $this->request->format)->to_array();
			
			$this->{'_'.$this->request->method.'_args'} = $this->request->body;
		}

		
		$this->_args = array_merge($this->_get_args, $this->_options_args, $this->_patch_args, $this->_head_args , $this->_put_args, $this->_post_args, $this->_delete_args, $this->{'_'.$this->request->method.'_args'});

		
		$this->response = new stdClass();
		$this->response->format = $this->_detect_output_format();

		
		$this->response->lang = $this->_detect_lang();

		
		$this->early_checks();

		
		$this->auth_override = $this->_auth_override_check();

		
		if ($this->auth_override !== TRUE)
		{
			if (strtolower( $this->config->item('rest_auth') ) == 'basic')
			{
				$this->_prepare_basic_auth();
			}
			elseif (strtolower( $this->config->item('rest_auth') ) == 'digest')
			{
				$this->_prepare_digest_auth();
			}
			elseif ($this->config->item('rest_ip_whitelist_enabled'))
			{
				$this->_check_whitelist_auth();
			}
		}

		$this->rest = new StdClass();
		
		if (config_item('rest_database_group') AND (config_item('rest_enable_keys') OR config_item('rest_enable_logging')))
		{
			$this->rest->db = $this->load->database(config_item('rest_database_group'), TRUE);
		}

		
		elseif (property_exists($this, "db"))
		{
			$this->rest->db = $this->db;
		}

		
		if (config_item('rest_enable_keys'))
		{
			$this->_allow = $this->_detect_api_key();
		}

		
		if ( ! $this->input->is_ajax_request() AND config_item('rest_ajax_only'))
		{
			$this->response(array('status' => false, 'error' => 'Only AJAX requests are accepted.'), 505);
		}
	}

		
	public function __destruct()
	{
		
		$this->_end_rtime = microtime(TRUE);
		
		if (config_item('rest_enable_logging'))
		{
			$this->_log_access_time();
		}
		
		
	}

	
	public function _remap($Vt2wmso1tygu, $Vygsokty0n2o)
	{
		
		if (config_item('force_https') AND !$this->_detect_ssl())
		{
			$this->response(array('status' => false, 'error' => 'Unsupported protocol'), 403);
		}

		$Vj5sbttr5ae3 = '/^(.*)\.('.implode('|', array_keys($this->_supported_formats)).')$/';
		if (preg_match($Vj5sbttr5ae3, $Vt2wmso1tygu, $V3kw1lp3hjf5))
		{
			$Vt2wmso1tygu = $V3kw1lp3hjf5[1];
		}

		$Vlqfl1oiplr2 = $Vt2wmso1tygu.'_'.$this->request->method;

		
		$Vtreaknhnbs3 = !(isset($this->methods[$Vlqfl1oiplr2]['log']) AND $this->methods[$Vlqfl1oiplr2]['log'] == FALSE);

		
		$Vfxi3sei2sfi = ! (isset($this->methods[$Vlqfl1oiplr2]['key']) AND $this->methods[$Vlqfl1oiplr2]['key'] == FALSE);

		
		if (config_item('rest_enable_keys') AND $Vfxi3sei2sfi AND $this->_allow === FALSE)
		{
			
			if (!$this->_check_access())
			{
				$this->response(array('status' => false, 'error' => 'This API key does not have access to the requested controller.'), 401);
			}

			if (config_item('rest_enable_logging') AND $Vtreaknhnbs3)
			{
				$this->_log_request();
			}

			$this->response(array('status' => false, 'error' => 'Invalid API Key.'), 403);
		}

		
		if ( ! method_exists($this, $Vlqfl1oiplr2))
		{
			$this->response(array('status' => false, 'error' => 'Unknown method.'), 404);
		}

		
		if (config_item('rest_enable_keys') AND !empty($this->rest->key))
		{
			
			if (config_item('rest_enable_limits') AND !$this->_check_limit($Vlqfl1oiplr2))
			{
				$this->response(array('status' => false, 'error' => 'This API key has reached the hourly limit for this method.'), 401);
			}

			
			$Vgqkd302z3hr = isset($this->methods[$Vlqfl1oiplr2]['level']) ? $this->methods[$Vlqfl1oiplr2]['level'] : 0;

			
			$Vtnauubfvsb5 = $Vgqkd302z3hr <= $this->rest->level;

			
			if (config_item('rest_enable_logging') AND $Vtreaknhnbs3)
			{
				$this->_log_request($Vtnauubfvsb5);
			}

			
			$Vtnauubfvsb5 OR $this->response(array('status' => false, 'error' => 'This API key does not have enough permissions.'), 401);
		}

		
		else if (config_item('rest_enable_logging') AND $Vtreaknhnbs3)
		{
			$this->_log_request($Vtnauubfvsb5 = TRUE);
		}

		
		$this->_fire_method(array($this, $Vlqfl1oiplr2), $Vygsokty0n2o);
	}

	
	protected function _fire_method($Vjgooorenn3z, $V3yt0rtng0yi)
	{
		call_user_func_array($Vjgooorenn3z, $V3yt0rtng0yi);
	}

	
	public function response($Vlhi02kz1ecz = null, $Vdpikha2nbkg = null)
	{
		global $Vviyn0qvqyaq;

		
		if ($Vlhi02kz1ecz === NULL && $Vdpikha2nbkg === null)
		{
			$Vdpikha2nbkg = 404;

			
			$Vkfk4odv4bg4 = NULL;
		}

		
		else if ($Vlhi02kz1ecz === NULL && is_numeric($Vdpikha2nbkg))
		{
			$Vkfk4odv4bg4 = NULL;
		}

		
		else
		{
			
			if ($Vviyn0qvqyaq->item('compress_output') === TRUE && $this->_zlib_oc == FALSE)
			{
				if (extension_loaded('zlib'))
				{
					if (isset($_SERVER['HTTP_ACCEPT_ENCODING']) AND strpos($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip') !== FALSE)
					{
						ob_start('ob_gzhandler');
					}
				}
			}

			is_numeric($Vdpikha2nbkg) OR $Vdpikha2nbkg = 200;

			
			
			if (method_exists($this, '_format_'.$this->response->format))
			{
				
				header('Content-Type: '.$this->_supported_formats[$this->response->format]);

				$Vkfk4odv4bg4 = $this->{'_format_'.$this->response->format}($Vlhi02kz1ecz);
			}

			
			elseif (method_exists($this->format, 'to_'.$this->response->format))
			{
				
				header('Content-Type: '.$this->_supported_formats[$this->response->format]);

				$Vkfk4odv4bg4 = $this->format->factory($Vlhi02kz1ecz)->{'to_'.$this->response->format}();
			}

			
			else
			{
				$Vkfk4odv4bg4 = $Vlhi02kz1ecz;
			}
		}

		set_status_header($Vdpikha2nbkg);

		
		
		
		
		if ( ! $this->_zlib_oc && ! $Vviyn0qvqyaq->item('compress_output'))
		{
			header('Content-Length: ' . strlen($Vkfk4odv4bg4));
		}

		exit($Vkfk4odv4bg4);
	}

	
	protected function _detect_ssl()
	{
    		return (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on");
	}


	
	protected function _detect_input_format()
	{
		if ($this->input->server('CONTENT_TYPE'))
		{
			
			foreach ($this->_supported_formats as $Virpwgx3kncm => $Vxzviz1k2bbw)
			{
				if (strpos($Vd0xweeh20yi = $this->input->server('CONTENT_TYPE'), ';'))
				{
					$Vd0xweeh20yi = current(explode(';', $Vd0xweeh20yi));
				}

				if ($Vd0xweeh20yi == $Vxzviz1k2bbw)
				{
					return $Virpwgx3kncm;
				}
			}
		}

		return NULL;
	}

	
	protected function _detect_output_format()
	{
		$Vj5sbttr5ae3 = '/\.('.implode('|', array_keys($this->_supported_formats)).')$/';

		
		if (!$this->_get_args AND preg_match($Vj5sbttr5ae3, $this->uri->uri_string(), $V3kw1lp3hjf5))
		{
			return $V3kw1lp3hjf5[1];
		}

		
		elseif ($this->_get_args AND !is_array(end($this->_get_args)) AND preg_match($Vj5sbttr5ae3, end($this->_get_args), $V3kw1lp3hjf5))
		{
			
			$Vnpvnzgjsxq5 = end(array_keys($this->_get_args));

			
			$this->_get_args[$Vnpvnzgjsxq5] = preg_replace($Vj5sbttr5ae3, '', $this->_get_args[$Vnpvnzgjsxq5]);
			$this->_args[$Vnpvnzgjsxq5] = preg_replace($Vj5sbttr5ae3, '', $this->_args[$Vnpvnzgjsxq5]);

			return $V3kw1lp3hjf5[1];
		}

		
		if (isset($this->_get_args['format']) AND array_key_exists($this->_get_args['format'], $this->_supported_formats))
		{
			return $this->_get_args['format'];
		}

		
		if ($this->config->item('rest_ignore_http_accept') === FALSE AND $this->input->server('HTTP_ACCEPT'))
		{
			
			foreach (array_keys($this->_supported_formats) as $Virpwgx3kncm)
			{
				
				if (strpos($this->input->server('HTTP_ACCEPT'), $Virpwgx3kncm) !== FALSE)
				{
					
					if ($Virpwgx3kncm != 'html' AND $Virpwgx3kncm != 'xml')
					{

						return $Virpwgx3kncm;
					}

					
					else
					{
						
						if ($Virpwgx3kncm == 'html' AND strpos($this->input->server('HTTP_ACCEPT'), 'xml') === FALSE)
						{
							return $Virpwgx3kncm;
						}

						
						elseif ($Virpwgx3kncm == 'xml' AND strpos($this->input->server('HTTP_ACCEPT'), 'html') === FALSE)
						{
							return $Virpwgx3kncm;
						}
					}
				}
			}
		} 

		
		if ( ! empty($this->rest_format))
		{
			return $this->rest_format;
		}

		
		return config_item('rest_default_format');
	}

	
	protected function _detect_method()
	{
		$Vjgooorenn3z = strtolower($this->input->server('REQUEST_METHOD'));

		if ($this->config->item('enable_emulate_request'))
		{
			if ($this->input->post('_method'))
			{
				$Vjgooorenn3z = strtolower($this->input->post('_method'));
			}
			elseif ($this->input->server('HTTP_X_HTTP_METHOD_OVERRIDE'))
			{
				$Vjgooorenn3z = strtolower($this->input->server('HTTP_X_HTTP_METHOD_OVERRIDE'));
			}
		}

		if (in_array($Vjgooorenn3z, $this->allowed_http_methods) && method_exists($this, '_parse_' . $Vjgooorenn3z))
		{
			return $Vjgooorenn3z;
		}

		return 'get';
	}

	
	protected function _detect_api_key()
	{
		
		$Vxflxef5fcsm = config_item('rest_key_name');

		
		$Votf4li4fyck = 'HTTP_'.strtoupper(str_replace('-', '_', $Vxflxef5fcsm));

		$this->rest->key = NULL;
		$this->rest->level = NULL;
		$this->rest->user_id = NULL;
		$this->rest->ignore_limits = FALSE;

		
		if (($Vzls01jplmeq = isset($this->_args[$Vxflxef5fcsm]) ? $this->_args[$Vxflxef5fcsm] : $this->input->server($Votf4li4fyck)))
		{
			if ( ! ($Vgr5l53dojok = $this->rest->db->where(config_item('rest_key_column'), $Vzls01jplmeq)->get(config_item('rest_keys_table'))->row()))
			{
				return FALSE;
			}

			$this->rest->key = $Vgr5l53dojok->{config_item('rest_key_column')};

			isset($Vgr5l53dojok->user_id) AND $this->rest->user_id = $Vgr5l53dojok->user_id;
			isset($Vgr5l53dojok->level) AND $this->rest->level = $Vgr5l53dojok->level;
			isset($Vgr5l53dojok->ignore_limits) AND $this->rest->ignore_limits = $Vgr5l53dojok->ignore_limits;

			$this->_apiuser =  $Vgr5l53dojok;
			
			
			if(!empty($Vgr5l53dojok->is_private_key))
			{
				
				if(isset($Vgr5l53dojok->ip_addresses))
				{
					
					$V4viqne453sd = explode(",", $Vgr5l53dojok->ip_addresses);
					$Vmjkgsqwgaxj = FALSE;

					foreach($V4viqne453sd as $Vehr30j0ih35)
					{
						if($this->input->ip_address() == trim($Vehr30j0ih35))
						{
							
							$Vmjkgsqwgaxj = TRUE;
							break;
						}
					}

					return $Vmjkgsqwgaxj;
				}
				else
				{
					
					return FALSE;
				}
			}

			return $Vgr5l53dojok;
		}

		
		return FALSE;
	}

	
	protected function _detect_lang()
	{
		if ( ! $V5ln3110jpyg = $this->input->server('HTTP_ACCEPT_LANGUAGE'))
		{
			return NULL;
		}

		
		if (strpos($V5ln3110jpyg, ',') !== FALSE)
		{
			$V5ln3110jpygs = explode(',', $V5ln3110jpyg);

			$Vqddlrkd2xvp = array();
			$Vvmcb2huerp4 = 1;
			foreach ($V5ln3110jpygs as $V5ln3110jpyg)
			{
				
				list($V5ln3110jpyg) = explode(';', $V5ln3110jpyg);
				$Vqddlrkd2xvp[] = trim($V5ln3110jpyg);
			}

			return $Vqddlrkd2xvp;
		}

		
		return $V5ln3110jpyg;
	}

	
	protected function _log_request($Vtnauubfvsb5 = FALSE)
	{
		$V2ypigiqhuka = $this->rest->db->insert(config_item('rest_logs_table'), array(
					'uri' => $this->uri->uri_string(),
					'method' => $this->request->method,
					'params' => $this->_args ? (config_item('rest_logs_json_params') ? json_encode($this->_args) : serialize($this->_args)) : null,
					'api_key' => isset($this->rest->key) ? $this->rest->key : '',
					'ip_address' => $this->input->ip_address(),
					'time' => function_exists('now') ? now() : time(),
					'authorized' => $Vtnauubfvsb5
				));

		$this->_insert_id = $this->rest->db->insert_id();
		return $V2ypigiqhuka;
	}

	
	protected function _check_limit($Vlqfl1oiplr2)
	{
		
		if ( ! empty($this->rest->ignore_limits) OR !isset($this->methods[$Vlqfl1oiplr2]['limit']))
		{
			
			return TRUE;
		}

		
		$V4rbtluhk4g3 = $this->methods[$Vlqfl1oiplr2]['limit'];

		
		$Vc5gvi0wzj31 = $this->rest->db
				->where('uri', $this->uri->uri_string())
				->where('api_key', $this->rest->key)
				->get(config_item('rest_limits_table'))
				->row();

		
		if ( ! $Vc5gvi0wzj31 OR $Vc5gvi0wzj31->hour_started < time() - (60 * 60))
		{
			
			$this->rest->db->insert(config_item('rest_limits_table'), array(
				'uri' => $this->uri->uri_string(),
				'api_key' => isset($this->rest->key) ? $this->rest->key : '',
				'count' => 1,
				'hour_started' => time()
			));
		}

		
		else
		{
			
			if ($Vc5gvi0wzj31->count >= $V4rbtluhk4g3)
			{
				return FALSE;
			}

			$this->rest->db
					->where('uri', $this->uri->uri_string())
					->where('api_key', $this->rest->key)
					->set('count', 'count + 1', FALSE)
					->update(config_item('rest_limits_table'));
		}

		return TRUE;
	}

	
	protected function _auth_override_check()
	{

		
		$this->overrides_array = $this->config->item('auth_override_class_method');

		
		if (empty($this->overrides_array))
		{
			return false;
		}

		
		if (empty($this->overrides_array[$this->router->class][$this->router->method]))
		{
			return false;
		}

		
		if ($this->overrides_array[$this->router->class][$this->router->method] == 'none')
		{
			return true;
		}

		
		if ($this->overrides_array[$this->router->class][$this->router->method] == 'basic')
		{
			$this->_prepare_basic_auth();
			return true;
		}

		
		if ($this->overrides_array[$this->router->class][$this->router->method] == 'digest')
		{
			$this->_prepare_digest_auth();
			return true;
		}

		
		if ($this->overrides_array[$this->router->class][$this->router->method] == 'whitelist')
		{
			$this->_check_whitelist_auth();
			return true;
		}

		
		
		return false;
	}

	
	protected function _parse_get()
	{
		
		if ($this->input->is_cli_request()) {
			$V3yt0rtng0yi = $_SERVER['argv'];
			unset($V3yt0rtng0yi[0]);
			$_SERVER['QUERY_STRING'] =  $_SERVER['PATH_INFO'] = $_SERVER['REQUEST_URI'] = '/' . implode('/', $V3yt0rtng0yi) . '/';
		}

		
		parse_str(parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY), $V1zlk0ghlzlo);

		
		$this->_get_args = array_merge($this->_get_args, $V1zlk0ghlzlo);
	}

	
	protected function _parse_post()
	{
		$this->_post_args = $_POST;

		$this->request->format and $this->request->body = file_get_contents('php://input');
	}

	
	protected function _parse_put()
	{
		
		if ($this->request->format)
		{
			$this->request->body = file_get_contents('php://input');
		}

		
		else
		{
			parse_str(file_get_contents('php://input'), $this->_put_args);
		}

	}

	
	protected function _parse_head()
	{
		
		parse_str(parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY), $V2rnxujpcp1i);

		
		$this->_head_args = array_merge($this->_head_args, $V2rnxujpcp1i);
	}

	
	protected function _parse_options()
	{
		
		parse_str(parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY), $V04epexbpn25);

		
		$this->_options_args = array_merge($this->_options_args, $V04epexbpn25);
	}

	
	protected function _parse_patch()
	{
		
		if ($this->request->format)
		{
			$this->request->body = file_get_contents('php://input');
		}

		
		else
		{
			parse_str(file_get_contents('php://input'), $this->_patch_args);
		}
	}

	
	protected function _parse_delete()
	{
		
		parse_str(file_get_contents('php://input'), $this->_delete_args);
	}

	

	
	public function get($Vzls01jplmeq = NULL, $Vwf5t2rylbbt = TRUE)
	{
		if ($Vzls01jplmeq === NULL)
		{
			return $this->_get_args;
		}

		return array_key_exists($Vzls01jplmeq, $this->_get_args) ? $this->_xss_clean($this->_get_args[$Vzls01jplmeq], $Vwf5t2rylbbt) : FALSE;
	}

	
	public function options($Vzls01jplmeq = NULL, $Vwf5t2rylbbt = TRUE)
	{
		if ($Vzls01jplmeq === NULL) {
			return $this->_options_args;
		}

		return array_key_exists($Vzls01jplmeq, $this->_options_args) ? $this->_xss_clean($this->_options_args[$Vzls01jplmeq], $Vwf5t2rylbbt) : FALSE;
	}

	
	public function head($Vzls01jplmeq = NULL, $Vwf5t2rylbbt = TRUE)
	{
		if ($Vzls01jplmeq === NULL) {
			return $this->head_args;
		}

		return array_key_exists($Vzls01jplmeq, $this->head_args) ? $this->_xss_clean($this->head_args[$Vzls01jplmeq], $Vwf5t2rylbbt) : FALSE;
	}

	
	public function post($Vzls01jplmeq = NULL, $Vwf5t2rylbbt = TRUE)
	{
		if ($Vzls01jplmeq === NULL)
		{
			return $this->_post_args;
		}

		return array_key_exists($Vzls01jplmeq, $this->_post_args) ? $this->_xss_clean($this->_post_args[$Vzls01jplmeq], $Vwf5t2rylbbt) : FALSE;
	}

	
	public function put($Vzls01jplmeq = NULL, $Vwf5t2rylbbt = TRUE)
	{
		if ($Vzls01jplmeq === NULL)
		{
			return $this->_put_args;
		}

		return array_key_exists($Vzls01jplmeq, $this->_put_args) ? $this->_xss_clean($this->_put_args[$Vzls01jplmeq], $Vwf5t2rylbbt) : FALSE;
	}

	
	public function delete($Vzls01jplmeq = NULL, $Vwf5t2rylbbt = TRUE)
	{
		if ($Vzls01jplmeq === NULL)
		{
			return $this->_delete_args;
		}

		return array_key_exists($Vzls01jplmeq, $this->_delete_args) ? $this->_xss_clean($this->_delete_args[$Vzls01jplmeq], $Vwf5t2rylbbt) : FALSE;
	}

	
	public function patch($Vzls01jplmeq = NULL, $Vwf5t2rylbbt = TRUE)
	{
		if ($Vzls01jplmeq === NULL)
		{
			return $this->_patch_args;
		}

		return array_key_exists($Vzls01jplmeq, $this->_patch_args) ? $this->_xss_clean($this->_patch_args[$Vzls01jplmeq], $Vwf5t2rylbbt) : FALSE;
	}

	
	protected function _xss_clean($Vf0saxnurylc, $Vqte2cij50l2)
	{
		if (CI_VERSION < 2)
		{
			return $Vqte2cij50l2 ? $this->input->xss_clean($Vf0saxnurylc) : $Vf0saxnurylc;
		}

		return $Vqte2cij50l2 ? $this->security->xss_clean($Vf0saxnurylc) : $Vf0saxnurylc;
	}

	
	public function validation_errors()
	{
		$Vy2nerf30x3h = strip_tags($this->form_validation->error_string());

		return explode("\n", trim($Vy2nerf30x3h, "\n"));
	}

	

	
	protected function _perform_ldap_auth($V22nxblvio5w = '', $Vrpw3gbhleuo = NULL)
	{
		if (empty($V22nxblvio5w))
		{
			log_message('debug', 'LDAP Auth: failure, empty username');
			return false;
		}

		log_message('debug', 'LDAP Auth: Loading Config');

		$this->config->load('ldap.php', true);

		$Vjazknktana3 = $this->config->item('timeout', 'ldap');
		$Vytbepjaz0ba = $this->config->item('server', 'ldap');
		$V110aarjtgus = $this->config->item('port', 'ldap');
		$V4le2qjpkz2o = $this->config->item('binduser', 'ldap');
		$Vx3glyfeqlk0 = $this->config->item('bindpw', 'ldap');
		$Vfljwsdk5nzi = $this->config->item('basedn', 'ldap');

		log_message('debug', 'LDAP Auth: Connect to ' . $Vytbepjaz0ba);

		$Vllgojwhbdda['authrealm'] = $this->config->item('domain', 'ldap');

		
		$V5u4mbdwwshg = ldap_connect($Vytbepjaz0ba, $V110aarjtgus);

		if ($V5u4mbdwwshg) {

			log_message('debug', 'Setting timeout to ' . $Vjazknktana3 . ' seconds');

			ldap_set_option($V5u4mbdwwshg, LDAP_OPT_NETWORK_TIMEOUT, $Vjazknktana3);

			log_message('debug', 'LDAP Auth: Binding to ' . $Vytbepjaz0ba . ' with dn ' . $V4le2qjpkz2o);

			
			$Vlt5d11wqonz = ldap_bind($V5u4mbdwwshg, $V4le2qjpkz2o, $Vx3glyfeqlk0);

			
			if ($Vlt5d11wqonz) {
				log_message('debug', 'LDAP Auth: bind successful');
			} else {
				log_message('error', 'LDAP Auth: bind unsuccessful');
				return false;
			}

		}

		
		if (($Vndz5ma1jann = ldap_search( $V5u4mbdwwshg, $Vfljwsdk5nzi, "uid=$V22nxblvio5w")) == false) {
			log_message('error', 'LDAP Auth: User ' . $V22nxblvio5w . ' not found in search');
			return false;
		}

		if (ldap_count_entries($V5u4mbdwwshg, $Vndz5ma1jann) != 1) {
			log_message('error', 'LDAP Auth: failure, username ' . $V22nxblvio5w . 'found more than once');
			return false;
		}

		if (( $V5fwi11b310r = ldap_first_entry($V5u4mbdwwshg, $Vndz5ma1jann))== false) {
			log_message('error', 'LDAP Auth: failure, entry of searchresult could not be fetched');
			return false;
		}

		if (( $V55knigadh05 = ldap_get_dn($V5u4mbdwwshg, $V5fwi11b310r)) == false) {
			log_message('error', 'LDAP Auth: failure, user-dn could not be fetched');
			return false;
		}

		
		if (($Vz2ivpgeocum = ldap_bind($V5u4mbdwwshg, $V55knigadh05, $Vrpw3gbhleuo)) == false) {
			log_message('error', 'LDAP Auth: failure, username/password did not match: ' . $V55knigadh05);
			return false;
		}

		log_message('debug', 'LDAP Auth: Success ' . $V55knigadh05 . ' authenticated successfully');

		$this->_user_ldap_dn = $V55knigadh05;
		ldap_close($V5u4mbdwwshg);
		return true;
	}

	
	protected function _perform_library_auth($V22nxblvio5w = '', $Vrpw3gbhleuo = NULL)
	{
		if (empty($V22nxblvio5w))
		{
			log_message('debug', 'Library Auth: failure, empty username');
			return false;
		}

		$V3h5cvwqg4u0 = strtolower($this->config->item('auth_library_class'));
		$Vwbdvvddh2bt = strtolower($this->config->item('auth_library_function'));

		if (empty($V3h5cvwqg4u0))
		{
			log_message('debug', 'Library Auth: failure, empty auth_library_class');
			return false;
		}

		if (empty($Vwbdvvddh2bt))
		{
			log_message('debug', 'Library Auth: failure, empty auth_library_function');
			return false;
		}

		$this->load->library($V3h5cvwqg4u0);
		return $this->$V3h5cvwqg4u0->$Vwbdvvddh2bt($V22nxblvio5w, $Vrpw3gbhleuo);
	}

	
	protected function _check_login($V22nxblvio5w = '', $Vrpw3gbhleuo = NULL)
	{
		if (empty($V22nxblvio5w))
		{
			return FALSE;
		}

		$Vyy23vg33pae = strtolower($this->config->item('auth_source'));

		if ($Vyy23vg33pae == 'ldap')
		{
			log_message('debug', 'performing LDAP authentication for $V22nxblvio5w');
			return $this->_perform_ldap_auth($V22nxblvio5w, $Vrpw3gbhleuo);
		}

		if ($Vyy23vg33pae == 'library')
		{
			log_message('debug', 'performing Library authentication for $V22nxblvio5w');
			return $this->_perform_library_auth($V22nxblvio5w, $Vrpw3gbhleuo);
		}

		$Vf0saxnurylcid_logins = $this->config->item('rest_valid_logins');

		if ( ! array_key_exists($V22nxblvio5w, $Vf0saxnurylcid_logins))
		{
			return FALSE;
		}

		
		if ($Vrpw3gbhleuo !== NULL AND $Vf0saxnurylcid_logins[$V22nxblvio5w] != $Vrpw3gbhleuo)
		{
			return FALSE;
		}

		return TRUE;
	}

	
	protected function _prepare_basic_auth()
	{
		
		if (config_item('rest_ip_whitelist_enabled'))
		{
			$this->_check_whitelist_auth();
		}

		$V22nxblvio5w = NULL;
		$Vrpw3gbhleuo = NULL;

		
		if ($this->input->server('PHP_AUTH_USER'))
		{
			$V22nxblvio5w = $this->input->server('PHP_AUTH_USER');
			$Vrpw3gbhleuo = $this->input->server('PHP_AUTH_PW');
		}

		
		elseif ($this->input->server('HTTP_AUTHENTICATION'))
		{
			if (strpos(strtolower($this->input->server('HTTP_AUTHENTICATION')), 'basic') === 0)
			{
				list($V22nxblvio5w, $Vrpw3gbhleuo) = explode(':', base64_decode(substr($this->input->server('HTTP_AUTHORIZATION'), 6)));
			}
		}

		if ( ! $this->_check_login($V22nxblvio5w, $Vrpw3gbhleuo))
		{
			$this->_force_login();
		}
	}

	
	protected function _prepare_digest_auth()
	{
		
		if (config_item('rest_ip_whitelist_enabled'))
		{
			$this->_check_whitelist_auth();
		}

		$Vgkzygtely0c = uniqid(""); 
		
		
		if ($this->input->server('PHP_AUTH_DIGEST'))
		{
			$Vc1brnf0ji0s = $this->input->server('PHP_AUTH_DIGEST');
		}
		elseif ($this->input->server('HTTP_AUTHORIZATION'))
		{
			$Vc1brnf0ji0s = $this->input->server('HTTP_AUTHORIZATION');
		}
		else
		{
			$Vc1brnf0ji0s = "";
		}

		
		
		if (empty($Vc1brnf0ji0s))
		{
			$this->_force_login($Vgkzygtely0c);
		}

		
		preg_match_all('@(username|nonce|uri|nc|cnonce|qop|response)=[\'"]?([^\'",]+)@', $Vc1brnf0ji0s, $V3kw1lp3hjf5);
		$Vyfn0lmxoqy5 = (empty($V3kw1lp3hjf5[1]) || empty($V3kw1lp3hjf5[2])) ? array() : array_combine($V3kw1lp3hjf5[1], $V3kw1lp3hjf5[2]);

		if ( ! array_key_exists('username', $Vyfn0lmxoqy5) OR !$this->_check_login($Vyfn0lmxoqy5['username']))
		{
			$this->_force_login($Vgkzygtely0c);
		}

		$Vf0saxnurylcid_logins = $this->config->item('rest_valid_logins');
		$Vf0saxnurylcid_pass = $Vf0saxnurylcid_logins[$Vyfn0lmxoqy5['username']];

		
		$V4fevrzhqnnf = md5($Vyfn0lmxoqy5['username'].':'.$this->config->item('rest_realm').':'.$Vf0saxnurylcid_pass);
		$Vcx0x2vyuths = md5(strtoupper($this->request->method).':'.$Vyfn0lmxoqy5['uri']);
		$Vf0saxnurylcid_response = md5($V4fevrzhqnnf.':'.$Vyfn0lmxoqy5['nonce'].':'.$Vyfn0lmxoqy5['nc'].':'.$Vyfn0lmxoqy5['cnonce'].':'.$Vyfn0lmxoqy5['qop'].':'.$Vcx0x2vyuths);

		if ($Vyfn0lmxoqy5['response'] != $Vf0saxnurylcid_response)
		{
			set_status_header(401);
			exit;
		}
	}

	
	protected function _check_blacklist_auth()
	{
		$V55hjf3mo45h = explode(',', config_item('rest_ip_blacklist'));

		foreach ($V55hjf3mo45h AS &$Vvmcb2huerp4p)
		{
			$Vvmcb2huerp4p = trim($Vvmcb2huerp4p);
		}

		if (!in_array($this->input->ip_address(), $V55hjf3mo45h))
		{
			$this->response(array('status' => false, 'error' => 'IP Denied'), 401);
		}
	}

	
	protected function _check_whitelist_auth()
	{
		$Vjrvtevs2lnx = explode(',', config_item('rest_ip_whitelist'));

		array_push($Vjrvtevs2lnx, '127.0.0.1', '0.0.0.0');

		foreach ($Vjrvtevs2lnx AS &$Vvmcb2huerp4p)
		{
			$Vvmcb2huerp4p = trim($Vvmcb2huerp4p);
		}

		if ( ! in_array($this->input->ip_address(), $Vjrvtevs2lnx))
		{
			$this->response(array('status' => false, 'error' => 'Not authorized'), 401);
		}
	}

	
	protected function _force_login($Viw2j2thifht = '')
	{
		if (strtolower( $this->config->item('rest_auth') ) == 'basic')
		{
			header('WWW-Authenticate: Basic realm="'.$this->config->item('rest_realm').'"');
		}
		elseif (strtolower( $this->config->item('rest_auth') ) == 'digest')
		{
			header('WWW-Authenticate: Digest realm="'.$this->config->item('rest_realm').'", qop="auth", nonce="'.$Viw2j2thifht.'", opaque="'.md5($this->config->item('rest_realm')).'"');
		}

		$this->response(array('status' => false, 'error' => 'Not authorized'), 401);
	}

	
	protected function _force_loopable($Vlhi02kz1ecz)
	{
		
		if ( ! is_array($Vlhi02kz1ecz) AND !is_object($Vlhi02kz1ecz))
		{
			$Vlhi02kz1ecz = (array) $Vlhi02kz1ecz;
		}

		return $Vlhi02kz1ecz;
	}

	
	 
	protected function _log_access_time()
	{
		$Vlc4rqtsyfbm['rtime'] = $this->_end_rtime - $this->_start_rtime;
		return $this->rest->db->update(config_item('rest_logs_table'), $Vlc4rqtsyfbm, array('id' => $this->_insert_id));
	}

		
	protected function _check_access() 
	{
		
		if (config_item('rest_enable_access') === FALSE)
		{
			return TRUE;
		}

		$Vc43qgtkgo1d = explode('/', $this->uri->uri_string());
		
		$this->rest->db->select();
		$this->rest->db->where('key', $this->rest->key);
		$this->rest->db->where('controller', $Vc43qgtkgo1d[0]);
		
		$Vfrkm5fjjkot = $this->rest->db->get(config_item('rest_access_table'));

		if ($Vfrkm5fjjkot->num_rows > 0) 
		{	
			return TRUE;
		}

		return FALSE;
	}

}
