<?php
include '../koneksi.php';
session_start();

	$nik =$_POST['nik'];
   	$nama_toko =$_POST['nama_toko'];
   	$id=$_POST['id'];
   	$tgl_buat=$_POST['tgl_buat'];
	$ekstensi_diperbolehkan	= array('png','jpg','jpeg');
	$nama = $_FILES['file_ktp']['name'];
	$x = explode('.', $nama);
	$ekstensi = strtolower(end($x));
	$ukuran	= $_FILES['file_ktp']['size'];
	$file_tmp = $_FILES['file_ktp']['tmp_name'];	
		if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
		    if($ukuran < 1000000){			
			move_uploaded_file($file_tmp, '../img/ktp/'.$nama);
			$query = mysqli_query($koneksi,"INSERT INTO toko VALUES('','$nama_toko','','$id','$nik','$nama','','$tgl_buat','')");
			if($query){
				echo "<script>alert('Data Kios Berhasil Disimpan,Silahkan Tunggu Konfirmasi Kios di terima atau tidaknya Kios Anda!!!');history.go(-1);</script>";
					header('location:index.php');
			}else{
				echo "<script>alert('Data Kios Tidak Berhasil Disimpan,Silahkan lihat kembali data anda!!! !!!');history.go(-1);</script>";
					header('location:index.php');
			}
		    }else{
				echo "<script>alert('File KTP Anda Melebihi Kapasitas yang ditentukan!!!');history.go(-1);</script>";
					header('location:index.php');
		    }
	       }else{
	       		echo "<script>alert('Format File yang anda upload tidak sesuai !');history.go(-1);</script>";
					header('location:index.php');
	       }

?>