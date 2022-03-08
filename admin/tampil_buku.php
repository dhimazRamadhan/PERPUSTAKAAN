<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
    <?php include "navbar.php"; ?>
    <div class = "container"></div>
    <div class = "container"style="margin-top : 50px">
        <h1>Data Buku</h1>
        <br>
        <table>
            <thead>
                <tr>
                    <th style="width : 90%">
                        <form action="tampil_buku.php" method ="POST">           
                        <input type="text" name="cari" class="form-control" placeholder="Masukkan Keyword Pencarian 'id/nama kelas'">      
                    </th>
                    <th style="width : 5%">
                        <a type="button" class="btn btn-primary" href="tambah_buku.php">Tambah</a>
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "koneksi.php";
                if (isset($_POST["cari"])) {
                    //jika ada keyword pencarian
                    $cari=$_POST["cari"];
                    $qry_buku=mysqli_query($koneksi,"select * from buku where id_buku='$cari'or nama_buku like'%$cari%'");

                }else {
                    //jika tidak ada, tampil semua
                    $qry_buku=mysqli_query($koneksi,"select * from buku");
                }
                ?>
            </tbody>
        </form>
        </table>
        <br>
        <table class="table">
                <thead>
                    <tr>
                        <th scope="col">id Buku</th>
                        <th scope="col">Nama Buku</th>
                        <th scope="col">Pengarang</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Foto</th>
                        <th scope="col"></th>    
                        <th scope="col">Aksi</th>                 
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include "koneksi.php";
                        while($data_buku = mysqli_fetch_array($qry_buku)){?>
                            <div>
                            <tr>
                                <td><?php echo $data_buku["id_buku"];?></td>
                                <td><?php echo $data_buku["nama_buku"];?></td>
                                <td><?php echo $data_buku["pengarang"];?></td>
                                <td><?php echo $data_buku["deskripsi"];?></td>
                                <td><?php echo $data_buku["foto"];?></td>  
                                <td><img style = "width : 100px" src = "foto/<?=$data_buku['foto']?>"></td>                            
                                <td>
                                <a href="ubah_buku.php?id_buku=<?php echo $data_buku['id_buku']?>" class="btn btn-success">Ubah</a>
                                <a href="hapus_buku.php?id_buku=<?=$data_buku['id_buku']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a>
                                </td>             
                            </tr>
                            </div>
                        <?php
                        }
                    ?>
                </tbody>
        </table>
    </div> 
</body>
<footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</footer>
</html>