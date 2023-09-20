<?php

//include koneksi database
include('conn.php');

//get data dari form
$invoice_number     = $_POST['invoice_number'];
$sold_to_customer   = $_POST['sold_to_customer'];


//query update data ke dalam database berdasarkan ID
$query = "UPDATE invoice SET invoice_number = '$invoice_number', sold_to_customer = '$sold_to_customer'
WHERE invoice_number = '$invoice_number'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($koneksi->query($query)) {
    //redirect ke halaman index.php 
    header("location: basic-point.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>