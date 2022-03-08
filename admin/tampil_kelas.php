<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kelas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
     <?php include "navbar.php"; ?>
    <div class = "container" style="margin-top : 50px">
        <h1>Data Kelas</h1>
        <br>
        <table>
            <thead>
                <tr>
                    <th style="width : 90%">
                        <form action="tampil_kelas.php" method ="POST">           
                        <input type="text" name="cari" class="form-control" placeholder="Masukkan Keyword Pencarian 'id/nama kelas'">      
                    </th>
                    <th style="width : 5%">
                        <a type="button" class="btn btn-primary" href="tambah_kelas.php">Tambah</a>
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "koneksi.php";
                if (isset($_POST["cari"])) {
                    //jika ada keyword pencarian
                    $cari=$_POST["cari"];
                    $qry_kelas=mysqli_query($koneksi,"select * from kelas where id_kelas='$cari'or nama_kelas like'%$cari%'");

                }else {
                    //jika tidak ada, tampil semua
                    $qry_kelas=mysqli_query($koneksi,"select * from kelas");
                }
                ?>
            </tbody>
            </table>
        </form>
        <br>
        <table class="table">
                <thead>
                    <tr>
                        <th scope="col">id Kelas</th>
                        <th scope="col">Nama Kelas</th>
                        <th scope="col">Kelompok </th>
                        <th scope="col">Aksi </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include "koneksi.php";
                        
                        while($data_kelas=mysqli_fetch_array($qry_kelas)){?>
                            <div>
                            <tr>
                                <td><?php echo $data_kelas["id_kelas"];?></td>
                                <td><?php echo $data_kelas["nama_kelas"];?></td>
                                <td><?php echo $data_kelas["kelompok"];?></td>
                                <td>
                                <a href="ubah_kelas.php?id_kelas=<?php echo $data_kelas['id_kelas']?>" class="btn btn-success">Ubah</a>
                                <a href="hapus_kelas.php?id_kelas=<?php echo $data_kelas['id_kelas']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a>
                                </td>
                                <tr>
                            </tr>
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
    <div class = "container"></div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</footer>
</html>