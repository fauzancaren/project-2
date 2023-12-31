<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Browse
{
	private $_header="",$_load_js=true;
	private $_data="";
	private $_width="auto";
	private $_url="";
	private $_id="dg";
	private $_fields=null;
	private $_tool="";
    private $_fields_width=null;
	public $_format_numeric=null;

	
	 function __construct()
	 {
		 $this->CI =& get_instance();        
		 $this->CI->load->library('template');
		 $this->CI->load->library('table');
	 }
	 function sql($sql){ 
		$offset=0;
		$i=0+$offset;
		$query=$this->CI->db->query($sql);
		$flds=$query->list_fields();
		$this->_fields=$flds;
		$this->CI->table->set_heading($flds);
		$i=0;
		foreach($query->result_array() as $row){
			//var_dump($row);
			$this->CI->table->add_row($row);
			$i++;
		};
		$tmpl=$this->CI->template->template_table();
		$this->CI->table->set_template($tmpl);
		$this->set_header($flds);
		return $this->CI->table->generate();
	}
	function set_header($array_header){
		$this->_header=$array_header;
	}
	function set_url($url){
		$this->_url=$url;	
	}
	function set_id($id){
		$this->_id=$id;
	}
	function load_js($val){
		$this->_load_js=$val;
	}
	function data($array_data){
		$this->_data=$array_data;
	}
	function width($val=700){
		$this->_width=$val;
	}
	function set_fields($fld){
		$this->_fields=$fld;
	}
	function set_fields_width($fld){
		$this->_fields_width=$fld;
	}
	function set_tool($id){
		$this->_tool=$id;
	}
	function format_numeric($fld){
        $retval="";
        if($this->_format_numeric){
            for($i=0;$i<count($this->_format_numeric);$i++){
                if($this->_format_numeric[$i]==$fld){
                    $retval=",align:'right',editor:'numberbox', 
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
        
        return $retval;	    
	}
	function refresh(){
		
		$width=$this->_width;
		$tbl="";
		if($this->_load_js){
			$tbl="
			<link rel=\"stylesheet\" type=\"text/css\" href=\"".base_url()."js/jquery-ui/themes/default/easyui.css\">
			<link rel=\"stylesheet\" type=\"text/css\" href=\"".base_url()."js/jquery-ui/themes/icon.css\">
			<script src=\"".base_url()."js/jquery-ui/jquery.easyui.min.js\"></script>";
		} 
		
		$tbl.="<table id='$this->_id' class=\"easyui-datagrid\" width='800' data-options=\"rownumbers:true,
		pagination:true,pageSize:10,fitColumns:true,
            singleSelect:true,collapsible:true";
		if($this->_url!="")$tbl.=", url:'$this->_url'";
		if($this->_tool!="")$tbl.=", toolbar:'#$this->_tool'";
		$tbl.="\" ><thead><tr>";
		if(is_array($this->_header)){
			for($i=0;$i<count($this->_header);$i++){
				$width=100;
                $fld=$this->_header[$i];
				if($this->_fields_width){
					if(isset($this->_fields_width[$fld])){
						$width=$this->_fields_width[$fld];
					}
				}
				$tbl.="<th data-options=\"field:'fld_$i',width:$width   \" 
                    >".ucfirst($fld)."</th>";
                    
                		
			}						
		}
        
		if($this->_fields){
			if(is_array($this->_fields)){
				for($i=0;$i<count($this->_fields);$i++){
					$width=100;
				    $fld=$this->_fields[$i];
                    $fmt_num=$this->format_numeric($fld);
					if($this->_fields_width){
						if(isset($this->_fields_width[$fld])){
							$width=$this->_fields_width[$fld];
						}
					}
					$tbl.="		<th data-options=\"field:'".$this->_fields[$i]."',width:$width $fmt_num  \" 
					>".ucfirst($fld)."</th>";					
				}
			}
		}
		$tbl.="		</tr>
				</thead>
				<tbody>";
		$tbody="";
		if($this->_data){		
			for($row=0;$row<count($this->_data);$row++){
				$tbody.="<tr>";
				$data=$this->_data[$row];
				 
				for($col=0;$col<count($data);$col++){
					$tbody.="<td>".$data[$col]."</td>";
				}
				$tbody.="</tr>";
			}
		} 
		
		$tbl.=$tbody;					
		$tbl.="</tbody></table>";
		
		return $tbl;								
		
	}
}