<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Kegiatan;
use App\Models\Validasi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index(){
        $title='Dashboard';
        $month = date('m');
        $data = [
            'jumlahMhs' => User::where('roles', '=','mahasiswa')->count(),
            'mhsActive' => User::where('roles', '=','mahasiswa')
                                ->where('is_active', '=',true)->count(),
            'jumlahKegiatan' => Kegiatan::whereMonth('tanggal', $month)->count(),
        ];
        $validasi = Validasi::where('status', '=', 'Pending')->count();
        return view('admin.index', compact('title','data','validasi'));
    }
    
    public function kegiatan(){
        $title='Kegiatan';
        return view('admin.kegiatan', compact('title'));
    }

    public function validasi(){
        $title='Validasi';
        return view('admin.validasi', compact('title'));
    }
}
