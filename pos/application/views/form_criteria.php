<div id='form_criteria'  class="easyui-dialog" modal='true'  closed="true" 
	button="#btnCriteriaa"
	style="width:700px;height:500px;left:100px;top:100px;padding:20px">
	<div id='fc_filter'>
		Loading...
	</div>
</div>
<div id="btnCriteria">
	<?=link_button("Print", "on_print()","print")?>
	<?=link_button("Cancel", "on_cancel()","cancel")?>
</div>
<script type='text/javascript' language="JavaScript">
    function form_criteria_show(){
        $("#form_criteria").dialog("open").dialog('setTitle','Enter Criteria');        
    }    
</script>
