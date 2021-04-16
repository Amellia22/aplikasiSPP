<?php
$link = mysqli_connect("localhost", "root", "", "uprak");
$id_pembayaran = $_GET['id_pembayaran'];
$mysql_query = mysqli_query($link, "delete from pembayaran where id_pembayaran='$id_pembayaran'");
header("location:history-petugas.php?level=petugas")
?>