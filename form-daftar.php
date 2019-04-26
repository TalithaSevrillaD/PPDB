<!Doctype html>
<html>
	<head>
		<title>Formulir Pendaftaraan Siswa Baru</title>
		<link rel="stylesheet" href="css.css">
	</head>
	<body>	
		<header>
			<h2 align="center">Formulir Pendaftaran Siswa Baru</h2>
		</header>
		
		<div class="container">
		<form action="daftar.php" method="POST">
			<fieldset>
				<legend>Registration Form</legend>
			<table>
				<tr>
					<td><label class="col-3 label" for="nis">NIS</label></td>
					<td>:</td>
					<td><div class="col-9"><input class="form-control" type="text" name="nis" /></div></td>
				</tr>
				<tr>
					<td><label class="col-3 label" for="nama">Nama</label></td>
					<td>:</td>
					<td><div class="col-9"><input class="form-control" type="text" name="nama" placeholder="Nama Lengkap"/></div></td>
				</tr>
				<tr>
					<td><label class="col-3 label" for="alamat">Alamat</label></td>
					<td>:</td>
					<td><div class="col-9"><textarea name="alamat" class="form-control" ></textarea></div></td>
				</tr>
				<tr>
					<td><label class="col-3 label" for="jenis_kelamin">Jenis Kelamin</label></td>
					<td>:</td>
					<td><div class="col-9">
						<label><input type="radio" name="jenis_kelamin" value="Laki-Laki"> Laki-laki</label>
						<label><input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan</label>
						</div>
					</td>
				</tr>
				<tr>
					<td><label class="col-3 label" for="sekolah_asal">Sekolah Asal</label></td>
					<td>:</td>
					<td><div class="col-9"><input type="text" class="form-control" name="sekolah_asal" placeholder="Nama sekolah"/></div></td>
				</tr>
				<tr>
					<td><label class="col-3 label" for="jurusan">Jurusan</label></td>
					<td>:</td>
					<td><div class="col-3 label">
						<label><input type="radio" name="jurusan" value="RPL"> RPL</label>
						<label><input type="radio" name="jurusan" value="TKJ"> TKJ</label>
						</div>
					</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td><button type="submit" class="button" name="daftar">Daftar</button></td>
				</tr>
			</table>
			</fieldset>
		</form>
		</div>
	</body>
</html>