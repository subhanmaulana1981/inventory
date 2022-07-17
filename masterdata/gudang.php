<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Master Data | Gudang</title>

		<link rel="stylesheet" type="text/css" href="../style/bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css">
		<script type="text/javascript" src="../style/bootstrap-5.2.0-beta1-dist/js/bootstrap.bundle.min.js"></script>		

	</head>

	<body>
		<?php include '../shared/header.php'; ?>

		<h4>Master data | Gudang</h4>

		<table class="table table-striped">
			<a href="gudang_baru.php">Buat data baru</a>
			<tr>
				<td>ID Gudang</td>
				<td>Nama Gudang</td>
				<td>Operation</td>
			</tr>

			<?php  
				include '../data/koneksi.php';

				$strQuery = "SELECT * FROM gudang";
				$query = mysqli_query($conInventory, $strQuery) or die(mysqli_error());

				while ($data = mysqli_fetch_array($query)) {
					// code...
					$id_gudang = $data["id_gudang"];
					$nama_gudang = $data["nama_gudang"];
			?>

			<tr>
				<td><?php echo $id_gudang; ?></td>
				<td><?php echo $nama_gudang; ?></td>

				<td>
					<a href="gudang_ubah.php?id_gudang= <?php echo $id_gudang; ?>">Edit</a> |
					<a href="gudang_delete.php?id_gudang= <?php echo $id_gudang; ?>" onclick="return confirm('Yakin mau hapus <?php echo $nama_gudang; ?> ?')">
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