<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Models\Kegiatan;
use App\Models\Pointskp;
use App\Models\Validasi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        $date = date('d');
        $nim = Auth::user()->nim;
        $prodiMhs = Auth::user()->prodi_id;
        $pointSkp = Pointskp::where('nim',$nim)->sum('point');

        if($prodiMhs == 1 || $prodiMhs == 7 ){
            $goalPoint = 100;
        }else{
            $goalPoint = 150;
        }  

        $kegiatan = Kegiatan::whereDay('tanggal', $date)->count();
        $prestasi =  Validasi::where('nim', $nim)->where('status', 'Pending')->count();

        return view('mahasiswa.dashboard', compact('pointSkp','goalPoint','kegiatan','prestasi'));
    }

}
