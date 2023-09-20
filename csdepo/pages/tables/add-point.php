<?php 

include 'conn.php';
$invoice_number = $_POST['invoice_number'];
$jumlah_point = $_POST['jumlah_point'];
$sold_to_customer = $_POST['sold_to_customer'];
$amount = $_POST['amount'];
mysqli_query($koneksi,"insert into point values('$invoice_number','$jumlah_point','$sold_to_customer','$amount')");
header("location:basic-point.php");
 
?>