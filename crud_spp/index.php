<!DOCTYPE html>
<html>
<head>
	<title>CRUD spp</title>
	<script src="https://kit.fontawesome.com/b50015a356.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/style-indexed.css">
	
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
	<h1 class="judul" align="center">Crud SPP</h1><br><br>
	<h3 align="center">Data SPP</h3>
	<table class="styled-table">
    <thead>
        <tr>
		<th>No</th>
			<th>Id SPP</th>
			<th>Tahun</th>
			<th>Nominal</th>
			<th>Hapus</th>

        </tr>
    </thead>
    <tbody>
	<?php
		$link = mysqli_connect("localhost", "root", "", "appspp");
		$query_mysql = mysqli_query($link, "SELECT * FROM spp");
		$nomor = 1;
		while($data = mysqli_fetch_array($query_mysql)){
		?>
        <tr>
		<td><?php echo $nomor++; ?></td>
			<td><?php echo $data['id_spp']; ?></td>
			<td><?php echo $data['tahun']; ?></td>
			<td><?php echo $data['nominal']; ?></td>
			<td>
			<a class="hapus" href="hapus.php?id_spp=<?php echo $data['id_spp']; ?>"> <span style="color:red;"><i class="fas fa-trash-alt icon-f"></span></i></a>
			</td>
			</td>
        </tr>
		<?php } ?>
    </tbody>
</table>
<div class="button_cont" align="center">
	<a class="btn-tmbah" href="input.php" target="_blank" rel=""> <span style="color:black;"><i class="fas fa-user-plus"></i></span> Tambah Data</a>
</div>
</body>
</html>