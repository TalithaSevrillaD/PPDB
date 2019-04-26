<?php

include("koneksi.php");

if(isset($_POST['simpan'])){
	
	$nis = $_POST['nis'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$jk = $_POST['jenis_kelamin'];
	$sekolah = $_POST['sekolah_asal'];
	$jurusan = $_POST['jurusan'];
	
	$sql = "UPDATE siswa SET nama='$nama', alamat='$alamat', jenis_kelamin='$jk', sekolah_asal='$sekolah', jurusan='$jurusan' WHERE nis='$nis'";
	$query = mysqli_query($connect, $sql);
	
	if($query){
		header('Location: pendaftar.php');
	} else{
		die("Gagal menyimpan perubahan...");
	}
} else{
	die("Akses dilarang...");
}
?>