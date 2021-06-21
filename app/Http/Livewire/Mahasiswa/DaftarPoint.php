<?php

namespace App\Http\Livewire\Mahasiswa;

use Livewire\Component;
use App\Models\Pointskp;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;

class DaftarPoint extends Component
{
    use WithPagination;

    public $point;
    public $totalPoint;
    public $nim;
    public $paginate = 10;
    public $search;
  
    protected $updateQueryString = ['search'];

    public function mount(){
        $this->search = request()->query('search', $this->search);
    }

    public function render()
    {
        $this->nim = Auth::user()->nim;
        $this->totalPoint = Pointskp::where('nim',$this->nim)->sum('point');

        return view('livewire.mahasiswa.daftar-point',[
            'skp' => $this->search === null ?
            Pointskp::where('nim',$this->nim)->paginate($this->paginate) : 
            Pointskp::where('nim',$this->nim)->where('nama_kegiatan', 'LIKE', '%' .$this->search. '%')->latest()->paginate($this->paginate)
        ]);
    }
}
