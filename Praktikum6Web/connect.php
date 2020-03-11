<!DOCTYPE html>
<html>
<head>
	<title>Koneksi Database mysqlL</title>
</head>
<body>
	<h1>Demo Koneksi database mysql</h1>
	<?php
	$conn = mysqli_connect("localhost","root","","pemrogamanweb");

	//cek connection
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MYSQL". mysqli_connect_error();
		exit();
	}
	?>
</body>
</html>