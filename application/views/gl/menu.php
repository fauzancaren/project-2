<?php 
	$themes=getvar('themes','standard');
	
	if($themes=="admin"){
		include_once "menu_sbadmin.php";
	} else {
		include_once "menu_standard.php";
	}
?>
