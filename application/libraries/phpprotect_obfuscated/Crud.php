<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Crud
{
	var $Vgk1ygcl22kz="",			  		$V2clpkkuuog0="";
	var $Vc43qgtkgo1d="",       		$Vnfe4nwolimg=true;
	var $Vev0dbc0otnw="",           		$Voqikope4cy2=null; 
	var $Vgqoe30g5pkd="",              $Vu5c2ylphhgk=null;
	var $Vn5ykvkgiw10="",            		$Vaazu4y5b0he=null;
	var $Viw4prvf1ktw="",			  		$Vyvb0k0q4sv2=true;
	var $Vj3vawj3lnms="",					$Vga2i4rmwney=null;
	var $Vqbqpr3lsmvx="",				$V3jjcjo0eajd=true;
	var $Vzgxlaigruqq="";
	var $Vjqfx5ka3luu="";
	function __construct(){
		$this->CI =& get_instance();        
       
	   $this->CI->load->helper('mylib');	 
	}
	function set_mode($Vn5ykvkgiw10){
		$this->mode=$Vn5ykvkgiw10;
	}
	function set_table($Vn5ykvkgiw10){
		$this->table=$Vn5ykvkgiw10;
	}
	function set_controller($Vn5ykvkgiw10){
		$this->controller=$Vn5ykvkgiw10;
	}
	function set_value($Vzls01jplmeq,$Vn5ykvkgiw10){
		$this->key=$Vzls01jplmeq;
		$this->value=$Vn5ykvkgiw10;
	}
	function set_action($Vev0dbc0otnw="",$Vzls01jplmeq="",$Vn5ykvkgiw10=""){
		$this->CI->action=$Vev0dbc0otnw;
		$this->key_field=$Vzls01jplmeq;
		$this->value=$Vn5ykvkgiw10;
	}
	function render($V2cjjdxsbxdw=null){
		if($V2cjjdxsbxdw){
			$Vgvl2iamvs3y="";
			if(isset($V2cjjdxsbxdw["cr_table"]))$Vgvl2iamvs3y=$V2cjjdxsbxdw["cr_table"];
			$this->sql="";
			$this->table=$Vgvl2iamvs3y;
			
			if(isset($V2cjjdxsbxdw["cr_key_field"]))$this->key_field=$V2cjjdxsbxdw["cr_key_field"];			
			if(isset($V2cjjdxsbxdw["cr_show_toolbar"]))$this->show_toolbar=$V2cjjdxsbxdw["cr_show_toolbar"];			
			if(isset($V2cjjdxsbxdw["cr_show_box"]))$this->show_box=$V2cjjdxsbxdw["cr_show_box"];
			if(isset($V2cjjdxsbxdw["cr_default_value"]))$this->default_value=$V2cjjdxsbxdw["cr_default_value"];
			
			
		}
		if($this->sql==""){
            $Vj3vawj3lnms="select * from ".$this->table;
            $Vfrkm5fjjkot=$this->CI->db->query($Vj3vawj3lnms);
			$V3kmh24uapwj['row']=$Vfrkm5fjjkot;
            $Vgz44dlnggqh=$this->CI->db->query("DESCRIBE ".$this->table)->result();
		} else {
			$Vj3vawj3lnms=$this->sql;
			$Vfrkm5fjjkot=$this->CI->db->query($this->sql);
			$Vgz44dlnggqh=$Vfrkm5fjjkot->list_fields();
		}
        $V0a4iekmarsp=(array)$Vgz44dlnggqh;
        if($this->fnc_edit==""){
            for($Vvmcb2huerp4=0;$Vvmcb2huerp4<count($V0a4iekmarsp);$Vvmcb2huerp4++){
                $V0vmlf5nqdfm=$V0a4iekmarsp[$Vvmcb2huerp4];
                if(is_object($V0vmlf5nqdfm)){
                    $Vra3k3apg3jb=$V0vmlf5nqdfm->Field;        
                } else {
                    $Vra3k3apg3jb=$V0vmlf5nqdfm;
                }
                $this->fnc_edit.="$('#$Vra3k3apg3jb').val(row.$Vra3k3apg3jb);";                    
            }
            $this->fnc_edit.="$('#mode').val('edit');";
        }            
        if($this->title=="")$this->title=$this->table;
		$this->sql=$Vj3vawj3lnms;
        if($this->key_field=="")$this->key_field="id";
        $V3kmh24uapwj["search_field"]=$this->search_field;
        $V3kmh24uapwj['row']=$Vfrkm5fjjkot;
        $V3kmh24uapwj["fnc_edit"]=$this->fnc_edit;
        $V3kmh24uapwj['fields']=$V0a4iekmarsp;                    
		$V3kmh24uapwj['table']=$this->table;
		$V3kmh24uapwj['hwnd']="ID".rand();
		$V3kmh24uapwj['title']=$this->title;
		$V3kmh24uapwj['sql']=$this->sql;
        $V3kmh24uapwj['key_field']=$this->key_field;
        $V3kmh24uapwj['show_box']=$this->show_box;
        $V3kmh24uapwj['column_numeric']=$this->column_numeric;
        $V3kmh24uapwj['column_width']=$this->column_width;
        $V3kmh24uapwj['other_buttons']=$this->other_buttons;
		$V3kmh24uapwj['show_toolbar']=$this->show_toolbar;
        $V3kmh24uapwj['default_value']=$this->default_value;
		$V3kmh24uapwj['show_button_close']=$this->show_button_close;
		
        $Vzsim2oxe1be=$V3kmh24uapwj["hwnd"];
        $this->CI->session->set_userdata($Vzsim2oxe1be,$V3kmh24uapwj);
		return load_view('crud_browse',$V3kmh24uapwj);
	}

}
?>