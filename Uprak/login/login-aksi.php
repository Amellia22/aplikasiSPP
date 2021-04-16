<?php
session_start();
$link = mysqli_connect("localhost", "root", "", "uprak");
$username = $_POST['username'];
$password = $_POST['password'];
$query = mysqli_query($link, "select * from admin where username='$username' and password='$password'");
$cek = mysqli_num_rows($query);

if($cek > 0){

$data = mysqli_fetch_assoc($query);

if($data['level'] == "admin"){
	$_SESSION['username'] = $username;
	$_SESSION['level'] = "admin";
	header("location:../admin-index.php");
	}
elseif($data['level'] == "Petugas"){
	$_SESSION['username'] = $username;
	$_SESSION['level'] = "Petugas";
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