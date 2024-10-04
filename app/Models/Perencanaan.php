<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perencanaan extends Model
{
    use HasFactory;

    protected $fillable = [
        'no_spk',
        'nama_pekerjaan',
        'tgl_spk_sp',
        'tgl_mulai',
        'tgl_selesai',
        'hari_tersisa',
        'termin',
    ];

}
