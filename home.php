<!DOCTYPE html>
<html>
<head>
  <title> Tugas CP-2</title>
  <!-- menghubungkan dengan file css -->
  <link rel="stylesheet" type="text/css" href="style.css">
  <!-- menghubungkan dengan file jquery -->
  <script type="text/javascript" src="jquery.js"></script>
</head>
<body>

<div class="content">
  <header>
    <h1 class="judul"> Toko Buku</h1>
    <h2> Data Toko Buku</h2>
  </header>
  <div class="menu">
    <ul>
      <li><a href="home.php?page=home">HOME</a></li>
      <li><a href="tentang.php?page=tentang">TENTANG</a></li>
      <li><a href="transaksi.php?page=tuortial">TRANSAKSI</a></li>
      <li><a href="upload.php?page=tuortial">UPLOAD</a></li>
    </ul>
  </div>
  <div class="badan">
<a href="home.php"></a>

  <?php 
  if(isset($_GET['pesan'])){
    $pesan = $_GET['pesan'];
    if($pesan == "input"){
      echo "Data berhasil di input.";
    }else if($pesan == "update"){
      echo "Data berhasil di update.";
    }else if($pesan == "hapus"){
      echo "Data berhasil di hapus.";
    }
  }
  ?>
  <a href="home.php"></a>
  <br/>
  <a class="tombol" href="input.php"> + Tambah Data Karyawan</a>

  <h3>Data user</h3>
  <table border="1" class="table">
    <tr>
      <th>No</th>
      <th>Nama</th>
      <th>Alamat</th>
      <th>Pekerjaan</th>
      <th>Opsi</th>   
    </tr>
    <?php 
    include "koneksi.php";
    $query_mysql =$koneksi->query("SELECT * FROM user")or die(mysql_error());
    $nomor = 1;
    while($data = mysqli_fetch_array($query_mysql)){
    ?>
    <tr>
      <td><?php echo $nomor++; ?></td>
      <td><?php echo $data['nama']; ?></td>
      <td><?php echo $data['alamat']; ?></td>
      <td><?php echo $data['pekerjaan']; ?></td>
      <td>
        <a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a> |
        <a href="hapus.php?id=<?php echo $data['id']; ?>">Hapus</a> |
        <a href="ubah.php?id=<?php echo $data['id']; ?>">Ubah</a>         
      </td>
    </tr>
    <?php } ?>

  </table>
</body>
</html>