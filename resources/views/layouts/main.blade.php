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
  .time{

    position: fixed;
    background: white;
    z-index: 99;
    right: 0;
    top: 200px;
    height: 67px;
    width: 240px !important;
  }

  


    li span {
  display: block;
}
.count{
    display: flex
}
.count li{
 
    text-align: center;
    padding: 5px;
    text-transform: uppercase;
    text-align: center;
    color: red;
    font-weight: 500;
}
.colon{
    margin-top: 5px;
    color: red;
    font-weight: 900;

}
/* * Hide from both screenreaders and browsers: h5bp.com/u */
.hidden {
	display: none !important;
	visibility: hidden;
}

.dropdown-toggle::after {
    display: inline-block;
    margin-left: 5px;
    vertical-align: 1.5px;
    font-family: 'Font Awesome 5 Pro';
    content: "" !important;
    font-weight: 600;
    border: none;
    font-size: 11px;
}

#toast-container > .toast-info {
    background-image: none;
    background-color: #0d36ee;
    color: white;
}



@keyframes animate-top {
  0% {
   background: #3e3e3e; /* Old browsers */
background: -moz-linear-gradient(top,  #3e3e3e 0%, #2b2b2b 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#3e3e3e), color-stop(100%,#2b2b2b)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top,  #3e3e3e 0%,#2b2b2b 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top,  #3e3e3e 0%,#2b2b2b 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top,  #3e3e3e 0%,#2b2b2b 100%); /* IE10+ */
background: linear-gradient(to bottom,  #3e3e3e 0%,#2b2b2b 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#3e3e3e', endColorstr='#2b2b2b',GradientType=0 );
  }
  
  100% {
    color: #474747;
    
    transform: 
      translateX(0px) 
      translateY(0.35em) 
      translateZ(5px) 
      rotateX(-90deg)
      rotateY(0deg)
      rotateZ(0deg);
  }
}

@keyframes animate-bottom {
  0% {
    color: #474747;
    opacity: 1;
  }
  
  100% {
    transform: 
      translateX(0) 
      translateY(0) 
      translateZ(0) 
      rotateX(0deg) 
      rotateY(0deg)
      rotateZ(0deg);
    
    opacity: 1;
  }
}

@-webkit-keyframes animate-top {
  0% {
   background: #3e3e3e; /* Old browsers */
background: -moz-linear-gradient(top,  #3e3e3e 0%, #2b2b2b 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#3e3e3e), color-stop(100%,#2b2b2b)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top,  #3e3e3e 0%,#2b2b2b 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top,  #3e3e3e 0%,#2b2b2b 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top,  #3e3e3e 0%,#2b2b2b 100%); /* IE10+ */
background: linear-gradient(to bottom,  #3e3e3e 0%,#2b2b2b 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#3e3e3e', endColorstr='#2b2b2b',GradientType=0 );
  }
  
  100% {
    color: #474747;
    
    -webkit-transform: 
      translateX(0px) 
      translateY(0.35em) 
      translateZ(5px) 
      rotateX(-90deg)
      rotateY(0deg)
      rotateZ(0deg);
  }
}

@-webkit-keyframes animate-bottom {
  0% {
    color: #474747;
    opacity: 1;
  }
  
  100% {
    -webkit-transform: 
      translateX(0) 
      translateY(0) 
      translateZ(0) 
      rotateX(0deg) 
      rotateY(0deg)
      rotateZ(0deg);
    
    opacity: 1;
  }
}

.number {
  position: relative;
  float: left;
  margin-right: 5px;
  
  font-size: 5em;
  
  width: 1em;
  height: 1.5em;
}

.number span {
  position: absolute;
  display: block;
  font-weight: bold;
  text-align: center;
  
  box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  
  color: white;
  
  width: 1em;
  height: 1.5em;
  perspective: 7.14em;
  
}

.number span:before {
  display: block;
  height: 0.75em;
  overflow: hidden;
  
  line-height: 1.52em;
  
  border-bottom: 1px solid rgba(0, 0, 0, 0.5);
  
  border-radius: 20% 20% 0 0;
  
  background: #3e3e3e; /* Old browsers */
background: -moz-linear-gradient(top,  #3e3e3e 0%, #2b2b2b 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#3e3e3e), color-stop(100%,#2b2b2b)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top,  #3e3e3e 0%,#2b2b2b 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top,  #3e3e3e 0%,#2b2b2b 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top,  #3e3e3e 0%,#2b2b2b 100%); /* IE10+ */
background: linear-gradient(to bottom,  #3e3e3e 0%,#2b2b2b 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#3e3e3e', endColorstr='#2b2b2b',GradientType=0 ); /* IE6-9 */
}

.number span:after {
  display: block;
  height: 0.75em;
  overflow: hidden;
  line-height: 0;
  
  border-top: 1px solid rgba(0, 0, 0, 0.5);
  
  border-radius: 0 0 20% 20%;
  
  transition: color 100ms, background-color 100ms;
  
  background: #252525; /* Old browsers */
background: -moz-linear-gradient(top,  #252525 0%, #070707 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#252525), color-stop(100%,#070707)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top,  #252525 0%,#070707 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top,  #252525 0%,#070707 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top,  #252525 0%,#070707 100%); /* IE10+ */
background: linear-gradient(to bottom,  #252525 0%,#070707 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#252525', endColorstr='#070707',GradientType=0 ); /* IE6-9 */
}


.flip .primary:before {
  animation: animate-top 250ms;
  -moz-animation-fill-mode: forwards;
  
  -webkit-animation: animate-top 250ms;
  -webkit-animation-fill-mode: forwards;
  
  
  background: #000000; /* Old browsers */
background: -moz-linear-gradient(top,  #000000 0%, #303030 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#000000), color-stop(100%,#303030)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top,  #000000 0%,#303030 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top,  #000000 0%,#303030 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top,  #000000 0%,#303030 100%); /* IE10+ */
background: linear-gradient(to bottom,  #000000 0%,#303030 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#000000', endColorstr='#303030',GradientType=0 ); /* IE6-9 */

}

.flip .primary:after {
  animation: animate-bottom 250ms;
  -moz-animation-fill-mode: forwards;
  animation-delay: 250ms;
  
  -webkit-animation: animate-bottom 250ms;
  -webkit-animation-fill-mode: forwards;
  -webkit-animation-delay: 250ms;
}

.primary:after {
  opacity: 0;
  
  transform: 
    translateX(0) 
    translateY(-0.28em) 
    translateZ(0.35em) 
    rotateX(91deg) 
    rotateY(0deg) 
    rotateZ(0deg);
  
  -webkit-transform: 
    translateX(0) 
    translateY(-0.28em) 
    translateZ(0.35em) 
    rotateX(91deg) 
    rotateY(0deg) 
    rotateZ(0deg);
}

.primary {
  z-index: 2;
}

.secondary {
  z-index: 1;
}

/* Number 0 */

[data-number="0"] span.primary:before {
  content: "0";
}

[data-number="0"] span.secondary:after {
  content: "0";
}

[data-number="0"] span.secondary:before {
  content: attr(title);
}

[data-number="0"] span.primary:after {
  content: attr(title);
}

/* Number 9 */

[data-number="9"] span.primary:before {
  content: "9";
}

[data-number="9"] span.secondary:after {
  content: "9";
}

[data-number="9"] span.secondary:before {
  content: attr(title);
}

[data-number="9"] span.primary:after {
  content: attr(title);
}

/* Number 8 */

[data-number="8"] span.primary:before {
  content: "8";
}

[data-number="8"] span.secondary:after {
  content: "8";
}

[data-number="8"] span.secondary:before {
  content: attr(title);
}

[data-number="8"] span.primary:after {
  content: attr(title);
}

/* Number 7 */

[data-number="7"] span.primary:before {
  content: "7";
}

[data-number="7"] span.secondary:after {
  content: "7";
}

[data-number="7"] span.secondary:before {
  content: attr(title);
}

[data-number="7"] span.primary:after {
  content: attr(title);
}

/* Number 6 */

[data-number="6"] span.primary:before {
  content: "6";
}

[data-number="6"] span.secondary:after {
  content: "6";
}

[data-number="6"] span.secondary:before {
  content: attr(title);
}

[data-number="6"] span.primary:after {
  content: attr(title);
}

/* Number 5 */

[data-number="5"] span.primary:before {
  content: attr(title);
}

[data-number="5"] span.secondary:after {
  content: attr(title);
}

[data-number="5"] span.secondary:before {
  content: attr(title);
}

[data-number="5"] span.primary:after {
  content: attr(title);
}

/* Number 4 */

[data-number="4"] span.primary:before {
  content: "4";
}

[data-number="4"] span.secondary:after {
  content: "4";
}

[data-number="4"] span.secondary:before {
  content: attr(title);
}

[data-number="4"] span.primary:after {
  content: attr(title);
}

/* Number 3 */

[data-number="3"] span.primary:before {
  content: attr(title);
}

[data-number="3"] span.secondary:after {
  content: attr(title);
}

[data-number="3"] span.secondary:before {
  content: attr(title);
}

[data-number="3"] span.primary:after {
  content: attr(title);
}

/* Number 2 */

[data-number="2"] span.primary:before {
  content: "2";
}

[data-number="2"] span.secondary:after {
  content: "2";
}

[data-number="2"] span.secondary:before {
  content: attr(title);
}

[data-number="2"] span.primary:after {
  content: attr(title);
}

/* Number 1 */

[data-number="1"] span.primary:before {
  content: "1";
}

[data-number="1"] span.secondary:after {
  content: "1";
}

[data-number="1"] span.secondary:before {
  content: attr(title);
}

[data-number="1"] span.primary:after {
  content: attr(title);
}
/* ==========================================================================
   Author's custom styles
   ========================================================================== */



</style>
    <link rel="icon" type="image/x-icon" href="{{asset('web/images/logo-favicon.png')}}">

    <link rel="stylesheet" href="{{asset('web/css/css-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('web/css/css-all-fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('web/css/css-flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('web/css/css-animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('web/css/css-magnific-popup.min.css')}}">
    <link rel="stylesheet" href="{{asset('web/css/css-owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('web/css/css-style.css')}}">
    <link rel="stylesheet" href="{{asset('web/css/style.css')}}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- Toastr -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
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
                            {{-- <li class="nav-item"><a class="nav-link" href="{{route('organiser')}}"> Organisers </a></li> --}}
                             <li class="nav-item"><a class="nav-link {{  Request::path() == "commitee" ? 'active' : ''}}" href="{{route('commitee')}}"> Committee </a></li>
                           
                            

                            
                           
                       
                            

                            
                            <li class="nav-item"><a class="nav-link  {{  Request::path() == "download" ? 'active' : ''}}" href="{{route('download')}}">Downloads</a></li>
                            <li class="nav-item"><a class="nav-link  {{  Request::path() == "gallery" ? 'active' : ''}}" href="{{route('gallery')}}"> Gallery </a></li>
                            <li class="nav-item"><a class="nav-link  {{  Request::path() == "contact" ? 'active' : ''}}"  href="{{route('contact')}}">Contact Us</a></li>


                        </ul>
                        <div class="header-nav-right">
                             <!-- <div class="header-nav-search">
                                <a href="#" class="search-box-outer"><i class="far fa-search"></i></a>
                            </div> -->
                            <div class="header-btn d-flex">
                                <a href="https://docs.google.com/forms/d/e/1FAIpQLSecmHa4UtvlI_YJDZ6mDGk47g2-wnSQtSE-OHdL9PQq-1g0CA/viewform" class="theme-btn">Registration<i class="far fa-arrow-right"></i></a>
                               

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
                                <li><a href="tel:+21236547898"><i class="far fa-phone"></i>91-9810 104 383, +91-9899 323 110,
                                    +91-7042 129 428
                                    </a></li>
                                <li><a href="/cdn-cgi/l/email-protection#4920272f26092c31282439252c672a2624"><i
                                            class="far fa-envelope"></i> aiimscusa@gmail.com</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="footer-widget-box list">
                            <h4 class="footer-widget-title">Quick Links</h4>
                            <ul class="footer-list">
                                <li><a href="{{route('about-us')}}"><i class="fas fa-caret-right"></i> Abstract</a></li>
                                <li><a target="_blank" href="{{asset('web/pdf/Program.pdf')}}"><i class="fas fa-caret-right"></i>  Scientific Program </a></li>
                                <li><a href="{{route('organiser')}}"><i class="fas fa-caret-right"></i> Organisers</a></li>
                                <li><a href="{{route('commitee')}}"><i class="fas fa-caret-right"></i> Committee</a></li>
                                <li><a href="{{route('download')}}"><i class="fas fa-caret-right"></i> Downloads</a></li>
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

    <script>
      const nextDate = "24/02/2023"
      const nowDate = moment();
      const nexttt =    nextDate ? moment(nextDate, 'DD/MM/YYYY') : '';
      const diff = nexttt.diff(nowDate,'days')+ " Days"
      $('.animate-charcter').html(diff)
  </script>
<script>
    $('.comming-soon').click(function(){
        toastr.options = {
				'closeButton': true,
				'debug': false,
				'newestOnTop': false,
				'progressBar': false,
				'positionClass': 'toast-top-right',
				'preventDuplicates': false,
				'showDuration': '1000',
				'hideDuration': '1000',
				'extendedTimeOut': '1000',
				'showEasing': 'swing',
				'hideEasing': 'linear',
				'showMethod': 'fadeIn',
				'hideMethod': 'fadeOut',
			}
        toastr.options.progressBar = true,
        toastr.options.positionClass = "toast-bottom-center";
        toastr.info('COMMING SOON')

    })

</script>
    
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
