<?php
    include "koneksi.php"; 
    $id_siswa        = $_POST['id_siswa'];
    $nama_siswa      = $_POST['nama_siswa'];
    $tanggal_lahir   = $_POST['tanggal_lahir'];
    $alamat          = $_POST['alamat'];
    $gender          = $_POST['gender'];
    $username        = $_POST['username'];
    $password        = $_POST['password'];
    $id_kelas        = $_POST['id_kelas'];

    $update = mysqli_query($koneksi, "UPDATE siswa set nama_siswa = '".$nama_siswa."',tanggal_lahir = '".$tanggal_lahir."',gender = '".$gender."',alamat = '".$alamat."',username = '".$username."',password='".md5($password)."',id_kelas = '".$id_kelas."' WHERE id_siswa = '".$id_siswa."'");
    if ($update) {
        echo "<script>alert('Sukses update siswa');location.href='tampil_siswa.php?id_siswa=".$id_siswa."';</script>";
    }else{
        echo "<script>alert('Gagal update siswa');location.href='tampil_siswa.php?id_siswa=".$id_siswa."';</script>";
    }
?>
