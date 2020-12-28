<?php require_once "header.php"; ?>
<?php require_once "sidebar.php"; ?>

<title>Pegaturan Akun</title>

<div class="col-sm-10 mb-5">
    <div class="container py-4">
        <h4>Akun</h4>
        <div class="row">
            <div class="col-md-6 mb-3">
                <input class="form-control" type="text" placeholder="Nama Akun">
            </div>
            <div class="col-md-6 mb-3">
                <input class="form-control" type="text" placeholder="Nama Toko">
            </div>
            <div class="col-md-6 mb-3">
                <input class="form-control" type="text" placeholder="Nomor Anggota">
            </div>
            <div class="col-md-6 mb-3">
                <input class="form-control" type="text" placeholder="Email">
            </div>
            <div class="col-md-12 mb-3">
                <input class="form-control" type="text" placeholder="Alamat">
            </div>
            <!-- <div class="col-md-12">
            <button class="btn">Update Akun</button>
            <br><br>
        </div> -->
        </div>
        <h4>Password</h4>
        <div class="row">
            <div class="mb-3 col-md-12">
                <input class="form-control" type="password" placeholder="Current Password">
            </div>
            <div class="mb-3 col-md-6">
                <input class="form-control" type="text" placeholder="Password Baru">
            </div>
            <div class="mb-3 col-md-6">
                <input class="form-control" type="text" placeholder="Konfirmasi Password">
            </div>
            <div class="col-md-12 mb-3">
                <button class="btn btn-outline-primary">Simpan</button>
                <button class="btn btn-outline-secondary">Cancel</button>
            </div>
        </div>
    </div>
</div>

<?php require_once "footer.php"; ?>