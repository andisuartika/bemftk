<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Models\Validasi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\TemporaryFile;
use Illuminate\Support\Facades\Auth;

class PrestasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('mahasiswa.prestasi');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jenis_prestasi = [
            'Penghargaan dan Kejuaraan',
            'Pengalaman Berorganisasi',
            'Pengalaman Kepanitiaan',
            'Kontingen Lomba'
        ];
        $semester = ['Ganjil','Genap'];
      return view('mahasiswa.inputPrestasi', compact('jenis_prestasi','semester'));
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
        $request->validate([
            'tahun' => 'required|Numeric',
            'semester' => 'required',
            'jenis_prestasi' => 'required|',
            'nama_prestasi' => 'required|max:255',
            'keterangan' => 'required|max:255',
            'file' => 'required|max:10240'
        ], $message);

        $nim =  Auth::user()->nim;
        $temporaryFile = TemporaryFile::where('folder', $request->file)->first();

        $validasi = Validasi::create([
            'nim' => $nim,
            'id_validator' => null,
            'tahun' => $request['tahun'],
            'semester' => $request['semester'],
            'jenis_prestasi'  => $request['jenis_prestasi'],
            'nama_prestasi' => $request['nama_prestasi'],
            'keterangan' => $request['keterangan'],
            'status' => 'Pending',
            'file' => $temporaryFile->filename,
        ]);

        if($temporaryFile){
            // $validasi->addMedia(storage_path('app/public/files/tmp/' . $request->file . '/' . $temporaryFile->filename))->toMediaCollection('files');
            // rmdir(storage_path('app/public/files/tmp/' . $request->file));
            $temporaryFile->delete();
        }

        return redirect('mahasiswa/prestasi')->with('succes', 'Data Prestasi Berhasil ditambahkan');
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
        $prestasi = Validasi::find($id);
        $jenis_prestasi = [
            'Penghargaan dan Kejuaraan',
            'Pengalaman Berorganisasi',
            'Pengalaman Kepanitiaan',
            'Kontingen Lomba'
        ];
        $semester = ['Ganjil','Genap'];
        return view('mahasiswa.inputPrestasi', compact('prestasi','jenis_prestasi','semester'));
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
        $request->validate([
            'tahun' => 'required|Numeric',
            'semester' => 'required',
            'jenis_prestasi' => 'required|',
            'nama_prestasi' => 'required|max:255',
            'keterangan' => 'required|max:255',
            'file' => 'max:10240'
        ], $message);

        $nim =  Auth::user()->nim;
        $temporaryFile = TemporaryFile::where('folder', $request->file)->first();
        $file = Validasi::where('id', $id)->first();
        if($temporaryFile){
            $filename = $temporaryFile->filename;
        }else{
            $filename = $file->file;
        }
        $validasi = [
            'nim' => $nim,
            'id_validator' => null,
            'tahun' => $request['tahun'],
            'semester' => $request['semester'],
            'jenis_prestasi'  => $request['jenis_prestasi'],
            'nama_prestasi' => $request['nama_prestasi'],
            'keterangan' => $request['keterangan'],
            'status' => 'Pending',
            'file' => $filename
        ];

        Validasi::where('id', $id)->update($validasi);
        if($temporaryFile){
            // $validasi->addMedia(storage_path('app/public/files/tmp/' . $request->file . '/' . $temporaryFile->filename))->toMediaCollection('files');
            // rmdir(storage_path('app/public/files/tmp/' . $request->file));
            $temporaryFile->delete();
        }

        return redirect('mahasiswa/prestasi')->with('succes', 'Data Prestasi Berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Validasi::where('id', $id)->delete();
        return redirect('mahasiswa/prestasi')->with('deleted', 'Data Prestasi Berhasil dihapus');
    }
}
