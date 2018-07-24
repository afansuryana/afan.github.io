<!DOCTYPE html>
<html>
<head>
	<title> Toko Buku </title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">		
		<h1> Upload Data </h1>
		
		
	</div>
	
	<br/>
	
	<a href="index.php">Lihat Semua Data</a>

	<br/>
	<h3>Upload data</h3>

	<?php 
	include "koneksi.php";
	
	
	$nomor = 1;
	
	?>
	<form action="upload.php" method="post">		
		<table>
			<tr>
				<td>Nama</td>
				<td>
					<input type="hidden" name="id" values="<?php echo $data['id'] ?>">
					<input type="text" name="nama" values="<?php echo $data['nama'] ?>">
				</td>					
			</tr>	
			<tr>
				<td>Alamat</td>
				<td>
					<input type="text" name="alamat" values="<?php echo $data['alamat'] ?>">
				</td>					
			</tr>	
			<tr>
				<td>Pekerjaan</td>
				<td>
					<input type="text" name="pekerjaan" values="<?php echo $data['pekerjaan'] ?>">
				</td>					
			</tr>	
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
	
</body>
</html>