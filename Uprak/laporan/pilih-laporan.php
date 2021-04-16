<!DOCTYPE html>
<html>
<head>
	<title>Search NISN</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="../css/style-indexed.css">
	<link rel="stylesheet" href="../css/form-cari.css">
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
                <li><a href="../crud_kelas/index.php" class="button">Crud Kelas</a></li>
                <li><a href="../crud_petugas/index.php" class="button">Crud Petugas</a></li>
                <li><a href="../crud_spp/index.php" class="button">Crud SPP</a></li>
                </ul>
            </div></li>
            <li><a href="../bayar_spp/bayar-admin.php" class="button">Bayar SPP</a></li>
            <li><a href="../history_pembayaran/history-admin.php?level=admin" class="button-history">History Pembayaran</a></li>
            <li><a href="../laporan/pilih-laporan.php" class="button-laporan">Generate Laporan</a></li>
            <li><a href="../login/login.php" class="button-logout">Log Out</a></li>
            
            
            
        </ul>
</nav>

<form class="cari" action="generate_laporan.php" method="post">
	<h1 align="center" style="margin-top:80px;">Masukan NISN</h1>
  <input type="text" placeholder="NISN Siswa...." name="nisn">
  <button type="submit" ><i class="fa fa-search"></i></button>
</form>
<table class="styled-table" style="margin-top:100px;">
    <thead>
        <tr>
		<th>No</th>
			<th>Nisn</th>
			<th>Nis</th>
			<th>Nama</th>
        </tr>
    </thead>
    <tbody>
<?php
		$link = mysqli_connect("localhost", "root", "", "uprak");
		$query_mysql = mysqli_query($link, "SELECT * FROM siswa");
		$nomor = 1;
		while($data = mysqli_fetch_array($query_mysql)){
		?>
        <tr>
		<td><?php echo $nomor++; ?></td>
			<td><?php echo $data['nisn']; ?></td>
			<td><?php echo $data['nis']; ?></td>
			<td><?php echo $data['nama']; ?></td>

        </tr>
		<?php } ?>
    </tbody>
</table>
</body>
</html>