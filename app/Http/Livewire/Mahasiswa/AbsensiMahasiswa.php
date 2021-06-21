<?php

namespace App\Http\Livewire\Mahasiswa;

use App\Models\Absensi;
use Livewire\Component;
use App\Models\Kegiatan;
use App\Models\Pointskp;
use Illuminate\Support\Facades\Auth;

class AbsensiMahasiswa extends Component
{
    public $nim,$nama_kegiatan,$id_absensi,$keterangan,$point;

    public function render()
    {
        $date = date('Y-m-d');
        $this->kegiatan = Kegiatan::where('tanggal','>=',$date)->orderBy('tanggal')->get();

        $absensi = Absensi::latest()->paginate();
        $this->nim = Auth::user()->nim;

        return view('livewire.mahasiswa.absensi-mahasiswa',[
            'absensi' => $absensi,
            'kegiatan' => $this->kegiatan,
            'nim' => $this->nim 
        ]);
    }

    public function store($id){
        
        $absensi = Absensi::findOrFail($id);
        $this->nama_kegiatan = $absensi->kegiatan()->get()->implode('nama');
        $this->nim = Auth::user()->nim;
        $this->id_absensi = $absensi->id;
        $this->keterangan = 'Absensi Mahasiswa';
        $this->point = $absensi->kegiatan()->get()->implode('point_skp');


        $pointskp = Pointskp::create([
            'nim' => $this->nim,
            'nama_kegiatan' => $this->nama_kegiatan,
            'keterangan' => $this->keterangan,
            'id_absensi' => $this->id_absensi,
            'point' => $this->point,
        ]);

        $this->dispatchBrowserEvent('swal:modal');
    }


}
