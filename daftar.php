<?php
	include("koneksi.php");
	
	if(isset($_POST['daftar'])){
		$nis=$_POST['nis'];
		$nama=$_POST['nama'];
		$alamat=$_POST['alamat'];
		$jk= $_POST['jenis_kelamin'];
		$sekolah=$_POST['sekolah_asal'];
		$jurusan=$_POST['jurusan'];
		
		$sql="INSERT INTO siswa(nis, nama, alamat, jenis_kelamin, sekolah_asal, jurusan) VALUE ('$nis', '$nama', '$alamat', '$jk', '$sekolah', '$jurusan')";
		$query= mysqli_query($connect, $sql);
		
		if($query){
			header('Location: pendaftar.php?status=sukses');
		} else {
			header('Location: pendaftar.php?status=gagal');
		}
	} else {
		die("Akses dilarang...");
	}
?>