<?php

use App\Http\Controllers\UserController;
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

// main website routes
Route::get('/', function () {
    return view('index.index');
});

Route::get('about', function () {
    return view('index.about');
});

Route::get('blog', function () {
    return view('index.blog');
});
Route::get('blog-details', function () {
    return view('index.blog-details');
});

Route::get('contact-us', function () {
    return view('index.contact-us');
});

Route::get('activity', function () {
    return view('index.activity');
});

Route::get('referrals', function () {
    return view('index.referrals');
});


Route::get('privacy-policy', function () {
    return view('index.privacy-policy');
});

Route::get('terms-conditions', function () {
    return view('index.terms-conditions');
});


Route::get('coming-soon', function () {
    return view('index.coming-soon');
});

Route::get('404', function () {
    return view('index.404');
});

// website routes end


//user register routes

Route::get('/register', [UserController::class, "show"]);

Route::get('/login', [UserController::class, "store"]);



