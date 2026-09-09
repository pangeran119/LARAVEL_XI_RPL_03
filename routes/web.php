<?php

use Illuminate\Support\Facades\Route;

// Route Halaman 1
Route::get('/', function () {
    return view('halaman_satu');
})->name('home');

// Route Halaman 2
Route::get('/fitur', function () {
    return view('halaman_dua');
})->name('fitur');