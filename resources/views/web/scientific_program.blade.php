@extends('layouts.main')
@section('content')
    <div class="site-breadcrumb" style="background: url(assets/img/breadcrumb/01.jpg)">
        <div class="container">
            <h2 class="breadcrumb-title"> Scientific Program </h2>
            <ul class="breadcrumb-menu">
                <li><a href="index.html">Home</a></li>
                <li class="active"> Scientific Program </li>
            </ul>
        </div>
    </div>


    <div class="about-area py-120">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-left">
                        <div class="about-img">
                            <img class="about-img-1" src="images/about-01.jpg" alt="">
                        </div>
                        <div class="about-left-content">
                            <div class="about-left-icon">
                                <i class="flaticon-telephone"></i>
                            </div>
                            <div class="about-left-info">
                                <h5>Need Any Help ?</h5>
                                <p>Call Now : <a href="tel:+2123654789">+2 123 654 789</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-right">
                        <div class="site-heading mb-3">
                            <span class="site-title-tagline">About Us</span>
                            <h2 class="site-title">We provide best psychology <span>treatment</span> for you</h2>
                        </div>
                        <p class="about-text">
                            There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered alteration in some form, by injected humour, or randomised words which don't
                            look even slightly believable. If you are going to use a passage of Lorem Ipsum, you
                            need to be sure middle of text.
                        </p>
                        <div class="about-list-wrapper">
                            <ul class="about-list list-unstyled">
                                <li>
                                    <div class="icon"><span class="flaticon-customer"></span></div>
                                    <div class="text">
                                        <h5>Consultation</h5>
                                        <p>Take a look at our round up of the best shows.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon"><span class="flaticon-mental-health"></span></div>
                                    <div class="text">
                                        <h5>Mental Health</h5>
                                        <p>Take a look at our round up of the best shows.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <a href="about.html" class="theme-btn mt-4">Discover More <i
                                class="far fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="counter-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="counter-box">
                        <div class="icon"><i class="flaticon-mental-health"></i></div>
                        <span class="counter" data-count="+" data-to="500" data-speed="3000">500</span>
                        <h6 class="title">+ Project Done</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="counter-box">
                        <div class="icon"><i class="flaticon-inspiration"></i></div>
                        <span class="counter" data-count="+" data-to="250" data-speed="3000">250</span>
                        <h6 class="title">+ Satisfied Clients</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="counter-box">
                        <div class="icon"><i class="flaticon-psychiatrist"></i></div>
                        <span class="counter" data-count="+" data-to="120" data-speed="3000">120</span>
                        <h6 class="title">+ Experts Psychiatrist</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="counter-box">
                        <div class="icon"><i class="flaticon-thinking"></i></div>
                        <span class="counter" data-count="+" data-to="50" data-speed="3000">50</span>
                        <h6 class="title">+ Experience Years</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="testimonial-area bg py-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="site-heading text-center">
                        <span class="site-title-tagline">Testimonials</span>
                        <h2 class="site-title">What Client <span>Say's</span></h2>
                    </div>
                </div>
            </div>
            <div class="testimonial-slider owl-carousel owl-theme">
                <div class="testimonial-single">
                    <div class="testimonial-quote">
                        <span class="testimonial-quote-icon"><i class="fal fa-quote-left"></i></span>
                        <p>
                            There are many variations of passages available but the majority have suffered
                            alteration in some form by injected.
                        </p>
                    </div>
                    <div class="testimonial-content">
                        <div class="testimonial-author-img">
                            <img src="images/testimonial-01.jpg" alt="">
                        </div>
                        <div class="testimonial-author-info">
                            <h4>Sylvia H Green</h4>
                            <p>Founder &amp; CEO</p>
                            <div class="testimonial-rate">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-single">
                    <div class="testimonial-quote">
                        <span class="testimonial-quote-icon"><i class="fal fa-quote-left"></i></span>
                        <p>
                            There are many variations of passages available but the majority have suffered
                            alteration in some form by injected.
                        </p>
                    </div>
                    <div class="testimonial-content">
                        <div class="testimonial-author-img">
                            <img src="images/testimonial-02.jpg" alt="">
                        </div>
                        <div class="testimonial-author-info">
                            <h4>Gordon D Novak</h4>
                            <p>Founder &amp; CEO</p>
                            <div class="testimonial-rate">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-single">
                    <div class="testimonial-quote">
                        <span class="testimonial-quote-icon"><i class="fal fa-quote-left"></i></span>
                        <p>
                            There are many variations of passages available but the majority have suffered
                            alteration in some form by injected.
                        </p>
                    </div>
                    <div class="testimonial-content">
                        <div class="testimonial-author-img">
                            <img src="images/testimonial-03.jpg" alt="">
                        </div>
                        <div class="testimonial-author-info">
                            <h4>Reid E Butt</h4>
                            <p>Founder &amp; CEO</p>
                            <div class="testimonial-rate">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-single">
                    <div class="testimonial-quote">
                        <span class="testimonial-quote-icon"><i class="fal fa-quote-left"></i></span>
                        <p>
                            There are many variations of passages available but the majority have suffered
                            alteration in some form by injected.
                        </p>
                    </div>
                    <div class="testimonial-content">
                        <div class="testimonial-author-img">
                            <img src="images/testimonial-04.jpg" alt="">
                        </div>
                        <div class="testimonial-author-info">
                            <h4>Parker Jimenez</h4>
                            <p>Founder &amp; CEO</p>
                            <div class="testimonial-rate">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="team-area pt-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="site-heading text-center">
                        <span class="site-title-tagline">Team</span>
                        <h2 class="site-title">Meet With <span>Experts</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="team-item">
                        <img src="images/team-01.jpg" alt="thumb">
                        <div class="team-social">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                        <div class="team-content">
                            <div class="team-bio">
                                <h5><a href="#">Dr. Malissa Fierro</a></h5>
                                <span>Psychiatrist</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="team-item">
                        <img src="images/team-02.jpg" alt="thumb">
                        <div class="team-social">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                        <div class="team-content">
                            <div class="team-bio">
                                <h5><a href="#">Dr. Arron Rodri</a></h5>
                                <span>Psychiatrist</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="team-item active">
                        <img src="images/team-03.jpg" alt="thumb">
                        <div class="team-social">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                        <div class="team-content">
                            <div class="team-bio">
                                <h5><a href="#">Dr. Chad Smith</a></h5>
                                <span>Psychiatrist</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="team-item">
                        <img src="images/team-04.jpg" alt="thumb">
                        <div class="team-social">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                        <div class="team-content">
                            <div class="team-bio">
                                <h5><a href="#">Dr. Tony Pinto</a></h5>
                                <span>Psychiatrist</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="partner-area pt-70 pb-70">
        <div class="container">
            <div class="partner-wrapper partner-slider owl-carousel owl-theme">
                <img src="images/partner-01.jpg" alt="thumb">
                <img src="images/partner-02.jpg" alt="thumb">
                <img src="images/partner-03.jpg" alt="thumb">
                <img src="images/partner-04.jpg" alt="thumb">
                <img src="images/partner-01.jpg" alt="thumb">
                <img src="images/partner-02.jpg" alt="thumb">
                <img src="images/partner-03.jpg" alt="thumb">
            </div>
        </div>
    </div>
    @endsection

