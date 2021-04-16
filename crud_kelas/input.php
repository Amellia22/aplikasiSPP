<!DOCTYPE html>
<html>
<head>
	<title>Input data kelas</title>
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
	<h1 class="judul" align="center">Input Data ke Database</h1><br><br>
	<div class="formcrudk">
	<h1 align="center">Tambah Data Kelas</h1>
            <form action="input-aksi.php" method="post">
			<label>Nama Kelas </label>
				<input type="text" name="nama_kelas" required="">

				<label>Kompetensi Keahlian </label>
				<input type="text" name="kompetensi_keahlian" required="">

                <input type="submit" value="Kirim">
              </form>
			  </div>
</body>
</html>