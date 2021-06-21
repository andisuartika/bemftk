<?php

namespace App\Http\Livewire\Mahasiswa;

use Livewire\Component;
use App\Models\Validasi;
use Illuminate\Support\Facades\Auth;

class PrestasiMahasiswa extends Component
{

    public $nim;
    public $paginate = 5;
    public $search ;

    protected $updateQueryString = ['search'];

    public function mount(){
        $this->search = request()->query('search', $this->search);
    }
    
    public function render()
    {
        $this->nim = Auth::user()->nim;

        return view('livewire.mahasiswa.prestasi-mahasiswa',[
            'validasi' => $this->search === null ?
            Validasi::where('nim',$this->nim)->paginate($this->paginate) : 
            Validasi::where('nim',$this->nim)->where('nama_prestasi', 'LIKE', '%' .$this->search. '%')->paginate($this->paginate)
        ]);
    }
}
