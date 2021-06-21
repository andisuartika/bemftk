<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Validasi;
use Illuminate\Support\Facades\Auth;

class ValidasiPrestasi extends Component
{
    public $id_validator;
    public $paginate = 5;
    public $search ;

    protected $updateQueryString = ['search'];

    public function mount(){
        $this->search = request()->query('search', $this->search);
    }

    public function render()
    {
        $this->id_validator = Auth::user()->id;

        return view('livewire.admin.validasi',[
            'validasi' => $this->search === null ?
            Validasi::latest()->paginate($this->paginate) : 
            Validasi::where('nama_prestasi', 'LIKE', '%' .$this->search. '%')->paginate($this->paginate)
        ]);
    }
}
