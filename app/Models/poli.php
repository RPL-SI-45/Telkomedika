<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class poli extends Model
{
    use HasFactory;
    protected $table ='poli';
    protected $fillable = ['Nama_Poli', 'Deskripsi_Poli', 'Nama_Dokter', 'Jadwal_Dokter'];
}
