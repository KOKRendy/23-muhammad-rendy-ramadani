<?php
session_start();
require "cek.php";
?>
<?php
require "cek.php";
?>
<!--Container Main start-->
<div class="card text-center">
  <div class="card-header">Manage Produk</div>
  <div class="card-body">
    <!-- Awal Content Manage Produk -->
    <div class="container text-center card-single-produk">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-6 col-lg-4">
            <!-- Awal Form -->
            <form method="post" enctype="multipart/form-data">
                    <p class="text-start" style="font-weight: bold; font-size: 20px">Tambah Produk</p>
                <p class="text-start">Isi form ini dengan teliti dan jangan salah dalam menuliskan nama produk, deskripsi produk, dan tak lupa upload foto produk pada kolom upload</p>
                <p class="text-start" style="font-weight: bold; font-size: 20px">Nama Produk</p>
                <div class="input-group mb-3">
                  <input type="text" name="nama-produk" class="form-control" placeholder="Nama Produk" aria-label="Username" />
                </div>

                <p class="text-start" style="font-weight: bold; font-size: 20px">Kategori</p>
                <p class="text-start">
                  <select name="kategori">
                    <option value="laki-laki">Laki - Laki</option>
                    <option value="perempuan">Perempuan</option>
                    <option value="anak-anak">Anak - Anak</option>
                  </select>
                </p>
                <p class="text-start" style="font-weight: bold; font-size: 20px">Harga</p>
                <p class="text-start">
                  <div class="input-group mb-3">
                    <input type="text" name="harga" class="form-control" placeholder="Harga Produk" aria-label="Username" aria-describedby="basic-addon1" />
                  </div>
                </p>
                <p class="text-start" style="font-weight: bold; font-size: 20px">Deskripsi</p>
                <p class="text-start">
                  <div class="input-group">
                      <textarea class="form-control" name="deskripsi" aria-label="With textarea" placeholder="Deskripsi Produk"></textarea>
                  </div>
                </p>
                <p class="text-start" style="font-weight: bold; font-size: 20px">Upload Foto Produk</p>
                <p class="text-start">
                  <div class="input-group mb-3">
                      <input type="file" name="NamaFile" id="foto" value="" class="form-control" id="inputGroupFile02">
                  </div>
                </p>
                <button class="btn btn-warning text-white rounded-pill float-end" type="submit" name="proses">Kirim</button>
            </form>
            <!-- Akhir Form -->
          </div>
          <div class="col">
            <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <?php 
                  include "koneksi.php";
                  $query = "SELECT * FROM tb_produk";
                  $hasil = mysqli_query($koneksi, $query);
                  $no = 1;
                  $jum=mysqli_num_rows($hasil);
                  while ($data=mysqli_fetch_array($hasil)){
                ?>
                <tbody>
                  <tr>
                  <th scope="row"><?php echo $no++ ?></th>
                    <td><?php echo $data['nama_produk'] ?></td>
                    <td><?php echo $data['harga'] ?></td>
                    <td><img src="foto/<?php echo $data['gambar'] ?>" class="gambar" alt=""></td>
                    <td><a href="admin.php?page=delete&id=<?php echo @$data['id_produk'] ?>"><button class="btn btn-warning">Hapus</button></a></td>
                  </tr>
                <?php 
                }
                ?>
                </tbody>
              </table>
          </div>
        </div>
      </div>
    </div>
    <!-- Akhir Content Manage Produk -->
  </div>
  <div class="card-footer text-muted">Rendax-Shop.com</div>
</div>
<!--Container Main end-->

<?php 
include "koneksi.php";
if (isset($_POST['proses'])){
  $nama_produk = $_POST['nama-produk'];
  $kategori = $_POST['kategori'];
  $harga = $_POST['harga'];
  $deskripsi = $_POST['deskripsi'];
  $direktori = "foto/";
  $file_name = $_FILES ['NamaFile'] ['name'];
  move_uploaded_file($_FILES['NamaFile']['tmp_name'], $direktori.$file_name);
  mysqli_query($koneksi, "INSERT INTO tb_produk VALUES ('','$nama_produk','$kategori','$harga','$deskripsi','$file_name')");
}


?>

<style>
  .gambar{
    height: 150px;
    width: 150px;
  }
</style>