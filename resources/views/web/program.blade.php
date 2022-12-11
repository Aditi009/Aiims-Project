@extends('layouts.main')
@section('content')
{{-- <div class="site-breadcrumb" style="background: url('{{asset('web/images/hi.jpg')}}')">
    <div class="container">
        <h2 class="breadcrumb-title">Scientific Program </h2>
        <ul class="breadcrumb-menu">
            <li><a href="index.html">Home</a></li>
            <li class="active"> Scientific Program</li>
        </ul>
    </div>
</div> --}}

<style>
.anim {
    animation-duration: 1000ms;
    animation-name: blink;
    animation-iteration-count: infinite;
    animation-direction: alternate;
    -webkit-animation:blink 1000ms infinite; /* Safari and Chrome */

        font-size: 22px;

    }
@keyframes blink {
    from {
        color:blue;
    }
    to {
        color:red;
    }
}
@-webkit-keyframes blink {
    from {
        color:  blue;
    }
    to {
        color: red;
    }
}

</style>


<div class="case-area py-60">
    <div class="container">
    <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="site-heading text-center">
                        <h2 class="site-title" style=" color: #7e1916;">Scientific Program</span></h2>
                    </div>
                </div>
            </div>
        <div class="row">

            <div class="col-lg-8 mx-auto">
                <div class="site-heading-p text-center">
                    <marquee behavior="alternate" width="100%" direction="left" scrollamount="6">
                    <p class="anim">A wake shoulder surgery - Myth or Reality ? </p>
                    </marquee>
                    <marquee behavior="alternate" width="100%" direction="left" scrollamount="6" >
                    <p class="anim">ESP block in 2023 - Where do we stand ?</p>
                    </marquee>
                    <marquee behavior="alternate" width="100%" direction="left" scrollamount="6">
                    <p class="anim">Why Regional Anaesthesia is must in 2023?</p>
                    </marquee>
                    <marquee behavior="alternate" width="100%" direction="left" scrollamount="6">
                    <p class="anim">POCUS: Why where & how in Trauma.</p>
                    </marquee>
                    <marquee behavior="alternate" width="100%" direction="left" scrollamount="6">
                    <p class="anim">EDRA exam - How to prepare?.</p>
                    </marquee>

                    <!-- <p class="anim">A wake shoulder surgery - Myth or Reality ? </p>
                    <p class="anim">ESP block in 2023 - Where do we stand ?</p>
                    <p class="anim">Why regional Anaesthesia is must in 2023?</p>
                    <p class="anim">POCUS: Why where & how in Trauma.</p>
                    <p class="anim">EDRA exam - How to prepare?.</p> -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection