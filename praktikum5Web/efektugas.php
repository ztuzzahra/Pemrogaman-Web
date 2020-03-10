<?php
include "tugas5.1.html"; 
	$nama = $_POST['nama'];
	$npm  = $_POST['npm'];
	$jeniskelamin = $_POST['jeniskelamin'];
	$jurusan = $_POST['Jurusan'];
	$alamat = $_POST['Alamat'];
	$Hoby = $_POST['hoby'];
	$TTL =$_POST['tanggal'];

		echo "<center>";
		echo "Biodata singkat";
		echo "<br>";
		echo "Nama :", $nama;
		echo "<br>";
		echo "NPM :", $npm;
		echo "<br>";
		echo "Tempat tanggal lahir :", $TTL;
		echo "<br>";
		echo "Jenis Kelamin :", $jeniskelamin;
		echo "<br>";
		echo "Jurusan :", $jurusan;
		echo "<br>";
		echo "Alamat :", $alamat;
		echo "<br>";
		echo "Hoby :", $Hoby ;
		echo "<br>";
		echo date("l, d-F-Y, g:i:s a");
		echo "</center>";

?>