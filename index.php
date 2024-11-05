<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Web Denta</title>
  <!-- Bootstrap CSS -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <!-- DataTables CSS -->
  <link href="assets/datatables/dataTables.dataTables.css" rel="stylesheet">
  <!-- Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body style="background-color: #f0f8ff;"> <!-- Light blue background for a calming effect -->

  <!-- Header with Navbar -->
  <header class="bg-primary text-white">
    <div class="container p-3">
    <div class="text-center">
        <h1>My Website</h1>
      </div>
      <?php include "includes/navbar.php"; ?>
    </div>
  </header>

  <!-- Main Container with Cards for Sections -->
  <div class="container my-4" id="pageContent">
    <div class="row g-4">
      <!-- Example cards with icons -->
      <div class="col-md-4">
        <div class="card border-primary h-100">
          <div class="card-body text-center">
            <i class="bi bi-info-circle display-4 text-primary"></i>
            <h5 class="card-title mt-2">Tentang Kami</h5>
            <p class="card-text">Informasi lengkap tentang tujuan dan layanan kami.</p>
            <a href="?page=about" class="btn btn-primary">Pelajari Lebih Lanjut</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card border-success h-100">
          <div class="card-body text-center">
            <i class="bi bi-envelope display-4 text-success"></i>
            <h5 class="card-title mt-2">Hubungi Kami</h5>
            <p class="card-text">Kami siap membantu Anda. Silahkan hubungi kami kapan saja.</p>
            <a href="?page=contact" class="btn btn-success">Hubungi Sekarang</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card border-warning h-100">
          <div class="card-body text-center">
            <i class="bi bi-pencil-square display-4 text-warning"></i>
            <h5 class="card-title mt-2">Formulir</h5>
            <p class="card-text">Isi formulir untuk mendaftar atau memberikan feedback.</p>
            <a href="?page=form" class="btn btn-warning">Isi Formulir</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Content Switching Section -->
    <div class="mt-5">
      <?php
        if (isset($_GET['page'])) {
          $page = $_GET['page'];
          switch ($page) {
            case 'home': include "home.php"; break;
            case 'about': include "about.php"; break;
            case 'contact': include "contact.php"; break;
            case 'form': include "form.php"; break;
            case 'datatables': include "datatables.php"; break;
            case '404': include "404.php"; break;
            default: include "home.php";
          }
        } else {
          include "home.php";
        }
      ?>
    </div>
  </div>

  <!-- Footer with Social Media Links -->
  <footer class="bg-dark text-white text-center py-4 mt-5">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h5>Kontak Kami</h5>
          <p><i class="bi bi-envelope"></i> info@example.com</p>
          <p><i class="bi bi-telephone"></i> (123) 456-7890</p>
        </div>
        <div class="col-md-4">
          <h5>Ikuti Kami</h5>
          <a href="#" class="text-white me-2"><i class="bi bi-facebook"></i></a>
          <a href="#" class="text-white me-2"><i class="bi bi-twitter"></i></a>
          <a href="#" class="text-white"><i class="bi bi-instagram"></i></a>
        </div>
        <div class="col-md-4">
          <h5>Lokasi</h5>
          <p><i class="bi bi-geo-alt"></i> Jl. Contoh No.123, Kota Contoh</p>
          <p>Indonesia</p>
        </div>
      </div>
      <div class="text-center mt-3">
        <small>&copy; 2024 Pemrograman Web 1. All rights reserved.</small>
      </div>
    </div>
  </footer>

  <!-- JavaScript -->
  <script src="assets/jquery-3.7.1.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/datatables/dataTables.js"></script>
  <!-- Initialize DataTable -->
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      if (document.querySelector("#example")) {
        new DataTable("#example"); // Default zero configuration
      }
    });
  </script>
</body>
</html>
