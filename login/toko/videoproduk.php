<?php
session_start();
error_reporting(0);
include('config.php');
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