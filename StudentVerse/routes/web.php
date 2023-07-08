<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});


Route::get('about', function () {
    return view('about');
});

Route::get('blog', function () {
    return view('blog');
});
Route::get('blog-details', function () {
    return view('blog-details');
});

Route::get('contact-us', function () {
    return view('contact-us');
});


Route::get('activity', function () {
    return view('activity');
});

Route::get('referrals', function () {
    return view('referrals');
});


Route::get('privacy-policy', function () {
    return view('privacy-policy');
});

Route::get('terms-conditions', function () {
    return view('terms-conditions');
});


Route::get('coming-soon', function () {
    return view('coming-soon');
});

Route::get('404', function () {
    return view('404');
});

