<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Rak Barang | Ubah</title>

		<link rel="stylesheet" type="text/css" href="../style/bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css">
		<script type="text/javascript" src="../style/bootstrap-5.2.0-beta1-dist/js/bootstrap.bundle.min.js"></script>		
	</head>

	<body>
		<?php 
			include '../shared/header.php';
			include '../data/koneksi.php';

			$id_rak = $_GET['id_rak'];
			$strQuery = "SELECT * FROM rak_barang WHERE id_rak = '$id_rak'";
			$query = mysqli_query($conInventory, $strQuery) or die(mysqli_error());
			while ($data = mysqli_fetch_array($query)) {
				// code...
				$id_rak = $data['id_rak'];
				$nama_rak = $data['nama_rak'];
		 ?>

		 <form action="rak_barang_ubah_update.php" method="post">
		 	<!-- Label Form -->
		 	<h3>Form Edit Rak Barang</h3>

		 	<!-- Sembunyikan ID Rak -->
		 	<input type="hidden" name="lblId_Rak" value="<?php echo $id_rak; ?>">

		 	<!-- Field Table Rak Barang -->
		 	<table>
		 		<tr>
		 			<td>Nama Rak</td>
		 			<td>:</td>
		 			<td><input type="text" name="txtNamaRak" value="<?php echo $nama_rak; ?>"></td>
		 		</tr>
		 	</table>

		 	<!-- Command Button -->
		 	<input class="btn btn-primary" type="submit" name="cmdSubmit" value="Ubah">
		 </form>

		<?php 
			}
		 ?>

		 <a href="rak_barang.php">Kembali ke Rak Barang</a>

		 <?php include '../shared/footer.php'; ?>
	</body>
</html>