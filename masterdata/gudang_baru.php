<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Gudang | Baru</title>

		<link rel="stylesheet" type="text/css" href="../style/bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css">
		<script type="text/javascript" src="../style/bootstrap-5.2.0-beta1-dist/js/bootstrap.bundle.min.js"></script>		
	</head>
	
	<body>
		<?php include '../shared/header.php'; ?>

		<!-- Form input data Gudang -->
		<form class=".form-control" action="gudang_baru_create.php" method="post">
			<table>
				<tr>
					<td colspan="3"><h3>Form Input Gudang</h3></td>
				</tr>
				<tr>
					<td>Nama Gudang</td>
					<td>:</td>
					<td><input type="text" name="txtNamaGudang"></td>
				</tr>

				<tr>
					<td colspan="3">
						<input class="btn btn-primary" type="submit" name="cmdSubmit" value="Simpan">
					</td>
				</tr>				
			</table>
		</form>

		<a href="gudang.php">Kembali ke Gudang</a>

		<?php include '../shared/footer.php'; ?>
	</body>
</html>