<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Master Data | Kategori Barang</title>

		<link rel="stylesheet" type="text/css" href="../style/bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css">
		<script type="text/javascript" src="../style/bootstrap-5.2.0-beta1-dist/js/bootstrap.bundle.min.js"></script>		

	</head>

	<body>
		<?php include '../shared/header.php'; ?>

		<h4>Master data | Kategori Barang</h4>

		<table class="table table-striped">
			<a href="kategori_barang_baru.php">Buat data baru</a>
			<tr>
				<td>ID Kategori</td>
				<td>Nama Kategori</td>
				<td>Operasi</td>
			</tr>

			<?php  
				include '../data/koneksi.php';

				$strQuery = "SELECT * FROM kategori_barang";
				$query = mysqli_query($conInventory, $strQuery) or die(mysqli_error());

				while ($data = mysqli_fetch_array($query)) {
					// code...
					$id_kategori = $data["id_kategori"];
					$nama_kategori = $data["nama_kategori"];
			?>

			<tr>
				<td><?php echo $id_kategori; ?></td>
				<td><?php echo $nama_kategori; ?></td>

				<td>
					<a href="kategori_barang_ubah.php?id_kategori= <?php echo $id_kategori; ?>">Edit</a> |
					<a href="kategori_barang_delete.php?id_kategori= <?php echo $id_kategori; ?>" onclick="return confirm('Yakin mau hapus <?php echo $nama_kategori; ?> ?')">
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