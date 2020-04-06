<?php
$servername= "localhost";
$username ="root";
$password="";
$dbname = "bukutamu";

$conn= mysqli_connect($servername, $username, $password) or die("Koneksi gagal dibangun");
mysqli_select_db($conn, 'bukutamu') or die("Database tidak dapat dibuka");
?>