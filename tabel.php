<?php

$servername = "localhost";

$username = "root";

$password = "";

$dbname = "universal";

//create connection

$conn = mysqli_connect($servername, $username, $password, $dbname);

//check connection

if (!$conn) {

	die("Connection failed : ".mysqli_connect_error());

}



//create database

$sql = "CREATE TABLE FORM (

id INT(4) AUTO_INCREMENT PRIMARY KEY,

namalengkap VARCHAR(100) NOT NULL,

jeniskelamin CHAR NOT NULL,

nisn INT(50) NOT NULL,

nik INT(50) NOT NULL,

tempatlahir VARCHAR(100) NOT NULL,

tanggallahir date NOT NULL,

noakta INT(50) NOT NULL,

agama VARCHAR(100) NOT NULL,

kewarganegaraan VARCHAR(100) NOT NULL,

berkebutuhankhusus VARCHAR(100) NOT NULL,

alamatjalan VARCHAR(100) NOT NULL,

rt INT(50) NOT NULL,

rw INT(50) NOT NULL,

namadusun VARCHAR(100) NOT NULL,

desa VARCHAR(100) NOT NULL,

kecamatan VARCHAR(100) NOT NULL,

kodepos INT(50) NOT NULL,

lintang VARCHAR(50) NOT NULL,

bujur VARCHAR(50) NOT NULL,

tempattinggal VARCHAR(100) NOT NULL,

modatransportasi VARCHAR(100) NOT NULL,

nomorkks INT(50) NOT NULL,

anakke  INT(50) NOT NULL,

kpskph VARCHAR(100) NOT NULL,

nokpskph INT(50) NOT NULL

)";



if(mysqli_query($conn,$sql)){

	echo "Table created succesfully";

} else {

	echo "Error creating table: ".$sql."<br>".mysqli_error($conn);

}

mysqli_close($conn);

?>