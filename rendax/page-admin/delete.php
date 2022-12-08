<?php 

include "koneksi.php";
$id = $_GET['id'];
$query_delete = "DELETE FROM tb_user WHERE username='$id'";
$hasil = mysqli_query($koneksi, $query_delete);
if ($hasil){
    echo "Data Terhapus";
    // header ("location: ?page=dashboard");
}
$query_delete = "DELETE FROM tb_produk WHERE id_produk='$id'";
$hasil = mysqli_query($koneksi, $query_delete);
if ($hasil){
    echo "Data Terhapus";
    // header ("location: ?page=dashboard");
}

?>