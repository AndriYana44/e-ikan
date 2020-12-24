<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$conn = mysqli_connect('localhost', 'root', '', 'testing');
$direktori = ".";
foreach ($_FILES["fileku"]["error"] as $key => $error) {
    if ($error == UPLOAD_ERR_OK) {
        $tmp_name = $_FILES["fileku"]["tmp_name"][$key];
        $name = $_FILES["fileku"]["name"][$key];
        move_uploaded_file($tmp_name, $direktori."/".$name);
     	$query = mysqli_query($conn, "INSERT INTO file values ('','$name','$name','$name','$name','')");
     	if(!$query){
     		echo "File salah upload";
     	} else {
        echo "File $name berhasil diupload <br>";
    	}
    }
}
?>
</body>
</html>