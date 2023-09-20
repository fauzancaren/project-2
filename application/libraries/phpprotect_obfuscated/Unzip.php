<?php defined('BASEPATH') or exit('No direct script access allowed');

class Unzip {

	private $V4zqe1ih4u1q = array();

	
	private $Vhaksmg45fb5 = array();

	
	private $V3tynrib5osi = array();

	
	private $Vw0e304wgukb = array();
	private $Vuqssmc5b3ud = array();
	private $Venbrqx0jzwc = '';
	private $Vayc4bs44vft = FALSE;
	private $Vpd3ndqsgspn = 0777;
	private $Vzc4lwlchkyv;
	private $Viivheywk2xa = "\x50\x4b\x03\x04";

	
	private $Vua2re04iyfs = "\x50\x4b\x01\x02";

	
	private $Vsqijnbbhgxh = "\x50\x4b\x05\x06";

	
	private $Vtdhkriamwhh = array('__MACOSX');

	private $V1m0mlzm0dfn = NULL; 

	

	
	function __construct()
	{
		log_message('debug', 'Unzip Class Initialized');
	}

	

	
	private function _reinit()
	{
		$this->compressed_list = array();
		$this->central_dir_list = array();
		$this->end_of_central = array();
		$this->info = array();
		$this->error = array();
	}

	
	public function extract($V5t4cpak1bnd, $V4dkdjwb4k50 = NULL, $Veuc0natr1uf = TRUE)
	{
		$this->_reinit();
		$this->_zip_file = $V5t4cpak1bnd;
		$this->_target_dir = $V4dkdjwb4k50 ? $V4dkdjwb4k50 : dirname($this->_zip_file);

		if ( ! $V3zqfnckscot = $this->_list_files())
		{
			$this->set_error('ZIP folder was empty.');
			return FALSE;
		}

		$Vz5enl0lx0pg = array();
		foreach ($V3zqfnckscot as $Vhcnn1uxkuth => $Vchvfwjqtdbv)
		{
			$Vb0vbpqru3ou = pathinfo($Vhcnn1uxkuth, PATHINFO_DIRNAME);
			$Veg3jjg4raer = pathinfo($Vhcnn1uxkuth, PATHINFO_EXTENSION);

			$Vpzhfwhslbw5 = explode('/', $Vb0vbpqru3ou);
			$Vkz5mdxpjufv = $this->_target_dir . '/' . $Vb0vbpqru3ou;

			
			if (in_array(current($Vpzhfwhslbw5), $this->_skip_dirs))
			{
				continue;
			}

			
			if (is_array($this->_allow_extensions) AND $Veg3jjg4raer AND ! in_array($Veg3jjg4raer, $this->_allow_extensions))
			{
				continue;
			}

			if ( ! is_dir($Vkz5mdxpjufv) AND $Veuc0natr1uf)
			{
				$Vd5pscrayau1 = "";
				foreach ($Vpzhfwhslbw5 as $Vceprxyhagcw)
				{
					$Vd5pscrayau1 = $Vd5pscrayau1 ? $Vd5pscrayau1 . '/' . $Vceprxyhagcw : $Vceprxyhagcw;
					if ( ! is_dir($this->_target_dir . '/' . $Vd5pscrayau1))
					{
						$this->set_debug('Creating folder: ' . $this->_target_dir . '/' . $Vd5pscrayau1);

						if ( ! @mkdir($this->_target_dir . '/' . $Vd5pscrayau1))
						{
							$this->set_error('Desitnation path is not writable.');
							return FALSE;
						}

						
						$this->apply_chmod AND chmod($this->_target_dir . '/' . $Vd5pscrayau1, $this->apply_chmod);
					}
				}
			}

			if (substr($Vhcnn1uxkuth, -1, 1) == '/') continue;

			$Vz5enl0lx0pg[] = $Vhcnn1uxkuth_location = $this->_target_dir . '/' . ($Veuc0natr1uf ? $Vhcnn1uxkuth : basename($Vhcnn1uxkuth));

			$this->_extract_file($Vhcnn1uxkuth, $Vhcnn1uxkuth_location);
		}

		$this->compressed_list = array();

		return $Vz5enl0lx0pg;
	}

	

	
	public function allow($V45z5euwoow5 = NULL)
	{
		$this->_allow_extensions = $V45z5euwoow5;
	}

	

	
	public function error_string($V04yooh1kb2o = '<p>', $Vpsd14fbx1vu = '</p>')
	{
		return $V04yooh1kb2o . implode($Vpsd14fbx1vu . $V04yooh1kb2o, $this->error) . $Vpsd14fbx1vu;
	}

	

	
	public function debug_string($V04yooh1kb2o = '<p>', $Vpsd14fbx1vu = '</p>')
	{
		return $V04yooh1kb2o . implode($Vpsd14fbx1vu . $V04yooh1kb2o, $this->info) . $Vpsd14fbx1vu;
	}

	

	
	function set_error($Vd5pscrayau1ing)
	{
		$this->error[] = $Vd5pscrayau1ing;
	}

	

	
	function set_debug($Vd5pscrayau1ing)
	{
		$this->info[] = $Vd5pscrayau1ing;
	}

	

	
	private function _list_files($V4g0unqxsruf = FALSE)
	{
		if (sizeof($this->compressed_list))
		{
			$this->set_debug('Returning already loaded file list.');
			return $this->compressed_list;
		}

		
		$Vzc4lwlchkyv = fopen($this->_zip_file, 'r');
		$this->fh = &$Vzc4lwlchkyv;

		if ( ! $Vzc4lwlchkyv)
		{
			$this->set_error('Failed to load file: ' . $this->_zip_file);
			return FALSE;
		}

		$this->set_debug('Loading list from "End of Central Dir" index list...');

		if ( ! $this->_load_file_list_by_eof($Vzc4lwlchkyv, $V4g0unqxsruf))
		{
			$this->set_debug('Failed! Trying to load list looking for signatures...');

			if ( ! $this->_load_files_by_signatures($Vzc4lwlchkyv, $V4g0unqxsruf))
			{
				$this->set_debug('Failed! Could not find any valid header.');
				$this->set_error('ZIP File is corrupted or empty');

				return FALSE;
			}
		}

		return $this->compressed_list;
	}

	

	
	private function _extract_file($Vbzcev0ube2u, $Vygmdgosyikx = FALSE)
	{
		if ( ! sizeof($this->compressed_list))
		{
			$this->set_debug('Trying to unzip before loading file list... Loading it!');
			$this->_list_files(FALSE, $Vbzcev0ube2u);
		}

		$Vsn1j2lmleil = &$this->compressed_list[$Vbzcev0ube2u];

		if ( ! isset($this->compressed_list[$Vbzcev0ube2u]))
		{
			$this->set_error('File "<strong>$Vbzcev0ube2u</strong>" is not compressed in the zip.');
			return FALSE;
		}

		if (substr($Vbzcev0ube2u, -1) == '/')
		{
			$this->set_error('Trying to unzip a folder name "<strong>$Vbzcev0ube2u</strong>".');
			return FALSE;
		}

		if ( ! $Vsn1j2lmleil['uncompressed_size'])
		{
			$this->set_debug('File "<strong>$Vbzcev0ube2u</strong>" is empty.');

			return $Vygmdgosyikx ? file_put_contents($Vygmdgosyikx, '') : '';
		}

		fseek($this->fh, $Vsn1j2lmleil['contents_start_offset']);
		$V2h3g1mfjgnb = $this->_uncompress(
			fread($this->fh, $Vsn1j2lmleil['compressed_size']),
			$Vsn1j2lmleil['compression_method'],
			$Vsn1j2lmleil['uncompressed_size'],
			$Vygmdgosyikx
		);

		if ($this->apply_chmod AND $Vygmdgosyikx)
		{
			chmod($Vygmdgosyikx, FILE_READ_MODE);
		}

		return $V2h3g1mfjgnb;
	}

	

	
	public function close()
	{
		
		if ($this->fh)
		{
			fclose($this->fh);
		}
	}

	

	
	public function __destroy()
	{
		$this->close();
	}

	

	
	private function _uncompress($Vmeklfjidstl, $Viw4prvf1ktw, $V1gpwrava3ys, $Vygmdgosyikx = FALSE)
	{
		switch ($Viw4prvf1ktw)
		{
			case 0:
				return $Vygmdgosyikx ? file_put_contents($Vygmdgosyikx, $Vmeklfjidstl) : $Vmeklfjidstl;
			case 1:
				$this->set_error('Shrunk mode is not supported... yet?');
				return FALSE;
			case 2:
			case 3:
			case 4:
			case 5:
				$this->set_error('Compression factor ' . ($Viw4prvf1ktw - 1) . ' is not supported... yet?');
				return FALSE;
			case 6:
				$this->set_error('Implode is not supported... yet?');
				return FALSE;
			case 7:
				$this->set_error('Tokenizing compression algorithm is not supported... yet?');
				return FALSE;
			case 8:
				
				return $Vygmdgosyikx ?
						file_put_contents($Vygmdgosyikx, gzinflate($Vmeklfjidstl, $V1gpwrava3ys)) :
						gzinflate($Vmeklfjidstl, $V1gpwrava3ys);
			case 9:
				$this->set_error('Enhanced Deflating is not supported... yet?');
				return FALSE;
			case 10:
				$this->set_error('PKWARE Date Compression Library Impoloding is not supported... yet?');
				return FALSE;
			case 12:
				
				return $Vygmdgosyikx ?
						file_put_contents($Vygmdgosyikx, bzdecompress($Vmeklfjidstl)) :
						bzdecompress($Vmeklfjidstl);
			case 18:
				$this->set_error('IBM TERSE is not supported... yet?');
				return FALSE;
			default:
				$this->set_error('Unknown uncompress method: $Viw4prvf1ktw');
				return FALSE;
		}
	}

	private function _load_file_list_by_eof(&$Vzc4lwlchkyv, $V4g0unqxsruf = FALSE)
	{
		
		
		

		for ($Vp1xlxrzyxlv = 0; $Vp1xlxrzyxlv < 1024; $Vp1xlxrzyxlv++)
		{
			fseek($Vzc4lwlchkyv, -22 - $Vp1xlxrzyxlv, SEEK_END);

			$Vxcf4tfmba4z = fread($Vzc4lwlchkyv, 4);

			if ($Vxcf4tfmba4z == $this->central_signature_end)
			{
				
				$Vr53ecqukfnw['disk_number_this'] = unpack("v", fread($Vzc4lwlchkyv, 2)); 
				$Vr53ecqukfnw['disk_number'] = unpack("v", fread($Vzc4lwlchkyv, 2)); 
				$Vr53ecqukfnw['total_entries_this'] = unpack("v", fread($Vzc4lwlchkyv, 2)); 
				$Vr53ecqukfnw['total_entries'] = unpack("v", fread($Vzc4lwlchkyv, 2)); 
				$Vr53ecqukfnw['size_of_cd'] = unpack("V", fread($Vzc4lwlchkyv, 4)); 
				$Vr53ecqukfnw['offset_start_cd'] = unpack("V", fread($Vzc4lwlchkyv, 4)); 
				$Vzkcu30acc1j = unpack("v", fread($Vzc4lwlchkyv, 2)); 
				$Vr53ecqukfnw['zipfile_comment'] = $Vzkcu30acc1j[1] ? fread($Vzc4lwlchkyv, $Vzkcu30acc1j[1]) : ''; 

				$this->end_of_central = array(
					'disk_number_this' => $Vr53ecqukfnw['disk_number_this'][1],
					'disk_number' => $Vr53ecqukfnw['disk_number'][1],
					'total_entries_this' => $Vr53ecqukfnw['total_entries_this'][1],
					'total_entries' => $Vr53ecqukfnw['total_entries'][1],
					'size_of_cd' => $Vr53ecqukfnw['size_of_cd'][1],
					'offset_start_cd' => $Vr53ecqukfnw['offset_start_cd'][1],
					'zipfile_comment' => $Vr53ecqukfnw['zipfile_comment'],
				);

				
				fseek($Vzc4lwlchkyv, $this->end_of_central['offset_start_cd']);
				$Vxcf4tfmba4z = fread($Vzc4lwlchkyv, 4);

				while ($Vxcf4tfmba4z == $this->dir_signature)
				{
					$Vnouiirhhtld['version_madeby'] = unpack("v", fread($Vzc4lwlchkyv, 2)); 
					$Vnouiirhhtld['version_needed'] = unpack("v", fread($Vzc4lwlchkyv, 2)); 
					$Vnouiirhhtld['general_bit_flag'] = unpack("v", fread($Vzc4lwlchkyv, 2)); 
					$Vnouiirhhtld['compression_method'] = unpack("v", fread($Vzc4lwlchkyv, 2)); 
					$Vnouiirhhtld['lastmod_time'] = unpack("v", fread($Vzc4lwlchkyv, 2)); 
					$Vnouiirhhtld['lastmod_date'] = unpack("v", fread($Vzc4lwlchkyv, 2)); 
					$Vnouiirhhtld['crc-32'] = fread($Vzc4lwlchkyv, 4);			  
					$Vnouiirhhtld['compressed_size'] = unpack("V", fread($Vzc4lwlchkyv, 4)); 
					$Vnouiirhhtld['uncompressed_size'] = unpack("V", fread($Vzc4lwlchkyv, 4)); 
					$V5t4cpak1bnd_length = unpack("v", fread($Vzc4lwlchkyv, 2)); 
					$V45z5euwoow5ra_field_length = unpack("v", fread($Vzc4lwlchkyv, 2)); 
					$Vhcnn1uxkuthCommentLength = unpack("v", fread($Vzc4lwlchkyv, 2)); 
					$Vnouiirhhtld['disk_number_start'] = unpack("v", fread($Vzc4lwlchkyv, 2)); 
					$Vnouiirhhtld['internal_attributes'] = unpack("v", fread($Vzc4lwlchkyv, 2)); 
					$Vnouiirhhtld['external_attributes1'] = unpack("v", fread($Vzc4lwlchkyv, 2)); 
					$Vnouiirhhtld['external_attributes2'] = unpack("v", fread($Vzc4lwlchkyv, 2)); 
					$Vnouiirhhtld['relative_offset'] = unpack("V", fread($Vzc4lwlchkyv, 4)); 
					$Vnouiirhhtld['file_name'] = fread($Vzc4lwlchkyv, $V5t4cpak1bnd_length[1]);							 
					$Vnouiirhhtld['extra_field'] = $V45z5euwoow5ra_field_length[1] ? fread($Vzc4lwlchkyv, $V45z5euwoow5ra_field_length[1]) : ''; 
					$Vnouiirhhtld['file_comment'] = $Vhcnn1uxkuthCommentLength[1] ? fread($Vzc4lwlchkyv, $Vhcnn1uxkuthCommentLength[1]) : ''; 

					
					$Vuzynizl1cxv = str_pad(decbin($Vnouiirhhtld['lastmod_date'][1]), 16, '0', STR_PAD_LEFT);
					$Vkm4emzspb5y = str_pad(decbin($Vnouiirhhtld['lastmod_time'][1]), 16, '0', STR_PAD_LEFT);
					$Vuoqehofsbr0 = bindec(substr($Vuzynizl1cxv, 0, 7)) + 1980;
					$Vzz3uk434hpq = bindec(substr($Vuzynizl1cxv, 7, 4));
					$Vztn4d3niyjs = bindec(substr($Vuzynizl1cxv, 11, 5));
					$Vhx4v2w401aa = bindec(substr($Vkm4emzspb5y, 0, 5));
					$Vr1fafnaiuue = bindec(substr($Vkm4emzspb5y, 5, 6));
					$Vxwdsxcxvo5t = bindec(substr($Vkm4emzspb5y, 11, 5));

					$this->central_dir_list[$Vnouiirhhtld['file_name']] = array(
						'version_madeby' => $Vnouiirhhtld['version_madeby'][1],
						'version_needed' => $Vnouiirhhtld['version_needed'][1],
						'general_bit_flag' => str_pad(decbin($Vnouiirhhtld['general_bit_flag'][1]), 8, '0', STR_PAD_LEFT),
						'compression_method' => $Vnouiirhhtld['compression_method'][1],
						'lastmod_datetime' => mktime($Vhx4v2w401aa, $Vr1fafnaiuue, $Vxwdsxcxvo5t, $Vzz3uk434hpq, $Vztn4d3niyjs, $Vuoqehofsbr0),
						'crc-32' => str_pad(dechex(ord($Vnouiirhhtld['crc-32'][3])), 2, '0', STR_PAD_LEFT) .
						str_pad(dechex(ord($Vnouiirhhtld['crc-32'][2])), 2, '0', STR_PAD_LEFT) .
						str_pad(dechex(ord($Vnouiirhhtld['crc-32'][1])), 2, '0', STR_PAD_LEFT) .
						str_pad(dechex(ord($Vnouiirhhtld['crc-32'][0])), 2, '0', STR_PAD_LEFT),
						'compressed_size' => $Vnouiirhhtld['compressed_size'][1],
						'uncompressed_size' => $Vnouiirhhtld['uncompressed_size'][1],
						'disk_number_start' => $Vnouiirhhtld['disk_number_start'][1],
						'internal_attributes' => $Vnouiirhhtld['internal_attributes'][1],
						'external_attributes1' => $Vnouiirhhtld['external_attributes1'][1],
						'external_attributes2' => $Vnouiirhhtld['external_attributes2'][1],
						'relative_offset' => $Vnouiirhhtld['relative_offset'][1],
						'file_name' => $Vnouiirhhtld['file_name'],
						'extra_field' => $Vnouiirhhtld['extra_field'],
						'file_comment' => $Vnouiirhhtld['file_comment'],
					);

					$Vxcf4tfmba4z = fread($Vzc4lwlchkyv, 4);
				}

				
				if ($this->central_dir_list)
				{
					foreach ($this->central_dir_list as $Vhcnn1uxkuthname => $Viqo0jgi3ujo)
					{
						$Vvmcb2huerp4 = $this->_get_file_header($Vzc4lwlchkyv, $Viqo0jgi3ujo['relative_offset']);
						
						$this->compressed_list[$Vhcnn1uxkuthname]['file_name'] = $Vhcnn1uxkuthname;
						$this->compressed_list[$Vhcnn1uxkuthname]['compression_method'] = $Viqo0jgi3ujo['compression_method'];
						$this->compressed_list[$Vhcnn1uxkuthname]['version_needed'] = $Viqo0jgi3ujo['version_needed'];
						$this->compressed_list[$Vhcnn1uxkuthname]['lastmod_datetime'] = $Viqo0jgi3ujo['lastmod_datetime'];
						$this->compressed_list[$Vhcnn1uxkuthname]['crc-32'] = $Viqo0jgi3ujo['crc-32'];
						$this->compressed_list[$Vhcnn1uxkuthname]['compressed_size'] = $Viqo0jgi3ujo['compressed_size'];
						$this->compressed_list[$Vhcnn1uxkuthname]['uncompressed_size'] = $Viqo0jgi3ujo['uncompressed_size'];
						$this->compressed_list[$Vhcnn1uxkuthname]['lastmod_datetime'] = $Viqo0jgi3ujo['lastmod_datetime'];
						$this->compressed_list[$Vhcnn1uxkuthname]['extra_field'] = $Vvmcb2huerp4['extra_field'];
						$this->compressed_list[$Vhcnn1uxkuthname]['contents_start_offset'] = $Vvmcb2huerp4['contents_start_offset'];

						if (strtolower($V4g0unqxsruf) == strtolower($Vhcnn1uxkuthname))
						{
							break;
						}
					}
				}

				return TRUE;
			}
		}
		return FALSE;
	}

	private function _load_files_by_signatures(&$Vzc4lwlchkyv, $V4g0unqxsruf = FALSE)
	{
		fseek($Vzc4lwlchkyv, 0);

		$V2h3g1mfjgnburn = FALSE;
		for (;;)
		{
			$Viqo0jgi3ujo = $this->_get_file_header($Vzc4lwlchkyv);

			if ( ! $Viqo0jgi3ujo)
			{
				$this->set_debug('Invalid signature. Trying to verify if is old style Data Descriptor...');
				fseek($Vzc4lwlchkyv, 12 - 4, SEEK_CUR); 
				$Viqo0jgi3ujo = $this->_get_file_header($Vzc4lwlchkyv);
			}

			if ( ! $Viqo0jgi3ujo)
			{
				$this->set_debug('Still invalid signature. Probably reached the end of the file.');
				break;
			}

			$Vhcnn1uxkuthname = $Viqo0jgi3ujo['file_name'];
			$this->compressed_list[$Vhcnn1uxkuthname] = $Viqo0jgi3ujo;
			$V2h3g1mfjgnburn = true;

			if (strtolower($V4g0unqxsruf) == strtolower($Vhcnn1uxkuthname))
			{
				break;
			}
		}

		return $V2h3g1mfjgnburn;
	}

	private function _get_file_header(&$Vzc4lwlchkyv, $Vrpw0atb3nmz = FALSE)
	{
		if ($Vrpw0atb3nmz !== FALSE)
		{
			fseek($Vzc4lwlchkyv, $Vrpw0atb3nmz);
		}

		$Vxcf4tfmba4z = fread($Vzc4lwlchkyv, 4);

		if ($Vxcf4tfmba4z == $this->zip_signature)
		{
			
			$Vhcnn1uxkuth['version_needed'] = unpack("v", fread($Vzc4lwlchkyv, 2)); 
			$Vhcnn1uxkuth['general_bit_flag'] = unpack("v", fread($Vzc4lwlchkyv, 2)); 
			$Vhcnn1uxkuth['compression_method'] = unpack("v", fread($Vzc4lwlchkyv, 2)); 
			$Vhcnn1uxkuth['lastmod_time'] = unpack("v", fread($Vzc4lwlchkyv, 2)); 
			$Vhcnn1uxkuth['lastmod_date'] = unpack("v", fread($Vzc4lwlchkyv, 2)); 
			$Vhcnn1uxkuth['crc-32'] = fread($Vzc4lwlchkyv, 4);			  
			$Vhcnn1uxkuth['compressed_size'] = unpack("V", fread($Vzc4lwlchkyv, 4)); 
			$Vhcnn1uxkuth['uncompressed_size'] = unpack("V", fread($Vzc4lwlchkyv, 4)); 
			$V5t4cpak1bnd_length = unpack("v", fread($Vzc4lwlchkyv, 2)); 
			$V45z5euwoow5ra_field_length = unpack("v", fread($Vzc4lwlchkyv, 2)); 
			$Vhcnn1uxkuth['file_name'] = fread($Vzc4lwlchkyv, $V5t4cpak1bnd_length[1]); 
			$Vhcnn1uxkuth['extra_field'] = $V45z5euwoow5ra_field_length[1] ? fread($Vzc4lwlchkyv, $V45z5euwoow5ra_field_length[1]) : ''; 
			$Vhcnn1uxkuth['contents_start_offset'] = ftell($Vzc4lwlchkyv);

			
			fseek($Vzc4lwlchkyv, $Vhcnn1uxkuth['compressed_size'][1], SEEK_CUR);

			
			$Vuzynizl1cxv = str_pad(decbin($Vhcnn1uxkuth['lastmod_date'][1]), 16, '0', STR_PAD_LEFT);
			$Vkm4emzspb5y = str_pad(decbin($Vhcnn1uxkuth['lastmod_time'][1]), 16, '0', STR_PAD_LEFT);

			$Vuoqehofsbr0 = bindec(substr($Vuzynizl1cxv, 0, 7)) + 1980;
			$Vzz3uk434hpq = bindec(substr($Vuzynizl1cxv, 7, 4));
			$Vztn4d3niyjs = bindec(substr($Vuzynizl1cxv, 11, 5));
			$Vhx4v2w401aa = bindec(substr($Vkm4emzspb5y, 0, 5));
			$Vr1fafnaiuue = bindec(substr($Vkm4emzspb5y, 5, 6));
			$Vxwdsxcxvo5t = bindec(substr($Vkm4emzspb5y, 11, 5));

			
			$Vvmcb2huerp4 = array(
				'file_name' => $Vhcnn1uxkuth['file_name'],
				'compression_method' => $Vhcnn1uxkuth['compression_method'][1],
				'version_needed' => $Vhcnn1uxkuth['version_needed'][1],
				'lastmod_datetime' => mktime($Vhx4v2w401aa, $Vr1fafnaiuue, $Vxwdsxcxvo5t, $Vzz3uk434hpq, $Vztn4d3niyjs, $Vuoqehofsbr0),
				'crc-32' => str_pad(dechex(ord($Vhcnn1uxkuth['crc-32'][3])), 2, '0', STR_PAD_LEFT) .
				str_pad(dechex(ord($Vhcnn1uxkuth['crc-32'][2])), 2, '0', STR_PAD_LEFT) .
				str_pad(dechex(ord($Vhcnn1uxkuth['crc-32'][1])), 2, '0', STR_PAD_LEFT) .
				str_pad(dechex(ord($Vhcnn1uxkuth['crc-32'][0])), 2, '0', STR_PAD_LEFT),
				'compressed_size' => $Vhcnn1uxkuth['compressed_size'][1],
				'uncompressed_size' => $Vhcnn1uxkuth['uncompressed_size'][1],
				'extra_field' => $Vhcnn1uxkuth['extra_field'],
				'general_bit_flag' => str_pad(decbin($Vhcnn1uxkuth['general_bit_flag'][1]), 8, '0', STR_PAD_LEFT),
				'contents_start_offset' => $Vhcnn1uxkuth['contents_start_offset']
			);

			return $Vvmcb2huerp4;
		}

		return FALSE;
	}
}


