<?php
$link = mysqli_connect("localhost", "root", "", "uprak");
$id_pembayaran = $_POST['id_pembayaran'];
$id_petugas = $_POST['id_petugas'];
$nisn = $_POST['nisn'];
$tgl_bayar = $_POST['tgl_bayar'];
$bulan_dibayar = $_POST['bulan_dibayar'];
$tahun_dibayar = $_POST['tahun_dibayar'];
$id_spp = $_POST['id_spp'];
$jumlah_bayar = $_POST['jumlah_bayar'];

$query_mysql = mysqli_query($link, "insert into pembayaran values('$id_pembayaran', '$id_petugas', '$nisn', '$tgl_bayar', '$bulan_dibayar', '$tahun_dibayar', '$id_spp', '$jumlah_bayar')");


	
	if(isset($_GET['level'])){
		$pesan = $_GET['level'];
		if($pesan == "admin"){
			header("location:../history_pembayaran/history-admin.php?level=admin");
		}else if($pesan == "petugas"){
			header("location:../history_pembayaran/history-petugas.php?level=petugas");
		}
	}
	
	
?>
