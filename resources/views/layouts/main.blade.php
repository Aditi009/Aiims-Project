<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <title>CUSA - COMPREHENSIVE SYMPOSIUM ON ULTRASOUND FOR ANAESTHESIOLOGIST</title>
<style>
 




</style>
    <link rel="icon" type="image/x-icon" href="{{asset('web/images/logo-favicon.png')}}">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="{{asset('web/css/css-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('web/css/css-all-fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('web/css/css-flaticon.css')}}">
    <!-- <link rel="stylesheet" href="{{asset('web/css/css-animate.min.css')}}"> -->
    <!-- <link rel="stylesheet" href="{{asset('web/css/css-magnific-popup.min.css')}}"> -->
    <!-- <link rel="stylesheet" href="{{asset('web/css/css-owl.carousel.min.css')}}"> -->
    <link rel="stylesheet" href="{{asset('web/css/css-style.css')}}">
    <link rel="stylesheet" href="{{asset('web/css/style.css')}}">
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
	<!-- Toastr -->
	<!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script> -->
</head>

<body>


    <div class="mpreloader">
        <div class="loader">
            <div class="loader-box-1"></div>
            <div class="loader-box-2"></div>
        </div>
    </div>
    <header class="header">
      


        <div class="header-top">
            
                <div class="header-top-wrapper">
                    <img class="webb" src="{{asset('web/images/aiimscusa_main.png')}}" />
                    <img class="mobb" src="{{asset('web/images/phone_banner.png')}}" />
                </div>
        </div>
        <div class="main-navigation">
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    {{-- <a class="navbar-brand" href="index.html">
                        <img src="{{asset('web/images/logo-logo.png')}}" alt="logo">
                    </a> --}}
                    <div class="mobile-menu-right">
                        <!-- <a href="#" class="mobile-search-btn search-box-outer"><i class="far fa-search"></i></a> -->
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"><i class="far fa-bars"></i></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="main_nav">
                        <ul class="navbar-nav">
                            <li class="nav-item"><a class="nav-link  {{  Request::path() == "/" ? 'active' : ''}}" href="/"> Home </a></li>
                            {{-- <li class="nav-item"><a class="nav-link" target="_blank" href="{{asset('web/pdf/Program.pdf')}}"> Scientific Program </a></li> --}}
                            {{-- <li class="nav-item"><a class="nav-link comming-soon" target="_blank" > Scientific Program </a></li> --}}
                            <li class="nav-item"><a class="nav-link {{  Request::path() == "scientific_program" ? 'active' : ''}}" href="{{route('scientific_program')}}" > Scientific Program </a></li>

                            <li class="nav-item"><a class="nav-link {{  Request::path() == "about-us" ? 'active' : ''}}" href="{{route('about-us')}}">Abstract</a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link  {{  (Request::path() == "national_faculty" || Request::path() == "international_faculty") ? 'active' : ''}} dropdown-toggle " href="#"
                                    data-bs-toggle="dropdown">Faculty</a>
                                <ul class="dropdown-menu fade-up">
                                    <li><a class="dropdown-item" href="{{route('international_faculty')}}">International Faculty</a></li>
                                    <li><a class="dropdown-item" href="{{route('national_faculty')}}">National Faculty</a></li>
                                </ul>
                            </li>
                            
                             <li class="nav-item"><a class="nav-link {{  Request::path() == "commitee" ? 'active' : ''}}" href="{{route('commitee')}}"> Committees </a></li>
                           
                            

                            
                           
                       
                            

                            
                            <li class="nav-item"><a class="nav-link  {{  Request::path() == "download" ? 'active' : ''}}" href="{{route('download')}}">Downloads</a></li>
                            <li class="nav-item"><a class="nav-link  {{  Request::path() == "gallery" ? 'active' : ''}}" href="{{route('gallery')}}"> Gallery </a></li>
                            <li class="nav-item"><a class="nav-link  {{  Request::path() == "contact" ? 'active' : ''}}"  href="{{route('contact')}}">Contact Us</a></li>


                        </ul>
                        <div class="header-nav-right">
                             <!-- <div class="header-nav-search">
                                <a href="#" class="search-box-outer"><i class="far fa-search"></i></a>
                            </div> -->
                            <div class="header-btn d-flex">
                                <a target="_blank" href="https://docs.google.com/forms/d/e/1FAIpQLSecmHa4UtvlI_YJDZ6mDGk47g2-wnSQtSE-OHdL9PQq-1g0CA/viewform" class="theme-btn">Registration<i class="far fa-arrow-right"></i></a>
                               

                            </div>
                          

                            {{-- <div class="">
                                <ul class="count">
                                    <li><span id="days"></span>days</li><span class="colon">:</span>
                                    <li><span id="hours"></span>Hours</li><span class="colon">:</span>
                                    <li><span id="minutes"></span>Minutes</li><span class="colon">:</span>
                                    <li><span id="seconds"></span>Seconds</li>
                                  </ul>
                            </div>
                                --}}
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>


    <!-- <div class="search-popup">
        <button class="close-search"><span class="far fa-times"></span></button>
        <form action="#">
            <div class="form-group">
                <input type="search" name="search-field" placeholder="Search Here..." required>
                <button type="submit"><i class="far fa-search"></i></button>
            </div>
        </form>
    </div> -->

    <main class="main">
     @yield('content')
    </main>

    <footer class="footer-area">
        <div class="footer-widget">
            <div class="container pt-5">
                <div class="row footer-widget-wrapper">
                    <div class="col-md-6 col-lg-6">
                        <div class="footer-widget-box about-us">
                            <a href="#" class="footer-logo">
                                <img src="{{asset('web/images/logo-logo.png')}}" alt="">
                            </a>
                  
                            <ul class="footer-contact">
                                <li><i class="far fa-map-marker-alt"></i> Conference Secretariat Room No: 5014 A,
                                    5th floor, Teaching Block, AIIMS, New Delhi</li>
                                <li><a href="tel:+21236547898"><i class="far fa-phone"></i>91-9810 104 383, +91-9464 533 877,
                                    +91-7042 129 428
                                    </a></li>
                                <li><a href="mailto:cusaaiims@gmail.com"><i
                                            class="far fa-envelope"></i> cusaaiims@gmail.com</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="footer-widget-box list">
                            <h4 class="footer-widget-title">Quick Links</h4>
                            <ul class="footer-list">
                              <li><a target="_blank" href="https://docs.google.com/forms/d/e/1FAIpQLSecmHa4UtvlI_YJDZ6mDGk47g2-wnSQtSE-OHdL9PQq-1g0CA/viewform" ><i class="fas fa-caret-right"></i>Registration</a></li>
                                <li><a href="{{route('about-us')}}"><i class="fas fa-caret-right"></i> Abstract</a></li>
                                <li><a  href="{{route('scientific_program')}}"><i class="fas fa-caret-right"></i>  Scientific Program </a></li>
                                <!-- <li><a href="{{route('national_faculty')}}"><i class="fas fa-caret-right"></i> National Faculty</a></li>
                                <li><a href="{{route('international_faculty')}}"><i class="fas fa-caret-right"></i> International Faculty</a></li>
                                <li><a href="{{route('commitee')}}"><i class="fas fa-caret-right"></i> Committee</a></li> -->
                                <li><a href="{{route('download')}}"><i class="fas fa-caret-right"></i> Downloads</a></li>
                                <!-- <li><a href="{{route('gallery')}}"><i class="fas fa-caret-right"></i> Gallery</a></li> -->
                                <li><a href="{{route('contact')}}"><i class="fas fa-caret-right"></i> Contact Us</a></li>
                                <li><a href="https://www.delhimetrorail.com/" target="_blank"><i class="fas fa-caret-right"></i>Delhi Metro</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="footer-widget-box list">
                            <h4 class="footer-widget-title">Sponsors</h4>
                            <ul class="footer-list">
                                 <!-- <li><a href="#"><i class="fas fa-caret-right"></i> Online Support</a></li>
                                <li><a href="#"><i class="fas fa-caret-right"></i> FAQ's</a></li>
                                <li><a href="#"><i class="fas fa-caret-right"></i> Free Consultancy</a></li>
                                <li><a href="#"><i class="fas fa-caret-right"></i> 24/7 Service</a></li>
                                <li><a href="#"><i class="fas fa-caret-right"></i> Make Call</a></li>
                                <li><a href="#"><i class="fas fa-caret-right"></i> Contact Support</a></li>  -->
                            </ul>
                        </div>
                    </div>
                   <!-- <div class="col-md-6 col-lg-4">
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
                    </div> -->
                </div>
            </div>
           
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 align-self-center">
                        <p class="copyright-text">
                            &copy; Copyright <span id="date"></span> <a href="#"> CUSA </a> All Rights
                            Reserved.
                        </p>
                    </div>
                    <div class="col-lg-6 align-self-center">
                        <ul class="footer-menu">
                            <li style="display: flex"><span> Designed By </span> <a  target="_blank" style="margin-left: 10px;color:#08ffc7" href="https://swiftcoder.in">ADISOFT</a></li>
                           
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <a href="#" id="scroll-top"><i class="far fa-long-arrow-up"></i></a>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
    <script>
      const nextDate = "24/02/2023"
      const nowDate = moment();
      const nexttt =    nextDate ? moment(nextDate, 'DD/MM/YYYY') : '';
      const diff = nexttt.diff(nowDate,'days')

      html = "<span><i class='far fa-calendar-alt animate-charcter'></i></span><h3 class='animate-charcter'>"+diff+" DAYS</h3>"
      $('#day_to').html(html)
  </script>


    <!-- <script data-cfasync="false" src="{{asset('web/js/cloudflare-static-email-decode.min.js')}}"></script> -->
    <!-- <script src="{{asset('web/js/js-jquery-3.6.0.min.js')}}"></script> -->
    <!-- <script src="{{asset('web/js/js-modernizr.min.js')}}"></script> -->
    <script src="{{asset('web/js/js-bootstrap.bundle.min.js')}}"></script>
    <!-- <script src="{{asset('web/js/js-imagesloaded.pkgd.min.js')}}"></script> -->
    <!-- <script src="{{asset('web/js/js-jquery.magnific-popup.min.js')}}"></script> -->
    <!-- <script src="{{asset('web/js/js-isotope.pkgd.min.js')}}"></script> -->
    <!-- <script src="{{asset('web/js/js-jquery.appear.min.js')}}"></script> -->
    <!-- <script src="{{asset('web/js/js-jquery.easing.min.js')}}"></script> -->
    <!-- <script src="{{asset('web/js/js-owl.carousel.min.js')}}"></script> -->
    <!-- <script src="{{asset('web/js/js-counter-up.js')}}"></script> -->
    <!-- <script src="{{asset('web/js/js-wow.min.js')}}"></script> -->
    <!-- <script src="{{asset('web/js/js-main.js')}}"></script> -->

    <script>
      $(document).ready(function(){
        console.log("hii");
        $('.mpreloader').hide(0);
      });
    </script>
    
</body>

</html>
