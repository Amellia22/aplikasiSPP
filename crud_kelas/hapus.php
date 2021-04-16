<?php
$link = mysqli_connect("localhost", "root", "", "appspp");
$id_kelas = $_GET['id_kelas'];
$mysql_query = mysqli_query($link, "delete from kelas where id_kelas='$id_kelas'");
header("location:index.php")
?>