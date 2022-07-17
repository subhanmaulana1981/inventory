<?php 
	include '../data/koneksi.php';

	$tanggal_keluar_masuk = $_POST['objTanggal'];
	$id_barang = $_POST['cboIDBarang'];
	$masuk = $_POST['txtMasuk'];
	$keluar = $_POST['txtKeluar'];

	$strQuery = "

		INSERT INTO keluar_masuk_barang(
			tanggal_keluar_masuk,
			id_barang,
			masuk,
			keluar
		) VALUES(
			'$tanggal_keluar_masuk',
			'$id_barang',
			'$masuk',
			'$keluar'
		)

	";

	// echo "$strQuery";

	$query = mysqli_query($conInventory, $strQuery) or die(mysqli_error($conInventory));

	$strQuery = "

		UPDATE barang
		SET stok_akhir = (stok_akhir + '$masuk') - '$keluar'
		WHERE id_barang = '$id_barang'

	";

	$query = mysqli_query($conInventory, $strQuery) or die(mysqli_error($conInventory));

	if ($query) {
		// code...
		echo "
			Berhasil diSimpan..
			<meta http-equiv='refresh' content='1, url=keluar_masuk_barang.php'>
		";
	} else {
		// code...
		echo "
			Gagal simpan..
			<meta http-equiv='refresh' content='1, url=keluar_masuk_barang.php'>			
		";
	}
	

 ?>