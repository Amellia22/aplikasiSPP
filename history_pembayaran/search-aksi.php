<?php
session_start();
$link = mysqli_connect("localhost", "root", "", "appspp");
$nisn = $_POST['nisn'];
$query = mysqli_query($link, "select * from  where nisn='$nisn'");
$cek = mysqli_num_rows($query);

if($cek > 0){

$data = mysqli_fetch_assoc($query);

if($data['level'] == "admin"){
	$_SESSION['username'] = $username;
	$_SESSION['level'] = "admin";
	header("location:../admin-index.php");
	}
elseif($data['level'] == "petugas"){
	$_SESSION['username'] = $username;
	$_SESSION['level'] = "petugas";
	header("location:../petugas-index.php");
	}
elseif($data['level'] == "siswa"){
	$_SESSION['username'] = $username;
	$_SESSION['level'] = "siswa";
	header("location:../siswa-index.php");
	}
else{
	header("location:login.php?pesan=gagal");
	}
}
else{
	header("location:login.php?pesan=gagal");
}
?>