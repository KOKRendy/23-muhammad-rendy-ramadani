<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <title>Rendax</title>
  </head>
  <body>
    <!-- Awal Content Profil -->
    <form action="page/proses-edit.php" method="post">
        <div class="container profil-card">
            <div class="row g-3"> 
              <div class="col">
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
                            <div class="input-group mb-3">
                              <input type="text" name="email" value="<?php echo "".@$_SESSION['email']."" ?>" class="form-control" placeholder="Email" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                          </div>
                        </div>
                        <div class="col">
                          <div class="nomor-telfon">
                            <h5>Nomor Telfon</h5>
                            <div class="input-group mb-3">
                              <input type="text" name="nomor-telfon" value="<?php echo "".@$_SESSION['nomor_telfon']."" ?>" class="form-control" placeholder="Nomor Telfon" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                          </div>
                        </div>
                        <div class="col">
                          <div class="alamat-rumah">
                            <h5>Alamat Rumah</h5>
                            <div class="input-group">
                              <textarea class="form-control" name="alamat-rumah" aria-label="With textarea"><?php echo "".@$_SESSION['alamat_rumah']."" ?></textarea>
                            </div>
                          </div>
                        </div>
                        <div class="col">
                          <div class="nama-panjang">
                            <h5>Nama Panjang</h5>
                            <div class="input-group mb-3">
                              <input type="text" name="nama-panjang" value="<?php echo "".@$_SESSION['nama_panjang']."" ?>" class="form-control" placeholder="Nama Panjang" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                          </div>
                        </div>
                        <div class="col">
                          <div class="jenis-kelamin">
                            <h5>Jenis Kelamin</h5>
                            <div class="input-group mb-3">
                              <input type="text" name="jenis-kelamin" value="<?php echo "".@$_SESSION['jenis_kelamin']."" ?>" class="form-control" placeholder="Jenis Kelamin" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                          </div>
                        </div>
                        <div class="col">
                          <div class="status-bekerja">
                            <h5>Status Bekerja</h5>
                            <div class="input-group mb-3">
                              <input type="text" name="status-bekerja" value="<?php echo "".@$_SESSION['status_bekerja']."" ?>" class="form-control" placeholder="Status Bekerja" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer text-muted">
                    <input class="btn btn-primary" type="submit" value="Kirim" />
                  </div>
                </div>
              </div>
            </div>
          </div>
    </form>
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
