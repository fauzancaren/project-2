
<body>
    <div>
  <?php
    if(isset($_GET['invoice_number'])){
        $invoice_number    =$_GET['invoice_number'];
        }
    else {
        die ("Error. No ID Selected!");    
    }
    include "conn.php";
    $query    =mysqli_query($koneksi, "SELECT * FROM undian WHERE invoice_number='$invoice_number'");
    $result    =mysqli_fetch_array($query);
	function tgl_indo($tanggal){
	$bulan = array (
		1 =>   'Januari',
		'Februari',
		'Maret',
		'April',
		'Mei',
		'Juni',
		'Juli',
		'Agustus',
		'September',
		'Oktober',
		'November',
		'Desember'
	);
	$pecahkan = explode('-', $tanggal);
	
 
	return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
}
 
	?>
	

 
<center><b>DEPO MAJU<BR>
Struk No Undian  </b>       
</center> 
<br>        
<table>
			  	<?php
				include "conn.php"; 
				$no = 1;
				$query    =mysqli_query($koneksi, "SELECT *
				FROM undian
				WHERE invoice_number='$invoice_number'");
				//var_dump($query);
				//die();
				$result=mysqli_fetch_assoc($query)
				?>
				
			<tr>
			<td><b>Member No</b>
			</td>
				<td>&nbsp;<b>:</b>
			</td>
				<td>&nbsp;<b><?php echo $result['sold_to_customer']; ?></b>
			</td>
			</tr>
			<tr>
			<td><b>Nama Customers</b>
			</td>
				<td>&nbsp;<b>:</b>
			</td>
				<td>&nbsp;<b><?php echo $result['company']; ?></b>
			</td>
			</tr>
			<tr>
			<td><b>Alamat</b>
			</td>
				<td>&nbsp;<b>:</b>
			</td>
				<td>&nbsp;<b><?php echo $result['alamat']; ?></b>
			</td>
			</tr>
	
		
</table>
<br>
<br>
<table>
						
			<tr>
			<td><b>FJK No</b>
			</td>
				<td>&nbsp;<b>:</b>
			</td>
				<td>&nbsp;<b><?php echo $result['invoice_number']; ?></b>
			</td>
			</tr>
			<tr>
			<td><b>Tgl FJK</b>
			</td>
				<td>&nbsp;<b>:</b>
			</td>
				<td>&nbsp;<b><?php echo tgl_indo($result['tgl_fjk']); ?></b>
			</td>
			</tr>
			<tr>
			<td><b>Total Belanja</b>
			</td>
				<td>&nbsp;<b>:</b>
			</td>
				<td><b>&nbsp;Rp&nbsp;<?php echo number_format($result['amount']); ?></b>
			</td>
			</tr>
		
</table>
<br>
<br>
<table>
						
			<tr>
			<td><b>No Undian</b>
			</td>
				<td>&nbsp;:
			</tr>
<?php
				include "conn.php"; 
				$no = 1;
				$query    =mysqli_query($koneksi, "SELECT *
				FROM undian
				WHERE invoice_number='$invoice_number'");
				//var_dump($query);
				//die();
				while($result=mysqli_fetch_assoc($query))
				{?>
				                    <tr>
                     
                       <td><b><?php echo $result['no_undian']; ?></b></td>
                     
                       
                    </tr>
                   <?php }?>			
		
		
		
</table>
<br>
<table>

<tr><td><b><font size="2px">Ketentuan</font></tr><td>
<tr><td><b><font size="2px">1. No Undian akan diundi pada tgl 28/01/2024</font></tr><td>
<tr><td><b><font size="2px">2. Panitia Undian yang berhak menentukan</font></tr><td>
<tr><td><b><font size="2px">&nbsp;&nbsp;&nbsp;&nbsp;pemenang undian.</font></tr><td>
<tr><td><b><font size="2px">3. Struk No Undian ini adalah SAH.</font></tr><td>
<table>	

  </body>
   <script>
  // window.print()
  </script>
