<?php
// mengkoneksikan database yg sudah ada
$conn =mysqli_connect("localhost","root","","db_travel");

// membuat function dengan nama query
function query ($query) {
    // conn
    global $conn;
    $result = mysqli_query($conn, $query);

    // siapkan wadahnya
    $rows = [];

    // yang akan di ambil wadahnya
    while ($row = mysqli_fetch_assoc($result)){
    // menambahkan elemen baru setiap array
        $rows[] = $row;
    }
    // mengambil data
    return $rows;
}
?>