<?php
class Browser
{
	private $Veqh2ob3ab0j=null;
	private $V4rbtluhk4g3=10;
	private $Vmwrugtvcipm=0;
	private $V0rqwanxseo0=null;
	
	function __construct()
	{
		$this->CI =& get_instance();        
        
		$this->CI->load->library('table');
	}
	function init($Vl0ysu4yor0g)
	{
		$this->config=$Vl0ysu4yor0g;
	}
	function render($Vkuo2bx3kfh1=false)
	{
		$Vfipe3vzjbuv=$this->vars('tablename');
		$Vybdwso4czql=$this->vars('primary_key');
		$Vj3vawj3lnms=$this->vars('sql');
		$Vvelzgop02ql=$this->vars('order_by');
		$V5otmvp021ul=$this->vars('where');
		$Vluril1qfuog=$this->vars('use_bootstrap');
		$Vgvh45dlasvt=$this->vars('id','tbl'.$Vfipe3vzjbuv);
		$Vmwrugtvcipm=$this->vars('page');
		$Vx0z4pizdngv=$this->vars('exclude_script');
		$V4rbtluhk4g3=$this->vars('limit');
		if($V4rbtluhk4g3==0)$V4rbtluhk4g3=10;
		$this->limit=$V4rbtluhk4g3;
		
		$Vqo4b1ifczbz=$this->vars('show_edit_button',true);
		
		$Vxbndq5jqj1y=$this->vars('show_delete_button',true);

		$V15w0nzv5zlq=$this->vars('show_view_button',false);

		$Vgqo0xcmx0ma=$this->vars('caption');
		$V0a4iekmarsp=$this->vars('fields');
		$Vgeveo4dp1yf="";
		foreach($V0a4iekmarsp as $V0vmlf5nqdfm=>$Vayr3ltigbuu)
		{
			$Vgeveo4dp1yf.=$V0vmlf5nqdfm.",";
			$Vq01dyo5g4dq[]=$Vayr3ltigbuu['caption'];
		}
		if(strrpos($Vgeveo4dp1yf,","))$Vgeveo4dp1yf=substr($Vgeveo4dp1yf,0,strlen($Vgeveo4dp1yf)-1);
		$Vev0dbc0otnw="";
		if($Vqo4b1ifczbz)$Vev0dbc0otnw='Edit';
		if($Vxbndq5jqj1y)$Vev0dbc0otnw='Del';
		if($V15w0nzv5zlq)$Vev0dbc0otnw='View';
		$Vq01dyo5g4dq[]='Action';
		$Vc43qgtkgo1d=$this->vars('controller');
		
		$Vkfk4odv4bg4='';
		$Vc5gvi0wzj31='';
		
		if($Vfipe3vzjbuv != '') $Vj3vawj3lnms="select $Vgeveo4dp1yf from $Vfipe3vzjbuv where 1=1 ";
		
		if($Vmwrugtvcipm=='')$Vmwrugtvcipm=1;
		$Vmwrugtvcipm1=(int)$Vmwrugtvcipm-1;
		$Vmwrugtvcipm1=$Vmwrugtvcipm1*$V4rbtluhk4g3;
		
		$Vj3vawj3lnms=$Vj3vawj3lnms.' '.$V5otmvp021ul;
		
		
		if($Vvelzgop02ql!='')$Vj3vawj3lnms=$Vj3vawj3lnms." order by ".$Vvelzgop02ql;
		$Vz3fdo42aksi=" limit ".$Vmwrugtvcipm1.",".$V4rbtluhk4g3;
		$Vj3vawj3lnms=$Vj3vawj3lnms.$Vz3fdo42aksi;
		$Vfrkm5fjjkot=$this->CI->db->query($Vj3vawj3lnms);
			$this->CI->table->set_heading($Vq01dyo5g4dq);
			$Vpcrkkvizdkb = array ( 'table_open'  => '<table width="100%"  class="table" id="'.$Vgvh45dlasvt.'" name="'.$Vgvh45dlasvt.'" >' );
			$this->CI->table->set_template($Vpcrkkvizdkb);
 			if( $Vfrkm5fjjkot )
			{
				foreach($Vfrkm5fjjkot->result() as $Vgr5l53dojok)
				{
					$Vlhi02kz1ecz=null;
					$V13hcbqeuapd='string';
					$V0mz0fqbgyhy='';
					$Vvmcb2huerp4=0;
					foreach($Vgr5l53dojok as $Vzls01jplmeq=>$Vf0saxnurylc)
					{
						$V13hcbqeuapd='string';
						if(isset($V0a4iekmarsp[$Vzls01jplmeq]['type']))$V13hcbqeuapd=$V0a4iekmarsp[$Vzls01jplmeq]['type'];
						if($V13hcbqeuapd=='numeric'){
							$Vf0saxnurylc=number_format($Vf0saxnurylc);
							$Vj2jn0ujx2qo=array('data'=>$Vf0saxnurylc,'align'=>'right');
						} else {
							$Vj2jn0ujx2qo=strip_tags($Vf0saxnurylc);
						}
						if($Vzls01jplmeq==$Vybdwso4czql){
							$V0mz0fqbgyhy=$Vf0saxnurylc;
						} 
						$Vlhi02kz1ecz[]=$Vj2jn0ujx2qo;
					}
					$Vev0dbc0otnw="";
					if($Vqo4b1ifczbz)$Vev0dbc0otnw.="<a href='#'   value='$V0mz0fqbgyhy' class='editLink btn btn-primary glyphicon glyphicon-pencil' title='Edit Row'></a>"; 
					if($Vxbndq5jqj1y)$Vev0dbc0otnw.="&nbsp <a href='#'   value='$V0mz0fqbgyhy' class='deleteLink btn btn-warning glyphicon glyphicon-remove' title='Delete Row'></a>"; 
					if($V15w0nzv5zlq)$Vev0dbc0otnw.="&nbsp <a href='#'  value='$V0mz0fqbgyhy' class='viewLink btn btn-default glyphicon glyphicon-folder-open' title='View Row'></a>"; 
					$Vlhi02kz1ecz[]=$Vev0dbc0otnw;
					$this->CI->table->add_row($Vlhi02kz1ecz);
					$Vvmcb2huerp4++;
				}
				
				
			}
			$Vc5gvi0wzj31 .=	$this->CI->table->generate();
 		
		$Vvmcb2huerp4tem_page_max=(int)($this->CI->db->count_all($Vfipe3vzjbuv)/$V4rbtluhk4g3);
		
		$Vkfk4odv4bg4 .= 	$this->toolbar($Vmwrugtvcipm,$Vvmcb2huerp4tem_page_max,$V4rbtluhk4g3,$Vxbndq5jqj1y);
		$Vkfk4odv4bg4	.=	$Vc5gvi0wzj31;
		$Vkfk4odv4bg4 .= 	$this->toolbar($Vmwrugtvcipm,$Vvmcb2huerp4tem_page_max,$V4rbtluhk4g3,$Vxbndq5jqj1y);
		$Vkfk4odv4bg4_script	= '<script>
			var M_CONTROL="'.$Vc43qgtkgo1d.'"; 
			var M_ID_TABLE="'.$Vgvh45dlasvt.'";
			</script>';
		$Vkfk4odv4bg4_script	.= '<script type="text/javascript" charset="utf-8" src="'.base_url().'js/browser.js?v3"></script>';
		if( !$Vx0z4pizdngv ) $Vkfk4odv4bg4 .= $Vkfk4odv4bg4_script;
		
		if ($Vkuo2bx3kfh1) {
			return $Vkfk4odv4bg4;
		} else {
			echo $Vkfk4odv4bg4;
		}
	}
	function vars($Vvwwet2wj5jg,$Vuasdivvnsc0='')
	{
		if( !isset($this->config[$Vvwwet2wj5jg]) ) $this->config[$Vvwwet2wj5jg]=$Vuasdivvnsc0;
		return (($this->config[$Vvwwet2wj5jg]))?$this->config[$Vvwwet2wj5jg]:'';
	}
	function toolbar($Vmwrugtvcipm=0,$Vvmcb2huerp4tem_page_max=10,$V4rbtluhk4g3=50,$Vblss4emnejk=true) 
	{
		$Vkfk4odv4bg4	= "
		<div class='btn-toolbar' 
		style='margin-left:-15px;margin-top:-10px;background: linear-gradient(45deg, cornflowerblue, transparent);padding: 5px;' 
		role='toolbar' aria-label=\"Toolbar\">
		<div class=\"btn-groupx\" role=\"group\" aria-label=\"Navigation Button\" style='float:left'>
			<button onclick=\"list_item(1);return false;\" title='Move to first record'
			type=\"button\" class=\"btn btn-default glyphicon glyphicon-step-backward\"></button>
			<button onclick=\"list_item("; 
				if($Vmwrugtvcipm<=0)$Vmwrugtvcipm=1; $Vmwrugtvcipm=$Vmwrugtvcipm-1; 
				$Vkfk4odv4bg4 	.= $Vmwrugtvcipm;
				$Vkfk4odv4bg4	.= "
				);return false;\" title='Previous page'
			type=\"button\" class=\"btn btn-default glyphicon glyphicon-backward\"></button>
			<button onclick=\"list_item(";			
				if($Vmwrugtvcipm>$Vvmcb2huerp4tem_page_max-2)$Vmwrugtvcipm=$Vvmcb2huerp4tem_page_max-2; 
				$Vkfk4odv4bg4	.= $Vmwrugtvcipm+2;
				$Vkfk4odv4bg4	.= "
				);return false;\" title='Next page'
			type=\"button\" class=\"btn btn-default glyphicon glyphicon-forward\"></button>
			<button onclick=\"list_item($Vvmcb2huerp4tem_page_max);return false;\" title='Move to last record'
			type=\"button\" class=\"btn btn-default glyphicon glyphicon-step-forward\"></button>";
			if($Vblss4emnejk)$Vkfk4odv4bg4.="
			<button onclick=\"add_item();return false;\" title='Addnew Record'
			type=\"button\" class=\"btn btn-primary glyphicon glyphicon-plus\"></button>";

 

			$Vkfk4odv4bg4.="
			<button onclick=\"list_item(0);return false;\" title='View as table'
			type=\"button\" class=\"btn btn-primary glyphicon glyphicon-list glyphicon \"></button>
			<button onclick=\"list_detail();return false;\" title='View as detail'
			type=\"button\" class=\"btn btn-default glyphicon glyphicon-th-large\"></button>
			".form_input("txtSearch",'',"id='txtSearch' placeholder='Enter search	' class='' style='height:32px;margin-top:6px'")."
			
			<button onclick=\"search_item();return false;\" class=\"btn btn-primary 
			glyphicon glyphicon-filter\" 
			type=\"button\" title='Search record by text'>
			
			</button>
			</div>
		</div>
		";		
		return $Vkfk4odv4bg4;
	}
}
?>