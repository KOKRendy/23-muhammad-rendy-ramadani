<?php
session_start();
require "cek.php";
?>
<!--Container Main start-->
<div class="card text-center">
  <div class="card-header">Profil Admin</div>
  <p class="text-center"><img class="card-img rounded-circle" src="https://i.imgur.com/hczKIze.jpg" alt="" /></p>
  <div class="card-body">
    <h5 class="card-title"><?php echo @$_SESSION['username'] ?></h5>
    <p class="card-text">Halo <?php echo @$_SESSION['username'] ?>. Selamat datang kembali di halaman admin!</p>
    <!-- Awal Content Kategori -->
    <div class="container text-center card-single-produk">
      <div class="row g-3">
        <div class="col">
          <div class="card mb-3 shadow">
            <div class="card-body">
              <div class="nama">
                <h4>Alamat Email</h4>
                <p><?php echo "".@$_SESSION['email']."" ?></p>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card mb-3 shadow">
            <div class="card-body">
              <div class="nama">
                <h4>Nama Panjang</h4>
                <p><?php echo "".@$_SESSION['nama_panjang']."" ?></p>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card mb-3 shadow">
            <div class="card-body">
              <div class="nama">
                <h4>Alamat</h4>
                <p><?php echo "".@$_SESSION['alamat_rumah']."" ?></p>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card mb-3 shadow">
            <div class="card-body">
              <div class="nama">
                <h4>Nomor Telfon</h4>
                <p><?php echo "".@$_SESSION['nomor_telfon']."" ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Akhir Content Kategori -->
    <a href="?page=edit-profil" class="btn btn-warning">Edit</a>
  </div>
  <div class="card-footer text-muted">Rendax-Shop.com</div>
</div>
<!--Container Main end-->
