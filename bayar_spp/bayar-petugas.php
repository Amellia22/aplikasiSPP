<!DOCTYPE html>
<html>
<head>
	<title>Pembayaran SPP</title>
	<link rel="stylesheet" href="../css/style-indexed.css">
	<link rel="stylesheet" href="../css/form.css">
</head>
<body>
<nav>
<div class="logo"><a href="../petugas-index.php"> SMKN 2 Bandung</a></div>
         <ul class="navs-link">
            <li><a href="bayar-petugas.php" class="button active">Bayar SPP</a></li>
            <li><a href="../history_pembayaran/history-petugas.php?level=petugas" class="button-history">History Pembayaran</a></li>
            <li><a href="../login/login.php" class="button-logout">Log Out</a></li>
            
            
            
        </ul>
</nav>
	<div class="container">
	<div class="formin">
	<div class="jud-form">
	<h1 align="center">Bayar SPP</h1>
            <form action="bayar-aksi.php?level=petugas" method="post">
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

			<label>ID SPP </label>
					<select name="id_spp" value="<?php echo $data['id_spp'] ?>">
					<option value="54">54</option>
					<option value="55">55</option>
					</select>

			<label>Jumlah Bayar </label>
			<select name="jumlah_bayar" value="<?php echo $data['jumlah_bayar'] ?>">
						<option value="250000">250000</option>
					</select>
              
                <input type="submit" value="Kirim">
              </form>
			  </div>
</div>
</div>
	
</body>
</html>