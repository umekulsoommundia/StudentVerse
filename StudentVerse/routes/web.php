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


// user dashboard routes

Route::get('widgets', function () {
    return view('User_Dashboard.widgets');
});

Route::get('welcome', function () {
    return view('User_Dashboard.welcome');
});
Route::get('videos', function () {
    return view('User_Dashboard.videos');
});
Route::get('utility', function () {
    return view('User_Dashboard.utility');
});
Route::get('transition', function () {
    return view('User_Dashboard.transition');
});
Route::get('time-line', function () {
    return view('User_Dashboard.time-line');
});
Route::get('thank-you', function () {
    return view('User_Dashboard.thank-you');
});

Route::get('team', function () {
    return view('User_Dashboard.team');
});
Route::get('tabs', function () {
    return view('User_Dashboard.tabs');
});
Route::get('slideshow', function () {
    return view('User_Dashboard.slideshow');
});
Route::get('slider', function () {
    return view('User_Dashboard.slider');
});
Route::get('signup', function () {
    return view('User_Dashboard.signup');
});


Route::get('sign-in', function () {
    return view('User_Dashboard.sign-in');
});

Route::get('settings', function () {
    return view('User_Dashboard.settings');
});

Route::get('send-feedback', function () {
    return view('User_Dashboard.send-feedback');
});

Route::get('search-result', function () {
    return view('User_Dashboard.search-result');
});

Route::get('reviews', function () {
    return view('User_Dashboard.reviews');
});

Route::get('Q-detail', function () {
    return view('User_Dashboard.Q-detail');
});

Route::get('Q-A', function () {
    return view('User_Dashboard.Q-A');
});

Route::get('profile', function () {
    return view('User_Dashboard.profile');
});



Route::get('profile-page2', function () {
    return view('User_Dashboard.profile-page2');
});

Route::get('products', function () {
    return view('User_Dashboard.products');
});

Route::get('product-checkout', function () {
    return view('User_Dashboard.product-checkout');
});

Route::get('product-cart', function () {
    return view('User_Dashboard.product-cart');
});

Route::get('privacy-n-policy', function () {
    return view('User_Dashboard.privacy-n-policy');
});


Route::get('price-plan', function () {
    return view('User_Dashboard.price-plan');
});

Route::get('post-detail', function () {
    return view('User_Dashboard.post-detail');
});

Route::get('pay-out', function () {
    return view('User_Dashboard.pay-out');
});

Route::get('page', function () {
    return view('User_Dashboard.page');
});

Route::get('notifications', function () {
    return view('User_Dashboard.notifications');
});


Route::get('messages', function () {
    return view('User_Dashboard.messages');
});

Route::get('messages-inbox', function () {
    return view('User_Dashboard.messages-inbox');
});

Route::get('maps', function () {
    return view('User_Dashboard.maps');
});

Route::get('login', function () {
    return view('User_Dashboard.login');
});

Route::get('login-register', function () {
    return view('User_Dashboard.login-register');
});

Route::get('location', function () {
    return view('User_Dashboard.location');
});



Route::get('loaders', function () {
    return view('User_Dashboard.loaders');
});


Route::get('live-stream', function () {
    return view('User_Dashboard.live-stream');
});

Route::get('invoice', function () {
    return view('User_Dashboard.invoice');
});

Route::get('invoice-edit', function () {
    return view('User_Dashboard.invoice-edit');
});

Route::get('inverse', function () {
    return view('User_Dashboard.inverse');
});

Route::get('index', function () {
    return view('User_Dashboard.index');
});

Route::get('index-2', function () {
    return view('User_Dashboard.index-2');
});


Route::get('inbox', function () {
    return view('User_Dashboard.inbox');
});

Route::get('images', function () {
    return view('User_Dashboard.images');
});

Route::get('help-faq', function () {
    return view('User_Dashboard.help-faq');
});

Route::get('help-faq-detail', function () {
    return view('User_Dashboard.help-faq-detail');
});

Route::get('groups', function () {
    return view('User_Dashboard.groups');
});

Route::get('group-feed', function () {
    return view('User_Dashboard.group-feed');
});


Route::get('group-detail', function () {
    return view('User_Dashboard.group-detail');
});

Route::get('grid', function () {
    return view('User_Dashboard.grid');
});

Route::get('friends-list', function () {
    return view('User_Dashboard.friends-list');
});

Route::get('forgot-password', function () {
    return view('User_Dashboard.forgot-password');
});

Route::get('flex', function () {
    return view('User_Dashboard.flex');
});

Route::get('feed', function () {
    return view('User_Dashboard.feed');
});


Route::get('events', function () {
    return view('User_Dashboard.events');
});

Route::get('event-page', function () {
    return view('User_Dashboard.event-page');
});

Route::get('elements-grid', function () {
    return view('User_Dashboard.elements-grid');
});

Route::get('dropdown', function () {
    return view('User_Dashboard.dropdown');
});

Route::get('development-elements', function () {
    return view('User_Dashboard.development-elements');
});

Route::get('development-component', function () {
    return view('User_Dashboard.development-component');
});



Route::get('cover', function () {
    return view('User_Dashboard.cover');
});

Route::get('courses', function () {
    return view('User_Dashboard.courses');
});

Route::get('course-detail', function () {
    return view('User_Dashboard.course-detail');
});

Route::get('company-home', function () {
    return view('User_Dashboard.company-home');
});

Route::get('coming-soon', function () {
    return view('User_Dashboard.coming-soon');
});

Route::get('colors', function () {
    return view('User_Dashboard.colors');
});


Route::get('books', function () {
    return view('User_Dashboard.books');
});

Route::get('book-detail', function () {
    return view('User_Dashboard.book-detail');
});

Route::get('blog', function () {
    return view('User_Dashboard.blog');
});

Route::get('blog-detail', function () {
    return view('User_Dashboard.blog-detail');
});

Route::get('badges', function () {
    return view('User_Dashboard.badges');
});


Route::get('analytics', function () {
    return view('User_Dashboard.analytics');
});

Route::get('add-new-course', function () {
    return view('User_Dashboard.add-new-course');
});

Route::get('add-credits', function () {
    return view('User_Dashboard.add-credits');
});

Route::get('about-university', function () {
    return view('User_Dashboard.about-university');
});

Route::get('404', function () {
    return view('User_Dashboard.404');
});



Route::get('home', function () {
    return view('StudentVerse.index');
});
