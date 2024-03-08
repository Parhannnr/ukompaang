<?php 

$host   = "localhost";
$user   = "root";
$pass   = "";
$db     = "web_sekolah";

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
   die("Connection success :" . mysqli_connect_error());
}
?>