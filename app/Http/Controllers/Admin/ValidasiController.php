<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Pointskp;
use App\Models\Validasi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ValidasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.validasi');
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
        $validasi= Validasi::find($id);
        $nimMhs = $validasi->nim;
        $mahasiswa = User::where('nim',$nimMhs)->first();
        $title="Detail Validasi";
        return view('admin.showValidasi', compact('title', 'mahasiswa','validasi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $validasi= Validasi::find($id);
        $nimMhs = $validasi->nim;
        $mahasiswa = User::where('nim',$nimMhs)->first();
        $jenis_prestasi = [
            'Penghargaan dan Kejuaraan',
            'Pengalaman Berorganisasi',
            'Pengalaman Kepanitiaan',
            'Kontingen Lomba'
        ];
        return view('admin.updateValidasi', compact('mahasiswa','validasi','jenis_prestasi'));
        
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
        $id_validator = Auth::user()->id;
        $dataValidasi= Validasi::find($id);
        $nim =  $dataValidasi->nim;
        $nama_kegiatan =  $dataValidasi->nama_prestasi;
        $keterangan =  $dataValidasi->jenis_prestasi;
        $id_validasi = $dataValidasi->id;
        
        // Update status dan validator
        $validasiPrestasi = [
            'id_validator' => $id_validator,
            'status' => 'Diterima',
        ];
        Validasi::where('id', $id)->update($validasiPrestasi);

        // Insert Point SKP
        $message=[
            'required'=> 'Field tidak boleh kosong',
            'unique' => 'Data sudah ada!',
        ];

        $request->validate([
            'id_validasi' => 'required|unique:pointskps,id_absensi',
            'pointskp' => 'required',
        ], $message);

        Pointskp::create([
            'nim' => $nim,
            'nama_kegiatan' => $nama_kegiatan,
            'keterangan' => $keterangan,
            'id_absensi' => $id_validasi,
            'point' => $request->pointskp,
        ]);

        
        return redirect('admin/validasi')->with('succes', 'Validasi Diterima');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $id_validator = Auth::user()->id;
        $validasi = [
            'id_validator' => $id_validator,
            'status' => 'Ditolak'
        ];
        Pointskp::where('id_absensi', $id)->delete();
        Validasi::where('id', $id)->update($validasi);
        return redirect('admin/validasi')->with('succes', 'Validasi Ditolak');
    }


}
