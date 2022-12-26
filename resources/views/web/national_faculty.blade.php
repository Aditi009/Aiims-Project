@extends('layouts.main')
@section('content')

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

<div class="team-area">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="site-heading text-center">
                    <span class="site-title-tagline">Meet with the experts</span>
                    <h2 class="site-title" style=" color: #7e1916;">National Faculty</span></h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-2">
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
                        <p class="body-text">Deep Arora
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
                <img class="card-img-top" src="{{ asset('web/images/rupinder.png') }}" alt="Card image cap">
                <div class="card-body">
                    <div class="card-text text-center">
                        <p class="body-text">Rupinder Kaur
                        </p>
                        <p class="body-bottom">DMC, Ludhiana</p>
                    </div>

                </div>
            </div>

            <div class="col-md-3 card myprofilecard align-items-center">
                <img class="card-img-top" src="{{ asset('web/images/tshivanshmgham.png') }}" alt="Card image cap">
                <div class="card-body">
                    <div class="card-text text-center">
                        <p class="body-text">T. Sivasanmugam
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
                <img class="card-img-top" src="{{ asset('web/images/nidhibhatia.png') }}" alt="Card image cap">
                <div class="card-body">
                    <div class="card-text text-center">
                        <p class="body-text">Nidhi Bhatia

                        </p>
                        <p class="body-bottom">PGIMER, Chandigarh</p>
                    </div>

                </div>
            </div>
           

            <div class="col-md-3 card myprofilecard align-items-center">
                <img class="card-img-top" src="{{ asset('web/images/devendra.png') }}" alt="Card image cap">
                <div class="card-body">
                    <div class="card-text text-center">
                        <p class="body-text">Debendra Kumar Tripathi

                        </p>
                        <p class="body-bottom">AIIMS, Raipur</p>
                    </div>

                </div>
            </div>




        </div>
    </div>
</div>



@endsection