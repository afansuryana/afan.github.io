<?php 
$host = 'localhost';
    $user = 'root';
	$pass = '';
	$db = 'web';
	$koneksi = new mysqli ("localhost","root","","web");
echo $koneksi-> connect_errno?'koneksi gagal : '.
    $koneksi->connect_error:'';

?>