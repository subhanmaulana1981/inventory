<?php 

	include '../data/koneksi.php';
	$id_kategori = $_POST['lblId_Kategori'];
	$nama_kategori = $_POST['txtNamaKategori'];

	$strQuery = "UPDATE kategori_barang SET nama_kategori = '$nama_kategori' WHERE id_kategori = '$id_kategori'";
	$query = mysqli_query($conInventory, $strQuery) or die(mysqli_error());
	if ($query) {
		// code...
		echo "
			Berhasil diUpdate..
			<meta http-equiv='refresh' content='1, url=kategori_barang.php'>
		";
	} else {
		// code...
		echo "
			Update gagal!
			<meta http-equiv='refresh' content='1, url=kategori_barang.php'>
		";
	}

 ?>