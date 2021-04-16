</!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="../css/style-indexed.css">
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
<nav>
<a href="#"><img src="../login/img/pngegg.png" class="logo" /></a>
         <ul class="navs-link">
            </div></li>
			<li><a href="../siswa-index.php">Home</a></li>
            <li><a href="login/login.php" class="button-logout">Log Out</a></li>
            
            
            
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
        </tr>
    </thead>
    <tbody>
	<?php
		$link = mysqli_connect("localhost", "root", "", "uprak");
		$nisn = $_POST['nisn'];
		$query_mysql = mysqli_query($link, "SELECT * FROM pembayaran where nisn='$nisn'");
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
        </tr>
		<?php } ?>
    </tbody>
</table>
</body>
</html>