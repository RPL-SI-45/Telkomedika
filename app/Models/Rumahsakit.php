<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rumahsakit extends Model
{
    use HasFactory;
    protected $table ='rumahsakit';
    protected $fillable = ['NamaRumahsakit', 'Alamat', 'Notelepon', 'Lokasi', 'Gambar'];
}
