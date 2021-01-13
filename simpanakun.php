<?php
session_start();
include "database/koneksi.php";

$username= $_POST['username'];
$password= $_POST['password'];
$no_hp= $_POST['no_hp'];
$email= $_POST['email'];
$alamat = $_POST['alamat'];
$tgl_buat = $_POST['tgl_buat'];
$id_level= $_POST['level'];

$query = mysqli_query($koneksi, "INSERT INTO akun SET username='$username', email='$email', password='$password', no_hp='$no_hp', alamat='$alamat', tgl_buat='$tgl_buat', id_level='$id_level'");
	if($query) {
		echo "<script>
				alert('Akun berhasil dibuat, Silahkan login!');
				window.location ='login/';
			  </script>";
	} else {
		echo "<script>alert('Daftar Akun Gagal!, Silahkan Coba Kembali!!!');history.go(-1);</script>";
}
?>