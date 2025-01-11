<?php

use Illuminate\Support\Facades\Route;

Route::get('/mera', function () {
    return view('mera');
});
  
Route::get('/form', function () {
    return view('form');
});

Route::get('/welcome', function () {
    return view('welcome');
});
