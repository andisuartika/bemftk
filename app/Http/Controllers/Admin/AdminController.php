<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Kegiatan;

class AdminController extends Controller
{
    public function index(){
        $title='Dashboard';
        $data = [
            'jumlahMhs' => User::where('roles', '=','mahasiswa')->count(),
            'mhsActive' => User::where('roles', '=','mahasiswa')
                                ->where('is_active', '=',true)->count(),
            'jumlahKegiatan' => Kegiatan::whereMonth('tanggal', '04')->count(),
        ];
        return view('admin.index', compact('title','data'));
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
