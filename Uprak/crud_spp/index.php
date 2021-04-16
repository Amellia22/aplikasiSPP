<!DOCTYPE html>
<html>
<head>
	<title>CRUD spp</title>
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
	<h1 class="judul" align="center">Crud SPP</h1><br><br>
	<h3 align="center">Data SPP</h3>
	<table class="styled-table">
    <thead>
        <tr>
		<th>No</th>
			<th>Id SPP</th>
			<th>Tahun</th>
			<th>Nominal</th>

        </tr>
    </thead>
    <tbody>
	<?php
		$link = mysqli_connect("localhost", "root", "", "uprak");
		$query_mysql = mysqli_query($link, "SELECT * FROM spp");
		$nomor = 1;
		while($data = mysqli_fetch_array($query_mysql)){
		?>
        <tr>
		<td><?php echo $nomor++; ?></td>
			<td><?php echo $data['id_spp']; ?></td>
			<td><?php echo $data['tahun']; ?></td>
			<td><?php echo $data['nominal']; ?></td>

			</td>
        </tr>
		<?php } ?>
    </tbody>
</table>
</body>
</html>