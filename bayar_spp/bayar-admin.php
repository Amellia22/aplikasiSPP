<!DOCTYPE html>
<html>
<head>
	<title>Pembayaran SPP</title>
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
	<div class="container">
	<div class="form">
	<h1 class="jud-form" align="center">Input SPP</h1>
            <form action="bayar-aksi.php?level=admin" method="post">
				<input type="hidden" name="id_pembayaran">
				<label for="">ID Petugas</label>
                <input type="text" name="id_petugas" placeholder="ID Petugas">

				<label for="">NISN</label>
                <input type="text" name="nisn" placeholder="NISN">

				<label for="">Bulan</label>
				<input type="text" name="bulan_dibayar"placeholder="Bulan Dibayar">
			
				<label for="">Tahun</label>
			<input type="text" name="tahun_dibayar" placeholder="Tahun Dibayar">

			<label for="">Tanggal Bayar</label>
            <input type="date" name="tgl_bayar" placeholder="Tanggal Bayar">

			<label>Nominal </label>
					<select name="id_spp" value="<?php echo $data['id_spp'] ?>">
					<option value="54">54</option>
					<option value="55">55</option>
					</select>
				<select name="jumlah_bayar" value="<?php echo $data['jumlah_bayar']?>">
				<option value="250000">250000</option>
				</select>
                <input type="submit" value="Kirim">
              </form>
			  </div>
</div>


</body>
</html>