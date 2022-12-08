<?php 
include "koneksi.php";
$id = $_GET['id'];
$query = "SELECT * FROM tb_produk WHERE id_produk=$id";
$hasil = mysqli_query($koneksi, $query);
$data = mysqli_fetch_array($hasil);
?>
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
    <!-- Awal Content Produk -->
    <div class="container text-center content-single-produk">
      <div class="row g-0">
        <div class="col">
          <div class="card mb-3">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="foto/<?php echo $data['gambar'] ?>" class="img-fluid rounded-start" alt="..." />
              </div>
              <div class="col-md-8 text-start">
                <div class="card-body card-body-produk">
                  <h5 class="card-title"><?php echo $data['nama_produk'] ?></h5>
                  <h3><?php echo $data['harga'] ?></h3>
                  <br />
                  <p class="card-text">
                    <?php echo $data['deskripsi'] ?>
                  </p>
                  <div class="content-bawah-produk">
                    <button type="button" class="btn btn-warning">Beli</button>
                    <button type="button" class="btn btn-warning">Masukan Keranjang</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Awal Content Produk -->
  </body>
</html>
