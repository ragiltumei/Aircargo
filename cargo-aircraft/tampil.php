<?php include "koneksi.php"; ?>
<link rel="stylesheet" href="style.css">

<div class="container">
    <h2>DATA PESAWAT CARGO</h2>

    <a href="tambah.php" class="btn">+ Tambah Data</a>
    <br><br>

    <table>
        <tr>
            <th>ID</th>
            <th>Kode</th>
            <th>Model</th>
            <th>Kapasitas</th>
            <th>Tahun</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
        
        <?php 
        $data = mysqli_query($koneksi, "SELECT * FROM aircraft");
        while ($row = mysqli_fetch_assoc($data)) {
        ?>
        <tr>
            <td><?= $row['id']; ?></td>
            <td><?= $row['aircraft_code']; ?></td>
            <td><?= $row['model']; ?></td>
            <td><?= $row['capacity']; ?></td>
            <td><?= $row['year_manufactured']; ?></td>
            <td><?= $row['status']; ?></td>
            <td>
                <a href="edit.php?id=<?= $row['id']; ?>">Edit</a> | 
                <a href="hapus.php?id=<?= $row['id']; ?>" onclick="return confirm('Hapus data ini?')">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</div>
