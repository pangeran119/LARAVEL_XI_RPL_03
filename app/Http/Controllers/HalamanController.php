<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanController extends Controller
{
    public function halamanPertama()
    {
        return view('halaman_satu');
    }
    public function halamanDua()
    {
        return view('halaman_dua');
    }
}