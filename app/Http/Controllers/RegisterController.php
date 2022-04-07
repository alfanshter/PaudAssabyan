<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'username' => ['required','min:3','max:255','unique:users'],
            'password' => ['required','min:5']
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);
        $validatedData['role'] = 0;
        User::create($validatedData);

        return redirect('/login')->with('success','Pendaftaran berhasil');


    }
}