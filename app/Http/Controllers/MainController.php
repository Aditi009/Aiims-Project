<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        return view('web.home');
    }

    public function scientificProgram(){
        return view('web.scientific_program');
    }
    public function gallery(){
        return view('web.gallery');
    }
    public function internationalFaculty(){
        return view('web.international_faculty');
    }
    public function nationalFaculty(){
        return view('web.national_faculty');
    }
    public function commitee(){
        return view('web.commitee');
    }
    public function registration(){
        return view('web.registration');
    }
    public function registrationFee(){
        return view('web.registration-fee');
    }
    public function organiser(){
        return view('web.organiser');
    }
    public function contact(){
        return view('web.contact');
    }
    public function aboutUs(){
        return view('web.about');
    }
    public function download(){
        return view('web.download');
    }
    public function program(){
        return view('web.program');

    }
}
