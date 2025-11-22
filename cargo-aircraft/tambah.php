<?php include "koneksi.php"; ?>
<link rel="stylesheet" href="style.css">

<div class="container">
    <h2>TAMBAH PESAWAT</h2>

    <form method="POST">
        <label>Kode Pesawat:</label><br>
        <input type="text" name="code" required><br><br>

        <label>Model:</label><br>
        <input type="text" name="model" required><br><br>

        <label>Kapasitas:</label><br>
        <input type="number" name="capacity" required><br><br>

        <label>Tahun Pembuatan:</label><br>
        <input type="number" name="year" required><br><br>

        <label>Status:</label><br>
        <input type="text" name="status" required><br><br>

        <button class="btn" type="submit" name="save">Simpan</button>
        <a href="tampil.php" class="btn">Kembali</a>
    </form>
</div>

<?php
if (isset($_POST['save'])) {
    mysqli_query($koneksi, "INSERT INTO aircraft (aircraft_code, model, capacity, year_manufactured, status) 
    VALUES (
        '$_POST[code]',
        '$_POST[model]',
        '$_POST[capacity]',
        '$_POST[year]',
        '$_POST[status]'
    )");

    echo "<script>alert('Data berhasil ditambahkan!'); window.location='tampil.php';</script>";
}
?>
