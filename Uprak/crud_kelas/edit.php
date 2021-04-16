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
                <li><a href="index.php" class="button">Crud Kelas</a></li>
                <li><a href="../crud_petugas/index.php" class="button">Crud Petugas</a></li>
                <li><a href="../crud_spp/index.php" class="button">Crud SPP</a></li>
                </ul>
            </div></li>
            <li><a href="../bayar_spp/bayar-admin.php" class="button active">Bayar SPP</a></li>
            <li><a href="../history_pembayaran/history-admin.php?level=admin" class="button-history">History Pembayaran</a></li>
            <li><a href="../laporan/pilih-laporan.php" class="button-laporan">Generate Laporan</a></li>
            <li><a href="../login/login.php" class="button-logout">Log Out</a></li>
            
            
            
        </ul>
</nav>
	<h1 class="judul" align="center">Edit Data</h1> 

	<?php
		$link = mysqli_connect("localhost", "root", "", "uprak");
		$id_kelas = $_GET['id_kelas'];
		$query_mysql = mysqli_query($link, "select * from kelas where id_kelas='$id_kelas'");
		while ($data = mysqli_fetch_array($query_mysql)) {
	?>

<div class="formcrudk">
	<h1 align="center">Edit Data Kelas</h1>
            <form action="edit-aksi.php" method="post">
			<label>Nama Kelas </label>
			<input type="text" name="nama_kelas" value="<?php echo $data['nama_kelas'] ?>">

				<label>Kompetensi Keahlian </label>
				<input type="text" name="kompetensi_keahlian" value="<?php echo $data['kompetensi_keahlian'] ?>">

                <input type="submit" value="simpan">
              </form>
			  </div>
	<?php } ?>
</body>
</html>