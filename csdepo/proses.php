<?php 
    session_start();
    include 'conn.php';
	
    $user_id = $_POST['user_id'];
    $password = $_POST['password'];
 
    $data = mysqli_query($koneksi, "SELECT * FROM user WHERE user_id='$user_id' and password='$password'");
 
    $cek = mysqli_num_rows($data);
 
    if($cek > 0){
        $_SESSION['user_id'] = $user_id;
        $_SESSION['status'] = "login";
        header("location:index.php");
    }
    else{
        header("location:login.php?pesan=gagal");
    }
?>