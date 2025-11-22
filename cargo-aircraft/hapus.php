<?php
include "koneksi.php";
$id = $_GET['id'];

mysqli_query($koneksi, "DELETE FROM aircraft WHERE id=$id");

echo "<script>alert('Data berhasil dihapus!'); window.location='tampil.php';</script>";
?>
