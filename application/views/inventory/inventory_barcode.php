
<div id='dlgPrintBarcode' class="easyui-dialog" 
	style="width:500px;height:300x;;left:100px;top:100px"
        closed="true" toolbar="#tbPrint_barcode">
		<table class='table'>
		<tr><td>Qty Baris</td><td><input type='text' id='txtBarQty' value='1'></td></tr>
		<tr><td>Qty Kolom</td><td><input type='text' id='txtBarCol' value='2'></td></tr>
		<tr><td>Ukuran </br>(0-Kecil, 1-Besar)</td><td><input type='text' id='txtBarSize' value='0'></td></tr>
		<tr><td>TerminalId:</td><td><input type='text' id='txtTerminalId' value=''></td>
		</table>
    </div>   
</div>
<div id='tbPrint_barcode'  >
	<?php
		echo link_button('Print','print_barcode_action()','print');
		echo link_button('Close','print_barcode_close()','remove');
	?>
</div>
