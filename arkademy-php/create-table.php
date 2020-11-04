<?php
    include "koneksi.php";

    $sql = "CREATE TABLE user(
        id int PRIMARY KEY,
        nama_produk varchar(50),
        keterangan varchar(50),
        harga char(50),
        jumlah char(50)
    )";

    if ($koneksi->query($sql) === TRUE){
        echo "Table berhasil dibuat";
    } else {
        echo "Table gagal dibuat";
    }
?>