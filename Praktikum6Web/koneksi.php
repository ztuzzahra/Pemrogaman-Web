<html>
<head>
	<title> Konektor </title>
</head>
<body>
<?php

//create connection
$conn = mysqli_connect("localhost", "root", "", "pemrogamanweb");

//check connection
if (mysqli_connect_error()) {
	echo "Failed to connect to MySQL: ".mysqli_connect_error();
	exit();
} else {
	echo "<br> <center><h1> BUKU TAMU </h1> <br> <br>";
}
?>
</body>
</html>