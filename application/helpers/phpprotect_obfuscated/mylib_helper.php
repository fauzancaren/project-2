<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

date_default_timezone_set("Asia/Jakarta");

if(!function_exists("show_error")){
	function show_error($Vvtmbv0bukvm=""){
		$Vrdb3kpcuebp=&get_instance();		
		$Vigzdfzehwux='Some error occured.';
		if($Vvtmbv0bukvm!='')$Vigzdfzehwux.=', module: '.$Vvtmbv0bukvm;
		if($Vffpb05t25se=$Vrdb3kpcuebp->db->error()){
			$Vigzdfzehwux.=", err: ".$Vffpb05t25se['code'];
			$Vigzdfzehwux.=", desc: ".$Vffpb05t25se['message'];
		}
			
		$Vrdb3kpcuebp->syslog_model->add("module: ".$Vvtmbv0bukvm,$Vigzdfzehwux,"error");
		return $Vigzdfzehwux;
	}
}

if(!function_exists("show_only_current_sid")){
	function show_only_current_sid(){
		$Vrdb3kpcuebp=&get_instance();
		return $Vrdb3kpcuebp->config->item("show_only_current_sid");
	}
}
if(!function_exists("multi_company_single_db")){
	function multi_company_single_db(){
		$Vrdb3kpcuebp =& get_instance();		
		$Vo4wt45fc3pu=$Vrdb3kpcuebp->config->item("multi_company_type")=="1"; 
		return $Vo4wt45fc3pu;
	}
}
if(!function_exists("themes")){
    function themes(){
		$Vrdb3kpcuebp =& get_instance();
		$Vrdb3kpcuebp->load->library("sysvar");
		$Vddm3z4avqhg=$Vrdb3kpcuebp->sysvar->getvar('themes','standard');
		if($Vddm3z4avqhg==""){
			$Vddm3z4avqhg="standard";
		}
		return $Vddm3z4avqhg;
	}
}

if(!function_exists("menu")){
    function menu($V3awurwxucbv,$Vmte2zwu4czl,$Vhyjktplnzot=false){
        if(!$Vhyjktplnzot){
            echo "<div><a href='".base_url()."index.php/".$Vmte2zwu4czl."' class='easyui-linkbutton' data-options='plain:true'>".$V3awurwxucbv."</a></div>";    
        } else {
            echo "<div><a href='#' onclick=\"load_menu('$Vmte2zwu4czl')\"  class='easyui-linkbutton' data-options='plain:true'>".$V3awurwxucbv."</a></div>";
        }
    }
}
if(!function_exists("add_menu_drop")){
    function add_menu_drop($Voohdyo4y2c0,$Vetj4f5jhbcq,$Vksqgnt3fo22) {
        if(allow_mod($Vksqgnt3fo22)){
            echo "<li><a onclick=load_menu('$Voohdyo4y2c0') href='#'>$Vetj4f5jhbcq</a></li>";
        }
    }
}
if(!function_exists("add_menu_drop_2")){
    function add_menu_drop_2($Voohdyo4y2c0,$Vetj4f5jhbcq,$Vksqgnt3fo22) {
        if(allow_mod($Vksqgnt3fo22)){
            echo "<li><a href='".base_url()."index.php/$Voohdyo4y2c0'
            class='info_link' >$Vetj4f5jhbcq</a></li>";
        }
    }
}

	if ( ! function_exists('set_show_columns')) {
    function set_show_columns($Vnogyg4rdwft,$Vmfvrsd5xyqh){
	        $Vrdb3kpcuebp =& get_instance();
			$Vbwghgcii23x=$Vrdb3kpcuebp->session->userdata("cols_".$Vnogyg4rdwft,null);
			
			if($V50qm2tnjvql=$Vrdb3kpcuebp->input->get("ck_reset")){
				$Vrdb3kpcuebp->session->unset_userdata("cols_".$Vnogyg4rdwft);
				$Vbwghgcii23x=null;
				echo json_encode(array("success"=>true,"msg"=>"Success"));
				return false;
			} else if ($Vrts5n2pgtsg=$Vrdb3kpcuebp->input->get('ck_double_click')){
				$Vrdb3kpcuebp->session->set_userdata("row_double_click",true);
				echo json_encode(array("success"=>true,"msg"=>"Success"));
				return false;
								
			} else {

							
				if($Vo3qhonlxd4h=$Vrdb3kpcuebp->input->get("ck_cols")){
					$Vbwghgcii23x=$Vo3qhonlxd4h;
					$Vrdb3kpcuebp->session->set_userdata("cols_".$Vnogyg4rdwft,$Vo3qhonlxd4h);
					echo json_encode(array("success"=>true,"msg"=>"Success"));
					return false;
				}
				
			}
						
			if($Vbwghgcii23x){
				$Vmfvrsd5xyqh_tmp=null;
				$Vmfvrsd5xyqh_tmp_caption=null;
				$Vx2b2rngfqnd=$Vmfvrsd5xyqh['fields'];
				$Vx2b2rngfqndcap=$Vmfvrsd5xyqh['fields_caption'];
				for($Veatheitiwyj=0;$Veatheitiwyj<count($Vbwghgcii23x);$Veatheitiwyj++){
					$Vxnddwmbhizh=$Vbwghgcii23x[$Veatheitiwyj];
					for($Vjxu3xqgyfqr=0;$Vjxu3xqgyfqr<count($Vx2b2rngfqnd);$Vjxu3xqgyfqr++){
						if($Vxnddwmbhizh==$Vx2b2rngfqnd[$Vjxu3xqgyfqr]){
							$Vmfvrsd5xyqh_tmp[$Veatheitiwyj]=$Vxnddwmbhizh;
							$Vmfvrsd5xyqh_tmp_caption[$Veatheitiwyj]=$Vx2b2rngfqndcap[$Vjxu3xqgyfqr];
							break;
						}
					}
				}
				if($Vmfvrsd5xyqh_tmp){
					$Vmfvrsd5xyqh['fields']=$Vmfvrsd5xyqh_tmp;
					$Vmfvrsd5xyqh['fields_caption']=$Vmfvrsd5xyqh_tmp_caption;
				}
			}
			return $Vmfvrsd5xyqh;		
		}
	}

if ( ! function_exists('app_active')) {
    function app_active($V2xhxrsikwts){
        $Vkgk3bhkc4ab =& get_instance();
        $Vwldxinfzu1o=false;
        $V4o3bhwsslkg=$Vkgk3bhkc4ab->db->select("is_active")->where("app_id",$V2xhxrsikwts)->get("maxon_apps");
        if($Vzvzfgcp2tbp=$V4o3bhwsslkg->row()){
            $Vwldxinfzu1o=$Vzvzfgcp2tbp->is_active==1?true:false;
        }
        return $Vwldxinfzu1o;
    }
}

if(!function_exists('c_')){
    function c_($Vod4huiky01j){
        if($Vod4huiky01j){
            return str_replace(',','',$Vod4huiky01j);                
        } else {
            return 0;
        }
    }
}
if(!function_exists('valtime')){
    function valtime($Vod4huiky01j){
        if($Vod4huiky01j){
            return str_replace(':','',$Vod4huiky01j);                
        } else {
            return 0;
        }
    }
}

if(!function_exists("menu")){
function menu($Vd1fy0z21oe4,$Vosa1nutiyyy,$Vfpj23moubyt=false){
		if(!$Vfpj23moubyt){
			echo "<div><a href='".base_url()."index.php/".$Vosa1nutiyyy."' class='easyui-linkbutton' data-options='plain:true'>".$Vd1fy0z21oe4."</a></div>";	
		} else {
			echo "<div><a href='#' onclick=\"load_menu('$Vosa1nutiyyy')\"  class='easyui-linkbutton' data-options='plain:true'>".$Vd1fy0z21oe4."</a></div>";
		}
	}
}
if(!function_exists("add_menu_drop")){
	function add_menu_drop($Vj5jlhaiy3pt,$Vfhy4sj0k5r0,$V1tt52z1ti3i) {
		if(allow_mod($V1tt52z1ti3i)){
			echo "<li><a onclick=load_menu('$Vj5jlhaiy3pt') href='#'>$Vfhy4sj0k5r0</a></li>";
		}
	}
}
if(!function_exists("add_menu_drop_2")){
	function add_menu_drop_2($Vj5jlhaiy3pt,$Vfhy4sj0k5r0,$V1tt52z1ti3i) {
		if(allow_mod($V1tt52z1ti3i)){
			echo "<li><a href='".base_url()."index.php/$Vj5jlhaiy3pt'
			class='info_link' >$Vfhy4sj0k5r0</a></li>";
		}
	}
	
}
if(!function_exists("load_picture")){
	function load_picture($Vbgcxtudwyky=''){
		if($Vbgcxtudwyky=='') return base_url()."images/no-images.png";
		$Vkvj4oz1rowv=FCPATH . "tmp/".$Vbgcxtudwyky;
		if(file_exists($Vkvj4oz1rowv)){
			return base_url()."tmp/".$Vbgcxtudwyky;
		} else {
			return base_url()."images/no-images.png";
		}
	}
}
if(!function_exists("my_input_date")){
	function my_input_date($Vfhy4sj0k5r0,$Vkvj4oz1rowvield_name,$Vkvj4oz1rowvield_value,$Vys2ufxmeukp="",$Vuq252mjfwap=""){
		echo "<div class='form-group'>
		<label class='control-label ".$Vys2ufxmeukp."' for='".$Vkvj4oz1rowvield_name."'>".$Vfhy4sj0k5r0."</label>
		<div class='".$Vuq252mjfwap."'>".form_input($Vkvj4oz1rowvield_name,$Vkvj4oz1rowvield_value,
		"id='".$Vkvj4oz1rowvield_name."' class='form-control input-sm easyui-datetimebox' 
		data-options='formatter:format_date,parser:parse_date'
		style='width:200px'
		")."</div></div>";
	}
}
if(!function_exists("form_input_date")){
	function form_input_date($Vkvj4oz1rowvield_name,$Vkvj4oz1rowvield_value,$Vys2ufxmeukp="",$Vuq252mjfwap=""){
		echo form_input($Vkvj4oz1rowvield_name,$Vkvj4oz1rowvield_value,
		"id='".$Vkvj4oz1rowvield_name."' class='easyui-datetimebox' 
		data-options='formatter:format_date,parser:parse_date'
		");
	}
}
if(!function_exists("my_button")){
	function my_button($Vfhy4sj0k5r0,$Vfpj23moubyt,$Vi5kdvuyj11y,$Vmojfdfydo50){
		echo "<a href='#' onclick='$Vfpj23moubyt'
		class='btn btn-primary glyphicon glyphicon-$Vi5kdvuyj11y'
		title='$Vmojfdfydo50'>$Vfhy4sj0k5r0</a>";
	}
}
if(!function_exists("my_button_submit")){
	function my_button_submit($Vfhy4sj0k5r0='Submit'){
		echo "<input type='submit' value='$Vfhy4sj0k5r0' name='submit' name='submit' 
		class='btn btn-primary'>";
	}
}

if(!function_exists("my_input_2")){
	function my_input_2($Vyexmckl1jkl,$Vkvj4oz1rowvield_name='',$Vkvj4oz1rowvield_value=''){
	   my_input($Vyexmckl1jkl,$Vkvj4oz1rowvield_name,$Vkvj4oz1rowvield_value,"x","x");
		
	}
}
if(!function_exists("my_input3")){
    function my_input3($V3bhkpxf35qp){
        $Vi0jpjud5e12=(object)$V3bhkpxf35qp;
        if(!isset($Vi0jpjud5e12->extra))$Vi0jpjud5e12->extra="";
        if(!isset($Vi0jpjud5e12->value))$Vi0jpjud5e12->value="";
        $Vuuba4q0aqhe=$Vi0jpjud5e12->field;
        if(isset($Vi0jpjud5e12->id))$Vuuba4q0aqhe=$Vi0jpjud5e12->id;
        $Vcuho5gwrsjg=form_input($Vi0jpjud5e12->field,$Vi0jpjud5e12->value,"id='$Vuuba4q0aqhe' $Vi0jpjud5e12->extra");
        if(isset($Vi0jpjud5e12->button))$Vcuho5gwrsjg.=link_button('',$Vi0jpjud5e12->func,"search");
        if(isset($Vi0jpjud5e12->button_add))$Vcuho5gwrsjg.=link_button('',$Vi0jpjud5e12->func_add,"add");
        return $Vcuho5gwrsjg;
    }
}

if(!function_exists("my_input")){
	function my_input($Vmfvrsd5xyqh,$Vkhvufhbr4hf='',$V0kunm200nck='',$Vetj4f5jhbcq_class="",$V1knm3bavuoj="",$Vovexk3mzujo=""){
		$Vetj4f5jhbcq=$Vmfvrsd5xyqh;
		$Vj0wldqjnulj="";
		$Vb5kn1gbu0ep="";
		$V1knm3bavuoj_field='';
		$Vaxehhzoh0mw=""; $Vs1wr4meyn3m="";
		$Vs5uyja3ncde="";
		if(is_array($Vmfvrsd5xyqh)){
			foreach($Vmfvrsd5xyqh as $Vnogyg4rdwft=>$Vupmbtmhxioj)
			{
				if ( $Vnogyg4rdwft == "caption" ) $Vetj4f5jhbcq=$Vupmbtmhxioj;
				if ( $Vnogyg4rdwft == "sub_caption" ) $Vj0wldqjnulj=$Vupmbtmhxioj;
				if ( $Vnogyg4rdwft == "field_name" ) $Vkhvufhbr4hf=$Vupmbtmhxioj;
				if ( $Vnogyg4rdwft == "value" ) $V0kunm200nck=$Vupmbtmhxioj;
				if ( $Vnogyg4rdwft == "caption_class" ) $Vetj4f5jhbcq_class=$Vupmbtmhxioj;
				if ( $Vnogyg4rdwft == "text_class" ) $V1knm3bavuoj=$Vupmbtmhxioj;
				if ( $Vnogyg4rdwft == "style" ) $Vovexk3mzujo=$Vupmbtmhxioj;
				if ( $Vnogyg4rdwft == "align" ) $Vb5kn1gbu0ep=' align="'.$Vupmbtmhxioj.'" ';
				if ( $Vnogyg4rdwft == "text_class_field" ) $V1knm3bavuoj_field=$Vupmbtmhxioj;
				if ( $Vnogyg4rdwft == "param" ) $Vaxehhzoh0mw=$Vupmbtmhxioj;
				if ( $Vnogyg4rdwft == "show_button" ) $Vs1wr4meyn3m=$Vupmbtmhxioj;
				if ( $Vnogyg4rdwft == "clear_line" ) $Vs5uyja3ncde=$Vupmbtmhxioj;
			}
		}
		
		
		echo "<div class='form-group'>
		<label $Vb5kn1gbu0ep class='control-label $Vetj4f5jhbcq_class ' for='$Vkhvufhbr4hf'>$Vetj4f5jhbcq</label>
		<div class='$V1knm3bavuoj'>"
		.form_input($Vkhvufhbr4hf,$V0kunm200nck,
		"$Vaxehhzoh0mw id='$Vkhvufhbr4hf' class='form-control input-sm  $V1knm3bavuoj_field ' $Vovexk3mzujo")
		."";
		if ($Vs1wr4meyn3m!="") echo $Vs1wr4meyn3m;
		if ($Vs5uyja3ncde!="") echo "<div class='clear'>";
		if ($Vj0wldqjnulj!="") echo "<i>$Vj0wldqjnulj</i>";
		if ($Vs5uyja3ncde!="") echo "</div>";

		echo "</div>";
		echo "</div>";
	}
}
if(!function_exists("my_hidden")){
	function my_hidden($Vyexmckl1jkl,$Vkvj4oz1rowvield_name='',$Vkvj4oz1rowvield_value='',$Vfhy4sj0k5r0_class="",$Vipnt0jofbt0="",$Vcuho5gwrsjgtyle=""){
		$Vfhy4sj0k5r0=$Vyexmckl1jkl;
		if(is_array($Vyexmckl1jkl)){
			foreach($Vyexmckl1jkl as $V02k2bcjs2r2=>$Vod4huiky01j)
			{
				if ( $V02k2bcjs2r2 == "field_name" ) $Vkvj4oz1rowvield_name=$Vod4huiky01j;
				if ( $V02k2bcjs2r2 == "value" ) $Vkvj4oz1rowvield_value=$Vod4huiky01j;
			}
		}
		echo form_hidden($Vkvj4oz1rowvield_name,$Vkvj4oz1rowvield_value,"id='$Vkvj4oz1rowvield_name'");
	}
}

if(!function_exists("my_textarea")){
	function my_textarea($Vyexmckl1jkl,$Vkvj4oz1rowvield_name='',$Vkvj4oz1rowvield_value='',$Vfhy4sj0k5r0_class="",$Vipnt0jofbt0="",$Vcuho5gwrsjgtyle=""){
		$Vfhy4sj0k5r0=$Vyexmckl1jkl;
		$Vcuho5gwrsjgub_caption="";
		$Vhm5n3tnng5b="";
		$Vipnt0jofbt0_field='';
		if(is_array($Vyexmckl1jkl)){
			foreach($Vyexmckl1jkl as $V02k2bcjs2r2=>$Vod4huiky01j)
			{
				if ( $V02k2bcjs2r2 == "caption" ) $Vfhy4sj0k5r0=$Vod4huiky01j;
				if ( $V02k2bcjs2r2 == "sub_caption" ) $Vcuho5gwrsjgub_caption=$Vod4huiky01j;
				if ( $V02k2bcjs2r2 == "field_name" ) $Vkvj4oz1rowvield_name=$Vod4huiky01j;
				if ( $V02k2bcjs2r2 == "value" ) $Vkvj4oz1rowvield_value=$Vod4huiky01j;
				if ( $V02k2bcjs2r2 == "caption_class" ) $Vfhy4sj0k5r0_class=$Vod4huiky01j;
				if ( $V02k2bcjs2r2 == "text_class" ) $Vipnt0jofbt0=$Vod4huiky01j;
				if ( $V02k2bcjs2r2 == "style" ) $Vcuho5gwrsjgtyle=$Vod4huiky01j;
				if ( $V02k2bcjs2r2 == "align" ) $Vhm5n3tnng5b=' align="'.$Vod4huiky01j.'" ';
				if ( $V02k2bcjs2r2 == "text_class_field" ) $Vipnt0jofbt0_field=$Vod4huiky01j;
			}
		}
		echo "<div class='form-group ' >
		<label  $Vhm5n3tnng5b class='control-label $Vfhy4sj0k5r0_class' for='$Vkvj4oz1rowvield_name'>$Vfhy4sj0k5r0</label>
			<div class='$Vipnt0jofbt0'>"
			.form_textarea($Vkvj4oz1rowvield_name,$Vkvj4oz1rowvield_value,
			"id='$Vkvj4oz1rowvield_name' class='form-control input-sm $Vipnt0jofbt0_field ' $Vcuho5gwrsjgtyle ")
			."</div>
		</div>";
	}
}

if(!function_exists("my_input_file")){
	function my_input_file($Vyexmckl1jkl,$Vkvj4oz1rowvield_name='',$Vkvj4oz1rowvield_value='',$Vfhy4sj0k5r0_class="",$Vipnt0jofbt0="",$Vcuho5gwrsjgtyle=""){
		$Vfhy4sj0k5r0=$Vyexmckl1jkl;
		$Vcuho5gwrsjgub_caption="";
		$Vhm5n3tnng5b="";
		$Vipnt0jofbt0_field='';
		$Voxutrzwvqxi=false;
		$Vn2daoml04nq='';
		$Vcuho5gwrsjghow_images=false;
		$Vat5df0dm3l2='';
		if(is_array($Vyexmckl1jkl)){
			foreach($Vyexmckl1jkl as $V02k2bcjs2r2=>$Vod4huiky01j)
			{
				if ( $V02k2bcjs2r2 == "caption" ) $Vfhy4sj0k5r0=$Vod4huiky01j;
				if ( $V02k2bcjs2r2 == "sub_caption" ) $Vcuho5gwrsjgub_caption=$Vod4huiky01j;
				if ( $V02k2bcjs2r2 == "field_name" ) $Vkvj4oz1rowvield_name=$Vod4huiky01j;
				if ( $V02k2bcjs2r2 == "value" ) $Vkvj4oz1rowvield_value=$Vod4huiky01j;
				if ( $V02k2bcjs2r2 == "caption_class" ) $Vfhy4sj0k5r0_class=$Vod4huiky01j;
				if ( $V02k2bcjs2r2 == "text_class" ) $Vipnt0jofbt0=$Vod4huiky01j;
				if ( $V02k2bcjs2r2 == "style" ) $Vcuho5gwrsjgtyle=$Vod4huiky01j;
				if ( $V02k2bcjs2r2 == "align" ) $Vhm5n3tnng5b=' align="'.$Vod4huiky01j.'" ';
				if ( $V02k2bcjs2r2 == "text_class_field" ) $Vipnt0jofbt0_field=$Vod4huiky01j;
				if ( $V02k2bcjs2r2 == "add_text_field" ) $Voxutrzwvqxi=$Vod4huiky01j;
				if ( $V02k2bcjs2r2 == "show_images" ) $Vcuho5gwrsjghow_images=$Vod4huiky01j;
			}
		}
		if($Voxutrzwvqxi) {
			$Vn2daoml04nq="<input type='text' name='$Vkvj4oz1rowvield_name' id='$Vkvj4oz1rowvield_name'
					value='$Vkvj4oz1rowvield_value'  class='form-control input-sm  $Vipnt0jofbt0_field ' $Vcuho5gwrsjgtyle/>";
		}
		if($Vcuho5gwrsjghow_images) {
			$Vat5df0dm3l2="<div class='thumbnail '>
				<img src='".base_url()."images/$Vkvj4oz1rowvield_value'>
			</div>";
		}
		echo "<div class='form-group'>
			<label class='control-label $Vfhy4sj0k5r0_class' for='$Vkvj4oz1rowvield_name'>$Vfhy4sj0k5r0</label>
			<div class='$Vipnt0jofbt0'>
				<input type='file' name='img_$Vkvj4oz1rowvield_name' id='img_$Vkvj4oz1rowvield_name' title='Select'/>
				$Vn2daoml04nq
				$Vat5df0dm3l2
			</div>
		</div>";
	}
}
if(!function_exists("my_input_tr")){
	function my_input_tr($Vfhy4sj0k5r0,$Vkvj4oz1rowvield_name,$Vkvj4oz1rowvield_value='',$Vcezkdbn0rvj=''){
		$Vxxqplqehznq="<tr><td>".$Vfhy4sj0k5r0."</td><td>
		<input type='text' name='".$Vkvj4oz1rowvield_name."' id='".$Vkvj4oz1rowvield_name."' value='$Vkvj4oz1rowvield_value'>";
		if($Vcezkdbn0rvj!="") $Vxxqplqehznq .= $Vcezkdbn0rvj;
		$Vxxqplqehznq .= "</td></tr>";
		echo $Vxxqplqehznq;
	}
}
if(!function_exists("my_input_td")){
    function my_input_td($Vfhy4sj0k5r0,$Vkvj4oz1rowvield_name,$Vkvj4oz1rowvield_value='',$Vcezkdbn0rvj='',$V15us1pow1hk=''){
        $Vxxqplqehznq="<td>".$Vfhy4sj0k5r0."</td><td>
        <input type='text' name='".$Vkvj4oz1rowvield_name."' id='".$Vkvj4oz1rowvield_name."' value='$Vkvj4oz1rowvield_value' $V15us1pow1hk>";
        if($Vcezkdbn0rvj!="") $Vxxqplqehznq .= $Vcezkdbn0rvj;
        $Vxxqplqehznq .= "</td>";
        echo $Vxxqplqehznq;
    }
}

if(!function_exists("my_input_date_tr")){
	function my_input_date_tr($Vfhy4sj0k5r0,$Vkvj4oz1rowvield_name,$Vkvj4oz1rowvield_value='',$Vcezkdbn0rvj=''){
		$Vxxqplqehznq="<tr><td>".$Vfhy4sj0k5r0."</td><td>
		<input type='text' name='".$Vkvj4oz1rowvield_name."' id='".$Vkvj4oz1rowvield_name."' value='$Vkvj4oz1rowvield_value' 
		class='easyui-datetimebox' 
		data-options='formatter:format_date,parser:parse_date'
		>";
		if($Vcezkdbn0rvj!="") $Vxxqplqehznq .= $Vcezkdbn0rvj;
		$Vxxqplqehznq .= "</td></tr>";
		echo $Vxxqplqehznq;
	}
}
if(!function_exists("my_input_date_td")){
    function my_input_date_td($Vfhy4sj0k5r0,$Vkvj4oz1rowvield_name,$Vkvj4oz1rowvield_value='',$Vcezkdbn0rvj=''){
        $Vxxqplqehznq="<td>".$Vfhy4sj0k5r0."</td><td>
        <input type='text' name='".$Vkvj4oz1rowvield_name."' id='".$Vkvj4oz1rowvield_name."' value='$Vkvj4oz1rowvield_value' 
        class='easyui-datetimebox' 
        data-options='formatter:format_date,parser:parse_date'
        >";
        if($Vcezkdbn0rvj!="") $Vxxqplqehznq .= $Vcezkdbn0rvj;
        $Vxxqplqehznq .= "</tdxxxxxxxxxxxxxxxxxxxxxxxxxxx>";
        echo $Vxxqplqehznq;
    }
}

		
if(!function_exists("my_dropdown")){
	function my_dropdown($Vfhy4sj0k5r0,$Vkvj4oz1rowvield_name,$Vkvj4oz1rowvield_value,$Vvcm4sthtltq,$Vys2ufxmeukp="",$Vuq252mjfwap=""){
		echo "<div class='form-group'>
		<label class='control-label ".$Vys2ufxmeukp."' for='".$Vkvj4oz1rowvield_name."'>".$Vfhy4sj0k5r0."</label>
		<div class='".$Vuq252mjfwap."'>".form_dropdown($Vkvj4oz1rowvield_name,$Vvcm4sthtltq,$Vkvj4oz1rowvield_value,
		"id='".$Vkvj4oz1rowvield_name."' class='form-control'")."</div></div>";
	}
}
if(!function_exists("array_data_table")){
	function array_data_table($Vo4k1z1bskhb,$Vkvj4oz1rowvield_key,$Vkvj4oz1rowvield_val,$Vqw4p4wj3hzl=""){
        $Vkgk3bhkc4ab =& get_instance();
		            
		$Vyexmckl1jkl2=$Vkgk3bhkc4ab->db->select("$Vkvj4oz1rowvield_key,$Vkvj4oz1rowvield_val")->get("$Vo4k1z1bskhb")->result_array();
		$Vyexmckl1jkl[]=array($Vkvj4oz1rowvield_key=>"",$Vkvj4oz1rowvield_val=>"--Select--");
		$Vyexmckl1jkl=array_merge($Vyexmckl1jkl,$Vyexmckl1jkl2);
		$Vx23hwkx5125=null;for($Vyw4whmdzf0x=0;$Vyw4whmdzf0x<count($Vyexmckl1jkl);$Vyw4whmdzf0x++){$Vx23hwkx5125[$Vyexmckl1jkl[$Vyw4whmdzf0x][$Vkvj4oz1rowvield_key]]=$Vyexmckl1jkl[$Vyw4whmdzf0x][$Vkvj4oz1rowvield_val];}
		return $Vx23hwkx5125;
	}
}
if(!function_exists("my_checkbox")){
	function my_checkbox($Vetj4f5jhbcq,$Vkhvufhbr4hf,$V0kunm200nck,$Vxqta2vbwnfr=false,$Vawsrv4ompmu="col-sm-4",$Vk4huej5ua1q="col-sm-2"){
		
		if(is_array($Vxqta2vbwnfr)){
			echo "<div class='form-check' >
			<label class='control-label ".$Vawsrv4ompmu."' for='".$Vkhvufhbr4hf."'>".$Vetj4f5jhbcq."</label>
			<div class='col-md-6'>";
			$V0kunm200nck_array=explode(",",$V0kunm200nck);
			foreach( $Vxqta2vbwnfr as $Vnogyg4rdwft => $Vupmbtmhxioj ) {
				$Vpqbe0u5r5rg=false;
				if(is_array($V0kunm200nck_array)){
					for($Vuaufi3la1vg=0;$Vuaufi3la1vg<count($V0kunm200nck_array);$Vuaufi3la1vg++) {
						if($V0kunm200nck_array[$Vuaufi3la1vg]==$Vupmbtmhxioj){
							$Vpqbe0u5r5rg=true;
						}
					}
					$V43dvwy1nwev=$Vpqbe0u5r5rg;
				} else {
					$V43dvwy1nwev=$V0kunm200nck==$Vupmbtmhxioj?true:false;
				}
				echo form_checkbox($Vkhvufhbr4hf.'[]', $Vnogyg4rdwft, $V43dvwy1nwev,
					"id='".$Vkhvufhbr4hf."' class='form-check-input'").' '.$Vupmbtmhxioj.' ';
				echo "<label class='form-check-label'>$Vetj4f5jhbcq</label>";
			}
			echo "</div>
			</div>
			<div class='clearfix'></div>";
		} else {
			$V43dvwy1nwev=$V0kunm200nck=="1"?true:false;
			echo form_checkbox($Vkhvufhbr4hf,1,$V43dvwy1nwev,"id='".$Vkhvufhbr4hf."' class='form-check-input'");	
			echo "<label class='form-check-label ".$Vawsrv4ompmu."' for='".$Vkhvufhbr4hf."'>".$Vetj4f5jhbcq."</label>";

		}
	}
	
	
}
if(!function_exists("render_form")) {
	function render_form($Vkvj4oz1rowvorm) {
	$Vyexmckl1jkl[]=null;
	foreach($Vkvj4oz1rowvorm as $Vkvj4oz1rowvrm)
	{
		$Vyexmckl1jkl=array_merge($Vyexmckl1jkl,$Vkvj4oz1rowvrm['data']);
		switch($Vkvj4oz1rowvrm['input_type'])
		{
			case "dropdown":
				break;
			case "datetime":
				break;
			case "textarea":
				my_textarea($Vyexmckl1jkl);
				break;
			case "file":
				my_input_file($Vyexmckl1jkl);
				break;
			case "hidden":
				my_hidden($Vyexmckl1jkl);
				break;
			default:
				my_input($Vyexmckl1jkl);
				break;
		}
	}
	}
}
if(!function_exists("add_button_menu")){
	function add_button_menu($Vfhy4sj0k5r0,$Vtzdmuzyn0j0,$Vyw4whmdzf0xco,$Vppxjbjnwhc5,$Vvutbjo3isyv=""){
		$Vkgk3bhkc4ab =& get_instance();
		$Vddm3z4avqhg=getvar("themes");
		if($Vddm3z4avqhg=="admin"){
			$Vfbndb2pkv2c="button-menu";
		} else {
			$Vfbndb2pkv2c="info_link";
		}
	$Vilju4nscrlm="href='".base_url()."index.php/$Vtzdmuzyn0j0'";
	if($Vvutbjo3isyv<>"") $Vilju4nscrlm=" onclick='$Vvutbjo3isyv'";
	echo "<div class='col-lg-3 col-md-4 col-sm-12 info-maxon 
		thumbnail $Vfbndb2pkv2c box-gradient ' $Vilju4nscrlm>
				<div class='photo'><img src='".base_url()."images/$Vyw4whmdzf0xco'/></div>
				<div class='detail'><h4>$Vfhy4sj0k5r0</h4></br>$Vppxjbjnwhc5</div>
		</div>";
	}
}
if(!function_exists("format_sql_date")){
	function format_sql_date($Vod4huiky01j){
		return  date('Y-m-d H:i:s', strtotime($Vod4huiky01j));
	}
}
if(!function_exists("dropdown_data")){
	function dropdown_data($Vo4k1z1bskhb,$Vkvj4oz1rowvield_key="",$Vkvj4oz1rowvield_value="",$Vjp54aa2qy13=""){
        $Vkgk3bhkc4ab =& get_instance();
		$Vngsbbypaivt['']='- Select -';
		$Vcuho5gwrsjgql="select $Vkvj4oz1rowvield_key,$Vkvj4oz1rowvield_value from $Vo4k1z1bskhb";
		if($Vjp54aa2qy13!="")$Vcuho5gwrsjgql .= $Vjp54aa2qy13;
		if($Vqw4p4wj3hzl=$Vkgk3bhkc4ab->db->query($Vcuho5gwrsjgql)) {
			foreach ($Vqw4p4wj3hzl->result_array_assoc() as $Vzvzfgcp2tbp){
				$Vngsbbypaivt[]=$Vzvzfgcp2tbp;
			}
		}
		return $Vngsbbypaivt;
	}
}
if(!function_exists('add_datex')){
	function add_datex($Ve42z45evorx,$Vcmangjixuap=0,$Vuf5bfriqvbk=0,$Vlwff2drkzjh=0) {
		  $Vqbqg0leiyed = strtotime($Ve42z45evorx);
		  $Vne45nzcqm2m = date('Y-m-d h:i:s', mktime(date('h',$Vqbqg0leiyed),
		date('i',$Vqbqg0leiyed), date('s',$Vqbqg0leiyed), date('m',$Vqbqg0leiyed)+$Vuf5bfriqvbk,
		date('d',$Vqbqg0leiyed)+$Vcmangjixuap, date('Y',$Vqbqg0leiyed)+$Vlwff2drkzjh));
		  return $Vne45nzcqm2m;
	}
}
if(!function_exists('add_date')){
	function add_date($Vekhpifxfnvz,$Vcmangjixuap) {
		
		if($Vcmangjixuap=="")$Vcmangjixuap=0;
		if($Vekhpifxfnvz=="")$Vekhpifxfnvz=date("Y-m-d");
		$V5g0bpmpbhea = date("Y-m-d",strtotime($Vekhpifxfnvz." +$Vcmangjixuap day"));
		return $V5g0bpmpbhea;
	}
}


if(!function_exists('add_log_run')){
	function add_log_run($Vosa1nutiyyy){
        $Vkgk3bhkc4ab =& get_instance();
		$Va1ue4clxpcf=$Vkgk3bhkc4ab->db->select('max(id) as z_max')->get('sys_log_run')->row();
		if($Va1ue4clxpcf->z_max>100){
			$Vkgk3bhkc4ab->db->query("delete from sys_log_run where id<".($Va1ue4clxpcf->z_max-100));
		} 
		$Vyexmckl1jkl['user_id']=$Vkgk3bhkc4ab->access->user_id();
		$Vyexmckl1jkl['url']=$Vosa1nutiyyy;
		$Vyexmckl1jkl['controller']=$Vkgk3bhkc4ab->uri->segment(1);
		$Vyexmckl1jkl['method']=$Vkgk3bhkc4ab->uri->segment(2);
		$Vyexmckl1jkl['param1']=$Vkgk3bhkc4ab->uri->segment(3);
		$Vkgk3bhkc4ab->db->insert("sys_log_run",$Vyexmckl1jkl);
		
	}
}
if(!function_exists("view_syslog")){
	function view_syslog(){
        $Vkgk3bhkc4ab =& get_instance();
		            
		$Vcuho5gwrsjgql="select url,controller,method,param1
		from sys_log_run where user_id='".$Vkgk3bhkc4ab->access->user_id()."'
		group by url,controller,method,param1 limit 20 ";
		$Vu00jtozs3ht=$Vkgk3bhkc4ab->db->query($Vcuho5gwrsjgql);
		$Vcuho5gwrsjgys_log_run="";
		if($Vu00jtozs3ht){
			foreach ($Vu00jtozs3ht->result() as $Vzvzfgcp2tbp) {
				$Vosa1nutiyyy=$Vzvzfgcp2tbp->controller;
				if(!$Vzvzfgcp2tbp->method=='0')$Vosa1nutiyyy.="/".$Vzvzfgcp2tbp->method;
				if(!$Vzvzfgcp2tbp->param1=='0')$Vosa1nutiyyy.="/".$Vzvzfgcp2tbp->param1;
				$Vcuho5gwrsjgys_log_run.="<li><a  class='info_link'  href='".base_url()."index.php/".$Vosa1nutiyyy."'>".$Vosa1nutiyyy."</a></li>";
			}
		}
		return $Vcuho5gwrsjgys_log_run;
	}
}
if(!function_exists("my_log")){
	function my_log($Vb0jh34adprv,$V0tl003mmext,$Vg1jlua34k4b=""){
        $Vkgk3bhkc4ab =& get_instance();
		            
		$Vkgk3bhkc4ab->db->insert("syslog",array("tgljam"=>date("Y-m-d H:i:s"),
			"userid"=>$Vg1jlua34k4b!=""?$Vg1jlua34k4b:$Vkgk3bhkc4ab->access->user_id(),"jenis"=>$Vb0jh34adprv,"logtext"=>$V0tl003mmext));
	}
}
if(!function_exists("user_id")){
	function user_id(){
        $Vkgk3bhkc4ab =& get_instance();
		return $Vkgk3bhkc4ab->access->user_id();
	}
}
if(!function_exists("alert_count")){
    function alert_count(){
        $Vkgk3bhkc4ab =& get_instance();
        $V4rmbcos1hos=$Vkgk3bhkc4ab->access->user_id();
        $Vcuho5gwrsjgql="select * from syslog where tgljam>'2017-12-01' and userid='$V4rmbcos1hos'";
        $Vu00jtozs3ht=$Vkgk3bhkc4ab->db->query($Vcuho5gwrsjgql);
        $Vnkjy15ip4uq=$Vu00jtozs3ht->num_rows();        
        
        $Vd1fy0z21oe4= "$V4rmbcos1hos ";
        return $Vd1fy0z21oe4;
    }
}

if(!function_exists("user_pass")){
	function user_pass(){
        $Vkgk3bhkc4ab =& get_instance();
		return $Vkgk3bhkc4ab->access->user_pass();
	}
}
if(!function_exists("current_gudang")){
    function current_gudang(){
       $Vrdb3kpcuebp =& get_instance();
       $V1y5spw13gpv=$Vrdb3kpcuebp->session->userdata("session_outlet",'');     
       $Vgpnskt0lskp=$Vrdb3kpcuebp->access->current_gudang();
       $Vo4wt45fc3pu="";
       if($V1y5spw13gpv!="")$Vo4wt45fc3pu=$V1y5spw13gpv;
       if($Vo4wt45fc3pu=="")$Vo4wt45fc3pu=$Vgpnskt0lskp;
	   if($Vo4wt45fc3pu=="" || $Vo4wt45fc3pu=="UNKNOWN"){
	   		if($Vg1ntuknrauk=$Vrdb3kpcuebp->db->query("select location_number from shipping_locations where default_gudang='1'")){
	   			if($Vfhkt4vbeual=$Vg1ntuknrauk->row()){
	   				$Vo4wt45fc3pu=$Vfhkt4vbeual->location_number;
	   			}
	   		}
	   }
	   
       return $Vo4wt45fc3pu;
	   
    }
}
    
    if(!function_exists("current_company")){
        function current_company(){
            $Vrdb3kpcuebp =& get_instance();
           $Vsym4msdat5a=$Vrdb3kpcuebp->session->userdata("session_company_code",'');     
           $Vytgjyvpxsh2=cid();
           $Vo4wt45fc3pu="";
           if($Vsym4msdat5a!="")$Vo4wt45fc3pu=$Vsym4msdat5a;
           if($Vo4wt45fc3pu=="")$Vo4wt45fc3pu=$Vytgjyvpxsh2;
           return $Vo4wt45fc3pu;
        }
    }

if(!function_exists("current_database")){
    function current_database(){
       $Vrdb3kpcuebp =& get_instance();
	   $Vfyjohwwi1cv="";
	   if($Vg1ntuknrauk=$Vrdb3kpcuebp->db->query("select database() as db")){
		   	if($Vfhkt4vbeual=$Vg1ntuknrauk->row())$Vfyjohwwi1cv=$Vfhkt4vbeual->db;
	   }
	   if($Vfyjohwwi1cv=="")$Vfyjohwwi1cv="Unknown";
	   return $Vfyjohwwi1cv;	   
    }
}


if(!function_exists("cid")){
	function cid(){
        $Vrdb3kpcuebp =& get_instance();		            
        $V2ezramm0zfx=$Vrdb3kpcuebp->config->item('multi_company');
		$Va45jk03xcz2=$Vrdb3kpcuebp->session->userdata("session_company_code",'');     
		$Vanrq3megkrt=$Vrdb3kpcuebp->access->cid();  
        if($V2ezramm0zfx && !multi_company_single_db()){
            $Vytgjyvpxsh2_code=$Vrdb3kpcuebp->session->userdata("company_code","");
            if($Vytgjyvpxsh2_code!=""){
               $Vrdb3kpcuebp->db = $Vrdb3kpcuebp->load->database($Vytgjyvpxsh2_code, TRUE);
           }
        }         
       $Vo4wt45fc3pu="";
       if($Va45jk03xcz2!="")$Vo4wt45fc3pu=$Va45jk03xcz2;
       if($Vo4wt45fc3pu=="")$Vo4wt45fc3pu=$Vanrq3megkrt;

       return $Vo4wt45fc3pu;
	}
}
if(!function_exists("cidt")){
	function cidt(){
        $Vkgk3bhkc4ab =& get_instance();
		$Vtmjsfxrsa2x=$Vkgk3bhkc4ab->access->cid();
		return "";
	}
}

if(!function_exists("lock_report_salesman")){
	function lock_report_salesman(){
        $Vkgk3bhkc4ab =& get_instance();
		$Vcuho5gwrsjgalesman="";
		$Vsf4k2x04g5c=false;
		if($Vu00jtozs3ht=$Vkgk3bhkc4ab->db->select('salesman,lock_report')->where('user_id',$Vkgk3bhkc4ab->access->user_id())
			->get("salesman")){
			if($Vu00jtozs3htrow=$Vu00jtozs3ht->row()){
				$Vcuho5gwrsjgalesman=$Vu00jtozs3htrow->salesman;
				$Vsf4k2x04g5c=$Vu00jtozs3htrow->lock_report;
			}
		}
		return $Vsf4k2x04g5c;
	}
}
if(!function_exists("current_salesman")){
	function current_salesman(){
        $Vkgk3bhkc4ab =& get_instance();
		$Vcuho5gwrsjgalesman="";
		$Vsf4k2x04g5c=false;
		if($Vu00jtozs3ht=$Vkgk3bhkc4ab->db->select('salesman,lock_report')->where('user_id',$Vkgk3bhkc4ab->access->user_id())
			->get("salesman")){
			if($Vu00jtozs3htrow=$Vu00jtozs3ht->row()){
				$Vcuho5gwrsjgalesman=$Vu00jtozs3htrow->salesman;
				$Vsf4k2x04g5c=$Vu00jtozs3htrow->lock_report;
			}
		}
		return $Vcuho5gwrsjgalesman;
	}
}

if(!function_exists("cust_id")){
	function cust_id(){
        $Vkgk3bhkc4ab =& get_instance();
		return $Vkgk3bhkc4ab->session->userdata('cust_id');
	}
}

if(!function_exists("user_name")){
	function user_name($Vg1jlua34k4b=""){
        $Vkgk3bhkc4ab =& get_instance();
		if($Vg1jlua34k4b==""){
			return $Vkgk3bhkc4ab->access->user_name();
 		} else {
 			if($Vu00jtozs3ht=$Vkgk3bhkc4ab->db->where('user_id',$Vg1jlua34k4b)->get('user')){
				if($Vzvzfgcp2tbp=$Vu00jtozs3ht->row()){
					return $Vzvzfgcp2tbp->username;
				} else {
					return $Vkgk3bhkc4ab->access->user_name();
				}
			} else {
				return $Vkgk3bhkc4ab->access->user_name();

			}
 		}

	}
}
if(!function_exists("user_admin")){
	function user_admin(){
        $Vrdb3kpcuebp =& get_instance();
		
		$Vrdb3kpcuebp->load->library("Access");
		return $Vrdb3kpcuebp->access->is_admin();

	}
}
if(!function_exists('account')){
	function account($Vwh5k5ffkdjt){
        $Vkgk3bhkc4ab =& get_instance();
        $Vqw4p4wj3hzl=$Vkgk3bhkc4ab->db->query("select account,account_description from chart_of_accounts
        where id='$Vwh5k5ffkdjt'")->row();
		if($Vqw4p4wj3hzl){
			return $Vqw4p4wj3hzl->account." - ".$Vqw4p4wj3hzl->account_description;
		} else {
			return "";
		}
	}
}
if(!function_exists('account_id')){
	function account_id($Vhluesv2l1d3){
		$Vhluesv2l1d3=urldecode($Vhluesv2l1d3);
        $Vkgk3bhkc4ab =& get_instance();
		$Vkgk3bhkc4ab->load->model("chart_of_accounts_model");
		$Vyexmckl1jkl=explode(" - ", $Vhluesv2l1d3);
		$Vvpcqihfblei=$Vkgk3bhkc4ab->chart_of_accounts_model->get_by_id($Vyexmckl1jkl[0])->row();
		if($Vvpcqihfblei){
			return $Vvpcqihfblei->id;
		} else {
			return 0;
		}
	}
}
        
if(!function_exists('invalid_account')){
	function invalid_account($Vwh5k5ffkdjt){
		$Vngsbbypaivt= ($Vwh5k5ffkdjt=="" || $Vwh5k5ffkdjt=="0" || $Vwh5k5ffkdjt==0);
		if( !$Vngsbbypaivt ) $Vngsbbypaivt=account($Vwh5k5ffkdjt)=="";
		return $Vngsbbypaivt;
	}
}

if(!function_exists('criteria')){
    function criteria($Vufwefqawchp,$Vxnddwmbhizh='',$Vbhpladbrr3t='easyui-input',$Vovexk3mzujo=""){
       $Vrdb3kpcuebp =& get_instance();
        $Vivsw0couxur=new search_criteria();
        $Vupmbtmhxioj="";
        if($Vrdb3kpcuebp->input->get($Vxnddwmbhizh) or $Vrdb3kpcuebp->input->get($Vxnddwmbhizh)==''){
            $Vupmbtmhxioj=$Vrdb3kpcuebp->input->get($Vxnddwmbhizh);
            $Vrdb3kpcuebp->session->set_userdata($Vxnddwmbhizh,$Vupmbtmhxioj);
        } else {
            $Vupmbtmhxioj=$Vrdb3kpcuebp->session->userdata($Vxnddwmbhizh);
        }
        if(is_array($Vufwefqawchp)){
            $Vaxehhzoh0mw=$Vufwefqawchp;
            $Vxnddwmbhizh=$Vaxehhzoh0mw['id'];
            $Vufwefqawchp=ucfirst($Vxnddwmbhizh);
            if(isset($Vaxehhzoh0mw['caption']))$Vufwefqawchp=$Vaxehhzoh0mw['caption'];
            if(isset($Vaxehhzoh0mw['value']))$Vxqq0amxqzte=$Vaxehhzoh0mw['value'];
            if(isset($Vaxehhzoh0mw['cls']))$Vbhpladbrr3t=$Vaxehhzoh0mw['cls'];
            if(isset($Vaxehhzoh0mw['style']))$Vovexk3mzujo=$Vaxehhzoh0mw['style'];
        }
        $Vivsw0couxur->caption=$Vufwefqawchp;
        $Vivsw0couxur->field_id=$Vxnddwmbhizh;
        $Vivsw0couxur->field_class=$Vbhpladbrr3t;
        $Vivsw0couxur->field_value=$Vupmbtmhxioj;
        $Vivsw0couxur->field_style=$Vovexk3mzujo;
        return $Vivsw0couxur;
    }    
}
if(!function_exists('link_button')){
    function link_button($Vetj4f5jhbcq,$Vhyjktplnzot,$Vkozqglfjhif='',$Vfgim3ndor5d='false',$Vmte2zwu4czl='',$V3awurwxucbv='',$Vp440niexuqm='',$Vufr4j2prwuj='',$V15us1pow1hk=''){
    	$Vp440niexuqmd="";
		if($Vp440niexuqm=="")$Vp440niexuqm="id_link_button";
		if($Vfgim3ndor5d==false)$Vfgim3ndor5d='false';
		if($Vfgim3ndor5d=="")$Vfgim3ndor5d='false';
		if(getvar("themes")=="admin"){
			if($Vufr4j2prwuj==""){
				$Vufr4j2prwuj="btn-sb btn-primary-sb";
			}
			if($Vetj4f5jhbcq=="")$Vetj4f5jhbcq="Pilih";
			if($Vetj4f5jhbcq=="Close")$Vufr4j2prwuj="btn-sb btn-danger-sb";
			if($Vetj4f5jhbcq=="Save")$Vufr4j2prwuj="btn-sb btn-success-sb";
		}

    	if($Vmte2zwu4czl==''){
	        return '<a href="#" class="easyui-linkbutton '.$Vufr4j2prwuj.' " id='.$Vp440niexuqm.' 
	        data-options="iconCls:\'icon-'.$Vkozqglfjhif.'\',
	        plain: '.$Vfgim3ndor5d.'" onclick="'.$Vhyjktplnzot.';return false;" '.$V15us1pow1hk.' >'.$Vetj4f5jhbcq.'</a>';
		} else {
	        return '<a href="'.$Vmte2zwu4czl.'" class="easyui-linkbutton '.$Vufr4j2prwuj.' " id='.$Vp440niexuqm.'
	        data-options="iconCls:\'icon-'.$Vkozqglfjhif.'\',
	        plain: '.$Vfgim3ndor5d.'"  " '.$V15us1pow1hk.' >'.$Vetj4f5jhbcq.'</a>';
		}
    }
}
if(!function_exists('link_button2')){
    function link_button2($Vfhy4sj0k5r0,$Vfpj23moubyt,$Vi5kdvuyj11y='',$V2j4mjkafdyf='false',$Vosa1nutiyyy='',$Vd1fy0z21oe4=''){
    	if($Vosa1nutiyyy==''){
	        return '<a href="#" class="btn btn-default glyphicon glyphicon-'.$Vi5kdvuyj11y.'"
	        data-optionsx="iconClsx:\'icon-'.$Vi5kdvuyj11y.'\',
	        plain: '.$V2j4mjkafdyf.'" onclick="'.$Vfpj23moubyt.';return false;"> '.$Vfhy4sj0k5r0.'</a>';
		} else {
	        return '<a href="'.$Vosa1nutiyyy.'" class="btn btn-default glyphicon glyphicon-'.$Vi5kdvuyj11y.'"
	        data-optionsx="iconClsx:\'icon-'.$Vi5kdvuyj11y.'\',
	        plain: '.$V2j4mjkafdyf.'"  " > '.$Vfhy4sj0k5r0.'</a>';
		}
    }
}
if(!function_exists('datasource')){
    function datasource($V4f1kyrl3j4t,$Vr4k4nfdsaiu=false,$V0mn2xk25t50="",$Vfhkt4vbeualow_count=0,
    	$Vcr1znkqfszr="",$Vcr1znkqfszr_id=""){
        $Vrdb3kpcuebp =& get_instance();

       $Vlzuaiuqvvyk=1000;
       if($Vfhkt4vbeualow_count>0)$Vlzuaiuqvvyk=$Vfhkt4vbeualow_count;
        $Vg1ntuknraukuery=$Vrdb3kpcuebp->db->query($V4f1kyrl3j4t);
        $Vfhkt4vbeualows=array();
        if($Vg1ntuknraukuery){ 
            foreach($Vg1ntuknraukuery->result_array() as $Vfhkt4vbeualow){
                if($Vfhkt4vbeualow){
					
                    if($Vr4k4nfdsaiu){
                        $Vfhkt4vbeualow["ck"]=form_checkbox("ck[]",$Vfhkt4vbeualow[$V0mn2xk25t50],'',"style='width:30px' ");
                    }
					if($Vcr1znkqfszr!=""){
						$Vfhkt4vbeualow["input_field"]=form_input($Vcr1znkqfszr."[]",$Vfhkt4vbeualow[$Vcr1znkqfszr],"style='width:50px' ");
					}
					if($Vcr1znkqfszr_id!=""){
						$Vfhkt4vbeualow['input_field_id']=form_input($Vcr1znkqfszr_id."[]",$Vfhkt4vbeualow[$Vcr1znkqfszr_id],"style='width:30px'");
						
					}
                    $Vfhkt4vbeualows[]=$Vfhkt4vbeualow;
                }
            };
            
		}

		if(getvar("themes")=="admin"){
			$Vmfvrsd5xyqh['data']=$Vfhkt4vbeualows;
	
		} else {
			$Vmfvrsd5xyqh['total']=$Vlzuaiuqvvyk;    
			$Vmfvrsd5xyqh['rows']=$Vfhkt4vbeualows;

		}
		





        return json_encode($Vmfvrsd5xyqh);
        
    }
}

if(!function_exists('is_ajax')){
function is_ajax()
 {
    $Vkgk3bhkc4ab =& get_instance();
 	return (
	       $Vkgk3bhkc4ab->input->server('HTTP_X_REQUESTED_WITH')&&
	           ($Vkgk3bhkc4ab->input->server('HTTP_X_REQUESTED_WITH')=='XMLHttpRequest'));
     }
}
if ( ! function_exists('valid_date')) {
	function valid_date($Vcuho5gwrsjgtr)
	{
         $Vkgk3bhkc4ab =& get_instance();
         if(!preg_match('/^[0-9]{4}-[0-9]{2}-[0-9]{2}$/',$Vcuho5gwrsjgtr))
    	 {
    		 $Vkgk3bhkc4ab->form_validation->set_message('valid_date',
    		 'date format is not valid. yyyy-mm-dd');
    		 return false;
    	 } else {
    	 	return true;
    	 }
	}
}
if ( ! function_exists('strzero')) {
	function strzero($Vyw4whmdzf0xnput,$Vv203lqi31y4){
		return str_pad($Vyw4whmdzf0xnput,$Vv203lqi31y4, "0", STR_PAD_LEFT );
	}
}
if ( ! function_exists('pad')) {
    function pad($Vyw4whmdzf0xnput,$Vv203lqi31y4){
        return str_pad($Vyw4whmdzf0xnput,$Vv203lqi31y4, ".", STR_PAD_RIGHT );
    }
}

if(!function_exists('company_header')){
    function company_header(){
       $Vrdb3kpcuebp =& get_instance();
         $Vrdb3kpcuebp->load->model('company_model');
         $Ve4gtevmnhrj=$Vrdb3kpcuebp->company_model->get_by_id($Vrdb3kpcuebp->access->cid)->row();
		 $Vmfvrsd5xyqh='';
		 if($Ve4gtevmnhrj){
         	$Vmfvrsd5xyqh='<div id="divHeader"><h1>'.$Ve4gtevmnhrj->company_name.'</h1></div>';
         };
		 
         
         
		
        return $Vmfvrsd5xyqh;
    }
}
if(!function_exists('getColoumn')){
	function getColoumn($Vo4k1z1bskhb) {
		$Vkgk3bhkc4ab =& get_instance();
			$Viiq1xuz2yqb=array();	$Vkvj4oz1rowvieldnames=array();	$Vv203lqi31y4=array(); $Vkvj4oz1rowvlag=array();
			if($Vkvj4oz1rowvields=$Vkgk3bhkc4ab->db->field_data("SHOW COLUMNS FROM ".$Vo4k1z1bskhb)){
				foreach($Vkvj4oz1rowvields as $Vkvj4oz1rowvld){
					$Vkvj4oz1rowvieldnames[]=$Vkvj4oz1rowvld->name;
				}
			}

		return $Vkvj4oz1rowvieldnames;
	}
}


if(!function_exists('data_table_v2')){
function data_table_v2($Vntfufcb4vaz,$Vfhkt4vbeualecord=null,$Vctcqd3m4013=false){
    $Vrdb3kpcuebp =& get_instance();
    $Vmfvrsd5xyqh='';
    if($Vfhkt4vbeualecord){
        foreach ($Vfhkt4vbeualecord as $Vnogyg4rdwft => $Vupmbtmhxioj) {
            $Vmfvrsd5xyqh[$Vnogyg4rdwft]=$Vupmbtmhxioj;
        }
    } else {
        $Vfhkt4vbeualesult_id=0;
        if($Vctcqd3m4013){
            $Vg1ntuknrauk=$Vrdb3kpcuebp->db->query($Vntfufcb4vaz);
            if($Vg1ntuknrauk)$Vfhkt4vbeualesult_id=$Vg1ntuknrauk->result_id;
        } else {


            $Vg1ntuknrauk=$Vrdb3kpcuebp->db->get($Vntfufcb4vaz,1);
            echo mysqli_error($Vzf44w4bnvh4);
            if($Vg1ntuknrauk)$Vfhkt4vbeualesult_id=$Vg1ntuknrauk->result_id;
        }
        if($Vfhkt4vbeualesult_id){ 
            $Vdel4ku41qki = mysqli_num_fields($Vfhkt4vbeualesult_id);
            for($V55vc4mewy5w=0;$V55vc4mewy5w<=$Vdel4ku41qki-1;$V55vc4mewy5w++){
                $Vvmwm1jsklgc=mysql_field_type($Vfhkt4vbeualesult_id, $V55vc4mewy5w);
                $Vqrmgnhjkdgq=mysql_field_name($Vfhkt4vbeualesult_id, $V55vc4mewy5w);
                $Vq2lrqstguwz=mysql_field_len($Vfhkt4vbeualesult_id, $V55vc4mewy5w);
        
                    switch ($Vvmwm1jsklgc) {
                        case 'datetime':
                            $Vxt4wx3pvtez=date('Y-m-d');
                            break;
                        case 'string':
                            $Vxt4wx3pvtez='';
                            break;
                        default:
                            $Vxt4wx3pvtez=0;
                            break;
                    }
                $Vmfvrsd5xyqh[$Vqrmgnhjkdgq]=$Vxt4wx3pvtez;    
            }   
        }
    }
        
    return $Vmfvrsd5xyqh;
}

if(!function_exists('data_table')){
	function data_table($Vntfufcb4vaz,$Vfhkt4vbeualecord=null,$Vctcqd3m4013=false){
		
		
		if( substr(CI_VERSION,0,1)== '2' ) {
			return data_table_v2($Vntfufcb4vaz,$Vfhkt4vbeualecord,$Vctcqd3m4013);
		} else {
			$Vrdb3kpcuebp =& get_instance();
			$Vmfvrsd5xyqh=null;
			if($Vfhkt4vbeualecord){
				foreach ($Vfhkt4vbeualecord as $Vnogyg4rdwft => $Vupmbtmhxioj) {
					$Vmfvrsd5xyqh[$Vnogyg4rdwft]=$Vupmbtmhxioj;
				}
			} else {
				
					if($Vb4l4kzjmbgd=$Vrdb3kpcuebp->db->field_data($Vntfufcb4vaz)){
						foreach($Vb4l4kzjmbgd as $Vxnddwmbhizh){
							$Vvmwm1jsklgc=$Vxnddwmbhizh->type;
							$Vqrmgnhjkdgq=$Vxnddwmbhizh->name;
							$Vq2lrqstguwz=$Vxnddwmbhizh->max_length;
					
								switch ($Vvmwm1jsklgc) {
									case 'datetime':
										$Vxt4wx3pvtez=date('Y-m-d');
										break;
									case 'varchar':
									case 'string':
										$Vxt4wx3pvtez='';
										break;
									default:
										$Vxt4wx3pvtez=0;
										break;
								}
							$Vmfvrsd5xyqh[$Vqrmgnhjkdgq]=$Vxt4wx3pvtez;
						}
					}
				} 
			}
		return $Vmfvrsd5xyqh;
	}
}
if(!function_exists('data_table_post')){
function data_table_post($Vntfufcb4vaz,$Vctcqd3m4013=false){
    
    if( substr(CI_VERSION,0,1)== '2' ) {
        return data_table_post_v2($Vntfufcb4vaz,$Vctcqd3m4013);
    } else {
        $Vrdb3kpcuebp =& get_instance();
        $Vb4l4kzjmbgd=$Vrdb3kpcuebp->db->field_data($Vntfufcb4vaz);
        foreach($Vb4l4kzjmbgd as $Vxnddwmbhizh){
            $Vvmwm1jsklgc=$Vxnddwmbhizh->type;
            $Vqrmgnhjkdgq=$Vxnddwmbhizh->name;
            $Vq2lrqstguwz=$Vxnddwmbhizh->max_length;
    
                switch ($Vvmwm1jsklgc) {
                    case 'datetime':
                        $Vxt4wx3pvtez=date('Y-m-d');
                        if(isset($_POST[$Vqrmgnhjkdgq])){
                            $Vmfvrsd5xyqh[$Vqrmgnhjkdgq]=$Vrdb3kpcuebp->input->post($Vqrmgnhjkdgq);
                        }  
                        break;
                    case 'varchar':
                    case 'string':
                        $Vxt4wx3pvtez='';
                        if(isset($_POST[$Vqrmgnhjkdgq])){
                            $Vmfvrsd5xyqh[$Vqrmgnhjkdgq]=$Vrdb3kpcuebp->input->post($Vqrmgnhjkdgq);
                        }  
                        break;
                    default:
                        $Vxt4wx3pvtez=0;
                        if(isset($_POST[$Vqrmgnhjkdgq])){
                            if($_POST[$Vqrmgnhjkdgq]!="") $Vxt4wx3pvtez=$Vmfvrsd5xyqh[$Vqrmgnhjkdgq]=$Vrdb3kpcuebp->input->post($Vqrmgnhjkdgq);
                            $Vmfvrsd5xyqh[$Vqrmgnhjkdgq]=$Vxt4wx3pvtez;
                        }
                        break;
                }
        }
        return $Vmfvrsd5xyqh;
    }
}}


if(!function_exists('data_table_get')){
function data_table_get($Vntfufcb4vaz,$Vctcqd3m4013=false){
    if( substr(CI_VERSION,0,1)== '2' ) {
        return data_table_get_v2($Vntfufcb4vaz,$Vctcqd3m4013);
    } else {
        $Vrdb3kpcuebp =& get_instance();
        $Vb4l4kzjmbgd=$Vrdb3kpcuebp->db->field_data($Vntfufcb4vaz);
        foreach($Vb4l4kzjmbgd as $Vxnddwmbhizh){
            $Vvmwm1jsklgc=$Vxnddwmbhizh->type;
            $Vqrmgnhjkdgq=$Vxnddwmbhizh->name;
            $Vq2lrqstguwz=$Vxnddwmbhizh->max_length;
                switch ($Vvmwm1jsklgc) {
                    case 'datetime':
                        $Vxt4wx3pvtez=date('Y-m-d');
                        if(isset($_GET[$Vqrmgnhjkdgq])){
                            $Vmfvrsd5xyqh[$Vqrmgnhjkdgq]=$Vrdb3kpcuebp->input->post($Vqrmgnhjkdgq);
                        }  
                        break;
                    case 'varchar':
                    case 'string':
                        $Vxt4wx3pvtez='';
                        if(isset($_GET[$Vqrmgnhjkdgq])){
                            $Vmfvrsd5xyqh[$Vqrmgnhjkdgq]=$Vrdb3kpcuebp->input->post($Vqrmgnhjkdgq);
                        }  
                        break;
                    default:
                        $Vxt4wx3pvtez=0;
                        if(isset($_GET[$Vqrmgnhjkdgq])){
                            $Vmfvrsd5xyqh[$Vqrmgnhjkdgq]= (int)$Vrdb3kpcuebp->input->post($Vqrmgnhjkdgq);
                        }  
                        break;
                }
        }
        return $Vmfvrsd5xyqh;
    }
}}


if(!function_exists('data_table_post_v2')){
function data_table_post_v2($Vntfufcb4vaz,$Vctcqd3m4013=false){
    $Vrdb3kpcuebp =& get_instance();
        if($Vctcqd3m4013){
            $Vfhkt4vbeualesult_id=$Vrdb3kpcuebp->db->query($Vntfufcb4vaz)->result_id;                
        } else {
            $Vfhkt4vbeualesult_id=$Vrdb3kpcuebp->db->get($Vntfufcb4vaz,1)->result_id;
        }
    
    $Vdel4ku41qki = mysql_num_fields($Vfhkt4vbeualesult_id);
    for($V55vc4mewy5w=0;$V55vc4mewy5w<=$Vdel4ku41qki-1;$V55vc4mewy5w++){
        $Vvmwm1jsklgc=mysql_field_type($Vfhkt4vbeualesult_id, $V55vc4mewy5w);
        $Vqrmgnhjkdgq=mysql_field_name($Vfhkt4vbeualesult_id, $V55vc4mewy5w);
        $Vq2lrqstguwz=mysql_field_len($Vfhkt4vbeualesult_id, $V55vc4mewy5w);

            switch ($Vvmwm1jsklgc) {
                case 'datetime':
                    $Vxt4wx3pvtez=date('Y-m-d');
                    if(isset($_POST[$Vqrmgnhjkdgq])){
                        $Vmfvrsd5xyqh[$Vqrmgnhjkdgq]=$Vrdb3kpcuebp->input->post($Vqrmgnhjkdgq);
                    } 
                    break;
                case 'string':
                    $Vxt4wx3pvtez='';
                    if(isset($_POST[$Vqrmgnhjkdgq])){
                        $Vmfvrsd5xyqh[$Vqrmgnhjkdgq]=$Vrdb3kpcuebp->input->post($Vqrmgnhjkdgq);    
                    }  
                    break;
                default:
                    $Vxt4wx3pvtez=0;
                    if(isset($_POST[$Vqrmgnhjkdgq])){
                        if($_POST[$Vqrmgnhjkdgq]!="") $Vxt4wx3pvtez=$Vmfvrsd5xyqh[$Vqrmgnhjkdgq]=$Vrdb3kpcuebp->input->post($Vqrmgnhjkdgq);
                        $Vmfvrsd5xyqh[$Vqrmgnhjkdgq]=$Vxt4wx3pvtez;
                    }
                    break;
            }
    }   
    return $Vmfvrsd5xyqh;
}}

                
if(!function_exists('data_table_get_v2')){
function data_table_get_v2($Vntfufcb4vaz,$Vctcqd3m4013=false){
    $Vrdb3kpcuebp =& get_instance();
        if($Vctcqd3m4013){
            $Vfhkt4vbeualesult_id=$Vrdb3kpcuebp->db->query($Vntfufcb4vaz)->result_id;
                
        } else {
            $Vfhkt4vbeualesult_id=$Vrdb3kpcuebp->db->get($Vntfufcb4vaz,1)->result_id;
        }

    $Vdel4ku41qki = mysql_num_fields($Vfhkt4vbeualesult_id);
    for($V55vc4mewy5w=0;$V55vc4mewy5w<=$Vdel4ku41qki-1;$V55vc4mewy5w++){
        $Vvmwm1jsklgc=mysql_field_type($Vfhkt4vbeualesult_id, $V55vc4mewy5w);
        $Vqrmgnhjkdgq=mysql_field_name($Vfhkt4vbeualesult_id, $V55vc4mewy5w);
        $Vq2lrqstguwz=mysql_field_len($Vfhkt4vbeualesult_id, $V55vc4mewy5w);

            switch ($Vvmwm1jsklgc) {
                case 'datetime':
                    $Vxt4wx3pvtez=date('Y-m-d');
                    if(isset($_GET[$Vqrmgnhjkdgq])){
                        $Vmfvrsd5xyqh[$Vqrmgnhjkdgq]=$Vrdb3kpcuebp->input->post($Vqrmgnhjkdgq);
                    }  
                    break;
                case 'string':
                    $Vxt4wx3pvtez='';
                    if(isset($_GET[$Vqrmgnhjkdgq])){
                        $Vmfvrsd5xyqh[$Vqrmgnhjkdgq]=$Vrdb3kpcuebp->input->post($Vqrmgnhjkdgq);    
                    }  
                    break;
                default:
                    $Vxt4wx3pvtez=0;
                    if(isset($_GET[$Vqrmgnhjkdgq])){
                        $Vmfvrsd5xyqh[$Vqrmgnhjkdgq]= (int)$Vrdb3kpcuebp->input->post($Vqrmgnhjkdgq);    
                    }  
                    break;
            }
    }   
    return $Vmfvrsd5xyqh;
}}


if (!function_exists("load_view")){
    function load_view($Vvh4wpmevlol,$Vyexmckl1jkl = array()){
        $Vkgk3bhkc4ab = & get_instance();
		if($Vvh4wpmevlol<>""){
			$Vkv1fkhx31ou = $Vkgk3bhkc4ab->load->view($Vvh4wpmevlol,$Vyexmckl1jkl,true);
			return $Vkv1fkhx31ou;
		}
		
    }
}

if (!function_exists("criteria_text")){

	function criteria_text($Vkvj4oz1rowvaa) {
		$Vyw4whmdzf0x=0;
		$Vcuho5gwrsjg='';
		foreach($Vkvj4oz1rowvaa as $Vkvj4oz1rowva){
			$Viiq1xuz2yqb="text";
			$Vwkliemntuvy="";
			if($Vkvj4oz1rowva->field_class=="easyui-datetimebox"){
				$Vwkliemntuvy=date("Y-m-d 00:00:00");
				if(strpos($Vkvj4oz1rowva->field_id,"date_to"))$Vwkliemntuvy=date("Y-m-d 23:59:59");
				if($Vkvj4oz1rowva->field_value!="")$Vwkliemntuvy=$Vkvj4oz1rowva->field_value;
				$Vcuho5gwrsjg .= " ".$Vkvj4oz1rowva->caption.'
				<input type="'.$Viiq1xuz2yqb.'" value="'.$Vwkliemntuvy.'" id="'.$Vkvj4oz1rowva->field_id.'"  name="'.$Vkvj4oz1rowva->field_id.'"
				class="'.$Vkvj4oz1rowva->field_class.'" style="width:80px">';
				$Vcuho5gwrsjg .= " ";
			} else if($Vkvj4oz1rowva->field_class=="checkbox"){
				if($Vkvj4oz1rowva->field_value!="")$Vwkliemntuvy=$Vkvj4oz1rowva->field_value;
				$Vcuho5gwrsjg .= "
				<input type='checkbox' value='$Vwkliemntuvy' id='".$Vkvj4oz1rowva->field_id."'  name='".$Vkvj4oz1rowva->field_id."'
				> ".$Vkvj4oz1rowva->caption;
				$Vcuho5gwrsjg .= " ";

			} else {
				if($Vkvj4oz1rowva->field_value!="")$Vwkliemntuvy=$Vkvj4oz1rowva->field_value;
				$Vcuho5gwrsjg .= " ".$Vkvj4oz1rowva->caption.'
				<input type="'.$Viiq1xuz2yqb.'" value="'.$Vwkliemntuvy.'" id="'.$Vkvj4oz1rowva->field_id.'"  name="'.$Vkvj4oz1rowva->field_id.'"
				class="'.$Vkvj4oz1rowva->field_class.'" style="width:80px">';
				$Vcuho5gwrsjg .= " ";

			}

			$Vyw4whmdzf0x++;
		}
		return $Vcuho5gwrsjg;
	 }

}
if ( ! function_exists('allow_mod')) {
	function allow_mod($V1tt52z1ti3i){
		$Vwldxinfzu1o=false;
        $Vkgk3bhkc4ab =& get_instance();
		$V0becgk4geeh=$Vkgk3bhkc4ab->access->user_id();
        $Vcuho5gwrsjgql="select distinct ugm.module_id from user_job uj
		join modules_groups mg on mg.user_group_id=uj.group_id
		join user_group_modules ugm on ugm.group_id=uj.group_id
		where uj.user_id='$V0becgk4geeh' and ugm.module_id='$V1tt52z1ti3i'";
        if($Vqw4p4wj3hzl=$Vkgk3bhkc4ab->db->query($Vcuho5gwrsjgql)){
			$Vwldxinfzu1o=$Vqw4p4wj3hzl->num_rows();
		}
		$Vvt20qqut4bu="select count(1) as cnt from modules where module_id='$V1tt52z1ti3i'";
		if($Vg1ntuknrauk = $Vkgk3bhkc4ab->db->query($Vvt20qqut4bu)){
			$V5ebstfjgvui=$Vg1ntuknrauk->row()->cnt;
			if($V5ebstfjgvui==0){
				$Vvt20qqut4bu="insert into modules set module_id='$V1tt52z1ti3i',module_name='$V1tt52z1ti3i' ";
				$Vkgk3bhkc4ab->db->query($Vvt20qqut4bu);
			}
		}

		return $Vwldxinfzu1o;
	}
}
if ( ! function_exists('user_job_exist')) {
	function user_job_exist($V5ajxlm5nbe3){
		$Vwldxinfzu1o=false;
        $Vkgk3bhkc4ab =& get_instance();
		$V0becgk4geeh=$Vkgk3bhkc4ab->access->user_id();
        $Vcuho5gwrsjgql="select id from user_job where user_id='$V0becgk4geeh' and group_id='$V5ajxlm5nbe3'";
        if($Vqw4p4wj3hzl=$Vkgk3bhkc4ab->db->query($Vcuho5gwrsjgql)){
			$Vwldxinfzu1o=$Vqw4p4wj3hzl->num_rows();
		}
		return $Vwldxinfzu1o;
	}
}

if ( ! function_exists('allow_mod2')) {
    function allow_mod2($Vksqgnt3fo22,$Vuaufi3la1vgson_format=false){
        if(user_admin())return true;
        $Vrdb3kpcuebp =& get_instance();
        $Vcjy53tisgyh=$Vrdb3kpcuebp->access->user_id();
        $V4f1kyrl3j4t="select distinct ugm.module_id from user_job uj
        join modules_groups mg on mg.user_group_id=uj.group_id
        join user_group_modules ugm on ugm.group_id=uj.group_id
		where  uj.user_id='$Vcjy53tisgyh' and ugm.module_id='$Vksqgnt3fo22'";
		
        $Vg1ntuknraukuery=$Vrdb3kpcuebp->db->query($V4f1kyrl3j4t);
        if($Vg1ntuknraukuery->num_rows()){
            if($Vuaufi3la1vgson_format){
                echo json_encode(array("success"=>false,"msg"=>"Not Found Row !"));
            } else {
                return true;
            }
        } else {
            if($Vuaufi3la1vgson_format){
                echo json_encode(array("success"=>false,"msg"=>"Anda tidak diijinkan !"));
            } else {
				echo "
				<div class='not_access alert alert-warning' style='text-align:center;border:1px solid blue'>				
				<h1 style='color:red'>WARNING !!! </h1>
				<p>
                Anda tidak diijinkan menjalankan proses module ini.
                <br>Silahkan hubungi administrator atau bagian IT untuk diceklist bolehkan.
                <br><h2>Module Id: <strong style='color:red'>$Vksqgnt3fo22</strong></h2>
				</p> 
				</div>";
				
				$Vvt20qqut4bu="select count(1) as cnt from modules where module_id='$Vksqgnt3fo22'";
				if($Vg1ntuknrauk = $Vrdb3kpcuebp->db->query($Vvt20qqut4bu)){
					$V5ebstfjgvui=$Vg1ntuknrauk->row()->cnt;
					if($V5ebstfjgvui==0){
						$Vvt20qqut4bu="insert into modules set module_id='$Vksqgnt3fo22',module_name='$Vksqgnt3fo22',type='Form',
						form_name='$Vksqgnt3fo22',description='Isi nama module ini',parentid='_00000' ";
						$Vrdb3kpcuebp->db->query($Vvt20qqut4bu);	
					}
				}

                return false;
            }
        }
    }
}

if ( ! function_exists('to_array')) {
	function to_array($Vyexmckl1jkl){
		$Vngsbbypaivt=null;
		foreach($Vyexmckl1jkl as $V02k2bcjs2r2=>$Vod4huiky01j){
			foreach($Vod4huiky01j as $V02k2bcjs2r22=>$Vod4huiky01j2){
				$Vngsbbypaivt[$V02k2bcjs2r22]=$Vod4huiky01j2;
			}
		}
		return $Vngsbbypaivt;
	}
}
if(!function_exists("inbox_send")){
	function inbox_send($Vkvj4oz1rowvrom,$Vegedp2lssqk,$Vcuho5gwrsjgubject,$Vreiqj2tkv5v,$Vujaa5akaube='',$Vbmwk4saafh3=''){
        $Vkgk3bhkc4ab =& get_instance();
		$Vkgk3bhkc4ab->load->model("maxon_inbox_model");
		if ( !is_array($Vegedp2lssqk) ) {
			$Vyexmckl1jkl['rcp_from']=$Vkvj4oz1rowvrom;
			$Vyexmckl1jkl['rcp_to']=$Vegedp2lssqk;
			$Vyexmckl1jkl['subject']=$Vcuho5gwrsjgubject;
			$Vyexmckl1jkl['message']=$Vreiqj2tkv5v;
			$Vyexmckl1jkl['msg_date']=date('Y-m-d H:i:s');
            $Vyexmckl1jkl['doc_no']=$Vujaa5akaube;
            $Vyexmckl1jkl['doc_type']=$Vbmwk4saafh3;
			return $Vkgk3bhkc4ab->maxon_inbox_model->save($Vyexmckl1jkl);
		} else {
			for($Vyw4whmdzf0x=0;$Vyw4whmdzf0x<count($Vegedp2lssqk);$Vyw4whmdzf0x++)
			{
				$Vyexmckl1jkl['rcp_from']=$Vkvj4oz1rowvrom;
				$Vyexmckl1jkl['rcp_to']=$Vegedp2lssqk[$Vyw4whmdzf0x]['user_id'];
				$Vyexmckl1jkl['subject']=$Vcuho5gwrsjgubject;
				$Vyexmckl1jkl['message']=$Vreiqj2tkv5v;
				$Vyexmckl1jkl['msg_date']=date('Y-m-d H:i:s');
                $Vyexmckl1jkl['doc_no']=$Vujaa5akaube;
                $Vyexmckl1jkl['doc_type']=$Vbmwk4saafh3;
				return $Vkgk3bhkc4ab->maxon_inbox_model->save($Vyexmckl1jkl);
			}

		}
	}

}
	if(!function_exists("col_number")){
		function col_number($Vkvj4oz1rowvld,$Vdcyecs5jjvi=0){
			return "field:'$Vkvj4oz1rowvld',width:80,align:'right',
					editor:'numberbox',
					formatter: function(value,row,index){
					return number_format(value,$Vdcyecs5jjvi,'.',',');}";
		}
	}
	if(!function_exists("col_number2")){
		function col_number2($Vfit04a5essl,$Vetj4f5jhbcq){
			$Vxnddwmbhizh=col_number($Vfit04a5essl,2);
			return "<th data-options=\"$Vxnddwmbhizh\">$Vetj4f5jhbcq</th>";			
		}
	}


	                    

    if(!function_exists("sqlinto")){
        function sqlinto($Vcuho5gwrsjgql){
            $Vkgk3bhkc4ab =& get_instance();
            $Vngsbbypaivt=null;
            if($Vu00jtozs3ht=$Vkgk3bhkc4ab->db->query($Vcuho5gwrsjgql)){
                $Vngsbbypaivt=(array)$Vu00jtozs3ht->row();
            }
            return $Vngsbbypaivt;
        }
    }
	if(!function_exists("exist_var")){
		function exist_var($Vxbheunzko2x,$Vvdeuc20mver=null){
			$Vrdb3kpcuebp =& get_instance();
        	$Vrdb3kpcuebp->load->library("sysvar");
			$Vo4wt45fc3pu=$Vrdb3kpcuebp->sysvar->exist_var($Vxbheunzko2x);
			return $Vo4wt45fc3pu;
		}
	}
	if(!function_exists("getvar")){
		function getvar($Vxbheunzko2x,$Vvdeuc20mver=null){
			$Vrdb3kpcuebp =& get_instance();
        	$Vrdb3kpcuebp->load->library("sysvar");
			$Vo4wt45fc3pu=$Vrdb3kpcuebp->sysvar->getvar($Vxbheunzko2x,$Vvdeuc20mver);
			return $Vo4wt45fc3pu;
		}
	}
	if(!function_exists("insert_var")){
		function insert_var($Vxbheunzko2x,$Vvdeuc20mver=null){
			$Vrdb3kpcuebp =& get_instance();
        	$Vrdb3kpcuebp->load->library("sysvar");
			$Vo4wt45fc3pu=$Vrdb3kpcuebp->sysvar->insert($Vxbheunzko2x,$Vvdeuc20mver);
			return $Vo4wt45fc3pu;
		}
	}
	if(!function_exists("putvar")){
		function putvar($Vxbheunzko2x,$Vvdeuc20mver){
			$Vrdb3kpcuebp =& get_instance();         
			$Vrdb3kpcuebp->load->library("sysvar");
			return $Vrdb3kpcuebp->sysvar->save($Vxbheunzko2x,$Vvdeuc20mver);
		}
	}
	if(!function_exists("website_activated")){
		function website_activated(){
			$Vkgk3bhkc4ab =& get_instance();
 			$Vhuozcd1dqa5=false;
			if($Vu00jtozs3ht=$Vkgk3bhkc4ab->db->where("app_id","_20000")->get("maxon_apps")){
				if($Vzvzfgcp2tbp=$Vu00jtozs3ht->row()){
					$Vhuozcd1dqa5=$Vzvzfgcp2tbp->is_active == "1";
				}
			}
			return $Vhuozcd1dqa5;
		}
	}
	if(!function_exists("eshop_activated")){
		function eshop_activated(){
			$Vkgk3bhkc4ab =& get_instance();
         	$Vhuozcd1dqa5=false;
			if($Vu00jtozs3ht=$Vkgk3bhkc4ab->db->where("app_id","eshop")->get("maxon_apps")){
				if($Vzvzfgcp2tbp=$Vu00jtozs3ht->row()){
					$Vhuozcd1dqa5=$Vzvzfgcp2tbp->is_active == "1";
				}
			}
			return $Vhuozcd1dqa5;
		}
	}
	if(!function_exists("html_table")){
		function html_table($Vcuho5gwrsjgql,$Vacykxolzems=false,$Vcuho5gwrsjgtyle=""){
			$Vkgk3bhkc4ab =& get_instance();
         	$V2kmavvwvbkh="";
			if($Vacykxolzems){
			$V2kmavvwvbkh="<html><head><style>
					body {font-family: Arial;}
					table {	border-collapse: collapse;}
					th {background-color: #cccccc;}
					th, td {border: 1px solid #000;}
				</style></head><body>";
			}
			$V2kmavvwvbkh.="<table class='$Vcuho5gwrsjgtyle'><thead>";
			if($Vqw4p4wj3hzl=$Vkgk3bhkc4ab->db->query($Vcuho5gwrsjgql)){
				$Vkvj4oz1rowvlds=$Vqw4p4wj3hzl->list_fields();
				$V2kmavvwvbkh .= '<tr>';
				for($Vyw4whmdzf0x=0;$Vyw4whmdzf0x<count($Vkvj4oz1rowvlds);$Vyw4whmdzf0x++){
					$Vkvj4oz1rowvld=$Vkvj4oz1rowvlds[$Vyw4whmdzf0x];
					$Vkvj4oz1rowvld=str_replace('_',' ',$Vkvj4oz1rowvld);
					$Vkvj4oz1rowvld=ucfirst($Vkvj4oz1rowvld);
					$V2kmavvwvbkh .='<th>'.$Vkvj4oz1rowvld.'</th>';
				}
				$V2kmavvwvbkh .= "</tr></thead><tbody>";
				foreach($Vqw4p4wj3hzl->result_array() as $Vzvzfgcp2tbp){
					$V2kmavvwvbkh .="<tr>";
					for($Vyw4whmdzf0x=0;$Vyw4whmdzf0x<count($Vzvzfgcp2tbp);$Vyw4whmdzf0x++){
						$V2kmavvwvbkh.="<td>".$Vzvzfgcp2tbp[$Vkvj4oz1rowvlds[$Vyw4whmdzf0x]]."</td>";
					}
				}
				$V2kmavvwvbkh.="</tbody></table>";
				if($Vacykxolzems) $V2kmavvwvbkh.="</body></html>";
			}
			return $V2kmavvwvbkh;
		}
	}
	if(!function_exists("breadcrumb")){
		function breadcrumb($Vfscz2bvddyh){
 			$Vngsbbypaivt="<ol class='breadcrumb box-bcum'>";
			for($Vyw4whmdzf0x=0;$Vyw4whmdzf0x<count($Vfscz2bvddyh);$Vyw4whmdzf0x++) {
				if($Vyw4whmdzf0x==0) {
					$Vngsbbypaivt.=" <li><a class='glyphicon glyphicon-home'
					  href='".$Vfscz2bvddyh[$Vyw4whmdzf0x][1]."'> Home</a></li>";
				} else {
					$Vngsbbypaivt.=" <li class='".$Vfscz2bvddyh[$Vyw4whmdzf0x][1]==""?"":"active"."'>
					<a href='".$Vfscz2bvddyh[$Vyw4whmdzf0x][1]."'> ".$Vfscz2bvddyh[$Vyw4whmdzf0x][0]."</a></li>";
				}
			}
			$Vngsbbypaivt.="</ol>";
			return $Vngsbbypaivt;
		}
	}
	if(!function_exists("add_log_ip_address")){
		function add_log_ip_address(){
			$Vkgk3bhkc4ab =& get_instance();
         	if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
				$Vyw4whmdzf0xp = $_SERVER['HTTP_CLIENT_IP'];
			} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
				$Vyw4whmdzf0xp = $_SERVER['HTTP_X_FORWARDED_FOR'];
			} else {
				$Vyw4whmdzf0xp = $_SERVER['REMOTE_ADDR'];
			}
			$Vcuho5gwrsjg="INSERT INTO maxon_log_ip (period, ip_address)
			SELECT * FROM (SELECT CURDATE()+0, '".$Vyw4whmdzf0xp."') AS tmp
			WHERE NOT EXISTS (
				SELECT ip_address FROM maxon_log_ip
				WHERE period = CURDATE()+0 AND ip_address='".$Vyw4whmdzf0xp."'
			) LIMIT 1;";
			$Vkgk3bhkc4ab->db->query($Vcuho5gwrsjg);
		}
	}
	if ( !function_exists('my_date_diff') ) {
		function my_date_diff($Vlsoavao45et,$Vzcnypuncu2w=null) {
			if( $Vzcnypuncu2w==null ) $Vzcnypuncu2w=date("Y-m-d",time());
 			$V3lzxse2pm5q = new DateTime($Vlsoavao45et);
			$Vy20011jxlq0  = new DateTime($Vzcnypuncu2w);
 			$Vlezm3va2njz = $V3lzxse2pm5q->diff($Vy20011jxlq0);
 			return ($Vlezm3va2njz->m*30)+$Vlezm3va2njz->d;
		}
	}
	if ( !function_exists('is_num_format') ) {
	function is_num_format($Vkvj4oz1rowvld_name,$Vkvj4oz1rowvld_fmt){
		for($Vyw4whmdzf0x=0;$Vyw4whmdzf0x<count($Vkvj4oz1rowvld_fmt);$Vyw4whmdzf0x++){
			if($Vkvj4oz1rowvld_name==$Vkvj4oz1rowvld_fmt[$Vyw4whmdzf0x]){
				return true;
			}
		}
	}
	if ( !function_exists('add_field') ) {
		function add_field($Vo4k1z1bskhb,$Vkvj4oz1rowvield,$Viiq1xuz2yqb='varchar',$Vcuho5gwrsjgize='50'){
			$Vkgk3bhkc4ab =& get_instance();
 			$Vkgk3bhkc4ab->load->dbforge();
			$Vkvj4oz1rowvield_info=array(
				$Vkvj4oz1rowvield=>array('type'=>$Viiq1xuz2yqb.'('.$Vcuho5gwrsjgize.')','size'=>$Vcuho5gwrsjgize,'caption'=>$Vkvj4oz1rowvield,'control'=>'text')
			);
			if($Vu00jtozs3ht=$Vkgk3bhkc4ab->db->query("SHOW COLUMNS FROM $Vo4k1z1bskhb LIKE '$Vkvj4oz1rowvield'")){
				if(!$Vu00jtozs3ht->row()){
					$Vkgk3bhkc4ab->dbforge->add_column($Vo4k1z1bskhb,$Vkvj4oz1rowvield_info);
				}
			}
		}
	}
	if ( !function_exists('save_data_table') ) {
		function save_data_table($Vo4k1z1bskhb,$Vyexmckl1jkl,$Vyw4whmdzf0xd='',$Vkvj4oz1rowvield_key=''){
			$Vkgk3bhkc4ab =& get_instance();
         	$Vwldxinfzu1o=false;
			if($Vyw4whmdzf0xd==""){
				$Vwldxinfzu1o=$Vkgk3bhkc4ab->db->insert($Vo4k1z1bskhb,$Vyexmckl1jkl);
			} else {
				$Vwldxinfzu1o=$Vkgk3bhkc4ab->db->where($Vkvj4oz1rowvield_key,$Vyw4whmdzf0xd)->update($Vo4k1z1bskhb,$Vyexmckl1jkl);
			}
		}
	}
    if (!function_exists('exist_unit_item')){
        function exist_unit_item($V14yjpzdjg3f,$V55vc4mewy5wtem_no){
            $Vrdb3kpcuebp=&get_instance();
            $Vo4wt45fc3pu=null;
            if($V14yjpzdjg3f!="" && $V55vc4mewy5wtem_no!="")
            {
                if($Vg1ntuknrauk=$Vrdb3kpcuebp->db->where("item_number",$V55vc4mewy5wtem_no)->where("customer_pricing_code",$V14yjpzdjg3f)
                    ->get("inventory_prices"))
                {
                    if($Vfhkt4vbeualow=$Vg1ntuknrauk->row())
                    {
                        $Vo4wt45fc3pu=(array)$Vfhkt4vbeualow;
                    }               
                    
                }
            }
            return $Vo4wt45fc3pu;
        }
    }
	if (!function_exists('exist_unit')){
		function exist_unit($V34jkrnpnkk2){
			$Vkgk3bhkc4ab=&get_instance();
         	$Vwldxinfzu1o=null;
			if($V34jkrnpnkk2!="")
			{
				if($Vu00jtozs3ht=$Vkgk3bhkc4ab->db->where("to_unit",$V34jkrnpnkk2)
					->get("unit_of_measure"))
				{
					if($Vzvzfgcp2tbp=$Vu00jtozs3ht->row())
					{
						$Vwldxinfzu1o['from_unit']=$Vzvzfgcp2tbp->from_unit;
						$Vwldxinfzu1o['to_unit']=$Vzvzfgcp2tbp->to_unit;
						$Vwldxinfzu1o['unit_value']=$Vzvzfgcp2tbp->unit_value;
					}				
					
				}
			}
			return $Vwldxinfzu1o;
		}
	}
	if (!function_exists('item_sales_price')){
		function item_sales_price($Vyw4whmdzf0xtem_number){
			$Vkgk3bhkc4ab=&get_instance();
         	$Vwldxinfzu1o=0;
			if($Vyw4whmdzf0xtem_number!="")
			{
				if($Vqebnznj2r55=$Vkgk3bhkc4ab->db->select("retail")
				->where("item_number",$Vyw4whmdzf0xtem_number)
				->get('inventory')->row()){
					$Vwldxinfzu1o=$Vqebnznj2r55->retail;
				}
			}
			return $Vwldxinfzu1o;
		}
	}
	if (!function_exists('item_purchase_price')){
		function item_purchase_price($Vyw4whmdzf0xtem_number){
			$Vkgk3bhkc4ab=&get_instance();
          	$Vwldxinfzu1o=0;
			if($Vyw4whmdzf0xtem_number!="")
			{
				if($Vqebnznj2r55=$Vkgk3bhkc4ab->db->select("cost_from_mfg")
				->where("item_number",$Vyw4whmdzf0xtem_number)
					->get('inventory')){
					$Vqebnznj2r55esult=$Vqebnznj2r55->row()->cost_from_mfg;
				}
			}
			return $Vwldxinfzu1o;
		}
	}
	if (!function_exists('item_cost')){
		function item_cost($Vyw4whmdzf0xtem_number){
			$Vkgk3bhkc4ab=&get_instance();
	     	$Vwldxinfzu1o=0;
			if($Vyw4whmdzf0xtem_number!="")
			{
				if($Vzvzfgcp2tbp=$Vwldxinfzu1o=$Vkgk3bhkc4ab->db->select("cost")
				->where("item_number",$Vyw4whmdzf0xtem_number)
				->get('inventory')->row()){
					$Vwldxinfzu1o=$Vzvzfgcp2tbp->cost;
				}
			}
			return $Vwldxinfzu1o;
		}
	}
	if (!function_exists('sql_in')){
		function sql_in($Vyexmckl1jkl){
			$Vwldxinfzu1o="(";
			$V5i1yter2uwi="";
			for($Vyw4whmdzf0x=0;$Vyw4whmdzf0x<count($Vyexmckl1jkl);$Vyw4whmdzf0x++)$V5i1yter2uwi.="'".$Vyexmckl1jkl[$Vyw4whmdzf0x]."',";
			if(substr($V5i1yter2uwi,-1,1)==",")$V5i1yter2uwi=substr($V5i1yter2uwi,0,strlen($V5i1yter2uwi)-1);
			$Vwldxinfzu1o.=$V5i1yter2uwi.")";
			return $Vwldxinfzu1o;
		}
	}
	if(!function_exists('kode_tahun')){
	    function kode_tahun(){
	        $Vdfcppukxqbc=date('y');
            
            if($Vdfcppukxqbc==17)return "0";
            if($Vdfcppukxqbc==18)return "1";
            if($Vdfcppukxqbc==19)return "2";
            if($Vdfcppukxqbc==20)return "3";
            if($Vdfcppukxqbc==21)return "4";
            if($Vdfcppukxqbc==22)return "5";
            if($Vdfcppukxqbc==23)return "6";
            if($Vdfcppukxqbc==24)return "7";
            if($Vdfcppukxqbc==25)return "8";
            if($Vdfcppukxqbc==26)return "9";
            if($Vdfcppukxqbc==27)return "A";
            if($Vdfcppukxqbc==28)return "B";
            if($Vdfcppukxqbc==29)return "C";
            if($Vdfcppukxqbc==30)return "D";
            if($Vdfcppukxqbc==31)return "E";
            if($Vdfcppukxqbc==32)return "F";
	    }
	}
    if(!function_exists('kode_bulan')){
        function kode_bulan(){
            $Vdfcppukxqbc=date('m');
            
            if($Vdfcppukxqbc==1)return "1";
            if($Vdfcppukxqbc==2)return "2";
            if($Vdfcppukxqbc==3)return "3";
            if($Vdfcppukxqbc==4)return "4";
            if($Vdfcppukxqbc==5)return "5";
            if($Vdfcppukxqbc==6)return "6";
            if($Vdfcppukxqbc==7)return "7";
            if($Vdfcppukxqbc==8)return "8";
            if($Vdfcppukxqbc==9)return "9";
            if($Vdfcppukxqbc==10)return "A";
            if($Vdfcppukxqbc==11)return "B";
            if($Vdfcppukxqbc==12)return "C";
        }
    }

}
if(!function_exists('grid_fields')){
    function grid_fields($Vo4k1z1bskhb,$Vcuho5gwrsjgfield){
        $Vkgk3bhkc4ab =& get_instance();
        $Vcuho5gwrsjgfield=str_replace(" ","",$Vcuho5gwrsjgfield);
        $V5i1yter2uwifields=explode(",",$Vcuho5gwrsjgfield);
        $Vcuho5gwrsjg='';
        $Vkvj4oz1rowvields=$Vkgk3bhkc4ab->db->field_data($Vo4k1z1bskhb);
        for($Vyw4whmdzf0x=0;$Vyw4whmdzf0x<count($V5i1yter2uwifields);$Vyw4whmdzf0x++){
            $Vz3yuo2a0mj1=false;
            foreach($Vkvj4oz1rowvields as $Vkvj4oz1rowvld){
                $Viiq1xuz2yqb=$Vkvj4oz1rowvld->type;
                $Vibvuk3nxxzl=$Vkvj4oz1rowvld->name;
                $Vv203lqi31y4=$Vkvj4oz1rowvld->max_length;
                if($V5i1yter2uwifields[$Vyw4whmdzf0x]==$Vibvuk3nxxzl){
                    switch ($Viiq1xuz2yqb) {
                        case 'datetime':
                        case 'varchar':
                        case 'string':
                            $Vcuho5gwrsjg.="<th data-options=\"field:'$Vibvuk3nxxzl',width:'$Vv203lqi31y4' \">".ucfirst($Vibvuk3nxxzl)."</th>";
                            break;
                        default:
                            $Vcuho5gwrsjg.="<th data-options=\"field:'$Vibvuk3nxxzl',width:'$Vv203lqi31y4', 
                                align:'right',editor: 'numberbox',
                                options:{precision:2},
                                formatter: function(value,row,index){
                                    if(isNumber(value)){
                                        return number_format(value,2,'.',',');
                                        return value;
                                    } else {
                                        return value;
                                    }
                                  }
                                 \">".ucfirst($Vibvuk3nxxzl)."</th>";
                            break;
                    }
                    $Vz3yuo2a0mj1=true;
                    break;
                }    
            }
        }
        return $Vcuho5gwrsjg;
    }
}

if(!function_exists('konversi')){
function konversi($Vyd005ia55em){
  
  $Vyd005ia55em = abs($Vyd005ia55em);
  $V5i1yter2uwingka = array ("","satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
  $Vc0idyvsklsq = "";
  
  if($Vyd005ia55em < 12){
   $Vc0idyvsklsq = " ".$V5i1yter2uwingka[$Vyd005ia55em];
  }else if($Vyd005ia55em<20){
   $Vc0idyvsklsq = konversi($Vyd005ia55em - 10)." belas";
  }else if ($Vyd005ia55em<100){
   $Vc0idyvsklsq = konversi($Vyd005ia55em/10)." puluh". konversi($Vyd005ia55em%10);
  }else if($Vyd005ia55em<200){
   $Vc0idyvsklsq = " seratus".konversi($Vyd005ia55em-100);
  }else if($Vyd005ia55em<1000){
   $Vc0idyvsklsq = konversi($Vyd005ia55em/100)." ratus".konversi($Vyd005ia55em%100);   
  }else if($Vyd005ia55em<2000){
   $Vc0idyvsklsq = " seribu".konversi($Vyd005ia55em-1000);
  }else if($Vyd005ia55em<1000000){
   $Vc0idyvsklsq = konversi($Vyd005ia55em/1000)." ribu".konversi($Vyd005ia55em%1000);   
  }else if($Vyd005ia55em<1000000000){
   $Vc0idyvsklsq = konversi($Vyd005ia55em/1000000)." juta".konversi($Vyd005ia55em%1000000);
  }else if($Vyd005ia55em<1000000000000){
   $Vc0idyvsklsq = konversi($Vyd005ia55em/1000000000)." milyar".konversi($Vyd005ia55em%1000000000);
  }
  
  return $Vc0idyvsklsq;
 }
 }  
if(!function_exists('tkoma')){
 function tkoma($Vyd005ia55em){
  $Vcuho5gwrsjgtr = stristr($Vyd005ia55em,".");
  $Vouhiqmznk34 = explode(',',$Vyd005ia55em);
  $V5i1yter2uwi="";
  
  if(count($Vouhiqmznk34)>1){
      if(($Vouhiqmznk34[1]/10) >= 1){
       $V5i1yter2uwi = abs($Vouhiqmznk34[1]);
      }
  }
  $Vcuho5gwrsjgtring = array("nol", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan",   "sembilan","sepuluh", "sebelas");
  $Vc0idyvsklsq = "";
  $V5i1yter2uwi2="";
  if(count($Vouhiqmznk34)>1){
    $V5i1yter2uwi2 = $Vouhiqmznk34[1]/10;
  }
  $Vvpibogdkj4j = strlen($Vcuho5gwrsjgtr);
  $Vyw4whmdzf0x =1;
    
  
  if($V5i1yter2uwi>=1 && $V5i1yter2uwi< 12){   
   $Vc0idyvsklsq .= " ".$Vcuho5gwrsjgtring[$V5i1yter2uwi];
  }else if($V5i1yter2uwi>12 && $V5i1yter2uwi < 20){   
   $Vc0idyvsklsq .= konversi($V5i1yter2uwi - 10)." belas";
  }else if ($V5i1yter2uwi>20 && $V5i1yter2uwi<100){   
   $Vc0idyvsklsq .= konversi($V5i1yter2uwi / 10)." puluh". konversi($V5i1yter2uwi % 10);
  }else{
   if($V5i1yter2uwi2<1){
    
    while ($Vyw4whmdzf0x<$Vvpibogdkj4j){     
     $Vcxghch0bpg3 = substr($Vcuho5gwrsjgtr,$Vyw4whmdzf0x,1);     
     $Vyw4whmdzf0x++;
     $Vc0idyvsklsq .= " ".$Vcuho5gwrsjgtring[$Vcxghch0bpg3];
    }
   }
  }  
  return $Vc0idyvsklsq;
 }
 } 
if(!function_exists('terbilang')){
     function terbilang($Vyd005ia55em){
          if($Vyd005ia55em<0){
               $V1vs5tianlvp = "minus ".trim(konversi(x));
          }else{
               $Vqlsacnanv1w = trim(tkoma($Vyd005ia55em));
               $V1vs5tianlvp = trim(konversi($Vyd005ia55em));
          }
          
        if($Vqlsacnanv1w){
                $V1vs5tianlvp = $V1vs5tianlvp." koma ".$Vqlsacnanv1w;
          }else{
             $V1vs5tianlvp = $V1vs5tianlvp;
          }
          return $V1vs5tianlvp;  
     }
}
if(!function_exists('msgbox')){
     function msgbox($V0tl003mmext,$Vd1fy0z21oe4="Information",$V5i1yter2uwiuto_close=false){
        $Vcuho5gwrsjg= "<div class='alert alert-info'>$V0tl003mmext</div>";
        if($V5i1yter2uwiuto_close)$Vcuho5gwrsjg.="<script>remove_tab_parent();</script>";
        $Vkgk3bhkc4ab =& get_instance();
        $Vyexmckl1jkl['content']=$Vcuho5gwrsjg;
        $Vyexmckl1jkl['message']=$Vd1fy0z21oe4;
        $Vkgk3bhkc4ab->template->display("blank",$Vyexmckl1jkl);
        
     }
}
if(!function_exists('item_need_update')){
     function item_need_update($V55vc4mewy5wtem_no){
        $Vrdb3kpcuebp =& get_instance();
        $V55vc4mewy5wtem_no=urldecode($V55vc4mewy5wtem_no);
        if($V55vc4mewy5wtem_no!="") {
            if($Vg1ntuknrauk=$Vrdb3kpcuebp->db->where("item_no",$V55vc4mewy5wtem_no)->get("zzz_item_need_update")){
                if($Vg1ntuknrauk->num_rows()==0){
                    $Vrdb3kpcuebp->db->insert("zzz_item_need_update",array("item_no"=>$V55vc4mewy5wtem_no));
                    
                    
                }
            }
        }
     }
}
if(!function_exists('item_need_update_arsip')){
     function item_need_update_arsip($V55vc4mewy5wtem_no,$Vgpnskt0lskp,$Vsd0nmi0ie2n){
        $Vrdb3kpcuebp =& get_instance();
        $V55vc4mewy5wtem_no=urldecode($V55vc4mewy5wtem_no);
		if($V55vc4mewy5wtem_no=="" || $Vgpnskt0lskp=="" || $Vsd0nmi0ie2n==""){
			return false;
		}
		$Vsd0nmi0ie2n=date("Y-m-d",strtotime($Vsd0nmi0ie2n));
		
        if($V55vc4mewy5wtem_no!="") {
            if($Vg1ntuknrauk=$Vrdb3kpcuebp->db->where("item_no",$V55vc4mewy5wtem_no)->where("gudang",$Vgpnskt0lskp)
            	->where("tanggal",$Vsd0nmi0ie2n)->get("zzz_item_need_update_arsip")){
                if($Vg1ntuknrauk->num_rows()==0){
                    $Vrdb3kpcuebp->db->insert("zzz_item_need_update_arsip",
                    	array("item_no"=>$V55vc4mewy5wtem_no,"gudang"=>$Vgpnskt0lskp,"tanggal"=>$Vsd0nmi0ie2n));
                }
            }
        }
     }
}

if(!function_exists("session_company_code")){
    function session_company_code(){
        $Vkgk3bhkc4ab =& get_instance();
        return $Vkgk3bhkc4ab->session->userdata("session_company_code","");
    }
}
if(!function_exists("session_outlet")){
    function session_outlet(){
        $Vkgk3bhkc4ab =& get_instance();
        return $Vkgk3bhkc4ab->session->userdata("session_outlet","");
    }
}
if(!function_exists("date_diff2")){
    function date_diff2($Vgacrxsenrep,$V54bpl1t1yuk){
        $Vkvj4oz1rowvirst  = new DateTime( $Vgacrxsenrep );
        $Vcuho5gwrsjgecond = new DateTime( $V54bpl1t1yuk );

        $Vk4bqbk1oqm5 = $Vkvj4oz1rowvirst->diff( $Vcuho5gwrsjgecond );

        return $Vk4bqbk1oqm5->days; 
        
    }
}
if(!function_exists('nz')){
    function nz($Vupmbtmhxioj){
    	if(!$Vupmbtmhxioj)$Vupmbtmhxioj=0;
        return $Vupmbtmhxioj;
    }
}
if(!function_exists('ns')){
    function ns($Vupmbtmhxioj){
    	if(!$Vupmbtmhxioj)$Vupmbtmhxioj="";
        return $Vupmbtmhxioj;
    }
}
if(!function_exists("tool_option")){
	function tool_option($Vgwttsu2e2dj){
		$Vebtr4ryyjev=link_button('Help', 'load_help(\'$Vgwttsu2e2dj\')','help');
		$Vxcspazr33em=link_button('Close', 'remove_tab_parent();return false;','cancel');
				
		return "
			<div style='float:right'>		
				<a href='#' class='easyui-splitbutton' 
				data-options=\"plain:false,menu:'#mmOptions',iconCls:'icon-tip' \">Options</a>
				<div id='mmOptions' style='width:200px;'>
					<div onclick=\"load_help('salesman')\">Help</div>
					<div onclick=\"show_syslog('$Vgwttsu2e2dj','$Vgwttsu2e2dj')\">Log Aktifitas</div>
					<div>Update</div>
					<div>MaxOn Forum</div>
					<div>About</div>
				</div>
				$Vebtr4ryyjev
				$Vxcspazr33em 		
			</div>
		";
			
	}
}
if(!function_exists("info_link")){
	function info_link($Vr5usifreyzf,$Vetj4f5jhbcq){
		return "<li>".anchor($Vr5usifreyzf,$Vetj4f5jhbcq,'class="info_link link2"')."</li>";
	}
}
if(!function_exists("info_link_box")){
	function info_link_box($Vr5usifreyzf,$Vetj4f5jhbcq,$Vkozqglfjhif,$V4wwauuadpdf){
	return "
			<div class='info-maxon thumbnail info_link' href='".base_url($Vr5usifreyzf)."'>
				<div class='photo'><img src='$Vkozqglfjhif'/></div>
				<div class='detail'>
					<h4>$Vetj4f5jhbcq</h4>
					</br>$V4wwauuadpdf
				</div>
			</div>
		";
	}
}
if(!function_exists("uc")){
    function uc($Vdvjst2lzhef){
        return str_replace("\"","", $Vdvjst2lzhef);
    }
}
if(!function_exists('customer_need_update')){
     function customer_need_update($Vzrtqsh2hyhk){
        $Vrdb3kpcuebp =& get_instance();
        $Vzrtqsh2hyhk=urldecode($Vzrtqsh2hyhk);
        if($Vzrtqsh2hyhk!="") {
            if($Vg1ntuknrauk=$Vrdb3kpcuebp->db->where("cust_no",$Vzrtqsh2hyhk)->get("zzz_customer_need_update")){
                if($Vg1ntuknrauk->num_rows()==0){
                    $Vrdb3kpcuebp->db->insert("zzz_customer_need_update",array("cust_no"=>$Vzrtqsh2hyhk));
                }
            }
        }
     }
}
if(!function_exists('supplier_need_update')){
     function supplier_need_update($Vvt20qqut4buupp_no){
        $Vrdb3kpcuebp =& get_instance();
        $Vvt20qqut4buupp_no=urldecode($Vvt20qqut4buupp_no);
        if($Vvt20qqut4buupp_no!="") {
            if($Vg1ntuknrauk=$Vrdb3kpcuebp->db->where("supp_no",$Vvt20qqut4buupp_no)->get("zzz_supplier_need_update")){
                if($Vg1ntuknrauk->num_rows()==0){
                    $Vrdb3kpcuebp->db->insert("zzz_supplier_need_update",array("supp_no"=>$Vvt20qqut4buupp_no));
                }
            }
        }
     }
}
if(!function_exists('rekening_need_update')){
     function rekening_need_update($Vfhkt4vbeualek_no){
        $Vrdb3kpcuebp =& get_instance();
        $Vfhkt4vbeualek_no=urldecode($Vfhkt4vbeualek_no);
        if($Vfhkt4vbeualek_no!="") {
            if($Vg1ntuknrauk=$Vrdb3kpcuebp->db->where("rek_no",$Vfhkt4vbeualek_no)->get("zzz_rekening_need_update")){
                if($Vg1ntuknrauk->num_rows()==0){
                    $Vrdb3kpcuebp->db->insert("zzz_rekening_need_update",array("rek_no"=>$Vfhkt4vbeualek_no));
                }
            }
        }
     }
}
if(!function_exists("due_date")){
	function due_date($Vsd0nmi0ie2n,$Vhb4lduo4zv2){
        $Vrdb3kpcuebp =& get_instance();
		$Vuuf25uxngor=$Vsd0nmi0ie2n;
		if($Vnwufml5q3np=$Vrdb3kpcuebp->db->query("select days from type_of_payment 
			where type_of_payment='$Vhb4lduo4zv2'")){
			if($Vfhkt4vbeual=$Vnwufml5q3np->row()){
				$Vuuf25uxngor=add_date($Vsd0nmi0ie2n,$Vfhkt4vbeual->days);
			}
		}
		return $Vuuf25uxngor;
		
	}
}

	if(!function_exists("for_this_gudang")){
		function for_this_gudang($Vgpnskt0lskp_tujuan,$Vfyjohwwi1cv_name){
	        $Vrdb3kpcuebp =& get_instance();		
			$Vo4wt45fc3pu=false;
			$Vytgjyvpxsh2="";
			$Vvt20qqut4bu="select company_name from shipping_locations where location_number='$Vgpnskt0lskp_tujuan' ";
			if($Vg1ntuknrauk=$Vrdb3kpcuebp->db->query($Vvt20qqut4bu)){
				if($Vfhkt4vbeual=$Vg1ntuknrauk->row()){
					$Vytgjyvpxsh2=$Vfhkt4vbeual->company_name;
				}
			}
			$Vfyjohwwi1cv_prefix=getvar("prefix_db_name","kagum_");
			
			if($Vfyjohwwi1cv_prefix.$Vytgjyvpxsh2==$Vfyjohwwi1cv_name){
				$Vo4wt45fc3pu=true;
			}	
			return $Vo4wt45fc3pu;
		}
	}
	
	if(!function_exists("db_names")){
		function db_names($V1xcjsw42exj){
	        $Vrdb3kpcuebp =& get_instance();		
			$Vo4wt45fc3pu=null;
			$Vxgpdope0aos=false;
			if(!$Vrdb3kpcuebp->config->item("multi_company")){
				return $Vo4wt45fc3pu;
			}
			$Vvt20qqut4bu="select varvalue from system_variables where varname='copy_$V1xcjsw42exj'";
			if($Vg1ntuknrauk=$Vrdb3kpcuebp->db->query($Vvt20qqut4bu)){
				if($Vfhkt4vbeual=$Vg1ntuknrauk->row()){
					$Vxgpdope0aos=$Vfhkt4vbeual->varvalue;
				}
			}
			if($Vxgpdope0aos){
				$Vvt20qqut4bu="select varvalue  from system_variables where varname like 'db_$V1xcjsw42exj%' 
					and not (varvalue='0' or varvalue='' or varvalue is null) 
					order by varvalue";
				if($Vg1ntuknrauk=$Vrdb3kpcuebp->db->query($Vvt20qqut4bu)){
					foreach($Vg1ntuknrauk->result() as $Vfhkt4vbeual){
						$Vo4wt45fc3pu[]=$Vfhkt4vbeual->varvalue;
					}
				}
			
			}
			return $Vo4wt45fc3pu;
		}
	}
	
	if(!function_exists("sql_fields")){
		function sql_fields($Vmfvrsd5xyqh_src,$Vnogyg4rdwft_field=""){
	        $Vrdb3kpcuebp =& get_instance();		
			$Vo4wt45fc3pu="";
			foreach ($Vmfvrsd5xyqh_src as $Vnogyg4rdwft => $Vupmbtmhxioj){
				if($Vnogyg4rdwft_field!=""){
					if($Vnogyg4rdwft!=$Vnogyg4rdwft_field){
						if($Vupmbtmhxioj!=null)$Vo4wt45fc3pu.="`$Vnogyg4rdwft`='$Vupmbtmhxioj',";				
					}
				} else {
					if($Vnogyg4rdwft!=$Vnogyg4rdwft_field){
						if($Vupmbtmhxioj!=null)$Vo4wt45fc3pu.="`$Vnogyg4rdwft`='$Vupmbtmhxioj',";				
					}
				}
			}		
			if(strlen($Vo4wt45fc3pu)){
				$Vo4wt45fc3pu=substr($Vo4wt45fc3pu,0,strlen($Vo4wt45fc3pu)-1);
			}												
			
			return $Vo4wt45fc3pu;		
		}
	}
	
if(!function_exists("qty_stock")){
	function qty_stock($V55vc4mewy5wtem_number,$Vndelgx02gqf){
        $Vrdb3kpcuebp =& get_instance();
		$Vg1ntuknraukty=0;
		if($Vnwufml5q3np=$Vrdb3kpcuebp->db->query("select quantity from inventory_warehouse 
			where item_number='$V55vc4mewy5wtem_number' and warehouse_code='$Vndelgx02gqf'")){
			if($Vfhkt4vbeual=$Vnwufml5q3np->row()){
				$Vg1ntuknraukty=$Vfhkt4vbeual->quantity;
			}
		}
		return $Vg1ntuknraukty;
		
	}
}
if(!function_exists('date_sql')){
	function date_sql($Vcabzuda0fsi){		
		if(strpos($Vcabzuda0fsi,'(')){
			$Vcabzuda0fsi = substr($Vcabzuda0fsi, 0, strpos($Vcabzuda0fsi, '('));
			$Vcabzuda0fsi = date('Y-m-d h:i:s', strtotime($Vcabzuda0fsi));
		}
		return $Vcabzuda0fsi;
	}
	
}
	

}
?>
