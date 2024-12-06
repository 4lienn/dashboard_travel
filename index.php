<?php
require "function.php";
$travel = myqsli_query($conn, "SELECT * FROM travel");
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
        <?php foreach ( $travel as $row ) : ?>
            <tr>
                <td><?php $i; ?></td>
                <td>
                <a href="ubah.php">ReSchedule</a>
                <a href="hapus.php?id=<?php $row["id"]; ?>">Hapus Tiket</a>
                </td>
                <td><?php $row["nama"]; ?></td>
                <td><?php $row["email"]; ?></td>
                <td><?php $row["no_hp"]; ?></td>
                <td><?php $row["tanggal"]; ?></td>
                <td><?php $row["asal"]; ?></td>
                <td><?php $row["tujuan"]; ?></td>
                <td><?php $row["jumlah_penumpang"]; ?></td>
            </tr>
            <?php $i++ ?>
            <?php endforeach; ?>
    </table>
</body>
</html>