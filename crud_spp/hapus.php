<?php
$link = mysqli_connect("localhost", "root", "", "appspp");
$id_spp = $_GET['id_spp'];
$mysql_query = mysqli_query($link, "delete from spp where id_spp='$id_spp'");
header("location:index.php")
?>