@extends('layouts.main')
@section('content')
<div class="site-breadcrumb" style="background: url('{{asset('web/images/hi.jpg')}}')">
    <div class="container">
            <h2 class="breadcrumb-title">Commitee </h2>
            <ul class="breadcrumb-menu">
                <li><a href="index.html">Home</a></li>
                <li class="active"> Commitee</li>
            </ul>
        </div>
    </div>


    <div class="about-area py-120">
        <div class="container">
            <div class="row align-items-center" style="display: flex;justify-content: center;">
                <div class="col-8">
                <img src="{{asset('web/images/comm.jpg')}}">
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


  

    @endsection

