<?php

namespace App\Models;

use App\Models\Kegiatan;
use App\Models\Pointskp;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Absensi extends Model
{
    use HasFactory;

    protected $fillable =[
        'id_kegiatan','time_start','time_end','keterangan'
    ];

    public function kegiatan()
    {
        return $this->belongsTo(Kegiatan::class,'id_kegiatan');
    }

    public function pointskp()
    {
        return $this->belongsTo(Pointskp::class);
    }
}
