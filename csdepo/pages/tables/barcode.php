
<html>
<head>

<style>
		p.inline {display: inline-block; margin-top:0px}
	
		span { font-size: 10px;}
		</style>
</head>
<script>
		function buatRupiah($angka){
    $hasil = "Rp " . number_format($angka,0,',','.');
    return $hasil;
}
</script>
<body onload="window.print();">
	<div style="margin-left: %">
		<?php
		include 'barcode128.php';
		$product = $_POST['product'];
		$product_id = $_POST['product_id'];
		$hasil = $_POST['rate'];

		for($i=1;$i<=$_POST['print_qty'];$i++){
			echo "
			<p class='inline'><span><b><font size='1.5px'>".(substr($product,0,25))."</font></b></span><br>
			<span><b>".(substr($product,25,35))."</b></span>".bar128(stripcslashes($_POST['product_id']))."<span ></b>
			<span><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size='3'>Rp&nbsp;&nbsp;".(number_format($hasil))."</b></font></span></p>
			&nbsp;&nbsp;&nbsp;
			<p class='inline'><span><b>".(substr($product,0,25))."</b></span><br>
			<span><b>".(substr($product,25,35))."</b></span>
			".bar128(stripcslashes($_POST['product_id']))."<span ></b>
			<span><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size='3'>Rp&nbsp;&nbsp;".(number_format($hasil))."</b></font></span>
			</p>";
		}

		?>
	</div>
</body>
</html>
