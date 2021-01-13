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
        <style> 
            body { 
                z-index: 111; 
            }
            #popup { 
                width: 550px; 
                height: 250px; 
                background-image: url(https://images-na.ssl-images-amazon.com/images/I/31Xl85rQxbL._SY355_.png); 
                background-repeat: no-repeat; 
                background-position: center; 
                background-size: cover; 
                position: absolute; 
                top: 50%; 
                left: 50%; 
                transform: translate(-50%, -50%); 
                box-shadow: 2px 2px 5px 3px white; 
            }
            #emailId { 
                text-align: center; 
                position: absolute; 
                left: 25%; 
                top: 25%; 
            } 
            .submitId { 
                position: relative; 
                top: 130px; 
                left: 180px; 
            } 
        </style>  
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
                            <a href="#" type="button" class="btn cart" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <span>Daftar</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bottom Bar End -->      

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
            <select name="level" id="level">
                <option value="1">Admin</option>
                <option value="2">User</option>
            </select>
            <div class="modal-footer">
                <input type="submit" class="btn btn-primary" value="Buat Akun">
            </div>
         </form>
        <!-- Login End -->
      </div>
    </div>
  </div>
</div>


    <!-- Main Slider Start -->
        <div class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-9">
                        <div class="header-slider normal-slider">
                            <div class="header-slider-item">
                                <img src="img/slider-1.jpg" alt="Slider Image" />
                                <div class="header-slider-caption">
                                    <p>Some text goes here that describes the image</p>
                                    <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Shop Now</a>
                                </div>
                            </div>
                            <div class="header-slider-item">
                                <img src="img/slider-2.jpg" alt="Slider Image" />
                                <div class="header-slider-caption">
                                    <p>Some text goes here that describes the image</p>
                                    <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Shop Now</a>
                                </div>
                            </div>
                            <div class="header-slider-item">
                                <img src="img/slider-3.jpg" alt="Slider Image" />
                                <div class="header-slider-caption">
                                    <p>Some text goes here that describes the image</p>
                                    <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="header-img">
                            <div class="img-item">
                                <img src="img/category-1.jpg" />
                                <a class="img-text" href="detailberita.php">
                                    <p>BERITA TERBARU</p>
                                </a>
                            </div>
                            <div class="img-item">
                                <img src="img/category-2.jpg" />
                                <a class="img-text" href="detailartikel.php">
                                    <p>ARTIKEL TERBARU</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Slider End -->      
        
        <!-- Brand Start -->
        <div class="brand">
            <div class="container-fluid">
                <div class="brand-slider">
                    <div class="brand-item"><a><img src="img/brand-1.png" alt="">Nama Toko</a></div>
                    <div class="brand-item"><a><img src="img/brand-2.png" alt="">Nama Toko</a></div>
                    <div class="brand-item"><a><img src="img/brand-3.png" alt="">Nama Toko</a></div>
                    <div class="brand-item"><a><img src="img/brand-4.png" alt="">Nama Toko</a></div>
                    <div class="brand-item"><a><img src="img/brand-5.png" alt="">Nama Toko</a></div>
                    <div class="brand-item"><a><img src="img/brand-6.png" alt="">Nama Toko</a></div>
                </div>
            </div>
        </div>
        <!-- Brand End -->      

        <!-- Category Start-->
        <div class="category">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <div class="category-item ch-400">
                            <img src="img/discus.png" />
                            <a class="category-name" href="detail.php">
                                <p>Kategori Discus</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="category-item ch-250">
                            <img src="img/aquarium.jpg" />
                            <a class="category-name" href="detail.php">
                                <p>kategori Aquarium</p>
                            </a>
                        </div>
                        <div class="category-item ch-150">
                            <img src="img/tanamanhias.png" />
                            <a class="category-name" href="detail.php">
                                <p>Kategori Tanaman Hias</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="category-item ch-150">
                            <img src="img/obat.jpg" />
                            <a class="category-name" href="detail.php">
                                <p>Kategori Obat</p>
                            </a>
                        </div>
                        <div class="category-item ch-250">
                            <img src="img/peralatan.png" />
                            <a class="category-name" href="detail.php">
                                <p>Kategori Peralatan</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="category-item ch-400">
                            <img src="img/makanan.jpg" />
                            <a class="category-name" href="detail.php">
                                <p>Kategori Pangan</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Category End-->             
        
        <!-- Featured Product Start -->
        <div class="featured-product product">
            <div class="container-fluid">
                <div class="section-header">
                    <h1>Produk Terbaru</h1>
                </div>
                <div class="row align-items-center product-slider product-slider-4">
                    <div class="col-lg-3">
                        <div class="product-item">
                            <div class="product-title">
                                <a href="produk.php">Product Name</a>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <div class="product-image">
                                <a href="product-detail.html">
                                    <img src="img/product-1.jpg" alt="Product Image">
                                </a>
                                <div class="product-action">
                                    <a href="cart.php"><i class="fa fa-cart-plus"></i></a>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                            <div class="product-price">
                                <h3><span>$</span>99</h3>
                                <a class="btn" href="login/index.php"><i class="fa fa-shopping-cart"></i>Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-item">
                            <div class="product-title">
                                <a href="produk.php">Product Name</a>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <div class="product-image">
                                <a href="product-detail.html">
                                    <img src="img/product-2.jpg" alt="Product Image">
                                </a>
                                <div class="product-action">
                                    <a href="cart.php"><i class="fa fa-cart-plus"></i></a>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                            <div class="product-price">
                                <h3><span>$</span>99</h3>
                                <a class="btn" href="login/index.php"><i class="fa fa-shopping-cart"></i>Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-item">
                            <div class="product-title">
                                <a href="produk.php">Product Name</a>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <div class="product-image">
                                <a href="product-detail.html">
                                    <img src="img/product-3.jpg" alt="Product Image">
                                </a>
                                <div class="product-action">
                                    <a href="cart.php"><i class="fa fa-cart-plus"></i></a>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                            <div class="product-price">
                                <h3><span>$</span>99</h3>
                                <a class="btn" href="login/index.php"><i class="fa fa-shopping-cart"></i>Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-item">
                            <div class="product-title">
                                <a href="produk.php">Product Name</a>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <div class="product-image">
                                <a href="product-detail.html">
                                    <img src="img/product-4.jpg" alt="Product Image">
                                </a>
                                <div class="product-action">
                                    <a href="cart.php"><i class="fa fa-cart-plus"></i></a>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                            <div class="product-price">
                                <h3><span>$</span>99</h3>
                                <a class="btn" href="login/index.php"><i class="fa fa-shopping-cart"></i>Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-item">
                            <div class="product-title">
                                <a href="produk.php">Product Name</a>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <div class="product-image">
                                <a href="product-detail.html">
                                    <img src="img/product-5.jpg" alt="Product Image">
                                </a>
                                <div class="product-action">
                                    <a href="cart.php"><i class="fa fa-cart-plus"></i></a>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                            <div class="product-price">
                                <h3><span>$</span>99</h3>
                                <a class="btn" href="login/index.php"><i class="fa fa-shopping-cart"></i>Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Featured Product End -->       
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
                        <p>Copyright &copy; CBD Discus. All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom End -->       
        
        <!-- Back to Top -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

        <div class="POPmain" style="display: none;"> 
            <div id="popup"> 
                <img src="https://images.app.goo.gl/7FUhEB2jBqr64nnv9">
                <input type="email"
                    class= 
        "text-center w-50 form-control mt-5"
                    id="emailId"
                    placeholder= 
        "type your email here..." /> 
                <button class= 
"submitId btn btn-primary text-center font-weight-bold mt-5"> 
                    Keluar
                </button> 
            </div> 
        </div> 

        <!-- Optional JavaScript --> 
        <!-- jQuery first,then Popper.js,then Bootstrap JS --> 
        <script src= "https://code.jquery.com/jquery-3.2.1.slim.min.js"></script> 

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script> 
        
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/slick/slick.min.js"></script>
        
        <!-- Template Javascript -->
        <script src="js/main.js"></script>
        <script> 
            // When doument is ready 
            $(document).ready(function () { 
                // SetTimeout function 
                // Will execute the function 
                // after 3 sec 
                setTimeout(function () { 
                    $(".POPmain").css("display", "block"); 
                }, 500); 
            }); 
            $(".submitId").click(function () { 
                $(".POPmain").css("display", "none"); 
            }); 
        </script> 
    </body>
</html>