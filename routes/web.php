<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about', ['nama' =>'arifin nihongo course']);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/testes', function () {
    return view('testes');
});
