<?php
    $serverNAME = "localhost";
    $username = "root";
    $password = "";
    $database = "perpus";

    //buat kondisi
    $koneksi = mysqli_connect($serverNAME, $username, $password, $database);
    
    //cek kondisi
    // if (!$koneksi) {
    //     die("Koneksi Gagal".mysqli_connect_error());    
    // }
    // else {
    //     echo "koneksi berhasil";
    // }
?>