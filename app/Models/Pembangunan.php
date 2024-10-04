<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembangunan extends Model
{
    use HasFactory;

    protected $fillable = [
        'no_spk',
        'nama_pekerjaan',
        'nilai_pekerjaan',
        'tgl_mulai',
        'tgl_selesai',
        'hari_tersisa',
        'progress_pekerjaan',
    ];

}
