<?php

namespace App\Models;

use App\Models\User;
use App\Models\Absensi;
use App\Models\Kegiatan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pointskp extends Model
{
    use HasFactory;

    protected $fillable =[
        'nim','nama_kegiatan','id_absensi','keterangan','point'
    ];


    public function mahasiswa(){
        return $this->hasMany(User::class);
    }

    public function absensi(){
        return $this->hasMany(Absensi::class, 'id_absensi');
    }

}
