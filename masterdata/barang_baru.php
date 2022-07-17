<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Barang | Baru</title>

		<link rel="stylesheet" type="text/css" href="../style/bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css">
		<script type="text/javascript" src="../style/bootstrap-5.2.0-beta1-dist/js/bootstrap.bundle.min.js"></script>		
	</head>
	
	<body>
		<?php include '../shared/header.php'; ?>

		<!-- Form input data Barang -->
		<form class=".form-control" action="barang_baru_create.php" method="post">
			<table>
				<tr>
					<td colspan="3"><h3>Form Input Barang</h3></td>
				</tr>

				<tr>
					<td>ID Kategori</td>
					<td>:</td>
					<td>
						<select name="cboIDKategori">
							<!-- Ambil LookUp Kategori Barang -->
							<?php 
								include '../data/koneksi.php'; 
								$strQuery = "SELECT * FROM kategori_barang";
								$query = mysqli_query($conInventory, $strQuery) or die(mysqli_error());
								while ($data = mysqli_fetch_array($query)) {
									// code...
									$id_kategori = $data["id_kategori"];
									$nama_kategori = $data["nama_kategori"];
							?>

							<option><?php echo $id_kategori."-".$nama_kategori; ?></option>
							
							<?php } ?>
						</select>
					</td>					
				</tr>

				<tr>
					<td>Nama Barang</td>
					<td>:</td>
					<td><input type="text" name="txtNamaBarang"></td>
				</tr>

				<tr>
					<td>Stok Akhir</td>
					<td>:</td>
					<td><input type="text" name="txtStokAkhir"></td>
				</tr>

				<tr>
					<td>Keterangan</td>
					<td>:</td>
					<td><textarea name="edtKeterangan"></textarea></td>
				</tr>

				<tr>
					<td colspan="3">
						<input class="btn btn-primary" type="submit" name="cmdSubmit" value="Simpan">
					</td>
				</tr>				
			</table>			
		</form>


		<a href="gudang.php">Kembali ke Barang</a>

		<?php include '../shared/footer.php'; ?>

	</body>
</html>