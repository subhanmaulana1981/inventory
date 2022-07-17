<?php 
	// Informasi server
	$server = "localhost";
	$userName = "root";
	$password = "";
	$database = "inventory";

	// Koneksi ke MySQL
	$conInventory = mysqli_connect(
		$server,
		$userName,
		$password,
		$database
	);

 ?>