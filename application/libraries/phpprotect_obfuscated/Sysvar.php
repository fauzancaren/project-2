<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Sysvar
 {
 
private $Vybdwso4czql='varname',$Viob5nxomuda="";
private $Vhnxkrqt54xz='system_variables';
private $V33rjqhzg3db=false;
 
function __construct()
{
     $this->CI =& get_instance();               
     $this->CI->load->helper('mylib');
     $this->CI->load->library("list_of_values");
 }
     function debug_true(){
    	 $this->debug=true;
     }
      function debug_false(){
    	 $this->debug=false;
     }
    
    function count_all(){
    	return $this->db->count_all($this->table_name);
    }
    function get_by_id($Vgvh45dlasvt){
    	$this->db->where($this->primary_key,$Vgvh45dlasvt);
    	return $this->db->get($this->table_name);
    } 
	function exist_var($Vvwwet2wj5jg){
		$Vcrkisw3ebr1=false;
		$Vj3vawj3lnms="select * from system_variables where varname='$Vvwwet2wj5jg'";
		if(multi_company_single_db()) $Vj3vawj3lnms.=" and cid='".cid()."'";   		
    	if($Vzr5gmgksaot=$this->CI->db->query($Vj3vawj3lnms)) {
            $Vcrkisw3ebr1=$Vzr5gmgksaot->num_rows()>0;
    	}
		return $Vcrkisw3ebr1;		
	}
    function getvar($Vvwwet2wj5jg, $Vukzeharq03d="", $V33rjqhzg3db=false){
    	if($Vvwwet2wj5jg=="COA Hutang Komisi"){
    		$V2h3g1mfjgnb="";
    	}
    	$V2h3g1mfjgnb="";
    	if($this->debug){
    		$Vj3vawj3lnms="select * from system_variables_debug where varname='$Vvwwet2wj5jg'";
    	} else {
    		$Vj3vawj3lnms="select * from system_variables where varname='$Vvwwet2wj5jg'";		
    	}
		if(multi_company_single_db()) $Vj3vawj3lnms.=" and cid='".cid()."'";   
        
        
    	if($Vzr5gmgksaot=$this->CI->db->query($Vj3vawj3lnms)) {
            if($Vzr5gmgksaot->num_rows()){
                $Vgr5l53dojok=$Vzr5gmgksaot->row();
                $V2h3g1mfjgnb=$Vgr5l53dojok->varvalue;
    		} else {
    		    if($Vukzeharq03d!=""){
                    $V2h3g1mfjgnb=$Vukzeharq03d;
                    $this->insert($Vvwwet2wj5jg,$Vukzeharq03d,'auto');
    		    }
    		}
    	}
        if($V2h3g1mfjgnb=="")$V2h3g1mfjgnb=$Vukzeharq03d;
    	return $V2h3g1mfjgnb;
    }
    function update($Vvwwet2wj5jg,$Vukzeharq03d){
    	$this->save($Vvwwet2wj5jg,$Vukzeharq03d);
    }
    function save($Vvwwet2wj5jg,$Vukzeharq03d){    	
    	$Vlhi02kz1ecz['varvalue']=$Vukzeharq03d;
		if(multi_company_single_db()) $Vlhi02kz1ecz['cid']=cid();   
    	return $this->CI->db->where($this->primary_key,$Vvwwet2wj5jg)->update($this->table_name,$Vlhi02kz1ecz);
    }
    function insert($Vvwwet2wj5jg,$Vukzeharq03d,$Vtudpdj4fzp2=''){
    	$Vlhi02kz1ecz['varname']=$Vvwwet2wj5jg;
    	$Vlhi02kz1ecz['varvalue']=$Vukzeharq03d;
        $Vlhi02kz1ecz['keterangan']=$Vtudpdj4fzp2;		
		if(multi_company_single_db()) $Vlhi02kz1ecz['cid']=cid();   
    	
    	
    	
    	$Vhgw1z3cbf45= $this->CI->db->insert($this->table_name,$Vlhi02kz1ecz);
    	return $Vhgw1z3cbf45;
    }
    function _varX($Vti5z3fl2kb4) {
    	if($this->debug){
    		$Vj3vawj3lnms="select * from system_variables_debug where varname='$Vti5z3fl2kb4'";
    	} else {
    		$Vj3vawj3lnms="select * from system_variables where varname='$Vti5z3fl2kb4'";		
    	}
		if(multi_company_single_db()) $Vj3vawj3lnms.=" and cid='".cid()."'";   
    	if($Vzr5gmgksaot=$this->CI->db->query($Vj3vawj3lnms)) {
    		if($Vgr5l53dojok=$Vzr5gmgksaot->row()){
    			return $Vgr5l53dojok->varvalue;
    		} else {
    			return "";
    		}
    	} else {
    		return "";
    	}
    }
    function autonumber($Vvwwet2wj5jg,$Vfz5n5xzjl5f=0,$Vuasdivvnsc0=''){    
    	$Vukzeharq03d=$this->getvar($Vvwwet2wj5jg);           
		
    	if($Vukzeharq03d=="") {
			$Vukzeharq03d=$Vuasdivvnsc0;                    
			if($Vukzeharq03d=='') return $Vukzeharq03d;
			$this->insert($Vvwwet2wj5jg, $Vukzeharq03d,'Numbering');
		}    
		if($Vukzeharq03d=="0"){
			$Vukzeharq03d=$Vuasdivvnsc0;
			$this->update($Vvwwet2wj5jg,$Vukzeharq03d);
		}
    	$V03bwyo0ikcr=array("","I","II","III","IV","V","VI","VII","VIII","IX","X","XI","XII");
    	$V525laldazt1=explode("~",$Vukzeharq03d);
    	$Vq1niwh0xd32=false;
    	$Vwfenfe0n4vm=0;
    	$Vy3okq3x2yu2=0;
    	$Vkf3o4k2ddxk="";
    	$Vmioytacunv3="";$Vv5vkpdw2ed2="";$V0rlpguklyfj="";$Vo5psknixicd="";
    	$Vkonhtlne4kg=-1;
    	foreach($V525laldazt1 as $Viku5gdx3nbp){
    		$Vqqxv1tmdjox=substr($Viku5gdx3nbp,0,1);
    		$Vjpriqlpfr32=substr($Viku5gdx3nbp,1,strlen($Viku5gdx3nbp));
    		$Vkzki0315fzi=strlen($Vjpriqlpfr32);
    		$Vo5psknixicd.=$Vqqxv1tmdjox;
			$Vixg4lz4qzqp="";
    		
    		switch ($Vqqxv1tmdjox) {
    		case "!":
    			$Vkf3o4k2ddxk.=$Vjpriqlpfr32;
    			
    			break;
    		case "@":
    			if($Vjpriqlpfr32=="COM"){
    				$Vkf3o4k2ddxk.=cid();
    			} else if($Vjpriqlpfr32=="TK"){
    				
    				$Vkf3o4k2ddxk.="TK";
    			}else if($Vjpriqlpfr32=="PTK"){
    				
    				$Vkf3o4k2ddxk.="PTK";
                }else if($Vjpriqlpfr32=="GDG"){
                    $Vkf3o4k2ddxk.=current_gudang();
    			} else {
    				$Vkf3o4k2ddxk.=$Vjpriqlpfr32;				
    			}
    			
    			break;
    		case "#":
    			$Vixg4lz4qzqp=$Vjpriqlpfr32;
    			if($Vjpriqlpfr32=="MM") $Voge2gth3emf=date("m");
    			elseif($Vjpriqlpfr32=="YY") $Voge2gth3emf=date("y");
    			elseif($Vjpriqlpfr32=="DD") $Voge2gth3emf=date("d");
    			else {
    				$Vixg4lz4qzqp="";
    				$Voge2gth3emf=$V03bwyo0ikcr[strval(date("m"))];
    			}
    			$Vkf3o4k2ddxk.=$Voge2gth3emf;
    			break;
    		case "$":
    			$Vk3nrjyiblbx=strval($Vjpriqlpfr32);
    			$Vwfenfe0n4vm=strlen($Vkf3o4k2ddxk);
    			$Vy3okq3x2yu2=$Vkzki0315fzi;
    			$Vkf3o4k2ddxk.=strzero(strval($Vjpriqlpfr32),$Vkzki0315fzi);
    			$Vjpriqlpfr32 = strzero(strval($Vjpriqlpfr32)+$Vfz5n5xzjl5f, $Vkzki0315fzi);
    			
    			$Vq1niwh0xd32=True;
    			
    			break;
    		case "?":	
    			if(($Vq1niwh0xd32 and strlen($Vixg4lz4qzqp))>0) {
    				$Vitpfsuxoydo=strval(substr($Viku5gdx3nbp,0,4));
    				$Vzctr2oz4px0=substr($Vjpriqlpfr32,0,2);
    				if($Vzctr2oz4px0=="MM"){
    					if(strval(date("m"))<>strval($Vitpfsuxoydo)){
    						$Vmioytacunv3=substr($Vkf3o4k2ddxk,$Vwfenfe0n4vm,$Vy3okq3x2yu2);
    						$Vuviky42cf2z=strzero(1,$Vy3okq3x2yu2);
    						$V0rlpguklyfj=substr($Vkf3o4k2ddxk,$Vwfenfe0n4vm+$Vy3okq3x2yu2+1,strlen($Vkf3o4k2ddxk));
    						$Vkf3o4k2ddxk=$Vmioytacunv3.$Vuviky42cf2z.$V0rlpguklyfj;
    					}
    				} elseif ($Vzctr2oz4px0=="DD") {
    					if(strval(date("d"))<>strval($Vitpfsuxoydo)){
    						$Vmioytacunv3=substr($Vkf3o4k2ddxk,$Vwfenfe0n4vm);
    						$Vuviky42cf2z=strzero(1,$Vy3okq3x2yu2);
    						$V0rlpguklyfj=substr($Vkf3o4k2ddxk,$Vwfenfe0n4vm+$Vy3okq3x2yu2+1,strlen($Vkf3o4k2ddxk));
    						$Vkf3o4k2ddxk=$Vmioytacunv3.$Vuviky42cf2z.$V0rlpguklyfj;
    					}
    				} elseif ($Vzctr2oz4px0=="YY") {
    					if(strval(date("Y"))-2000<>strval($Vitpfsuxoydo)){
    						$Vmioytacunv3=substr($Vkf3o4k2ddxk,$Vwfenfe0n4vm);
    						$Vuviky42cf2z=strzero(1,$Vy3okq3x2yu2);
    						$V0rlpguklyfj=substr($Vkf3o4k2ddxk,$Vwfenfe0n4vm+$Vy3okq3x2yu2+1,strlen($Vkf3o4k2ddxk));
    						$Vkf3o4k2ddxk=$Vmioytacunv3.$Vuviky42cf2z.$V0rlpguklyfj;
    					}
    				}
    			}
    			break;
    		} 
    			
    		$Vo5psknixicd.=$Vjpriqlpfr32."~";		
    	}	
    	
    	if($Vfz5n5xzjl5f<>0){
    		if(substr($Vo5psknixicd,-1,1)=="~") $Vo5psknixicd=substr($Vo5psknixicd,0,strlen($Vo5psknixicd)-1);
    		
    		$this->save($Vvwwet2wj5jg,$Vo5psknixicd);
    	}
            
    	return $Vkf3o4k2ddxk;
    }
    function autonumber_inc($Vky5q3kgawrn){
    	$this->autonumber($Vky5q3kgawrn,1);
    }
    function autonumber_dec($Vky5q3kgawrn){
    	$this->autonumber($Vky5q3kgawrn,-1);
    }
    function lookup($Vvwwet2wj5jg){
		$Vj3vawj3lnms="select varvalue,keterangan from ".$this->table_name
		." where varname='Lookup.".$Vvwwet2wj5jg."' ";
		if(multi_company_single_db()) $Vj3vawj3lnms.=" and cid='".cid()."'";   		
		$Vj3vawj3lnms.=" order by varvalue";
		$Vzr5gmgksaotuery=$this->CI->db->query($Vj3vawj3lnms);
		$V2h3g1mfjgnb=array();$V2h3g1mfjgnb['']='- Select -';
 		foreach ($Vzr5gmgksaotuery->result() as $Vgr5l53dojok){$V2h3g1mfjgnb[$Vgr5l53dojok->varvalue]=$Vgr5l53dojok->keterangan;}		 
		return $V2h3g1mfjgnb;
	}
    function get_section($Vjytafdge5t5){
        return $this->CI->db->where("section",$Vjytafdge5t5)->get($this->table_name);
    }
    function input_text($Vfen0srpywcj,$Vvwwet2wj5jg,$Vukzeharq03d,$V31rnx2rpx53){
        $Vfen0srpywcj=strtoupper($Vfen0srpywcj);
        $V1n3vvo1ovjt="";
        if($Vfen0srpywcj=="BOOLEAN"){
            $V1n3vvo1ovjt=form_checkbox($Vvwwet2wj5jg,$Vukzeharq03d,$Vukzeharq03d==""?false:false,"id='$Vvwwet2wj5jg'");
        } else if ($Vfen0srpywcj=="LIST"){
            if($V31rnx2rpx53!=""){
                $V31rnx2rpx53_value=$this->list_of_values->get_by_name($V31rnx2rpx53);
                $V1n3vvo1ovjt=form_dropdown($Vvwwet2wj5jg,$V31rnx2rpx53_value,$Vukzeharq03d,"id='$Vvwwet2wj5jg'");
            } 
        } else if ($Vfen0srpywcj=="DATETIME"){
            $V1n3vvo1ovjt=my_input_date(array("field_name"=>$Vvwwet2wj5jg,"field_value"=>$Vukzeharq03d,"id='$Vvwwet2wj5jg'"));
        } else if ($Vfen0srpywcj=="NUMERIC"){
            if($Vukzeharq03d=="" || !is_numeric($Vukzeharq03d))$Vukzeharq03d=0;
        }
        if($V1n3vvo1ovjt==""){
            $V1n3vvo1ovjt=form_input($Vvwwet2wj5jg,$Vukzeharq03d,"id='$Vvwwet2wj5jg' style='width:300px'");
        }                
        return $V1n3vvo1ovjt;        
    }
}
