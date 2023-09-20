<?php 
include 'conn.php';
$invoice_number = $_GET['invoice_id'];
$result = mysqli_query($koneksi,"SELECT * from invoice_sj where invoice_number = '$invoice_number'");
while($data = mysqli_fetch_assoc($result)){
	$res[] = $data;
}
header("Content-type:application/json");
echo json_encode($res,JSON_PRETTY_PRINT);
