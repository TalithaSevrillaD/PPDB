<?php include("koneksi.php");?>

<!DOCTYPE html>
<html>
	<head>
		<title>Pendaftaran Siswa Baru</title>
		<link rel="stylesheet" href="tabel.css"/>
	</head>
	
	<body>
		<header>
			<h2>Siswa yang sudah mendaftar</h2>
		</header>
	
	<form action="search.php" method="get">
		<input class="kotak" type="search" name="cari" placeholder="Masukkan pencarian" >
		<input type="submit" value="cari">
	</form>
	<br>
    <table class="table1">
    <thead>
        <tr>
			<th>NIS</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Sekolah Asal</th>
            <th>Jurusan</th>
			<th colspan="2">Aksi</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM siswa";
        $query = mysqli_query($connect, $sql);

        while($siswa = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$siswa['nis']."</td>";
            echo "<td>".$siswa['nama']."</td>";
            echo "<td>".$siswa['alamat']."</td>";
            echo "<td>".$siswa['jenis_kelamin']."</td>";
            echo "<td>".$siswa['sekolah_asal']."</td>";
			echo "<td>".$siswa['jurusan']."</td>";

            echo "<td>";
            echo "<a href='form-edit.php?nis=".$siswa['nis']."'>Edit</a> | ";
            echo "<a href='hapus.php?nis=".$siswa['nis']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

    <h3><p>Total: <?php echo mysqli_num_rows($query) ?> Siswa <i>yang mendaftar</i></p></h3>
	<div class="button">
        <a href="form-daftar.php">Daftar Lagi</a>
	</div>
	<br>
	<br>
	<br>
	<div class="button">
		<a href="index.php">Kembali</a>
	</div>


    </body>
</html>