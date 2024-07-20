<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


Route::get('/', function () {
    return view('landing-page');
});

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

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/login', function () {
    return view('auth.login');
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