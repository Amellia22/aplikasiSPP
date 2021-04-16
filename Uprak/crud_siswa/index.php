<!DOCTYPE html>
<html>
<head>
	<title>CRUD siswa</title>
	<link rel="stylesheet" href="../css/style-indexed.css">
	<link rel="stylesheet" href="css/style.css">



</head>
<body>
<style>


#specialTh {
	background-color:#FF0000 !important;
}
</style>
<nav>
<a href="#"><img src="../login/img/pngegg.png" class="logo" /></a>
         <ul class="navs-link">
		 <li><a href="../admin-index.php">Home</a></li>
            <li><a href="../bayar_spp/bayar-admin.php" class="button">Bayar SPP</a></li>
            <li><a href="../history_pembayaran/history-admin.php?level=admin" class="button-history">History Pembayaran</a></li>
            <li><a href="../login/login.php" class="button-logout">Log Out</a></li>
            
            
            
        </ul>
</nav>
	<h1 class="judul" align="center">Crud Siswa</h1><br><br> 
	<h3 align="center">Data siswa</h3>

<table class="styled-table" id="tables">
    <thead>
        <tr  style="background-color: #FF0000">
		<th id="specialTh" >No</th>
			<th>Nisn</th>
			<th>Nis</th>
			<th>Nama</th>
			<th>Id Kelas</th>
			<th>Alamat</th>
			<th>Nomor Telepon</th>		
			<th>Id SPP</th>
			<th>Aksi</th>
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
			<td><?php echo $data['id_kelas']; ?></td>
			<td><?php echo $data['alamat']; ?></td>
			<td><?php echo $data['no_telp']; ?></td>
			<td><?php echo $data['id_spp']; ?></td>
			<td>
				<a class="edit" href="edit.php?nisn=<?php echo $data['nisn']; ?>">Edit</a> |
				<a class="hapus" href="hapus.php?nisn=<?php echo $data['nisn']; ?>">Hapus</a>
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