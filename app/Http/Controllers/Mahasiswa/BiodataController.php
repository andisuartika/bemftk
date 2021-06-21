<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Models\User;
use App\Models\Prodi;
use App\Models\Jurusan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class BiodataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $mahasiswa = Auth::user();
        $jurusan = Jurusan::get();
        $prodi = Prodi::get();
        return view('mahasiswa.biodata',compact('mahasiswa','jurusan','prodi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mahasiswa = Auth::user();
        $edit ='biodataEdit';
        $jurusan = Jurusan::get();
        $prodi = Prodi::get();
        return view('mahasiswa.biodata',compact('mahasiswa','edit','jurusan','prodi'));
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
            'jurusan_id' => 'required',
            'prodi_id' => 'required',
            'skp_id' => 'nullable',
            'name' => 'required',
            'nim'  => 'required',
            'email' => 'required|email',
            'password' => 'nullable',
        ], $message);
        User::where('id', $id)->update($validasi);
        return redirect('mahasiswa/biodata')->with('succes', 'Biodata Berhasil diubah');
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
