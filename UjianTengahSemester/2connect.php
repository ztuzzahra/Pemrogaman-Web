<!DOCTYPE html>
<html>
<head>
	<title>Koneksi Database </title>
</head>
<body>
	<h1>Terimakasi Atas Partisipasi Anda !</h1>
	<?php
	$conn = mysqli_connect("localhost","root","","Covid19");

	if (mysqli_connect_errno()) {
		echo "Failed to Connect to Mysql".mysqli_connect_error();
		exit();
	}

	?>
</body>	
</html>
