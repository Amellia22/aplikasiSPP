<?php
$link = mysqli_connect("localhost", "root", "", "appspp");
$id_pembayaran = $_GET['id_pembayaran'];
$mysql_query = mysqli_query($link, "delete from pembayaran where id_pembayaran='$id_pembayaran'");
header("location:history-admin.php?level=admin")
?>