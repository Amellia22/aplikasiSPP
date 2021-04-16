<!DOCTYPE html>
<html>
<head>
	<title>Edit data Siswa</title>
	<link rel="stylesheet" href="../css/style-indexed.css">
	<link rel="stylesheet" href="../css/form.css">
</head>
<body>
<nav>
<div class="logo"> <a href="../admin-index.php"> SMKN 2 Bandung </a></div>
         <ul class="navs-link">
            <li><a href="bayar-admin.php" class="button active">Bayar SPP</a></li>
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
	<?php
		$link = mysqli_connect("localhost", "root", "", "appspp");
		$nisn = $_GET['nisn'];
		$query_mysql = mysqli_query($link, "select * from siswa where nisn='$nisn'");
		while ($data = mysqli_fetch_array($query_mysql)) {
	?>

<h1 class="judul" align="center">Input Data ke Database</h1><br><br>
	<div class="formin">
	<h1 align="center">Edit Data Siswa</h1>
            <form action="edit-aksi.php" method="post">
			
			<input type="hidden" name="nisn" value="<?php echo $data['nisn'] ?>">
			
			<label>NIS </label>
			<input type="text" name="nis" value="<?php echo $data['nis'] ?>">

				<label>Nama </label>
				<input type="text" name="nama" required="" value="<?php echo $data['nama'] ?>">

				<label>ID Kelas </label>
				<select name="id_kelas" value="<?php echo $data['id_kelas'] ?>">
						<option value="223">223</option>
						<option value="224">224</option>
					</select>

				<label>Alamat </label>
				<input type="text" name="alamat" value="<?php echo $data['alamat'] ?>">

				<label>No. Telepon </label>
				<input type="text" name="notelp" value="<?php echo $data['no_telp'] ?>">

				<label>ID SPP </label>
				<input type="text" name="id_spp" value="<?php echo $data['id_spp'] ?>">

                <input type="submit" value="Kirim">
              </form>
			  </div><br><br>
	<?php } ?>


</body>
</html>