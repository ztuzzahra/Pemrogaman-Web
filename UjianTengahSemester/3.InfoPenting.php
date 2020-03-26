<!DOCTYPE html>
<html>
<head>
	<title>Breaking News</title>
	<script type="text/javascript" src="jQuery-3.4.1.min.js"> </script>
	<script type="text/javascript" >
		$(document).ready(function(){
		$(".sembunyi1").click(function(){$("#foto1").hide("slow")});
		$(".tampil1").click(function(){$("#foto1").show("slow")});	
	});
	</script>
	<style type="text/css">
		body{
			background-image: url(69.jpg); 
			background-repeat: repeat;
			background-position: center;
			padding-top: 30px;
			padding-left:50px;
			padding-right: 50px;
			padding-bottom: 10px;
			font-style: Comic Sains MS;
			font-size: 55px;
			}
		p{
			background : white;
			padding-left: 20px;
			padding-right: 20px;
			padding-top: 30px;
			padding-bottom: 20px;
			font-size: 20px;
		 }
	</style>
	
</head>
<body>
UPDATE TERKINI !
<br>
<img src="covid.JPEG" width="600" height="500" alt="Photo">
<br>
<button class="sembunyi1">sembunyikan</button>
<button class="tampil1">tampilkan</button>	
<p><img id="foto1"src="grafik.JPG" width="180" height="200"></p>
</body>
</html>