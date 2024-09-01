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
                        <a href="{{ url('/') }}" class="nav-item nav-link ">Beranda</a>
                        <a href="{{ url('/perjalanan') }}" class="nav-item nav-link ">Perjalanan</a>
                        <a href="{{ url('/laporpak') }}" class="nav-item nav-link active">LaporPak</a>
                        <a href="{{ url('/status') }}" class="nav-item nav-link">Rekomendasi</a>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">LaporPak</h1>
                <ol class="breadcrumb justify-content-center text-white mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index.html" class="text-white">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="#" class="text-white">LaporPak</a></li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->

        <!-- Contact Start -->
        <div class="container-fluid contact overflow-hidden py-5">
            <div class="container py-5">
                <div class="row g-5 mb-5 justify-content-center">
                    <div class="col-lg-8 wow fadeIn" data-wow-delay="0.1s">
                        <div class="sub-style text-center">
                            <h5 class="sub-title text-primary pe-3">Form Laporan</h5>
                        </div>
                        <p class="mb-5 text-center">Lengkapi form di bawah ini untuk melaporkan informasi terkait rute perjalanan di Jawa Barat.</p>
                        <form id="reportForm">
                            <div class="row g-4">
                                <div class="col-12">
                                    <div class="form-floating">
                                        <select class="form-control" id="laporanType" required>
                                            <option value="" disabled selected>Pilih jenis laporan</option>
                                            <option value="Moda transportasi">Moda Transportasi</option>
                                            <option value="Kondisi jalan">Kondisi Jalan</option>
                                            <option value="Tingkat keamanan">Tingkat Keamanan</option>
                                            <option value="Koneksi internet">Koneksi Internet</option>
                                        </select>
                                        <label for="laporanType">Laporan</label>
                                    </div>
                                </div>
                                <div id="additionalFields" class="col-12"></div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="ruteAsal" placeholder="Rute Asal" required>
                                        <label for="ruteAsal">Rute Asal</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="ruteTujuan" placeholder="Rute Tujuan" required>
                                        <label for="ruteTujuan">Rute Tujuan</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" id="laporanDetail" placeholder="Detail Laporan" style="height: 150px;" required></textarea>
                                        <label for="laporanDetail">Detail Laporan</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="file" class="form-control" id="laporanImage" accept="image/*" required>
                                        <label for="laporanImage">Unggah Gambar (Opsional)</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary w-100 py-3">Kirim Laporan</button>
                                </div>
                                <div class="col-12">
                                    <!-- Result will be shown here -->
                                    <div id="resultContainer"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->

        <script>
        document.getElementById('laporanType').addEventListener('change', function() {
            const selectedType = this.value;
            const additionalFields = document.getElementById('additionalFields');

            additionalFields.innerHTML = ''; // Clear previous fields

            if (selectedType === 'Moda transportasi') {
                additionalFields.innerHTML = `
                    <div class="form-floating">
                        <select class="form-control" id="tipeTransportasi" required>
                            <option value="" disabled selected>Pilih tipe transportasi</option>
                            <option value="Angkutan Umum">Angkutan Umum</option>
                            <option value="Travel / Shuttle">Travel / Shuttle</option>
                            <option value="Kereta Api">Kereta Api</option>
                        </select>
                        <label for="tipeTransportasi">Tipe Transportasi</label>
                    </div>
                `;
            } else if (selectedType === 'Kondisi jalan') {
                additionalFields.innerHTML = `
                    <div class="form-floating">
                        <select class="form-control" id="kondisiJalan" required>
                            <option value="" disabled selected>Pilih kondisi jalan</option>
                            <option value="Sangat Rusak">Sangat Rusak</option>
                            <option value="Rusak">Rusak</option>
                            <option value="Baik">Baik</option>
                            <option value="Sangat Baik">Sangat Baik</option>
                        </select>
                        <label for="kondisiJalan">Kondisi Jalan</label>
                    </div>
                `;
            } else if (selectedType === 'Tingkat keamanan') {
                additionalFields.innerHTML = `
                    <div class="form-floating">
                        <select class="form-control" id="tingkatKeamanan" required>
                            <option value="" disabled selected>Pilih tingkat keamanan</option>
                            <option value="Tinggi">Tinggi</option>
                            <option value="Sedang">Sedang</option>
                            <option value="Rendah">Rendah</option>
                        </select>
                        <label for="tingkatKeamanan">Tingkat Keamanan</label>
                    </div>
                `;
            } else if (selectedType === 'Koneksi internet') {
                additionalFields.innerHTML = `
                    <div class="form-floating">
                        <select class="form-control" id="kualitasKoneksi" required>
                            <option value="" disabled selected>Pilih kualitas koneksi</option>
                            <option value="Baik">Baik</option>
                            <option value="Sedang">Sedang</option>
                            <option value="Buruk">Buruk</option>
                        </select>
                        <label for="kualitasKoneksi">Kualitas Koneksi</label>
                    </div>
                `;
            }
        });

        document.getElementById('reportForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent the default form submission

            // Assume the form submission is successful
            const resultContainer = document.getElementById('resultContainer');
            resultContainer.innerHTML = '<div class="alert alert-success">Laporan berhasil diterima.</div>';

            // Optionally, you can clear the form after submission
            this.reset();
            document.getElementById('additionalFields').innerHTML = ''; // Clear dynamically added fields
        });
        </script>


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
                            <a href="{{ url('/status') }}" class=""><i class="fas fa-angle-right me-2"></i> Rekomendasi</a>
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