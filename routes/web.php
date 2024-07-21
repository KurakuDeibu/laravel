<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PageController;


Route::get('/', [PageController::class, 'index'])->name('landing-page');

// Route::view('/', 'landing-page');

// Route::get('auth.register', [AuthController::class,'auth.register'])->middleware('guest')->name('auth.register');


// Post User Routing
// Route::post('auth.register', [AuthController::class,'registerPost']);


Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->middleware('guest')->name('register');
Route::post('/register', [RegisterController::class, 'registerPost'])->name('auth.register');


Route::get('/login', [LoginController::class,'showLoginForm'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class,'loginPost'])->name('auth.login');


Route::get('/marketplace', function () {
    return view('marketplace-auth');
});

// Route::get('/marketplace', function () {
//     return view('marketplace-noauth');
// });

Route::get('/product-detail', function () {
    return view('product.product-detail');
});

Route::get('/chatui', function () {
    return view('chatui-noauth');
});
Route::get('/auth/chatui', function () {
    return view('chatui-auth');
});

Route::get('/create-listing', function () {
    return view('create-new-listing');
});

Route::get('/profile', function () {
    return view('profile.profile');
});

Route::get('/profile/settings', function () {
    return view('profile.profile-settings');
});

Route::view('/newlisting', 'newlisting');


// Route::view('/newlisting', 'newlisting');