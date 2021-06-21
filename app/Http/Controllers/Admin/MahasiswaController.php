<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Prodi;
use App\Models\Jurusan;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

use App\Exports\MahasiswaExport;
use App\Imports\MahasiswaImport;
use BaconQrCode\Renderer\Path\Path;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;


class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        if (Gate::denies('admin')) {
            abort(403);
        }

        if($request->has('search')){
            $mahasiswa=User::where('name', 'LIKE', '%' .$request->search. '%')->latest()->paginate(5);
        }else {
            $mahasiswa=User::where('roles', '=','mahasiswa')->latest()->paginate(5);
        }
        $title="Mahasiswa";

        return view('admin.mahasiswa', compact('title', 'mahasiswa')
    );
    }

    // ExportExcel
    public function MahasiswaExport(){
        return Excel::download(new MahasiswaExport,'mahasiswa.xlsx');
    }

    // ImportExcel
    public function MahasiswaImport(Request $request){
        $request->validate([
            'file' => 'required|mimes:csv,xlx,xls,xlsx,pdf|max:2048'
        ]);
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('DataMahasiswa', $namaFile);

        Excel::import(new MahasiswaImport, public_path('/DataMahasiswa/'.$namaFile));
        return redirect('admin/mahasiswa')->with('succes', 'Data Mahasiswa Berhasil diimport');
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
            'name' => 'required|unique:users|max:255',
            'nim'  => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'nullable',
        ], $message);


        User::create([
            'jurusan_id' => $request['jurusan_id'],
            'prodi_id' => $request['prodi_id'],
            'skp_id' => null,
            'name' => $request['name'],
            'nim'  => $request['nim'],
            'email' => $request['email'],
            'password' => Hash::make($request['nim']),
        ]);

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
        $mahasiswa = User::find($id);
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
        $mahasiswa = User::find($id);
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
            'name' => 'required',
            'nim'  => 'required',
            'email' => 'required|email',
            'password' => 'nullable',
        ], $message);
        User::where('id', $id)->update($validasi);
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
        User::where('id', $id)->delete();
        return redirect('admin/mahasiswa')->with('deleted', 'Data Mahasiswa Berhasil dihapus');
    }
}
