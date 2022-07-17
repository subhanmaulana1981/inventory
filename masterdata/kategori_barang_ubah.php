<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Kategori Barang | Ubah</title>

		<link rel="stylesheet" type="text/css" href="../style/bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css">
		<script type="text/javascript" src="../style/bootstrap-5.2.0-beta1-dist/js/bootstrap.bundle.min.js"></script>		
	</head>

	<body>
		<?php 
			include '../shared/header.php';
			include '../data/koneksi.php';

			$id_kategori = $_GET['id_kategori'];
			$strQuery = "SELECT * FROM kategori_barang WHERE id_kategori = '$id_kategori'";
			$query = mysqli_query($conInventory, $strQuery) or die(mysqli_error());
			while ($data = mysqli_fetch_array($query)) {
				// code...
				$id_kategori = $data['id_kategori'];
				$nama_kategori = $data['nama_kategori'];
		 ?>

		 <form action="kategori_barang_ubah_update.php" method="post">
		 	<!-- Label Form -->
		 	<h3>Form Edit Gudang</h3>

		 	<!-- Sembunyikan ID Gudang -->
		 	<input type="hidden" name="lblId_Kategori" value="<?php echo $id_kategori; ?>">

		 	<!-- Field Table Gudang -->
		 	<table>
		 		<tr>
		 			<td>Nama Kategori</td>
		 			<td>:</td>
		 			<td><input type="text" name="txtNamaKategori" value="<?php echo $nama_kategori; ?>"></td>
		 		</tr>
		 	</table>

		 	<!-- Command Button -->
		 	<input class="btn btn-primary" type="submit" name="cmdSubmit" value="Ubah">
		 </form>

		<?php 
			}
		 ?>

		 <a href="kategori_barang.php">Kembali ke Kategori Barang</a>

		 <?php include '../shared/footer.php'; ?>
	</body>
</html>