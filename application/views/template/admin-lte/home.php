<script language="JavaScript">
	var _themes='<?=$themes?>';
</script>	

<?php 

include_once "design/header.php";
if(!isset($_page)){
	include_once "dashboard/admin.php";
}
include_once "design/footer.php";


?>