<?php 

	include '../data/koneksi.php';
	$id_kategori = $_GET['id_kategori'];
	$strQuery = "DELETE FROM kategori_barang WHERE id_kategori = '$id_kategori'";
	$query = mysqli_query($conInventory, $strQuery) or die(mysqli_error());
	if ($query) {
		// code...
		echo "
			Berhasil diHapus..
			<meta http-equiv='refresh' content='1, url=kategori_barang.php'>
		";
	} else {
		// code...
		echo "
			Hapus data gagal!
			<meta http-equiv='refresh' content='1, url=kategori_barang.php'>
		";
	}	

 ?>