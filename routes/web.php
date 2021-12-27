<?php

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

Route::get('/', function () {
    return view('home.home');
});


Route::get('home', function () {
    return view('home.home');
});
Route::get('about', function () {
    return view('pages.about');
});
route::get('contact',function(){
    return view('pages.contact');
});
route::get('our-service',function(){
    return view('pages.our-service');
});
route::get('booking-form',function(){
    return view ('pages.booking-form');
});
route::get('gallery',function(){
    return view('pages.gallery');
});
route::get('blog',function(){
    return view('pages.blog');
});
route::get('readmore',function(){
    return view('pages.readmore');
});
route::get('geotechnical-investigation',function(){
    return view('pages.geotechnical-investigation');
});
route::get('material-testing',function(){
    return view('pages.material-testing');
});
route::get('laboratory-testing',function(){
    return view('pages.laboratory-testing');
});

