<?php

use App\Http\Controllers\AbsenSiswaController;
use App\Http\Controllers\BiodataSiswaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JadwalkegiatanController;
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
Route::post('/registersiswa', [SiswaController::class,'register'])->middleware('auth');
Route::post('/siswa/delete', [SiswaController::class,'delete'])->middleware('auth');
Route::post('/siswa/gantipassword', [SiswaController::class,'gantipassword'])->middleware('auth');

//Siswa
Route::get('/jadwalkegiatan', [JadwalkegiatanController::class,'index'])->middleware('auth');
Route::post('/jadwalkegiatan', [JadwalkegiatanController::class,'store'])->middleware('auth');
Route::post('/jadwalkegiatan/update', [JadwalkegiatanController::class,'update'])->middleware('auth');
Route::post('/jadwalkegiatan/hapus', [JadwalkegiatanController::class,'destroy'])->middleware('auth');

//Biodata
Route::get('/biodata', [BiodataSiswaController::class,'index'])->middleware('auth');
Route::get('/biodata/{id}', [BiodataSiswaController::class,'edit'])->middleware('auth');
Route::post('/biodata', [BiodataSiswaController::class,'store'])->middleware('auth');
Route::post('/biodata/update', [BiodataSiswaController::class,'update'])->middleware('auth');
Route::post('/biodata/hapus', [BiodataSiswaController::class,'delete'])->middleware('auth');


//Absen Siswa
Route::get('/absensiswa', [AbsenSiswaController::class,'index'])->middleware('auth');
Route::post('/absensiswa', [AbsenSiswaController::class,'store'])->middleware('auth');
Route::post('/absensiswa/update', [AbsenSiswaController::class,'update'])->middleware('auth');
Route::post('/absensiswa/hapus', [AbsenSiswaController::class,'delete'])->middleware('auth');

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