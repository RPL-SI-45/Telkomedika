<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class polipasien extends Model
{
    use HasFactory;
    protected $table ='polipasien';
    protected $fillable = ['Nama_Poli', 'Deskripsi_Poli', 'Nama_Dokter', 'Jadwal_Dokter'];
}