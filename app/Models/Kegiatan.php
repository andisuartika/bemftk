<?php

namespace App\Models;

use App\Models\Pointskp;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kegiatan extends Model
{
    use HasFactory;

    protected $table = 'kegiatans';

    protected $cast = [
        'time_start' => 'datetime',
        'time_end' => 'datetime',
    ];

    

    protected $fillable =[
        'point_skp','nama','tempat','tanggal','time_start','time_end','keterangan'
    ];


    public function absensi()
    {
        return $this->belongsTo(Absensi::class);
    }
}
