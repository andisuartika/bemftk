<?php

namespace App\Http\Livewire;

use App\Models\Kegiatan;
use Livewire\Component;

class KegiatanBerlangsung extends Component
{
    public $kegiatan;

    public function render()
    {
        $this->kegiatan = Kegiatan::whereMonth('tanggal', '04')->get();

        return view('livewire.admin.kegiatan-berlangsung');
    }
}
