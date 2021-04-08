<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Jurusan;
use App\Models\Prodi;
use App\Models\Mahasiswa;

class Select extends Component
{
    
    public $jurusan=1;
    public $prodies = [];
    public $prodi;
    public $mahasiswa;


    public function render()
    {

        if(!empty($this->jurusan)){
            $this->prodies = Prodi::where('jurusan_id', $this->jurusan)->get();
        }

       $jurusans = Jurusan::orderBy('nama')->get();     
        return view('livewire.select')->with([
                'jurusans' => $jurusans
                ]);
    } 

}
