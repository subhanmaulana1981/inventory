<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Transaksi | Keluar-Masuk Barang</title>

		<link rel="stylesheet" type="text/css" href="../style/bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css">
		<script type="text/javascript" src="../style/bootstrap-5.2.0-beta1-dist/js/bootstrap.bundle.min.js"></script>		

	</head>

	<body>
		<?php include '../shared/header.php'; ?>

		<h4>Transaksi | Keluar-Masuk Barang</h4>

		<table class="table table-striped">
			<a href="keluar_masuk_barang_baru.php">Buat transaksi baru</a>
			<tr>

				<td>ID Transaksi</td>
				<td>Tanggal Transaksi</td>

				<td>ID Barang</td>
				<td>Nama Barang</td>

				<td>Masuk</td>
				<td>Keluar</td>
				<td>Stok Akhir</td>

			</tr>

			<?php  
				include '../data/koneksi.php';

				$strQuery = "
							SELECT
							  T.id_keluar_masuk,
							  T.tanggal_keluar_masuk,
							  T.id_barang,
							  M.nama_barang,
							  T.masuk,
							  T.keluar,
							  M.stok_akhir
							FROM keluar_masuk_barang AS T
							  INNER JOIN barang AS M
							  ON T.id_barang = M.id_barang;
							";
				$query = mysqli_query($conInventory, $strQuery) or die(mysqli_error());

				while ($data = mysqli_fetch_array($query)) {
					// code...
					$id_keluar_masuk 		= $data["id_keluar_masuk"];
					$tanggal_keluar_masuk 	= $data["tanggal_keluar_masuk"];
					$id_barang 				= $data["id_barang"];
					$nama_barang 			= $data["nama_barang"];
					$masuk 					= $data["masuk"];
					$keluar 				= $data["keluar"];
					$stok_akhir 			= $data["stok_akhir"];

			?>

			<tr>
								
				<td><?php echo $id_keluar_masuk; ?></td>
				<td><?php echo $tanggal_keluar_masuk; ?></td>
				<td><?php echo $id_barang; ?></td>
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