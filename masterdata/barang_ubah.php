<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Barang | Ubah</title>

		<link rel="stylesheet" type="text/css" href="../style/bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css">
		<script type="text/javascript" src="../style/bootstrap-5.2.0-beta1-dist/js/bootstrap.bundle.min.js"></script>		
	</head>

	<body>
		<?php 
			include '../shared/header.php';
			include '../data/koneksi.php';

			$id_barang = $_GET['id_barang'];
			$strQuery = "SELECT * FROM barang WHERE id_barang = '$id_barang'";
			$query = mysqli_query($conInventory, $strQuery) or die(mysqli_error());
			while ($data = mysqli_fetch_array($query)) {
				// code...
				$id_kategori = $data['id_kategori'];
				$id_barang = $data['id_barang'];
				$nama_barang = $data['nama_barang'];
				$stok_akhir = $data['stok_akhir'];
				$keterangan = $data['keterangan'];
		 ?>

		 <form action="barang_ubah_update.php" method="post">
		 	<!-- Label Form -->
		 	<h3>Form Edit Barang</h3>

		 	<!-- Sembunyikan ID Barang -->
		 	<input type="hidden" name="lblId_Barang" value="<?php echo $id_barang; ?>">

		 	<!-- Field Table Barang -->

		 	<table>
		 		<tr>
		 			<td>ID Kategori</td>
		 			<td>:</td>
		 			<td><input type="text" name="txtIDKategori" value="<?php echo $id_kategori; ?>"></td>
		 		</tr>

		 		<tr>
		 			<td>Nama Barang</td>
		 			<td>:</td>
		 			<td><input type="text" name="txtNamaBarang" value="<?php echo $nama_barang; ?>"></td>
		 		</tr>

		 		<tr>
		 			<td>Stok Akhir</td>
		 			<td>:</td>
		 			<td><input type="text" name="txtStokAkhir" value="<?php echo $stok_akhir; ?>"></td>
		 		</tr>

		 		<tr>
		 			<td>Keterangan</td>
		 			<td>:</td>
		 			<td><textarea name="edtKeterangan"><?php echo $keterangan; ?></textarea></td>
		 		</tr>

		 	</table>

		 	<!-- Command Button -->
		 	<input class="btn btn-primary" type="submit" name="cmdSubmit" value="Ubah">
		 </form>

		<?php 
			}
		 ?>

		 <a href="barang.php">Kembali ke Barang</a>

		 <?php include '../shared/footer.php'; ?>
	</body>
</html>