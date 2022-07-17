<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Keluar-Masuk Barang | Baru</title>

		<link rel="stylesheet" type="text/css" href="../style/bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css">
		<script type="text/javascript" src="../style/bootstrap-5.2.0-beta1-dist/js/bootstrap.bundle.min.js"></script>		
	</head>
	
	<body>
		<?php include '../shared/header.php'; ?>

		<!-- Form input data transaksi -->
		<form class=".form-control" action="keluar_masuk_barang_baru_create.php" method="post">
			<table>
				<tr>
					<td colspan="3"><h3>Form Input Transaksi</h3></td>
				</tr>

				<tr>
					<td>Tanggal Transaksi</td>
					<td>:</td>
					<td><input type="datetime-local" name="objTanggal"></td>
				</tr>

				<tr>
					<td>ID Barang</td>
					<td>:</td>
					<td>
						<select name="cboIDBarang">
							<!-- Ambil LookUp Barang -->
							<?php 
								include '../data/koneksi.php'; 
								$strQuery = "SELECT * FROM barang";
								$query = mysqli_query($conInventory, $strQuery) or die(mysqli_error());
								while ($data = mysqli_fetch_array($query)) {
									// code...
									$id_kategori 	= $data["id_kategori"];
									$id_barang 		= $data["id_barang"];
									$nama_barang 	= $data["nama_barang"];
									$stok_akhir 	= $data["stok_akhir"];
									$keterangan 	= $data["keterangan"];

							?>

							<option>
								<?php echo $id_barang."-".$nama_barang."-Stok:".$stok_akhir; ?>
							</option>
							
							<?php } ?>
						</select>
					</td>					
				</tr>

				<tr>
					<td>Masuk</td>
					<td>:</td>
					<td><input type="text" name="txtMasuk" value="0"></td>
				</tr>

				<tr>
					<td>Keluar</td>
					<td>:</td>
					<td><input type="text" name="txtKeluar" value="0"></td>
				</tr>

				<tr>
					<td colspan="3">
						<input class="btn btn-primary" type="submit" name="cmdSubmit" value="Simpan">
					</td>
				</tr>				
			</table>			
		</form>


		<a href="keluar_masuk_barang.php">Kembali ke Keluar-Masuk Barang</a>

		<?php include '../shared/footer.php'; ?>

	</body>
</html>