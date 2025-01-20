<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\create_GuestBook_table;


// Route::get('/mera', function () {
//     return view('mera');
// });
  
// Route::get('/form', function () {
//     return view('form');
// });

// Route::get('/welcome', function () {
//     return view('welcome');
// });
// Route::get('/master', function () {
//     return view('template.master');
// });

Route::get('/mera',[create_GuestBook_table::class, 'mera'])->name('mera');
Route::get('/form',[create_GuestBook_table::class, 'form']);
Route::get('/welcome',[create_GuestBook_table::class, 'welcome']);
Route::get('tem/master',[create_GuestBook_table::class, 'master']);
Route::get('/index',[create_GuestBook_table::class, 'index']);
 