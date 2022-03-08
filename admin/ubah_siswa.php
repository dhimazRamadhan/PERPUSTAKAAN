<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Ubah Siswa</title>
</head>
<body>
<div style="margin: 30px 200px; background-color: rgb(255, 255, 255); box-shadow: black 2px 5px; box-shadow: #838383 0px -8px 20px; border-radius: 0px;">
    <?php 
        include "koneksi.php";
        $qry_get_siswa=mysqli_query($koneksi,"select * from siswa where id_siswa = '".$_GET['id_siswa']."'");
        $dt_siswa=mysqli_fetch_array($qry_get_siswa);
        ?>
    <form action="proses_ubah_siswa.php" method="post" style="padding : 80px;">
    <h1>Ubah Data Siswa</h1>
        <br>
        <input type="hidden" name="id_siswa" value="<?=$dt_siswa['id_siswa']?>">    
        Nama siswa :
        <input type="text" name="nama_siswa" value="<?php echo $dt_siswa['nama_siswa']?>" class="form-control">
        <br>
        Tanggal Lahir : 
        <input type="date" name="tanggal_lahir" value="<?php echo $dt_siswa['tanggal_lahir']?>" class="form-control">
        <br>
        Gender :
        <?php
            $arr_gender=array('L'=>'Laki-laki','P'=>'Perempuan');
        ?> 
        <select name="gender" class="form-control">
            <option></option>
            <?php foreach ($arr_gender as $key_gender => $val_gender):
                if($key_gender==$dt_siswa['gender']){
                    $selek="selected";
                } else {
                    $selek="";
                }?>
                <option value="<?=$key_gender?>"<?=$selek?>><?=$val_gender?></option>
            <?php endforeach ?>
        </select>
        <br>
        Alamat : 
        <textarea name="alamat" class="form-control" rows="4"><?=$dt_siswa['alamat']?></textarea>
        <br>
        Kelas :
        <select name="id_kelas" class="form-control">
            <option value=""></option>
            <?php 
            include "koneksi.php";
            $qry_kelas=mysqli_query($koneksi,"select * from kelas");
            while($data_kelas=mysqli_fetch_array($qry_kelas)){
                if($data_kelas['id_kelas']==$dt_siswa['id_kelas']){
                    $selek="selected";
                }
                else {
                    $selek="";
                }
                echo '<option value="'.$data_kelas['id_kelas'].'"'.$selek.'>'.$data_kelas['nama_kelas'].'</option>';    
            }
            ?>
        </select>
        <br>
        Username : 
        <input type="text" name="username" value="<?=$dt_siswa['username']?>" class="form-control">
        <br>
        Password : 
        <input type="password" name="password" value="" class="form-control">
        <br>
        <input type="submit" name="simpan" value="Edit Siswa" class="btn btn-primary">
        <br>
    </form>
        </div>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
