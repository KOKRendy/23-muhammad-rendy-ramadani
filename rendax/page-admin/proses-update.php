<?php
include "../koneksi.php";
@$deskripsi=$_POST['deskripsi'];
@$alamat=$_POST['alamat'];
@$nomor_telfon=$_POST['nomor_telfon'];

$query = "UPDATE tb_user set deskripsi='$deskripsi', alamat='$alamat', nomor_telfon='$nomor_telfon' WHERE username='$username' ";
$hasil=mysqli_query($koneksi, $query);
if($hasil){
    header('location: ../?page=dashboard');
} else{
    echo "Gagal Update Data";
}
?>