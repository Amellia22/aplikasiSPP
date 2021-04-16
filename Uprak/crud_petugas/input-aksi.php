<?php
$link = mysqli_connect("localhost", "root", "", "uprak");
$id_petugas = $_POST['id_petugas'];
$username = $_POST['username'];
$password = $_POST['password'];
$nama_petugas = $_POST['nama_petugas'];
$level = $_POST['level'];
$query_mysql = mysqli_query($link, "insert into petugas values('$id_petugas', '$username', '$password', '$nama_petugas', '$level')");
$query_mysql = mysqli_query($link, "insert into admin values('', '$username', '$password', '$level')");
header("location:index.php");
?>
