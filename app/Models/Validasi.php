<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Validasi extends Model
{
    use HasFactory;

    protected $fillable =[
        'nim','id_validator','tahun','semester','jenis_prestasi','nama_prestasi','keterangan','status','file'
    ];

    public function User(){
        return $this->belongsTo(User::class, 'nim');
    }
}
