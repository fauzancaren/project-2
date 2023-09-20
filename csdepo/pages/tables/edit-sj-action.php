<?php 
include 'conn.php';
$p = $_POST;
$qty = $p['quantity'];
$invoice_number = $p['invoice_number'];
$item_number = $p['item_number'];
$result = mysqli_query($koneksi,"UPDATE invoice_sj set quantity=$qty where invoice_number = '$invoice_number' and item_number = '$item_number'");
header("Content-type:application/json");
echo json_encode($result,JSON_PRETTY_PRINT);
