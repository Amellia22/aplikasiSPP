<?php
$link = mysqli_connect("localhost", "root", "", "uprak");
$id_spp = $_POST['id_spp'];
$tahun = $_POST['tahun'];
$nominal = $_POST['nominal'];
$query_mysql = mysqli_query($link, "update spp set tahun='$tahun', nominal='$nominal' where id_spp='$id_spp'");
header("location:index.php");
?>
