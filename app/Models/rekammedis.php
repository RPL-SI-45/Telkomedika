<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class antrian extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'rekammedis';
    protected $fillable = ['nama_pasien','tanggal_reservasi','tindakan'];
}
