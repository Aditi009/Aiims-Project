@extends('layouts.main')
@section('content')
{{-- <div class="site-breadcrumb" style="background: url('{{asset('web/images/hi.jpg')}}')">
    <div class="container">
            <h2 class="breadcrumb-title">Contact Us</h2>
            <ul class="breadcrumb-menu">
                <li><a href="index.html">Home</a></li>
                <li class="active">Contact Us</li>
            </ul>
        </div>
    </div> --}}

    <style>
        .contact-info {
  padding: 20px;
  height: 100%;
  position: relative;
  text-align: center;
  margin-bottom: 10px;
  box-shadow: 0 0 40px 5px rgb(0 0 0 / 5%);
}
    </style>

    <div class="contact-area py-120">
        <div class="container">
            <div class="contact-content">
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="contact-info">
                            <div class="contact-info-icon">
                                <i class="fal fa-map-marker-alt"></i>
                            </div>
                            <div class="contact-info-content">
                                <h5>Conference Secretariat</h5>
                                <p> Room No: 5014 A,
                                    5th floor, Teaching Block, AIIMS, New Delhi</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="contact-info">
                            <div class="contact-info-icon">
                                <i class="fal fa-phone"></i>
                            </div>
                            <div class="contact-info-content">
                                <h5>Call Us</h5>
                                <p>91-9810 104 383, +91-9464 533 877, +91-7042 129 428</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="contact-info">
                            <div class="contact-info-icon">
                                <i class="fal fa-envelope"></i>
                            </div>
                            <div class="contact-info-content">
                                <h5>Email Us</h5>
                                 <a href="mailto:cusaaiims@gmail.com"><p><i
                                            class="far fa-envelope"></i> cusaaiims@gmail.com</p></a>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>

<div class="contact-map">

<iframe src="https://www.google.com/maps/embed?pb=!1m12!1m8!1m3!1d27527.194202943374!2d77.19667595750788!3d28.56562250312848!3m2!1i1024!2i768!4f13.1!2m1!1sAIIMS%2C%20New%20Delhi%20Meerut%20()!5e0!3m2!1sen!2sus!4v1670038096074!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
        
        </div>
    </div>



@endsection
