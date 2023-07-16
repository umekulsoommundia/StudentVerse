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

Route::get('all-questions', function () {
    return view('user.all-queations');
});

Route::get('questions-details', function () {
    return view('user.questions-details');
});

Route::get('questions-details', function () {
    return view('user.questions-details');
});

Route::get('communities', function () {
    return view('user.communities');
});

Route::get('most-answered', function () {
    return view('user.most-answered');
});

Route::get('most-answered-details', function () {
    return view('user.most-answered-details');
});

Route::get('unanswered', function () {
    return view('user.unanswered');
});

Route::get('most-visited', function () {
    return view('user.most-visited');
});

Route::get('polls', function () {
    return view('user.polls');
});

Route::get('faq', function () {
    return view('user.faq');
});

Route::get('groups', function () {
    return view('user.groups');
});

Route::get('education', function () {
    return view('user.education');
});

Route::get('technology', function () {
    return view('user.technology');
});

Route::get('tags', function () {
    return view('user.tags');
});

Route::get('badges', function () {
    return view('user.badges');
});


Route::get('user', function () {
    return view('user.user');
});

Route::get('user-profile', function () {
    return view('user.user-profile');
});

Route::get('ask-questions', function () {
    return view('user.ask-questions');
});
Route::get('sidebar', function () {
    return view('sidebar');
});


// website routes end


//user register routes

Route::get('/register', [UserController::class, "show"]);

Route::get('/login', [UserController::class, "store"]);



