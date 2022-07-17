<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Rak Barang | Baru</title>

		<link rel="stylesheet" type="text/css" href="../style/bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css">
		<script type="text/javascript" src="../style/bootstrap-5.2.0-beta1-dist/js/bootstrap.bundle.min.js"></script>		
	</head>
	
	<body>
		<?php include '../shared/header.php'; ?>

		<!-- Form input data Rak -->
		<form class=".form-control" action="rak_barang_baru_create.php" method="post">
			<table>
				<tr>
					<td colspan="3"><h3>Form Input Rak Barang</h3></td>
				</tr>
				<tr>
					<td>Nama Rak</td>
					<td>:</td>
					<td><input type="text" name="txtNamaRak"></td>
				</tr>

				<tr>
					<td colspan="3">
						<input class="btn btn-primary" type="submit" name="cmdSubmit" value="Simpan">
					</td>
				</tr>				
			</table>
		</form>

		<a href="rak_barang.php">Kembali ke Rak Barang</a>

		<?php include '../shared/footer.php'; ?>
	</body>
</html>