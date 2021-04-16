<?php
$link = mysqli_connect("localhost", "root", "", "uprak");
$id_kelas = $_POST['id_kelas'];
$nama_kelas = $_POST['nama_kelas'];
$kompetensi_keahlian = $_POST['kompetensi_keahlian'];
$query_mysql = mysqli_query($link, "insert into kelas values('', '$nama_kelas', '$kompetensi_keahlian')");
header("location:index.php");
?>
