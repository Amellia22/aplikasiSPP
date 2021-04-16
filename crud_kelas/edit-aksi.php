<?php
$link = mysqli_connect("localhost", "root", "", "appspp");
$id_kelas = $_POST['id_kelas'];
$nama_kelas = $_POST['nama_kelas'];
$kompetensi_keahlian = $_POST['kompetensi_keahlian'];
$query_mysql = mysqli_query($link, "update kelas set nama_kelas='$nama_kelas', kompetensi_keahlian='$kompetensi_keahlian' where id_kelas='$id_kelas'");
header("location:index.php");
?>
