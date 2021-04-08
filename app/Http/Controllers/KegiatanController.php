<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kegiatan;

class KegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kegiatan=Kegiatan::all();
        $title="Kegiatan";
        return view('admin.kegiatan', [
            'kegiatan'=> Kegiatan::latest()->paginate(5),
        ], compact('title', 'kegiatan')
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
