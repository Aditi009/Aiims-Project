@extends('layouts.main')
@section('content')


<div class="container time">
    <div id="day_to">
        <h3 class="animate-charcter"> </h3>

    </div>
</div>
<div id="carouselExampleIndicators" class="carousel slide mycorousel" data-interval="3000" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>

    </ol>
    <div class="callout">
        <img src="{{ asset('web/images/cout_msg.png') }}" alt="" srcset="">
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="{{ asset('web/carousel/1.jpeg') }}" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('web/carousel/2.jpeg') }}" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('web/carousel/3.png') }}" alt="Third slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('web/carousel/4.png') }}" alt="Third slide">
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



<div class="feature-area" style="    margin-top: 30px;">
    <div class="container">
        <div class="feature-area-wrapper">
            <div class="row my-p">
                <div class="col-md-6 col-lg-3">
                    <div class="feature-item active">
                        <div class="feature-icon">
                            <img src="{{ asset('web/images/icon2.png') }}" class="flaticon-meeting" />
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
                            <img src="{{ asset('web/images/icon1.png') }}" class="flaticon-meeting" />
                        </div>
                        <div class="feature-content">
                            <h5>Demonstration of Anatomy and Needling on Cadavers</h5>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="feature-item active">
                        <div class="feature-icon">
                            <!-- <i class="flaticon-psychologist"></i> -->
                            <img src="{{ asset('web/images/icon3.png') }}" class="flaticon-meeting" />
                        </div>
                        <div class="feature-content">
                            <h5>Point of Care Ultrasound</h5>

                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="feature-item active">
                        <div class="feature-icon">
                            <!-- <i class="flaticon-meeting"></i> -->
                            <img src="{{ asset('web/images/icon4.png') }}" class="flaticon-meeting" />
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
    <div class="row justify-content-center">
        <div class="col-md-3 img-container-hod">
            <img class="" src="{{ asset('web/images/hod.png') }}" alt="Card image cap">
            <div class="row justify-content-center text-center">
                <ul>
                    <li style="font-weight: 900;font-size: 24px; color:maroon;"><i
                            class="lni-check-mark-circle"></i><span class="text">Dr.
                            Lokesh Kashyap
                        </span></li>
                    <li><b>Professor & Head</b></li>
                    <li style="margin : 0px 20px">
                        Department of Anaesthesiology,
                        <br /> Pain Medicine and Critical Care, AllMS, New Delhi
                    </li>

                </ul>
            </div>
        </div>
        <div class="col-md-8 ml-2 mr-2">
            <h4>Dear Friends,</h4>
            <br>
            Wishing all of you a very happy and productive year!
            We are happy to announce that we will be conducting the Comprehensive Symposium on Ultrasound for the
            Anaesthesiologist (CUSA) from the 24th to 26th of February 2023!

            As always CUSA 2023 is going to be an academic feast! There will be demonstration of anatomy in
            cadavers, scanning of sonoanatomy in volunteers, practice needling in cadavers, interactive talks and
            discussions!


            </p>

            <br />
            <p>
                The highlight of CUSA this time is going to be revisiting all blocks from the classic to
                the most recent approaches! Point of Care ultrasound for the anaesthesiologist is an essential skill.
                The faculty involved in POCUS are experts who will make it possible for you to
                assimilate POCUS in your day to day practice! Need I say more……
                <b><i>CUSA is a Regional Anaesthesia Symposium with a difference!</i></b> As always, we eagerly
                await your participation in CUSA 2023!.
            </p>
            <p><i><b style="font-size:17px;color:maroon;">Do come and join in this academic extravaganza!</b></i></p>


        </div>
    </div>
</div>

<!-- registration -->
<div class="testimonial-area py-20">
    <div class="container mt-10">
        <div id="registration" class="row">


            <style>
            /* --------Styling for any table without going for stacked table in mobile......... */
            .styled-table {
                border-collapse: collapse;
                font-size: 1em;
                width: 100%;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
            }

            .styled-table thead tr {
                background-color: #738de9 !important;
                color: #ffffff;
                text-align: left;
            }

            .styled-table th,
            .styled-table td {
                padding: 12px 15px;
            }

            .styled-table tbody tr {
                border-bottom: 0px solid #dddddd;
            }

            .styled-table tbody tr:nth-of-type(even) {
                background-color: #f3f3f3;
            }



            .styled-table tbody tr:last-of-type {
                border-bottom: 1px solid #b1faeb;
            }

            tbody.reg-table>:nth-child(1) {
                background-color: #1b47e5d4 !important;
                font-weight: 600 !important;
                color: #bef516 !important;
                border-top: 1px solid #ddd;
            }

            tbody.reg-table>:nth-child(6) {
                font-weight: 400 !important;
                font-family: roboto, Helvetica, sans-serif;

            }
            </style>



            <div class="col-md-12 mt-2">
                <table class="styled-table">
                    <thead>
                        <tr>
                            <td class="text-center" colspan="4"><strong >Registration Fee Structure<br>
                                </strong></td>
                        </tr>
                    </thead>
                    <tbody class="reg-table">
                        <tr>
                            <td><span style="color: #ffffff;"><strong>Dates</strong></span></td>
                            <td><span style="color: #ffffff;"><strong>Till 15<sup><span
                                                style="font-size: 10px;">th</span></sup>
                                        January</strong></span></td>
                            <td><span style="color: #ffffff;"><strong>16<sup><span
                                                style="font-size: 10px;">th</span></sup> January
                                        Onwards</strong></span></td>
                        </tr>
                        <tr>
                            <td>Registration Fee</td>
                            <td><span style="color: #000000;">INR 8500<br>
                                </span></td>
                            <td><span style="color: #000000;">INR 9000<br>
                                </span></td>
                        </tr>
                    </tbody>
                </table>
            </div>




        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-md-3">
                <img class="card-img-top" src="{{ asset('web/images/reg_banner.png') }}" alt="Card image cap">
            </div>
            <div class="col-md-9" style="margin-top:20px">
                <h3 style="color:black">Scan the QR Code for Registration after account
                    transfer.</h3>
                <div class="row">
                    <div class="col-md-8 mt-3">
                        <h4>Account Details :</h4>

                        <div class="row mt-3 ml-1">
                            <h4 style="color:black">37937307048 (State Bank of India)</h4>
                        </div>
                        <div class="row mt-3 ml-1">
                            <h4 style="color:black">IFSC : SBIN0001536</h4>
                        </div>
                        <div class="row mt-3 ml-1">
                            <h4 style="color:black">Whatsapp : 7042129428,9464533877,9810104383</h4>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <a target="_blank"
                            href="https://docs.google.com/forms/d/e/1FAIpQLSecmHa4UtvlI_YJDZ6mDGk47g2-wnSQtSE-OHdL9PQq-1g0CA/viewform"
                            class="theme-btn mt-4">Registration<i class="far fa-arrow-right"></i></a>
                    </div>
                </div>

            </div>
        </div>


    </div>
</div>


<div class="case-area mt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="site-heading text-center">
                    <h3 class="">TOURIST ATTRACTIONS
                    </h3>
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

<script type="text/JavaScript" src="https://MomentJS.com/downloads/moment.js"></script>


@endsection