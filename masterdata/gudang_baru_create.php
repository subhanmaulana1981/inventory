<?php 
	include '../data/koneksi.php';

	$nama_gudang = $_POST['txtNamaGudang'];
	$strQuery = "INSERT INTO gudang(nama_gudang) VALUES('$nama_gudang')";
	$query = mysqli_query($conInventory, $strQuery) or die(mysqli_error($conInventory));

	if ($query) {
		// code...
		echo "
			Berhasil diSimpan..
			<meta http-equiv='refresh' content='1, url=gudang.php'>
		";
	} else {
		// code...
		echo "
			Gagal simpan..
			<meta http-equiv='refresh' content='1, url=gudang.php'>			
		";
	}
	

 ?>