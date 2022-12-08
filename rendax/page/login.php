<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <title>Rendax</title>
  </head>
  <body>
    <!-- Awal Content Login -->
    <div class="container content-login">
      <div class="row g-0">
        <div class="col col-12 col-md-6 gambar-login"><img src="img/gambar-login.jpg" width="100%" alt="" /></div>
        <div class="col col-12 col-md-6">
          <div class="card-group">
            <div class="card">
              <img src="img/gambar-login2.jpg" class="card-img-top" alt="Logo Website" />
              <div class="card-body">
              <?php 
              if (isset($_SESSION['salah'])){
                if ($_SESSION['salah'] == "salah"){
              ?>
              <div class="alert alert-danger" role="alert">
              Password Atau Username Yang Anda Masukan Salah
              </div>
              <?php 
                }
              }
              ?>
                <h5 class="card-title text-center judul-login">Login</h5>
                <form action="page/submit_login.php" method="post">
                  <table class="table table-borderless">
                    <tbody>
                      <tr>
                        <th>Masukan Username</th>
                        <td>
                          <div class="input-group flex-nowrap">
                            <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping" name="username" autocomplete="off" />
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <th>Masukan Password</th> 
                        <td>
                          <div class="input-group flex-nowrap">
                            <input type="password" class="form-control" placeholder="Password" aria-label="Username" aria-describedby="addon-wrapping" name="password" autocomplete="off" />
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
              </div>
                  <div class="card-footer">
                    <button class="btn btn-warning text-white rounded-pill float-end" type="submit">Login</button>
                    <p>belum memiliki akun? <a href="index.php?page=register">daftar sekarang.</a></p>
                  </div>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Akhir Content Login -->
  </body>
</html>
