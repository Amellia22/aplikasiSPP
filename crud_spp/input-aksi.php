<?php
$link = mysqli_connect("localhost", "root", "", "appspp");
$id_spp = $_POST['id_spp'];
$tahun = $_POST['tahun'];
$nominal = $_POST['nominal'];
$query_mysql = mysqli_query($link, "insert into spp values('$id_spp', '$tahun', '$nominal')");
header("location:index.php");
?>
