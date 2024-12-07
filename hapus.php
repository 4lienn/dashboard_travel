<?php
require 'function.php';

$id = $_GET["id"];

if ( hapus($id) > 0) {
    echo "
    <script>
        alert('tiket berhasil dihapus!');
        document.location.href = 'index.php';
    </script>
    ";
}else {
    echo "
    <script>
        alert('tiket gagal dihapus!');
        document.location.href = 'index.php';
    </script>
    ";
}
?>