@extends('layouts.main')
@section('content')
<style>
    .mystyl{
        color : red;
        font-size: 22px;
    }
    .flyers img{
        cursor:pointer;
    }
    .flyers img:hover{
        cursor:pointer;
        scale:1.2;
    }
</style>
{{-- <div class="site-breadcrumb" style="background: url('{{asset('web/images/hi.jpg')}}')">
    <div class="container">
            <h2 class="breadcrumb-title">Download </h2>
            <ul class="breadcrumb-menu">
                <li><a href="index.html">Home</a></li>
                <li class="active"> Download</li>
            </ul>
        </div>
    </div> --}}

    {{-- <div class="case-area py-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="site-heading text-center">
                        <span class="site-title-tagline">Download</span>
                    </div>
                </div>
            </div>

            <div class="row filter-box popup-gallery">
                <div class="col-md-6 col-lg-4 filter-item cat1 cat2">
                    <div class="case-item">
                        <div class="case-img">
                            <img class="img-fluid" src="{{asset('web/images/case-01.jpg')}}" alt="">
                            <a class="case-link" download="" href="{{asset('web/images/case-01.jpg')}}"> <i
                                    class="far fa-download"></i></a>
                            <div class="case-content">
                                <h4><a href="#">Personality Disorder</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 filter-item cat2 cat3">
                    <div class="case-item">
                        <div class="case-img">
                            <img class="img-fluid" src="{{asset('web/images/case-02.jpg')}}" alt="">
                            <a class="case-link" download href="{{asset('web/images/case-02.jpg')}}"> <i
                                    class="far fa-download"></i></a>
                            <div class="case-content">
                                <h4><a href="#">Family Counseling</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 filter-item cat3 cat4 cat5">
                    <div class="case-item">
                        <div class="case-img">
                            <img class="img-fluid" src="{{asset('web/images/case-03.jpg')}}" alt="">
                            <a class=" case-link" download="" href="{{asset('web/images/case-03.jpg')}}"> <i
                                    class="far fa-download"></i></a>
                            <div class="case-content">
                                <h4><a href="#">Behavioral Symptoms</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                
              
               
            </div>
        </div>
    </div>
     --}}

     <div class="row flyers m-5 justify-content-center">
        <div class="col-md-3">
            <a target="_blank" href="{{asset('web/flyer/1.jpeg')}}"><img src="{{asset('web/flyer/1.jpeg')}}" alt="" /></a>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-3">
            <a target="_blank" href="{{asset('web/flyer/2.jpeg')}}"><img src="{{asset('web/flyer/2.jpeg')}}" alt="" /></a>
        </div>
     </div>
     <div class="row flyers m-5 justify-content-center">
        <div class="col-md-3">
            <a target="_blank" href="{{asset('web/flyer/3.jpeg')}}"><img src="{{asset('web/flyer/3.jpeg')}}" alt="" /></a>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-3">
            <a target="_blank" href="{{asset('web/flyer/4.jpeg')}}"><img src="{{asset('web/flyer/4.jpeg')}}" alt="" /></a>
        </div>
     </div>


<div class="case-area py-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="site-heading-p text-center">
                    <span class="mystyl">See this space for post event photographs and certificates.</span>
                </div>
            </div>
        </div>
    </div>
</div>
  
    @endsection

