<?php

namespace App\Http\Livewire\Mahasiswa;

use Livewire\Component;
use App\Models\Kegiatan;

class KegiatanBerlangsung extends Component
{
    public $kegiatan;
    public function render()
    {
        $bulan = date('m');

        $this->kegiatan = Kegiatan::whereMonth('tanggal', $bulan)->get();
        return view('livewire.mahasiswa.kegiatan-berlangsung');
    }
}
