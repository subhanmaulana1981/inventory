<?php 

	include '../data/koneksi.php';
	$id_rak = $_POST['lblId_Rak'];
	$nama_rak = $_POST['txtNamaRak'];

	$strQuery = "UPDATE rak_barang SET nama_rak = '$nama_rak' WHERE id_rak = '$id_rak'";
	$query = mysqli_query($conInventory, $strQuery) or die(mysqli_error());
	if ($query) {
		// code...
		echo "
			Berhasil diUpdate..
			<meta http-equiv='refresh' content='1, url=rak_barang.php'>
		";
	} else {
		// code...
		echo "
			Update gagal!
			<meta http-equiv='refresh' content='1, url=rak_barang.php'>
		";
	}

 ?>