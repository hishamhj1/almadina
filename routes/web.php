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


Route::get('home-page', function () {
    return view('home.home');
});
Route::get('about-page', function () {
    return view('pages.about');
});
route::get('contact-page',function(){
    return view('pages.contact');
});
route::get('our-service-page',function(){
    return view('pages.our-service');
});

