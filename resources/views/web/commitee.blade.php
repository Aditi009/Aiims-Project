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
        .com-card {
            background-color: #5698f4;
            width: 250px;
            height: 250px;
            padding: 4px;
            margin: 44px;
            color: #1b3e59;
            border-radius: 50%;
            /* box-shadow: 8px 8px 16px 2px #1b3e59 */
        }

        .com-card img {
            border-radius: 50%;
            height: 100%;
        }

        .body-text {
            text-align: center;
            color: red;
            font-size: 20px;
            font-weight: 600;
        }

        .body-bottom {
            color: #5698f4;
            text-align: center;
            font-weight: 500;
            font-size: 17px;
            margin-top: -10px;

        }

        .mobile-center {
            display: flex;
            justify-content: space-between;
        }

        @media only screen and (max-width: 600px) {
            .mobile-center {
                display: flex;
                justify-content: center;
            }
        }
        .about-area{
            padding-bottom: 60px;
        }
    </style>
    <div class="about-area">
        <div class="container">
           
            <div class="row align-items-center mobile-center">
                <div class="com-card">
                    <img src="{{ asset('web/images/deeparora.png') }}">
                    <p class="body-text">Prof. Lokesh Kashyap
                    </p>
                    <p class="body-bottom">Head of Department </p>
                    <p class="body-bottom">Anaesthesiology, Pain Medicine and Critical Care
                        AIIMS, New Delhi </p>


                </div>
                <div class="com-card">
                    <img src="{{ asset('web/images/deeparora.png') }}">
                    <p class="body-text">Prof. Anjolie Chhabra
                    </p>
                    <p class="body-bottom"> </p>
                    <p class="body-bottom"></p>


                </div>
            </div>

            <div class="row align-items-center mobile-center mt-2">
                <div class="com-card">
                    <img src="{{ asset('web/images/deeparora.png') }}">
                    <p class="body-text">Dr Bikash Ranjan Ray
                    </p>
                    <p class="body-bottom"></p>
                    <p class="body-bottom"></p>


                </div>
                <div class="com-card">
                    <img src="{{ asset('web/images/deeparora.png') }}">
                    <p class="body-text">Dr. Debesh Bhoi
                    </p>
                    <p class="body-bottom"></p>
                    <p class="body-bottom"></p>


                </div>
            </div>

         

            <div class="row align-items-center mobile-center">
                <div class="com-card">
                    <img src="{{ asset('web/images/deeparora.png') }}">
                    <p class="body-text">Dr. Heena Garg
                    </p>
                    <p class="body-bottom"></p>
                    <p class="body-bottom"> </p>


                </div>
                <div class="com-card">
                    <img src="{{ asset('web/images/deeparora.png') }}">
                    <p class="body-text">Dr. Amit Kumar
                    </p>
                    <p class="body-bottom"> </p>
                    <p class="body-bottom"></p>


                </div>
                <div class="com-card">
                    <img src="{{ asset('web/images/deeparora.png') }}">
                    <p class="body-text">Dr. Neha Pangasa
                    </p>
                    <p class="body-bottom"> </p>
                    <p class="body-bottom"> </p>


                </div>
                <div class="com-card">
                    <img src="{{ asset('web/images/deeparora.png') }}">
                    <p class="body-text">Dr. Sachin Kumar
                    </p>
                    <p class="body-bottom">Dr Randeep Guleria </p>
                    <p class="body-bottom">Director , AIIMS </p>


                </div>
            </div>
        </div>
    </div>
@endsection
