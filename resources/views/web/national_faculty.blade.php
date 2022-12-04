@extends('layouts.main')
@section('content')
{{-- <div class="site-breadcrumb" style="background: url('{{asset('web/images/hi.jpg')}}')">
    <div class="container">
        <h2 class="breadcrumb-title">National Faculty </h2>
        <ul class="breadcrumb-menu">
            <li><a href="index.html">Home</a></li>
            <li class="active"> National Faculty</li>
        </ul>
    </div>
</div> --}}
<style>
    .team-item img{
        min-height: 400px;
    }
</style>


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
                    <img src="{{asset('web/images/tshivanshmgham.png')}}" alt="thumb">
                    <div class="team-social">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        
                    </div>
                    <div class="team-content">
                        <div class="team-bio">
                            <h5><a href="#">T. SIVASHANMUGAM</a></h5>
                            <span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="team-item">
                    <img src="{{asset('web/images/sandeepdiwan.png')}}" alt="thumb">
                    <div class="team-social">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        
                    </div>
                    <div class="team-content">
                        <div class="team-bio">
                            <h5><a href="#">Sandeep Diwan</a></h5>
                            <span>Sancheti Hospital, Pune
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="team-item active">
                    <img src="{{asset('web/images/kajaljain.png')}}" alt="thumb">
                    <div class="team-social">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        
                    </div>
                    <div class="team-content">
                        <div class="team-bio">
                            <h5><a href="#">Kajal Jain</a></h5>
                            <span>PGIMER, Chandigarh
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="team-item">
                    <img src="{{asset('web/images/vipingoel.png')}}" alt="thumb">
                    <div class="team-social">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        
                    </div>
                    <div class="team-content">
                        <div class="team-bio">
                            <h5><a href="#">Vipin Goel</a></h5>
                            <span>Ganga Hospital Coimbatore </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-lg-3">
                <div class="team-item">
                    <img src="{{asset('web/images/deeparora.png')}}" alt="thumb">
                    <div class="team-social">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        
                    </div>
                    <div class="team-content">
                        <div class="team-bio">
                            <h5><a href="#">Dr. Deep Arora</a></h5>
                            <span>Max Hospital, Gurgaon
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="team-item">
                    <img src="{{asset('web/images/subrahmanyam.png')}}" alt="thumb">
                    <div class="team-social">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        
                    </div>
                    <div class="team-content">
                        <div class="team-bio">
                            <h5><a href="#">Subramanyam S Mahankali</a></h5>
                            <span> Aster Hospital Bangalore
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="team-item active">
                    <img src="{{asset('web/images/devendra.png')}}" alt="thumb">
                    <div class="team-social">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        
                    </div>
                    <div class="team-content">
                        <div class="team-bio">
                            <h5><a href="#"> Debendra Kumar Tripathi</a></h5>
                            <span>
AIIMS, Rishikesh
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="col-md-6 col-lg-3">
                <div class="team-item">
                    <img src="{{asset('web/images/team-04.jpg')}}" alt="thumb">
                    <div class="team-social">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        
                    </div>
                    <div class="team-content">
                        <div class="team-bio">
                            <h5><a href="#">Vipin Goel</a></h5>
                            <span>Ganga Hospital Coimbatore </span>
                        </div>
                    </div>
                </div>

                <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
            </div> -->
        </div>
    </div>
</div>

@endsection