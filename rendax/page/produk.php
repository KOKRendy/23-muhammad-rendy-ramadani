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
    <!-- Awal Judul Produk  -->
    <br />
    <h1 class="text-center">Produk Kami</h1>
    <!-- Akhir Judul Produk -->

    <!-- Awal Content Produk -->
    <div class="container profil-card">
      <div class="row g-3 row-cols-3">
          <?php 
            include "koneksi.php";
            $query = "SELECT * FROM tb_produk";
            $hasil = mysqli_query($koneksi, $query);
            $no = 1;
            $jum=mysqli_num_rows($hasil);
            while ($data=mysqli_fetch_array($hasil)){
          ?>
          <div class="col-12 col-md-6 col-lg-4">
            <div class="card shadow-lg">
              <img src="foto/<?php echo $data['gambar'] ?>" class="card-img-top" alt="Foto Produk Baju" />
              <div class="card-body">
                <h5 class="card-title"><?php echo $data['nama_produk'] ?></h5>
                <p class="card-text"><?php echo $data['deskripsi'] ?></p></b>
                <button class="btn btn-warning text-white rounded-pill" disabled>Beli</button>
                <a href="index.php?page=single-produk&id=<?php echo $data['id_produk'] ?>"><button class="btn btn-warning text-white rounded-pill">Lihat Produk</button></a>
                <button class="btn btn-warning text-white rounded-pill" disabled>Masukan Ke Keranjang</button>
              </div>
            </div>
          </div>
          <?php } ?>
          <?php 
          


          ?>
      </div>
    </div>
    <!-- Akhir Content Produk -->
  </body>
</html>
