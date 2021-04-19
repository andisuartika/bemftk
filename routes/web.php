<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Mahasiswa\HomeController;
use App\Http\Controllers\Mahasiswa\SkpController;
use App\Http\Controllers\Mahasiswa\BiodataController;
use App\Http\Controllers\Admin\MahasiswaController;
use App\Http\Controllers\Admin\KegiatanController;
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


 
Route::group(['middleware' => 'auth'], function() {
    Route::group(['middleware' => 'roles:admin'], function() {
        Route::resources([
            '/admin/mahasiswa' => MahasiswaController::class,
            '/admin/kegiatan' => KegiatanController::class
        ]);
        Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin');
        Route::get('/admin/validasi', [AdminController::class, 'validasi'])->name('validasi')->middleware(['auth:sanctum', 'verified']);
    });
   Route::group(['middleware' => 'roles:mahasiswa'], function() {
       Route::resources([
           '/mahasiswa/dashboard' => HomeController::class,
           '/mahasiswa/pointskp' => SkpController::class,
           '/mahasiswa/biodata' => BiodataController::class,
        ]);
   });
});
