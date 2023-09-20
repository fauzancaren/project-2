<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

date_default_timezone_set("Asia/Jakarta");

if ( ! function_exists('app_active')) {
    function app_active($Vdnnv2mpc4mi){
        $Vrdb3kpcuebp =& get_instance();
        $Vo4wt45fc3pu=false;
        $V1eihnwiexdo=$Vrdb3kpcuebp->db->select("is_active")->where("app_id",$Vdnnv2mpc4mi)->get("maxon_apps");
        if($Vjs4rkfllnin=$V1eihnwiexdo->row()){
            $Vo4wt45fc3pu=$Vjs4rkfllnin->is_active==1?true:false;
        }
        return $Vo4wt45fc3pu;
    }
}

if(!function_exists('c_')){
    function c_($Vupmbtmhxioj){
        return str_replace(',','',$Vupmbtmhxioj);
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
if(!function_exists("load_picture")){
	function load_picture($Vjluyuwumvof=''){
		if($Vjluyuwumvof=='') return base_url()."images/no-images.png";
		$Vxb0ra0fqzn2=FCPATH . "tmp/".$Vjluyuwumvof;
		if(file_exists($Vxb0ra0fqzn2)){
			return base_url()."tmp/".$Vjluyuwumvof;
		} else {
			return base_url()."images/no-images.png";
		}
	}
}
if(!function_exists("my_input_date")){
	function my_input_date($Vetj4f5jhbcq,$Vxb0ra0fqzn2ield_name,$Vxb0ra0fqzn2ield_value,$Vawsrv4ompmu="",$Vk4huej5ua1q=""){
		echo "<div class='form-group'>
		<label class='control-label ".$Vawsrv4ompmu."' for='".$Vxb0ra0fqzn2ield_name."'>".$Vetj4f5jhbcq."</label>
		<div class='".$Vk4huej5ua1q."'>".form_input($Vxb0ra0fqzn2ield_name,$Vxb0ra0fqzn2ield_value,
		"id='".$Vxb0ra0fqzn2ield_name."' class='form-control input-sm easyui-datetimebox' 
		data-options='formatter:format_date,parser:parse_date'
		style='width:200px'
		")."</div></div>";
	}
}
if(!function_exists("form_input_date")){
	function form_input_date($Vxb0ra0fqzn2ield_name,$Vxb0ra0fqzn2ield_value,$Vawsrv4ompmu="",$Vk4huej5ua1q=""){
		echo form_input($Vxb0ra0fqzn2ield_name,$Vxb0ra0fqzn2ield_value,
		"id='".$Vxb0ra0fqzn2ield_name."' class='easyui-datetimebox' 
		data-options='formatter:format_date,parser:parse_date'
		");
	}
}
if(!function_exists("my_button")){
	function my_button($Vetj4f5jhbcq,$Vhyjktplnzot,$Vkozqglfjhif,$Vu1wlog3uofo){
		echo "<a href='#' onclick='$Vhyjktplnzot'
		class='btn btn-primary glyphicon glyphicon-$Vkozqglfjhif'
		title='$Vu1wlog3uofo'>$Vetj4f5jhbcq</a>";
	}
}
if(!function_exists("my_button_submit")){
	function my_button_submit($Vetj4f5jhbcq='Submit'){
		echo "<input type='submit' value='$Vetj4f5jhbcq' name='submit' name='submit' 
		class='btn btn-primary'>";
	}
}

if(!function_exists("my_input_2")){
	function my_input_2($Vmfvrsd5xyqh,$Vxb0ra0fqzn2ield_name='',$Vxb0ra0fqzn2ield_value=''){
	   my_input($Vmfvrsd5xyqh,$Vxb0ra0fqzn2ield_name,$Vxb0ra0fqzn2ield_value,"x","x");
		
	}
}
if(!function_exists("my_input3")){
    function my_input3($Vaxehhzoh0mw){
        $Vqgl1puppscb=(object)$Vaxehhzoh0mw;
        if(!isset($Vqgl1puppscb->extra))$Vqgl1puppscb->extra="";
        if(!isset($Vqgl1puppscb->value))$Vqgl1puppscb->value="";
        $Vhumjfrsmsmv=$Vqgl1puppscb->field;
        if(isset($Vqgl1puppscb->id))$Vhumjfrsmsmv=$Vqgl1puppscb->id;
        $Vvt20qqut4bu=form_input($Vqgl1puppscb->field,$Vqgl1puppscb->value,"id='$Vhumjfrsmsmv' $Vqgl1puppscb->extra");
        if(isset($Vqgl1puppscb->button))$Vvt20qqut4bu.=link_button('',$Vqgl1puppscb->func,"search");
        if(isset($Vqgl1puppscb->button_add))$Vvt20qqut4bu.=link_button('',$Vqgl1puppscb->func_add,"add");
        return $Vvt20qqut4bu;
    }
}

if(!function_exists("my_input")){
	function my_input($Vmfvrsd5xyqh,$Vxb0ra0fqzn2ield_name='',$Vxb0ra0fqzn2ield_value='',$Vetj4f5jhbcq_class="",$V1knm3bavuoj="",$Vvt20qqut4butyle=""){
		$Vetj4f5jhbcq=$Vmfvrsd5xyqh;
		$Vvt20qqut4buub_caption="";
		$Vb5kn1gbu0ep="";
		$V1knm3bavuoj_field='';
		$Vaxehhzoh0mw=""; $Vvt20qqut4buhow_button="";
		$Vs5uyja3ncde="";
		if(is_array($Vmfvrsd5xyqh)){
			foreach($Vmfvrsd5xyqh as $Vnogyg4rdwft=>$Vupmbtmhxioj)
			{
				if ( $Vnogyg4rdwft == "caption" ) $Vetj4f5jhbcq=$Vupmbtmhxioj;
				if ( $Vnogyg4rdwft == "sub_caption" ) $Vvt20qqut4buub_caption=$Vupmbtmhxioj;
				if ( $Vnogyg4rdwft == "field_name" ) $Vxb0ra0fqzn2ield_name=$Vupmbtmhxioj;
				if ( $Vnogyg4rdwft == "value" ) $Vxb0ra0fqzn2ield_value=$Vupmbtmhxioj;
				if ( $Vnogyg4rdwft == "caption_class" ) $Vetj4f5jhbcq_class=$Vupmbtmhxioj;
				if ( $Vnogyg4rdwft == "text_class" ) $V1knm3bavuoj=$Vupmbtmhxioj;
				if ( $Vnogyg4rdwft == "style" ) $Vvt20qqut4butyle=$Vupmbtmhxioj;
				if ( $Vnogyg4rdwft == "align" ) $Vb5kn1gbu0ep=' align="'.$Vupmbtmhxioj.'" ';
				if ( $Vnogyg4rdwft == "text_class_field" ) $V1knm3bavuoj_field=$Vupmbtmhxioj;
				if ( $Vnogyg4rdwft == "param" ) $Vaxehhzoh0mw=$Vupmbtmhxioj;
				if ( $Vnogyg4rdwft == "show_button" ) $Vvt20qqut4buhow_button=$Vupmbtmhxioj;
				if ( $Vnogyg4rdwft == "clear_line" ) $Vs5uyja3ncde=$Vupmbtmhxioj;
			}
		}
		
		
		echo "<div class='form-group'>
		<label $Vb5kn1gbu0ep class='control-label $Vetj4f5jhbcq_class ' for='$Vxb0ra0fqzn2ield_name'>$Vetj4f5jhbcq</label>
		<div class='$V1knm3bavuoj'>"
		.form_input($Vxb0ra0fqzn2ield_name,$Vxb0ra0fqzn2ield_value,
		"$Vaxehhzoh0mw id='$Vxb0ra0fqzn2ield_name' class='form-control input-sm  $V1knm3bavuoj_field ' $Vvt20qqut4butyle")
		."";
		if ($Vs5uyja3ncde!="") echo "<div class='clear'>";
		if ($Vvt20qqut4buub_caption!="") echo "<i>$Vvt20qqut4buub_caption</i>";
		if ($Vs5uyja3ncde!="") echo "</div>";
		if ($Vvt20qqut4buhow_button!="") echo $Vvt20qqut4buhow_button;

		echo "</div>";
		echo "</div>";
	}
}
if(!function_exists("my_hidden")){
	function my_hidden($Vmfvrsd5xyqh,$Vxb0ra0fqzn2ield_name='',$Vxb0ra0fqzn2ield_value='',$Vetj4f5jhbcq_class="",$V1knm3bavuoj="",$Vvt20qqut4butyle=""){
		$Vetj4f5jhbcq=$Vmfvrsd5xyqh;
		if(is_array($Vmfvrsd5xyqh)){
			foreach($Vmfvrsd5xyqh as $Vnogyg4rdwft=>$Vupmbtmhxioj)
			{
				if ( $Vnogyg4rdwft == "field_name" ) $Vxb0ra0fqzn2ield_name=$Vupmbtmhxioj;
				if ( $Vnogyg4rdwft == "value" ) $Vxb0ra0fqzn2ield_value=$Vupmbtmhxioj;
			}
		}
		echo form_hidden($Vxb0ra0fqzn2ield_name,$Vxb0ra0fqzn2ield_value,"id='$Vxb0ra0fqzn2ield_name'");
	}
}

if(!function_exists("my_textarea")){
	function my_textarea($Vmfvrsd5xyqh,$Vxb0ra0fqzn2ield_name='',$Vxb0ra0fqzn2ield_value='',$Vetj4f5jhbcq_class="",$V1knm3bavuoj="",$Vvt20qqut4butyle=""){
		$Vetj4f5jhbcq=$Vmfvrsd5xyqh;
		$Vvt20qqut4buub_caption="";
		$Vb5kn1gbu0ep="";
		$V1knm3bavuoj_field='';
		if(is_array($Vmfvrsd5xyqh)){
			foreach($Vmfvrsd5xyqh as $Vnogyg4rdwft=>$Vupmbtmhxioj)
			{
				if ( $Vnogyg4rdwft == "caption" ) $Vetj4f5jhbcq=$Vupmbtmhxioj;
				if ( $Vnogyg4rdwft == "sub_caption" ) $Vvt20qqut4buub_caption=$Vupmbtmhxioj;
				if ( $Vnogyg4rdwft == "field_name" ) $Vxb0ra0fqzn2ield_name=$Vupmbtmhxioj;
				if ( $Vnogyg4rdwft == "value" ) $Vxb0ra0fqzn2ield_value=$Vupmbtmhxioj;
				if ( $Vnogyg4rdwft == "caption_class" ) $Vetj4f5jhbcq_class=$Vupmbtmhxioj;
				if ( $Vnogyg4rdwft == "text_class" ) $V1knm3bavuoj=$Vupmbtmhxioj;
				if ( $Vnogyg4rdwft == "style" ) $Vvt20qqut4butyle=$Vupmbtmhxioj;
				if ( $Vnogyg4rdwft == "align" ) $Vb5kn1gbu0ep=' align="'.$Vupmbtmhxioj.'" ';
				if ( $Vnogyg4rdwft == "text_class_field" ) $V1knm3bavuoj_field=$Vupmbtmhxioj;
			}
		}
		echo "<div class='form-group ' >
		<label  $Vb5kn1gbu0ep class='control-label $Vetj4f5jhbcq_class' for='$Vxb0ra0fqzn2ield_name'>$Vetj4f5jhbcq</label>
			<div class='$V1knm3bavuoj'>"
			.form_textarea($Vxb0ra0fqzn2ield_name,$Vxb0ra0fqzn2ield_value,
			"id='$Vxb0ra0fqzn2ield_name' class='form-control input-sm $V1knm3bavuoj_field ' $Vvt20qqut4butyle ")
			."</div>
		</div>";
	}
}

if(!function_exists("my_input_file")){
	function my_input_file($Vmfvrsd5xyqh,$Vxb0ra0fqzn2ield_name='',$Vxb0ra0fqzn2ield_value='',$Vetj4f5jhbcq_class="",$V1knm3bavuoj="",$Vvt20qqut4butyle=""){
		$Vetj4f5jhbcq=$Vmfvrsd5xyqh;
		$Vvt20qqut4buub_caption="";
		$Vb5kn1gbu0ep="";
		$V1knm3bavuoj_field='';
		$V21ac20rxl5f=false;
		$Vrvz110fmdng='';
		$Vvt20qqut4buhow_images=false;
		$Vdtfh50rmcw2='';
		if(is_array($Vmfvrsd5xyqh)){
			foreach($Vmfvrsd5xyqh as $Vnogyg4rdwft=>$Vupmbtmhxioj)
			{
				if ( $Vnogyg4rdwft == "caption" ) $Vetj4f5jhbcq=$Vupmbtmhxioj;
				if ( $Vnogyg4rdwft == "sub_caption" ) $Vvt20qqut4buub_caption=$Vupmbtmhxioj;
				if ( $Vnogyg4rdwft == "field_name" ) $Vxb0ra0fqzn2ield_name=$Vupmbtmhxioj;
				if ( $Vnogyg4rdwft == "value" ) $Vxb0ra0fqzn2ield_value=$Vupmbtmhxioj;
				if ( $Vnogyg4rdwft == "caption_class" ) $Vetj4f5jhbcq_class=$Vupmbtmhxioj;
				if ( $Vnogyg4rdwft == "text_class" ) $V1knm3bavuoj=$Vupmbtmhxioj;
				if ( $Vnogyg4rdwft == "style" ) $Vvt20qqut4butyle=$Vupmbtmhxioj;
				if ( $Vnogyg4rdwft == "align" ) $Vb5kn1gbu0ep=' align="'.$Vupmbtmhxioj.'" ';
				if ( $Vnogyg4rdwft == "text_class_field" ) $V1knm3bavuoj_field=$Vupmbtmhxioj;
				if ( $Vnogyg4rdwft == "add_text_field" ) $V21ac20rxl5f=$Vupmbtmhxioj;
				if ( $Vnogyg4rdwft == "show_images" ) $Vvt20qqut4buhow_images=$Vupmbtmhxioj;
			}
		}
		if($V21ac20rxl5f) {
			$Vrvz110fmdng="<input type='text' name='$Vxb0ra0fqzn2ield_name' id='$Vxb0ra0fqzn2ield_name'
					value='$Vxb0ra0fqzn2ield_value'  class='form-control input-sm  $V1knm3bavuoj_field ' $Vvt20qqut4butyle/>";
		}
		if($Vvt20qqut4buhow_images) {
			$Vdtfh50rmcw2="<div class='thumbnail '>
				<img src='".base_url()."images/$Vxb0ra0fqzn2ield_value'>
			</div>";
		}
		echo "<div class='form-group'>
			<label class='control-label $Vetj4f5jhbcq_class' for='$Vxb0ra0fqzn2ield_name'>$Vetj4f5jhbcq</label>
			<div class='$V1knm3bavuoj'>
				<input type='file' name='img_$Vxb0ra0fqzn2ield_name' id='img_$Vxb0ra0fqzn2ield_name' title='Select'/>
				$Vrvz110fmdng
				$Vdtfh50rmcw2
			</div>
		</div>";
	}
}
if(!function_exists("my_input_tr")){
	function my_input_tr($Vetj4f5jhbcq,$Vxb0ra0fqzn2ield_name,$Vxb0ra0fqzn2ield_value='',$Vnibnu4nl2rs=''){
		$Vnvbwe2aps4q="<tr><td>".$Vetj4f5jhbcq."</td><td>
		<input type='text' name='".$Vxb0ra0fqzn2ield_name."' id='".$Vxb0ra0fqzn2ield_name."' value='$Vxb0ra0fqzn2ield_value'>";
		if($Vnibnu4nl2rs!="") $Vnvbwe2aps4q .= $Vnibnu4nl2rs;
		$Vnvbwe2aps4q .= "</td></tr>";
		echo $Vnvbwe2aps4q;
	}
}
if(!function_exists("my_input_td")){
    function my_input_td($Vetj4f5jhbcq,$Vxb0ra0fqzn2ield_name,$Vxb0ra0fqzn2ield_value='',$Vnibnu4nl2rs=''){
        $Vnvbwe2aps4q="<td>".$Vetj4f5jhbcq."</td><td>
        <input type='text' name='".$Vxb0ra0fqzn2ield_name."' id='".$Vxb0ra0fqzn2ield_name."' value='$Vxb0ra0fqzn2ield_value'>";
        if($Vnibnu4nl2rs!="") $Vnvbwe2aps4q .= $Vnibnu4nl2rs;
        $Vnvbwe2aps4q .= "</td>";
        echo $Vnvbwe2aps4q;
    }
}

if(!function_exists("my_input_date_tr")){
	function my_input_date_tr($Vetj4f5jhbcq,$Vxb0ra0fqzn2ield_name,$Vxb0ra0fqzn2ield_value='',$Vnibnu4nl2rs=''){
		$Vnvbwe2aps4q="<tr><td>".$Vetj4f5jhbcq."</td><td>
		<input type='text' name='".$Vxb0ra0fqzn2ield_name."' id='".$Vxb0ra0fqzn2ield_name."' value='$Vxb0ra0fqzn2ield_value' 
		class='easyui-datetimebox' 
		data-options='formatter:format_date,parser:parse_date'
		>";
		if($Vnibnu4nl2rs!="") $Vnvbwe2aps4q .= $Vnibnu4nl2rs;
		$Vnvbwe2aps4q .= "</td></tr>";
		echo $Vnvbwe2aps4q;
	}
}
if(!function_exists("my_input_date_td")){
    function my_input_date_td($Vetj4f5jhbcq,$Vxb0ra0fqzn2ield_name,$Vxb0ra0fqzn2ield_value='',$Vnibnu4nl2rs=''){
        $Vnvbwe2aps4q="<td>".$Vetj4f5jhbcq."</td><td>
        <input type='text' name='".$Vxb0ra0fqzn2ield_name."' id='".$Vxb0ra0fqzn2ield_name."' value='$Vxb0ra0fqzn2ield_value' 
        class='easyui-datetimebox' 
        data-options='formatter:format_date,parser:parse_date'
        >";
        if($Vnibnu4nl2rs!="") $Vnvbwe2aps4q .= $Vnibnu4nl2rs;
        $Vnvbwe2aps4q .= "</tdxxxxxxxxxxxxxxxxxxxxxxxxxxx>";
        echo $Vnvbwe2aps4q;
    }
}

		
if(!function_exists("my_dropdown")){
	function my_dropdown($Vetj4f5jhbcq,$Vxb0ra0fqzn2ield_name,$Vxb0ra0fqzn2ield_value,$Vxqta2vbwnfr,$Vawsrv4ompmu="",$Vk4huej5ua1q=""){
		echo "<div class='form-group'>
		<label class='control-label ".$Vawsrv4ompmu."' for='".$Vxb0ra0fqzn2ield_name."'>".$Vetj4f5jhbcq."</label>
		<div class='".$Vk4huej5ua1q."'>".form_dropdown($Vxb0ra0fqzn2ield_name,$Vxqta2vbwnfr,$Vxb0ra0fqzn2ield_value,
		"id='".$Vxb0ra0fqzn2ield_name."' class='form-control'")."</div></div>";
	}
}
if(!function_exists("array_data_table")){
	function array_data_table($Vntfufcb4vaz,$Vxb0ra0fqzn2ield_key,$Vxb0ra0fqzn2ield_val,$Vrgmu3jbi2sw=""){
        $Vrdb3kpcuebp =& get_instance();
		            
       $V2ezramm0zfx=$Vrdb3kpcuebp->config->item('multi_company');
       if($V2ezramm0zfx){
            $Vrrko4ma2kot=$Vrdb3kpcuebp->session->userdata("company_code","");
            if($Vrrko4ma2kot!=""){
               $Vrdb3kpcuebp->db = $Vrdb3kpcuebp->load->database($Vrrko4ma2kot, TRUE);
           }
       }         
		$Vmfvrsd5xyqh2=$Vrdb3kpcuebp->db->select("$Vxb0ra0fqzn2ield_key,$Vxb0ra0fqzn2ield_val")->get("$Vntfufcb4vaz")->result_array();
		$Vmfvrsd5xyqh[]=array($Vxb0ra0fqzn2ield_key=>"",$Vxb0ra0fqzn2ield_val=>"--Select--");
		$Vmfvrsd5xyqh=array_merge($Vmfvrsd5xyqh,$Vmfvrsd5xyqh2);
		$Vtzul5z3fkte=null;for($V55vc4mewy5w=0;$V55vc4mewy5w<count($Vmfvrsd5xyqh);$V55vc4mewy5w++){$Vtzul5z3fkte[$Vmfvrsd5xyqh[$V55vc4mewy5w][$Vxb0ra0fqzn2ield_key]]=$Vmfvrsd5xyqh[$V55vc4mewy5w][$Vxb0ra0fqzn2ield_val];}
		return $Vtzul5z3fkte;
	}
}
if(!function_exists("my_checkbox")){
	function my_checkbox($Vetj4f5jhbcq,$Vxb0ra0fqzn2ield_name,$Vxb0ra0fqzn2ield_value,$Vxqta2vbwnfr,$Vawsrv4ompmu="col-sm-4",$Vk4huej5ua1q="col-sm-2"){
		if(is_array($Vxqta2vbwnfr)){
		echo "<div class='form-check' >
		<label class='control-label ".$Vawsrv4ompmu."' for='".$Vxb0ra0fqzn2ield_name."'>".$Vetj4f5jhbcq."</label>
		<div class='col-md-6'>";
		$Vxb0ra0fqzn2ield_value_array=explode(",",$Vxb0ra0fqzn2ield_value);
		foreach( $Vxqta2vbwnfr as $Vnogyg4rdwft => $Vupmbtmhxioj ) {
			$Vxb0ra0fqzn2ound=false;
			if(is_array($Vxb0ra0fqzn2ield_value_array)){
				for($Vuaufi3la1vg=0;$Vuaufi3la1vg<count($Vxb0ra0fqzn2ield_value_array);$Vuaufi3la1vg++) {
					if($Vxb0ra0fqzn2ield_value_array[$Vuaufi3la1vg]==$Vupmbtmhxioj){
						$Vxb0ra0fqzn2ound=true;
					}
				}
				$V43dvwy1nwev=$Vxb0ra0fqzn2ound;
			} else {
				$V43dvwy1nwev=$Vxb0ra0fqzn2ield_value==$Vupmbtmhxioj?true:false;
			}
			echo "<label class='control-label col-md-4'>";
			echo form_checkbox($Vxb0ra0fqzn2ield_name.'[]', $Vnogyg4rdwft, $V43dvwy1nwev,
				"id='".$Vxb0ra0fqzn2ield_name."' class='checkbox'").' '.$Vupmbtmhxioj.' ';
			echo "</label>";
		}
		echo "</div>
		</div>
		<div class='clearfix'></div>";
		} else {
			$V43dvwy1nwev=$Vxb0ra0fqzn2ield_value=="1"?true:false;
			echo "<div class='form-check'>
			<label class='control-label ".$Vawsrv4ompmu."' for='".$Vxb0ra0fqzn2ield_name."'>".$Vetj4f5jhbcq."</label>
			<div class='".$Vk4huej5ua1q."'>".form_checkbox($Vxb0ra0fqzn2ield_name,$Vxb0ra0fqzn2ield_value,$V43dvwy1nwev,
			"id='".$Vxb0ra0fqzn2ield_name."' class='form-control input-sm'")."</div></div>";	

		}
	}
}
if(!function_exists("render_form")) {
	function render_form($Vxb0ra0fqzn2orm) {
	$Vmfvrsd5xyqh[]=null;
	foreach($Vxb0ra0fqzn2orm as $Vxb0ra0fqzn2rm)
	{
		$Vmfvrsd5xyqh=array_merge($Vmfvrsd5xyqh,$Vxb0ra0fqzn2rm['data']);
		switch($Vxb0ra0fqzn2rm['input_type'])
		{
			case "dropdown":
				break;
			case "datetime":
				break;
			case "textarea":
				my_textarea($Vmfvrsd5xyqh);
				break;
			case "file":
				my_input_file($Vmfvrsd5xyqh);
				break;
			case "hidden":
				my_hidden($Vmfvrsd5xyqh);
				break;
			default:
				my_input($Vmfvrsd5xyqh);
				break;
		}
	}
	}
}
if(!function_exists("add_button_menu")){
	function add_button_menu($Vetj4f5jhbcq,$Vd4ndknr1azu,$V55vc4mewy5wco,$Vuuarhrrbnpm,$Vab5vdfai0cw=""){
	$Vbdohg2hxvkl="href='".base_url()."index.php/$Vd4ndknr1azu'";
	if($Vab5vdfai0cw<>"") $Vbdohg2hxvkl=" onclick='$Vab5vdfai0cw'";
	echo "<div class='col-lg-3 col-md-4 col-sm-12 info thumbnail info_link box-gradient' $Vbdohg2hxvkl>
				<div class='photo'><img src='".base_url()."images/$V55vc4mewy5wco'/></div>
				<div class='detail'><h4>$Vetj4f5jhbcq</h4></br>$Vuuarhrrbnpm</div>
		</div>";
	}
}
if(!function_exists("format_sql_date")){
	function format_sql_date($Vupmbtmhxioj){
		return  date('Y-m-d H:i:s', strtotime($Vupmbtmhxioj));
	}
}
if(!function_exists("dropdown_data")){
	function dropdown_data($Vntfufcb4vaz,$Vxb0ra0fqzn2ield_key="",$Vxb0ra0fqzn2ield_value="",$Vhruhyjfhch4=""){
        $Vrdb3kpcuebp =& get_instance();
		            
       $V2ezramm0zfx=$Vrdb3kpcuebp->config->item('multi_company');
       if($V2ezramm0zfx){
            $Vrrko4ma2kot=$Vrdb3kpcuebp->session->userdata("company_code","");
            if($Vrrko4ma2kot!=""){
               $Vrdb3kpcuebp->db = $Vrdb3kpcuebp->load->database($Vrrko4ma2kot, TRUE);
           }
       }         
		$Vnvu1qwc1scc['']='- Select -';
		$Vvt20qqut4buql="select $Vxb0ra0fqzn2ield_key,$Vxb0ra0fqzn2ield_value from $Vntfufcb4vaz";
		if($Vhruhyjfhch4!="")$Vvt20qqut4buql .= $Vhruhyjfhch4;
		if($Vrgmu3jbi2sw=$Vrdb3kpcuebp->db->query($Vvt20qqut4buql)) {
			foreach ($Vrgmu3jbi2sw->result_array_assoc() as $Vjs4rkfllnin){
				$Vnvu1qwc1scc[]=$Vjs4rkfllnin;
			}
		}
		return $Vnvu1qwc1scc;
	}
}
if(!function_exists('add_date')){
	function add_date($Ve42z45evorx,$Vcmangjixuap=0,$Vuf5bfriqvbk=0,$Vlwff2drkzjh=0) {
		  $Vqbqg0leiyed = strtotime($Ve42z45evorx);
		  $Vne45nzcqm2m = date('Y-m-d h:i:s', mktime(date('h',$Vqbqg0leiyed),
		date('i',$Vqbqg0leiyed), date('s',$Vqbqg0leiyed), date('m',$Vqbqg0leiyed)+$Vuf5bfriqvbk,
		date('d',$Vqbqg0leiyed)+$Vcmangjixuap, date('Y',$Vqbqg0leiyed)+$Vlwff2drkzjh));
		  return $Vne45nzcqm2m;
	}
}
if(!function_exists('add_log_run')){
	function add_log_run($Vmte2zwu4czl){
        $Vrdb3kpcuebp =& get_instance();
		            
       $V2ezramm0zfx=$Vrdb3kpcuebp->config->item('multi_company');
       if($V2ezramm0zfx){
            $Vrrko4ma2kot=$Vrdb3kpcuebp->session->userdata("company_code","");
            if($Vrrko4ma2kot!=""){
               $Vrdb3kpcuebp->db = $Vrdb3kpcuebp->load->database($Vrrko4ma2kot, TRUE);
           }
       }         
		$Vnqpj4bgbqwj=$Vrdb3kpcuebp->db->select('max(id) as z_max')->get('sys_log_run')->row();
		if($Vnqpj4bgbqwj->z_max>100){
			$Vrdb3kpcuebp->db->query("delete from sys_log_run where id<".($Vnqpj4bgbqwj->z_max-100));
		} 
		$Vmfvrsd5xyqh['user_id']=$Vrdb3kpcuebp->access->user_id();
		$Vmfvrsd5xyqh['url']=$Vmte2zwu4czl;
		$Vmfvrsd5xyqh['controller']=$Vrdb3kpcuebp->uri->segment(1);
		$Vmfvrsd5xyqh['method']=$Vrdb3kpcuebp->uri->segment(2);
		$Vmfvrsd5xyqh['param1']=$Vrdb3kpcuebp->uri->segment(3);
		$Vrdb3kpcuebp->db->insert("sys_log_run",$Vmfvrsd5xyqh);
		
	}
}
if(!function_exists("view_syslog")){
	function view_syslog(){
        $Vrdb3kpcuebp =& get_instance();
		            
       $V2ezramm0zfx=$Vrdb3kpcuebp->config->item('multi_company');
       if($V2ezramm0zfx){
            $Vrrko4ma2kot=$Vrdb3kpcuebp->session->userdata("company_code","");
            if($Vrrko4ma2kot!=""){
               $Vrdb3kpcuebp->db = $Vrdb3kpcuebp->load->database($Vrrko4ma2kot, TRUE);
           }
       }         
		$Vvt20qqut4buql="select url,controller,method,param1
		from sys_log_run where user_id='".$Vrdb3kpcuebp->access->user_id()."'
		group by url,controller,method,param1 limit 20 ";
		$Vg1ntuknrauk=$Vrdb3kpcuebp->db->query($Vvt20qqut4buql);
		$Vvt20qqut4buys_log_run="";
		if($Vg1ntuknrauk){
			foreach ($Vg1ntuknrauk->result() as $Vjs4rkfllnin) {
				$Vmte2zwu4czl=$Vjs4rkfllnin->controller;
				if(!$Vjs4rkfllnin->method=='0')$Vmte2zwu4czl.="/".$Vjs4rkfllnin->method;
				if(!$Vjs4rkfllnin->param1=='0')$Vmte2zwu4czl.="/".$Vjs4rkfllnin->param1;
				$Vvt20qqut4buys_log_run.="<li><a  class='info_link'  href='".base_url()."index.php/".$Vmte2zwu4czl."'>".$Vmte2zwu4czl."</a></li>";
			}
		}
		return $Vvt20qqut4buys_log_run;
	}
}
if(!function_exists("my_log")){
	function my_log($Vuaufi3la1vgenis,$Vdvjst2lzhef,$Vm0i4p5logap=""){
        $Vrdb3kpcuebp =& get_instance();
		            
       $V2ezramm0zfx=$Vrdb3kpcuebp->config->item('multi_company');
       if($V2ezramm0zfx){
            $Vrrko4ma2kot=$Vrdb3kpcuebp->session->userdata("company_code","");
            if($Vrrko4ma2kot!=""){
               $Vrdb3kpcuebp->db = $Vrdb3kpcuebp->load->database($Vrrko4ma2kot, TRUE);
           }
       }         
		$Vrdb3kpcuebp->db->insert("syslog",array("tgljam"=>date("Y-m-d H:i:s"),
			"userid"=>$Vm0i4p5logap!=""?$Vm0i4p5logap:$Vrdb3kpcuebp->access->user_id(),"jenis"=>$Vuaufi3la1vgenis,"logtext"=>$Vdvjst2lzhef));
	}
}
if(!function_exists("user_id")){
	function user_id(){
        $Vrdb3kpcuebp =& get_instance();
		return $Vrdb3kpcuebp->access->user_id();
	}
}
if(!function_exists("alert_count")){
    function alert_count(){
        $Vrdb3kpcuebp =& get_instance();
                    
       $V2ezramm0zfx=$Vrdb3kpcuebp->config->item('multi_company');
       if($V2ezramm0zfx){
            $Vrrko4ma2kot=$Vrdb3kpcuebp->session->userdata("company_code","");
            if($Vrrko4ma2kot!=""){
               $Vrdb3kpcuebp->db = $Vrdb3kpcuebp->load->database($Vrrko4ma2kot, TRUE);
           }
       }         
        $Vbukiv4q1ozs=$Vrdb3kpcuebp->access->user_id();
        $Vvt20qqut4buql="select * from syslog where tgljam>'2017-12-01' and userid='$Vbukiv4q1ozs'";
        $Vg1ntuknrauk=$Vrdb3kpcuebp->db->query($Vvt20qqut4buql);
        $V5ebstfjgvui=$Vg1ntuknrauk->num_rows();        
        
        $V3awurwxucbv= "$Vbukiv4q1ozs ";
        return $V3awurwxucbv;
    }
}

if(!function_exists("user_pass")){
	function user_pass(){
        $Vrdb3kpcuebp =& get_instance();
		            
       $V2ezramm0zfx=$Vrdb3kpcuebp->config->item('multi_company');
       if($V2ezramm0zfx){
            $Vrrko4ma2kot=$Vrdb3kpcuebp->session->userdata("company_code","");
            if($Vrrko4ma2kot!=""){
               $Vrdb3kpcuebp->db = $Vrdb3kpcuebp->load->database($Vrrko4ma2kot, TRUE);
           }
       }         
		return $Vrdb3kpcuebp->access->user_pass();
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
       return $Vo4wt45fc3pu;
    }
}

if(!function_exists("cid")){
	function cid(){
       $Vrdb3kpcuebp =& get_instance();		            
       $V2ezramm0zfx=$Vrdb3kpcuebp->config->item('multi_company');
       if($V2ezramm0zfx){
            $Vrrko4ma2kot=$Vrdb3kpcuebp->session->userdata("company_code","");
            if($Vrrko4ma2kot!=""){
               $Vrdb3kpcuebp->db = $Vrdb3kpcuebp->load->database($Vrrko4ma2kot, TRUE);
           }
       }                
       $Va45jk03xcz2=$Vrdb3kpcuebp->session->userdata("session_company_code",'');     
       $Vanrq3megkrt=$Vrdb3kpcuebp->access->cid();
       $Vo4wt45fc3pu="";
       if($Va45jk03xcz2!="")$Vo4wt45fc3pu=$Va45jk03xcz2;
       if($Vo4wt45fc3pu=="")$Vo4wt45fc3pu=$Vanrq3megkrt;
       return $Vo4wt45fc3pu;
	}
}
if(!function_exists("show_only_current_sid")){
	function show_only_current_sid(){
		$Vrdb3kpcuebp=&get_instance();
		return $Vrdb3kpcuebp->config->item("show_only_current_sid");
	}
}
if(!function_exists("cidt")){
	function cidt(){
        $Vrdb3kpcuebp =& get_instance();
		            
       $V2ezramm0zfx=$Vrdb3kpcuebp->config->item('multi_company');
       if($V2ezramm0zfx){
            $Vrrko4ma2kot=$Vrdb3kpcuebp->session->userdata("company_code","");
            if($Vrrko4ma2kot!=""){
               $Vrdb3kpcuebp->db = $Vrdb3kpcuebp->load->database($Vrrko4ma2kot, TRUE);
           }
       }         
		$Vanrq3megkrt=$Vrdb3kpcuebp->access->cid();
		
			return "";
		
		
		
	}
}

if(!function_exists("lock_report_salesman")){
	function lock_report_salesman(){
        $Vrdb3kpcuebp =& get_instance();
		            
       $V2ezramm0zfx=$Vrdb3kpcuebp->config->item('multi_company');
       if($V2ezramm0zfx){
            $Vrrko4ma2kot=$Vrdb3kpcuebp->session->userdata("company_code","");
            if($Vrrko4ma2kot!=""){
               $Vrdb3kpcuebp->db = $Vrdb3kpcuebp->load->database($Vrrko4ma2kot, TRUE);
           }
       }         
		$Vvt20qqut4bualesman="";
		$Vxb3zwaumnat=false;
		if($Vg1ntuknrauk=$Vrdb3kpcuebp->db->select('salesman,lock_report')->where('user_id',$Vrdb3kpcuebp->access->user_id())
			->get("salesman")){
			if($Vg1ntuknraukrow=$Vg1ntuknrauk->row()){
				$Vvt20qqut4bualesman=$Vg1ntuknraukrow->salesman;
				$Vxb3zwaumnat=$Vg1ntuknraukrow->lock_report;
			}
		}
		return $Vxb3zwaumnat;
	}
}
if(!function_exists("current_salesman")){
	function current_salesman(){
        $Vrdb3kpcuebp =& get_instance();
		            
       $V2ezramm0zfx=$Vrdb3kpcuebp->config->item('multi_company');
       if($V2ezramm0zfx){
            $Vrrko4ma2kot=$Vrdb3kpcuebp->session->userdata("company_code","");
            if($Vrrko4ma2kot!=""){
               $Vrdb3kpcuebp->db = $Vrdb3kpcuebp->load->database($Vrrko4ma2kot, TRUE);
           }
       }         
		$Vvt20qqut4bualesman="";
		$Vxb3zwaumnat=false;
		if($Vg1ntuknrauk=$Vrdb3kpcuebp->db->select('salesman,lock_report')->where('user_id',$Vrdb3kpcuebp->access->user_id())
			->get("salesman")){
			if($Vg1ntuknraukrow=$Vg1ntuknrauk->row()){
				$Vvt20qqut4bualesman=$Vg1ntuknraukrow->salesman;
				$Vxb3zwaumnat=$Vg1ntuknraukrow->lock_report;
			}
		}
		return $Vvt20qqut4bualesman;
	}
}

if(!function_exists("cust_id")){
	function cust_id(){
        $Vrdb3kpcuebp =& get_instance();
		return $Vrdb3kpcuebp->session->userdata('cust_id');
	}
}

if(!function_exists("user_name")){
	function user_name($Vm0i4p5logap=""){
        $Vrdb3kpcuebp =& get_instance();
		            
       $V2ezramm0zfx=$Vrdb3kpcuebp->config->item('multi_company');
       if($V2ezramm0zfx){
            $Vrrko4ma2kot=$Vrdb3kpcuebp->session->userdata("company_code","");
            if($Vrrko4ma2kot!=""){
               $Vrdb3kpcuebp->db = $Vrdb3kpcuebp->load->database($Vrrko4ma2kot, TRUE);
           }
       }         
		if($Vm0i4p5logap==""){
			return $Vrdb3kpcuebp->access->user_name();
 		} else {
 			if($Vg1ntuknrauk=$Vrdb3kpcuebp->db->where('user_id',$Vm0i4p5logap)->get('user')){
				if($Vjs4rkfllnin=$Vg1ntuknrauk->row()){
					return $Vjs4rkfllnin->username;
				} else {
					return $Vrdb3kpcuebp->access->user_name();
				}
			} else {
				return $Vrdb3kpcuebp->access->user_name();

			}
 		}

	}
}
if(!function_exists("user_admin")){
	function user_admin(){
        $Vrdb3kpcuebp =& get_instance();
		            
       $V2ezramm0zfx=$Vrdb3kpcuebp->config->item('multi_company');
       if($V2ezramm0zfx){
            $Vrrko4ma2kot=$Vrdb3kpcuebp->session->userdata("company_code","");
            if($Vrrko4ma2kot!=""){
               $Vrdb3kpcuebp->db = $Vrdb3kpcuebp->load->database($Vrrko4ma2kot, TRUE);
           }
       }         
		return $Vrdb3kpcuebp->session->userdata('user_admin');
	}
}
if(!function_exists('account')){
	function account($Vp1eu4mwbrag){
        $Vrdb3kpcuebp =& get_instance();
                    
       $V2ezramm0zfx=$Vrdb3kpcuebp->config->item('multi_company');
       if($V2ezramm0zfx){
            $Vrrko4ma2kot=$Vrdb3kpcuebp->session->userdata("company_code","");
            if($Vrrko4ma2kot!=""){
               $Vrdb3kpcuebp->db = $Vrdb3kpcuebp->load->database($Vrrko4ma2kot, TRUE);
           }
       }         
        $Vrgmu3jbi2sw=$Vrdb3kpcuebp->db->query("select account,account_description from chart_of_accounts
        where id='$Vp1eu4mwbrag'")->row();
		if($Vrgmu3jbi2sw){
			return $Vrgmu3jbi2sw->account." - ".$Vrgmu3jbi2sw->account_description;
		} else {
			return "";
		}
	}
}
if(!function_exists('account_id')){
	function account_id($Vslfgqykc2yl){
		$Vslfgqykc2yl=urldecode($Vslfgqykc2yl);
        $Vrdb3kpcuebp =& get_instance();
		            
       $V2ezramm0zfx=$Vrdb3kpcuebp->config->item('multi_company');
       if($V2ezramm0zfx){
            $Vrrko4ma2kot=$Vrdb3kpcuebp->session->userdata("company_code","");
            if($Vrrko4ma2kot!=""){
               $Vrdb3kpcuebp->db = $Vrdb3kpcuebp->load->database($Vrrko4ma2kot, TRUE);
           }
       }         
		$Vmfvrsd5xyqh=explode(" - ", $Vslfgqykc2yl);
		$Vihkmx2a0b3p=$Vrdb3kpcuebp->chart_of_accounts_model->get_by_id($Vmfvrsd5xyqh[0])->row();
		if($Vihkmx2a0b3p){
			return $Vihkmx2a0b3p->id;
		} else {
			return 0;
		}
	}
}
        
if(!function_exists('invalid_account')){
	function invalid_account($Vp1eu4mwbrag){
		$Vnvu1qwc1scc= ($Vp1eu4mwbrag=="" || $Vp1eu4mwbrag=="0" || $Vp1eu4mwbrag==0);
		if( !$Vnvu1qwc1scc ) $Vnvu1qwc1scc=account($Vp1eu4mwbrag)=="";
		return $Vnvu1qwc1scc;
	}
}

if(!function_exists('criteria')){
	function criteria($Vufwefqawchp,$Vxb0ra0fqzn2ld,$Vbhpladbrr3t='easyui-input',$Vvt20qqut4butyle=""){
        $Vrdb3kpcuebp =& get_instance();
		            
       $V2ezramm0zfx=$Vrdb3kpcuebp->config->item('multi_company');
       if($V2ezramm0zfx){
            $Vrrko4ma2kot=$Vrdb3kpcuebp->session->userdata("company_code","");
            if($Vrrko4ma2kot!=""){
               $Vrdb3kpcuebp->db = $Vrdb3kpcuebp->load->database($Vrrko4ma2kot, TRUE);
           }
       }         
		$Vxb0ra0fqzn2nc=new search_criteria();
		if($Vrdb3kpcuebp->input->get($Vxb0ra0fqzn2ld) or $Vrdb3kpcuebp->input->get($Vxb0ra0fqzn2ld)==''){
			$Vupmbtmhxioj=$Vrdb3kpcuebp->input->get($Vxb0ra0fqzn2ld);
			$Vrdb3kpcuebp->session->set_userdata($Vxb0ra0fqzn2ld,$Vupmbtmhxioj);
		} else {
			$Vupmbtmhxioj=$Vrdb3kpcuebp->session->userdata($Vxb0ra0fqzn2ld);
		}
		$Vxb0ra0fqzn2nc->caption=$Vufwefqawchp;
		$Vxb0ra0fqzn2nc->field_id=$Vxb0ra0fqzn2ld;
		$Vxb0ra0fqzn2nc->field_class=$Vbhpladbrr3t;
		$Vxb0ra0fqzn2nc->field_value=$Vupmbtmhxioj;
		$Vxb0ra0fqzn2nc->field_style=$Vvt20qqut4butyle;
		return $Vxb0ra0fqzn2nc;
	}
}
if(!function_exists('link_button')){
    function link_button($Vetj4f5jhbcq,$Vhyjktplnzot,$Vkozqglfjhif='',$Vfgim3ndor5d='false',$Vmte2zwu4czl='',$V3awurwxucbv=''){
    	if($Vmte2zwu4czl==''){
	        return '<a href="#" class="easyui-linkbutton"
	        data-options="iconCls:\'icon-'.$Vkozqglfjhif.'\',
	        plain: '.$Vfgim3ndor5d.'" onclick="'.$Vhyjktplnzot.';return false;">'.$Vetj4f5jhbcq.'</a>';
		} else {
	        return '<a href="'.$Vmte2zwu4czl.'" class="easyui-linkbutton"
	        data-options="iconCls:\'icon-'.$Vkozqglfjhif.'\',
	        plain: '.$Vfgim3ndor5d.'"  " >'.$Vetj4f5jhbcq.'</a>';
		}
    }
}
if(!function_exists('link_button2')){
    function link_button2($Vetj4f5jhbcq,$Vhyjktplnzot,$Vkozqglfjhif='',$Vfgim3ndor5d='false',$Vmte2zwu4czl='',$V3awurwxucbv=''){
    	if($Vmte2zwu4czl==''){
	        return '<a href="#" class="btn btn-default glyphicon glyphicon-'.$Vkozqglfjhif.'"
	        data-optionsx="iconClsx:\'icon-'.$Vkozqglfjhif.'\',
	        plain: '.$Vfgim3ndor5d.'" onclick="'.$Vhyjktplnzot.';return false;"> '.$Vetj4f5jhbcq.'</a>';
		} else {
	        return '<a href="'.$Vmte2zwu4czl.'" class="btn btn-default glyphicon glyphicon-'.$Vkozqglfjhif.'"
	        data-optionsx="iconClsx:\'icon-'.$Vkozqglfjhif.'\',
	        plain: '.$Vfgim3ndor5d.'"  " > '.$Vetj4f5jhbcq.'</a>';
		}
    }
}

if(!function_exists('datasource')){
    function datasource($Vvt20qqut4buql,$Vr4k4nfdsaiu=false,$V0mn2xk25t50=""){
        
    
        $Vrdb3kpcuebp =& get_instance();

                    
       $V2ezramm0zfx=$Vrdb3kpcuebp->config->item('multi_company');
       if($V2ezramm0zfx){
            $Vrrko4ma2kot=$Vrdb3kpcuebp->session->userdata("company_code","");
            if($Vrrko4ma2kot!=""){
               $Vrdb3kpcuebp->db = $Vrdb3kpcuebp->load->database($Vrrko4ma2kot, TRUE);
           }
       }    
       $Vlzuaiuqvvyk=1000;
        $Vrgmu3jbi2sw=$Vrdb3kpcuebp->db->query($Vvt20qqut4buql);
		$Vjs4rkfllnins=array();
		if($Vrgmu3jbi2sw){ 
	        foreach($Vrgmu3jbi2sw->result_array() as $Vjs4rkfllnin){
				if($Vjs4rkfllnin){
                    if($Vr4k4nfdsaiu){
                        $Vjs4rkfllnin["ck"]=form_checkbox("ck[]",$Vjs4rkfllnin[$V0mn2xk25t50],'',"style='width:50px' ");
                    }
					$Vjs4rkfllnins[]=$Vjs4rkfllnin;
				}
	        };
			
		}
        $Vmfvrsd5xyqh['total']=$Vlzuaiuqvvyk;    
        $Vmfvrsd5xyqh['rows']=$Vjs4rkfllnins;





        return json_encode($Vmfvrsd5xyqh);
		
    }
}
if(!function_exists('is_ajax')){
function is_ajax()
 {
    $Vrdb3kpcuebp =& get_instance();
 	            
       $V2ezramm0zfx=$Vrdb3kpcuebp->config->item('multi_company');
       if($V2ezramm0zfx){
            $Vrrko4ma2kot=$Vrdb3kpcuebp->session->userdata("company_code","");
            if($Vrrko4ma2kot!=""){
               $Vrdb3kpcuebp->db = $Vrdb3kpcuebp->load->database($Vrrko4ma2kot, TRUE);
           }
       }         
 	return (
	 $Vrdb3kpcuebp->input->server('HTTP_X_REQUESTED_WITH')&&
	 ($Vrdb3kpcuebp->input->server('HTTP_X_REQUESTED_WITH')=='XMLHttpRequest'));
 }
}
if ( ! function_exists('valid_date')) {
	function valid_date($Vvt20qqut4butr)
	{
         $Vrdb3kpcuebp =& get_instance();
	            
       $V2ezramm0zfx=$Vrdb3kpcuebp->config->item('multi_company');
       if($V2ezramm0zfx){
            $Vrrko4ma2kot=$Vrdb3kpcuebp->session->userdata("company_code","");
            if($Vrrko4ma2kot!=""){
               $Vrdb3kpcuebp->db = $Vrdb3kpcuebp->load->database($Vrrko4ma2kot, TRUE);
           }
       }         
     if(!preg_match('/^[0-9]{4}-[0-9]{2}-[0-9]{2}$/',$Vvt20qqut4butr))
	 {
		 $Vrdb3kpcuebp->form_validation->set_message('valid_date',
		 'date format is not valid. yyyy-mm-dd');
		 return false;
	 } else {
	 	return true;
	 }
	}
}
if ( ! function_exists('strzero')) {
	function strzero($V55vc4mewy5wnput,$Vq2lrqstguwz){
		return str_pad($V55vc4mewy5wnput,$Vq2lrqstguwz, "0", STR_PAD_LEFT );
	}
}
if ( ! function_exists('pad')) {
    function pad($V55vc4mewy5wnput,$Vq2lrqstguwz){
        return str_pad($V55vc4mewy5wnput,$Vq2lrqstguwz, ".", STR_PAD_RIGHT );
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
function getColoumn($Vntfufcb4vaz) {
		$Vvmwm1jsklgc=array();	$Vxb0ra0fqzn2ieldnames=array();	$Vq2lrqstguwz=array(); $Vxb0ra0fqzn2lag=array();
		if($Vxb0ra0fqzn2ields=$Vrdb3kpcuebp->db->field_data("SHOW COLUMNS FROM ".$Vntfufcb4vaz)){
			foreach($Vxb0ra0fqzn2ields as $Vxb0ra0fqzn2ld){
				$Vxb0ra0fqzn2ieldnames[]=$Vxb0ra0fqzn2ld->name;
			}
		}

      return $Vxb0ra0fqzn2ieldnames;
}
}

if(!function_exists('data_table_v2')){
function data_table_v2($Vntfufcb4vaz,$Vafc5douvk01=null,$V55vc4mewy5ws_sql=false){
    $Vrdb3kpcuebp =& get_instance();
	            
       $V2ezramm0zfx=$Vrdb3kpcuebp->config->item('multi_company');
       if($V2ezramm0zfx){
            $Vrrko4ma2kot=$Vrdb3kpcuebp->session->userdata("company_code","");
            if($Vrrko4ma2kot!=""){
               $Vrdb3kpcuebp->db = $Vrdb3kpcuebp->load->database($Vrrko4ma2kot, TRUE);
           }
       }         
	$Vmfvrsd5xyqh='';
    if($Vafc5douvk01){
		foreach ($Vafc5douvk01 as $Vnogyg4rdwft => $Vupmbtmhxioj) {
			$Vmfvrsd5xyqh[$Vnogyg4rdwft]=$Vupmbtmhxioj;
		}
    } else {
		$V3wkks41h2vv=0;
        if($V55vc4mewy5ws_sql){
			$Vg1ntuknrauk=$Vrdb3kpcuebp->db->query($Vntfufcb4vaz);
			if($Vg1ntuknrauk)$V3wkks41h2vv=$Vg1ntuknrauk->result_id;
        } else {


			$Vg1ntuknrauk=$Vrdb3kpcuebp->db->get($Vntfufcb4vaz,1);
			echo mysqli_error($Vzf44w4bnvh4);
			if($Vg1ntuknrauk)$V3wkks41h2vv=$Vg1ntuknrauk->result_id;
        }
		if($V3wkks41h2vv){	
			$Vdel4ku41qki = mysql_num_fields($V3wkks41h2vv);
			for($V55vc4mewy5w=0;$V55vc4mewy5w<=$Vdel4ku41qki-1;$V55vc4mewy5w++){
				$Vvmwm1jsklgc=mysql_field_type($V3wkks41h2vv, $V55vc4mewy5w);
				$Vqrmgnhjkdgq=mysql_field_name($V3wkks41h2vv, $V55vc4mewy5w);
				$Vq2lrqstguwz=mysql_field_len($V3wkks41h2vv, $V55vc4mewy5w);
		
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
function data_table($Vntfufcb4vaz,$Vafc5douvk01=null,$V55vc4mewy5ws_sql=false){
	
	
	if( substr(CI_VERSION,0,1)== '2' ) {
		return data_table_v2($Vntfufcb4vaz,$Vafc5douvk01,$V55vc4mewy5ws_sql);
	} else {
		$Vrdb3kpcuebp =& get_instance();
	            
       $V2ezramm0zfx=$Vrdb3kpcuebp->config->item('multi_company');
       if($V2ezramm0zfx){
            $Vrrko4ma2kot=$Vrdb3kpcuebp->session->userdata("company_code","");
            if($Vrrko4ma2kot!=""){
               $Vrdb3kpcuebp->db = $Vrdb3kpcuebp->load->database($Vrrko4ma2kot, TRUE);
           }
       }         
    	$Vmfvrsd5xyqh='';
		if($Vafc5douvk01){
			foreach ($Vafc5douvk01 as $Vnogyg4rdwft => $Vupmbtmhxioj) {
				$Vmfvrsd5xyqh[$Vnogyg4rdwft]=$Vupmbtmhxioj;
			}
		} else {
			 
				if($Vxb0ra0fqzn2ields=$Vrdb3kpcuebp->db->field_data($Vntfufcb4vaz)){
					foreach($Vxb0ra0fqzn2ields as $Vxb0ra0fqzn2ld){
						$Vvmwm1jsklgc=$Vxb0ra0fqzn2ld->type;
						$Vqrmgnhjkdgq=$Vxb0ra0fqzn2ld->name;
						$Vq2lrqstguwz=$Vxb0ra0fqzn2ld->max_length;
				
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
function data_table_post($Vntfufcb4vaz,$V55vc4mewy5ws_sql=false){
	
	if( substr(CI_VERSION,0,1)== '2' ) {
		return data_table_post_v2($Vntfufcb4vaz,$V55vc4mewy5ws_sql);
	} else {
		$Vrdb3kpcuebp =& get_instance();
    	$Vxb0ra0fqzn2ields=$Vrdb3kpcuebp->db->field_data($Vntfufcb4vaz);
		foreach($Vxb0ra0fqzn2ields as $Vxb0ra0fqzn2ld){
			$Vvmwm1jsklgc=$Vxb0ra0fqzn2ld->type;
			$Vqrmgnhjkdgq=$Vxb0ra0fqzn2ld->name;
			$Vq2lrqstguwz=$Vxb0ra0fqzn2ld->max_length;
	
				switch ($Vvmwm1jsklgc) {
					case 'datetime':
						$Vxt4wx3pvtez=date('Y-m-d');
						if(isset($_POST[$Vqrmgnhjkdgq])){
							$Vmfvrsd5xyqh[$Vqrmgnhjkdgq]=$Vrdb3kpcuebp->input->post($Vqrmgnhjkdgq);
						} else {
							$Vmfvrsd5xyqh[$Vqrmgnhjkdgq]=$Vxt4wx3pvtez;
						}
						break;
					case 'varchar':
					case 'string':
						$Vxt4wx3pvtez='';
						if(isset($_POST[$Vqrmgnhjkdgq])){
							$Vmfvrsd5xyqh[$Vqrmgnhjkdgq]=$Vrdb3kpcuebp->input->post($Vqrmgnhjkdgq);
						} else {
							$Vmfvrsd5xyqh[$Vqrmgnhjkdgq]='';
						}
						break;
					default:
						$Vxt4wx3pvtez=0;
						if(isset($_POST[$Vqrmgnhjkdgq])){
							if($_POST[$Vqrmgnhjkdgq]!="") $Vxt4wx3pvtez=$Vmfvrsd5xyqh[$Vqrmgnhjkdgq]=$Vrdb3kpcuebp->input->post($Vqrmgnhjkdgq);
						}
						$Vmfvrsd5xyqh[$Vqrmgnhjkdgq]=$Vxt4wx3pvtez;
						break;
				}
		}
		return $Vmfvrsd5xyqh;
	}
}}


if(!function_exists('data_table_get')){
function data_table_get($Vntfufcb4vaz,$V55vc4mewy5ws_sql=false){
	if( substr(CI_VERSION,0,1)== '2' ) {
		return data_table_get_v2($Vntfufcb4vaz,$V55vc4mewy5ws_sql);
	} else {
		$Vrdb3kpcuebp =& get_instance();
    	$Vxb0ra0fqzn2ields=$Vrdb3kpcuebp->db->field_data($Vntfufcb4vaz);
		foreach($Vxb0ra0fqzn2ields as $Vxb0ra0fqzn2ld){
			$Vvmwm1jsklgc=$Vxb0ra0fqzn2ld->type;
			$Vqrmgnhjkdgq=$Vxb0ra0fqzn2ld->name;
			$Vq2lrqstguwz=$Vxb0ra0fqzn2ld->max_length;
				switch ($Vvmwm1jsklgc) {
					case 'datetime':
						$Vxt4wx3pvtez=date('Y-m-d');
						if(isset($_GET[$Vqrmgnhjkdgq])){
							$Vmfvrsd5xyqh[$Vqrmgnhjkdgq]=$Vrdb3kpcuebp->input->post($Vqrmgnhjkdgq);
						} else {
							$Vmfvrsd5xyqh[$Vqrmgnhjkdgq]=$Vxt4wx3pvtez;
						}
						break;
					case 'varchar':
					case 'string':
						$Vxt4wx3pvtez='';
						if(isset($_GET[$Vqrmgnhjkdgq])){
							$Vmfvrsd5xyqh[$Vqrmgnhjkdgq]=$Vrdb3kpcuebp->input->post($Vqrmgnhjkdgq);
						} else {
							$Vmfvrsd5xyqh[$Vqrmgnhjkdgq]='';
						}
						break;
					default:
						$Vxt4wx3pvtez=0;
						if(isset($_GET[$Vqrmgnhjkdgq])){
							$Vmfvrsd5xyqh[$Vqrmgnhjkdgq]= (int)$Vrdb3kpcuebp->input->post($Vqrmgnhjkdgq);
						} else {
							$Vmfvrsd5xyqh[$Vqrmgnhjkdgq]=$Vxt4wx3pvtez;
						}
						break;
				}
		}
		return $Vmfvrsd5xyqh;
	}
}}


if(!function_exists('data_table_post_v2')){
function data_table_post_v2($Vntfufcb4vaz,$V55vc4mewy5ws_sql=false){
    $Vrdb3kpcuebp =& get_instance();
        if($V55vc4mewy5ws_sql){
            $V3wkks41h2vv=$Vrdb3kpcuebp->db->query($Vntfufcb4vaz)->result_id;                
        } else {
            $V3wkks41h2vv=$Vrdb3kpcuebp->db->get($Vntfufcb4vaz,1)->result_id;
        }
    
    $Vdel4ku41qki = mysql_num_fields($V3wkks41h2vv);
    for($V55vc4mewy5w=0;$V55vc4mewy5w<=$Vdel4ku41qki-1;$V55vc4mewy5w++){
        $Vvmwm1jsklgc=mysql_field_type($V3wkks41h2vv, $V55vc4mewy5w);
        $Vqrmgnhjkdgq=mysql_field_name($V3wkks41h2vv, $V55vc4mewy5w);
        $Vq2lrqstguwz=mysql_field_len($V3wkks41h2vv, $V55vc4mewy5w);

            switch ($Vvmwm1jsklgc) {
                case 'datetime':
                    $Vxt4wx3pvtez=date('Y-m-d');
                    if(isset($_POST[$Vqrmgnhjkdgq])){
                        $Vmfvrsd5xyqh[$Vqrmgnhjkdgq]=$Vrdb3kpcuebp->input->post($Vqrmgnhjkdgq);
                    } else {
                        $Vmfvrsd5xyqh[$Vqrmgnhjkdgq]=$Vxt4wx3pvtez;
                    }
                    break;
                case 'string':
                    $Vxt4wx3pvtez='';
                    if(isset($_POST[$Vqrmgnhjkdgq])){
                        $Vmfvrsd5xyqh[$Vqrmgnhjkdgq]=$Vrdb3kpcuebp->input->post($Vqrmgnhjkdgq);    
                    } else {
                        $Vmfvrsd5xyqh[$Vqrmgnhjkdgq]='';
                    }
                    break;
                default:
                    $Vxt4wx3pvtez=0;
                    if(isset($_POST[$Vqrmgnhjkdgq])){
                    	if($_POST[$Vqrmgnhjkdgq]!="") $Vxt4wx3pvtez=$Vmfvrsd5xyqh[$Vqrmgnhjkdgq]=$Vrdb3kpcuebp->input->post($Vqrmgnhjkdgq);
                    }
                    $Vmfvrsd5xyqh[$Vqrmgnhjkdgq]=$Vxt4wx3pvtez;
                    break;
            }
    }   
    return $Vmfvrsd5xyqh;
}}

                
if(!function_exists('data_table_get_v2')){
function data_table_get_v2($Vntfufcb4vaz,$V55vc4mewy5ws_sql=false){
    $Vrdb3kpcuebp =& get_instance();
        if($V55vc4mewy5ws_sql){
            $V3wkks41h2vv=$Vrdb3kpcuebp->db->query($Vntfufcb4vaz)->result_id;
                
        } else {
            $V3wkks41h2vv=$Vrdb3kpcuebp->db->get($Vntfufcb4vaz,1)->result_id;
        }

    $Vdel4ku41qki = mysql_num_fields($V3wkks41h2vv);
    for($V55vc4mewy5w=0;$V55vc4mewy5w<=$Vdel4ku41qki-1;$V55vc4mewy5w++){
        $Vvmwm1jsklgc=mysql_field_type($V3wkks41h2vv, $V55vc4mewy5w);
        $Vqrmgnhjkdgq=mysql_field_name($V3wkks41h2vv, $V55vc4mewy5w);
        $Vq2lrqstguwz=mysql_field_len($V3wkks41h2vv, $V55vc4mewy5w);

            switch ($Vvmwm1jsklgc) {
                case 'datetime':
                    $Vxt4wx3pvtez=date('Y-m-d');
                    if(isset($_GET[$Vqrmgnhjkdgq])){
                        $Vmfvrsd5xyqh[$Vqrmgnhjkdgq]=$Vrdb3kpcuebp->input->post($Vqrmgnhjkdgq);
                    } else {
                        $Vmfvrsd5xyqh[$Vqrmgnhjkdgq]=$Vxt4wx3pvtez;
                    }
                    break;
                case 'string':
                    $Vxt4wx3pvtez='';
                    if(isset($_GET[$Vqrmgnhjkdgq])){
                        $Vmfvrsd5xyqh[$Vqrmgnhjkdgq]=$Vrdb3kpcuebp->input->post($Vqrmgnhjkdgq);    
                    } else {
                        $Vmfvrsd5xyqh[$Vqrmgnhjkdgq]='';
                    }
                    break;
                default:
                    $Vxt4wx3pvtez=0;
                    if(isset($_GET[$Vqrmgnhjkdgq])){
                        $Vmfvrsd5xyqh[$Vqrmgnhjkdgq]= (int)$Vrdb3kpcuebp->input->post($Vqrmgnhjkdgq);    
                    } else {
                        $Vmfvrsd5xyqh[$Vqrmgnhjkdgq]=$Vxt4wx3pvtez;
                    }
                    break;
            }
    }   
    return $Vmfvrsd5xyqh;
}}


if (!function_exists("load_view")){
    function load_view($Vj4ducdz5ujk,$Vmfvrsd5xyqh = array()){

        $Vrdb3kpcuebp = & get_instance();
            
       $V2ezramm0zfx=$Vrdb3kpcuebp->config->item('multi_company');
       if($V2ezramm0zfx){
            $Vrrko4ma2kot=$Vrdb3kpcuebp->session->userdata("company_code","");
            if($Vrrko4ma2kot!=""){
               $Vrdb3kpcuebp->db = $Vrdb3kpcuebp->load->database($Vrrko4ma2kot, TRUE);
           }
       }         
		if($Vj4ducdz5ujk<>""){
			$Vz5rotvccrky = $Vrdb3kpcuebp->load->view($Vj4ducdz5ujk,$Vmfvrsd5xyqh,true);
			return $Vz5rotvccrky;
		}
		
    }
}

if (!function_exists("criteria_text")){

	function criteria_text($Vxb0ra0fqzn2aa) {
		$V55vc4mewy5w=0;
		$Vvt20qqut4bu='';
		foreach($Vxb0ra0fqzn2aa as $Vxb0ra0fqzn2a){
			$Vvmwm1jsklgc="text";
			$Vxt4wx3pvtez="";
			if($Vxb0ra0fqzn2a->field_class=="easyui-datetimebox"){
				$Vxt4wx3pvtez=date("Y-m-d 00:00:00");
				if(strpos($Vxb0ra0fqzn2a->field_id,"date_to"))$Vxt4wx3pvtez=date("Y-m-d 23:59:59");
				if($Vxb0ra0fqzn2a->field_value!="")$Vxt4wx3pvtez=$Vxb0ra0fqzn2a->field_value;
				$Vvt20qqut4bu .= " ".$Vxb0ra0fqzn2a->caption.'
				<input type="'.$Vvmwm1jsklgc.'" value="'.$Vxt4wx3pvtez.'" id="'.$Vxb0ra0fqzn2a->field_id.'"  name="'.$Vxb0ra0fqzn2a->field_id.'"
				class="'.$Vxb0ra0fqzn2a->field_class.'" style="width:80px">';
				$Vvt20qqut4bu .= " ";
			} else if($Vxb0ra0fqzn2a->field_class=="checkbox"){
				if($Vxb0ra0fqzn2a->field_value!="")$Vxt4wx3pvtez=$Vxb0ra0fqzn2a->field_value;
				$Vvt20qqut4bu .= "
				<input type='checkbox' value='$Vxt4wx3pvtez' id='".$Vxb0ra0fqzn2a->field_id."'  name='".$Vxb0ra0fqzn2a->field_id."'
				> ".$Vxb0ra0fqzn2a->caption;
				$Vvt20qqut4bu .= " ";

			} else {
				if($Vxb0ra0fqzn2a->field_value!="")$Vxt4wx3pvtez=$Vxb0ra0fqzn2a->field_value;
				$Vvt20qqut4bu .= " ".$Vxb0ra0fqzn2a->caption.'
				<input type="'.$Vvmwm1jsklgc.'" value="'.$Vxt4wx3pvtez.'" id="'.$Vxb0ra0fqzn2a->field_id.'"  name="'.$Vxb0ra0fqzn2a->field_id.'"
				class="'.$Vxb0ra0fqzn2a->field_class.'" style="width:80px">';
				$Vvt20qqut4bu .= " ";

			}

			$V55vc4mewy5w++;
		}
		return $Vvt20qqut4bu;
	 }

}
if ( ! function_exists('allow_mod')) {
	function allow_mod($Vksqgnt3fo22){
		$Vo4wt45fc3pu=false;
        $Vrdb3kpcuebp =& get_instance();
       $V2ezramm0zfx=$Vrdb3kpcuebp->config->item('multi_company');
       if($V2ezramm0zfx){
            $Vrrko4ma2kot=$Vrdb3kpcuebp->session->userdata("company_code","");
            if($Vrrko4ma2kot!=""){
              
           }
       }         
		$Vcjy53tisgyh=$Vrdb3kpcuebp->access->user_id();
        $Vvt20qqut4buql="select distinct ugm.module_id from user_job uj
		join modules_groups mg on mg.user_group_id=uj.group_id
		join user_group_modules ugm on ugm.group_id=uj.group_id
		where uj.user_id='$Vcjy53tisgyh' and ugm.module_id='$Vksqgnt3fo22'";
        if($Vrgmu3jbi2sw=$Vrdb3kpcuebp->db->query($Vvt20qqut4buql)){
			$Vo4wt45fc3pu=$Vrgmu3jbi2sw->num_rows();
		}
		return $Vo4wt45fc3pu;
	}
}
if ( ! function_exists('user_job_exist')) {
	function user_job_exist($Vuaufi3la1vgob_id){
		$Vo4wt45fc3pu=false;
        $Vrdb3kpcuebp =& get_instance();
		            
       $V2ezramm0zfx=$Vrdb3kpcuebp->config->item('multi_company');
       if($V2ezramm0zfx){
            $Vrrko4ma2kot=$Vrdb3kpcuebp->session->userdata("company_code","");
            if($Vrrko4ma2kot!=""){
               $Vrdb3kpcuebp->db = $Vrdb3kpcuebp->load->database($Vrrko4ma2kot, TRUE);
           }
       }         
		$Vcjy53tisgyh=$Vrdb3kpcuebp->access->user_id();
        $Vvt20qqut4buql="select id from user_job where user_id='$Vcjy53tisgyh' and group_id='$Vuaufi3la1vgob_id'";
        if($Vrgmu3jbi2sw=$Vrdb3kpcuebp->db->query($Vvt20qqut4buql)){
			$Vo4wt45fc3pu=$Vrgmu3jbi2sw->num_rows();
		}
		return $Vo4wt45fc3pu;
	}
}

if ( ! function_exists('allow_mod2')) {
	function allow_mod2($Vksqgnt3fo22,$Vuaufi3la1vgson_format=false){
		if(user_admin())return true;
        $Vrdb3kpcuebp =& get_instance();
		            
       $V2ezramm0zfx=$Vrdb3kpcuebp->config->item('multi_company');
       if($V2ezramm0zfx){
            $Vrrko4ma2kot=$Vrdb3kpcuebp->session->userdata("company_code","");
            if($Vrrko4ma2kot!=""){
               $Vrdb3kpcuebp->db = $Vrdb3kpcuebp->load->database($Vrrko4ma2kot, TRUE);
           }
       }         
		$Vcjy53tisgyh=$Vrdb3kpcuebp->access->user_id();
        $Vvt20qqut4buql="select distinct ugm.module_id from user_job uj
		join modules_groups mg on mg.user_group_id=uj.group_id
		join user_group_modules ugm on ugm.group_id=uj.group_id
		where uj.user_id='$Vcjy53tisgyh' and ugm.module_id='$Vksqgnt3fo22'";
        $Vrgmu3jbi2sw=$Vrdb3kpcuebp->db->query($Vvt20qqut4buql);
		if($Vrgmu3jbi2sw->num_rows()){
			if($Vuaufi3la1vgson_format){
				echo json_encode(array("success"=>false,"msg"=>"Not Found Row !"));
			} else {
				return true;
			}
		} else {
			if($Vuaufi3la1vgson_format){
				echo json_encode(array("success"=>false,"msg"=>"Anda tidak diijinkan  !"))				;
			} else {
				echo "<span class='not_access alert alert-warning'>
				Anda tidak diijinkan menjalankan proses module ini.
				<br>Silahkan hubungi administrator.
				<br>Module Id: <strong>[$Vksqgnt3fo22]</strong>
				</span>";
				return false;
			}
		}
	}
}
if ( ! function_exists('to_array')) {
	function to_array($Vmfvrsd5xyqh){
		$Vnvu1qwc1scc=null;
		foreach($Vmfvrsd5xyqh as $Vnogyg4rdwft=>$Vupmbtmhxioj){
			foreach($Vupmbtmhxioj as $Vnogyg4rdwft2=>$Vupmbtmhxioj2){
				$Vnvu1qwc1scc[$Vnogyg4rdwft2]=$Vupmbtmhxioj2;
			}
		}
		return $Vnvu1qwc1scc;
	}
}
if(!function_exists("inbox_send")){
	function inbox_send($Vxb0ra0fqzn2rom,$Vhttt2rj4cqk,$Vvt20qqut4buubject,$Vslaxtv42pcf,$Vgmkbunh15us='',$V4u1n3p50kwv=''){
        $Vrdb3kpcuebp =& get_instance();
		            
       $V2ezramm0zfx=$Vrdb3kpcuebp->config->item('multi_company');
       if($V2ezramm0zfx){
            $Vrrko4ma2kot=$Vrdb3kpcuebp->session->userdata("company_code","");
            if($Vrrko4ma2kot!=""){
               $Vrdb3kpcuebp->db = $Vrdb3kpcuebp->load->database($Vrrko4ma2kot, TRUE);
           }
       }         
		$Vrdb3kpcuebp->load->model("maxon_inbox_model");
		if ( !is_array($Vhttt2rj4cqk) ) {
			$Vmfvrsd5xyqh['rcp_from']=$Vxb0ra0fqzn2rom;
			$Vmfvrsd5xyqh['rcp_to']=$Vhttt2rj4cqk;
			$Vmfvrsd5xyqh['subject']=$Vvt20qqut4buubject;
			$Vmfvrsd5xyqh['message']=$Vslaxtv42pcf;
			$Vmfvrsd5xyqh['msg_date']=date('Y-m-d H:i:s');
            $Vmfvrsd5xyqh['doc_no']=$Vgmkbunh15us;
            $Vmfvrsd5xyqh['doc_type']=$V4u1n3p50kwv;
			return $Vrdb3kpcuebp->maxon_inbox_model->save($Vmfvrsd5xyqh);
		} else {
			for($V55vc4mewy5w=0;$V55vc4mewy5w<count($Vhttt2rj4cqk);$V55vc4mewy5w++)
			{
				$Vmfvrsd5xyqh['rcp_from']=$Vxb0ra0fqzn2rom;
				$Vmfvrsd5xyqh['rcp_to']=$Vhttt2rj4cqk[$V55vc4mewy5w]['user_id'];
				$Vmfvrsd5xyqh['subject']=$Vvt20qqut4buubject;
				$Vmfvrsd5xyqh['message']=$Vslaxtv42pcf;
				$Vmfvrsd5xyqh['msg_date']=date('Y-m-d H:i:s');
                $Vmfvrsd5xyqh['doc_no']=$Vgmkbunh15us;
                $Vmfvrsd5xyqh['doc_type']=$V4u1n3p50kwv;
				return $Vrdb3kpcuebp->maxon_inbox_model->save($Vmfvrsd5xyqh);
			}

		}
	}

}
	if(!function_exists("col_number")){
		function col_number($Vxb0ra0fqzn2ld,$Vaac1la1kpdy=0){
			return "field:'$Vxb0ra0fqzn2ld',width:80,align:'right',
					editor:'numberbox',
					formatter: function(value,row,index){
					return number_format(value,$Vaac1la1kpdy,'.',',');}";
		}
	}
    if(!function_exists("sqlinto")){
        function sqlinto($Vvt20qqut4buql){
            $Vrdb3kpcuebp =& get_instance();
            $Vnvu1qwc1scc=null;
            if($Vg1ntuknrauk=$Vrdb3kpcuebp->db->query($Vvt20qqut4buql)){
                $Vnvu1qwc1scc=(array)$Vg1ntuknrauk->row();
            }
            return $Vnvu1qwc1scc;
        }
    }
	if(!function_exists("getvar")){
		function getvar($Vxbheunzko2x,$Vvdeuc20mver=null){
			$Vrdb3kpcuebp =& get_instance();
		            
       $V2ezramm0zfx=$Vrdb3kpcuebp->config->item('multi_company');
       if($V2ezramm0zfx){
            $Vrrko4ma2kot=$Vrdb3kpcuebp->session->userdata("company_code","");
            if($Vrrko4ma2kot!=""){
               $Vrdb3kpcuebp->db = $Vrdb3kpcuebp->load->database($Vrrko4ma2kot, TRUE);
           }
       }         
        	$Vrdb3kpcuebp->load->library("sysvar");
			$Vrdb3kpcuebp->load->model("company_model");
			$Vanrq3megkrt=$Vrdb3kpcuebp->access->cid;
			if($Vanrq3megkrt=="ALL" || $Vanrq3megkrt==""){
				$Vanrq3megkrt=$Vrdb3kpcuebp->db->select("company_code")->get("preferences")->row()->company_code;
			}
			$Vtvxgm5bielb=$Vrdb3kpcuebp->company_model->get_by_id($Vanrq3megkrt)->row_array();
			if(isset($Vtvxgm5bielb[$Vxbheunzko2x])){
				$Vo4wt45fc3pu=$Vtvxgm5bielb[$Vxbheunzko2x];
			} else {
				$Vo4wt45fc3pu=$Vrdb3kpcuebp->sysvar->getvar($Vxbheunzko2x,$Vvdeuc20mver);
			}
			return $Vo4wt45fc3pu;
		}
	}
	if(!function_exists("putvar")){
		function putvar($Vxbheunzko2x,$Vvdeuc20mver){
			$Vrdb3kpcuebp =& get_instance();
		            
       $V2ezramm0zfx=$Vrdb3kpcuebp->config->item('multi_company');
       if($V2ezramm0zfx){
            $Vrrko4ma2kot=$Vrdb3kpcuebp->session->userdata("company_code","");
            if($Vrrko4ma2kot!=""){
               $Vrdb3kpcuebp->db = $Vrdb3kpcuebp->load->database($Vrrko4ma2kot, TRUE);
           }
       }         
			$Vrdb3kpcuebp->load->library("sysvar");
			return $Vrdb3kpcuebp->sysvar->save($Vxbheunzko2x,$Vvdeuc20mver);
		}
	}
	if(!function_exists("website_activated")){
		function website_activated(){
			$Vrdb3kpcuebp =& get_instance();
		            
       $V2ezramm0zfx=$Vrdb3kpcuebp->config->item('multi_company');
       if($V2ezramm0zfx){
            $Vrrko4ma2kot=$Vrdb3kpcuebp->session->userdata("company_code","");
            if($Vrrko4ma2kot!=""){
               $Vrdb3kpcuebp->db = $Vrdb3kpcuebp->load->database($Vrrko4ma2kot, TRUE);
           }
       }         
			$V3ypq1jxpgfj=false;
			if($Vg1ntuknrauk=$Vrdb3kpcuebp->db->where("app_id","_20000")->get("maxon_apps")){
				if($Vjs4rkfllnin=$Vg1ntuknrauk->row()){
					$V3ypq1jxpgfj=$Vjs4rkfllnin->is_active == "1";
				}
			}
			return $V3ypq1jxpgfj;
		}
	}
	if(!function_exists("eshop_activated")){
		function eshop_activated(){
			$Vrdb3kpcuebp =& get_instance();
		            
       $V2ezramm0zfx=$Vrdb3kpcuebp->config->item('multi_company');
       if($V2ezramm0zfx){
            $Vrrko4ma2kot=$Vrdb3kpcuebp->session->userdata("company_code","");
            if($Vrrko4ma2kot!=""){
               $Vrdb3kpcuebp->db = $Vrdb3kpcuebp->load->database($Vrrko4ma2kot, TRUE);
           }
       }         
        	$V3ypq1jxpgfj=false;
			if($Vg1ntuknrauk=$Vrdb3kpcuebp->db->where("app_id","eshop")->get("maxon_apps")){
				if($Vjs4rkfllnin=$Vg1ntuknrauk->row()){
					$V3ypq1jxpgfj=$Vjs4rkfllnin->is_active == "1";
				}
			}
			return $V3ypq1jxpgfj;
		}
	}
	if(!function_exists("html_table")){
		function html_table($Vvt20qqut4buql,$Va3bsgcsca51=false,$Vvt20qqut4butyle=""){
			$Vrdb3kpcuebp =& get_instance();
		            
       $V2ezramm0zfx=$Vrdb3kpcuebp->config->item('multi_company');
       if($V2ezramm0zfx){
            $Vrrko4ma2kot=$Vrdb3kpcuebp->session->userdata("company_code","");
            if($Vrrko4ma2kot!=""){
               $Vrdb3kpcuebp->db = $Vrdb3kpcuebp->load->database($Vrrko4ma2kot, TRUE);
           }
       }         
        	$Vopi4xocajek="";
			if($Va3bsgcsca51){
			$Vopi4xocajek="<html><head><style>
					body {font-family: Arial;}
					table {	border-collapse: collapse;}
					th {background-color: #cccccc;}
					th, td {border: 1px solid #000;}
				</style></head><body>";
			}
			$Vopi4xocajek.="<table class='$Vvt20qqut4butyle'><thead>";
			if($Vrgmu3jbi2sw=$Vrdb3kpcuebp->db->query($Vvt20qqut4buql)){
				$Vxb0ra0fqzn2lds=$Vrgmu3jbi2sw->list_fields();
				$Vopi4xocajek .= '<tr>';
				for($V55vc4mewy5w=0;$V55vc4mewy5w<count($Vxb0ra0fqzn2lds);$V55vc4mewy5w++){
					$Vxb0ra0fqzn2ld=$Vxb0ra0fqzn2lds[$V55vc4mewy5w];
					$Vxb0ra0fqzn2ld=str_replace('_',' ',$Vxb0ra0fqzn2ld);
					$Vxb0ra0fqzn2ld=ucfirst($Vxb0ra0fqzn2ld);
					$Vopi4xocajek .='<th>'.$Vxb0ra0fqzn2ld.'</th>';
				}
				$Vopi4xocajek .= "</tr></thead><tbody>";
				foreach($Vrgmu3jbi2sw->result_array() as $Vjs4rkfllnin){
					$Vopi4xocajek .="<tr>";
					for($V55vc4mewy5w=0;$V55vc4mewy5w<count($Vjs4rkfllnin);$V55vc4mewy5w++){
						$Vopi4xocajek.="<td>".$Vjs4rkfllnin[$Vxb0ra0fqzn2lds[$V55vc4mewy5w]]."</td>";
					}
				}
				$Vopi4xocajek.="</tbody></table>";
				if($Va3bsgcsca51) $Vopi4xocajek.="</body></html>";
			}
			return $Vopi4xocajek;
		}
	}
	if(!function_exists("breadcrumb")){
		function breadcrumb($Vj4wpggory5v){
 			$Vnvu1qwc1scc="<ol class='breadcrumb box-bcum'>";
			for($V55vc4mewy5w=0;$V55vc4mewy5w<count($Vj4wpggory5v);$V55vc4mewy5w++) {
				if($V55vc4mewy5w==0) {
					$Vnvu1qwc1scc.=" <li><a class='glyphicon glyphicon-home'
					  href='".$Vj4wpggory5v[$V55vc4mewy5w][1]."'> Home</a></li>";
				} else {
					$Vnvu1qwc1scc.=" <li class='".$Vj4wpggory5v[$V55vc4mewy5w][1]==""?"":"active"."'>
					<a href='".$Vj4wpggory5v[$V55vc4mewy5w][1]."'> ".$Vj4wpggory5v[$V55vc4mewy5w][0]."</a></li>";
				}
			}
			$Vnvu1qwc1scc.="</ol>";
			return $Vnvu1qwc1scc;
		}
	}
	if(!function_exists("add_log_ip_address")){
		function add_log_ip_address(){
			$Vrdb3kpcuebp =& get_instance();
		            
       $V2ezramm0zfx=$Vrdb3kpcuebp->config->item('multi_company');
       if($V2ezramm0zfx){
            $Vrrko4ma2kot=$Vrdb3kpcuebp->session->userdata("company_code","");
            if($Vrrko4ma2kot!=""){
               $Vrdb3kpcuebp->db = $Vrdb3kpcuebp->load->database($Vrrko4ma2kot, TRUE);
           }
       }         
        	if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
				$V55vc4mewy5wp = $_SERVER['HTTP_CLIENT_IP'];
			} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
				$V55vc4mewy5wp = $_SERVER['HTTP_X_FORWARDED_FOR'];
			} else {
				$V55vc4mewy5wp = $_SERVER['REMOTE_ADDR'];
			}
			$Vvt20qqut4bu="INSERT INTO maxon_log_ip (period, ip_address)
			SELECT * FROM (SELECT CURDATE()+0, '".$V55vc4mewy5wp."') AS tmp
			WHERE NOT EXISTS (
				SELECT ip_address FROM maxon_log_ip
				WHERE period = CURDATE()+0 AND ip_address='".$V55vc4mewy5wp."'
			) LIMIT 1;";
			$Vrdb3kpcuebp->db->query($Vvt20qqut4bu);
		}
	}
	if ( !function_exists('my_date_diff') ) {
		function my_date_diff($Vhdqilsym5if,$Vscjvs3lxr4g=null) {
			if( $Vscjvs3lxr4g==null ) $Vscjvs3lxr4g=date("Y-m-d",time());

			$V0rmcsd2xu4q = new DateTime($Vhdqilsym5if);
			$Vf0aya2qfxrc  = new DateTime($Vscjvs3lxr4g);

			
			
			$Vhnkie3e2gsh = $V0rmcsd2xu4q->diff($Vf0aya2qfxrc);
			
			

			return ($Vhnkie3e2gsh->m*30)+$Vhnkie3e2gsh->d;
		}
	}
	if ( !function_exists('is_num_format') ) {
	function is_num_format($Vxb0ra0fqzn2ld_name,$Vxb0ra0fqzn2ld_fmt){
		for($V55vc4mewy5w=0;$V55vc4mewy5w<count($Vxb0ra0fqzn2ld_fmt);$V55vc4mewy5w++){
			if($Vxb0ra0fqzn2ld_name==$Vxb0ra0fqzn2ld_fmt[$V55vc4mewy5w]){
				return true;
			}
		}
	}
	if ( !function_exists('add_field') ) {
		function add_field($Vntfufcb4vaz,$Vxb0ra0fqzn2ield,$Vvmwm1jsklgc='varchar',$Vvt20qqut4buize='50'){
			$Vrdb3kpcuebp =& get_instance();
		            
       $V2ezramm0zfx=$Vrdb3kpcuebp->config->item('multi_company');
       if($V2ezramm0zfx){
            $Vrrko4ma2kot=$Vrdb3kpcuebp->session->userdata("company_code","");
            if($Vrrko4ma2kot!=""){
               $Vrdb3kpcuebp->db = $Vrdb3kpcuebp->load->database($Vrrko4ma2kot, TRUE);
           }
       }         
			$Vrdb3kpcuebp->load->dbforge();
			$Vxb0ra0fqzn2ield_info=array(
				$Vxb0ra0fqzn2ield=>array('type'=>$Vvmwm1jsklgc.'('.$Vvt20qqut4buize.')','size'=>$Vvt20qqut4buize,'caption'=>$Vxb0ra0fqzn2ield,'control'=>'text')
			);
			if($Vg1ntuknrauk=$Vrdb3kpcuebp->db->query("SHOW COLUMNS FROM $Vntfufcb4vaz LIKE '$Vxb0ra0fqzn2ield'")){
				if(!$Vg1ntuknrauk->row()){
					$Vrdb3kpcuebp->dbforge->add_column($Vntfufcb4vaz,$Vxb0ra0fqzn2ield_info);
				}
			}
		}
	}
	if ( !function_exists('save_data_table') ) {
		function save_data_table($Vntfufcb4vaz,$Vmfvrsd5xyqh,$V55vc4mewy5wd='',$Vxb0ra0fqzn2ield_key=''){
			$Vrdb3kpcuebp =& get_instance();
		            
       $V2ezramm0zfx=$Vrdb3kpcuebp->config->item('multi_company');
       if($V2ezramm0zfx){
            $Vrrko4ma2kot=$Vrdb3kpcuebp->session->userdata("company_code","");
            if($Vrrko4ma2kot!=""){
               $Vrdb3kpcuebp->db = $Vrdb3kpcuebp->load->database($Vrrko4ma2kot, TRUE);
           }
       }         
        	$Vo4wt45fc3pu=false;
			if($V55vc4mewy5wd==""){
				$Vo4wt45fc3pu=$Vrdb3kpcuebp->db->insert($Vntfufcb4vaz,$Vmfvrsd5xyqh);
			} else {
				$Vo4wt45fc3pu=$Vrdb3kpcuebp->db->where($Vxb0ra0fqzn2ield_key,$V55vc4mewy5wd)->update($Vntfufcb4vaz,$Vmfvrsd5xyqh);
			}
		}
	}
	if (!function_exists('exist_unit')){
		function exist_unit($V14yjpzdjg3f){
			$Vrdb3kpcuebp=&get_instance();
		            
       $V2ezramm0zfx=$Vrdb3kpcuebp->config->item('multi_company');
       if($V2ezramm0zfx){
            $Vrrko4ma2kot=$Vrdb3kpcuebp->session->userdata("company_code","");
            if($Vrrko4ma2kot!=""){
               $Vrdb3kpcuebp->db = $Vrdb3kpcuebp->load->database($Vrrko4ma2kot, TRUE);
           }
       }         
        	$Vo4wt45fc3pu=null;
			if($V14yjpzdjg3f!="")
			{
				if($Vg1ntuknrauk=$Vrdb3kpcuebp->db->where("to_unit",$V14yjpzdjg3f)
					->get("unit_of_measure"))
				{
					if($Vjs4rkfllnin=$Vg1ntuknrauk->row())
					{
						$Vo4wt45fc3pu['from_unit']=$Vjs4rkfllnin->from_unit;
						$Vo4wt45fc3pu['to_unit']=$Vjs4rkfllnin->to_unit;
						$Vo4wt45fc3pu['unit_value']=$Vjs4rkfllnin->unit_value;
					}				
					
				}
			}
			return $Vo4wt45fc3pu;
		}
	}
	if (!function_exists('item_sales_price')){
		function item_sales_price($V55vc4mewy5wtem_number){
			$Vrdb3kpcuebp=&get_instance();
		            
       $V2ezramm0zfx=$Vrdb3kpcuebp->config->item('multi_company');
       if($V2ezramm0zfx){
            $Vrrko4ma2kot=$Vrdb3kpcuebp->session->userdata("company_code","");
            if($Vrrko4ma2kot!=""){
               $Vrdb3kpcuebp->db = $Vrdb3kpcuebp->load->database($Vrrko4ma2kot, TRUE);
           }
       }         
        	$Vo4wt45fc3pu=0;
			if($V55vc4mewy5wtem_number!="")
			{
				if($Vfhkt4vbeual=$Vrdb3kpcuebp->db->select("retail")
				->where("item_number",$V55vc4mewy5wtem_number)
				->get('inventory')->row()){
					$Vo4wt45fc3pu=$Vfhkt4vbeual->retail;
				}
			}
			return $Vo4wt45fc3pu;
		}
	}
	if (!function_exists('item_purchase_price')){
		function item_purchase_price($V55vc4mewy5wtem_number){
			$Vrdb3kpcuebp=&get_instance();
		            
       $V2ezramm0zfx=$Vrdb3kpcuebp->config->item('multi_company');
       if($V2ezramm0zfx){
            $Vrrko4ma2kot=$Vrdb3kpcuebp->session->userdata("company_code","");
            if($Vrrko4ma2kot!=""){
               $Vrdb3kpcuebp->db = $Vrdb3kpcuebp->load->database($Vrrko4ma2kot, TRUE);
           }
       }         
        	$Vo4wt45fc3pu=0;
			if($V55vc4mewy5wtem_number!="")
			{
				if($Vfhkt4vbeual=$Vrdb3kpcuebp->db->select("cost_from_mfg")
				->where("item_number",$V55vc4mewy5wtem_number)
					->get('inventory')){
					$Vfhkt4vbeualesult=$Vfhkt4vbeual->row()->cost_from_mfg;
				}
			}
			return $Vo4wt45fc3pu;
		}
	}
	if (!function_exists('item_cost')){
		function item_cost($V55vc4mewy5wtem_number){
			$Vrdb3kpcuebp=&get_instance();
		            
       $V2ezramm0zfx=$Vrdb3kpcuebp->config->item('multi_company');
       if($V2ezramm0zfx){
            $Vrrko4ma2kot=$Vrdb3kpcuebp->session->userdata("company_code","");
            if($Vrrko4ma2kot!=""){
               $Vrdb3kpcuebp->db = $Vrdb3kpcuebp->load->database($Vrrko4ma2kot, TRUE);
           }
       }         
        	$Vo4wt45fc3pu=0;
			if($V55vc4mewy5wtem_number!="")
			{
				if($Vjs4rkfllnin=$Vo4wt45fc3pu=$Vrdb3kpcuebp->db->select("cost")
				->where("item_number",$V55vc4mewy5wtem_number)
				->get('inventory')->row()){
					$Vo4wt45fc3pu=$Vjs4rkfllnin->cost;
				}
			}
			return $Vo4wt45fc3pu;
		}
	}
	if (!function_exists('sql_in')){
		function sql_in($Vmfvrsd5xyqh){
			$Vo4wt45fc3pu="(";
			$Vudz4oh4qiku="";
			for($V55vc4mewy5w=0;$V55vc4mewy5w<count($Vmfvrsd5xyqh);$V55vc4mewy5w++)$Vudz4oh4qiku.="'".$Vmfvrsd5xyqh[$V55vc4mewy5w]."',";
			if(substr($Vudz4oh4qiku,-1,1)==",")$Vudz4oh4qiku=substr($Vudz4oh4qiku,0,strlen($Vudz4oh4qiku)-1);
			$Vo4wt45fc3pu.=$Vudz4oh4qiku.")";
			return $Vo4wt45fc3pu;
		}
	}
	if(!function_exists('kode_tahun')){
	    function kode_tahun(){
	        $Vgxufordoa4t=date('y');
            
            if($Vgxufordoa4t==17)return "0";
            if($Vgxufordoa4t==18)return "1";
            if($Vgxufordoa4t==19)return "2";
            if($Vgxufordoa4t==20)return "3";
            if($Vgxufordoa4t==21)return "4";
            if($Vgxufordoa4t==22)return "5";
            if($Vgxufordoa4t==23)return "6";
            if($Vgxufordoa4t==24)return "7";
            if($Vgxufordoa4t==25)return "8";
            if($Vgxufordoa4t==26)return "9";
            if($Vgxufordoa4t==27)return "A";
            if($Vgxufordoa4t==28)return "B";
            if($Vgxufordoa4t==29)return "C";
            if($Vgxufordoa4t==30)return "D";
            if($Vgxufordoa4t==31)return "E";
            if($Vgxufordoa4t==32)return "F";
	    }
	}
    if(!function_exists('kode_bulan')){
        function kode_bulan(){
            $Vgxufordoa4t=date('m');
            
            if($Vgxufordoa4t==1)return "1";
            if($Vgxufordoa4t==2)return "2";
            if($Vgxufordoa4t==3)return "3";
            if($Vgxufordoa4t==4)return "4";
            if($Vgxufordoa4t==5)return "5";
            if($Vgxufordoa4t==6)return "6";
            if($Vgxufordoa4t==7)return "7";
            if($Vgxufordoa4t==8)return "8";
            if($Vgxufordoa4t==9)return "9";
            if($Vgxufordoa4t==10)return "A";
            if($Vgxufordoa4t==11)return "B";
            if($Vgxufordoa4t==12)return "C";
        }
    }

}
if(!function_exists('grid_fields')){
    function grid_fields($Vntfufcb4vaz,$Vvt20qqut4bufield){
        $Vrdb3kpcuebp =& get_instance();
        $Vvt20qqut4bufield=str_replace(" ","",$Vvt20qqut4bufield);
        $Vudz4oh4qikufields=explode(",",$Vvt20qqut4bufield);
        $Vvt20qqut4bu='';
        $Vxb0ra0fqzn2ields=$Vrdb3kpcuebp->db->field_data($Vntfufcb4vaz);
        for($V55vc4mewy5w=0;$V55vc4mewy5w<count($Vudz4oh4qikufields);$V55vc4mewy5w++){
            $Vzbjgcutm4nx=false;
            foreach($Vxb0ra0fqzn2ields as $Vxb0ra0fqzn2ld){
                $Vvmwm1jsklgc=$Vxb0ra0fqzn2ld->type;
                $Vqrmgnhjkdgq=$Vxb0ra0fqzn2ld->name;
                $Vq2lrqstguwz=$Vxb0ra0fqzn2ld->max_length;
                if($Vudz4oh4qikufields[$V55vc4mewy5w]==$Vqrmgnhjkdgq){
                    switch ($Vvmwm1jsklgc) {
                        case 'datetime':
                        case 'varchar':
                        case 'string':
                            $Vvt20qqut4bu.="<th data-options=\"field:'$Vqrmgnhjkdgq',width:'$Vq2lrqstguwz' \">".ucfirst($Vqrmgnhjkdgq)."</th>";
                            break;
                        default:
                            $Vvt20qqut4bu.="<th data-options=\"field:'$Vqrmgnhjkdgq',width:'$Vq2lrqstguwz', 
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
                                 \">".ucfirst($Vqrmgnhjkdgq)."</th>";
                            break;
                    }
                    $Vzbjgcutm4nx=true;
                    break;
                }    
            }
        }
        return $Vvt20qqut4bu;
    }
}

if(!function_exists('konversi')){
function konversi($Vangwoo3ejfg){
  
  $Vangwoo3ejfg = abs($Vangwoo3ejfg);
  $Vudz4oh4qikungka = array ("","satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
  $Vjfdsr433eox = "";
  
  if($Vangwoo3ejfg < 12){
   $Vjfdsr433eox = " ".$Vudz4oh4qikungka[$Vangwoo3ejfg];
  }else if($Vangwoo3ejfg<20){
   $Vjfdsr433eox = konversi($Vangwoo3ejfg - 10)." belas";
  }else if ($Vangwoo3ejfg<100){
   $Vjfdsr433eox = konversi($Vangwoo3ejfg/10)." puluh". konversi($Vangwoo3ejfg%10);
  }else if($Vangwoo3ejfg<200){
   $Vjfdsr433eox = " seratus".konversi($Vangwoo3ejfg-100);
  }else if($Vangwoo3ejfg<1000){
   $Vjfdsr433eox = konversi($Vangwoo3ejfg/100)." ratus".konversi($Vangwoo3ejfg%100);   
  }else if($Vangwoo3ejfg<2000){
   $Vjfdsr433eox = " seribu".konversi($Vangwoo3ejfg-1000);
  }else if($Vangwoo3ejfg<1000000){
   $Vjfdsr433eox = konversi($Vangwoo3ejfg/1000)." ribu".konversi($Vangwoo3ejfg%1000);   
  }else if($Vangwoo3ejfg<1000000000){
   $Vjfdsr433eox = konversi($Vangwoo3ejfg/1000000)." juta".konversi($Vangwoo3ejfg%1000000);
  }else if($Vangwoo3ejfg<1000000000000){
   $Vjfdsr433eox = konversi($Vangwoo3ejfg/1000000000)." milyar".konversi($Vangwoo3ejfg%1000000000);
  }
  
  return $Vjfdsr433eox;
 }
 }  
if(!function_exists('tkoma')){
 function tkoma($Vangwoo3ejfg){
  $Vvt20qqut4butr = stristr($Vangwoo3ejfg,".");
  $Vrpe4gpkzeu1 = explode(',',$Vangwoo3ejfg);
  $Vudz4oh4qiku="";
  
  if(count($Vrpe4gpkzeu1)>1){
      if(($Vrpe4gpkzeu1[1]/10) >= 1){
       $Vudz4oh4qiku = abs($Vrpe4gpkzeu1[1]);
      }
  }
  $Vvt20qqut4butring = array("nol", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan",   "sembilan","sepuluh", "sebelas");
  $Vjfdsr433eox = "";
  $Vudz4oh4qiku2="";
  if(count($Vrpe4gpkzeu1)>1){
    $Vudz4oh4qiku2 = $Vrpe4gpkzeu1[1]/10;
  }
  $Vspndazgadrf = strlen($Vvt20qqut4butr);
  $V55vc4mewy5w =1;
    
  
  if($Vudz4oh4qiku>=1 && $Vudz4oh4qiku< 12){   
   $Vjfdsr433eox .= " ".$Vvt20qqut4butring[$Vudz4oh4qiku];
  }else if($Vudz4oh4qiku>12 && $Vudz4oh4qiku < 20){   
   $Vjfdsr433eox .= konversi($Vudz4oh4qiku - 10)." belas";
  }else if ($Vudz4oh4qiku>20 && $Vudz4oh4qiku<100){   
   $Vjfdsr433eox .= konversi($Vudz4oh4qiku / 10)." puluh". konversi($Vudz4oh4qiku % 10);
  }else{
   if($Vudz4oh4qiku2<1){
    
    while ($V55vc4mewy5w<$Vspndazgadrf){     
     $Vq3d4zu0txr3 = substr($Vvt20qqut4butr,$V55vc4mewy5w,1);     
     $V55vc4mewy5w++;
     $Vjfdsr433eox .= " ".$Vvt20qqut4butring[$Vq3d4zu0txr3];
    }
   }
  }  
  return $Vjfdsr433eox;
 }
 } 
if(!function_exists('terbilang')){
     function terbilang($Vangwoo3ejfg){
          if($Vangwoo3ejfg<0){
               $Vjto3550vofl = "minus ".trim(konversi(x));
          }else{
               $Vvlbvm05l1kx = trim(tkoma($Vangwoo3ejfg));
               $Vjto3550vofl = trim(konversi($Vangwoo3ejfg));
          }
          
        if($Vvlbvm05l1kx){
                $Vjto3550vofl = $Vjto3550vofl." koma ".$Vvlbvm05l1kx;
          }else{
             $Vjto3550vofl = $Vjto3550vofl;
          }
          return $Vjto3550vofl;  
     }
}
if(!function_exists('msgbox')){
     function msgbox($Vdvjst2lzhef,$V3awurwxucbv="Information",$Vudz4oh4qikuuto_close=false){
        $Vvt20qqut4bu= "<div class='alert alert-info'>$Vdvjst2lzhef</div>";
        if($Vudz4oh4qikuuto_close)$Vvt20qqut4bu.="<script>remove_tab_parent();</script>";
        $Vrdb3kpcuebp =& get_instance();
        $Vmfvrsd5xyqh['content']=$Vvt20qqut4bu;
        $Vmfvrsd5xyqh['message']=$V3awurwxucbv;
        $Vrdb3kpcuebp->template->display("blank",$Vmfvrsd5xyqh);
        
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

if(!function_exists("session_company_code")){
    function session_company_code(){
        $Vrdb3kpcuebp =& get_instance();
        return $Vrdb3kpcuebp->session->userdata("session_company_code","");
    }
}
if(!function_exists("session_outlet")){
    function session_outlet(){
        $Vrdb3kpcuebp =& get_instance();
        return $Vrdb3kpcuebp->session->userdata("session_outlet","");
    }
}
if(!function_exists("date_diff2")){
    function date_diff2($Vcabzuda0fsi,$Vzu4en4d2jn0){
        $Vxb0ra0fqzn2irst  = new DateTime( $Vcabzuda0fsi );
        $Vvt20qqut4buecond = new DateTime( $Vzu4en4d2jn0 );

        $Vsjpa44qmsau = $Vxb0ra0fqzn2irst->diff( $Vvt20qqut4buecond );

        return $Vsjpa44qmsau->format( '%d' ); 
        
    }
}


}
?>
