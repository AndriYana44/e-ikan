<?php
session_start();
error_reporting(0);
include('config.php');
if(strlen($_SESSION['alogin'])==0)
{	
	header('location:index.php');
}
else{

	if(isset($_REQUEST['del']))
	{
		$delid=intval($_GET['del']);
		$sql = "delete from tblvehicles  WHERE  id=:delid";
		$query = $dbh->prepare($sql);
		$query -> bindParam(':delid',$delid, PDO::PARAM_STR);
		$query -> execute();
		$msg="Vehicle  record deleted successfully";
	}


	?>
	<!DOCTYPE html>
	<html>
	<head>
		<title>View Gambar</title>
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
				<h1 class="h2">&nbsp; List Users<a class="btn btn-success" href="index.php" style="margin-left: 770px;"><span class="glyphicon glyphicon-user"></span>&nbsp; Back Home</a></h1><hr>
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
					
					<table class="table table-dark">
						<thead>
							<tr>
								<th scope="col">No</th>
								<th scope="col">Vehicless Title</th>
								<th scope="col">Deleted</th>
								<th scope="col">Edit</th>
							</tr>
						</thead>

						
						<?php $sql = "SELECT * from  tblvehicles ";
						$query = $dbh -> prepare($sql);
						$query->execute();
						$results=$query->fetchAll(PDO::FETCH_OBJ);
						$cnt=1;
						if($query->rowCount() > 0)
						{
							foreach($results as $result)
								{				?>
									
									<tbody>
										<tr>
											<th scope="row"><?php echo htmlentities($cnt);?></th>
											<td><?php echo htmlentities($result->VehiclesTitle);?></td>
											<td><button type="button" class="btn btn-warning"><a href="view-details.php?id=<?php echo $result->id;?>">View Details</a></button></td>
											<td><button type="button" class="btn btn-danger"><a href="view-vehicle.php?del=<?php echo $result->id;?>" onclick="return confirm('Do you want to delete');">Deleted</a></button></td>
										</tr>
										<?php $cnt=$cnt+1; }} ?>
									</tbody>
								</table>
							</div>
						</body>
						</html>
						<?php } ?>