<?php

use App\Http\Controllers\Manajemen_DVD_Controller;
use App\Http\Controllers\Manajemen_Peminjaman_Controller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('dashboard');
});

Route::get('tambah_dvd', [Manajemen_DVD_Controller::class, 'index']);
Route::post('/tambah_dvd', [Manajemen_DVD_Controller::class, 'store']);

Route::get('pinjam_dvd', [Manajemen_Peminjaman_Controller::class, 'index']);
Route::post('pinjam_dvd', [Manajemen_Peminjaman_Controller::class, 'store']);
