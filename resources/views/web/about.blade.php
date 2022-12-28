@extends('layouts.main')
@section('content')
    <style>
        a:hover {
            color: white;
        }

        .icon2 {
            background-color: black !important;
        }
        .col-md-6{
            padding: 10px;
        }

        .my-first {
            width: 100%;
            padding: 11px;
            border: 1px solid lightgrey;
            font-size: 28px;
            border-width: 2px;
            color: white;
            position: relative;
            border-color: #5698f454;
            background-color: #5698f4;
            /* padding: 22px 22px 22px 22px; */
            line-height: 1.2em;


        }

        .fa-angle-down {
            position: absolute;
            top: 17px;
            right: 10px;
            font-size: 25px;
        }

        .mycard {
            flex: 1 1 auto;
            padding: 1rem 1rem;
            border-bottom: 3px solid #5698f4;
        }

        .myui {
            padding: 15px;
        }

        .myui li {
            list-style: inherit;
        }

        .pl-4 {
            padding-left: 10px;
        }

        .my-card {
            margin: 0px 0px 0px 0px;
            padding: 15px 15px 15px 15px;
            background-color: #F8F8F8;
            border-radius: 25px 25px 25px 25px;

        }

        .elementor-icon-box-title {
            color: black
        }

        .click {
            color: #5698f4;
        }

        .my-2-card {
            margin: 0px 0px 0px 0px;
            padding: 18px 64px 25px 50px;
            background-color: #5698f454;
            border-radius: 25px 25px 25px 25px;
        }

        .elementor-icon {
            font-size: 40px;
            border-radius: 25px 25px 25px 25px;
            padding: 0.5em;
            color: white;
            background-color: #5698f4;

        }

        .elementor-icon {
            font-size: 40px;
            border-radius: 25px 25px 25px 25px;
        }
        .dwld-btn{
            height: 90px;
        }
        .dwld-btn a{
            font-size: 28px;
            
        }
        .syabs{
            font-size:30px;
            height:70px;
        }

        @media only screen and (max-width: 600px) {
     .dwld-btn a{
        font-size:18px;
     }
     .syabs{
        font-size:18px;
     }
}
    </style>
    <div class="about-area p-3">
        <div class="container">
            <div class="row justify-content-center">
                <p class="text-center">To facilitate the submission process and the subsequent follow-up process, please
                    consider the following guidelines, information, tips, terms and deadlines mentioned.</p>
                <div class="header-btn d-flex dwld-btn">
                    <a href="{{ asset('web/docs/Abstract Template CUSA.docx') }}" class="theme-btn mt-4 dnwlabstmplte">DOWNLOAD ABSTRACT TEMPLATE
                    </a>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-6">
                    <a class="my-first" data-bs-toggle="collapse" href="#collapseExample" role="button"
                        aria-expanded="false" aria-controls="collapseExample">
                        BASIC FORMAT FOR ABSTRACT <span><i class="fa fa-angle-down"></i></span></a>

                    <div class="collapse" id="collapseExample">
                        <div class="card card-body mycard">
                            <ul class="myui">
                                <li>The abstract should be concise and summarise the research/ the case.</li>
                                <li>The word limit of 200-250 words should be adhered to.</li>

                                <li>Abstract titles should be short, but descriptive.Abbreviations should not be used in the title.</li>
                            </ul>
                            <p><strong>FONT</strong></p>
                            <ul class="myui">
                                <li><strong>Title</strong>: Times New Roman, 12 points, Upper case, Centered text in bold
                                </li>
                                <li><strong>Body</strong>: Times New Roman, 11 points; Line spacing: 1, one column of text
                                </li>
                            </ul>
                            <p><strong>AFFILIATIONS</strong></p>
                            <ul class="myui">
                                <li>Affiliations should be indicated with superscript Arabic numbers appearing at the end of
                                    surname/family name.</li>
                                <li>A superscript asterisk should be used for the author.</li>
                                <li>Names of affiliations should be given.</li>
                                
                            </ul>
                            <p>Eg:-</p>
                            <p>Surname INITIALS 1 , Surname INITIALS 1* and Surname INITIALS 2</p>
                            <ol>
                                <li>Department, University</li>
                                <li>Department, Institute</li>
                            </ol>
                            <p>*author@gmail.com (* Email address of the author)</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <a class="my-first" data-bs-toggle="collapse" href="#collapseExample1" role="button"
                        aria-expanded="false" aria-controls="collapseExample">
                        GENERAL INSTRUCTIONS<span><i class="fa fa-angle-down"></i></span></a>

                    <div class="collapse" id="collapseExample1">
                        <div class="card card-body mycard">
                            <ul class="myui">
                                <li>Original studies, interesting case reports and case series are accepted</li>
                                <li>The Abstract should be written in English.</li>

                                <li>Please send in a brief biography together with the Abstract (An example is given in the
                                    abstract template).</li>
                                <li>Please<strong>&nbsp;<a
                                            href="{{ asset('web/docs/Abstract Template CUSA.docx') }}">download</a></strong>
                                    the
                                    abstract template and follow the format carefully.</li>
                                <li>Documents that do not confirm to the guidelines will be asked to revise.</li>
                                <li>Documents received&nbsp;after the given deadline, due to any reason will not be
                                    accepted&nbsp;unless the deadline is extended.</li>
                                <li>The abstract should be submitted in the format of MS Word (.doc or .docx) document.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-md-6">
                    <div class="my-card">
                        <h5 class="elementor-icon-box-title">
                            <span>
                                Steps to follow for your Abstract Submission</span>
                        </h5>
                        <p class="elementor-icon-box-description">
                            Once you prepared your abstract according to the above guidelines,</p>
                        <ul class="myui">

                            <li>To Submit your abstract <a
                                    class="click"href="mailto:cusaaiims@gmail.com">cusaaiims@gmail.com</a>
                            </li>
                        </ul>
                        <ul class="myui">
                            <li>After submission you will be acknowledged of the receipt of the abstract via an email .</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="my-card">
                        <h5 class="elementor-icon-box-title">
                            <span>
                                ABSTRACT SUBMISSION DEADLINE
                            </span>
                        </h5>
                        <ol class="myui">
                            <li><b>Please submit your abstract before: 31<sup>th</sup> January 2023</b></li>
                        </ol>
                    </div>
                </div>

            </div>
            <div class="row mt-5">
                <div class="col-md-6">
                    <div class="my-2-card d-flex">
                        <div class="elementor-icon-box-icon">
                            <span class="elementor-icon elementor-animation-">
                                <i class="fa fa-book-alt"></i>
                            </span>
                        </div>
                        <div class="elementor-icon-box-content pl-4">
                            <h5 class="elementor-icon-box-title">
                                <span>
                                    ABSTRACT SUBMISSION DEADLINE </span>
                            </h5>
                            <p class="elementor-icon-box-description">
                                31<sup>th</sup> January 2023 </p>
                            <a href="mailto:cusaaiims@gmail.com">Submit Now <i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="my-2-card d-flex">
                        <div class="elementor-icon-box-icon">
                            <span class="elementor-icon icon2 elementor-animation-">
                                <i class="fa fa-calendar-alt"></i>
                            </span>
                        </div>
                        <div class="elementor-icon-box-content pl-4">
                            <h5 class="elementor-icon-box-title">
                                <span style="text-transform: uppercase">
                                    register to submit abstract </span>
                            </h5>
                          
                            <a target="_blank"
                                href="https://docs.google.com/forms/d/e/1FAIpQLSecmHa4UtvlI_YJDZ6mDGk47g2-wnSQtSE-OHdL9PQq-1g0CA/viewform">Register
                                Now <i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row mt-5">
                <div class="col-lg-12">
                    <div class="site-heading text-center">
                        <a class="theme-btn syabs" href="mailto:cusaaiims@gmail.com"
                            target="_blank">
                            Submit Your Abstract
                            <i class="far fa-arrow-right"></i></a>

                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
@endsection
