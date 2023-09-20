<div id='dlgMenuReports'  class="easyui-dialog" modal='true' closed="true" 
	style="width:800px;height:500px;left:50px;top:50px;padding:20px">
	<?php 
	include_once "reports.php"; 
	include_once "form_criteria.php";
	
	?>
</div>
<script type='text/javascript' language="JavaScript">
    function dlgMenuReports_Show(){
    	window.open(CI_ROOT+"reports","_blank");
//        $("#dlgMenuReports").dialog("open").dialog('setTitle','Menu Reports');        
    }    
</script>
