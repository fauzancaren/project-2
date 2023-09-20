<?php

    //koneksi ke database
	include 'conn.php';
	$simpan = $_POST['simpan'];
	// $jumlah_dipilih = count($simpan);

    
	// echo json_encode($_POST['simpan'],JSON_PRETTY_PRINT);
	// die();
	$invoice_date = date("y-m-d h:i:sa");
	$nomor_sj = kodeotomatis($koneksi,"SJ",5);
    for($i=0; $i<count($simpan); $i++){
        //menghapus data sesuai urutan array
		//
		
		// echo json_encode($nomor_sj,JSON_PRETTY_PRINT);
		// die();
		
		
		$item = mysqli_query($koneksi,"SELECT invoice_number,line_number,item_number,quantity,unit,description FROM invoice_lineitems where line_number = {$simpan[$i]}",MYSQLI_USE_RESULT)->fetch_object();
        $result= mysqli_query($koneksi, "INSERT INTO invoice_sj values('$item->invoice_number',$item->line_number,'$item->item_number',$item->quantity,'$item->unit','$item->description','$nomor_sj','$invoice_date')");
		if(!$result){
			echo mysqli_error($koneksi);
			break;
		}
	}	
	//echo json_encode($item,JSON_PRETTY_PRINT);
	//die();
    //kembali ke halaman sebelumnya
    header("Location: basic-data-sj.php");
    die();

	function kodeotomatis($koneksi,$prefix="SJ",$digit=4){
		$no = mysqli_query($koneksi,"select (max(right(no_sj,{$digit}))+1) no_sj from invoice_sj group by invoice_number order by no_sj desc limit 1 ",MYSQLI_USE_RESULT)->fetch_object();
		return sprintf("%s-%0{$digit}d",$prefix,(is_numeric($no->no_sj) ? $no->no_sj : 1));
	}

?>
