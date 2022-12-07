@extends('layouts.main')
@section('content')
    {{--   

<div class="site-breadcrumb" style="background: url('{{asset('web/images/hi.jpg')}}')">
    <div class="container">
                <h2 class="breadcrumb-title">About Us</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">About Us</li>
                </ul>
            </div>
        </div> --}}


    <style>
        .my-first {
            width: 100%;
            padding: 11px;
            border: 1px solid lightgrey;
            font-size: 31px;
            font-weight: 800;
            border-width: 2px;
            color: #5698f4;
            border-color: #5698f454;
            background-color: #5698f454;
            /* padding: 22px 22px 22px 22px; */
            line-height: 1.2em;

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
        .my-card{
            margin: 0px 0px 0px 0px;
    padding: 15px 15px 15px 15px;
    background-color: #F8F8F8;
    border-radius: 25px 25px 25px 25px;

        }
        .elementor-icon-box-title{
            color: black
        }
        .click{
            color: #5698f4;
        }
        .my-2-card{
            margin: 0px 0px 0px 0px;
    padding: 15px 15px 15px 15px;
    background-color: #5698f454;
    border-radius: 25px 25px 25px 25px;
        }
    </style>
    <div class="about-area py-120">
        <div class="container">
            <div class="row">
                <p class="text-center">To facilitate the submission process and the subsequent follow-up process, please
                    consider the following guidelines, information, tips, terms and deadlines mentioned.</p>
                <div class="header-btn d-flex justify-content-center">
                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSecmHa4UtvlI_YJDZ6mDGk47g2-wnSQtSE-OHdL9PQq-1g0CA/viewform"
                        class="theme-btn mt-4">DOWNLOAD ABSTRACT TEMPLATE </a>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-6">
                    <a class="my-first" data-bs-toggle="collapse" href="#collapseExample" role="button"
                        aria-expanded="false" aria-controls="collapseExample">
                        BASIC FORMAT FOR ABSTRACT </a>

                    <div class="collapse" id="collapseExample">
                        <div class="card card-body mycard">
                            <ul class="myui"><li>An abstract is a compendious summary of a research paper’s substance including its background, purpose, methodology, results, and conclusion.</li><li>It should be one paragraph with a word limit of 175-275.</li><li>Keywords should be provided as a must (no more than 06 words).</li><li>Keywords should be written in lowercase letters (Not applicable to names/scientific names) and should be separated with commas.</li><li>Please do not include subheadings, bullets, lists and header/footer in the abstract.</li><li>Abstract titles should be short, but descriptive. Informative titles, indicating key points are encouraged. Abbreviations should not be used in the title.</li><li>Acronyms should be written in full the first time, mentioned in the text, followed by the abbreviation in parentheses.</li><li>Always follow SI Units.</li><li>Scientific names must be in Italic.</li><li>Use a negative exponent (g. kgm<sup>-3</sup>) and do not indicate units as divisions (e.g. kg/m 3 ).</li><li>Chemical formulae should be written in a standard form such as “CaCO<sub>3</sub>”, not as “CaCO3”. Use a zero before decimal points such as “0.45,” not “.45.”</li><li>There shall be no citations or references in the abstract specifically. If there is a need to cite references, please provide the sources in brackets.</li></ul>
                            <p><strong>FONT</strong></p>
                            <ul  class="myui"><li><strong>Title</strong>: Times New Roman, 12 points, Upper case, Centered text in bold</li><li><strong>Body</strong>: Times New Roman, 11 points; Line spacing: 1, one column of text</li></ul>
                            <p><strong>AFFILIATIONS</strong></p>
                            <ul  class="myui"><li>Affiliations should be indicated with superscript Arabic numbers appearing at the end of surname/family name.</li><li>A superscript asterisk shout be used for the corresponding author</li><li>Names of affiliations should be given including the country.</li><li>If there is more than one name and address, they should be related by superscript numbers.</li></ul>
                            <p>Eg:-</p>
                            <p>Surname INITIALS 1 , Surname INITIALS 1* and Surname INITIALS 2</p>
                            <ol><li>Department, Faculty, University, Country</li><li>Department, Institute, Country</li></ol>
                            <p>*author@gmail.com (* Email address of the corresponding author)</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <a class="my-first" data-bs-toggle="collapse" href="#collapseExample1" role="button"
                        aria-expanded="false" aria-controls="collapseExample">
                        GENERAL INSTRUCTIONS</a>

                    <div class="collapse" id="collapseExample1">
                        <div class="card card-body mycard">
                            <ul class="myui"><li>Abstracts should represent the original work.</li><li>Informative abstracts and critical abstracts are accepted.</li><li>The Abstract should be written in English.</li><li>Please indicate one – three most relevant themes for your abstract from the conference tracks.</li><li>Please send in a brief biography together with the Abstract (An example is given in the abstract template).</li><li>Please<strong>&nbsp;<a href="https://tiikmedu-my.sharepoint.com/:w:/p/publication/EXrkLF1PdjBNtTcXVp1j9xwB2XJcZA13SxohO-wOkpZtMg?e=3iuWsK">download</a></strong><a href="https://tiikmedu-my.sharepoint.com/:w:/p/publication/EXrkLF1PdjBNtTcXVp1j9xwB2XJcZA13SxohO-wOkpZtMg?e=3iuWsK">&nbsp;</a>the abstract template and follow the format carefully.</li><li>Documents that do not confirm to the guidelines will be asked to revise.</li><li>Documents received&nbsp;after the given deadline, due to any reason will not be accepted&nbsp;unless the deadline is extended.</li><li>The abstract should be submitted in the format of MS Word (.doc or .docx) document.</li></ul>
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
                              
                                <li>To Submit your abstract <a class="click"href="https://educationconference.co/abstract-guidelines/#abstract">Click Here&gt;&gt;</a></li>
                            </ul>
                           <ul class="myui">
                                <li>After submission you will be acknowledged of the receipt of the abstract via an email within three working days.</li>
                           </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="my-card">
                        <h5 class="elementor-icon-box-title">
                            <span>
                             DEADLINE FOR THE ABSTRACT SUBMISSION
                            </span>
                        </h5>
                        <ol class="myui"> 
                            <li><b>Please submit your abstract before: 12<sup>th</sup> December 2022</b></li>
                       </ol>
                    </div>
                </div>

            </div>
            <div class="row mt-5">
                <div class="col-md-6">
                    <div class="my-2-card">
                        <div class="left">
                            <i class="fa fa-book"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="my-2-card">
                        <h5 class="elementor-icon-box-title">
                            <span>
                             DEADLINE FOR THE ABSTRACT SUBMISSION
                            </span>
                        </h5>
                        <ol class="myui"> 
                            <li><b>Please submit your abstract before: 12<sup>th</sup> December 2022</b></li>
                       </ol>
                    </div>
                </div>

            </div>

        </div>
    </div>
    </div>
@endsection
