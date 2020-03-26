<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="jQuery-3.4.1.min.js"></script>
	<script type="text/javascript">
		/*untuk doubel klik*/
		$(document).ready(function(){
		$(".kotak").ready(function(){$("#ganti").addClass("warna")});	
		$(".kotak").dblclick(function(){$("#ganti").addClass("warna1");});
		});
		/*untuk showhide*/
		$(document).ready(function(){
		$(".sembunyi1").click(function(){$("#foto1").hide("slow")});
		$(".tampil1").click(function(){$("#foto1").show("slow")});	
		});

		$(document).ready(function(){
		$(".sembunyi2").click(function(){$("#foto2").hide("slow")});
		$(".tampil2").click(function(){$("#foto2").show("slow")});	
		});
	</script>	

	<style type="text/css">
		body{
			background-image: url(69.jpg);
		}
		.warna {
		width: 17cm;
		height:17cm;
		background-image: url(gmb1.jpeg);
		float: left;
		margin: 18px;
		}
		.warna1{
		background-image: url(gmb4.jpg);
		width: 100;
		height:150;
		}
		p{
			font-style: oblique;
			font-size: 20px;
			font-weight: bold;

		}
	</style>
</head>
<body>
<p>Klik maka akan berubah gambar</p>	
<div id="ganti" class="kotak"></div>

<button class="sembunyi1">sembunyikan</button>
<button class="tampil1">tampilkan</button>	
<p><img id="foto1"src="gmb2.jpeg" width="300" height="500"></p>

<button class="sembunyi2">sembunyikan</button>
<button class="tampil2">tampilkan</button>	
<p><img id="foto2"src="gmb5.jpeg" width="300" height="500"></p>


</body>
</html>