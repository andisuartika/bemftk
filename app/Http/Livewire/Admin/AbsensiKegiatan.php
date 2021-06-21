<?php

namespace App\Http\Livewire\Admin;

use App\Models\Absensi;
use Livewire\Component;
use App\Models\Kegiatan;
use Livewire\WithPagination;

class AbsensiKegiatan extends Component
{
    use WithPagination;

    public $statusUpdate = false;
    public $kegiatan;
    public $id_kegiatan;
    public $time_start;
    public $time_end;
    public $absensi_id;
    public $delete_id;

    protected $messages = [
        'id_kegiatan.required' => 'Kegiatan tidak boleh Kosong',
        'id_kegiatan.unique' => 'Absensi Kegiatan sudah tersedia',
        'time_start.required' => 'Waktu Mulai tidak boleh Kosong',
        'time_end.required' => 'Waktu Selesai tidak boleh Kosong',
    ];

    protected $listeners = [
        'absensiStored' => 'handleStored'
    ];

    public function render(){

        $date = date('Y-m-d');
        $this->kegiatan = Kegiatan::where('tanggal','>=',$date)->orderBy('tanggal')->get();

        $absensi = Absensi::latest()->paginate();
        
        return view('livewire.admin.absensi-kegiatan',[
            'absensi' => $absensi,
            'kegiatan' => $this->kegiatan
        ]);
    }

    public function store(){

        $this->validate([
            'id_kegiatan' => 'required',
            'time_start' => 'required',
            'time_end' => 'required'
        ]);

        Absensi::updateOrCreate(['id' => $this->absensi_id], [
            'id_kegiatan' => $this->id_kegiatan,
            'time_start' => $this->time_start,
            'time_end' => $this->time_end,
        ]);

        $this->resetInput();

        if($this->absensi_id){
            $this->dispatchBrowserEvent('swal:modalUpdate');
        }
        else {
            $this->dispatchBrowserEvent('swal:modalCreate');
        }
    }

    private function resetInput(){
        $this->id_kegiatan = null;
        $this->time_start = null;
        $this->time_start = null;
    }

    public function edit($id)
    {
        $absensi = Absensi::findOrFail($id);
        $this->absensi_id = $id;
        $this->id_kegiatan = $absensi->id_kegiatan;
        $this->time_start = $absensi->time_start;
        $this->time_end = $absensi->time_end;

    }

    public function delete_id($id){
        $this->delete_id = $id;
    }

    public function delete()
    {
        Absensi::find($this->delete_id)->delete();
        $this->dispatchBrowserEvent('swal:modalDelete');
    }
}
