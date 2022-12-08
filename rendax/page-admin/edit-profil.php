<?php
session_start();
require "cek.php";
?>
<div class="card text-center">
  <div class="card-header">Edit Profil Admin</div>
  <div class="card-body">
    <form action="page/proses-update.php" method="post">
      <!-- Awal Content Kategori -->
      <div class="container text-center card-single-produk">
        <div class="row g-3">
        <div class="col-12 col-md-6 col-lg-6">
          <div class="card mb-3 shadow">
            <div class="card-body">
              <div class="nama">
                <h4>Nama</h4>
                <input type="text" value="<?php echo @$SESSION['username'] ?>">
              </div>
            </div>
          </div>
        </div>
          <div class="col-12 col-md-6 col-lg-6">
            <div class="card mb-3 shadow">
              <div class="card-body">
                <div class="nama">
                  <h4>Deskripsi Saya</h4>
                  <textarea class="form-control" aria-label="With textarea"><?php echo @$_SESSION['deskripsi']?></textarea>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-3">
            <div class="card mb-3 shadow">
              <div class="card-body">
                <div class="nama">
                  <h4>Level</h4>
                  <p>Admin</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-3">
            <div class="card mb-3 shadow">
              <div class="card-body">
                <div class="nama">
                  <h4>Alamat</h4>
                  <input type="text" value="<?php echo @$_SESSION['alamat']?>" />
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-3">
            <div class="card mb-3 shadow">
              <div class="card-body">
                <div class="nama">
                  <h4>Nomor Telfon</h4>
                  <input type="text" value="<?php echo @$_SESSION['nomor_telfon']?>" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Akhir Content Kategori -->
      <button type="submit" class="btn btn-warning">Submit</button>
    </form>
  </div>
  <div class="card-footer text-muted">Rendax-Shop.com</div>
</div>
<style>
  input {
    border: none;
    border-bottom: 1px solid gray;
  }
</style>
