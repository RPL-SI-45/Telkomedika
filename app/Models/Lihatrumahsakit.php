<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lihatrumahsakit extends Model
{
    use HasFactory;
    protected $table ='lihatrumahsakit';
    protected $fillable = ['NamaRumahsakit', 'Alamat', 'Notelepon', 'Lokasi', 'Gambar'];
}
