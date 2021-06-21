<?php

namespace App\Http\Livewire\Admin;

use App\Models\Kegiatan;
use Livewire\Component;

class KegiatanBerlangsung extends Component
{
    public $kegiatan;

    public function render()
    {
        $bulan = date('m');

        $this->kegiatan = Kegiatan::whereMonth('tanggal', $bulan)->get();

        return view('livewire.admin.kegiatan-berlangsung');
    }
}
