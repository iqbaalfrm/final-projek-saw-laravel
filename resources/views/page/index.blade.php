<!DOCTYPE html>
<html lang="en">
<head>
  <title>EGURU - SMK ASY - SYAMSURIYYAH</title>
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
    <img src="{{ asset('page/images/Group2.svg') }}" alt="">
        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="mdi mdi-menu navbar-toggler-icon"></span>
        </button> 
      </div>
      <div class="collapse navbar-collapse navbar-menu-wrapper" id="navbarSupportedContent">
        <ul class="navbar-nav align-items-lg-center align-items-start ml-auto">
          <li class="d-flex align-items-center justify-content-between pl-4 pl-lg-0">
            <div class="navbar-collapse-logo">
              <img src="{{ asset('page/images/Group2.svg') }}" alt="">
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
  <a class="btn btn-success" href="{{ route('auth.login') }}">Login</a>
</li>


        </ul>
      </div>
    </div> 
    </nav>   
  </header>
  <div class="banner" >
    <div class="container">
      <h1 class="font-weight-semibold">Search engine optimisation &<br>Marketing.</h1>
      <h6 class="font-weight-normal text-muted pb-3">Simple is a simple template with a creative design that solves all your marketing and SEO queries.</h6>
      <div>
        <button class="btn btn-opacity-light mr-1">Get started</button>
        <button class="btn btn-opacity-success ml-1">Learn more</button>
      </div>
      <img src="{{ asset('page/images/Group171.svg') }}" alt="" class="img-fluid">
    </div>
  </div>
  <div class="content-wrapper">
    <div class="container">
      <section class="features-overview" id="features-section" >
        <div class="content-header">
          <h2>How does it works</h2>
          <h6 class="section-subtitle text-muted">One theme that serves as an easy-to-use operational toolkit<br>that meets customer's needs.</h6>
        </div>
        <div class="d-md-flex justify-content-between">
          <div class="grid-margin d-flex justify-content-start">
            <div class="features-width">
              <img src="{{ asset('page/images/Group12.svg') }}" alt="" class="img-icons">
              <h5 class="py-3">Speed<br>Optimisation</h5>
              <p class="text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum. Fusce egeabus consectetuer turpis, suspendisse.</p>
              <a href="#"><p class="readmore-link">Readmore</p></a>  
            </div>
          </div>
          <div class="grid-margin d-flex justify-content-center">
            <div class="features-width">
              <img src="{{ asset('page/images/Group7.svg') }}" alt="" class="img-icons">
              <h5 class="py-3">SEO and<br>Backlinks</h5>
              <p class="text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum. Fusce egeabus consectetuer turpis, suspendisse.</p>
              <a href="#"><p class="readmore-link">Readmore</p></a>
            </div>
          </div>
          <div class="grid-margin d-flex justify-content-end">
            <div class="features-width">
              <img src="{{ asset('page/images/Group5.svg') }}" alt="" class="img-icons">
              <h5 class="py-3">Content<br>Marketing</h5>
              <p class="text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum. Fusce egeabus consectetuer turpis, suspendisse.</p>
              <a href="#"><p class="readmore-link">Readmore</p></a>
            </div>
          </div>
        </div>
      </section>     
      <section class="digital-marketing-service" id="digital-marketing-section">
        <div class="row align-items-center">
          <div class="col-12 col-lg-7 grid-margin grid-margin-lg-0" data-aos="fade-right">
            <h3 class="m-0">We Offer a Full Range<br>of Digital Marketing Services!</h3>
            <div class="col-lg-7 col-xl-6 p-0">
              <p class="py-4 m-0 text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum. Fusce egeabus consectetuer turpis, suspendisse.</p>
              <p class="font-weight-medium text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum. Fusce egeabus consectetuer</p>
            </div>    
          </div>
          <div class="col-12 col-lg-5 p-0 img-digital grid-margin grid-margin-lg-0" data-aos="fade-left">
            <img src="{{ asset('page/images/Group1.png') }}" alt="" class="img-fluid">
          </div>
        </div>
        <div class="row align-items-center">
          <div class="col-12 col-lg-7 text-center flex-item grid-margin" data-aos="fade-right">
            <img src="{{ asset('page/images/Group2.png') }}" alt="" class="img-fluid">
          </div>
          <div class="col-12 col-lg-5 flex-item grid-margin" data-aos="fade-left">
            <h3 class="m-0">Leading Digital Agency<br>for  Business Solution.</h3>
            <div class="col-lg-9 col-xl-8 p-0">
              <p class="py-4 m-0 text-muted">Power-packed with impressive features and well-optimized, this template is designed to provide the best performance in all circumstances.</p>
              <p class="pb-2 font-weight-medium text-muted">Its smart features make it a powerful stand-alone website building tool.</p>
            </div>
            <button class="btn btn-info">Readmore</button>
          </div>
        </div>
      </section>     
      <section class="case-studies" id="case-studies-section">
        <div class="row grid-margin">
          <div class="col-12 text-center pb-5">
            <h2>Portal Sekolah</h2>
            <h6 class="section-subtitle text-muted">Integrasi web yang cerdas menjadikan portal ini jembatan yang efisien antara pengguna dan sumber daya online.</h6>
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
                      <h6 class="text-white pb-2 px-3">Know more about Online marketing</h6>
                      <button class="btn btn-white">Read More</button>
                    </div>
                  </div>
                </div>   
                <div class="card-details text-center pt-4">
                    <h6 class="m-0 pb-1">Online Marketing</h6>
                    <p>Seo, Marketing</p>
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
                      <h6 class="text-white pb-2 px-3">Know more about Web Development</h6>
                      <button class="btn btn-white">Read More</button>
                    </div>
                  </div>
                </div>   
                <div class="card-details text-center pt-4">
                    <h6 class="m-0 pb-1">Web Development</h6>
                    <p>Developing, Designing</p>
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
                      <h6 class="text-white pb-2 px-3">Know more about Web Designing</h6>
                      <button class="btn btn-white">Read More</button>
                    </div>
                  </div>
                </div>   
                <div class="card-details text-center pt-4">
                    <h6 class="m-0 pb-1">Web Designing</h6>
                    <p>Designing, Developing</p>
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
                      <h6 class="text-white pb-2 px-3">Know more about Software Development</h6>
                      <button class="btn btn-white">Read More</button>
                    </div>
                  </div>
                </div>   
                <div class="card-details text-center pt-4">
                    <h6 class="m-0 pb-1">Software Development</h6>
                    <p>Developing, Designing</p>
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
            <button class="btn btn-rounded btn-outline-danger">Hubungi Kami</button>
          </div>          
        </div>
      </section>
      <section class="contact-details" id="contact-details-section">
        <div class="row text-center text-md-left">
          <div class="col-12 col-md-6 col-lg-4 grid-margin">
            <img src="{{ asset('page/images/Group2.svg') }}" alt="" class="pb-2">
            <div class="pt-2">
              <p class="text-muted m-0">Sistem Informasi Elektronik Guru (eGuru)<br>hadir untuk memudahkan Guru di<br> SMK Asy Syamsuriyyah dalam proses pembelajaran secara online. Mudah dan cepat.</p>
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