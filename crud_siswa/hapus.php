<?php
$link = mysqli_connect("localhost", "root", "", "appspp");
$nisn = $_GET['nisn'];
$mysql_query = mysqli_query($link, "DELETE from siswa where nisn='$nisn'");
header("location:index.php")
?>