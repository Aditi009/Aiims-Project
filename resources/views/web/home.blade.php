@extends('layouts.main')
@section('content')
<style>
.animate-charcter {
    text-transform: uppercase;
    background-image: linear-gradient(-225deg, #231557 0%, #44107a 29%, #ff1361 67%, #fff800 100%);
    background-size: auto auto;
    padding: 10px;
    background-clip: border-box;
    background-size: 200% auto;
    color: #fff;
    background-clip: text;
    text-fill-color: transparent;
    /* box-shadow: 0 0 15px rgb(0 0 0 / 17%); */
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    animation: textclip 2s linear infinite;
    display: inline-block;
    font-size: 22px;
}

@media only screen and (max-width: 600px) {

    .design-our {
        margin-left: 14%;
    }

    .animate-charcter {
        text-transform: uppercase;
        background-image: linear-gradient(-225deg, #231557 0%, #44107a 29%, #ff1361 67%, #fff800 100%);
        background-size: auto auto;
        padding: 10px;
        background-clip: border-box;
        background-size: 200% auto;
        color: #fff;
        background-clip: text;
        text-fill-color: transparent;
        /* box-shadow: 0 0 15px rgb(0 0 0 / 17%); */
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        animation: textclip 2s linear infinite;
        display: inline-block;
        font-size: 20px;
    }
}

/* .feature-item{
    -webkit-transform: rotateZ(-30deg);
    -ms-transform: rotateZ(-30deg);
    transform: rotateZ(-44deg);
    width: 237px;
    text-align: center;
    height: 237px;

}
.feature-item:hover{
    -webkit-transform: rotateZ(-30deg);
    -ms-transform: rotateZ(-30deg);
    transform: rotateZ(-44deg);
    width: 237px;
    text-align: center;
    height: 237px;

}
.feature-content{
    transform: rotateZ(43deg);
    display: flex;
    justify-content: center;
    margin-top: 54px;
    margin-left: -15px;
} */
@keyframes textclip {
    to {
        background-position: 200% center;
    }
}

marquee {
    font-size: 18px;
    font-weight: 600;
    color: #b71b1b;
    width: 100%;
    text-align: left !important;
    display: block;
    padding-top: 10px;
    text-align: left;
}

.homepcard {
    background: #FFFFFF;
    border: 1px solid #F7F7F7;
    box-sizing: border-box;
    box-shadow: 1px 2px 3px rgb(0 0 0 / 10%);
    border-radius: 4px;
}

/* .my-p>* {
    padding: 0;
    padding-left: 0 !important;
    padding-right: 0px !important;
    margin: 0px !important;
} */

.feature-item {
    height: 250px;
}

.mycorousel img{
    height:650px;
    
}


.anim {
    animation-duration: 1000ms;
    animation-name: blink;
    animation-iteration-count: infinite;
    animation-direction: alternate;
    -webkit-animation:blink 1000ms infinite; /* Safari and Chrome */

        font-size: 16px;

    }
@keyframes blink {
    from {
        color:blue;
    }
    to {
        color:red;
    }
}
@-webkit-keyframes blink {
    from {
        color:  blue;
    }
    to {
        color: red;
    }
}
</style>

<div class="container time">
    <div id="day_to">
        <h3 class="animate-charcter"> </h3>

    </div>
</div>
<!-- <div class="hero-section hero-slider owl-carousel owl-theme">
    <div class="hero-single" style="background-image: url({{ asset('web/carousel/1.jpeg') }})">
        <div class="container">

            <div class="row align-items-center">
                <div class="col-md-7 col-lg-7">
                    <div class="hero-content" style="height: 400px">
                        {{-- <h6 class="hero-sub-title wow animate__animated animate__fadeInUp"
                            data-wow-duration="1s" data-wow-delay=".25s"># Best Mind Care &amp; Stay Happy
                        </h6>
                        <h1 class="hero-title wow animate__animated animate__fadeInUp" data-wow-duration="1s"
                            data-wow-delay=".50s">
                            We Provide Psychology <span>therapy</span> &amp; Counseling For You
                        </h1>
                        <p class="wow animate__animated animate__fadeInUp" data-wow-duration="1s"
                            data-wow-delay=".75s">
                            There are many variations of passages available but the majority have suffered
                            alteration in some form by injected humour or randomised words.
                        </p>
                        <div class="hero-btn wow animate__animated animate__fadeInUp" data-wow-duration="1s"
                            data-wow-delay="1s">
                            <a href="contact.html" class="theme-btn">Contact Us<i
                                    class="far fa-arrow-right"></i></a>
                            <a href="{{route('about-us')}}" class="theme-btn theme-btn2">About Us<i
                            class="far fa-arrow-right"></i></a>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>
<div class="hero-single" style="background-image: url({{ asset('web/carousel/2.jpeg') }})">
    <div class="container">


        <div class="row align-items-center">
            <div class="col-md-7 col-lg-7">
                <div class="hero-content" style="height: 400px">
                    {{-- <h6 class="hero-sub-title wow animate__animated animate__fadeInUp"
                            data-wow-duration="1s" data-wow-delay=".25s"># Best Mind Care &amp; Stay Happy
                        </h6>
                        <h1 class="hero-title wow animate__animated animate__fadeInUp" data-wow-duration="1s"
                            data-wow-delay=".50s">
                            We Provide Psychology <span>therapy</span> &amp; Counseling For You
                        </h1>
                        <p class="wow animate__animated animate__fadeInUp" data-wow-duration="1s"
                            data-wow-delay=".75s">
                            There are many variations of passages available but the majority have suffered
                            alteration in some form by injected humour or randomised words.
                        </p>
                        <div class="hero-btn wow animate__animated animate__fadeInUp" data-wow-duration="1s"
                            data-wow-delay="1s">
                            <a href="contact.html" class="theme-btn">Contact Us<i
                                    class="far fa-arrow-right"></i></a>
                            <a href="{{route('about-us')}}" class="theme-btn theme-btn2">About Us<i
                        class="far fa-arrow-right"></i></a>
                </div> --}}
            </div>
        </div>
    </div>
</div>
</div>

<div class="hero-single" style="background-image: url({{ asset('web/carousel/3.jpeg') }})">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-7 col-lg-7">
                <div class="hero-content" style="height: 400px">
                    {{-- <h6 class="hero-sub-title wow animate__animated animate__fadeInUp"
                            data-wow-duration="1s" data-wow-delay=".25s"># Best Mind Care &amp; Stay Happy
                        </h6>
                        <h1 class="hero-title wow animate__animated animate__fadeInUp" data-wow-duration="1s"
                            data-wow-delay=".50s">
                            We Provide Psychology <span>therapy</span> &amp; Counseling For You
                        </h1>
                        <p class="wow animate__animated animate__fadeInUp" data-wow-duration="1s"
                            data-wow-delay=".75s">
                            There are many variations of passages available but the majority have suffered
                            alteration in some form by injected humour or randomised words.
                        </p>
                        <div class="hero-btn wow animate__animated animate__fadeInUp" data-wow-duration="1s"
                            data-wow-delay="1s">
                            <a href="contact.html" class="theme-btn">Contact Us<i
                                    class="far fa-arrow-right"></i></a>
                            <a href="{{route('about-us')}}" class="theme-btn theme-btn2">About Us<i
                        class="far fa-arrow-right"></i></a>
                </div> --}}
            </div>
        </div>
    </div>
</div>
</div>

<div class="hero-single" style="background-image: url({{ asset('web/carousel/4.jpeg') }})">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-7 col-lg-7">
                <div class="hero-content" style="height: 400px">
                    {{-- <h6 class="hero-sub-title wow animate__animated animate__fadeInUp"
                            data-wow-duration="1s" data-wow-delay=".25s"># Best Mind Care &amp; Stay Happy
                        </h6>
                        <h1 class="hero-title wow animate__animated animate__fadeInUp" data-wow-duration="1s"
                            data-wow-delay=".50s">
                            We Provide Psychology <span>therapy</span> &amp; Counseling For You
                        </h1>
                        <p class="wow animate__animated animate__fadeInUp" data-wow-duration="1s"
                            data-wow-delay=".75s">
                            There are many variations of passages available but the majority have suffered
                            alteration in some form by injected humour or randomised words.
                        </p>
                        <div class="hero-btn wow animate__animated animate__fadeInUp" data-wow-duration="1s"
                            data-wow-delay="1s">
                            <a href="contact.html" class="theme-btn">Contact Us<i
                                    class="far fa-arrow-right"></i></a>
                            <a href="{{route('about-us')}}" class="theme-btn theme-btn2">About Us<i
                        class="far fa-arrow-right"></i></a>
                </div> --}}
            </div>
        </div>
    </div>
</div>
</div>

<div class="hero-single" style="background-image: url({{ asset('web/carousel/5.jpeg') }})">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-7 col-lg-7">
                <div class="hero-content" style="height: 400px">
                    {{-- <h6 class="hero-sub-title wow animate__animated animate__fadeInUp"
                            data-wow-duration="1s" data-wow-delay=".25s"># Best Mind Care &amp; Stay Happy
                        </h6>
                        <h1 class="hero-title wow animate__animated animate__fadeInUp" data-wow-duration="1s"
                            data-wow-delay=".50s">
                            We Provide Psychology <span>therapy</span> &amp; Counseling For You
                        </h1>
                        <p class="wow animate__animated animate__fadeInUp" data-wow-duration="1s"
                            data-wow-delay=".75s">
                            There are many variations of passages available but the majority have suffered
                            alteration in some form by injected humour or randomised words.
                        </p>
                        <div class="hero-btn wow animate__animated animate__fadeInUp" data-wow-duration="1s"
                            data-wow-delay="1s">
                            <a href="contact.html" class="theme-btn">Contact Us<i
                                    class="far fa-arrow-right"></i></a>
                            <a href="{{route('about-us')}}" class="theme-btn theme-btn2">About Us<i
                        class="far fa-arrow-right"></i></a>
                </div> --}}
            </div>
        </div>
    </div>
</div>
</div>

<div class="hero-single" style="background-image: url({{ asset('web/carousel/6.jpeg') }})">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-7 col-lg-7">
                <div class="hero-content" style="height: 400px">
                    {{-- <h6 class="hero-sub-title wow animate__animated animate__fadeInUp"
                            data-wow-duration="1s" data-wow-delay=".25s"># Best Mind Care &amp; Stay Happy
                        </h6>
                        <h1 class="hero-title wow animate__animated animate__fadeInUp" data-wow-duration="1s"
                            data-wow-delay=".50s">
                            We Provide Psychology <span>therapy</span> &amp; Counseling For You
                        </h1>
                        <p class="wow animate__animated animate__fadeInUp" data-wow-duration="1s"
                            data-wow-delay=".75s">
                            There are many variations of passages available but the majority have suffered
                            alteration in some form by injected humour or randomised words.
                        </p>
                        <div class="hero-btn wow animate__animated animate__fadeInUp" data-wow-duration="1s"
                            data-wow-delay="1s">
                            <a href="contact.html" class="theme-btn">Contact Us<i
                                    class="far fa-arrow-right"></i></a>
                            <a href="{{route('about-us')}}" class="theme-btn theme-btn2">About Us<i
                        class="far fa-arrow-right"></i></a>
                </div> --}}
            </div>
        </div>
    </div>
</div>
</div>


</div> -->


<div id="carouselExampleIndicators" class="carousel slide mycorousel" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="{{ asset('web/carousel/1.jpeg') }}" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('web/carousel/2.jpeg') }}" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('web/carousel/3.jpeg') }}" alt="Third slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('web/carousel/4.jpeg') }}" alt="Third slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('web/carousel/5.jpeg') }}" alt="Third slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('web/carousel/6.jpeg') }}" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <marquee behavior="alternate" width="100%" direction="left" scrollamount="6">
                    <p class="anim">Essential skill for all Anaesthesiologists! </p>
                    </marquee>
                    <marquee behavior="alternate" width="100%" direction="left" scrollamount="6" >
                    <p class="anim">Revisiting regional blocks from classic to the newest approaches !!</p>
                    </marquee>
        </div>
    </div>
</div>

<div class="feature-area" style="    margin-top: 10px;" >
    <div class="container">
        <div class="feature-area-wrapper">
            <div class="row my-p">
            <div class="col-md-6 col-lg-3">
                    <div class="feature-item active">
                        <div class="feature-icon">
                            <img src="{{ asset('web/images/icon2.png') }}" class="flaticon-meeting"/>
                        </div>
                        <div class="feature-content">
                            <h5>Volunteer Scanning with Hands - on Experience</h5>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="feature-item active">
                        <div class="feature-icon">
                            <!-- <i class="flaticon-psychology-2"></i> -->
                            <img src="{{ asset('web/images/icon1.png') }}" class="flaticon-meeting"/>
                        </div>
                        <div class="feature-content">
                            <h5>Demonstration of Anatomy and Needling on Cadavers</h5>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="feature-item active" >
                        <div class="feature-icon">
                            <!-- <i class="flaticon-psychologist"></i> -->
                            <img src="{{ asset('web/images/icon3.png') }}" class="flaticon-meeting"/>
                        </div>
                        <div class="feature-content">
                            <h5>Point of Care Ultrasound</h5>

                        </div>
                    </div>
                </div>
               
                <div class="col-md-6 col-lg-3">
                    <div class="feature-item active" >
                        <div class="feature-icon">
                            <!-- <i class="flaticon-meeting"></i> -->
                            <img src="{{ asset('web/images/icon4.png') }}" class="flaticon-meeting"/>
                        </div>
                        <div class="feature-content">
                            <h5>Quiz: Win & Get Exciting Prizes</h5>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>




<div class="container mt-5">
    <div class="row">
        <div class="col-lg-6">
            <div class="row justify-content-center">
                <div class="card homepcard" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('web/images/hod.png') }}" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">
                        <ul>
                            <li style="
                                    font-weight: 900; color:maroon;"><i class="lni-check-mark-circle"></i><span
                                    class="text">Dr.
                                    Lokesh Kashyap
                                </span></li>
                            <li><i class="lni-check-mark-circle"></i><span class="text">Professor & Head</span></li>
                            <li>
                                Department of Anaesthesiology,
                                <br /> Pain Medicine and Critical Care, AllMS, New Delhi
                            </li>

                        </ul>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="about-right">
                <div class="site-heading mb-3">

                </div>
                <p class="about-text">
                <h4>Dear Friends,</h4>
                <br>
                Wishing all of you a very happy and productive year!
                We are happy to announce that we will be conducting the Comprehensive Symposium on Ultrasound for the
                Anaesthesiologist (CUSA) from the 24th to 26th of February 2023!

                As always CUSA 2023 is going to be an academic feast! There will be demonstration of anatomy in
                cadavers, scanning of sonoanatomy in volunteers, practice needling in cadavers, interactive talks and
                discussions! The highlight of CUSA this time is going to be revisiting all blocks from the classic to
                the most recent approaches! Point of Care ultrasound for the anaesthesiologist is an essential skill for
                all anaesthesiologists! The faculty involved in POCUS are experts who will make it possible for you to
                assimilate POCUS in your day to day practice!

                Need I say more…… CUSA is a Regional anaesthesia Symposium with a difference! As always, we eagerly
                await your participation in CUSA 2023! Do come and join in this academic extravaganza!


                </p>

                <a target="_blank" href="https://docs.google.com/forms/d/e/1FAIpQLSecmHa4UtvlI_YJDZ6mDGk47g2-wnSQtSE-OHdL9PQq-1g0CA/viewform"
                    class="theme-btn mt-4">Registration<i class="far fa-arrow-right"></i></a>

            </div>
        </div>

    </div>
</div>



<!-- registration -->
<div class="testimonial-area py-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="site-heading text-center">
                    <h2 class="site-title">Registration</h2>
                </div>
                <div class="row justify-content-center">
                    <div class="card" style="width: 700px;">

                        <div class="card-body">
                            <h3 style="color:black" class="card-text">Scan the QR Code for Registration after account
                                transfer.</h3>
                            <h4>Account Details :</h4>
                            <center>
                                <div class="row justify-content-center mt-3">
                                    <h4 style="color:black">37937307048 (State Bank of India)</h4>
                                    <h4 style="color:black">IFSC : SBIN0001536</h4>
                                </div>
                            </center>
                        </div>
                        <img class="card-img-top" src="{{ asset('web/images/reg_banner.png') }}" alt="Card image cap">
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>



{{-- 
<div class="testimonial-area bg py-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="site-heading text-center">
                    <h2 class="site-title">Organizers</h2>
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
                        <img src="{{ asset('web/images/testimonial-01.jpg') }}" alt="">
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
            <img src="{{ asset('web/images/testimonial-02.jpg') }}" alt="">
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
            <img src="{{ asset('web/images/testimonial-03.jpg') }}" alt="">
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
            <img src="{{ asset('web/images/testimonial-04.jpg') }}" alt="">
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
--}}

<!--

    <div class="service-area bg py-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="site-heading text-center">
                        <span class="site-title-tagline">Services</span>
                        <h2 class="site-title">What We <span>Offer</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="{{ asset('web/images/service-01.jpg') }}" alt="">
                        </div>
                        <div class="service-content">
                            <div class="service-content-info">
                                <div class="service-icon">
                                    <i class="flaticon-psychology"></i>
                                </div>
                                <h3 class="service-title">
                                    <a href="#">Personal Meeting</a>
                                </h3>
                            </div>
                            <p class="service-text">
                                There are many variations of passages available but the majority have suffered
                                alteration injected.
                            </p>
                            <div class="service-arrow">
                                <a href="#" class="theme-btn">Read More <span class="far fa-arrow-right"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="{{ asset('web/images/service-02.jpg') }}" alt="">
                        </div>
                        <div class="service-content">
                            <div class="service-content-info">
                                <div class="service-icon">
                                    <i class="flaticon-heart-1"></i>
                                </div>
                                <h3 class="service-title">
                                    <a href="#">Family Counseling</a>
                                </h3>
                            </div>
                            <p class="service-text">
                                There are many variations of passages available but the majority have suffered
                                alteration injected.
                            </p>
                            <div class="service-arrow">
                                <a href="#" class="theme-btn">Read More <span class="far fa-arrow-right"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="{{ asset('web/images/service-03.jpg') }}" alt="">
                        </div>
                        <div class="service-content">
                            <div class="service-content-info">
                                <div class="service-icon">
                                    <i class="flaticon-little-boy"></i>
                                </div>
                                <h3 class="service-title">
                                    <a href="#">Anxiety Disorder</a>
                                </h3>
                            </div>
                            <p class="service-text">
                                There are many variations of passages available but the majority have suffered
                                alteration injected.
                            </p>
                            <div class="service-arrow">
                                <a href="#" class="theme-btn">Read More <span class="far fa-arrow-right"></span></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div> -->

<div class="case-area py-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="site-heading text-center">
                    <h2 class="site-title">DELHI TOURIST ATTRACTION
                    </h2>
                </div>
            </div>
        </div>
        <div class="row popup-gallery">
            <div class="col-md-6 col-lg-4 filter-item cat1 cat2">
                <div class="case-item">
                    <div class="case-img">
                        <img class="img-fluid" src="{{ asset('web/delhi-image/service-1.jpg') }}" alt="">
                        <a class="popup-img case-link" href="{{ asset('web/delhi-image/service-1.jpg') }}"> <i
                                class="far fa-plus"></i></a>
                        <div class="case-content">
                            <h4><a href="#">Lodhi Gardens</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 filter-item cat2 cat3">
                <div class="case-item">
                    <div class="case-img">
                        <img class="img-fluid" src="{{ asset('web/delhi-image/service-2.jpg') }}" alt="">
                        <a class="popup-img case-link" href="{{ asset('web/delhi-image/service-2.jpg') }}"> <i
                                class="far fa-plus"></i></a>
                        <div class="case-content">
                            <h4><a href="#">Dilli Haat </a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 filter-item cat3 cat4 cat5">
                <div class="case-item">
                    <div class="case-img">
                        <img class="img-fluid" src="{{ asset('web/delhi-image/service-3.jpg') }}" alt="">
                        <a class="popup-img case-link" href="{{ asset('web/delhi-image/service-3.jpg') }}"> <i
                                class="far fa-plus"></i></a>
                        <div class="case-content">
                            <h4><a href="#">Garden of Five Senses
                                </a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 filter-item cat2 cat4">
                <div class="case-item">
                    <div class="case-img">
                        <img class="img-fluid" src="{{ asset('web/delhi-image/service-4.jpg') }}" alt="">
                        <a class="popup-img case-link" href="{{ asset('web/delhi-image/service-4.jpg') }}"> <i
                                class="far fa-plus"></i></a>
                        <div class="case-content">
                            <h4><a href="#">Qutab Minar India</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 filter-item cat1 cat4 cat5">
                <div class="case-item">
                    <div class="case-img">
                        <img class="img-fluid" src="{{ asset('web/delhi-image/service-5.jpg') }}" alt="">
                        <a class="popup-img case-link" href="{{ asset('web/delhi-image/service-5.jpg') }}"> <i
                                class="far fa-plus"></i></a>
                        <div class="case-content">
                            <h4><a href="#">India Gate
                                </a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 filter-item cat4 cat3">
                <div class="case-item">
                    <div class="case-img">
                        <img class="img-fluid" src="{{ asset('web/delhi-image/service-6.jpg') }}" alt="">
                        <a class="popup-img case-link" href="{{ asset('web/delhi-image/service-6.jpg') }}"> <i
                                class="far fa-plus"></i></a>
                        <div class="case-content">
                            <h4><a href="#">Lotus Temple
                                </a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 filter-item cat4 cat3">
                <div class="case-item">
                    <div class="case-img">
                        <img class="img-fluid" src="{{ asset('web/delhi-image/service-7.jpg') }}" alt="">
                        <a class="popup-img case-link" href="{{ asset('web/delhi-image/service-7.jpg') }}"> <i
                                class="far fa-plus"></i></a>
                        <div class="case-content">
                            <h4><a href="#">Humayun’s Tomb

                                </a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 filter-item cat4 cat3">
                <div class="case-item">
                    <div class="case-img">
                        <img class="img-fluid" src="{{ asset('web/delhi-image/service-8.jpg') }}" alt="">
                        <a class="popup-img case-link" href="{{ asset('web/delhi-image/service-8.jpg') }}"> <i
                                class="far fa-plus"></i></a>
                        <div class="case-content">
                            <h4><a href="#">Akshardham Temple


                                </a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 filter-item cat4 cat3">
                <div class="case-item">
                    <div class="case-img">
                        <img class="img-fluid" src="{{ asset('web/delhi-image/service-9.jpg') }}" alt="">
                        <a class="popup-img case-link" href="{{ asset('web/delhi-image/service-9.jpg') }}"> <i
                                class="far fa-plus"></i></a>
                        <div class="case-content">
                            <h4><a href="#">Signature Bridge


                                </a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="contact-map">

    <iframe
        src="https://www.google.com/maps/embed?pb=!1m12!1m8!1m3!1d27527.194202943374!2d77.19667595750788!3d28.56562250312848!3m2!1i1024!2i768!4f13.1!2m1!1sAIIMS%2C%20New%20Delhi%20Meerut%20()!5e0!3m2!1sen!2sus!4v1670038096074!5m2!1sen!2sus"
        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script type="text/JavaScript" src="https://MomentJS.com/downloads/moment.js"></script>


@endsection