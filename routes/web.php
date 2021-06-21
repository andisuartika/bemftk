<?php

use App\Models\Absensi;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AbsensiController;
use App\Http\Controllers\Mahasiswa\SkpController;
use App\Http\Controllers\Mahasiswa\VueController;
use App\Http\Controllers\Admin\KegiatanController;
use App\Http\Controllers\Mahasiswa\HomeController;
use App\Http\Controllers\Admin\MahasiswaController;
use App\Http\Controllers\Admin\ValidasiController;
use App\Http\Controllers\Mahasiswa\BiodataController;
use App\Http\Controllers\Mahasiswa\PrestasiController;
use App\Http\Controllers\Mahasiswa\MhsAbsensiController;
use App\Http\Controllers\UploadController;

Route::group(['middleware' => 'auth'], function() {
    Route::group(['middleware' => 'roles:admin'], function() {
        Route::resources([
            '/admin/mahasiswa' => MahasiswaController::class,
            '/admin/kegiatan' => KegiatanController::class,
            '/admin/absensi' => AbsensiController::class,
            '/admin/validasi' => ValidasiController::class,
        ]);
        Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin');
        Route::POST('/admin/validasi/invalid/{id}', [ValidasiController::class, 'invalid'])->name('validasiInvalid');
        Route::get('/admin/exportmahasiswa', [MahasiswaController::class, 'MahasiswaExport'])->name('MahasiswaExport');
        Route::post('/admin/importmahasiswa', [MahasiswaController::class, 'MahasiswaImport'])->name('MahasiswaImport');
    });
   Route::group(['middleware' => 'roles:mahasiswa'], function() {
       Route::resources([
           '/mahasiswa/dashboard' => HomeController::class,
           '/mahasiswa/pointskp' => SkpController::class,
           '/mahasiswa/biodata' => BiodataController::class,
           '/mahasiswa/prestasi' => PrestasiController::class,
        ]);
        Route::get('/mahasiswa/absensi', [MhsAbsensiController::class, 'index'])->name('absensiMhs');
        Route::get('/mahasiswa', [VueController::class, 'index'])->name('dashboardMahasiswa');
   });
});
Route::get('/', function () {
    return view('dashboard');
});

Route::post('upload', [UploadController::class, 'store']);
