@extends('layouts.main')
@section('content')
<div class="site-breadcrumb" style="background: url('{{asset('web/assets/img/slider/slider-1.jpg')}}')">
    <div class="container">
            <h2 class="breadcrumb-title">International Faculty </h2>
            <ul class="breadcrumb-menu">
                <li><a href="index.html">Home</a></li>
                <li class="active"> International Faculty</li>
            </ul>
        </div>
    </div>


    <div class="team-area py-120">
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
                        <img src="{{asset('web/images/team-01.jpg')}}" alt="thumb">
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
                        <img src="{{asset('web/images/team-02.jpg')}}" alt="thumb">
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
                        <img src="{{asset('web/images/team-03.jpg')}}" alt="thumb">
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
                        <img src="{{asset('web/images/team-04.jpg')}}" alt="thumb">
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
    
    @endsection

