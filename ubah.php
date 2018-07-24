<!DOCTYPE html>
<html>
<head>
	<title> Toko Buku </title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">		
		<h1> Ubah Buku </h1>
		
		
	</div>
	
	<br/>
	
	<a href="index.php">Lihat Semua Data</a>

	<br/>
	<h3>Ubah Buku</h3>

	<?php 
	include "koneksi.php";
	
	
	$nomor = 1;
	
	?>
	<form action="ubah.php" method="post">		
		<table>
			<tr>
				<td>Judul Buku</td>
				<td>
					<input type="hidden" name="id" values="<?php echo $data['id'] ?>">
					<input type="text" name="nama" values="<?php echo $data['nama'] ?>">
				</td>					
			</tr>	
			<tr>
				<td> Tahun Terbit</td>
				<td>
					<input type="text" name="tahun terbit" values="<?php echo $data['tahun terbit'] ?>">
				</td>					
			</tr>	
			<tr>
				<td>Gambar Buku</td>
				<td>
					<input type="file" name="gambar buku" values="<?php echo $data['gambar buku'] ?>">
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