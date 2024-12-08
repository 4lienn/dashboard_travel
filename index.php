<?php
require "function.php";
$travel = mysqli_query($conn, "SELECT * FROM travel");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Halaman admin</title>
</head>
<body>
    <h1>Daftar penumpang</h1>
    <a href="tambah.php">Pesan tiket</a>
    <br>
    <br>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>NO</th>
            <th>Aksi</th>
            <th>Nama</th>
            <th>Email</th>
            <th>NO HP</th>
            <th>Tanggal</th>
            <th>Asal</th>
            <th>Tujuan</th>
            <th>Jumlah Penumpang</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach ( $travel as $row) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                <a href="ubah.php?id=<?= $row["id"]; ?>">ReSchedule</a>
                <a href="hapus.php?id=<?= $row["id"]; ?>">Hapus Tiket</a>
                </td>
                <td><?= $row["nama"]; ?></td>
                <td><?= $row["email"]; ?></td>
                <td><?= $row["no_hp"]; ?></td>
                <td><?= $row["tanggal"]; ?></td>
                <td><?= $row["asal"]; ?></td>
                <td><?= $row["tujuan"]; ?></td>
                <td><?= $row["jumlah_penumpang"]; ?></td>
            </tr>
            <?php $i++ ?>
            <?php endforeach; ?>
    </table>
</body>
</html>