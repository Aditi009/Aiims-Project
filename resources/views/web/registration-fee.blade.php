@extends('layouts.main')
@section('content')
    <div class="site-breadcrumb" style="background: url(assets/img/breadcrumb/01.jpg)">
        <div class="container">
            <h2 class="breadcrumb-title">Register</h2>
            <ul class="breadcrumb-menu">
                <li><a href="index.html">Home</a></li>
                <li class="active">Register</li>
            </ul>
        </div>
    </div>


    <div class="login-area py-120">
        <div class="container">
            <div class="col-md-5 mx-auto">
                <div class="login-form">
                    <div class="login-header">
                        <img src="images/logo-logo.png" alt="">
                        <p>create your mindtox account</p>
                    </div>
                    <form action="#">
                        <div class="form-group">
                            <label>Full Name</label>
                            <input type="text" class="form-control" placeholder="Your Name">
                        </div>
                        <div class="form-group">
                            <label>Email Address</label>
                            <input type="email" class="form-control" placeholder="Your Email">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" placeholder="Your Password">
                        </div>
                        <div class="form-check form-group">
                            <input class="form-check-input" type="checkbox" value="" id="agree">
                            <label class="form-check-label" for="agree">
                                I agree with the <a href="#">Terms Of Service.</a>
                            </label>
                        </div>
                        <div class="d-flex align-items-center">
                            <button type="submit" class="theme-btn"><i class="far fa-paper-plane"></i> Register</button>
                        </div>
                    </form>
                    <div class="login-footer">
                        <p>Already have an account? <a href="login.html">Login.</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
