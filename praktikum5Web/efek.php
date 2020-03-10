<?php
include "tugas5.2.html";
	if (empty($POST['nama']),($POST['email'])){
		header("Location :kosongefek.php");
	}elseif {
		echo "<center>";
		echo "Nama :", $nama;
		echo "<br>";
		echo "Email :", $email;
		echo "<br>";
		echo date("l, d-F-Y, g:i:s a");
		echo "<center>";
}		
?>