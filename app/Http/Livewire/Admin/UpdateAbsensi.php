<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Kegiatan;

class UpdateAbsensi extends Component
{

    public $kegiatan;
    public $id_kegiatan;
    public $time_start;
    public $time_end;
    public $absensiId;

    protected $listeners =[
        'getAbsensi' => 'showAbsensi'
    ];

    public function render()
    {
        $date = date('Y-m-d');
        $this->kegiatan = Kegiatan::where('tanggal','>=', $date)->orderBy('nama')->get();
        return view('livewire.admin.update-absensi');
    }

    public function showAbsensi($absensi){
        $this->id_kegiatan = $absensi['id_kegiatan'];
        $this->time_start = $absensi['time_start'];
        $this->time_end = $absensi['time_end'];
        $this->absensiId = $absensi['id'];
    }
}
