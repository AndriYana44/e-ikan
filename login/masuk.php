<?php
session_start();

include '../database/koneksi.php';

//menangkap data yang dikirim dari form login
$no_hp = $_POST['no_hp'];
$password = $_POST['password'];

$queri = mysqli_query($koneksi,"select * from akun where no_hp ='$no_hp' and password='$password'");
$cek = mysqli_num_rows($queri);

if($cek > 0){
	//mengmbil data secara array assosiatif
	$data = mysqli_fetch_assoc($queri);

	if ($data['id_level']==1) {
		
		$_SESSION['pembeli'] = $no_hp;
		//$_SESSION['level'] == 10;
		echo '<script language="javascript"> document.location = "../login/user/index.php";</script>';
	} elseif ($data['id_level']==2) {
		
		$_SESSION['penjual'] =$no_hp;
		//$_SESSION['level'] == 20;
		echo '<script language="javascript"> document.location = "../login/toko/index.php";</script>';
	}  
	}else {
		$_SESSION['pesan'] = 'Anda tidak dapat masuk ke Discus!, silahkan cek kembali no handphone dan password anda!';
		header('location:index.php');
}
?>