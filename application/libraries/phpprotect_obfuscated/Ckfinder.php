<?php


define( 'CKFINDER_DEFAULT_BASEPATH', '/ckfinder/' ) ;

class CKFinder
{
	public $Vahbjgctesx2 ;
	public $Velx2mbvxn4s ;
	public $Vh3nv2c0f3q1 ;
	public $Vn1it54wtfyd ;
	public $Vn1it54wtfydData ;
	public $Vcb5paimnslg ;
	public $Vcb5paimnslgData ;
	public $V1geirpeyghi = false ;
	public $Vfx0vetxvplw = '' ;
	public $Vgxobbazqo2t = '' ;
	public $Vmhhqie2ynry ;
	public $Vfpumeihchpc ;
	public $Vqtjmw3qjzwi = true ;
	public $Vxhodwjoztne = false ;

	
	function __construct( $Vszw55zv22fl = CKFINDER_DEFAULT_BASEPATH, $Vw31s3tn45kg = '100%', $Vu0zgweajhgj = 400, $Vz34pveeiirt = null )
	{
		$this->BasePath			= $Vszw55zv22fl ;
		$this->Width			= $Vw31s3tn45kg ;
		$this->Height			= $Vu0zgweajhgj ;
		$this->SelectFunction	= $Vz34pveeiirt ;
		$this->SelectThumbnailFunction	= $Vz34pveeiirt ;
	}

	
	public function Create()
	{
		echo $this->CreateHtml() ;
	}

	
	public function CreateHtml()
	{
		$Vgsthruuvwuw = $this->ClassName ;
		if ( !empty( $Vgsthruuvwuw ) )
			$Vgsthruuvwuw = ' class="' . $Vgsthruuvwuw . '"' ;

		$Vgvh45dlasvt = $this->Id ;
		if ( !empty( $Vgvh45dlasvt ) )
			$Vgvh45dlasvt = ' id="' . $Vgvh45dlasvt . '"' ;

		return '<iframe src="' . $this->_BuildUrl() . '" width="' . $this->Width . '" ' .
			'height="' . $this->Height . '"' . $Vgsthruuvwuw . $Vgvh45dlasvt . ' frameborder="0" scrolling="no"></iframe>' ;
	}

	private function _BuildUrl( $Vce2vhxzp34i = "" )
	{
		if ( !$Vce2vhxzp34i )
			$Vce2vhxzp34i = $this->BasePath ;

		$Vjro0ar2f12z = "" ;

		if ( empty( $Vce2vhxzp34i ) )
			$Vce2vhxzp34i = CKFINDER_DEFAULT_BASEPATH ;

		if ( $Vce2vhxzp34i[ strlen( $Vce2vhxzp34i ) - 1 ] != '/' )
			$Vce2vhxzp34i = $Vce2vhxzp34i . '/' ;

		$Vce2vhxzp34i .= 'ckfinder.html' ;

		if ( !empty( $this->SelectFunction ) )
			$Vjro0ar2f12z .= '?action=js&amp;func=' . $this->SelectFunction ;

		if ( !empty( $this->SelectFunctionData ) )
		{
			$Vjro0ar2f12z .= $Vjro0ar2f12z ? "&amp;" : "?" ;
			$Vjro0ar2f12z .= 'data=' . rawurlencode($this->SelectFunctionData) ;
		}

		if ( $this->DisableThumbnailSelection )
		{
			$Vjro0ar2f12z .= $Vjro0ar2f12z ? "&amp;" : "?" ;
			$Vjro0ar2f12z .= "dts=1" ;
		}
		else if ( !empty( $this->SelectThumbnailFunction ) || !empty( $this->SelectFunction ) )
		{
			$Vjro0ar2f12z .= $Vjro0ar2f12z ? "&amp;" : "?" ;
			$Vjro0ar2f12z .= 'thumbFunc=' . ( !empty( $this->SelectThumbnailFunction ) ? $this->SelectThumbnailFunction : $this->SelectFunction ) ;

			if ( !empty( $this->SelectThumbnailFunctionData ) )
				$Vjro0ar2f12z .= '&amp;tdata=' . rawurlencode( $this->SelectThumbnailFunctionData ) ;
			else if ( empty( $this->SelectThumbnailFunction ) && !empty( $this->SelectFunctionData ) )
				$Vjro0ar2f12z .= '&amp;tdata=' . rawurlencode( $this->SelectFunctionData ) ;
		}

		if ( !empty( $this->StartupPath ) )
		{
			$Vjro0ar2f12z .= ( $Vjro0ar2f12z ? "&amp;" : "?" ) ;
			$Vjro0ar2f12z .= "start=" . urlencode( $this->StartupPath . ( $this->StartupFolderExpanded ? ':1' : ':0' ) ) ;
		}

		if ( !empty( $this->ResourceType ) )
		{
			$Vjro0ar2f12z .= ( $Vjro0ar2f12z ? "&amp;" : "?" ) ;
			$Vjro0ar2f12z .= "type=" . urlencode( $this->ResourceType ) ;
		}

		if ( !$this->RememberLastFolder )
		{
			$Vjro0ar2f12z .= ( $Vjro0ar2f12z ? "&amp;" : "?" ) ;
			$Vjro0ar2f12z .= "rlf=0" ;
		}

		if ( !empty( $this->Id ) )
		{
			$Vjro0ar2f12z .= ( $Vjro0ar2f12z ? "&amp;" : "?" ) ;
			$Vjro0ar2f12z .= "id=" . urlencode( $this->Id ) ;
		}

		return $Vce2vhxzp34i . $Vjro0ar2f12z ;
	}

	
	public static function CreateStatic( $Vszw55zv22fl = CKFINDER_DEFAULT_BASEPATH, $Vw31s3tn45kg = '100%', $Vu0zgweajhgj = 400, $Vz34pveeiirt = null )
	{
		$Vxtvhh5sp1ib = new CKFinder( $Vszw55zv22fl, $Vw31s3tn45kg, $Vu0zgweajhgj, $Vz34pveeiirt ) ;
		$Vxtvhh5sp1ib->Create() ;
	}

	
	public static function SetupFCKeditor( &$V4fl1hjbotve, $Vszw55zv22fl = CKFINDER_DEFAULT_BASEPATH, $Vxjc5seggmwu = null, $V0xradoyehkm = null )
	{
		if ( empty( $Vszw55zv22fl ) )
			$Vszw55zv22fl = CKFINDER_DEFAULT_BASEPATH ;

		$Vwusci1kpyfw = new CKFinder( $Vszw55zv22fl ) ;
		$Vwusci1kpyfw->SetupFCKeditorObject( $V4fl1hjbotve, $Vxjc5seggmwu, $V0xradoyehkm );
	}

	
	public function SetupFCKeditorObject( &$V4fl1hjbotve, $Vxjc5seggmwu = null, $V0xradoyehkm = null )
	{
		$Vce2vhxzp34i = $this->BasePath ;

		
		if ( isset($Vce2vhxzp34i[0]) && $Vce2vhxzp34i[0] != '/' )
		{
			$Vce2vhxzp34i = substr( $_SERVER[ 'REQUEST_URI' ], 0, strrpos( $_SERVER[ 'REQUEST_URI' ], '/' ) + 1 ) . $Vce2vhxzp34i ;
		}

		$Vce2vhxzp34i = $this->_BuildUrl( $Vce2vhxzp34i ) ;
		$Vjro0ar2f12z = ( strpos($Vce2vhxzp34i, "?") !== false ) ? "&" : "?" ;

		if ( $this->Width !== '100%' && is_numeric( str_ireplace( "px", "", $this->Width ) ) )
		{
			$Vw31s3tn45kg = intval( $this->Width );
			$V4fl1hjbotve->Config['LinkBrowserWindowWidth'] = $Vw31s3tn45kg ;
			$V4fl1hjbotve->Config['ImageBrowserWindowWidth'] = $Vw31s3tn45kg ;
			$V4fl1hjbotve->Config['FlashBrowserWindowWidth'] = $Vw31s3tn45kg ;
		}
		if ( $this->Height !== 400 && is_numeric( str_ireplace( "px", "", $this->Height ) ) )
		{
			$Vu0zgweajhgj = intval( $this->Height );
			$V4fl1hjbotve->Config['LinkBrowserWindowHeight'] = $Vu0zgweajhgj ;
			$V4fl1hjbotve->Config['ImageBrowserWindowHeight'] = $Vu0zgweajhgj ;
			$V4fl1hjbotve->Config['FlashBrowserWindowHeight'] = $Vu0zgweajhgj ;
		}

		$V4fl1hjbotve->Config['LinkBrowserURL'] = $Vce2vhxzp34i ;
		$V4fl1hjbotve->Config['ImageBrowserURL'] = $Vce2vhxzp34i . $Vjro0ar2f12z . 'type=' . ( empty( $Vxjc5seggmwu ) ? 'Images' : $Vxjc5seggmwu ) ;
		$V4fl1hjbotve->Config['FlashBrowserURL'] = $Vce2vhxzp34i . $Vjro0ar2f12z . 'type=' . ( empty( $V0xradoyehkm ) ? 'Flash' : $V0xradoyehkm ) ;

		$Vnouiirhhtld = substr( $Vce2vhxzp34i, 0, strrpos( $Vce2vhxzp34i, "/" ) + 1 ) ;
		$V4fl1hjbotve->Config['LinkUploadURL'] = $Vnouiirhhtld . urlencode( 'core/connector/php/connector.php?command=QuickUpload&type=Files' ) ;
		$V4fl1hjbotve->Config['ImageUploadURL'] = $Vnouiirhhtld . urlencode( 'core/connector/php/connector.php?command=QuickUpload&type=') . ( empty( $Vxjc5seggmwu ) ? 'Images' : $Vxjc5seggmwu ) ;
		$V4fl1hjbotve->Config['FlashUploadURL'] = $Vnouiirhhtld . urlencode( 'core/connector/php/connector.php?command=QuickUpload&type=') . ( empty( $V0xradoyehkm ) ? 'Flash' : $V0xradoyehkm ) ;
	}

	
	public static function SetupCKEditor( &$V4fl1hjbotve, $Vszw55zv22fl = CKFINDER_DEFAULT_BASEPATH, $Vxjc5seggmwu = null, $V0xradoyehkm = null )
	{
		if ( empty( $Vszw55zv22fl ) )
			$Vszw55zv22fl = CKFINDER_DEFAULT_BASEPATH ;

		$Vwusci1kpyfw = new CKFinder( $Vszw55zv22fl ) ;
		$Vwusci1kpyfw->SetupCKEditorObject( $V4fl1hjbotve, $Vxjc5seggmwu, $V0xradoyehkm );
	}

	
	public function SetupCKEditorObject( &$V4fl1hjbotve, $Vxjc5seggmwu = null, $V0xradoyehkm = null )
	{
		$Vce2vhxzp34i = $this->BasePath ;

		
		if ( isset($Vce2vhxzp34i[0]) && $Vce2vhxzp34i[0] != '/' )
		{
			$Vce2vhxzp34i = substr( $_SERVER[ 'REQUEST_URI' ], 0, strrpos( $_SERVER[ 'REQUEST_URI' ], '/' ) + 1 ) . $Vce2vhxzp34i ;
		}

		$Vce2vhxzp34i = $this->_BuildUrl( $Vce2vhxzp34i ) ;
		$Vjro0ar2f12z = ( strpos($Vce2vhxzp34i, "?") !== false ) ? "&" : "?" ;

		if ( $this->Width !== '100%' && is_numeric( str_ireplace( "px", "", $this->Width ) ) )
		{
			$Vw31s3tn45kg = intval( $this->Width );
			$V4fl1hjbotve->config['filebrowserWindowWidth'] = $Vw31s3tn45kg ;
		}
		if ( $this->Height !== 400 && is_numeric( str_ireplace( "px", "", $this->Height ) ) )
		{
			$Vu0zgweajhgj = intval( $this->Height );
			$V4fl1hjbotve->config['filebrowserWindowHeight'] = $Vu0zgweajhgj ;
		}

		$V4fl1hjbotve->config['filebrowserBrowseUrl'] = $Vce2vhxzp34i ;
		$V4fl1hjbotve->config['filebrowserImageBrowseUrl'] = $Vce2vhxzp34i . $Vjro0ar2f12z . 'type=' . ( empty( $Vxjc5seggmwu ) ? 'Images' : $Vxjc5seggmwu ) ;
		$V4fl1hjbotve->config['filebrowserFlashBrowseUrl'] = $Vce2vhxzp34i . $Vjro0ar2f12z . 'type=' . ( empty( $V0xradoyehkm ) ? 'Flash' : $V0xradoyehkm ) ;

		$Vnouiirhhtld = substr( $Vce2vhxzp34i, 0, strrpos( $Vce2vhxzp34i, "/" ) + 1 ) ;
		$V4fl1hjbotve->config['filebrowserUploadUrl'] = $Vnouiirhhtld . 'core/connector/php/connector.php?command=QuickUpload&type=Files' ;
		$V4fl1hjbotve->config['filebrowserImageUploadUrl'] = $Vnouiirhhtld . 'core/connector/php/connector.php?command=QuickUpload&type=' . ( empty( $Vxjc5seggmwu ) ? 'Images' : $Vxjc5seggmwu ) ;
		$V4fl1hjbotve->config['filebrowserFlashUploadUrl'] = $Vnouiirhhtld . 'core/connector/php/connector.php?command=QuickUpload&type=' . ( empty( $V0xradoyehkm ) ? 'Flash' : $V0xradoyehkm ) ;
	}
}