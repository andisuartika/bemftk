<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    // relasi table

    public function prodi()
    {
        return $this->belongsTo(Prodi::class, 'id');
    }

    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class, 'id');
    }


    // protected $table = 'mahasiswaftk';
    // protected $primaryKey = 'id';
    protected $fillable =[
        'jurusan_id','prodi_id','skp_id','nim','nama','email','password'
    ];
}
