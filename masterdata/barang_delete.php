<?php 

	include '../data/koneksi.php';
	$id_barang = $_GET['id_barang'];
	$strQuery = "DELETE FROM barang WHERE id_barang = '$id_barang'";
	$query = mysqli_query($conInventory, $strQuery) or die(mysqli_error());
	if ($query) {
		// code...
		echo "
			Berhasil diHapus..
			<meta http-equiv='refresh' content='1, url=barang.php'>
		";
	} else {
		// code...
		echo "
			Hapus data gagal!
			<meta http-equiv='refresh' content='1, url=barang.php'>
		";
	}	

 ?>
 