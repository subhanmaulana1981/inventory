<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Master Data | Barang</title>

		<link rel="stylesheet" type="text/css" href="../style/bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css">
		<script type="text/javascript" src="../style/bootstrap-5.2.0-beta1-dist/js/bootstrap.bundle.min.js"></script>		

	</head>

	<body>
		<?php include '../shared/header.php'; ?>

		<h4>Master data | Barang</h4>

		<table class="table table-striped">
			<a href="barang_baru.php">Buat data baru</a>
			<tr>
				<td>ID Kategori</td>
				<td>Nama Kategori</td>
				<td>ID Barang</td>
				<td>Nama Barang</td>
				<td>Stok Akhir</td>
				<td>Keterangan</td>
				<td>Operasi</td>
			</tr>

			<?php  
				include '../data/koneksi.php';

				$strQuery = "SELECT
							  b.id_kategori,
							  kb.nama_kategori,
							  b.id_barang,
							  b.nama_barang,
							  b.stok_akhir,
							  b.keterangan
							FROM barang AS b
							  INNER JOIN kategori_barang AS kb
							  ON b.id_kategori = kb.id_kategori
							ORDER BY b.id_kategori";
				$query = mysqli_query($conInventory, $strQuery) or die(mysqli_error());

				while ($data = mysqli_fetch_array($query)) {
					// code...
					$id_kategori 	= $data["id_kategori"];
					$nama_kategori 	= $data["nama_kategori"];
					$id_barang 		= $data["id_barang"];
					$nama_barang 	= $data["nama_barang"];
					$stok_akhir 	= $data["stok_akhir"];
					$keterangan 	= $data["keterangan"];

			?>

			<tr>
								
				<td><?php echo $id_kategori; ?></td>
				<td><?php echo $nama_kategori; ?></td>
				<td><?php echo $id_barang; ?></td>
				<td><?php echo $nama_barang; ?></td>
				<td><?php echo $stok_akhir; ?></td>
				<td><?php echo $keterangan; ?></td>

				<td>
					<a href="barang_ubah.php?id_barang= <?php echo $id_barang; ?>">Edit</a> |
					<a href="barang_delete.php?id_barang= <?php echo $id_barang; ?>" onclick="return confirm('Yakin mau hapus <?php echo $nama_barang; ?> ?')">
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