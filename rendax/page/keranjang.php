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
    <!-- Awal Content Keranjang -->
    <div class="container content-keranjang">
      <div class="row">
        <div class="col-15 col-md-6 col-lg-8">
          <table class="table table-borderless text-center">
            <h1>Keranjang Belanja</h1>
            <thead class="border-bottom">
              <tr class="bg-warning">
                <th scope="col">No</th>
                <th scope="col">Produk</th>
                <th scope="col">Harga</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>1</th>
                <td>
                  <div class="container">
                    <div class="row g-0">
                      <div class="col g-0">
                        <div class="gambar-produk"><img src="https://i.postimg.cc/7h9hPgDF/foto-produk-1.jpg" alt="" /></div>
                      </div>
                      <div class="col g-0">
                        <div class="deskripsi-produk">
                          <h6>Sweeter Cepmek</h6>
                        </div>
                      </div>
                    </div>
                  </div>
                </td>
                <td>Rp. 250.000</td>
                <td>1</td>
                <td>Hapus</td>
              </tr>
              <tr>
                <th>1</th>
                <td>
                  <div class="container">
                    <div class="row g-0">
                      <div class="col g-0">
                        <div class="gambar-produk"><img src="https://i.postimg.cc/7h9hPgDF/foto-produk-1.jpg" alt="" /></div>
                      </div>
                      <div class="col g-0">
                        <div class="deskripsi-produk">
                          <h6>Sweeter Cepmek</h6>
                        </div>
                      </div>
                    </div>
                  </div>
                </td>
                <td>Rp. 250.000</td>
                <td>1</td>
                <td>Hapus</td>
              </tr>
              <tr>
                <th>1</th>
                <td>
                  <div class="container">
                    <div class="row g-0">
                      <div class="col g-0">
                        <div class="gambar-produk"><img src="https://i.postimg.cc/7h9hPgDF/foto-produk-1.jpg" alt="" /></div>
                      </div>
                      <div class="col g-0">
                        <div class="deskripsi-produk">
                          <h6>Sweeter Cepmek</h6>
                        </div>
                      </div>
                    </div>
                  </div>
                </td>
                <td>Rp. 250.000</td>
                <td>1</td>
                <td>Hapus</td>
              </tr>
              <tr class="text-start">
                <td></td>
                <td>
                  <div class="container">
                    <div class="row">
                      <div class="col"><h4>Subtotal Untuk Produk</h4></div>
                    </div>
                  </div>
                </td>
                <td></td>
                <td></td>
                <td>
                  <div class="container">
                    <div class="row">
                      <div class="col"><h5>Rp. 750.000</h5></div>
                    </div>
                  </div>
                </td>
              </tr>
              <tr class="text-start bg-warning rounded-1">
                <td></td>
                <td>
                  <div class="container">
                    <div class="row">
                      <div class="col"><h4>Total Pembayaran</h4></div>
                    </div>
                  </div>
                </td>
                <td></td>
                <td></td>
                <td>
                  <div class="container">
                    <div class="row">
                      <div class="col"><h5>Rp. 750.000</h5></div>
                    </div>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="col-12 col-md-6 col-lg-4 side-content">
          <h3>Info Pembayaran</h3>
          <form>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Masukan Nama Lengkap</label>
              <input type="text" class="form-control" id="exampleInputEmail1" />
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Masukan Alamat Penerima Barang</label>
              <input type="text" class="form-control" id="exampleInputPassword1" />
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Masukan Nomor Telepon</label>
              <input type="text" class="form-control" id="exampleInputPassword1" />
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Masukan Kode Pos</label>
              <input type="text" class="form-control" id="exampleInputPassword1" />
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Masukan Pesan</label>
              <textarea name="" id="" cols="50" rows="2"></textarea>
            </div>
            <button type="submit" class="btn btn-warning float-end">Submit</button>
          </form>
        </div>
      </div>
    </div>
    <!-- Akhir Content Keranjang -->
  </body>
</html>

<style>
  .content-keranjang {
    margin-top: 30px;
    border-radius: 10px;
  }
  .input {
    outline: 0;
    border-width: 0 0 2px;
    border-color: black;
  }
  input:focus {
    border-color: green;
  }
</style>
