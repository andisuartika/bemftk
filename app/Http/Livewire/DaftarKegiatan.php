<?php

namespace App\Http\Livewire;

use App\Models\Kegiatan;
use Livewire\Component;
use Livewire\WithPagination;

class DaftarKegiatan extends Component
{
    use WithPagination;

    public $paginate = 5;
    public $search;

    protected $updateQueryString = ['search'];

    public function mount(){
        $this->search = request()->query('search', $this->search);
    }

    public function render()
    {

        return view('livewire.admin.daftar-kegiatan',[
            'kegiatan' => $this->search === null ?
            Kegiatan::latest()->paginate($this->paginate) : 
            Kegiatan::where('nama', 'LIKE', '%' .$this->search. '%')->latest()->paginate($this->paginate)
        ]);
    }
}
