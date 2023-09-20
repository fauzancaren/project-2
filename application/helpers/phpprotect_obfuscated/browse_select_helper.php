<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('browse_select'))
{
    function browse_select($V0hn20bcphlz,$Vetj4f5jhbcq='',$Vufr4j2prwuj='',
            $Vumyn3wklyrk='',$Vzl5igrsjgyf=0,$Vemrq0xwjbl4=200
            ,$Vuwoqhapqeev='',$Vwhb1qbzspye='asc',$Vh22zbr1lifx=false)
    {
        $Vkclotdhdutg='';
        $V4f1kyrl3j4t=$V0hn20bcphlz;
        $Vts2bhrtmq4q='<input type="button" value="Del" 
                 onclick="del_row(\'#'.$Vumyn3wklyrk.'\');return false;"/>';
        $Vrt1fdha4vro=''; 
		$Vuba0fw5fyak='';
        $Vspgz03kmjc5=null;
        
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
           if(isset($V0hn20bcphlz['group_section_fields']))$Vspgz03kmjc5=$V0hn20bcphlz['group_section_fields']; 
        };
        $Vrdb3kpcuebp =& get_instance();
        $Vrdb3kpcuebp->load->library('template');
        $Vrdb3kpcuebp->load->library('table');
        $V55vc4mewy5w=0+$Vzl5igrsjgyf;
		$Vdel4ku41qki=0;
		$Vvmwm1jsklgc=array();	$Vqrmgnhjkdgq=array();	$Vq2lrqstguwz=array(); $Vca5wkcg4lwi=array();
		$Vxnddwmbhizh=array();	$Vxnddwmbhizhs=array();
		if( substr(CI_VERSION,0,1)== '2' ) {
			$Vrgmu3jbi2sw=$Vrdb3kpcuebp->db->query($V4f1kyrl3j4t.' limit 1');
			$Ve5kzng2n5pi = mysql_query($V4f1kyrl3j4t.' limit 1');
			$Vdel4ku41qki = mysql_num_fields($Ve5kzng2n5pi);
			$Vvmwm1jsklgc[0]='';$Vxnddwmbhizhs[0]='';            
			for ($V55vc4mewy5w=0; $V55vc4mewy5w < $Vdel4ku41qki; $V55vc4mewy5w++) {
				$Vvmwm1jsklgc[$V55vc4mewy5w]  = mysql_field_type($Ve5kzng2n5pi, $V55vc4mewy5w);
				$Vxnddwmbhizhs[$V55vc4mewy5w]  = mysql_field_name($Ve5kzng2n5pi, $V55vc4mewy5w);
				$Vq2lrqstguwz   = mysql_field_len($Ve5kzng2n5pi, $V55vc4mewy5w);
				$Vca5wkcg4lwis = mysql_field_flags($Ve5kzng2n5pi, $V55vc4mewy5w);

			}
		} else {
			$Vrgmu3jbi2sw=$Vrdb3kpcuebp->db->query($V4f1kyrl3j4t.' limit 1');
			if($Vb4l4kzjmbgd=$Vrgmu3jbi2sw->field_data()){
				foreach($Vb4l4kzjmbgd as $Vxnddwmbhizh){
					$Vvmwm1jsklgc[]=$Vxnddwmbhizh->type;
					$Vqrmgnhjkdgq[]=$Vxnddwmbhizh->name;
					$Vxnddwmbhizhs[]=$Vxnddwmbhizh->name;
					$Vq2lrqstguwz[]=$Vxnddwmbhizh->max_length;
					$Vdel4ku41qki++;
					
					
				}
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
						break;
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
            
            $Vrgmu3jbi2sw=$Vrdb3kpcuebp->db->query($V4f1kyrl3j4t);
        } else {
            if($Vuwoqhapqeev!='') $V4f1kyrl3j4t=$V4f1kyrl3j4t.' ORDER BY '.$Vuwoqhapqeev.' '.$Vwhb1qbzspye;
            
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
		$Vuafmhlpxqds=false;
		$Vbceg0rxxxec=$Vrgmu3jbi2sw->result_array();

		
		$Vdel4ku41qki_colspan=$Vdel4ku41qki;
		if(isset($Vrt1fdha4vro)){
			if(is_array($Vrt1fdha4vro)){
				$Vdel4ku41qki_colspan-=count($Vrt1fdha4vro);
			}
		}

		$Vl0q4noiexi4=0;
		$Vitt0jf42tl3="";$Vvxnom3ktvn0="";
		
		if(count($Vbceg0rxxxec)){
		$Vjs4rkfllnin=$Vbceg0rxxxec[$Vl0q4noiexi4];
        while( ! $Vuafmhlpxqds and $Vl0q4noiexi4<count($Vbceg0rxxxec) ){
			if( $Vjs4rkfllnin ){
				$Vaclogmdqxwr=null; 
				$Vnfgodwmvzqn1=null;
				if(isset($Vnfgodwmvzqn))$Vnfgodwmvzqn1=$Vnfgodwmvzqn[0];
				for($V55vc4mewy5wk=0;$V55vc4mewy5wk<$Vdel4ku41qki;$V55vc4mewy5wk++){
					$Vxnddwmbhizh=$Vxnddwmbhizhs[$V55vc4mewy5wk];
					if(isset($Vuba0fw5fyak_value[$Vxnddwmbhizh])){
						$Vasfhjwru2ep[$Vxnddwmbhizh]=0;
					} 
				}
				
				$Vvxnom3ktvn0="";
				$Vitt0jf42tl3="";
				if($Vnfgodwmvzqn1){
					$Vvxnom3ktvn0=strtoupper($Vjs4rkfllnin[$Vnfgodwmvzqn1]);
					$Vitt0jf42tl3=$Vvxnom3ktvn0;
                    $Vvxnom3ktvn02=$Vvxnom3ktvn0;
                    if($Vspgz03kmjc5){
                        foreach ($Vspgz03kmjc5 as $V55vc4mewy5wgsf => $Vxt4wx3pvtezue) {
                            $Vhueiez3yjlh=$Vxt4wx3pvtezue;
                            for($V55vc4mewy5wgsf2=0;$V55vc4mewy5wgsf2<count($Vhueiez3yjlh);$V55vc4mewy5wgsf2++){
                                $Vpksjrbwd32a=$Vhueiez3yjlh[$V55vc4mewy5wgsf2];
                                $Vvxnom3ktvn02.=" - ".$Vjs4rkfllnin[$Vpksjrbwd32a];
                            
                                
                            }
                        }
                        
                        
                    }
                    $Vphblieuqurr="<tr><td colspan=$Vdel4ku41qki_colspan><h2>$Vvxnom3ktvn02 </h2></td>";
                    $Vphblieuqurr.="</tr>";
					$Vrdb3kpcuebp->table->add_row($Vphblieuqurr);
				}
				while ( ! $Vuafmhlpxqds and $Vl0q4noiexi4<count($Vbceg0rxxxec) and $Vvxnom3ktvn0==$Vitt0jf42tl3 ) {
					$Vaclogmdqxwr=null; 
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
							if($Vxnddwmbhizh=="ttc_1x"){
								
							}
							if($Vvmwm1jsklgc[$V55vc4mewy5w]==5 || $Vvmwm1jsklgc[$V55vc4mewy5w]=='real' || $Vvmwm1jsklgc[$V55vc4mewy5w]=='5' || $Vvmwm1jsklgc[$V55vc4mewy5w]=="double" 
							|| $Vvmwm1jsklgc[$V55vc4mewy5w]=="int" ){
								
								$Vxt4wx3pvtez=$Vjs4rkfllnin[$Vxnddwmbhizh];

									$Vxt4wx3pvtez=number_format($Vxt4wx3pvtez,2);



								$Vaclogmdqxwr[$V55vc4mewy5w]= '<div align="right">'.$Vxt4wx3pvtez.'</div>';
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
									if(isset($Vasfhjwru2ep[$Vxnddwmbhizh])){
										$Vasfhjwru2ep[$Vxnddwmbhizh]=$Vasfhjwru2ep[$Vxnddwmbhizh]+$Vjs4rkfllnin[$Vxnddwmbhizh];
									}
									break;
								}
							}
						}
					}
					if($Vumyn3wklyrk=='') $Vl0q4noiexi4ey=$Vjs4rkfllnin[$Vxnddwmbhizhs[0]];else $Vl0q4noiexi4ey=$Vjs4rkfllnin[$Vumyn3wklyrk];

					if($Vetj4f5jhbcq!=''){
						$Vaclogmdqxwr[$V55vc4mewy5w++]='
						<input id="txtQty'.$Vuaufi3la1vg.'" style="width:30px" value="1"/>    
						<input type="button" value="Add" 
						onclick="add_row(\''.$Vuaufi3la1vg.'\',\''.$Vl0q4noiexi4ey.'\');return false;"/>';
				   } else {
					   if($Vh22zbr1lifx){
							$Vrh3rktdbfvx=str_replace('#'.$Vumyn3wklyrk,$Vl0q4noiexi4ey, $Vts2bhrtmq4q);
							$Vrh3rktdbfvx=str_replace('#',$Vl0q4noiexi4ey, $Vts2bhrtmq4q);
						   
							$Vaclogmdqxwr[$V55vc4mewy5w++]=$Vrh3rktdbfvx;
					   }
				   }
					
					$Vrdb3kpcuebp->table->add_row($Vaclogmdqxwr);
					$Vuaufi3la1vg++;    
					$V55vc4mewy5w++;
					$Vl0q4noiexi4++;
					if($Vl0q4noiexi4<count($Vbceg0rxxxec)){
						$Vjs4rkfllnin=$Vbceg0rxxxec[$Vl0q4noiexi4];
						$Vuafmhlpxqds = ! $Vjs4rkfllnin;
					}
					if($Vjs4rkfllnin){
						if($Vnfgodwmvzqn1){
							$Vvxnom3ktvn0=strtoupper($Vjs4rkfllnin[$Vnfgodwmvzqn1]);
						}
					}
					
				}
				
				if($Vnfgodwmvzqn1){
					if(isset($Vuba0fw5fyak[0])){

						$Vzien3th2np4=null;
						for($V55vc4mewy5wk=0;$V55vc4mewy5wk<$Vdel4ku41qki;$V55vc4mewy5wk++){
							$Vxnddwmbhizh=$Vxnddwmbhizhs[$V55vc4mewy5wk];
							$Vzien3th2np4[$V55vc4mewy5wk]="";							
							if(isset($Vuba0fw5fyak_value[$Vxnddwmbhizh])){
								if(is_array($Vzien3th2np4))$Vzien3th2np4[count($Vzien3th2np4)-2]='<div align="right"><strong>'.number_format($Vasfhjwru2ep[$Vxnddwmbhizh],2).'</strong></div>';
							} else {
								
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
									if($V55vc4mewy5wk==1){
										if(is_array($Vzien3th2np4))$Vzien3th2np4[count($Vzien3th2np4)-1]="<b>SUB TOTAL</b>";										
									} 									
								}
							}
						}
						$Vrdb3kpcuebp->table->add_row($Vzien3th2np4);						
					}
				}
			
			
			}
        };
		}
		$Vwtnbq2aepbn=null;
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
			if(isset($Vuba0fw5fyak_value[$Vxnddwmbhizh])){				
				if(is_array($Vwtnbq2aepbn))$Vwtnbq2aepbn[count($Vwtnbq2aepbn)]='<div align="right"><strong>'.number_format($Vuba0fw5fyak_value[$Vxnddwmbhizh],2).'</strong></div>';
			} else {
				if(!$Vo3wqa2tsxna){
					$Vwtnbq2aepbn[]="";				
				}
			}
			
		}
        $Vrdb3kpcuebp->table->add_row($Vwtnbq2aepbn);
		if($Vufr4j2prwuj=="")$Vufr4j2prwuj="titem";
		
        $Vseudjagn2gx=$Vrdb3kpcuebp->template->template_table($Vufr4j2prwuj);
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