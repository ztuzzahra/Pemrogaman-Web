<?php
include('koneksi.php');
$negara = mysqli_query($koneksi,"select * from covid_19");
while($row = mysqli_fetch_array($negara)){
	$nama_negara[] = $row['negara'];
	$query = mysqli_query($koneksi,"select sum(totalharian) as 'new_cases' from new_cases where id_negara='".$row['id_negara']."'");
	$row = $query->fetch_array();
	$jumlah_kasus[] = $row['new_cases'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Membuat Grafik Menggunakan Chart JS</title>
	<script type="text/javascript" src="Chart.js"></script>
</head>
<body>
	<div style="width: 800px;height: 800px">
		<canvas id="myChart"></canvas>
	</div>
 
 
	<script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: <?php echo json_encode($nama_negara); ?>,
				datasets: [{
					label: 'Grafik New Cases',
					data: <?php echo json_encode($jumlah_kasus); ?>,
					backgroundColor: 'rgba(255, 99, 132, 0.2)',
					borderColor: 'rgba(255,99,132,1)',
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
	</script>
</body>
</html>