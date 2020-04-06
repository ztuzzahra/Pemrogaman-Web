<?php
include "koneksi.inc.php";

$nama =$_POST['nama'];
$sex =$_POST['sex'];
$nomer =$_POST['nomer'];
$email =$_POST['email'];
$alamat =$_POST['alamat'];
$kota =$_POST['kota'];
$pesan =$_POST['pesan'];


$sql= "INSERT INTO daftartamu SET nama='$nama', sex='$sex', nomer= '$nomer', email= '$email', alamat='$alamat',kota ='$kota', pesan= '$pesan'";

mysqli_query($conn,$sql) or die("Proses simpan ke database gagal");
mysqli_close();
header("location:form.html");
?>