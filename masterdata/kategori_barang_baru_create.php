<?php 
	include '../data/koneksi.php';

	$nama_kategori = $_POST['txtNamaKategori'];
	$strQuery = "INSERT INTO kategori_barang(nama_kategori) VALUES('$nama_kategori')";
	$query = mysqli_query($conInventory, $strQuery) or die(mysqli_error($conInventory));

	if ($query) {
		// code...
		echo "
			Berhasil diSimpan..
			<meta http-equiv='refresh' content='1, url=kategori_barang.php'>
		";
	} else {
		// code...
		echo "
			Gagal simpan..
			<meta http-equiv='refresh' content='1, url=kategori_barang.php'>			
		";
	}
	

 ?>