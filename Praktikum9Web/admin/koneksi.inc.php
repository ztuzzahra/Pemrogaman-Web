<?php
$servername= "localhost";
$username ="root";
$password="";

$conn= mysqli_connect($servername, $username, $password);
if (!$conn) {
 	die("Koneksi Gagal dibangun :" . mysqli_connect_error());
 }  
mysqli_select_db($conn, 'bukutamu') or die("Database tidak dapat dibuka");
?>