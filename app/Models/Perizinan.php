<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perizinan extends Model
{
    use HasFactory;

    protected $fillable = [
        'no_spk',
        'nama_pekerjaan',
        'tgl_berita_acara',
        'progress_berita_acara',
        'posisi_berita_acara',
        'tgl_update',
        'keterangan',
    ];

}
