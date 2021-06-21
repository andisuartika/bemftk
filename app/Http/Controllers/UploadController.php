<?php

namespace App\Http\Controllers;

use App\Models\TemporaryFile;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function store(Request $request){

        if($request->hasFile('file')){
            $file = $request->file('file');
            $filename = $file->getClientOriginalName();
            $folder = 'files/validasi';
            $file->storeAs('files/validasi' , $filename);

            TemporaryFile::create([
                'folder' => $folder,
                'filename' => $filename
            ]);

            return $folder;
        }

        return '';

    }
}
