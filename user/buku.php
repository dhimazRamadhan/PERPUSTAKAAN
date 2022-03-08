<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Daftar Buku</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/album/">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
       section {
       background-image: url('../src/Group.png');
       background-repeat: no-repeat;
       background-size: cover;
    }
    </style>   
  </head>
  <?php include "navbar.php";?>
  <body>
    <main style="">
    <section class="alpha py-5 text-center bg-body rounded background-color;">
        <br>
        <br>
        <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="fw-light" style="font-weight: bold !important; font-family: Arial; color: white;">Daftar Buku</h1>
            <p style="font-weight: lighter !important; font-family: Arial; color: white;">
              Silakan cari buku yang akan dipinjam
            </p>
            <form method="POST" action="buku.php" class="d-flex">
                    <input class="form-control me-2" type="search" name="cari"
                    placeholder="Search" aria-label="Search">
                    <button type="submit" class="btn btn-light">Seaarch</button>
            </form>
        </div>
        <br>
        <br>
    </section>
    <div style="margin-top: 70px">
        <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          <?php
          include "koneksi.php";
          if (isset($_POST['cari'])) {
              $cari = $_POST['cari'];
              $query_buku = mysqli_query($koneksi, "select * from buku where id_buku = '$cari' or nama_buku like '%$cari%' or pengarang like '%$cari%'");
          }
          else{
              $query_buku = mysqli_query($koneksi, "select * from buku");
          }
          while($data_buku = mysqli_fetch_array($query_buku)){
          ?>  
          <div class="col">
            <div class="card shadow-sm">
                <img src="../admin/foto/<?=$data_buku['foto']?>" class="bd-placeholder-img card-img-top" height="500px" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                <rect width="100%" height="100%" fill="#55595c"/></img>

                <div class="card-body">
                <p class="card-text"><b><?=$data_buku['nama_buku']?></b></p>
                <p class="card-text"><?=$data_buku['deskripsi']?></p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    <a href="pinjam_buku.php?id_buku=<?=$data_buku['id_buku']?>" type="button" class="btn btn-sm btn-outline-secondary">Pinjam</a>
                    </div>
                    <small class="text-muted"><?=$data_buku['pengarang']?></small>
                </div>
                </div>
            </div>
            </div>
          <?php
          }
          ?>
        </div>
        </div>
    </div>
    </main>
    <?php include 'footer.php'; ?>
  </body>
</html>