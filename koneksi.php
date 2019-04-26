<?php

	$server = "localhost";
	$user = "root";
	$password = "";
	$nm_db = "db_ppdb";
	
	$connect = mysqli_connect($server, $user, $password, $nm_db);
	
	if(!$connect){
		echo "Koneksi ke database gagal : ".mysqli_connect_error();
	}
?>