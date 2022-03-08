<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Tambah Siswa</title>
</head>
<body>
<div style="margin: 30px 200px; background-color: rgb(255, 255, 255); box-shadow: black 2px 5px; box-shadow: #838383 0px -8px 20px; border-radius: 0px;">  
    <form action="proses_tambah_siswa.php" method="post" style="padding : 80px;">
    <h3>Tambah Siswa</h3>
    <br>
        Nama Siswa :
        <input type="text" name="nama_siswa" value="" class="form-control">
        <br>
        Tanggal Lahir : 
        <input type="date" name="tanggal_lahir" value="" class="form-control">
        <br>
        Gender : 
        <select name="gender" class="form-control">
            <option></option>
            <option value="L">Laki-laki</option>
            <option value="P">Perempuan</option>
        </select>
        <br>
        Alamat : 
        <textarea name="alamat" class="form-control" rows="4"></textarea>
        <br>
        Kelas :
        <select name="id_kelas" class="form-control">
            <option value=""></option>
            <?php 
            include "koneksi.php";
            $qry_kelas=mysqli_query($koneksi,"select * from kelas");
            while($data_kelas=mysqli_fetch_array($qry_kelas)){
                echo '<option value="'.$data_kelas['id_kelas'].'">'.$data_kelas['nama_kelas'].'</option>';    
            }
            ?>
        </select>
        <br>
        Username : 
        <input type="text" name="username" value="" class="form-control">
        <br>
        Password : 
        <input type="password" name="password" value="" class="form-control">
        <br>
        <input type="submit" name="simpan" value="Tambah Siswa" class="btn btn-primary">
        <br>
        </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
