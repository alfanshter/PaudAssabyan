<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KeuanganSiswaController extends Controller
{
    public function index()
    {
        return view('keuangansiswa.keuangansiswa');
    }
}