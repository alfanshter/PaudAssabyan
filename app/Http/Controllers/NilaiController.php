<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NilaiController extends Controller
{
    public function index(Request $request)
    {
        return view('nilai.nilai');
    }
}