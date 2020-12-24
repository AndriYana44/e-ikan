<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>E Store - eCommerce HTML Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="eCommerce HTML Template Free Download" name="keywords">
        <meta content="eCommerce HTML Template Free Download" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/slick/slick.css" rel="stylesheet">
        <link href="lib/slick/slick-theme.css" rel="stylesheet">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <!-- Top bar Start -->
        <div class="top-bar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <i class="fa fa-mobile"></i>
                        Download CBDdiscus App
                    </div>
                    <div class="col-sm-6">
                          <a href="#news" style="padding: 1px 10px; color: #000000">Tentang CBDdiscus</a>
                          <a href="#contact" style="padding: 1px 10px; color: #000000">Forum Diskusi</a>
                          <a href="#about" style="padding: 1px 10px; color: #000000">artikel</a>
                          <a href="#about" style="padding: 1px 10px; color: #000000">Nama Toko</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top bar End -->
        
        <!-- Bottom Bar Start -->
        <div class="bottom-bar">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <div class="logo">
                            <a href="index.html">
                                <img src="img/logocbd.png" alt="Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="search">
                            <input type="text" placeholder="Search">
                            <button><i class="fa fa-search"></i></button>
                        </div>
                        <div class="topnav">
                          <a href="#news">Discus</a>
                          <a href="#contact">Pakan</a>
                          <a href="#about">Acesories</a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="user">
                            <a href="wishlist.html" class="btn wishlist">
                                <i class="fa fa-heart"></i>
                                <span>(0)</span>
                            </a>
                            <a href="cart.html" class="btn cart">
                                <i class="fa fa-shopping-cart"></i>
                                <span>(0)</span>
                            </a>
                            <a href="cart.html" class="btn cart">
                                <i class="fa fa-bell"></i>
                                <span>(0)</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <!-- Bottom Bar End -->                         
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap">
            <div class="container-fluid">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                    <li class="breadcrumb-item active">Kios Ku</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb End -->
        
        <!-- My Account Start -->
        <div class="my-account">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <div class="nav flex-column nav-pills" role="tablist" aria-orientation="vertical">
                            <!-- <a class="nav-link active" id="dashboard-nav" data-toggle="pill" href="#dashboard-tab" role="tab"><i class="fa fa-tachometer-alt"></i>Dashboard</a> -->

                            <a class="nav-link" id="produkkios-nav" data-toggle="pill" href="#produkkios-tab" role="tab"><i class="fa fa-shopping-bag"></i>Produk Kios</a>
                             <a class="nav-link" id="produkterjual-nav" data-toggle="pill" href="#produkterjual-tab" role="tab"><i class="fa fa-cart-arrow-down"></i>Produk Terjual</a>
                            <a class="nav-link" id="account-nav" data-toggle="pill" href="#account-tab" role="tab"><i class="fa fa-cart-plus"></i>Tambah Produk</a>
                            <a class="nav-link" id="artikel-nav" data-toggle="pill" href="#artikel-tab" role="tab"><i class="far fa-newspaper"></i>Tambah Artikel</a>
                            <a class="nav-link" id="publikasi-nav" data-toggle="pill" href="#publikasi-tab" role="tab"><i class="far fa-newspaper"></i>Tambah Publikasi</a>
                            <a class="nav-link" id="pengaturan-akun-nav" data-toggle="pill" href="#pengaturan-akun-tab" role="tab"><i class="fa fa-user"></i>Pengaturan Akun</a>
                            <a class="nav-link" href="index.html"><i class="fa fa-sign-out-alt"></i>Logout</a>
                        </div>
                    </div>
                <div class="col-md-9">

<!-- PRODUK KIOS -->
                <div class="tab-content">
                    <div class="tab-pane fade" id="produkkios-tab" role="tabpanel" aria-labelledby="produkkios-nav">
                        <div class="row product-detail-bottom">
                            <div class="col-lg-12">
                                <ul class="nav nav-pills nav-justified">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="pill" href="#diskus">Diskus</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="pill" href="#ikanhias">Ikan Hias</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="pill" href="#reviews">Pakan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="pill" href="#obat-obatan">Obat-obatan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="pill" href="#Acessories">Acessories</a>
                                    </li>                                    
                                </ul>

                           
                        <div class="tab-content">
                            <div id="diskus" class="container tab-pane active">
                                <div class="table-responsive">
                                   <h2><center>DISCUS</center></h2>
                                    <table class="table table-bordered">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>No</th>
                                                <th>produkkios</th>
                                                <th>Harga</th>
                                                <th>Ukuran</th>
                                                <th>Stock</th>
                                                <th>Rayakan</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                    <tbody>
                                    <?php
                                    include('koneksi.php');
                                    $sql = mysqli_query($conn,"SELECT * FROM produk where id_kategori=2");
                                    if(mysqli_num_rows($sql)>0){ ?>
                                                <?php
                                                    $no = 1;
                                                    while($data = mysqli_fetch_array($sql)){
                                                ?>
                                                <tr>
                                                    <td> <?php echo $no  ?></td>
                                                    <td> <?php echo $data["nama_produk"]  ?></td>
                                                    <td> <?php echo $data["harga"]  ?></td>
                                                    <td> <?php echo $data["ukuran"]  ?></td>
                                                    <td> <?php echo $data["stok"]  ?></td>
                                                    <td> <?php echo $data["rayakan"] ?>< </td>
                                                    <td> <?php echo $data["ket"]  ?></td>
                                                    <td>
                                                        <button class="btn"><i class="fa fa-edit"></i></button>
                                                        <button class="btn"><i class="fa fa-trash"></i></button>
                                                    </td>
                                                </tr>
                                               <?php $no++; } ?>
                                               <?php } ?>
                                               </tbody>                                         
                                        </table>
                                    </div>
                                </div>
                            <div id="ikanhias" class="container tab-pane fade">
                                <div class="table-responsive">
                                   <h2><center>IKAN HIAS</center></h2>
                                    <table class="table table-bordered">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>No</th>
                                                <th>produkkios</th>
                                                <th>Harga</th>
                                                <th>Ukuran</th>
                                                <th>Stock</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <?php
                                    include('koneksi.php');
                                    $sql = mysqli_query($conn,"SELECT * FROM produk where id_kategori=4");
                                    if(mysqli_num_rows($sql)>0){ ?>
                                                <?php
                                                    $no = 1;
                                                    while($data = mysqli_fetch_array($sql)){
                                                ?>
                                                <tr>
                                                    <td> <?php echo $no  ?></td>
                                                    <td> <?php echo $data["nama_produk"]  ?></td>
                                                    <td> <?php echo $data["harga"]  ?></td>
                                                    <td> <?php echo $data["ukuran"]  ?></td>
                                                    <td> <?php echo $data["stok"]  ?></td>
                                                    <td> <?php echo $data["ket"]  ?></td>
                                                    <td>
                                                        <button class="btn"><i class="fa fa-edit"></i></button>
                                                        <button class="btn"><i class="fa fa-trash"></i></button>
                                                    </td>
                                                </tr>
                                               <?php $no++; } ?>
                                               <?php } ?>
                                    </table>
                                </div>
                            </div>
                            <div id="reviews" class="container tab-pane fade">
                                <div class="table-responsive">
                                   <h2><center>PAKAN</center></h2>
                                    <table class="table table-bordered">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>No</th>
                                                <th>produkkios</th>
                                                <th>Harga</th>
                                                <th>Ukuran</th>
                                                <th>Stock</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <?php
                                    include('koneksi.php');
                                    $sql = mysqli_query($conn,"SELECT * FROM produk where id_kategori=5");
                                    if(mysqli_num_rows($sql)>0){ ?>
                                                <?php
                                                    $no = 1;
                                                    while($data = mysqli_fetch_array($sql)){
                                                ?>
                                                <tr>
                                                    <td> <?php echo $no  ?></td>
                                                    <td> <?php echo $data["nama_produk"]  ?></td>
                                                    <td> <?php echo $data["harga"]  ?></td>
                                                    <td> <?php echo $data["ukuran"]  ?></td>
                                                    <td> <?php echo $data["stok"]  ?></td>
                                                    <td> <?php echo $data["ket"]  ?></td>
                                                    <td>
                                                        <button class="btn"><i class="fa fa-edit"></i></button>
                                                        <button class="btn"><i class="fa fa-trash"></i></button>
                                                    </td>
                                                </tr>
                                               <?php $no++; } ?>
                                               <?php } ?>
                                    </table>
                                </div>
                            </div>

                        <div id="obat-obatan" class="container tab-pane fade">
                            <div class="table-responsive">
                                   <h2><center>OBAT-OBATAN</center></h2>
                                    <table class="table table-bordered">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>No</th>
                                                <th>produkkios</th>
                                                <th>Harga</th>
                                                <th>Ukuran</th>
                                                <th>Stock</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <?php
                                    include('koneksi.php');
                                    $sql = mysqli_query($conn,"SELECT * FROM produk where id_kategori=6");
                                    if(mysqli_num_rows($sql)>0){ ?>
                                                <?php
                                                    $no = 1;
                                                    while($data = mysqli_fetch_array($sql)){
                                                ?>
                                                <tr>
                                                    <td> <?php echo $no  ?></td>
                                                    <td> <?php echo $data["nama_produk"]  ?></td>
                                                    <td> <?php echo $data["harga"]  ?></td>
                                                    <td> <?php echo $data["ukuran"]  ?></td>
                                                    <td> <?php echo $data["stok"]  ?></td>
                                                    <td> <?php echo $data["ket"]  ?></td>
                                                    <td>
                                                        <button class="btn"><i class="fa fa-edit"></i></button>
                                                        <button class="btn"><i class="fa fa-trash"></i></button>
                                                    </td>
                                                </tr>
                                               <?php $no++; } ?>
                                               <?php } ?>
                                    </table>
                                </div>
                            </div>

                            <div id="Acessories" class="container tab-pane fade">
                                <div class="table-responsive">
                                   <h2><center>ACESSORIES</center></h2>
                                    <table class="table table-bordered">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>No</th>
                                                <th>produkkios</th>
                                                <th>Harga</th>
                                                <th>Ukuran</th>
                                                <th>Stock</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <?php
                                    include('koneksi.php');
                                    $sql = mysqli_query($conn,"SELECT * FROM produk where id_kategori=7");
                                    if(mysqli_num_rows($sql)>0){ ?>
                                                <?php
                                                    $no = 1;
                                                    while($data = mysqli_fetch_array($sql)){
                                                ?>
                                                <tr>
                                                    <td> <?php echo $no  ?></td>
                                                    <td> <?php echo $data["nama_produk"]  ?></td>
                                                    <td> <?php echo $data["harga"]  ?></td>
                                                    <td> <?php echo $data["ukuran"]  ?></td>
                                                    <td> <?php echo $data["stok"]  ?></td>
                                                    <td> <?php echo $data["ket"]  ?></td>
                                                    <td>
                                                        <button class="btn"><i class="fa fa-edit"></i></button>
                                                        <button class="btn"><i class="fa fa-trash"></i></button>
                                                    </td>
                                                </tr>
                                               <?php $no++; } ?>
                                               <?php } ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<!-- PRODUKTERJUAL -->
            <div class="tab-pane fade" id="produkterjual-tab" role="tabpanel" aria-labelledby="produkterjual-nav">
                        <div class="row product-detail-bottom">
                            <div class="col-lg-12">
                                <ul class="nav nav-pills nav-justified">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="pill" href="#diskus">Diskus</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="pill" href="#ikanhias">Ikan Hias</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="pill" href="#reviews">Pakan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="pill" href="#obat-obatan">Obat-obatan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="pill" href="#Acessories">Acessories</a>
                                    </li>                                    
                                </ul>

                           
                        <div class="tab-content">
                            <div id="diskus" class="container tab-pane active">
                                <div class="table-responsive">
                                   <h2><center>DISCUS</center></h2>
                                    <table class="table table-bordered">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>No</th>
                                                <th>produkkios</th>
                                                <th>Harga</th>
                                                <th>Ukuran</th>
                                                <th>Stock</th>
                                                <th>Rayakan</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                    <tbody>
                                    <?php
                                    include('koneksi.php');
                                    $sql = mysqli_query($conn,"SELECT * FROM produk where id_kategori=2");
                                    if(mysqli_num_rows($sql)>0){ ?>
                                                <?php
                                                    $no = 1;
                                                    while($data = mysqli_fetch_array($sql)){
                                                ?>
                                                <tr>
                                                    <td> <?php echo $no  ?></td>
                                                    <td> <?php echo $data["nama_produk"]  ?></td>
                                                    <td> <?php echo $data["harga"]  ?></td>
                                                    <td> <?php echo $data["ukuran"]  ?></td>
                                                    <td> <?php echo $data["stok"]  ?></td>
                                                    <td> <?php echo $data["rayakan"] ?>< </td>
                                                    <td> <?php echo $data["ket"]  ?></td>
                                                    <td>
                                                        <button class="btn"><i class="fa fa-edit"></i></button>
                                                        <button class="btn"><i class="fa fa-trash"></i></button>
                                                    </td>
                                                </tr>
                                               <?php $no++; } ?>
                                               <?php } ?>
                                               </tbody>                                         
                                        </table>
                                    </div>
                                </div>
                            <div id="ikanhias" class="container tab-pane fade">
                                <div class="table-responsive">
                                   <h2><center>IKAN HIAS</center></h2>
                                    <table class="table table-bordered">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>No</th>
                                                <th>produkkios</th>
                                                <th>Harga</th>
                                                <th>Ukuran</th>
                                                <th>Stock</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <?php
                                    include('koneksi.php');
                                    $sql = mysqli_query($conn,"SELECT * FROM produk where id_kategori=4");
                                    if(mysqli_num_rows($sql)>0){ ?>
                                                <?php
                                                    $no = 1;
                                                    while($data = mysqli_fetch_array($sql)){
                                                ?>
                                                <tr>
                                                    <td> <?php echo $no  ?></td>
                                                    <td> <?php echo $data["nama_produk"]  ?></td>
                                                    <td> <?php echo $data["harga"]  ?></td>
                                                    <td> <?php echo $data["ukuran"]  ?></td>
                                                    <td> <?php echo $data["stok"]  ?></td>
                                                    <td> <?php echo $data["ket"]  ?></td>
                                                    <td>
                                                        <button class="btn"><i class="fa fa-edit"></i></button>
                                                        <button class="btn"><i class="fa fa-trash"></i></button>
                                                    </td>
                                                </tr>
                                               <?php $no++; } ?>
                                               <?php } ?>
                                    </table>
                                </div>
                            </div>
                            <div id="reviews" class="container tab-pane fade">
                                <div class="table-responsive">
                                   <h2><center>PAKAN</center></h2>
                                    <table class="table table-bordered">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>No</th>
                                                <th>produkkios</th>
                                                <th>Harga</th>
                                                <th>Ukuran</th>
                                                <th>Stock</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <?php
                                    include('koneksi.php');
                                    $sql = mysqli_query($conn,"SELECT * FROM produk where id_kategori=5");
                                    if(mysqli_num_rows($sql)>0){ ?>
                                                <?php
                                                    $no = 1;
                                                    while($data = mysqli_fetch_array($sql)){
                                                ?>
                                                <tr>
                                                    <td> <?php echo $no  ?></td>
                                                    <td> <?php echo $data["nama_produk"]  ?></td>
                                                    <td> <?php echo $data["harga"]  ?></td>
                                                    <td> <?php echo $data["ukuran"]  ?></td>
                                                    <td> <?php echo $data["stok"]  ?></td>
                                                    <td> <?php echo $data["ket"]  ?></td>
                                                    <td>
                                                        <button class="btn"><i class="fa fa-edit"></i></button>
                                                        <button class="btn"><i class="fa fa-trash"></i></button>
                                                    </td>
                                                </tr>
                                               <?php $no++; } ?>
                                               <?php } ?>
                                    </table>
                                </div>
                            </div>

                        <div id="obat-obatan" class="container tab-pane fade">
                            <div class="table-responsive">
                                   <h2><center>OBAT-OBATAN</center></h2>
                                    <table class="table table-bordered">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>No</th>
                                                <th>produkkios</th>
                                                <th>Harga</th>
                                                <th>Ukuran</th>
                                                <th>Stock</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <?php
                                    include('koneksi.php');
                                    $sql = mysqli_query($conn,"SELECT * FROM produk where id_kategori=6");
                                    if(mysqli_num_rows($sql)>0){ ?>
                                                <?php
                                                    $no = 1;
                                                    while($data = mysqli_fetch_array($sql)){
                                                ?>
                                                <tr>
                                                    <td> <?php echo $no  ?></td>
                                                    <td> <?php echo $data["nama_produk"]  ?></td>
                                                    <td> <?php echo $data["harga"]  ?></td>
                                                    <td> <?php echo $data["ukuran"]  ?></td>
                                                    <td> <?php echo $data["stok"]  ?></td>
                                                    <td> <?php echo $data["ket"]  ?></td>
                                                    <td>
                                                        <button class="btn"><i class="fa fa-edit"></i></button>
                                                        <button class="btn"><i class="fa fa-trash"></i></button>
                                                    </td>
                                                </tr>
                                               <?php $no++; } ?>
                                               <?php } ?>
                                    </table>
                                </div>
                            </div>

                            <div id="Acessories" class="container tab-pane fade">
                                <div class="table-responsive">
                                   <h2><center>ACESSORIES</center></h2>
                                    <table class="table table-bordered">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>No</th>
                                                <th>produkkios</th>
                                                <th>Harga</th>
                                                <th>Ukuran</th>
                                                <th>Stock</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <?php
                                    include('koneksi.php');
                                    $sql = mysqli_query($conn,"SELECT * FROM produk where id_kategori=7");
                                    if(mysqli_num_rows($sql)>0){ ?>
                                                <?php
                                                    $no = 1;
                                                    while($data = mysqli_fetch_array($sql)){
                                                ?>
                                                <tr>
                                                    <td> <?php echo $no  ?></td>
                                                    <td> <?php echo $data["nama_produk"]  ?></td>
                                                    <td> <?php echo $data["harga"]  ?></td>
                                                    <td> <?php echo $data["ukuran"]  ?></td>
                                                    <td> <?php echo $data["stok"]  ?></td>
                                                    <td> <?php echo $data["ket"]  ?></td>
                                                    <td>
                                                        <button class="btn"><i class="fa fa-edit"></i></button>
                                                        <button class="btn"><i class="fa fa-trash"></i></button>
                                                    </td>
                                                </tr>
                                               <?php $no++; } ?>
                                               <?php } ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                

<!-- TAMBAHPRODUK -->              
                <div class="tab-pane fade" id="account-tab" role="tabpanel" aria-labelledby="account-nav">   
                    <h3><strong>UPLOAD PRODUK</strong></h3>
                    <div class="row">
                        <div class="col-md-12">
                            <p>Format gambar .jpg .jpeg .png dan ukuran minimum 300 x 300px (Untuk gambar optimal gunakan ukuran minimum 700 x 700 px)</p>
                            <body>
                                <div class="w3-container">
                                    <table class="w3-table-all w3-card-4">
                                    <tr>
                                        <th style="text-align: center;">Gambar Utama</th>
                                        <th style="text-align: center;">Gambar Kanan</th>
                                        <th style="text-align: center;">Gambar Kiri</th>
                                        <th style="text-align: center;">Gambar Atas</th>
                                    </tr>
                                    <tr>
                                        <th style="text-align: center;"><img src="img/pakan/bloodworms.jpg" style="text-align: center;"></th>
                                        <th style="text-align: center;"><img src="img/pakan/bloodworms.jpg" style="text-align: center;"></th>
                                        <th style="text-align: center;"><img src="img/pakan/bloodworms.jpg" style="text-align: center;"></th>
                                        <th style="text-align: center;"><img src="img/pakan/bloodworms.jpg" style="text-align: center;"></th>
                                    </tr>
                                    <tr>
                                        <th style="text-align: center;"><a href="from.php">Tambah Gambar</a></th>
                                        <th style="text-align: center;"><a href="#">Tambah Gambar</a></th>
                                        <th style="text-align: center;"><a href="#">Tambah Gambar</a></th>
                                        <th style="text-align: center;"><a href="#">Tambah Gambar</a></th>
                                    </tr>
                                    </table>
                                </div>
                            </body>
                        </div>
                    </div><hr>

                            <h3><strong>INSFORMASI PRODUK</strong></h3>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Nama Produk</label>                                        
                                        <input class="form-control" name="produk" type="text" placeholder="First Name">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Kategori</label>                                        
                                        <select name="kategori" class="custom-select">
                                            <option selected>-Pilih Kategori-</option>
                                            <option>Discus</option>
                                            <option>Ikan Hias</option>
                                            <option>Pakan</option>
                                            <option>Obat Obatan</option>
                                            <option>Acessories Aquarium</option>
                                        </select>
                                    </div>
                                </div><hr>

                            <h3><strong>DETAIL PRODUK</strong></h3>                               
                                <div class="row">                                    
                                    <div class="col-md-12">
                                        <label for="deskripsiproduk">Deskripsi Produk</label>
                                        <textarea class="form-control" name="deskripsi" id="deskripsiproduk" rows="3" placeholder="Isi Produk Dengan Jelas"></textarea>
                                    </div>
                                    <!-- <div class="col-md-12">
                                        <label for="videoproduk">Video Produk</label>
                                        <div class="col-md-12">
                                            <input type="file" name="video" class="custom-file-input" id="uploadvideo">
                                            <label class="custom-file-label" for="uploadvideo">Tambah Produk</label>
                                        </div>
                                    </div> -->
                                    <div class="col-md-6">
                                        <br><label>Harga Satuan</label>
                                            <select name="nilaisatuan" class="custom-select">
                                                <option selected>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>                              
                                            </select>
                                        <div class="checkout__input">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Rp</span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="Masukan Harga Satuan" id="hargasatuan" name="hargasatuan">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <br><label>Harga Grosir</label>
                                            <select name="nilaigrosir" class="custom-select">
                                                <option selected>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>                              
                                            </select>
                                        <div class="checkout__input">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Rp</span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="Masukan Harga Satuan" id="hargasatuan" name="hargagrosir">
                                            </div>
                                        </div>
                                    </div>
                                </div><hr>

                            <h3><strong>STATUS PRODUK</strong></h3>                               
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label>Stock Produk</label>
                                            <select name="stock" class="custom-select">
                                                <option value="">10</option>
                                                <option value="">20</option>
                                                <option value="">30</option>
                                                <option value="">40</option>
                                                <option value="">50</option>                                        
                                            </select>
                                    </div>
                                    <div class="col-sm-4">
                                        <label>ukuran Produk</label>
                                            <select name="ukuran" class="custom-select">
                                                <option value="">1 in</option>
                                                <option value="">2 in</option>
                                                <option value="">3 in</option>
                                                <option value="">4 in</option>
                                                <option value="">5 in</option>                                       
                                            </select>
                                    </div>
                                    <div class="col-sm-4">
                                        <label>Rayakan</label>
                                            <select name="rayakan" class="custom-select">
                                                <option value="">30</option>
                                                <option value="">40</option>
                                                <option value="">50</option>
                                                <option value="">60</option>
                                                <option value="">70</option>                                       
                                            </select>
                                    </div>   
                                </div>

                                    <form>
                                        <p>
                                          <button class="w3-btn w3-ripple w3-green">Simpan</button>
                                          <button class="w3-btn w3-ripple w3-blue">Simpan dan Tambah Baru</button>
                                          <button class="w3-btn w3-ripple w3-blue">Batal</button>
                                        </p>
                                    </form>
                                    
                                    <?php
                                    include('koneksi.php');
                                    if(isset($_POST['upload'])){
                                        $nama_file      = $_FILES['gambar']['name'];
                                        $ukuran_file    = $_FILES['gambar']['size'];
                                        $tipe_file      = $_FILES['gambar']['type'];
                                        $tmp_file       = $_FILES['gambar']['tmp_name'];
                                        $produk         = $_POST['produk'];
                                        $kategori       = $_POST ['kategori'];
                                        $deskripsi      = $_POST ['deskripsi'];
                                        $nilaisatuan    = $_POST ['nilaisatuan'];
                                        $hargasatuan    = $_POST ['hargasatuan'];
                                        $nilaigrosir    = $_POST ['nilaigrosir'];
                                        $hargagrosir    = $_POST ['hargagrosir'];
                                        $stock          = $_POST ['stock'];
                                        $ukuran         = $_POST ['ukuran'];
                                        $rayakan        = $_POST ['rayakan'];
                                        
                                        $nama           = $_POST['nama'];
                                        $tgl            = date("Y-m-d");
                                        
                                        if(in_array($file_ext, $allowed_ext) === true){
                                            if($file_size < 1044070){
                                                $lokasi = 'files/'.$nama.'.'.$file_ext;
                                                move_uploaded_file($file_tmp, $lokasi);
                                                $in = mysql_query("INSERT INTO download VALUES(NULL, '$tgl', '$nama', '$file_ext', '$file_size', '$lokasi', 'nama')");
                                                if($in){
                                                    echo '<div class="ok">SUCCESS: File berhasil di Upload!</div>';
                                                }else{
                                                    echo '<div class="error">ERROR: Gagal upload file!</div>';
                                                }
                                            }else{
                                                echo '<div class="error">ERROR: Besar ukuran file (file size) maksimal 1 Mb!</div>';
                                            }
                                        }else{
                                            echo '<div class="error">ERROR: Ekstensi file tidak di izinkan!</div>';
                                        }
                                    }
                                    ?>  
                            </div>


<!-- TAMBAH ARTIKEL -->
                        <div class="tab-pane fade" id="artikel-tab" role="tabpanel" aria-labelledby="artikel-nav">
                                <?php 
                                include('koneksi.php');
                                if(isset($_POST['upload'])){
                                    $ekstensi_diperbolehkan = array('png','jpg');
                                    $name          = $_FILES['file']['name'];
                                    $deskripsi              = $_FILES['file']['deskripsi'];
                                    $x                      = explode('.', $name);
                                    $ekstensi               = strtolower(end($x));
                                    $ukuran                 = $_FILES['file']['size'];
                                    $file_tmp               = $_FILES['file']['tmp_name'];

                         
                                    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
                                        if($ukuran < 1044070){          
                                            move_uploaded_file($file_tmp, 'file/'.$name);
                                            $query = mysql_query("INSERT INTO artikel VALUES(NULL, '$name', 'deskripsi')");
                                            if($query){
                                                echo 'FILE BERHASIL DI UPLOAD';
                                            }else{
                                                echo 'GAGAL MENGUPLOAD GAMBAR';
                                            }
                                        }else{
                                            echo 'UKURAN FILE TERLALU BESAR';
                                        }
                                    }else{
                                        echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
                                    }
                                }
                                ?>

                                <h4>Artikel</h4>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input class="form-control" type="text" name="judul_artikel" placeholder="Judul Artikel">
                                    </div>
                                    <div class="col-md-12">
                                        <textarea class="form-control" name="deskripsi" id="deskripsiproduk" rows="3" placeholder="Isi Deskripsi Artikel"></textarea>
                                    </div>

                                    <div class="col-md-12">
                                        <label for="file">File Artikel</label>
                                        <div class="col-md-12">
                                            <input type="file" name="file" class="custom-file-input" id="uploadvideo">
                                            <label class="custom-file-label" for="uploadvideo">Tambah Artikel</label>
                                        </div><br>
                                    </div>

                                    <div class="col-lg-12">
                                        <button class="w3-btn w3-ripple w3-green">Simpan</button>
                                        <button class="w3-btn w3-ripple w3-blue">Reset</button>
                                    </div>
                                </div><br>

                            <!-- TABEL ARTIKEL -->
                                <div id="diskus" class="container tab-pane active">
                                <div class="table-responsive">
                                   <h2><center>ARTIKEL</center></h2>
                                    <table class="table table-bordered">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>No</th>
                                                <th>Judul</th>
                                                <th>Deskripsi</th>
                                                <th>Gambar</th>
                                                <th>Tanggal Posting</th>
                                                <th>Tanggal Acc</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                    <tbody>
                                    <?php
                                    include('koneksi.php');
                                    $sql = mysqli_query($conn,"SELECT * FROM artikel");
                                    if(mysqli_num_rows($sql)>0){ ?>
                                                <?php
                                                    $no = 1;
                                                    while($data = mysqli_fetch_array($sql)){
                                                ?>
                                                <tr>
                                                    <td> <?php echo $no  ?></td>
                                                    <td> <?php echo $data["judul_artikel"]  ?></td>
                                                    <td> <?php echo $data["isi_artikel"]  ?></td>
                                                    <td> <?php echo $data["file_artikel"]  ?></td>
                                                    <td> <?php echo $data["tgl_posting"]  ?></td>
                                                    <td> <?php echo $data["tgl_acc"] ?>< </td>
                                                    <td> <?php echo $data["status"]  ?></td>
                                                    <td>
                                                        <button class="btn"><i class="fa fa-edit"></i></button>
                                                        <button class="btn"><i class="fa fa-trash"></i></button>
                                                    </td>
                                                </tr>
                                               <?php $no++; } ?>
                                               <?php } ?>
                                               </tbody>                                         
                                        </table>
                                    </div>
                                </div>
                            </div>


<!-- TAMBAH PUBLIKASI -->
                        <div class="tab-pane fade" id="publikasi-tab" role="tabpanel" aria-labelledby="publikasi-nav">           
                                <?php 
                                include('koneksi.php');
                                if(isset($_POST['upload'])){
                                    $ekstensi_diperbolehkan = array('png','jpg');
                                    $judul_artikel          = $_FILES['file']['judul_artikel'];
                                    $x                      = explode('.', $judul_artikel);
                                    $ekstensi               = strtolower(end($x));
                                    $ukuran                 = $_FILES['file']['size'];
                                    $file_tmp               = $_FILES['file']['tmp_name'];    
                         
                                    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
                                        if($ukuran < 1044070){          
                                            move_uploaded_file($file_tmp, 'file/'.$judul_artikel);
                                            $query = mysql_query("INSERT INTO artikel VALUES(NULL, '$judul_artikel')");
                                            if($query){
                                                echo 'FILE BERHASIL DI UPLOAD';
                                            }else{
                                                echo 'GAGAL MENGUPLOAD GAMBAR';
                                            }
                                        }else{
                                            echo 'UKURAN FILE TERLALU BESAR';
                                        }
                                    }else{
                                        echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
                                    }
                                }
                                ?>

                                <h4>Publikasi</h4>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input class="form-control" type="text" placeholder="Judul Berita">
                                    </div>
                                    <div class="col-md-12">
                                        <textarea class="form-control" name="deskripsi" id="deskripsiproduk" rows="3" placeholder="Isi Deskripsi Berita"></textarea>
                                    </div>

                                    <div class="col-md-12">
                                        <label for="fileberita">File Berita</label>
                                        <div class="col-md-12">
                                            <input type="file" name="fileberita" class="custom-file-input" id="uploadvideo">
                                            <label class="custom-file-label" for="uploadvideo">Tambah Berita</label>
                                        </div><br>
                                    </div>

                                    <div class="col-lg-12">
                                        <button class="w3-btn w3-ripple w3-green" type="submit">Simpan</button>
                                        <button class="w3-btn w3-ripple w3-blue">Reset</button>
                                    </div>     
                                </div>

                            <!-- TABEL PUBLIKASI -->
                                <div id="diskus" class="container tab-pane active">
                                <div class="table-responsive">
                                   <h2><center>PUBLIKASI</center></h2>
                                    <table class="table table-bordered">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>No</th>
                                                <th>Judul</th>
                                                <th>Deskripsi</th>
                                                <th>Gambar</th>
                                                <th>Tanggal Posting</th>
                                                <th>Tanggal Acc</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                    <tbody>
                                    <?php
                                    include('koneksi.php');
                                    $sql = mysqli_query($conn,"SELECT * FROM publikasi");
                                    if(mysqli_num_rows($sql)>0){ ?>
                                                <?php
                                                    $no = 1;
                                                    while($data = mysqli_fetch_array($sql)){
                                                ?>
                                                <tr>
                                                    <td> <?php echo $no  ?></td>
                                                    <td> <?php echo $data["judul_artikel"]  ?></td>
                                                    <td> <?php echo $data["isi_artikel"]  ?></td>
                                                    <td> <?php echo $data["file_artikel"]  ?></td>
                                                    <td> <?php echo $data["tgl_posting"]  ?></td>
                                                    <td> <?php echo $data["tgl_acc"] ?>< </td>
                                                    <td> <?php echo $data["status"]  ?></td>
                                                    <td>
                                                        <button class="btn"><i class="fa fa-edit"></i></button>
                                                        <button class="btn"><i class="fa fa-trash"></i></button>
                                                    </td>
                                                </tr>
                                               <?php $no++; } ?>
                                               <?php } ?>
                                               </tbody>                                         
                                        </table>
                                    </div>
                                </div>

                            </div>


<!-- PENGATURAN AKUN -->
                            <div class="tab-pane fade" id="pengaturan-akun-tab" role="tabpanel" aria-labelledby="pengaturan-akun-nav">
                                <h4>Akun</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" placeholder="Nama Akun">
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" placeholder="Nama Toko">
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" placeholder="Nomor Anggota">
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" placeholder="Email">
                                    </div>
                                    <div class="col-md-12">
                                        <input class="form-control" type="text" placeholder="Alamat">
                                    </div>
                                    <!-- <div class="col-md-12">
                                        <button class="btn">Update Akun</button>
                                        <br><br>
                                    </div> -->
                                </div>
                                <h4>Password</h4>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input class="form-control" type="password" placeholder="Current Password">
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" placeholder="Password Baru">
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" placeholder="Konfirmasi Password">
                                    </div>
                                    <div class="col-md-12">
                                        <button class="w3-btn w3-ripple w3-green">Simpan</button>
                                        <button class="w3-btn w3-ripple w3-blue">Reset</button>
                                    </div>
                                </div>
                            </div>
                            <?php

include('koneksi.php');
if(strlen($_SESSION['alogin'])==0)
{ 
 header('location:index.php');
}
else{ 

 if(isset($_POST['submit']))
 {
  $vehicletitle=$_POST['vehicletitle'];
  $vimage1=$_FILES["img1"]["name"];
  $vimage2=$_FILES["img2"]["name"];
  $vimage3=$_FILES["img3"]["name"];
  $vimage4=$_FILES["img4"]["name"];
  $vimage5=$_FILES["img5"]["name"];

  move_uploaded_file($_FILES["img1"]["tmp_name"],"img/vehicleimages/".$_FILES["img1"]["name"]);
  move_uploaded_file($_FILES["img2"]["tmp_name"],"img/vehicleimages/".$_FILES["img2"]["name"]);
  move_uploaded_file($_FILES["img3"]["tmp_name"],"img/vehicleimages/".$_FILES["img3"]["name"]);
  move_uploaded_file($_FILES["img4"]["tmp_name"],"img/vehicleimages/".$_FILES["img4"]["name"]);
  move_uploaded_file($_FILES["img5"]["tmp_name"],"img/vehicleimages/".$_FILES["img5"]["name"]);

  $sql="INSERT INTO tblvehicles(VehiclesTitle,Vimage1,Vimage2,Vimage3,Vimage4,Vimage5) VALUES(:vehicletitle,:vimage1,:vimage2,:vimage3,:vimage4,:vimage5)";

  $query = $dbh->prepare($sql);
  $query->bindParam(':vehicletitle',$vehicletitle,PDO::PARAM_STR);
  $query->bindParam(':vimage1',$vimage1,PDO::PARAM_STR);
  $query->bindParam(':vimage2',$vimage2,PDO::PARAM_STR);
  $query->bindParam(':vimage3',$vimage3,PDO::PARAM_STR);
  $query->bindParam(':vimage4',$vimage4,PDO::PARAM_STR);
  $query->bindParam(':vimage5',$vimage5,PDO::PARAM_STR);
  $query->execute();
  $lastInsertId = $dbh->lastInsertId();
  if($lastInsertId)
  {
   $msg="Vehicle posted successfully";
  }
  else 
  {
   $error="Something went wrong. Please try again";
  }
 }

 ?>
 <!DOCTYPE html>
 <html>
 <head>
  <title>Add Gambar</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="bootstrap/js/bootstrap.min.js"></script>
 </head>
 <body>
  <nav class="navbar navbar-default navbar-static-top">
   <div class="container-fluid">
    <div class="navbar-header">
     <a class="navbar-brand" href="https://www.tutorialswb.com/">TutorialsWB</a>
     <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
     </ul>
    </div>
   </div>
  </nav>
  <div class="container">
   <div class="page-header">
    <h1 class="h2">Add Vehicle<a class="btn btn-success" href="view-vehicle.php" style="margin-left: 770px;"><span class="glyphicon glyphicon-user"></span>&nbsp; View Vehicles</a></h1><hr>
   </div>
   <?php if($error){?>
    <div class="alert alert-danger">
     <span class="glyphicon glyphicon-info-sign"></span>ERROR : <strong><?php echo htmlentities($error); ?></strong>
    </div>
   <?php } 
   else if($msg){?>
    <div class="alert alert-success">
     <span class="glyphicon glyphicon-info-sign"></span>SUCCESS : <strong><?php echo htmlentities($msg); ?></strong>
     </div><?php }?>
     

     <form method="post" enctype="multipart/form-data">
      
      <div class="form-group">
       <label for="gambar1">Enter Your Title Vehicle</label>
       <input type="text" class="form-control" name="vehicletitle" placeholder="Enter Your Title Vehicle" required="">
      </div>
      <div class="form-group">
       <label for="gambar1">upload your image 1</label>
       <input type="file" class="form-control" name="img1" required="">
      </div> 
      <div class="form-group">
       <label for="gambar1">upload your image 2</label>
       <input type="file" class="form-control" name="img2" required="">
      </div>
      <div class="form-group">
       <label for="gambar1">upload your image 3</label>
       <input type="file" class="form-control" name="img3" required="">
      </div>
      <div class="form-group">
       <label for="gambar1">upload your image 4</label>
       <input type="file" class="form-control" name="img4" required="">
      </div>
      <div class="form-group">
       <label for="gambar1">upload your image 5</label>
       <input type="file" class="form-control" name="img5" required="">
      </div>

      <div class="form-group">
       <button class="btn btn-default" type="reset">Cancel</button>&nbsp;
       <button class="btn btn-primary" name="submit" type="submit" >Save changes</button>

      </div>
     </form>
    </div>
   </body>
   </html>
   <?php } ?> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Footer Start -->
        <div class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <img src="img/logocbd.png" alt="Product Image">
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h2>CBD Discus</h2>
                            <ul>
                                <li><a href="#">Tentang CBD Discus</a></li>
                                <li><a href="#">Artikel</a></li>
                                <li><a href="#">Publikasi</a></li>
                                <li><a href="#">Forum Diskusi</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h2>Jual</h2>
                            <ul>
                                <li><a href="#">Aquarium</a></li>
                                <li><a href="#">Discus</a></li>
                                <li><a href="#">Obat-Obatan</a></li>
                                <li><a href="#">Pangan</a></li>
                                <li><a href="#">Tanaman Hias</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h2>Bantuan dan Panduan</h2>
                            <ul>
                                <li><a href="#">Syarat dan Ketentuan</a></li>
                                <li><a href="#">Kebijakan Privasi</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                
            </div>
        </div>
        <!-- Footer End -->
        
        <!-- Footer Bottom Start -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 copyright">
                        <p>Copyright &copy; <a href="https://htmlcodex.com">HTML Codex</a>. All Rights Reserved</p>
                    </div>

                    <div class="col-md-6 template-by">
                        <p>Template By <a href="https://htmlcodex.com">HTML Codex</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom End -->       
        
        <!-- Back to Top -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/slick/slick.min.js"></script>
        
        <!-- Template Javascript -->
        <script src="js/main.js"></script>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </body>
</html>
