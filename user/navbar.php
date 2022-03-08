<?php 
session_start();
    if($_SESSION['status_login']!=true){
        header('location: index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <div class="w3-top" style="font-family: Arial">
          <div class="w3-bar w3-white w3-wide w3-padding w3-card">
            <a href="home.php" class="w3-bar-item w3-button"><b>ID</b> Perpus</a>
            <!-- Float links to the right. Hide them on small screens -->
            <div class="w3-right w3-hide-small">
              <a href="home.php" class="w3-bar-item w3-button">Beranda</a>
              <a href="buku.php" class="w3-bar-item w3-button">Buku</a>
              <a href="cart.php" class="w3-bar-item w3-button">Keranjang</a>
              <a href="peminjaman.php" class="w3-bar-item w3-button">Riwayat</a>
              <a href="proses_logout.php" class="w3-bar-item w3-button">Logout</a>
          </div>
        </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
