<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [MainController::class,'index']);
Route::get('/scientific_program',[MainController::class,'scientificProgram'])->name('scientific_program');
Route::get('/gallery',[MainController::class,'gallery'])->name('gallery');
Route::get('/international_faculty',[MainController::class,'internationalFaculty'])->name('international_faculty');
Route::get('/national_faculty',[MainController::class,'nationalFaculty'])->name('national_faculty');
Route::get('/commitee',[MainController::class,'commitee'])->name('commitee');
Route::get('/registration',[MainController::class,'registration'])->name('registration');
Route::get('/registration-fee',[MainController::class,'registrationFee'])->name('registration-fee');
Route::get('/organiser',[MainController::class,'organiser'])->name('organiser');
Route::get('/contact',[MainController::class,'contact'])->name('contact');
Route::get('/about-us',[MainController::class,'aboutUs'])->name('about-us');
Route::get('/download',[MainController::class,'download'])->name('download');
Route::get('/scientific_program',[MainController::class,'program'])->name('scientific_program');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
