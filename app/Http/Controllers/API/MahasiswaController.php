<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use phpDocumentor\Reflection\Types\Nullable;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'nim' => 'required|unique:users',
            'prodi_id' => 'required',
            'jurusan_id' => 'required',
            'email' => 'required',
            'password' => 'nullable',
        ]);


        $mahasiswa = New User;
        $mahasiswa->name = $request->name;
        $mahasiswa->nim = $request->nim;
        $mahasiswa->prodi_id = $request->prodi_id;
        $mahasiswa->jurusan_id = $request->jurusan_id;
        $mahasiswa->email = $request->email;
        $mahasiswa->password = Hash::make($request['nim']);
        $mahasiswa->save();

        return response()->json([
            'massage' => 'Mahasiswa Berhasil ditambahkan!',
            'data_mahasiswa' => $mahasiswa
        ], 200);
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
        $mahasiswa = User::find($id);
        return response()->json([
            'massage' => 'Success!',
            'data_mahasiswa' => $mahasiswa
        ], 200);
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
        $mahasiswa = User::find($id);
        $request->validate([
            'name' => 'required',
            'nim' => 'required|unique:users',
            'prodi_id' => 'required',
            'jurusan_id' => 'required',
            'email' => 'required',
            'password' => 'nullable',
        ]);
        
        $mahasiswa->update([
            'name' => $request->name,
            'nim' => $request->nim,
            'prodi_id' => $request->prodi_id,
            'jurusan_id' => $request->jurusan_id,
            'email' => $request->email,
            'password' => Hash::make($request['nim']),
        ]);

        return response()->json([
            'massage' => 'Success!',
            'data_mahasiswa' => $mahasiswa
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $mahasiswa = User::find($id)->delete();
        
        return response()->json([
            'massage' => 'Data Berhasil dihapus!',
        ], 200);
    }
}
