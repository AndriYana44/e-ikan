<?php
session_start();
error_reporting(0);
include('config.php');
if(strlen($_SESSION['alogin'])==0)
{	
	header('location:index.php');
}


?>
<html>
<head>
	<title>Edit Image</title>
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
			<h1 class="h2">&nbsp; List Users<a class="btn btn-success" href="view-vehicle.php" style="margin-left: 770px;"><span class="glyphicon glyphicon-user"></span>&nbsp; Back View Vehicle</a></h1><hr>
		</div>
		
		
		<?php if($msg){?>
			<div class="alert alert-success">
				
				<span class="glyphicon glyphicon-info-sign"></span>SUCCESS : <strong><?php echo htmlentities($msg); ?></strong>
				</div><?php }?>
				
				<form method="post" enctype="multipart/form-data">
					<?php
					$id=intval($_GET['id']);

					$sql = "SELECT * from  tblvehicles where tblvehicles.id=:id";
					$query = $dbh -> prepare($sql);
					$query-> bindParam(':id', $id, PDO::PARAM_STR);
					$query->execute();
					$results=$query->fetchAll(PDO::FETCH_OBJ);
					$cnt=1;
					if($query->rowCount() > 0)
					{
						foreach($results as $result)
							{	?>
								
								
								<div class="form-group">
									<label for="vehicletitle">Enter Your New Title Vehicle</label>
									<input type="text" name="vehicletitle" class="form-control" value="<?php echo htmlentities($result->VehiclesTitle)?>" readonly>
								</div>
								
								<div class="form-group">
									<div class="col-sm-4">
										Image 1 <img src="img/vehicleimages/<?php echo htmlentities($result->Vimage1);?>" width="300" height="200" style="border:solid 1px #000">
									</div>
									<div class="col-sm-4">
										Image 2<img src="img/vehicleimages/<?php echo htmlentities($result->Vimage2);?>" width="300" height="200" style="border:solid 1px #000">
									</div>
									<div class="col-sm-4">
										Image 3<img src="img/vehicleimages/<?php echo htmlentities($result->Vimage3);?>" width="300" height="200" style="border:solid 1px #000">
									</div>
								</div>
								


								<div class="form-group">
									<div class="col-sm-4">
										Image 4<img src="img/vehicleimages/<?php echo htmlentities($result->Vimage4);?>" width="300" height="200" style="border:solid 1px #000">
									</div>
									<div class="col-sm-4">
										Image 5
										<?php if($result->Vimage5=="")
										{
											echo htmlentities("File not available");
										} else {?>
											<img src="img/vehicleimages/<?php echo htmlentities($result->Vimage5);?>" width="300" height="200" style="border:solid 1px #000">
										<?php } ?>
									</div>
								</div>
								
							<?php } ?>
							

						</form>
					</div>
				</body>
				</html>
				<?php } ?>