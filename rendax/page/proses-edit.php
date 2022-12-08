<?php 
session_start();

include "koneksi.php";
@$username = $_SESSION['username'];
$email = $_POST['email'];
$nomor_telfon = $_POST['nomor-telfon'];
$alamat_rumah = $_POST['alamat-rumah'];
$nama_panjang = $_POST['nama-panjang'];
$jenis_kelamin = $_POST['jenis-kelamin'];
$status_bekerja = $_POST['status-bekerja'];

$query = "UPDATE tb_user SET email='$email', nomor_telfon='$nomor_telfon', alamat_rumah='$alamat_rumah', nama_panjang='$nama_panjang', jenis_kelamin='$jenis_kelamin', status_bekerja='$status_bekerja' WHERE username='$username'";
$hasil = mysqli_query($koneksi, $query);
if ($hasil){
    $_SESSION ["email"] = $email;
    $_SESSION ["nomor_telfon"] = $nomor_telfon;
    $_SESSION ["alamat_rumah"] = $alamat_rumah;
    $_SESSION ["nama_panjang"] = $alamat_rumah;
    $_SESSION ["nama_panjang"] = $nama_panjang;
    $_SESSION ["jenis_kelamin"] = $jenis_kelamin;
    $_SESSION ["status_bekerja"] = $status_bekerja;
    header('location: ../?page=profil');
} else{
    echo "Gagal Update Data";
}


?>