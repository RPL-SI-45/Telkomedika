<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class antrian extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'antrian';
    protected $fillable = ['no_antrian', 'nama_pasien', 'jenis_kelamin', 'poli','tanggal_reservasi', 'status_pelayanan'];
    protected $primary_key='id';
}
