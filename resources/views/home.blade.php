@extends('Layout.main')

@push('title')
    <title> Home </title>
@endpush

<section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
            <i class="bi bi-envelope d-flex align-items-center"><a href="#">02190161.cst@rub.edu.bt</a></i>
            <i class="bi bi-phone d-flex align-items-center ms-4"><span>+975 77334451</span></i>
        </div>
    </div>
</section>

@section('main-section')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        
        <link
            href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
            rel="stylesheet">

        <link href="vendor/aos/aos.css" rel="stylesheet">
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
        <link href="vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

        <link href="css\style.css" rel="stylesheet">

    </head>

    <body>
     
        <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
            <div class="container" data-aos="fade-in">
                <h1>Welcome</h1>
                <h2>This is the Registration Site i did for learning. Hope you enjoy it</h2>
            </div>
        </section>

        <main id="main">

            <section id="why-us" class="why-us">
                <div class="container">

                    <div class="row">
                        <div class="col-xl-4 col-lg-5" data-aos="fade-up">
                            <div class="content">
                                <h3>Why Choose laravel</h3>
                                <p>
                                    Laravel is a popular PHP framework for web application development.
                                    It offers a range of features and tools that make it a popular choice 
                                    among developers. MVC architecture: Laravel uses the Model-View-Controller
                                    (MVC) architecture, which makes it easier to build applications with
                                    separate concerns for data, logic, and presentation.
                                </p>
                                <div class="text-center">
                                    <a href="#" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-7 d-flex">
                            <div class="icon-boxes d-flex flex-column justify-content-center">
                                <div class="row">
                                    <div class="col-xl-4 d-flex align-items-stretch" data-aos="fade-up"
                                        data-aos-delay="100">
                                        <div class="icon-box mt-4 mt-xl-0">
                                            <i class="bx bx-receipt"></i>
                                            <h4>CST</h4>
                                            <p>A college is an institution of higher education that provides undergraduate and/or graduate programs.</p>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 d-flex align-items-stretch" data-aos="fade-up"
                                        data-aos-delay="200">
                                        <div class="icon-box mt-4 mt-xl-0">
                                            <i class="bx bx-cube-alt"></i>
                                            <h4>Think outside of box</h4>
                                            <p>"Think outside the box" is a phrase used to encourage creativity and innovation.</p>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 d-flex align-items-stretch" data-aos="fade-up"
                                        data-aos-delay="300">
                                        <div class="icon-box mt-4 mt-xl-0">
                                            <i class="bx bx-images"></i>
                                            <h4>Photography</h4>
                                            <p>Photography is the art, science, and practice of creating still images by capturing light on a camera sensor or film.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            
                <footer id="footer">

                    <div class="container d-lg-flex py-4">

                        <div class="me-lg-auto text-center text-lg-start">
                            <div class="copyright">
                                &copy; Copyright <strong><span>Tashi</span></strong>. All Rights Reserved
                            </div>
                    
                        </div>
                        <div class="social-links text-center text-lg-right pt-3 pt-lg-0">
                            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                          
                        </div>
                    </div>
                </footer>

                <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
                        class="bi bi-arrow-up-short"></i></a>

                <script src="vendor/aos/aos.js"></script>
                <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
                <script src="vendor/glightbox/js/glightbox.min.js"></script>
                <script src="vendor/isotope-layout/isotope.pkgd.min.js"></script>
                <script src="vendor/swiper/swiper-bundle.min.js"></script>
                <script src="vendor/php-email-form/validate.js"></script>

                <script src="js\main.js"></script>

    </body>

    </html>
@endsection
