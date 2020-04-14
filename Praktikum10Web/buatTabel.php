<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ppdb";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
	die ("Connection Failed :". mysqli_connect_error());
} 

$sql = "CREATE TABLE siswa(
Nama VARCHAR(50) NOT NULL,
Sex CHAR(2) NOT NULL, 
No_registrasi VARCHAR(20) NOT NULL,
NISN CHAR(18) NOT NULL, 
NIK CHAR(16) NOT NULL,
Tempat_Lahir VARCHAR(10) NOT NULL,
Tanggal_Lahir DATE NOT NULL,
Agama VARCHAR(10) NOT NULL,
Kwn CHAR(2)  NOT NULL, 
Kebutuhan_Khusus VARCHAR(20) NOT NULL,
alamat VARCHAR(30) NOT NULL,
RT CHAR(3) NOT NULL,
RW CHAR(3) NOT NULL, 
Dusun VARCHAR(15) NOT NULL,
Kecamatan VARCHAR(6) NOT NULL,
KDPos CHAR(4) NOT NULL,
Lintang VARCHAR(40) NOT NULL,
Bujur VARCHAR(40) NOT NULL,
TmpTinggal CHAR(2) NOT NULL,
Transportasi CHAR(2) NOT NULL,
KK CHAR(16) NOT NULL,
Anak CHAR(2) NOT NULL,
kpspkh CHAR(1) NOT NULL,
Nokpspkh CHAR(18) NOT NULL,
Email VARCHAR(20) NOT NULL,
Website VARCHAR(20) NOT NULL,
Telfon VARCHAR(13) NOT NULL,
Pesan VARCHAR(50) NOT NULL)";

if (mysqli_query($conn, $sql)) {
	echo "Tabel sukses";
}else {
	echo "Eror". mysqli_error($conn);
}
mysqli_close($conn);
?>