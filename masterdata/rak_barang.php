<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Master Data | Rak Barang</title>

		<link rel="stylesheet" type="text/css" href="../style/bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css">
		<script type="text/javascript" src="../style/bootstrap-5.2.0-beta1-dist/js/bootstrap.bundle.min.js"></script>		

	</head>

	<body>
		<?php include '../shared/header.php'; ?>

		<h4>Master data | Rak Barang</h4>

		<table class="table table-striped">
			<a href="rak_barang_baru.php">Buat data baru</a>
			<tr>
				<td>ID Rak</td>
				<td>Nama Rak</td>
				<td>Operasi</td>
			</tr>

			<?php  
				include '../data/koneksi.php';

				$strQuery = "SELECT * FROM rak_barang";
				$query = mysqli_query($conInventory, $strQuery) or die(mysqli_error());

				while ($data = mysqli_fetch_array($query)) {
					// code...
					$id_rak = $data["id_rak"];
					$nama_rak = $data["nama_rak"];
			?>

			<tr>
				<td><?php echo $id_rak; ?></td>
				<td><?php echo $nama_rak; ?></td>

				<td>
					<a href="rak_barang_ubah.php?id_rak= <?php echo $id_rak; ?>">Edit</a> |
					<a 
						href="rak_barang_delete.php?id_rak= <?php echo $id_rak; ?>" 
						onclick="return confirm('Yakin mau hapus <?php echo $nama_rak; ?> ?')">
						Hapus
					</a>
				</td>
			</tr>

			<?php } ?>
		</table>

		<a href="..">Kembali ke Beranda</a>

		<?php include '../shared/footer.php'; ?>
	</body>
</html>