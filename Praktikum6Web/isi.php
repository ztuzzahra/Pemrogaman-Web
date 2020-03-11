<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pemrogamanweb";

//create connection
$conn = mysqli_connect($servername,$username,$password,$dbname);

//check connection
if (!$conn) {
	die("connection failed :".mysqli_connect_error());
}

$sql = "INSERT INTO liga (kode, negara, champion)
		VALUES ('Eng', 'English','3')";

if (mysqli_query($conn,$sql)) {
	echo "New Record created successfully";
} else{
	echo "Error :".$sql. "<br>". mysqli_error($conn);
}

mysqli_close($conn);
?>