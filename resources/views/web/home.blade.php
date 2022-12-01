@extends('layouts.main')
@section('content')
<!-- <div class="container">
    <span class="number" data-number="9">
        <span class="primary">
        </span>
        <span class="secondary">
        </span>
    </span>
    <span class="number" data-number="9">
        <span class="primary">
        </span>
        <span class="secondary">
        </span>
    </span>
</div> -->
    <div class="hero-section hero-slider owl-carousel owl-theme">
        <div class="hero-single" style="background-image: url({{ asset('web/assets/img/slider/slider-1.jpg') }})">
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
        <div class="hero-single" style="background-image: url({{ asset('web/assets/img/slider/slider-2.jpg') }})">
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
        <div class="hero-single" style="background-image:url({{ asset('web/assets/img/slider/slider-3.jpg') }})">
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
    </div>


    <div class="feature-area py-50">
        <div class="container">
            <div class="feature-area-wrapper">
                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <div class="feature-item active">
                            <div class="feature-icon">
                                <i class="flaticon-psychology-2"></i>
                            </div>
                            <div class="feature-content">
                                <h5>Satisfied Services</h5>
                                <p>It is a long established fact that a reader will be distract by the readable
                                    content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="flaticon-psychologist"></i>
                            </div>
                            <div class="feature-content">
                                <h5>Dedicated Therapist</h5>
                                <p>It is a long established fact that a reader will be distract by the readable
                                    content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="feature-item active">
                            <div class="feature-icon">
                                <i class="flaticon-meeting"></i>
                            </div>
                            <div class="feature-content">
                                <h5>Kind Consultation</h5>
                                <p>It is a long established fact that a reader will be distract by the readable
                                    content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="flaticon-24-hours"></i>
                            </div>
                            <div class="feature-content">
                                <h5>Support Patient</h5>
                                <p>It is a long established fact that a reader will be distract by the readable
                                    content.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="about-area py-50">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-left">
                        <div class="about-img">
                            <img class="about-img-1" src="{{ asset('web/images/20222.jpg') }}" alt="">
                        </div>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-right">
                        <div class="site-heading mb-3">
                            {{-- <span class="site-title-tagline">About Us</span>
                        <h2 class="site-title">Cadaveric Ultrasound Guided Regional <span>Anaesthesia</span></h2> --}}
                        </div>
                        <p class="about-text">
                            <b>Dear Friends,</b>
                            <br>
                            Wishing all of you a very happy and productive year! We are happy to announce that we will be
                            conducting the Comprehensive Symposium on Ultrasound for the Anaesthesiologist (CUSA) from the
                            24 th to the 26 th of February 2023!

                            As always CUSA 2023 is going to be an academic feast! There will be demonstration of anatomy in
                            cadavers with the active participation of our colleagues from the Department of Anatomy.

                            Scanning of sonoanatomy in volunteers, practice needling in cadavers, interactive talks and
                            discussions will all be a part of this Symposium! The highlight of CUSA this time is going to be
                            revisiting all blocks from the classic to the most recent approaches. I am sure you want to know
                            when and how to do a selective superior, intermediate or inferior trunk block instead of a
                            supraclavicular block! I am sure time and again you needed to use the ultrasound for a difficult
                            back in a high risk patient and rued that you could not do so optimally! After CUSA, with the
                            help of our dedicated national and international faculty.
                        </p>
                        <p class="about-text mt-5">
                            <b>we hope all</b>
                            <br>
                            your doubts are cleared and you are as adept at the newer blocks and techniques as the old ones!
                            There will also be a session on Point of Care ultrasound (POCUS) for the anaesthesiologist. This
                            will include gastric ultrasound, airway ultrasound, lung ultrasound, transthoracic
                            echocardiography and ultrasound for venous access. The faculty involved in POCUS are experts who
                            will make it possible for you to assimilate
                            POCUS in your day to day practice!
                            <br>
                            Need I say more …………. CUSA is a Regional anaesthesia Symposium with a difference !
                            <br>

                            With lots of learning, seeing and imbibing of Regional anaesthesia & POCUS!
                            <br>

                            As always we eagerly await your participation in CUSA 2023! Do come and join in this
                            <br>

                            academic extravaganza!
                            <br>

                            Essential skills for all anaesthesiologists!
                            <br>

                            Back to the future! Revisiting regional blocks from classic to the newest approaches!!
                            <br>

                        </p>

                        <a href="https://docs.google.com/forms/d/e/1FAIpQLSecmHa4UtvlI_YJDZ6mDGk47g2-wnSQtSE-OHdL9PQq-1g0CA/viewform"
                            class="theme-btn mt-4">Registration<i class="far fa-arrow-right"></i></a>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col d-flex justify-content-center">
                <img src="{{ asset('web/images/reg.png') }}">
            </div>
        </div>
    </div>



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
                            <img src="{{ asset('web/images/testimonial-03.jpg') }}"alt="">
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
                                <a href="#" class="theme-btn">Read More <span
                                        class="far fa-arrow-right"></span></a>
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
                                <a href="#" class="theme-btn">Read More <span
                                        class="far fa-arrow-right"></span></a>
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
                                <a href="#" class="theme-btn">Read More <span
                                        class="far fa-arrow-right"></span></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

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
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96708.34194156103!2d-74.03927096447748!3d40.759040329405195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4a01c8df6fb3cb8!2sSolomon%20R.%20Guggenheim%20Museum!5e0!3m2!1sen!2sbd!4v1619410634508!5m2!1sen!2s"
            style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>

    <script>
        setInterval(function() {
            doFlip(2, 2);
            }, 1000);

function doFlip(numberIndex, count) {
    
  if (count === undefined) {
    count = 1;
  }
  
  var currentNumberElement = $(".number:eq(" + numberIndex + ")");
  
  var currentNumber = Number(currentNumberElement.attr("data-number"));    

  currentNumber -= count;
  
  var makeAFlip = false;
  
  if (currentNumber < 0) {
    currentNumber = 10 + currentNumber;
    makeAFlip = true;
  }
  
  currentNumberElement.find(".primary").attr("title", currentNumber);
  currentNumberElement.find(".secondary").attr("title", currentNumber);
  
  if (makeAFlip) {
    if (numberIndex > 0) {
      doFlip(--numberIndex);
    }
  } 
  
  currentNumberElement.addClass("flip");
  
  setTimeout(function() {
    currentNumberElement.attr("data-number", currentNumber);
    
    currentNumberElement.removeClass("flip");
  }, 500);
}
    </script>
@endsection
