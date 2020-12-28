<?php require_once "header.php"; ?>
<?php require_once "sidebar.php"; ?>

<title>Tambah Produk</title>

<!-- add vechiles -->
<div class="col-sm-10 mb-5 text-secondary">
    <div class="container my-4">
        <h5 class="text-secondary">Gambar Produk</h5>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-12">
                    <small class="text-secondary">Format gambar .jpg .jpeg .png dan ukuran minimum 300 x 300px (Untuk gambar optimal gunakan ukuran minimum 700 x 700 px)</small>
                    <hr>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Gambar 1</label>
                                <input class="form-control" name="gambar1" type="file" id="formFile">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Gambar 2</label>
                                <input class="form-control" name="gambar2" type="file" id="formFile">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Gambar 3</label>
                                <input class="form-control" name="gambar3" type="file" id="formFile">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Gambar 4</label>
                                <input class="form-control" name="gambar4" type="file" id="formFile">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>

            <h5 class="text-secondary">Informasi Produk</h5>
            <hr>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <input class="form-control" name="produk" type="text" placeholder="Nama Produk">
                </div>
                <div class="col-md-6 mb-3">
                    <select name="kategori" class="custom-select form-control">
                        <option selected>- Pilih Kategori -</option>
                        <?php
                        $query = mysqli_query($conn, "SELECT * FROM kategori_produk");
                        while ($d = mysqli_fetch_array($query)) {
                        ?>
                            <option value="<?= $d['id_kategori']; ?>"><?= $d['nama_kategori']; ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <hr>

            <h5 class="text-secondary">Detail Produk</h5>
            <hr>
            <div class="row">
                <div class="col-md-12">
                    <label for="deskripsiproduk" class="mb-3">Deskripsi Produk</label>
                    <textarea class="form-control" name="deskripsi" id="deskripsiproduk" rows="3"></textarea>
                </div>
                <!-- <div class="col-md-12">
            <label for="videoproduk">Video Produk</label>
            <div class="col-md-12">
                <input type="file" name="video" class="custom-file-input" id="uploadvideo">
                <label class="custom-file-label" for="uploadvideo">Tambah Produk</label>
            </div>
        </div> -->
                <div class="col-md-6">
                    <br>
                    <div class="checkout__input">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Rp</span>
                            </div>
                            <input type="text" class="form-control" placeholder="Harga Satuan" id="hargasatuan" name="hargasatuan">
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <br>
                    <div class="checkout__input">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Rp</span>
                            </div>
                            <input type="text" class="form-control" placeholder="Harga Grosir" id="hargagrosir" name="hargagrosir">
                        </div>
                    </div>
                </div>
            </div>
            <hr>

            <h5 class="text-secondary">Status Produk</h5>
            <div class="row">
                <div class="col-sm-4">
                    <input type="number" class="form-control" name="stock" autocomplete="off" placeholder="Stok Produk">
                </div>
                <div class="col-sm-4">
                    <input type="number" class="form-control" name="ukuran" autocomplete="off" placeholder="Ukuran Produk">
                </div>
                <div class="col-sm-4">
                    <input type="number" class="form-control" name="rayakan" autocomplete="off" placeholder="Rayakan">
                </div>
            </div>
            <div class="mb-3 py-3 mt-3">
                <button class="btn btn-success" name="simpan">Simpan</button>
                <button class="btn btn-secondary">Batal</button>
            </div>
        </form>
        <?php
        include('koneksi.php');
        if (isset($_POST['simpan'])) {
            $nama_file1      = $_FILES['gambar1']['name'];
            $ukuran_file1    = $_FILES['gambar1']['size'];
            $tipe_file1      = $_FILES['gambar1']['type'];
            $tmp_file1       = $_FILES['gambar1']['tmp_name'];

            $nama_file2      = $_FILES['gambar2']['name'];
            $ukuran_file2    = $_FILES['gambar2']['size'];
            $tipe_file2      = $_FILES['gambar2']['type'];
            $tmp_file2       = $_FILES['gambar2']['tmp_name'];

            $nama_file3      = $_FILES['gambar3']['name'];
            $ukuran_file3    = $_FILES['gambar3']['size'];
            $tipe_file3      = $_FILES['gambar3']['type'];
            $tmp_file3       = $_FILES['gambar3']['tmp_name'];

            $nama_file4      = $_FILES['gambar4']['name'];
            $ukuran_file4    = $_FILES['gambar4']['size'];
            $tipe_file4      = $_FILES['gambar4']['type'];
            $tmp_file4       = $_FILES['gambar4']['tmp_name'];

            $produk         = $_POST['produk'];
            $kategori       = $_POST['kategori'];
            $deskripsi      = $_POST['deskripsi'];
            $hargasatuan    = $_POST['hargasatuan'];
            $hargagrosir    = $_POST['hargagrosir'];
            $stock          = $_POST['stock'];
            $ukuran         = $_POST['ukuran'];
            $rayakan        = $_POST['rayakan'];
            $tgl            = date("Y-m-d");

            $query = mysqli_query($conn, "INSERT INTO produk SET nama_produk='$produk', gambar1='$nama_file1', gambar2='$nama_file2',gambar3='$nama_file3',gambar4='$nama_file4',ukuran='$ukuran',stok='$stock',ket='$deskripsi',rayakan='$rayakan',id_kategori='$kategori', harga_satuan='$hargasatuan', harga_grosir='$hargagrosir'");

            if ($query == TRUE) {
                echo "<script>
                        alert('Data Berhasil ditambahkan!');
                      </script>";
            } else {
                echo "<script>
                        alert('Data Gagal ditambahkan!');
                      </script>";
            }
        }
        ?>
    </div>
</div>

<?php require_once "footer.php"; ?>