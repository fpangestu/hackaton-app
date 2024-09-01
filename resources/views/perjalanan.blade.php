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
                        <a href="{{ url('/perjalanan') }}" class="nav-item nav-link active">Perjalanan</a>
                        <a href="{{ url('/laporpak') }}" class="nav-item nav-link">LaporPak</a>
                        <a href="{{ url('/status') }}" class="nav-item nav-link">Rekomendasi</a>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Perjalanan</h1>
                <ol class="breadcrumb justify-content-center text-white mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index.html" class="text-white">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="#" class="text-white">Perjalanan</a></li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->

        <!-- Contact Start -->
        <div class="container-fluid contact overflow-hidden py-5">
            <div class="container py-5">
                <div class="row g-5 mb-5">
                    <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.1s">
                        <div class="sub-style">
                            <h5 class="sub-title text-primary pe-3">Jawa Barat</h5>
                        </div>
                        <!-- <h1 class="display-5 mb-4">Rute Anda</h1> -->
                        <p class="mb-0">Temukan rute terbaik untuk perjalanan Anda di Jawa Barat. Cukup masukkan alamat asal dan tujuan Anda.</p>
                        <div class="row g-4 justify-content-center">
                            <div class="col-12 pt-5 wow zoomIn" data-wow-delay="0.1s">
                                <div class="rounded h-100">
                                    <iframe class="rounded w-100" 
                                    style="height: 500px;" 
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127408.85977128196!2d107.6048096353551!3d-6.90597749142216!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e64bce9a9299%3A0xa6d87b7f7e745ee9!2sWest%20Java%2C%20Indonesia!5e0!3m2!1sen!2sid!4v1694259649153!5m2!1sen!2sid" 
                                    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.3">
                        <div class="sub-style">
                            <h5 class="sub-title text-primary pe-3">Rute Anda</h5>
                        </div>
                        <!-- <h1 class="display-5 mb-4">Kirim Pesan Anda</h1> -->
                        <p class="mb-3">Gunakan form di bawah ini untuk mendapatkan rekomendasi rute perjalanan terbaik di Jawa Barat.</p>
                        <form id="routeForm">
                            <div class="row g-4">
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="origin" placeholder="Alamat Asal" required>
                                        <label for="origin">Alamat Asal</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="destination" placeholder="Alamat Tujuan" required>
                                        <label for="destination">Alamat Tujuan</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary w-100 py-3">Cari Rute</button>
                                </div>
                                <div class="col-12">
                                    <!-- Loading screen and result will be shown here -->
                                    <div id="resultContainer"></div>
                                </div>
                            </div>
                        </form>

                        <script>
                            document.getElementById('routeForm').addEventListener('submit', function(event) {
                            event.preventDefault();

                            // Get values from input fields
                            const origin = document.getElementById('origin').value;
                            const destination = document.getElementById('destination').value;

                            // Create prompt
                            const prompt = `rute dari ${origin}, ke ${destination}`;

                            // Show loading screen
                            const resultContainer = document.getElementById('resultContainer');
                            resultContainer.innerHTML = '<div class="text-center py-3"><div class="spinner-border text-primary" role="status"><span class="visually-hidden">Loading...</span></div></div>';

                            // Send request using fetch API
                            fetch('https://cors-anywhere.herokuapp.com/https://dashscope-intl.aliyuncs.com/api/v1/apps/3e80a84db55142408a98c29fbeff87a5/completion', {
                                method: 'POST',
                                headers: {
                                    'Authorization': 'Bearer sk-1fb1b582fa3c420fb68a8e88442e6944',
                                    'Content-Type': 'application/json'
                                },
                                body: JSON.stringify({
                                    input: {
                                        prompt: prompt
                                    },
                                    parameters: {},
                                    debug: {}
                                })
                            })
                            .then(response => {
                                if (!response.ok) {
                                    throw new Error('Network response was not ok');
                                }
                                return response.json(); // Use .json() to parse response as JSON
                            })
                            .then(data => {
                                console.log('Parsed Response:', data); // Log the parsed response

                                try {
                                    // Extracting the 'text' field and removing code block formatting
                                    const outputText = data.output.text.replace(/^```json\n|\n```$/g, '');
                                    console.log(outputText);
                                    const outputJson = JSON.parse(outputText); // Parse the cleaned JSON string

                                    // Create a formatted output for display
                                    const formattedOutput = outputJson.map(item => {
                                        // Log each item for debugging
                                        console.log('Current Item:', item);

                                        return `
                                            <div>
                                                <h5>Moda Transportasi: ${item[" moda_transportasi"] ? item[" moda_transportasi"].trim() : 'N/A'}</h5>
                                                <p>Rute: ${item[" rute"] ? item[" rute"].trim() : 'N/A'}</p>
                                                <p>Durasi Perjalanan: ${item[" durasi_perjalanan"] ? item[" durasi_perjalanan"].trim() : 'N/A'}</p>
                                                <p>Tingkat Keamanan: ${item[" tingkat_keamanan"] ? item[" tingkat_keamanan"].trim() : 'N/A'}</p>
                                                <p>Koneksi Internet: ${item[" koneksi_internet"] ? item[" koneksi_internet"].trim() : 'N/A'}</p>
                                                <p>Kondisi Jalan: ${item[" kondisi_jalan"] ? item[" kondisi_jalan"].trim() : 'N/A'}</p>
                                                <hr>
                                            </div>
                                        `;
                                    }).join('');

                                    // Display the output in the result container
                                    resultContainer.innerHTML = `<div class="alert alert-success" role="alert">${formattedOutput}</div>`;
                                } catch (error) {
                                    // Handle JSON parsing errors
                                    console.error('Failed to parse JSON:', error);
                                    resultContainer.innerHTML = `<div class="alert alert-danger" role="alert">Error: Invalid JSON response</div>`;
                                }
                            })
                            .catch((error) => {
                                // Handle network or other errors
                                console.error('Fetch Error:', error);
                                resultContainer.innerHTML = `<div class="alert alert-danger" role="alert">Error: ${error.message}</div>`;
                            });

                        });
                        </script>


                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->        

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