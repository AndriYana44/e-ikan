<?php
require_once "header.php";
require_once "sidebar.php";
?>

<?php
include('koneksi.php');

if (isset($_POST['submit'])) {
    $vehicletitle = $_POST['vehicletitle'];
    $vimage1 = $_FILES["img1"]["name"];
    $vimage2 = $_FILES["img2"]["name"];
    $vimage3 = $_FILES["img3"]["name"];
    $vimage4 = $_FILES["img4"]["name"];
    $vimage5 = $_FILES["img5"]["name"];

    move_uploaded_file($_FILES["img1"]["tmp_name"], "img/" . $vimage1);
    move_uploaded_file($_FILES["img2"]["tmp_name"], "img/" . $vimage2);
    move_uploaded_file($_FILES["img3"]["tmp_name"], "img/" . $vimage3);
    move_uploaded_file($_FILES["img4"]["tmp_name"], "img/" . $vimage4);
    move_uploaded_file($_FILES["img5"]["tmp_name"], "img/" . $vimage5);

    $sql = mysqli_query($conn, "INSERT INTO tblvehicles SET vehiclesTitle='$vehicletitle', vimage1='$vimage1', vimage2='$vimage2', vimage3='$vimage3', vimage4='$vimage4', vimage5='$vimage5'");

    if ($sql == TRUE) {
        $msg = "Vehicle posted successfully";
    } else {
        $error = "Something went wrong. Please try again";
    }
}

?>

<title>Tambah Vahicle</title>

<!-- add vechiles -->
<div class="col-sm-10 mb-5 py-4">

    <div class="row justify-content-center">
        <div class="col-sm-10">
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-6">
                        <h1 class="h2">Add Vehicle</h1>
                    </div>
                    <div class="col-sm-6">
                        <a class="btn btn-danger btn-sm float-end" href="view-vehicle.php">View Vehicles</a>
                    </div>
                </div>
                <hr>
            </div>
            <?php
            if (isset($error)) {
            ?>
                <div class="alert alert-danger">
                    <span class="glyphicon glyphicon-info-sign"></span>ERROR : <strong><?php echo htmlentities($error); ?></strong>
                </div>
            <?php } else if (isset($msg)) { ?>
                <div class="alert alert-success">
                    <span class="glyphicon glyphicon-info-sign"></span>SUCCESS : <strong><?php echo htmlentities($msg); ?></strong>
                </div><?php } ?>


            <form method="post" enctype="multipart/form-data">

                <div class="mb-3">
                    <label class="form-label" for="gambar1">Enter Your Title Vehicle</label>
                    <input type="text" class="form-control" name="vehicletitle" placeholder="Enter Your Title Vehicle" required="">
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label class="form-label" for="gambar1">upload your image 1</label>
                            <input type="file" class="form-control" name="img1" required="">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label class="form-label" for="gambar1">upload your image 2</label>
                            <input type="file" class="form-control" name="img2" required="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label class="form-label" for="gambar1">upload your image 3</label>
                            <input type="file" class="form-control" name="img3" required="">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label class="form-label" for="gambar1">upload your image 4</label>
                            <input type="file" class="form-control" name="img4" required="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label class="form-label" for="gambar1">upload your image 5</label>
                            <input type="file" class="form-control" name="img5" required="">
                        </div>
                    </div>
                </div>
                <div class="mt-3 pb-3">
                    <button class="btn btn-success btn-sm" name="submit" type="submit">Save changes</button>
                    <button class="btn btn-secondary btn-sm" type="reset">Cancel</button>&nbsp;
                </div>
            </form>
        </div>
    </div>
</div>
</div>

<?php require_once "footer.php"; ?>