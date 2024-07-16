<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::view('/chatui', 'chatui');
Route::view('/newlisting', 'newlisting');
// Route::view('/marketplace', 'marketplace');

Route::view('/marketplace', 'marketplace');

Route::get('/buyer_dashboard', function () {
    return view('buyer_dashboard');
});

Route::get('/seller_dashboard', function () {
    return view('seller_dashboard');
});

Route::get('/product-detail', function () {
    return view('product-detail');
});

Route::get('/product_details', function () {
    return view('product_details');
});


// Route::get('/product/{id}', function ($id) {
//     // Fetch product details from database using $id and pass to the view
//     return view('product-detail');
// });

Route::get('/newlisting', function () {
    return view('newlisting');
});

Route::get('/single-listing', function () {
    // Add logic for single listing page
    return 'Single Listing Page';
});

Route::get('/commission-listing', function () {
    // Add logic for commission listing page
    return 'Commission Listing Page';
});

Route::view('/product-detail', 'product-detail');
Route::view('/product', 'product');
Route::view('/listing-type', 'listing-type');