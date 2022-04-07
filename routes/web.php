<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', [DashboardController::class,'index'])->middleware('auth');
// LOGIN
Route::get('/login', [LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class,'authenticate']);
Route::post('/logout', [LoginController::class,'logout']);
//Register
Route::get('/register', [RegisterController::class,'index'])->middleware('guest');
Route::post('/register', [RegisterController::class,'store']);


Route::get('/', [DashboardController::class,'index'])->middleware('auth');

//Siswa
Route::get('/siswa', [SiswaController::class,'index'])->middleware('auth');
Route::get('/tambahsiswa', [SiswaController::class,'tambahsiswa'])->middleware('auth');


Route::get('/dash', function () {
    return view('dash');
});

Route::get('/visimisi', function () {
    return view('visimisi');
});

Route::get('/nilaisiswa', function () {
    return view('nilaisiswa');
});

Route::get('/absensi', function () {
    return view('absensi');
});