<?php
require_once "header.php";
require_once "sidebar.php";

include('koneksi.php');
if (isset($_POST['upload'])) {
    $ekstensi_diperbolehkan = array('png', 'jpg');
    $name          = $_FILES['file']['name'];
    $deskripsi              = $_FILES['file']['deskripsi'];
    $x                      = explode('.', $name);
    $ekstensi               = strtolower(end($x));
    $ukuran                 = $_FILES['file']['size'];
    $file_tmp               = $_FILES['file']['tmp_name'];


    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
        if ($ukuran < 1044070) {
            move_uploaded_file($file_tmp, 'file/' . $name);
            $query = mysqli_query("INSERT INTO artikel VALUES(NULL, '$name', 'deskripsi')");
            if ($query) {
                echo 'FILE BERHASIL DI UPLOAD';
            } else {
                echo 'GAGAL MENGUPLOAD GAMBAR';
            }
        } else {
            echo 'UKURAN FILE TERLALU BESAR';
        }
    } else {
        echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
    }
}
?>

<title>Tambah Artikel</title>

<!-- add vechiles -->
<div class="col-sm-10 mb-5">
    <div class="container py-4">
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
        </div>
        <br>

        <!-- TABEL ARTIKEL -->
        <div id="diskus" class="container tab-pane active">
            <div class="table-responsive">
                <h2>
                    <center>ARTIKEL</center>
                </h2>
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
                        <?php include('koneksi.php');
                        $sql = $conn->query("SELECT * FROM artikel");
                        if (mysqli_num_rows($sql) > 0) {

                            $no = 1;
                            while ($data = mysqli_fetch_array($sql)) { ?>
                                <tr>
                                    <td> <?php echo $no  ?></td>
                                    <td> <?php echo $data["judul_artikel"]  ?></td>
                                    <td> <?php echo $data["isi_artikel"]  ?></td>
                                    <td> <?php echo $data["file_artikel"]  ?></td>
                                    <td> <?php echo $data["tgl_posting"]  ?></td>
                                    <td> <?php echo $data["tgl_acc"] ?>< </td> <td> <?php echo $data["status"]  ?></td>
                                    <td>
                                        <button class="btn"><i class="fa fa-edit"></i></button>
                                        <button class="btn"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                            <?php $no++;
                            } ?>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php require_once "footer.php"; ?>