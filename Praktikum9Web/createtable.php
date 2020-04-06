<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bukutamu";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
	die ("Connection Failed :". mysqli_connect_error());
} 

$sql = "CREATE TABLE daftartamu(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
nama VARCHAR(30) NOT NULL,
sex char(2) NOT NULL,
nomer varchar(13) NOT NULL,
email VARCHAR (15) NOT NULL,
alamat varchar (50) NOT NULL,
kota varchar (30) NOT NULL,
pesan VARCHAR(50) NOT NULL)";

if (mysqli_query($conn, $sql)) {
	echo "Tabel sukses";
}else {
	echo "Eror". mysqli_error($conn);
}
mysqli_close($conn);