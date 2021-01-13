    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('admin')?>">
        <div class="sidebar-brand-icon rotate-n-15">
          <img src="">
        </div>
        <div class="sidebar-brand-text mx-3">ADMIN Discus</div>
      </a>

<!-- Menu sidebar-->
      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Administrator
      </div>

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin')?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>My Profile</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Keranjangan
      </div>

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('keranjang')?>">
          <i class="fas fa-fw fa-newspaper"></i>
          <span>Keranjang</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Publikasi
      </div>

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('artikel')?>">
          <i class="fas fa-fw fa-newspaper"></i>
          <span>Artikel</span></a>
      </li>

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('publikasi')?>">
          <i class="fas fa-fw fa-newspaper"></i>
          <span>Publikasi</span></a>
      </li>

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('komentar')?>">
          <i class="fas fa-fw fa-newspaper"></i>
          <span>Komentar</span></a>
      </li>

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('forum')?>">
          <i class="fas fa-fw fa-newspaper"></i>
          <span>Forum</span></a>
      </li>

       <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Produk
      </div>

      <!-- Nav Item - Komentar -->
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('produk')?>">
          <i class="far fa-fw fa-comment-alt"></i>
          <span>Produk</span></a>
      </li>

            <!-- Nav Item - review -->
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('review')?>">
          <i class="far fa-fw fa-comment-alt"></i>
          <span>Review</span></a>
      </li>

      <!-- Nav Item - Komentar -->
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('diskon')?>">
          <i class="far fa-fw fa-comment-alt"></i>
          <span>Diskon</span></a>
      </li>

<!-- Nav Item - Komentar -->
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('harga')?>">
          <i class="far fa-fw fa-comment-alt"></i>
          <span>Harga</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Kategori Produk
      </div>

      <!-- Nav Item - Foto -->
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('kategori')?>">
          <i class="far fa-fw fa-list-alt"></i>
          <span>Kategori</span></a>
      </li>

      <!-- Nav Item - Foto -->
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('jenis')?>">
          <i class="far fa-fw fa-list-alt"></i>
          <span>Jenis Produk</span></a>
      </li>

      <!-- Nav Item - Video -->
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('sub')?>">
          <i class="far fa-fw fa-list-alt"></i>
          <span>Sub Jenis</span></a>
      </li>

       <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Data Master
      </div>

      <!-- Nav Item - Profile -->
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('akun')?>">
          <i class="far fa-fw fa-user-circle"></i>
          <span>Akun</span></a>
      </li>

            <!-- Nav Item - Toko -->
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('toko')?>">
          <i class="far fa-fw fa-user-circle"></i>
          <span>Toko</span></a>
      </li>


      <!-- Nav Item - Data Struktural -->
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('level')?>">
          <i class="fab fa-fw fa-elementor"></i>
          <span>Level Akun</span></a>
      </li>

       <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Keluar
      </div>

      <!-- Nav Item - Profile -->
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('auth/logout'); ?>">
          <i class="fas fa-fw fa-sign-out-alt"></i>
          <span>Logout</span></a>
      </li>
<!-- Akhir menu sidebar-->

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->