
<html>
<head>

<style>
		p.inline {display: inline-block; margin-top:0px}
		p.inline {display: inline-block; margin-right:20px}
		span { font-size: 10px;}
		</style>
</head>
<body>
	<div style="display:flex;justify-content: space-around;">
		<?php
		include 'barcode128kecil.php';
		$product = $_POST['product'];
		$product_id = $_POST['product_id'];
	

		for($i=1;$i<=$_POST['print_qty'];$i++){
			echo "
			<p class='inline' style='text-align:center;'><span><b>".(substr($product,0,20))."</b></span>".bar128(stripcslashes($_POST['product_id'])).
			"<span ></span></p>";
			
		}

		?>
	</div>
</body>
</html>