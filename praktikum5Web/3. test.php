<!DOCTYPE html>
<html>
<head>
	<title> mengubah type</title>
</head>
<body>
<?php
	$a = 25;
	$b = 30;
	$c = $a*$b;

	echo "angka1 : ",$a;
	echo "<br>";
	echo "angka2 : ",$b;
	echo "<br>";
	echo "hasil : ",$c;
	echo "<br>";
	echo "ubah ke type double :", doubleval($c);
	echo "<br>";
	echo "ubah ke type Integer :", intval($c);
	echo "<br>";
	echo "ubah ke type String :", strval($c);
?>	

</body>
</html>