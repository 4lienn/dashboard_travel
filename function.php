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

    function tambah ($data) {
        global $conn ;

        $nama               =   htmlspecialchars($data["nama"]);
        $email              =   htmlspecialchars($data["email"]);
        $no_hp              =   htmlspecialchars($data["no_hp"]);
        $tanggal            =   htmlspecialchars($data["tanggal"]);
        $asal               =   htmlspecialchars($data["asal"]);
        $tujuan             =   htmlspecialchars($data["tujuan"]);
        $jumlah_penumpang   =   htmlspecialchars($data["jumlah_penumpang"]);

        $query = "INSERT INTO travel
                    VALUES
                    ('','$nama','$email','$no_hp','$tanggal','$asal','$tujuan','$jumlah_penumpang')";
        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
    }

    function hapus($id) {
        global $conn;
        mysqli_query($conn, "DELETE FROM travel WHERE id = $id");

        return mysqli_affected_rows($conn);
    }

    function ubah($data){
        global $conn;

            $id                 =$data["id"];
            $nama               =htmlspecialchars($data["nama"]);
            $email              =htmlspecialchars($data["email"]);
            $no_hp              =htmlspecialchars($data["no_hp"]);
            $tanggal            =htmlspecialchars($data["tanggal"]);
            $asal               =htmlspecialchars($data["asal"]);
            $tujuan             =htmlspecialchars($data["tujuan"]);
            $jumlah_penumpang   =htmlspecialchars($data["jumlah_Penumpang"]);
    
        $query = "UPDATE travel SET
                    nama    = '$nama',
                    email   = '$email',
                    no_hp = '$no_hp',
                    tanggal  = '$tanggal',
                    asal  = '$asal',
                    tujuan  = '$tujuan',
                    jumlah_penumpang  = '$jumlah_penumpang'
                WHERE id   = $id
                ";
    
        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
    }
?>