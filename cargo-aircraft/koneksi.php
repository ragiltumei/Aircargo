<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "aircargo_inventory"; // GANTI sesuai DB Anda

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
