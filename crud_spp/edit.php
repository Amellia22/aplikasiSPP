<!DOCTYPE html>
<html>
<head>
	<title>Edit data SPP</title>
</head>
<body>
	<h1>Edit Data</h1><br><br>
	<a href="index.php">Lihat semua data</a>
	<h3>Edit Data</h3><br>

	<?php
		$link = mysqli_connect("localhost", "root", "", "appspp");
		$id_spp = $_GET['id_spp'];
		$query_mysql = mysqli_query($link, "select * from spp where id_spp='$id_spp'");
		while ($data = mysqli_fetch_array($query_mysql)) {
	?>

	<form action="edit-aksi.php" method="post">
		<table>
			<tr>
				<td>Id SPP </td>
				<td><?php echo $data['id_spp'] ?></td>
				<td><input type="hidden" name="id_spp" value="<?php echo $data['id_spp'] ?>"></td>
			</tr>
			<tr>
				<td>Tahun </td>
				<td><input type="text" name="tahun" value="<?php echo $data['tahun'] ?>"></td>
			</tr>
			<tr>
				<td>Nominal </td>
				<td><input type="text" name="nominal" value="<?php echo $data['nominal'] ?>"></td>
			</tr>
			<tr>
				<td><input type="submit" value="simpan"></td>
			</tr>
		</table>
	</form>
	<?php } ?>
</body>
</html>