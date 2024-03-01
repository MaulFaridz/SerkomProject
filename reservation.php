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
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />

    <!-- icon -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <!-- boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

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
          </ul>
        </div>
      </div>
    </nav>
<!-- Navbar END -->
    
<!-- Courosel Start -->
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/slider/roomSlider1.jpg" class="d-block w-100" alt="#">  
          </div>
          <div class="carousel-item">
            <img src="img/slider/roomSlider2.jpg" class="d-block w-100" alt="#">
          </div>
          <div class="carousel-item">
            <img src="img/slider/roomSlider3.jpg" class="d-block w-100" alt="#">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
<!-- Courosel END -->
    
<!-- Room Section Start -->

    <div class="container-fluid layanan pt-5 pb-5">
        <div class="container text-center">
          <h2 class="display-3" id="room">Room And Suites</h2>
          <hr class="horizontal">
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate,
            doloribus.
          </p>

              <div class="row">
                <div class="col-md-6 col-lg-4" data-aos="fade-up">
                  <a href="#" class="room">
                    <figure class="img-wrap">
                      <img src="img/room1.jpg" alt="img" class="img-fluid mb-3">
                    </figure>
                    <div class="p-3 text-center room-info">
                      <h2>Standar Room</h2>
                      <span class="text-uppercase letter-spacing-1">Rp.1.000.000 / per malam</span>
                    </div>
                  </a>
                </div>
      
                <div class="col-md-6 col-lg-4" data-aos="fade-up">
                  <a href="#" class="room">
                    <figure class="img-wrap">
                      <img src="img/room2.jpg" alt="img" class="img-fluid mb-3">
                    </figure>
                    <div class="p-3 text-center room-info">
                      <h2>Deluxe Room</h2>
                      <span class="text-uppercase letter-spacing-1">Rp.2.000.000 / per malam</span>
                    </div>
                  </a>
                </div>
      
                <div class="col-md-6 col-lg-4" data-aos="fade-up">
                  <a href="#" class="room">
                    <figure class="img-wrap">
                      <img src="img/room3.jpg" alt="img" class="img-fluid mb-3">
                    </figure>
                    <div class="p-3 text-center room-info">
                      <h2>Family Room</h2>
                      <span class="text-uppercase letter-spacing-1">Rp.3.000.000 / per malam</span>
                    </div>
                  </a>
                </div>
      
      
              </div>
            </div>
        </section>
         </div>
    </div> 
<!-- Room Section END -->

<!-- Reservation Section start -->
    <section class="section contact-section" id="reservation" name="reservation">
      <!-- namaPemesan form start -->
        <div class="container">
          <div class="row">
            <div class="col-md-7" data-aos="fade-up" data-aos-delay="100">
              <form action="action.php" method="post" name="reservation" class="bg-white p-md-5 p-4 mb-5 border">
                <div class="row">
                  <div class="form-grup">
                    <label for="namaPemesan"  class="form-label text-black">Nama Pemesan</label>
                    <input type="text" name="namaPemesan" id="namaPemesan" class="form-control" placeholder="Masukan Nama Lengkap">
                  </div>
      <!-- namaPemesan form end -->
      <!-- nomerIdentitas form start -->
                  <div class="col-md-6 form-group">
                    <label for="nomerIdentitas" class="form-label text-black">Nomer Identitas</label>
                    <input type="text" id="nomerIdentitas" name="nomerIdentitas" minlength="16" maxlength="16" class="form-control" placeholder="Masukan Nomer Identitas">
                    <small id="nomerIdentitas" class="form-text text-danger"></small>
                  </div>
                </div>
      <!-- nomerIdentitas form end -->
      <!-- jenisKelamin form start -->
                <div class="row">
                  <div class="col-md-6 form-group">
                    <label for="jenisKelamin" class="font-weight-bold text-black">Jenis Kelamin</label>
                    <div class="field-icon-wrap">
                      <select name="jenisKelamin" id="jenisKelamin" class="form-control">
                        <option selected>Pilih Jenis Kelamin</option>
                        <option value="L" name="jenisKelamin" id="jenisKelamin">Laki Laki</option>
                        <option value="P" name="jenisKelamin" id="jenisKelamin">Perempuan</option>
                      </select>
                    </div>
                  </div>
                </div>
      <!-- jenisKelamin form end -->
      
      <!-- tanggakCek form start -->
                <div class="row" >
                  <div class="col-md-6 form-group">
                    <label class="text-black font-weight-bold" for="tanggalCek">Check In</label>
                    <input type="date" id="tanggalCek" class="form-control" name="tanggalCek">
                  </div>
      <!-- tanggalCek form end -->
      <!-- durasiMenginap form start -->
                  <div class="col-md-6 form-group">
                    <label for="durasiMenginap">Durasi Menginap</label>
                    <input type="number" name="durasiMenginap" id="durasiMenginap" class="form-control" min="1" value="1">
                  </div>
                </div>
      <!-- durasiMenginap form end -->
      <!-- tipeKamar form start -->
                <div class="row"> 
                  <div class="col-md-6 form-group">
                    <label for="tipeKamar" class="font-weight-bold text-black">Pilih Tipe Kamar</label>
                    <div class="field-icon-wrap">
                      <select name="tipeKamar" id="tipeKamar" class="form-control">
                        <option selected>Pilih Tipe Kamar</option>
                        <option value="standard" name="tipeKamar" id="tipeKamar">Standar</option>
                        <option value="deluxe" name="tipeKamar" id="tipeKamar">Deluxe</option>
                        <option value="family" name="tipeKamar" id="tipeKamar">Family</option>
                      </select>
                    </div>
                  </div>
      <!-- tipeKamar form end -->
      <!-- includeBreakfast form start -->
                  <div class="col-md-6 form-group">
                    <label for="includeBreakfast" class="font-weight-bold text-black">Include Breakfast</label>
                    <div class="field-icon-wrap">
                      <select id="includeBreakfast" name="includeBreakfast" class="form-control">
                        <option selected>Pilih</option>
                        <option value="yes" id="includeBreakfast" name="includeBreakfast">ya (Rp.80,000)</option>
                        <option value="no" id="includeBreakfast" name="includeBreakfast">tidak</option>
                      </select>
                    </div>
                </div>
      <!-- includeBreakfast form end -->
      <!-- totalBayar form start -->
                <div class="row">
                  <div class="form-group">
                    <label for="totalBayar">Total Bayar</label>
                    <input type="text" id="totalBayar"  class="form-control" readonly>
                    <input type="number" id="totalbayarValue" name="totalBayar" class="form-control" hidden>
                  </div>
                </div>
                </div><br>
        <!-- totalBayar form end -->
        <!-- Button hitung Total -->
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input type="button" value="Hitung Total" id="hitung" class="btn btn-dark text-white py-3 px-5 font-weight-bold" onclick="hitungTotal()" >
                  </div>
        <!-- Button pesan sekarang -->
                  <div class="col-md-6 form-group">
                  <input type="submit" value="Pesan Sekarang" class="btn btn-dark text-white py-3 px-5">
                  <!-- <button type="submit" class="btn btn-dark text-white py-3 px-5">Pesan Sekarang </button> -->
                  </div>
                </div><br>
                <div class="row">
                  <div class="col-md-6 form-group">
                    <div class="col-md-6 form-group">
                      <input type="button" value="Cancel" id="cancle" class="btn btn-dark text-white py-3 px-5" href="reservation.php">
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <div class="col-md-5" data-aos="fade-up" data-aos-delay="200">
              <div class="row">
                <div class="col-md-10 ml-auto contact-info">
                  <p><span class="d-block">Address:</span> <span class="text-black"> Lodaya 2 kampung bojong Rt. 20 Rw. 05 Kel/desa nagrikidul, kecamatan Purwakarta</span></p>
                  <p><span class="d-block">Whats App:</span> <span class="text-black"> (+62)81904397625</span></p>
                  <p><span class="d-block">Email:</span> <span class="text-black">19102175@ittelkom-pwt.ac.id</span></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </form>
<!-- Reservation Section END -->

    <!-- Footer section start -->   
      <section class="section bg-image overlay" style="background-image: url('img/room1.jpg');">
          <div class="container" >
            <div class="row align-items-center">
              <div class="col-12 col-md-6 text-center mb-4 mb-md-0 text-md-left" data-aos="fade-up">
                <h2 class="text-white font-weight-bold">A Best Place To Stay. Reserve Now!</h2>
              </div>
              <div class="col-12 col-md-6 text-center text-md-right" data-aos="fade-up" data-aos-delay="200">
                <a href="reservation.html" class="btn btn-outline-white-primary py-3 text-white px-5">Reserve Now</a>
              </div>
            </div>
          </div>
        </section>
  
      <footer class="section footer-section">
        <div class="container">
          <div class="row mb-4">
            <div class="col-md-3 mb-5">
              <ul class="list-unstyled link">
                <li><a href="about.html">About Us</a></li>
                <li><a href="room.html">The Rooms &amp; Suites</a></li>
               <li><a href="reservation.html">Reservation</a></li>
              </ul>
            </div>
            <div class="col-md-3 mb-5">
              <ul class="list-unstyled link">
                <li><a href="#">The Rooms &amp; Suites</a></li>
                <li><a href="#">About Us</a></li>

              </ul>
            </div>
            <div class="col-md-3 mb-5 pr-md-5 contact-info">
                <!-- Lodaya 2 kampung bojong Rt. 20 Rw. 05 Kel/desa nagrikidul, kecamatan purwakarta -->
              <p><span class="d-block"><span class="ion-ios-location h5 mr-3 text-primary"></span>Address:</span> <span> Lodaya 2 kampung bojong, <br> Rt. 20 Rw. 05 Kel/desa nagrikidul</span><br><span>kecamatan purwakarta</span></p>
              <p><span class="d-block"><span class="ion-ios-telephone h5 mr-3 text-primary"></span>Phone:</span> <span>(+68)81904397625</span></p>

            </div>
            <div class="col-md-3 mb-5">
              <p><span class="d-block"><span class="ion-ios-email h5 mr-3 text-primary" ></span>Email:</span> <span> 19102175@ittelkom-pwt.ac.id</span></p>
              </form>
            </div>
          </div>
        </div>
      </footer>
    <!-- footer section end -->


    
    <!-- bundle -->
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <!-- <script src="/node_modules/jquery/dist/jquery.js"></script> -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <script src="main.js"></script>
    <!-- <script src="/node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="/bower_components/jquery/dist/jquery.js"></script>
    <script src="/bower_components/owl.carousel/dist/owl.carousel.min.js"></script> -->



   


</body>
</html>