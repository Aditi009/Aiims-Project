@extends('layouts.main')
@section('content')
{{-- <div class="site-breadcrumb" style="background: url('{{asset('web/images/hi.jpg')}}')">
<div class="container">
    <h2 class="breadcrumb-title">International Faculty </h2>
    <ul class="breadcrumb-menu">
        <li><a href="index.html">Home</a></li>
        <li class="active"> International Faculty</li>
    </ul>
</div>
</div> --}}
<style>
.card-text {
    max-width: 210px;
}

.body-text {
    text-align: center;
    color: red;
    font-size: 20px;
    font-weight: 600;
}

.body-bottom {
    color: #5698f4;
    font-weight: 500;
    font-size: 17px;
    margin-top: -10px;
    max-width: 210 px;

}

@media only screen and (max-width: 600px) {}

.about-area {
    padding-bottom: 60px;
}


/****y styles */
.myprofilecard {
    border: none;
    width: auto;
}

.myprofilecard img {
    border-radius: 50%;
    height: 180px;
    width: 180px;
    object-fit: unset;
    border: 4px solid #5698f4;
}

.topcardrow .myprofilecard {
    width: 30rem;
}

.ocheading {
    color: #7e1916;
    font-weight: 900;
}

.organiserslist li {
    color: #5698f4;
    margin-left: 4px;
}

.listcontainer {
    margin-top: 40px;
}
</style>

<div class="team-area py-120">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="site-heading text-center">
                    <span class="site-title-tagline">Team</span>
                    <h2 class="site-title" style=" color: #7e1916;">National Faculty</span></h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-md-3 card myprofilecard align-items-center">
                <img class="card-img-top" src="{{ asset('web/images/kajaljain.png') }}" alt="Card image cap">
                <div class="card-body">
                    <div class="card-text text-center">
                        <p class="body-text">Kajal Jain
                        </p>
                        <p class="body-bottom">PGIMER, Chandigarh</p>
                    </div>

                </div>
            </div>

            <div class="col-md-3 card myprofilecard align-items-center">
                <img class="card-img-top" src="{{ asset('web/images/sandeepdiwan.png') }}" alt="Card image cap">
                <div class="card-body">
                    <div class="card-text text-center">
                        <p class="body-text">Sandeep Diwan </p>
                        <p class="body-bottom">Sancheti Hospital, Pune</p>
                    </div>

                </div>
            </div>

            <div class="col-md-3 card myprofilecard align-items-center">
                <img class="card-img-top" src="{{asset('web/images/deeparora.png')}}" alt="Card image cap">
                <div class="card-body">
                    <div class="card-text text-center">
                        <p class="body-text">Dr. Deep Arora
                        </p>
                        <p class="body-bottom">Max Hospital, Gurgaon</p>
                    </div>

                </div>
            </div>



        </div>
        <div class="row justify-content-center mt-5">

            <div class="col-md-3 card myprofilecard align-items-center">
                <img class="card-img-top" src="{{ asset('web/images/subrahmanyam.png') }}" alt="Card image cap">
                <div class="card-body">
                    <div class="card-text text-center">
                        <p class="body-text">Subramanyam S Mahankali
                        </p>
                        <p class="body-bottom">Aster Hospital, Bangalore</p>
                    </div>

                </div>
            </div>

            <div class="col-md-3 card myprofilecard align-items-center">
                <img class="card-img-top" src="{{ asset('web/images/niddhibhatia.jpeg') }}" alt="Card image cap">
                <div class="card-body">
                    <div class="card-text text-center">
                        <p class="body-text">Nidhi Bhatia

                        </p>
                        <p class="body-bottom">PGIMER, Chandigarh</p>
                    </div>

                </div>
            </div>

            <div class="col-md-3 card myprofilecard align-items-center">
                <img class="card-img-top" src="{{ asset('web/images/tshivanshmgham.png') }}" alt="Card image cap">
                <div class="card-body">
                    <div class="card-text text-center">
                        <p class="body-text">T. SIVASHANMUGAM
                        </p>
                        <p class="body-bottom">MGMC, Pondicherry </p>
                    </div>

                </div>
            </div>
        </div>

        <div class="row justify-content-center mt-5">
            <div class="col-md-3 card myprofilecard align-items-center">
                <img class="card-img-top" src="{{ asset('web/images/vipingoel.png') }}" alt="Card image cap">
                <div class="card-body">
                    <div class="card-text text-center">
                        <p class="body-text">Vipin Goel
                        </p>
                        <p class="body-bottom">Ganga Hospital, Coimbatore</p>
                    </div>

                </div>
            </div>
            <div class="col-md-3 card myprofilecard align-items-center">
                <img class="card-img-top" src="{{ asset('web/images/rupinder.jpeg') }}" alt="Card image cap">
                <div class="card-body">
                    <div class="card-text text-center">
                        <p class="body-text">Rupinder Singh
                        </p>
                        <p class="body-bottom">DMC, Ludhiyana</p>
                    </div>

                </div>
            </div>

            <div class="col-md-3 card myprofilecard align-items-center">
                <img class="card-img-top" src="{{ asset('web/images/devendra.png') }}" alt="Card image cap">
                <div class="card-body">
                    <div class="card-text text-center">
                        <p class="body-text">Debendra Kumar Tripathi

                        </p>
                        <p class="body-bottom">AIIMS, Rishikesh</p>
                    </div>

                </div>
            </div>




        </div>
    </div>
</div>


{{-- <div class="team-area py-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="site-heading text-center">
                        <span class="site-title-tagline">Team</span>
                        <h2 class="site-title">Meet With <span>Experts</span></h2>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">

                <div class="col-md-6 col-lg-3">
                    <div class="team-item active">
                        <img src="{{asset('web/images/philippe.png')}}" style="min-height: 370px;" alt="thumb">
<div class="team-social">
    <a href="#"><i class="fab fa-facebook-f"></i></a>
    <a href="#"><i class="fab fa-twitter"></i></a>
    <a href="#"><i class="fab fa-instagram"></i></a>
    <a href="#"><i class="fab fa-linkedin"></i></a>
    <a href="#"><i class="fab fa-youtube"></i></a>
</div>
<div class="team-content">
    <div class="team-bio">
        <h5><a href="#">Philippe Macaire</a></h5>
        <span> VinMec INternational Hospitals Hanoi Vietnam</span>
    </div>
</div>
</div>
</div>
<div class="col-md-6 col-lg-3">
    <div class="team-item">
        <img src="{{asset('web/images/mornewolmaran.png')}}" style="min-height: 370px;" alt="thumb">
        <div class="team-social">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
        </div>
        <div class="team-content">
            <div class="team-bio">
                <h5><a href="#">Morne Wolmarans</a></h5>
                <span>Norfolk & Norwich University Hospital, UK
                </span>
            </div>
        </div>
    </div>
</div>
<div class="col-md-6 col-lg-3">
    <div class="team-item">
        <img src="{{asset('web/images/mornewolmaran.png')}}" style="min-height: 370px;" alt="thumb">
        <div class="team-social">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
        </div>
        <div class="team-content">
            <div class="team-bio">
                <h5><a href="#">Vishal uppal</a></h5>
                <span>Norfolk & Norwich University Hospital, UK
                </span>
            </div>
        </div>
    </div>
</div>
<div class="col-md-6 col-lg-3">
    <div class="team-item">
        <img src="{{asset('web/images/mornewolmaran.png')}}" style="min-height: 370px;" alt="thumb">
        <div class="team-social">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
        </div>
        <div class="team-content">
            <div class="team-bio">
                <h5><a href="#">Sandeep</a></h5>
                <span>Norfolk & Norwich University Hospital, UK
                </span>
            </div>
        </div>
    </div>
</div>
<div class="col-md-6 col-lg-3">
    <div class="team-item">
        <img src="{{asset('web/images/pritanand.png')}}" style="min-height: 370px;" alt="thumb">
        <div class="team-social">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
        </div>
        <div class="team-content">
            <div class="team-bio">
                <h5><a href="#">Prit Anand Singh</a></h5>
                <span> Changi General Hospital, Singapore</span>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
--}}
@endsection