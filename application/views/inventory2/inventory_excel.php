<div id="dlgExcel" class="easyui-dialog"  
	 style="width:400px;height:300px;padding:5px 5px;left:100px;top:20px" closed="true" >
	<div class="thumbnail">
	<?php 
		echo form_open_multipart(base_url()."index.php/inventory/import_excel","id='dlgExcelForm'");
	?>
		<input type="file" name="file_excel" id="file_excel" size="150" stye="float:left" />
		<input type="button" value="Submit" onclick="dlgExcelSubmit()">  
		</form>
		<p class="help-block">Only Excel/CSV File Import.</p>
	</div>
	<div id='dlgExcelInfo'></div>
</div>

