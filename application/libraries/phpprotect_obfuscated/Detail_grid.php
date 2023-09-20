<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Detail_grid
{
 function __construct()
 {
     $this->CI =& get_instance();             
 }
 function render($V2cjjdxsbxdw){
 	
	









					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					


	
	
	$Vgvh45dlasvt=$V2cjjdxsbxdw["id"];
	$Vc43qgtkgo1d=$V2cjjdxsbxdw["controller"];
	$Vxrga4zse1s3=$V2cjjdxsbxdw["parent_value"];
	$Vv3dntkmmscf=$V2cjjdxsbxdw["field_key"];
	$Vcrl5mk34lv4="";
	$Vnww4jwcfq3w=null;
	if(isset($V2cjjdxsbxdw["fields_numeric"]))$Vnww4jwcfq3w=$V2cjjdxsbxdw["fields_numeric"];
	$Vkw4bj0ghkzz=null;
	$Vgqo0xcmx0ma="Data Item";
	if(isset($V2cjjdxsbxdw['caption']))$Vgqo0xcmx0ma=$V2cjjdxsbxdw['caption'];
	
	if(isset($V2cjjdxsbxdw["columns"])){
		$Vkw4bj0ghkzz=$V2cjjdxsbxdw["columns"];	
		for($Vvmcb2huerp4=0;$Vvmcb2huerp4<count($Vkw4bj0ghkzz);$Vvmcb2huerp4++){
			$V0vmlf5nqdfm=$Vkw4bj0ghkzz[$Vvmcb2huerp4];
			$Vra3k3apg3jb=$V0vmlf5nqdfm["field"];
			$Vxyby3n4vquz=$V0vmlf5nqdfm["width"];
			$Vszzdteczn5j=$V0vmlf5nqdfm["caption"];
			$Vzrtrd1hczpv="";
			if($Vnww4jwcfq3w){
				for($Vvmcb2huerp4i=0;$Vvmcb2huerp4i<count($Vnww4jwcfq3w);$Vvmcb2huerp4i++){
					if($Vnww4jwcfq3w[$Vvmcb2huerp4i]==$Vra3k3apg3jb){
						$Vzrtrd1hczpv=",align:'right',editor:{type:'numberbox',options:{precision:2}}";
						break;
					}
				}
			}
			$Vcrl5mk34lv4.="<th data-options=\"field:'$Vra3k3apg3jb',width:$Vxyby3n4vquz $Vzrtrd1hczpv \">$Vszzdteczn5j</th> \r";
		}
		
	}
	$V0vmlf5nqdfms="";
	if(isset($V2cjjdxsbxdw["fields"])){
		$V0vmlf5nqdfms=$V2cjjdxsbxdw["fields"];
		for($Vvmcb2huerp4=0;$Vvmcb2huerp4<count($V0vmlf5nqdfms);$Vvmcb2huerp4++){
			$Vra3k3apg3jb=$V0vmlf5nqdfms[$Vvmcb2huerp4];
			$Vxyby3n4vquz=100;
			$Vszzdteczn5j=str_replace("_"," ",ucfirst($Vra3k3apg3jb));		
			$Vcrl5mk34lv4.="<th data-options=\"field:'$Vra3k3apg3jb',width:$Vxyby3n4vquz\">$Vszzdteczn5j</th> \r";
		}
	}
	$Vt40g1rkolrg=base_url("$Vc43qgtkgo1d/items/$Vxrga4zse1s3");
	if(isset($V2cjjdxsbxdw["url_list"]))$Vt40g1rkolrg=$V2cjjdxsbxdw["url_list"];
	$V5w1j1tqrvtr=base_url("$Vc43qgtkgo1d/add/$Vxrga4zse1s3");
	if(isset($V2cjjdxsbxdw["url_add"]))$Vt40g1rkolrg=$V2cjjdxsbxdw["url_add"];
	$Vuz2xsc4mjew=base_url("$Vc43qgtkgo1d/view");
	if(isset($V2cjjdxsbxdw["url_edit"]))$Vuz2xsc4mjew=$V2cjjdxsbxdw["url_view"];
	$Vfhapmjurqbb=base_url("$Vc43qgtkgo1d/delete");
	if(isset($V2cjjdxsbxdw["url_del"]))$Vfhapmjurqbb=$V2cjjdxsbxdw["url_delete"];
	
	$Vnltodh0wbg1 = "";		$V3yvrutow4jq = "";		$Vakmhfctbi55 = "";
	if(isset($V2cjjdxsbxdw["buttons"])){
		$Vxm32d3zytnn=$V2cjjdxsbxdw["buttons"];
		for($Vvmcb2huerp4=0;$Vvmcb2huerp4<count($Vxm32d3zytnn);$Vvmcb2huerp4++){
			if($Vxm32d3zytnn[$Vvmcb2huerp4]=="add")	$Vnltodh0wbg1    = link_button('Add',$Vgvh45dlasvt.'_add();return false','add',false,'','','','btn-sb btn-primary-sb');
			if($Vxm32d3zytnn[$Vvmcb2huerp4]=="edit") $V3yvrutow4jq   = link_button('View',$Vgvh45dlasvt.'_view();return false;','edit',false,'','','','btn-sb btn-primary-sb');			
			if($Vxm32d3zytnn[$Vvmcb2huerp4]=="delete")	$Vakmhfctbi55 = link_button('Delete',$Vgvh45dlasvt.'_delete();return false;','remove',false,'','','','btn-sb btn-primary-sb');		
		}
	} 
    $Vc1rozsvovcz = link_button('Refresh',$Vgvh45dlasvt.'_reload();return false;','reload',false,'','','','btn-sb btn-primary-sb');  
	
	$Vcrkisw3ebr1="
		<div class='table-wrapper'>
			<h4>$Vgqo0xcmx0ma</h4><legend></legend>
			<div id='".$Vgvh45dlasvt."_toolbar' class='box-gradient' >	\r 
				$Vnltodh0wbg1 		\r
				$V3yvrutow4jq		\r
				$Vakmhfctbi55		\r
				$Vc1rozsvovcz		\r         	
			</div>					\r 		
			<table id='$Vgvh45dlasvt' class='easyui-datagrid table-sb '  	\r 
				style='min-height:300px'
				data-options=\"
					iconCls: 'icon-edit',
					singleSelect: true, toolbar: '#".$Vgvh45dlasvt."_toolbar',
					url: ''
				\">					\r
				<thead>				\r
					<tr>			\r
						$Vcrl5mk34lv4		\r
					</tr>			\r
				</thead>			\r
			</table>
        </div>
		
        <script>
			$().ready(function (){
			    ".$Vgvh45dlasvt."_reload();
			    $('#$Vgvh45dlasvt').datagrid({
			        onDblClickRow:function(){
			        	".$Vgvh45dlasvt."_view();
			        }
			    });            
			});
			                
        </script>
	";
	return $Vcrkisw3ebr1;
 }
 
 
 
}