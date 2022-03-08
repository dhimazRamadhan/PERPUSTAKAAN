<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Kelas</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
    <?php
        include "koneksi.php";
        $query_kelas = mysqli_query($koneksi, "select * from kelas where id_kelas='".$_GET['id_kelas']."'");
        $data_kelas = mysqli_fetch_array($query_kelas);
    ?>
    <?php
    include "koneksi.php";
    ?>
    <br></br>
    <div style="margin: 30px 200px; background-color: rgb(255, 255, 255); box-shadow: black 2px 5px; box-shadow: #838383 0px -8px 20px; border-radius: 0px;">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="proses_ubah_kelas.php" style="padding : 80px;">
                    <h1>Update Kelas</h1>
                    <input type="hidden" name="id_kelas" value="<?=$data_kelas['id_kelas']?>">
                    <div class="mb-3">
                        <label for="nama_kelas" class="form-label">Nama Kelas</label>
                        <input type="text" class="form-control" name="nama_kelas" value="<?=$data_kelas['nama_kelas']?>" placeholder="Masukkan Nama Kelas" required>
                    </div>
                    <div class="mb-3">
                        <label for="kelompok" class="form-label">Kelompok</label>
                        <input type="text" class="form-control" name="kelompok" value="<?=$data_kelas['kelompok']?>" placeholder="Masukkan Kelompok" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Edit</button>
                </form>
            </div>
        </div>
    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>