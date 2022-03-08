<?php 
include "navbar.php";
?>
<!doctype html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <title>Home</title>
</head>
<body> 
  <div>
    <div style="width: 100%; height: 40px"></div>
    <h4 style="margin-left: 140px; margin-top: 190px; font-family: Arial; margin-top : 50px; color : black; font-weight: bold !important;">Selamat datang <?=$_SESSION['nama_siswa']?> di website Perpus Online.</h4>
    <hr style="margin-left: 140px; margin-right: 140px">
    <div style="color: transparent; margin-top: 120px; float: left; width: 35%; margin-left: 140px;">
      <h1 style="font-family: Arial; color : black; font-size: 56px">
        Siapa Kami?
      </h1>
      <div style="color: transparent; padding-top:15Px">
        <h4 style="font-family: Arial; color : black; font-weight:100 !important;line-height: 1.5;">
          Kami adalah lembaga perpustakaan yang berbasis di kota Malang Jawa Timur.<br> 
          Kami memiliki koleksi buku 10.000+ dengan berbagai macam kategori, dan kami juga menyediakan fitur pinjam buku secara online melalui website ini. Selamat membaca! <a style="font-family: Arial; color :blue ; font-weight:100 !important;font-style: italic; line-height: 1.5;" href="buku.php">lihat buku</a>
        </h4>
      </div>
    </div>
    <img src="book.png" style="float: right; width: 700px;margin-right : 120px; margin-top : 80px">
  </div>
</body>   
<script src="/docs/5.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script> 
</html>

