<?php 

	include '../data/koneksi.php';
	$id_rak = $_GET['id_rak'];
	$strQuery = "DELETE FROM rak_barang WHERE id_rak = '$id_rak'";
	$query = mysqli_query($conInventory, $strQuery) or die(mysqli_error());
	if ($query) {
		// code...
		echo "
			Berhasil diHapus..
			<meta http-equiv='refresh' content='1, url=rak_barang.php'>
		";
	} else {
		// code...
		echo "
			Hapus data gagal!
			<meta http-equiv='refresh' content='1, url=rak_barang.php'>
		";
	}	

 ?>