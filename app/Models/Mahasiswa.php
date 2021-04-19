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
            return $this->belongsTo(Prodi::class);
        }
    
        public function jurusan()
        {
            return $this->belongsTo(Jurusan::class);
        }
    
        public function kegiatan()
        {
            return $this->hasMany(Kegiatan::class);
        }
    
        // protected $table = 'mahasiswaftk';
        // protected $primaryKey = 'id';
        protected $fillable =[
            'jurusan_id','prodi_id','skp_id','nim','nama','email','password','roles'
        ];
}
