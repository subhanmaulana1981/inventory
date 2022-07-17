<?php 

	include '../data/koneksi.php';
	$id_gudang = $_GET['id_gudang'];
	$strQuery = "DELETE FROM gudang WHERE id_gudang = '$id_gudang'";
	$query = mysqli_query($conInventory, $strQuery) or die(mysqli_error());
	if ($query) {
		// code...
		echo "
			Berhasil diHapus..
			<meta http-equiv='refresh' content='1, url=gudang.php'>
		";
	} else {
		// code...
		echo "
			Hapus data gagal!
			<meta http-equiv='refresh' content='1, url=gudang.php'>
		";
	}	

 ?>