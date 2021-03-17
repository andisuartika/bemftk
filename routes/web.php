<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MahasiswaController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('welcome');
});

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

// Login
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [AdminController::class, 'index'])->name('dashboard');

Route::get('/admin', [AdminController::class, 'index'])->name('admin')->middleware(['auth:sanctum', 'verified']);

Route::resource('/admin/mahasiswa', MahasiswaController::class);


Route::get('/admin/kegiatan', [AdminController::class, 'kegiatan'])->name('kegiatan')->middleware(['auth:sanctum', 'verified']);

Route::get('/admin/validasi', [AdminController::class, 'validasi'])->name('validasi')->middleware(['auth:sanctum', 'verified']);
