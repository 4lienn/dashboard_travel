<?php 
require 'function.php';


$id = $_GET["id"];

$ubahDB = query ("SELECT * FROM travel WHERE id = $id")[0];

if(isset($_POST["submit"])) {

    if( ubah($_POST) > 0) {
        echo "
            <script>
                alert('tiket Berhasil di uabh!!!');
                document.location.href = 'index.php';
            </script>
            ";
    } else {
        echo "
            <script>
                alert('tiket Gagal di ubah!!!');
                document.location.href = 'index.php';
            </script>
            ";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pemesanan Tiket Travel</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }
        h2 {
            text-align: center;
            color: #333;
        }
        label {
            display: block;
            margin: 15px 0 5px;
            font-weight: bold;
        }
        input, select, button {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #007BFF;
            color: white;
            font-size: 16px;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Form Pemesanan Tiket Travel</h2>
        <form action="#" method="POST">
            <label for="nama">Nama Lengkap:</label>
            <input type="text" id="nama" name="nama" placeholder="Masukkan nama lengkap" required value="<?= $ubahDB['nama']; ?>">

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Masukkan email" required value="<?= $ubahDB['email']; ?>">

            <label for="no_hp">Nomor HP:</label>
            <input type="tel" id="no_hp" name="no_hp" placeholder="Masukkan nomor HP" required value="<?= $ubahDB['no_hp']; ?>">

            <label for="tanggal">Tanggal Keberangkatan:</label>
            <input type="date" id="tanggal" name="tanggal" required value="<?= $ubahDB['tanggal']; ?>">

            <label for="asal">Asal:</label>
            <input type="text" id="asal" name="asal" placeholder="Masukkan kota asal" required value="<?= $ubahDB['asal']; ?>">

            <label for="tujuan">Tujuan:</label>
            <input type="text" id="tujuan" name="tujuan" placeholder="Masukkan kota tujuan" required value="<?= $ubahDB['tujuan']; ?>">

            <label for="jumlah_penumpang">Jumlah Penumpang:</label>
            <select id="jumlah_penumpang" name="jumlah_penumpang" required value="<?= $ubahDB['jumlah_penumpang']; ?>">
                <option value="">Pilih jumlah penumpang</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>

            <input type="submit" id="submit" name="submit">
        </form>
    </div>
</body>
</html>
