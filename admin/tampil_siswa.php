<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
    <?php include "navbar.php"; ?>
    <div class = "container" style="margin-top : 50px">
        <h1>Data Siswa</h1>        
        <br>     
        <table>
            <thead>
            <tr>
                <th style="width : 95%">
                    <form action="tampil_siswa.php" method ="POST">           
                    <input  type="text" name="cari" class="form-control" placeholder="Masukkan Keyword Pencarian id/nama siswa">      
                </th>
                <th style="width : 5%">
                    <a type="button" class="btn btn-primary" href="tambah_siswa.php">Tambah</a>
                </th>
            </tr>
            </thead>
            <tbody>
                <?php
                include "koneksi.php";
                if (isset($_POST["cari"])) {
                    //jika ada keyword pencarian
                    $cari=$_POST["cari"];
                    $qry_siswa=mysqli_query($koneksi,  "select * from siswa join kelas on kelas.id_kelas=siswa.id_kelas where siswa.id_siswa like '%$cari%' or siswa.nama_siswa like '%$cari%' or alamat like '%$cari%'");

                }else {
                    //jika tidak ada, tampil semua
                    $qry_siswa=mysqli_query($koneksi,"select * from siswa join kelas on siswa.id_kelas=kelas.id_kelas");
                }
                ?>
            </tbody>
            </table>
        </form>
        <br>
        <table class="table">
                <thead>
                    <tr>
                        <th scope="col">id Siswa</th>
                        <th scope="col">Nama Siswa</th>
                        <th scope="col">Tanggal Lahir </th>
                        <th scope="col">Gender</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Nama Kelas</th>
                        <th scope="col">Aksi</th>                        
                    </tr>
                </thead>
                <div>
                    
                </div>
                <tbody>
                    <?php
                        include "koneksi.php";
                        while($data_siswa=mysqli_fetch_array($qry_siswa)){?>
                            <div>
                            <tr>
                                <td><?php echo $data_siswa["id_siswa"];?></td>
                                <td><?php echo $data_siswa["nama_siswa"];?></td>
                                <td><?php echo $data_siswa["tanggal_lahir"];?></td>
                                <td><?php echo $data_siswa["gender"];?></td>
                                <td><?php echo $data_siswa["alamat"];?></td>
                                <td><?php echo $data_siswa["nama_kelas"];?></td>
                                <td>
                                <a href="ubah_siswa.php?id_siswa=<?php echo $data_siswa['id_siswa']?>" class="btn btn-success">Ubah</a>
                                <a href="hapus.php?id_siswa=<?php echo $data_siswa['id_siswa']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a>
                                </td>             
                            </tr>
                            </div>
                            </div>
                        <?php
                        }
                    ?>
                    
                    
                </tbody>
                <footer>        
                </footer>
        </table>
    </div> 
    </div>
</body>
<footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</footer>
</html>