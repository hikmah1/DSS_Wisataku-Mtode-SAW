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
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Tabel Data</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="kriteria.php">
              <i class="bi bi-circle"></i><span>Kriteria</span>
            </a>
          </li>
          <li>
            <a href="alternatif.php">
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
            <a href="matrix.php">
              <i class="bi bi-circle"></i><span>Matrix</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link " data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bar-chart"></i><span>View Data</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
          <li>
            <a href="result.php?metode=SAW" class="">
              <i class="bi bi-circle"></i><span>Result SAW</span>
            </a>
          </li>
          <li>
            <a href="result.php?metode=WP" class="">
              <i class="bi bi-circle"></i><span>Result WP</span>
            </a>
          </li>
          <li>
            <a href="result.php?metode=TOPSIS" class="">
              <i class="bi bi-circle"></i><span>Result Topsis</span>
            </a>
          </li>
          <li>
            <a href="result.php?metode=MULTI MOORA" class="">
              <i class="bi bi-circle"></i><span>Result Multi Moora</span>
            </a>
          </li>
         <!-- End Charts Nav -->
    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Result</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">View Data</li>
          <li class="breadcrumb-item active">Result</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
<?php
    $metode = $_GET['metode'];
    if ($metode == 'SAW') {
    ?>

    <section class="section">
      <div class="row">
      <div class="col-lg-12">

        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">

            <h5 class="card-title">Data VMatrix Keputusan</h5>

              <!-- Table with stripped rows -->
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">ID Matrix</th>
                    <th scope="col">ID Alternatif</th>
                    <th scope="col">Nama Alternatif</th>
                    <th scope="col">ID Kriteria</th>
                    <th scope="col">Nama Kriteria</th>
                    <th scope="col">Jenis</th>
                    <th scope="col">ID Bobot</th>
                    <th scope="col">Value</th>
                    <th scope="col">Nilai</th>
                    <th scope="col">keterangan</th>


                  </tr>
                </thead>
                <tbody>

                <!-- panggil isi tabel -->
                <?php
                        include "koneksi.php";
                        $query = "SELECT matrixkeputusan.id_matrix,alternatif.*,kriteria.*,bobot.id_bobot,bobot.value,
                        skala.value AS nilai,skala.keterangan FROM matrixkeputusan,skala,bobot,kriteria,
                        alternatif WHERE matrixkeputusan.id_alternatif=alternatif.id_alternatif AND
                        matrixkeputusan.id_bobot=bobot.id_bobot AND matrixkeputusan.id_skala=skala.id_skala
                        AND kriteria.id_kriteria=bobot.id_kriteria ";

                        $output = $koneksi->query($query);
                        $number=1;

                        while ($data = $output->fetch_array()) {
                      ?>
                      <tr>
                      <td scope="row"><?php echo $number ++ ?></td>
                      <td scope="row"><?php echo $data['id_alternatif']?></td>
                      <td scope="row"><?php echo $data['nama_alternatif']?></td>
                      <td scope="row"><?php echo $data['id_kriteria']?></td>
                      <td scope="row"><?php echo $data['nama_kriteria']?></td>
                      <td scope="row"><?php echo $data['jenis']?></td>
                      <td scope="row"><?php echo $data['id_bobot']?></td>
                      <td scope="row"><?php echo $data['value']?></td>
                      <td scope="row"><?php echo $data['nilai']?></td>
                      <td scope="row"><?php echo $data['keterangan']?></td>

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

    <section class="section">
      <div class="row">
      <div class="col-lg-12">

        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">

            <h5 class="card-title">Data VNormalisasi</h5>

              <!-- Table with stripped rows -->
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">ID Matrix</th>
                    <th scope="col">ID Alternatif</th>
                    <th scope="col">Nama Alternatif</th>
                    <th scope="col">ID Kriteria</th>
                    <th scope="col">Nama Kriteria</th>
                    <th scope="col">Jenis</th>
                    <th scope="col">ID Bobot</th>
                    <th scope="col">Value</th>
                    <th scope="col">Nilai</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Normalisasi</th>


                  </tr>
                </thead>
                <tbody>

                <!-- panggil isi tabel -->
                <?php
                        include "koneksi.php";
                        $query = "SELECT vmatrixkeputusan.*,
                        if(vmatrixkeputusan.jenis = 'Cost',(nilaimin.minimum/vmatrixkeputusan.nilai),(vmatrixkeputusan.nilai/nilaimax.maksimum)) 
                        AS normalisasi FROM vmatrixkeputusan,nilaimax, nilaimin WHERE 
                        nilaimax.id_kriteria=vmatrixkeputusan.id_kriteria AND nilaimin.id_kriteria=vmatrixkeputusan.id_kriteria
                        GROUP BY vmatrixkeputusan.id_matrix ";

                        $output = $koneksi->query($query);
                        $number=1;

                        while ($data = $output->fetch_array()) {
                      ?>
                      <tr>
                      <td scope="row"><?php echo $number ++ ?></td>
                      <td scope="row"><?php echo $data['id_alternatif']?></td>
                      <td scope="row"><?php echo $data['nama_alternatif']?></td>
                      <td scope="row"><?php echo $data['id_kriteria']?></td>
                      <td scope="row"><?php echo $data['nama_kriteria']?></td>
                      <td scope="row"><?php echo $data['jenis']?></td>
                      <td scope="row"><?php echo $data['id_bobot']?></td>
                      <td scope="row"><?php echo $data['value']?></td>
                      <td scope="row"><?php echo $data['nilai']?></td>
                      <td scope="row"><?php echo $data['keterangan']?></td>
                        <td scope="row"><?php echo $data['normalisasi']?></td>

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

    <section class="section">
      <div class="row">
      <div class="col-lg-12">

        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">

            <h5 class="card-title">Data VRanking</h5>

              <!-- Table with stripped rows -->
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">ID Alternatif</th>
                    <th scope="col">Nama Alternatif</th>
                    <th scope="col">Ranking</th>
                  </tr>
                </thead>
                <tbody>

                <!-- panggil isi tabel -->
                <?php
                        include "koneksi.php";
                        $query = "SELECT id_alternatif,nama_alternatif,SUM(praranking) AS ranking FROM vpraranking
                        GROUP BY id_alternatif  ";

                        $output = $koneksi->query($query);
                      

                        while ($data = $output->fetch_array()) {
                      ?>
                      <tr>

                      <td scope="row"><?php echo $data['id_alternatif']?></td>
                      <td scope="row"><?php echo $data['nama_alternatif']?></td>
                      <td scope="row"><?php echo $data['ranking']?></td>

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
<?php
  } else if ($metode == 'WP') {
    ?>

     <section class="section">
      <div class="row">
      <div class="col-lg-12">

        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">

            <h5 class="card-title">Data VMatrix Keputusan</h5>

              <!-- Table with stripped rows -->
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">ID Matrix</th>
                    <th scope="col">ID Alternatif</th>
                    <th scope="col">Nama Alternatif</th>
                    <th scope="col">ID Kriteria</th>
                    <th scope="col">Nama Kriteria</th>
                    <th scope="col">Jenis</th>
                    <th scope="col">ID Bobot</th>
                    <th scope="col">Value</th>
                    <th scope="col">Nilai</th>
                    <th scope="col">keterangan</th>


                  </tr>
                </thead>
                <tbody>

                <!-- panggil isi tabel -->
                <?php
                        include "koneksi.php";
                        $query = "SELECT matrixkeputusan.id_matrix,alternatif.*,kriteria.*,bobot.id_bobot,bobot.value,
                        skala.value AS nilai,skala.keterangan FROM matrixkeputusan,skala,bobot,kriteria,
                        alternatif WHERE matrixkeputusan.id_alternatif=alternatif.id_alternatif AND
                        matrixkeputusan.id_bobot=bobot.id_bobot AND matrixkeputusan.id_skala=skala.id_skala
                        AND kriteria.id_kriteria=bobot.id_kriteria ";

                        $output = $koneksi->query($query);
                        $number=1;

                        while ($data = $output->fetch_array()) {
                      ?>
                      <tr>
                      <td scope="row"><?php echo $number ++ ?></td>
                      <td scope="row"><?php echo $data['id_alternatif']?></td>
                      <td scope="row"><?php echo $data['nama_alternatif']?></td>
                      <td scope="row"><?php echo $data['id_kriteria']?></td>
                      <td scope="row"><?php echo $data['nama_kriteria']?></td>
                      <td scope="row"><?php echo $data['jenis']?></td>
                      <td scope="row"><?php echo $data['id_bobot']?></td>
                      <td scope="row"><?php echo $data['value']?></td>
                      <td scope="row"><?php echo $data['nilai']?></td>
                      <td scope="row"><?php echo $data['keterangan']?></td>

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

    <section class="section">
      <div class="row">
      <div class="col-lg-12">

        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">

            <h5 class="card-title">Data WP Jumlah Bobot</h5>

              <!-- Table with stripped rows -->
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">Jumlah Bobot</th>
                    
                  </tr>
                </thead>
                <tbody>

                <!-- panggil isi tabel -->
                <?php
                        include "koneksi.php";
                        $query = "SELECT SUM(value)AS jumlah FROM bobot ";

                        $output = $koneksi->query($query);
                      

                        while ($data = $output->fetch_array()) {
                      ?>
                      <tr>

                      <td scope="row"><?php echo $data['jumlah']?></td>
                     

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

    <section class="section">
      <div class="row">
      <div class="col-lg-12">

        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">

            <h5 class="card-title">Data WP Normalisasi Bobot</h5>

              <!-- Table with stripped rows -->
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">ID Bobot</th>
                    <th scope="col">ID Kriteria</th>
                    <th scope="col">Value</th>
                    <th scope="col">Jumlah Bobot</th>
                    <th scope="col">Normalisasi Bobot</th>
                  </tr>
                </thead>
                <tbody>

                <!-- panggil isi tabel -->
                <?php
                        include "koneksi.php";
                        $query = "SELECT bobot.*, wp_jumbobot.jumlah,if(kriteria.jenis = 'cost', 
                        (bobot.value/wp_jumbobot.jumlah*-1),
                        (bobot.value/wp_jumbobot.jumlah))  
                        AS normalisasi_w FROM bobot, wp_jumbobot, kriteria  ";

                        $output = $koneksi->query($query);
                      

                        while ($data = $output->fetch_array()) {
                      ?>
                      <tr>

                      <td scope="row"><?php echo $data['id_bobot']?></td>
                      <td scope="row"><?php echo $data['id_kriteria']?></td>
                      <td scope="row"><?php echo $data['value']?></td>
                      <td scope="row"><?php echo $data['jumlah']?></td>
                      <td scope="row"><?php echo $data['normalisasi_w']?></td>

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

    <section class="section">

          <div class="card">
            <div class="card-body">

            <h5 class="card-title">Data WP Pangkat</h5>

              <!-- Table with stripped rows -->
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">ID Matrix</th>
                    <th scope="col">ID Alternatif</th>
                    <th scope="col">Nama Alternatif</th>
                    <th scope="col">ID Kriteria</th>
                    <th scope="col">Nama Kriteria</th>
                    <th scope="col">Jenis</th>
                    <th scope="col">ID Bobot</th>
                    <th scope="col">Value</th>
                    <th scope="col">Nilai</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Normalisasi Bobot</th>
                    <th scope="col">Pangkat</th>

                  </tr>
                </thead>
                <tbody>

                <!-- panggil isi tabel -->
                <?php
                        include "koneksi.php";
                        $query = "SELECT vmatrixkeputusan.*, wp_normalisasiterbobot.normalisasi_w,
                        POW(vmatrixkeputusan.nilai,
                        wp_normalisasiterbobot.normalisasi_w)AS pangkat 
                        FROM vmatrixkeputusan,wp_normalisasiterbobot 
                        WHERE wp_normalisasiterbobot.id_kriteria=vmatrixkeputusan.id_kriteria ";

                        $output = $koneksi->query($query);
                      

                        while ($data = $output->fetch_array()) {
                      ?>
                      <tr>

                      <td scope="row"><?php echo $data['id_matrix']?></td>
                      <td scope="row"><?php echo $data['id_alternatif']?></td>
                      <td scope="row"><?php echo $data['nama_alternatif']?></td>
                      <td scope="row"><?php echo $data['id_kriteria']?></td>
                      <td scope="row"><?php echo $data['nama_kriteria']?></td>
                      <td scope="row"><?php echo $data['jenis']?></td>
                      <td scope="row"><?php echo $data['id_bobot']?></td>
                      <td scope="row"><?php echo $data['value']?></td>
                      <td scope="row"><?php echo $data['nilai']?></td>
                      <td scope="row"><?php echo $data['keterangan']?></td>
                      <td scope="row"><?php echo $data['normalisasi_w']?></td>
                      <td scope="row"><?php echo $data['pangkat']?></td>

                      </tr>
                      
                      <?php }?>
                  
                </tbody>
              </table>
              
              <!-- End Table with stripped rows -->
            </div>
          </div>

    </section>

    <section class="section">

<div class="card">
  <div class="card-body">

  <h5 class="card-title">Data WP Nilai S</h5>

    <!-- Table with stripped rows -->
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">ID Alternatif</th>
          <th scope="col">Nama Alternatif</th>
          <th scope="col">Nilai S</th>

        </tr>
      </thead>
      <tbody>

      <!-- panggil isi tabel -->
      <?php
              include "koneksi.php";
              $query = "SELECT id_alternatif,nama_alternatif,EXP(SUM(LOG(wp_pangkat.pangkat)))
              AS nilais FROM wp_pangkat 
              GROUP by id_alternatif  ";

              $output = $koneksi->query($query);
            

              while ($data = $output->fetch_array()) {
            ?>
            <tr>

            <td scope="row"><?php echo $data['id_alternatif']?></td>
            <td scope="row"><?php echo $data['nama_alternatif']?></td>
            <td scope="row"><?php echo $data['nilais']?></td>

            </tr>
            
            <?php }?>
        
      </tbody>
    </table>
    
    <!-- End Table with stripped rows -->
  </div>
</div>

</section>

<section class="section">

<div class="card">
  <div class="card-body">

  <h5 class="card-title">Data WP Sum Nilai S</h5>

    <!-- Table with stripped rows -->
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">Sum Nilai S</th>

        </tr>
      </thead>
      <tbody>

      <!-- panggil isi tabel -->
      <?php
              include "koneksi.php";
              $query = "SELECT SUM(wp_nilais.nilais)AS jum FROM wp_nilais  ";

              $output = $koneksi->query($query);
            

              while ($data = $output->fetch_array()) {
            ?>
            <tr>

            <td scope="row"><?php echo $data['jum']?></td>
        

            </tr>
            
            <?php }?>
        
      </tbody>
    </table>
    
    <!-- End Table with stripped rows -->
  </div>
</div>

</section>

<section class="section">

<div class="card">
  <div class="card-body">

  <h5 class="card-title">Data WP Nilai V</h5>

    <!-- Table with stripped rows -->
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">ID Alternatif</th>
          <th scope="col">Nama Alternatif</th>
          <th scope="col">Nilai V</th>
        </tr>
      </thead>
      <tbody>

      <!-- panggil isi tabel -->
      <?php
              include "koneksi.php";
              $query = "SELECT wp_nilais.id_alternatif,wp_nilais.nama_alternatif,(nilaiS/jum) 
              AS nilaiV FROM wp_nilais,wp_sums";

              $output = $koneksi->query($query);
            

              while ($data = $output->fetch_array()) {
            ?>
            <tr>

            <td scope="row"><?php echo $data['id_alternatif']?></td>
            <td scope="row"><?php echo $data['nama_alternatif']?></td>
            <td scope="row"><?php echo $data['nilaiV']?></td>
            </tr>
            
            <?php }?>
        
      </tbody>
    </table>
    
    <!-- End Table with stripped rows -->
  </div>
</div>

</section>

<?php
  } else if ($metode == 'TOPSIS') {
    ?>
  <!-- Metode TOPSIS -->

  <section class="section">

<div class="card">
  <div class="card-body">

  <h5 class="card-title">Data TOPSIS Pembagi</h5>

    <!-- Table with stripped rows -->
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">ID Kriteria</th>
          <th scope="col">Nama Kriteria</th>
          <th scope="col">Nilai Pembagi</th>
        </tr>
      </thead>
      <tbody>

      <!-- panggil isi tabel -->
      <?php
              include "koneksi.php";
              $query = "SELECT vmatrixkeputusan.id_kriteria,vmatrixkeputusan.nama_kriteria, 
              SQRT(SUM(POW(vmatrixkeputusan.nilai,2))) AS bagi FROM vmatrixkeputusan 
              GROUP BY vmatrixkeputusan.id_kriteria ";

              $output = $koneksi->query($query);
            

              while ($data = $output->fetch_array()) {
            ?>
            <tr>

            <td scope="row"><?php echo $data['id_kriteria']?></td>
            <td scope="row"><?php echo $data['nama_kriteria']?></td>
            <td scope="row"><?php echo $data['bagi']?></td>
            </tr>
            
            <?php }?>
        
      </tbody>
    </table>
    
    <!-- End Table with stripped rows -->
  </div>
</div>

</section>

<section class="section">

<div class="card">
  <div class="card-body">

  <h5 class="card-title">Data TOPSIS Normalisasi</h5>

    <!-- Table with stripped rows -->
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">ID Matrix</th>
          <th scope="col">ID Alternatif</th>
          <th scope="col">Nama Alternatif</th>
          <th scope="col">ID Kriteria</th>
          <th scope="col">Nama Kriteria</th>
          <th scope="col">Jenis</th>
          <th scope="col">ID Bobot</th>
          <th scope="col">Value</th>
          <th scope="col">Nilai</th>
          <th scope="col">Keterangan</th>
          <th scope="col">Normalisasi</th>
          
        </tr>
      </thead>
      <tbody>

      <!-- panggil isi tabel -->
      <?php
              include "koneksi.php";
              $query = "SELECT vmatrixkeputusan.*,(vmatrixkeputusan.nilai/topsis_pembagi.bagi) 
              AS normalisasi FROM vmatrixkeputusan,topsis_pembagi 
              WHERE topsis_pembagi.id_kriteria=vmatrixkeputusan.id_kriteria
              GROUP BY vmatrixkeputusan.id_matrix";

              $output = $koneksi->query($query);
            

              while ($data = $output->fetch_array()) {
            ?>
            <tr>

            <td scope="row"><?php echo $data['id_matrix']?></td>
            <td scope="row"><?php echo $data['id_alternatif']?></td>
            <td scope="row"><?php echo $data['nama_alternatif']?></td>
            <td scope="row"><?php echo $data['id_kriteria']?></td>
            <td scope="row"><?php echo $data['nama_kriteria']?></td>
            <td scope="row"><?php echo $data['jenis']?></td>
            <td scope="row"><?php echo $data['id_bobot']?></td>
            <td scope="row"><?php echo $data['value']?></td>
            <td scope="row"><?php echo $data['nilai']?></td>
            <td scope="row"><?php echo $data['keterangan']?></td>
            <td scope="row"><?php echo $data['normalisasi']?></td>
            
            </tr>
            
            <?php }?>
        
      </tbody>
    </table>
    
    <!-- End Table with stripped rows -->
  </div>
</div>

</section>

<section class="section">

<div class="card">
  <div class="card-body">

  <h5 class="card-title">Data TOPSIS Terbobot</h5>

    <!-- Table with stripped rows -->
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">ID Matrix</th>
          <th scope="col">ID Alternatif</th>
          <th scope="col">Nama Alternatif</th>
          <th scope="col">ID Kriteria</th>
          <th scope="col">Nama Kriteria</th>
          <th scope="col">Jenis</th>
          <th scope="col">ID Bobot</th>
          <th scope="col">Value</th>
          <th scope="col">Nilai</th>
          <th scope="col">Keterangan</th>
          <th scope="col">Normalisasi</th>
          <th scope="col">Terbobot</th>
          
        </tr>
      </thead>
      <tbody>

      <!-- panggil isi tabel -->
      <?php
              include "koneksi.php";
              $query = "SELECT topsis_normalisasi.*,(bobot.value*topsis_normalisasi.normalisasi) AS terbobot 
              FROM topsis_normalisasi,bobot WHERE bobot.id_kriteria=topsis_normalisasi.id_kriteria
              GROUP BY topsis_normalisasi.id_matrix ";

              $output = $koneksi->query($query);
            

              while ($data = $output->fetch_array()) {
            ?>
            <tr>

            <td scope="row"><?php echo $data['id_matrix']?></td>
            <td scope="row"><?php echo $data['id_alternatif']?></td>
            <td scope="row"><?php echo $data['nama_alternatif']?></td>
            <td scope="row"><?php echo $data['id_kriteria']?></td>
            <td scope="row"><?php echo $data['nama_kriteria']?></td>
            <td scope="row"><?php echo $data['jenis']?></td>
            <td scope="row"><?php echo $data['id_bobot']?></td>
            <td scope="row"><?php echo $data['value']?></td>
            <td scope="row"><?php echo $data['nilai']?></td>
            <td scope="row"><?php echo $data['keterangan']?></td>
            <td scope="row"><?php echo $data['normalisasi']?></td>
            <td scope="row"><?php echo $data['terbobot']?></td>
            
            </tr>
            
            <?php }?>
        
      </tbody>
    </table>
    
    <!-- End Table with stripped rows -->
  </div>
</div>

</section>

<section class="section">

<div class="card">
  <div class="card-body">

  <h5 class="card-title">Data TOPSIS MaxMin</h5>

    <!-- Table with stripped rows -->
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">ID Matrix</th>
          <th scope="col">ID Kriteria</th>
          <th scope="col">Nama Kriteria</th>
          <th scope="col">Maximum</th>
          
        </tr>
      </thead>
      <tbody>

      <!-- panggil isi tabel -->
      <?php
              include "koneksi.php";
              $query = "SELECT topsis_terbobot.id_matrix,topsis_terbobot.id_kriteria,topsis_terbobot.nama_kriteria,
              MAX(topsis_terbobot.terbobot) AS maximum,MIN(topsis_terbobot.terbobot) 
              AS minimum FROM topsis_terbobot GROUP BY topsis_terbobot.id_kriteria ";

              $output = $koneksi->query($query);
            

              while ($data = $output->fetch_array()) {
            ?>
            <tr>

            <td scope="row"><?php echo $data['id_matrix']?></td>
            <td scope="row"><?php echo $data['id_kriteria']?></td>
            <td scope="row"><?php echo $data['nama_kriteria']?></td>
            <td scope="row"><?php echo $data['maximum']?></td>
            
            </tr>
            
            <?php }?>
        
      </tbody>
    </table>
    
    <!-- End Table with stripped rows -->
  </div>
</div>

</section>

<section class="section">

<div class="card">
  <div class="card-body">

  <h5 class="card-title">Data TOPSIS SipSin</h5>

    <!-- Table with stripped rows -->
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">ID Alternatif</th>
          <th scope="col">DPlus</th>
          <th scope="col">DMin</th>
          
          
        </tr>
      </thead>
      <tbody>

      <!-- panggil isi tabel -->
      <?php
              include "koneksi.php";
              $query = "SELECT topsis_terbobot.id_alternatif, SQRT(SUM(POW((topsis_maxmin.maximum-topsis_terbobot.terbobot),2))) 
              AS dplus,SQRT(SUM(POW((topsis_maxmin.minimum-topsis_terbobot.terbobot),2))) AS dmin FROM topsis_terbobot,
              topsis_maxmin WHERE topsis_terbobot.id_kriteria*topsis_maxmin.id_kriteria 
              GROUP BY topsis_terbobot.id_alternatif ";

              $output = $koneksi->query($query);
            

              while ($data = $output->fetch_array()) {
            ?>
            <tr>

            <td scope="row"><?php echo $data['id_alternatif']?></td>
            <td scope="row"><?php echo $data['dplus']?></td>
            <td scope="row"><?php echo $data['dmin']?></td>
            
            </tr>
            
            <?php }?>
        
      </tbody>
    </table>
    
    <!-- End Table with stripped rows -->
  </div>
</div>

</section>

<section class="section">

<div class="card">
  <div class="card-body">

  <h5 class="card-title">Data TOPSIS NilaiV</h5>

    <!-- Table with stripped rows -->
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">ID Alternatif</th>
          <th scope="col">DPlus</th>
          <th scope="col">DMin</th>
          <th scope="col">Nilai V</th>
          
        </tr>
      </thead>
      <tbody>

      <!-- panggil isi tabel -->
      <?php
              include "koneksi.php";
              $query = "SELECT topsis_sipsin.*,(topsis_sipsin.dmin/(topsis_sipsin.dplus*topsis_sipsin.dmin)) 
              AS nilaiv FROM topsis_sipsin GROUP BY topsis_sipsin.id_alternatif ";

              $output = $koneksi->query($query);
            

              while ($data = $output->fetch_array()) {
            ?>
            <tr>

            <td scope="row"><?php echo $data['id_alternatif']?></td>
            <td scope="row"><?php echo $data['dplus']?></td>
            <td scope="row"><?php echo $data['dmin']?></td>
            <td scope="row"><?php echo $data['nilaiv']?></td>
            </tr>
            
            <?php }?>
        
      </tbody>
    </table>
    
    <!-- End Table with stripped rows -->
  </div>
</div>

</section>

<?php 
  } else if ($metode='MULTI MOORA'){

  ?>
  <!-- METODE MULTI MOORA -->

  <section class="section">

<div class="card">
  <div class="card-body">

  <h5 class="card-title">Data Multi Moora Normalisasi</h5>

    <!-- Table with stripped rows -->
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">ID Matrix</th>
          <th scope="col">ID Alternatif</th>
          <th scope="col">Nama Alternatif</th>
          <th scope="col">ID Kriteria</th>
          <th scope="col">Nama Kriteria</th>
          <th scope="col">Jenis</th>
          <th scope="col">ID Bobot</th>
          <th scope="col">Value</th>
          <th scope="col">Nilai</th>
          <th scope="col">Keterangan</th>
          <th scope="col">Pra</th>
          
        </tr>
      </thead>
      <tbody>

      <!-- panggil isi tabel -->
      <?php
              include "koneksi.php";
              $query = "SELECT vmatrixkeputusan.*,SQRT(SUM(POW(vmatrixkeputusan.nilai,2)))
              AS pra FROM vmatrixkeputusan GROUP BY vmatrixkeputusan.id_kriteria";

              $output = $koneksi->query($query);
            

              while ($data = $output->fetch_array()) {
            ?>
            <tr>

            <td scope="row"><?php echo $data['id_matrix']?></td>
            <td scope="row"><?php echo $data['id_alternatif']?></td>
            <td scope="row"><?php echo $data['nama_alternatif']?></td>
            <td scope="row"><?php echo $data['id_kriteria']?></td>
            <td scope="row"><?php echo $data['nama_kriteria']?></td>
            <td scope="row"><?php echo $data['jenis']?></td>
            <td scope="row"><?php echo $data['id_bobot']?></td>
            <td scope="row"><?php echo $data['value']?></td>
            <td scope="row"><?php echo $data['nilai']?></td>
            <td scope="row"><?php echo $data['keterangan']?></td>
            <td scope="row"><?php echo $data['pra']?></td>

            </tr>
            
            <?php }?>
        
      </tbody>
    </table>

    <!-- Table with stripped rows -->
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">ID Matrix</th>
          <th scope="col">ID Alternatif</th>
          <th scope="col">Nama Alternatif</th>
          <th scope="col">ID Kriteria</th>
          <th scope="col">Nama Kriteria</th>
          <th scope="col">Jenis</th>
          <th scope="col">ID Bobot</th>
          <th scope="col">Value</th>
          <th scope="col">Nilai</th>
          <th scope="col">Keterangan</th>
          <th scope="col">Pra</th>
          <th scope="col">Normalisasi</th>
        </tr>
      </thead>
      <tbody>

      <!-- panggil isi tabel -->
      <?php
              include "koneksi.php";
              $query = "SELECT vmatrixkeputusan.*,multimoora_1.pra, 
              (vmatrixkeputusan.nilai/multimoora_1.pra)
              AS normalisasi FROM vmatrixkeputusan,multimoora_1 WHERE
              multimoora_1.id_kriteria=vmatrixkeputusan.id_kriteria
              GROUP BY vmatrixkeputusan.id_matrix";

              $output = $koneksi->query($query);
            

              while ($data = $output->fetch_array()) {
            ?>
            <tr>

            <td scope="row"><?php echo $data['id_matrix']?></td>
            <td scope="row"><?php echo $data['id_alternatif']?></td>
            <td scope="row"><?php echo $data['nama_alternatif']?></td>
            <td scope="row"><?php echo $data['id_kriteria']?></td>
            <td scope="row"><?php echo $data['nama_kriteria']?></td>
            <td scope="row"><?php echo $data['jenis']?></td>
            <td scope="row"><?php echo $data['id_bobot']?></td>
            <td scope="row"><?php echo $data['value']?></td>
            <td scope="row"><?php echo $data['nilai']?></td>
            <td scope="row"><?php echo $data['keterangan']?></td>
            <td scope="row"><?php echo $data['pra']?></td>
            <td scope="row"><?php echo $data['normalisasi']?></td>
            </tr>
            
            <?php }?>
        
      </tbody>
    </table>
    
    <!-- End Table with stripped rows -->
  </div>
</div>

</section>

<section class="section">

<div class="card">
  <div class="card-body">

  <h5 class="card-title">Data Multi Moora Ratio System</h5>

    <!-- Table with stripped rows -->
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">ID Matrix</th>
          <th scope="col">ID Alternatif</th>
          <th scope="col">Nama Alternatif</th>
          <th scope="col">ID Kriteria</th>
          <th scope="col">Nama Kriteria</th>
          <th scope="col">Jenis</th>
          <th scope="col">ID Bobot</th>
          <th scope="col">Value</th>
          <th scope="col">Nilai</th>
          <th scope="col">Keterangan</th>
          <th scope="col">Pra</th>
          <th scope="col">Normalisasi</th>
          <th scope="col">Normalisasi Bobot</th>
        </tr>
      </thead>
      <tbody>

      <!-- panggil isi tabel -->
      <?php
              include "koneksi.php";
              $query = "SELECT multimoora_2.*,(multimoora_2.normalisasi*multimoora_2.value)
              AS normalisasibobot FROM multimoora_2 GROUP BY multimoora_2.id_matrix ";

              $output = $koneksi->query($query);
            

              while ($data = $output->fetch_array()) {
            ?>
            <tr>

            <td scope="row"><?php echo $data['id_matrix']?></td>
            <td scope="row"><?php echo $data['id_alternatif']?></td>
            <td scope="row"><?php echo $data['nama_alternatif']?></td>
            <td scope="row"><?php echo $data['id_kriteria']?></td>
            <td scope="row"><?php echo $data['nama_kriteria']?></td>
            <td scope="row"><?php echo $data['jenis']?></td>
            <td scope="row"><?php echo $data['id_bobot']?></td>
            <td scope="row"><?php echo $data['value']?></td>
            <td scope="row"><?php echo $data['nilai']?></td>
            <td scope="row"><?php echo $data['keterangan']?></td>
            <td scope="row"><?php echo $data['pra']?></td>
            <td scope="row"><?php echo $data['normalisasi']?></td>
            <td scope="row"><?php echo $data['normalisasibobot']?></td>
            </tr>
            
            <?php }?>
        
      </tbody>
    </table>
    
    <!-- End Table with stripped rows -->
  </div>
</div>

</section>

<section class="section">

<div class="card">
  <div class="card-body">

  <h5 class="card-title">Data Multi Moora Ratio System</h5>

    <!-- Table with stripped rows -->
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">ID Matrix</th>
          <th scope="col">ID Alternatif</th>
          <th scope="col">Nama Alternatif</th>
          <th scope="col">ID Kriteria</th>
          <th scope="col">Nama Kriteria</th>
          <th scope="col">Jenis</th>
          <th scope="col">ID Bobot</th>
          <th scope="col">Value</th>
          <th scope="col">Nilai</th>
          <th scope="col">Keterangan</th>
          <th scope="col">Pra</th>
          <th scope="col">Normalisasi</th>
          <th scope="col">Normalisasi Bobot</th>
        </tr>
      </thead>
      <tbody>

      <!-- panggil isi tabel -->
      <?php
              include "koneksi.php";
              $query = "SELECT multimoora_2.*,(multimoora_2.normalisasi*multimoora_2.value)
              AS normalisasibobot FROM multimoora_2 GROUP BY multimoora_2.id_matrix ";

              $output = $koneksi->query($query);
            

              while ($data = $output->fetch_array()) {
            ?>
            <tr>

            <td scope="row"><?php echo $data['id_matrix']?></td>
            <td scope="row"><?php echo $data['id_alternatif']?></td>
            <td scope="row"><?php echo $data['nama_alternatif']?></td>
            <td scope="row"><?php echo $data['id_kriteria']?></td>
            <td scope="row"><?php echo $data['nama_kriteria']?></td>
            <td scope="row"><?php echo $data['jenis']?></td>
            <td scope="row"><?php echo $data['id_bobot']?></td>
            <td scope="row"><?php echo $data['value']?></td>
            <td scope="row"><?php echo $data['nilai']?></td>
            <td scope="row"><?php echo $data['keterangan']?></td>
            <td scope="row"><?php echo $data['pra']?></td>
            <td scope="row"><?php echo $data['normalisasi']?></td>
            <td scope="row"><?php echo $data['normalisasibobot']?></td>
            </tr>
            
            <?php }?>
        
      </tbody>
    </table>
    
    <!-- End Table with stripped rows -->
  </div>
</div>

</section>

<section class="section">

<div class="card">
  <div class="card-body">

  <h5 class="card-title">Data Full Multiplicative Form</h5>

    <!-- Table with stripped rows -->
    <table class="table table-hover">
      <thead>
        <tr>
         
          <th scope="col">ID Alternatif</th>
          <th scope="col">Hasil</th>
          
        </tr>
      </thead>
      <tbody>

      <!-- panggil isi tabel -->
      <?php
              include "koneksi.php";
              $query = "SELECT multimoora_3.id_alternatif,SUM(multimoora_3.normalisasibobot)
              AS hasil FROM multimoora_3 GROUP BY multimoora_3.id_alternatif ";

              $output = $koneksi->query($query);
            

              while ($data = $output->fetch_array()) {
            ?>
            <tr>


            <td scope="row"><?php echo $data['id_alternatif']?></td>
            <td scope="row"><?php echo $data['hasil']?></td>
            
            </tr>
            
            <?php }?>
        
      </tbody>
    </table>
    
    <!-- End Table with stripped rows -->
  </div>
</div>

</section>

<?php
  }
  ?>

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