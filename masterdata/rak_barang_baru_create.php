<?php 

	include '../data/koneksi.php';

	$nama_rak = $_POST['txtNamaRak'];
	$strQuery = "INSERT INTO rak_barang(nama_rak) VALUES('$nama_rak')";
	$query = mysqli_query($conInventory, $strQuery) or die(mysqli_error($conInventory));

	if ($query) {
		// code...
		echo "
			Berhasil diSimpan..
			<meta http-equiv='refresh' content='1, url=rak_barang.php'>
		";
	} else {
		// code...
		echo "
			Gagal simpan!
			<meta http-equiv='refresh' content='1, url=rak_barang.php'>			
		";
	}
	

 ?>