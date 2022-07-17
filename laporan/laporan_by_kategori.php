<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Laporan | By Kategori Barang</title>

		<link rel="stylesheet" type="text/css" href="../style/bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css">
		<script type="text/javascript" src="../style/bootstrap-5.2.0-beta1-dist/js/bootstrap.bundle.min.js"></script>		

	</head>

	<body>
		<?php include '../shared/header.php'; ?>

		<h4>Laporan | By Kategori Barang</h4>

		<table class="table table-striped">
			<tr>
				<td>Kategori</td>
				<td>Barang</td>
				<td>Masuk</td>
				<td>Keluar</td>
				<td>Stok Akhir</td>
			</tr>

			<?php  
				include '../data/koneksi.php';

				$strQuery = "
								SELECT
								  M2.nama_kategori,
								  M.nama_barang,
								  SUM(T.masuk) AS masuk,
								  SUM(T.keluar) AS keluar,
								  M.stok_akhir
								FROM keluar_masuk_barang AS T
								  INNER JOIN barang AS M
								  ON T.id_barang = M.id_barang

								  INNER JOIN kategori_barang AS M2
								  ON M.id_kategori = M2.id_kategori

								  GROUP BY M.nama_barang
								ORDER BY M2.nama_kategori, M.nama_barang
							";
				$query = mysqli_query($conInventory, $strQuery) or die(mysqli_error());

				while ($data = mysqli_fetch_array($query)) {
					// code...
					$nama_kategori = $data["nama_kategori"];
					$nama_barang 			= $data["nama_barang"];
					$masuk 					= $data["masuk"];
					$keluar 				= $data["keluar"];
					$stok_akhir 			= $data["stok_akhir"];

			?>

			<tr>
								
				<td><?php echo $nama_kategori; ?></td>
				<td><?php echo $nama_barang; ?></td>
				<td><?php echo $masuk; ?></td>
				<td><?php echo $keluar; ?></td>
				<td><?php echo $stok_akhir; ?></td>

			</tr>

			<?php } ?>
		</table>

		<a href="..">Kembali ke Beranda</a>

		<?php include '../shared/footer.php'; ?>
	</body>
</html>