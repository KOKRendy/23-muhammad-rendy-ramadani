<?php
session_start();
require "cek.php";
?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Email</th>
      <th scope="col">Nomor Telfon</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <?php 
  
  include "koneksi.php";
  $query = "SELECT * FROM tb_user";
  $hasil = mysqli_query($koneksi, $query);
  $no = 1;
  $jum=mysqli_num_rows($hasil);
  while ($data=mysqli_fetch_array($hasil)){

  ?>
  <tbody>
    <tr>
      <th scope="row"><?php echo $no++ ?></th>
      <td><?php echo $data['nama_panjang'] ?></td>
      <td><?php echo $data['email'] ?></td>
      <td><?php echo $data ['nomor_telfon'] ?></td>
      <td><a href="admin.php?page=delete&id=<?php echo @$data['username'] ?>"><button class="btn btn-warning">Hapus</button></a></td>
    </tr>
  </tbody>
  <?php 
  }
  ?>
</table>