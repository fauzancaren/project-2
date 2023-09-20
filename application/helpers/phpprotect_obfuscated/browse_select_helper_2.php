<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('browse_select'))
{
    function browse_select($V0hn20bcphlz,$Vetj4f5jhbcq='',$Vufr4j2prwuj='',
            $Vumyn3wklyrk='',$Vzl5igrsjgyf=0,$Vemrq0xwjbl4=20
            ,$Vuwoqhapqeev='',$Vwhb1qbzspye='asc',$Vh22zbr1lifx=true)
    {
        $Vkclotdhdutg='';
        $V4f1kyrl3j4t=$V0hn20bcphlz;
        $Vts2bhrtmq4q='<input type="button" value="Del" 
                 onclick="del_row(\'#'.$Vumyn3wklyrk.'\');return false;"/>';
        $Vrt1fdha4vro=''; 
		$Vuba0fw5fyak='';
        if(is_array($V0hn20bcphlz)){
           $V4f1kyrl3j4t=$V0hn20bcphlz['sql'];
           if(isset($V0hn20bcphlz['caption']))$Vetj4f5jhbcq=$V0hn20bcphlz['caption'];
           if(isset($V0hn20bcphlz['class']))$Vufr4j2prwuj=$V0hn20bcphlz['class'];
           if(isset($V0hn20bcphlz['field_key']))$Vumyn3wklyrk=$V0hn20bcphlz['field_key'];
           if(isset($V0hn20bcphlz['offset']))$Vzl5igrsjgyf=$V0hn20bcphlz['offset'];
           if(isset($V0hn20bcphlz['limit']))$Vemrq0xwjbl4=$V0hn20bcphlz['limit'];
           if(isset($V0hn20bcphlz['order_column']))$Vuwoqhapqeev=$V0hn20bcphlz['order_column'];
           if(isset($V0hn20bcphlz['order_type']))$Vwhb1qbzspye=$V0hn20bcphlz['order_type'];
           if(isset($V0hn20bcphlz['show_action']))$Vh22zbr1lifx=$V0hn20bcphlz['show_action'];
           if(isset($V0hn20bcphlz['action_button']))$Vts2bhrtmq4q=$V0hn20bcphlz['action_button'];
           if(isset($V0hn20bcphlz['fields_input']))$Vkclotdhdutg=$V0hn20bcphlz['fields_input'];
           if(isset($V0hn20bcphlz['hidden']))$Vrt1fdha4vro=$V0hn20bcphlz['hidden']; 
           if(isset($V0hn20bcphlz['fields_sum']))$Vuba0fw5fyak=$V0hn20bcphlz['fields_sum']; 
           if(isset($V0hn20bcphlz['group_by']))$Vnfgodwmvzqn=$V0hn20bcphlz['group_by']; 
		   
        };
        $Vrdb3kpcuebp =& get_instance();
         $Vrdb3kpcuebp->load->library('template');
        $Vrdb3kpcuebp->load->library('table');
        $V55vc4mewy5w=0+$Vzl5igrsjgyf;        
 		$Vvmwm1jsklgc=array();	$Vqrmgnhjkdgq=array();	$Vq2lrqstguwz=array(); $Vca5wkcg4lwi=array();
		if($Vb4l4kzjmbgd=$Vrdb3kpcuebp->db->field_data($Vntfufcb4vaz)){
			foreach($Vb4l4kzjmbgd as $Vxnddwmbhizh){
				$Vvmwm1jsklgc[]=$Vxnddwmbhizh->type;
				$Vqrmgnhjkdgq[]=$Vxnddwmbhizh->name;
				$Vq2lrqstguwz[]=$Vxnddwmbhizh->max_length;
			}
		}

        $Vhruhyjfhch4='';
        for($V55vc4mewy5w=0;$V55vc4mewy5w<$Vdel4ku41qki;$V55vc4mewy5w++){
            $Vxnddwmbhizh=$Vxnddwmbhizhs[$V55vc4mewy5w];
			$Vo3wqa2tsxna=false;
			if(is_array($Vrt1fdha4vro)){
				for($Vuaufi3la1vg=0;$Vuaufi3la1vg<count($Vrt1fdha4vro);$Vuaufi3la1vg++){
					if(strcasecmp($Vrt1fdha4vro[$Vuaufi3la1vg], $Vxnddwmbhizh)==0 ){
						$Vo3wqa2tsxna=true;
					}
				}
			}
            
            $Vxnddwmbhizh=ucfirst(str_replace('_',' ',$Vxnddwmbhizh));
            
            if(!$Vo3wqa2tsxna)  $Vxnddwmbhizhs2[$V55vc4mewy5w]=$Vxnddwmbhizh;
            
            
            if(isset($_GET[$Vxnddwmbhizhs[$V55vc4mewy5w]])){
                $Vxt4wx3pvtez=$_GET[$Vxnddwmbhizhs[$V55vc4mewy5w]];
            } else {
                $Vxt4wx3pvtez='';
            }
            
            $Vxnddwmbhizhs_input[$V55vc4mewy5w]='<input id="'.$Vxnddwmbhizhs[$V55vc4mewy5w].'"/>';
             
            if(isset($_GET[$Vxnddwmbhizhs[$V55vc4mewy5w]])){
                $Vhruhyjfhch4=$Vhruhyjfhch4.' '.$Vxnddwmbhizhs[$V55vc4mewy5w].' like \''.$_GET[$Vxnddwmbhizhs[$V55vc4mewy5w]].'%\' and ';
            }
        }
        
        if($Vetj4f5jhbcq=='')$Vhruhyjfhch4='';
        if($Vhruhyjfhch4!=''){
            $Vhruhyjfhch4=substr($Vhruhyjfhch4,0,strlen($Vhruhyjfhch4)-4);
            if(preg_match('/ where /',$V4f1kyrl3j4t)){
                $V4f1kyrl3j4t=$V4f1kyrl3j4t.' AND '.$Vhruhyjfhch4;
            } else {
                $V4f1kyrl3j4t=$V4f1kyrl3j4t.' WHERE '.$Vhruhyjfhch4;                
            }
            if($Vuwoqhapqeev!='') $V4f1kyrl3j4t=$V4f1kyrl3j4t.' ORDER BY '.$Vuwoqhapqeev.' '.$Vwhb1qbzspye;
            $V4f1kyrl3j4t=$V4f1kyrl3j4t.' limit '.$Vzl5igrsjgyf*$Vemrq0xwjbl4.', '.$Vemrq0xwjbl4;
            $Vrgmu3jbi2sw=$Vrdb3kpcuebp->db->query($V4f1kyrl3j4t);
        } else {
            if($Vuwoqhapqeev!='') $V4f1kyrl3j4t=$V4f1kyrl3j4t.' ORDER BY '.$Vuwoqhapqeev.' '.$Vwhb1qbzspye;
            $V4f1kyrl3j4t=$V4f1kyrl3j4t.' limit '.$Vzl5igrsjgyf*$Vemrq0xwjbl4.', '.$Vemrq0xwjbl4;
            $Vrgmu3jbi2sw=$Vrdb3kpcuebp->db->query($V4f1kyrl3j4t);
            
        }
        
        if($Vh22zbr1lifx){ 
            if($Vetj4f5jhbcq!='')$Vxnddwmbhizhs2[$V55vc4mewy5w++]='Action';else $Vxnddwmbhizhs2[$V55vc4mewy5w++]='Act';
        }
        $Vrdb3kpcuebp->table->set_heading($Vxnddwmbhizhs2);
        $Vuaufi3la1vg=0;
		if(is_array($Vuba0fw5fyak)){
			for($Vuaufi3la1vg=0;$Vuaufi3la1vg<count($Vuba0fw5fyak);$Vuaufi3la1vg++){
				$Vuba0fw5fyak_value[$Vuba0fw5fyak[$Vuaufi3la1vg]]=0;
			}
		}
      
        foreach($Vrgmu3jbi2sw->result_array() as $Vjs4rkfllnin){
             
            for($V55vc4mewy5w=0;$V55vc4mewy5w<$Vdel4ku41qki;$V55vc4mewy5w++){
                $Vxnddwmbhizh=$Vxnddwmbhizhs[$V55vc4mewy5w];
                $Vo3wqa2tsxna=false;
                if(is_array($Vrt1fdha4vro)){
                    for($Vuaufi3la1vg=0;$Vuaufi3la1vg<count($Vrt1fdha4vro);$Vuaufi3la1vg++){
                        if(strcasecmp($Vrt1fdha4vro[$Vuaufi3la1vg], $Vxnddwmbhizh)==0 ){
                            $Vo3wqa2tsxna=true;
                            break;
                        }
                    }
                }
                if(!$Vo3wqa2tsxna){
                    if($Vvmwm1jsklgc[$V55vc4mewy5w]=='real' || $Vvmwm1jsklgc[$V55vc4mewy5w]=='double'){
                        $Vaclogmdqxwr[$V55vc4mewy5w]= '<div align="right">'.number_format($Vjs4rkfllnin[$Vxnddwmbhizh]).'</div>';
                    } else {
                        $Vaclogmdqxwr[$V55vc4mewy5w]=$Vjs4rkfllnin[$Vxnddwmbhizh];
                    }
                    if(is_array($Vkclotdhdutg)){
                       for($Vuaufi3la1vg=0;$Vuaufi3la1vg<count($Vkclotdhdutg);$Vuaufi3la1vg++){                            
                           if($Vxnddwmbhizh==$Vkclotdhdutg[$Vuaufi3la1vg]){
                              $Vaclogmdqxwr[$V55vc4mewy5w]='<input id="'.$Vxnddwmbhizh.$V55vc4mewy5w.'" value="'.$Vjs4rkfllnin[$Vxnddwmbhizh].'" style="width:50px"/>';
                           }
                       }
                    }
                }
				if(is_array($Vuba0fw5fyak)){
					for($Vuaufi3la1vg=0;$Vuaufi3la1vg<count($Vuba0fw5fyak);$Vuaufi3la1vg++){
						if(strcasecmp($Vuba0fw5fyak[$Vuaufi3la1vg],$Vxnddwmbhizh)==0){
							$Vuba0fw5fyak_value[$Vxnddwmbhizh]=$Vuba0fw5fyak_value[$Vxnddwmbhizh]+$Vjs4rkfllnin[$Vxnddwmbhizh];
							break;
						}
					}
				}
            }
            if($Vumyn3wklyrk=='') $Vnogyg4rdwft=$Vjs4rkfllnin[$Vxnddwmbhizhs[0]];else $Vnogyg4rdwft=$Vjs4rkfllnin[$Vumyn3wklyrk];

           if($Vetj4f5jhbcq!=''){
                $Vaclogmdqxwr[$V55vc4mewy5w++]='
                <input id="txtQty'.$Vuaufi3la1vg.'" style="width:30px" value="1"/>    
                <input type="button" value="Add" 
                onclick="add_row(\''.$Vuaufi3la1vg.'\',\''.$Vnogyg4rdwft.'\');return false;"/>';
           } else {
               if($Vh22zbr1lifx){
                    $Vrh3rktdbfvx=str_replace('#'.$Vumyn3wklyrk,$Vnogyg4rdwft, $Vts2bhrtmq4q);
                    $Vrh3rktdbfvx=str_replace('#',$Vnogyg4rdwft, $Vts2bhrtmq4q);
                   
                    $Vaclogmdqxwr[$V55vc4mewy5w++]=$Vrh3rktdbfvx;
               }
           }
            
            $Vrdb3kpcuebp->table->add_row($Vaclogmdqxwr);
            $Vuaufi3la1vg++;    
            $V55vc4mewy5w++;
        };
		$Vvt20qqut4bu="";
		for($V55vc4mewy5w=0;$V55vc4mewy5w<$Vdel4ku41qki;$V55vc4mewy5w++){
			$Vxnddwmbhizh=$Vxnddwmbhizhs[$V55vc4mewy5w];
			if(isset($Vuba0fw5fyak_value[$Vxnddwmbhizh])){
				$Vvt20qqut4bu[$V55vc4mewy5w]='<div align="right"><strong>'.number_format($Vuba0fw5fyak_value[$Vxnddwmbhizh]).'</strong></div>';
			} else {
				$Vvt20qqut4bu[$V55vc4mewy5w]="";
			}
		}
        $Vrdb3kpcuebp->table->add_row($Vvt20qqut4bu);
		
		
        $Vseudjagn2gx=$Vrdb3kpcuebp->template->template_table('titem');
        $Vrdb3kpcuebp->table->set_template($Vseudjagn2gx);
        $Vo4wt45fc3pu=$Vrdb3kpcuebp->table->generate();
        
        $Vrdb3kpcuebp->load->library('pagination');
        $Vthymwlrq5lo['base_url']=site_url('browse');
        $Vthymwlrq5lo['total_rows']=$V55vc4mewy5w;
        $Vthymwlrq5lo['per_page']=10;
        $Vthymwlrq5lo['uri_segment']=3;
        $Vrdb3kpcuebp->pagination->initialize($Vthymwlrq5lo);
        $Vzf44w4bnvh4=$Vrdb3kpcuebp->pagination->create_links();
        if($Vetj4f5jhbcq==''){
            $Vvt20qqut4bu='';
        } else {
        $Vvt20qqut4bu='
            <div id="divBrowse" >
            Rows <input id="txtLimit" value="'.$Vemrq0xwjbl4.'" style="width:50px"/>
            <strong>Search</strong>&nbsp
            <input id="txtSearch" name="txtSearch"/>
            <input type="button" onclick="b_search();return false;" value="Search"/>
            </div>
            ';
        }
        return $Vvt20qqut4bu.$Vo4wt45fc3pu;
    }
}