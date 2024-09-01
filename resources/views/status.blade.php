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
                        <a href="{{ url('/laporpak') }}" class="nav-item nav-link">LaporPak</a>
                        <a href="{{ url('/status') }}" class="nav-item nav-link active">Rekomendai</a>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Rekomendasi</h1>
                <ol class="breadcrumb justify-content-center text-white mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index.html" class="text-white">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="#" class="text-white">Rekomendasi</a></li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->

        <!-- Recommendation Start -->
        <div class="container-fluid contact overflow-hidden py-5">
            <div class="container py-5">
                <div class="office pt-5">
                    <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="sub-style">
                            <h5 class="sub-title text-primary px-3">Rekomendasi</h5>
                        </div>
                        <h1 class="display-5 mb-4">Peningkatan Transportasi & Infrastruktur di Jawa Barat</h1>
                        <!-- <p class="mb-0">Temukan informasi tentang transportasi publik, tingkat keamanan, koneksi internet, dan kondisi jalan di berbagai daerah di Jawa Barat untuk memastikan perjalanan yang nyaman dan aman.</p> -->
                    </div>
                    <div class="row g-4 justify-content-center">
                        <div class="col-12 pt-5 wow" data-wow-delay="0.1s">
                            <div class="rounded h-100">
                                <div style="width: 100%">
                                    <iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" 
                                    src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=jawa%20barat+(My%20Business%20Name)&amp;t=&amp;z=8&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
                                    </iframe>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="office-item p-4" data-type="transportation">
                                <div class="office-img mb-4">
                                    <img src="img/public-transportation.jpg" class="img-fluid w-100 rounded" alt="Transportasi Publik" style="height: 200px; object-fit: cover;">
                                </div>
                                <div class="office-content d-flex flex-column">
                                    <h4 class="mb-2">Transportasi Publik</h4>
                                    <p class="mb-0">Loading...</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="office-item p-4" data-type="safety">
                                <div class="office-img mb-4">
                                    <img src="img/safety-level.jpg" class="img-fluid w-100 rounded" alt="Tingkat Keamanan" style="height: 200px; object-fit: cover;">
                                </div>
                                <div class="office-content d-flex flex-column">
                                    <h4 class="mb-2">Tingkat Keamanan</h4>
                                    <p class="mb-0">Loading...</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="office-item p-4" data-type="internet">
                                <div class="office-img mb-4">
                                    <img src="img/internet-connectivity.jpg" class="img-fluid w-100 rounded" alt="Koneksi Internet" style="height: 200px; object-fit: cover;">
                                </div>
                                <div class="office-content d-flex flex-column">
                                    <h4 class="mb-2">Koneksi Internet</h4>
                                    <p class="mb-0">Loading...</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                            <div class="office-item p-4" data-type="roads">
                                <div class="office-img mb-4">
                                    <img src="img/road-condition.jpg" class="img-fluid w-100 rounded" alt="Kondisi Jalan" style="height: 200px; object-fit: cover;">
                                </div>
                                <div class="office-content d-flex flex-column">
                                    <h4 class="mb-2">Kondisi Jalan</h4>
                                    <p class="mb-0">Loading...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            // Function to fetch data from the Dashscope API
            async function fetchData() {
                const response = await fetch('https://cors-anywhere.herokuapp.com/https://dashscope-intl.aliyuncs.com/api/v1/apps/a778298994234c2582f6dd67164aba76/completion', {
                    method: 'POST',
                    headers: {
                        'Authorization': 'Bearer sk-1fb1b582fa3c420fb68a8e88442e6944',
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({
                        input: {
                            prompt: 'berikan data di jawa barat'
                        },
                        parameters: {},
                        debug: {}
                    })
                });
                return response.json();
            }

            // Update HTML content with fetched data
            async function updateContent() {
                const apiResponse = await fetchData();
                console.log('API Response:', apiResponse);

                // Extract the text field and parse it as JSON
                const text = apiResponse.output.text.replace(/^```json\n|\n```$/g, '');
                const data = JSON.parse(text); // Parse the JSON string

                console.log('Parsed Data:', data); // Log the parsed data to check its structure

                if (data) {
                    // Access public transport improvement data
                    const publicTransportImprovements = data.public_transport_improvement_needed;
                    console.log(publicTransportImprovements);
                    // let improvementText = 'Public Transport Improvements Needed: ';
                    improvementText = publicTransportImprovements; // Assuming this is a string now

                    document.querySelector('.office-item[data-type="transportation"] .office-content p').textContent = 
                        improvementText || 'No data available';

                    // Access area increase security data
                    const securityAreas = data.areas_security_improvement;
                    console.log(securityAreas);
                    // let securityText = 'Areas Security Improvements Needed: ';
                    let securityText =''
                    securityAreas.forEach(item => {
                        // Get the keys dynamically
                        const keys = Object.keys(item);
                        // Assuming there are only two keys: road and repair
                        securityText += `${item[keys[0]]}: ${item[keys[1]]}; `;
                    });

                    document.querySelector('.office-item[data-type="safety"] .office-content p').textContent = 
                        securityText || 'No data available';

                    // Access internet improvement data
                    const internetConnectivity = data.internet_connectivity_improvement;
                    console.log(internetConnectivity);
                    // let improvementText = 'Public Transport Improvements Needed: ';
                    improvementText = internetConnectivity; // Assuming this is a string now

                    document.querySelector('.office-item[data-type="internet"] .office-content p').textContent = 
                        improvementText || 'No data available';


                    // Access roads repair needed data
                    const roadsToFix = data.roads_repair_needed;
                    console.log(roadsToFix);
                    // let roadText = 'Roads Repair Needed: '; // Initialize the text
                    let roadText =''
                    roadsToFix.forEach(item => {
                        // Get the keys dynamically
                        const keys = Object.keys(item);
                        // Assuming there are only two keys: road and repair
                        roadText += `${item[keys[0]]}: ${item[keys[1]]}; `;
                    });

                    document.querySelector('.office-item[data-type="roads"] .office-content p').textContent = 
                        roadText || 'No data available';

                } else {
                    console.error("Data not found in API response.");
                }
            }

            // Call the updateContent function on page load
            document.addEventListener('DOMContentLoaded', updateContent);

        </script>

        <!-- Recommendation End -->
     

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