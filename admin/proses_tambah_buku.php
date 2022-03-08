<?php
    $nama_buku = $_POST['nama_buku']; 
    $pengarang = $_POST['pengarang'];
    $deskripsi = $_POST['deskripsi'];

    $temp = $_FILES['foto']['tmp_name'];
    $type = $_FILES['foto']['type'];
    $size = $_FILES['foto']['size'];
    $name = rand(0,9999).$_FILES['foto']['name'];
    $folder = "foto/";

    // echo $temp.$type.$size.$name;

    include "koneksi.php";
    if ($size < 20480000 and ($type == "image/jpeg" or $type == "image/png")) 
    {
        
        if (move_uploaded_file($temp,$folder. $name)) {
            $input = mysqli_query($koneksi,"insert into buku (nama_buku,pengarang, deskripsi, foto) 
            VALUES ('".$nama_buku."','".$pengarang."','".$deskripsi."','".$name."')");
            if ($input) {
                echo "<script>alert('Berhasil');location.href='tampil_buku.php';</script>";
            }else {
                echo "<script>alert('Gagal');location.href='tampil_buku.php';</script>";
            }
        }
    }  
    else {
        echo "tidak ada";
        echo "<script>alert('file tidak sesuai');location.href='tampil_buku.php';</script>";
    }
?>