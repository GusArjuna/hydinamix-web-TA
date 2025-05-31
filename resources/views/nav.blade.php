<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Index - Sailor Bootstrap Template</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <link href="{{ url('src/img/favicon.ico') }}" rel="icon">
  <link href="src/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link href="{{ url('src/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ url('src/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ url('src/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ url('src/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ url('src/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  <link href="{{ url('src/css/main.css') }}" rel="stylesheet">
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.html" class="logo d-flex align-items-center me-auto">
        <h1 class="sitename">Hidynamix</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="/" class="active">Home</a></li>
          <li><a href="/team">Team</a></li>
          <li><a href="/testimonials">Testimoni</a></li>
          <li><a href="/contact">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="/#about">Get Started</a>

    </div>
  </header>

  <main class="main">
    @yield('content')
  </main>

  <footer id="footer" class="footer dark-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <span class="sitename">Hidynamix</span>
          </a>
          <div class="footer-contact pt-3">
            <p>Ngagel Mulyo XVI / 113</p>
            <p>Surabaya, Jawa Timur, Indonesia</p>
            <a href="https://wa.me/+62818307999" style="color: white" target="blank"><p class="mt-3"><i class="bi bi-whatsapp icon flex-shrink-0"></i> <span> +62 81 8307 999</span> (Wahid Abrori)</p></a>
            <a href="https://wa.me/+62811307999" style="color: white" target="blank"><p class="mt-3"><i class="bi bi-whatsapp icon flex-shrink-0"></i> <span> +62 81 1307 999</span> (Rizal Udin)</p></a>
            <p><strong>Email:</strong> <span>official@hidynamix.id</span></p>
          </div>
          <div class="social-links d-flex mt-4">
            <a href="https://www.facebook.com/hidynamix.official/" style="color: rgba(255, 255, 255, 0.8); borderColor= rgba(255, 255, 255, 0.8)" onmouseover="this.style.color='white'; this.style.borderColor='white'" onmouseout="this.style.color='rgba(255, 255, 255, 0.8); this.style.borderColor= rgba(255, 255, 255, 0.8)'"><i class="bi bi-facebook"></i></a>
            <a href="https://www.instagram.com/hidynamix/" style="color: rgba(255, 255, 255, 0.8); borderColor= rgba(255, 255, 255, 0.8)" onmouseover="this.style.color='white'; this.style.borderColor='white'" onmouseout="this.style.color='rgba(255, 255, 255, 0.8); this.style.borderColor= rgba(255, 255, 255, 0.8)'"><i class="bi bi-instagram"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="/" style="color: rgba(255, 255, 255, 0.8)" onmouseover="this.style.color='white'" onmouseout="this.style.color='rgba(255, 255, 255, 0.8)'">Home</a></li>
            <li><a href="/#about" style="color: rgba(255, 255, 255, 0.8)" onmouseover="this.style.color='white'" onmouseout="this.style.color='rgba(255, 255, 255, 0.8)'">About us</a></li>
            <li><a href="/team" style="color: rgba(255, 255, 255, 0.8)" onmouseover="this.style.color='white'" onmouseout="this.style.color='rgba(255, 255, 255, 0.8)'">Team</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li>Riset Pemasaran</a></li>
            <li>Konsultasi Pemasaran</a></li>
            <li>In-house Training</a></li>
            <li>Direct Selling</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-12 footer-newsletter">
          <h4>Our Update!</h4>
          <p>Ikuti Terus Sosial Media Kami Untuk Mendapatkan Update Terbaru Dari Kami</p>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Hidynamix</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ url('src/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ url('src/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ url('src/vendor/aos/aos.js') }}"></script>
  <script src="{{ url('src/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ url('src/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
  <script src="{{ url('src/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ url('src/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ url('src/vendor/waypoints/noframework.waypoints.js') }}"></script>
  <script src="{{ url('src/vendor/swiper/swiper-bundle.min.js') }}"></script>

  <!-- Main JS File -->
  <script src="{{ url('src/js/main.js') }}"></script>

</body>

</html>