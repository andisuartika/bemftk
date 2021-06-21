<?php

namespace App\Http\Livewire\Admin;

use App\Models\Absensi;
use Livewire\Component;
use App\Models\Kegiatan;

class CreateAbsensi extends Component
{

    public $kegiatan;
    public $id_kegiatan;
    public $time_start;
    public $time_end;

    protected $messages = [
        'id_kegiatan.required' => 'Kegiatan tidak boleh Kosong',
        'id_kegiatan.unique' => 'Absensi Kegiatan sudah tersedia',
        'time_start.required' => 'Waktu Mulai tidak boleh Kosong',
        'time_end.required' => 'Waktu Selesai tidak boleh Kosong',
    ];

    public function render()
    {
        $date = date('Y-m-d');
        $this->kegiatan = Kegiatan::where('tanggal','>=', $date)->orderBy('nama')->get();
        return view('livewire.admin.create-absensi');
    }

    public function store(){

        $this->validate([
            'id_kegiatan' => 'required',
            'time_start' => 'required',
            'time_end' => 'required'
        ]);

        $absensi = Absensi::create([
            'id_kegiatan' => $this->id_kegiatan,
            'time_start' => $this->time_start,
            'time_end' => $this->time_start
        ]);
        $this->resetInput();

        $this->emit('absensiStored', $absensi);

        $this->dispatchBrowserEvent('swal:modal');
    }

    private function resetInput(){
        $this->id_kegiatan = null;
        $this->time_start = null;
        $this->time_start = null;
    }
}
