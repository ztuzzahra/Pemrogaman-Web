<?php
include('koneksi1.php');
require_once("dompdf/autoload.inc.php");
use Dompdf\Dompdf;
$dompdf = new Dompdf();
$query = mysqli_query($koneksi,"select * from form");
$html = '<center><h3>Daftar Nama Peserta Didik Baru</h3></center><hr/><br/>';
$html .= '<table border="1" width="100%">
 <tr>
 <th>id</th>
<th>namalengkap</th>
<th>jeniskelamin</th>
<th>nisn</th>
<th>nik</th>
<th>tempatlahir</th>
<th>tanggallahir</th>
<th>noakta</th>
<th>agama</th>
<th>kewarganegaraan</th>
<th>berkebutuhankhusus</th>
<th>alamatjalan</th>
<th>rt</th>
<th>rw</th>
<th>namadusun</th>
<th>desa</th>
<th>kecamatan</th>
<th>kodepos</th>
<th>lintang</th>
<th>bujur</th>
<th>tempattinggal</th>
<th>modatransportasi</th>
<th>nomorkks</th>
<th>anakke</th>
<th>kpskph</th>
<th>nokpskph</th>
 </tr>';
$no = 1;
while($row = mysqli_fetch_array($query))
{
 $html .= "<tr>
 <td>".$no."</td>
<td>".$row['namalengkap']."</td>
<td>".$row['jeniskelamin']."</td>
<td>".$row['nisn']."</td>
<td>".$row['nik']."</td>
<td>".$row['tempatlahir']."</td>
<td>".$row['tanggallahir']."</td>
<td>".$row['noakta']."</td>
<td>".$row['agama']."</td>
<td>".$row['kewarganegaraan']."</td>
<td>".$row['berkebutuhankhusus']."</td>
<td>".$row['alamatjalan']."</td>
<td>".$row['rt']."</td>
<td>".$row['rw']."</td>
<td>".$row['namadusun']."</td>
<td>".$row['desa']."</td>
<td>".$row['kecamatan']."</td>
<td>".$row['kodepos']."</td>
<td>".$row['lintang']."</td>
<td>".$row['bujur']."</td>
<td>".$row['tempattinggal']."</td>
<td>".$row['modatransportasi']."</td>
<td>".$row['nomorkks']."</td>
<td>".$row['anakke']."</td>
<td>".$row['kpskph']."</td>
<td>".$row['nokpskph']."</td>
 </tr>";
 $no++;
}
$html .= "</html>";
$dompdf->loadHtml($html);
// Setting ukuran dan orientasi kertas
$dompdf->setPaper('B0', 'landscape');
// Rendering dari HTML Ke PDF
$dompdf->render();
// Melakukan output file Pdf
$dompdf->stream('laporan_ppdb.pdf');
?>