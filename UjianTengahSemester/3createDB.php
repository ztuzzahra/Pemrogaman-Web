<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password);
if (!$conn) {
	die ("Connection Failed :". mysqli_connect_error());
}

$sql = "CREATE DATABASE Covid19";
if (mysqli_query($conn, $sql)) {
	echo "Database sukses";
}else {
	echo "Eror". mysqli_error($conn);
}

mysqli_close($conn);
?>