<?php
$servername = "localhost";
$username = "root";
$password ="";
$dbname = "pemrogamanweb";

//createconnection
$conn = mysqli_connect($servername, $username, $password,$dbname);

//check connection 
if (!$conn) {
	die("connection failed :".mysqli_connect_error());
}

$sql = "CREATE TABLE liga (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
kode VARCHAR(3) NOT NULL,
negara VARCHAR (30) NOT NULL,
champion int (3))";

if (mysqli_query($conn,$sql)) {
	echo "New Record created successfully";
}else {
	echo "Eror :".$sql. "<br>". mysqli_error($conn);
}

mysqli_close($conn);
?>