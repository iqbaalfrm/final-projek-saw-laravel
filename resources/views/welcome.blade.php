<!DOCTYPE html>
<html lang="en">
<head>
  <title>GURUKU - SMK ASY - SYAMSURIYYAH</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="{{ asset('page/vendors/owl-carousel/css/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('page/vendors/owl-carousel/css/owl.theme.default.css') }}">
<link rel="stylesheet" href="{{ asset('pae/vendors/mdi/css/materialdesignicons.min.css') }}">
<link rel="stylesheet" href="{{ asset('page/vendors/aos/css/aos.css') }}">
<link rel="stylesheet" href="{{ asset('page/css/style.min.css') }}">
</head>
<body id="body" data-spy="scroll" data-target=".navbar" data-offset="100">
  <header id="header-section">
    <nav class="navbar navbar-expand-lg pl-3 pl-sm-0" id="navbar">
    <div class="container">
    <di class="navbar-brand-wrapper d-flex w-100">
    <strong>GURUKU - SMK ASY-SYAMSURIYYAH</strong>
        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="mdi mdi-menu navbar-toggler-icon"></span>
        </button> 
      </div>
      <div class="collapse navbar-collapse navbar-menu-wrapper" id="navbarSupportedContent">
        <ul class="navbar-nav align-items-lg-center align-items-start ml-auto">
          <li class="d-flex align-items-center justify-content-between pl-4 pl-lg-0">
          <div class="navbar-collapse-logo">
    <span>GURUKU - SMK ASY</span>
</div>

            <button class="navbar-toggler close-button" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="mdi mdi-close navbar-toggler-icon pl-5"></span>
            </button>
          </li>
          <ul class="navbar-nav mr-auto">
    <li class="nav-item">
        <a class="nav-link" href="#header-section">Beranda <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#features-section">Tentang</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#case-studies-section">Aplikasi</a>
    </li>
</ul>

<li class="nav-item btn-contact-us pl-4 pl-lg-0">
  <a class="btn btn-success" href="{{ route('login') }}">Login</a>
</li>
        </ul>
      </div>
    </div> 
    </nav>   
  </header>
  <div class="banner">
    <div class="container">
        <h1 class="font-weight-semibold">Sistem Pendukung Keputusan<br>Pemilihan Guru SMK Asy Syamsuriyyah.</h1>
        <h6 class="font-weight-normal text-muted pb-3">GURUKU adalah solusi kreatif yang mempermudah proses seleksi dan pemilihan guru baru di SMK Asy Syamsuriyyah<br>dengan menggunakan Metode SAW (Simple Additive Weighting).</h6>
        <div>
        <a href="{{ route('login') }}" class="btn btn-opacity-light mr-1">Mulai Sekarang</a>

            <button class="btn btn-opacity-success ml-1">Pelajari Lebih Lanjut</button>
        </div>
        <img src="{{ asset('page/images/Group171.svg') }}" alt="" class="img-fluid">
    </div>
</div>

  <div class="content-wrapper">
    <div class="container">
    <section class="features-overview" id="features-section">
    <div class="content-header">
        <h2>Bagaimana GURUKU Bekerja</h2>
        <h6 class="section-subtitle text-muted">Solusi yang mudah digunakan untuk memilih guru terbaik di SMK Asy Syamsuriyyah.</h6>
    </div>
    <div class="d-md-flex justify-content-between">
        <div class="grid-margin d-flex justify-content-start">
            <div class="features-width">
                <img src="{{ asset('page/images/Group12.svg') }}" alt="" class="img-icons">
                <h5 class="py-3">Optimisasi Pemilihan Guru</h5>
                <p class="text-muted">GURUKU mempercepat proses pemilihan guru terbaik berdasarkan kriteria yang telah ditentukan.</p>
                <a href="#"><p class="readmore-link">Selengkapnya</p></a>  
            </div>
        </div>
        <div class="grid-margin d-flex justify-content-center">
            <div class="features-width">
                <img src="{{ asset('page/images/Group7.svg') }}" alt="" class="img-icons">
                <h5 class="py-3">SEO dan Promosi Guru</h5>
                <p class="text-muted">GURUKU membantu dalam mempromosikan dan mengoptimalkan profil guru yang dipilih secara efektif.</p>
                <a href="#"><p class="readmore-link">Selengkapnya</p></a>
            </div>
        </div>
        <div class="grid-margin d-flex justify-content-end">
            <div class="features-width">
                <img src="{{ asset('page/images/Group5.svg') }}" alt="" class="img-icons">
                <h5 class="py-3">Pemasaran Konten Guru</h5>
                <p class="text-muted">GURUKU mendukung pengembangan konten yang relevan untuk meningkatkan profil guru yang dipilih.</p>
                <a href="#"><p class="readmore-link">Selengkapnya</p></a>
            </div>
        </div>
    </div>
</section>

      <section class="case-studies" id="case-studies-section">
        <div class="row grid-margin">
          <div class="col-12 text-center pb-5">
            <h2>Portal Sekolah</h2>
            <h6 class="section-subtitle text-muted">Integrasi web yang cerdas menjadikan portal ini jembatan yang efisien antar pengguna.</h6>
          </div>
          <div class="col-12 col-md-6 col-lg-3 stretch-card mb-3 mb-lg-0" data-aos="zoom-in">
            <div class="card color-cards">
              <div class="card-body p-0">
                <div class="bg-primary text-center card-contents">
                  <div class="card-image">
                    <img src="{{ asset('page/images/Group95.svg') }}" class="case-studies-card-img" alt="">
                  </div>  
                  <div class="card-desc-box d-flex align-items-center justify-content-around">
                    <div>
                      <button class="btn btn-white">Selengkapnya</button>
                    </div>
                  </div>
                </div>   
                <div class="card-details text-center pt-4">
                    <h6 class="m-0 pb-1">Web Profile</h6>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-3 stretch-card mb-3 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="card color-cards">
              <div class="card-body p-0">
                <div class="bg-warning text-center card-contents">
                  <div class="card-image">
                      <img src="{{ asset('page/images/Group108.svg') }}" class="case-studies-card-img" alt="">
                  </div>  
                  <div class="card-desc-box d-flex align-items-center justify-content-around">
                    <div>
                      <button class="btn btn-white">Selengkapnya</button>
                    </div>
                  </div>
                </div>   
                <div class="card-details text-center pt-4">
                    <h6 class="m-0 pb-1">E-Learning</h6>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-3 stretch-card mb-3 mb-lg-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="card color-cards">
              <div class="card-body p-0">
                <div class="bg-violet text-center card-contents">
                  <div class="card-image">
                      <img src="{{ asset('page/images/Group126.svg') }}" class="case-studies-card-img" alt="">
                  </div>  
                  <div class="card-desc-box d-flex align-items-center justify-content-around">
                    <div>
                      <button class="btn btn-white">Selengkapnya</button>
                    </div>
                  </div>
                </div>   
                <div class="card-details text-center pt-4">
                    <h6 class="m-0 pb-1">E-Library</h6>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-3 stretch-card" data-aos="zoom-in" data-aos-delay="600">
            <div class="card color-cards">
              <div class="card-body p-0">
                <div class="bg-success text-center card-contents">
                  <div class="card-image">
                      <img src="{{ asset('page/images/Group115.svg') }}" class="case-studies-card-img" alt="">
                  </div>  
                  <div class="card-desc-box d-flex align-items-center justify-content-around">
                    <div>
                      <button class="btn btn-white">Selengkapnya</button>
                    </div>
                  </div>
                </div>   
                <div class="card-details text-center pt-4">
                    <h6 class="m-0 pb-1">E-Raport</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>     
      <section class="contact-us" id="contact-section">
        <div class="contact-us-bgimage grid-margin" >
          <div class="pb-4">
            <h4 class="px-3 px-md-0 m-0" data-aos="fade-down">Anda Punya Pertanyaan?</h4>
          </div>
          <div data-aos="fade-up">
          <button class="btn btn-rounded btn-outline-danger" onclick="window.location.href='https://wa.me/6285867534788'">Hubungi Kami</button>
          </div>          
        </div>
      </section>
      <section class="contact-details" id="contact-details-section">
        <div class="row text-center text-md-left">
          <div class="col-12 col-md-6 col-lg-4 grid-margin">
          <div class="pt-2">
    <p class="text-muted m-0"><span style="font-size: 24px; font-weight: bold; color: #000000;">GURUKU</span><br>memudahkan proses pemilihan dan pengelolaan guru di SMK Asy Syamsuriyyah untuk meningkatkan kualitas pembelajaran yang lebih baik.</p>
</div>

    
          </div>
          <div class="col-12 col-md-6 col-lg-1 grid-margin">
             
          </div>
          <div class="col-12 col-md-6 col-lg-3 grid-margin">
            <h5 class="pb-2">Kompetensi Keahlian</h5>
            <a href="#"><p class="m-0 pb-2">Teknik Kendaraan Ringan</p></a>   
            <a href="#" ><p class="m-0 pt-1 pb-2">Rekayasa Perangkat Lunak</p></a> 
            <a href="#"><p class="m-0 pt-1 pb-2">Multimedia</p></a> 
          </div>
          <div class="col-12 col-md-6 col-lg-3 grid-margin">
              <h5 class="pb-2">Alamat Kami</h5>
              <p class="text-muted">Lempeni, Jagalempeni<br>
Kec. Wanasari, 52252<br>
Kabupaten Brebes, Jawa Tengah
</p>
              <div class="d-flex justify-content-center justify-content-md-start">
                <a href="#"><span class="mdi mdi-facebook"></span></a>
                <a href="#"><span class="mdi mdi-twitter"></span></a>
                <a href="#"><span class="mdi mdi-instagram"></span></a>
                <a href="#"><span class="mdi mdi-linkedin"></span></a>
              </div>
          </div>
        </div>  
      </section>
      <footer class="border-top">
        <p class="text-center text-muted pt-4">Copyright © 2024<a href="https://www.smk-asysyamsuriyyah.sch.id/" class="px-1">SMK ASY SYAMSURIYYAH.</a>All rights reserved.</p>
      </footer>
      <!-- Modal for Contact - us Button -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="exampleModalLabel">Contact Us</h4>
            </div>
            <div class="modal-body">
              <form>
                <div class="form-group">
                  <label for="Name">Name</label>
                  <input type="text" class="form-control" id="Name" placeholder="Name">
                </div>
                <div class="form-group">
                  <label for="Email">Email</label>
                  <input type="email" class="form-control" id="Email-1" placeholder="Email">
                </div>
                <div class="form-group">
                  <label for="Message">Message</label>
                  <textarea class="form-control" id="Message" placeholder="Enter your Message"></textarea>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-success">Submit</button>
            </div>
          </div>
        </div>
      </div>
    </div> 
  </div>
  <script src="{{ asset('page/vendors/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('page/vendors/bootstrap/bootstrap.min.js') }}"></script>
<script src="{{ asset('page/vendors/owl-carousel/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('page/vendors/aos/js/aos.js') }}"></script>
<script src="{{ asset('page/js/landingpage.js') }}"></script>
</body>
</html>