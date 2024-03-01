<?php include_once 'action.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serkom Maulana</title>


    <!-- favicon -->
    <link href="img/favicon/favicon.png" rel="icon">

    <!-- google font -->
    <link href="https://fonts.googleapis.com/css2?family=Source+Serif+4:ital,opsz,wght@0,8..60,200..900;1,8..60,200..900&display=swap" rel="stylesheet">

    <!-- fancy box -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"/>

    <!-- aos -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- animate -->
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!-- icon -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <!-- boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

     <!-- Main Stylesheet File -->
     <link href="css/style.css" rel="stylesheet">
</head>
<body>
<!-- Navbar Start-->
  <nav
      class="navbar navbar-expand-lg navbar-dark bg-dark shadow-lg fixed-top"
    >
    <div class="container">
      <a class="navbar-brand font-family-sans-serif" href="index.html">SERKOM HOTEL</a>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarText"
        aria-controls="navbarText"
        aria-expanded="false"
        aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-right" id="navbarText">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php">The Rooms &amp; Suites</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="reservation.php">Reservation</a>
              </li>
              <li class="nav-item">
              <a class="nav-link" href="table.php">Tabel Pemesan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="grafik.php">Grafik Pemesan</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
<!-- Navbar END -->

<!-- table section start -->
<div class="container-fluid  pt-5 pb-5">
  <div class="container text-center">
          <h2 class="display-3" id="room">Data Pemesan</h2>
          <div class ="container">
            <table class="table table-dark table-striped table-bordered table-hover" >
              <thead>
                  <tr>
                    <th>No.</th>
                    <th>Nama Pemesan</th>
                    <th>Nomer Identitas</th>
                    <th>Jenis Kelamin</th>
                    <th>Tanggal Ceck In</th>
                    <th>Durasi Menginap</th>
                    <th>Tipe Kamar</th>
                    <th>Include Breakfast</th>
                    <th>Total Bayar</th>
                  </tr>
              </thead>
              <?php for ($i = 0; $i < count(get_reservation()); $i++) { ?>
                <tr>
                <td>
                  <?= $i + 1 ?>
                </td>
                <td>
                  <?= get_reservation()[$i]['namaPemesan'] ?>
                </td>
                <td>
                  <?= get_reservation()[$i]['nomorIdentitas'] ?>
                </td>
          <td>
                  <?= get_reservation()[$i]['jenisKelamin'] ?>
                </td>
          <td>
                  <?= get_reservation()[$i]['tanggalCek'] ?>
                </td>
          <td>
                  <?= get_reservation()[$i]['durasiMenginap'] ?>
                </td>
          <td>
                  <?= get_reservation()[$i]['tipeKamar'] ?>
                </td>
          <td>
                  <?= get_reservation()[$i]['includeBreakfast'] ?>
                </td>
          <td>
                  <?= get_reservation()[$i]['totalBayar'] ?>
                </td>
              </tr>
          <?php } ?>
            <tbody>
          </div>
      </div>
  </div>
<!-- table section end -->
  
</body>
</html>