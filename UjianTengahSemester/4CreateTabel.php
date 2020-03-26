<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Covid19";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
	die ("Connection Failed :". mysqli_connect_error());
} 

$sql = "CREATE TABLE data(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
nama VARCHAR(30) NOT NULL,
email VARCHAR (15) NOT NULL,
Nominal VARCHAR(10) NOT NULL,
sex CHAR(2) NOT NULL,
Prop VARCHAR(33) NOT NULL,
Rekening VARCHAR(20) NOT NULL)";

if (mysqli_query($conn, $sql)) {
	echo "Tabel sukses";
}else {
	echo "Eror". mysqli_error($conn);
}
mysqli_close($conn);