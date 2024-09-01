<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>RuteJabar - Menyambungkan Jawa Barat</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&family=Poppins:wght@200;300;400;500;600&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
        <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    </head>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-secondary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Navbar & Hero Start -->
        <div class="container-fluid nav-bar p-0">
            <nav class="navbar navbar-expand-lg navbar-light bg-white px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="display-5 text-secondary m-0"><img src="img/brand-logo.png" class="img-fluid" alt="">RUTEJABAR</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="{{ url('/') }}" class="nav-item nav-link active">Beranda</a>
                        <a href="{{ url('/perjalanan') }}" class="nav-item nav-link">Perjalanan</a>
                        <a href="{{ url('/laporpak') }}" class="nav-item nav-link">LaporPak</a>
                        <a href="{{ url('/status') }}" class="nav-item nav-link">Rekomendasi</a>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Carousel Start -->
        <div class="carousel-header">
            <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active"></li>
                    <!-- <li data-bs-target="#carouselId" data-bs-slide-to="1"></li> -->
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img src="img/carousel-2.jpg" class="img-fluid" alt="Image">
                        <div class="carousel-caption">
                            <div class="text-center p-4" style="max-width: 900px;">
                                <h4 class="text-white text-uppercase fw-bold mb-3 mb-md-4 wow fadeInUp" data-wow-delay="0.1s">Solusi Perjalanan Aman dan Nyaman</h4>
                                <h1 class="display-1 text-capitalize text-white mb-3 mb-md-4 wow fadeInUp" data-wow-delay="0.3s">Dapatkan Informasi Lengkap Perjalanan Anda!</h1>
                                <p class="text-white mb-4 mb-md-5 fs-5 wow fadeInUp" data-wow-delay="0.5s">Temukan cakupan sinyal, kondisi jalan terkini, dan tingkat keamanan di sepanjang rute Anda. Pastikan perjalanan Anda selalu aman dan terencana dengan baik.</p>
                                <a class="btn btn-primary border-secondary rounded-pill text-white py-3 px-5 wow fadeInUp" data-wow-delay="0.7s" href="#">Pelajari Lebih Lanjut</a>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="carousel-item">
                        <img src="img/carousel-2.jpg" class="img-fluid" alt="Image">
                        <div class="carousel-caption">
                            <div class="text-center p-4" style="max-width: 900px;">
                                <h5 class="text-white text-uppercase fw-bold mb-3 mb-md-4 wow fadeInUp" data-wow-delay="0.1s">Solution For All Type Of Visas</h5>
                                <h1 class="display-1 text-capitalize text-white mb-3 mb-md-4 wow fadeInUp" data-wow-delay="0.3s">Best Visa Immigrations Services</h1>
                                <p class="text-white mb-4 mb-md-5 fs-5 wow fadeInUp" data-wow-delay="0.5s">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                                </p>
                                <a class="btn btn-primary border-secondary rounded-pill text-white py-3 px-5 wow fadeInUp" data-wow-delay="0.7s" href="#">More Details</a>
                            </div>
                        </div>
                    </div> -->
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bg-secondary wow fadeInLeft" data-wow-delay="0.2s" aria-hidden="false"></span>
                    <span class="visually-hidden-focusable">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                    <span class="carousel-control-next-icon bg-secondary wow fadeInRight" data-wow-delay="0.2s" aria-hidden="false"></span>
                    <span class="visually-hidden-focusable">Next</span>
                </button>
            </div>
        </div>
        <!-- Carousel End -->

        <!-- About Start -->
        <div class="container-fluid py-5">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-xl-5 wow fadeInLeft" data-wow-delay="0.1s">
                        <div class="bg-light rounded">
                            <img src="img/about-2.png" class="img-fluid w-100" style="margin-bottom: -300px;" alt="Image">
                            <img src="img/about-3.jpg" class="img-fluid w-100 border-bottom border-5 border-primary" style="border-top-right-radius: 300px; border-top-left-radius: 300px;" alt="Image">
                        </div>
                    </div>
                    <div class="col-xl-7 wow fadeInRight" data-wow-delay="0.3s">
                        <h5 class="sub-title pe-3">Tentang Aplikasi</h5>
                        <h1 class="display-5 mb-4">Aplikasi Terpercaya untuk Informasi Perjalanan Anda.</h1>
                        <p class="mb-4">Kami menyediakan informasi real-time tentang cakupan sinyal, kondisi jalan, dan tingkat keamanan di sepanjang rute perjalanan Anda. Dengan aplikasi ini, perjalanan Anda menjadi lebih aman, nyaman, dan terencana dengan baik.</p>
                        <div class="row gy-4 align-items-center">
                            <div class="col-12 col-sm-6 d-flex align-items-center">
                                <i class="fas fa-map-marked-alt fa-3x text-secondary"></i>
                                <h5 class="ms-4">Informasi Peta Terkini</h5>
                            </div>
                            <div class="col-12 col-sm-6 d-flex align-items-center">
                                <i class="fas fa-signal fa-3x text-secondary"></i>
                                <h5 class="ms-4">Cakupan Sinyal Terbaik</h5>
                            </div>
                            <div class="col-4 col-md-3">
                                <div class="bg-light text-center rounded p-3">
                                    <div class="mb-2">
                                        <i class="fas fa-road fa-4x text-primary"></i>
                                    </div>
                                    <h1 class="display-5 fw-bold mb-2">24/7</h1>
                                    <p class="text-muted mb-0">Layanan Real-Time</p>
                                </div>
                            </div>
                            <div class="col-8 col-md-9">
                                <div class="mb-5">
                                    <p class="text-primary h6 mb-3"><i class="fa fa-check-circle text-secondary me-2"></i> Informasi Akurat dan Terpercaya</p>
                                    <p class="text-primary h6 mb-3"><i class="fa fa-check-circle text-secondary me-2"></i> Data Real-Time & Responsif</p>
                                    <p class="text-primary h6 mb-3"><i class="fa fa-check-circle text-secondary me-2"></i> Mendukung Perjalanan Aman Anda</p>
                                </div>
                                <div class="d-flex flex-wrap">
                                    <div id="phone-tada" class="d-flex align-items-center justify-content-center me-4">
                                        <a href="#" class="position-relative wow tada" data-wow-delay=".9s">
                                            <i class="fa fa-phone-alt text-primary fa-3x"></i>
                                            <div class="position-absolute" style="top: 0; left: 25px;">
                                                <span><i class="fa fa-comment-dots text-secondary"></i></span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                        <span class="text-primary">Punya Pertanyaan?</span>
                                        <span class="text-secondary fw-bold fs-5" style="letter-spacing: 2px;">Hubungi Kami: +62 809 89898989</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid py-5">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-xl-7 wow fadeInRight" data-wow-delay="0.3s">
                        <h5 class="sub-title pe-3">Teknologi Canggih</h5>
                        <h1 class="display-5 mb-4">Menggunakan AI untuk Rekomendasi Terbaik</h1>
                        <p class="mb-4">Aplikasi kami memanfaatkan teknologi Generative AI terkini untuk memberikan rekomendasi optimal terkait cakupan sinyal, kondisi jalan, dan tingkat keamanan. Dengan AI, informasi yang Anda terima selalu relevan dan up-to-date, memastikan perjalanan Anda selalu aman dan nyaman.</p>
                        <div class="row gy-4 align-items-center">
                            <div class="col-12 col-sm-6 d-flex align-items-center">
                                <i class="fas fa-brain fa-3x text-secondary"></i>
                                <h5 class="ms-4">Rekomendasi Cerdas</h5>
                            </div>
                            <div class="col-12 col-sm-6 d-flex align-items-center">
                                <i class="fas fa-cogs fa-3x text-secondary"></i>
                                <h5 class="ms-4">AI Generatif Terkini</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 wow fadeInLeft" data-wow-delay="0.1s">
                        <div class="bg-light rounded">
                            <img src="img/about-1.jpg" class="img-fluid w-100" alt="Image">
                            <!-- <img src="img/about-1.jpg" class="img-fluid w-100 border-bottom border-5 border-primary" style="border-top-right-radius: 300px; border-top-left-radius: 300px;" alt="Image"> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <!-- Counter Facts Start -->
        <div class="container-fluid counter-facts py-5">
            <div class="container py-5">
                <div class="row g-4">
                    <div class="col-12 col-sm-6 col-md-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="counter">
                            <div class="counter-icon">
                                <i class="fas fa-bus-alt"></i>
                            </div>
                            <div class="counter-content">
                                <h3>Jumlah Transportasi Umum</h3>
                                <div class="d-flex align-items-center justify-content-center">
                                    <span class="counter-value" data-toggle="counter-up">125</span>
                                    <h4 class="text-secondary mb-0" style="font-weight: 600; font-size: 25px;">+</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="counter">
                            <div class="counter-icon">
                                <i class="fas fa-wifi"></i>
                            </div>
                            <div class="counter-content">
                                <h3>Daerah yang Dicakup Jaringan</h3>
                                <div class="d-flex align-items-center justify-content-center">
                                    <span class="counter-value" data-toggle="counter-up">200</span>
                                    <h4 class="text-secondary mb-0" style="font-weight: 600; font-size: 25px;">+</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="counter">
                            <div class="counter-icon">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                            <div class="counter-content">
                                <h3>Daerah Aman Dilalui</h3>
                                <div class="d-flex align-items-center justify-content-center">
                                    <span class="counter-value" data-toggle="counter-up">300</span>
                                    <h4 class="text-secondary mb-0" style="font-weight: 600; font-size: 25px;">+</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="counter">
                            <div class="counter-icon">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <div class="counter-content">
                                <h3>Akurasi Prediksi AI</h3>
                                <div class="d-flex align-items-center justify-content-center">
                                    <span class="counter-value" data-toggle="counter-up">98</span>
                                    <h4 class="text-secondary mb-0" style="font-weight: 600; font-size: 25px;">%</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Counter Facts End -->


        <!-- Services Start -->
        <div class="container-fluid service overflow-hidden pt-5">
            <div class="container py-5">
                <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="sub-style">
                        <h5 class="sub-title text-primary px-3">Fitur Aplikasi</h5>
                    </div>
                    <h1 class="display-5 mb-4">Solusi Pintar untuk Perjalanan Anda</h1>
                    <p class="mb-0">Temukan fitur-fitur canggih yang akan membantu Anda dalam perjalanan, pelaporan, dan pemantauan status di wilayah Jawa Barat.</p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item">
                            <div class="service-inner">
                                <div class="service-img">
                                    <img src="img/service-1.jpg" class="img-fluid w-100 rounded" alt="Image">
                                </div>
                                <div class="service-title">
                                    <div class="service-title-name">
                                        <div class="bg-primary text-center rounded p-3 mx-5 mb-4">
                                            <a href="#" class="h4 text-white mb-0">Perjalanan</a>
                                        </div>
                                        <a class="btn bg-light text-secondary rounded-pill py-3 px-5 mb-4" href="{{ url('/perjalanan') }}">Jelajahi Lebih Lanjut</a>
                                    </div>
                                    <div class="service-content pb-4">
                                        <a href="#"><h4 class="text-white mb-4 py-3">Rekomendasi Rute AI</h4></a>
                                        <div class="px-4">
                                            <p class="mb-4">Dapatkan rekomendasi rute perjalanan yang aman dan efisien dengan bantuan AI, yang mempertimbangkan kondisi jalan, keamanan, dan ketersediaan transportasi umum.</p>
                                            <a class="btn btn-primary border-secondary rounded-pill py-3 px-5" href="{{ url('/perjalanan') }}">Jelajahi Lebih Lanjut</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item">
                            <div class="service-inner">
                                <div class="service-img">
                                    <img src="img/service-2.jpg" class="img-fluid w-100 rounded" alt="Image">
                                </div>
                                <div class="service-title">
                                    <div class="service-title-name">
                                        <div class="bg-primary text-center rounded p-3 mx-5 mb-4">
                                            <a href="#" class="h4 text-white mb-0">Lapor Pak</a>
                                        </div>
                                        <a class="btn bg-light text-secondary rounded-pill py-3 px-5 mb-4" href="{{ url('/laporpak') }}">Lihat Detail</a>
                                    </div>
                                    <div class="service-content pb-4">
                                        <a href="#"><h4 class="text-white mb-4 py-3">Laporan Kriminal & Kondisi Jalan</h4></a>
                                        <div class="px-4">
                                            <p class="mb-4">Laporkan tindakan kriminal, kondisi jalan rusak, atau masalah konektivitas di wilayah Anda dengan mudah dan cepat melalui fitur ini.</p>
                                            <a class="btn btn-primary border-secondary rounded-pill text-white py-3 px-5" href="{{ url('/laporpak') }}">Lihat Detail</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item">
                            <div class="service-inner">
                                <div class="service-img">
                                    <img src="img/service-3.jpg" class="img-fluid w-100 rounded" alt="Image">
                                </div>
                                <div class="service-title">
                                    <div class="service-title-name">
                                        <div class="bg-primary text-center rounded p-3 mx-5 mb-4">
                                            <a href="#" class="h4 text-white mb-0">Rekomendasi</a>
                                        </div>
                                        <a class="btn bg-light text-secondary rounded-pill py-3 px-5 mb-4" href="{{ url('/status') }}">Selengkapnya</a>
                                    </div>
                                    <div class="service-content pb-4">
                                        <a href="#"><h4 class="text-white mb-4 py-3">Rekomendasi Perbaikan Transportasi dan Infrastruktur</h4></a>
                                        <div class="px-4">
                                            <p class="mb-4">Dapatkan rekomendasi dari AI untuk perbaikan transportasi dan infrastruktur di Jawa Barat, termasuk saran untuk peningkatan kondisi jalan, pengurangan tingkat kriminalitas, dan pengembangan sistem transportasi umum.</p>
                                            <a class="btn btn-primary border-secondary rounded-pill text-white py-3 px-5" href="{{ url('/status') }}">Selengkapnya</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services End -->

        <!-- Footer Start -->
        <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="text-secondary mb-4">Informasi Kontak</h4>
                            <a href=""><i class="fa fa-map-marker-alt me-2"></i> Jalan Braga No.13, Kota Bandung</a>
                            <a href=""><i class="fas fa-envelope me-2"></i> info@rutejabar.com</a>
                            <a href=""><i class="fas fa-phone me-2"></i> +62 809 89898989</a>
                            <a href="" class="mb-3"><i class="fas fa-print me-2"></i> +62 809 89898989</a>
                            <div class="d-flex align-items-center">
                                <i class="fas fa-share fa-2x text-secondary me-2"></i>
                                <a class="btn mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn mx-1" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="text-secondary mb-4">Our Services</h4>
                            <a href="{{ url('/perjalanan') }}" class=""><i class="fas fa-angle-right me-2"></i> Perjalanan</a>
                            <a href="{{ url('/laporpak') }}" class=""><i class="fas fa-angle-right me-2"></i> LaporPak</a>
                            <a href="{{ url('/status') }}" class=""><i class="fas fa-angle-right me-2"></i> Status</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        
        <!-- Copyright Start -->
        <div class="container-fluid copyright py-4">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-md-6 text-center text-md-start mb-md-0">
                        <span class="text-white"><a href="#" class="border-bottom text-white"><i class="fas fa-copyright text-light me-2"></i>RUTEJABAR</a>, All right reserved.</span>
                    </div>
                    <div class="col-md-6 text-center text-md-end text-white">
                        <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                        <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                        <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                        Designed By <a class="border-bottom text-white" href="https://htmlcodex.com">HTML Codex</a> Distributed By <a class="border-bottom text-white" href="https://themewagon.com">ThemeWagon</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-lg-square back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>
    </body>

</html>