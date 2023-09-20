
<div id="dlgGambar" class="easyui-dialog" 
 style="width:300px;height:200px;padding:5px 5px;left:100px;top:20px" closed="true" >
	<div class="thumbnail">
	<?php 
		echo form_open_multipart(base_url()."index.php/inventory/do_upload_picture","id='frmUpload' ");
	?>
		<input type="file" name="userfile" id="userfile" size="20" title="Piliih Gambar" stye="float:left;width:300px" />
		<input type="button" value="Submit" onclick="do_upload()">  
		</form>
	</div>
	<div id='error_upload'></div>
</div>
