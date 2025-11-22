<?php 
include "koneksi.php"; 
$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM aircraft WHERE id=$id");
$row = mysqli_fetch_assoc($data);
?>
<link rel="stylesheet" href="style.css">

<div class="container">
    <h2>EDIT DATA PESAWAT</h2>

    <form method="POST">
        <label>Kode Pesawat:</label><br>
        <input type="text" name="code" value="<?= $row['aircraft_code']; ?>"><br><br>

        <label>Model:</label><br>
        <input type="text" name="model" value="<?= $row['model']; ?>"><br><br>

        <label>Kapasitas:</label><br>
        <input type="number" name="capacity" value="<?= $row['capacity']; ?>"><br><br>

        <label>Tahun Pembuatan:</label><br>
        <input type="number" name="year" value="<?= $row['year_manufactured']; ?>"><br><br>

        <label>Status:</label><br>
        <input type="text" name="status" value="<?= $row['status']; ?>"><br><br>

        <button class="btn" type="submit" name="update">Update</button>
        <a href="tampil.php" class="btn">Kembali</a>
    </form>
</div>

<?php
if (isset($_POST['update'])) {
    mysqli_query($koneksi, "
        UPDATE aircraft SET
            aircraft_code='$_POST[code]',
            model='$_POST[model]',
            capacity='$_POST[capacity]',
            year_manufactured='$_POST[year]',
            status='$_POST[status]'
        WHERE id=$id
    ");

    echo "<script>alert('Data terupdate!'); window.location='tampil.php';</script>";
}
?>
