<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <title>Rendax</title>
</head>

<body class="body">
  <!-- Awal Content Atas -->
  <div class="superNav border-bottom py-2 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 centerOnMobile">
          <span
            class="d-none d-lg-inline-block d-md-inline-block d-sm-inline-block d-xs-none me-3"><strong>rendax-shop.com</strong></span>
          <span class="me-3"><i class="fa-solid fa-phone me-1 text-warning"></i>
            <strong>+62-8956-2111-1615</strong></span>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-none d-lg-block d-md-block-d-sm-block d-xs-none text-end">
          <span class="me-3"><i class="fa-solid fa-truck text-muted me-1"></i><a class="text-muted" href="#">Tentang
              Saya</a></span>
          <span class="me-3"><i class="fa-solid fa-file text-muted me-2"></i><a class="text-muted" href="#">Website
              Kami</a></span>
        </div>
      </div>
    </div>
  </div>
  <!-- Akhir Content Atas -->

  <!-- Awal Navbar -->
  <?php
    if (isset($_SESSION['level']) && isset($_SESSION['username'])){
      if ($_SESSION['level'] == "admin"){
        header("location: admin.php");
      } elseif ($_SESSION['level'] == "user"){
        include "page/navbar-login.php";
      }
    } else {
      include "page/navbar.php";
    }
    ?>
  <!-- Akhir Navbar -->

  <!-- Awal Code Php -->
  <div class="badan">
    <?php
            if (isset($_GET['page'])){
                $page = $_GET ['page'];
                switch ($page){
                    case 'home':
                      include "page/home.php";    
                      break;
                    case 'produk':
                      include "page/produk.php";
                      break;
                    case 'kategori':
                      include "page/kategori.php";
                      break;
                    case 'login':
                      include "page/login.php";
                      break;
                    case 'tentang':
                      include "page/tentang.php";
                      break;
                    case 'keranjang':
                      include "page/keranjang.php";
                      break;
                    case "profil":
                      include "page/profil.php";
                      break;
                    case 'register':
                      include "page/register.php";
                      break;
                    case 'logout':
                      include "page/logout.php";
                      break;
                    case 'single-produk':
                      include "page/single-produk.php";
                      break;
                    case 'belum-login':
                      include "page/belum-login.php";
                      break;
                    case 'sudah-login':
                      include "page/sudah-login.php";
                      break;
                    case 'edit-profil':
                      include "page/edit-profil.php";
                      break;
                    default:
                    echo "<center><br><h3>Maaf. Halaman tidak di temukan !</h3></center>";
                    break;
                }
            }
            else {
                include "page/home.php";
            }
            ?>
  </div>
  <!-- Akhir Code Php -->

  <!-- Awal Footer -->
  <footer class="new_footer_area bg_color">
    <div class="new_footer_top">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="f_widget company_widget wow fadeInLeft" data-wow-delay="0.2s"
              style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInLeft">
              <h3 class="f-title f_600 t_color f_size_18">Get in Touch</h3>
              <p>Don’t miss any updates of our new templates and extensions.!</p>
              <form action="#" class="f_subscribe_two mailchimp" method="post" novalidate="true" _lpchecked="1">
                <input type="text" name="EMAIL" class="form-control memail" placeholder="Email" />
                <button class="btn btn_get btn_get_two" type="submit">Subscribe</button>
                <p class="mchimp-errmessage" style="display: none"></p>
                <p class="mchimp-sucmessage" style="display: none"></p>
              </form>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="f_widget about-widget pl_70 wow fadeInLeft" data-wow-delay="0.4s"
              style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft">
              <h3 class="f-title f_600 t_color f_size_18">Download</h3>
              <ul class="list-unstyled f_list">
                <li><a href="#">Company</a></li>
                <li><a href="#">Android App</a></li>
                <li><a href="#">ios App</a></li>
                <li><a href="#">Desktop</a></li>
                <li><a href="#">Projects</a></li>
                <li><a href="#">My tasks</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="f_widget about-widget pl_70 wow fadeInLeft" data-wow-delay="0.6s"
              style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInLeft">
              <h3 class="f-title f_600 t_color f_size_18">Help</h3>
              <ul class="list-unstyled f_list">
                <li><a href="#">FAQ</a></li>
                <li><a href="#">Term &amp; conditions</a></li>
                <li><a href="#">Reporting</a></li>
                <li><a href="#">Documentation</a></li>
                <li><a href="#">Support Policy</a></li>
                <li><a href="#">Privacy</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="f_widget social-widget pl_70 wow fadeInLeft" data-wow-delay="0.8s"
              style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInLeft">
              <h3 class="f-title f_600 t_color f_size_18">Team Solutions</h3>
              <div class="f_social_icon">
                <a href="#" class="fab fa-facebook"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-linkedin"></a>
                <a href="#" class="fab fa-pinterest"></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer_bg">
        <div class="footer_bg_one"></div>
        <div class="footer_bg_two"></div>
      </div>
    </div>
    <div class="footer_bottom">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 col-sm-7">
            <p class="mb-0 f_400">© cakecounter Inc.. 2019 All rights reserved.</p>
          </div>
          <div class="col-lg-6 col-sm-5 text-right">
            <p>Made with <i class="icon_heart"></i> in <a href="http://cakecounter.com" target="_blank">CakeCounter</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- Akhir Footer -->
</body>

</html>