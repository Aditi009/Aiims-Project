@extends('layouts.main')
@section('content')


<style>
.animds {
    animdation-duration: 1000ms;
    animdation-name: blink;
    animdation-iteration-count: infinite;
    animdation-direction: alternate;
    -webkit-animdation: blink 1000ms infinite;
    /* Safari and Chrome */

    font-size: 22px;

}

.animd{
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
margin-top:20px;
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
    margin-top: 72px;
    
    transform: rotate(-82deg);
    box-shadow: 2px 2px 2px grey;
}


.box-container4{
    height:250px;
    width:275px;
    margin-left: 50px;
    margin-right: 50px;
    scale: 1.5;
}

.box-container5{
    background-color:#00C2CB;
    margin-top: 72px;
    box-shadow: 2px 2px 2px grey;
    transform: rotate(82deg);
}

.box-container6{
    margin-top:6px;
    background-color:#5271FF;
    transform: rotate(33deg);
    box-shadow: 2px 2px 2px grey;
}

.box-container7{
    background-color:#004AAD;
    margin-left:6px;
    margin-top:15px;
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


<div class="case-area pt-10">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="site-heading text-center">
                    <h3 class="" style=" color: #7e1916;">Scientific Programme Highlights</span></h3>
                </div>
            </div>
       
    </div>
    <div class="container mnc">
    <div class="row justify-content-center">
            <div class="col-md-2 text-center box-container box-container1">
               <p class="animd"> Regional Anaesthesia – a must in 2023! </p>
            </div>
            <div class="col-md-2 text-center box-container box-container2">
            <p class="animd">Awake shoulder surgery – myth or reality?</p>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-2 text-center box-container box-container3">
            <p class="animd">ESP block –  evolution till the present!</p>
            </div>
            <div class="col-md-2 text-center box-container box-container4">
                     <img src="{{asset('web/images/ultra_prob.png')}}" alt="" srcset="">
            </div>
            <div class="col-md-2 text-center box-container box-container5">
                <p class="animd">POCUS in Trauma</p>
            </div>
        </div>

        
    </div>
</div>
@endsection