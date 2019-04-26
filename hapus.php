<?php

include("koneksi.php");

if(isset($_GET['nis'])){
	$nis = $_GET['nis'];
	$sql = "DELETE FROM siswa WHERE nis=$nis";
	$query = mysqli_query($connect, $sql);
	
	if($query){
		header('Location: pendaftar.php');
	} else{
		die("gagal menghapus...");
	}
} else{
	die("Akses dilarang...");
}
?>