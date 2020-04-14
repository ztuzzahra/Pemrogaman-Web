<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<style>
	.warning {color:#FF0000;}
</style>
</head>
<body>
<?php
$error_tgl = "";
$error_nama ="";
$error_email ="";
$error_web = "";
$error_pesan ="";
$error_telp = "";
$error_sex = "";
$error_alamat = "";
$error_prop = "";
$error_NISN = "";
$error_NIK = "";
$error_pos="";
$error_agama ="";
$error_kwn= "";
$error_regis= "";
$error_tmpLahir = "";
$error_kebutuhan = "";
$error_rt = "";
$error_rw = "";
$error_dusun = "";
$error_kecamatan = "";
$error_lintang = "";
$error_bujur = "";
$error_tmptinggal = "";
$error_transportasi = "";
$error_kk = "";
$error_anak = "";
$error_kpspkh = "";
$error_nokpspkh = "";

$tgl = "";
$nama ="";
$email ="";
$web ="";
$pesan ="";
$telp ="";
$sex = "";
$alamat = "";
$prop = "";
$NISN = "";
$NIK = "";
$pos ="";
$agama = "";
$kwn = "";
$regis = "";
$tmpLahir = "";
$kebutuhan = "";
$rt = "";
$rw = "";
$dusun = "";
$kecamatan = "";
$lintang = "";
$bujur = "";
$tmptinggal = "";
$transportasi = "";
$kk = "";
$anak = "";
$kpspkh = "";
$nokpspkh = "";



if ($_SERVER["REQUEST_METHOD"]=="POST"){
	//nama\\
	if (empty($_POST["nama"]))
	{
		$error_nama= "Nama tidak boleh kosong";
	} 
	else
	{
		$nama = cek_input($_POST["nama"]);
		if (!preg_match("/^[a-zA-Z]*$/",$nama))
		{
			$error_nama = "Inputan Hanya boleh huruf dan spasi";
		}
	}
	//alamat 
	if (empty($_POST["alamat"])){
		$error_alamat = "Alamat tidak boleh kosong";
	}
	else {
		$alamat = cek_input($_POST["alamat"]);
	}

	//prop 
	if(empty($_POST["kebutuhan"])){
		$error_kebutuhan = "Pilihlah Satu atau lebih dari satu";
	} 
	else {
		$kebutuhan = cek_input($_POST["kebutuhan"]);
	}

	//sex\\
	if (empty($_POST["sex"])) {
		$error_sex = "Pilihlah Salah satu";
	}
	else {
		$sex = cek_input($_POST["sex"]);
	}

	//tanggal\\
	if (empty($_POST["tgl"])) {
		$error_tgl = "isilah tanggal terlebih dahulu";
	} else {
		$tgl = cek_input($_POST["tgl"]);
	}
	//email\\
	if (empty($_POST["email"]))
	{
		$error_email="email tidak boleh kosong";
	}
	else 
	{
		$email=cek_input($_POST["email"]);
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
		{
		$error_email= "Format Email Valid";	
		}
	}

	//pesan\\
	if (empty($_POST["pesan"])) 
	{
		$error_pesan = "pesan tidak boleh kosong";
	}
	else
	{
		$pesan = cek_input($_POST["pesan"]);
	}

	//web\\
	if (empty($_POST["web"])) 
	{
		$error_web="website tidak boleh kosong";
	}
	else
	{
		$web = cek_input($_POST["web"]);
		if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!;,.;]*[-a-z0-9+&@#\/%=~_|]/i",$web)) 
		{
			$error_web= "URL tidak valid";
		}
	}

	//email\\
	if (empty($_POST["telp"])) 
	if (empty($_POST["email"]))
	{
		$error_email= "email tidak boleh kosong";
	}
	else
	{
		$email = cek_input($_POST["email"]);
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
		{
			$error_email= "Format email Invalid";
		}
	}
	
	//telp\\
	if (empty($_POST["telp"]))
	{
		$error_telp="Telp tidak boleh kosong";
	}
	else
	{
		$telp =cek_input($_POST["telp"]);
		if (!is_numeric($telp)) 
		{
			$error_telp= 'nomer hp hanyalah angka';
		}
	}

	//nisn\\
	if(empty($_POST["NISN"])){
		$error_NISN= "NISN Tidak boleh kosong";
	}
	else
	{
		$NISN = cek_input($_POST["NISN"]);	
	}

	//nik\\
	if(empty($_POST["NIK"])){
		$error_NIK= "NIK Tidak boleh kosong";
	}
	else
	{
		$NIK = cek_input($_POST["NIK"]);	
	}

	//pos\\
	if(empty($_POST["pos"])){
		$error_pos= "NISN Tidak boleh kosong";
	}
	else
	{
		$pos = cek_input($_POST["pos"]);	
	}

	//agama\\
	if (empty($_POST["agama"])) {
		$error_agama = "Pilihlah Salah satu";
	}
	else {
		$agama = cek_input($_POST["agama"]);
	}

	//kwn\\
	if (empty($_POST["kwn"])) {
		$error_kwn = "Pilihlah Salah satu";
	}
	else {
		$kwn = cek_input($_POST["kwn"]);
	}

	//regis 
	if (empty($_POST["regis"])) {
		$error_regis = "Nomer registrasi tidak boleh kosong";
	}
	else {
		$regis = cek_input($_POST["regis"]);
	}

	//tempat lahir 
	if (empty($_POST['tmpLahir'])){
		$error_tmpLahir = "Pilihlah Tempat Lahir, Tempat lahir tidak boleh kosong!";
	}
	else {
		$tmpLahir = cek_input($_POST["tmpLahir"]);
	}

	//RT
	if (empty($_POST["rt"])) {
		$error_rt = "RT tidak boleh kosong";
	}
	else {
		$rt = cek_input($_POST["rt"]);
	}
	//rw
	if (empty($_POST["rw"])) {
		$error_rw = "RW tidak boleh kosong";
	}
	else {
		$rw = cek_input($_POST["rw"]);
	}
	//dusun
	if (empty($_POST["dusun"])) {
		$error_dusun = "Dusun tidak boleh kosong";
	}
	else {
		$dusun = cek_input($_POST["dusun"]);
	}
	//kecamatan 
	if (empty($_POST["kecamatan"])) {
		$error_kecamatan = "kecamatan tidak boleh kosong";
	}
	else {
		$kecamatan = cek_input($_POST["kecamatan"]);
	}
	//lintang 
	if (empty($_POST["lintang"])) {
		$error_lintang = "lintang tidak boleh kosong";
	}
	else {
		$lintang = cek_input($_POST["lintang"]);
	}
	//bujur 
	if (empty($_POST["bujur"])) {
		$error_bujur = "bujur tidak boleh kosong";
	}
	else {
		$bujur = cek_input($_POST["bujur"]);
	}
	//tempat tinggal
	if (empty($_POST["tmptinggal"])) {
		$error_tmptinggal = "Pilihlah Salah satu, tidak boleh kosong!";
	}
	else {
		$tmptinggal = cek_input($_POST["tmptinggal"]);
	}
	//transportasi 
	if (empty($_POST["transportasi"])) {
		$error_transportasi = "transportasi tidak boleh kosong";
	}
	else {
		$transportasi = cek_input($_POST["transportasi"]);
	}
	//nokk
	if (empty($_POST["kk"])) {
		$error_kk = "Nomer kk tidak boleh kosong";
	}
	else {
		$kk = cek_input($_POST["kk"]);
	}
	//anak
	if (empty($_POST["anak"])) {
		$error_anak = "isilah, tidak boleh kosong!";
	}
	else {
		$anak = cek_input($_POST["anak"]);
	}
	//kpspkh
	if (empty($_POST["kpspkh"])) {
		$error_kpspkh = "Pilihlah Salah Satu";
	}
	else {
		$kpspkh = cek_input($_POST["kpspkh"]);
	}
	//nokpspkh
	if (empty($_POST["nokpspkh"])) {
	$error_nokpspkh = "Jika tidak menerima No. KPS/KPH, maka isi dengna angka 0";
	}else
	{
	$nokpspkh = cek_input($_POST["nokpspkh"]);

	if (!is_numeric($nokpspkh))
	{
		$error_nokpspkh = 'Nomor KPS/KPH hanya boleh angka';
	}
	}
}
function cek_input($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>
<div class="row">
<div class="col-md-6">
<div class="card">
	<div class="card-header">
	Pendaftaran Mahasiswa Baru
	</div>
	<div class="card-body">
		<form>
	<form method="POST" action="input.php">

<div class="form-group-row">
	<label for="nama" class="col-sm-2 col-form-label"> Nama Lengkap</label>
	<div class="col-sm-10">
	<input type="text" name="nama" class="form-control <?php echo($error_nama !=""? "is-invalid":""); ?>" id="nama" placeholder="nama" value="<?php echo $nama; ?>">
	<span class="warning"><?php echo $error_nama; ?></span>
	</div>
</div>

<div class="form-group-row">
	<label for="nama" class="col-sm-2 col-form-label"> Jenis Kelamin</label>
	<div class="col-sm-10">
	<input type="radio" name="sex" value="L"  id="sex" placeholder="sex" > Laki-Laki
	<input type="radio" name="sex" value="P"  id="sex" placeholder="sex"> Perempuan
	<span class="warning"><?php echo $error_sex; ?></span>
	</div>
</div>

<div class="form-group-row">
	<label for="regis" class="col-sm-2 col-form-label"> Nomer Registrasi</label>
	<div class="col-sm-10">
	<input type="text" name="regis" class="form-control <?php echo($error_regis !=""? "is-invalid":""); ?>" id="regis" placeholder="regis" value="<?php echo $regis; ?>"><span class="warning"><?php echo $error_regis; ?></span>
	</div>
</div>	

<div class="form-group-row">
	<label for="NISN" class="col-sm-2 col-form-label"> NISN</label>
	<div class="col-sm-10">
	<input type="text" name="NISN" class="form-control <?php echo($error_NISN !=""? "is-invalid":""); ?>" id="NISN" placeholder="NISN" value="<?php echo $NISN; ?>"><span class="warning"><?php echo $error_NISN; ?></span>
	</div>
</div>	

<div class="form-group-row">
	<label for="NIK" class="col-sm-2 col-form-label"> NIK </label>
	<div class="col-sm-10">
	<input type="text" name="NIK" class="form-control <?php echo($error_NIK !=""? "is-invalid":""); ?>" id="NIK" placeholder="NIK" value="<?php echo $NIK; ?>"><span class="warning"><?php echo $error_NIK; ?></span>
	</div>
</div>	

<div class="form-group-row">
	<label for="tmpLahir" class="col-sm-2 col-form-label"> Tempat Lahir</label>
	<div class="col-sm-10">
	<input type="text" name="tmpLahir" class="form-control <?php echo($error_tmpLahir !=""? "is-invalid":""); ?>" id="tmpLahir" placeholder="tmpLahir" value="<?php echo $tmpLahir; ?>"><span class="warning"><?php echo $error_tmpLahir; ?></span>
	</div>
</div>

<div class="form-group-row">
	<label for="tgl" class="col-sm-2 col-form-label"> Tanggal Lahir</label>
	<div class="col-sm-10">
	<input type="date" name="tgl" class="form-control <?php echo($error_nama !=""? "is-invalid":""); ?>" id="tgl" placeholder="tgl" value="<?php echo $tgl; ?>"><span class="warning"><?php echo $error_tgl; ?></span>
	</div>
</div>		

<div class="form-group-row">
	<label for="agama" class="col-sm-2 col-form-label">Agama</label>
	<div class="col-sm-10">
	<select name="agama">
					<option value="Islam">Islam</option>
					<option value="K.Protestan">Kristen Protestan</option>
					<option value="K.Katolik">Kristen Katolik</option>
					<option value="Konghuchu">Konghuchu</option>
					<option value="Hindu">Hindu</option>
					<option value="Budha">Budha</option>
	</select>
	<span class="warning"><?php echo $error_agama; ?></span>
	</div>
</div>

<div class="form-group-row">
	<label for="kwn" class="col-sm-2 col-form-label"> Kewarganegaraan </label>
	<div class="col-sm-10">
	<input type="radio" name="kwn" value="wni"  id="kwn" placeholder="kwn" > Warga Negara Indonesia
	<input type="radio" name="kwn" value="wna"  id="kwn" placeholder="kwn"> Warga Negara Asing
	
	<span class="warning"><?php echo $error_agama; ?></span>
	</div>
</div>

<div class="form-group-row">
	<label for="kebutuhan" class="col-sm-2 col-form-label"> Kebutuhan Khusus</label>
	<div class="col-sm-10">
		<input type="checkbox" name="kebutuhan" value= "-"> Tidak ada
		<br>
		<input type="checkbox" name="kebutuhan" value= "Netra">Netra
		<input type="checkbox" name="kebutuhan" value= "Rungu">Rungu
		<br>
		<input type="checkbox" name="kebutuhan" value= "Grahita Ringan">Grahita Ringan
		<input type="checkbox" name="kebutuhan" value= "Grahita Sedang">Grahita Sedang
		<br>
		<input type="checkbox" name="kebutuhan" value= "Daksa Ringan">Daksa Ringan
		<input type="checkbox" name="kebutuhan" value= "Daksa Sedang">Daksa Sedang
		<br>
		<input type="checkbox" name="kebutuhan" value= "Laras">Laras
		<input type="checkbox" name="kebutuhan" value= "Wicara">Wicara
		<br>
		<input type="checkbox" name="kebutuhan" value= "Tuna Ganda">Tuna Ganda
		<input type="checkbox" name="kebutuhan" value= "Hiperaktif">Hiperaktif
		<br>
		<input type="checkbox" name="kebutuhan" value= "Cerdas Istimewa">Cerdas Istimewa
		<input type="checkbox" name="kebutuhan" value= "Bakat Istimewa">Bakat Istimewa
		<br>
		<input type="checkbox" name="kebutuhan" value= "Kesulitan Belajar">Kesulitan Belajar
		<input type="checkbox" name="kebutuhan" value= "Indigo">Indigo
		<br>
		<input type="checkbox" name="kebutuhan" value= "Down Sindrome">Down Sindrome
		<input type="checkbox" name="kebutuhan" value= "Autis">Autis
	<span class="warning"><?php echo $error_regis; ?></span>
	</div>
</div>	

<div class="form-group-row">
	<label for="alamat" class="col-sm-2 col-form-label"> Alamat Jalan</label>
	<div class="col-sm-10">
	<input type="text" name="alamat" class="form-control <?php echo($error_alamat !=""? "is-invalid":""); ?>" id="alamat" placeholder="alamat" value="<?php echo $alamat; ?>"><span class="warning"><?php echo $error_alamat; ?></span>
	</div>
</div>

<div class="form-group-row">
	<label for="rt" class="col-sm-2 col-form-label"> RT</label>
	<div class="col-sm-10">
	<input type="text" name="rt" class="form-control <?php echo($error_rt !=""? "is-invalid":""); ?>" id="rt" placeholder="rt" value="<?php echo $rt; ?>"><span class="warning"><?php echo $error_rt; ?></span>
	</div>
</div>

<div class="form-group-row">
	<label for="rw" class="col-sm-2 col-form-label"> RW</label>
	<div class="col-sm-10">
	<input type="text" name="rw" class="form-control <?php echo($error_rw !=""? "is-invalid":""); ?>" id="rw" placeholder="rw" value="<?php echo $rw; ?>"><span class="warning"><?php echo $error_rw; ?></span>
	</div>
</div>	

<div class="form-group-row">
	<label for="dusun" class="col-sm-2 col-form-label"> Dusun / Desa</label>
	<div class="col-sm-10">
	<input type="text" name="dusun" class="form-control <?php echo($error_dusun !=""? "is-invalid":""); ?>" id="dusun" placeholder="dusun" value="<?php echo $dusun; ?>"><span class="warning"><?php echo $error_dusun; ?></span>
	</div>
</div>

<div class="form-group-row">
	<label for="kecamatan" class="col-sm-2 col-form-label">Kecamatan</label>
	<div class="col-sm-10">
	<input type="text" name="kecamatan" class="form-control <?php echo($error_kecamatan !=""? "is-invalid":""); ?>" id="kecamatan" placeholder="kecamatan" value="<?php echo $kecamatan; ?>"><span class="warning"><?php echo $error_kecamatan; ?></span>
	</div>
</div>

<div class="form-group-row">
	<label for="pos" class="col-sm-2 col-form-label"> KODE POS</label>
	<div class="col-sm-10">
	<input type="text" name="pos" class="form-control <?php echo($error_pos !=""? "is-invalid":""); ?>" id="pos" placeholder="pos" value="<?php echo $pos; ?>"><span class="warning"><?php echo $error_pos; ?></span>
	</div>
</div>	

<div class="form-group-row">
	<label for="lintang" class="col-sm-2 col-form-label">lintang</label>
	<div class="col-sm-10">
	<input type="text" name="lintang" class="form-control <?php echo($error_lintang !=""? "is-invalid":""); ?>" id="lintang" placeholder="lintang" value="<?php echo $lintang; ?>"><span class="warning"><?php echo $error_lintang; ?></span>
	</div>
</div>

<div class="form-group-row">
	<label for="bujur" class="col-sm-2 col-form-label"> Bujur</label>
	<div class="col-sm-10">
	<input type="text" name="bujur" class="form-control <?php echo($error_bujur !=""? "is-invalid":""); ?>" id="bujur" placeholder="bujur" value="<?php echo $bujur; ?>"><span class="warning"><?php echo $error_bujur; ?></span>
	</div>
</div>

<div class="form-group-row">
	<label for="tmptinggal" class="col-sm-2 col-form-label"> Tempat Tinggal</label>
	<div class="col-sm-10">
	<select name="tmptinggal">
					<option value="rumah">Rumah Pribadi</option>
					<option value="Kontrakan"> Kontrakan</option>
					<option value="Kos">Kos</option>
					<option value="Rusunawa">Rusunawa</option>
	</select>				
	<span class="warning"><?php echo $error_tmptinggal; ?></span>
	</div>
</div>

<div class="form-group-row">
	<label for="transportasi" class="col-sm-2 col-form-label">Transportasi</label>
	<div class="col-sm-10">
	<select name="Transportasi">
					<option value="jalan">Jalan</option>
					<option value="Motor">Motor</option>
					<option value="Mobil">Mobil</option>
					<option value="Angkutan Umum">Angkutan Umum</option>
					<option value="Ojek Online">Ojek Online</option>
	</select>				
	<span class="warning"><?php echo $error_transportasi; ?></span>
	</div>
</div>

<div class="form-group-row">
	<label for="kk" class="col-sm-2 col-form-label"> Nomer KK</label>
	<div class="col-sm-10">
	<input type="text" name="kk" class="form-control <?php echo($error_kk !=""? "is-invalid":""); ?>" id="kk" placeholder="kk" value="<?php echo $kk; ?>">
	<span class="warning"><?php echo $error_kk; ?></span>
	</div>
</div>

<div class="form-group-row">
	<label for="anak" class="col-sm-2 col-form-label"> Anak Ke</label>
	<div class="col-sm-10">
	<input type="text" name="anak" class="form-control <?php echo($error_anak !=""? "is-invalid":""); ?>" id="anak" placeholder="anak" value="<?php echo $anak; ?>"><span class="warning"><?php echo $error_anak; ?></span>
	</div>
</div>

<div class="form-group-row">
	<label for="kpspkh" class="col-sm-2 col-form-label"> Penerima kpspkh</label>
	<div class="col-sm-10">
	<input type="radio" name="kpspkh" value="Ya"  id="kpspkh"> Ya
	<input type="radio" name="kpspkh" value="Tidak"  id="kpspkh"> Tidak
	<span class="warning"><?php echo $error_kpspkh; ?></span>
	</div>
</div>

<div class="form-group-row">
	<label for="nokpspkh" class="col-sm-2 col-form-label"> Nomer kpspkh</label>
	<div class="col-sm-10">
	<input type="text" name="nokpspkh" class="form-control <?php echo($error_nokpspkh !=""? "is-invalid":""); ?>" id="anak" placeholder="nokpspkh" value="<?php echo $nokpspkh; ?>"><span class="warning"><?php echo $error_nokpspkh; ?></span>
	</div>
</div>

<div class="form-group-row">
	<label for="email" class="col-sm-2 col-form-label"> Email</label>
	<div class="col-sm-10">
	<input type="text" name="email" class="form-control <?php echo($error_email !=""? "is-invalid":""); ?>" id="email" placeholder="email" value="<?php echo $email; ?>"><span class="warning"><?php echo $error_email; ?></span>
	</div>
</div>	

<div class="form-group-row">
	<label for="web" class="col-sm-2 col-form-label"> Website</label>
	<div class="col-sm-10">
	<input type="text" name="web" class="form-control <?php echo($error_web !=""? "is-invalid":""); ?>" id="web" placeholder="web" value="<?php echo $web; ?>"><span class="warning"><?php echo $error_web; ?></span>
	</div>
</div>	

<div class="form-group-row">
	<label for="telp" class="col-sm-2 col-form-label"> telp</label>
	<div class="col-sm-10">
	<input type="text" name="telp" class="form-control <?php echo($error_telp !=""? "is-invalid":""); ?>" id="telp" placeholder="telp" value="<?php echo $telp; ?>"><span class="warning"><?php echo $error_telp; ?></span>
	</div>
</div>	

<div class="form-group-row">
	<label for="pesan" class="col-sm-2 col-form-label"> Pesan</label>
	<div class="col-sm-10">
	<input type="text" name="pesan" class="form-control <?php echo($error_email !=""? "is-invalid":""); ?>" id="pesan" placeholder="pesan" value="<?php echo $pesan; ?>"><span class="warning"><?php echo $error_pesan; ?></span>
	</div>
</div>

<br>
<br>

<div class="form-group row">
<div class="col-sm-10">
<button type="submit" class="btn btn-primary"> SIGN IN</button>	
</div>	
</div>
	</form>
	</div>
</div>
</div>
</div>
</form>
</body>
</html>