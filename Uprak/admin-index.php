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
</head>
<body style="overflow: hidden;">

<nav>
<a href="#"><img src="login/img/pngegg.png" class="logo" /></a>
         <ul class="navs-link">
            <li><div class="crudli">
                <button>Crud</button>
                <ul>
                <li><a href="crud_siswa/index.php" class="button">Crud Siswa</a></li>
                <li><a href="crud_kelas/index.php" class="button">Crud Kelas</a></li>
                <li><a href="crud_petugas/index.php" class="button">Crud Petugas</a></li>
                <li><a href="crud_spp/index.php" class="button">Crud SPP</a></li>
                </ul>
            </div></li>
            <li><a href="bayar_spp/bayar-admin.php" class="button">Bayar SPP</a></li>
            <li><a href="history_pembayaran/history-admin.php?level=admin" class="button-history">History Pembayaran</a></li>
            <li><a href="laporan/pilih-laporan.php" class="button-laporan">Generate Laporan</a></li>
            <li><a href="login/login.php" class="button-logout">Log Out</a></li>
            
            
            
        </ul>
</nav>
    <div class="contain">
    <img class="back" src="css/sekul3.jpg" style="" alt="">
    <div class="teks-btn">
        <h2>Halo Admin ! <br>
            Selamat Datang <br>
            Di Web SPP <span class="stu"> SMKN </span><span class="du"> 2 </span><span class="ti"> Bandung</span>
            </h2>
        <p>Yuk Mulai Bekerja Input Data Siswa <br>
        Sekarang Ga Perlu Ribet Lagi Bayar Spp  <br>
        Tinggal Inputkan Data Siswa Yang Ingin Bayar, Input Sekarang!  </p>        
    </div>
    
    <img class="logo-con" src="login/img/pngegg.png" alt="">
   <a href="bayar_spp/bayar-admin.php"><button class="button0 button1">Bayar Spp -></button></a>
    </div>
</body>
</html>