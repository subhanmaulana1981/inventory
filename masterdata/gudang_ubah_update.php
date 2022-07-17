<?php 

	include '../data/koneksi.php';
	$id_gudang = $_POST['lblId_Gudang'];
	$nama_gudang = $_POST['txtNamaGudang'];

	$strQuery = "UPDATE gudang SET nama_gudang = '$nama_gudang' WHERE id_gudang = '$id_gudang'";
	$query = mysqli_query($conInventory, $strQuery) or die(mysqli_error());
	if ($query) {
		// code...
		echo "
			Berhasil diUpdate..
			<meta http-equiv='refresh' content='1, url=gudang.php'>
		";
	} else {
		// code...
		echo "
			Update gagal!
			<meta http-equiv='refresh' content='1, url=gudang.php'>
		";
	}

 ?>