<?php

namespace App\Http\Livewire;

use App\Models\Kegiatan;
use Livewire\Component;

class DashboardAdmin extends Component
{
    public $data;

    public function render()
    {
        $this->data = Kegiatan::latest()->get();
        return view('livewire.admin.dashboard-admin');
    }
}
