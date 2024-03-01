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
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

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
      <a class="navbar-brand font-family-sans-serif" href="index.php">SERKOM HOTEL</a>
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
              <a class="nav-link" href="#room">The Rooms &amp; Suites</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About Us</a>
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
                  <a href="#room" class="room">
                    <figure class="img-wrap">
                      <img src="img/room1.jpg" alt="Free website template" class="img-fluid mb-3">
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
                      <img src="img/room2.jpg" alt="Free website template" class="img-fluid mb-3">
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
                      <img src="img/room3.jpg" alt="Free website template" class="img-fluid mb-3">
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

    <!-- About Section Start -->
    <section class="py-5 bg-light" id="about">
      <div class="container" >
        <div class="row align-items-center">
          <div class="col-md-12 col-lg-7 ml-auto order-lg-2 position-relative mb-5" data-aos="fade-up">
            <figure class="img-absolute">
              <img src="img/room1.jpg" alt="Free Website Template by Templateux" class="img-fluid">
            </figure>
            <img src="img/room2.jpg" alt="Image" class="img-fluid rounded">
          </div>
          <div class="col-md-12 col-lg-4 order-lg-1" data-aos="fade-up">
            <h2 class="heading">Tentang Kami</h2>
            <p class="mb-4">Selamat datang di website kami, tempat terbaik untuk merencanakan perjalanan Anda! Kami adalah tim yang berdedikasi untuk memberikan pengalaman pemesanan hotel yang mudah, cepat, dan aman. Dengan layanan pelanggan yang ramah dan profesional, kami siap membantu Anda menemukan akomodasi yang sempurna sesuai dengan kebutuhan dan budget Anda. Selamat berselancar di website kami dan temukan pengalaman pemesanan hotel yang sempurna hanya di sini!</p>
            <div class="row">
              <div class="col-md-12">
                  <div class="row contact-info">
                      <div class="col-md-4">
                          <div class="info-item">
                              <p><i class="fa fa-map-marker"></i> <a href="https://maps.app.goo.gl/5VdGfjgTkSNUUrSX8">Map</a></p>
                          </div>
                      </div>
                      <div class="col-md-4">
                          <div class="info-item">
                              <p><i class="fa fa-envelope"></i> <a href="mailto:19102175@ittelkom-pwt.ac.id">Email</a></p>
                          </div>
                      </div>
                      <div class="col-md-4">
                          <div class="info-item">
                              <p><i class="fab fa-whatsapp-square"></i>  <a href="https://wa.me/qr/Z63F6ENPCVYXD1">Whats App</a></p>
                          </div>
                      </div>
                  </div>
              </div>
            <p><a href="#" class="btn btn-dark text-white py-2 mr-3 mr-3 font-family-serif ">Learn More</a> <span class="mr-3 font-family-serif"><em>or</em></span> <a href="https://www.youtube.com/watch?v=LnZAU7GCt4s" class="text-uppercase letter-spacing-1">See video</a></p>
  

        </div>
      </div>
    </section>

    <!-- About Section END -->

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
                <li><a href="#room">The Rooms &amp; Suites</a></li>
               <li><a href="reservation.html">Reservation</a></li>
              </ul>
            </div>
            <div class="col-md-3 mb-5">
              <ul class="list-unstyled link">
                <li><a href="#room">The Rooms &amp; Suites</a></li>
                <li><a href="#">About Us</a></li>

              </ul>
            </div>
            <div class="col-md-3 mb-5 pr-md-5 contact-info">
                <!-- Lodaya 2 kampung bojong Rt. 20 Rw. 05 Kel/desa nagrikidul, kecamatan purwakarta -->
              <p><span class="d-block"><span class="ion-ios-location h5 mr-3 text-primary"></span>Address:</span> <span> Lodaya 2 kampung bojong, <br> Rt. 20 Rw. 05 Kel/desa nagrikidul</span><br><span>kecamatan purwakarta</span></p>
              <p><span class="d-block"><span class="ion-ios-telephone h5 mr-3 text-primary"></span>Phone:</span> <span>(+62)81904397625</span></p>

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
    <script src="/node_modules/jquery/dist/jquery.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <!-- <script src="/node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="/bower_components/jquery/dist/jquery.js"></script>
    <script src="/bower_components/owl.carousel/dist/owl.carousel.min.js"></script> -->

</body>
</html>