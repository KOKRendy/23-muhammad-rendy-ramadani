<?php
session_start();
include "koneksi.php";
$username= $_POST['username'];
$pass = $_POST['password'];

$query = "SELECT * FROM tb_user WHERE username = '$username'";
$hasil = mysqli_query ($koneksi, $query);
$data = mysqli_fetch_array ($hasil);

$pengacak = 'jasin pembantai';

$passmd = md5 ($pengacak . md5 ($pass));
if ($passmd == $data ['password']){
    $_SESSION ['level'] = $data ['level'];
    $_SESSION ['username'] = $data ['username'];
    $_SESSION ['email'] = $data ['email'];
    $_SESSION ['nomor_telfon'] = $data ['nomor_telfon'];
    $_SESSION ['alamat_rumah'] = $data ['alamat_rumah'];
    $_SESSION ['nama_panjang'] = $data ['nama_panjang'];
    $_SESSION ['jenis_kelamin'] = $data ['jenis_kelamin'];
    $_SESSION ['status_bekerja'] = $data ['status_bekerja'];
    echo '<h2>Login Sukses</h2>';
    header ('location: ../?page=profil');
    unset ($_SESSION['salah']);
} else {
    $_SESSION ['salah'] = "salah";
    header("location: ../?page=login");
}
?>