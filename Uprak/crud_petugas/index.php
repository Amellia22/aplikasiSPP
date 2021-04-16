<!DOCTYPE html>
<html>
<head>
	<title>CRUD petugas</title>
	<link rel="stylesheet" href="../css/style-indexed.css">
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
<nav>
<a href="#"><img src="../login/img/pngegg.png" class="logo" /></a>
         <ul class="navs-link">
		 <li><a href="../admin-index.php">Home</a></li>
            <li><a href="../bayar_spp/bayar-admin.php" class="button">Bayar SPP</a></li>
            <li><a href="../history_pembayaran/history-admin.php?level=admin" class="button-history">History Pembayaran</a></li>
            <li><a href="../login/login.php" class="button-logout">Log Out</a></li>
            
            
            
        </ul>
</nav>
	<h1 class="judul" align="center">Crud Petugas</h1><br><br>
	<h3 align="center">Data Petugas</h3>
	<div class="baris"><div class="kolom">
	<table class="styled-table">
    <thead>
        <tr>
		<th>No</th>
			<th>Id Petugas</th>
			<th>Nama Petugas</th>
			<th>Aksi</th>
        </tr>
    </thead>
    <tbody>
	<?php
		$link = mysqli_connect("localhost", "root", "", "uprak");
		$query_mysql = mysqli_query($link, "SELECT * FROM petugas");
		$nomor = 1;
		while($data = mysqli_fetch_array($query_mysql)){
		?>
        <tr>
		<td><?php echo $nomor++; ?></td>
			<td><?php echo $data['id_petugas']; ?></td>
			<td><?php echo $data['nama_petugas']; ?></td>
			<td>
				<a class="edit" href="edit.php?id_petugas=<?php echo $data['id_petugas']; ?>">Edit</a> |
				<a class="hapus" href="hapus.php?id_petugas=<?php echo $data['id_petugas']; ?>">Hapus</a>
			</td>
        </tr>
		<?php } ?>
    </tbody>
</table>
	<br>
	<br>
	<br>

	<h3 align="center">Data Akun</h3>
	<table class="styled-table">
    <thead>
        <tr>
		<th>No</th>
			<th>Id</th>
			<th>Username</th>
			<th>Password</th>
			<th>Aksi</th>
        </tr>
    </thead>
    <tbody>
	<?php
		$link = mysqli_connect("localhost", "root", "", "uprak");
		$query_mysql = mysqli_query($link, "SELECT * FROM admin where level='petugas'");
		$nomor = 1;
		while($data = mysqli_fetch_array($query_mysql)){
		?>
        <tr>
		<td><?php echo $nomor++; ?></td>
			<td><?php echo $data['id']; ?></td>
			<td><?php echo $data['username']; ?></td>
			<td><?php echo $data['password']; ?></td>
			<td>
				<a class="hapus" href="hapus.php?id=<?php echo $data['id']; ?>">Hapus</a>
			</td>
        </tr>
		<?php } ?>
    </tbody>
</table>
</div>
</div>
<div class="button_cont" align="center">
	<a class="btn-tmbah" href="input.php" target="_blank" rel="">Tambah Data</a>
</div><br><br>
</body>
</html>