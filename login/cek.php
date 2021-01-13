<?php
session_start();

include '../database/koneksi.php';

//menangkap data yang dikirim dari form login
$email = $_POST['email'];
$password = $_POST['password'];

$queri = mysqli_query($koneksi,"select * from akun where email ='$email' and password='$password'");
$cek = mysqli_num_rows($queri);

if($cek > 0){
	//mengmbil data secara array assosiatif
	$data = mysqli_fetch_assoc($queri);

	if ($data['id_level']==1) {
		
		$_SESSION['pembeli'] = $email;
		//$_SESSION['level'] == 10;
		echo '<script language="javascript"> document.location = "welcome.php";</script>';
	} elseif ($data['id_level']==2) {
		
		$_SESSION['penjual'] =$email;
		//$_SESSION['level'] == 20;
		echo '<script language="javascript"> document.location = "../tokoikan/index.php";</script>';
	}  elseif ($data['id_level']==3) {
		
		$_SESSION['master'] =$email;
		//$_SESSION['level'] == 20;
		echo '<script language="javascript"> document.location = "../userikan/index.php";</script>';
	} 
	}else {
		$_SESSION['pesan'] = 'Anda tidak dapat masuk ke Discus!, silahkan cek kembali email dan password anda!';
		header('location:index.php');
}
?>