<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class DaftarMahasiswa extends Component
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

        return view('livewire.admin.daftar-mahasiswa',[
            'mahasiswa' => $this->search === null ?
            User::where('roles', '=','mahasiswa')->latest()->paginate($this->paginate) : 
            User::where('roles', '=','mahasiswa')
                ->where('name', 'LIKE', '%' .$this->search. '%')->latest()->paginate($this->paginate)
        ]);
    }
}
