<?php
include 'koneksi.php';
$sql = "SELECT 	*  FROM Buku_Tamu";
$result = mysqli_query($conn, $sql);
?>
<html>
<head>
	<title> Buku Tamu </title>
</head>
<body>
<table border="1" width="1000" cellpadding="5" align="center">
	<thead>
		<th width="100"> ID </th>
		<th width="200"> NAMA </th>
		<th width="400"> EMAIL </th>
		<th width="300"> ISI </th>
	</thead>
	<tbody>
	<?php
	while($tampil = mysqli_fetch_assoc($result)) {
		echo "<tr>";
		echo "<td>".$tampil['ID_BT']."</td>";
		echo "<td>".$tampil['NAMA']."</td>";
		echo "<td>".$tampil['EMAIL']."</td>";
		echo "<td>".$tampil['ISI']."</td>";
		echo "</tr>";
	}
	?>
	</tbody>
</table>
</body>
</html>