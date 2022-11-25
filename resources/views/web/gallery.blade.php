@extends('layouts.main')
@section('content')
    <div class="site-breadcrumb" style="background: url({{asset('web/images/about-01.jpg')}})">
        <div class="container">
            <h2 class="breadcrumb-title">Gallery </h2>
            <ul class="breadcrumb-menu">
                <li><a href="index.html">Home</a></li>
                <li class="active"> Gallery</li>
            </ul>
        </div>
    </div>

    <div class="case-area py-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="site-heading text-center">
                        <span class="site-title-tagline">Gallery</span>
                        <h2 class="site-title">Recent <span>Works</span></h2>
                    </div>
                </div>
            </div>
            <div class="filter-controls">
                <ul class="filter-btns">
                    <li class="active" data-filter="*">All</li>
                    <li data-filter=".cat1">Family Problem</li>
                    <li data-filter=".cat2">Depression</li>
                    <li data-filter=".cat3">Personal</li>
                    <li data-filter=".cat4">Breakup</li>
                    <li data-filter=".cat5">Frustation</li>
                </ul>
            </div>
            <div class="row filter-box popup-gallery">
                <div class="col-md-6 col-lg-4 filter-item cat1 cat2">
                    <div class="case-item">
                        <div class="case-img">
                            <img class="img-fluid" src="{{asset('web/images/case-01.jpg')}}" alt="">
                            <a class="popup-img case-link" href="{{asset('web/images/case-01.jpg')}}"> <i
                                    class="far fa-plus"></i></a>
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
                            <a class="popup-img case-link" href="{{asset('web/images/case-02.jpg')}}"> <i
                                    class="far fa-plus"></i></a>
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
                            <a class="popup-img case-link" href="{{asset('web/images/case-03.jpg')}}"> <i
                                    class="far fa-plus"></i></a>
                            <div class="case-content">
                                <h4><a href="#">Behavioral Symptoms</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 filter-item cat2 cat4">
                    <div class="case-item">
                        <div class="case-img">
                            <img class="img-fluid" src="{{asset('web/images/case-04.jpg')}}" alt="">
                            <a class="popup-img case-link" href="{{asset('web/images/case-04.jpg')}}"> <i
                                    class="far fa-plus"></i></a>
                            <div class="case-content">
                                <h4><a href="#">Children Disorder</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 filter-item cat1 cat4 cat5">
                    <div class="case-item">
                        <div class="case-img">
                            <img class="img-fluid" src="{{asset('web/images/case-05.jpg')}}" alt="">
                            <a class="popup-img case-link" href="{{asset('web/images/case-05.jpg')}}"> <i
                                    class="far fa-plus"></i></a>
                            <div class="case-content">
                                <h4><a href="#">Depression Problem</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 filter-item cat4 cat3">
                    <div class="case-item">
                        <div class="case-img">
                            <img class="img-fluid" src="{{asset('web/images/case-06.jpg')}}" alt="">
                            <a class="popup-img case-link" href="{{asset('web/images/case-06.jpg')}}"> <i
                                    class="far fa-plus"></i></a>
                            <div class="case-content">
                                <h4><a href="#">Couple Counseling</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
  
    @endsection

