<?php
session_start();
if($_SESSION['alogin'] !== "login") {
    header('location: ../index.php');
}else {
    if ($_GET['halaman'] == 'vahicle') {
        header('location: tambah_vahicle.php');
    } else if ($_GET['halaman'] == 'produk_kios') {
        header('location: produk_kios.php');
    } else if ($_GET['halaman'] == 'produk_terjual') {
        header('location: produk_terjual.php');
    } else if ($_GET['halaman'] == 'tambah_produk') {
        header('location: tambah_produk.php');
    } else if ($_GET['halaman'] == 'tambah_artikel') {
        header('location: tambah_artikel.php');
    } else if ($_GET['halaman'] == 'tambah_publikasi') {
        header('location: tambah_publikasi.php');
    } else if ($_GET['halaman'] == 'pengaturan_akun') {
        header('location: pengaturan_akun.php');
    }
}