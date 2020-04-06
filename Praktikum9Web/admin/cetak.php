<?php
$servername ="localhost";
$username = "root";
$dbname = "bukutamu";
include "koneksi.inc.php";

$sql = "SELECT * from daftartamu order by nama;";
$qry=mysqli_query($conn,$sql) or die("Proses cetak gagal");

echo "<table width= '75%' cellpadding = '2' cellspacing = '0' border='1'>
<tr>
<th> nama </th>
<th> sex </th>
<th> nomer hp</th>
<th> email </th>
<th> alamat </th>
<th> kota </th>
<th> pesan </th> 
<th></th>";

while($hasil=mysqli_fetch_row($qry)){ 
	echo "<tr> 	    
	    <td>$hasil[1]</td>
		<td>$hasil[2]</td>
		<td>$hasil[3]</td>
		<td>$hasil[4]</td>
		<td>$hasil[5]</td>
		<td>$hasil[6]</td>
		<td>$hasil[7]</td>
		
	</tr>";	
}
echo "</table>";
?>
<a href="form.html">Kembali</a>

