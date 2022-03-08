<?php
if($_POST){
    include "koneksi.php";
    $nama_siswa     = $_POST['nama_siswa'];
    $tanggal_lahir  = $_POST['tanggal_lahir'];
    $alamat         = $_POST['alamat'];
    $gender         = $_POST['gender'];
    $username       = $_POST['username'];
    $password       = $_POST['password'];
    $id_kelas       = $_POST['id_kelas'];

    $insert = mysqli_query($koneksi, "INSERT INTO siswa (nama_siswa,tanggal_lahir,gender,alamat,username,password,id_kelas) VALUE ('".$nama_siswa."','".$tanggal_lahir."','".$gender."','".$alamat."','".$username."','".md5($password)."','".$id_kelas."')") or die(mysqli_error($koneksi));
    if ($insert) {
        echo "<script>alert('Sukses menambahkan siswa');location.href='tampil_siswa.php';</script>";
    }else{
        echo "<script>alert('Gagal menambahkan siswa');location.href='tampil_siswa.php';</script>";
    }
}
?>
