<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $title='Dashboard';
        return view('admin.index', compact('title'));
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
