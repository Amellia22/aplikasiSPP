<?php
$link = mysqli_connect("localhost", "root", "", "uprak");
$id_petugas = $_GET['id_petugas'];
$id = $_GET['id'];
$mysql_query = mysqli_query($link, "DELETE from petugas where id_petugas='$id_petugas'");
header("location:index.php")
?>