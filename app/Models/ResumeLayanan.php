<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResumeLayanan extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_resume',
        'tanggal_dibuat',
        'kinerja_dokter',
        'kinerja_operasional',
        'penyakit_terbanyak',
    ];
}
