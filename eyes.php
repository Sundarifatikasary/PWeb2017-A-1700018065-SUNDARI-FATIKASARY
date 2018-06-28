<!DOCTYPE html>
<html>
<head>
	<title>Data Produk</title>
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
	$nama = "bedak <br> lipstik <br> mascara <br> eyeliner <br> facial foam <br> serum_wardah <br> bb_cream_wardah <br> wardah_white_scret";
	$harga = "37000 <br> 36000 <br> 25000 <br> 18000 <br> 30000 <br> 20000 <br> 25000 <br> 23000 ";
	?>
	<table>
		<tr>
			<td>Nama Produk</td>
			<td>Harga</td>
		</tr>
			<tr>
			<td><?php echo $nama; ?></td>
			<td><?php echo $harga; ?></td>
		</tr>
		
		<br>
			<a href="input.php">Input Data pesanan</a>
			<a href="index.html"> Home </a>
</table>
</body>
</html>
