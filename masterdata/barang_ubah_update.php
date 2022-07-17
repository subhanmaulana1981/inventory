<?php 

	include '../data/koneksi.php';
	$id_kategori 	= $_POST['txtIDKategori'];
	$id_barang 		= $_POST['lblId_Barang'];
	$nama_barang 	= $_POST['txtNamaBarang'];
	$stok_akhir 	= $_POST['txtStokAkhir'];
	$keterangan 	= $_POST['edtKeterangan'];

	$strQuery = "
		UPDATE barang 
		SET 
			id_kategori = '$id_kategori',
			nama_barang = '$nama_barang',
			stok_akhir 	= '$stok_akhir',
			keterangan 	= '$keterangan' 
		WHERE id_barang = '$id_barang'
	";
	$query = mysqli_query($conInventory, $strQuery) or die(mysqli_error());
	if ($query) {
		// code...
		echo "
			Berhasil diUpdate..
			<meta http-equiv='refresh' content='1, url=barang.php'>
		";
	} else {
		// code...
		echo "
			Update gagal!
			<meta http-equiv='refresh' content='1, url=barang.php'>
		";
	}

 ?>