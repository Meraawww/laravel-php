<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{
    create_GuestBook_table,
    GenreController,
    CastController
};


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
 
// Route untuk menampilkan form tambah genre
// dan handlernya / method yang digunakan adalah method create
Route::controller(GenreController::class)->group(function(){
    Route::get('genre', 'index')->name('genre.index');
    Route::get('genre/create', 'create')->name('genre.create');
    Route::post('genre', 'store')->name('genre.store');
    Route::get('genre/{id}/edit', 'edit')->name('genre.edit');
    Route::put('genre/{id}', 'update')->name('genre.update');
    Route::delete('genre/{id}', 'destroy')->name('genre.delete');
});

// Route casts
Route::controller(CastController::class)->group(function(){
    Route::get('/cast', 'index')->name('cast.index');
    Route::get('/cast/create', 'create')->name('cast.create');
    Route::post('/cast', 'store')->name('cast.store');
    Route::get('/cast/{id}/edit', 'edit')->name('cast.edit');
    Route::put('/cast/{id}', 'update')->name('cast.update');
    Route::delete('/cast/{id}', 'destroy')->name('cast.delete');
});