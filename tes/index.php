<?php
$conn = mysqli_connect('localhost', 'root', '', 'testing');

function alert($text, $link)
{
	echo "<script>
			alert('$text');
			window.location.href='$link';
		  </script>";
}

if (isset($_POST['kirim'])) {
	// file 1
	$fileName1 = $_FILES['gambar1']['name'];
	$tmpName1 = $_FILES['gambar1']['tmp_name'];
	$format1 = explode('.', $fileName1);
	$format1 = strtolower(end($format1));
	// file 2
	$fileName2 = $_FILES['gambar2']['name'];
	$tmpName2 = $_FILES['gambar2']['tmp_name'];
	$format2 = explode('.', $fileName2);
	$format2 = strtolower(end($format2));
	// file 3
	$fileName3 = $_FILES['gambar3']['name'];
	$tmpName3 = $_FILES['gambar3']['tmp_name'];
	$format3 = explode('.', $fileName3);
	$format3 = strtolower(end($format3));
	// file 4
	$fileName4 = $_FILES['gambar4']['name'];
	$tmpName4 = $_FILES['gambar4']['tmp_name'];
	$format4 = explode('.', $fileName4);
	$format4 = strtolower(end($format4));

	if ($_FILES['gambar1']['size'] < 2000000 && $_FILES['gambar2']['size'] < 2000000 && $_FILES['gambar3']['size'] < 2000000 && $_FILES['gambar4']['size'] < 2000000) {

		$ekstension = ['jpg', 'png', 'jpeg'];
		if (in_array($format1, $ekstension) && in_array($format2, $ekstension) && in_array($format3, $ekstension) && in_array($format4, $ekstension)) {

			$query = mysqli_query($conn, "INSERT INTO file SET gambar0='$fileName1', gambar1='$fileName2', gambar2='$fileName3', gambar3='$fileName4'");
			if ($query) {
				move_uploaded_file($tmpName1, 'img1/' . $fileName1);
				move_uploaded_file($tmpName2, 'img2/' . $fileName2);
				move_uploaded_file($tmpName3, 'img3/' . $fileName3);
				move_uploaded_file($tmpName4, 'img4/' . $fileName4);

				alert('File berhasil diupload!', '');
			}
		} else {
			alert('Ekstensi file tidak sesuai', '');
		}
	} else {
		alert('Ukuran gambar Terlalu besar', '');
	}
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Testing</title>
</head>

<body>
	<form action="" method="post" enctype="multipart/form-data">
		<input type="file" name="gambar1"><br>
		<input type="file" name="gambar2"><br>
		<input type="file" name="gambar3"><br>
		<input type="file" name="gambar4"><br>
		<button type="submit" name="kirim">Kirim</button>
		<br><br><br>
	</form>
</body>

</html>

<script src="script.js"></script>