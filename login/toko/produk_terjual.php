<?php require_once "header.php"; ?>
<?php require_once "sidebar.php"; ?>

<?php
$sql = mysqli_query($conn, "SELECT produk.*, harga.*, kategori_produk.* FROM produk INNER JOIN harga ON produk.id_harga = harga.id_harga INNER JOIN kategori_produk ON produk.id_kategori = kategori_produk.id_kategori WHERE kategori_produk.id_kategori=1");

if (isset($_GET['kategori'])) {
    $kategori = $_GET['kategori'];

    $sql = mysqli_query($conn, "SELECT produk.*, harga.*, kategori_produk.* FROM produk INNER JOIN harga ON produk.id_harga = harga.id_harga INNER JOIN kategori_produk ON produk.id_kategori = kategori_produk.id_kategori WHERE kategori_produk.id_kategori=$kategori");
}
?>

<title>Produk Terjual</title>

<!-- add vechiles -->
<div class="col-sm-10 mb-5">
    <div class="container my-4">
        <div class="row product-detail-bottom">
            <div class="col-lg-12">
                <div class="dropdown">
                    <button class="btn btn-outline-danger btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                        Filter Kategori
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <?php
                        $query = mysqli_query($conn, "SELECT * FROM kategori_produk");
                        while ($d = mysqli_fetch_array($query)) {
                        ?>
                            <li><a class="dropdown-item" href="?kategori=<?= $d['id_kategori']; ?>"><?= $d['nama_kategori']; ?></a></li>
                        <?php } ?>
                    </ul>
                </div>


                <div class="tab-content">
                    <div id="diskus" class="container tab-pane active">
                        <div class="table-responsive">
                            <h4>
                                <?php
                                if (isset($_GET['kategori'])) {
                                    $query = mysqli_query($conn, "SELECT nama_kategori FROM kategori_produk WHERE id_kategori = $_GET[kategori]");
                                    $getNamaKategori = mysqli_fetch_array($query);
                                ?>
                                    <center><?= strtoupper($getNamaKategori['nama_kategori']); ?></center>
                                <?php } else { ?>
                                    <center>DISCUS</center>
                                <?php } ?>
                            </h4>
                            <table class="table table-bordered mt-4">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>No</th>
                                        <th>Produk Kios</th>
                                        <th>Harga</th>
                                        <th>Ukuran</th>
                                        <th>Stok</th>
                                        <th>Rayakan</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    while ($data = mysqli_fetch_array($sql)) {
                                    ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $data["nama_produk"] ?></td>
                                            <td><?= $data["harga"] ?></td>
                                            <td><?= $data["ukuran"] ?></td>
                                            <td><?= $data["stok"] ?></td>
                                            <td><?= $data["rayakan"] ?></td>
                                            <td><?= $data["ket"] ?></td>
                                            <td>
                                                <button class="btn"><i class="fa fa-edit"></i></button>
                                                <button class="btn"><i class="fa fa-trash"></i></button>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once "footer.php"; ?>