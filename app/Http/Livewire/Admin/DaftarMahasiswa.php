<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use App\Models\Prodi;
use App\Models\Jurusan;
use Livewire\Component;
use Livewire\WithPagination;

class DaftarMahasiswa extends Component
{
    use WithPagination;

    public $paginate = 10;
    public $search;
    public $jurusan;
    public $prodies = [];
    public $prodi;

    protected $updateQueryString = ['search'];

    public function mount(){
        $this->search = request()->query('search', $this->search);
    }

    public function render()
    {

        $this->prodies = $this->jurusan === null ?
                        Prodi::orderBy('nama')->get() : 
                        Prodi::where('jurusan_id', $this->jurusan)->get();
    
        $jurusans = Jurusan::orderBy('nama')->get();

        return view('livewire.admin.daftar-mahasiswa',[
            'mahasiswa' => $this->search === null ?
            User::where('roles', '=','mahasiswa')
                ->when($this->jurusan, function($query){
                    $query->where('jurusan_id', $this->jurusan);
                })
                ->when($this->prodi, function($query){
                    $query->where('prodi_id', $this->prodi);
                })
                ->latest()->paginate($this->paginate) : 
                
            User::where('roles', '=','mahasiswa')
                ->where('name', 'LIKE', '%' .$this->search. '%')
                ->when($this->jurusan, function($query){
                    $query->where('jurusan_id', $this->jurusan);
                })
                ->when($this->prodi, function($query){
                    $query->where('prodi_id', $this->prodi);
                })
                ->latest()->paginate($this->paginate),
            'jurusans' => $jurusans
        ]);
    }
}
