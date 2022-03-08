<?php
    if ($_GET['id_buku']) {
        include "koneksi.php";
        $query_foto = mysqli_query($koneksi, "SELECT * FROM buku where id_buku = '".$_GET['id_buku']."'");
        $data_foto = mysqli_fetch_array($query_foto);
        
        $query_hapus = mysqli_query($koneksi, "DELETE FROM buku where id_buku = '".$_GET['id_buku']."'");
        unlink('foto/'.$data_foto['foto']);
        if ($query_hapus) {
            // echo "berhasil";
            echo "<script> alert('Berhasil dihapus'); location.href='tampil_buku.php'; </script>";
        }
        // else{
        //     // echo "gagal";
        //     echo "<script> alert ('Gagal dihapus'); location.href='tampil_buku.php'; </script>";
        // }
    }
    else{
        echo "id_tidak ada";
    }
?>