<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('halaman_satu');
})->name('halaman1');

Route::get('/halaman-2', function () {
    return view('halaman_dua');
})->name('halaman2');