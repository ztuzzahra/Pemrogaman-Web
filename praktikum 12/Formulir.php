<!DOCTYPE html>

<html>

<head>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<style>

	.warning{color:#FF0000;}

</style>

</head>

<body>



<?php

$error_namalengkap = "";

$error_jeniskelamin = "";

$error_nisn = "";

$error_nik = "";

$error_tempatlahir = "";

$error_tanggallahir = "";

$error_noakta = "";

$error_agama = "";

$error_kewarganegaraan = "";

$error_berkebutuhankhusus = "";

$error_alamatjalan = "";

$error_rt = "";

$error_rw = "";

$error_namadusun = "";

$error_desa = "";

$error_kecamatan = "";

$error_kodepos = "";

$error_lintang = "";

$error_bujur = "";

$error_tempattinggal = "";

$error_modatransportasi = "";

$error_nomorkks = "";

$error_anakke = "";

$error_kpskph = "";

$error_nokpskph = "";





$namalengkap = "";

$jeniskelamin = "";

$nisn = "";

$nik = "";

$tempatlahir = "";

$tanggallahir = "";

$noakta = "";

$agama = "";

$kewarganegaraan = "";

$berkebutuhankhusus = "";

$alamatjalan = "";

$rt = "";

$rw = "";

$namadusun = "";

$desa = "";

$kecamatan = "";

$kodepos = "";

$lintang = "";

$bujur = "";

$tempattinggal = "";

$modatransportasi = "";

$nomorkks = "";

$anakke = "";

$kpskph = "";

$nokpskph = "";



if ($_SERVER["REQUEST_METHOD"] == "POST") {



if (empty($_POST["namalengkap"])) {

		$error_namalengkap = "Nama tidak boleh kosong";

} else {

	if (!preg_match("/^[a-zA-Z ]*$/",$_POST["namalengkap"])) {

		$error_namalengkap = "Nama Lengkap hanya boleh huruf dan spasi";

		} else{

			$namalengkap = cek_input($_POST["namalengkap"]);

		}

	}



if (!isset($_POST["jeniskelamin"])) {

	$error_jeniskelamin = "Pilih Salah Satu";

} else {

	$jeniskelamin = cek_input($_POST["jeniskelamin"]);	

}



if (empty($_POST["nisn"])) 

{

	$error_nisn = "Jika belum memiliki NISN, maka isi dengan angka 1";

} else {

	if (!is_numeric($_POST["nisn"])) 

	{

		$error_nisn = 'NISN hanya boleh angka';

	} else {

		$nisn = cek_input($_POST["nisn"]);

	}

}



if (empty($_POST["nik"])) 

{

	$error_nik = "NIK / No.KITAS wajib diisi";

} else {

	if (!is_numeric($_POST["nik"]))

	{

		$error_nik = 'NIK/No.KITAS hanya boleh angka';

	} else{

		$nik = cek_input($_POST["nik"]);

	}

}



if (empty($_POST["tempatlahir"])) {

		$error_tempatlahir = "Tempat Lahir tidak boleh kosong";

	} else {

		if (!preg_match("/^[a-zA-Z ]*$/",$_POST["namalengkap"])) {

			$error_tempatlahir = "Tempat Lahir hanya boleh huruf dan spasi";

		} else {

			$tempatlahir = cek_input($_POST["tempatlahir"]);

		}

	}



if (empty($_POST["tanggallahir"])) {

		$error_tanggallahir	 = "Isi Tanggal Lahir";

	}else{

		$tanggallahir=cek_input($_POST["tanggallahir"]);

	}



if (empty($_POST["noakta"])) 

{

	$error_noakta = "Nomor Akta wajib diisi";

}else {

	if (!is_numeric($_POST["noakta"]))

	{

		$error_noakta = 'Nomor Akta Hanya Boleh Angka';

	} else {

		$noakta = cek_input($_POST["noakta"]);

	}

}



$pilagama=$_POST['agama'];

if(isset($_POST["agama"])){

	 if($pilagama=="pilih"){

		$error_agama = "Pilihlah Salah Satu";

	}

	else {

		$agama = cek_input($_POST["agama"]);

	}

}



if (!isset($_POST["kewarganegaraan"])) {

	$error_kewarganegaraan = "Pilihlah Salah Satu";

} else {

	$kewarganegaraan = cek_input($_POST["kewarganegaraan"]);	

}



$pilberkebutuhankhusus=$_POST['berkebutuhankhusus'];

if(isset($_POST["berkebutuhankhusus"])){

	 if($pilberkebutuhankhusus=="pilih"){

		$error_berkebutuhankhusus = "Pilihlah Salah Satu";

	}

	else {

		$berkebutuhankhusus = cek_input($_POST["berkebutuhankhusus"]);

	}

}



if (empty($_POST["alamatjalan"])) 

{

	$error_alamatjalan = "Alamat tidak boleh kosong";

}else {

	if (!preg_match("/^[a-z A-z0-9+&@#\/%?=~_|!:,.;]*$/", $_POST["alamatjalan"])) {

			$error_alamatjalan = "Alamat hanya boleh huruf dan angka";

		}else{

	$alamatjalan = cek_input($_POST["alamatjalan"]);

	}

}



if (empty($_POST["rt"])) 

{

	$error_rt = "RT tidak boleh kosong";

}else {

	if (!is_numeric($_POST["rt"])) 

	{

		$error_rt = 'RT hanya boleh angka';

	}else{

		$rt = cek_input($_POST["rt"]);

	}

}



if (empty($_POST["rw"])) 

{

	$error_rw = "RW tidak boleh kosong";

}else {

	if (!is_numeric($_POST["rw"])) 

	{

		$error_rw = 'RW hanya boleh angka';

	}else {

		$rw = cek_input($_POST["rw"]);

	}

}



if (empty($_POST["namadusun"])) {

		$error_namadusun = "Nama Dusun tidak boleh kosong";

} else {

	if (!preg_match("/^[a-zA-Z ]*$/",$_POST["namadusun"])) {

		$error_namadusun = "Nama Dusun hanya boleh huruf dan spasi";

		} else {

			$namadusun = cek_input($_POST["namadusun"]);

		}

	}



if (empty($_POST["desa"])) {

		$error_desa = "Desa tidak boleh kosong";

} else {

	if (!preg_match("/^[a-zA-Z ]*$/",$_POST["desa"])) {

		$error_desa = "Desa hanya boleh huruf dan spasi";

		} else {

			$desa = cek_input($_POST["desa"]);

		}

	}



if (empty($_POST["kecamatan"])) {

		$error_kecamatan = "Kecamatan tidak boleh kosong";

} else {

	if (!preg_match("/^[a-zA-Z ]*$/",$_POST["kecamatan"])) {

		$error_kecamatan = "Kecamatan hanya boleh huruf dan spasi";

		} else{

			$kecamatan = cek_input($_POST["kecamatan"]);

		}

	}



if (empty($_POST["kodepos"])) 

{

	$error_kodepos= "Kode Pos tidak boleh kosong";

} else {

	if (!is_numeric($_POST["kodepos"])) 

	{

		$error_kodepos = 'Kode Pos hanya boleh angka';

	}else{

		$kodepos = cek_input($_POST["kodepos"]);

	}

}



if (empty($_POST["lintang"])) 

{

	$error_lintang = "Lintang tidak boleh kosong";

}else {

	$lintang = cek_input($_POST["lintang"]);

}



if (empty($_POST["bujur"])) 

{

	$error_bujur = "Bujur tidak boleh kosong";

} else{

	$bujur = cek_input($_POST["bujur"]);

}



$piltempattinggal=$_POST['tempattinggal'];

if(isset($_POST["tempattinggal"])){

	 if($piltempattinggal=="pilih"){

		$error_tempattinggal = "Pilihlah Salah Satu";

	} else {

		$tempattinggal = cek_input($_POST["tempattinggal"]);

	}

}



$pilmodatransportasi=$_POST['modatransportasi'];

if(isset($_POST["modatransportasi"])){

	 if($pilmodatransportasi=="pilih"){

		$error_modatransportasi = "Pilihlah Salah Satu";

	} else {

		$modatransportasi = cek_input($_POST["modatransportasi"]);

	}

}



if (empty($_POST["nomorkks"])) 

{

	$error_nomorkks = "Jika tidak memiliki Nomor KKS (Kartu Keluarga Sejahtera), maka isi dengan angka 1";

}else {

	if (!is_numeric($_POST["nomorkks"]))

	{

		$error_nomorkks = 'Nomor KKS hanya boleh angka';

	} else{

		$nomorkks = cek_input($_POST["nomorkks"]);

	}

}



if (empty($_POST["anakke"])) 

{

	$error_anakke = "Tidak Boleh Kosong";

}else {

	if (!is_numeric($_POST["anakke"]))

	{

		$error_anakke = 'Anak ke-berapa hanya boleh angka';

	} else {

		$anakke = cek_input($_POST["anakke"]);

	}

}



if (!isset($_POST["kpskph"])) {

	$error_kpskph = "Pilihlah Salah Satu";

} else {

	$kpskph = cek_input($_POST["kpskph"]);	

}



if (empty($_POST["nokpskph"])) 

{

	$error_nokpskph = "Jika tidak menerima No. KPS/KPH, maka isi dengan angka 1";

}else {

	if (!is_numeric($_POST["nokpskph"]))

	{

		$error_nokpskph = 'Nomor KPS/KPH hanya boleh angka';

	} else {

		$nokpskph = cek_input($_POST["nokpskph"]);

	}

}



}



function cek_input($data){

	$data = trim($data);

	$data	= stripslashes($data);

	$data	=htmlspecialchars(	$data);

	return $data	;	

}

$date=date('d-m-Y');

?>



<div class="row">

<div class="col-md-10">

<div class="card">

	<div class="card-header">

		FORMULIR PESERTA DIDIK

	</div>

	<div class="card-body">



	<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 



	<div class="form-group row">    

	<label for="namalengkap" class="col-sm-2 col-form-label"> Nama Lengkap </label>

	<div class="col-sm-10">

		<input type="text" name="namalengkap" class="form-control <?php echo ($error_namalengkap!="" ? "is-invalid" : "");?>" id="namalengkap" placeholder="nama lengkap" value="<?php echo $namalengkap;?>"><span class="warning"><?php echo $error_namalengkap;?></span>

	</div>

</div>



<div class="form-group-row">

	<label for="jeniskelamin" class="col-form-label">Jenis Kelamin</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

	<input type="radio" name="jeniskelamin" value="L">Laki-Laki

	<input type="radio" name="jeniskelamin" value="P">Perempuan

	<span class="warning">

		<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

		<?php echo $error_jeniskelamin; ?></span>

	</div>



	<div class="form-group row">

		<label for="nisn" class="col-sm-2 col-form-label">NISN</label>

		<div class="col-sm-10">

		<input type="text" name="nisn" class="form-control <?php echo ($error_nisn !="" ? "is-invalid" : "");?>" id="nisn" placeholder="nisn" value="<?php echo $nisn;?>"><span class="warning"><?php echo $error_nisn;?></span>

	</div>

</div>



<div class="form-group row">

		<label for="nik" class="col-sm-2 col-form-label">NIK / No.KITAS<br>(No.KITAS bagi WNA)</label>

		<div class="col-sm-10">

		<input type="text" name="nik" class="form-control <?php echo ($error_nik !="" ? "is-invalid" : "");?>" id="nik" placeholder="nik/no.KITAS" value="<?php echo $nik;?>"><span class="warning"><?php echo $error_nik;?></span>

	</div>

</div>



	<div class="form-group row">

		<label for="tempatlahir" class="col-sm-2 col-form-label">Tempat Lahir</label>

		<div class="col-sm-10">

		<input type="text" name="tempatlahir" class="form-control <?php echo ($error_tempatlahir !="" ? "is-invalid" : "");?>" id="tempatlahir" placeholder="tempat lahir" value="<?php echo $tempatlahir;?>"><span class="warning"><?php echo $error_tempatlahir;?></span>

	</div>

</div>



<div class="form-group-row">

	<label for="tanggallahir" class="col-form-label"> Tanggal Lahir</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

	<input type="date" name="tanggallahir" class="<?php echo($error_tanggallahir !="" ? "is-invalid" : "");?>" value="<?php echo($tanggallahir); ?>">

        <span class="warning">

		<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

		<?php echo $error_tanggallahir; ?></span>

</div>



<div class="form-group row">

		<label for="noakta" class="col-sm-2 col-form-label">No. regristrasi Akta Lahir</label>

		<div class="col-sm-10">

		<input type="text" name="noakta" class="form-control <?php echo ($error_noakta !="" ? "is-invalid" : "");?>" id="noakta" placeholder="nomor akta" value="<?php echo $noakta;?>"><span class="warning"><?php echo $error_noakta;?></span>

	</div>

</div>



<div class="form-group-row">

	<label for="agama" class="col-form-label">Agama & Kepercayaan</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

	<select id="agama" name="agama" class="col-sm-3" >

					<option value="pilih">-Pilih-</option>

					<option value="Islam"> Islam</option>

					<option value="Kristen/Protestan"> Kristen/Protestan</option>

					<option value="Katholik"> Katholik</option>

					<option value="Hindu"> Hindu</option>

					<option value="Budha"> Budha</option>

					<option value="Kong hu chu"> Kong hu chu</option>

					<option value="Kepercayaan kepada Tuhan YME"> Kepercayaan Kepada Tuhan YME</option>

	</select>

	<span class="warning">

		<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

		<?php echo $error_agama; ?></span>

</div>



<div class="form-group-row">

	<label for="kewarganegaraan" class="col-form-label">Kewarganegaraan</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

	<input type="radio" name="kewarganegaraan" value="WNI"> Indonesia(WNI)

	<input type="radio" name="kewarganegaraan" value="WNA"> Asing(WNA)

	<span class="warning">

		<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

		<?php echo $error_kewarganegaraan; ?></span>

</div>



<div class="form-group-row">

	<label for="berkebutuhankhusus" class="col-form-label">Berkebutuhan Khusus</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

	<select name="berkebutuhankhusus" class="col-sm-3">

					<option value="pilih">-Pilih-</option>

					<option value="Tidak"> Tidak</option>

					<option value="Netra"> Netra</option>

					<option value="Rungu"> Rungu</option>

					<option value="Grahita Ringan"> Grahita Ringan</option>

					<option value="Grahita Sedang"> Grahita Sedang</option>

					<option value="Daksa Ringan">Daksa Ringan</option>

					<option value="Daksa Sedang"> Daksa Sedang</option>

					<option value="Laras"> Laras</option>

					<option value="Wicara"> Wicara</option>

					<option value="Tuna Ganda"> Tuna Ganda</option>

					<option value="Hiperaktif"> Hiperaktif</option>

					<option value="Cerdas Istimewa"> Cerdas Istimewa</option>

					<option value="Bakat Istimewa"> Bakat Istimewa</option>

					<option value="Kesulitan Belajar"> Kesulitan Belajar</option>

					<option value="Indigo"> Indigo</option>

					<option value="Down Sindrome"> Down Sindrome</option>

					<option value="Autis"> Autis</option>

	</select>

	<span class="warning">

		<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

		<?php echo $error_berkebutuhankhusus; ?></span>

</div>



<div class="form-group row">

		<label for="alamatjalan" class="col-sm-2 col-form-label">Alamat Jalan</label>

		<div class="col-sm-10">

		<input type="text" name="alamatjalan" class="form-control <?php echo ($error_alamatjalan !="" ? "is-invalid" : "");?>" id="alamatjalan" placeholder="alamat" value="<?php echo $alamatjalan;?>"><span class="warning"><?php echo $error_alamatjalan;?></span>

	</div>

</div>



<div class="form-group row">

		<label for="rt" class="col-sm-2 col-form-label">RT</label>

		<div class="col-sm-10">

		<input type="text" name="rt" class="form-control <?php echo ($error_rt !="" ? "is-invalid" : "");?>" id="rt" placeholder="rt" value="<?php echo $rt;?>"><span class="warning"><?php echo $error_rt;?></span>

	</div>

</div>



<div class="form-group row">

		<label for="rw" class="col-sm-2 col-form-label">RW</label>

		<div class="col-sm-10">

		<input type="text" name="rw" class="form-control <?php echo ($error_rw !="" ? "is-invalid" : "");?>" id="rw" placeholder="rw" value="<?php echo $rw;?>"><span class="warning"><?php echo $error_rw;?></span>

	</div>

</div>



<div class="form-group row">    

	<label for="namadusun" class="col-sm-2 col-form-label"> Nama Dusun </label>

	<div class="col-sm-10">

		<input type="text" name="namadusun" class="form-control <?php echo ($error_namadusun!="" ? "is-invalid" : "");?>" id="namadusun" placeholder="nama dusun" value="<?php echo $namadusun;?>"><span class="warning"><?php echo $error_namadusun;?></span>

	</div>

</div>



<div class="form-group row">    

	<label for="desa" class="col-sm-2 col-form-label"> Nama Kelurahan/Desa </label>

	<div class="col-sm-10">

		<input type="text" name="desa" class="form-control <?php echo ($error_desa!="" ? "is-invalid" : "");?>" id="desa" placeholder="nama kelurahan/desa" value="<?php echo $desa;?>"><span class="warning"><?php echo $error_desa;?></span>

	</div>

</div>



<div class="form-group row">    

	<label for="kecamatan" class="col-sm-2 col-form-label"> Kecamatan </label>

	<div class="col-sm-10">

		<input type="text" name="kecamatan" class="form-control <?php echo ($error_kecamatan!="" ? "is-invalid" : "");?>" id="kecamatan" placeholder="kecamatan" value="<?php echo $kecamatan;?>"><span class="warning"><?php echo $error_kecamatan;?></span>

	</div>

</div>



<div class="form-group row">

		<label for="kodepos" class="col-sm-2 col-form-label">Kode Pos </label>

		<div class="col-sm-10">

		<input type="text" name="kodepos" class="form-control <?php echo ($error_kodepos !="" ? "is-invalid" : "");?>" id="kodepos" placeholder="kode pos" value="<?php echo $kodepos;?>"><span class="warning"><?php echo $error_kodepos;?></span>

	</div>

</div>



<div class="form-group row">

		<label for="lintang	" class="col-sm-2 col-form-label">Lintang</label>

		<div class="col-sm-10">

		<input type="text" name="lintang" class="form-control <?php echo ($error_lintang !="" ? "is-invalid" : "");?>" id="lintang" placeholder="lintang" value="<?php echo $lintang;?>"><span class="warning"><?php echo $error_lintang;?></span>

	</div>

</div>



<div class="form-group row">

		<label for="bujur" class="col-sm-2 col-form-label">Bujur</label>

		<div class="col-sm-10">

		<input type="text" name="bujur" class="form-control <?php echo ($error_bujur !="" ? "is-invalid" : "");?>" id="bujur" placeholder="bujur" value="<?php echo $bujur;?>"><span class="warning"><?php echo $error_bujur;?></span>

	</div>

</div>



<div class="form-group-row">

	<label for="tempattinggal" class="col-form-label">Tempat Tinggal</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

	<select class="col-sm-3" name="tempattinggal">

					<option value="pilih">-Pilih-</option>

					<option value="Bersama Orang Tua"> Bersama Orang Tua</option>

					<option value="Wali"> Wali</option>

					<option value="Kos"> Kos</option>

					<option value="Asrama"> Asrama</option>

					<option value="Panti Asuhan"> Panti Asuhan</option>

					<option value="Lainnya"> Lainnya</option>

	</select>

	<span class="warning">

		<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

		<?php echo $error_tempattinggal; ?></span>

</div>



<div class="form-group-row">

	<label for="modatransportasi" class="col-form-label">Moda Trnasportasi</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

	<select class="col-sm-3" name="modatransportasi">

					<option value="pilih">-Pilih-</option>

					<option value="Jalan Kaki"> Jalan Kaki</option>

					<option value="Kendaraan Pribadi"> Kendaraan Pribadi</option>

					<option value="Kendaraan Umum/Angkot/Pete-pete"> Kendaraan Umum/Angkot/Pete-pete</option>

					<option value="Jemputan Sekolah"> Jemputan Sekolah</option>

					<option value="Kereta Api"> Kereta Api</option>

					<option value="Ojek"> Ojek</option>

					<option value="Andond/Bendi/Sado/Dokar/Delman/Beca"> Andond/Bendi/Sado/Dokar/Delman/Beca</option>

					<option value="Perahu Penyeberangan/Rakit/Getek"> Perahu Penyeberangan/Rakit/Getek</option>

					<option value="Lainnya"> Lainnya</option>

	</select>

	<span class="warning">

		<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

		<?php echo $error_modatransportasi; ?></span>

</div>



<div class="form-group row">

		<label for="nomorkks" class="col-sm-2 col-form-label">Nomor KKS <br> (Kartu keluarga Sejahtera)</label>

		<div class="col-sm-10">

		<input type="text" name="nomorkks" class="form-control <?php echo ($error_nomorkks !="" ? "is-invalid" : "");?>" id="nomorkks" placeholder="nomor kks" value="<?php echo $nomorkks;?>"><span class="warning"><?php echo $error_nomorkks;?></span>

	</div>

</div>



<div class="form-group row">

		<label for="anakke" class="col-sm-2 col-form-label">Anak ke-berapa<br>(berdasarkan KK)</label>

		<div class="col-sm-10">

		<input type="text" name="anakke" class="form-control <?php echo ($error_anakke !="" ? "is-invalid" : "");?>" id="anakke" placeholder="anak ke-berapa" value="<?php echo $anakke;?>"><span class="warning"><?php echo $error_anakke;?></span>

	</div>

</div>



<div class="form-group-row">

	<label for="kpskph" class="col-form-label">Penerima KPS/KPH</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

	<input type="radio" name="kpskph" value="Ya"> Ya

	<input type="radio" name="kpskph" value="Tidak"> Tidak

	<span class="warning">

		<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

		<?php echo $error_kpskph; ?></span>

</div>



<div class="form-group row">

		<label for="nokpskph" class="col-sm-2 col-form-label">No. KPS/KPH <br> (apabila menerima)</label>

		<div class="col-sm-10">

		<input type="text" name="nokpskph" class="form-control <?php echo ($error_nokpskph !="" ? "is-invalid" : "");?>" id="nokpskph" placeholder="no. KPS/KPH" value="<?php echo $nokpskph;?>"><span class="warning"><?php echo $error_nokpskph;?></span>

	</div>

</div><br><br>



	<div class="form-group row">

	<div class="col-sm-10" align="right">

		<button type="submit" name="submit" class="btn btn-primary"> Submit</button>



	</div>	

</div>

</form>

</div></div></div></div>

</body>

</html>

<?php



$servername = "localhost";

$username = "root";

$password = "";

$dbname = "universal";

$conn = mysqli_connect($servername, $username, $password) or die ("koneksi gagal dibangun");

$connect=mysqli_select_db($conn, $dbname); 



if(!empty($namalengkap) && !empty($jeniskelamin) && !empty($nisn) && !empty($nik) && !empty($tempattinggal) && !empty($tanggallahir) && !empty($noakta) && !empty($agama) && !empty($kewarganegaraan) && !empty($berkebutuhankhusus) && !empty($alamatjalan) && !empty($rt) && !empty($rw) && !empty($namadusun) && !empty($desa) && !empty($kecamatan) && !empty($kodepos) && !empty($lintang) && !empty($bujur) && !empty($tempattinggal) && !empty($modatransportasi) && !empty($nomorkks) && !empty($anakke) && !empty($kpskph) && !empty($nokpskph)){

$sql=mysqli_query($conn, "INSERT INTO FORM (namalengkap,jeniskelamin,nisn,nik,tempatlahir,tanggallahir,noakta,agama,kewarganegaraan,berkebutuhankhusus,alamatjalan,rt,rw,namadusun,desa,kecamatan,kodepos,lintang,bujur,tempattinggal,modatransportasi,nomorkks,anakke,kpskph,nokpskph) VALUES (

'$namalengkap','$jeniskelamin','$nisn','$nik','$tempatlahir','$tanggallahir','$noakta','$agama','$kewarganegaraan','$berkebutuhankhusus','$alamatjalan','$rt','$rw','$namadusun','$desa','$kecamatan','$kodepos','$lintang','$bujur','$tempattinggal','$modatransportasi','$nomorkks','$anakke','$kpskph','$nokpskph')"); 



if($sql){

	echo 

	"<script> alert('Proses simpan ke database BERHASIL')</script>"; 

	}

	else{ 

		echo 

	"<script> alert('Proses simpan ke database GAGAL')</script>";

	}

}

?> 