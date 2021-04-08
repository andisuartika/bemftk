<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use App\Models\Mahasiswa;
use App\Models\Prodi;
use BaconQrCode\Renderer\Path\Path;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswa=Mahasiswa::all();
        $title="Mahasiswa";
        return view('admin.mahasiswa', [
            'mahasiswa'=> Mahasiswa::latest()->paginate(5),
        ], compact('title', 'mahasiswa')
    );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jurusan = Jurusan::get();
        $prodi = Prodi::get();
        $title="Tambah Mahasiswa";

        return view('admin.inputMahasiswa', compact('title','prodi','jurusan'));
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
            'jurusan_id' => 'required',
            'prodi_id' => 'required',
            'skp_id' => 'nullable',
            'nama' => 'required|unique:mahasiswas|max:255',
            'nim'  => 'required|unique:mahasiswas',
            'email' => 'required|email',
            'password' => 'nullable',
        ], $message);
        Mahasiswa::create($validasi);
        return redirect('admin/mahasiswa')->with('succes', 'Data Mahasiswa Berhasil ditambahkan');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $prodi = Prodi::get();
        $jurusan = Jurusan::get();
        $title="Detail Mahasiswa";
        return view('admin.showMahasiswa', compact('title', 'mahasiswa','prodi','jurusan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $mahasiswa = Mahasiswa::find($id);
        $prodies = Prodi::get();
        $jurusans = Jurusan::orderBy('nama')->get();
        $title="Edit Mahasiswa";
        return view('admin.inputMahasiswa', compact('title', 'mahasiswa','prodies','jurusans'));
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
            'nama' => 'required',
            'nim'  => 'required',
            'email' => 'required|email',
            'password' => 'nullable',
        ], $message);
        Mahasiswa::where('id', $id)->update($validasi);
        return redirect('admin/mahasiswa')->with('succes', 'Data Mahasiswa Berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Mahasiswa::where('id', $id)->delete();
        return redirect('admin/mahasiswa')->with('succes', 'Data Mahasiswa Berhasil dihapus');
    }
}
