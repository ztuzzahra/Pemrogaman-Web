<?php
include "2connect.php";
$nama =$_POST['nama'];
$email =$_POST['email'];
$Nominal =$_POST['Nominal'];
$sex =$_POST['sex'];
$Prop =$_POST['Prop'];
$Rekening =$_POST['Rekening'];

$query="INSERT INTO data SET nama='$nama', email='$email',Nominal ='$Nominal', sex='$sex', Prop='$Prop', Rekening='$Rekening'";
mysqli_query($conn,$query);
?>