<?php
$link = mysqli_connect("localhost", "root", "", "uprak");
$nisn = $_POST['nisn'];
$nis = $_POST['nis'];
$nama = $_POST['nama'];
$id_kelas = $_POST['id_kelas'];
$alamat = $_POST['alamat'];
$notelp = $_POST['notelp'];
$id_spp = $_POST['id_spp'];
$query_mysql = mysqli_query($link, "update siswa set nisn='$nisn', nis='$nis', nama='$nama', id_kelas='$id_kelas', alamat='$alamat', no_telp='$notelp', id_spp='$id_spp' where nisn='$nisn'");
header("location:index.php");
?>
