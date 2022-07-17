<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Gudang | Ubah</title>

		<link rel="stylesheet" type="text/css" href="../style/bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css">
		<script type="text/javascript" src="../style/bootstrap-5.2.0-beta1-dist/js/bootstrap.bundle.min.js"></script>		
	</head>

	<body>
		<?php 
			include '../shared/header.php';
			include '../data/koneksi.php';

			$id_gudang = $_GET['id_gudang'];
			$strQuery = "SELECT * FROM gudang WHERE id_gudang = '$id_gudang'";
			$query = mysqli_query($conInventory, $strQuery) or die(mysqli_error());
			while ($data = mysqli_fetch_array($query)) {
				// code...
				$id_gudang = $data['id_gudang'];
				$nama_gudang = $data['nama_gudang'];
		 ?>

		 <form action="gudang_ubah_update.php" method="post">
		 	<!-- Label Form -->
		 	<h3>Form Edit Gudang</h3>

		 	<!-- Sembunyikan ID Gudang -->
		 	<input type="hidden" name="lblId_Gudang" value="<?php echo $id_gudang; ?>">

		 	<!-- Field Table Gudang -->
		 	<table>
		 		<tr>
		 			<td>Nama Gudang</td>
		 			<td>:</td>
		 			<td><input type="text" name="txtNamaGudang" value="<?php echo $nama_gudang; ?>"></td>
		 		</tr>
		 	</table>

		 	<!-- Command Button -->
		 	<input class="btn btn-primary" type="submit" name="cmdSubmit" value="Ubah">
		 </form>

		<?php 
			}
		 ?>

		 <a href="gudang.php">Kembali ke Gudang</a>

		 <?php include '../shared/footer.php'; ?>
	</body>
</html>