<?php if(!defined('BASEPATH'))exit('No direct script access allowed');
 
if(!function_exists('browse')){ 
    function browse($V4f1kyrl3j4t,$Vetj4f5jhbcq='',$Vr5usifreyzf='',$Vzl5igrsjgyf=0,$Vemrq0xwjbl4=10
            ,$Vumyn3wklyrk='',$Vvp2z3iuh5yx='auto',$Vslfsckkovsz='auto'){
       echo '  <script type="text/javascript">    
            CI_CONTROL=\''.$Vr5usifreyzf.'\';
            FIELD_KEY=\''.$Vumyn3wklyrk.'\';
            CI_CAPTION=\''.$Vetj4f5jhbcq.'\';
            CI_WIDTH='.$Vvp2z3iuh5yx.';
            CI_HEIGHT='.$Vslfsckkovsz.';
        </script>';
        $Vrdb3kpcuebp =& get_instance();  
         $Vrgmu3jbi2sw=$Vrdb3kpcuebp->db->query($V4f1kyrl3j4t.' limit 1');
        $Vx2b2rngfqnd=$Vrgmu3jbi2sw->list_fields();
         
        $Vniwpupn20qj='<tr>';
        for($V55vc4mewy5w=0;$V55vc4mewy5w<count($Vx2b2rngfqnd);$V55vc4mewy5w++){
            $Vxnddwmbhizh=$Vx2b2rngfqnd[$V55vc4mewy5w];
            $Vxnddwmbhizh=str_replace('_',' ',$Vxnddwmbhizh);
            $Vxnddwmbhizh=ucfirst($Vxnddwmbhizh);
            $Vniwpupn20qj.='<th data-options="field:\''.$Vx2b2rngfqnd[$V55vc4mewy5w].'\' ">'.$Vxnddwmbhizh.'</th>';
        }
        $Vniwpupn20qj.='</tr>';
        $Vlf3gc3prjyc=$Vrdb3kpcuebp->input->get('search');
        $Vzjno52zp30q='
        <table id="dg" class="easyui-datagrid", title="'.$Vetj4f5jhbcq.'"
              style="height:'.$Vslfsckkovsz.' px;width:$Vvp2z3iuh5yx px", 
              data-options="rownumbers:true,pagination:true,pageSize:10,loadFilter:pagerFilter,
              singleSelect:true,collapsible:true,url:\''
                .site_url().'/'.$Vr5usifreyzf.'/browse_data/'.$Vzl5igrsjgyf.'/'.$Vemrq0xwjbl4.'/'.$Vlf3gc3prjyc.'\'
                    ,toolbar:\'#tb\'">
              <thead>'.$Vniwpupn20qj.'</thead>
              </table>
         ';
 
         
        return $Vzjno52zp30q;

    }
if(!function_exists('browse_data')){
    function browse_data($Vmfvrsd5xyqh,$Vx2b2rngfqnd,$Vetj4f5jhbcq='',$Vvp2z3iuh5yx=600,$V55vc4mewy5wd='dg',$Vpktvotzwqww=''){
        $Vrdb3kpcuebp =& get_instance();            
         $Vniwpupn20qj='<tr>';
        for($V55vc4mewy5w=0;$V55vc4mewy5w<count($Vx2b2rngfqnd);$V55vc4mewy5w++){
            $Vxnddwmbhizh=$Vx2b2rngfqnd[$V55vc4mewy5w];
            $Vxnddwmbhizh=str_replace('_',' ',$Vxnddwmbhizh);
            $Vxnddwmbhizh=ucfirst($Vxnddwmbhizh);
            $Vniwpupn20qj.='<th data-options="field:\''.$Vx2b2rngfqnd[$V55vc4mewy5w].'\'">'.$Vxnddwmbhizh.'</th>';
        }
        $Vniwpupn20qj.='</tr>';
        $Vzjno52zp30q='<table id="'.$V55vc4mewy5wd.'" class="easyui-datagrid", title="'.$Vetj4f5jhbcq.'"
              style="width:'.$Vvp2z3iuh5yx.' px", 
              data-options="rownumbers:false, 
              singleSelect:true,collapsible:true,';
        if($Vpktvotzwqww!='')$Vzjno52zp30q.="toolbar:'#".$Vpktvotzwqww."',";
        $Vzjno52zp30q.='">';
        $Vzjno52zp30q.='<thead>'.$Vniwpupn20qj.'</thead>';
        $Vzjno52zp30q.="<tbody>";
                for($Vfhkt4vbeual=0;$Vfhkt4vbeual<count($Vmfvrsd5xyqh);$Vfhkt4vbeual++){
                  	$Vfhkt4vbeualow=$Vmfvrsd5xyqh[$Vfhkt4vbeual];
                    $Vfhkt4vbeualows[$Vfhkt4vbeual+1]=$Vfhkt4vbeual;
                    $Vzjno52zp30q.="<tr>";
                    for($V55vc4mewy5w=0;$V55vc4mewy5w<count($Vx2b2rngfqnd);$V55vc4mewy5w++){
                        $Vxnddwmbhizh=$Vx2b2rngfqnd[$V55vc4mewy5w];
                        $Vzjno52zp30q.="<td>".$Vfhkt4vbeualow[$Vxnddwmbhizh]."</td>";
                    };
                    $Vzjno52zp30q.="</tr>";
               };
       $Vzjno52zp30q.='</tbody>';
        
       $Vzjno52zp30q.='</table>';
	   $Vvt20qqut4bu="
                <link rel=\"stylesheet\" type=\"text/css\" href=\"".base_url()."js/jquery-ui/themes/default/easyui.css\">
                <link rel=\"stylesheet\" type=\"text/css\" href=\"".base_url()."js/jquery-ui/themes/icon.css\">
                <link rel=\"stylesheet\" type=\"text/css\" href=\"".base_url()."js/jquery-ui/themes/demo.css\">
                <script src=\"".base_url()."js/jquery-ui/jquery.easyui.min.js\"></script>                
            ";
        return $Vzjno52zp30q;
    }
}
if(!function_exists('browse_simple')){
    function browse_simple($V4f1kyrl3j4t,$Vetj4f5jhbcq='',$Vvp2z3iuh5yx=600,$Vslfsckkovsz=100,$V55vc4mewy5wd='dg',$Vpktvotzwqww=''){
        $Vrdb3kpcuebp =& get_instance();
         $Vrgmu3jbi2sw=$Vrdb3kpcuebp->db->query($V4f1kyrl3j4t);
        $Vx2b2rngfqnd=$Vrgmu3jbi2sw->list_fields();

		









        $Vniwpupn20qj='<tr>';

        for($V55vc4mewy5w=0;$V55vc4mewy5w<count($Vx2b2rngfqnd);$V55vc4mewy5w++){
            $Vxnddwmbhizh=$Vx2b2rngfqnd[$V55vc4mewy5w];
            $Vxnddwmbhizh=str_replace('_',' ',$Vxnddwmbhizh);
            $Vxnddwmbhizh=ucfirst($Vxnddwmbhizh);
            $Vniwpupn20qj.='<th data-options="field:\''.$Vx2b2rngfqnd[$V55vc4mewy5w].'\'">'.$Vxnddwmbhizh.'</th>';
        }
        $Vniwpupn20qj.='</tr>';
        $Vzjno52zp30q='<table id="'.$V55vc4mewy5wd.'" class="table2", width="100%" title="'.$Vetj4f5jhbcq.'"
              data-options="rownumbers:true, 
              singleSelect:true,collapsible:true,';
        if($Vpktvotzwqww!='')$Vzjno52zp30q.="toolbar:'#".$Vpktvotzwqww."',";
        $Vzjno52zp30q.='">';
        $Vzjno52zp30q.='<thead>'.$Vniwpupn20qj.'</thead>';
        $Vzjno52zp30q.="<tbody>";
                foreach($Vrgmu3jbi2sw->result_array() as $Vfhkt4vbeualow){
                    $Vfhkt4vbeualows[$V55vc4mewy5w++]=$Vfhkt4vbeualow;
                    $Vzjno52zp30q.="<tr>";
                    for($V55vc4mewy5w=0;$V55vc4mewy5w<count($Vx2b2rngfqnd);$V55vc4mewy5w++){
                        $Vxnddwmbhizh=$Vx2b2rngfqnd[$V55vc4mewy5w];
                        $Vzjno52zp30q.="<td>".$Vfhkt4vbeualow[$Vxnddwmbhizh]."</td>";
                    };
                    $Vzjno52zp30q.="</tr>";
               };
       $Vzjno52zp30q.='</tbody>';
        
       $Vzjno52zp30q.='</table>';
	   $Vvt20qqut4bu="
                <link rel=\"stylesheet\" type=\"text/css\" href=\"".base_url()."js/jquery-ui/themes/default/easyui.css\">
                <link rel=\"stylesheet\" type=\"text/css\" href=\"".base_url()."js/jquery-ui/themes/icon.css\">
                <link rel=\"stylesheet\" type=\"text/css\" href=\"".base_url()."js/jquery-ui/themes/demo.css\">
                <script src=\"".base_url()."js/jquery-ui/jquery.easyui.min.js\"></script>                
            ";
        return $Vzjno52zp30q;
    }
}

if ( ! function_exists('browse2'))
{
    function browse2($Vmfvrsd5xyqh,$Vetj4f5jhbcq="",$Vufr4j2prwuj="",$Vzl5igrsjgyf=0,$Vemrq0xwjbl4=50
            ,$Vuwoqhapqeev='',$Vwhb1qbzspye='asc',$V5z4ghtufkok='',$Vvt20qqut4butyle='',$Vaxehhzoh0mw="")
    {
        echo '<script language="javascript">
            M_BROWSE=\''.base_url().'index.php/'.$Vufr4j2prwuj.'/browse/\';    
            M_VIEW=\''.base_url().'index.php/'.$Vufr4j2prwuj.'/view/\';    
            M_DELETE=\''.base_url().'index.php/'.$Vufr4j2prwuj.'/delete/\';   
                
        </script>';    
        $Vrdb3kpcuebp =& get_instance();
        $V55vc4mewy5wd="dg";
        $Vpktvotzwqww="tb";
        $Vslfsckkovsz=500;
		$Vhrqmctmjww0=false;
        if(is_array($Vmfvrsd5xyqh)){
            $V4f1kyrl3j4t=$Vmfvrsd5xyqh["sql"];
            $Vetj4f5jhbcq=isset($Vmfvrsd5xyqh["caption"])?$Vmfvrsd5xyqh['caption']:'Data';
            $Vufr4j2prwuj=$Vmfvrsd5xyqh["controller"];
            if(isset($Vmfvrsd5xyqh['cols_width']))$Vh152d5m5ovt=$Vmfvrsd5xyqh["cols_width"];
            if(isset($Vmfvrsd5xyqh['fields_numeric']))$Vpvr2sl1q5xd=$Vmfvrsd5xyqh["fields_numeric"];
            if(isset($Vmfvrsd5xyqh['id']))$V55vc4mewy5wd=$Vmfvrsd5xyqh['id'];
            if(isset($Vmfvrsd5xyqh['toolbar']))$Vpktvotzwqww=$Vmfvrsd5xyqh['toolbar'];
            if(isset($Vmfvrsd5xyqh['height']))$Vslfsckkovsz=$Vmfvrsd5xyqh['height'];
            if(isset($Vmfvrsd5xyqh['allow_edit']))$Vhrqmctmjww0=$Vmfvrsd5xyqh['allow_edit'];
        } else  {
            $V4f1kyrl3j4t=$Vmfvrsd5xyqh;
        }
        $Vrgmu3jbi2sw=$Vrdb3kpcuebp->db->query($V4f1kyrl3j4t.' limit 1');
        $Vx2b2rngfqnd=$Vrgmu3jbi2sw->list_fields();
        $Vmte2zwu4czl=site_url().'/'.$Vufr4j2prwuj.'/browse_json/'.$Vzl5igrsjgyf.'/'.$Vemrq0xwjbl4.'/'.$Vaxehhzoh0mw;
        
        
        
        if($Vvt20qqut4butyle=='')$Vvt20qqut4butyle='width:100%';
        if($Vetj4f5jhbcq=="")$Vetj4f5jhbcq="Recordset";
        if($Vufr4j2prwuj=="")$Vufr4j2prwuj="unknown_controller";
        
        $Vniwpupn20qj='<tr>';
        for($V55vc4mewy5w=0;$V55vc4mewy5w<count($Vx2b2rngfqnd);$V55vc4mewy5w++){
            $Vxnddwmbhizh=$Vx2b2rngfqnd[$V55vc4mewy5w];
            $Vxnddwmbhizh1=str_replace('_',' ',$Vxnddwmbhizh);
            $Vvp2z3iuh5yx=80;
            if(isset($Vh152d5m5ovt)){
                if(isset($Vh152d5m5ovt[$Vxnddwmbhizh]))$Vvp2z3iuh5yx=$Vh152d5m5ovt[$Vxnddwmbhizh];
            }
            $V4t151xgp5ti="";
            if(isset($Vpvr2sl1q5xd[$Vxnddwmbhizh])){
                $V4t151xgp5ti=",align:'right',editor:'numberbox', 
                    formatter: function(value,row,index){
                        if(isNumber(value)){
                            return number_format(value,2,'.',',');
                            return value;
                        } else {
                            return value;
                        }
                    }";
                    
            }
            if($V4t151xgp5ti=="" && isset($Vpvr2sl1q5xd)){
            	for($Vuaufi3la1vg=0;$Vuaufi3la1vg<count($Vpvr2sl1q5xd);$Vuaufi3la1vg++){
            		if($Vpvr2sl1q5xd[$Vuaufi3la1vg]==$Vxnddwmbhizh){
		                $V4t151xgp5ti=",align:'right',editor:'numberbox', 
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
			if($Vxnddwmbhizh!=""){
           		 $Vniwpupn20qj.='<th  data-options="field:\''.$Vx2b2rngfqnd[$V55vc4mewy5w].'\', width:'.$Vvp2z3iuh5yx.$V4t151xgp5ti.' ">
            			<strong>'.ucfirst($Vxnddwmbhizh1).'</strong>';
            	 $Vniwpupn20qj.='</th>';
			}
        }
        
		 if ( $Vhrqmctmjww0 ){
           		 $Vniwpupn20qj.="<th  data-options=\"field:'action', width:'80', 
   								formatter:function(value,row,index){
				                    if (row.editing){
				                        var s = '<a href=\'javascript:void(0)\' onclick=\'saverow(this)\'>Save</a> ';
				                        var c = '<a href=\'javascript:void(0)\' onclick=\'cancelrow(this)\'>Cancel</a>';
				                        return s+c;
				                    } else {
				                        var e = '<a href=\'javascript:void(0)\' onclick=\'editrow(this)\'>Edit</a> ';
				                        var d = '<a href=\'javascript:void(0)\' onclick=\'deleterow(this)\'>Delete</a>';
				                        return e+'&nbsp|&nbsp'+d;
				                    }
				                }           		 			
           		 		\" >
            			<strong>Action</strong>";
            	 $Vniwpupn20qj.="</th>";

		 	
		 }
		 
		
        $Vniwpupn20qj.='</tr>';
        $Vzjno52zp30q="<table id='$V55vc4mewy5wd' class='easyui-datagrid', title='$Vetj4f5jhbcq' 
              style='max-height:$Vslfsckkovsz;min-height:300px;$Vvt20qqut4butyle'
              data-options=\"
               
              singleSelect:true,collapsible:true,fitColumns:true,pagination:true,
              height:$Vslfsckkovsz,	url:'$Vmte2zwu4czl', toolbar:'#$Vpktvotzwqww',
              idField:'id'
               \" >
              	
              <thead>$Vniwpupn20qj</thead>
              
              </table>";
              
        $Vfhkt4vbeualetval=$Vzjno52zp30q;
               

        echo "<script language='javascript'></script>";

        return  $Vfhkt4vbeualetval;

        }
}
if(!function_exists('browse_table')){
    function browse_table($Vg2oaazihley,$Vumyn3wklyrk='',$Vkp4qvizwmsd=''){
        $Vvp2z3iuh5yx=600;
        $Vslfsckkovsz=400;
        $Vetj4f5jhbcq=$Vg2oaazihley;
        $Vr5usifreyzf='run';
       echo '  <script type="text/javascript">    
            CI_CONTROL=\''.$Vr5usifreyzf.'\';
            FIELD_KEY=\''.$Vumyn3wklyrk.'\';
            CI_CAPTION=\''.$Vetj4f5jhbcq.'\';
            CI_WIDTH='.$Vvp2z3iuh5yx.';
            CI_HEIGHT='.$Vslfsckkovsz.';
        </script>';
       $V4f1kyrl3j4t="select * from ".$Vg2oaazihley;
        $Vrdb3kpcuebp =& get_instance();
                    
       $V2ezramm0zfx=$Vrdb3kpcuebp->config->item('multi_company');
       if($V2ezramm0zfx){
            $Vrrko4ma2kot=$Vrdb3kpcuebp->session->userdata("company_code","");
            if($Vrrko4ma2kot!=""){
               $Vrdb3kpcuebp->db = $Vrdb3kpcuebp->load->database($Vrrko4ma2kot, TRUE);
           }
       }         
        $Vrgmu3jbi2sw=$Vrdb3kpcuebp->db->query($V4f1kyrl3j4t.' limit 1');
        $Vx2b2rngfqnd=$Vrgmu3jbi2sw->list_fields();
         
        $Vniwpupn20qj='<tr>';
        for($V55vc4mewy5w=0;$V55vc4mewy5w<count($Vx2b2rngfqnd);$V55vc4mewy5w++){
            $Vxnddwmbhizh=$Vx2b2rngfqnd[$V55vc4mewy5w];
            $Vxnddwmbhizh=str_replace('_',' ',$Vxnddwmbhizh);
            $Vniwpupn20qj.='<th data-options="field:\''.$Vx2b2rngfqnd[$V55vc4mewy5w].'\'">'.$Vxnddwmbhizh.'</th>';
        }
        $Vniwpupn20qj.='</tr>';
        $Vlf3gc3prjyc=$Vrdb3kpcuebp->input->get('search');
        $Vb43romxg3uu=site_url().'/run/browse/'.$Vg2oaazihley.'/'.$Vumyn3wklyrk.'/'.$Vkp4qvizwmsd;
        echo "<script>console.log('".$Vb43romxg3uu."');</script>";
        $Vzjno52zp30q='<table id="dg" class="easyui-datagrid", title="'.$Vetj4f5jhbcq.'"
              style="height:400px;width:900px", 
              data-options="rownumbers:true,pagination:true,pageSize:10,
              singleSelect:true,collapsible:true,url:\''
                .$Vb43romxg3uu.'\'
                    ,toolbar:\'#tb\'">
              <thead>'.$Vniwpupn20qj.'</thead>
              </table>';
	return $Vzjno52zp30q;

    }
}

if(!function_exists('browse_simple_edit')){
    function browse_simple_edit($V4f1kyrl3j4t,$Vetj4f5jhbcq='',$Vvp2z3iuh5yx=600,$Vslfsckkovsz=100,$V55vc4mewy5wd='dg',$Vpktvotzwqww=''){
        $Vrdb3kpcuebp =& get_instance();
         $Vrgmu3jbi2sw=$Vrdb3kpcuebp->db->query($V4f1kyrl3j4t);
        $Vx2b2rngfqnd=$Vrgmu3jbi2sw->list_fields();
        $Vniwpupn20qj='<tr>';
        for($V55vc4mewy5w=0;$V55vc4mewy5w<count($Vx2b2rngfqnd);$V55vc4mewy5w++){
            $Vxnddwmbhizh=$Vx2b2rngfqnd[$V55vc4mewy5w];
            $Vxnddwmbhizh=str_replace('_',' ',$Vxnddwmbhizh);
            $Vxnddwmbhizh=ucfirst($Vxnddwmbhizh);
            $Vniwpupn20qj.='<th data-options="field:\''.$Vx2b2rngfqnd[$V55vc4mewy5w].'\',editor:\'text\'">'.$Vxnddwmbhizh.'</th>';
        }
        $Vniwpupn20qj.='</tr>';
        $Vzjno52zp30q='<table id="'.$V55vc4mewy5wd.'" class="easyui-datagrid", title="'.$Vetj4f5jhbcq.'"
              style="height:auto;width:auto", 
              data-options="rownumbers:true, 
              singleSelect:true,collapsible:true,
              
              onClickRow: onClickRow"';
        if($Vpktvotzwqww!='')$Vzjno52zp30q.="toolbar:'#".$Vpktvotzwqww."',";
        $Vzjno52zp30q.='">';
        $Vzjno52zp30q.='<thead>'.$Vniwpupn20qj.'</thead>';
        $Vzjno52zp30q.="<tbody>";
                foreach($Vrgmu3jbi2sw->result_array() as $Vfhkt4vbeualow){
                    $Vfhkt4vbeualows[$V55vc4mewy5w++]=$Vfhkt4vbeualow;
                    $Vzjno52zp30q.="<tr>";
                    for($V55vc4mewy5w=0;$V55vc4mewy5w<count($Vx2b2rngfqnd);$V55vc4mewy5w++){
                        $Vxnddwmbhizh=$Vx2b2rngfqnd[$V55vc4mewy5w];
                        $Vzjno52zp30q.="<td>".$Vfhkt4vbeualow[$Vxnddwmbhizh]."</td>";
                    };
                    $Vzjno52zp30q.="</tr>";
               };
       $Vzjno52zp30q.='</tbody>';
        
       $Vzjno52zp30q.='</table>';
	   $Vvt20qqut4bu="
                <link rel=\"stylesheet\" type=\"text/css\" href=\"".base_url()."js/jquery-ui/themes/default/easyui.css\">
                <link rel=\"stylesheet\" type=\"text/css\" href=\"".base_url()."js/jquery-ui/themes/icon.css\">
                <link rel=\"stylesheet\" type=\"text/css\" href=\"".base_url()."js/jquery-ui/themes/demo.css\">
                <script src=\"".base_url()."js/jquery-ui/jquery.easyui.min.js\"></script>                
                
		<script type=\"text/javascript\">
		var editIndex = undefined;
		function endEditing(){
			if (editIndex == undefined){return true}
			if ($('#dgItem').datagrid('validateRow', editIndex)){
				//var ed = $('#dgItem').datagrid('getEditor', {index:editIndex,field:'item_number'});
				//var productname = $(ed.target).combobox('getText');
				//$('#dgItem').datagrid('getRows')[editIndex]['productname'] = productname;
				//$('#dgItem').datagrid('endEdit', editIndex);
				editIndex = undefined;
				return true;
			} else {
				return false;
			}
		}
		
		</script>		                                
                
            ";
        return $Vvt20qqut4bu.$Vzjno52zp30q;
    }
}


}