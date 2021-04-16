<!DOCTYPE html>
<html>
<head>
	<title>CRUD petugas</title>
	<script src="https://kit.fontawesome.com/b50015a356.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="../css/style-indexed.css">
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
<nav>
<div class="logo"> <a href="../admin-index.php"> SMKN 2 Bandung </a></div>
         <ul class="navs-link">
            <li><a href="../bayar_spp/bayar-admin.php" class="button active">Bayar SPP</a></li>
            <li><a href="../history_pembayaran/history-admin.php?level=admin" class="button-history">History Pembayaran</a></li>
            <li><a href="../laporan/pilih-laporan.php" class="button-laporan">Generate Laporan</a></li>
            <li><a href="../login/login.php" class="button-logout">Log Out</a></li>
            
            
            
        </ul>
</nav>
<div class="bot-nav">
<ul class="bottom-navul">
                <li><a href="../crud_siswa/index.php" class="button">Crud Siswa</a></li>
                <li><a href="../crud_kelas/index.php" class="button">Crud Kelas</a></li>
                <li><a href="../crud_petugas/index.php" class="button">Crud Petugas</a></li>
                <li><a href="../crud_spp/index.php" class="button">Crud SPP</a></li>
            </li>
        </ul>
		</div>
	<h1 class="judul" align="center">Crud Petugas</h1><br><br>
	
	<div class="baris"><div class="kolom">
	<table class="styled-table">
	<h3 align="center">Data Petugas</h3>
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
		$link = mysqli_connect("localhost", "root", "", "appspp");
		$query_mysql = mysqli_query($link, "SELECT * FROM petugas");
		$nomor = 1;
		while($data = mysqli_fetch_array($query_mysql)){
		?>
        <tr>
		<td><?php echo $nomor++; ?></td>
			<td><?php echo $data['id_petugas']; ?></td>
			<td><?php echo $data['nama_petugas']; ?></td>
			<td>
			<a class="edit" href="edit.php?id_petugas=<?php echo $data['id_petugas']; ?>"> <span style="color:black;"><i class="fas fa-edit icon-f"></span></i></a> |
				<a class="hapus" href="hapus.php?id_petugas=<?php echo $data['id_petugas']; ?>"> <span style="color:red;"><i class="fas fa-trash-alt icon-f"></span></i></a>
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
		$link = mysqli_connect("localhost", "root", "", "appspp");
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
				<a class="hapus" href="hapus.php?id=<?php echo $data['id']; ?>"> <span style="color:red;"><i class="fas fa-trash-alt icon-f"></span></i></a>
			</td>
        </tr>
		<?php } ?>
    </tbody>
</table>
</div>
</div>
<div class="button_cont" align="center">
<a class="btn-tmbah" href="input.php" target="_blank" rel=""> <span style="color:black;"><i class="fas fa-user-plus"></i></span> Tambah Data</a>
</div><br><br>
</body>
</html>