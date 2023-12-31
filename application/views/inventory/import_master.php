<legend>Import Data Barang from TXT file</legend>
<div class='alert alert-info'>
    <p>Isi seting kolom dibawah ini sesuai dengan kolom di excel, 
    sesuaikan kolomnya dengan file TXT yang dipilih. 
    File TXT yang diinput dari XLS harap di SAVE AS (Text tab delimited).
    Periksa inputan jangan ada tanda koma atau kutip dua.
    Tekan tombol <strong>Choose File</strong> untuk memilih file TXT kemudian tekan tombol 
    <strong>Submit</strong> untuk mulai di proses.
    Contoh file template pembayaran file TXT silahkan download disini 
     <?=anchor(base_url()."import/master_barang.rar","master_barang.rar")?> </p>    
</div>
<div style='color:red'><?=validation_errors()?></div>

<?php 
	echo form_open_multipart(base_url()."index.php/inventory/import_excel","id='frmImport'");
?>
<table class='table2' width='90%'>
<tr><td colspan='4'><h4>SETING KOLOM</h4></td></tr>
<tr><td>Kode Barang</td><td><?=form_input('kode',"A"," style='width:50px'")?></td>
	<td>Nama Barang</td><td><input type='text' name='nama' id='nama' value='B' style="width:50px"></td>
        <td>Sistim</td><td><input type='text' name='type_of_invoice' id='type_of_invoice' value='' style="width:50px"></td>
        <td>Kode Divisi</td><td><input type='text' name='division' value='' style="width:50px"></td>
</tr>	
<tr><td>Harga Jual (Eceran)</td><td><input type='text' name='jual' value='C' style="width:50px"></td>
	<td>Harga Beli</td><td><input type='text' name='beli' value='D' style="width:50px"></td>
        <td>Warna</td><td><input type='text' name='colour' id='colour' value='' style="width:50px"></td>
        <td>Item Class *5</td><td><input type='text' name='item_class' value='' style="width:50px"></td></tr>
<tr><td>Satuan *6</td><td><input type='text' name='satuan' value='E' style="width:50px"M></td>
	<td>Kode Supplier</td><td><?=form_input('supplier',"F"," style='width:50px' ")?></td>
        <td>Size</td><td><input type='text' name='size' id='size' value='' style="width:50px"></td>
        <td>Merk</td><td><input type='text' name='manufacturer' id='manufacturer' value='' style="width:50px"></td>
        </tr>
<tr>
	<td>Kode Kategori 1</td><td><?=form_input('categori1',"G"," style='width:50px' ")?></td>
        <td>Cost (Hpp) *4</td><td><input type='text' name='cost' value='' style="width:50px"></td>
        <td>Kode Lama</td><td><input type='text' name='kode_lama' id='kode_lama' value='' style="width:50px"></td>
        <td>Model</td><td><input type='text' name='model' id='model' value='' style="width:50px"></td>        
</tr>
<tr>
        <td>Kode Kategori 2</td><td><input type='text' name='categori2' value='' style="width:50px"></td>
        <td>Margin</td><td><input type='text' name='margin' id='margin' value='' style="width:50px"></td>
</tr>
<tr>
        <td>Kode Kategori 3</td><td><?=form_input('categori3',""," style='width:50px' ")?></td>
        <td>Qty Awal *3</td><td>
                 <input type='text' name='qty' value='' style="width:50px">
        </td>
</tr>
<tr>
	<td>Harga Jual 1</td><td><input type='text' name='jual1' value='' style="width:50px"></td>
	<td>Kode (HJ1) *2</td>
        <td><input type='text' name='jual1_kel' value='' style="width:80px">
        </td>
</tr>
<tr>
        <td>Harga Jual 2</td><td><input type='text' name='jual2' value='' style="width:50px"></td>
	<td>Kode (HJ2) *2</td>
        <td><input type='text' name='jual2_kel' value='' style="width:80px">
        </td>
</tr>
<tr>
        <td>Harga Jual 3</td><td><input type='text' name='jual3' value='' style="width:50px"></td>
	<td>Kode (HJ3) *2</td>
        <td><input type='text' name='jual3_kel' value='' style="width:80px">
        </td>
</tr>

<tr><td colspan=8> <input type='checkbox' name='chkUpdateCoaPersediaan' style="width:30px"/> 
Update master akun chart_of_acccount untuk saldo awal kode akun kategori barang tersebut. *1
    </td>
</tr>
<tr>
<td colspan=8>        
        <br/><i style='font-size:11px'>*1 <b>Update master akun</b> pastikan kode akun perkiraan sudah di setting di semua kategori barang </i>
        <br/><i style='font-size:11px'>*2 <b>HJ123</b> harap diketik nama kelompok pelanggan, misal: GROSIR</i>
        <br/><i style='font-size:11px'>*3 <b>Qty Awal</b> apabila diisi proses import barang akan otomatis 
	       membuat nomor bukti baru penerimaan barang lainnya sebagai saldo awal,
	       dan cost amount value nilai persediaan akan mengupdate saldo awal perkiraan
	       yang bersangkutan dengan kategori barang tersebut   
	    </i>
        <br/><i style='font-size:11px'>*4 <b>Cost (Hpp)</b> apabila tidak diisi akan disamakan dengan <b>Harga Beli</b></i>
        <br/><i style='font-size:11px'>*5 <b>Class</b> apabila tidak diisi akan terisi otomatis dengan 'Stock Item'</i>
        <br/><i style='font-size:11px'>*6 <b>Satuan</b> apabila tidak diisi akan terisi otomatis dengan 'PCS'</i>

</td>
</tr>	
<tr>
        <td colspan=8>        
        </td>
</tr>	
<tr><td colspan=3><input type="file" name="file_excel" id="file_excel" style="width:300px"/></td>
<td><input type='submit' value='Submit' name='submit' class='btn btn-primary'></td></tr>

</table>
