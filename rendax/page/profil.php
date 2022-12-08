<?php 

require "cek.php";

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <title>Rendax</title>
  </head>
  <body>
    <!-- Awal Content Profil -->
    <div class="container profil-card">
      <div class="row g-3">
        <div class="col">
          <div class="card text-center">
            <div class="card-header bg-warning">
              Foto Profil
            </div>
            <p class="text-center"><img class="card-img rounded-circle" src="https://cdn-icons-png.flaticon.com/512/3135/3135823.png" alt="" /></p>
            <div class="card-body">
              <h5 class="card-title"><?php echo @$_SESSION['username'] ?></h5>
            </div>
            <div class="card-footer text-muted">
              <?php echo @$_SESSION['level'] ?>
            </div>
          </div>
        </div>
        <div class="col col-12 col-md-6 col-lg-8">
          <div class="card text-center">
            <div class="card-header bg-warning">Profil Saya</div>
            <p class="text-center"><img class="card-img rounded-circle" src="https://cdn-icons-png.flaticon.com/512/3135/3135823.png" alt="" /></p>
            <div class="card-body">
              <h1 class="card-title"><?php echo @$_SESSION['username'] ?></h2>
              <br />
              <div class="container">
                <div class="row row-cols-3">
                  <div class="col">
                    <div class="email">
                      <h5>Alamat Email</h5>
                      <p><?php echo "".@$_SESSION['email']."" ?></p>
                    </div>
                  </div>
                  <div class="col">
                    <div class="nomor-telfon">
                      <h5>Nomor Telfon</h5>
                      <p><?php echo "".@$_SESSION['nomor_telfon']."" ?></p>
                    </div>
                  </div>
                  <div class="col">
                    <div class="alamat-rumah">
                      <h5>Alamat Rumah</h5>
                      <p><?php echo "".@$_SESSION['alamat_rumah']."" ?></p>
                    </div>
                  </div>
                  <div class="col">
                    <div class="nama-panjang">
                      <h5>Nama Panjang</h5>
                      <p><?php echo "".@$_SESSION['nama_panjang']."" ?></p>
                    </div>
                  </div>
                  <div class="col">
                    <div class="jenis-kelamin">
                      <h5>Jenis Kelamin</h5>
                      <p><?php echo "".@$_SESSION['jenis_kelamin']."" ?></p>
                    </div>
                  </div>
                  <div class="col">
                    <div class="status-bekerja">
                      <h5>Status Bekerja</h5>
                      <p><?php echo "".@$_SESSION['status_bekerja']."" ?></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer text-muted">
              <a href="?page=edit-profil"><input class="btn btn-primary" type="submit" value="Edit" /></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Akhir Content Profil -->
  </body>
  <style>
    .card-img {
      margin-top: 10px;
      height: 150px;
      width: 150px;
    }
  </style>
</html>
