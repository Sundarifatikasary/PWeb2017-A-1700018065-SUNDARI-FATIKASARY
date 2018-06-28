<!DOCTYPE html>
<html>
<head>
	<title>Data Pemesan</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<style>
table, td, th {   
    border: 1px solid #ddd;
    text-align: center;

}

table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    padding: 10px;

}
</style>
</head>
<body>
	<?php

$nama = $_POST['txtnama'];
$jenis = $_POST['ijenis'];
$jumlah = $_POST['ijumlah'];
$harga = $_POST['otiket'];
$sub = $_POST['osub'];
$telp = $_POST['txthp'];
$email = $_POST['txtemail'];
$alamat = $_POST['txtalamat'];


?>
	<table>
		<tr>
			<td>Nama Lengkap</td>
			<td>Jenis Produk</td>
			<td>Jumlah pesanan</td>
			<td>Harga </td>
			<td>total Harga</td>
			<td>No. Hp</td>
			<td>E-Mail</td>
			<td>Alamat</td>
		</tr>
			<tr>
			<td><?php echo $nama; ?></td>
			<td><?php echo $jenis; ?></td>
			<td><?php echo $jumlah; ?></td>
			<td><?php echo $harga; ?></td>
			<td><?php echo $sub; ?></td>
			<td><?php echo $telp; ?></td>
			<td><?php echo $email; ?></td>
			<td><?php echo $alamat; ?></td>
		</tr>
		</tr>
		<br>
			<a href="input.php">Ingin pesan lagi?</a>
			<a href="index.html">Home</a>
</table>
</body>
</html>
