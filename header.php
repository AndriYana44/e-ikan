<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>CBD DISCUS</title>
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

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <!-- Nav Bar Start -->
        <div class="nav">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                    <a href="#" class="navbar-brand">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav ml-auto">
                            <a href="index.php" class="nav-item nav-link active">Tentang CBD Discus</a>
                            <a href="artikel.php" class="nav-item nav-link">Artikel</a>
                            <a href="berita.php" class="nav-item nav-link">Publikasi</a>
                            <a href="#" class="nav-item nav-link">Forum Diskusi</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Nav Bar End -->      
        
        <!-- Bottom Bar Start -->
        <div class="bottom-bar">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-2">
                        <div class="logo">
                            <a href="index.php">
                                <img src="img/logocbd.png" alt="Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="search">
                            <input type="text" placeholder="Search">
                            <button><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                    <div class="col-md-1">
                      <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="fa fa-shopping-cart"></i></a>
                            <div class="dropdown-menu">
                                <img src="img/kosong.png" class="dropdown-item"> 
                                <br><h6>Keranjang Kamu Masih Kosong !!!
                                <br>Yuk, Kita isi dengan produk yang kamu sukai!!!</h6>
                                <a href="login/index.php" class="dropdown-item btn wishlist">Masuk dulu ya</a>
                            </div>
                       </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="user">
                            <a href="login/index.php" class="btn wishlist">
                                <span>Masuk</span>
                            </a>
                            <a href="#" class="btn cart" data-toggle="modal" data-target="#exampleModal">
                                <span>Daftar</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bottom Bar End -->   

        <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Daftar Akun</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Login Start -->
                            <form action="simpanakun.php" method="post">
                                    <label>Nama Akun</label>
                                    <input class="form-control" type="text" name="username" placeholder="Nama Akun">
                                    <label>E-mail</label>
                                    <input class="form-control" type="text" name="email" placeholder="E-mail">
                                    <label>No. HP</label>
                                    <input class="form-control" type="text" name="no_hp" placeholder="Mobile No">
                                    <label>Password</label>
                                    <input class="form-control" type="text" name="password" placeholder="Password">
                                    <label>Alamat Lengkap</label>
                                    <textarea class="form-control" name="alamat"></textarea>
                                    <input class="form-control" type="hidden" name="tgl_buat" value="<?= date('d-m-Y'); ?>">
                                    <input class="form-control" type="hidden" name="id_level" value="1">
                                  <div class="modal-footer">
                                    <input type="submit" class="btn btn-primary" value="Buat Akun">
                                  </div>
                             </form>
        <!-- Login End -->
      </div>
    </div>
  </div>
</div>    