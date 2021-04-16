</!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="../css/style-indexed.css">
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
<nav>
<a href="../petugas-index.php"><img src="../login/img/pngegg.png" class="logo" /></a>
         <ul class="navs-link">
            <li><a href="../bayar_spp/bayar-petugas.php" class="button">Bayar SPP</a></li>
            <li><a href="history-petugas.php?level=petugas" class="button-history">History Pembayaran</a></li>
            <li><a href="../login/login.php" class="button-logout">Log Out</a></li>
            
            
            
        </ul>
</nav>
	<h1 class="judul" align="center">History SPP</h1><br><br>

	<table class="styled-table">
    <thead>
        <tr>
		<th>No</th>
			<th>Id Pembayaran</th>
			<th>Id Petugas</th>
			<th>NISN</th>
			<th>Tanggal Bayar</th>
			<th>Bulan Dibayar</th>
			<th>Tahun Dibayar</th>
			<th>Id SPP</th>
			<th>Jumlah Bayar</th>
			<th>Aksi</th>
        </tr>
    </thead>
    <tbody>
	<?php
		$link = mysqli_connect("localhost", "root", "", "uprak");
		$query_mysql = mysqli_query($link, "SELECT * FROM pembayaran");
		$nomor = 1;
		while($data = mysqli_fetch_array($query_mysql)){
		?>
        <tr>
		<td><?php echo $nomor++; ?></td>
			<td><?php echo $data['id_pembayaran']; ?></td>
			<td><?php echo $data['id_petugas']; ?></td>
			<td><?php echo $data['nisn']; ?></td>
			<td><?php echo $data['tgl_bayar']; ?></td>
			<td><?php echo $data['bulan_dibayar']; ?></td>
			<td><?php echo $data['tahun_dibayar']; ?></td>
			<td><?php echo $data['id_spp']; ?></td>
			<td><?php echo $data['jumlah_bayar']; ?></td>
			<td>
				<a class="hapus" href="hapus-petugas.php?id_pembayaran=<?php echo $data['id_pembayaran']; ?>">Hapus</a>					
			</td>
        </tr>
		<?php } ?>
    </tbody>
</table>
<div class="button_cont" align="center">
	<a class="btn-tmbah" href="../bayar_spp/bayar-petugas.php" rel="">Input Bayar Spp</a>
</div>		
	<br>
	<br>

</body>
</html>