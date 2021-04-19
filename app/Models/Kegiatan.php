<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
