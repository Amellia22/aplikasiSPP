<!DOCTYPE html>
<html>
<head>
	<title>Input data SPP</title>
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
	<h1 class="judul" align="center">Input Data ke Database</h1><br><br>
	<div class="formcrudk">
	<h1 align="center">Tambah Data Spp</h1>
            <form action="input-aksi.php" method="post">
			<input type="hidden" name="id_spp" required="">

			<label>Tahun </label>
				<input type="text" name="tahun" required="">

				<label>Nominal </label>
				<input type="text" name="nominal" required="">

               <a target="_blank"><input type="submit" value="Kirim"></a> 
              </form>
			  </div>
</body>
</html>