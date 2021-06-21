<?php

namespace App\Imports;

use Throwable;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Validators\Failure;
use Maatwebsite\Excel\Concerns\SkipsErrors;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class MahasiswaImport implements 
    ToModel, 
    WithHeadingRow, 
    SkipsOnError, 
    WithValidation,
    SkipsOnFailure
{
    use  SkipsErrors;
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {

        return new User([
            'jurusan_id' => $row['jurusan_id'], 
            'prodi_id' => $row['prodi_id'], 
            'nim' => $row['nim'], 
            'name' => $row['nama'], 
            'email' => $row['email'], 
            'password' => Hash::make($row['nim']), 
        ]);
    }

    public function rules(): array
    {
        return [
            '*.email' => ['email', 'unique:users,email']
        ];
    }

    public function onFailure(Failure ...$failures)
    {
        
    }
}
