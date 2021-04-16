<?php
session_start();
if($_SESSION['level']==""){
    header("location:login/login.php?pesan=gagal");
}
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="css/style-indexed.css">




<style>

#bodys{

    background: url('img/smk2.jpg')no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
}





</style>
</head>
<body id="bodys">

<nav>
<div class="logo"> <a href="../admin-index.php"> SMKN 2 Bandung </a></div>
         <ul class="navs-link">
            <li><a href="bayar_spp/bayar-admin.php" class="button active">Bayar SPP</a></li>
            <li><a href="history_pembayaran/history-admin.php?level=admin" class="button-history">History Pembayaran</a></li>
            <li><a href="laporan/pilih-laporan.php" class="button-laporan">Generate Laporan</a></li>
            <li><a href="login/login.php" class="button-logout">Log Out</a></li>
            
            
            
        </ul>
</nav>
<div class="bot-nav">
<ul class="bottom-navul">
                <li><a href="crud_siswa/index.php" class="button">Crud Siswa</a></li>
                <li><a href="crud_kelas/index.php" class="button">Crud Kelas</a></li>
                <li><a href="crud_petugas/index.php" class="button">Crud Petugas</a></li>
                <li><a href="crud_spp/index.php" class="button">Crud SPP</a></li>
            </li>
        </ul>
		</div>
        <div class="container">
        <img class="aboutimg" src="login/img/pngegg.png" alt="">
        </div>
          <div class="isi">
              <h2>Hai Admin!</h2>
              <p>Selamat Datang Di Aplikasi Sistem pembayaran SPP SMKN 2 </p>

          </div><br><br>
    
</body>
</html>