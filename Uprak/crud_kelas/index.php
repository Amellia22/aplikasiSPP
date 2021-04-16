<!DOCTYPE html>
<html>
<head>
	<title>CRUD kelas</title>
	<link rel="stylesheet" href="../css/style-indexed.css">
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
<nav>
<a href="../admin-index.php"><img src="../login/img/pngegg.png" class="logo" /></a>
         <ul class="navs-link">
            <li><div class="crudli">
                <button>Crud</button>
                <ul>
                <li><a href="../crud_siswa/index.php" class="button">Crud Siswa</a></li>
                <li><a href="crud_kelas/index.php" class="button">Crud Kelas</a></li>
                <li><a href="../crud_petugas/index.php" class="button">Crud Petugas</a></li>
                <li><a href="../crud_spp/index.php" class="button">Crud SPP</a></li>
                </ul>
            </div></li>
            <li><a href="../bayar-admin.php" class="button active">Bayar SPP</a></li>
            <li><a href="../history_pembayaran/history-admin.php?level=admin" class="button-history">History Pembayaran</a></li>
            <li><a href="../laporan/pilih-laporan.php" class="button-laporan">Generate Laporan</a></li>
            <li><a href="../login/login.php" class="button-logout">Log Out</a></li>
            
            
            
        </ul>
</nav>
	<h1 class="judul" align="center">Crud Kelas</h1><br><br>
	<h3 align="center">Data Kelas</h3>
	<table class="styled-table">
    <thead>
        <tr>
		<th>No</th>
			<th>Id Kelas</th>
			<th>Nama Kelas</th>
			<th>Kompetensi Keahlian</th>
			<th>Aksi</th>
        </tr>
    </thead>
    <tbody>
	<?php
		$link = mysqli_connect("localhost", "root", "", "uprak");
		$query_mysql = mysqli_query($link, "SELECT * FROM kelas");
		$nomor = 1;
		while($data = mysqli_fetch_array($query_mysql)){
		?>
        <tr>
		<td><?php echo $nomor++; ?></td>
			<td><?php echo $data['id_kelas']; ?></td>
			<td><?php echo $data['nama_kelas']; ?></td>
			<td><?php echo $data['kompetensi_keahlian']; ?></td>
			<td>
				<a class="edit" href="edit.php?id_kelas=<?php echo $data['id_kelas']; ?>">Edit</a> |
				<a class="hapus" href="hapus.php?id_kelas=<?php echo $data['id_kelas']; ?>">Hapus</a>
			</td>
        </tr>
		<?php } ?>
        <!-- and so on... -->
    </tbody>
</table>
<div class="button_cont" align="center">
	<a class="btn-tmbah" href="input.php" target="_blank" rel="">Tambah Data</a>
</div>
</body>
</html>