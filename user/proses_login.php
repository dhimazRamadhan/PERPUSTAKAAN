
    <?php 
    if($_POST){
        $username_siswa=$_POST['username'];
        $password_siswa=$_POST['password'];
        if(empty($username_siswa)){
            echo "<script>alert('Username tidak boleh kosong');location.href='login.php';</script>";
        } elseif(empty($password_siswa)){
            echo "<script>alert('Password tidak boleh kosong');location.href='login.php';</script>";
        } else {
            include "koneksi.php";
            $qry_login=mysqli_query($koneksi,"select * from siswa where username = '".$username_siswa."' and password = '".md5($password_siswa)."'");
            if(mysqli_num_rows($qry_login)>0){
                $dt_login=mysqli_fetch_array($qry_login);
                session_start();
                $_SESSION['id_siswa']=$dt_login['id_siswa'];
                $_SESSION['nama_siswa']=$dt_login['nama_siswa'];
                $_SESSION['status_login']=true;
                header("location: home.php");
            } else {
                echo "<script>alert('Username dan Password tidak benar');location.href='index.php';</script>";
            }
        }
    }
?>

