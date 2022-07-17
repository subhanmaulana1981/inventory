<?php 
	include '../data/koneksi.php';

	$id_kategori = $_POST['cboIDKategori'];
	$nama_barang = $_POST['txtNamaBarang'];
	$stok_akhir = $_POST['txtStokAkhir'];
	$keterangan = $_POST['edtKeterangan'];
	$strQuery = "

		INSERT INTO barang(
			id_kategori,
			nama_barang,
			stok_akhir,
			keterangan
		) VALUES(
			'$id_kategori',
			'$nama_barang',
			'$stok_akhir',
			'$keterangan'
		)

	";

	// echo $strQuery;

	$query = mysqli_query($conInventory, $strQuery) or die(mysqli_error($conInventory));

	if ($query) {
		// code...
		echo "
			Berhasil diSimpan..
			<meta http-equiv='refresh' content='1, url=barang.php'>
		";
	} else {
		// code...
		echo "
			Gagal simpan..
			<meta http-equiv='refresh' content='1, url=barang.php'>			
		";
	}
	

 ?>