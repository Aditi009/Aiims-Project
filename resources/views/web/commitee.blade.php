@extends('layouts.main')
@section('content')
{{-- <div class="site-breadcrumb" style="background: url('{{asset('web/images/hi.jpg')}}')">
<div class="container">
    <h2 class="breadcrumb-title">Commitee </h2>
    <ul class="breadcrumb-menu">
        <li><a href="index.html">Home</a></li>
        <li class="active"> Commitee</li>
    </ul>
</div>
</div> --}}

<style>
.body-text {
    text-align: center;
    width: max-content;
    color: red;
    font-size: 20px;
    font-weight: 600;
}

.body-bottom {
    color: #5698f4;
    font-weight: 500;
    font-size: 17px;
    margin-top: -10px;

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
    object-fit: cover;
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
<div class="about-area">
    <div class="row justify-content-center p-10">
        <h3 class="text-center ocheading">Organising Committee</h3>
    </div>
    <div class="container">
        <div class="row justify-content-center mt-5 topcardrow">
            <div class="col-md-3 card myprofilecard align-items-center">
                <img class="card-img-top" src="{{ asset('web/org/chairperson.png') }}" alt="Card image cap">
                <div class="card-body">
                    <div class="card-text text-center">
                        <p class="body-text">Organising Chairperson
                        </p>
                        <p class="body-bottom">Prof. Lokesh Kashyap</p>
                        <p class="body-bottom">Head of Department</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 card myprofilecard align-items-center">
                <img class="card-img-top" src="{{ asset('web/org/anj.jpeg') }}" alt="Card image cap">
                <div class="card-body">
                    <div class="card-text text-center">
                        <p class="body-text">Organising Secretary
                        </p>
                        <p class="body-bottom">Prof. Anjolie Chhabra</p>
                    </div>

                </div>
            </div>
        </div>

        <div class="row justify-content-center mt-5 topcardrow">

            <div class="col-md-3 card myprofilecard align-items-center">
                <img class="card-img-top" src="{{ asset('web/images/deeparora.png') }}" alt="Card image cap">
                <div class="card-body">
                    <div class="card-text text-center">
                        <p class="body-text">Co-Organising Secretary
                        </p>
                        <p class="body-bottom">Dr Bikash Ranjan Ray</p>
                    </div>

                </div>
            </div>

            <div class="col-md-3 card myprofilecard align-items-center">
                <img class="card-img-top" src="{{ asset('web/org/db.jpg') }}" alt="Card image cap">
                <div class="card-body">
                    <div class="card-text text-center">
                        <p class="body-text">Co-Organising Secretary
                        </p>
                        <p class="body-bottom">Dr. Debesh Bhoi</p>
                    </div>

                </div>
            </div>
        </div>

        <div class="row justify-content-center mt-5">

            <div class="col-md-2 card myprofilecard align-items-center">
                <img class="card-img-top" src="{{ asset('web/org/heenagarg.jpeg') }}" alt="Card image cap">
                <div class="card-body">
                    <div class="card-text text-center">
                        <p class="body-text">Workshop coordinators
                        </p>
                        <p class="body-bottom">Dr. Heena Garg</p>
                    </div>

                </div>
            </div>

            <div class="col-md-2 card myprofilecard align-items-center">
                <img class="card-img-top" src="{{ asset('web/org/amit.png') }}" alt="Card image cap">
                <div class="card-body">
                    <div class="card-text text-center">
                        <p class="body-text">Workshop coordinators
                        </p>
                        <p class="body-bottom">Dr. Amit Kumar</p>
                    </div>

                </div>
            </div>
            <div class="col-md-2 card myprofilecard align-items-center">
                <img class="card-img-top" src="{{ asset('web/org/neha.png') }}" alt="Card image cap">
                <div class="card-body">
                    <div class="card-text text-center">
                        <p class="body-text">Workshop coordinators
                        </p>
                        <p class="body-bottom">Dr. Neha Pangasa</p>
                    </div>

                </div>
            </div>

            <div class="col-md-2 card myprofilecard align-items-center">
                <img class="card-img-top" src="{{ asset('web/org/sachine.png') }}" alt="Card image cap">
                <div class="card-body">
                    <div class="card-text text-center">
                        <p class="body-text">Workshop coordinators
                        </p>
                        <p class="body-bottom">Dr. Sachin Kumar</p>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center listcontainer">
            <div class="col-md-4">
                <p class="body-text">Executive Committee</p>
                <ul class="organiserslist">
                    <li>Dr. Punnet Khanna</li>
                    <li>Dr. Rahul K Anand</li>
                    <li>Dr. Shailendra Kumar</li>
                    <li>Dr. Souvik Maitra</li>
                    <li>Dr. Akhil Kant Singh</li>
                    <li>Dr. Rakesh Kumar</li>
                    <li>Dr. Nishant Patel</li>
                    <li>Dr. Abhishek. N </li>
                    <li>Dr. Ajisha Aravindan</li>
                    <li>Dr. Vineeta Venkateswaran</li>
                    <li>Dr. Christopher Dass</li>
                    <li>Dr. Shreya Bharat Shah</li>
                    <li>Dr. Anju Gupta </li>
                    <li>Dr. Sulagna Bhattacharjee</li>
                    <li>Dr. Parin Lalwani</li>
                    <li>Dr. Kelika Prakash </li>
                    <li>Dr. Mritunjay Kumar</li>
                    <li>Dr. T. Nageshwara Rao</li>
                    <li>Dr. Dhruv Jain</li>
                    <li>Dr. Sana Yasmin Hussain </li>
                    <li>Dr. Priyanka Kumar Dutta</li>
                    <li>Dr. Savitri H.G </li>
                    <li>Dr. Ram Singh</li>
                    <li>Dr. Sneha Singh</li>
                </ul>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-4">
                <p class="body-text">Scientific Advisors</p>
                <ul class="organiserslist">
                    <li>Prof. Ganga Prasad</li>
                    <li>Prof. V.K Mohan</li>
                    <li>Prof. Vimi Rewari </li>
                    <li>Prof. V. Darlong</li>
                    <li>Prof. Jyotsna Punj </li>
                    <li>Prof. R.K Pandey</li>
                    <li>Prof. Rashmi Ramachandran</li>

                </ul>
            </div>
        </div>
    </div>
</div>
@endsection