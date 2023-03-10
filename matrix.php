<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Matrix</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/destination.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <img src="assets/img/destination.png" alt="">
        <span class="d-none d-lg-block">Wisataku</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

  </header><!-- End Header -->

<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Tabel Data</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
          <li>
            <a href="kriteria.php" >
              <i class="bi bi-circle"></i><span>Kriteria</span>
            </a>
          </li>
          <li>
            <a href="alternatif.php" >
              <i class="bi bi-circle"></i><span>Alternatif</span>
            </a>
          </li>
          <li>
            <a href="bobot.php">
              <i class="bi bi-circle"></i><span>Bobot</span>
            </a>
          </li>
          <li>
            <a href="skala.php">
              <i class="bi bi-circle"></i><span>Skala</span>
            </a>
          </li>
          <li>
            <a href="matrix.php" class="active">
              <i class="bi bi-circle"></i><span>Matrix</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bar-chart"></i><span>View Data</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="result.php">
              <i class="bi bi-circle"></i><span>VMatrix Keputusan</span>
            </a>
          </li><!-- End Charts Nav -->
    </ul>
  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Matrix</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">Tabel Data</li>
          <li class="breadcrumb-item active">Matrix</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
      <div class="col-lg-12">

<div class="card">
  <div class="card-body">
    <h5 class="card-title">Tambah Matrix Baru</h5>

    <!-- General Form Elements -->
    <form action="act_matrix_create.php" method="POST">

      <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">ID Alternatif</label>
                  <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example" name="id_alternatif">
                      
                    <!-- koneksi antar tabel -->
                      <?php
                        include "koneksi.php";
                        $query = "select * from alternatif";
                        $output = $koneksi->query($query);

                        while ($data = $output->fetch_array()) {
                      ?>
                      <option value="<?php echo $data['id_alternatif']?>"><?php echo $data['nama_alternatif']?></option>
                      <?php }?>

                    </select>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">ID Bobot</label>
                  <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example" name="id_bobot">
                      
                    <!-- koneksi antar tabel -->
                      <?php
                        include "koneksi.php";
                        $query = "select * from bobot";
                        $output = $koneksi->query($query);

                        while ($data = $output->fetch_array()) {
                      ?>
                      <option value="<?php echo $data['id_bobot']?>"><?php echo $data['id_bobot']?></option>
                      <?php }?>

                    </select>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">ID Skala</label>
                  <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example" name="id_skala">
                      
                    <!-- koneksi antar tabel -->
                      <?php
                        include "koneksi.php";
                        $query = "select * from skala";
                        $output = $koneksi->query($query);

                        while ($data = $output->fetch_array()) {
                      ?>
                      <option value="<?php echo $data['id_skala']?>"><?php echo $data['id_skala']?></option>
                      <?php }?>

                    </select>
                  </div>
                </div>

      <div class="row mb-3">
        <!-- <label class="col-sm-2 col-form-label"></label> -->
        <div class="text-left">
          <button type="submit" class="btn btn-primary">Tambahkan Matrix Baru</button>
        </div>
      </div>

    </form><!-- End General Form Elements -->

  </div>
</div>

        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">

            <h5 class="card-title">Data Matrix Keputusan</h5>

              <!-- Table with stripped rows -->
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">ID Matrix</th>
                    <th scope="col">ID Alternatif</th>
                    <th scope="col">ID Bobot</th>
                    <th scope="col">ID Skala</th>

                  </tr>
                </thead>
                <tbody>

                <!-- panggil isi tabel -->
                <?php
                        include "koneksi.php";
                        $query = "SELECT * FROM matrixkeputusan
                        INNER JOIN alternatif ON matrixkeputusan.id_alternatif = alternatif.id_alternatif
                        INNER JOIN bobot ON matrixkeputusan.id_bobot = bobot.id_bobot
                        INNER JOIN skala ON matrixkeputusan.id_skala = skala.id_skala";


                        $output = $koneksi->query($query);
                        $number=1;

                        while ($data = $output->fetch_array()) {
                      ?>
                      <tr>
                      <td scope="row"><?php echo $number ++ ?></td>
                      <td scope="row"><?php echo $data['id_alternatif']?></td>
                      <td scope="row"><?php echo $data['id_bobot']?></td>
                      <td scope="row"><?php echo $data['id_skala']?></td>
                      </tr>
                      
                      <?php }?>
                  
                </tbody>
              </table>
              
              <!-- End Table with stripped rows -->
            </div>
          </div>

          </div>
      </div>
    </section>

  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>