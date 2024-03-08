<?php
include('koneksi.php');

$nama = $_POST['nama'];
$nip = $_POST['nip'];
$kelas = $_POST['kelas'];
$password = $_POST['password'];

//insert data di database
$query = mysqli_quary($connection,"INSERT INTO siswa(nama,nip,kelas,) VALUES('$nama','$nip','$kelas',)");

//redirect ke halaman utama
header("location=koneksi.php");