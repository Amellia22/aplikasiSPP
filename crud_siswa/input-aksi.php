<?php
$link = mysqli_connect("localhost", "root", "", "appspp");
$nisn = $_POST['nisn'];
$nis = $_POST['nis'];
$nama = $_POST['nama'];
$id_kelas = $_POST['id_kelas'];
$alamat = $_POST['alamat'];
$notelp = $_POST['notelp'];
$id_spp = $_POST['id_spp'];
$id = $_POST['id'];
$username = $_POST['username'];
$password = $_POST['password'];
$level = 'siswa';
$query_mysql = mysqli_query($link, "insert into siswa values('', '$nis', '$nama', '$id_kelas', '$alamat', '$notelp', '$id_spp')");
$query_mysql1 = mysqli_query($link, "insert into admin values('', '$username', '$password', '$level')");
header("location:index.php");
?>
