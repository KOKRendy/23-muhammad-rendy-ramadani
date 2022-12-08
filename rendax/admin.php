<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css" />
    <title>Document</title>
  </head>
  <body id="body-pd">
    <header class="header" id="header">
      <div class="header_toggle"><i class="bx bx-menu" id="header-toggle"></i></div>
      <div class="header_img"><img src="https://i.imgur.com/hczKIze.jpg" alt="" /></div>
    </header>
    <div class="l-navbar" id="nav-bar">
      <nav class="nav">
        <div>
          <a href="#" class="nav_logo"> <i class="bx bx-layer nav_logo-icon"></i> <span class="nav_logo-name">Rendax-Shop</span> </a>
          <div class="nav_list">
            <a href="admin.php?page=dashboard" class="nav_link"> <i class="bx bx-user nav_icon"></i> <span class="nav_name">Dashboard</span> </a>
            <a href="admin.php?page=manage-account" class="nav_link"> <i class="bx bx-grid-alt nav_icon"></i> <span class="nav_name">Manage Users</span> </a>
            <a href="admin.php?page=manage-produk" class="nav_link"> <i class="bx bx-message-square-detail nav_icon"></i> <span class="nav_name">Manage Produk</span> </a>
            <a href="admin.php?page=manage-kategori" class="nav_link"> <i class="bx bx-folder nav_icon"></i> <span class="nav_name">Manage Kategori</span> </a>
            <a href="admin.php?page=manage-transaksi" class="nav_link"> <i class="bx bx-bookmark nav_icon"></i> <span class="nav_name">Manage Transaksi</span> </a>
          </div>
        </div>
        <a href="index.php?page=logout" class="nav_link"> <i class="bx bx-log-out nav_icon"></i> <span class="nav_name">LogOut</span> </a>
      </nav>
    </div>
    
    <!-- Awal Content -->
    <div class="badan">
      <?php
      if (isset($_GET['page'])){
        $page = $_GET ['page'];
        switch ($page){
          case 'dashboard':
            include "page-admin/dashboard.php";
            break;
          case 'manage-account':
            include "page-admin/manage-account.php";
            break;
          case 'manage-produk':
            include "page-admin/manage-produk.php";
            break;
          case 'manage-kategori':
            include "page-admin/manage-kategori.php";
            break;
          case 'manage-transaksi':
            include "page-admin/manage-transaksi.php";
            break;
          case 'edit-profil':
            include "page-admin/edit-profil.php";
            break;
          case 'login':
            include "page-admin/login.php";
            break;
          case 'register':
            include "page-admin/register.php";
            break;
          case 'delete':
            include "page-admin/delete.php";
            break;
        }
      } else {
        include "page-admin/dashboard.php";
      }
      ?>
    </div>
    <!-- Akhir Content -->

    <script>
      document.addEventListener('DOMContentLoaded', function (event) {
        const showNavbar = (toggleId, navId, bodyId, headerId) => {
          const toggle = document.getElementById(toggleId),
            nav = document.getElementById(navId),
            bodypd = document.getElementById(bodyId),
            headerpd = document.getElementById(headerId);

          // Validate that all variables exist
          if (toggle && nav && bodypd && headerpd) {
            toggle.addEventListener('click', () => {
              // show navbar
              nav.classList.toggle('show');
              // change icon
              toggle.classList.toggle('bx-x');
              // add padding to body
              bodypd.classList.toggle('body-pd');
              // add padding to header
              headerpd.classList.toggle('body-pd');
            });
          }
        };
        showNavbar('header-toggle', 'nav-bar', 'body-pd', 'header');
      });
    </script>
  </body>
</html>
