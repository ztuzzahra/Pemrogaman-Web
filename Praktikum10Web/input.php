<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ppdb";
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Koneksi Gagal di Bangun");

$nama= $_POST['nama'];
$sex = $_POST['sex'];
$regis =  $_POST['regis'];
$NISN = $_POST['NISN'];
$NIK =  $_POST['NIK'];
$tmpLahir = $_POST['tmpLahir'];
$tgl = $_POST['tgl'];
$agama =  $_POST['agama'];
$kwn =  $_POST['kwn'];
$kebutuhan =  $_POST['kebutuhan'];
$alamat = $_POST['alamat'];
$rt = $_POST['rt'];
$rw =  $_POST['rw'];
$dusun =  $_POST['dusun'];
$kecamatan =  $_POST['kecamatan'];
$pos = $_POST['pos'];
$lintang =  $_POST['lintang'];
$bujur =  $_POST['bujur'];
$tmptinggal = $_POST['tmptinggal'];
$transportasi = $_POST['transportasi'];
$kk =  $_POST['kk'];
$anak =  $_POST['anak'];
$kpspkh =  $_POST['kpspkh'];
$nokpspkh = $_POST['nokpspkh'];
$email = $_POST['email'];
$web = $_POST['web'];
$telp = $_POST['telp'];
$pesan = $_POST['pesan'];

$query =mysqli_query($conn, "INSERT INTO siswa (nama,sex,regis,NISN,NIK,tmpLahir,tgl,agama,kwn,kebutuhan,alamat,rt,rw,dusun,kecamatan,pos,lintang,bujur,tmptinggal,transportasi,kk,anak,kpspkh,nokpspkh,email,web,telp ,pesan) VALUES ('$nama','$sex','$regis','$NISN','$NIK','$tmpLahir','$tgl','$agama','$kwn','$kebutuhan','$alamat','$rt','$rw','$dusun','$kecamatan','$pos','$lintang','$bujur','$tmptinggal','$transportasi','$kk','$anak','$kpspkh','$nokpspkh','$email','$web','$telp','$pesan')"); 

if($sql){
	echo("Proses simpan ke database berhasil"); 
	}
	else{ 
		echo ("Proses simpan ke database gagal");
	}

?>