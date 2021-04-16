<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/style-log.css">
</head>
<body>
	<div class="background"></div>
	<div class="container">
	<form method="post" autocomplete="off" action="login-aksi.php">
<div class="logo"><a href="../admin-index.php"> SMKN 2 BANDUNG </a></div><br>
	<?php
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login Gagal! username atau password salah";
		}
		elseif($_GET['pesan'] == "logout"){
			echo "Berhasil Logout";
		}
		elseif($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk akses halaman admin";
		}else{
			echo"";
		}
	}
	?>
	<div class="bungkus">
    <label for="fname"></label>
    <input type="text" id="fname" name="username" placeholder="Username...">

    <label for="lname"></label>
    <input type="password" id="lname" name="password" placeholder="Password...">

    <input type="submit" value="Login">
	</div>
  
	</form>
	</div>
	<div align="center">
	<?php
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "<h1>Login Gagal! username atau password salah</h1>";
		}
		elseif($_GET['pesan'] == "logout"){
			echo "Berhasil Logout";
		}
		elseif($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk akses halaman admin";
		}
	}
	?>
	</div>
</body>
</html>