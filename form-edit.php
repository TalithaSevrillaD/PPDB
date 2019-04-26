<?php

include("koneksi.php");

if(!isset($_GET['nis'])){
	header('Location: pendaftar.php');
}

$nis = $_GET['nis'];

$sql= "SELECT * FROM siswa WHERE nis=$nis";
$query= mysqli_query($connect, $sql);
$siswa = mysqli_fetch_assoc($query);

if (mysqli_num_rows($query) < 1){
	die("data tidak ditemukan...");
}
?>

<!Doctype html>
<html>
<head>
	<title>Formulir Edit Siswa</title>
	<link rel="stylesheet" href="css.css" />
</head>

<body>
	<header>
		<h2>Formulir Edit Siswa</h2>
	</header>
	
	<div class="container">
	<form action="edit.php?kode=<?php echo $_GET['nis']; ?>" method="POST">
		<fieldset>
				<legend>Editing Form</legend>
				<table>
				<tr>
					<td><label class="col-3 label" for="nis">NIS</label></td>
					<td>:</td>
					<td><div class="col-9"><input class="form-control" type="text" name="nis" readonly value="<?php echo $siswa['nis'];?>"/></div></td>
				</tr>
				<tr>
					<td><label class="col-3 label" for="nama">Nama</label></td>
					<td>:</td>
					<td><div class="col-9"><input class="form-control" type="text" name="nama" placeholder="Nama Lengkap" value="<?php echo $siswa['nama']?>"/></div></td>
				</tr>
				<tr>
					<td><label class="col-3 label" for="alamat">Alamat</label></td>
					<td>:</td>
					<td><div class="col-9"><textarea name="alamat"><?php echo $siswa['alamat']?></textarea></div></td>
				</tr>
				<tr>
					<td><label class="col-3 label" for="jenis_kelamin">Jenis Kelamin</label></td>
					<td>:</td>
					<?php $jk = $siswa['jenis_kelamin']; ?>
					<td><div class="col-9">
						<label><input type="radio" name="jenis_kelamin" value="laki-laki" <?php echo ($jk == 'laki-laki') ? "checked": "" ?>> Laki-laki</label>
						<label><input type="radio" name="jenis_kelamin" value="perempuan" <?php echo ($jk == 'perempuan') ? "checked": "" ?>> Perempuan</label>
						</div>
					</td>
				</tr>
				<tr>
					<td><label class="col-3 label" for="sekolah_asal">Sekolah Asal</label></td>
					<td>:</td>
					<td><div class="col-9"><input type="text" name="sekolah_asal" placeholder="Nama sekolah" value="<?php echo $siswa['sekolah_asal']?>"/></div></td>
				</tr>
				<tr>
					<td><label class="col-3 label" for="jurusan">Jurusan</label></td>
					<td>:</td>
					<?php $jurusan = $siswa['jurusan']; ?>
					<td><div class="col-3 label">
						<label><input type="radio" name="jurusan" value="RPL" <?php echo ($jurusan == 'RPL') ? "checked": "" ?>> RPL</label>
						<label><input type="radio" name="jurusan" value="TKJ" <?php echo ($jurusan == 'TKJ') ? "checked": "" ?>> TKJ</label>
						</div>
					</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td><button type="submit" class="button" name="simpan">Simpan</button>
						<input type="hidden" name="nis" value="<?php echo $siswa['nis'] ?>"/></td>
				</tr>
			</table>
			</fieldset>
		</form>
		</div>
	</body>
</html>