<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('halaman_satu');
})->name('kafe.satu');

Route::get('/dua', function () {
    return view('halaman_dua');
})->name('kafe.dua');