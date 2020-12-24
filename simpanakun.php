<?php
session_start();
include "database/koneksi.php";

$username= $_POST['username'];
$password= $_POST['password'];
$no_hp= $_POST['no_hp'];
$email= $_POST['email'];
$alamat = $_POST['alamat'];
$tgl_buat = $_POST['tgl_buat'];
$id_level= $_POST['id_level'];

$query = mysqli_query($koneksi,"INSERT INTO akun VALUES('','$username','$email','$password','$no_hp','$alamat','$tgl_buat','$id_level')");
	if($query){
	echo "<script> window.location ='../ariesdiscus/index.html';</script>";
} else {
	echo "<script>alert('Daftar Akun Gagal!, Silahkan Coba Kembali!!!');history.go(-1);</script>";
}
?>