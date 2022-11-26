<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <title>CUSA - COMPREHENSIVE SYMPOSIUM ON ULTRASOUND FOR ANAESTHESIOLOGIST</title>

    <link rel="icon" type="image/x-icon" href="{{asset('web/images/logo-favicon.png')}}">

    <link rel="stylesheet" href="{{asset('web/css/css-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('web/css/css-all-fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('web/css/css-flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('web/css/css-animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('web/css/css-magnific-popup.min.css')}}">
    <link rel="stylesheet" href="{{asset('web/css/css-owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('web/css/css-style.css')}}">
    <link rel="stylesheet" href="{{asset('web/css/style.css')}}">
</head>

<body>

    <div class="preloader">
        <div class="loader">
            <div class="loader-box-1"></div>
            <div class="loader-box-2"></div>
        </div>
    </div>


    <header class="header">

        <div class="header-top">
            
                <div class="header-top-wrapper">
                    <img src="{{asset('web/images/aiimscusa_main.png')}}" />
                </div>
        </div>
        <div class="main-navigation">
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand" href="index.html">
                        <img src="{{asset('web/images/logo-logo.png')}}" alt="logo">
                    </a>
                    <div class="mobile-menu-right">
                        <a href="#" class="mobile-search-btn search-box-outer"><i class="far fa-search"></i></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"><i class="far fa-bars"></i></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="main_nav">
                        <ul class="navbar-nav">
                            <li class="nav-item"><a class="nav-link active" href="/"> Home </a></li>
                            <li class="nav-item"><a class="nav-link" href="{{route('about-us')}}">Abstract</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{route('organiser')}}"> Organisers </a></li>
                             <li class="nav-item"><a class="nav-link" href="{{route('commitee')}}"> Committee </a></li>
                             <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle " href="#"
                                    data-bs-toggle="dropdown">Faculty</a>
                                <ul class="dropdown-menu fade-up">
                                    <li><a class="dropdown-item" href="{{route('international_faculty')}}">International Faculty</a></li>
                                    <li><a class="dropdown-item" href="{{route('national_faculty')}}">National Faculty</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" target="_blank" href="{{asset('web/pdf/Program.pdf')}}"> Scientific Program </a></li>
                            

                            
                           
                       
                            

                            <!--li class="nav-item"><a class="nav-link"  href="{{route('contact')}}">Contact</a></li-->
                            
                            <li class="nav-item"><a class="nav-link" href="{{route('download')}}">Download</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{route('gallery')}}"> Gallery </a></li>

                        </ul>
                        <div class="header-nav-right">
                            {{-- <div class="header-nav-search">
                                <a href="#" class="search-box-outer"><i class="far fa-search"></i></a>
                            </div> --}}
                            <div class="header-btn">
                                <a href="https://docs.google.com/forms/d/e/1FAIpQLSecmHa4UtvlI_YJDZ6mDGk47g2-wnSQtSE-OHdL9PQq-1g0CA/viewform?usp=sf_link" class="theme-btn">Registration<i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>


    <div class="search-popup">
        <button class="close-search"><span class="far fa-times"></span></button>
        <form action="#">
            <div class="form-group">
                <input type="search" name="search-field" placeholder="Search Here..." required>
                <button type="submit"><i class="far fa-search"></i></button>
            </div>
        </form>
    </div>

    <main class="main">
     @yield('content')
    </main>

    <footer class="footer-area">
        <div class="footer-widget">
            <div class="container pt-60 pb-50">
                <div class="row footer-widget-wrapper">
                    <div class="col-md-6 col-lg-4">
                        <div class="footer-widget-box about-us">
                            <a href="#" class="footer-logo">
                                <img src="{{asset('web/images/logo-logo-light.png')}}" alt="">
                            </a>
                            <p class="mb-20">
                                We are many variations of passages available but the majority have suffered alteration
                                in some form by injected humour.
                            </p>
                            <ul class="footer-contact">
                                <li><i class="far fa-map-marker-alt"></i>25/B Milford Road, New York</li>
                                <li><a href="tel:+21236547898"><i class="far fa-phone"></i>+2 123 654 7898</a></li>
                                <li><a href="/cdn-cgi/l/email-protection#4920272f26092c31282439252c672a2624"><i
                                            class="far fa-envelope"></i><span class="__cf_email__"
                                            data-cfemail="e0898e868fa08598818d908c85ce838f8d">[email&nbsp;protected]</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2">
                        <div class="footer-widget-box list">
                            <h4 class="footer-widget-title">Quick Links</h4>
                            <ul class="footer-list">
                                <li><a href="#"><i class="fas fa-caret-right"></i> About Us</a></li>
                                <li><a href="#"><i class="fas fa-caret-right"></i> Our Psychiatrist</a></li>
                                <li><a href="#"><i class="fas fa-caret-right"></i> Terms Of Service</a></li>
                                <li><a href="#"><i class="fas fa-caret-right"></i> Privacy policy</a></li>
                                <li><a href="#"><i class="fas fa-caret-right"></i> Our Services</a></li>
                                <li><a href="#"><i class="fas fa-caret-right"></i> Latest Blog</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2">
                        <div class="footer-widget-box list">
                            <h4 class="footer-widget-title">Support</h4>
                            <ul class="footer-list">
                                <li><a href="#"><i class="fas fa-caret-right"></i> Online Support</a></li>
                                <li><a href="#"><i class="fas fa-caret-right"></i> FAQ's</a></li>
                                <li><a href="#"><i class="fas fa-caret-right"></i> Free Consultancy</a></li>
                                <li><a href="#"><i class="fas fa-caret-right"></i> 24/7 Service</a></li>
                                <li><a href="#"><i class="fas fa-caret-right"></i> Make Call</a></li>
                                <li><a href="#"><i class="fas fa-caret-right"></i> Contact Support</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="footer-widget-box list">
                            <h4 class="footer-widget-title">Opening Hour</h4>
                            <div class="footer-opening">
                                <ul>
                                    <li>Monday: <span>08:00 AM - 18:00 PM</span></li>
                                    <li>Tuesday: <span>08:00 AM - 18:00 PM</span></li>
                                    <li>Wednesday: <span>08:00 AM - 18:00 PM</span></li>
                                    <li>Thursday: <span>08:00 AM - 18:00 PM</span></li>
                                    <li>Friday: <span>08:00 AM - 18:00 PM</span></li>
                                    <li>Saturday: <span>08:00 AM - 18:00 PM</span></li>
                                    <li>Sunday: <span>08:00 AM - 18:00 PM</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <ul class="footer-social">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <div class="footer-newsletter">
                                <div class="subscribe-form">
                                    <form action="#">
                                        <input type="email" class="form-control" placeholder="Your Email">
                                        <button class="theme-btn" type="submit">
                                            <span class="far fa-paper-plane"></span> Subscribe
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 align-self-center">
                        <p class="copyright-text">
                            &copy; Copyright <span id="date"></span> <a href="#"> MINDTOX </a> All Rights
                            Reserved.
                        </p>
                    </div>
                    <div class="col-lg-6 align-self-center">
                        <ul class="footer-menu">
                            <li><a href="#">Support</a></li>
                            <li><a href="#">Terms Of Services</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <a href="#" id="scroll-top"><i class="far fa-long-arrow-up"></i></a>


    <script data-cfasync="false" src="{{asset('web/js/cloudflare-static-email-decode.min.js')}}"></script>
    <script src="{{asset('web/js/js-jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('web/js/js-modernizr.min.js')}}"></script>
    <script src="{{asset('web/js/js-bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('web/js/js-imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('web/js/js-jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('web/js/js-isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('web/js/js-jquery.appear.min.js')}}"></script>
    <script src="{{asset('web/js/js-jquery.easing.min.js')}}"></script>
    <script src="{{asset('web/js/js-owl.carousel.min.js')}}"></script>
    <script src="{{asset('web/js/js-counter-up.js')}}"></script>
    <script src="{{asset('web/js/js-wow.min.js')}}"></script>
    <script src="{{asset('web/js/js-main.js')}}"></script>
</body>

</html>
