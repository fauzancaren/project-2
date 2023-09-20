<script language="JavaScript">
	var _themes='<?=getvar('themes')?>';
</script>	

<?php 

include_once "design/header.php";
if(isset($_page)){
  echo load_view($_page);
} else {
	include_once "dashboard/admin.php";
}
include_once "design/footer.php";


