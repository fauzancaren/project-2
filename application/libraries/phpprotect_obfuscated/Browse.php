<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Browse
{
	private $Vq0qhyohnibm="",$Vj3cucckuwj2=true;
	private $Vpjnfv14aozh="";
	private $Vagzqtj3zdjf="auto";
	private $Vnsdyc4lfcq4="";
	private $Vgcgs2ku33ve="dg";
	private $Vbngdlauihts=null;
	private $Vah1slpmvb1b="";
    public $Vmu4x1qxbh55=null;
	
	 function __construct()
	 {
		 $this->CI =& get_instance();        
		 $this->CI->load->library('template');
		 $this->CI->load->library('table');
	 }
	 function sql($Vj3vawj3lnms){ 
		$Vz3fdo42aksi=0;
		$Vvmcb2huerp4=0+$Vz3fdo42aksi;
		$Vfrkm5fjjkot=$this->CI->db->query($Vj3vawj3lnms);
		$Vgr4eqxtj53h=$Vfrkm5fjjkot->list_fields();
		$this->_fields=$Vgr4eqxtj53h;
		$this->CI->table->set_heading($Vgr4eqxtj53h);
		$Vvmcb2huerp4=0;
		foreach($Vfrkm5fjjkot->result_array() as $Vgr5l53dojok){
			
			$this->CI->table->add_row($Vgr5l53dojok);
			$Vvmcb2huerp4++;
		};
		$Vpcrkkvizdkb=$this->CI->template->template_table();
		$this->CI->table->set_template($Vpcrkkvizdkb);
		$this->set_header($Vgr4eqxtj53h);
		return $this->CI->table->generate();
	}
	function set_header($Vw0l5f5xtxl0){
		$this->_header=$Vw0l5f5xtxl0;
	}
	function set_url($Vce2vhxzp34i){
		$this->_url=$Vce2vhxzp34i;	
	}
	function set_id($Vvmcb2huerp4d){
		$this->_id=$Vvmcb2huerp4d;
	}
	function load_js($Vf0saxnurylc){
		$this->_load_js=$Vf0saxnurylc;
	}
	function data($Vq1dc2mapv0x){
		$this->_data=$Vq1dc2mapv0x;
	}
	function width($Vf0saxnurylc=700){
		$this->_width=$Vf0saxnurylc;
	}
	function set_fields($Va51zv2fwkbr){
		$this->_fields=$Va51zv2fwkbr;
	}
	function set_tool($Vvmcb2huerp4d){
		$this->_tool=$Vvmcb2huerp4d;
	}
	function format_numeric($Va51zv2fwkbr){
        $Vcrkisw3ebr1="";
        if($this->_format_numeric){
            for($Vvmcb2huerp4=0;$Vvmcb2huerp4<count($this->_format_numeric);$Vvmcb2huerp4++){
                if($this->_format_numeric[$Vvmcb2huerp4]==$Va51zv2fwkbr){
                    $Vcrkisw3ebr1=",align:'right',editor:'numberbox', 
                    formatter: function(value,row,index){
                        if(isNumber(value)){
                            return number_format(value,2,'.',',');
                            return value;
                        } else {
                            return value;
                        }
                    }";                    
                }            
            }
        }         
        
        return $Vcrkisw3ebr1;	    
	}
	function refresh(){
		
		$Vw31s3tn45kg=$this->_width;
		$Vlmhrcozn40d="";
		if($this->_load_js){
			$Vlmhrcozn40d="
			<link rel=\"stylesheet\" type=\"text/css\" href=\"".base_url()."js/jquery-ui/themes/default/easyui.css\">
			<link rel=\"stylesheet\" type=\"text/css\" href=\"".base_url()."js/jquery-ui/themes/icon.css\">
			<script src=\"".base_url()."js/jquery-ui/jquery.easyui.min.js\"></script>";
		} 
		
		$Vlmhrcozn40d.="<table id='$this->_id' class=\"easyui-datagrid\" width='100%' data-options=\"rownumbers:true,pagination:true,pageSize:10,fitColumns:true,
            singleSelect:true,collapsible:true";
		if($this->_url!="")$Vlmhrcozn40d.=", url:'$this->_url'";
		if($this->_tool!="")$Vlmhrcozn40d.=", toolbar:'#$this->_tool'";
		$Vlmhrcozn40d.="\" ><thead><tr>";
		if(is_array($this->_header)){
			for($Vvmcb2huerp4=0;$Vvmcb2huerp4<count($this->_header);$Vvmcb2huerp4++){
                $Va51zv2fwkbr=$this->_header[$Vvmcb2huerp4];
                $Vlmhrcozn40d.="<th data-options=\"field:'fld_$Vvmcb2huerp4'\" 
                    >".ucfirst($Va51zv2fwkbr)."</th>";
                    
                		
			}						
		}
        
		if($this->_fields){
			if(is_array($this->_fields)){
				for($Vvmcb2huerp4=0;$Vvmcb2huerp4<count($this->_fields);$Vvmcb2huerp4++){
				    $Va51zv2fwkbr=$this->_fields[$Vvmcb2huerp4];
                    $Vzrtrd1hczpv=$this->format_numeric($Va51zv2fwkbr);
					$Vlmhrcozn40d.="		<th data-options=\"field:'".$this->_fields[$Vvmcb2huerp4]."' $Vzrtrd1hczpv \" 
					>".ucfirst($Va51zv2fwkbr)."</th>";					
				}
			}
		}
		$Vlmhrcozn40d.="		</tr>
				</thead>
				<tbody>";
		$V0jeufct53ht="";
		if($this->_data){		
			for($Vgr5l53dojok=0;$Vgr5l53dojok<count($this->_data);$Vgr5l53dojok++){
				$V0jeufct53ht.="<tr>";
				$Vlhi02kz1ecz=$this->_data[$Vgr5l53dojok];
				 
				for($Vovwtaushjgf=0;$Vovwtaushjgf<count($Vlhi02kz1ecz);$Vovwtaushjgf++){
					$V0jeufct53ht.="<td>".$Vlhi02kz1ecz[$Vovwtaushjgf]."</td>";
				}
				$V0jeufct53ht.="</tr>";
			}
		} 
		
		$Vlmhrcozn40d.=$V0jeufct53ht;					
		$Vlmhrcozn40d.="</tbody></table>";
		
		return $Vlmhrcozn40d;								
		
	}
}