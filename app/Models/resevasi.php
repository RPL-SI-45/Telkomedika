<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reservasi extends Model
{
    use HasFactory;
    protected $table ='reservasi';
    protected $fillable = ['nama_pasien', 'nomor_pasien', 'tanggal_reservasi', 'alamat', 'keluhan'];
    protected $guarded =[];
}
