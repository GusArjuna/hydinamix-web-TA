@extends('nav')
@section('content')
    <section id="hero" class="hero section dark-background">
      <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <img src="{{ url('src/img/logoputih.png') }}" alt="logo" style="position: absolute;top: 20%;left: 50%;transform: translateX(-50%);width: 300px !important;height: auto !important;max-width: none !important;z-index: 1000;pointer-events: none;">
        <div class="carousel-item active">
          <img src="{{ url('src/img/carousel/coro1.png') }}" alt="">
          <div class="carousel-container">
            <p>PT Hidynamix Mitra Solusindo</p>
            <a href="#about" class="btn-get-started">Jelajahi</a>
          </div>
        </div>

        <div class="carousel-item">
          <img src="{{ url('src/img/carousel/hero-carousel-2.jpg') }}" alt="">
          <div class="carousel-container">
            <p>We Help brands Win The Market In a Right Strategy</p>
            <a href="#about" class="btn-get-started">Jelajahi</a>
          </div>
        </div>

        <div class="carousel-item">
          <img src="{{ url('src/img/carousel/hero-carousel-3.jpg') }}" alt="">
          <div class="carousel-container">
            <p style="text-align: center">Hidynamix adalah konsultan pemasaran yang membantu perusahaan unggul dalam kompetisi bisnis melalui layanan konsultasi, jasa riset pemasaran hingga in-house training profesional.</p>
            <a href="#about" class="btn-get-started">Jelajahi</a>
          </div>
        </div>

        <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>
        <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>
        <ol class="carousel-indicators"></ol>
      </div>
    </section>

    <section id="about" class="about section">
      <div class="container section-title" data-aos="fade-up">
        <h2>About</h2>
        <p>Tentang Kami<br></p>
      </div>

      <div class="container">
        <div class="row gy-4">

          <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
            <p>
              Hidynamix berkomitmen membantu perusahaan Anda agar bisa memberikan pelayanan terbaik dan solusi yang relevan untuk permasalahan pelanggan melalui layanan konsultasi, jasa riset pemasaran, dan in-house training intensif seputar bidang pemasaran. 
            </p>
            <h2>Visi</h2>
            <ul>
              <li><i class="bi bi-check2-circle"></i> <span>Menjadi perusahaan yang bergerak di bidang konsultasi pemasaran yang paling bernilai bagi dunia usaha dan masyarakat di Indonesia.</span></li>
            </ul>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <p>Kami percaya kepuasan pelanggan memicu timbulnya loyalitas, yang merupakan tujuan tertinggi kegiatan pemasaran. Berbekal data kondisi pasar dan kompetitor yang akurat serta strategi yang tepat, perusahaan Anda bisa unggul dalam persaingan.</p>
            <h2>Misi</h2>
            <ul>
              <li><i class="bi bi-check2-circle"></i> <span>Jadi perusahaan yang bertaqwa kepada Tuhan Yang Maha Esa.</span></li>
              <li><i class="bi bi-check2-circle"></i> <span>Jadi perusahaan yang berorientasi pada nilai dan kepuasan pelanggan.</span></li>
              <li><i class="bi bi-check2-circle"></i> <span>Jadi perusahaan yang dinamis terhadap perubahan zaman.</span></li>
              <li><i class="bi bi-check2-circle"></i> <span>Jadi perusahaan yang selalu belajar dan bertumbuh.</span></li>
              <li><i class="bi bi-check2-circle"></i> <span>Jadi perusahaan yang profesional & good governance.</span></li>
              <li><i class="bi bi-check2-circle"></i> <span>Jadi perusahaan dicintai pelanggan, karyawan, investor & masyarakat.</span></li>
            </ul>
            <a href="about" class="read-more"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
          </div>

        </div>
      </div>
    </section>

    <section id="clients" class="clients section light-background">
      <h2 style="text-align: center">Klien</h2>
      <div class="container" data-aos="fade-up">
        <div class="row gy-4">

          @foreach ($clients as $client)
            <div class="col-xl-2 col-md-3 col-6 client-logo">
              <img src="{{ $client['url'] }}" class="img-fluid" alt="{{ $client['name'] }}">
            </div>
          @endforeach

        </div>
      </div>
    </section>

    <section id="services" class="services section">
      <div class="container section-title" data-aos="fade-up" style="text-align : center">
        <p>Layanan Kami</p>
      </div>
      <div class="container">
        <div class="row gy-4">

          <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item d-flex position-relative h-100">
              <i class="bi bi-search icon flex-shrink-0"></i>
              <div>
                <h4 class="title"><a href="contact" class="stretched-link">Riset Pemasaran</a></h4>
                <p class="description">Layanan riset untuk mengeksplorasi berbagai hal, seperti memahami keinginan konsumen, mendapatkan informasi, hingga menentukan arah pengembangan produk. Riset kualitatif dan kuantitatif dengan berbagai metode.</p>
              </div>
            </div>
          </div>

          <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item d-flex position-relative h-100">
              <i class="bi bi-chat-dots icon flex-shrink-0"></i>
              <div>
                <h4 class="title"><a href="contact" class="stretched-link">Konsultasi Pemasaran</a></h4>
                <p class="description">Layanan konsultasi merupakan bagian dari jasa riset Hidynamix. Semua data riset merupakan hasil analisa tim konsultan expert kami. Layanan konsultasi juga digunakan untuk memahami lebih jauh kebutuhan dan permasalahan perusahaan Anda terkait pemasaran, agar kami bisa membantu tidak hanya pelayanan terbaik, namun juga berkelanjutan.</p>
              </div>
            </div>
          </div>

          <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item d-flex position-relative h-100">
              <i class="bi bi-people icon flex-shrink-0"></i>
              <div>
                <h4 class="title"><a href="contact" class="stretched-link">In-house Training</a></h4>
                <p class="description">Training intensif untuk membantu perusahaan Anda memiliki internal team pemasaran yang kompeten, agar bisa menjalankan strategi pemasaran lebih maksimal.</p>
              </div>
            </div>
          </div>
          
          <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item d-flex position-relative h-100">
              <i class="bi bi-graph-up-arrow icon flex-shrink-0"></i>
              <div>
                <h4 class="title"><a href="contact" class="stretched-link">Direct Selling</a></h4>
                <p class="description">Konsumen dapat langsung mendapatkan barang yang dibelinya dari produsen. sehingga memungkinkan konsumen dapat produk dengan harga terjangkau dengan jumlah yang diinginkan, melalui metode door to door, community to community, dan comprehensive sales approach</p>
              </div>
            </div>
          </div>

    </section>
@endsection