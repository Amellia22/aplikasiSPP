<!DOCTYPE html>
<html>
<head>
	<title>Edit data Petugas</title>
	<link rel="stylesheet" href="../css/style-indexed.css">
	<link rel="stylesheet" href="../css/form.css">
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
                <li><a href="index.php" class="button">Crud Petugas</a></li>
                <li><a href="../crud_spp/index.php" class="button">Crud SPP</a></li>
                </ul>
            </div></li>
            <li><a href="../bayar_spp/bayar-admin.php" class="button active">Bayar SPP</a></li>
            <li><a href="../history_pembayaran/history-admin.php?level=admin" class="button-history">History Pembayaran</a></li>
            <li><a href="../laporan/pilih-laporan.php" class="button-laporan">Generate Laporan</a></li>
            <li><a href="../login/login.php" class="button-logout">Log Out</a></li>
            
            
            
        </ul>
</nav>

	<?php
		$link = mysqli_connect("localhost", "root", "", "uprak");
		$id_petugas = $_GET['id_petugas'];
		$query_mysql = mysqli_query($link, "select * from petugas where id_petugas='$id_petugas'");
		while ($data = mysqli_fetch_array($query_mysql)) {
	?>

<h1 class="judul" align="center">Input Data ke Database</h1><br><br>
	<div class="formpet">
	<h1 align="center">Edit Data Petugas</h1>
            <form action="edit-aksi.php" method="post">
			<input type="hidden" name="id_petugas" value="<?php echo $data['id_petugas'] ?>">
			<label>Username </label>
			<input type="text" name="username" value="<?php echo $data['username'] ?>">

				<label>Password </label>
				<input type="text" name="password" value="<?php echo $data['password'] ?>">

				<label>Nama Petugas </label>
				<input type="text" name="nama_petugas" value="<?php echo $data['nama_petugas'] ?>">


                <input type="submit" value="Kirim">
              </form>
	<?php } ?>
	
</body>
</html>