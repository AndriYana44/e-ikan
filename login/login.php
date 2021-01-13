<?php
session_start(); // Start session nya

function alert($text, $link)
{
	echo "<script>
			alert('$text');
			window.location.href='$link';
		  </script>";
}

include "koneksi.php"; // Load file koneksi.php

$username = $_POST['username']; // Ambil value username yang dikirim dari form
$password = $_POST['password']; // Ambil value password yang dikirim dari form
$password = $password; // Kita enkripsi (encrypt) password tadi dengan md5

$query = mysqli_query($koneksi, "SELECT * FROM akun WHERE username='$username' AND password='$password'");
$data = mysqli_fetch_array($query);
$row = mysqli_num_rows($query);
// var_dump($username);
// var_dump($password);
if ($row > 0) {
	$_SESSION['alogin'] = "login";
	$_SESSION['username'] = $data['username']; // Set session untuk username (simpan username di session)
	$_SESSION['nama'] = $data['username']; // Set session untuk nama (simpan nama di session)
	$_SESSION['email'] = $data['email']; // Set session untuk email (simpan email di session)
	if($data['id_level'] == 1) {
		alert('Login Sebagai Admin Berhasil!', 'toko/index.php?halaman=vahicle');
	}else {
		alert('Login Sebagai Customer Berhasil!', 'toko/index.php?halaman=vahicle');
	}
} else {
	alert('Username / Password tidak valid!', 'index.php');
}

// Buat query untuk mengecek apakah ada data user dengan username dan password yang dikirim dari form
// $sql = $pdo->prepare("SELECT * FROM user WHERE username=:a AND password=:b");
// $sql->bindParam(':a', $username);
// $sql->bindParam(':b', $password);
// $sql->execute(); // Eksekusi querynya

// $data = $sql->fetch(); // Ambil datanya dari hasil query tadi

// // Cek apakah variabel $data ada datanya atau tidak
// if( ! empty($data)){ // Jika tidak sama dengan empty (kosong)
// 	$_SESSION['username'] = $data['username']; // Set session untuk username (simpan username di session)
// 	$_SESSION['nama'] = $data['nama']; // Set session untuk nama (simpan nama di session)
// 	$_SESSION['email'] = $data['email']; // Set session untuk email (simpan email di session)

// 	setcookie("message","delete",time()-1); // Kita delete cookie message

// 	header("location: welcome.php"); // Kita redirect ke halaman welcome.php
// }else{ // Jika $data nya kosong
// 	// Buat sebuah cookie untuk menampung data pesan kesalahan
// 	setcookie("message", "Maaf, Untuk saat ini login dengan No. Handphone belum bisa di Akses silahkan Login terlebih dahulu dengan GOOGLE", time()+3600);

// 	header("location: index.php"); // Redirect kembali ke halaman index.php
// }
