<?php
    $id_buku = $_POST['id_buku'];
    $nama_buku = $_POST['nama_buku']; 
    $pengarang = $_POST['pengarang'];
    $deskripsi = $_POST['deskripsi'];

    $temp = $_FILES['foto']['tmp_name'];
    $type = $_FILES['foto']['type'];
    $size = $_FILES['foto']['size'];
    $name = rand(0,9999).$_FILES['foto']['name'];
    $folder = "foto/";

    include "koneksi.php";
    #mendapatkan data buku yang diubah
    $sql = "SELECT * from buku where id_buku='$id_buku'";
    #proses eksekusi
    $qry = mysqli_query($koneksi , $sql);
    $buku = mysqli_fetch_array($qry);
    #proses hapus file yang lama
    $path = $folder.$buku['foto'];
    if (file_exists($path)) {
        unlink($path);
    }

    move_uploaded_file($temp,$folder. $name);

    #proses update data
    $sql = "UPDATE buku SET nama_buku='$nama_buku',
    pengarang = '$pengarang',deskripsi = '$deskripsi', foto ='$name'
    where id_buku = '$id_buku'";

    #eksekusi 
    $result = mysqli_query($koneksi,$sql);
    if($result){
        echo "<script>alert('Sukses update buku');location.href='tampil_buku.php';</script>";
    } else {
        echo "<script>alert('Gagal update buku');location.href='tampil_buku.php';</script>";
    }
?>