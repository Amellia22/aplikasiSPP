<?php
$link = mysqli_connect("localhost", "root", "", "appspp");
$id_petugas = $_GET['id_petugas'];
$id = $_GET['id'];
$mysql_query = mysqli_query($link, "DELETE from petugas where id_petugas='$id_petugas'");
$mysql_query = mysqli_query($link, "DELETE from admin where id='$id'");
header("location:index.php")
?>