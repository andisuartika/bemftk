<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Kegiatan;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class KegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if($request->has('search')){
            $kegiatan=Kegiatan::where('nama', 'LIKE', '%' .$request->search. '%')->latest()->paginate(5);
        }else {
            $kegiatan=Kegiatan::latest()->paginate(5);
        }
        $title="Kegiatan";

        return view('admin.kegiatan', compact('title', 'kegiatan')
    );

    
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title="Tambah Kegiatan";

        return view('admin.inputKegiatan', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $message=[
            'required'=> 'Field tidak boleh kosong',
        ];
        $validasi=$request->validate([
            'point_skp' => 'required',
            'nama' => 'required|unique:kegiatans',
            'tempat' => 'nullable',
            'tanggal' => 'required',
            'time_start'  => 'required',
            'time_end'  => 'required',
            'keterangan' => 'required',
        ], $message);
        Kegiatan::create($validasi);
        return redirect('admin/kegiatan')->with('succes', 'Data Kegiatan Berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kegiatan = Kegiatan::find($id);
        $title="Detail Kegiatan";
        return view('admin.showKegiatan', compact('title', 'kegiatan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kegiatan = Kegiatan::find($id);
        $title="Edit Kegiatan";
        return view('admin.inputKegiatan', compact('title', 'kegiatan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $message=[
            'required'=> 'Field tidak boleh kosong',
        ];
        $validasi=$request->validate([
            'point_skp' => 'required',
            'nama' => 'required',
            'tempat' => 'nullable',
            'tanggal' => 'required',
            'time_start'  => 'required',
            'time_end'  => 'required',
            'keterangan' => 'required',
        ], $message);
        Kegiatan::where('id', $id)->update($validasi);
        return redirect('admin/kegiatan')->with('succes', 'Data Mahasiswa Berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Kegiatan::where('id', $id)->delete();
        return redirect('admin/kegiatan')->with('succes', 'Data kegiatan Berhasil dihapus');
    }
}
