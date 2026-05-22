<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $nome = 'Leonardo';
    return view('welcome', ['nome' => $nome]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/products', function () {
    return view('products');    
});