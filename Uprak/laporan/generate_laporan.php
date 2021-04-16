</!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<p align="center">PEMERINTAH DAERAH PROVINSI JAWA BARAT</p>
	<p align="center">DINAS PENDIDIKAN</p>
	<p align="center"><b>SMK NEGERI 2 BANDUNG</b></p>
	<p align="center"> Jalan Ciliwung Nomor 4, Telepon 022-7234285</p>
	<br>
	<p align="center">KWITANSI</p>

	<br>
	<br>
 
		<?php
		$link = mysqli_connect("localhost", "root", "", "uprak");
		$nisn = $_POST['nisn'];
		$query_mysql = mysqli_query($link, "SELECT * FROM siswa where nisn='$nisn'");
		$nomor = 1;
		while($data = mysqli_fetch_array($query_mysql)){
		?>

		<table align="center">
			<tr>
				<td>NISN: <?php echo $data['nisn']; ?></td>
				<td style="padding-left: 200px;">Alamat: <?php echo $data['alamat']; ?></td>
			</tr>
			<tr>
				<td>NIS: <?php echo $data['nis']; ?></td>
				<td style="padding-left: 200px;">Nomor Telepon: <?php echo $data['no_telp']; ?></td>
			</tr>
			<tr>
				<td>Nama: <?php echo $data['nama']; ?></td>
				<td style="padding-left: 200px;">Id SPP: <?php echo $data['id_spp']; ?></td>
			</tr>
			<tr>
				<td>Id Kelas: <?php echo $data['id_kelas']; ?></td>
			</tr>
		</table><br><br>
		<?php } ?>

	<table border="1" class="table" align="center">
		<tr>
			<th>No</th>
			<th>Id Pembayaran</th>
			<th>Id Petugas</th>
			<th>NISN</th>
			<th>Tanggal Bayar</th>
			<th>Bulan Dibayar</th>
			<th>Tahun Dibayar</th>
			<th>Id SPP</th>
			<th>Jumlah Bayar</th>

		</tr>

		<?php
		$link = mysqli_connect("localhost", "root", "", "uprak");
		$nisn = $_POST['nisn'];
		$query_mysql = mysqli_query($link, "SELECT * FROM pembayaran where nisn = '$nisn'");
		$nomor = 1;
		while($data = mysqli_fetch_array($query_mysql)){
		?>

		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $data['id_pembayaran']; ?></td>
			<td><?php echo $data['id_petugas']; ?></td>
			<td><?php echo $data['nisn']; ?></td>
			<td><?php echo $data['tgl_bayar']; ?></td>
			<td><?php echo $data['bulan_dibayar']; ?></td>
			<td><?php echo $data['tahun_dibayar']; ?></td>
			<td><?php echo $data['id_spp']; ?></td>
			<td><?php echo $data['jumlah_bayar']; ?></td>
		</tr>
		<?php } ?>
	</table>
	
	<script>
		window.print();
	</script>
</body>
</html>