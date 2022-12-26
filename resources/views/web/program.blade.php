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
.anims {
    animation-duration: 1000ms;
    animation-name: blink;
    animation-iteration-count: infinite;
    animation-direction: alternate;
    -webkit-animation: blink 1000ms infinite;
    /* Safari and Chrome */

    font-size: 22px;

}

.anim{
 color : white;
}

@keyframes blink {
    from {
        color: blue;
    }

    to {
        color: red;
    }
}

@-webkit-keyframes blink {
    from {
        color: blue;
    }

    to {
        color: red;
    }
}

.box-container{
    margin: 5px;
    border-radius: 10px;
    height: 120px;
    
    transition:1s;
}
.box-container:hover{
    scale:1.6;
    transform:rotate(0deg);
    z-index:99;
}
.box-container p{
font-weight:900;
margin-top:35px;
/* text-shadow: 2px 2px #9e8b8b; */
}
.box-container1{
    background-color:#00C2CB;
    transform: rotate(-36deg);
    box-shadow: 2px 2px 2px grey;
}

.box-container2{
    background-color:#004AAD;
    margin-left: 60px;
    transform: rotate(36deg);
    box-shadow: 2px 2px 2px grey;
}

.box-container3{
    background-color:#5271FF;
    margin-top: 160px;
    transform: rotate(-82deg);
    box-shadow: 2px 2px 2px grey;
}


.box-container4{
    height:250px;
    width:275px;
}

.box-container5{
    background-color:#00C2CB;
    margin-top: 160px;
    box-shadow: 2px 2px 2px grey;
    transform: rotate(82deg);
}

.box-container6{
    margin-top:60px;
    background-color:#5271FF;
    transform: rotate(33deg);
    box-shadow: 2px 2px 2px grey;
}

.box-container7{
    background-color:red;
    margin-left:100px;
    margin-top:165px;
    box-shadow: 2px 2px 2px grey;
    transform: rotate(-33deg);
}
.mnc{
margin-top:30px;
margin-bottom:65px;
}
@media only screen and (max-width: 600px) {
    .box-container{
        transform: rotate(0deg) !important;
        margin:15px !important;
    }
    .box-container4{
    display:none;
}

</style>


<div class="case-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="site-heading text-center">
                    <h2 class="site-title" style=" color: #7e1916;">Scientific Program</span></h2>
                </div>
            </div>
       
    </div>
    <div class="container mnc">
    <div class="row justify-content-center">
            <div class="col-md-3 text-center box-container box-container1">
               <p class="anim">Awake shoulder surgery - Myth or Reality ? </p>
            </div>
            <div class="col-md-3 text-center box-container box-container2">
            <p class="anim">ESP block in 2023 - Where do we stand ?</p>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-3 text-center box-container box-container3">
            <p class="anim">Why regional Anaesthesia is must in 2023?</p>
            </div>
            <div class="col-md-4 text-center box-container box-container4">
                     <img src="{{asset('web/images/ultra_prob.png')}}" alt="" srcset="">
            </div>
            <div class="col-md-3 text-center box-container box-container5">
                <p class="anim">POCUS: Why where & how in Trauma.</p>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-3 text-center box-container box-container6" style="visibility:hidden;">
            <p class="anim">EDRA exam - How to prepare?.</p>
            </div>
            <div class="col-md-3 text-center box-container box-container7">
            <p class="anim">EDRA exam - How to prepare?.</p>
            </div>
        </div>
    </div>
</div>
@endsection